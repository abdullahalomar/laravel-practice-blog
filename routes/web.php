<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', [PageController::class, 'home']);
Route::get('single/{id}', [PageController::class, 'single'])->name('single');
Route::get('add-post', [PageController::class, 'add_post'])->middleware('auth');
Route::get('edit-post/{id}', [PageController::class, 'edit_post'])->name('edit_post');
Route::get('posts', [PageController::class, 'posts']);
Route::get('login', [PageController::class, 'login'])->middleware('guest')->middleware('guest');
Route::get('register', [PageController::class, 'register']);

Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('add-post', [PostController::class, 'add_new'])->name('add_new');

Route::post('update-post/{id}', [PostController::class, 'update_post'])->name('update_post');

Route::post('login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');