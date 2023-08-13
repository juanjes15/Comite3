<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('programas', \App\Http\Controllers\ProgramaController::class);
    Route::resource('fichas', \App\Http\Controllers\FichaController::class);
    Route::resource('aprendizs', \App\Http\Controllers\AprendizController::class);
    Route::resource('instructors', \App\Http\Controllers\InstructorController::class);
    Route::resource('comites', \App\Http\Controllers\ComiteController::class);
    Route::resource('reglamentos', \App\Http\Controllers\ReglamentoController::class);
    Route::resource('pruebas', \App\Http\Controllers\PruebaController::class);
    Route::resource('solicitud_comites', \App\Http\Controllers\SolicitudComiteController::class);
    // Route::resource('tipoFaltas', \App\Http\Controllers\ReglamentoController::class);
});