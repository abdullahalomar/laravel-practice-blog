<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function addpost(Request $request)
    {
        // $post = $request->validate([
        //     'title' => ['string'],
        //     'image' => ['mimes:jpg,png,jpeg'],
        //     'description' => ['string']
        // ]);
        // dd($post);
        // DB::table('posts')->insert($post);
        // return back();
        $image = $request->image->store('images');
        DB::table('posts')->insert([
            'title'=> $request->title, 
            'image'=> $image, 
            'description'=> $request->description, 
        ]);
        return back();
    }
}
