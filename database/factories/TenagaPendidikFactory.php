<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TenagaPendidik;
use Faker\Generator as Faker;

$factory->define(TenagaPendidik::class, function (Faker $faker) {
    return [
        'nama'                      => $this->faker->name,
        'nik'                       => 12345678901234567,
        'jenis_kelamin'             => $faker->randomElement(['L', 'P']),
        'tempat_lahir'              => $faker->randomElement(['denpasar', 'banyuwangi', 'jakarta']),
        'tanggal_lahir'             => $faker->date(),
        'nama_ibu_kandung'          => $this->faker->name,
        'alamat'                    => $this->faker->address,
        'agama'                     => $faker->randomElement(['islam']),
        'pendidikan_terakhir'       => $faker->randomElement(['s1', 'sma', 'smk']),
        'jenis_tendik'              => $faker->randomElement(['gtk', 'ptk']),
        'status_pegawai'            => $faker->randomElement(['pns', 'pns diperbentukan', 'pns depag', 'gty/pty', 'gtt/ptt kab/kota', 'guru bantu pusat', 'guru honor sekolah', 'tenaga honor', 'cpns']),
        'nip'                       => 123456789012345678,
        'nuptk'                     => 12345678901234,
        'jenis_ptk'                 => $faker->randomElement(['guru mapel', 'guru kelas', 'guru bk', 'guru inklusi', 'tenaga administrasi sekolah', 'guru pendamping', 'guru magang', 'guru tik', 'kepala sekolah', 'laboran', 'pustakawan']),
        'sk_pengangkatan'           => $faker->randomElement(['58/YPHP/VIII/2016', '20/YPHP/VIII/2014', '101/YPHP/VII/2018']),
        'tmt_pengangkatan'          => $faker->date(),
        'lembaga_pengangkat'        => $faker->randomElement(['pemerintah pusat', 'pemerintah provinsi', 'pemerintah kab/kota', 'ketua yayasan', 'kepala sekolah', 'komite sekolah']),
        'sk_cpns'                   => $faker->randomElement(['58/YPHP/VIII/2016', '20/YPHP/VIII/2014', '']),
        'tmt_cpns'                  => $faker->date(),
        'sumber_gaji'               => $faker->randomElement(['apbn', 'apbd provinsi', 'apbd kab/kota', 'yayasan', 'sekolah', 'lembaga donor']),
        'no_telepon'                => $faker->phoneNumber,
        'email'                     => $this->faker->email,
    ];
});
