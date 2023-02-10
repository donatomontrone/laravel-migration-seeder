<?php

namespace Database\Seeders;

use App\Models\Train;
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
        /**
         * 
            $table->string('company', 20);
            $table->string('departure_station', 30);
            $table->string('arrival_station', 30);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code', 12);
            $table->tinyInteger('carriages_number');
            $table->boolean('is_on_time');
            $table->boolean('is_deleted');
         * 
         */

        for ($i=0; $i < 20 ; $i++) { 
            $newTrainItem = new Train();
            $newTrainItem->company = $faker->randomElements(['Trenitalia', 'Italo', 'RailOne', 'CapTrain', 'GT Rail']);
            $newTrainItem->departure_station = $faker->randomElements(['Milan', 'Rome', 'Bari', 'Geneva', 'Zurich', 'London', 'Berlin', 'Valencia', 'Madrid', 'Amsterdam', 'Rotterdam', 'Paris', 'Nice', 'Lione', 'Budapest']);
            $newTrainItem->arrival_station = $faker->randomElements(['Milan', 'Rome', 'Bari', 'Geneva', 'Zurich', 'London', 'Berlin', 'Valencia', 'Madrid', 'Amsterdam', 'Rotterdam', 'Paris', 'Nice', 'Lione', 'Budapest']);
            $newTrainItem->departure_time = $faker->time();
            $newTrainItem->arrival_time = $faker->time();
            $newTrainItem->train_code = $faker->regexify('[A-Z]{8}[0-4]{4}');
            $newTrainItem->carriages_number = $faker->randomNumber(1, true);
            $newTrainItem->is_on_time = $faker->boolean();
            $newTrainItem->is_deleted = $faker->boolean(20);
            $newTrainItem->save();
        }
    }
}
