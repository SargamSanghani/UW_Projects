<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\PagesController::class, 'home']);
Route::get('/test', [App\Http\Controllers\PagesController::class, 'test']);
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about']);
Route::get('/fruits', function () {
    $fruits = [
        'apple', 'banana', 'orange'
    ];
    return $fruits;
});

Route::get('posts', [App\Http\Controllers\PostsController::class, 'index']);
Route::get('posts/{id}', [App\Http\Controllers\PostsController::class, 'show']);
