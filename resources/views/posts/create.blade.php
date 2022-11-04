@extends('layouts.app')　　
@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>OriginalBrandReview商品投稿画面</title>
        <link rel="stylesheet" href="{{ secure_asset('css/create.css') }}">
        
    </head>
<body>
<h1>商品内容投稿画面</h1>
<div class="posts">
<form action="/posts/store" enctype="multipart/form-data" method="POST">
            @csrf
<div class="image">
    <h3>画像選択:&nbsp;</h3>
    <input type="file" name="image">
    {{ csrf_field() }}
</div>

 <div class="title">
    <h3>商品名入力:&nbsp;</h3>
    <input type="text" name="post[title]" placeholder="商品名" value="{{ old('post.title') }}"/>
    <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
 </div>
 <div class="body">
    <h3>商品概要入力</h3>
    <textarea name="post[body]" placeholder="商品概要">{{ old('post.body') }}</textarea>
    <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
 </div>

 <div class="brandname">
    <h3>ブランド名:&nbsp;</h3>
    <select name="post[brandname_id]">
        @foreach($brandnames as $brandname)
            <option value="{{ $brandname->id }}">{{ $brandname->name }}</option>
        @endforeach
    </select>
 </div>
 <div class="category">
    <h3>商品カテゴリー:&nbsp;</h3>
    <select name="post[category_id]">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
 </div>
</div>
            <div class='caution'>※商品名と商品概要は必ず入力してください。</div>
            <input type="submit" class='submission' value="上記内容で投稿する"/>
</form>

        <div class="back">[<a href="/">トップページに戻る</a>]</div>
    </body>
</html>
@endsection