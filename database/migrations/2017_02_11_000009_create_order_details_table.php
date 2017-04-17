<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned()->nullable();
            $table->integer('product_id')->unsigned()->nullable();
            $table->integer('number');
            $table->integer('quantity');
            $table->integer('price_per_unit');
            $table->integer('discount');
            $table->integer('price_total');
            $table->timestamps();
        });

         Schema::table('order_details', function($table) {
            $table->foreign('order_id')->references('id')->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
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
        Schema::dropIfExists('order_details');
    }
}
