<?php

namespace App\Console\Commands;

use App\Models\Pages;
use App\Models\Product;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;
use Firefly\FilamentBlog\Models\Post;

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
    protected $description = 'generates the sitemap for the website including all blogs and the products';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create();
        $baseUrl = config('app.url');

        $sitemap->add(Url::create("{$baseUrl}")
            ->setPriority(1.0)
            ->setChangeFrequency('daily'));

        $pages = Pages::select(['slug', 'updated_at','parent_id'])->with('parent')->get();
        foreach ($pages as $page) {
            $sitemap->add(Url::create("{$baseUrl}/{$page->full_slug}")
                ->setLastModificationDate($page->updated_at)
                ->setPriority(0.7));
        }

        // Add Products
        $products = Product::select(['slug', 'updated_at'])->get();
        foreach ($products as $product) {
            $sitemap->add(Url::create("/product-page/{$product->slug}")
                ->setLastModificationDate($product->updated_at)
                ->setPriority(0.6));
        }

        // Add Blog Posts
        $posts = Post::select(['slug', 'updated_at'])->get();
        foreach ($posts as $post) {
            $sitemap->add(Url::create("/blogs/{$post->slug}")
                ->setLastModificationDate($post->updated_at)
                ->setPriority(0.5));
        }

        // Save Sitemap
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully!');
        
    }
}
