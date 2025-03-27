<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','slug','description'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product');
    }

    protected static function booted()
    {
        static::saved(fn () => Cache::forget('categories_with_products'));
        static::deleted(fn () => Cache::forget('categories_with_products'));
    }
}
