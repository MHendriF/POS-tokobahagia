<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TriggerAddStock extends Migration
{
    public function up()
    {
        DB::unprepared('CREATE TRIGGER trigger_add_stock 
            AFTER INSERT ON `purchase_details` FOR EACH ROW
            BEGIN
                UPDATE inventory s
                SET s.stock = s.stock + new.quantity
                WHERE s.id = new.product_id;
            END');
    }

    public function down()
    {
         DB::unprepared('DROP TRIGGER `trigger_add_stock`');
    }
}
