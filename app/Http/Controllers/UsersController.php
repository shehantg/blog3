<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view ('users/index',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        
         $user = User::find($id);

        return view ('users/profile',['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function assign(Request $request)
    {
       

         $user = User::where('email',$request['email'])->first(); 

         $user->roles()->detach();
         if($request['role_user']){

            $user->roles()->attach(Role::where('name','User')->first());
         }
         if($request['role_director']){

            
            $user->roles()->attach(Role::where('name','Director')->first());

         }
         if($request['role_admin']){
            $user->roles()->attach(Role::where('name','Admin')->first());
         }
         if($request['role_blogger']){
            $user->roles()->attach(Role::where('name','Blogger')->first());
         }

         if($request['role_volunteer']){
            $user->roles()->attach(Role::where('name','Volunteer')->first());
         }


         return redirect()->back();
    }

 }



