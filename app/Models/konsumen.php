<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class konsumen extends Model
{
    protected $table = 'dekatdb';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'email',
        'no_telp',
        'password',
        'alamat_lengkap'
    ];

    public $timestamps = true;
}
