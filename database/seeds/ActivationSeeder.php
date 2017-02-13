<?php

use Illuminate\Database\Seeder;

class ActivationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activations')->delete();
        //insert some dummy records
        DB::table('activations')->insert(array(
			array('user_id'=>'2', 'code'=>'VexDeZWnjmq26eFykuVnwbcyqPipk9JH', 'completed'=>'1'),
        ));
    }
}
