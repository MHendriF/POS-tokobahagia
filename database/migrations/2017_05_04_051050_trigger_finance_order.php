<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TriggerFinanceOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER trigger_finance_order 
            AFTER INSERT ON `orders` FOR EACH ROW
            BEGIN
                INSERT INTO finance (`keterangan`, `kredit`, `debit`, `created_date`) 
                VALUES ("Penjualan", new.price_total, 0, now());
            END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `trigger_finance_order`');
    }
}
