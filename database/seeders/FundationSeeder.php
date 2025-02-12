<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class FundationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();

        DB::table('foundations')->truncate();

        $foundations = [
            [
                'id' => 1,
                'country' => 'pl',
                'name' => 'Fundacja Dzieciom Zdążyć z Pomocą',
                'iban' => 'AA012012321',
                'swift' => '012012321',
                'krs' => '0000121052',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'country' => 'pl',
                'name' => 'Fundacja Otwarty Dialog',
                'iban' => 'AA012023432',
                'swift' => '0120234324323',
                'krs' => '03243000121052',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        DB::table('foundations')->insert($foundations);
    }
}
