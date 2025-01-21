<?php

use App\Models\Blog;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Route halaman utama
Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

// Route halaman about
Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

// Route halaman blog
Route::get('/blogs', function () {
    return view('blogs', ['title' => 'Blog', 'blogs' => Blog::all()]);
});

Route::get('/blogs/{blog:slug}', function (Blog $blog) {

    // $blog = Blog::find($slug);

    return view('blog', ['title' => 'Single Blog', 'blog' => $blog]);
});

// Route halaman contact
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
