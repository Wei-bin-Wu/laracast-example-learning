<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', function () {
    return view('posts', [
//        'posts' => Post::latest()->with(['category','author'])->get() //latest('published_at')
        'posts' => Post::latest()->get() // now use without() to fetch without category or author
    ]);
});



Route::get('posts/{post:slug}',function (Post $post){
    return view('post', [
       'post' => $post
    ]);
});

Route::get('categories/{category:slug}',function (Category $category){
    return view('posts', [
//        'posts' => $category->posts->load(['category','author'])  // mismo objetivo que el with anterior
        'posts' => $category->posts
    ]);
});

Route::get('authors/{author:username}',function (User $author){
    return view('posts', [
//        'posts' => $author->posts->load(['category','author'])  // mismo objetivo que el with anterior
        'posts' => $author->posts
    ]);
});
