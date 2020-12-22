<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Galeri;
use Faker\Generator as Faker;

$factory->define(Galeri::class, function (Faker $faker) {
    return [
        'nama_foto'           => $faker->firstName,
        'image'               => $faker->imageUrl,
        'kategori'            => $faker->randomElement(['mewarnai', 'tari', 'pramuka a', 'pramuka b', 'bulu tangkis', 'futsal', 'catur']),
    ];
});
