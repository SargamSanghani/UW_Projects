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
            'category_id' => 'required',
            'image' => 'nullable|image'
        ]);

        if ($request->file('image')) {
            $path =  $request->file('image')->store('public');
        }

        $valid['image'] = basename($path ?? 'default.jpg');

        Post::create($valid);

        session()->flash('success', 'Post successfully created!');

        return redirect('/admin');
    }

    public function edit(Post $post)
    {
        $cats = Category::get();
        return view('admin/posts/edit', compact('cats', 'post'));
    }

    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'id' => 'required|integer',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required',
            'image' => 'nullable|image'
        ]);

        if ($request->file('image')) {
            $path = $request->file('image')->store('public');
        }

        $post = Post::find($valid['id']);

        $valid['image'] = basename($path ?? $post->image);

        $post->update($valid);

        if ($post->save()) {
            session()->flash('success', 'Post was successfully updated');
        } else {
            session()->flash('error', 'There was a problem updating the post');
        }
        return redirect('/admin');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if ($post->delete()) {
            session()->flash('success', 'Post was deleted');
            return redirect('/admin');
        }
        session()->flash('error', 'There was a problem deleting the post');
        return redirect('/admin');
    }
}