<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Firefly\FilamentBlog\Models\Post as BasePost;
use Illuminate\Database\Eloquent\Model;

class Post extends BasePost
{
    use Searchable;

    public function toSearchableArray()
    {
        $cleanBody = preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', '', $this->body);
        $cleanBody = preg_replace('/style=("|\')(.*?)("|\')/is', '', $cleanBody);
        $cleanBody = preg_replace('/<img[^>]+\>/i', '', $cleanBody);
        $textOnlyBody = strip_tags($cleanBody);

        return [
            'title' => $this->title,
            'body' => $textOnlyBody,
        ];
    }

    public function searchableAs()
    {
        return 'fblog_posts';
    }
}
