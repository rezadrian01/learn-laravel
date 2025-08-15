<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home Page"]);
});

Route::get('/about', function () {
    return view('about', ["title" => "About Page"]);
});

Route::get('/posts', function () {
    $posts = Post::all();
    return view('posts', ["title" => "Blog Page", "posts" => $posts]);
});

Route::get('/posts/{id}', function ($id) {
    $post = Post::find($id);

    return view('post', ["title" => "Single Post Page", "post" => $post]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact Page"]);
});
