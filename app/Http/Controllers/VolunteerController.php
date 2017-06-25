<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function create(){

    	return view ('Volunteers/register');
    }


    public function register(Request $request){

    	$this->validate($request,[

    		'name'  => 'required',
    		'email' => 'required|email|max:255|unique:volunteers',
    		'cv'    => 'required'

    		]);

    }
}
