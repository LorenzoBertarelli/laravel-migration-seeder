<?php

namespace Database\Seeders;

use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $train = new train();
            $train->Azienda = $faker->Azienda();
            $train->Stazione_di_partenza = $faker-> randomElement(['Roma', 'Parma', 'Milano', 'Napoli', 'Bologna', 'Oblia', 'Ancona']);
            $train->Stazione_di_arrivo = $faker->randomElement(['Riccione', 'Foggia', 'Genova', 'Torino', 'Perugia']);
            $train->Orario_di_partenza = $faker->dateTimeBetween('-1 day', '+1 day');
            $train->Orario_di_arrivo = $faker->dateTimeBetween('+1 day', '+2 days');
            $train->Codice_treno = 'AB' . $faker->randomDigit();
            $train->Numero_carrozze = $faker->randomDigitNot(0);
            $train->In_orario = $faker->randomElement([true, false]);
            dd($train);
            $train->save();
        }
    }
}
