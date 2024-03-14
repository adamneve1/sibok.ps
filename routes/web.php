<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\RegisterController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/register', [RegisterController::class, 'register']);
Route::get('/dashboard', [DashboardController::class, 'dashboard']);
Route::get('/katalog', [KatalogController::class, 'katalog']);