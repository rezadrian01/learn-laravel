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
    $posts = Post::all();
    return view('posts', ["title" => "Blog Page", "posts" => $posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
//    $post = Post::find($id);

    return view('post', ["title" => "Single Post Page", "post" => $post]);
});

Route::get('/authors/{author:username}', function (User $author) {
    $posts = $author->posts;
    return view('posts', ["title" => count($posts). " Articles by " . " $author->name ", "posts" => $posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    $posts = $category->posts;
    return view('posts', ["title" => count($posts). " Articles in " . " $category->name ", "posts" => $posts]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact Page"]);
});
