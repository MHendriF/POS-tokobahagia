<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('company_id')->unsigned()->nullable();
            $table->string('contact_title');
            $table->string('contact_name');
            $table->string('phone');
            $table->string('fax');
            $table->string('address');
            $table->string('postal_code');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('billing_address');
            $table->string('additional_info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
