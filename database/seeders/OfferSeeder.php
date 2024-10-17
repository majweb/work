<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('offers')->truncate();

        $offers = [
            [
                'id' => 1,
                'name' => json_encode([
                    'pl' => 'Umowa o pracę',
                    'en' => 'Employment contract'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 2,
                'name' => json_encode([
                    'pl' => 'Długoterminowa współpraca',
                    'en' => 'Long-term cooperation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 3,
                'name' => json_encode([
                    'pl' => 'Brak okresu próbnego',
                    'en' => 'No trial period'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => json_encode([
                    'pl' => 'System premiowy',
                    'en' => 'Bonus system'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'name' => json_encode([
                    'pl' => 'Szkolenia',
                    'en' => 'Training opportunities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 6,
                'name' => json_encode([
                    'pl' => 'Możliwość awansu zawodowego',
                    'en' => 'Carrer development opportunities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'name' => json_encode([
                    'pl' => 'Elastyczny czas pracy',
                    'en' => 'Flexible working hours'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'name' => json_encode([
                    'pl' => 'Możliwość pracy zdalnej',
                    'en' => 'Home office possibilities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'name' => json_encode([
                    'pl' => 'Możliwość pracy zdalnej',
                    'en' => 'Home office possibilities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'name' => json_encode([
                    'pl' => 'Prywatna opieka medyczna',
                    'en' => 'Private medical healthcare'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11,
                'name' => json_encode([
                    'pl' => 'Karta sportowa',
                    'en' => 'Sports card'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 12,
                'name' => json_encode([
                    'pl' => 'Dofinansowanie do posiłków',
                    'en' => 'Meal cards/bonus'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 13,
                'name' => json_encode([
                    'pl' => 'Biuro w centrum miasta',
                    'en' => 'Office in the city center'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 14,
                'name' => json_encode([
                    'pl' => 'Parking dla pracowników',
                    'en' => 'Employee parking'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 15,
                'name' => json_encode([
                    'pl' => 'Samochód służbowy',
                    'en' => 'Company car'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 16,
                'name' => json_encode([
                    'pl' => 'Dodatkowe ubezpieczenie',
                    'en' => 'Additional insurance'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 17,
                'name' => json_encode([
                    'pl' => 'Zniżka na zakupy',
                    'en' => 'Employee discounts'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 18,
                'name' => json_encode([
                    'pl' => 'Wydarzenia integracyjne',
                    'en' => 'Company events'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 19,
                'name' => json_encode([
                    'pl' => 'Kawa/herbata',
                    'en' => 'Coffee/tea'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20,
                'name' => json_encode([
                    'pl' => 'Owoce',
                    'en' => 'Fruits'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21,
                'name' => json_encode([
                    'pl' => "Brak dress code'u",
                    'en' => 'No dress code'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 22,
                'name' => json_encode([
                    'pl' => "Nagrody pracownicze",
                    'en' => 'Employee awards'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 23,
                'name' => json_encode([
                    'pl' => "Dofinansowanie do transportu",
                    'en' => 'Transportation subsidies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        DB::table('offers')->insert($offers);
    }
}
