<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Blog
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Irfan Muria',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, repellat.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Firza Rastid Muria',
                'body' => 'Halo Zaza'
            ]
            ];
    }
}

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

Route::get('/blogs/{slug}', function ($slug) {
    $blogs = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Irfan Muria',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, repellat Quos, repellat. consectetur adipisicing elit. Quos, repellat.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Firza Rastid Muria',
            'body' => 'Halo Zaza'
        ]
    ];

    $blog = Arr::first($blogs, function ($blog) use ($slug) {
        return $blog['slug'] == $slug;
    });

    return view('blog', ['title' => 'Single Blog', 'blog' => $blog]);
});

// Route halaman contact
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
