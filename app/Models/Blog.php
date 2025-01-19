<?php

namespace App\Models;

use Illuminate\Support\Arr;

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
                'author' => 'Firza Rasyid Muria',
                'body' => 'Halo Zaza'
            ]
        ];
    }

    public static function find($slug): array
    {
        $blog = Arr::first(static::all(), fn($blog) => $blog['slug'] == $slug);

        if (!$blog) {
            abort(404);
        }

        return $blog;
    }
}
