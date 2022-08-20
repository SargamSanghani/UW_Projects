<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('/posts/index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('/posts/{$id}', compact('post'));
    }
}
