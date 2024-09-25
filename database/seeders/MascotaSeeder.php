<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mascota;
use Faker\Factory as Faker;

class MascotaSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Mascota::create([
                'Nombre' => $faker->firstName,
                'Raza' => $faker->word,
                'Género' => $faker->randomElement(['Macho', 'Hembra']),
                'NombreDueño' => $faker->name,
                'telefonoDueño' => $faker->phoneNumber,
            ]);
        }
    }
}
