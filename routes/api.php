<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\PizzeroController;


Route::get('/pizza', [PizzaController::class, 'ListarTodas']);
Route::get('/pizza/{d}', [PizzaController::class, 'ListarUna']);
Route::post('/pizza', [PizzaController::class, 'Crear']);
Route::delete('/pizza/{d}', [PizzaController::class, 'Eliminar']);

Route::get('/pizzero', [PizzeroController::class, 'Listar']);
Route::post('/pizzero', [PizzeroController::class, 'Guardar']);
Route::get('/pizzero/{id}', [PizzeroController::class, 'Buscar']);

