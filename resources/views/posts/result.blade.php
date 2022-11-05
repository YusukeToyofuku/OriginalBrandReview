@extends('layouts.app')　　
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Original Brand レビュー</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{secure_asset('css/list.css')}}">
        <title>Result</title>
</head>
<body>
  <h1>検索結果</h1>
  <h1>検索キーワード：{{$search}}</h1> 
@if(!$keywords->isEmpty())
<div class='lists'>
  @foreach($keywords as $keyword)
    <div class='list'>
    　　<img src="{{ $keyword->image_path }}">
                    <div class='content'>
                      <h2 class='title'>{{ $keyword->title }}</h2>
                      <p class='body'>{{ $keyword->body }}</p>
                    </div>
                    <div class='detail'>
                      <div class='brandname_name'>ブランド名{{ $keyword->brandname->name}}</div>
                      <div class='category_name'>カテゴリー名{{$keyword->category->name}}</div>
                      <a class="btn pushdown" href="{{ route ('posts.show',['post'=>$keyword->id])}}"><span>レビューを閲覧・投稿</span></a>
                    </div>
    </div>
  @endforeach
@else　
   <div>該当する検索結果は存在しません</div>
   <form  method="GET" action="/search">
       <input type="text" name="keyword">
       <input type="submit" value="検索">
   </form>
@endif
</body>
@endsection