<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('customer_id')->nullable();
            $table->unsignedInteger('shipping_id')->nullable();
            $table->string('order_no');
            $table->string('shipping_date');
            $table->string('no_po_customer');
            $table->integer('price_total');
            $table->string('description');
            $table->timestamps();
            
        });

        Schema::table('orders', function($table) {
            $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('shipping_id')->references('id')->on('shippings')
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
        //Schema::dropForeign('orders_customer_id_foreign');
        Schema::dropIfExists('orders');
    }
}
