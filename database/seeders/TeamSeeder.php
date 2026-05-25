<?php

namespace Database\Seeders;

use Illuminate\Database\Seeders;
use App\Models\Product;

class ProductSeeder extends Seeder {
    public function run() {
        $products = [
            [
                'name' => 'X-Burguer Clássico',
                'description' => 'Pão, carne bovina 150g, queijo cheddar e maionese artesanal.',
                'price' => 28.50,
                'category' => 'Hambúrgueres',
                'image' => 'x-burguer.png',
            ],
            [
                'name' => 'Batata Frita Família',
                'description' => 'Porção de 400g de batata palito crocante com sal e alecrim.',
                'price' => 19.00,
                'category' => 'Acompanhamentos',
                'image' => 'fritas.png',
            ],
            [
                'name' => 'Suco de Laranja Natural',
                'description' => 'Copo de 400ml, gelado e sem açúcar adicionado.',
                'price' => 12.00,
                'category' => 'Bebidas',
                'image' => 'suco-laranja.png',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}