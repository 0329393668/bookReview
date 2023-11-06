<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BookController;
use App\Http\Controllers\admin\CategoryController;
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

Route::get('/test', function () {
    return view('test');
});

Route::get("/admin/category", [CategoryController::class,"index"])->name("admin.category.index");
Route::get("/admin/category/add", [CategoryController::class,"add"])->name("admin.category.add");

Route::get("/admin", [AdminController::class,"homepage"])->name("admin.homepage");
Route::get("/admin/book", [BookController::class,"index"])->name("admin.book.index");


