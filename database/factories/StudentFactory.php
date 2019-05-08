<?php

use App\Student;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Student::class, function (Faker $faker) {

    // $gender = $faker->randomElement(['male', 'female']);

    return [
        'last_name' => $faker->lastName,
        'first_name' => $faker->firstName,
        'middle_name' => $faker->lastName,
        'gender' => $faker->randomElement(['male', 'female']),
        'address' => $faker->streetAddress ,
        'number' => $faker->phoneNumber,
        'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'age' => $faker->numberBetween(16,35),
        
    ];
});
