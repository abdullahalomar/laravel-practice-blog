<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', [PageController::class, 'home']);
Route::get('single', [PageController::class, 'single']);
Route::get('add-post', [PageController::class, 'add_post']);
Route::get('posts', [PageController::class, 'posts']);
Route::get('login', [PageController::class, 'login']);
Route::get('register', [PageController::class, 'register']);

Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('add-post', [PostController::class, 'add_new'])->name('add_new');