<?php

use Illuminate\Database\Seeder;

class TechnicianSeeder extends Seeder
{
    public function run()
    {
        //delete technicians table records
	    DB::table('technicians')->delete();
	         //insert some dummy records
	    DB::table('technicians')->insert(array(
			array('technician_name'=>'Darno'),
			array('technician_name'=>'Dasuki'),
			array('technician_name'=>'Ewo'),
			array('technician_name'=>'Jumali'),
			array('technician_name'=>'Zulfikar'),
			array('technician_name'=>'Parlan'),
			array('technician_name'=>'Rudi'),
			array('technician_name'=>'Kecil'),
			array('technician_name'=>'Sapei'),
			array('technician_name'=>'Sumadi'),
			array('technician_name'=>'Slamet'),
			array('technician_name'=>'Tukin'),
			array('technician_name'=>'Yadi'),
	    ));
    }
}
