<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Paragraph;

class Paragraphphoto extends Model
{
    protected $table = 'paragraphphotos';

	protected $fillable = ['paragraph_id','filename'];

    public function paragraph()
    {
    	return $this->belongsTo('App\Paragraph','id');
    }

    

}
