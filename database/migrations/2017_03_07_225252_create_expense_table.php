<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpenseTable extends Migration
{
    
    public function up()
    {
        Schema::create('expense', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('listrik');
            $table->integer('air');
            $table->integer('makan')->nullable();
            $table->integer('others')->nullable();
            $table->integer('expense_total');
            $table->timestamps();
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('expense');
    }
}
