<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post'; // Ganti sesuai dengan nama tabel yang benar

    protected $fillable = ['title', 'image', 'content'];

    public $timestamps = false;

}
