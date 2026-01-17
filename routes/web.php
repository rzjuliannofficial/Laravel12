<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Blog {
    public static function all(){
        return [
            [
                'id'=> 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Nabhan Rizqi Julian Saputro', 
                'date' => '14 Juni 2026',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum nemo qui sunt fugiat temporibus, quas sequi praesentium, vel adipisci incidunt nihil esse maiores explicabo aut! Cum incidunt tenetur similique laudantium.'
            ],
            [
                'id'=> 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Nabhan Rizqi Julian Saputro', 
                'date' => '15 Juni 2026',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum nemo qui sunt fugiat temporibus, quas sequi praesentium, vel adipisci incidunt nihil esse maiores explicabo aut! Cum incidunt tenetur similique laudantium.'
            ],
            [
                'id'=> 3,
                'slug' => 'judul-artikel-3',
                'title' => 'Judul Artikel 3',
                'author' => 'Nabhan Rizqi Julian Saputro', 
                'date' => '14 Januari 2026',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum nemo qui sunt fugiat temporibus, quas sequi praesentium, vel adipisci incidunt nihil esse maiores explicabo aut! Cum incidunt tenetur similique laudantium.'
            ]
        ];
    }
}

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
    return view('blogs', ['title' => 'Blogs', 'blogs' => Blog::all()]);
});

// halaman single blog
//Route::get('/blogs/{id}', function($id){ ini menggunakan $id
Route::get('/blogs/{slug}', function($slug){

    $blog = Arr::first(Blog::all(), function($blog) use ($slug){
        return $blog['slug'] == $slug;
    });

    return view('blog' ,['title' => 'Single Blog' , 'blog' => $blog]);
});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']);
});
