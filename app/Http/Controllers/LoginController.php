<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Tentukan guard yang sesuai berdasarkan login type.
     * 
     * @return \Illuminate\Contracts\Auth\Guard
     */
    protected function guard()
    {
        if (request()->is('admin/*')) {
            return Auth::guard('admin');
        }

        if (request()->is('mitra/*')) {
            return Auth::guard('mitra');
        }

        return Auth::guard('konsumen');  // Default guard untuk konsumen
    }

    // Fungsi login atau autentikasi lainnya...
}
