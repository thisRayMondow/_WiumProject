<?php

use App\Http\Controllers\Dashboard\dashboard;
use App\Http\Controllers\Dashboard\departement;
use App\Http\Controllers\Dashboard\pengguna;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Route::get('/dashboard', [dashboard::class, 'index'])->middleware('auth');
Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('', [dashboard::class, 'index']);
    Route::get('/ADDUSER', [pengguna::class, 'index']);
    Route::get('/DEPT', [departement::class, 'index']);
});
