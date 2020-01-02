<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Akademik extends Model
{
    protected $table = 'akademik';

    protected $fillable = [
        'nama', 'status'
    ];
}
