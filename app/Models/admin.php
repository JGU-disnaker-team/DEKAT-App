<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    // Tentukan nama tabel jika berbeda
    protected $table = 'admin'; // nama tabel
    protected $fillable = ['email', 'password']; // Kolom yang digunakan

}
