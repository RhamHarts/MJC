<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('Homepage.post.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
        ]);

        $image = $request->file('image');
         $imageName = time(). '.' . $image->extension();
        $image->move(public_path('uploads'), $imageName);

        $post = new Post();
        $post->title = $request->input('title');
        $post->image = $imageName;
        $post->content = $request->input('content');
        $post->save();

        return redirect()->route('Homepage.home')->with('success', 'Post created successfully!');
    }
}

