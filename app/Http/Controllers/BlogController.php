<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Firefly\FilamentBlog\Models\Post;

class BlogController extends Controller
{
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->where('status', 'published')->firstOrFail();
        return view('Blog.blog-template', compact('post'));
    }
}
