<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenagaPendidik extends Model
{
    protected $table = 'tenaga_pendidik';

    protected $guarded = ['_token'];

    public function rombel()
    {
        return $this->belongsTo(Rombel::class, 'id_rombel', 'id');
    }
}
