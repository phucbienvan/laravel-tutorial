<?php

use App\Http\Controllers\PostController;
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

Route::get('/posts', [PostController::class, 'index'])->name('index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('show');
Route::get('/post/create-post', [PostController::class, 'create'])->name('create');
Route::post('/post/store-post', [PostController::class, 'store'])->name('store');

