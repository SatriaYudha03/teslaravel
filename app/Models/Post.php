<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul artikel 1',
                'author' => 'Satria Yudha',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo numquam possimus necessitatibus animi asperiores quam molestiae repudiandae minima velit inventore earum fugiat voluptatum soluta commodi aut, eius officia accusamus vero?'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul artikel 2',
                'author' => 'Putu Gede',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium facilis libero adipisci eveniet eligendi corrupti nulla numquam, harum saepe modi omnis ducimus sit odio officia vero magni sint repellat qui!'
            ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }

        return $post;
    }
}
