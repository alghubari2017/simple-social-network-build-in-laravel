<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{



    protected $fillable = [
        'comment', 'user_id', 'post_id'
    ];

    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    
}
