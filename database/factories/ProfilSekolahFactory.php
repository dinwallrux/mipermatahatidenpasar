<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProfilSekolah;
use Faker\Generator as Faker;

$factory->define(ProfilSekolah::class, function (Faker $faker) {
    return [
        'nama_sekolah'              => $faker->firstName,
        'npsn'                      => 20202317,
        'alamat'                    => $faker->address,
        'status_sekolah'            => $faker->randomElement(['Negeri', 'Swasta']),
        'akreditasi'                => $faker->randomElement(['A', 'B', 'C']),
        'kurikulum'                 => "K-13",
        'jumlah_guru'               => 21,
        'jumlah_siswa_laki_laki'    => 178,
        'jumlah_siswa_perempuan'    => 241,
        'kepala_sekolah'            => $faker->name
    ];
});
