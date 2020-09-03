<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
                        'first_name'=> $faker->firstName,
                'last_name'=>$faker->lastName,
                'address'=>$faker->address,
                'age'=>12,
    ];
});
