<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pricing-plans', function() {
    return App\Models\PricingPlan::where('status', true)->get();
});

