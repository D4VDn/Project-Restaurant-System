<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class TeamSeeder extends Seeder {
    public function run() {
        $products = [
    
];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}