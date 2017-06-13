<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slide;
use App\Slider;
use Illuminate\Support\Facades\DB;

class SlideController extends Controller
{
    public function create($id)
    {	


        $slides = Slider::find($id)->slides;
        return view('Sliders/slide',['slides' => $slides ,'sliderid' => $id]);

    }

    public function store(Request $request,$id)
    {
        

        $slide = new Slide ;
        
        $slide->body = $request->body;
        $slide->filename = $request->photo->store('public/slides');
        $slide->imglink = $request->imglink;
        $slide->slider_id = $id;
        $slide->save();
        $slides = Slider::find($id)->slides;
        return view('Sliders/slide',['slides' => $slides ,'sliderid' => $id]);
    }




    public function edit(Request $request,$id)
    {

    	 $slide =  Slide::find($id) ;
         $slider = $slide->slider;
    	 $slide->body = $request->body;
        $slide->filename = $request->photo->store('public/slides');
        $slide->imglink = $request->imglink;

        $slide->update();
         $slides = Slider::find($slider->id)->slides;
        return view('Sliders/slide',['slides' => $slides ,'sliderid' => $slider->id]);


    }



    public function destroy($id)
    {				

    			$slider = Slide::find($id)->slider;
    			$sliderid = $slider->id;
				$slide =  DB::table('slides')->where('id', $id)->delete();

				 $slides = $slider->slides;
        		return view('Sliders/slide',['slides' => $slides ,'sliderid' => $sliderid]);
    }

}
