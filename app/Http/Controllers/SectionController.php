<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use Illuminate\Support\Facades\DB;

class SectionController extends Controller
{
    public function index(){

    	$allSections = DB::table('sections')->orderBy('rank','asc')->get();

    	return view('Sections/index',['allSections' => $allSections]);

    }


    public function create(){

    	return view ('Sections/create');

    	

    }


    public function store(Request $request){

    		$newSection = new Section;
    		$newSection->title = $request->title;
    		$newSection->rank = $request->rank;
    		$newSection->save();


    	$allSections = DB::table('sections')->orderBy('rank','asc')->get();

    	return view('Sections/index',['allSections' =>$allSections]);

    }

    public function delete($id){

        DB::table('sections')
                ->where('id', $id)
                ->delete();

                $allSections = DB::table('sections')->orderBy('rank','asc')->get();

        return view('Sections/index',['allSections' => $allSections]);

    }


    public function edit(Request $request,$id){

        DB::table('sections')
                ->where('id', $id)
                ->update(['title' => $request->title,'rank' => $request->rank]);

                $allSections = DB::table('sections')->orderBy('rank','asc')->get();

        return view('Sections/index',['allSections' => $allSections]);

    }


    public function showedit(Request $request,$id){

            $editSection = Section::find($id);

            return view('Sections/edit',['editSection' => $editSection]);


    }


}
