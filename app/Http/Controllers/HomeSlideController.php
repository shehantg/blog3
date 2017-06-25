<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homeslider;
use App\Homeslide;
use App\Donation;


class HomeSlideController extends Controller
{
    public function create($id){
    	
    	$homeslider = Homeslider::find($id);
    	return view('HomeSliders/slidecreate',['homeslider' => $homeslider]);
    }


    public function store(Request $request,$id){

    	$homeslide = new Homeslide();
    	$homeslide->title = $request->title;
    	$homeslide->intro = $request->intro;
    	$homeslide->body = $request->body;
    	$homeslide->filename = $request->filename->store('public/homeslides');
    	$homeslide->video = $request->video;
    	$homeslide->tagline = $request->tagline;
    	$homeslide->program_scheme = $request->program_scheme;
    	$homeslide->homeslider_id = $id;
    	
    	$homeslide->save();

    	

    	
    }

    public function displayedit($id,$Id){
    	
    	$homeslider = Homeslider::find($id);
    	$homeslide = Homeslide::find($Id);



    	return view('HomeSliders/editslide',['homeslider' => $homeslider,'homeslide' => $homeslide]);
    }


    public function edit(Request $request, $id,$Id){
    	


    	$homeslide = Homeslide::find($Id);

    	if($request->hasFile('filename')){

			$homeslide->update(['filename'  => $request->filename->store('public/homeslides')]);
    			
    		}

    	$homeslide->update([

    		'title'  =>  $request->title,
    		'intro'   =>  $request->intro,
    		'body'  => $request->body,

    		
    		'video'  => $request->video,
    		'tagline' => $request->tagline,
    		'program_scheme'  => $request->program_scheme,




    		]);

    	$homeslider = Homeslider::find($id);
    	$homeslides = $homeslider->homeslides;





    	return view('HomeSliders/show',['homeslider' => $homeslider,'homeslides' => $homeslides]);
    }

    public function delete($id,$Id){

    		$homeslide = Homeslide::find($Id)->delete();

    		$homeslider = Homeslider::find($id);
    	    $homeslides = $homeslider->homeslides;





    	return view('HomeSliders/show',['homeslider' => $homeslider,'homeslides' => $homeslides]);
    }


    public function showslide($id){

    		$homeslide = Homeslide::find($id);
             
          

    		 $donations = Donation::where('donationable_type','App\Homeslide')->where('donationable_id',$id)->get();




            return view('HomeSliders/showslide',['homeslide' => $homeslide,'donations' => $donations]);
    }

    }


