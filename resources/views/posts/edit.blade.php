@extends('layouts.app')　　
@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>OriginalBrandReview商品編集画面</title>
        <link rel="stylesheet" href="{{ secure_asset('') }}">
        
    </head>
<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class='title'>
                <h2>商品名</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            
            <div class="image">
                <label>画像</label><br />
    <input type="file" name="image" accept="image/png, image/jpeg">
    {{ csrf_field() }}
    </div>
            
            <div class='body'>
                <h2>商品概要</h2>
                <input type='text' name='post[body]' value="{{ $post->body }}">
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
</div>
            <input type="submit" value="保存">
        </form>
    </div>
</body>
@endsection