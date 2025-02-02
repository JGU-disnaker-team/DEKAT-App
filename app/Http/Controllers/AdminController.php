<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\admin;

class RegisteredUserController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string|email|max:255|unique:admin',
            'password' => 'required|string|min:8|confirmed',
        ]);

        Admin::create([
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return redirect()->route('admin.login')->with('success', 'Admin registered successfully!');
    }
}

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
        $hashedPassword = Hash::make('password'); // Ganti 'password' dengan password yang ingin di-hash

        $adminLoggedIn = Session::get('admin_logged_in'); // Mendapatkan nilai session
        Session::forget('admin_logged_in'); // Menghapus session


        if ($admin && Hash::check($request->password, $admin->password)) {
            // Simpan informasi admin ke session (atau gunakan Auth)
            session(['admin_logged_in' => true, 'admin_email' => $admin->email]);
            return redirect('/admin/dashboard'); // halaman dashboard
        }

        return back()->withErrors(['error' => 'Email atau password salah']);
    }

    public function dashboard()
    {
        $adminEmail = session('admin_email'); // Ambil email admin dari session
        return view('admin.dashboard', ['adminEmail' => $adminEmail]);
    }


    public function logout()
    {
        session()->flush(); // Hapus semua session
        return redirect('/admin/login')->with('success', 'Kamu telah logout');
    }

}

