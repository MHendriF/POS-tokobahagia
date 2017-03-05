<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('users')->delete();
        //insert some dummy records
        DB::table('users')->insert(array(
            array('username'=>'admin', 'first_name'=>'Zavox', 'last_name'=>'Fe','phone'=>'0891233243','address'=>'Keputih gang 2c no 21 a','password'=>'$2y$10$AUrlB8ld0meFBK0JXmxUGeS7d4wCuvBh6MppkU.eaBqfLMjjKY39m', 'jabatan'=>'Admin', 'permissions'=>''),
			array('username'=>'user2', 'first_name'=>'Suryadi', 'last_name'=>'Yadi','phone'=>'8195961','address'=>'Jalan Raya Jatinegara Timur 16','password'=>'$2y$10$AUrlB8ld0meFBK0JXmxUGeS7d4wCuvBh6MppkU.eaBqfLMjjKY39m', 'jabatan'=>'Karyawan Tetap', 'permissions'=>''),
			array('username'=>'user3', 'first_name'=>'Ali Franki', 'last_name'=>'Ali','phone'=>'8195961','address'=>'Jalan Raya Jatinegara Timur 16','password'=>'$2y$10$AUrlB8ld0meFBK0JXmxUGeS7d4wCuvBh6MppkU.eaBqfLMjjKY39m', 'jabatan'=>'Karyawan Tetap', 'permissions'=>''),
			array('username'=>'user4', 'first_name'=>'Sudarno', 'last_name'=>'Darno','phone'=>'8195961','address'=>'Jalan Raya Jatinegara Timur 16','password'=>'$2y$10$AUrlB8ld0meFBK0JXmxUGeS7d4wCuvBh6MppkU.eaBqfLMjjKY39m', 'jabatan'=>'Karyawan Tetap', 'permissions'=>''),
			array('username'=>'user5', 'first_name'=>'Toni', 'last_name'=>'Toni','phone'=>'8195961','address'=>'Jalan Raya Jatinegara Timur 16','password'=>'$2y$10$AUrlB8ld0meFBK0JXmxUGeS7d4wCuvBh6MppkU.eaBqfLMjjKY39m', 'jabatan'=>'Karyawan Tetap', 'permissions'=>''),
			array('username'=>'user6', 'first_name'=>'Jafar', 'last_name'=>'Jafar','phone'=>'8195961','address'=>'Jalan Raya Jatinegara Timur 16','password'=>'$2y$10$AUrlB8ld0meFBK0JXmxUGeS7d4wCuvBh6MppkU.eaBqfLMjjKY39m', 'jabatan'=>'Karyawan Tetap', 'permissions'=>''),
        ));
    }
}
