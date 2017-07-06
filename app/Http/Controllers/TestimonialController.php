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



    public function publish(Request $request,$id){


        $testimonial = Testimonial::find($id);
         

        if($testimonial->status){

           testimonial::where('id',$testimonial->id)->update(['status' => 0]);

        }

        else
        {
             testimonial::where('id',$testimonial->id)->update(['status' => 1]);

        }

        $testimonials = Testimonial::all();

        return view ('Testimonials/index',['testimonials' => $testimonials]);
    }



    public function delete(Request $request,$id){


            $testimonial = testimonial::find($id)->delete();

            $testimonials = Testimonial::all();

        return view ('Testimonials/index',['testimonials' => $testimonials]);


    }
}
