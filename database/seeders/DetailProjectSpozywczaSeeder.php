<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectSpozywczaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();

        $INZYNIER_TECHNOLOGII_ZYWNOSCI = [

            [
                "id" => 19814,
                "name" => json_encode([
                    "pl" => "Projektowanie i optymalizacja procesów produkcji żywności.",
                    "en" => "Designing and optimizing food production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19815,
                "name" => json_encode([
                    "pl" => "Opracowywanie nowych produktów spożywczych i receptur.",
                    "en" => "Developing new food products and recipes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19816,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców oraz gotowych wyrobów spożywczych.",
                    "en" => "Quality control of raw materials and finished food products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19817,
                "name" => json_encode([
                    "pl" => "Wdrażanie systemów zarządzania jakością (HACCP, ISO) w zakładach produkcyjnych.",
                    "en" => "Implementing quality management systems (HACCP, ISO) in production facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19818,
                "name" => json_encode([
                    "pl" => "Analiza składu chemicznego żywności i jej wartości odżywczych.",
                    "en" => "Analyzing the chemical composition and nutritional value of food."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19819,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów technologicznych i przestrzeganie przepisów sanitarnych.",
                    "en" => "Supervising technological processes and ensuring compliance with sanitary regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19820,
                "name" => json_encode([
                    "pl" => "Współpraca z działami badań i rozwoju oraz produkcji.",
                    "en" => "Collaborating with research and development and production departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19821,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań i testów związanych z trwałością i bezpieczeństwem produktów.",
                    "en" => "Conducting research and tests related to product shelf life and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19822,
                "name" => json_encode([
                    "pl" => "Optymalizacja zużycia surowców i minimalizacja odpadów produkcyjnych.",
                    "en" => "Optimizing raw material usage and minimizing production waste."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DIETETYCY_I_SPECJALISCI_DO_SPRAW_ZYWIENIA = [

            [
                "id" => 19823,
                "name" => json_encode([
                    "pl" => "Opracowywanie indywidualnych planów dietetycznych.",
                    "en" => "Developing individualized dietary plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19824,
                "name" => json_encode([
                    "pl" => "Doradztwo żywieniowe w zakresie zdrowego stylu życia.",
                    "en" => "Providing nutritional advice for a healthy lifestyle."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19825,
                "name" => json_encode([
                    "pl" => "Edukacja pacjentów na temat zasad zdrowego żywienia.",
                    "en" => "Educating patients on the principles of healthy eating."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19826,
                "name" => json_encode([
                    "pl" => "Współpraca z lekarzami i innymi specjalistami w leczeniu dietozależnych schorzeń.",
                    "en" => "Collaborating with doctors and other specialists in treating diet-related conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19827,
                "name" => json_encode([
                    "pl" => "Analiza stanu odżywienia pacjentów i ocena ich potrzeb dietetycznych.",
                    "en" => "Analyzing patients' nutritional status and assessing their dietary needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19828,
                "name" => json_encode([
                    "pl" => "Prowadzenie badań i analiz dotyczących wpływu diety na zdrowie.",
                    "en" => "Conducting research and analyses on the impact of diet on health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19829,
                "name" => json_encode([
                    "pl" => "Organizowanie warsztatów i kampanii edukacyjnych na temat zdrowego odżywiania.",
                    "en" => "Organizing workshops and educational campaigns on healthy eating."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19830,
                "name" => json_encode([
                    "pl" => "Monitorowanie postępów pacjentów i wprowadzanie modyfikacji w dietach.",
                    "en" => "Monitoring patients' progress and making modifications to their diets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19831,
                "name" => json_encode([
                    "pl" => "Tworzenie materiałów edukacyjnych i informacyjnych na temat żywienia.",
                    "en" => "Creating educational and informational materials on nutrition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNICY_TECHNOLOGII_ZYWNOSCI = [

            [
                "id" => 19832,
                "name" => json_encode([
                    "pl" => "Wspieranie inżynierów w opracowywaniu procesów produkcji żywności.",
                    "en" => "Supporting engineers in developing food production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19833,
                "name" => json_encode([
                    "pl" => "Nadzór nad urządzeniami technologicznymi i kontrola ich pracy.",
                    "en" => "Supervising technological equipment and monitoring its operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19834,
                "name" => json_encode([
                    "pl" => "Pobieranie próbek surowców i produktów do analizy jakościowej.",
                    "en" => "Collecting samples of raw materials and products for quality analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19835,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów laboratoryjnych w celu sprawdzenia jakości żywności.",
                    "en" => "Conducting laboratory tests to verify food quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19836,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm sanitarnych i zasad bezpieczeństwa w zakładach spożywczych.",
                    "en" => "Adhering to sanitary standards and safety rules in food production facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19837,
                "name" => json_encode([
                    "pl" => "Opracowywanie raportów i dokumentacji technologicznej.",
                    "en" => "Preparing reports and technological documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19838,
                "name" => json_encode([
                    "pl" => "Wdrażanie procedur zapewniających bezpieczeństwo żywności.",
                    "en" => "Implementing procedures to ensure food safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19839,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów procesów technologicznych.",
                    "en" => "Monitoring parameters of technological processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19840,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem produkcyjnym w celu zapewnienia ciągłości produkcji.",
                    "en" => "Collaborating with the production team to ensure production continuity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DIETETYCY_I_ZYWIENIOWCY = [

            [
                "id" => 19841,
                "name" => json_encode([
                    "pl" => "Opracowywanie diet i jadłospisów dostosowanych do potrzeb pacjentów.",
                    "en" => "Developing diets and meal plans tailored to patients' needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19842,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konsultacji żywieniowych i ocena nawyków żywieniowych.",
                    "en" => "Conducting nutritional consultations and assessing dietary habits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19843,
                "name" => json_encode([
                    "pl" => "Promowanie zdrowego stylu życia poprzez edukację żywieniową.",
                    "en" => "Promoting a healthy lifestyle through nutritional education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19844,
                "name" => json_encode([
                    "pl" => "Analiza składników odżywczych i opracowywanie zbilansowanych diet.",
                    "en" => "Analyzing nutrients and developing balanced diets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19845,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie diety w przypadku chorób metabolicznych i innych schorzeń.",
                    "en" => "Providing dietary advice for metabolic and other health conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19846,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami zdrowia publicznego i organizacjami promującymi zdrowie.",
                    "en" => "Collaborating with public health institutions and organizations promoting health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19847,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie wykładów i szkoleń na temat zdrowego odżywiania.",
                    "en" => "Conducting lectures and training sessions on healthy eating."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19848,
                "name" => json_encode([
                    "pl" => "Monitorowanie trendów w dietetyce i żywieniu.",
                    "en" => "Monitoring trends in dietetics and nutrition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19849,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań dotyczących wpływu diety na zdrowie człowieka.",
                    "en" => "Conducting research on the impact of diet on human health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GARMAZER = [

            [
                "id" => 19850,
                "name" => json_encode([
                    "pl" => "Przygotowywanie półproduktów i dań gotowych, takich jak sałatki, pierogi, kotlety.",
                    "en" => "Preparing semi-finished products and ready-to-eat dishes such as salads, dumplings, and cutlets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19851,
                "name" => json_encode([
                    "pl" => "Obróbka wstępna surowców spożywczych (mycie, krojenie, mielenie).",
                    "en" => "Preliminary processing of food ingredients (washing, chopping, grinding)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19852,
                "name" => json_encode([
                    "pl" => "Wykonywanie potraw zgodnie z recepturami i normami jakości.",
                    "en" => "Preparing dishes according to recipes and quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19853,
                "name" => json_encode([
                    "pl" => "Kontrola świeżości i jakości używanych surowców.",
                    "en" => "Checking the freshness and quality of used ingredients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19854,
                "name" => json_encode([
                    "pl" => "Pakowanie i oznaczanie wyrobów gotowych do sprzedaży.",
                    "en" => "Packaging and labeling finished products for sale."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19855,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad higieny i bezpieczeństwa pracy.",
                    "en" => "Adhering to hygiene and workplace safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19856,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami kuchni i zespołu produkcyjnego.",
                    "en" => "Collaborating with other kitchen staff and production team members."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19857,
                "name" => json_encode([
                    "pl" => "Przechowywanie surowców i produktów zgodnie z zasadami HACCP.",
                    "en" => "Storing raw materials and products in accordance with HACCP principles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19858,
                "name" => json_encode([
                    "pl" => "Dbałość o czystość stanowiska pracy i narzędzi kuchennych.",
                    "en" => "Maintaining cleanliness of the workspace and kitchen tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $PRACOWNIK_ROZBIORU_MIESA = [

            [
                "id" => 19859,
                "name" => json_encode([
                    "pl" => "Wykonywanie rozbioru i wykrawania tusz mięsnych.",
                    "en" => "Performing cutting and carving of meat carcasses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19860,
                "name" => json_encode([
                    "pl" => "Obróbka mięsa zgodnie z zamówieniami i specyfikacjami.",
                    "en" => "Processing meat according to orders and specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19861,
                "name" => json_encode([
                    "pl" => "Utrzymanie higieny i czystości na stanowisku pracy.",
                    "en" => "Maintaining hygiene and cleanliness at the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19862,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm sanitarnych i zasad BHP w przetwórstwie mięsnym.",
                    "en" => "Adhering to sanitary standards and health and safety regulations in meat processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19863,
                "name" => json_encode([
                    "pl" => "Odpowiednie klasyfikowanie i porcjowanie mięsa.",
                    "en" => "Properly classifying and portioning meat."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19864,
                "name" => json_encode([
                    "pl" => "Utrzymywanie narzędzi do rozbioru w dobrym stanie technicznym.",
                    "en" => "Maintaining cutting tools in good technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19865,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem produkcyjnym w celu realizacji zamówień.",
                    "en" => "Collaborating with the production team to fulfill orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19866,
                "name" => json_encode([
                    "pl" => "Odpowiedzialność za jakość i świeżość mięsa.",
                    "en" => "Ensuring the quality and freshness of meat."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19867,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do cięcia i rozbioru mięsa.",
                    "en" => "Operating machines for cutting and processing meat."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $PRZETWORCA_RYB = [

            [
                "id" => 19868,
                "name" => json_encode([
                    "pl" => "Obróbka ryb, w tym patroszenie, filetowanie i przygotowywanie do sprzedaży.",
                    "en" => "Processing fish, including gutting, filleting, and preparing for sale."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19869,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców rybnych i przestrzeganie norm sanitarnych.",
                    "en" => "Quality control of fish raw materials and compliance with sanitary standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19870,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad higieny i bezpieczeństwa pracy w zakładzie przetwórczym.",
                    "en" => "Adhering to hygiene and workplace safety standards in the processing plant."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19871,
                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji w celu realizacji zamówień.",
                    "en" => "Collaborating with the production department to fulfill orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19872,
                "name" => json_encode([
                    "pl" => "Pakowanie i oznaczanie gotowych produktów rybnych.",
                    "en" => "Packaging and labeling finished fish products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19873,
                "name" => json_encode([
                    "pl" => "Przechowywanie ryb w odpowiednich warunkach chłodniczych.",
                    "en" => "Storing fish in appropriate refrigeration conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19874,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń do przetwórstwa rybnego.",
                    "en" => "Operating machines and equipment for fish processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19875,
                "name" => json_encode([
                    "pl" => "Dbanie o czystość stanowiska pracy i narzędzi.",
                    "en" => "Maintaining cleanliness of the workstation and tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19876,
                "name" => json_encode([
                    "pl" => "Przygotowywanie produktów zgodnie z recepturami i wytycznymi.",
                    "en" => "Preparing products according to recipes and guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $RZEZNIK_WEDLINIARZ = [

            [
                "id" => 19877,
                "name" => json_encode([
                    "pl" => "Wykonywanie rozbioru mięsa i przygotowywanie surowców do produkcji wędlin.",
                    "en" => "Carrying out meat cutting and preparing raw materials for sausage production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19878,
                "name" => json_encode([
                    "pl" => "Produkcja wyrobów mięsnych, takich jak kiełbasy, szynki, pasztety.",
                    "en" => "Producing meat products such as sausages, hams, and pâtés."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19879,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń wędzarniczych i kontrola procesów wędzenia.",
                    "en" => "Operating smoking devices and monitoring smoking processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19880,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców i gotowych wyrobów mięsnych.",
                    "en" => "Quality control of raw materials and finished meat products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19881,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm sanitarnych i zasad bezpieczeństwa w pracy z mięsem.",
                    "en" => "Adhering to sanitary standards and safety rules in meat processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19882,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac konserwacyjnych przy sprzęcie do produkcji wędlin.",
                    "en" => "Performing maintenance on equipment used for sausage production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19883,
                "name" => json_encode([
                    "pl" => "Przygotowywanie mieszanki przypraw i marynat do wyrobów mięsnych.",
                    "en" => "Preparing spice mixes and marinades for meat products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19884,
                "name" => json_encode([
                    "pl" => "Przechowywanie surowców i produktów w odpowiednich warunkach.",
                    "en" => "Storing raw materials and products under appropriate conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19885,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem w celu realizacji zamówień i produkcji.",
                    "en" => "Collaborating with the team to fulfill orders and production tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $UBOJOWY = [

            [
                "id" => 19886,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac związanych z ubojem zwierząt rzeźnych.",
                    "en" => "Performing tasks related to the slaughter of livestock."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19887,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad humanitarnego traktowania zwierząt przed ubojem.",
                    "en" => "Adhering to humane treatment standards for animals before slaughter."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19888,
                "name" => json_encode([
                    "pl" => "Obróbka tusz i przygotowywanie ich do dalszej produkcji.",
                    "en" => "Processing carcasses and preparing them for further production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19889,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do uboju i rozbioru mięsa.",
                    "en" => "Operating slaughter and meat cutting equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19890,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm sanitarnych i procedur BHP.",
                    "en" => "Complying with sanitary standards and occupational health and safety procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19891,
                "name" => json_encode([
                    "pl" => "Dbanie o czystość i higienę na stanowisku pracy.",
                    "en" => "Maintaining cleanliness and hygiene at the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19892,
                "name" => json_encode([
                    "pl" => "Segregowanie i przechowywanie mięsa oraz produktów ubocznych.",
                    "en" => "Sorting and storing meat and by-products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19893,
                "name" => json_encode([
                    "pl" => "Kontrola jakości mięsa po uboju.",
                    "en" => "Inspecting meat quality after slaughter."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19894,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem produkcyjnym w celu utrzymania ciągłości pracy.",
                    "en" => "Collaborating with the production team to maintain workflow continuity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $PRZETWORCA_MIESA = [

            [
                "id" => 19895,
                "name" => json_encode([
                    "pl" => "Obróbka mięsa i przygotowywanie produktów mięsnych do sprzedaży.",
                    "en" => "Processing meat and preparing meat products for sale."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19896,
                "name" => json_encode([
                    "pl" => "Produkcja wyrobów mięsnych, takich jak kiełbasy, szynki, konserwy.",
                    "en" => "Producing meat products such as sausages, hams, and canned goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19897,
                "name" => json_encode([
                    "pl" => "Przestrzeganie receptur i norm jakościowych w przetwórstwie mięsa.",
                    "en" => "Adhering to recipes and quality standards in meat processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19898,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców i gotowych wyrobów mięsnych.",
                    "en" => "Quality control of raw materials and finished meat products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19899,
                "name" => json_encode([
                    "pl" => "Utrzymywanie higieny i czystości na stanowisku pracy.",
                    "en" => "Maintaining hygiene and cleanliness at the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19900,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń do przetwórstwa mięsa.",
                    "en" => "Operating machines and equipment for meat processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19901,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP i przepisów sanitarnych.",
                    "en" => "Complying with occupational health and safety rules and sanitary regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19902,
                "name" => json_encode([
                    "pl" => "Pakowanie i magazynowanie gotowych produktów mięsnych.",
                    "en" => "Packaging and storing finished meat products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19903,
                "name" => json_encode([
                    "pl" => "Przygotowywanie przypraw i dodatków zgodnie z recepturami.",
                    "en" => "Preparing spices and additives according to recipes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $WEDZARZ = [

            [
                "id" => 19904,
                "name" => json_encode([
                    "pl" => "Obsługa wędzarni i nadzorowanie procesu wędzenia mięsa oraz ryb.",
                    "en" => "Operating the smokehouse and supervising the smoking process of meat and fish."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19905,
                "name" => json_encode([
                    "pl" => "Przygotowywanie surowców do wędzenia (solenie, marynowanie).",
                    "en" => "Preparing raw materials for smoking (salting, marinating)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19906,
                "name" => json_encode([
                    "pl" => "Kontrola temperatury i czasu wędzenia dla uzyskania pożądanego smaku.",
                    "en" => "Controlling temperature and smoking time to achieve the desired flavor."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19907,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm sanitarnych i zasad BHP w pracy.",
                    "en" => "Adhering to sanitary standards and occupational health and safety rules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19908,
                "name" => json_encode([
                    "pl" => "Pakowanie i przechowywanie wędzonych produktów.",
                    "en" => "Packaging and storing smoked products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19909,
                "name" => json_encode([
                    "pl" => "Utrzymanie wędzarni i narzędzi w czystości.",
                    "en" => "Maintaining cleanliness of the smokehouse and tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19910,
                "name" => json_encode([
                    "pl" => "Sprawdzanie jakości i świeżości surowców przed wędzeniem.",
                    "en" => "Checking the quality and freshness of raw materials before smoking."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19911,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami zakładu produkcyjnego.",
                    "en" => "Collaborating with other employees in the production facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19912,
                "name" => json_encode([
                    "pl" => "Dbanie o odpowiedni smak, aromat i wygląd wyrobów wędzonych.",
                    "en" => "Ensuring the appropriate taste, aroma, and appearance of smoked products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $PATROSZACZ_RYB = [

            [
                "id" => 19913,
                "name" => json_encode([
                    "pl" => "Patroszenie i oczyszczanie ryb przed dalszym przetwarzaniem.",
                    "en" => "Gut and clean fish before further processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19914,
                "name" => json_encode([
                    "pl" => "Usuwanie wnętrzności, łusek i niepożądanych części ryb.",
                    "en" => "Remove entrails, scales, and unwanted parts of fish."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19915,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad higieny i norm sanitarnych podczas pracy.",
                    "en" => "Follow hygiene rules and sanitary standards during work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19916,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku i czystości na stanowisku pracy.",
                    "en" => "Maintain order and cleanliness at the workstation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19917,
                "name" => json_encode([
                    "pl" => "Sprawdzanie jakości ryb przed i po patroszeniu.",
                    "en" => "Inspect the quality of fish before and after gutting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19918,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi do obróbki ryb, takich jak noże i skrobaki.",
                    "en" => "Operate fish processing tools such as knives and scrapers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19919,
                "name" => json_encode([
                    "pl" => "Praca w zespole i współpraca z innymi pracownikami produkcji.",
                    "en" => "Work in a team and collaborate with other production staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19920,
                "name" => json_encode([
                    "pl" => "Dbanie o odpowiednie przechowywanie i chłodzenie ryb.",
                    "en" => "Ensure proper storage and cooling of fish."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19921,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej ilości i jakości patroszonych ryb.",
                    "en" => "Maintain records on the quantity and quality of gutted fish."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $PIEKARZ = [

            [
                "id" => 19922,
                "name" => json_encode([
                    "pl" => "Przygotowywanie ciast na pieczywo według receptur.",
                    "en" => "Preparing dough for bread according to recipes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19923,
                "name" => json_encode([
                    "pl" => "Wypiek chleba, bułek i innych wyrobów piekarniczych.",
                    "en" => "Baking bread, rolls, and other bakery products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19924,
                "name" => json_encode([
                    "pl" => "Obsługa pieców i maszyn do wypieku.",
                    "en" => "Operating ovens and baking machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19925,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców i gotowych produktów.",
                    "en" => "Controlling the quality of raw materials and finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19926,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm higieny i bezpieczeństwa pracy.",
                    "en" => "Adhering to hygiene and workplace safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19927,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych przepisów i technik wypieku.",
                    "en" => "Implementing new recipes and baking techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19928,
                "name" => json_encode([
                    "pl" => "Pakowanie i przygotowywanie wyrobów do sprzedaży.",
                    "en" => "Packing and preparing products for sale."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19929,
                "name" => json_encode([
                    "pl" => "Dbanie o czystość stanowiska pracy i urządzeń piekarniczych.",
                    "en" => "Maintaining cleanliness of the workspace and bakery equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19930,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem w celu realizacji zamówień.",
                    "en" => "Collaborating with the team to fulfill orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $POMOCNIK_PIEKARZA = [

            [
                "id" => 19931,
                "name" => json_encode([
                    "pl" => "Wspieranie piekarza w przygotowywaniu ciast i wyrobów piekarniczych.",
                    "en" => "Assisting the baker in preparing dough and bakery products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19932,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do mieszania ciasta i urządzeń pomocniczych.",
                    "en" => "Operating dough mixers and auxiliary equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19933,
                "name" => json_encode([
                    "pl" => "Przygotowywanie składników i ich odmierzanie według receptur.",
                    "en" => "Preparing and measuring ingredients according to recipes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19934,
                "name" => json_encode([
                    "pl" => "Pomoc w wypieku pieczywa i kontrola pieców.",
                    "en" => "Assisting in bread baking and monitoring ovens."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19935,
                "name" => json_encode([
                    "pl" => "Dbanie o czystość stanowiska pracy i narzędzi piekarniczych.",
                    "en" => "Maintaining cleanliness of the workspace and bakery tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19936,
                "name" => json_encode([
                    "pl" => "Pakowanie gotowych wyrobów i ich przygotowywanie do sprzedaży.",
                    "en" => "Packing finished products and preparing them for sale."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19937,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad higieny i bezpieczeństwa w pracy.",
                    "en" => "Following hygiene and safety rules at work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19938,
                "name" => json_encode([
                    "pl" => "Segregowanie i przechowywanie surowców spożywczych.",
                    "en" => "Sorting and storing food raw materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19939,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w piekarni.",
                    "en" => "Maintaining order in the bakery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $CUKIERNIK = [

            [
                "id" => 19940,
                "name" => json_encode([
                    "pl" => "Przygotowywanie ciast, tortów, deserów i innych wyrobów cukierniczych.",
                    "en" => "Preparing cakes, tortes, desserts, and other confectionery products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19941,
                "name" => json_encode([
                    "pl" => "Dekorowanie wyrobów cukierniczych zgodnie z zamówieniami klientów.",
                    "en" => "Decorating confectionery products according to customer orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19942,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń cukierniczych, takich jak miksery, piecyki, temperówki do czekolady.",
                    "en" => "Operating confectionery equipment such as mixers, ovens, and chocolate tempering machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19943,
                "name" => json_encode([
                    "pl" => "Opracowywanie nowych przepisów i kreowanie unikalnych deserów.",
                    "en" => "Developing new recipes and creating unique desserts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19944,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców i gotowych wyrobów.",
                    "en" => "Quality control of raw materials and finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19945,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad higieny i bezpieczeństwa pracy.",
                    "en" => "Adhering to hygiene and workplace safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19946,
                "name" => json_encode([
                    "pl" => "Przechowywanie surowców w odpowiednich warunkach.",
                    "en" => "Storing raw materials under appropriate conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19947,
                "name" => json_encode([
                    "pl" => "Pakowanie i przygotowywanie wyrobów do sprzedaży.",
                    "en" => "Packing and preparing products for sale."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19948,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami w celu realizacji zamówień.",
                    "en" => "Collaborating with other staff to fulfill orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $DEKORATOR_WYROBOW_CUKIERNICZYCH = [

            [
                "id" => 19949,
                "name" => json_encode([
                    "pl" => "Dekorowanie ciast, tortów, babeczek i innych wyrobów cukierniczych.",
                    "en" => "Decorating cakes, tortes, cupcakes, and other confectionery products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19950,
                "name" => json_encode([
                    "pl" => "Wykonywanie zdobień z masy cukrowej, czekolady, marcepanu oraz innych materiałów dekoracyjnych.",
                    "en" => "Creating decorations from fondant, chocolate, marzipan, and other decorative materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19951,
                "name" => json_encode([
                    "pl" => "Tworzenie ozdób cukierniczych, takich jak kwiaty, figurki i napisy.",
                    "en" => "Designing confectionery decorations such as flowers, figurines, and inscriptions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19952,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi dekoracyjnych, takich jak rękawy cukiernicze, szpatułki i foremki.",
                    "en" => "Using decorating tools such as piping bags, spatulas, and molds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19953,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zamówień klientów i realizowanie ich pomysłów na dekoracje.",
                    "en" => "Following customer orders and implementing their ideas for decorations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19954,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad higieny i bezpieczeństwa w pracy.",
                    "en" => "Adhering to hygiene and safety standards in the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19955,
                "name" => json_encode([
                    "pl" => "Dbałość o estetykę i jakość dekorowanych wyrobów.",
                    "en" => "Ensuring the aesthetics and quality of decorated products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19956,
                "name" => json_encode([
                    "pl" => "Współpraca z cukiernikami w zakresie przygotowywania i dekorowania produktów.",
                    "en" => "Collaborating with pastry chefs in preparing and decorating products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19957,
                "name" => json_encode([
                    "pl" => "Dbanie o czystość stanowiska pracy i narzędzi dekoracyjnych.",
                    "en" => "Maintaining cleanliness of the workspace and decorating tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $KARMELARZ = [

            [
                "id" => 19958,
                "name" => json_encode([
                    "pl" => "Przygotowywanie i formowanie masy karmelowej do produkcji cukierków i lizaków.",
                    "en" => "Preparing and shaping caramel mass for the production of candies and lollipops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19959,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do podgrzewania i mieszania karmelu.",
                    "en" => "Operating equipment for heating and mixing caramel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19960,
                "name" => json_encode([
                    "pl" => "Tworzenie karmelowych dekoracji, wzorów i rzeźb cukierniczych.",
                    "en" => "Creating caramel decorations, patterns, and confectionery sculptures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19961,
                "name" => json_encode([
                    "pl" => "Kontrola jakości masy karmelowej i gotowych wyrobów.",
                    "en" => "Quality control of caramel mass and finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19962,
                "name" => json_encode([
                    "pl" => "Pakowanie i przechowywanie produktów karmelowych.",
                    "en" => "Packaging and storing caramel products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19963,
                "name" => json_encode([
                    "pl" => "Przestrzeganie receptur i norm jakościowych.",
                    "en" => "Adhering to recipes and quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19964,
                "name" => json_encode([
                    "pl" => "Utrzymanie czystości na stanowisku pracy i dbanie o sprzęt.",
                    "en" => "Maintaining cleanliness at the workplace and taking care of equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19965,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP i higieny pracy w produkcji wyrobów cukierniczych.",
                    "en" => "Following health and safety regulations and hygiene standards in confectionery production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19966,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami w celu realizacji zamówień.",
                    "en" => "Collaborating with other employees to fulfill orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $POMOCNIK_CIASTKARZA = [

            [
                "id" => 19967,
                "name" => json_encode([
                    "pl" => "Wspieranie ciastkarza w przygotowywaniu ciast, ciastek i innych wyrobów cukierniczych.",
                    "en" => "Assisting the pastry chef in preparing cakes, pastries, and other confectionery products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19968,
                "name" => json_encode([
                    "pl" => "Odmierzanie i mieszanie składników zgodnie z recepturami.",
                    "en" => "Measuring and mixing ingredients according to recipes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19969,
                "name" => json_encode([
                    "pl" => "Obsługa prostych urządzeń cukierniczych, takich jak miksery i wałkownice.",
                    "en" => "Operating basic confectionery equipment such as mixers and rolling machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19970,
                "name" => json_encode([
                    "pl" => "Przygotowywanie blach do wypieku i wykładanie ciasta.",
                    "en" => "Preparing baking trays and laying out dough."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19971,
                "name" => json_encode([
                    "pl" => "Czyszczenie i konserwacja narzędzi oraz sprzętu cukierniczego.",
                    "en" => "Cleaning and maintaining pastry tools and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19972,
                "name" => json_encode([
                    "pl" => "Pakowanie gotowych wyrobów cukierniczych.",
                    "en" => "Packaging finished confectionery products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19973,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad higieny i bezpieczeństwa pracy.",
                    "en" => "Adhering to hygiene and workplace safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19974,
                "name" => json_encode([
                    "pl" => "Dbanie o porządek i czystość w cukierni.",
                    "en" => "Maintaining cleanliness and order in the pastry kitchen."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19975,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem w celu zapewnienia ciągłości produkcji.",
                    "en" => "Collaborating with the team to ensure production continuity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $OPERATORZY_MASZYN_I_URZADZEN_DO_PRODUKCJI_WYROBOW_SPOZYWCZYCH_I_POKREWNI = [

            [
                "id" => 19976,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń stosowanych w produkcji żywności.",
                    "en" => "Operating machinery and equipment used in food production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19977,
                "name" => json_encode([
                    "pl" => "Ustawianie parametrów maszyn zgodnie z wymaganiami produkcyjnymi.",
                    "en" => "Setting machine parameters according to production requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19978,
                "name" => json_encode([
                    "pl" => "Monitorowanie pracy maszyn i przeprowadzanie kontroli jakości.",
                    "en" => "Monitoring machine operation and conducting quality checks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19979,
                "name" => json_encode([
                    "pl" => "Wykonywanie drobnych napraw i konserwacji urządzeń.",
                    "en" => "Performing minor repairs and maintenance on equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19980,
                "name" => json_encode([
                    "pl" => "Pakowanie i sortowanie gotowych produktów spożywczych.",
                    "en" => "Packaging and sorting finished food products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19981,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm sanitarnych i zasad BHP.",
                    "en" => "Adhering to sanitary standards and workplace safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19982,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przebiegu procesów produkcyjnych.",
                    "en" => "Documenting the course of production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19983,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami w celu utrzymania płynności produkcji.",
                    "en" => "Collaborating with other employees to ensure production continuity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19984,
                "name" => json_encode([
                    "pl" => "Reagowanie na awarie i usuwanie usterek w maszynach.",
                    "en" => "Responding to malfunctions and fixing issues in machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MŁYNARZ = [

            [
                "id" => 19985,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do mielenia zboża, takich jak młyny i sita.",
                    "en" => "Operating grain milling equipment, such as mills and sieves."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19986,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców (ziarna) oraz gotowych produktów (mąka, otręby).",
                    "en" => "Quality control of raw materials (grains) and finished products (flour, bran)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19987,
                "name" => json_encode([
                    "pl" => "Regulacja maszyn młynarskich i ustawianie parametrów mielenia.",
                    "en" => "Adjusting milling machines and setting milling parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19988,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu mielenia i zapewnienie ciągłości produkcji.",
                    "en" => "Monitoring the milling process and ensuring production continuity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19989,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad higieny i norm jakościowych.",
                    "en" => "Adhering to hygiene rules and quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19990,
                "name" => json_encode([
                    "pl" => "Pakowanie i magazynowanie gotowych produktów młynarskich.",
                    "en" => "Packaging and storing finished milling products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19991,
                "name" => json_encode([
                    "pl" => "Utrzymanie czystości maszyn i stanowiska pracy.",
                    "en" => "Maintaining the cleanliness of machines and the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19992,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej produkcji.",
                    "en" => "Keeping production-related documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19993,
                "name" => json_encode([
                    "pl" => "Współpraca z dostawcami i odbiorcami surowców i produktów.",
                    "en" => "Collaborating with suppliers and customers of raw materials and products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $PRZETWÓRCA_OWOCÓW_I_WARZYW = [

            [
                "id" => 19994,
                "name" => json_encode([
                    "pl" => "Przygotowywanie owoców i warzyw do przetwórstwa (mycie, obieranie, krojenie).",
                    "en" => "Preparing fruits and vegetables for processing (washing, peeling, cutting)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19995,
                "name" => json_encode([
                    "pl" => "Produkcja soków, dżemów, konserw, mrożonek i innych przetworów.",
                    "en" => "Producing juices, jams, preserves, frozen goods, and other processed products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19996,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do obróbki i przetwarzania owoców i warzyw.",
                    "en" => "Operating equipment for handling and processing fruits and vegetables."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19997,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców oraz gotowych wyrobów.",
                    "en" => "Quality control of raw materials and finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19998,
                "name" => json_encode([
                    "pl" => "Przestrzeganie receptur i procedur technologicznych.",
                    "en" => "Following recipes and technological procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 19999,
                "name" => json_encode([
                    "pl" => "Pakowanie i przechowywanie przetworów w odpowiednich warunkach.",
                    "en" => "Packaging and storing processed products under appropriate conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20000,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP i higieny pracy.",
                    "en" => "Adhering to occupational safety and hygiene standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20001,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z procesem produkcji.",
                    "en" => "Maintaining documentation related to the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20002,
                "name" => json_encode([
                    "pl" => "Utrzymanie czystości na stanowisku pracy i dbanie o sprzęt.",
                    "en" => "Keeping the workplace clean and maintaining equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $ROBOTNICY_W_PRODUKCJI_WYROBÓW_MLECZARSKICH = [

            [
                "id" => 20003,
                "name" => json_encode([
                    "pl" => "Praca przy produkcji wyrobów mleczarskich, takich jak sery, jogurty, masło.",
                    "en" => "Working in the production of dairy products, such as cheese, yogurt, butter."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20004,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do przetwarzania mleka i jego pochodnych.",
                    "en" => "Operating machines for processing milk and its derivatives."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20005,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców mlecznych oraz gotowych produktów.",
                    "en" => "Quality control of dairy raw materials and finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20006,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm sanitarnych i procedur technologicznych.",
                    "en" => "Complying with sanitary standards and technological procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20007,
                "name" => json_encode([
                    "pl" => "Pakowanie, etykietowanie i magazynowanie wyrobów mleczarskich.",
                    "en" => "Packaging, labeling, and storing dairy products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20008,
                "name" => json_encode([
                    "pl" => "Czyszczenie i konserwacja maszyn oraz urządzeń mleczarskich.",
                    "en" => "Cleaning and maintaining dairy machines and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20009,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami w celu zapewnienia ciągłości produkcji.",
                    "en" => "Collaborating with other employees to ensure production continuity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20010,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej procesów produkcyjnych.",
                    "en" => "Maintaining documentation related to production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20011,
                "name" => json_encode([
                    "pl" => "Dbanie o porządek i higienę na stanowisku pracy.",
                    "en" => "Ensuring cleanliness and hygiene at the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $POMOCNIK_MLECZARSKI = [

            [
                "id" => 20012,
                "name" => json_encode([
                    "pl" => "Wspieranie pracowników produkcji w procesie wytwarzania wyrobów mleczarskich.",
                    "en" => "Supporting production workers in the manufacturing process of dairy products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20013,
                "name" => json_encode([
                    "pl" => "Przygotowywanie surowców mlecznych do przetwarzania.",
                    "en" => "Preparing dairy raw materials for processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20014,
                "name" => json_encode([
                    "pl" => "Czyszczenie i dezynfekcja sprzętu oraz stanowisk pracy.",
                    "en" => "Cleaning and disinfecting equipment and workstations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20015,
                "name" => json_encode([
                    "pl" => "Pakowanie i etykietowanie gotowych produktów mleczarskich.",
                    "en" => "Packaging and labeling finished dairy products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20016,
                "name" => json_encode([
                    "pl" => "Pomoc przy obsłudze maszyn i urządzeń mleczarskich.",
                    "en" => "Assisting in the operation of dairy machines and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20017,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP i norm sanitarnych.",
                    "en" => "Adhering to occupational safety and sanitary standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20018,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w zakładzie mleczarskim.",
                    "en" => "Maintaining order in the dairy facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20019,
                "name" => json_encode([
                    "pl" => "Segregowanie i przechowywanie surowców oraz produktów.",
                    "en" => "Sorting and storing raw materials and products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20020,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem produkcyjnym.",
                    "en" => "Collaborating with the production team."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];




        DB::table('detail_projects')->insert(array_merge(
            $INZYNIER_TECHNOLOGII_ZYWNOSCI,
            $DIETETYCY_I_SPECJALISCI_DO_SPRAW_ZYWIENIA,
            $TECHNICY_TECHNOLOGII_ZYWNOSCI,
            $DIETETYCY_I_ZYWIENIOWCY,
            $GARMAZER,
            $PRACOWNIK_ROZBIORU_MIESA,
            $PRZETWORCA_RYB,
            $RZEZNIK_WEDLINIARZ,
            $UBOJOWY,
            $PRZETWORCA_MIESA,
            $WEDZARZ,
            $PATROSZACZ_RYB,
            $PIEKARZ,
            $POMOCNIK_PIEKARZA,
            $CUKIERNIK,
            $DEKORATOR_WYROBOW_CUKIERNICZYCH,
            $KARMELARZ,
            $POMOCNIK_CIASTKARZA,
            $OPERATORZY_MASZYN_I_URZADZEN_DO_PRODUKCJI_WYROBOW_SPOZYWCZYCH_I_POKREWNI,
            $MŁYNARZ,
            $PRZETWÓRCA_OWOCÓW_I_WARZYW,
            $ROBOTNICY_W_PRODUKCJI_WYROBÓW_MLECZARSKICH,
            $POMOCNIK_MLECZARSKI
        ));

        Category::whereId('2580')->first()->detailprojects()->attach(collect($INZYNIER_TECHNOLOGII_ZYWNOSCI)->pluck('id')->toArray());
        Category::whereId('2581')->first()->detailprojects()->attach(collect($DIETETYCY_I_SPECJALISCI_DO_SPRAW_ZYWIENIA)->pluck('id')->toArray());
        Category::whereId('2585')->first()->detailprojects()->attach(collect($TECHNICY_TECHNOLOGII_ZYWNOSCI)->pluck('id')->toArray());
        Category::whereId('2604')->first()->detailprojects()->attach(collect($DIETETYCY_I_ZYWIENIOWCY)->pluck('id')->toArray());
        Category::whereId('2610')->first()->detailprojects()->attach(collect($GARMAZER)->pluck('id')->toArray());
        Category::whereId('2611')->first()->detailprojects()->attach(collect($PRACOWNIK_ROZBIORU_MIESA)->pluck('id')->toArray());
        Category::whereId('2612')->first()->detailprojects()->attach(collect($PRZETWORCA_RYB)->pluck('id')->toArray());
        Category::whereId('2614')->first()->detailprojects()->attach(collect($RZEZNIK_WEDLINIARZ)->pluck('id')->toArray());
        Category::whereId('2615')->first()->detailprojects()->attach(collect($UBOJOWY)->pluck('id')->toArray());
        Category::whereId('2618')->first()->detailprojects()->attach(collect($PRZETWORCA_MIESA)->pluck('id')->toArray());
        Category::whereId('2619')->first()->detailprojects()->attach(collect($WEDZARZ)->pluck('id')->toArray());
        Category::whereId('2620')->first()->detailprojects()->attach(collect($PATROSZACZ_RYB)->pluck('id')->toArray());
        Category::whereId('2622')->first()->detailprojects()->attach(collect($PIEKARZ)->pluck('id')->toArray());
        Category::whereId('2623')->first()->detailprojects()->attach(collect($POMOCNIK_PIEKARZA)->pluck('id')->toArray());
        Category::whereId('2625')->first()->detailprojects()->attach(collect($CUKIERNIK)->pluck('id')->toArray());
        Category::whereId('2626')->first()->detailprojects()->attach(collect($DEKORATOR_WYROBOW_CUKIERNICZYCH)->pluck('id')->toArray());
        Category::whereId('2627')->first()->detailprojects()->attach(collect($KARMELARZ)->pluck('id')->toArray());
        Category::whereId('2628')->first()->detailprojects()->attach(collect($POMOCNIK_CIASTKARZA)->pluck('id')->toArray());
        Category::whereId('2630')->first()->detailprojects()->attach(collect($OPERATORZY_MASZYN_I_URZADZEN_DO_PRODUKCJI_WYROBOW_SPOZYWCZYCH_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2664')->first()->detailprojects()->attach(collect($MŁYNARZ)->pluck('id')->toArray());
        Category::whereId('2665')->first()->detailprojects()->attach(collect($PRZETWÓRCA_OWOCÓW_I_WARZYW)->pluck('id')->toArray());
        Category::whereId('2667')->first()->detailprojects()->attach(collect($ROBOTNICY_W_PRODUKCJI_WYROBÓW_MLECZARSKICH)->pluck('id')->toArray());
        Category::whereId('2671')->first()->detailprojects()->attach(collect($POMOCNIK_MLECZARSKI)->pluck('id')->toArray());


    }
}

