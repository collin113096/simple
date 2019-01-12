<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
	$gender = $faker->numberBetween(1,2);
	$religion = $faker->numberBetween(1,2);
    return [
        'user_id'=> 1,
        'last_name'=> $faker->lastName,
        'first_name'=> $faker->firstName(),
        'middle_name'=> $faker->lastName,
        'barangay'=> $faker->streetName,
        'municipality'=> $faker->city,
        'province'=> $faker->state,
        'birth_date'=> $faker->date(),
        'religion'=> $religion == 1 ? 'Iglesia Ni Cristo':'Catholic',
        'gender'=> $gender == 1 ? 'Male':'Female',
        'grade'=> 'Grade '.$faker->numberBetween(1,10),
        'father_id' => 5,
        'mother_id' => 6,
    ];
});
