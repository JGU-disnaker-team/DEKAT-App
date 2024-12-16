<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login'); // resources/views/admin/login.blade.php
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek admin berdasarkan email
        $admin = Admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            // Simpan informasi admin ke session (atau gunakan Auth)
            session(['admin_logged_in' => true, 'admin_email' => $admin->email]);
            return redirect('/admin/dashboard'); // halaman dashboard
        }

        return back()->withErrors(['error' => 'Email atau password salah']);
    }
}

