<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectbiologicznochemicznogeograficzna2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $POZOSTALI_INŻYNIEROWIE_CHEMICZY_I_POKREWNI = [

            ["id" => 21709, "name" => json_encode([
                "pl" => "Projektowanie procesów chemicznych w celu optymalizacji produkcji przemysłowej.",
                "en" => "Designing chemical processes to optimize industrial production."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21710, "name" => json_encode([
                "pl" => "Wdrażanie nowych technologii w procesach chemicznych.",
                "en" => "Implementing new technologies in chemical processes."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21711, "name" => json_encode([
                "pl" => "Kontrola jakości produktów chemicznych oraz ich zgodności z normami.",
                "en" => "Ensuring the quality of chemical products and their compliance with standards."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21712, "name" => json_encode([
                "pl" => "Opracowywanie dokumentacji technicznej dla procesów i urządzeń chemicznych.",
                "en" => "Preparing technical documentation for chemical processes and equipment."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21713, "name" => json_encode([
                "pl" => "Analiza wpływu procesów chemicznych na środowisko naturalne.",
                "en" => "Analyzing the environmental impact of chemical processes."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21714, "name" => json_encode([
                "pl" => "Współpraca z zespołami badawczo-rozwojowymi nad innowacjami w chemii przemysłowej.",
                "en" => "Collaborating with R&D teams on innovations in industrial chemistry."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $CHEMIK_TECHNOLOGIA_CHEMICZNA = [

            ["id" => 21715, "name" => json_encode([
                "pl" => "Tworzenie nowych technologii wytwarzania produktów chemicznych.",
                "en" => "Developing new technologies for the production of chemical products."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21716, "name" => json_encode([
                "pl" => "Optymalizacja istniejących procesów technologicznych w zakładach chemicznych.",
                "en" => "Optimizing existing technological processes in chemical plants."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21717, "name" => json_encode([
                "pl" => "Opracowywanie metod recyklingu i minimalizacji odpadów chemicznych.",
                "en" => "Developing methods for recycling and minimizing chemical waste."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21718, "name" => json_encode([
                "pl" => "Przeprowadzanie badań nad właściwościami nowych substancji chemicznych.",
                "en" => "Conducting research on the properties of new chemical substances."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21719, "name" => json_encode([
                "pl" => "Współpraca z inżynierami w zakresie projektowania urządzeń technologicznych.",
                "en" => "Collaborating with engineers in designing technological equipment."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21720, "name" => json_encode([
                "pl" => "Prowadzenie dokumentacji procesów technologicznych i analiz chemicznych.",
                "en" => "Maintaining documentation for technological processes and chemical analyses."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $AGROCHEMIK = [

            ["id" => 21721, "name" => json_encode([
                "pl" => "Badanie wpływu nawozów i środków ochrony roślin na glebę i plony.",
                "en" => "Studying the impact of fertilizers and pesticides on soil and crops."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21722, "name" => json_encode([
                "pl" => "Opracowywanie i testowanie nowych preparatów agrochemicznych.",
                "en" => "Developing and testing new agrochemical formulations."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21723, "name" => json_encode([
                "pl" => "Monitorowanie poziomu zanieczyszczenia gleby i wody w wyniku stosowania środków chemicznych.",
                "en" => "Monitoring soil and water pollution caused by chemical use."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21724, "name" => json_encode([
                "pl" => "Edukacja rolników w zakresie stosowania środków chemicznych zgodnie z normami.",
                "en" => "Educating farmers on the proper use of chemicals in compliance with standards."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21725, "name" => json_encode([
                "pl" => "Prowadzenie badań nad wpływem agrochemii na bioróżnorodność ekosystemów.",
                "en" => "Conducting research on the impact of agrochemicals on ecosystem biodiversity."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21726, "name" => json_encode([
                "pl" => "Analiza i optymalizacja stosowania nawozów w celu zwiększenia wydajności upraw.",
                "en" => "Analyzing and optimizing fertilizer use to improve crop yields."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PERFUMIARZ = [

            ["id" => 21727, "name" => json_encode([
                "pl" => "Tworzenie nowych kompozycji zapachowych dla produktów kosmetycznych i perfum.",
                "en" => "Creating new fragrance compositions for cosmetic products and perfumes."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21728, "name" => json_encode([
                "pl" => "Dobór odpowiednich składników zapachowych w oparciu o ich właściwości chemiczne.",
                "en" => "Selecting appropriate fragrance ingredients based on their chemical properties."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21729, "name" => json_encode([
                "pl" => "Testowanie trwałości i intensywności zapachów w różnych warunkach.",
                "en" => "Testing the durability and intensity of fragrances under various conditions."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21730, "name" => json_encode([
                "pl" => "Współpraca z działami marketingu w celu tworzenia produktów odpowiadających na potrzeby rynku.",
                "en" => "Collaborating with marketing teams to create products that meet market demands."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21731, "name" => json_encode([
                "pl" => "Analiza trendów w branży perfumeryjnej i adaptacja kompozycji zapachowych.",
                "en" => "Analyzing trends in the perfume industry and adapting fragrance compositions."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21732, "name" => json_encode([
                "pl" => "Prowadzenie dokumentacji dotyczącej formuł i receptur zapachowych.",
                "en" => "Maintaining documentation on fragrance formulas and recipes."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_CHEMICY = [

            ["id" => 21733, "name" => json_encode([
                "pl" => "Prowadzenie badań chemicznych w różnych dziedzinach nauki i przemysłu.",
                "en" => "Conducting chemical research in various fields of science and industry."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21734, "name" => json_encode([
                "pl" => "Opracowywanie nowych materiałów i substancji chemicznych.",
                "en" => "Developing new materials and chemical substances."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21735, "name" => json_encode([
                "pl" => "Przeprowadzanie analizy chemicznej surowców i produktów końcowych.",
                "en" => "Conducting chemical analysis of raw materials and finished products."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21736, "name" => json_encode([
                "pl" => "Wdrażanie nowych technologii chemicznych w przemyśle.",
                "en" => "Implementing new chemical technologies in industry."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21737, "name" => json_encode([
                "pl" => "Edukacja i szkolenie pracowników w zakresie bezpieczeństwa chemicznego.",
                "en" => "Educating and training employees on chemical safety."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21738, "name" => json_encode([
                "pl" => "Monitorowanie wpływu procesów chemicznych na środowisko i zdrowie.",
                "en" => "Monitoring the impact of chemical processes on the environment and health."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ZABEZPIECZEŃ_PRZECIWKOROZYJNYCH = [

            ["id" => 21739, "name" => json_encode([
                "pl" => "Opracowywanie i stosowanie metod ochrony przed korozją dla różnego rodzaju materiałów.",
                "en" => "Developing and applying corrosion protection methods for various materials."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21740, "name" => json_encode([
                "pl" => "Przeprowadzanie testów laboratoryjnych w celu oceny odporności materiałów na korozję.",
                "en" => "Conducting laboratory tests to evaluate material resistance to corrosion."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21741, "name" => json_encode([
                "pl" => "Wdrażanie procesów antykorozyjnych w instalacjach przemysłowych.",
                "en" => "Implementing anti-corrosion processes in industrial installations."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21742, "name" => json_encode([
                "pl" => "Przeprowadzanie inspekcji technicznych w celu wykrywania oznak korozji.",
                "en" => "Performing technical inspections to detect signs of corrosion."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21743, "name" => json_encode([
                "pl" => "Doradzanie w zakresie wyboru materiałów odpornych na korozję.",
                "en" => "Advising on the selection of corrosion-resistant materials."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21744, "name" => json_encode([
                "pl" => "Przygotowywanie raportów i dokumentacji technicznej dotyczącej ochrony przeciwkorozyjnej.",
                "en" => "Preparing reports and technical documentation on corrosion protection."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_TECHNICY_CHEMICZY_I_POKREWNI = [

            ["id" => 21745, "name" => json_encode([
                "pl" => "Przeprowadzanie analiz chemicznych surowców i produktów przemysłowych.",
                "en" => "Conducting chemical analyses of raw materials and industrial products."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21746, "name" => json_encode([
                "pl" => "Obsługa i konserwacja urządzeń laboratoryjnych w procesach chemicznych.",
                "en" => "Operating and maintaining laboratory equipment in chemical processes."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21747, "name" => json_encode([
                "pl" => "Przeprowadzanie badań nad nowymi technologiami w przemyśle chemicznym.",
                "en" => "Conducting research on new technologies in the chemical industry."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21748, "name" => json_encode([
                "pl" => "Kontrola jakości produktów chemicznych przed wprowadzeniem na rynek.",
                "en" => "Quality control of chemical products before market release."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21749, "name" => json_encode([
                "pl" => "Współpraca z zespołami inżynieryjnymi w optymalizacji procesów technologicznych.",
                "en" => "Collaborating with engineering teams to optimize technological processes."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21750, "name" => json_encode([
                "pl" => "Tworzenie dokumentacji technicznej dotyczącej procesów chemicznych.",
                "en" => "Creating technical documentation for chemical processes."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_DEKONTAMINACJI_SKAŻENIA_PROMIENIOTWÓRCZE = [

            ["id" => 21751, "name" => json_encode([
                "pl" => "Projektowanie i wdrażanie procedur dekontaminacji w miejscach skażonych promieniotwórczo.",
                "en" => "Designing and implementing decontamination procedures in radioactive contamination sites."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21752, "name" => json_encode([
                "pl" => "Monitorowanie poziomu promieniowania w strefach skażonych.",
                "en" => "Monitoring radiation levels in contaminated areas."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21753, "name" => json_encode([
                "pl" => "Koordynacja prac zespołów zajmujących się usuwaniem skażenia.",
                "en" => "Coordinating teams working on contamination removal."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21754, "name" => json_encode([
                "pl" => "Współpraca z instytucjami nadzorującymi bezpieczeństwo radiologiczne.",
                "en" => "Collaborating with institutions overseeing radiological safety."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21755, "name" => json_encode([
                "pl" => "Prowadzenie szkoleń z zakresu ochrony przed promieniowaniem dla pracowników.",
                "en" => "Conducting training on radiation protection for employees."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21756, "name" => json_encode([
                "pl" => "Tworzenie raportów i dokumentacji dotyczącej przeprowadzonych działań dekontaminacyjnych.",
                "en" => "Creating reports and documentation on conducted decontamination activities."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_POSTĘPOWANIA_Z_ODPADAMI_PROMIENIOTWÓRCZYMI = [

            ["id" => 21757, "name" => json_encode([
                "pl" => "Opracowywanie metod bezpiecznego przechowywania odpadów promieniotwórczych.",
                "en" => "Developing methods for safe storage of radioactive waste."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21758, "name" => json_encode([
                "pl" => "Monitorowanie i kontrolowanie procesów utylizacji odpadów promieniotwórczych.",
                "en" => "Monitoring and controlling radioactive waste disposal processes."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21759, "name" => json_encode([
                "pl" => "Tworzenie dokumentacji dotyczącej zarządzania odpadami promieniotwórczymi.",
                "en" => "Creating documentation on radioactive waste management."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21760, "name" => json_encode([
                "pl" => "Współpraca z organami regulacyjnymi w zakresie transportu i magazynowania odpadów.",
                "en" => "Collaborating with regulatory bodies on waste transportation and storage."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21761, "name" => json_encode([
                "pl" => "Przeprowadzanie audytów bezpieczeństwa w miejscach przechowywania odpadów.",
                "en" => "Conducting safety audits in waste storage facilities."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21762, "name" => json_encode([
                "pl" => "Edukacja pracowników w zakresie postępowania z odpadami promieniotwórczymi.",
                "en" => "Educating employees on handling radioactive waste."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_POSTĘPOWANIA_ZE_ŹRÓDŁAMI_PROMIENIOTWÓRCZYMI = [

            ["id" => 21763, "name" => json_encode([
                "pl" => "Obsługa i kontrola urządzeń zawierających źródła promieniotwórcze.",
                "en" => "Operating and controlling devices containing radioactive sources."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21764, "name" => json_encode([
                "pl" => "Przeprowadzanie pomiarów promieniowania w celu zapewnienia bezpieczeństwa.",
                "en" => "Conducting radiation measurements to ensure safety."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21765, "name" => json_encode([
                "pl" => "Monitorowanie warunków przechowywania i transportu źródeł promieniotwórczych.",
                "en" => "Monitoring storage and transportation conditions of radioactive sources."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21766, "name" => json_encode([
                "pl" => "Współpraca z zespołami ds. bezpieczeństwa radiologicznego.",
                "en" => "Collaborating with radiological safety teams."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21767, "name" => json_encode([
                "pl" => "Tworzenie raportów dotyczących stanu źródeł promieniotwórczych.",
                "en" => "Preparing reports on the condition of radioactive sources."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21768, "name" => json_encode([
                "pl" => "Zapewnienie zgodności działań z obowiązującymi przepisami radiologicznymi.",
                "en" => "Ensuring compliance with radiological regulations."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $HYDROMETEOROLOG = [

            ["id" => 21769, "name" => json_encode([
                "pl" => "Analizowanie procesów atmosferycznych i hydrologicznych w celu przewidywania zmian pogodowych i hydrologicznych.",
                "en" => "Analyzing atmospheric and hydrological processes to forecast weather and hydrological changes."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21770, "name" => json_encode([
                "pl" => "Monitorowanie opadów atmosferycznych oraz przepływów wody w rzekach i zbiornikach wodnych.",
                "en" => "Monitoring atmospheric precipitation and water flows in rivers and reservoirs."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21771, "name" => json_encode([
                "pl" => "Opracowywanie prognoz hydrometeorologicznych na potrzeby ochrony ludności i infrastruktury.",
                "en" => "Preparing hydrometeorological forecasts for public and infrastructure safety."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21772, "name" => json_encode([
                "pl" => "Przeprowadzanie analiz wpływu ekstremalnych zjawisk pogodowych na środowisko wodne.",
                "en" => "Conducting analyses of the impact of extreme weather events on water environments."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21773, "name" => json_encode([
                "pl" => "Współpraca z instytucjami zarządzającymi gospodarką wodną w zakresie oceny ryzyka powodziowego.",
                "en" => "Collaborating with water management institutions to assess flood risk."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21774, "name" => json_encode([
                "pl" => "Przygotowywanie raportów dotyczących warunków hydrometeorologicznych dla różnych sektorów gospodarki.",
                "en" => "Preparing reports on hydrometeorological conditions for various sectors of the economy."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $METEOROLOG = [

            ["id" => 21775, "name" => json_encode([
                "pl" => "Badanie procesów atmosferycznych i opracowywanie prognoz pogody.",
                "en" => "Studying atmospheric processes and preparing weather forecasts."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21776, "name" => json_encode([
                "pl" => "Analizowanie danych meteorologicznych zebranych z satelitów, stacji pogodowych i radarów.",
                "en" => "Analyzing meteorological data collected from satellites, weather stations, and radars."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21777, "name" => json_encode([
                "pl" => "Opracowywanie modeli atmosferycznych w celu przewidywania zmian klimatycznych i pogodowych.",
                "en" => "Developing atmospheric models to predict climate and weather changes."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21778, "name" => json_encode([
                "pl" => "Współpraca z mediami i instytucjami publicznymi w celu dostarczania prognoz pogodowych.",
                "en" => "Collaborating with media and public institutions to provide weather forecasts."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21779, "name" => json_encode([
                "pl" => "Analiza ekstremalnych zjawisk pogodowych i ich wpływu na gospodarkę oraz społeczeństwo.",
                "en" => "Analyzing extreme weather events and their impact on the economy and society."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21780, "name" => json_encode([
                "pl" => "Przygotowywanie raportów i analiz meteorologicznych dla różnych branż.",
                "en" => "Preparing meteorological reports and analyses for various industries."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SYNOPTYK = [

            ["id" => 21781, "name" => json_encode([
                "pl" => "Przygotowywanie bieżących prognoz pogody na podstawie danych meteorologicznych.",
                "en" => "Preparing current weather forecasts based on meteorological data."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21782, "name" => json_encode([
                "pl" => "Monitorowanie warunków atmosferycznych w czasie rzeczywistym.",
                "en" => "Monitoring real-time atmospheric conditions."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21783, "name" => json_encode([
                "pl" => "Opracowywanie ostrzeżeń meteorologicznych przed ekstremalnymi zjawiskami pogodowymi.",
                "en" => "Developing meteorological warnings for extreme weather events."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21784, "name" => json_encode([
                "pl" => "Współpraca z lotnictwem i innymi sektorami wymagającymi prognoz meteorologicznych.",
                "en" => "Collaborating with aviation and other sectors requiring meteorological forecasts."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21785, "name" => json_encode([
                "pl" => "Analiza danych radarowych i satelitarnych w celu opracowywania precyzyjnych prognoz.",
                "en" => "Analyzing radar and satellite data to create precise forecasts."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21786, "name" => json_encode([
                "pl" => "Zapewnianie informacji pogodowych na potrzeby mediów i służb ratunkowych.",
                "en" => "Providing weather information for media and emergency services."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KLIMATOLOG = [

            ["id" => 21787, "name" => json_encode([
                "pl" => "Badanie zmian klimatycznych na podstawie danych meteorologicznych i środowiskowych.",
                "en" => "Studying climate changes based on meteorological and environmental data."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21788, "name" => json_encode([
                "pl" => "Opracowywanie modeli klimatycznych do prognozowania przyszłych zmian klimatu.",
                "en" => "Developing climate models to forecast future climate changes."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21789, "name" => json_encode([
                "pl" => "Analiza wpływu zmian klimatu na środowisko, gospodarkę i społeczeństwo.",
                "en" => "Analyzing the impact of climate change on the environment, economy, and society."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21790, "name" => json_encode([
                "pl" => "Współpraca z naukowcami i instytucjami w zakresie badań klimatycznych.",
                "en" => "Collaborating with scientists and institutions on climate research."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21791, "name" => json_encode([
                "pl" => "Przygotowywanie raportów i analiz dotyczących długoterminowych trendów klimatycznych.",
                "en" => "Preparing reports and analyses on long-term climate trends."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21792, "name" => json_encode([
                "pl" => "Edukowanie społeczeństwa na temat skutków zmian klimatycznych.",
                "en" => "Educating the public about the effects of climate change."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_METEOROLODZY = [

            ["id" => 21793, "name" => json_encode([
                "pl" => "Prowadzenie badań w niszowych dziedzinach meteorologii, takich jak meteorologia tropikalna.",
                "en" => "Conducting research in niche areas of meteorology, such as tropical meteorology."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21794, "name" => json_encode([
                "pl" => "Tworzenie niestandardowych prognoz pogodowych dla specyficznych sektorów gospodarki.",
                "en" => "Creating custom weather forecasts for specific economic sectors."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21795, "name" => json_encode([
                "pl" => "Analiza wpływu lokalnych zjawisk atmosferycznych na gospodarkę i środowisko.",
                "en" => "Analyzing the impact of local atmospheric phenomena on the economy and environment."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21796, "name" => json_encode([
                "pl" => "Uczestniczenie w projektach badawczych dotyczących globalnych systemów pogodowych.",
                "en" => "Participating in research projects on global weather systems."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21797, "name" => json_encode([
                "pl" => "Opracowywanie nowych technologii do monitorowania i przewidywania pogody.",
                "en" => "Developing new technologies for weather monitoring and forecasting."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21798, "name" => json_encode([
                "pl" => "Współpraca z agencjami rządowymi w zakresie planowania i ochrony przed ekstremalnymi zjawiskami atmosferycznymi.",
                "en" => "Collaborating with government agencies on planning and protection against extreme atmospheric events."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GEOFIZYK = [

            ["id" => 21799, "name" => json_encode([
                "pl" => "Prowadzenie badań geofizycznych w celu analizy struktury i właściwości Ziemi.",
                "en" => "Conducting geophysical studies to analyze the Earth's structure and properties."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21800, "name" => json_encode([
                "pl" => "Wykorzystywanie technik takich jak sejsmika, magnetyka czy grawimetria w badaniach geologicznych.",
                "en" => "Using techniques such as seismics, magnetics, and gravimetry in geological studies."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21801, "name" => json_encode([
                "pl" => "Analiza danych geofizycznych w celu identyfikacji zasobów naturalnych, takich jak ropa naftowa czy gaz ziemny.",
                "en" => "Analyzing geophysical data to identify natural resources such as oil and natural gas."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21802, "name" => json_encode([
                "pl" => "Opracowywanie map geofizycznych i raportów technicznych na podstawie wyników badań terenowych.",
                "en" => "Preparing geophysical maps and technical reports based on field research results."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21803, "name" => json_encode([
                "pl" => "Przeprowadzanie badań geofizycznych na potrzeby inżynierii lądowej i morskiej.",
                "en" => "Conducting geophysical surveys for civil and marine engineering projects."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21804, "name" => json_encode([
                "pl" => "Współpraca z zespołami badawczymi w projektach związanych z eksploracją surowców mineralnych.",
                "en" => "Collaborating with research teams on projects related to mineral resource exploration."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GEOGRAF = [

            ["id" => 21805, "name" => json_encode([
                "pl" => "Analiza przestrzennych aspektów środowiska przyrodniczego i działalności człowieka.",
                "en" => "Analyzing spatial aspects of the natural environment and human activity."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21806, "name" => json_encode([
                "pl" => "Tworzenie map i modeli przestrzennych za pomocą systemów GIS.",
                "en" => "Creating maps and spatial models using GIS systems."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21807, "name" => json_encode([
                "pl" => "Badanie wpływu zmian środowiskowych na różne regiony geograficzne.",
                "en" => "Studying the impact of environmental changes on various geographic regions."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21808, "name" => json_encode([
                "pl" => "Przeprowadzanie analiz demograficznych i urbanistycznych.",
                "en" => "Conducting demographic and urban studies."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21809, "name" => json_encode([
                "pl" => "Edukowanie społeczeństwa na temat ochrony środowiska i zrównoważonego rozwoju.",
                "en" => "Educating the public about environmental protection and sustainable development."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21810, "name" => json_encode([
                "pl" => "Współpraca z planistami i władzami lokalnymi w zakresie zagospodarowania przestrzennego.",
                "en" => "Collaborating with planners and local authorities on spatial planning."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GEOLOG = [

            ["id" => 21811, "name" => json_encode([
                "pl" => "Przeprowadzanie badań geologicznych w celu analizy budowy i składu skorupy ziemskiej.",
                "en" => "Conducting geological research to analyze the structure and composition of the Earth's crust."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21812, "name" => json_encode([
                "pl" => "Opracowywanie map geologicznych i raportów dotyczących zasobów mineralnych.",
                "en" => "Creating geological maps and reports on mineral resources."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21813, "name" => json_encode([
                "pl" => "Identyfikacja obszarów o wysokim potencjale wydobycia surowców naturalnych.",
                "en" => "Identifying areas with high potential for natural resource extraction."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21814, "name" => json_encode([
                "pl" => "Przeprowadzanie badań podłoża gruntowego na potrzeby budownictwa i inżynierii.",
                "en" => "Conducting soil foundation studies for construction and engineering purposes."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21815, "name" => json_encode([
                "pl" => "Monitorowanie zagrożeń geologicznych, takich jak osuwiska czy trzęsienia ziemi.",
                "en" => "Monitoring geological hazards such as landslides and earthquakes."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21816, "name" => json_encode([
                "pl" => "Współpraca z zespołami badawczymi w zakresie ochrony środowiska geologicznego.",
                "en" => "Collaborating with research teams on geological environmental protection."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $HYDROGRAF_MORSKI = [

            ["id" => 21817, "name" => json_encode([
                "pl" => "Prowadzenie badań dna morskiego w celu opracowania map batymetrycznych.",
                "en" => "Conducting seabed studies to create bathymetric maps."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21818, "name" => json_encode([
                "pl" => "Monitorowanie zmian poziomu wód morskich i prądów morskich.",
                "en" => "Monitoring changes in sea levels and ocean currents."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21819, "name" => json_encode([
                "pl" => "Opracowywanie danych hydrograficznych na potrzeby żeglugi i rybołówstwa.",
                "en" => "Preparing hydrographic data for navigation and fishing."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21820, "name" => json_encode([
                "pl" => "Przeprowadzanie badań nad erozją wybrzeży i ochroną stref przybrzeżnych.",
                "en" => "Conducting studies on coastal erosion and protection of coastal areas."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21821, "name" => json_encode([
                "pl" => "Wykorzystywanie sonarów i innych technologii do mapowania dna morskiego.",
                "en" => "Using sonars and other technologies to map the seabed."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21822, "name" => json_encode([
                "pl" => "Współpraca z instytucjami badawczymi w projektach związanych z eksploracją mórz i oceanów.",
                "en" => "Collaborating with research institutions on projects related to sea and ocean exploration."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_GEODETA_FOTOGRAMETRIA_I_TELEDETEKCJA = [

            ["id" => 21823, "name" => json_encode([
                "pl" => "Wykorzystywanie technologii fotogrametrii i teledetekcji do tworzenia map oraz modeli 3D.",
                "en" => "Utilizing photogrammetry and remote sensing technologies to create maps and 3D models."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21824, "name" => json_encode([
                "pl" => "Przetwarzanie i analiza zdjęć lotniczych oraz danych satelitarnych.",
                "en" => "Processing and analyzing aerial images and satellite data."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21825, "name" => json_encode([
                "pl" => "Tworzenie ortofotomap i innych produktów kartograficznych na podstawie danych teledetekcyjnych.",
                "en" => "Creating orthophotos and other cartographic products based on remote sensing data."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21826, "name" => json_encode([
                "pl" => "Wdrażanie zaawansowanych technologii w analizach środowiskowych i przestrzennych.",
                "en" => "Implementing advanced technologies in environmental and spatial analyses."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21827, "name" => json_encode([
                "pl" => "Współpraca z urbanistami i architektami w planowaniu przestrzennym.",
                "en" => "Collaborating with urban planners and architects in spatial planning."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21828, "name" => json_encode([
                "pl" => "Opracowywanie raportów i analiz geodezyjnych opartych na danych teledetekcyjnych.",
                "en" => "Preparing geodetic reports and analyses based on remote sensing data."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_GEODETA_GEODEZJA_GÓRNICZA = [

            ["id" => 21829, "name" => json_encode([
                "pl" => "Przeprowadzanie pomiarów geodezyjnych w kopalniach podziemnych i odkrywkowych.",
                "en" => "Conducting geodetic measurements in underground and open-pit mines."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21830, "name" => json_encode([
                "pl" => "Monitorowanie deformacji terenu w rejonach górniczych.",
                "en" => "Monitoring land deformations in mining areas."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21831, "name" => json_encode([
                "pl" => "Opracowywanie map i modeli 3D obszarów górniczych.",
                "en" => "Creating maps and 3D models of mining areas."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21832, "name" => json_encode([
                "pl" => "Wykonywanie pomiarów na potrzeby budowy szybów i tuneli.",
                "en" => "Performing measurements for the construction of shafts and tunnels."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21833, "name" => json_encode([
                "pl" => "Współpraca z inżynierami górnictwa w planowaniu eksploatacji złoża.",
                "en" => "Collaborating with mining engineers in deposit exploitation planning."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21834, "name" => json_encode([
                "pl" => "Tworzenie dokumentacji technicznej związanej z geodezją górniczą.",
                "en" => "Preparing technical documentation related to mining geodesy."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_GEODETA_GEODEZJA_INŻYNIERYJNO_PRZEMYSŁOWA = [

            ["id" => 21835, "name" => json_encode([
                "pl" => "Prowadzenie precyzyjnych pomiarów geodezyjnych na potrzeby budowy i eksploatacji obiektów przemysłowych.",
                "en" => "Conducting precise geodetic measurements for the construction and operation of industrial facilities."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21836, "name" => json_encode([
                "pl" => "Opracowywanie planów geodezyjnych dla instalacji przemysłowych.",
                "en" => "Preparing geodetic plans for industrial installations."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21837, "name" => json_encode([
                "pl" => "Wykonywanie pomiarów kontrolnych w trakcie realizacji projektów budowlanych.",
                "en" => "Performing control measurements during construction projects."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21838, "name" => json_encode([
                "pl" => "Monitorowanie stabilności konstrukcji inżynierskich, takich jak mosty czy wieże.",
                "en" => "Monitoring the stability of engineering structures, such as bridges and towers."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21839, "name" => json_encode([
                "pl" => "Tworzenie dokumentacji technicznej dla projektów geodezyjnych w przemyśle.",
                "en" => "Preparing technical documentation for geodetic projects in industry."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21840, "name" => json_encode([
                "pl" => "Współpraca z zespołami projektowymi w zakresie geodezji przemysłowej.",
                "en" => "Collaborating with project teams on industrial geodesy."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_GEODETA_GEODEZJA_URZĄDZANIA_TERENÓW_ROLNYCH_I_LEŚNYCH = [

            ["id" => 21841, "name" => json_encode([
                "pl" => "Opracowywanie projektów zagospodarowania terenów rolnych i leśnych.",
                "en" => "Developing land-use plans for agricultural and forest areas."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21842, "name" => json_encode([
                "pl" => "Przeprowadzanie pomiarów geodezyjnych na potrzeby scalania gruntów.",
                "en" => "Conducting geodetic measurements for land consolidation purposes."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21843, "name" => json_encode([
                "pl" => "Tworzenie map ewidencyjnych dla terenów rolnych i leśnych.",
                "en" => "Creating cadastral maps for agricultural and forest lands."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21844, "name" => json_encode([
                "pl" => "Monitorowanie zmian w użytkowaniu gruntów rolnych i leśnych.",
                "en" => "Monitoring changes in the use of agricultural and forest lands."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21845, "name" => json_encode([
                "pl" => "Opracowywanie dokumentacji technicznej związanej z urządzaniem terenów.",
                "en" => "Preparing technical documentation related to land management."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21846, "name" => json_encode([
                "pl" => "Współpraca z właścicielami gruntów i instytucjami w realizacji projektów geodezyjnych.",
                "en" => "Collaborating with landowners and institutions on geodetic projects."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_GEODETA_GEODEZYJNE_POMIARY_PODSTAWOWE_I_SATELITARNE = [

            ["id" => 21847, "name" => json_encode([
                "pl" => "Wykonywanie podstawowych pomiarów geodezyjnych na potrzeby sieci geodezyjnych.",
                "en" => "Conducting basic geodetic measurements for geodetic networks."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21848, "name" => json_encode([
                "pl" => "Wykorzystywanie technologii GNSS do pomiarów satelitarnych o wysokiej precyzji.",
                "en" => "Using GNSS technology for high-precision satellite measurements."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21849, "name" => json_encode([
                "pl" => "Kalibracja i utrzymanie punktów osnowy geodezyjnej.",
                "en" => "Calibrating and maintaining geodetic reference points."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21850, "name" => json_encode([
                "pl" => "Analiza danych pomiarowych z satelitów w celu monitorowania deformacji powierzchni Ziemi.",
                "en" => "Analyzing satellite measurement data to monitor Earth's surface deformations."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21851, "name" => json_encode([
                "pl" => "Opracowywanie map i modeli przestrzennych na podstawie danych satelitarnych.",
                "en" => "Creating maps and spatial models based on satellite data."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21852, "name" => json_encode([
                "pl" => "Współpraca z instytucjami naukowymi w zakresie badań geodezyjnych i satelitarnych.",
                "en" => "Collaborating with scientific institutions on geodetic and satellite research."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_GEODETA_GEOMATYKA = [

            ["id" => 21853, "name" => json_encode([
                "pl" => "Wykorzystywanie technologii geomatycznych do przetwarzania danych przestrzennych.",
                "en" => "Utilizing geomatics technologies to process spatial data."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21854, "name" => json_encode([
                "pl" => "Tworzenie i zarządzanie bazami danych przestrzennych.",
                "en" => "Creating and managing spatial databases."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21855, "name" => json_encode([
                "pl" => "Opracowywanie map cyfrowych i modeli 3D na potrzeby różnych sektorów gospodarki.",
                "en" => "Developing digital maps and 3D models for various economic sectors."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21856, "name" => json_encode([
                "pl" => "Wykorzystywanie technologii GIS do analizy i wizualizacji danych przestrzennych.",
                "en" => "Using GIS technologies for analyzing and visualizing spatial data."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21857, "name" => json_encode([
                "pl" => "Integracja danych pochodzących z różnych źródeł, takich jak teledetekcja i GPS.",
                "en" => "Integrating data from various sources, such as remote sensing and GPS."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21858, "name" => json_encode([
                "pl" => "Współpraca z instytucjami publicznymi i prywatnymi w zakresie zarządzania przestrzenią.",
                "en" => "Collaborating with public and private institutions in spatial management."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_GEODETA_KATASTER_I_GOSPODARKA_NIERUCHOMOŚCIAMI = [

            ["id" => 21859, "name" => json_encode([
                "pl" => "Prowadzenie ewidencji gruntów i budynków oraz zarządzanie bazami katastralnymi.",
                "en" => "Maintaining land and building records and managing cadastral databases."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21860, "name" => json_encode([
                "pl" => "Przeprowadzanie pomiarów geodezyjnych na potrzeby obrotu nieruchomościami.",
                "en" => "Conducting geodetic measurements for real estate transactions."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21861, "name" => json_encode([
                "pl" => "Tworzenie map nieruchomości oraz dokumentacji geodezyjnej na potrzeby rynku nieruchomości.",
                "en" => "Creating property maps and geodetic documentation for the real estate market."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21862, "name" => json_encode([
                "pl" => "Opracowywanie analiz przestrzennych i wycen nieruchomości.",
                "en" => "Preparing spatial analyses and property valuations."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21863, "name" => json_encode([
                "pl" => "Współpraca z instytucjami publicznymi w zakresie planowania przestrzennego i zarządzania nieruchomościami.",
                "en" => "Collaborating with public institutions on spatial planning and property management."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21864, "name" => json_encode([
                "pl" => "Przygotowywanie dokumentacji prawnej i technicznej związanej z nieruchomościami.",
                "en" => "Preparing legal and technical documentation related to real estate."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KARTOGRAF = [

            ["id" => 21865, "name" => json_encode([
                "pl" => "Tworzenie map topograficznych, tematycznych i cyfrowych.",
                "en" => "Creating topographic, thematic, and digital maps."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21866, "name" => json_encode([
                "pl" => "Analiza danych przestrzennych zebranych z różnych źródeł, takich jak GPS i teledetekcja.",
                "en" => "Analyzing spatial data collected from various sources, such as GPS and remote sensing."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21867, "name" => json_encode([
                "pl" => "Tworzenie wizualizacji przestrzennych przy użyciu oprogramowania GIS.",
                "en" => "Creating spatial visualizations using GIS software."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21868, "name" => json_encode([
                "pl" => "Wdrażanie innowacyjnych technologii w procesach kartograficznych.",
                "en" => "Implementing innovative technologies in cartographic processes."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21869, "name" => json_encode([
                "pl" => "Współpraca z geodetami, urbanistami i innymi specjalistami w zakresie tworzenia map.",
                "en" => "Collaborating with surveyors, urban planners, and other specialists in map creation."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21870, "name" => json_encode([
                "pl" => "Edycja i aktualizacja istniejących map w celu odzwierciedlenia zmian w środowisku.",
                "en" => "Editing and updating existing maps to reflect environmental changes."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KARTOGRAFOWIE_I_GEODECI = [

            ["id" => 21871, "name" => json_encode([
                "pl" => "Wykonywanie pomiarów geodezyjnych i tworzenie dokumentacji mapowej.",
                "en" => "Conducting geodetic measurements and creating mapping documentation."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21872, "name" => json_encode([
                "pl" => "Opracowywanie map i modeli przestrzennych na potrzeby różnych branż.",
                "en" => "Developing maps and spatial models for various industries."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21873, "name" => json_encode([
                "pl" => "Analiza danych przestrzennych i ich wizualizacja w systemach GIS.",
                "en" => "Analyzing spatial data and visualizing it in GIS systems."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21874, "name" => json_encode([
                "pl" => "Tworzenie raportów technicznych na podstawie pomiarów geodezyjnych.",
                "en" => "Creating technical reports based on geodetic measurements."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21875, "name" => json_encode([
                "pl" => "Współpraca z zespołami projektowymi w planowaniu i realizacji inwestycji.",
                "en" => "Collaborating with project teams in planning and executing investments."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21876, "name" => json_encode([
                "pl" => "Edukowanie klientów i instytucji w zakresie zastosowania technologii geodezyjnych.",
                "en" => "Educating clients and institutions on the application of geodetic technologies."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_BIOLODZY_I_POKREWNI = [

            ["id" => 21877, "name" => json_encode([
                "pl" => "Przeprowadzanie badań nad różnorodnością biologiczną w ekosystemach.",
                "en" => "Conducting research on biological diversity in ecosystems."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21878, "name" => json_encode([
                "pl" => "Opracowywanie strategii ochrony zagrożonych gatunków roślin i zwierząt.",
                "en" => "Developing strategies for the conservation of endangered plant and animal species."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21879, "name" => json_encode([
                "pl" => "Analiza wpływu działalności człowieka na środowisko naturalne.",
                "en" => "Analyzing the impact of human activities on the natural environment."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21880, "name" => json_encode([
                "pl" => "Wykonywanie badań laboratoryjnych i terenowych w zakresie biologii.",
                "en" => "Performing laboratory and field research in biology."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21881, "name" => json_encode([
                "pl" => "Współpraca z naukowcami i instytucjami w projektach badawczych.",
                "en" => "Collaborating with scientists and institutions on research projects."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21882, "name" => json_encode([
                "pl" => "Edukacja społeczeństwa w zakresie ochrony środowiska i zrównoważonego rozwoju.",
                "en" => "Educating the public on environmental protection and sustainable development."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_TECHNICY_NAUK_BIOLOGICZNYCH = [

            ["id" => 21883, "name" => json_encode([
                "pl" => "Przeprowadzanie podstawowych badań laboratoryjnych w zakresie biologii.",
                "en" => "Conducting basic laboratory research in biology."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21884, "name" => json_encode([
                "pl" => "Obsługa i konserwacja urządzeń laboratoryjnych.",
                "en" => "Operating and maintaining laboratory equipment."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21885, "name" => json_encode([
                "pl" => "Analiza próbek biologicznych w celu wykrywania mikroorganizmów.",
                "en" => "Analyzing biological samples to detect microorganisms."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21886, "name" => json_encode([
                "pl" => "Prowadzenie dokumentacji związanej z badaniami biologicznymi.",
                "en" => "Maintaining documentation related to biological research."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21887, "name" => json_encode([
                "pl" => "Wspieranie naukowców w projektach badawczych poprzez wykonywanie zadań technicznych.",
                "en" => "Supporting scientists in research projects by performing technical tasks."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            ["id" => 21888, "name" => json_encode([
                "pl" => "Edukowanie personelu w zakresie obsługi sprzętu laboratoryjnego i procedur badawczych.",
                "en" => "Educating staff on the use of laboratory equipment and research procedures."
            ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];


        DB::table('detail_projects')->insert(array_merge(
            $POZOSTALI_INŻYNIEROWIE_CHEMICZY_I_POKREWNI,
            $CHEMIK_TECHNOLOGIA_CHEMICZNA,
            $AGROCHEMIK,
            $PERFUMIARZ,
            $POZOSTALI_CHEMICY,
            $TECHNIK_ZABEZPIECZEŃ_PRZECIWKOROZYJNYCH,
            $POZOSTALI_TECHNICY_CHEMICZY_I_POKREWNI,
            $INŻYNIER_DEKONTAMINACJI_SKAŻENIA_PROMIENIOTWÓRCZE,
            $INŻYNIER_POSTĘPOWANIA_Z_ODPADAMI_PROMIENIOTWÓRCZYMI,
            $TECHNIK_POSTĘPOWANIA_ZE_ŹRÓDŁAMI_PROMIENIOTWÓRCZYMI,
            $HYDROMETEOROLOG,
            $METEOROLOG,
            $SYNOPTYK,
            $KLIMATOLOG,
            $POZOSTALI_METEOROLODZY,
            $GEOFIZYK,
            $GEOGRAF,
            $GEOLOG,
            $HYDROGRAF_MORSKI,
            $INŻYNIER_GEODETA_FOTOGRAMETRIA_I_TELEDETEKCJA,
            $INŻYNIER_GEODETA_GEODEZJA_GÓRNICZA,
            $INŻYNIER_GEODETA_GEODEZJA_INŻYNIERYJNO_PRZEMYSŁOWA,
            $INŻYNIER_GEODETA_GEODEZJA_URZĄDZANIA_TERENÓW_ROLNYCH_I_LEŚNYCH,
            $INŻYNIER_GEODETA_GEODEZYJNE_POMIARY_PODSTAWOWE_I_SATELITARNE,
            $INŻYNIER_GEODETA_GEOMATYKA,
            $INŻYNIER_GEODETA_KATASTER_I_GOSPODARKA_NIERUCHOMOŚCIAMI,
            $KARTOGRAF,
            $POZOSTALI_KARTOGRAFOWIE_I_GEODECI,
            $POZOSTALI_BIOLODZY_I_POKREWNI,
            $POZOSTALI_TECHNICY_NAUK_BIOLOGICZNYCH,
        ));
        Category::whereId('925')->first()->detailprojects()->attach(collect($POZOSTALI_INŻYNIEROWIE_CHEMICZY_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('930')->first()->detailprojects()->attach(collect($CHEMIK_TECHNOLOGIA_CHEMICZNA)->pluck('id')->toArray());
        Category::whereId('931')->first()->detailprojects()->attach(collect($AGROCHEMIK)->pluck('id')->toArray());
        Category::whereId('932')->first()->detailprojects()->attach(collect($PERFUMIARZ)->pluck('id')->toArray());
        Category::whereId('933')->first()->detailprojects()->attach(collect($POZOSTALI_CHEMICY)->pluck('id')->toArray());
        Category::whereId('937')->first()->detailprojects()->attach(collect($TECHNIK_ZABEZPIECZEŃ_PRZECIWKOROZYJNYCH)->pluck('id')->toArray());
        Category::whereId('938')->first()->detailprojects()->attach(collect($POZOSTALI_TECHNICY_CHEMICZY_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('939')->first()->detailprojects()->attach(collect($INŻYNIER_DEKONTAMINACJI_SKAŻENIA_PROMIENIOTWÓRCZE)->pluck('id')->toArray());
        Category::whereId('940')->first()->detailprojects()->attach(collect($INŻYNIER_POSTĘPOWANIA_Z_ODPADAMI_PROMIENIOTWÓRCZYMI)->pluck('id')->toArray());
        Category::whereId('941')->first()->detailprojects()->attach(collect($TECHNIK_POSTĘPOWANIA_ZE_ŹRÓDŁAMI_PROMIENIOTWÓRCZYMI)->pluck('id')->toArray());
        Category::whereId('946')->first()->detailprojects()->attach(collect($HYDROMETEOROLOG)->pluck('id')->toArray());
        Category::whereId('947')->first()->detailprojects()->attach(collect($METEOROLOG)->pluck('id')->toArray());
        Category::whereId('948')->first()->detailprojects()->attach(collect($SYNOPTYK)->pluck('id')->toArray());
        Category::whereId('949')->first()->detailprojects()->attach(collect($KLIMATOLOG)->pluck('id')->toArray());
        Category::whereId('950')->first()->detailprojects()->attach(collect($POZOSTALI_METEOROLODZY)->pluck('id')->toArray());
        Category::whereId('952')->first()->detailprojects()->attach(collect($GEOFIZYK)->pluck('id')->toArray());
        Category::whereId('953')->first()->detailprojects()->attach(collect($GEOGRAF)->pluck('id')->toArray());
        Category::whereId('954')->first()->detailprojects()->attach(collect($GEOLOG)->pluck('id')->toArray());
        Category::whereId('955')->first()->detailprojects()->attach(collect($HYDROGRAF_MORSKI)->pluck('id')->toArray());
        Category::whereId('964')->first()->detailprojects()->attach(collect($INŻYNIER_GEODETA_FOTOGRAMETRIA_I_TELEDETEKCJA)->pluck('id')->toArray());
        Category::whereId('965')->first()->detailprojects()->attach(collect($INŻYNIER_GEODETA_GEODEZJA_GÓRNICZA)->pluck('id')->toArray());
        Category::whereId('966')->first()->detailprojects()->attach(collect($INŻYNIER_GEODETA_GEODEZJA_INŻYNIERYJNO_PRZEMYSŁOWA)->pluck('id')->toArray());
        Category::whereId('967')->first()->detailprojects()->attach(collect($INŻYNIER_GEODETA_GEODEZJA_URZĄDZANIA_TERENÓW_ROLNYCH_I_LEŚNYCH)->pluck('id')->toArray());
        Category::whereId('968')->first()->detailprojects()->attach(collect($INŻYNIER_GEODETA_GEODEZYJNE_POMIARY_PODSTAWOWE_I_SATELITARNE)->pluck('id')->toArray());
        Category::whereId('969')->first()->detailprojects()->attach(collect($INŻYNIER_GEODETA_GEOMATYKA)->pluck('id')->toArray());
        Category::whereId('970')->first()->detailprojects()->attach(collect($INŻYNIER_GEODETA_KATASTER_I_GOSPODARKA_NIERUCHOMOŚCIAMI)->pluck('id')->toArray());
        Category::whereId('971')->first()->detailprojects()->attach(collect($KARTOGRAF)->pluck('id')->toArray());
        Category::whereId('972')->first()->detailprojects()->attach(collect($POZOSTALI_KARTOGRAFOWIE_I_GEODECI)->pluck('id')->toArray());
        Category::whereId('986')->first()->detailprojects()->attach(collect($POZOSTALI_BIOLODZY_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('992')->first()->detailprojects()->attach(collect($POZOSTALI_TECHNICY_NAUK_BIOLOGICZNYCH)->pluck('id')->toArray());

    }
}

