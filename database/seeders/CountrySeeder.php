<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('countries')->truncate();

        $countries = [
            [
                'name' => json_encode([
                    'pl' => 'Algieria',
                    'en' => 'Algieria'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Angola',
                    'en' => 'Angola'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Benin',
                    'en' => 'Benin'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Botswana',
                    'en' => 'Botswana'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Burkina Faso',
                    'en' => 'Burkina Faso'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Burundi',
                    'en' => 'Burundi'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Czad',
                    'en' => 'Czad'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'DRK',
                    'en' => 'DRK'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Dżibuti',
                    'en' => 'Dżibuti'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Egipt',
                    'en' => 'Egipt'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Erytrea',
                    'en' => 'Erytrea'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Etiopia',
                    'en' => 'Etiopia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Gabon',
                    'en' => 'Gabon'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Gambia',
                    'en' => 'Gambia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Ghana',
                    'en' => 'Ghana'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Gwinea',
                    'en' => 'Gwinea'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Gwinea Bissau',
                    'en' => 'Gwinea Bissau'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Gwinea Równikowa',
                    'en' => 'Gwinea Równikowa'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Kamerun',
                    'en' => 'Kamerun'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Kenia',
                    'en' => 'Kenia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Komory',
                    'en' => 'Komory'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Kongo',
                    'en' => 'Kongo'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Lesotho',
                    'en' => 'Lesotho'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Liberia',
                    'en' => 'Liberia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Libia',
                    'en' => 'Libia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Madagaskar',
                    'en' => 'Madagaskar'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Malawi',
                    'en' => 'Malawi'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Mali',
                    'en' => 'Mali'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Maroko',
                    'en' => 'Maroko'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Mauretania',
                    'en' => 'Mauretania'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Mauritius',
                    'en' => 'Mauritius'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Mozambik',
                    'en' => 'Mozambik'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Namibia',
                    'en' => 'Namibia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Niger',
                    'en' => 'Niger'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Nigeria',
                    'en' => 'Nigeria'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Republika Południowej Afryki',
                    'en' => 'Republika Południowej Afryki'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Republika Środkowoafrykańska',
                    'en' => 'Republika Środkowoafrykańska'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Republika Zielonego Przylądka',
                    'en' => 'Republika Zielonego Przylądka'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Rwanda',
                    'en' => 'Rwanda'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Senegal',
                    'en' => 'Senegal'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Seszele',
                    'en' => 'Seszele'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Sierra Leone',
                    'en' => 'Sierra Leone'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Somalia',
                    'en' => 'Somalia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Suazi',
                    'en' => 'Suazi'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Sudan',
                    'en' => 'Sudan'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Sudan Południowy',
                    'en' => 'Sudan Południowy'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Tanzaniay',
                    'en' => 'Tanzaniay'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Togo',
                    'en' => 'Togo'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Tunezja',
                    'en' => 'Tunezja'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Uganda',
                    'en' => 'Uganda'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Wybrzeże Kości Słoniowej',
                    'en' => 'Wybrzeże Kości Słoniowej'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Wyspy świętego Tomasza i Książęca',
                    'en' => 'Wyspy świętego Tomasza i Książęca'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Zambia',
                    'en' => 'Zambia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Zimbabwe',
                    'en' => 'Zimbabwe'
                ]),
                'continent' => json_encode([
                    'pl' => 'Afryka',
                    'en' => 'Africa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Argentyna',
                    'en' => 'Argentyna'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Południowa',
                    'en' => 'Ameryka Południowa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Boliwia',
                    'en' => 'Boliwia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Południowa',
                    'en' => 'Ameryka Południowa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Brazylia',
                    'en' => 'Brazylia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Południowa',
                    'en' => 'Ameryka Południowa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Chile',
                    'en' => 'Chile'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Południowa',
                    'en' => 'Ameryka Południowa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Ekwador',
                    'en' => 'Ekwador'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Południowa',
                    'en' => 'Ameryka Południowa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Gujana',
                    'en' => 'Gujana'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Południowa',
                    'en' => 'Ameryka Południowa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Kolumbia',
                    'en' => 'Kolumbia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Południowa',
                    'en' => 'Ameryka Południowa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Paragwaj',
                    'en' => 'Paragwaj'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Południowa',
                    'en' => 'Ameryka Południowa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Peru',
                    'en' => 'Peru'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Południowa',
                    'en' => 'Ameryka Południowa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Surinam',
                    'en' => 'Surinam'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Południowa',
                    'en' => 'Ameryka Południowa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Trynidad i Tobago',
                    'en' => 'Trynidad i Tobago'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Południowa',
                    'en' => 'Ameryka Południowa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Urugwaj',
                    'en' => 'Urugwaj'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Południowa',
                    'en' => 'Ameryka Południowa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Wenezuela',
                    'en' => 'Wenezuela'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Południowa',
                    'en' => 'Ameryka Południowa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Afganistan',
                    'en' => 'Afganistan'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Arabia Saudyjska',
                    'en' => 'Arabia Saudyjska'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Armenia',
                    'en' => 'Armenia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Azerbejdżan',
                    'en' => 'Azerbejdżan'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Bahrajn',
                    'en' => 'Bahrajn'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Bangladesz',
                    'en' => 'Bangladesz'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Bhutan',
                    'en' => 'Bhutan'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Brunei',
                    'en' => 'Brunei'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Chiny',
                    'en' => 'Chiny'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Filipiny',
                    'en' => 'Filipiny'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Gruzja',
                    'en' => 'Gruzja'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Indie',
                    'en' => 'Indie'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Indonezja',
                    'en' => 'Indonezja'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Irak',
                    'en' => 'Irak'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Iran',
                    'en' => 'Iran'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Izrael',
                    'en' => 'Izrael'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Japonia',
                    'en' => 'Japonia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Jemen',
                    'en' => 'Jemen'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Jordania',
                    'en' => 'Jordania'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Kambodża',
                    'en' => 'Kambodża'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Katar',
                    'en' => 'Katar'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Kirgistan',
                    'en' => 'Kirgistan'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Korea Południowa',
                    'en' => 'Korea Południowa'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Korea Północna',
                    'en' => 'Korea Północna'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Kuwejt',
                    'en' => 'Kuwejt'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Laos',
                    'en' => 'Laos'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Liban',
                    'en' => 'Liban'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Malediwy',
                    'en' => 'Malediwy'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Malezja',
                    'en' => 'Malezja'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Mjanma',
                    'en' => 'Mjanma'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Mongolia',
                    'en' => 'Mongolia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Nepal',
                    'en' => 'Nepal'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Oman',
                    'en' => 'Oman'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Pakistan',
                    'en' => 'Pakistan'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Singapur',
                    'en' => 'Singapur'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Sri Lanka',
                    'en' => 'Sri Lanka'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Syria',
                    'en' => 'Syria'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Tadżykistan',
                    'en' => 'Tadżykistan'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Tajlandia',
                    'en' => 'Tajlandia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Timor Wschodni',
                    'en' => 'Timor Wschodni'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Turkmenistan',
                    'en' => 'Turkmenistan'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Uzbekistan',
                    'en' => 'Uzbekistan'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Wietnam',
                    'en' => 'Wietnam'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Zjednoczone Emiraty Arabskie',
                    'en' => 'Zjednoczone Emiraty Arabskie'
                ]),
                'continent' => json_encode([
                    'pl' => 'Azja',
                    'en' => 'Azja'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Antigua i Barbuda',
                    'en' => 'Antigua i Barbuda'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Bahamy',
                    'en' => 'Bahamy'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Barbados',
                    'en' => 'Barbados'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Belize',
                    'en' => 'Belize'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Dominika',
                    'en' => 'Dominika'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Dominikana',
                    'en' => 'Dominikana'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Grenada',
                    'en' => 'Grenada'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Gwatemala',
                    'en' => 'Gwatemala'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Haiti',
                    'en' => 'Haiti'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Honduras',
                    'en' => 'Honduras'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Jamajka',
                    'en' => 'Jamajka'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Kanada',
                    'en' => 'Kanada'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Kostaryka',
                    'en' => 'Kostaryka'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Kuba',
                    'en' => 'Kuba'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Meksyk',
                    'en' => 'Meksyk'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Nikaragua',
                    'en' => 'Nikaragua'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Panama',
                    'en' => 'Panama'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Saint Kitts i Nevis',
                    'en' => 'Saint Kitts i Nevis'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Saint Lucia',
                    'en' => 'Saint Lucia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Saint Vincent i Grenadyny',
                    'en' => 'Saint Vincent i Grenadyny'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Salwador',
                    'en' => 'Salwador'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Stany Zjednoczone',
                    'en' => 'Stany Zjednoczone'
                ]),
                'continent' => json_encode([
                    'pl' => 'Ameryka Północna',
                    'en' => 'Ameryka Północna'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Albania',
                    'en' => 'Albania'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Andora',
                    'en' => 'Andora'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Austria',
                    'en' => 'Austria'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Belgia',
                    'en' => 'Belgia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Białoruś',
                    'en' => 'Białoruś'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Bośnia i Hercegowina',
                    'en' => 'Bośnia i Hercegowina'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Bułgaria',
                    'en' => 'Bułgaria'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Chorwacja',
                    'en' => 'Chorwacja'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Cypr',
                    'en' => 'Cypr'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Czarnogóra',
                    'en' => 'Czarnogóra'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Czechy',
                    'en' => 'Czechy'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Dania',
                    'en' => 'Dania'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Estonia',
                    'en' => 'Estonia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Finlandia',
                    'en' => 'Finlandia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Francja',
                    'en' => 'Francja'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Grecja',
                    'en' => 'Grecja'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Hiszpania',
                    'en' => 'Hiszpania'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Holandia',
                    'en' => 'Holandia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Irlandia',
                    'en' => 'Irlandia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Islandia',
                    'en' => 'Islandia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Kazachstan',
                    'en' => 'Kazachstan'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Liechtenstein',
                    'en' => 'Liechtenstein'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Litwa',
                    'en' => 'Litwa'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Luksemburg',
                    'en' => 'Luksemburg'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Łotwa',
                    'en' => 'Łotwa'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Macedonia',
                    'en' => 'Macedonia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Malta',
                    'en' => 'Malta'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Mołdawia',
                    'en' => 'Mołdawia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Monako',
                    'en' => 'Monako'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Niemcy',
                    'en' => 'Niemcy'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Norwegia',
                    'en' => 'Norwegia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Polska',
                    'en' => 'Polska'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Portugalia',
                    'en' => 'Portugalia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Rosja',
                    'en' => 'Rosja'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Rumunia',
                    'en' => 'Rumunia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'San Marino',
                    'en' => 'San Marino'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Serbia',
                    'en' => 'Serbia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Słowacja',
                    'en' => 'Słowacja'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Słowenia',
                    'en' => 'Słowenia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Szwajcaria',
                    'en' => 'Szwajcaria'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Szwecja',
                    'en' => 'Szwecja'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Turcja',
                    'en' => 'Turcja'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Ukraina',
                    'en' => 'Ukraina'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Watykan',
                    'en' => 'Watykan'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Węgry',
                    'en' => 'Węgry'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Wielka Brytania',
                    'en' => 'Wielka Brytania'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Włochy',
                    'en' => 'Włochy'
                ]),
                'continent' => json_encode([
                    'pl' => 'Europa',
                    'en' => 'Europa'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Australia',
                    'en' => 'Australia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Australia i Oceania',
                    'en' => 'Australia i Oceania'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Fidżi',
                    'en' => 'Fidżi'
                ]),
                'continent' => json_encode([
                    'pl' => 'Australia i Oceania',
                    'en' => 'Australia i Oceania'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Kiribati',
                    'en' => 'Kiribati'
                ]),
                'continent' => json_encode([
                    'pl' => 'Australia i Oceania',
                    'en' => 'Australia i Oceania'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Mikronezja',
                    'en' => 'Mikronezja'
                ]),
                'continent' => json_encode([
                    'pl' => 'Australia i Oceania',
                    'en' => 'Australia i Oceania'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Nauru',
                    'en' => 'Nauru'
                ]),
                'continent' => json_encode([
                    'pl' => 'Australia i Oceania',
                    'en' => 'Australia i Oceania'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Nowa Zelandia',
                    'en' => 'Nowa Zelandia'
                ]),
                'continent' => json_encode([
                    'pl' => 'Australia i Oceania',
                    'en' => 'Australia i Oceania'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Palau',
                    'en' => 'Palau'
                ]),
                'continent' => json_encode([
                    'pl' => 'Australia i Oceania',
                    'en' => 'Australia i Oceania'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Papua Nowa-Gwinea',
                    'en' => 'Papua Nowa-Gwinea'
                ]),
                'continent' => json_encode([
                    'pl' => 'Australia i Oceania',
                    'en' => 'Australia i Oceania'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Samoa',
                    'en' => 'Samoa'
                ]),
                'continent' => json_encode([
                    'pl' => 'Australia i Oceania',
                    'en' => 'Australia i Oceania'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Tonga',
                    'en' => 'Tonga'
                ]),
                'continent' => json_encode([
                    'pl' => 'Australia i Oceania',
                    'en' => 'Australia i Oceania'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Tuvalu',
                    'en' => 'Tuvalu'
                ]),
                'continent' => json_encode([
                    'pl' => 'Australia i Oceania',
                    'en' => 'Australia i Oceania'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Vanuatu',
                    'en' => 'Vanuatu'
                ]),
                'continent' => json_encode([
                    'pl' => 'Australia i Oceania',
                    'en' => 'Australia i Oceania'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Wyspy Marshalla',
                    'en' => 'Wyspy Marshalla'
                ]),
                'continent' => json_encode([
                    'pl' => 'Australia i Oceania',
                    'en' => 'Australia i Oceania'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => json_encode([
                    'pl' => 'Wyspy Salomona',
                    'en' => 'Wyspy Salomona'
                ]),
                'continent' => json_encode([
                    'pl' => 'Australia i Oceania',
                    'en' => 'Australia i Oceania'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];

        DB::table('countries')->insert($countries);

    }
}
