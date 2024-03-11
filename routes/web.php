<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\RegisterController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [RegisterController::class, 'index']);
Route::get('/contact', [RegisterController::class, 'contact']);

?>