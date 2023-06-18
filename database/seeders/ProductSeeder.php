<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'qty' => 'product-qty',
            'type' => 'configurable',
            'name' => 'name product',
            'slug' => 'name-produt',
            'user_id' => 1
        ]);
        Product::create([
            'qty' => 'product-qty-simple',
            'type' => 'simple',
            'name' => 'name produt simple',
            'slug' => 'name-produt-simple',
            'user_id' => 1
        ]);
    }
}
