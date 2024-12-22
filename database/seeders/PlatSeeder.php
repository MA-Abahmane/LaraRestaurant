<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plat;

class PlatSeeder extends Seeder
{
    public function run()
    {
        Plat::create([
            'categorie_id' => 1, 
            'intitulé' => 'Salade Verte', 
            'description' => 'Une salade fraîche avec vinaigrette.',
            'prix' => 20.00, 
            'photo' => 'salade.jpg'
        ]);

        Plat::create([
            'categorie_id' => 2, 
            'intitulé' => 'Poulet Grillé', 
            'description' => 'Poulet mariné et grillé à la perfection.',
            'prix' => 50.00, 
            'photo' => 'poulet.jpg'
        ]);

        Plat::create([
            'categorie_id' => 3, 
            'intitulé' => 'Crème Brûlée', 
            'description' => 'Un dessert classique avec caramel croustillant.',
            'prix' => 30.00, 
            'photo' => 'creme.jpg'
        ]);
    }
}

