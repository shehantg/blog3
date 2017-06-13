<?php

use Illuminate\Database\Seeder;

use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->description = 'A Normal User';
        $role_user->save();

        $role_author = new Role();
        $role_author->name = 'Director';
        $role_author->description = 'The Director';
        $role_author->save();


        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'An Admin';
        $role_admin->save();

         $role_admin = new Role();
        $role_admin->name = 'Blogger';
        $role_admin->description = 'A Blogger';
        $role_admin->save();

        $role_admin = new Role();
        $role_admin->name = 'Volunteer';
        $role_admin->description = 'A Volunteer';
        $role_admin->save();

    }
}
