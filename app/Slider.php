<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Slider;
use App\User;
use App\Event;

class Slider extends Model
{

	protected $table = 'sliders';

    protected $fillable = [
        'body','status','user_id'
    ];


    public function slides(){

    	return $this->hasMany('App\Slide','slider_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function events()
    {
        return $this->hasMany('App\Event','slider');
    }


}
