<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
     public function user() {
          return $this->belongsTo('App\User');
    }
    public function post(){
         return $this->belongsTo('App\Post');
    }
    protected $fillable = [
         'id',
         'title',
         'comment',
         'rating',
         'post_id',
         'user_id',
         'r_image'
    
         ];
}
