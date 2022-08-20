<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyAuthController;

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
    $title = 'Welcome to our Website!';
    return view('welcome',compact('title'));
});

Route::get('/register', [MyAuthController::class, 'register']);

Route::post('/register', [MyAuthController::class, 'process_register']);

Route::get('/login', [MyAuthController::class, 'login']);

Route::post('/login', [MyAuthController::class, 'process_login']);

Route::get('/logout', [MyAuthController::class, 'logout']);