<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CategoryController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{id}', [CategoryController::class, 'getById']);
Route::view('/category-create', 'pages.category.create');
Route::get('/category-edit/{id}', [CategoryController::class, 'edit']);
Route::post('/category', [CategoryController::class, 'store']);
Route::put('/category/{id}/edit', [CategoryController::class, 'update']);
Route::put('/category', [CategoryController::class, 'update']);
Route::delete('/category/{id}', [CategoryController::class, 'destroy']);
