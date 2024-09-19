<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Title;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('titles')->truncate();

        $titles = [
            [
                'id' => 1,
                'title' => json_encode([
                    'pl' => 'Pierwszy tytuł',
                    'en' => 'First line'
                ]),
                'category_id' => 21,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 2,
                'title' => json_encode([
                    'pl' => 'Drugi tytuł',
                    'en' => 'Second line'
                ]),
                'category_id' => 21,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 3,
                'title' => json_encode([
                    'pl' => 'Trzeci tytuł',
                    'en' => 'Third line'
                ]),
                'category_id' => 21,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];

        DB::table('titles')->insert($titles);
    }
}
