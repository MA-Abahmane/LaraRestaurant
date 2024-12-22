<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Composant;

class ComposantSeeder extends Seeder
{
    public function run()
    {
        Composant::create(['libelle' => 'Laitue']);
        Composant::create(['libelle' => 'Tomates']);
        Composant::create(['libelle' => 'Poulet']);
    }
}

