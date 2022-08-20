<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return 'Hello, World!';
});

Route::get('/hello/{name}', function($name){
    return "Hello, $name";
});

// Conflicting route
// Route::get('/hello/steve', function(){
//     return 'Hello there, steve';
// });


require __DIR__ . '/pages/pages.php';

Route::get('goodbye', function(){
    $title = "Goodbye, Cruel World!";
    return view('/goodbye', compact('title'));
});

Route::get('/hi/{name?}', function($name = null) {
    $name = $name ?? 'World';
    return view('hi', compact('name'));
});

Route::get('books/{genre}/{slug}', 
        [BooksController::class, 'show']);

Route::get('pets', 'App\Http\Controllers\PetsController@index');

/*
Route::get();
Route::post();
Route::put();
Route::delete();

*/