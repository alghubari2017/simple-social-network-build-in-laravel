<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];


    protected $fillable = [
        'content', 'category_id', 'photo','slug'
    ];


 
    public function getPhotoAttribute($photo)
    {
        return asset($photo);
    }


    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }







}
