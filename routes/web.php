<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AgendaController;
use Illuminate\Support\Facades\Route;
use App\Models\Agenda;

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

Route::resource('/', AgendaController::class);

//CRUD
Route::resource('agenda', AgendaController::class)->middleware(['auth', 'verified']); // Rutas Empleados
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
