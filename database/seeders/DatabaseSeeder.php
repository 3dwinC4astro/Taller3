<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\MascotaSeeder; // Importar el MascotaSeeder

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(MascotaSeeder::class);
    }
}
