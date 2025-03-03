<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;

class Product extends Model
{
    use HasSEO;
    protected $fillable = ['name', 'slug', 'template', 'content', 'is_active'];

    protected $casts = [
        'content' => 'array',   // Cast JSON to array
        'is_active' => 'boolean',
    ];
}
