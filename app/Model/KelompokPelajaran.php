<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KelompokPelajaran extends Model
{
    protected $table = 'kelompok_pelajaran';

    protected $fillable = [
        'jenis', 'nama'
    ];
}
