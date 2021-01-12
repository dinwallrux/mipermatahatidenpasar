<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rombel;
use Faker\Generator as Faker;

$factory->define(Rombel::class, function (Faker $faker) {
    return [
        'tingkat_pendidikan'           => $faker->randomElement(['Kelas 1', 'Kelas 2', 'Kelas 3', 'Kelas 4', 'Kelas 5', 'Kelas 6']),
        'kurikulum'                    => $faker->randomElement(['KTSP', 'K13']),
        'nama_rombel'                  => $faker->randomElement(['Kelas 1A', 'Kelas 1B', 'Kelas 2A', 'Kelas 2B', 'Kelas 3A', 'Kelas 3B', 'Kelas 4A', 'Kelas 5A', 'Kelas 6A']),
        'id_guru'                      => $faker->unique()->numberBetween(1, App\TenagaPendidik::count()),
        'ruang'                        => $faker->randomElement(['Ruang 1', 'Ruang 2', 'Ruang 3', 'Ruang 4']),
    ];
});
