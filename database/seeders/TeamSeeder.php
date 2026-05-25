<?php

namespace Database\Seeders;

use Illuminate\Database\Seeders;
use App\Models\Product;

class ProductSeeder extends Seeder {
    public function run() {
        $products = [
    // 🥩 Pratos Principais
    [
        'name' => 'Picanha na Chapa',
        'description' => 'Suculenta picanha grelhada acompanhada de arroz, feijão tropeiro e fritas.',
        'price' => 49.90,
        'category' => 'Pratos Principais',
        'image' => 'picanha.png',
    ],
    [
        'name' => 'Frango à Parmegiana',
        'description' => 'Filé de frango empanado com molho artesanal e queijo gratinado.',
        'price' => 36.90,
        'category' => 'Pratos Principais',
        'image' => 'parmegiana.png',
    ],
    [
        'name' => 'Lasanha Bolonhesa',
        'description' => 'Lasanha recheada com carne moída ao molho de tomate e queijo gratinado.',
        'price' => 34.90,
        'category' => 'Pratos Principais',
        'image' => 'lasanha.png',
    ],
    [
        'name' => 'Filé de Tilápia',
        'description' => 'Tilápia grelhada acompanhada de purê de batatas e legumes salteados.',
        'price' => 42.90,
        'category' => 'Pratos Principais',
        'image' => 'tilapia.png',
    ],

    // 🍔 Hambúrgueres Artesanais
    [
        'name' => 'X-Burguer Clássico',
        'description' => 'Pão brioche, hambúrguer bovino 150g, queijo cheddar e molho especial.',
        'price' => 28.90,
        'category' => 'Hambúrgueres',
        'image' => 'x-burguer.png',
    ],
    [
        'name' => 'Bacon Supreme',
        'description' => 'Hambúrguer artesanal, bacon crocante, cheddar duplo e cebola caramelizada.',
        'price' => 34.90,
        'category' => 'Hambúrgueres',
        'image' => 'bacon-supreme.png',
    ],
    [
        'name' => 'Chicken Crispy',
        'description' => 'Frango empanado crocante com alface, tomate e maionese da casa.',
        'price' => 29.90,
        'category' => 'Hambúrgueres',
        'image' => 'chicken-crispy.png',
    ],

    // 🍟 Porções
    [
        'name' => 'Batata Frita Tradicional',
        'description' => 'Porção crocante com molho especial.',
        'price' => 18.90,
        'category' => 'Porções',
        'image' => 'batata-frita.png',
    ],
    [
        'name' => 'Batata com Cheddar e Bacon',
        'description' => 'Batatas cobertas com cheddar cremoso e bacon crocante.',
        'price' => 25.90,
        'category' => 'Porções',
        'image' => 'batata-cheddar.png',
    ],
    [
        'name' => 'Calabresa Acebolada',
        'description' => 'Linguiça calabresa refogada com cebola e cheiro-verde.',
        'price' => 24.90,
        'category' => 'Porções',
        'image' => 'calabresa.png',
    ],

    // 🥗 Saladas
    [
        'name' => 'Salada Caesar',
        'description' => 'Alface americana, frango grelhado, croutons e molho caesar.',
        'price' => 26.90,
        'category' => 'Saladas',
        'image' => 'caesar.png',
    ],
    [
        'name' => 'Salada Tropical',
        'description' => 'Mix de folhas, manga, tomate cereja e molho cítrico.',
        'price' => 24.90,
        'category' => 'Saladas',
        'image' => 'salada-tropical.png',
    ],

    // 🍰 Sobremesas
    [
        'name' => 'Petit Gateau',
        'description' => 'Bolinho de chocolate com sorvete de creme.',
        'price' => 19.90,
        'category' => 'Sobremesas',
        'image' => 'petit-gateau.png',
    ],
    [
        'name' => 'Pudim Caseiro',
        'description' => 'Pudim tradicional com calda de caramelo.',
        'price' => 12.90,
        'category' => 'Sobremesas',
        'image' => 'pudim.png',
    ],
    [
        'name' => 'Taça de Açaí',
        'description' => 'Açaí cremoso com frutas e leite condensado.',
        'price' => 18.90,
        'category' => 'Sobremesas',
        'image' => 'acai.png',
    ],

    // 🥤 Bebidas
    [
        'name' => 'Refrigerantes em lata',
        'description' => 'Coca-Cola, Guaraná, Fanta e Sprite.',
        'price' => 7.00,
        'category' => 'Bebidas',
        'image' => 'refrigerante.png',
    ],
    [
        'name' => 'Sucos Naturais',
        'description' => 'Laranja, acerola, maracujá e limão.',
        'price' => 9.90,
        'category' => 'Bebidas',
        'image' => 'sucos.png',
    ],
    [
        'name' => 'Água Mineral',
        'description' => 'Com ou sem gás.',
        'price' => 4.50,
        'category' => 'Bebidas',
        'image' => 'agua.png',
    ],
    [
        'name' => 'Milk-Shakes',
        'description' => 'Chocolate, morango e baunilha.',
        'price' => 16.90,
        'category' => 'Bebidas',
        'image' => 'milkshake.png',
    ],

    // ⭐ Combos da Casa
    [
        'name' => 'Combo Família',
        'description' => '2 Hambúrgueres + Batata Família + Refrigerante 2L.',
        'price' => 79.90,
        'category' => 'Combos',
        'image' => 'combo-familia.png',
    ],
    [
        'name' => 'Combo Casal',
        'description' => '2 Pratos principais + 2 bebidas + sobremesa compartilhada.',
        'price' => 99.90,
        'category' => 'Combos',
        'image' => 'combo-casal.png',
    ],
];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}