<?php

namespace App\Models;

use App\Models\Seo;
use App\Models\Pages;
use App\Models\CommonComponents;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;


class Pages extends Model
{
    use HasSEO;
    protected $fillable = [
        'title',
        'slug',
        'parent_id',
        'header_id',
        'footer_id',
        'status',
        'is_homepage'
    ];

    public function header()
    {
        return $this->belongsTo(CommonComponents::class, 'header_id');
    }

    // BelongsTo relationship for Footer
    public function footer()
    {
        return $this->belongsTo(CommonComponents::class, 'footer_id');
    }

    public function parent()
    {
        return $this->belongsTo(Pages::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Pages::class, 'parent_id');
    }

    public function seo()
    {
        return $this->morphOne(Seo::class, 'model');
    }


    public function getFullSlugAttribute()
    {
        $slug = $this->slug;
        $parent = $this->parent;
        while ($parent) {
            $slug = $parent->slug . '/' . $slug;
            $parent = $parent->parent;
        }
        return $slug;
    }

    /**
     * Ensure only one post is marked as homepage.
     */
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($post) {
            if ($post->is_homepage) {
                // Unmark all other posts as homepage
                static::where('id', '!=', $post->id)
                    ->where('is_homepage', true)
                    ->update(['is_homepage' => false]);
            }
        });
    }

    

}
