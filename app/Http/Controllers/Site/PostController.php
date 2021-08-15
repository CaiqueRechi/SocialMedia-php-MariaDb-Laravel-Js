<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function show(Post $post, string $slug)
    {
        $post->increment('visits');
        return view('site.posts.show', ['post' => $post]);
    }
}
