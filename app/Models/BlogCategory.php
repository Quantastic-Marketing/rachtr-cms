<?php

namespace App\Models;

use Firefly\FilamentBlog\Models\Category as BaseCategory;

class BlogCategory extends BaseCategory
{
     protected $fillable = [
        'name',
        'slug',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'canonical_url',
    ];

    protected $casts = [
    'seo_keywords' => 'array',
    ];
}
