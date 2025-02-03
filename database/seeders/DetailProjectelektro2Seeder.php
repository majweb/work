<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectelektro2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();

        $INŻYNIER_ELEKTROENERGETYK = [

            [
                "id" => 22807,
                "name" => json_encode([
                    "pl" => "Projektowanie, nadzorowanie i utrzymywanie systemów elektroenergetycznych, w tym sieci przesyłowych i rozdzielczych.",
                    "en" => "Designing, supervising, and maintaining power engineering systems, including transmission and distribution networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22808,
                "name" => json_encode([
                    "pl" => "Analizowanie parametrów sieci elektroenergetycznych oraz wykonywanie obliczeń dla ich optymalizacji.",
                    "en" => "Analyzing the parameters of power engineering networks and performing calculations for optimization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22809,
                "name" => json_encode([
                    "pl" => "Zarządzanie projektami związanymi z budową i modernizacją sieci elektroenergetycznych.",
                    "en" => "Managing projects related to the construction and modernization of power engineering networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22810,
                "name" => json_encode([
                    "pl" => "Koordynowanie prac związanych z instalowaniem i uruchamianiem urządzeń elektroenergetycznych.",
                    "en" => "Coordinating the installation and commissioning of power engineering devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22811,
                "name" => json_encode([
                    "pl" => "Kontrola jakości i bezpieczeństwa pracy w systemach elektroenergetycznych.",
                    "en" => "Quality and safety control in power engineering systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22812,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej oraz raportowanie wykonanych prac i projektów.",
                    "en" => "Maintaining technical documentation and reporting on completed work and projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_ELEKTROENERGETYK_KOLEJOWYCH_SIECI_I_PODSTACJI_TRAKCYJNYCH = [

            [
                "id" => 22813,
                "name" => json_encode([
                    "pl" => "Projektowanie, instalowanie oraz nadzorowanie pracy sieci elektroenergetycznych dla transportu kolejowego.",
                    "en" => "Designing, installing, and supervising the operation of power engineering networks for rail transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22814,
                "name" => json_encode([
                    "pl" => "Zarządzanie i nadzorowanie instalacji podstacji trakcyjnych oraz systemów zasilania dla kolei.",
                    "en" => "Managing and supervising the installation of traction substations and power supply systems for railways."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22815,
                "name" => json_encode([
                    "pl" => "Optymalizacja systemów elektroenergetycznych w transporcie kolejowym, w tym poprawa efektywności energetycznej.",
                    "en" => "Optimizing power engineering systems in rail transport, including improving energy efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22816,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie procedur bezpieczeństwa w systemach elektroenergetycznych dla kolei.",
                    "en" => "Developing and implementing safety procedures in power engineering systems for railways."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22817,
                "name" => json_encode([
                    "pl" => "Prowadzenie analiz technicznych i audytów istniejących sieci trakcyjnych.",
                    "en" => "Conducting technical analysis and audits of existing traction networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22818,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji i raportów dotyczących projektów oraz instalacji sieci trakcyjnych.",
                    "en" => "Maintaining documentation and reports on projects and installations of traction networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_ELEKTRYK = [

            [
                "id" => 22819,
                "name" => json_encode([
                    "pl" => "Projektowanie i nadzorowanie instalacji elektrycznych, w tym sieci zasilających i urządzeń elektrycznych.",
                    "en" => "Designing and supervising electrical installations, including power supply networks and electrical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22820,
                "name" => json_encode([
                    "pl" => "Analizowanie i optymalizowanie efektywności energetycznej systemów elektrycznych.",
                    "en" => "Analyzing and optimizing the energy efficiency of electrical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22821,
                "name" => json_encode([
                    "pl" => "Wykonywanie obliczeń i analiz dla systemów zasilania oraz sieci elektrycznych.",
                    "en" => "Performing calculations and analysis for power supply systems and electrical networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22822,
                "name" => json_encode([
                    "pl" => "Nadzorowanie instalacji i serwisowania urządzeń elektrycznych w budynkach i obiektach przemysłowych.",
                    "en" => "Supervising the installation and servicing of electrical devices in buildings and industrial facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22823,
                "name" => json_encode([
                    "pl" => "Koordynowanie prac związanych z modernizacją i rozbudową instalacji elektrycznych.",
                    "en" => "Coordinating work related to the modernization and expansion of electrical installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22824,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej dotyczącej instalacji elektrycznych oraz projektów.",
                    "en" => "Maintaining technical documentation for electrical installations and projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_ELEKTRYK_AUTOMATYK = [

            [
                "id" => 22825,
                "name" => json_encode([
                    "pl" => "Projektowanie i nadzorowanie instalacji automatyki przemysłowej oraz systemów zasilania elektrycznego.",
                    "en" => "Designing and supervising industrial automation systems and electrical power supply systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22826,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie systemów sterowania procesami przemysłowymi.",
                    "en" => "Developing and implementing industrial process control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22827,
                "name" => json_encode([
                    "pl" => "Koordynowanie montażu i konserwacji systemów automatyki w zakładach przemysłowych.",
                    "en" => "Coordinating the installation and maintenance of automation systems in industrial plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22828,
                "name" => json_encode([
                    "pl" => "Monitorowanie wydajności systemów automatyki oraz proponowanie usprawnień.",
                    "en" => "Monitoring the performance of automation systems and suggesting improvements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22829,
                "name" => json_encode([
                    "pl" => "Analiza i projektowanie układów elektrycznych w systemach automatyki.",
                    "en" => "Analyzing and designing electrical circuits in automation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22830,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej systemów automatyki i zasilania elektrycznego.",
                    "en" => "Maintaining technical documentation for automation and electrical power supply systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_TECHNIKI_ŚWIETLNEJ = [

            [
                "id" => 22831,
                "name" => json_encode([
                    "pl" => "Projektowanie i wdrażanie systemów oświetleniowych, w tym projektowanie iluminacji zewnętrznych i wewnętrznych.",
                    "en" => "Designing and implementing lighting systems, including designing exterior and interior illuminations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22832,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich źródeł światła, osprzętu oraz systemów sterowania oświetleniem.",
                    "en" => "Selecting appropriate light sources, equipment, and lighting control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22833,
                "name" => json_encode([
                    "pl" => "Optymalizacja efektywności energetycznej systemów oświetleniowych.",
                    "en" => "Optimizing energy efficiency of lighting systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22834,
                "name" => json_encode([
                    "pl" => "Projektowanie i realizacja systemów oświetlenia awaryjnego, ewakuacyjnego oraz sygnalizacji świetlnej.",
                    "en" => "Designing and implementing emergency, evacuation, and traffic signal lighting systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22835,
                "name" => json_encode([
                    "pl" => "Kontrola jakości i bezpieczeństwa wykonanych instalacji oświetleniowych oraz zgodności z normami.",
                    "en" => "Quality and safety control of completed lighting installations and ensuring compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22836,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji projektowej i wykonawczej systemów oświetleniowych.",
                    "en" => "Maintaining design and execution documentation for lighting systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_URZĄDZEŃ_I_SYSTEMÓW_ENERGETYKI_ODNAWIALNEJ = [

            [
                "id" => 22837,
                "name" => json_encode([
                    "pl" => "Projektowanie, instalacja i nadzór nad systemami energetyki odnawialnej, w tym fotowoltaicznymi, wiatrowymi i geotermalnymi.",
                    "en" => "Designing, installing, and supervising renewable energy systems, including photovoltaic, wind, and geothermal systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22838,
                "name" => json_encode([
                    "pl" => "Analizowanie i ocena opłacalności inwestycji w energię odnawialną.",
                    "en" => "Analyzing and evaluating the profitability of investments in renewable energy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22839,
                "name" => json_encode([
                    "pl" => "Optymalizacja pracy urządzeń i systemów energetyki odnawialnej w celu zwiększenia efektywności energetycznej.",
                    "en" => "Optimizing the operation of renewable energy devices and systems to improve energy efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22840,
                "name" => json_encode([
                    "pl" => "Nadzór nad instalacjami i systemami energii odnawialnej, w tym kontrola jakości wykonania i bezpieczeństwa.",
                    "en" => "Supervising renewable energy installations and systems, including quality and safety control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22841,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów wydajnościowych oraz monitorowanie parametrów pracy systemów energetyki odnawialnej.",
                    "en" => "Conducting performance tests and monitoring operational parameters of renewable energy systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22842,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji projektowej, serwisowej i eksploatacyjnej systemów energetyki odnawialnej.",
                    "en" => "Maintaining design, service, and operational documentation for renewable energy systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_INŻYNIEROWIE_ELEKTRYCY = [

            [
                "id" => 22843,
                "name" => json_encode([
                    "pl" => "Projektowanie, montaż oraz konserwacja systemów elektrycznych w budynkach i zakładach przemysłowych.",
                    "en" => "Designing, installing, and maintaining electrical systems in buildings and industrial plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22844,
                "name" => json_encode([
                    "pl" => "Analiza i optymalizacja instalacji elektrycznych pod kątem efektywności energetycznej.",
                    "en" => "Analyzing and optimizing electrical installations for energy efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22845,
                "name" => json_encode([
                    "pl" => "Nadzór nad instalacją i uruchamianiem urządzeń elektrycznych w zakładach przemysłowych.",
                    "en" => "Supervising the installation and commissioning of electrical devices in industrial plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22846,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji oraz testów elektrycznych urządzeń i instalacji.",
                    "en" => "Conducting inspections and electrical tests on devices and installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22847,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie nowych technologii elektrycznych w procesach przemysłowych.",
                    "en" => "Developing and implementing new electrical technologies in industrial processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22848,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej oraz raportowanie wykonanych projektów i instalacji.",
                    "en" => "Maintaining technical documentation and reporting on completed projects and installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_INSTALACJI_ELEKTRYCZNYCH = [

            [
                "id" => 22849,
                "name" => json_encode([
                    "pl" => "Montaż, instalacja i konserwacja systemów elektrycznych w budynkach mieszkalnych i przemysłowych.",
                    "en" => "Installation, assembly, and maintenance of electrical systems in residential and industrial buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22850,
                "name" => json_encode([
                    "pl" => "Instalowanie okablowania, urządzeń, gniazdek, oświetlenia i innych elementów instalacji elektrycznych.",
                    "en" => "Installing wiring, devices, sockets, lighting, and other components of electrical installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22851,
                "name" => json_encode([
                    "pl" => "Wykonywanie pomiarów elektrycznych oraz testowanie instalacji pod kątem bezpieczeństwa i efektywności.",
                    "en" => "Performing electrical measurements and testing installations for safety and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22852,
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i modernizacja istniejących instalacji elektrycznych.",
                    "en" => "Repair, maintenance, and modernization of existing electrical installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22853,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów szczelności instalacji elektrycznych oraz usuwanie usterek.",
                    "en" => "Performing tightness tests on electrical installations and troubleshooting faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22854,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej i serwisowej związanej z instalacjami elektrycznymi.",
                    "en" => "Maintaining technical and service documentation related to electrical installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_REKLAM_ŚWIETLNYCH = [

            [
                "id" => 22855,
                "name" => json_encode([
                    "pl" => "Montaż, instalacja i konserwacja reklam świetlnych, neonów i innych elementów oświetleniowych.",
                    "en" => "Installation, assembly, and maintenance of lighted advertisements, neon signs, and other lighting elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22856,
                "name" => json_encode([
                    "pl" => "Podłączanie systemów oświetleniowych w reklamach świetlnych do instalacji elektrycznych.",
                    "en" => "Connecting lighting systems in lighted advertisements to electrical installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22857,
                "name" => json_encode([
                    "pl" => "Wykonywanie napraw i konserwacji instalacji elektrycznych reklam świetlnych.",
                    "en" => "Repair and maintenance of electrical installations for lighted advertisements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22858,
                "name" => json_encode([
                    "pl" => "Sprawdzanie jakości i efektywności działania oświetlenia w reklamach świetlnych.",
                    "en" => "Checking the quality and effectiveness of lighting in lighted advertisements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22859,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji instalacyjnej i serwisowej systemów oświetlenia reklam świetlnych.",
                    "en" => "Maintaining installation and service documentation for lighted advertisement lighting systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22860,
                "name" => json_encode([
                    "pl" => "Wykonywanie testów funkcjonalności i bezpieczeństwa instalacji elektrycznych w reklamach świetlnych.",
                    "en" => "Conducting functionality and safety tests of electrical installations in lighted advertisements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTRYK_BUDOWLANY = [

            [
                "id" => 22861,
                "name" => json_encode([
                    "pl" => "Instalacja elektryczna w budynkach mieszkalnych, biurowych i przemysłowych, w tym okablowanie, oświetlenie, gniazda.",
                    "en" => "Electrical installation in residential, office, and industrial buildings, including wiring, lighting, sockets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22862,
                "name" => json_encode([
                    "pl" => "Podłączanie urządzeń elektrycznych i oświetleniowych w budynkach zgodnie z projektem.",
                    "en" => "Connecting electrical and lighting devices in buildings according to the design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22863,
                "name" => json_encode([
                    "pl" => "Wykonywanie pomiarów elektrycznych, testowanie instalacji pod kątem efektywności i bezpieczeństwa.",
                    "en" => "Performing electrical measurements, testing installations for efficiency and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22864,
                "name" => json_encode([
                    "pl" => "Naprawa i modernizacja istniejących instalacji elektrycznych w budynkach.",
                    "en" => "Repair and modernization of existing electrical installations in buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22865,
                "name" => json_encode([
                    "pl" => "Wykonywanie prób szczelności instalacji elektrycznych oraz usuwanie usterek.",
                    "en" => "Performing tests for electrical installations and troubleshooting faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22866,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z instalacjami elektrycznymi.",
                    "en" => "Maintaining documentation related to electrical installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ELEKTRYCY_BUDOWLANI_I_POKREWNI = [

            [
                "id" => 22867,
                "name" => json_encode([
                    "pl" => "Instalacja okablowania, gniazdek, przełączników, oświetlenia w budynkach mieszkalnych i przemysłowych.",
                    "en" => "Wiring, socket, switch, and lighting installations in residential and industrial buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22868,
                "name" => json_encode([
                    "pl" => "Wykonywanie napraw instalacji elektrycznych, w tym wymiana kabli, urządzeń i instalowanie nowych komponentów.",
                    "en" => "Repairing electrical installations, including replacing cables, devices, and installing new components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22869,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów szczelności i bezpieczeństwa instalacji elektrycznych w budynkach.",
                    "en" => "Conducting tests for the tightness and safety of electrical installations in buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22870,
                "name" => json_encode([
                    "pl" => "Nadzorowanie i kontrolowanie jakości wykonanych instalacji elektrycznych na budowie.",
                    "en" => "Supervising and controlling the quality of electrical installations on construction sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22871,
                "name" => json_encode([
                    "pl" => "Sprawdzanie, konserwacja i testowanie urządzeń elektrycznych w budynkach.",
                    "en" => "Inspecting, maintaining, and testing electrical devices in buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22872,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji montażowej i serwisowej instalacji elektrycznych.",
                    "en" => "Maintaining installation and service documentation for electrical installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMECHANIK_ELEKTRYCZNYCH_PRZYRZĄDÓW_POMIAROWYCH = [

            [
                "id" => 22873,
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa elektrycznych przyrządów pomiarowych, takich jak mierniki, sondy, czujniki.",
                    "en" => "Installation, maintenance, and repair of electrical measuring instruments, such as meters, probes, sensors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22874,
                "name" => json_encode([
                    "pl" => "Kalibracja i testowanie przyrządów pomiarowych w celu zapewnienia ich dokładności.",
                    "en" => "Calibration and testing of measuring instruments to ensure their accuracy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22875,
                "name" => json_encode([
                    "pl" => "Naprawa i wymiana uszkodzonych elementów przyrządów pomiarowych.",
                    "en" => "Repair and replacement of damaged components in measuring instruments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22876,
                "name" => json_encode([
                    "pl" => "Instalacja i konfiguracja systemów przyrządów pomiarowych w różnych urządzeniach przemysłowych.",
                    "en" => "Installation and configuration of measuring instrument systems in various industrial devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22877,
                "name" => json_encode([
                    "pl" => "Wykonywanie testów funkcjonalnych przyrządów pomiarowych w celu zapewnienia ich niezawodności.",
                    "en" => "Performing functionality tests of measuring instruments to ensure their reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22878,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej oraz raportów dotyczących konserwacji i napraw przyrządów pomiarowych.",
                    "en" => "Maintaining service documentation and reports on the maintenance and repair of measuring instruments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMECHANIK_POJAZDÓW_SAMOCHODOWYCH = [

            [
                "id" => 22879,
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i diagnostyka elektrycznych układów pojazdów samochodowych.",
                    "en" => "Repair, maintenance, and diagnostics of electrical systems in motor vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22880,
                "name" => json_encode([
                    "pl" => "Instalowanie i naprawianie urządzeń elektrycznych w pojazdach, takich jak alternatory, rozruszniki i układy oświetleniowe.",
                    "en" => "Installing and repairing electrical devices in vehicles, such as alternators, starters, and lighting systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22881,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek elektrycznych w pojazdach oraz ich naprawa.",
                    "en" => "Diagnosing and repairing electrical faults in vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22882,
                "name" => json_encode([
                    "pl" => "Testowanie i sprawdzanie efektywności elektrycznych układów w pojazdach.",
                    "en" => "Testing and checking the efficiency of electrical systems in vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22883,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja systemów elektrycznych w pojazdach, w tym instalacja nowych urządzeń.",
                    "en" => "Repair and maintenance of electrical systems in vehicles, including installation of new devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22884,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji napraw i konserwacji systemów elektrycznych w pojazdach.",
                    "en" => "Maintaining documentation of repairs and maintenance of electrical systems in vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMECHANIK_SPRZĘTU_GOSPODARSTWA_DOMOWEGO = [

            [
                "id" => 22885,
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i diagnostyka elektrycznych urządzeń gospodarstwa domowego, takich jak pralki, lodówki, odkurzacze.",
                    "en" => "Repair, maintenance, and diagnostics of electrical household appliances, such as washing machines, refrigerators, vacuum cleaners."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22886,
                "name" => json_encode([
                    "pl" => "Instalowanie i naprawianie systemów elektrycznych w urządzeniach gospodarstwa domowego.",
                    "en" => "Installing and repairing electrical systems in household appliances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22887,
                "name" => json_encode([
                    "pl" => "Sprawdzanie i testowanie funkcjonalności urządzeń elektrycznych w gospodarstwie domowym.",
                    "en" => "Testing and checking the functionality of electrical appliances in household use."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22888,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja elementów elektrycznych urządzeń gospodarstwa domowego.",
                    "en" => "Repair and maintenance of electrical components in household appliances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22889,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z naprawą i konserwacją sprzętu elektrycznego.",
                    "en" => "Maintaining documentation related to the repair and maintenance of electrical equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22890,
                "name" => json_encode([
                    "pl" => "Instalacja nowych urządzeń elektrycznych w gospodarstwach domowych.",
                    "en" => "Installing new electrical devices in households."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMECHANIK_URZĄDZEŃ_CHŁODNICZYCH = [

            [
                "id" => 22891,
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i diagnostyka urządzeń chłodniczych, takich jak lodówki, klimatyzatory, chłodnice przemysłowe.",
                    "en" => "Repair, maintenance, and diagnostics of refrigeration devices, such as refrigerators, air conditioners, and industrial coolers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22892,
                "name" => json_encode([
                    "pl" => "Instalacja nowych urządzeń chłodniczych oraz systemów chłodzenia w różnych sektorach przemysłowych.",
                    "en" => "Installing new refrigeration devices and cooling systems in various industrial sectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22893,
                "name" => json_encode([
                    "pl" => "Sprawdzanie wydajności i efektywności urządzeń chłodniczych oraz systemów chłodzenia.",
                    "en" => "Checking the efficiency and performance of refrigeration devices and cooling systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22894,
                "name" => json_encode([
                    "pl" => "Naprawa awarii i wymiana uszkodzonych części urządzeń chłodniczych.",
                    "en" => "Repairing malfunctions and replacing damaged parts of refrigeration devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22895,
                "name" => json_encode([
                    "pl" => "Testowanie szczelności systemów chłodniczych oraz ich sprawności.",
                    "en" => "Testing the tightness of refrigeration systems and their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22896,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej oraz raportowanie wykonanych napraw i konserwacji urządzeń chłodniczych.",
                    "en" => "Maintaining service documentation and reporting on completed repairs and maintenance of refrigeration devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMECHANIK_URZĄDZEŃ_STEROWANIA_RUCHEM_KOLEJOWYM = [

            [
                "id" => 22897,
                "name" => json_encode([
                    "pl" => "Instalacja, naprawa i konserwacja urządzeń sterowania ruchem kolejowym, takich jak semafory, sygnalizatory i systemy sterowania.",
                    "en" => "Installation, repair, and maintenance of railway signaling and control devices, such as signals, indicators, and control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22898,
                "name" => json_encode([
                    "pl" => "Diagnozowanie usterek w systemach sterowania ruchem kolejowym i ich naprawa.",
                    "en" => "Diagnosing faults in railway control systems and repairing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22899,
                "name" => json_encode([
                    "pl" => "Testowanie urządzeń sterowania ruchem kolejowym, w tym systemów sygnalizacyjnych i zabezpieczeń.",
                    "en" => "Testing railway control devices, including signaling systems and safety measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22900,
                "name" => json_encode([
                    "pl" => "Prowadzenie konserwacji urządzeń sterowania ruchem kolejowym, w tym wymiana zużytych elementów.",
                    "en" => "Maintaining railway control devices, including replacing worn-out components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22901,
                "name" => json_encode([
                    "pl" => "Sprawdzanie bezpieczeństwa i funkcjonalności systemów sterowania ruchem kolejowym.",
                    "en" => "Checking the safety and functionality of railway control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22902,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej i raportowanie działań związanych z urządzeniami sterowania ruchem kolejowym.",
                    "en" => "Maintaining service documentation and reporting on activities related to railway control devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_ELEKTRYK_ZAKŁADOWY = [

            [
                "id" => 22903,
                "name" => json_encode([
                    "pl" => "Instalacja, naprawa i konserwacja urządzeń elektrycznych w zakładach przemysłowych, w tym instalacje oświetleniowe, gniazdka, urządzenia sterujące.",
                    "en" => "Installation, repair, and maintenance of electrical equipment in industrial plants, including lighting installations, sockets, control devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22904,
                "name" => json_encode([
                    "pl" => "Nadzór nad sprawnością i bezpieczeństwem instalacji elektrycznych w zakładzie produkcyjnym.",
                    "en" => "Supervising the functionality and safety of electrical installations in the production plant."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22905,
                "name" => json_encode([
                    "pl" => "Wykonywanie pomiarów elektrycznych oraz testowanie instalacji pod kątem efektywności i bezpieczeństwa.",
                    "en" => "Performing electrical measurements and testing installations for efficiency and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22906,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń elektrycznych, w tym wymiana uszkodzonych części i komponentów.",
                    "en" => "Repair and maintenance of electrical equipment, including replacing damaged parts and components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22907,
                "name" => json_encode([
                    "pl" => "Zarządzanie projektami modernizacji instalacji elektrycznych w zakładzie przemysłowym.",
                    "en" => "Managing electrical installation modernization projects in the industrial plant."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22908,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej i raportowanie wykonanych napraw i konserwacji instalacji elektrycznych.",
                    "en" => "Maintaining service documentation and reporting on completed repairs and maintenance of electrical installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_KONSERWATOR_URZĄDZEŃ_DŹWIGNICOWYCH = [

            [
                "id" => 22909,
                "name" => json_encode([
                    "pl" => "Montaż, naprawa, konserwacja i diagnostyka urządzeń dźwignicowych, takich jak suwnice, windy, wciągniki.",
                    "en" => "Installation, repair, maintenance, and diagnostics of lifting equipment such as cranes, hoists, and winches."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22910,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów wydajnościowych urządzeń dźwignicowych oraz ich naprawa po awarii.",
                    "en" => "Performing performance tests on lifting devices and repairing them after failures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22911,
                "name" => json_encode([
                    "pl" => "Sprawdzanie stanu technicznego urządzeń dźwignicowych oraz ich zgodności z normami bezpieczeństwa.",
                    "en" => "Checking the technical condition of lifting devices and ensuring compliance with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22912,
                "name" => json_encode([
                    "pl" => "Wykonywanie napraw dźwignic, wymiana uszkodzonych części oraz konserwacja mechanizmów napędowych.",
                    "en" => "Repairing cranes, replacing damaged parts, and maintaining drive mechanisms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22913,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji konserwacyjnej urządzeń dźwignicowych oraz raportowanie napraw i przeglądów.",
                    "en" => "Maintaining maintenance documentation for lifting equipment and reporting repairs and inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22914,
                "name" => json_encode([
                    "pl" => "Koordynowanie prac konserwacyjnych urządzeń dźwignicowych oraz nadzór nad ich funkcjonowaniem.",
                    "en" => "Coordinating maintenance work on lifting devices and supervising their operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_LOTNICZY = [

            [
                "id" => 22915,
                "name" => json_encode([
                    "pl" => "Montaż, naprawa i konserwacja systemów elektrycznych w samolotach i innych pojazdach lotniczych.",
                    "en" => "Installation, repair, and maintenance of electrical systems in aircraft and other aviation vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22916,
                "name" => json_encode([
                    "pl" => "Diagnostyka i naprawa awarii elektrycznych w systemach pokładowych statków powietrznych.",
                    "en" => "Diagnostics and repair of electrical faults in aircraft onboard systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22917,
                "name" => json_encode([
                    "pl" => "Testowanie i kalibracja urządzeń elektrycznych w samolotach, w tym systemów sterowania i oświetlenia.",
                    "en" => "Testing and calibration of electrical devices in aircraft, including control and lighting systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22918,
                "name" => json_encode([
                    "pl" => "Instalowanie nowych systemów elektrycznych w samolotach i innych jednostkach lotniczych.",
                    "en" => "Installing new electrical systems in aircraft and other aviation units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22919,
                "name" => json_encode([
                    "pl" => "Sprawdzanie zgodności instalacji elektrycznych w samolotach z normami bezpieczeństwa lotniczego.",
                    "en" => "Checking the compliance of electrical installations in aircraft with aviation safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22920,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej związanej z instalacjami elektrycznymi w pojazdach lotniczych.",
                    "en" => "Maintaining service documentation related to electrical installations in aviation vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_MASZYN_ELEKTRYCZNYCH = [

            [
                "id" => 22921,
                "name" => json_encode([
                    "pl" => "Montaż, naprawa i konserwacja maszyn elektrycznych, w tym silników, generatorów i innych urządzeń przemysłowych.",
                    "en" => "Installation, repair, and maintenance of electrical machines, including motors, generators, and other industrial equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22922,
                "name" => json_encode([
                    "pl" => "Diagnozowanie usterek maszyn elektrycznych oraz ich naprawa.",
                    "en" => "Diagnosing faults in electrical machines and repairing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22923,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów elektrycznych maszyn oraz sprawdzanie ich sprawności.",
                    "en" => "Performing electrical tests on machines and checking their functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22924,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja silników elektrycznych oraz innych maszyn wymagających interwencji serwisowej.",
                    "en" => "Repair and maintenance of electric motors and other machines requiring service intervention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22925,
                "name" => json_encode([
                    "pl" => "Instalowanie nowych maszyn elektrycznych oraz ich integracja z systemami przemysłowymi.",
                    "en" => "Installing new electrical machines and integrating them into industrial systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22926,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji napraw maszyn elektrycznych oraz przeprowadzanie okresowych przeglądów.",
                    "en" => "Maintaining repair documentation for electrical machines and conducting regular inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_MASZYN_I_URZĄDZEŃ_GÓRNICTWA_ODKRYWKOWEGO = [

            [
                "id" => 22927,
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa maszyn i urządzeń wykorzystywanych w górnictwie odkrywkowym, takich jak koparki, wozidła, wiertnice.",
                    "en" => "Installation, maintenance, and repair of machines and equipment used in surface mining, such as excavators, haul trucks, drills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22928,
                "name" => json_encode([
                    "pl" => "Naprawa i modernizacja maszyn górniczych, w tym wymiana zużytych części i urządzeń.",
                    "en" => "Repair and modernization of mining machinery, including replacement of worn parts and devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22929,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek maszyn górniczych i ich naprawa.",
                    "en" => "Diagnosing faults in mining machinery and repairing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22930,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów maszyn górniczych pod kątem bezpieczeństwa i wydajności.",
                    "en" => "Performing tests on mining machines for safety and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22931,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej maszyn górniczych oraz raportowanie wykonanych napraw.",
                    "en" => "Maintaining technical documentation for mining machines and reporting completed repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22932,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w zakresie konserwacji i napraw maszyn górniczych.",
                    "en" => "Collaborating with other departments in the maintenance and repair of mining machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_MASZYN_I_URZĄDZEŃ_GÓRNICTWA_PODZIEMNEGO = [

            [
                "id" => 22933,
                "name" => json_encode([
                    "pl" => "Montaż, naprawa i konserwacja maszyn i urządzeń elektrycznych wykorzystywanych w górnictwie podziemnym, takich jak przenośniki, wentylatory, wiertnice.",
                    "en" => "Installation, repair, and maintenance of electrical machines and equipment used in underground mining, such as conveyors, fans, drills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22934,
                "name" => json_encode([
                    "pl" => "Diagnozowanie usterek elektrycznych w maszynach górniczych i ich naprawa.",
                    "en" => "Diagnosing electrical faults in mining machinery and repairing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22935,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów wydajnościowych i bezpieczeństwa urządzeń elektrycznych w górnictwie podziemnym.",
                    "en" => "Performing performance and safety tests on electrical equipment in underground mining."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22936,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń elektrycznych w kopalniach, w tym instalacja nowych elementów systemów zasilania.",
                    "en" => "Repair and maintenance of electrical equipment in mines, including installing new power supply system components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22937,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami technicznymi w zakresie modernizacji i rozbudowy systemów elektrycznych w górnictwie.",
                    "en" => "Cooperating with technical teams in the modernization and expansion of electrical systems in mining."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22938,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej i raportowanie awarii oraz działań naprawczych maszyn górniczych.",
                    "en" => "Maintaining service documentation and reporting breakdowns and repair actions of mining machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_OKRĘTOWY = [

            [
                "id" => 22939,
                "name" => json_encode([
                    "pl" => "Montaż, naprawa i konserwacja urządzeń elektrycznych w jednostkach pływających, takich jak systemy zasilania, oświetlenia, nawigacji.",
                    "en" => "Installation, repair, and maintenance of electrical equipment in floating units, such as power supply, lighting, and navigation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22940,
                "name" => json_encode([
                    "pl" => "Testowanie, regulowanie i konserwacja systemów elektrycznych na statkach, w tym urządzeń sterujących i alarmowych.",
                    "en" => "Testing, adjusting, and maintaining electrical systems on ships, including control and alarm devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22941,
                "name" => json_encode([
                    "pl" => "Naprawa urządzeń elektrycznych na jednostkach pływających, takich jak silniki, systemy komunikacyjne, urządzenia nawigacyjne.",
                    "en" => "Repairing electrical devices on floating units, such as motors, communication systems, and navigation devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22942,
                "name" => json_encode([
                    "pl" => "Wykonywanie testów funkcjonalnych i bezpieczeństwa systemów elektrycznych w statkach.",
                    "en" => "Performing functionality and safety tests on electrical systems in ships."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22943,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej dotyczącej instalacji elektrycznych na statkach.",
                    "en" => "Maintaining service documentation for electrical installations on ships."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22944,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań konserwacyjnych i naprawczych urządzeń elektrycznych na jednostkach pływających.",
                    "en" => "Coordinating maintenance and repair activities of electrical devices on floating units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_PREFABRYKOWANYCH_STACJI_TRANSFORMATOROWYCH = [

            [
                "id" => 22945,
                "name" => json_encode([
                    "pl" => "Montaż i instalacja prefabrykowanych stacji transformatorowych, w tym podłączenie urządzeń i okablowanie.",
                    "en" => "Installation and assembly of prefabricated transformer stations, including connecting devices and wiring."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22946,
                "name" => json_encode([
                    "pl" => "Wykonywanie testów oraz pomiarów elektrycznych w stacjach transformatorowych.",
                    "en" => "Performing electrical tests and measurements in transformer stations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22947,
                "name" => json_encode([
                    "pl" => "Instalowanie systemów sterowania oraz automatyki w prefabrykowanych stacjach transformatorowych.",
                    "en" => "Installing control systems and automation in prefabricated transformer stations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22948,
                "name" => json_encode([
                    "pl" => "Prowadzenie konserwacji i napraw urządzeń elektrycznych w stacjach transformatorowych.",
                    "en" => "Maintaining and repairing electrical equipment in transformer stations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22949,
                "name" => json_encode([
                    "pl" => "Sprawdzanie poprawności działania stacji transformatorowych oraz ich efektywności energetycznej.",
                    "en" => "Checking the functionality of transformer stations and their energy efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22950,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej instalacji oraz przeglądów urządzeń w stacjach transformatorowych.",
                    "en" => "Maintaining technical documentation for installations and inspections of equipment in transformer stations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_ROZDZIELNI_I_PODSTACJI_TRAKCYJNYCH = [

            [
                "id" => 22951,
                "name" => json_encode([
                    "pl" => "Instalacja i konserwacja urządzeń elektrycznych w rozdzielniach i podstacjach trakcyjnych, w tym urządzenia do przesyłania energii elektrycznej.",
                    "en" => "Installation and maintenance of electrical equipment in substations and traction substations, including energy transmission devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22952,
                "name" => json_encode([
                    "pl" => "Naprawa urządzeń w rozdzielniach i podstacjach trakcyjnych, w tym systemów sterowania i zabezpieczeń.",
                    "en" => "Repairing equipment in substations and traction substations, including control systems and safety devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22953,
                "name" => json_encode([
                    "pl" => "Prowadzenie testów wydajnościowych oraz sprawdzanie parametrów systemów elektrycznych w podstacjach trakcyjnych.",
                    "en" => "Performing performance tests and checking the parameters of electrical systems in traction substations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22954,
                "name" => json_encode([
                    "pl" => "Wykonywanie pomiarów elektrycznych w rozdzielniach i podstacjach trakcyjnych.",
                    "en" => "Performing electrical measurements in substations and traction substations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22955,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z instalacjami elektrycznymi w podstacjach trakcyjnych.",
                    "en" => "Maintaining documentation related to electrical installations in traction substations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22956,
                "name" => json_encode([
                    "pl" => "Koordynowanie konserwacji i modernizacji urządzeń elektrycznych w rozdzielniach i podstacjach trakcyjnych.",
                    "en" => "Coordinating the maintenance and modernization of electrical equipment in substations and traction substations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_TABORU_SZYNOWEGO = [

            [
                "id" => 22957,
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa systemów elektrycznych w taborze szynowym, w tym systemów zasilania, oświetlenia i sterowania.",
                    "en" => "Installation, maintenance, and repair of electrical systems in rail rolling stock, including power supply, lighting, and control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22958,
                "name" => json_encode([
                    "pl" => "Naprawa i modernizacja elektrycznych układów zasilania w taborze szynowym.",
                    "en" => "Repair and modernization of electrical power systems in rail rolling stock."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22959,
                "name" => json_encode([
                    "pl" => "Testowanie i kontrola bezpieczeństwa systemów elektrycznych w taborze szynowym.",
                    "en" => "Testing and safety control of electrical systems in rail rolling stock."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22960,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej urządzeń elektrycznych w taborze szynowym.",
                    "en" => "Maintaining technical documentation for electrical devices in rail rolling stock."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22961,
                "name" => json_encode([
                    "pl" => "Koordynowanie konserwacji i testów urządzeń elektrycznych w taborze szynowym.",
                    "en" => "Coordinating the maintenance and testing of electrical devices in rail rolling stock."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22962,
                "name" => json_encode([
                    "pl" => "Naprawa systemów elektrycznych w taborze szynowym, w tym instalacja nowych komponentów.",
                    "en" => "Repairing electrical systems in rail rolling stock, including installing new components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_TELEKOMUNIKACYJNYCH_URZĄDZEŃ_ZASILAJĄCYCH = [

            [
                "id" => 22963,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja i naprawa urządzeń zasilających w systemach telekomunikacyjnych, w tym baterii, zasilaczy i systemów UPS.",
                    "en" => "Installation, maintenance, and repair of power supply devices in telecommunication systems, including batteries, power supplies, and UPS systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22964,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w systemach zasilania telekomunikacyjnego oraz ich naprawa.",
                    "en" => "Diagnosing faults in telecommunication power systems and repairing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22965,
                "name" => json_encode([
                    "pl" => "Testowanie i kalibracja urządzeń zasilających oraz systemów kontroli napięcia w telekomunikacji.",
                    "en" => "Testing and calibrating power supply devices and voltage control systems in telecommunications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22966,
                "name" => json_encode([
                    "pl" => "Prowadzenie konserwacji systemów zasilania w centrach danych telekomunikacyjnych.",
                    "en" => "Maintaining power supply systems in telecommunication data centers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22967,
                "name" => json_encode([
                    "pl" => "Naprawa urządzeń zasilających i systemów telekomunikacyjnych w razie awarii.",
                    "en" => "Repairing power supply devices and telecommunication systems in case of failures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22968,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej i raportowanie wykonanych napraw i konserwacji urządzeń zasilających.",
                    "en" => "Maintaining service documentation and reporting repairs and maintenance of power supply devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_TRANSFORMATORÓW = [

            [
                "id" => 22969,
                "name" => json_encode([
                    "pl" => "Montaż, naprawa i konserwacja transformatorów elektrycznych, w tym transformatorów mocy i napięcia.",
                    "en" => "Installation, repair, and maintenance of electrical transformers, including power and voltage transformers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22970,
                "name" => json_encode([
                    "pl" => "Diagnostyka oraz naprawa uszkodzeń transformatorów i urządzeń pomocniczych.",
                    "en" => "Diagnosing and repairing faults in transformers and auxiliary equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22971,
                "name" => json_encode([
                    "pl" => "Testowanie transformatorów, pomiar parametrów elektrycznych oraz ich optymalizacja.",
                    "en" => "Testing transformers, measuring electrical parameters, and optimizing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22972,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów transformatorów pod kątem ich efektywności energetycznej.",
                    "en" => "Performing tests on transformers to assess their energy efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22973,
                "name" => json_encode([
                    "pl" => "Prowadzenie prac konserwacyjnych, w tym czyszczenie, smarowanie i wymiana olejów w transformatorach.",
                    "en" => "Performing maintenance tasks, including cleaning, lubricating, and oil replacement in transformers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22974,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej konserwacji, testów i napraw transformatorów.",
                    "en" => "Maintaining documentation regarding maintenance, tests, and repairs of transformers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_UKŁADÓW_POMIAROWYCH_I_AUTOMATYKI_ZABEZPIECZENIOWEJ = [

            [
                "id" => 22975,
                "name" => json_encode([
                    "pl" => "Instalacja, naprawa i konserwacja układów pomiarowych oraz systemów automatyki zabezpieczeniowej w różnych sektorach przemysłowych.",
                    "en" => "Installation, repair, and maintenance of measurement systems and safety automation in various industrial sectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22976,
                "name" => json_encode([
                    "pl" => "Wykonywanie testów i kalibracja urządzeń pomiarowych oraz systemów zabezpieczeń.",
                    "en" => "Performing tests and calibrating measurement devices and safety systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22977,
                "name" => json_encode([
                    "pl" => "Naprawa i modernizacja systemów pomiarowych oraz urządzeń zabezpieczających przed awariami.",
                    "en" => "Repair and modernization of measurement systems and failure-prevention devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22978,
                "name" => json_encode([
                    "pl" => "Testowanie i ocena wydajności systemów zabezpieczeń, takich jak systemy alarmowe i detekcji.",
                    "en" => "Testing and evaluating the performance of safety systems, such as alarm and detection systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22979,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji pomiarowej oraz raportowanie wyników testów i napraw systemów pomiarowych.",
                    "en" => "Maintaining measurement documentation and reporting test results and repairs of measurement systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22980,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z modernizacją systemów zabezpieczeń i pomiarów.",
                    "en" => "Coordinating activities related to the modernization of safety and measurement systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_URZĄDZEŃ_SYGNALIZACYJNYCH = [

            [
                "id" => 22981,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja i naprawa urządzeń sygnalizacyjnych, takich jak sygnalizatory świetlne, dźwiękowe i systemy alarmowe.",
                    "en" => "Installation, maintenance, and repair of signaling devices, such as light signals, sound signals, and alarm systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22982,
                "name" => json_encode([
                    "pl" => "Testowanie urządzeń sygnalizacyjnych pod kątem ich sprawności i poprawności działania.",
                    "en" => "Testing signaling devices for their functionality and proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22983,
                "name" => json_encode([
                    "pl" => "Naprawa uszkodzeń w systemach sygnalizacyjnych, wymiana uszkodzonych komponentów.",
                    "en" => "Repairing faults in signaling systems, replacing damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22984,
                "name" => json_encode([
                    "pl" => "Prowadzenie testów i regulacji systemów sygnalizacyjnych w różnych środowiskach przemysłowych.",
                    "en" => "Performing tests and adjustments of signaling systems in various industrial environments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22985,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji systemów sygnalizacji świetlnej i dźwiękowej.",
                    "en" => "Maintaining light and sound signaling systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22986,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej i raportowanie wyników testów oraz napraw systemów sygnalizacyjnych.",
                    "en" => "Maintaining service documentation and reporting test results and repairs of signaling systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ELEKTROMECHANICY_I_ELEKTROMONTERZY = [

            [
                "id" => 22987,
                "name" => json_encode([
                    "pl" => "Montaż, naprawa i konserwacja maszyn elektrycznych oraz urządzeń przemysłowych w różnych gałęziach przemysłu.",
                    "en" => "Installation, repair, and maintenance of electrical machines and industrial equipment in various industrial sectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22988,
                "name" => json_encode([
                    "pl" => "Instalowanie, modernizowanie i serwisowanie urządzeń elektrycznych w obiektach przemysłowych, budowlanych i innych.",
                    "en" => "Installing, modernizing, and servicing electrical devices in industrial, construction, and other facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22989,
                "name" => json_encode([
                    "pl" => "Diagnozowanie usterek w systemach elektrycznych oraz ich naprawa w różnych urządzeniach przemysłowych.",
                    "en" => "Diagnosing faults in electrical systems and repairing them in various industrial devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22990,
                "name" => json_encode([
                    "pl" => "Testowanie i sprawdzanie parametrów elektrycznych w urządzeniach oraz systemach przemysłowych.",
                    "en" => "Testing and checking electrical parameters in devices and industrial systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22991,
                "name" => json_encode([
                    "pl" => "Prowadzenie konserwacji oraz napraw systemów elektrycznych w przemyśle, w tym instalowanie nowych komponentów.",
                    "en" => "Maintaining and repairing electrical systems in industry, including installing new components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22992,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej i raportowanie napraw, konserwacji i modernizacji urządzeń elektrycznych.",
                    "en" => "Maintaining service documentation and reporting repairs, maintenance, and modernization of electrical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMECHANIK = [

            [
                "id" => 22993,
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja, naprawa i diagnostyka maszyn elektrycznych, w tym silników, generatorów oraz urządzeń przemysłowych.",
                    "en" => "Installation, maintenance, repair, and diagnostics of electrical machines, including motors, generators, and industrial devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22994,
                "name" => json_encode([
                    "pl" => "Wykonywanie napraw oraz konserwacji systemów elektrycznych, w tym wymiana uszkodzonych części i komponentów.",
                    "en" => "Performing repairs and maintenance on electrical systems, including replacing damaged parts and components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22995,
                "name" => json_encode([
                    "pl" => "Testowanie urządzeń elektrycznych i sprawdzanie ich efektywności energetycznej.",
                    "en" => "Testing electrical devices and checking their energy efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22996,
                "name" => json_encode([
                    "pl" => "Instalowanie nowych urządzeń elektrycznych, w tym systemów zasilania oraz urządzeń sterujących.",
                    "en" => "Installing new electrical devices, including power supply systems and control devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22997,
                "name" => json_encode([
                    "pl" => "Sprawdzanie stanu technicznego maszyn elektrycznych oraz przeprowadzanie niezbędnych napraw.",
                    "en" => "Checking the technical condition of electrical machines and performing necessary repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22998,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji napraw i konserwacji maszyn elektrycznych.",
                    "en" => "Maintaining repair and maintenance documentation for electrical machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_LINII_KABLOWYCH = [

            [
                "id" => 22999,
                "name" => json_encode([
                    "pl" => "Montaż, naprawa i konserwacja kabli i linii energetycznych, w tym instalowanie nowych linii kablowych.",
                    "en" => "Installation, repair, and maintenance of cables and power lines, including installing new cable lines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23000,
                "name" => json_encode([
                    "pl" => "Testowanie linii kablowych, sprawdzanie ich efektywności i wykrywanie usterek.",
                    "en" => "Testing cable lines, checking their efficiency, and detecting faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23001,
                "name" => json_encode([
                    "pl" => "Naprawa i modernizacja uszkodzonych linii kablowych oraz instalowanie nowych kabli.",
                    "en" => "Repair and modernization of damaged cable lines and installation of new cables."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23002,
                "name" => json_encode([
                    "pl" => "Montaż kabli energetycznych oraz ich podłączenie do urządzeń elektrycznych i transformatorów.",
                    "en" => "Installing power cables and connecting them to electrical devices and transformers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23003,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej dotyczącej instalacji kablowych oraz raportowanie awarii.",
                    "en" => "Maintaining service documentation for cable installations and reporting failures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23004,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z montażem i konserwacją linii kablowych.",
                    "en" => "Coordinating activities related to the installation and maintenance of cable lines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_NAPOWIETRZNYCH_LINII_NISKICH_I_ŚREDNICH_NAPIĘĆ = [

            [
                "id" => 23005,
                "name" => json_encode([
                    "pl" => "Montaż, naprawa i konserwacja napowietrznych linii energetycznych, w tym instalowanie słupów, przewodów oraz urządzeń zabezpieczających.",
                    "en" => "Installation, repair, and maintenance of overhead power lines, including installing poles, conductors, and protective devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23006,
                "name" => json_encode([
                    "pl" => "Testowanie i sprawdzanie parametrów napowietrznych linii energetycznych oraz monitorowanie ich wydajności.",
                    "en" => "Testing and checking the parameters of overhead power lines and monitoring their performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23007,
                "name" => json_encode([
                    "pl" => "Naprawa awarii w napowietrznych liniach energetycznych oraz wymiana uszkodzonych elementów.",
                    "en" => "Repairing faults in overhead power lines and replacing damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23008,
                "name" => json_encode([
                    "pl" => "Montaż nowych napowietrznych linii energetycznych oraz ich integracja z istniejącą siecią.",
                    "en" => "Installing new overhead power lines and integrating them into the existing network."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23009,
                "name" => json_encode([
                    "pl" => "Prowadzenie konserwacji napowietrznych linii energetycznych oraz sprawdzanie ich efektywności energetycznej.",
                    "en" => "Maintaining overhead power lines and checking their energy efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23010,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej i raportowanie awarii oraz napraw napowietrznych linii energetycznych.",
                    "en" => "Maintaining service documentation and reporting faults and repairs of overhead power lines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_NAPOWIETRZNYCH_LINII_WYSOKICH_I_NAJWYŻSZYCH_NAPIĘĆ = [

            [
                "id" => 23011,
                "name" => json_encode([
                    "pl" => "Montaż, naprawa i konserwacja napowietrznych linii energetycznych wysokiego i najwyższego napięcia, w tym instalacja słupów, przewodów i urządzeń.",
                    "en" => "Installation, repair, and maintenance of overhead high and extra-high voltage power lines, including poles, conductors, and devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23012,
                "name" => json_encode([
                    "pl" => "Testowanie, pomiar oraz sprawdzanie parametrów napowietrznych linii wysokiego i najwyższego napięcia.",
                    "en" => "Testing, measuring, and checking the parameters of overhead high and extra-high voltage power lines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23013,
                "name" => json_encode([
                    "pl" => "Naprawa awarii w napowietrznych liniach energetycznych, wymiana uszkodzonych elementów i modernizacja.",
                    "en" => "Repairing faults in overhead power lines, replacing damaged components, and modernization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23014,
                "name" => json_encode([
                    "pl" => "Wykonywanie testów bezpieczeństwa i wydajności linii energetycznych pod wysokim i najwyższym napięciem.",
                    "en" => "Performing safety and performance tests of power lines under high and extra-high voltage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23015,
                "name" => json_encode([
                    "pl" => "Sprawdzanie stanu technicznego napowietrznych linii energetycznych i ich urządzeń zabezpieczających.",
                    "en" => "Checking the technical condition of overhead power lines and their protective devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23016,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej oraz raportowanie awarii i napraw linii energetycznych wysokiego napięcia.",
                    "en" => "Maintaining service documentation and reporting faults and repairs of high-voltage power lines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_POGOTOWIA_ELEKTROENERGETYCZNEGO = [

            [
                "id" => 23017,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja awaryjnych instalacji elektroenergetycznych, w tym szybkie usuwanie usterek i awarii.",
                    "en" => "Repair and maintenance of emergency electrical installations, including rapid fault and failure resolution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23018,
                "name" => json_encode([
                    "pl" => "Reagowanie na awarie w systemie elektroenergetycznym, diagnozowanie i naprawianie uszkodzeń.",
                    "en" => "Responding to faults in the electrical system, diagnosing and repairing damage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23019,
                "name" => json_encode([
                    "pl" => "Sprawdzanie parametrów technicznych i bezpieczeństwa systemów elektroenergetycznych w razie awarii.",
                    "en" => "Checking technical parameters and safety of electrical systems during emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23020,
                "name" => json_encode([
                    "pl" => "Instalowanie i wymiana uszkodzonych elementów systemów elektroenergetycznych w warunkach awaryjnych.",
                    "en" => "Installing and replacing damaged components of electrical systems under emergency conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23021,
                "name" => json_encode([
                    "pl" => "Udzielanie pierwszej pomocy i zabezpieczenie miejsca awarii w systemach elektroenergetycznych.",
                    "en" => "Providing first aid and securing the fault site in electrical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23022,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji interwencji awaryjnych i raportowanie przeprowadzonych działań naprawczych.",
                    "en" => "Maintaining documentation of emergency interventions and reporting corrective actions taken."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROMONTER_SIECI_TRAKCYJNEJ = [

            [
                "id" => 23023,
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa urządzeń elektrycznych w sieciach trakcyjnych, w tym pantografów, zasilania oraz systemów sterowania.",
                    "en" => "Installation, maintenance, and repair of electrical devices in traction networks, including pantographs, power supply, and control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23024,
                "name" => json_encode([
                    "pl" => "Testowanie i diagnozowanie awarii w sieci trakcyjnej oraz jej urządzeniach elektrycznych.",
                    "en" => "Testing and diagnosing faults in the traction network and its electrical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23025,
                "name" => json_encode([
                    "pl" => "Naprawa i wymiana uszkodzonych komponentów sieci trakcyjnej, takich jak przewody, pantografy, urządzenia sterujące.",
                    "en" => "Repairing and replacing damaged components of the traction network, such as wires, pantographs, control devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23026,
                "name" => json_encode([
                    "pl" => "Wykonywanie inspekcji i testów bezpieczeństwa sieci trakcyjnej oraz zapewnienie jej niezawodności.",
                    "en" => "Performing inspections and safety tests on the traction network and ensuring its reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23027,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji konserwacji i napraw sieci trakcyjnej oraz raportowanie działań.",
                    "en" => "Maintaining maintenance and repair documentation for the traction network and reporting activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23028,
                "name" => json_encode([
                    "pl" => "Koordynowanie napraw i modernizacji sieci trakcyjnej, w tym integracja nowych systemów z istniejącą siecią.",
                    "en" => "Coordinating repairs and modernization of the traction network, including integrating new systems into the existing network."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_MONTERZY_LINII_ELEKTRYCZNYCH = [

            [
                "id" => 23029,
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa różnych typów linii energetycznych, w tym kablowych, napowietrznych oraz podziemnych.",
                    "en" => "Installation, maintenance, and repair of various types of power lines, including cable, overhead, and underground lines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23030,
                "name" => json_encode([
                    "pl" => "Testowanie i diagnozowanie parametrów technicznych linii energetycznych oraz wykrywanie usterek.",
                    "en" => "Testing and diagnosing technical parameters of power lines and detecting faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23031,
                "name" => json_encode([
                    "pl" => "Naprawa i modernizacja linii energetycznych oraz ich integracja z nowymi technologiami.",
                    "en" => "Repair and modernization of power lines and their integration with new technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23032,
                "name" => json_encode([
                    "pl" => "Instalowanie urządzeń zabezpieczających i kontrolujących działanie linii energetycznych.",
                    "en" => "Installing protective and control devices for power lines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23033,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej dotyczącej linii energetycznych i raportowanie awarii.",
                    "en" => "Maintaining technical documentation regarding power lines and reporting faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23034,
                "name" => json_encode([
                    "pl" => "Koordynowanie konserwacji i napraw linii energetycznych oraz ich elementów.",
                    "en" => "Coordinating the maintenance and repair of power lines and their components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ELEKTROENERGETYK_TRANSPORTU_SZYNOWEGO = [

            [
                "id" => 23035,
                "name" => json_encode([
                    "pl" => "Instalacja, naprawa, konserwacja i monitorowanie systemów elektroenergetycznych w transporcie szynowym, w tym sieci trakcyjnych i urządzeń zasilających.",
                    "en" => "Installation, repair, maintenance, and monitoring of electrical systems in rail transport, including traction networks and power supply devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23036,
                "name" => json_encode([
                    "pl" => "Sprawdzanie, testowanie i optymalizacja parametrów energetycznych sieci trakcyjnych w transporcie szynowym.",
                    "en" => "Checking, testing, and optimizing energy parameters of traction networks in rail transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23037,
                "name" => json_encode([
                    "pl" => "Diagnostyka i naprawa awarii w systemach elektroenergetycznych transportu szynowego.",
                    "en" => "Diagnosing and repairing faults in the electrical systems of rail transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23038,
                "name" => json_encode([
                    "pl" => "Wykonywanie inspekcji oraz testów urządzeń elektroenergetycznych, takich jak systemy zasilania i sterowania w transporcie szynowym.",
                    "en" => "Performing inspections and tests of electrical equipment, such as power and control systems in rail transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23039,
                "name" => json_encode([
                    "pl" => "Instalowanie nowych urządzeń elektroenergetycznych w systemach transportu szynowego.",
                    "en" => "Installing new electrical equipment in rail transport systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23040,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej i raportowanie działań naprawczych oraz konserwacyjnych w systemach elektroenergetycznych transportu szynowego.",
                    "en" => "Maintaining service documentation and reporting maintenance and repair activities in electrical systems of rail transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ELEKTRYK = [

            [
                "id" => 23041,
                "name" => json_encode([
                    "pl" => "Instalacja, naprawa i konserwacja urządzeń elektrycznych w budynkach mieszkalnych, biurowych i przemysłowych.",
                    "en" => "Installation, repair, and maintenance of electrical devices in residential, office, and industrial buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23042,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie pomiarów elektrycznych oraz testowanie instalacji pod kątem efektywności i bezpieczeństwa.",
                    "en" => "Performing electrical measurements and testing installations for efficiency and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23043,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń elektrycznych, takich jak gniazdka, przełączniki, oświetlenie.",
                    "en" => "Repair and maintenance of electrical devices, such as sockets, switches, and lighting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23044,
                "name" => json_encode([
                    "pl" => "Montaż nowych instalacji elektrycznych, w tym okablowania i urządzeń elektrycznych.",
                    "en" => "Installing new electrical installations, including wiring and electrical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23045,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej instalacji elektrycznych oraz raportowanie wykonanych napraw i konserwacji.",
                    "en" => "Maintaining technical documentation for electrical installations and reporting repairs and maintenance performed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23046,
                "name" => json_encode([
                    "pl" => "Testowanie sprawności urządzeń elektrycznych oraz zapewnienie ich bezpieczeństwa.",
                    "en" => "Testing the functionality of electrical devices and ensuring their safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ELEKTRYK_KOLEJOWYCH_SIECI_ELEKTROENERGETYCZNYCH = [

            [
                "id" => 23047,
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa urządzeń elektrycznych w sieciach elektroenergetycznych kolei, w tym urządzeń zasilających i trakcyjnych.",
                    "en" => "Installation, maintenance, and repair of electrical devices in railway electrical networks, including power and traction devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23048,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w systemach elektroenergetycznych sieci kolejowych oraz ich naprawa.",
                    "en" => "Diagnosing faults in electrical systems of railway networks and repairing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23049,
                "name" => json_encode([
                    "pl" => "Testowanie urządzeń zasilających, rozdzielni, stacji trakcyjnych w sieci kolejowej.",
                    "en" => "Testing power supply devices, switchgear, and traction substations in the railway network."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23050,
                "name" => json_encode([
                    "pl" => "Naprawa oraz konserwacja urządzeń elektrycznych w sieci kolejowej, w tym przewodów, transformatorów i urządzeń sterujących.",
                    "en" => "Repair and maintenance of electrical devices in the railway network, including cables, transformers, and control devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23051,
                "name" => json_encode([
                    "pl" => "Wykonywanie testów sprawności oraz bezpieczeństwa urządzeń elektroenergetycznych sieci kolejowej.",
                    "en" => "Performing functionality and safety tests on electrical devices in the railway network."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23052,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji i raportowanie napraw oraz konserwacji urządzeń sieci elektroenergetycznych kolei.",
                    "en" => "Maintaining documentation and reporting repairs and maintenance of electrical devices in the railway electrical network."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ELEKTRYK_SAMOCHODOWY = [

            [
                "id" => 23053,
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja, naprawa i diagnostyka elektrycznych układów w pojazdach samochodowych, w tym systemów zasilania, oświetlenia i sterowania.",
                    "en" => "Installation, maintenance, repair, and diagnostics of electrical systems in motor vehicles, including power supply, lighting, and control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23054,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek elektrycznych w pojazdach oraz ich naprawa, w tym naprawy alternatorów, rozruszników i układów elektrycznych.",
                    "en" => "Diagnosing electrical faults in vehicles and repairing them, including repairing alternators, starters, and electrical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23055,
                "name" => json_encode([
                    "pl" => "Testowanie sprawności elektrycznych układów pojazdów samochodowych oraz diagnostyka awarii.",
                    "en" => "Testing the efficiency of electrical systems in vehicles and diagnosing faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23056,
                "name" => json_encode([
                    "pl" => "Naprawa instalacji elektrycznych, w tym wymiana uszkodzonych przewodów, gniazd, włączników.",
                    "en" => "Repairing electrical installations, including replacing damaged wires, sockets, and switches."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23057,
                "name" => json_encode([
                    "pl" => "Instalacja nowych systemów elektrycznych w pojazdach samochodowych, w tym montaż nowych urządzeń zasilających.",
                    "en" => "Installing new electrical systems in motor vehicles, including the installation of new power devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23058,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji napraw elektrycznych systemów pojazdów samochodowych.",
                    "en" => "Maintaining documentation of electrical repairs of motor vehicle systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ELEKTRYK_URZĄDZEŃ_ZABEZPIECZENIA_I_STEROWANIA_RUCHEM_KOLEJOWYM = [

            [
                "id" => 23059,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja, naprawa i testowanie urządzeń elektrycznych stosowanych w systemach zabezpieczenia i sterowania ruchem kolejowym.",
                    "en" => "Installation, maintenance, repair, and testing of electrical devices used in railway signaling and control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23060,
                "name" => json_encode([
                    "pl" => "Diagnozowanie usterek i naprawa awarii w systemach zabezpieczenia i sterowania ruchem kolejowym.",
                    "en" => "Diagnosing faults and repairing failures in railway signaling and control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23061,
                "name" => json_encode([
                    "pl" => "Testowanie systemów zabezpieczeń i sterowania ruchem, takich jak sygnalizatory, urządzenia kontrolne i awaryjne.",
                    "en" => "Testing signaling and control systems, such as signals, control and emergency devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23062,
                "name" => json_encode([
                    "pl" => "Prowadzenie konserwacji urządzeń elektrycznych w systemach kolejowego sterowania ruchem.",
                    "en" => "Maintaining electrical devices in railway signaling systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23063,
                "name" => json_encode([
                    "pl" => "Naprawa i wymiana uszkodzonych komponentów systemów zabezpieczenia i sterowania ruchem kolejowym.",
                    "en" => "Repairing and replacing damaged components in railway signaling and control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23064,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej i raportowanie wykonanych prac naprawczych i konserwacyjnych.",
                    "en" => "Maintaining service documentation and reporting on completed repairs and maintenance work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ENERGETYK = [

            [
                "id" => 23065,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja, naprawa oraz testowanie urządzeń elektrycznych w systemach energetycznych, w tym urządzeń zasilających, transformatorów i rozdzielni.",
                    "en" => "Installation, maintenance, repair, and testing of electrical devices in energy systems, including power devices, transformers, and switchgear."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23066,
                "name" => json_encode([
                    "pl" => "Sprawdzanie stanu technicznego urządzeń elektrycznych, ich parametrów energetycznych oraz wydajności.",
                    "en" => "Checking the technical condition of electrical devices, their energy parameters, and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23067,
                "name" => json_encode([
                    "pl" => "Naprawa oraz konserwacja instalacji i urządzeń energetycznych, takich jak sieci elektryczne, urządzenia zabezpieczające i transformatorowe.",
                    "en" => "Repair and maintenance of energy installations and devices, such as electrical networks, protective devices, and transformers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23068,
                "name" => json_encode([
                    "pl" => "Testowanie urządzeń energetycznych pod kątem ich wydajności, niezawodności i bezpieczeństwa.",
                    "en" => "Testing energy devices for their performance, reliability, and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23069,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z naprawą, konserwacją oraz modernizacją systemów energetycznych.",
                    "en" => "Maintaining documentation related to the repair, maintenance, and modernization of energy systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23070,
                "name" => json_encode([
                    "pl" => "Wykonywanie audytów energetycznych w celu oceny efektywności energetycznej systemów.",
                    "en" => "Performing energy audits to assess the energy efficiency of systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_TECHNICY_ELEKTRYCY = [

            [
                "id" => 23071,
                "name" => json_encode([
                    "pl" => "Instalacja, naprawa i konserwacja urządzeń elektrycznych, w tym systemów zasilania, rozdzielni i urządzeń sterujących.",
                    "en" => "Installation, repair, and maintenance of electrical devices, including power systems, switchgear, and control devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23072,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów bezpieczeństwa oraz wydajności instalacji elektrycznych.",
                    "en" => "Performing safety and performance tests on electrical installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23073,
                "name" => json_encode([
                    "pl" => "Sprawdzanie stanu technicznego urządzeń elektrycznych, w tym systemów zasilania oraz urządzeń oświetleniowych.",
                    "en" => "Checking the technical condition of electrical devices, including power systems and lighting devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23074,
                "name" => json_encode([
                    "pl" => "Naprawa i wymiana uszkodzonych komponentów w systemach elektrycznych, takich jak przewody, gniazdka, przełączniki.",
                    "en" => "Repair and replacement of damaged components in electrical systems, such as wires, sockets, switches."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23075,
                "name" => json_encode([
                    "pl" => "Montaż nowych instalacji elektrycznych w budynkach mieszkalnych, przemysłowych i komercyjnych.",
                    "en" => "Installing new electrical installations in residential, industrial, and commercial buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23076,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej związanej z urządzeniami elektrycznymi oraz raportowanie wykonanych prac.",
                    "en" => "Maintaining service documentation related to electrical devices and reporting on completed work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROENERGETYK_ELEKTROWNI_CIEPLNYCH = [

            [
                "id" => 23077,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja i naprawa urządzeń elektroenergetycznych w elektrowniach cieplnych, w tym turbin, generatorów i urządzeń pomocniczych.",
                    "en" => "Installation, maintenance, and repair of electrical devices in thermal power plants, including turbines, generators, and auxiliary equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23078,
                "name" => json_encode([
                    "pl" => "Monitoring wydajności i efektywności energetycznej urządzeń elektroenergetycznych w elektrowniach cieplnych.",
                    "en" => "Monitoring the performance and energy efficiency of electrical devices in thermal power plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23079,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w systemach elektroenergetycznych elektrowni cieplnych i przeprowadzanie napraw.",
                    "en" => "Diagnosing faults in electrical systems of thermal power plants and performing repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23080,
                "name" => json_encode([
                    "pl" => "Testowanie urządzeń elektroenergetycznych, takich jak generatory i turbin, pod kątem ich wydajności.",
                    "en" => "Testing electrical devices, such as generators and turbines, for their performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23081,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja systemów zasilania w elektrowniach cieplnych, w tym rozdzielni i transformatorów.",
                    "en" => "Repair and maintenance of power supply systems in thermal power plants, including switchgear and transformers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23082,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej urządzeń elektroenergetycznych w elektrowniach cieplnych.",
                    "en" => "Maintaining technical documentation for electrical devices in thermal power plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROENERGETYK_ELEKTROWNI_WODNYCH = [

            [
                "id" => 23083,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja, naprawa i testowanie urządzeń elektroenergetycznych w elektrowniach wodnych, takich jak turbiny wodne, generatory i systemy sterowania.",
                    "en" => "Installation, maintenance, repair, and testing of electrical devices in hydroelectric power plants, such as water turbines, generators, and control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23084,
                "name" => json_encode([
                    "pl" => "Monitoring wydajności elektrowni wodnych i optymalizacja zużycia energii.",
                    "en" => "Monitoring the performance of hydroelectric power plants and optimizing energy consumption."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23085,
                "name" => json_encode([
                    "pl" => "Diagnostyka i naprawa usterek w urządzeniach elektroenergetycznych elektrowni wodnych.",
                    "en" => "Diagnosing and repairing faults in electrical devices in hydroelectric power plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23086,
                "name" => json_encode([
                    "pl" => "Testowanie systemów zasilania oraz systemów automatycznego sterowania w elektrowniach wodnych.",
                    "en" => "Testing power supply systems and automatic control systems in hydroelectric power plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23087,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja turbin wodnych oraz generatorów w elektrowniach wodnych.",
                    "en" => "Repair and maintenance of water turbines and generators in hydroelectric power plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23088,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji napraw i konserwacji urządzeń w elektrowniach wodnych.",
                    "en" => "Maintaining documentation for repairs and maintenance of devices in hydroelectric power plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROENERGETYK_NASTAWNI = [

            [
                "id" => 23089,
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa urządzeń elektroenergetycznych w nastawniach, w tym systemów sterowania ruchem kolejowym.",
                    "en" => "Installation, maintenance, and repair of electrical devices in signal boxes, including railway control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23090,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w systemach sterowania ruchem kolejowym i urządzeniach elektroenergetycznych w nastawniach.",
                    "en" => "Diagnosing faults in railway control systems and electrical devices in signal boxes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23091,
                "name" => json_encode([
                    "pl" => "Testowanie urządzeń sterowania ruchem kolejowym i ich parametrów w nastawniach.",
                    "en" => "Testing railway control devices and their parameters in signal boxes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23092,
                "name" => json_encode([
                    "pl" => "Prowadzenie konserwacji systemów elektroenergetycznych i sterowania w nastawniach, w tym wymiana zużytych elementów.",
                    "en" => "Maintaining electrical and control systems in signal boxes, including replacing worn-out components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23093,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji konserwacyjnej urządzeń w nastawniach oraz raportowanie awarii.",
                    "en" => "Maintaining maintenance documentation for devices in signal boxes and reporting faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23094,
                "name" => json_encode([
                    "pl" => "Koordynowanie prac konserwacyjnych i naprawczych urządzeń w nastawniach.",
                    "en" => "Coordinating maintenance and repair work on devices in signal boxes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTROENERGETYK_POMIARÓW_I_ZABEZPIECZEŃ = [

            [
                "id" => 23095,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja, naprawa oraz testowanie urządzeń pomiarowych i zabezpieczających w systemach elektroenergetycznych.",
                    "en" => "Installation, maintenance, repair, and testing of measurement and protection devices in electrical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23096,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w systemach pomiarowych oraz zabezpieczeń i ich naprawa.",
                    "en" => "Diagnosing faults in measuring and protection systems and repairing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23097,
                "name" => json_encode([
                    "pl" => "Testowanie urządzeń pomiarowych oraz systemów zabezpieczeń przed awariami w systemach elektroenergetycznych.",
                    "en" => "Testing measuring devices and protection systems against failures in electrical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23098,
                "name" => json_encode([
                    "pl" => "Naprawa uszkodzonych urządzeń pomiarowych oraz systemów zabezpieczeń w systemach elektroenergetycznych.",
                    "en" => "Repairing damaged measuring devices and protection systems in electrical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23099,
                "name" => json_encode([
                    "pl" => "Wykonywanie testów funkcjonalnych urządzeń pomiarowych oraz zabezpieczeń, w tym kalibracja.",
                    "en" => "Performing functional tests on measuring devices and protection systems, including calibration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23100,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji testów, napraw i konserwacji urządzeń pomiarowych oraz zabezpieczeń.",
                    "en" => "Maintaining documentation of tests, repairs, and maintenance of measuring devices and protection systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ]; $MASZYNISTA_AGREGATÓW_PRĄDOTWÓRCZYCH = [

        [
            "id" => 23101,
            "name" => json_encode([
                "pl" => "Obsługa, monitorowanie i konserwacja agregatów prądotwórczych w elektrowniach, w tym uruchamianie, zatrzymywanie i kontrolowanie parametrów.",
                "en" => "Operation, monitoring, and maintenance of power generators in power plants, including starting, stopping, and controlling parameters."
            ]),
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ],
        [
            "id" => 23102,
            "name" => json_encode([
                "pl" => "Diagnostyka usterek w agregatach prądotwórczych i naprawa awarii.",
                "en" => "Diagnosing faults in power generators and repairing failures."
            ]),
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ],
        [
            "id" => 23103,
            "name" => json_encode([
                "pl" => "Testowanie oraz optymalizacja pracy agregatów prądotwórczych pod kątem wydajności i efektywności.",
                "en" => "Testing and optimizing the performance of power generators for efficiency and effectiveness."
            ]),
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ],
        [
            "id" => 23104,
            "name" => json_encode([
                "pl" => "Prowadzenie konserwacji agregatów prądotwórczych, wymiana części eksploatacyjnych oraz smarowanie urządzeń.",
                "en" => "Maintaining power generators, replacing consumable parts, and lubricating devices."
            ]),
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ],
        [
            "id" => 23105,
            "name" => json_encode([
                "pl" => "Przeprowadzanie regularnych przeglądów technicznych agregatów prądotwórczych.",
                "en" => "Performing regular technical inspections of power generators."
            ]),
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ],
        [
            "id" => 23106,
            "name" => json_encode([
                "pl" => "Prowadzenie dokumentacji eksploatacyjnej i serwisowej agregatów prądotwórczych.",
                "en" => "Maintaining operational and service documentation for power generators."
            ]),
            "created_at" => date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s')
        ]
    ];
        $MASZYNISTA_TURBOZESPOŁU_PAROWEGO = [

            [
                "id" => 23107,
                "name" => json_encode([
                    "pl" => "Obsługa, monitorowanie i konserwacja turbozespołów parowych w elektrowniach, w tym uruchamianie, zatrzymywanie i kontrolowanie parametrów.",
                    "en" => "Operation, monitoring, and maintenance of steam turbine units in power plants, including starting, stopping, and controlling parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23108,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w turbozespołach parowych i przeprowadzanie napraw.",
                    "en" => "Diagnosing faults in steam turbine units and performing repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23109,
                "name" => json_encode([
                    "pl" => "Testowanie i optymalizacja pracy turbozespołów parowych pod kątem wydajności energetycznej.",
                    "en" => "Testing and optimizing the performance of steam turbine units for energy efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23110,
                "name" => json_encode([
                    "pl" => "Prowadzenie konserwacji i wymiana części eksploatacyjnych w turbozespołach parowych.",
                    "en" => "Maintaining and replacing consumable parts in steam turbine units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23111,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie regularnych przeglądów technicznych turbozespołów parowych.",
                    "en" => "Performing regular technical inspections of steam turbine units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23112,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej i raportowanie działań naprawczych i konserwacyjnych turbozespołów parowych.",
                    "en" => "Maintaining service documentation and reporting repair and maintenance activities for steam turbine units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MASZYNISTA_TURBOZESPOŁU_WODNEGO = [

            [
                "id" => 23113,
                "name" => json_encode([
                    "pl" => "Obsługa, monitorowanie i konserwacja turbozespołów wodnych w elektrowniach, w tym uruchamianie, zatrzymywanie i kontrolowanie parametrów.",
                    "en" => "Operation, monitoring, and maintenance of hydro turbine units in power plants, including starting, stopping, and controlling parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23114,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w turbozespołach wodnych i przeprowadzanie napraw.",
                    "en" => "Diagnosing faults in hydro turbine units and performing repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23115,
                "name" => json_encode([
                    "pl" => "Testowanie i optymalizacja pracy turbozespołów wodnych pod kątem wydajności energetycznej.",
                    "en" => "Testing and optimizing the performance of hydro turbine units for energy efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23116,
                "name" => json_encode([
                    "pl" => "Prowadzenie konserwacji i wymiana części eksploatacyjnych w turbozespołach wodnych.",
                    "en" => "Maintaining and replacing consumable parts in hydro turbine units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23117,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie regularnych przeglądów technicznych turbozespołów wodnych.",
                    "en" => "Performing regular technical inspections of hydro turbine units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23118,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej i raportowanie działań naprawczych i konserwacyjnych turbozespołów wodnych.",
                    "en" => "Maintaining service documentation and reporting repair and maintenance activities for hydro turbine units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MASZYNISTA_URZĄDZEŃ_CIEPŁOWNICZYCH_ELEKTROWNI = [

            [
                "id" => 23119,
                "name" => json_encode([
                    "pl" => "Obsługa, konserwacja i naprawa urządzeń ciepłowniczych w elektrowniach, w tym kotłów, wymienników ciepła oraz pomp.",
                    "en" => "Operation, maintenance, and repair of heating equipment in power plants, including boilers, heat exchangers, and pumps."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23120,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w urządzeniach ciepłowniczych elektrowni i przeprowadzanie napraw.",
                    "en" => "Diagnosing faults in heating devices in power plants and performing repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23121,
                "name" => json_encode([
                    "pl" => "Testowanie i optymalizacja pracy urządzeń ciepłowniczych w elektrowniach.",
                    "en" => "Testing and optimizing the performance of heating equipment in power plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23122,
                "name" => json_encode([
                    "pl" => "Prowadzenie konserwacji oraz wymiana części w urządzeniach ciepłowniczych elektrowni.",
                    "en" => "Maintaining and replacing parts in heating equipment in power plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23123,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej urządzeń ciepłowniczych elektrowni.",
                    "en" => "Maintaining technical documentation for heating equipment in power plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23124,
                "name" => json_encode([
                    "pl" => "Prowadzenie audytów energetycznych w zakresie pracy urządzeń ciepłowniczych elektrowni.",
                    "en" => "Conducting energy audits for the operation of heating equipment in power plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MASZYNISTA_URZĄDZEŃ_POMOCNICZYCH_ELEKTROWNI = [

            [
                "id" => 23125,
                "name" => json_encode([
                    "pl" => "Obsługa, konserwacja i naprawa urządzeń pomocniczych elektrowni, w tym urządzeń do transportu, filtracji, wentylacji i innych systemów pomocniczych.",
                    "en" => "Operation, maintenance, and repair of auxiliary devices in power plants, including devices for transportation, filtration, ventilation, and other auxiliary systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23126,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w urządzeniach pomocniczych elektrowni i przeprowadzanie napraw.",
                    "en" => "Diagnosing faults in auxiliary devices in power plants and performing repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23127,
                "name" => json_encode([
                    "pl" => "Testowanie i optymalizacja pracy urządzeń pomocniczych w elektrowniach.",
                    "en" => "Testing and optimizing the performance of auxiliary devices in power plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23128,
                "name" => json_encode([
                    "pl" => "Prowadzenie konserwacji oraz wymiana części w urządzeniach pomocniczych elektrowni.",
                    "en" => "Maintaining and replacing parts in auxiliary devices in power plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23129,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej urządzeń pomocniczych elektrowni.",
                    "en" => "Maintaining technical documentation for auxiliary devices in power plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23130,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań konserwacyjnych i naprawczych urządzeń pomocniczych elektrowni.",
                    "en" => "Coordinating maintenance and repair activities for auxiliary devices in power plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OBCHODOWY_BLOKU = [

            [
                "id" => 23131,
                "name" => json_encode([
                    "pl" => "Monitorowanie pracy urządzeń elektrowni i zapewnienie ich bezawaryjnej pracy.",
                    "en" => "Monitoring the operation of power plant devices and ensuring their trouble-free operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23132,
                "name" => json_encode([
                    "pl" => "Kontrola stanu technicznego urządzeń i instalacji w blokach energetycznych.",
                    "en" => "Checking the technical condition of equipment and installations in power plant units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23133,
                "name" => json_encode([
                    "pl" => "Diagnozowanie usterek w blokach energetycznych i koordynowanie napraw.",
                    "en" => "Diagnosing faults in power plant units and coordinating repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23134,
                "name" => json_encode([
                    "pl" => "Optymalizacja pracy urządzeń i instalacji w blokach energetycznych w celu zwiększenia efektywności.",
                    "en" => "Optimizing the operation of devices and installations in power plant units to increase efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23135,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z działaniem i konserwacją urządzeń w blokach energetycznych.",
                    "en" => "Maintaining documentation related to the operation and maintenance of equipment in power plant units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23136,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań naprawczych i konserwacyjnych w blokach energetycznych.",
                    "en" => "Coordinating repair and maintenance activities in power plant units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_URZĄDZEŃ_ENERGETYCZNYCH = [

            [
                "id" => 23137,
                "name" => json_encode([
                    "pl" => "Obsługa i konserwacja urządzeń energetycznych, takich jak generatory, kotły, turbiny, systemy zasilania.",
                    "en" => "Operation and maintenance of energy devices, such as generators, boilers, turbines, and power systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23138,
                "name" => json_encode([
                    "pl" => "Diagnostyka i naprawa urządzeń energetycznych w systemach energetycznych.",
                    "en" => "Diagnosing and repairing energy devices in energy systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23139,
                "name" => json_encode([
                    "pl" => "Testowanie urządzeń energetycznych pod kątem ich wydajności i efektywności.",
                    "en" => "Testing energy devices for their performance and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23140,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji i napraw w zakresie urządzeń energetycznych.",
                    "en" => "Performing maintenance and repairs of energy devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23141,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej i serwisowej urządzeń energetycznych.",
                    "en" => "Maintaining technical and service documentation for energy devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23142,
                "name" => json_encode([
                    "pl" => "Koordynowanie prac związanych z instalacją, konserwacją i naprawą urządzeń energetycznych.",
                    "en" => "Coordinating activities related to the installation, maintenance, and repair of energy devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_ELEKTRONIK = [

            [
                "id" => 23143,
                "name" => json_encode([
                    "pl" => "Projektowanie, rozwój i testowanie układów elektronicznych, w tym urządzeń cyfrowych i analogowych.",
                    "en" => "Design, development, and testing of electronic circuits, including digital and analog devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23144,
                "name" => json_encode([
                    "pl" => "Analiza i diagnostyka układów elektronicznych, identyfikacja i naprawa usterek.",
                    "en" => "Analysis and diagnostics of electronic circuits, identification, and repair of faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23145,
                "name" => json_encode([
                    "pl" => "Optymalizacja działania układów elektronicznych oraz zapewnienie ich wydajności energetycznej.",
                    "en" => "Optimization of electronic circuits' operation and ensuring their energy efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23146,
                "name" => json_encode([
                    "pl" => "Testowanie i walidacja nowych układów elektronicznych oraz komponentów do systemów elektronicznych.",
                    "en" => "Testing and validating new electronic circuits and components for electronic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23147,
                "name" => json_encode([
                    "pl" => "Tworzenie schematów elektrycznych i dokumentacji projektowej układów elektronicznych.",
                    "en" => "Creating electrical schematics and design documentation for electronic circuits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23148,
                "name" => json_encode([
                    "pl" => "Zarządzanie projektami inżynierskimi związanymi z elektroniką, w tym planowanie i kontrola terminów.",
                    "en" => "Managing engineering projects related to electronics, including planning and controlling deadlines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_MECHATRONIK = [

            [
                "id" => 23149,
                "name" => json_encode([
                    "pl" => "Projektowanie, rozwój oraz testowanie systemów mechatronicznych, łączących mechanikę, elektronikę i informatykę.",
                    "en" => "Design, development, and testing of mechatronic systems combining mechanics, electronics, and computer science."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23150,
                "name" => json_encode([
                    "pl" => "Tworzenie i implementacja algorytmów sterowania dla urządzeń mechatronicznych.",
                    "en" => "Creating and implementing control algorithms for mechatronic devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23151,
                "name" => json_encode([
                    "pl" => "Analiza i optymalizacja działania systemów mechatronicznych pod kątem wydajności oraz efektywności energetycznej.",
                    "en" => "Analysis and optimization of mechatronic systems' operation for performance and energy efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23152,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami projektowymi i inżynieryjnymi w zakresie rozwoju urządzeń mechatronicznych.",
                    "en" => "Collaborating with project and engineering teams in the development of mechatronic devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23153,
                "name" => json_encode([
                    "pl" => "Implementacja nowoczesnych technologii w systemach mechatronicznych, takich jak sztuczna inteligencja i automatyzacja.",
                    "en" => "Implementing modern technologies in mechatronic systems, such as artificial intelligence and automation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23154,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów integracyjnych dla systemów mechatronicznych oraz weryfikacja ich poprawności działania.",
                    "en" => "Performing integration tests for mechatronic systems and verifying their correct operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_URZĄDZEŃ_ZABEZPIECZENIA_I_STEROWANIA_RUCHEM_KOLEJOWYM = [

            [
                "id" => 23155,
                "name" => json_encode([
                    "pl" => "Projektowanie, instalacja i konserwacja urządzeń do zabezpieczenia i sterowania ruchem kolejowym, takich jak sygnalizatory i urządzenia sterujące.",
                    "en" => "Design, installation, and maintenance of devices for railway signaling and control, such as signals and control devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23156,
                "name" => json_encode([
                    "pl" => "Tworzenie algorytmów sterowania ruchem kolejowym oraz integracja z systemami zarządzania ruchem.",
                    "en" => "Developing control algorithms for railway traffic and integrating them with traffic management systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23157,
                "name" => json_encode([
                    "pl" => "Analiza i optymalizacja systemów zabezpieczeń i sterowania ruchem kolejowym pod kątem bezpieczeństwa i wydajności.",
                    "en" => "Analysis and optimization of railway signaling and control systems for safety and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23158,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów sprzętu zabezpieczeń i sterowania ruchem kolejowym oraz jego integracja z systemami automatycznymi.",
                    "en" => "Performing tests on signaling and control equipment and integrating it with automatic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23159,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji projektowej i technicznej systemów zabezpieczeń i sterowania ruchem kolejowym.",
                    "en" => "Maintaining design and technical documentation for railway signaling and control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23160,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami inżynieryjnymi i projektowymi w celu wdrożenia nowoczesnych systemów zabezpieczeń i sterowania ruchem.",
                    "en" => "Collaborating with engineering and project teams to implement modern signaling and control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPTOELEKTRONIK = [

            [
                "id" => 23161,
                "name" => json_encode([
                    "pl" => "Projektowanie, rozwój i testowanie urządzeń optoelektronicznych, takich jak fotodetektory, lasery, systemy optyczne.",
                    "en" => "Design, development, and testing of optoelectronic devices, such as photodetectors, lasers, optical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23162,
                "name" => json_encode([
                    "pl" => "Analiza i optymalizacja działania systemów optoelektronicznych pod kątem wydajności i efektywności.",
                    "en" => "Analysis and optimization of the performance of optoelectronic systems for efficiency and effectiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23163,
                "name" => json_encode([
                    "pl" => "Integracja systemów optoelektronicznych z innymi systemami elektronicznymi i mechanizmami sterowania.",
                    "en" => "Integrating optoelectronic systems with other electronic systems and control mechanisms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23164,
                "name" => json_encode([
                    "pl" => "Testowanie, kalibracja i diagnostyka urządzeń optoelektronicznych.",
                    "en" => "Testing, calibration, and diagnostics of optoelectronic devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23165,
                "name" => json_encode([
                    "pl" => "Tworzenie schematów elektrycznych i projektowanie układów optoelektronicznych.",
                    "en" => "Creating electrical schematics and designing optoelectronic circuits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23166,
                "name" => json_encode([
                    "pl" => "Zarządzanie projektami związanymi z technologią optoelektroniki i nadzorowanie ich realizacji.",
                    "en" => "Managing projects related to optoelectronics technology and overseeing their implementation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_INŻYNIEROWIE_ELEKTRONICY = [

            [
                "id" => 23167,
                "name" => json_encode([
                    "pl" => "Projektowanie, rozwój, testowanie i integracja urządzeń elektronicznych w różnych branżach przemysłowych.",
                    "en" => "Design, development, testing, and integration of electronic devices in various industrial sectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23168,
                "name" => json_encode([
                    "pl" => "Diagnostyka układów elektronicznych, identyfikowanie usterek oraz proponowanie rozwiązań naprawczych.",
                    "en" => "Diagnosing electronic circuits, identifying faults, and proposing corrective solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23169,
                "name" => json_encode([
                    "pl" => "Optymalizacja parametrów urządzeń elektronicznych, w tym zapewnienie ich niezawodności i efektywności.",
                    "en" => "Optimizing the parameters of electronic devices, ensuring their reliability and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23170,
                "name" => json_encode([
                    "pl" => "Testowanie nowych komponentów i urządzeń elektronicznych oraz wdrażanie ich do produkcji.",
                    "en" => "Testing new electronic components and devices and integrating them into production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23171,
                "name" => json_encode([
                    "pl" => "Opracowywanie dokumentacji projektowej oraz schematów urządzeń elektronicznych.",
                    "en" => "Developing design documentation and schematics for electronic devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23172,
                "name" => json_encode([
                    "pl" => "Koordynowanie zespołów inżynierskich przy realizacji projektów elektronicznych.",
                    "en" => "Coordinating engineering teams for the implementation of electronic projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROJEKTANT_UKŁADÓW_SCALONYCH = [

            [
                "id" => 23173,
                "name" => json_encode([
                    "pl" => "Projektowanie układów scalonych, w tym analiza i dobór komponentów oraz tworzenie schematów.",
                    "en" => "Designing integrated circuits, including analysis and selection of components and creating schematics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23174,
                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej układów scalonych, w tym dokumentacja testowa i produkcyjna.",
                    "en" => "Creating technical documentation for integrated circuits, including testing and production documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23175,
                "name" => json_encode([
                    "pl" => "Optymalizacja układów scalonych pod kątem wydajności i zużycia energii.",
                    "en" => "Optimizing integrated circuits for performance and energy consumption."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23176,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie symulacji i testów układów scalonych, w tym analiza poprawności działania.",
                    "en" => "Performing simulations and testing of integrated circuits, including functional analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23177,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami inżynieryjnymi w celu wdrożenia układów scalonych do produkcji.",
                    "en" => "Collaborating with engineering teams for the implementation of integrated circuits into production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23178,
                "name" => json_encode([
                    "pl" => "Zarządzanie projektami układów scalonych, w tym planowanie i kontrolowanie etapów projektu.",
                    "en" => "Managing integrated circuit projects, including planning and controlling project stages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INSTALATOR_SYSTEMÓW_ALARMOWYCH_PRZECIWKRADZIEŻOWYCH = [

            [
                "id" => 23179,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja i naprawa systemów alarmowych przeciwkradzieżowych, w tym czujników, kamer, oraz systemów monitoringu.",
                    "en" => "Installation, maintenance, and repair of anti-theft alarm systems, including sensors, cameras, and monitoring systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23180,
                "name" => json_encode([
                    "pl" => "Testowanie i konfiguracja systemów alarmowych, aby zapewnić ich efektywność i niezawodność.",
                    "en" => "Testing and configuring alarm systems to ensure their efficiency and reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23181,
                "name" => json_encode([
                    "pl" => "Monitorowanie i diagnozowanie usterek systemów alarmowych, identyfikowanie problemów i proponowanie rozwiązań.",
                    "en" => "Monitoring and diagnosing faults in alarm systems, identifying issues, and proposing solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23182,
                "name" => json_encode([
                    "pl" => "Instalacja urządzeń zabezpieczających, takich jak kamery CCTV, czujniki ruchu i systemy alarmowe w obiektach komercyjnych i mieszkalnych.",
                    "en" => "Installing security devices such as CCTV cameras, motion detectors, and alarm systems in commercial and residential buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23183,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej instalacji i konserwacji systemów alarmowych.",
                    "en" => "Maintaining documentation for the installation and maintenance of alarm systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23184,
                "name" => json_encode([
                    "pl" => "Szkolenie użytkowników w zakresie obsługi systemów alarmowych i zapewnienia ich prawidłowego funkcjonowania.",
                    "en" => "Training users on how to operate alarm systems and ensure their proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_TECHNICY_ELEKTRONICY_I_POKREWNI = [

            [
                "id" => 23185,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja i naprawa urządzeń elektronicznych, takich jak sprzęt komputerowy, urządzenia audio-wideo oraz systemy telekomunikacyjne.",
                    "en" => "Installation, maintenance, and repair of electronic devices such as computer equipment, audio-video devices, and telecommunications systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23186,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w urządzeniach elektronicznych oraz przeprowadzanie napraw.",
                    "en" => "Diagnosing faults in electronic devices and performing repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23187,
                "name" => json_encode([
                    "pl" => "Testowanie urządzeń elektronicznych, takich jak urządzenia audio, sprzęt komputerowy i telekomunikacyjny.",
                    "en" => "Testing electronic devices such as audio equipment, computer hardware, and telecommunications devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23188,
                "name" => json_encode([
                    "pl" => "Optymalizacja działania systemów elektronicznych pod kątem efektywności i wydajności.",
                    "en" => "Optimizing the operation of electronic systems for efficiency and performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23189,
                "name" => json_encode([
                    "pl" => "Tworzenie i wdrażanie nowych technologii elektronicznych w systemach produkcyjnych.",
                    "en" => "Developing and implementing new electronic technologies in production systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23190,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej oraz raportowanie stanu urządzeń elektronicznych.",
                    "en" => "Maintaining service documentation and reporting on the condition of electronic devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_ELEKTRONIK_APARATURA_MEDYCZNA = [

            [
                "id" => 23191,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja i naprawa aparatury medycznej, w tym urządzeń diagnostycznych, monitorów pacjentów, oraz sprzętu do terapii.",
                    "en" => "Installation, maintenance, and repair of medical equipment, including diagnostic devices, patient monitors, and therapy equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23192,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów i kalibracji aparatury medycznej, aby zapewnić jej prawidłowe działanie.",
                    "en" => "Performing tests and calibrations of medical equipment to ensure proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23193,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu technicznego aparatury medycznej oraz diagnozowanie usterek.",
                    "en" => "Monitoring the technical condition of medical equipment and diagnosing faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23194,
                "name" => json_encode([
                    "pl" => "Prowadzenie konserwacji aparatury medycznej, w tym wymiana zużytych komponentów i systemów.",
                    "en" => "Maintaining medical equipment, including replacing worn-out components and systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23195,
                "name" => json_encode([
                    "pl" => "Współpraca z personelem medycznym w zakresie instalacji i obsługi sprzętu medycznego.",
                    "en" => "Cooperating with medical staff in the installation and operation of medical equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23196,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej i raportowanie stanu technicznego aparatury medycznej.",
                    "en" => "Maintaining service documentation and reporting on the technical condition of medical equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_ELEKTRONIK_APARATURA_POMIAROWA = [

            [
                "id" => 23197,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja i naprawa aparatury pomiarowej, w tym sprzętu do pomiarów elektrycznych, mechanicznych i optycznych.",
                    "en" => "Installation, maintenance, and repair of measuring equipment, including devices for electrical, mechanical, and optical measurements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23198,
                "name" => json_encode([
                    "pl" => "Testowanie i kalibracja aparatury pomiarowej, zapewnienie dokładności pomiarów.",
                    "en" => "Testing and calibrating measuring equipment to ensure measurement accuracy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23199,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu technicznego aparatury pomiarowej i wykonywanie diagnoz usterek.",
                    "en" => "Monitoring the technical condition of measuring equipment and diagnosing faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23200,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji konserwacyjnej aparatury pomiarowej.",
                    "en" => "Maintaining maintenance documentation for measuring equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23201,
                "name" => json_encode([
                    "pl" => "Instalacja nowych urządzeń pomiarowych oraz systemów monitorujących w różnych środowiskach przemysłowych.",
                    "en" => "Installing new measuring devices and monitoring systems in various industrial environments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23202,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów systemów pomiarowych i zapewnianie zgodności z normami.",
                    "en" => "Conducting audits of measurement systems and ensuring compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_ELEKTRONIK_ELEKTRONICZNE_INSTRUMENTY_MUZYCZNE = [

            [
                "id" => 23203,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja i naprawa elektronicznych instrumentów muzycznych, w tym syntezatorów, gitar elektrycznych i wzmacniaczy.",
                    "en" => "Installation, maintenance, and repair of electronic musical instruments, including synthesizers, electric guitars, and amplifiers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23204,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie diagnostyki usterek w instrumentach muzycznych oraz kalibracja.",
                    "en" => "Performing fault diagnostics on musical instruments and calibration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23205,
                "name" => json_encode([
                    "pl" => "Testowanie i optymalizacja działania elektronicznych instrumentów muzycznych.",
                    "en" => "Testing and optimizing the performance of electronic musical instruments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23206,
                "name" => json_encode([
                    "pl" => "Prowadzenie konserwacji urządzeń elektronicznych, wymiana uszkodzonych komponentów.",
                    "en" => "Maintaining electronic devices, replacing damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23207,
                "name" => json_encode([
                    "pl" => "Współpraca z muzykami w zakresie dostosowywania instrumentów do potrzeb artystycznych.",
                    "en" => "Collaborating with musicians in adapting instruments to artistic needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23208,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji napraw i konserwacji instrumentów muzycznych.",
                    "en" => "Maintaining documentation for repairs and maintenance of musical instruments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_ELEKTRONIK_ELEKTRONICZNY_SPRZĘT_SYGNALIZACYJNY_I_SYSTEMY_SYGNALIZACYJNE = [

            [
                "id" => 23209,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja, naprawa i testowanie urządzeń sygnalizacyjnych, w tym sygnalizatorów świetlnych i dźwiękowych.",
                    "en" => "Installation, maintenance, repair, and testing of signaling devices, including light and sound signals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23210,
                "name" => json_encode([
                    "pl" => "Projektowanie i instalacja systemów sygnalizacyjnych, w tym sygnalizatory świetlne, dźwiękowe i systemy alarmowe.",
                    "en" => "Designing and installing signaling systems, including light signals, sound signals, and alarm systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23211,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w urządzeniach sygnalizacyjnych oraz ich naprawa.",
                    "en" => "Diagnosing faults in signaling devices and repairing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23212,
                "name" => json_encode([
                    "pl" => "Kalibracja i testowanie urządzeń sygnalizacyjnych w celu zapewnienia ich prawidłowego działania.",
                    "en" => "Calibration and testing of signaling devices to ensure their proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23213,
                "name" => json_encode([
                    "pl" => "Instalacja systemów monitoringu i detekcji związanych z urządzeniami sygnalizacyjnymi.",
                    "en" => "Installing monitoring and detection systems related to signaling devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23214,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej urządzeń sygnalizacyjnych i systemów alarmowych.",
                    "en" => "Maintaining technical documentation for signaling devices and alarm systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_ELEKTRONIK_NAPRAWA_SPRZĘTU_AUDIOWIZUALNEGO = [

            [
                "id" => 23215,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja, naprawa i kalibracja sprzętu audiowizualnego, w tym telewizorów, projektorów, sprzętu audio.",
                    "en" => "Installation, maintenance, repair, and calibration of audiovisual equipment, including televisions, projectors, audio equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23216,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w sprzęcie audiowizualnym oraz ich naprawa, w tym wymiana uszkodzonych komponentów.",
                    "en" => "Diagnosing faults in audiovisual equipment and repairing them, including replacing damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23217,
                "name" => json_encode([
                    "pl" => "Testowanie i optymalizacja sprzętu audiowizualnego pod kątem wydajności i jakości obrazu oraz dźwięku.",
                    "en" => "Testing and optimizing audiovisual equipment for performance and image and sound quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23218,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji napraw i konserwacji sprzętu audiowizualnego.",
                    "en" => "Maintaining documentation for repairs and maintenance of audiovisual equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23219,
                "name" => json_encode([
                    "pl" => "Instalacja systemów audiowizualnych, w tym kamer, ekranów, sprzętu dźwiękowego.",
                    "en" => "Installing audiovisual systems, including cameras, screens, and sound equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23220,
                "name" => json_encode([
                    "pl" => "Szkolenie użytkowników w zakresie obsługi sprzętu audiowizualnego.",
                    "en" => "Training users on how to operate audiovisual equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_ELEKTRONIK_UKŁADY_ELEKTRONICZNE_AUTOMATYKI_PRZEMYSŁOWEJ = [

            [
                "id" => 23221,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja, naprawa i testowanie układów elektronicznych w systemach automatyki przemysłowej.",
                    "en" => "Installation, maintenance, repair, and testing of electronic circuits in industrial automation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23222,
                "name" => json_encode([
                    "pl" => "Diagnozowanie usterek w układach automatyki przemysłowej i ich naprawa.",
                    "en" => "Diagnosing faults in industrial automation circuits and repairing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23223,
                "name" => json_encode([
                    "pl" => "Testowanie systemów automatyki przemysłowej, w tym urządzeń sterujących i czujników.",
                    "en" => "Testing industrial automation systems, including control devices and sensors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23224,
                "name" => json_encode([
                    "pl" => "Optymalizacja układów elektronicznych automatyki przemysłowej pod kątem wydajności i niezawodności.",
                    "en" => "Optimizing electronic circuits of industrial automation for performance and reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23225,
                "name" => json_encode([
                    "pl" => "Instalacja systemów automatyki, w tym układów sterowania procesami przemysłowymi.",
                    "en" => "Installing automation systems, including control circuits for industrial processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23226,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej i raportowanie stanu technicznego systemów automatyki.",
                    "en" => "Maintaining service documentation and reporting the technical condition of automation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_KONSERWATOR_URZĄDZEŃ_ZABEZPIECZEŃ_TECHNICZNYCH_OSÓB_I_MIENIA = [

            [
                "id" => 23227,
                "name" => json_encode([
                    "pl" => "Instalacja i konserwacja urządzeń zabezpieczeń technicznych, takich jak systemy alarmowe, monitoring wizyjny, i systemy kontroli dostępu.",
                    "en" => "Installation and maintenance of technical security devices such as alarm systems, video monitoring, and access control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23228,
                "name" => json_encode([
                    "pl" => "Testowanie i konfiguracja urządzeń zabezpieczeń, aby zapewnić ich niezawodność i skuteczność.",
                    "en" => "Testing and configuring security devices to ensure their reliability and effectiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23229,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek i naprawa urządzeń zabezpieczeń, w tym kamer, czujników ruchu i alarmów.",
                    "en" => "Diagnosing faults and repairing security devices, including cameras, motion detectors, and alarms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23230,
                "name" => json_encode([
                    "pl" => "Współpraca z klientami w zakresie instalacji i konfiguracji systemów zabezpieczeń.",
                    "en" => "Collaborating with clients for the installation and configuration of security systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23231,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej urządzeń zabezpieczających i sporządzanie raportów o wykonanych pracach.",
                    "en" => "Maintaining technical documentation for security devices and preparing reports on completed tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23232,
                "name" => json_encode([
                    "pl" => "Szkolenie użytkowników w zakresie obsługi systemów zabezpieczeń technicznych.",
                    "en" => "Training users on how to operate technical security systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_MECHATRONIK = [

            [
                "id" => 23233,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja i naprawa systemów mechatronicznych, w tym urządzeń automatycznych i robotów przemysłowych.",
                    "en" => "Installation, maintenance, and repair of mechatronic systems, including automatic devices and industrial robots."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23234,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w systemach mechatronicznych oraz ich naprawa.",
                    "en" => "Diagnosing faults in mechatronic systems and repairing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23235,
                "name" => json_encode([
                    "pl" => "Testowanie i optymalizacja działania systemów mechatronicznych w zakresie wydajności.",
                    "en" => "Testing and optimizing the operation of mechatronic systems for performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23236,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami inżynieryjnymi w zakresie rozwoju systemów mechatronicznych.",
                    "en" => "Collaborating with engineering teams in the development of mechatronic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23237,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej systemów mechatronicznych.",
                    "en" => "Maintaining service documentation for mechatronic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23238,
                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń z zakresu obsługi systemów mechatronicznych.",
                    "en" => "Conducting training on the operation of mechatronic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_URZĄDZEŃ_STEROWANIA_RUCHEM_POCIĄGÓW_METRA = [

            [
                "id" => 23239,
                "name" => json_encode([
                    "pl" => "Instalacja i konserwacja urządzeń sterowania ruchem pociągów metra, w tym systemów sygnalizacyjnych i automatyki.",
                    "en" => "Installation and maintenance of train control devices for metro systems, including signaling systems and automation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23240,
                "name" => json_encode([
                    "pl" => "Testowanie i kalibracja urządzeń sterowania ruchem pociągów metra.",
                    "en" => "Testing and calibrating train control devices for metro systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23241,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w systemach sterowania ruchem pociągów metra oraz ich naprawa.",
                    "en" => "Diagnosing faults in train control systems for metro systems and repairing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23242,
                "name" => json_encode([
                    "pl" => "Optymalizacja działania systemów sterowania ruchem pociągów metra.",
                    "en" => "Optimizing the operation of train control systems for metro systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23243,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji eksploatacyjnej i konserwacyjnej systemów sterowania ruchem metra.",
                    "en" => "Maintaining operational and maintenance documentation for metro train control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23244,
                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń z zakresu obsługi i konserwacji urządzeń sterowania ruchem pociągów metra.",
                    "en" => "Conducting training on the operation and maintenance of metro train control devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_URZĄDZEŃ_ZDALNEGO_STEROWANIA_I_KONTROLI_DYSPOZYTORSKIEJ_METRA = [

            [
                "id" => 23245,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja i naprawa urządzeń zdalnego sterowania oraz systemów kontroli dyspozytorskiej w systemach metra.",
                    "en" => "Installation, maintenance, and repair of remote control devices and dispatcher control systems in metro systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23246,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu urządzeń zdalnego sterowania, diagnostyka usterek i ich naprawa.",
                    "en" => "Monitoring the condition of remote control devices, fault diagnosis, and repairing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23247,
                "name" => json_encode([
                    "pl" => "Konfiguracja i testowanie urządzeń zdalnego sterowania, zapewniając ich efektywność i niezawodność.",
                    "en" => "Configuring and testing remote control devices, ensuring their efficiency and reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23248,
                "name" => json_encode([
                    "pl" => "Instalacja systemów łączności dyspozytorskiej, w tym urządzeń sterujących i komunikacyjnych.",
                    "en" => "Installing dispatcher communication systems, including control and communication devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23249,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej i raportowanie stanu urządzeń zdalnego sterowania.",
                    "en" => "Maintaining service documentation and reporting the condition of remote control devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23250,
                "name" => json_encode([
                    "pl" => "Szkolenie użytkowników systemów sterowania i kontroli dyspozytorskiej metra.",
                    "en" => "Training users on the operation of metro control and dispatcher systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_MONTERZY_ELEKTRONICY_I_SERWISANCI_URZĄDZEŃ_ELEKTRONICZNYCH = [

            [
                "id" => 23251,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja i naprawa urządzeń elektronicznych, takich jak sprzęt komputerowy, urządzenia audio-wideo i systemy telekomunikacyjne.",
                    "en" => "Installation, maintenance, and repair of electronic devices, such as computer equipment, audio-video devices, and telecommunications systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23252,
                "name" => json_encode([
                    "pl" => "Testowanie urządzeń elektronicznych i diagnostyka usterek.",
                    "en" => "Testing electronic devices and diagnosing faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23253,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie napraw urządzeń elektronicznych, w tym wymiana komponentów.",
                    "en" => "Performing repairs of electronic devices, including replacing components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23254,
                "name" => json_encode([
                    "pl" => "Optymalizacja działania systemów elektronicznych i poprawa ich efektywności.",
                    "en" => "Optimizing the operation of electronic systems and improving their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23255,
                "name" => json_encode([
                    "pl" => "Instalacja i konfiguracja systemów elektroniki w różnych branżach przemysłowych.",
                    "en" => "Installing and configuring electronic systems in various industrial sectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23256,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej i raportowanie wyników diagnostyki oraz napraw urządzeń elektronicznych.",
                    "en" => "Maintaining service documentation and reporting diagnostic results and repairs of electronic devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_INSTALACJI_I_URZĄDZEŃ_TELEKOMUNIKACYJNYCH = [

            [
                "id" => 23257,
                "name" => json_encode([
                    "pl" => "Instalacja i konserwacja urządzeń telekomunikacyjnych, w tym telefonów, urządzeń transmisji danych, systemów komunikacji radiowej.",
                    "en" => "Installation and maintenance of telecommunications devices, including phones, data transmission devices, and radio communication systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23258,
                "name" => json_encode([
                    "pl" => "Diagnozowanie usterek w urządzeniach telekomunikacyjnych oraz przeprowadzanie napraw.",
                    "en" => "Diagnosing faults in telecommunications devices and performing repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23259,
                "name" => json_encode([
                    "pl" => "Testowanie i kalibracja urządzeń telekomunikacyjnych w celu zapewnienia ich prawidłowego działania.",
                    "en" => "Testing and calibrating telecommunications devices to ensure their proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23260,
                "name" => json_encode([
                    "pl" => "Instalacja sieci telekomunikacyjnych, w tym kabli, urządzeń do przesyłania danych i systemów komunikacyjnych.",
                    "en" => "Installing telecommunications networks, including cables, data transmission devices, and communication systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23261,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji eksploatacyjnej urządzeń telekomunikacyjnych.",
                    "en" => "Maintaining operational documentation for telecommunications devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23262,
                "name" => json_encode([
                    "pl" => "Szkolenie użytkowników w zakresie obsługi systemów telekomunikacyjnych.",
                    "en" => "Training users on how to operate telecommunications systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_SIECI_I_URZĄDZEŃ_TELEKOMUNIKACYJNYCH = [

            [
                "id" => 23263,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja i naprawa sieci telekomunikacyjnych, w tym kabli światłowodowych, telefonicznych i transmisyjnych.",
                    "en" => "Installation, maintenance, and repair of telecommunications networks, including fiber optic, telephone, and transmission cables."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23264,
                "name" => json_encode([
                    "pl" => "Testowanie i optymalizacja pracy urządzeń telekomunikacyjnych i sieci.",
                    "en" => "Testing and optimizing the operation of telecommunications devices and networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23265,
                "name" => json_encode([
                    "pl" => "Diagnostyka i naprawa awarii w sieciach telekomunikacyjnych oraz urządzeniach przesyłających dane.",
                    "en" => "Diagnosing and repairing faults in telecommunications networks and data transmission devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23266,
                "name" => json_encode([
                    "pl" => "Instalacja i konfiguracja systemów telekomunikacyjnych i sieciowych, w tym routerów, switchy i serwerów.",
                    "en" => "Installing and configuring telecommunications systems and networks, including routers, switches, and servers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23267,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji instalacji, napraw i konserwacji sieci telekomunikacyjnych.",
                    "en" => "Maintaining installation, repair, and maintenance documentation for telecommunications networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23268,
                "name" => json_encode([
                    "pl" => "Zarządzanie projektami instalacji sieci telekomunikacyjnych.",
                    "en" => "Managing projects for the installation of telecommunications networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_SIECI_TELEKOMUNIKACYJNYCH = [

            [
                "id" => 23269,
                "name" => json_encode([
                    "pl" => "Instalacja, naprawa i konserwacja sieci telekomunikacyjnych, w tym kabli światłowodowych i innych mediów transmisyjnych.",
                    "en" => "Installation, repair, and maintenance of telecommunications networks, including fiber optic cables and other transmission media."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23270,
                "name" => json_encode([
                    "pl" => "Monitorowanie i diagnostyka sieci telekomunikacyjnych.",
                    "en" => "Monitoring and diagnosing telecommunications networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23271,
                "name" => json_encode([
                    "pl" => "Testowanie i optymalizacja sieci telekomunikacyjnych pod kątem wydajności i jakości transmisji.",
                    "en" => "Testing and optimizing telecommunications networks for performance and transmission quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23272,
                "name" => json_encode([
                    "pl" => "Instalacja nowych linii kablowych, sprzętu i urządzeń do sieci telekomunikacyjnych.",
                    "en" => "Installing new cables, equipment, and devices for telecommunications networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23273,
                "name" => json_encode([
                    "pl" => "Utrzymanie sieci telekomunikacyjnych, naprawy uszkodzeń oraz wymiana wadliwych elementów.",
                    "en" => "Maintaining telecommunications networks, repairing damages, and replacing faulty components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23274,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji instalacji i konserwacji sieci telekomunikacyjnych.",
                    "en" => "Maintaining installation and maintenance documentation for telecommunications networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_ELEKTRONIK_INSTALACJA_ANTEN = [

            [
                "id" => 23275,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja i naprawa anten telekomunikacyjnych, w tym anten satelitarnych, radiowych i telewizyjnych.",
                    "en" => "Installation, maintenance, and repair of telecommunications antennas, including satellite, radio, and TV antennas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23276,
                "name" => json_encode([
                    "pl" => "Montaż anten na dachach budynków, na maszty antenowe, w tym ich odpowiednia kalibracja.",
                    "en" => "Mounting antennas on building roofs, on antenna masts, including proper calibration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23277,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w antenach oraz przeprowadzanie napraw.",
                    "en" => "Diagnosing faults in antennas and performing repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23278,
                "name" => json_encode([
                    "pl" => "Testowanie sygnałów antenowych i optymalizacja ustawienia anteny.",
                    "en" => "Testing antenna signals and optimizing antenna alignment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23279,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji instalacji i konserwacji anten.",
                    "en" => "Maintaining installation and maintenance documentation for antennas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23280,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów łączności i analizy jakości sygnałów.",
                    "en" => "Performing communication tests and signal quality analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_ELEKTRONIK_SPRZĘT_COMPUTEROWY = [

            [
                "id" => 23281,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja, naprawa i testowanie sprzętu komputerowego, w tym komputerów stacjonarnych, laptopów, urządzeń peryferyjnych.",
                    "en" => "Installation, maintenance, repair, and testing of computer hardware, including desktops, laptops, and peripheral devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23282,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w sprzęcie komputerowym i wymiana uszkodzonych podzespołów.",
                    "en" => "Diagnosing faults in computer hardware and replacing damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23283,
                "name" => json_encode([
                    "pl" => "Instalacja systemów operacyjnych, oprogramowania oraz konfiguracja urządzeń peryferyjnych.",
                    "en" => "Installing operating systems, software, and configuring peripheral devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23284,
                "name" => json_encode([
                    "pl" => "Wykonywanie diagnostyki systemów komputerowych, optymalizacja pracy sprzętu oraz usuwanie usterek.",
                    "en" => "Performing diagnostics of computer systems, optimizing hardware performance, and fixing faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23285,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów sprzętu komputerowego oraz jego modernizacja.",
                    "en" => "Testing computer hardware and upgrading it."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23286,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji eksploatacyjnej oraz naprawczej sprzętu komputerowego.",
                    "en" => "Maintaining operational and repair documentation for computer hardware."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_ELEKTRONIK_URZĄDZENIA_RADIOMUNIKACYJNE = [

            [
                "id" => 23287,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja, naprawa i testowanie urządzeń radiokomunikacyjnych, w tym nadajników, odbiorników i urządzeń łączności.",
                    "en" => "Installation, maintenance, repair, and testing of radiocommunication devices, including transmitters, receivers, and communication devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23288,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w urządzeniach radiokomunikacyjnych oraz ich naprawa.",
                    "en" => "Diagnosing faults in radiocommunication devices and repairing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23289,
                "name" => json_encode([
                    "pl" => "Instalacja i konfiguracja systemów radiokomunikacyjnych w pojazdach, stacjach bazowych oraz innych instalacjach.",
                    "en" => "Installing and configuring radiocommunication systems in vehicles, base stations, and other installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23290,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów i kalibracji urządzeń radiokomunikacyjnych.",
                    "en" => "Performing tests and calibrations of radiocommunication devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23291,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej urządzeń radiokomunikacyjnych oraz zapewnienie zgodności z normami.",
                    "en" => "Maintaining technical documentation for radiocommunication devices and ensuring compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23292,
                "name" => json_encode([
                    "pl" => "Szkolenie użytkowników w zakresie obsługi systemów radiokomunikacyjnych.",
                    "en" => "Training users on how to operate radiocommunication systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_ELEKTRONIK_URZĄDZENIA_RADIOWO_TELEWIZYJNE = [

            [
                "id" => 23293,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja i naprawa urządzeń radiowo-telewizyjnych, takich jak odbiorniki TV, anteny satelitarne i systemy dźwiękowe.",
                    "en" => "Installation, maintenance, and repair of radio and television devices, such as TV receivers, satellite antennas, and sound systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23294,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w urządzeniach radiowo-telewizyjnych oraz ich naprawa.",
                    "en" => "Diagnosing faults in radio and television devices and repairing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23295,
                "name" => json_encode([
                    "pl" => "Testowanie i optymalizacja pracy urządzeń radiowo-telewizyjnych.",
                    "en" => "Testing and optimizing the performance of radio and television devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23296,
                "name" => json_encode([
                    "pl" => "Instalacja i konfiguracja systemów audiowizualnych, w tym systemów dźwiękowych, multimedialnych i wideo.",
                    "en" => "Installing and configuring audiovisual systems, including sound systems, multimedia, and video systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23297,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej urządzeń radiowo-telewizyjnych.",
                    "en" => "Maintaining technical documentation for radio and television devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23298,
                "name" => json_encode([
                    "pl" => "Szkolenie użytkowników w zakresie obsługi urządzeń radiowo-telewizyjnych.",
                    "en" => "Training users on how to operate radio and television devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_MONTERZY_I_SERWISANCI_INSTALACJI_I_URZĄDZEŃ_TELEINFORMATYCZNYCH = [

            [
                "id" => 23299,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja i naprawa urządzeń teleinformatycznych, w tym systemów komputerowych, serwerów, urządzeń sieciowych i telekomunikacyjnych.",
                    "en" => "Installation, maintenance, and repair of telecommunication and information technology devices, including computer systems, servers, network devices, and telecommunications equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23300,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w urządzeniach teleinformatycznych oraz naprawa sprzętu.",
                    "en" => "Diagnosing faults in telecommunication and information technology devices and repairing the equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23301,
                "name" => json_encode([
                    "pl" => "Testowanie i konfiguracja urządzeń sieciowych, komputerowych oraz systemów teleinformatycznych.",
                    "en" => "Testing and configuring network devices, computer systems, and telecommunication equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23302,
                "name" => json_encode([
                    "pl" => "Instalacja i konfiguracja sieci komputerowych, w tym kabli, routerów, switchy i urządzeń zabezpieczeń.",
                    "en" => "Installing and configuring computer networks, including cables, routers, switches, and security devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23303,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej i serwisowej urządzeń teleinformatycznych.",
                    "en" => "Maintaining technical and service documentation for telecommunication and information technology devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23304,
                "name" => json_encode([
                    "pl" => "Szkolenie użytkowników w zakresie obsługi systemów teleinformatycznych.",
                    "en" => "Training users on the operation of telecommunication and information technology systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTRONIK = [

            [
                "id" => 23305,
                "name" => json_encode([
                    "pl" => "Projektowanie, rozwój i testowanie układów elektronicznych, w tym systemów cyfrowych, analogowych i mieszanych.",
                    "en" => "Designing, developing, and testing electronic circuits, including digital, analog, and mixed systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23306,
                "name" => json_encode([
                    "pl" => "Optymalizacja działania układów elektronicznych pod kątem wydajności i efektywności.",
                    "en" => "Optimizing the operation of electronic circuits for performance and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23307,
                "name" => json_encode([
                    "pl" => "Analiza i diagnostyka układów elektronicznych, naprawa usterek oraz wymiana uszkodzonych komponentów.",
                    "en" => "Analysis and diagnostics of electronic circuits, repairing faults and replacing damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23308,
                "name" => json_encode([
                    "pl" => "Projektowanie dokumentacji technicznej i schematów układów elektronicznych.",
                    "en" => "Designing technical documentation and schematics for electronic circuits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23309,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami projektowymi w celu rozwoju nowych technologii elektronicznych.",
                    "en" => "Collaborating with project teams to develop new electronic technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23310,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów, symulacji oraz analiz układów elektronicznych w celu weryfikacji ich poprawności działania.",
                    "en" => "Performing tests, simulations, and analyses of electronic circuits to verify their correct operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MECHATRONIK = [

            [
                "id" => 23311,
                "name" => json_encode([
                    "pl" => "Projektowanie, rozwój, i testowanie systemów mechatronicznych, w tym urządzeń automatycznych, robotów i systemów sterowania.",
                    "en" => "Designing, developing, and testing mechatronic systems, including automation devices, robots, and control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23312,
                "name" => json_encode([
                    "pl" => "Integracja systemów mechanicznych, elektronicznych i informatycznych w urządzeniach mechatronicznych.",
                    "en" => "Integrating mechanical, electronic, and computer systems in mechatronic devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23313,
                "name" => json_encode([
                    "pl" => "Optymalizacja układów mechatronicznych pod kątem wydajności, niezawodności i kosztów.",
                    "en" => "Optimizing mechatronic systems for performance, reliability, and cost."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23314,
                "name" => json_encode([
                    "pl" => "Testowanie i wdrażanie nowych technologii mechatronicznych do produkcji.",
                    "en" => "Testing and implementing new mechatronic technologies into production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23315,
                "name" => json_encode([
                    "pl" => "Analiza i diagnoza usterek w systemach mechatronicznych oraz ich naprawa.",
                    "en" => "Analysis and diagnosis of faults in mechatronic systems and their repair."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23316,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej, w tym schematów, instrukcji i raportów.",
                    "en" => "Maintaining technical documentation, including schematics, manuals, and reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_REALIZACJI_NAGRAŃ = [

            [
                "id" => 23317,
                "name" => json_encode([
                    "pl" => "Przygotowanie sprzętu do realizacji nagrań audio, w tym mikrofonów, urządzeń nagrywających i systemów rejestracji dźwięku.",
                    "en" => "Preparing equipment for audio recording, including microphones, recording devices, and sound recording systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23318,
                "name" => json_encode([
                    "pl" => "Obsługa techniczna podczas nagrań dźwiękowych, zapewniając optymalne ustawienia mikrofonów i innych urządzeń.",
                    "en" => "Technical operation during audio recordings, ensuring optimal microphone settings and other equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23319,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości dźwięku w trakcie nagrań oraz wprowadzanie poprawek technicznych w czasie rzeczywistym.",
                    "en" => "Monitoring sound quality during recordings and making technical adjustments in real time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23320,
                "name" => json_encode([
                    "pl" => "Miksowanie i edytowanie nagrań audio w celu uzyskania najwyższej jakości dźwięku.",
                    "en" => "Mixing and editing audio recordings to achieve the highest sound quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23321,
                "name" => json_encode([
                    "pl" => "Współpraca z reżyserami dźwięku i innymi członkami ekipy produkcyjnej, aby zapewnić wysoką jakość nagrań.",
                    "en" => "Collaborating with sound directors and other production team members to ensure high-quality recordings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23322,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów dźwiękowych oraz zapewnianie zgodności nagrań z wymaganiami technicznymi.",
                    "en" => "Conducting sound tests and ensuring that recordings meet technical requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_REALIZACJI_NAGŁOŚNIEŃ = [

            [
                "id" => 23323,
                "name" => json_encode([
                    "pl" => "Projektowanie, instalacja i konserwacja systemów nagłośnieniowych w różnych typach obiektów, takich jak sale konferencyjne, teatry i koncerty.",
                    "en" => "Design, installation, and maintenance of sound systems in various venues such as conference halls, theaters, and concerts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23324,
                "name" => json_encode([
                    "pl" => "Obsługa sprzętu nagłośnieniowego podczas wydarzeń na żywo, dostosowywanie ustawień w zależności od wymagań akustycznych.",
                    "en" => "Operating sound equipment during live events, adjusting settings according to acoustic requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23325,
                "name" => json_encode([
                    "pl" => "Montaż i konfiguracja mikrofonów, głośników, wzmacniaczy i innych urządzeń nagłośnieniowych w salach koncertowych i innych przestrzeniach.",
                    "en" => "Installation and configuration of microphones, speakers, amplifiers, and other sound equipment in concert halls and other spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23326,
                "name" => json_encode([
                    "pl" => "Testowanie systemów nagłośnieniowych, aby zapewnić ich wysoką jakość dźwięku oraz niezawodność podczas wydarzeń.",
                    "en" => "Testing sound systems to ensure high sound quality and reliability during events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23327,
                "name" => json_encode([
                    "pl" => "Monitorowanie dźwięku podczas wydarzeń i dostosowywanie poziomów głośności oraz jakości dźwięku na żywo.",
                    "en" => "Monitoring sound during events and adjusting volume levels and sound quality live."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23328,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem produkcyjnym, artystami i organizatorami, aby spełnić wymagania akustyczne wydarzenia.",
                    "en" => "Collaborating with the production team, artists, and organizers to meet the acoustic requirements of the event."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];


        DB::table('detail_projects')->insert(array_merge(
            $INŻYNIER_ELEKTROENERGETYK,
            $INŻYNIER_ELEKTROENERGETYK_KOLEJOWYCH_SIECI_I_PODSTACJI_TRAKCYJNYCH,
            $INŻYNIER_ELEKTRYK,
            $INŻYNIER_ELEKTRYK_AUTOMATYK,
            $INŻYNIER_TECHNIKI_ŚWIETLNEJ,
            $INŻYNIER_URZĄDZEŃ_I_SYSTEMÓW_ENERGETYKI_ODNAWIALNEJ,
            $POZOSTALI_INŻYNIEROWIE_ELEKTRYCY,
            $ELEKTROMONTER_INSTALACJI_ELEKTRYCZNYCH,
            $ELEKTROMONTER_REKLAM_ŚWIETLNYCH,
            $ELEKTRYK_BUDOWLANY,
            $POZOSTALI_ELEKTRYCY_BUDOWLANI_I_POKREWNI,
            $ELEKTROMECHANIK_ELEKTRYCZNYCH_PRZYRZĄDÓW_POMIAROWYCH,
            $ELEKTROMECHANIK_POJAZDÓW_SAMOCHODOWYCH,
            $ELEKTROMECHANIK_SPRZĘTU_GOSPODARSTWA_DOMOWEGO,
            $ELEKTROMECHANIK_URZĄDZEŃ_CHŁODNICZYCH,
            $ELEKTROMECHANIK_URZĄDZEŃ_STEROWANIA_RUCHEM_KOLEJOWYM,
            $ELEKTROMONTER_ELEKTRYK_ZAKŁADOWY,
            $ELEKTROMONTER_KONSERWATOR_URZĄDZEŃ_DŹWIGNICOWYCH,
            $ELEKTROMONTER_LOTNICZY,
            $ELEKTROMONTER_MASZYN_ELEKTRYCZNYCH,
            $ELEKTROMONTER_MASZYN_I_URZĄDZEŃ_GÓRNICTWA_ODKRYWKOWEGO,
            $ELEKTROMONTER_MASZYN_I_URZĄDZEŃ_GÓRNICTWA_PODZIEMNEGO,
            $ELEKTROMONTER_OKRĘTOWY,
            $ELEKTROMONTER_PREFABRYKOWANYCH_STACJI_TRANSFORMATOROWYCH,
            $ELEKTROMONTER_ROZDZIELNI_I_PODSTACJI_TRAKCYJNYCH,
            $ELEKTROMONTER_TABORU_SZYNOWEGO,
            $ELEKTROMONTER_TELEKOMUNIKACYJNYCH_URZĄDZEŃ_ZASILAJĄCYCH,
            $ELEKTROMONTER_TRANSFORMATORÓW,
            $ELEKTROMONTER_UKŁADÓW_POMIAROWYCH_I_AUTOMATYKI_ZABEZPIECZENIOWEJ,
            $ELEKTROMONTER_URZĄDZEŃ_SYGNALIZACYJNYCH,
            $POZOSTALI_ELEKTROMECHANICY_I_ELEKTROMONTERZY,
            $ELEKTROMECHANIK,
            $ELEKTROMONTER_LINII_KABLOWYCH,
            $ELEKTROMONTER_NAPOWIETRZNYCH_LINII_NISKICH_I_ŚREDNICH_NAPIĘĆ,
            $ELEKTROMONTER_NAPOWIETRZNYCH_LINII_WYSOKICH_I_NAJWYŻSZYCH_NAPIĘĆ,
            $ELEKTROMONTER_POGOTOWIA_ELEKTROENERGETYCZNEGO,
            $ELEKTROMONTER_SIECI_TRAKCYJNEJ,
            $POZOSTALI_MONTERZY_LINII_ELEKTRYCZNYCH,
            $TECHNIK_ELEKTROENERGETYK_TRANSPORTU_SZYNOWEGO,
            $TECHNIK_ELEKTRYK,
            $TECHNIK_ELEKTRYK_KOLEJOWYCH_SIECI_ELEKTROENERGETYCZNYCH,
            $TECHNIK_ELEKTRYK_SAMOCHODOWY,
            $TECHNIK_ELEKTRYK_URZĄDZEŃ_ZABEZPIECZENIA_I_STEROWANIA_RUCHEM_KOLEJOWYM,
            $TECHNIK_ENERGETYK,
            $POZOSTALI_TECHNICY_ELEKTRYCY,
            $ELEKTROENERGETYK_ELEKTROWNI_CIEPLNYCH,
            $ELEKTROENERGETYK_ELEKTROWNI_WODNYCH,
            $ELEKTROENERGETYK_NASTAWNI,
            $ELEKTROENERGETYK_POMIARÓW_I_ZABEZPIECZEŃ,
            $MASZYNISTA_TURBOZESPOŁU_PAROWEGO,
            $MASZYNISTA_TURBOZESPOŁU_WODNEGO,
            $MASZYNISTA_URZĄDZEŃ_CIEPŁOWNICZYCH_ELEKTROWNI,
            $MASZYNISTA_URZĄDZEŃ_POMOCNICZYCH_ELEKTROWNI,
            $OBCHODOWY_BLOKU,
            $POZOSTALI_OPERATORZY_URZĄDZEŃ_ENERGETYCZNYCH,
            $INŻYNIER_ELEKTRONIK,
            $INŻYNIER_MECHATRONIK,
            $INŻYNIER_URZĄDZEŃ_ZABEZPIECZENIA_I_STEROWANIA_RUCHEM_KOLEJOWYM,
            $OPTOELEKTRONIK,
            $POZOSTALI_INŻYNIEROWIE_ELEKTRONICY,
            $PROJEKTANT_UKŁADÓW_SCALONYCH,
            $INSTALATOR_SYSTEMÓW_ALARMOWYCH_PRZECIWKRADZIEŻOWYCH,
            $POZOSTALI_TECHNICY_ELEKTRONICY_I_POKREWNI,
            $MONTER_ELEKTRONIK_APARATURA_MEDYCZNA,
            $MONTER_ELEKTRONIK_APARATURA_POMIAROWA,
            $MONTER_ELEKTRONIK_ELEKTRONICZNE_INSTRUMENTY_MUZYCZNE,
            $MONTER_ELEKTRONIK_ELEKTRONICZNY_SPRZĘT_SYGNALIZACYJNY_I_SYSTEMY_SYGNALIZACYJNE,
            $MONTER_ELEKTRONIK_NAPRAWA_SPRZĘTU_AUDIOWIZUALNEGO,
            $MONTER_ELEKTRONIK_UKŁADY_ELEKTRONICZNE_AUTOMATYKI_PRZEMYSŁOWEJ,
            $MONTER_KONSERWATOR_URZĄDZEŃ_ZABEZPIECZEŃ_TECHNICZNYCH_OSÓB_I_MIENIA,
            $MONTER_MECHATRONIK,
            $MONTER_URZĄDZEŃ_STEROWANIA_RUCHEM_POCIĄGÓW_METRA,
            $MONTER_URZĄDZEŃ_ZDALNEGO_STEROWANIA_I_KONTROLI_DYSPOZYTORSKIEJ_METRA,
            $POZOSTALI_MONTERZY_ELEKTRONICY_I_SERWISANCI_URZĄDZEŃ_ELEKTRONICZNYCH,
            $MONTER_INSTALACJI_I_URZĄDZEŃ_TELEKOMUNIKACYJNYCH,
            $MONTER_SIECI_I_URZĄDZEŃ_TELEKOMUNIKACYJNYCH,
            $MONTER_SIECI_TELEKOMUNIKACYJNYCH,
            $MONTER_ELEKTRONIK_INSTALACJA_ANTEN,
            $MONTER_ELEKTRONIK_SPRZĘT_COMPUTEROWY,
            $MONTER_ELEKTRONIK_URZĄDZENIA_RADIOMUNIKACYJNE,
            $MONTER_ELEKTRONIK_URZĄDZENIA_RADIOWO_TELEWIZYJNE,
            $POZOSTALI_MONTERZY_I_SERWISANCI_INSTALACJI_I_URZĄDZEŃ_TELEINFORMATYCZNYCH,
            $ELEKTRONIK,
            $MECHATRONIK,
            $TECHNIK_REALIZACJI_NAGRAŃ,
            $TECHNIK_REALIZACJI_NAGŁOŚNIEŃ,

        ));

        Category::whereId('1245')->first()->detailprojects()->attach(collect($INŻYNIER_ELEKTROENERGETYK)->pluck('id')->toArray());
        Category::whereId('1246')->first()->detailprojects()->attach(collect($INŻYNIER_ELEKTROENERGETYK_KOLEJOWYCH_SIECI_I_PODSTACJI_TRAKCYJNYCH)->pluck('id')->toArray());
        Category::whereId('1247')->first()->detailprojects()->attach(collect($INŻYNIER_ELEKTRYK)->pluck('id')->toArray());
        Category::whereId('1248')->first()->detailprojects()->attach(collect($INŻYNIER_ELEKTRYK_AUTOMATYK)->pluck('id')->toArray());
        Category::whereId('1249')->first()->detailprojects()->attach(collect($INŻYNIER_TECHNIKI_ŚWIETLNEJ)->pluck('id')->toArray());
        Category::whereId('1250')->first()->detailprojects()->attach(collect($INŻYNIER_URZĄDZEŃ_I_SYSTEMÓW_ENERGETYKI_ODNAWIALNEJ)->pluck('id')->toArray());
        Category::whereId('1251')->first()->detailprojects()->attach(collect($POZOSTALI_INŻYNIEROWIE_ELEKTRYCY)->pluck('id')->toArray());
        Category::whereId('1254')->first()->detailprojects()->attach(collect($ELEKTROMONTER_INSTALACJI_ELEKTRYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1255')->first()->detailprojects()->attach(collect($ELEKTROMONTER_REKLAM_ŚWIETLNYCH)->pluck('id')->toArray());
        Category::whereId('1257')->first()->detailprojects()->attach(collect($ELEKTRYK_BUDOWLANY)->pluck('id')->toArray());
        Category::whereId('1258')->first()->detailprojects()->attach(collect($POZOSTALI_ELEKTRYCY_BUDOWLANI_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1261')->first()->detailprojects()->attach(collect($ELEKTROMECHANIK_ELEKTRYCZNYCH_PRZYRZĄDÓW_POMIAROWYCH)->pluck('id')->toArray());
        Category::whereId('1262')->first()->detailprojects()->attach(collect($ELEKTROMECHANIK_POJAZDÓW_SAMOCHODOWYCH)->pluck('id')->toArray());
        Category::whereId('1263')->first()->detailprojects()->attach(collect($ELEKTROMECHANIK_SPRZĘTU_GOSPODARSTWA_DOMOWEGO)->pluck('id')->toArray());
        Category::whereId('1264')->first()->detailprojects()->attach(collect($ELEKTROMECHANIK_URZĄDZEŃ_CHŁODNICZYCH)->pluck('id')->toArray());
        Category::whereId('1265')->first()->detailprojects()->attach(collect($ELEKTROMECHANIK_URZĄDZEŃ_STEROWANIA_RUCHEM_KOLEJOWYM)->pluck('id')->toArray());
        Category::whereId('1266')->first()->detailprojects()->attach(collect($ELEKTROMONTER_ELEKTRYK_ZAKŁADOWY)->pluck('id')->toArray());
        Category::whereId('1267')->first()->detailprojects()->attach(collect($ELEKTROMONTER_KONSERWATOR_URZĄDZEŃ_DŹWIGNICOWYCH)->pluck('id')->toArray());
        Category::whereId('1268')->first()->detailprojects()->attach(collect($ELEKTROMONTER_LOTNICZY)->pluck('id')->toArray());
        Category::whereId('1269')->first()->detailprojects()->attach(collect($ELEKTROMONTER_MASZYN_ELEKTRYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1270')->first()->detailprojects()->attach(collect($ELEKTROMONTER_MASZYN_I_URZĄDZEŃ_GÓRNICTWA_ODKRYWKOWEGO)->pluck('id')->toArray());
        Category::whereId('1271')->first()->detailprojects()->attach(collect($ELEKTROMONTER_MASZYN_I_URZĄDZEŃ_GÓRNICTWA_PODZIEMNEGO)->pluck('id')->toArray());
        Category::whereId('1272')->first()->detailprojects()->attach(collect($ELEKTROMONTER_OKRĘTOWY)->pluck('id')->toArray());
        Category::whereId('1273')->first()->detailprojects()->attach(collect($ELEKTROMONTER_PREFABRYKOWANYCH_STACJI_TRANSFORMATOROWYCH)->pluck('id')->toArray());
        Category::whereId('1274')->first()->detailprojects()->attach(collect($ELEKTROMONTER_ROZDZIELNI_I_PODSTACJI_TRAKCYJNYCH)->pluck('id')->toArray());
        Category::whereId('1275')->first()->detailprojects()->attach(collect($ELEKTROMONTER_TABORU_SZYNOWEGO)->pluck('id')->toArray());
        Category::whereId('1276')->first()->detailprojects()->attach(collect($ELEKTROMONTER_TELEKOMUNIKACYJNYCH_URZĄDZEŃ_ZASILAJĄCYCH)->pluck('id')->toArray());
        Category::whereId('1277')->first()->detailprojects()->attach(collect($ELEKTROMONTER_TRANSFORMATORÓW)->pluck('id')->toArray());
        Category::whereId('1278')->first()->detailprojects()->attach(collect($ELEKTROMONTER_UKŁADÓW_POMIAROWYCH_I_AUTOMATYKI_ZABEZPIECZENIOWEJ)->pluck('id')->toArray());
        Category::whereId('1279')->first()->detailprojects()->attach(collect($ELEKTROMONTER_URZĄDZEŃ_SYGNALIZACYJNYCH)->pluck('id')->toArray());
        Category::whereId('1280')->first()->detailprojects()->attach(collect($POZOSTALI_ELEKTROMECHANICY_I_ELEKTROMONTERZY)->pluck('id')->toArray());
        Category::whereId('1281')->first()->detailprojects()->attach(collect($ELEKTROMECHANIK)->pluck('id')->toArray());
        Category::whereId('1283')->first()->detailprojects()->attach(collect($ELEKTROMONTER_LINII_KABLOWYCH)->pluck('id')->toArray());
        Category::whereId('1284')->first()->detailprojects()->attach(collect($ELEKTROMONTER_NAPOWIETRZNYCH_LINII_NISKICH_I_ŚREDNICH_NAPIĘĆ)->pluck('id')->toArray());
        Category::whereId('1285')->first()->detailprojects()->attach(collect($ELEKTROMONTER_NAPOWIETRZNYCH_LINII_WYSOKICH_I_NAJWYŻSZYCH_NAPIĘĆ)->pluck('id')->toArray());
        Category::whereId('1286')->first()->detailprojects()->attach(collect($ELEKTROMONTER_POGOTOWIA_ELEKTROENERGETYCZNEGO)->pluck('id')->toArray());
        Category::whereId('1287')->first()->detailprojects()->attach(collect($ELEKTROMONTER_SIECI_TRAKCYJNEJ)->pluck('id')->toArray());
        Category::whereId('1288')->first()->detailprojects()->attach(collect($POZOSTALI_MONTERZY_LINII_ELEKTRYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1290')->first()->detailprojects()->attach(collect($TECHNIK_ELEKTROENERGETYK_TRANSPORTU_SZYNOWEGO)->pluck('id')->toArray());
        Category::whereId('1291')->first()->detailprojects()->attach(collect($TECHNIK_ELEKTRYK)->pluck('id')->toArray());
        Category::whereId('1292')->first()->detailprojects()->attach(collect($TECHNIK_ELEKTRYK_KOLEJOWYCH_SIECI_ELEKTROENERGETYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1293')->first()->detailprojects()->attach(collect($TECHNIK_ELEKTRYK_SAMOCHODOWY)->pluck('id')->toArray());
        Category::whereId('1294')->first()->detailprojects()->attach(collect($TECHNIK_ELEKTRYK_URZĄDZEŃ_ZABEZPIECZENIA_I_STEROWANIA_RUCHEM_KOLEJOWYM)->pluck('id')->toArray());
        Category::whereId('1295')->first()->detailprojects()->attach(collect($TECHNIK_ENERGETYK)->pluck('id')->toArray());
        Category::whereId('1296')->first()->detailprojects()->attach(collect($POZOSTALI_TECHNICY_ELEKTRYCY)->pluck('id')->toArray());
        Category::whereId('1298')->first()->detailprojects()->attach(collect($ELEKTROENERGETYK_ELEKTROWNI_CIEPLNYCH)->pluck('id')->toArray());
        Category::whereId('1299')->first()->detailprojects()->attach(collect($ELEKTROENERGETYK_ELEKTROWNI_WODNYCH)->pluck('id')->toArray());
        Category::whereId('1300')->first()->detailprojects()->attach(collect($ELEKTROENERGETYK_NASTAWNI)->pluck('id')->toArray());
        Category::whereId('1301')->first()->detailprojects()->attach(collect($ELEKTROENERGETYK_POMIARÓW_I_ZABEZPIECZEŃ)->pluck('id')->toArray());
        Category::whereId('1303')->first()->detailprojects()->attach(collect($MASZYNISTA_TURBOZESPOŁU_PAROWEGO)->pluck('id')->toArray());
        Category::whereId('1304')->first()->detailprojects()->attach(collect($MASZYNISTA_TURBOZESPOŁU_WODNEGO)->pluck('id')->toArray());
        Category::whereId('1305')->first()->detailprojects()->attach(collect($MASZYNISTA_URZĄDZEŃ_CIEPŁOWNICZYCH_ELEKTROWNI)->pluck('id')->toArray());
        Category::whereId('1306')->first()->detailprojects()->attach(collect($MASZYNISTA_URZĄDZEŃ_POMOCNICZYCH_ELEKTROWNI)->pluck('id')->toArray());
        Category::whereId('1307')->first()->detailprojects()->attach(collect($OBCHODOWY_BLOKU)->pluck('id')->toArray());
        Category::whereId('1308')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_URZĄDZEŃ_ENERGETYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1312')->first()->detailprojects()->attach(collect($INŻYNIER_ELEKTRONIK)->pluck('id')->toArray());
        Category::whereId('1313')->first()->detailprojects()->attach(collect($INŻYNIER_MECHATRONIK)->pluck('id')->toArray());
        Category::whereId('1314')->first()->detailprojects()->attach(collect($INŻYNIER_URZĄDZEŃ_ZABEZPIECZENIA_I_STEROWANIA_RUCHEM_KOLEJOWYM)->pluck('id')->toArray());
        Category::whereId('1315')->first()->detailprojects()->attach(collect($OPTOELEKTRONIK)->pluck('id')->toArray());
        Category::whereId('1316')->first()->detailprojects()->attach(collect($POZOSTALI_INŻYNIEROWIE_ELEKTRONICY)->pluck('id')->toArray());
        Category::whereId('1317')->first()->detailprojects()->attach(collect($PROJEKTANT_UKŁADÓW_SCALONYCH)->pluck('id')->toArray());
        Category::whereId('1318')->first()->detailprojects()->attach(collect($INSTALATOR_SYSTEMÓW_ALARMOWYCH_PRZECIWKRADZIEŻOWYCH)->pluck('id')->toArray());
        Category::whereId('1324')->first()->detailprojects()->attach(collect($POZOSTALI_TECHNICY_ELEKTRONICY_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1332')->first()->detailprojects()->attach(collect($MONTER_ELEKTRONIK_APARATURA_MEDYCZNA)->pluck('id')->toArray());
        Category::whereId('1334')->first()->detailprojects()->attach(collect($MONTER_ELEKTRONIK_APARATURA_POMIAROWA)->pluck('id')->toArray());
        Category::whereId('1335')->first()->detailprojects()->attach(collect($MONTER_ELEKTRONIK_ELEKTRONICZNE_INSTRUMENTY_MUZYCZNE)->pluck('id')->toArray());
        Category::whereId('1336')->first()->detailprojects()->attach(collect($MONTER_ELEKTRONIK_ELEKTRONICZNY_SPRZĘT_SYGNALIZACYJNY_I_SYSTEMY_SYGNALIZACYJNE)->pluck('id')->toArray());
        Category::whereId('1337')->first()->detailprojects()->attach(collect($MONTER_ELEKTRONIK_NAPRAWA_SPRZĘTU_AUDIOWIZUALNEGO)->pluck('id')->toArray());
        Category::whereId('1338')->first()->detailprojects()->attach(collect($MONTER_ELEKTRONIK_UKŁADY_ELEKTRONICZNE_AUTOMATYKI_PRZEMYSŁOWEJ)->pluck('id')->toArray());
        Category::whereId('1339')->first()->detailprojects()->attach(collect($MONTER_KONSERWATOR_URZĄDZEŃ_ZABEZPIECZEŃ_TECHNICZNYCH_OSÓB_I_MIENIA)->pluck('id')->toArray());
        Category::whereId('1340')->first()->detailprojects()->attach(collect($MONTER_MECHATRONIK)->pluck('id')->toArray());
        Category::whereId('1341')->first()->detailprojects()->attach(collect($MONTER_URZĄDZEŃ_STEROWANIA_RUCHEM_POCIĄGÓW_METRA)->pluck('id')->toArray());
        Category::whereId('1342')->first()->detailprojects()->attach(collect($MONTER_URZĄDZEŃ_ZDALNEGO_STEROWANIA_I_KONTROLI_DYSPOZYTORSKIEJ_METRA)->pluck('id')->toArray());
        Category::whereId('1343')->first()->detailprojects()->attach(collect($POZOSTALI_MONTERZY_ELEKTRONICY_I_SERWISANCI_URZĄDZEŃ_ELEKTRONICZNYCH)->pluck('id')->toArray());
        Category::whereId('1344')->first()->detailprojects()->attach(collect($MONTER_INSTALACJI_I_URZĄDZEŃ_TELEKOMUNIKACYJNYCH)->pluck('id')->toArray());
        Category::whereId('1345')->first()->detailprojects()->attach(collect($MONTER_SIECI_I_URZĄDZEŃ_TELEKOMUNIKACYJNYCH)->pluck('id')->toArray());
        Category::whereId('1346')->first()->detailprojects()->attach(collect($MONTER_SIECI_TELEKOMUNIKACYJNYCH)->pluck('id')->toArray());
        Category::whereId('1347')->first()->detailprojects()->attach(collect($MONTER_ELEKTRONIK_INSTALACJA_ANTEN)->pluck('id')->toArray());
        Category::whereId('1348')->first()->detailprojects()->attach(collect($MONTER_ELEKTRONIK_SPRZĘT_COMPUTEROWY)->pluck('id')->toArray());
        Category::whereId('1349')->first()->detailprojects()->attach(collect($MONTER_ELEKTRONIK_URZĄDZENIA_RADIOMUNIKACYJNE)->pluck('id')->toArray());
        Category::whereId('1350')->first()->detailprojects()->attach(collect($MONTER_ELEKTRONIK_URZĄDZENIA_RADIOWO_TELEWIZYJNE)->pluck('id')->toArray());
        Category::whereId('1351')->first()->detailprojects()->attach(collect($POZOSTALI_MONTERZY_I_SERWISANCI_INSTALACJI_I_URZĄDZEŃ_TELEINFORMATYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1352')->first()->detailprojects()->attach(collect($ELEKTRONIK)->pluck('id')->toArray());
        Category::whereId('1353')->first()->detailprojects()->attach(collect($MECHATRONIK)->pluck('id')->toArray());
        Category::whereId('1359')->first()->detailprojects()->attach(collect($TECHNIK_REALIZACJI_NAGRAŃ)->pluck('id')->toArray());
        Category::whereId('1360')->first()->detailprojects()->attach(collect($TECHNIK_REALIZACJI_NAGŁOŚNIEŃ)->pluck('id')->toArray());

    }
}

