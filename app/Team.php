<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';

    protected $fillable = ['photo',
'full_name',
'section',
'title',
'status',
'email',
'mobile',
'venue',
'date',
'body'];

}
