<?php

use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [LoginController::class, 'index'])->name('home');
// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/shipment', [ShipmentController::class, 'index'])->name('shipment.index');
Route::get('/shipment/search', [ShipmentController::class, 'search'])->name('shipment.search');
Route::get('/shipment/create', [ShipmentController::class, 'create'])->name('shipment.create');
Route::post('/shipment', [ShipmentController::class, 'store'])->name('shipment.store');
Route::get('/shipment/{id}/edit', [ShipmentController::class, 'edit'])->name('shipment.edit');
Route::put('/shipment/{id}', [ShipmentController::class, 'update'])->name('shipment.update');
Route::delete('/shipment/{id}', [ShipmentController::class, 'destroy'])->name('shipment.destroy');
