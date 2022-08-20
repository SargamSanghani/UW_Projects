<?php

namespace App\Http\Controllers;

use \App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::with('category')->paginate($this->MAX_POSTS);
        $title = 'Recent Posts';
        // $cats = Category::with('posts')->get();
        $posts = Post::with('category')->latest()->simplePaginate($this->MAX_POSTS);
        return view('posts/index', compact('posts', 'title'));
    }

    public function show($id) {
        $post = Post::find($id);
        return view('posts/show', compact('post'));
    }
}
