<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
    $posts=Post::orderBy('id', 'DESC')->get();
    return view('welcome')->with('posts', $posts);
});

Route::post('/add',[PostController::class,'create'])->name('create');
Route::get('/delete/{id}',[PostController::class,'destroy'])->name('delete');
Route::get('/update/{id}',[PostController::class,'index'])->name('update');
Route::post('/update/{id}/edit',[PostController::class,'update'])->name('updatePost');