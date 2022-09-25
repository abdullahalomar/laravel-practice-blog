<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
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
