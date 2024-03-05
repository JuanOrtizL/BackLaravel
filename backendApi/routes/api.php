<?php

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\RazaController;
use App\Http\Controllers\TamanoController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('/user', UserController::class);
Route::resource('/pet', MascotaController::class);
Route::resource('/actividad', ActividadController::class);
Route::resource('/admin', AdministradorController::class);
Route::resource('/raza', RazaController::class);
Route::resource('/size', TamanoController::class);
Route::resource('/tipo', TipoController::class);



