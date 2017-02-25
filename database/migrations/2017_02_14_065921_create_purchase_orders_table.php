<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('supplier_id')->nullable();
            $table->unsignedInteger('shipping_id')->nullable();
            $table->unsignedInteger('po_detail_id')->nullable();
            $table->integer('po_number');
            $table->string('po_description');
            $table->date('order_date');
            $table->date('order_required');
            $table->date('order_promised');
            $table->date('ship_date');
            $table->integer('freight_charge');
            $table->timestamps();
        });

        Schema::table('purchase_orders', function($table) {
             $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('supplier_id')->references('id')->on('suppliers')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('shipping_id')->references('id')->on('shippings')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');    
            $table->foreign('po_detail_id')->references('id')->on('purchase_order_details')
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
        Schema::dropIfExists('purchase_orders');
    }
}
