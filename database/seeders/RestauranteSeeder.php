<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurante;

class RestauranteSeeder extends Seeder
{
    public function run(): void
    {
        // Limpa os dados antigos antes de inserir os novos
        Restaurante::truncate();

        $produtos = [
            [
                'nome' => 'Pizza Margherita',
                'categoria' => 'Pizza',
                'preco' => 39.90,
                'foto' => null,
            ],
            [
                'nome' => 'Hambúrguer Artesanal',
                'categoria' => 'Lanche',
                'preco' => 28.50,
                'foto' => null,
            ],
            [
                'nome' => 'Sushi Combo 20 peças',
                'categoria' => 'Japonesa',
                'preco' => 54.90,
                'foto' => null,
            ],
            [
                'nome' => 'Pudim de Leite',
                'categoria' => 'Sobremesa',
                'preco' => 12.00,
                'foto' => null,
            ],
            [
                'nome' => 'Suco Natural de Laranja',
                'categoria' => 'Bebida',
                'preco' => 8.50,
                'foto' => null,
            ],
        ];

        foreach ($produtos as $p) {
            Restaurante::create($p);
        }
    }
}