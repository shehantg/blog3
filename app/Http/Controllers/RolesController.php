<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function assign($id)
    {

         $user = User::where('email',$request['email'])->first();  
         $user->roles()->detach();
         if($request['role_user']){

            $user->roles()->attach(Role::where('name','User')->first());
         }
         elseif($request['role_author']){
            $user->roles()->attach(Role::where('name','Author')->first());
         }
         elseif($request['role_admin']){
            $user->roles()->attach(Role::where('name','Admin')->first());
         }
         return redirect()->back();
    }
}
