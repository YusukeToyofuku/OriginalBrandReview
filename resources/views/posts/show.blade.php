@extends('layouts.app')

@section('content')

<!--商品詳細表示-->
<div class='post_detail'>
    <h2>
        {{$post->title}}
    </h2>
    <p>
        {{$post->body}}
    </p>
    <p>
        {{$brandname->id}}
    </p>
    <p>
        {{$category->id}}
    </p>
    <form action="/posts/{{ $post->id }}/edit" id="form_{{ $post->id }}" method="post" style="display:inline">
    @csrf
    @method('GET')
    <button type="submit">商品情報編集</button> 
</form>
<form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
    @csrf
    @method('DELETE')
    <h3>注意：商品レビューも削除されます。</h3>
    <button type="submit">商品削除</button> 
</form>
</div>
<!--コメント一覧表示-->
    <div class="reviews">
            @foreach ($post->reviews as $review)
            
                    <div class='user'>
                        投稿者：{{ $review->user->name }}
                    </div>
                    <div class='title'>
                        {{ $review->title }}
                    </div>
                    <div class='comment'>
                        {{ $review->comment }}
                    </div>
                    <div class='star'>
                         <span class="star-rating" value="{{old('review.stars')}}"></span>
                    </div>
    　　　　　 @endforeach
    </div>
        <!--コメント表示一覧終了-->
    
<!--コメント投稿フォーム-->
<form action="/review/store" enctype="multipart/form-data" method="POST">
    @csrf

   <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="review[title]" placeholder="タイトル" value="{{ old('review.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('review.title') }}</p>
   </div>
    <div class="comment">
                <h2>内容</h2>
                <textarea name="review[comment]" placeholder="レビュー内容">{{ old('review.comment') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('review.comment') }}</p>
     </div>
     <div class="form-group">
                        <h4>星五段階評価</h4>
                        <div id="star">
                        <star-rating v-model="rating" value="review.stars">
                        </star-rating>
                        </div>
      </div>
    <input type="hidden" name="review[post_id]" value="{{$post->id}}">
    
  <input type="submit" value="投稿する"/>
</form>
<!--コメント投稿フォーム終了-->

<div class="back">[<a href="/">戻る</a>]</div>

<!--星を表示するコンポーネント-->

<!--星を表示するコンポーネント終了-->
@endsection