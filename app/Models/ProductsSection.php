<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductsSection extends Model
{
    protected $fillable = ['name', 'product_ids'];
    protected $casts = [
        'product_ids' => 'array',
    ];
}
