<?php

namespace App\Console\Commands;

use App\Models\Pages;
use App\Models\Product;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;
use Firefly\FilamentBlog\Models\Post;
use Illuminate\Support\Facades\Log;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates the sitemap for the website including all blogs and the products';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Log::info('Sitemap generation started');

        try {
            $sitemap = Sitemap::create();
            $baseUrl = config('app.url');

            Log::info('Base URL:', ['url' => $baseUrl]);

            // Add Home URL
            $sitemap->add(Url::create("{$baseUrl}")
                ->setPriority(1.0)
                ->setChangeFrequency('daily'));
            Log::info('Added Home URL to sitemap');

            // Add Pages
            $pages = Pages::select(['slug', 'updated_at', 'parent_id'])->with('parent')->get();
            Log::info('Fetched pages', ['count' => $pages->count()]);

            foreach ($pages as $page) {
                $url = "{$baseUrl}/{$page->full_slug}";
                $sitemap->add(Url::create($url)
                    ->setLastModificationDate($page->updated_at)
                    ->setPriority(0.7));
                Log::info('Added Page to sitemap', ['url' => $url]);
            }

            // Add Products
            $products = Product::select(['slug', 'updated_at'])->get();
            Log::info('Fetched products', ['count' => $products->count()]);

            foreach ($products as $product) {
                $url = "{$baseUrl}/product-page/{$product->slug}";
                $sitemap->add(Url::create($url)
                    ->setLastModificationDate($product->updated_at)
                    ->setPriority(0.6));
                Log::info('Added Product to sitemap', ['url' => $url]);
            }

            // Add Blog Posts
            $posts = Post::select(['slug', 'updated_at'])->get();
            Log::info('Fetched blog posts', ['count' => $posts->count()]);

            foreach ($posts as $post) {
                $url = "{$baseUrl}/blogs/{$post->slug}";
                $sitemap->add(Url::create($url)
                    ->setLastModificationDate($post->updated_at)
                    ->setPriority(0.5));
                Log::info('Added Blog Post to sitemap', ['url' => $url]);
            }

            // Save Sitemap
            $sitemapPath = public_path('sitemap.xml');
            $sitemap->writeToFile($sitemapPath);

            Log::info('Sitemap saved', ['path' => $sitemapPath]);

            $this->info('Sitemap generated successfully!');
        } catch (\Exception $e) {
            Log::error('Error generating sitemap', ['error' => $e->getMessage()]);
            $this->error('Failed to generate sitemap. Check logs for details.');
        }
    }
}
