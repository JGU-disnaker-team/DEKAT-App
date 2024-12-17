<?php

use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', action: [LoginController::class, 'login']);

Route::apiResource('todos' , \App\Http\Controllers\Api\TodoController::class)->middleware(middleware: 'auth:sanctum');
