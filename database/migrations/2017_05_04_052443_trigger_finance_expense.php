<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TriggerFinanceExpense extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER trigger_finance_expense
            AFTER INSERT ON `expense` FOR EACH ROW
            BEGIN
                INSERT INTO finance (`keterangan`, `kredit`, `debit`, `created_date`) 
                VALUES ("Expense", 0, new.expense_total, now(), now());
            END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         DB::unprepared('DROP TRIGGER `trigger_finance_expense`');
    }
}
