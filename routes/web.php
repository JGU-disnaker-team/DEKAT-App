<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

//konsumen
Route::get('/login', [LoginController::class, 'showKonsumenLoginForm'])->name('konsumen.login');
Route::middleware('konsumen')->group(function () {
    Route::get('/konsumen/index', function () {
        return view('index');
    })->name('konsumen.index');
});


//admin
Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});
Route::get('/admin/login', [LoginController::class, 'showAdminLoginForm'])->name('admin.login');


//mitra
Route::middleware('mitra')->group(function () {
    Route::get('/mitra/dashboard', function () {
        return view('mitra.dashboard');
    })->name('mitra.dashboard');
});
Route::get('/mitra/login', [LoginController::class, 'showMitraLoginForm'])->name('mitra.login');


//end


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
