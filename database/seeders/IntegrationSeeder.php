<?php

namespace Database\Seeders;

use App\Models\Integration;
use Illuminate\Database\Seeder;

class IntegrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Integration::firstOrCreate(['name' => 'gtm_head'], [
            'value' => null,
            'active' => true,
        ]);

        Integration::firstOrCreate(['name' => 'gtm_body'], [
            'value' => null,
            'active' => true,
        ]);
    }
}
