<?php

use Illuminate\Database\Seeder;

class ServiceStatusSeeder extends Seeder
{

    public function run()
    {
         //delete technicians table records
	    DB::table('service_statuses')->delete();
	         //insert some dummy records
	    DB::table('service_statuses')->insert(array(
			array('status'=>'Belum Selesai'),
			array('status'=>'Selesai - Belum Diambil'),
			array('status'=>'Selesai - Sudah Diambil'),
			array('status'=>'Kembalikan'),
			array('status'=>'Dikerjakan PABRIK'),
			array('status'=>'Service Ulang'),
		));
    }
}
