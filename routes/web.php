<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\DatabaseController;

Route::get('/check-database', [DatabaseController::class, 'checkDatabaseConnection']);


// Rutas públicas (sin autenticación)
Route::get('/', [MascotaController::class, 'index'])->name('mascotas.index');

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    Route::resource('mascotas', MascotaController::class);
});
