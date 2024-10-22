<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Satria Yudha'], ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
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
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
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

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
