<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $table = 'sekolah';

    protected $fillable = [
        'nama',
        'npsn',
        'nss',
        'alamat',
        'telepon',
        'website',
        'email',

    ];
}
