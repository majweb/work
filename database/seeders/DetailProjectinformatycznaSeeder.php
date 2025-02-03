<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectinformatycznaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();

        $SPECJALISTA_MONITORINGU_SYSTEMÓW_ZABEZPIECZEŃ_TECHNICZNYCH_OSÓB_I_MIENIA = [

            [
                "id" => 18537,
                "name" => json_encode([
                    "pl" => "Monitorowanie systemów zabezpieczeń, takich jak kamery CCTV, alarmy i czujniki.",
                    "en" => "Monitoring security systems, such as CCTV cameras, alarms, and sensors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18538,

                "name" => json_encode([
                    "pl" => "Analiza sygnałów alarmowych i reagowanie na incydenty.",
                    "en" => "Analyzing alarm signals and responding to incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18539,

                "name" => json_encode([
                    "pl" => "Współpraca z ochroną oraz służbami ratunkowymi w sytuacjach kryzysowych.",
                    "en" => "Collaborating with security and emergency services in crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18540,

                "name" => json_encode([
                    "pl" => "Utrzymywanie sprawności technicznej urządzeń monitorujących.",
                    "en" => "Maintaining the technical functionality of monitoring devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18541,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji zdarzeń i raportowanie incydentów.",
                    "en" => "Keeping event records and reporting incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18542,

                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad poufności i procedur bezpieczeństwa.",
                    "en" => "Adhering to confidentiality principles and security procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $INŻYNIEROWIE_TELEKOMUNIKACJI = [

            [
                "id" => 18543,

                "name" => json_encode([
                    "pl" => "Projektowanie, wdrażanie i utrzymanie sieci telekomunikacyjnych.",
                    "en" => "Designing, implementing, and maintaining telecommunication networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18544,

                "name" => json_encode([
                    "pl" => "Nadzór nad instalacją i konfiguracją sprzętu telekomunikacyjnego.",
                    "en" => "Supervising the installation and configuration of telecommunication equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18545,

                "name" => json_encode([
                    "pl" => "Optymalizacja wydajności sieci telekomunikacyjnych.",
                    "en" => "Optimizing the performance of telecommunication networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18546,

                "name" => json_encode([
                    "pl" => "Diagnozowanie oraz rozwiązywanie problemów z transmisją danych.",
                    "en" => "Diagnosing and resolving data transmission issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18547,

                "name" => json_encode([
                    "pl" => "Współpraca z klientami i zespołami technicznymi.",
                    "en" => "Collaborating with clients and technical teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18548,

                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów i procedur bezpieczeństwa sieci.",
                    "en" => "Adhering to network safety standards and procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $OPERATORZY_URZĄDZEŃ_TELEKOMUNIKACYJNYCH = [

            [
                "id" => 18549,

                "name" => json_encode([
                    "pl" => "Obsługa urządzeń telekomunikacyjnych, takich jak nadajniki i odbiorniki.",
                    "en" => "Operating telecommunication devices, such as transmitters and receivers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18550,

                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów pracy urządzeń telekomunikacyjnych.",
                    "en" => "Monitoring operational parameters of telecommunication devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18551,

                "name" => json_encode([
                    "pl" => "Diagnoza i rozwiązywanie usterek sprzętu telekomunikacyjnego.",
                    "en" => "Diagnosing and resolving faults in telecommunication equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18552,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie regularnych przeglądów i konserwacji urządzeń.",
                    "en" => "Conducting regular inspections and maintenance of devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18553,

                "name" => json_encode([
                    "pl" => "Dokumentowanie przebiegu pracy oraz raportowanie awarii.",
                    "en" => "Documenting workflow and reporting failures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18554,

                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur bezpieczeństwa pracy z urządzeniami.",
                    "en" => "Adhering to safety procedures while working with devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $INŻYNIER_INŻYNIERII_KOSMICZNEJ_I_SATELITARNEJ = [

            [
                "id" => 18555,

                "name" => json_encode([
                    "pl" => "Projektowanie, testowanie i integracja systemów satelitarnych.",
                    "en" => "Designing, testing, and integrating satellite systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18556,

                "name" => json_encode([
                    "pl" => "Analiza danych pochodzących z satelitów i systemów kosmicznych.",
                    "en" => "Analyzing data from satellites and space systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18557,

                "name" => json_encode([
                    "pl" => "Planowanie i przeprowadzanie misji kosmicznych.",
                    "en" => "Planning and conducting space missions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18558,

                "name" => json_encode([
                    "pl" => "Diagnoza problemów technicznych w systemach kosmicznych.",
                    "en" => "Diagnosing technical issues in space systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18559,

                "name" => json_encode([
                    "pl" => "Współpraca z agencjami kosmicznymi i zespołami naukowymi.",
                    "en" => "Collaborating with space agencies and scientific teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18560,

                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności projektów z międzynarodowymi standardami.",
                    "en" => "Ensuring project compliance with international standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $ANALITYCY_SYSTEMÓW_KOMPUTEROWYCH = [

            [
                "id" => 18561,

                "name" => json_encode([
                    "pl" => "Analiza wymagań i potrzeb biznesowych w zakresie systemów komputerowych.",
                    "en" => "Analyzing business requirements and needs in computer systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18562,

                "name" => json_encode([
                    "pl" => "Projektowanie rozwiązań IT oraz nadzór nad ich wdrożeniem.",
                    "en" => "Designing IT solutions and overseeing their implementation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18563,

                "name" => json_encode([
                    "pl" => "Testowanie i optymalizacja wydajności systemów komputerowych.",
                    "en" => "Testing and optimizing computer system performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18564,

                "name" => json_encode([
                    "pl" => "Dokumentowanie architektury systemowej i procedur operacyjnych.",
                    "en" => "Documenting system architecture and operational procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18565,

                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów i wsparcie techniczne dla użytkowników.",
                    "en" => "Troubleshooting and providing technical support to users."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18566,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołami programistycznymi i innymi działami IT.",
                    "en" => "Collaborating with development teams and other IT departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $ANALITYK_SYSTEMÓW_TELEINFORMATYCZNYCH = [

            [
                "id" => 18567,

                "name" => json_encode([
                    "pl" => "Analiza i projektowanie rozwiązań teleinformatycznych dla organizacji.",
                    "en" => "Analyzing and designing telecommunication and IT solutions for organizations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18568,

                "name" => json_encode([
                    "pl" => "Testowanie wydajności i optymalizacja systemów teleinformatycznych.",
                    "en" => "Testing performance and optimizing telecommunication systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18569,

                "name" => json_encode([
                    "pl" => "Monitorowanie i analiza ruchu sieciowego i bezpieczeństwa.",
                    "en" => "Monitoring and analyzing network traffic and security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18570,

                "name" => json_encode([
                    "pl" => "Współpraca z działem IT oraz użytkownikami końcowymi.",
                    "en" => "Collaborating with IT departments and end users."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18571,

                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej i raportowanie wyników analiz.",
                    "en" => "Creating technical documentation and reporting analysis results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18572,

                "name" => json_encode([
                    "pl" => "Nadzór nad zgodnością systemów z wymaganiami prawnymi i bezpieczeństwa.",
                    "en" => "Ensuring system compliance with legal and security requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $SPECJALISTA_DO_SPRAW_ROZWOJU_OPROGRAMOWANIA_SYSTEMÓW_INFORMATYCZNYCH = [

            [
                "id" => 18573,

                "name" => json_encode([
                    "pl" => "Projektowanie oraz programowanie aplikacji i systemów informatycznych.",
                    "en" => "Designing and developing applications and IT systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18574,

                "name" => json_encode([
                    "pl" => "Testowanie, debugowanie i optymalizacja kodu źródłowego.",
                    "en" => "Testing, debugging, and optimizing source code."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18575,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołami IT przy wdrażaniu nowych funkcjonalności.",
                    "en" => "Collaborating with IT teams to implement new features."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18576,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie analizy wymagań systemowych i tworzenie specyfikacji.",
                    "en" => "Conducting system requirement analysis and creating specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18577,

                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów kodowania i procedur bezpieczeństwa.",
                    "en" => "Adhering to coding standards and security procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18578,

                "name" => json_encode([
                    "pl" => "Dokumentowanie i aktualizacja rozwiązań programistycznych.",
                    "en" => "Documenting and updating programming solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TESTER_OPROGRAMOWANIA_KOMPUTEROWEGO = [
            [
                "id" => 18579,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów funkcjonalnych, wydajnościowych i bezpieczeństwa.",
                    "en" => "Conducting functional, performance, and security tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18580,

                "name" => json_encode([
                    "pl" => "Tworzenie scenariuszy i przypadków testowych na podstawie specyfikacji.",
                    "en" => "Creating test scenarios and cases based on specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18581,

                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników testów i zgłaszanie błędów programistycznych.",
                    "en" => "Documenting test results and reporting programming bugs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18582,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołami programistycznymi w celu naprawy błędów.",
                    "en" => "Collaborating with development teams to fix issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18583,

                "name" => json_encode([
                    "pl" => "Automatyzacja procesów testowych i implementacja narzędzi testujących.",
                    "en" => "Automating testing processes and implementing testing tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18584,

                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów jakości oprogramowania.",
                    "en" => "Adhering to software quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BIOINFORMATYK = [
            [
                "id" => 18585,

                "name" => json_encode([
                    "pl" => "Analiza i interpretacja danych biologicznych przy użyciu narzędzi informatycznych.",
                    "en" => "Analyzing and interpreting biological data using informatics tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18586,

                "name" => json_encode([
                    "pl" => "Tworzenie algorytmów oraz rozwój oprogramowania do analiz biologicznych.",
                    "en" => "Developing algorithms and software for biological analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18587,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz genomowych i bioinformatycznych.",
                    "en" => "Conducting genomic and bioinformatic analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18588,

                "name" => json_encode([
                    "pl" => "Współpraca z naukowcami w celu interpretacji wyników analiz.",
                    "en" => "Collaborating with scientists to interpret analysis results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18589,

                "name" => json_encode([
                    "pl" => "Dokumentowanie badań i publikacja wyników w raportach naukowych.",
                    "en" => "Documenting research and publishing findings in scientific reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18590,

                "name" => json_encode([
                    "pl" => "Utrzymywanie bazy danych i narzędzi bioinformatycznych.",
                    "en" => "Maintaining bioinformatics databases and tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INFORMATYK_MEDYCZNY = [
            [
                "id" => 18591,

                "name" => json_encode([
                    "pl" => "Zarządzanie danymi medycznymi oraz systemami informatycznymi w placówkach zdrowia.",
                    "en" => "Managing medical data and IT systems in healthcare facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18592,

                "name" => json_encode([
                    "pl" => "Wdrażanie i obsługa elektronicznych systemów dokumentacji medycznej.",
                    "en" => "Implementing and managing electronic medical records systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18593,

                "name" => json_encode([
                    "pl" => "Monitorowanie bezpieczeństwa i zgodności systemów z przepisami o ochronie danych.",
                    "en" => "Monitoring system security and compliance with data protection regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18594,

                "name" => json_encode([
                    "pl" => "Szkolenie personelu medycznego z obsługi systemów IT.",
                    "en" => "Training medical staff in IT systems operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18595,

                "name" => json_encode([
                    "pl" => "Diagnoza i rozwiązywanie problemów technicznych w systemach medycznych.",
                    "en" => "Diagnosing and resolving technical issues in medical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18596,

                "name" => json_encode([
                    "pl" => "Współpraca z działem IT i specjalistami ochrony zdrowia.",
                    "en" => "Collaborating with IT departments and healthcare professionals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_ZASTOSOWAŃ_INFORMATYKI = [
            [
                "id" => 18597,

                "name" => json_encode([
                    "pl" => "Analiza i projektowanie rozwiązań IT dla różnych sektorów biznesu.",
                    "en" => "Analyzing and designing IT solutions for various business sectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18598,

                "name" => json_encode([
                    "pl" => "Wdrażanie i integracja systemów informatycznych w organizacjach.",
                    "en" => "Implementing and integrating IT systems in organizations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18599,

                "name" => json_encode([
                    "pl" => "Wsparcie techniczne dla użytkowników końcowych i diagnozowanie problemów.",
                    "en" => "Providing technical support and diagnosing end-user issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18600,

                "name" => json_encode([
                    "pl" => "Opracowywanie i optymalizacja procesów biznesowych za pomocą IT.",
                    "en" => "Developing and optimizing business processes through IT."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18601,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie szkoleń i tworzenie dokumentacji dla użytkowników.",
                    "en" => "Conducting training sessions and creating user documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18602,

                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów IT oraz procedur bezpieczeństwa.",
                    "en" => "Ensuring compliance with IT standards and security protocols."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TESTER_SYSTEMÓW_TELEINFORMATYCZNYCH = [
            [
                "id" => 18603,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów systemów teleinformatycznych pod kątem bezpieczeństwa, wydajności i zgodności.",
                    "en" => "Conducting tests of telecommunication systems for security, performance, and compliance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18604,

                "name" => json_encode([
                    "pl" => "Tworzenie scenariuszy testowych i dokumentacja wyników.",
                    "en" => "Creating test scenarios and documenting results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18605,

                "name" => json_encode([
                    "pl" => "Automatyzacja procesów testowych przy użyciu odpowiednich narzędzi.",
                    "en" => "Automating test processes using appropriate tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18606,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołem deweloperskim w celu rozwiązywania wykrytych problemów.",
                    "en" => "Collaborating with the development team to address identified issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18607,

                "name" => json_encode([
                    "pl" => "Monitorowanie i analiza wyników testów.",
                    "en" => "Monitoring and analyzing test results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18608,

                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów i procedur testowania w branży teleinformatycznej.",
                    "en" => "Adhering to standards and procedures in the telecommunication testing industry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ADMINISTRATORZY_SYSTEMÓW_KOMPUTEROWYCH = [
            [
                "id" => 18609,

                "name" => json_encode([
                    "pl" => "Zarządzanie i monitorowanie serwerów oraz systemów operacyjnych.",
                    "en" => "Managing and monitoring servers and operating systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18610,

                "name" => json_encode([
                    "pl" => "Instalacja, konfiguracja oraz aktualizacja oprogramowania i sprzętu.",
                    "en" => "Installing, configuring, and updating software and hardware."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18611,

                "name" => json_encode([
                    "pl" => "Zarządzanie kontami użytkowników oraz bezpieczeństwem systemu.",
                    "en" => "Managing user accounts and system security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18612,

                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów technicznych i wsparcie użytkowników.",
                    "en" => "Troubleshooting technical issues and providing user support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18613,

                "name" => json_encode([
                    "pl" => "Tworzenie kopii zapasowych i odzyskiwanie danych w razie awarii.",
                    "en" => "Creating backups and recovering data in case of system failures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18614,

                "name" => json_encode([
                    "pl" => "Przestrzeganie polityki bezpieczeństwa i zgodności z przepisami.",
                    "en" => "Adhering to security policies and regulatory compliance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALIŚCI_DO_SPRAW_SIECI_KOMPUTEROWYCH = [
            [
                "id" => 18615,

                "name" => json_encode([
                    "pl" => "Projektowanie i zarządzanie infrastrukturą sieciową w organizacji",
                    "en" => "Designing and managing network infrastructure in the organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18616,

                "name" => json_encode([
                    "pl" => "Konfiguracja routerów, switchy i innych urządzeń sieciowych",
                    "en" => "Configuring routers, switches, and other network devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18617,

                "name" => json_encode([
                    "pl" => "Monitorowanie bezpieczeństwa sieci i ochrona przed zagrożeniami",
                    "en" => "Monitoring network security and protection against threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18618,

                "name" => json_encode([
                    "pl" => "Diagnostyka i rozwiązywanie problemów z połączeniami sieciowymi",
                    "en" => "Diagnosing and troubleshooting network connection issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18619,

                "name" => json_encode([
                    "pl" => "Współpraca z dostawcami sprzętu i oprogramowania sieciowego",
                    "en" => "Collaborating with network hardware and software vendors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18620,

                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa i procedur związanych z siecią",
                    "en" => "Adhering to network security policies and procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_CYBERBEZPIECZEŃSTWA = [
            [
                "id" => 18621,

                "name" => json_encode([
                    "pl" => "Identyfikacja; analiza i ochrona przed zagrożeniami cybernetycznymi",
                    "en" => "Identification, analysis, and protection against cyber threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18622,

                "name" => json_encode([
                    "pl" => "Wdrażanie polityki bezpieczeństwa i zabezpieczeń systemów informatycznych",
                    "en" => "Implementing security policies and IT system safeguards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18623,

                "name" => json_encode([
                    "pl" => "Monitorowanie aktywności sieci i systemów pod kątem wykrywania incydentów",
                    "en" => "Monitoring network and system activity for incident detection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18624,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów bezpieczeństwa oraz testów penetracyjnych",
                    "en" => "Conducting security audits and penetration tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18625,

                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie bezpieczeństwa informatycznego",
                    "en" => "Training employees in IT security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18626,

                "name" => json_encode([
                    "pl" => "Reagowanie na incydenty cyberbezpieczeństwa oraz analiza śladów",
                    "en" => "Responding to cybersecurity incidents and trace analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_BEZPRZEWODOWYCH_SIECI_KOMPUTEROWYCH = [
            [
                "id" => 18627,

                "name" => json_encode([
                    "pl" => "Monitorowanie działania sieci bezprzewodowej oraz rozwiązywanie problemów z łącznością",
                    "en" => "Monitoring wireless network operation and troubleshooting connectivity issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18628,

                "name" => json_encode([
                    "pl" => "Instalacja i konfiguracja urządzeń bezprzewodowych, takich jak routery i punkty dostępowe",
                    "en" => "Installing and configuring wireless devices such as routers and access points."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18629,

                "name" => json_encode([
                    "pl" => "Analiza oraz optymalizacja zasięgu i wydajności sieci bezprzewodowej",
                    "en" => "Analyzing and optimizing wireless network range and performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18630,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie diagnostyki oraz usuwanie zakłóceń w sieci",
                    "en" => "Conducting diagnostics and eliminating network interference."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18631,

                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów bezpieczeństwa oraz ochrony danych w sieciach bezprzewodowych",
                    "en" => "Following security standards and data protection in wireless networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18632,

                "name" => json_encode([
                    "pl" => "Dokumentowanie konfiguracji i raportowanie incydentów sieciowych",
                    "en" => "Documenting configurations and reporting network incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_KOMPUTEROWYCH_URZĄDZEŃ_PERYFERYJNYCH = [
            [
                "id" => 18633,

                "name" => json_encode([
                    "pl" => "Obsługa urządzeń peryferyjnych, takich jak drukarki, skanery, plotery",
                    "en" => "Operating peripheral devices such as printers, scanners, plotters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18634,

                "name" => json_encode([
                    "pl" => "Monitorowanie pracy urządzeń oraz kontrola ich sprawności",
                    "en" => "Monitoring device performance and ensuring their functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18635,

                "name" => json_encode([
                    "pl" => "Rozwiązywanie bieżących problemów technicznych urządzeń peryferyjnych",
                    "en" => "Resolving ongoing technical issues with peripheral devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18636,

                "name" => json_encode([
                    "pl" => "Współpraca z działem IT w celu instalacji i konfiguracji urządzeń",
                    "en" => "Collaborating with the IT department to install and configure devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18637,

                "name" => json_encode([
                    "pl" => "Dokumentowanie problemów i przeprowadzanych działań serwisowych",
                    "en" => "Documenting issues and service actions performed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18638,

                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa pracy z urządzeniami peryferyjnymi",
                    "en" => "Adhering to safety rules when working with peripheral devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATORZY_SIECI_I_SYSTEMÓW_KOMPUTEROWYCH = [
            [
                "id" => 18639,

                "name" => json_encode([
                    "pl" => "Monitorowanie działania sieci oraz systemów komputerowych",
                    "en" => "Monitoring network and computer systems operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18640,

                "name" => json_encode([
                    "pl" => "Wykrywanie i diagnozowanie problemów związanych z połączeniami i wydajnością",
                    "en" => "Detecting and diagnosing issues with connections and performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18641,

                "name" => json_encode([
                    "pl" => "Obsługa systemów do monitorowania ruchu sieciowego oraz bezpieczeństwa",
                    "en" => "Operating systems for monitoring network traffic and security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18642,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji urządzeń sieciowych oraz aktualizacja systemów",
                    "en" => "Maintaining network devices and updating systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18643,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji i raportowanie o incydentach sieciowych",
                    "en" => "Keeping documentation and reporting network incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18644,

                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur bezpieczeństwa oraz polityki organizacji",
                    "en" => "Following safety procedures and organizational policies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ADMINISTRATOR_SYSTEMÓW_POCZTY_ELEKTRONICZNEJ = [
            [
                "id" => 18645,

                "name" => json_encode([
                    "pl" => "Zarządzanie serwerami pocztowymi oraz konfiguracja kont użytkowników",
                    "en" => "Managing mail servers and configuring user accounts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18646,

                "name" => json_encode([
                    "pl" => "Monitorowanie i optymalizacja wydajności systemu poczty elektronicznej",
                    "en" => "Monitoring and optimizing email system performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18647,

                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów z dostarczaniem oraz odbieraniem wiadomości",
                    "en" => "Resolving issues with email delivery and reception."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18648,

                "name" => json_encode([
                    "pl" => "Wdrażanie polityk bezpieczeństwa i ochrony przed spamem oraz phishingiem",
                    "en" => "Implementing security policies and protection against spam and phishing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18649,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie aktualizacji oraz archiwizacja wiadomości",
                    "en" => "Performing updates and archiving messages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18650,

                "name" => json_encode([
                    "pl" => "Współpraca z użytkownikami w zakresie wsparcia technicznego",
                    "en" => "Collaborating with users for technical support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_APLIKACJI_KOMPUTEROWYCH = [
            [
                "id" => 18651,

                "name" => json_encode([
                    "pl" => "Obsługa aplikacji komputerowych stosowanych w organizacji",
                    "en" => "Operating computer applications used in the organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18652,

                "name" => json_encode([
                    "pl" => "Monitorowanie wydajności aplikacji oraz rozwiązywanie problemów",
                    "en" => "Monitoring application performance and troubleshooting issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18653,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów aplikacji po aktualizacjach oraz sprawdzanie ich zgodności",
                    "en" => "Testing applications after updates and checking compatibility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18654,

                "name" => json_encode([
                    "pl" => "Współpraca z działem IT w zakresie optymalizacji działania aplikacji",
                    "en" => "Collaborating with the IT department to optimize application performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18655,

                "name" => json_encode([
                    "pl" => "Raportowanie błędów i zgłaszanie zapotrzebowania na nowe funkcje",
                    "en" => "Reporting errors and requesting new features."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18656,

                "name" => json_encode([
                    "pl" => "Szkolenie użytkowników w obsłudze aplikacji i ich funkcji",
                    "en" => "Training users in application operation and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROJEKTANCI_APLIKACJI_SIECIOWYCH_I_MULTIMEDIÓW = [
            [
                "id" => 18657,

                "name" => json_encode([
                    "pl" => "Projektowanie aplikacji sieciowych i multimedialnych według wymagań klienta",
                    "en" => "Designing web and multimedia applications according to client requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18658,

                "name" => json_encode([
                    "pl" => "Tworzenie interfejsów użytkownika i dbanie o ich funkcjonalność",
                    "en" => "Creating user interfaces and ensuring their functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18659,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołem programistów oraz grafików",
                    "en" => "Collaborating with programmers and graphic designers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18660,

                "name" => json_encode([
                    "pl" => "Testowanie i optymalizacja aplikacji pod kątem wydajności",
                    "en" => "Testing and optimizing applications for performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18661,

                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad użyteczności oraz standardów bezpieczeństwa",
                    "en" => "Following usability principles and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18662,

                "name" => json_encode([
                    "pl" => "Dokumentowanie projektu oraz tworzenie instrukcji dla użytkowników",
                    "en" => "Documenting projects and creating user manuals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROGRAMIŚCI_APLIKACJI = [
            [
                "id" => 18663,

                "name" => json_encode([
                    "pl" => "Tworzenie kodu źródłowego oraz implementacja funkcji aplikacji",
                    "en" => "Creating source code and implementing application features."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18664,

                "name" => json_encode([
                    "pl" => "Testowanie, debugowanie i optymalizacja wydajności oprogramowania",
                    "en" => "Testing, debugging, and optimizing software performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18665,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołami analitycznymi i projektowymi w celu realizacji wymagań",
                    "en" => "Collaborating with analytical and design teams to meet requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18666,

                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej oraz prowadzenie szkoleń dla użytkowników",
                    "en" => "Creating technical documentation and conducting user training."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18667,

                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów kodowania oraz praktyk bezpieczeństwa",
                    "en" => "Adhering to coding standards and security practices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18668,

                "name" => json_encode([
                    "pl" => "Aktualizacja oraz konserwacja aplikacji po wdrożeniu",
                    "en" => "Updating and maintaining applications after deployment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_SYSTEMÓW_ROZPOZNAWANIA_MOWY = [
            [
                "id" => 18669,

                "name" => json_encode([
                    "pl" => "Tworzenie oraz implementacja algorytmów rozpoznawania mowy",
                    "en" => "Creating and implementing speech recognition algorithms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18670,

                "name" => json_encode([
                    "pl" => "Testowanie i optymalizacja systemów przetwarzania języka naturalnego",
                    "en" => "Testing and optimizing natural language processing systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18671,

                "name" => json_encode([
                    "pl" => "Analiza danych głosowych i rozwój modeli rozpoznawania mowy",
                    "en" => "Analyzing voice data and developing speech recognition models."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18672,

                "name" => json_encode([
                    "pl" => "Integracja technologii rozpoznawania mowy w aplikacjach i urządzeniach",
                    "en" => "Integrating speech recognition technology into applications and devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18673,

                "name" => json_encode([
                    "pl" => "Współpraca z programistami oraz zespołem AI",
                    "en" => "Collaborating with programmers and AI teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18674,

                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad prywatności i ochrony danych użytkowników",
                    "en" => "Adhering to privacy rules and user data protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_ROZWOJU_SZTUCZNEJ_INTELIGENCJI = [
            [
                "id" => 18675,

                "name" => json_encode([
                    "pl" => "Tworzenie oraz implementacja modeli sztucznej inteligencji",
                    "en" => "Creating and implementing artificial intelligence models."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18676,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów oraz optymalizacja algorytmów AI",
                    "en" => "Testing and optimizing AI algorithms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18677,

                "name" => json_encode([
                    "pl" => "Analiza danych oraz rozwój systemów predykcyjnych",
                    "en" => "Analyzing data and developing predictive systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18678,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołami programistycznymi i badawczymi",
                    "en" => "Collaborating with programming and research teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18679,

                "name" => json_encode([
                    "pl" => "Dokumentowanie oraz prezentacja wyników badań i wdrożeń AI",
                    "en" => "Documenting and presenting results of AI research and implementations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18680,

                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad etycznych oraz prywatności w rozwoju AI",
                    "en" => "Adhering to ethical standards and privacy in AI development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_UCZENIA_MASZYNOWEGO = [
            [
                "id" => 18681,

                "name" => json_encode([
                    "pl" => "Projektowanie i wdrażanie modeli uczenia maszynowego",
                    "en" => "Designing and implementing machine learning models."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18682,

                "name" => json_encode([
                    "pl" => "Analiza oraz przygotowanie danych do trenowania modeli",
                    "en" => "Analyzing and preparing data for model training."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18683,

                "name" => json_encode([
                    "pl" => "Testowanie, optymalizacja i wdrażanie modeli ML w systemach produkcyjnych",
                    "en" => "Testing, optimizing, and deploying ML models in production systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18684,

                "name" => json_encode([
                    "pl" => "Monitorowanie działania modeli oraz ich wydajności",
                    "en" => "Monitoring model performance and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18685,

                "name" => json_encode([
                    "pl" => "Współpraca z innymi zespołami technicznymi oraz analitykami danych",
                    "en" => "Collaborating with technical teams and data analysts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18686,

                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad etycznych w przetwarzaniu danych i modelach ML",
                    "en" => "Adhering to ethical principles in data processing and ML models."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ADMINISTRATOR_STRON_INTERNETOWYCH = [
            [
                "id" => 18687,

                "name" => json_encode([
                    "pl" => "Zarządzanie treścią oraz konfiguracją stron internetowych",
                    "en" => "Managing content and configuration of websites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18688,

                "name" => json_encode([
                    "pl" => "Monitorowanie dostępności i wydajności serwisów online",
                    "en" => "Monitoring the availability and performance of online services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18689,

                "name" => json_encode([
                    "pl" => "Aktualizacja stron internetowych oraz wdrażanie nowych funkcji",
                    "en" => "Updating websites and implementing new features."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18690,

                "name" => json_encode([
                    "pl" => "Diagnozowanie i rozwiązywanie problemów technicznych na stronach",
                    "en" => "Diagnosing and resolving technical issues on websites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18691,

                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa danych oraz zgodności z regulacjami",
                    "en" => "Ensuring data security and compliance with regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18692,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołem IT i działem marketingu",
                    "en" => "Collaborating with IT teams and marketing departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_POZYCJONOWANIA_STRON_INTERNETOWYCH = [
            [
                "id" => 18693,

                "name" => json_encode([
                    "pl" => "Analiza i optymalizacja stron internetowych pod kątem SEO",
                    "en" => "Analyzing and optimizing websites for SEO."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18694,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań słów kluczowych i trendów wyszukiwania",
                    "en" => "Conducting keyword research and search trends analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18695,

                "name" => json_encode([
                    "pl" => "Wdrażanie strategii SEO, takich jak optymalizacja treści i link building",
                    "en" => "Implementing SEO strategies such as content optimization and link building."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18696,

                "name" => json_encode([
                    "pl" => "Monitorowanie i analiza ruchu na stronie oraz wyników pozycjonowania",
                    "en" => "Monitoring and analyzing website traffic and SEO performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18697,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołem marketingowym i copywriterami",
                    "en" => "Collaborating with marketing teams and copywriters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18698,

                "name" => json_encode([
                    "pl" => "Przestrzeganie wytycznych wyszukiwarek i śledzenie zmian algorytmów",
                    "en" => "Adhering to search engine guidelines and tracking algorithm updates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROJEKTANT_STRON_INTERNETOWYCH = [
            [
                "id" => 18699,

                "name" => json_encode([
                    "pl" => "Projektowanie, tworzenie i aktualizacja stron internetowych",
                    "en" => "Designing, creating, and updating websites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18700,

                "name" => json_encode([
                    "pl" => "Dostosowywanie stron do wymogów SEO i standardów responsywności",
                    "en" => "Adjusting websites to meet SEO requirements and responsiveness standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18701,

                "name" => json_encode([
                    "pl" => "Optymalizacja wydajności i szybkości ładowania stron",
                    "en" => "Optimizing website performance and loading speed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18702,

                "name" => json_encode([
                    "pl" => "Konfiguracja i zarządzanie CMS oraz integracja z narzędziami analitycznymi",
                    "en" => "Configuring and managing CMS and integrating with analytics tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18703,

                "name" => json_encode([
                    "pl" => "Wdrażanie aktualizacji zabezpieczeń oraz monitorowanie bezpieczeństwa",
                    "en" => "Implementing security updates and monitoring safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18704,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołami projektowymi i marketingowymi",
                    "en" => "Collaborating with design and marketing teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ANALITYK_RUCHU_NA_STRONACH_INTERNETOWYCH = [
            [
                "id" => 18705,

                "name" => json_encode([
                    "pl" => "Monitorowanie ruchu na stronach za pomocą narzędzi analitycznych (np. Google Analytics)",
                    "en" => "Monitoring website traffic using analytical tools (e.g., Google Analytics)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18706,

                "name" => json_encode([
                    "pl" => "Analiza zachowań użytkowników oraz generowanie raportów",
                    "en" => "Analyzing user behavior and generating reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18707,

                "name" => json_encode([
                    "pl" => "Opracowywanie rekomendacji optymalizacji strony na podstawie danych",
                    "en" => "Developing website optimization recommendations based on data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18708,

                "name" => json_encode([
                    "pl" => "Tworzenie i monitorowanie wskaźników efektywności (KPI) strony internetowej",
                    "en" => "Creating and monitoring key performance indicators (KPIs) for websites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18709,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołem marketingowym w celu poprawy doświadczeń użytkowników",
                    "en" => "Collaborating with marketing teams to improve user experiences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18710,

                "name" => json_encode([
                    "pl" => "Testowanie zmian na stronach i ocenianie ich wpływu na ruch",
                    "en" => "Testing website changes and evaluating their impact on traffic."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $UX_DESIGNER = [
            [
                "id" => 18711,

                "name" => json_encode([
                    "pl" => "Projektowanie intuicyjnych interfejsów użytkownika i ścieżek użytkownika",
                    "en" => "Designing intuitive user interfaces and user journeys."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18712,

                "name" => json_encode([
                    "pl" => "Prowadzenie badań użytkowników oraz analizowanie ich potrzeb",
                    "en" => "Conducting user research and analyzing their needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18713,

                "name" => json_encode([
                    "pl" => "Tworzenie prototypów i makiet UX",
                    "en" => "Creating UX prototypes and wireframes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18714,

                "name" => json_encode([
                    "pl" => "Testowanie użyteczności produktów oraz zbieranie opinii użytkowników",
                    "en" => "Testing product usability and gathering user feedback."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18715,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołami programistycznymi i projektowymi",
                    "en" => "Collaborating with development and design teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18716,

                "name" => json_encode([
                    "pl" => "Dokumentowanie wytycznych i standardów UX dla projektów",
                    "en" => "Documenting UX guidelines and standards for projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $UI_DESIGNER = [
            [
                "id" => 18717,

                "name" => json_encode([
                    "pl" => "Tworzenie estetycznych i funkcjonalnych interfejsów użytkownika",
                    "en" => "Creating aesthetic and functional user interfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18718,

                "name" => json_encode([
                    "pl" => "Projektowanie spójnych elementów wizualnych zgodnie z wytycznymi brandingu",
                    "en" => "Designing consistent visual elements following branding guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18719,

                "name" => json_encode([
                    "pl" => "Tworzenie makiet i prototypów UI z zachowaniem zasad dostępności",
                    "en" => "Creating UI mockups and prototypes adhering to accessibility standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18720,

                "name" => json_encode([
                    "pl" => "Współpraca z UX Designerami oraz programistami",
                    "en" => "Collaborating with UX designers and developers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18721,

                "name" => json_encode([
                    "pl" => "Aktualizacja interfejsów zgodnie z trendami i standardami designu",
                    "en" => "Updating interfaces following design trends and standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18722,

                "name" => json_encode([
                    "pl" => "Dokumentowanie projektów i tworzenie wytycznych dla elementów UI",
                    "en" => "Documenting projects and creating guidelines for UI elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_TECHNOLOGII_BLOCKCHAIN = [
            [
                "id" => 18723,

                "name" => json_encode([
                    "pl" => "Projektowanie i wdrażanie rozwiązań opartych na technologii blockchain",
                    "en" => "Designing and implementing blockchain-based solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18724,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz i doradztwo w zakresie wdrożeń blockchain",
                    "en" => "Conducting analysis and advising on blockchain implementations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18725,

                "name" => json_encode([
                    "pl" => "Monitorowanie bezpieczeństwa i optymalizacja funkcji blockchain",
                    "en" => "Monitoring security and optimizing blockchain functionalities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18726,

                "name" => json_encode([
                    "pl" => "Integracja systemów blockchain z innymi systemami IT",
                    "en" => "Integrating blockchain systems with other IT systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18727,

                "name" => json_encode([
                    "pl" => "Śledzenie trendów i innowacji w branży blockchain",
                    "en" => "Tracking trends and innovations in the blockchain industry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18728,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołami programistycznymi i partnerami technologicznymi",
                    "en" => "Collaborating with programming teams and technology partners."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_INFORMATYKI_PRZEMYSŁOWEJ = [
            [
                "id" => 18729,

                "name" => json_encode([
                    "pl" => "Wdrażanie i zarządzanie systemami informatycznymi w środowiskach przemysłowych",
                    "en" => "Implementing and managing IT systems in industrial environments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18730,

                "name" => json_encode([
                    "pl" => "Automatyzacja procesów produkcyjnych i integracja z systemami IT",
                    "en" => "Automating production processes and integrating them with IT systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18731,

                "name" => json_encode([
                    "pl" => "Diagnoza i naprawa problemów związanych z systemami przemysłowymi",
                    "en" => "Diagnosing and repairing issues with industrial systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18732,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów technicznych oraz monitorowanie wydajności",
                    "en" => "Conducting technical reviews and monitoring performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18733,

                "name" => json_encode([
                    "pl" => "Przestrzeganie norm i standardów bezpieczeństwa przemysłowego",
                    "en" => "Adhering to industrial safety norms and standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18734,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołami produkcyjnymi i inżynierami",
                    "en" => "Collaborating with production teams and engineers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_WIRTUALNEJ_RZECZYWISTOŚCI = [
            [
                "id" => 18735,

                "name" => json_encode([
                    "pl" => "Projektowanie i tworzenie aplikacji VR oraz doświadczeń użytkownika",
                    "en" => "Designing and creating VR applications and user experiences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18736,

                "name" => json_encode([
                    "pl" => "Testowanie i optymalizacja środowisk VR pod kątem wydajności",
                    "en" => "Testing and optimizing VR environments for performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18737,

                "name" => json_encode([
                    "pl" => "Integracja technologii VR z aplikacjami biznesowymi i edukacyjnymi",
                    "en" => "Integrating VR technology with business and educational applications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18738,

                "name" => json_encode([
                    "pl" => "Współpraca z projektantami UX oraz programistami VR",
                    "en" => "Collaborating with UX designers and VR developers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18739,

                "name" => json_encode([
                    "pl" => "Monitorowanie i wdrażanie nowości technologicznych w obszarze VR",
                    "en" => "Monitoring and implementing technological advancements in VR."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18740,

                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa i ergonomii w projektach VR",
                    "en" => "Adhering to safety and ergonomics principles in VR projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GRAFIK_KOMPUTEROWY_DTP = [
            [
                "id" => 18741,

                "name" => json_encode([
                    "pl" => "Projektowanie materiałów do druku, takich jak ulotki, plakaty, broszury",
                    "en" => "Designing print materials such as flyers, posters, and brochures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18742,

                "name" => json_encode([
                    "pl" => "Przygotowanie projektów graficznych zgodnie z wymogami druku",
                    "en" => "Preparing graphic designs according to print requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18743,

                "name" => json_encode([
                    "pl" => "Retuszowanie zdjęć oraz korekta kolorów",
                    "en" => "Photo retouching and color correction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18744,

                "name" => json_encode([
                    "pl" => "Praca z narzędziami DTP, takimi jak Adobe InDesign, Photoshop",
                    "en" => "Working with DTP tools such as Adobe InDesign and Photoshop."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18745,

                "name" => json_encode([
                    "pl" => "Tworzenie i zarządzanie plikami graficznymi zgodnie z wytycznymi klienta",
                    "en" => "Creating and managing graphic files according to client guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18746,

                "name" => json_encode([
                    "pl" => "Współpraca z drukarniami i koordynowanie procesu wydruku",
                    "en" => "Collaborating with printing houses and coordinating the printing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GRAFIK_KOMPUTEROWY_MULTIMEDIÓW = [
            [
                "id" => 18747,

                "name" => json_encode([
                    "pl" => "Tworzenie grafik na potrzeby projektów multimedialnych, takich jak gry, filmy, reklamy",
                    "en" => "Creating graphics for multimedia projects such as games, movies, and advertisements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18748,

                "name" => json_encode([
                    "pl" => "Projektowanie elementów interaktywnych i animacji",
                    "en" => "Designing interactive elements and animations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18749,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołami projektowymi i produkcyjnymi",
                    "en" => "Collaborating with design and production teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18750,

                "name" => json_encode([
                    "pl" => "Praca z oprogramowaniem do edycji grafiki i animacji (np. Adobe After Effects)",
                    "en" => "Working with graphic and animation software (e.g., Adobe After Effects)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18751,

                "name" => json_encode([
                    "pl" => "Optymalizacja grafiki pod kątem wydajności w aplikacjach multimedialnych",
                    "en" => "Optimizing graphics for performance in multimedia applications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18752,

                "name" => json_encode([
                    "pl" => "Przestrzeganie wytycznych wizualnych i standardów jakości",
                    "en" => "Adhering to visual guidelines and quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROJEKTANT_GRAFIKI = [
            [
                "id" => 18753,

                "name" => json_encode([
                    "pl" => "Tworzenie koncepcji wizualnych i projektów graficznych dla różnych mediów",
                    "en" => "Creating visual concepts and graphic designs for various media."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18754,

                "name" => json_encode([
                    "pl" => "Opracowywanie i realizacja identyfikacji wizualnej marek",
                    "en" => "Developing and implementing brand visual identities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18755,

                "name" => json_encode([
                    "pl" => "Współpraca z klientami w celu zrozumienia ich potrzeb graficznych",
                    "en" => "Collaborating with clients to understand their graphic needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18756,

                "name" => json_encode([
                    "pl" => "Tworzenie grafik promocyjnych i marketingowych (np. banery, logo)",
                    "en" => "Creating promotional and marketing graphics (e.g., banners, logos)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18757,

                "name" => json_encode([
                    "pl" => "Praca z narzędziami graficznymi, takimi jak Adobe Illustrator, Photoshop",
                    "en" => "Working with graphic tools such as Adobe Illustrator and Photoshop."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18758,

                "name" => json_encode([
                    "pl" => "Dokumentowanie procesów projektowych i archiwizacja projektów",
                    "en" => "Documenting design processes and archiving projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROJEKTANT_GRAFIKI_STRON_INTERNETOWYCH = [
            [
                "id" => 18759,

                "name" => json_encode([
                    "pl" => "Projektowanie wizualnej strony interfejsów internetowych i aplikacji",
                    "en" => "Designing the visual side of web and application interfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18760,

                "name" => json_encode([
                    "pl" => "Tworzenie spójnych elementów graficznych zgodnie z identyfikacją wizualną",
                    "en" => "Creating consistent graphic elements in line with visual identity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18761,

                "name" => json_encode([
                    "pl" => "Dostosowywanie projektów do różnych urządzeń i rozdzielczości",
                    "en" => "Adapting designs for various devices and resolutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18762,

                "name" => json_encode([
                    "pl" => "Współpraca z UI/UX Designerami oraz programistami front-end",
                    "en" => "Collaborating with UI/UX designers and front-end developers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18763,

                "name" => json_encode([
                    "pl" => "Optymalizacja elementów graficznych pod kątem wydajności strony",
                    "en" => "Optimizing graphic elements for website performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18764,

                "name" => json_encode([
                    "pl" => "Przestrzeganie wytycznych dotyczących użyteczności i estetyki",
                    "en" => "Following usability and aesthetic guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_ANIMACJI_MULTIMEDIALNEJ = [
            [
                "id" => 18765,

                "name" => json_encode([
                    "pl" => "Projektowanie i tworzenie animacji 2D i 3D na potrzeby multimediów",
                    "en" => "Designing and creating 2D and 3D animations for multimedia purposes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18766,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołami produkcyjnymi i grafikami w procesie animacji",
                    "en" => "Collaborating with production teams and graphic designers in the animation process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18767,

                "name" => json_encode([
                    "pl" => "Testowanie i optymalizacja animacji pod kątem wydajności",
                    "en" => "Testing and optimizing animations for performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18768,

                "name" => json_encode([
                    "pl" => "Praca z oprogramowaniem do animacji (np. Adobe After Effects, Blender)",
                    "en" => "Working with animation software (e.g., Adobe After Effects, Blender)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18769,

                "name" => json_encode([
                    "pl" => "Dokumentowanie procesu tworzenia animacji oraz tworzenie storyboardów",
                    "en" => "Documenting the animation creation process and developing storyboards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18770,

                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów jakości oraz zasad estetyki wizualnej",
                    "en" => "Following quality standards and visual aesthetics principles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ANIMACJI_FILMOWEJ = [
            [
                "id" => 18771,

                "name" => json_encode([
                    "pl" => "Tworzenie animacji na potrzeby produkcji filmowej i reklamowej",
                    "en" => "Creating animations for film production and advertising."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18772,

                "name" => json_encode([
                    "pl" => "Montaż i edycja materiałów animowanych",
                    "en" => "Editing and assembling animated materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18773,

                "name" => json_encode([
                    "pl" => "Współpraca z reżyserami i zespołem produkcyjnym przy realizacji scen",
                    "en" => "Collaborating with directors and production teams on scene realization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18774,

                "name" => json_encode([
                    "pl" => "Praca z oprogramowaniem do animacji filmowej i montażu",
                    "en" => "Working with film animation and editing software."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18775,

                "name" => json_encode([
                    "pl" => "Dokumentowanie pracy nad projektem oraz dbanie o zgodność z wytycznymi",
                    "en" => "Documenting project work and ensuring compliance with guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18776,

                "name" => json_encode([
                    "pl" => "Optymalizacja animacji pod kątem zgodności ze scenariuszem",
                    "en" => "Optimizing animations to match the script."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNICY_WSPARCIA_INFORMATYCZNEGO_I_TECHNICZNEGO = [
            [
                "id" => 18777,

                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia technicznego użytkownikom w zakresie IT",
                    "en" => "Providing technical support to users in IT matters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18778,

                "name" => json_encode([
                    "pl" => "Diagnoza i rozwiązywanie problemów sprzętowych i programowych",
                    "en" => "Diagnosing and resolving hardware and software issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18779,

                "name" => json_encode([
                    "pl" => "Instalacja i konfiguracja oprogramowania oraz sprzętu komputerowego",
                    "en" => "Installing and configuring software and computer hardware."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18780,

                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej i instrukcji dla użytkowników",
                    "en" => "Creating technical documentation and user manuals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18781,

                "name" => json_encode([
                    "pl" => "Monitorowanie zgłoszeń technicznych oraz ich terminowa obsługa",
                    "en" => "Monitoring technical issues and ensuring timely resolution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18782,

                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur bezpieczeństwa IT i polityk firmy",
                    "en" => "Following IT security procedures and company policies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ELEKTRONIKI_I_INFORMATYKI_MEDYCZNEJ = [
            [
                "id" => 18783,

                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja i naprawa sprzętu elektronicznego w placówkach medycznych",
                    "en" => "Installing, maintaining, and repairing electronic equipment in medical facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18784,

                "name" => json_encode([
                    "pl" => "Diagnoza i rozwiązywanie problemów technicznych urządzeń medycznych",
                    "en" => "Diagnosing and resolving technical issues with medical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18785,

                "name" => json_encode([
                    "pl" => "Testowanie i kalibracja urządzeń zgodnie z normami bezpieczeństwa",
                    "en" => "Testing and calibrating devices in accordance with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18786,

                "name" => json_encode([
                    "pl" => "Współpraca z personelem medycznym w zakresie obsługi sprzętu",
                    "en" => "Collaborating with medical staff regarding equipment usage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18787,

                "name" => json_encode([
                    "pl" => "Dokumentowanie przeprowadzanych napraw i przeglądów technicznych",
                    "en" => "Documenting repairs and technical inspections performed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18788,

                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów sanitarnych i regulacji branżowych",
                    "en" => "Adhering to sanitary regulations and industry standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TELEINFORMATYK = [
            [
                "id" => 18789,

                "name" => json_encode([
                    "pl" => "Instalacja i serwisowanie sieci teleinformatycznych",
                    "en" => "Installing and servicing telecommunication networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18790,

                "name" => json_encode([
                    "pl" => "Konfiguracja urządzeń sieciowych, takich jak routery, switche",
                    "en" => "Configuring network devices, such as routers and switches."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18791,

                "name" => json_encode([
                    "pl" => "Diagnoza oraz naprawa problemów z połączeniem i konfiguracją sieci",
                    "en" => "Diagnosing and repairing issues with network connections and configurations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18792,

                "name" => json_encode([
                    "pl" => "Monitorowanie i optymalizacja działania infrastruktury teleinformatycznej",
                    "en" => "Monitoring and optimizing the performance of telecommunication infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18793,

                "name" => json_encode([
                    "pl" => "Dokumentowanie pracy i aktualizowanie konfiguracji sieci",
                    "en" => "Documenting work and updating network configurations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18794,

                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa w zakresie sieci teleinformatycznych",
                    "en" => "Adhering to safety principles in telecommunication networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SERWISANT_SPRZĘTU_KOMPUTEROWEGO = [
            [
                "id" => 18795,

                "name" => json_encode([
                    "pl" => "Diagnostyka, konserwacja i naprawa sprzętu komputerowego",
                    "en" => "Diagnosing, maintaining, and repairing computer equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18796,

                "name" => json_encode([
                    "pl" => "Wymiana uszkodzonych komponentów oraz konfiguracja sprzętu",
                    "en" => "Replacing damaged components and configuring hardware."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18797,

                "name" => json_encode([
                    "pl" => "Instalacja i aktualizacja oprogramowania oraz sterowników",
                    "en" => "Installing and updating software and drivers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18798,

                "name" => json_encode([
                    "pl" => "Wsparcie techniczne dla użytkowników i doradztwo w zakresie sprzętu",
                    "en" => "Providing technical support and advice on hardware."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18799,

                "name" => json_encode([
                    "pl" => "Dokumentowanie przeprowadzonych napraw i przeglądów",
                    "en" => "Documenting repairs and inspections performed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18800,

                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów bezpieczeństwa pracy ze sprzętem komputerowym",
                    "en" => "Following safety standards for working with computer equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_PROGRAMISTA = [
            [
                "id" => 18801,

                "name" => json_encode([
                    "pl" => "Tworzenie i testowanie prostych programów komputerowych",
                    "en" => "Creating and testing simple computer programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18802,

                "name" => json_encode([
                    "pl" => "Pomoc w analizie wymagań i dokumentacji projektowej",
                    "en" => "Assisting in requirements analysis and project documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18803,

                "name" => json_encode([
                    "pl" => "Praca z językami programowania oraz narzędziami programistycznymi",
                    "en" => "Working with programming languages and development tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18804,

                "name" => json_encode([
                    "pl" => "Diagnoza i naprawa błędów w kodzie pod nadzorem programistów",
                    "en" => "Diagnosing and fixing code errors under developer supervision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18805,

                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej i instrukcji dla użytkowników",
                    "en" => "Creating technical documentation and user manuals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18806,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołem programistycznym i projektowym",
                    "en" => "Collaborating with development and project teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];


        DB::table('detail_projects')->insert(array_merge(
            $SPECJALISTA_MONITORINGU_SYSTEMÓW_ZABEZPIECZEŃ_TECHNICZNYCH_OSÓB_I_MIENIA,
            $INŻYNIEROWIE_TELEKOMUNIKACJI,
            $OPERATORZY_URZĄDZEŃ_TELEKOMUNIKACYJNYCH,
            $INŻYNIER_INŻYNIERII_KOSMICZNEJ_I_SATELITARNEJ,
            $ANALITYCY_SYSTEMÓW_KOMPUTEROWYCH,
            $ANALITYK_SYSTEMÓW_TELEINFORMATYCZNYCH,
            $SPECJALISTA_DO_SPRAW_ROZWOJU_OPROGRAMOWANIA_SYSTEMÓW_INFORMATYCZNYCH,
            $TESTER_OPROGRAMOWANIA_KOMPUTEROWEGO,
            $BIOINFORMATYK,
            $INFORMATYK_MEDYCZNY,
            $SPECJALISTA_ZASTOSOWAŃ_INFORMATYKI,
            $TESTER_SYSTEMÓW_TELEINFORMATYCZNYCH,
            $ADMINISTRATORZY_SYSTEMÓW_KOMPUTEROWYCH,
            $SPECJALIŚCI_DO_SPRAW_SIECI_KOMPUTEROWYCH,
            $SPECJALISTA_DO_SPRAW_CYBERBEZPIECZEŃSTWA,
            $OPERATOR_BEZPRZEWODOWYCH_SIECI_KOMPUTEROWYCH,
            $OPERATOR_KOMPUTEROWYCH_URZĄDZEŃ_PERYFERYJNYCH,
            $OPERATORZY_SIECI_I_SYSTEMÓW_KOMPUTEROWYCH,
            $ADMINISTRATOR_SYSTEMÓW_POCZTY_ELEKTRONICZNEJ,
            $OPERATOR_APLIKACJI_KOMPUTEROWYCH,
            $PROJEKTANCI_APLIKACJI_SIECIOWYCH_I_MULTIMEDIÓW,
            $PROGRAMIŚCI_APLIKACJI,
            $SPECJALISTA_SYSTEMÓW_ROZPOZNAWANIA_MOWY,
            $SPECJALISTA_DO_SPRAW_ROZWOJU_SZTUCZNEJ_INTELIGENCJI,
            $SPECJALISTA_DO_SPRAW_UCZENIA_MASZYNOWEGO,
            $ADMINISTRATOR_STRON_INTERNETOWYCH,
            $PRACOWNIK_POZYCJONOWANIA_STRON_INTERNETOWYCH,
            $PROJEKTANT_STRON_INTERNETOWYCH,
            $ANALITYK_RUCHU_NA_STRONACH_INTERNETOWYCH,
            $UX_DESIGNER,
            $UI_DESIGNER,
            $SPECJALISTA_DO_SPRAW_TECHNOLOGII_BLOCKCHAIN,
            $SPECJALISTA_DO_SPRAW_INFORMATYKI_PRZEMYSŁOWEJ,
            $SPECJALISTA_DO_SPRAW_WIRTUALNEJ_RZECZYWISTOŚCI,
            $GRAFIK_KOMPUTEROWY_DTP,
            $GRAFIK_KOMPUTEROWY_MULTIMEDIÓW,
            $PROJEKTANT_GRAFIKI,
            $PROJEKTANT_GRAFIKI_STRON_INTERNETOWYCH,
            $SPECJALISTA_DO_SPRAW_ANIMACJI_MULTIMEDIALNEJ,
            $TECHNIK_ANIMACJI_FILMOWEJ,
            $TECHNICY_WSPARCIA_INFORMATYCZNEGO_I_TECHNICZNEGO,
            $TECHNIK_ELEKTRONIKI_I_INFORMATYKI_MEDYCZNEJ,
            $TECHNIK_TELEINFORMATYK,
            $SERWISANT_SPRZĘTU_KOMPUTEROWEGO,
            $TECHNIK_PROGRAMISTA
        ));
        Category::whereId('1363')->first()->detailprojects()->attach(collect($SPECJALISTA_MONITORINGU_SYSTEMÓW_ZABEZPIECZEŃ_TECHNICZNYCH_OSÓB_I_MIENIA)->pluck('id')->toArray());
        Category::whereId('1364')->first()->detailprojects()->attach(collect($INŻYNIEROWIE_TELEKOMUNIKACJI)->pluck('id')->toArray());
        Category::whereId('1369')->first()->detailprojects()->attach(collect($OPERATORZY_URZĄDZEŃ_TELEKOMUNIKACYJNYCH)->pluck('id')->toArray());
        Category::whereId('1374')->first()->detailprojects()->attach(collect($INŻYNIER_INŻYNIERII_KOSMICZNEJ_I_SATELITARNEJ)->pluck('id')->toArray());
        Category::whereId('1376')->first()->detailprojects()->attach(collect($ANALITYCY_SYSTEMÓW_KOMPUTEROWYCH)->pluck('id')->toArray());
        Category::whereId('1377')->first()->detailprojects()->attach(collect($ANALITYK_SYSTEMÓW_TELEINFORMATYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1383')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_ROZWOJU_OPROGRAMOWANIA_SYSTEMÓW_INFORMATYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1385')->first()->detailprojects()->attach(collect($TESTER_OPROGRAMOWANIA_KOMPUTEROWEGO)->pluck('id')->toArray());
        Category::whereId('1386')->first()->detailprojects()->attach(collect($BIOINFORMATYK)->pluck('id')->toArray());
        Category::whereId('1387')->first()->detailprojects()->attach(collect($INFORMATYK_MEDYCZNY)->pluck('id')->toArray());
        Category::whereId('1388')->first()->detailprojects()->attach(collect($SPECJALISTA_ZASTOSOWAŃ_INFORMATYKI)->pluck('id')->toArray());
        Category::whereId('1389')->first()->detailprojects()->attach(collect($TESTER_SYSTEMÓW_TELEINFORMATYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1391')->first()->detailprojects()->attach(collect($ADMINISTRATORZY_SYSTEMÓW_KOMPUTEROWYCH)->pluck('id')->toArray());
        Category::whereId('1395')->first()->detailprojects()->attach(collect($SPECJALIŚCI_DO_SPRAW_SIECI_KOMPUTEROWYCH)->pluck('id')->toArray());
        Category::whereId('1401')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_CYBERBEZPIECZEŃSTWA)->pluck('id')->toArray());
        Category::whereId('1405')->first()->detailprojects()->attach(collect($OPERATOR_BEZPRZEWODOWYCH_SIECI_KOMPUTEROWYCH)->pluck('id')->toArray());
        Category::whereId('1406')->first()->detailprojects()->attach(collect($OPERATOR_KOMPUTEROWYCH_URZĄDZEŃ_PERYFERYJNYCH)->pluck('id')->toArray());
        Category::whereId('1407')->first()->detailprojects()->attach(collect($OPERATORZY_SIECI_I_SYSTEMÓW_KOMPUTEROWYCH)->pluck('id')->toArray());
        Category::whereId('1412')->first()->detailprojects()->attach(collect($ADMINISTRATOR_SYSTEMÓW_POCZTY_ELEKTRONICZNEJ)->pluck('id')->toArray());
        Category::whereId('1413')->first()->detailprojects()->attach(collect($OPERATOR_APLIKACJI_KOMPUTEROWYCH)->pluck('id')->toArray());
        Category::whereId('1415')->first()->detailprojects()->attach(collect($PROJEKTANCI_APLIKACJI_SIECIOWYCH_I_MULTIMEDIÓW)->pluck('id')->toArray());
        Category::whereId('1420')->first()->detailprojects()->attach(collect($PROGRAMIŚCI_APLIKACJI)->pluck('id')->toArray());
        Category::whereId('1426')->first()->detailprojects()->attach(collect($SPECJALISTA_SYSTEMÓW_ROZPOZNAWANIA_MOWY)->pluck('id')->toArray());
        Category::whereId('1434')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_ROZWOJU_SZTUCZNEJ_INTELIGENCJI)->pluck('id')->toArray());
        Category::whereId('1435')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_UCZENIA_MASZYNOWEGO)->pluck('id')->toArray());
        Category::whereId('1437')->first()->detailprojects()->attach(collect($ADMINISTRATOR_STRON_INTERNETOWYCH)->pluck('id')->toArray());
        Category::whereId('1438')->first()->detailprojects()->attach(collect($PRACOWNIK_POZYCJONOWANIA_STRON_INTERNETOWYCH)->pluck('id')->toArray());
        Category::whereId('1439')->first()->detailprojects()->attach(collect($PROJEKTANT_STRON_INTERNETOWYCH)->pluck('id')->toArray());
        Category::whereId('1440')->first()->detailprojects()->attach(collect($ANALITYK_RUCHU_NA_STRONACH_INTERNETOWYCH)->pluck('id')->toArray());
        Category::whereId('1444')->first()->detailprojects()->attach(collect($UX_DESIGNER)->pluck('id')->toArray());
        Category::whereId('1445')->first()->detailprojects()->attach(collect($UI_DESIGNER)->pluck('id')->toArray());
        Category::whereId('1450')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_TECHNOLOGII_BLOCKCHAIN)->pluck('id')->toArray());
        Category::whereId('1451')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_INFORMATYKI_PRZEMYSŁOWEJ)->pluck('id')->toArray());
        Category::whereId('1452')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_WIRTUALNEJ_RZECZYWISTOŚCI)->pluck('id')->toArray());
        Category::whereId('1454')->first()->detailprojects()->attach(collect($GRAFIK_KOMPUTEROWY_DTP)->pluck('id')->toArray());
        Category::whereId('1455')->first()->detailprojects()->attach(collect($GRAFIK_KOMPUTEROWY_MULTIMEDIÓW)->pluck('id')->toArray());
        Category::whereId('1456')->first()->detailprojects()->attach(collect($PROJEKTANT_GRAFIKI)->pluck('id')->toArray());
        Category::whereId('1457')->first()->detailprojects()->attach(collect($PROJEKTANT_GRAFIKI_STRON_INTERNETOWYCH)->pluck('id')->toArray());
        Category::whereId('1458')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_ANIMACJI_MULTIMEDIALNEJ)->pluck('id')->toArray());
        Category::whereId('1460')->first()->detailprojects()->attach(collect($TECHNIK_ANIMACJI_FILMOWEJ)->pluck('id')->toArray());
        Category::whereId('1462')->first()->detailprojects()->attach(collect($TECHNICY_WSPARCIA_INFORMATYCZNEGO_I_TECHNICZNEGO)->pluck('id')->toArray());
        Category::whereId('1470')->first()->detailprojects()->attach(collect($TECHNIK_ELEKTRONIKI_I_INFORMATYKI_MEDYCZNEJ)->pluck('id')->toArray());
        Category::whereId('1471')->first()->detailprojects()->attach(collect($TECHNIK_TELEINFORMATYK)->pluck('id')->toArray());
        Category::whereId('1474')->first()->detailprojects()->attach(collect($SERWISANT_SPRZĘTU_KOMPUTEROWEGO)->pluck('id')->toArray());
        Category::whereId('1475')->first()->detailprojects()->attach(collect($TECHNIK_PROGRAMISTA)->pluck('id')->toArray());

    }
}

