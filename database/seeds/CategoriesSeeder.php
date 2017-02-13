<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        //insert some dummy records
        DB::table('categories')->insert(array(
			array('category_name' => 'AC'),
			array('category_name' => 'Crt'),
			array('category_name' => 'Elko'),
			array('category_name' => 'Evaporator'),
			array('category_name' => 'Filter'),
			array('category_name' => 'Fly back'),
			array('category_name' => 'Freon'),
			array('category_name' => 'IC'),
			array('category_name' => 'Kompresor'),
			array('category_name' => 'Kulkas'),
			array('category_name' => 'Lampu'),
			array('category_name' => 'Televisi'),
			array('category_name' => 'Door Switch'),
			array('category_name' => 'Bimetal Panas'),
			array('category_name' => 'Bimetal Dingin'),
			array('category_name' => 'Fuse'),
			array('category_name' => 'Pulsator'),
			array('category_name' => 'Selonoid'),
			array('category_name' => 'Lain-Lain'),
			array('category_name' => 'Timer'),
			array('category_name' => 'Kimia'),
			array('category_name' => 'Pipa'),
			array('category_name' => 'Switch'),
			array('category_name' => 'Ran Kapasitor'),
			array('category_name' => 'Relay'),
			array('category_name' => 'Gas'),
			array('category_name' => 'OverLoad'),
			array('category_name' => 'Remote'),
			array('category_name' => 'Speaker'),
			array('category_name' => 'Kabel'),
			array('category_name' => 'Deflection Yoke'),
			array('category_name' => 'Jack'),
			array('category_name' => 'Transformer'),
			array('category_name' => 'Coil IF'),
			array('category_name' => 'Motor'),
			array('category_name' => 'Optic'),
			array('category_name' => 'Soket'),
			array('category_name' => 'Sensor'),
			array('category_name' => 'Led'),
			array('category_name' => 'Karet'),
			array('category_name' => 'Diode'),
			array('category_name' => 'Varco'),
			array('category_name' => 'Pintu'),
			array('category_name' => 'Door Liner'),
			array('category_name' => 'Thermostat'),
			array('category_name' => 'Water level'),
			array('category_name' => 'Gear Box'),
			array('category_name' => 'Tuner'),
			array('category_name' => 'Resistor'),
			array('category_name' => 'Transistor'),
			array('category_name' => 'Cristal'),
			array('category_name' => 'Pentil'),
			array('category_name' => 'Kawat'),
			array('category_name' => 'Trafo'),
			array('category_name' => 'Knop'),
			array('category_name' => 'Kondensator'),
			array('category_name' => 'Perak'),
			array('category_name' => 'Tutup Freezer'),
			array('category_name' => 'Drain Hose'),
			array('category_name' => 'Valve'),
			array('category_name' => 'Bimetal'),
			array('category_name' => 'Shaft'),
        ));

    }
}
