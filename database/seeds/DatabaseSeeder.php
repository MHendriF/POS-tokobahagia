<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Cartalyst\Sentinel\Roles\EloquentRole;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();

		$this->call('RolesSeeder');
        //this message shown in your terminal after running db:seed command
        $this->command->info("Role table seeded is completed :)");

        factory(App\User::class, 20)->create();
        $this->command->info("User table seeded is completed :)");

        $this->call('RoleusersSeeder');
        //this message shown in your terminal after running db:seed command
        $this->command->info("Role user table seeded is completed :)");

        $this->call('ActivationSeeder');
        //this message shown in your terminal after running db:seed command
        $this->command->info("Activation user is completed :)");

        $this->call('LocationSeeder');
        //this message shown in your terminal after running db:seed command
        $this->command->info("Location table seeded is completed :)");

        $this->call('CategoriesSeeder');
        //this message shown in your terminal after running db:seed command
        $this->command->info("Categories table seeded is completed :)");

        factory(App\Customer::class, 20)->create();
        $this->command->info("Customer table seeded is completed :)");

        $this->call('ShippingmethodsSeeder');
        //this message shown in your terminal after running db:seed command
        $this->command->info("Shipping method table seeded is completed :)");
        
        factory(App\Product::class, 20)->create();
        $this->command->info("Product table seeded is completed :)");

        $this->call('SuppliersSeeder');
        //this message shown in your terminal after running db:seed command
        $this->command->info("Supplier table seeded is completed :)");
      
    }
}
