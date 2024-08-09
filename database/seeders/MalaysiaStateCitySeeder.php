<?php

namespace Database\Seeders;

use App\Models\{City, Country, State};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class MalaysiaStateCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('/data/malaysia-states-cities.json'));
        $states = json_decode($json, true);

        $country = Country::firstOrCreate([
            'name' => 'Malaysia',
        ], [
            'name' => 'Malaysia',
        ]);

        foreach ($states as $state => $cities) {
            $state = State::firstOrCreate([
                'name' => $state,
            ], [
                'name' => $state,
                'country_id' => $country->id,
            ]);

            foreach ($cities as $key => $city) {
                City::firstOrCreate([
                    'name' => $city,
                ], [
                    'name' => $city,
                    'state_id' => $state->id,
                ]);
            }
        }
    }
}
