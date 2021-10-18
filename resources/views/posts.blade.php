<x-layout >
    @foreach($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{$post->slug}}">
                    {{ $post->title  }}
                </a>
            </h1>

            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout>





{{--<x-layout >--}}
{{--    <x-slot name="content">--}}
{{--        hello--}}
{{--    </x-slot>--}}
{{--</x-layout>--}}




{{--@extends('layout')--}}

{{--@section('header')--}}
{{--    <h1>header</h1>--}}
{{--@endsection--}}

{{--@section('content')--}}
{{--    @foreach($posts as $post)--}}
{{--        <article>--}}
{{--            <h1>--}}
{{--                <a href="/posts/{{$post->slug}}">--}}
{{--                    {{ $post->title  }}--}}
{{--                </a>--}}
{{--            </h1>--}}

{{--            <div>--}}
{{--                {{ $post->expert }}--}}
{{--            </div>--}}
{{--        </article>--}}
{{--    @endforeach--}}
{{--@endsection--}}

{{--<!DOCTYPE html>--}}
{{--    <title>My Blog</title>--}}
{{--    <link rel="stylesheet" href="/app.css">--}}

{{--    <body>--}}
{{--        <article>--}}
{{--            <h1><a href="/posts/my-first-post">My first post</a></h1>--}}
{{--            <p>jalsdkjwofihsjhfoijoiawjfkjsjfioaiwjfi</p>--}}
{{--        </article>--}}

{{--        <article>--}}
{{--            <h1><a href="/post/my-second-post">My second post</a></h1>--}}
{{--            <p>jalsdkjwofihsjhfoijoiawjfkjsjfioaiwjfi</p>--}}
{{--        </article>--}}

{{--        <article>--}}
{{--            <h1><a href="/post/my-third-post">My third post</a></h1>--}}
{{--            <p>jalsdkjwofihsjhfoijoiawjfkjsjfioaiwjfi</p>--}}
{{--        </article>--}}


{{--        @foreach($posts as $post)--}}
{{--            <article>--}}
{{--                <h1>--}}
{{--                    <a href="/posts/{{$post->slug}}">--}}
{{--                        {{ $post->title  }}--}}
{{--                    </a>--}}
{{--                </h1>--}}

{{--                <div>--}}
{{--                    {{ $post->expert }}--}}
{{--                </div>--}}
{{--            </article>--}}
{{--        @endforeach--}}
{{--    </body>--}}
