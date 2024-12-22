<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            PlatSeeder::class,
            ComposantSeeder::class,
            ServeurSeeder::class,
            CommandeSeeder::class,
        ]);
    }
}
