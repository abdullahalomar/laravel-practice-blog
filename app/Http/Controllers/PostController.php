<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add_new(Request $request)
    {
        $data=$request->validate([
            'title'=>['required', 'min:4'],
            'image'=>['required', 'file'],
            'description'=>['required', 'min:10'],
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images');
        }
        Post::create($data);
        return back()->with('message', 'Post created successfully');
    }
    public function update_post(Request $request,$id)
    {
        $data=$request->validate([
            'title'=>['required', 'min:4'],
            'image'=>['required', 'file'],
            'description'=>['required', 'min:10'],
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images');
        }
        Post::where('id', $id)->update($data);
        return back()->with('message', 'Post updated successfully');
    }
}
