<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('trans_desc_id');
            $table->string('description');
            $table->string('transaction_date');
            $table->integer('unit_order');
            $table->integer('quantity_out');
            $table->string('note');
            $table->integer('cost_price');
            $table->timestamps();
        });

        Schema::table('main_transactions', function($table) {
            $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('inventory')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('trans_desc_id')->references('id')->on('transaction_descriptions')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main_transactions');
    }
}
