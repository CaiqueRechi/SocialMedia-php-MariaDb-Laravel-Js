<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $data['topPosts'] = Post::orderBy('visits', 'desc')->take(9)->get();
        $data['posts'] = Post::latest()->paginate(3);

        return view('site.index', $data);
    }
}
