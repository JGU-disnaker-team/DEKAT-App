<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required', 'min:8'],
        ]);

        $user = User::where('email', $credentials['email'])->first();
        if(Auth::attempt($credentials)){

            return response()->json([

                'token' => $user->createToken('DEKAT-App')->plainTextToken,

            ]);
        }

        return response()->json([
            'error' => 'Invalid credentials',
        ]);
    }
}
