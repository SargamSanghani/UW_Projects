<?php

use Illuminate\Support\Facades\Auth;
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
    [App\Http\Controllers\CreaturesController::class, 'index']
);

Route::get(
    '/creatures/{id}',
    [
        App\Http\Controllers\CreaturesController::class,
        'show'
    ]
);

Auth::routes();

Route::get(
    '/home',
    function () {
        $title = 'Welcome to the Sea!';
        return view('home', compact('title'));
    }
);

Route::get('/admin', [App\Http\Controllers\Admin\CreaturesController::class, 'index']);

Route::get('/admin/creatures', [App\Http\Controllers\Admin\CreaturesController::class, 'index']);
Route::get('/admin/creatures/create', [App\Http\Controllers\Admin\CreaturesController::class, 'create']);
Route::post('/admin/creatures', [App\Http\Controllers\Admin\CreaturesController::class, 'store']);
Route::get(
    '/admin/creatures/edit/{creature}',
    [App\Http\Controllers\Admin\CreaturesController::class, 'edit']
)
    ->name('edit');

Route::put(
    '/admin/creatures/{id}',
    [App\Http\Controllers\Admin\CreaturesController::class, 'update']
)
    ->name('update');

Route::delete('/admin/creatures/{id}', [App\Http\Controllers\Admin\CreaturesController::class, 'destroy']);
