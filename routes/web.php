<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\PropiedadesController;
use App\Http\Controllers\AuthController;
####
//Login agentes
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('logout', [AuthController::class, 'logout']);
#####
//rutas agentes 
Route::resource('agentes', AgentesController::class);
#####
##ruta clientes
Route::resource('clientes', ClientesController::class);
//api de buscador de clientes usando sus datos
Route::get('/clientes/buscar', [ClientesController::class, 'buscar']);
###
//ruta Propiedades
Route::resource('propiedades', PropiedadesController::class);
