<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesawatController;

// Route halaman utama
Route::get('/', function () {
    return view('beranda');
});

Route::get('/pesawat/{slug}', [PesawatController::class, 'show'])->name('pesawat.show');

// Route halaman about
Route::get('/galeri', function () {
    return view('galeri');
});

// Route halaman blog
Route::get('/blogs', function () {
    return view('blogs', ['blogs' => Blog::all()]);
});

Route::get('/blogs/{blog:slug}', function (Blog $blog) {

    // $blog = Blog::find($slug);

    return view('blog', ['title' => 'Single Blog', 'blog' => $blog]);
});

// Route halaman contact
Route::get('/informasi', function () {
    return view('informasi');
});

// Route halaman status produksi
Route::get('/status-produksi', function () {
    return view('status-produksi');
});
