<?php

use App\Models\Blog;
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
