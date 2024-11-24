<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingPageController;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php
Route::get('/', [LandingPageController::class, 'index']);

// routes/web.php
Route::get('/smm', [LandingPageController::class, 'smmLanding']);

// routes/web.php
Route::get('/dev', [LandingPageController::class, 'devLanding']);


// routes/web.php
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
});

