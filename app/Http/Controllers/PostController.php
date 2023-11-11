<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function show($title)
    {
        $post = Post::where('title', $title)->with('user')->first();
        $page = [
            'title' => 'Blog !Bogeng | ' . $post->title,
            'description' => $post->highlight,
            'active' => 'dashboard'
        ];

        return view('blog.blog', compact('post', 'page'));
    }
}
