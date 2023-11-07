<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class bukuController extends Controller
{
    public function index () {
        $bukus = buku::get();
        dd($bukus);
    }
}
