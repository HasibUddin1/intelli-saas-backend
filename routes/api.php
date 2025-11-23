<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Authentication routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::middleware('auth:sanctum')->get('/user', [AuthController::class, 'user']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);