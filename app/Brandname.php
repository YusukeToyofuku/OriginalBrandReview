<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brandname extends Model
{
    public function posts()   
{
    return $this->hasMany('App\Post');  
}
   public function getByBrandname(int $limit_count = 5)
{
     return $this->posts()->with('brandname')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}
