<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectbudowlana3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $MONTER_INSTALACJI_GAZÓW_MEDYCZNYCH = [

            [
                "id" => 22681,
                "name" => json_encode([
                    "pl" => "Montaż instalacji gazów medycznych w szpitalach, klinikach oraz innych placówkach medycznych.",
                    "en" => "Installing medical gas systems in hospitals, clinics, and other healthcare facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22682,
                "name" => json_encode([
                    "pl" => "Instalowanie rur, zaworów, regulatorów ciśnienia oraz innych elementów w systemach gazów medycznych.",
                    "en" => "Installing pipes, valves, pressure regulators, and other components in medical gas systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22683,
                "name" => json_encode([
                    "pl" => "Wykonywanie prób szczelności i ciśnienia w instalacjach gazów medycznych.",
                    "en" => "Performing leak and pressure tests on medical gas installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22684,
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i serwisowanie instalacji gazów medycznych, w tym wymiana uszkodzonych elementów.",
                    "en" => "Repair, maintenance, and servicing of medical gas installations, including replacing damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22685,
                "name" => json_encode([
                    "pl" => "Sprawdzanie zgodności instalacji gazów medycznych z obowiązującymi normami i przepisami.",
                    "en" => "Ensuring medical gas installations comply with applicable standards and regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22686,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z instalacjami gazów medycznych.",
                    "en" => "Maintaining documentation related to medical gas installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_HYDRAULICY_I_MONTERZY_RUROCIĄGÓW = [

            [
                "id" => 22687,
                "name" => json_encode([
                    "pl" => "Instalacja, naprawa i konserwacja systemów rurociągowych w różnych gałęziach przemysłu.",
                    "en" => "Installation, repair, and maintenance of pipeline systems in various industrial sectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22688,
                "name" => json_encode([
                    "pl" => "Montaż rur wodociągowych, gazowych i kanalizacyjnych oraz instalowanie odpowiednich armatur.",
                    "en" => "Installing water, gas, and sewage pipes and appropriate fittings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22689,
                "name" => json_encode([
                    "pl" => "Spawanie, cięcie i łączenie rur w instalacjach przemysłowych oraz hydraulicznych.",
                    "en" => "Welding, cutting, and connecting pipes in industrial and hydraulic installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22690,
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i testowanie szczelności systemów rurociągowych.",
                    "en" => "Repair, maintenance, and leak testing of pipeline systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22691,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji instalacyjnej i serwisowej związanej z rurociągami.",
                    "en" => "Maintaining installation and service documentation related to pipelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22692,
                "name" => json_encode([
                    "pl" => "Wykonywanie prób ciśnieniowych i kontrola jakości instalacji rurociągowych.",
                    "en" => "Performing pressure tests and quality control of pipeline installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_SIECI_I_INSTALACJI_SANITARNYCH_S = [

            [
                "id" => 22693,
                "name" => json_encode([
                    "pl" => "Montaż systemów wodociągowych, kanalizacyjnych, instalacji gazowych i innych urządzeń sanitarnych.",
                    "en" => "Installing water supply, sewage, gas systems, and other sanitary appliances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22694,
                "name" => json_encode([
                    "pl" => "Instalowanie rur, armatury, zaworów, przepustnic i innych urządzeń w systemach sanitarnych.",
                    "en" => "Installing pipes, fittings, valves, regulators, and other components in sanitary systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22695,
                "name" => json_encode([
                    "pl" => "Wykonywanie prób ciśnieniowych, kontroli szczelności i testów instalacji sanitarnych.",
                    "en" => "Performing pressure tests, leak checks, and testing of sanitary installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22696,
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i modernizacja istniejących instalacji sanitarnych.",
                    "en" => "Repair, maintenance, and modernization of existing sanitary installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22697,
                "name" => json_encode([
                    "pl" => "Instalacja systemów wentylacyjnych, klimatyzacyjnych oraz innych urządzeń sanitarnych.",
                    "en" => "Installing ventilation, air conditioning systems, and other sanitary devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22698,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z instalacjami sanitarnymi.",
                    "en" => "Maintaining documentation related to sanitary installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MECHANIK_URZĄDZEŃ_CHŁODNICZYCH = [

            [
                "id" => 22699,
                "name" => json_encode([
                    "pl" => "Montaż, naprawa i konserwacja urządzeń chłodniczych, takich jak lodówki, klimatyzatory, chłodnie przemysłowe.",
                    "en" => "Installation, repair, and maintenance of refrigeration devices, such as refrigerators, air conditioners, industrial coolers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22700,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i usuwanie awarii urządzeń chłodniczych.",
                    "en" => "Diagnosing and fixing malfunctions in refrigeration devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22701,
                "name" => json_encode([
                    "pl" => "Montaż instalacji chłodniczych, w tym rur, zaworów, kompresorów i innych podzespołów.",
                    "en" => "Installing refrigeration systems, including pipes, valves, compressors, and other components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22702,
                "name" => json_encode([
                    "pl" => "Wykonywanie prób szczelności systemów chłodniczych i testowanie ich efektywności.",
                    "en" => "Performing leak tests and efficiency tests on refrigeration systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22703,
                "name" => json_encode([
                    "pl" => "Konserwacja i czyszczenie urządzeń chłodniczych, w tym wymiana filtrów i innych części eksploatacyjnych.",
                    "en" => "Maintaining and cleaning refrigeration devices, including replacing filters and other consumables."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22704,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej urządzeń chłodniczych.",
                    "en" => "Maintaining service documentation for refrigeration devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MECHANIK_URZĄDZEŃ_KLIMATYZACYJNYCH = [

            [
                "id" => 22705,
                "name" => json_encode([
                    "pl" => "Montaż, naprawa i konserwacja urządzeń klimatyzacyjnych w budynkach mieszkalnych i przemysłowych.",
                    "en" => "Installation, repair, and maintenance of air conditioning devices in residential and industrial buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22706,
                "name" => json_encode([
                    "pl" => "Instalacja systemów klimatyzacji, w tym rur, wentylatorów, klimatyzatorów oraz innych komponentów.",
                    "en" => "Installing air conditioning systems, including pipes, fans, air conditioners, and other components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22707,
                "name" => json_encode([
                    "pl" => "Naprawa awarii systemów klimatyzacyjnych, w tym diagnostyka i usuwanie usterek.",
                    "en" => "Repairing air conditioning system failures, including diagnostics and troubleshooting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22708,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów szczelności oraz kontrola efektywności systemów klimatyzacyjnych.",
                    "en" => "Performing leak tests and efficiency checks for air conditioning systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22709,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji urządzeń klimatyzacyjnych, w tym czyszczenie filtrów i wymiana uszkodzonych części.",
                    "en" => "Maintaining air conditioning units, including cleaning filters and replacing damaged parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22710,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej urządzeń klimatyzacyjnych.",
                    "en" => "Maintaining service documentation for air conditioning devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_KONSERWATOR_INSTALACJI_WENTYLACYJNYCH_I_KLIMATYZACYJNYCH = [

            [
                "id" => 22711,
                "name" => json_encode([
                    "pl" => "Montaż i konserwacja instalacji wentylacyjnych i klimatyzacyjnych w budynkach.",
                    "en" => "Installation and maintenance of ventilation and air conditioning systems in buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22712,
                "name" => json_encode([
                    "pl" => "Instalowanie systemów wentylacyjnych, w tym kanałów, wentylatorów, klimatyzatorów, urządzeń filtrujących powietrze.",
                    "en" => "Installing ventilation systems, including ducts, fans, air conditioners, and air filtering devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22713,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń wentylacyjnych i klimatyzacyjnych.",
                    "en" => "Repair and maintenance of ventilation and air conditioning devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22714,
                "name" => json_encode([
                    "pl" => "Sprawdzanie sprawności instalacji wentylacyjnych i klimatyzacyjnych, usuwanie awarii.",
                    "en" => "Checking the efficiency of ventilation and air conditioning systems, troubleshooting issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22715,
                "name" => json_encode([
                    "pl" => "Wykonywanie testów szczelności i kontroli wydajności systemów wentylacyjnych i klimatyzacyjnych.",
                    "en" => "Performing leak tests and efficiency checks for ventilation and air conditioning systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22716,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z instalacjami wentylacyjnymi i klimatyzacyjnymi.",
                    "en" => "Maintaining documentation related to ventilation and air conditioning installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_MONTERZY_I_KONSERWATORZY_INSTALACJI_KLIMATYZACYJNYCH_I_CHŁODNICZYCH = [

            [
                "id" => 22717,
                "name" => json_encode([
                    "pl" => "Montaż i konserwacja różnych instalacji klimatyzacyjnych i chłodniczych w budynkach komercyjnych i przemysłowych.",
                    "en" => "Installation and maintenance of various air conditioning and refrigeration systems in commercial and industrial buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22718,
                "name" => json_encode([
                    "pl" => "Instalowanie elementów takich jak chłodnice, klimatyzatory, wentylatory, systemy filtracji powietrza.",
                    "en" => "Installing components such as coolers, air conditioners, fans, air filtration systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22719,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja systemów chłodniczych i klimatyzacyjnych, w tym wymiana filtrów, czyszczenie elementów.",
                    "en" => "Repair and maintenance of refrigeration and air conditioning systems, including replacing filters, cleaning components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22720,
                "name" => json_encode([
                    "pl" => "Kontrola sprawności systemów, diagnostyka i usuwanie usterek w instalacjach klimatyzacyjnych i chłodniczych.",
                    "en" => "Checking system efficiency, diagnosing, and troubleshooting air conditioning and refrigeration installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22721,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie prób szczelności i testów ciśnienia w instalacjach chłodniczych i klimatyzacyjnych.",
                    "en" => "Performing leak and pressure tests on refrigeration and air conditioning installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22722,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji instalacyjnej i konserwacyjnej związanej z systemami klimatyzacyjnymi i chłodniczymi.",
                    "en" => "Maintaining installation and maintenance documentation related to air conditioning and refrigeration systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_BRAM = [

            [
                "id" => 22723,
                "name" => json_encode([
                    "pl" => "Montaż i instalacja bram przemysłowych, garażowych oraz bram automatycznych.",
                    "en" => "Installing and assembling industrial, garage, and automatic doors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22724,
                "name" => json_encode([
                    "pl" => "Instalowanie mechanizmów napędowych w bramach automatycznych oraz systemów sterowania.",
                    "en" => "Installing drive mechanisms in automatic doors and control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22725,
                "name" => json_encode([
                    "pl" => "Sprawdzanie jakości wykonania bram oraz ich funkcjonalności po zakończeniu montażu.",
                    "en" => "Inspecting the quality and functionality of doors after installation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22726,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja bram, w tym wymiana uszkodzonych części i regulacja mechanizmów.",
                    "en" => "Repair and maintenance of doors, including replacing damaged parts and adjusting mechanisms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22727,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów funkcjonalności i bezpieczeństwa bram automatycznych.",
                    "en" => "Conducting functionality and safety tests for automatic doors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22728,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji montażowej oraz serwisowej bram.",
                    "en" => "Maintaining installation and service documentation for doors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_KADŁUBÓW_OKRĘTOWYCH = [

            [
                "id" => 22729,
                "name" => json_encode([
                    "pl" => "Montaż kadłubów okrętowych, w tym spawanie, cięcie i montaż poszczególnych elementów.",
                    "en" => "Assembling ship hulls, including welding, cutting, and assembling individual parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22730,
                "name" => json_encode([
                    "pl" => "Instalowanie systemów wyposażenia kadłubów, takich jak systemy wentylacyjne, hydrauliczne i elektryczne.",
                    "en" => "Installing hull equipment systems, such as ventilation, hydraulic, and electrical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22731,
                "name" => json_encode([
                    "pl" => "Wykonywanie spawania i montażu elementów kadłuba okrętowego w zgodzie z planami i rysunkami technicznymi.",
                    "en" => "Welding and assembling hull components according to plans and technical drawings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22732,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonania kadłuba oraz jego zgodności z wymaganiami projektowymi.",
                    "en" => "Inspecting the quality of hull construction and ensuring compliance with project requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22733,
                "name" => json_encode([
                    "pl" => "Naprawa uszkodzonych elementów kadłuba okrętowego oraz wymiana zniszczonych części.",
                    "en" => "Repairing damaged parts of the ship's hull and replacing worn-out components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22734,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji montażu i kontroli jakości kadłubów okrętowych.",
                    "en" => "Maintaining assembly and quality control documentation for ship hulls."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_KONSTRUKCJI_ALUMINIOWYCH = [

            [
                "id" => 22735,
                "name" => json_encode([
                    "pl" => "Montaż konstrukcji aluminiowych, w tym systemów okiennych, drzwiowych, fasad i innych elementów.",
                    "en" => "Assembling aluminum structures, including window, door, facade systems, and other components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22736,
                "name" => json_encode([
                    "pl" => "Cięcie, spawanie i montaż elementów konstrukcji aluminiowych zgodnie z projektami budowlanymi.",
                    "en" => "Cutting, welding, and assembling aluminum structure components according to construction plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22737,
                "name" => json_encode([
                    "pl" => "Instalowanie okien, drzwi, fasad i innych konstrukcji z aluminium, w tym zabezpieczanie i mocowanie.",
                    "en" => "Installing windows, doors, facades, and other aluminum structures, including securing and fastening."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22738,
                "name" => json_encode([
                    "pl" => "Sprawdzanie jakości wykonania konstrukcji aluminiowych oraz ich zgodności z wymaganiami technicznymi.",
                    "en" => "Inspecting the quality of aluminum structures and ensuring compliance with technical specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22739,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja elementów konstrukcji aluminiowych, w tym wymiana uszkodzonych części.",
                    "en" => "Repair and maintenance of aluminum structure components, including replacing damaged parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22740,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z montażem konstrukcji aluminiowych.",
                    "en" => "Maintaining documentation related to the installation of aluminum structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OCZYSZCZACZ_KONSTRUKCJI_STALOWYCH = [

            [
                "id" => 22741,
                "name" => json_encode([
                    "pl" => "Oczyszczanie konstrukcji stalowych z rdzy, farb i innych zanieczyszczeń przed malowaniem.",
                    "en" => "Cleaning steel structures from rust, paint, and other contaminants before painting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22742,
                "name" => json_encode([
                    "pl" => "Przygotowywanie powierzchni stalowych do malowania i ochrony przed korozją.",
                    "en" => "Preparing steel surfaces for painting and corrosion protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22743,
                "name" => json_encode([
                    "pl" => "Usuwanie zanieczyszczeń mechanicznych i chemicznych ze stalowych konstrukcji przemysłowych.",
                    "en" => "Removing mechanical and chemical contaminants from industrial steel structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22744,
                "name" => json_encode([
                    "pl" => "Wykonywanie oczyszczania wysokociśnieniowego i śrutowania powierzchni stalowych.",
                    "en" => "Performing high-pressure cleaning and sandblasting of steel surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22745,
                "name" => json_encode([
                    "pl" => "Prace związane z usuwaniem rdzy i innych zabrudzeń w celu zapewnienia odpowiednich warunków dla malowania.",
                    "en" => "Works related to removing rust and other contaminants to ensure proper conditions for painting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22746,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z oczyszczaniem konstrukcji stalowych.",
                    "en" => "Maintaining documentation related to the cleaning of steel structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ROBOTNICY_PRZYGOTOWUJĄCY_I_WZNOSZĄCY_KONSTRUKCJE_METALOWE = [

            [
                "id" => 22747,
                "name" => json_encode([
                    "pl" => "Przygotowywanie elementów metalowych do montażu konstrukcji, w tym cięcie, szlifowanie i wiercenie.",
                    "en" => "Preparing metal components for assembly, including cutting, grinding, and drilling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22748,
                "name" => json_encode([
                    "pl" => "Wznoszenie i montowanie konstrukcji stalowych, w tym wież, mostów i innych obiektów inżynieryjnych.",
                    "en" => "Erecting and assembling steel structures, including towers, bridges, and other engineering structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22749,
                "name" => json_encode([
                    "pl" => "Montaż podzespołów konstrukcyjnych, takich jak belki, słupy, stropy, elementy wsporcze.",
                    "en" => "Assembling structural components such as beams, columns, floors, and support elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22750,
                "name" => json_encode([
                    "pl" => "Wykonywanie prób szczelności i sprawdzanie stabilności konstrukcji stalowych.",
                    "en" => "Performing leak tests and checking the stability of steel structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22751,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja konstrukcji metalowych, w tym wymiana uszkodzonych elementów i malowanie ochronne.",
                    "en" => "Repair and maintenance of metal structures, including replacing damaged components and protective painting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22752,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji montażowej konstrukcji stalowych i przeprowadzanie inspekcji wykonanych prac.",
                    "en" => "Maintaining assembly documentation for steel structures and performing inspections of completed work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_KONSTRUKCJI_STALOWYCH = [

            [
                "id" => 22753,
                "name" => json_encode([
                    "pl" => "Montaż i spawanie elementów konstrukcji stalowych, takich jak belki, kolumny, stropy, kratownice.",
                    "en" => "Welding and assembling steel structure components, such as beams, columns, floors, and trusses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22754,
                "name" => json_encode([
                    "pl" => "Instalacja konstrukcji stalowych w obiektach budowlanych i przemysłowych.",
                    "en" => "Installing steel structures in construction and industrial buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22755,
                "name" => json_encode([
                    "pl" => "Przygotowywanie, cięcie i montaż elementów stalowych zgodnie z rysunkami i projektami budowlanymi.",
                    "en" => "Preparing, cutting, and assembling steel components according to architectural and engineering drawings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22756,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych konstrukcji stalowych, w tym testowanie ich wytrzymałości i stabilności.",
                    "en" => "Inspecting the quality of completed steel structures, including testing their strength and stability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22757,
                "name" => json_encode([
                    "pl" => "Naprawa uszkodzeń konstrukcji stalowych, wymiana uszkodzonych części oraz malowanie ochronne.",
                    "en" => "Repairing steel structures, replacing damaged parts, and applying protective coatings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22758,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji montażowej i inspekcji jakości wykonanych konstrukcji stalowych.",
                    "en" => "Maintaining assembly documentation and performing quality inspections of completed steel structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_KADŁUBÓW_I_JEDNOSTEK_PŁYWAJĄCEJ = [

            [
                "id" => 22759,
                "name" => json_encode([
                    "pl" => "Montaż kadłubów jednostek pływających, w tym statków, łodzi i innych jednostek pływających.",
                    "en" => "Assembling the hulls of floating units, including ships, boats, and other vessels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22760,
                "name" => json_encode([
                    "pl" => "Spawanie i łączenie elementów kadłubów jednostek pływających, w tym używanie materiałów spawalniczych.",
                    "en" => "Welding and joining the components of floating units' hulls, including using welding materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22761,
                "name" => json_encode([
                    "pl" => "Montaż urządzeń wewnętrznych w jednostkach pływających, takich jak silniki, instalacje hydrauliczne i elektryczne.",
                    "en" => "Installing internal devices in floating units, such as engines, hydraulic systems, and electrical installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22762,
                "name" => json_encode([
                    "pl" => "Testowanie szczelności kadłubów i sprawdzanie ich wytrzymałości na wodzie.",
                    "en" => "Testing the watertightness of hulls and checking their durability in the water."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22763,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja kadłubów jednostek pływających, w tym wymiana uszkodzonych elementów.",
                    "en" => "Repair and maintenance of the hulls of floating units, including replacing damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22764,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji montażowej oraz inspekcji jakości wykonanych jednostek pływających.",
                    "en" => "Maintaining assembly documentation and performing quality inspections of completed floating units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_KONSERWATOR_KOLEI_LINOWYCH_WYCIĄGÓW_NARCIARSKICH_I_ZJEŻDŻALNI_GRAWITACYJNYCH = [

            [
                "id" => 22765,
                "name" => json_encode([
                    "pl" => "Montaż, naprawa i konserwacja kolei linowych, wyciągów narciarskich i zjeżdżalni grawitacyjnych.",
                    "en" => "Installation, repair, and maintenance of cable cars, ski lifts, and gravity slides."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22766,
                "name" => json_encode([
                    "pl" => "Kontrola techniczna urządzeń i mechanizmów kolei linowych oraz wyciągów narciarskich.",
                    "en" => "Technical inspection of cable car devices and ski lift mechanisms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22767,
                "name" => json_encode([
                    "pl" => "Instalowanie elementów kolei linowych, takich jak liny, urządzenia napędowe i zabezpieczające.",
                    "en" => "Installing components of cable cars, such as cables, drive systems, and safety devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22768,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja elementów wyciągów narciarskich oraz systemów bezpieczeństwa.",
                    "en" => "Repair and maintenance of ski lift components and safety systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22769,
                "name" => json_encode([
                    "pl" => "Wykonywanie testów funkcjonalności, w tym testowanie obciążenia i bezpieczeństwa urządzeń.",
                    "en" => "Performing functionality tests, including load and safety tests of devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22770,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji instalacyjnej i konserwacyjnej urządzeń linowych oraz wyciągów.",
                    "en" => "Maintaining installation and maintenance documentation for cable devices and lifts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_KONSTRUKCJI_LINOWYCH_STAŁYCH = [

            [
                "id" => 22771,
                "name" => json_encode([
                    "pl" => "Montaż konstrukcji linowych stałych, w tym instalacja lin, urządzeń napinających i podporowych.",
                    "en" => "Installing permanent rope structures, including the installation of cables, tensioning, and supporting devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22772,
                "name" => json_encode([
                    "pl" => "Instalowanie i montowanie stałych lin w systemach transportu, w tym systemów kolei linowych i wyciągów.",
                    "en" => "Installing and assembling permanent ropes in transportation systems, including cable cars and lifts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22773,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja konstrukcji linowych stałych, w tym wymiana zużytych lin i części mechanicznych.",
                    "en" => "Repair and maintenance of permanent rope structures, including replacing worn ropes and mechanical parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22774,
                "name" => json_encode([
                    "pl" => "Testowanie bezpieczeństwa i szczelności instalacji linowych stałych.",
                    "en" => "Testing the safety and integrity of permanent rope installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22775,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej i serwisowej instalacji linowych stałych.",
                    "en" => "Maintaining technical and service documentation for permanent rope installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22776,
                "name" => json_encode([
                    "pl" => "Sprawdzanie zgodności instalacji linowych z obowiązującymi normami bezpieczeństwa.",
                    "en" => "Checking the compliance of rope installations with applicable safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_WIERTNI = [

            [
                "id" => 22777,
                "name" => json_encode([
                    "pl" => "Montaż i obsługa wiertni, w tym instalowanie wiertnic, rur wiertniczych i mechanizmów napędowych.",
                    "en" => "Installing and operating drilling rigs, including setting up drills, drill pipes, and drive mechanisms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22778,
                "name" => json_encode([
                    "pl" => "Wiercenie otworów w różnych materiałach, w tym wiertła, naprawa i konserwacja sprzętu wiertniczego.",
                    "en" => "Drilling holes in various materials, maintaining and repairing drilling equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22779,
                "name" => json_encode([
                    "pl" => "Wykonywanie prób i pomiarów w trakcie procesu wiercenia, zapewnienie jakości wykonanych otworów.",
                    "en" => "Performing tests and measurements during drilling, ensuring the quality of the drilled holes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22780,
                "name" => json_encode([
                    "pl" => "Montaż i demontaż wiertni, przygotowywanie wiertnic do transportu i pracy w terenie.",
                    "en" => "Assembling and disassembling drilling rigs, preparing drills for transport and field operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22781,
                "name" => json_encode([
                    "pl" => "Naprawa awarii sprzętu wiertniczego, konserwacja urządzeń oraz wykonywanie przeglądów technicznych.",
                    "en" => "Repairing drilling equipment failures, maintaining devices, and conducting technical inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22782,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z montażem i eksploatacją wiertni.",
                    "en" => "Maintaining documentation related to the assembly and operation of drilling rigs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TAKIELARZ = [

            [
                "id" => 22783,
                "name" => json_encode([
                    "pl" => "Montaż, naprawa i konserwacja takielunku w statkach, jachtach oraz innych jednostkach pływających.",
                    "en" => "Installing, repairing, and maintaining rigging on ships, yachts, and other floating units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22784,
                "name" => json_encode([
                    "pl" => "Naprawa i wymiana elementów takielunku, takich jak liny, żagle, maszty i inne akcesoria.",
                    "en" => "Repairing and replacing rigging components, such as ropes, sails, masts, and other accessories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22785,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów wytrzymałościowych i kontrola jakości wykonania takielunku.",
                    "en" => "Performing strength tests and quality control of rigging work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22786,
                "name" => json_encode([
                    "pl" => "Montaż elementów takielunku na jednostkach pływających, w tym lin, masztów i żagli.",
                    "en" => "Assembling rigging elements on floating units, including ropes, masts, and sails."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22787,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja żagli, w tym szycie, wzmocnienia, czyszczenie i impregnowanie.",
                    "en" => "Repairing and maintaining sails, including sewing, reinforcing, cleaning, and impregnation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22788,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z montażem i konserwacją takielunku.",
                    "en" => "Maintaining documentation related to the assembly and maintenance of rigging."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_MONTERZY_KONSTRUKCJI_LINOWYCH = [

            [
                "id" => 22789,
                "name" => json_encode([
                    "pl" => "Montaż konstrukcji linowych, takich jak linie transportowe, sieci bezpieczeństwa, systemy zabezpieczeń w różnych gałęziach przemysłu.",
                    "en" => "Installing rope structures, such as transport lines, safety nets, and security systems in various industrial sectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22790,
                "name" => json_encode([
                    "pl" => "Instalowanie systemów linowych w budynkach, takich jak systemy mocujące, linie ciągłe i urządzenia do transportu.",
                    "en" => "Installing rope systems in buildings, such as securing systems, continuous lines, and transport devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22791,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja systemów linowych, w tym wymiana uszkodzonych elementów i regulacja napięcia lin.",
                    "en" => "Repairing and maintaining rope systems, including replacing damaged components and adjusting rope tension."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22792,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych instalacji linowych i ich zgodności z wymaganiami bezpieczeństwa.",
                    "en" => "Inspecting the quality of installed rope systems and ensuring compliance with safety requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22793,
                "name" => json_encode([
                    "pl" => "Wykonywanie testów bezpieczeństwa linowych instalacji transportowych oraz ich obciążeń.",
                    "en" => "Performing safety tests for rope transport installations and their load-bearing capacity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22794,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji montażowej oraz konserwacyjnej systemów linowych.",
                    "en" => "Maintaining installation and maintenance documentation for rope systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_BLACHARZE = [

            [
                "id" => 22795,
                "name" => json_encode([
                    "pl" => "Obróbka i montaż blach, w tym cięcie, gięcie, spawanie oraz formowanie elementów z blachy.",
                    "en" => "Sheet metal processing and assembly, including cutting, bending, welding, and forming sheet metal components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22796,
                "name" => json_encode([
                    "pl" => "Montaż elementów blaszanych w konstrukcjach budowlanych i przemysłowych.",
                    "en" => "Assembling sheet metal components in construction and industrial structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22797,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja blaszanych elementów konstrukcji budowlanych.",
                    "en" => "Repair and maintenance of sheet metal components in building structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22798,
                "name" => json_encode([
                    "pl" => "Spawanie, cięcie i montowanie blach do różnych konstrukcji przemysłowych i budowlanych.",
                    "en" => "Welding, cutting, and assembling sheets for various industrial and construction structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22799,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów jakości wykonania obróbki blach i ich zgodności z wymaganiami technicznymi.",
                    "en" => "Performing quality tests of sheet metal work and ensuring compliance with technical requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22800,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji montażu i konserwacji elementów blaszanych.",
                    "en" => "Maintaining installation and maintenance documentation for sheet metal components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_BUDOWY_JEDNOSTEK_PŁYWAJĄCYCH = [

            [
                "id" => 22801,
                "name" => json_encode([
                    "pl" => "Nadzór nad budową jednostek pływających, w tym statków, jachtów i innych jednostek wodnych.",
                    "en" => "Supervising the construction of floating units, including ships, yachts, and other watercraft."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22802,
                "name" => json_encode([
                    "pl" => "Koordynowanie pracy przy budowie kadłubów jednostek pływających oraz montażu mechanizmów napędowych.",
                    "en" => "Coordinating work in building the hulls of floating units and assembling propulsion mechanisms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22803,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonania jednostek pływających, w tym testowanie ich wyporności, szczelności i wytrzymałości.",
                    "en" => "Quality control of completed floating units, including testing buoyancy, watertightness, and strength."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22804,
                "name" => json_encode([
                    "pl" => "Udział w przygotowywaniu projektów budowy jednostek pływających, w tym dostosowywanie planów technicznych.",
                    "en" => "Participating in preparing the designs for floating units, including adjusting technical plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22805,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów jednostek pływających po zakończeniu budowy, w tym sprawdzanie ich funkcjonalności.",
                    "en" => "Conducting tests of floating units after construction, including checking their functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22806,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej związanej z budową jednostek pływających.",
                    "en" => "Maintaining technical documentation related to the construction of floating units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];


        DB::table('detail_projects')->insert(array_merge(
            $MONTER_INSTALACJI_GAZÓW_MEDYCZNYCH,
            $POZOSTALI_HYDRAULICY_I_MONTERZY_RUROCIĄGÓW,
            $MONTER_SIECI_I_INSTALACJI_SANITARNYCH_S,
            $MECHANIK_URZĄDZEŃ_CHŁODNICZYCH,
            $MECHANIK_URZĄDZEŃ_KLIMATYZACYJNYCH,
            $MONTER_KONSERWATOR_INSTALACJI_WENTYLACYJNYCH_I_KLIMATYZACYJNYCH,
            $POZOSTALI_MONTERZY_I_KONSERWATORZY_INSTALACJI_KLIMATYZACYJNYCH_I_CHŁODNICZYCH,
            $MONTER_BRAM,
            $MONTER_KADŁUBÓW_OKRĘTOWYCH,
            $MONTER_KONSTRUKCJI_ALUMINIOWYCH,
            $OCZYSZCZACZ_KONSTRUKCJI_STALOWYCH,
            $POZOSTALI_ROBOTNICY_PRZYGOTOWUJĄCY_I_WZNOSZĄCY_KONSTRUKCJE_METALOWE,
            $MONTER_KONSTRUKCJI_STALOWYCH,
            $MONTER_KADŁUBÓW_I_JEDNOSTEK_PŁYWAJĄCEJ,
            $MONTER_KONSERWATOR_KOLEI_LINOWYCH_WYCIĄGÓW_NARCIARSKICH_I_ZJEŻDŻALNI_GRAWITACYJNYCH,
            $MONTER_KONSTRUKCJI_LINOWYCH_STAŁYCH,
            $MONTER_WIERTNI,
            $TAKIELARZ,
            $POZOSTALI_MONTERZY_KONSTRUKCJI_LINOWYCH,
            $POZOSTALI_BLACHARZE,
            $TECHNIK_BUDOWY_JEDNOSTEK_PŁYWAJĄCYCH,


        ));
        Category::whereId('999')->first()->detailprojects()->attach(collect($MONTER_INSTALACJI_GAZÓW_MEDYCZNYCH)->pluck('id')->toArray());
        Category::whereId('999')->first()->detailprojects()->attach(collect($POZOSTALI_HYDRAULICY_I_MONTERZY_RUROCIĄGÓW)->pluck('id')->toArray());
        Category::whereId('999')->first()->detailprojects()->attach(collect($MONTER_SIECI_I_INSTALACJI_SANITARNYCH_S)->pluck('id')->toArray());
        Category::whereId('999')->first()->detailprojects()->attach(collect($MECHANIK_URZĄDZEŃ_CHŁODNICZYCH)->pluck('id')->toArray());
        Category::whereId('999')->first()->detailprojects()->attach(collect($MECHANIK_URZĄDZEŃ_KLIMATYZACYJNYCH)->pluck('id')->toArray());
        Category::whereId('999')->first()->detailprojects()->attach(collect($MONTER_KONSERWATOR_INSTALACJI_WENTYLACYJNYCH_I_KLIMATYZACYJNYCH)->pluck('id')->toArray());
        Category::whereId('999')->first()->detailprojects()->attach(collect($POZOSTALI_MONTERZY_I_KONSERWATORZY_INSTALACJI_KLIMATYZACYJNYCH_I_CHŁODNICZYCH)->pluck('id')->toArray());
        Category::whereId('999')->first()->detailprojects()->attach(collect($MONTER_BRAM)->pluck('id')->toArray());
        Category::whereId('999')->first()->detailprojects()->attach(collect($MONTER_KADŁUBÓW_OKRĘTOWYCH)->pluck('id')->toArray());
        Category::whereId('999')->first()->detailprojects()->attach(collect($MONTER_KONSTRUKCJI_ALUMINIOWYCH)->pluck('id')->toArray());
        Category::whereId('999')->first()->detailprojects()->attach(collect($OCZYSZCZACZ_KONSTRUKCJI_STALOWYCH)->pluck('id')->toArray());
        Category::whereId('999')->first()->detailprojects()->attach(collect($POZOSTALI_ROBOTNICY_PRZYGOTOWUJĄCY_I_WZNOSZĄCY_KONSTRUKCJE_METALOWE)->pluck('id')->toArray());
        Category::whereId('999')->first()->detailprojects()->attach(collect($MONTER_KONSTRUKCJI_STALOWYCH)->pluck('id')->toArray());
        Category::whereId('999')->first()->detailprojects()->attach(collect($MONTER_KADŁUBÓW_I_JEDNOSTEK_PŁYWAJĄCEJ)->pluck('id')->toArray());
        Category::whereId('999')->first()->detailprojects()->attach(collect($MONTER_KONSERWATOR_KOLEI_LINOWYCH_WYCIĄGÓW_NARCIARSKICH_I_ZJEŻDŻALNI_GRAWITACYJNYCH)->pluck('id')->toArray());
        Category::whereId('999')->first()->detailprojects()->attach(collect($MONTER_KONSTRUKCJI_LINOWYCH_STAŁYCH)->pluck('id')->toArray());
        Category::whereId('999')->first()->detailprojects()->attach(collect($MONTER_WIERTNI)->pluck('id')->toArray());
        Category::whereId('999')->first()->detailprojects()->attach(collect($TAKIELARZ)->pluck('id')->toArray());
        Category::whereId('999')->first()->detailprojects()->attach(collect($POZOSTALI_MONTERZY_KONSTRUKCJI_LINOWYCH)->pluck('id')->toArray());
        Category::whereId('999')->first()->detailprojects()->attach(collect($POZOSTALI_BLACHARZE)->pluck('id')->toArray());
        Category::whereId('999')->first()->detailprojects()->attach(collect($TECHNIK_BUDOWY_JEDNOSTEK_PŁYWAJĄCYCH)->pluck('id')->toArray());


    }
}

