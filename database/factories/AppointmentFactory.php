<?php

$factory->define(App\Appointment::class, function (Faker\Generator $faker) {
    return [
        "client_id" => factory('App\Client')->create(),
        "employee_id" => factory('App\Employee')->create(),
        "start_time" => $faker->date("Y-m-d H:i:s", $max = 'now'),
        "finish_time" => $faker->date("Y-m-d H:i:s", $max = 'now'),
        "comments" => $faker->name,
    ];
});
