<?php

namespace App\Models;

use App\Models\Seo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

class Product extends Model
{
    use HasSEO;
    protected $fillable = ['name', 'slug', 'template', 'content', 'is_active'];

    protected $casts = [
        'content' => 'array',   // Cast JSON to array
        'is_active' => 'boolean',
    ];

    public function seo()
    {
        return $this->morphOne(Seo::class, 'model');
    }

    /**
     * Boot the model and attach event listeners.
     */
    protected static function booted()
    {
        // When a product is updated
        static::updated(function ($product) {
            if ($product->isDirty('content')) {
                static::deleteRemovedImages($product);
            }

            $original = $product->getOriginal('content');
            $disk = 'public';
            if (isset($original['download_sheet']) && (!isset($product->content['download_sheet']) || $original['download_sheet'] !== $product->content['download_sheet'])) {
                Storage::disk($disk)->delete($original['download_sheet']);
            }
            if (isset($original['download_cert']) && (!isset($product->content['download_cert']) || $original['download_cert'] !== $product->content['download_cert'])) {
                Storage::disk($disk)->delete($original['download_cert']);
            }
        });
    }

    /**
     * Delete images that were removed from the content.product_images repeater.
     *
     * @param Product $product
     * @return void
     */
    protected static function deleteRemovedImages(Product $product)
    {
        $originalContent = $product->getOriginal('content') ?? [];
        $newContent = $product->content ?? [];

        // Extract product_images from both states
        $originalImages = collect(data_get($originalContent, 'product_images', []))
            ->pluck('product_image')
            ->filter()
            ->values();
        $newImages = collect(data_get($newContent, 'product_images', []))
            ->pluck('product_image')
            ->filter()
            ->values();
        $removedImages = $originalImages->diff($newImages);
        $removedImages->each(function ($imagePath) {
            static::deleteImageFromStorage($imagePath);
        });
    }

    /**
     * Delete a single image from storage with safety checks and logging.
     *
     * @param string|null $imagePath
     * @return void
     */
    protected static function deleteImageFromStorage($imagePath)
    {
        if (!$imagePath) {
            return;
        }
        $disk = 'public';
        try {
            if (Storage::disk($disk)->exists($imagePath)) {
                Storage::disk($disk)->delete($imagePath);
                \Log::info("Deleted image from storage: {$imagePath}");
            } else {
                \Log::warning("Image not found in storage for deletion: {$imagePath}");
            }
        } catch (\Exception $e) {
            \Log::error("Failed to delete image: {$imagePath}. Error: " . $e->getMessage());
        }
    }

}
