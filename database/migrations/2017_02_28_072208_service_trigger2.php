<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServiceTrigger2 extends Migration
{

    public function up()
    {
        DB::unprepared('CREATE TRIGGER service_trigger2 AFTER INSERT ON `purchase_orders` FOR EACH ROW
            BEGIN
                INSERT INTO service_of_employees (`employee_id`, `created_at`, `updated_at`) 
                VALUES (NEW.user_id, now(), now());
            END');
    }


    public function down()
    {
         DB::unprepared('DROP TRIGGER `service_trigger2`');
    }
}
