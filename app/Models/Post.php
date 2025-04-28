<?php

namespace App\Models;

use Illuminate\Support\Str;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Firefly\FilamentBlog\Models\Post as BasePost;

class Post extends BasePost
{
    use Searchable;
    protected $appends = ['feature_photo'];

    public function toSearchableArray()
    {
        $cleanBody = preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', '', $this->body);
        $cleanBody = preg_replace('/style=("|\')(.*?)("|\')/is', '', $cleanBody);
        $cleanBody = preg_replace('/<img\b[^>]*>/i', '', $cleanBody);
        $textOnlyBody = strip_tags($cleanBody);

        return [
            'title' => $this->title,
            'body' => Str::limit($textOnlyBody, 10000),
        ];
    }

    public function searchableAs()
    {
        return 'fblog_posts';
    }
}
