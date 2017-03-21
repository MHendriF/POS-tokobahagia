<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{

    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('technician_id')->nullable();
            $table->unsignedInteger('serv_item_id')->nullable();
            $table->unsignedInteger('serv_status_id')->nullable();
            $table->string('cust_name');
            $table->string('cust_addr');
            $table->string('cust_phone');
            $table->string('entry_date');
            $table->string('item_desc');
            $table->string('item_serial');
            $table->string('item_damage');
            $table->string('item_images')->nullable();
            $table->string('warranty');
            $table->string('collect_date');
            $table->integer('tech_fee');
            $table->integer('serv_fee');
            $table->integer('trans_fee');
            $table->integer('discount');
            $table->timestamps();
        });

        Schema::table('services', function($table) {
             $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('technician_id')->references('id')->on('technicians')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('serv_item_id')->references('id')->on('service_items')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');    
            $table->foreign('serv_status_id')->references('id')->on('service_statuses')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('services');
    }
}
