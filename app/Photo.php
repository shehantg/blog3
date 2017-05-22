<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Blog;
class Photo extends Model
{
    protected $table = 'photos';

    protected $fillable = [
        'blog_id','filename'
    ];

    public function blogs(){

    	return $this->belongsTo('App\Blog','id');
    }
}
