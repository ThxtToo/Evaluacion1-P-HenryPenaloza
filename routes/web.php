<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

Route::resource('empleados', EmpleadoController::class);