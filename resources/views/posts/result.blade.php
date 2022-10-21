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
</head>
<body>
  <H1>検索結果</H1>
  <p>検索キーワード：{{$search}}</p> 
@if(!$keywords->isEmpty())
<table>
    <th>商品ID</th><th>商品名</th><th>内容</th>
  @foreach($keywords as $keyword)
    <tr>
    <td>{{$keyword->id}}</td>
    <td>{{$keyword->title}}</td>
    <td>{{$keyword->body}}</td>
  </tr>
  @endforeach
  {{ $keywords->appends(Request::only('keyword'))->links()}}
  </table>
@else　
   <p>該当する検索結果は存在しません</p>
   <form  method="GET" action="/search">
       <input type="text" name="keyword">
       <input type="submit" value="検索">
   </form>
@endif
</body>
@endsection