<?php
//namespace App\Models;
//
//use Illuminate\Database\Eloquent\ModelNotFoundException;
//use Illuminate\Support\Facades\File;
//use Spatie\YamlFrontMatter\YamlFrontMatter;
//
//class Post
//{
//    public $title,$expert,$date,$body;
//    public $slug;
//
//    public function __construct($title,$expert,$date,$body,$slug)
//    {
//        $this->title=$title;
//        $this->expert=$expert;
//        $this->date=$date;
//        $this->body=$body;
//        $this->slug = $slug;
//    }
//
//    public static function all(){
////        $files = File::files(resource_path("posts/"));
////        return array_map(fn($file)=>$file->getContents(), $files);
//        return cache()->remember('posts.all',3,function (){
//            return collect(File::files(resource_path('posts/')))
//                ->map(fn($file)=> YamlFrontMatter::parseFile($file))
//                ->map(fn($document)=>new Post(
//                    $document->title,
//                    $document->expert,
//                    $document->date,
//                    $document->body(),
//                    $document->slug
//                ))
//                ->sortByDesc('date'); //date del variable
//        });
//    }
//
//    public static function find($slug){
////        if(! file_exists($path = resource_path("posts/{$slug}.html"))){
////            throw new ModelNotFoundException();
////        }
////
////        return cache()->remember("post.{$slug}", 1200, fn()=>file_get_contents($path));
//        return static::all()->firstWhere('slug', $slug);
//    }
//}
