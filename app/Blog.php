<?php

namespace App;
USE App\Comment;

use App\User;

use App\Tag;
use App\Paragraph;

use App\photo;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    


    public function getStoryTitleAttribute($value)
    {
        return strtoupper($value);
    }

    public function comments()
    {
        return $this->hasMany('App\Comment','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function paragraphs()
    {
        return $this->hasMany('App\Paragraph','blog_id');
    }

    public function photos()
    {
        return $this->hasMany('App\Photo','blog_id');
    }


}
