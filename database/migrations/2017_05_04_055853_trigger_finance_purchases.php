<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TriggerFinancePurchases extends Migration
{

    public function up()
    {
        DB::unprepared('CREATE TRIGGER trigger_finance_purchases
            AFTER INSERT ON `purchases` FOR EACH ROW
            BEGIN
                INSERT INTO finance (`keterangan`, `kredit`, `debit`, `created_date`) 
                VALUES ("Pembelian", 0, new.price_total, now());
            END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `trigger_finance_purchases`');
    }
}
