<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 12; $i++) {
            $train = new Train();
            $train->company = $faker->randomElement(['Trenitalia', 'Orione', 'ATAC', 'Trenord']);
            $train->departure_station = $faker->randomElement(['Laurentina', 'Firenze', 'Valmontone']);
            $train->arrival_station = $faker->randomElement(['Roma Termini', 'Colleferro', 'Aprilia']);
            $train->departure_time = $faker->dateTimeThisMonth();
            $train->arrival_time = $faker->dateTimeThisMonth();
            $train->train_id = $faker->bothify('??####????????????######');
            $train->wagons_number = $faker->randomDigit();
            $train->is_in_time = $faker->randomElement([true, false]);
            $train->is_cancelled = $faker->randomElement([true, false]);
            $train->save();
        }
    }
}
