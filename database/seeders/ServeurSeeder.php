<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Serveur;

class ServeurSeeder extends Seeder
{
    public function run()
    {
        Serveur::create(['nom' => 'Ahmed', 'date_embauche' => '2023-01-15']);
        Serveur::create(['nom' => 'Sara', 'date_embauche' => '2022-06-10']);
    }
}

