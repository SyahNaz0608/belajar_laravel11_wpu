<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Syah WebPro', 'title' => 'About us']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'author' => 'Muhamad Syah',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem modi voluptate delectus ad corporis dicta, quo distinctio laboriosam nihil officia labore nisi accusamus sunt dolore expedita laborum dolor qui ut?'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'author' => 'Muhamad Syah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam sit quod, expedita dolorum vitae praesentium minus quibusdam officiis magnam distinctio, eius dolore quae commodi mollitia! Adipisci maxime natus deleniti nam!'
        ]
    ]]);
});

Route::get('/posts/{$id}', function ($id) {
    dd($id);
});

Route::get('contact', function () {
    return view('contact', ['title' => 'Our Contacts']);
});