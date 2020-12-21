<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SarprasRuang;
use Faker\Generator as Faker;

$factory->define(SarprasRuang::class, function (Faker $faker) {
    return [
        'jenis_prasarana'           => $faker->randomElement(['ruang kelas/teori', 'ruang guru', 'ruang kepsek', 'lab ipa', 'lab ips', 'lab komputer', 'ruang perpustakaan', 'ruang tu', 'ruang bp/bk', 'ruang uks', 'ruang ibadah', 'gudang', 'kamar mandi']),
        'nama_ruang'                => $faker->streetName,
        'lantai_ke'                 => $faker->randomDigit,
        'jumlah_ruangan'            => $faker->randomDigit,
        'kapasitas'                 => $faker->randomElement(['32', '29', '30']),
    ];
});
