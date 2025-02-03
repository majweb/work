<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectGastroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();

        $ORGANIZATOR_USLUG_KATERINGOWYCH = [
            [
                "id" => 20201,
                "name" => json_encode([
                    "pl" => "Planowanie i organizowanie wydarzeń cateringowych.",
                    "en" => "Planning and organizing catering events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20202,
                "name" => json_encode([
                    "pl" => "Tworzenie menu zgodnie z wymaganiami klientów.",
                    "en" => "Creating menus according to client requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20203,
                "name" => json_encode([
                    "pl" => "Koordynacja zespołu kucharzy i personelu obsługującego.",
                    "en" => "Coordinating the team of chefs and service staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20204,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością potraw oraz usług cateringowych.",
                    "en" => "Overseeing the quality of dishes and catering services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20205,
                "name" => json_encode([
                    "pl" => "Zarządzanie dostawami i kontrola świeżości produktów.",
                    "en" => "Managing supplies and checking the freshness of products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20206,
                "name" => json_encode([
                    "pl" => "Organizacja transportu oraz ustawienia stołów i dekoracji.",
                    "en" => "Arranging transportation and setting up tables and decorations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20207,
                "name" => json_encode([
                    "pl" => "Utrzymywanie kontaktu z klientami i dostosowywanie usług do ich potrzeb.",
                    "en" => "Maintaining contact with clients and adapting services to their needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20208,
                "name" => json_encode([
                    "pl" => "Dbanie o przestrzeganie standardów sanitarnych i bezpieczeństwa.",
                    "en" => "Ensuring compliance with sanitary and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20209,
                "name" => json_encode([
                    "pl" => "Monitorowanie budżetu wydarzenia oraz kontrola kosztów.",
                    "en" => "Monitoring the event budget and controlling costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SZEF_KUCHNI = [
            [
                "id" => 20210,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem kucharzy i personelu kuchennego.",
                    "en" => "Managing the team of chefs and kitchen staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20211,
                "name" => json_encode([
                    "pl" => "Tworzenie i modyfikowanie menu oraz wprowadzanie nowych potraw.",
                    "en" => "Creating and modifying menus and introducing new dishes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20212,
                "name" => json_encode([
                    "pl" => "Nadzór nad przygotowywaniem dań i kontrola jakości serwowanych potraw.",
                    "en" => "Overseeing dish preparation and ensuring the quality of served meals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20213,
                "name" => json_encode([
                    "pl" => "Planowanie zamówień i zarządzanie zapasami żywności.",
                    "en" => "Planning orders and managing food inventory."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20214,
                "name" => json_encode([
                    "pl" => "Dbanie o higienę i bezpieczeństwo w kuchni.",
                    "en" => "Ensuring hygiene and safety in the kitchen."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20215,
                "name" => json_encode([
                    "pl" => "Szkolenie i motywowanie zespołu kucharzy.",
                    "en" => "Training and motivating the team of chefs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20216,
                "name" => json_encode([
                    "pl" => "Odpowiedzialność za koszty i wydajność pracy kuchni.",
                    "en" => "Being responsible for kitchen costs and work efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20217,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów sanitarno-epidemiologicznych.",
                    "en" => "Complying with sanitary and epidemiological regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20218,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów dotyczących funkcjonowania kuchni.",
                    "en" => "Preparing reports on kitchen operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ZYWIENIA_I_USLUG_GASTRONOMICZNYCH = [
            [
                "id" => 20219,
                "name" => json_encode([
                    "pl" => "Planowanie i przygotowywanie posiłków zgodnie z zasadami zdrowego żywienia.",
                    "en" => "Planning and preparing meals according to healthy eating principles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20220,
                "name" => json_encode([
                    "pl" => "Kontrola jakości i świeżości surowców spożywczych.",
                    "en" => "Controlling the quality and freshness of food ingredients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20221,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie procedur zapewniających bezpieczeństwo żywności (HACCP).",
                    "en" => "Developing and implementing food safety procedures (HACCP)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20222,
                "name" => json_encode([
                    "pl" => "Organizowanie pracy w kuchni i nadzór nad przygotowywaniem potraw.",
                    "en" => "Organizing kitchen work and supervising meal preparation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20223,
                "name" => json_encode([
                    "pl" => "Współpraca z dostawcami oraz zarządzanie zapasami.",
                    "en" => "Collaborating with suppliers and managing inventory."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20224,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz wartości odżywczej dań.",
                    "en" => "Conducting nutritional value analyses of dishes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20225,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn gastronomicznych i dbałość o ich stan techniczny.",
                    "en" => "Operating kitchen equipment and ensuring its proper maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20226,
                "name" => json_encode([
                    "pl" => "Szkolenie personelu w zakresie zasad higieny i obsługi klienta.",
                    "en" => "Training staff on hygiene practices and customer service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20227,
                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji i raportów dotyczących żywienia i usług gastronomicznych.",
                    "en" => "Creating documentation and reports related to nutrition and catering services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KUCHARZE = [
            [
                "id" => 20228,
                "name" => json_encode([
                    "pl" => "Przygotowywanie potraw zgodnie z zamówieniami i recepturami.",
                    "en" => "Preparing dishes according to orders and recipes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20229,
                "name" => json_encode([
                    "pl" => "Dobór i obróbka surowców spożywczych.",
                    "en" => "Selecting and processing food ingredients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20230,
                "name" => json_encode([
                    "pl" => "Dekorowanie i serwowanie dań w estetyczny sposób.",
                    "en" => "Decorating and serving dishes in an aesthetic manner."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20231,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad higieny i bezpieczeństwa pracy w kuchni.",
                    "en" => "Adhering to hygiene and safety regulations in the kitchen."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20232,
                "name" => json_encode([
                    "pl" => "Kontrola jakości używanych produktów oraz gotowych dań.",
                    "en" => "Checking the quality of ingredients and prepared dishes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20233,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami kuchni i szefem kuchni.",
                    "en" => "Collaborating with other kitchen staff and the head chef."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20234,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku i czystości na stanowisku pracy.",
                    "en" => "Keeping the workstation clean and tidy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20235,
                "name" => json_encode([
                    "pl" => "Udział w tworzeniu i modyfikowaniu menu.",
                    "en" => "Participating in the creation and modification of the menu."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20236,
                "name" => json_encode([
                    "pl" => "Obsługa sprzętu kuchennego i dbanie o jego stan techniczny.",
                    "en" => "Operating kitchen equipment and ensuring its proper maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POMOCE_KUCHENNE = [
            [
                "id" => 20237,
                "name" => json_encode([
                    "pl" => "Wspieranie kucharzy w przygotowywaniu składników do potraw (mycie, krojenie, obieranie).",
                    "en" => "Assisting chefs in preparing ingredients for dishes (washing, chopping, peeling)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20238,
                "name" => json_encode([
                    "pl" => "Utrzymywanie czystości w kuchni, mycie naczyń i sprzętu kuchennego.",
                    "en" => "Maintaining cleanliness in the kitchen, washing dishes and kitchen equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20239,
                "name" => json_encode([
                    "pl" => "Przygotowywanie prostych dań i przekąsek.",
                    "en" => "Preparing simple meals and snacks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20240,
                "name" => json_encode([
                    "pl" => "Segregowanie odpadów i dbanie o higienę stanowiska pracy.",
                    "en" => "Sorting waste and maintaining hygiene at the workstation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20241,
                "name" => json_encode([
                    "pl" => "Obsługa podstawowych urządzeń kuchennych, takich jak krajalnice czy zmywarki.",
                    "en" => "Operating basic kitchen appliances, such as slicers and dishwashers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20242,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa i higieny pracy.",
                    "en" => "Following safety and hygiene regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20243,
                "name" => json_encode([
                    "pl" => "Uzupełnianie zapasów i pomoc w przyjmowaniu dostaw.",
                    "en" => "Restocking supplies and assisting with receiving deliveries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20244,
                "name" => json_encode([
                    "pl" => "Czyszczenie stołów roboczych oraz powierzchni w kuchni.",
                    "en" => "Cleaning worktables and kitchen surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20245,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem kucharzy i innym personelem.",
                    "en" => "Collaborating with the team of chefs and other staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WYDAWCY_POSILKOW = [
            [
                "id" => 20246,
                "name" => json_encode([
                    "pl" => "Wydawanie posiłków klientom w kantynach, stołówkach i bufetach.",
                    "en" => "Serving meals to customers in canteens, cafeterias, and buffets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20247,
                "name" => json_encode([
                    "pl" => "Dbanie o estetykę i odpowiednią temperaturę wydawanych potraw.",
                    "en" => "Ensuring the presentation and proper temperature of served dishes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20248,
                "name" => json_encode([
                    "pl" => "Kontrola ilości i jakości wydawanych dań.",
                    "en" => "Checking the quantity and quality of meals being served."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20249,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad higieny i bezpieczeństwa żywności.",
                    "en" => "Following food hygiene and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20250,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do podgrzewania i przechowywania potraw.",
                    "en" => "Operating equipment for heating and storing food."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20251,
                "name" => json_encode([
                    "pl" => "Przyjmowanie zamówień i wydawanie posiłków zgodnie z menu.",
                    "en" => "Taking orders and serving meals according to the menu."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20252,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku i czystości na stanowisku pracy.",
                    "en" => "Maintaining cleanliness and order at the workstation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20253,
                "name" => json_encode([
                    "pl" => "Współpraca z kucharzami w celu uzupełniania zapasów potraw.",
                    "en" => "Collaborating with chefs to replenish food supplies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20254,
                "name" => json_encode([
                    "pl" => "Obsługa klientów w sposób uprzejmy i profesjonalny.",
                    "en" => "Serving customers in a polite and professional manner."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNICY_PRZYGOTOWUJACY_POSILKI_FAST_FOOD = [
            [
                "id" => 20255,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dań typu fast food, takich jak burgery, frytki, pizza.",
                    "en" => "Preparing fast food dishes, such as burgers, fries, pizza."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20256,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do smażenia, grillowania i pieczenia.",
                    "en" => "Operating equipment for frying, grilling, and baking."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20257,
                "name" => json_encode([
                    "pl" => "Przyjmowanie zamówień od klientów i realizacja ich w szybkim tempie.",
                    "en" => "Taking orders from customers and fulfilling them quickly."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20258,
                "name" => json_encode([
                    "pl" => "Pakowanie posiłków na wynos i serwowanie dań na miejscu.",
                    "en" => "Packaging meals for takeout and serving dishes on-site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20259,
                "name" => json_encode([
                    "pl" => "Dbanie o świeżość składników i kontrola jakości potraw.",
                    "en" => "Ensuring the freshness of ingredients and checking the quality of dishes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20260,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad higieny i bezpieczeństwa w kuchni.",
                    "en" => "Following hygiene and safety rules in the kitchen."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20261,
                "name" => json_encode([
                    "pl" => "Utrzymywanie czystości na stanowisku pracy oraz w sali dla klientów.",
                    "en" => "Keeping the workstation and customer area clean."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20262,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem w celu zapewnienia sprawnej obsługi.",
                    "en" => "Collaborating with the team to ensure efficient service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20263,
                "name" => json_encode([
                    "pl" => "Obsługa kasy fiskalnej i przyjmowanie płatności.",
                    "en" => "Operating the cash register and handling payments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KELNERZY = [
            [
                "id" => 20264,
                "name" => json_encode([
                    "pl" => "Przyjmowanie zamówień od klientów i serwowanie dań oraz napojów.",
                    "en" => "Taking orders from customers and serving food and drinks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20265,
                "name" => json_encode([
                    "pl" => "Doradzanie klientom w wyborze potraw i napojów.",
                    "en" => "Advising customers on the selection of dishes and drinks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20266,
                "name" => json_encode([
                    "pl" => "Dbanie o porządek i czystość w sali restauracyjnej.",
                    "en" => "Maintaining cleanliness and order in the dining area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20267,
                "name" => json_encode([
                    "pl" => "Obsługa kasy fiskalnej i rozliczanie zamówień.",
                    "en" => "Operating the cash register and settling orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20268,
                "name" => json_encode([
                    "pl" => "Przygotowywanie stołów do obsługi gości oraz dbanie o estetykę serwisu.",
                    "en" => "Setting tables for guests and ensuring the aesthetics of the service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20269,
                "name" => json_encode([
                    "pl" => "Współpraca z kuchnią i barmanami w celu realizacji zamówień.",
                    "en" => "Collaborating with the kitchen and bartenders to fulfill orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20270,
                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów obsługi klienta i zachowanie uprzejmości.",
                    "en" => "Adhering to customer service standards and maintaining politeness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20271,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów i reagowanie na potrzeby klientów.",
                    "en" => "Handling issues and responding to customer needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20272,
                "name" => json_encode([
                    "pl" => "Przyjmowanie rezerwacji i zarządzanie miejscami w restauracji.",
                    "en" => "Taking reservations and managing seating arrangements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BARISTA = [
            [
                "id" => 20273,
                "name" => json_encode([
                    "pl" => "Przygotowywanie kaw i napojów kawowych, takich jak espresso, cappuccino, latte.",
                    "en" => "Preparing coffee and coffee drinks, such as espresso, cappuccino, latte."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20274,
                "name" => json_encode([
                    "pl" => "Obsługa ekspresu do kawy oraz innych urządzeń barowych.",
                    "en" => "Operating the coffee machine and other bar equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20275,
                "name" => json_encode([
                    "pl" => "Dbanie o estetykę serwowanych napojów oraz stosowanie technik latte art.",
                    "en" => "Ensuring the presentation of drinks and using latte art techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20276,
                "name" => json_encode([
                    "pl" => "Utrzymywanie czystości na stanowisku pracy i dbanie o sprzęt.",
                    "en" => "Keeping the workstation clean and maintaining the equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20277,
                "name" => json_encode([
                    "pl" => "Doradzanie klientom w wyborze kaw i napojów.",
                    "en" => "Advising customers on the selection of coffee and drinks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20278,
                "name" => json_encode([
                    "pl" => "Przyjmowanie zamówień i obsługa kasy fiskalnej.",
                    "en" => "Taking orders and handling the cash register."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20279,
                "name" => json_encode([
                    "pl" => "Tworzenie własnych kompozycji napojów i promocji kawowych.",
                    "en" => "Creating custom drink recipes and coffee promotions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20280,
                "name" => json_encode([
                    "pl" => "Dbanie o świeżość ziaren kawy oraz jakość przygotowywanych napojów.",
                    "en" => "Ensuring the freshness of coffee beans and the quality of prepared drinks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20281,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem w celu sprawnej obsługi klientów.",
                    "en" => "Collaborating with the team to ensure efficient customer service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BARMAN = [
            [
                "id" => 20282,
                "name" => json_encode([
                    "pl" => "Przygotowywanie i serwowanie drinków oraz koktajli zgodnie z recepturami.",
                    "en" => "Preparing and serving drinks and cocktails according to recipes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20283,
                "name" => json_encode([
                    "pl" => "Obsługa gości przy barze i doradzanie w wyborze napojów.",
                    "en" => "Serving guests at the bar and advising them on drink choices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20284,
                "name" => json_encode([
                    "pl" => "Tworzenie autorskich koktajli i prezentowanie ich w atrakcyjny sposób.",
                    "en" => "Creating signature cocktails and presenting them attractively."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20285,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku i czystości w strefie barowej.",
                    "en" => "Maintaining order and cleanliness in the bar area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20286,
                "name" => json_encode([
                    "pl" => "Zarządzanie zapasami alkoholi i składników do drinków.",
                    "en" => "Managing alcohol and drink ingredient inventory."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20287,
                "name" => json_encode([
                    "pl" => "Obsługa kasy fiskalnej i przyjmowanie płatności.",
                    "en" => "Operating the cash register and handling payments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20288,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów dotyczących serwowania alkoholu.",
                    "en" => "Complying with regulations for serving alcohol."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20289,
                "name" => json_encode([
                    "pl" => "Organizowanie degustacji i promocji napojów w barze.",
                    "en" => "Organizing tastings and drink promotions at the bar."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20290,
                "name" => json_encode([
                    "pl" => "Współpraca z kelnerami i personelem kuchni w celu sprawnej obsługi.",
                    "en" => "Collaborating with waitstaff and kitchen staff to ensure efficient service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SOMMELIER = [
            [
                "id" => 20291,
                "name" => json_encode([
                    "pl" => "Doradzanie gościom w wyborze win i innych alkoholi.",
                    "en" => "Advising guests on the selection of wines and other alcoholic beverages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20292,
                "name" => json_encode([
                    "pl" => "Tworzenie kart win i dbanie o ich różnorodność.",
                    "en" => "Creating wine lists and ensuring their variety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20293,
                "name" => json_encode([
                    "pl" => "Degustowanie i ocenianie win oraz dobieranie ich do dań.",
                    "en" => "Tasting and evaluating wines and pairing them with dishes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20294,
                "name" => json_encode([
                    "pl" => "Przechowywanie win w odpowiednich warunkach i zarządzanie piwniczką.",
                    "en" => "Storing wines in proper conditions and managing the wine cellar."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20295,
                "name" => json_encode([
                    "pl" => "Organizowanie degustacji win i szkoleń dla personelu.",
                    "en" => "Organizing wine tastings and training sessions for staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20296,
                "name" => json_encode([
                    "pl" => "Współpraca z dostawcami win oraz uczestnictwo w zamówieniach.",
                    "en" => "Collaborating with wine suppliers and participating in orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20297,
                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów serwisu win i odpowiednie ich podawanie.",
                    "en" => "Adhering to wine service standards and serving them properly."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20298,
                "name" => json_encode([
                    "pl" => "Współpraca z szefem kuchni przy tworzeniu menu.",
                    "en" => "Collaborating with the head chef to create the menu."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20299,
                "name" => json_encode([
                    "pl" => "Edukowanie gości i personelu o winach i ich kulturze.",
                    "en" => "Educating guests and staff about wines and their culture."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_ORGANIZACJI_USLUG = [
            [
                "id" => 20300,
                "name" => json_encode([
                    "pl" => "Planowanie i koordynowanie usług gastronomicznych, hotelowych lub turystycznych.",
                    "en" => "Planning and coordinating gastronomic, hotel, or tourism services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20301,
                "name" => json_encode([
                    "pl" => "Opracowywanie ofert i pakietów usług dla klientów.",
                    "en" => "Developing service offers and packages for clients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20302,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością obsługi oraz przestrzeganiem standardów.",
                    "en" => "Overseeing service quality and adherence to standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20303,
                "name" => json_encode([
                    "pl" => "Współpraca z dostawcami i negocjowanie warunków umów.",
                    "en" => "Collaborating with suppliers and negotiating contract terms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20304,
                "name" => json_encode([
                    "pl" => "Monitorowanie rynku i analizowanie trendów w branży.",
                    "en" => "Monitoring the market and analyzing industry trends."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20305,
                "name" => json_encode([
                    "pl" => "Organizowanie konferencji, eventów i wycieczek dla gości.",
                    "en" => "Organizing conferences, events, and tours for guests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20306,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów i reagowanie na potrzeby klientów.",
                    "en" => "Solving problems and responding to customer needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20307,
                "name" => json_encode([
                    "pl" => "Tworzenie budżetów oraz kontrola kosztów usług.",
                    "en" => "Creating budgets and controlling service costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20308,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji i raportowanie wyników działalności.",
                    "en" => "Maintaining documentation and reporting activity results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_BIURA_PODROZY = [
            [
                "id" => 20309,
                "name" => json_encode([
                    "pl" => "Sprzedaż i rezerwacja wycieczek, biletów lotniczych, hoteli i innych usług turystycznych.",
                    "en" => "Selling and booking tours, airline tickets, hotels, and other travel services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20310,
                "name" => json_encode([
                    "pl" => "Doradzanie klientom w wyborze ofert turystycznych i organizowanie podróży.",
                    "en" => "Advising clients on travel options and organizing trips."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20311,
                "name" => json_encode([
                    "pl" => "Przyjmowanie rezerwacji i zarządzanie dokumentacją podróży.",
                    "en" => "Handling reservations and managing travel documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20312,
                "name" => json_encode([
                    "pl" => "Współpraca z touroperatorami i negocjowanie warunków umów.",
                    "en" => "Collaborating with tour operators and negotiating contract terms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20313,
                "name" => json_encode([
                    "pl" => "Przygotowywanie ofert i promocji turystycznych.",
                    "en" => "Preparing travel offers and promotions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20314,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów dotyczących organizacji podróży.",
                    "en" => "Complying with regulations regarding travel arrangements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20315,
                "name" => json_encode([
                    "pl" => "Obsługa klientów telefonicznie i mailowo.",
                    "en" => "Providing customer service via phone and email."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20316,
                "name" => json_encode([
                    "pl" => "Monitorowanie rynku turystycznego i aktualizowanie oferty.",
                    "en" => "Monitoring the tourism market and updating offerings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20317,
                "name" => json_encode([
                    "pl" => "Utrzymywanie relacji z klientami i budowanie bazy stałych klientów.",
                    "en" => "Maintaining client relationships and building a base of regular customers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $REZYDENT_BIURA_TURYSTYCZNEGO = [
            [
                "id" => 20318,
                "name" => json_encode([
                    "pl" => "Opieka nad turystami na miejscu w kraju docelowym.",
                    "en" => "Taking care of tourists on-site in the destination country."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20319,
                "name" => json_encode([
                    "pl" => "Organizowanie transferów, wycieczek fakultatywnych i atrakcji dla gości.",
                    "en" => "Organizing transfers, optional excursions, and attractions for guests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20320,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów i pomoc turystom w sytuacjach awaryjnych.",
                    "en" => "Solving problems and assisting tourists in emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20321,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o regionie, atrakcjach i kulturze.",
                    "en" => "Providing information about the region, attractions, and culture."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20322,
                "name" => json_encode([
                    "pl" => "Współpraca z hotelami, przewoźnikami i lokalnymi dostawcami usług.",
                    "en" => "Cooperating with hotels, transport providers, and local service suppliers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20323,
                "name" => json_encode([
                    "pl" => "Prowadzenie spotkań informacyjnych dla grup turystycznych.",
                    "en" => "Conducting informational meetings for tourist groups."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20324,
                "name" => json_encode([
                    "pl" => "Przyjmowanie i realizacja skarg oraz reklamacji turystów.",
                    "en" => "Receiving and handling tourist complaints and claims."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20325,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów z pobytu i działalności na miejscu.",
                    "en" => "Creating reports on the stay and activities on-site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20326,
                "name" => json_encode([
                    "pl" => "Dbanie o pozytywny wizerunek biura podróży.",
                    "en" => "Maintaining a positive image of the travel agency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_OBSLUGI_TURYSTYCZNEJ = [
            [
                "id" => 20327,
                "name" => json_encode([
                    "pl" => "Organizowanie i koordynowanie usług turystycznych.",
                    "en" => "Organizing and coordinating tourism services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20328,
                "name" => json_encode([
                    "pl" => "Przygotowywanie ofert wycieczek, wyjazdów i eventów dla klientów.",
                    "en" => "Preparing offers for trips, excursions, and events for clients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20329,
                "name" => json_encode([
                    "pl" => "Nadzorowanie rezerwacji hoteli, transportu i biletów wstępu.",
                    "en" => "Overseeing hotel, transport, and entrance ticket reservations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20330,
                "name" => json_encode([
                    "pl" => "Obsługa klienta i doradzanie w wyborze atrakcji turystycznych.",
                    "en" => "Customer service and advising on the selection of tourist attractions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20331,
                "name" => json_encode([
                    "pl" => "Tworzenie planów wycieczek i programów turystycznych.",
                    "en" => "Creating itineraries and tourism programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20332,
                "name" => json_encode([
                    "pl" => "Współpraca z przewodnikami, hotelami i dostawcami usług turystycznych.",
                    "en" => "Collaborating with guides, hotels, and tourism service providers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20333,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z organizacją wycieczek.",
                    "en" => "Maintaining documentation related to trip organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20334,
                "name" => json_encode([
                    "pl" => "Dbanie o przestrzeganie przepisów dotyczących usług turystycznych.",
                    "en" => "Ensuring compliance with regulations regarding tourism services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20335,
                "name" => json_encode([
                    "pl" => "Promowanie i sprzedaż usług turystycznych.",
                    "en" => "Promoting and selling tourism services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ORGANIZACJI_TURYSTYKI = [
            [
                "id" => 20336,
                "name" => json_encode([
                    "pl" => "Planowanie i organizowanie wyjazdów turystycznych oraz wydarzeń.",
                    "en" => "Planning and organizing tourist trips and events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20337,
                "name" => json_encode([
                    "pl" => "Koordynowanie rezerwacji hoteli, transportu i atrakcji dla klientów.",
                    "en" => "Coordinating hotel, transport, and attraction reservations for clients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20338,
                "name" => json_encode([
                    "pl" => "Tworzenie ofert turystycznych i pakietów wyjazdowych.",
                    "en" => "Creating tourist offers and travel packages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20339,
                "name" => json_encode([
                    "pl" => "Monitorowanie i analiza rynku turystycznego oraz trendów w branży.",
                    "en" => "Monitoring and analyzing the tourism market and industry trends."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20340,
                "name" => json_encode([
                    "pl" => "Obsługa klienta i doradztwo w zakresie podróży.",
                    "en" => "Customer service and travel advice."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20341,
                "name" => json_encode([
                    "pl" => "Współpraca z partnerami biznesowymi i negocjowanie warunków umów.",
                    "en" => "Collaborating with business partners and negotiating contract terms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20342,
                "name" => json_encode([
                    "pl" => "Prowadzenie ewidencji rezerwacji i dokumentacji podróży.",
                    "en" => "Maintaining reservation records and travel documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20343,
                "name" => json_encode([
                    "pl" => "Organizowanie wydarzeń promujących usługi turystyczne.",
                    "en" => "Organizing events to promote tourism services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20344,
                "name" => json_encode([
                    "pl" => "Wspieranie działań marketingowych biura podróży.",
                    "en" => "Supporting the marketing activities of the travel agency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNICY_BIUR_INFORMACJI = [
            [
                "id" => 20345,
                "name" => json_encode([
                    "pl" => "Udzielanie informacji turystom i mieszkańcom o atrakcjach, wydarzeniach i usługach.",
                    "en" => "Providing information to tourists and residents about attractions, events, and services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20346,
                "name" => json_encode([
                    "pl" => "Dystrybucja materiałów promocyjnych, map i przewodników.",
                    "en" => "Distributing promotional materials, maps, and guides."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20347,
                "name" => json_encode([
                    "pl" => "Pomoc w rezerwacji biletów na atrakcje turystyczne i wydarzenia.",
                    "en" => "Assisting with booking tickets for tourist attractions and events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20348,
                "name" => json_encode([
                    "pl" => "Obsługa zapytań telefonicznych, mailowych i bezpośrednich.",
                    "en" => "Handling telephone, email, and in-person inquiries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20349,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad gościnności i zapewnienie wysokiego standardu obsługi.",
                    "en" => "Adhering to hospitality principles and ensuring high-quality service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20350,
                "name" => json_encode([
                    "pl" => "Aktualizowanie baz danych informacji turystycznych.",
                    "en" => "Updating databases of tourist information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20351,
                "name" => json_encode([
                    "pl" => "Współpraca z lokalnymi atrakcjami i organizatorami wydarzeń.",
                    "en" => "Collaborating with local attractions and event organizers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20352,
                "name" => json_encode([
                    "pl" => "Organizowanie i prowadzenie wycieczek po regionie.",
                    "en" => "Organizing and leading tours around the region."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20353,
                "name" => json_encode([
                    "pl" => "Dbanie o porządek w biurze informacji turystycznej.",
                    "en" => "Maintaining cleanliness and order in the tourist information office."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_HOTELARSTWA = [
            [
                "id" => 20354,
                "name" => json_encode([
                    "pl" => "Zarządzanie rezerwacjami i obsługa systemów hotelowych.",
                    "en" => "Managing reservations and operating hotel systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20355,
                "name" => json_encode([
                    "pl" => "Rejestrowanie gości i przydzielanie pokoi w hotelu.",
                    "en" => "Registering guests and assigning hotel rooms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20356,
                "name" => json_encode([
                    "pl" => "Obsługa klientów oraz udzielanie informacji o usługach hotelowych.",
                    "en" => "Serving customers and providing information about hotel services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20357,
                "name" => json_encode([
                    "pl" => "Nadzór nad porządkiem i standardem pokoi hotelowych.",
                    "en" => "Overseeing cleanliness and standards of hotel rooms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20358,
                "name" => json_encode([
                    "pl" => "Przygotowywanie ofert i pakietów specjalnych dla gości.",
                    "en" => "Preparing special offers and packages for guests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20359,
                "name" => json_encode([
                    "pl" => "Współpraca z działem gastronomii i eventów w hotelu.",
                    "en" => "Collaborating with the gastronomy and events department in the hotel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20360,
                "name" => json_encode([
                    "pl" => "Rozpatrywanie skarg i rozwiązywanie problemów gości.",
                    "en" => "Handling complaints and resolving guest issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20361,
                "name" => json_encode([
                    "pl" => "Udział w organizacji konferencji, wesel i innych wydarzeń hotelowych.",
                    "en" => "Participating in the organization of conferences, weddings, and other hotel events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20362,
                "name" => json_encode([
                    "pl" => "Dbanie o pozytywny wizerunek hotelu i wysoki standard obsługi.",
                    "en" => "Maintaining the hotel's positive image and high service standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRZEWODNICY_TURYSTYCZNI_I_PILOCI_WYCIECZEK = [
            [
                "id" => 20363,
                "name" => json_encode([
                    "pl" => "Prowadzenie wycieczek i oprowadzanie turystów po atrakcjach turystycznych.",
                    "en" => "Guiding tours and showing tourists around attractions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20364,
                "name" => json_encode([
                    "pl" => "Opowiadanie o historii, kulturze i ciekawostkach związanych z danym miejscem.",
                    "en" => "Narrating the history, culture, and interesting facts about the location."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20365,
                "name" => json_encode([
                    "pl" => "Planowanie trasy wycieczek i zapewnienie bezpieczeństwa grupy.",
                    "en" => "Planning tour routes and ensuring group safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20366,
                "name" => json_encode([
                    "pl" => "Koordynacja transportu i organizacja czasu wolnego dla turystów.",
                    "en" => "Coordinating transportation and organizing leisure time for tourists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20367,
                "name" => json_encode([
                    "pl" => "Odpowiadanie na pytania i reagowanie na potrzeby uczestników wycieczki.",
                    "en" => "Answering questions and responding to the needs of tour participants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20368,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów i reagowanie na sytuacje awaryjne.",
                    "en" => "Solving problems and responding to emergencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20369,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji wycieczek i raportowanie do biura podróży.",
                    "en" => "Keeping tour records and reporting to the travel agency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20370,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad etyki przewodnickiej i poszanowania lokalnych tradycji.",
                    "en" => "Adhering to guiding ethics and respecting local traditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20371,
                "name" => json_encode([
                    "pl" => "Organizowanie atrakcji dodatkowych w trakcie wycieczki.",
                    "en" => "Organizing additional attractions during the tour."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TURYSTYKI_WIEJSKIEJ = [
            [
                "id" => 20372,
                "name" => json_encode([
                    "pl" => "Promowanie i organizowanie turystyki w regionach wiejskich.",
                    "en" => "Promoting and organizing tourism in rural regions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20373,
                "name" => json_encode([
                    "pl" => "Przygotowywanie ofert agroturystycznych i atrakcji regionalnych.",
                    "en" => "Preparing agritourism offers and regional attractions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20374,
                "name" => json_encode([
                    "pl" => "Organizacja wycieczek po terenach wiejskich i warsztatów edukacyjnych.",
                    "en" => "Organizing tours in rural areas and educational workshops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20375,
                "name" => json_encode([
                    "pl" => "Współpraca z lokalnymi rolnikami i dostawcami usług turystycznych.",
                    "en" => "Collaborating with local farmers and tourism service providers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20376,
                "name" => json_encode([
                    "pl" => "Obsługa rezerwacji i dbanie o zadowolenie turystów.",
                    "en" => "Handling reservations and ensuring tourist satisfaction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20377,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad ochrony środowiska i promowanie turystyki ekologicznej.",
                    "en" => "Adhering to environmental protection rules and promoting eco-friendly tourism."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20378,
                "name" => json_encode([
                    "pl" => "Tworzenie materiałów promocyjnych i organizacja kampanii marketingowych.",
                    "en" => "Creating promotional materials and organizing marketing campaigns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20379,
                "name" => json_encode([
                    "pl" => "Organizowanie festiwali, targów i wydarzeń kulturalnych na wsi.",
                    "en" => "Organizing festivals, fairs, and cultural events in the countryside."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20380,
                "name" => json_encode([
                    "pl" => "Wspieranie rozwoju turystyki w regionie poprzez współpracę z lokalnymi organizacjami.",
                    "en" => "Supporting tourism development in the region by collaborating with local organizations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];



        DB::table('detail_projects')->insert(array_merge(
            $ORGANIZATOR_USLUG_KATERINGOWYCH,
            $SZEF_KUCHNI,
            $TECHNIK_ZYWIENIA_I_USLUG_GASTRONOMICZNYCH,
            $KUCHARZE,
            $POMOCE_KUCHENNE,
            $WYDAWCY_POSILKOW,
            $PRACOWNICY_PRZYGOTOWUJACY_POSILKI_FAST_FOOD,
            $KELNERZY,
            $BARISTA,
            $BARMAN,
            $SOMMELIER,
            $SPECJALISTA_DO_SPRAW_ORGANIZACJI_USLUG,
            $PRACOWNIK_BIURA_PODROZY,
            $REZYDENT_BIURA_TURYSTYCZNEGO,
            $TECHNIK_OBSLUGI_TURYSTYCZNEJ,
            $TECHNIK_ORGANIZACJI_TURYSTYKI,
            $PRACOWNICY_BIUR_INFORMACJI,
            $TECHNIK_HOTELARSTWA,
            $PRZEWODNICY_TURYSTYCZNI_I_PILOCI_WYCIECZEK,
            $TECHNIK_TURYSTYKI_WIEJSKIEJ
        ));

        Category::whereId('2832')->first()->detailprojects()->attach(collect($ORGANIZATOR_USLUG_KATERINGOWYCH)->pluck('id')->toArray());
        Category::whereId('2833')->first()->detailprojects()->attach(collect($SZEF_KUCHNI)->pluck('id')->toArray());
        Category::whereId('2834')->first()->detailprojects()->attach(collect($TECHNIK_ZYWIENIA_I_USLUG_GASTRONOMICZNYCH)->pluck('id')->toArray());
        Category::whereId('2837')->first()->detailprojects()->attach(collect($KUCHARZE)->pluck('id')->toArray());
        Category::whereId('2842')->first()->detailprojects()->attach(collect($POMOCE_KUCHENNE)->pluck('id')->toArray());
        Category::whereId('2846')->first()->detailprojects()->attach(collect($WYDAWCY_POSILKOW)->pluck('id')->toArray());
        Category::whereId('2847')->first()->detailprojects()->attach(collect($PRACOWNICY_PRZYGOTOWUJACY_POSILKI_FAST_FOOD)->pluck('id')->toArray());
        Category::whereId('2849')->first()->detailprojects()->attach(collect($KELNERZY)->pluck('id')->toArray());
        Category::whereId('2853')->first()->detailprojects()->attach(collect($BARISTA)->pluck('id')->toArray());
        Category::whereId('2854')->first()->detailprojects()->attach(collect($BARMAN)->pluck('id')->toArray());
        Category::whereId('2855')->first()->detailprojects()->attach(collect($SOMMELIER)->pluck('id')->toArray());
        Category::whereId('2858')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_ORGANIZACJI_USLUG)->pluck('id')->toArray());
        Category::whereId('2860')->first()->detailprojects()->attach(collect($PRACOWNIK_BIURA_PODROZY)->pluck('id')->toArray());
        Category::whereId('2861')->first()->detailprojects()->attach(collect($REZYDENT_BIURA_TURYSTYCZNEGO)->pluck('id')->toArray());
        Category::whereId('2862')->first()->detailprojects()->attach(collect($TECHNIK_OBSLUGI_TURYSTYCZNEJ)->pluck('id')->toArray());
        Category::whereId('2864')->first()->detailprojects()->attach(collect($TECHNIK_ORGANIZACJI_TURYSTYKI)->pluck('id')->toArray());
        Category::whereId('2865')->first()->detailprojects()->attach(collect($PRACOWNICY_BIUR_INFORMACJI)->pluck('id')->toArray());
        Category::whereId('2869')->first()->detailprojects()->attach(collect($TECHNIK_HOTELARSTWA)->pluck('id')->toArray());
        Category::whereId('2870')->first()->detailprojects()->attach(collect($PRZEWODNICY_TURYSTYCZNI_I_PILOCI_WYCIECZEK)->pluck('id')->toArray());
        Category::whereId('2876')->first()->detailprojects()->attach(collect($TECHNIK_TURYSTYKI_WIEJSKIEJ)->pluck('id')->toArray());
    }
}

