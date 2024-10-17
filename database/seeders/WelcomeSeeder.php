<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class WelcomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('welcomes')->truncate();

        $welcomes = [
            [
                'id' => 1,
                'name' => json_encode([
                    'pl' => 'Certyfikaty branżowe',
                    'en' => 'Certificates'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 2,
                'name' => json_encode([
                    'pl' => 'Studia podyplomowe lub dodatkowe kursy branżowe',
                    'en' => 'Postgraduate studies or additional related courses'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 3,
                'name' => json_encode([
                    'pl' => 'Znajomość drugiego języka obcego',
                    'en' => 'Knowledge of a second foreign language'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => json_encode([
                    'pl' => 'Doświadczenie w pracy na podobnym stanowisku',
                    'en' => 'Experience in a similar role'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'name' => json_encode([
                    'pl' => 'Znajomość systemów i programów branżowych',
                    'en' => 'Familiarity with related to job position systems and programs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 6,
                'name' => json_encode([
                    'pl' => 'Zainteresowanie nowoczesnymi technologiami',
                    'en' => 'Interest in modern technologies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'name' => json_encode([
                    'pl' => 'Znajomość trendów w branży',
                    'en' => 'Knowledge of industry trends'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'name' => json_encode([
                    'pl' => 'Doświadczenie w pracy w zespołach międzynarodowych',
                    'en' => 'Experience working in international teams'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'name' => json_encode([
                    'pl' => 'Doświadczenie w pracy z klientami zagranicznymi',
                    'en' => 'Experience working with foreign clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'name' => json_encode([
                    'pl' => 'Doświadczenie w zarządzaniu zespołem',
                    'en' => 'Team management experience'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11,
                'name' => json_encode([
                    'pl' => 'Znajomość przepisów prawnych z zakresu branży',
                    'en' => 'Knowledge of legal regulations in the industry'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 12,
                'name' => json_encode([
                    'pl' => 'Doświadczenie w raportowaniu',
                    'en' => 'Experience in reporting'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 13,
                'name' => json_encode([
                    'pl' => 'Gotowość do wyjazdów służbowych w różnych lokalizacjach',
                    'en' => 'Willingness to travel for business to various locations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 14,
                'name' => json_encode([
                    'pl' => 'Znajomość rynku',
                    'en' => 'Market knowledge'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        DB::table('welcomes')->insert($welcomes);
    }
}
