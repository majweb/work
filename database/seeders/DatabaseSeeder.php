<?php

namespace Database\Seeders;

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
            CategorySeeder::class,

            // Detale
            DetailProjectHandelSeeder::class,
            DetailProjectAdministacjaSeeder::class,
            DetailProjectAdministacja2Seeder::class,
            DetailProjectAdministacja3Seeder::class,
            DetailProjectFinansowaPrawnaSeeder::class,
            DetailProjectOchronaiBezpieczenstwoSeeder::class,
            DetailProjectKulturaSeeder::class,
            DetailProjectEdukacjaSeeder::class,
            DetailProjectLekarzeSeeder::class,
            DetailProjectbiologicznochemicznogeograficznaSeeder::class,
            DetailProjectbudowlanaSeeder::class,
            DetailProjectelektroSeeder::class,
            DetailProjectinformatycznaSeeder::class,
            DetailProjectMechanicySeeder::class,
            DetailProjectTSLSeeder::class,
            DetailProjectProdukcjaSeeder::class,
            DetailProjectSpozywczaSeeder::class,
            DetailProjectRolnictwoSeeder::class,
            DetailProjectGastroSeeder::class,
            DetailProjectUslugaSeeder::class,
            DetailProjectFinansowaPrawna2Seeder::class,
            DetailProjectOchronaiBezpieczenstwo2Seeder::class,
            DetailProjectKultura2Seeder::class,
            DetailProjectEdukacja2Seeder::class,
            DetailProjectbiologicznochemicznogeograficzna2Seeder::class,
            DetailProjectbudowlana2Seeder::class,
            DetailProjectbudowlana3Seeder::class,
            DetailProjectelektro2Seeder::class,
            DetailProjectinformatyczna2Seeder::class,
            DetailProjectMechanicy2Seeder::class,
            DetailProjectTSL2Seeder::class,
            DetailProjectProdukcja2Seeder::class,
            DetailProjectProdukcja3Seeder::class,
            DetailProjectProdukcja4Seeder::class,
            DetailProjectSpozywcza2Seeder::class,
            DetailProjectGastro2Seeder::class,
            DetailProjectUsluga2Seeder::class,
            DetailProjectRolnictwo2Seeder::class
//             Detale
            ]);

    }
}
