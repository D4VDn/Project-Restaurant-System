<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestauranteController;
use App\Models\Restaurante;

// 1. PÁGINAS PÚBLICAS (Acessíveis por qualquer pessoa)
Route::get('/', function () {
    $restaurantes = Restaurante::orderBy('nome')->get();
    return view('home', compact('restaurantes'));
})->name('home');

// Dashboard com checagem interna (se logado mostra o painel, se não, mostra os botões)
Route::get('/dashboard', function () {
    $totalRestaurantes = Restaurante::count();
    $melhorAvaliado = Restaurante::latest()->first();

    return view('dashboard', compact('totalRestaurantes', 'melhorAvaliado'));
})->name('dashboard');


// 2. ÁREA RESTRITA (Apenas para quem já fez login)
Route::middleware(['auth', 'verified'])->group(function () {
    // O CRUD de restaurantes continua protegido aqui
    Route::resource('restaurantes', RestauranteController::class);
});

require __DIR__.'/auth.php';