<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectProdukcjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();

        $KIEROWNICY_PRODUKCJI_W_ROLNICTWIE_I_LESNICTWIE = [

            [
                "id" => 19239,
                "name" => json_encode([
                    "pl" => "Planowanie i organizowanie produkcji rolniczej oraz leśnej.",
                    "en" => "Planning and organizing agricultural and forestry production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19240,
                "name" => json_encode([
                    "pl" => "Nadzorowanie pracowników i kierowanie zespołem produkcyjnym.",
                    "en" => "Supervising employees and managing the production team."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19241,
                "name" => json_encode([
                    "pl" => "Zapewnianie efektywności produkcji oraz odpowiedniej jakości plonów.",
                    "en" => "Ensuring production efficiency and appropriate crop quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19242,
                "name" => json_encode([
                    "pl" => "Opracowywanie harmonogramów prac polowych i leśnych.",
                    "en" => "Developing schedules for field and forestry work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19243,
                "name" => json_encode([
                    "pl" => "Nadzorowanie użytkowania maszyn rolniczych i leśnych.",
                    "en" => "Supervising the use of agricultural and forestry machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19244,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków upraw i hodowli.",
                    "en" => "Monitoring crop and livestock conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19245,
                "name" => json_encode([
                    "pl" => "Zarządzanie zasobami ludzkimi, materiałowymi i finansowymi.",
                    "en" => "Managing human, material, and financial resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19246,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii i metod produkcyjnych.",
                    "en" => "Implementing new technologies and production methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19247,
                "name" => json_encode([
                    "pl" => "Kontrola przestrzegania zasad bezpieczeństwa pracy.",
                    "en" => "Ensuring compliance with workplace safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $KIEROWNICY_PRODUKCJI_W_ZAKŁADACH_AKWAKULTURY_I_RYBOŁÓWSTWIE = [

            [
                "id" => 19248,
                "name" => json_encode([
                    "pl" => "Planowanie i organizowanie działalności akwakulturowej i rybołówczej.",
                    "en" => "Planning and organizing aquaculture and fishing activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19249,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników w gospodarstwach wodnych.",
                    "en" => "Managing a team of workers in aquatic farms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19250,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków środowiskowych i zdrowia ryb.",
                    "en" => "Monitoring environmental conditions and fish health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19251,
                "name" => json_encode([
                    "pl" => "Nadzór nad technikami połowu i metodami hodowli.",
                    "en" => "Supervising fishing techniques and breeding methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19252,
                "name" => json_encode([
                    "pl" => "Opracowywanie harmonogramów połowów i zarybień.",
                    "en" => "Developing schedules for fishing and stocking."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19253,
                "name" => json_encode([
                    "pl" => "Dbanie o zgodność produkcji z przepisami środowiskowymi.",
                    "en" => "Ensuring production compliance with environmental regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19254,
                "name" => json_encode([
                    "pl" => "Wdrażanie i monitorowanie technologii hodowli ryb.",
                    "en" => "Implementing and monitoring fish farming technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19255,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z produkcją.",
                    "en" => "Maintaining production-related documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19256,
                "name" => json_encode([
                    "pl" => "Odpowiedzialność za kontrolę jakości i bezpieczeństwo produkcji.",
                    "en" => "Ensuring quality control and production safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $KIEROWNICY_DO_SPRAW_PRODUKCJI_PRZEMYSŁOWEJ = [

            [
                "id" => 19257,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami produkcyjnymi w zakładzie przemysłowym.",
                    "en" => "Managing production processes in an industrial facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19258,
                "name" => json_encode([
                    "pl" => "Planowanie i optymalizacja harmonogramów produkcyjnych.",
                    "en" => "Planning and optimizing production schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19259,
                "name" => json_encode([
                    "pl" => "Nadzór nad wydajnością i jakością produkcji.",
                    "en" => "Supervising production efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19260,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników produkcyjnych.",
                    "en" => "Managing a team of production workers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19261,
                "name" => json_encode([
                    "pl" => "Wdrażanie usprawnień procesów technologicznych.",
                    "en" => "Implementing improvements in technological processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19262,
                "name" => json_encode([
                    "pl" => "Odpowiedzialność za przestrzeganie zasad BHP.",
                    "en" => "Ensuring compliance with occupational health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19263,
                "name" => json_encode([
                    "pl" => "Monitorowanie zużycia surowców i efektywności pracy maszyn.",
                    "en" => "Monitoring raw material usage and machine efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19264,
                "name" => json_encode([
                    "pl" => "Koordynacja z innymi działami (np. utrzymanie ruchu, logistyka).",
                    "en" => "Coordinating with other departments (e.g., maintenance, logistics)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19265,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów produkcyjnych w czasie rzeczywistym.",
                    "en" => "Resolving production issues in real-time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $KIEROWNIK_DZIAŁU_RUCHU_ZAKŁADU_GÓRNICZEGO_LUB_ZAKŁADU = [

            [
                "id" => 19266,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami produkcyjnymi w zakładzie przemysłowym.",
                    "en" => "Managing production processes in an industrial facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19267,
                "name" => json_encode([
                    "pl" => "Planowanie i optymalizacja harmonogramów produkcyjnych.",
                    "en" => "Planning and optimizing production schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19268,
                "name" => json_encode([
                    "pl" => "Nadzór nad wydajnością i jakością produkcji.",
                    "en" => "Supervising production efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19269,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników produkcyjnych.",
                    "en" => "Managing a team of production workers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19270,
                "name" => json_encode([
                    "pl" => "Wdrażanie usprawnień procesów technologicznych.",
                    "en" => "Implementing improvements in technological processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19271,
                "name" => json_encode([
                    "pl" => "Odpowiedzialność za przestrzeganie zasad BHP.",
                    "en" => "Ensuring compliance with occupational health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19272,
                "name" => json_encode([
                    "pl" => "Monitorowanie zużycia surowców i efektywności pracy maszyn.",
                    "en" => "Monitoring raw material usage and machine efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19273,
                "name" => json_encode([
                    "pl" => "Koordynacja z innymi działami (np. utrzymanie ruchu, logistyka).",
                    "en" => "Coordinating with other departments (e.g., maintenance, logistics)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19274,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów produkcyjnych w czasie rzeczywistym.",
                    "en" => "Resolving production issues in real-time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $KIEROWNIK_MAŁEGO_PRZEDSIĘBIORSTWA_BUDOWLANEGO = [

            [
                "id" => 19275,
                "name" => json_encode([
                    "pl" => "Planowanie, organizacja i nadzór nad projektami budowlanymi.",
                    "en" => "Planning, organizing, and supervising construction projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19276,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników budowlanych.",
                    "en" => "Managing a team of construction workers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19277,
                "name" => json_encode([
                    "pl" => "Odpowiedzialność za terminową realizację projektów.",
                    "en" => "Ensuring timely completion of projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19278,
                "name" => json_encode([
                    "pl" => "Monitorowanie kosztów i zarządzanie budżetem budowy.",
                    "en" => "Monitoring costs and managing the construction budget."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19279,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością wykonania prac.",
                    "en" => "Supervising the quality of work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19280,
                "name" => json_encode([
                    "pl" => "Utrzymywanie kontaktów z klientami i dostawcami.",
                    "en" => "Maintaining communication with clients and suppliers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19281,
                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania przepisów BHP na budowie.",
                    "en" => "Ensuring compliance with health and safety regulations on the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19282,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów technicznych i organizacyjnych.",
                    "en" => "Resolving technical and organizational issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19283,
                "name" => json_encode([
                    "pl" => "Sporządzanie dokumentacji budowlanej i prowadzenie ewidencji.",
                    "en" => "Preparing construction documentation and maintaining records."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $PLANIŚCI_PRODUKCYJNI = [

            [
                "id" => 19284,
                "name" => json_encode([
                    "pl" => "Opracowywanie harmonogramów produkcyjnych.",
                    "en" => "Developing production schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19285,
                "name" => json_encode([
                    "pl" => "Analiza zasobów potrzebnych do realizacji zamówień.",
                    "en" => "Analyzing resources required to fulfill orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19286,
                "name" => json_encode([
                    "pl" => "Monitorowanie i optymalizacja przepływu produkcji.",
                    "en" => "Monitoring and optimizing production flow."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19287,
                "name" => json_encode([
                    "pl" => "Współpraca z działami zaopatrzenia, logistyki i sprzedaży.",
                    "en" => "Collaborating with procurement, logistics, and sales departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19288,
                "name" => json_encode([
                    "pl" => "Prognozowanie i planowanie zapotrzebowania na materiały.",
                    "en" => "Forecasting and planning material requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19289,
                "name" => json_encode([
                    "pl" => "Utrzymywanie ciągłości produkcji poprzez optymalizację procesów.",
                    "en" => "Maintaining production continuity by optimizing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19290,
                "name" => json_encode([
                    "pl" => "Śledzenie i analiza wskaźników efektywności produkcji.",
                    "en" => "Tracking and analyzing production efficiency metrics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19291,
                "name" => json_encode([
                    "pl" => "Reagowanie na zmiany zapotrzebowania i dostosowywanie planów.",
                    "en" => "Responding to demand changes and adjusting plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19292,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów i analiz produkcyjnych.",
                    "en" => "Creating production reports and analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $GŁÓWNY_TECHNOLOG = [

            [
                "id" => 19293,
                "name" => json_encode([
                    "pl" => "Tworzenie i optymalizacja procesów technologicznych.",
                    "en" => "Creating and optimizing technological processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19294,
                "name" => json_encode([
                    "pl" => "Nadzór nad wdrażaniem nowych technologii w produkcji.",
                    "en" => "Supervising the implementation of new technologies in production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19295,
                "name" => json_encode([
                    "pl" => "Odpowiedzialność za jakość produktów i efektywność produkcji.",
                    "en" => "Ensuring product quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19296,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem technologów i inżynierów.",
                    "en" => "Managing a team of technologists and engineers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19297,
                "name" => json_encode([
                    "pl" => "Wdrażanie innowacji technologicznych w zakładzie.",
                    "en" => "Implementing technological innovations in the facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19298,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów związanych z procesem produkcji.",
                    "en" => "Resolving issues related to the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19299,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technologicznej.",
                    "en" => "Maintaining technological documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19300,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz efektywności i kosztów produkcji.",
                    "en" => "Conducting efficiency and cost analyses of production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19301,
                "name" => json_encode([
                    "pl" => "Współpraca z działem badań i rozwoju.",
                    "en" => "Collaborating with the research and development department."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $INŻYNIEROWIE_GÓRNICTWA_I_METALURGII = [

            [
                "id" => 19302,
                "name" => json_encode([
                    "pl" => "Projektowanie i optymalizacja procesów wydobywczych.",
                    "en" => "Designing and optimizing mining processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19303,
                "name" => json_encode([
                    "pl" => "Nadzór nad eksploatacją złóż surowców mineralnych.",
                    "en" => "Supervising the extraction of mineral resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19304,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie nowych technologii w górnictwie.",
                    "en" => "Developing and implementing new technologies in mining."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19305,
                "name" => json_encode([
                    "pl" => "Monitorowanie i ocena warunków geologicznych.",
                    "en" => "Monitoring and assessing geological conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19306,
                "name" => json_encode([
                    "pl" => "Prowadzenie analiz i badań technologicznych.",
                    "en" => "Conducting analyses and technological research."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19307,
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności procesów z normami środowiskowymi.",
                    "en" => "Ensuring compliance of processes with environmental standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19308,
                "name" => json_encode([
                    "pl" => "Wdrażanie środków zapobiegających zagrożeniom w kopalniach.",
                    "en" => "Implementing measures to prevent risks in mines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19309,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej.",
                    "en" => "Maintaining technical documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19310,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi specjalistami w celu poprawy efektywności.",
                    "en" => "Collaborating with other specialists to improve efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $INŻYNIER_POLIGRAFII = [

            [
                "id" => 19311,
                "name" => json_encode([
                    "pl" => "Projektowanie i nadzór nad procesami produkcji poligraficznej.",
                    "en" => "Designing and supervising printing production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19312,
                "name" => json_encode([
                    "pl" => "Odpowiedzialność za jakość druku i materiałów poligraficznych.",
                    "en" => "Ensuring the quality of printing and printing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19313,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii druku.",
                    "en" => "Implementing new printing technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19314,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami przygotowalni i drukarni.",
                    "en" => "Managing prepress and printing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19315,
                "name" => json_encode([
                    "pl" => "Kontrola i optymalizacja parametrów technicznych maszyn.",
                    "en" => "Monitoring and optimizing the technical parameters of machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19316,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów związanych z produkcją drukarską.",
                    "en" => "Resolving issues related to printing production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19317,
                "name" => json_encode([
                    "pl" => "Opracowywanie specyfikacji technicznych dla projektów.",
                    "en" => "Developing technical specifications for projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19318,
                "name" => json_encode([
                    "pl" => "Nadzór nad pracami konserwacyjnymi urządzeń.",
                    "en" => "Supervising maintenance work on equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19319,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szkoleń dla operatorów maszyn drukarskich.",
                    "en" => "Conducting training for printing machine operators."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $INŻYNIER_SYSTEMÓW_ZABEZPIECZEŃ_TECHNICZNYCH_OSÓB_I_MIENIA = [

            [
                "id" => 19320,
                "name" => json_encode([
                    "pl" => "Projektowanie i wdrażanie systemów zabezpieczeń technicznych.",
                    "en" => "Designing and implementing technical security systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19321,
                "name" => json_encode([
                    "pl" => "Odpowiedzialność za nadzór nad instalacjami systemów ochrony.",
                    "en" => "Supervising the installation of protection systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19322,
                "name" => json_encode([
                    "pl" => "Testowanie i konserwacja systemów zabezpieczeń.",
                    "en" => "Testing and maintaining security systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19323,
                "name" => json_encode([
                    "pl" => "Analiza ryzyka i wdrażanie środków ochronnych.",
                    "en" => "Conducting risk analysis and implementing protective measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19324,
                "name" => json_encode([
                    "pl" => "Współpraca z działami bezpieczeństwa i zarządzania kryzysowego.",
                    "en" => "Collaborating with security and crisis management departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19325,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie obsługi systemów zabezpieczeń.",
                    "en" => "Training employees on the operation of security systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19326,
                "name" => json_encode([
                    "pl" => "Dokumentacja projektów i audyt systemów zabezpieczeń.",
                    "en" => "Documenting projects and auditing security systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19327,
                "name" => json_encode([
                    "pl" => "Wdrażanie procedur ochrony danych i mienia.",
                    "en" => "Implementing data and asset protection procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19328,
                "name" => json_encode([
                    "pl" => "Monitorowanie technologii w zakresie zabezpieczeń.",
                    "en" => "Monitoring technologies in the field of security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TECHNOLOG_PROGRAMISTA_OBRABIAREK = [

            [
                "id" => 19329,
                "name" => json_encode([
                    "pl" => "Programowanie maszyn CNC i obrabiarek.",
                    "en" => "Programming CNC machines and machine tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19330,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów obróbki materiałów.",
                    "en" => "Optimizing material machining processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19331,
                "name" => json_encode([
                    "pl" => "Tworzenie programów produkcyjnych zgodnie z dokumentacją techniczną.",
                    "en" => "Creating production programs based on technical documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19332,
                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją procesów obróbki.",
                    "en" => "Supervising the implementation of machining processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19333,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii i metod produkcji.",
                    "en" => "Implementing new technologies and production methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19334,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów technicznych podczas obróbki.",
                    "en" => "Resolving technical issues during machining."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19335,
                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń dla operatorów maszyn CNC.",
                    "en" => "Conducting training sessions for CNC machine operators."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19336,
                "name" => json_encode([
                    "pl" => "Monitorowanie i optymalizacja efektywności maszyn.",
                    "en" => "Monitoring and optimizing machine efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19337,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesów technologicznych.",
                    "en" => "Documenting technological processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MISTRZOWIE_PRODUKCJI_W_PRZEMYŚLE_PRZETWÓRCZYM = [

            [
                "id" => 19338,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesami produkcyjnymi i zespołem pracowników.",
                    "en" => "Supervising production processes and employee teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19339,
                "name" => json_encode([
                    "pl" => "Zapewnienie efektywności i jakości produkcji.",
                    "en" => "Ensuring efficiency and quality in production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19340,
                "name" => json_encode([
                    "pl" => "Planowanie i organizacja pracy na zmianach produkcyjnych.",
                    "en" => "Planning and organizing work on production shifts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19341,
                "name" => json_encode([
                    "pl" => "Monitorowanie zużycia surowców i materiałów.",
                    "en" => "Monitoring raw material and resource consumption."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19342,
                "name" => json_encode([
                    "pl" => "Wdrażanie usprawnień procesów produkcyjnych.",
                    "en" => "Implementing improvements in production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19343,
                "name" => json_encode([
                    "pl" => "Odpowiedzialność za bezpieczeństwo pracy na produkcji.",
                    "en" => "Ensuring workplace safety in production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19344,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów technicznych w czasie rzeczywistym.",
                    "en" => "Solving technical problems in real time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19345,
                "name" => json_encode([
                    "pl" => "Kontrola przestrzegania procedur i norm jakościowych.",
                    "en" => "Ensuring adherence to procedures and quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19346,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów dotyczących produkcji.",
                    "en" => "Preparing production reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $SPECJALISCI_DO_SPRAW_OCHRONY_SRODOWISKA = [

            [
                "id" => 19347,
                "name" => json_encode([
                    "pl" => "Monitorowanie i raportowanie stanu środowiska.",
                    "en" => "Monitoring and reporting on the state of the environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19348,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie polityki ochrony środowiska.",
                    "en" => "Developing and implementing environmental protection policies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19349,
                "name" => json_encode([
                    "pl" => "Analiza i ocena wpływu działalności na środowisko.",
                    "en" => "Analyzing and assessing the impact of activities on the environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19350,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie przestrzegania przepisów środowiskowych.",
                    "en" => "Advising on compliance with environmental regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19351,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji środowiskowej.",
                    "en" => "Preparing environmental documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19352,
                "name" => json_encode([
                    "pl" => "Wdrażanie programów redukcji zanieczyszczeń.",
                    "en" => "Implementing pollution reduction programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19353,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów środowiskowych.",
                    "en" => "Conducting environmental audits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19354,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami zajmującymi się ochroną środowiska.",
                    "en" => "Collaborating with environmental protection institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19355,
                "name" => json_encode([
                    "pl" => "Organizowanie szkoleń z zakresu ochrony środowiska.",
                    "en" => "Organizing training in environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $INSPEKTOR_OCHRONY_SRODOWISKA = [

            [
                "id" => 19356,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli przestrzegania przepisów środowiskowych.",
                    "en" => "Conducting inspections for compliance with environmental regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19357,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów z inspekcji i analiz stanu środowiska.",
                    "en" => "Preparing inspection reports and analyzing the state of the environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19358,
                "name" => json_encode([
                    "pl" => "Weryfikacja działalności przedsiębiorstw pod kątem ochrony środowiska.",
                    "en" => "Verifying businesses' activities in terms of environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19359,
                "name" => json_encode([
                    "pl" => "Wydawanie decyzji administracyjnych w zakresie ochrony środowiska.",
                    "en" => "Issuing administrative decisions related to environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19360,
                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją działań naprawczych.",
                    "en" => "Supervising the implementation of remedial actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19361,
                "name" => json_encode([
                    "pl" => "Analiza zgłoszeń i interwencje w przypadku zagrożeń środowiskowych.",
                    "en" => "Analyzing reports and intervening in cases of environmental threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19362,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi organami nadzoru.",
                    "en" => "Collaborating with other supervisory bodies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19363,
                "name" => json_encode([
                    "pl" => "Prowadzenie postępowań wyjaśniających i administracyjnych.",
                    "en" => "Conducting investigative and administrative proceedings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19364,
                "name" => json_encode([
                    "pl" => "Udział w kampaniach edukacyjnych dotyczących ochrony środowiska.",
                    "en" => "Participating in educational campaigns on environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $OPERATOR_MASZYN_I_URZADZEN_W_GOSPODARCE_ODPADAMI = [

            [
                "id" => 19365,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do przetwarzania i recyklingu odpadów.",
                    "en" => "Operating machines for waste processing and recycling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19366,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesami sortowania i segregacji odpadów.",
                    "en" => "Supervising waste sorting and segregation processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19367,
                "name" => json_encode([
                    "pl" => "Dbanie o stan techniczny maszyn i ich konserwacja.",
                    "en" => "Maintaining the technical condition of machines and performing maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19368,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur dotyczących bezpieczeństwa pracy.",
                    "en" => "Adhering to workplace safety procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19369,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem w zakresie utrzymania czystości i porządku.",
                    "en" => "Collaborating with the team to maintain cleanliness and order."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19370,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów pracy urządzeń.",
                    "en" => "Monitoring device operating parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19371,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej i operacyjnej.",
                    "en" => "Maintaining technical and operational documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19372,
                "name" => json_encode([
                    "pl" => "Utrzymanie efektywności procesów przetwarzania odpadów.",
                    "en" => "Ensuring the efficiency of waste processing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19373,
                "name" => json_encode([
                    "pl" => "Reagowanie na awarie i usuwanie usterek maszyn.",
                    "en" => "Responding to breakdowns and fixing machine malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $SPECJALISCI_DO_SPRAW_HIGIENY_BEZPIECZENSTWA_PRACY_I_OCHRONY_SRODOWISKA = [

            [
                "id" => 19374,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie procedur BHP.",
                    "en" => "Developing and implementing occupational health and safety procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19375,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szkoleń z zakresu higieny pracy i bezpieczeństwa.",
                    "en" => "Conducting training on workplace hygiene and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19376,
                "name" => json_encode([
                    "pl" => "Analiza ryzyka zawodowego na stanowiskach pracy.",
                    "en" => "Analyzing occupational risks at workplaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19377,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli przestrzegania przepisów BHP.",
                    "en" => "Conducting inspections to ensure compliance with occupational health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19378,
                "name" => json_encode([
                    "pl" => "Wdrażanie programów ochrony środowiska w przedsiębiorstwie.",
                    "en" => "Implementing environmental protection programs in the company."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19379,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków pracy i podejmowanie działań naprawczych.",
                    "en" => "Monitoring working conditions and implementing corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19380,
                "name" => json_encode([
                    "pl" => "Dokumentowanie incydentów i prowadzenie raportów.",
                    "en" => "Documenting incidents and preparing reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19381,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami nadzoru nad BHP.",
                    "en" => "Collaborating with occupational health and safety oversight institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19382,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie ergonomii i poprawy warunków pracy.",
                    "en" => "Advising on ergonomics and improving working conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $AUDYTOR_KONTROLER = [

            [
                "id" => 19383,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów wewnętrznych i zewnętrznych.",
                    "en" => "Conducting internal and external audits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19384,
                "name" => json_encode([
                    "pl" => "Ocena zgodności procesów z przepisami i standardami.",
                    "en" => "Assessing process compliance with regulations and standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19385,
                "name" => json_encode([
                    "pl" => "Analiza dokumentacji i procedur organizacyjnych.",
                    "en" => "Analyzing documentation and organizational procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19386,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów z przeprowadzonych kontroli.",
                    "en" => "Preparing reports on conducted audits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19387,
                "name" => json_encode([
                    "pl" => "Wskazywanie obszarów wymagających poprawy i wdrażanie rekomendacji.",
                    "en" => "Identifying areas for improvement and implementing recommendations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19388,
                "name" => json_encode([
                    "pl" => "Monitorowanie wdrażania zaleceń pokontrolnych.",
                    "en" => "Monitoring the implementation of post-audit recommendations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19389,
                "name" => json_encode([
                    "pl" => "Identyfikowanie ryzyk związanych z działalnością firmy.",
                    "en" => "Identifying risks associated with the company's activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19390,
                "name" => json_encode([
                    "pl" => "Współpraca z działami organizacji w celu poprawy procesów.",
                    "en" => "Collaborating with organizational departments to improve processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19391,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie zgodności z przepisami i normami.",
                    "en" => "Providing advice on compliance with regulations and standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $INSPEKTOR_SANITARNY = [

            [
                "id" => 19392,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli higienicznych w obiektach publicznych i przedsiębiorstwach.",
                    "en" => "Conducting hygiene inspections in public facilities and businesses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19393,
                "name" => json_encode([
                    "pl" => "Weryfikacja przestrzegania przepisów sanitarnych.",
                    "en" => "Verifying compliance with sanitary regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19394,
                "name" => json_encode([
                    "pl" => "Pobieranie próbek do badań laboratoryjnych.",
                    "en" => "Collecting samples for laboratory testing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19395,
                "name" => json_encode([
                    "pl" => "Wydawanie zaleceń i decyzji administracyjnych.",
                    "en" => "Issuing recommendations and administrative decisions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19396,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów i dokumentacji z inspekcji.",
                    "en" => "Preparing reports and documentation from inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19397,
                "name" => json_encode([
                    "pl" => "Nadzorowanie warunków higieny w obiektach gastronomicznych, szpitalach, szkołach.",
                    "en" => "Overseeing hygiene conditions in restaurants, hospitals, and schools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19398,
                "name" => json_encode([
                    "pl" => "Udzielanie instrukcji i porad dotyczących zapobiegania zagrożeniom sanitarnym.",
                    "en" => "Providing instructions and advice on preventing sanitary hazards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19399,
                "name" => json_encode([
                    "pl" => "Prowadzenie działań edukacyjnych w zakresie zdrowia publicznego.",
                    "en" => "Conducting educational activities in public health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19400,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi instytucjami zajmującymi się ochroną zdrowia.",
                    "en" => "Collaborating with other health protection institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $RZECZOZNAWCA = [

            [
                "id" => 19401,
                "name" => json_encode([
                    "pl" => "Opracowywanie ekspertyz i opinii technicznych w swojej dziedzinie.",
                    "en" => "Preparing expert reports and technical opinions in their field."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19402,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ocen stanu technicznego obiektów lub urządzeń.",
                    "en" => "Conducting assessments of the technical condition of objects or devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19403,
                "name" => json_encode([
                    "pl" => "Wycena wartości przedmiotów, nieruchomości, czy maszyn.",
                    "en" => "Valuing items, properties, or machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19404,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji z przeprowadzonych ekspertyz.",
                    "en" => "Maintaining documentation from conducted expert evaluations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19405,
                "name" => json_encode([
                    "pl" => "Współpraca z sądami, firmami ubezpieczeniowymi i instytucjami finansowymi.",
                    "en" => "Collaborating with courts, insurance companies, and financial institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19406,
                "name" => json_encode([
                    "pl" => "Analiza danych i dokumentów technicznych.",
                    "en" => "Analyzing data and technical documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19407,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie oceny technicznej lub rynkowej.",
                    "en" => "Advising on technical or market evaluations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19408,
                "name" => json_encode([
                    "pl" => "Wydawanie certyfikatów zgodności i jakości.",
                    "en" => "Issuing compliance and quality certificates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19409,
                "name" => json_encode([
                    "pl" => "Udział w procesach rozstrzygania sporów jako biegły.",
                    "en" => "Participating in dispute resolution processes as an expert."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $RZECZNIK_PRAW_KONSUMENTA = [

            [
                "id" => 19410,
                "name" => json_encode([
                    "pl" => "Ochrona interesów konsumentów.",
                    "en" => "Protection of consumer interests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19411,
                "name" => json_encode([
                    "pl" => "Prowadzenie mediacji między konsumentami a przedsiębiorcami.",
                    "en" => "Conducting mediation between consumers and businesses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19412,
                "name" => json_encode([
                    "pl" => "Udzielanie porad prawnych dotyczących praw konsumenckich.",
                    "en" => "Providing legal advice on consumer rights."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19413,
                "name" => json_encode([
                    "pl" => "Reprezentowanie konsumentów w sporach sądowych i administracyjnych.",
                    "en" => "Representing consumers in legal and administrative disputes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19414,
                "name" => json_encode([
                    "pl" => "Organizowanie kampanii edukacyjnych na temat praw konsumenta.",
                    "en" => "Organizing educational campaigns about consumer rights."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19415,
                "name" => json_encode([
                    "pl" => "Przyjmowanie skarg i wniosków od konsumentów.",
                    "en" => "Receiving complaints and applications from consumers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19416,
                "name" => json_encode([
                    "pl" => "Analiza przypadków naruszeń praw konsumentów.",
                    "en" => "Analyzing cases of consumer rights violations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19417,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami i organizacjami konsumenckimi.",
                    "en" => "Cooperating with consumer institutions and organizations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19418,
                "name" => json_encode([
                    "pl" => "Monitorowanie przepisów prawnych i ich zmian.",
                    "en" => "Monitoring legal regulations and their changes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $PROJEKTANCI_WZORNICTWA_PRZEMYSŁOWEGO_I_ODZIEŻY = [

            [
                "id" => 19419,
                "name" => json_encode([
                    "pl" => "Tworzenie projektów produktów przemysłowych lub odzieży.",
                    "en" => "Creating designs for industrial products or clothing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19420,
                "name" => json_encode([
                    "pl" => "Dobór materiałów i technik produkcji.",
                    "en" => "Selecting materials and production techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19421,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań rynku i analiza trendów wzorniczych.",
                    "en" => "Conducting market research and analyzing design trends."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19422,
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami i działem produkcji w celu wdrożenia projektów.",
                    "en" => "Collaborating with engineers and production teams to implement designs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19423,
                "name" => json_encode([
                    "pl" => "Przygotowywanie prototypów i modeli.",
                    "en" => "Preparing prototypes and models."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19424,
                "name" => json_encode([
                    "pl" => "Testowanie produktów pod względem funkcjonalności i estetyki.",
                    "en" => "Testing products for functionality and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19425,
                "name" => json_encode([
                    "pl" => "Opracowywanie dokumentacji technicznej projektów.",
                    "en" => "Developing technical documentation for designs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19426,
                "name" => json_encode([
                    "pl" => "Wdrażanie innowacyjnych rozwiązań projektowych.",
                    "en" => "Implementing innovative design solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19427,
                "name" => json_encode([
                    "pl" => "Udział w prezentacjach i wystawach wzorniczych.",
                    "en" => "Participating in design presentations and exhibitions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $OPERATOR_CAD = [

            [
                "id" => 19428,
                "name" => json_encode([
                    "pl" => "Tworzenie projektów i modeli 3D za pomocą oprogramowania CAD.",
                    "en" => "Creating 3D designs and models using CAD software."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19429,
                "name" => json_encode([
                    "pl" => "Wprowadzanie zmian i modyfikacji w istniejących projektach.",
                    "en" => "Making changes and modifications to existing designs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19430,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji technicznej na podstawie rysunków.",
                    "en" => "Preparing technical documentation based on drawings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19431,
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami i projektantami w celu realizacji projektów.",
                    "en" => "Collaborating with engineers and designers to execute projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19432,
                "name" => json_encode([
                    "pl" => "Utrzymywanie dokładności i zgodności projektów z wymaganiami.",
                    "en" => "Ensuring accuracy and compliance of designs with requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19433,
                "name" => json_encode([
                    "pl" => "Konwersja rysunków technicznych na modele cyfrowe.",
                    "en" => "Converting technical drawings into digital models."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19434,
                "name" => json_encode([
                    "pl" => "Optymalizacja projektów pod kątem produkcji.",
                    "en" => "Optimizing designs for production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19435,
                "name" => json_encode([
                    "pl" => "Archiwizacja dokumentacji i modeli CAD.",
                    "en" => "Archiving CAD documentation and models."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19436,
                "name" => json_encode([
                    "pl" => "Wspieranie zespołu w analizie i symulacjach projektowych.",
                    "en" => "Supporting the team in project analysis and simulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $OPERATORZY_MASZYN_I_URZADZEN_DO_PRZEROBKI_MECHANICZNEJ_KOPALIN = [

            [
                "id" => 19437,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do przeróbki i segregacji kopalin.",
                    "en" => "Operating machines for processing and sorting minerals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19438,
                "name" => json_encode([
                    "pl" => "Kontrola parametrów pracy urządzeń.",
                    "en" => "Monitoring operational parameters of equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19439,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem sortowania i kruszenia surowców.",
                    "en" => "Supervising the process of sorting and crushing raw materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19440,
                "name" => json_encode([
                    "pl" => "Utrzymywanie maszyn w dobrym stanie technicznym.",
                    "en" => "Maintaining machines in good technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19441,
                "name" => json_encode([
                    "pl" => "Wykonywanie bieżących napraw i konserwacji.",
                    "en" => "Performing routine repairs and maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19442,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości wydobytych kopalin.",
                    "en" => "Monitoring the quality of extracted minerals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19443,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur bezpieczeństwa pracy.",
                    "en" => "Adhering to workplace safety procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19444,
                "name" => json_encode([
                    "pl" => "Raportowanie ewentualnych awarii i nieprawidłowości.",
                    "en" => "Reporting any malfunctions and irregularities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19445,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem produkcyjnym.",
                    "en" => "Collaborating with the production team."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $OPERATORZY_URZADZEN_WIERTNICZYCH_I_WYDOBYWCZYCH_ROPY_GAZU_I_INNYCH_SUROWCOW = [

            [
                "id" => 19446,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do przeróbki i segregacji kopalin.",
                    "en" => "Operating machines for processing and sorting minerals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19447,
                "name" => json_encode([
                    "pl" => "Kontrola parametrów pracy urządzeń.",
                    "en" => "Monitoring operational parameters of equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19448,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem sortowania i kruszenia surowców.",
                    "en" => "Supervising the process of sorting and crushing raw materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19449,
                "name" => json_encode([
                    "pl" => "Utrzymywanie maszyn w dobrym stanie technicznym.",
                    "en" => "Maintaining machines in good technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19450,
                "name" => json_encode([
                    "pl" => "Wykonywanie bieżących napraw i konserwacji.",
                    "en" => "Performing routine repairs and maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19451,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości wydobytych kopalin.",
                    "en" => "Monitoring the quality of extracted minerals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19452,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur bezpieczeństwa pracy.",
                    "en" => "Adhering to workplace safety procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19453,
                "name" => json_encode([
                    "pl" => "Raportowanie ewentualnych awarii i nieprawidłowości.",
                    "en" => "Reporting any malfunctions and irregularities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $STRZALOWI_I_POKREWNI = [

            [
                "id" => 19454,
                "name" => json_encode([
                    "pl" => "Przygotowywanie materiałów wybuchowych do prac strzałowych.",
                    "en" => "Preparing explosives for blasting operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19455,
                "name" => json_encode([
                    "pl" => "Wykonywanie robót strzałowych w górnictwie lub budownictwie.",
                    "en" => "Carrying out blasting operations in mining or construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19456,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów rozmieszczenia ładunków wybuchowych.",
                    "en" => "Developing plans for placing explosive charges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19457,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur bezpieczeństwa podczas prac strzałowych.",
                    "en" => "Following safety procedures during blasting operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19458,
                "name" => json_encode([
                    "pl" => "Monitorowanie efektów wybuchów i analiza wyników.",
                    "en" => "Monitoring the effects of explosions and analyzing results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19459,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji prac strzałowych.",
                    "en" => "Maintaining records of blasting operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19460,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem górniczym lub budowlanym.",
                    "en" => "Collaborating with mining or construction teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19461,
                "name" => json_encode([
                    "pl" => "Wykonywanie czynności zabezpieczających teren przed i po wybuchu.",
                    "en" => "Performing safety measures for the area before and after explosions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19462,
                "name" => json_encode([
                    "pl" => "Utrzymanie materiałów wybuchowych w odpowiednich warunkach.",
                    "en" => "Maintaining explosives in proper conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $GORNICY_PODZIEMNEJ_I_ODKRYWKOWEJ_EKSPLOATACJI_ZLOZ_I_POKREWNI = [

            [
                "id" => 19463,
                "name" => json_encode([
                    "pl" => "Wydobywanie surowców mineralnych w kopalniach podziemnych lub odkrywkowych.",
                    "en" => "Extracting mineral resources in underground or open-pit mines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19464,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń górniczych.",
                    "en" => "Operating mining machinery and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19465,
                "name" => json_encode([
                    "pl" => "Wzmacnianie i zabezpieczanie wyrobisk górniczych.",
                    "en" => "Reinforcing and securing mining excavations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19466,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa i ochrony zdrowia w pracy.",
                    "en" => "Adhering to safety and health protection regulations at work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19467,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu technicznego maszyn i urządzeń.",
                    "en" => "Monitoring the technical condition of machinery and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19468,
                "name" => json_encode([
                    "pl" => "Usuwanie awarii i przeprowadzanie napraw sprzętu.",
                    "en" => "Repairing and addressing machinery breakdowns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19469,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wydobywanych surowców.",
                    "en" => "Quality control of extracted raw materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19470,
                "name" => json_encode([
                    "pl" => "Wykonywanie czynności związanych z transportem urobku.",
                    "en" => "Performing tasks related to the transportation of extracted materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19471,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji pracy i raportowanie wyników.",
                    "en" => "Maintaining work documentation and reporting results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TECHNIK_CERAMIK = [

            [
                "id" => 19472,
                "name" => json_encode([
                    "pl" => "Przygotowywanie surowców i mas ceramicznych do produkcji.",
                    "en" => "Preparing raw materials and ceramic masses for production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19473,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem formowania i wypalania wyrobów ceramicznych.",
                    "en" => "Supervising the molding and firing process of ceramic products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19474,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produktów ceramicznych.",
                    "en" => "Quality control of ceramic products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19475,
                "name" => json_encode([
                    "pl" => "Odpowiedzialność za właściwe parametry wypalania.",
                    "en" => "Ensuring proper firing parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19476,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów wytrzymałościowych i estetycznych.",
                    "en" => "Conducting strength and aesthetic tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19477,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń do produkcji ceramiki.",
                    "en" => "Operating machines and equipment for ceramic production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19478,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych metod i technologii w produkcji ceramicznej.",
                    "en" => "Implementing new methods and technologies in ceramic production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19479,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesów produkcyjnych.",
                    "en" => "Documenting production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19480,
                "name" => json_encode([
                    "pl" => "Współpraca z projektantami i działem technologicznym.",
                    "en" => "Collaborating with designers and the technology department."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $OPERATORZY_URZADZEN_DO_PRODUKCJI_WYROBOW_SZKLANYCH_I_CERAMICZNYCH = [

            [
                "id" => 19481,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do formowania i wypalania wyrobów szklanych i ceramicznych.",
                    "en" => "Operating machines for molding and firing glass and ceramic products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19482,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów procesów produkcyjnych.",
                    "en" => "Monitoring production process parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19483,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli jakości gotowych wyrobów.",
                    "en" => "Conducting quality control of finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19484,
                "name" => json_encode([
                    "pl" => "Utrzymywanie maszyn w dobrym stanie technicznym.",
                    "en" => "Maintaining machines in good technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19485,
                "name" => json_encode([
                    "pl" => "Usuwanie awarii i przeprowadzanie drobnych napraw.",
                    "en" => "Troubleshooting and performing minor repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19486,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP i procedur technologicznych.",
                    "en" => "Adhering to safety regulations and technological procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19487,
                "name" => json_encode([
                    "pl" => "Praca nad optymalizacją procesów produkcyjnych.",
                    "en" => "Working on optimizing production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19488,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem produkcyjnym.",
                    "en" => "Collaborating with the production team."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19489,
                "name" => json_encode([
                    "pl" => "Raportowanie wyników produkcji i ewentualnych problemów.",
                    "en" => "Reporting production results and potential issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $ZLOTNIK_JUBILER = [

            [
                "id" => 19490,
                "name" => json_encode([
                    "pl" => "Projektowanie i tworzenie wyrobów jubilerskich ze złota i innych metali szlachetnych.",
                    "en" => "Designing and creating jewelry from gold and other precious metals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19491,
                "name" => json_encode([
                    "pl" => "Obróbka, polerowanie i lutowanie elementów biżuterii.",
                    "en" => "Processing, polishing, and soldering jewelry components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19492,
                "name" => json_encode([
                    "pl" => "Osadzanie kamieni szlachetnych i wykonywanie zdobień.",
                    "en" => "Setting gemstones and creating decorations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19493,
                "name" => json_encode([
                    "pl" => "Naprawa i renowacja biżuterii.",
                    "en" => "Repairing and restoring jewelry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19494,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów jakości i autentyczności metali i kamieni.",
                    "en" => "Conducting quality and authenticity tests for metals and stones."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19495,
                "name" => json_encode([
                    "pl" => "Wycena i analiza wartości biżuterii.",
                    "en" => "Appraising and analyzing the value of jewelry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19496,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn jubilerskich i narzędzi ręcznych.",
                    "en" => "Operating jewelry machines and hand tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19497,
                "name" => json_encode([
                    "pl" => "Tworzenie modeli biżuterii w oparciu o projekty.",
                    "en" => "Creating jewelry models based on designs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19498,
                "name" => json_encode([
                    "pl" => "Współpraca z klientami w zakresie projektowania indywidualnych wyrobów.",
                    "en" => "Collaborating with clients to design custom jewelry pieces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $PRACOWNICY_PRZYGOTOWAWCZY_DRUK = [

            [
                "id" => 19499,
                "name" => json_encode([
                    "pl" => "Przygotowywanie materiałów i form drukarskich.",
                    "en" => "Preparing printing materials and forms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19500,
                "name" => json_encode([
                    "pl" => "Sprawdzanie poprawności projektów i ustawień maszyn.",
                    "en" => "Checking the correctness of designs and machine settings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19501,
                "name" => json_encode([
                    "pl" => "Kalibracja urządzeń drukarskich przed rozpoczęciem produkcji.",
                    "en" => "Calibrating printing devices before starting production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19502,
                "name" => json_encode([
                    "pl" => "Kontrola jakości próbnych odbitek.",
                    "en" => "Quality control of test prints."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19503,
                "name" => json_encode([
                    "pl" => "Wprowadzanie korekt i modyfikacji w projektach.",
                    "en" => "Making corrections and modifications to designs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19504,
                "name" => json_encode([
                    "pl" => "Współpraca z grafikami i drukarzami w celu optymalizacji druku.",
                    "en" => "Collaborating with graphic designers and printers to optimize printing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19505,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej przygotowania do druku.",
                    "en" => "Maintaining documentation related to print preparation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19506,
                "name" => json_encode([
                    "pl" => "Czyszczenie i konserwacja sprzętu drukarskiego.",
                    "en" => "Cleaning and maintaining printing equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19507,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm i standardów jakościowych w procesie przygotowania.",
                    "en" => "Adhering to quality norms and standards in the preparation process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $DRUKARZE = [

            [
                "id" => 19508,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn drukarskich i urządzeń pomocniczych.",
                    "en" => "Operating printing machines and auxiliary devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19509,
                "name" => json_encode([
                    "pl" => "Przygotowywanie maszyn do druku, w tym ustawianie parametrów technicznych.",
                    "en" => "Preparing printing machines, including setting technical parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19510,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wydruków i bieżąca korekta ustawień.",
                    "en" => "Quality control of prints and real-time adjustment of settings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19511,
                "name" => json_encode([
                    "pl" => "Wykonywanie próbnych odbitek i wprowadzanie poprawek.",
                    "en" => "Creating test prints and making corrections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19512,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu drukowania i reagowanie na awarie.",
                    "en" => "Monitoring the printing process and addressing malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19513,
                "name" => json_encode([
                    "pl" => "Czyszczenie, konserwacja i bieżące naprawy maszyn drukarskich.",
                    "en" => "Cleaning, maintaining, and performing minor repairs on printing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19514,
                "name" => json_encode([
                    "pl" => "Przygotowywanie form drukarskich i materiałów do produkcji.",
                    "en" => "Preparing printing forms and materials for production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19515,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm jakościowych i standardów drukarskich.",
                    "en" => "Adhering to quality norms and printing standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19516,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji produkcyjnej i raportowanie wyników.",
                    "en" => "Maintaining production documentation and reporting results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $STOLARZE_MEBLOWI_I_POKREWNI = [

            [
                "id" => 19517,
                "name" => json_encode([
                    "pl" => "Wykonywanie mebli z drewna i materiałów drewnopochodnych.",
                    "en" => "Creating furniture from wood and wood-based materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19518,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi ręcznych i maszyn stolarskich.",
                    "en" => "Operating hand tools and woodworking machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19519,
                "name" => json_encode([
                    "pl" => "Cięcie, klejenie, frezowanie i montaż elementów meblowych.",
                    "en" => "Cutting, gluing, milling, and assembling furniture components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19520,
                "name" => json_encode([
                    "pl" => "Wykonywanie renowacji i napraw mebli.",
                    "en" => "Performing furniture restoration and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19521,
                "name" => json_encode([
                    "pl" => "Obróbka i wykańczanie powierzchni drewna, np. lakierowanie.",
                    "en" => "Processing and finishing wood surfaces, e.g., lacquering."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19522,
                "name" => json_encode([
                    "pl" => "Odczytywanie rysunków technicznych i projektów mebli.",
                    "en" => "Reading technical drawings and furniture designs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19523,
                "name" => json_encode([
                    "pl" => "Montaż gotowych mebli w warsztacie lub u klienta.",
                    "en" => "Assembling finished furniture in the workshop or at the client's location."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19524,
                "name" => json_encode([
                    "pl" => "Dbałość o bezpieczeństwo pracy i stosowanie środków ochrony.",
                    "en" => "Ensuring work safety and using protective measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19525,
                "name" => json_encode([
                    "pl" => "Przechowywanie i organizowanie materiałów stolarskich.",
                    "en" => "Storing and organizing woodworking materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $OPERATORZY_MASZYN_I_URZĄDZEŃ_DO_OBRÓBKI_DREWNA = [

            [
                "id" => 19526,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do cięcia, frezowania, szlifowania i obróbki drewna.",
                    "en" => "Operating machines for cutting, milling, sanding, and processing wood."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19527,
                "name" => json_encode([
                    "pl" => "Ustawianie parametrów maszyn zgodnie z dokumentacją techniczną.",
                    "en" => "Setting machine parameters according to technical documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19528,
                "name" => json_encode([
                    "pl" => "Kontrola jakości obrabianych elementów drewnianych.",
                    "en" => "Quality control of processed wooden elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19529,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji i drobnych napraw maszyn.",
                    "en" => "Performing maintenance and minor repairs on machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19530,
                "name" => json_encode([
                    "pl" => "Monitorowanie zużycia materiałów i narzędzi.",
                    "en" => "Monitoring material and tool usage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19531,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur bezpieczeństwa i higieny pracy.",
                    "en" => "Following safety and workplace hygiene procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19532,
                "name" => json_encode([
                    "pl" => "Segregacja i magazynowanie gotowych elementów.",
                    "en" => "Sorting and storing finished elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19533,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami produkcji.",
                    "en" => "Collaborating with other production workers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19534,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej procesów obróbki.",
                    "en" => "Maintaining documentation related to processing operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $SZKUTNIK = [

            [
                "id" => 19535,
                "name" => json_encode([
                    "pl" => "Budowa, naprawa i konserwacja łodzi i jachtów drewnianych.",
                    "en" => "Construction, repair, and maintenance of wooden boats and yachts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19536,
                "name" => json_encode([
                    "pl" => "Odczytywanie i realizacja projektów szkutniczych.",
                    "en" => "Reading and implementing shipbuilding projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19537,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów do budowy jednostek pływających.",
                    "en" => "Selecting appropriate materials for constructing watercraft."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19538,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac stolarskich i montażowych na kadłubach łodzi.",
                    "en" => "Performing carpentry and assembly work on boat hulls."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19539,
                "name" => json_encode([
                    "pl" => "Uszczelnianie i impregnacja drewna wodoodpornymi środkami.",
                    "en" => "Sealing and impregnating wood with waterproofing agents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19540,
                "name" => json_encode([
                    "pl" => "Instalacja wyposażenia pokładowego i elementów konstrukcyjnych.",
                    "en" => "Installing deck equipment and structural components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19541,
                "name" => json_encode([
                    "pl" => "Renowacja starych łodzi i jachtów.",
                    "en" => "Renovating old boats and yachts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19542,
                "name" => json_encode([
                    "pl" => "Sprawdzanie szczelności i funkcjonalności gotowych jednostek.",
                    "en" => "Checking the tightness and functionality of finished watercraft."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19543,
                "name" => json_encode([
                    "pl" => "Praca w zgodzie z przepisami bezpieczeństwa wodnego.",
                    "en" => "Working in compliance with water safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MONTER_MEBLI = [

            [
                "id" => 19544,
                "name" => json_encode([
                    "pl" => "Montaż mebli w zakładach produkcyjnych lub u klienta.",
                    "en" => "Assembling furniture in production facilities or at the client's location."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19545,
                "name" => json_encode([
                    "pl" => "Odczytywanie instrukcji montażowych i rysunków technicznych.",
                    "en" => "Reading assembly instructions and technical drawings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19546,
                "name" => json_encode([
                    "pl" => "Sprawdzanie kompletności elementów meblowych przed montażem.",
                    "en" => "Checking the completeness of furniture components before assembly."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19547,
                "name" => json_encode([
                    "pl" => "Regulacja zawiasów, prowadnic i innych mechanizmów meblowych.",
                    "en" => "Adjusting hinges, guides, and other furniture mechanisms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19548,
                "name" => json_encode([
                    "pl" => "Dbałość o estetykę i precyzję montażu.",
                    "en" => "Ensuring aesthetics and precision in assembly."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19549,
                "name" => json_encode([
                    "pl" => "Pakowanie i zabezpieczanie mebli do transportu.",
                    "en" => "Packing and securing furniture for transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19550,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w miejscu pracy.",
                    "en" => "Maintaining cleanliness in the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19551,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi montażowych, takich jak wkrętarki, ściski, młotki.",
                    "en" => "Operating assembly tools such as screwdrivers, clamps, and hammers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19552,
                "name" => json_encode([
                    "pl" => "Usuwanie drobnych usterek i naprawa uszkodzonych elementów.",
                    "en" => "Fixing minor defects and repairing damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MONTER_JACHTOW_I_LODZI = [

            [
                "id" => 19553,
                "name" => json_encode([
                    "pl" => "Montaż elementów kadłuba i wyposażenia jachtów oraz łodzi.",
                    "en" => "Assembly of hull components and equipment for yachts and boats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19554,
                "name" => json_encode([
                    "pl" => "Instalowanie systemów hydraulicznych, elektrycznych i nawigacyjnych.",
                    "en" => "Installing hydraulic, electrical, and navigation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19555,
                "name" => json_encode([
                    "pl" => "Praca zgodnie z planami technicznymi i projektami jednostek.",
                    "en" => "Working in accordance with technical plans and vessel designs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19556,
                "name" => json_encode([
                    "pl" => "Kontrola jakości zamontowanych elementów i systemów.",
                    "en" => "Quality control of installed components and systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19557,
                "name" => json_encode([
                    "pl" => "Uszczelnianie i zabezpieczanie powierzchni wodoodpornymi materiałami.",
                    "en" => "Sealing and securing surfaces with waterproof materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19558,
                "name" => json_encode([
                    "pl" => "Testowanie gotowych jednostek pod kątem szczelności i bezpieczeństwa.",
                    "en" => "Testing finished units for watertightness and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19559,
                "name" => json_encode([
                    "pl" => "Współpraca z projektantami i szkutnikami w realizacji projektów.",
                    "en" => "Collaborating with designers and shipwrights in project execution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19560,
                "name" => json_encode([
                    "pl" => "Konserwacja i serwisowanie jachtów oraz łodzi.",
                    "en" => "Maintaining and servicing yachts and boats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19561,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów bezpieczeństwa na wodzie.",
                    "en" => "Adhering to water safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TECHNIK_TECHNOLOGII_ODZIEZY = [

            [
                "id" => 19562,
                "name" => json_encode([
                    "pl" => "Projektowanie i opracowywanie technologii produkcji odzieży.",
                    "en" => "Designing and developing clothing production technology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19563,
                "name" => json_encode([
                    "pl" => "Dobór materiałów i akcesoriów do produkcji.",
                    "en" => "Selecting materials and accessories for production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19564,
                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej odzieży.",
                    "en" => "Creating technical documentation for clothing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19565,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie prób i testów materiałów odzieżowych.",
                    "en" => "Conducting trials and tests of clothing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19566,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesu produkcji odzieży i kontrola jakości.",
                    "en" => "Supervising the clothing production process and quality control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19567,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii w procesie szycia i wykończenia.",
                    "en" => "Implementing new technologies in sewing and finishing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19568,
                "name" => json_encode([
                    "pl" => "Obsługa i programowanie maszyn krawieckich.",
                    "en" => "Operating and programming sewing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19569,
                "name" => json_encode([
                    "pl" => "Udział w opracowywaniu kolekcji odzieżowych.",
                    "en" => "Participating in the development of clothing collections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19570,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych pod kątem efektywności.",
                    "en" => "Optimizing production processes for efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $KRAWCY_KUSNIERZE_KAPELUSZNICY_I_POKREWNI = [

            [
                "id" => 19571,
                "name" => json_encode([
                    "pl" => "Szycie i przeróbki odzieży na zamówienie.",
                    "en" => "Sewing and altering clothing to order."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19572,
                "name" => json_encode([
                    "pl" => "Dopasowywanie ubrań do sylwetki klienta.",
                    "en" => "Fitting clothing to the client's body shape."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19573,
                "name" => json_encode([
                    "pl" => "Projektowanie i tworzenie nowych wzorów odzieżowych.",
                    "en" => "Designing and creating new clothing patterns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19574,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn krawieckich i narzędzi do szycia ręcznego.",
                    "en" => "Operating sewing machines and hand sewing tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19575,
                "name" => json_encode([
                    "pl" => "Renowacja i naprawa odzieży oraz dodatków.",
                    "en" => "Renovating and repairing clothing and accessories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19576,
                "name" => json_encode([
                    "pl" => "Wykonywanie wyrobów futrzanych (kuśnierze) lub kapeluszy (kapelusznicy).",
                    "en" => "Creating fur products (furriers) or hats (hatmakers)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19577,
                "name" => json_encode([
                    "pl" => "Dobór materiałów i dodatków pasmanteryjnych.",
                    "en" => "Selecting fabrics and haberdashery accessories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19578,
                "name" => json_encode([
                    "pl" => "Przestrzeganie trendów w modzie i wdrażanie nowoczesnych wzorów.",
                    "en" => "Following fashion trends and implementing modern designs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19579,
                "name" => json_encode([
                    "pl" => "Dbanie o estetykę i jakość wykonanych produktów.",
                    "en" => "Ensuring the aesthetics and quality of finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $SZWACZKI_HAFCIARKI_I_POKREWNI = [

            [
                "id" => 19580,
                "name" => json_encode([
                    "pl" => "Szycie elementów odzieży lub tekstyliów użytkowych.",
                    "en" => "Sewing garment components or utility textiles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19581,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do szycia, haftowania i overlocków.",
                    "en" => "Operating sewing, embroidery, and overlock machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19582,
                "name" => json_encode([
                    "pl" => "Wykonywanie zdobień za pomocą haftów i aplikacji.",
                    "en" => "Creating embellishments using embroidery and appliqués."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19583,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm jakościowych w produkcji odzieży.",
                    "en" => "Adhering to quality standards in garment production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19584,
                "name" => json_encode([
                    "pl" => "Kontrola jakości gotowych wyrobów tekstylnych.",
                    "en" => "Inspecting the quality of finished textile products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19585,
                "name" => json_encode([
                    "pl" => "Utrzymywanie maszyn w dobrym stanie technicznym.",
                    "en" => "Maintaining machines in good working condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19586,
                "name" => json_encode([
                    "pl" => "Realizacja zamówień zgodnie z wytycznymi i projektami.",
                    "en" => "Fulfilling orders according to guidelines and designs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19587,
                "name" => json_encode([
                    "pl" => "Pakowanie i sortowanie gotowych produktów.",
                    "en" => "Packing and sorting finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19588,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP w pracy z maszynami.",
                    "en" => "Following health and safety rules when working with machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TECHNIK_STYLISTA = [

            [
                "id" => 19589,
                "name" => json_encode([
                    "pl" => "Opracowywanie koncepcji stylizacji odzieżowych.",
                    "en" => "Developing concepts for clothing styling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19590,
                "name" => json_encode([
                    "pl" => "Dobór kolorów, materiałów i dodatków do kolekcji.",
                    "en" => "Selecting colors, materials, and accessories for collections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19591,
                "name" => json_encode([
                    "pl" => "Tworzenie moodboardów i projektów wizualnych.",
                    "en" => "Creating mood boards and visual designs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19592,
                "name" => json_encode([
                    "pl" => "Analiza trendów modowych i ich wdrażanie w projektach.",
                    "en" => "Analyzing fashion trends and incorporating them into projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19593,
                "name" => json_encode([
                    "pl" => "Współpraca z projektantami mody i firmami odzieżowymi.",
                    "en" => "Collaborating with fashion designers and clothing companies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19594,
                "name" => json_encode([
                    "pl" => "Stylizowanie sesji zdjęciowych i pokazów mody.",
                    "en" => "Styling photo shoots and fashion shows."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19595,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie doboru garderoby i wizerunku.",
                    "en" => "Providing advice on wardrobe selection and image consulting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19596,
                "name" => json_encode([
                    "pl" => "Tworzenie wizualnych koncepcji dla kampanii reklamowych.",
                    "en" => "Creating visual concepts for advertising campaigns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19597,
                "name" => json_encode([
                    "pl" => "Monitorowanie nowości na rynku modowym.",
                    "en" => "Monitoring new developments in the fashion market."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TAPICERZY_I_POKREWNI = [

            [
                "id" => 19598,
                "name" => json_encode([
                    "pl" => "Wykonywanie i renowacja tapicerki meblowej i samochodowej.",
                    "en" => "Performing and renovating furniture and automotive upholstery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19599,
                "name" => json_encode([
                    "pl" => "Dobór tkanin i materiałów tapicerskich.",
                    "en" => "Selecting fabrics and upholstery materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19600,
                "name" => json_encode([
                    "pl" => "Montaż i demontaż obicia mebli lub wnętrz pojazdów.",
                    "en" => "Assembling and disassembling upholstery for furniture or vehicle interiors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19601,
                "name" => json_encode([
                    "pl" => "Szycie, zszywanie i mocowanie tapicerki do konstrukcji.",
                    "en" => "Sewing, stitching, and attaching upholstery to structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19602,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi tapicerskich, takich jak zszywacze, maszyny do szycia.",
                    "en" => "Operating upholstery tools, such as staplers and sewing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19603,
                "name" => json_encode([
                    "pl" => "Renowacja starych mebli i wymiana zniszczonych elementów.",
                    "en" => "Renovating old furniture and replacing damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19604,
                "name" => json_encode([
                    "pl" => "Wykonywanie projektów tapicerowanych według zamówienia klienta.",
                    "en" => "Creating upholstered projects according to customer orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19605,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm jakościowych i estetycznych.",
                    "en" => "Adhering to quality and aesthetic standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19606,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji zamówień i projektów.",
                    "en" => "Maintaining records of orders and projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $WYPRAWIACZE_SKOR_GARBARZE_I_POKREWNI = [

            [
                "id" => 19607,
                "name" => json_encode([
                    "pl" => "Obróbka i garbowanie skór surowych w celu nadania im trwałości.",
                    "en" => "Processing and tanning raw hides to enhance their durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19608,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie procesów chemicznych i mechanicznych w obróbce skór.",
                    "en" => "Conducting chemical and mechanical processes in leather treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19609,
                "name" => json_encode([
                    "pl" => "Kontrola jakości skór po procesie garbowania.",
                    "en" => "Quality control of leather after the tanning process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19610,
                "name" => json_encode([
                    "pl" => "Odpowiednie przygotowanie skór do produkcji wyrobów.",
                    "en" => "Proper preparation of leather for product manufacturing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19611,
                "name" => json_encode([
                    "pl" => "Utrzymywanie czystości i bezpieczeństwa pracy w garbarni.",
                    "en" => "Maintaining cleanliness and safety in the tannery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19612,
                "name" => json_encode([
                    "pl" => "Stosowanie środków chemicznych zgodnie z procedurami.",
                    "en" => "Using chemicals in accordance with procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19613,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji procesów technologicznych.",
                    "en" => "Maintaining documentation of technological processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19614,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów ochrony środowiska.",
                    "en" => "Complying with environmental protection regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19615,
                "name" => json_encode([
                    "pl" => "Wdrażanie innowacyjnych metod w obróbce skór.",
                    "en" => "Implementing innovative methods in leather processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $OBUWNICY_I_POKREWNI = [

            [
                "id" => 19616,
                "name" => json_encode([
                    "pl" => "Wytwarzanie, naprawa i renowacja obuwia.",
                    "en" => "Manufacturing, repairing, and renovating footwear."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19617,
                "name" => json_encode([
                    "pl" => "Projektowanie i krojenie materiałów do produkcji butów.",
                    "en" => "Designing and cutting materials for shoe production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19618,
                "name" => json_encode([
                    "pl" => "Szycie, klejenie i montaż elementów obuwia.",
                    "en" => "Sewing, gluing, and assembling shoe components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19619,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn szewskich i narzędzi ręcznych.",
                    "en" => "Operating shoemaking machines and hand tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19620,
                "name" => json_encode([
                    "pl" => "Dopasowywanie obuwia do potrzeb klienta.",
                    "en" => "Customizing footwear to meet client needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19621,
                "name" => json_encode([
                    "pl" => "Wykonywanie specjalistycznych napraw, np. wymiana obcasów.",
                    "en" => "Performing specialized repairs, such as heel replacement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19622,
                "name" => json_encode([
                    "pl" => "Kontrola jakości gotowego obuwia.",
                    "en" => "Quality control of finished footwear."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19623,
                "name" => json_encode([
                    "pl" => "Utrzymanie porządku w warsztacie szewskim.",
                    "en" => "Maintaining cleanliness in the shoemaking workshop."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19624,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP i ergonomii pracy.",
                    "en" => "Adhering to safety and ergonomics guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $OPERATORZY_MASZYN_I_URZADZEN_DO_PRODUKCJI_I_PRZETWORSTWA_METALI = [

            [
                "id" => 19625,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do cięcia, gięcia, walcowania i kształtowania metali.",
                    "en" => "Operating machines for cutting, bending, rolling, and shaping metals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19626,
                "name" => json_encode([
                    "pl" => "Kontrola parametrów maszyn i jakości wyrobów metalowych.",
                    "en" => "Controlling machine parameters and the quality of metal products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19627,
                "name" => json_encode([
                    "pl" => "Ustawianie i kalibracja urządzeń zgodnie z dokumentacją techniczną.",
                    "en" => "Setting and calibrating equipment according to technical documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19628,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów produkcyjnych i reagowanie na awarie.",
                    "en" => "Monitoring production processes and responding to malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19629,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji i drobnych napraw maszyn.",
                    "en" => "Performing maintenance and minor repairs on machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19630,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur bezpieczeństwa i ochrony zdrowia.",
                    "en" => "Adhering to safety and health protection procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19631,
                "name" => json_encode([
                    "pl" => "Optymalizacja zużycia materiałów i wydajności maszyn.",
                    "en" => "Optimizing material usage and machine efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19632,
                "name" => json_encode([
                    "pl" => "Segregowanie i składowanie gotowych produktów metalowych.",
                    "en" => "Sorting and storing finished metal products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19633,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji procesów produkcyjnych.",
                    "en" => "Maintaining documentation of production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $OPERATORZY_URZADZEN_DO_OBROBKI_POWIERZCHNIOWEJ_METALI_I_NAKLADANIA_POWLOK = [

            [
                "id" => 19634,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do nakładania powłok ochronnych na metale.",
                    "en" => "Operating machines for applying protective coatings on metals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19635,
                "name" => json_encode([
                    "pl" => "Przygotowywanie powierzchni metalowych do obróbki.",
                    "en" => "Preparing metal surfaces for processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19636,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu galwanizacji, malowania proszkowego, anodowania itp.",
                    "en" => "Monitoring the processes of galvanization, powder coating, anodizing, etc."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19637,
                "name" => json_encode([
                    "pl" => "Kontrola jakości powłok i eliminowanie defektów.",
                    "en" => "Inspecting coating quality and eliminating defects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19638,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm technologicznych i procedur bezpieczeństwa.",
                    "en" => "Adhering to technological standards and safety procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19639,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji urządzeń do obróbki powierzchniowej.",
                    "en" => "Performing maintenance on surface treatment equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19640,
                "name" => json_encode([
                    "pl" => "Dokumentowanie parametrów procesów i raportowanie wyników.",
                    "en" => "Documenting process parameters and reporting results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19641,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii w nakładaniu powłok.",
                    "en" => "Implementing new technologies in coating application."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19642,
                "name" => json_encode([
                    "pl" => "Dbałość o środowisko pracy i bezpieczeństwo.",
                    "en" => "Ensuring workplace safety and care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TECHNIK_HUTNIK = [

            [
                "id" => 19643,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesami produkcji metali i stopów.",
                    "en" => "Supervising the processes of metal and alloy production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19644,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wytopów i wyrobów hutniczych.",
                    "en" => "Quality control of melts and metallurgical products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19645,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń hutniczych, takich jak piece, walcarki, odlewnie.",
                    "en" => "Operating metallurgical equipment such as furnaces, rolling mills, and foundries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19646,
                "name" => json_encode([
                    "pl" => "Analiza składu chemicznego metali i wykonywanie pomiarów.",
                    "en" => "Analyzing the chemical composition of metals and performing measurements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19647,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów procesów technologicznych.",
                    "en" => "Monitoring technological process parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19648,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji produkcyjnej i raportowanie wyników.",
                    "en" => "Maintaining production documentation and reporting results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19649,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm bezpieczeństwa i ochrony środowiska.",
                    "en" => "Adhering to safety standards and environmental protection regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19650,
                "name" => json_encode([
                    "pl" => "Utrzymanie urządzeń w dobrym stanie technicznym.",
                    "en" => "Maintaining equipment in good technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19651,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami produkcyjnymi.",
                    "en" => "Collaborating with other production departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $KOWAL = [

            [
                "id" => 19652,
                "name" => json_encode([
                    "pl" => "Kucie metalu na gorąco lub zimno w celu wykonania narzędzi, ozdób i elementów konstrukcyjnych.",
                    "en" => "Forging metal, either hot or cold, to create tools, ornaments, and structural components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19653,
                "name" => json_encode([
                    "pl" => "Obsługa pieców kowalskich i narzędzi, takich jak młoty, kowadła i prasy.",
                    "en" => "Operating forges and tools such as hammers, anvils, and presses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19654,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja narzędzi i urządzeń metalowych.",
                    "en" => "Repairing and maintaining metal tools and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19655,
                "name" => json_encode([
                    "pl" => "Projektowanie i wykonywanie unikalnych wyrobów metalowych.",
                    "en" => "Designing and crafting unique metal products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19656,
                "name" => json_encode([
                    "pl" => "Obróbka i formowanie metalu zgodnie z zamówieniami klientów.",
                    "en" => "Processing and shaping metal according to customer orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19657,
                "name" => json_encode([
                    "pl" => "Sprawdzanie jakości i trwałości gotowych produktów.",
                    "en" => "Inspecting the quality and durability of finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19658,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa podczas pracy z wysokimi temperaturami.",
                    "en" => "Following safety rules when working with high temperatures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19659,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku i organizacja warsztatu kowalskiego.",
                    "en" => "Maintaining order and organizing the blacksmith workshop."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19660,
                "name" => json_encode([
                    "pl" => "Wykonywanie usług kowalskich dla klientów indywidualnych i firm.",
                    "en" => "Providing blacksmithing services for individual clients and businesses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_Z_TWORZYW_SZTUCZNYCH = [

            [
                "id" => 19661,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do formowania, wtryskiwania, termoformowania i cięcia tworzyw sztucznych.",
                    "en" => "Operating machines for forming, injection molding, thermoforming, and cutting plastics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19662,
                "name" => json_encode([
                    "pl" => "Kontrola jakości gotowych wyrobów z tworzyw sztucznych.",
                    "en" => "Quality control of finished plastic products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19663,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów pracy maszyn i ustawianie ich zgodnie z dokumentacją.",
                    "en" => "Monitoring machine parameters and setting them according to documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19664,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji i drobnych napraw urządzeń.",
                    "en" => "Performing maintenance and minor repairs on equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19665,
                "name" => json_encode([
                    "pl" => "Zapewnienie ciągłości produkcji i usuwanie awarii w czasie rzeczywistym.",
                    "en" => "Ensuring production continuity and addressing real-time breakdowns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19666,
                "name" => json_encode([
                    "pl" => "Pakowanie i sortowanie gotowych produktów.",
                    "en" => "Packaging and sorting finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19667,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa i higieny pracy.",
                    "en" => "Adhering to safety and hygiene regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19668,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przebiegu produkcji i raportowanie wyników.",
                    "en" => "Documenting production processes and reporting results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19669,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych pod kątem wydajności.",
                    "en" => "Optimizing production processes for efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_PAPIERNICZYCH = [

            [
                "id" => 19670,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji papieru, kartonu i innych wyrobów papierniczych.",
                    "en" => "Operating machines for producing paper, cardboard, and other paper products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19671,
                "name" => json_encode([
                    "pl" => "Regulacja i kontrola parametrów maszyn produkcyjnych.",
                    "en" => "Adjusting and monitoring parameters of production machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19672,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesu cięcia, składania i formowania papieru.",
                    "en" => "Supervising the cutting, folding, and forming processes of paper."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19673,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów papierniczych i eliminowanie wad.",
                    "en" => "Quality control of paper products and defect elimination."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19674,
                "name" => json_encode([
                    "pl" => "Czyszczenie i konserwacja maszyn papierniczych.",
                    "en" => "Cleaning and maintaining paper production machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19675,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji produkcyjnej i raportowanie wyników.",
                    "en" => "Maintaining production documentation and reporting results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19676,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm jakościowych i procedur technologicznych.",
                    "en" => "Adhering to quality standards and technological procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19677,
                "name" => json_encode([
                    "pl" => "Praca w zgodzie z zasadami BHP.",
                    "en" => "Working in compliance with health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19678,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w miejscu pracy.",
                    "en" => "Maintaining cleanliness in the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $LAKIERNIK = [

            [
                "id" => 19679,
                "name" => json_encode([
                    "pl" => "Przygotowywanie powierzchni do lakierowania (oczyszczanie, szlifowanie, odtłuszczanie).",
                    "en" => "Preparing surfaces for painting (cleaning, sanding, degreasing)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19680,
                "name" => json_encode([
                    "pl" => "Nakładanie warstw lakieru za pomocą pistoletu lakierniczego lub innych narzędzi.",
                    "en" => "Applying layers of paint using a spray gun or other tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19681,
                "name" => json_encode([
                    "pl" => "Mieszanie lakierów i farb zgodnie z instrukcjami technicznymi.",
                    "en" => "Mixing paints and varnishes according to technical instructions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19682,
                "name" => json_encode([
                    "pl" => "Kontrola jakości lakierowanych powierzchni i usuwanie niedoskonałości.",
                    "en" => "Inspecting painted surfaces for quality and correcting imperfections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19683,
                "name" => json_encode([
                    "pl" => "Utrzymanie czystości w kabinie lakierniczej i konserwacja sprzętu.",
                    "en" => "Maintaining cleanliness in the paint booth and servicing equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19684,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm bezpieczeństwa i ochrony zdrowia.",
                    "en" => "Adhering to safety and health regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19685,
                "name" => json_encode([
                    "pl" => "Wykonywanie renowacji i napraw lakierowanych powierzchni.",
                    "en" => "Performing restoration and repair of painted surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19686,
                "name" => json_encode([
                    "pl" => "Praca z różnymi rodzajami lakierów, np. akrylowymi, proszkowymi.",
                    "en" => "Working with various types of paints, e.g., acrylic, powder."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19687,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych prac lakierniczych.",
                    "en" => "Documenting completed painting works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $SPAWACZE_I_POKREWNI = [

            [
                "id" => 19688,
                "name" => json_encode([
                    "pl" => "Wykonywanie spawania metodami MIG, TIG, MMA i innymi.",
                    "en" => "Performing welding using MIG, TIG, MMA, and other methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19689,
                "name" => json_encode([
                    "pl" => "Przygotowanie materiałów do spawania, w tym cięcie i szlifowanie.",
                    "en" => "Preparing materials for welding, including cutting and grinding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19690,
                "name" => json_encode([
                    "pl" => "Kontrola jakości spawów i ewentualne poprawki.",
                    "en" => "Inspecting weld quality and making necessary adjustments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19691,
                "name" => json_encode([
                    "pl" => "Praca zgodnie z dokumentacją techniczną i rysunkami spawalniczymi.",
                    "en" => "Working according to technical documentation and welding blueprints."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19692,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń spawalniczych i ich konserwacja.",
                    "en" => "Operating and maintaining welding equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19693,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów BHP i stosowanie odpowiednich środków ochrony.",
                    "en" => "Adhering to health and safety regulations and using appropriate protective measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19694,
                "name" => json_encode([
                    "pl" => "Spawanie konstrukcji metalowych i naprawa uszkodzeń.",
                    "en" => "Welding metal structures and repairing damages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19695,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi specjalistami w zakresie montażu i produkcji.",
                    "en" => "Collaborating with other specialists in assembly and production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19696,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji spawalniczej.",
                    "en" => "Maintaining welding documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $ŚLUSARZE_I_POKREWNI = [

            [
                "id" => 19697,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac ślusarskich, takich jak cięcie, wiercenie, gwintowanie i montaż elementów metalowych.",
                    "en" => "Performing locksmith tasks such as cutting, drilling, threading, and assembling metal components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19698,
                "name" => json_encode([
                    "pl" => "Obróbka i dopasowywanie części metalowych zgodnie z rysunkami technicznymi.",
                    "en" => "Processing and fitting metal parts according to technical drawings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19699,
                "name" => json_encode([
                    "pl" => "Montaż i demontaż konstrukcji stalowych oraz mechanizmów.",
                    "en" => "Assembling and disassembling steel structures and mechanisms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19700,
                "name" => json_encode([
                    "pl" => "Naprawa i regeneracja uszkodzonych elementów metalowych.",
                    "en" => "Repairing and refurbishing damaged metal components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19701,
                "name" => json_encode([
                    "pl" => "Utrzymanie narzędzi i maszyn ślusarskich w dobrym stanie.",
                    "en" => "Maintaining locksmith tools and machines in good condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19702,
                "name" => json_encode([
                    "pl" => "Spawanie prostych elementów metalowych (w razie potrzeby).",
                    "en" => "Welding simple metal components (when needed)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19703,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa i higieny pracy.",
                    "en" => "Adhering to safety and workplace hygiene regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19704,
                "name" => json_encode([
                    "pl" => "Praca z różnymi rodzajami metali i narzędziami ręcznymi.",
                    "en" => "Working with various types of metals and hand tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19705,
                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji i montażu.",
                    "en" => "Collaborating with the production and assembly department."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $USTAWIACZE_I_OPERATORZY_OBRABIAREK_DO_METALI_I_POKREWNI = [

            [
                "id" => 19706,
                "name" => json_encode([
                    "pl" => "Obsługa obrabiarek skrawających, takich jak tokarki, frezarki, szlifierki CNC.",
                    "en" => "Operating cutting machines such as lathes, milling machines, and CNC grinders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19707,
                "name" => json_encode([
                    "pl" => "Ustawianie parametrów maszyn zgodnie z dokumentacją techniczną.",
                    "en" => "Setting machine parameters according to technical documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19708,
                "name" => json_encode([
                    "pl" => "Obróbka metali zgodnie z rysunkami technicznymi i specyfikacjami.",
                    "en" => "Processing metals according to technical drawings and specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19709,
                "name" => json_encode([
                    "pl" => "Kontrola jakości obrabianych elementów i dokonywanie pomiarów.",
                    "en" => "Quality control of machined components and performing measurements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19710,
                "name" => json_encode([
                    "pl" => "Usuwanie awarii i przeprowadzanie konserwacji obrabiarek.",
                    "en" => "Troubleshooting and performing maintenance on machining tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19711,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm jakościowych i procedur technologicznych.",
                    "en" => "Adhering to quality standards and technological procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19712,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów obróbki w celu zwiększenia wydajności.",
                    "en" => "Optimizing machining processes to enhance efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19713,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji produkcyjnej.",
                    "en" => "Maintaining production documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19714,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami produkcyjnymi.",
                    "en" => "Collaborating with other production departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $SZLIFIERZE_NARZĘDZI_I_POLEROWACZE_METALI = [

            [
                "id" => 19715,
                "name" => json_encode([
                    "pl" => "Obróbka i szlifowanie narzędzi oraz elementów metalowych.",
                    "en" => "Processing and grinding tools and metal components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19716,
                "name" => json_encode([
                    "pl" => "Używanie szlifierek i urządzeń polerujących do nadawania powierzchniom odpowiedniej gładkości.",
                    "en" => "Using grinders and polishing machines to achieve the desired surface smoothness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19717,
                "name" => json_encode([
                    "pl" => "Kontrola jakości i pomiar szlifowanych elementów.",
                    "en" => "Quality control and measurement of ground components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19718,
                "name" => json_encode([
                    "pl" => "Odpowiednie przygotowanie narzędzi do pracy i ich konserwacja.",
                    "en" => "Proper preparation and maintenance of tools for work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19719,
                "name" => json_encode([
                    "pl" => "Usuwanie niedoskonałości i wyrównywanie powierzchni metalowych.",
                    "en" => "Removing imperfections and leveling metal surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19720,
                "name" => json_encode([
                    "pl" => "Praca zgodnie z dokumentacją techniczną i wymaganiami jakościowymi.",
                    "en" => "Working according to technical documentation and quality requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19721,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa i higieny pracy.",
                    "en" => "Adhering to safety and occupational hygiene rules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19722,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi specjalistami w zakresie obróbki metali.",
                    "en" => "Collaborating with other specialists in metal processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19723,
                "name" => json_encode([
                    "pl" => "Dbanie o porządek i organizację w miejscu pracy.",
                    "en" => "Maintaining cleanliness and organization in the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $ROBOTNICY_PRACUJĄCY_PRZY_PRZEŁADUNKU_TOWARÓW = [

            [
                "id" => 19724,
                "name" => json_encode([
                    "pl" => "Załadunek i rozładunek towarów z samochodów ciężarowych, wagonów i kontenerów.",
                    "en" => "Loading and unloading goods from trucks, wagons, and containers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19725,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do przeładunku, takich jak wózki widłowe, dźwigi, suwnice.",
                    "en" => "Operating handling equipment such as forklifts, cranes, and gantry cranes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19726,
                "name" => json_encode([
                    "pl" => "Przemieszczanie towarów w magazynie i na placach składowych.",
                    "en" => "Moving goods within warehouses and storage yards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19727,
                "name" => json_encode([
                    "pl" => "Sprawdzanie stanu towarów i ich dokumentacji podczas przeładunku.",
                    "en" => "Checking the condition of goods and their documentation during handling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19728,
                "name" => json_encode([
                    "pl" => "Zabezpieczanie ładunków przed uszkodzeniem w trakcie transportu.",
                    "en" => "Securing loads to prevent damage during transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19729,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa i higieny pracy.",
                    "en" => "Adhering to safety and hygiene regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19730,
                "name" => json_encode([
                    "pl" => "Segregowanie i sortowanie towarów zgodnie z wytycznymi.",
                    "en" => "Sorting and organizing goods according to guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19731,
                "name" => json_encode([
                    "pl" => "Praca w zespole w celu efektywnego przeładunku.",
                    "en" => "Collaborating with a team to ensure efficient handling operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19732,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w miejscu pracy.",
                    "en" => "Maintaining cleanliness and order in the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $UKŁADACZE_TOWARÓW_NA_PÓŁKACH = [

            [
                "id" => 19733,
                "name" => json_encode([
                    "pl" => "Rozkładanie i układanie towarów na półkach w sklepie lub magazynie.",
                    "en" => "Arranging and stocking goods on shelves in a store or warehouse."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19734,
                "name" => json_encode([
                    "pl" => "Dbanie o estetykę ekspozycji i uzupełnianie brakujących produktów.",
                    "en" => "Maintaining the appearance of displays and restocking missing products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19735,
                "name" => json_encode([
                    "pl" => "Kontrola dat ważności i usuwanie przeterminowanych towarów.",
                    "en" => "Checking expiration dates and removing expired goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19736,
                "name" => json_encode([
                    "pl" => "Oznaczanie cen i sprawdzanie zgodności z cennikami.",
                    "en" => "Labeling prices and ensuring compliance with price lists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19737,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad rotacji towarów (FIFO).",
                    "en" => "Adhering to the principles of goods rotation (FIFO)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19738,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku na regałach i w strefie magazynowej.",
                    "en" => "Keeping shelves and storage areas organized."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19739,
                "name" => json_encode([
                    "pl" => "Współpraca z działem logistyki i dostaw.",
                    "en" => "Collaborating with the logistics and supply department."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19740,
                "name" => json_encode([
                    "pl" => "Pomoc klientom w znalezieniu poszukiwanych produktów.",
                    "en" => "Assisting customers in finding desired products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19741,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa i higieny w miejscu pracy.",
                    "en" => "Following safety and hygiene regulations in the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $SORTOWACZE_ODPADÓW = [

            [
                "id" => 19742,
                "name" => json_encode([
                    "pl" => "Segregowanie odpadów na różne frakcje, np. plastik, metal, papier.",
                    "en" => "Sorting waste into different fractions, e.g., plastic, metal, paper."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19743,
                "name" => json_encode([
                    "pl" => "Praca przy taśmach sortujących lub ręczne sortowanie odpadów.",
                    "en" => "Working on sorting belts or manually sorting waste."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19744,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w miejscu pracy i dbanie o czystość.",
                    "en" => "Maintaining order in the workplace and ensuring cleanliness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19745,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do rozdrabniania lub kompresowania odpadów.",
                    "en" => "Operating machines for shredding or compressing waste."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19746,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa i higieny pracy.",
                    "en" => "Adhering to safety and hygiene regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19747,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem w celu efektywnego sortowania.",
                    "en" => "Collaborating with the team to ensure efficient sorting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19748,
                "name" => json_encode([
                    "pl" => "Identyfikowanie i usuwanie niebezpiecznych materiałów.",
                    "en" => "Identifying and removing hazardous materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19749,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z sortowaniem odpadów.",
                    "en" => "Maintaining documentation related to waste sorting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19750,
                "name" => json_encode([
                    "pl" => "Utrzymywanie odpowiednich standardów środowiskowych.",
                    "en" => "Ensuring compliance with environmental standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $ZAMIATACZE_I_POKREWNI = [

            [
                "id" => 19751,
                "name" => json_encode([
                    "pl" => "Utrzymywanie czystości na ulicach, chodnikach i placach.",
                    "en" => "Maintaining cleanliness on streets, sidewalks, and squares."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19752,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do zamiatania i czyszczenia powierzchni.",
                    "en" => "Operating machines for sweeping and cleaning surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19753,
                "name" => json_encode([
                    "pl" => "Opróżnianie koszy na śmieci i segregowanie odpadów.",
                    "en" => "Emptying trash bins and sorting waste."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19754,
                "name" => json_encode([
                    "pl" => "Dbanie o porządek w przestrzeni publicznej.",
                    "en" => "Ensuring tidiness in public spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19755,
                "name" => json_encode([
                    "pl" => "Usuwanie liści, śniegu i innych zanieczyszczeń.",
                    "en" => "Removing leaves, snow, and other debris."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19756,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa podczas pracy na zewnątrz.",
                    "en" => "Adhering to safety regulations when working outdoors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19757,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje awaryjne, takie jak usuwanie rozlanych materiałów.",
                    "en" => "Responding to emergencies such as cleaning up spills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19758,
                "name" => json_encode([
                    "pl" => "Utrzymywanie narzędzi i sprzętu w dobrym stanie.",
                    "en" => "Maintaining tools and equipment in good condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19759,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi służbami miejskimi.",
                    "en" => "Collaborating with other municipal services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $ROBOTNIK_NAZIEMNY_W_GORNICTWIE = [

            [
                "id" => 19760,
                "name" => json_encode([
                    "pl" => "Wsparcie techniczne i logistyczne dla prac podziemnych w kopalniach.",
                    "en" => "Technical and logistical support for underground mining operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19761,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do transportu urobku na powierzchni.",
                    "en" => "Operation of equipment for transporting extracted materials on the surface."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19762,
                "name" => json_encode([
                    "pl" => "Kontrola stanu technicznego maszyn i urządzeń na powierzchni.",
                    "en" => "Inspection of the technical condition of surface machinery and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19763,
                "name" => json_encode([
                    "pl" => "Załadunek i transport surowców do dalszej obróbki.",
                    "en" => "Loading and transporting raw materials for further processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19764,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa i procedur pracy w kopalni.",
                    "en" => "Adhering to safety rules and work procedures in the mine."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19765,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem górników i innymi specjalistami.",
                    "en" => "Collaborating with miners and other specialists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19766,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej transportu i magazynowania.",
                    "en" => "Maintaining documentation related to transportation and storage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19767,
                "name" => json_encode([
                    "pl" => "Dbanie o porządek na powierzchni kopalni.",
                    "en" => "Ensuring cleanliness and order on the mine surface."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19768,
                "name" => json_encode([
                    "pl" => "Udział w działaniach konserwacyjnych i naprawczych.",
                    "en" => "Participating in maintenance and repair activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $BAGAZOWY = [

            [
                "id" => 19769,
                "name" => json_encode([
                    "pl" => "Przenoszenie i transport bagaży na terenie dworców, lotnisk lub hoteli.",
                    "en" => "Carrying and transporting luggage within stations, airports, or hotels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19770,
                "name" => json_encode([
                    "pl" => "Obsługa wózków bagażowych i innych urządzeń do transportu.",
                    "en" => "Operating luggage carts and other transport devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19771,
                "name" => json_encode([
                    "pl" => "Odbieranie i dostarczanie bagażu do odpowiednich miejsc.",
                    "en" => "Collecting and delivering luggage to designated locations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19772,
                "name" => json_encode([
                    "pl" => "Dbanie o bezpieczeństwo i nienaruszalność bagaży.",
                    "en" => "Ensuring the safety and integrity of luggage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19773,
                "name" => json_encode([
                    "pl" => "Pomoc pasażerom lub gościom w przenoszeniu ciężkich przedmiotów.",
                    "en" => "Assisting passengers or guests with carrying heavy items."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19774,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa i procedur pracy.",
                    "en" => "Following safety rules and work procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19775,
                "name" => json_encode([
                    "pl" => "Udzielanie informacji dotyczących przechowywania bagażu.",
                    "en" => "Providing information regarding luggage storage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19776,
                "name" => json_encode([
                    "pl" => "Praca zgodnie z harmonogramem zmiany.",
                    "en" => "Working according to the shift schedule."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19777,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w strefach bagażowych.",
                    "en" => "Maintaining order in luggage areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $BOY_HOTELOWY = [

            [
                "id" => 19778,
                "name" => json_encode([
                    "pl" => "Pomoc gościom hotelowym przy przenoszeniu bagażu.",
                    "en" => "Assisting hotel guests with carrying luggage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19779,
                "name" => json_encode([
                    "pl" => "Oprowadzanie gości po hotelu i informowanie o jego usługach.",
                    "en" => "Showing guests around the hotel and informing them about its services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19780,
                "name" => json_encode([
                    "pl" => "Odbieranie i dostarczanie wiadomości oraz przesyłek do pokoi.",
                    "en" => "Collecting and delivering messages and packages to rooms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19781,
                "name" => json_encode([
                    "pl" => "Udzielanie informacji turystycznych i wskazówek dotyczących okolicy.",
                    "en" => "Providing tourist information and guidance about the local area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19782,
                "name" => json_encode([
                    "pl" => "Obsługa gości w zakresie zamawiania taksówek, rezerwacji i innych usług.",
                    "en" => "Assisting guests with ordering taxis, reservations, and other services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19783,
                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów obsługi klienta w hotelu.",
                    "en" => "Adhering to customer service standards in the hotel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19784,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w strefie recepcji i holu.",
                    "en" => "Maintaining cleanliness in the reception and lobby areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19785,
                "name" => json_encode([
                    "pl" => "Współpraca z personelem hotelowym w celu zapewnienia wysokiej jakości usług.",
                    "en" => "Collaborating with hotel staff to ensure high-quality services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19786,
                "name" => json_encode([
                    "pl" => "Reagowanie na prośby i potrzeby gości.",
                    "en" => "Responding to guests' requests and needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $PRACOWNIK_PRODUKCJI = [

            [
                "id" => 19787,
                "name" => json_encode([
                    "pl" => "Wykonywanie prostych czynności produkcyjnych zgodnie z wytycznymi.",
                    "en" => "Performing simple production tasks according to instructions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19788,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn produkcyjnych i monitorowanie ich pracy.",
                    "en" => "Operating production machines and monitoring their performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19789,
                "name" => json_encode([
                    "pl" => "Kontrola jakości gotowych produktów.",
                    "en" => "Quality control of finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19790,
                "name" => json_encode([
                    "pl" => "Pakowanie, etykietowanie i sortowanie wyrobów.",
                    "en" => "Packing, labeling, and sorting products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19791,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku na stanowisku pracy.",
                    "en" => "Maintaining cleanliness at the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19792,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP i standardów produkcji.",
                    "en" => "Following safety regulations and production standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19793,
                "name" => json_encode([
                    "pl" => "Raportowanie nieprawidłowości i awarii.",
                    "en" => "Reporting irregularities and breakdowns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19794,
                "name" => json_encode([
                    "pl" => "Przestrzeganie harmonogramów produkcyjnych.",
                    "en" => "Adhering to production schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19795,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami produkcji.",
                    "en" => "Collaborating with other production employees."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $OPERATOR_MASZYN_I_URZADZEN_W_PRZEMYŚLE_PRZETWÓRCZYM = [

            [
                "id" => 19796,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń w zakładach przemysłowych.",
                    "en" => "Operating machines and equipment in industrial plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19797,
                "name" => json_encode([
                    "pl" => "Ustawianie i kalibracja maszyn zgodnie z wymaganiami produkcyjnymi.",
                    "en" => "Setting and calibrating machines according to production requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19798,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu przetwarzania i reagowanie na awarie.",
                    "en" => "Monitoring processing operations and responding to breakdowns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19799,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli jakości wytwarzanych produktów.",
                    "en" => "Performing quality control of manufactured products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19800,
                "name" => json_encode([
                    "pl" => "Wykonywanie drobnych napraw i konserwacji urządzeń.",
                    "en" => "Carrying out minor repairs and maintenance of equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19801,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur technologicznych i bezpieczeństwa.",
                    "en" => "Following technological procedures and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19802,
                "name" => json_encode([
                    "pl" => "Raportowanie wyników pracy i prowadzenie dokumentacji.",
                    "en" => "Reporting work results and maintaining documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19803,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych pod kątem wydajności.",
                    "en" => "Optimizing production processes for efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19804,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami zakładu.",
                    "en" => "Collaborating with other departments in the plant."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $PRACOWNIK_POMOCNICZY_W_GOSPODARCE_ODPADAMI = [

            [
                "id" => 19805,
                "name" => json_encode([
                    "pl" => "Pomoc przy segregowaniu i przetwarzaniu odpadów.",
                    "en" => "Assisting in sorting and processing waste."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19806,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do rozdrabniania, sortowania i kompresowania odpadów.",
                    "en" => "Operating machines for shredding, sorting, and compressing waste."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19807,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa i higieny pracy.",
                    "en" => "Adhering to safety and hygiene regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19808,
                "name" => json_encode([
                    "pl" => "Utrzymywanie czystości i porządku na terenie zakładu.",
                    "en" => "Maintaining cleanliness and order within the facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19809,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem w zakresie utrzymania efektywności procesów.",
                    "en" => "Collaborating with the team to maintain process efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19810,
                "name" => json_encode([
                    "pl" => "Przenoszenie i organizowanie odpadów w odpowiednich strefach.",
                    "en" => "Transporting and organizing waste in designated areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19811,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń transportowych, takich jak wózki widłowe.",
                    "en" => "Operating transport equipment, such as forklifts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19812,
                "name" => json_encode([
                    "pl" => "Raportowanie wszelkich nieprawidłowości lub zagrożeń.",
                    "en" => "Reporting any irregularities or hazards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19813,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów związanych z ochroną środowiska.",
                    "en" => "Complying with environmental protection regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];



        DB::table('detail_projects')->insert(array_merge(
            $KIEROWNICY_PRODUKCJI_W_ROLNICTWIE_I_LESNICTWIE,
            $KIEROWNICY_PRODUKCJI_W_ZAKŁADACH_AKWAKULTURY_I_RYBOŁÓWSTWIE,
            $KIEROWNICY_DO_SPRAW_PRODUKCJI_PRZEMYSŁOWEJ,
            $KIEROWNIK_DZIAŁU_RUCHU_ZAKŁADU_GÓRNICZEGO_LUB_ZAKŁADU,
            $KIEROWNIK_MAŁEGO_PRZEDSIĘBIORSTWA_BUDOWLANEGO,
            $PLANIŚCI_PRODUKCYJNI,
            $GŁÓWNY_TECHNOLOG,
            $INŻYNIEROWIE_GÓRNICTWA_I_METALURGII,
            $INŻYNIER_POLIGRAFII,
            $INŻYNIER_SYSTEMÓW_ZABEZPIECZEŃ_TECHNICZNYCH_OSÓB_I_MIENIA,
            $TECHNOLOG_PROGRAMISTA_OBRABIAREK,
            $MISTRZOWIE_PRODUKCJI_W_PRZEMYŚLE_PRZETWÓRCZYM,
            $SPECJALISCI_DO_SPRAW_OCHRONY_SRODOWISKA,
            $INSPEKTOR_OCHRONY_SRODOWISKA,
            $OPERATOR_MASZYN_I_URZADZEN_W_GOSPODARCE_ODPADAMI,
            $SPECJALISCI_DO_SPRAW_HIGIENY_BEZPIECZENSTWA_PRACY_I_OCHRONY_SRODOWISKA,
            $AUDYTOR_KONTROLER,
            $INSPEKTOR_SANITARNY,
            $RZECZOZNAWCA,
            $RZECZNIK_PRAW_KONSUMENTA,
            $PROJEKTANCI_WZORNICTWA_PRZEMYSŁOWEGO_I_ODZIEŻY,
            $OPERATOR_CAD,
            $OPERATORZY_MASZYN_I_URZADZEN_DO_PRZEROBKI_MECHANICZNEJ_KOPALIN,
            $OPERATORZY_URZADZEN_WIERTNICZYCH_I_WYDOBYWCZYCH_ROPY_GAZU_I_INNYCH_SUROWCOW,
            $STRZALOWI_I_POKREWNI,
            $GORNICY_PODZIEMNEJ_I_ODKRYWKOWEJ_EKSPLOATACJI_ZLOZ_I_POKREWNI,
            $TECHNIK_CERAMIK,
            $OPERATORZY_URZADZEN_DO_PRODUKCJI_WYROBOW_SZKLANYCH_I_CERAMICZNYCH,
            $ZLOTNIK_JUBILER,
            $PRACOWNICY_PRZYGOTOWAWCZY_DRUK,
            $DRUKARZE,
            $STOLARZE_MEBLOWI_I_POKREWNI,
            $OPERATORZY_MASZYN_I_URZĄDZEŃ_DO_OBRÓBKI_DREWNA,
            $SZKUTNIK,
            $MONTER_MEBLI,
            $MONTER_JACHTOW_I_LODZI,
            $TECHNIK_TECHNOLOGII_ODZIEZY,
            $KRAWCY_KUSNIERZE_KAPELUSZNICY_I_POKREWNI,
            $SZWACZKI_HAFCIARKI_I_POKREWNI,
            $TECHNIK_STYLISTA,
            $TAPICERZY_I_POKREWNI,
            $WYPRAWIACZE_SKOR_GARBARZE_I_POKREWNI,
            $OBUWNICY_I_POKREWNI,
            $OPERATORZY_MASZYN_I_URZADZEN_DO_PRODUKCJI_I_PRZETWORSTWA_METALI,
            $OPERATORZY_URZADZEN_DO_OBROBKI_POWIERZCHNIOWEJ_METALI_I_NAKLADANIA_POWLOK,
            $TECHNIK_HUTNIK,
            $KOWAL,
            $OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_Z_TWORZYW_SZTUCZNYCH,
            $OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_PAPIERNICZYCH,
            $LAKIERNIK,
            $SPAWACZE_I_POKREWNI,
            $ŚLUSARZE_I_POKREWNI,
            $USTAWIACZE_I_OPERATORZY_OBRABIAREK_DO_METALI_I_POKREWNI,
            $SZLIFIERZE_NARZĘDZI_I_POLEROWACZE_METALI,
            $ROBOTNICY_PRACUJĄCY_PRZY_PRZEŁADUNKU_TOWARÓW,
            $UKŁADACZE_TOWARÓW_NA_PÓŁKACH,
            $SORTOWACZE_ODPADÓW,
            $ZAMIATACZE_I_POKREWNI,
            $ROBOTNIK_NAZIEMNY_W_GORNICTWIE,
            $BAGAZOWY,
            $BOY_HOTELOWY,
            $PRACOWNIK_PRODUKCJI,
            $OPERATOR_MASZYN_I_URZADZEN_W_PRZEMYŚLE_PRZETWÓRCZYM,
            $PRACOWNIK_POMOCNICZY_W_GOSPODARCE_ODPADAMI


        ));

        Category::whereId('1803')->first()->detailprojects()->attach(collect($KIEROWNICY_PRODUKCJI_W_ROLNICTWIE_I_LESNICTWIE)->pluck('id')->toArray());
        Category::whereId('1810')->first()->detailprojects()->attach(collect($KIEROWNICY_PRODUKCJI_W_ZAKŁADACH_AKWAKULTURY_I_RYBOŁÓWSTWIE)->pluck('id')->toArray());
        Category::whereId('1814')->first()->detailprojects()->attach(collect($KIEROWNICY_DO_SPRAW_PRODUKCJI_PRZEMYSŁOWEJ)->pluck('id')->toArray());
        Category::whereId('1820')->first()->detailprojects()->attach(collect($KIEROWNIK_DZIAŁU_RUCHU_ZAKŁADU_GÓRNICZEGO_LUB_ZAKŁADU)->pluck('id')->toArray());
        Category::whereId('1823')->first()->detailprojects()->attach(collect($KIEROWNIK_MAŁEGO_PRZEDSIĘBIORSTWA_BUDOWLANEGO)->pluck('id')->toArray());
        Category::whereId('1831')->first()->detailprojects()->attach(collect($PLANIŚCI_PRODUKCYJNI)->pluck('id')->toArray());
        Category::whereId('1832')->first()->detailprojects()->attach(collect($GŁÓWNY_TECHNOLOG)->pluck('id')->toArray());
        Category::whereId('1833')->first()->detailprojects()->attach(collect($INŻYNIEROWIE_GÓRNICTWA_I_METALURGII)->pluck('id')->toArray());
        Category::whereId('1844')->first()->detailprojects()->attach(collect($INŻYNIER_POLIGRAFII)->pluck('id')->toArray());
        Category::whereId('1845')->first()->detailprojects()->attach(collect($INŻYNIER_SYSTEMÓW_ZABEZPIECZEŃ_TECHNICZNYCH_OSÓB_I_MIENIA)->pluck('id')->toArray());
        Category::whereId('1855')->first()->detailprojects()->attach(collect($TECHNOLOG_PROGRAMISTA_OBRABIAREK)->pluck('id')->toArray());
        Category::whereId('1865')->first()->detailprojects()->attach(collect($MISTRZOWIE_PRODUKCJI_W_PRZEMYŚLE_PRZETWÓRCZYM)->pluck('id')->toArray());
        Category::whereId('1883')->first()->detailprojects()->attach(collect($SPECJALISCI_DO_SPRAW_OCHRONY_SRODOWISKA)->pluck('id')->toArray());
        Category::whereId('1896')->first()->detailprojects()->attach(collect($INSPEKTOR_OCHRONY_SRODOWISKA)->pluck('id')->toArray());
        Category::whereId('1904')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZADZEN_W_GOSPODARCE_ODPADAMI)->pluck('id')->toArray());
        Category::whereId('1907')->first()->detailprojects()->attach(collect($SPECJALISCI_DO_SPRAW_HIGIENY_BEZPIECZENSTWA_PRACY_I_OCHRONY_SRODOWISKA)->pluck('id')->toArray());
        Category::whereId('1934')->first()->detailprojects()->attach(collect($AUDYTOR_KONTROLER)->pluck('id')->toArray());

        Category::whereId('1961')->first()->detailprojects()->attach(collect($INSPEKTOR_SANITARNY)->pluck('id')->toArray());
        Category::whereId('1962')->first()->detailprojects()->attach(collect($RZECZOZNAWCA)->pluck('id')->toArray());
        Category::whereId('1966')->first()->detailprojects()->attach(collect($RZECZNIK_PRAW_KONSUMENTA)->pluck('id')->toArray());
        Category::whereId('1972')->first()->detailprojects()->attach(collect($PROJEKTANCI_WZORNICTWA_PRZEMYSŁOWEGO_I_ODZIEŻY)->pluck('id')->toArray());
        Category::whereId('1980')->first()->detailprojects()->attach(collect($OPERATOR_CAD)->pluck('id')->toArray());
        Category::whereId('1983')->first()->detailprojects()->attach(collect($OPERATORZY_MASZYN_I_URZADZEN_DO_PRZEROBKI_MECHANICZNEJ_KOPALIN)->pluck('id')->toArray());
        Category::whereId('1990')->first()->detailprojects()->attach(collect($OPERATORZY_URZADZEN_WIERTNICZYCH_I_WYDOBYWCZYCH_ROPY_GAZU_I_INNYCH_SUROWCOW)->pluck('id')->toArray());
        Category::whereId('2010')->first()->detailprojects()->attach(collect($STRZALOWI_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2015')->first()->detailprojects()->attach(collect($GORNICY_PODZIEMNEJ_I_ODKRYWKOWEJ_EKSPLOATACJI_ZLOZ_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2028')->first()->detailprojects()->attach(collect($TECHNIK_CERAMIK)->pluck('id')->toArray());
        Category::whereId('2029')->first()->detailprojects()->attach(collect($OPERATORZY_URZADZEN_DO_PRODUKCJI_WYROBOW_SZKLANYCH_I_CERAMICZNYCH)->pluck('id')->toArray());
        Category::whereId('2090')->first()->detailprojects()->attach(collect($ZLOTNIK_JUBILER)->pluck('id')->toArray());
        Category::whereId('2092')->first()->detailprojects()->attach(collect($PRACOWNICY_PRZYGOTOWAWCZY_DRUK)->pluck('id')->toArray());
        Category::whereId('2107')->first()->detailprojects()->attach(collect($DRUKARZE)->pluck('id')->toArray());
        Category::whereId('2150')->first()->detailprojects()->attach(collect($STOLARZE_MEBLOWI_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2172')->first()->detailprojects()->attach(collect($OPERATORZY_MASZYN_I_URZĄDZEŃ_DO_OBRÓBKI_DREWNA)->pluck('id')->toArray());
        Category::whereId('2188')->first()->detailprojects()->attach(collect($SZKUTNIK)->pluck('id')->toArray());
        Category::whereId('2190')->first()->detailprojects()->attach(collect($MONTER_MEBLI)->pluck('id')->toArray());
        Category::whereId('2191')->first()->detailprojects()->attach(collect($MONTER_JACHTOW_I_LODZI)->pluck('id')->toArray());
        Category::whereId('2195')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_ODZIEZY)->pluck('id')->toArray());
        Category::whereId('2196')->first()->detailprojects()->attach(collect($KRAWCY_KUSNIERZE_KAPELUSZNICY_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2210')->first()->detailprojects()->attach(collect($SZWACZKI_HAFCIARKI_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2225')->first()->detailprojects()->attach(collect($TECHNIK_STYLISTA)->pluck('id')->toArray());
        Category::whereId('2227')->first()->detailprojects()->attach(collect($TAPICERZY_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2234')->first()->detailprojects()->attach(collect($WYPRAWIACZE_SKOR_GARBARZE_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2253')->first()->detailprojects()->attach(collect($OBUWNICY_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2267')->first()->detailprojects()->attach(collect($OPERATORZY_MASZYN_I_URZADZEN_DO_PRODUKCJI_I_PRZETWORSTWA_METALI)->pluck('id')->toArray());
        Category::whereId('2291')->first()->detailprojects()->attach(collect($OPERATORZY_URZADZEN_DO_OBROBKI_POWIERZCHNIOWEJ_METALI_I_NAKLADANIA_POWLOK)->pluck('id')->toArray());
        Category::whereId('2307')->first()->detailprojects()->attach(collect($TECHNIK_HUTNIK)->pluck('id')->toArray());
        Category::whereId('2309')->first()->detailprojects()->attach(collect($KOWAL)->pluck('id')->toArray());
        Category::whereId('2379')->first()->detailprojects()->attach(collect($OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_Z_TWORZYW_SZTUCZNYCH)->pluck('id')->toArray());
        Category::whereId('2407')->first()->detailprojects()->attach(collect($OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_PAPIERNICZYCH)->pluck('id')->toArray());
        Category::whereId('2434')->first()->detailprojects()->attach(collect($LAKIERNIK)->pluck('id')->toArray());
        Category::whereId('2444')->first()->detailprojects()->attach(collect($SPAWACZE_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2453')->first()->detailprojects()->attach(collect($ŚLUSARZE_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2463')->first()->detailprojects()->attach(collect($USTAWIACZE_I_OPERATORZY_OBRABIAREK_DO_METALI_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2482')->first()->detailprojects()->attach(collect($SZLIFIERZE_NARZĘDZI_I_POLEROWACZE_METALI)->pluck('id')->toArray());
        Category::whereId('2490')->first()->detailprojects()->attach(collect($ROBOTNICY_PRACUJĄCY_PRZY_PRZEŁADUNKU_TOWARÓW)->pluck('id')->toArray());
        Category::whereId('2501')->first()->detailprojects()->attach(collect($UKŁADACZE_TOWARÓW_NA_PÓŁKACH)->pluck('id')->toArray());
        Category::whereId('2507')->first()->detailprojects()->attach(collect($SORTOWACZE_ODPADÓW)->pluck('id')->toArray());
        Category::whereId('2511')->first()->detailprojects()->attach(collect($ZAMIATACZE_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2535')->first()->detailprojects()->attach(collect($ROBOTNIK_NAZIEMNY_W_GORNICTWIE)->pluck('id')->toArray());
        Category::whereId('2557')->first()->detailprojects()->attach(collect($BAGAZOWY)->pluck('id')->toArray());
        Category::whereId('2558')->first()->detailprojects()->attach(collect($BOY_HOTELOWY)->pluck('id')->toArray());
        Category::whereId('2574')->first()->detailprojects()->attach(collect($PRACOWNIK_PRODUKCJI)->pluck('id')->toArray());
        Category::whereId('2575')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZADZEN_W_PRZEMYŚLE_PRZETWÓRCZYM)->pluck('id')->toArray());
        Category::whereId('2577')->first()->detailprojects()->attach(collect($PRACOWNIK_POMOCNICZY_W_GOSPODARCE_ODPADAMI)->pluck('id')->toArray());

    }
}

