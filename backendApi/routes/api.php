<?php

use App\Http\Controllers\MascotaController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('/user', UserController::class);
Route::resource('/pet', MascotaController::class);

