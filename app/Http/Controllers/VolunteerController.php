<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Volunteer;

use App\Mail\VolunteerRegister;
use Illuminate\Support\Facades\Mail;

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

    	$volunteerNew = new Volunteer;

        $volunteerNew->name = $request->name;
         $volunteerNew->email = $request->email;
    	 $volunteerNew->cv = $request->cv->store('public/cv');
          $volunteerNew->save();




           Mail::to('elanceshehan@gmail.com')->send(new VolunteerRegister($volunteerNew));

           

    }

    public function show(){



        $allvolunteers = Volunteer::all();

   
        return view('Volunteers/profile',['allvolunteers' => $allvolunteers]);
    }



       

       
    
}
