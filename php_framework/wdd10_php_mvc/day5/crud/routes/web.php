<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth', 'admin'])->group(function(){

      // Index View (list of books)
      Route::get('/books', 
      [App\Http\Controllers\BooksController::class, 'index']);
  
      // Show the form (get)
      Route::get('/books/create', 
      [App\Http\Controllers\BooksController::class, 'create']);
  
      // Save the book (post)
      Route::post('/books', 
          [App\Http\Controllers\BooksController::class, 'store']);
  
      // Delete a record (delete)
      Route::delete('/books/{id}', 
          [App\Http\Controllers\BooksController::class, 'destroy']);
  
      // Edit a Record (get)
      Route::get('/books/edit/{book}', 
      [App\Http\Controllers\BooksController::class, 'edit'])
      ->name('edit');
  
      // route('edit', ['id' => $book->id])
  
      // Update a record (put)
      Route::put('/books/{id}', 
          [App\Http\Controllers\BooksController::class, 'update'])
          ->name('update');
  
  
// });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
