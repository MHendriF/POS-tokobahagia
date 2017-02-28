<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServiceTrigger extends Migration
{
    
    public function up()
    {
        //cara 1
        DB::unprepared('CREATE TRIGGER service_trigger AFTER INSERT ON `main_transactions` FOR EACH ROW
            BEGIN
                INSERT INTO service_of_employees (`employee_id`, `created_at`, `updated_at`) 
                VALUES (NEW.user_id, now(), now());
            END');

        //cara 2
        // DB::unprepared('CREATE TRIGGER service_trigger AFTER INSERT ON `main_transactions` () FOR EACH ROW
        //     BEGIN
        //         INSERT INTO `service_of_employees` SET 
        //         `employee_id` = NEW.`user_id`, 
        //         `created_at` = now(),
        //         `updated_at` = now();
        //     END');
    }

    public function down()
    {
        DB::unprepared('DROP TRIGGER `service_trigger`');
    }
}
