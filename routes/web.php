<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//route resource
Route::get('/', [PostController::class, 'index']);
Route::get('/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/', [PostController::class, 'store'])->name('posts.store');

Route::post('/', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/show/{id}', [PostController::class, 'show'])->name('posts.show');
Route::post('/', [PostController::class, 'edit'])->name('posts.edit');