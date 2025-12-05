<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Schema::disableForeignKeyConstraints();

            // Wyczyść tabelę partners
            DB::table('partners')->truncate();

            $now = date('Y-m-d H:i:s');

            $partners = [
                [
                    'id' => 1,
                    'name' => 'Fundacja ABC',
                    'link' => 'https://example.com/abc',
                    'active' => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'id' => 2,
                    'name' => 'Fundacja Pomocna Dłoń',
                    'link' => 'https://example.com/pomocna',
                    'active' => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'id' => 3,
                    'name' => 'Hope Relief',
                    'link' => 'https://example.com/hope',
                    'active' => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'id' => 4,
                    'name' => 'Global Aid',
                    'link' => 'https://example.com/aid',
                    'active' => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'id' => 5,
                    'name' => 'Humanity First',
                    'link' => 'https://example.com/hf',
                    'active' => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'id' => 6,
                    'name' => 'Save Children',
                    'link' => 'https://example.com/sc',
                    'active' => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'id' => 7,
                    'name' => 'Bright Future',
                    'link' => 'https://example.com/bf',
                    'active' => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'id' => 8,
                    'name' => 'Strong Together',
                    'link' => 'https://example.com/st',
                    'active' => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'id' => 9,
                    'name' => 'Charity Movement',
                    'link' => 'https://example.com/cm',
                    'active' => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'id' => 10,
                    'name' => 'Better World',
                    'link' => 'https://example.com/bw',
                    'active' => true,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
            ];

            // Wstaw dane
            DB::table('partners')->insert($partners);

            Schema::enableForeignKeyConstraints();

            // Dodaj logo dla każdego partnera
            foreach ($partners as $p) {
                $partner = Partner::find($p['id']);

                if ($partner) {
                    $partner->addMediaFromUrl(
                        'https://picsum.photos/300/150?random=' . $p['id']
                    )->toMediaCollection('partner_logo');
                }
            }
    }
}
