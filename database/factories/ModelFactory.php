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
        'product_desc'    => $faker->text($maxNbChars = 200),
        'manufacturer'    => $faker->randomElement($array = array ('Sony','Sanyo','Polytron','Aiwa','Samsung','')),
        'item_use'        => $faker->randomElement($array = array ('TV','Computer','Tape Mobil','Printer')),
        'unit_price'      => $faker->numberBetween($min = 5000, $max = 20000),
        'unit_price2'     => $faker->numberBetween($min = 5000, $max = 20000),
        'avg_cost'        => $faker->numberBetween($min = 5000, $max = 20000),
        'reorder_lvl'     => $faker->numberBetween($min = 1, $max = 3),
        'discontinueted'  => $faker->randomElement($array = array ('Yes','No','No')),
        'lead_time'       => $faker->word,
        'images'          => 'default.png',
        'pri_vendor'      => $faker->word,
        'sec_vendor'      => $faker->word,
        'unit_of_hand'    => $faker->numberBetween($min = 0, $max = 3),
        'unit_of_measure' => 'PC', 
    ];
});
