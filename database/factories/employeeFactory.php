<?php

use Faker\Generator as Faker;

$factory->define(App\employee::class, function (Faker $faker) {
    return [
       	'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address,
        'phone' => mt_rand(),
        'mobile' => mt_rand(),
        'gender' => 'Male',
        'dob' => now(),
        'age' => rand(18,60),
        'status'=>'1',
        'empImg'=>'',
    ];
});
