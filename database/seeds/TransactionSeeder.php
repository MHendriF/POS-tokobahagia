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
			array('user_id'=>'2', 'product_id'=>'1', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'02/03/2016', 'unit_order'=>'1', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'50000'),
			array('user_id'=>'2', 'product_id'=>'1', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'02/03/2016', 'unit_order'=>'1', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'50000'),
			array('user_id'=>'2', 'product_id'=>'1', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'02/03/2016', 'unit_order'=>'1', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'50000'),
			array('user_id'=>'2', 'product_id'=>'1', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'02/03/2016', 'unit_order'=>'1', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'50000'),
			array('user_id'=>'2', 'product_id'=>'1', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'02/03/2016', 'unit_order'=>'1', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'50000'),
			array('user_id'=>'3', 'product_id'=>'1', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'02/03/2016', 'unit_order'=>'1', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'50000'),
			array('user_id'=>'3', 'product_id'=>'1', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'02/03/2016', 'unit_order'=>'1', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'50000'),
			array('user_id'=>'3', 'product_id'=>'1', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'02/03/2016', 'unit_order'=>'1', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'50000'),
			array('user_id'=>'3', 'product_id'=>'1', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'02/03/2016', 'unit_order'=>'1', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'50000'),
			array('user_id'=>'3', 'product_id'=>'1', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'02/03/2016', 'unit_order'=>'1', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'50000'),

			array('user_id'=>'4', 'product_id'=>'2', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'04/05/2016', 'unit_order'=>'2', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'100000'),
			array('user_id'=>'4', 'product_id'=>'2', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'04/05/2016', 'unit_order'=>'2', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'100000'),
			array('user_id'=>'4', 'product_id'=>'2', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'04/05/2016', 'unit_order'=>'2', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'100000'),
			array('user_id'=>'4', 'product_id'=>'2', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'04/05/2016', 'unit_order'=>'2', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'100000'),
			array('user_id'=>'4', 'product_id'=>'2', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'04/05/2016', 'unit_order'=>'2', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'100000'),
			array('user_id'=>'5', 'product_id'=>'2', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'04/05/2016', 'unit_order'=>'2', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'100000'),
			array('user_id'=>'5', 'product_id'=>'2', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'04/05/2016', 'unit_order'=>'2', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'100000'),
			array('user_id'=>'5', 'product_id'=>'2', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'04/05/2016', 'unit_order'=>'2', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'100000'),
			array('user_id'=>'5', 'product_id'=>'2', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'04/05/2016', 'unit_order'=>'2', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'100000'),
			array('user_id'=>'5', 'product_id'=>'2', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'04/05/2016', 'unit_order'=>'2', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'100000'),

			array('user_id'=>'6', 'product_id'=>'3', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'02/01/2017', 'unit_order'=>'3', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'85000'),
			array('user_id'=>'6', 'product_id'=>'3', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'02/01/2017', 'unit_order'=>'3', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'85000'),
			array('user_id'=>'6', 'product_id'=>'3', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'02/01/2017', 'unit_order'=>'3', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'85000'),
			array('user_id'=>'6', 'product_id'=>'3', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'02/01/2017', 'unit_order'=>'3', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'85000'),
			array('user_id'=>'6', 'product_id'=>'3', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'02/01/2017', 'unit_order'=>'3', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'85000'),
			array('user_id'=>'6', 'product_id'=>'3', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'02/01/2017', 'unit_order'=>'3', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'85000'),
			array('user_id'=>'6', 'product_id'=>'3', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'02/01/2017', 'unit_order'=>'3', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'85000'),
			array('user_id'=>'6', 'product_id'=>'3', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'02/01/2017', 'unit_order'=>'3', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'85000'),
			array('user_id'=>'6', 'product_id'=>'3', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'02/01/2017', 'unit_order'=>'3', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'85000'),
			array('user_id'=>'6', 'product_id'=>'3', 'trans_desc_id'=>'1', 'description'=>'', 'transaction_date'=>'02/01/2017', 'unit_order'=>'3', 'quantity_out'=>'1', 'note'=>'', 'cost_price'=>'85000'),

	    ));
    }
}
