<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $title = 'Home';
        return view('home', compact('title'));
    }

    public function test()
    {
        $title = 'Test';
        return view('test', compact('title'));
    }

    public function about()
    {
        $title = 'About us';
        return view('about', compact('title'));
    }
}
