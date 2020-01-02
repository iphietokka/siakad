<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = [
        'nama', 'kode_kelas', 'ruangan_id', 'guru_id'
    ];

    public function guru()
    {
        return $this->belongsTo('App\Model\Guru', 'guru_id', 'id');
    }
}
