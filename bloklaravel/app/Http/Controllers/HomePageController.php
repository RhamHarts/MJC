<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home()
    {
        $posts = Post::all();
        return view('Homepage.home', ['posts' => $posts]);
    }

    public function contact()
    {
        return view('Homepage.contact');
    }

    public function about()
    {
        return view('Homepage.about');
    }

   
}
