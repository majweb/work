<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectProdukcja2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();

        $KIEROWNIK_PRODUKCJI_W_PRZEDSIĘBIORSTWIE_ROLNIM = [

            [
                "id" => 25044,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem produkcji w gospodarstwach rolnych, w tym uprawami, hodowlą zwierząt i zarządzaniem zapasami.",
                    "en" => "Managing the production process in agricultural enterprises, including crops, livestock, and inventory management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25045,
                "name" => json_encode([
                    "pl" => "Nadzór nad pracownikami i koordynowanie działań związanych z produkcją rolną, zapewnianie zgodności z normami jakościowymi.",
                    "en" => "Supervising employees and coordinating agricultural production activities, ensuring compliance with quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25046,
                "name" => json_encode([
                    "pl" => "Opracowywanie harmonogramów produkcji i planów działań w gospodarstwie rolnym, kontrolowanie przebiegu procesów.",
                    "en" => "Developing production schedules and action plans in the farm, monitoring the progress of processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25047,
                "name" => json_encode([
                    "pl" => "Kontrolowanie wydajności pracy oraz optymalizacja procesów produkcji w celu zwiększenia efektywności.",
                    "en" => "Monitoring work performance and optimizing production processes to increase efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25048,
                "name" => json_encode([
                    "pl" => "Nadzór nad zgodnością produkcji z przepisami prawa i standardami ekologicznymi.",
                    "en" => "Supervising compliance of production with legal regulations and environmental standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25049,
                "name" => json_encode([
                    "pl" => "Zarządzanie budżetem gospodarstwa, kontrolowanie kosztów i optymalizacja wydatków związanych z produkcją rolną.",
                    "en" => "Managing the farm's budget, controlling costs, and optimizing expenses related to agricultural production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_PRZEDSIĘBIORSTWA_USŁUGOWEGO_ZWIĄZANEGO_Z_LEŚNICTWEM = [

            [
                "id" => 25050,
                "name" => json_encode([
                    "pl" => "Zarządzanie działalnością przedsiębiorstwa usługowego, które świadczy usługi związane z leśnictwem, takimi jak zalesianie czy pielęgnacja lasów.",
                    "en" => "Managing the operations of a service company providing forestry-related services such as reforestation and forest maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25051,
                "name" => json_encode([
                    "pl" => "Koordynowanie zespołem pracowników w zakresie realizacji usług leśnych, takich jak sadzenie drzew, zbiór drewna czy prace porządkowe w lasach.",
                    "en" => "Coordinating a team of employees in the implementation of forestry services such as tree planting, wood harvesting, and forest maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25052,
                "name" => json_encode([
                    "pl" => "Planowanie i organizowanie zasobów potrzebnych do realizacji usług leśnych, w tym sprzętu, materiałów i zasobów ludzkich.",
                    "en" => "Planning and organizing the resources needed for forestry services, including equipment, materials, and human resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25053,
                "name" => json_encode([
                    "pl" => "Nadzór nad przestrzeganiem przepisów prawa związanych z ochroną środowiska i gospodarką leśną.",
                    "en" => "Supervising compliance with laws related to environmental protection and forestry management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25054,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonywanych usług leśnych, dbanie o ich zgodność z normami branżowymi i oczekiwaniami klientów.",
                    "en" => "Monitoring the quality of forestry services, ensuring compliance with industry standards and customer expectations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25055,
                "name" => json_encode([
                    "pl" => "Zarządzanie budżetem przedsiębiorstwa, planowanie wydatków i optymalizacja kosztów operacyjnych.",
                    "en" => "Managing the company's budget, planning expenses, and optimizing operational costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_W_GOSPODARCE_LEŚNEJ = [

            [
                "id" => 25056,
                "name" => json_encode([
                    "pl" => "Zarządzanie zasobami leśnymi, w tym planowanie i realizacja działań związanych z ochroną lasów, zalesianiem i eksploatacją drewna.",
                    "en" => "Managing forest resources, including planning and implementing activities related to forest protection, afforestation, and wood harvesting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25057,
                "name" => json_encode([
                    "pl" => "Planowanie działalności leśnej w oparciu o badania ekologiczne oraz prognozy dotyczące rozwoju lasów.",
                    "en" => "Planning forestry activities based on ecological research and forecasts regarding forest development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25058,
                "name" => json_encode([
                    "pl" => "Współpraca z jednostkami administracyjnymi i organizacjami związanymi z leśnictwem w celu ochrony środowiska i bioróżnorodności.",
                    "en" => "Cooperating with administrative units and forestry organizations to protect the environment and biodiversity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25059,
                "name" => json_encode([
                    "pl" => "Nadzór nad działalnością leśną w regionie, kontrolowanie jakości prac leśnych i przestrzeganie zasad zrównoważonego rozwoju.",
                    "en" => "Supervising forestry operations in the region, monitoring the quality of forest work, and ensuring compliance with sustainable development principles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25060,
                "name" => json_encode([
                    "pl" => "Organizowanie szkoleń dla pracowników leśnych, dbanie o ich kwalifikacje zawodowe oraz przestrzeganie norm bezpieczeństwa.",
                    "en" => "Organizing training for forestry workers, ensuring their professional qualifications, and complying with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25061,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją związaną z działalnością leśną, w tym raportowanie o stanie lasów i wynikach gospodarowania.",
                    "en" => "Managing documentation related to forestry activities, including reporting on forest status and management results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_PRODUKCJI_W_PRZEDSIĘBIORSTWIE_OGRODNICZYM = [

            [
                "id" => 25062,
                "name" => json_encode([
                    "pl" => "Zarządzanie produkcją roślin w przedsiębiorstwie ogrodniczym, w tym uprawami, pielęgnacją i zbiorami.",
                    "en" => "Managing plant production in a horticultural business, including cultivation, care, and harvesting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25063,
                "name" => json_encode([
                    "pl" => "Nadzór nad personelem ogrodniczym, zapewnienie efektywności pracy i przestrzeganie zasad upraw.",
                    "en" => "Supervising horticultural staff, ensuring work efficiency, and adhering to cultivation principles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25064,
                "name" => json_encode([
                    "pl" => "Koordynowanie zakupów materiałów ogrodniczych oraz zarządzanie zapasami roślin i narzędzi.",
                    "en" => "Coordinating the purchase of horticultural materials and managing the inventory of plants and tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25065,
                "name" => json_encode([
                    "pl" => "Planowanie i optymalizacja procesu produkcji roślinnej w zależności od sezonu i popytu.",
                    "en" => "Planning and optimizing the plant production process based on seasonality and demand."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25066,
                "name" => json_encode([
                    "pl" => "Zarządzanie finansami przedsiębiorstwa ogrodniczego, kontrolowanie kosztów produkcji i sprzedaży.",
                    "en" => "Managing the finances of the horticultural business, controlling production and sales costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25067,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją produkcji, raportowanie o stanie upraw i wynikach sprzedaży.",
                    "en" => "Managing production documentation, reporting on crop status and sales results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_PRODUKCJI_W_PRZEDSIĘBIORSTWIE_HODOWLANYM = [

            [
                "id" => 25068,
                "name" => json_encode([
                    "pl" => "Zarządzanie hodowlą zwierząt, kontrolowanie warunków hodowlanych i monitorowanie zdrowia zwierząt.",
                    "en" => "Managing animal breeding, controlling breeding conditions, and monitoring animal health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25069,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z rozmnażaniem zwierząt, w tym planowanie i nadzorowanie programów hodowlanych.",
                    "en" => "Coordinating breeding activities, including planning and overseeing breeding programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25070,
                "name" => json_encode([
                    "pl" => "Zarządzanie paszami i żywieniem zwierząt, zapewnianie optymalnych warunków do rozwoju zwierząt.",
                    "en" => "Managing animal feed and nutrition, ensuring optimal conditions for animal development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25071,
                "name" => json_encode([
                    "pl" => "Nadzór nad pracownikami hodowlanymi, organizowanie i nadzorowanie codziennych zadań związanych z hodowlą zwierząt.",
                    "en" => "Supervising breeding staff, organizing and overseeing daily tasks related to animal breeding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25072,
                "name" => json_encode([
                    "pl" => "Zarządzanie budżetem hodowlanym, kontrolowanie kosztów związanych z zakupem zwierząt, pasz i sprzętu.",
                    "en" => "Managing the breeding budget, controlling costs associated with purchasing animals, feed, and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25073,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją hodowlaną, raportowanie o stanie hodowli i wynikach produkcji.",
                    "en" => "Managing breeding documentation, reporting on breeding status and production results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KIEROWNICY_PRODUKCJI_W_ROLNICTWIE_I_LEŚNICTWIE = [

            [
                "id" => 25074,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami produkcji rolniczej i leśnej, w tym organizowanie zbiorów, hodowli oraz ochrony roślin i lasów.",
                    "en" => "Managing agricultural and forestry production processes, including organizing harvesting, breeding, and plant and forest protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25075,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z uprawami, hodowlą zwierząt oraz eksploatacją zasobów naturalnych w sektorze rolnictwa i leśnictwa.",
                    "en" => "Coordinating activities related to crops, livestock breeding, and the exploitation of natural resources in agriculture and forestry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25076,
                "name" => json_encode([
                    "pl" => "Monitorowanie wyników produkcji, optymalizacja procesów w celu zwiększenia efektywności i rentowności działalności.",
                    "en" => "Monitoring production results, optimizing processes to increase efficiency and profitability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25077,
                "name" => json_encode([
                    "pl" => "Zarządzanie personelem pracującym w rolnictwie i leśnictwie, koordynowanie pracowników oraz zapewnienie odpowiednich warunków pracy.",
                    "en" => "Managing the personnel working in agriculture and forestry, coordinating workers, and ensuring proper working conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25078,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z planowaniem produkcji, inwestycjami oraz rozwojem technologii w rolnictwie i leśnictwie.",
                    "en" => "Coordinating activities related to production planning, investments, and technological development in agriculture and forestry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25079,
                "name" => json_encode([
                    "pl" => "Zarządzanie budżetem produkcji rolniczej i leśnej, kontrolowanie kosztów oraz optymalizacja wydatków operacyjnych.",
                    "en" => "Managing the agricultural and forestry production budget, controlling costs, and optimizing operational expenses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_PRODUKCJI_W_ZAKŁADACH_AKWAKULTURY = [

            [
                "id" => 25080,
                "name" => json_encode([
                    "pl" => "Zarządzanie hodowlą ryb i innych organizmów wodnych, planowanie produkcji oraz kontrolowanie jakości w zakładach akwakultury.",
                    "en" => "Managing fish and aquatic organism breeding, planning production, and controlling quality in aquaculture facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25081,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z hodowlą ryb, monitorowanie warunków hodowlanych i zapewnianie optymalnego wzrostu organizmów wodnych.",
                    "en" => "Coordinating activities related to fish farming, monitoring breeding conditions, and ensuring optimal growth of aquatic organisms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25082,
                "name" => json_encode([
                    "pl" => "Zarządzanie zasobami wodnymi, kontrolowanie parametrów wody i zapewnianie zdrowia ekosystemów wodnych.",
                    "en" => "Managing water resources, controlling water parameters, and ensuring the health of aquatic ecosystems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25083,
                "name" => json_encode([
                    "pl" => "Zarządzanie personelem pracującym w akwakulturze, organizowanie i nadzorowanie działań hodowlanych.",
                    "en" => "Managing the staff working in aquaculture, organizing and supervising breeding activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25084,
                "name" => json_encode([
                    "pl" => "Planowanie produkcji w zakładach akwakultury, zapewnianie zgodności z normami jakości i przepisami ekologicznymi.",
                    "en" => "Planning production in aquaculture facilities, ensuring compliance with quality standards and environmental regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25085,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji ryb, nadzór nad zbiorami oraz dystrybucją produktów.",
                    "en" => "Optimizing fish production processes, overseeing harvesting and distribution of products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_PRZEDSIĘBIORSTWA_W_RYBOŁÓWSTWIE = [

            [
                "id" => 25086,
                "name" => json_encode([
                    "pl" => "Zarządzanie operacjami w przedsiębiorstwach rybołówczych, w tym planowanie i organizowanie połowów ryb.",
                    "en" => "Managing operations in fishing enterprises, including planning and organizing fish catches."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25087,
                "name" => json_encode([
                    "pl" => "Zarządzanie flota rybacką, monitorowanie działalności połowowej, zapewnianie przestrzegania przepisów dotyczących połowów.",
                    "en" => "Managing the fishing fleet, monitoring fishing operations, ensuring compliance with fishing regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25088,
                "name" => json_encode([
                    "pl" => "Koordynowanie procesów obróbki, pakowania i dystrybucji ryb i innych produktów morskich.",
                    "en" => "Coordinating fish processing, packaging, and distribution processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25089,
                "name" => json_encode([
                    "pl" => "Zarządzanie pracownikami w branży rybołówczej, zapewnienie odpowiednich warunków pracy i szkoleń.",
                    "en" => "Managing employees in the fishing industry, ensuring proper working conditions and training."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25090,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją operacyjną rybołówstwa, prowadzenie raportów i analiz związanych z połowami i produkcją.",
                    "en" => "Managing operational documentation of fishing, maintaining reports and analyses related to catches and production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25091,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji rybnych i morskich, dążenie do zwiększenia efektywności i rentowności.",
                    "en" => "Optimizing fish and seafood production processes, aiming to increase efficiency and profitability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KIEROWNICY_PRODUKCJI_W_ZAKŁADACH_AKWAKULTURY_I_RYBOŁÓWSTWIE = [

            [
                "id" => 25092,
                "name" => json_encode([
                    "pl" => "Zarządzanie produkcją w zakładach akwakultury i rybołówstwie, nadzór nad procesami hodowli ryb, połowów i obróbki ryb.",
                    "en" => "Managing production in aquaculture and fishing enterprises, overseeing fish breeding, fishing, and fish processing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25093,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z eksploatacją zasobów wodnych i zarządzaniem działalnością hodowlano-rybacką.",
                    "en" => "Coordinating activities related to the exploitation of water resources and managing breeding and fishing operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25094,
                "name" => json_encode([
                    "pl" => "Zarządzanie flotą statków rybackich, nadzorowanie pracy i zapewnianie zgodności z normami środowiskowymi.",
                    "en" => "Managing the fishing fleet, supervising operations, and ensuring compliance with environmental standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25095,
                "name" => json_encode([
                    "pl" => "Zarządzanie personelem pracującym w zakładach akwakultury i rybołówstwie, zapewnienie odpowiednich warunków pracy.",
                    "en" => "Managing personnel working in aquaculture and fishing enterprises, ensuring proper working conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25096,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów hodowli ryb, monitorowanie jakości wody i organizowanie połowów zgodnie z planem produkcji.",
                    "en" => "Optimizing fish breeding processes, monitoring water quality, and organizing fishing operations according to the production plan."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25097,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją produkcji, raportowanie wyników połowów, obróbki ryb i sprzedaży.",
                    "en" => "Managing production documentation, reporting on fishing results, fish processing, and sales."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_DO_SPRAW_KONTROLI_JAKOŚCI = [

            [
                "id" => 25098,
                "name" => json_encode([
                    "pl" => "Zarządzanie systemem kontroli jakości, nadzorowanie procesów weryfikacji jakości produktów i usług.",
                    "en" => "Managing the quality control system, overseeing the processes of verifying product and service quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25099,
                "name" => json_encode([
                    "pl" => "Wdrażanie procedur i standardów jakościowych, monitorowanie ich przestrzegania przez pracowników.",
                    "en" => "Implementing quality procedures and standards, monitoring their adherence by employees."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25100,
                "name" => json_encode([
                    "pl" => "Analizowanie wyników kontroli jakości i podejmowanie działań korygujących w przypadku wykrycia niezgodności.",
                    "en" => "Analyzing quality control results and taking corrective actions in case of non-compliance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25101,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie norm jakościowych oraz metod kontroli jakości.",
                    "en" => "Training employees on quality standards and quality control methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25102,
                "name" => json_encode([
                    "pl" => "Koordynowanie audytów jakościowych, monitorowanie skuteczności działań naprawczych.",
                    "en" => "Coordinating quality audits, monitoring the effectiveness of corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25103,
                "name" => json_encode([
                    "pl" => "Opracowywanie raportów z kontroli jakości oraz przedstawianie wyników zarządowi.",
                    "en" => "Preparing quality control reports and presenting results to management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_PRODUKCJI_W_PRZEMYŚLE = [

            [
                "id" => 25104,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem produkcyjnym, koordynowanie produkcji zgodnie z wymaganiami jakościowymi i harmonogramami.",
                    "en" => "Managing the production process, coordinating production according to quality requirements and schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25105,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników produkcyjnych, przydzielanie zadań oraz nadzorowanie efektywności pracy.",
                    "en" => "Managing a team of production workers, assigning tasks, and overseeing work efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25106,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych, minimalizacja strat materiałowych i czasu produkcji.",
                    "en" => "Optimizing production processes, minimizing material waste and production time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25107,
                "name" => json_encode([
                    "pl" => "Zarządzanie harmonogramami produkcji, organizowanie zasobów potrzebnych do realizacji zamówień.",
                    "en" => "Managing production schedules, organizing resources required to fulfill orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25108,
                "name" => json_encode([
                    "pl" => "Kontrolowanie jakości produktów w trakcie produkcji, zapewnianie zgodności z normami jakościowymi.",
                    "en" => "Controlling the quality of products during production, ensuring compliance with quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25109,
                "name" => json_encode([
                    "pl" => "Raportowanie wyników produkcji, wdrażanie działań naprawczych w przypadku wykrycia nieprawidłowości.",
                    "en" => "Reporting production results, implementing corrective actions in case of irregularities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_MAŁEGO_PRZEDSIĘBIORSTWA_W_PRZEMYŚLE_PRZETWÓRCZYM = [

            [
                "id" => 25110,
                "name" => json_encode([
                    "pl" => "Zarządzanie operacjami w małym przedsiębiorstwie przetwórczym, w tym produkcją, logistyką i kontrolą jakości.",
                    "en" => "Managing operations in a small processing enterprise, including production, logistics, and quality control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25111,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych, zarządzanie zapasami surowców i gotowych produktów.",
                    "en" => "Optimizing production processes, managing raw material and finished product inventories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25112,
                "name" => json_encode([
                    "pl" => "Zarządzanie małym zespołem pracowników, przydzielanie zadań oraz dbanie o przestrzeganie zasad BHP.",
                    "en" => "Managing a small team of employees, assigning tasks, and ensuring compliance with safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25113,
                "name" => json_encode([
                    "pl" => "Planowanie i realizowanie procesów produkcji, zarządzanie dostawami i dystrybucją produktów.",
                    "en" => "Planning and executing production processes, managing supplies and distribution of products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25114,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją produkcyjną, monitorowanie wyników produkcji i raportowanie do zarządu.",
                    "en" => "Managing production documentation, monitoring production results, and reporting to management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25115,
                "name" => json_encode([
                    "pl" => "Zarządzanie finansami przedsiębiorstwa, kontrolowanie kosztów produkcji i optymalizacja wydatków.",
                    "en" => "Managing the company's finances, controlling production costs, and optimizing expenses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_UTRZYMANIA_RUCHU = [

            [
                "id" => 25116,
                "name" => json_encode([
                    "pl" => "Zarządzanie działem utrzymania ruchu, zapewnianie sprawności maszyn i urządzeń w zakładzie produkcyjnym.",
                    "en" => "Managing the maintenance department, ensuring the operational efficiency of machines and equipment in the production plant."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25117,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z naprawami maszyn i urządzeń, planowanie harmonogramu konserwacji.",
                    "en" => "Coordinating activities related to machine and equipment repairs, planning maintenance schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25118,
                "name" => json_encode([
                    "pl" => "Nadzór nad wykonywaniem konserwacji prewencyjnej i napraw w zakładzie produkcyjnym.",
                    "en" => "Supervising the execution of preventive maintenance and repairs in the production plant."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25119,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników utrzymania ruchu, organizowanie i nadzorowanie ich pracy.",
                    "en" => "Managing the maintenance team, organizing and supervising their work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25120,
                "name" => json_encode([
                    "pl" => "Zarządzanie zapasami części zamiennych, monitorowanie stanu technicznego urządzeń.",
                    "en" => "Managing spare parts inventory, monitoring the technical condition of equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25121,
                "name" => json_encode([
                    "pl" => "Wdrażanie działań mających na celu zwiększenie efektywności utrzymania ruchu i redukcję przestojów.",
                    "en" => "Implementing actions aimed at increasing maintenance efficiency and reducing downtime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KIEROWNICY_DO_SPRAW_PRODUKCJI_PRZEMYSŁOWEJ = [

            [
                "id" => 25122,
                "name" => json_encode([
                    "pl" => "Zarządzanie i koordynowanie operacjami produkcyjnymi w różnych branżach przemysłowych.",
                    "en" => "Managing and coordinating production operations across various industrial sectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25123,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych, minimalizowanie kosztów oraz zapewnienie wysokiej jakości produktów.",
                    "en" => "Optimizing production processes, minimizing costs, and ensuring high-quality products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25124,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań z zakresu produkcji, logistyki i zarządzania personelem.",
                    "en" => "Coordinating production, logistics, and personnel management activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25125,
                "name" => json_encode([
                    "pl" => "Zarządzanie jakością produktów i usług w ramach procesów produkcyjnych, monitorowanie wyników.",
                    "en" => "Managing product and service quality within production processes, monitoring results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25126,
                "name" => json_encode([
                    "pl" => "Zarządzanie budżetem produkcji, kontrolowanie kosztów oraz optymalizacja wydatków operacyjnych.",
                    "en" => "Managing the production budget, controlling costs, and optimizing operational expenses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25127,
                "name" => json_encode([
                    "pl" => "Nadzór nad zgodnością produkcji z przepisami prawa, standardami bezpieczeństwa i ochrony środowiska.",
                    "en" => "Supervising production compliance with legal regulations, safety standards, and environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_RUCHU_ZAKŁADU_GÓRNICZEGO_LUB_ZAKŁADU = [

            [
                "id" => 25128,
                "name" => json_encode([
                    "pl" => "Zarządzanie operacjami w zakładzie górniczym, nadzór nad eksploatacją surowców naturalnych, planowanie i koordynowanie pracy w kopalni.",
                    "en" => "Managing operations in a mining facility, overseeing the exploitation of natural resources, planning and coordinating work in the mine."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25129,
                "name" => json_encode([
                    "pl" => "Nadzór nad bezpieczeństwem pracy w zakładzie górniczym, kontrolowanie przestrzegania przepisów BHP i ochrony środowiska.",
                    "en" => "Supervising workplace safety in the mining facility, monitoring compliance with health and safety regulations and environmental protection standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25130,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników, przydzielanie zadań oraz nadzorowanie ich efektywności w procesach wydobywczych.",
                    "en" => "Managing a team of workers, assigning tasks, and overseeing their efficiency in extraction processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25131,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji w kopalni, minimalizowanie ryzyka wypadków oraz zwiększanie wydajności.",
                    "en" => "Optimizing production processes in the mine, minimizing accident risks, and increasing productivity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25132,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z konserwacją maszyn i urządzeń górniczych, planowanie napraw i przeglądów.",
                    "en" => "Coordinating maintenance activities for mining machinery and equipment, planning repairs and inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25133,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją techniczną i operacyjną zakładu, raportowanie wyników produkcji oraz wyników badań technicznych.",
                    "en" => "Managing technical and operational documentation of the facility, reporting production results and technical research findings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KIEROWNICY_W_GÓRNICTWIE = [

            [
                "id" => 25134,
                "name" => json_encode([
                    "pl" => "Zarządzanie wszystkimi aspektami działalności zakładu górniczego, w tym planowanie wydobycia, transportu surowców oraz nadzorowanie procesów produkcyjnych.",
                    "en" => "Managing all aspects of mining operations, including planning extraction, transport of raw materials, and overseeing production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25135,
                "name" => json_encode([
                    "pl" => "Koordynowanie pracy w kopalni oraz organizowanie eksploatacji surowców w zgodzie z przepisami prawa i wymaganiami ekologicznymi.",
                    "en" => "Coordinating work in the mine and organizing resource extraction in compliance with legal regulations and environmental requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25136,
                "name" => json_encode([
                    "pl" => "Zarządzanie wydajnością produkcji, podejmowanie działań naprawczych w przypadku obniżenia efektywności procesów górniczych.",
                    "en" => "Managing production efficiency, taking corrective actions in case of reduced efficiency in mining processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25137,
                "name" => json_encode([
                    "pl" => "Nadzór nad przestrzeganiem procedur BHP oraz zapewnianie zgodności działań górniczych z normami środowiskowymi.",
                    "en" => "Supervising compliance with safety procedures and ensuring mining activities align with environmental standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25138,
                "name" => json_encode([
                    "pl" => "Koordynowanie współpracy z innymi działami zakładu górniczego, takimi jak logistyka, transport, bezpieczeństwo.",
                    "en" => "Coordinating collaboration with other departments of the mining facility, such as logistics, transport, and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25139,
                "name" => json_encode([
                    "pl" => "Raportowanie o stanie technicznym maszyn i urządzeń oraz prognozowanie potrzeb w zakresie inwestycji i konserwacji.",
                    "en" => "Reporting on the technical condition of machinery and equipment, and forecasting needs for investments and maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KIEROWNICY_DO_SPRAW_BUDOWNICTWA = [

            [
                "id" => 25140,
                "name" => json_encode([
                    "pl" => "Zarządzanie projektami budowlanymi, koordynowanie realizacji budów oraz nadzorowanie działań związanych z budową obiektów mieszkalnych i komercyjnych.",
                    "en" => "Managing construction projects, coordinating the execution of buildings and overseeing activities related to the construction of residential and commercial properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25141,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z wynajmem, sprzedażą i budową obiektów budowlanych oraz nadzór nad pracami budowlanymi.",
                    "en" => "Coordinating activities related to renting, selling, and constructing buildings, and overseeing construction works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25142,
                "name" => json_encode([
                    "pl" => "Zarządzanie kosztami budowy, monitorowanie wydatków oraz kontrolowanie budżetu projektów budowlanych.",
                    "en" => "Managing construction costs, monitoring expenses, and controlling the budget of construction projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25143,
                "name" => json_encode([
                    "pl" => "Nadzór nad przestrzeganiem przepisów budowlanych, BHP oraz norm jakościowych podczas realizacji inwestycji.",
                    "en" => "Supervising compliance with construction regulations, health and safety standards, and quality norms during project implementation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25144,
                "name" => json_encode([
                    "pl" => "Koordynowanie zespołem inżynierów i pracowników budowlanych, zapewnienie zgodności realizacji budowy z projektem.",
                    "en" => "Coordinating a team of engineers and construction workers, ensuring compliance with the construction project."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25145,
                "name" => json_encode([
                    "pl" => "Planowanie i nadzorowanie harmonogramu budowy, koordynowanie dostaw materiałów budowlanych i usług.",
                    "en" => "Planning and supervising the construction schedule, coordinating the delivery of construction materials and services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_NORMOWANIA_PRACY = [

            [
                "id" => 25146,
                "name" => json_encode([
                    "pl" => "Opracowywanie norm pracy w różnych działach produkcji, ustalanie standardów czasowych i organizacyjnych.",
                    "en" => "Developing work standards in various production departments, establishing time and organizational standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25147,
                "name" => json_encode([
                    "pl" => "Analiza procesów produkcyjnych w celu optymalizacji wykorzystania zasobów ludzkich i materiałowych.",
                    "en" => "Analyzing production processes to optimize the use of human and material resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25148,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów z wyników normowania pracy oraz proponowanie działań usprawniających.",
                    "en" => "Creating reports on work standardization results and proposing improvement actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25149,
                "name" => json_encode([
                    "pl" => "Koordynowanie wdrażania nowych norm pracy i monitorowanie ich efektywności.",
                    "en" => "Coordinating the implementation of new work standards and monitoring their effectiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25150,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie nowych norm pracy oraz metod optymalizacji procesów.",
                    "en" => "Training employees on new work standards and process optimization methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25151,
                "name" => json_encode([
                    "pl" => "Monitorowanie przestrzegania norm pracy i identyfikowanie obszarów do poprawy.",
                    "en" => "Monitoring compliance with work standards and identifying areas for improvement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_ORGANIZACJI_I_PLANOWANIA_PRODUKCJI = [

            [
                "id" => 25152,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów produkcji w oparciu o prognozy popytu, dostępność surowców i zdolności produkcyjne.",
                    "en" => "Developing production plans based on demand forecasts, availability of raw materials, and production capabilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25153,
                "name" => json_encode([
                    "pl" => "Koordynowanie procesów produkcyjnych, nadzorowanie realizacji planów produkcji oraz optymalizacja procesów.",
                    "en" => "Coordinating production processes, overseeing the implementation of production plans, and optimizing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25154,
                "name" => json_encode([
                    "pl" => "Zarządzanie zapasami surowców i materiałów potrzebnych do produkcji oraz zapewnianie ich dostępności.",
                    "en" => "Managing inventory of raw materials and supplies needed for production and ensuring their availability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25155,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych w celu zwiększenia wydajności oraz redukcji kosztów produkcji.",
                    "en" => "Optimizing production processes to increase efficiency and reduce production costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25156,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz wydajności produkcji, identyfikowanie i eliminowanie wąskich gardeł w procesach produkcyjnych.",
                    "en" => "Conducting production performance analyses, identifying and eliminating bottlenecks in production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25157,
                "name" => json_encode([
                    "pl" => "Raportowanie wyników produkcji, przygotowywanie prognoz na przyszłość oraz przedstawianie zaleceń do dalszego rozwoju produkcji.",
                    "en" => "Reporting production results, preparing forecasts for the future, and presenting recommendations for further production development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_UTRZYMANIA_RUCHU = [

            [
                "id" => 25158,
                "name" => json_encode([
                    "pl" => "Zarządzanie działem utrzymania ruchu, nadzór nad stanem technicznym maszyn i urządzeń produkcyjnych.",
                    "en" => "Managing the maintenance department, supervising the technical condition of production machines and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25159,
                "name" => json_encode([
                    "pl" => "Planowanie i organizowanie przeglądów technicznych oraz napraw maszyn i urządzeń produkcyjnych.",
                    "en" => "Planning and organizing technical inspections and repairs of production machines and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25160,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów utrzymania ruchu, zapewnienie minimalnych przestojów w produkcji.",
                    "en" => "Optimizing maintenance processes, ensuring minimal downtime in production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25161,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z naprawami maszyn i urządzeń, nadzór nad zespołem technicznym.",
                    "en" => "Coordinating activities related to machine and equipment repairs, supervising the technical team."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25162,
                "name" => json_encode([
                    "pl" => "Zarządzanie zapasami części zamiennych i materiałów eksploatacyjnych.",
                    "en" => "Managing spare parts inventory and consumables."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25163,
                "name" => json_encode([
                    "pl" => "Wdrażanie procedur zapewnienia jakości utrzymania ruchu oraz dokumentowanie działań związanych z naprawami.",
                    "en" => "Implementing quality assurance procedures for maintenance and documenting repair activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_INŻYNIEROWIE_DO_SPRAW_PRZEMYSŁU_I_PRODUKCJI = [

            [
                "id" => 25164,
                "name" => json_encode([
                    "pl" => "Zarządzanie operacjami produkcyjnymi, optymalizacja procesów w różnych sektorach przemysłowych, zarządzanie zasobami.",
                    "en" => "Managing production operations, optimizing processes in various industrial sectors, managing resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25165,
                "name" => json_encode([
                    "pl" => "Koordynowanie zespołem inżynierów i pracowników produkcyjnych, monitorowanie wyników produkcji oraz podejmowanie działań korygujących.",
                    "en" => "Coordinating a team of engineers and production workers, monitoring production results and taking corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25166,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz produkcji, identyfikowanie nieefektywności oraz wdrażanie usprawnień w procesach produkcyjnych.",
                    "en" => "Conducting production analyses, identifying inefficiencies, and implementing improvements in production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25167,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych w celu zwiększenia rentowności i redukcji kosztów.",
                    "en" => "Optimizing production processes to increase profitability and reduce costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25168,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami produkcji w firmie, tworzenie planów produkcji, kontrolowanie jakości produktów.",
                    "en" => "Managing production processes in the company, creating production plans, controlling product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25169,
                "name" => json_encode([
                    "pl" => "Monitorowanie i raportowanie wyników produkcji, wdrażanie nowych technologii i usprawnień w procesach.",
                    "en" => "Monitoring and reporting production results, implementing new technologies and process improvements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ORGANIZACJI_PRODUKCJI = [

            [
                "id" => 25170,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie harmonogramów produkcji, koordynowanie procesów i nadzorowanie wydajności produkcji.",
                    "en" => "Developing and implementing production schedules, coordinating processes, and supervising production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25171,
                "name" => json_encode([
                    "pl" => "Optymalizacja pracy działów produkcji, identyfikowanie problemów i wprowadzanie rozwiązań w celu poprawy efektywności.",
                    "en" => "Optimizing the work of production departments, identifying problems and implementing solutions to improve efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25172,
                "name" => json_encode([
                    "pl" => "Zarządzanie zapasami materiałów produkcyjnych, planowanie dostaw i monitorowanie stanów magazynowych.",
                    "en" => "Managing inventories of production materials, planning deliveries, and monitoring stock levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25173,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników produkcyjnych, nadzorowanie ich pracy oraz zapewnianie zgodności z normami jakości.",
                    "en" => "Managing the production team, overseeing their work, and ensuring compliance with quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25174,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz produkcji, ocena wyników, wdrażanie działań korygujących w razie potrzeby.",
                    "en" => "Conducting production analyses, evaluating results, and implementing corrective actions when necessary."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25175,
                "name" => json_encode([
                    "pl" => "Raportowanie wyników produkcji oraz proponowanie działań mających na celu poprawę wydajności produkcji.",
                    "en" => "Reporting production results and proposing actions to improve production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_GÓRNIK_GÓRNICTWO_OTWOROWE = [

            [
                "id" => 25176,
                "name" => json_encode([
                    "pl" => "Projektowanie i nadzorowanie procesów wiercenia otworów wiertniczych, kontrolowanie jakości i efektywności prac wiertniczych.",
                    "en" => "Designing and overseeing drilling processes, controlling quality and efficiency of drilling operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25177,
                "name" => json_encode([
                    "pl" => "Wybór odpowiednich technologii wiertniczych oraz nadzorowanie działań związanych z wierceniem otworów wiertniczych.",
                    "en" => "Selecting appropriate drilling technologies and supervising activities related to drilling boreholes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25178,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem wiertników, kontrolowanie jakości wierteł oraz nadzorowanie procesu wiercenia.",
                    "en" => "Managing the drilling team, controlling drill quality, and overseeing the drilling process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25179,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją wiertniczą, raportowanie wyników wierceń oraz kontrolowanie parametrów technicznych otworów.",
                    "en" => "Managing drilling documentation, reporting drilling results, and controlling technical parameters of boreholes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25180,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów wiertniczych, w tym zarządzanie kosztami i czasem realizacji wierceń.",
                    "en" => "Optimizing drilling processes, including managing costs and drilling timeframes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25181,
                "name" => json_encode([
                    "pl" => "Zarządzanie pracami związanymi z ochroną środowiska w obszarze wierceń wiertniczych.",
                    "en" => "Managing environmental protection activities in the field of drilling operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_GÓRNIK_GÓRNICTWO_ODKRYWKOWE = [

            [
                "id" => 25182,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami wydobycia surowców mineralnych w górnictwie odkrywkowym, planowanie i nadzorowanie operacji wydobywczych.",
                    "en" => "Managing the extraction of mineral resources in open-pit mining, planning and supervising mining operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25183,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów transportu surowców z kopalni odkrywkowych, zarządzanie efektywnością pracy kopalni.",
                    "en" => "Supervising the transport processes of raw materials from open-pit mines, managing mining efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25184,
                "name" => json_encode([
                    "pl" => "Projektowanie i implementacja technologii wydobycia oraz nadzorowanie jakości surowców.",
                    "en" => "Designing and implementing extraction technologies and overseeing the quality of raw materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25185,
                "name" => json_encode([
                    "pl" => "Zarządzanie pracownikami w kopalniach odkrywkowych, nadzorowanie przestrzegania przepisów BHP i ochrony środowiska.",
                    "en" => "Managing employees in open-pit mines, supervising compliance with safety regulations and environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25186,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów wydobycia, monitorowanie wyników produkcji oraz raportowanie postępów wydobycia.",
                    "en" => "Optimizing extraction processes, monitoring production results, and reporting on extraction progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25187,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z eksploatacją kopalni odkrywkowych, w tym zarządzanie transportem i logistyką w obszarze górniczym.",
                    "en" => "Coordinating activities related to the exploitation of open-pit mines, including managing transport and logistics in the mining area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_GÓRNIK_GÓRNICTWO_PODZIEMNE = [

            [
                "id" => 25188,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami wydobycia surowców w górnictwie podziemnym, nadzorowanie bezpieczeństwa i efektywności operacji górniczych.",
                    "en" => "Managing resource extraction processes in underground mining, supervising safety and efficiency of mining operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25189,
                "name" => json_encode([
                    "pl" => "Nadzór nad pracami budowlanymi w kopalniach podziemnych, w tym budowa szybów, chodników i innych struktur górniczych.",
                    "en" => "Supervising construction activities in underground mines, including shaft construction, tunnels, and other mining structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25190,
                "name" => json_encode([
                    "pl" => "Projektowanie technologii wydobycia i obsługi podziemnych zakładów górniczych, w tym dobór maszyn i narzędzi.",
                    "en" => "Designing extraction technologies and managing underground mining operations, including selecting machinery and tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25191,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów wydobycia w górnictwie podziemnym, monitorowanie wyników i wdrażanie działań usprawniających.",
                    "en" => "Optimizing extraction processes in underground mining, monitoring results, and implementing improvement actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25192,
                "name" => json_encode([
                    "pl" => "Zarządzanie bezpieczeństwem pracy w kopalniach podziemnych, nadzorowanie przestrzegania norm BHP.",
                    "en" => "Managing workplace safety in underground mines, overseeing compliance with health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25193,
                "name" => json_encode([
                    "pl" => "Koordynowanie działalności związanej z instalacjami wentylacyjnymi, oświetleniem oraz systemami ratunkowymi w kopalniach.",
                    "en" => "Coordinating activities related to ventilation systems, lighting, and emergency systems in mines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_GÓRNIK_WIERTNICTWO = [

            [
                "id" => 25194,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami wiertniczymi, projektowanie wierceń oraz nadzorowanie procesu wiertniczego na polach wiertniczych.",
                    "en" => "Managing drilling processes, designing drillings, and supervising drilling operations on drilling sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25195,
                "name" => json_encode([
                    "pl" => "Wybór odpowiednich technologii wiertniczych i nadzorowanie realizacji procesów wierceń wiertniczych.",
                    "en" => "Selecting appropriate drilling technologies and supervising the implementation of drilling operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25196,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów wiertniczych, minimalizacja kosztów i zwiększanie efektywności operacji wiertniczych.",
                    "en" => "Optimizing drilling processes, minimizing costs, and increasing the efficiency of drilling operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25197,
                "name" => json_encode([
                    "pl" => "Nadzór nad bezpieczeństwem w trakcie wierceń, kontrolowanie przestrzegania przepisów BHP.",
                    "en" => "Supervising safety during drilling operations, ensuring compliance with health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25198,
                "name" => json_encode([
                    "pl" => "Koordynowanie działania sprzętu wiertniczego, nadzór nad konserwacją i naprawą maszyn wiertniczych.",
                    "en" => "Coordinating the operation of drilling equipment, supervising maintenance and repair of drilling machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25199,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami, takimi jak logistyka czy inżynieria, w celu zapewnienia sprawności operacji wiertniczych.",
                    "en" => "Collaborating with other departments such as logistics or engineering to ensure the smooth operation of drilling operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_HUTNIK = [

            [
                "id" => 25200,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami produkcji w hucie, nadzór nad produkcją metali i stopów.",
                    "en" => "Managing production processes in the foundry, overseeing the production of metals and alloys."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25201,
                "name" => json_encode([
                    "pl" => "Projektowanie i optymalizacja procesów hutniczych, monitorowanie jakości produkcji metalurgicznej.",
                    "en" => "Designing and optimizing foundry processes, monitoring the quality of metallurgical production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25202,
                "name" => json_encode([
                    "pl" => "Koordynowanie zespołem pracowników w hucie, nadzorowanie procesów produkcji i utrzymania jakości.",
                    "en" => "Coordinating a team of workers in the foundry, overseeing production processes and maintaining quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25203,
                "name" => json_encode([
                    "pl" => "Optymalizacja zużycia materiałów, monitorowanie wydajności produkcji oraz wprowadzenie działań poprawiających procesy.",
                    "en" => "Optimizing material usage, monitoring production efficiency, and implementing improvements to processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25204,
                "name" => json_encode([
                    "pl" => "Zarządzanie jakością produktów hutniczych, kontrolowanie norm i specyfikacji technicznych.",
                    "en" => "Managing the quality of foundry products, controlling technical standards and specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25205,
                "name" => json_encode([
                    "pl" => "Raportowanie wyników produkcji, analiza wydajności oraz identyfikowanie problemów produkcyjnych.",
                    "en" => "Reporting production results, analyzing performance, and identifying production issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_ODLEWNIK = [

            [
                "id" => 25206,
                "name" => json_encode([
                    "pl" => "Projektowanie i nadzorowanie procesów odlewniczych, nadzór nad produkcją odlewów metalowych i ich jakością.",
                    "en" => "Designing and supervising casting processes, overseeing the production of metal castings and their quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25207,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów do produkcji odlewów oraz zarządzanie procesem topienia metali.",
                    "en" => "Selecting appropriate materials for casting production and managing the metal melting process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25208,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów odlewania, monitorowanie wydajności produkcji i kontrola jakości odlewów.",
                    "en" => "Optimizing casting processes, monitoring production performance, and controlling the quality of castings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25209,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników odlewni, nadzorowanie procesów produkcji i utrzymania standardów jakości.",
                    "en" => "Managing a team of foundry workers, overseeing production processes and maintaining quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25210,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii odlewniczych, poprawa efektywności produkcji i redukcja kosztów.",
                    "en" => "Implementing new casting technologies, improving production efficiency, and reducing costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25211,
                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów i gotowych produktów, organizowanie testów i badań technologicznych.",
                    "en" => "Controlling the quality of materials and finished products, organizing tests and technological studies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_GEOFIZYK_GEOFIZYKA_GÓRNICZA = [

            [
                "id" => 25212,
                "name" => json_encode([
                    "pl" => "Zarządzanie badaniami geofizycznymi w górnictwie, nadzór nad wykonywaniem pomiarów geofizycznych w terenie.",
                    "en" => "Managing geophysical surveys in mining, supervising geophysical measurements in the field."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25213,
                "name" => json_encode([
                    "pl" => "Projektowanie i analizowanie wyników badań geofizycznych w celu określenia struktury geologicznej i wykrywania złóż surowców.",
                    "en" => "Designing and analyzing geophysical survey results to determine the geological structure and detect raw material deposits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25214,
                "name" => json_encode([
                    "pl" => "Wybór odpowiednich metod geofizycznych dla konkretnego obszaru badań, nadzór nad realizacją prac terenowych.",
                    "en" => "Selecting appropriate geophysical methods for a specific research area, supervising fieldwork."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25215,
                "name" => json_encode([
                    "pl" => "Koordynowanie prac z zakresu badań geofizycznych w górnictwie, zapewnienie zgodności z normami bezpieczeństwa i ochrony środowiska.",
                    "en" => "Coordinating geophysical work in mining, ensuring compliance with safety standards and environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25216,
                "name" => json_encode([
                    "pl" => "Analizowanie wyników badań geofizycznych, opracowywanie raportów technicznych i rekomendowanie działań na podstawie wyników.",
                    "en" => "Analyzing geophysical survey results, preparing technical reports, and recommending actions based on findings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25217,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem geofizyków, koordynowanie prac badawczych i nadzorowanie jakości danych geofizycznych.",
                    "en" => "Managing a team of geophysicists, coordinating research work, and overseeing the quality of geophysical data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_GELOG_GEOLOGIA_GÓRNICZA_I_POSZUKIWACZA = [

            [
                "id" => 25218,
                "name" => json_encode([
                    "pl" => "Prowadzenie badań geologicznych w górnictwie, ocena zasobów surowców naturalnych i określanie struktury geologicznej terenów górniczych.",
                    "en" => "Conducting geological research in mining, assessing natural resource reserves and determining the geological structure of mining areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25219,
                "name" => json_encode([
                    "pl" => "Analiza prób geologicznych i górniczych, opracowywanie raportów geologicznych i rekomendowanie metod eksploracji.",
                    "en" => "Analyzing geological and mining samples, preparing geological reports, and recommending exploration methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25220,
                "name" => json_encode([
                    "pl" => "Nadzór nad wykonywaniem odwiertów i badań geologicznych, analiza wyników poszukiwań i weryfikowanie danych geologicznych.",
                    "en" => "Supervising drilling operations and geological surveys, analyzing exploration results and verifying geological data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25221,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów poszukiwań geologicznych, nadzór nad badaniami geologicznymi i opracowywanie planów wydobycia.",
                    "en" => "Developing geological exploration plans, supervising geological surveys, and creating extraction plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25222,
                "name" => json_encode([
                    "pl" => "Ocena jakości surowców naturalnych, opracowywanie metod poszukiwań i wydobycia surowców w terenie górniczym.",
                    "en" => "Assessing the quality of natural resources, developing methods of resource exploration and extraction in mining areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25223,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w zakresie wykorzystania zasobów naturalnych oraz wdrażanie nowych technologii poszukiwań geologicznych.",
                    "en" => "Collaborating with other departments in the utilization of natural resources and implementing new geological exploration technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_GELOG_HYDROLOGIA_GÓRNICZA = [

            [
                "id" => 25224,
                "name" => json_encode([
                    "pl" => "Zarządzanie badaniami hydrologicznymi w górnictwie, analiza wpływu działalności górniczej na zasoby wodne.",
                    "en" => "Managing hydrological research in mining, analyzing the impact of mining activities on water resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25225,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie strategii ochrony zasobów wodnych w rejonach górniczych, nadzorowanie badań hydrologicznych.",
                    "en" => "Developing and implementing water resource protection strategies in mining areas, supervising hydrological studies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25226,
                "name" => json_encode([
                    "pl" => "Ocena ryzyka związana z zasobami wodnymi w obszarach górniczych, rekomendowanie działań zaradczych.",
                    "en" => "Assessing water resource risks in mining areas, recommending corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25227,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami górniczymi w zakresie zarządzania wodami gruntowymi, nadzór nad systemami odwadniania kopalń.",
                    "en" => "Collaborating with other mining departments on groundwater management, overseeing drainage systems in mines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25228,
                "name" => json_encode([
                    "pl" => "Monitorowanie i kontrolowanie jakości wód w rejonach górniczych, raportowanie wyników badań hydrologicznych.",
                    "en" => "Monitoring and controlling water quality in mining areas, reporting hydrological research results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25229,
                "name" => json_encode([
                    "pl" => "Planowanie działań związanych z ochroną zasobów wodnych w kopalniach, wdrażanie nowych technologii ochrony środowiska.",
                    "en" => "Planning activities related to water resource protection in mines, implementing new environmental protection technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_INŻYNIEROWIE_GÓRNICTWA_I_METALURGII = [

            [
                "id" => 25230,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami produkcji surowców mineralnych oraz metalurgicznymi, nadzorowanie wydobycia i obróbki surowców.",
                    "en" => "Managing production processes for mineral and metallurgical raw materials, supervising extraction and processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25231,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji w przemyśle górniczym i metalurgicznym, monitorowanie jakości produktów.",
                    "en" => "Optimizing production processes in the mining and metallurgical industries, monitoring product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25232,
                "name" => json_encode([
                    "pl" => "Projektowanie technologii wydobycia i przetwórstwa surowców, nadzór nad innowacjami w procesach produkcyjnych.",
                    "en" => "Designing extraction and processing technologies for raw materials, overseeing innovations in production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25233,
                "name" => json_encode([
                    "pl" => "Nadzór nad pracami związanymi z obróbką surowców mineralnych, koordynowanie działań w zakresie badań i technologii produkcji.",
                    "en" => "Supervising raw material processing, coordinating research and production technology activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25234,
                "name" => json_encode([
                    "pl" => "Monitorowanie wyników produkcji, identyfikowanie problemów technologicznych oraz wdrażanie działań usprawniających.",
                    "en" => "Monitoring production results, identifying technological issues, and implementing improvement actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25235,
                "name" => json_encode([
                    "pl" => "Raportowanie wyników produkcji w branży górniczej i metalurgicznej, opracowywanie zaleceń dotyczących zwiększenia efektywności produkcji.",
                    "en" => "Reporting production results in the mining and metallurgical industries, preparing recommendations to increase production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_TECHNOLOGII_CERAMIKI = [

            [
                "id" => 25236,
                "name" => json_encode([
                    "pl" => "Projektowanie technologii produkcji ceramiki, opracowywanie nowych materiałów ceramicznych i kontrolowanie jakości wytwarzanych produktów.",
                    "en" => "Designing ceramic production technologies, developing new ceramic materials, and controlling the quality of produced items."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25237,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów produkcji ceramiki, dobór odpowiednich surowców i kontrola jakości gotowych produktów.",
                    "en" => "Supervising ceramic production processes, selecting appropriate raw materials, and controlling the quality of finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25238,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów wytwarzania ceramiki, wdrażanie nowych technologii oraz monitorowanie wydajności produkcji.",
                    "en" => "Optimizing ceramic manufacturing processes, implementing new technologies, and monitoring production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25239,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz materiałowych oraz opracowywanie nowych technologii obróbki i produkcji ceramiki.",
                    "en" => "Conducting material analyses and developing new processing and production technologies for ceramics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25240,
                "name" => json_encode([
                    "pl" => "Zarządzanie produkcją materiałów ceramicznych, kontrolowanie zgodności z normami jakościowymi oraz optymalizacja kosztów produkcji.",
                    "en" => "Managing the production of ceramic materials, ensuring compliance with quality standards, and optimizing production costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25241,
                "name" => json_encode([
                    "pl" => "Zarządzanie badaniami materiałów ceramicznych, współpraca z działem R&D w celu tworzenia nowych produktów.",
                    "en" => "Managing research on ceramic materials, collaborating with the R&D department to develop new products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_TECHNOLOGII_DREWNA = [

            [
                "id" => 25242,
                "name" => json_encode([
                    "pl" => "Projektowanie technologii produkcji wyrobów drewnianych, opracowywanie procesów przetwarzania drewna oraz monitorowanie jakości produktów.",
                    "en" => "Designing production technologies for wood products, developing wood processing processes, and monitoring product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25243,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów produkcji wyrobów drewnianych, dobór odpowiednich surowców oraz kontrola jakości gotowych wyrobów.",
                    "en" => "Supervising the production processes of wood products, selecting appropriate raw materials, and controlling the quality of finished goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25244,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów obróbki drewna, wdrażanie nowych technologii i metod produkcji, kontrolowanie wydajności produkcji.",
                    "en" => "Optimizing wood processing processes, implementing new technologies and production methods, and controlling production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25245,
                "name" => json_encode([
                    "pl" => "Badanie właściwości materiałów drewnianych, opracowywanie nowych technologii w obróbce drewna.",
                    "en" => "Studying the properties of wood materials, developing new technologies in wood processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25246,
                "name" => json_encode([
                    "pl" => "Zarządzanie produkcją i logistyką w branży przetwórstwa drewna, koordynowanie procesów produkcji oraz zarządzanie zapasami surowców.",
                    "en" => "Managing production and logistics in the wood processing industry, coordinating production processes, and managing raw material inventory."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25247,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem konserwacji drewna, wdrażanie technologii ochrony przed uszkodzeniami i szkodnikami.",
                    "en" => "Supervising the wood conservation process, implementing technologies for protection against damage and pests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_TECHNOLOGII_PRZETWÓRSTWA_SKÓRY = [

            [
                "id" => 25248,
                "name" => json_encode([
                    "pl" => "Projektowanie technologii produkcji wyrobów skórzanych, dobór surowców i nadzór nad jakością wyrobów.",
                    "en" => "Designing production technologies for leather products, selecting raw materials, and supervising product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25249,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji skórzanych, wdrażanie nowych technologii oraz monitorowanie wydajności produkcji.",
                    "en" => "Optimizing the production processes of leather goods, implementing new technologies, and monitoring production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25250,
                "name" => json_encode([
                    "pl" => "Zarządzanie jakością surowców skórzanych, nadzór nad procesem garbowania oraz innymi etapami produkcji.",
                    "en" => "Managing the quality of leather raw materials, supervising the tanning process and other production stages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25251,
                "name" => json_encode([
                    "pl" => "Nadzór nad technologami przetwórstwa skóry, nadzorowanie działań produkcyjnych i zapewnienie efektywności produkcji.",
                    "en" => "Supervising leather processing technologists, overseeing production activities, and ensuring production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25252,
                "name" => json_encode([
                    "pl" => "Tworzenie planów produkcji wyrobów skórzanych, analiza efektywności i planowanie zapasów materiałów.",
                    "en" => "Creating production plans for leather goods, analyzing efficiency, and planning material inventory."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25253,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu technologii produkcji skóry, proponowanie działań usprawniających oraz wdrażanie nowych technologii.",
                    "en" => "Monitoring the leather production technology process, suggesting improvements, and implementing new technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_TECHNOLOGII_SZKŁA = [

            [
                "id" => 25254,
                "name" => json_encode([
                    "pl" => "Projektowanie i nadzorowanie procesów produkcji szkła, dobór odpowiednich surowców, kontrola jakości produkcji.",
                    "en" => "Designing and supervising glass production processes, selecting appropriate raw materials, controlling production quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25255,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji szkła, wdrażanie nowych technologii oraz monitorowanie wydajności produkcji.",
                    "en" => "Optimizing glass production processes, implementing new technologies, and monitoring production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25256,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników w zakładzie produkcji szkła, nadzorowanie procesów produkcji i jakości produktów.",
                    "en" => "Managing a team of workers in a glass production facility, overseeing production processes and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25257,
                "name" => json_encode([
                    "pl" => "Analiza i badania materiałów szklanych, opracowywanie nowych technologii i ulepszanie procesów produkcji.",
                    "en" => "Analyzing and researching glass materials, developing new technologies, and improving production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25258,
                "name" => json_encode([
                    "pl" => "Zarządzanie jakością surowców szklarskich i produktów gotowych, nadzorowanie testów wytrzymałościowych i technologicznych.",
                    "en" => "Managing the quality of glass raw materials and finished products, supervising strength and technological tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25259,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z innowacjami w produkcji szkła, wprowadzanie nowych technologii do procesu produkcji.",
                    "en" => "Coordinating activities related to innovations in glass production, introducing new technologies into the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_WŁÓKIENNIK = [

            [
                "id" => 25260,
                "name" => json_encode([
                    "pl" => "Projektowanie technologii produkcji włókien, nadzór nad procesem produkcji tkanin, włókien sztucznych i syntetycznych.",
                    "en" => "Designing fiber production technologies, supervising the process of producing fabrics, artificial, and synthetic fibers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25261,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji włókien, kontrolowanie jakości produkcji i dobór odpowiednich materiałów do produkcji.",
                    "en" => "Optimizing fiber production processes, controlling production quality, and selecting appropriate materials for production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25262,
                "name" => json_encode([
                    "pl" => "Nadzór nad technologiami obróbki włókien, kontrola jakości włókien, tkanin i innych produktów włókienniczych.",
                    "en" => "Supervising fiber processing technologies, controlling the quality of fibers, fabrics, and other textile products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25263,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami produkcji tkanin i włókien, opracowywanie nowych technologii produkcji materiałów włókienniczych.",
                    "en" => "Managing the production processes of fabrics and fibers, developing new production technologies for textile materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25264,
                "name" => json_encode([
                    "pl" => "Współpraca z działem R&D w celu tworzenia nowych materiałów włókienniczych i wdrażania innowacji w produkcji.",
                    "en" => "Collaborating with the R&D department to create new textile materials and implementing innovations in production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25265,
                "name" => json_encode([
                    "pl" => "Zarządzanie kontrolą jakości w produkcji włókien, zapewnienie zgodności z normami oraz opracowanie procedur jakościowych.",
                    "en" => "Managing quality control in fiber production, ensuring compliance with standards, and developing quality procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $NANOTECHNOLOG_INŻYNIER_NANOSTRUKTUR = [

            [
                "id" => 25266,
                "name" => json_encode([
                    "pl" => "Projektowanie i opracowywanie nowych nanostruktur, zarządzanie procesami wytwarzania materiałów na poziomie nano.",
                    "en" => "Designing and developing new nanostructures, managing the processes of producing materials at the nano level."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25267,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów produkcji nanomateriałów, w tym ich syntezę i charakterystykę właściwości.",
                    "en" => "Supervising the production processes of nanomaterials, including their synthesis and characterization of properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25268,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji nanomateriałów, wprowadzanie innowacji i monitorowanie jakości.",
                    "en" => "Optimizing nanomaterial production processes, introducing innovations, and monitoring quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25269,
                "name" => json_encode([
                    "pl" => "Zarządzanie badaniami nad nanomateriałami, współpraca z działem R&D w celu opracowywania nowych technologii.",
                    "en" => "Managing research on nanomaterials, collaborating with the R&D department to develop new technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25270,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością produkcji nanostruktur, wdrażanie nowych technologii i badań w zakresie nanotechnologii.",
                    "en" => "Supervising the quality of nanostructure production, implementing new technologies and research in the field of nanotechnology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25271,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie nowych metod syntezowania nanostruktur, monitorowanie efektywności procesów.",
                    "en" => "Developing and implementing new methods for synthesizing nanostructures, monitoring the efficiency of processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_EROGOMII_I_PROJEKTOWANIA_FORM_UŻYTKOWYCH = [

            [
                "id" => 25272,
                "name" => json_encode([
                    "pl" => "Projektowanie ergonomicznych produktów użytkowych, dostosowywanie ich do potrzeb użytkowników i specyfikacji technicznych.",
                    "en" => "Designing ergonomic consumer products, adapting them to user needs and technical specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25273,
                "name" => json_encode([
                    "pl" => "Analizowanie potrzeb użytkowników, projektowanie form użytkowych z uwzględnieniem ergonomii i komfortu.",
                    "en" => "Analyzing user needs, designing consumer products with consideration for ergonomics and comfort."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25274,
                "name" => json_encode([
                    "pl" => "Ocena użyteczności produktów użytkowych, wykonywanie badań ergonomicznych i testowanie produktów w różnych warunkach.",
                    "en" => "Evaluating the usability of consumer products, conducting ergonomic research, and testing products in various conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25275,
                "name" => json_encode([
                    "pl" => "Projektowanie form użytkowych z uwzględnieniem zasad ergonomii, poprawiających komfort i wydajność użytkowników.",
                    "en" => "Designing functional forms with ergonomic principles, improving user comfort and performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25276,
                "name" => json_encode([
                    "pl" => "Tworzenie prototypów produktów użytkowych, badania ergonomiczne oraz modyfikowanie projektów na podstawie opinii użytkowników.",
                    "en" => "Creating prototypes of consumer products, conducting ergonomic tests, and modifying designs based on user feedback."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25277,
                "name" => json_encode([
                    "pl" => "Konsultacje z zespołami projektowymi w celu wdrażania ergonomicznych rozwiązań w produktach użytkowych.",
                    "en" => "Consulting with design teams to implement ergonomic solutions in consumer products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_PAKOWANIA_I_OPAKOWAŃ = [

            [
                "id" => 25278,
                "name" => json_encode([
                    "pl" => "Projektowanie opakowań dostosowanych do różnych rodzajów produktów, zapewnienie odpowiedniej ochrony przed uszkodzeniami.",
                    "en" => "Designing packaging tailored to different types of products, ensuring appropriate protection from damage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25279,
                "name" => json_encode([
                    "pl" => "Analiza rynku pod kątem najnowszych trendów w opakowaniach, wdrażanie nowych technologii pakowania.",
                    "en" => "Market analysis for the latest packaging trends, implementing new packaging technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25280,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem projektowania i produkcji opakowań, kontrolowanie jakości materiałów pakujących.",
                    "en" => "Managing the design and production process of packaging, controlling the quality of packaging materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25281,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów pakowania w celu zmniejszenia kosztów oraz zwiększenia efektywności produkcji.",
                    "en" => "Optimizing packaging processes to reduce costs and increase production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25282,
                "name" => json_encode([
                    "pl" => "Opracowywanie nowych rozwiązań w zakresie materiałów opakowaniowych, wdrażanie ekologicznych i zrównoważonych opakowań.",
                    "en" => "Developing new solutions for packaging materials, implementing eco-friendly and sustainable packaging."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25283,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem produkcji oraz działem logistyki w celu zapewnienia efektywnego i zgodnego z normami pakowania.",
                    "en" => "Collaborating with production teams and the logistics department to ensure efficient and compliant packaging."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_PROCESU_MALOWANIA = [

            [
                "id" => 25284,
                "name" => json_encode([
                    "pl" => "Projektowanie i optymalizacja procesów malowania w różnych gałęziach przemysłu, nadzorowanie jakości powłok malarskich.",
                    "en" => "Designing and optimizing painting processes in various industries, overseeing the quality of coating finishes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25285,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów aplikacji farb i powłok, wdrażanie innowacyjnych technologii malowania.",
                    "en" => "Supervising paint and coating application processes, implementing innovative painting technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25286,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów malowania, dobór odpowiednich farb, lakierów i materiałów do powłok malarskich.",
                    "en" => "Optimizing painting processes, selecting appropriate paints, lacquers, and materials for coatings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25287,
                "name" => json_encode([
                    "pl" => "Zarządzanie jakością powłok malarskich, nadzór nad kontrolą jakości i testami wytrzymałościowymi.",
                    "en" => "Managing the quality of painted coatings, overseeing quality control and durability tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25288,
                "name" => json_encode([
                    "pl" => "Opracowywanie technologii malowania, monitorowanie postępów i efektywności produkcji.",
                    "en" => "Developing painting technologies, monitoring progress and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25289,
                "name" => json_encode([
                    "pl" => "Kontrolowanie procesów związanych z malowaniem, nadzór nad aplikacją farb na różnych powierzchniach.",
                    "en" => "Controlling painting processes, supervising the application of paint on various surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_INŻYNIERII_MATERIAŁOWEJ = [

            [
                "id" => 25290,
                "name" => json_encode([
                    "pl" => "Projektowanie i rozwój nowych materiałów, nadzorowanie procesów produkcji materiałów i nadzór nad ich jakością.",
                    "en" => "Designing and developing new materials, overseeing production processes and ensuring their quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25291,
                "name" => json_encode([
                    "pl" => "Badanie właściwości materiałów, opracowywanie technologii ich produkcji i przetwarzania.",
                    "en" => "Studying material properties, developing production and processing technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25292,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów wytwarzania materiałów, kontrolowanie jakości surowców i gotowych produktów.",
                    "en" => "Optimizing material manufacturing processes, controlling the quality of raw materials and finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25293,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych materiałów do produkcji, zapewnianie innowacji w zakresie technologii materiałowych.",
                    "en" => "Implementing new materials into production, ensuring innovations in material technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25294,
                "name" => json_encode([
                    "pl" => "Nadzór nad badaniami materiałów, wdrażanie technologii produkcji, które zwiększają wydajność procesów.",
                    "en" => "Supervising material research, implementing production technologies that improve process efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25295,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z jakością materiałów, przeprowadzanie testów wytrzymałościowych i kontroli jakości.",
                    "en" => "Coordinating activities related to material quality, conducting strength tests and quality control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_ORGANIZACJI_I_ROZWOJU_PRZEMYSŁU = [

            [
                "id" => 25296,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie strategii rozwoju przemysłowego, monitorowanie efektywności produkcji i proponowanie działań usprawniających.",
                    "en" => "Developing and implementing industrial development strategies, monitoring production efficiency, and proposing improvement actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25297,
                "name" => json_encode([
                    "pl" => "Analiza procesów produkcyjnych, identyfikowanie obszarów do poprawy i wdrażanie nowych technologii w celu zwiększenia wydajności.",
                    "en" => "Analyzing production processes, identifying areas for improvement, and implementing new technologies to increase efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25298,
                "name" => json_encode([
                    "pl" => "Zarządzanie projektami rozwoju przemysłowego, współpraca z działami badawczo-rozwojowymi i produkcyjnymi.",
                    "en" => "Managing industrial development projects, collaborating with R&D and production departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25299,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami optymalizacji produkcji, wdrażanie nowych rozwiązań technologicznych oraz zarządzanie zasobami.",
                    "en" => "Managing production optimization processes, implementing new technological solutions, and managing resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25300,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz rynku, ocena potrzeb przemysłu, wdrażanie działań rozwoju nowych produktów.",
                    "en" => "Conducting market analysis, assessing industry needs, and implementing actions for the development of new products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25301,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z innowacjami w produkcji, wdrażanie nowych metod organizacyjnych i technologicznych.",
                    "en" => "Coordinating activities related to innovations in production, implementing new organizational and technological methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_UTRZYMANIA_RUCHU = [

            [
                "id" => 25302,
                "name" => json_encode([
                    "pl" => "Nadzór nad utrzymaniem ruchu maszyn i urządzeń w zakładach produkcyjnych, diagnozowanie usterek i planowanie napraw.",
                    "en" => "Supervising the maintenance of machines and equipment in production facilities, diagnosing faults, and planning repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25303,
                "name" => json_encode([
                    "pl" => "Wdrażanie procedur utrzymania ruchu, kontrolowanie stanu technicznego maszyn oraz zapewnienie ich efektywności operacyjnej.",
                    "en" => "Implementing maintenance procedures, controlling the technical condition of machines, and ensuring their operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25304,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z konserwacją i naprawami maszyn oraz urządzeń w zakładzie produkcyjnym.",
                    "en" => "Coordinating activities related to the maintenance and repair of machines and equipment in the production facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25305,
                "name" => json_encode([
                    "pl" => "Planowanie i przeprowadzanie okresowych przeglądów maszyn i urządzeń, zapewnianie ciągłości produkcji.",
                    "en" => "Planning and conducting regular inspections of machines and equipment, ensuring production continuity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25306,
                "name" => json_encode([
                    "pl" => "Dokumentowanie działań związanych z utrzymaniem ruchu, raportowanie usterek i organizowanie działań naprawczych.",
                    "en" => "Documenting maintenance activities, reporting faults, and organizing repair actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25307,
                "name" => json_encode([
                    "pl" => "Zarządzanie zapasami części zamiennych, nadzorowanie procesu zamówień oraz kontroli jakości w trakcie napraw.",
                    "en" => "Managing spare parts inventory, overseeing the ordering process, and quality control during repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_PAPIERNICTWA = [

            [
                "id" => 25308,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem produkcji papieru, kontrolowanie jakości surowców i gotowych wyrobów papierniczych.",
                    "en" => "Supervising the paper production process, controlling the quality of raw materials and finished paper products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25309,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami produkcji papieru, optymalizacja procesów produkcyjnych, monitorowanie jakości.",
                    "en" => "Managing paper production processes, optimizing production processes, and monitoring quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25310,
                "name" => json_encode([
                    "pl" => "Opracowywanie nowych technologii produkcji papieru, wdrażanie innowacji w procesie produkcji papieru.",
                    "en" => "Developing new paper production technologies, implementing innovations in the paper production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25311,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców papierniczych, nadzór nad procesami suszenia, gięcia, i kalandrowania papieru.",
                    "en" => "Controlling the quality of paper raw materials, overseeing drying, calendaring, and sizing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25312,
                "name" => json_encode([
                    "pl" => "Współpraca z działem R&D w celu opracowywania nowych technologii i materiałów papierniczych.",
                    "en" => "Collaborating with the R&D department to develop new technologies and paper materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25313,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem recyklingu papieru, wdrażanie ekologicznych rozwiązań w produkcji papieru.",
                    "en" => "Supervising the paper recycling process, implementing eco-friendly solutions in paper production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_PRZETWÓRSTWA_TWORZYW_SZTUCZNYCH = [

            [
                "id" => 25314,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem przetwórstwa tworzyw sztucznych, nadzór nad produkcją komponentów i wyrobów z tworzyw sztucznych.",
                    "en" => "Managing the plastics processing process, overseeing the production of components and products made of plastics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25315,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji wyrobów z tworzyw sztucznych, kontrola jakości surowców i gotowych produktów.",
                    "en" => "Optimizing the production processes of plastic products, controlling the quality of raw materials and finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25316,
                "name" => json_encode([
                    "pl" => "Nadzorowanie produkcji wyrobów z tworzyw sztucznych, w tym wtrysku, wytłaczania i formowania.",
                    "en" => "Supervising the production of plastic products, including injection molding, extrusion, and forming."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25317,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii przetwórstwa tworzyw sztucznych, kontrolowanie efektywności procesów produkcyjnych.",
                    "en" => "Implementing new plastics processing technologies, controlling the efficiency of production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25318,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z jakością wyrobów z tworzyw sztucznych, przeprowadzanie testów i analiz materiałowych.",
                    "en" => "Coordinating activities related to the quality of plastic products, conducting tests and material analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25319,
                "name" => json_encode([
                    "pl" => "Monitorowanie i raportowanie wydajności procesów produkcji tworzyw sztucznych, wdrażanie działań optymalizujących.",
                    "en" => "Monitoring and reporting on the efficiency of plastics production processes, implementing optimization actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_NORMOWANIA_PRACY = [

            [
                "id" => 25320,
                "name" => json_encode([
                    "pl" => "Analizowanie procesów produkcyjnych i opracowywanie norm pracy, optymalizacja czasu pracy i efektywności pracowników.",
                    "en" => "Analyzing production processes and developing work standards, optimizing work time and employee efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25321,
                "name" => json_encode([
                    "pl" => "Zbieranie danych o procesach pracy, tworzenie raportów dotyczących efektywności produkcji i rekomendowanie działań usprawniających.",
                    "en" => "Collecting data on work processes, creating reports on production efficiency, and recommending improvement actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25322,
                "name" => json_encode([
                    "pl" => "Optymalizacja stanowisk pracy, zapewnienie zgodności z normami BHP oraz procedurami operacyjnymi.",
                    "en" => "Optimizing workstations, ensuring compliance with health and safety standards and operational procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25323,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz ergonomicznych, wdrażanie usprawnień w organizacji pracy w celu zwiększenia wydajności.",
                    "en" => "Conducting ergonomic analyses, implementing improvements in work organization to increase productivity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25324,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami produkcyjnymi w celu tworzenia standardów efektywności pracy oraz wdrażanie nowych norm i procedur.",
                    "en" => "Collaborating with production teams to create work efficiency standards and implementing new norms and procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25325,
                "name" => json_encode([
                    "pl" => "Kontrola wydajności pracy, analiza wyników oraz rekomendowanie usprawnień w organizacji pracy.",
                    "en" => "Controlling work performance, analyzing results, and recommending improvements in work organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_SZKŁA = [

            [
                "id" => 25326,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem produkcji szkła, kontrola jakości i opracowywanie nowych technologii produkcji szkła.",
                    "en" => "Supervising the glass production process, controlling quality, and developing new glass production technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25327,
                "name" => json_encode([
                    "pl" => "Opracowywanie technologii produkcji szkła, optymalizacja procesów produkcyjnych oraz dobór odpowiednich surowców.",
                    "en" => "Developing glass production technologies, optimizing production processes, and selecting appropriate raw materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25328,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców szklarskich, nadzorowanie procesów formowania, topienia i schładzania szkła.",
                    "en" => "Controlling the quality of glass raw materials, overseeing the processes of forming, melting, and cooling glass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25329,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych metod produkcji szkła, nadzór nad produkcją szkła technicznego i dekoracyjnego.",
                    "en" => "Implementing new methods for glass production, supervising the production of technical and decorative glass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25330,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem wytwarzania szkła w zakładzie, optymalizacja kosztów produkcji i monitorowanie wydajności.",
                    "en" => "Managing the glass manufacturing process in the plant, optimizing production costs, and monitoring efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25331,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem badawczo-rozwojowym w celu wdrażania innowacyjnych rozwiązań technologicznych w produkcji szkła.",
                    "en" => "Collaborating with the R&D team to implement innovative technological solutions in glass production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_WŁÓKIENNICZYCH_WYROBÓW_DEKORACYJNYCH = [

            [
                "id" => 25332,
                "name" => json_encode([
                    "pl" => "Projektowanie i produkcja wyrobów włókienniczych dekoracyjnych, nadzór nad procesem tkania, szycia i wykańczania produktów.",
                    "en" => "Designing and producing decorative textile products, overseeing the weaving, sewing, and finishing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25333,
                "name" => json_encode([
                    "pl" => "Zarządzanie produkcją tkanin dekoracyjnych, wybór odpowiednich materiałów oraz kontrolowanie jakości gotowych wyrobów.",
                    "en" => "Managing the production of decorative fabrics, selecting appropriate materials, and controlling the quality of finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25334,
                "name" => json_encode([
                    "pl" => "Koordynowanie procesów produkcji dekoracji tekstylnych, nadzór nad technologiami wykończenia i obróbki materiałów.",
                    "en" => "Coordinating the production of textile decorations, overseeing finishing technologies and material processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25335,
                "name" => json_encode([
                    "pl" => "Opracowywanie nowych technologii produkcji tkanin dekoracyjnych, wdrażanie innowacji w produkcji.",
                    "en" => "Developing new technologies for the production of decorative fabrics, implementing innovations in production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25336,
                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów włókienniczych używanych do produkcji wyrobów dekoracyjnych.",
                    "en" => "Controlling the quality of textile materials used in the production of decorative items."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25337,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami produkcji tkanin dekoracyjnych, od pomysłu po gotowy produkt, monitorowanie efektywności produkcji.",
                    "en" => "Managing the production processes of decorative fabrics, from concept to finished product, monitoring production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_WŁÓKIENNIK = [

            [
                "id" => 25338,
                "name" => json_encode([
                    "pl" => "Nadzór nad produkcją włókien, kontrolowanie jakości tkanin, włókien syntetycznych i naturalnych.",
                    "en" => "Supervising fiber production, controlling the quality of fabrics, synthetic and natural fibers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25339,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami produkcji włókienniczej, dobór materiałów, optymalizacja procesów produkcyjnych.",
                    "en" => "Managing textile production processes, selecting materials, optimizing production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25340,
                "name" => json_encode([
                    "pl" => "Współpraca z działem projektowym w celu tworzenia nowych kolekcji tkanin, włókien i materiałów włókienniczych.",
                    "en" => "Collaborating with the design department to create new collections of fabrics, fibers, and textile materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25341,
                "name" => json_encode([
                    "pl" => "Nadzór nad technologią produkcji włókien, tkanin, nadzorowanie procesu wykończenia materiałów.",
                    "en" => "Supervising the production technology of fibers and fabrics, overseeing the finishing process of materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25342,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami jakościowymi w produkcji włókien i tkanin, kontrolowanie parametrów produkcyjnych.",
                    "en" => "Managing quality processes in fiber and fabric production, controlling production parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25343,
                "name" => json_encode([
                    "pl" => "Zarządzanie produkcją i optymalizowanie wydajności procesu produkcji włókienniczej.",
                    "en" => "Managing production and optimizing the efficiency of the textile production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MISTRZ_PRODUKCJI_W_PRZEMYŚLE_CHEMICZNYM = [
            [
                "id" => 25344,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami produkcji chemicznej, w tym produkcją substancji chemicznych i materiałów.",
                    "en" => "Managing chemical production processes, including the production of chemicals and materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25345,
                "name" => json_encode([
                    "pl" => "Planowanie, organizowanie i nadzorowanie produkcji chemicznej zgodnie z planami produkcyjnymi i normami jakości.",
                    "en" => "Planning, organizing, and overseeing chemical production in accordance with production plans and quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25346,
                "name" => json_encode([
                    "pl" => "Nadzorowanie przestrzegania przepisów BHP oraz zasad ochrony środowiska w procesach chemicznych.",
                    "en" => "Supervising compliance with health and safety regulations and environmental protection standards in chemical processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25347,
                "name" => json_encode([
                    "pl" => "Optymalizowanie procesów produkcyjnych w celu poprawy efektywności i redukcji kosztów.",
                    "en" => "Optimizing production processes to improve efficiency and reduce costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25348,
                "name" => json_encode([
                    "pl" => "Koordynowanie procesów produkcyjnych, zarządzanie zespołem pracowników oraz nadzór nad jakością produktów chemicznych.",
                    "en" => "Coordinating production processes, managing a team of workers, and overseeing the quality of chemical products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25349,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów jakościowych i analizy chemiczne w celu zapewnienia zgodności produktów z normami.",
                    "en" => "Conducting quality tests and chemical analysis to ensure product compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25350,
                "name" => json_encode([
                    "pl" => "Zarządzanie gospodarką materiałową w produkcji chemicznej, kontrolowanie zapasów surowców i półproduktów.",
                    "en" => "Managing material management in chemical production, controlling the inventory of raw materials and semi-finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25351,
                "name" => json_encode([
                    "pl" => "Współpraca z działem kontroli jakości, inżynierii oraz działami technicznymi w celu optymalizacji procesów produkcyjnych.",
                    "en" => "Collaborating with the quality control, engineering, and technical departments to optimize production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25352,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników produkcyjnych w zakresie bezpieczeństwa pracy, obsługi maszyn i technologii chemicznych.",
                    "en" => "Training production employees in safety practices, machine operation, and chemical technology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25353,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości procesów produkcyjnych, identyfikowanie i usuwanie niezgodności oraz problemów technologicznych.",
                    "en" => "Monitoring the quality of production processes, identifying and eliminating non-compliance and technological issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MISTRZ_PRODUKCJI_W_PRZEMYŚLE_DRZEWNYM = [
            [
                "id" => 25354,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów produkcji wyrobów drzewnych, w tym cięcia, obróbki, szlifowania i montażu.",
                    "en" => "Supervising the production processes of wood products, including cutting, processing, sanding, and assembly."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25355,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników odpowiedzialnych za produkcję wyrobów drzewnych, zapewnienie jakości i wydajności.",
                    "en" => "Managing a team of workers responsible for the production of wood products, ensuring quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25356,
                "name" => json_encode([
                    "pl" => "Optymalizowanie procesów produkcyjnych w celu poprawy jakości wyrobów drzewnych oraz zmniejszenia kosztów.",
                    "en" => "Optimizing production processes to improve the quality of wood products and reduce costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25357,
                "name" => json_encode([
                    "pl" => "Nadzór nad przestrzeganiem norm jakości oraz zasad bezpieczeństwa na stanowiskach pracy.",
                    "en" => "Supervising compliance with quality standards and safety rules at workstations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25358,
                "name" => json_encode([
                    "pl" => "Współpraca z działem utrzymania ruchu w zakresie konserwacji i naprawy maszyn oraz urządzeń.",
                    "en" => "Collaborating with the maintenance department on the servicing and repair of machines and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25359,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie obsługi maszyn, technologii obróbki drewna oraz procedur bezpieczeństwa.",
                    "en" => "Training employees in machine operation, wood processing technology, and safety procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25360,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości produkcji, identyfikowanie wadliwych wyrobów i wdrażanie działań naprawczych.",
                    "en" => "Monitoring production quality, identifying defective products, and implementing corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25361,
                "name" => json_encode([
                    "pl" => "Zarządzanie gospodarką materiałową, kontrolowanie zapasów surowców drzewnych i gotowych produktów.",
                    "en" => "Managing material management, controlling the inventory of raw wood materials and finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25362,
                "name" => json_encode([
                    "pl" => "Nadzór nad wytwarzaniem wyrobów drzewnych zgodnie z wymaganiami technicznymi i specyfikacjami klientów.",
                    "en" => "Supervising the production of wood products in accordance with technical requirements and customer specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25363,
                "name" => json_encode([
                    "pl" => "Współpraca z działami jakości i inżynierii w celu wprowadzania usprawnień i optymalizacji procesów produkcyjnych.",
                    "en" => "Collaborating with the quality and engineering departments to implement improvements and optimize production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MISTRZ_PRODUKCJI_W_PRZEMYŚLE_ELEKTROMASZYNOWYM = [
            [
                "id" => 25364,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów produkcji urządzeń elektromaszynowych, takich jak silniki elektryczne, generatory i transformatory.",
                    "en" => "Supervising the production processes of electromechanical devices, such as electric motors, generators, and transformers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25365,
                "name" => json_encode([
                    "pl" => "Koordynowanie montażu, testowania i uruchamiania urządzeń elektromaszynowych zgodnie z wymaganiami klienta.",
                    "en" => "Coordinating the assembly, testing, and commissioning of electromechanical devices according to customer requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25366,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem inżynierów i pracowników produkcyjnych, zapewniając efektywność i jakość produkcji.",
                    "en" => "Managing a team of engineers and production workers, ensuring production efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25367,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów kontroli jakości w produkcji urządzeń elektromaszynowych.",
                    "en" => "Supervising quality control processes in the production of electromechanical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25368,
                "name" => json_encode([
                    "pl" => "Współpraca z działami inżynierii, technologii oraz logistyki w celu optymalizacji procesów produkcyjnych.",
                    "en" => "Collaborating with engineering, technology, and logistics departments to optimize production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MISTRZ_PRODUKCJI_W_PRZEMYŚLE_ELEKTRONICZNYM = [
            [
                "id" => 25369,
                "name" => json_encode([
                    "pl" => "Nadzorowanie montażu i produkcji podzespołów elektronicznych, takich jak płytki drukowane, mikroprocesory i czujniki.",
                    "en" => "Supervising the assembly and production of electronic components such as printed circuit boards, microprocessors, and sensors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25370,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkcji elektroniki, zapewnienie zgodności z wymaganiami klienta oraz specyfikacjami technicznymi.",
                    "en" => "Controlling the quality of electronic production, ensuring compliance with customer requirements and technical specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25371,
                "name" => json_encode([
                    "pl" => "Koordynowanie procesów testowania i weryfikacji urządzeń elektronicznych przed wprowadzeniem do produkcji masowej.",
                    "en" => "Coordinating testing and verification processes of electronic devices before mass production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25372,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami produkcji i montażu, nadzorowanie przepływu komponentów elektronicznych.",
                    "en" => "Managing production and assembly processes, overseeing the flow of electronic components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25373,
                "name" => json_encode([
                    "pl" => "Współpraca z działami R&D i projektowania w celu wdrażania nowych technologii w produkcji elektronicznej.",
                    "en" => "Collaborating with R&D and design departments to implement new technologies in electronic production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MISTRZ_PRODUKCJI_W_PRZEMYŚLE_FARMACEUTYCZNYM = [
            [
                "id" => 25374,
                "name" => json_encode([
                    "pl" => "Nadzorowanie produkcji leków i substancji farmaceutycznych, w tym przygotowanie, mieszanie i pakowanie.",
                    "en" => "Supervising the production of medicines and pharmaceutical substances, including preparation, mixing, and packaging."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25375,
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności produkcji farmaceutycznej z przepisami prawa oraz normami jakości GMP.",
                    "en" => "Ensuring pharmaceutical production compliance with legal regulations and GMP quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25376,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów kontroli jakości leków, przeprowadzanie testów na zgodność z wymaganiami.",
                    "en" => "Supervising quality control processes of medicines, conducting tests for compliance with requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25377,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z pakowaniem, etykietowaniem i dystrybucją produktów farmaceutycznych.",
                    "en" => "Coordinating activities related to packaging, labeling, and distribution of pharmaceutical products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25378,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem R&D oraz innymi działami w celu optymalizacji procesów produkcyjnych.",
                    "en" => "Collaborating with the R&D team and other departments to optimize production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MISTRZ_PRODUKCJI_W_PRZEMYŚLE_METALURGICZNYM = [
            [
                "id" => 25379,
                "name" => json_encode([
                    "pl" => "Nadzorowanie produkcji elementów metalowych, w tym odlewania, walcowania, spawania i obróbki.",
                    "en" => "Supervising the production of metal components, including casting, rolling, welding, and machining."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25380,
                "name" => json_encode([
                    "pl" => "Kontrola jakości metali i elementów metalowych, przeprowadzanie testów wytrzymałościowych i jakościowych.",
                    "en" => "Controlling the quality of metals and metal components, conducting strength and quality tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25381,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z obróbką cieplną, spawaniem i montażem produktów metalowych.",
                    "en" => "Coordinating activities related to heat treatment, welding, and assembly of metal products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25382,
                "name" => json_encode([
                    "pl" => "Nadzorowanie optymalizacji procesów produkcyjnych w celu poprawy wydajności i jakości produktów metalowych.",
                    "en" => "Supervising the optimization of production processes to improve efficiency and quality of metal products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25383,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników produkcyjnych, w tym inżynierów i techników, w celu zapewnienia płynności produkcji.",
                    "en" => "Managing a team of production workers, including engineers and technicians, to ensure smooth production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MISTRZ_PRODUKCJI_W_PRZEMYŚLE_SAMOCHODOWYM = [
            [
                "id" => 25384,
                "name" => json_encode([
                    "pl" => "Nadzorowanie produkcji części samochodowych, w tym montażu podzespołów mechanicznych, elektronicznych i wnętrz.",
                    "en" => "Supervising the production of automotive parts, including the assembly of mechanical, electronic components, and interiors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25385,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem produkcyjnym i koordynowanie pracy na różnych etapach produkcji samochodów.",
                    "en" => "Managing the production team and coordinating work at different stages of car production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25386,
                "name" => json_encode([
                    "pl" => "Optymalizowanie procesów produkcyjnych w celu poprawy jakości oraz efektywności produkcji samochodów.",
                    "en" => "Optimizing production processes to improve quality and efficiency in car manufacturing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25387,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań w zakresie montażu, testowania i kontrolowania jakości pojazdów.",
                    "en" => "Coordinating activities related to assembly, testing, and quality control of vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25388,
                "name" => json_encode([
                    "pl" => "Współpraca z działem inżynierii w celu implementacji nowych technologii w produkcji motoryzacyjnej.",
                    "en" => "Collaborating with the engineering department to implement new technologies in automotive production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MISTRZ_PRODUKCJI_W_PRZEMYŚLE_SPOŻYWCZYM = [
            [
                "id" => 25389,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów produkcji żywności, w tym przetwarzania, pakowania i kontroli jakości produktów spożywczych.",
                    "en" => "Supervising food production processes, including processing, packaging, and quality control of food products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25390,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników produkcyjnych i zapewnienie przestrzegania norm higienicznych oraz jakościowych.",
                    "en" => "Managing a team of production workers and ensuring compliance with hygiene and quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25391,
                "name" => json_encode([
                    "pl" => "Monitorowanie przestrzegania procedur bezpieczeństwa żywności, takich jak HACCP.",
                    "en" => "Monitoring compliance with food safety procedures, such as HACCP."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25392,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produktów spożywczych oraz nadzorowanie testów laboratoryjnych w celu zapewnienia zgodności z normami.",
                    "en" => "Controlling the quality of food products and overseeing laboratory tests to ensure compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25393,
                "name" => json_encode([
                    "pl" => "Koordynowanie procesów produkcji i logistycznych w celu zapewnienia terminowości dostaw.",
                    "en" => "Coordinating production and logistics processes to ensure timely deliveries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25394,
                "name" => json_encode([
                    "pl" => "Współpraca z działem marketingu i sprzedaży w celu optymalizacji produkcji i dostosowania do wymagań rynku.",
                    "en" => "Cooperating with the marketing and sales department to optimize production and adapt to market demands."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MISTRZ_PRODUKCJI_W_PRZEMYŚLE_WŁÓKIENNICZYM = [
            [
                "id" => 25395,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów produkcji tkanin i dzianin, w tym przędzenia, tkania, dziania i wykańczania materiałów.",
                    "en" => "Supervising the production processes of fabrics and textiles, including spinning, weaving, knitting, and finishing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25396,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników odpowiedzialnych za produkcję materiałów tekstylnych.",
                    "en" => "Managing a team of workers responsible for the production of textile materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25397,
                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów włókienniczych oraz nadzorowanie procesów barwienia i wykańczania tkanin.",
                    "en" => "Controlling the quality of textile materials and overseeing the processes of dyeing and finishing fabrics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25398,
                "name" => json_encode([
                    "pl" => "Optymalizowanie procesów produkcyjnych w celu zwiększenia wydajności i jakości tkanin.",
                    "en" => "Optimizing production processes to improve the efficiency and quality of fabrics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25399,
                "name" => json_encode([
                    "pl" => "Koordynowanie współpracy z działem technologicznym i inżynierii w zakresie nowych rozwiązań produkcyjnych.",
                    "en" => "Coordinating cooperation with the technological and engineering departments on new production solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25400,
                "name" => json_encode([
                    "pl" => "Współpraca z działem sprzedaży w zakresie produkcji materiałów zgodnie z wymaganiami klientów.",
                    "en" => "Cooperating with the sales department regarding production of materials according to customer requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MISTRZ_PRODUKCJI_W_POLIGRAFII = [
            [
                "id" => 25401,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów produkcji drukowanych materiałów, takich jak książki, czasopisma, broszury i opakowania.",
                    "en" => "Supervising the production processes of printed materials, such as books, magazines, brochures, and packaging."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25402,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem drukarzy, specjalistów ds. przygotowania materiałów i pracowników produkcyjnych.",
                    "en" => "Managing a team of printers, material preparation specialists, and production workers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25403,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wydruków i monitorowanie zgodności z wymaganiami klientów i specyfikacjami technicznymi.",
                    "en" => "Controlling the quality of prints and monitoring compliance with customer requirements and technical specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25404,
                "name" => json_encode([
                    "pl" => "Optymalizowanie procesów produkcyjnych w celu zwiększenia efektywności i redukcji kosztów.",
                    "en" => "Optimizing production processes to increase efficiency and reduce costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25405,
                "name" => json_encode([
                    "pl" => "Zarządzanie gospodarką materiałową i kontrolowanie zapasów surowców i gotowych produktów.",
                    "en" => "Managing material management and controlling the inventory of raw materials and finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25406,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie obsługi maszyn drukarskich i nowych technologii produkcyjnych.",
                    "en" => "Training employees in the operation of printing machines and new production technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_MISTRZOWIE_PRODUKCJI_W_PRZEMYŚLE_PRZETWÓRCZYM = [
            [
                "id" => 25407,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów produkcji w różnych sektorach przemysłu przetwórczego, w tym obróbki, pakowania i sortowania produktów.",
                    "en" => "Supervising production processes in various sectors of the processing industry, including processing, packaging, and sorting products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25408,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z logistyką i dostawami surowców oraz nadzór nad stanem magazynowym.",
                    "en" => "Coordinating activities related to logistics and raw material deliveries, as well as supervising inventory management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25409,
                "name" => json_encode([
                    "pl" => "Nadzór nad przestrzeganiem standardów jakości oraz procedur w zakresie produkcji i przetwórstwa.",
                    "en" => "Supervising compliance with quality standards and procedures in production and processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25410,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych w celu poprawy wydajności i jakości przetworzonych produktów.",
                    "en" => "Optimizing production processes to improve efficiency and the quality of processed products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25411,
                "name" => json_encode([
                    "pl" => "Zarządzanie gospodarką materiałową, kontrolowanie zapasów surowców oraz gotowych produktów.",
                    "en" => "Managing material management, controlling the inventory of raw materials and finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25412,
                "name" => json_encode([
                    "pl" => "Współpraca z działem technicznym i inżynierii w celu optymalizacji i modernizacji procesów produkcyjnych.",
                    "en" => "Cooperating with the technical and engineering department to optimize and modernize production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MISTRZ_PRODUKCJI_W_PRZEMYŚLE_ODZIEŻOWYM = [
            [
                "id" => 25413,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów produkcji odzieży, w tym krojenia, szycia, wykańczania i pakowania odzieży.",
                    "en" => "Supervising clothing production processes, including cutting, sewing, finishing, and packaging clothing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25414,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników produkcyjnych i zapewnienie przestrzegania harmonogramu produkcji.",
                    "en" => "Managing a team of production workers and ensuring compliance with the production schedule."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25415,
                "name" => json_encode([
                    "pl" => "Kontrola jakości odzieży, w tym przegląd końcowego produktu pod kątem zgodności z wymaganiami.",
                    "en" => "Controlling clothing quality, including reviewing the final product for compliance with requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25416,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji odzieży w celu zwiększenia efektywności i obniżenia kosztów.",
                    "en" => "Optimizing clothing production processes to increase efficiency and reduce costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25417,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie obsługi maszyn i technologii produkcji odzieży.",
                    "en" => "Training employees in machine operation and clothing production technology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25418,
                "name" => json_encode([
                    "pl" => "Współpraca z działem sprzedaży w zakresie produkcji materiałów zgodnie z wymaganiami klientów.",
                    "en" => "Cooperating with the sales department regarding production of materials according to customer requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_BUDOWY_FORTEPIANÓW_I_PIANIN = [
            [
                "id" => 25419,
                "name" => json_encode([
                    "pl" => "Nadzorowanie budowy fortepianów i pianin, w tym montażu ramy, mechanizmu klawiatury i strun.",
                    "en" => "Supervising the construction of pianos and pianolas, including assembly of the frame, keyboard mechanism, and strings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25420,
                "name" => json_encode([
                    "pl" => "Wykonywanie pomiarów i dostosowywanie elementów mechanicznych w celu zapewnienia odpowiedniej jakości dźwięku.",
                    "en" => "Taking measurements and adjusting mechanical elements to ensure proper sound quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25421,
                "name" => json_encode([
                    "pl" => "Sprawdzanie zgodności wykonania z planem i specyfikacjami technicznymi fortepianów i pianin.",
                    "en" => "Checking the compliance of the construction with plans and technical specifications of pianos and pianolas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25422,
                "name" => json_encode([
                    "pl" => "Testowanie instrumentów w celu zapewnienia ich prawidłowego działania, poprawności strojenia i nastroju.",
                    "en" => "Testing the instruments to ensure proper operation, tuning accuracy, and sound quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25423,
                "name" => json_encode([
                    "pl" => "Koordynowanie procesów produkcji, nadzorowanie zespołu pracowników odpowiedzialnych za montaż.",
                    "en" => "Coordinating the production processes, supervising a team of workers responsible for assembly."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25424,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją techniczną oraz kontrola jakości wykonania instrumentów.",
                    "en" => "Managing technical documentation and quality control of the instruments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_INŻYNIERII_MATERIAŁÓW_SYNTETYCZNYCH = [
            [
                "id" => 25425,
                "name" => json_encode([
                    "pl" => "Badanie i opracowywanie nowych materiałów syntetycznych w celu zastosowania ich w przemyśle.",
                    "en" => "Researching and developing new synthetic materials for application in industry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25426,
                "name" => json_encode([
                    "pl" => "Projektowanie i optymalizacja procesów produkcji materiałów syntetycznych, takich jak tworzywa sztuczne.",
                    "en" => "Designing and optimizing production processes for synthetic materials such as plastics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25427,
                "name" => json_encode([
                    "pl" => "Współpraca z działami produkcji i technologii w celu wdrażania nowych materiałów w procesach produkcyjnych.",
                    "en" => "Collaborating with production and technology departments to implement new materials in production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25428,
                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów syntetycznych, przeprowadzanie testów wytrzymałościowych i chemicznych.",
                    "en" => "Quality control of synthetic materials, conducting strength and chemical tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25429,
                "name" => json_encode([
                    "pl" => "Analiza wpływu różnych składników chemicznych na właściwości materiałów syntetycznych.",
                    "en" => "Analyzing the impact of various chemical components on the properties of synthetic materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25430,
                "name" => json_encode([
                    "pl" => "Opracowywanie specyfikacji technicznych materiałów syntetycznych dla klientów i współpraca z działem sprzedaży.",
                    "en" => "Developing technical specifications for synthetic materials for clients and collaborating with the sales department."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_PAPIERNICTWA = [
            [
                "id" => 25431,
                "name" => json_encode([
                    "pl" => "Projektowanie i optymalizacja procesów produkcji papieru, w tym przetwarzanie surowców i obróbka papieru.",
                    "en" => "Designing and optimizing paper production processes, including raw material processing and paper finishing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25432,
                "name" => json_encode([
                    "pl" => "Współpraca z działem kontroli jakości w zakresie monitorowania parametrów jakościowych produkowanego papieru.",
                    "en" => "Collaborating with the quality control department to monitor the quality parameters of the produced paper."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25433,
                "name" => json_encode([
                    "pl" => "Analiza wydajności maszyn papierniczych i opracowywanie zaleceń dla ich optymalizacji.",
                    "en" => "Analyzing the performance of paper machines and developing recommendations for optimization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25434,
                "name" => json_encode([
                    "pl" => "Kontrola jakości papieru, w tym sprawdzanie grubości, wytrzymałości oraz jego estetyki.",
                    "en" => "Quality control of paper, including checking thickness, strength, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25435,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami recyklingu papieru i wdrażanie rozwiązań poprawiających efektywność produkcji.",
                    "en" => "Managing paper recycling processes and implementing solutions to improve production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25436,
                "name" => json_encode([
                    "pl" => "Opracowywanie nowych technologii w produkcji papieru, w tym badania nad nowymi materiałami.",
                    "en" => "Developing new technologies in paper production, including research on new materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_BUDOWY_I_STROJENIA_FORTEPIANÓW_I_PIANIN = [
            [
                "id" => 25437,
                "name" => json_encode([
                    "pl" => "Budowa, montaż i strojenie fortepianów oraz pianin, dostosowywanie ich brzmienia.",
                    "en" => "Construction, assembly, and tuning of pianos and pianolas, adjusting their sound."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25438,
                "name" => json_encode([
                    "pl" => "Strojenie fortepianów, regulacja mechanizmu klawiatury, strun i pedałów.",
                    "en" => "Tuning pianos, adjusting the keyboard mechanism, strings, and pedals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25439,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja elementów mechanicznych fortepianów, takich jak młoteczki, mechanizmy pedałowe.",
                    "en" => "Repairing and maintaining mechanical elements of pianos, such as hammers, pedal mechanisms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25440,
                "name" => json_encode([
                    "pl" => "Optymalizacja brzmienia instrumentów, dostosowywanie napięcia strun i akustyki.",
                    "en" => "Optimizing the sound of instruments, adjusting string tension and acoustics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25441,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem konstrukcyjnym przy projektowaniu nowych modeli fortepianów i pianin.",
                    "en" => "Collaborating with the design team on the development of new models of pianos and pianolas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25442,
                "name" => json_encode([
                    "pl" => "Szkolenie innych techników w zakresie strojenia fortepianów i konserwacji instrumentów.",
                    "en" => "Training other technicians in piano tuning and instrument maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $AUDYTOR_ŚRODOWISKOWY = [
            [
                "id" => 25443,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów środowiskowych w celu oceny zgodności z przepisami ochrony środowiska.",
                    "en" => "Conducting environmental audits to assess compliance with environmental protection regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25444,
                "name" => json_encode([
                    "pl" => "Ocena wpływu działań przemysłowych na środowisko naturalne i proponowanie działań naprawczych.",
                    "en" => "Assessing the environmental impact of industrial activities and proposing corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25445,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów audytowych oraz dokumentacji związanej z ochroną środowiska.",
                    "en" => "Preparing audit reports and documentation related to environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25446,
                "name" => json_encode([
                    "pl" => "Monitorowanie zgodności z przepisami dotyczącymi emisji spalin, odpadów i innych zanieczyszczeń.",
                    "en" => "Monitoring compliance with regulations regarding emissions, waste, and other pollutants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25447,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii zarządzania odpadami oraz zasobami wodnymi w firmach.",
                    "en" => "Developing waste management strategies and water resource management within companies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25448,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w celu wdrażania i monitorowania polityki środowiskowej firmy.",
                    "en" => "Cooperating with other departments to implement and monitor the company’s environmental policy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $EKOLOG = [
            [
                "id" => 25449,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań nad stanem środowiska naturalnego, w tym jakości powietrza, wody i gleby.",
                    "en" => "Conducting research on the state of the natural environment, including air, water, and soil quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25450,
                "name" => json_encode([
                    "pl" => "Analiza skutków zmian klimatycznych i ich wpływu na lokalne ekosystemy.",
                    "en" => "Analyzing the effects of climate change and its impact on local ecosystems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25451,
                "name" => json_encode([
                    "pl" => "Opracowywanie raportów ekologicznych i dokumentacji związanej z ochroną środowiska.",
                    "en" => "Preparing environmental reports and documentation related to environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25452,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie zrównoważonego rozwoju, ochrony przyrody i zarządzania zasobami naturalnymi.",
                    "en" => "Providing advice on sustainable development, nature conservation, and natural resource management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25453,
                "name" => json_encode([
                    "pl" => "Współpraca z organizacjami pozarządowymi i rządowymi w celu ochrony środowiska naturalnego.",
                    "en" => "Collaborating with non-governmental and governmental organizations to protect the natural environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25454,
                "name" => json_encode([
                    "pl" => "Edukowanie społeczeństwa na temat ochrony środowiska i zrównoważonego rozwoju.",
                    "en" => "Educating the public on environmental protection and sustainable development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_OCHRONY_ŚRODOWISKA = [
            [
                "id" => 25455,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie polityki ochrony środowiska w organizacjach.",
                    "en" => "Developing and implementing environmental protection policies in organizations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25456,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów związanych z gospodarowaniem odpadami, emisjami i wykorzystaniem zasobów.",
                    "en" => "Supervising processes related to waste management, emissions, and resource use."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25457,
                "name" => json_encode([
                    "pl" => "Monitorowanie wpływu działalności przedsiębiorstwa na środowisko, przygotowywanie raportów ekologicznych.",
                    "en" => "Monitoring the impact of business activities on the environment, preparing environmental reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25458,
                "name" => json_encode([
                    "pl" => "Zarządzanie zgodnością z przepisami ochrony środowiska oraz kontrolowanie przestrzegania norm ekologicznych.",
                    "en" => "Managing compliance with environmental regulations and monitoring adherence to ecological standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25459,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie strategii środowiskowych oraz optymalizacji działań proekologicznych w firmach.",
                    "en" => "Advising on environmental strategies and optimizing pro-environmental actions in companies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25460,
                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń i warsztatów dla pracowników z zakresu ochrony środowiska i zrównoważonego rozwoju.",
                    "en" => "Conducting training and workshops for employees on environmental protection and sustainable development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_SPECJALIŚCI_DO_SPRAW_OCHRONY_ŚRODOWISKA = [
            [
                "id" => 25461,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii ochrony środowiska oraz planów zarządzania ryzykiem ekologicznym.",
                    "en" => "Developing environmental protection strategies and environmental risk management plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25462,
                "name" => json_encode([
                    "pl" => "Współpraca z działami odpowiedzialnymi za zarządzanie odpadami, wodami, oraz emisjami w firmach.",
                    "en" => "Cooperating with departments responsible for waste, water, and emissions management in companies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25463,
                "name" => json_encode([
                    "pl" => "Monitorowanie i ocena działań mających na celu minimalizowanie wpływu działalności gospodarczej na środowisko.",
                    "en" => "Monitoring and evaluating actions aimed at minimizing the environmental impact of business activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25464,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji środowiskowej oraz raportów zgodności z wymaganiami prawnymi.",
                    "en" => "Preparing environmental documentation and compliance reports with legal requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25465,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań mających na celu uzyskanie certyfikatów środowiskowych, takich jak ISO 14001.",
                    "en" => "Coordinating actions to obtain environmental certifications, such as ISO 14001."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25466,
                "name" => json_encode([
                    "pl" => "Edukacja ekologiczna i propagowanie działań proekologicznych w firmach oraz społecznościach.",
                    "en" => "Environmental education and promoting pro-environmental activities within companies and communities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_APARATURY_DO_PRZETWARZANIA_ODPADÓW_NIEBEZPIECZNYCH = [
            [
                "id" => 25467,
                "name" => json_encode([
                    "pl" => "Obsługa aparatury do przetwarzania odpadów niebezpiecznych, w tym ich segregacja, obróbka i neutralizacja.",
                    "en" => "Operating equipment for hazardous waste processing, including sorting, treatment, and neutralization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25468,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów przetwarzania odpadów, zapewnienie ich zgodności z normami ochrony środowiska.",
                    "en" => "Monitoring waste processing processes, ensuring compliance with environmental protection standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25469,
                "name" => json_encode([
                    "pl" => "Kontrola stanu technicznego urządzeń i instalacji wykorzystywanych do przetwarzania odpadów niebezpiecznych.",
                    "en" => "Controlling the technical condition of equipment and installations used for hazardous waste processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25470,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją dotyczącą obiegu i przetwarzania odpadów niebezpiecznych.",
                    "en" => "Managing documentation related to the circulation and processing of hazardous waste."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25471,
                "name" => json_encode([
                    "pl" => "Współpraca z działem ochrony środowiska w zakresie monitorowania i raportowania emisji związanych z przetwarzaniem odpadów.",
                    "en" => "Cooperating with the environmental protection department in monitoring and reporting emissions related to waste processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25472,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP oraz procedur bezpieczeństwa związanych z przetwarzaniem odpadów niebezpiecznych.",
                    "en" => "Adhering to health and safety regulations and safety procedures related to hazardous waste processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_SPALARNI_ODPADÓW_KOMUNALNYCH = [
            [
                "id" => 25473,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń spalarni odpadów komunalnych, w tym monitorowanie i regulowanie procesów spalania.",
                    "en" => "Operating municipal waste incinerator equipment, including monitoring and adjusting combustion processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25474,
                "name" => json_encode([
                    "pl" => "Kontrola parametrów emisji spalin i zapewnienie ich zgodności z normami środowiskowymi.",
                    "en" => "Controlling the emission parameters of flue gases and ensuring compliance with environmental standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25475,
                "name" => json_encode([
                    "pl" => "Utrzymywanie urządzeń spalarni w dobrym stanie technicznym poprzez regularne przeglądy i konserwację.",
                    "en" => "Maintaining incinerator equipment in good technical condition through regular inspections and maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25476,
                "name" => json_encode([
                    "pl" => "Zarządzanie i raportowanie wyników operacji spalania, monitorowanie efektywności procesów.",
                    "en" => "Managing and reporting the results of incineration operations, monitoring process efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25477,
                "name" => json_encode([
                    "pl" => "Szkolenie i nadzór nad pracownikami zajmującymi się obsługą spalarni i przestrzeganiem zasad BHP.",
                    "en" => "Training and supervising workers operating the incinerator and ensuring adherence to health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25478,
                "name" => json_encode([
                    "pl" => "Współpraca z działem ochrony środowiska w celu minimalizacji wpływu spalarni na środowisko.",
                    "en" => "Cooperating with the environmental protection department to minimize the environmental impact of the incinerator."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_KLIMATYZACYJNYCH_I_ODPYLAJĄCYCH = [
            [
                "id" => 25479,
                "name" => json_encode([
                    "pl" => "Obsługa i konserwacja urządzeń klimatyzacyjnych i odpylających w celu utrzymania ich wydajności.",
                    "en" => "Operating and maintaining air conditioning and dust extraction equipment to ensure their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25480,
                "name" => json_encode([
                    "pl" => "Kontrola parametrów pracy urządzeń klimatyzacyjnych i odpylających, monitorowanie zużycia energii.",
                    "en" => "Monitoring the operational parameters of air conditioning and dust extraction systems, tracking energy consumption."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25481,
                "name" => json_encode([
                    "pl" => "Wykonywanie regularnych przeglądów technicznych oraz konserwacja urządzeń w celu zapewnienia ich sprawności.",
                    "en" => "Performing regular technical inspections and maintenance of equipment to ensure its proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25482,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją serwisową i zgłaszanie usterek do działu technicznego.",
                    "en" => "Managing service documentation and reporting faults to the technical department."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25483,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości powietrza oraz efektywności systemów klimatyzacyjnych i odpylających.",
                    "en" => "Monitoring air quality and the efficiency of air conditioning and dust extraction systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25484,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników z zakresu obsługi urządzeń oraz zasad BHP związanych z klimatyzacją i odpylaniem.",
                    "en" => "Training employees in the operation of equipment and safety procedures related to air conditioning and dust extraction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_OCZYSZCZANIA_ŚCIEKÓW = [
            [
                "id" => 25485,
                "name" => json_encode([
                    "pl" => "Obsługa i konserwacja urządzeń do oczyszczania ścieków, w tym filtracji, osadzania i dekantacji.",
                    "en" => "Operating and maintaining wastewater treatment equipment, including filtration, sedimentation, and decanting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25486,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów jakości wody, regulowanie procesów oczyszczania zgodnie z normami środowiskowymi.",
                    "en" => "Monitoring water quality parameters, adjusting treatment processes according to environmental standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25487,
                "name" => json_encode([
                    "pl" => "Wykonywanie przeglądów urządzeń i instalacji oczyszczających oraz zapewnienie ich efektywności.",
                    "en" => "Conducting equipment and installation inspections to ensure their efficiency in wastewater treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25488,
                "name" => json_encode([
                    "pl" => "Zarządzanie gospodarką chemikaliami używanymi w procesach oczyszczania ścieków.",
                    "en" => "Managing the chemicals used in wastewater treatment processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25489,
                "name" => json_encode([
                    "pl" => "Współpraca z działem kontroli jakości w celu zapewnienia zgodności procesów oczyszczania z normami.",
                    "en" => "Collaborating with the quality control department to ensure compliance with treatment process standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25490,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie obsługi urządzeń oczyszczania ścieków oraz przestrzegania zasad BHP.",
                    "en" => "Training employees in the operation of wastewater treatment equipment and adhering to health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_UZDATNIANIA_I_DEMINERALIZACJI_WODY = [
            [
                "id" => 25491,
                "name" => json_encode([
                    "pl" => "Obsługa i monitorowanie urządzeń do uzdatniania i demineralizacji wody, w tym filtracji, wymiany jonowej i demineralizacji.",
                    "en" => "Operating and monitoring equipment for water treatment and demineralization, including filtration, ion exchange, and demineralization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25492,
                "name" => json_encode([
                    "pl" => "Kontrola parametrów wody, takich jak twardość, pH oraz stężenie jonów, oraz regulowanie procesów uzdatniania.",
                    "en" => "Controlling water parameters such as hardness, pH, and ion concentration, and adjusting treatment processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25493,
                "name" => json_encode([
                    "pl" => "Wykonywanie regularnych przeglądów technicznych urządzeń i instalacji uzdatniania wody.",
                    "en" => "Performing regular technical inspections of water treatment and demineralization equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25494,
                "name" => json_encode([
                    "pl" => "Zarządzanie gospodarką chemikaliami wykorzystywanymi w procesach uzdatniania i demineralizacji wody.",
                    "en" => "Managing the chemicals used in water treatment and demineralization processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25495,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości wody dostarczanej do procesów produkcyjnych lub konsumpcyjnych, zgodnie z wymaganiami.",
                    "en" => "Monitoring the quality of water supplied to production or consumption processes, in compliance with requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25496,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP oraz procedur bezpieczeństwa związanych z uzdatnianiem i demineralizacją wody.",
                    "en" => "Adhering to health and safety regulations and safety procedures related to water treatment and demineralization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_OCZYSZCZANIA_TERENU_Z_MATERIAŁÓW_WYBUCHOWYCH_I_NIEBEZPIECZNYCH = [
            [
                "id" => 25497,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac związanych z oczyszczaniem terenu z materiałów wybuchowych i niebezpiecznych, takich jak bomby, amunicja, chemikalia.",
                    "en" => "Carrying out work related to land clearance of explosives and hazardous materials such as bombs, ammunition, chemicals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25498,
                "name" => json_encode([
                    "pl" => "Dokonywanie dokładnych inspekcji terenów w celu identyfikacji materiałów wybuchowych lub niebezpiecznych.",
                    "en" => "Conducting thorough inspections of areas to identify explosive or hazardous materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25499,
                "name" => json_encode([
                    "pl" => "Bezpieczne usuwanie materiałów wybuchowych i niebezpiecznych, przestrzegając wszystkich zasad BHP.",
                    "en" => "Safely removing explosive and hazardous materials while adhering to all health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25500,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań z odpowiednimi służbami ratunkowymi w przypadku znalezienia materiałów wybuchowych.",
                    "en" => "Coordinating actions with relevant emergency services in case of discovery of explosives."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25501,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szkoleń z zakresu bezpieczeństwa pracy i odpowiednich procedur w zakresie usuwania materiałów niebezpiecznych.",
                    "en" => "Conducting safety training and appropriate procedures for hazardous material removal."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25502,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów dotyczących usuniętych materiałów wybuchowych i niebezpiecznych, zgodnie z wymaganiami prawnymi.",
                    "en" => "Preparing reports regarding removed explosive and hazardous materials in compliance with legal requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_URZĄDZEŃ_DO_SPALANIA_ODPADÓW_UZDATNIANIA_WODY_I_POKREWNI = [
            [
                "id" => 25503,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do spalania odpadów, uzdatniania wody oraz innych pokrewnych instalacji przemysłowych.",
                    "en" => "Operating equipment for waste incineration, water treatment, and other related industrial installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25504,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów procesów technologicznych, takich jak emisje, jakość wody i zużycie energii.",
                    "en" => "Monitoring process parameters such as emissions, water quality, and energy consumption."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25505,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji i przeglądów urządzeń do spalania odpadów i uzdatniania wody.",
                    "en" => "Performing maintenance and inspections of waste incineration and water treatment equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25506,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami operacyjnymi urządzeń, zapewniając ich efektywność i zgodność z normami ekologicznymi.",
                    "en" => "Managing operational processes of equipment, ensuring efficiency and compliance with environmental standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25507,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników operacyjnych i raportowanie niezgodności w procesach produkcyjnych.",
                    "en" => "Documenting operational results and reporting non-compliance in production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25508,
                "name" => json_encode([
                    "pl" => "Współpraca z działem technicznym w zakresie optymalizacji wydajności urządzeń oraz poprawy procesów.",
                    "en" => "Cooperating with the technical department to optimize equipment performance and improve processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $EDUKATOR_EKOLOGICZNY = [
            [
                "id" => 25509,
                "name" => json_encode([
                    "pl" => "Edukacja i informowanie społeczności o ochronie środowiska i zrównoważonym rozwoju.",
                    "en" => "Educating and informing the community about environmental protection and sustainable development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25510,
                "name" => json_encode([
                    "pl" => "Organizowanie warsztatów, szkoleń i spotkań edukacyjnych z zakresu ochrony środowiska.",
                    "en" => "Organizing workshops, training, and educational meetings on environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25511,
                "name" => json_encode([
                    "pl" => "Opracowywanie materiałów edukacyjnych i kampanii informacyjnych na temat ochrony środowiska.",
                    "en" => "Developing educational materials and informational campaigns on environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25512,
                "name" => json_encode([
                    "pl" => "Promowanie działań proekologicznych w firmach, szkołach i innych organizacjach.",
                    "en" => "Promoting pro-environmental activities in companies, schools, and other organizations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25513,
                "name" => json_encode([
                    "pl" => "Zarządzanie projektami edukacyjnymi związanymi z ochroną środowiska i zrównoważonym rozwojem.",
                    "en" => "Managing educational projects related to environmental protection and sustainable development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25514,
                "name" => json_encode([
                    "pl" => "Współpraca z organizacjami pozarządowymi, szkołami oraz samorządami w zakresie edukacji ekologicznej.",
                    "en" => "Cooperating with non-governmental organizations, schools, and local governments on environmental education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $STRAŻNIK_OCHRONY_PRZYRODY_ŚRODOWISKA = [
            [
                "id" => 25515,
                "name" => json_encode([
                    "pl" => "Nadzorowanie obszarów chronionych, w tym parków narodowych, rezerwatów przyrody i obszarów Natura 2000.",
                    "en" => "Supervising protected areas, including national parks, nature reserves, and Natura 2000 sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25516,
                "name" => json_encode([
                    "pl" => "Monitorowanie przestrzegania przepisów dotyczących ochrony przyrody i środowiska.",
                    "en" => "Monitoring compliance with regulations regarding nature and environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25517,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami ochrony środowiska w zakresie realizacji programów ochrony przyrody.",
                    "en" => "Collaborating with environmental protection institutions to implement nature conservation programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25518,
                "name" => json_encode([
                    "pl" => "Prowadzenie działań edukacyjnych na rzecz ochrony przyrody, w tym organizowanie warsztatów i spotkań z lokalnymi społecznościami.",
                    "en" => "Conducting educational activities for nature conservation, including organizing workshops and meetings with local communities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25519,
                "name" => json_encode([
                    "pl" => "Dokonywanie kontroli terenowych w celu wykrywania naruszeń przepisów ochrony przyrody i środowiska.",
                    "en" => "Conducting field inspections to detect violations of nature and environmental protection regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25520,
                "name" => json_encode([
                    "pl" => "Raportowanie naruszeń przepisów ochrony środowiska i proponowanie działań naprawczych.",
                    "en" => "Reporting violations of environmental protection regulations and proposing corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ANALIZY_I_MONITORINGU_ŚRODOWISKA = [
            [
                "id" => 25521,
                "name" => json_encode([
                    "pl" => "Wykonywanie pomiarów jakości powietrza, wody, gleby oraz innych parametrów środowiskowych.",
                    "en" => "Conducting measurements of air, water, soil quality, and other environmental parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25522,
                "name" => json_encode([
                    "pl" => "Zbieranie próbek środowiskowych i przygotowywanie ich do analizy laboratoryjnej.",
                    "en" => "Collecting environmental samples and preparing them for laboratory analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25523,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości środowiska na podstawie wyników badań i przygotowywanie raportów.",
                    "en" => "Monitoring environmental quality based on research results and preparing reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25524,
                "name" => json_encode([
                    "pl" => "Analiza wyników badań środowiskowych w celu identyfikacji potencjalnych zagrożeń ekologicznych.",
                    "en" => "Analyzing environmental research results to identify potential ecological threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25525,
                "name" => json_encode([
                    "pl" => "Współpraca z laboratoriami w zakresie analiz środowiskowych i interpretacji wyników.",
                    "en" => "Cooperating with laboratories for environmental analyses and interpretation of results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25526,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji monitoringu środowiska oraz raportów z przeprowadzonych badań.",
                    "en" => "Preparing documentation for environmental monitoring and reports of conducted studies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_OCHRONY_ŚRODOWISKA = [
            [
                "id" => 25527,
                "name" => json_encode([
                    "pl" => "Realizowanie działań związanych z zarządzaniem odpadami, ich zbiórką, segregowaniem i recyklingiem.",
                    "en" => "Implementing activities related to waste management, including collection, sorting, and recycling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25528,
                "name" => json_encode([
                    "pl" => "Wdrażanie i monitorowanie procedur ochrony środowiska zgodnie z obowiązującymi normami prawnymi.",
                    "en" => "Implementing and monitoring environmental protection procedures in accordance with applicable legal standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25529,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie działań proekologicznych, ochrony zasobów naturalnych i zarządzania odpadami.",
                    "en" => "Training employees in pro-environmental actions, natural resource conservation, and waste management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25530,
                "name" => json_encode([
                    "pl" => "Współpraca z działami technicznymi w celu wdrażania rozwiązań proekologicznych w procesach produkcyjnych.",
                    "en" => "Collaborating with technical departments to implement pro-environmental solutions in production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25531,
                "name" => json_encode([
                    "pl" => "Monitorowanie wpływu działalności przedsiębiorstwa na środowisko, w tym emisji, zanieczyszczeń oraz zużycia surowców.",
                    "en" => "Monitoring the environmental impact of company operations, including emissions, pollution, and resource consumption."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25532,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów dotyczących zgodności z normami ochrony środowiska oraz proponowanie działań naprawczych.",
                    "en" => "Preparing reports on compliance with environmental protection standards and proposing corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_GOSPODARKI_ODPADAMI = [
            [
                "id" => 25533,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem zbiórki, segregacji, transportu i składowania odpadów.",
                    "en" => "Managing the process of collection, sorting, transportation, and storage of waste."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25534,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów recyklingu odpadów i optymalizacja procesów odzysku materiałów.",
                    "en" => "Supervising waste recycling processes and optimizing material recovery processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25535,
                "name" => json_encode([
                    "pl" => "Przygotowywanie planów gospodarki odpadami oraz kontrolowanie ich realizacji w firmach.",
                    "en" => "Preparing waste management plans and controlling their implementation in companies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25536,
                "name" => json_encode([
                    "pl" => "Monitorowanie zgodności z przepisami prawa dotyczącymi gospodarki odpadami i ochrony środowiska.",
                    "en" => "Monitoring compliance with legal regulations related to waste management and environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25537,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z unieszkodliwianiem odpadów niebezpiecznych oraz ich transportem do odpowiednich instalacji.",
                    "en" => "Coordinating activities related to the disposal of hazardous waste and their transportation to appropriate facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25538,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie odpowiednich procedur w zakresie gospodarki odpadami i przestrzegania BHP.",
                    "en" => "Training employees in proper waste management procedures and compliance with health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ANALITYK_DS_ZRÓWNOWAŻONEGO_ROZWOJU = [
            [
                "id" => 25539,
                "name" => json_encode([
                    "pl" => "Analiza danych dotyczących wpływu działalności gospodarczej na środowisko i identyfikacja możliwości poprawy.",
                    "en" => "Analyzing data on the environmental impact of business activities and identifying opportunities for improvement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25540,
                "name" => json_encode([
                    "pl" => "Opracowywanie raportów z zakresu zrównoważonego rozwoju oraz monitorowanie postępów w realizacji celów środowiskowych.",
                    "en" => "Developing reports on sustainable development and monitoring progress towards achieving environmental goals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25541,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w celu implementacji strategii zrównoważonego rozwoju w organizacji.",
                    "en" => "Collaborating with other departments to implement sustainable development strategies within the organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25542,
                "name" => json_encode([
                    "pl" => "Analizowanie efektywności procesów produkcyjnych pod kątem ich wpływu na środowisko i zasoby naturalne.",
                    "en" => "Analyzing the efficiency of production processes in terms of their impact on the environment and natural resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25543,
                "name" => json_encode([
                    "pl" => "Przygotowywanie rekomendacji dotyczących poprawy efektywności ekologicznej i redukcji śladu węglowego.",
                    "en" => "Preparing recommendations for improving ecological efficiency and reducing the carbon footprint."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25544,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz ryzyka związanych z realizacją działań proekologicznych oraz ocena ich wpływu na długoterminową zrównoważoność.",
                    "en" => "Conducting risk analyses related to the implementation of pro-environmental actions and assessing their impact on long-term sustainability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DS_ZRÓWNOWAŻONEGO_ROZWOJU = [
            [
                "id" => 25545,
                "name" => json_encode([
                    "pl" => "Tworzenie i wdrażanie strategii zrównoważonego rozwoju w organizacji, z uwzględnieniem celów ekologicznych i społecznych.",
                    "en" => "Creating and implementing sustainable development strategies within the organization, considering environmental and social goals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25546,
                "name" => json_encode([
                    "pl" => "Monitorowanie wdrażania polityk zrównoważonego rozwoju i raportowanie postępów w realizacji celów środowiskowych.",
                    "en" => "Monitoring the implementation of sustainable development policies and reporting progress towards achieving environmental goals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25547,
                "name" => json_encode([
                    "pl" => "Zarządzanie projektami związanymi z ochroną środowiska i wdrażaniem rozwiązań proekologicznych.",
                    "en" => "Managing projects related to environmental protection and implementing pro-environmental solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25548,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami ds. BHP, produkcji oraz inżynierii w celu wdrażania rozwiązań z zakresu zrównoważonego rozwoju.",
                    "en" => "Collaborating with health and safety, production, and engineering teams to implement sustainable development solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25549,
                "name" => json_encode([
                    "pl" => "Opracowywanie raportów z zakresu działań związanych z odpowiedzialnością ekologiczną oraz zrównoważonym rozwojem.",
                    "en" => "Developing reports on activities related to ecological responsibility and sustainable development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25550,
                "name" => json_encode([
                    "pl" => "Edukowanie pracowników i interesariuszy na temat zrównoważonego rozwoju i jego korzyści dla organizacji.",
                    "en" => "Educating employees and stakeholders about sustainable development and its benefits for the organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RZECZOZNAWCA_DO_SPRAW_ZABEZPIECZEŃ_PRZECIWPOŻAROWYCH = [
            [
                "id" => 25551,
                "name" => json_encode([
                    "pl" => "Ocena ryzyka pożarowego w obiektach przemysłowych, mieszkalnych i użyteczności publicznej.",
                    "en" => "Assessing fire risk in industrial, residential, and public utility buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25552,
                "name" => json_encode([
                    "pl" => "Opracowywanie zaleceń dotyczących zabezpieczeń przeciwpożarowych w różnych typach budynków.",
                    "en" => "Developing recommendations for fire protection in various types of buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25553,
                "name" => json_encode([
                    "pl" => "Wykonywanie audytów przeciwpożarowych w celu zapewnienia zgodności z przepisami i normami BHP.",
                    "en" => "Conducting fire safety audits to ensure compliance with regulations and health and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25554,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników i personelu w zakresie zasad bezpieczeństwa przeciwpożarowego.",
                    "en" => "Training employees and staff on fire safety principles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25555,
                "name" => json_encode([
                    "pl" => "Przygotowywanie planów ewakuacyjnych i procedur na wypadek pożaru.",
                    "en" => "Preparing evacuation plans and procedures in the event of a fire."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25556,
                "name" => json_encode([
                    "pl" => "Monitorowanie i ocena skuteczności systemów przeciwpożarowych oraz zapewnianie ich regularnego serwisowania.",
                    "en" => "Monitoring and evaluating the effectiveness of fire protection systems and ensuring their regular servicing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INSPEKTOR_DOZORU_JĄDROWEGO = [
            [
                "id" => 25557,
                "name" => json_encode([
                    "pl" => "Nadzorowanie przestrzegania przepisów dotyczących bezpieczeństwa jądrowego w obiektach jądrowych.",
                    "en" => "Supervising compliance with nuclear safety regulations in nuclear facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25558,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów związanych z użytkowaniem materiałów radioaktywnych, w tym kontrolowanie emisji i składowania odpadów jądrowych.",
                    "en" => "Monitoring processes related to the use of radioactive materials, including controlling emissions and nuclear waste disposal."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25559,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji technicznych urządzeń i instalacji jądrowych oraz ocena ich zgodności z normami bezpieczeństwa.",
                    "en" => "Conducting technical inspections of nuclear equipment and installations and assessing their compliance with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25560,
                "name" => json_encode([
                    "pl" => "Opracowywanie raportów dotyczących bezpieczeństwa jądrowego, w tym wyników przeprowadzonych audytów i inspekcji.",
                    "en" => "Preparing reports on nuclear safety, including results of audits and inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25561,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją techniczną dotyczącą urządzeń i instalacji jądrowych.",
                    "en" => "Managing technical documentation related to nuclear equipment and installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25562,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi organami nadzorującymi w zakresie zapewnienia wysokich standardów bezpieczeństwa jądrowego.",
                    "en" => "Collaborating with other supervisory bodies to ensure high standards of nuclear safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_PROMOCJI_ZDROWIA_I_EDUKACJI_ZDROWOTNEJ = [
            [
                "id" => 25563,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie programów promocji zdrowia, w tym kampanii edukacyjnych.",
                    "en" => "Developing and implementing health promotion programs, including educational campaigns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25564,
                "name" => json_encode([
                    "pl" => "Organizowanie warsztatów, seminariów i szkoleń z zakresu zdrowego stylu życia.",
                    "en" => "Organizing workshops, seminars, and training on healthy lifestyles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25565,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań edukacyjnych w zakresie profilaktyki zdrowotnej w szkołach i społecznościach lokalnych.",
                    "en" => "Coordinating educational activities related to health prevention in schools and local communities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25566,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi instytucjami zdrowia publicznego w celu promocji zdrowia i profilaktyki.",
                    "en" => "Collaborating with other public health institutions to promote health and prevention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25567,
                "name" => json_encode([
                    "pl" => "Analizowanie potrzeb zdrowotnych społeczności oraz proponowanie działań edukacyjnych w tym zakresie.",
                    "en" => "Analyzing the health needs of communities and proposing educational activities in this regard."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25568,
                "name" => json_encode([
                    "pl" => "Przygotowywanie materiałów edukacyjnych i informacyjnych dotyczących zdrowia publicznego.",
                    "en" => "Preparing educational and informational materials on public health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_BEZPIECZEŃSTWA_I_HIGIENY_PRACY = [
            [
                "id" => 25569,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie zasad BHP w organizacji, w tym polityk i procedur bezpieczeństwa.",
                    "en" => "Developing and implementing health and safety guidelines in the organization, including policies and safety procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25570,
                "name" => json_encode([
                    "pl" => "Nadzorowanie przestrzegania przepisów BHP w miejscu pracy, monitorowanie warunków pracy.",
                    "en" => "Supervising compliance with health and safety regulations in the workplace, monitoring working conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25571,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szkoleń dla pracowników z zakresu BHP i udzielania pierwszej pomocy.",
                    "en" => "Conducting training for employees on health and safety and first aid."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25572,
                "name" => json_encode([
                    "pl" => "Prowadzenie audytów i inspekcji BHP w firmie oraz raportowanie niezgodności.",
                    "en" => "Conducting health and safety audits and inspections in the company and reporting non-compliance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25573,
                "name" => json_encode([
                    "pl" => "Współpraca z działem zarządzania kryzysowego w zakresie planowania działań awaryjnych.",
                    "en" => "Collaborating with the crisis management department on emergency action planning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25574,
                "name" => json_encode([
                    "pl" => "Analizowanie raportów wypadków i incydentów w pracy, proponowanie działań korygujących.",
                    "en" => "Analyzing workplace accident and incident reports, proposing corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_ZDROWIA_PUBLICZNEGO = [
            [
                "id" => 25575,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii i programów zdrowia publicznego, w tym profilaktyki chorób i promocji zdrowia.",
                    "en" => "Developing public health strategies and programs, including disease prevention and health promotion."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25576,
                "name" => json_encode([
                    "pl" => "Analiza danych zdrowotnych i epidemiologicznych w celu monitorowania stanu zdrowia populacji.",
                    "en" => "Analyzing health and epidemiological data to monitor the health status of populations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25577,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów i analiz dotyczących stanu zdrowia publicznego oraz proponowanie działań naprawczych.",
                    "en" => "Preparing reports and analyses on public health status and proposing corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25578,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami ochrony zdrowia w zakresie badań zdrowia publicznego i tworzenia polityk zdrowotnych.",
                    "en" => "Collaborating with health protection institutions on public health research and health policy development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25579,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań mających na celu poprawę zdrowia publicznego, w tym kampanii profilaktycznych i edukacyjnych.",
                    "en" => "Coordinating actions aimed at improving public health, including preventive and educational campaigns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25580,
                "name" => json_encode([
                    "pl" => "Monitorowanie efektywności programów zdrowia publicznego oraz ocena ich wpływu na społeczności.",
                    "en" => "Monitoring the effectiveness of public health programs and assessing their impact on communities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_ZDROWIA_ŚRODOWISKOWEGO = [
            [
                "id" => 25581,
                "name" => json_encode([
                    "pl" => "Analiza wpływu czynników środowiskowych na zdrowie ludzi, w tym jakości powietrza, wody i gleby.",
                    "en" => "Analyzing the impact of environmental factors on human health, including air, water, and soil quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25582,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie strategii zdrowia środowiskowego, w tym działań związanych z poprawą jakości środowiska.",
                    "en" => "Developing and implementing environmental health strategies, including actions aimed at improving environmental quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25583,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań mających na celu minimalizowanie ryzyka zdrowotnego związanego z zanieczyszczeniem środowiska.",
                    "en" => "Coordinating actions aimed at minimizing health risks associated with environmental pollution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25584,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości środowiska i przeprowadzanie badań zdrowia ludzi w kontekście wpływu zanieczyszczeń.",
                    "en" => "Monitoring environmental quality and conducting human health studies in the context of pollution impacts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25585,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami ochrony zdrowia oraz środowiska w zakresie działań na rzecz poprawy zdrowia środowiskowego.",
                    "en" => "Collaborating with health and environmental protection institutions on actions to improve environmental health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25586,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów dotyczących stanu zdrowia środowiskowego i proponowanie działań zapobiegawczych.",
                    "en" => "Preparing reports on environmental health status and proposing preventive actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RZECZOZNAWCA_DO_SPRAW_BEZPIECZEŃSTWA_I_HIGIENY_PRACY = [
            [
                "id" => 25587,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie polityk i procedur BHP w organizacjach, w tym ocena ryzyka zawodowego.",
                    "en" => "Developing and implementing health and safety policies and procedures within organizations, including risk assessment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25588,
                "name" => json_encode([
                    "pl" => "Prowadzenie audytów BHP i ocena zgodności z przepisami prawa oraz normami bezpieczeństwa.",
                    "en" => "Conducting health and safety audits and assessing compliance with legal regulations and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25589,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie zasad BHP, procedur awaryjnych oraz udzielania pierwszej pomocy.",
                    "en" => "Training employees in health and safety principles, emergency procedures, and first aid."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25590,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków pracy i proponowanie działań poprawiających bezpieczeństwo w miejscu pracy.",
                    "en" => "Monitoring working conditions and proposing actions to improve workplace safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25591,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji BHP, w tym raportów o stanie bezpieczeństwa w firmie.",
                    "en" => "Preparing health and safety documentation, including reports on the safety status in the company."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25592,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w celu wdrażania rozwiązań poprawiających BHP i zmniejszających ryzyko wypadków.",
                    "en" => "Collaborating with other departments to implement solutions that improve health and safety and reduce accident risks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_SPECJALIŚCI_DO_SPRAW_HIGIENY_BEZPIECZEŃSTWA_PRACY_I_OCHRONY_ŚRODOWISKA = [
            [
                "id" => 25593,
                "name" => json_encode([
                    "pl" => "Zarządzanie ryzykiem zawodowym, w tym analiza i ocena zagrożeń związanych z higieną pracy i ochroną środowiska.",
                    "en" => "Managing occupational risks, including the analysis and assessment of hazards related to occupational hygiene and environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25594,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie procedur bezpieczeństwa i higieny pracy, w tym przestrzeganie norm ochrony środowiska.",
                    "en" => "Developing and implementing occupational safety and hygiene procedures, including compliance with environmental protection standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25595,
                "name" => json_encode([
                    "pl" => "Nadzorowanie przestrzegania przepisów dotyczących BHP oraz ochrony środowiska w firmach i instytucjach.",
                    "en" => "Supervising compliance with regulations regarding occupational health and safety and environmental protection in companies and institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25596,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie ochrony zdrowia i środowiska pracy oraz przestrzegania przepisów BHP.",
                    "en" => "Training employees on workplace health and environmental protection and compliance with health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25597,
                "name" => json_encode([
                    "pl" => "Prowadzenie audytów BHP i środowiskowych oraz wdrażanie działań mających na celu poprawę warunków pracy.",
                    "en" => "Conducting health and safety and environmental audits and implementing actions to improve working conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25598,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z zakresu BHP i ochrony środowiska oraz rekomendowanie działań naprawczych.",
                    "en" => "Preparing reports on health and safety and environmental protection and recommending corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_ZARZĄDZANIA_KRYZYSOWEGO = [
            [
                "id" => 25599,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów kryzysowych, w tym procedur reagowania na zagrożenia i sytuacje awaryjne.",
                    "en" => "Developing crisis management plans, including emergency response procedures and hazard management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25600,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań w przypadku kryzysów, zarządzanie zespołami reagującymi i monitorowanie sytuacji kryzysowej.",
                    "en" => "Coordinating crisis response actions, managing response teams, and monitoring crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25601,
                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń i ćwiczeń w zakresie zarządzania kryzysowego i reagowania na sytuacje awaryjne.",
                    "en" => "Conducting training and drills on crisis management and emergency response."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25602,
                "name" => json_encode([
                    "pl" => "Opracowywanie i aktualizacja procedur kryzysowych, dostosowanych do specyfiki organizacji i potencjalnych zagrożeń.",
                    "en" => "Developing and updating crisis procedures tailored to the organization's specifics and potential threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25603,
                "name" => json_encode([
                    "pl" => "Monitorowanie i raportowanie stanu gotowości kryzysowej w organizacji.",
                    "en" => "Monitoring and reporting on the state of crisis readiness within the organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25604,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami rządowymi i służbami ratunkowymi w zakresie zarządzania kryzysowego.",
                    "en" => "Cooperating with government institutions and emergency services in crisis management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INSPEKTOR_OCHRONY_PRZECIWPOŻAROWEJ = [
            [
                "id" => 25605,
                "name" => json_encode([
                    "pl" => "Nadzorowanie przestrzegania przepisów przeciwpożarowych w organizacjach, kontrolowanie instalacji przeciwpożarowych.",
                    "en" => "Supervising compliance with fire safety regulations within organizations, inspecting fire protection installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25606,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów przeciwpożarowych i ocena ryzyka pożarowego w firmach.",
                    "en" => "Conducting fire safety audits and fire risk assessments within companies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25607,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie zasad bezpieczeństwa pożarowego i procedur ewakuacyjnych.",
                    "en" => "Training employees on fire safety principles and evacuation procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25608,
                "name" => json_encode([
                    "pl" => "Przygotowywanie planów ewakuacyjnych oraz zarządzanie dokumentacją przeciwpożarową.",
                    "en" => "Preparing evacuation plans and managing fire safety documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25609,
                "name" => json_encode([
                    "pl" => "Współpraca z służbami ratunkowymi i innymi działami w zakresie działań związanych z bezpieczeństwem pożarowym.",
                    "en" => "Cooperating with emergency services and other departments on fire safety-related activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25610,
                "name" => json_encode([
                    "pl" => "Monitorowanie systemów przeciwpożarowych, ocena ich efektywności oraz nadzorowanie konserwacji sprzętu przeciwpożarowego.",
                    "en" => "Monitoring fire protection systems, assessing their effectiveness, and overseeing the maintenance of fire safety equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INSPEKTOR_BEZPIECZEŃSTWA_I_HIGIENY_PRACY = [
            [
                "id" => 25611,
                "name" => json_encode([
                    "pl" => "Nadzorowanie przestrzegania przepisów BHP, ocena ryzyka zawodowego i przestrzegania norm ochrony zdrowia w pracy.",
                    "en" => "Supervising compliance with health and safety regulations, assessing occupational risk, and ensuring compliance with workplace health protection standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25612,
                "name" => json_encode([
                    "pl" => "Prowadzenie audytów BHP i kontrola warunków pracy, w tym ocena efektywności działań prozdrowotnych.",
                    "en" => "Conducting health and safety audits and controlling working conditions, including assessing the effectiveness of health-promoting activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25613,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie zasad BHP oraz bezpieczeństwa i higieny pracy w szczególnych warunkach.",
                    "en" => "Training employees in health and safety rules, as well as workplace safety and hygiene under specific conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25614,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w celu identyfikacji zagrożeń i wdrażania rozwiązań minimalizujących ryzyko wypadków.",
                    "en" => "Collaborating with other departments to identify hazards and implementing solutions to minimize accident risks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25615,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków pracy, ocena efektywności środków ochrony zdrowia oraz środowiska pracy.",
                    "en" => "Monitoring working conditions, assessing the effectiveness of health protection measures, and the work environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25616,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów dotyczących przestrzegania przepisów BHP i rekomendowanie działań korygujących.",
                    "en" => "Preparing reports on compliance with health and safety regulations and recommending corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INSPEKTOR_OCHRONY_RADIOLOGICZNEJ = [
            [
                "id" => 25617,
                "name" => json_encode([
                    "pl" => "Nadzorowanie przestrzegania przepisów dotyczących ochrony radiologicznej i bezpieczeństwa w zakresie promieniowania.",
                    "en" => "Supervising compliance with regulations related to radiological protection and safety regarding radiation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25618,
                "name" => json_encode([
                    "pl" => "Monitorowanie poziomów promieniowania w obiektach przemysłowych i medycznych.",
                    "en" => "Monitoring radiation levels in industrial and medical facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25619,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli radiologicznych, w tym badań urządzeń wykorzystywanych do pracy z materiałami radioaktywnymi.",
                    "en" => "Conducting radiological inspections, including testing equipment used for working with radioactive materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25620,
                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń z zakresu ochrony radiologicznej i bezpiecznego stosowania materiałów radioaktywnych.",
                    "en" => "Conducting training in radiological protection and the safe use of radioactive materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25621,
                "name" => json_encode([
                    "pl" => "Opracowywanie raportów z zakresu ochrony radiologicznej, w tym wykrywanie i minimalizowanie zagrożeń.",
                    "en" => "Preparing reports on radiological protection, including detecting and minimizing hazards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25622,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań w zakresie monitorowania i raportowania emisji promieniowania w środowisku.",
                    "en" => "Coordinating actions for monitoring and reporting radiation emissions in the environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INSTRUKTOR_HIGIENY = [
            [
                "id" => 25623,
                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń z zakresu zasad higieny osobistej oraz higieny w miejscu pracy.",
                    "en" => "Conducting training on personal hygiene rules and workplace hygiene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25624,
                "name" => json_encode([
                    "pl" => "Opracowywanie materiałów edukacyjnych dotyczących higieny i zdrowia w pracy.",
                    "en" => "Developing educational materials on hygiene and health at work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25625,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów higienicznych i ocena warunków higienicznych w miejscu pracy.",
                    "en" => "Conducting hygiene audits and evaluating hygienic conditions in the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25626,
                "name" => json_encode([
                    "pl" => "Monitorowanie przestrzegania zasad higieny przez pracowników, w tym kontrolowanie czystości stanowisk pracy.",
                    "en" => "Monitoring employees' adherence to hygiene rules, including controlling the cleanliness of workstations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25627,
                "name" => json_encode([
                    "pl" => "Szkolenie w zakresie profilaktyki zdrowia, higieny środowiskowej i ergonomii.",
                    "en" => "Training on health prevention, environmental hygiene, and ergonomics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25628,
                "name" => json_encode([
                    "pl" => "Współpraca z działem BHP oraz innymi działami w zakresie utrzymywania norm higienicznych w miejscu pracy.",
                    "en" => "Collaborating with the health and safety department and other departments to maintain hygiene standards in the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_BEZPIECZEŃSTWA_I_HIGIENY_PRACY_S = [
            [
                "id" => 25629,
                "name" => json_encode([
                    "pl" => "Zarządzanie zasadami BHP w organizacji, zapewnienie przestrzegania przepisów ochrony zdrowia w pracy.",
                    "en" => "Managing health and safety principles within the organization, ensuring compliance with workplace health protection regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25630,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ocen ryzyka zawodowego, identyfikacja zagrożeń oraz wprowadzanie działań ochronnych.",
                    "en" => "Conducting occupational risk assessments, identifying hazards, and implementing protective measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25631,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie zasad BHP, zasad postępowania w sytuacjach awaryjnych oraz udzielania pierwszej pomocy.",
                    "en" => "Training employees in health and safety principles, emergency procedures, and first aid."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25632,
                "name" => json_encode([
                    "pl" => "Prowadzenie audytów BHP oraz monitorowanie zgodności z przepisami i normami bezpieczeństwa.",
                    "en" => "Conducting health and safety audits and monitoring compliance with regulations and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25633,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań w zakresie ochrony zdrowia i bezpieczeństwa pracy, w tym kontrola warunków pracy.",
                    "en" => "Coordinating health and safety activities, including controlling working conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25634,
                "name" => json_encode([
                    "pl" => "Monitorowanie przestrzegania zasad BHP oraz proponowanie działań mających na celu poprawę warunków pracy.",
                    "en" => "Monitoring adherence to health and safety rules and proposing actions to improve working conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_DOZYMETRYSTA = [
            [
                "id" => 25635,
                "name" => json_encode([
                    "pl" => "Pomiar poziomu promieniowania w obiektach przemysłowych, medycznych i środowisku naturalnym.",
                    "en" => "Measuring radiation levels in industrial, medical, and natural environments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25636,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie pomiarów dozymetrycznych w celu oceny ekspozycji na promieniowanie.",
                    "en" => "Conducting dosimetric measurements to assess radiation exposure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25637,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami ochrony radiologicznej w zakresie monitorowania poziomów promieniowania.",
                    "en" => "Cooperating with radiological protection teams in monitoring radiation levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25638,
                "name" => json_encode([
                    "pl" => "Dokonywanie oceny ryzyka promieniowania i dostosowanie środków ochronnych.",
                    "en" => "Assessing radiation risks and adjusting protective measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25639,
                "name" => json_encode([
                    "pl" => "Analiza wyników pomiarów dozymetrycznych oraz przygotowywanie raportów z wynikami.",
                    "en" => "Analyzing dosimetric measurement results and preparing reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25640,
                "name" => json_encode([
                    "pl" => "Wdrażanie procedur ochrony przed promieniowaniem i współpraca z zespołem ochrony radiologicznej.",
                    "en" => "Implementing radiation protection procedures and collaborating with the radiological protection team."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTAŁY_ŚREDNI_PERSONEL_OCHRONY_ŚRODOWISKA_MEDYCYNY_PRACY_I_BHP = [
            [
                "id" => 25641,
                "name" => json_encode([
                    "pl" => "Zarządzanie działaniami związanymi z ochroną środowiska, zdrowiem pracy oraz przestrzeganiem przepisów BHP.",
                    "en" => "Managing activities related to environmental protection, occupational health, and compliance with health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25642,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów i ocen środowiskowych oraz zgodności z przepisami BHP.",
                    "en" => "Conducting environmental audits and assessing compliance with health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25643,
                "name" => json_encode([
                    "pl" => "Współpraca z działami ochrony zdrowia, środowiska i BHP w celu wdrażania programów ochrony zdrowia i bezpieczeństwa.",
                    "en" => "Cooperating with health, environmental, and safety departments to implement health and safety programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25644,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie ochrony zdrowia, środowiska pracy i zasad BHP.",
                    "en" => "Training employees on health protection, workplace environment, and health and safety principles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25645,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów na temat stanu ochrony środowiska oraz ochrony zdrowia w pracy.",
                    "en" => "Preparing reports on the status of environmental protection and occupational health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25646,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań ochrony zdrowia, środowiska pracy i BHP w firmach oraz instytucjach.",
                    "en" => "Coordinating health, workplace environment, and health and safety actions within companies and institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_KONSERWATOR_URZĄDZEŃ_PRZECIWPOŻAROWYCH = [
            [
                "id" => 25647,
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa systemów przeciwpożarowych, w tym urządzeń gaśniczych, hydrantów i alarmów pożarowych.",
                    "en" => "Installing, maintaining, and repairing fire protection systems, including extinguishing devices, hydrants, and fire alarms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25648,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie okresowych przeglądów technicznych urządzeń przeciwpożarowych oraz dokumentowanie wyników.",
                    "en" => "Conducting periodic technical inspections of fire protection devices and documenting the results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25649,
                "name" => json_encode([
                    "pl" => "Współpraca z firmami zajmującymi się certyfikowaniem urządzeń przeciwpożarowych i systemów bezpieczeństwa.",
                    "en" => "Collaborating with companies that certify fire protection devices and safety systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25650,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja systemów alarmowych, urządzeń gaśniczych i systemów detekcji dymu.",
                    "en" => "Repairing and maintaining alarm systems, extinguishing devices, and smoke detection systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25651,
                "name" => json_encode([
                    "pl" => "Dostosowywanie urządzeń przeciwpożarowych do nowych norm i przepisów bezpieczeństwa.",
                    "en" => "Adapting fire protection devices to new standards and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25652,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji technicznej oraz instrukcji obsługi urządzeń przeciwpożarowych.",
                    "en" => "Preparing technical documentation and operating manuals for fire protection devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONSULTANT_KOMITETU_TECHNICZNEGO = [
            [
                "id" => 25653,
                "name" => json_encode([
                    "pl" => "Udzielanie porad technicznych i wsparcia dla komitetów technicznych w zakresie rozwoju produktów i procesów.",
                    "en" => "Providing technical advice and support to technical committees in product and process development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25654,
                "name" => json_encode([
                    "pl" => "Opracowywanie i przeglądanie dokumentacji technicznej oraz norm branżowych w celu zapewnienia zgodności.",
                    "en" => "Developing and reviewing technical documentation and industry standards to ensure compliance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25655,
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami i menedżerami projektów w celu optymalizacji procesów produkcyjnych i technologicznych.",
                    "en" => "Cooperating with engineers and project managers to optimize production and technological processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25656,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie zarządzania jakością i zgodności z wymaganiami technicznymi w branży.",
                    "en" => "Providing advice on quality management and compliance with technical requirements in the industry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25657,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów wewnętrznych i zewnętrznych w celu oceny procesów i zgodności z wymaganiami.",
                    "en" => "Conducting internal and external audits to assess processes and compliance with requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25658,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z działalności komitetów technicznych oraz monitorowanie postępów projektów.",
                    "en" => "Preparing reports on technical committee activities and monitoring project progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $NORMALIZATOR = [
            [
                "id" => 25659,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie norm i standardów w organizacji, w tym norm technicznych, jakościowych i środowiskowych.",
                    "en" => "Developing and implementing standards and norms within the organization, including technical, quality, and environmental standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25660,
                "name" => json_encode([
                    "pl" => "Monitorowanie zgodności z przyjętymi normami i standardami oraz analiza efektywności ich wdrożenia.",
                    "en" => "Monitoring compliance with adopted standards and norms and analyzing the effectiveness of their implementation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25661,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie nowych norm i standardów obowiązujących w organizacji.",
                    "en" => "Training employees on new standards and norms applicable within the organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25662,
                "name" => json_encode([
                    "pl" => "Dokonywanie analiz porównawczych dotyczących przestrzegania norm i proponowanie usprawnień.",
                    "en" => "Conducting comparative analyses on compliance with norms and proposing improvements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25663,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji dotyczącej wdrożonych norm i ich zgodności z obowiązującymi przepisami.",
                    "en" => "Preparing documentation on implemented standards and their compliance with applicable regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25664,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu optymalizacji procesów zgodnych z normami technicznymi i jakościowymi.",
                    "en" => "Collaborating with the quality department to optimize processes in accordance with technical and quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_AUDYTU_ZABEZPIECZENIA = [
            [
                "id" => 25665,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów zabezpieczeń w firmie, ocena ryzyka oraz skuteczności istniejących procedur ochrony.",
                    "en" => "Conducting security audits in the company, assessing risk and the effectiveness of existing security procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25666,
                "name" => json_encode([
                    "pl" => "Opracowywanie raportów z audytów zabezpieczeń oraz rekomendowanie działań naprawczych i usprawnień.",
                    "en" => "Preparing audit reports on security and recommending corrective actions and improvements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25667,
                "name" => json_encode([
                    "pl" => "Wdrażanie i nadzorowanie procedur bezpieczeństwa, w tym procedur reagowania na zagrożenia i incydenty.",
                    "en" => "Implementing and supervising security procedures, including procedures for responding to threats and incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25668,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie zasad bezpieczeństwa i ochrony, w tym reagowania na zagrożenia.",
                    "en" => "Training employees in security and protection principles, including responding to threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25669,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z bezpieczeństwem informacji oraz ochroną fizyczną obiektów.",
                    "en" => "Coordinating actions related to information security and physical protection of facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25670,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z przeprowadzonych audytów oraz monitorowanie postępów działań naprawczych.",
                    "en" => "Preparing reports on conducted audits and monitoring the progress of corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_KONTROLI_JAKOŚCI = [
            [
                "id" => 25671,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie procedur kontroli jakości produktów i procesów produkcyjnych.",
                    "en" => "Developing and implementing procedures for product and production process quality control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25672,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów jakościowych oraz testów i analiz w celu zapewnienia wysokiej jakości produkcji.",
                    "en" => "Conducting quality audits and tests and analyses to ensure high-quality production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25673,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie technik kontroli jakości oraz norm jakościowych obowiązujących w organizacji.",
                    "en" => "Training employees in quality control techniques and quality standards applicable within the organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25674,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów dotyczących wyników kontroli jakości oraz wdrażanie działań naprawczych.",
                    "en" => "Preparing reports on quality control results and implementing corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25675,
                "name" => json_encode([
                    "pl" => "Współpraca z działami produkcji, inżynierii oraz logistyki w celu optymalizacji procesów produkcyjnych.",
                    "en" => "Collaborating with production, engineering, and logistics departments to optimize production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25676,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z poprawą jakości, w tym przeprowadzanie analiz przyczyn błędów jakościowych.",
                    "en" => "Coordinating actions related to quality improvement, including conducting root cause analyses of quality errors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TOWAROZNAWCA = [
            [
                "id" => 25677,
                "name" => json_encode([
                    "pl" => "Opracowywanie specyfikacji technicznych oraz kontrolowanie jakości produktów i surowców.",
                    "en" => "Developing technical specifications and controlling the quality of products and raw materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25678,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań laboratoryjnych oraz ocen jakościowych produktów w celu zapewnienia ich zgodności z normami.",
                    "en" => "Conducting laboratory tests and quality assessments of products to ensure compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25679,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów produkcyjnych i zapewnianie odpowiedniego standardu jakości w trakcie produkcji.",
                    "en" => "Monitoring production processes and ensuring the appropriate quality standard during production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25680,
                "name" => json_encode([
                    "pl" => "Ocena właściwości produktów oraz opracowywanie zaleceń dotyczących ich jakości i przydatności do użycia.",
                    "en" => "Evaluating product properties and developing recommendations regarding their quality and suitability for use."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25681,
                "name" => json_encode([
                    "pl" => "Współpraca z działami produkcji oraz kontrolą jakości w celu usprawnienia procesów produkcyjnych.",
                    "en" => "Collaborating with production departments and quality control to streamline production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25682,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów jakościowych oraz dokumentacji dotyczącej badanych produktów.",
                    "en" => "Preparing quality reports and documentation related to the tested products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $AUDYTOR_ENERGETYCZNY = [
            [
                "id" => 25683,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów energetycznych w celu oceny efektywności energetycznej obiektów i procesów.",
                    "en" => "Conducting energy audits to assess the energy efficiency of buildings and processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25684,
                "name" => json_encode([
                    "pl" => "Opracowywanie raportów z audytów energetycznych, identyfikowanie możliwości oszczędności energii i proponowanie rozwiązań.",
                    "en" => "Preparing reports on energy audits, identifying energy-saving opportunities, and proposing solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25685,
                "name" => json_encode([
                    "pl" => "Ocena systemów zarządzania energią i monitorowanie ich zgodności z normami i przepisami.",
                    "en" => "Assessing energy management systems and monitoring their compliance with standards and regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25686,
                "name" => json_encode([
                    "pl" => "Współpraca z działami technicznymi w celu wdrożenia zaleceń z audytów energetycznych i poprawy efektywności energetycznej.",
                    "en" => "Cooperating with technical departments to implement recommendations from energy audits and improve energy efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25687,
                "name" => json_encode([
                    "pl" => "Prowadzenie analiz i raportowanie zużycia energii, identyfikowanie obszarów do optymalizacji.",
                    "en" => "Conducting analysis and reporting energy consumption, identifying areas for optimization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25688,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie wdrażania nowoczesnych technologii energetycznych i systemów zarządzania energią.",
                    "en" => "Providing advice on implementing modern energy technologies and energy management systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INSPEKTOR_DOZORU_TECHNICZNEGO = [
            [
                "id" => 25689,
                "name" => json_encode([
                    "pl" => "Nadzorowanie instalacji technicznych, urządzeń i systemów w obiektach przemysłowych.",
                    "en" => "Supervising technical installations, equipment, and systems in industrial facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25690,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli technicznych urządzeń, instalacji i procesów zgodnie z normami i przepisami.",
                    "en" => "Conducting technical inspections of equipment, installations, and processes according to standards and regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25691,
                "name" => json_encode([
                    "pl" => "Ocena stanu technicznego urządzeń i instalacji oraz identyfikowanie potencjalnych zagrożeń.",
                    "en" => "Assessing the technical condition of equipment and installations and identifying potential hazards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25692,
                "name" => json_encode([
                    "pl" => "Współpraca z działem utrzymania ruchu w zakresie zapobiegania awariom oraz zapewniania ciągłości pracy urządzeń.",
                    "en" => "Cooperating with the maintenance department to prevent failures and ensure the continuity of equipment operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25693,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z przeprowadzonych kontroli technicznych i audytów urządzeń.",
                    "en" => "Preparing reports from technical inspections and equipment audits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25694,
                "name" => json_encode([
                    "pl" => "Nadzór nad wdrażaniem i monitorowaniem procedur konserwacji i modernizacji urządzeń.",
                    "en" => "Supervising the implementation and monitoring of maintenance and modernization procedures for equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEGALIZATOR = [
            [
                "id" => 25695,
                "name" => json_encode([
                    "pl" => "Dokonywanie legalizacji urządzeń pomiarowych i kontrolnych zgodnie z obowiązującymi normami i przepisami.",
                    "en" => "Performing the legalization of measuring and control devices in accordance with applicable standards and regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25696,
                "name" => json_encode([
                    "pl" => "Wykonywanie badań metrologicznych urządzeń oraz ich zgodności z wymaganiami prawnymi.",
                    "en" => "Conducting metrological tests of devices and ensuring their compliance with legal requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25697,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie procesów kalibracji urządzeń pomiarowych, w tym kontrola parametrów technicznych.",
                    "en" => "Carrying out calibration processes for measuring devices, including controlling technical parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25698,
                "name" => json_encode([
                    "pl" => "Opracowywanie dokumentacji związanej z legalizacją urządzeń i przygotowywanie raportów.",
                    "en" => "Developing documentation related to the legalization of devices and preparing reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25699,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami odpowiedzialnymi za kontrolę jakości urządzeń i narzędzi pomiarowych.",
                    "en" => "Collaborating with institutions responsible for controlling the quality of devices and measuring tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25700,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie procedur legalizacji urządzeń i obowiązujących przepisów metrologicznych.",
                    "en" => "Training employees on device legalization procedures and applicable metrological regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $METROLOG = [
            [
                "id" => 25701,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością urządzeń pomiarowych, zapewnianie ich zgodności z normami metrologicznymi.",
                    "en" => "Supervising the quality of measuring devices and ensuring their compliance with metrological standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25702,
                "name" => json_encode([
                    "pl" => "Wykonywanie kontroli urządzeń pomiarowych oraz ocena ich dokładności i precyzyjności.",
                    "en" => "Conducting inspections of measuring devices and assessing their accuracy and precision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25703,
                "name" => json_encode([
                    "pl" => "Kalibracja urządzeń pomiarowych oraz ich monitorowanie w celu utrzymania zgodności z normami.",
                    "en" => "Calibrating measuring devices and monitoring them to maintain compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25704,
                "name" => json_encode([
                    "pl" => "Opracowywanie metodologii pomiarowej oraz zapewnienie zgodności z międzynarodowymi normami metrologicznymi.",
                    "en" => "Developing measurement methodologies and ensuring compliance with international metrological standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25705,
                "name" => json_encode([
                    "pl" => "Współpraca z laboratoriami metrologicznymi w zakresie badań jakościowych i zgodności urządzeń.",
                    "en" => "Collaborating with metrological laboratories on qualitative research and device compliance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25706,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników z zakresu technik pomiarowych, kalibracji urządzeń i analiz metrologicznych.",
                    "en" => "Training employees in measurement techniques, device calibration, and metrological analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INSPEKTOR_FARMACEUTYCZNY = [
            [
                "id" => 25707,
                "name" => json_encode([
                    "pl" => "Nadzorowanie przestrzegania przepisów prawa farmaceutycznego, w tym rejestracja, produkcja, przechowywanie i sprzedaż leków.",
                    "en" => "Supervising compliance with pharmaceutical regulations, including registration, production, storage, and sale of medications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25708,
                "name" => json_encode([
                    "pl" => "Kontrola jakości leków, materiałów farmaceutycznych oraz przestrzeganie zasad ich obrotu.",
                    "en" => "Quality control of medications, pharmaceutical materials, and ensuring compliance with their handling regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25709,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów wewnętrznych w aptekach, firmach farmaceutycznych oraz instytucjach związanych z obrotem lekami.",
                    "en" => "Conducting internal audits in pharmacies, pharmaceutical companies, and institutions involved in the distribution of medications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25710,
                "name" => json_encode([
                    "pl" => "Monitorowanie przestrzegania procedur przechowywania i transportu leków, zgodnie z wymogami GMP (Good Manufacturing Practice).",
                    "en" => "Monitoring compliance with storage and transportation procedures for medications, in accordance with GMP (Good Manufacturing Practice) requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25711,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie przepisów farmaceutycznych, standardów jakości oraz zasad bezpieczeństwa przy obrocie lekami.",
                    "en" => "Training employees on pharmaceutical regulations, quality standards, and safety guidelines in handling medications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25712,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z przeprowadzonych kontroli oraz współpraca z organami nadzoru farmaceutycznego.",
                    "en" => "Preparing reports on conducted inspections and collaborating with pharmaceutical regulatory authorities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_METROLOG = [
            [
                "id" => 25713,
                "name" => json_encode([
                    "pl" => "Kalibracja urządzeń pomiarowych oraz zapewnienie ich zgodności z wymaganiami metrologicznymi.",
                    "en" => "Calibrating measuring devices and ensuring their compliance with metrological requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25714,
                "name" => json_encode([
                    "pl" => "Wykonywanie pomiarów metrologicznych w różnych branżach, takich jak przemysł, laboratoria, czy handel.",
                    "en" => "Performing metrological measurements in various industries, such as manufacturing, laboratories, or commerce."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25715,
                "name" => json_encode([
                    "pl" => "Dokonywanie oceny dokładności urządzeń pomiarowych oraz opracowywanie zaleceń dotyczących ich konserwacji i kalibracji.",
                    "en" => "Assessing the accuracy of measuring devices and developing recommendations for their maintenance and calibration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25716,
                "name" => json_encode([
                    "pl" => "Współpraca z działami technicznymi w zakresie poprawy dokładności urządzeń pomiarowych.",
                    "en" => "Collaborating with technical departments to improve the accuracy of measuring devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25717,
                "name" => json_encode([
                    "pl" => "Opracowywanie raportów z przeprowadzonych pomiarów i analiz, a także przygotowywanie dokumentacji metrologicznej.",
                    "en" => "Preparing reports on conducted measurements and analyses, as well as developing metrological documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25718,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie przeprowadzania pomiarów oraz kalibracji urządzeń pomiarowych.",
                    "en" => "Training employees in conducting measurements and calibrating measuring devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $CECHOWNICZY = [
            [
                "id" => 25719,
                "name" => json_encode([
                    "pl" => "Oznaczanie i klasyfikowanie wyrobów w celu zapewnienia ich zgodności z normami jakościowymi.",
                    "en" => "Marking and classifying products to ensure their compliance with quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25720,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej cechowania wyrobów i zgodności z wymaganiami technicznymi.",
                    "en" => "Maintaining documentation on product marking and compliance with technical requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25721,
                "name" => json_encode([
                    "pl" => "Kontrolowanie etykietowania i oznaczeń produktów zgodnie z obowiązującymi przepisami i normami.",
                    "en" => "Controlling product labeling and markings in compliance with applicable regulations and standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25722,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia poprawności cechowania wyrobów.",
                    "en" => "Collaborating with the quality department to ensure the correctness of product marking."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25723,
                "name" => json_encode([
                    "pl" => "Opracowywanie procedur cechowania oraz aktualizacja standardów i wymagań dla wyrobów.",
                    "en" => "Developing marking procedures and updating standards and requirements for products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25724,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów i dokumentacji związanej z procesem cechowania wyrobów.",
                    "en" => "Preparing reports and documentation related to the product marking process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_BADAŃ_DEFIEKTOSKOPOWYCH = [
            [
                "id" => 25725,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań defektoskopowych w celu wykrycia wad i nieprawidłowości w materiałach i komponentach.",
                    "en" => "Conducting ultrasonic tests to detect defects and irregularities in materials and components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25726,
                "name" => json_encode([
                    "pl" => "Używanie odpowiednich narzędzi defektoskopowych do monitorowania jakości materiałów i komponentów.",
                    "en" => "Using appropriate defectoscopic tools to monitor the quality of materials and components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25727,
                "name" => json_encode([
                    "pl" => "Analizowanie wyników badań defektoskopowych oraz sporządzanie raportów dotyczących jakości materiałów.",
                    "en" => "Analyzing the results of ultrasonic tests and preparing reports on the quality of materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25728,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości i produkcji w celu usunięcia wykrytych defektów.",
                    "en" => "Cooperating with the quality and production departments to eliminate detected defects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25729,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji wyników badań oraz utrzymanie standardów bezpieczeństwa w trakcie badań.",
                    "en" => "Preparing test result documentation and maintaining safety standards during testing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25730,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie obsługi urządzeń defektoskopowych oraz technik badania materiałów.",
                    "en" => "Training employees in the operation of defectoscopic devices and techniques for material testing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLER_JAKOŚCI_WYROBÓW_PRZEMYSŁOWYCH = [
            [
                "id" => 25731,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli jakości wyrobów przemysłowych zgodnie z przyjętymi normami i wymaganiami.",
                    "en" => "Conducting quality inspections of industrial products in accordance with established standards and requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25732,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu produkcji i identyfikowanie potencjalnych defektów w wyrobach.",
                    "en" => "Monitoring the production process and identifying potential defects in the products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25733,
                "name" => json_encode([
                    "pl" => "Dokonywanie prób i testów wyrobów przemysłowych w celu zapewnienia ich zgodności z wymaganiami jakościowymi.",
                    "en" => "Conducting trials and tests of industrial products to ensure compliance with quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25734,
                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji w celu poprawy jakości wyrobów i eliminacji błędów produkcyjnych.",
                    "en" => "Collaborating with the production department to improve product quality and eliminate production errors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25735,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów jakościowych oraz dokumentacji związanej z kontrolą wyrobów.",
                    "en" => "Preparing quality reports and documentation related to product inspection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25736,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie standardów jakości oraz metod kontroli jakości w produkcji.",
                    "en" => "Training employees on quality standards and methods of quality control in production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLER_URZĄDZEŃ_FILTRUJĄCYCH_I_ODDZIELAJĄCYCH = [
            [
                "id" => 25737,
                "name" => json_encode([
                    "pl" => "Sterowanie procesem filtracji i oddzielania substancji w urządzeniach, monitorowanie parametrów technologicznych.",
                    "en" => "Controlling the filtration and separation process in devices, monitoring technological parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25738,
                "name" => json_encode([
                    "pl" => "Nadzorowanie efektywności urządzeń filtrujących, analiza wyników filtracji i separacji.",
                    "en" => "Supervising the efficiency of filtration devices, analyzing filtration and separation results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25739,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów filtracji i separacji, w celu zwiększenia wydajności i jakości produkcji.",
                    "en" => "Optimizing filtration and separation processes to increase efficiency and production quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25740,
                "name" => json_encode([
                    "pl" => "Kontrola parametrów urządzeń filtrujących, takich jak ciśnienie, przepływ, oraz usuwanie zanieczyszczeń.",
                    "en" => "Controlling parameters of filtration devices, such as pressure, flow, and contaminant removal."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25741,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z wyników procesów filtracji i separacji, proponowanie usprawnień.",
                    "en" => "Preparing reports on filtration and separation process results, proposing improvements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25742,
                "name" => json_encode([
                    "pl" => "Współpraca z działem technicznym w celu utrzymania i konserwacji urządzeń filtrujących.",
                    "en" => "Cooperating with the technical department for the maintenance and servicing of filtration devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLER_URZĄDZEŃ_KOKSOWNICZYCH = [
            [
                "id" => 25743,
                "name" => json_encode([
                    "pl" => "Sterowanie procesem koksowania, kontrola temperatury i czasu w piecach koksowniczych.",
                    "en" => "Controlling the coking process, monitoring temperature and time in coke ovens."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25744,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów technologicznych w koksowniach i optymalizacja parametrów produkcji koksu.",
                    "en" => "Monitoring technological processes in coke plants and optimizing coke production parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25745,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesu chłodzenia koksu oraz zapewnienie jakości wytwarzanego produktu.",
                    "en" => "Supervising the coke cooling process and ensuring the quality of the produced coke."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25746,
                "name" => json_encode([
                    "pl" => "Zarządzanie procedurami bezpieczeństwa w reaktorach koksowniczych oraz reagowanie na sytuacje awaryjne.",
                    "en" => "Managing safety procedures in coke reactors and responding to emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25747,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z przeprowadzonych procesów koksowania oraz proponowanie działań poprawiających wydajność.",
                    "en" => "Preparing reports on conducted coking processes and proposing actions to improve efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25748,
                "name" => json_encode([
                    "pl" => "Współpraca z działem utrzymania ruchu w celu zapewnienia sprawności urządzeń koksowniczych.",
                    "en" => "Cooperating with the maintenance department to ensure the functionality of coke ovens."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KONTROLERZY_PROCESÓW_W_PRZEMYŚLE_CHEMICZNYM = [
            [
                "id" => 25749,
                "name" => json_encode([
                    "pl" => "Nadzorowanie i sterowanie procesami chemicznymi, w tym monitorowanie parametrów reakcji i procesów technologicznych.",
                    "en" => "Supervising and controlling chemical processes, including monitoring reaction parameters and technological processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25750,
                "name" => json_encode([
                    "pl" => "Analiza wyników procesów produkcyjnych, identyfikowanie obszarów wymagających optymalizacji.",
                    "en" => "Analyzing production process results, identifying areas requiring optimization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25751,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesów chemicznych, takich jak temperatura, ciśnienie, czas reakcji, aby zapewnić ich optymalną wydajność.",
                    "en" => "Managing the parameters of chemical processes, such as temperature, pressure, and reaction time, to ensure optimal performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25752,
                "name" => json_encode([
                    "pl" => "Współpraca z działami inżynierii i produkcji w celu usprawnienia procesów chemicznych i zmniejszenia kosztów produkcji.",
                    "en" => "Collaborating with engineering and production departments to improve chemical processes and reduce production costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25753,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z monitoringu procesów chemicznych oraz analizowanie wyników kontroli jakości.",
                    "en" => "Preparing reports on chemical process monitoring and analyzing quality control results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25754,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją procesów chemicznych i przygotowywanie zaleceń dotyczących ich optymalizacji.",
                    "en" => "Managing documentation of chemical processes and preparing recommendations for their optimization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLERZY_PROCESÓW_PRZERÓBKI_ROPY_NAFTOWEJ_I_GAZU = [
            [
                "id" => 25755,
                "name" => json_encode([
                    "pl" => "Sterowanie procesami przeróbki ropy naftowej i gazu, w tym kontrolowanie temperatury, ciśnienia i przepływu substancji.",
                    "en" => "Controlling processes of crude oil and gas refining, including monitoring temperature, pressure, and substance flow."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25756,
                "name" => json_encode([
                    "pl" => "Optymalizacja parametrów technologicznych w procesach przeróbki ropy i gazu, zapewnienie zgodności z wymaganiami jakościowymi.",
                    "en" => "Optimizing technological parameters in oil and gas refining processes, ensuring compliance with quality requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25757,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów destylacji, konwersji i oczyszczania ropy naftowej oraz gazu, zapewnienie optymalnej wydajności.",
                    "en" => "Supervising processes of distillation, conversion, and purification of crude oil and gas, ensuring optimal efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25758,
                "name" => json_encode([
                    "pl" => "Monitorowanie i kontrolowanie jakości produktów po procesach przeróbki ropy naftowej i gazu.",
                    "en" => "Monitoring and controlling the quality of products after crude oil and gas refining processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25759,
                "name" => json_encode([
                    "pl" => "Współpraca z działem technicznym w zakresie konserwacji i utrzymania urządzeń przeróbczych.",
                    "en" => "Collaborating with the technical department for maintenance and upkeep of refining equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25760,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z przebiegu procesów przeróbki ropy naftowej i gazu oraz proponowanie usprawnień.",
                    "en" => "Preparing reports on the progress of crude oil and gas refining processes and proposing improvements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLER_URZĄDZEŃ_DO_CIĄGNIENIA_I_TŁOCZENIA_METALI = [
            [
                "id" => 25761,
                "name" => json_encode([
                    "pl" => "Sterowanie procesem ciągnienia i tłoczenia metali, monitorowanie parametrów technologicznych.",
                    "en" => "Controlling the drawing and stamping processes of metals, monitoring technological parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25762,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów ciągnienia i tłoczenia w celu zwiększenia wydajności i jakości produktów.",
                    "en" => "Optimizing drawing and stamping processes to increase efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25763,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów maszyn, takich jak ciśnienie, temperatura, i prędkość, w celu zapewnienia poprawności procesu.",
                    "en" => "Monitoring machine parameters such as pressure, temperature, and speed to ensure process accuracy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25764,
                "name" => json_encode([
                    "pl" => "Nadzorowanie jakości wyrobów metalowych, kontrolowanie ich wymiarów i kształtu.",
                    "en" => "Supervising the quality of metal products, controlling their dimensions and shape."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25765,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technologicznej i raportowanie wyników procesu produkcyjnego.",
                    "en" => "Maintaining technological documentation and reporting production process results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25766,
                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji w celu zapewnienia płynności procesów oraz eliminowania problemów produkcyjnych.",
                    "en" => "Collaborating with the production department to ensure process continuity and eliminate production issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLER_URZĄDZEŃ_DO_WYTOPU_METALI = [
            [
                "id" => 25767,
                "name" => json_encode([
                    "pl" => "Sterowanie procesem wytopu metali, monitorowanie temperatury i składu chemicznego stopów.",
                    "en" => "Controlling the metal melting process, monitoring temperature and chemical composition of alloys."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25768,
                "name" => json_encode([
                    "pl" => "Nadzorowanie parametrów pieców wytopowych, takich jak temperatura, czas wytopu, ciśnienie.",
                    "en" => "Supervising furnace parameters, such as temperature, melting time, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25769,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wytopu metali, w tym redukcja kosztów energii i poprawa jakości stopów.",
                    "en" => "Optimizing the metal melting process, including reducing energy costs and improving alloy quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25770,
                "name" => json_encode([
                    "pl" => "Kontrola jakości stopów metalowych, monitorowanie ich składu chemicznego i parametrów fizycznych.",
                    "en" => "Controlling the quality of metal alloys, monitoring their chemical composition and physical properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25771,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z wyników wytopu i proponowanie usprawnień w procesie produkcji.",
                    "en" => "Preparing reports on melting results and proposing improvements in the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25772,
                "name" => json_encode([
                    "pl" => "Współpraca z działem technicznym w celu utrzymania i konserwacji urządzeń wytopowych.",
                    "en" => "Collaborating with the technical department for the maintenance and servicing of melting equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLER_URZĄDZEŃ_OBRÓBKI_CIEPLNEJ_METALI = [
            [
                "id" => 25773,
                "name" => json_encode([
                    "pl" => "Sterowanie procesem obróbki cieplnej metali, w tym monitorowanie temperatury i czasu obróbki.",
                    "en" => "Controlling the heat treatment process of metals, including monitoring temperature and processing time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25774,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów obróbki cieplnej w celu poprawy właściwości mechanicznych metali.",
                    "en" => "Optimizing heat treatment processes to improve the mechanical properties of metals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25775,
                "name" => json_encode([
                    "pl" => "Monitorowanie i kontrolowanie parametrów procesów cieplnych, takich jak czas, temperatura i chłodzenie.",
                    "en" => "Monitoring and controlling heat treatment process parameters such as time, temperature, and cooling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25776,
                "name" => json_encode([
                    "pl" => "Nadzorowanie jakości obróbki cieplnej metali, kontrolowanie parametrów jakościowych.",
                    "en" => "Supervising the quality of heat treatment of metals, controlling quality parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25777,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji technologicznej związanej z obróbką cieplną metali.",
                    "en" => "Preparing technological documentation related to heat treatment of metals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25778,
                "name" => json_encode([
                    "pl" => "Współpraca z działem utrzymania ruchu w zakresie konserwacji urządzeń obróbczych.",
                    "en" => "Collaborating with the maintenance department for the servicing of heat treatment devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLER_URZĄDZEŃ_ODLEWNICZYCH = [
            [
                "id" => 25779,
                "name" => json_encode([
                    "pl" => "Sterowanie procesem odlewania metali, w tym kontrolowanie temperatury i jakości stopów.",
                    "en" => "Controlling the metal casting process, including monitoring temperature and alloy quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25780,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów procesów odlewania, takich jak ciśnienie, przepływ i czas, w celu uzyskania wysokiej jakości odlewów.",
                    "en" => "Monitoring parameters of casting processes, such as pressure, flow, and time, to achieve high-quality castings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25781,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów odlewania w celu poprawy wydajności produkcji oraz jakości odlewów.",
                    "en" => "Optimizing casting processes to improve production efficiency and casting quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25782,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesu chłodzenia i krystalizacji odlewów, kontrolowanie jakości gotowych produktów.",
                    "en" => "Supervising the cooling and crystallization process of castings, controlling the quality of finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25783,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z procesu odlewania oraz proponowanie usprawnień w technologii produkcji.",
                    "en" => "Preparing reports on the casting process and proposing improvements in the production technology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25784,
                "name" => json_encode([
                    "pl" => "Współpraca z działem technicznym w zakresie konserwacji i utrzymania urządzeń odlewniczych.",
                    "en" => "Collaborating with the technical department for the maintenance and servicing of casting devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLER_URZĄDZEŃ_WALCOWNICZYCH = [
            [
                "id" => 25785,
                "name" => json_encode([
                    "pl" => "Sterowanie procesem walcowania metali, monitorowanie parametrów technologicznych, takich jak temperatura, ciśnienie, prędkość.",
                    "en" => "Controlling the metal rolling process, monitoring technological parameters such as temperature, pressure, and speed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25786,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów walcowania, zapewnienie jakości walcowanych wyrobów i spełnienia norm jakościowych.",
                    "en" => "Optimizing the rolling processes, ensuring the quality of rolled products and meeting quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25787,
                "name" => json_encode([
                    "pl" => "Kontrola parametrów urządzeń walcowniczych, takich jak temperatura, prędkość walcowania oraz kontrola jakości produktu końcowego.",
                    "en" => "Controlling the parameters of rolling devices, such as temperature, rolling speed, and quality control of the final product."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25788,
                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji w celu zapewnienia płynności procesu walcowania i eliminacji problemów produkcyjnych.",
                    "en" => "Collaborating with the production department to ensure process continuity and eliminate production issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25789,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z monitoringu procesów walcowania oraz proponowanie działań poprawiających efektywność.",
                    "en" => "Preparing reports on rolling process monitoring and proposing actions to improve efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25790,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów chłodzenia oraz kontrolowanie jakości walcowanych wyrobów.",
                    "en" => "Supervising cooling processes and controlling the quality of rolled products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KONTROLERZY_PROCESÓW_METALURGICZNYCH = [
            [
                "id" => 25791,
                "name" => json_encode([
                    "pl" => "Nadzorowanie i sterowanie procesami metalurgicznymi, monitorowanie jakości produktów metalowych.",
                    "en" => "Supervising and controlling metallurgical processes, monitoring the quality of metal products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25792,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów metalurgicznych w celu zwiększenia efektywności produkcji i jakości metali.",
                    "en" => "Optimizing metallurgical processes to increase production efficiency and metal quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25793,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów urządzeń metalurgicznych, takich jak temperatura, ciśnienie, oraz monitorowanie jakości materiałów.",
                    "en" => "Monitoring the parameters of metallurgical devices, such as temperature, pressure, and monitoring material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25794,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli jakości procesów metalurgicznych oraz proponowanie usprawnień.",
                    "en" => "Conducting quality control of metallurgical processes and proposing improvements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25795,
                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji i inżynierii w celu optymalizacji procesów metalurgicznych.",
                    "en" => "Collaborating with production and engineering departments to optimize metallurgical processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25796,
                "name" => json_encode([
                    "pl" => "Opracowywanie raportów z wyników procesów metalurgicznych i kontrolowanie parametrów jakościowych.",
                    "en" => "Preparing reports on metallurgical process results and controlling quality parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLER_ROBOTÓW_PRZEMYSŁOWYCH = [
            [
                "id" => 25797,
                "name" => json_encode([
                    "pl" => "Sterowanie pracą robotów przemysłowych, monitorowanie parametrów pracy i zapewnienie zgodności z normami.",
                    "en" => "Controlling the operation of industrial robots, monitoring work parameters, and ensuring compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25798,
                "name" => json_encode([
                    "pl" => "Optymalizacja parametrów pracy robotów przemysłowych w celu poprawy efektywności produkcji.",
                    "en" => "Optimizing the operating parameters of industrial robots to improve production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25799,
                "name" => json_encode([
                    "pl" => "Monitorowanie bezpieczeństwa pracy robotów oraz zapewnienie ich prawidłowego funkcjonowania.",
                    "en" => "Monitoring the safety of robot operations and ensuring their proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25800,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie diagnostyki robotów przemysłowych i naprawa usterek.",
                    "en" => "Performing diagnostics of industrial robots and repairing malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25801,
                "name" => json_encode([
                    "pl" => "Programowanie i konfigurowanie robotów przemysłowych zgodnie z wymaganiami produkcyjnymi.",
                    "en" => "Programming and configuring industrial robots according to production requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25802,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie obsługi robotów przemysłowych oraz technik programowania.",
                    "en" => "Training employees in the operation of industrial robots and programming techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLER_URZĄDZEŃ_DO_PRODUKCJI_PAPIERU = [
            [
                "id" => 25803,
                "name" => json_encode([
                    "pl" => "Sterowanie procesem produkcji papieru, monitorowanie parametrów maszyn papierniczych.",
                    "en" => "Controlling the paper production process, monitoring the parameters of paper machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25804,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji papieru w celu poprawy jakości i wydajności produkcji.",
                    "en" => "Optimizing paper production processes to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25805,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości papieru oraz kontrolowanie jego parametrów takich jak grubość, wilgotność i gładkość.",
                    "en" => "Monitoring the quality of paper and controlling parameters such as thickness, moisture, and smoothness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25806,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesu formowania, suszenia i cięcia papieru, aby zapewnić zgodność z wymaganiami jakościowymi.",
                    "en" => "Supervising the paper forming, drying, and cutting processes to ensure compliance with quality requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25807,
                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji w celu eliminowania problemów technicznych oraz poprawy efektywności produkcji papieru.",
                    "en" => "Collaborating with the production department to eliminate technical issues and improve paper production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25808,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z wyników procesów produkcji papieru i proponowanie działań usprawniających.",
                    "en" => "Preparing reports on paper production process results and proposing improvement actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KONTROLERZY_PROCESÓW_PRZEMYSŁOWYCH = [
            [
                "id" => 25809,
                "name" => json_encode([
                    "pl" => "Sterowanie różnymi procesami przemysłowymi, monitorowanie parametrów technologicznych, takich jak temperatura, ciśnienie, przepływ.",
                    "en" => "Controlling various industrial processes, monitoring technological parameters such as temperature, pressure, and flow."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25810,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych w celu zwiększenia wydajności i obniżenia kosztów operacyjnych.",
                    "en" => "Optimizing production processes to increase efficiency and reduce operational costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25811,
                "name" => json_encode([
                    "pl" => "Monitorowanie wyników procesów, identyfikowanie problemów i proponowanie działań korygujących.",
                    "en" => "Monitoring process results, identifying issues, and proposing corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25812,
                "name" => json_encode([
                    "pl" => "Nadzorowanie jakości produktów końcowych, kontrolowanie zgodności z normami i specyfikacjami.",
                    "en" => "Supervising the quality of final products, controlling compliance with standards and specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25813,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w celu usprawnienia procesów produkcyjnych i eliminowania problemów technologicznych.",
                    "en" => "Collaborating with other departments to streamline production processes and eliminate technological issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25814,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów dotyczących wyników procesów oraz proponowanie usprawnień w technologii produkcji.",
                    "en" => "Preparing reports on process results and proposing improvements in production technology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLER_HIGIENY_MIĘSA = [
            [
                "id" => 25815,
                "name" => json_encode([
                    "pl" => "Kontrola przestrzegania norm higieny w zakładach przetwórstwa mięsa, monitorowanie warunków sanitarno-epidemiologicznych.",
                    "en" => "Controlling compliance with hygiene standards in meat processing plants, monitoring sanitary and epidemiological conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25816,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji jakości mięsa, w tym ocena stanu zdrowia zwierząt i warunków ich uboju.",
                    "en" => "Conducting meat quality inspections, including evaluating the health of animals and slaughter conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25817,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów produkcji mięsa, zapewnienie zgodności z normami sanitarnymi i jakościowymi.",
                    "en" => "Monitoring meat production processes, ensuring compliance with sanitary and quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25818,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie zasad higieny, bezpieczeństwa żywności i zapobiegania chorobom przenoszonym przez mięso.",
                    "en" => "Training employees on hygiene principles, food safety, and preventing meat-borne diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25819,
                "name" => json_encode([
                    "pl" => "Kontrolowanie warunków przechowywania, transportu i obrotu mięsem zgodnie z przepisami sanitarnymi.",
                    "en" => "Controlling meat storage, transportation, and handling conditions in accordance with sanitary regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25820,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów dotyczących jakości mięsa i przestrzegania norm higienicznych w przemyśle mięsnym.",
                    "en" => "Preparing reports on meat quality and compliance with hygiene standards in the meat industry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WETERYNARYJNY_KONTROLER_SANITARNY = [
            [
                "id" => 25821,
                "name" => json_encode([
                    "pl" => "Kontrola przestrzegania norm sanitarnych i weterynaryjnych w zakładach przemysłowych zajmujących się produkcją i przetwórstwem mięsa.",
                    "en" => "Controlling compliance with sanitary and veterinary standards in industrial facilities engaged in meat production and processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25822,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji weterynaryjnych, w tym kontrolowanie stanu zdrowia zwierząt i warunków ich uboju.",
                    "en" => "Conducting veterinary inspections, including checking the health of animals and slaughter conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25823,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków sanitarnych w zakładach uboju i przetwórstwa mięsa, kontrolowanie procesów produkcji.",
                    "en" => "Monitoring sanitary conditions in slaughterhouses and meat processing plants, controlling production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25824,
                "name" => json_encode([
                    "pl" => "Wykonywanie kontroli weterynaryjnych, w tym przeprowadzanie badań mięsa na obecność patogenów i zanieczyszczeń.",
                    "en" => "Conducting veterinary controls, including testing meat for pathogens and contaminants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25825,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi służbami sanitarno-weterynaryjnymi w celu zapewnienia bezpieczeństwa zdrowotnego produktów mięsnych.",
                    "en" => "Collaborating with other sanitary and veterinary services to ensure the health safety of meat products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25826,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji i raportów dotyczących wyników kontroli weterynaryjnych oraz norm sanitarnych.",
                    "en" => "Preparing documentation and reports on the results of veterinary inspections and sanitary standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RZECZOZNAWCA_JAKOŚCI_HANDLOWEJ_ARTYKUŁÓW_ROLNO_SPOŻYWCZYCH = [
            [
                "id" => 25827,
                "name" => json_encode([
                    "pl" => "Ocena jakości handlowej artykułów rolno-spożywczych, w tym badanie ich zgodności z normami jakościowymi i bezpieczeństwa.",
                    "en" => "Assessing the commercial quality of agricultural and food products, including testing their compliance with quality and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25828,
                "name" => json_encode([
                    "pl" => "Współpraca z producentami i dostawcami w zakresie poprawy jakości artykułów rolno-spożywczych.",
                    "en" => "Collaborating with producers and suppliers to improve the quality of agricultural and food products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25829,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości artykułów rolno-spożywczych na każdym etapie produkcji i obrotu, kontrolowanie zgodności z normami.",
                    "en" => "Monitoring the quality of agricultural and food products at every stage of production and distribution, ensuring compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25830,
                "name" => json_encode([
                    "pl" => "Prowadzenie kontroli jakości artykułów rolno-spożywczych w trakcie importu i eksportu.",
                    "en" => "Conducting quality control of agricultural and food products during import and export."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25831,
                "name" => json_encode([
                    "pl" => "Opracowywanie raportów jakościowych oraz rekomendowanie działań korygujących i poprawiających.",
                    "en" => "Preparing quality reports and recommending corrective and improvement actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25832,
                "name" => json_encode([
                    "pl" => "Współpraca z organami kontrolnymi oraz innymi specjalistami w zakresie zapewnienia zgodności jakościowej produktów.",
                    "en" => "Collaborating with regulatory bodies and other specialists to ensure the quality compliance of products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INSPEKTOR_HOTELOWY = [
            [
                "id" => 25833,
                "name" => json_encode([
                    "pl" => "Kontrola przestrzegania norm jakościowych, sanitarnych i BHP w hotelach i innych obiektach noclegowych.",
                    "en" => "Inspecting compliance with quality, sanitary, and health and safety standards in hotels and other lodging establishments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25834,
                "name" => json_encode([
                    "pl" => "Nadzorowanie jakości usług świadczonych przez personel hotelowy oraz dbanie o standardy obsługi gości.",
                    "en" => "Supervising the quality of services provided by hotel staff and ensuring guest service standards are met."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25835,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu technicznego obiektu hotelowego, kontrolowanie warunków zakwaterowania i komfortu gości.",
                    "en" => "Monitoring the technical condition of the hotel facility, controlling accommodation conditions, and guest comfort."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25836,
                "name" => json_encode([
                    "pl" => "Współpraca z działami technicznymi i utrzymania ruchu w celu zapewnienia sprawności technicznej hotelu.",
                    "en" => "Collaborating with technical and maintenance departments to ensure the technical functionality of the hotel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25837,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów jakościowych usług hotelowych, ocena satysfakcji gości oraz wprowadzanie działań naprawczych.",
                    "en" => "Conducting quality audits of hotel services, assessing guest satisfaction, and implementing corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25838,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z audytów oraz nadzorowanie przestrzegania procedur wewnętrznych w hotelu.",
                    "en" => "Preparing audit reports and overseeing compliance with internal procedures in the hotel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INSPEKTOR_KONTROLI_HANDLU_I_USŁUG = [
            [
                "id" => 25839,
                "name" => json_encode([
                    "pl" => "Kontrola przestrzegania przepisów prawa w zakresie handlu i świadczenia usług, monitorowanie zgodności z normami.",
                    "en" => "Controlling compliance with legal regulations regarding trade and services, monitoring compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25840,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów działalności handlowej i usługowej, kontrolowanie jakości świadczonych usług.",
                    "en" => "Conducting audits of trade and service activities, controlling the quality of services provided."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25841,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami kontrolnymi w celu zapewnienia przestrzegania przepisów prawa dotyczących handlu.",
                    "en" => "Collaborating with regulatory institutions to ensure compliance with trade laws."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25842,
                "name" => json_encode([
                    "pl" => "Monitorowanie przestrzegania zasad uczciwości handlowej, w tym kontrolowanie ceny, jakości i reklamy produktów i usług.",
                    "en" => "Monitoring compliance with fair trade principles, including controlling the pricing, quality, and advertising of products and services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25843,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z kontroli handlowych i usługowych oraz wprowadzanie działań naprawczych.",
                    "en" => "Preparing reports on trade and service inspections and implementing corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25844,
                "name" => json_encode([
                    "pl" => "Kontrola warunków umów handlowych i usługowych, monitorowanie zgodności z regulacjami prawnymi.",
                    "en" => "Controlling the conditions of trade and service contracts, monitoring compliance with legal regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INSPEKTOR_DO_SPRAW_MIAR_I_WAG = [
            [
                "id" => 25845,
                "name" => json_encode([
                    "pl" => "Kontrola zgodności urządzeń pomiarowych z obowiązującymi normami i przepisami prawa, w tym weryfikacja miar i wag.",
                    "en" => "Controlling the compliance of measuring devices with applicable standards and legal regulations, including verifying measures and weights."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25846,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie legalizacji miar i wag, kontrolowanie ich dokładności i zgodności z wymaganiami metrologicznymi.",
                    "en" => "Performing the legalization of measures and weights, controlling their accuracy and compliance with metrological requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25847,
                "name" => json_encode([
                    "pl" => "Nadzorowanie funkcjonowania systemów pomiarowych, w tym przeprowadzanie testów i badań urządzeń pomiarowych.",
                    "en" => "Supervising the operation of measuring systems, including conducting tests and inspections of measuring devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25848,
                "name" => json_encode([
                    "pl" => "Współpraca z laboratoriami metrologicznymi w celu zapewnienia dokładności pomiarów i zgodności z normami.",
                    "en" => "Collaborating with metrological laboratories to ensure measurement accuracy and compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25849,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej miar i wag, przygotowywanie raportów z przeprowadzonych kontroli.",
                    "en" => "Maintaining documentation related to measures and weights, preparing reports on conducted inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25850,
                "name" => json_encode([
                    "pl" => "Szkolenie personelu w zakresie obsługi urządzeń do pomiaru miar i wag oraz metrologii.",
                    "en" => "Training personnel in the operation of measuring devices for measures and weights and metrology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_URZĘDNICY_PAŃSTWOWI_DO_SPRAW_NADZORU = [
            [
                "id" => 25851,
                "name" => json_encode([
                    "pl" => "Nadzorowanie różnych procesów administracyjnych i regulacyjnych w różnych sektorach, zapewnianie zgodności z przepisami.",
                    "en" => "Supervising various administrative and regulatory processes in different sectors, ensuring compliance with regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25852,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań kontrolnych i audytów w instytucjach publicznych, monitorowanie zgodności z przepisami prawa.",
                    "en" => "Coordinating control actions and audits in public institutions, monitoring compliance with legal regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25853,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz i oceny procesów nadzorczych, raportowanie wyników do odpowiednich organów.",
                    "en" => "Conducting analysis and assessment of supervisory processes, reporting results to relevant authorities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25854,
                "name" => json_encode([
                    "pl" => "Nadzór nad organizowaniem szkoleń i seminariów dotyczących nowych przepisów i regulacji prawnych.",
                    "en" => "Supervising the organization of training and seminars regarding new regulations and legal provisions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25855,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań w zakresie przestrzegania norm etycznych i procedur administracyjnych w instytucjach publicznych.",
                    "en" => "Coordinating actions regarding the adherence to ethical standards and administrative procedures in public institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25856,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów legislacyjnych i regulacyjnych w różnych dziedzinach administracji publicznej.",
                    "en" => "Supervising legislative and regulatory processes in various areas of public administration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLER_JAKOŚCI_POŁĄCZEŃ_SPWALNICZYCH = [
            [
                "id" => 25857,
                "name" => json_encode([
                    "pl" => "Kontrola jakości połączeń spawalniczych, w tym ocena wyglądu, struktury i wytrzymałości połączeń.",
                    "en" => "Controlling the quality of welded joints, including evaluating the appearance, structure, and strength of the joints."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25858,
                "name" => json_encode([
                    "pl" => "Wykonywanie badań nieniszczących w celu oceny jakości spoin, takich jak ultradźwięki, radiografia, czy próby wizualne.",
                    "en" => "Performing non-destructive testing to evaluate weld quality, such as ultrasound, radiography, or visual inspection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25859,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu spawania w celu zapewnienia, że spełnia on wymagania jakościowe i normy techniczne.",
                    "en" => "Monitoring the welding process to ensure it meets quality requirements and technical standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25860,
                "name" => json_encode([
                    "pl" => "Dokonywanie kontroli jakości materiałów spawalniczych i zapewnienie zgodności z normami.",
                    "en" => "Controlling the quality of welding materials and ensuring compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25861,
                "name" => json_encode([
                    "pl" => "Współpraca z działem inżynierii w celu opracowania procedur kontroli jakości połączeń spawalniczych.",
                    "en" => "Collaborating with the engineering department to develop welding joint quality control procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25862,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów dotyczących jakości połączeń spawalniczych oraz proponowanie działań naprawczych.",
                    "en" => "Preparing reports on welding joint quality and proposing corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RZECZOZNAWCA_SAMOCHODOWY = [
            [
                "id" => 25863,
                "name" => json_encode([
                    "pl" => "Ocena stanu technicznego pojazdów samochodowych, w tym ocena uszkodzeń, zużycia i sprawności pojazdów.",
                    "en" => "Assessing the technical condition of vehicles, including evaluating damages, wear, and vehicle functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25864,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szczegółowych kontroli technicznych pojazdów, w tym badania układów mechanicznych, elektrycznych i elektronicznych.",
                    "en" => "Conducting detailed technical inspections of vehicles, including tests of mechanical, electrical, and electronic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25865,
                "name" => json_encode([
                    "pl" => "Ocena wartości pojazdów w celu określenia ich rynkowej wartości, stanu technicznego i zgodności z wymaganiami prawnymi.",
                    "en" => "Assessing the value of vehicles to determine their market value, technical condition, and compliance with legal requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25866,
                "name" => json_encode([
                    "pl" => "Wydawanie opinii i raportów dotyczących stanu technicznego pojazdów, wykrywania wad i awarii.",
                    "en" => "Issuing opinions and reports on the technical condition of vehicles, detecting faults and breakdowns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25867,
                "name" => json_encode([
                    "pl" => "Współpraca z ubezpieczycielami w zakresie oceny szkód komunikacyjnych i wycen pojazdów.",
                    "en" => "Collaborating with insurers in evaluating road damages and vehicle valuations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25868,
                "name" => json_encode([
                    "pl" => "Udzielanie porad w zakresie technicznych aspektów pojazdów samochodowych, ich napraw i konserwacji.",
                    "en" => "Providing advice on the technical aspects of vehicles, their repairs, and maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROJEKTANT_BIŻUTERII = [
            [
                "id" => 25869,
                "name" => json_encode([
                    "pl" => "Projektowanie biżuterii, tworzenie nowych wzorów i kolekcji, uwzględniając aktualne trendy i potrzeby rynku.",
                    "en" => "Designing jewelry, creating new designs and collections, considering current trends and market needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25870,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów do produkcji biżuterii, takich jak kamienie szlachetne, metale szlachetne, perły itp.",
                    "en" => "Selecting appropriate materials for jewelry production, such as precious stones, precious metals, pearls, etc."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25871,
                "name" => json_encode([
                    "pl" => "Przygotowywanie projektów technicznych i szczegółowych rysunków do produkcji biżuterii.",
                    "en" => "Preparing technical designs and detailed drawings for jewelry production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25872,
                "name" => json_encode([
                    "pl" => "Tworzenie prototypów biżuterii, testowanie różnych technik produkcji i wykończenia.",
                    "en" => "Creating jewelry prototypes, testing various production and finishing techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25873,
                "name" => json_encode([
                    "pl" => "Współpraca z producentami w celu realizacji projektów biżuterii, nadzór nad procesem produkcji.",
                    "en" => "Collaborating with manufacturers to implement jewelry designs, overseeing the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25874,
                "name" => json_encode([
                    "pl" => "Prezentowanie nowych kolekcji biżuterii na wystawach, targach mody i w mediach.",
                    "en" => "Presenting new jewelry collections at exhibitions, fashion fairs, and in the media."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KOSTIUMOGRAF = [
            [
                "id" => 25875,
                "name" => json_encode([
                    "pl" => "Projektowanie kostiumów scenicznych do różnych produkcji artystycznych, takich jak teatr, film czy telewizja.",
                    "en" => "Designing stage costumes for various artistic productions, such as theater, film, or television."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25876,
                "name" => json_encode([
                    "pl" => "Tworzenie projektów odzieży, uwzględniając wymagania artystyczne, funkcjonalne oraz historyczne.",
                    "en" => "Creating clothing designs, considering artistic, functional, and historical requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25877,
                "name" => json_encode([
                    "pl" => "Dobór materiałów, tkanin i dodatków do produkcji kostiumów scenicznych.",
                    "en" => "Selecting materials, fabrics, and accessories for stage costume production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25878,
                "name" => json_encode([
                    "pl" => "Współpraca z reżyserami i artystami w celu dostosowania kostiumów do postaci i fabuły.",
                    "en" => "Collaborating with directors and artists to adapt costumes to characters and the plot."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25879,
                "name" => json_encode([
                    "pl" => "Nadzorowanie produkcji kostiumów, współpraca z krawcami i szwalniami.",
                    "en" => "Overseeing the production of costumes, collaborating with tailors and sewing workshops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25880,
                "name" => json_encode([
                    "pl" => "Udział w dobieraniu odpowiednich akcesoriów, takich jak biżuteria, obuwie, nakrycia głowy, do pełnej stylizacji.",
                    "en" => "Participating in selecting appropriate accessories, such as jewelry, footwear, and headgear, for the complete styling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROJEKTANT_MODY = [
            [
                "id" => 25881,
                "name" => json_encode([
                    "pl" => "Projektowanie odzieży na sezonowe kolekcje, uwzględniając aktualne trendy mody oraz potrzeby rynku.",
                    "en" => "Designing clothing for seasonal collections, considering current fashion trends and market needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25882,
                "name" => json_encode([
                    "pl" => "Tworzenie szkiców projektów, dobór tkanin, kolorów oraz dodatków do kolekcji odzieżowych.",
                    "en" => "Creating design sketches, selecting fabrics, colors, and accessories for clothing collections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25883,
                "name" => json_encode([
                    "pl" => "Opracowywanie koncepcji i projektów odzieży na specjalne okazje, takie jak pokazy mody czy sesje zdjęciowe.",
                    "en" => "Developing concepts and clothing designs for special occasions, such as fashion shows or photo shoots."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25884,
                "name" => json_encode([
                    "pl" => "Przygotowywanie prototypów i wzorców odzieży oraz nadzorowanie ich produkcji.",
                    "en" => "Preparing prototypes and patterns for clothing and overseeing their production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25885,
                "name" => json_encode([
                    "pl" => "Współpraca z producentami odzieży w celu realizacji zaprojektowanych kolekcji i nadzór nad procesem produkcji.",
                    "en" => "Collaborating with clothing manufacturers to implement designed collections and overseeing the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25886,
                "name" => json_encode([
                    "pl" => "Prezentowanie kolekcji mody na pokazach mody, wystawach oraz w mediach.",
                    "en" => "Presenting fashion collections at fashion shows, exhibitions, and in the media."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROJEKTANT_WZORNICTWA_PRZEMYSŁOWEGO = [
            [
                "id" => 25887,
                "name" => json_encode([
                    "pl" => "Projektowanie produktów przemysłowych, takich jak urządzenia, maszyny, opakowania i meble, uwzględniając funkcjonalność i estetykę.",
                    "en" => "Designing industrial products, such as devices, machines, packaging, and furniture, considering functionality and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25888,
                "name" => json_encode([
                    "pl" => "Tworzenie koncepcji projektów, opracowywanie rysunków technicznych, prototypów i modeli.",
                    "en" => "Creating design concepts, preparing technical drawings, prototypes, and models."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25889,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów i technologii do produkcji zaprojektowanych produktów.",
                    "en" => "Selecting appropriate materials and technologies for the production of designed products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25890,
                "name" => json_encode([
                    "pl" => "Współpraca z działami technicznymi i produkcyjnymi w celu realizacji zaprojektowanych produktów.",
                    "en" => "Collaborating with technical and production departments to implement designed products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25891,
                "name" => json_encode([
                    "pl" => "Testowanie i ocenianie funkcjonalności oraz ergonomii zaprojektowanych produktów.",
                    "en" => "Testing and evaluating the functionality and ergonomics of designed products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25892,
                "name" => json_encode([
                    "pl" => "Prezentowanie projektów wzorniczych i nowych produktów na wystawach i konferencjach branżowych.",
                    "en" => "Presenting design projects and new products at exhibitions and industry conferences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_PROJEKTANCI_WZORNICTWA_PRZEMYSŁOWEGO_I_ODZIEŻY = [
            [
                "id" => 25893,
                "name" => json_encode([
                    "pl" => "Projektowanie różnorodnych produktów przemysłowych i odzieży, uwzględniając funkcjonalność, estetykę oraz potrzeby rynku.",
                    "en" => "Designing a variety of industrial products and clothing, considering functionality, aesthetics, and market needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25894,
                "name" => json_encode([
                    "pl" => "Tworzenie koncepcji projektów odzieży i produktów, przygotowywanie rysunków, specyfikacji i prototypów.",
                    "en" => "Creating design concepts for clothing and products, preparing drawings, specifications, and prototypes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25895,
                "name" => json_encode([
                    "pl" => "Współpraca z producentami w celu realizacji zaprojektowanych produktów, nadzór nad procesem produkcji.",
                    "en" => "Collaborating with manufacturers to implement designed products, overseeing the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25896,
                "name" => json_encode([
                    "pl" => "Badanie rynku i trendów mody w celu dostosowania projektów do potrzeb klientów.",
                    "en" => "Market and fashion trend research to adapt designs to customer needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25897,
                "name" => json_encode([
                    "pl" => "Testowanie prototypów produktów, ocenianie ich funkcjonalności, estetyki i ergonomii.",
                    "en" => "Testing product prototypes, evaluating their functionality, aesthetics, and ergonomics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25898,
                "name" => json_encode([
                    "pl" => "Prezentowanie zaprojektowanych kolekcji i produktów na wystawach, pokazach mody i w mediach.",
                    "en" => "Presenting designed collections and products at exhibitions, fashion shows, and in the media."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROJEKTANT_EKSPOZYCJI_TOWARÓW_I_USŁUG = [
            [
                "id" => 25899,
                "name" => json_encode([
                    "pl" => "Projektowanie i aranżacja ekspozycji towarów oraz usług w sklepach, galeriach i innych miejscach sprzedaży.",
                    "en" => "Designing and arranging product and service displays in stores, galleries, and other sales locations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25900,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich elementów wizualnych, takich jak oświetlenie, meble i materiały promocyjne do ekspozycji.",
                    "en" => "Selecting appropriate visual elements such as lighting, furniture, and promotional materials for displays."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25901,
                "name" => json_encode([
                    "pl" => "Analiza zachowań klientów i trendów rynkowych w celu dostosowania ekspozycji do oczekiwań klientów.",
                    "en" => "Analyzing customer behavior and market trends to adjust displays to customer expectations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25902,
                "name" => json_encode([
                    "pl" => "Współpraca z działami sprzedaży i marketingu w celu stworzenia spójnej wizualnej tożsamości marki.",
                    "en" => "Collaborating with sales and marketing departments to create a consistent visual brand identity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25903,
                "name" => json_encode([
                    "pl" => "Nadzorowanie montażu i ustawienia ekspozycji, monitorowanie ich efektywności.",
                    "en" => "Overseeing the installation and arrangement of displays, monitoring their effectiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25904,
                "name" => json_encode([
                    "pl" => "Opracowywanie projektów ekspozycji promujących sprzedaż, zachęcających do interakcji z produktami i usługami.",
                    "en" => "Developing display designs that promote sales and encourage interaction with products and services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROJEKTANT_WYROBÓW_SKÓRZANYCH = [
            [
                "id" => 25905,
                "name" => json_encode([
                    "pl" => "Projektowanie wyrobów skórzanych, takich jak torby, obuwie, paski i akcesoria, uwzględniając funkcjonalność i estetykę.",
                    "en" => "Designing leather products such as bags, shoes, belts, and accessories, considering functionality and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25906,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów skórzanych oraz innych komponentów, takich jak metalowe okucia czy tkaniny.",
                    "en" => "Selecting appropriate leather materials and other components such as metal fittings or fabrics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25907,
                "name" => json_encode([
                    "pl" => "Tworzenie projektów technicznych, rysunków oraz prototypów wyrobów skórzanych.",
                    "en" => "Creating technical designs, drawings, and prototypes of leather products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25908,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesu produkcji wyrobów skórzanych, współpraca z rzemieślnikami i producentami.",
                    "en" => "Overseeing the production process of leather products, collaborating with artisans and manufacturers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25909,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów jakości wyrobów skórzanych, kontrolowanie ich trwałości i funkcjonalności.",
                    "en" => "Conducting quality tests on leather products, controlling their durability and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25910,
                "name" => json_encode([
                    "pl" => "Prezentowanie wyrobów skórzanych na wystawach i targach, rozwijanie oferty produktowej.",
                    "en" => "Presenting leather products at exhibitions and fairs, developing product offerings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KREŚLARZE = [
            [
                "id" => 25911,
                "name" => json_encode([
                    "pl" => "Tworzenie rysunków technicznych, planów i schematów dla różnych projektów, takich jak budowlane, mechaniczne czy elektryczne.",
                    "en" => "Creating technical drawings, plans, and diagrams for various projects, such as construction, mechanical, or electrical."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25912,
                "name" => json_encode([
                    "pl" => "Przygotowywanie rysunków roboczych oraz dokumentacji projektowej w oparciu o instrukcje i wytyczne inżynierskie.",
                    "en" => "Preparing working drawings and project documentation based on engineering instructions and guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25913,
                "name" => json_encode([
                    "pl" => "Aktualizowanie rysunków technicznych zgodnie z wymaganiami zmieniających się projektów i specyfikacji.",
                    "en" => "Updating technical drawings in accordance with the changing requirements of projects and specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25914,
                "name" => json_encode([
                    "pl" => "Używanie oprogramowania CAD do tworzenia precyzyjnych rysunków technicznych.",
                    "en" => "Using CAD software to create precise technical drawings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25915,
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami i projektantami w celu dostosowania rysunków do specyfikacji projektowych.",
                    "en" => "Collaborating with engineers and designers to adapt drawings to project specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25916,
                "name" => json_encode([
                    "pl" => "Nadzorowanie jakości i dokładności wykonania rysunków technicznych w procesie produkcji.",
                    "en" => "Overseeing the quality and accuracy of technical drawings during the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRZEROBU_TORFU = [
            [
                "id" => 25917,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń wykorzystywanych do wydobywania, transportu i przetwarzania torfu.",
                    "en" => "Operating machines and equipment used for extracting, transporting, and processing peat."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25918,
                "name" => json_encode([
                    "pl" => "Kontrola procesów produkcji torfu, zapewnienie jego jakości i zgodności z wymaganiami.",
                    "en" => "Controlling peat production processes, ensuring its quality and compliance with requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25919,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu technicznego maszyn i urządzeń do przerobu torfu, wykonywanie drobnych napraw.",
                    "en" => "Monitoring the technical condition of machines and equipment for peat processing, performing minor repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25920,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji torfu w celu zwiększenia efektywności i zmniejszenia strat surowca.",
                    "en" => "Optimizing peat production processes to increase efficiency and reduce raw material losses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25921,
                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania norm bezpieczeństwa i ochrony środowiska przy pracy z torfem.",
                    "en" => "Ensuring compliance with safety and environmental protection standards when working with peat."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25922,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z procesu produkcji torfu oraz monitorowanie wyników procesów przeróbki.",
                    "en" => "Preparing reports on peat production processes and monitoring the results of processing operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRZEROBKI_MECHANICZNEJ_RUD = [
            [
                "id" => 25923,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń wykorzystywanych w procesie przeróbki mechanicznej rud.",
                    "en" => "Operating machines and equipment used in the mechanical processing of ores."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25924,
                "name" => json_encode([
                    "pl" => "Kontrola procesów wydobycia i przeróbki rud, monitorowanie parametrów pracy maszyn.",
                    "en" => "Controlling the extraction and processing of ores, monitoring machine operating parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25925,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu technicznego maszyn i urządzeń, wykonywanie drobnych napraw w razie potrzeby.",
                    "en" => "Monitoring the technical condition of machines and equipment, performing minor repairs when needed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25926,
                "name" => json_encode([
                    "pl" => "Optymalizacja parametrów procesu przeróbki rud w celu zwiększenia wydajności i jakości produktów.",
                    "en" => "Optimizing ore processing parameters to increase efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25927,
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności procesów z normami bezpieczeństwa i ochrony środowiska.",
                    "en" => "Ensuring compliance with safety and environmental protection standards during the processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25928,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z wyników procesów oraz rekomendowanie usprawnień w technologii przeróbki.",
                    "en" => "Preparing reports on process results and recommending improvements in the processing technology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRZEROBKI_MECHANICZNEJ_WĘGLA = [
            [
                "id" => 25929,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do przeróbki mechanicznej węgla, takich jak młyny węglowe i kruszarki.",
                    "en" => "Operating machines for the mechanical processing of coal, such as coal mills and crushers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25930,
                "name" => json_encode([
                    "pl" => "Kontrola jakości węgla, monitorowanie parametrów procesu przeróbki węgla.",
                    "en" => "Controlling coal quality, monitoring coal processing parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25931,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie drobnych napraw maszyn i urządzeń wykorzystywanych w procesie przeróbki węgla.",
                    "en" => "Performing minor repairs on machines and equipment used in the coal processing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25932,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów przeróbki węgla w celu zwiększenia efektywności i jakości wytwarzanego węgla.",
                    "en" => "Optimizing coal processing processes to increase the efficiency and quality of the coal produced."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25933,
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności procesów z normami BHP oraz ochrony środowiska.",
                    "en" => "Ensuring compliance with occupational health and safety standards and environmental protection regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25934,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów i analiz dotyczących efektywności procesów przeróbki węgla.",
                    "en" => "Preparing reports and analyses on the efficiency of coal processing operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_ROZDRABNIANIA_I_SORTOWANIA_SUROWCÓW_MINERALNYCH = [
            [
                "id" => 25935,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do rozdrabniania i sortowania surowców mineralnych, takich jak kruszarki i sita.",
                    "en" => "Operating machines for crushing and sorting mineral raw materials, such as crushers and screens."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25936,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów procesu rozdrabniania i sortowania, zapewnienie jakości surowców mineralnych.",
                    "en" => "Monitoring the parameters of crushing and sorting processes, ensuring the quality of mineral raw materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25937,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie drobnych napraw maszyn i urządzeń wykorzystywanych do rozdrabniania i sortowania surowców.",
                    "en" => "Performing minor repairs on machines and equipment used for crushing and sorting raw materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25938,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów w celu zwiększenia efektywności rozdrabniania i sortowania surowców mineralnych.",
                    "en" => "Optimizing processes to increase the efficiency of crushing and sorting mineral raw materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25939,
                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania norm BHP oraz ochrony środowiska w trakcie rozdrabniania i sortowania surowców.",
                    "en" => "Ensuring compliance with health and safety standards and environmental protection regulations during the crushing and sorting processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25940,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z wyników procesu rozdrabniania i sortowania oraz wprowadzanie działań poprawiających efektywność.",
                    "en" => "Preparing reports on the crushing and sorting process results and implementing actions to improve efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_MASZYN_I_URZĄDZEŃ_DO_PRZEROBKI_MECHANICZNEJ_KOPALIN = [
            [
                "id" => 25941,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń wykorzystywanych w przeróbce mechanicznej kopalin, takich jak kruszarki, młyny i sita.",
                    "en" => "Operating machines and equipment used in the mechanical processing of minerals, such as crushers, mills, and screens."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25942,
                "name" => json_encode([
                    "pl" => "Kontrola jakości przerabianych kopalin, monitorowanie parametrów maszyny i procesu.",
                    "en" => "Controlling the quality of processed minerals, monitoring machine parameters and the process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25943,
                "name" => json_encode([
                    "pl" => "Optymalizacja parametrów maszyny w celu zwiększenia efektywności procesów przeróbki.",
                    "en" => "Optimizing machine parameters to increase the efficiency of processing operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25944,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji i drobnych napraw maszyn oraz urządzeń do przeróbki kopalin.",
                    "en" => "Performing maintenance and minor repairs on machines and equipment for mineral processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25945,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem rozdrabniania, sortowania i transportu kopalin w zakładzie przeróbczym.",
                    "en" => "Managing the crushing, sorting, and transportation process of minerals in the processing plant."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25946,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów i dokumentacji związanej z procesem przeróbki kopalin.",
                    "en" => "Preparing reports and documentation related to the mineral processing operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_URZĄDZEŃ_PRZERÓBCZYCH = [
            [
                "id" => 25947,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń wykorzystywanych do przeróbki surowców mineralnych, takich jak młyny, sita, kruszarki.",
                    "en" => "Operating machines and equipment used for processing raw mineral materials, such as mills, screens, and crushers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25948,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości procesu przeróbki, kontrolowanie parametrów maszyn i urządzeń.",
                    "en" => "Monitoring the quality of the processing operation, controlling machine and equipment parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25949,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu przeróbki w celu zwiększenia wydajności i jakości materiałów.",
                    "en" => "Optimizing the processing operation to increase efficiency and material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25950,
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją maszyn i urządzeń, wykonywanie drobnych napraw w razie potrzeby.",
                    "en" => "Managing maintenance of machines and equipment, performing minor repairs when necessary."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25951,
                "name" => json_encode([
                    "pl" => "Dokonywanie kontroli jakości materiałów surowych przed rozpoczęciem przeróbki.",
                    "en" => "Performing quality control on raw materials before processing begins."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25952,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów i analiz dotyczących wyników przeróbki surowców.",
                    "en" => "Preparing reports and analyses related to the results of raw material processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GÓRNIK_EKSPLOATACJI_OTWOROWEJ = [
            [
                "id" => 25953,
                "name" => json_encode([
                    "pl" => "Wykonywanie wierceń w celu eksploatacji surowców naturalnych, takich jak węgiel, gaz czy ropa.",
                    "en" => "Performing drilling operations for the extraction of natural resources such as coal, gas, or oil."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25954,
                "name" => json_encode([
                    "pl" => "Kontrola parametrów technicznych otworów wiertniczych, monitorowanie efektywności procesu.",
                    "en" => "Controlling technical parameters of boreholes, monitoring the effectiveness of the process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25955,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami i urządzeniami wykorzystywanymi w procesie wiercenia otworów w celu eksploatacji.",
                    "en" => "Managing machines and equipment used in the drilling process for extraction purposes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25956,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem w celu zapewnienia prawidłowej eksploatacji otworów wiertniczych.",
                    "en" => "Collaborating with the team to ensure proper operation of drilling wells."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25957,
                "name" => json_encode([
                    "pl" => "Utrzymywanie dokumentacji technicznej i kontrola jakości procesu wiercenia.",
                    "en" => "Maintaining technical documentation and quality control of the drilling process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25958,
                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania zasad BHP i ochrony środowiska podczas eksploatacji otworów wiertniczych.",
                    "en" => "Ensuring compliance with health, safety, and environmental protection regulations during borehole exploitation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_OBRÓBKI_ODWIERTÓW_WYDOBYWCZYCH = [
            [
                "id" => 25959,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń służących do obróbki odwiertów w celu uzyskania surowców naturalnych.",
                    "en" => "Operating machines and equipment used for processing wells to extract natural resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25960,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie wstępnej obróbki odwiertów, monitorowanie parametrów technicznych.",
                    "en" => "Performing preliminary processing of wells, monitoring technical parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25961,
                "name" => json_encode([
                    "pl" => "Zarządzanie urządzeniami do obróbki odwiertów, zapewnianie ich sprawności operacyjnej.",
                    "en" => "Managing well processing equipment, ensuring its operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25962,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi zespołami, aby zapewnić prawidłowe przetwarzanie odwiertów w celu wydobycia surowców.",
                    "en" => "Collaborating with other teams to ensure proper processing of wells for resource extraction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25963,
                "name" => json_encode([
                    "pl" => "Wykonywanie drobnych napraw urządzeń w razie awarii, monitorowanie ich stanu technicznego.",
                    "en" => "Performing minor repairs on equipment in case of malfunction, monitoring its technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25964,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesów obróbki odwiertów i przygotowywanie raportów.",
                    "en" => "Documenting well processing operations and preparing reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WIERTACZ_STUDNI = [
            [
                "id" => 25965,
                "name" => json_encode([
                    "pl" => "Wykonywanie odwiertów studziennych w celu uzyskania dostępu do wód gruntowych lub innych surowców.",
                    "en" => "Performing well drilling operations to access groundwater or other resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25966,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn wiertniczych i urządzeń służących do drążenia studni.",
                    "en" => "Operating drilling machines and equipment used for drilling wells."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25967,
                "name" => json_encode([
                    "pl" => "Kontrola głębokości odwiertu oraz parametrów pracy urządzeń wiertniczych.",
                    "en" => "Controlling drilling depth and the working parameters of drilling equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25968,
                "name" => json_encode([
                    "pl" => "Monitorowanie postępu odwiertu i zapewnianie zgodności z planem geologicznym.",
                    "en" => "Monitoring the drilling progress and ensuring compliance with the geological plan."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25969,
                "name" => json_encode([
                    "pl" => "Zapewnienie odpowiednich warunków pracy i przestrzeganie norm BHP.",
                    "en" => "Ensuring proper working conditions and compliance with health and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25970,
                "name" => json_encode([
                    "pl" => "Utrzymanie dokumentacji odwiertów oraz raportowanie postępów w pracy.",
                    "en" => "Maintaining well drilling documentation and reporting progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WIERTACZ = [
            [
                "id" => 25971,
                "name" => json_encode([
                    "pl" => "Wykonywanie odwiertów w celu pozyskiwania surowców naturalnych, takich jak węgiel, gaz czy ropa.",
                    "en" => "Performing drilling operations to extract natural resources such as coal, gas, or oil."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25972,
                "name" => json_encode([
                    "pl" => "Obsługa wiertnic oraz nadzorowanie procesu wiercenia.",
                    "en" => "Operating drilling machines and supervising the drilling process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25973,
                "name" => json_encode([
                    "pl" => "Kontrola parametrów wiertniczych, takich jak ciśnienie, prędkość, głębokość odwiertu.",
                    "en" => "Controlling drilling parameters such as pressure, speed, and borehole depth."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25974,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji i napraw maszyn wiertniczych.",
                    "en" => "Carrying out maintenance and repairs on drilling machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25975,
                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania przepisów BHP oraz ochrony środowiska podczas wiercenia.",
                    "en" => "Ensuring compliance with health and safety regulations and environmental protection during drilling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25976,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z postępu wiercenia oraz identyfikowanie problemów technicznych.",
                    "en" => "Preparing reports on drilling progress and identifying technical issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_URZĄDZEŃ_WIERTNICZYCH_I_WYDOBYWCZYCH = [
            [
                "id" => 25977,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń wiertniczych i wydobywczych do ekstrakcji ropy, gazu i innych surowców naturalnych.",
                    "en" => "Operating drilling and extraction equipment for oil, gas, and other natural resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25978,
                "name" => json_encode([
                    "pl" => "Monitorowanie pracy urządzeń, kontrolowanie parametrów procesu wydobywczego.",
                    "en" => "Monitoring equipment operation, controlling extraction process parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25979,
                "name" => json_encode([
                    "pl" => "Wykonywanie drobnych napraw urządzeń wiertniczych i wydobywczych.",
                    "en" => "Performing minor repairs on drilling and extraction equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25980,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami wiertniczymi i urządzeniami do wydobywania surowców.",
                    "en" => "Managing drilling machines and equipment for resource extraction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25981,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów wydobywczych, zapewnienie jakości surowców wydobywanych z odwiertów.",
                    "en" => "Optimizing extraction processes, ensuring the quality of raw materials extracted from wells."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25982,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników operacji wiertniczych oraz raportowanie postępu pracy.",
                    "en" => "Documenting drilling operations results and reporting work progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_TARCZY_DRĄŻĄCEJ_TBM = [
            [
                "id" => 25983,
                "name" => json_encode([
                    "pl" => "Obsługa tarczy drążącej TBM, wykorzystywanej w budowie tuneli.",
                    "en" => "Operating the TBM (Tunnel Boring Machine) used in tunnel construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25984,
                "name" => json_encode([
                    "pl" => "Kontrola parametrów pracy maszyny TBM, monitorowanie procesu drążenia tunelu.",
                    "en" => "Controlling the operational parameters of the TBM, monitoring the tunnel boring process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25985,
                "name" => json_encode([
                    "pl" => "Wykonywanie drobnych napraw maszyny TBM oraz zarządzanie jej utrzymaniem.",
                    "en" => "Performing minor repairs on the TBM and managing its maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25986,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem w celu zapewnienia efektywnego przebiegu procesu drążenia tunelu.",
                    "en" => "Collaborating with the team to ensure the efficient progress of the tunnel boring process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25987,
                "name" => json_encode([
                    "pl" => "Zarządzanie bezpieczeństwem pracy przy użyciu tarczy TBM, przestrzeganie norm BHP.",
                    "en" => "Managing safety during TBM operation, ensuring compliance with health and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25988,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu drążenia oraz monitorowanie postępu pracy.",
                    "en" => "Documenting the results of the boring process and monitoring work progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ROBOTNIK_GÓRNICZY_DOŁOWY = [
            [
                "id" => 25989,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac górniczych w kopalniach podziemnych, takich jak wiercenie otworów, ładowanie węgla, usuwanie odpadów.",
                    "en" => "Performing mining work in underground mines, such as drilling holes, loading coal, and removing waste."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25990,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn górniczych, takich jak wiertnice, ładowarki, przenośniki taśmowe.",
                    "en" => "Operating mining machinery, such as drills, loaders, and conveyor belts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25991,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesu wydobycia surowców, zapewnienie przestrzegania zasad bezpieczeństwa w kopalni.",
                    "en" => "Supervising the extraction process, ensuring compliance with safety regulations in the mine."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25992,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem w celu efektywnego wykonania prac górniczych.",
                    "en" => "Collaborating with the team to efficiently perform mining tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25993,
                "name" => json_encode([
                    "pl" => "Utrzymanie i konserwacja maszyn górniczych oraz sprzętu wykorzystywanego w pracy podziemnej.",
                    "en" => "Maintaining and servicing mining machinery and equipment used in underground work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25994,
                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania norm BHP i procedur w czasie pracy w kopalni.",
                    "en" => "Ensuring compliance with health and safety standards and procedures while working in the mine."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_JEDNOSTKI_RATOWNICTWA_GÓRNICZEGO = [
            [
                "id" => 25995,
                "name" => json_encode([
                    "pl" => "Zarządzanie jednostką ratownictwa górniczego, organizowanie działań ratowniczych w razie wypadków w kopalni.",
                    "en" => "Managing the mining rescue unit, organizing rescue operations in case of accidents in the mine."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25996,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań ratunkowych w sytuacjach awaryjnych, takich jak wybuchy, pożary czy zalania.",
                    "en" => "Coordinating rescue operations in emergency situations such as explosions, fires, or flooding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25997,
                "name" => json_encode([
                    "pl" => "Szkolenie ratowników górniczych, zapewnienie gotowości jednostki ratowniczej.",
                    "en" => "Training mining rescuers, ensuring the readiness of the rescue unit."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25998,
                "name" => json_encode([
                    "pl" => "Nadzorowanie przygotowania i utrzymania sprzętu ratunkowego oraz odzieży ochronnej.",
                    "en" => "Supervising the preparation and maintenance of rescue equipment and protective clothing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25999,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi służbami ratowniczymi i administracją kopalni.",
                    "en" => "Coordinating with other rescue services and mine administration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26000,
                "name" => json_encode([
                    "pl" => "Opracowywanie procedur ratunkowych i organizowanie ćwiczeń ratunkowych.",
                    "en" => "Developing rescue procedures and organizing rescue drills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_GÓRNICTWA_ODKRYWKOWEGO = [
            [
                "id" => 26001,
                "name" => json_encode([
                    "pl" => "Zarządzanie i nadzorowanie procesów wydobycia surowców w kopalniach odkrywkowych.",
                    "en" => "Managing and supervising extraction processes in open-pit mines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26002,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wydobywanych surowców, monitorowanie parametrów procesu eksploatacji.",
                    "en" => "Controlling the quality of extracted raw materials, monitoring the parameters of the exploitation process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26003,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów wydobywczych w celu zwiększenia efektywności i zmniejszenia kosztów.",
                    "en" => "Optimizing extraction processes to increase efficiency and reduce costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26004,
                "name" => json_encode([
                    "pl" => "Nadzorowanie maszyn i urządzeń wykorzystywanych w kopalniach odkrywkowych, takich jak koparki, ładowarki.",
                    "en" => "Supervising machines and equipment used in open-pit mines, such as excavators and loaders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26005,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów bezpieczeństwa w kopalniach odkrywkowych.",
                    "en" => "Conducting safety audits in open-pit mines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26006,
                "name" => json_encode([
                    "pl" => "Nadzorowanie przestrzegania zasad BHP w czasie wykonywania prac wydobywczych.",
                    "en" => "Supervising compliance with health and safety regulations during extraction operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_GÓRNICTWA_OTWOROWEGO = [
            [
                "id" => 26007,
                "name" => json_encode([
                    "pl" => "Obsługa i nadzorowanie procesu wiercenia otworów w celu eksploatacji surowców.",
                    "en" => "Operating and supervising the drilling process for resource extraction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26008,
                "name" => json_encode([
                    "pl" => "Kontrola jakości otworów wiertniczych, monitorowanie parametrów pracy urządzeń wiertniczych.",
                    "en" => "Controlling the quality of boreholes, monitoring the operational parameters of drilling equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26009,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem inżynierów w celu optymalizacji procesu wiercenia.",
                    "en" => "Collaborating with a team of engineers to optimize the drilling process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26010,
                "name" => json_encode([
                    "pl" => "Nadzorowanie prac związanych z wierceniem otworów wiertniczych, kontrolowanie parametrów sprzętu.",
                    "en" => "Supervising drilling operations, controlling equipment parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26011,
                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania norm BHP podczas pracy z urządzeniami wiertniczymi.",
                    "en" => "Ensuring compliance with health and safety regulations when working with drilling equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26012,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów i dokumentacji związanej z procesem wiercenia.",
                    "en" => "Preparing reports and documentation related to the drilling process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_GÓRNICTWA_PODZIEMNEGO = [
            [
                "id" => 26013,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów wydobycia w kopalniach podziemnych, monitorowanie pracy maszyn górniczych.",
                    "en" => "Supervising extraction processes in underground mines, monitoring the operation of mining machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26014,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców wydobywanych w kopalniach podziemnych, zapewnienie efektywności wydobycia.",
                    "en" => "Controlling the quality of raw materials extracted from underground mines, ensuring extraction efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26015,
                "name" => json_encode([
                    "pl" => "Nadzorowanie przestrzegania przepisów BHP w czasie pracy pod ziemią.",
                    "en" => "Supervising compliance with health and safety regulations during underground operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26016,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w celu optymalizacji procesów wydobywczych.",
                    "en" => "Collaborating with other departments to optimize extraction processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26017,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów bezpieczeństwa w kopalniach podziemnych, kontrolowanie warunków pracy.",
                    "en" => "Conducting safety audits in underground mines, controlling working conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26018,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów eksploatacji w kopalniach podziemnych.",
                    "en" => "Developing exploitation plans in underground mines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_PRZERÓBKI_KOPALIN_STAŁYCH = [
            [
                "id" => 26019,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów przeróbki surowców mineralnych, takich jak węgiel, rudy czy kamienie.",
                    "en" => "Supervising the processing of mineral raw materials such as coal, ores, or stones."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26020,
                "name" => json_encode([
                    "pl" => "Kontrola jakości przetworzonych kopalin, monitorowanie parametrów pracy urządzeń przeróbczych.",
                    "en" => "Controlling the quality of processed minerals, monitoring the parameters of processing equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26021,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów przeróbki w celu zwiększenia efektywności i jakości surowców.",
                    "en" => "Optimizing processing operations to increase the efficiency and quality of raw materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26022,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w celu dostosowania procesów przeróbki do wymagań produkcji.",
                    "en" => "Collaborating with other departments to adjust processing operations to production requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26023,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów i kontroli jakości w procesach przeróbki kopalin.",
                    "en" => "Conducting audits and quality control in mineral processing operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26024,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesów przeróbki i przygotowywanie raportów.",
                    "en" => "Documenting processing operations and preparing reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_WIERTNIK = [
            [
                "id" => 26025,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn wiertniczych, wiercenie otworów w celu eksploatacji surowców.",
                    "en" => "Operating drilling machines, drilling wells for resource extraction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26026,
                "name" => json_encode([
                    "pl" => "Kontrola głębokości i jakości otworów wiertniczych, monitorowanie parametrów pracy urządzeń.",
                    "en" => "Controlling the depth and quality of drilled wells, monitoring machine operational parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26027,
                "name" => json_encode([
                    "pl" => "Utrzymanie i konserwacja maszyn wiertniczych, usuwanie awarii.",
                    "en" => "Maintaining and servicing drilling machines, troubleshooting malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26028,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów jakości wiertniczych i kontrolowanie wyników wiercenia.",
                    "en" => "Conducting drilling quality tests and controlling drilling results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26029,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem inżynierów w celu optymalizacji procesu wiercenia.",
                    "en" => "Collaborating with engineering teams to optimize the drilling process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26030,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników wiercenia oraz przygotowywanie raportów.",
                    "en" => "Documenting drilling results and preparing reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OSOBY_DOZORU_RUCHU_W_GÓRNICTWIE_ODKRYWKOWYM = [
            [
                "id" => 26031,
                "name" => json_encode([
                    "pl" => "Nadzorowanie ruchu maszyn i urządzeń w kopalniach odkrywkowych, kontrolowanie procesów wydobywczych.",
                    "en" => "Supervising the movement of machines and equipment in open-pit mines, controlling extraction processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26032,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników w kopalniach odkrywkowych, zapewnienie sprawności operacji.",
                    "en" => "Managing the team of workers in open-pit mines, ensuring the smooth operation of activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26033,
                "name" => json_encode([
                    "pl" => "Kontrola jakości i efektywności procesów wydobywczych, monitorowanie wyników pracy maszyn.",
                    "en" => "Controlling the quality and efficiency of extraction processes, monitoring the performance of machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26034,
                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania zasad BHP i norm środowiskowych podczas wydobycia.",
                    "en" => "Ensuring compliance with health and safety regulations and environmental standards during extraction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26035,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem technicznym i produkcyjnym w celu optymalizacji procesów wydobywczych.",
                    "en" => "Collaborating with technical and production teams to optimize extraction processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26036,
                "name" => json_encode([
                    "pl" => "Monitorowanie utrzymania i konserwacji maszyn oraz urządzeń wykorzystywanych w kopalni odkrywkowej.",
                    "en" => "Monitoring the maintenance and servicing of machines and equipment used in open-pit mining."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OSOBY_DOZORU_RUCHU_W_GÓRNICTWIE_OTWOROWYM = [
            [
                "id" => 26037,
                "name" => json_encode([
                    "pl" => "Nadzorowanie ruchu maszyn wiertniczych i urządzeń wiertniczych w kopalniach otworowych.",
                    "en" => "Supervising the movement of drilling machines and drilling equipment in borehole mining operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26038,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem wiercenia otworów, monitorowanie efektywności oraz jakości procesu.",
                    "en" => "Managing the drilling process, monitoring the efficiency and quality of operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26039,
                "name" => json_encode([
                    "pl" => "Kontrola parametrów wiertniczych, nadzór nad sprzętem i maszynami wiertniczymi.",
                    "en" => "Controlling drilling parameters, supervising drilling equipment and machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26040,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem inżynierów w celu optymalizacji procesu wiercenia.",
                    "en" => "Collaborating with engineering teams to optimize the drilling process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26041,
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności z przepisami BHP i ochrony środowiska w czasie procesu wiercenia.",
                    "en" => "Ensuring compliance with health and safety regulations and environmental protection during drilling operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26042,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów i dokumentacji dotyczącej postępu wiercenia i jego wyników.",
                    "en" => "Preparing reports and documentation on drilling progress and results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OSOBY_DOZORU_RUCHU_W_GÓRNICTWIE_PODZIEMNYM = [
            [
                "id" => 26043,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesu wydobycia i transportu surowców w kopalniach podziemnych.",
                    "en" => "Supervising the extraction and transport of materials in underground mines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26044,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami górniczymi, takimi jak przenośniki taśmowe, maszyny do ładowania i wyciągi.",
                    "en" => "Managing mining machinery, such as conveyor belts, loaders, and hoists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26045,
                "name" => json_encode([
                    "pl" => "Nadzorowanie jakości surowców wydobywanych w kopalniach podziemnych, kontrolowanie procesów wydobywczych.",
                    "en" => "Supervising the quality of raw materials extracted from underground mines, controlling extraction processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26046,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów wydobywczych w kopalniach podziemnych, aby zwiększyć efektywność i bezpieczeństwo.",
                    "en" => "Optimizing extraction processes in underground mines to increase efficiency and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26047,
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami w celu dostosowania metod pracy do warunków kopalni podziemnych.",
                    "en" => "Collaborating with engineers to adapt working methods to underground mining conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26048,
                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania zasad BHP i norm ochrony środowiska w czasie eksploatacji podziemnych złóż.",
                    "en" => "Ensuring compliance with health and safety regulations and environmental protection standards during underground mining operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTAŁE_OSOBY_DOZORU_RUCHU_W_GÓRNICTWIE = [
            [
                "id" => 26049,
                "name" => json_encode([
                    "pl" => "Nadzorowanie ruchu maszyn, urządzeń i pracowników w kopalniach w celu zapewnienia bezpieczeństwa i sprawności operacji.",
                    "en" => "Supervising the movement of machines, equipment, and workers in mines to ensure safety and operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26050,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań zespołów górniczych, monitorowanie postępu prac wydobywczych.",
                    "en" => "Coordinating the activities of mining teams, monitoring the progress of extraction operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26051,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów górniczych, identyfikowanie możliwości usprawnienia.",
                    "en" => "Optimizing mining processes, identifying opportunities for improvement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26052,
                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania przepisów BHP i ochrony środowiska w trakcie prac górniczych.",
                    "en" => "Ensuring compliance with health and safety regulations and environmental protection during mining operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26053,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w celu zapewnienia bezpieczeństwa i efektywności działań w kopalni.",
                    "en" => "Collaborating with other departments to ensure safety and efficiency of operations in the mine."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26054,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z działań górniczych oraz rekomendowanie działań korygujących w razie potrzeby.",
                    "en" => "Preparing reports on mining activities and recommending corrective actions when needed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MASZYNISTA_WENTYLATORÓW_W_KOPALNI = [
            [
                "id" => 26055,
                "name" => json_encode([
                    "pl" => "Obsługa i nadzorowanie wentylatorów w kopalniach, zapewnienie odpowiedniej wentylacji w tunelach i przestrzeniach roboczych.",
                    "en" => "Operating and supervising fans in mines, ensuring adequate ventilation in tunnels and working spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26056,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów pracy wentylatorów, kontrolowanie przepływu powietrza w kopalni.",
                    "en" => "Monitoring the operational parameters of fans, controlling the airflow in the mine."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26057,
                "name" => json_encode([
                    "pl" => "Utrzymanie wentylatorów w dobrym stanie technicznym, wykonywanie konserwacji i napraw.",
                    "en" => "Maintaining fans in good technical condition, performing maintenance and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26058,
                "name" => json_encode([
                    "pl" => "Zarządzanie systemem wentylacyjnym w kopalni, zapewnienie stałego dostępu do świeżego powietrza.",
                    "en" => "Managing the ventilation system in the mine, ensuring a continuous supply of fresh air."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26059,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem górniczym w celu poprawy jakości powietrza w kopalni.",
                    "en" => "Collaborating with the mining team to improve air quality in the mine."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26060,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów dotyczących wydajności wentylatorów oraz ich napraw.",
                    "en" => "Preparing reports on fan performance and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $STRZAŁOWY_GÓRNIK_STRZAŁOWY = [
            [
                "id" => 26061,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac strzałowych w kopalniach, w tym przygotowanie materiałów wybuchowych oraz przeprowadzanie wybuchów.",
                    "en" => "Performing blasting operations in mines, including preparing explosives and conducting explosions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26062,
                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów wybuchowych i ich przechowywania w odpowiednich warunkach.",
                    "en" => "Controlling the quality of explosives and their storage under proper conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26063,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa w trakcie prac strzałowych, monitorowanie efektywności wybuchów.",
                    "en" => "Ensuring safety during blasting operations, monitoring the effectiveness of explosions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26064,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem górniczym w celu precyzyjnego wykonania planowanych wybuchów.",
                    "en" => "Collaborating with the mining team to precisely execute planned explosions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26065,
                "name" => json_encode([
                    "pl" => "Kontrola jakości i zgodności wykonanych wybuchów z planami geologicznymi.",
                    "en" => "Controlling the quality and compliance of performed explosions with geological plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26066,
                "name" => json_encode([
                    "pl" => "Szkolenie innych pracowników w zakresie bezpieczeństwa i technologii wykonywania prac strzałowych.",
                    "en" => "Training other workers in safety and technology of blasting operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WYDAWCA_ŚRODKÓW_STRZAŁOWYCH = [
            [
                "id" => 26067,
                "name" => json_encode([
                    "pl" => "Wydawanie materiałów wybuchowych do prac strzałowych zgodnie z planem górniczym.",
                    "en" => "Issuing explosives for blasting operations according to the mining plan."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26068,
                "name" => json_encode([
                    "pl" => "Kontrola stanu technicznego i jakości materiałów wybuchowych przed ich wydaniem.",
                    "en" => "Controlling the technical condition and quality of explosives before issuing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26069,
                "name" => json_encode([
                    "pl" => "Zarządzanie magazynem materiałów wybuchowych, dbanie o ich prawidłowe przechowywanie.",
                    "en" => "Managing the explosive materials warehouse, ensuring proper storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26070,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem strzałowym w celu zapewnienia prawidłowego użycia materiałów wybuchowych.",
                    "en" => "Collaborating with the blasting team to ensure the correct use of explosives."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26071,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wydania materiałów wybuchowych i kontrolowanie ich zużycia.",
                    "en" => "Documenting the issuance of explosives and controlling their usage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26072,
                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania zasad BHP przy wydawaniu materiałów wybuchowych.",
                    "en" => "Ensuring compliance with health and safety regulations when issuing explosives."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INSTRUKTOR_STRZAŁOWY = [
            [
                "id" => 26073,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie bezpiecznego i efektywnego wykonywania prac strzałowych.",
                    "en" => "Training workers on the safe and effective execution of blasting operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26074,
                "name" => json_encode([
                    "pl" => "Opracowywanie procedur bezpieczeństwa oraz standardów wykonywania prac strzałowych.",
                    "en" => "Developing safety procedures and standards for conducting blasting operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26075,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ćwiczeń z zakresu bezpieczeństwa przy pracach strzałowych.",
                    "en" => "Conducting safety drills related to blasting operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26076,
                "name" => json_encode([
                    "pl" => "Monitorowanie wykonywania prac strzałowych przez pracowników i zapewnienie ich zgodności z procedurami.",
                    "en" => "Monitoring blasting operations performed by workers and ensuring compliance with procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26077,
                "name" => json_encode([
                    "pl" => "Szkolenie w zakresie obsługi i przechowywania materiałów wybuchowych.",
                    "en" => "Training on the handling and storage of explosives."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26078,
                "name" => json_encode([
                    "pl" => "Opracowywanie materiałów edukacyjnych i instrukcji dotyczących bezpiecznego wykonywania prac strzałowych.",
                    "en" => "Developing educational materials and instructions for safely performing blasting operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_STRZAŁOWI_I_POKREWNI = [
            [
                "id" => 26079,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac strzałowych w kopalniach i na innych stanowiskach pracy związanych z użyciem materiałów wybuchowych.",
                    "en" => "Performing blasting operations in mines and other work sites involving explosives."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26080,
                "name" => json_encode([
                    "pl" => "Przygotowywanie materiałów wybuchowych do użycia w procesie strzałowym, w tym ich załadunek i ustawienie.",
                    "en" => "Preparing explosives for use in blasting processes, including loading and setting them up."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26081,
                "name" => json_encode([
                    "pl" => "Nadzorowanie wykonania prac strzałowych i ocenianie efektywności wykonanych wybuchów.",
                    "en" => "Supervising the execution of blasting operations and evaluating the effectiveness of explosions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26082,
                "name" => json_encode([
                    "pl" => "Dbanie o bezpieczeństwo przy wykonywaniu prac strzałowych i przestrzeganie norm BHP.",
                    "en" => "Ensuring safety during blasting operations and compliance with health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26083,
                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów wybuchowych, ich składu i stanu przed użyciem.",
                    "en" => "Controlling the quality of explosives, their composition, and condition before use."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26084,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników wykonanych prac strzałowych oraz analizowanie ich efektywności.",
                    "en" => "Documenting the results of blasting operations and analyzing their effectiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GÓRNIK_EKSPLOATACJI_PODZIEMNEJ = [
            [
                "id" => 26085,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac górniczych w kopalniach podziemnych, w tym wydobycie surowców naturalnych, takich jak węgiel, rudy czy inne minerały.",
                    "en" => "Performing mining operations in underground mines, including the extraction of natural resources such as coal, ores, and other minerals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26086,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn górniczych i urządzeń do wydobycia surowców naturalnych w kopalniach podziemnych.",
                    "en" => "Operating mining machines and equipment for the extraction of natural resources in underground mines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26087,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wydobywanych surowców, monitorowanie postępu prac oraz bezpieczeństwa w kopalni.",
                    "en" => "Controlling the quality of extracted materials, monitoring work progress and safety in the mine."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26088,
                "name" => json_encode([
                    "pl" => "Nadzorowanie instalacji górniczych i urządzeń do transportu wydobywanych surowców.",
                    "en" => "Supervising mining installations and equipment for transporting extracted materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26089,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi zespołami w celu efektywnego wydobycia surowców i minimalizacji ryzyka.",
                    "en" => "Collaborating with other teams to efficiently extract resources and minimize risks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26090,
                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania zasad BHP w czasie pracy w kopalniach podziemnych.",
                    "en" => "Ensuring compliance with health and safety regulations while working in underground mines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GÓRNIK_ODKRYWKOWEJ_EKSPLOATACJI_ZŁÓŻ = [
            [
                "id" => 26091,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac górniczych w kopalniach odkrywkowych, takich jak ładowanie, transport i wydobycie surowców.",
                    "en" => "Performing mining operations in open-pit mines, such as loading, transporting, and extracting materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26092,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do wydobycia surowców w kopalniach odkrywkowych, takich jak koparki, ładowarki, przenośniki taśmowe.",
                    "en" => "Operating machines for extracting materials in open-pit mines, such as excavators, loaders, and conveyor belts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26093,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów pracy maszyn, zapewnienie efektywności procesu wydobycia.",
                    "en" => "Monitoring machine operation parameters, ensuring the efficiency of the extraction process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26094,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem transportu i składowania surowców wydobywanych w kopalni odkrywkowej.",
                    "en" => "Managing the transportation and storage of extracted materials in open-pit mining."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26095,
                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania norm bezpieczeństwa i ochrony środowiska przy wydobyciu surowców.",
                    "en" => "Ensuring compliance with safety and environmental protection standards during material extraction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26096,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem w celu minimalizacji ryzyka i poprawy efektywności wydobycia.",
                    "en" => "Collaborating with the team to minimize risks and improve extraction efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SYGNALISTA_SZYBOWY = [
            [
                "id" => 26097,
                "name" => json_encode([
                    "pl" => "Zarządzanie sygnalizacją w szybach kopalnianych, zapewnienie bezpiecznego ruchu w kopalni.",
                    "en" => "Managing signaling in mine shafts, ensuring safe movement within the mine."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26098,
                "name" => json_encode([
                    "pl" => "Obsługa sygnalizatorów i urządzeń do komunikacji w kopalni.",
                    "en" => "Operating signalers and communication devices in the mine."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26099,
                "name" => json_encode([
                    "pl" => "Kontrolowanie ruchu osób i sprzętu w szybach kopalnianych, koordynacja transportu.",
                    "en" => "Controlling the movement of personnel and equipment in mine shafts, coordinating transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26100,
                "name" => json_encode([
                    "pl" => "Utrzymywanie komunikacji między poszczególnymi sekcjami kopalni, zapewnianie synchronizacji działań.",
                    "en" => "Maintaining communication between different sections of the mine, ensuring synchronization of operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26101,
                "name" => json_encode([
                    "pl" => "Nadzorowanie systemu alarmowego w szybach i szybki reagowanie w przypadku zagrożeń.",
                    "en" => "Supervising the alarm system in shafts and responding quickly to threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26102,
                "name" => json_encode([
                    "pl" => "Dokumentowanie działań sygnalizacyjnych i zapewnienie zgodności z procedurami BHP.",
                    "en" => "Documenting signaling operations and ensuring compliance with health and safety procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_POZYSKIWANIA_TORFU = [
            [
                "id" => 26103,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do pozyskiwania torfu, takich jak koparki torfowe i maszyny do transportu torfu.",
                    "en" => "Operating machines for peat extraction, such as peat excavators and transport machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26104,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów pracy maszyn, zapewnienie efektywności procesu wydobycia torfu.",
                    "en" => "Monitoring the operational parameters of machines, ensuring the efficiency of the peat extraction process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26105,
                "name" => json_encode([
                    "pl" => "Zarządzanie transportem torfu i jego składowaniem, zapewnienie ciągłości produkcji.",
                    "en" => "Managing the transport and storage of peat, ensuring continuous production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26106,
                "name" => json_encode([
                    "pl" => "Utrzymywanie maszyn w dobrym stanie technicznym, wykonywanie drobnych napraw.",
                    "en" => "Maintaining machines in good technical condition, performing minor repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26107,
                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania zasad BHP podczas pracy z maszynami do pozyskiwania torfu.",
                    "en" => "Ensuring compliance with health and safety regulations when operating machines for peat extraction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26108,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami w celu optymalizacji procesu pozyskiwania torfu.",
                    "en" => "Collaborating with other workers to optimize the peat extraction process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_URABIAJĄCYCH_I_ŁADUJĄCYCH = [
            [
                "id" => 26109,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn urabiających i ładujących, takich jak młyny, ładowarki i przenośniki taśmowe.",
                    "en" => "Operating machinery for excavation and loading, such as mills, loaders, and conveyor belts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26110,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu urabiania i ładowania surowców, zapewnienie efektywności i jakości pracy maszyn.",
                    "en" => "Monitoring the excavation and loading process, ensuring the efficiency and quality of machine operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26111,
                "name" => json_encode([
                    "pl" => "Zarządzanie transportem i załadunkiem surowców w kopalniach lub na placu składowym.",
                    "en" => "Managing transportation and loading of materials in mines or at storage yards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26112,
                "name" => json_encode([
                    "pl" => "Utrzymywanie maszyn w dobrym stanie technicznym, wykonywanie drobnych napraw.",
                    "en" => "Maintaining machinery in good technical condition, performing minor repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26113,
                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania zasad BHP podczas pracy z maszynami urabiającymi i ładującymi.",
                    "en" => "Ensuring compliance with health and safety regulations when operating excavation and loading machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26114,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami w celu poprawy efektywności procesu urabiania i ładowania.",
                    "en" => "Collaborating with other workers to improve the efficiency of excavation and loading operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WYDOBYWCZA_KRUSZYWA_I_GLINY = [
            [
                "id" => 26115,
                "name" => json_encode([
                    "pl" => "Wydobywanie kruszywa, gliny oraz innych materiałów w kopalniach odkrywkowych.",
                    "en" => "Extracting gravel, clay, and other materials in open-pit mines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26116,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn wydobywczych, takich jak koparki, ładowarki i młyny.",
                    "en" => "Operating extraction machines such as excavators, loaders, and crushers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26117,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesu wydobycia surowców, zapewnienie jakości wydobywanego materiału.",
                    "en" => "Supervising the extraction process, ensuring the quality of the extracted material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26118,
                "name" => json_encode([
                    "pl" => "Zarządzanie transportem materiałów wydobywanych, ich składowaniem i przygotowaniem do sprzedaży.",
                    "en" => "Managing the transportation of extracted materials, their storage, and preparation for sale."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26119,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów wydobywczych w celu zwiększenia efektywności i zmniejszenia kosztów.",
                    "en" => "Optimizing extraction processes to increase efficiency and reduce costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26120,
                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania zasad BHP oraz norm ochrony środowiska przy wydobyciu kruszywa i gliny.",
                    "en" => "Ensuring compliance with health and safety regulations and environmental standards in the extraction of gravel and clay."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_GÓRNICY_PODZIEMNEJ_I_ODKRYWKOWEJ_EKSPLOATACJI_ZŁÓŻ = [
            [
                "id" => 26121,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac górniczych w kopalniach podziemnych i odkrywkowych, związanych z wydobyciem surowców mineralnych.",
                    "en" => "Performing mining operations in underground and open-pit mines related to the extraction of mineral resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26122,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń i maszyn górniczych, takich jak przenośniki taśmowe, koparki, wiertnice.",
                    "en" => "Operating mining equipment and machines such as conveyor belts, excavators, and drills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26123,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesu wydobycia, transportu i składowania surowców.",
                    "en" => "Supervising the extraction, transportation, and storage of materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26124,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców wydobywanych w kopalniach podziemnych i odkrywkowych.",
                    "en" => "Controlling the quality of materials extracted from underground and open-pit mines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26125,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów wydobywczych w celu poprawy efektywności pracy.",
                    "en" => "Optimizing extraction processes to improve work efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26126,
                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania zasad BHP oraz przepisów ochrony środowiska.",
                    "en" => "Ensuring compliance with health and safety regulations and environmental protection standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GÓRNIK_PODZIEMNEJ_EKSPLOATACJI_KOPALIN_INNYCH_NIŻ_WĘGIEL_KAMIENNY = [
            [
                "id" => 26127,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac górniczych w kopalniach podziemnych, związanych z wydobyciem kopalin innych niż węgiel kamienny.",
                    "en" => "Performing mining operations in underground mines related to the extraction of minerals other than coal."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26128,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wydobywanych surowców i monitorowanie postępu pracy maszyn górniczych.",
                    "en" => "Controlling the quality of extracted materials and monitoring the progress of mining machinery operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26129,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami transportu i składowania wydobytych kopalin.",
                    "en" => "Managing the transportation and storage of extracted minerals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26130,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów wydobywczych w kopalniach podziemnych w celu zwiększenia efektywności.",
                    "en" => "Optimizing underground mining processes to increase efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26131,
                "name" => json_encode([
                    "pl" => "Nadzorowanie prac związanych z transportem i obróbką kopalin w kopalniach podziemnych.",
                    "en" => "Supervising operations related to the transportation and processing of minerals in underground mines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26132,
                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania norm BHP oraz zasad ochrony środowiska podczas eksploatacji kopalin.",
                    "en" => "Ensuring compliance with health and safety standards and environmental protection principles during mineral extraction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_SYSTEMÓW_ODWADNIAJĄCEJ = [
            [
                "id" => 26133,
                "name" => json_encode([
                    "pl" => "Obsługa systemów odwadniających, w tym pomp, systemów rur i innych urządzeń odwadniających.",
                    "en" => "Operating drainage systems, including pumps, pipes, and other dewatering equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26134,
                "name" => json_encode([
                    "pl" => "Monitorowanie wydajności systemów odwadniających i kontrolowanie parametrów ich pracy.",
                    "en" => "Monitoring the performance of dewatering systems and controlling the parameters of their operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26135,
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją i naprawą urządzeń odwadniających w kopalni.",
                    "en" => "Managing maintenance and repair of dewatering equipment in the mine."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26136,
                "name" => json_encode([
                    "pl" => "Zapewnienie odpowiedniego poziomu odwadniania w kopalni, aby zminimalizować ryzyko zalania.",
                    "en" => "Ensuring proper dewatering levels in the mine to minimize the risk of flooding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26137,
                "name" => json_encode([
                    "pl" => "Kontrola stanu urządzeń odwadniających i monitorowanie ich efektywności.",
                    "en" => "Controlling the condition of dewatering equipment and monitoring its efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26138,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w celu utrzymania odpowiedniego poziomu wody w kopalni.",
                    "en" => "Collaborating with other departments to maintain the proper water level in the mine."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_PODZIEMNEJ_EKSPLOATACJI_KOPALIN_INNYCH_NIŻ_WĘGIEL_KAMIENNY = [
            [
                "id" => 26139,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesu wydobycia i transportu kopalin innych niż węgiel kamienny w kopalniach podziemnych.",
                    "en" => "Supervising the extraction and transportation of minerals other than coal in underground mines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26140,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wydobywanych surowców, monitorowanie wydajności procesu.",
                    "en" => "Controlling the quality of extracted materials, monitoring the efficiency of the process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26141,
                "name" => json_encode([
                    "pl" => "Zarządzanie pracami transportowymi w kopalniach podziemnych.",
                    "en" => "Managing transportation operations in underground mines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26142,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami obróbki kopalin, w tym ich składowaniem i przygotowaniem do transportu.",
                    "en" => "Managing processing operations for minerals, including storage and preparation for transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26143,
                "name" => json_encode([
                    "pl" => "Nadzorowanie przestrzegania zasad BHP i norm ochrony środowiska.",
                    "en" => "Supervising compliance with health and safety regulations and environmental protection standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26144,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w celu optymalizacji procesów wydobywczych.",
                    "en" => "Collaborating with other departments to optimize extraction processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_CERAMICZNEJ = [
            [
                "id" => 26145,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesu produkcji wyrobów ceramicznych, w tym dobór surowców i ustalanie parametrów technologicznych.",
                    "en" => "Supervising the production process of ceramic products, including raw material selection and determining technological parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26146,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców i gotowych wyrobów ceramicznych.",
                    "en" => "Controlling the quality of raw materials and finished ceramic products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26147,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji wyrobów ceramicznych w celu zwiększenia wydajności i jakości.",
                    "en" => "Optimizing ceramic product production processes to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26148,
                "name" => json_encode([
                    "pl" => "Zarządzanie urządzeniami i maszynami wykorzystywanymi do produkcji ceramiki.",
                    "en" => "Managing equipment and machinery used in the production of ceramics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26149,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w celu zapewnienia ciągłości produkcji i zgodności z wymaganiami technologicznymi.",
                    "en" => "Collaborating with other departments to ensure production continuity and compliance with technological requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26150,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji technologicznej, raportowanie wyników produkcji.",
                    "en" => "Preparing technological documentation, reporting production results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_AUTOMATÓW_DO_FORMOWANIA_WYROBÓW_SZKLANYCH = [
            [
                "id" => 26151,
                "name" => json_encode([
                    "pl" => "Obsługa automatów do formowania wyrobów szklanych, takich jak butelki, słoiki czy naczynia.",
                    "en" => "Operating machines for forming glass products such as bottles, jars, and containers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26152,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów szklanych, monitorowanie procesu formowania.",
                    "en" => "Controlling the quality of glass products, monitoring the forming process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26153,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do formowania, zapewnienie ich odpowiedniej wydajności.",
                    "en" => "Managing forming machines, ensuring their proper performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26154,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem produkcyjnym w celu optymalizacji procesu formowania wyrobów szklanych.",
                    "en" => "Collaborating with the production team to optimize the glass forming process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26155,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji i napraw maszyn formujących w razie potrzeby.",
                    "en" => "Performing maintenance and repairs on forming machines when necessary."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26156,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji oraz raportowanie o efektywności maszyn.",
                    "en" => "Documenting production results and reporting on machine efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_DO_FORMOWANIA_SZKŁA_PŁASKIEGO = [
            [
                "id" => 26157,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do formowania szkła płaskiego, takich jak szyby, tafle szklane i płyty.",
                    "en" => "Operating machines for forming flat glass, such as windows, glass sheets, and panels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26158,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu formowania szkła płaskiego, kontrolowanie parametrów jakościowych.",
                    "en" => "Monitoring the flat glass forming process, controlling quality parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26159,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do produkcji szkła płaskiego, zapewnienie ich wydajności.",
                    "en" => "Managing machines for flat glass production, ensuring their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26160,
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności produkcji szkła płaskiego z wymaganiami technologicznymi.",
                    "en" => "Ensuring the production of flat glass meets technological requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26161,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem w celu usprawnienia procesu produkcji szkła płaskiego.",
                    "en" => "Collaborating with the team to improve the flat glass production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26162,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn oraz ich naprawy, zapewniając nieprzerwaną produkcję.",
                    "en" => "Performing maintenance and repairs on machines, ensuring uninterrupted production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_ODPRĘŻAREK_WYROBÓW_SZKLANYCH = [
            [
                "id" => 26163,
                "name" => json_encode([
                    "pl" => "Obsługa odprężarek wyrobów szklanych, zapewniając odpowiednie procesy odprężania.",
                    "en" => "Operating glass annealing machines, ensuring proper annealing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26164,
                "name" => json_encode([
                    "pl" => "Kontrola parametrów procesu odprężania, takich jak temperatura i czas obróbki.",
                    "en" => "Controlling annealing process parameters, such as temperature and processing time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26165,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do odprężania, zapewniając ich wydajność i niezawodność.",
                    "en" => "Managing annealing machines, ensuring their efficiency and reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26166,
                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji w celu poprawy jakości wyrobów szklanych.",
                    "en" => "Collaborating with the production department to improve the quality of glass products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26167,
                "name" => json_encode([
                    "pl" => "Wykonywanie drobnych napraw urządzeń odprężających.",
                    "en" => "Performing minor repairs on annealing equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26168,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu odprężania i przygotowywanie raportów.",
                    "en" => "Documenting annealing process results and preparing reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_CHEMICZNEGO_POLEROWANIA_SZKŁA = [
            [
                "id" => 26169,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do chemicznego polerowania szkła, zapewniając wysoką jakość powierzchni wyrobów szklanych.",
                    "en" => "Operating chemical glass polishing equipment, ensuring high-quality glass product surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26170,
                "name" => json_encode([
                    "pl" => "Kontrola procesu chemicznego polerowania szkła, monitorowanie parametrów takich jak czas i temperatura.",
                    "en" => "Controlling the chemical glass polishing process, monitoring parameters such as time and temperature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26171,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu polerowania w celu uzyskania jak najlepszych efektów wykończeniowych.",
                    "en" => "Optimizing the polishing process to achieve the best finishing results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26172,
                "name" => json_encode([
                    "pl" => "Zarządzanie urządzeniami do polerowania, zapewniając ich sprawność techniczną.",
                    "en" => "Managing polishing equipment, ensuring their technical efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26173,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji i napraw urządzeń do chemicznego polerowania szkła.",
                    "en" => "Performing maintenance and repairs on chemical glass polishing equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26174,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu polerowania i przygotowywanie raportów dotyczących jakości wyrobów.",
                    "en" => "Documenting the polishing process results and preparing reports on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_FORMOWANIA_I_PRZETWÓRSTWA_WŁÓKNA_SZKLANEGO = [
            [
                "id" => 26175,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do formowania i przetwórstwa włókna szklanego, w tym produkcja wyrobów takich jak tkaniny, maty, włókna szklane.",
                    "en" => "Operating machines for forming and processing glass fiber, including producing items such as fabrics, mats, and glass fibers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26176,
                "name" => json_encode([
                    "pl" => "Kontrola jakości włókna szklanego, monitorowanie procesu formowania i przetwarzania.",
                    "en" => "Controlling the quality of glass fiber, monitoring the forming and processing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26177,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do formowania włókna szklanego, zapewnienie ich wydajności i niezawodności.",
                    "en" => "Managing machines for glass fiber forming, ensuring their performance and reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26178,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem produkcyjnym w celu optymalizacji procesu formowania i przetwórstwa.",
                    "en" => "Collaborating with the production team to optimize the forming and processing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26179,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn oraz drobnych napraw urządzeń do formowania włókna szklanego.",
                    "en" => "Performing maintenance and minor repairs on glass fiber forming machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26180,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji oraz raportowanie o efektywności maszyn i jakości włókna szklanego.",
                    "en" => "Documenting production results and reporting on machine efficiency and glass fiber quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_FORMOWANIA_WYROBÓW_CERAMICZNYCH = [
            [
                "id" => 26181,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do formowania wyrobów ceramicznych, takich jak talerze, filiżanki, ceramika budowlana.",
                    "en" => "Operating machines for forming ceramic products, such as plates, cups, and building ceramics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26182,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów ceramicznych, monitorowanie procesu formowania.",
                    "en" => "Controlling the quality of ceramic products, monitoring the forming process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26183,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do formowania ceramiki, zapewnienie ich sprawności operacyjnej.",
                    "en" => "Managing ceramic forming machines, ensuring their operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26184,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji wyrobów ceramicznych w celu poprawy efektywności.",
                    "en" => "Optimizing the production processes of ceramic products to improve efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26185,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do formowania wyrobów ceramicznych.",
                    "en" => "Performing maintenance on machines used for forming ceramic products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26186,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesów produkcji ceramiki oraz raportowanie wyników produkcji.",
                    "en" => "Documenting ceramic production processes and reporting production results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_FORMOWANIA_WYROBÓW_OGNIOTRWAŁYCH = [
            [
                "id" => 26187,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do formowania wyrobów ogniotrwałych, takich jak cegły ogniotrwałe, płyty ceramiczne, wermikulit.",
                    "en" => "Operating machines for forming refractory products such as firebricks, ceramic tiles, and vermiculite."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26188,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów ogniotrwałych, monitorowanie parametrów procesu formowania.",
                    "en" => "Controlling the quality of refractory products, monitoring the forming process parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26189,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do produkcji wyrobów ogniotrwałych, zapewnienie wydajności maszyn.",
                    "en" => "Managing machines for the production of refractory products, ensuring machine efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26190,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji wyrobów ogniotrwałych w celu zwiększenia efektywności i zmniejszenia odpadów.",
                    "en" => "Optimizing the production processes of refractory products to increase efficiency and reduce waste."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26191,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami produkcji w celu poprawy jakości wyrobów ogniotrwałych.",
                    "en" => "Collaborating with other production departments to improve the quality of refractory products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26192,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do formowania wyrobów ogniotrwałych.",
                    "en" => "Performing maintenance on machines for forming refractory products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_FORMOWANIA_WYROBÓW_SYLIKATOWYCH = [
            [
                "id" => 26193,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do formowania wyrobów sylikatowych, takich jak cegły, płytki, płyty i inne wyroby budowlane.",
                    "en" => "Operating machines for forming silicate products such as bricks, tiles, slabs, and other construction materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26194,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów sylikatowych, monitorowanie parametrów formowania.",
                    "en" => "Controlling the quality of silicate products, monitoring the forming process parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26195,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do produkcji wyrobów sylikatowych, zapewnienie ich prawidłowego działania.",
                    "en" => "Managing machines for the production of silicate products, ensuring their proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26196,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji wyrobów sylikatowych w celu poprawy jakości i efektywności.",
                    "en" => "Optimizing silicate product production processes to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26197,
                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji w celu poprawy jakości wyrobów sylikatowych.",
                    "en" => "Collaborating with the production department to improve the quality of silicate products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26198,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do formowania wyrobów sylikatowych.",
                    "en" => "Performing maintenance on machines for forming silicate products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_GIĘCIA_SZKŁA = [
            [
                "id" => 26199,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do gięcia szkła, takich jak maszyny do cięcia, gięcia i formowania szkła.",
                    "en" => "Operating machines for bending glass, such as cutting, bending, and shaping machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26200,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu gięcia szkła, kontrolowanie temperatury i jakości procesu.",
                    "en" => "Monitoring the glass bending process, controlling temperature and process quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26201,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do gięcia szkła, zapewnienie ich sprawności operacyjnej.",
                    "en" => "Managing glass bending machines, ensuring their operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26202,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów gięcia szkła, aby zwiększyć wydajność i jakość produktu.",
                    "en" => "Optimizing the glass bending process to increase efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26203,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji maszyn do gięcia szkła, usuwanie usterek.",
                    "en" => "Performing maintenance on glass bending machines, troubleshooting issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26204,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji szkła giętego oraz raportowanie o jakości produkcji.",
                    "en" => "Documenting the production results of bent glass and reporting on production quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_HARTOWANIA_SZKŁA = [
            [
                "id" => 26205,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do hartowania szkła, w tym urządzeń do szybkiego chłodzenia szkła w celu zwiększenia jego wytrzymałości.",
                    "en" => "Operating glass tempering machines, including equipment for rapid cooling of glass to increase its strength."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26206,
                "name" => json_encode([
                    "pl" => "Kontrola parametrów procesu hartowania, takich jak temperatura i czas chłodzenia szkła.",
                    "en" => "Controlling the parameters of the tempering process, such as temperature and cooling time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26207,
                "name" => json_encode([
                    "pl" => "Zarządzanie urządzeniami do hartowania szkła, zapewniając ich prawidłowe działanie i wydajność.",
                    "en" => "Managing glass tempering equipment, ensuring their proper functioning and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26208,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu hartowania szkła w celu zwiększenia efektywności i jakości produktu.",
                    "en" => "Optimizing the glass tempering process to improve efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26209,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do hartowania szkła, usuwanie usterek i zapewnienie ich sprawności operacyjnej.",
                    "en" => "Performing maintenance on glass tempering machines, troubleshooting issues, and ensuring their operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26210,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu hartowania szkła oraz raportowanie o jakości produkcji.",
                    "en" => "Documenting the glass tempering process results and reporting on production quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_MATOWANIA_WYROBÓW_SZKLANYCH = [
            [
                "id" => 26211,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do matowania wyrobów szklanych, takich jak szkło matowe i dekoracyjne.",
                    "en" => "Operating machines for frosting glass products, such as frosted and decorative glass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26212,
                "name" => json_encode([
                    "pl" => "Kontrola jakości procesu matowania szkła, monitorowanie parametrów maszyny.",
                    "en" => "Controlling the quality of the glass frosting process, monitoring machine parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26213,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do matowania szkła, zapewniając ich wydajność.",
                    "en" => "Managing glass frosting machines, ensuring their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26214,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu matowania szkła, aby zwiększyć jakość wyrobów szklanych.",
                    "en" => "Optimizing the glass frosting process to enhance the quality of glass products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26215,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji maszyn do matowania szkła i ich naprawy.",
                    "en" => "Performing maintenance on glass frosting machines and repairing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26216,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu matowania i raportowanie jakości wyrobów.",
                    "en" => "Documenting the frosting process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_OBRÓBKI_PŁOMIENIOWEJ_SZKŁA = [
            [
                "id" => 26217,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do obróbki płomieniowej szkła, takich jak palniki i piecyki do szlifowania szkła.",
                    "en" => "Operating flame treatment machines for glass, such as burners and kilns for glass polishing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26218,
                "name" => json_encode([
                    "pl" => "Kontrola jakości procesu obróbki płomieniowej szkła, monitorowanie temperatury i czasu obróbki.",
                    "en" => "Controlling the quality of the flame treatment process for glass, monitoring temperature and processing time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26219,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do obróbki płomieniowej szkła, zapewnienie ich sprawności.",
                    "en" => "Managing flame treatment machines for glass, ensuring their operational condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26220,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu obróbki płomieniowej w celu poprawy jakości wyrobów szklanych.",
                    "en" => "Optimizing the flame treatment process to improve the quality of glass products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26221,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji urządzeń do obróbki płomieniowej szkła.",
                    "en" => "Performing maintenance on flame treatment equipment for glass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26222,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników obróbki płomieniowej oraz raportowanie jakości obrobionego szkła.",
                    "en" => "Documenting flame treatment results and reporting on the quality of processed glass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MATERIAŁÓW_ŚCIERNYCH = [
            [
                "id" => 26223,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji materiałów ściernych, takich jak ściernice, papiery ścierne i tarcze.",
                    "en" => "Operating equipment for the production of abrasive materials such as grinding wheels, sandpapers, and discs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26224,
                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów ściernych, monitorowanie procesu produkcji.",
                    "en" => "Controlling the quality of abrasive materials, monitoring the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26225,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do produkcji materiałów ściernych, zapewniając ich sprawność operacyjną.",
                    "en" => "Managing machines for abrasive material production, ensuring their operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26226,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji materiałów ściernych w celu poprawy wydajności i jakości.",
                    "en" => "Optimizing the production processes of abrasive materials to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26227,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji maszyn do produkcji materiałów ściernych.",
                    "en" => "Performing maintenance on machines used for abrasive material production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26228,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji materiałów ściernych i raportowanie o jakości wyrobów.",
                    "en" => "Documenting the production results of abrasive materials and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];

        DB::table('detail_projects')->insert(array_merge(
            $KIEROWNIK_PRODUKCJI_W_PRZEDSIĘBIORSTWIE_ROLNIM,
            $KIEROWNIK_PRZEDSIĘBIORSTWA_USŁUGOWEGO_ZWIĄZANEGO_Z_LEŚNICTWEM,
            $KIEROWNIK_W_GOSPODARCE_LEŚNEJ,
            $KIEROWNIK_PRODUKCJI_W_PRZEDSIĘBIORSTWIE_OGRODNICZYM,
            $KIEROWNIK_PRODUKCJI_W_PRZEDSIĘBIORSTWIE_HODOWLANYM,
            $POZOSTALI_KIEROWNICY_PRODUKCJI_W_ROLNICTWIE_I_LEŚNICTWIE,
            $KIEROWNIK_PRODUKCJI_W_ZAKŁADACH_AKWAKULTURY,
            $KIEROWNIK_PRZEDSIĘBIORSTWA_W_RYBOŁÓWSTWIE,
            $POZOSTALI_KIEROWNICY_PRODUKCJI_W_ZAKŁADACH_AKWAKULTURY_I_RYBOŁÓWSTWIE,
            $KIEROWNIK_DO_SPRAW_KONTROLI_JAKOŚCI,
            $KIEROWNIK_PRODUKCJI_W_PRZEMYŚLE,
            $KIEROWNIK_MAŁEGO_PRZEDSIĘBIORSTWA_W_PRZEMYŚLE_PRZETWÓRCZYM,
            $KIEROWNIK_UTRZYMANIA_RUCHU,
            $POZOSTALI_KIEROWNICY_DO_SPRAW_PRODUKCJI_PRZEMYSŁOWEJ,
            $KIEROWNIK_RUCHU_ZAKŁADU_GÓRNICZEGO_LUB_ZAKŁADU,
            $POZOSTALI_KIEROWNICY_W_GÓRNICTWIE,
            $POZOSTALI_KIEROWNICY_DO_SPRAW_BUDOWNICTWA,
            $INŻYNIER_NORMOWANIA_PRACY,
            $INŻYNIER_ORGANIZACJI_I_PLANOWANIA_PRODUKCJI,
            $INŻYNIER_UTRZYMANIA_RUCHU,
            $POZOSTALI_INŻYNIEROWIE_DO_SPRAW_PRZEMYSŁU_I_PRODUKCJI,
            $TECHNIK_ORGANIZACJI_PRODUKCJI,
            $INŻYNIER_GÓRNIK_GÓRNICTWO_OTWOROWE,
            $INŻYNIER_GÓRNIK_GÓRNICTWO_ODKRYWKOWE,
            $INŻYNIER_GÓRNIK_GÓRNICTWO_PODZIEMNE,
            $INŻYNIER_GÓRNIK_WIERTNICTWO,
            $INŻYNIER_HUTNIK,
            $INŻYNIER_ODLEWNIK,
            $INŻYNIER_GEOFIZYK_GEOFIZYKA_GÓRNICZA,
            $INŻYNIER_GELOG_GEOLOGIA_GÓRNICZA_I_POSZUKIWACZA,
            $INŻYNIER_GELOG_HYDROLOGIA_GÓRNICZA,
            $POZOSTALI_INŻYNIEROWIE_GÓRNICTWA_I_METALURGII,
            $INŻYNIER_TECHNOLOGII_CERAMIKI,
            $INŻYNIER_TECHNOLOGII_DREWNA,
            $INŻYNIER_TECHNOLOGII_PRZETWÓRSTWA_SKÓRY,
            $INŻYNIER_TECHNOLOGII_SZKŁA,
            $INŻYNIER_WŁÓKIENNIK,
            $NANOTECHNOLOG_INŻYNIER_NANOSTRUKTUR,
            $SPECJALISTA_DO_SPRAW_EROGOMII_I_PROJEKTOWANIA_FORM_UŻYTKOWYCH,
            $SPECJALISTA_DO_SPRAW_PAKOWANIA_I_OPAKOWAŃ,
            $INŻYNIER_PROCESU_MALOWANIA,
            $INŻYNIER_INŻYNIERII_MATERIAŁOWEJ,
            $SPECJALISTA_DO_SPRAW_ORGANIZACJI_I_ROZWOJU_PRZEMYSŁU,
            $TECHNIK_UTRZYMANIA_RUCHU,
            $TECHNIK_PAPIERNICTWA,
            $TECHNIK_PRZETWÓRSTWA_TWORZYW_SZTUCZNYCH,
            $TECHNIK_NORMOWANIA_PRACY,
            $TECHNIK_TECHNOLOGII_SZKŁA,
            $TECHNIK_WŁÓKIENNICZYCH_WYROBÓW_DEKORACYJNYCH,
            $TECHNIK_WŁÓKIENNIK,
            $MISTRZ_PRODUKCJI_W_PRZEMYŚLE_CHEMICZNYM,
            $MISTRZ_PRODUKCJI_W_PRZEMYŚLE_DRZEWNYM,
            $MISTRZ_PRODUKCJI_W_PRZEMYŚLE_ELEKTROMASZYNOWYM,
            $MISTRZ_PRODUKCJI_W_PRZEMYŚLE_ELEKTRONICZNYM,
            $MISTRZ_PRODUKCJI_W_PRZEMYŚLE_FARMACEUTYCZNYM,
            $MISTRZ_PRODUKCJI_W_PRZEMYŚLE_METALURGICZNYM,
            $MISTRZ_PRODUKCJI_W_PRZEMYŚLE_SAMOCHODOWYM,
            $MISTRZ_PRODUKCJI_W_PRZEMYŚLE_SPOŻYWCZYM,
            $MISTRZ_PRODUKCJI_W_PRZEMYŚLE_WŁÓKIENNICZYM,
            $MISTRZ_PRODUKCJI_W_POLIGRAFII,
            $POZOSTALI_MISTRZOWIE_PRODUKCJI_W_PRZEMYŚLE_PRZETWÓRCZYM,
            $MISTRZ_PRODUKCJI_W_PRZEMYŚLE_ODZIEŻOWYM,
            $TECHNIK_BUDOWY_FORTEPIANÓW_I_PIANIN,
            $INŻYNIER_INŻYNIERII_MATERIAŁÓW_SYNTETYCZNYCH,
            $INŻYNIER_PAPIERNICTWA,
            $TECHNIK_BUDOWY_I_STROJENIA_FORTEPIANÓW_I_PIANIN,
            $AUDYTOR_ŚRODOWISKOWY,
            $EKOLOG,
            $SPECJALISTA_OCHRONY_ŚRODOWISKA,
            $POZOSTALI_SPECJALIŚCI_DO_SPRAW_OCHRONY_ŚRODOWISKA,
            $OPERATOR_APARATURY_DO_PRZETWARZANIA_ODPADÓW_NIEBEZPIECZNYCH,
            $OPERATOR_SPALARNI_ODPADÓW_KOMUNALNYCH,
            $OPERATOR_URZĄDZEŃ_KLIMATYZACYJNYCH_I_ODPYLAJĄCYCH,
            $OPERATOR_URZĄDZEŃ_OCZYSZCZANIA_ŚCIEKÓW,
            $OPERATOR_URZĄDZEŃ_UZDATNIANIA_I_DEMINERALIZACJI_WODY,
            $PRACOWNIK_OCZYSZCZANIA_TERENU_Z_MATERIAŁÓW_WYBUCHOWYCH_I_NIEBEZPIECZNYCH,
            $POZOSTALI_OPERATORZY_URZĄDZEŃ_DO_SPALANIA_ODPADÓW_UZDATNIANIA_WODY_I_POKREWNI,
            $EDUKATOR_EKOLOGICZNY,
            $STRAŻNIK_OCHRONY_PRZYRODY_ŚRODOWISKA,
            $TECHNIK_ANALIZY_I_MONITORINGU_ŚRODOWISKA,
            $TECHNIK_OCHRONY_ŚRODOWISKA,
            $TECHNIK_GOSPODARKI_ODPADAMI,
            $ANALITYK_DS_ZRÓWNOWAŻONEGO_ROZWOJU,
            $SPECJALISTA_DS_ZRÓWNOWAŻONEGO_ROZWOJU,
            $RZECZOZNAWCA_DO_SPRAW_ZABEZPIECZEŃ_PRZECIWPOŻAROWYCH,
            $INSPEKTOR_DOZORU_JĄDROWEGO,
            $SPECJALISTA_PROMOCJI_ZDROWIA_I_EDUKACJI_ZDROWOTNEJ,
            $SPECJALISTA_BEZPIECZEŃSTWA_I_HIGIENY_PRACY,
            $SPECJALISTA_ZDROWIA_PUBLICZNEGO,
            $SPECJALISTA_ZDROWIA_ŚRODOWISKOWEGO,
            $RZECZOZNAWCA_DO_SPRAW_BEZPIECZEŃSTWA_I_HIGIENY_PRACY,
            $POZOSTALI_SPECJALIŚCI_DO_SPRAW_HIGIENY_BEZPIECZEŃSTWA_PRACY_I_OCHRONY_ŚRODOWISKA,
            $SPECJALISTA_ZARZĄDZANIA_KRYZYSOWEGO,
            $INSPEKTOR_OCHRONY_PRZECIWPOŻAROWEJ,
            $INSPEKTOR_BEZPIECZEŃSTWA_I_HIGIENY_PRACY,
            $INSPEKTOR_OCHRONY_RADIOLOGICZNEJ,
            $INSTRUKTOR_HIGIENY,
            $TECHNIK_BEZPIECZEŃSTWA_I_HIGIENY_PRACY_S,
            $TECHNIK_DOZYMETRYSTA,
            $POZOSTAŁY_ŚREDNI_PERSONEL_OCHRONY_ŚRODOWISKA_MEDYCYNY_PRACY_I_BHP,
            $MONTER_KONSERWATOR_URZĄDZEŃ_PRZECIWPOŻAROWYCH,
            $KONSULTANT_KOMITETU_TECHNICZNEGO,
            $NORMALIZATOR,
            $SPECJALISTA_DO_SPRAW_AUDYTU_ZABEZPIECZENIA,
            $SPECJALISTA_KONTROLI_JAKOŚCI,
            $TOWAROZNAWCA,
            $AUDYTOR_ENERGETYCZNY,
            $INSPEKTOR_DOZORU_TECHNICZNEGO,
            $LEGALIZATOR,
            $METROLOG,
            $INSPEKTOR_FARMACEUTYCZNY,
            $TECHNIK_METROLOG,
            $CECHOWNICZY,
            $OPERATOR_BADAŃ_DEFIEKTOSKOPOWYCH,
            $KONTROLER_JAKOŚCI_WYROBÓW_PRZEMYSŁOWYCH,
            $KONTROLER_URZĄDZEŃ_FILTRUJĄCYCH_I_ODDZIELAJĄCYCH,
            $KONTROLER_URZĄDZEŃ_KOKSOWNICZYCH,
            $POZOSTALI_KONTROLERZY_PROCESÓW_W_PRZEMYŚLE_CHEMICZNYM,
            $KONTROLERZY_PROCESÓW_PRZERÓBKI_ROPY_NAFTOWEJ_I_GAZU,
            $KONTROLER_URZĄDZEŃ_DO_CIĄGNIENIA_I_TŁOCZENIA_METALI,
            $KONTROLER_URZĄDZEŃ_DO_WYTOPU_METALI,
            $KONTROLER_URZĄDZEŃ_OBRÓBKI_CIEPLNEJ_METALI,
            $KONTROLER_URZĄDZEŃ_ODLEWNICZYCH,
            $KONTROLER_URZĄDZEŃ_WALCOWNICZYCH,
            $POZOSTALI_KONTROLERZY_PROCESÓW_METALURGICZNYCH,
            $KONTROLER_ROBOTÓW_PRZEMYSŁOWYCH,
            $KONTROLER_URZĄDZEŃ_DO_PRODUKCJI_PAPIERU,
            $POZOSTALI_KONTROLERZY_PROCESÓW_PRZEMYSŁOWYCH,
            $KONTROLER_HIGIENY_MIĘSA,
            $WETERYNARYJNY_KONTROLER_SANITARNY,
            $RZECZOZNAWCA_JAKOŚCI_HANDLOWEJ_ARTYKUŁÓW_ROLNO_SPOŻYWCZYCH,
            $INSPEKTOR_HOTELOWY,
            $INSPEKTOR_KONTROLI_HANDLU_I_USŁUG,
            $INSPEKTOR_DO_SPRAW_MIAR_I_WAG,
            $POZOSTALI_URZĘDNICY_PAŃSTWOWI_DO_SPRAW_NADZORU,
            $KONTROLER_JAKOŚCI_POŁĄCZEŃ_SPWALNICZYCH,
            $RZECZOZNAWCA_SAMOCHODOWY,
            $PROJEKTANT_BIŻUTERII,
            $KOSTIUMOGRAF,
            $PROJEKTANT_MODY,
            $PROJEKTANT_WZORNICTWA_PRZEMYSŁOWEGO,
            $POZOSTALI_PROJEKTANCI_WZORNICTWA_PRZEMYSŁOWEGO_I_ODZIEŻY,
            $PROJEKTANT_EKSPOZYCJI_TOWARÓW_I_USŁUG,
            $PROJEKTANT_WYROBÓW_SKÓRZANYCH,
            $POZOSTALI_KREŚLARZE,
            $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRZEROBU_TORFU,
            $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRZEROBKI_MECHANICZNEJ_RUD,
            $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRZEROBKI_MECHANICZNEJ_WĘGLA,
            $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_ROZDRABNIANIA_I_SORTOWANIA_SUROWCÓW_MINERALNYCH,
            $POZOSTALI_OPERATORZY_MASZYN_I_URZĄDZEŃ_DO_PRZEROBKI_MECHANICZNEJ_KOPALIN,
            $OPERATOR_MASZYN_I_URZĄDZEŃ_PRZERÓBCZYCH,
            $GÓRNIK_EKSPLOATACJI_OTWOROWEJ,
            $OPERATOR_URZĄDZEŃ_DO_OBRÓBKI_ODWIERTÓW_WYDOBYWCZYCH,
            $WIERTACZ_STUDNI,
            $WIERTACZ,
            $POZOSTALI_OPERATORZY_URZĄDZEŃ_WIERTNICZYCH_I_WYDOBYWCZYCH,
            $OPERATOR_TARCZY_DRĄŻĄCEJ_TBM,
            $ROBOTNIK_GÓRNICZY_DOŁOWY,
            $KIEROWNIK_JEDNOSTKI_RATOWNICTWA_GÓRNICZEGO,
            $TECHNIK_GÓRNICTWA_ODKRYWKOWEGO,
            $TECHNIK_GÓRNICTWA_OTWOROWEGO,
            $TECHNIK_GÓRNICTWA_PODZIEMNEGO,
            $TECHNIK_PRZERÓBKI_KOPALIN_STAŁYCH,
            $TECHNIK_WIERTNIK,
            $OSOBY_DOZORU_RUCHU_W_GÓRNICTWIE_ODKRYWKOWYM,
            $OSOBY_DOZORU_RUCHU_W_GÓRNICTWIE_OTWOROWYM,
            $OSOBY_DOZORU_RUCHU_W_GÓRNICTWIE_PODZIEMNYM,
            $POZOSTAŁE_OSOBY_DOZORU_RUCHU_W_GÓRNICTWIE,
            $MASZYNISTA_WENTYLATORÓW_W_KOPALNI,
            $STRZAŁOWY_GÓRNIK_STRZAŁOWY,
            $WYDAWCA_ŚRODKÓW_STRZAŁOWYCH,
            $INSTRUKTOR_STRZAŁOWY,
            $POZOSTALI_STRZAŁOWI_I_POKREWNI,
            $GÓRNIK_EKSPLOATACJI_PODZIEMNEJ,
            $GÓRNIK_ODKRYWKOWEJ_EKSPLOATACJI_ZŁÓŻ,
            $SYGNALISTA_SZYBOWY,
            $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_POZYSKIWANIA_TORFU,
            $OPERATOR_MASZYN_URABIAJĄCYCH_I_ŁADUJĄCYCH,
            $WYDOBYWCZA_KRUSZYWA_I_GLINY,
            $POZOSTALI_GÓRNICY_PODZIEMNEJ_I_ODKRYWKOWEJ_EKSPLOATACJI_ZŁÓŻ,
            $GÓRNIK_PODZIEMNEJ_EKSPLOATACJI_KOPALIN_INNYCH_NIŻ_WĘGIEL_KAMIENNY,
            $OPERATOR_SYSTEMÓW_ODWADNIAJĄCEJ,
            $TECHNIK_PODZIEMNEJ_EKSPLOATACJI_KOPALIN_INNYCH_NIŻ_WĘGIEL_KAMIENNY,
            $TECHNIK_TECHNOLOGII_CERAMICZNEJ,
            $OPERATOR_AUTOMATÓW_DO_FORMOWANIA_WYROBÓW_SZKLANYCH,
            $OPERATOR_MASZYN_DO_FORMOWANIA_SZKŁA_PŁASKIEGO,
            $OPERATOR_ODPRĘŻAREK_WYROBÓW_SZKLANYCH,
            $OPERATOR_URZĄDZEŃ_DO_CHEMICZNEGO_POLEROWANIA_SZKŁA,
            $OPERATOR_URZĄDZEŃ_DO_FORMOWANIA_I_PRZETWÓRSTWA_WŁÓKNA_SZKLANEGO,
            $OPERATOR_URZĄDZEŃ_DO_FORMOWANIA_WYROBÓW_CERAMICZNYCH,
            $OPERATOR_URZĄDZEŃ_DO_FORMOWANIA_WYROBÓW_OGNIOTRWAŁYCH,
            $OPERATOR_URZĄDZEŃ_DO_FORMOWANIA_WYROBÓW_SYLIKATOWYCH,
            $OPERATOR_URZĄDZEŃ_DO_GIĘCIA_SZKŁA,
            $OPERATOR_URZĄDZEŃ_DO_HARTOWANIA_SZKŁA,
            $OPERATOR_URZĄDZEŃ_DO_MATOWANIA_WYROBÓW_SZKLANYCH,
            $OPERATOR_URZĄDZEŃ_DO_OBRÓBKI_PŁOMIENIOWEJ_SZKŁA,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MATERIAŁÓW_ŚCIERNYCH,
        ));

        Category::whereId('1804')->first()->detailprojects()->attach(collect($KIEROWNIK_PRODUKCJI_W_PRZEDSIĘBIORSTWIE_ROLNIM)->pluck('id')->toArray());
        Category::whereId('1805')->first()->detailprojects()->attach(collect($KIEROWNIK_PRZEDSIĘBIORSTWA_USŁUGOWEGO_ZWIĄZANEGO_Z_LEŚNICTWEM)->pluck('id')->toArray());
        Category::whereId('1806')->first()->detailprojects()->attach(collect($KIEROWNIK_W_GOSPODARCE_LEŚNEJ)->pluck('id')->toArray());
        Category::whereId('1807')->first()->detailprojects()->attach(collect($KIEROWNIK_PRODUKCJI_W_PRZEDSIĘBIORSTWIE_OGRODNICZYM)->pluck('id')->toArray());
        Category::whereId('1808')->first()->detailprojects()->attach(collect($KIEROWNIK_PRODUKCJI_W_PRZEDSIĘBIORSTWIE_HODOWLANYM)->pluck('id')->toArray());
        Category::whereId('1809')->first()->detailprojects()->attach(collect($POZOSTALI_KIEROWNICY_PRODUKCJI_W_ROLNICTWIE_I_LEŚNICTWIE)->pluck('id')->toArray());
        Category::whereId('1811')->first()->detailprojects()->attach(collect($KIEROWNIK_PRODUKCJI_W_ZAKŁADACH_AKWAKULTURY)->pluck('id')->toArray());
        Category::whereId('1812')->first()->detailprojects()->attach(collect($KIEROWNIK_PRZEDSIĘBIORSTWA_W_RYBOŁÓWSTWIE)->pluck('id')->toArray());
        Category::whereId('1813')->first()->detailprojects()->attach(collect($POZOSTALI_KIEROWNICY_PRODUKCJI_W_ZAKŁADACH_AKWAKULTURY_I_RYBOŁÓWSTWIE)->pluck('id')->toArray());
        Category::whereId('1815')->first()->detailprojects()->attach(collect($KIEROWNIK_DO_SPRAW_KONTROLI_JAKOŚCI)->pluck('id')->toArray());
        Category::whereId('1816')->first()->detailprojects()->attach(collect($KIEROWNIK_PRODUKCJI_W_PRZEMYŚLE)->pluck('id')->toArray());
        Category::whereId('1817')->first()->detailprojects()->attach(collect($KIEROWNIK_MAŁEGO_PRZEDSIĘBIORSTWA_W_PRZEMYŚLE_PRZETWÓRCZYM)->pluck('id')->toArray());
        Category::whereId('1818')->first()->detailprojects()->attach(collect($KIEROWNIK_UTRZYMANIA_RUCHU)->pluck('id')->toArray());
        Category::whereId('1819')->first()->detailprojects()->attach(collect($POZOSTALI_KIEROWNICY_DO_SPRAW_PRODUKCJI_PRZEMYSŁOWEJ)->pluck('id')->toArray());
        Category::whereId('1820')->first()->detailprojects()->attach(collect($KIEROWNIK_RUCHU_ZAKŁADU_GÓRNICZEGO_LUB_ZAKŁADU)->pluck('id')->toArray());
        Category::whereId('1822')->first()->detailprojects()->attach(collect($POZOSTALI_KIEROWNICY_W_GÓRNICTWIE)->pluck('id')->toArray());
        Category::whereId('1824')->first()->detailprojects()->attach(collect($POZOSTALI_KIEROWNICY_DO_SPRAW_BUDOWNICTWA)->pluck('id')->toArray());
        Category::whereId('1826')->first()->detailprojects()->attach(collect($INŻYNIER_NORMOWANIA_PRACY)->pluck('id')->toArray());
        Category::whereId('1827')->first()->detailprojects()->attach(collect($INŻYNIER_ORGANIZACJI_I_PLANOWANIA_PRODUKCJI)->pluck('id')->toArray());
        Category::whereId('1828')->first()->detailprojects()->attach(collect($INŻYNIER_UTRZYMANIA_RUCHU)->pluck('id')->toArray());
        Category::whereId('1829')->first()->detailprojects()->attach(collect($POZOSTALI_INŻYNIEROWIE_DO_SPRAW_PRZEMYSŁU_I_PRODUKCJI)->pluck('id')->toArray());
        Category::whereId('1830')->first()->detailprojects()->attach(collect($TECHNIK_ORGANIZACJI_PRODUKCJI)->pluck('id')->toArray());
        Category::whereId('1834')->first()->detailprojects()->attach(collect($INŻYNIER_GÓRNIK_GÓRNICTWO_OTWOROWE)->pluck('id')->toArray());
        Category::whereId('1835')->first()->detailprojects()->attach(collect($INŻYNIER_GÓRNIK_GÓRNICTWO_ODKRYWKOWE)->pluck('id')->toArray());
        Category::whereId('1836')->first()->detailprojects()->attach(collect($INŻYNIER_GÓRNIK_GÓRNICTWO_PODZIEMNE)->pluck('id')->toArray());
        Category::whereId('1837')->first()->detailprojects()->attach(collect($INŻYNIER_GÓRNIK_WIERTNICTWO)->pluck('id')->toArray());
        Category::whereId('1838')->first()->detailprojects()->attach(collect($INŻYNIER_HUTNIK)->pluck('id')->toArray());
        Category::whereId('1839')->first()->detailprojects()->attach(collect($INŻYNIER_ODLEWNIK)->pluck('id')->toArray());
        Category::whereId('1841')->first()->detailprojects()->attach(collect($INŻYNIER_GELOG_GEOLOGIA_GÓRNICZA_I_POSZUKIWACZA)->pluck('id')->toArray());
        Category::whereId('1842')->first()->detailprojects()->attach(collect($INŻYNIER_GELOG_HYDROLOGIA_GÓRNICZA)->pluck('id')->toArray());
        Category::whereId('1843')->first()->detailprojects()->attach(collect($POZOSTALI_INŻYNIEROWIE_GÓRNICTWA_I_METALURGII)->pluck('id')->toArray());
        Category::whereId('1846')->first()->detailprojects()->attach(collect($INŻYNIER_TECHNOLOGII_CERAMIKI)->pluck('id')->toArray());
        Category::whereId('1847')->first()->detailprojects()->attach(collect($INŻYNIER_TECHNOLOGII_DREWNA)->pluck('id')->toArray());
        Category::whereId('1848')->first()->detailprojects()->attach(collect($INŻYNIER_TECHNOLOGII_PRZETWÓRSTWA_SKÓRY)->pluck('id')->toArray());
        Category::whereId('1849')->first()->detailprojects()->attach(collect($INŻYNIER_TECHNOLOGII_SZKŁA)->pluck('id')->toArray());
        Category::whereId('1850')->first()->detailprojects()->attach(collect($INŻYNIER_WŁÓKIENNIK)->pluck('id')->toArray());
        Category::whereId('1851')->first()->detailprojects()->attach(collect($NANOTECHNOLOG_INŻYNIER_NANOSTRUKTUR)->pluck('id')->toArray());
        Category::whereId('1852')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_EROGOMII_I_PROJEKTOWANIA_FORM_UŻYTKOWYCH)->pluck('id')->toArray());
        Category::whereId('1853')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_PAKOWANIA_I_OPAKOWAŃ)->pluck('id')->toArray());
        Category::whereId('1854')->first()->detailprojects()->attach(collect($INŻYNIER_PROCESU_MALOWANIA)->pluck('id')->toArray());
        Category::whereId('1856')->first()->detailprojects()->attach(collect($INŻYNIER_INŻYNIERII_MATERIAŁOWEJ)->pluck('id')->toArray());
        Category::whereId('1857')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_ORGANIZACJI_I_ROZWOJU_PRZEMYSŁU)->pluck('id')->toArray());
        Category::whereId('1858')->first()->detailprojects()->attach(collect($TECHNIK_UTRZYMANIA_RUCHU)->pluck('id')->toArray());
        Category::whereId('1859')->first()->detailprojects()->attach(collect($TECHNIK_PAPIERNICTWA)->pluck('id')->toArray());
        Category::whereId('1860')->first()->detailprojects()->attach(collect($TECHNIK_PRZETWÓRSTWA_TWORZYW_SZTUCZNYCH)->pluck('id')->toArray());
        Category::whereId('1861')->first()->detailprojects()->attach(collect($TECHNIK_NORMOWANIA_PRACY)->pluck('id')->toArray());
        Category::whereId('1862')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_SZKŁA)->pluck('id')->toArray());
        Category::whereId('1863')->first()->detailprojects()->attach(collect($TECHNIK_WŁÓKIENNICZYCH_WYROBÓW_DEKORACYJNYCH)->pluck('id')->toArray());
        Category::whereId('1864')->first()->detailprojects()->attach(collect($TECHNIK_WŁÓKIENNIK)->pluck('id')->toArray());
        Category::whereId('1866')->first()->detailprojects()->attach(collect($MISTRZ_PRODUKCJI_W_PRZEMYŚLE_CHEMICZNYM)->pluck('id')->toArray());
        Category::whereId('1867')->first()->detailprojects()->attach(collect($MISTRZ_PRODUKCJI_W_PRZEMYŚLE_DRZEWNYM)->pluck('id')->toArray());
        Category::whereId('1868')->first()->detailprojects()->attach(collect($MISTRZ_PRODUKCJI_W_PRZEMYŚLE_ELEKTROMASZYNOWYM)->pluck('id')->toArray());
        Category::whereId('1869')->first()->detailprojects()->attach(collect($MISTRZ_PRODUKCJI_W_PRZEMYŚLE_ELEKTRONICZNYM)->pluck('id')->toArray());
        Category::whereId('1870')->first()->detailprojects()->attach(collect($MISTRZ_PRODUKCJI_W_PRZEMYŚLE_FARMACEUTYCZNYM)->pluck('id')->toArray());
        Category::whereId('1871')->first()->detailprojects()->attach(collect($MISTRZ_PRODUKCJI_W_PRZEMYŚLE_METALURGICZNYM)->pluck('id')->toArray());
        Category::whereId('1872')->first()->detailprojects()->attach(collect($MISTRZ_PRODUKCJI_W_PRZEMYŚLE_SAMOCHODOWYM)->pluck('id')->toArray());
        Category::whereId('1873')->first()->detailprojects()->attach(collect($MISTRZ_PRODUKCJI_W_PRZEMYŚLE_SPOŻYWCZYM)->pluck('id')->toArray());
        Category::whereId('1874')->first()->detailprojects()->attach(collect($MISTRZ_PRODUKCJI_W_PRZEMYŚLE_WŁÓKIENNICZYM)->pluck('id')->toArray());
        Category::whereId('1875')->first()->detailprojects()->attach(collect($MISTRZ_PRODUKCJI_W_POLIGRAFII)->pluck('id')->toArray());
        Category::whereId('1876')->first()->detailprojects()->attach(collect($POZOSTALI_MISTRZOWIE_PRODUKCJI_W_PRZEMYŚLE_PRZETWÓRCZYM)->pluck('id')->toArray());
        Category::whereId('1877')->first()->detailprojects()->attach(collect($MISTRZ_PRODUKCJI_W_PRZEMYŚLE_ODZIEŻOWYM)->pluck('id')->toArray());
        Category::whereId('1878')->first()->detailprojects()->attach(collect($TECHNIK_BUDOWY_FORTEPIANÓW_I_PIANIN)->pluck('id')->toArray());
        Category::whereId('1879')->first()->detailprojects()->attach(collect($INŻYNIER_INŻYNIERII_MATERIAŁÓW_SYNTETYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1880')->first()->detailprojects()->attach(collect($INŻYNIER_PAPIERNICTWA)->pluck('id')->toArray());
        Category::whereId('1881')->first()->detailprojects()->attach(collect($TECHNIK_BUDOWY_I_STROJENIA_FORTEPIANÓW_I_PIANIN)->pluck('id')->toArray());
        Category::whereId('1884')->first()->detailprojects()->attach(collect($AUDYTOR_ŚRODOWISKOWY)->pluck('id')->toArray());
        Category::whereId('1885')->first()->detailprojects()->attach(collect($EKOLOG)->pluck('id')->toArray());
        Category::whereId('1886')->first()->detailprojects()->attach(collect($SPECJALISTA_OCHRONY_ŚRODOWISKA)->pluck('id')->toArray());
        Category::whereId('1887')->first()->detailprojects()->attach(collect($POZOSTALI_SPECJALIŚCI_DO_SPRAW_OCHRONY_ŚRODOWISKA)->pluck('id')->toArray());
        Category::whereId('1888')->first()->detailprojects()->attach(collect($OPERATOR_APARATURY_DO_PRZETWARZANIA_ODPADÓW_NIEBEZPIECZNYCH)->pluck('id')->toArray());
        Category::whereId('1889')->first()->detailprojects()->attach(collect($OPERATOR_SPALARNI_ODPADÓW_KOMUNALNYCH)->pluck('id')->toArray());
        Category::whereId('1890')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_KLIMATYZACYJNYCH_I_ODPYLAJĄCYCH)->pluck('id')->toArray());
        Category::whereId('1891')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_OCZYSZCZANIA_ŚCIEKÓW)->pluck('id')->toArray());
        Category::whereId('1892')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_UZDATNIANIA_I_DEMINERALIZACJI_WODY)->pluck('id')->toArray());
        Category::whereId('1893')->first()->detailprojects()->attach(collect($PRACOWNIK_OCZYSZCZANIA_TERENU_Z_MATERIAŁÓW_WYBUCHOWYCH_I_NIEBEZPIECZNYCH)->pluck('id')->toArray());
        Category::whereId('1894')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_URZĄDZEŃ_DO_SPALANIA_ODPADÓW_UZDATNIANIA_WODY_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1895')->first()->detailprojects()->attach(collect($EDUKATOR_EKOLOGICZNY)->pluck('id')->toArray());
        Category::whereId('1897')->first()->detailprojects()->attach(collect($STRAŻNIK_OCHRONY_PRZYRODY_ŚRODOWISKA)->pluck('id')->toArray());
        Category::whereId('1898')->first()->detailprojects()->attach(collect($TECHNIK_ANALIZY_I_MONITORINGU_ŚRODOWISKA)->pluck('id')->toArray());
        Category::whereId('1899')->first()->detailprojects()->attach(collect($TECHNIK_OCHRONY_ŚRODOWISKA)->pluck('id')->toArray());
        Category::whereId('1900')->first()->detailprojects()->attach(collect($TECHNIK_GOSPODARKI_ODPADAMI)->pluck('id')->toArray());
        Category::whereId('1902')->first()->detailprojects()->attach(collect($ANALITYK_DS_ZRÓWNOWAŻONEGO_ROZWOJU)->pluck('id')->toArray());
        Category::whereId('1903')->first()->detailprojects()->attach(collect($SPECJALISTA_DS_ZRÓWNOWAŻONEGO_ROZWOJU)->pluck('id')->toArray());
        Category::whereId('1906')->first()->detailprojects()->attach(collect($RZECZOZNAWCA_DO_SPRAW_ZABEZPIECZEŃ_PRZECIWPOŻAROWYCH)->pluck('id')->toArray());
        Category::whereId('1908')->first()->detailprojects()->attach(collect($INSPEKTOR_DOZORU_JĄDROWEGO)->pluck('id')->toArray());
        Category::whereId('1909')->first()->detailprojects()->attach(collect($SPECJALISTA_PROMOCJI_ZDROWIA_I_EDUKACJI_ZDROWOTNEJ)->pluck('id')->toArray());
        Category::whereId('1910')->first()->detailprojects()->attach(collect($SPECJALISTA_BEZPIECZEŃSTWA_I_HIGIENY_PRACY)->pluck('id')->toArray());
        Category::whereId('1911')->first()->detailprojects()->attach(collect($SPECJALISTA_ZDROWIA_PUBLICZNEGO)->pluck('id')->toArray());
        Category::whereId('1912')->first()->detailprojects()->attach(collect($SPECJALISTA_ZDROWIA_ŚRODOWISKOWEGO)->pluck('id')->toArray());
        Category::whereId('1913')->first()->detailprojects()->attach(collect($RZECZOZNAWCA_DO_SPRAW_BEZPIECZEŃSTWA_I_HIGIENY_PRACY)->pluck('id')->toArray());
        Category::whereId('1914')->first()->detailprojects()->attach(collect($POZOSTALI_SPECJALIŚCI_DO_SPRAW_HIGIENY_BEZPIECZEŃSTWA_PRACY_I_OCHRONY_ŚRODOWISKA)->pluck('id')->toArray());
        Category::whereId('1915')->first()->detailprojects()->attach(collect($SPECJALISTA_ZARZĄDZANIA_KRYZYSOWEGO)->pluck('id')->toArray());
        Category::whereId('1916')->first()->detailprojects()->attach(collect($INSPEKTOR_OCHRONY_PRZECIWPOŻAROWEJ)->pluck('id')->toArray());
        Category::whereId('1917')->first()->detailprojects()->attach(collect($INSPEKTOR_BEZPIECZEŃSTWA_I_HIGIENY_PRACY)->pluck('id')->toArray());
        Category::whereId('1918')->first()->detailprojects()->attach(collect($INSPEKTOR_OCHRONY_RADIOLOGICZNEJ)->pluck('id')->toArray());
        Category::whereId('1919')->first()->detailprojects()->attach(collect($INSTRUKTOR_HIGIENY)->pluck('id')->toArray());
        Category::whereId('1920')->first()->detailprojects()->attach(collect($TECHNIK_BEZPIECZEŃSTWA_I_HIGIENY_PRACY_S)->pluck('id')->toArray());
        Category::whereId('1921')->first()->detailprojects()->attach(collect($TECHNIK_DOZYMETRYSTA)->pluck('id')->toArray());
        Category::whereId('1922')->first()->detailprojects()->attach(collect($POZOSTAŁY_ŚREDNI_PERSONEL_OCHRONY_ŚRODOWISKA_MEDYCYNY_PRACY_I_BHP)->pluck('id')->toArray());
        Category::whereId('1923')->first()->detailprojects()->attach(collect($MONTER_KONSERWATOR_URZĄDZEŃ_PRZECIWPOŻAROWYCH)->pluck('id')->toArray());
        Category::whereId('1925')->first()->detailprojects()->attach(collect($KONSULTANT_KOMITETU_TECHNICZNEGO)->pluck('id')->toArray());
        Category::whereId('1926')->first()->detailprojects()->attach(collect($NORMALIZATOR)->pluck('id')->toArray());
        Category::whereId('1927')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_AUDYTU_ZABEZPIECZENIA)->pluck('id')->toArray());
        Category::whereId('1928')->first()->detailprojects()->attach(collect($SPECJALISTA_KONTROLI_JAKOŚCI)->pluck('id')->toArray());
        Category::whereId('1929')->first()->detailprojects()->attach(collect($TOWAROZNAWCA)->pluck('id')->toArray());
        Category::whereId('1930')->first()->detailprojects()->attach(collect($AUDYTOR_ENERGETYCZNY)->pluck('id')->toArray());
        Category::whereId('1931')->first()->detailprojects()->attach(collect($INSPEKTOR_DOZORU_TECHNICZNEGO)->pluck('id')->toArray());
        Category::whereId('1932')->first()->detailprojects()->attach(collect($LEGALIZATOR)->pluck('id')->toArray());
        Category::whereId('1933')->first()->detailprojects()->attach(collect($METROLOG)->pluck('id')->toArray());
        Category::whereId('1935')->first()->detailprojects()->attach(collect($INSPEKTOR_FARMACEUTYCZNY)->pluck('id')->toArray());
        Category::whereId('1936')->first()->detailprojects()->attach(collect($TECHNIK_METROLOG)->pluck('id')->toArray());
        Category::whereId('1937')->first()->detailprojects()->attach(collect($CECHOWNICZY)->pluck('id')->toArray());
        Category::whereId('1938')->first()->detailprojects()->attach(collect($OPERATOR_BADAŃ_DEFIEKTOSKOPOWYCH)->pluck('id')->toArray());
        Category::whereId('1939')->first()->detailprojects()->attach(collect($KONTROLER_JAKOŚCI_WYROBÓW_PRZEMYSŁOWYCH)->pluck('id')->toArray());
        Category::whereId('1945')->first()->detailprojects()->attach(collect($KONTROLER_URZĄDZEŃ_FILTRUJĄCYCH_I_ODDZIELAJĄCYCH)->pluck('id')->toArray());
        Category::whereId('1946')->first()->detailprojects()->attach(collect($KONTROLER_URZĄDZEŃ_KOKSOWNICZYCH)->pluck('id')->toArray());
        Category::whereId('1947')->first()->detailprojects()->attach(collect($POZOSTALI_KONTROLERZY_PROCESÓW_W_PRZEMYŚLE_CHEMICZNYM)->pluck('id')->toArray());
        Category::whereId('1948')->first()->detailprojects()->attach(collect($KONTROLERZY_PROCESÓW_PRZERÓBKI_ROPY_NAFTOWEJ_I_GAZU)->pluck('id')->toArray());
        Category::whereId('1950')->first()->detailprojects()->attach(collect($KONTROLER_URZĄDZEŃ_DO_CIĄGNIENIA_I_TŁOCZENIA_METALI)->pluck('id')->toArray());
        Category::whereId('1951')->first()->detailprojects()->attach(collect($KONTROLER_URZĄDZEŃ_DO_WYTOPU_METALI)->pluck('id')->toArray());
        Category::whereId('1952')->first()->detailprojects()->attach(collect($KONTROLER_URZĄDZEŃ_OBRÓBKI_CIEPLNEJ_METALI)->pluck('id')->toArray());
        Category::whereId('1953')->first()->detailprojects()->attach(collect($KONTROLER_URZĄDZEŃ_ODLEWNICZYCH)->pluck('id')->toArray());
        Category::whereId('1954')->first()->detailprojects()->attach(collect($KONTROLER_URZĄDZEŃ_WALCOWNICZYCH)->pluck('id')->toArray());
        Category::whereId('1955')->first()->detailprojects()->attach(collect($POZOSTALI_KONTROLERZY_PROCESÓW_METALURGICZNYCH)->pluck('id')->toArray());
        Category::whereId('1956')->first()->detailprojects()->attach(collect($KONTROLER_ROBOTÓW_PRZEMYSŁOWYCH)->pluck('id')->toArray());
        Category::whereId('1957')->first()->detailprojects()->attach(collect($KONTROLER_URZĄDZEŃ_DO_PRODUKCJI_PAPIERU)->pluck('id')->toArray());
        Category::whereId('1958')->first()->detailprojects()->attach(collect($POZOSTALI_KONTROLERZY_PROCESÓW_PRZEMYSŁOWYCH)->pluck('id')->toArray());
        Category::whereId('1959')->first()->detailprojects()->attach(collect($KONTROLER_HIGIENY_MIĘSA)->pluck('id')->toArray());
        Category::whereId('1960')->first()->detailprojects()->attach(collect($WETERYNARYJNY_KONTROLER_SANITARNY)->pluck('id')->toArray());
        Category::whereId('1963')->first()->detailprojects()->attach(collect($RZECZOZNAWCA_JAKOŚCI_HANDLOWEJ_ARTYKUŁÓW_ROLNO_SPOŻYWCZYCH)->pluck('id')->toArray());
        Category::whereId('1964')->first()->detailprojects()->attach(collect($INSPEKTOR_HOTELOWY)->pluck('id')->toArray());
        Category::whereId('1965')->first()->detailprojects()->attach(collect($INSPEKTOR_KONTROLI_HANDLU_I_USŁUG)->pluck('id')->toArray());
        Category::whereId('1967')->first()->detailprojects()->attach(collect($INSPEKTOR_DO_SPRAW_MIAR_I_WAG)->pluck('id')->toArray());
        Category::whereId('1968')->first()->detailprojects()->attach(collect($POZOSTALI_URZĘDNICY_PAŃSTWOWI_DO_SPRAW_NADZORU)->pluck('id')->toArray());
        Category::whereId('1970')->first()->detailprojects()->attach(collect($RZECZOZNAWCA_SAMOCHODOWY)->pluck('id')->toArray());
        Category::whereId('1973')->first()->detailprojects()->attach(collect($PROJEKTANT_BIŻUTERII)->pluck('id')->toArray());
        Category::whereId('1974')->first()->detailprojects()->attach(collect($KOSTIUMOGRAF)->pluck('id')->toArray());
        Category::whereId('1975')->first()->detailprojects()->attach(collect($PROJEKTANT_MODY)->pluck('id')->toArray());
        Category::whereId('1976')->first()->detailprojects()->attach(collect($PROJEKTANT_WZORNICTWA_PRZEMYSŁOWEGO)->pluck('id')->toArray());
        Category::whereId('1977')->first()->detailprojects()->attach(collect($POZOSTALI_PROJEKTANCI_WZORNICTWA_PRZEMYSŁOWEGO_I_ODZIEŻY)->pluck('id')->toArray());
        Category::whereId('1978')->first()->detailprojects()->attach(collect($PROJEKTANT_EKSPOZYCJI_TOWARÓW_I_USŁUG)->pluck('id')->toArray());
        Category::whereId('1979')->first()->detailprojects()->attach(collect($PROJEKTANT_WYROBÓW_SKÓRZANYCH)->pluck('id')->toArray());
        Category::whereId('1981')->first()->detailprojects()->attach(collect($POZOSTALI_KREŚLARZE)->pluck('id')->toArray());
        Category::whereId('1984')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRZEROBU_TORFU)->pluck('id')->toArray());
        Category::whereId('1985')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRZEROBKI_MECHANICZNEJ_RUD)->pluck('id')->toArray());
        Category::whereId('1986')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZĄDZEŃ_DO_PRZEROBKI_MECHANICZNEJ_WĘGLA)->pluck('id')->toArray());
        Category::whereId('1987')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZĄDZEŃ_DO_ROZDRABNIANIA_I_SORTOWANIA_SUROWCÓW_MINERALNYCH)->pluck('id')->toArray());
        Category::whereId('1988')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_MASZYN_I_URZĄDZEŃ_DO_PRZEROBKI_MECHANICZNEJ_KOPALIN)->pluck('id')->toArray());
        Category::whereId('1989')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZĄDZEŃ_PRZERÓBCZYCH)->pluck('id')->toArray());
        Category::whereId('1991')->first()->detailprojects()->attach(collect($GÓRNIK_EKSPLOATACJI_OTWOROWEJ)->pluck('id')->toArray());
        Category::whereId('1992')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_OBRÓBKI_ODWIERTÓW_WYDOBYWCZYCH)->pluck('id')->toArray());
        Category::whereId('1993')->first()->detailprojects()->attach(collect($WIERTACZ_STUDNI)->pluck('id')->toArray());
        Category::whereId('1994')->first()->detailprojects()->attach(collect($WIERTACZ)->pluck('id')->toArray());
        Category::whereId('1995')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_URZĄDZEŃ_WIERTNICZYCH_I_WYDOBYWCZYCH)->pluck('id')->toArray());
        Category::whereId('1996')->first()->detailprojects()->attach(collect($OPERATOR_TARCZY_DRĄŻĄCEJ_TBM)->pluck('id')->toArray());
        Category::whereId('1997')->first()->detailprojects()->attach(collect($ROBOTNIK_GÓRNICZY_DOŁOWY)->pluck('id')->toArray());
        Category::whereId('1998')->first()->detailprojects()->attach(collect($KIEROWNIK_JEDNOSTKI_RATOWNICTWA_GÓRNICZEGO)->pluck('id')->toArray());
        Category::whereId('1999')->first()->detailprojects()->attach(collect($TECHNIK_GÓRNICTWA_ODKRYWKOWEGO)->pluck('id')->toArray());
        Category::whereId('2000')->first()->detailprojects()->attach(collect($TECHNIK_GÓRNICTWA_OTWOROWEGO)->pluck('id')->toArray());
        Category::whereId('2001')->first()->detailprojects()->attach(collect($TECHNIK_GÓRNICTWA_PODZIEMNEGO)->pluck('id')->toArray());
        Category::whereId('2002')->first()->detailprojects()->attach(collect($TECHNIK_PRZERÓBKI_KOPALIN_STAŁYCH)->pluck('id')->toArray());
        Category::whereId('2003')->first()->detailprojects()->attach(collect($TECHNIK_WIERTNIK)->pluck('id')->toArray());
        Category::whereId('2005')->first()->detailprojects()->attach(collect($OSOBY_DOZORU_RUCHU_W_GÓRNICTWIE_ODKRYWKOWYM)->pluck('id')->toArray());
        Category::whereId('2006')->first()->detailprojects()->attach(collect($OSOBY_DOZORU_RUCHU_W_GÓRNICTWIE_OTWOROWYM)->pluck('id')->toArray());
        Category::whereId('2007')->first()->detailprojects()->attach(collect($OSOBY_DOZORU_RUCHU_W_GÓRNICTWIE_PODZIEMNYM)->pluck('id')->toArray());
        Category::whereId('2008')->first()->detailprojects()->attach(collect($POZOSTAŁE_OSOBY_DOZORU_RUCHU_W_GÓRNICTWIE)->pluck('id')->toArray());
        Category::whereId('2009')->first()->detailprojects()->attach(collect($MASZYNISTA_WENTYLATORÓW_W_KOPALNI)->pluck('id')->toArray());
        Category::whereId('2011')->first()->detailprojects()->attach(collect($STRZAŁOWY_GÓRNIK_STRZAŁOWY)->pluck('id')->toArray());
        Category::whereId('2012')->first()->detailprojects()->attach(collect($WYDAWCA_ŚRODKÓW_STRZAŁOWYCH)->pluck('id')->toArray());
        Category::whereId('2013')->first()->detailprojects()->attach(collect($INSTRUKTOR_STRZAŁOWY)->pluck('id')->toArray());
        Category::whereId('2014')->first()->detailprojects()->attach(collect($POZOSTALI_STRZAŁOWI_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2016')->first()->detailprojects()->attach(collect($GÓRNIK_EKSPLOATACJI_PODZIEMNEJ)->pluck('id')->toArray());
        Category::whereId('2017')->first()->detailprojects()->attach(collect($GÓRNIK_ODKRYWKOWEJ_EKSPLOATACJI_ZŁÓŻ)->pluck('id')->toArray());
        Category::whereId('2018')->first()->detailprojects()->attach(collect($SYGNALISTA_SZYBOWY)->pluck('id')->toArray());
        Category::whereId('2019')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZĄDZEŃ_DO_POZYSKIWANIA_TORFU)->pluck('id')->toArray());
        Category::whereId('2020')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_URABIAJĄCYCH_I_ŁADUJĄCYCH)->pluck('id')->toArray());
        Category::whereId('2021')->first()->detailprojects()->attach(collect($WYDOBYWCZA_KRUSZYWA_I_GLINY)->pluck('id')->toArray());
        Category::whereId('2022')->first()->detailprojects()->attach(collect($POZOSTALI_GÓRNICY_PODZIEMNEJ_I_ODKRYWKOWEJ_EKSPLOATACJI_ZŁÓŻ)->pluck('id')->toArray());
        Category::whereId('2023')->first()->detailprojects()->attach(collect($GÓRNIK_PODZIEMNEJ_EKSPLOATACJI_KOPALIN_INNYCH_NIŻ_WĘGIEL_KAMIENNY)->pluck('id')->toArray());
        Category::whereId('2024')->first()->detailprojects()->attach(collect($OPERATOR_SYSTEMÓW_ODWADNIAJĄCEJ)->pluck('id')->toArray());
        Category::whereId('2025')->first()->detailprojects()->attach(collect($TECHNIK_PODZIEMNEJ_EKSPLOATACJI_KOPALIN_INNYCH_NIŻ_WĘGIEL_KAMIENNY)->pluck('id')->toArray());
        Category::whereId('2027')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_CERAMICZNEJ)->pluck('id')->toArray());
        Category::whereId('2030')->first()->detailprojects()->attach(collect($OPERATOR_AUTOMATÓW_DO_FORMOWANIA_WYROBÓW_SZKLANYCH)->pluck('id')->toArray());
        Category::whereId('2031')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_DO_FORMOWANIA_SZKŁA_PŁASKIEGO)->pluck('id')->toArray());
        Category::whereId('2032')->first()->detailprojects()->attach(collect($OPERATOR_ODPRĘŻAREK_WYROBÓW_SZKLANYCH)->pluck('id')->toArray());
        Category::whereId('2033')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_CHEMICZNEGO_POLEROWANIA_SZKŁA)->pluck('id')->toArray());
        Category::whereId('2034')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_FORMOWANIA_I_PRZETWÓRSTWA_WŁÓKNA_SZKLANEGO)->pluck('id')->toArray());
        Category::whereId('2035')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_FORMOWANIA_WYROBÓW_CERAMICZNYCH)->pluck('id')->toArray());
        Category::whereId('2036')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_FORMOWANIA_WYROBÓW_OGNIOTRWAŁYCH)->pluck('id')->toArray());
        Category::whereId('2037')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_FORMOWANIA_WYROBÓW_SYLIKATOWYCH)->pluck('id')->toArray());
        Category::whereId('2038')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_GIĘCIA_SZKŁA)->pluck('id')->toArray());
        Category::whereId('2039')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_HARTOWANIA_SZKŁA)->pluck('id')->toArray());
        Category::whereId('2040')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_MATOWANIA_WYROBÓW_SZKLANYCH)->pluck('id')->toArray());
        Category::whereId('2041')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_OBRÓBKI_PŁOMIENIOWEJ_SZKŁA)->pluck('id')->toArray());
        Category::whereId('2042')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MATERIAŁÓW_ŚCIERNYCH)->pluck('id')->toArray());
    }
}

