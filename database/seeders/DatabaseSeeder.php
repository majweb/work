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
        $this->call(class: [
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
            FundationSeeder::class,
            AgreementSeeder::class,
            LevelEducationSeeder::class,
            CvTypeSeeder::class,
            LangLevelSeeder::class,

            // Detale
            DetailProjectHandelPart1Seeder::class,
            DetailProjectHandelPart2Seeder::class,
            DetailProjectAdministacjaSeeder::class,
            DetailProjectAdministacja1Part2Seeder::class,
            DetailProjectAdministacja1Part3Seeder::class,
            DetailProjectAdministacja1Part4Seeder::class,
            DetailProjectAdministacja1Part5Seeder::class,
            DetailProjectAdministacja2Seeder::class,
            DetailProjectAdministacja3Seeder::class,
            DetailProjectOchronaiBezpieczenstwoSeeder::class,
            DetailProjectKulturaSeeder::class,
            DetailProjectEdukacjaSeeder::class,
            DetailProjectEdukacjaPart2Seeder::class,
            DetailProjectLekarzeSeeder::class,
            DetailProjectbiologicznochemicznogeograficznaSeeder::class,
            DetailProjectbiologicznochemicznogeograficzna2Seeder::class,
            DetailProjectbudowlanaSeeder::class,
            DetailProjectelektroSeeder::class,
            DetailProjectinformatycznaSeeder::class,
            DetailProjectMechanicySeeder::class,
            DetailProjectTSLSeeder::class,
            DetailProjectProdukcjaSeeder::class,
            DetailProjectSpozywczaSeeder::class,
            DetailProjectRolnictwoSeeder::class,
            DetailProjectGastroSeeder::class,
            DetailProjectGastro2Seeder::class,
            DetailProjectUslugaSeeder::class,
            DetailProjectFinansowaPrawnaSeeder::class,
            DetailProjectFinansowaPrawna2Seeder::class,
            DetailProjectOchronaiBezpieczenstwo2Seeder::class,
            DetailProjectKultura2Seeder::class,
            DetailProjectEdukacja2Seeder::class,
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
            DetailProjectUsluga2Seeder::class,
            DetailProjectRolnictwo2Seeder::class,
            //             Detale

            AdminSeeder::class,
            CategoryImageSeeder::class,
            CountryImagesSeeder::class,
            FoundationCategorySeeder::class,
            IntegrationSeeder::class,
            AgreementSeeder::class
        ]);

    }
}
