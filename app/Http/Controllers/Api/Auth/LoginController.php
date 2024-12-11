<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required', 'min:8'],
        ]);

        if(Auth::attempt($credentials)){
            return response()->json(['success' => 'Anda berhasil login']);
        }

        return response()->json([
            'error' => 'Invalid credentials',
        ]);
    }
}
