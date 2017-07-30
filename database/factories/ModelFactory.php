<?php

use Carbon\Carbon;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\CalendarEvent::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(),
        'start' => Carbon::now(),
        'end' => Carbon::tomorrow(+1)->addDays(rand(-10, 17)),
        'is_all_day' => $faker->boolean,
        'background_color' => $faker->colorName,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ];
});