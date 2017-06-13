<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Slider;

use App\Campaign;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::all();

        
        return view('Campaigns/campaignsindex',['campaigns' => $campaigns]);
    }


    public function create()
    {

        
        return view('Campaigns/campaigncreate');
    }


    public function store(Request $request)
    {

    	$newCampaign = new Campaign;

    	$newCampaign->title = $request->title;
    	$newCampaign->body = $request->body;
    	$newCampaign->date = $request->date;
    	$newCampaign->venue = $request->venue;
    	$newCampaign->slider = $request->slider;
    	$newCampaign->video = $request->video;
        $newCampaign->fundraising_goal = $request->fundraising_goal;
    	$newCampaign->status = false;
    	$newCampaign->user_id = Auth::id();
    	$newCampaign->save();

        $campaigns = Campaign::all();
        
        return view('Campaigns/campaignsindex',['campaigns' => $campaigns]);
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

        
 
        return view('Campaigns/campaignsdisplay',['campaign' => $campaign,'slider' => $slider]);
    }
}

