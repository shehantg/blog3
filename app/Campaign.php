<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Campaign extends Model
{	
	protected $table = 'campaigns';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    
}
