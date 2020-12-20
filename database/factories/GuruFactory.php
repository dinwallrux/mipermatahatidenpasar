<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Guru;
use Faker\Generator as Faker;

$factory->define(Guru::class, function (Faker $faker) {
    return [
        'nama'                      => $this->faker->name,
        'nik'                       => 12345678901234567,
        'jenis_kelamin'             => $faker->randomElement(['L', 'P']),
        'tempat_lahir'              => $faker->randomElement(['denpasar', 'banyuwangi', 'jakarta']),
        'tanggal_lahir'             => $faker->date(),
        'nama_ibu_kandung'          => $this->faker->name,
        'jenis_ptk'                 => $faker->randomElement(['guru mapel', 'guru kelas']),
        'status_pegawai'            => $faker->randomElement(['GTT', 'GTY']),
        'pendidikan_terakhir'       => $faker->randomElement(['S1', 'SMA', 'SMK']),
        'no_sk'                     => $faker->randomElement(['58/YPHP/VIII/2016', '20/YPHP/VIII/2014', '101/YPHP/VII/2018']),
        'nuptk'                     => 12345678901234,
        'email'                     => $this->faker->email,
    ];
});
