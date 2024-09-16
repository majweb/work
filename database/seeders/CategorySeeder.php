<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('categories')->truncate();

        $categories = [
            ['id' => 1, 'title'=>json_encode([
                'pl'=>'Handlowa',
                'en'=>'HandlowaEn'
            ]),'slug'=>json_encode([
                'pl'=>Str::slug('Handlowa','-'),
                'en'=>Str::slug('HandlowaEn','-')
            ]),'parent_id'=>NULL,'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],

            ['id' => 2, 'title'=>json_encode([
                'pl'=>'Administracyjno-biurowa',
                'en'=>'Administracyjno-biurowaEn'
            ]),'slug'=>json_encode([
                'pl'=>Str::slug('Administracyjno-biurowa','-'),
                'en'=>Str::slug('Administracyjno-biurowaEn','-')
            ]),'parent_id'=>NULL,'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],

            ['id' => 3, 'title'=>json_encode([
                'pl'=>'Finansowo-prawna',
                'en'=>'Finansowo-prawnaEn'
            ]),'slug'=>json_encode([
                'pl'=>Str::slug('Finansowo-prawna','-'),
                'en'=>Str::slug('Finansowo-prawnaEn','-')
            ]),'parent_id'=>NULL,'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],

            ['id' => 4, 'title'=>json_encode([
                'pl'=>'Ochrony i bezpieczeństwa',
                'en'=>'Ochrony i bezpieczeństwaEn'
            ]),'slug'=>json_encode([
                'pl'=>Str::slug('Ochrony i bezpieczeństwa','-'),
                'en'=>Str::slug('Ochrony i bezpieczeństwaEn','-')
            ]),'parent_id'=>NULL,'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 5, 'title'=>json_encode([
                'pl'=>'Kulturalno-społeczna',
                'en'=>'Kulturalno-społecznaEn'
            ]),'slug'=>json_encode([
                'pl'=>Str::slug('Kulturalno-społeczna','-'),
                'en'=>Str::slug('Kulturalno-społecznaEn','-')
            ]),'parent_id'=>NULL,'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 6, 'title'=>json_encode([
                'pl'=>'Edukacyjna',
                'en'=>'EdukacyjnaEn'
            ]),'slug'=>json_encode([
                'pl'=>Str::slug('Edukacyjna','-'),
                'en'=>Str::slug('EdukacyjnaEn','-')
            ]),'parent_id'=>NULL,'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 7, 'title'=>json_encode([
                'pl'=>'Medyczno-opiekuńcza',
                'en'=>'Medyczno-opiekuńczaEn'
            ]),'slug'=>json_encode([
                'pl'=>Str::slug('Medyczno-opiekuńcza','-'),
                'en'=>Str::slug('Medyczno-opiekuńczaEn','-')
            ]),'parent_id'=>NULL,'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 8, 'title'=>json_encode([
                'pl'=>'Biologiczno-chemiczno-geograficzna',
                'en'=>'Biologiczno-chemiczno-geograficznaEn'
            ]),'slug'=>json_encode([
                'pl'=>Str::slug('Biologiczno-chemiczno-geograficzna','-'),
                'en'=>Str::slug('Biologiczno-chemiczno-geograficznaEn','-')
            ]),'parent_id'=>NULL,'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 9, 'title'=>json_encode([
                'pl'=>'Budowlana',
                'en'=>'BudowlanaEn'
            ]),'slug'=>json_encode([
                'pl'=>Str::slug('Budowlana','-'),
                'en'=>Str::slug('BudowlanaEn','-')
            ]),'parent_id'=>NULL,'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 10, 'title'=>json_encode([
                'pl'=>'Elektro-energetyczna',
                'en'=>'Elektro-energetycznaEn'
            ]),'slug'=>json_encode([
                'pl'=>Str::slug('Elektro-energetyczna','-'),
                'en'=>Str::slug('Elektro-energetycznaEn','-')
            ]),'parent_id'=>NULL,'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 11, 'title'=>json_encode([
                'pl'=>'Informatyczna',
                'en'=>'InformatycznaEn'
            ]),'slug'=>json_encode([
                'pl'=>Str::slug('Informatyczna','-'),
                'en'=>Str::slug('InformatycznaEn','-')
            ]),'parent_id'=>NULL,'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 12, 'title'=>json_encode([
                'pl'=>'Mechaniczno-motoryzacyjna',
                'en'=>'Mechaniczno-motoryzacyjnaEn'
            ]),'slug'=>json_encode([
                'pl'=>Str::slug('Mechaniczno-motoryzacyjna','-'),
                'en'=>Str::slug('Mechaniczno-motoryzacyjnaEn','-')
            ]),'parent_id'=>NULL,'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 13, 'title'=>json_encode([
                'pl'=>'TSL (transport-spedycja-logistyka)',
                'en'=>'TSL (transport-spedycja-logistyka)En'
            ]),'slug'=>json_encode([
                'pl'=>Str::slug('TSL (transport-spedycja-logistyka)','-'),
                'en'=>Str::slug('TSL (transport-spedycja-logistyka)En','-')
            ]),'parent_id'=>NULL,'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 14, 'title'=>json_encode([
                'pl'=>'Produkcyjno-przetwórcza',
                'en'=>'Produkcyjno-przetwórczaEn'
            ]),'slug'=>json_encode([
                'pl'=>Str::slug('Produkcyjno-przetwórcza','-'),
                'en'=>Str::slug('Produkcyjno-przetwórczaEn','-')
            ]),'parent_id'=>NULL,'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
            ['id' => 15, 'title'=>json_encode([
                'pl'=>'Spożywcza',
                'en'=>'SpożywczaEn'
            ]),'slug'=>json_encode([
                'pl'=>Str::slug('Spożywcza','-'),
                'en'=>Str::slug('SpożywczaEn','-')
            ]),'parent_id'=>NULL,'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],

            ['id' => 16, 'title'=>json_encode([
                'pl'=>'Rolno-hodowlano-leśna',
                'en'=>'Rolno-hodowlano-leśnaEn'
            ]),'slug'=>json_encode([
                'pl'=>Str::slug('Rolno-hodowlano-leśna','-'),
                'en'=>Str::slug('Rolno-hodowlano-leśnaEn','-')
            ]),'parent_id'=>NULL,'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],

            ['id' => 17, 'title'=>json_encode([
                'pl'=>'Gastronomiczno-turystyczna',
                'en'=>'Gastronomiczno-turystycznaEn'
            ]),'slug'=>json_encode([
                'pl'=>Str::slug('Gastronomiczno-turystyczna','-'),
                'en'=>Str::slug('Gastronomiczno-turystycznaEn','-')
            ]),'parent_id'=>NULL,'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],

            ['id' => 18, 'title'=>json_encode([
                'pl'=>'Usługowa',
                'en'=>'UsługowaEn'
            ]),'slug'=>json_encode([
                'pl'=>Str::slug('Usługowa','-'),
                'en'=>Str::slug('UsługowaEn','-')
            ]),'parent_id'=>NULL,'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],

            ['id' => 19, 'title'=>json_encode([
                'pl'=>' kierownicy sprzedaży',
                'en'=>' kierownicy sprzedażyEn'
            ]),'slug'=>json_encode([
                'pl'=>Str::slug(' kierownicy sprzedaży','-'),
                'en'=>Str::slug(' kierownicy sprzedażyEn','-')
            ]),'parent_id'=>1,'created_at' => date('Y-m-d H:i:s'), 'updated_at' =>date('Y-m-d H:i:s')],
        ];

        DB::table('categories')->insert($categories);

        Schema::enableForeignKeyConstraints();
    }
}
