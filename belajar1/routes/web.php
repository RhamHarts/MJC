<?php

use App\Http\Controllers\bukuController;
use App\Http\Controllers\frontController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/halaman1', function () {
    return view('halaman1');
})->name('halaman1');
Route::get('/halaman1/create', function () {
    return view('front.create');
})->name('halaman1.create');


Route::get('profile',[frontController::Class,'profile'])->name('profile');
Route::get('detailProfile/{id}',[frontController::Class,'detailProfile'])->name('detailProfile');


Route::get('buku',[bukuController::Class,'index'])->name('buku.index');