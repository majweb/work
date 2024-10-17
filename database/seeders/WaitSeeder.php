<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class WaitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('waits')->truncate();

        $waits = [
            [
                'id' => 1,
                'name' => json_encode([
                    'pl' => 'Umiejętności komunikacyjne',
                    'en' => 'Strong communication skills'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 2,
                'name' => json_encode([
                    'pl' => 'Umiejętność pracy w zespole',
                    'en' => 'Teamwork abilities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 3,
                'name' => json_encode([
                    'pl' => 'Wykształcenie wyższe związane z branżą',
                    'en' => 'Related higher education'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => json_encode([
                    'pl' => 'Wykształcenie średnie związane z branżą',
                    'en' => 'Related secondary education'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'name' => json_encode([
                    'pl' => 'Minimum 2 lata doświadczenia na podobnym stanowisku',
                    'en' => 'Minimum of 2 years of experience in a similar position'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 6,
                'name' => json_encode([
                    'pl' => 'Umiejętność pracy pod presją czasu',
                    'en' => 'Ability to work under pressure'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 7,
                'name' => json_encode([
                    'pl' => 'Dobra organizacja własnej pracy',
                    'en' => 'Good self-organization'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 8,
                'name' => json_encode([
                    'pl' => 'Umiejętność efektywnego zarządzania czasem',
                    'en' => 'Effective time management skills'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 9,
                'name' => json_encode([
                    'pl' => 'Chęć rozwoju',
                    'en' => 'Willingness to develop'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 10,
                'name' => json_encode([
                    'pl' => 'Dobra znajomość pakietu MS Office',
                    'en' => 'Good knowledge of MS Office'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 11,
                'name' => json_encode([
                    'pl' => 'Znajomość języka angielskiego',
                    'en' => 'Proficiency in English'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 12,
                'name' => json_encode([
                    'pl' => 'Znajomość innego języka obcego',
                    'en' => 'Knowledge of another foreign language'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 13,
                'name' => json_encode([
                    'pl' => 'Samodzielność w rozwiązywaniu problemów',
                    'en' => 'Independence in problem-solving'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 14,
                'name' => json_encode([
                    'pl' => 'Zaangażowanie',
                    'en' => 'Commitment'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 15,
                'name' => json_encode([
                    'pl' => 'Elastyczność w podejściu do zadań',
                    'en' => 'Flexibility in task approach'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 16,
                'name' => json_encode([
                    'pl' => 'Dbałość o szczegóły',
                    'en' => 'Attention to detail'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],[
                'id' => 17,
                'name' => json_encode([
                    'pl' => 'Dokładność w wykonywanej pracy',
                    'en' => 'Precision in work execution'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 18,
                'name' => json_encode([
                    'pl' => 'Kreatywność',
                    'en' => 'Creativity'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 19,
                'name' => json_encode([
                    'pl' => 'Prawo jazdy kat. B',
                    'en' => 'Category B driving license'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20,
                'name' => json_encode([
                    'pl' => 'Umiejętności analityczne',
                    'en' => 'Analytical skills'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21,
                'name' => json_encode([
                    'pl' => 'Wszechstronność',
                    'en' => 'Multi skilled'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 22,
                'name' => json_encode([
                    'pl' => 'Zdolność do szybkiego uczenia się',
                    'en' => 'Ability to learn quickly'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 23,
                'name' => json_encode([
                    'pl' => 'Znajomość BHP',
                    'en' => 'Knowledge of health and safety regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 24,
                'name' => json_encode([
                    'pl' => 'Zdolności prezencyjne',
                    'en' => 'Presentation skills'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 25,
                'name' => json_encode([
                    'pl' => 'Umiejętność negocjacji',
                    'en' => 'Negotiation skills'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 26,
                'name' => json_encode([
                    'pl' => 'Zdolność do pracy w systemie zmianowym',
                    'en' => 'Willingness to work in shifts'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 27,
                'name' => json_encode([
                    'pl' => 'Umiejętność obsługi programów AI',
                    'en' => 'AI software proficiency'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 28,
                'name' => json_encode([
                    'pl' => 'Umiejętności interpersonalne',
                    'en' => 'Interpersonal skills'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

        ];
        DB::table('waits')->insert($waits);
    }
}
