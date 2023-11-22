<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login_controller;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/proses-validasi-login', [AuthController::class, 'login'])->name('login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/penyewa', [PenyewaController::class, 'index'])->name('penyewa');
Route::get('/penyewa/create', [PenyewaController::class, 'create'])->name('penyewa.create');
Route::post('/penyewa', [PenyewaController::class, 'store'])->name('penyewa.store');
Route::get('/penyewa/{id}/edit', [PenyewaController::class, 'edit'])->name('penyewa.edit');
Route::delete('/penyewa/{id}', [PenyewaController::class, 'destroy'])->name('penyewa.destroy');
Route::get('/nyoba', function () {
    return view('buat');
});