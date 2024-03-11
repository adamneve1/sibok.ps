<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
Use App\Http\Controllers\HomeController;
Use App\Http\Controllers\DashboardController;
=======
Use App\Http\Controllers\RegisterController;
>>>>>>> c1451fcc1d3f52fca017da9fb34ba2419af5b592

// Route::get('/', function () {
//     return view('welcome');
// });

<<<<<<< HEAD
//Route::get('/', function () {
 //   return view('welcome');
//});

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/dashboard', [DashboardController::class, 'dashboard']);

=======
Route::get('/', [RegisterController::class, 'index']);
Route::get('/contact', [RegisterController::class, 'contact']);

?>
>>>>>>> c1451fcc1d3f52fca017da9fb34ba2419af5b592
