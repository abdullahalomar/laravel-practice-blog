<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});
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