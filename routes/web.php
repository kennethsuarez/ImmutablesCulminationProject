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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/profile/{user}', [\App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [\App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [\App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');


Route::post('/posts', [PostController::class, 'store'])->name('posts');
Route::post('/posts/{post}/likes', [LikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [LikeController::class, 'destroy'])->name('posts.destroy');
