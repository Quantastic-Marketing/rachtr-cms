<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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
            try{
                
                $categories = Category::select('name','slug')->get();
                if ($slug === 'all-products' || $slug === 'sproducts') {
                    
                    $products = Cache::remember("all_products_page_{$page}", 600, function () {
                        return Product::select('name', 'slug','content')->paginate(10);
                    });

                } else {
                        // Cache category-specific products
                        $products = Cache::remember("category_{$slug}_products", 600, function () use ($slug) {
                            return Product::whereHas('categories', function ($query) use ($slug) {
                                $query->where('slug', $slug);
                            })->select('name', 'slug', 'content')->get(); 
                        });
            
                       
                }
    
                return view('layouts.app',['categories' => $categories ,'products' => $products, 'slug' => $slug]);
    
            } catch(\Exception $e) {
                \Log::error('Error fetching products: ' . $e->getMessage());
                return response()->json(['error' => 'Something went wrong! Please try again later.'], 500);
            }
            
            
        }

}
