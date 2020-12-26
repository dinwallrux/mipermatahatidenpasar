<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Informasi;
use Faker\Generator as Faker;

$factory->define(Informasi::class, function (Faker $faker) {
    return [
        'judul'             => $faker->sentence(3),
        'isi'               => $faker->text(400),
    ];
});
