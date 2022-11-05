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
public function getByPost(int $limit_count=10)
{
    return $this->review()->with('review')>orderBy('updated_at', 'DESC')->paginate($limit_count);
}
    protected $fillable = [
    'title',
    'body',
    'brandname_id',
    'category_id',
    'image_path'
];
}