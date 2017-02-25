<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('users')->delete();
        //insert some dummy records
        DB::table('users')->insert(array(
            array('username'=>'user1', 'first_name'=>'Hendri', 'last_name'=>'Fe','phone'=>'0891233243','address'=>'Keputih gang 2c no 21 a','password'=>'$2y$10$AUrlB8ld0meFBK0JXmxUGeS7d4wCuvBh6MppkU.eaBqfLMjjKY39m', 'permissions'=>''),
			array('username'=>'user2', 'first_name'=>'Zavox', 'last_name'=>'Re','phone'=>'0891233243','address'=>'Keputih gang 2c no 21 b','password'=>'$2y$10$AUrlB8ld0meFBK0JXmxUGeS7d4wCuvBh6MppkU.eaBqfLMjjKY39m', 'permissions'=>''),
        ));
    }
}
