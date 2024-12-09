<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('login', \App\Http\Controllers\Api\Auth\LoginController::class);
Route::post('register', \App\Http\Controllers\Api\Auth\RegisterController::class);
