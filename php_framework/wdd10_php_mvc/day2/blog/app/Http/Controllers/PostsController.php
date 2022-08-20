<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        $posts = Post::with('category')->get();
        return view('posts/index', compact('posts'));
    }

    public function show($id) {
        $post = Post::find($id);
        return view('posts/show', compact('post'));
    }
}
