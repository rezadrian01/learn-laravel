<?php

use App\Models\Post;
use App\Models\User;
use \App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home Page"]);
});

Route::get('/about', function () {
    return view('about', ["title" => "About Page"]);
});

Route::get('/posts', function () {
    $posts = Post::latest()->filter(request(['search', 'category', 'author']))->paginate(5)->withQueryString();
//    return request('search');
    return view('posts', ["title" => "Blog Page", "posts" => $posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
//    $post = Post::find($id);
    return view('post', ["title" => "Single Post Page", "post" => $post]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact Page"]);
});
