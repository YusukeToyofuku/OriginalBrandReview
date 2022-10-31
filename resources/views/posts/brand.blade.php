@extends('layouts.app')　　
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Brands</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{secure_asset('css/list.css')}}">
    </head>
    <body>
        <h1>{{$brandname->name}}の商品一覧</h1>
        <div class='lists'>
            @foreach ($posts as $post)
                <div class='list'>
                    <img src="{{ $post->image_path }}">
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'>{{ $post->body }}</p>
                    <p class='brandname_name'>{{ $brandname->name}}</p>
                    <p class='category_name'>{{$post->category_name}}</p>
         <a href="{{ route ('posts.show',['post'=>$post->id])}}">レビューを見る</a>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        
    </body>
</html>
@endsection
