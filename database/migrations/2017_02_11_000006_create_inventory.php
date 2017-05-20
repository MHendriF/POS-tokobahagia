<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventory extends Migration
{
    
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('location_id')->unsigned()->nullable();
            $table->string('product_name');
            $table->string('code_factory')->nullable();
            $table->string('product_desc')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('item_function')->nullable();
            $table->integer('cost_min');
            $table->integer('cost_max');
            $table->integer('price_buy_avg');
            $table->string('images')->nullable();
            $table->integer('stock');
            $table->string('unit_of_measure');
            $table->timestamps();
        });

        Schema::table('inventory', function($table) {
            $table->foreign('category_id')->references('id')->on('categories')
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
        Schema::dropIfExists('inventory');
    }
}
