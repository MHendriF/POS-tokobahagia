<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_id')->nullable();
            $table->unsignedInteger('shipping_id')->nullable();
            $table->unsignedInteger('sale_detail_id')->nullable();
            $table->string('sale_no');
            $table->string('shipping_date');
            $table->string('no_po_customer');
            $table->string('description');
            $table->timestamps();
            
        });

        Schema::table('sales', function($table) {
            $table->foreign('customer_id')->references('id')->on('customers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('shipping_id')->references('id')->on('shippings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');    
            $table->foreign('sale_detail_id')->references('id')
                    ->on('sale_details')
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
        Schema::dropIfExists('sales');
    }
}
