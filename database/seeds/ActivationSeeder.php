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
            array('user_id'=>'1', 'code'=>'VexDeZWnjmq26eFykuVnwbdsdsdsdsds', 'completed'=>'1'),
			array('user_id'=>'2', 'code'=>'VexDeZWnjmq26eFykuVnwbcyqPipk9JH', 'completed'=>'1'),
            array('user_id'=>'3', 'code'=>'VeWBCt0vcemWQbjj8KulJd8nT6rhbkv4', 'completed'=>'1'),
            array('user_id'=>'4', 'code'=>'948ur3OXkZUuYAbxbpehLLpe12jrum0a', 'completed'=>'1'),
            array('user_id'=>'5', 'code'=>'A6rFBna9b6XhEuwvOYQEWf7nsURKMki3', 'completed'=>'1'),
            array('user_id'=>'6', 'code'=>'TM4r3R5TVi67ZXTe36eYrddBjIHjujrk', 'completed'=>'1'),
        ));
    }
}
