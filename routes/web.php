<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Ruta para la página de inicio que redirige a la lista de mascotas
Route::get('/', [MascotaController::class, 'index'])->name('mascotas.index');

// Rutas de recursos para las mascotas
Route::resource('mascotas', MascotaController::class);
