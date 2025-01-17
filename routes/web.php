<?php

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
    return view('blogs', ['title' => 'Blog', 'blogs' => [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'Irfan Muria',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, repellat.'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'Hasna Nazriah',
            'body' => 'Love you hasna'
        ]
    ]]);
});

Route::get('/blog/{id}', function ($id) {
    $blogs = [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'Irfan Muria',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, repellat.'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'Hasna Nazriah',
            'body' => 'Love you hasna'
        ]
    ];

    $blog = Arr::first($blogs, function ($blog) use ($id) {
        return $blog['id'] == $id;
    });

    return view('blog', ['title' => 'Single Blog', 'blog' => $blog]);
});

// Route halaman contact
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
