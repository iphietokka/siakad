<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsTo('App\Model\Role', 'role_id', 'id');
    }

    public function siswa()
    {
        return $this->belongsTo('App\Model\Siswa', 'nama', 'id');
    }

    public function guru()
    {
        return $this->belongsTo('App\Model\Guru', 'nama', 'id');
    }

    public function IsAdmin()
    {
        return $this->roles->name == 'Admin';
    }

    public function IsGuru()
    {
        return $this->roles->name == 'Guru';
    }

    public function IsSiswa()
    {
        return $this->roles->name == 'Siswa';
    }
}
