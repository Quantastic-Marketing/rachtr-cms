<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getPage($slug=null){


        try{ 
            if ($slug == "/" || $slug == null) {
                $pageDetails = Pages::where('is_homepage', true)->with('header','footer')->first();
                if (!$pageDetails) {
                    return view('fallback');
                }
                return view('Templates.index',['page' => $pageDetails]);
            } else {
                $currentSlug = collect(explode('/', $slug))->last();
                $pageDetails = Pages::where('slug', $currentSlug)->with('header','footer')->first();
                
                if (!$pageDetails) {
                    return view('fallback');
                }
                
                return view("Templates.".str_replace('/', '.', $slug),['page' => $pageDetails]);
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

            return view('Templates.Product.'.$product->template,['product'=>$product]);
        }catch(Expression $e){
            \Log::error('Product load error: ' . $e->getMessage());
            return response()->json(["message"=>"Error occured while loading" . $e.message()],500);
        }
    }
}
