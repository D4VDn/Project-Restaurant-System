<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestauranteController;
use App\Models\Restaurante;

// Página pública (vitrine)
Route::get('/', function () {
    $restaurantes = Restaurante::orderBy('nome')->get();
    return view('home', compact('restaurantes'));
})->name('home');

// Dashboard administrativo (sem login)
Route::get('/dashboard', function () {
    $totalRestaurantes = Restaurante::count();
    $melhorAvaliado = Restaurante::latest()->first(); // último cadastrado

    return view('dashboard', compact('totalRestaurantes', 'melhorAvaliado'));
})->name('dashboard');

// CRUD de Restaurantes
Route::resource('restaurantes', RestauranteController::class);