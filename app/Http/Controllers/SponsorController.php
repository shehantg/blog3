<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sponsor;

class SponsorController extends Controller
{
    public function create(){

    	return view('Sponsors/create');
    }

    public function store(Request $request){

    	$this->validate($request, [
            
            'filename'  => 'required | image|mimes:jpeg,bmp,png'
        ]);


    	$sponsor = new Sponsor ; 
    	$sponsor->photo = $request->filename->store('public/sponsors');
    	$sponsor->save();
    	
    }
}
