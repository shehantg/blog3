<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Donation;
use App\Homeslide;

class DonationController extends Controller
{
    public function create($id){

    	$homeslide = Homeslide::find($id);
    	return view ('Donations/createdonation',['homeslide' => $homeslide]);
    }

    public function store(Request $request, $id){

    		$newDonation = new Donation();
    		$newDonation->title = $request->title;
    		$newDonation->amount = $request->amount;
    		$newDonation->program_scheme =$request->program_scheme;
    		$newDonation->donationable_id = $id;
    		$newDonation->donationable_type = 'App\Homeslide';
    		$newDonation->save();

    		$homeslide = Homeslide::find($id);
             

             $donations = Donation::where('donationable_type','App\Homeslide')->where('donationable_id',$id)->get();


    		return view('HomeSliders/showslide',['homeslide' => $homeslide,'donations' => $donations]);



    }
}
