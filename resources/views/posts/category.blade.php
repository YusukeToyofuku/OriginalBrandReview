@extends('layouts.app')　　
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Category</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{secure_asset('css/list.css')}}">
    </head>
    <body>
        <h1>{{$category->name}}の商品一覧</h1>
        <div class='lists'>
            @foreach ($posts as $post)
            <div class='list'>
                <img src="{{ $post->image_path }}">
                    <div class='content'>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
                <div class='detail'>
                    <div class='brandname_name'>ブランド名{{ $post->brandname->name}}</div>
                    <div class='category_name'>カテゴリー名{{ $category->name }}</div>
                    <a class="btn pushdown" href="{{ route ('posts.show',['post'=>$post->id])}}"><span>レビューを閲覧・投稿</span></a>
                </div>
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>
@endsection
