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
                \Log::info('Page fetch start', [
                    'time' => microtime(true),
                    'memory_usage' => memory_get_usage(true) . ' bytes',
                    'peak_memory_usage' => memory_get_peak_usage(true) . ' bytes'
                ]);
                $startTime = microtime(true);
                $startMemory = memory_get_usage(true);
                $pageDetails =  Pages::where('slug', $currentSlug)->with('header', 'footer')->first();
                $endTime = microtime(true);
                $endMemory = memory_get_usage(true);

                \Log::info('Page fetch end', [
                    'time' => microtime(true),
                    'memory_usage' => memory_get_usage(true) . ' bytes',
                    'peak_memory_usage' => memory_get_peak_usage(true) . ' bytes'
                ]);
                
                \Log::info('Page fetch duration', [
                    'duration' => ($endTime - $startTime) . ' seconds',
                    'memory_used' => ($endMemory - $startMemory) . ' bytes'
                ]);
                $isProductList = !empty($pageDetails->content['is_product_list']) && $pageDetails->content['is_product_list'] == 1;
                \Log::info('Template Path is:'.$isProductList);
                if ($isProductList) {
                    $templatePath = (request()->path() == $pageDetails->full_slug) ? 'Templates.product_list' : '';
                    \Log::info('Template Path is:'.$templatePath);
                    return view("layouts.app",['page' => $pageDetails,'templatePath'=>$templatePath]);
                } else {
                    $templatePath = "Templates." . str_replace('/', '.', $slug);
                    \Log::info('else part Template Path is:'.$templatePath);
                }
                if (!$pageDetails || !view()->exists($templatePath) ) {
                    return view('fallback');
                }
                
                return view("layouts.app",['page' => $pageDetails,'templatePath'=>$templatePath]);
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

    public function getProducts(Request $request)
{
    try {
        \Log::info('getProducts API called');
        $startTime = microtime(true);
        $sections = $request->input('sections', []);

        if (empty($sections)) {
            \Log::warning('No sections provided in request');
            return response()->json(['message' => 'No sections provided'], 400);
        }

        // Extract all product IDs from the request
        $productIds = collect($sections)->pluck('product_ids')->flatten()->unique()->filter();

        if ($productIds->isEmpty()) {
            \Log::info('No product IDs found');
            return response()->json(['message' => 'No products found'], 200);
        }

        // Fetch products using a single query and cache them for 10 minutes
        $products = Product::whereIn('id', $productIds)
                ->select(['id', 'name', 'slug', 'content->product_desc as product_desc', 'content->product_images as product_images'])
                ->get()
                ->keyBy('id');
        \Log::info('Fetched products count: ' . $products->count());

        // Group products by section
        $sectionsWithProducts = collect($sections)->map(function ($section) use ($products) {
            return [
                'section_key' => $section['section_key'],
                'products' => collect($section['product_ids'])->map(fn($id) => $products[$id] ?? null)->filter()->values()
            ];
        });
        \Log::info('Final response data', ['sections' => $sectionsWithProducts]);

        \Log::info('getProducts execution time: ' . round(microtime(true) - $startTime, 4) . ' seconds');

        return response()->json(['products' => $sectionsWithProducts]);

    } catch (Exception $e) {
        \Log::error('Product fetch error: ' . $e->getMessage());
        return response()->json(['message' => 'Error fetching products'], 500);
    }
}

    public function getSitemap()
    {
        $path = public_path('sitemap.xml');

        if (!file_exists($path)) {
            return response()->json(['message' => 'Sitemap not found'], 404);
        }

        return Response::file($path, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
