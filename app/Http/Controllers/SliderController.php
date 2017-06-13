<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class SliderController extends Controller
{
    public function create()
    {
        

        $sliders = Slider::all();

        return view('Sliders/slider',['sliders' => $sliders ]);
    }



    public function store(Request $request)
    {
        

        $slider = new Slider ;

        
        

        
         $slider->body = $request->body;
         
       

         $slider->status = false;

         $slider->user_id = Auth::id();

         

        $slider->save();

        $sliders = Slider::all();



        return view('Sliders/slider',['sliders' => $sliders ]);
    }

    public function destroy($id)
    {
        $slider = Slider::find($id)->delete();
        $sliders = Slider::all();



        return view('Sliders/slider',['sliders' => $sliders ]);



    }

    public function update(Request $request,$id)
    {

            $slider = Slider::find($id);

            if($slider->status){

                DB::table('sliders')
                   ->where('id',$id)
                   ->update(['status' => 0]);
            }
            else{

                DB::table('sliders')
                   ->where('id',$id)
                   ->update(['status' => 1]);

            }

            $sliders = Slider::all();

            return view('Sliders/slider',['sliders' => $sliders ]);


    }


}
