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
        <!--商品詳細ページ-->
                <div class='show'>
                    <img src="{{ $post->image_path }}">
                    <div class='content'>
                      <h2 class='title'>{{ $post->title }}</h2>
                      <p class='body'>{{ $post->body }}</p>
                    </div>
                    <div class='detail'>
                      <div class='brandname_name'>ブランド名{{ $post->brandname->name}}</div>
                      <div class='category_name'>カテゴリー名{{$post->category->name}}</div>
                      @auth
                      <a class="btnedit pushdown" href="{{ route ('posts.edit',['post'=>$post->id])}}"><span>商品情報を編集・削除</span></a>
                      @endauth
                    </div>
                </div>
        <!--商品レビュー表示-->
        @foreach ($post->reviews as $reveiw)
                        投稿者：{{ $review->user->name }}
                   {{$review->title}}
                        {{ $review->comment }}
        @endforeach
</body>
@endsection