<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
Route::domain('admin.localhost')->group(function(){
    Route::get('/',[PostsController::class, 'showAdmin'])->name('showAdmin');
    Route::get('/{post}',[PostsController::class, 'showPost'])->name('showPost');
    Route::post('/',[PostsController::class,'addPost']);
    Route::get('/delete/{post}',[PostsController::class,'deletePost'])->name('deletePost');
    Route::get('/delete/{post}/{comment}',[PostsController::class,'deleteComment'])->name('deleteComment');
});


Route::get('/', [PostsController::class, 'showPosts']);
Route::get('/{post}', [PostsController::class, 'showOne'])->name('showOne');

