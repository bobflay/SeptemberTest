<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'floor'=>rand(1,50),
        'building'=>$faker->buildingNumber,
        'street'=>$faker->streetName,
        'region'=>$faker->address,
        'city'=>$faker->city,
        'country'=>$faker->country,
        'created_by'=>'admin_user'
    ];
});
