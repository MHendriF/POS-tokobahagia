<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceOfEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_of_employees', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('employee_id')->nullable();
            $table->timestamps();
        });

        Schema::table('service_of_employees', function($table) {
             $table->foreign('employee_id')->references('id')->on('users')
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
        Schema::dropIfExists('service_of_employees');
    }
}
