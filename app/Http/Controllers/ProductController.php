<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\PageController;

class ProductController extends Controller
{
        public function index(Request $request)
        {
            $query = trim($request->query('query'));
            $page = $request->query('page', 1);
            
            if (!empty($query)) {
                
                $products =  Product::search($query)->get();
                $blogs = Post::search($query)->get();
                
            } else {
                $products = Product::paginate(4);
                $blogs = Post::paginate(4);
            }

            $categories = Category::select('id','name','slug')->get();
            
            return view('layouts.app',compact('products', 'blogs','categories'));
        }

        public function getAllProducts(Request $request,$slug){

            $page = $request->query('page', 1);
            $sort = $request->query('sort', 'az');
            try{
                
                $categories = Category::select('name','slug')->get();
                if ($slug === 'all-products' || $slug === 'products') {
                    
                    $products = Cache::remember("all_products_page_{$page}_{$sort}", 600, function () use ($sort) {
                        return Product::select('name', 'slug','content')
                                        ->when($sort === 'az', fn($q) => $q->orderBy('name', 'asc'))
                                        ->when($sort === 'za', fn($q) => $q->orderBy('name', 'desc'))
                                        ->when($sort === 'newest', fn($q) => $q->orderBy('created_at', 'desc'))
                                        ->paginate(10);
                    });

                } else {
                        // Cache category-specific products
                        $products = Cache::remember("category_{$slug}_products_{$sort}", 600, function () use ($slug,$sort) {
                            return Product::whereHas('categories', function ($query) use ($slug,$sort) {
                                $query->where('slug', $slug);
                            })
                            ->select('name', 'slug', 'content')
                            ->when($sort === 'az', fn($q) => $q->orderBy('name', 'asc'))
                            ->when($sort === 'za', fn($q) => $q->orderBy('name', 'desc'))
                            ->when($sort === 'newest', fn($q) => $q->orderBy('created_at', 'desc'))
                            ->get(); 
                        });
            
                       
                }
    
                return view('layouts.app',['categories' => $categories ,'products' => $products, 'slug' => $slug]);
    
            } catch(\Exception $e) {
                \Log::error('Error fetching products: ' . $e->getMessage());
                return response()->json(['error' => 'Something went wrong! Please try again later.'], 500);
            }
            
            
        }

        public function getSearchResultsDropdown(Request $request)
        {
            try {
                $query = trim($request->query('query'));
                $products = [];
                $blogs = [];
                if (!empty($query)) {
                    $products = $products = Product::search($query)->take(3)->get();
                    $blogs = Post::search($query)->take(3)->get();
                } 

                return response()->json([
                    'products' => $products,
                    'blogs' => $blogs,
                ],200);
            } catch(\Exception $e) {
                \Log::error('Error fetching search results: ' . $e->getMessage());
                return response()->json(['error' => 'Something went wrong! Please try again later.'], 500);
            }
        }

        

}
