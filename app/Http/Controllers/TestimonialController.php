<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Testimonial;

class TestimonialController extends Controller
{
    public function create(){


    	return view ('Testimonials/create');
    }


    public function store(Request $request){

    		
    		

    		$testi = new Testimonial ; 

    		$testi->name = $request->name;
    		$testi->body = $request->body;
    		$testi->photo = $request->photo->store('public/testimonials');
    		$testi->save();


    		 return redirect()->back()->with('message','Thankyou for your testimonial !!!'); 


    }

    public function index(){


    	$testimonials = Testimonial::all();

    	return view ('Testimonials/index',['testimonials' => $testimonials]);
    }
}
