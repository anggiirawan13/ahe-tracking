<?php

use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/shipment', [ShipmentController::class, 'index'])->name('shipment.index');
Route::get('/shipment/search', [ShipmentController::class, 'search'])->name('shipment.search');
Route::get('/shipment/create', [ShipmentController::class, 'create'])->name('shipment.create');
Route::post('/shipment', [ShipmentController::class, 'store'])->name('shipment.store');
Route::get('/shipment/{id}/edit', [ShipmentController::class, 'edit'])->name('shipment.edit');
Route::put('/shipment/{id}', [ShipmentController::class, 'update'])->name('shipment.update');
Route::delete('/shipment/{id}', [ShipmentController::class, 'destroy'])->name('shipment.destroy');
