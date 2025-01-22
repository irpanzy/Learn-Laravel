<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesawatController extends Controller
{
    public function show($slug)
    {
        // Data pesawat
        $pesawat = [
            'a321' => [
                'name' => 'A321',
                'description' => 'Pesawat narrow-body modern untuk penerbangan jarak pendek dan menengah.',
                'image' => asset('img/image-2.png'),
            ],
            'a350' => [
                'name' => 'A350',
                'description' => 'Pesawat wide-body canggih untuk penerbangan jarak jauh.',
                'image' => asset('img/image-3.png'),
            ],
            'a380' => [
                'name' => 'A380',
                'description' => 'Pesawat terbesar di dunia untuk penerbangan dengan penumpang terbanyak.',
                'image' => asset('img/image-4.png'),
            ],
        ];

        // Validasi slug
        if (!isset($pesawat[$slug])) {
            abort(404); // Tampilkan error 404 jika slug tidak ditemukan
        }

        // Kirim data pesawat ke view
        return view('pesawat.detail', ['pesawat' => $pesawat[$slug]]);
    }
}
