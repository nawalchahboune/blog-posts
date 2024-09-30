<?php

use App\Http\Controllers\createController;
use App\Http\Controllers\deleteController;
use App\Http\Controllers\editController;
use App\Http\Controllers\postController;
use App\Http\Controllers\postsController;
use App\Http\Controllers\storeController;
use App\Http\Controllers\testController;
use App\Http\Controllers\updateController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', [postsController::class,'index'])->name('posts.index');
Route::get("posts/create",  [createController::class,'create'])->name('post.create');
Route::get('/posts/{post}/edit',[editController::class,'edit'])->name("post.edit");
Route::post('/posts',[storeController::class,'store'])->name("post.store");
Route::get('/posts/{post}', [postController::class,'show'])->name("post.show");
Route::put('/posts/{post}/update', [updateController::class,'update'])->name("post.update");
Route::delete('/posts/{post}',[deleteController::class,'delete'])->name("post.delete");
//




