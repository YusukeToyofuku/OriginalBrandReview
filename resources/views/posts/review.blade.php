@extends('layouts.app')　　
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div id="app" class="p-3">
    <h1 class="mb-3">レビュー（星＆コメント)</h1>
 <table>
     <th>商品ID</th><th>商品名</th><th>内容</th>
  @foreach($posts as $post)
    <tr>
    <td>{{$post->id}}</td>
    <td>{{$post->title}}</td>
    <td>{{$post->body}}</td>
  </tr>
  @endforeach

</body>
</html>
@endsection