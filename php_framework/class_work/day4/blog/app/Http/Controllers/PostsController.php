<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use \App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::with('category')->paginate($this->MAX_POST);
        $posts = Post::with('category')->simplePaginate($this->MAX_POST);
        $cats = Category::with('posts')->get();
        return view('posts/index', compact('posts', 'cats'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts/show', compact('post'));
    }
}
