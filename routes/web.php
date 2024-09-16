<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/supplier', [SupplierController::class, 'index']);
Route::get('/supplier/{id}', [SupplierController::class, 'getById']);
Route::get('/supplier-create', [SupplierController::class, 'create']);
Route::get('/supplier-edit/{id}', [SupplierController::class, 'edit']);
Route::post('/supplier', [SupplierController::class, 'store']);
Route::put('/supplier/{id}/edit', [SupplierController::class, 'update']);
Route::put('/supplier', [SupplierController::class, 'update']);
Route::delete('/supplier/{id}', [SupplierController::class, 'destroy']);

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'getById']);
Route::get('/category-create', [CategoryController::class, 'create']);
Route::get('/category-edit/{id}', [CategoryController::class, 'edit']);
Route::post('/category', [CategoryController::class, 'store']);
Route::put('/category/{id}/edit', [CategoryController::class, 'update']);
Route::put('/category', [CategoryController::class, 'update']);
Route::delete('/category/{id}', [CategoryController::class, 'destroy']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'getById']);
Route::get('/product-create', [ProductController::class, 'create']);
Route::get('/product-edit/{id}', [ProductController::class, 'edit']);
Route::post('/product', [ProductController::class, 'store']);
Route::put('/product/{id}/edit', [ProductController::class, 'update']);
Route::put('/product', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'destroy']);

Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/customer/{id}', [CustomerController::class, 'getById']);
Route::get('/customer-create', [CustomerController::class, 'create']);
Route::get('/customer-edit/{id}', [CustomerController::class, 'edit']);
Route::post('/customer', [CustomerController::class, 'store']);
Route::put('/customer/{id}/edit', [CustomerController::class, 'update']);
Route::put('/customer', [CustomerController::class, 'update']);
Route::delete('/customer/{id}', [CustomerController::class, 'destroy']);
