<?php

use Illuminate\Support\Facades\Route;


Route::get(
    '/',
    function () {
        $title = 'Welcome to the Sea!';
        return view('home', compact('title'));
    }
);

Route::get(
    '/creatures',
    [App\Http\Controllers\PagesController::class, 'creatures']
);

Route::get(
    '/creatures/{id}',
    [
        App\Http\Controllers\PagesController::class,
        'detail'
    ]
);
