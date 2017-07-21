<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('supplier_id')->nullable();
            $table->unsignedInteger('shipping_id')->nullable();
            $table->unsignedInteger('location_id')->nullable();
            $table->string('purchase_code');
            $table->string('po_description')->nullable();
            $table->string('purchase_date');
            $table->string('promised_date');
            $table->string('shipping_date');
            $table->integer('freight_charge');
            $table->integer('price_total');
            $table->timestamps();
        });

        Schema::table('purchases', function($table) {
            $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('supplier_id')->references('id')->on('suppliers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('shipping_id')->references('id')->on('shippings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('location_id')->references('id')->on('locations')
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
        Schema::dropIfExists('purchases');
    }
}
