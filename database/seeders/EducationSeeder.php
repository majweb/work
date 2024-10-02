<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('education')->truncate();

        $educations = [
            [
                'id' => 1,
                'name' => json_encode([
                    'pl' => 'Podstawowe',
                    'en' => 'PodstawoweEn'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 2,
                'name' => json_encode([
                    'pl' => 'Średnie',
                    'en' => 'ŚrednieEn'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 3,
                'name' => json_encode([
                    'pl' => 'Średnie techniczne',
                    'en' => 'Średnie techniczneEn'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 4,
                'name' => json_encode([
                    'pl' => 'Zawodowe',
                    'en' => 'ZawodoweEn'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 5,
                'name' => json_encode([
                    'pl' => 'Wyższe',
                    'en' => 'WyższeEn'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];

        DB::table('education')->insert($educations);
    }
}
