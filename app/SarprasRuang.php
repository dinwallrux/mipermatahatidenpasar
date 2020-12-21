<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SarprasRuang extends Model
{
    protected $table = 'sarpras_ruang';

    protected $guarded = ['_token'];
}
