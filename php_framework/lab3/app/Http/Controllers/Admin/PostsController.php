<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * A method to show the admin list view of posts
     *
     * @return void
     */
    public function index()
    {
        $posts =  Post::with('category')->paginate($this->MAX_PER_PAGE);

        return view('admin/index', compact('posts'));
    }

    /**
     * A method  to be used to display the view posts/create
     *
     * @return void
     */
    public function create()
    {
        $cats = Category::get();
        return view('admin/posts/create', compact('cats'));
    }

    /**
     * A method to be used for processing the POST submission
     *
     * @return void
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required'
        ]);

        $valid['image'] = 'https://via.placeholder.com/900x400.png/0044bb?text=placeholder';

        Post::create($valid);

        session()->flash('success', 'User successfully created!');

        return redirect('/admin');
    }
}
