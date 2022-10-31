<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
     public function user() {
          return $this->belongsTo(\App\User::class, 'user_id', 'id')
            ->select('id', 'name');

    }
    public function post(){
        return $this->belongsTo('App\Post');
    }
    protected $fillable = [
         'id',
         'title',
         'comment',
         'stars',
         'post_id',
         'user_id',
    
         ];
}
