<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Nurlayli Indah Sari",
        "email" => "nurlayliindahsari@gmail.com",
        "image" => "team1.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index'] );
Route::get('posts/{slug}', [PostController::class, 'show']);