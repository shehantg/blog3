<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Homeslider;
use App\Donation;

class Homeslide extends Model
{
    protected $table = 'homeslides';

    protected $fillable = [
        'homeslider_id','filename','tagline','title','intro','program_scheme','body','video'
    ];


    public function homeslider(){

    	return $this->belongsTo('App\Homeslider');
    }

   

    public function donations()
    {
        return $this->morphMany('App\Donation', 'donationable');
    }
}
