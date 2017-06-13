<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Section;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{	

	    public function index()
    {   
        

        $allTeam = Team::all();

        return view ('Team/index',['allTeam' => $allTeam]);
    }

    public function create()
    {   
        $allsection = Section::all();

        return view('Team/teamcreate',['allsection' => $allsection]);
    }

    public function store(Request $request)


    {


    		
    		
    	 






    	$NewTeam = new Team();
    	$NewTeam->full_name = $request->full_name;
    	$NewTeam->title = $request->title;

    	if($request->hasFile('photo')){


    		$NewTeam->photo = $request->photo->store('public/team');
    	}
    	
    	$NewTeam->section = $request->section;
    	$NewTeam->status = false;
    	$NewTeam->email = $request->email;
    	$NewTeam->mobile = $request->mobile;
    	$NewTeam->venue = $request->venue;
    	$NewTeam->date = $request->date;
    	$NewTeam->body = $request->body;
    	$NewTeam->save();

    	$allTeam = Team::all();

    	return view ('Team/index',['allTeam' => $allTeam]);

    }



    public function update($id)
    {

        $teamId = Team::find($id);

        return view('Team/edit',['teamId' => $teamId]);
            


    }







    public function publish(Request $request, $id)
    {

        $teamId = Team::find($id);
            

            if($teamId->status){

                DB::table('teams')
                    ->where('id', $id)
                    ->update(['status'=> 0]);

            }
            
            else{
                DB::table('teams')
                    ->where('id', $id)
                    ->update(['status'=> 1]);

            }

            $allTeam = Team::all();

    	return view ('Team/index',['allTeam' => $allTeam]);
    }



    public function delete($id)


    {
        DB::table('teams')
            ->where('id', $id)
            ->delete();
            
              $allTeam = Team::all();

    	return view ('Team/index',['allTeam' => $allTeam]);
    }

     public function edit(Request $request,$id)
    {		

    	

    	 $NewTeam =  Team::find($id);
    	 $NewTeam->update([


    	 	'full_name' => $request->full_name,
    	 	'title'     => $request->title







    	 	]);
        
    	


    	if ($request->hasFile('photo')) {
    		
    		$NewTeam->update(['photo' =>  $request->photo->store('public/team')
 ]);

			}



    	
    	
    	
         

    		$allTeam = Team::all();

    	return view ('Team/index',['allTeam' => $allTeam]);
    
        


}


		public function display($id){

				$showTeam = Team::find($id);
			
				return view ('Team/singledisplay',['showTeam' => $showTeam]);

		}
}
