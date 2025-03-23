<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PageController extends Controller
{
    public function getPage($slug=null){


        try{ 
            if ($slug == "/" || $slug == null) {
                    $pageDetails = Pages::where('is_homepage', true)->first();
                    
                if (!$pageDetails) {
                    return view('fallback');
                }
                return view('Templates.index',['page' => $pageDetails]);
            } else {
                $currentSlug = collect(explode('/', $slug))->last();
                $pageDetails = Cache::remember("page_{$currentSlug}", 60, function () use ($currentSlug) {
                    return Pages::where('slug', $currentSlug)->with('header', 'footer')->first();
                });
                $isProductList = !empty($pageDetails->content['is_product_list']) && $pageDetails->content['is_product_list'] == 1;
                if ($isProductList) {
                    $templatePath = (request()->path() == $pageDetails->full_slug) ? 'Templates.product_list' : '';
                } else {
                    $templatePath = "Templates." . str_replace('/', '.', $slug);
                }
                if (!$pageDetails || !view()->exists($templatePath) ) {
                    return view('fallback');
                }

                $products = collect();
                if (!empty($pageDetails->content['sections'])) {
                    $productIds = collect($pageDetails->content['sections'])->pluck('products')->flatten()->unique();

                    $products = Cache::remember("products_page_{$currentSlug}", 60, function () use ($productIds) {
                        return Product::whereIn('id', $productIds)->get();
                    });
                }
                
                
                return view("layouts.app",['page' => $pageDetails,'templatePath'=>$templatePath,'products' => $products]);
            }
        }catch(Exception $e){
            \Log::error('Page load error: ' . $e->getMessage());
            return response()->json(["message"=>"Error occured while loading" . $e.message()],500);
        }
    }

    public function getProductPage($slug){
        try{
            $product = Product::where('slug',$slug)->with('seo')->first();
            if(!$product){
                return view('fallback');
            }
            return view('layouts.app',['page'=>$product,'template'=>$product->template]);
        }catch(Expression $e){
            \Log::error('Product load error: ' . $e->getMessage());
            return response()->json(["message"=>"Error occured while loading" . $e.message()],500);
        }
    }
}
