<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Postcontroller;
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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tinymce', function () {
    return view('tinymce');
});

Route::get('/add', [PostController::class,'add'])->name('post.add');
Route::post('/add', [PostController::class,'store'])->name('post.store');
Route::get('/edit/{id}', [PostController::class,'edit'])->name('post.edit');
Route::post('/edit/{id}', [PostController::class,'update'])->name('post.update');
Route::get('/delete/{id}', [PostController::class,'destroy'])->name('post.destroy');

Route::get('/blog', [BlogController::class, 'blog'])->name('blog');


