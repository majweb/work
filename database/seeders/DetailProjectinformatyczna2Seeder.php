<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectinformatyczna2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();

        $INŻYNIER_TELEKOMUNIKACJI = [

            [
                "id" => 23329,
                "name" => json_encode([
                    "pl" => "Projektowanie, rozwój i wdrażanie systemów telekomunikacyjnych, w tym sieci transmisji danych, telekomunikacji przewodowej i bezprzewodowej.",
                    "en" => "Designing, developing, and implementing telecommunication systems, including data transmission networks, wired and wireless telecommunications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23330,
                "name" => json_encode([
                    "pl" => "Analiza, optymalizacja i zarządzanie sieciami telekomunikacyjnymi pod kątem efektywności, wydajności i niezawodności.",
                    "en" => "Analyzing, optimizing, and managing telecommunications networks for efficiency, performance, and reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23331,
                "name" => json_encode([
                    "pl" => "Instalacja, konfiguracja i testowanie urządzeń telekomunikacyjnych, w tym routerów, przełączników i systemów sieciowych.",
                    "en" => "Installing, configuring, and testing telecommunications devices, including routers, switches, and network systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23332,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów i diagnostyki sieci telekomunikacyjnych oraz zapewnianie ich zgodności z normami i wymaganiami jakościowymi.",
                    "en" => "Conducting tests and diagnostics of telecommunications networks and ensuring compliance with standards and quality requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23333,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii i systemów telekomunikacyjnych, w tym technologii 5G, sieci światłowodowych oraz systemów IoT.",
                    "en" => "Implementing new technologies and telecommunications systems, including 5G technology, fiber optic networks, and IoT systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23334,
                "name" => json_encode([
                    "pl" => "Zarządzanie projektami telekomunikacyjnymi, w tym planowanie, nadzorowanie harmonogramów i budżetów.",
                    "en" => "Managing telecommunications projects, including planning, monitoring schedules, and budgets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNOLOG_INŻYNIERII_TELEKOMUNIKACYJNEJ = [

            [
                "id" => 23335,
                "name" => json_encode([
                    "pl" => "Rozwój i wdrażanie technologii w systemach telekomunikacyjnych, w tym projektowanie oraz implementacja rozwiązań związanych z transmisją danych.",
                    "en" => "Developing and implementing technologies in telecommunication systems, including designing and implementing solutions for data transmission."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23336,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami inżynierskimi w celu opracowania nowych rozwiązań technologicznych w telekomunikacji.",
                    "en" => "Collaborating with engineering teams to develop new technological solutions in telecommunications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23337,
                "name" => json_encode([
                    "pl" => "Optymalizacja i testowanie technologii telekomunikacyjnych w celu poprawy jakości transmisji i efektywności sieci.",
                    "en" => "Optimizing and testing telecommunication technologies to improve transmission quality and network efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23338,
                "name" => json_encode([
                    "pl" => "Nadzór nad wdrażaniem nowych technologii telekomunikacyjnych, w tym testowanie nowych urządzeń i systemów.",
                    "en" => "Supervising the implementation of new telecommunication technologies, including testing new devices and systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23339,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szkoleń i wsparcia technicznego dla zespołów zajmujących się implementacją nowych technologii telekomunikacyjnych.",
                    "en" => "Providing training and technical support to teams involved in implementing new telecommunication technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23340,
                "name" => json_encode([
                    "pl" => "Opracowanie dokumentacji projektowej oraz procedur związanych z wdrażaniem nowych technologii telekomunikacyjnych.",
                    "en" => "Developing project documentation and procedures related to the implementation of new telecommunication technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_TELEINFORMATYK = [

            [
                "id" => 23341,
                "name" => json_encode([
                    "pl" => "Projektowanie i implementacja rozwiązań teleinformatycznych, w tym systemów komunikacji, sieci komputerowych oraz baz danych.",
                    "en" => "Designing and implementing telecommunication and information technology solutions, including communication systems, computer networks, and databases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23342,
                "name" => json_encode([
                    "pl" => "Integracja systemów informatycznych i telekomunikacyjnych, w tym połączenie urządzeń i oprogramowania w ramach jednej infrastruktury.",
                    "en" => "Integrating information and telecommunication systems, including connecting devices and software within a single infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23343,
                "name" => json_encode([
                    "pl" => "Analiza, projektowanie i wdrażanie rozwiązań z zakresu bezpieczeństwa sieci i systemów informatycznych.",
                    "en" => "Analyzing, designing, and implementing network and information system security solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23344,
                "name" => json_encode([
                    "pl" => "Tworzenie, optymalizacja i testowanie aplikacji teleinformatycznych, w tym systemów do przesyłania danych i zarządzania sieciami.",
                    "en" => "Creating, optimizing, and testing telecommunication IT applications, including data transmission systems and network management systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23345,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych rozwiązań teleinformatycznych w organizacji, zapewniając ich efektywność i niezawodność.",
                    "en" => "Implementing new telecommunication IT solutions within an organization, ensuring their efficiency and reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23346,
                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń i wsparcia dla użytkowników systemów teleinformatycznych.",
                    "en" => "Providing training and support for users of telecommunication IT systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_INŻYNIEROWIE_TELEKOMUNIKACJI = [

            [
                "id" => 23347,
                "name" => json_encode([
                    "pl" => "Projektowanie, instalacja i konserwacja systemów telekomunikacyjnych, w tym systemów transmisji danych i sieci telefonicznych.",
                    "en" => "Designing, installing, and maintaining telecommunications systems, including data transmission systems and telephone networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23348,
                "name" => json_encode([
                    "pl" => "Monitorowanie, diagnozowanie i naprawa sieci telekomunikacyjnych oraz urządzeń związanych z transmisją danych.",
                    "en" => "Monitoring, diagnosing, and repairing telecommunications networks and devices related to data transmission."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23349,
                "name" => json_encode([
                    "pl" => "Testowanie sprzętu telekomunikacyjnego, w tym routerów, switchy oraz urządzeń do przesyłania danych.",
                    "en" => "Testing telecommunications equipment, including routers, switches, and data transmission devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23350,
                "name" => json_encode([
                    "pl" => "Optymalizacja sieci telekomunikacyjnych pod kątem wydajności i niezawodności.",
                    "en" => "Optimizing telecommunications networks for performance and reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23351,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami projektowymi i inżynieryjnymi w zakresie wdrażania nowych technologii telekomunikacyjnych.",
                    "en" => "Collaborating with design and engineering teams in implementing new telecommunication technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23352,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji i raportowanie stanu sieci telekomunikacyjnych.",
                    "en" => "Maintaining documentation and reporting on the status of telecommunications networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_NADAWCZYCH_TELEWIZJI_KABLOWEJ = [

            [
                "id" => 23353,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń nadawczych telewizji kablowej, w tym urządzeń nadających sygnał telewizyjny do sieci kablowych.",
                    "en" => "Operating transmission equipment for cable television, including devices that transmit the television signal to cable networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23354,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości sygnału nadawczego i optymalizacja działania urządzeń nadawczych telewizji kablowej.",
                    "en" => "Monitoring the quality of the transmission signal and optimizing the performance of cable television broadcasting equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23355,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w urządzeniach nadawczych oraz ich naprawa lub konserwacja.",
                    "en" => "Diagnosing faults in transmission equipment and performing repairs or maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23356,
                "name" => json_encode([
                    "pl" => "Testowanie i kalibracja urządzeń nadawczych telewizji kablowej w celu zapewnienia wysokiej jakości obrazu i dźwięku.",
                    "en" => "Testing and calibrating cable television transmission equipment to ensure high image and sound quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23357,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej urządzeń nadawczych telewizji kablowej.",
                    "en" => "Maintaining service documentation for cable television transmission equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23358,
                "name" => json_encode([
                    "pl" => "Szkolenie użytkowników w zakresie obsługi i konserwacji urządzeń nadawczych telewizji kablowej.",
                    "en" => "Training users on the operation and maintenance of cable television transmission equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_RADIOMUNIKACYJNYCH = [

            [
                "id" => 23359,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń radiokomunikacyjnych, w tym urządzeń do przesyłania i odbierania sygnałów radiowych, zarówno w służbach publicznych, jak i przemysłowych.",
                    "en" => "Operating radiocommunication equipment, including devices for transmitting and receiving radio signals, both in public and industrial services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23360,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości sygnałów radiowych oraz dostosowywanie ustawień urządzeń radiokomunikacyjnych w celu zapewnienia stabilności łączności.",
                    "en" => "Monitoring the quality of radio signals and adjusting the settings of radiocommunication devices to ensure stable communication."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23361,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w urządzeniach radiokomunikacyjnych oraz ich naprawa lub konserwacja.",
                    "en" => "Diagnosing faults in radiocommunication equipment and performing repairs or maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23362,
                "name" => json_encode([
                    "pl" => "Testowanie i kalibracja urządzeń radiokomunikacyjnych, zapewniając ich prawidłowe działanie w różnych warunkach.",
                    "en" => "Testing and calibrating radiocommunication devices to ensure their proper operation in different conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23363,
                "name" => json_encode([
                    "pl" => "Instalacja i konfiguracja nowych urządzeń radiokomunikacyjnych, w tym systemów łączności i sieci radiowych.",
                    "en" => "Installing and configuring new radiocommunication devices, including communication systems and radio networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23364,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji eksploatacyjnej urządzeń radiokomunikacyjnych.",
                    "en" => "Maintaining operational documentation for radiocommunication equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TELEKOMUNIKACJI = [

            [
                "id" => 23365,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja i naprawa systemów telekomunikacyjnych, w tym kabli, urządzeń sieciowych, centrali telefonicznych oraz systemów transmisji danych.",
                    "en" => "Installation, maintenance, and repair of telecommunication systems, including cables, network devices, telephone exchanges, and data transmission systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23366,
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w urządzeniach telekomunikacyjnych oraz ich naprawa.",
                    "en" => "Diagnosing faults in telecommunication devices and performing repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23367,
                "name" => json_encode([
                    "pl" => "Instalacja nowych systemów telekomunikacyjnych, w tym urządzeń do przesyłania danych i rozmów głosowych.",
                    "en" => "Installing new telecommunication systems, including devices for data transmission and voice communication."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23368,
                "name" => json_encode([
                    "pl" => "Testowanie i optymalizacja działania sieci telekomunikacyjnych, aby zapewnić ich efektywność i niezawodność.",
                    "en" => "Testing and optimizing the performance of telecommunications networks to ensure efficiency and reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23369,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji instalacji i serwisowania urządzeń telekomunikacyjnych.",
                    "en" => "Maintaining installation and service documentation for telecommunication devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23370,
                "name" => json_encode([
                    "pl" => "Szkolenie użytkowników w zakresie obsługi urządzeń telekomunikacyjnych.",
                    "en" => "Training users on the operation of telecommunication devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_URZĄDZEŃ_TELEKOMUNIKACYJNYCH = [

            [
                "id" => 23371,
                "name" => json_encode([
                    "pl" => "Obsługa i monitorowanie urządzeń telekomunikacyjnych, takich jak systemy komunikacji głosowej, sieci internetowe, urządzenia do transmisji danych.",
                    "en" => "Operating and monitoring telecommunication devices, such as voice communication systems, internet networks, and data transmission devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23372,
                "name" => json_encode([
                    "pl" => "Instalacja, konserwacja i naprawa urządzeń telekomunikacyjnych w różnych środowiskach przemysłowych i biurowych.",
                    "en" => "Installation, maintenance, and repair of telecommunication devices in various industrial and office environments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23373,
                "name" => json_encode([
                    "pl" => "Testowanie sprzętu telekomunikacyjnego, w tym urządzeń transmisji danych oraz systemów telefonicznych.",
                    "en" => "Testing telecommunications equipment, including data transmission devices and telephone systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23374,
                "name" => json_encode([
                    "pl" => "Monitorowanie działania sieci telekomunikacyjnych, diagnozowanie problemów i naprawa uszkodzonych urządzeń.",
                    "en" => "Monitoring the operation of telecommunications networks, diagnosing issues, and repairing faulty devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23375,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej urządzeń telekomunikacyjnych oraz aktualizacja stanów magazynowych.",
                    "en" => "Maintaining service documentation for telecommunication devices and updating inventory levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23376,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem projektowym w celu optymalizacji działania urządzeń telekomunikacyjnych.",
                    "en" => "Collaborating with the project team to optimize the performance of telecommunication devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONSULTANT_DO_SPRAW_SYSTEMÓW_TELEINFORMATYCZNYCH = [

            [
                "id" => 23377,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie projektowania, wdrażania i utrzymania systemów teleinformatycznych, w tym sieci komputerowych, oprogramowania i urządzeń.",
                    "en" => "Advising on the design, implementation, and maintenance of telecommunication systems, including computer networks, software, and devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23378,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów systemów teleinformatycznych i rekomendowanie optymalizacji pod kątem wydajności i bezpieczeństwa.",
                    "en" => "Conducting audits of telecommunication systems and recommending optimizations for performance and security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23379,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie polityk oraz procedur dotyczących zarządzania systemami teleinformatycznymi.",
                    "en" => "Developing and implementing policies and procedures for managing telecommunication systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23380,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami technicznymi i zarządem w zakresie projektowania i integracji systemów teleinformatycznych.",
                    "en" => "Collaborating with technical teams and management to design and integrate telecommunication systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23381,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szkoleń dla pracowników w zakresie obsługi i zarządzania systemami teleinformatycznymi.",
                    "en" => "Conducting training for employees on the operation and management of telecommunication systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23382,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji projektowej i technicznej związanej z systemami teleinformatycznymi.",
                    "en" => "Maintaining project and technical documentation related to telecommunication systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROJEKTANT_ARCHITEKT_SYSTEMÓW_TELEINFORMATYCZNYCH = [

            [
                "id" => 23383,
                "name" => json_encode([
                    "pl" => "Projektowanie i architektura systemów teleinformatycznych, w tym infrastruktury sieciowej, baz danych i systemów zarządzania informacjami.",
                    "en" => "Designing and architecting telecommunication systems, including network infrastructure, databases, and information management systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23384,
                "name" => json_encode([
                    "pl" => "Opracowywanie koncepcji i strategii dotyczących integracji nowych systemów teleinformatycznych z istniejącymi infrastrukturami.",
                    "en" => "Developing concepts and strategies for integrating new telecommunication systems with existing infrastructures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23385,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami deweloperskimi, inżynierskimi i klientami w zakresie projektowania i wdrażania systemów teleinformatycznych.",
                    "en" => "Collaborating with development, engineering, and client teams in designing and implementing telecommunication systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23386,
                "name" => json_encode([
                    "pl" => "Testowanie i analiza systemów teleinformatycznych pod kątem wydajności, niezawodności i bezpieczeństwa.",
                    "en" => "Testing and analyzing telecommunication systems for performance, reliability, and security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23387,
                "name" => json_encode([
                    "pl" => "Opracowywanie dokumentacji projektowej, w tym schematów, rysunków technicznych i instrukcji.",
                    "en" => "Developing project documentation, including schematics, technical drawings, and instructions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23388,
                "name" => json_encode([
                    "pl" => "Optymalizacja i zarządzanie procesem projektowania systemów teleinformatycznych, zapewniając ich zgodność z wymaganiami biznesowymi.",
                    "en" => "Optimizing and managing the design process of telecommunication systems, ensuring compliance with business requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ANALITYCY_SYSTEMÓW_KOMPUTEROWYCH = [

            [
                "id" => 23389,
                "name" => json_encode([
                    "pl" => "Analiza wymagań użytkowników i projektowanie rozwiązań IT w celu dostosowania systemów komputerowych do specyficznych potrzeb organizacji.",
                    "en" => "Analyzing user requirements and designing IT solutions to adapt computer systems to the specific needs of an organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23390,
                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji analitycznej i projektowej systemów komputerowych oraz raportów z realizacji projektów.",
                    "en" => "Creating analytical and project documentation for computer systems, along with project implementation reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23391,
                "name" => json_encode([
                    "pl" => "Testowanie, optymalizacja i implementacja nowych systemów komputerowych oraz aplikacji wspierających organizację.",
                    "en" => "Testing, optimizing, and implementing new computer systems and applications to support the organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23392,
                "name" => json_encode([
                    "pl" => "Zarządzanie projektami informatycznymi, w tym koordynowanie zespołów projektowych i nadzorowanie postępu prac.",
                    "en" => "Managing IT projects, including coordinating project teams and overseeing progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23393,
                "name" => json_encode([
                    "pl" => "Analiza problemów i potrzeby organizacyjne oraz tworzenie rozwiązań systemowych, które odpowiadają na te potrzeby.",
                    "en" => "Analyzing problems and organizational needs, and creating system solutions that address those needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23394,
                "name" => json_encode([
                    "pl" => "Monitorowanie i audyt istniejących systemów komputerowych, w tym ocena ich wydajności i niezawodności.",
                    "en" => "Monitoring and auditing existing computer systems, including evaluating their performance and reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ANALITYK_DOŚWIADCZENIA_UŻYTKOWNIKÓW = [

            [
                "id" => 23395,
                "name" => json_encode([
                    "pl" => "Badanie potrzeb i doświadczeń użytkowników w celu zaprojektowania systemów i aplikacji, które zapewnią najlepsze możliwe wrażenia.",
                    "en" => "Studying user needs and experiences to design systems and applications that provide the best possible user experience."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23396,
                "name" => json_encode([
                    "pl" => "Analiza interakcji użytkowników z systemami komputerowymi oraz projektowanie intuicyjnych interfejsów użytkownika.",
                    "en" => "Analyzing user interactions with computer systems and designing intuitive user interfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23397,
                "name" => json_encode([
                    "pl" => "Testowanie i ocena użyteczności systemów i aplikacji z perspektywy użytkownika.",
                    "en" => "Testing and evaluating the usability of systems and applications from a user perspective."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23398,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami projektowymi i deweloperskimi w celu wdrożenia najlepszych praktyk UX (User Experience).",
                    "en" => "Collaborating with design and development teams to implement best UX (User Experience) practices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23399,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań jakościowych i ilościowych, takich jak testy użyteczności i wywiady z użytkownikami.",
                    "en" => "Conducting qualitative and quantitative research, such as usability tests and user interviews."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23400,
                "name" => json_encode([
                    "pl" => "Opracowywanie raportów z wynikami testów UX oraz rekomendowanie usprawnień dla systemów i aplikacji.",
                    "en" => "Preparing reports with UX test results and recommending improvements for systems and applications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_INTEGRACJI_TECHNOLOGII_INFORMATYCZNYCH = [

            [
                "id" => 23401,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii integracji technologii informatycznych w celu zapewnienia spójności systemów w organizacji.",
                    "en" => "Developing strategies for integrating IT technologies to ensure consistency across systems in the organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23402,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych rozwiązań IT, w tym integracja oprogramowania i systemów z istniejącymi rozwiązaniami organizacyjnymi.",
                    "en" => "Implementing new IT solutions, including integrating software and systems with existing organizational solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23403,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów integracji technologii, identyfikowanie i rozwiązywanie problemów technicznych.",
                    "en" => "Monitoring integration processes, identifying and resolving technical issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23404,
                "name" => json_encode([
                    "pl" => "Szkolenie zespołów IT i użytkowników końcowych z zakresu korzystania z zintegrowanych technologii informatycznych.",
                    "en" => "Training IT teams and end users on how to use integrated IT technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23405,
                "name" => json_encode([
                    "pl" => "Zarządzanie projektami integracji IT, w tym nadzorowanie harmonogramów, budżetów i zasobów.",
                    "en" => "Managing IT integration projects, including overseeing schedules, budgets, and resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23406,
                "name" => json_encode([
                    "pl" => "Opracowywanie dokumentacji technicznej dotyczącej procesów integracji technologii informatycznych.",
                    "en" => "Developing technical documentation related to IT integration processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_SPECJALIŚCI_DO_SPRAW_ROZWOJU_SYSTEMÓW_INFORMATYCZNYCH = [

            [
                "id" => 23407,
                "name" => json_encode([
                    "pl" => "Projektowanie i rozwijanie systemów informatycznych w celu optymalizacji procesów biznesowych i technologicznych.",
                    "en" => "Designing and developing information systems to optimize business and technological processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23408,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami IT w zakresie analizy wymagań systemowych i wdrażania rozwiązań informatycznych.",
                    "en" => "Collaborating with IT teams to analyze system requirements and implement IT solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23409,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych rozwiązań w istniejących systemach informatycznych oraz zapewnienie ich optymalnego działania.",
                    "en" => "Implementing new solutions in existing information systems and ensuring their optimal performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23410,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów biznesowych i zarządzanie procesami technologicznymi w zakresie rozwoju systemów informatycznych.",
                    "en" => "Optimizing business processes and managing technological processes in the development of information systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23411,
                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń i wsparcia technicznego dla zespołów projektowych w zakresie nowych rozwiązań IT.",
                    "en" => "Providing training and technical support to project teams on new IT solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23412,
                "name" => json_encode([
                    "pl" => "Opracowywanie dokumentacji projektowej, w tym schematów systemów informatycznych i raportów z realizacji projektów.",
                    "en" => "Developing project documentation, including system schematics and project implementation reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ADMINISTRATOR_SYSTEMÓW_KOMPUTEROWYCH = [

            [
                "id" => 23413,
                "name" => json_encode([
                    "pl" => "Zarządzanie i administrowanie systemami komputerowymi, w tym serwerami, bazami danych, oraz sieciami komputerowymi.",
                    "en" => "Managing and administering computer systems, including servers, databases, and computer networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23414,
                "name" => json_encode([
                    "pl" => "Monitorowanie wydajności systemów komputerowych oraz wykonywanie rutynowych działań konserwacyjnych i aktualizacji.",
                    "en" => "Monitoring system performance and performing routine maintenance and updates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23415,
                "name" => json_encode([
                    "pl" => "Zarządzanie bezpieczeństwem systemów komputerowych, w tym kontrola dostępu i ochrona przed zagrożeniami z sieci.",
                    "en" => "Managing the security of computer systems, including access control and protection against network threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23416,
                "name" => json_encode([
                    "pl" => "Tworzenie kopii zapasowych danych i przywracanie systemów po awarii.",
                    "en" => "Creating data backups and restoring systems after failures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23417,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów związanych z systemami komputerowymi oraz ich oprogramowaniem.",
                    "en" => "Troubleshooting issues related to computer systems and their software."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23418,
                "name" => json_encode([
                    "pl" => "Zarządzanie aktualizacjami oprogramowania i konfiguracją systemów komputerowych.",
                    "en" => "Managing software updates and system configuration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ADMINISTRATOR_ZINTEGROWANYCH_SYSTEMÓW_ZARZĄDZANIA = [

            [
                "id" => 23419,
                "name" => json_encode([
                    "pl" => "Zarządzanie zintegrowanymi systemami zarządzania, w tym ERP, CRM i systemami finansowo-księgowymi.",
                    "en" => "Managing integrated management systems, including ERP, CRM, and financial-accounting systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23420,
                "name" => json_encode([
                    "pl" => "Optymalizacja działania systemów zarządzania, zapewniając ich zgodność z wymaganiami organizacji.",
                    "en" => "Optimizing the operation of management systems, ensuring compliance with organizational requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23421,
                "name" => json_encode([
                    "pl" => "Monitorowanie działania zintegrowanych systemów zarządzania, w tym analizowanie wyników i raportowanie.",
                    "en" => "Monitoring the operation of integrated management systems, including analyzing results and reporting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23422,
                "name" => json_encode([
                    "pl" => "Zarządzanie dostępem użytkowników do systemów zintegrowanych i monitorowanie bezpieczeństwa systemów.",
                    "en" => "Managing user access to integrated systems and monitoring system security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23423,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych funkcji i aktualizacji w systemach zintegrowanych.",
                    "en" => "Implementing new features and updates in integrated systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23424,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w celu dostosowania zintegrowanych systemów do potrzeb organizacyjnych.",
                    "en" => "Collaborating with other departments to tailor integrated systems to organizational needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ADMINISTRATORZY_SYSTEMÓW_KOMPUTEROWYCH = [

            [
                "id" => 23425,
                "name" => json_encode([
                    "pl" => "Zarządzanie systemami komputerowymi, w tym instalacja, konfiguracja, konserwacja i aktualizacja oprogramowania oraz sprzętu.",
                    "en" => "Managing computer systems, including installation, configuration, maintenance, and updating software and hardware."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23426,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie diagnostyki i naprawy systemów komputerowych, zapewniając ich ciągłość działania.",
                    "en" => "Conducting diagnostics and repairs of computer systems, ensuring continuous operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23427,
                "name" => json_encode([
                    "pl" => "Monitorowanie wydajności systemów komputerowych i rozwiązywanie problemów technicznych.",
                    "en" => "Monitoring system performance and resolving technical issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23428,
                "name" => json_encode([
                    "pl" => "Zarządzanie zabezpieczeniami systemów komputerowych, w tym implementacja rozwiązań związanych z ochroną danych.",
                    "en" => "Managing the security of computer systems, including implementing data protection solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23429,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami projektowymi i innymi działami w celu rozwiązywania problemów technicznych.",
                    "en" => "Collaborating with project teams and other departments to solve technical issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23430,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji systemów komputerowych, w tym raportowanie wyników diagnostyki i napraw.",
                    "en" => "Maintaining documentation for computer systems, including reporting diagnostic results and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ANALITYK_SIECI_COMPUTEROWYCH = [

            [
                "id" => 23431,
                "name" => json_encode([
                    "pl" => "Analiza i projektowanie architektury sieci komputerowych, w tym optymalizacja wydajności i bezpieczeństwa sieci.",
                    "en" => "Analyzing and designing computer network architectures, including optimizing network performance and security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23432,
                "name" => json_encode([
                    "pl" => "Monitorowanie i diagnozowanie problemów z sieciami komputerowymi, w tym zapewnianie ich prawidłowego działania.",
                    "en" => "Monitoring and diagnosing issues with computer networks, ensuring their proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23433,
                "name" => json_encode([
                    "pl" => "Zarządzanie ruchem sieciowym i przeprowadzanie testów w celu zapewnienia wydajności i niezawodności sieci.",
                    "en" => "Managing network traffic and conducting tests to ensure network performance and reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23434,
                "name" => json_encode([
                    "pl" => "Wdrażanie zabezpieczeń sieciowych, takich jak firewalle, VPN, systemy detekcji włamań.",
                    "en" => "Implementing network security measures such as firewalls, VPNs, intrusion detection systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23435,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie polityk zarządzania siecią, w tym strategii optymalizacji i zabezpieczeń.",
                    "en" => "Developing and implementing network management policies, including optimization and security strategies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23436,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji sieci komputerowych oraz raportowanie wyników monitoringu sieci.",
                    "en" => "Maintaining network documentation and reporting the results of network monitoring."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_SYSTEMÓW_I_SIECI_COMPUTEROWYCH = [

            [
                "id" => 23437,
                "name" => json_encode([
                    "pl" => "Projektowanie, wdrażanie i zarządzanie systemami komputerowymi i sieciami, w tym urządzeniami sieciowymi, serwerami i oprogramowaniem.",
                    "en" => "Designing, implementing, and managing computer systems and networks, including networking devices, servers, and software."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23438,
                "name" => json_encode([
                    "pl" => "Analiza, projektowanie i wdrażanie systemów sieciowych w organizacji, w tym zarządzanie infrastrukturą i zapewnienie bezpieczeństwa.",
                    "en" => "Analyzing, designing, and implementing network systems in an organization, including managing infrastructure and ensuring security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23439,
                "name" => json_encode([
                    "pl" => "Optymalizacja wydajności sieci komputerowych, przeprowadzanie testów oraz rozwiązywanie problemów z sieciami.",
                    "en" => "Optimizing the performance of computer networks, conducting tests, and troubleshooting network issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23440,
                "name" => json_encode([
                    "pl" => "Zarządzanie konfiguracjami systemów komputerowych i sieciowych, w tym instalacja, konfiguracja i monitorowanie.",
                    "en" => "Managing configurations of computer and network systems, including installation, configuration, and monitoring."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23441,
                "name" => json_encode([
                    "pl" => "Wdrażanie polityk bezpieczeństwa sieciowego i zarządzanie dostępem do systemów i danych.",
                    "en" => "Implementing network security policies and managing access to systems and data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23442,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej systemów i sieci komputerowych oraz raportowanie wyników działań.",
                    "en" => "Maintaining technical documentation for computer systems and networks and reporting on activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_SPECJALIŚCI_DO_SPRAW_SIECI_COMPUTEROWYCH = [

            [
                "id" => 23443,
                "name" => json_encode([
                    "pl" => "Projektowanie, wdrażanie i zarządzanie sieciami komputerowymi, w tym sieciami LAN, WAN oraz rozwiązań chmurowych.",
                    "en" => "Designing, implementing, and managing computer networks, including LAN, WAN, and cloud solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23444,
                "name" => json_encode([
                    "pl" => "Monitorowanie, diagnozowanie oraz naprawa usterek w sieciach komputerowych, w tym urządzeń sieciowych i serwerów.",
                    "en" => "Monitoring, diagnosing, and repairing faults in computer networks, including network devices and servers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23445,
                "name" => json_encode([
                    "pl" => "Zarządzanie bezpieczeństwem sieciowym, w tym konfiguracja zapór sieciowych, VPN, systemów IDS i IPS.",
                    "en" => "Managing network security, including configuring firewalls, VPNs, IDS, and IPS systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23446,
                "name" => json_encode([
                    "pl" => "Optymalizacja sieci komputerowych w celu zwiększenia wydajności, szybkości transmisji i niezawodności.",
                    "en" => "Optimizing computer networks to improve performance, transmission speed, and reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23447,
                "name" => json_encode([
                    "pl" => "Testowanie i monitorowanie systemów sieciowych oraz przygotowywanie raportów dotyczących ich wydajności.",
                    "en" => "Testing and monitoring network systems and preparing reports on their performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23448,
                "name" => json_encode([
                    "pl" => "Wdrażanie technologii 5G, Wi-Fi 6 i rozwiązań IoT w sieciach komputerowych.",
                    "en" => "Implementing 5G, Wi-Fi 6, and IoT solutions in computer networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_BEZPIECZEŃSTWA_OPROGRAMOWANIA = [

            [
                "id" => 23449,
                "name" => json_encode([
                    "pl" => "Zarządzanie bezpieczeństwem aplikacji i systemów oprogramowania, w tym analiza ryzyka i implementacja zabezpieczeń.",
                    "en" => "Managing the security of applications and software systems, including risk analysis and implementing security measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23450,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów bezpieczeństwa oprogramowania, wykrywanie podatności i wprowadzanie poprawek.",
                    "en" => "Conducting security audits of software, detecting vulnerabilities, and implementing fixes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23451,
                "name" => json_encode([
                    "pl" => "Projektowanie i wdrażanie strategii ochrony danych w aplikacjach i systemach oprogramowania.",
                    "en" => "Designing and implementing data protection strategies in applications and software systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23452,
                "name" => json_encode([
                    "pl" => "Monitorowanie zagrożeń bezpieczeństwa oprogramowania i reagowanie na incydenty związane z cyberatakami.",
                    "en" => "Monitoring software security threats and responding to incidents related to cyberattacks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23453,
                "name" => json_encode([
                    "pl" => "Szkolenie zespołów programistycznych i innych pracowników w zakresie bezpiecznego kodowania i praktyk bezpieczeństwa.",
                    "en" => "Training development teams and other staff on secure coding and security best practices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23454,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami technicznymi w celu implementacji i utrzymania systemów ochrony oprogramowania.",
                    "en" => "Collaborating with technical teams to implement and maintain software protection systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_SPECJALIŚCI_DO_SPRAW_BAZ_DANYCH_I_SIECI_COMPUTEROWYCH_GDZIE_INDIENIEJ_NIESKLASYFIKOWANI = [

            [
                "id" => 23455,
                "name" => json_encode([
                    "pl" => "Projektowanie, rozwijanie i utrzymywanie baz danych oraz zarządzanie wydajnością i bezpieczeństwem tych systemów.",
                    "en" => "Designing, developing, and maintaining databases, and managing their performance and security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23456,
                "name" => json_encode([
                    "pl" => "Zarządzanie sieciami komputerowymi i bazami danych, w tym optymalizacja struktury baz danych oraz konfiguracja systemów bazodanowych.",
                    "en" => "Managing computer networks and databases, including optimizing database structures and configuring database systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23457,
                "name" => json_encode([
                    "pl" => "Testowanie, monitorowanie i diagnozowanie problemów związanych z bazami danych oraz sieciami komputerowymi.",
                    "en" => "Testing, monitoring, and diagnosing issues related to databases and computer networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23458,
                "name" => json_encode([
                    "pl" => "Wdrażanie rozwiązań do zarządzania danymi, zapewniających integrację baz danych z sieciami komputerowymi i aplikacjami.",
                    "en" => "Implementing data management solutions that ensure the integration of databases with computer networks and applications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23459,
                "name" => json_encode([
                    "pl" => "Zarządzanie bezpieczeństwem baz danych, w tym przechowywanie, archiwizacja i odzyskiwanie danych w razie awarii.",
                    "en" => "Managing database security, including storage, archiving, and data recovery in case of failure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23460,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi zespołami technicznymi i projektowymi w zakresie integracji baz danych i systemów informatycznych.",
                    "en" => "Collaborating with other technical and project teams to integrate databases and information systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_SYSTEMÓW_ZARZĄDZANIA_BEZPIECZEŃSTWEM_INFORMACJI = [

            [
                "id" => 23461,
                "name" => json_encode([
                    "pl" => "Projektowanie, wdrażanie i monitorowanie systemów zarządzania bezpieczeństwem informacji, w tym polityk bezpieczeństwa i procedur ochrony danych.",
                    "en" => "Designing, implementing, and monitoring information security management systems, including security policies and data protection procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23462,
                "name" => json_encode([
                    "pl" => "Analiza zagrożeń i ryzyka związanego z bezpieczeństwem informacji oraz wdrażanie rozwiązań minimalizujących ryzyko.",
                    "en" => "Analyzing threats and risks related to information security and implementing solutions to mitigate risks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23463,
                "name" => json_encode([
                    "pl" => "Zarządzanie incydentami bezpieczeństwa informacji, w tym monitorowanie, reagowanie i raportowanie incydentów związanych z danymi.",
                    "en" => "Managing information security incidents, including monitoring, responding, and reporting incidents related to data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23464,
                "name" => json_encode([
                    "pl" => "Wdrażanie narzędzi i systemów do monitorowania i oceny poziomu bezpieczeństwa informacji.",
                    "en" => "Implementing tools and systems to monitor and assess information security levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23465,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów bezpieczeństwa informacji oraz ocen ryzyka w organizacji.",
                    "en" => "Conducting information security audits and risk assessments within the organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23466,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników z zakresu polityk bezpieczeństwa informacji oraz najlepszych praktyk w zarządzaniu danymi.",
                    "en" => "Training employees on information security policies and best practices for data management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_INFORMATYKI_ŚLEDCZEJ = [

            [
                "id" => 23467,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz cyfrowych dowodów w celu identyfikacji i dokumentowania incydentów związanych z bezpieczeństwem informacji.",
                    "en" => "Conducting digital evidence analysis to identify and document incidents related to information security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23468,
                "name" => json_encode([
                    "pl" => "Zbieranie, przechowywanie i analiza danych cyfrowych w celu wspierania dochodzeń prawnych i rozwiązywania przypadków cyberprzestępczości.",
                    "en" => "Collecting, preserving, and analyzing digital data to support legal investigations and resolve cybercrime cases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23469,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem odzyskiwania danych z urządzeń elektronicznych w celach dowodowych.",
                    "en" => "Managing the process of recovering data from electronic devices for evidentiary purposes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23470,
                "name" => json_encode([
                    "pl" => "Analiza logów systemów komputerowych i sieciowych w celu wykrycia nieautoryzowanego dostępu i naruszeń bezpieczeństwa.",
                    "en" => "Analyzing system and network logs to detect unauthorized access and security breaches."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23471,
                "name" => json_encode([
                    "pl" => "Współpraca z organami ścigania i służbami prawnymi w zakresie analiz cyfrowych w ściganiu przestępstw komputerowych.",
                    "en" => "Collaborating with law enforcement agencies and legal authorities on digital analysis in the prosecution of computer crimes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23472,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie śledztw w zakresie bezpieczeństwa informacji oraz raportowanie wyników dochodzeń.",
                    "en" => "Conducting investigations into information security and reporting the findings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_SIECI_COMPUTEROWYCH = [

            [
                "id" => 23473,
                "name" => json_encode([
                    "pl" => "Zarządzanie codzienną pracą sieci komputerowych, monitorowanie wydajności i diagnozowanie problemów z siecią.",
                    "en" => "Managing the daily operations of computer networks, monitoring performance, and diagnosing network issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23474,
                "name" => json_encode([
                    "pl" => "Konfiguracja, instalacja i utrzymanie urządzeń sieciowych, takich jak routery, przełączniki, modemy, oraz zapewnienie ich ciągłej pracy.",
                    "en" => "Configuring, installing, and maintaining network devices such as routers, switches, modems, and ensuring their continuous operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23475,
                "name" => json_encode([
                    "pl" => "Monitorowanie bezpieczeństwa sieci komputerowych, identyfikowanie i reagowanie na zagrożenia oraz ataki.",
                    "en" => "Monitoring the security of computer networks, identifying and responding to threats and attacks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23476,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami IT w zakresie optymalizacji i rozwoju infrastruktury sieciowej.",
                    "en" => "Collaborating with IT teams to optimize and develop network infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23477,
                "name" => json_encode([
                    "pl" => "Testowanie sieci komputerowych w celu wykrycia ewentualnych błędów i ich naprawa.",
                    "en" => "Testing computer networks to detect potential errors and fixing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23478,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji sieci komputerowej, raportowanie wyników monitoringu i napraw.",
                    "en" => "Maintaining network documentation, reporting the results of monitoring and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_SPRZĘTU_COMPUTEROWEGO = [

            [
                "id" => 23479,
                "name" => json_encode([
                    "pl" => "Obsługa, konfiguracja i utrzymanie sprzętu komputerowego, w tym komputerów stacjonarnych, laptopów i urządzeń peryferyjnych.",
                    "en" => "Operating, configuring, and maintaining computer hardware, including desktop computers, laptops, and peripheral devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23480,
                "name" => json_encode([
                    "pl" => "Instalacja i aktualizacja oprogramowania na komputerach, zarządzanie zasobami komputerowymi i urządzeniami sieciowymi.",
                    "en" => "Installing and updating software on computers, managing computer resources and network devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23481,
                "name" => json_encode([
                    "pl" => "Testowanie sprzętu komputerowego pod kątem awarii i naprawianie uszkodzonych komponentów.",
                    "en" => "Testing computer hardware for failures and repairing damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23482,
                "name" => json_encode([
                    "pl" => "Monitorowanie wydajności sprzętu komputerowego i podejmowanie działań w celu optymalizacji jego pracy.",
                    "en" => "Monitoring the performance of computer hardware and taking actions to optimize its operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23483,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej sprzętu komputerowego oraz raportowanie stanu technicznego urządzeń.",
                    "en" => "Maintaining technical documentation of computer hardware and reporting on the condition of devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23484,
                "name" => json_encode([
                    "pl" => "Szkolenie użytkowników z zakresu obsługi sprzętu komputerowego oraz oprogramowania.",
                    "en" => "Training users on the operation of computer hardware and software."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_SYSTEMÓW_COMPUTEROWYCH = [

            [
                "id" => 23485,
                "name" => json_encode([
                    "pl" => "Obsługa systemów komputerowych, w tym instalacja, konfiguracja i zarządzanie systemami operacyjnymi i aplikacjami.",
                    "en" => "Operating computer systems, including installation, configuration, and management of operating systems and applications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23486,
                "name" => json_encode([
                    "pl" => "Monitorowanie wydajności systemów komputerowych oraz zarządzanie zasobami komputerowymi.",
                    "en" => "Monitoring the performance of computer systems and managing computer resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23487,
                "name" => json_encode([
                    "pl" => "Diagnozowanie problemów systemowych i naprawianie awarii w systemach komputerowych.",
                    "en" => "Diagnosing system issues and fixing failures in computer systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23488,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych wersji oprogramowania i systemów operacyjnych oraz zarządzanie ich aktualizacjami.",
                    "en" => "Implementing new software versions and operating systems, and managing their updates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23489,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów wydajnościowych systemów komputerowych i aplikacji.",
                    "en" => "Conducting performance tests on computer systems and applications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23490,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji systemowej, w tym raportowanie wyników testów, wdrożeń i napraw.",
                    "en" => "Maintaining system documentation, including reporting the results of tests, deployments, and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_SIECI_I_SYSTEMÓW_COMPUTEROWYCH = [

            [
                "id" => 23491,
                "name" => json_encode([
                    "pl" => "Zarządzanie systemami komputerowymi i sieciowymi w organizacji, zapewniając ich prawidłowe funkcjonowanie.",
                    "en" => "Managing computer and network systems within the organization, ensuring their proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23492,
                "name" => json_encode([
                    "pl" => "Instalacja, konfiguracja i utrzymanie systemów komputerowych i sieciowych, zapewniając ich bezpieczeństwo i dostępność.",
                    "en" => "Installing, configuring, and maintaining computer and network systems, ensuring their security and availability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23493,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu systemów komputerowych i sieciowych, identyfikowanie potencjalnych problemów i podejmowanie działań naprawczych.",
                    "en" => "Monitoring the status of computer and network systems, identifying potential problems, and taking corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23494,
                "name" => json_encode([
                    "pl" => "Zarządzanie i administrowanie usługami i aplikacjami w systemach komputerowych, zapewniając ich wysoką dostępność.",
                    "en" => "Managing and administering services and applications in computer systems, ensuring high availability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23495,
                "name" => json_encode([
                    "pl" => "Testowanie systemów komputerowych i sieciowych, monitorowanie ich efektywności i dostosowywanie parametrów w celu optymalizacji wydajności.",
                    "en" => "Testing computer and network systems, monitoring their efficiency, and adjusting parameters to optimize performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23496,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami IT w zakresie rozwoju i wdrażania nowych technologii komputerowych i sieciowych.",
                    "en" => "Collaborating with IT teams to develop and implement new computer and network technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ARCHITEKT_STRON_INTERNETOWYCH = [

            [
                "id" => 23497,
                "name" => json_encode([
                    "pl" => "Projektowanie i rozwój architektury stron internetowych, zapewniając ich optymalność, skalowalność i wydajność.",
                    "en" => "Designing and developing the architecture of websites, ensuring their optimization, scalability, and performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23498,
                "name" => json_encode([
                    "pl" => "Zarządzanie strukturą danych, bazami danych i integracją zewnętrznych aplikacji w ramach stron internetowych.",
                    "en" => "Managing data structures, databases, and integration of external applications within websites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23499,
                "name" => json_encode([
                    "pl" => "Optymalizacja stron internetowych pod kątem szybkości ładowania, dostępności i doświadczenia użytkownika.",
                    "en" => "Optimizing websites for loading speed, accessibility, and user experience."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23500,
                "name" => json_encode([
                    "pl" => "Wdrażanie najlepszych praktyk bezpieczeństwa i zarządzania danymi w kontekście stron internetowych.",
                    "en" => "Implementing best practices for security and data management in the context of websites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23501,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami deweloperskimi i projektowymi w celu zapewnienia zgodności stron internetowych z wymaganiami biznesowymi.",
                    "en" => "Collaborating with development and design teams to ensure websites meet business requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23502,
                "name" => json_encode([
                    "pl" => "Zarządzanie cyklem życia stron internetowych, w tym planowanie, wdrażanie i monitorowanie ich funkcjonowania.",
                    "en" => "Managing the lifecycle of websites, including planning, implementing, and monitoring their operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROJEKTANT_APLIKACJI_MULTIMEDIALNYCH_ANIMACJI_I_GIER_COMPUTEROWYCH = [

            [
                "id" => 23503,
                "name" => json_encode([
                    "pl" => "Projektowanie i rozwój aplikacji multimedialnych, animacji oraz gier komputerowych, zapewniając ich interaktywność i atrakcyjność wizualną.",
                    "en" => "Designing and developing multimedia applications, animations, and video games, ensuring their interactivity and visual appeal."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23504,
                "name" => json_encode([
                    "pl" => "Praca nad animacjami komputerowymi, tworzenie postaci, tła, animacji postaci i elementów interfejsu użytkownika.",
                    "en" => "Working on computer animations, creating characters, backgrounds, character animations, and user interface elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23505,
                "name" => json_encode([
                    "pl" => "Opracowywanie gier komputerowych od podstaw, w tym projektowanie mechaniki gry, fabuły i rozwoju postaci.",
                    "en" => "Developing computer games from scratch, including designing game mechanics, storylines, and character development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23506,
                "name" => json_encode([
                    "pl" => "Integracja multimediów z aplikacjami i platformami, zapewniając ich płynne działanie i kompatybilność.",
                    "en" => "Integrating multimedia with applications and platforms, ensuring smooth operation and compatibility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23507,
                "name" => json_encode([
                    "pl" => "Optymalizacja aplikacji multimedialnych i gier komputerowych pod kątem wydajności i jakości.",
                    "en" => "Optimizing multimedia applications and video games for performance and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23508,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi projektantami, programistami i artystami w celu tworzenia kompleksowych doświadczeń multimedialnych.",
                    "en" => "Collaborating with other designers, developers, and artists to create comprehensive multimedia experiences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_ROZWOJU_STRON_INTERNETOWYCH = [

            [
                "id" => 23509,
                "name" => json_encode([
                    "pl" => "Rozwój i wdrażanie nowych funkcji na stronach internetowych, w tym zarządzanie treścią i optymalizacja procesów.",
                    "en" => "Developing and implementing new features on websites, including content management and process optimization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23510,
                "name" => json_encode([
                    "pl" => "Optymalizacja stron internetowych pod kątem szybkości ładowania, responsywności i SEO.",
                    "en" => "Optimizing websites for loading speed, responsiveness, and SEO."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23511,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem aktualizacji stron internetowych, implementowanie poprawek oraz nowych funkcjonalności.",
                    "en" => "Managing the process of website updates, implementing fixes and new functionalities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23512,
                "name" => json_encode([
                    "pl" => "Integracja różnych systemów zewnętrznych z platformami internetowymi.",
                    "en" => "Integrating various external systems with web platforms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23513,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz efektywności stron internetowych i rekomendowanie zmian.",
                    "en" => "Conducting analysis on website effectiveness and recommending changes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23514,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami projektowymi i deweloperskimi w zakresie wdrażania nowych funkcji stron internetowych.",
                    "en" => "Collaborating with project and development teams in implementing new website features."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_PROJEKTANCI_APLIKACJI_SIECIOWYCH_I_MULTIMEDIÓW = [

            [
                "id" => 23515,
                "name" => json_encode([
                    "pl" => "Projektowanie aplikacji internetowych i multimedialnych, w tym tworzenie interfejsów użytkownika i systemów interaktywnych.",
                    "en" => "Designing web and multimedia applications, including creating user interfaces and interactive systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23516,
                "name" => json_encode([
                    "pl" => "Tworzenie aplikacji sieciowych z wykorzystaniem technologii frontendowych i backendowych.",
                    "en" => "Developing web applications using frontend and backend technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23517,
                "name" => json_encode([
                    "pl" => "Integracja multimediów z aplikacjami sieciowymi, tworzenie rozwiązań do strumieniowania wideo, dźwięku i interakcji w czasie rzeczywistym.",
                    "en" => "Integrating multimedia with web applications, creating solutions for streaming video, audio, and real-time interaction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23518,
                "name" => json_encode([
                    "pl" => "Optymalizacja aplikacji webowych pod kątem szybkości ładowania, UX i SEO.",
                    "en" => "Optimizing web applications for loading speed, UX, and SEO."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23519,
                "name" => json_encode([
                    "pl" => "Projektowanie gier komputerowych, w tym grafiki, mechaniki gry i interakcji.",
                    "en" => "Designing video games, including graphics, game mechanics, and interactions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23520,
                "name" => json_encode([
                    "pl" => "Tworzenie multimedialnych interfejsów użytkownika i aplikacji internetowych, zapewniając zgodność z nowoczesnymi standardami.",
                    "en" => "Creating multimedia user interfaces and web applications, ensuring compliance with modern standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROGRAMISTA_APLIKACJI = [

            [
                "id" => 23521,
                "name" => json_encode([
                    "pl" => "Tworzenie aplikacji komputerowych na różne platformy, w tym oprogramowania desktopowego, webowego i aplikacji mobilnych.",
                    "en" => "Developing computer applications for various platforms, including desktop software, web applications, and mobile apps."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23522,
                "name" => json_encode([
                    "pl" => "Projektowanie architektury aplikacji oraz kodowanie jej poszczególnych komponentów i funkcji.",
                    "en" => "Designing application architecture and coding its individual components and functions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23523,
                "name" => json_encode([
                    "pl" => "Testowanie aplikacji pod kątem błędów oraz zapewnienie ich wysokiej jakości i niezawodności.",
                    "en" => "Testing applications for bugs and ensuring their high quality and reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23524,
                "name" => json_encode([
                    "pl" => "Optymalizacja aplikacji w celu zapewnienia płynności działania i wysokiej wydajności.",
                    "en" => "Optimizing applications to ensure smooth operation and high performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23525,
                "name" => json_encode([
                    "pl" => "Praca z bazami danych w celu zapewnienia ich integracji z aplikacjami oraz zarządzanie danymi w systemie.",
                    "en" => "Working with databases to ensure their integration with applications and managing data in the system."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23526,
                "name" => json_encode([
                    "pl" => "Dokumentowanie kodu oraz utrzymywanie standardów programistycznych w zespole projektowym.",
                    "en" => "Documenting code and maintaining programming standards within the development team."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROGRAMISTA_APLIKACJI_MOBILNYCH = [

            [
                "id" => 23527,
                "name" => json_encode([
                    "pl" => "Tworzenie aplikacji mobilnych na platformy Android i iOS, zapewniając ich kompatybilność z urządzeniami mobilnymi.",
                    "en" => "Developing mobile applications for Android and iOS platforms, ensuring compatibility with mobile devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23528,
                "name" => json_encode([
                    "pl" => "Projektowanie interfejsów użytkownika w aplikacjach mobilnych, zapewniając intuicyjność i responsywność.",
                    "en" => "Designing user interfaces in mobile applications, ensuring intuitiveness and responsiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23529,
                "name" => json_encode([
                    "pl" => "Optymalizacja aplikacji mobilnych pod kątem wydajności i oszczędności energii.",
                    "en" => "Optimizing mobile applications for performance and energy efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23530,
                "name" => json_encode([
                    "pl" => "Zarządzanie bazami danych w aplikacjach mobilnych oraz integracja z chmurą.",
                    "en" => "Managing databases in mobile applications and integrating them with the cloud."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23531,
                "name" => json_encode([
                    "pl" => "Testowanie aplikacji mobilnych, wykrywanie błędów i ich naprawa.",
                    "en" => "Testing mobile applications, detecting bugs, and fixing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23532,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem wydania aplikacji mobilnej, w tym publikowanie aplikacji w sklepach z aplikacjami.",
                    "en" => "Managing the release process of mobile applications, including publishing apps in app stores."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_PROGRAMIŚCI_APLIKACJI = [

            [
                "id" => 23533,
                "name" => json_encode([
                    "pl" => "Projektowanie i rozwój aplikacji komputerowych i mobilnych, współpraca z zespołami projektowymi w celu stworzenia efektywnych rozwiązań.",
                    "en" => "Designing and developing computer and mobile applications, collaborating with design teams to create efficient solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23534,
                "name" => json_encode([
                    "pl" => "Testowanie i debugowanie aplikacji w celu wykrycia i naprawienia błędów.",
                    "en" => "Testing and debugging applications to detect and fix bugs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23535,
                "name" => json_encode([
                    "pl" => "Optymalizacja aplikacji w celu zapewnienia wydajności i użyteczności na różnych urządzeniach i platformach.",
                    "en" => "Optimizing applications to ensure performance and usability on different devices and platforms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23536,
                "name" => json_encode([
                    "pl" => "Opracowywanie dokumentacji technicznej aplikacji, w tym instrukcji użytkownika i raportów z testów.",
                    "en" => "Developing technical documentation for applications, including user manuals and test reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23537,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami deweloperskimi, analitykami i użytkownikami końcowymi w celu dostosowania aplikacji do potrzeb biznesowych.",
                    "en" => "Collaborating with development teams, analysts, and end-users to adapt applications to business needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23538,
                "name" => json_encode([
                    "pl" => "Zarządzanie cyklem życia aplikacji, w tym planowanie, tworzenie, wdrażanie i konserwacja.",
                    "en" => "Managing the application lifecycle, including planning, development, deployment, and maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROJEKTANT_INTERFEJSU_UŻYTKOWNIKA = [

            [
                "id" => 23539,
                "name" => json_encode([
                    "pl" => "Projektowanie intuicyjnych i użytecznych interfejsów użytkownika dla aplikacji webowych, mobilnych i desktopowych.",
                    "en" => "Designing intuitive and user-friendly user interfaces for web, mobile, and desktop applications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23540,
                "name" => json_encode([
                    "pl" => "Tworzenie prototypów interfejsów użytkownika oraz ich testowanie z użytkownikami w celu zebrania opinii.",
                    "en" => "Creating prototypes of user interfaces and testing them with users to gather feedback."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23541,
                "name" => json_encode([
                    "pl" => "Optymalizacja interfejsów użytkownika pod kątem wydajności i doświadczenia użytkownika (UX).",
                    "en" => "Optimizing user interfaces for performance and user experience (UX)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23542,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami deweloperskimi i projektowymi, aby zapewnić spójność interfejsów z wymaganiami aplikacji.",
                    "en" => "Collaborating with development and design teams to ensure interface consistency with application requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23543,
                "name" => json_encode([
                    "pl" => "Tworzenie interaktywnych elementów interfejsu, takich jak formularze, przyciski, menu i nawigacja.",
                    "en" => "Creating interactive interface elements such as forms, buttons, menus, and navigation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23544,
                "name" => json_encode([
                    "pl" => "Wykorzystanie narzędzi projektowych do tworzenia estetycznych i funkcjonalnych interfejsów użytkownika.",
                    "en" => "Using design tools to create aesthetically pleasing and functional user interfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_JAKOŚCI_OPROGRAMOWANIA = [

            [
                "id" => 23545,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem zapewnienia jakości oprogramowania, w tym tworzenie planów testowych i monitorowanie wyników testów.",
                    "en" => "Managing the software quality assurance process, including creating test plans and monitoring test results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23546,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów jednostkowych, integracyjnych i systemowych w celu wykrywania błędów w oprogramowaniu.",
                    "en" => "Performing unit, integration, and system tests to detect bugs in software."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23547,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie strategii testowania oprogramowania, zapewniając zgodność z wymaganiami funkcjonalnymi i niefunkcjonalnymi.",
                    "en" => "Developing and implementing software testing strategies, ensuring compliance with functional and non-functional requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23548,
                "name" => json_encode([
                    "pl" => "Analiza wyników testów oraz rekomendowanie poprawek i usprawnień w oprogramowaniu.",
                    "en" => "Analyzing test results and recommending fixes and improvements in software."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23549,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami deweloperskimi w celu usuwania wykrytych błędów i optymalizacji kodu.",
                    "en" => "Collaborating with development teams to remove detected bugs and optimize code."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23550,
                "name" => json_encode([
                    "pl" => "Zapewnienie jakości procesów programistycznych oraz implementacja najlepszych praktyk w testowaniu oprogramowania.",
                    "en" => "Ensuring the quality of development processes and implementing best practices in software testing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ADMINISTRATOR_BAZ_DANYCH = [

            [
                "id" => 23551,
                "name" => json_encode([
                    "pl" => "Zarządzanie bazami danych, w tym ich instalacja, konfiguracja, monitorowanie i konserwacja.",
                    "en" => "Managing databases, including their installation, configuration, monitoring, and maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23552,
                "name" => json_encode([
                    "pl" => "Optymalizacja wydajności baz danych oraz zapewnienie ich bezpieczeństwa i integralności.",
                    "en" => "Optimizing database performance and ensuring their security and integrity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23553,
                "name" => json_encode([
                    "pl" => "Tworzenie i zarządzanie kopią zapasową danych oraz procesem ich odzyskiwania.",
                    "en" => "Creating and managing data backups and the process of data recovery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23554,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów związanych z bazami danych i aplikacjami bazodanowymi.",
                    "en" => "Troubleshooting database issues and database-driven applications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23555,
                "name" => json_encode([
                    "pl" => "Monitorowanie bazy danych w celu wykrywania problemów wydajnościowych oraz ich optymalizacji.",
                    "en" => "Monitoring the database for performance issues and optimizing it."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23556,
                "name" => json_encode([
                    "pl" => "Zarządzanie dostępem do bazy danych, w tym tworzenie i kontrolowanie uprawnień użytkowników.",
                    "en" => "Managing access to the database, including creating and controlling user permissions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ANALITYK_BAZ_DANYCH = [

            [
                "id" => 23557,
                "name" => json_encode([
                    "pl" => "Analiza danych z baz danych w celu wydobywania wartościowych informacji i wspierania decyzji biznesowych.",
                    "en" => "Analyzing data from databases to extract valuable insights and support business decisions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23558,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie zaawansowanych technik analizy danych, w tym uczenia maszynowego i sztucznej inteligencji, do przewidywania trendów.",
                    "en" => "Using advanced data analysis techniques, including machine learning and artificial intelligence, to predict trends."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23559,
                "name" => json_encode([
                    "pl" => "Przygotowanie i przetwarzanie danych z różnych źródeł oraz ich integracja z systemami analitycznymi.",
                    "en" => "Preparing and processing data from various sources and integrating it with analytical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23560,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów, wizualizacji i prezentacji wyników analizy danych dla interesariuszy.",
                    "en" => "Creating reports, visualizations, and presentations of data analysis results for stakeholders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23561,
                "name" => json_encode([
                    "pl" => "Zarządzanie dużymi zbiorami danych i zapewnienie ich jakości oraz spójności.",
                    "en" => "Managing large datasets and ensuring their quality and consistency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23562,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz statystycznych oraz przygotowywanie modeli predykcyjnych opartych na danych.",
                    "en" => "Conducting statistical analysis and preparing predictive models based on data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROJEKTANT_BAZ_DANYCH = [

            [
                "id" => 23563,
                "name" => json_encode([
                    "pl" => "Projektowanie i tworzenie struktur baz danych oraz zarządzanie danymi w celu optymalizacji wydajności.",
                    "en" => "Designing and creating database structures and managing data to optimize performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23564,
                "name" => json_encode([
                    "pl" => "Tworzenie i wdrażanie procedur bazodanowych, indeksów oraz zapytań w celu zapewnienia szybkie i efektywne przetwarzanie danych.",
                    "en" => "Creating and implementing database procedures, indexes, and queries to ensure fast and efficient data processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23565,
                "name" => json_encode([
                    "pl" => "Optymalizacja zapytań bazodanowych, indeksów i struktury tabel w celu poprawy wydajności bazy danych.",
                    "en" => "Optimizing database queries, indexes, and table structures to improve database performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23566,
                "name" => json_encode([
                    "pl" => "Projektowanie systemów bazodanowych zgodnie z wymaganiami projektowymi, biorąc pod uwagę skalowalność, bezpieczeństwo i integralność danych.",
                    "en" => "Designing database systems according to project requirements, considering scalability, security, and data integrity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23567,
                "name" => json_encode([
                    "pl" => "Zarządzanie i dokumentowanie struktur baz danych, zapewniając spójność i bezpieczeństwo danych.",
                    "en" => "Managing and documenting database structures, ensuring consistency and data security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23568,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami IT w celu integracji baz danych z innymi systemami w organizacji.",
                    "en" => "Collaborating with IT teams to integrate databases with other systems within the organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_PROJEKTANCI_I_ADMINISTRATORZY_BAZ_DANYCH = [

            [
                "id" => 23569,
                "name" => json_encode([
                    "pl" => "Projektowanie, administracja i utrzymywanie baz danych oraz ich integracja z aplikacjami i systemami w organizacji.",
                    "en" => "Designing, administering, and maintaining databases and integrating them with applications and systems within the organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23570,
                "name" => json_encode([
                    "pl" => "Zarządzanie danymi, w tym zapewnianie ich dostępności, integralności i bezpieczeństwa.",
                    "en" => "Managing data, ensuring its availability, integrity, and security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23571,
                "name" => json_encode([
                    "pl" => "Optymalizacja baz danych pod kątem wydajności, dostępności i obsługi dużych zbiorów danych.",
                    "en" => "Optimizing databases for performance, availability, and handling large datasets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23572,
                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia technicznego w zakresie baz danych oraz rozwiązywanie problemów związanych z danymi.",
                    "en" => "Providing technical support for databases and troubleshooting data-related issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23573,
                "name" => json_encode([
                    "pl" => "Monitorowanie i raportowanie wydajności baz danych oraz rekomendowanie usprawnień.",
                    "en" => "Monitoring and reporting on database performance and recommending improvements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23574,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami projektowymi w celu zarządzania danymi i utrzymywania zgodności z wymaganiami prawnymi i organizacyjnymi.",
                    "en" => "Collaborating with project teams to manage data and maintain compliance with legal and organizational requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_DOSKONALENIA_I_ROZWOJU_APLIKACJI = [

            [
                "id" => 23575,
                "name" => json_encode([
                    "pl" => "Analiza obecnych aplikacji, identyfikacja obszarów do poprawy i wdrażanie innowacyjnych rozwiązań w celu optymalizacji funkcji aplikacji.",
                    "en" => "Analyzing current applications, identifying areas for improvement, and implementing innovative solutions to optimize app functions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23576,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie poprawek i nowych funkcji w aplikacjach, aby poprawić ich wydajność i zadowolenie użytkowników.",
                    "en" => "Developing and implementing patches and new features in applications to improve performance and user satisfaction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23577,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz wydajności aplikacji oraz proponowanie optymalizacji kodu i infrastruktury.",
                    "en" => "Conducting performance analyses of applications and suggesting code and infrastructure optimizations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23578,
                "name" => json_encode([
                    "pl" => "Testowanie nowych funkcji aplikacji oraz zapewnienie ich zgodności z wymaganiami funkcjonalnymi i niefunkcjonalnymi.",
                    "en" => "Testing new application features and ensuring they meet functional and non-functional requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23579,
                "name" => json_encode([
                    "pl" => "Zarządzanie cyklem życia aplikacji od fazy rozwoju po wdrożenie, monitorowanie i aktualizacje.",
                    "en" => "Managing the application lifecycle from development phase to deployment, monitoring, and updates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23580,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami projektowymi i deweloperskimi w celu wdrażania innowacyjnych metod doskonalenia aplikacji.",
                    "en" => "Collaborating with design and development teams to implement innovative methods for improving applications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALNOŚCI_UJMOWANE_W_ZAWODZIE_SPOZA_KZIS = [

            [
                "id" => 23581,
                "name" => json_encode([
                    "pl" => "Zarządzanie i koordynowanie procesów projektowych w obrębie różnorodnych branż technologicznych i inżynierskich.",
                    "en" => "Managing and coordinating project processes within various technological and engineering industries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23582,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie specjalistycznych narzędzi analitycznych w celu podejmowania decyzji operacyjnych i strategicznych.",
                    "en" => "Using specialized analytical tools for making operational and strategic decisions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23583,
                "name" => json_encode([
                    "pl" => "Dostosowywanie rozwiązań inżynierskich i technologicznych do potrzeb rynku oraz innowacyjnych trendów.",
                    "en" => "Adapting engineering and technological solutions to market needs and innovative trends."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23584,
                "name" => json_encode([
                    "pl" => "Kierowanie zespołami multidyscyplinarnymi w ramach projektów technologicznych i inżynierskich.",
                    "en" => "Leading multidisciplinary teams within technological and engineering projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23585,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szkoleń i wdrożeń w zakresie nowych technologii w danej specjalności zawodowej.",
                    "en" => "Conducting training and implementation of new technologies within a given professional specialty."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23586,
                "name" => json_encode([
                    "pl" => "Dostosowanie strategii i procesów organizacyjnych do standardów branżowych w różnych dziedzinach.",
                    "en" => "Adapting organizational strategies and processes to industry standards across various fields."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $USER_EXPERIENCE_DESIGNER = [

            [
                "id" => 23587,
                "name" => json_encode([
                    "pl" => "Projektowanie i optymalizacja doświadczeń użytkowników (UX) poprzez badania i testy użyteczności, zapewniając intuicyjność produktów cyfrowych.",
                    "en" => "Designing and optimizing user experiences (UX) through research and usability testing, ensuring intuitiveness of digital products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23588,
                "name" => json_encode([
                    "pl" => "Tworzenie prototypów i makiet interfejsów użytkownika, testowanie ich z użytkownikami i wdrażanie poprawek na podstawie zebranych opinii.",
                    "en" => "Creating prototypes and wireframes for user interfaces, testing them with users, and implementing improvements based on collected feedback."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23589,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami projektowymi i deweloperskimi w celu zapewnienia spójności i jakości doświadczenia użytkownika w aplikacjach i stronach internetowych.",
                    "en" => "Collaborating with design and development teams to ensure consistency and quality of user experience in applications and websites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23590,
                "name" => json_encode([
                    "pl" => "Analiza potrzeb użytkowników i ich zachowań za pomocą narzędzi analitycznych, tworzenie raportów i rekomendacji dla zespołu projektowego.",
                    "en" => "Analyzing user needs and behaviors using analytical tools, creating reports and recommendations for the design team."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23591,
                "name" => json_encode([
                    "pl" => "Projektowanie i wdrażanie interfejsów użytkownika w sposób, który zapewnia łatwość nawigacji oraz satysfakcję użytkowników.",
                    "en" => "Designing and implementing user interfaces in a way that ensures ease of navigation and user satisfaction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23592,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów projektowych UX w celu zwiększenia efektywności zespołów projektowych i jakości interfejsów użytkownika.",
                    "en" => "Optimizing UX design processes to increase team efficiency and quality of user interfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $CUSTOMER_SUCCESS = [

            [
                "id" => 23593,
                "name" => json_encode([
                    "pl" => "Zarządzanie relacjami z klientami w celu zapewnienia ich satysfakcji i sukcesu w korzystaniu z produktów lub usług.",
                    "en" => "Managing client relationships to ensure their satisfaction and success in using products or services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23594,
                "name" => json_encode([
                    "pl" => "Wspieranie klientów w procesie wdrażania produktów i usług, udzielanie szkoleń i wsparcia technicznego.",
                    "en" => "Supporting customers in the implementation process of products and services, providing training and technical support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23595,
                "name" => json_encode([
                    "pl" => "Monitorowanie satysfakcji klientów i wprowadzanie działań naprawczych w przypadku problemów lub niezadowolenia.",
                    "en" => "Monitoring customer satisfaction and taking corrective actions in case of issues or dissatisfaction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23596,
                "name" => json_encode([
                    "pl" => "Analizowanie potrzeb i oczekiwań klientów, proponowanie nowych rozwiązań i ulepszeń produktów lub usług.",
                    "en" => "Analyzing customer needs and expectations, suggesting new solutions and product or service improvements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23597,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami sprzedażowymi i produktowymi w celu optymalizacji procesów związanych z obsługą klienta.",
                    "en" => "Collaborating with sales and product teams to optimize processes related to customer service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23598,
                "name" => json_encode([
                    "pl" => "Zarządzanie programami lojalnościowymi i inicjatywami mającymi na celu poprawę retencji klientów.",
                    "en" => "Managing loyalty programs and initiatives aimed at improving customer retention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHWRITER = [

            [
                "id" => 23599,
                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej, w tym instrukcji obsługi, specyfikacji i podręczników użytkownika dla produktów technicznych.",
                    "en" => "Creating technical documentation, including user manuals, specifications, and guides for technical products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23600,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami inżynierskimi, programistycznymi i produktowymi w celu zbierania informacji potrzebnych do tworzenia dokumentacji.",
                    "en" => "Collaborating with engineering, development, and product teams to gather information needed for documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23601,
                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji systemów, procesów i procedur, zapewniając ich zgodność z wymaganiami użytkowników i branżowymi standardami.",
                    "en" => "Creating documentation for systems, processes, and procedures, ensuring compliance with user requirements and industry standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23602,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów i edycji dokumentacji technicznej w celu jej aktualizacji i poprawy jakości.",
                    "en" => "Conducting reviews and editing technical documentation to keep it up-to-date and improve quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23603,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem tworzenia dokumentacji technicznej, od zbierania wymagań po dostarczenie gotowych materiałów.",
                    "en" => "Managing the process of creating technical documentation, from gathering requirements to delivering finished materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23604,
                "name" => json_encode([
                    "pl" => "Tworzenie ilustracji i diagramów wspierających dokumentację techniczną oraz poprawiających zrozumienie dla użytkowników.",
                    "en" => "Creating illustrations and diagrams to support technical documentation and improve user understanding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SCRUM_MASTER = [

            [
                "id" => 23605,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem Scrum w organizacji, w tym prowadzenie spotkań Scrumowych oraz koordynowanie pracy zespołów.",
                    "en" => "Managing the Scrum process in the organization, including leading Scrum meetings and coordinating team work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23606,
                "name" => json_encode([
                    "pl" => "Facylitowanie komunikacji w zespole oraz zapewnienie, że Scrum jest przestrzegany zgodnie z zasadami.",
                    "en" => "Facilitating communication within the team and ensuring Scrum is followed according to the principles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23607,
                "name" => json_encode([
                    "pl" => "Usuwanie przeszkód i rozwiązywanie problemów, które mogą utrudniać postępy zespołu Scrumowego.",
                    "en" => "Removing obstacles and resolving issues that may hinder the Scrum team's progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23608,
                "name" => json_encode([
                    "pl" => "Współpraca z Product Ownerem w celu zarządzania backlogiem oraz planowania iteracji.",
                    "en" => "Collaborating with the Product Owner to manage the backlog and plan iterations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23609,
                "name" => json_encode([
                    "pl" => "Pomoc w rozwoju zespołu Scrumowego, zapewniając wsparcie w zakresie technik Agile i Scrum.",
                    "en" => "Helping the Scrum team develop by providing support in Agile and Scrum techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23610,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie retrospektyw i analiz wydajności zespołów w celu identyfikacji obszarów do poprawy.",
                    "en" => "Conducting retrospectives and performance analyses of teams to identify areas for improvement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_INFORMATYKI_PRZEMYSŁOWEJ = [

            [
                "id" => 23611,
                "name" => json_encode([
                    "pl" => "Projektowanie, wdrażanie i optymalizacja systemów informatycznych wykorzystywanych w procesach przemysłowych, zapewniając ich integrację z urządzeniami i maszynami.",
                    "en" => "Designing, implementing, and optimizing IT systems used in industrial processes, ensuring integration with equipment and machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23612,
                "name" => json_encode([
                    "pl" => "Zarządzanie i monitorowanie systemów przemysłowych, w tym systemów SCADA, MES i ERP, zapewniając ich niezawodność i ciągłość działania.",
                    "en" => "Managing and monitoring industrial systems, including SCADA, MES, and ERP systems, ensuring their reliability and continuity of operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23613,
                "name" => json_encode([
                    "pl" => "Analiza procesów przemysłowych i dostosowywanie systemów informatycznych do specyficznych potrzeb produkcyjnych.",
                    "en" => "Analyzing industrial processes and adjusting IT systems to meet specific production needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23614,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych przy wykorzystaniu rozwiązań informatycznych w celu zwiększenia wydajności i efektywności.",
                    "en" => "Optimizing production processes using IT solutions to increase productivity and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23615,
                "name" => json_encode([
                    "pl" => "Zarządzanie danymi z procesów przemysłowych, w tym analiza danych i raportowanie wyników operacyjnych.",
                    "en" => "Managing data from industrial processes, including data analysis and operational reporting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23616,
                "name" => json_encode([
                    "pl" => "Wdrażanie strategii cyberbezpieczeństwa w systemach informatycznych wykorzystywanych w przemyśle, zapewniając ochronę przed zagrożeniami.",
                    "en" => "Implementing cybersecurity strategies in IT systems used in industry, ensuring protection from threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_PROJEKTANCI_GRAFIKI_I_MULTIMEDIÓW = [

            [
                "id" => 23617,
                "name" => json_encode([
                    "pl" => "Tworzenie graficznych materiałów reklamowych, animacji oraz multimediów wspierających komunikację wizualną firmy.",
                    "en" => "Creating graphic materials, animations, and multimedia supporting the company's visual communication."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23618,
                "name" => json_encode([
                    "pl" => "Projektowanie i tworzenie elementów graficznych do stron internetowych, aplikacji mobilnych i interfejsów użytkownika.",
                    "en" => "Designing and creating graphical elements for websites, mobile applications, and user interfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23619,
                "name" => json_encode([
                    "pl" => "Produkcja animacji 2D i 3D, w tym tworzenie postaci, scenariuszy i efektów specjalnych.",
                    "en" => "Producing 2D and 3D animations, including character creation, scripts, and special effects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23620,
                "name" => json_encode([
                    "pl" => "Przygotowanie materiałów multimedialnych do wykorzystania w kampaniach marketingowych, na stronach internetowych i w aplikacjach mobilnych.",
                    "en" => "Preparing multimedia materials for use in marketing campaigns, websites, and mobile applications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23621,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami deweloperskimi, marketingowymi i projektowymi w celu tworzenia atrakcyjnych graficznie doświadczeń dla użytkowników.",
                    "en" => "Collaborating with development, marketing, and design teams to create visually appealing user experiences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23622,
                "name" => json_encode([
                    "pl" => "Projektowanie koncepcji wizualnych oraz brandingowych, w tym tworzenie logo, schematów kolorystycznych i innych elementów tożsamości wizualnej.",
                    "en" => "Designing visual and branding concepts, including creating logos, color schemes, and other visual identity elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONSERWATOR_SIECI_I_SYSTEMÓW_COMPUTEROWYCH = [

            [
                "id" => 23623,
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją systemów komputerowych, zapewniając ich ciągłą sprawność, bezpieczeństwo i optymalizację.",
                    "en" => "Managing the maintenance of computer systems, ensuring their continuous functionality, security, and optimization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23624,
                "name" => json_encode([
                    "pl" => "Monitorowanie, diagnozowanie i naprawianie usterek w systemach komputerowych oraz sieciach.",
                    "en" => "Monitoring, diagnosing, and repairing faults in computer systems and networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23625,
                "name" => json_encode([
                    "pl" => "Zarządzanie aktualizacjami systemów operacyjnych, aplikacji i oprogramowania zabezpieczającego.",
                    "en" => "Managing updates for operating systems, applications, and security software."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23626,
                "name" => json_encode([
                    "pl" => "Konserwacja sprzętu komputerowego, w tym naprawa, wymiana komponentów i optymalizacja wydajności.",
                    "en" => "Maintaining computer hardware, including repairs, component replacements, and performance optimization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23627,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów diagnostycznych i przechowywanie dokumentacji konserwacyjnej systemów komputerowych.",
                    "en" => "Conducting diagnostic tests and maintaining documentation of system maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23628,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami IT w zakresie planowania konserwacji i modernizacji systemów komputerowych.",
                    "en" => "Collaborating with IT teams in planning maintenance and upgrades for computer systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_ZINTEGROWANYCH_SYSTEMÓW_ZARZĄDZANIA_ZASOBAMI_FIRMY = [

            [
                "id" => 23629,
                "name" => json_encode([
                    "pl" => "Obsługa zintegrowanych systemów zarządzania zasobami firmy, w tym monitorowanie procesów produkcyjnych, zarządzanie zapasami i logistyka.",
                    "en" => "Operating integrated resource management systems for the company, including monitoring production processes, managing inventory, and logistics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23630,
                "name" => json_encode([
                    "pl" => "Konfiguracja i utrzymanie zintegrowanych systemów ERP, w tym wprowadzanie danych i zapewnianie ich spójności.",
                    "en" => "Configuring and maintaining integrated ERP systems, including data entry and ensuring consistency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23631,
                "name" => json_encode([
                    "pl" => "Monitorowanie wydajności systemu ERP, rozwiązywanie problemów i optymalizacja procesów biznesowych.",
                    "en" => "Monitoring the performance of the ERP system, troubleshooting, and optimizing business processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23632,
                "name" => json_encode([
                    "pl" => "Zarządzanie dostępem i bezpieczeństwem w systemach ERP, zapewniając ochronę danych firmowych.",
                    "en" => "Managing access and security in ERP systems, ensuring protection of company data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23633,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szkoleń i wsparcia technicznego dla pracowników korzystających z systemów ERP.",
                    "en" => "Providing training and technical support for employees using ERP systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23634,
                "name" => json_encode([
                    "pl" => "Przygotowanie raportów i analiz opartych na danych z systemów ERP w celu wspierania decyzji zarządu.",
                    "en" => "Preparing reports and analyses based on ERP system data to support management decisions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_INFORMATYK = [

            [
                "id" => 23635,
                "name" => json_encode([
                    "pl" => "Instalowanie i konfigurowanie sprzętu komputerowego, oprogramowania i systemów operacyjnych w firmie.",
                    "en" => "Installing and configuring computer hardware, software, and operating systems in the company."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23636,
                "name" => json_encode([
                    "pl" => "Zarządzanie sprzętem komputerowym i systemami IT, zapewniając ich sprawność i dostępność.",
                    "en" => "Managing computer hardware and IT systems, ensuring their functionality and availability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23637,
                "name" => json_encode([
                    "pl" => "Wsparcie techniczne dla użytkowników systemów komputerowych i rozwiązywanie problemów związanych z oprogramowaniem.",
                    "en" => "Providing technical support for computer system users and troubleshooting software-related issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23638,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji i naprawy sprzętu komputerowego, w tym wymiana uszkodzonych komponentów.",
                    "en" => "Performing maintenance and repairs of computer hardware, including replacing damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23639,
                "name" => json_encode([
                    "pl" => "Zarządzanie bazami danych oraz konfiguracja i administracja systemów komputerowych.",
                    "en" => "Managing databases and configuring and administering computer systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23640,
                "name" => json_encode([
                    "pl" => "Dokumentowanie działań związanych z konfiguracją i konserwacją sprzętu komputerowego oraz systemów IT.",
                    "en" => "Documenting activities related to configuring and maintaining computer hardware and IT systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TYFLOINFORMATYK = [

            [
                "id" => 23641,
                "name" => json_encode([
                    "pl" => "Wspieranie osób z niepełnosprawnościami w korzystaniu z technologii informacyjnych, zapewniając dostępność aplikacji i urządzeń.",
                    "en" => "Supporting individuals with disabilities in using information technology, ensuring the accessibility of applications and devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23642,
                "name" => json_encode([
                    "pl" => "Konfiguracja i dostosowywanie urządzeń komputerowych oraz aplikacji do potrzeb osób z różnymi rodzajami niepełnosprawności.",
                    "en" => "Configuring and customizing computer devices and applications for individuals with various disabilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23643,
                "name" => json_encode([
                    "pl" => "Szkolenie użytkowników z niepełnosprawnościami w zakresie korzystania z technologii wspomagających.",
                    "en" => "Training users with disabilities in using assistive technology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23644,
                "name" => json_encode([
                    "pl" => "Projektowanie i wdrażanie technologii, które umożliwiają dostęp do zasobów internetowych i aplikacji mobilnych dla osób z ograniczoną sprawnością.",
                    "en" => "Designing and implementing technologies that enable access to web resources and mobile applications for individuals with limited mobility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23645,
                "name" => json_encode([
                    "pl" => "Testowanie i ocena dostępności urządzeń oraz aplikacji pod kątem ich zgodności z wytycznymi dotyczącymi dostępności.",
                    "en" => "Testing and evaluating the accessibility of devices and applications for compliance with accessibility guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23646,
                "name" => json_encode([
                    "pl" => "Dostosowanie oprogramowania i sprzętu komputerowego w celu ułatwienia dostępu do informacji i komunikacji dla osób niewidomych i słabowidzących.",
                    "en" => "Customizing software and hardware to facilitate access to information and communication for blind and visually impaired individuals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_TECHNICY_WSPARCIA_INFORMATYCZNEGO_I_TECHNICZNEGO = [

            [
                "id" => 23647,
                "name" => json_encode([
                    "pl" => "Świadczenie wsparcia technicznego i informatycznego dla użytkowników, diagnozowanie problemów i ich rozwiązywanie.",
                    "en" => "Providing technical and IT support to users, diagnosing problems, and resolving issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23648,
                "name" => json_encode([
                    "pl" => "Instalowanie i konfigurowanie sprzętu komputerowego oraz oprogramowania w organizacjach.",
                    "en" => "Installing and configuring computer hardware and software in organizations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23649,
                "name" => json_encode([
                    "pl" => "Zarządzanie sieciami komputerowymi, zapewniając ich stabilność i bezpieczeństwo.",
                    "en" => "Managing computer networks, ensuring their stability and security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23650,
                "name" => json_encode([
                    "pl" => "Zarządzanie aktualizacjami oprogramowania, naprawa awarii oraz zapewnienie ciągłości pracy systemów informatycznych.",
                    "en" => "Managing software updates, repairing faults, and ensuring the continuity of IT systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23651,
                "name" => json_encode([
                    "pl" => "Wsparcie użytkowników w zakresie obsługi oprogramowania oraz rozwiązywania problemów technicznych.",
                    "en" => "Providing user support in software handling and troubleshooting technical issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23652,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów systemów informatycznych, identyfikowanie potencjalnych problemów i proponowanie rozwiązań.",
                    "en" => "Conducting tests on IT systems, identifying potential issues, and suggesting solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TESTER_GIER_COMPUTEROWYCH = [

            [
                "id" => 23653,
                "name" => json_encode([
                    "pl" => "Testowanie gier komputerowych, identyfikowanie błędów i nieprawidłowości, a także przygotowywanie raportów o wykrytych problemach.",
                    "en" => "Testing video games, identifying bugs and inconsistencies, and preparing reports on detected issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23654,
                "name" => json_encode([
                    "pl" => "Analizowanie interakcji graczy z grą, ocenianie wrażeń i zgłaszanie sugestii do poprawy rozgrywki.",
                    "en" => "Analyzing player interactions with the game, evaluating experiences, and providing suggestions for gameplay improvement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23655,
                "name" => json_encode([
                    "pl" => "Testowanie nowych wersji gier, w tym sprawdzanie zgodności z różnymi systemami operacyjnymi i urządzeniami.",
                    "en" => "Testing new versions of games, including checking compatibility with different operating systems and devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23656,
                "name" => json_encode([
                    "pl" => "Zgłaszanie i dokumentowanie znalezionych błędów oraz współpraca z zespołem programistów w celu ich naprawy.",
                    "en" => "Reporting and documenting discovered bugs and collaborating with the development team to fix them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23657,
                "name" => json_encode([
                    "pl" => "Ocenianie jakości dźwięku, grafiki, interfejsu użytkownika i mechaniki gry, aby upewnić się, że gra spełnia standardy jakości.",
                    "en" => "Evaluating the quality of sound, graphics, user interface, and game mechanics to ensure the game meets quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23658,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów obciążeniowych, sprawdzanie stabilności gry przy dużym obciążeniu systemu.",
                    "en" => "Conducting stress tests, checking game stability under heavy system load."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_WSPARCIA_INFORMATYCZNEGO = [

            [
                "id" => 23659,
                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia technicznego użytkownikom w zakresie oprogramowania, sprzętu i sieci komputerowych.",
                    "en" => "Providing technical support to users for software, hardware, and computer network issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23660,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów zgłaszanych przez użytkowników i udzielanie im pomocy w zakresie obsługi systemów informatycznych.",
                    "en" => "Resolving issues reported by users and assisting them with using IT systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23661,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie diagnostyki sprzętu komputerowego oraz oprogramowania i zapewnianie ich naprawy.",
                    "en" => "Performing diagnostics of computer hardware and software and ensuring their repair."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23662,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w firmie w celu rozwiązywania problemów użytkowników i wdrażania nowych systemów.",
                    "en" => "Collaborating with other departments in the company to resolve user issues and implement new systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23663,
                "name" => json_encode([
                    "pl" => "Tworzenie i aktualizowanie dokumentacji pomocniczej oraz instrukcji obsługi systemów IT.",
                    "en" => "Creating and updating support documentation and user manuals for IT systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23664,
                "name" => json_encode([
                    "pl" => "Szkolenie użytkowników w zakresie obsługi oprogramowania i systemów informatycznych.",
                    "en" => "Training users on how to use software and IT systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_URZĄDZEŃ_TELEINFORMATYCZNYCH = [

            [
                "id" => 23665,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń teleinformatycznych, monitorowanie ich pracy oraz przeprowadzanie diagnostyki w razie potrzeby.",
                    "en" => "Operating telecommunication and IT devices, monitoring their performance, and performing diagnostics as needed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23666,
                "name" => json_encode([
                    "pl" => "Utrzymywanie i konserwacja urządzeń teleinformatycznych w celu zapewnienia ich niezawodności i ciągłości działania.",
                    "en" => "Maintaining and servicing telecommunication and IT devices to ensure their reliability and continuous operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23667,
                "name" => json_encode([
                    "pl" => "Zarządzanie sieciami komputerowymi, zapewniając ich stabilność i bezpieczeństwo.",
                    "en" => "Managing computer networks, ensuring their stability and security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23668,
                "name" => json_encode([
                    "pl" => "Instalowanie, konfigurowanie i testowanie urządzeń teleinformatycznych zgodnie z wymaganiami technicznymi.",
                    "en" => "Installing, configuring, and testing telecommunication and IT devices according to technical specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23669,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem IT w zakresie rozwiązywania problemów z urządzeniami teleinformatycznymi.",
                    "en" => "Collaborating with the IT team to resolve issues with telecommunication and IT devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23670,
                "name" => json_encode([
                    "pl" => "Dokumentowanie działań związanych z instalacją, konserwacją i naprawą urządzeń teleinformatycznych.",
                    "en" => "Documenting activities related to the installation, maintenance, and repair of telecommunication and IT devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_TECHNICY_SIECI_INTERNETOWYCH = [

            [
                "id" => 23671,
                "name" => json_encode([
                    "pl" => "Instalowanie i zarządzanie infrastrukturą sieciową, w tym konfigurowanie routerów, przełączników oraz innych urządzeń sieciowych.",
                    "en" => "Installing and managing network infrastructure, including configuring routers, switches, and other networking devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23672,
                "name" => json_encode([
                    "pl" => "Monitorowanie i diagnozowanie wydajności sieci internetowych oraz rozwiązywanie problemów z połączeniami.",
                    "en" => "Monitoring and diagnosing the performance of internet networks and troubleshooting connectivity issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23673,
                "name" => json_encode([
                    "pl" => "Zarządzanie bezpieczeństwem sieci internetowych, zapewniając ich ochronę przed zagrożeniami i atakami.",
                    "en" => "Managing the security of internet networks, ensuring their protection from threats and attacks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23674,
                "name" => json_encode([
                    "pl" => "Optymalizacja przepustowości sieci internetowych w celu zapewnienia ich wydajności i stabilności.",
                    "en" => "Optimizing bandwidth for internet networks to ensure their efficiency and stability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23675,
                "name" => json_encode([
                    "pl" => "Tworzenie i aktualizowanie dokumentacji sieciowej oraz zarządzanie konfiguracją urządzeń sieciowych.",
                    "en" => "Creating and updating network documentation and managing the configuration of network devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 23676,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami IT w zakresie planowania, implementacji i konserwacji sieci internetowych.",
                    "en" => "Collaborating with IT teams to plan, implement, and maintain internet networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];



        DB::table('detail_projects')->insert(array_merge(
            $INŻYNIER_TELEKOMUNIKACJI,
            $TECHNOLOG_INŻYNIERII_TELEKOMUNIKACYJNEJ,
            $INŻYNIER_TELEINFORMATYK,
            $POZOSTALI_INŻYNIEROWIE_TELEKOMUNIKACJI,
            $OPERATOR_URZĄDZEŃ_NADAWCZYCH_TELEWIZJI_KABLOWEJ,
            $OPERATOR_URZĄDZEŃ_RADIOMUNIKACYJNYCH,
            $TECHNIK_TELEKOMUNIKACJI,
            $POZOSTALI_OPERATORZY_URZĄDZEŃ_TELEKOMUNIKACYJNYCH,
            $KONSULTANT_DO_SPRAW_SYSTEMÓW_TELEINFORMATYCZNYCH,
            $PROJEKTANT_ARCHITEKT_SYSTEMÓW_TELEINFORMATYCZNYCH,
            $POZOSTALI_ANALITYCY_SYSTEMÓW_KOMPUTEROWYCH,
            $ANALITYK_DOŚWIADCZENIA_UŻYTKOWNIKÓW,
            $SPECJALISTA_DO_SPRAW_INTEGRACJI_TECHNOLOGII_INFORMATYCZNYCH,
            $POZOSTALI_SPECJALIŚCI_DO_SPRAW_ROZWOJU_SYSTEMÓW_INFORMATYCZNYCH,
            $ADMINISTRATOR_SYSTEMÓW_KOMPUTEROWYCH,
            $ADMINISTRATOR_ZINTEGROWANYCH_SYSTEMÓW_ZARZĄDZANIA,
            $POZOSTALI_ADMINISTRATORZY_SYSTEMÓW_KOMPUTEROWYCH,
            $ANALITYK_SIECI_COMPUTEROWYCH,
            $INŻYNIER_SYSTEMÓW_I_SIECI_COMPUTEROWYCH,
            $POZOSTALI_SPECJALIŚCI_DO_SPRAW_SIECI_COMPUTEROWYCH,
            $SPECJALISTA_BEZPIECZEŃSTWA_OPROGRAMOWANIA,
            $POZOSTALI_SPECJALIŚCI_DO_SPRAW_BAZ_DANYCH_I_SIECI_COMPUTEROWYCH_GDZIE_INDIENIEJ_NIESKLASYFIKOWANI,
            $SPECJALISTA_DO_SPRAW_SYSTEMÓW_ZARZĄDZANIA_BEZPIECZEŃSTWEM_INFORMACJI,
            $SPECJALISTA_DO_SPRAW_INFORMATYKI_ŚLEDCZEJ,
            $OPERATOR_SIECI_COMPUTEROWYCH,
            $OPERATOR_SPRZĘTU_COMPUTEROWEGO,
            $OPERATOR_SYSTEMÓW_COMPUTEROWYCH,
            $POZOSTALI_OPERATORZY_SIECI_I_SYSTEMÓW_COMPUTEROWYCH,
            $ARCHITEKT_STRON_INTERNETOWYCH,
            $PROJEKTANT_APLIKACJI_MULTIMEDIALNYCH_ANIMACJI_I_GIER_COMPUTEROWYCH,
            $SPECJALISTA_DO_SPRAW_ROZWOJU_STRON_INTERNETOWYCH,
            $POZOSTALI_PROJEKTANCI_APLIKACJI_SIECIOWYCH_I_MULTIMEDIÓW,
            $PROGRAMISTA_APLIKACJI,
            $PROGRAMISTA_APLIKACJI_MOBILNYCH,
            $POZOSTALI_PROGRAMIŚCI_APLIKACJI,
            $PROJEKTANT_INTERFEJSU_UŻYTKOWNIKA,
            $SPECJALISTA_DO_SPRAW_JAKOŚCI_OPROGRAMOWANIA,
            $ADMINISTRATOR_BAZ_DANYCH,
            $ANALITYK_BAZ_DANYCH,
            $PROJEKTANT_BAZ_DANYCH,
            $POZOSTALI_PROJEKTANCI_I_ADMINISTRATORZY_BAZ_DANYCH,
            $SPECJALISTA_DO_SPRAW_DOSKONALENIA_I_ROZWOJU_APLIKACJI,
            $SPECJALNOŚCI_UJMOWANE_W_ZAWODZIE_SPOZA_KZIS,
            $USER_EXPERIENCE_DESIGNER,
            $CUSTOMER_SUCCESS,
            $TECHWRITER,
            $SCRUM_MASTER,
            $SPECJALISTA_DO_SPRAW_INFORMATYKI_PRZEMYSŁOWEJ,
            $POZOSTALI_PROJEKTANCI_GRAFIKI_I_MULTIMEDIÓW,
            $KONSERWATOR_SIECI_I_SYSTEMÓW_COMPUTEROWYCH,
            $OPERATOR_ZINTEGROWANYCH_SYSTEMÓW_ZARZĄDZANIA_ZASOBAMI_FIRMY,
            $TECHNIK_INFORMATYK,
            $TECHNIK_TYFLOINFORMATYK,
            $POZOSTALI_TECHNICY_WSPARCIA_INFORMATYCZNEGO_I_TECHNICZNEGO,
            $TESTER_GIER_COMPUTEROWYCH,
            $PRACOWNIK_WSPARCIA_INFORMATYCZNEGO,
            $POZOSTALI_OPERATORZY_URZĄDZEŃ_TELEINFORMATYCZNYCH,
            $POZOSTALI_TECHNICY_SIECI_INTERNETOWYCH,


        ));
        Category::whereId('1365')->first()->detailprojects()->attach(collect($INŻYNIER_TELEKOMUNIKACJI)->pluck('id')->toArray());
        Category::whereId('1366')->first()->detailprojects()->attach(collect($TECHNOLOG_INŻYNIERII_TELEKOMUNIKACYJNEJ)->pluck('id')->toArray());
        Category::whereId('1367')->first()->detailprojects()->attach(collect($INŻYNIER_TELEINFORMATYK)->pluck('id')->toArray());
        Category::whereId('1368')->first()->detailprojects()->attach(collect($POZOSTALI_INŻYNIEROWIE_TELEKOMUNIKACJI)->pluck('id')->toArray());
        Category::whereId('1370')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_NADAWCZYCH_TELEWIZJI_KABLOWEJ)->pluck('id')->toArray());
        Category::whereId('1371')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_RADIOMUNIKACYJNYCH)->pluck('id')->toArray());
        Category::whereId('1372')->first()->detailprojects()->attach(collect($TECHNIK_TELEKOMUNIKACJI)->pluck('id')->toArray());
        Category::whereId('1373')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_URZĄDZEŃ_TELEKOMUNIKACYJNYCH)->pluck('id')->toArray());
        Category::whereId('1378')->first()->detailprojects()->attach(collect($KONSULTANT_DO_SPRAW_SYSTEMÓW_TELEINFORMATYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1379')->first()->detailprojects()->attach(collect($PROJEKTANT_ARCHITEKT_SYSTEMÓW_TELEINFORMATYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1380')->first()->detailprojects()->attach(collect($POZOSTALI_ANALITYCY_SYSTEMÓW_KOMPUTEROWYCH)->pluck('id')->toArray());
        Category::whereId('1381')->first()->detailprojects()->attach(collect($ANALITYK_DOŚWIADCZENIA_UŻYTKOWNIKÓW)->pluck('id')->toArray());
        Category::whereId('1382')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_INTEGRACJI_TECHNOLOGII_INFORMATYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1384')->first()->detailprojects()->attach(collect($POZOSTALI_SPECJALIŚCI_DO_SPRAW_ROZWOJU_SYSTEMÓW_INFORMATYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1392')->first()->detailprojects()->attach(collect($ADMINISTRATOR_SYSTEMÓW_KOMPUTEROWYCH)->pluck('id')->toArray());
        Category::whereId('1393')->first()->detailprojects()->attach(collect($ADMINISTRATOR_ZINTEGROWANYCH_SYSTEMÓW_ZARZĄDZANIA)->pluck('id')->toArray());
        Category::whereId('1394')->first()->detailprojects()->attach(collect($POZOSTALI_ADMINISTRATORZY_SYSTEMÓW_KOMPUTEROWYCH)->pluck('id')->toArray());
        Category::whereId('1396')->first()->detailprojects()->attach(collect($ANALITYK_SIECI_COMPUTEROWYCH)->pluck('id')->toArray());
        Category::whereId('1397')->first()->detailprojects()->attach(collect($INŻYNIER_SYSTEMÓW_I_SIECI_COMPUTEROWYCH)->pluck('id')->toArray());
        Category::whereId('1398')->first()->detailprojects()->attach(collect($POZOSTALI_SPECJALIŚCI_DO_SPRAW_SIECI_COMPUTEROWYCH)->pluck('id')->toArray());
        Category::whereId('1400')->first()->detailprojects()->attach(collect($SPECJALISTA_BEZPIECZEŃSTWA_OPROGRAMOWANIA)->pluck('id')->toArray());
        Category::whereId('1402')->first()->detailprojects()->attach(collect($POZOSTALI_SPECJALIŚCI_DO_SPRAW_BAZ_DANYCH_I_SIECI_COMPUTEROWYCH_GDZIE_INDIENIEJ_NIESKLASYFIKOWANI)->pluck('id')->toArray());
        Category::whereId('1403')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_SYSTEMÓW_ZARZĄDZANIA_BEZPIECZEŃSTWEM_INFORMACJI)->pluck('id')->toArray());
        Category::whereId('1404')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_INFORMATYKI_ŚLEDCZEJ)->pluck('id')->toArray());
        Category::whereId('1408')->first()->detailprojects()->attach(collect($OPERATOR_SIECI_COMPUTEROWYCH)->pluck('id')->toArray());
        Category::whereId('1409')->first()->detailprojects()->attach(collect($OPERATOR_SPRZĘTU_COMPUTEROWEGO)->pluck('id')->toArray());
        Category::whereId('1410')->first()->detailprojects()->attach(collect($OPERATOR_SYSTEMÓW_COMPUTEROWYCH)->pluck('id')->toArray());
        Category::whereId('1411')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_SIECI_I_SYSTEMÓW_COMPUTEROWYCH)->pluck('id')->toArray());
        Category::whereId('1416')->first()->detailprojects()->attach(collect($ARCHITEKT_STRON_INTERNETOWYCH)->pluck('id')->toArray());
        Category::whereId('1417')->first()->detailprojects()->attach(collect($PROJEKTANT_APLIKACJI_MULTIMEDIALNYCH_ANIMACJI_I_GIER_COMPUTEROWYCH)->pluck('id')->toArray());
        Category::whereId('1418')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_ROZWOJU_STRON_INTERNETOWYCH)->pluck('id')->toArray());
        Category::whereId('1419')->first()->detailprojects()->attach(collect($POZOSTALI_PROJEKTANCI_APLIKACJI_SIECIOWYCH_I_MULTIMEDIÓW)->pluck('id')->toArray());
        Category::whereId('1421')->first()->detailprojects()->attach(collect($PROGRAMISTA_APLIKACJI)->pluck('id')->toArray());
        Category::whereId('1422')->first()->detailprojects()->attach(collect($PROGRAMISTA_APLIKACJI_MOBILNYCH)->pluck('id')->toArray());
        Category::whereId('1423')->first()->detailprojects()->attach(collect($POZOSTALI_PROGRAMIŚCI_APLIKACJI)->pluck('id')->toArray());
        Category::whereId('1424')->first()->detailprojects()->attach(collect($PROJEKTANT_INTERFEJSU_UŻYTKOWNIKA)->pluck('id')->toArray());
        Category::whereId('1425')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_JAKOŚCI_OPROGRAMOWANIA)->pluck('id')->toArray());
        Category::whereId('1428')->first()->detailprojects()->attach(collect($ADMINISTRATOR_BAZ_DANYCH)->pluck('id')->toArray());
        Category::whereId('1429')->first()->detailprojects()->attach(collect($ANALITYK_BAZ_DANYCH)->pluck('id')->toArray());
        Category::whereId('1430')->first()->detailprojects()->attach(collect($PROJEKTANT_BAZ_DANYCH)->pluck('id')->toArray());
        Category::whereId('1431')->first()->detailprojects()->attach(collect($POZOSTALI_PROJEKTANCI_I_ADMINISTRATORZY_BAZ_DANYCH)->pluck('id')->toArray());
        Category::whereId('1442')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_DOSKONALENIA_I_ROZWOJU_APLIKACJI)->pluck('id')->toArray());
        Category::whereId('1443')->first()->detailprojects()->attach(collect($SPECJALNOŚCI_UJMOWANE_W_ZAWODZIE_SPOZA_KZIS)->pluck('id')->toArray());
        Category::whereId('1446')->first()->detailprojects()->attach(collect($USER_EXPERIENCE_DESIGNER)->pluck('id')->toArray());
        Category::whereId('1447')->first()->detailprojects()->attach(collect($CUSTOMER_SUCCESS)->pluck('id')->toArray());
        Category::whereId('1448')->first()->detailprojects()->attach(collect($TECHWRITER)->pluck('id')->toArray());
        Category::whereId('1449')->first()->detailprojects()->attach(collect($SCRUM_MASTER)->pluck('id')->toArray());
        Category::whereId('1451')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_INFORMATYKI_PRZEMYSŁOWEJ)->pluck('id')->toArray());
        Category::whereId('1459')->first()->detailprojects()->attach(collect($POZOSTALI_PROJEKTANCI_GRAFIKI_I_MULTIMEDIÓW)->pluck('id')->toArray());
        Category::whereId('1463')->first()->detailprojects()->attach(collect($KONSERWATOR_SIECI_I_SYSTEMÓW_COMPUTEROWYCH)->pluck('id')->toArray());
        Category::whereId('1464')->first()->detailprojects()->attach(collect($OPERATOR_ZINTEGROWANYCH_SYSTEMÓW_ZARZĄDZANIA_ZASOBAMI_FIRMY)->pluck('id')->toArray());
        Category::whereId('1465')->first()->detailprojects()->attach(collect($TECHNIK_INFORMATYK)->pluck('id')->toArray());
        Category::whereId('1466')->first()->detailprojects()->attach(collect($TECHNIK_TYFLOINFORMATYK)->pluck('id')->toArray());
        Category::whereId('1467')->first()->detailprojects()->attach(collect($POZOSTALI_TECHNICY_WSPARCIA_INFORMATYCZNEGO_I_TECHNICZNEGO)->pluck('id')->toArray());
        Category::whereId('1468')->first()->detailprojects()->attach(collect($TESTER_GIER_COMPUTEROWYCH)->pluck('id')->toArray());
        Category::whereId('1469')->first()->detailprojects()->attach(collect($PRACOWNIK_WSPARCIA_INFORMATYCZNEGO)->pluck('id')->toArray());
        Category::whereId('1472')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_URZĄDZEŃ_TELEINFORMATYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1473')->first()->detailprojects()->attach(collect($POZOSTALI_TECHNICY_SIECI_INTERNETOWYCH)->pluck('id')->toArray());

    }
}

