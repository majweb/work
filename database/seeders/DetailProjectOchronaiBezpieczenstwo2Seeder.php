<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectOchronaiBezpieczenstwo2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $FUNKCJONARIUSZ_CELNY = [

            [
                "id" => 21220,
                "name" => json_encode([
                    "pl" => "Kontrola towarów, pojazdów i osób przekraczających granicę państwową.",
                    "en" => "Inspecting goods, vehicles, and individuals crossing the national border."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21221,
                "name" => json_encode([
                    "pl" => "Weryfikacja dokumentacji celnej i deklaracji podatkowych.",
                    "en" => "Verifying customs documentation and tax declarations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21222,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli celnych w celu zapobiegania przemytowi.",
                    "en" => "Conducting customs inspections to prevent smuggling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21223,
                "name" => json_encode([
                    "pl" => "Zabezpieczanie towarów podlegających przepisom celnym.",
                    "en" => "Securing goods subject to customs regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FUNKCJONARIUSZ_STRAŻY_GRANICZNEJ = [

            [
                "id" => 21224,
                "name" => json_encode([
                    "pl" => "Kontrola osób przekraczających granicę pod kątem legalności ich pobytu.",
                    "en" => "Inspecting individuals crossing the border for legality of their stay."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21225,
                "name" => json_encode([
                    "pl" => "Zapobieganie nielegalnej migracji i przemytowi towarów.",
                    "en" => "Preventing illegal migration and smuggling of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21226,
                "name" => json_encode([
                    "pl" => "Patrolowanie granic lądowych, morskich i lotniczych.",
                    "en" => "Patrolling land, sea, and air borders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21227,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli pojazdów, bagażu i dokumentów podróżnych.",
                    "en" => "Conducting checks of vehicles, luggage, and travel documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $URZĘDNIK_DO_SPRAW_IMIGRACJI = [

            [
                "id" => 21228,
                "name" => json_encode([
                    "pl" => "Przyjmowanie i rozpatrywanie wniosków o pobyt i obywatelstwo.",
                    "en" => "Receiving and processing residency and citizenship applications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21229,
                "name" => json_encode([
                    "pl" => "Kontrola legalności pobytu cudzoziemców na terenie kraju.",
                    "en" => "Verifying the legality of foreigners' stay in the country."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21230,
                "name" => json_encode([
                    "pl" => "Współpraca z organami ścigania i służbami granicznymi w sprawach migracyjnych.",
                    "en" => "Collaborating with law enforcement and border services on migration issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21231,
                "name" => json_encode([
                    "pl" => "Prowadzenie postępowań administracyjnych w sprawach deportacji.",
                    "en" => "Conducting administrative proceedings related to deportation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_FUNKCJONARIUSZE_CELNI_I_OCHRONY_GRANIC = [

            [
                "id" => 21232,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie wyrywkowych kontroli na granicach kraju.",
                    "en" => "Conducting random checks at the country's borders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21233,
                "name" => json_encode([
                    "pl" => "Zabezpieczanie strategicznych punktów granicznych przed nielegalnym przekroczeniem.",
                    "en" => "Securing strategic border points against illegal crossings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21234,
                "name" => json_encode([
                    "pl" => "Współpraca z międzynarodowymi organizacjami celnymi i granicznymi.",
                    "en" => "Collaborating with international customs and border organizations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21235,
                "name" => json_encode([
                    "pl" => "Raportowanie incydentów związanych z bezpieczeństwem granic.",
                    "en" => "Reporting incidents related to border security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FUNKCJONARIUSZ_SŁUŻBY_CELNO_SKARBOWEJ = [

            [
                "id" => 21236,
                "name" => json_encode([
                    "pl" => "Kontrola przewożonych towarów pod kątem przepisów podatkowych i celnych.",
                    "en" => "Inspecting transported goods for compliance with tax and customs regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21237,
                "name" => json_encode([
                    "pl" => "Wykrywanie i ściganie przestępstw celnych i podatkowych.",
                    "en" => "Detecting and prosecuting customs and tax offenses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21238,
                "name" => json_encode([
                    "pl" => "Prowadzenie dochodzeń związanych z naruszeniami prawa celno-skarbowego.",
                    "en" => "Conducting investigations related to customs and tax law violations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21239,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi służbami w zakresie zwalczania przestępczości ekonomicznej.",
                    "en" => "Collaborating with other services in combating economic crime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_POLICJANCI = [

            [
                "id" => 21240,
                "name" => json_encode([
                    "pl" => "Patrolowanie terenów miejskich i wiejskich w celu zapewnienia porządku publicznego.",
                    "en" => "Patrolling urban and rural areas to maintain public order."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21241,
                "name" => json_encode([
                    "pl" => "Reagowanie na zgłoszenia mieszkańców i podejmowanie interwencji.",
                    "en" => "Responding to citizens' reports and taking action."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21242,
                "name" => json_encode([
                    "pl" => "Prowadzenie dochodzeń w sprawach wykroczeń i przestępstw.",
                    "en" => "Conducting investigations into misdemeanors and crimes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21243,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi służbami w celu poprawy bezpieczeństwa publicznego.",
                    "en" => "Collaborating with other services to enhance public safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FUNKCJONARIUSZ_SŁUŻBY_OCHRONY = [

            [
                "id" => 21244,
                "name" => json_encode([
                    "pl" => "Zapewnienie ochrony osobom publicznym oraz instytucjom państwowym.",
                    "en" => "Providing protection to public figures and state institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21245,
                "name" => json_encode([
                    "pl" => "Zapobieganie zagrożeniom poprzez monitorowanie i analizowanie ryzyka.",
                    "en" => "Preventing threats by monitoring and analyzing risks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21246,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji miejsc objętych ochroną.",
                    "en" => "Conducting inspections of protected sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21247,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań ochrony w sytuacjach kryzysowych.",
                    "en" => "Coordinating security actions in crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FUNKCJONARIUSZ_SŁUŻBY_PENITENCJARNEJ = [

            [
                "id" => 21248,
                "name" => json_encode([
                    "pl" => "Nadzór nad osadzonymi w zakładach karnych i aresztach śledczych.",
                    "en" => "Supervising inmates in prisons and detention centers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21249,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa i porządku w jednostkach penitencjarnych.",
                    "en" => "Ensuring safety and order in penitentiary units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21250,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć resocjalizacyjnych dla osadzonych.",
                    "en" => "Organizing rehabilitation programs for inmates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21251,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z pobytem osadzonych.",
                    "en" => "Maintaining documentation related to inmates' stay."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_FUNKCJONARIUSZE_SŁUŻBY_WIĘZIENNEJ = [

            [
                "id" => 21252,
                "name" => json_encode([
                    "pl" => "Zapewnienie wsparcia w zarządzaniu zakładami karnymi i aresztami.",
                    "en" => "Providing support in managing prisons and detention centers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21253,
                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń dla personelu penitencjarnego.",
                    "en" => "Conducting training sessions for penitentiary staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21254,
                "name" => json_encode([
                    "pl" => "Monitorowanie przestrzegania regulaminów w jednostkach penitencjarnych.",
                    "en" => "Monitoring compliance with regulations in penitentiary units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21255,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi służbami w zakresie resocjalizacji osadzonych.",
                    "en" => "Collaborating with other services on inmate rehabilitation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_PRACOWNICY_OCHRONY_OSÓB_I_MIENIA = [

            [
                "id" => 21256,
                "name" => json_encode([
                    "pl" => "Zapewnienie ochrony fizycznej osób w miejscach publicznych i prywatnych.",
                    "en" => "Providing physical protection for individuals in public and private spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21257,
                "name" => json_encode([
                    "pl" => "Monitorowanie systemów alarmowych i reagowanie na sygnały zagrożenia.",
                    "en" => "Monitoring alarm systems and responding to threat signals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21258,
                "name" => json_encode([
                    "pl" => "Patrolowanie terenów w celu zapobiegania przestępstwom i aktom wandalizmu.",
                    "en" => "Patrolling areas to prevent crimes and acts of vandalism."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21259,
                "name" => json_encode([
                    "pl" => "Weryfikacja tożsamości osób wchodzących do chronionych obiektów.",
                    "en" => "Verifying the identity of individuals entering protected premises."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_PRACOWNICY_USŁUG_OCHRONY_GDZIE_INDZIEJ_NIESKLASYFIKOWANI = [

            [
                "id" => 21260,
                "name" => json_encode([
                    "pl" => "Ochrona imprez masowych i zapewnienie bezpieczeństwa uczestników.",
                    "en" => "Securing mass events and ensuring participants' safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21261,
                "name" => json_encode([
                    "pl" => "Wsparcie techniczne w instalacji i konserwacji systemów zabezpieczeń.",
                    "en" => "Providing technical support for installation and maintenance of security systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21262,
                "name" => json_encode([
                    "pl" => "Monitorowanie systemów CCTV i raportowanie incydentów.",
                    "en" => "Monitoring CCTV systems and reporting incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21263,
                "name" => json_encode([
                    "pl" => "Współpraca z policją i innymi służbami w sytuacjach zagrożenia.",
                    "en" => "Collaborating with the police and other services in threat situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];


        DB::table('detail_projects')->insert(array_merge(
            $FUNKCJONARIUSZ_CELNY,
            $FUNKCJONARIUSZ_STRAŻY_GRANICZNEJ,
            $URZĘDNIK_DO_SPRAW_IMIGRACJI,
            $POZOSTALI_FUNKCJONARIUSZE_CELNI_I_OCHRONY_GRANIC,
            $FUNKCJONARIUSZ_SŁUŻBY_CELNO_SKARBOWEJ,
            $POZOSTALI_POLICJANCI,
            $FUNKCJONARIUSZ_SŁUŻBY_OCHRONY,
            $FUNKCJONARIUSZ_SŁUŻBY_PENITENCJARNEJ,
            $POZOSTALI_FUNKCJONARIUSZE_SŁUŻBY_WIĘZIENNEJ,
            $POZOSTALI_PRACOWNICY_OCHRONY_OSÓB_I_MIENIA,
            $POZOSTALI_PRACOWNICY_USŁUG_OCHRONY_GDZIE_INDZIEJ_NIESKLASYFIKOWANI


            ));

        Category::whereId('394')->first()->detailprojects()->attach(collect($FUNKCJONARIUSZ_CELNY)->pluck('id')->toArray());
        Category::whereId('395')->first()->detailprojects()->attach(collect($FUNKCJONARIUSZ_STRAŻY_GRANICZNEJ)->pluck('id')->toArray());
        Category::whereId('396')->first()->detailprojects()->attach(collect($URZĘDNIK_DO_SPRAW_IMIGRACJI)->pluck('id')->toArray());
        Category::whereId('397')->first()->detailprojects()->attach(collect($POZOSTALI_FUNKCJONARIUSZE_CELNI_I_OCHRONY_GRANIC)->pluck('id')->toArray());
        Category::whereId('398')->first()->detailprojects()->attach(collect($FUNKCJONARIUSZ_SŁUŻBY_CELNO_SKARBOWEJ)->pluck('id')->toArray());
        Category::whereId('405')->first()->detailprojects()->attach(collect($POZOSTALI_POLICJANCI)->pluck('id')->toArray());
        Category::whereId('410')->first()->detailprojects()->attach(collect($FUNKCJONARIUSZ_SŁUŻBY_OCHRONY)->pluck('id')->toArray());
        Category::whereId('411')->first()->detailprojects()->attach(collect($FUNKCJONARIUSZ_SŁUŻBY_PENITENCJARNEJ)->pluck('id')->toArray());
        Category::whereId('412')->first()->detailprojects()->attach(collect($POZOSTALI_FUNKCJONARIUSZE_SŁUŻBY_WIĘZIENNEJ)->pluck('id')->toArray());
        Category::whereId('432')->first()->detailprojects()->attach(collect($POZOSTALI_PRACOWNICY_OCHRONY_OSÓB_I_MIENIA)->pluck('id')->toArray());
        Category::whereId('434')->first()->detailprojects()->attach(collect($POZOSTALI_PRACOWNICY_USŁUG_OCHRONY_GDZIE_INDZIEJ_NIESKLASYFIKOWANI)->pluck('id')->toArray());
    }
}
