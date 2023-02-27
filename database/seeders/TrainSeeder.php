<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 4; $i++) {
            $train = new train();
            $train->Azienda = $faker->word();
            $train->Stazione_di_partenza = $faker->sentence(3);
            $train->Stazione_di_arrivo = $faker->sentence(3);
            $train->Orario_di_partenza = $faker->time();
            $train->Orario_di_arrivo = $faker->time();
            $train->Codice_treno = $faker->ean8();
            $train->Carrozze = $faker->randomDigitNotNull();
            $train->In_orario = $faker->boolean();

            $train->save();
        }
    }
}
