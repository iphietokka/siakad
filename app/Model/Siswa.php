<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'nipd',
        'nisn',
        'name',
        'jenis_kelamin',
        'tgl_lahir',
        'tempat_lahir',
        'agama',
        'alamat',
        'telepon',
        'angkatan',
        'email',
        'image',
        'nama_ayah',
        'pekerjaan_ayah',
        'telp_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'telp_ibu',
        'nama_wali',
        'pekerjaan_wali',
        'status_awal',
        'status_siswa',
        'kelas_id'
    ];

    public function kelas()
    {
        return $this->belongsTo('App\Model\Kelas', 'kelas_id', 'id');
    }
}
