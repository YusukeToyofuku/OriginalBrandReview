<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Request;
use App\Post;
use App\Brandname;
use Storage;
use ILLuminate\support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request) {
      $search= Request::get('keyword');
     if ($search) {
$keywords = Post::where('title', 'like', "%$search%")->orwhere('body', 'like', "%$search%")->simplePaginate(5);
          }
        
          
          return view('posts/result')->with( [
              'keywords'=>$keywords,
              'search'=>$search
              ]);
}

    public function result(Request $request)
    {
        return view('posts/result',['keywords'=>$keyword])->with('keyword',$keyword);
    }
}