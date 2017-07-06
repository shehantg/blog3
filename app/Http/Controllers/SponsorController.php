<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sponsor;

class SponsorController extends Controller
{
    public function create(){

    	return view('Sponsors/create');
    }

    public function store(Request $request){

    	$this->validate($request, [
            
            'filename'  => 'required | image|mimes:jpeg,bmp,png'
        ]);


    	$sponsor = new Sponsor ; 
    	$sponsor->photo = $request->filename->store('public/sponsors');
        $sponsor->status = false;
    	$sponsor->save();
    	
    }

    public function showall(){


        $Allsponsors = Sponsor::all();

        return view('Sponsors/index',['Allsponsors' => $Allsponsors]);
    }


    public function publish(Request $request,$id){


        $sponsor = Sponsor::find($id);
         

        if($sponsor->status){

           Sponsor::where('id',$sponsor->id)->update(['status' => 0]);

        }

        else
        {
             Sponsor::where('id',$sponsor->id)->update(['status' => 1]);

        }

        $Allsponsors = Sponsor::all();

        return view('Sponsors/index',['Allsponsors' => $Allsponsors]);
    }



    public function delete(Request $request,$id){


            $sponsor = Sponsor::find($id)->delete();

            $Allsponsors = Sponsor::all();

        return view('Sponsors/index',['Allsponsors' => $Allsponsors]);


    }



}
