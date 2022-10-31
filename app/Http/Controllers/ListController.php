<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Brandname;
use App\Category;
use App\Review;
use Storage;



class ListController extends Controller
{
public function Brands(Post $post,Brandname $brandname,Category $category)
{
    return view('posts/brand')->with([
        'posts' => $brandname->getByBrandname(),
        'post'=>$post,
        'brandname'=>$brandname,
        'category'=>$category->get()
    ]);
}
public function Category(Post $post,Brandname $brandname,Category $category)
{
    return view('posts/category')->with([
        'posts' => $category->getByCategory(),
        'post'=>$post,
        'category' =>$category,
        'brandname'=>$brandname
    ]);
}
}