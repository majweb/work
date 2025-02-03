<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectelektroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();

        $INŻYNIER_ENERGETYKI = [

            [
                "id" => 18375,
                "name" => json_encode([
                    "pl" => "Projektowanie i nadzór nad instalacjami energetycznymi.",
                    "en" => "Design and supervision of energy installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18376,
                "name" => json_encode([
                    "pl" => "Analiza efektywności energetycznej i optymalizacja zużycia energii.",
                    "en" => "Analysis of energy efficiency and optimization of energy consumption."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18377,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie rozwiązań związanych z odnawialnymi źródłami energii.",
                    "en" => "Development and implementation of solutions related to renewable energy sources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18378,
                "name" => json_encode([
                    "pl" => "Monitorowanie i analiza parametrów pracy systemów energetycznych.",
                    "en" => "Monitoring and analysis of the operating parameters of energy systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18379,
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności instalacji z przepisami i normami bezpieczeństwa.",
                    "en" => "Ensuring compliance of installations with regulations and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18380,
                "name" => json_encode([
                    "pl" => "Współpraca z działami technicznymi, klientami oraz dostawcami technologii energetycznych.",
                    "en" => "Collaboration with technical departments, clients, and suppliers of energy technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $ZARZĄDCA_ENERGIĄ = [

            [
                "id" => 18381,
                "name" => json_encode([
                    "pl" => "Monitorowanie zużycia energii w firmie lub obiekcie.",
                    "en" => "Monitoring energy consumption in a company or facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18382,
                "name" => json_encode([
                    "pl" => "Wdrażanie strategii efektywności energetycznej.",
                    "en" => "Implementing energy efficiency strategies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18383,
                "name" => json_encode([
                    "pl" => "Planowanie i realizacja audytów energetycznych.",
                    "en" => "Planning and conducting energy audits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18384,
                "name" => json_encode([
                    "pl" => "Opracowywanie raportów i analiz związanych z wydajnością energetyczną.",
                    "en" => "Developing reports and analyses related to energy efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18385,
                "name" => json_encode([
                    "pl" => "Współpraca z działami produkcji, administracją i działem technicznym w celu optymalizacji zużycia energii.",
                    "en" => "Collaborating with production, administration, and technical departments to optimize energy consumption."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18386,
                "name" => json_encode([
                    "pl" => "Nadzór nad systemami monitorowania i zarządzania energią.",
                    "en" => "Supervising energy monitoring and management systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $INŻYNIEROWIE_ELEKTRYCY = [

            [
                "id" => 18387,
                "name" => json_encode([
                    "pl" => "Projektowanie systemów elektrycznych i ich komponentów.",
                    "en" => "Designing electrical systems and their components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18388,
                "name" => json_encode([
                    "pl" => "Nadzór nad instalacjami elektrycznymi i kontrola jakości ich wykonania.",
                    "en" => "Supervising electrical installations and ensuring quality control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18389,
                "name" => json_encode([
                    "pl" => "Diagnoza i rozwiązywanie problemów technicznych związanych z urządzeniami elektrycznymi.",
                    "en" => "Diagnosing and solving technical issues related to electrical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18390,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii w systemach elektrycznych.",
                    "en" => "Implementing new technologies in electrical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18391,
                "name" => json_encode([
                    "pl" => "Analiza ryzyka i bezpieczeństwa w instalacjach elektrycznych.",
                    "en" => "Analyzing risks and safety in electrical installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18392,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami projektowymi, budowlanymi i technicznymi.",
                    "en" => "Collaborating with design, construction, and technical teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $ELEKTRYK = [

            [
                "id" => 18393,
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa instalacji elektrycznych.",
                    "en" => "Installation, maintenance, and repair of electrical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18394,
                "name" => json_encode([
                    "pl" => "Wykonywanie pomiarów elektrycznych i testów bezpieczeństwa.",
                    "en" => "Performing electrical measurements and safety tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18395,
                "name" => json_encode([
                    "pl" => "Lokalizacja i naprawa usterek w instalacjach elektrycznych.",
                    "en" => "Locating and repairing faults in electrical installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18396,
                "name" => json_encode([
                    "pl" => "Montaż i podłączanie urządzeń elektrycznych.",
                    "en" => "Installing and connecting electrical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18397,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa pracy z instalacjami elektrycznymi.",
                    "en" => "Adhering to safety regulations when working with electrical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18398,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przeprowadzonych prac.",
                    "en" => "Documenting completed work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MONTER_INSTALACJI_FOTOWOLTAICZNYCH = [

            [
                "id" => 18399,
                "name" => json_encode([
                    "pl" => "Montaż paneli fotowoltaicznych na dachach lub konstrukcjach naziemnych.",
                    "en" => "Installation of photovoltaic panels on roofs or ground-mounted structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18400,
                "name" => json_encode([
                    "pl" => "Instalacja okablowania i komponentów systemu PV.",
                    "en" => "Installing wiring and components of the PV system."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18401,
                "name" => json_encode([
                    "pl" => "Testowanie i uruchamianie systemów fotowoltaicznych.",
                    "en" => "Testing and commissioning of photovoltaic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18402,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji i konserwacji instalacji PV.",
                    "en" => "Performing inspections and maintenance of PV installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18403,
                "name" => json_encode([
                    "pl" => "Doradztwo klientom w zakresie eksploatacji systemu fotowoltaicznego.",
                    "en" => "Providing advice to clients on operating the photovoltaic system."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18404,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa pracy na wysokościach i z urządzeniami elektrycznymi.",
                    "en" => "Adhering to safety rules for working at heights and with electrical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $ELEKTROMECHANICY_I_ELEKTROMONTERZY = [

            [
                "id" => 18405,
                "name" => json_encode([
                    "pl" => "Montaż i naprawa urządzeń elektromechanicznych.",
                    "en" => "Assembly and repair of electromechanical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18406,
                "name" => json_encode([
                    "pl" => "Przeglądy techniczne oraz diagnostyka maszyn i urządzeń elektrycznych.",
                    "en" => "Technical inspections and diagnostics of electrical machines and devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18407,
                "name" => json_encode([
                    "pl" => "Regulacja i kalibracja podzespołów elektromechanicznych.",
                    "en" => "Adjustment and calibration of electromechanical components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18408,
                "name" => json_encode([
                    "pl" => "Montaż oraz serwis układów elektrycznych i elektronicznych.",
                    "en" => "Installation and servicing of electrical and electronic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18409,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm jakościowych i procedur bezpieczeństwa.",
                    "en" => "Compliance with quality standards and safety procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18410,
                "name" => json_encode([
                    "pl" => "Dokumentacja wykonanych prac serwisowych i naprawczych.",
                    "en" => "Documentation of service and repair work performed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MONTERZY_LINII_ELEKTRYCZNYCH = [

            [
                "id" => 18411,
                "name" => json_encode([
                    "pl" => "Montaż, naprawa i konserwacja linii wysokiego i niskiego napięcia.",
                    "en" => "Installation, repair, and maintenance of high and low voltage power lines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18412,
                "name" => json_encode([
                    "pl" => "Instalacja i serwis słupów oraz przewodów energetycznych.",
                    "en" => "Installation and servicing of poles and power cables."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18413,
                "name" => json_encode([
                    "pl" => "Praca na wysokościach oraz przestrzeganie zasad bezpieczeństwa.",
                    "en" => "Working at heights and adhering to safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18414,
                "name" => json_encode([
                    "pl" => "Kontrola i testowanie stanu technicznego linii energetycznych.",
                    "en" => "Inspection and testing of the technical condition of power lines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18415,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi ekipami technicznymi w terenie.",
                    "en" => "Collaboration with other technical teams in the field."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18416,
                "name" => json_encode([
                    "pl" => "Diagnoza i usuwanie usterek w liniach przesyłowych.",
                    "en" => "Diagnosing and repairing faults in transmission lines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TECHNICY_ELEKTRYCY = [

            [
                "id" => 18417,
                "name" => json_encode([
                    "pl" => "Montaż i konserwacja instalacji i urządzeń elektrycznych.",
                    "en" => "Installation and maintenance of electrical systems and devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18418,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie diagnostyki i testów urządzeń elektrycznych.",
                    "en" => "Performing diagnostics and testing of electrical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18419,
                "name" => json_encode([
                    "pl" => "Pomoc w projektowaniu oraz modernizacji instalacji elektrycznych.",
                    "en" => "Assisting in the design and modernization of electrical installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18420,
                "name" => json_encode([
                    "pl" => "Kalibracja i regulacja urządzeń pomiarowych i sterujących.",
                    "en" => "Calibration and adjustment of measuring and control devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18421,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur bezpieczeństwa i zasad pracy z prądem.",
                    "en" => "Adhering to safety procedures and rules for working with electricity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18422,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej i raportowanie wyników testów.",
                    "en" => "Maintaining technical documentation and reporting test results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $OPERATORZY_URZĄDZEŃ_ENERGETYCZNYCH = [

            [
                "id" => 18423,
                "name" => json_encode([
                    "pl" => "Obsługa i monitorowanie urządzeń energetycznych, takich jak generatory i turbiny.",
                    "en" => "Operation and monitoring of energy equipment such as generators and turbines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18424,
                "name" => json_encode([
                    "pl" => "Kontrola parametrów pracy maszyn i urządzeń energetycznych.",
                    "en" => "Monitoring operating parameters of energy machines and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18425,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów i prostych napraw.",
                    "en" => "Performing inspections and minor repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18426,
                "name" => json_encode([
                    "pl" => "Reagowanie na awarie oraz współpraca z działem technicznym.",
                    "en" => "Responding to failures and collaborating with the technical department."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18427,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur i zasad bezpieczeństwa.",
                    "en" => "Adhering to procedures and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18428,
                "name" => json_encode([
                    "pl" => "Dokumentowanie pracy urządzeń i zgłaszanie usterek.",
                    "en" => "Documenting equipment operation and reporting faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $INŻYNIER_AUTOMATYKI_I_ROBOTYKI = [

            [
                "id" => 18429,
                "name" => json_encode([
                    "pl" => "Projektowanie systemów automatyki przemysłowej.",
                    "en" => "Designing industrial automation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18430,
                "name" => json_encode([
                    "pl" => "Programowanie i konfiguracja sterowników PLC oraz innych systemów automatyki.",
                    "en" => "Programming and configuring PLC controllers and other automation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18431,
                "name" => json_encode([
                    "pl" => "Integracja systemów automatycznych i robotycznych w liniach produkcyjnych.",
                    "en" => "Integrating automated and robotic systems into production lines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18432,
                "name" => json_encode([
                    "pl" => "Testowanie oraz optymalizacja pracy maszyn i urządzeń automatycznych.",
                    "en" => "Testing and optimizing the operation of automated machines and devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18433,
                "name" => json_encode([
                    "pl" => "Diagnoza i rozwiązywanie problemów technicznych.",
                    "en" => "Diagnosing and solving technical problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18434,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami inżynieryjnymi i produkcyjnymi.",
                    "en" => "Collaborating with engineering and production teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $INŻYNIEROWIE_ELEKTRONICY = [

            [
                "id" => 18435,
                "name" => json_encode([
                    "pl" => "Projektowanie i testowanie układów elektronicznych.",
                    "en" => "Designing and testing electronic circuits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18436,
                "name" => json_encode([
                    "pl" => "Analiza oraz rozwiązywanie problemów związanych z urządzeniami elektronicznymi.",
                    "en" => "Analyzing and troubleshooting issues with electronic devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18437,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań nad nowymi technologiami elektronicznymi.",
                    "en" => "Conducting research on new electronic technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18438,
                "name" => json_encode([
                    "pl" => "Wdrażanie i optymalizacja rozwiązań elektronicznych w produktach.",
                    "en" => "Implementing and optimizing electronic solutions in products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18439,
                "name" => json_encode([
                    "pl" => "Dokumentowanie projektów i wyników testów.",
                    "en" => "Documenting projects and test results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18440,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami projektowymi i produkcyjnymi.",
                    "en" => "Collaborating with design and production teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $INSTALATOR_SYSTEMÓW_ALARMOWYCH = [

            [
                "id" => 18441,
                "name" => json_encode([
                    "pl" => "Montaż i konfiguracja systemów alarmowych w budynkach.",
                    "en" => "Installation and configuration of alarm systems in buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18442,
                "name" => json_encode([
                    "pl" => "Testowanie i sprawdzanie działania systemów alarmowych.",
                    "en" => "Testing and verifying the operation of alarm systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18443,
                "name" => json_encode([
                    "pl" => "Doradztwo klientom w zakresie obsługi i eksploatacji systemów.",
                    "en" => "Advising clients on the operation and use of systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18444,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów i serwisowanie systemów alarmowych.",
                    "en" => "Conducting inspections and servicing alarm systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18445,
                "name" => json_encode([
                    "pl" => "Diagnostyka oraz usuwanie usterek w systemach alarmowych.",
                    "en" => "Diagnosing and fixing faults in alarm systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18446,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa i procedur instalacyjnych.",
                    "en" => "Adhering to safety rules and installation procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $INSTALATOR_SYSTEMÓW_TELEWIZJI_PRZEMYSŁOWEJ = [

            [
                "id" => 18447,
                "name" => json_encode([
                    "pl" => "Montaż i konfiguracja kamer CCTV i rejestratorów obrazu.",
                    "en" => "Installation and configuration of CCTV cameras and video recorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18448,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich lokalizacji dla urządzeń CCTV.",
                    "en" => "Selecting suitable locations for CCTV devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18449,
                "name" => json_encode([
                    "pl" => "Testowanie i dostrajanie systemów monitoringu wizyjnego.",
                    "en" => "Testing and fine-tuning video surveillance systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18450,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów i konserwacja systemów CCTV.",
                    "en" => "Conducting inspections and maintenance of CCTV systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18451,
                "name" => json_encode([
                    "pl" => "Wsparcie użytkowników w zakresie obsługi i eksploatacji systemów monitoringu.",
                    "en" => "Providing user support for the operation and use of surveillance systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18452,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa oraz polityki prywatności klientów.",
                    "en" => "Adhering to safety rules and client privacy policies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $PROJEKTANT_SYSTEMÓW_ALARMOWYCH = [

            [
                "id" => 18453,
                "name" => json_encode([
                    "pl" => "Tworzenie projektów systemów alarmowych dostosowanych do specyfiki obiektu.",
                    "en" => "Designing alarm systems tailored to the specific characteristics of the facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18454,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich urządzeń i technologii do ochrony budynków i przestrzeni.",
                    "en" => "Selecting appropriate devices and technologies for building and space protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18455,
                "name" => json_encode([
                    "pl" => "Współpraca z klientem w celu zrozumienia jego potrzeb bezpieczeństwa.",
                    "en" => "Collaborating with clients to understand their security needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18456,
                "name" => json_encode([
                    "pl" => "Opracowywanie dokumentacji technicznej oraz schematów instalacyjnych.",
                    "en" => "Developing technical documentation and installation diagrams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18457,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz ryzyka i dostosowywanie systemów do norm bezpieczeństwa.",
                    "en" => "Conducting risk assessments and adapting systems to meet safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18458,
                "name" => json_encode([
                    "pl" => "Nadzór nad montażem i konfiguracją systemów alarmowych.",
                    "en" => "Overseeing the installation and configuration of alarm systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TECHNIK_ELEKTRONIK = [

            [
                "id" => 18459,
                "name" => json_encode([
                    "pl" => "Montaż i konserwacja urządzeń elektronicznych.",
                    "en" => "Assembly and maintenance of electronic devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18460,
                "name" => json_encode([
                    "pl" => "Testowanie i kalibracja układów elektronicznych.",
                    "en" => "Testing and calibration of electronic circuits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18461,
                "name" => json_encode([
                    "pl" => "Wykonywanie diagnozy i naprawy urządzeń elektronicznych.",
                    "en" => "Diagnosing and repairing electronic devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18462,
                "name" => json_encode([
                    "pl" => "Pomoc w projektowaniu i prototypowaniu nowych urządzeń.",
                    "en" => "Assisting in designing and prototyping new devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18463,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej i raportowanie wyników testów.",
                    "en" => "Maintaining technical documentation and reporting test results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18464,
                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów bezpieczeństwa pracy z urządzeniami elektronicznymi.",
                    "en" => "Adhering to safety standards when working with electronic devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TECHNIK_MECHATRONIK = [

            [
                "id" => 18465,
                "name" => json_encode([
                    "pl" => "Obsługa, diagnostyka i serwisowanie systemów mechatronicznych.",
                    "en" => "Operation, diagnostics, and servicing of mechatronic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18466,
                "name" => json_encode([
                    "pl" => "Montaż komponentów mechanicznych, elektrycznych i elektronicznych.",
                    "en" => "Assembly of mechanical, electrical, and electronic components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18467,
                "name" => json_encode([
                    "pl" => "Programowanie podstawowych sterowników i kontrolerów.",
                    "en" => "Programming basic controllers and drivers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18468,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów technicznych maszyn i urządzeń.",
                    "en" => "Conducting technical inspections of machines and devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18469,
                "name" => json_encode([
                    "pl" => "Diagnozowanie usterek oraz ich usuwanie w systemach mechatronicznych.",
                    "en" => "Diagnosing and resolving malfunctions in mechatronic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18470,
                "name" => json_encode([
                    "pl" => "Współpraca z działami technicznymi w zakresie optymalizacji procesów.",
                    "en" => "Collaborating with technical departments to optimize processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TECHNIK_AUTOMATYK = [

            [
                "id" => 18471,
                "name" => json_encode([
                    "pl" => "Instalacja, obsługa i konserwacja systemów automatyki przemysłowej.",
                    "en" => "Installation, operation, and maintenance of industrial automation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18472,
                "name" => json_encode([
                    "pl" => "Programowanie oraz konfiguracja sterowników PLC.",
                    "en" => "Programming and configuration of PLC controllers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18473,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i rozwiązywanie problemów w systemach automatycznych.",
                    "en" => "Diagnosing and resolving issues in automated systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18474,
                "name" => json_encode([
                    "pl" => "Testowanie oraz kalibracja czujników i urządzeń sterujących.",
                    "en" => "Testing and calibration of sensors and control devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18475,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych przy użyciu automatyki.",
                    "en" => "Optimization of production processes using automation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18476,
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami i zespołem technicznym w zakresie modernizacji systemów.",
                    "en" => "Collaboration with engineers and technical teams for system modernization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $OPERATOR_ROBOTÓW_I_MANIPULATORÓW_PRZEMYSŁOWYCH = [

            [
                "id" => 18477,
                "name" => json_encode([
                    "pl" => "Obsługa robotów przemysłowych i manipulatorów na linii produkcyjnej.",
                    "en" => "Operation of industrial robots and manipulators on the production line."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18478,
                "name" => json_encode([
                    "pl" => "Programowanie podstawowych funkcji robotów przemysłowych.",
                    "en" => "Programming basic functions of industrial robots."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18479,
                "name" => json_encode([
                    "pl" => "Monitorowanie pracy robotów i rozwiązywanie bieżących problemów.",
                    "en" => "Monitoring robot operations and troubleshooting ongoing issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18480,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów technicznych i prostych napraw.",
                    "en" => "Conducting technical inspections and performing minor repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18481,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur bezpieczeństwa pracy z robotami.",
                    "en" => "Adhering to safety procedures when working with robots."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18482,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem produkcyjnym w celu zapewnienia ciągłości pracy linii.",
                    "en" => "Collaborating with the production team to ensure continuity of the production line."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $OPERATOR_ZAUTOMATYZOWANEJ_LINII_PRODUKCYJNEJ = [

            [
                "id" => 18483,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń na zautomatyzowanej linii produkcyjnej.",
                    "en" => "Operating machines and equipment on an automated production line."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18484,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów pracy maszyn i ich regulacja.",
                    "en" => "Monitoring machine operating parameters and making adjustments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18485,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produktów oraz reagowanie na awarie.",
                    "en" => "Quality control of products and responding to malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18486,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów technicznych i drobnych napraw.",
                    "en" => "Performing technical inspections and minor repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18487,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm bezpieczeństwa i standardów produkcji.",
                    "en" => "Adhering to safety standards and production norms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18488,
                "name" => json_encode([
                    "pl" => "Raportowanie wyników produkcji oraz zgłaszanie usterek.",
                    "en" => "Reporting production results and logging faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TECHNIK_SZEROKOPASMOWEJ_KOMUNIKACJI_ELEKTRONICZNEJ = [

            [
                "id" => 18489,
                "name" => json_encode([
                    "pl" => "Instalacja i serwisowanie systemów telekomunikacyjnych i sieci szerokopasmowych.",
                    "en" => "Installation and maintenance of telecommunication systems and broadband networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18490,
                "name" => json_encode([
                    "pl" => "Testowanie jakości sygnału i diagnozowanie problemów z połączeniem.",
                    "en" => "Testing signal quality and diagnosing connection issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18491,
                "name" => json_encode([
                    "pl" => "Montaż i konfiguracja urządzeń sieciowych (modemów, routerów).",
                    "en" => "Installing and configuring network devices (modems, routers)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18492,
                "name" => json_encode([
                    "pl" => "Wykonywanie pomiarów i analiza parametrów sieciowych.",
                    "en" => "Performing measurements and analyzing network parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18493,
                "name" => json_encode([
                    "pl" => "Doradztwo użytkownikom w zakresie optymalizacji sieci.",
                    "en" => "Advising users on network optimization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18494,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa pracy z urządzeniami telekomunikacyjnymi.",
                    "en" => "Following safety procedures when working with telecommunication devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TECHNIK_ROBOTYK = [

            [
                "id" => 18495,
                "name" => json_encode([
                    "pl" => "Montaż, konfiguracja i serwisowanie robotów przemysłowych.",
                    "en" => "Assembly, configuration, and servicing of industrial robots."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18496,
                "name" => json_encode([
                    "pl" => "Programowanie i testowanie funkcji robotów.",
                    "en" => "Programming and testing robot functions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18497,
                "name" => json_encode([
                    "pl" => "Analiza i optymalizacja pracy robotów na linii produkcyjnej.",
                    "en" => "Analyzing and optimizing robot performance on the production line."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18498,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów technicznych oraz kalibracja robotów.",
                    "en" => "Conducting technical inspections and calibrating robots."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18499,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów technicznych w działaniu robotów.",
                    "en" => "Troubleshooting technical issues in robot operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18500,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami produkcyjnymi i technicznymi.",
                    "en" => "Collaborating with production and technical teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $OPERATOR_DRUKAREK_3D = [

            [
                "id" => 18501,
                "name" => json_encode([
                    "pl" => "Obsługa i monitorowanie pracy drukarek 3D.",
                    "en" => "Operating and monitoring 3D printer operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18502,
                "name" => json_encode([
                    "pl" => "Przygotowanie plików do druku oraz konfiguracja parametrów drukowania.",
                    "en" => "Preparing files for printing and configuring printing parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18503,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wydruków 3D i rozwiązywanie problemów z drukiem.",
                    "en" => "Quality control of 3D prints and troubleshooting printing issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18504,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji i podstawowych napraw drukarek 3D.",
                    "en" => "Performing maintenance and basic repairs of 3D printers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18505,
                "name" => json_encode([
                    "pl" => "Dokumentowanie parametrów produkcyjnych oraz rezultatów druku.",
                    "en" => "Documenting production parameters and printing results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18506,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa pracy z drukarkami 3D.",
                    "en" => "Adhering to safety protocols for working with 3D printers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MONTER_ELEKTRONIK = [

            [
                "id" => 18507,
                "name" => json_encode([
                    "pl" => "Montaż i lutowanie podzespołów elektronicznych.",
                    "en" => "Assembly and soldering of electronic components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18508,
                "name" => json_encode([
                    "pl" => "Testowanie i sprawdzanie poprawności działania komponentów.",
                    "en" => "Testing and verifying the functionality of components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18509,
                "name" => json_encode([
                    "pl" => "Diagnozowanie usterek i naprawa elementów elektronicznych.",
                    "en" => "Diagnosing faults and repairing electronic components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18510,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej oraz raportowanie wyników pracy.",
                    "en" => "Maintaining technical documentation and reporting work results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18511,
                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów jakościowych i bezpieczeństwa.",
                    "en" => "Adhering to quality and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18512,
                "name" => json_encode([
                    "pl" => "Współpraca z działem kontroli jakości.",
                    "en" => "Collaborating with the quality control department."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $SERWISANT_URZADZEN_BIUROWYCH = [

            [
                "id" => 18513,
                "name" => json_encode([
                    "pl" => "Diagnostyka i naprawa urządzeń biurowych, takich jak drukarki, kopiarki, skanery.",
                    "en" => "Diagnosis and repair of office equipment such as printers, copiers, and scanners."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18514,
                "name" => json_encode([
                    "pl" => "Konserwacja i przeglądy techniczne sprzętu biurowego.",
                    "en" => "Maintenance and technical inspections of office equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18515,
                "name" => json_encode([
                    "pl" => "Instalacja oraz konfiguracja urządzeń biurowych.",
                    "en" => "Installation and configuration of office devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18516,
                "name" => json_encode([
                    "pl" => "Doradztwo dla użytkowników w zakresie obsługi i eksploatacji urządzeń.",
                    "en" => "Advising users on the operation and maintenance of devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18517,
                "name" => json_encode([
                    "pl" => "Dokumentacja przeprowadzonych napraw i przeglądów.",
                    "en" => "Documentation of repairs and inspections performed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18518,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa przy pracy z urządzeniami elektrycznymi.",
                    "en" => "Compliance with safety rules when working with electrical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TECHNIK_AKUSTYK = [

            [
                "id" => 18519,
                "name" => json_encode([
                    "pl" => "Instalacja i konserwacja systemów nagłośnieniowych.",
                    "en" => "Installation and maintenance of sound systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18520,
                "name" => json_encode([
                    "pl" => "Konfiguracja sprzętu nagłośnieniowego w zależności od potrzeb akustycznych pomieszczenia.",
                    "en" => "Configuration of sound equipment according to the acoustic needs of the room."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18521,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie pomiarów akustycznych i analiza parametrów dźwięku.",
                    "en" => "Conducting acoustic measurements and analyzing sound parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18522,
                "name" => json_encode([
                    "pl" => "Współpraca z realizatorami dźwięku podczas koncertów i wydarzeń.",
                    "en" => "Collaboration with sound engineers during concerts and events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18523,
                "name" => json_encode([
                    "pl" => "Diagnoza i usuwanie usterek w sprzęcie nagłośnieniowym.",
                    "en" => "Diagnosis and repair of faults in sound equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18524,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm bezpieczeństwa pracy z urządzeniami akustycznymi.",
                    "en" => "Compliance with safety standards for working with acoustic devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TECHNIK_REALIZACJI_DZWIĘKU = [

            [
                "id" => 18525,
                "name" => json_encode([
                    "pl" => "Nagrywanie, miksowanie i edycja dźwięku na potrzeby różnych produkcji.",
                    "en" => "Recording, mixing, and editing audio for various productions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18526,
                "name" => json_encode([
                    "pl" => "Obsługa sprzętu audio i oprogramowania do obróbki dźwięku.",
                    "en" => "Operating audio equipment and software for sound editing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18527,
                "name" => json_encode([
                    "pl" => "Współpraca z reżyserami i artystami podczas nagrań i produkcji.",
                    "en" => "Collaborating with directors and artists during recordings and productions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18528,
                "name" => json_encode([
                    "pl" => "Konserwacja i konfiguracja urządzeń do realizacji dźwięku.",
                    "en" => "Maintenance and configuration of audio production equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18529,
                "name" => json_encode([
                    "pl" => "Zapewnienie odpowiedniej jakości dźwięku podczas koncertów i wydarzeń.",
                    "en" => "Ensuring proper sound quality during concerts and events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18530,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur bezpieczeństwa przy pracy ze sprzętem audio.",
                    "en" => "Adhering to safety procedures when working with audio equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TECHNIK_REALIZACJI_NAGRAŃ_I_NAGŁOŚNIEŃ = [

            [
                "id" => 18531,
                "name" => json_encode([
                    "pl" => "Obsługa sprzętu do nagrywania i nagłaśniania dźwięku podczas koncertów i wydarzeń.",
                    "en" => "Operating recording and sound equipment during concerts and events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18532,
                "name" => json_encode([
                    "pl" => "Montaż i konfiguracja mikrofonów, mikserów i głośników.",
                    "en" => "Setting up and configuring microphones, mixers, and speakers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18533,
                "name" => json_encode([
                    "pl" => "Kontrola i dostosowywanie parametrów dźwięku w zależności od warunków.",
                    "en" => "Controlling and adjusting sound parameters based on conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18534,
                "name" => json_encode([
                    "pl" => "Współpraca z artystami oraz zespołem technicznym w trakcie wydarzeń.",
                    "en" => "Collaborating with artists and the technical team during events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18535,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów i konserwacja sprzętu nagłośnieniowego.",
                    "en" => "Performing inspections and maintaining sound equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18536,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm bezpieczeństwa podczas pracy z urządzeniami nagłośnieniowymi.",
                    "en" => "Adhering to safety standards when working with sound equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];


        DB::table('detail_projects')->insert(array_merge(
            $INŻYNIER_ENERGETYKI,
            $ZARZĄDCA_ENERGIĄ,
            $INŻYNIEROWIE_ELEKTRYCY,
            $ELEKTRYK,
            $MONTER_INSTALACJI_FOTOWOLTAICZNYCH,
            $ELEKTROMECHANICY_I_ELEKTROMONTERZY,
            $MONTERZY_LINII_ELEKTRYCZNYCH,
            $TECHNICY_ELEKTRYCY,
            $OPERATORZY_URZĄDZEŃ_ENERGETYCZNYCH,
            $INŻYNIER_AUTOMATYKI_I_ROBOTYKI,
            $INŻYNIEROWIE_ELEKTRONICY,
            $INSTALATOR_SYSTEMÓW_ALARMOWYCH,
            $INSTALATOR_SYSTEMÓW_TELEWIZJI_PRZEMYSŁOWEJ,
            $PROJEKTANT_SYSTEMÓW_ALARMOWYCH,
            $TECHNIK_ELEKTRONIK,
            $TECHNIK_MECHATRONIK,
            $TECHNIK_AUTOMATYK,
            $OPERATOR_ROBOTÓW_I_MANIPULATORÓW_PRZEMYSŁOWYCH,
            $OPERATOR_ZAUTOMATYZOWANEJ_LINII_PRODUKCYJNEJ,
            $TECHNIK_SZEROKOPASMOWEJ_KOMUNIKACJI_ELEKTRONICZNEJ,
            $TECHNIK_ROBOTYK,
            $OPERATOR_DRUKAREK_3D,
            $MONTER_ELEKTRONIK,
            $SERWISANT_URZADZEN_BIUROWYCH,
            $TECHNIK_AKUSTYK,
            $TECHNIK_REALIZACJI_DZWIĘKU,
            $TECHNIK_REALIZACJI_NAGRAŃ_I_NAGŁOŚNIEŃ
        ));

        Category::whereId('1242')->first()->detailprojects()->attach(collect($INŻYNIER_ENERGETYKI)->pluck('id')->toArray());
        Category::whereId('1243')->first()->detailprojects()->attach(collect($ZARZĄDCA_ENERGIĄ)->pluck('id')->toArray());
        Category::whereId('1244')->first()->detailprojects()->attach(collect($INŻYNIEROWIE_ELEKTRYCY)->pluck('id')->toArray());
        Category::whereId('1256')->first()->detailprojects()->attach(collect($ELEKTRYK)->pluck('id')->toArray());
        Category::whereId('1259')->first()->detailprojects()->attach(collect($MONTER_INSTALACJI_FOTOWOLTAICZNYCH)->pluck('id')->toArray());
        Category::whereId('1260')->first()->detailprojects()->attach(collect($ELEKTROMECHANICY_I_ELEKTROMONTERZY)->pluck('id')->toArray());
        Category::whereId('1282')->first()->detailprojects()->attach(collect($MONTERZY_LINII_ELEKTRYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1289')->first()->detailprojects()->attach(collect($TECHNICY_ELEKTRYCY)->pluck('id')->toArray());
        Category::whereId('1297')->first()->detailprojects()->attach(collect($OPERATORZY_URZĄDZEŃ_ENERGETYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1310')->first()->detailprojects()->attach(collect($INŻYNIER_AUTOMATYKI_I_ROBOTYKI)->pluck('id')->toArray());
        Category::whereId('1311')->first()->detailprojects()->attach(collect($INŻYNIEROWIE_ELEKTRONICY)->pluck('id')->toArray());
        Category::whereId('1318')->first()->detailprojects()->attach(collect($INSTALATOR_SYSTEMÓW_ALARMOWYCH)->pluck('id')->toArray());
        Category::whereId('1320')->first()->detailprojects()->attach(collect($INSTALATOR_SYSTEMÓW_TELEWIZJI_PRZEMYSŁOWEJ)->pluck('id')->toArray());
        Category::whereId('1321')->first()->detailprojects()->attach(collect($PROJEKTANT_SYSTEMÓW_ALARMOWYCH)->pluck('id')->toArray());
        Category::whereId('1322')->first()->detailprojects()->attach(collect($TECHNIK_ELEKTRONIK)->pluck('id')->toArray());
        Category::whereId('1323')->first()->detailprojects()->attach(collect($TECHNIK_MECHATRONIK)->pluck('id')->toArray());
        Category::whereId('1325')->first()->detailprojects()->attach(collect($TECHNIK_AUTOMATYK)->pluck('id')->toArray());
        Category::whereId('1326')->first()->detailprojects()->attach(collect($OPERATOR_ROBOTÓW_I_MANIPULATORÓW_PRZEMYSŁOWYCH)->pluck('id')->toArray());
        Category::whereId('1327')->first()->detailprojects()->attach(collect($OPERATOR_ZAUTOMATYZOWANEJ_LINII_PRODUKCYJNEJ)->pluck('id')->toArray());
        Category::whereId('1328')->first()->detailprojects()->attach(collect($TECHNIK_SZEROKOPASMOWEJ_KOMUNIKACJI_ELEKTRONICZNEJ)->pluck('id')->toArray());
        Category::whereId('1329')->first()->detailprojects()->attach(collect($TECHNIK_ROBOTYK)->pluck('id')->toArray());
        Category::whereId('1330')->first()->detailprojects()->attach(collect($OPERATOR_DRUKAREK_3D)->pluck('id')->toArray());
        Category::whereId('1332')->first()->detailprojects()->attach(collect($MONTER_ELEKTRONIK)->pluck('id')->toArray());
        Category::whereId('1354')->first()->detailprojects()->attach(collect($SERWISANT_URZADZEN_BIUROWYCH)->pluck('id')->toArray());
        Category::whereId('1356')->first()->detailprojects()->attach(collect($TECHNIK_AKUSTYK)->pluck('id')->toArray());
        Category::whereId('1357')->first()->detailprojects()->attach(collect($TECHNIK_REALIZACJI_DZWIĘKU)->pluck('id')->toArray());
        Category::whereId('1358')->first()->detailprojects()->attach(collect($TECHNIK_REALIZACJI_NAGRAŃ_I_NAGŁOŚNIEŃ)->pluck('id')->toArray());
    }
}

