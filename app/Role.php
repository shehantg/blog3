<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{



    protected $table = 'roles';

	protected $fillable = [
        'name','description'
    ];


    public function users()
    {



    	return $this->belongsToMany('App\User');
    }
}
