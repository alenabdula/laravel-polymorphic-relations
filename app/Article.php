<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * Mass Assignment Fields.
     */
    protected $fillable = ['title', 'body'];

    /**
     * Get all comments for particular article.
     */
    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}