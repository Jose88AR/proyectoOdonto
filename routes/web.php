<?php

use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\UpdateComponent;

Route::get('/pacientes/create', [PacienteController::class, 'create']);


// Ruta para la vista 'welcome'
Route::get('/', function () {
    return view('welcome');
});
Route::get('/pacientes', [PacienteController::class, 'index'])->name('pacientes.index');
// Route::get(
//     '/pacientes',
//     function () {

//         return view('pacientes.index');
//     }


// )->name('pacientes_index');

// Ruta para el formulario de creación de pacientes
Route::get('pacientes/create', [PacienteController::class, 'create'])->name('pacientes.create');

// Ruta para el dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
