<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Pages;
use App\Models\Product;
use Spatie\Sitemap\Sitemap;
use Illuminate\Http\Request;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;
use Firefly\FilamentBlog\Enums\PostStatus;

class PageController extends Controller
{
    public function getPage($slug=null){


        try{ 
            if ($slug == "/" || $slug == null) {
                    $pageDetails = Pages::where('is_homepage', true)->first();
                    $blogIds = $pageDetails->content['blogs'] ?? [];
                    $blogs = Post::whereIn('id', $blogIds)
                        ->select(['id', 'title', 'slug', 'published_at', 'cover_photo_path'])
                        ->get();
                if (!$pageDetails) {
                    return view('fallback');
                }
                return view('layouts.app',['page' => $pageDetails,'templatePath'=>'Templates.index' ,'blogs' => $blogs]);
            } else {
                $currentSlug = collect(explode('/', $slug))->last();

                $pageDetails =  Pages::where('slug', $currentSlug)->with('header', 'footer','parent')->first();
                $blogIds = $pageDetails->content['blogs'] ?? []; // Ensure it's an array
                $blogs = Post::whereIn('id', $blogIds)
                        ->select(['id', 'title', 'slug', 'published_at', 'cover_photo_path'])
                        ->get();
                $isProductList = !empty($pageDetails->content['is_product_list']) && $pageDetails->content['is_product_list'] == 1;
                $parentName=null;
                
                if ($isProductList) {
                    $templatePath = (request()->path() == $pageDetails->full_slug) ? 'Templates.product_list' : ' ';
                    $parentName = explode('/', $pageDetails->full_slug)[0];
                } else {
                    $templatePath = "Templates." . str_replace('/', '.', $slug);
                }
                if (!$pageDetails || !view()->exists($templatePath) ) {
                    return view('fallback');
                }

                $products = collect();
                if (!empty($pageDetails->content) && isset($pageDetails->content['sections'])) {
                    $productIds = collect($pageDetails->content['sections'])
                        ->pluck('products')
                        ->flatten()
                        ->unique()
                        ->filter()
                        ->values();
                    
                    
                    if ($productIds->isNotEmpty()) {
                        $products = Product::whereIn('id', $productIds)
                        ->select(['id', 'name', 'slug', 'content->product_desc as product_desc', 'content->product_images as product_images'])
                        ->get()
                        ->keyBy('id');
                    }
                }
             
                return view("layouts.app",['page' => $pageDetails,'templatePath'=>$templatePath,'products'=>$products,'blogs' => $blogs,'parentName' => $parentName]);
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


    public function getSitemap()
    {   
        \Log::info('Sitemap generation started');

        try {
            $sitemap = Sitemap::create();
            $baseUrl = config('app.url');

            \Log::info('Base URL:', ['url' => $baseUrl]);

            // Add Home URL
            $sitemap->add(Url::create("{$baseUrl}")
                ->setPriority(1.0)
                ->setChangeFrequency('daily'));
            \Log::info('Added Home URL to sitemap');

            // Add Pages
            $pages = Pages::select(['id', 'slug', 'updated_at', 'parent_id'])
                            ->with(['parent' => function ($query) {
                                $query->select('id', 'slug', 'parent_id');
                            }])->get();

            foreach ($pages as $page) {
                $slug = $page->slug;
                $current = $page->parent;
                $visited = [$page->id];
                $depth = 0;
                $maxDepth = 2; 
                while ($current && !in_array($current->id, $visited) && $depth < $maxDepth) {
                    $slug = "{$current->slug}/{$slug}";
                    $visited[] = $current->id;
                    $current = $current->parent;
                    $depth++;
                }
                
                $slug = ltrim($slug, '/'); 
                $url = rtrim($baseUrl, '/') . '/' . $slug;
                $sitemap->add(Url::create($url)
                    ->setLastModificationDate($page->updated_at)
                    ->setPriority(0.7));
         
                \Log::info('Added Page to sitemap', ['url' => $url]);
            }

            // Add Products
            $products = Product::select(['slug', 'updated_at'])->get();
    
            foreach ($products as $product) {
                $url = "{$baseUrl}/product-page/{$product->slug}";
                $sitemap->add(Url::create($url)
                    ->setLastModificationDate($product->updated_at)
                    ->setPriority(0.6));
                \Log::info('Added Product to sitemap', ['url' => $url]);
            }

            // Add Blog Posts
            $posts = Post::select(['slug', 'updated_at'])->get();

            foreach ($posts as $post) {
                $url = "{$baseUrl}/blogs/{$post->slug}";
                $sitemap->add(Url::create($url)
                    ->setLastModificationDate($post->updated_at)
                    ->setPriority(0.5));
                \Log::info('Added Blog Post to sitemap', ['url' => $url]);
            }

            // Save Sitemap
            $sitemapPath = public_path('sitemap.xml');
            $sitemap->writeToFile($sitemapPath);

            \Log::info('Sitemap saved', ['path' => $sitemapPath]);

            if (!file_exists($sitemapPath)) {
                return response()->json(['message' => 'Sitemap not found'], 404);
            }
    
            return Response::file($sitemapPath, [
                'Content-Type' => 'application/xml'
            ]);
            
        } catch (\Exception $e) {
            \Log::error('Error generating sitemap', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'Sitemap Generation error'], 404);
        }
    }

    public static function publishPendingPosts()
    {
        try {
            $updatedRows = Post::where('status', PostStatus::PENDING)
                ->update([
                    'status' => PostStatus::PUBLISHED,
                ]);
    
            return response()->json([
                'success' => true,
                'message' => "$updatedRows pending posts have been updated to published."
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error updating posts: ' . $e->getMessage()
            ], 500);
        }
    }

}
