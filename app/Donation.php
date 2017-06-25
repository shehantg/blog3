<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Homeslide;
use App\Campaign;

class Donation extends Model
{
    protected $table = 'donations';

    protected $fillable = [
        'title','amount','donationable_id','donationable_type','program_scheme'
    ];

    

    public function donationable()
    {
        return $this->morphTo();
    }
}
