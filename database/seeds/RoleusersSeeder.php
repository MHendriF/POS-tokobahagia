<?php

use Illuminate\Database\Seeder;

class RoleusersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_users')->delete();
        //insert some dummy records
        DB::table('role_users')->insert(array(
			array('user_id'=>'1', 'role_id'=>'1'),
			array('user_id'=>'2', 'role_id'=>'2'),
			array('user_id'=>'3', 'role_id'=>'3'),
        ));
    }
}
