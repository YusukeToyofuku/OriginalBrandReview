<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Brandname;
use App\Category;
use Storage;

class PostController extends Controller
{
   public function index(Post $post)
    {
        return view('posts/index');  
    }
    
public function create(Brandname $brandname,Category $category)
{
    return view('posts/create')->with([
        'brandnames' => $brandname->get(),
        'categories' => $category->get()
        ]);;
}
public function store(Request $request, Post $post)
{
    $input = $request['post'];
     //s3アップロード開始
    $image = $request->file('image');
      // バケットの`myprefix`フォルダへアップロード
    $path = Storage::disk('s3')->putFile('myprefix', $image, 'public');
      // アップロードした画像のフルパスを取得
    $post->image_path = Storage::disk('s3')->url($path);

    $post->fill($input)->save();
    return redirect('/');
}
public function topvalue(Request $request,Post $post)
{
    return view('posts/topvalue')->with(['posts' => $post->getPaginateByLimit()]);
}

public function main() {

        return view('posts/review');

    }

public function list() {

        return \App\Posts::with('reviews.user')->get();

    }
public function review(Request $request) {
    
  　　　　　　　　　　　　　　　 // ログインしてるかチェック
                    if(!auth()->check()) {

                        $fail('レビューするにはログインしてください。');
                        return;

                    }

                    // すでにレビュー投稿してるかチェック
                    $exists = \App\Review::where('user_id', $request->user()->id)
                        ->where('post_id', $request->post_id)
                        ->exists();

                    if($exists) {

                        $fail('すでにレビューは投稿済みです。');
                        return;

                    }

                }
            ],
            'stars' => 'required|integer|min:1|max:5',
            'comment' => 'required'
        ]);

        $review = new \App\Review();
        $review->post_id = $request->post_id;
        $review->user_id = $request->user()->id;
        $review->stars = $request->stars;
        $review->comment = $request->comment;
        $result = $review->save();
        return ['result' => $result];

    }


}
