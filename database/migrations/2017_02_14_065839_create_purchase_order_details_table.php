<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id')->nullable();
            $table->integer('po_item_number');
            $table->integer('quantity_in');
            $table->integer('quantity_out');
            $table->integer('unit_cost');
            $table->integer('line_total');
            $table->integer('discount');
            $table->timestamps();

            //              $table->increments('id');
            // $table->unsignedInteger('product_id')->nullable();
            // $table->integer('po_item_number');
            // $table->integer('quantity');
            // $table->integer('price_per_unit');
            // $table->integer('discount');
            // $table->integer('price_total');
            // $table->timestamps();
        });

        Schema::table('purchase_order_details', function($table) {
            $table->foreign('product_id')->references('id')->on('products')
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
        Schema::dropIfExists('purchase_order_details');
    }
}
