<?php

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->delete();
        //insert some dummy records
        DB::table('locations')->insert(array(
			array('location'=>'Bahagia'),
			array('location'=>'Jatinegara 20'),
			array('location'=>'Jatinegara 26'),
			array('location'=>'Jatinegara 44A'),
          ));
    }
}
