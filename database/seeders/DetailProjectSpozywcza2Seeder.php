<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectSpozywcza2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();

        $SPECJALISTA_DO_SPRAW_DIETETYKI = [
            ["id" => 28922,
                "name" => json_encode([
                    "pl" => "Opracowywanie indywidualnych planów żywieniowych dla pacjentów lub grup, dostosowanych do ich potrzeb zdrowotnych.",
                    "en" => "Developing personalized nutrition plans for patients or groups, tailored to their health needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28923,
                "name" => json_encode([
                    "pl" => "Monitorowanie efektów stosowanych planów żywieniowych oraz wprowadzanie ewentualnych korekt.",
                    "en" => "Monitoring the effects of implemented nutrition plans and making necessary adjustments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28924,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie suplementacji diety oraz wprowadzanie nowych trendów żywieniowych.",
                    "en" => "Providing advice on diet supplementation and introducing new nutrition trends."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28925,
                "name" => json_encode([
                    "pl" => "Edukacja pacjentów na temat zdrowego stylu życia i właściwego odżywiania.",
                    "en" => "Educating patients about healthy living and proper nutrition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28926,
                "name" => json_encode([
                    "pl" => "Współpraca z lekarzami, psychologami i innymi specjalistami w celu stworzenia kompleksowego planu leczenia.",
                    "en" => "Collaborating with doctors, psychologists, and other specialists to create a comprehensive treatment plan."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28927,
                "name" => json_encode([
                    "pl" => "Analiza wyników badań laboratoryjnych pacjentów w kontekście ich diety i stanu zdrowia.",
                    "en" => "Analyzing patients' laboratory test results in the context of their diet and health status."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_ZYWIENIA_CZŁOWIEKA = [
            ["id" => 28928,
                "name" => json_encode([
                    "pl" => "Opracowywanie programów żywieniowych i dietetycznych na podstawie indywidualnych potrzeb zdrowotnych pacjentów.",
                    "en" => "Developing nutritional and dietary programs based on individual health needs of patients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28929,
                "name" => json_encode([
                    "pl" => "Konsultacje z pacjentami w zakresie żywienia, ocena ich diety oraz wprowadzanie niezbędnych zmian.",
                    "en" => "Consulting with patients regarding nutrition, evaluating their diet, and implementing necessary changes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28930,
                "name" => json_encode([
                    "pl" => "Zalecenia dotyczące suplementacji diety, dostosowywanie do specyficznych potrzeb zdrowotnych.",
                    "en" => "Recommending diet supplementation, adjusting it to specific health needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28931,
                "name" => json_encode([
                    "pl" => "Prowadzenie edukacji zdrowotnej w zakresie prawidłowego żywienia i zdrowego stylu życia.",
                    "en" => "Providing health education on proper nutrition and healthy lifestyle."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28932,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi specjalistami, takimi jak lekarze, dietetycy i trenerzy, w celu kompleksowej opieki nad pacjentem.",
                    "en" => "Collaborating with other specialists, such as doctors, dietitians, and trainers, for comprehensive patient care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28933,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz stanu zdrowia pacjentów i dopasowywanie diety do wyników medycznych.",
                    "en" => "Conducting health assessments of patients and adjusting their diet based on medical results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_DIETETYCY_I_SPECJALIŚCI_DO_SPRAW_ZYWIENIA = [
            ["id" => 28934,
                "name" => json_encode([
                    "pl" => "Opracowywanie ogólnych programów żywieniowych i planów dietetycznych dla różnych grup społecznych.",
                    "en" => "Developing general nutrition programs and dietary plans for various social groups."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28935,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie żywienia w kontekście chorób przewlekłych, alergii pokarmowych i innych problemów zdrowotnych.",
                    "en" => "Providing nutritional advice in the context of chronic diseases, food allergies, and other health issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28936,
                "name" => json_encode([
                    "pl" => "Analiza składu ciała pacjentów i tworzenie indywidualnych zaleceń żywieniowych.",
                    "en" => "Analyzing patients' body composition and creating individual dietary recommendations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28937,
                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń i warsztatów w zakresie zdrowego żywienia i stylu życia.",
                    "en" => "Conducting training and workshops on healthy eating and lifestyle."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28938,
                "name" => json_encode([
                    "pl" => "Ocena jakości diety pacjentów, identyfikowanie błędów żywieniowych i proponowanie zmian.",
                    "en" => "Evaluating patients' diet quality, identifying nutritional errors, and proposing changes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28939,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami zdrowotnymi i oświatowymi w celu promocji zdrowego żywienia w społeczeństwie.",
                    "en" => "Collaborating with health and educational institutions to promote healthy eating in society."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLER_JAKOŚCI_PRODUKTÓW_SPOŻYWCZYCH = [
            ["id" => 28940,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością surowców i produktów spożywczych, przeprowadzanie testów jakościowych.",
                    "en" => "Supervising the quality of raw materials and food products, conducting quality tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28941,
                "name" => json_encode([
                    "pl" => "Kontrola procesów produkcyjnych w celu zapewnienia zgodności z normami jakości i bezpieczeństwa żywności.",
                    "en" => "Controlling production processes to ensure compliance with quality and food safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28942,
                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji w zakresie wdrażania procedur kontroli jakości.",
                    "en" => "Collaborating with the production department to implement quality control procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28943,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników kontroli jakości oraz raportowanie niezgodności.",
                    "en" => "Documenting quality control results and reporting non-compliance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28944,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji jakościowych produktów spożywczych na każdym etapie produkcji.",
                    "en" => "Conducting quality inspections of food products at every stage of production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28945,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów wewnętrznych w celu oceny zgodności z normami jakościowymi i bezpieczeństwa żywności.",
                    "en" => "Conducting internal audits to assess compliance with quality and food safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_PRZETWÓRSTWA_MLECZARSKIEGO = [
            ["id" => 28946,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem produkcji wyrobów mlecznych, takich jak mleko, sery, jogurty.",
                    "en" => "Managing the production process of dairy products, such as milk, cheese, and yogurts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28947,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością surowców i produktów mleczarskich, zapewnienie ich zgodności z normami.",
                    "en" => "Supervising the quality of raw materials and dairy products, ensuring compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28948,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz mikrobiologicznych i chemicznych surowców mlecznych.",
                    "en" => "Conducting microbiological and chemical analyses of dairy raw materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28949,
                "name" => json_encode([
                    "pl" => "Wdrażanie i monitorowanie procesów produkcji w przemyśle mleczarskim, takich jak pasteryzacja, homogenizacja.",
                    "en" => "Implementing and monitoring production processes in the dairy industry, such as pasteurization, homogenization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28950,
                "name" => json_encode([
                    "pl" => "Utrzymywanie i kontrolowanie warunków przechowywania i transportu produktów mleczarskich.",
                    "en" => "Maintaining and controlling storage and transport conditions of dairy products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28951,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji produkcyjnej i jakościowej produktów mleczarskich.",
                    "en" => "Maintaining production and quality documentation for dairy products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_ZYWNOSCI_CUKROWNICTWO = [
            ["id" => 28952,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem produkcji cukru, od pozyskiwania surowca po gotowy produkt.",
                    "en" => "Supervising the sugar production process, from raw material acquisition to finished product."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28953,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem ekstrakcji soku z buraków cukrowych oraz jego rafinacji.",
                    "en" => "Managing the juice extraction process from sugar beets and its refining."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28954,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców, półproduktów oraz gotowego cukru.",
                    "en" => "Controlling the quality of raw materials, semi-finished products, and finished sugar."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28955,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowoczesnych technologii produkcji cukru i optymalizacja procesów produkcyjnych.",
                    "en" => "Implementing modern sugar production technologies and optimizing production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28956,
                "name" => json_encode([
                    "pl" => "Analiza procesów technologicznych, opracowywanie strategii poprawy wydajności produkcji.",
                    "en" => "Analyzing technological processes, developing strategies to improve production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28957,
                "name" => json_encode([
                    "pl" => "Nadzór nad przestrzeganiem norm jakościowych oraz bezpieczeństwa żywności w produkcji cukru.",
                    "en" => "Supervising compliance with quality standards and food safety in sugar production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRODUKCJA_CUKIERNICZA = [
            ["id" => 28958,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem produkcji wyrobów cukierniczych, takich jak ciasta, ciasteczka, cukierki.",
                    "en" => "Supervising the production process of confectionery products, such as cakes, biscuits, candies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28959,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie receptur na produkty cukiernicze, dobór surowców i technologii.",
                    "en" => "Developing and implementing recipes for confectionery products, selecting raw materials and technology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28960,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców oraz gotowych wyrobów cukierniczych.",
                    "en" => "Controlling the quality of raw materials and finished confectionery products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28961,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych, wdrażanie nowych technologii w produkcji wyrobów cukierniczych.",
                    "en" => "Optimizing production processes, implementing new technologies in confectionery production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28962,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem pakowania i magazynowania produktów cukierniczych.",
                    "en" => "Managing the packaging and storage processes of confectionery products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28963,
                "name" => json_encode([
                    "pl" => "Współpraca z działem marketingu w zakresie rozwoju nowych produktów cukierniczych.",
                    "en" => "Cooperating with the marketing department to develop new confectionery products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRODUKCJA_KONCENTRATÓW_SPOŻYWCZYCH = [
            ["id" => 28964,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem produkcji koncentratów spożywczych, takich jak koncentraty soków, koncentraty smakowe.",
                    "en" => "Supervising the production process of food concentrates, such as juice concentrates and flavor concentrates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28965,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców i gotowych koncentratów spożywczych.",
                    "en" => "Controlling the quality of raw materials and finished food concentrates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28966,
                "name" => json_encode([
                    "pl" => "Opracowywanie receptur i technologii produkcji koncentratów spożywczych.",
                    "en" => "Developing recipes and production technologies for food concentrates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28967,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji koncentratów w celu zwiększenia wydajności.",
                    "en" => "Optimizing production processes for concentrates to increase efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28968,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produktów z normami bezpieczeństwa żywności.",
                    "en" => "Cooperating with the quality department to ensure product compliance with food safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28969,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów pakowania i magazynowania koncentratów spożywczych.",
                    "en" => "Monitoring the packaging and storage processes of food concentrates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRODUKCJA_PIEKARSKO_CIASTKARSKA = [
            ["id" => 28970,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem produkcji piekarsko-ciastkarskiej, takich jak chleb, ciasta, bułki.",
                    "en" => "Supervising the production process of bakery and confectionery products, such as bread, cakes, buns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28971,
                "name" => json_encode([
                    "pl" => "Opracowywanie receptur i technologii produkcji wyrobów piekarskich i ciastkarskich.",
                    "en" => "Developing recipes and production technologies for bakery and confectionery products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28972,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców i gotowych produktów piekarskich oraz ciastkarskich.",
                    "en" => "Controlling the quality of raw materials and finished bakery and confectionery products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28973,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów produkcji w piekarni i ciastkarni, optymalizacja wydajności.",
                    "en" => "Monitoring production processes in the bakery and confectionery, optimizing efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28974,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produktów z normami.",
                    "en" => "Collaborating with the quality department to ensure products meet standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28975,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem pakowania i przechowywania wyrobów piekarskich i ciastkarskich.",
                    "en" => "Supervising the packaging and storage processes of bakery and confectionery products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZECHOWALNICTWO_CHLODNICZE = [
            ["id" => 28976,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesami przechowywania żywności w warunkach chłodniczych i mrożonych.",
                    "en" => "Supervising food storage processes under refrigerated and frozen conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28977,
                "name" => json_encode([
                    "pl" => "Kontrola temperatury przechowywanych produktów i zapewnienie ich zgodności z normami jakościowymi.",
                    "en" => "Controlling the temperature of stored products and ensuring their compliance with quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28978,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów mrożenia i rozmrażania żywności, zapewniając ich jakość.",
                    "en" => "Monitoring freezing and thawing processes of food, ensuring their quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28979,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii mrożenia i przechowywania żywności, optymalizacja procesów.",
                    "en" => "Implementing new freezing and food storage technologies, optimizing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28980,
                "name" => json_encode([
                    "pl" => "Utrzymywanie i kontrolowanie warunków przechowywania, takich jak wilgotność i wentylacja.",
                    "en" => "Maintaining and controlling storage conditions such as humidity and ventilation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28981,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu monitorowania zgodności z przepisami dotyczącymi przechowywania żywności.",
                    "en" => "Collaborating with the quality department to monitor compliance with food storage regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_FERMENTACYJNE = [
            ["id" => 28982,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesami fermentacji w produkcji żywności, takich jak jogurty, kefiry, piwa.",
                    "en" => "Supervising fermentation processes in food production, such as yogurts, kefir, beer."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28983,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów fermentacji, takich jak temperatura, czas i pH, w celu uzyskania oczekiwanych produktów.",
                    "en" => "Monitoring fermentation parameters such as temperature, time, and pH to obtain desired products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28984,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii fermentacyjnych, optymalizacja procesów produkcyjnych.",
                    "en" => "Implementing new fermentation technologies, optimizing production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28985,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców i gotowych produktów fermentacyjnych.",
                    "en" => "Controlling the quality of raw materials and finished fermented products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28986,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów fermentacyjnych w celu zwiększenia efektywności i jakości produkcji.",
                    "en" => "Optimizing fermentation processes to increase production efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28987,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produktów z normami bezpieczeństwa żywności.",
                    "en" => "Collaborating with the quality department to ensure product compliance with food safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_JAJCZARSKO_DROBIARSKIE = [
            ["id" => 28988,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesami przetwórstwa jaj i drobiu, w tym obróbka, pakowanie i przechowywanie.",
                    "en" => "Supervising the processing of eggs and poultry, including processing, packaging, and storage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28989,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców jajczarskich i drobiarskich, zapewnienie ich zgodności z normami.",
                    "en" => "Controlling the quality of egg and poultry raw materials, ensuring compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28990,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów produkcji jajczarskich i drobiarskich produktów gotowych.",
                    "en" => "Monitoring the production processes of egg and poultry products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28991,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem pakowania i magazynowania produktów jajczarskich i drobiarskich.",
                    "en" => "Managing the packaging and storage processes of egg and poultry products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28992,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji jajczarskich i drobiarskich w celu zwiększenia wydajności.",
                    "en" => "Optimizing egg and poultry production processes to increase efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28993,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu monitorowania zgodności z przepisami dotyczącymi przetwórstwa jajczarskiego i drobiarskiego.",
                    "en" => "Collaborating with the quality department to monitor compliance with regulations concerning egg and poultry processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_MIESNE = [
            ["id" => 28994,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesami przetwórstwa mięsnego, w tym uboju, przetwarzania, pakowania.",
                    "en" => "Supervising the meat processing processes, including slaughtering, processing, and packaging."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28995,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców mięsnych i gotowych produktów mięsnych.",
                    "en" => "Controlling the quality of meat raw materials and finished meat products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28996,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów produkcji mięsnych wyrobów gotowych.",
                    "en" => "Monitoring the production processes of finished meat products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28997,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii przetwórstwa mięsnego, optymalizacja procesów.",
                    "en" => "Implementing new meat processing technologies, optimizing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28998,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem pakowania i magazynowania produktów mięsnych.",
                    "en" => "Managing the packaging and storage processes of meat products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 28999,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produktów mięsnych z normami.",
                    "en" => "Collaborating with the quality department to ensure meat products comply with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_MLECZARSKIE = [
            ["id" => 29000,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem produkcji wyrobów mleczarskich, takich jak mleko, sery, jogurty.",
                    "en" => "Supervising the production of dairy products such as milk, cheese, and yogurts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29001,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców i gotowych produktów mleczarskich.",
                    "en" => "Controlling the quality of raw materials and finished dairy products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29002,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz mikrobiologicznych i chemicznych surowców mlecznych.",
                    "en" => "Conducting microbiological and chemical analyses of dairy raw materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29003,
                "name" => json_encode([
                    "pl" => "Wdrażanie i monitorowanie procesów produkcji w przemyśle mleczarskim, takich jak pasteryzacja, homogenizacja.",
                    "en" => "Implementing and monitoring production processes in the dairy industry, such as pasteurization and homogenization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29004,
                "name" => json_encode([
                    "pl" => "Utrzymywanie i kontrolowanie warunków przechowywania i transportu produktów mleczarskich.",
                    "en" => "Maintaining and controlling storage and transport conditions for dairy products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29005,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji produkcyjnej i jakościowej produktów mleczarskich.",
                    "en" => "Maintaining production and quality documentation for dairy products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_OWOCOWO_WARZYWNE = [
            ["id" => 29006,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem produkcji soków, dżemów, konserw oraz innych przetworów owocowo-warzywnych.",
                    "en" => "Supervising the production of juices, jams, preserves, and other fruit and vegetable products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29007,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców oraz gotowych produktów owocowo-warzywnych.",
                    "en" => "Controlling the quality of raw materials and finished fruit and vegetable products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29008,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów produkcji w zakresie przygotowania i obróbki owoców oraz warzyw.",
                    "en" => "Monitoring production processes for the preparation and processing of fruits and vegetables."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29009,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji, w tym na etapie pakowania i przechowywania.",
                    "en" => "Optimizing production processes, including packaging and storage stages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29010,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem pasteryzacji, fermentacji, mrożenia i innych metod obróbki owoców i warzyw.",
                    "en" => "Managing pasteurization, fermentation, freezing, and other processing methods for fruits and vegetables."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29011,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produktów z normami jakościowymi.",
                    "en" => "Collaborating with the quality department to ensure compliance with product quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_RYBNE = [
            ["id" => 29012,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem produkcji i przetwórstwa ryb, w tym mrożenie, wędzenie, pakowanie.",
                    "en" => "Supervising the production and processing of fish, including freezing, smoking, and packaging."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29013,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców rybnych oraz gotowych produktów rybnych.",
                    "en" => "Controlling the quality of fish raw materials and finished fish products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29014,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów obróbki ryb, takich jak mrożenie, suszenie, wędzenie.",
                    "en" => "Monitoring fish processing processes such as freezing, drying, smoking."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29015,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji w przetwórstwie rybnym w celu poprawy wydajności.",
                    "en" => "Optimizing production processes in fish processing to improve efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29016,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem pakowania i magazynowania produktów rybnych.",
                    "en" => "Managing the packaging and storage processes for fish products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29017,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produktów rybnych z normami.",
                    "en" => "Collaborating with the quality department to ensure compliance of fish products with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_SUROWCÓW_OLEJARSKICH = [
            ["id" => 29018,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem produkcji olejów roślinnych, w tym ekstrakcja, rafinacja i tłoczenie.",
                    "en" => "Supervising the production process of vegetable oils, including extraction, refining, and pressing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29019,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców olejarskich oraz gotowych olejów roślinnych.",
                    "en" => "Controlling the quality of oilseed raw materials and finished vegetable oils."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29020,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów produkcji olejów, w tym ich filtracja i stabilizacja.",
                    "en" => "Monitoring the oil production processes, including filtration and stabilization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29021,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii tłoczenia i rafinacji olejów, optymalizacja procesów.",
                    "en" => "Implementing new pressing and refining technologies for oils, optimizing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29022,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem pakowania olejów roślinnych oraz zapewnienie ich odpowiednich warunków przechowywania.",
                    "en" => "Managing the packaging of vegetable oils and ensuring their proper storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29023,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produktów z normami bezpieczeństwa żywności.",
                    "en" => "Collaborating with the quality department to ensure compliance with food safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_ZBOŻOWE = [
            ["id" => 29024,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem młynarskim, produkcja mąki i przetworów zbożowych.",
                    "en" => "Supervising the milling process, producing flour and cereal products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29025,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców zbożowych oraz gotowych produktów mącznych.",
                    "en" => "Controlling the quality of cereal raw materials and finished flour products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29026,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów produkcji mąki, kasz i innych produktów zbożowych.",
                    "en" => "Monitoring the production processes of flour, groats, and other cereal products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29027,
                "name" => json_encode([
                    "pl" => "Wdrażanie i optymalizacja procesów młynarskich w celu poprawy wydajności produkcji.",
                    "en" => "Implementing and optimizing milling processes to improve production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29028,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem pakowania produktów zbożowych oraz kontrolowanie ich jakości.",
                    "en" => "Managing the packaging of cereal products and controlling their quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29029,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności z normami bezpieczeństwa żywności.",
                    "en" => "Collaborating with the quality department to ensure compliance with food safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_ZIEMNIACZANE = [
            ["id" => 29030,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem produkcji wyrobów ziemniaczanych, takich jak frytki, chipsy, puree.",
                    "en" => "Supervising the production process of potato products, such as fries, chips, and mashed potatoes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29031,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowych ziemniaków oraz gotowych produktów ziemniaczanych.",
                    "en" => "Controlling the quality of raw potatoes and finished potato products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29032,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów obróbki ziemniaków, w tym smażenie, suszenie i pakowanie.",
                    "en" => "Monitoring the potato processing processes, including frying, drying, and packaging."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29033,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing production processes to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29034,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem pakowania produktów ziemniaczanych oraz kontrolowanie ich jakości.",
                    "en" => "Managing the packaging of potato products and controlling their quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29035,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produktów ziemniaczanych z normami.",
                    "en" => "Collaborating with the quality department to ensure potato products meet standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_TECHNICY_TECHNOLOGII_ZYWNOSCI = [
            ["id" => 29036,
                "name" => json_encode([
                    "pl" => "Nadzór nad produkcją żywności, w tym kontrola jakości surowców i gotowych produktów.",
                    "en" => "Supervising food production, including controlling the quality of raw materials and finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29037,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych w różnych branżach przetwórstwa żywnościowego.",
                    "en" => "Optimizing production processes in various food processing sectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29038,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii w produkcji żywności, zwiększających efektywność i jakość.",
                    "en" => "Implementing new technologies in food production to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29039,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości produktów żywnościowych w każdej fazie produkcji.",
                    "en" => "Monitoring the quality of food products at every stage of production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29040,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości i innymi działami w celu zapewnienia zgodności z normami bezpieczeństwa żywności.",
                    "en" => "Collaborating with the quality department and other departments to ensure compliance with food safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29041,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji produkcyjnej i jakościowej, raportowanie wyników.",
                    "en" => "Maintaining production and quality documentation, reporting results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_ZYWNOSCI = [
            ["id" => 29042,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem produkcji żywności, kontrola jakości surowców, półproduktów i gotowych produktów.",
                    "en" => "Supervising the food production process, controlling the quality of raw materials, semi-finished products, and finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29043,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii w produkcji żywności, optymalizacja procesów produkcyjnych.",
                    "en" => "Implementing new technologies in food production, optimizing production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29044,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców, półproduktów oraz gotowych produktów w przemyśle spożywczym.",
                    "en" => "Controlling the quality of raw materials, semi-finished products, and finished goods in the food industry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29045,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności z normami bezpieczeństwa żywności.",
                    "en" => "Collaborating with the quality department to ensure compliance with food safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29046,
                "name" => json_encode([
                    "pl" => "Monitorowanie wydajności produkcji i wprowadzanie usprawnień w celu zwiększenia efektywności.",
                    "en" => "Monitoring production efficiency and implementing improvements to increase productivity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29047,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji produkcyjnej i jakościowej, sporządzanie raportów.",
                    "en" => "Maintaining production and quality documentation, preparing reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DIETETYK = [
            ["id" => 29048,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów dietetycznych dla pacjentów, dostosowanych do ich stanu zdrowia i stylu życia.",
                    "en" => "Developing dietary plans for patients, tailored to their health condition and lifestyle."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29049,
                "name" => json_encode([
                    "pl" => "Analiza wyników badań laboratoryjnych pacjentów w celu dostosowania diety.",
                    "en" => "Analyzing patients' laboratory test results to adjust their diet."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29050,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie suplementacji diety oraz zdrowego stylu życia.",
                    "en" => "Advising on diet supplementation and healthy lifestyle."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29051,
                "name" => json_encode([
                    "pl" => "Edukacja pacjentów na temat zasad zdrowego odżywiania.",
                    "en" => "Educating patients about the principles of healthy nutrition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29052,
                "name" => json_encode([
                    "pl" => "Monitorowanie efektów stosowanej diety i wprowadzanie ewentualnych korekt.",
                    "en" => "Monitoring the effects of the applied diet and making necessary adjustments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29053,
                "name" => json_encode([
                    "pl" => "Współpraca z lekarzami i innymi specjalistami w celu opracowania kompleksowych planów leczenia.",
                    "en" => "Cooperating with doctors and other specialists to develop comprehensive treatment plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ZYWIENIA_I_GOSPODARSTWA_DOMOWEGO = [
            ["id" => 29054,
                "name" => json_encode([
                    "pl" => "Opracowywanie jadłospisów i planów żywieniowych dla rodzin, instytucji i placówek zdrowia.",
                    "en" => "Developing meal plans and dietary programs for families, institutions, and healthcare facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29055,
                "name" => json_encode([
                    "pl" => "Nadzór nad przygotowaniem posiłków w placówkach gastronomicznych, zapewnienie jakości.",
                    "en" => "Supervising meal preparation in food service facilities, ensuring quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29056,
                "name" => json_encode([
                    "pl" => "Konsultacje w zakresie racjonalnego odżywiania, planowanie posiłków w zależności od potrzeb zdrowotnych.",
                    "en" => "Consultations on rational nutrition, planning meals according to health needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29057,
                "name" => json_encode([
                    "pl" => "Szkolenie personelu w zakresie zasad higieny żywności i przestrzegania norm dietetycznych.",
                    "en" => "Training staff in food hygiene principles and compliance with dietary standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29058,
                "name" => json_encode([
                    "pl" => "Kontrola jakości i bezpieczeństwa żywności w przemyśle spożywczym i instytucjach gastronomicznych.",
                    "en" => "Controlling the quality and safety of food in the food industry and foodservice institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29059,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji dotyczącej planów żywieniowych, raportowanie efektów stosowanych diet.",
                    "en" => "Preparing documentation related to meal plans and reporting the effects of applied diets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_DIETETYCY_I_ZYWNIENIOWCY = [
            ["id" => 29060,
                "name" => json_encode([
                    "pl" => "Opracowywanie programów żywieniowych i dietetycznych na szeroką skalę, dla grup społecznych.",
                    "en" => "Developing wide-scale nutrition and dietary programs for social groups."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29061,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów dietetycznych w różnych instytucjach, ocena jakości żywienia.",
                    "en" => "Conducting dietary audits in various institutions, evaluating nutrition quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29062,
                "name" => json_encode([
                    "pl" => "Edukacja w zakresie zdrowego żywienia, opracowywanie materiałów edukacyjnych.",
                    "en" => "Education on healthy eating, preparing educational materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29063,
                "name" => json_encode([
                    "pl" => "Opracowywanie programów dietetycznych dla osób z chorobami przewlekłymi.",
                    "en" => "Developing dietary programs for individuals with chronic diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29064,
                "name" => json_encode([
                    "pl" => "Zarządzanie projektami związanymi z żywieniem w placówkach zdrowia i gastronomicznych.",
                    "en" => "Managing nutrition-related projects in healthcare and foodservice facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29065,
                "name" => json_encode([
                    "pl" => "Konsultacje z zespołem medycznym w celu opracowania kompleksowych planów żywieniowych.",
                    "en" => "Consulting with the medical team to develop comprehensive nutrition plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ROZBIERACZ_WYKWARCZ = [
            ["id" => 29066,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie procesu rozbioru i wykrawania mięsa, oddzielanie kości od mięsa.",
                    "en" => "Carrying out the process of meat deboning and cutting, separating bones from meat."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29067,
                "name" => json_encode([
                    "pl" => "Przygotowanie surowców mięsnych do dalszego przetwórstwa.",
                    "en" => "Preparing meat raw materials for further processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29068,
                "name" => json_encode([
                    "pl" => "Dbałość o przestrzeganie zasad higieny pracy przy przetwórstwie mięsa.",
                    "en" => "Ensuring hygiene standards are followed during meat processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29069,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców mięsnych oraz gotowych produktów mięsnych.",
                    "en" => "Controlling the quality of meat raw materials and finished meat products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29070,
                "name" => json_encode([
                    "pl" => "Zapewnienie odpowiedniego pakowania i magazynowania wyrobów mięsnych.",
                    "en" => "Ensuring proper packaging and storage of meat products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29071,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności z normami bezpieczeństwa żywności.",
                    "en" => "Collaborating with the quality department to ensure compliance with food safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WEDLINIARZ = [
            ["id" => 29072,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem produkcji wędlin, takich jak kiełbasy, szynki, wędliny gotowe.",
                    "en" => "Supervising the production process of sausages, hams, and other ready-to-eat meats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29073,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców i gotowych produktów wędliniarskich.",
                    "en" => "Controlling the quality of raw materials and finished deli products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29074,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii produkcji wędlin oraz optymalizacja procesów.",
                    "en" => "Implementing new technologies in sausage production and optimizing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29075,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem pakowania wędlin oraz zapewnienie ich odpowiednich warunków przechowywania.",
                    "en" => "Supervising the packaging of deli meats and ensuring proper storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29076,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem wędzenia i suszenia wędlin.",
                    "en" => "Managing the smoking and drying processes of deli meats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29077,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu monitorowania zgodności produktów wędliniarskich z normami.",
                    "en" => "Collaborating with the quality department to monitor the compliance of deli products with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_MASARZE_ROBOTNICY_W_PRZETWÓRSTWIE_RYB = [
            ["id" => 29078,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie procesów rozbioru i przetwórstwa ryb, przygotowanie surowców do dalszego przetwórstwa.",
                    "en" => "Carrying out fish cutting and processing processes, preparing raw materials for further processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29079,
                "name" => json_encode([
                    "pl" => "Przygotowanie, pakowanie i magazynowanie produktów rybnych.",
                    "en" => "Preparing, packaging, and storing fish products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29080,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowych ryb oraz gotowych produktów rybnych.",
                    "en" => "Controlling the quality of raw fish and finished fish products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29081,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem wędzenia, mrożenia i innych metod obróbki ryb.",
                    "en" => "Managing the smoking, freezing, and other fish processing methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29082,
                "name" => json_encode([
                    "pl" => "Zapewnienie odpowiednich warunków przechowywania i transportu produktów rybnych.",
                    "en" => "Ensuring proper storage and transportation conditions for fish products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29083,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności z normami bezpieczeństwa żywności.",
                    "en" => "Collaborating with the quality department to ensure compliance with food safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $APARATOWY_PRODUKCJI_DROŻDŻY = [
            ["id" => 29084,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem produkcji drożdży, monitorowanie fermentacji i wzrostu mikroorganizmów.",
                    "en" => "Supervising the yeast production process, monitoring fermentation and microorganism growth."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29085,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców i gotowych drożdży, zapewnienie zgodności z normami jakościowymi.",
                    "en" => "Controlling the quality of raw materials and finished yeast, ensuring compliance with quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29086,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów procesu fermentacji, takich jak temperatura, pH i czas.",
                    "en" => "Monitoring fermentation process parameters such as temperature, pH, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29087,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii w produkcji drożdży, optymalizacja procesów.",
                    "en" => "Implementing new technologies in yeast production, optimizing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29088,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem drożdży oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing yeast packaging and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29089,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji drożdży z normami bezpieczeństwa żywności.",
                    "en" => "Collaborating with the quality department to ensure yeast production complies with food safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $APARATOWY_PRODUKCJI_OCTU = [
            ["id" => 29090,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem fermentacji octu, kontrolowanie parametrów fermentacji i jakości.",
                    "en" => "Supervising the vinegar fermentation process, controlling fermentation parameters and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29091,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu produkcji octu, w tym kontrola temperatury, czasu i pH.",
                    "en" => "Monitoring the vinegar production process, including controlling temperature, time, and pH."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29092,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców oraz gotowego octu, przeprowadzanie analiz laboratoryjnych.",
                    "en" => "Controlling the quality of raw materials and finished vinegar, conducting laboratory analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29093,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji octu w celu zwiększenia wydajności i jakości.",
                    "en" => "Optimizing the vinegar production processes to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29094,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem octu i kontrolowanie warunków przechowywania.",
                    "en" => "Managing vinegar packaging and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29095,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji octu z normami.",
                    "en" => "Collaborating with the quality department to ensure vinegar production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_KONFEKCJONOWANIA_HERBATY = [
            ["id" => 29096,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do pakowania herbaty, w tym dozowanie, pakowanie i etykietowanie.",
                    "en" => "Operating tea packaging machines, including dosing, packaging, and labeling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29097,
                "name" => json_encode([
                    "pl" => "Kontrola jakości opakowanych herbat, sprawdzanie zgodności z wymaganiami.",
                    "en" => "Controlling the quality of packaged tea, checking compliance with requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29098,
                "name" => json_encode([
                    "pl" => "Utrzymywanie maszyn w dobrym stanie technicznym, przeprowadzanie drobnych napraw.",
                    "en" => "Maintaining machines in good technical condition, performing minor repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29099,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm higieny i bezpieczeństwa pracy przy obsłudze maszyn do pakowania herbaty.",
                    "en" => "Adhering to hygiene and safety standards when operating tea packaging machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29100,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów pakowania herbaty, dostosowywanie ustawień maszyn do produkcji.",
                    "en" => "Monitoring tea packaging processes, adjusting machine settings for production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29101,
                "name" => json_encode([
                    "pl" => "Koordynowanie procesów pakowania i wysyłki gotowych produktów.",
                    "en" => "Coordinating packaging and shipping processes of finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_OBRÓBKI_SUROWCA_MLECZARSKIEGO = [
            ["id" => 29102,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do obróbki surowca mleczarskiego, takich jak pasteryzatory, homogenizatory.",
                    "en" => "Operating equipment for dairy raw material processing, such as pasteurizers and homogenizers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29103,
                "name" => json_encode([
                    "pl" => "Kontrola parametrów technologicznych, takich jak temperatura, ciśnienie, czas.",
                    "en" => "Controlling technological parameters such as temperature, pressure, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29104,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu produkcji, zapewnienie zgodności z normami jakości.",
                    "en" => "Monitoring the production process, ensuring compliance with quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29105,
                "name" => json_encode([
                    "pl" => "Utrzymywanie urządzeń w dobrym stanie technicznym, przeprowadzanie konserwacji.",
                    "en" => "Maintaining equipment in good technical condition, performing maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29106,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu monitorowania zgodności z normami sanitarnymi.",
                    "en" => "Collaborating with the quality department to monitor compliance with sanitary standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29107,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów obróbki surowca mleczarskiego, zwiększenie wydajności produkcji.",
                    "en" => "Optimizing the dairy raw material processing processes, increasing production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_CUKRU = [
            ["id" => 29108,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji cukru, takich jak młyny cukrownicze, urządzenia do krystalizacji.",
                    "en" => "Operating sugar production machines, such as sugar mills and crystallization equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29109,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców oraz gotowego cukru, przeprowadzanie analiz laboratoryjnych.",
                    "en" => "Controlling the quality of raw materials and finished sugar, conducting laboratory analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29110,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów krystalizacji cukru, optymalizacja parametrów produkcji.",
                    "en" => "Monitoring the sugar crystallization processes, optimizing production parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29111,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii produkcji cukru, zwiększenie efektywności produkcji.",
                    "en" => "Implementing new sugar production technologies, increasing production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29112,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem cukru oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing sugar packaging and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29113,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji cukru z normami.",
                    "en" => "Collaborating with the quality department to ensure sugar production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_KONCENTRATÓW_SPOŻYWCZYCH = [
            ["id" => 29114,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji koncentratów spożywczych, takich jak koncentraty soków, koncentraty smakowe.",
                    "en" => "Operating equipment for the production of food concentrates, such as juice concentrates and flavor concentrates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29115,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów produkcji koncentratów, kontrolowanie jakości surowców.",
                    "en" => "Monitoring the production processes of concentrates, controlling the quality of raw materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29116,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii produkcji koncentratów spożywczych, optymalizacja procesów.",
                    "en" => "Implementing new food concentrate production technologies, optimizing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29117,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem koncentratów spożywczych oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing food concentrate packaging and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29118,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów produkcji, dostosowywanie ustawień maszyn do rodzaju koncentratu.",
                    "en" => "Monitoring production processes, adjusting machine settings to the type of concentrate."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29119,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji koncentratów z normami.",
                    "en" => "Collaborating with the quality department to ensure concentrate production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MAJONEZU_I_MUSZTARDY = [
            ["id" => 29120,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń do produkcji majonezu i musztardy, monitorowanie parametrów produkcji.",
                    "en" => "Operating machines and equipment for the production of mayonnaise and mustard, monitoring production parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29121,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców oraz gotowych produktów majonezowych i musztardowych.",
                    "en" => "Controlling the quality of raw materials and finished mayonnaise and mustard products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29122,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji, dostosowywanie parametrów maszyn do wymagań produkcji.",
                    "en" => "Optimizing production processes, adjusting machine parameters to production requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29123,
                "name" => json_encode([
                    "pl" => "Utrzymywanie urządzeń w dobrym stanie technicznym, przeprowadzanie drobnych napraw.",
                    "en" => "Maintaining equipment in good technical condition, performing minor repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29124,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produktów z normami jakościowymi.",
                    "en" => "Collaborating with the quality department to ensure products meet quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29125,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów pakowania i przechowywania majonezu oraz musztardy.",
                    "en" => "Monitoring packaging and storage processes of mayonnaise and mustard."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MAKARONU = [
            ["id" => 29126,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji makaronu, kontrolowanie procesów mieszania, formowania i suszenia.",
                    "en" => "Operating pasta production machines, controlling the processes of mixing, forming, and drying."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29127,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców oraz gotowych produktów makaronowych.",
                    "en" => "Controlling the quality of raw materials and finished pasta products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29128,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji makaronu, dostosowywanie maszyn do rodzaju produkcji.",
                    "en" => "Optimizing pasta production processes, adjusting machines for the type of production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29129,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem i magazynowaniem makaronu.",
                    "en" => "Managing packaging and storage of pasta."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29130,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji makaronu z normami.",
                    "en" => "Collaborating with the quality department to ensure pasta production meets standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29131,
                "name" => json_encode([
                    "pl" => "Utrzymywanie maszyn w dobrym stanie technicznym, przeprowadzanie konserwacji.",
                    "en" => "Maintaining machines in good technical condition, performing maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_NAPOJÓW_BEZALKOHOLICZNYCH = [
            ["id" => 29132,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji napojów bezalkoholowych, w tym butelkowanie, napełnianie i zamykanie.",
                    "en" => "Operating equipment for the production of non-alcoholic beverages, including bottling, filling, and sealing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29133,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców oraz gotowych napojów bezalkoholowych.",
                    "en" => "Controlling the quality of raw materials and finished non-alcoholic beverages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29134,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów produkcji, w tym kontrolowanie temperatury, ciśnienia i pH.",
                    "en" => "Monitoring production processes, including controlling temperature, pressure, and pH."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29135,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji napojów w celu zwiększenia efektywności i jakości.",
                    "en" => "Optimizing beverage production processes to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29136,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem napojów bezalkoholowych oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing packaging of non-alcoholic beverages and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29137,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności napojów z normami bezpieczeństwa żywności.",
                    "en" => "Collaborating with the quality department to ensure beverages comply with food safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_PASZ = [
            ["id" => 29138,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji pasz, takich jak młyny paszowe, maszyny do mieszania.",
                    "en" => "Operating equipment for feed production, such as feed mills and mixing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29139,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów produkcji pasz, kontrolowanie jakości surowców i gotowych pasz.",
                    "en" => "Monitoring feed production processes, controlling the quality of raw materials and finished feeds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29140,
                "name" => json_encode([
                    "pl" => "Utrzymywanie urządzeń w dobrym stanie technicznym, przeprowadzanie konserwacji.",
                    "en" => "Maintaining equipment in good technical condition, performing maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29141,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności pasz z normami.",
                    "en" => "Collaborating with the quality department to ensure feeds meet standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29142,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji pasz, dostosowywanie maszyn do rodzaju pasz.",
                    "en" => "Optimizing feed production processes, adjusting machines for the type of feed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29143,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem pasz oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing feed packaging and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_PIECZYWA = [
            ["id" => 29144,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji pieczywa, w tym mielenie mąki, wyrabianie ciasta, pieczenie.",
                    "en" => "Operating equipment for bread production, including milling flour, kneading dough, baking."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29145,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów pieczenia, kontrolowanie temperatury i wilgotności.",
                    "en" => "Monitoring baking processes, controlling temperature and humidity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29146,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców oraz gotowego pieczywa.",
                    "en" => "Controlling the quality of raw materials and finished bread products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29147,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem pakowania pieczywa oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing bread packaging and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29148,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji pieczywa w celu zwiększenia wydajności.",
                    "en" => "Optimizing bread production processes to increase efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29149,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji pieczywa z normami.",
                    "en" => "Collaborating with the quality department to ensure bread production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_PIWA = [
            ["id" => 29150,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji piwa, w tym warzenie, fermentacja, filtracja.",
                    "en" => "Operating equipment for beer production, including brewing, fermentation, and filtration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29151,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców oraz gotowego piwa, przeprowadzanie analiz laboratoryjnych.",
                    "en" => "Controlling the quality of raw materials and finished beer, conducting laboratory analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29152,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów fermentacji piwa, kontrolowanie temperatury, pH i czasu.",
                    "en" => "Monitoring beer fermentation processes, controlling temperature, pH, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29153,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji piwa, zwiększenie efektywności i jakości.",
                    "en" => "Optimizing beer production processes, increasing efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29154,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem piwa oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing beer packaging and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29155,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji piwa z normami.",
                    "en" => "Collaborating with the quality department to ensure beer production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_SPIRYTUSU = [
            ["id" => 29156,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń do produkcji spirytusu, w tym destylacja, oczyszczanie i fermentacja.",
                    "en" => "Operating machines and equipment for the production of spirits, including distillation, purification, and fermentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29157,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów technologicznych w produkcji spirytusu, takich jak temperatura, ciśnienie i pH.",
                    "en" => "Monitoring technological parameters in spirit production, such as temperature, pressure, and pH."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29158,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców oraz gotowego spirytusu, przeprowadzanie analiz laboratoryjnych.",
                    "en" => "Controlling the quality of raw materials and finished spirits, conducting laboratory analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29159,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji spirytusu, zwiększanie efektywności produkcji.",
                    "en" => "Optimizing the spirit production processes, increasing production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29160,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem spirytusu i kontrolowanie warunków przechowywania.",
                    "en" => "Managing packaging of spirits and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29161,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji spirytusu z normami.",
                    "en" => "Collaborating with the quality department to ensure spirit production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_TŁUSZCZÓW_ROŚLINNYCH = [
            ["id" => 29162,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji tłuszczów roślinnych, w tym tłoczenie, rafinacja i ekstrakcja.",
                    "en" => "Operating equipment for the production of vegetable oils, including pressing, refining, and extraction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29163,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów technologicznych w produkcji tłuszczów roślinnych, takich jak temperatura i ciśnienie.",
                    "en" => "Monitoring technological parameters in vegetable oil production, such as temperature and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29164,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców roślinnych oraz gotowych tłuszczów roślinnych.",
                    "en" => "Controlling the quality of raw vegetable materials and finished vegetable oils."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29165,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji tłuszczów roślinnych w celu zwiększenia wydajności.",
                    "en" => "Optimizing vegetable oil production processes to increase efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29166,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem tłuszczów roślinnych oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing vegetable oil packaging and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29167,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji tłuszczów roślinnych z normami.",
                    "en" => "Collaborating with the quality department to ensure vegetable oil production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WINA = [
            ["id" => 29168,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji wina, w tym fermentacja, dojrzewanie i pakowanie.",
                    "en" => "Operating equipment for wine production, including fermentation, aging, and packaging."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29169,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu fermentacji, kontrolowanie temperatury, czasu i pH.",
                    "en" => "Monitoring fermentation processes, controlling temperature, time, and pH."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29170,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców i gotowego wina, przeprowadzanie analiz laboratoryjnych.",
                    "en" => "Controlling the quality of raw materials and finished wine, conducting laboratory analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29171,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji wina, w tym poprawa efektywności fermentacji i pakowania.",
                    "en" => "Optimizing wine production processes, including improving fermentation and packaging efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29172,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem wina i kontrolowanie warunków przechowywania.",
                    "en" => "Managing wine packaging and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29173,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji wina z normami.",
                    "en" => "Collaborating with the quality department to ensure wine production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_CUKIERNICZYCH = [
            ["id" => 29174,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji wyrobów cukierniczych, takich jak ciastka, czekoladki, cukierki.",
                    "en" => "Operating equipment for the production of confectionery products, such as cookies, chocolates, and candies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29175,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu produkcji, kontrolowanie temperatury, wilgotności i czasu.",
                    "en" => "Monitoring the production process, controlling temperature, humidity, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29176,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców oraz gotowych wyrobów cukierniczych.",
                    "en" => "Controlling the quality of raw materials and finished confectionery products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29177,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji wyrobów cukierniczych, w tym zwiększanie wydajności i jakości.",
                    "en" => "Optimizing confectionery production processes, including increasing efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29178,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem wyrobów cukierniczych i kontrolowanie warunków przechowywania.",
                    "en" => "Managing packaging of confectionery products and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29179,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji wyrobów cukierniczych z normami.",
                    "en" => "Collaborating with the quality department to ensure confectionery production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_MLECZARSKICH = [
            ["id" => 29180,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji wyrobów mleczarskich, takich jak sery, jogurty, mleko.",
                    "en" => "Operating equipment for dairy product production, such as cheese, yogurt, and milk."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29181,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu produkcji, kontrolowanie temperatury, czasu i pH.",
                    "en" => "Monitoring the production process, controlling temperature, time, and pH."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29182,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców oraz gotowych wyrobów mleczarskich.",
                    "en" => "Controlling the quality of raw materials and finished dairy products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29183,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji wyrobów mleczarskich w celu poprawy wydajności.",
                    "en" => "Optimizing dairy product production processes to improve efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29184,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem wyrobów mleczarskich i kontrolowanie warunków przechowywania.",
                    "en" => "Managing packaging of dairy products and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29185,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji wyrobów mleczarskich z normami.",
                    "en" => "Collaborating with the quality department to ensure dairy product production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_SPIRYTUSOWYCH = [
            ["id" => 29186,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń do produkcji wyrobów spirytusowych, takich jak wódka, likiery, napoje alkoholowe.",
                    "en" => "Operating machines and equipment for the production of alcoholic products, such as vodka, liqueurs, and alcoholic beverages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29187,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu produkcji wyrobów spirytusowych, kontrolowanie jakości surowców i alkoholu.",
                    "en" => "Monitoring the production process of spirits, controlling the quality of raw materials and alcohol."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29188,
                "name" => json_encode([
                    "pl" => "Kontrola parametrów technologicznych, takich jak temperatura i ciśnienie w procesach destylacji.",
                    "en" => "Controlling technological parameters such as temperature and pressure during distillation processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29189,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji spirytusowych napojów alkoholowych.",
                    "en" => "Optimizing the production processes of alcoholic beverages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29190,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem i etykietowaniem produktów spirytusowych.",
                    "en" => "Managing packaging and labeling of alcoholic products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29191,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji spirytusów z normami.",
                    "en" => "Collaborating with the quality department to ensure spirit production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRZEROBU_ZIARNA_KAKAO = [
            ["id" => 29192,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do przerobu ziarna kakaowego, w tym prażenie, mielenie i produkcja masy kakaowej.",
                    "en" => "Operating machines for cocoa bean processing, including roasting, grinding, and cocoa mass production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29193,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu przerobu ziarna kakaowego, kontrolowanie temperatury, czasu i wilgotności.",
                    "en" => "Monitoring the cocoa bean processing process, controlling temperature, time, and humidity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29194,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców kakaowych oraz gotowej masy kakaowej.",
                    "en" => "Controlling the quality of cocoa raw materials and finished cocoa mass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29195,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji masy kakaowej w celu zwiększenia wydajności.",
                    "en" => "Optimizing cocoa mass production processes to increase efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29196,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem produktów kakaowych oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing cocoa product packaging and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29197,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji masy kakaowej z normami.",
                    "en" => "Collaborating with the quality department to ensure cocoa mass production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRZEROBU_ZIARNA_ZBÓŻ = [
            ["id" => 29198,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do młynowania i przetwórstwa ziarna zbóż, kontrolowanie parametrów produkcji.",
                    "en" => "Operating machines for milling and processing cereal grains, controlling production parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29199,
                "name" => json_encode([
                    "pl" => "Kontrola jakości ziarna zbóż oraz gotowych produktów, takich jak mąka i pasze.",
                    "en" => "Controlling the quality of cereal grains and finished products such as flour and animal feed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29200,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów młynarskich, dostosowywanie ustawień maszyn do wymagań produkcji.",
                    "en" => "Monitoring milling processes, adjusting machine settings to production requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29201,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem pakowania i magazynowania produktów zbożowych.",
                    "en" => "Managing packaging and storage of cereal products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29202,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów przetwórstwa ziarna w celu zwiększenia wydajności produkcji.",
                    "en" => "Optimizing grain processing processes to increase production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29203,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produktów z normami.",
                    "en" => "Collaborating with the quality department to ensure products comply with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_SUSZENIA_ZBÓŻ = [
            ["id" => 29204,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń do suszenia ziarna, kontrolowanie parametrów temperatury i wilgotności.",
                    "en" => "Operating machines and equipment for drying grains, controlling temperature and humidity parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29205,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu suszenia, kontrolowanie wydajności maszyn oraz jakości wysuszonego ziarna.",
                    "en" => "Monitoring the drying process, controlling machine performance and the quality of dried grains."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29206,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności z normami jakości suszonych zbóż.",
                    "en" => "Collaborating with the quality department to ensure compliance with dried grain quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29207,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem pakowania suszonego ziarna oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing the packaging of dried grain and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29208,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów suszenia, dostosowywanie maszyn do wymagań produkcji.",
                    "en" => "Optimizing drying processes, adjusting machines to production requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29209,
                "name" => json_encode([
                    "pl" => "Utrzymywanie urządzeń w dobrym stanie technicznym, przeprowadzanie konserwacji.",
                    "en" => "Maintaining equipment in good technical condition, performing maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_ELEWATORÓW_ZBOŻOWYCH = [
            ["id" => 29210,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń elewatorów zbożowych, monitorowanie procesu transportu i przechowywania zbóż.",
                    "en" => "Operating grain elevator equipment, monitoring the transport and storage of grains."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29211,
                "name" => json_encode([
                    "pl" => "Kontrola jakości ziarna zmagazynowanego w elewatorach, przeprowadzanie odpowiednich analiz.",
                    "en" => "Controlling the quality of grain stored in elevators, conducting relevant analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29212,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów urządzeń transportowych, takich jak prędkość przenośników, temperatura i wilgotność.",
                    "en" => "Monitoring parameters of transport equipment, such as conveyor speed, temperature, and humidity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29213,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu transportu i przechowywania zbóż, zwiększenie efektywności.",
                    "en" => "Optimizing the grain transport and storage process, increasing efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29214,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem zboża do transportu i kontrolowanie warunków przechowywania w elewatorach.",
                    "en" => "Managing grain packaging for transport and controlling storage conditions in elevators."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29215,
                "name" => json_encode([
                    "pl" => "Utrzymywanie urządzeń elewatorów w dobrym stanie technicznym, przeprowadzanie konserwacji.",
                    "en" => "Maintaining elevator equipment in good technical condition, performing maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_LINII_ASEPTYCZNEGO_ROZLEWU_W_OPAKOWANIA_KARTONOWE = [
            ["id" => 29216,
                "name" => json_encode([
                    "pl" => "Obsługa linii aseptycznego rozlewu płynów w opakowania kartonowe, monitorowanie temperatury i ciśnienia.",
                    "en" => "Operating the aseptic filling line for liquids into carton packaging, monitoring temperature and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29217,
                "name" => json_encode([
                    "pl" => "Kontrola jakości pakowanych płynów oraz odpowiednich warunków przechowywania.",
                    "en" => "Controlling the quality of packaged liquids and appropriate storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29218,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem pakowania produktów i etykietowania opakowań kartonowych.",
                    "en" => "Managing the product packaging process and carton labeling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29219,
                "name" => json_encode([
                    "pl" => "Utrzymywanie urządzeń do aseptycznego rozlewu w dobrym stanie technicznym, przeprowadzanie konserwacji.",
                    "en" => "Maintaining aseptic filling equipment in good technical condition, performing maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29220,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu pakowania w aseptycznych warunkach, zapewnienie zgodności z normami bezpieczeństwa.",
                    "en" => "Monitoring the packaging process in aseptic conditions, ensuring compliance with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29221,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia jakości i bezpieczeństwa rozlewanego produktu.",
                    "en" => "Collaborating with the quality department to ensure the quality and safety of the filled product."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_PRZEMYSŁU_TYTONIOWEGO = [
            ["id" => 29222,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń w przemyśle tytoniowym, w tym suszenie, cięcie i pakowanie tytoniu.",
                    "en" => "Operating machines and equipment in the tobacco industry, including drying, cutting, and packaging tobacco."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29223,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu produkcji tytoniu, kontrolowanie temperatury, wilgotności oraz jakości tytoniu.",
                    "en" => "Monitoring the tobacco production process, controlling temperature, humidity, and tobacco quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29224,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowca oraz gotowych wyrobów tytoniowych.",
                    "en" => "Controlling the quality of tobacco raw materials and finished tobacco products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29225,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji tytoniu, poprawa efektywności i jakości produktów.",
                    "en" => "Optimizing tobacco production processes, improving efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29226,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem wyrobów tytoniowych oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing tobacco product packaging and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29227,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji tytoniu z normami.",
                    "en" => "Collaborating with the quality department to ensure tobacco production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_DROBIU = [
            ["id" => 29228,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do przetwórstwa drobiu, w tym cięcie, pakowanie i przetwarzanie mięsa drobiowego.",
                    "en" => "Operating machines for poultry processing, including cutting, packaging, and processing poultry meat."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29229,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu przetwórstwa drobiu, kontrolowanie temperatury, ciśnienia i wydajności.",
                    "en" => "Monitoring the poultry processing process, controlling temperature, pressure, and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29230,
                "name" => json_encode([
                    "pl" => "Kontrola jakości mięsa drobiowego oraz gotowych wyrobów drobiarskich.",
                    "en" => "Controlling the quality of poultry meat and finished poultry products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29231,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji drobiu, poprawa wydajności i jakości produktów.",
                    "en" => "Optimizing poultry production processes, improving efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29232,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem wyrobów drobiowych oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing poultry product packaging and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29233,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji drobiu z normami.",
                    "en" => "Collaborating with the quality department to ensure poultry production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_KAWY = [
            ["id" => 29234,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do przetwórstwa kawy, w tym mielenie, prażenie i pakowanie ziaren kawy.",
                    "en" => "Operating machines for coffee processing, including grinding, roasting, and packaging coffee beans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29235,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu przetwórstwa kawy, kontrolowanie temperatury, czasu i wydajności.",
                    "en" => "Monitoring the coffee processing process, controlling temperature, time, and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29236,
                "name" => json_encode([
                    "pl" => "Kontrola jakości ziaren kawy oraz gotowych produktów kawowych.",
                    "en" => "Controlling the quality of coffee beans and finished coffee products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29237,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów przetwórstwa kawy, poprawa wydajności i jakości produktów.",
                    "en" => "Optimizing coffee processing processes, improving efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29238,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem wyrobów kawowych oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing coffee product packaging and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29239,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji kawy z normami.",
                    "en" => "Collaborating with the quality department to ensure coffee production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_MIĘSA = [
            ["id" => 29240,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do przetwórstwa mięsa, w tym cięcie, pakowanie i przetwarzanie mięsa.",
                    "en" => "Operating machines for meat processing, including cutting, packaging, and processing meat."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29241,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu przetwórstwa mięsa, kontrolowanie temperatury, ciśnienia i wydajności.",
                    "en" => "Monitoring the meat processing process, controlling temperature, pressure, and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29242,
                "name" => json_encode([
                    "pl" => "Kontrola jakości mięsa oraz gotowych wyrobów mięsnych.",
                    "en" => "Controlling the quality of meat and finished meat products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29243,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji mięsa, poprawa wydajności i jakości produktów.",
                    "en" => "Optimizing meat production processes, improving efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29244,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem wyrobów mięsnych oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing meat product packaging and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29245,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji mięsa z normami.",
                    "en" => "Collaborating with the quality department to ensure meat production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_OWOCOWO_WARZYWNEGO = [
            ["id" => 29246,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do przetwórstwa owoców i warzyw, w tym mycie, krojenie, pakowanie i przetwarzanie.",
                    "en" => "Operating machines for fruit and vegetable processing, including washing, cutting, packaging, and processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29247,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu przetwórstwa owoców i warzyw, kontrolowanie temperatury, wilgotności i czasu.",
                    "en" => "Monitoring fruit and vegetable processing, controlling temperature, humidity, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29248,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców oraz gotowych produktów owocowo-warzywnych.",
                    "en" => "Controlling the quality of raw materials and finished fruit and vegetable products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29249,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji owoców i warzyw, poprawa wydajności i jakości produktów.",
                    "en" => "Optimizing fruit and vegetable production processes, improving efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29250,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem wyrobów owocowo-warzywnych oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing packaging of fruit and vegetable products and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29251,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji owoców i warzyw z normami.",
                    "en" => "Collaborating with the quality department to ensure fruit and vegetable production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_RYB = [
            ["id" => 29252,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do przetwórstwa ryb, w tym cięcie, pakowanie i przetwarzanie mięsa rybnego.",
                    "en" => "Operating machines for fish processing, including cutting, packaging, and processing fish meat."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29253,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu przetwórstwa ryb, kontrolowanie temperatury, ciśnienia i wydajności.",
                    "en" => "Monitoring the fish processing process, controlling temperature, pressure, and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29254,
                "name" => json_encode([
                    "pl" => "Kontrola jakości mięsa rybnego oraz gotowych wyrobów rybnych.",
                    "en" => "Controlling the quality of fish meat and finished fish products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29255,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji ryb, poprawa wydajności i jakości produktów.",
                    "en" => "Optimizing fish production processes, improving efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29256,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem wyrobów rybnych oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing fish product packaging and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29257,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji rybnej z normami.",
                    "en" => "Collaborating with the quality department to ensure fish production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_ZIEMNIACZANEGO = [
            ["id" => 29258,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do przetwórstwa ziemniaków, w tym mycie, krojenie, gotowanie i pakowanie.",
                    "en" => "Operating machines for potato processing, including washing, cutting, cooking, and packaging."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29259,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu przetwórstwa ziemniaków, kontrolowanie temperatury, wilgotności i czasu.",
                    "en" => "Monitoring the potato processing process, controlling temperature, humidity, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29260,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców ziemniaczanych oraz gotowych produktów ziemniaczanych.",
                    "en" => "Controlling the quality of potato raw materials and finished potato products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29261,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji ziemniaczanej, poprawa wydajności i jakości produktów.",
                    "en" => "Optimizing potato production processes, improving efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29262,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem wyrobów ziemniaczanych oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing potato product packaging and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29263,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji ziemniaczanej z normami.",
                    "en" => "Collaborating with the quality department to ensure potato production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_SPOŻYWCZYCH_I_POKREWNI = [
            ["id" => 29264,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń do produkcji wyrobów spożywczych, takich jak przetwórstwo warzyw, owoców, napojów.",
                    "en" => "Operating machines and equipment for the production of food products, such as processing vegetables, fruits, and beverages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29265,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu produkcji spożywczej, kontrolowanie parametrów technologicznych.",
                    "en" => "Monitoring the food production process, controlling technological parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29266,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców oraz gotowych wyrobów spożywczych.",
                    "en" => "Controlling the quality of raw materials and finished food products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29267,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji spożywczej, poprawa wydajności i jakości produktów.",
                    "en" => "Optimizing food production processes, improving efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29268,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem produktów spożywczych oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing food product packaging and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29269,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji spożywczej z normami.",
                    "en" => "Collaborating with the quality department to ensure food production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_URZĄDZEŃ_PRZEMYSŁU_SPOŻYWCZEGO = [
            ["id" => 29270,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń przemysłu spożywczego, w tym maszyny do mielenia, mieszania, pakowania.",
                    "en" => "Operating food industry machines and equipment, including milling, mixing, and packaging machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29271,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu produkcji spożywczej, kontrolowanie parametrów technologicznych.",
                    "en" => "Monitoring the food production process, controlling technological parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29272,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców oraz gotowych wyrobów spożywczych.",
                    "en" => "Controlling the quality of raw materials and finished food products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29273,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji spożywczej, poprawa wydajności i jakości produktów.",
                    "en" => "Optimizing food production processes, improving efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29274,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem produktów spożywczych oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing food product packaging and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29275,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji spożywczej z normami.",
                    "en" => "Collaborating with the quality department to ensure food production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ROBOTNICY_PRZETWÓRSTWA_SUROWCÓW_ROŚLINNYCH = [
            ["id" => 29276,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń do przetwórstwa surowców roślinnych, w tym obróbka nasion, zbóż, warzyw, owoców.",
                    "en" => "Operating machines and equipment for processing plant raw materials, including the processing of seeds, grains, vegetables, and fruits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29277,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców roślinnych oraz gotowych produktów roślinnych.",
                    "en" => "Controlling the quality of plant raw materials and finished plant products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29278,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu przetwórstwa surowców roślinnych, kontrolowanie parametrów takich jak temperatura, czas i wilgotność.",
                    "en" => "Monitoring the processing of plant raw materials, controlling parameters such as temperature, time, and humidity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29279,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów przetwórstwa roślinnego, poprawa wydajności i jakości produktów.",
                    "en" => "Optimizing plant processing processes, improving efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29280,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem produktów roślinnych oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing the packaging of plant products and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29281,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności przetwórstwa roślinnego z normami.",
                    "en" => "Collaborating with the quality department to ensure plant processing complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MASLARZ = [
            ["id" => 29282,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji masła, w tym oddzielanie masła od maślanki oraz formowanie masła.",
                    "en" => "Operating equipment for butter production, including separating butter from buttermilk and forming butter."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29283,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu produkcji masła, kontrolowanie temperatury, wilgotności i czasu.",
                    "en" => "Monitoring the butter production process, controlling temperature, humidity, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29284,
                "name" => json_encode([
                    "pl" => "Kontrola jakości mleka i maślanki, zapewnianie odpowiednich parametrów produkcji masła.",
                    "en" => "Controlling the quality of milk and buttermilk, ensuring proper butter production parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29285,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji masła, poprawa wydajności i jakości produktów.",
                    "en" => "Optimizing butter production processes, improving efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29286,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem masła i kontrolowanie warunków przechowywania.",
                    "en" => "Managing butter packaging and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29287,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji masła z normami.",
                    "en" => "Collaborating with the quality department to ensure butter production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SEROWAR = [
            ["id" => 29288,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji serów, w tym koagulowanie mleka, formowanie i dojrzewanie serów.",
                    "en" => "Operating equipment for cheese production, including coagulating milk, forming, and aging cheese."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29289,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu produkcji serów, kontrolowanie parametrów takich jak temperatura, czas i pH.",
                    "en" => "Monitoring the cheese production process, controlling parameters such as temperature, time, and pH."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29290,
                "name" => json_encode([
                    "pl" => "Kontrola jakości mleka i gotowych serów, zapewnianie zgodności z wymaganiami jakościowymi.",
                    "en" => "Controlling the quality of milk and finished cheeses, ensuring compliance with quality requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29291,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji serów, poprawa wydajności i jakości produktów.",
                    "en" => "Optimizing cheese production processes, improving efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29292,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem serów oraz kontrolowanie warunków przechowywania.",
                    "en" => "Managing cheese packaging and controlling storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29293,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji serów z normami.",
                    "en" => "Collaborating with the quality department to ensure cheese production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ROBOTNICY_W_PRODUKCJI_WYROBÓW_MLECZARSKICH = [
            ["id" => 29294,
                "name" => json_encode([
                    "pl" => "Pomocnicza obsługa maszyn i urządzeń w produkcji wyrobów mleczarskich, takich jak sery, jogurty, mleko.",
                    "en" => "Auxiliary operation of machines and equipment in dairy product production, such as cheese, yogurt, and milk."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29295,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości surowców oraz gotowych produktów mleczarskich.",
                    "en" => "Monitoring the quality of raw materials and finished dairy products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29296,
                "name" => json_encode([
                    "pl" => "Kontrola temperatury, pH i innych parametrów podczas produkcji mleka i produktów mleczarskich.",
                    "en" => "Controlling temperature, pH, and other parameters during the production of milk and dairy products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29297,
                "name" => json_encode([
                    "pl" => "Pomoc w optymalizacji procesów produkcji mleczarskiej, zwiększanie wydajności i jakości.",
                    "en" => "Assisting in optimizing dairy production processes, increasing efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29298,
                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem i przechowywaniem produktów mleczarskich.",
                    "en" => "Managing the packaging and storage of dairy products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 29299,
                "name" => json_encode([
                    "pl" => "Współpraca z działem jakości w celu zapewnienia zgodności produkcji mleczarskiej z normami.",
                    "en" => "Collaborating with the quality department to ensure dairy production complies with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];





        DB::table('detail_projects')->insert(array_merge(
            $SPECJALISTA_DO_SPRAW_DIETETYKI,
            $SPECJALISTA_ZYWIENIA_CZŁOWIEKA,
            $POZOSTALI_DIETETYCY_I_SPECJALIŚCI_DO_SPRAW_ZYWIENIA,
            $KONTROLER_JAKOŚCI_PRODUKTÓW_SPOŻYWCZYCH,
            $TECHNIK_PRZETWÓRSTWA_MLECZARSKIEGO,
            $TECHNIK_TECHNOLOGII_ZYWNOSCI_CUKROWNICTWO,
            $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRODUKCJA_CUKIERNICZA,
            $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRODUKCJA_KONCENTRATÓW_SPOŻYWCZYCH,
            $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRODUKCJA_PIEKARSKO_CIASTKARSKA,
            $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZECHOWALNICTWO_CHLODNICZE,
            $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_FERMENTACYJNE,
            $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_JAJCZARSKO_DROBIARSKIE,
            $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_MIESNE,
            $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_MLECZARSKIE,
            $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_OWOCOWO_WARZYWNE,
            $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_RYBNE,
            $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_SUROWCÓW_OLEJARSKICH,
            $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_ZBOŻOWE,
            $TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_ZIEMNIACZANE,
            $POZOSTALI_TECHNICY_TECHNOLOGII_ZYWNOSCI,
            $TECHNIK_TECHNOLOGII_ZYWNOSCI,
            $DIETETYK,
            $TECHNIK_ZYWIENIA_I_GOSPODARSTWA_DOMOWEGO,
            $POZOSTALI_DIETETYCY_I_ZYWNIENIOWCY,
            $ROZBIERACZ_WYKWARCZ,
            $WEDLINIARZ,
            $POZOSTALI_MASARZE_ROBOTNICY_W_PRZETWÓRSTWIE_RYB,
            $APARATOWY_PRODUKCJI_DROŻDŻY,
            $APARATOWY_PRODUKCJI_OCTU,
            $OPERATOR_URZĄDZEŃ_DO_KONFEKCJONOWANIA_HERBATY,
            $OPERATOR_URZĄDZEŃ_DO_OBRÓBKI_SUROWCA_MLECZARSKIEGO,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_CUKRU,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_KONCENTRATÓW_SPOŻYWCZYCH,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MAJONEZU_I_MUSZTARDY,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MAKARONU,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_NAPOJÓW_BEZALKOHOLICZNYCH,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_PASZ,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_PIECZYWA,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_PIWA,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_SPIRYTUSU,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_TŁUSZCZÓW_ROŚLINNYCH,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WINA,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_CUKIERNICZYCH,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_MLECZARSKICH,
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_SPIRYTUSOWYCH,
            $OPERATOR_URZĄDZEŃ_DO_PRZEROBU_ZIARNA_KAKAO,
            $OPERATOR_URZĄDZEŃ_DO_PRZEROBU_ZIARNA_ZBÓŻ,
            $OPERATOR_URZĄDZEŃ_DO_SUSZENIA_ZBÓŻ,
            $OPERATOR_URZĄDZEŃ_ELEWATORÓW_ZBOŻOWYCH,
            $OPERATOR_URZĄDZEŃ_LINII_ASEPTYCZNEGO_ROZLEWU_W_OPAKOWANIA_KARTONOWE,
            $OPERATOR_URZĄDZEŃ_PRZEMYSŁU_TYTONIOWEGO,
            $OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_DROBIU,
            $OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_KAWY,
            $OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_MIĘSA,
            $OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_OWOCOWO_WARZYWNEGO,
            $OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_RYB,
            $OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_ZIEMNIACZANEGO,
            $POZOSTALI_OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_SPOŻYWCZYCH_I_POKREWNI,
            $OPERATOR_MASZYN_I_URZĄDZEŃ_PRZEMYSŁU_SPOŻYWCZEGO,
            $POZOSTALI_ROBOTNICY_PRZETWÓRSTWA_SUROWCÓW_ROŚLINNYCH,
            $MASLARZ,
            $SEROWAR,
            $POZOSTALI_ROBOTNICY_W_PRODUKCJI_WYROBÓW_MLECZARSKICH,
        ));

        Category::whereId('2582')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_DIETETYKI)->pluck('id')->toArray());
        Category::whereId('2583')->first()->detailprojects()->attach(collect($SPECJALISTA_ZYWIENIA_CZŁOWIEKA)->pluck('id')->toArray());
        Category::whereId('2584')->first()->detailprojects()->attach(collect($POZOSTALI_DIETETYCY_I_SPECJALIŚCI_DO_SPRAW_ZYWIENIA)->pluck('id')->toArray());
        Category::whereId('2586')->first()->detailprojects()->attach(collect($KONTROLER_JAKOŚCI_PRODUKTÓW_SPOŻYWCZYCH)->pluck('id')->toArray());
        Category::whereId('2587')->first()->detailprojects()->attach(collect($TECHNIK_PRZETWÓRSTWA_MLECZARSKIEGO)->pluck('id')->toArray());
        Category::whereId('2588')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_ZYWNOSCI_CUKROWNICTWO)->pluck('id')->toArray());
        Category::whereId('2589')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_ZYWNOSCI_PRODUKCJA_CUKIERNICZA)->pluck('id')->toArray());
        Category::whereId('2590')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_ZYWNOSCI_PRODUKCJA_KONCENTRATÓW_SPOŻYWCZYCH)->pluck('id')->toArray());
        Category::whereId('2591')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_ZYWNOSCI_PRODUKCJA_PIEKARSKO_CIASTKARSKA)->pluck('id')->toArray());
        Category::whereId('2592')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZECHOWALNICTWO_CHLODNICZE)->pluck('id')->toArray());
        Category::whereId('2593')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_FERMENTACYJNE)->pluck('id')->toArray());
        Category::whereId('2594')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_JAJCZARSKO_DROBIARSKIE)->pluck('id')->toArray());
        Category::whereId('2595')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_MIESNE)->pluck('id')->toArray());
        Category::whereId('2596')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_MLECZARSKIE)->pluck('id')->toArray());
        Category::whereId('2597')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_OWOCOWO_WARZYWNE)->pluck('id')->toArray());
        Category::whereId('2598')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_RYBNE)->pluck('id')->toArray());
        Category::whereId('2599')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_SUROWCÓW_OLEJARSKICH)->pluck('id')->toArray());
        Category::whereId('2600')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_ZBOŻOWE)->pluck('id')->toArray());
        Category::whereId('2601')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_ZYWNOSCI_PRZETWÓRSTWO_ZIEMNIACZANE)->pluck('id')->toArray());
        Category::whereId('2602')->first()->detailprojects()->attach(collect($POZOSTALI_TECHNICY_TECHNOLOGII_ZYWNOSCI)->pluck('id')->toArray());
        Category::whereId('2603')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_ZYWNOSCI)->pluck('id')->toArray());
        Category::whereId('2605')->first()->detailprojects()->attach(collect($DIETETYK)->pluck('id')->toArray());
        Category::whereId('2606')->first()->detailprojects()->attach(collect($TECHNIK_ZYWIENIA_I_GOSPODARSTWA_DOMOWEGO)->pluck('id')->toArray());
        Category::whereId('2607')->first()->detailprojects()->attach(collect($POZOSTALI_DIETETYCY_I_ZYWNIENIOWCY)->pluck('id')->toArray());
        Category::whereId('2580')->first()->detailprojects()->attach(collect($ROZBIERACZ_WYKWARCZ)->pluck('id')->toArray());
        Category::whereId('2616')->first()->detailprojects()->attach(collect($WEDLINIARZ)->pluck('id')->toArray());
        Category::whereId('2617')->first()->detailprojects()->attach(collect($POZOSTALI_MASARZE_ROBOTNICY_W_PRZETWÓRSTWIE_RYB)->pluck('id')->toArray());
        Category::whereId('2631')->first()->detailprojects()->attach(collect($APARATOWY_PRODUKCJI_DROŻDŻY)->pluck('id')->toArray());
        Category::whereId('2632')->first()->detailprojects()->attach(collect($APARATOWY_PRODUKCJI_OCTU)->pluck('id')->toArray());
        Category::whereId('2633')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_KONFEKCJONOWANIA_HERBATY)->pluck('id')->toArray());
        Category::whereId('2634')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_OBRÓBKI_SUROWCA_MLECZARSKIEGO)->pluck('id')->toArray());
        Category::whereId('2635')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_CUKRU)->pluck('id')->toArray());
        Category::whereId('2636')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_KONCENTRATÓW_SPOŻYWCZYCH)->pluck('id')->toArray());
        Category::whereId('2637')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MAJONEZU_I_MUSZTARDY)->pluck('id')->toArray());
        Category::whereId('2638')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_MAKARONU)->pluck('id')->toArray());
        Category::whereId('2639')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_NAPOJÓW_BEZALKOHOLICZNYCH)->pluck('id')->toArray());
        Category::whereId('2640')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_PASZ)->pluck('id')->toArray());
        Category::whereId('2641')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_PIECZYWA)->pluck('id')->toArray());
        Category::whereId('2642')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_PIWA)->pluck('id')->toArray());
        Category::whereId('2643')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_SPIRYTUSU)->pluck('id')->toArray());
        Category::whereId('2644')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_TŁUSZCZÓW_ROŚLINNYCH)->pluck('id')->toArray());
        Category::whereId('2645')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WINA)->pluck('id')->toArray());
        Category::whereId('2646')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_CUKIERNICZYCH)->pluck('id')->toArray());
        Category::whereId('2647')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_MLECZARSKICH)->pluck('id')->toArray());
        Category::whereId('2648')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_SPIRYTUSOWYCH)->pluck('id')->toArray());
        Category::whereId('2649')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRZEROBU_ZIARNA_KAKAO)->pluck('id')->toArray());
        Category::whereId('2650')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRZEROBU_ZIARNA_ZBÓŻ)->pluck('id')->toArray());
        Category::whereId('2651')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_SUSZENIA_ZBÓŻ)->pluck('id')->toArray());
        Category::whereId('2652')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_ELEWATORÓW_ZBOŻOWYCH)->pluck('id')->toArray());
        Category::whereId('2653')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_LINII_ASEPTYCZNEGO_ROZLEWU_W_OPAKOWANIA_KARTONOWE)->pluck('id')->toArray());
        Category::whereId('2654')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_PRZEMYSŁU_TYTONIOWEGO)->pluck('id')->toArray());
        Category::whereId('2655')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_DROBIU)->pluck('id')->toArray());
        Category::whereId('2656')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_KAWY)->pluck('id')->toArray());
        Category::whereId('2657')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_MIĘSA)->pluck('id')->toArray());
        Category::whereId('2658')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_OWOCOWO_WARZYWNEGO)->pluck('id')->toArray());
        Category::whereId('2659')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_RYB)->pluck('id')->toArray());
        Category::whereId('2660')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRZETWÓRSTWA_ZIEMNIACZANEGO)->pluck('id')->toArray());
        Category::whereId('2661')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_SPOŻYWCZYCH_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2662')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZĄDZEŃ_PRZEMYSŁU_SPOŻYWCZEGO)->pluck('id')->toArray());
        Category::whereId('2580')->first()->detailprojects()->attach(collect($POZOSTALI_ROBOTNICY_PRZETWÓRSTWA_SUROWCÓW_ROŚLINNYCH)->pluck('id')->toArray());
        Category::whereId('2668')->first()->detailprojects()->attach(collect($MASLARZ)->pluck('id')->toArray());
        Category::whereId('2669')->first()->detailprojects()->attach(collect($SEROWAR)->pluck('id')->toArray());
        Category::whereId('2670')->first()->detailprojects()->attach(collect($POZOSTALI_ROBOTNICY_W_PRODUKCJI_WYROBÓW_MLECZARSKICH)->pluck('id')->toArray());
    }
}

