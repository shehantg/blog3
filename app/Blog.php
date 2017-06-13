<?php

namespace App;
USE App\Comment;

use App\User;

use App\Tag;
use App\Paragraph;

use App\Photo;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = ['user_id','title','body','image','video','slider_name','status','featured','subfeatured'];


    public function getStoryTitleAttribute($value)
    {
        return strtoupper($value);
    }

    

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function paragraphs()
    {
        return $this->hasMany('App\Paragraph','blog_id');
    }

    public function photo()
    {
        return $this->hasOne('App\Photo','blog_id');
    }


    

}
