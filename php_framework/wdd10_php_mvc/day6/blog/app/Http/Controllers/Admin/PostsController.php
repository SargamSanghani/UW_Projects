<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin/posts/index',['posts' => $posts]);
    }

    public function create()
    {
        $tags = Tag::all();
        $cats = Category::pluck('name', 'id');
        return view('admin/posts/create', compact('tags', 'cats'));
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'title' => 'required|string|min:4',
            'content' => 'required|string',
            'image' => 'nullable|image',
            'category_id' => 'required|integer',
            'tags' => 'nullable|array'
        ]);


        if($request->file('image')) {
            $path = $request->file('image')->store('public');
        }

        $valid['image'] = basename($path ?? 'default.jpg');

        $post = Post::create($valid);

        $post->tags()->attach($valid['tags']);

        return redirect('/admin/posts')->withSuccess('Post successfull created');
    }
}
