<?php

use Illuminate\Database\Seeder;

class ShippingmethodsSeeder extends Seeder
{

    public function run()
    {
        //delete shipping methode table records
         DB::table('shippings')->delete();
         //insert some dummy records
         DB::table('shippings')->insert(array(
			array('method'=>'Kirim via Pos'),
			array('method'=>'Kirim via Pos Kilat'),
			array('method'=>'Kirim via Ekspedisi'),
			array('method'=>'Antar'),
			array('method'=>'Beli sendiri'),
          ));
    }
}
