<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Brandname;
use App\Category;
use App\Review;
use Storage;

class PostController extends Controller
{
   public function index(Post $post)
    {
        return view('posts/index');  
    }
//商品作成画面表示処理
public function create(Brandname $brandname,Category $category)
{
    return view('posts/create')->with([
        'brandnames' => $brandname->get(),
        'categories' => $category->get()
        ]);;
}
//商品作成実行処理
public function store(Request $request, Post $post)
{
    $post=new Post;
    $post->user_id =$request->user()->id;
    $input = $request['post'];
     //画像が投稿されていた場合の処理
     if($request->file('image')){
    $image = $request->file('image');
      // バケットの`myprefix`フォルダへアップロード
    $path = Storage::disk('s3')->putFile('myprefix', $image, 'public');
      // アップロードした画像のフルパスを取得
    $post->image_path = Storage::disk('s3')->url($path);
     }
     
    $post->fill($input)->save();
    return redirect('/posts/' . $post->id);
}
//商品編集画面表示処理
public function edit(Post $post,Brandname $brandname,Category $category)
    {
        return view('posts/edit')->with([
            'post' => $post,
            'brandnames' => $brandname->get(),
            'categories' => $category->get()
            ]);;
    }
//商品編集実行処理
public function update(Request $request, Post $post)
    {
        $input = $request['post'];
        //画像が投稿されていた場合の処理
        if($request->file('image')){
            // バケットへアップロード
            $image = $request->file('image');
             // バケットの`myprefix`フォルダへアップロード
            $path = Storage::disk('s3')->putFile('/', $image, 'public');
            // アップロードした画像のパスを取得
            $post->image_path = Storage::disk('s3')->url($path);
        }
        
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
//商品削除処理
public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }

}