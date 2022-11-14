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
        <title>OBMR</title>
        <link rel="stylesheet" href="{{secure_asset('css/styles.css')}}">
        <meta name="google-site-verification" content="D0pYrUlcS5AQAI250uRfZqEnaczbKT9oPdEnPERhEaE" />
    </head>
 <body>
        <div class="top">
         <img src="{{asset('images/home.jpg')}}">
         </div>
         
     <form method="GET" action="/search">
      <div class=search_box>
       <input class="text" type="text" size="60" placeholder="商品名を入力" name="keyword" value="@if (isset($keyword)) @endif">
       <input class="submit" type="submit" value="検索">
      </div>
     </form>
 
     @auth
     <div class="create">
      <a class="create_new pushright" href="/posts/create"><span>商品新規追加</span></a>
    </div>
    @endauth
<div class="name_boxes">
    <p>ドラッグストア一覧</p>
    
      <a href="/brandnames/1" class="Sselect pushright"><span>スギドラッグ</span></a>
  
      <a href="brandnames/2" class="Welcia pushright"><span>ウエルシア</span></a>
      
      <a href="brandnames/3" class="Turuha pushright"><span>ツルハドラッグ</span></a>
      
      <a href="brandnames/4" class="Cosmos pushright"><span>コスモス薬品</span></a>
      
      <a href="brandnames/5" class="Sundrag pushright"><span>サンドラッグ</span></a>
      
      <a href="brandnames/6" class="Matsumoto pushright"><span>マツモトキヨシ</span></a>
      
      <a href="brandnames/7" class="Kokokara pushright"><span>ココカラファイン</span></a>
     
      <a href="/brandnames/14" class="bothers pushright"><span>その他ドラッグストア</span></a>
</div>

<div class="category_boxes">
    <p>カテゴリ一覧</p>
     
     <a href="/categories/4" class="foods pushright"><span>食料品</span></a>
     
     <a href="/categories/14" class="drag pushright"><span>医薬品</span></a>
     
     <a href="/categories/24" class="beauty pushright"><span>美容用品</span></a>
     
     <a href="/categories/34" class="paper pushright"><span>紙製品</span></a>
  　
     <a href="/categories/44" class="cleaner pushright"><span>掃除用品</span></a>
     
     <a href="/categories/54" class="pet pushright"><span>ペット用品</span></a>
     
     <a href="/categories/64" class="wash pushright"><span>洗剤製品</span></a>
     
     <a href="/categories/74" class="cothers pushright"><span>その他製品</span></a>
     
</div>

</body>
@endsection