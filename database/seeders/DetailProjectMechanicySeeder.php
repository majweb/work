<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectMechanicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();

        $INŻYNIEROWIE_MECHANICY = [
            [
                "id" => 18807,

                "name" => json_encode([
                    "pl" => "Projektowanie maszyn, urządzeń i systemów mechanicznych",
                    "en" => "Designing machines, devices, and mechanical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18808,

                "name" => json_encode([
                    "pl" => "Analiza wytrzymałości materiałów i elementów konstrukcyjnych",
                    "en" => "Analyzing the strength of materials and structural components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18809,

                "name" => json_encode([
                    "pl" => "Wdrażanie innowacyjnych rozwiązań w projektach mechanicznych",
                    "en" => "Implementing innovative solutions in mechanical projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18810,

                "name" => json_encode([
                    "pl" => "Testowanie i optymalizacja wydajności maszyn",
                    "en" => "Testing and optimizing machine performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18811,

                "name" => json_encode([
                    "pl" => "Prowadzenie nadzoru nad montażem oraz instalacją urządzeń",
                    "en" => "Supervising the assembly and installation of devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18812,

                "name" => json_encode([
                    "pl" => "Współpraca z działami produkcyjnymi i technologicznymi",
                    "en" => "Collaborating with production and technology departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_AWIONIK = [
            [
                "id" => 18813,

                "name" => json_encode([
                    "pl" => "Projektowanie, instalacja i konserwacja systemów elektronicznych w samolotach",
                    "en" => "Designing, installing, and maintaining electronic systems in aircraft."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18814,

                "name" => json_encode([
                    "pl" => "Testowanie i diagnoza systemów nawigacyjnych, komunikacyjnych i radarowych",
                    "en" => "Testing and diagnosing navigation, communication, and radar systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18815,

                "name" => json_encode([
                    "pl" => "Współpraca z pilotami i inżynierami lotniczymi w celu optymalizacji systemów",
                    "en" => "Collaborating with pilots and aerospace engineers to optimize systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18816,

                "name" => json_encode([
                    "pl" => "Utrzymywanie zgodności systemów awionicznych z normami bezpieczeństwa lotniczego",
                    "en" => "Ensuring avionics systems comply with aviation safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18817,

                "name" => json_encode([
                    "pl" => "Dokumentacja i raportowanie wyników przeglądów technicznych",
                    "en" => "Documenting and reporting the results of technical inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18818,

                "name" => json_encode([
                    "pl" => "Analiza i rozwiązywanie problemów technicznych związanych z awioniką",
                    "en" => "Analyzing and resolving technical issues related to avionics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_MECHANIK = [
            [
                "id" => 18819,

                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa maszyn oraz urządzeń mechanicznych",
                    "en" => "Assembling, maintaining, and repairing machines and mechanical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18820,

                "name" => json_encode([
                    "pl" => "Diagnoza i usuwanie usterek w systemach mechanicznych",
                    "en" => "Diagnosing and resolving faults in mechanical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18821,

                "name" => json_encode([
                    "pl" => "Prowadzenie przeglądów technicznych maszyn",
                    "en" => "Conducting technical inspections of machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18822,

                "name" => json_encode([
                    "pl" => "Kalibracja i regulacja urządzeń zgodnie z wymaganiami technicznymi",
                    "en" => "Calibrating and adjusting devices according to technical requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18823,

                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa podczas pracy z urządzeniami",
                    "en" => "Following safety principles when working with devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18824,

                "name" => json_encode([
                    "pl" => "Dokumentowanie przeprowadzonych napraw i przeglądów",
                    "en" => "Documenting repairs and inspections performed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_AWIONIK = [
            [
                "id" => 18825,

                "name" => json_encode([
                    "pl" => "Instalacja i serwisowanie systemów elektronicznych w samolotach",
                    "en" => "Installing and servicing electronic systems in aircraft."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18826,

                "name" => json_encode([
                    "pl" => "Testowanie działania systemów nawigacyjnych i komunikacyjnych",
                    "en" => "Testing the operation of navigation and communication systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18827,

                "name" => json_encode([
                    "pl" => "Diagnoza problemów technicznych i naprawa usterek w systemach awionicznych",
                    "en" => "Diagnosing technical problems and repairing faults in avionics systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18828,

                "name" => json_encode([
                    "pl" => "Współpraca z mechanikami lotniczymi w zakresie konserwacji statków powietrznych",
                    "en" => "Collaborating with aviation mechanics in aircraft maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18829,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej i raportowanie wyników przeglądów",
                    "en" => "Maintaining technical documentation and reporting inspection results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18830,

                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów bezpieczeństwa lotniczego",
                    "en" => "Following aviation safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_MECHANIK_LOTNICZY = [
            [
                "id" => 18831,

                "name" => json_encode([
                    "pl" => "Konserwacja, naprawa i przeglądy techniczne samolotów i śmigłowców",
                    "en" => "Maintaining, repairing, and inspecting aircraft and helicopters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18832,

                "name" => json_encode([
                    "pl" => "Diagnoza i naprawa usterek mechanicznych w statkach powietrznych",
                    "en" => "Diagnosing and repairing mechanical faults in aircraft."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18833,

                "name" => json_encode([
                    "pl" => "Testowanie poprawności działania mechanizmów lotniczych",
                    "en" => "Testing the functionality of aviation mechanisms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18834,

                "name" => json_encode([
                    "pl" => "Dokumentowanie przeprowadzonych napraw i przeglądów",
                    "en" => "Documenting repairs and inspections performed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18835,

                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa pracy w środowisku lotniczym",
                    "en" => "Following safety principles in aviation environments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18836,

                "name" => json_encode([
                    "pl" => "Współpraca z innymi specjalistami lotniczymi, takimi jak technicy awioniki",
                    "en" => "Collaborating with other aviation specialists, such as avionics technicians."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_POJAZDÓW_KOLEJOWYCH = [
            [
                "id" => 18837,

                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa pojazdów kolejowych",
                    "en" => "Assembling, maintaining, and repairing railway vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18838,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów technicznych i diagnostyka usterek",
                    "en" => "Conducting technical inspections and diagnosing faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18839,

                "name" => json_encode([
                    "pl" => "Testowanie układów hamulcowych, napędowych i elektrycznych pociągów",
                    "en" => "Testing braking, propulsion, and electrical systems in trains."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18840,

                "name" => json_encode([
                    "pl" => "Dokumentowanie prac naprawczych i konserwacyjnych",
                    "en" => "Documenting repair and maintenance work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18841,

                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa w środowisku kolejowym",
                    "en" => "Adhering to safety principles in railway environments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18842,

                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami i mechanikami kolejowymi",
                    "en" => "Collaborating with railway engineers and mechanics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MECHANICY_POJAZDÓW_SAMOCHODOWYCH = [
            [
                "id" => 18843,

                "name" => json_encode([
                    "pl" => "Diagnostyka i naprawa usterek w pojazdach samochodowych",
                    "en" => "Diagnosing and repairing faults in motor vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18844,

                "name" => json_encode([
                    "pl" => "Wymiana uszkodzonych części oraz konserwacja podzespołów pojazdów",
                    "en" => "Replacing damaged parts and maintaining vehicle components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18845,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów technicznych samochodów",
                    "en" => "Conducting technical inspections of cars."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18846,

                "name" => json_encode([
                    "pl" => "Testowanie i kalibracja systemów mechanicznych i elektronicznych",
                    "en" => "Testing and calibrating mechanical and electronic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18847,

                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa pracy i standardów warsztatowych",
                    "en" => "Following safety rules and workshop standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18848,

                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych napraw i przeglądów",
                    "en" => "Documenting repairs and inspections performed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_POJAZDÓW_SAMOCHODOWYCH = [
            [
                "id" => 18849,

                "name" => json_encode([
                    "pl" => "Diagnozowanie i naprawa usterek mechanicznych oraz elektronicznych w pojazdach",
                    "en" => "Diagnosing and repairing mechanical and electronic faults in vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18850,

                "name" => json_encode([
                    "pl" => "Wykonywanie przeglądów technicznych i konserwacji samochodów",
                    "en" => "Conducting technical inspections and vehicle maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18851,

                "name" => json_encode([
                    "pl" => "Testowanie sprawności układów hamulcowych, napędowych i elektrycznych",
                    "en" => "Testing the efficiency of braking, drive, and electrical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18852,

                "name" => json_encode([
                    "pl" => "Montaż i wymiana części eksploatacyjnych pojazdów",
                    "en" => "Installing and replacing consumable vehicle parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18853,

                "name" => json_encode([
                    "pl" => "Przestrzeganie norm bezpieczeństwa i procedur warsztatowych",
                    "en" => "Following safety norms and workshop procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18854,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji napraw oraz raportowanie stanu technicznego pojazdów",
                    "en" => "Maintaining repair records and reporting the technical condition of vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DIAGNOSTA_UPRAWNIONY_DO_WYKONYWANIA_BADAŃ_TECHNICZNYCH_POJAZDÓW = [
            [
                "id" => 18855,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań technicznych pojazdów według wytycznych",
                    "en" => "Conducting vehicle technical inspections according to guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18856,

                "name" => json_encode([
                    "pl" => "Sprawdzanie zgodności stanu technicznego z wymaganiami prawnymi",
                    "en" => "Checking compliance of technical conditions with legal requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18857,

                "name" => json_encode([
                    "pl" => "Diagnozowanie usterek wpływających na bezpieczeństwo jazdy",
                    "en" => "Diagnosing faults affecting driving safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18858,

                "name" => json_encode([
                    "pl" => "Wydawanie opinii o dopuszczeniu pojazdu do ruchu",
                    "en" => "Issuing opinions on vehicle roadworthiness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18859,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej oraz raportowanie wyników badań",
                    "en" => "Maintaining technical documentation and reporting inspection results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18860,

                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów i przepisów dotyczących kontroli pojazdów",
                    "en" => "Following standards and regulations related to vehicle inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLER_STANU_TECHNICZNEGO_POJAZDÓW = [
            [
                "id" => 18861,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli i ocena stanu technicznego pojazdów",
                    "en" => "Conducting inspections and assessing the technical condition of vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18862,

                "name" => json_encode([
                    "pl" => "Identyfikacja usterek oraz propozycje koniecznych napraw",
                    "en" => "Identifying faults and proposing necessary repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18863,

                "name" => json_encode([
                    "pl" => "Sporządzanie raportów z przeglądów technicznych",
                    "en" => "Preparing reports from technical inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18864,

                "name" => json_encode([
                    "pl" => "Współpraca z mechanikami i diagnostami przy konserwacji pojazdów",
                    "en" => "Collaborating with mechanics and diagnosticians in vehicle maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18865,

                "name" => json_encode([
                    "pl" => "Przestrzeganie norm bezpieczeństwa i wymogów prawnych",
                    "en" => "Adhering to safety standards and legal requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18866,

                "name" => json_encode([
                    "pl" => "Doradztwo dla klientów w zakresie utrzymania pojazdu w dobrym stanie technicznym",
                    "en" => "Advising clients on maintaining vehicles in good technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LAKIERNIK_SAMOCHODOWY = [
            [
                "id" => 18867,

                "name" => json_encode([
                    "pl" => "Przygotowanie powierzchni pojazdów do lakierowania (czyszczenie, szpachlowanie, szlifowanie)",
                    "en" => "Preparing vehicle surfaces for painting (cleaning, filling, sanding)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18868,

                "name" => json_encode([
                    "pl" => "Nakładanie powłok lakierniczych, lakierowanie części i elementów karoserii",
                    "en" => "Applying paint coatings and painting car body parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18869,

                "name" => json_encode([
                    "pl" => "Mieszanie farb i dobieranie kolorów zgodnie z wymaganiami klienta",
                    "en" => "Mixing paints and matching colors according to customer requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18870,

                "name" => json_encode([
                    "pl" => "Diagnoza i naprawa drobnych uszkodzeń powłok lakierniczych",
                    "en" => "Diagnosing and repairing minor paint damage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18871,

                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa pracy oraz stosowanie ochrony osobistej",
                    "en" => "Following safety rules and using personal protective equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18872,

                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych prac i dbanie o jakość wykończenia",
                    "en" => "Documenting completed work and ensuring quality finishing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BLACHARZ_SAMOCHODOWY = [
            [
                "id" => 18873,

                "name" => json_encode([
                    "pl" => "Naprawa uszkodzeń karoserii samochodowych (wgniecenia, otarcia, korozja)",
                    "en" => "Repairing car body damage (dents, scratches, corrosion)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18874,

                "name" => json_encode([
                    "pl" => "Wymiana i dopasowanie uszkodzonych elementów blacharskich",
                    "en" => "Replacing and fitting damaged bodywork components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18875,

                "name" => json_encode([
                    "pl" => "Spawanie, szlifowanie i przygotowanie powierzchni do lakierowania",
                    "en" => "Welding, grinding, and preparing surfaces for painting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18876,

                "name" => json_encode([
                    "pl" => "Używanie specjalistycznych narzędzi do formowania blachy",
                    "en" => "Using specialized tools for sheet metal forming."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18877,

                "name" => json_encode([
                    "pl" => "Montaż i demontaż elementów karoserii",
                    "en" => "Installing and removing car body parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18878,

                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa pracy i dbałość o jakość napraw",
                    "en" => "Following safety rules and ensuring repair quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MECHANIK_KONSERWATOR_URZĄDZEŃ = [
            [
                "id" => 18879,

                "name" => json_encode([
                    "pl" => "Diagnostyka i naprawa usterek w urządzeniach mechanicznych i elektrycznych",
                    "en" => "Diagnosing and repairing faults in mechanical and electrical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18880,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie regularnych przeglądów i konserwacja maszyn",
                    "en" => "Performing regular inspections and machine maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18881,

                "name" => json_encode([
                    "pl" => "Wymiana uszkodzonych części i kalibracja sprzętu",
                    "en" => "Replacing damaged parts and calibrating equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18882,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej napraw i przeglądów",
                    "en" => "Maintaining technical documentation of repairs and inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18883,

                "name" => json_encode([
                    "pl" => "Przestrzeganie norm bezpieczeństwa i instrukcji serwisowych",
                    "en" => "Adhering to safety standards and service instructions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18884,

                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji w celu minimalizacji przestojów maszyn",
                    "en" => "Collaborating with the production department to minimize machine downtime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MECHANIK_MASZYN_I_URZĄDZEŃ = [
            [
                "id" => 18885,

                "name" => json_encode([
                    "pl" => "Naprawa, montaż i demontaż maszyn produkcyjnych i przemysłowych",
                    "en" => "Repairing, assembling, and disassembling industrial and production machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18886,

                "name" => json_encode([
                    "pl" => "Diagnozowanie usterek mechanicznych i elektrycznych",
                    "en" => "Diagnosing mechanical and electrical faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18887,

                "name" => json_encode([
                    "pl" => "Wymiana i regulacja podzespołów maszyn",
                    "en" => "Replacing and adjusting machine components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18888,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji zapobiegawczej maszyn",
                    "en" => "Conducting preventive maintenance of machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18889,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołem technicznym w celu poprawy wydajności maszyn",
                    "en" => "Collaborating with the technical team to improve machine performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18890,

                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa pracy z maszynami",
                    "en" => "Following safety principles when working with machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MECHANIK_MONTER_MASZYN_I_URZĄDZEŃ = [
            [
                "id" => 18891,

                "name" => json_encode([
                    "pl" => "Montaż maszyn i urządzeń zgodnie z dokumentacją techniczną",
                    "en" => "Assembling machines and devices according to technical documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18892,

                "name" => json_encode([
                    "pl" => "Testowanie i regulacja ustawień maszyn po montażu",
                    "en" => "Testing and adjusting machine settings after assembly."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18893,

                "name" => json_encode([
                    "pl" => "Identyfikacja i naprawa usterek podczas instalacji maszyn",
                    "en" => "Identifying and repairing faults during machine installation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18894,

                "name" => json_encode([
                    "pl" => "Współpraca z innymi specjalistami podczas instalacji i serwisowania",
                    "en" => "Collaborating with other specialists during installation and servicing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18895,

                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku i bezpieczeństwa na stanowisku pracy",
                    "en" => "Maintaining order and safety at the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18896,

                "name" => json_encode([
                    "pl" => "Dokumentowanie przeprowadzonych prac montażowych i naprawczych",
                    "en" => "Documenting assembly and repair work performed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ZEGARMISTRZ = [
            [
                "id" => 18897,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja zegarków mechanicznych i elektronicznych",
                    "en" => "Repairing and maintaining mechanical and electronic watches."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18898,

                "name" => json_encode([
                    "pl" => "Wymiana baterii, pasków i innych drobnych elementów zegarka",
                    "en" => "Replacing batteries, straps, and other small watch components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18899,

                "name" => json_encode([
                    "pl" => "Kalibracja i regulacja mechanizmów zegarkowych",
                    "en" => "Calibrating and adjusting watch mechanisms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18900,

                "name" => json_encode([
                    "pl" => "Czyszczenie oraz renowacja części zegarków",
                    "en" => "Cleaning and restoring watch components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18901,

                "name" => json_encode([
                    "pl" => "Praca z precyzyjnymi narzędziami oraz prowadzenie dokumentacji serwisowej",
                    "en" => "Using precision tools and maintaining service documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18902,

                "name" => json_encode([
                    "pl" => "Współpraca z klientami w zakresie diagnozy i naprawy zegarków",
                    "en" => "Collaborating with clients for diagnosis and repair of watches."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $AUTOMATYK = [
            [
                "id" => 18903,

                "name" => json_encode([
                    "pl" => "Programowanie oraz konserwacja systemów automatyki przemysłowej",
                    "en" => "Programming and maintaining industrial automation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18904,

                "name" => json_encode([
                    "pl" => "Konfiguracja i diagnostyka sterowników PLC oraz innych układów sterujących",
                    "en" => "Configuring and diagnosing PLC controllers and other control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18905,

                "name" => json_encode([
                    "pl" => "Testowanie i optymalizacja systemów automatycznych",
                    "en" => "Testing and optimizing automation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18906,

                "name" => json_encode([
                    "pl" => "Diagnozowanie i rozwiązywanie problemów związanych z automatyką",
                    "en" => "Diagnosing and resolving automation-related issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18907,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołami produkcyjnymi i inżynierami w zakresie usprawniania procesów",
                    "en" => "Collaborating with production teams and engineers to improve processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18908,

                "name" => json_encode([
                    "pl" => "Dokumentowanie pracy i zapewnienie zgodności systemów z normami bezpieczeństwa",
                    "en" => "Documenting work and ensuring system compliance with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POMOCNIK_MECHANIKA = [
            [
                "id" => 18909,

                "name" => json_encode([
                    "pl" => "Wspieranie mechaników przy naprawach i konserwacji maszyn",
                    "en" => "Assisting mechanics in machine repairs and maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18910,

                "name" => json_encode([
                    "pl" => "Przygotowywanie narzędzi i materiałów do pracy",
                    "en" => "Preparing tools and materials for work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18911,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie prostych napraw pod nadzorem mechanika",
                    "en" => "Performing simple repairs under mechanic supervision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18912,

                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku na stanowisku pracy oraz dbanie o bezpieczeństwo",
                    "en" => "Maintaining cleanliness and safety at the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18913,

                "name" => json_encode([
                    "pl" => "Pomoc w montażu i demontażu części maszyn",
                    "en" => "Assisting in the assembly and disassembly of machine parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18914,

                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych prac pomocniczych",
                    "en" => "Documenting completed auxiliary tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTERZY_MASZYN_I_URZĄDZEŃ_MECHANICZNYCH = [
            [
                "id" => 18915,

                "name" => json_encode([
                    "pl" => "Montaż urządzeń mechanicznych według dokumentacji technicznej",
                    "en" => "Assembling mechanical devices according to technical documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18916,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów po montażu i wprowadzanie regulacji",
                    "en" => "Conducting tests after assembly and making adjustments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18917,

                "name" => json_encode([
                    "pl" => "Diagnozowanie i naprawa usterek podczas instalacji maszyn",
                    "en" => "Diagnosing and repairing faults during machine installation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18918,

                "name" => json_encode([
                    "pl" => "Współpraca z działem inżynieryjnym i produkcyjnym",
                    "en" => "Collaborating with engineering and production departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18919,

                "name" => json_encode([
                    "pl" => "Dbałość o zgodność pracy z normami bezpieczeństwa",
                    "en" => "Ensuring work complies with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18920,

                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych instalacji i napraw",
                    "en" => "Documenting completed installations and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];


        DB::table('detail_projects')->insert(array_merge(
            $INŻYNIEROWIE_MECHANICY,
            $INŻYNIER_AWIONIK,
            $TECHNIK_MECHANIK,
            $TECHNIK_AWIONIK,
            $TECHNIK_MECHANIK_LOTNICZY,
            $TECHNIK_POJAZDÓW_KOLEJOWYCH,
            $MECHANICY_POJAZDÓW_SAMOCHODOWYCH,
            $TECHNIK_POJAZDÓW_SAMOCHODOWYCH,
            $DIAGNOSTA_UPRAWNIONY_DO_WYKONYWANIA_BADAŃ_TECHNICZNYCH_POJAZDÓW,
            $KONTROLER_STANU_TECHNICZNEGO_POJAZDÓW,
            $LAKIERNIK_SAMOCHODOWY,
            $BLACHARZ_SAMOCHODOWY,
            $MECHANIK_KONSERWATOR_URZĄDZEŃ,
            $MECHANIK_MASZYN_I_URZĄDZEŃ,
            $MECHANIK_MONTER_MASZYN_I_URZĄDZEŃ,
            $ZEGARMISTRZ,
            $AUTOMATYK,
            $POMOCNIK_MECHANIKA,
            $MONTERZY_MASZYN_I_URZĄDZEŃ_MECHANICZNYCH

        ));

        Category::whereId('1478')->first()->detailprojects()->attach(collect($INŻYNIEROWIE_MECHANICY)->pluck('id')->toArray());
        Category::whereId('1493')->first()->detailprojects()->attach(collect($INŻYNIER_AWIONIK)->pluck('id')->toArray());
        Category::whereId('1495')->first()->detailprojects()->attach(collect($TECHNIK_MECHANIK)->pluck('id')->toArray());
        Category::whereId('1507')->first()->detailprojects()->attach(collect($TECHNIK_AWIONIK)->pluck('id')->toArray());
        Category::whereId('1508')->first()->detailprojects()->attach(collect($TECHNIK_MECHANIK_LOTNICZY)->pluck('id')->toArray());
        Category::whereId('1509')->first()->detailprojects()->attach(collect($TECHNIK_POJAZDÓW_KOLEJOWYCH)->pluck('id')->toArray());
        Category::whereId('1511')->first()->detailprojects()->attach(collect($MECHANICY_POJAZDÓW_SAMOCHODOWYCH)->pluck('id')->toArray());
        Category::whereId('1520')->first()->detailprojects()->attach(collect($TECHNIK_POJAZDÓW_SAMOCHODOWYCH)->pluck('id')->toArray());
        Category::whereId('1522')->first()->detailprojects()->attach(collect($DIAGNOSTA_UPRAWNIONY_DO_WYKONYWANIA_BADAŃ_TECHNICZNYCH_POJAZDÓW)->pluck('id')->toArray());
        Category::whereId('1523')->first()->detailprojects()->attach(collect($KONTROLER_STANU_TECHNICZNEGO_POJAZDÓW)->pluck('id')->toArray());
        Category::whereId('1525')->first()->detailprojects()->attach(collect($LAKIERNIK_SAMOCHODOWY)->pluck('id')->toArray());
        Category::whereId('1526')->first()->detailprojects()->attach(collect($BLACHARZ_SAMOCHODOWY)->pluck('id')->toArray());
        Category::whereId('1528')->first()->detailprojects()->attach(collect($MECHANIK_KONSERWATOR_URZĄDZEŃ)->pluck('id')->toArray());
        Category::whereId('1530')->first()->detailprojects()->attach(collect($MECHANIK_MASZYN_I_URZĄDZEŃ)->pluck('id')->toArray());
        Category::whereId('1531')->first()->detailprojects()->attach(collect($MECHANIK_MASZYN_I_URZĄDZEŃ)->pluck('id')->toArray());
        Category::whereId('1532')->first()->detailprojects()->attach(collect($MECHANIK_MASZYN_I_URZĄDZEŃ)->pluck('id')->toArray());
        Category::whereId('1533')->first()->detailprojects()->attach(collect($MECHANIK_MASZYN_I_URZĄDZEŃ)->pluck('id')->toArray());
        Category::whereId('1534')->first()->detailprojects()->attach(collect($MECHANIK_MASZYN_I_URZĄDZEŃ)->pluck('id')->toArray());
        Category::whereId('1537')->first()->detailprojects()->attach(collect($MECHANIK_MONTER_MASZYN_I_URZĄDZEŃ)->pluck('id')->toArray());
        Category::whereId('1545')->first()->detailprojects()->attach(collect($ZEGARMISTRZ)->pluck('id')->toArray());
        Category::whereId('1546')->first()->detailprojects()->attach(collect($AUTOMATYK)->pluck('id')->toArray());
        Category::whereId('1548')->first()->detailprojects()->attach(collect($POMOCNIK_MECHANIKA)->pluck('id')->toArray());
        Category::whereId('1550')->first()->detailprojects()->attach(collect($MONTERZY_MASZYN_I_URZĄDZEŃ_MECHANICZNYCH)->pluck('id')->toArray());

    }
}

