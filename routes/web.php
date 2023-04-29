<?php

use App\Http\Controllers\PostsController;
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

Route::get('posts',[PostsController::class,'index'])->name('posts');
Route::get('posts/insert',[PostsController::class,'create'])->name('posts.insert');
Route::post('posts',[PostsController::class,'store']);
Route::get("posts/{id}",[PostsController::class,'destroy'])->name('posts.delete');
Route::get('posts/edit/{id}',[PostsController::class,'edit'])->name('posts.edit');
Route::post('posts/{id}',[PostsController::class,'update'])->name('posts.update');