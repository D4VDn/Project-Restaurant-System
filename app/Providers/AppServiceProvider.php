<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator; // <-- Importe esta linha aqui em cima

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Força o Laravel a usar o design do Bootstrap nas páginas
        Paginator::useBootstrapFive(); 
        
        // Se o seu projeto usar Bootstrap 4, use: Paginator::useBootstrapFour();
    }
}