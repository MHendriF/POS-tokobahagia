<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id')->nullable();
            $table->unsignedInteger('purchase_id')->nullable();
            $table->integer('number');
            $table->integer('quantity');
            $table->integer('price_per_unit');
            $table->integer('discount');
            $table->integer('price');

        });

        Schema::table('purchase_details', function($table) {
            $table->foreign('product_id')->references('id')->on('inventory')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('purchase_id')->references('id')->on('purchases')
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
        Schema::dropIfExists('purchase_details');
    }
}
