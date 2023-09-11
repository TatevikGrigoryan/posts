<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('posts');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('add_post');
Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('create_post');
Route::get('/posts/{post_id}', [App\Http\Controllers\PostController::class, 'show'])->name('post');
