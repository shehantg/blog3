<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Slider;

use App\Campaign;
use App\Donation;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::all();

        
        return view('Campaigns/campaignsindex',['campaigns' =>$campaigns]);
    }


    public function create()
    {

        
        return view('Campaigns/campaigncreate');
    }


    public function store(Request $request)
    {



        session()->flash('message','Great You Created A Camapign !!!');

        $validation = Validator::make($request->all(), [
        'title'  => 'required',
        'body'  => 'required',
        'type'   => 'required',
        'photo'    => 'required|image|mimes:jpeg,bmp,png'
        
        
      ]);

      if( $validation->fails() ){
        session()->flash('message','Please Fill Required Fields !!!');

            return redirect()->back()->withInput()
                             ->with('errors', $validation->errors() );

                             return session('message'); 
      }

    	$newCampaign = new Campaign;

    	$newCampaign->title = $request->title;
    	$newCampaign->body = $request->body;
    	$newCampaign->date = $request->date;
    	$newCampaign->venue = $request->venue;
    	$newCampaign->slider = $request->slider;
        $newCampaign->photo = $request->photo->store('public/campaignphotos');
    	$newCampaign->video = $request->video;
        $newCampaign->type = $request->type;
        $newCampaign->fundraising_goal = $request->fundraising_goal;
    	$newCampaign->status = false;
    	$newCampaign->user_id = Auth::id();
    	$newCampaign->save();

        $campaigns = Campaign::all();
        
        return view('Campaigns/campaignsindex',['campaigns' => $campaigns]);
        return session('message');
    }


public function publish(Request $request, $id)
    {

        $campaign = Campaign::find($id);
            

            if($campaign->status){

                DB::table('campaigns')
                    ->where('id', $id)
                    ->update(['status'=> 0]);

            }
            
            else{
                DB::table('campaigns')
                    ->where('id', $id)
                    ->update(['status'=> 1]);

            }

            $campaigns = Campaign::all();

        return view('Campaigns/campaignsindex',['campaigns' => $campaigns]);
    }




    public function delete($id)


    {
        DB::table('campaigns')
            ->where('id', $id)
            ->delete();
            
             $campaigns = Campaign::all();

        

        

        return view('Campaigns/campaignsindex',['campaigns' => $campaigns]);
    }

    public function show($id)


    {   

        $campaign  = Campaign::find($id);

        $sliderName = $campaign->slider;

        $slider = Slider::where('body', $sliderName)->first();

         $donations = Donation::where('donationable_id',$id)->where('donationable_type','App\Campaign')->get();
 
        return view('Campaigns/campaignsdisplay',['campaign' => $campaign,'slider' => $slider,'donations' => $donations]);
    }


    public function donation($id){

        $campaign = Campaign::find($id);
        return view('Donations/createdonationforcampaign',['campaign' => $campaign]);
    }


     public function savedonation(Request $request,$id){

        $campaign = Campaign::find($id);

         $sliderName = $campaign->slider;

        $slider = Slider::where('body', $sliderName)->first();

        $newDonation = new Donation();
        $newDonation->title = $request->title;
        $newDonation->amount = $request->amount;
        $newDonation->program_scheme = $request->program_scheme;
        $newDonation->donationable_id= $id;
        $newDonation->donationable_type = 'App\Campaign';
        $newDonation->save();

        $donations = Donation::where('donationable_id',$id)->where('donationable_type','App\Campaign')->get();


         return view('Campaigns/campaignsdisplay',['campaign' => $campaign,'slider' => $slider,'donations' => $donations]);
    }
}

