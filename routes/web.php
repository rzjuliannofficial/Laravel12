<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page'],['name' => 'Julian']);
});
Route::get('/welcome', function () {
    return view('welcome', ['title' => 'Welcome']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/blogs', function () {
    return view('blogs', [
        'title' => 'Blogs',
        'blogs' => [
            [
                'id'=> 1,
                'title' => 'Judul Artikel 1',
                'author' => 'Nabhan Rizqi Julian Saputro', 
                'date' => '14 Juni 2026',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum nemo qui sunt fugiat temporibus, quas sequi praesentium, vel adipisci incidunt nihil esse maiores explicabo aut! Cum incidunt tenetur similique laudantium.'
            ],
            [
                'id'=> 2,
                'title' => 'Judul Artikel 2',
                'author' => 'Nabhan Rizqi Julian Saputro', 
                'date' => '15 Juni 2026',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum nemo qui sunt fugiat temporibus, quas sequi praesentium, vel adipisci incidunt nihil esse maiores explicabo aut! Cum incidunt tenetur similique laudantium.'
            ],
            [
                'id'=> 3,
                'title' => 'Judul Artikel 3',
                'author' => 'Nabhan Rizqi Julian Saputro', 
                'date' => '14 Januari 2026',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum nemo qui sunt fugiat temporibus, quas sequi praesentium, vel adipisci incidunt nihil esse maiores explicabo aut! Cum incidunt tenetur similique laudantium.'
            ]
        ]
    ]);
});

// halaman single blog
Route::get('/blogs/{id}', function($id){
    $blogs = [
            [
                'id'=> 1,
                'title' => 'Judul Artikel 1',
                'author' => 'Nabhan Rizqi Julian Saputro', 
                'date' => '14 Juni 2026',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum nemo qui sunt fugiat temporibus, quas sequi praesentium, vel adipisci incidunt nihil esse maiores explicabo aut! Cum incidunt tenetur similique laudantium.'
            ],
            [
                'id'=> 2,
                'title' => 'Judul Artikel 2',
                'author' => 'Nabhan Rizqi Julian Saputro', 
                'date' => '15 Juni 2026',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum nemo qui sunt fugiat temporibus, quas sequi praesentium, vel adipisci incidunt nihil esse maiores explicabo aut! Cum incidunt tenetur similique laudantium.'
            ],
            [
                'id'=> 3,
                'title' => 'Judul Artikel 3',
                'author' => 'Nabhan Rizqi Julian Saputro', 
                'date' => '14 Januari 2026',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum nemo qui sunt fugiat temporibus, quas sequi praesentium, vel adipisci incidunt nihil esse maiores explicabo aut! Cum incidunt tenetur similique laudantium.'
            ]
        ];

    $blog = Arr::first();
});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']);
});
