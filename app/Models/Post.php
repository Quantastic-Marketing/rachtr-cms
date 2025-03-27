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
        return [
            'title' => $this->title
        ];
    }

    public function searchableAs()
    {
        return 'fblog_posts';
    }
}
