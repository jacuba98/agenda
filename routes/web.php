<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('/', AgendaController::class);

//CRUD
Route::resource('agenda', AgendaController::class)->middleware(['auth', 'verified']); // Rutas Agenda
Route::resource('user', UserController::class)->middleware(['auth', 'verified']); // Rutas Users
// Ruta para la búsqueda
Route::post('search', [AgendaController::class, 'search'])->name('search'); //buscador de agenda

require __DIR__ . '/auth.php';
