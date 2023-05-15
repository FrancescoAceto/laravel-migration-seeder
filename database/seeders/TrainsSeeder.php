<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newTrain = [
            'company' => 'Trenitalia',
            'departure_station' => 'Milano',
            'arrival_station' => 'Reggio Calabria',
            'is_on_time' => true,
        ];

        $train = new Train();

        $train->company = $newTrain['company'];
        $train->departure_staion = $newTrain['departure_station'];
        $train->arrival_station = $newTrain['arrival_station'];
        $train->is_on_time = $newTrain['is_on_time'];

        $train->save();

    }
}
