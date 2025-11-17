<?php

// routes/api.php
use App\Http\Controllers\AuthController;
use App\Http\Middleware\JWTAuthMiddleware;
use Illuminate\Support\Facades\Route;



// Authentication Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);



Route::middleware([JWTAuthMiddleware::class])->group(function () {
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
