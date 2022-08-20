<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use Illuminate\Support\Facades\Auth;

class MyAuthController extends Controller
{
    public function register()
    {
        $title = 'Register';
        return view('register', compact('title'));
    }

    public function process_register(Request $request)
    {
        // Validate the form input
        $valid = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password_confirm' => 'required|same:password'
        ]);

        // Create new record with form input
        $user = User::create([
            'name' => $valid['name'],
            'email' => $valid['email'],
            'password' => password_hash($valid['password'], PASSWORD_DEFAULT)
        ]);

        // Login the new user
        Auth::login($user);

        // Redirect somewhere
        // session()->flash('info', 'This is my info message');
        return redirect('/')->withSuccess('Congratulations, you are registered!  You are now logged in!');
    }


    public function login()
    {
        $title = "login";
        return view('login', compact('title'));
    }

    public function process_login(Request $request)
    {
        $valid = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($valid)) {
            return redirect()->intended('/')
                    ->withSuccess('Congratulations, you are logged in!');
        }
        return redirect('/login')
                    ->withError('Sorry, those credentials do not match our records');
    }

    public function logout()
    {
        if(Auth::check()) {
            Auth::logout();
            session()->flush();
            return redirect('/')->withSuccess('You are now logged out!');

        }
        return back()->withError('Cannot log you out... you are not logged in!');
    }

}
