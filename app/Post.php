<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    function getPaginateByLimit(int $limit_count = 5)
{
    return $this::with('brandname')->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
public function brandname()
{
    return $this->belongsTo('App\Brandname');
}
public function category()
{
    return $this->belongsTo('App\Category');
}
public function reviews() {
    return $this->hasMany('App\Review');
}
    protected $fillable = [
    'id',
    'title',
    'body',
    'brandname_id',
    'category_id',
    'image_path'
];
}
