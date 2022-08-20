<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index($id)
    {
        $cat = Category::with('posts')->find($id);
        $title = 'Category: ' . $cat->name;
        return view('categories/index', compact('cat', 'title',));
    }
}
