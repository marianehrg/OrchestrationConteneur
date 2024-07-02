<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Produit Fictif',
            'description' => 'Ceci est une description d\'un produit fictif.',
            'price' => 19.99
        ]);
    }
}
