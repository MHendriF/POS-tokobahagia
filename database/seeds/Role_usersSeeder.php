<?php

use Illuminate\Database\Seeder;
use App\Role_User as Role_Users;

class Role_usersSeeder extends Seeder
{
    public function run()
    {
    	// clear table
        //Role_User::truncate();

        // add data table
        Role_Users::create( [
        	'user_id'	=> 1,
        	'role_id' 	=> 1,
        ] );

        Role_Users::create( [
        	'user_id'	=> 2,
        	'role_id' 	=> 2,
        ] );

    }
}
