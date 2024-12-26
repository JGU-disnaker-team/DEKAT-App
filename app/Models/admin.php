<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    // Tentukan nama tabel jika berbeda
    protected $table = 'admin';
    protected $fillable = ['email', 'password'];

}
