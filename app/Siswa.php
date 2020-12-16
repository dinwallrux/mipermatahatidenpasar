<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "siswa";

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'nisn',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'tingkat_kelas_saat_ini',
        'rombel',
        'tanggal_masuk',
        'alamat',
        'agama',
        'nama_ayah',
        'nama_ibu'
    ];
}
