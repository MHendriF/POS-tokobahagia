<?php

use Illuminate\Database\Seeder;

class TransDescriptionSeeder extends Seeder
{
    
    public function run()
    {
       //delete shipping methode table records
	    DB::table('transaction_descriptions')->delete();
	         //insert some dummy records
	    DB::table('transaction_descriptions')->insert(array(
			array('description'=>'Transfer In', 'code'=>'TI'),
			array('description'=>'Transfer Out', 'code'=>'TO'),
			array('description'=>'Adjustment', 'code'=>'ADJ'),
			array('description'=>'Opening Balance', 'code'=>'OB'),
			array('description'=>'Missing', 'code'=>'MI'),
	    ));
    }
}
