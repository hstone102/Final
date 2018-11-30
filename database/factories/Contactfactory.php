<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [

      'name' => $faker->randomElement(['Mother', 'Father', 'Family Member', 'Grandparent']),
      'type' => $faker-> randomElement(['No Show', 'Cancel', 'Reschedule', 'Group Event', 'Reminder']),
      'date' => $faker->dateTimeBetween($startDate = '-4 weeks', $endDate = 'now', $timezone = null),
      'start' => $faker->time($format = 'H:i:s', $max = 'now'),
      'end' => $faker->time($format = 'H:i:s', $max = 'now'),
      'comment' => $faker->text($maxNbChars = 50),
      'user_id' =>  DB::table('users')->inRandomOrder()->first()->id,
      'client_id' => DB::table('clients')->inRandomOrder()->first()->id
        //
    ];
});
