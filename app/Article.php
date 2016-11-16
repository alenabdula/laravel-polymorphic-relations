<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
