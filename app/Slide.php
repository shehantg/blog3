<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Slider;

class Slide extends Model
{

	protected $table = 'slides';

    protected $fillable = [
        'slider_id','filename','imglink','body'
    ];


    public function slider(){

    	return $this->belongsTo('App\Slider');
    }
}
