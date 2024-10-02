<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            ProductSeeder::class,
            PageSeeder::class,
            TitleSeeder::class,
            WorkingModeSeeder::class,
            CountrySeeder::class,
            WorkingPlaceSeeder::class,
            TypeOfContractSeeder::class,
            WorkLoadSeeder::class,
            PayoutModeSeeder::class,
            PaySystemSeeder::class,
            DaySeeder::class,
            ShiftWorkSeeder::class,
            OfferSeeder::class,
            WaitSeeder::class,
            ExperienceSeeder::class,
            WelcomeSeeder::class,
            EducationSeeder::class,
        ]);
    }
}
