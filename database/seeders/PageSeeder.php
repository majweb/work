<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('pages')->truncate();

        Page::create([
            'title' => [
                'pl' => 'Strona główna',
                'en' => 'Front page'
            ],
            'image' => [
                'pl' => 'pages/front_fb.jpg',
                'en' => 'pages/front_fb.jpg'
            ],
            'description' => [
                'pl' => 'Opis po polsku',
                'en' => 'Description'
            ],
            'keywords' => [
                'pl' => 'słowa kluczowe',
                'en' => 'Keywords'
            ],
        ]);
    }
}
