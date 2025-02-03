<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectbiologicznochemicznogeograficznaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $INZYNIER_INZYNIERII_CHEMICZNEJ = [

            [
                "id" => 17529,
                "name" => json_encode([
                    "pl" => "Tworzenie i optymalizacja procesów produkcyjnych w zakładach przemysłowych, takich jak rafinerie, zakłady petrochemiczne i produkcji chemikaliów.",
                    "en" => "Designing and optimizing production processes in industrial facilities, such as refineries, petrochemical plants, and chemical production sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17530,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że produkcja przebiega zgodnie z założeniami, kontrola parametrów procesów chemicznych.",
                    "en" => "Ensuring production aligns with objectives and monitoring the parameters of chemical processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17531,
                "name" => json_encode([
                    "pl" => "Tworzenie innowacyjnych technologii dla przemysłu chemicznego, testowanie ich efektywności oraz wdrażanie do produkcji.",
                    "en" => "Developing innovative technologies for the chemical industry, testing their efficiency, and implementing them in production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17532,
                "name" => json_encode([
                    "pl" => "Opracowanie strategii oszczędnościowych, ocena kosztów materiałów i urządzeń oraz wdrażanie efektywnych rozwiązań.",
                    "en" => "Developing cost-saving strategies, evaluating the costs of materials and equipment, and implementing efficient solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17533,
                "name" => json_encode([
                    "pl" => "Praca z technologami, laborantami, inżynierami środowiska oraz innymi specjalistami nad projektami badawczo-rozwojowymi.",
                    "en" => "Collaborating with technologists, lab technicians, environmental engineers, and other specialists on research and development projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17534,
                "name" => json_encode([
                    "pl" => "Dbanie o bezpieczeństwo procesów, przestrzeganie przepisów BHP, nadzór nad ochroną środowiska.",
                    "en" => "Ensuring process safety, compliance with health and safety regulations, and oversight of environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INZYNIER_TECHNOLOGII_CHEMICZNEJ = [

            [
                "id" => 17535,
                "name" => json_encode([
                    "pl" => "Tworzenie i doskonalenie technologii wytwarzania substancji chemicznych, optymalizacja produkcji w celu zwiększenia wydajności i jakości.",
                    "en" => "Developing and improving chemical production technologies, optimizing production to enhance efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17536,
                "name" => json_encode([
                    "pl" => "Testowanie procesów produkcyjnych, ocena wyników oraz wprowadzanie niezbędnych zmian technologicznych.",
                    "en" => "Testing production processes, evaluating results, and implementing necessary technological changes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17537,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów produkcyjnych, sprawdzanie zgodności z normami jakościowymi i bezpieczeństwa.",
                    "en" => "Monitoring production processes and ensuring compliance with quality and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17538,
                "name" => json_encode([
                    "pl" => "Prace badawczo-rozwojowe nad nowymi produktami, ich przygotowanie do produkcji oraz nadzór nad procesem wprowadzania na rynek.",
                    "en" => "Conducting research and development on new products, preparing them for production, and overseeing the market introduction process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17539,
                "name" => json_encode([
                    "pl" => "Stosowanie standardów jakościowych, troska o minimalizację negatywnego wpływu na środowisko.",
                    "en" => "Applying quality standards and ensuring the minimization of environmental impact."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17540,
                "name" => json_encode([
                    "pl" => "Sporządzanie dokumentacji technologicznej, prowadzenie zapisów wyników testów i analiz oraz raportowanie wyników.",
                    "en" => "Preparing technological documentation, recording test and analysis results, and reporting outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LABORANT_CHEMICZNY = [

            [
                "id" => 17541,
                "name" => json_encode([
                    "pl" => "Pobieranie i przygotowanie próbek materiałów do badań laboratoryjnych, dbanie o ich odpowiednie przechowywanie.",
                    "en" => "Collecting and preparing material samples for laboratory tests, ensuring proper storage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17542,
                "name" => json_encode([
                    "pl" => "Wykonywanie testów chemicznych, takich jak chromatografia, spektrofotometria, analiza jakościowa i ilościowa.",
                    "en" => "Conducting chemical tests such as chromatography, spectrophotometry, qualitative and quantitative analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17543,
                "name" => json_encode([
                    "pl" => "Praca z urządzeniami laboratoryjnymi, takimi jak mikroskopy, pipety automatyczne, spektrofotometry, chromatografy.",
                    "en" => "Working with laboratory equipment such as microscopes, automatic pipettes, spectrophotometers, and chromatographs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17544,
                "name" => json_encode([
                    "pl" => "Analiza wyników, przygotowywanie raportów i dokumentacja wyników zgodnie z przyjętymi standardami.",
                    "en" => "Analyzing results, preparing reports, and documenting findings according to accepted standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17545,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów BHP, stosowanie odpowiednich środków ochrony osobistej i procedur dezynfekcji.",
                    "en" => "Complying with health and safety regulations, using appropriate personal protective equipment, and following disinfection procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17546,
                "name" => json_encode([
                    "pl" => "Rejestrowanie wyników badań, raportowanie analiz do przełożonych oraz archiwizacja danych.",
                    "en" => "Recording test results, reporting analyses to supervisors, and archiving data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_CHEMICZNEJ = [

            [
                "id" => 17547,
                "name" => json_encode([
                    "pl" => "Praca przy obsłudze i konserwacji maszyn i urządzeń wykorzystywanych w procesach technologicznych w przemyśle chemicznym.",
                    "en" => "Operating and maintaining machinery and equipment used in technological processes in the chemical industry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17548,
                "name" => json_encode([
                    "pl" => "Przygotowywanie surowców, dozowanie ich w odpowiednich proporcjach zgodnie z recepturami.",
                    "en" => "Preparing raw materials and dosing them in appropriate proportions according to formulas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17549,
                "name" => json_encode([
                    "pl" => "Śledzenie parametrów produkcji, kontrola temperatury, ciśnienia, wilgotności i innych wskaźników.",
                    "en" => "Monitoring production parameters, controlling temperature, pressure, humidity, and other indicators."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17550,
                "name" => json_encode([
                    "pl" => "Analiza wyprodukowanych substancji pod kątem zgodności z normami jakościowymi.",
                    "en" => "Analyzing produced substances for compliance with quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17551,
                "name" => json_encode([
                    "pl" => "Dbanie o bezpieczne warunki pracy, stosowanie odpowiednich środków ochrony indywidualnej.",
                    "en" => "Ensuring safe working conditions and using appropriate personal protective equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17552,
                "name" => json_encode([
                    "pl" => "Rejestrowanie parametrów procesu, zapis wyników kontroli jakości, dokumentowanie przebiegu produkcji.",
                    "en" => "Recording process parameters, logging quality control results, and documenting the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $CHEMIK = [

            [
                "id" => 17553,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie eksperymentów, testów oraz analiz substancji chemicznych w celu opracowania nowych związków i produktów.",
                    "en" => "Conducting experiments, tests, and analyses of chemical substances to develop new compounds and products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17554,
                "name" => json_encode([
                    "pl" => "Praca nad recepturami do wytwarzania produktów, takich jak środki farmaceutyczne, kosmetyki, materiały budowlane.",
                    "en" => "Working on formulations for manufacturing products such as pharmaceuticals, cosmetics, and building materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17555,
                "name" => json_encode([
                    "pl" => "Opracowanie wniosków na podstawie wyników, raportowanie wyników eksperymentów i badań.",
                    "en" => "Drawing conclusions based on results and reporting the findings of experiments and studies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17556,
                "name" => json_encode([
                    "pl" => "Planowanie, nadzorowanie i dokumentowanie prac nad projektami w zakresie syntez chemicznych, badań nad nowymi materiałami.",
                    "en" => "Planning, supervising, and documenting work on projects related to chemical synthesis and research on new materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17557,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesów w celu poprawy wydajności, jakości oraz bezpieczeństwa.",
                    "en" => "Monitoring processes to improve efficiency, quality, and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17558,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z zespołem, współpraca z inżynierami, laborantami oraz specjalistami ds. jakości.",
                    "en" => "Coordinating activities with the team and collaborating with engineers, lab technicians, and quality specialists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROBIERZ = [

            [
                "id" => 17559,
                "name" => json_encode([
                    "pl" => "Analiza zawartości metali szlachetnych, takich jak złoto, srebro, platyna, w wyrobach jubilerskich.",
                    "en" => "Analyzing the content of precious metals such as gold, silver, and platinum in jewelry items."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17560,
                "name" => json_encode([
                    "pl" => "Sprawdzanie próbki, nadawanie odpowiedniego oznaczenia na podstawie zawartości metalu.",
                    "en" => "Testing samples and assigning appropriate marks based on metal content."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17561,
                "name" => json_encode([
                    "pl" => "Stosowanie metod analitycznych do identyfikacji i oznaczania zawartości metali.",
                    "en" => "Using analytical methods to identify and determine metal content."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17562,
                "name" => json_encode([
                    "pl" => "Dokumentacja wyników badań, wystawianie certyfikatów jakości.",
                    "en" => "Documenting test results and issuing quality certificates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17563,
                "name" => json_encode([
                    "pl" => "Regularna kontrola i konserwacja urządzeń używanych do testowania, takich jak spektrometry czy probówki chemiczne.",
                    "en" => "Performing regular checks and maintenance on testing devices such as spectrometers and chemical test tubes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17564,
                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów i norm dla metali szlachetnych zgodnie z przepisami.",
                    "en" => "Complying with standards and regulations for precious metals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_SRODKOW_FARMACEUTYCZNYCH = [

            [
                "id" => 17565,
                "name" => json_encode([
                    "pl" => "Odmierzanie, mieszanie i przygotowywanie surowców potrzebnych do produkcji leków.",
                    "en" => "Measuring, mixing, and preparing raw materials needed for drug production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17566,
                "name" => json_encode([
                    "pl" => "Monitorowanie i testowanie produktów farmaceutycznych na różnych etapach produkcji w celu zapewnienia ich zgodności z normami.",
                    "en" => "Monitoring and testing pharmaceutical products at various stages of production to ensure compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17567,
                "name" => json_encode([
                    "pl" => "Praca z maszynami i urządzeniami używanymi do produkcji tabletek, kapsułek, maści.",
                    "en" => "Operating machines and equipment used for producing tablets, capsules, and ointments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17568,
                "name" => json_encode([
                    "pl" => "Dbanie o higienę produkcji, stosowanie środków dezynfekcji, przestrzeganie procedur sanitarnych.",
                    "en" => "Ensuring production hygiene, using disinfectants, and adhering to sanitary procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17569,
                "name" => json_encode([
                    "pl" => "Rejestrowanie wyników kontroli jakości, dokumentacja użytych surowców i przebiegu produkcji.",
                    "en" => "Recording quality control results, documenting used raw materials, and production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17570,
                "name" => json_encode([
                    "pl" => "Konsultacje z laboratorium kontroli jakości oraz zespołem technologicznym w sprawach dotyczących parametrów produkcyjnych.",
                    "en" => "Consulting with the quality control lab and the technology team regarding production parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_SRODKOW_KOSMETYCZNYCH = [

            [
                "id" => 17571,
                "name" => json_encode([
                    "pl" => "Odmierzanie i mieszanie składników kosmetycznych według receptur w celu wytworzenia kosmetyków.",
                    "en" => "Measuring and mixing cosmetic ingredients according to formulas to produce cosmetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17572,
                "name" => json_encode([
                    "pl" => "Testowanie produktów na różnych etapach produkcji pod kątem stabilności, zgodności z normami.",
                    "en" => "Testing products at various production stages for stability and compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17573,
                "name" => json_encode([
                    "pl" => "Praca przy urządzeniach stosowanych do produkcji kosmetyków, takich jak mieszalniki, homogenizatory, maszyny pakujące.",
                    "en" => "Operating equipment used in cosmetics production, such as mixers, homogenizers, and packaging machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17574,
                "name" => json_encode([
                    "pl" => "Dbanie o czystość miejsca pracy, stosowanie zasad bezpieczeństwa oraz norm sanitarnych.",
                    "en" => "Maintaining workplace cleanliness, adhering to safety principles, and following sanitary standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17575,
                "name" => json_encode([
                    "pl" => "Sporządzanie zapisów dotyczących parametrów procesu produkcyjnego, prowadzenie rejestru użytych składników.",
                    "en" => "Recording production process parameters and maintaining a registry of used ingredients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17576,
                "name" => json_encode([
                    "pl" => "Przekazywanie próbek do laboratorium, konsultacje w sprawach dotyczących parametrów kosmetycznych.",
                    "en" => "Submitting samples to the laboratory and consulting on cosmetic parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_GEOFIZYK = [

            [
                "id" => 17577,
                "name" => json_encode([
                    "pl" => "Prowadzenie badań terenowych oraz pomiarów, takich jak magnetometria, sejsmologia, grawimetria.",
                    "en" => "Conducting field studies and measurements such as magnetometry, seismology, and gravimetry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17578,
                "name" => json_encode([
                    "pl" => "Praca z urządzeniami pomiarowymi, takimi jak sejsmografy, grawimetry, geofony, analizatory.",
                    "en" => "Operating measurement devices such as seismographs, gravimeters, geophones, and analyzers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17579,
                "name" => json_encode([
                    "pl" => "Interpretacja wyników pomiarów, tworzenie map, profili geofizycznych i analiz dotyczących struktury podłoża.",
                    "en" => "Interpreting measurement results, creating maps, geophysical profiles, and analyses of subsurface structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17580,
                "name" => json_encode([
                    "pl" => "Sporządzanie dokumentacji i raportów dotyczących wyników badań i analiz.",
                    "en" => "Preparing documentation and reports on research results and analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17581,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z geologami oraz zespołami technicznymi na temat badań, interpretacji wyników.",
                    "en" => "Coordinating activities with geologists and technical teams regarding research and result interpretation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17582,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa w terenie, stosowanie środków ochrony osobistej.",
                    "en" => "Following safety rules in the field and using personal protective equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_GEOLOG = [

            [
                "id" => 17583,
                "name" => json_encode([
                    "pl" => "Praca w terenie, pobieranie próbek gleby, skał i innych materiałów do badań.",
                    "en" => "Fieldwork involving the collection of soil, rock, and other materials for analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17584,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów laboratoryjnych w celu analizy składu chemicznego i fizycznego skał oraz gleby.",
                    "en" => "Conducting laboratory tests to analyze the chemical and physical composition of rocks and soil."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17585,
                "name" => json_encode([
                    "pl" => "Sporządzanie map geologicznych, profili oraz raportów dotyczących struktury geologicznej danego terenu.",
                    "en" => "Preparing geological maps, profiles, and reports on the geological structure of a specific area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17586,
                "name" => json_encode([
                    "pl" => "Udział w realizacji odwiertów, analiza materiałów wiertniczych, dokumentacja postępu prac.",
                    "en" => "Participating in drilling projects, analyzing drill materials, and documenting work progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17587,
                "name" => json_encode([
                    "pl" => "Praca zespołowa przy projektach budowlanych, górniczych, energetycznych, gdzie geologia terenu ma kluczowe znaczenie.",
                    "en" => "Collaborating on construction, mining, and energy projects where site geology is crucial."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17588,
                "name" => json_encode([
                    "pl" => "Stosowanie zasad bezpieczeństwa, praca w zgodzie z wytycznymi i normami BHP.",
                    "en" => "Adhering to safety standards and working in compliance with health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $METEOROLODZY = [

            [
                "id" => 17589,
                "name" => json_encode([
                    "pl" => "Opracowywanie prognoz pogody na podstawie danych zebranych z różnych źródeł, takich jak satelity, stacje meteorologiczne, radary.",
                    "en" => "Developing weather forecasts based on data collected from various sources, such as satellites, weather stations, and radars."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17590,
                "name" => json_encode([
                    "pl" => "Analiza zjawisk atmosferycznych, takich jak burze, tornada, cyklony, przy użyciu modeli komputerowych.",
                    "en" => "Analyzing atmospheric phenomena such as storms, tornadoes, and cyclones using computer models."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17591,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań długoterminowych zmian klimatycznych, sporządzanie raportów dotyczących globalnego ocieplenia, suszy, powodzi.",
                    "en" => "Conducting research on long-term climate changes, preparing reports on global warming, droughts, and floods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17592,
                "name" => json_encode([
                    "pl" => "Obsługa sprzętu, takiego jak anemometry, termometry, barometry, radary meteorologiczne, oraz monitorowanie ich sprawności.",
                    "en" => "Operating equipment such as anemometers, thermometers, barometers, and weather radars, and monitoring their functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17593,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów pogodowych, komunikatów ostrzegawczych, prognoz dla służb publicznych i instytucji.",
                    "en" => "Preparing weather reports, warning communications, and forecasts for public services and institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17594,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o nadchodzących warunkach pogodowych poprzez media, edukacja w zakresie zmian klimatu i ich wpływu na środowisko.",
                    "en" => "Communicating upcoming weather conditions through media and educating about climate changes and their impact on the environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISCI_NAUK_O_ZIEMI = [

            [
                "id" => 17595,
                "name" => json_encode([
                    "pl" => "Prowadzenie badań w terenie oraz analiz laboratoryjnych dotyczących struktury Ziemi, procesów geologicznych, zasobów wodnych.",
                    "en" => "Conducting field studies and laboratory analyses related to Earth's structure, geological processes, and water resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17596,
                "name" => json_encode([
                    "pl" => "Interpretacja wyników pomiarów sejsmicznych, magnetycznych, grawimetrycznych, hydrologicznych oraz innych danych naukowych.",
                    "en" => "Interpreting seismic, magnetic, gravimetric, hydrological, and other scientific data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17597,
                "name" => json_encode([
                    "pl" => "Tworzenie modeli komputerowych, map geologicznych i hydrologicznych, analiza danych w celu lepszego zrozumienia struktury Ziemi.",
                    "en" => "Creating computer models, geological and hydrological maps, and analyzing data to better understand Earth's structure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17598,
                "name" => json_encode([
                    "pl" => "Analiza zagrożeń naturalnych, takich jak trzęsienia ziemi, erozja, powodzie, zmiany klimatu, oraz ich wpływu na środowisko.",
                    "en" => "Analyzing natural hazards such as earthquakes, erosion, floods, and climate change, and their environmental impact."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17599,
                "name" => json_encode([
                    "pl" => "Konsultacje z władzami i firmami na temat zarządzania zasobami naturalnymi i minimalizacji wpływu przemysłu na środowisko.",
                    "en" => "Consulting with authorities and companies on natural resource management and minimizing industrial impact on the environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17600,
                "name" => json_encode([
                    "pl" => "Przygotowywanie publikacji naukowych, raportów z badań oraz prezentowanie wyników na konferencjach.",
                    "en" => "Preparing scientific publications, research reports, and presenting findings at conferences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_HYDROLOG = [

            [
                "id" => 17601,
                "name" => json_encode([
                    "pl" => "Pomiar poziomu wód gruntowych, strumieni, rzek i zbiorników wodnych, prowadzenie monitoringu hydrologicznego.",
                    "en" => "Measuring groundwater levels, streams, rivers, and reservoirs, conducting hydrological monitoring."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17602,
                "name" => json_encode([
                    "pl" => "Pobieranie próbek wód powierzchniowych i podziemnych, analiza chemiczna i biologiczna w celu oceny jakości.",
                    "en" => "Collecting surface and groundwater samples, conducting chemical and biological analysis to assess quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17603,
                "name" => json_encode([
                    "pl" => "Wykonywanie map pokazujących rozkład zasobów wodnych, przepływ rzek i obszary zagrożone powodziami.",
                    "en" => "Creating maps showing the distribution of water resources, river flows, and flood-prone areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17604,
                "name" => json_encode([
                    "pl" => "Asystowanie w pracach terenowych, zbieranie danych oraz przekazywanie wyników do dalszej analizy przez specjalistów.",
                    "en" => "Assisting in fieldwork, collecting data, and forwarding results for further analysis by specialists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17605,
                "name" => json_encode([
                    "pl" => "Praca w terenie z zachowaniem zasad bezpieczeństwa, stosowanie odpowiednich środków ochrony osobistej.",
                    "en" => "Fieldwork following safety principles and using appropriate personal protective equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17606,
                "name" => json_encode([
                    "pl" => "Rejestrowanie wyników pomiarów, sporządzanie raportów z badań hydrologicznych oraz archiwizacja wyników.",
                    "en" => "Recording measurement results, preparing hydrological study reports, and archiving findings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_METEOROLOG = [

            [
                "id" => 17607,
                "name" => json_encode([
                    "pl" => "Zbieranie danych o temperaturze, ciśnieniu atmosferycznym, wilgotności, kierunku i prędkości wiatru.",
                    "en" => "Collecting data on temperature, atmospheric pressure, humidity, wind direction, and speed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17608,
                "name" => json_encode([
                    "pl" => "Monitorowanie pracy sprzętu, kalibracja oraz dbanie o sprawność techniczną urządzeń pomiarowych.",
                    "en" => "Monitoring equipment performance, calibration, and maintaining the technical functionality of measuring devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17609,
                "name" => json_encode([
                    "pl" => "Rejestrowanie wyników pomiarów, sporządzanie dziennych raportów meteorologicznych oraz przekazywanie danych do centralnych instytucji.",
                    "en" => "Recording measurement results, preparing daily meteorological reports, and forwarding data to central institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17610,
                "name" => json_encode([
                    "pl" => "Wspieranie meteorologów w analizie danych i tworzeniu prognoz krótkoterminowych i długoterminowych.",
                    "en" => "Assisting meteorologists in data analysis and developing short-term and long-term forecasts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17611,
                "name" => json_encode([
                    "pl" => "Zbieranie danych w różnych warunkach atmosferycznych, prowadzenie obserwacji zjawisk pogodowych.",
                    "en" => "Collecting data under various atmospheric conditions and observing weather phenomena."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17612,
                "name" => json_encode([
                    "pl" => "Praca zgodnie z zasadami bezpieczeństwa w warunkach terenowych oraz laboratoryjnych.",
                    "en" => "Working in compliance with safety regulations in field and laboratory conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KARTOGRAFOWIE_I_GEODECI = [

            [
                "id" => 17613,
                "name" => json_encode([
                    "pl" => "Sporządzanie map terenowych, topograficznych, geologicznych, przy użyciu tradycyjnych metod i technologii GIS.",
                    "en" => "Creating terrain, topographic, and geological maps using traditional methods and GIS technology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17614,
                "name" => json_encode([
                    "pl" => "Pomiary geodezyjne przy użyciu sprzętu takiego jak GPS, tachimetry, dalmierze, opracowywanie danych do tworzenia map.",
                    "en" => "Conducting geodetic measurements using equipment such as GPS, total stations, rangefinders, and processing data for map creation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17615,
                "name" => json_encode([
                    "pl" => "Wykonywanie pomiarów, które pomagają ustalić granice działek, terenów przemysłowych, dróg i innych obiektów.",
                    "en" => "Performing measurements to determine the boundaries of plots, industrial areas, roads, and other structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17616,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z pomiarów terenowych, dokumentacja dla celów prawnych i budowlanych.",
                    "en" => "Preparing reports from field measurements and documentation for legal and construction purposes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17617,
                "name" => json_encode([
                    "pl" => "Koordynowanie projektów z zakresu budownictwa, planowania przestrzennego i ochrony środowiska.",
                    "en" => "Coordinating projects in construction, spatial planning, and environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17618,
                "name" => json_encode([
                    "pl" => "Przetwarzanie i zarządzanie danymi przestrzennymi przy użyciu oprogramowania GIS.",
                    "en" => "Processing and managing spatial data using GIS software."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_GEODETA = [

            [
                "id" => 17619,
                "name" => json_encode([
                    "pl" => "Zbieranie danych terenowych przy użyciu GPS, tachimetrów, niwelatorów oraz opracowywanie wyników pomiarów.",
                    "en" => "Collecting field data using GPS, total stations, levels, and processing measurement results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17620,
                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji graficznej na podstawie pomiarów, w tym map topograficznych i planów sytuacyjnych.",
                    "en" => "Creating graphic documentation based on measurements, including topographic maps and situational plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17621,
                "name" => json_encode([
                    "pl" => "Współpraca z geodetami przy wyznaczaniu granic działek, dróg, budynków i innych obiektów infrastrukturalnych.",
                    "en" => "Collaborating with surveyors to delineate boundaries of plots, roads, buildings, and other infrastructure objects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17622,
                "name" => json_encode([
                    "pl" => "Sporządzanie protokołów i raportów pomiarowych dla celów prawnych i budowlanych.",
                    "en" => "Preparing measurement protocols and reports for legal and construction purposes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17623,
                "name" => json_encode([
                    "pl" => "Dbanie o bezpieczeństwo podczas pracy w terenie, stosowanie odpowiedniego sprzętu ochronnego.",
                    "en" => "Ensuring safety during fieldwork, using appropriate protective equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17624,
                "name" => json_encode([
                    "pl" => "Praca zespołowa z geodetami, architektami oraz innymi specjalistami przy projektach budowlanych i inżynierskich.",
                    "en" => "Teamwork with surveyors, architects, and other specialists on construction and engineering projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RYSOWNIK_GEODEZYJNY = [

            [
                "id" => 17625,
                "name" => json_encode([
                    "pl" => "Sporządzanie szkiców i planów na podstawie danych pomiarowych dostarczonych przez geodetów.",
                    "en" => "Preparing sketches and plans based on measurement data provided by surveyors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17626,
                "name" => json_encode([
                    "pl" => "Przekładanie wyników pomiarów na rysunki i mapy zgodnie ze standardami i wymaganiami technicznymi.",
                    "en" => "Translating measurement results into drawings and maps according to standards and technical requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17627,
                "name" => json_encode([
                    "pl" => "Używanie narzędzi do tworzenia rysunków geodezyjnych i projektów, takich jak AutoCAD i inne programy CAD.",
                    "en" => "Using tools for creating geodetic drawings and designs, such as AutoCAD and other CAD programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17628,
                "name" => json_encode([
                    "pl" => "Wprowadzanie zmian w istniejących planach, dostosowywanie rysunków do nowych pomiarów.",
                    "en" => "Making changes to existing plans and adjusting drawings to new measurements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17629,
                "name" => json_encode([
                    "pl" => "Wykonywanie wizualizacji graficznych obiektów i terenów w celu dokładniejszego przedstawienia danych.",
                    "en" => "Creating graphic visualizations of objects and areas for a more accurate data representation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17630,
                "name" => json_encode([
                    "pl" => "Przechowywanie i zarządzanie dokumentacją geodezyjną, zabezpieczanie danych i rysunków.",
                    "en" => "Storing and managing geodetic documentation, securing data and drawings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RYSOWNIK_KARTOGRAFICZNY = [

            [
                "id" => 17631,
                "name" => json_encode([
                    "pl" => "Przekształcanie danych terenowych w mapy topograficzne, turystyczne, geologiczne, administracyjne.",
                    "en" => "Transforming field data into topographic, tourist, geological, and administrative maps."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17632,
                "name" => json_encode([
                    "pl" => "Używanie oprogramowania GIS i CAD do przetwarzania danych geograficznych i tworzenia dokładnych map.",
                    "en" => "Using GIS and CAD software to process geographical data and create accurate maps."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17633,
                "name" => json_encode([
                    "pl" => "Wprowadzanie zmian do istniejących map na podstawie nowych pomiarów i analiz geograficznych.",
                    "en" => "Updating existing maps based on new measurements and geographical analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17634,
                "name" => json_encode([
                    "pl" => "Przygotowywanie wizualizacji kartograficznych w postaci map tematycznych, infografik, ilustracji.",
                    "en" => "Creating cartographic visualizations in the form of thematic maps, infographics, and illustrations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17635,
                "name" => json_encode([
                    "pl" => "Praca zespołowa w projektach kartograficznych, dostosowanie map do wymagań projektów.",
                    "en" => "Collaborating on cartographic projects and adapting maps to project requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17636,
                "name" => json_encode([
                    "pl" => "Przechowywanie map i dokumentacji kartograficznej, zarządzanie bazami danych przestrzennych.",
                    "en" => "Storing maps and cartographic documentation, managing spatial data databases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LABORANT_BIOCHEMICZNY = [

            [
                "id" => 17637,
                "name" => json_encode([
                    "pl" => "Analiza próbek biologicznych, takich jak krew, mocz, tkanki, przy użyciu technik chemicznych i biochemicznych.",
                    "en" => "Analyzing biological samples such as blood, urine, tissues using chemical and biochemical techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17638,
                "name" => json_encode([
                    "pl" => "Obsługa sprzętu, takiego jak spektrofotometry, chromatografy, analizatory biochemiczne, mikroskopy.",
                    "en" => "Operating equipment such as spectrophotometers, chromatographs, biochemical analyzers, and microscopes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17639,
                "name" => json_encode([
                    "pl" => "Tworzenie roztworów, przygotowywanie próbek do badań, dbanie o ich odpowiednie przechowywanie.",
                    "en" => "Preparing solutions, samples for tests, and ensuring their proper storage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17640,
                "name" => json_encode([
                    "pl" => "Sporządzanie dokumentacji wyników badań, prowadzenie raportów z przeprowadzonych analiz.",
                    "en" => "Documenting test results and maintaining reports of conducted analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17641,
                "name" => json_encode([
                    "pl" => "Dbanie o higienę pracy, stosowanie środków ochrony osobistej oraz przepisów BHP.",
                    "en" => "Maintaining workplace hygiene, using personal protective equipment, and adhering to safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17642,
                "name" => json_encode([
                    "pl" => "Asystowanie w projektach badawczych, współpraca w analizie wyników i opracowywaniu wniosków.",
                    "en" => "Assisting in research projects, collaborating on result analysis, and formulating conclusions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ANALITYK = [

            [
                "id" => 17643,
                "name" => json_encode([
                    "pl" => "Wykonywanie analiz chemicznych, mikrobiologicznych i fizycznych próbek materiałów, żywności, leków, kosmetyków.",
                    "en" => "Performing chemical, microbiological, and physical analyses of material, food, drug, and cosmetic samples."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17644,
                "name" => json_encode([
                    "pl" => "Pobieranie i przygotowywanie próbek do badań zgodnie z określonymi procedurami laboratoryjnymi.",
                    "en" => "Collecting and preparing samples for analysis in accordance with established laboratory procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17645,
                "name" => json_encode([
                    "pl" => "Praca z mikroskopami, spektrofotometrami, analizatorami oraz dbanie o ich kalibrację.",
                    "en" => "Working with microscopes, spectrophotometers, analyzers, and ensuring their calibration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17646,
                "name" => json_encode([
                    "pl" => "Prowadzenie zapisów dotyczących przeprowadzonych testów i wyników, sporządzanie raportów analitycznych.",
                    "en" => "Recording details of conducted tests and results, and preparing analytical reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17647,
                "name" => json_encode([
                    "pl" => "Dbanie o bezpieczeństwo w laboratorium, stosowanie zasad BHP oraz standardów jakości.",
                    "en" => "Ensuring safety in the laboratory, following health and safety regulations, and quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17648,
                "name" => json_encode([
                    "pl" => "Praca zespołowa z chemikami, biologami oraz laborantami przy realizacji projektów badawczych i testowych.",
                    "en" => "Collaborating with chemists, biologists, and lab technicians on research and testing projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BIOCHEMIK = [

            [
                "id" => 17649,
                "name" => json_encode([
                    "pl" => "Analiza procesów zachodzących w organizmach żywych, badanie reakcji chemicznych w komórkach i tkankach.",
                    "en" => "Analyzing processes occurring in living organisms and studying chemical reactions in cells and tissues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17650,
                "name" => json_encode([
                    "pl" => "Stosowanie metod takich jak spektrometria mas, chromatografia, analiza enzymatyczna.",
                    "en" => "Applying methods such as mass spectrometry, chromatography, and enzymatic analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17651,
                "name" => json_encode([
                    "pl" => "Opracowywanie metod wykrywania chorób, testowanie terapii i leków w oparciu o procesy biochemiczne.",
                    "en" => "Developing methods for disease detection and testing therapies and drugs based on biochemical processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17652,
                "name" => json_encode([
                    "pl" => "Analiza danych i wyników eksperymentów, formułowanie wniosków i ich dokumentowanie.",
                    "en" => "Analyzing data and experimental results, formulating conclusions, and documenting findings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17653,
                "name" => json_encode([
                    "pl" => "Sporządzanie szczegółowych raportów z badań, publikowanie wyników w czasopismach naukowych.",
                    "en" => "Preparing detailed research reports and publishing findings in scientific journals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17654,
                "name" => json_encode([
                    "pl" => "Koordynacja prac z biologami, chemikami, genetykami, lekarzami w badaniach nad procesami biologicznymi.",
                    "en" => "Coordinating with biologists, chemists, geneticists, and physicians in research on biological processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BIOFIZYK = [

            [
                "id" => 17655,
                "name" => json_encode([
                    "pl" => "Analiza struktury i funkcji biomolekuł, takich jak DNA, białka, membrany komórkowe, przy użyciu metod fizycznych.",
                    "en" => "Analyzing the structure and function of biomolecules, such as DNA, proteins, and cell membranes, using physical methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17656,
                "name" => json_encode([
                    "pl" => "Stosowanie zaawansowanych technik, takich jak spektroskopia, mikroskopia elektronowa, rezonans magnetyczny.",
                    "en" => "Using advanced techniques, such as spectroscopy, electron microscopy, and magnetic resonance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17657,
                "name" => json_encode([
                    "pl" => "Tworzenie modeli komputerowych opisujących zjawiska biologiczne, symulowanie procesów na poziomie komórkowym i molekularnym.",
                    "en" => "Developing computer models to describe biological phenomena and simulating processes at cellular and molecular levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17658,
                "name" => json_encode([
                    "pl" => "Prace nad rozwojem technik obrazowania i narzędzi diagnostycznych, które pozwalają na lepsze zrozumienie procesów biologicznych.",
                    "en" => "Working on the development of imaging techniques and diagnostic tools for better understanding of biological processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17659,
                "name" => json_encode([
                    "pl" => "Rejestrowanie wyników, analiza danych, opracowanie wyników badań w formie raportów.",
                    "en" => "Recording results, analyzing data, and preparing research findings in report form."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17660,
                "name" => json_encode([
                    "pl" => "Praca z biologami, chemikami, fizykami i inżynierami biomedycznymi nad projektami badawczo-rozwojowymi.",
                    "en" => "Collaborating with biologists, chemists, physicists, and biomedical engineers on research and development projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BIOINŻYNIER = [

            [
                "id" => 17661,
                "name" => json_encode([
                    "pl" => "Tworzenie materiałów stosowanych w medycynie, takich jak implanty, protezy, systemy do dostarczania leków.",
                    "en" => "Developing materials used in medicine, such as implants, prosthetics, and drug delivery systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17662,
                "name" => json_encode([
                    "pl" => "Testowanie biomateriałów pod kątem zgodności z organizmem człowieka oraz ich reakcji w środowisku biologicznym.",
                    "en" => "Testing biomaterials for compatibility with the human body and their reactions in a biological environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17663,
                "name" => json_encode([
                    "pl" => "Praca nad technologiami medycznymi, takimi jak sztuczne narządy, biosensory, urządzenia monitorujące.",
                    "en" => "Working on medical technologies such as artificial organs, biosensors, and monitoring devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17664,
                "name" => json_encode([
                    "pl" => "Wykorzystanie inżynierii komputerowej do tworzenia modeli procesów biologicznych, które wspierają rozwój nowych metod leczenia.",
                    "en" => "Using computer engineering to create models of biological processes that support the development of new treatments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17665,
                "name" => json_encode([
                    "pl" => "Konsultowanie projektów urządzeń medycznych i materiałów z personelem medycznym, aby zapewnić ich funkcjonalność i bezpieczeństwo.",
                    "en" => "Consulting medical device and material projects with medical staff to ensure their functionality and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17666,
                "name" => json_encode([
                    "pl" => "Tworzenie szczegółowej dokumentacji badań i testów oraz raportowanie wyników do celów naukowych i przemysłowych.",
                    "en" => "Creating detailed documentation of research and tests and reporting results for scientific and industrial purposes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BIOLOG = [

            [
                "id" => 17667,
                "name" => json_encode([
                    "pl" => "Analiza zachowań, budowy, rozwoju, funkcjonowania różnych gatunków organizmów oraz ich interakcji ze środowiskiem.",
                    "en" => "Analyzing the behavior, structure, development, and functioning of various species and their interactions with the environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17668,
                "name" => json_encode([
                    "pl" => "Pobieranie próbek, analiza struktury komórkowej, badanie czynników wpływających na różnorodność biologiczną.",
                    "en" => "Collecting samples, analyzing cellular structures, and studying factors affecting biodiversity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17669,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników badań, publikowanie artykułów naukowych, udział w konferencjach.",
                    "en" => "Documenting research findings, publishing scientific articles, and participating in conferences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17670,
                "name" => json_encode([
                    "pl" => "Badania nad ochroną środowiska, opracowywanie strategii ochrony gatunków zagrożonych i ekosystemów.",
                    "en" => "Conducting environmental protection research and developing strategies to conserve endangered species and ecosystems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17671,
                "name" => json_encode([
                    "pl" => "Praca z ośrodkami badawczymi, uniwersytetami oraz organizacjami zajmującymi się ochroną przyrody.",
                    "en" => "Collaborating with research centers, universities, and organizations involved in nature conservation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17672,
                "name" => json_encode([
                    "pl" => "Prowadzenie wykładów, warsztatów oraz kampanii edukacyjnych związanych z biologią i ochroną środowiska.",
                    "en" => "Delivering lectures, workshops, and educational campaigns related to biology and environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BIOTECHNOLOG = [

            [
                "id" => 17673,
                "name" => json_encode([
                    "pl" => "Tworzenie metod produkcji leków, żywności, kosmetyków przy użyciu biotechnologii.",
                    "en" => "Developing methods for producing drugs, food, and cosmetics using biotechnology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17674,
                "name" => json_encode([
                    "pl" => "Doskonalenie procesów fermentacji, inżynierii genetycznej, produkcji enzymów i biofarmaceutyków.",
                    "en" => "Enhancing fermentation processes, genetic engineering, and the production of enzymes and biopharmaceuticals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17675,
                "name" => json_encode([
                    "pl" => "Prowadzenie analiz jakościowych i ilościowych produktów, kontrola bezpieczeństwa i skuteczności.",
                    "en" => "Conducting qualitative and quantitative analyses of products, ensuring their safety and efficacy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17676,
                "name" => json_encode([
                    "pl" => "Tworzenie metod oczyszczania wód, gleby, powietrza przy użyciu mikroorganizmów i procesów biotechnologicznych.",
                    "en" => "Developing methods for purifying water, soil, and air using microorganisms and biotechnological processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17677,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów z wyników badań, publikacja artykułów naukowych.",
                    "en" => "Preparing research reports and publishing scientific articles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17678,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z biologami, chemikami, inżynierami w projektach dotyczących biotechnologii.",
                    "en" => "Coordinating activities with biologists, chemists, and engineers in biotechnology projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GENETYK = [

            [
                "id" => 17679,
                "name" => json_encode([
                    "pl" => "Analiza sekwencji genów, ich struktury i funkcji w celu zrozumienia dziedziczenia cech i mutacji genetycznych.",
                    "en" => "Analysis of gene sequences, their structure, and functions to understand inheritance and genetic mutations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17680,
                "name" => json_encode([
                    "pl" => "Wykonywanie testów DNA, badanie mutacji, które mogą prowadzić do chorób genetycznych.",
                    "en" => "Performing DNA tests and studying mutations that may lead to genetic disorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17681,
                "name" => json_encode([
                    "pl" => "Tworzenie modyfikowanych genetycznie organizmów do celów medycznych, rolniczych, badawczych.",
                    "en" => "Developing genetically modified organisms for medical, agricultural, and research purposes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17682,
                "name" => json_encode([
                    "pl" => "Badania nad terapią genową, opracowanie metod modyfikacji genów, aby zapobiegać i leczyć choroby.",
                    "en" => "Conducting research on gene therapy and developing methods for gene modification to prevent and treat diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17683,
                "name" => json_encode([
                    "pl" => "Rejestrowanie wyników badań genetycznych, publikowanie wyników, udział w konferencjach naukowych.",
                    "en" => "Recording genetic research results, publishing findings, and participating in scientific conferences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17684,
                "name" => json_encode([
                    "pl" => "Konsultacje dotyczące diagnostyki genetycznej, prowadzenie badań nad chorobami dziedzicznymi z lekarzami i specjalistami z zakresu biologii molekularnej.",
                    "en" => "Consulting on genetic diagnostics and conducting research on hereditary diseases with doctors and molecular biology specialists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MIKROBIOLOG = [

            [
                "id" => 17685,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań nad mikroorganizmami: Analiza struktury, funkcji i zachowania mikroorganizmów, takich jak bakterie, wirusy, grzyby.",
                    "en" => "Conducting research on microorganisms: Analyzing the structure, function, and behavior of microorganisms such as bacteria, viruses, and fungi."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17686,
                "name" => json_encode([
                    "pl" => "Testowanie skuteczności antybiotyków i środków antyseptycznych: Badanie działania leków na mikroorganizmy, opracowywanie skutecznych terapii.",
                    "en" => "Testing the efficacy of antibiotics and antiseptics: Studying the effects of drugs on microorganisms and developing effective therapies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17687,
                "name" => json_encode([
                    "pl" => "Tworzenie nowych metod diagnostycznych: Prace nad metodami wykrywania patogenów i opracowywanie technologii diagnostycznych.",
                    "en" => "Developing new diagnostic methods: Working on pathogen detection methods and developing diagnostic technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17688,
                "name" => json_encode([
                    "pl" => "Kontrola jakości w przemyśle spożywczym, farmaceutycznym i kosmetycznym: Analiza mikrobiologiczna produktów, testowanie ich bezpieczeństwa i jakości.",
                    "en" => "Quality control in the food, pharmaceutical, and cosmetic industries: Conducting microbiological analyses of products, testing their safety and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17689,
                "name" => json_encode([
                    "pl" => "Dokumentacja wyników badań i raportowanie: Tworzenie raportów, dokumentowanie wyników badań, publikowanie artykułów.",
                    "en" => "Documenting research results and reporting: Preparing reports, recording research outcomes, and publishing articles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17690,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami zdrowia publicznego: Konsultacje i badania nad epidemiologią chorób zakaźnych oraz bezpieczeństwem żywności.",
                    "en" => "Collaboration with public health institutions: Conducting consultations and research on the epidemiology of infectious diseases and food safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INZYNIER_BIOCYBERNETYKI_I_INZYNIERII_BIOMEDYCZNEJ = [

            [
                "id" => 17691,
                "name" => json_encode([
                    "pl" => "Tworzenie urządzeń biomedycznych, takich jak protezy, sztuczne narządy, systemy monitorowania zdrowia.",
                    "en" => "Developing biomedical devices such as prosthetics, artificial organs, and health monitoring systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17692,
                "name" => json_encode([
                    "pl" => "Prace nad aplikacjami służącymi do diagnostyki i monitorowania pacjentów.",
                    "en" => "Working on applications designed for patient diagnostics and monitoring."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17693,
                "name" => json_encode([
                    "pl" => "Analiza wpływu implantów i protez na organizm, testowanie ich biokompatybilności.",
                    "en" => "Analyzing the impact of implants and prosthetics on the body and testing their biocompatibility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17694,
                "name" => json_encode([
                    "pl" => "Dostosowywanie urządzeń do wymagań szpitali, pacjentów, udoskonalanie sprzętu medycznego.",
                    "en" => "Adapting devices to hospital and patient requirements, improving medical equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17695,
                "name" => json_encode([
                    "pl" => "Praca z lekarzami, pielęgniarkami i innymi specjalistami w procesie wdrażania nowych technologii.",
                    "en" => "Collaborating with doctors, nurses, and other specialists during the implementation of new technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17696,
                "name" => json_encode([
                    "pl" => "Sporządzanie szczegółowej dokumentacji technicznej urządzeń oraz raportowanie wyników badań i testów.",
                    "en" => "Preparing detailed technical documentation for devices and reporting on research and testing results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $EPIDEMIOLOG = [

            [
                "id" => 17697,
                "name" => json_encode([
                    "pl" => "Badanie wzorców i przyczyn chorób w populacjach, analizowanie ryzyka ich wystąpienia.",
                    "en" => "Studying patterns and causes of diseases in populations and analyzing their risk of occurrence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17698,
                "name" => json_encode([
                    "pl" => "Zbieranie danych z miejsc wystąpienia chorób, monitorowanie zachorowalności, prowadzenie wywiadów.",
                    "en" => "Collecting data from disease outbreaks, monitoring incidence, and conducting interviews."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17699,
                "name" => json_encode([
                    "pl" => "Opracowanie planów szczepień, kampanii edukacyjnych i innych działań profilaktycznych.",
                    "en" => "Developing vaccination plans, educational campaigns, and other preventive measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17700,
                "name" => json_encode([
                    "pl" => "Praca z danymi statystycznymi, tworzenie raportów na temat zachorowalności i skuteczności działań profilaktycznych.",
                    "en" => "Working with statistical data, preparing reports on disease incidence and the effectiveness of preventive measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17701,
                "name" => json_encode([
                    "pl" => "Przekazywanie wyników badań, rekomendacje dla rządu i instytucji publicznych.",
                    "en" => "Communicating research findings and providing recommendations to governments and public institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17702,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań z WHO i innymi organizacjami zdrowia na rzecz przeciwdziałania epidemiom.",
                    "en" => "Coordinating efforts with the WHO and other health organizations to counteract epidemics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KOORDYNATOR_BADAN_KLINICZNYCH = [

            [
                "id" => 17703,
                "name" => json_encode([
                    "pl" => "Planowanie, monitorowanie i koordynowanie badań klinicznych w placówkach badawczych.",
                    "en" => "Planning, monitoring, and coordinating clinical trials at research facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17704,
                "name" => json_encode([
                    "pl" => "Tworzenie protokołów badań, dbanie o zgodność z przepisami i wytycznymi.",
                    "en" => "Creating study protocols and ensuring compliance with regulations and guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17705,
                "name" => json_encode([
                    "pl" => "Kontrola procesu naboru uczestników, zapewnienie ich zgodności z kryteriami badania.",
                    "en" => "Managing the recruitment process and ensuring participant eligibility according to study criteria."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17706,
                "name" => json_encode([
                    "pl" => "Nadzór nad przebiegiem testów klinicznych, monitorowanie działań personelu badawczego.",
                    "en" => "Overseeing the clinical trial process and monitoring research staff activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17707,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów, dokumentacja wyników i analiz, przekazywanie wyników do sponsorów badań.",
                    "en" => "Preparing reports, documenting results and analyses, and communicating findings to study sponsors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17708,
                "name" => json_encode([
                    "pl" => "Koordynowanie komunikacji między zespołem badawczym, sponsorami i instytucjami nadzorującymi badania.",
                    "en" => "Facilitating communication between the research team, sponsors, and regulatory institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TOKSYKOLOG = [

            [
                "id" => 17709,
                "name" => json_encode([
                    "pl" => "Badanie wpływu substancji chemicznych na zdrowie ludzi, zwierząt i środowisko.",
                    "en" => "Studying the effects of chemical substances on human, animal, and environmental health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17710,
                "name" => json_encode([
                    "pl" => "Interpretacja danych dotyczących toksyczności i ocena potencjalnych zagrożeń.",
                    "en" => "Interpreting toxicity data and assessing potential risks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17711,
                "name" => json_encode([
                    "pl" => "Tworzenie procedur i leków neutralizujących toksyny oraz prowadzenie terapii zatruciowych.",
                    "en" => "Developing procedures and antidotes to neutralize toxins and conducting poisoning treatments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17712,
                "name" => json_encode([
                    "pl" => "Sporządzanie dokumentacji dla instytucji medycznych, farmaceutycznych i środowiskowych.",
                    "en" => "Preparing documentation for medical, pharmaceutical, and environmental institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17713,
                "name" => json_encode([
                    "pl" => "Przekazywanie wyników badań instytucjom nadzorującym zdrowie publiczne i ochronę środowiska.",
                    "en" => "Reporting research findings to institutions overseeing public health and environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17714,
                "name" => json_encode([
                    "pl" => "Konsultacje z firmami i instytucjami w celu ograniczenia narażenia na substancje toksyczne i minimalizacji ryzyka.",
                    "en" => "Consulting with companies and institutions to reduce exposure to toxic substances and minimize risk."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LABORANT_MIKROBIOLOGICZNY = [

            [
                "id" => 17715,
                "name" => json_encode([
                    "pl" => "Izolacja, identyfikacja i hodowla bakterii, wirusów, grzybów i innych mikroorganizmów.",
                    "en" => "Isolation, identification, and cultivation of bacteria, viruses, fungi, and other microorganisms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17716,
                "name" => json_encode([
                    "pl" => "Testowanie próbek pod kątem obecności mikroorganizmów patogennych i ich wrażliwości na antybiotyki.",
                    "en" => "Testing samples for the presence of pathogenic microorganisms and their antibiotic susceptibility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17717,
                "name" => json_encode([
                    "pl" => "Praca z mikroskopami, inkubatorami, komorami laminarnymi oraz analizatorami do badania mikroorganizmów.",
                    "en" => "Operating microscopes, incubators, laminar flow cabinets, and analyzers for microorganism testing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17718,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów i archiwizacja wyników testów mikrobiologicznych.",
                    "en" => "Preparing reports and archiving microbiological test results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17719,
                "name" => json_encode([
                    "pl" => "Stosowanie procedur aseptycznych, dezynfekcja sprzętu, kontrola jakości.",
                    "en" => "Applying aseptic techniques, disinfecting equipment, and ensuring quality control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17720,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpiecznego środowiska pracy przy pracy z mikroorganizmami patogennymi.",
                    "en" => "Ensuring a safe working environment when handling pathogenic microorganisms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LABORANT_WETERYNARYJNY = [

            [
                "id" => 17721,
                "name" => json_encode([
                    "pl" => "Analiza próbek, takich jak krew, mocz, kał, wymazy, w celu diagnozowania chorób u zwierząt.",
                    "en" => "Analyzing samples such as blood, urine, feces, and swabs to diagnose animal diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17722,
                "name" => json_encode([
                    "pl" => "Testowanie próbek pod kątem obecności pasożytów, bakterii, wirusów i innych patogenów.",
                    "en" => "Testing samples for the presence of parasites, bacteria, viruses, and other pathogens."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17723,
                "name" => json_encode([
                    "pl" => "Praca z analizatorami biochemicznymi, hematologicznymi, mikroskopami oraz innymi narzędziami diagnostycznymi.",
                    "en" => "Operating biochemistry analyzers, hematology equipment, microscopes, and other diagnostic tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17724,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów, rejestrowanie wyników i przekazywanie ich lekarzom weterynarii.",
                    "en" => "Preparing reports, recording results, and delivering findings to veterinary doctors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17725,
                "name" => json_encode([
                    "pl" => "Udział w działaniach mających na celu zapobieganie chorobom u zwierząt, takich jak testy kontrolne.",
                    "en" => "Participating in activities aimed at disease prevention in animals, such as control testing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17726,
                "name" => json_encode([
                    "pl" => "Stosowanie zasad BHP, dbanie o higienę pracy i bezpieczeństwo w kontakcie z materiałami biologicznymi.",
                    "en" => "Adhering to health and safety regulations, ensuring hygiene and safety when handling biological materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PREPARATOR_MEDYCZNY = [

            [
                "id" => 17727,
                "name" => json_encode([
                    "pl" => "Przygotowywanie próbek do badań, takich jak tkanki, komórki, organizmy, w celu analizy mikroskopowej.",
                    "en" => "Preparing samples for analysis, such as tissues, cells, and organisms, for microscopic examination."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17728,
                "name" => json_encode([
                    "pl" => "Asysta przy autopsjach, przygotowanie i zabezpieczenie próbek do dalszej analizy.",
                    "en" => "Assisting in autopsies, preparing and securing samples for further analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17729,
                "name" => json_encode([
                    "pl" => "Praca z mikrotomami, mikroskopami oraz narzędziami do obróbki próbek biologicznych.",
                    "en" => "Working with microtomes, microscopes, and tools for handling biological samples."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17730,
                "name" => json_encode([
                    "pl" => "Stosowanie odpowiednich technik konserwacji, takich jak formaldehyd, zamrażanie, przechowywanie w parafinie.",
                    "en" => "Applying proper preservation techniques, such as formaldehyde, freezing, and paraffin embedding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17731,
                "name" => json_encode([
                    "pl" => "Stosowanie środków ochrony osobistej, dezynfekcja sprzętu oraz przestrzeganie zasad BHP.",
                    "en" => "Using personal protective equipment, disinfecting tools, and adhering to health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17732,
                "name" => json_encode([
                    "pl" => "Rejestrowanie przygotowanych preparatów, tworzenie dokumentacji z badań i przekazywanie wyników do dalszej analizy.",
                    "en" => "Recording prepared samples, documenting research, and submitting findings for further analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BOTANIK = [

            [
                "id" => 17733,
                "name" => json_encode([
                    "pl" => "Analiza budowy, wzrostu, rozmnażania i funkcji różnych gatunków roślin, ich adaptacji do środowiska.",
                    "en" => "Analyzing the structure, growth, reproduction, and functions of various plant species and their adaptation to the environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17734,
                "name" => json_encode([
                    "pl" => "Pobieranie próbek roślin, badanie ich struktury, identyfikacja i klasyfikacja gatunków.",
                    "en" => "Collecting plant samples, studying their structure, and identifying and classifying species."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17735,
                "name" => json_encode([
                    "pl" => "Analiza różnorodności gatunkowej, badanie zagrożeń dla roślin i opracowywanie planów ochrony.",
                    "en" => "Analyzing species diversity, studying threats to plants, and developing conservation plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17736,
                "name" => json_encode([
                    "pl" => "Kolekcjonowanie, identyfikacja i przechowywanie okazów roślinnych w celu ich długoterminowego przechowywania i analizy.",
                    "en" => "Collecting, identifying, and preserving plant specimens for long-term storage and analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17737,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów, dokumentowanie wyników badań, publikowanie wyników w czasopismach naukowych.",
                    "en" => "Preparing reports, documenting research findings, and publishing results in scientific journals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17738,
                "name" => json_encode([
                    "pl" => "Prowadzenie warsztatów, wykładów i współpraca z instytucjami edukacyjnymi oraz parkami narodowymi.",
                    "en" => "Conducting workshops, lectures, and collaborating with educational institutions and national parks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FIZJOLOG = [

            [
                "id" => 17739,
                "name" => json_encode([
                    "pl" => "Analiza funkcji narządów, układów i procesów biologicznych, takich jak trawienie, oddychanie, regulacja temperatury.",
                    "en" => "Analyzing the functions of organs, systems, and biological processes such as digestion, respiration, and temperature regulation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17740,
                "name" => json_encode([
                    "pl" => "Badanie wpływu różnych czynników na organizm, takich jak stres, leki, zmiany środowiskowe.",
                    "en" => "Studying the effects of various factors on the body, such as stress, medications, and environmental changes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17741,
                "name" => json_encode([
                    "pl" => "Opracowywanie modeli komputerowych opisujących zjawiska fizjologiczne, takich jak krążenie krwi, aktywność nerwowa.",
                    "en" => "Developing computer models describing physiological phenomena such as blood circulation and neural activity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17742,
                "name" => json_encode([
                    "pl" => "Analiza wyników eksperymentów i testów, opracowanie wniosków na temat funkcji organizmu.",
                    "en" => "Analyzing experimental and test results, drawing conclusions about body functions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17743,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników badań, publikowanie artykułów naukowych, udział w konferencjach.",
                    "en" => "Documenting research results, publishing scientific articles, and participating in conferences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17744,
                "name" => json_encode([
                    "pl" => "Praca z lekarzami, biologami, farmaceutami w badaniach nad zdrowiem i terapiami chorób.",
                    "en" => "Collaborating with doctors, biologists, and pharmacists in research on health and disease therapies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];

        DB::table('detail_projects')->insert(array_merge(
            $INZYNIER_INZYNIERII_CHEMICZNEJ,
            $INZYNIER_TECHNOLOGII_CHEMICZNEJ,
            $LABORANT_CHEMICZNY,
            $TECHNIK_TECHNOLOGII_CHEMICZNEJ,
            $CHEMIK,
            $PROBIERZ,
            $TECHNIK_TECHNOLOGII_SRODKOW_FARMACEUTYCZNYCH,
            $TECHNIK_TECHNOLOGII_SRODKOW_KOSMETYCZNYCH,
            $TECHNIK_GEOFIZYK,
            $TECHNIK_GEOLOG,
            $METEOROLODZY,
            $SPECJALISCI_NAUK_O_ZIEMI,
            $TECHNIK_HYDROLOG,
            $TECHNIK_METEOROLOG,
            $KARTOGRAFOWIE_I_GEODECI,
            $TECHNIK_GEODETA,
            $RYSOWNIK_GEODEZYJNY,
            $RYSOWNIK_KARTOGRAFICZNY,
            $LABORANT_BIOCHEMICZNY,
            $TECHNIK_ANALITYK,
            $BIOCHEMIK,
            $BIOFIZYK,
            $BIOINŻYNIER,
            $BIOLOG,
            $BIOTECHNOLOG,
            $GENETYK,
            $MIKROBIOLOG,
            $INZYNIER_BIOCYBERNETYKI_I_INZYNIERII_BIOMEDYCZNEJ,
            $EPIDEMIOLOG,
            $KOORDYNATOR_BADAN_KLINICZNYCH,
            $TOKSYKOLOG,
            $LABORANT_MIKROBIOLOGICZNY,
            $LABORANT_WETERYNARYJNY,
            $PREPARATOR_MEDYCZNY,
            $BOTANIK,
            $FIZJOLOG
        ));
        Category::whereId('923')->first()->detailprojects()->attach(collect($INZYNIER_INZYNIERII_CHEMICZNEJ)->pluck('id')->toArray());
        Category::whereId('924')->first()->detailprojects()->attach(collect($INZYNIER_TECHNOLOGII_CHEMICZNEJ)->pluck('id')->toArray());
        Category::whereId('926')->first()->detailprojects()->attach(collect($LABORANT_CHEMICZNY)->pluck('id')->toArray());
        Category::whereId('927')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_CHEMICZNEJ)->pluck('id')->toArray());
        Category::whereId('929')->first()->detailprojects()->attach(collect($CHEMIK)->pluck('id')->toArray());
        Category::whereId('934')->first()->detailprojects()->attach(collect($PROBIERZ)->pluck('id')->toArray());
        Category::whereId('935')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_SRODKOW_FARMACEUTYCZNYCH)->pluck('id')->toArray());
        Category::whereId('936')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_SRODKOW_KOSMETYCZNYCH)->pluck('id')->toArray());
        Category::whereId('943')->first()->detailprojects()->attach(collect($TECHNIK_GEOFIZYK)->pluck('id')->toArray());
        Category::whereId('944')->first()->detailprojects()->attach(collect($TECHNIK_GEOLOG)->pluck('id')->toArray());
        Category::whereId('945')->first()->detailprojects()->attach(collect($METEOROLODZY)->pluck('id')->toArray());
        Category::whereId('951')->first()->detailprojects()->attach(collect($SPECJALISCI_NAUK_O_ZIEMI)->pluck('id')->toArray());
        Category::whereId('960')->first()->detailprojects()->attach(collect($TECHNIK_HYDROLOG)->pluck('id')->toArray());
        Category::whereId('961')->first()->detailprojects()->attach(collect($TECHNIK_METEOROLOG)->pluck('id')->toArray());
        Category::whereId('963')->first()->detailprojects()->attach(collect($KARTOGRAFOWIE_I_GEODECI)->pluck('id')->toArray());
        Category::whereId('973')->first()->detailprojects()->attach(collect($TECHNIK_GEODETA)->pluck('id')->toArray());
        Category::whereId('974')->first()->detailprojects()->attach(collect($RYSOWNIK_GEODEZYJNY)->pluck('id')->toArray());
        Category::whereId('975')->first()->detailprojects()->attach(collect($RYSOWNIK_KARTOGRAFICZNY)->pluck('id')->toArray());
        Category::whereId('977')->first()->detailprojects()->attach(collect($LABORANT_BIOCHEMICZNY)->pluck('id')->toArray());
        Category::whereId('978')->first()->detailprojects()->attach(collect($TECHNIK_ANALITYK)->pluck('id')->toArray());
        Category::whereId('979')->first()->detailprojects()->attach(collect($BIOCHEMIK)->pluck('id')->toArray());
        Category::whereId('980')->first()->detailprojects()->attach(collect($BIOFIZYK)->pluck('id')->toArray());
        Category::whereId('981')->first()->detailprojects()->attach(collect($BIOINŻYNIER)->pluck('id')->toArray());
        Category::whereId('982')->first()->detailprojects()->attach(collect($BIOLOG)->pluck('id')->toArray());
        Category::whereId('983')->first()->detailprojects()->attach(collect($BIOTECHNOLOG)->pluck('id')->toArray());
        Category::whereId('984')->first()->detailprojects()->attach(collect($GENETYK)->pluck('id')->toArray());
        Category::whereId('985')->first()->detailprojects()->attach(collect($MIKROBIOLOG)->pluck('id')->toArray());
        Category::whereId('987')->first()->detailprojects()->attach(collect($INZYNIER_BIOCYBERNETYKI_I_INZYNIERII_BIOMEDYCZNEJ)->pluck('id')->toArray());
        Category::whereId('988')->first()->detailprojects()->attach(collect($EPIDEMIOLOG)->pluck('id')->toArray());
        Category::whereId('989')->first()->detailprojects()->attach(collect($KOORDYNATOR_BADAN_KLINICZNYCH)->pluck('id')->toArray());
        Category::whereId('990')->first()->detailprojects()->attach(collect($TOKSYKOLOG)->pluck('id')->toArray());
        Category::whereId('991')->first()->detailprojects()->attach(collect($LABORANT_MIKROBIOLOGICZNY)->pluck('id')->toArray());
        Category::whereId('993')->first()->detailprojects()->attach(collect($LABORANT_WETERYNARYJNY)->pluck('id')->toArray());
        Category::whereId('994')->first()->detailprojects()->attach(collect($PREPARATOR_MEDYCZNY)->pluck('id')->toArray());
        Category::whereId('995')->first()->detailprojects()->attach(collect($BOTANIK)->pluck('id')->toArray());
        Category::whereId('996')->first()->detailprojects()->attach(collect($FIZJOLOG)->pluck('id')->toArray());
    }
}

