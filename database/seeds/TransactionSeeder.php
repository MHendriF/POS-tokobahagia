<?php

use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //delete shipping methode table records
	    DB::table('main_transactions')->delete();
	         //insert some dummy records
	    DB::table('main_transactions')->insert(array(
			array('user_id'=>'2', 'product_id'=>'1', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-02-02', 'unit_order'=>'1', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'50000'),
			array('user_id'=>'2', 'product_id'=>'1', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-02-03', 'unit_order'=>'1', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'50000'),
			array('user_id'=>'2', 'product_id'=>'1', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-02-04', 'unit_order'=>'1', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'50000'),
			array('user_id'=>'2', 'product_id'=>'1', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-02-07', 'unit_order'=>'1', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'50000'),
			array('user_id'=>'2', 'product_id'=>'1', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-02-11', 'unit_order'=>'1', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'50000'),
			array('user_id'=>'3', 'product_id'=>'1', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-02-12', 'unit_order'=>'1', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'50000'),
			array('user_id'=>'3', 'product_id'=>'1', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-02-16', 'unit_order'=>'1', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'50000'),
			array('user_id'=>'3', 'product_id'=>'1', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-02-19', 'unit_order'=>'1', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'50000'),
			array('user_id'=>'3', 'product_id'=>'1', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-02-24', 'unit_order'=>'1', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'50000'),
			array('user_id'=>'3', 'product_id'=>'1', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-02-28', 'unit_order'=>'1', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'50000'),

			array('user_id'=>'4', 'product_id'=>'2', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-03-01', 'unit_order'=>'2', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'100000'),
			array('user_id'=>'4', 'product_id'=>'2', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-03-04', 'unit_order'=>'2', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'100000'),
			array('user_id'=>'4', 'product_id'=>'2', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-03-06', 'unit_order'=>'2', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'100000'),
			array('user_id'=>'4', 'product_id'=>'2', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-03-09', 'unit_order'=>'2', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'100000'),
			array('user_id'=>'4', 'product_id'=>'2', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-03-09', 'unit_order'=>'2', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'100000'),
			array('user_id'=>'5', 'product_id'=>'2', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-03-11', 'unit_order'=>'2', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'100000'),
			array('user_id'=>'5', 'product_id'=>'2', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-03-14', 'unit_order'=>'2', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'100000'),
			array('user_id'=>'5', 'product_id'=>'2', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-03-17', 'unit_order'=>'2', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'100000'),
			array('user_id'=>'5', 'product_id'=>'2', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-03-20', 'unit_order'=>'2', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'100000'),
			array('user_id'=>'5', 'product_id'=>'2', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-03-29', 'unit_order'=>'2', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'100000'),

			array('user_id'=>'6', 'product_id'=>'3', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-04-05', 'unit_order'=>'3', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'85000'),
			array('user_id'=>'6', 'product_id'=>'3', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-04-05', 'unit_order'=>'3', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'85000'),
			array('user_id'=>'6', 'product_id'=>'3', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-04-07', 'unit_order'=>'3', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'85000'),
			array('user_id'=>'6', 'product_id'=>'3', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-04-07', 'unit_order'=>'3', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'85000'),
			array('user_id'=>'6', 'product_id'=>'3', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-04-17', 'unit_order'=>'3', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'85000'),
			array('user_id'=>'6', 'product_id'=>'3', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-04-17', 'unit_order'=>'3', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'85000'),
			array('user_id'=>'6', 'product_id'=>'3', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-04-27', 'unit_order'=>'3', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'85000'),
			array('user_id'=>'6', 'product_id'=>'3', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-04-28', 'unit_order'=>'3', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'85000'),
			array('user_id'=>'6', 'product_id'=>'3', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-04-29', 'unit_order'=>'3', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'85000'),
			array('user_id'=>'6', 'product_id'=>'3', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'2017-04-30', 'unit_order'=>'3', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'85000'),

	    ));
    }
}
