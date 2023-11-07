<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function profile () {
        return view("front.profile");
    }

    public function detailProfile ($id) {
        return view("front.detailProfile",compact('id'));
    }
}
