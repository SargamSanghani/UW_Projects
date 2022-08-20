<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $title = 'Home';
        $tagline = 'Welcome to our website!';
        return view('index', compact('title', 'tagline'));
    }

    public function about()
    {
        $title = 'About';
        $tagline = 'Hey! We are food corner!';
        return view('about', compact('title', 'tagline'));
    }

    public function detail()
    {
        $title = 'Products';
        $tagline = 'View our delicious products!';
        return view('detail', compact('title', 'tagline'));
    }

    public function contact()
    {
        $title = 'Contact';
        $tagline = 'Tell us how can we help you?';
        return view('contact', compact('title', 'tagline'));
    }

    public function register()
    {
        $title = 'Register';
        $tagline = 'Please register to get products at your doorstep!';
        return view('register', compact('title', 'tagline'));
    }
}
