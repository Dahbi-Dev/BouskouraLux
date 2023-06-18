<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'id' => 1,
            'name' => 'clothes',
            'slug' => 'clothes',
            'parent_id' => null
        ]);
        Category::create([
            'id' => 2,
            'name' => 'men clothes',
            'slug' => 'clothes-men',
            'parent_id' => 1
        ]);
        Category::create([
            'id' => 3,
            'name' => 'woman clothes',
            'slug' => 'clothes-woman',
            'parent_id' => 1
        ]);
    }
}
