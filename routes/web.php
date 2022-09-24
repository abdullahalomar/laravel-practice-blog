<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', [PageController::class, 'home']);
Route::get('single', function(){
    return view('single');
});
Route::get('add-post', function(){
    return view('addpost');
});
Route::get('posts', function(){
    return view('posts');
});
Route::get('login', function(){
    return view('login');
});
Route::get('register', function(){
    return view('register');
});

Route::post('register', [AuthController::class, 'register'])->name('register');