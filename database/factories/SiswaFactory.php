<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Siswa;
use Faker\Generator as Faker;
use Faker\Provider\id_ID\Person;

$factory->define(Siswa::class, function (Faker $faker) {
    return [
        'nama'                      => $this->faker->name,
        'jenis_kelamin'             => $faker->randomElement(['L', 'P']),
        'nisn'                      => 1234567890,
        'nik'                       => 12345678901234567,
        'tempat_lahir'              => $faker->randomElement(['Denpasar', 'Banyuwangi', 'Jakarta']),
        'tanggal_lahir'             => $faker->date(),
        'tingkat_kelas_saat_ini'    => $faker->randomElement(['Kelas 1']),
        'rombel'                    => $faker->randomElement(['Kelas 1A', 'Kelas 1B', 'Kelas 1C', 'Kelas 4', 'Kelas 5', 'Kelas 6']),
        'tanggal_masuk'             => $faker->date(),
        'alamat'                    => $faker->address,
        'agama'                     => $faker->randomElement(['Islam']),
        'nama_ayah'                 => $this->faker->name,
        'nama_ibu'                  => $this->faker->name,
    ];
});
