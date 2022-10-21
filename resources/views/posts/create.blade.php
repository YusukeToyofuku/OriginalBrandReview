@extends('layouts.app')　　
@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>OriginalBrandReview投稿</title>
        <link rel="stylesheet" href="{{ secure_asset('css/create.css') }}">
        
    </head>
    <body>
        <h1>商品内容投稿</h1>
        <form action="/posts" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="image">
                <label>画像</label><br />
    <input type="file" name="image" accept="image/png, image/jpeg">
    {{ csrf_field() }}
            </div>
            <div class="body">
                <h2>内容</h2>
                <textarea name="post[body]" placeholder="レビュー内容">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="brandname">
    <h3>ブランド名</h>
    <select name="post[brandname_id]">
        @foreach($brandnames as $brandname)
            <option value="{{ $brandname->id }}">{{ $brandname->name }}</option>
        @endforeach
    </select>
</div>
<div class="category">
    <h3>商品種類</h>
    <select name="post[category_id]">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>
            
            <input type="submit" value="投稿する"/>
        </form>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>
@endsection