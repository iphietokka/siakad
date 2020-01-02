<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $fillable = [
        'nip',
        'nama',
        'jenis_kelamin',
        'tgl_lahir',
        'tempat_lahir',
        'agama',
        'alamat',
        'telepon',
        'email',
        'image',
    ];
}
