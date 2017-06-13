<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Blog;
use App\Paragraphphoto;

class Paragraph extends Model
{	
	protected $table = 'paragraphs';

	protected $fillable = ['blog_id','title','body','image','video'];

    public function blog()
    {
    	return $this->belongsTo('App\Blog','id');
    }

    public function Paragraphphotos(){


        return $this->hasMany('App\Paragraphphoto','paragraph_id');
    }
    }
     

   
