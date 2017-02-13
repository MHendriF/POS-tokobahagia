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
            $table->unsignedInteger('customer_id')->nullable();
            $table->unsignedInteger('shipping_id')->nullable();
            $table->unsignedInteger('order_detail_id')->nullable();
            $table->string('order_no');
            $table->date('order_date');
            $table->string('po_number');
            $table->integer('freight_charge');
            $table->integer('sales_tax_rate_po');
            $table->timestamps();
            
        });

        Schema::table('orders', function($table) {
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('shipping_id')->references('id')->on('shippings')->onDelete('cascade');
            $table->foreign('order_detail_id')->references('id')
                    ->on('order_details')
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
