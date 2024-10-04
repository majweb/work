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
                    'en' => 'Algeria'
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
                    'en' => 'Chad'
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
                    'en' => 'Djibouti'
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
                    'en' => 'Egypt'
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
                    'en' => 'Eritrea'
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
                    'en' => 'Ethiopia'
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
                    'en' => 'Guinea'
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
                    'en' => 'Guinea Bissau'
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
                    'en' => 'Equatorial Guinea'
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
                    'en' => 'Cameroon'
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
                    'en' => 'Kenya'
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
                    'en' => 'Comoros'
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
                    'en' => 'Congo'
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
                    'en' => 'Libyan Arab Jamahiriya'
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
                    'en' => 'Madagascar'
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
                    'en' => 'Morocco'
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
                    'en' => 'Mauritania'
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
                    'en' => 'Mozambique'
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
                    'en' => 'South Africa Republic'
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
                    'en' => 'Central African Republic'
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
                    'en' => 'Cape Verde'
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
                    'en' => 'Seychelles'
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
                    'en' => 'Swaziland'
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
                    'en' => 'South Sudan'
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
                    'pl' => 'Tanzania',
                    'en' => 'Tanzania'
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
                    'en' => 'Tunisia'
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
                    'en' => 'Cote D’Ivoire'
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
                    'en' => 'Sao Tome and Principe'
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
                    'en' => 'Argentina'
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
                    'en' => 'Bolivia'
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
                    'en' => 'Brazil'
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
                    'en' => 'Ecuador'
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
                    'en' => 'Guyana'
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
                    'en' => 'Colombia'
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
                    'en' => 'Paraguay'
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
                    'en' => 'Suriname'
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
                    'en' => 'Trinidad and Tobago'
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
                    'en' => 'Uruguay'
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
                    'en' => 'Venezuela'
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
                    'en' => 'Afghanistan'
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
                    'en' => 'Saudi Arabia'
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
                    'en' => 'Azerbaijan'
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
                    'en' => 'Bahrain'
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
                    'en' => 'Bangladesh'
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
                    'en' => 'China'
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
                    'en' => 'Philippines'
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
                    'en' => 'Georgia'
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
                    'en' => 'India'
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
                    'en' => 'Indonesia'
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
                    'en' => 'Iraq'
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
                    'en' => 'Israel'
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
                    'en' => 'Japan'
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
                    'en' => 'Yemen'
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
                    'en' => 'Jordan'
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
                    'en' => 'Cambodia'
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
                    'en' => 'Qatar'
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
                    'en' => 'Kyrgyztan'
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
                    'en' => 'South Korea'
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
                    'en' => 'North Korea'
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
                    'en' => 'Kuwait'
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
                    'en' => 'Lebanon'
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
                    'en' => 'Maldives'
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
                    'en' => 'Malaysia'
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
                    'en' => 'Singapore'
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
                    'en' => 'Syrian Arab Republic'
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
                    'en' => 'Tajikistan'
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
                    'en' => 'Thailand'
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
                    'en' => 'Timor Leste'
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
                    'en' => 'Viet - Nam'
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
                    'en' => 'United Arab Emirates'
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
                    'en' => 'Antigua and Barbuda'
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
                    'en' => 'Bahamas'
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
                    'en' => 'Dominica'
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
                    'en' => 'Dominican Republic'
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
                    'en' => 'Guatemala'
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
                    'en' => 'Jamaica'
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
                    'en' => 'Canada'
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
                    'en' => 'Costa Rica'
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
                    'en' => 'Cuba'
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
                    'en' => 'Mexico'
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
                    'en' => 'Nicaragua'
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
                    'en' => 'EI Salvador'
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
                    'en' => 'United States of America'
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
                    'en' => 'Andorra'
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
                    'en' => 'Belgium'
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
                    'en' => 'Belarus'
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
                    'en' => 'Bosnia and Herzegovina'
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
                    'en' => 'Bulgaria'
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
                    'en' => 'Croatia'
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
                    'en' => 'Cyprus'
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
                    'en' => 'Montenegro'
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
                    'en' => 'Czechia'
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
                    'en' => 'Denmark'
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
                    'en' => 'Finland'
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
                    'en' => 'France'
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
                    'en' => 'Greece'
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
                    'en' => 'Spain'
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
                    'en' => 'Netherlands'
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
                    'en' => 'Ireland'
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
                    'en' => 'Island'
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
                    'en' => 'Kazakhstan'
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
                    'en' => 'Lithuania'
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
                    'en' => 'Luxembourg'
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
                    'en' => 'Latvia'
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
                    'en' => 'Moldova'
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
                    'en' => 'Germany'
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
                    'en' => 'Norway'
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
                    'en' => 'Poland'
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
                    'en' => 'Portugal'
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
                    'en' => 'Russian Federation'
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
                    'en' => 'Romania'
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
                    'en' => 'Slovakia'
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
                    'en' => 'Slovenia'
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
                    'en' => 'Switzerland'
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
                    'en' => 'Sweden'
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
                    'en' => 'Turkey'
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
                    'en' => 'Ukraine'
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
                    'en' => 'Vatican City State'
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
                    'en' => 'Hungary'
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
                    'en' => 'United Kingdom'
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
                    'en' => 'Italy'
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
                    'en' => 'Fiji'
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
                    'en' => 'Micronesia'
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
                    'en' => 'New Zealand'
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
                    'en' => 'Papua New Guinea'
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
                    'en' => 'Marshall Islands'
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
                    'en' => 'Solomon Islands'
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
