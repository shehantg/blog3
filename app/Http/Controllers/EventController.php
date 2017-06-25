<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Slider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        
        return view('Events/eventsindex',['events' => $events]);
    }


    public function create()
    {

        
        return view('Events/eventcreate');
    }


    public function store(Request $request)
    {

         $this->validate($request, [
            'title' => 'bail|required|max:255',
            'body' => 'required',
            'date'  => 'required',
            'venue' =>'required',
            'photo'  => 'required'
        ]);



    	$newEvent = new Event;

    	$newEvent->title = $request->title;
    	$newEvent->body = $request->body;
    	$newEvent->date = $request->date;
    	$newEvent->venue = $request->venue;
    	$newEvent->slider = $request->slider_name;
        $newEvent->photo = $request->photo->store('public/eventphotos');
    	
    	$newEvent->status = false;
    	$newEvent->user_id = Auth::id();
    	$newEvent->save();

        $events = Event::all();
        
        return view('Events/eventsindex',['events' => $events]);
    }


    public function publish(Request $request, $id)
    {

        $event = Event::find($id);
            

            if($event->status){

                DB::table('events')
                    ->where('id', $id)
                    ->update(['status'=> 0]);

            }
            
            else{
                DB::table('events')
                    ->where('id', $id)
                    ->update(['status'=> 1]);

            }

            $events = Event::all();

        return view('Events/eventsindex',['events' => $events]);
    }




    public function delete($id)


    {
        DB::table('events')
            ->where('id', $id)
            ->delete();
            
             $events = Event::all();

        

        

        return view('Events/eventsindex',['events' => $events]);
    }


    public function display($id){


        $event = Event::find($id);



        $sliderName = $event->slider;

        $slider = Slider::where('body', $sliderName)->first();

        

        return view ('Events/eventsdisplay',['event' => $event,'slider' => $slider]);
    }
}
