@extends('layouts.app')　　
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Brands</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{secure_asset('css/show.css')}}">
    </head>
    <body>
        <!--商品詳細画面-->
                <div class='post_detail'>
                    <img src="{{ $post->image_path }}">
                    <div class='content'>
                      <h2 class='title'>{{ $post->title }}</h2>
                      <p class='body'>{{ $post->body }}</p>
                    </div>
                    <div class='detail'>
                      <div class='brandname_name'>ドラッグストア名{{ $post->brandname->name}}</div>
                      <div class='category_name'>カテゴリー名{{$post->category->name}}</div>
                      <div class='updated_at'>最終更新日{{$post->updated_at}}</div>
                        @if($user_id == $post->user_id)
                          <a class="btnedit pushdown" href="{{ route ('posts.edit',['post'=>$post->id])}}"><span>商品情報を編集・削除</span></a>
                        @else
                        @endif
                    </div>
                </div>
                
        <!--商品レビュー表示-->
        <h3>{{$post->title}}のレビュー一覧</h3>
        
        @foreach ($post->reviews as $review)
        <div class="all">
                  <img class="review_image" src="{{ $review->image_path }}">
                  <div class="expecting_image">
                  <div class="review_rating">
                      @for($i = 1; $i <= $review->rating; $i++)
                                ★
                      @endfor
                  </div>
                  <div class="review_user">
                      {{$review->user->name}}
                　
                　@if($user_id == $review->user_id)
                　   <form  method="post" action="{{route('review.delete',['review'=>$review->id])}}">
                　      @csrf
                　      @method('DELETE')
                　       <button>レビューを削除</button>
                　       </form>
                　@endif
                　
                　</div>
                  <div class="review_title">{{ $review->title }}</div>
                  <div class="review_comment">{{$review->comment}}</div>
                  <div class="review_created_at">投稿日：{{$review->created_at}}</div>
                  </div>
        </div>
        @endforeach
        
        <!--商品レビュー投稿画面-->
        @guest
            <p class="guest_caution">レビューを投稿するには必ずログインしてください。</p>
            <a class="guest_login" href="/login">ログインしてレビューを投稿</a>
        @endguest
        @if(!$user_id == $review->user_id)
        <form action="/review/store" enctype="multipart/form-data" method="POST">
               @csrf
               <div class="posts">
                   <h1>レビュー入力フォーム</h1>
                   <div class="image">
                       <h3>画像選択:&nbsp;</h3>
                       <input type="file" name="image">
                       {{ csrf_field() }}
                   </div>
                   <div class="title">
                       <h3>レビュータイトル入力:&nbsp;</h3>
                       <input type="text" name="title" placeholder="レビュータイトル" />
                   </div>
                   <div class="body">
                       <h3>レビュー内容入力</h3>
                       <textarea name="comment" placeholder="レビュー内容">{{ old('review.comment') }}</textarea>
                   </div>
                   <div class="evaluation">
                       <input id="star1" type="radio" name="rating" value="5" />
                       <label for="star1"><span class="text"></span>★</label>
                       <input id="star2" type="radio" name="rating" value="4" />
                       <label for="star2"><span class="text"></span>★</label>
                       <input id="star3" type="radio" name="rating" value="3" checked="checked"/>
                       <label for="star3"><span class="text"></span>★</label>
                       <input id="star4" type="radio" name="rating" value="2" />
                       <label for="star4"><span class="text"></span>★</label>
                       <input id="star5" type="radio" name="rating" value="1" />
                       <label for="star5"><span class="text"></span>★</label>
                   </div>
                   <input value="{{ $post->id }}" type="hidden" name="post_id" />
                   <input type="submit" class='submission' value="上記内容で投稿する"/>
                </div>
    </form>
        @endif
        <script src="jquery.js"></script>
        <script src="jquery.rateyo.js"></script>
</body>
@endsection