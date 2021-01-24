<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "siswa";

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'nis',
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
        'nama_ibu',
        'id_rombel',
        'status',
        'foto_siswa'
    ];

    public function rombel()
    {
        return $this->belongsTo(Rombel::class, 'id_rombel', 'id');
    }
}
