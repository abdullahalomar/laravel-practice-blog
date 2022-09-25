<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function single()
    {
        return view('single');
    }
    public function add_post()
    {
        return view('addpost');
    }
    public function posts()
    {
        return view('posts');
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
}
