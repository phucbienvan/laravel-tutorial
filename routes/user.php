<?php

use App\Http\Controllers\AuthenController;
use Illuminate\Contracts\Auth\Authenticatable;
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

Route::get('/register', [AuthenController::class, 'getFormRegister']);
Route::post('/register', [AuthenController::class, 'register'])->name('register');
Route::get('/login', [AuthenController::class, 'getFormLogin']);
Route::post('/login', [AuthenController::class, 'login'])->name('login');

Route::group(["middleware" => "userLogin"], function (){
    Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('post.index');
    Route::get('posts/{post}/show', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');
    Route::get('post-create', [\App\Http\Controllers\PostController::class, 'create'])->name('post.create');
    Route::post('posts', [\App\Http\Controllers\PostController::class, 'store'])->name('post.store');
    Route::get('posts/edit/{id}', [\App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
    Route::post('posts/update/{id}', [\App\Http\Controllers\PostController::class, 'update'])->name('post.update');
});

