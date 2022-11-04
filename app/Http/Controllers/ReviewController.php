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
        $review = new Review;
        $input = $request['review'];
        $review ->user_id = $request->user()->id;
        $review->fill($input)->save();
        return redirect()->route ('posts.show',['post'=>$review->post_id]);

    }
    
    public function show(Post $post,Brandname $brandname,Category $category,Review $review)
    {
       
    return view('posts/show')->with([
        'post'=>$post,
        'review' =>$review,
        'brandname' => $brandname,
        'category' => $category
        ]);;
    }
}