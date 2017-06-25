<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Homeslide;
use App\User;

class Homeslider extends Model
{
    protected $table = 'homesliders';

    protected $fillable = [
        'name','status','user_id'
    ];


    public function homeslides(){

    	return $this->hasMany('App\Homeslide','homeslider_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
