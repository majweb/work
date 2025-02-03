<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectMechanicy2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();
        $INŻYNIER_MECHANIK_CIEPLNO_MECHANICZNE_URZĄDZENIA_INSTALACJE_I_SIECI_ENERGETYCZNE = [

            [
                "name" => json_encode([
                    "pl" => "Projektowanie i optymalizacja cieplno-mechanicznych urządzeń oraz instalacji energetycznych, zapewniając ich wydajność i zgodność z normami.",
                    "en" => "Designing and optimizing thermal-mechanical equipment and energy systems, ensuring their efficiency and compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23677
            ],
            [
                "name" => json_encode([
                    "pl" => "Wdrażanie i kontrolowanie systemów zarządzania energią, monitorowanie pracy urządzeń oraz analizowanie ich wydajności.",
                    "en" => "Implementing and controlling energy management systems, monitoring equipment performance, and analyzing their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23678
            ],
            [
                "name" => json_encode([
                    "pl" => "Analiza procesów energetycznych, przygotowywanie specyfikacji technicznych i dobór urządzeń do instalacji.",
                    "en" => "Analyzing energy processes, preparing technical specifications, and selecting equipment for installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23679
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie projektami związanymi z budową, modernizacją i eksploatacją urządzeń energetycznych.",
                    "en" => "Managing projects related to the construction, modernization, and operation of energy equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23680
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz technicznych, diagnostyki oraz napraw urządzeń cieplno-mechanicznych w sektorze energetycznym.",
                    "en" => "Performing technical analyses, diagnostics, and repairs of thermal-mechanical devices in the energy sector."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23681
            ],
            [
                "name" => json_encode([
                    "pl" => "Przygotowanie raportów technicznych dotyczących wydajności i efektywności instalacji energetycznych.",
                    "en" => "Preparing technical reports on the performance and efficiency of energy installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23682
            ]
        ];
        $INŻYNIER_MECHANIK_MASZYNY_I_URZĄDZENIA_DO_OBRÓBKI_METALI = [

            [
                "name" => json_encode([
                    "pl" => "Projektowanie, rozwój i optymalizacja maszyn i urządzeń do obróbki metali, zapewniając ich niezawodność i wydajność.",
                    "en" => "Designing, developing, and optimizing machines and equipment for metalworking, ensuring their reliability and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23683
            ],
            [
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich technologii obróbczych oraz materiałów do produkcji maszyn wykorzystywanych w obróbce metali.",
                    "en" => "Selecting appropriate machining technologies and materials for manufacturing machines used in metalworking."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23684
            ],
            [
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów produkcyjnych i diagnostyka maszyn, w tym przeprowadzanie inspekcji oraz konserwacji urządzeń.",
                    "en" => "Overseeing production processes and machine diagnostics, including conducting inspections and maintenance of equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23685
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów obróbczych w celu poprawy jakości produkcji i redukcji kosztów operacyjnych.",
                    "en" => "Optimizing machining processes to improve production quality and reduce operational costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23686
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami inżynierskimi w zakresie projektowania nowych urządzeń oraz wdrażania innowacyjnych rozwiązań technologicznych.",
                    "en" => "Collaborating with engineering teams on designing new equipment and implementing innovative technological solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23687
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów i walidacji nowych maszyn oraz urządzeń do obróbki metali, w celu zapewnienia ich zgodności z wymaganiami branżowymi.",
                    "en" => "Conducting tests and validation of new machines and equipment for metalworking, ensuring compliance with industry standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23688
            ]
        ];
        $INŻYNIER_MECHANIK_MASZYNY_I_URZĄDZENIA_ENERGETYCZNE = [

            [
                "name" => json_encode([
                    "pl" => "Projektowanie maszyn i urządzeń wykorzystywanych w branży energetycznej, w tym kotłów, turbin i silników.",
                    "en" => "Designing machines and equipment used in the energy sector, including boilers, turbines, and engines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23689
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja maszyn energetycznych w celu poprawy ich efektywności i wydajności operacyjnej.",
                    "en" => "Optimizing energy machines to improve their efficiency and operational performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23690
            ],
            [
                "name" => json_encode([
                    "pl" => "Projektowanie systemów energetycznych, takich jak generatory, instalacje chłodnicze, sprężarki i inne urządzenia wykorzystywane w procesach energetycznych.",
                    "en" => "Designing energy systems, such as generators, cooling installations, compressors, and other equipment used in energy processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23691
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie i nadzorowanie procesów produkcji energii w zakresie maszyn i urządzeń energetycznych.",
                    "en" => "Managing and overseeing energy production processes concerning energy machines and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23692
            ],
            [
                "name" => json_encode([
                    "pl" => "Wykonywanie analiz wydajności maszyn i urządzeń energetycznych oraz wdrażanie działań poprawiających ich sprawność.",
                    "en" => "Performing efficiency analyses of energy machines and equipment and implementing actions to improve their performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23693
            ],
            [
                "name" => json_encode([
                    "pl" => "Opracowanie dokumentacji technicznej urządzeń energetycznych i przygotowanie specyfikacji do produkcji.",
                    "en" => "Developing technical documentation for energy equipment and preparing specifications for production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23694
            ]
        ];
        $INŻYNIER_MECHANIK_MASZYNY_I_URZĄDZENIA_PRZEMYSŁOWE = [

            [
                "name" => json_encode([
                    "pl" => "Projektowanie i rozwój maszyn oraz urządzeń wykorzystywanych w produkcji przemysłowej, w tym urządzeń do obróbki, montażu i pakowania.",
                    "en" => "Designing and developing machines and equipment used in industrial production, including equipment for machining, assembly, and packaging."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23695
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami projektowymi w celu stworzenia maszyn o wysokiej wydajności i precyzji.",
                    "en" => "Collaborating with design teams to create machines with high performance and precision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23696
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych z wykorzystaniem maszyn i urządzeń przemysłowych, w celu zwiększenia efektywności produkcji.",
                    "en" => "Optimizing production processes using industrial machines and equipment to increase production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23697
            ],
            [
                "name" => json_encode([
                    "pl" => "Nadzór nad procesami produkcyjnymi i zapewnienie, że maszyny i urządzenia spełniają normy jakości.",
                    "en" => "Overseeing production processes and ensuring that machines and equipment meet quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23698
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów maszyn i urządzeń przemysłowych oraz zapewnienie ich zgodności z normami bezpieczeństwa i wydajności.",
                    "en" => "Conducting tests on industrial machines and equipment and ensuring their compliance with safety and performance standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23699
            ],
            [
                "name" => json_encode([
                    "pl" => "Przygotowanie dokumentacji technicznej maszyn i urządzeń oraz współpraca w procesie ich produkcji i wdrażania.",
                    "en" => "Preparing technical documentation for machines and equipment and collaborating in the production and implementation process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23700
            ]
        ];
        $INŻYNIER_MECHANIK_MECHANIKA_PRECYZYJNA = [

            [
                "name" => json_encode([
                    "pl" => "Projektowanie i rozwój precyzyjnych urządzeń mechanicznych, takich jak mikrosystemy i urządzenia wykorzystywane w przemyśle wysokiej precyzji.",
                    "en" => "Designing and developing precision mechanical devices such as microsystems and devices used in high-precision industries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23701
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych w zakresie obróbki precyzyjnej, zapewniając wysoką dokładność i jakość produktów.",
                    "en" => "Optimizing manufacturing processes in precision machining, ensuring high accuracy and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23702
            ],
            [
                "name" => json_encode([
                    "pl" => "Nadzór nad produkcją precyzyjnych części maszyn i urządzeń, w tym weryfikacja jakości i zgodności z normami.",
                    "en" => "Overseeing the production of precision machine and equipment parts, including quality verification and compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23703
            ],
            [
                "name" => json_encode([
                    "pl" => "Projektowanie systemów pomiarowych i urządzeń precyzyjnych wykorzystywanych w przemyśle elektroniki, optyki i innych branżach wysokiej precyzji.",
                    "en" => "Designing measurement systems and precision devices used in the electronics, optics, and other high-precision industries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23704
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami inżynierskimi w celu zapewnienia wysokiej jakości komponentów precyzyjnych oraz ich zgodności z wymaganiami technicznymi.",
                    "en" => "Collaborating with engineering teams to ensure high-quality precision components and their compliance with technical requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23705
            ],
            [
                "name" => json_encode([
                    "pl" => "Testowanie i walidacja urządzeń precyzyjnych, ocena ich funkcjonalności i niezawodności w różnych warunkach operacyjnych.",
                    "en" => "Testing and validating precision devices, assessing their functionality and reliability under various operating conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23706
            ]
        ];
        $INŻYNIER_MECHANIK_ŚRODKI_TRANSPORTU = [

            [
                "name" => json_encode([
                    "pl" => "Projektowanie i optymalizacja systemów mechanicznych w pojazdach oraz innych środkach transportu, zapewniając ich wydajność i bezpieczeństwo.",
                    "en" => "Designing and optimizing mechanical systems in vehicles and other means of transportation, ensuring their efficiency and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23707
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami produkcji i montażu systemów mechanicznych wykorzystywanych w środkach transportu.",
                    "en" => "Managing production and assembly processes of mechanical systems used in means of transportation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23708
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów funkcjonalnych i niezawodnościowych dla nowych modeli środków transportu.",
                    "en" => "Conducting functional and reliability tests for new transportation vehicle models."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23709
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja układów napędowych, zawieszeń i innych kluczowych elementów mechanicznych w pojazdach.",
                    "en" => "Optimizing powertrains, suspensions, and other key mechanical components in vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23710
            ],
            [
                "name" => json_encode([
                    "pl" => "Wdrażanie nowoczesnych rozwiązań technologicznych w produkcji pojazdów oraz innych środków transportu.",
                    "en" => "Implementing modern technological solutions in vehicle and other means of transportation production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23711
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami naprawczymi i konserwacyjnymi w transporcie, zapewniając sprawność mechaniczną pojazdów.",
                    "en" => "Managing repair and maintenance processes in transportation to ensure the mechanical efficiency of vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23712
            ]
        ];
        $INŻYNIER_MECHANIK_TECHNOLOGIA_MECHANICZNA = [

            [
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie nowych technologii mechanicznych w procesach produkcyjnych, w tym automatyzacja i optymalizacja.",
                    "en" => "Developing and implementing new mechanical technologies in production processes, including automation and optimization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23713
            ],
            [
                "name" => json_encode([
                    "pl" => "Projektowanie narzędzi i maszyn wykorzystywanych w obróbce materiałów w różnych branżach przemysłowych.",
                    "en" => "Designing tools and machines used in material processing in various industrial sectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23714
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych, zarządzanie jakością oraz efektywnością technologiczną w produkcji maszyn i urządzeń.",
                    "en" => "Optimizing production processes, managing quality, and technological efficiency in the production of machines and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23715
            ],
            [
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów oraz procesów obróbczych do produkcji elementów maszyn i urządzeń mechanicznych.",
                    "en" => "Selecting appropriate materials and machining processes for producing machine and mechanical device components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23716
            ],
            [
                "name" => json_encode([
                    "pl" => "Wdrażanie innowacyjnych rozwiązań w produkcji maszyn i urządzeń mechanicznych w celu zwiększenia ich efektywności i niezawodności.",
                    "en" => "Implementing innovative solutions in the production of mechanical machines and equipment to increase their efficiency and reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23717
            ],
            [
                "name" => json_encode([
                    "pl" => "Analiza i testowanie nowych technologii produkcyjnych, zapewniając ich zgodność z wymaganiami jakościowymi i technologicznymi.",
                    "en" => "Analyzing and testing new production technologies, ensuring their compliance with quality and technical requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23718
            ]
        ];
        $INŻYNIER_MECHANIK_LOTNICZY = [

            [
                "name" => json_encode([
                    "pl" => "Projektowanie, rozwój i testowanie systemów mechanicznych w statkach powietrznych, w tym silników, układów hydraulicznych i innych podzespołów.",
                    "en" => "Designing, developing, and testing mechanical systems in aircraft, including engines, hydraulic systems, and other components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23719
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja wydajności i niezawodności mechanicznych systemów lotniczych, przeprowadzanie testów na nowych urządzeniach.",
                    "en" => "Optimizing the performance and reliability of aviation mechanical systems, conducting tests on new equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23720
            ],
            [
                "name" => json_encode([
                    "pl" => "Nadzór nad montażem i instalacją systemów mechanicznych w samolotach oraz kontrola zgodności z normami lotniczymi.",
                    "en" => "Supervising the assembly and installation of mechanical systems in aircraft and ensuring compliance with aviation standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23721
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami projektowymi w celu opracowywania nowych rozwiązań technicznych w lotnictwie.",
                    "en" => "Collaborating with design teams to develop new technical solutions in aviation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23722
            ],
            [
                "name" => json_encode([
                    "pl" => "Projektowanie i testowanie systemów awaryjnych oraz urządzeń zabezpieczających w statkach powietrznych.",
                    "en" => "Designing and testing emergency systems and safety devices in aircraft."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23723
            ],
            [
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności z normami bezpieczeństwa i jakości przy projektowaniu i testowaniu systemów mechanicznych w lotnictwie.",
                    "en" => "Ensuring compliance with safety and quality standards when designing and testing mechanical systems in aviation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23724
            ]
        ];
        $INŻYNIER_MECHANIZACJI_ROLNICTWA = [

            [
                "name" => json_encode([
                    "pl" => "Projektowanie, dobór i wdrażanie nowoczesnych technologii mechanicznych w rolnictwie, w tym maszyn do uprawy, zbiorów i obróbki.",
                    "en" => "Designing, selecting, and implementing modern mechanical technologies in agriculture, including machines for cultivation, harvesting, and processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23725
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów rolniczych poprzez zastosowanie maszyn i urządzeń rolniczych, w celu zwiększenia efektywności i zmniejszenia kosztów.",
                    "en" => "Optimizing agricultural processes through the use of agricultural machinery and equipment to increase efficiency and reduce costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23726
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie projektami związanymi z budową i modernizacją maszyn i urządzeń rolniczych.",
                    "en" => "Managing projects related to the construction and modernization of agricultural machinery and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23727
            ],
            [
                "name" => json_encode([
                    "pl" => "Analiza potrzeb rolniczych i dobór odpowiednich maszyn i urządzeń w celu zwiększenia wydajności i efektywności produkcji rolniczej.",
                    "en" => "Analyzing agricultural needs and selecting appropriate machinery and equipment to increase agricultural production efficiency and effectiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23728
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań technologicznych i analiz efektywności maszyn rolniczych oraz wdrażanie innowacyjnych rozwiązań technologicznych.",
                    "en" => "Conducting technological research and efficiency analysis of agricultural machinery and implementing innovative technological solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23729
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem produkcji maszyn rolniczych oraz koordynowanie działań inżynierskich w ramach projektów mechanizacji rolnictwa.",
                    "en" => "Managing the production process of agricultural machinery and coordinating engineering activities within agricultural mechanization projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23730
            ]
        ];
        $INŻYNIER_SPAWALNIK = [

            [
                "name" => json_encode([
                    "pl" => "Projektowanie i kontrolowanie procesów spawalniczych w różnych branżach przemysłowych, w tym określanie najlepszych metod i materiałów spawalniczych.",
                    "en" => "Designing and controlling welding processes in various industrial sectors, including determining the best welding methods and materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23731
            ],
            [
                "name" => json_encode([
                    "pl" => "Wdrażanie procedur spawalniczych oraz zapewnianie zgodności z normami jakościowymi i technologicznymi.",
                    "en" => "Implementing welding procedures and ensuring compliance with quality and technological standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23732
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem spawaczy, nadzorowanie jakości pracy oraz zapewnianie przestrzegania zasad BHP.",
                    "en" => "Managing a team of welders, overseeing the quality of work, and ensuring compliance with safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23733
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów jakościowych i technicznych procesów spawalniczych oraz raportowanie wyników.",
                    "en" => "Conducting quality and technical audits of welding processes and reporting the results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23734
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów spawalniczych w celu poprawy wydajności i jakości spawów.",
                    "en" => "Optimizing welding processes to improve efficiency and weld quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23735
            ],
            [
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników spawalniczych oraz przeprowadzanie testów i certyfikacji nowych spawaczy.",
                    "en" => "Training welding staff and conducting tests and certification of new welders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23736
            ]
        ];
        $KONSTRUKTOR_FORM_WTRYSKOWYCH = [

            [
                "name" => json_encode([
                    "pl" => "Projektowanie i rozwój form wtryskowych, w tym dobór materiałów oraz technologii produkcji.",
                    "en" => "Designing and developing injection molds, including material selection and production technology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23737
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji form wtryskowych w celu poprawy jakości i wydajności produkcji.",
                    "en" => "Optimizing the production processes of injection molds to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23738
            ],
            [
                "name" => json_encode([
                    "pl" => "Analiza wymagań projektowych i technologicznych, przygotowywanie specyfikacji dla produkcji form wtryskowych.",
                    "en" => "Analyzing design and technological requirements, preparing specifications for injection mold production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23739
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami produkcyjnymi w celu zapewnienia precyzyjnego wykonania form wtryskowych.",
                    "en" => "Collaborating with production teams to ensure precise manufacturing of injection molds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23740
            ],
            [
                "name" => json_encode([
                    "pl" => "Testowanie form wtryskowych pod kątem ich funkcjonalności, niezawodności i trwałości.",
                    "en" => "Testing injection molds for functionality, reliability, and durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23741
            ],
            [
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem produkcji form wtryskowych, kontrola jakości i zapewnienie zgodności z normami branżowymi.",
                    "en" => "Supervising the production process of injection molds, quality control, and ensuring compliance with industry standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23742
            ]
        ];
        $POZOSTALI_INŻYNIEROWIE_MECHANICY = [

            [
                "name" => json_encode([
                    "pl" => "Projektowanie, analiza i optymalizacja procesów mechanicznych, w tym systemów napędowych, hydraulicznych oraz innych urządzeń mechanicznych.",
                    "en" => "Designing, analyzing, and optimizing mechanical processes, including power systems, hydraulics, and other mechanical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23743
            ],
            [
                "name" => json_encode([
                    "pl" => "Rozwój i wdrażanie nowych rozwiązań mechanicznych w różnych branżach przemysłowych, w tym automatyzacja i robotyzacja.",
                    "en" => "Developing and implementing new mechanical solutions in various industrial sectors, including automation and robotics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23744
            ],
            [
                "name" => json_encode([
                    "pl" => "Analiza i testowanie nowych maszyn i urządzeń mechanicznych, ocena ich wydajności oraz wprowadzanie usprawnień.",
                    "en" => "Analyzing and testing new machines and mechanical equipment, evaluating their performance, and implementing improvements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23745
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami inżynierskimi, produkcyjnymi i projektowymi w celu zapewnienia wydajności maszyn i systemów mechanicznych.",
                    "en" => "Collaborating with engineering, production, and design teams to ensure the efficiency of machines and mechanical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23746
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami produkcji maszyn mechanicznych, kontrola jakości oraz optymalizacja procesów produkcyjnych.",
                    "en" => "Managing machine production processes, quality control, and optimizing production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23747
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz technicznych maszyn i urządzeń mechanicznych oraz wdrażanie usprawnień w zakresie wydajności i niezawodności.",
                    "en" => "Conducting technical analyses of machines and mechanical equipment and implementing improvements in efficiency and reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23748
            ]
        ];
        $INŻYNIER_CHŁODNICTWA_I_KLIMATYZACJI = [

            [
                "name" => json_encode([
                    "pl" => "Projektowanie systemów chłodniczych i klimatyzacyjnych w różnych sektorach, w tym dobór urządzeń, materiałów i technologii.",
                    "en" => "Designing refrigeration and air conditioning systems in various sectors, including selecting equipment, materials, and technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23749
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów chłodzenia i klimatyzacji w celu poprawy efektywności energetycznej i redukcji kosztów eksploatacyjnych.",
                    "en" => "Optimizing cooling and air conditioning processes to improve energy efficiency and reduce operating costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23750
            ],
            [
                "name" => json_encode([
                    "pl" => "Wdrażanie nowoczesnych technologii w zakresie chłodnictwa i klimatyzacji, takich jak technologie odzysku ciepła czy systemy oparte na odnawialnych źródłach energii.",
                    "en" => "Implementing modern refrigeration and air conditioning technologies, such as heat recovery systems and renewable energy-based systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23751
            ],
            [
                "name" => json_encode([
                    "pl" => "Nadzór nad projektowaniem, instalowaniem oraz utrzymaniem systemów chłodzenia i klimatyzacji, zapewniając ich niezawodność i wydajność.",
                    "en" => "Supervising the design, installation, and maintenance of cooling and air conditioning systems, ensuring their reliability and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23752
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów i analiz efektywności systemów chłodniczych i klimatyzacyjnych w celu poprawy ich funkcjonowania.",
                    "en" => "Conducting audits and efficiency analyses of refrigeration and air conditioning systems to improve their operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23753
            ],
            [
                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji projektowej oraz koordynowanie działań związanych z instalacją i serwisem urządzeń chłodniczych i klimatyzacyjnych.",
                    "en" => "Creating project documentation and coordinating activities related to the installation and servicing of refrigeration and air conditioning equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23754
            ]
        ];
        $TECHNIK_MECHANIK_BUDOWY_ŚRODKÓW_TRANSPORTU = [

            [
                "name" => json_encode([
                    "pl" => "Projektowanie, montaż oraz testowanie konstrukcji mechanicznych w pojazdach i innych środkach transportu.",
                    "en" => "Designing, assembling, and testing mechanical structures in vehicles and other means of transportation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23755
            ],
            [
                "name" => json_encode([
                    "pl" => "Analiza technologii budowy środków transportu oraz wdrażanie innowacyjnych rozwiązań konstrukcyjnych.",
                    "en" => "Analyzing the technologies for building means of transportation and implementing innovative construction solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23756
            ],
            [
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów i komponentów do produkcji konstrukcji środków transportu.",
                    "en" => "Selecting appropriate materials and components for manufacturing transportation vehicle structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23757
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem projektowym przy tworzeniu nowych modeli środków transportu oraz optymalizacja procesów produkcji.",
                    "en" => "Collaborating with the design team in creating new models of transportation vehicles and optimizing production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23758
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów stabilności, bezpieczeństwa i wydajności mechanicznych systemów w pojazdach.",
                    "en" => "Conducting tests on the stability, safety, and performance of mechanical systems in vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23759
            ],
            [
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości produkcji oraz kontrola procesu montażu i testowania środków transportu.",
                    "en" => "Monitoring production quality and controlling the assembly and testing process of transportation vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23760
            ]
        ];
        $TECHNIK_MECHANIK_EKSPLOATACJI_ŚRODKÓW_TRANSPORTU = [

            [
                "name" => json_encode([
                    "pl" => "Zarządzanie eksploatacją maszyn i urządzeń mechanicznych wykorzystywanych w transporcie, zapewniając ich sprawność i bezpieczeństwo.",
                    "en" => "Managing the operation of mechanical machines and equipment used in transportation, ensuring their functionality and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23761
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka i naprawa maszyn oraz urządzeń transportowych, przeprowadzanie inspekcji technicznych.",
                    "en" => "Diagnosing and repairing machines and transport equipment, conducting technical inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23762
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami technicznymi w zakresie konserwacji oraz modernizacji środków transportu.",
                    "en" => "Collaborating with technical teams on the maintenance and modernization of transportation vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23763
            ],
            [
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów eksploatacyjnych w transporcie i optymalizacja wydajności systemów mechanicznych.",
                    "en" => "Monitoring operational processes in transportation and optimizing the performance of mechanical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23764
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analizy kosztów utrzymania i eksploatacji sprzętu transportowego.",
                    "en" => "Conducting cost analysis for the maintenance and operation of transport equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23765
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją techniczną, planowanie działań konserwacyjnych oraz organizowanie napraw środków transportu.",
                    "en" => "Managing technical documentation, planning maintenance activities, and organizing repairs for transport vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23766
            ]
        ];
        $TECHNIK_MECHANIK_MASZYN_I_URZĄDZEŃ = [

            [
                "name" => json_encode([
                    "pl" => "Projektowanie, naprawa i konserwacja maszyn oraz urządzeń mechanicznych wykorzystywanych w różnych branżach przemysłowych.",
                    "en" => "Designing, repairing, and maintaining mechanical machines and equipment used in various industrial sectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23767
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych i technologicznych maszyn oraz urządzeń mechanicznych.",
                    "en" => "Optimizing production and technological processes for machines and mechanical equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23768
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka, konserwacja i naprawa maszyn, kontrola jakości oraz monitorowanie wydajności urządzeń mechanicznych.",
                    "en" => "Diagnosing, maintaining, and repairing machines, quality control, and monitoring the performance of mechanical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23769
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z działami produkcyjnymi w zakresie modernizacji i ulepszania maszyn oraz urządzeń mechanicznych.",
                    "en" => "Collaborating with production departments on the modernization and improvement of machines and mechanical equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23770
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie i kontrolowanie procesu produkcji maszyn, w tym ustalanie specyfikacji technicznych i nadzór nad procesem wytwórczym.",
                    "en" => "Managing and controlling the machine production process, including establishing technical specifications and overseeing the manufacturing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23771
            ],
            [
                "name" => json_encode([
                    "pl" => "Wykonywanie analiz efektywności maszyn i urządzeń oraz wprowadzanie zmian mających na celu poprawę wydajności.",
                    "en" => "Performing efficiency analyses of machines and equipment and implementing changes to improve performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23772
            ]
        ];
        $TECHNIK_MECHANIK_OBRÓBKI_SKRAWANIEM = [

            [
                "name" => json_encode([
                    "pl" => "Nadzór nad procesami obróbki skrawaniem, w tym dobór narzędzi, maszyn i technologii.",
                    "en" => "Supervising machining processes, including selecting tools, machines, and technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23773
            ],
            [
                "name" => json_encode([
                    "pl" => "Programowanie maszyn CNC oraz optymalizacja procesów obróbczych w celu zapewnienia precyzyjnych i wydajnych wyników.",
                    "en" => "Programming CNC machines and optimizing machining processes to ensure precise and efficient results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23774
            ],
            [
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych części po obróbce skrawaniem, przeprowadzanie testów wytrzymałościowych i pomiarów.",
                    "en" => "Quality control of machined parts, conducting durability tests and measurements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23775
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja ustawień maszyn oraz procesu obróbczy w celu zwiększenia wydajności i redukcji odpadów.",
                    "en" => "Optimizing machine settings and the machining process to increase efficiency and reduce waste."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23776
            ],
            [
                "name" => json_encode([
                    "pl" => "Nadzór nad utrzymaniem maszyn skrawających, zaplanowanie przeglądów i konserwacji sprzętu.",
                    "en" => "Supervising the maintenance of cutting machines, planning inspections and equipment maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23777
            ],
            [
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii obróbki skrawaniem w celu poprawy jakości oraz efektywności procesów produkcyjnych.",
                    "en" => "Implementing new cutting technologies to improve quality and efficiency of manufacturing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23778
            ]
        ];
        $TECHNIK_MECHANIK_PRECYZYJNY = [

            [
                "name" => json_encode([
                    "pl" => "Projektowanie i wytwarzanie precyzyjnych urządzeń mechanicznych, takich jak instrumenty pomiarowe, maszyny do obróbki bardzo precyzyjnych elementów.",
                    "en" => "Designing and manufacturing precision mechanical devices, such as measuring instruments and machines for machining very precise components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23779
            ],
            [
                "name" => json_encode([
                    "pl" => "Ustalanie specyfikacji i wymagań technicznych dla produkcji komponentów precyzyjnych, w tym dobór materiałów i technologii obróbczych.",
                    "en" => "Determining technical specifications and requirements for the production of precision components, including material selection and machining technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23780
            ],
            [
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych komponentów precyzyjnych, przeprowadzanie pomiarów i testów wytrzymałościowych.",
                    "en" => "Quality control of produced precision components, conducting measurements and durability tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23781
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych w zakresie obróbki precyzyjnej, zapewniając wysoką jakość i minimalizację odpadów.",
                    "en" => "Optimizing manufacturing processes in precision machining, ensuring high quality and waste minimization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23782
            ],
            [
                "name" => json_encode([
                    "pl" => "Projektowanie systemów pomiarowych i kontrolnych do testowania komponentów precyzyjnych w różnych branżach.",
                    "en" => "Designing measurement and control systems for testing precision components in various industries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23783
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami produkcyjnymi w celu opracowywania nowych rozwiązań technologicznych w zakresie precyzyjnej obróbki.",
                    "en" => "Collaborating with production teams to develop new technological solutions for precision machining."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23784
            ]
        ];
        $TECHNIK_MECHANIK_URZĄDZEŃ_PRZEMYSŁOWYCH = [

            [
                "name" => json_encode([
                    "pl" => "Projektowanie, montaż i konserwacja urządzeń mechanicznych wykorzystywanych w różnych gałęziach przemysłu.",
                    "en" => "Designing, assembling, and maintaining mechanical equipment used in various industrial sectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23785
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych poprzez zastosowanie nowoczesnych urządzeń mechanicznych i technologii.",
                    "en" => "Optimizing production processes through the use of modern mechanical equipment and technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23786
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka, konserwacja i naprawa maszyn i urządzeń mechanicznych wykorzystywanych w produkcji.",
                    "en" => "Diagnostics, maintenance, and repair of machines and mechanical equipment used in production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23787
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z działami produkcji i inżynierii w zakresie modernizacji urządzeń mechanicznych.",
                    "en" => "Collaborating with production and engineering departments on the modernization of mechanical equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23788
            ],
            [
                "name" => json_encode([
                    "pl" => "Analiza efektywności maszyn przemysłowych oraz wprowadzanie usprawnień technologicznych.",
                    "en" => "Analyzing the efficiency of industrial machines and implementing technological improvements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23789
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem produkcji urządzeń przemysłowych, kontrola jakości oraz zarządzanie dokumentacją techniczną.",
                    "en" => "Managing the production process of industrial equipment, quality control, and managing technical documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23790
            ]
        ];
        $TECHNIK_MECHANIZACJI_ROLNICTWA = [

            [
                "name" => json_encode([
                    "pl" => "Projektowanie i eksploatacja maszyn rolniczych wykorzystywanych w uprawach, zbiorach i obróbce roślin.",
                    "en" => "Designing and operating agricultural machines used in cultivation, harvesting, and processing of plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23791
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja pracy maszyn rolniczych, w tym kontrola wydajności, efektywności i oszczędności paliwa.",
                    "en" => "Optimizing the operation of agricultural machines, including performance control, efficiency, and fuel savings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23792
            ],
            [
                "name" => json_encode([
                    "pl" => "Dobór maszyn rolniczych do specyficznych warunków i typów prac rolniczych, w tym analizy techniczne i dobór narzędzi.",
                    "en" => "Selecting agricultural machines for specific conditions and types of farming tasks, including technical analysis and tool selection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23793
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie eksploatacją maszyn rolniczych, organizacja konserwacji oraz naprawa sprzętu.",
                    "en" => "Managing the operation of agricultural machinery, organizing maintenance, and repairing equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23794
            ],
            [
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników rolnych w zakresie obsługi i konserwacji maszyn rolniczych.",
                    "en" => "Training farm workers in operating and maintaining agricultural machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23795
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów maszyn rolniczych, ocena ich efektywności oraz wdrażanie usprawnień technologicznych.",
                    "en" => "Conducting tests on agricultural machines, evaluating their efficiency, and implementing technological improvements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23796
            ]
        ];
        $POZOSTALI_TECHNICY_MECHANICY = [

            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie diagnostyki, napraw i konserwacji maszyn oraz urządzeń mechanicznych w różnych branżach przemysłowych.",
                    "en" => "Conducting diagnostics, repairs, and maintenance of machines and mechanical equipment in various industrial sectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23797
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami inżynierskimi w zakresie projektowania, rozwoju i optymalizacji maszyn mechanicznych.",
                    "en" => "Collaborating with engineering teams in the design, development, and optimization of mechanical machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23798
            ],
            [
                "name" => json_encode([
                    "pl" => "Nadzór nad produkcją maszyn mechanicznych, kontrola jakości, zapewnienie zgodności z normami.",
                    "en" => "Supervising the production of mechanical machines, quality control, ensuring compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23799
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcyjnych z wykorzystaniem maszyn mechanicznych, zwiększając efektywność i wydajność.",
                    "en" => "Optimizing production processes using mechanical machines, increasing efficiency and productivity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23800
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją maszyn mechanicznych, w tym organizowanie napraw, diagnostyki i modernizacji.",
                    "en" => "Managing the maintenance of mechanical machines, including organizing repairs, diagnostics, and modernization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23801
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz technicznych maszyn oraz wprowadzanie usprawnień w zakresie ich funkcjonowania.",
                    "en" => "Conducting technical analyses of machines and implementing improvements in their functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23802
            ]
        ];
        $TECHNIK_KONSERWATOR_URZĄDZEŃ_DŹWIGOWYCH = [

            [
                "name" => json_encode([
                    "pl" => "Konserwacja, naprawa oraz diagnostyka urządzeń dźwigowych wykorzystywanych w przemyśle oraz transporcie.",
                    "en" => "Maintenance, repair, and diagnostics of lifting equipment used in industry and transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23803
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie okresowych przeglądów technicznych urządzeń dźwigowych, kontrola ich stanu technicznego.",
                    "en" => "Conducting regular technical inspections of lifting equipment, checking their technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23804
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów konserwacji dźwigów w celu zwiększenia ich efektywności i wydajności.",
                    "en" => "Optimizing the maintenance processes of cranes to increase their efficiency and productivity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23805
            ],
            [
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie obsługi i konserwacji urządzeń dźwigowych oraz przestrzegania zasad BHP.",
                    "en" => "Training employees on the operation and maintenance of lifting equipment and adherence to safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23806
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami technicznymi w celu wdrażania nowych rozwiązań technologicznych w zakresie urządzeń dźwigowych.",
                    "en" => "Collaborating with technical teams to implement new technological solutions for lifting equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23807
            ],
            [
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesów konserwacji oraz utrzymania urządzeń dźwigowych w systemach zarządzania.",
                    "en" => "Documenting maintenance and upkeep processes for lifting equipment in management systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23808
            ]
        ];
        $TECHNIK_URZĄDZEŃ_DŹWIGOWYCH = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa urządzeń dźwigowych wykorzystywanych w różnych gałęziach przemysłu.",
                    "en" => "Installation, maintenance, and repair of lifting equipment used in various industries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23809
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów sprawności urządzeń dźwigowych oraz kontrola jakości i bezpieczeństwa pracy.",
                    "en" => "Conducting performance tests of lifting equipment and controlling work quality and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23810
            ],
            [
                "name" => json_encode([
                    "pl" => "Kontrola techniczna dźwigów, diagnozowanie usterek oraz wdrażanie działań naprawczych.",
                    "en" => "Technical inspection of cranes, diagnosing faults, and implementing corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23811
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z działami produkcyjnymi i technicznymi w celu zapewnienia ciągłości pracy urządzeń dźwigowych.",
                    "en" => "Collaborating with production and technical departments to ensure the continuous operation of lifting equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23812
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją techniczną urządzeń dźwigowych i tworzenie raportów technicznych.",
                    "en" => "Managing technical documentation of lifting equipment and creating technical reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23813
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją, inspekcją oraz kontrolą stanu technicznego urządzeń dźwigowych.",
                    "en" => "Managing maintenance, inspection, and control of the technical condition of lifting equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23814
            ]
        ];
        $TECHNIK_MECHANIZACJI_ROLNICTWA_I_AGROTRONIKI = [

            [
                "name" => json_encode([
                    "pl" => "Projektowanie i eksploatacja systemów mechanicznych i automatycznych wykorzystywanych w rolnictwie i agrotronice.",
                    "en" => "Designing and operating mechanical and automated systems used in agriculture and agrotronics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23815
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie wdrażaniem technologii informacyjnych i systemów automatyki w rolnictwie.",
                    "en" => "Managing the implementation of information technologies and automation systems in agriculture."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23816
            ],
            [
                "name" => json_encode([
                    "pl" => "Wdrażanie nowoczesnych narzędzi i maszyn rolniczych, w tym systemów GPS i telemetrycznych.",
                    "en" => "Implementing modern agricultural tools and machinery, including GPS and telematics systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23817
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów rolniczych z wykorzystaniem technologii automatyzacji, robotyki i precyzyjnego rolnictwa.",
                    "en" => "Optimizing agricultural processes using automation, robotics, and precision farming technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23818
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie systemami nawadniania, monitorowania i zautomatyzowanego zarządzania gospodarstwami rolnymi.",
                    "en" => "Managing irrigation systems, monitoring, and automated farm management systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23819
            ],
            [
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie nowoczesnych technologii w rolnictwie i agrotronice.",
                    "en" => "Training employees in modern technologies in agriculture and agrotronics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23820
            ]
        ];
        $MECHANIK_AUTOBUSÓW = [

            [
                "name" => json_encode([
                    "pl" => "Diagnostyka, naprawa i konserwacja systemów mechanicznych w autobusach, w tym układów napędowych, zawieszenia i układów hamulcowych.",
                    "en" => "Diagnostics, repair, and maintenance of mechanical systems in buses, including powertrains, suspensions, and braking systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23821
            ],
            [
                "name" => json_encode([
                    "pl" => "Nadzór nad kontrolą techniczną autobusów, przygotowanie do przeglądów oraz wykonywanie napraw bieżących i prewencyjnych.",
                    "en" => "Supervising the technical inspection of buses, preparing them for inspections, and performing ongoing and preventive repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23822
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem inżynierów przy modernizacji autobusów, wdrażanie nowych rozwiązań technicznych.",
                    "en" => "Collaborating with engineering teams on bus modernization, implementing new technical solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23823
            ],
            [
                "name" => json_encode([
                    "pl" => "Analiza i testowanie wydajności autobusów, identyfikowanie usterek oraz wdrażanie działań naprawczych.",
                    "en" => "Analyzing and testing bus performance, identifying faults, and implementing corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23824
            ],
            [
                "name" => json_encode([
                    "pl" => "Obsługa systemów komputerowych diagnostyki pojazdów, wykonywanie diagnostyki komputerowej oraz przygotowanie raportów.",
                    "en" => "Operating vehicle diagnostic computer systems, performing computer diagnostics, and preparing reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23825
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie harmonogramem napraw i konserwacji autobusów, planowanie przeglądów technicznych.",
                    "en" => "Managing the repair and maintenance schedule for buses, planning technical inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23826
            ]
        ];
        $MECHANIK_CIĄGNIKÓW = [

            [
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i diagnostyka mechanicznych układów napędowych i hydraulicznych w ciągnikach rolniczych.",
                    "en" => "Repair, maintenance, and diagnostics of mechanical drive and hydraulic systems in agricultural tractors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23827
            ],
            [
                "name" => json_encode([
                    "pl" => "Kontrola stanu technicznego ciągników, planowanie napraw oraz wykonywanie przeglądów okresowych.",
                    "en" => "Inspecting the technical condition of tractors, planning repairs, and performing scheduled maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23828
            ],
            [
                "name" => json_encode([
                    "pl" => "Analiza i testowanie układów mechanicznych ciągników rolniczych oraz wykonywanie napraw i modyfikacji.",
                    "en" => "Analyzing and testing mechanical systems in agricultural tractors and performing repairs and modifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23829
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z działami produkcyjnymi w zakresie modernizacji oraz wdrażania nowych rozwiązań w ciągnikach rolniczych.",
                    "en" => "Collaborating with production departments on the modernization and implementation of new solutions in agricultural tractors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23830
            ],
            [
                "name" => json_encode([
                    "pl" => "Utrzymanie ciągników rolniczych w dobrym stanie technicznym, monitorowanie ich pracy oraz dbanie o ich sprawność.",
                    "en" => "Maintaining agricultural tractors in good technical condition, monitoring their performance, and ensuring their reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23831
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją techniczną ciągników oraz współpraca przy naprawach i konserwacjach maszyn rolniczych.",
                    "en" => "Managing the technical documentation of tractors and collaborating on repairs and maintenance of agricultural machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23832
            ]
        ];
        $MECHANIK_POJAZDÓW_SAMOCHODOWYCH = [

            [
                "name" => json_encode([
                    "pl" => "Diagnostyka, naprawa i konserwacja silników, układów napędowych, zawieszenia i innych systemów w pojazdach samochodowych.",
                    "en" => "Diagnostics, repair, and maintenance of engines, drivetrains, suspensions, and other systems in motor vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23833
            ],
            [
                "name" => json_encode([
                    "pl" => "Kontrola techniczna samochodów, przeprowadzanie testów diagnostycznych oraz wykonywanie napraw zgodnie z wymogami producentów.",
                    "en" => "Performing technical inspections of vehicles, conducting diagnostic tests, and carrying out repairs according to manufacturer requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23834
            ],
            [
                "name" => json_encode([
                    "pl" => "Naprawa układów elektrycznych, hydraulicznych i elektronicznych w samochodach, w tym wymiana części i naprawa uszkodzeń.",
                    "en" => "Repairing electrical, hydraulic, and electronic systems in vehicles, including part replacement and damage repair."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23835
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem technicznym przy wdrażaniu nowych technologii naprawy i konserwacji samochodów.",
                    "en" => "Collaborating with the technical team on the implementation of new car repair and maintenance technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23836
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów i regulacji systemów diagnostycznych, w tym układów zapłonowych i elektronicznych.",
                    "en" => "Conducting tests and calibration of diagnostic systems, including ignition and electronic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23837
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie magazynem części zamiennych, zamawianie potrzebnych materiałów oraz prowadzenie dokumentacji serwisowej.",
                    "en" => "Managing spare parts inventory, ordering necessary materials, and maintaining service documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23838
            ]
        ];
        $MECHANIK_SAMOCHODÓW_CIĘŻAROWYCH = [

            [
                "name" => json_encode([
                    "pl" => "Diagnostyka i naprawa systemów mechanicznych w samochodach ciężarowych, w tym silników, układów napędowych, układów hamulcowych i zawieszenia.",
                    "en" => "Diagnostics and repair of mechanical systems in heavy trucks, including engines, drivetrains, braking systems, and suspensions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23839
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie okresowych przeglądów technicznych samochodów ciężarowych oraz napraw bieżących.",
                    "en" => "Conducting regular technical inspections of heavy trucks and performing ongoing repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23840
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja i testowanie systemów mechanicznych w pojazdach ciężarowych, w tym diagnostyka usterek i naprawa.",
                    "en" => "Optimizing and testing mechanical systems in heavy vehicles, including fault diagnosis and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23841
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem w zakresie konserwacji, napraw i modernizacji samochodów ciężarowych.",
                    "en" => "Collaborating with the team on the maintenance, repair, and modernization of heavy trucks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23842
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją serwisową, planowanie harmonogramu napraw oraz przygotowanie części zamiennych do napraw.",
                    "en" => "Managing service documentation, planning repair schedules, and preparing spare parts for repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23843
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka komputerowa samochodów ciężarowych i dostosowywanie ustawień silników i układów elektronicznych.",
                    "en" => "Computer diagnostics of heavy trucks and adjusting engine and electronic system settings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23844
            ]
        ];
        $MECHANIK_SAMOCHODÓW_OSOBOWYCH = [

            [
                "name" => json_encode([
                    "pl" => "Diagnostyka, naprawa i konserwacja układów mechanicznych w samochodach osobowych, w tym silników, zawieszenia i układów hamulcowych.",
                    "en" => "Diagnostics, repair, and maintenance of mechanical systems in passenger cars, including engines, suspension, and braking systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23845
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie okresowych przeglądów technicznych samochodów osobowych, testowanie wydajności i diagnostyka usterek.",
                    "en" => "Performing regular technical inspections of passenger cars, testing performance, and diagnosing faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23846
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja działania układów mechanicznych, w tym systemów elektronicznych i komputerowych samochodów osobowych.",
                    "en" => "Optimizing the performance of mechanical systems, including electronic and computer systems in passenger cars."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23847
            ],
            [
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem naprawy, regulacji i konserwacji pojazdów osobowych w warsztatach samochodowych.",
                    "en" => "Supervising the repair, adjustment, and maintenance of passenger vehicles in car workshops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23848
            ],
            [
                "name" => json_encode([
                    "pl" => "Wykonywanie napraw w samochodach osobowych, w tym wymianę części i sprawdzanie systemów elektronicznych.",
                    "en" => "Performing repairs on passenger cars, including part replacement and checking electronic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23849
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem serwisowym w zakresie diagnostyki i naprawy skomplikowanych układów mechanicznych w samochodach osobowych.",
                    "en" => "Collaborating with the service team on diagnostics and repair of complex mechanical systems in passenger cars."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23850
            ]
        ];
        $MONTER_SAMOCHODOWEJ_INSTALACJI_GAZOWEJ_LPG = [

            [
                "name" => json_encode([
                    "pl" => "Montaż i serwisowanie instalacji gazowych LPG w pojazdach, w tym instalacja zbiorników, zaworów i przewodów.",
                    "en" => "Installation and servicing of LPG gas systems in vehicles, including installing tanks, valves, and pipes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23851
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka i naprawa systemów gazowych LPG w samochodach, kontrolowanie szczelności i wydajności instalacji.",
                    "en" => "Diagnostics and repair of LPG gas systems in cars, checking the seal and efficiency of installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23852
            ],
            [
                "name" => json_encode([
                    "pl" => "Wykonywanie przeglądów technicznych instalacji LPG w samochodach, wymiana zużytych części, kalibracja układów gazowych.",
                    "en" => "Performing technical inspections of LPG installations in vehicles, replacing worn-out parts, and calibrating gas systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23853
            ],
            [
                "name" => json_encode([
                    "pl" => "Kontrola jakości montażu i napraw instalacji LPG w pojazdach oraz przestrzeganie norm bezpieczeństwa.",
                    "en" => "Monitoring the quality of LPG installation assembly and repairs in vehicles and ensuring safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23854
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją techniczną dotyczącą instalacji gazowych LPG w pojazdach, w tym tworzenie raportów serwisowych.",
                    "en" => "Managing technical documentation related to LPG gas installations in vehicles, including creating service reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23855
            ],
            [
                "name" => json_encode([
                    "pl" => "Szkolenie kierowców w zakresie obsługi instalacji LPG w pojazdach i zasad bezpieczeństwa.",
                    "en" => "Training drivers on operating LPG systems in vehicles and safety guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23856
            ]
        ];
        $MECHANIK_MOTOCYKLOWY = [

            [
                "name" => json_encode([
                    "pl" => "Diagnostyka, naprawa i konserwacja układów mechanicznych w motocyklach, w tym silników, układów napędowych, zawieszenia i hamulców.",
                    "en" => "Diagnostics, repair, and maintenance of mechanical systems in motorcycles, including engines, drivetrains, suspension, and brakes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23857
            ],
            [
                "name" => json_encode([
                    "pl" => "Wykonywanie przeglądów okresowych motocyklów, regulowanie układów mechanicznych i elektronicznych.",
                    "en" => "Performing regular motorcycle inspections, adjusting mechanical and electronic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23858
            ],
            [
                "name" => json_encode([
                    "pl" => "Naprawa układów elektrycznych i elektronicznych w motocyklach, w tym instalacja oświetlenia i systemów zapłonowych.",
                    "en" => "Repairing electrical and electronic systems in motorcycles, including lighting installation and ignition systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23859
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem w zakresie modernizacji motocykli oraz wdrażania nowych rozwiązań technologicznych.",
                    "en" => "Collaborating with the team in the modernization of motorcycles and implementing new technological solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23860
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja wydajności motocykli, testowanie układów silnikowych oraz wprowadzanie usprawnień.",
                    "en" => "Optimizing motorcycle performance, testing engine systems, and implementing improvements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23861
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie naprawami i konserwacją motocykli, prowadzenie dokumentacji serwisowej oraz planowanie harmonogramu prac.",
                    "en" => "Managing repairs and maintenance of motorcycles, maintaining service documentation, and planning work schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23862
            ]
        ];
        $POZOSTALI_MECHANICY_POJAZDÓW_SAMOCHODOWYCH = [

            [
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja różnych typów pojazdów samochodowych, w tym diagnostyka silników, układów napędowych i systemów elektrycznych.",
                    "en" => "Repair and maintenance of various types of motor vehicles, including diagnostics of engines, drivetrains, and electrical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23863
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka i naprawa układów mechanicznych i elektrycznych w pojazdach, przeprowadzanie testów i regulacji.",
                    "en" => "Diagnostics and repair of mechanical and electrical systems in vehicles, conducting tests and adjustments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23864
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami w zakresie diagnostyki i napraw pojazdów samochodowych, w tym wymiana części i testowanie wydajności.",
                    "en" => "Collaborating with teams on diagnostics and vehicle repairs, including part replacement and performance testing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23865
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami naprawczymi i konserwacyjnymi, planowanie przeglądów technicznych samochodów.",
                    "en" => "Managing repair and maintenance processes, planning technical inspections of vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23866
            ],
            [
                "name" => json_encode([
                    "pl" => "Koordynowanie napraw i konserwacji w serwisach samochodowych, kontrola jakości wykonywanych usług.",
                    "en" => "Coordinating repairs and maintenance in car service centers, quality control of services performed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23867
            ],
            [
                "name" => json_encode([
                    "pl" => "Wykonywanie przeglądów technicznych i diagnostycznych, planowanie napraw oraz kontrola stanu technicznego pojazdów.",
                    "en" => "Performing technical and diagnostic inspections, planning repairs, and controlling the technical condition of vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23868
            ]
        ];
        $TECHNIK_POJAZDÓW_SAMOCHODOWYCH = [

            [
                "name" => json_encode([
                    "pl" => "Diagnostyka, naprawa oraz konserwacja różnych systemów pojazdów samochodowych, w tym elektrycznych, mechanicznych i elektronicznych.",
                    "en" => "Diagnostics, repair, and maintenance of various vehicle systems, including electrical, mechanical, and electronic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23869
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z serwisem technicznym w zakresie napraw pojazdów samochodowych, w tym nadzór nad wymianą części.",
                    "en" => "Collaborating with the technical service on vehicle repairs, including supervising part replacements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23870
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów diagnostycznych, naprawa i kalibracja układów komputerowych w pojazdach.",
                    "en" => "Conducting diagnostic tests, repairing, and calibrating computer systems in vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23871
            ],
            [
                "name" => json_encode([
                    "pl" => "Nadzór nad działaniami serwisowymi pojazdów, zarządzanie harmonogramem przeglądów oraz napraw.",
                    "en" => "Supervising vehicle service activities, managing the maintenance schedule, and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23872
            ],
            [
                "name" => json_encode([
                    "pl" => "Analiza usterek, diagnozowanie problemów technicznych i wykonywanie odpowiednich napraw w pojazdach samochodowych.",
                    "en" => "Analyzing faults, diagnosing technical problems, and performing necessary repairs on motor vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23873
            ],
            [
                "name" => json_encode([
                    "pl" => "Opracowywanie dokumentacji serwisowej, zarządzanie stanem technicznym pojazdów i raportowanie napraw.",
                    "en" => "Developing service documentation, managing the technical condition of vehicles, and reporting repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23874
            ]
        ];
        $MECHANIK_KONSERWATOR_URZĄDZEŃ_DO_NAPEŁNIANIA_I_OPRÓŻNIANIA_ZBIORNIKÓW = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa urządzeń służących do napełniania i opróżniania zbiorników, w tym systemów pompowych, zaworów i rurociągów.",
                    "en" => "Installation, maintenance, and repair of equipment used for filling and emptying tanks, including pumping systems, valves, and pipelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23875
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka i testowanie wydajności urządzeń do napełniania i opróżniania zbiorników oraz ich optymalizacja.",
                    "en" => "Diagnostics and performance testing of tank filling and emptying equipment and its optimization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23876
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z działami produkcji i inżynierii w celu zapewnienia ciągłej sprawności urządzeń do napełniania i opróżniania zbiorników.",
                    "en" => "Collaborating with production and engineering departments to ensure continuous functionality of tank filling and emptying equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23877
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją systemów napełniania i opróżniania zbiorników oraz organizowanie napraw w razie awarii.",
                    "en" => "Managing the maintenance of tank filling and emptying systems and organizing repairs in case of failures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23878
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów technicznych urządzeń, weryfikacja ich stanu oraz zapewnienie zgodności z normami bezpieczeństwa.",
                    "en" => "Conducting technical inspections of equipment, verifying their condition, and ensuring compliance with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23879
            ],
            [
                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej i serwisowej, raportowanie stanu technicznego urządzeń.",
                    "en" => "Creating technical and service documentation, reporting the technical condition of equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23880
            ]
        ];
        $MECHANIK_KONSERWATOR_URZĄDZEŃ_DŹWIGOWYCH = [

            [
                "name" => json_encode([
                    "pl" => "Diagnostyka, konserwacja i naprawa urządzeń dźwignicowych, w tym wind, suwnic, żurawi i innych systemów podnoszących.",
                    "en" => "Diagnostics, maintenance, and repair of lifting equipment, including elevators, cranes, hoists, and other lifting systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23881
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów technicznych urządzeń dźwignicowych oraz wykonywanie napraw i regulacji.",
                    "en" => "Conducting technical inspections of lifting equipment and performing repairs and adjustments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23882
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem konserwacji urządzeń dźwignicowych oraz zapewnienie ich efektywnego i bezpiecznego użytkowania.",
                    "en" => "Managing the maintenance of lifting equipment and ensuring its efficient and safe operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23883
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja działania urządzeń dźwignicowych w celu poprawy efektywności i bezpieczeństwa ich pracy.",
                    "en" => "Optimizing the performance of lifting equipment to improve efficiency and ensure safe operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23884
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami serwisowymi przy modernizacji i usprawnianiu systemów dźwignicowych.",
                    "en" => "Collaborating with service teams on modernizing and improving lifting systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23885
            ],
            [
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów technicznych oraz dokumentacji konserwacyjnej urządzeń dźwignicowych.",
                    "en" => "Preparing technical reports and maintenance documentation for lifting equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23886
            ]
        ];
        $MECHANIK_MASZYN_I_URZĄDZEŃ_BUDOWLANYCH_I_MELIORACYJNYCH = [

            [
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i diagnostyka maszyn budowlanych i melioracyjnych, w tym koparek, ładowarek i maszyn do budowy dróg.",
                    "en" => "Repair, maintenance, and diagnostics of construction and drainage machines, including excavators, loaders, and road construction machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23887
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja działania maszyn budowlanych oraz diagnostyka systemów mechanicznych i hydraulicznych.",
                    "en" => "Optimizing the performance of construction machines and diagnosing mechanical and hydraulic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23888
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem projektowym przy wdrażaniu nowych technologii w maszynach budowlanych.",
                    "en" => "Collaborating with the design team to implement new technologies in construction machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23889
            ],
            [
                "name" => json_encode([
                    "pl" => "Wykonywanie napraw maszyn budowlanych i melioracyjnych, w tym diagnozowanie usterek, regulacja i kalibracja.",
                    "en" => "Performing repairs on construction and drainage machinery, including fault diagnosis, adjustment, and calibration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23890
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją maszyn budowlanych i melioracyjnych, organizowanie przeglądów technicznych i napraw.",
                    "en" => "Managing maintenance of construction and drainage machinery, organizing technical inspections and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23891
            ],
            [
                "name" => json_encode([
                    "pl" => "Kontrola jakości pracy maszyn budowlanych oraz przygotowywanie dokumentacji technicznej i raportów naprawczych.",
                    "en" => "Quality control of construction machines and preparing technical documentation and repair reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23892
            ]
        ];
        $MECHANIK_MASZYN_I_URZĄDZEŃ_DO_OBRÓBKI_METALI = [

            [
                "name" => json_encode([
                    "pl" => "Konserwacja, naprawa i modernizacja maszyn do obróbki metali, takich jak frezarki, wiertarki, tokarki.",
                    "en" => "Maintenance, repair, and modernization of machines for metalworking, such as milling machines, drills, and lathes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23893
            ],
            [
                "name" => json_encode([
                    "pl" => "Testowanie i optymalizacja wydajności maszyn obróbczych do metali, w tym systemów sterowania i układów hydraulicznych.",
                    "en" => "Testing and optimizing the performance of metalworking machines, including control systems and hydraulic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23894
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka i usuwanie usterek w maszynach do obróbki metali, w tym wymiana części i regulacja parametrów roboczych.",
                    "en" => "Diagnosing and repairing faults in metalworking machines, including part replacement and adjusting working parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23895
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami w celu modernizacji maszyn do obróbki metali, wdrażanie nowych technologii.",
                    "en" => "Collaborating with engineers to modernize metalworking machines and implementing new technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23896
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem konserwacji i naprawy maszyn do obróbki metali, dokumentowanie wykonanych prac.",
                    "en" => "Managing the maintenance and repair process of metalworking machines, documenting performed work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23897
            ],
            [
                "name" => json_encode([
                    "pl" => "Szkolenie operatorów maszyn do obróbki metali, monitorowanie jakości pracy oraz dbanie o przestrzeganie zasad BHP.",
                    "en" => "Training machine operators for metalworking, monitoring work quality, and ensuring compliance with safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23898
            ]
        ];
        $MECHANIK_MASZYN_I_URZĄDZEŃ_GÓRNICTWA_ODKRYWKOWEGO = [

            [
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i diagnostyka maszyn wykorzystywanych w górnictwie odkrywkowym, takich jak wozidła, koparki, ładowarki.",
                    "en" => "Repair, maintenance, and diagnostics of machines used in open-pit mining, such as dump trucks, excavators, and loaders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23899
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją maszyn górniczych, planowanie napraw oraz monitorowanie ich efektywności.",
                    "en" => "Managing the maintenance of mining machines, planning repairs, and monitoring their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23900
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji i testów maszyn do kopania i transportu urobku w górnictwie odkrywkowym.",
                    "en" => "Conducting inspections and tests of digging and material transport machines in open-pit mining."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23901
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów eksploatacji maszyn górniczych, w tym wydajności silników i systemów hydraulicznych.",
                    "en" => "Optimizing the operation of mining machines, including engine and hydraulic system efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23902
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami produkcyjnymi w zakresie modernizacji maszyn górniczych i wdrażania nowych technologii.",
                    "en" => "Collaborating with production teams on modernizing mining machines and implementing new technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23903
            ],
            [
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie obsługi maszyn górniczych oraz przestrzegania zasad BHP.",
                    "en" => "Training employees on operating mining machines and ensuring compliance with safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23904
            ]
        ];
        $MECHANIK_MASZYN_I_URZĄDZEŃ_GÓRNICTWA_PODZIEMNEGO = [

            [
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i diagnostyka maszyn i urządzeń wykorzystywanych w górnictwie podziemnym, takich jak kombajny górnicze, wiertnice i systemy transportowe.",
                    "en" => "Repair, maintenance, and diagnostics of machines and equipment used in underground mining, such as mining combines, drills, and transport systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23905
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji oraz testów urządzeń górniczych w podziemnych warunkach pracy, diagnozowanie usterek.",
                    "en" => "Conducting inspections and tests of mining equipment in underground working conditions, diagnosing faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23906
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów naprawy i konserwacji maszyn górniczych w celu zwiększenia ich wydajności i bezpieczeństwa.",
                    "en" => "Optimizing the repair and maintenance processes of mining machines to increase their efficiency and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23907
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami inżynierskimi przy wdrażaniu nowych technologii w maszynach górniczych.",
                    "en" => "Collaborating with engineering teams to implement new technologies in mining machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23908
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie harmonogramem napraw i konserwacji maszyn wykorzystywanych w górnictwie podziemnym.",
                    "en" => "Managing the repair and maintenance schedule for machines used in underground mining."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23909
            ],
            [
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie obsługi maszyn górniczych, z zachowaniem zasad BHP w warunkach podziemnych.",
                    "en" => "Training employees on the operation of mining machines, ensuring safety regulations in underground conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23910
            ]
        ];
        $MECHANIK_MASZYN_I_URZĄDZEŃ_PRZEMYSŁOWYCH = [

            [
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i diagnostyka maszyn przemysłowych, takich jak maszyny produkcyjne, urządzenia wykorzystywane w procesach wytwórczych.",
                    "en" => "Repair, maintenance, and diagnostics of industrial machines, such as production machines and devices used in manufacturing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23911
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja wydajności maszyn przemysłowych, wdrażanie nowych technologii i modernizacja istniejącego sprzętu.",
                    "en" => "Optimizing the performance of industrial machines, implementing new technologies, and modernizing existing equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23912
            ],
            [
                "name" => json_encode([
                    "pl" => "Kontrola jakości maszyn, przeprowadzanie inspekcji technicznych i ocena stanu technicznego urządzeń przemysłowych.",
                    "en" => "Quality control of machines, performing technical inspections, and assessing the technical condition of industrial equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23913
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz awaryjności maszyn przemysłowych oraz wdrażanie działań prewencyjnych.",
                    "en" => "Conducting failure analyses of industrial machines and implementing preventive actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23914
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie serwisem maszyn przemysłowych, przygotowanie planów konserwacji oraz dokumentacji serwisowej.",
                    "en" => "Managing the service of industrial machines, preparing maintenance plans and service documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23915
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami produkcyjnymi w zakresie usprawnień technologicznych i modernizacji maszyn.",
                    "en" => "Collaborating with other production departments on technological improvements and machine modernization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23916
            ]
        ];
        $MECHANIK_MASZYN_ROLNICZYCH = [

            [
                "name" => json_encode([
                    "pl" => "Konserwacja, naprawa i diagnostyka maszyn rolniczych, takich jak ciągniki, kombajny, siewniki i maszyny do obróbki gleby.",
                    "en" => "Maintenance, repair, and diagnostics of agricultural machines, such as tractors, combines, seeders, and soil processing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23917
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja działania maszyn rolniczych, w tym diagnostyka silników, układów napędowych i hydraulicznych.",
                    "en" => "Optimizing the performance of agricultural machines, including diagnostics of engines, drivetrains, and hydraulic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23918
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów sprawności maszyn rolniczych, diagnostyka usterek oraz ich naprawa.",
                    "en" => "Conducting performance tests on agricultural machines, diagnosing faults, and repairing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23919
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją maszyn rolniczych, planowanie przeglądów oraz organizowanie napraw.",
                    "en" => "Managing maintenance of agricultural machines, planning inspections, and organizing repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23920
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z producentami maszyn rolniczych w zakresie nowych technologii i modernizacji.",
                    "en" => "Collaborating with manufacturers of agricultural machines on new technologies and modernization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23921
            ],
            [
                "name" => json_encode([
                    "pl" => "Szkolenie operatorów maszyn rolniczych w zakresie obsługi, konserwacji i napraw maszyn.",
                    "en" => "Training agricultural machine operators on operation, maintenance, and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23922
            ]
        ];
        $MECHANIK_MASZYN_SZWALNICZYCH = [

            [
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i diagnostyka maszyn szwalniczych, w tym maszyn do szycia, overlocków i pras.",
                    "en" => "Repair, maintenance, and diagnostics of sewing machines, including sewing machines, overlockers, and presses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23923
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji na maszynach szwalniczych, w tym ustawianie maszyn i kontrolowanie jakości.",
                    "en" => "Optimizing the production process on sewing machines, including machine setup and quality control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23924
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka maszyn szwalniczych, identyfikacja usterek i wykonywanie napraw.",
                    "en" => "Diagnostics of sewing machines, identifying faults, and performing repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23925
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją maszyn szwalniczych, planowanie przeglądów oraz organizowanie napraw w razie awarii.",
                    "en" => "Managing the maintenance of sewing machines, planning inspections, and organizing repairs in case of failures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23926
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem inżynierskim przy modernizacji maszyn szwalniczych oraz wdrażanie nowych technologii.",
                    "en" => "Collaborating with the engineering team on modernizing sewing machines and implementing new technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23927
            ],
            [
                "name" => json_encode([
                    "pl" => "Kontrola jakości maszyn szwalniczych oraz przestrzeganie standardów produkcyjnych.",
                    "en" => "Quality control of sewing machines and ensuring compliance with production standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23928
            ]
        ];
        $MECHANIK_SILNIKÓW_SPALINOWYCH = [

            [
                "name" => json_encode([
                    "pl" => "Diagnostyka, naprawa i konserwacja silników spalinowych, w tym silników samochodowych, przemysłowych oraz maszyn roboczych.",
                    "en" => "Diagnostics, repair, and maintenance of internal combustion engines, including automotive, industrial, and machinery engines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23929
            ],
            [
                "name" => json_encode([
                    "pl" => "Naprawa systemów zapłonowych, paliwowych i wydechowych w silnikach spalinowych.",
                    "en" => "Repairing ignition, fuel, and exhaust systems in internal combustion engines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23930
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja wydajności silników spalinowych, regulacja parametrów pracy oraz testowanie ich wydajności.",
                    "en" => "Optimizing the performance of internal combustion engines, adjusting operating parameters, and testing their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23931
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem diagnostyki i naprawy silników spalinowych, w tym systemów chłodzenia i smarowania.",
                    "en" => "Managing the diagnostic and repair process of internal combustion engines, including cooling and lubrication systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23932
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami inżynierskimi przy modernizacji i udoskonalaniu silników spalinowych.",
                    "en" => "Collaborating with engineering teams on the modernization and improvement of internal combustion engines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23933
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów silników spalinowych, kontrola emisji spalin oraz optymalizacja zużycia paliwa.",
                    "en" => "Conducting tests on internal combustion engines, monitoring exhaust emissions, and optimizing fuel consumption."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23934
            ]
        ];
        $MECHANIK_POJAZDÓW_KOLEJOWYCH = [

            [
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i diagnostyka pojazdów kolejowych, w tym lokomotyw, wagonów, systemów trakcyjnych i hamulcowych.",
                    "en" => "Repair, maintenance, and diagnostics of railway vehicles, including locomotives, carriages, traction systems, and braking systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23935
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja systemów trakcyjnych i hamulcowych w pojazdach kolejowych, testowanie wydajności i niezawodności.",
                    "en" => "Optimizing traction and braking systems in railway vehicles, testing performance and reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23936
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka i naprawa układów elektrycznych i mechanicznych pojazdów kolejowych.",
                    "en" => "Diagnostics and repair of electrical and mechanical systems in railway vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23937
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami w zakresie modernizacji i modyfikacji pojazdów kolejowych, wdrażanie nowych technologii.",
                    "en" => "Collaborating with engineers on the modernization and modification of railway vehicles, implementing new technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23938
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją taboru kolejowego, organizowanie napraw i zapewnienie bezpieczeństwa technicznego.",
                    "en" => "Managing the maintenance of railway rolling stock, organizing repairs, and ensuring technical safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23939
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka i naprawa systemów zasilania elektrycznego w pojazdach kolejowych, w tym układów napięcia i akumulatorów.",
                    "en" => "Diagnostics and repair of electrical power systems in railway vehicles, including voltage systems and batteries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23940
            ]
        ];
        $POZOSTALI_MECHANICY_MASZYN_I_URZĄDZEŃ_ROLNICZYCH_I_PRZEMYSŁOWYCH = [

            [
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i diagnostyka maszyn rolniczych i przemysłowych, takich jak kombajny, siewniki, maszyny budowlane i przemysłowe.",
                    "en" => "Repair, maintenance, and diagnostics of agricultural and industrial machinery, such as combines, seeders, construction, and industrial machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23941
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja wydajności maszyn rolniczych i przemysłowych, regulacja układów mechanicznych i hydraulicznych.",
                    "en" => "Optimizing the performance of agricultural and industrial machines, adjusting mechanical and hydraulic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23942
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów i diagnostyki maszyn, identyfikowanie usterek i przeprowadzanie napraw.",
                    "en" => "Conducting tests and diagnostics of machinery, identifying faults, and performing repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23943
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem technicznym przy wdrażaniu nowych technologii i modernizacji maszyn rolniczych i przemysłowych.",
                    "en" => "Collaborating with the technical team on implementing new technologies and modernizing agricultural and industrial machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23944
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją i naprawą maszyn rolniczych i przemysłowych, przygotowywanie harmonogramów przeglądów.",
                    "en" => "Managing the maintenance and repair of agricultural and industrial machinery, preparing inspection schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23945
            ],
            [
                "name" => json_encode([
                    "pl" => "Szkolenie operatorów maszyn w zakresie obsługi, konserwacji i napraw maszyn rolniczych i przemysłowych.",
                    "en" => "Training machine operators on operation, maintenance, and repair of agricultural and industrial machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23946
            ]
        ];
        $MECHANICY_ROWERÓW_I_POKREWNI = [

            [
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i diagnostyka rowerów, w tym układów hamulcowych, napędu, zawieszenia i kół.",
                    "en" => "Repair, maintenance, and diagnostics of bicycles, including braking systems, drive systems, suspension, and wheels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23947
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja ustawień rowerów, regulacja i kalibracja układów mechanicznych, w tym przerzutek i hamulców.",
                    "en" => "Optimizing bike settings, adjusting and calibrating mechanical systems, including gear and brake systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23948
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca przy produkcji rowerów, wdrażanie nowych rozwiązań technologicznych w zakresie projektowania i produkcji.",
                    "en" => "Collaborating on bicycle production, implementing new technological solutions in design and manufacturing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23949
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek i naprawa uszkodzonych elementów w rowerach, takich jak koła, ramy i układy napędowe.",
                    "en" => "Fault diagnosis and repair of damaged bicycle components, such as wheels, frames, and drive systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23950
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie naprawami, konserwacją i regulacją rowerów w serwisach rowerowych.",
                    "en" => "Managing repairs, maintenance, and adjustments of bicycles in bike service centers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23951
            ],
            [
                "name" => json_encode([
                    "pl" => "Szkolenie użytkowników w zakresie konserwacji i naprawy rowerów, w tym wymiana części i drobne naprawy.",
                    "en" => "Training users on bike maintenance and repair, including part replacement and minor repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23952
            ]
        ];
        $MECHANIK_AUTOMATYKI_PRZEMYSŁOWEJ_I_URZĄDZEŃ_PRECYZYJNYCH = [

            [
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i diagnostyka urządzeń automatyki przemysłowej oraz urządzeń precyzyjnych wykorzystywanych w produkcji.",
                    "en" => "Repair, maintenance, and diagnostics of industrial automation devices and precision equipment used in manufacturing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23953
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja i testowanie systemów automatyki przemysłowej, w tym systemów sterowania i monitorowania.",
                    "en" => "Optimizing and testing industrial automation systems, including control and monitoring systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23954
            ],
            [
                "name" => json_encode([
                    "pl" => "Wykonywanie napraw urządzeń precyzyjnych, w tym regulacja parametrów i kalibracja układów automatycznych.",
                    "en" => "Repairing precision equipment, including adjusting parameters and calibrating automated systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23955
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z działami produkcji w zakresie integracji systemów automatyki przemysłowej w procesach produkcyjnych.",
                    "en" => "Collaborating with production departments on the integration of industrial automation systems into production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23956
            ],
            [
                "name" => json_encode([
                    "pl" => "Monitorowanie i analizowanie pracy systemów automatycznych oraz precyzyjnych urządzeń w produkcji.",
                    "en" => "Monitoring and analyzing the operation of automated systems and precision devices in production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23957
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją urządzeń automatyki przemysłowej oraz zapewnienie ich pełnej funkcjonalności.",
                    "en" => "Managing the maintenance of industrial automation equipment and ensuring its full functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23958
            ]
        ];
        $MECHANIK_PRECYZYJNY = [

            [
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i diagnostyka urządzeń precyzyjnych, w tym zegarów, przyrządów pomiarowych i instrumentów optycznych.",
                    "en" => "Repair, maintenance, and diagnostics of precision equipment, including clocks, measuring instruments, and optical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23959
            ],
            [
                "name" => json_encode([
                    "pl" => "Wykonywanie precyzyjnych napraw maszyn i urządzeń, regulacja ustawień i kalibracja urządzeń pomiarowych.",
                    "en" => "Performing precise repairs of machines and equipment, adjusting settings, and calibrating measuring instruments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23960
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami w zakresie rozwoju nowych technologii w dziedzinie precyzyjnej mechaniki.",
                    "en" => "Collaborating with engineers on the development of new technologies in precision mechanics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23961
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka i testowanie precyzyjnych urządzeń mechanicznych w celu określenia ich stanu technicznego i ewentualnych usterek.",
                    "en" => "Diagnostics and testing of precision mechanical devices to determine their technical condition and potential faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23962
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją i naprawą precyzyjnych narzędzi i urządzeń, takich jak maszyny do obróbki precyzyjnej.",
                    "en" => "Managing the maintenance and repair of precision tools and equipment, such as precision machining machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23963
            ],
            [
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie obsługi precyzyjnych urządzeń mechanicznych oraz konserwacji.",
                    "en" => "Training employees in the operation of precision mechanical devices and their maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23964
            ]
        ];
        $OPTYK_MECHANIK = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, naprawa i konserwacja okularów, w tym soczewek, oprawek oraz urządzeń optycznych.",
                    "en" => "Installation, repair, and maintenance of glasses, including lenses, frames, and optical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23965
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka problemów ze wzrokiem i dobór odpowiednich soczewek oraz oprawek okularów.",
                    "en" => "Diagnosing vision problems and selecting appropriate lenses and frames for glasses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23966
            ],
            [
                "name" => json_encode([
                    "pl" => "Wykonywanie precyzyjnych napraw okularów, w tym wymiana soczewek i naprawa oprawek.",
                    "en" => "Performing precise repairs of glasses, including lens replacement and frame repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23967
            ],
            [
                "name" => json_encode([
                    "pl" => "Montaż i regulacja okularów optycznych oraz wykonywanie badań wstępnych w celu dostosowania soczewek do wymagań klienta.",
                    "en" => "Assembly and adjustment of optical glasses, and conducting preliminary tests to match lenses to client requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23968
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z lekarzami okulistami w zakresie diagnostyki i doboru odpowiednich szkieł korekcyjnych.",
                    "en" => "Collaborating with ophthalmologists in the diagnosis and selection of appropriate corrective lenses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23969
            ],
            [
                "name" => json_encode([
                    "pl" => "Przygotowywanie i zarządzanie dokumentacją dotyczącą recept na okulary oraz kontrola jakości wykonania zamówienia.",
                    "en" => "Preparing and managing documentation regarding prescriptions for glasses and ensuring the quality of the order."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23970
            ]
        ];
        $POZOSTALI_MECHANICY_PRECYZYJNI = [

            [
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i kalibracja urządzeń precyzyjnych wykorzystywanych w różnych branżach, takich jak zegarki, mikroskopy czy sprzęt medyczny.",
                    "en" => "Repair, maintenance, and calibration of precision devices used in various industries, such as watches, microscopes, or medical equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23971
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie precyzyjnymi procesami montażu i naprawy w branżach wymagających wysokiej dokładności.",
                    "en" => "Managing precision assembly and repair processes in industries requiring high accuracy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23972
            ],
            [
                "name" => json_encode([
                    "pl" => "Konserwacja urządzeń pomiarowych, w tym mikroskopów, wiertarek precyzyjnych oraz urządzeń testujących.",
                    "en" => "Maintenance of measuring devices, including microscopes, precision drills, and testing equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23973
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kalibracji i testów urządzeń precyzyjnych oraz naprawa uszkodzonych mechanizmów.",
                    "en" => "Performing calibrations and tests of precision devices, and repairing damaged mechanisms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23974
            ],
            [
                "name" => json_encode([
                    "pl" => "Szkolenie personelu w zakresie obsługi precyzyjnych urządzeń oraz monitorowanie ich wydajności.",
                    "en" => "Training staff in the operation of precision devices and monitoring their performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23975
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z działami inżynieryjnymi przy tworzeniu nowych precyzyjnych narzędzi i urządzeń.",
                    "en" => "Collaborating with engineering departments in the development of new precision tools and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23976
            ]
        ];
        $MONTER_INSTALATOR_URZĄDZEŃ_TECHNICZNYCH_W_BUDOWNICTWIE_WIEJSKIM = [

            [
                "name" => json_encode([
                    "pl" => "Montaż i konserwacja urządzeń technicznych w budownictwie wiejskim, w tym instalacje wodociągowe, kanalizacyjne oraz grzewcze.",
                    "en" => "Installation and maintenance of technical equipment in rural construction, including plumbing, sewage, and heating systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23977
            ],
            [
                "name" => json_encode([
                    "pl" => "Wykonywanie instalacji elektrycznych, systemów nawadniania i innych urządzeń technicznych w budownictwie wiejskim.",
                    "en" => "Installing electrical systems, irrigation systems, and other technical equipment in rural construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23978
            ],
            [
                "name" => json_encode([
                    "pl" => "Dostosowywanie instalacji technicznych do specyficznych warunków budownictwa wiejskiego.",
                    "en" => "Adjusting technical installations to the specific conditions of rural construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23979
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie napraw, konserwacji i modernizacji urządzeń technicznych w budynkach wiejskich.",
                    "en" => "Performing repairs, maintenance, and modernization of technical equipment in rural buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23980
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca przy budowie systemów technicznych, takich jak instalacje grzewcze i wodociągowe w budownictwie wiejskim.",
                    "en" => "Collaborating on the construction of technical systems, such as heating and plumbing installations in rural buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23981
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie harmonogramem montażu urządzeń technicznych i systemów w budownictwie wiejskim.",
                    "en" => "Managing the installation schedule of technical equipment and systems in rural construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23982
            ]
        ];
        $MONTER_APARATÓW_I_PRZYRZĄDÓW_OPTYCZNYCH = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa aparatów optycznych, takich jak teleskopy, mikroskopy, aparaty fotograficzne i inne urządzenia optyczne.",
                    "en" => "Installation, maintenance, and repair of optical instruments, such as telescopes, microscopes, cameras, and other optical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23983
            ],
            [
                "name" => json_encode([
                    "pl" => "Testowanie i kalibracja urządzeń optycznych, zapewniając ich odpowiednią jakość obrazu i funkcjonalność.",
                    "en" => "Testing and calibrating optical devices to ensure their image quality and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23984
            ],
            [
                "name" => json_encode([
                    "pl" => "Naprawa i regulacja układów optycznych, w tym wymiana soczewek, luster i innych elementów optycznych.",
                    "en" => "Repair and adjustment of optical systems, including replacing lenses, mirrors, and other optical components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23985
            ],
            [
                "name" => json_encode([
                    "pl" => "Montaż i instalacja nowych aparatów optycznych oraz urządzeń precyzyjnych w laboratoriach i zakładach przemysłowych.",
                    "en" => "Installation and setup of new optical instruments and precision devices in laboratories and industrial facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23986
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem inżynierów w zakresie projektowania i wdrażania nowych rozwiązań technologicznych w aparatach optycznych.",
                    "en" => "Collaborating with engineering teams in designing and implementing new technological solutions in optical instruments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23987
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją techniczną aparatów optycznych oraz przygotowywanie raportów z napraw i konserwacji.",
                    "en" => "Managing the technical documentation of optical instruments and preparing reports on repairs and maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23988
            ]
        ];
        $MONTER_APARATURY_I_URZĄDZEŃ_CHEMICZNYCH = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa aparatury i urządzeń chemicznych, takich jak reaktory, kolumny destylacyjne, urządzenia filtracyjne.",
                    "en" => "Installation, maintenance, and repair of chemical equipment and devices, such as reactors, distillation columns, filtration systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23989
            ],
            [
                "name" => json_encode([
                    "pl" => "Sprawdzanie i kalibracja urządzeń pomiarowych i kontrolujących wykorzystywanych w procesach chemicznych.",
                    "en" => "Checking and calibrating measuring and controlling devices used in chemical processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23990
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów bezpieczeństwa instalacji chemicznych oraz nadzorowanie pracy urządzeń w warunkach roboczych.",
                    "en" => "Conducting safety tests of chemical installations and supervising the operation of equipment under working conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23991
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w aparaturze chemicznej, wymiana uszkodzonych elementów oraz montaż nowych urządzeń.",
                    "en" => "Fault diagnostics in chemical equipment, replacing damaged components, and installing new devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23992
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami i chemikami w zakresie rozwoju technologii i modernizacji urządzeń chemicznych.",
                    "en" => "Collaborating with engineers and chemists in developing technology and modernizing chemical equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23993
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie i kontrolowanie harmonogramów konserwacji urządzeń chemicznych oraz prowadzenie dokumentacji technicznej.",
                    "en" => "Managing and controlling the maintenance schedules for chemical equipment and maintaining technical documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23994
            ]
        ];
        $MONTER_KOTŁÓW_I_ARMATURY_KOTŁOWEJ = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa kotłów przemysłowych oraz armatury kotłowej, w tym zaworów, rur, regulatorów ciśnienia.",
                    "en" => "Installation, maintenance, and repair of industrial boilers and boiler equipment, including valves, pipes, and pressure regulators."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23995
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek i naprawa kotłów, kontrolowanie ich sprawności oraz wykonywanie prac konserwacyjnych.",
                    "en" => "Fault diagnostics and repair of boilers, checking their efficiency, and performing maintenance work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23996
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji technicznych kotłów i armatury kotłowej, naprawa uszkodzeń oraz modernizacja.",
                    "en" => "Conducting technical inspections of boilers and boiler equipment, repairing damage, and modernization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23997
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca przy uruchamianiu kotłów oraz ich optymalizacja pod kątem efektywności energetycznej.",
                    "en" => "Collaborating on commissioning boilers and optimizing them for energy efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23998
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją kotłów i armatury kotłowej, przygotowywanie harmonogramów napraw i przeglądów.",
                    "en" => "Managing maintenance of boilers and boiler equipment, preparing repair and inspection schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 23999
            ],
            [
                "name" => json_encode([
                    "pl" => "Szkolenie operatorów kotłów w zakresie obsługi urządzeń oraz zapewnianie przestrzegania norm bezpieczeństwa.",
                    "en" => "Training boiler operators in the operation of equipment and ensuring compliance with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24000
            ]
        ];
        $MONTER_MASZYN_I_URZĄDZEŃ_OKRĘTOWYCH = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa maszyn oraz urządzeń okrętowych, w tym silników, systemów napędowych, hydraulicznych i elektrycznych.",
                    "en" => "Installation, maintenance, and repair of ship machinery and equipment, including engines, propulsion systems, hydraulics, and electrical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24001
            ],
            [
                "name" => json_encode([
                    "pl" => "Testowanie, regulacja i naprawa systemów okrętowych, kontrolowanie ich wydajności oraz funkcjonalności.",
                    "en" => "Testing, adjusting, and repairing ship systems, monitoring their performance and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24002
            ],
            [
                "name" => json_encode([
                    "pl" => "Montaż maszyn okrętowych w nowych jednostkach pływających oraz modernizacja starszych urządzeń.",
                    "en" => "Installing ship machinery in new vessels and modernizing older equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24003
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem konserwacji maszyn okrętowych oraz zapewnienie ich sprawności w trakcie eksploatacji.",
                    "en" => "Managing the maintenance of ship machinery and ensuring their functionality during operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24004
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z projektantami w zakresie integracji nowych technologii w systemach okrętowych.",
                    "en" => "Collaborating with designers to integrate new technologies in ship systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24005
            ],
            [
                "name" => json_encode([
                    "pl" => "Szkolenie personelu w zakresie obsługi maszyn okrętowych oraz przestrzeganie zasad bezpieczeństwa pracy na statkach.",
                    "en" => "Training personnel in the operation of ship machinery and ensuring compliance with safety regulations on ships."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24006
            ]
        ];
        $MONTER_MASZYN_I_URZĄDZEŃ_PRZEMYSŁOWYCH = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa maszyn przemysłowych, w tym urządzeń produkcyjnych, systemów transportowych i mechanicznych.",
                    "en" => "Installation, maintenance, and repair of industrial machines, including production equipment, transport systems, and mechanical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24007
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie diagnostyki i napraw systemów mechanicznych i elektrycznych maszyn przemysłowych.",
                    "en" => "Performing diagnostics and repairs of mechanical and electrical systems of industrial machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24008
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja wydajności maszyn przemysłowych, regulacja układów i testowanie ich efektywności.",
                    "en" => "Optimizing the performance of industrial machines, adjusting systems, and testing their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24009
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem inżynierskim przy wdrażaniu nowych technologii i rozwoju maszyn przemysłowych.",
                    "en" => "Collaborating with engineering teams on implementing new technologies and developing industrial machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24010
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją maszyn przemysłowych, planowanie przeglądów oraz organizowanie napraw.",
                    "en" => "Managing maintenance of industrial machines, planning inspections, and organizing repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24011
            ],
            [
                "name" => json_encode([
                    "pl" => "Kontrola jakości maszyn i urządzeń przemysłowych, zapewnianie ich sprawności technicznej oraz przestrzeganie norm BHP.",
                    "en" => "Quality control of industrial machines and equipment, ensuring their technical functionality and compliance with safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24012
            ]
        ];
        $MONTER_MECHANIZMÓW_I_PRZYRZĄDÓW_PRECYZYJNYCH = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, naprawa i konserwacja mechanizmów oraz przyrządów precyzyjnych, takich jak zegary, mikroskopy, aparaty optyczne, urządzenia pomiarowe.",
                    "en" => "Installation, repair, and maintenance of precision mechanisms and instruments, such as clocks, microscopes, optical devices, and measuring instruments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24013
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kalibracji urządzeń precyzyjnych, regulacja mechanizmów w celu zapewnienia ich dokładności i funkcjonalności.",
                    "en" => "Performing calibration of precision devices, adjusting mechanisms to ensure their accuracy and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24014
            ],
            [
                "name" => json_encode([
                    "pl" => "Testowanie przyrządów precyzyjnych, wykrywanie usterek i ich naprawa, w tym wymiana uszkodzonych elementów.",
                    "en" => "Testing precision instruments, detecting faults, and repairing them, including replacing damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24015
            ],
            [
                "name" => json_encode([
                    "pl" => "Montaż mechanizmów precyzyjnych w różnych urządzeniach technologicznych, z zachowaniem norm jakości i bezpieczeństwa.",
                    "en" => "Assembly of precision mechanisms in various technological devices, following quality and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24016
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem montażu mechanizmów precyzyjnych, współpraca z inżynierami przy wdrażaniu nowych technologii.",
                    "en" => "Managing the assembly process of precision mechanisms, collaborating with engineers on implementing new technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24017
            ],
            [
                "name" => json_encode([
                    "pl" => "Wykonywanie napraw i konserwacji mechanizmów precyzyjnych w celu zapewnienia ich optymalnej pracy i trwałości.",
                    "en" => "Performing repairs and maintenance of precision mechanisms to ensure their optimal operation and durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24018
            ]
        ];
        $MONTER_OBRABIAREK = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa obrabiarek, takich jak frezarki, tokarki, wiertarki, wykorzystywanych w procesach produkcyjnych.",
                    "en" => "Installation, maintenance, and repair of machine tools, such as milling machines, lathes, drills, used in manufacturing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24019
            ],
            [
                "name" => json_encode([
                    "pl" => "Testowanie i kalibracja obrabiarek, dostosowywanie ich parametrów pracy do specyfikacji produkcji.",
                    "en" => "Testing and calibrating machine tools, adjusting their operating parameters to production specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24020
            ],
            [
                "name" => json_encode([
                    "pl" => "Naprawa i regulacja układów mechanicznych, hydraulicznych i elektrycznych w obrabiarce.",
                    "en" => "Repair and adjustment of mechanical, hydraulic, and electrical systems in machine tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24021
            ],
            [
                "name" => json_encode([
                    "pl" => "Montaż maszyn, wymiana uszkodzonych części oraz weryfikacja działania obrabiarek.",
                    "en" => "Assembly of machines, replacing damaged parts, and verifying the operation of machine tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24022
            ],
            [
                "name" => json_encode([
                    "pl" => "Koordynowanie procesu produkcji maszyn w oparciu o montaż obrabiarek i innych urządzeń technologicznych.",
                    "en" => "Coordinating the production process based on the assembly of machine tools and other technological equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24023
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli jakości obrabiarek, zapewniając ich odpowiednią precyzję i wydajność.",
                    "en" => "Performing quality control of machine tools, ensuring their precision and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24024
            ]
        ];
        $MONTER_PŁATOWCÓW_I_ŚMIGŁOWCÓW = [

            [
                "name" => json_encode([
                    "pl" => "Montaż i konserwacja płatowców oraz śmigłowców, w tym instalacja systemów napędowych, sterowania i układów mechanicznych.",
                    "en" => "Assembly and maintenance of airframes and helicopters, including the installation of propulsion, control systems, and mechanical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24025
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów i regulacji systemów w płatowcach i śmigłowcach, monitorowanie ich wydajności.",
                    "en" => "Conducting tests and adjustments of systems in airframes and helicopters, monitoring their performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24026
            ],
            [
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja systemów hydraulicznych, elektrycznych oraz mechanicznych w płatowcach i śmigłowcach.",
                    "en" => "Repair and maintenance of hydraulic, electrical, and mechanical systems in airframes and helicopters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24027
            ],
            [
                "name" => json_encode([
                    "pl" => "Montaż elementów konstrukcyjnych płatowców i śmigłowców, takich jak silniki, skrzydła, stery.",
                    "en" => "Assembly of structural components in airframes and helicopters, such as engines, wings, and rudders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24028
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie harmonogramem montażu i konserwacji płatowców i śmigłowców.",
                    "en" => "Managing the schedule for assembly and maintenance of airframes and helicopters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24029
            ],
            [
                "name" => json_encode([
                    "pl" => "Testowanie systemów bezpieczeństwa w płatowcach i śmigłowcach oraz przeprowadzanie prób wydajnościowych.",
                    "en" => "Testing safety systems in airframes and helicopters, conducting performance trials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24030
            ]
        ];
        $MONTER_POJAZDÓW_I_URZĄDZEŃ_TRANSPORTOWYCH = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa pojazdów i urządzeń transportowych, w tym samochodów, przyczep, pojazdów specjalistycznych oraz maszyn transportowych.",
                    "en" => "Installation, maintenance, and repair of vehicles and transport equipment, including cars, trailers, specialized vehicles, and transport machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24031
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w pojazdach transportowych, naprawa systemów mechanicznych, elektrycznych i hydraulicznych.",
                    "en" => "Fault diagnosis in transport vehicles, repair of mechanical, electrical, and hydraulic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24032
            ],
            [
                "name" => json_encode([
                    "pl" => "Montaż i testowanie nowych systemów w pojazdach transportowych, takich jak systemy zasilania, hydrauliczne i napędowe.",
                    "en" => "Installation and testing of new systems in transport vehicles, such as power, hydraulic, and drive systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24033
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja systemów transportowych, w tym naprawa i konserwacja urządzeń transportowych w fabrykach i magazynach.",
                    "en" => "Optimizing transport systems, including the repair and maintenance of transport equipment in factories and warehouses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24034
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem konserwacji i naprawy pojazdów transportowych, organizowanie harmonogramu przeglądów.",
                    "en" => "Managing the maintenance and repair process of transport vehicles, organizing inspection schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24035
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z producentami sprzętu transportowego przy modernizacji pojazdów i wprowadzaniu nowych technologii.",
                    "en" => "Collaborating with transport equipment manufacturers on vehicle modernization and the implementation of new technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24036
            ]
        ];
        $MONTER_SILNIKÓW_SPALINOWYCH = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa silników spalinowych wykorzystywanych w pojazdach, maszynach rolniczych, przemysłowych oraz sprzęcie budowlanym.",
                    "en" => "Installation, maintenance, and repair of internal combustion engines used in vehicles, agricultural machinery, industrial machines, and construction equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24037
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka i naprawa systemów zasilania, zapłonu oraz wydechowych silników spalinowych.",
                    "en" => "Diagnostics and repair of fuel, ignition, and exhaust systems in internal combustion engines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24038
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja działania silników spalinowych w pojazdach i maszynach, poprawa ich wydajności i redukcja emisji.",
                    "en" => "Optimizing the performance of internal combustion engines in vehicles and machines, improving efficiency, and reducing emissions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24039
            ],
            [
                "name" => json_encode([
                    "pl" => "Montaż układów napędowych w silnikach spalinowych, regulacja parametrów pracy silnika.",
                    "en" => "Assembly of drive systems in internal combustion engines, adjusting engine operating parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24040
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów silników spalinowych, ocena ich wydajności i zużycia paliwa.",
                    "en" => "Conducting tests on internal combustion engines, assessing their performance and fuel consumption."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24041
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie naprawą silników spalinowych, organizowanie harmonogramów przeglądów technicznych.",
                    "en" => "Managing the repair of internal combustion engines, organizing technical inspection schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24042
            ]
        ];
        $MONTER_SPRZĘTU_GOSPODARSTWA_DOMOWEGO = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, naprawa i konserwacja sprzętu gospodarstwa domowego, takiego jak pralki, lodówki, kuchenki i zmywarki.",
                    "en" => "Installation, repair, and maintenance of household appliances such as washing machines, refrigerators, ovens, and dishwashers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24043
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnozowanie usterek w sprzęcie gospodarstwa domowego, wymiana uszkodzonych części i naprawa układów elektronicznych.",
                    "en" => "Diagnosing faults in household appliances, replacing damaged parts, and repairing electronic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24044
            ],
            [
                "name" => json_encode([
                    "pl" => "Instalowanie nowych urządzeń gospodarstwa domowego, podłączanie do sieci wodociągowych, kanalizacyjnych i elektrycznych.",
                    "en" => "Installing new household appliances, connecting them to water, sewage, and electrical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24045
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja wydajności urządzeń gospodarstwa domowego, przeprowadzanie konserwacji, czyszczenie i kalibracja.",
                    "en" => "Optimizing the performance of household appliances, performing maintenance, cleaning, and calibration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24046
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem technicznym w zakresie naprawy i modernizacji sprzętu gospodarstwa domowego.",
                    "en" => "Collaborating with the technical team on the repair and modernization of household appliances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24047
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie harmonogramem napraw i konserwacji urządzeń, zapewnienie ich sprawności technicznej.",
                    "en" => "Managing the repair and maintenance schedule of appliances, ensuring their technical functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24048
            ]
        ];
        $MONTER_TABORU_SZYNOWEGO = [

            [
                "name" => json_encode([
                    "pl" => "Montaż i naprawa taboru szynowego, w tym lokomotyw, wagonów oraz systemów hamulcowych i trakcyjnych.",
                    "en" => "Assembly and repair of railway rolling stock, including locomotives, carriages, and braking and traction systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24049
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka i naprawa układów elektrycznych, hydraulicznych i mechanicznych w pojazdach szynowych.",
                    "en" => "Diagnosis and repair of electrical, hydraulic, and mechanical systems in railway vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24050
            ],
            [
                "name" => json_encode([
                    "pl" => "Montaż systemów sterowania i monitorowania w pojazdach szynowych, takich jak systemy bezpieczeństwa i łączności.",
                    "en" => "Installation of control and monitoring systems in railway vehicles, such as safety and communication systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24051
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów na taborze szynowym, monitorowanie wydajności systemów i zapewnienie ich funkcjonowania.",
                    "en" => "Conducting tests on railway rolling stock, monitoring system performance, and ensuring their operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24052
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem inżynierskim przy modernizacji taboru szynowego i implementacji nowych technologii.",
                    "en" => "Collaborating with the engineering team on modernizing rolling stock and implementing new technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24053
            ],
            [
                "name" => json_encode([
                    "pl" => "Szkolenie operatorów taboru szynowego, zapewnienie przestrzegania norm bezpieczeństwa i procedur operacyjnych.",
                    "en" => "Training operators of railway rolling stock, ensuring compliance with safety standards and operational procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24054
            ]
        ];
        $MONTER_UKŁADÓW_HYDRAULICZNYCH_I_PNEUMATYCZNYCH = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, naprawa i konserwacja układów hydraulicznych i pneumatycznych w maszynach i urządzeniach przemysłowych.",
                    "en" => "Installation, maintenance, and repair of hydraulic and pneumatic systems in industrial machines and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24055
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka układów hydraulicznych i pneumatycznych, wykrywanie usterek i ich naprawa.",
                    "en" => "Diagnosis of hydraulic and pneumatic systems, detecting faults, and repairing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24056
            ],
            [
                "name" => json_encode([
                    "pl" => "Montaż urządzeń hydraulicznych, takich jak pompy, zawory i siłowniki, w systemach przemysłowych.",
                    "en" => "Installation of hydraulic devices, such as pumps, valves, and actuators, in industrial systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24057
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów szczelności, ciśnienia i wydajności układów hydraulicznych i pneumatycznych.",
                    "en" => "Performing leakage, pressure, and performance tests of hydraulic and pneumatic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24058
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami w zakresie projektowania, modernizacji i optymalizacji układów hydraulicznych i pneumatycznych.",
                    "en" => "Collaborating with engineers in the design, modernization, and optimization of hydraulic and pneumatic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24059
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją techniczną układów hydraulicznych i pneumatycznych, kontrola jakości wykonanych prac.",
                    "en" => "Managing technical documentation for hydraulic and pneumatic systems, ensuring quality control of performed work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24060
            ]
        ];
        $MONTER_URZĄDZEŃ_CHŁODNICZYCH_I_GASTRONOMICZNYCH = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, naprawa i konserwacja urządzeń chłodniczych i gastronomicznych, takich jak lodówki, zamrażarki, piece i grille.",
                    "en" => "Installation, maintenance, and repair of refrigeration and gastronomic equipment, such as refrigerators, freezers, ovens, and grills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24061
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka i naprawa systemów chłodniczych i gastronomicznych, wymiana uszkodzonych elementów, takich jak sprężarki czy zawory.",
                    "en" => "Diagnostics and repair of refrigeration and gastronomic systems, replacing damaged components such as compressors and valves."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24062
            ],
            [
                "name" => json_encode([
                    "pl" => "Instalowanie nowych urządzeń chłodniczych i gastronomicznych, podłączanie ich do systemów zasilania, wodociągowych i gazowych.",
                    "en" => "Installing new refrigeration and gastronomic equipment, connecting them to power, water, and gas systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24063
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja efektywności energetycznej urządzeń chłodniczych i gastronomicznych, kontrolowanie ich wydajności.",
                    "en" => "Optimizing energy efficiency of refrigeration and gastronomic equipment, monitoring their performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24064
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami inżynierskimi przy projektowaniu nowych rozwiązań technologicznych w zakresie urządzeń chłodniczych.",
                    "en" => "Collaborating with engineering teams in designing new technological solutions for refrigeration equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24065
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem napraw i konserwacji urządzeń chłodniczych i gastronomicznych, przygotowywanie harmonogramów przeglądów.",
                    "en" => "Managing the repair and maintenance process of refrigeration and gastronomic equipment, preparing inspection schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24066
            ]
        ];
        $MONTER_URZĄDZEŃ_LASEROWYCH = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa urządzeń laserowych, w tym systemów cięcia, spawania oraz urządzeń medycznych wykorzystujących lasery.",
                    "en" => "Installation, maintenance, and repair of laser devices, including cutting systems, welding equipment, and medical devices utilizing lasers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24067
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w urządzeniach laserowych, wymiana uszkodzonych elementów i regulacja parametrów lasera.",
                    "en" => "Diagnosing faults in laser devices, replacing damaged components, and adjusting laser parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24068
            ],
            [
                "name" => json_encode([
                    "pl" => "Kalibracja urządzeń laserowych, przeprowadzanie testów i weryfikacja jakości działania urządzeń.",
                    "en" => "Calibrating laser devices, conducting tests, and verifying the operational quality of the equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24069
            ],
            [
                "name" => json_encode([
                    "pl" => "Montaż systemów laserowych do cięcia, spawania oraz innych zastosowań przemysłowych i medycznych.",
                    "en" => "Installing laser systems for cutting, welding, and other industrial and medical applications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24070
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami i technikami przy projektowaniu i rozwoju nowych technologii laserowych.",
                    "en" => "Collaborating with engineers and technicians in designing and developing new laser technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24071
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją urządzeń laserowych, kontrolowanie ich stanu technicznego oraz przygotowywanie harmonogramów napraw.",
                    "en" => "Managing the maintenance of laser devices, monitoring their technical condition, and preparing repair schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24072
            ]
        ];
        $MONTER_URZĄDZEŃ_STEROWANIA_RUCHEM_KOLEJOWYM = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa urządzeń sterowania ruchem kolejowym, w tym sygnalizacji, systemów sterowania i automatyki.",
                    "en" => "Installation, maintenance, and repair of railway traffic control devices, including signaling, control systems, and automation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24073
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka systemów sterowania ruchem kolejowym, wykrywanie usterek i ich naprawa, testowanie systemów sygnalizacyjnych.",
                    "en" => "Diagnostics of railway traffic control systems, detecting faults, repairing them, and testing signaling systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24074
            ],
            [
                "name" => json_encode([
                    "pl" => "Instalacja urządzeń elektronicznych i elektrycznych do sterowania ruchem pociągów, w tym systemów automatyki i sterowania.",
                    "en" => "Installation of electronic and electrical devices for train traffic control, including automation and control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24075
            ],
            [
                "name" => json_encode([
                    "pl" => "Montaż i testowanie systemów sygnalizacyjnych, sprawdzanie ich funkcjonalności i zapewnienie niezawodności.",
                    "en" => "Assembly and testing of signaling systems, checking their functionality, and ensuring reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24076
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem konserwacji urządzeń sterowania ruchem kolejowym, planowanie i organizowanie przeglądów.",
                    "en" => "Managing the maintenance of railway traffic control devices, planning and organizing inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24077
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem inżynierów w zakresie rozwoju i modernizacji systemów sterowania ruchem kolejowym.",
                    "en" => "Collaborating with engineering teams on the development and modernization of railway traffic control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24078
            ]
        ];
        $POZOSTALI_MONTERZY_MASZYN_I_URZĄDZEŃ_MECHANICZNYCH = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa maszyn mechanicznych wykorzystywanych w różnych branżach, takich jak przemysł ciężki, maszyny rolnicze i przemysłowe.",
                    "en" => "Installation, maintenance, and repair of mechanical machines used in various industries, such as heavy industry, agricultural, and industrial machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24079
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka układów mechanicznych maszyn, wymiana uszkodzonych komponentów, takich jak przekładnie, napędy i silniki.",
                    "en" => "Diagnosis of mechanical systems in machines, replacing damaged components such as gears, drives, and engines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24080
            ],
            [
                "name" => json_encode([
                    "pl" => "Montaż urządzeń mechanicznych, takich jak pompy, sprężarki, zawory, w różnych aplikacjach przemysłowych i komercyjnych.",
                    "en" => "Installation of mechanical devices such as pumps, compressors, and valves in various industrial and commercial applications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24081
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów funkcjonalnych maszyn, monitorowanie ich wydajności i optymalizacja procesów produkcyjnych.",
                    "en" => "Conducting functional tests of machines, monitoring their performance, and optimizing manufacturing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24082
            ],
            [
                "name" => json_encode([
                    "pl" => "Koordynowanie montażu, instalacji i uruchomienia nowych maszyn oraz modernizacji istniejących systemów mechanicznych.",
                    "en" => "Coordinating the assembly, installation, and commissioning of new machines and the modernization of existing mechanical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24083
            ],
            [
                "name" => json_encode([
                    "pl" => "Szkolenie personelu w zakresie obsługi, konserwacji i naprawy maszyn mechanicznych, zapewniając przestrzeganie norm jakości i bezpieczeństwa.",
                    "en" => "Training staff in the operation, maintenance, and repair of mechanical machines, ensuring compliance with quality and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24084
            ]
        ];
        $MONTER_APARATURY_ROZDZIELCZEJ_I_KONTROLNEJ_ENERGII_ELEKTRYCZNEJ = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa aparatury rozdzielczej i kontrolnej energii elektrycznej, w tym rozdzielnic, transformatorów i innych urządzeń elektrycznych.",
                    "en" => "Installation, maintenance, and repair of electrical distribution and control equipment, including switchgears, transformers, and other electrical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24085
            ],
            [
                "name" => json_encode([
                    "pl" => "Instalowanie systemów elektrycznych, takich jak rozdzielnice, liczniki, układy sterowania i monitorowania energii elektrycznej.",
                    "en" => "Installing electrical systems, such as switchgear, meters, control and monitoring systems for electrical energy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24086
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w aparaturze rozdzielczej i kontrolnej energii elektrycznej, naprawa uszkodzonych elementów.",
                    "en" => "Diagnosing faults in electrical distribution and control equipment, repairing damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24087
            ],
            [
                "name" => json_encode([
                    "pl" => "Montaż i testowanie nowych systemów rozdziału energii elektrycznej, w tym instalacja układów sterowania.",
                    "en" => "Assembly and testing of new electrical energy distribution systems, including the installation of control circuits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24088
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją urządzeń rozdzielczych energii elektrycznej, kontrolowanie ich pracy i wydajności.",
                    "en" => "Managing the maintenance of electrical distribution equipment, monitoring their operation and performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24089
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli i testów zgodności z normami bezpieczeństwa urządzeń elektrycznych.",
                    "en" => "Conducting inspections and tests for compliance with safety standards of electrical equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24090
            ]
        ];
        $MONTER_ELEKTRYCZNEGO_SPRZĘTU_GOSPODARSTWA_DOMOWEGO = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa elektrycznego sprzętu gospodarstwa domowego, takiego jak lodówki, pralki, zmywarki i kuchenki.",
                    "en" => "Installation, maintenance, and repair of electrical household appliances such as refrigerators, washing machines, dishwashers, and ovens."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24091
            ],
            [
                "name" => json_encode([
                    "pl" => "Instalacja systemów elektrycznych w sprzęcie gospodarstwa domowego oraz ich kalibracja.",
                    "en" => "Installing electrical systems in household appliances and calibrating them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24092
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnozowanie usterek elektrycznych, naprawa układów zasilania oraz wymiana uszkodzonych komponentów.",
                    "en" => "Diagnosing electrical faults, repairing power supply systems, and replacing damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24093
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z działami serwisowymi w zakresie modernizacji sprzętu oraz wprowadzania nowych technologii elektrycznych.",
                    "en" => "Collaborating with service departments on upgrading appliances and implementing new electrical technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24094
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja wydajności urządzeń elektrycznych gospodarstwa domowego oraz zapewnienie ich efektywności energetycznej.",
                    "en" => "Optimizing the performance of household electrical devices and ensuring their energy efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24095
            ],
            [
                "name" => json_encode([
                    "pl" => "Szkolenie użytkowników w zakresie obsługi i konserwacji sprzętu elektrycznego gospodarstwa domowego.",
                    "en" => "Training users on the operation and maintenance of household electrical appliances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24096
            ]
        ];
        $MONTER_ELEKTRYCZNYCH_PRZYRZĄDÓW_POMIAROWYCH = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, kalibracja i naprawa elektrycznych przyrządów pomiarowych, takich jak multimetry, oscyloskopy, woltomierze i amperomierze.",
                    "en" => "Installation, calibration, and repair of electrical measuring instruments such as multimeters, oscilloscopes, voltmeters, and ammeters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24097
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka urządzeń pomiarowych, wymiana uszkodzonych części, testowanie i kontrola poprawności działania przyrządów.",
                    "en" => "Diagnosing measuring devices, replacing damaged parts, testing, and checking the proper operation of instruments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24098
            ],
            [
                "name" => json_encode([
                    "pl" => "Instalacja nowych systemów pomiarowych, kalibracja i ustawianie parametrów urządzeń w zależności od specyfikacji.",
                    "en" => "Installing new measurement systems, calibrating and setting device parameters according to specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24099
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem inżynierów w zakresie tworzenia nowych urządzeń pomiarowych i technologii testowania.",
                    "en" => "Collaborating with engineering teams on the development of new measuring devices and testing technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24100
            ],
            [
                "name" => json_encode([
                    "pl" => "Optymalizacja działania urządzeń pomiarowych oraz wprowadzenie innowacji w zakresie diagnostyki urządzeń elektrycznych.",
                    "en" => "Optimizing the performance of measuring instruments and implementing innovations in electrical device diagnostics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24101
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją przyrządów pomiarowych, planowanie przeglądów i zapewnianie ich zgodności z normami.",
                    "en" => "Managing the maintenance of measuring instruments, planning inspections, and ensuring compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24102
            ]
        ];
        $MONTER_MASZYN_ELEKTRYCZNYCH = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, naprawa i konserwacja maszyn elektrycznych, w tym silników, generatorów, transformatorów oraz innych urządzeń elektrycznych w zakładach przemysłowych.",
                    "en" => "Installation, repair, and maintenance of electrical machines, including motors, generators, transformers, and other electrical devices in industrial plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24103
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w maszynach elektrycznych, naprawa uszkodzonych komponentów i regulacja układów elektrycznych.",
                    "en" => "Diagnosing faults in electrical machines, repairing damaged components, and adjusting electrical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24104
            ],
            [
                "name" => json_encode([
                    "pl" => "Montaż systemów elektrycznych w maszynach, w tym instalacja silników, czujników i układów zasilania.",
                    "en" => "Installing electrical systems in machines, including motors, sensors, and power supply circuits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24105
            ],
            [
                "name" => json_encode([
                    "pl" => "Testowanie maszyn elektrycznych, ocena ich wydajności, przeprowadzanie prób obciążeniowych i testów bezpieczeństwa.",
                    "en" => "Testing electrical machines, evaluating their performance, conducting load trials, and safety tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24106
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca przy modernizacji maszyn elektrycznych, wdrażanie nowych rozwiązań technologicznych w zakresie maszyn elektrycznych.",
                    "en" => "Collaborating on the modernization of electrical machines, implementing new technological solutions in electrical machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24107
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją maszyn elektrycznych, planowanie przeglądów oraz zapewnianie ich zgodności z normami bezpieczeństwa.",
                    "en" => "Managing the maintenance of electrical machines, planning inspections, and ensuring compliance with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24108
            ]
        ];
        $MONTER_OSPRZĘTU_ELEKTROTECHNICZNEGO = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa osprzętu elektrotechnicznego, w tym gniazdek, włączników, skrzynek rozdzielczych i urządzeń zabezpieczających.",
                    "en" => "Installation, maintenance, and repair of electrotechnical equipment, including outlets, switches, distribution boxes, and protective devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24109
            ],
            [
                "name" => json_encode([
                    "pl" => "Instalacja systemów elektrycznych w budynkach mieszkalnych i przemysłowych, w tym osprzętu oświetleniowego i zasilającego.",
                    "en" => "Installation of electrical systems in residential and industrial buildings, including lighting and power equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24110
            ],
            [
                "name" => json_encode([
                    "pl" => "Testowanie działania osprzętu elektrotechnicznego, identyfikacja usterek i ich naprawa.",
                    "en" => "Testing the operation of electrotechnical equipment, identifying faults, and repairing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24111
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca przy projektowaniu instalacji elektrycznych w nowych obiektach budowlanych.",
                    "en" => "Collaborating in the design of electrical installations in new buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24112
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji i przeglądów osprzętu elektrotechnicznego, zapewniając jego sprawność i bezpieczeństwo.",
                    "en" => "Carrying out maintenance and inspections of electrotechnical equipment, ensuring its efficiency and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24113
            ],
            [
                "name" => json_encode([
                    "pl" => "Naprawa uszkodzonych elementów osprzętu elektrotechnicznego, wymiana zużytych części i podzespołów.",
                    "en" => "Repairing damaged electrotechnical components, replacing worn-out parts and assemblies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24114
            ]
        ];
        $MONTER_SPRZĘTU_OŚWIETLENIOWEGO_I_LAMP_ELEKTRYCZNYCH = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa sprzętu oświetleniowego, w tym lamp, żarówek, opraw oświetleniowych i systemów sterowania oświetleniem.",
                    "en" => "Installation, maintenance, and repair of lighting equipment, including lamps, bulbs, light fittings, and lighting control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24115
            ],
            [
                "name" => json_encode([
                    "pl" => "Instalowanie systemów oświetleniowych w budynkach, ulicach i przestrzeniach publicznych, w tym montaż opraw i układów sterowania oświetleniem.",
                    "en" => "Installing lighting systems in buildings, streets, and public spaces, including mounting fittings and lighting control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24116
            ],
            [
                "name" => json_encode([
                    "pl" => "Testowanie systemów oświetleniowych, diagnozowanie usterek i przeprowadzanie napraw oświetlenia.",
                    "en" => "Testing lighting systems, diagnosing faults, and performing lighting repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24117
            ],
            [
                "name" => json_encode([
                    "pl" => "Montaż nowych instalacji oświetleniowych, w tym instalacja żarówek, lamp i regulacji jasności.",
                    "en" => "Installation of new lighting systems, including light bulbs, lamps, and brightness adjustments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24118
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją systemów oświetleniowych, planowanie przeglądów i wymiany uszkodzonych elementów.",
                    "en" => "Managing maintenance of lighting systems, planning inspections and replacement of damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24119
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami przy projektowaniu nowych rozwiązań oświetleniowych oraz modernizacji istniejących systemów.",
                    "en" => "Collaborating with engineers in designing new lighting solutions and modernizing existing systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24120
            ]
        ];
        $MONTER_WIĄZEK_ELEKTRYCZNYCH = [

            [
                "name" => json_encode([
                    "pl" => "Montaż wiązek elektrycznych, w tym przewodów, złączy, komponentów elektrycznych w urządzeniach przemysłowych, pojazdach i maszynach.",
                    "en" => "Assembly of wiring harnesses, including wires, connectors, and electrical components in industrial equipment, vehicles, and machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24121
            ],
            [
                "name" => json_encode([
                    "pl" => "Przygotowywanie wiązek elektrycznych do instalacji w urządzeniach, takich jak samochody, maszyny, systemy oświetleniowe.",
                    "en" => "Preparing electrical wiring harnesses for installation in devices such as cars, machinery, and lighting systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24122
            ],
            [
                "name" => json_encode([
                    "pl" => "Testowanie funkcjonalności wiązek elektrycznych, sprawdzanie poprawności połączeń i eliminacja usterek.",
                    "en" => "Testing the functionality of wiring harnesses, checking the accuracy of connections, and troubleshooting faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24123
            ],
            [
                "name" => json_encode([
                    "pl" => "Instalowanie wiązek elektrycznych w urządzeniach i pojazdach, w tym prawidłowe zarządzanie rozmieszczeniem przewodów i złączy.",
                    "en" => "Installing electrical wiring harnesses in devices and vehicles, including proper management of wire and connector placements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24124
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami przy projektowaniu układów elektrycznych i wiązek w nowych urządzeniach.",
                    "en" => "Collaborating with engineers in designing electrical systems and harnesses in new devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24125
            ],
            [
                "name" => json_encode([
                    "pl" => "Dokonywanie napraw i wymiany uszkodzonych wiązek elektrycznych w urządzeniach i pojazdach.",
                    "en" => "Repairing and replacing damaged electrical wiring harnesses in devices and vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24126
            ]
        ];
        $POZOSTALI_MONTERZY_SPRZĘTU_ELEKTRYCZNEGO = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa różnego rodzaju urządzeń elektrycznych, takich jak maszyny, urządzenia pomiarowe, oświetleniowe i inne urządzenia elektryczne.",
                    "en" => "Installation, maintenance, and repair of various electrical devices such as machines, measuring devices, lighting systems, and other electrical equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24127
            ],
            [
                "name" => json_encode([
                    "pl" => "Instalowanie nowych urządzeń elektrycznych w różnych branżach przemysłowych, w tym maszyn, systemów oświetleniowych, urządzeń pomiarowych.",
                    "en" => "Installing new electrical devices in various industrial sectors, including machines, lighting systems, and measuring instruments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24128
            ],
            [
                "name" => json_encode([
                    "pl" => "Testowanie i kalibracja urządzeń elektrycznych, diagnozowanie usterek i naprawa uszkodzonych elementów.",
                    "en" => "Testing and calibration of electrical devices, diagnosing faults, and repairing damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24129
            ],
            [
                "name" => json_encode([
                    "pl" => "Koordynowanie procesu montażu, instalacji oraz modernizacji urządzeń elektrycznych, zapewnienie ich zgodności z normami.",
                    "en" => "Coordinating the assembly, installation, and modernization of electrical devices, ensuring compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24130
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją i naprawą urządzeń elektrycznych, przygotowanie harmonogramu przeglądów.",
                    "en" => "Managing the maintenance and repair of electrical devices, preparing inspection schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24131
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami w zakresie rozwoju nowych technologii i urządzeń elektrycznych.",
                    "en" => "Collaborating with engineers on the development of new technologies and electrical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24132
            ]
        ];
        $MONTER_APARATURY_I_URZĄDZEŃ_TECHNIKI_JĄDROWEJ = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa aparatury i urządzeń techniki jądrowej, takich jak detektory promieniowania, urządzenia kontrolne i pomiarowe.",
                    "en" => "Installation, maintenance, and repair of nuclear technology equipment, such as radiation detectors, control and measurement devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24133
            ],
            [
                "name" => json_encode([
                    "pl" => "Testowanie i kalibracja urządzeń jądrowych, sprawdzanie poprawności działania, zapewnienie zgodności z normami bezpieczeństwa.",
                    "en" => "Testing and calibrating nuclear devices, checking functionality, ensuring compliance with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24134
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów i konserwacji urządzeń techniki jądrowej w celu utrzymania ich wydajności i bezpieczeństwa.",
                    "en" => "Performing inspections and maintenance of nuclear technology equipment to maintain their performance and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24135
            ],
            [
                "name" => json_encode([
                    "pl" => "Instalacja nowych systemów jądrowych oraz podzespołów, takich jak reaktory, detektory promieniowania.",
                    "en" => "Installing new nuclear systems and components, such as reactors and radiation detectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24136
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją urządzeń techniki jądrowej, organizowanie planów napraw i przeglądów.",
                    "en" => "Managing the maintenance of nuclear technology equipment, organizing repair and inspection schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24137
            ],
            [
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów bezpieczeństwa urządzeń techniki jądrowej oraz monitorowanie ich zgodności z normami radiacyjnymi.",
                    "en" => "Conducting safety tests on nuclear technology devices and monitoring their compliance with radiation standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24138
            ]
        ];
        $MONTER_ELEKTRONICZNEGO_WYPOSAŻENIA_MASZYN_I_URZĄDZEŃ = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa elektronicznego wyposażenia maszyn i urządzeń, takich jak sterowniki, czujniki, panele kontrolne.",
                    "en" => "Installation, maintenance, and repair of electronic equipment in machines and devices, such as controllers, sensors, control panels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24139
            ],
            [
                "name" => json_encode([
                    "pl" => "Testowanie, kalibracja i diagnostyka systemów elektronicznych w maszynach, w tym urządzeń do monitorowania i sterowania.",
                    "en" => "Testing, calibration, and diagnostics of electronic systems in machines, including monitoring and control devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24140
            ],
            [
                "name" => json_encode([
                    "pl" => "Instalowanie nowych układów elektronicznych w maszynach i urządzeniach przemysłowych, w tym układów sterowania i zasilania.",
                    "en" => "Installing new electronic circuits in industrial machines and devices, including control and power supply systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24141
            ],
            [
                "name" => json_encode([
                    "pl" => "Montaż i integracja komponentów elektronicznych w urządzeniach mechanicznych, w tym testowanie ich kompatybilności.",
                    "en" => "Assembly and integration of electronic components in mechanical devices, testing their compatibility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24142
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami przy projektowaniu i wdrażaniu nowych rozwiązań elektronicznych w maszynach i urządzeniach.",
                    "en" => "Collaborating with engineers in designing and implementing new electronic solutions in machines and devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24143
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją urządzeń elektronicznych w maszynach, monitorowanie ich stanu technicznego i przeprowadzanie napraw.",
                    "en" => "Managing the maintenance of electronic devices in machines, monitoring their technical condition, and performing repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24144
            ]
        ];
        $MONTER_ELEKTRONIKI_SAMOCHODOWEJ = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa systemów elektronicznych w pojazdach, takich jak systemy zarządzania silnikiem, systemy multimedialne i nawigacyjne.",
                    "en" => "Installation, maintenance, and repair of electronic systems in vehicles, such as engine management systems, multimedia, and navigation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24145
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w systemach elektronicznych pojazdów, wymiana uszkodzonych elementów, kalibracja i testowanie.",
                    "en" => "Diagnosing faults in vehicle electronic systems, replacing damaged components, calibration, and testing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24146
            ],
            [
                "name" => json_encode([
                    "pl" => "Instalacja nowoczesnych systemów elektronicznych w pojazdach, takich jak systemy bezpieczeństwa, czujniki parkowania, systemy diagnostyczne.",
                    "en" => "Installing advanced electronic systems in vehicles, such as safety systems, parking sensors, and diagnostic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24147
            ],
            [
                "name" => json_encode([
                    "pl" => "Testowanie elektronicznych systemów samochodowych, sprawdzanie ich kompatybilności z innymi komponentami pojazdu.",
                    "en" => "Testing automotive electronic systems, checking their compatibility with other vehicle components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24148
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z producentami i dostawcami urządzeń elektronicznych w zakresie nowoczesnych technologii motoryzacyjnych.",
                    "en" => "Collaborating with manufacturers and suppliers of electronic devices in the field of advanced automotive technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24149
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem konserwacji i naprawy elektronicznych systemów samochodowych, zapewnianie ich poprawnej pracy.",
                    "en" => "Managing the maintenance and repair of automotive electronic systems, ensuring their proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24150
            ]
        ];
        $MONTER_PODZESPOŁÓW_I_ZESPOŁÓW_ELEKTRONICZNYCH = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa podzespołów elektronicznych, takich jak układy scalone, diody, tranzystory, kondensatory, rezystory i inne komponenty elektroniczne.",
                    "en" => "Installation, maintenance, and repair of electronic components such as integrated circuits, diodes, transistors, capacitors, resistors, and other electronic components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24151
            ],
            [
                "name" => json_encode([
                    "pl" => "Testowanie i diagnostyka podzespołów elektronicznych, weryfikacja ich działania i naprawa uszkodzonych elementów.",
                    "en" => "Testing and diagnostics of electronic components, verifying their operation, and repairing damaged parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24152
            ],
            [
                "name" => json_encode([
                    "pl" => "Montaż i lutowanie podzespołów elektronicznych na płytkach drukowanych, łączenie elementów w złożone układy elektroniczne.",
                    "en" => "Assembly and soldering of electronic components on printed circuit boards, connecting elements into complex electronic circuits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24153
            ],
            [
                "name" => json_encode([
                    "pl" => "Instalowanie, testowanie i kalibracja elektronicznych urządzeń pomiarowych, przyrządów kontrolnych i innych systemów elektronicznych.",
                    "en" => "Installing, testing, and calibrating electronic measuring devices, control instruments, and other electronic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24154
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie konserwacją podzespołów elektronicznych w urządzeniach, planowanie ich przeglądów technicznych.",
                    "en" => "Managing the maintenance of electronic components in devices, planning their technical inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24155
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami przy tworzeniu nowych układów elektronicznych i wprowadzaniu innowacyjnych technologii.",
                    "en" => "Collaborating with engineers in the development of new electronic circuits and implementing innovative technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24156
            ]
        ];
        $MONTER_SPRZĘTU_RADIOWEGO_I_TELEWIZYJNEGO = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa sprzętu radiowego i telewizyjnego, w tym odbiorników, anten, wzmacniaczy i innych urządzeń elektronicznych.",
                    "en" => "Installation, maintenance, and repair of radio and television equipment, including receivers, antennas, amplifiers, and other electronic devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24157
            ],
            [
                "name" => json_encode([
                    "pl" => "Instalowanie nowych systemów radiowych i telewizyjnych, w tym montaż anten, okablowania i konfiguracja urządzeń.",
                    "en" => "Installing new radio and television systems, including antenna installation, wiring, and device configuration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24158
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w systemach radiowych i telewizyjnych, wymiana uszkodzonych komponentów oraz testowanie działania urządzeń.",
                    "en" => "Diagnosing faults in radio and television systems, replacing damaged components, and testing the operation of devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24159
            ],
            [
                "name" => json_encode([
                    "pl" => "Testowanie jakości sygnału radiowego i telewizyjnego, regulacja parametrów i zapewnienie optymalnej jakości odbioru.",
                    "en" => "Testing the quality of radio and television signals, adjusting parameters, and ensuring optimal reception quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24160
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie instalacją systemów antenowych i telewizyjnych, w tym konfiguracja systemów nadających i odbiorczych.",
                    "en" => "Managing the installation of antenna and television systems, including configuration of transmitting and receiving systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24161
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami w zakresie projektowania nowych systemów radiowych i telewizyjnych.",
                    "en" => "Collaborating with engineers on designing new radio and television systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24162
            ]
        ];
        $MONTER_ZESTRAJACZ_URZĄDZEŃ_ELEKTRONICZNYCH = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, kalibracja i zestawianie urządzeń elektronicznych, w tym sprzętu audio, wideo, komputerowego i innych systemów elektronicznych.",
                    "en" => "Installation, calibration, and tuning of electronic devices, including audio equipment, video equipment, computers, and other electronic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24163
            ],
            [
                "name" => json_encode([
                    "pl" => "Testowanie ustawień urządzeń elektronicznych, regulacja parametrów oraz zapewnienie ich pełnej funkcjonalności.",
                    "en" => "Testing the settings of electronic devices, adjusting parameters, and ensuring their full functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24164
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem kalibracji i optymalizacji działania urządzeń elektronicznych, w tym analizowanie wyników i dokonywanie niezbędnych poprawek.",
                    "en" => "Managing the calibration and optimization process of electronic devices, analyzing results, and making necessary adjustments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24165
            ],
            [
                "name" => json_encode([
                    "pl" => "Instalacja oprogramowania i aktualizacja urządzeń elektronicznych, konfigurowanie systemów sterowania.",
                    "en" => "Installing software and updating electronic devices, configuring control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24166
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem inżynierów przy projektowaniu nowych urządzeń elektronicznych oraz wdrażaniu nowych technologii.",
                    "en" => "Collaborating with engineering teams on the design of new electronic devices and implementing new technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24167
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem konserwacji i naprawy urządzeń elektronicznych, zapewnianie ich długotrwałej niezawodności.",
                    "en" => "Managing the maintenance and repair of electronic devices, ensuring their long-term reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24168
            ]
        ];
        $POZOSTALI_MONTERZY_SPRZĘTU_ELEKTRONICZNEGO = [

            [
                "name" => json_encode([
                    "pl" => "Montaż, konserwacja i naprawa różnych urządzeń elektronicznych, takich jak przyrządy pomiarowe, sprzęt komputerowy, urządzenia audio-wideo.",
                    "en" => "Installation, maintenance, and repair of various electronic devices, such as measuring instruments, computer equipment, audio-video devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24169
            ],
            [
                "name" => json_encode([
                    "pl" => "Instalacja i testowanie nowych układów elektronicznych w urządzeniach, w tym w komputerach, systemach audio i urządzeniach elektronicznych.",
                    "en" => "Installation and testing of new electronic circuits in devices, including computers, audio systems, and electronic devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24170
            ],
            [
                "name" => json_encode([
                    "pl" => "Diagnostyka usterek w systemach elektronicznych, wymiana komponentów i naprawa uszkodzonych urządzeń.",
                    "en" => "Diagnosing faults in electronic systems, replacing components, and repairing damaged devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24171
            ],
            [
                "name" => json_encode([
                    "pl" => "Testowanie funkcji urządzeń elektronicznych, regulacja parametrów oraz zapewnienie zgodności z wymaganiami technicznymi.",
                    "en" => "Testing the functions of electronic devices, adjusting parameters, and ensuring compliance with technical specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24172
            ],
            [
                "name" => json_encode([
                    "pl" => "Zarządzanie instalacją systemów elektronicznych w różnych branżach przemysłowych, w tym w budynkach, pojazdach i urządzeniach przemysłowych.",
                    "en" => "Managing the installation of electronic systems in various industrial sectors, including buildings, vehicles, and industrial equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24173
            ],
            [
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami w zakresie projektowania nowych układów elektronicznych i wdrażania nowych technologii w produkcji urządzeń elektronicznych.",
                    "en" => "Collaborating with engineers in designing new electronic circuits and implementing new technologies in the production of electronic devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
                ,
                "id" => 24174
            ]
        ];

        DB::table('detail_projects')->insert(array_merge(
            $INŻYNIER_MECHANIK_CIEPLNO_MECHANICZNE_URZĄDZENIA_INSTALACJE_I_SIECI_ENERGETYCZNE,
            $INŻYNIER_MECHANIK_MASZYNY_I_URZĄDZENIA_DO_OBRÓBKI_METALI,
            $INŻYNIER_MECHANIK_MASZYNY_I_URZĄDZENIA_ENERGETYCZNE,
            $INŻYNIER_MECHANIK_MASZYNY_I_URZĄDZENIA_PRZEMYSŁOWE,
            $INŻYNIER_MECHANIK_MECHANIKA_PRECYZYJNA,
            $INŻYNIER_MECHANIK_ŚRODKI_TRANSPORTU,
            $INŻYNIER_MECHANIK_TECHNOLOGIA_MECHANICZNA,
            $INŻYNIER_MECHANIK_LOTNICZY,
            $INŻYNIER_MECHANIZACJI_ROLNICTWA,
            $INŻYNIER_SPAWALNIK,
            $KONSTRUKTOR_FORM_WTRYSKOWYCH,
            $POZOSTALI_INŻYNIEROWIE_MECHANICY,
            $INŻYNIER_CHŁODNICTWA_I_KLIMATYZACJI,
            $TECHNIK_MECHANIK_BUDOWY_ŚRODKÓW_TRANSPORTU,
            $TECHNIK_MECHANIK_EKSPLOATACJI_ŚRODKÓW_TRANSPORTU,
            $TECHNIK_MECHANIK_MASZYN_I_URZĄDZEŃ,
            $TECHNIK_MECHANIK_OBRÓBKI_SKRAWANIEM,
            $TECHNIK_MECHANIK_PRECYZYJNY,
            $TECHNIK_MECHANIK_URZĄDZEŃ_PRZEMYSŁOWYCH,
            $TECHNIK_MECHANIZACJI_ROLNICTWA,
            $POZOSTALI_TECHNICY_MECHANICY,
            $TECHNIK_KONSERWATOR_URZĄDZEŃ_DŹWIGOWYCH,
            $TECHNIK_URZĄDZEŃ_DŹWIGOWYCH,
            $TECHNIK_MECHANIZACJI_ROLNICTWA_I_AGROTRONIKI,
            $MECHANIK_AUTOBUSÓW,
            $MECHANIK_CIĄGNIKÓW,
            $MECHANIK_POJAZDÓW_SAMOCHODOWYCH,
            $MECHANIK_SAMOCHODÓW_CIĘŻAROWYCH,
            $MECHANIK_SAMOCHODÓW_OSOBOWYCH,
            $MONTER_SAMOCHODOWEJ_INSTALACJI_GAZOWEJ_LPG,
            $MECHANIK_MOTOCYKLOWY,
            $POZOSTALI_MECHANICY_POJAZDÓW_SAMOCHODOWYCH,
            $TECHNIK_POJAZDÓW_SAMOCHODOWYCH,
            $MECHANIK_KONSERWATOR_URZĄDZEŃ_DO_NAPEŁNIANIA_I_OPRÓŻNIANIA_ZBIORNIKÓW,
            $MECHANIK_KONSERWATOR_URZĄDZEŃ_DŹWIGOWYCH,
            $MECHANIK_MASZYN_I_URZĄDZEŃ_BUDOWLANYCH_I_MELIORACYJNYCH,
            $MECHANIK_MASZYN_I_URZĄDZEŃ_DO_OBRÓBKI_METALI,
            $MECHANIK_MASZYN_I_URZĄDZEŃ_GÓRNICTWA_ODKRYWKOWEGO,
            $MECHANIK_MASZYN_I_URZĄDZEŃ_GÓRNICTWA_PODZIEMNEGO,
            $MECHANIK_MASZYN_I_URZĄDZEŃ_PRZEMYSŁOWYCH,
            $MECHANIK_MASZYN_ROLNICZYCH,
            $MECHANIK_MASZYN_SZWALNICZYCH,
            $MECHANIK_SILNIKÓW_SPALINOWYCH,
            $MECHANIK_POJAZDÓW_KOLEJOWYCH,
            $POZOSTALI_MECHANICY_MASZYN_I_URZĄDZEŃ_ROLNICZYCH_I_PRZEMYSŁOWYCH,
            $MECHANICY_ROWERÓW_I_POKREWNI,
            $MECHANIK_AUTOMATYKI_PRZEMYSŁOWEJ_I_URZĄDZEŃ_PRECYZYJNYCH,
            $MECHANIK_PRECYZYJNY,
            $OPTYK_MECHANIK,
            $POZOSTALI_MECHANICY_PRECYZYJNI,
            $MONTER_INSTALATOR_URZĄDZEŃ_TECHNICZNYCH_W_BUDOWNICTWIE_WIEJSKIM,
            $MONTER_APARATÓW_I_PRZYRZĄDÓW_OPTYCZNYCH,
            $MONTER_APARATURY_I_URZĄDZEŃ_CHEMICZNYCH,
            $MONTER_KOTŁÓW_I_ARMATURY_KOTŁOWEJ,
            $MONTER_MASZYN_I_URZĄDZEŃ_OKRĘTOWYCH,
            $MONTER_MASZYN_I_URZĄDZEŃ_PRZEMYSŁOWYCH,
            $MONTER_MECHANIZMÓW_I_PRZYRZĄDÓW_PRECYZYJNYCH,
            $MONTER_OBRABIAREK,
            $MONTER_PŁATOWCÓW_I_ŚMIGŁOWCÓW,
            $MONTER_POJAZDÓW_I_URZĄDZEŃ_TRANSPORTOWYCH,
            $MONTER_SILNIKÓW_SPALINOWYCH,
            $MONTER_SPRZĘTU_GOSPODARSTWA_DOMOWEGO,
            $MONTER_TABORU_SZYNOWEGO,
            $MONTER_UKŁADÓW_HYDRAULICZNYCH_I_PNEUMATYCZNYCH,
            $MONTER_URZĄDZEŃ_CHŁODNICZYCH_I_GASTRONOMICZNYCH,
            $MONTER_URZĄDZEŃ_LASEROWYCH,
            $MONTER_URZĄDZEŃ_STEROWANIA_RUCHEM_KOLEJOWYM,
            $POZOSTALI_MONTERZY_MASZYN_I_URZĄDZEŃ_MECHANICZNYCH,
            $MONTER_APARATURY_ROZDZIELCZEJ_I_KONTROLNEJ_ENERGII_ELEKTRYCZNEJ,
            $MONTER_ELEKTRYCZNEGO_SPRZĘTU_GOSPODARSTWA_DOMOWEGO,
            $MONTER_ELEKTRYCZNYCH_PRZYRZĄDÓW_POMIAROWYCH,
            $MONTER_MASZYN_ELEKTRYCZNYCH,
            $MONTER_OSPRZĘTU_ELEKTROTECHNICZNEGO,
            $MONTER_SPRZĘTU_OŚWIETLENIOWEGO_I_LAMP_ELEKTRYCZNYCH,
            $MONTER_WIĄZEK_ELEKTRYCZNYCH,
            $POZOSTALI_MONTERZY_SPRZĘTU_ELEKTRYCZNEGO,
            $MONTER_APARATURY_I_URZĄDZEŃ_TECHNIKI_JĄDROWEJ,
            $MONTER_ELEKTRONICZNEGO_WYPOSAŻENIA_MASZYN_I_URZĄDZEŃ,
            $MONTER_ELEKTRONIKI_SAMOCHODOWEJ,
            $MONTER_PODZESPOŁÓW_I_ZESPOŁÓW_ELEKTRONICZNYCH,
            $MONTER_SPRZĘTU_RADIOWEGO_I_TELEWIZYJNEGO,
            $MONTER_ZESTRAJACZ_URZĄDZEŃ_ELEKTRONICZNYCH,
            $POZOSTALI_MONTERZY_SPRZĘTU_ELEKTRONICZNEGO
        ));

        Category::whereId('1479')->first()->detailprojects()->attach(collect($INŻYNIER_MECHANIK_CIEPLNO_MECHANICZNE_URZĄDZENIA_INSTALACJE_I_SIECI_ENERGETYCZNE)->pluck('id')->toArray());
        Category::whereId('1480')->first()->detailprojects()->attach(collect($INŻYNIER_MECHANIK_MASZYNY_I_URZĄDZENIA_DO_OBRÓBKI_METALI)->pluck('id')->toArray());
        Category::whereId('1481')->first()->detailprojects()->attach(collect($INŻYNIER_MECHANIK_MASZYNY_I_URZĄDZENIA_ENERGETYCZNE)->pluck('id')->toArray());
        Category::whereId('1482')->first()->detailprojects()->attach(collect($INŻYNIER_MECHANIK_MASZYNY_I_URZĄDZENIA_PRZEMYSŁOWE)->pluck('id')->toArray());
        Category::whereId('1483')->first()->detailprojects()->attach(collect($INŻYNIER_MECHANIK_MECHANIKA_PRECYZYJNA)->pluck('id')->toArray());
        Category::whereId('1484')->first()->detailprojects()->attach(collect($INŻYNIER_MECHANIK_ŚRODKI_TRANSPORTU)->pluck('id')->toArray());
        Category::whereId('1485')->first()->detailprojects()->attach(collect($INŻYNIER_MECHANIK_TECHNOLOGIA_MECHANICZNA)->pluck('id')->toArray());
        Category::whereId('1486')->first()->detailprojects()->attach(collect($INŻYNIER_MECHANIK_LOTNICZY)->pluck('id')->toArray());
        Category::whereId('1487')->first()->detailprojects()->attach(collect($INŻYNIER_MECHANIZACJI_ROLNICTWA)->pluck('id')->toArray());
        Category::whereId('1488')->first()->detailprojects()->attach(collect($INŻYNIER_SPAWALNIK)->pluck('id')->toArray());
        Category::whereId('1489')->first()->detailprojects()->attach(collect($KONSTRUKTOR_FORM_WTRYSKOWYCH)->pluck('id')->toArray());
        Category::whereId('1491')->first()->detailprojects()->attach(collect($POZOSTALI_INŻYNIEROWIE_MECHANICY)->pluck('id')->toArray());
        Category::whereId('1492')->first()->detailprojects()->attach(collect($INŻYNIER_CHŁODNICTWA_I_KLIMATYZACJI)->pluck('id')->toArray());
        Category::whereId('1496')->first()->detailprojects()->attach(collect($TECHNIK_MECHANIK_BUDOWY_ŚRODKÓW_TRANSPORTU)->pluck('id')->toArray());
        Category::whereId('1497')->first()->detailprojects()->attach(collect($TECHNIK_MECHANIK_EKSPLOATACJI_ŚRODKÓW_TRANSPORTU)->pluck('id')->toArray());
        Category::whereId('1498')->first()->detailprojects()->attach(collect($TECHNIK_MECHANIK_MASZYN_I_URZĄDZEŃ)->pluck('id')->toArray());
        Category::whereId('1499')->first()->detailprojects()->attach(collect($TECHNIK_MECHANIK_OBRÓBKI_SKRAWANIEM)->pluck('id')->toArray());
        Category::whereId('1500')->first()->detailprojects()->attach(collect($TECHNIK_MECHANIK_PRECYZYJNY)->pluck('id')->toArray());
        Category::whereId('1501')->first()->detailprojects()->attach(collect($TECHNIK_MECHANIK_URZĄDZEŃ_PRZEMYSŁOWYCH)->pluck('id')->toArray());
        Category::whereId('1502')->first()->detailprojects()->attach(collect($TECHNIK_MECHANIZACJI_ROLNICTWA)->pluck('id')->toArray());
        Category::whereId('1503')->first()->detailprojects()->attach(collect($POZOSTALI_TECHNICY_MECHANICY)->pluck('id')->toArray());
        Category::whereId('1504')->first()->detailprojects()->attach(collect($TECHNIK_KONSERWATOR_URZĄDZEŃ_DŹWIGOWYCH)->pluck('id')->toArray());
        Category::whereId('1505')->first()->detailprojects()->attach(collect($TECHNIK_URZĄDZEŃ_DŹWIGOWYCH)->pluck('id')->toArray());
        Category::whereId('1506')->first()->detailprojects()->attach(collect($TECHNIK_MECHANIZACJI_ROLNICTWA_I_AGROTRONIKI)->pluck('id')->toArray());
        Category::whereId('1512')->first()->detailprojects()->attach(collect($MECHANIK_AUTOBUSÓW)->pluck('id')->toArray());
        Category::whereId('1513')->first()->detailprojects()->attach(collect($MECHANIK_CIĄGNIKÓW)->pluck('id')->toArray());
        Category::whereId('1514')->first()->detailprojects()->attach(collect($MECHANIK_POJAZDÓW_SAMOCHODOWYCH)->pluck('id')->toArray());
        Category::whereId('1515')->first()->detailprojects()->attach(collect($MECHANIK_SAMOCHODÓW_CIĘŻAROWYCH)->pluck('id')->toArray());
        Category::whereId('1516')->first()->detailprojects()->attach(collect($MECHANIK_SAMOCHODÓW_OSOBOWYCH)->pluck('id')->toArray());
        Category::whereId('1517')->first()->detailprojects()->attach(collect($MONTER_SAMOCHODOWEJ_INSTALACJI_GAZOWEJ_LPG)->pluck('id')->toArray());
        Category::whereId('1518')->first()->detailprojects()->attach(collect($MECHANIK_MOTOCYKLOWY)->pluck('id')->toArray());
        Category::whereId('1519')->first()->detailprojects()->attach(collect($POZOSTALI_MECHANICY_POJAZDÓW_SAMOCHODOWYCH)->pluck('id')->toArray());
        Category::whereId('1520')->first()->detailprojects()->attach(collect($TECHNIK_POJAZDÓW_SAMOCHODOWYCH)->pluck('id')->toArray());
        Category::whereId('1528')->first()->detailprojects()->attach(collect($MECHANIK_KONSERWATOR_URZĄDZEŃ_DO_NAPEŁNIANIA_I_OPRÓŻNIANIA_ZBIORNIKÓW)->pluck('id')->toArray());
        Category::whereId('1529')->first()->detailprojects()->attach(collect($MECHANIK_KONSERWATOR_URZĄDZEŃ_DŹWIGOWYCH)->pluck('id')->toArray());
        Category::whereId('1530')->first()->detailprojects()->attach(collect($MECHANIK_MASZYN_I_URZĄDZEŃ_BUDOWLANYCH_I_MELIORACYJNYCH)->pluck('id')->toArray());
        Category::whereId('1531')->first()->detailprojects()->attach(collect($MECHANIK_MASZYN_I_URZĄDZEŃ_DO_OBRÓBKI_METALI)->pluck('id')->toArray());
        Category::whereId('1532')->first()->detailprojects()->attach(collect($MECHANIK_MASZYN_I_URZĄDZEŃ_GÓRNICTWA_ODKRYWKOWEGO)->pluck('id')->toArray());
        Category::whereId('1533')->first()->detailprojects()->attach(collect($MECHANIK_MASZYN_I_URZĄDZEŃ_GÓRNICTWA_PODZIEMNEGO)->pluck('id')->toArray());
        Category::whereId('1534')->first()->detailprojects()->attach(collect($MECHANIK_MASZYN_I_URZĄDZEŃ_PRZEMYSŁOWYCH)->pluck('id')->toArray());
        Category::whereId('1535')->first()->detailprojects()->attach(collect($MECHANIK_MASZYN_ROLNICZYCH)->pluck('id')->toArray());
        Category::whereId('1536')->first()->detailprojects()->attach(collect($MECHANIK_MASZYN_SZWALNICZYCH)->pluck('id')->toArray());
        Category::whereId('1538')->first()->detailprojects()->attach(collect($MECHANIK_SILNIKÓW_SPALINOWYCH)->pluck('id')->toArray());
        Category::whereId('1539')->first()->detailprojects()->attach(collect($MECHANIK_POJAZDÓW_KOLEJOWYCH)->pluck('id')->toArray());
        Category::whereId('1540')->first()->detailprojects()->attach(collect($POZOSTALI_MECHANICY_MASZYN_I_URZĄDZEŃ_ROLNICZYCH_I_PRZEMYSŁOWYCH)->pluck('id')->toArray());
        Category::whereId('1541')->first()->detailprojects()->attach(collect($MECHANICY_ROWERÓW_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1542')->first()->detailprojects()->attach(collect($MECHANIK_AUTOMATYKI_PRZEMYSŁOWEJ_I_URZĄDZEŃ_PRECYZYJNYCH)->pluck('id')->toArray());
        Category::whereId('1543')->first()->detailprojects()->attach(collect($MECHANIK_PRECYZYJNY)->pluck('id')->toArray());
        Category::whereId('1544')->first()->detailprojects()->attach(collect($OPTYK_MECHANIK)->pluck('id')->toArray());
        Category::whereId('1547')->first()->detailprojects()->attach(collect($POZOSTALI_MECHANICY_PRECYZYJNI)->pluck('id')->toArray());
        Category::whereId('1549')->first()->detailprojects()->attach(collect($MONTER_INSTALATOR_URZĄDZEŃ_TECHNICZNYCH_W_BUDOWNICTWIE_WIEJSKIM)->pluck('id')->toArray());
        Category::whereId('1551')->first()->detailprojects()->attach(collect($MONTER_APARATÓW_I_PRZYRZĄDÓW_OPTYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1552')->first()->detailprojects()->attach(collect($MONTER_APARATURY_I_URZĄDZEŃ_CHEMICZNYCH)->pluck('id')->toArray());
        Category::whereId('1553')->first()->detailprojects()->attach(collect($MONTER_KOTŁÓW_I_ARMATURY_KOTŁOWEJ)->pluck('id')->toArray());
        Category::whereId('1554')->first()->detailprojects()->attach(collect($MONTER_MASZYN_I_URZĄDZEŃ_OKRĘTOWYCH)->pluck('id')->toArray());
        Category::whereId('1555')->first()->detailprojects()->attach(collect($MONTER_MASZYN_I_URZĄDZEŃ_PRZEMYSŁOWYCH)->pluck('id')->toArray());
        Category::whereId('1556')->first()->detailprojects()->attach(collect($MONTER_MECHANIZMÓW_I_PRZYRZĄDÓW_PRECYZYJNYCH)->pluck('id')->toArray());
        Category::whereId('1557')->first()->detailprojects()->attach(collect($MONTER_OBRABIAREK)->pluck('id')->toArray());
        Category::whereId('1558')->first()->detailprojects()->attach(collect($MONTER_PŁATOWCÓW_I_ŚMIGŁOWCÓW)->pluck('id')->toArray());
        Category::whereId('1559')->first()->detailprojects()->attach(collect($MONTER_POJAZDÓW_I_URZĄDZEŃ_TRANSPORTOWYCH)->pluck('id')->toArray());
        Category::whereId('1560')->first()->detailprojects()->attach(collect($MONTER_SILNIKÓW_SPALINOWYCH)->pluck('id')->toArray());
        Category::whereId('1561')->first()->detailprojects()->attach(collect($MONTER_SPRZĘTU_GOSPODARSTWA_DOMOWEGO)->pluck('id')->toArray());
        Category::whereId('1562')->first()->detailprojects()->attach(collect($MONTER_TABORU_SZYNOWEGO)->pluck('id')->toArray());
        Category::whereId('1563')->first()->detailprojects()->attach(collect($MONTER_UKŁADÓW_HYDRAULICZNYCH_I_PNEUMATYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1564')->first()->detailprojects()->attach(collect($MONTER_URZĄDZEŃ_CHŁODNICZYCH_I_GASTRONOMICZNYCH)->pluck('id')->toArray());
        Category::whereId('1565')->first()->detailprojects()->attach(collect($MONTER_URZĄDZEŃ_LASEROWYCH)->pluck('id')->toArray());
        Category::whereId('1566')->first()->detailprojects()->attach(collect($MONTER_URZĄDZEŃ_STEROWANIA_RUCHEM_KOLEJOWYM)->pluck('id')->toArray());
        Category::whereId('1567')->first()->detailprojects()->attach(collect($POZOSTALI_MONTERZY_MASZYN_I_URZĄDZEŃ_MECHANICZNYCH)->pluck('id')->toArray());
        Category::whereId('1569')->first()->detailprojects()->attach(collect($MONTER_APARATURY_ROZDZIELCZEJ_I_KONTROLNEJ_ENERGII_ELEKTRYCZNEJ)->pluck('id')->toArray());
        Category::whereId('1570')->first()->detailprojects()->attach(collect($MONTER_ELEKTRYCZNEGO_SPRZĘTU_GOSPODARSTWA_DOMOWEGO)->pluck('id')->toArray());
        Category::whereId('1571')->first()->detailprojects()->attach(collect($MONTER_ELEKTRYCZNYCH_PRZYRZĄDÓW_POMIAROWYCH)->pluck('id')->toArray());
        Category::whereId('1572')->first()->detailprojects()->attach(collect($MONTER_MASZYN_ELEKTRYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1573')->first()->detailprojects()->attach(collect($MONTER_OSPRZĘTU_ELEKTROTECHNICZNEGO)->pluck('id')->toArray());
        Category::whereId('1574')->first()->detailprojects()->attach(collect($MONTER_SPRZĘTU_OŚWIETLENIOWEGO_I_LAMP_ELEKTRYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1575')->first()->detailprojects()->attach(collect($MONTER_WIĄZEK_ELEKTRYCZNYCH)->pluck('id')->toArray());
        Category::whereId('1576')->first()->detailprojects()->attach(collect($POZOSTALI_MONTERZY_SPRZĘTU_ELEKTRYCZNEGO)->pluck('id')->toArray());
        Category::whereId('1578')->first()->detailprojects()->attach(collect($MONTER_APARATURY_I_URZĄDZEŃ_TECHNIKI_JĄDROWEJ)->pluck('id')->toArray());
        Category::whereId('1579')->first()->detailprojects()->attach(collect($MONTER_ELEKTRONICZNEGO_WYPOSAŻENIA_MASZYN_I_URZĄDZEŃ)->pluck('id')->toArray());
        Category::whereId('1580')->first()->detailprojects()->attach(collect($MONTER_ELEKTRONIKI_SAMOCHODOWEJ)->pluck('id')->toArray());
        Category::whereId('1581')->first()->detailprojects()->attach(collect($MONTER_PODZESPOŁÓW_I_ZESPOŁÓW_ELEKTRONICZNYCH)->pluck('id')->toArray());
        Category::whereId('1582')->first()->detailprojects()->attach(collect($MONTER_SPRZĘTU_RADIOWEGO_I_TELEWIZYJNEGO)->pluck('id')->toArray());
        Category::whereId('1583')->first()->detailprojects()->attach(collect($MONTER_ZESTRAJACZ_URZĄDZEŃ_ELEKTRONICZNYCH)->pluck('id')->toArray());
        Category::whereId('1584')->first()->detailprojects()->attach(collect($POZOSTALI_MONTERZY_SPRZĘTU_ELEKTRONICZNEGO)->pluck('id')->toArray());
    }
}

