<?php

use Illuminate\Database\Seeder;
use App\Role as Role;

class RolesSeeder extends Seeder
{
    
    public function run()
    {
    	// clear table
        Role::truncate();

        // add data table
        Role::create( [
        	'slug'	=> 'admin',
        	'name' 	=> 'Admin',
        ] );

        Role::create( [
        	'slug'	=> 'employee',
        	'name' 	=> 'Employee',
        ] );

        Role::create( [
            'slug'  => 'customer',
            'name'  => 'Customer',
        ] );
    }
}
