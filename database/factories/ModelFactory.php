<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
    	'username'      => $faker->userName,
        'first_name'	=> $faker->firstName,
        'last_name'		=> $faker->lastName,
        'phone'			=> $faker->e164PhoneNumber,
        'address'		=> $faker->address,	
        'password' => $password ?: $password = bcrypt('secret'),
    ];
});


// Modal Factory Customer
$factory->define(App\Customer::class, function (Faker\Generator $faker) {
    return [
        'contact_title'   => $faker->title,
        'contact_name'    => $faker->name,
        'phone'           => $faker->e164PhoneNumber,
        'fax'             => $faker->tollFreePhoneNumber,
        'address'         => $faker->address,
        'postal_code'     => $faker->postcode,
        'city'            => $faker->city,
        'province'        => $faker->state,
        'country'         => $faker->country,
        'billing_address' => $faker->buildingNumber,
        'additional_info' => $faker->text,
    ];
});

// Modal Factory Product 
$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'category_id'     => $faker->numberBetween($min = 1, $max = 62),
        'location_id'     => $faker->numberBetween($min = 1, $max = 4),
        'product_name'    => $faker->bothify('LA #### ??'),
        'code_factory'    => $faker->bothify('LXA #### ??'),
        'product_desc'    => $faker->text($maxNbChars = 200),
        'manufacturer'    => $faker->randomElement($array = array ('Sony','Sanyo','Polytron','Aiwa','Samsung','')),
        'item_function'   => $faker->randomElement($array = array ('TV','Computer','Tape Mobil','Printer')),
        'unit_price_min'  => $faker->numberBetween($min = 5000, $max = 20000),
        'unit_price_max'  => $faker->numberBetween($min = 20000, $max = 30000),
        'price_buy_avg'   => '0',
        'images'          => 'default1.png',
        'stock'           => '0',
        'unit_of_measure' => 'PC',
    ];
});
