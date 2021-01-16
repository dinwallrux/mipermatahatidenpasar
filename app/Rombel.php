<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rombel extends Model
{
    protected $table = 'rombel';

    protected $guarded = ['_token'];

    public function guru()
    {
        return $this->belongsTo(TenagaPendidik::class, 'id_tenaga_pendidik', 'id');
    }

    public function sarpras()
    {
        return $this->belongsTo(SarprasRuang::class, 'id_sarpras', 'id');
    }
}
