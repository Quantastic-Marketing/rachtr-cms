<?php

namespace App\Models;

use RalphJSmit\Laravel\SEO\Models\SEO as BaseSEO;
use Illuminate\Database\Eloquent\Model;

class Seo extends BaseSEO
{
    protected $fillable = [
        'title',
        'description',
        'keywords',
        'robots',
        'canonical_url',
        'meta'
    ];
}
