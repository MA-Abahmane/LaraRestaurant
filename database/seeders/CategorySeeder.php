<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['titre' => 'Entrées', 'photo' => 'entrees.jpg']);
        Category::create(['titre' => 'Plats Principaux', 'photo' => 'plats.jpg']);
        Category::create(['titre' => 'Desserts', 'photo' => 'desserts.jpg']);
    }
}

