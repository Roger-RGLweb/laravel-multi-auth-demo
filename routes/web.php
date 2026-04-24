<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AuthController;

/*  Route::get('/', function () {
    return view('welcome');
}); */



// Login
Route::get('/', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

// Dashboards
Route::middleware('role:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
});

Route::middleware('role:cliente')->group(function () {
    Route::get('/cliente/dashboard', [ClienteController::class, 'dashboard']);
});

Route::middleware('role:vendor')->group(function () {
    Route::get('/vendor/dashboard', [VendorController::class, 'dashboard']);
});
