<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Agenda;


Route::resource('/', AgendaController::class);

//CRUD
Route::resource('agenda', AgendaController::class)->middleware(['auth', 'verified']); // Rutas Agenda
Route::resource('user', UserController::class)->middleware(['auth', 'verified']); // Rutas Users
// Ruta para la búsqueda
Route::post('search', [AgendaController::class, 'search'])->name('search'); //buscador de agenda




/*Route::get('/', function () {
    $agendas = Agenda::all();
    return view('index', compact('agendas'));
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
