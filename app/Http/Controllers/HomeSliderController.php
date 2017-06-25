<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homeslider;
use App\Homeslide;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeSliderController extends Controller
{
    public function create(){
    	$homesliders = Homeslider::all();
    	return view('HomeSliders/slidercreate',['homesliders' => $homesliders]);
    }


    public function store(Request $request){


    	$homeslider = new Homeslider();
    	$homeslider->name = $request->body;
    	$homeslider->status = false;
    	$homeslider->user_id = Auth::id();
    	$homeslider->save();

    	$homesliders = Homeslider::all();


    	return view('HomeSliders/slidercreate',['homesliders' => $homesliders]);
    }

    public function show($id){

    	$homeslider = Homeslider::find($id);



    	$homeslides = $homeslider->homeslides;



    	return view ('HomeSliders/show',['homeslides' => $homeslides,'homeslider' => $homeslider]);

    }

    public function update(Request $request,$id)
    {

            $homeslider = Homeslider::find($id);

            if($homeslider->status){

                DB::table('homesliders')
                   ->where('id',$id)
                   ->update(['status' => 0]);
            }
            else{

                DB::table('homesliders')
                   ->where('id',$id)
                   ->update(['status' => 1]);

            }

            $homesliders = Homeslider::all();


        return view('HomeSliders/slidercreate',['homesliders' => $homesliders]);




    }



    public function delete(Request $request,$id){

            $homeslider = Homeslider::find($id)->delete();

            $homesliders = Homeslider::all();


        return view('HomeSliders/slidercreate',['homesliders' => $homesliders]);

    }
}
