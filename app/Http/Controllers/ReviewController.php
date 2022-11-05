<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;
use App\Brandname;
use App\Category;
use App\Review;
use Storage;

class ReviewController extends Controller
{
    
    public function store (Request $request,Post $post,Review $review)
    {   
        $review = new Review();
        $review->title = $request->title;
        $review->comment = $request->comment;
        $review->rating = $request->rating;
        $review->user_id = Auth::user()->id;
        $review->post_id =$request->post_id;
        if($request->file('r_image')){
    $image = $request->file('r_image');
      // バケットの`myprefix`フォルダへアップロード
    $path = Storage::disk('s3')->putFile('myprefix', $image, 'public');
      // アップロードした画像のフルパスを取得
    $review->r_image = Storage::disk('s3')->url($path);
     }
        $review->save();
        return redirect()->route ('posts.show',['post'=>$review->post_id]);

    }
    
    public function show(Post $post,Brandname $brandname,Category $category,Review $review)
    {
    $user_id = Auth::user()->id();
    
    return view('posts/show')->with([
        'post'=>$post,
        'reviews' =>$post,
        'review'=> $review,
        'brandname' => $brandname,
        'category' => $category
        ]);;
    }
}