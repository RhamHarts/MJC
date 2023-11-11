<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PostController;

Route::get('/', [HomePageController::class, 'home'])->name('Homepage.home');
Route::get('/about', [HomePageController::class, 'about'])->name('Homepage.about');
Route::get('/contact', [HomePageController::class, 'contact'])->name('Homepage.contact');

Route::get('/post/create', [PostController::class, 'create'])->name('Homepage.post.create');
Route::post('/post/store', [PostController::class, 'store'])->name('post.store');