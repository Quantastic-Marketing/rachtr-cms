<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Firefly\FilamentBlog\Models\Post;

class BlogController extends Controller
{
   
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->where('status', 'published')->firstOrFail();
        return view('Blog.blog-template', compact('post'));
    }

    public function updatePublishedDates()
{

    $posts = Post::where('title', 'like', '[%]%')->get();
    foreach ($posts as $post) {
        // Extract date-time from title using regex
        if (preg_match('/^\[(\d{4}-\d{2}-\d{2})\s*(\d{1,2}(?:AM|PM))?\]\s*(.+)$/i', $post->title, $matches)) {
            $date = $matches[1];
            $time = $matches[2] ?? null;
            $newTitle = $matches[3];

            if ($time) {
                $dateTime = Carbon::parse("$date $time");
            } else {
                $dateTime = Carbon::parse($date)->startOfDay(); // Default to start of day (00:00:00)
            }
            $post->update([
                'published_at' => $dateTime,
                'title' => $newTitle, 
            ]);

            \Log::info("Updated Post ID: {$post->id}, Published At: {$dateTime}, New Title: {$newTitle}");
        }
    }

    return response()->json(['message' => 'Titles and publish dates updated successfully']);
}
}
