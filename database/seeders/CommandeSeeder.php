<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Commande;

class CommandeSeeder extends Seeder
{
    public function run()
    {
        Commande::create(['serveur_id' => 1, 'numero_table' => 5, 'etat' => 'en cours', 'payé' => false]);
        Commande::create(['serveur_id' => 2, 'numero_table' => 8, 'etat' => 'servi', 'payé' => true]);
    }
}
