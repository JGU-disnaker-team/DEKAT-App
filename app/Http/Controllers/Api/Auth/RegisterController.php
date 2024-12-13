<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8']
        ]);

        // Handle registration logic here
       $registered = User::create([
            'name' => $request->name,

            'email' => $request->email,

            'password' => Hash::make($request->password)
        ]);

        $token = $registered->createToken('DEKAT-App')->plainTextToken;

        return response()->json([
            'token' => $token
        ]);
    }
}
