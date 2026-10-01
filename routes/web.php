<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome', [
        'nama' => 'Ayu',
        'mataKuliah' => ['Pemrograman Web', 'Organisasi dan Arsitektur Komputer', 'Matematika Diskrit']
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hello/{nama}', function ($nama) {
    return view('hello', [
        'nama' => $nama
    ]);
});

// Route CRUD Blog
Route::resource('posts', PostController::class);
