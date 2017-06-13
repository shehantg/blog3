<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


    	$role_user = Role::where('name', 'User')->first();
    	$role_director = Role::where('name', 'Director')->first();
    	$role_admin = Role::where('name', 'Admin')->first();


        $user = new User();
        $user->first_name = 'Victor';
        $user->last_name = 'Visitor';
        $user->email = 'visitor@example.com';
        
        $user->password = bcrypt('visitor_66Pb');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->first_name = 'Alex';
        $user->last_name = 'Admin';
        $user->email = 'admin@example.com';
         
        $user->password = bcrypt('admin_66Pb');
        $user->save();
        $user->roles()->attach($role_admin);


        $user = new User();
        $user->first_name = 'Andy';
        $user->last_name = 'director';
        $user->email = 'director@example.com';
         
        $user->password = bcrypt('director_66Pb');
        $user->save();
        $user->roles()->attach($role_director);

    }
}
