<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Holiday;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HolidaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('holidays')->truncate();

        $countries = Country::all()->toArray();

        foreach ($countries as $country) {
            // dodaj święta dla każdego kraju
            if ($country['countryCode'] === 'pl') {
                Holiday::create([
                    'country_id' => $country['id'],
                    'name' => 'Independence Day',
                    'date' => '2025-11-11',
                    'special_image' => 'countries/pl_independence.png',
                ]);
            }

            if ($country['countryCode'] === 'us') {
                Holiday::create([
                    'country_id' => $country['id'],
                    'name' => 'Independence Day',
                    'date' => '2025-07-04',
                    'special_image' => 'countries/us_independence.png',
                ]);
            }
        }
    }
}
