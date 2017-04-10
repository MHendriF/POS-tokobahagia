<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TriggerSubtractStock extends Migration
{
   
    public function up()
    {
        DB::unprepared('CREATE TRIGGER trigger_subtract_stock 
            AFTER INSERT ON `order_details` FOR EACH ROW
            BEGIN
                UPDATE products s
                SET s.stock = s.stock - new.quantity
                WHERE s.id = new.product_id;
            END');
    }


    public function down()
    {
         DB::unprepared('DROP TRIGGER `trigger_subtract_stock`');
    }
}