<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class WorkingModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('working_modes')->truncate();

        $modes = [
            [
                'id' => 1,
                'title' => json_encode([
                    'pl' => 'Stacjonarny',
                    'en' => 'Stationary'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 2,
                'title' => json_encode([
                    'pl' => 'Zdalny',
                    'en' => 'Remote'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 3,
                'title' => json_encode([
                    'pl' => 'Hybrydowy',
                    'en' => 'Hybrid'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'title' => json_encode([
                    'pl' => 'Mobilny',
                    'en' => 'Mobile'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        DB::table('working_modes')->insert($modes);
    }
}
