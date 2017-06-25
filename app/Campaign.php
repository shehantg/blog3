<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Donation;

class Campaign extends Model
{	
	protected $table = 'campaigns';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function donations()
    {
        return $this->morphMany('App\Donation', 'donationable');
    }

    
}
