<?php

namespace App;
use App\Blog;
use App\Slider;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{	

	

	protected $table = 'events';

    


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function slider(){

    	return $this->belongsTo('App\Slider');
    }
}
