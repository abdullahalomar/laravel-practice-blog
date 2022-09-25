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
    public function single($post_id)
    {
        $post = Post::where('id', $post_id)->firstOrFail();
        return view('single', compact('post'));
    }
    public function add_post()
    {
        return view('addpost');
    }
    public function edit_post($id)
    {
        $post=Post::where('id', $id)->firstOrFail();
        return view('editpost', compact('post'));
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
