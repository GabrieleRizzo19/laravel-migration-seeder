<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for($i=0 ; $i< 5; $i++){

            $newTrain = new Train();
            $newTrain->agency = $faker->word();
            $newTrain->departure_station = $faker->word();
            $newTrain->arrival_station = $faker->word();
            $newTrain->departure_time = "$faker->date $faker->time";
            $newTrain->arrival_time = "$faker->date $faker->time";
            $newTrain->train_code = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $newTrain->carriages_number = $faker->numberBetween(0,20);
            $newTrain->in_time = $faker->numberBetween(0,1);
            $newTrain->deleted = $faker->numberBetween(0,1);
            $newTrain->save();

        }
    }
}
