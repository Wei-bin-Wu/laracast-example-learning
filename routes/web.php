<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', function () {
//    return view('welcome');
//    return 'Hello World';
//    return ['foo'=>'bar'];
//    return view('posts');

    $posts = Post::all();
    //ddd($posts); //ddd($posts[0]->getPathname()); //getContents

    return view('posts', [
        'posts' => $posts
    ]);

//    $document = YamlFrontMatter::parseFile(
//        resource_path('posts/my-fourth-post.html')
//    );
//    ddd($document); //->body(),  ->title, -> expert, ->matter('title')

//    $files = File::files(resource_path('posts/'));
//    $documents = [];
//    foreach ($files as $file){
//        $documents[] = YamlFrontMatter::parseFile($file);
//    }
//    return view('posts', ['posts'=>$documents]);


//    $files = File::files(resource_path('posts/'));
//    $posts = [];
    //$posts = array_map(function($file){...},$files)
    //$posts = collect($files)->map(function($file){...})
//    foreach ($files as $file){
//        $document = YamlFrontMatter::parseFile($file);
//
//        $posts[]=new Post(
//            $document->title,
//            $document->expert,
//            $document->date,
//            $document->body(),
//            $document->slug
//        );
//    }
//    return view('posts', ['posts'=>$posts]);

//    $posts = collect(File::files(resource_path('posts/')))
//        ->map(fn($file)=> YamlFrontMatter::parseFile($file))
//        ->map(fn($document)=>new Post(
//            $document->title,
//            $document->expert,
//            $document->date,
//            $document->body(),
//            $document->slug
//        ));
//
//    return view('posts', ['posts'=>$posts]);


});


//Route::get('post',function (){
//    $post = file_get_contents(__DIR__ . '/../resources/posts/my-first-post.html');
//    return view('post', [
////       'post' => '<h1>Hello World</h1>'
////       'post' => file_get_contents(__DIR__ . '/../resources/posts/my-first-post.html')
//
//       'post' =>$post
//    ]);
//});

//Route::get('posts/{post}',function ($slug){
//    $path = __DIR__ . "/../resources/posts/{$slug}.html";
//    $post = file_get_contents($path);
//    if(! file_exists($path)){
////        ddd("file does not exists");
////        abort(404);
//        redirect('/');
//    }
//
//    return view('post', [
////       'post' => '<h1>Hello World</h1>'
////       'post' => file_get_contents(__DIR__ . '/../resources/posts/my-first-post.html')
//
//       'post' =>$post
//    ]);
//})->where('post', '[A-z_\-]+'); // whereAlpha('post') ...

Route::get('posts/{post}',function ($id){
    return view('post', [
       'post' => Post::findOrFail($id)
    ]);
}); //->where('post', '[A-z_\-]+'); // whereAlpha('post') ...
