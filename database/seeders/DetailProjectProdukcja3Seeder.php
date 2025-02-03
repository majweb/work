<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectProdukcja3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();
        $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_TERMOSÓW = [
            [
                "id" => 26229,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji termosów, takich jak formowanie, montaż i testowanie termosów.",
                    "en" => "Operating machines for thermos production, including forming, assembly, and testing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26230,
                "name" => json_encode([
                    "pl" => "Kontrola jakości termosów, monitorowanie procesu produkcji.",
                    "en" => "Controlling the quality of thermos products, monitoring the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26231,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do produkcji termosów, zapewnienie ich wydajności.",
                    "en" => "Managing thermos production machines, ensuring their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26232,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji termosów w celu poprawy efektywności i jakości produktu.",
                    "en" => "Optimizing the thermos production process to improve efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26233,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do produkcji termosów.",
                    "en" => "Performing maintenance on thermos production machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26234,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji termosów oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting thermos production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_PRZEMYSŁU_CERAMICZNEGO = [
            [
                "id" => 26235,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn przemysłu ceramicznego, w tym formowanie, suszenie i wypalanie wyrobów ceramicznych.",
                    "en" => "Operating ceramic industry machines, including forming, drying, and firing ceramic products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26236,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów ceramicznych, monitorowanie procesów produkcyjnych.",
                    "en" => "Controlling the quality of ceramic products, monitoring production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26237,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami przemysłu ceramicznego, zapewnienie ich wydajności.",
                    "en" => "Managing ceramic industry machines, ensuring their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26238,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji w przemyśle ceramicznym, aby zwiększyć efektywność i jakość.",
                    "en" => "Optimizing production processes in the ceramic industry to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26239,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn przemysłu ceramicznego.",
                    "en" => "Performing maintenance on ceramic industry machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26240,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesów produkcji i raportowanie jakości wyrobów ceramicznych.",
                    "en" => "Documenting production processes and reporting on the quality of ceramic products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_PRZEMYSŁU_SZKLARSKIEGO = [
            [
                "id" => 26241,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn przemysłu szklarskiego, takich jak maszyny do formowania, cięcia, hartowania i obróbki szkła.",
                    "en" => "Operating glass industry machines such as machines for forming, cutting, tempering, and processing glass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26242,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów szklanych, monitorowanie procesów produkcji szkła.",
                    "en" => "Controlling the quality of glass products, monitoring glass production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26243,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami przemysłu szklarskiego, zapewniając ich sprawność operacyjną.",
                    "en" => "Managing glass industry machines, ensuring their operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26244,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji szkła w celu zwiększenia wydajności i jakości produktów.",
                    "en" => "Optimizing glass production processes to increase efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26245,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn przemysłu szklarskiego oraz drobnych napraw.",
                    "en" => "Performing maintenance and minor repairs on glass industry machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26246,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji szkła oraz raportowanie jakości wyrobów szklanych.",
                    "en" => "Documenting glass production results and reporting on the quality of glass products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRASOWACZ_CERAMIKI_ELEKTRONICZNEJ_I_ELEKTROTECHNICZNEJ = [
            [
                "id" => 26247,
                "name" => json_encode([
                    "pl" => "Obsługa pras do produkcji ceramiki elektronicznej i elektrotechnicznej, takich jak kondensatory i elementy obwodów.",
                    "en" => "Operating presses for the production of electronic and electrotechnical ceramics, such as capacitors and circuit components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26248,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu prasowania, kontrolowanie temperatury, ciśnienia i czasu cyklu prasowania.",
                    "en" => "Monitoring the pressing process, controlling temperature, pressure, and the duration of the pressing cycle."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26249,
                "name" => json_encode([
                    "pl" => "Zarządzanie prasami do produkcji ceramiki, zapewniając ich optymalną wydajność.",
                    "en" => "Managing presses for ceramic production, ensuring their optimal performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26250,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów prasowania w celu zwiększenia efektywności produkcji i jakości wyrobów.",
                    "en" => "Optimizing the pressing processes to increase production efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26251,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji pras oraz napraw maszyn wykorzystywanych w produkcji ceramiki.",
                    "en" => "Performing maintenance and repairs on presses and machines used in ceramic production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26252,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu prasowania oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the pressing process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRZYGOTOWYWACZ_MAS_CERAMICZNYCH = [
            [
                "id" => 26253,
                "name" => json_encode([
                    "pl" => "Przygotowywanie mas ceramicznych, takich jak gliny, szkliwa i inne mieszanki używane do produkcji wyrobów ceramicznych.",
                    "en" => "Preparing ceramic masses, such as clays, glazes, and other mixtures used in ceramic product manufacturing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26254,
                "name" => json_encode([
                    "pl" => "Kontrola jakości mas ceramicznych, monitorowanie parametrów ich przygotowania.",
                    "en" => "Controlling the quality of ceramic masses, monitoring the preparation parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26255,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do mieszania i przygotowywania mas ceramicznych.",
                    "en" => "Managing machines for mixing and preparing ceramic masses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26256,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów przygotowania mas ceramicznych w celu poprawy jakości i efektywności.",
                    "en" => "Optimizing the ceramic mass preparation processes to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26257,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do przygotowywania mas ceramicznych.",
                    "en" => "Performing maintenance on machines for preparing ceramic masses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26258,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu przygotowywania mas ceramicznych oraz raportowanie jakości.",
                    "en" => "Documenting ceramic mass preparation results and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SUZARNIK_CERAMIKI_I_WYROBÓW_GIPSOWYCH = [
            [
                "id" => 26259,
                "name" => json_encode([
                    "pl" => "Obsługa suszarek do ceramiki i wyrobów gipsowych, takich jak płyty gipsowe, kafle i ceramika budowlana.",
                    "en" => "Operating dryers for ceramics and gypsum products, such as gypsum boards, tiles, and building ceramics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26260,
                "name" => json_encode([
                    "pl" => "Kontrola procesu suszenia, monitorowanie temperatury, wilgotności i czasu suszenia.",
                    "en" => "Controlling the drying process, monitoring temperature, humidity, and drying time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26261,
                "name" => json_encode([
                    "pl" => "Zarządzanie urządzeniami do suszenia ceramiki i wyrobów gipsowych, zapewniając ich prawidłowe działanie.",
                    "en" => "Managing drying equipment for ceramics and gypsum products, ensuring their proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26262,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu suszenia ceramiki i wyrobów gipsowych w celu zwiększenia efektywności.",
                    "en" => "Optimizing the drying process for ceramics and gypsum products to increase efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26263,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji urządzeń suszących oraz napraw maszyn.",
                    "en" => "Performing maintenance on drying equipment and repairing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26264,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu suszenia i raportowanie jakości wyrobów.",
                    "en" => "Documenting the drying process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SZLIFIERZ_CERAMIKI = [
            [
                "id" => 26265,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do szlifowania wyrobów ceramicznych, takich jak talerze, kubki, płytki ceramiczne.",
                    "en" => "Operating machines for polishing ceramic products, such as plates, cups, and ceramic tiles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26266,
                "name" => json_encode([
                    "pl" => "Kontrola jakości szlifowanych wyrobów ceramicznych, monitorowanie parametrów pracy maszyny.",
                    "en" => "Controlling the quality of polished ceramic products, monitoring machine parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26267,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do szlifowania ceramiki, zapewniając ich sprawność operacyjną.",
                    "en" => "Managing machines for polishing ceramics, ensuring their operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26268,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu szlifowania ceramiki w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the ceramic polishing process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26269,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do szlifowania ceramiki.",
                    "en" => "Performing maintenance on ceramic polishing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26270,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu szlifowania i raportowanie jakości wyrobów ceramicznych.",
                    "en" => "Documenting the polishing process results and reporting on the quality of ceramic products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MASZYNOWY_SZLIFIERZ_POLEROWACZ_SZKŁA = [
            [
                "id" => 26271,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do szlifowania i polerowania szkła, takich jak maszyny do polerowania tafli szklanych.",
                    "en" => "Operating machines for grinding and polishing glass, such as machines for polishing glass panels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26272,
                "name" => json_encode([
                    "pl" => "Kontrola jakości szlifowanego i polerowanego szkła, monitorowanie procesu obróbki.",
                    "en" => "Controlling the quality of ground and polished glass, monitoring the processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26273,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do szlifowania i polerowania szkła, zapewniając ich wysoką wydajność.",
                    "en" => "Managing machines for grinding and polishing glass, ensuring their high efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26274,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu szlifowania i polerowania szkła w celu poprawy jakości wyrobów.",
                    "en" => "Optimizing the grinding and polishing process for glass to improve product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26275,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do szlifowania i polerowania szkła.",
                    "en" => "Performing maintenance on glass grinding and polishing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26276,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu szlifowania i polerowania oraz raportowanie jakości wyrobów szklanych.",
                    "en" => "Documenting the grinding and polishing process results and reporting on the quality of glass products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TOPIARZ_FRYTY = [
            [
                "id" => 26277,
                "name" => json_encode([
                    "pl" => "Topienie fryt, w tym obsługa urządzeń do topnienia szkła i tworzenia fryt szklanych.",
                    "en" => "Melting frits, including operating equipment for melting glass and creating glass frits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26278,
                "name" => json_encode([
                    "pl" => "Monitorowanie temperatury topnienia fryt i kontrolowanie procesu produkcji.",
                    "en" => "Monitoring the melting temperature of frits and controlling the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26279,
                "name" => json_encode([
                    "pl" => "Zarządzanie urządzeniami do topnienia fryt, zapewniając ich sprawność operacyjną.",
                    "en" => "Managing frit melting equipment, ensuring their operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26280,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu topnienia fryt w celu zwiększenia wydajności produkcji.",
                    "en" => "Optimizing the frit melting process to increase production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26281,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do topnienia fryt.",
                    "en" => "Performing maintenance on frit melting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26282,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu topnienia fryt i raportowanie jakości produkcji.",
                    "en" => "Documenting frit melting process results and reporting on production quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TOPIARZ_MAS_MINERALNYCH = [
            [
                "id" => 26283,
                "name" => json_encode([
                    "pl" => "Topienie i przetwarzanie mas mineralnych, takich jak gliny i materiały ogniotrwałe, w celu produkcji odpowiednich surowców.",
                    "en" => "Melting and processing mineral masses, such as clays and refractory materials, for the production of appropriate raw materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26284,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu topienia mas mineralnych, kontrolowanie temperatury i innych parametrów technologicznych.",
                    "en" => "Monitoring the melting process of mineral masses, controlling temperature and other technological parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26285,
                "name" => json_encode([
                    "pl" => "Zarządzanie urządzeniami do topienia mas mineralnych, zapewniając ich prawidłową pracę.",
                    "en" => "Managing equipment for melting mineral masses, ensuring proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26286,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu topienia mas mineralnych, aby zwiększyć efektywność produkcji.",
                    "en" => "Optimizing the melting process of mineral masses to increase production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26287,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do topienia mas mineralnych.",
                    "en" => "Performing maintenance on machines for melting mineral masses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26288,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu topienia mas mineralnych i raportowanie jakości surowców.",
                    "en" => "Documenting the results of the mineral mass melting process and reporting on raw material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TOPIARZ_SZKŁA = [
            [
                "id" => 26289,
                "name" => json_encode([
                    "pl" => "Topienie i formowanie szkła, kontrolowanie procesu topienia w piecach.",
                    "en" => "Melting and forming glass, controlling the melting process in furnaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26290,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem topienia szkła, monitorowanie temperatury, składu i innych parametrów.",
                    "en" => "Managing the glass melting process, monitoring temperature, composition, and other parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26291,
                "name" => json_encode([
                    "pl" => "Kontrola jakości stopionego szkła oraz monitorowanie wydajności procesu topienia.",
                    "en" => "Controlling the quality of molten glass and monitoring the efficiency of the melting process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26292,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu topienia szkła w celu poprawy efektywności energetycznej.",
                    "en" => "Optimizing the glass melting process to improve energy efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26293,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji pieców do topienia szkła i innych urządzeń do obróbki.",
                    "en" => "Performing maintenance on glass melting furnaces and other processing equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WYPALACZ_SUROWCÓW_I_WYROBÓW_OGNIOTRWAŁYCH = [
            [
                "id" => 26294,
                "name" => json_encode([
                    "pl" => "Obsługa pieców do wypalania surowców ogniotrwałych i gotowych wyrobów, takich jak cegły ogniotrwałe.",
                    "en" => "Operating furnaces for firing refractory raw materials and finished products, such as firebricks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26295,
                "name" => json_encode([
                    "pl" => "Kontrola parametrów wypalania, takich jak temperatura, czas i wilgotność w piecach.",
                    "en" => "Controlling firing parameters, such as temperature, time, and humidity in furnaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26296,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem wypalania surowców ogniotrwałych, monitorowanie efektywności pieców.",
                    "en" => "Managing the firing process of refractory materials, monitoring the efficiency of furnaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26297,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wypalania w piecach, aby uzyskać lepsze właściwości wyrobów ogniotrwałych.",
                    "en" => "Optimizing the firing process in furnaces to achieve better properties of refractory products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26298,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji pieców wypalających i kontrolowanie ich stanu technicznego.",
                    "en" => "Performing maintenance on firing furnaces and checking their technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26299,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesu wypalania i raportowanie wyników produkcji wyrobów ogniotrwałych.",
                    "en" => "Documenting the firing process and reporting the results of refractory product production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WYPALACZ_WYROBÓW_CERAMICZNYCH = [
            [
                "id" => 26300,
                "name" => json_encode([
                    "pl" => "Obsługa pieców do wypalania wyrobów ceramicznych, takich jak talerze, filiżanki i inne produkty ceramiczne.",
                    "en" => "Operating furnaces for firing ceramic products, such as plates, cups, and other ceramic items."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26301,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu wypalania, kontrolowanie temperatury, czasu i wilgotności.",
                    "en" => "Monitoring the firing process, controlling temperature, time, and humidity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26302,
                "name" => json_encode([
                    "pl" => "Zarządzanie piecami do wypalania wyrobów ceramicznych, zapewniając ich efektywność.",
                    "en" => "Managing ceramic product firing furnaces, ensuring their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26303,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wypalania ceramiki w celu zwiększenia jakości produktów.",
                    "en" => "Optimizing the ceramic firing process to improve product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26304,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji pieców wypalających oraz napraw maszyn.",
                    "en" => "Performing maintenance on firing furnaces and repairing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26305,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesu wypalania i raportowanie jakości wyrobów ceramicznych.",
                    "en" => "Documenting the firing process and reporting the quality of ceramic products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_SZKLANYCH_I_CERAMICZNYCH = [
            [
                "id" => 26306,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do produkcji wyrobów szklanych i ceramicznych, takich jak piece, formy i maszyny do cięcia.",
                    "en" => "Operating equipment for the production of glass and ceramic products, such as furnaces, molds, and cutting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26307,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkcji wyrobów szklanych i ceramicznych, monitorowanie procesów.",
                    "en" => "Controlling the quality of glass and ceramic products, monitoring production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26308,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do produkcji wyrobów szklanych i ceramicznych, zapewniając ich wydajność.",
                    "en" => "Managing machines for the production of glass and ceramic products, ensuring their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26309,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji wyrobów szklanych i ceramicznych w celu zwiększenia jakości.",
                    "en" => "Optimizing the production processes of glass and ceramic products to improve quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26310,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji urządzeń do produkcji wyrobów szklanych i ceramicznych.",
                    "en" => "Performing maintenance on equipment used for the production of glass and ceramic products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26311,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji i raportowanie jakości wyrobów szklanych i ceramicznych.",
                    "en" => "Documenting production results and reporting on the quality of glass and ceramic products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $CERAMIK_WYROBÓW_CERAMIKI_BUDOWLANEJ = [
            [
                "id" => 26312,
                "name" => json_encode([
                    "pl" => "Produkcja wyrobów ceramiki budowlanej, takich jak cegły, płytki i materiały budowlane.",
                    "en" => "Manufacturing building ceramic products such as bricks, tiles, and building materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26313,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów ceramiki budowlanej oraz monitorowanie procesu produkcji.",
                    "en" => "Controlling the quality of building ceramic products and monitoring the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26314,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem produkcji ceramiki budowlanej, w tym dobór surowców i kontrola wydajności.",
                    "en" => "Managing the production process of building ceramics, including raw material selection and efficiency control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26315,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji ceramiki budowlanej w celu poprawy jakości i redukcji kosztów.",
                    "en" => "Optimizing the production processes of building ceramics to improve quality and reduce costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26316,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn produkcyjnych wykorzystywanych w produkcji ceramiki budowlanej.",
                    "en" => "Performing maintenance on production machines used in building ceramics manufacturing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26317,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji ceramiki budowlanej oraz raportowanie o jakości wyrobów.",
                    "en" => "Documenting building ceramics production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FORMOWACZ_ŚCIERNIC = [
            [
                "id" => 26318,
                "name" => json_encode([
                    "pl" => "Formowanie ściernic z materiałów ściernych, takich jak węglik spiekany czy tlenek aluminium.",
                    "en" => "Forming abrasives such as sintered carbide or aluminum oxide into grinding wheels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26319,
                "name" => json_encode([
                    "pl" => "Kontrola jakości ściernic, monitorowanie procesu formowania i jakości materiału.",
                    "en" => "Controlling the quality of grinding wheels, monitoring the forming process and material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26320,
                "name" => json_encode([
                    "pl" => "Zarządzanie urządzeniami do formowania ściernic, zapewniając ich wydajność.",
                    "en" => "Managing equipment for forming grinding wheels, ensuring their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26321,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu formowania ściernic w celu zwiększenia jakości i efektywności produkcji.",
                    "en" => "Optimizing the grinding wheel forming process to increase quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26322,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji urządzeń do formowania ściernic oraz naprawa maszyn.",
                    "en" => "Performing maintenance on grinding wheel forming equipment and repairing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26323,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu formowania i raportowanie jakości wyrobów.",
                    "en" => "Documenting the forming process results and reporting on the quality of products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FORMOWACZ_WYROBÓW_CERAMICZNYCH = [
            [
                "id" => 26324,
                "name" => json_encode([
                    "pl" => "Formowanie wyrobów ceramicznych, takich jak talerze, filiżanki, kafle, z gliny i innych materiałów ceramicznych.",
                    "en" => "Forming ceramic products such as plates, cups, tiles, from clay and other ceramic materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26325,
                "name" => json_encode([
                    "pl" => "Kontrola jakości formowanych wyrobów ceramicznych, monitorowanie procesu produkcji.",
                    "en" => "Controlling the quality of formed ceramic products, monitoring the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26326,
                "name" => json_encode([
                    "pl" => "Zarządzanie urządzeniami do formowania ceramiki, zapewniając ich prawidłową funkcjonalność.",
                    "en" => "Managing equipment for forming ceramics, ensuring their proper functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26327,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu formowania ceramiki w celu zwiększenia wydajności i jakości wyrobów.",
                    "en" => "Optimizing the ceramic forming process to increase efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26328,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji urządzeń do formowania ceramiki, w tym drobne naprawy.",
                    "en" => "Performing maintenance on ceramic forming equipment, including minor repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26329,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu formowania wyrobów ceramicznych oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the ceramic forming process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GARNCARZ = [
            [
                "id" => 26330,
                "name" => json_encode([
                    "pl" => "Wytwarzanie wyrobów garncarskich, takich jak naczynia, wazony i talerze, za pomocą tradycyjnych metod ręcznych i maszynowych.",
                    "en" => "Creating pottery products such as bowls, vases, and plates using traditional hand and machine methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26331,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów garncarskich, monitorowanie procesu produkcji.",
                    "en" => "Controlling the quality of pottery products, monitoring the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26332,
                "name" => json_encode([
                    "pl" => "Zarządzanie urządzeniami do produkcji wyrobów garncarskich, zapewniając ich wydajność.",
                    "en" => "Managing equipment for pottery production, ensuring its efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26333,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji garncarskiej w celu zwiększenia jakości i efektywności.",
                    "en" => "Optimizing pottery production processes to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26334,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do produkcji wyrobów garncarskich.",
                    "en" => "Performing maintenance on machines for pottery production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26335,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji garncarskiej i raportowanie jakości wyrobów.",
                    "en" => "Documenting pottery production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MODELARZ_ODLEWNIK_GIPSOWYCH_FORM_ROBOCZYCH = [
            [
                "id" => 26336,
                "name" => json_encode([
                    "pl" => "Wykonywanie modeli do odlewów gipsowych, takich jak formy robocze do produkcji wyrobów.",
                    "en" => "Creating molds for gypsum casts, such as working molds for product manufacturing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26337,
                "name" => json_encode([
                    "pl" => "Kontrola jakości gipsowych form roboczych, monitorowanie procesu modelowania.",
                    "en" => "Controlling the quality of gypsum working molds, monitoring the molding process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26338,
                "name" => json_encode([
                    "pl" => "Zarządzanie urządzeniami do wytwarzania form roboczych, zapewniając ich wydajność.",
                    "en" => "Managing equipment for creating working molds, ensuring efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26339,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu modelowania form roboczych w celu poprawy jakości wyrobów gipsowych.",
                    "en" => "Optimizing the molding process for working molds to improve the quality of gypsum products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26340,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do produkcji gipsowych form roboczych.",
                    "en" => "Performing maintenance on machines for creating gypsum working molds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26341,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji form roboczych i raportowanie jakości wyrobów.",
                    "en" => "Documenting the production results of working molds and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ODLEWNIK_WYROBÓW_CERAMICZNYCH = [
            [
                "id" => 26342,
                "name" => json_encode([
                    "pl" => "Wykonywanie odlewów z materiałów ceramicznych, takich jak formowanie wyrobów ceramicznych poprzez odlew.",
                    "en" => "Casting ceramic products, such as forming items through casting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26343,
                "name" => json_encode([
                    "pl" => "Kontrola jakości odlewów ceramicznych, monitorowanie procesu produkcji.",
                    "en" => "Controlling the quality of ceramic casts, monitoring the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26344,
                "name" => json_encode([
                    "pl" => "Zarządzanie urządzeniami do produkcji odlewów ceramicznych, zapewniając ich efektywność.",
                    "en" => "Managing equipment for ceramic casting production, ensuring its efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26345,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu odlewania wyrobów ceramicznych w celu zwiększenia jakości i wydajności.",
                    "en" => "Optimizing the ceramic casting process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26346,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do odlewania wyrobów ceramicznych.",
                    "en" => "Performing maintenance on ceramic casting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26347,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu odlewania wyrobów ceramicznych i raportowanie jakości.",
                    "en" => "Documenting the results of the ceramic casting process and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SORTOWACZ_BRAKARZ_CERAMIKI = [
            [
                "id" => 26348,
                "name" => json_encode([
                    "pl" => "Sortowanie wyrobów ceramicznych według jakości, kontrolowanie ich stanu i klasyfikowanie do odpowiednich kategorii.",
                    "en" => "Sorting ceramic products according to quality, checking their condition, and classifying them into appropriate categories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26349,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów ceramicznych, identyfikowanie wad i usuwanie produktów niespełniających norm.",
                    "en" => "Controlling the quality of ceramic products, identifying defects, and removing products that do not meet standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26350,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem sortowania i klasyfikacji wyrobów ceramicznych, zapewniając ich zgodność z wymaganiami.",
                    "en" => "Managing the sorting and classification process of ceramic products, ensuring their compliance with requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26351,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu sortowania ceramiki w celu zwiększenia wydajności i jakości.",
                    "en" => "Optimizing the sorting process for ceramics to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26352,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do sortowania ceramiki.",
                    "en" => "Performing maintenance on machines for sorting ceramics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26353,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników sortowania ceramiki i raportowanie jakości produktów.",
                    "en" => "Documenting the ceramic sorting results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SZKLIWIERZ_CERAMIKI = [
            [
                "id" => 26354,
                "name" => json_encode([
                    "pl" => "Nakładanie szkliwa na wyroby ceramiczne, takie jak talerze, filiżanki, kafle.",
                    "en" => "Applying glaze to ceramic products such as plates, cups, and tiles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26355,
                "name" => json_encode([
                    "pl" => "Kontrola jakości nałożonego szkliwa, monitorowanie procesu szkliwienia.",
                    "en" => "Controlling the quality of applied glaze, monitoring the glazing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26356,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem nakładania szkliwa na ceramikę, zapewniając ich prawidłowe pokrycie.",
                    "en" => "Managing the glazing process on ceramics, ensuring proper coverage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26357,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu szkliwienia ceramiki w celu zwiększenia jakości i efektywności.",
                    "en" => "Optimizing the glazing process for ceramics to increase quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26358,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji urządzeń do nakładania szkliwa na ceramikę.",
                    "en" => "Performing maintenance on glazing equipment for ceramics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26359,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu szkliwienia ceramiki i raportowanie jakości wyrobów.",
                    "en" => "Documenting the glazing process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_CERAMICY_I_POKREWNI = [
            [
                "id" => 26360,
                "name" => json_encode([
                    "pl" => "Produkcja różnorodnych wyrobów ceramicznych, takich jak panele, rury, naczynia, z gliny i innych materiałów ceramicznych.",
                    "en" => "Manufacturing various ceramic products, such as panels, pipes, vessels, from clay and other ceramic materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26361,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów ceramicznych, monitorowanie procesu produkcji.",
                    "en" => "Controlling the quality of ceramic products, monitoring the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26362,
                "name" => json_encode([
                    "pl" => "Zarządzanie urządzeniami do produkcji wyrobów ceramicznych, zapewniając ich wydajność.",
                    "en" => "Managing equipment for the production of ceramic products, ensuring their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26363,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji ceramiki w celu poprawy jakości i efektywności.",
                    "en" => "Optimizing ceramic production processes to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26364,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn produkcyjnych wykorzystywanych w produkcji ceramiki.",
                    "en" => "Performing maintenance on production machines used in ceramic manufacturing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26365,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji ceramiki oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting ceramic production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $CECHOWACZ_SKAL_I_ZNAKÓW_NA_SZKLE_ORAZ_NA_WYROBACH_Z_METALI = [
            [
                "id" => 26366,
                "name" => json_encode([
                    "pl" => "Cechowanie skal i znaków na szkle oraz metalowych wyrobach, takich jak tabliczki, litery, symbole.",
                    "en" => "Marking scales and signs on glass and metal products, such as plates, letters, and symbols."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26367,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych cech i znaków na produktach szklanych oraz metalowych.",
                    "en" => "Controlling the quality of marks and signs on glass and metal products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26368,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem cechowania wyrobów szklanych i metalowych, zapewniając ich zgodność z wymaganiami.",
                    "en" => "Managing the marking process of glass and metal products, ensuring compliance with requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26369,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu cechowania w celu uzyskania dokładności i precyzji w oznakowaniu.",
                    "en" => "Optimizing the marking process to achieve accuracy and precision in labeling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26370,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do cechowania wyrobów szklanych i metalowych.",
                    "en" => "Performing maintenance on machines for marking glass and metal products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26371,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników cechowania oraz raportowanie o jakości wyrobów.",
                    "en" => "Documenting the marking results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FORMOWACZ_WYROBÓW_SZKLANYCH = [
            [
                "id" => 26372,
                "name" => json_encode([
                    "pl" => "Formowanie wyrobów szklanych, takich jak butelki, słoiki, szkło użytkowe, przy użyciu maszyn formujących.",
                    "en" => "Forming glass products such as bottles, jars, and utility glass using forming machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26373,
                "name" => json_encode([
                    "pl" => "Kontrola jakości formowanych wyrobów szklanych, monitorowanie procesu produkcji.",
                    "en" => "Controlling the quality of formed glass products, monitoring the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26374,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do formowania wyrobów szklanych, zapewniając ich wydajność.",
                    "en" => "Managing machines for forming glass products, ensuring their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26375,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu formowania wyrobów szklanych w celu poprawy jakości i efektywności.",
                    "en" => "Optimizing the glass forming process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26376,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do formowania wyrobów szklanych.",
                    "en" => "Performing maintenance on machines for forming glass products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26377,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu formowania wyrobów szklanych oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the glass forming process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $HUTNIK_DMUCHACZ_SZKŁA = [
            [
                "id" => 26378,
                "name" => json_encode([
                    "pl" => "Dmuchanie szkła w celu tworzenia wyrobów szklanych, takich jak butelki, szklane ozdoby, naczynia.",
                    "en" => "Blowing glass to create glass products such as bottles, glass ornaments, and containers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26379,
                "name" => json_encode([
                    "pl" => "Kontrola jakości formowanych wyrobów szklanych, monitorowanie procesu dmuchania.",
                    "en" => "Controlling the quality of formed glass products, monitoring the blowing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26380,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem dmuchania szkła, zapewniając precyzyjne formowanie i zgodność z wymaganiami technologicznymi.",
                    "en" => "Managing the glass blowing process, ensuring precise forming and compliance with technological requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26381,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu dmuchania szkła w celu zwiększenia wydajności i jakości wyrobów.",
                    "en" => "Optimizing the glass blowing process to improve efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26382,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji urządzeń do dmuchania szkła, zapewniając ich prawidłowe funkcjonowanie.",
                    "en" => "Performing maintenance on glass blowing equipment, ensuring proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26383,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu dmuchania szkła oraz raportowanie o jakości wyrobów szklanych.",
                    "en" => "Documenting the glass blowing process results and reporting on the quality of glass products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $REĘCZNY_POLEROWACZ_SZKŁA = [
            [
                "id" => 26384,
                "name" => json_encode([
                    "pl" => "Ręczne polerowanie wyrobów szklanych, takich jak butelki, słoiki, szkło użytkowe.",
                    "en" => "Hand polishing glass products such as bottles, jars, and utility glass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26385,
                "name" => json_encode([
                    "pl" => "Kontrola jakości polerowanego szkła, monitorowanie procesu polerowania.",
                    "en" => "Controlling the quality of polished glass, monitoring the polishing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26386,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami do ręcznego polerowania szkła, zapewniając ich efektywność.",
                    "en" => "Managing tools for hand polishing glass, ensuring their effectiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26387,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu polerowania ręcznego, aby uzyskać wyższą jakość i wykończenie.",
                    "en" => "Optimizing the hand polishing process to achieve higher quality and finish."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26388,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi do polerowania szkła.",
                    "en" => "Performing maintenance on tools used for polishing glass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26389,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników polerowania i raportowanie jakości wyrobów szklanych.",
                    "en" => "Documenting the polishing results and reporting the quality of glass products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SORTOWACZ_BRAKARZ_SZKŁA = [
            [
                "id" => 26390,
                "name" => json_encode([
                    "pl" => "Sortowanie wyrobów szklanych, klasyfikowanie ich według jakości, oznaczanie wadliwych produktów.",
                    "en" => "Sorting glass products, classifying them by quality, marking defective products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26391,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów szklanych, monitorowanie i eliminowanie defektów.",
                    "en" => "Controlling the quality of glass products, monitoring and eliminating defects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26392,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem sortowania szkła, zapewniając zgodność z wymaganiami jakościowymi.",
                    "en" => "Managing the glass sorting process, ensuring compliance with quality requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26393,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu sortowania szkła, aby zwiększyć efektywność i jakość.",
                    "en" => "Optimizing the glass sorting process to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26394,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do sortowania szkła.",
                    "en" => "Performing maintenance on glass sorting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26395,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników sortowania i raportowanie jakości wyrobów szklanych.",
                    "en" => "Documenting sorting results and reporting the quality of glass products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SZLIFIERZ_POLEROWACZ_SZKŁA_OPTYCZNEGO = [
            [
                "id" => 26396,
                "name" => json_encode([
                    "pl" => "Szlifowanie i polerowanie szkła optycznego, takiego jak soczewki i elementy optyczne.",
                    "en" => "Grinding and polishing optical glass, such as lenses and optical components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26397,
                "name" => json_encode([
                    "pl" => "Kontrola jakości szlifowanego i polerowanego szkła optycznego.",
                    "en" => "Controlling the quality of ground and polished optical glass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26398,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami i maszynami do szlifowania i polerowania szkła optycznego.",
                    "en" => "Managing tools and machines for grinding and polishing optical glass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26399,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu szlifowania i polerowania szkła optycznego, aby uzyskać najlepsze właściwości optyczne.",
                    "en" => "Optimizing the grinding and polishing process for optical glass to achieve the best optical properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26400,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn i narzędzi do szlifowania i polerowania szkła optycznego.",
                    "en" => "Performing maintenance on machines and tools for grinding and polishing optical glass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26401,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu szlifowania i polerowania szkła optycznego.",
                    "en" => "Documenting the grinding and polishing results for optical glass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SZLIFIERZ_SZKŁA_GOSPODARCZEGO_I_TECHNICZNEGO = [
            [
                "id" => 26402,
                "name" => json_encode([
                    "pl" => "Szlifowanie szkła gospodarczego i technicznego, takich jak szyby, okna, elementy szklane do różnych zastosowań.",
                    "en" => "Grinding of utility and technical glass, such as windows, glass panes, and components for various applications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26403,
                "name" => json_encode([
                    "pl" => "Kontrola jakości szlifowanego szkła, monitorowanie procesu szlifowania.",
                    "en" => "Controlling the quality of ground glass, monitoring the grinding process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26404,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do szlifowania szkła, zapewniając ich prawidłowe działanie.",
                    "en" => "Managing machines for grinding glass, ensuring their proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26405,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu szlifowania szkła, aby uzyskać pożądane właściwości techniczne.",
                    "en" => "Optimizing the glass grinding process to achieve desired technical properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26406,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do szlifowania szkła gospodarczego i technicznego.",
                    "en" => "Performing maintenance on machines for grinding utility and technical glass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26407,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu szlifowania szkła i raportowanie jakości wyrobów.",
                    "en" => "Documenting the glass grinding process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SZLIFIERZ_SZKŁA_PŁASKIEGO = [
            [
                "id" => 26408,
                "name" => json_encode([
                    "pl" => "Szlifowanie szkła płaskiego, takich jak szyby, lustra, okna, z zachowaniem wymagań jakościowych.",
                    "en" => "Grinding flat glass, such as windows, mirrors, and glass panes, while meeting quality requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26409,
                "name" => json_encode([
                    "pl" => "Kontrola jakości szlifowanego szkła płaskiego, monitorowanie procesu szlifowania.",
                    "en" => "Controlling the quality of ground flat glass, monitoring the grinding process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26410,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do szlifowania szkła płaskiego, zapewniając ich wydajność.",
                    "en" => "Managing machines for grinding flat glass, ensuring their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26411,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu szlifowania szkła płaskiego, aby uzyskać pożądane właściwości optyczne i techniczne.",
                    "en" => "Optimizing the flat glass grinding process to achieve desired optical and technical properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26412,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do szlifowania szkła płaskiego.",
                    "en" => "Performing maintenance on machines for grinding flat glass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26413,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu szlifowania szkła płaskiego i raportowanie jakości wyrobów.",
                    "en" => "Documenting the flat glass grinding process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_FORMOWACZE_WYROBÓW_SZKLANYCH_KRAJACZE_I_SZLIFIERZE_SZKŁA = [
            [
                "id" => 26414,
                "name" => json_encode([
                    "pl" => "Formowanie wyrobów szklanych, cięcie oraz szlifowanie szkła do określonych kształtów i rozmiarów.",
                    "en" => "Forming glass products, cutting and grinding glass to specified shapes and sizes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26415,
                "name" => json_encode([
                    "pl" => "Kontrola jakości formowanych, ciętych i szlifowanych wyrobów szklanych.",
                    "en" => "Controlling the quality of formed, cut, and ground glass products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26416,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do formowania, cięcia i szlifowania szkła, zapewniając ich prawidłowe działanie.",
                    "en" => "Managing machines for forming, cutting, and grinding glass, ensuring their proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26417,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów formowania, cięcia i szlifowania szkła, aby zwiększyć wydajność i jakość.",
                    "en" => "Optimizing glass forming, cutting, and grinding processes to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26418,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do formowania, cięcia i szlifowania szkła.",
                    "en" => "Performing maintenance on machines for forming, cutting, and grinding glass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26419,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesów formowania, cięcia i szlifowania szkła oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the forming, cutting, and grinding processes and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WITRAŻOWNIK = [
            [
                "id" => 26420,
                "name" => json_encode([
                    "pl" => "Tworzenie witraży, projektowanie i montowanie szklanych witraży do okien i elementów dekoracyjnych.",
                    "en" => "Creating stained glass, designing and installing stained glass windows and decorative elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26421,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych witraży, monitorowanie procesu tworzenia i montażu.",
                    "en" => "Controlling the quality of completed stained glass, monitoring the creation and installation process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26422,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem tworzenia witraży, zapewniając ich wysoką jakość i precyzyjność.",
                    "en" => "Managing the stained glass creation process, ensuring high quality and precision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26423,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu tworzenia witraży w celu zwiększenia efektywności produkcji.",
                    "en" => "Optimizing the stained glass creation process to increase production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26424,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji i naprawy witraży.",
                    "en" => "Performing maintenance and repairs on stained glass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26425,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pracy przy tworzeniu witraży oraz raportowanie jakości.",
                    "en" => "Documenting the results of stained glass creation and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $CERAMIK_WYROBÓW_UŻYTKOWYCH_I_OZDOBNYCH = [
            [
                "id" => 26426,
                "name" => json_encode([
                    "pl" => "Produkcja wyrobów ceramicznych użytkowych i ozdobnych, takich jak naczynia, wazony, filiżanki.",
                    "en" => "Manufacturing utilitarian and decorative ceramic products such as dishes, vases, and cups."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26427,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów ceramicznych użytkowych i ozdobnych, monitorowanie procesu produkcji.",
                    "en" => "Controlling the quality of utilitarian and decorative ceramic products, monitoring the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26428,
                "name" => json_encode([
                    "pl" => "Zarządzanie produkcją wyrobów ceramicznych, zapewniając ich wysoką jakość i zgodność z wymaganiami.",
                    "en" => "Managing the production of ceramic products, ensuring high quality and compliance with requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26429,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji wyrobów ceramicznych, aby zwiększyć wydajność i jakość.",
                    "en" => "Optimizing the production processes of ceramic products to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26430,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do produkcji wyrobów ceramicznych.",
                    "en" => "Performing maintenance on machines used for ceramic product manufacturing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26431,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji wyrobów ceramicznych i raportowanie jakości wyrobów.",
                    "en" => "Documenting the production results of ceramic products and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GILOSZER_SZKŁA = [
            [
                "id" => 26432,
                "name" => json_encode([
                    "pl" => "Giloszowanie szkła, czyli usuwanie powierzchniowych niedoskonałości i nadawanie szkłu pożądanej tekstury.",
                    "en" => "Glass gilling, which involves removing surface imperfections and giving the glass the desired texture."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26433,
                "name" => json_encode([
                    "pl" => "Kontrola jakości giloszowanego szkła, monitorowanie procesu giloszowania.",
                    "en" => "Controlling the quality of gilled glass, monitoring the gilling process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26434,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do giloszowania szkła, zapewniając ich prawidłowe działanie.",
                    "en" => "Managing machines for glass gilling, ensuring their proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26435,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu giloszowania szkła, aby uzyskać lepszą jakość powierzchni.",
                    "en" => "Optimizing the glass gilling process to achieve better surface quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26436,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do giloszowania szkła.",
                    "en" => "Performing maintenance on machines for glass gilling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26437,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu giloszowania i raportowanie jakości wyrobów szklanych.",
                    "en" => "Documenting the gilling process results and reporting on the quality of glass products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GRAWER_SZKŁA = [
            [
                "id" => 26438,
                "name" => json_encode([
                    "pl" => "Grawerowanie wzorów i tekstów na szkle, takie jak monogramy, ornamenty, czy wzory dekoracyjne.",
                    "en" => "Engraving patterns and texts on glass, such as monograms, ornaments, or decorative patterns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26439,
                "name" => json_encode([
                    "pl" => "Kontrola jakości grawerowanych wzorów, monitorowanie procesu grawerowania.",
                    "en" => "Controlling the quality of engraved patterns, monitoring the engraving process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26440,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do grawerowania szkła, zapewniając ich efektywność i precyzję.",
                    "en" => "Managing machines for glass engraving, ensuring their efficiency and precision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26441,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu grawerowania szkła w celu poprawy jakości i detali wzorów.",
                    "en" => "Optimizing the glass engraving process to improve quality and pattern detail."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26442,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do grawerowania szkła.",
                    "en" => "Performing maintenance on machines for glass engraving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26443,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników grawerowania i raportowanie jakości grawerowanych wyrobów.",
                    "en" => "Documenting the engraving results and reporting on the quality of engraved products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LUSTRZARZ = [
            [
                "id" => 26444,
                "name" => json_encode([
                    "pl" => "Produkcja luster, polegająca na formowaniu szkła i nakładaniu na nie warstwy odbijającej.",
                    "en" => "Manufacturing mirrors, involving glass forming and applying a reflective coating."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26445,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych luster, monitorowanie procesu produkcji.",
                    "en" => "Controlling the quality of manufactured mirrors, monitoring the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26446,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do produkcji luster, zapewniając ich efektywność.",
                    "en" => "Managing machines for mirror production, ensuring their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26447,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji luster w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the mirror production process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26448,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do produkcji luster.",
                    "en" => "Performing maintenance on machines for mirror production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26449,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji luster i raportowanie jakości wyrobów.",
                    "en" => "Documenting the mirror production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZŁOTNIK = [
            [
                "id" => 26450,
                "name" => json_encode([
                    "pl" => "Zastosowanie złotych i metalicznych powłok na wyrobach, takich jak ramki, biżuteria, elementy dekoracyjne.",
                    "en" => "Applying gold and metallic coatings on products such as frames, jewelry, and decorative elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26451,
                "name" => json_encode([
                    "pl" => "Kontrola jakości pozłacanych wyrobów, monitorowanie procesu pozłacania.",
                    "en" => "Controlling the quality of gilded products, monitoring the gilding process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26452,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami i maszynami do pozłacania, zapewniając ich efektywność.",
                    "en" => "Managing tools and machines for gilding, ensuring their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26453,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu pozłacania wyrobów w celu uzyskania lepszych efektów estetycznych.",
                    "en" => "Optimizing the gilding process for better aesthetic effects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26454,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi do pozłacania.",
                    "en" => "Performing maintenance on gilding tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26455,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu pozłacania oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the gilding process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RZEŹBIARZ_SZKŁA = [
            [
                "id" => 26456,
                "name" => json_encode([
                    "pl" => "Rzeźbienie w szkle, tworzenie rzeźb, płaskorzeźb i innych artystycznych form szklanych.",
                    "en" => "Sculpting glass, creating sculptures, bas-reliefs, and other artistic glass forms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26457,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych rzeźb szklanych, monitorowanie procesu rzeźbienia.",
                    "en" => "Controlling the quality of completed glass sculptures, monitoring the sculpting process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26458,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami i maszynami do rzeźbienia szkła, zapewniając precyzyjne wykonanie.",
                    "en" => "Managing tools and machines for glass sculpting, ensuring precise execution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26459,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu rzeźbienia szkła, aby uzyskać najwyższą jakość rzeźb artystycznych.",
                    "en" => "Optimizing the glass sculpting process to achieve the highest quality artistic sculptures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26460,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi do rzeźbienia szkła oraz napraw maszyn.",
                    "en" => "Performing maintenance on tools for glass sculpting and repairing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26461,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu rzeźbienia szkła i raportowanie o jakości wykonanych rzeźb.",
                    "en" => "Documenting the results of the glass sculpting process and reporting on the quality of the sculptures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SZYLDZIAZR = [
            [
                "id" => 26462,
                "name" => json_encode([
                    "pl" => "Tworzenie szyldów, tablic informacyjnych i dekoracyjnych, w tym cięcie liter, wzorów i kształtów na różnych materiałach.",
                    "en" => "Creating signs, informational and decorative boards, including cutting letters, patterns, and shapes on various materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26463,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych szyldów, monitorowanie procesu tworzenia i montażu.",
                    "en" => "Controlling the quality of completed signs, monitoring the creation and installation process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26464,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami i maszynami do cięcia liter i wzorów na szyldach, zapewniając ich precyzyjne wykonanie.",
                    "en" => "Managing tools and machines for cutting letters and patterns on signs, ensuring precise execution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26465,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu tworzenia szyldów, aby uzyskać wysoką jakość estetyczną i techniczną.",
                    "en" => "Optimizing the sign-making process to achieve high aesthetic and technical quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26466,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do produkcji szyldów oraz naprawa narzędzi.",
                    "en" => "Performing maintenance on sign production machines and repairing tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26467,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu tworzenia szyldów i raportowanie jakości wykonanych wyrobów.",
                    "en" => "Documenting the sign-making process results and reporting on the quality of completed products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ZDOBNIK_CERAMIKI = [
            [
                "id" => 26468,
                "name" => json_encode([
                    "pl" => "Zdobienie wyrobów ceramicznych, takich jak naczynia, talerze, filiżanki, poprzez malowanie, tłoczenie lub naklejanie wzorów.",
                    "en" => "Decorating ceramic products such as dishes, plates, and cups through painting, embossing, or applying patterns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26469,
                "name" => json_encode([
                    "pl" => "Kontrola jakości zdobionych wyrobów ceramicznych, monitorowanie procesu zdobienia.",
                    "en" => "Controlling the quality of decorated ceramic products, monitoring the decoration process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26470,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami do zdobienia ceramiki, zapewniając precyzyjne wykonanie wzorów.",
                    "en" => "Managing tools for decorating ceramics, ensuring precise execution of patterns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26471,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu zdobienia ceramiki, aby uzyskać najlepszą jakość i estetykę.",
                    "en" => "Optimizing the ceramic decoration process to achieve the best quality and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26472,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi do zdobienia ceramiki oraz naprawa maszyn.",
                    "en" => "Performing maintenance on ceramic decoration tools and repairing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26473,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu zdobienia ceramiki i raportowanie jakości wyrobów.",
                    "en" => "Documenting the ceramic decoration process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GRAWER = [
            [
                "id" => 26474,
                "name" => json_encode([
                    "pl" => "Grawerowanie wzorów, tekstów lub ornamentów na wyrobach, takich jak szkło, metal, drewno i kamień.",
                    "en" => "Engraving patterns, texts, or ornaments on products such as glass, metal, wood, and stone."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26475,
                "name" => json_encode([
                    "pl" => "Kontrola jakości grawerowanych wzorów, monitorowanie procesu grawerowania.",
                    "en" => "Controlling the quality of engraved patterns, monitoring the engraving process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26476,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami do grawerowania, zapewniając precyzyjne wykonanie wzorów.",
                    "en" => "Managing engraving tools, ensuring precise execution of patterns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26477,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu grawerowania, aby uzyskać lepsze szczegóły i jakość wzorów.",
                    "en" => "Optimizing the engraving process to achieve better details and quality of patterns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26478,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi do grawerowania.",
                    "en" => "Performing maintenance on engraving tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26479,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu grawerowania oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the engraving process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ZDOBNIK_SZKŁA = [
            [
                "id" => 26480,
                "name" => json_encode([
                    "pl" => "Zdobienie wyrobów szklanych, takich jak naczynia, wazony i szkło dekoracyjne, poprzez malowanie, rysowanie lub grawerowanie.",
                    "en" => "Decorating glass products, such as vessels, vases, and decorative glass, through painting, drawing, or engraving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26481,
                "name" => json_encode([
                    "pl" => "Kontrola jakości zdobionych wyrobów szklanych, monitorowanie procesu zdobienia.",
                    "en" => "Controlling the quality of decorated glass products, monitoring the decoration process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26482,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami do zdobienia szkła, zapewniając precyzyjne wykonanie wzorów.",
                    "en" => "Managing tools for decorating glass, ensuring precise execution of patterns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26483,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu zdobienia szkła, aby uzyskać najlepszą jakość i estetykę.",
                    "en" => "Optimizing the glass decoration process to achieve the best quality and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26484,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi do zdobienia szkła oraz naprawa maszyn.",
                    "en" => "Performing maintenance on tools for decorating glass and repairing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26485,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu zdobienia szkła i raportowanie jakości wyrobów.",
                    "en" => "Documenting the glass decoration process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_SZYLDZIARZE_GRAWERZY_I_ZDOBNICY_CERAMIKI_SZKŁA_I_POKREWNI = [
            [
                "id" => 26486,
                "name" => json_encode([
                    "pl" => "Tworzenie szyldów, grawerowanie i zdobienie ceramiki, szkła oraz innych materiałów, takich jak drewno i metal.",
                    "en" => "Making signs, engraving, and decorating ceramics, glass, and other materials such as wood and metal."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26487,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych szyldów, grawerowanych wzorów oraz zdobionych wyrobów.",
                    "en" => "Controlling the quality of completed signs, engraved patterns, and decorated products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26488,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem tworzenia szyldów, grawerowania oraz zdobienia, zapewniając precyzję i zgodność z wymaganiami.",
                    "en" => "Managing the process of making signs, engraving, and decorating, ensuring precision and compliance with requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26489,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów szyldziarstwa, grawerowania i zdobienia w celu poprawy jakości i efektywności.",
                    "en" => "Optimizing the processes of sign-making, engraving, and decorating to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26490,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do grawerowania i zdobienia oraz naprawa narzędzi.",
                    "en" => "Performing maintenance on machines for engraving and decorating and repairing tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26491,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu tworzenia szyldów, grawerowania i zdobienia oraz raportowanie jakości.",
                    "en" => "Documenting the process of making signs, engraving, and decorating and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FOTOGRAF_POLIGRAFICZNY = [
            [
                "id" => 26492,
                "name" => json_encode([
                    "pl" => "Wykonywanie zdjęć do publikacji, projektów graficznych i materiałów reklamowych.",
                    "en" => "Taking photographs for publications, graphic projects, and advertising materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26493,
                "name" => json_encode([
                    "pl" => "Obróbka zdjęć, dostosowanie ich do wymagań technicznych i estetycznych.",
                    "en" => "Editing photographs, adjusting them to technical and aesthetic requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26494,
                "name" => json_encode([
                    "pl" => "Zarządzanie sprzętem fotograficznym, zapewniając odpowiednią jakość zdjęć.",
                    "en" => "Managing photographic equipment, ensuring the quality of the images."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26495,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu fotografowania, aby uzyskać najlepsze efekty wizualne.",
                    "en" => "Optimizing the photography process to achieve the best visual results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26496,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji sprzętu fotograficznego i naprawy drobnych uszkodzeń.",
                    "en" => "Performing maintenance on photographic equipment and repairing minor damages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26497,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pracy fotograficznej i raportowanie o jakości zdjęć.",
                    "en" => "Documenting the photographic work results and reporting on the quality of the images."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FOTOGRAF_W_DRUKARNI_FILMOWEJ = [
            [
                "id" => 26498,
                "name" => json_encode([
                    "pl" => "Wykonywanie zdjęć materiałów do druku, tworzenie filmów do procesów drukarskich.",
                    "en" => "Taking photographs of materials for printing, creating films for printing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26499,
                "name" => json_encode([
                    "pl" => "Obróbka zdjęć, przygotowanie ich do wywołania filmów.",
                    "en" => "Editing photographs, preparing them for film development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26500,
                "name" => json_encode([
                    "pl" => "Kontrola jakości zdjęć i filmów przygotowanych do druku.",
                    "en" => "Controlling the quality of photographs and films prepared for printing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26501,
                "name" => json_encode([
                    "pl" => "Zarządzanie sprzętem fotograficznym i drukarskim, zapewniając jego odpowiednią funkcjonalność.",
                    "en" => "Managing photographic and printing equipment, ensuring its proper functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26502,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu fotografowania i wywoływania filmów, aby uzyskać jak najlepszą jakość druku.",
                    "en" => "Optimizing the photography and film developing process to achieve the best printing quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26503,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji sprzętu fotograficznego i filmowego.",
                    "en" => "Performing maintenance on photographic and film equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GILOSZER_POLIGRAFICZNY = [
            [
                "id" => 26504,
                "name" => json_encode([
                    "pl" => "Giloszowanie materiałów poligraficznych, polegające na nakładaniu specjalnych wzorów na papierze i innych materiałach.",
                    "en" => "Gilling printing materials, applying special patterns on paper and other materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26505,
                "name" => json_encode([
                    "pl" => "Kontrola jakości giloszowanych materiałów, monitorowanie procesu giloszowania.",
                    "en" => "Controlling the quality of gilled materials, monitoring the gilling process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26506,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do giloszowania materiałów poligraficznych.",
                    "en" => "Managing machines for gilling printing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26507,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu giloszowania w celu uzyskania najlepszych efektów wizualnych.",
                    "en" => "Optimizing the gilling process to achieve the best visual effects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26508,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do giloszowania materiałów poligraficznych.",
                    "en" => "Performing maintenance on machines for gilling printing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26509,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników giloszowania materiałów poligraficznych i raportowanie jakości.",
                    "en" => "Documenting the gilling results of printing materials and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GRAWER_POLIGRAFICZNY = [
            [
                "id" => 26510,
                "name" => json_encode([
                    "pl" => "Grawerowanie wzorów i tekstów na materiałach poligraficznych, takich jak płyty drukarskie i formy.",
                    "en" => "Engraving patterns and texts on printing materials, such as printing plates and molds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26511,
                "name" => json_encode([
                    "pl" => "Kontrola jakości grawerowanych materiałów poligraficznych, monitorowanie procesu grawerowania.",
                    "en" => "Controlling the quality of engraved printing materials, monitoring the engraving process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26512,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do grawerowania materiałów poligraficznych, zapewniając precyzyjne wykonanie.",
                    "en" => "Managing machines for engraving printing materials, ensuring precise execution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26513,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu grawerowania materiałów poligraficznych, aby uzyskać lepszą jakość.",
                    "en" => "Optimizing the engraving process of printing materials to achieve better quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26514,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do grawerowania materiałów poligraficznych.",
                    "en" => "Performing maintenance on machines for engraving printing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26515,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników grawerowania i raportowanie jakości wykonanych materiałów.",
                    "en" => "Documenting the engraving results and reporting on the quality of the finished materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KOMPUTEROWY_SKŁADACZ_TEKSTU = [
            [
                "id" => 26516,
                "name" => json_encode([
                    "pl" => "Składanie tekstu do druku przy użyciu komputerowych programów składu tekstu.",
                    "en" => "Typesetting text for printing using computer typesetting software."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26517,
                "name" => json_encode([
                    "pl" => "Optymalizacja układu tekstu, zapewniając estetyczną i funkcjonalną prezentację materiałów drukowanych.",
                    "en" => "Optimizing the layout of the text, ensuring an aesthetic and functional presentation of printed materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26518,
                "name" => json_encode([
                    "pl" => "Wykonywanie kontroli jakości składu tekstu oraz jego zgodności z wymaganiami technicznymi.",
                    "en" => "Controlling the quality of typesetting and its compliance with technical requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26519,
                "name" => json_encode([
                    "pl" => "Zarządzanie oprogramowaniem do składu tekstu, zapewniając wydajność i jakość pracy.",
                    "en" => "Managing typesetting software, ensuring efficiency and quality of work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26520,
                "name" => json_encode([
                    "pl" => "Tworzenie plików do druku, w tym przygotowanie tekstu i elementów graficznych.",
                    "en" => "Creating print-ready files, including preparing text and graphic elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26521,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pracy przy składzie tekstu oraz raportowanie o jakości.",
                    "en" => "Documenting typesetting work results and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MOLETOWNIK = [
            [
                "id" => 26522,
                "name" => json_encode([
                    "pl" => "Tworzenie form i matryc do produkcji wyrobów metalowych, poligraficznych i innych.",
                    "en" => "Creating molds and dies for the production of metal, printing, and other products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26523,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wytwarzanych form i matryc, monitorowanie procesu produkcji.",
                    "en" => "Controlling the quality of produced molds and dies, monitoring the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26524,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do produkcji form i matryc, zapewniając ich precyzyjne działanie.",
                    "en" => "Managing machines for mold and die production, ensuring their precise operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26525,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji form i matryc w celu zwiększenia efektywności i jakości.",
                    "en" => "Optimizing the mold and die production process to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26526,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do produkcji form i matryc.",
                    "en" => "Performing maintenance on machines for mold and die production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26527,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji form i matryc oraz raportowanie jakości.",
                    "en" => "Documenting mold and die production results and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTAŻYSTA_REPRODUKCYJNY = [
            [
                "id" => 26528,
                "name" => json_encode([
                    "pl" => "Montaż i składanie materiałów do reprodukcji, takich jak zdjęcia, teksty i elementy graficzne.",
                    "en" => "Assembling and mounting materials for reproduction, such as photographs, texts, and graphic elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26529,
                "name" => json_encode([
                    "pl" => "Kontrola jakości montowanych materiałów reprodukcyjnych, zapewniając ich odpowiednią prezentację.",
                    "en" => "Controlling the quality of mounted reproduction materials, ensuring their proper presentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26530,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami i urządzeniami do montażu materiałów reprodukcyjnych.",
                    "en" => "Managing tools and equipment for mounting reproduction materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26531,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu montażu reprodukcji, aby uzyskać jak najlepszą jakość.",
                    "en" => "Optimizing the reproduction mounting process to achieve the best possible quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26532,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji sprzętu montażowego, zapewniając jego sprawność operacyjną.",
                    "en" => "Performing maintenance on mounting equipment, ensuring its operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26533,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników montażu materiałów reprodukcyjnych oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the results of mounting reproduction materials and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_DTP = [
            [
                "id" => 26534,
                "name" => json_encode([
                    "pl" => "Obsługa programów do składu tekstów i przygotowania materiałów do druku.",
                    "en" => "Operating software for typesetting text and preparing materials for printing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26535,
                "name" => json_encode([
                    "pl" => "Optymalizacja układu tekstu i grafiki w materiałach do druku.",
                    "en" => "Optimizing the layout of text and graphics in print materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26536,
                "name" => json_encode([
                    "pl" => "Zarządzanie przygotowaniem plików do druku, w tym formatowanie i sprawdzanie zgodności z wymaganiami technicznymi.",
                    "en" => "Managing the preparation of print-ready files, including formatting and ensuring compliance with technical requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26537,
                "name" => json_encode([
                    "pl" => "Kontrola jakości plików do druku, monitorowanie procesu składu tekstu.",
                    "en" => "Controlling the quality of print files, monitoring the text typesetting process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26538,
                "name" => json_encode([
                    "pl" => "Wykonywanie korekt i poprawek w składzie tekstu i materiałów do druku.",
                    "en" => "Performing corrections and adjustments in typesetting and print materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26539,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pracy przy składzie tekstu i przygotowaniu plików do druku.",
                    "en" => "Documenting the results of typesetting and preparing print-ready files."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_FOTOSKŁADU = [
            [
                "id" => 26540,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do tworzenia fotoskładów, przygotowanie materiałów do procesu drukarskiego.",
                    "en" => "Operating machines for creating photo-compositions, preparing materials for the printing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26541,
                "name" => json_encode([
                    "pl" => "Zarządzanie przygotowaniem materiałów do składu fotoskładu, w tym kalibracja i obróbka zdjęć.",
                    "en" => "Managing the preparation of materials for photo-composition, including calibration and photo processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26542,
                "name" => json_encode([
                    "pl" => "Kontrola jakości zdjęć i elementów składających się na fotoskład.",
                    "en" => "Controlling the quality of photos and elements composing the photo-composition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26543,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu tworzenia fotoskładów w celu uzyskania najlepszej jakości materiałów.",
                    "en" => "Optimizing the photo-composition process to achieve the best quality materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26544,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do tworzenia fotoskładów.",
                    "en" => "Performing maintenance on machines for photo-composition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26545,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu fotoskładu oraz raportowanie o jakości przygotowanych materiałów.",
                    "en" => "Documenting the photo-composition process results and reporting on the quality of prepared materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_SKANERA_POLIGRAFICZNEGO = [
            [
                "id" => 26546,
                "name" => json_encode([
                    "pl" => "Obsługa skanerów poligraficznych, skanowanie materiałów do procesu druku.",
                    "en" => "Operating graphic scanners, scanning materials for the printing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26547,
                "name" => json_encode([
                    "pl" => "Kontrola jakości skanowanych materiałów, monitorowanie procesu skanowania.",
                    "en" => "Controlling the quality of scanned materials, monitoring the scanning process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26548,
                "name" => json_encode([
                    "pl" => "Zarządzanie ustawieniami skanera, zapewniając odpowiednią jakość obrazu.",
                    "en" => "Managing scanner settings, ensuring appropriate image quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26549,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu skanowania w celu uzyskania jak najlepszej jakości obrazu.",
                    "en" => "Optimizing the scanning process to achieve the best possible image quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26550,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji skanerów poligraficznych.",
                    "en" => "Performing maintenance on graphic scanners."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26551,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu skanowania oraz raportowanie o jakości skanowanych materiałów.",
                    "en" => "Documenting the scanning process results and reporting on the quality of scanned materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RYSOWNIK_LITOGRAFICZNY = [
            [
                "id" => 26552,
                "name" => json_encode([
                    "pl" => "Rysowanie elementów graficznych na kamieniach litograficznych do procesu drukowania.",
                    "en" => "Drawing graphic elements on lithographic stones for the printing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26553,
                "name" => json_encode([
                    "pl" => "Przygotowywanie rysunków do odbitki litograficznej, kontrola jakości.",
                    "en" => "Preparing drawings for lithographic prints, quality control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26554,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami do rysowania na kamieniach litograficznych.",
                    "en" => "Managing tools for drawing on lithographic stones."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26555,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu rysowania na kamieniach litograficznych, aby uzyskać najlepszą jakość druku.",
                    "en" => "Optimizing the drawing process on lithographic stones to achieve the best print quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26556,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi litograficznych.",
                    "en" => "Performing maintenance on lithographic tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26557,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pracy przy rysowaniu na kamieniach litograficznych.",
                    "en" => "Documenting the results of drawing on lithographic stones."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RYTOWNIK = [
            [
                "id" => 26558,
                "name" => json_encode([
                    "pl" => "Rytowanie wzorów i tekstów na metalowych, drewnianych lub kamiennych powierzchniach.",
                    "en" => "Engraving patterns and texts on metal, wooden, or stone surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26559,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych rytów, monitorowanie procesu rytowania.",
                    "en" => "Controlling the quality of engravings, monitoring the engraving process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26560,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami do rytowania, zapewniając precyzyjne wykonanie wzorów.",
                    "en" => "Managing engraving tools, ensuring precise execution of patterns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26561,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu rytowania w celu uzyskania najlepszej jakości wzorów.",
                    "en" => "Optimizing the engraving process to achieve the best quality of patterns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26562,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi do rytowania.",
                    "en" => "Performing maintenance on engraving tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26563,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników rytowania oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the engraving results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TRAWIACZ_POLIGRAFICZNY = [
            [
                "id" => 26564,
                "name" => json_encode([
                    "pl" => "Trawienie matryc poligraficznych, przygotowywanie elementów do procesu drukarskiego.",
                    "en" => "Etching printing plates, preparing elements for the printing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26565,
                "name" => json_encode([
                    "pl" => "Kontrola jakości trawionych matryc, monitorowanie procesu trawienia.",
                    "en" => "Controlling the quality of etched plates, monitoring the etching process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26566,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami i materiałami do trawienia matryc, zapewniając precyzyjne wykonanie.",
                    "en" => "Managing tools and materials for etching plates, ensuring precise execution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26567,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu trawienia, aby uzyskać najlepsze efekty wizualne i jakościowe.",
                    "en" => "Optimizing the etching process to achieve the best visual and quality effects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26568,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji sprzętu do trawienia matryc.",
                    "en" => "Performing maintenance on etching equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26569,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu trawienia matryc i raportowanie jakości.",
                    "en" => "Documenting the etching process results and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_PRACOWNICY_PRZY_PRACACH_PRZYGOTOWAWCZYCH_DO_DRUKU = [
            [
                "id" => 26570,
                "name" => json_encode([
                    "pl" => "Przygotowanie materiałów do druku, takich jak montaż plików, korekta tekstów i grafiki.",
                    "en" => "Preparing materials for printing, such as assembling files, correcting text and graphics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26571,
                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów przygotowanych do druku, zapewniając ich zgodność z wymaganiami.",
                    "en" => "Controlling the quality of materials prepared for printing, ensuring their compliance with requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26572,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem przygotowania materiałów, zapewniając ich dokładność i kompletność.",
                    "en" => "Managing the material preparation process, ensuring accuracy and completeness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26573,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów przygotowawczych do druku w celu zwiększenia wydajności.",
                    "en" => "Optimizing the pre-printing processes to increase efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26574,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi i sprzętu do przygotowania materiałów do druku.",
                    "en" => "Performing maintenance on tools and equipment for preparing printing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26575,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników przygotowania materiałów do druku i raportowanie jakości.",
                    "en" => "Documenting the material preparation results and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DRUKARZ_SITODRUKOWY = [
            [
                "id" => 26576,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do druku sitodrukowego, drukowanie wzorów na różnych materiałach.",
                    "en" => "Operating screen printing machines, printing patterns on various materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26577,
                "name" => json_encode([
                    "pl" => "Kontrola jakości druku sitodrukowego, monitorowanie procesu druku.",
                    "en" => "Controlling the quality of screen printing, monitoring the printing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26578,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do druku sitodrukowego, zapewniając ich prawidłowe działanie.",
                    "en" => "Managing screen printing machines, ensuring their proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26579,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu druku sitodrukowego, aby uzyskać lepszą jakość i efektywność.",
                    "en" => "Optimizing the screen printing process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26580,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do druku sitodrukowego.",
                    "en" => "Performing maintenance on screen printing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26581,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu druku sitodrukowego oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the screen printing process results and reporting on the quality of products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DRUKARZ_TKANIN = [
            [
                "id" => 26582,
                "name" => json_encode([
                    "pl" => "Drukowanie wzorów na tkaninach przy użyciu różnych metod druku, takich jak sitodruk i nadruk.",
                    "en" => "Printing patterns on fabrics using various printing methods such as screen printing and direct printing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26583,
                "name" => json_encode([
                    "pl" => "Kontrola jakości druku na tkaninach, monitorowanie procesu drukowania.",
                    "en" => "Controlling the quality of fabric printing, monitoring the printing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26584,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do druku na tkaninach, zapewniając ich prawidłowe działanie.",
                    "en" => "Managing machines for fabric printing, ensuring their proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26585,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu druku na tkaninach, aby uzyskać najlepszą jakość wzorów.",
                    "en" => "Optimizing the fabric printing process to achieve the best pattern quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26586,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do druku na tkaninach.",
                    "en" => "Performing maintenance on fabric printing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26587,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu druku na tkaninach oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the fabric printing process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MASZYNISTA_MASZYN_FLEKSOGRAFICZNYCH = [
            [
                "id" => 26588,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn fleksograficznych, drukowanie wzorów na materiałach, takich jak papier, folie i tkaniny.",
                    "en" => "Operating flexographic machines, printing patterns on materials such as paper, films, and fabrics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26589,
                "name" => json_encode([
                    "pl" => "Kontrola jakości druku na maszynach fleksograficznych, monitorowanie procesu drukowania.",
                    "en" => "Controlling the quality of printing on flexographic machines, monitoring the printing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26590,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami fleksograficznymi, zapewniając ich wydajność i zgodność z wymaganiami jakościowymi.",
                    "en" => "Managing flexographic machines, ensuring their efficiency and compliance with quality requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26591,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu druku fleksograficznego, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the flexographic printing process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26592,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn fleksograficznych.",
                    "en" => "Performing maintenance on flexographic machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26593,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników druku fleksograficznego oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the flexographic printing process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MASZYNISTA_MASZYN_OFFSETOWYCH = [
            [
                "id" => 26594,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn offsetowych, drukowanie wysokiej jakości materiałów reklamowych, gazet i książek.",
                    "en" => "Operating offset printing machines, printing high-quality advertising materials, newspapers, and books."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26595,
                "name" => json_encode([
                    "pl" => "Kontrola jakości druku offsetowego, monitorowanie procesu drukowania.",
                    "en" => "Controlling the quality of offset printing, monitoring the printing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26596,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami offsetowymi, zapewniając ich optymalną wydajność i precyzję.",
                    "en" => "Managing offset printing machines, ensuring optimal performance and precision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26597,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu druku offsetowego, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the offset printing process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26598,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn offsetowych.",
                    "en" => "Performing maintenance on offset printing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26599,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników druku offsetowego i raportowanie jakości wyrobów.",
                    "en" => "Documenting the offset printing process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MASZYNISTA_MASZYN_TYPOGRAFICZNYCH = [
            [
                "id" => 26600,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn typograficznych do druku tekstów, książek, gazet, plakatów.",
                    "en" => "Operating typographic printing machines for printing texts, books, newspapers, and posters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26601,
                "name" => json_encode([
                    "pl" => "Kontrola jakości druku na maszynach typograficznych, monitorowanie procesu drukowania.",
                    "en" => "Controlling the quality of printing on typographic machines, monitoring the printing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26602,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami typograficznymi, zapewniając ich optymalną wydajność i precyzyjność.",
                    "en" => "Managing typographic machines, ensuring optimal performance and precision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26603,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu druku typograficznego, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the typographic printing process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26604,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn typograficznych.",
                    "en" => "Performing maintenance on typographic printing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26605,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu druku typograficznego i raportowanie jakości wyrobów.",
                    "en" => "Documenting the typographic printing process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MASZYNISTA_MASZYN_WKLĘSŁODRUKOWYCH = [
            [
                "id" => 26606,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn wklęsłodrukowych do druku na różnych materiałach, takich jak papier, folie czy tkaniny.",
                    "en" => "Operating gravure printing machines for printing on various materials such as paper, films, or fabrics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26607,
                "name" => json_encode([
                    "pl" => "Kontrola jakości druku w procesie wklęsłodruku, monitorowanie parametrów druku.",
                    "en" => "Controlling the print quality in the gravure printing process, monitoring printing parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26608,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami wklęsłodrukowymi, zapewniając ich precyzyjne i efektywne działanie.",
                    "en" => "Managing gravure printing machines, ensuring their precise and efficient operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26609,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu druku wklęsłodrukowego w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the gravure printing process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26610,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn wklęsłodrukowych.",
                    "en" => "Performing maintenance on gravure printing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26611,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu druku wklęsłodrukowego i raportowanie jakości wyrobów.",
                    "en" => "Documenting the gravure printing process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_KSEROKOPIAREK = [
            [
                "id" => 26612,
                "name" => json_encode([
                    "pl" => "Obsługa kserokopiarek do kopiowania dokumentów i materiałów.",
                    "en" => "Operating photocopiers to copy documents and materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26613,
                "name" => json_encode([
                    "pl" => "Kontrola jakości kopii, monitorowanie procesu kopiowania.",
                    "en" => "Controlling the quality of copies, monitoring the copying process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26614,
                "name" => json_encode([
                    "pl" => "Zarządzanie ustawieniami kserokopiarek, zapewniając wysoką jakość kopii.",
                    "en" => "Managing photocopier settings, ensuring high copy quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26615,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu kopiowania, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the copying process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26616,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji kserokopiarek.",
                    "en" => "Performing maintenance on photocopiers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26617,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników kopiowania i raportowanie jakości wykonanych kopii.",
                    "en" => "Documenting the copying results and reporting on the quality of copies made."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_DRUKARZE = [
            [
                "id" => 26618,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn drukujących do różnych typów druku.",
                    "en" => "Operating printing machines for various types of printing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26619,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wydruków, monitorowanie procesu drukowania.",
                    "en" => "Controlling the quality of prints, monitoring the printing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26620,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami drukarskimi, zapewniając ich wydajność i precyzyjność.",
                    "en" => "Managing printing machines, ensuring their efficiency and precision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26621,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu drukowania w celu uzyskania najlepszej jakości i wydajności.",
                    "en" => "Optimizing the printing process to achieve the best quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26622,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn drukarskich.",
                    "en" => "Performing maintenance on printing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26623,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników druku oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting printing results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DRUKARZ = [
            [
                "id" => 26624,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn drukujących i przygotowanie materiałów do druku.",
                    "en" => "Operating printing machines and preparing materials for printing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26625,
                "name" => json_encode([
                    "pl" => "Kontrola jakości druku, monitorowanie procesu drukowania.",
                    "en" => "Controlling the quality of prints, monitoring the printing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26626,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami drukarskimi, zapewniając ich prawidłowe działanie.",
                    "en" => "Managing printing machines, ensuring their proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26627,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu drukowania, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the printing process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26628,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn drukarskich.",
                    "en" => "Performing maintenance on printing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26629,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników druku oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting printing results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DRUKARZ_FLEKSOGRAFICZNY = [
            [
                "id" => 26630,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn fleksograficznych do druku na różnych materiałach, takich jak papier, folie, tkaniny.",
                    "en" => "Operating flexographic printing machines for printing on various materials such as paper, films, and fabrics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26631,
                "name" => json_encode([
                    "pl" => "Kontrola jakości druku fleksograficznego, monitorowanie parametrów druku.",
                    "en" => "Controlling the quality of flexographic printing, monitoring printing parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26632,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami fleksograficznymi, zapewniając ich optymalną wydajność i precyzję.",
                    "en" => "Managing flexographic machines, ensuring optimal performance and precision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26633,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu druku fleksograficznego, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the flexographic printing process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26634,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn fleksograficznych.",
                    "en" => "Performing maintenance on flexographic printing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26635,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu druku fleksograficznego oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the flexographic printing process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DRUKARZ_OFFSETOWY = [
            [
                "id" => 26636,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn offsetowych, drukowanie wysokiej jakości materiałów reklamowych, gazet i książek.",
                    "en" => "Operating offset printing machines, printing high-quality advertising materials, newspapers, and books."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26637,
                "name" => json_encode([
                    "pl" => "Kontrola jakości druku offsetowego, monitorowanie procesu drukowania.",
                    "en" => "Controlling the quality of offset printing, monitoring the printing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26638,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami offsetowymi, zapewniając ich optymalną wydajność i precyzyjność.",
                    "en" => "Managing offset printing machines, ensuring optimal performance and precision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26639,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu druku offsetowego, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the offset printing process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26640,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn offsetowych.",
                    "en" => "Performing maintenance on offset printing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26641,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu druku offsetowego i raportowanie jakości wyrobów.",
                    "en" => "Documenting the offset printing process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INTROLIGATOR_GALANTERYJNY = [
            [
                "id" => 26642,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do wykonywania opraw galanteryjnych, takich jak oprawy skórzane na książki, notesy.",
                    "en" => "Operating machines for leather binding, such as leather covers for books and notebooks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26643,
                "name" => json_encode([
                    "pl" => "Kontrola jakości opraw galanteryjnych, monitorowanie procesu wykonywania opraw.",
                    "en" => "Controlling the quality of leather bindings, monitoring the binding process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26644,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami do introligatorstwa galanteryjnego, zapewniając precyzyjne wykonanie opraw.",
                    "en" => "Managing tools for leather bookbinding, ensuring precise binding execution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26645,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wykonywania opraw galanteryjnych, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the leather binding process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26646,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn introligatorskich galanteryjnych.",
                    "en" => "Performing maintenance on leather bookbinding machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26647,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu introligatorskiego i raportowanie jakości wyrobów.",
                    "en" => "Documenting the bookbinding process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INTROLIGATOR_POLIGRAFICZNY = [
            [
                "id" => 26648,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do oprawy poligraficznej, takich jak składanie, klejenie i zszywanie materiałów drukowanych.",
                    "en" => "Operating machines for graphic binding, such as folding, gluing, and stitching printed materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26649,
                "name" => json_encode([
                    "pl" => "Kontrola jakości oprawy poligraficznej, monitorowanie procesu oprawy.",
                    "en" => "Controlling the quality of graphic binding, monitoring the binding process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26650,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami introligatorskimi poligraficznymi, zapewniając ich prawidłowe działanie.",
                    "en" => "Managing graphic binding machines, ensuring their proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26651,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu oprawy poligraficznej, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the graphic binding process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26652,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn introligatorskich poligraficznych.",
                    "en" => "Performing maintenance on graphic binding machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26653,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu oprawy poligraficznej i raportowanie jakości wyrobów.",
                    "en" => "Documenting the graphic binding process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_INTROLIGATORSKICH = [
            [
                "id" => 26654,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn introligatorskich, takich jak sklejarki, zszywarki, i wykrawarki.",
                    "en" => "Operating binding machines, such as gluing machines, stitching machines, and die-cutters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26655,
                "name" => json_encode([
                    "pl" => "Kontrola jakości pracy maszyn introligatorskich, monitorowanie procesu produkcji.",
                    "en" => "Controlling the quality of work of binding machines, monitoring the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26656,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami i maszynami introligatorskimi, zapewniając ich precyzyjne działanie.",
                    "en" => "Managing tools and binding machines, ensuring their precise operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26657,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów introligatorskich, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing binding processes to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26658,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn introligatorskich.",
                    "en" => "Performing maintenance on binding machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26659,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pracy maszyn introligatorskich oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the work of binding machines and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INTROLIGATOR = [
            [
                "id" => 26660,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn introligatorskich, takich jak sklejarki, zszywarki, i wykrawarki, do tworzenia opraw książek i innych materiałów.",
                    "en" => "Operating binding machines, such as gluing machines, stitching machines, and die-cutters, for book binding and other materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26661,
                "name" => json_encode([
                    "pl" => "Kontrola jakości procesu introligatorskiego, monitorowanie jakości wykonanych opraw.",
                    "en" => "Controlling the quality of the binding process, monitoring the quality of completed bindings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26662,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do introligatorskich, zapewniając ich precyzyjne działanie.",
                    "en" => "Managing binding machines, ensuring their precise operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26663,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu introligatorskiego, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the binding process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26664,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do introligatorskich.",
                    "en" => "Performing maintenance on binding machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26665,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pracy maszyn introligatorskich oraz raportowanie jakości wykonanych wyrobów.",
                    "en" => "Documenting the work of binding machines and reporting on the quality of finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_INTROLIGATORZY_I_POKREWNI = [
            [
                "id" => 26666,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń introligatorskich, takich jak maszyny do cięcia, klejenia, zszywania i pakowania.",
                    "en" => "Operating binding and finishing machines such as cutting, gluing, stitching, and packaging machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26667,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych opraw, monitorowanie procesu produkcji i jego wydajności.",
                    "en" => "Controlling the quality of completed bindings, monitoring the production process and its efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26668,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do introligatorskich, zapewniając ich prawidłowe działanie i optymalną wydajność.",
                    "en" => "Managing binding machines, ensuring their proper operation and optimal performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26669,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu introligatorskiego w celu poprawy jakości i redukcji kosztów.",
                    "en" => "Optimizing the binding process to improve quality and reduce costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26670,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn i urządzeń do introligatorskich.",
                    "en" => "Performing maintenance on binding and finishing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26671,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu introligatorskiego i raportowanie jakości opraw.",
                    "en" => "Documenting the binding process results and reporting on the quality of bindings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_PROCESÓW_INTROLIGATORSKICH = [
            [
                "id" => 26672,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń do cięcia, zszywania, klejenia i pakowania materiałów introligatorskich.",
                    "en" => "Operating machines and equipment for cutting, stitching, gluing, and packaging binding materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26673,
                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów introligatorskich, monitorowanie procesu produkcji opraw.",
                    "en" => "Controlling the quality of binding materials, monitoring the binding production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26674,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami produkcji introligatorskich, zapewniając ich prawidłowe działanie.",
                    "en" => "Managing binding production processes, ensuring their proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26675,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów introligatorskich w celu zwiększenia jakości i efektywności produkcji.",
                    "en" => "Optimizing binding processes to increase quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26676,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn introligatorskich i urządzeń do produkcji opraw.",
                    "en" => "Performing maintenance on binding machines and devices used in binding production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26677,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu produkcji introligatorskich i raportowanie jakości wyrobów.",
                    "en" => "Documenting the results of binding production processes and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_POLIGRAF = [
            [
                "id" => 26678,
                "name" => json_encode([
                    "pl" => "Przygotowanie materiałów do druku, kontrola jakości plików i przygotowanie do druku.",
                    "en" => "Preparing printing materials, controlling the quality of files, and preparing them for printing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26679,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami produkcji poligraficznej, nadzór nad kontrolą jakości wydruków.",
                    "en" => "Managing graphic production processes, overseeing the quality control of prints."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26680,
                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów drukowanych, monitorowanie parametrów druku.",
                    "en" => "Controlling the quality of printed materials, monitoring printing parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26681,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji poligraficznej w celu uzyskania najlepszej jakości i wydajności.",
                    "en" => "Optimizing the graphic production process to achieve the best quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26682,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn poligraficznych i urządzeń do druku.",
                    "en" => "Performing maintenance on graphic machines and printing devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26683,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu poligraficznego i raportowanie jakości wydruków.",
                    "en" => "Documenting the graphic production process and reporting on print quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_CYFROWYCH_PROCESÓW_GRAFICZNYCH = [
            [
                "id" => 26684,
                "name" => json_encode([
                    "pl" => "Obsługa cyfrowych urządzeń do druku, przygotowanie plików graficznych do druku cyfrowego.",
                    "en" => "Operating digital printing devices, preparing graphic files for digital printing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26685,
                "name" => json_encode([
                    "pl" => "Kontrola jakości druku cyfrowego, monitorowanie parametrów druku i procesów graficznych.",
                    "en" => "Controlling the quality of digital printing, monitoring printing parameters and graphic processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26686,
                "name" => json_encode([
                    "pl" => "Zarządzanie cyfrowymi procesami graficznymi, nadzór nad jakością materiałów graficznych.",
                    "en" => "Managing digital graphic processes, overseeing the quality of graphic materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26687,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu druku cyfrowego, aby uzyskać lepszą jakość i efektywność.",
                    "en" => "Optimizing the digital printing process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26688,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji urządzeń do druku cyfrowego.",
                    "en" => "Performing maintenance on digital printing devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26689,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników druku cyfrowego oraz raportowanie jakości wydruków.",
                    "en" => "Documenting digital printing results and reporting on print quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_PROCESÓW_DRUKOWANIA = [
            [
                "id" => 26690,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem drukowania, kontrola jakości i optymalizacja wydajności maszyn drukarskich.",
                    "en" => "Supervising the printing process, controlling quality, and optimizing the performance of printing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26691,
                "name" => json_encode([
                    "pl" => "Przygotowanie materiałów do druku, takich jak pliki, atramenty i inne komponenty.",
                    "en" => "Preparing materials for printing, such as files, inks, and other components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26692,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami drukowania, nadzór nad jakością produkcji, kontrola parametrów druku.",
                    "en" => "Managing the printing processes, supervising production quality, and controlling printing parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26693,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów drukowania, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing printing processes to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26694,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn drukarskich, zapewniając ich ciągłą wydajność.",
                    "en" => "Performing maintenance on printing machines, ensuring their continuous performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26695,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu drukowania i raportowanie jakości produkcji.",
                    "en" => "Documenting printing process results and reporting on production quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_GRAFIKI_I_POLIGRAFII_CYFROWEJ = [
            [
                "id" => 26696,
                "name" => json_encode([
                    "pl" => "Przygotowanie materiałów graficznych do druku cyfrowego, w tym edytowanie plików, korekta i przygotowanie do produkcji.",
                    "en" => "Preparing graphic materials for digital printing, including file editing, correction, and production preparation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26697,
                "name" => json_encode([
                    "pl" => "Obsługa cyfrowych maszyn drukarskich, zarządzanie procesem druku, kontrola jakości.",
                    "en" => "Operating digital printing machines, managing the printing process, and quality control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26698,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów druku cyfrowego, zapewniając wysoką jakość i wydajność produkcji.",
                    "en" => "Optimizing digital printing processes, ensuring high quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26699,
                "name" => json_encode([
                    "pl" => "Zarządzanie ustawieniami maszyn do druku cyfrowego i monitorowanie parametrów druku.",
                    "en" => "Managing digital printing machine settings and monitoring printing parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26700,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji sprzętu cyfrowego i urządzeń do druku.",
                    "en" => "Performing maintenance on digital printing equipment and machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26701,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu druku cyfrowego i raportowanie jakości wyrobów.",
                    "en" => "Documenting the digital printing process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FAJKARZ = [
            [
                "id" => 26702,
                "name" => json_encode([
                    "pl" => "Wytwarzanie fajek z drewna, gliny lub innych materiałów, w tym wycinanie, kształtowanie i formowanie.",
                    "en" => "Manufacturing pipes from wood, clay, or other materials, including cutting, shaping, and molding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26703,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wytwarzanych fajek, monitorowanie procesu produkcji.",
                    "en" => "Controlling the quality of manufactured pipes, monitoring the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26704,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami do wytwarzania fajek, zapewniając precyzyjne wykonanie.",
                    "en" => "Managing tools for making pipes, ensuring precise execution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26705,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wytwarzania fajek, aby uzyskać lepszą jakość i efektywność.",
                    "en" => "Optimizing the pipe-making process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26706,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi do wytwarzania fajek.",
                    "en" => "Performing maintenance on tools for making pipes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26707,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji fajek oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting pipe production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KOSZYKARZ_PLECIONKARZ = [
            [
                "id" => 26708,
                "name" => json_encode([
                    "pl" => "Wytwarzanie koszyków, plecionek i innych wyrobów z wikliny, trzciny lub innych materiałów plecionkarskich.",
                    "en" => "Making baskets, wickerwork, and other items from wicker, reeds, or other weaving materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26709,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów plecionkarskich, monitorowanie procesu plecionkarstwa.",
                    "en" => "Controlling the quality of woven products, monitoring the weaving process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26710,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami do plecionkarstwa, zapewniając ich odpowiednią jakość i przygotowanie.",
                    "en" => "Managing materials for weaving, ensuring their proper quality and preparation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26711,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu plecionkarskiego, aby uzyskać lepszą jakość i wydajność produkcji.",
                    "en" => "Optimizing the weaving process to achieve better quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26712,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi plecionkarskich.",
                    "en" => "Performing maintenance on weaving tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26713,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pracy plecionkarskiej oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the results of weaving work and reporting on the quality of products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LUBIANKARZ = [
            [
                "id" => 26714,
                "name" => json_encode([
                    "pl" => "Wytwarzanie łubianek, koszy i innych plecionych wyrobów z drewna lub wikliny.",
                    "en" => "Making baskets, crates, and other woven products from wood or wicker."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26715,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów plecionkarskich, nadzór nad procesem produkcji.",
                    "en" => "Controlling the quality of woven products, overseeing the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26716,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami do produkcji łubianek, zapewniając ich odpowiednią jakość.",
                    "en" => "Managing materials for basket production, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26717,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu plecionkarskiego, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the weaving process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26718,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi do produkcji łubianek.",
                    "en" => "Performing maintenance on tools for basket production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26719,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji łubianek i raportowanie jakości wyrobów.",
                    "en" => "Documenting basket production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MODELARZ_WYROBÓW_PLECIONKARSKICH = [
            [
                "id" => 26720,
                "name" => json_encode([
                    "pl" => "Wykonywanie modeli wyrobów plecionkarskich, takich jak koszyki i łubianki, z różnych materiałów.",
                    "en" => "Making models of woven products, such as baskets and crates, from various materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26721,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych modeli wyrobów plecionkarskich.",
                    "en" => "Controlling the quality of the models of woven products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26722,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami do tworzenia modeli plecionkarskich.",
                    "en" => "Managing materials for creating weaving product models."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26723,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu tworzenia modeli wyrobów plecionkarskich.",
                    "en" => "Optimizing the process of making models of woven products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26724,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi do modelowania wyrobów plecionkarskich.",
                    "en" => "Performing maintenance on tools for modeling woven products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26725,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników tworzenia modeli i raportowanie jakości wyrobów.",
                    "en" => "Documenting model-making results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RZEŹBIARZ_W_DREWNIE = [
            [
                "id" => 26726,
                "name" => json_encode([
                    "pl" => "Rzeźbienie i modelowanie rzeźb w drewnie, tworzenie artystycznych wyrobów z drewna.",
                    "en" => "Carving and modeling sculptures in wood, creating artistic products from wood."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26727,
                "name" => json_encode([
                    "pl" => "Kontrola jakości rzeźb i wyrobów drewnianych, monitorowanie procesu produkcji.",
                    "en" => "Controlling the quality of wood carvings and products, monitoring the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26728,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami rzeźbiarskimi, zapewniając ich odpowiednią ostrość i sprawność.",
                    "en" => "Managing carving tools, ensuring their proper sharpness and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26729,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu rzeźbienia w drewnie, aby uzyskać jak najlepszą jakość i detal.",
                    "en" => "Optimizing the wood carving process to achieve the best possible quality and detail."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26730,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi rzeźbiarskich.",
                    "en" => "Performing maintenance on carving tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26731,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pracy rzeźbiarskiej oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the results of carving work and reporting on the quality of products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SITARZ = [
            [
                "id" => 26732,
                "name" => json_encode([
                    "pl" => "Produkcja i naprawa sit, w tym tkania materiałów, takich jak siatki i sita do różnych zastosowań.",
                    "en" => "Production and repair of sieves, including weaving materials such as nets and sieves for various applications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26733,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych sit, monitorowanie procesu produkcji.",
                    "en" => "Controlling the quality of sieves, monitoring the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26734,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami do produkcji sit, zapewniając ich odpowiednią jakość.",
                    "en" => "Managing materials for sieve production, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26735,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji sit w celu uzyskania lepszej jakości i efektywności.",
                    "en" => "Optimizing the sieve production process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26736,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi do produkcji sit.",
                    "en" => "Performing maintenance on tools for sieve production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26737,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji sit i raportowanie jakości wyrobów.",
                    "en" => "Documenting the sieve production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SZCZOTKARZ = [
            [
                "id" => 26738,
                "name" => json_encode([
                    "pl" => "Wytwarzanie szczotek, mioteł i innych wyrobów szczotkarskich z różnych materiałów, takich jak drewno, metal, włosie.",
                    "en" => "Manufacturing brushes, brooms, and other brush products from various materials such as wood, metal, and bristles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26739,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych szczotek i wyrobów szczotkarskich.",
                    "en" => "Controlling the quality of manufactured brushes and brush products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26740,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami do produkcji szczotek, zapewniając ich odpowiednią jakość.",
                    "en" => "Managing materials for brush production, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26741,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji szczotek, aby uzyskać lepszą jakość i efektywność.",
                    "en" => "Optimizing the brush production process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26742,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi do produkcji szczotek.",
                    "en" => "Performing maintenance on tools for brush production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26743,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji szczotek oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the brush production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TRZCINIARZ = [
            [
                "id" => 26744,
                "name" => json_encode([
                    "pl" => "Wytwarzanie wyrobów z trzciny, takich jak maty, koszyki, pokrycia dachowe, a także elementy dekoracyjne.",
                    "en" => "Manufacturing products from reeds, such as mats, baskets, roofing, and decorative elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26745,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów trzciniarskich, monitorowanie procesu produkcji.",
                    "en" => "Controlling the quality of reed products, monitoring the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26746,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami do produkcji wyrobów trzciniarskich, zapewniając ich odpowiednią jakość.",
                    "en" => "Managing materials for reed product production, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26747,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji wyrobów z trzciny, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the reed product production process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26748,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi do produkcji wyrobów trzciniarskich.",
                    "en" => "Performing maintenance on tools for reed product production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26749,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji wyrobów z trzciny oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the production of reed products and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_RĘKODZIELNICY_WYROBÓW_Z_DREWNA = [
            [
                "id" => 26750,
                "name" => json_encode([
                    "pl" => "Wytwarzanie i naprawa przedmiotów z drewna, takich jak meble, zabawki, dekoracje, przy użyciu tradycyjnych narzędzi.",
                    "en" => "Making and repairing wooden items such as furniture, toys, and decorations using traditional tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26751,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych wyrobów drewnianych, monitorowanie procesu produkcji.",
                    "en" => "Controlling the quality of wooden products, monitoring the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26752,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami do produkcji drewnianych wyrobów, zapewniając ich odpowiednią jakość.",
                    "en" => "Managing materials for wooden product production, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26753,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji wyrobów drewnianych, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the wooden product production process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26754,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi i urządzeń wykorzystywanych w produkcji wyrobów drewnianych.",
                    "en" => "Performing maintenance on tools and equipment used in wooden product production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26755,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji wyrobów drewnianych oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the production of wooden products and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $IMPREGNATOR_DREWNA = [
            [
                "id" => 26756,
                "name" => json_encode([
                    "pl" => "Impregnowanie drewna za pomocą różnych substancji chemicznych w celu zabezpieczenia przed działaniem warunków atmosferycznych.",
                    "en" => "Treating wood with various chemicals to protect it against weather conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26757,
                "name" => json_encode([
                    "pl" => "Kontrola jakości impregnacji drewna, monitorowanie procesu impregnacji.",
                    "en" => "Controlling the quality of wood impregnation, monitoring the impregnation process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26758,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami do impregnacji drewna, zapewniając ich odpowiednią jakość.",
                    "en" => "Managing materials for wood impregnation, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26759,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu impregnacji drewna w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the wood impregnation process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26760,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji urządzeń do impregnacji drewna.",
                    "en" => "Performing maintenance on wood impregnation equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26761,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników impregnacji drewna i raportowanie jakości wyrobów.",
                    "en" => "Documenting wood impregnation results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MANIPULANT_DREWNA_OKRĄGŁEGO = [
            [
                "id" => 26762,
                "name" => json_encode([
                    "pl" => "Załadunek, rozładunek i przemieszczanie drewna okrągłego w tartakach lub składach drewna.",
                    "en" => "Loading, unloading, and moving roundwood in sawmills or wood yards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26763,
                "name" => json_encode([
                    "pl" => "Kontrola jakości drewna okrągłego, monitorowanie stanu drewna w trakcie transportu.",
                    "en" => "Controlling the quality of roundwood, monitoring the wood condition during transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26764,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem transportu drewna okrągłego, zapewniając bezpieczny załadunek i rozładunek.",
                    "en" => "Managing the roundwood transportation process, ensuring safe loading and unloading."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26765,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów manipulacji drewnem okrągłym w celu zwiększenia efektywności.",
                    "en" => "Optimizing roundwood handling processes to increase efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26766,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji sprzętu do transportu drewna okrągłego.",
                    "en" => "Performing maintenance on equipment used for transporting roundwood."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26767,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników transportu drewna okrągłego i raportowanie jakości materiałów.",
                    "en" => "Documenting the results of roundwood transport and reporting on material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MYGŁOWACZ = [
            [
                "id" => 26768,
                "name" => json_encode([
                    "pl" => "Obróbka drewna, w tym mygłowanie, czyli usuwanie kory i innych niepożądanych elementów z drewna.",
                    "en" => "Wood processing, including peeling, removing bark and other undesirable elements from wood."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26769,
                "name" => json_encode([
                    "pl" => "Kontrola jakości drewna po mygłowaniu, monitorowanie procesu obróbki.",
                    "en" => "Controlling the quality of wood after peeling, monitoring the processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26770,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami do mygłowania drewna, zapewniając ich odpowiednią ostrość i funkcjonalność.",
                    "en" => "Managing tools for peeling wood, ensuring their proper sharpness and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26771,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu mygłowania drewna, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the wood peeling process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26772,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi do mygłowania drewna.",
                    "en" => "Performing maintenance on tools for peeling wood."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26773,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników mygłowania drewna oraz raportowanie jakości materiałów.",
                    "en" => "Documenting the results of peeling wood and reporting on material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PARZELNICZY_DREWNA = [
            [
                "id" => 26774,
                "name" => json_encode([
                    "pl" => "Przygotowanie drewna do dalszej obróbki, w tym parzenie drewna w celu poprawy jego właściwości.",
                    "en" => "Preparing wood for further processing, including steaming the wood to improve its properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26775,
                "name" => json_encode([
                    "pl" => "Kontrola jakości drewna po parzeniu, monitorowanie procesu parzenia.",
                    "en" => "Controlling the quality of wood after steaming, monitoring the steaming process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26776,
                "name" => json_encode([
                    "pl" => "Zarządzanie urządzeniami do parzenia drewna, zapewniając ich prawidłowe działanie.",
                    "en" => "Managing equipment for steaming wood, ensuring its proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26777,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu parzenia drewna w celu poprawy jakości materiału.",
                    "en" => "Optimizing the wood steaming process to improve material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26778,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji urządzeń do parzenia drewna.",
                    "en" => "Performing maintenance on wood steaming equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26779,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu parzenia drewna i raportowanie jakości materiału.",
                    "en" => "Documenting the wood steaming process results and reporting on material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SORTOWACZ_MATERIAŁÓW_DRZEWNYCH = [
            [
                "id" => 26780,
                "name" => json_encode([
                    "pl" => "Sortowanie materiałów drzewnych według jakości, wielkości i rodzaju, w celu przygotowania do dalszej obróbki.",
                    "en" => "Sorting wood materials by quality, size, and type, for further processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26781,
                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów drzewnych, monitorowanie stanu surowca.",
                    "en" => "Controlling the quality of wood materials, monitoring the raw material condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26782,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem sortowania materiałów drzewnych, zapewniając optymalną wydajność.",
                    "en" => "Managing the sorting process of wood materials, ensuring optimal performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26783,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu sortowania materiałów drzewnych, aby uzyskać lepszą jakość i efektywność.",
                    "en" => "Optimizing the sorting process of wood materials to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26784,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji urządzeń do sortowania materiałów drzewnych.",
                    "en" => "Performing maintenance on equipment for sorting wood materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26785,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników sortowania materiałów drzewnych i raportowanie jakości materiału.",
                    "en" => "Documenting the results of wood materials sorting and reporting on material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SUSZARNIOWY_DREWNA = [
            [
                "id" => 26786,
                "name" => json_encode([
                    "pl" => "Obsługa i nadzór nad procesem suszenia drewna, kontrolowanie temperatury i wilgotności.",
                    "en" => "Operating and supervising the wood drying process, controlling temperature and humidity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26787,
                "name" => json_encode([
                    "pl" => "Kontrola jakości drewna po procesie suszenia, monitorowanie procesów suszenia.",
                    "en" => "Controlling the quality of wood after drying, monitoring the drying processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26788,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami i urządzeniami suszarniczymi, zapewniając ich prawidłowe działanie.",
                    "en" => "Managing drying machines and equipment, ensuring their proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26789,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu suszenia drewna, aby uzyskać lepszą jakość i efektywność.",
                    "en" => "Optimizing the wood drying process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26790,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji urządzeń suszarniczych.",
                    "en" => "Performing maintenance on drying equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26791,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników suszenia drewna oraz raportowanie jakości materiału.",
                    "en" => "Documenting wood drying results and reporting on material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ROBOTNICY_PRZYGOTOWUJĄCY_DREWNO = [
            [
                "id" => 26792,
                "name" => json_encode([
                    "pl" => "Przygotowywanie drewna do dalszej obróbki, cięcie, łamanie, sortowanie drewna na odpowiednie wymiary.",
                    "en" => "Preparing wood for further processing, cutting, breaking, and sorting wood to the correct dimensions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26793,
                "name" => json_encode([
                    "pl" => "Kontrola jakości przygotowanego drewna, monitorowanie procesu obróbki wstępnej.",
                    "en" => "Controlling the quality of prepared wood, monitoring the initial processing stage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26794,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami i sprzętem do przygotowywania drewna, zapewniając ich sprawność.",
                    "en" => "Managing tools and equipment for wood preparation, ensuring their proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26795,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu przygotowywania drewna, aby zwiększyć wydajność i jakość materiału.",
                    "en" => "Optimizing the wood preparation process to increase efficiency and material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26796,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi i maszyn do obróbki drewna.",
                    "en" => "Performing maintenance on tools and machines used for wood processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26797,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników przygotowania drewna i raportowanie jakości materiałów.",
                    "en" => "Documenting the results of wood preparation and reporting on material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BEDNARZ = [
            [
                "id" => 26798,
                "name" => json_encode([
                    "pl" => "Wytwarzanie i naprawa beczek, balonów i innych wyrobów z drewna, w tym ich klejenie, gięcie i montaż.",
                    "en" => "Making and repairing barrels, casks, and other wooden products, including gluing, bending, and assembly."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26799,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych wyrobów bednarskich, monitorowanie procesu produkcji.",
                    "en" => "Controlling the quality of manufactured cooperage products, monitoring the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26800,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami do produkcji wyrobów bednarskich, zapewniając ich odpowiednią jakość.",
                    "en" => "Managing materials for cooperage production, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26801,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji wyrobów bednarskich, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the cooperage production process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26802,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi i maszyn używanych do produkcji wyrobów bednarskich.",
                    "en" => "Performing maintenance on tools and machines used for cooperage production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26803,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji wyrobów bednarskich oraz raportowanie jakości materiałów.",
                    "en" => "Documenting the production of cooperage products and reporting on material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GIECIARZ_DREWNA = [
            [
                "id" => 26804,
                "name" => json_encode([
                    "pl" => "Gięcie drewna przy użyciu odpowiednich narzędzi i maszyn w celu nadania pożądanych kształtów.",
                    "en" => "Bending wood using appropriate tools and machines to achieve desired shapes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26805,
                "name" => json_encode([
                    "pl" => "Kontrola jakości giętego drewna, monitorowanie procesu gięcia.",
                    "en" => "Controlling the quality of bent wood, monitoring the bending process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26806,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami do gięcia drewna, zapewniając ich odpowiednią ostrość i funkcjonalność.",
                    "en" => "Managing wood bending tools, ensuring their proper sharpness and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26807,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu gięcia drewna w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the wood bending process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26808,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi do gięcia drewna.",
                    "en" => "Performing maintenance on wood bending tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26809,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników gięcia drewna oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the wood bending results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KOŁODZIEJ = [
            [
                "id" => 26810,
                "name" => json_encode([
                    "pl" => "Wytwarzanie i naprawa kół, w tym wykonanie obręczy i osadzenie ich na drewnianych ramach.",
                    "en" => "Making and repairing wheels, including making rims and fitting them on wooden frames."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26811,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych kół i elementów kołodziejskich.",
                    "en" => "Controlling the quality of wheels and wheelwright components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26812,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami do produkcji kół, zapewniając ich odpowiednią jakość.",
                    "en" => "Managing materials for wheel production, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26813,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji kół w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the wheel production process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26814,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi i maszyn kołodziejskich.",
                    "en" => "Performing maintenance on wheelwright tools and machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26815,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji kół oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the wheel production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RENOWATOR_MEBLI_ARTYSTYCZNYCH = [
            [
                "id" => 26816,
                "name" => json_encode([
                    "pl" => "Renowacja zabytkowych mebli artystycznych, w tym czyszczenie, naprawa i konserwacja.",
                    "en" => "Restoring antique artistic furniture, including cleaning, repairing, and conservation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26817,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych prac renowacyjnych mebli.",
                    "en" => "Controlling the quality of the restoration work on furniture."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26818,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami do renowacji mebli artystycznych, zapewniając ich odpowiednią jakość.",
                    "en" => "Managing materials for artistic furniture restoration, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26819,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu renowacji mebli artystycznych, aby uzyskać lepszą jakość i efekt estetyczny.",
                    "en" => "Optimizing the restoration process of artistic furniture to achieve better quality and aesthetic effect."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26820,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi wykorzystywanych w renowacji mebli.",
                    "en" => "Performing maintenance on tools used in furniture restoration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26821,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników renowacji mebli oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the results of furniture restoration and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $STOLARZ = [
            [
                "id" => 26822,
                "name" => json_encode([
                    "pl" => "Wytwarzanie mebli, drzwi, okien i innych wyrobów drewnianych, w tym ich cięcie, składanie i montaż.",
                    "en" => "Making furniture, doors, windows, and other wooden products, including cutting, assembling, and mounting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26823,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych mebli, drzwi, okien i innych wyrobów drewnianych.",
                    "en" => "Controlling the quality of made furniture, doors, windows, and other wooden products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26824,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami do produkcji mebli, zapewniając ich odpowiednią jakość.",
                    "en" => "Managing materials for furniture production, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26825,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji mebli w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the furniture production process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26826,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn stolarskich i narzędzi.",
                    "en" => "Performing maintenance on woodworking machines and tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26827,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji mebli i raportowanie jakości wyrobów.",
                    "en" => "Documenting the furniture production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $STOLARZ_GALANTERII_DRZEWNEJ = [
            [
                "id" => 26828,
                "name" => json_encode([
                    "pl" => "Wytwarzanie galanterii drzewnej, takiej jak ramki, ozdoby, drobne elementy dekoracyjne.",
                    "en" => "Making wooden products such as frames, ornaments, and small decorative items."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26829,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych wyrobów galanterii drzewnej.",
                    "en" => "Controlling the quality of wooden decorative products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26830,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami do produkcji galanterii drzewnej, zapewniając ich odpowiednią jakość.",
                    "en" => "Managing materials for producing wooden decorative items, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26831,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji galanterii drzewnej w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the wooden decorative item production process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26832,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do produkcji galanterii drzewnej.",
                    "en" => "Performing maintenance on machines for producing wooden decorative items."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26833,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji galanterii drzewnej i raportowanie jakości wyrobów.",
                    "en" => "Documenting the production of wooden decorative items and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $STOLARZ_MEBLI_ARTYSTYCZNYCH_I_WZORCOWYCH = [
            [
                "id" => 26834,
                "name" => json_encode([
                    "pl" => "Wytwarzanie mebli artystycznych, takich jak rzeźbione i ozdobne meble na specjalne zamówienie.",
                    "en" => "Making artistic furniture, such as carved and decorative furniture made to special order."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26835,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych mebli artystycznych i wzorcowych.",
                    "en" => "Controlling the quality of manufactured artistic and prototype furniture."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26836,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami do produkcji mebli artystycznych, zapewniając ich odpowiednią jakość.",
                    "en" => "Managing materials for the production of artistic furniture, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26837,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji mebli artystycznych, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the artistic furniture production process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26838,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi i maszyn używanych do produkcji mebli artystycznych.",
                    "en" => "Performing maintenance on tools and machines used in the production of artistic furniture."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26839,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji mebli artystycznych i raportowanie jakości wyrobów.",
                    "en" => "Documenting the production of artistic furniture and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $STOLARZ_MEBLOWY = [
            [
                "id" => 26840,
                "name" => json_encode([
                    "pl" => "Wytwarzanie mebli z drewna, takich jak szafy, stoły, krzesła, komody i inne wyroby drewniane.",
                    "en" => "Making wooden furniture, such as cabinets, tables, chairs, dressers, and other wooden products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26841,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych mebli, zapewniając ich trwałość i estetykę.",
                    "en" => "Controlling the quality of manufactured furniture, ensuring their durability and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26842,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami do produkcji mebli, zapewniając ich odpowiednią jakość.",
                    "en" => "Managing materials for furniture production, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26843,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji mebli w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the furniture production process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26844,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn stolarskich i narzędzi.",
                    "en" => "Performing maintenance on woodworking machines and tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26845,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji mebli i raportowanie jakości wyrobów.",
                    "en" => "Documenting furniture production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $STOLARZ_MODELARZ_INSTRUMENTÓW_MUZYCZNYCH = [
            [
                "id" => 26846,
                "name" => json_encode([
                    "pl" => "Wytwarzanie i naprawa elementów instrumentów muzycznych, takich jak skrzypce, gitary, fortepiany i inne.",
                    "en" => "Making and repairing components of musical instruments, such as violins, guitars, pianos, and others."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26847,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych elementów instrumentów muzycznych, zapewniając ich poprawne brzmienie.",
                    "en" => "Controlling the quality of manufactured musical instrument components, ensuring their correct sound."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26848,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami do produkcji instrumentów muzycznych, zapewniając ich odpowiednią jakość.",
                    "en" => "Managing materials for musical instrument production, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26849,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji instrumentów muzycznych, aby uzyskać lepszą jakość dźwięku i wykonania.",
                    "en" => "Optimizing the musical instrument production process to achieve better sound quality and craftsmanship."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26850,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi i maszyn wykorzystywanych w produkcji instrumentów muzycznych.",
                    "en" => "Performing maintenance on tools and machines used in the production of musical instruments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26851,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji instrumentów muzycznych oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the production of musical instruments and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_STOLARZE_MEBLOWI = [
            [
                "id" => 26852,
                "name" => json_encode([
                    "pl" => "Produkcja różnorodnych wyrobów meblowych, takich jak szafy, biurka, stoły, itp.",
                    "en" => "Making various furniture products, such as cabinets, desks, tables, etc."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26853,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych wyrobów meblowych, zapewniając ich trwałość i estetykę.",
                    "en" => "Controlling the quality of manufactured furniture products, ensuring their durability and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26854,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami do produkcji mebli, zapewniając ich odpowiednią jakość.",
                    "en" => "Managing materials for furniture production, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26855,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji mebli, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the furniture production process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26856,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn stolarskich i narzędzi.",
                    "en" => "Performing maintenance on woodworking machines and tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26857,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji mebli i raportowanie jakości wyrobów.",
                    "en" => "Documenting furniture production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FREZER_DREWNA = [
            [
                "id" => 26858,
                "name" => json_encode([
                    "pl" => "Frezerowanie drewna, w tym obróbka powierzchniowa drewna przy użyciu frezów.",
                    "en" => "Milling wood, including surface treatment of wood using milling tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26859,
                "name" => json_encode([
                    "pl" => "Kontrola jakości frezowanych elementów drewnianych.",
                    "en" => "Controlling the quality of milled wood components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26860,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami frezującymi, zapewniając ich prawidłowe działanie.",
                    "en" => "Managing milling machines, ensuring their proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26861,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu frezowania drewna, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the wood milling process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26862,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn frezujących.",
                    "en" => "Performing maintenance on milling machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26863,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu frezowania drewna i raportowanie jakości wyrobów.",
                    "en" => "Documenting the wood milling process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_DO_PRODUKCJI_WYROBÓW_DREWNIANYCH = [
            [
                "id" => 26864,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji wyrobów drewnianych, takich jak maszyny do cięcia, szlifowania, frezowania.",
                    "en" => "Operating machines for the production of wooden products, such as cutting, grinding, and milling machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26865,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów drewnianych produkowanych na maszynach.",
                    "en" => "Controlling the quality of wooden products produced on machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26866,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem produkcji wyrobów drewnianych, monitorowanie parametrów maszyn.",
                    "en" => "Managing the production process of wooden products, monitoring machine parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26867,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji wyrobów drewnianych, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the production processes of wooden products to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26868,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn produkcyjnych do wyrobów drewnianych.",
                    "en" => "Performing maintenance on production machines for wooden products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26869,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji wyrobów drewnianych i raportowanie jakości.",
                    "en" => "Documenting the production results of wooden products and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_POLEROWANIA_DREWNA = [
            [
                "id" => 26870,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń do polerowania drewna w celu uzyskania gładkiej powierzchni.",
                    "en" => "Operating machines and equipment for polishing wood to achieve a smooth surface."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26871,
                "name" => json_encode([
                    "pl" => "Kontrola jakości polerowanej powierzchni drewna.",
                    "en" => "Controlling the quality of polished wood surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26872,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn do polerowania drewna, aby uzyskać pożądany efekt.",
                    "en" => "Managing machine parameters for polishing wood to achieve the desired effect."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26873,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu polerowania drewna, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the wood polishing process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26874,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do polerowania drewna.",
                    "en" => "Performing maintenance on wood polishing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26875,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników polerowania drewna oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the wood polishing results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POLEROWACZ_WYROBÓW_Z_DREWNA = [
            [
                "id" => 26876,
                "name" => json_encode([
                    "pl" => "Polerowanie wyrobów drewnianych w celu uzyskania idealnie gładkiej i błyszczącej powierzchni.",
                    "en" => "Polishing wooden products to achieve a perfectly smooth and glossy surface."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26877,
                "name" => json_encode([
                    "pl" => "Kontrola jakości polerowanej powierzchni drewna, weryfikacja efektu końcowego.",
                    "en" => "Controlling the quality of the polished wood surface, verifying the final result."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26878,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami i materiałami do polerowania drewna.",
                    "en" => "Managing tools and materials for polishing wood."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26879,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu polerowania wyrobów drewnianych, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the polishing process of wooden products to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26880,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi i maszyn do polerowania wyrobów drewnianych.",
                    "en" => "Performing maintenance on tools and machines for polishing wooden products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26881,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu polerowania drewna oraz raportowanie jakości.",
                    "en" => "Documenting the wood polishing process results and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $STRUGACZ_DREWNA = [
            [
                "id" => 26882,
                "name" => json_encode([
                    "pl" => "Struganie drewna, w tym usuwanie nierówności i wygładzanie powierzchni drewna.",
                    "en" => "Planing wood, including removing irregularities and smoothing the wood surface."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26883,
                "name" => json_encode([
                    "pl" => "Kontrola jakości struganego drewna, monitorowanie procesu strugania.",
                    "en" => "Controlling the quality of planed wood, monitoring the planing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26884,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami do strugania drewna, zapewniając ich odpowiednią ostrość i sprawność.",
                    "en" => "Managing tools for planing wood, ensuring their proper sharpness and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26885,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu strugania drewna, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the wood planing process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26886,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi i maszyn do strugania drewna.",
                    "en" => "Performing maintenance on tools and machines for planing wood."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26887,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników strugania drewna oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the wood planing results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SZLIFIERZ_MATERIAŁÓW_DRZEWNYCH = [
            [
                "id" => 26888,
                "name" => json_encode([
                    "pl" => "Szlifowanie materiałów drzewnych, takich jak drewno, sklejka, w celu uzyskania gładkiej powierzchni.",
                    "en" => "Grinding wood materials such as timber and plywood to achieve a smooth surface."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26889,
                "name" => json_encode([
                    "pl" => "Kontrola jakości szlifowanych materiałów drzewnych.",
                    "en" => "Controlling the quality of ground wood materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26890,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami szlifierskimi, zapewniając ich prawidłowe działanie.",
                    "en" => "Managing grinding machines, ensuring their proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26891,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu szlifowania drewna, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the wood grinding process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26892,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn szlifierskich.",
                    "en" => "Performing maintenance on grinding machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26893,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników szlifowania drewna oraz raportowanie jakości materiałów.",
                    "en" => "Documenting the wood grinding results and reporting on material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TOKARZ_W_DREWNIE = [
            [
                "id" => 26894,
                "name" => json_encode([
                    "pl" => "Wykonywanie operacji toczenia drewna, takich jak cięcie, obracanie i modelowanie drewna na tokarkach.",
                    "en" => "Performing wood turning operations such as cutting, turning, and shaping wood on lathes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26895,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych elementów drewnianych.",
                    "en" => "Controlling the quality of made wooden components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26896,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami tokarskimi, zapewniając ich prawidłowe ustawienie i działanie.",
                    "en" => "Managing lathe machines, ensuring their proper setup and operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26897,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu toczenia drewna w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the wood turning process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26898,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn tokarskich.",
                    "en" => "Performing maintenance on lathe machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26899,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników toczenia drewna oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the wood turning results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $USTAWIACZ_MASZYN_DO_OBRÓBKI_DREWNA = [
            [
                "id" => 26900,
                "name" => json_encode([
                    "pl" => "Ustawianie maszyn do obróbki drewna, takich jak piły, frezy, wiertarki, zapewniając ich prawidłowe działanie.",
                    "en" => "Setting up machines for wood processing, such as saws, mills, and drills, ensuring their proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26901,
                "name" => json_encode([
                    "pl" => "Kontrola jakości drewna obrabianego na maszynach, monitorowanie procesów obróbczych.",
                    "en" => "Controlling the quality of wood processed on machines, monitoring processing steps."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26902,
                "name" => json_encode([
                    "pl" => "Optymalizacja ustawienia maszyn, aby uzyskać lepszą dokładność i efektywność procesu obróbki drewna.",
                    "en" => "Optimizing machine settings to achieve better precision and efficiency in wood processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26903,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn i urządzeń do obróbki drewna.",
                    "en" => "Managing machine parameters and equipment for wood processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26904,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do obróbki drewna, zapewniając ich sprawność.",
                    "en" => "Performing maintenance on wood processing machines, ensuring their functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26905,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pracy maszyn do obróbki drewna oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting machine work results for wood processing and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WIERTACZ_W_DREWNIE = [
            [
                "id" => 26906,
                "name" => json_encode([
                    "pl" => "Wiertaczenie otworów w drewnie za pomocą wiertarek, w tym precyzyjne wiercenie w drewnie do różnych celów.",
                    "en" => "Drilling holes in wood using drills, including precise drilling for various purposes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26907,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych otworów w drewnie, zapewniając ich odpowiednią średnicę i głębokość.",
                    "en" => "Controlling the quality of drilled holes in wood, ensuring the correct diameter and depth."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26908,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami wiertarek, ustawianie prędkości wiercenia i innych parametrów maszyn.",
                    "en" => "Managing drill machine parameters, setting drilling speed and other machine parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26909,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wiertniczego, aby uzyskać lepszą jakość i wydajność wiercenia.",
                    "en" => "Optimizing the drilling process to achieve better quality and drilling efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26910,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji wiertarek i narzędzi wiertniczych.",
                    "en" => "Performing maintenance on drills and drilling tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26911,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników wiertniczych oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting drilling results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_USTAWIACZE_I_OPERATORZY_MASZYN_DO_OBRÓBKI_DREWNA = [
            [
                "id" => 26912,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do obróbki drewna, takich jak piły, frezy, wiertarki, maszyny do cięcia i kształtowania.",
                    "en" => "Operating machines for wood processing, such as saws, mills, drills, cutting and shaping machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26913,
                "name" => json_encode([
                    "pl" => "Ustawianie maszyn do obróbki drewna, monitorowanie ich parametrów pracy.",
                    "en" => "Setting up wood processing machines, monitoring their operational parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26914,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów obróbki drewna, zwiększanie efektywności produkcji.",
                    "en" => "Optimizing wood processing processes, increasing production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26915,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do obróbki drewna.",
                    "en" => "Performing maintenance on wood processing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26916,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pracy maszyn i raportowanie jakości wyrobów.",
                    "en" => "Documenting machine work results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26917,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością wyrobów drewnianych produkowanych na maszynach.",
                    "en" => "Supervising the quality of wooden products produced on machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_DO_PRODUKCJI_PŁYT_I_SKELEJEK = [
            [
                "id" => 26918,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji płyt i sklejek, w tym cięcie, klejenie i formowanie materiałów drzewnych.",
                    "en" => "Operating machines for the production of plywood and boards, including cutting, gluing, and forming wood materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26919,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych płyt i sklejek, monitorowanie procesu produkcji.",
                    "en" => "Controlling the quality of plywood and boards produced, monitoring the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26920,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn do produkcji płyt, zapewniając ich prawidłowe ustawienie.",
                    "en" => "Managing machine parameters for board production, ensuring their proper setup."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26921,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji płyt i sklejek w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the production process of plywood and boards to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26922,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do produkcji płyt i sklejek.",
                    "en" => "Performing maintenance on machines for the production of plywood and boards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26923,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji płyt i sklejek oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the production results of plywood and boards and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_PILAREK_DO_POZYSKIWANIA_TARCICY = [
            [
                "id" => 26924,
                "name" => json_encode([
                    "pl" => "Obsługa pilarek do cięcia drewna w tarcicę, przygotowanie materiałów do dalszej obróbki.",
                    "en" => "Operating saws for cutting wood into planks, preparing materials for further processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26925,
                "name" => json_encode([
                    "pl" => "Kontrola jakości cięcia drewna na tarcicę, monitorowanie procesu cięcia.",
                    "en" => "Controlling the quality of wood cutting into planks, monitoring the cutting process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26926,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami pilarek, ustawianie grubości i długości cięcia drewna.",
                    "en" => "Managing saw machine parameters, setting the thickness and length of wood cuts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26927,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu cięcia drewna na tarcicę, aby uzyskać lepszą wydajność i jakość.",
                    "en" => "Optimizing the wood cutting process into planks to achieve better performance and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26928,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji pilarek i narzędzi tnących.",
                    "en" => "Performing maintenance on saws and cutting tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26929,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników cięcia drewna i raportowanie jakości tarcicy.",
                    "en" => "Documenting the results of wood cutting and reporting on the quality of planks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_PRAS_W_PRODUKCJI_DRZEWNEJ = [
            [
                "id" => 26930,
                "name" => json_encode([
                    "pl" => "Obsługa pras do produkcji wyrobów drzewnych, takich jak płyty wiórowe, MDF.",
                    "en" => "Operating presses for the production of wood products such as particle boards and MDF."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26931,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów drzewnych produkowanych na prasach.",
                    "en" => "Controlling the quality of wood products produced on presses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26932,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami pras, ustawianie temperatury, ciśnienia i czasu prasowania.",
                    "en" => "Managing press parameters, setting temperature, pressure, and pressing time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26933,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu prasowania drewna, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the wood pressing process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26934,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji pras w produkcji drzewnej.",
                    "en" => "Performing maintenance on presses in wood production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26935,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pracy pras i raportowanie jakości wyrobów.",
                    "en" => "Documenting press work results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_SKLEJEKAREK_PŁYT_STOLARSKICH = [
            [
                "id" => 26936,
                "name" => json_encode([
                    "pl" => "Obsługa sklejarek do łączenia płyt stolarskich, takich jak sklejka i płyty wiórowe.",
                    "en" => "Operating veneer presses to bond wood boards, such as plywood and particle boards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26937,
                "name" => json_encode([
                    "pl" => "Kontrola jakości łączenia płyt, monitorowanie procesu sklejania.",
                    "en" => "Controlling the quality of board bonding, monitoring the gluing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26938,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami sklejarek, ustawianie temperatury, ciśnienia i czasu prasowania.",
                    "en" => "Managing press parameters, setting temperature, pressure, and pressing time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26939,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu sklejania płyt w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the board bonding process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26940,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji sklejarek i narzędzi używanych w produkcji płyt stolarskich.",
                    "en" => "Performing maintenance on veneer presses and tools used in wood board production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26941,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pracy sklejarek i raportowanie jakości wyrobów.",
                    "en" => "Documenting press work results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_SKRAWAREK_DREWNA = [
            [
                "id" => 26942,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn skrawających drewno, takich jak frezy i strugarki.",
                    "en" => "Operating wood cutting machines, such as mills and planers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26943,
                "name" => json_encode([
                    "pl" => "Kontrola jakości skrawanych elementów drewnianych.",
                    "en" => "Controlling the quality of cut wooden components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26944,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn skrawających, ustawianie prędkości i głębokości skrawania.",
                    "en" => "Managing cutting machine parameters, setting cutting speed and depth."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26945,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu skrawania drewna w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the wood cutting process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26946,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn skrawających drewno.",
                    "en" => "Performing maintenance on wood cutting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26947,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników skrawania drewna oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the wood cutting results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_SPAJAREK_OKLEINY_I_ŁUSZCZKI = [
            [
                "id" => 26948,
                "name" => json_encode([
                    "pl" => "Obsługa spajarek do łączenia okleiny i łuszczki drewnianej, montowanie elementów na powierzchni drewna.",
                    "en" => "Operating veneer and veneer splicing machines, assembling elements on the surface of wood."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26949,
                "name" => json_encode([
                    "pl" => "Kontrola jakości okleiny i łuszczki drewnianej, monitorowanie procesu spajania.",
                    "en" => "Controlling the quality of veneer and wood shavings, monitoring the splicing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26950,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn do spajania okleiny i łuszczki.",
                    "en" => "Managing machine parameters for veneering and wood shaving splicing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26951,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu spajania okleiny i łuszczki w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the splicing process of veneer and wood shavings to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26952,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do spajania okleiny i łuszczki.",
                    "en" => "Performing maintenance on veneer and wood shaving splicing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26953,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu spajania okleiny i łuszczki oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the results of the veneer and wood shaving splicing process and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_STRUGAREK_I_FREZAREK_DO_DREWNA = [
            [
                "id" => 26954,
                "name" => json_encode([
                    "pl" => "Obsługa strugarek i frezarek do drewna w celu uzyskania odpowiednich kształtów i powierzchni drewna.",
                    "en" => "Operating wood planers and milling machines to achieve desired shapes and surfaces of wood."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26955,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów drewnianych po obróbce struganiem i frezowaniem.",
                    "en" => "Controlling the quality of wooden products after planing and milling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26956,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami strugarek i frezarek, ustawianie prędkości obróbczej oraz głębokości cięcia.",
                    "en" => "Managing planer and milling machine parameters, setting cutting speed and depth."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26957,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu strugania i frezowania w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the planing and milling process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26958,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji strugarek i frezarek do drewna.",
                    "en" => "Performing maintenance on wood planers and milling machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26959,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników obróbki struganiem i frezowaniem oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the results of planing and milling processes and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_KOŃCOWEJ_OBRÓBKI_PŁYT = [
            [
                "id" => 26960,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do końcowej obróbki płyt, takich jak frezowanie, szlifowanie i polerowanie.",
                    "en" => "Operating machines for final processing of boards, such as milling, grinding, and polishing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26961,
                "name" => json_encode([
                    "pl" => "Kontrola jakości płyt po obróbce końcowej.",
                    "en" => "Controlling the quality of boards after final processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26962,
                "name" => json_encode([
                    "pl" => "Zarządzanie ustawieniami maszyn do końcowej obróbki płyt, zapewniając ich prawidłowe działanie.",
                    "en" => "Managing machine settings for final board processing, ensuring their proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26963,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów obróbki końcowej płyt w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the final board processing processes to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26964,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji urządzeń do końcowej obróbki płyt.",
                    "en" => "Performing maintenance on machines for final board processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26965,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników obróbki końcowej płyt i raportowanie jakości wyrobów.",
                    "en" => "Documenting the results of final board processing and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $STEROWNICZY_LINII_SZTAPLOWANIA_I_PAKIETOWANIA_TARCICY = [
            [
                "id" => 26966,
                "name" => json_encode([
                    "pl" => "Sterowanie linią sztaplowania i pakietowania tarcicy, organizacja procesów układania i pakowania drewna.",
                    "en" => "Controlling the stacking and packaging line for planks, organizing the processes of stacking and packing wood."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26967,
                "name" => json_encode([
                    "pl" => "Kontrola jakości tarcicy i gotowych pakietów drewna.",
                    "en" => "Controlling the quality of planks and finished wood bundles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26968,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami linii sztaplowania i pakietowania, monitorowanie wydajności.",
                    "en" => "Managing the parameters of the stacking and packaging line, monitoring performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26969,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu sztaplowania i pakietowania tarcicy, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the stacking and packaging process of planks to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26970,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji urządzeń do sztaplowania i pakietowania.",
                    "en" => "Performing maintenance on stacking and packaging machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26971,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu sztaplowania i pakietowania oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the stacking and packaging process results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PILARZ = [
            [
                "id" => 26972,
                "name" => json_encode([
                    "pl" => "Obsługa pil do cięcia drewna na deski, tarcicę lub inne elementy.",
                    "en" => "Operating saws for cutting wood into boards, planks, or other components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26973,
                "name" => json_encode([
                    "pl" => "Kontrola jakości cięcia drewna, zapewniając odpowiednią grubość i długość elementów.",
                    "en" => "Controlling the quality of wood cutting, ensuring correct thickness and length of components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26974,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami piły, ustawianie prędkości cięcia i głębokości.",
                    "en" => "Managing saw machine parameters, setting cutting speed and depth."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26975,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu cięcia drewna w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the wood cutting process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26976,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji pil do cięcia drewna.",
                    "en" => "Performing maintenance on saws for cutting wood."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26977,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników cięcia drewna oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the results of wood cutting and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TARTACZNIK = [
            [
                "id" => 26978,
                "name" => json_encode([
                    "pl" => "Obsługa tartaków do cięcia drewna na deski, belki i inne elementy.",
                    "en" => "Operating sawmills for cutting wood into boards, beams, and other components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26979,
                "name" => json_encode([
                    "pl" => "Kontrola jakości cięcia drewna na tartaku.",
                    "en" => "Controlling the quality of wood cutting in the sawmill."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26980,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn tartacznych, zapewniając ich odpowiednie ustawienie.",
                    "en" => "Managing sawmill machine parameters, ensuring proper setup."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26981,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu cięcia drewna na tartaku, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the wood cutting process in the sawmill to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26982,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn tartacznych.",
                    "en" => "Performing maintenance on sawmill machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26983,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pracy na tartaku oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the sawmill work results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_MASZYN_I_URZĄDZEŃ_DO_OBRÓBKI_DREWNA = [
            [
                "id" => 26984,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń do obróbki drewna, takich jak piły, frezarki, strugarki, wiertarki.",
                    "en" => "Operating machines and equipment for wood processing, such as saws, mills, planers, drills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26985,
                "name" => json_encode([
                    "pl" => "Kontrola jakości drewna podczas obróbki, monitorowanie procesu produkcji.",
                    "en" => "Controlling the quality of wood during processing, monitoring the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26986,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn do obróbki drewna, zapewniając ich prawidłowe działanie.",
                    "en" => "Managing machine parameters for wood processing, ensuring their proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26987,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów obróbki drewna w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing wood processing operations to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26988,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do obróbki drewna.",
                    "en" => "Performing maintenance on wood processing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26989,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników obróbki drewna oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the results of wood processing and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MECHANIK_OPERATOR_MASZYN_DO_PRODUKCJI_DRZEWNEJ = [
            [
                "id" => 26990,
                "name" => json_encode([
                    "pl" => "Obsługa i konserwacja maszyn do produkcji drzewnej, takich jak maszyny do cięcia, frezowania i strugania drewna.",
                    "en" => "Operating and maintaining machines for wood production, such as cutting, milling, and planing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26991,
                "name" => json_encode([
                    "pl" => "Wykonywanie napraw i konserwacji maszyn do produkcji drzewnej, w tym wymiana zużytych części.",
                    "en" => "Performing repairs and maintenance on wood production machines, including replacing worn parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26992,
                "name" => json_encode([
                    "pl" => "Kontrola jakości pracy maszyn, monitorowanie ich parametrów i wydajności.",
                    "en" => "Controlling the quality of machine work, monitoring their parameters and performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26993,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami produkcji drzewnej, optymalizacja wydajności maszyn.",
                    "en" => "Managing wood production processes, optimizing machine efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26994,
                "name" => json_encode([
                    "pl" => "Zarządzanie zapasami części zamiennych do maszyn produkcji drzewnej.",
                    "en" => "Managing spare parts inventory for wood production machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26995,
                "name" => json_encode([
                    "pl" => "Dokumentowanie działań konserwacyjnych i naprawczych maszyn produkcji drzewnej.",
                    "en" => "Documenting maintenance and repair activities for wood production machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_DREWNA = [
            [
                "id" => 26996,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie technologii obróbki drewna w produkcji.",
                    "en" => "Developing and implementing wood processing technologies in production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26997,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów obróbki drewna w celu zwiększenia efektywności i jakości produkcji.",
                    "en" => "Optimizing wood processing processes to increase efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26998,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem produkcji drewna, monitorowanie jakości surowców i produktów.",
                    "en" => "Managing the wood production process, monitoring the quality of raw materials and products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 26999,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz technologicznych i dobór odpowiednich technologii obróbki drewna.",
                    "en" => "Conducting technological analyses and selecting appropriate wood processing technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27000,
                "name" => json_encode([
                    "pl" => "Nadzór nad utrzymaniem maszyn i urządzeń do obróbki drewna.",
                    "en" => "Supervising the maintenance of wood processing machines and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27001,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie procedur jakościowych w produkcji drewna.",
                    "en" => "Developing and implementing quality procedures in wood production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_WYROBÓW_Z_DREWNA = [
            [
                "id" => 27002,
                "name" => json_encode([
                    "pl" => "Montaż wyrobów drewnianych, takich jak meble, konstrukcje drewniane, ramy okienne.",
                    "en" => "Assembling wooden products such as furniture, wooden structures, window frames."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27003,
                "name" => json_encode([
                    "pl" => "Kontrola jakości montowanych wyrobów drewnianych, zapewniając ich odpowiednią funkcjonalność.",
                    "en" => "Controlling the quality of assembled wooden products, ensuring their proper functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27004,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami do produkcji wyrobów drewnianych, zapewniając ich odpowiednią jakość.",
                    "en" => "Managing materials for wooden product production, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27005,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu montażu wyrobów drewnianych w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the assembly process of wooden products to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27006,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi i maszyn wykorzystywanych w montażu wyrobów drewnianych.",
                    "en" => "Performing maintenance on tools and machines used in the assembly of wooden products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27007,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników montażu wyrobów drewnianych oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the results of wooden product assembly and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_URZĄDZEŃ_WIKLINIARSKICH = [
            [
                "id" => 27008,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń wikliniarskich, takich jak maszyny do plecionki wiklinowej.",
                    "en" => "Operating wickerworking machines and equipment, such as machines for weaving wicker."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27009,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów wikliniarskich, monitorowanie procesu plecionki.",
                    "en" => "Controlling the quality of wicker products, monitoring the weaving process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27010,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn wikliniarskich, ustawianie prędkości i napięcia nici.",
                    "en" => "Managing parameters of wickerworking machines, setting speed and thread tension."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27011,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu plecionki wiklinowej w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the wicker weaving process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27012,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn wikliniarskich.",
                    "en" => "Performing maintenance on wickerworking machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27013,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pracy maszyn wikliniarskich oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the work results of wickerworking machines and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_PRZEMYSŁU_JACHTOWEGO = [
            [
                "id" => 27014,
                "name" => json_encode([
                    "pl" => "Opracowywanie technologii produkcji jachtów, zarządzanie procesami produkcyjnymi.",
                    "en" => "Developing technologies for yacht production, managing production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27015,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z budową i wyposażeniem jachtów.",
                    "en" => "Coordinating activities related to yacht construction and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27016,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością materiałów wykorzystywanych do produkcji jachtów.",
                    "en" => "Supervising the quality of materials used in yacht production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27017,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji jachtów w celu zwiększenia efektywności i jakości.",
                    "en" => "Optimizing yacht production processes to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27018,
                "name" => json_encode([
                    "pl" => "Wykonywanie analiz technologicznych oraz dobór odpowiednich maszyn do produkcji jachtów.",
                    "en" => "Conducting technological analyses and selecting appropriate machines for yacht production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27019,
                "name" => json_encode([
                    "pl" => "Współpraca z działami projektowym i konstrukcyjnym przy produkcji jachtów.",
                    "en" => "Collaborating with design and engineering departments during yacht production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_PRZEMYSŁU_DRZEWNEGO = [
            [
                "id" => 27020,
                "name" => json_encode([
                    "pl" => "Opracowywanie technologii obróbki drewna i produkcji wyrobów drzewnych.",
                    "en" => "Developing wood processing technologies and the production of wood products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27021,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji drewna, kontrola jakości materiałów.",
                    "en" => "Optimizing wood production processes, quality control of materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27022,
                "name" => json_encode([
                    "pl" => "Nadzór nad utrzymaniem maszyn i urządzeń do obróbki drewna.",
                    "en" => "Supervising the maintenance of wood processing machines and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27023,
                "name" => json_encode([
                    "pl" => "Zarządzanie produkcją wyrobów drzewnych i optymalizacja wydajności linii produkcyjnej.",
                    "en" => "Managing wood product production and optimizing production line efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27024,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz technologicznych w zakresie obróbki drewna.",
                    "en" => "Conducting technological analyses in wood processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27025,
                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji przy wdrażaniu nowych technologii w produkcji drewna.",
                    "en" => "Collaborating with the production department in implementing new wood production technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BIELIŹNIARZ = [
            [
                "id" => 27026,
                "name" => json_encode([
                    "pl" => "Produkcja bielizny, w tym krojenie, szycie i wykończenie materiałów.",
                    "en" => "Production of lingerie, including cutting, sewing, and finishing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27027,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów do produkcji bielizny, zapewnienie ich jakości.",
                    "en" => "Selecting appropriate materials for lingerie production, ensuring their quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27028,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością wykonanej bielizny, kontrolowanie procesu produkcji.",
                    "en" => "Supervising the quality of finished lingerie, controlling the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27029,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji bielizny w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing lingerie production processes to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27030,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn i narzędzi do produkcji bielizny.",
                    "en" => "Performing maintenance on machines and tools for lingerie production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27031,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji bielizny oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting lingerie production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GORSECiARKA = [
            [
                "id" => 27032,
                "name" => json_encode([
                    "pl" => "Produkcja gorsetów, w tym cięcie, szycie i wykańczanie materiałów.",
                    "en" => "Production of corsets, including cutting, sewing, and finishing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27033,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów do produkcji gorsetów, zapewnienie ich jakości.",
                    "en" => "Selecting appropriate materials for corset production, ensuring their quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27034,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością wykonanych gorsetów, kontrolowanie procesu produkcji.",
                    "en" => "Supervising the quality of finished corsets, controlling the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27035,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji gorsetów w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing corset production processes to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27036,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn i narzędzi do produkcji gorsetów.",
                    "en" => "Performing maintenance on machines and tools for corset production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27037,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji gorsetów oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting corset production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KAPELUSZNIK_CZAPNIK = [
            [
                "id" => 27038,
                "name" => json_encode([
                    "pl" => "Produkcja kapeluszy i czapek, w tym cięcie materiałów, szycie i formowanie.",
                    "en" => "Production of hats and caps, including cutting materials, sewing, and shaping."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27039,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkowanych kapeluszy i czapek.",
                    "en" => "Controlling the quality of manufactured hats and caps."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27040,
                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami do produkcji kapeluszy i czapek, zapewnienie ich odpowiedniej jakości.",
                    "en" => "Managing materials for hat and cap production, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27041,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji kapeluszy i czapek w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing hat and cap production processes to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27042,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn i narzędzi do produkcji kapeluszy i czapek.",
                    "en" => "Performing maintenance on machines and tools for hat and cap production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27043,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji kapeluszy i czapek oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting hat and cap production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KOŻUSZNIK = [
            [
                "id" => 27044,
                "name" => json_encode([
                    "pl" => "Produkcja odzieży kożuchowej, w tym cięcie, szycie i wykończenie materiałów kożuchowych.",
                    "en" => "Production of fur clothing, including cutting, sewing, and finishing fur materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27045,
                "name" => json_encode([
                    "pl" => "Kontrola jakości odzieży kożuchowej, zapewnienie jej trwałości i estetyki.",
                    "en" => "Controlling the quality of fur clothing, ensuring its durability and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27046,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów do produkcji odzieży kożuchowej, zapewniając ich wysoką jakość.",
                    "en" => "Selecting appropriate materials for fur clothing production, ensuring their high quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27047,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji odzieży kożuchowej w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the production process of fur clothing to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27048,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do produkcji odzieży kożuchowej.",
                    "en" => "Performing maintenance on machines for fur clothing production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27049,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji odzieży kożuchowej oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the production results of fur clothing and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KRAWIEC = [
            [
                "id" => 27050,
                "name" => json_encode([
                    "pl" => "Produkcja odzieży, w tym cięcie, szycie i wykończenie materiałów.",
                    "en" => "Production of clothing, including cutting, sewing, and finishing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27051,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością wykonanych ubrań, kontrolowanie procesu szycia.",
                    "en" => "Supervising the quality of finished garments, controlling the sewing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27052,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów do produkcji odzieży, zapewniając ich odpowiednią jakość.",
                    "en" => "Selecting appropriate materials for clothing production, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27053,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji odzieży w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing clothing production processes to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27054,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do szycia odzieży.",
                    "en" => "Performing maintenance on sewing machines for clothing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27055,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji odzieży oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the clothing production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KUŚNIERZ = [
            [
                "id" => 27056,
                "name" => json_encode([
                    "pl" => "Produkcja odzieży skórzanej, w tym cięcie, szycie i wykańczanie skór.",
                    "en" => "Production of leather clothing, including cutting, sewing, and finishing leather."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27057,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością odzieży skórzanej, zapewnienie jej trwałości i estetyki.",
                    "en" => "Supervising the quality of leather clothing, ensuring its durability and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27058,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów skórzanych do produkcji odzieży, zapewniając ich odpowiednią jakość.",
                    "en" => "Selecting appropriate leather materials for clothing production, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27059,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji odzieży skórzanej w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the leather clothing production processes to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27060,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do produkcji odzieży skórzanej.",
                    "en" => "Performing maintenance on machines for leather clothing production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27061,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji odzieży skórzanej oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the production results of leather clothing and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MODYSTKA = [
            [
                "id" => 27062,
                "name" => json_encode([
                    "pl" => "Produkcja kapeluszy i innych wyrobów modowych, takich jak czapki i akcesoria.",
                    "en" => "Production of hats and other fashion items, such as caps and accessories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27063,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów do produkcji kapeluszy i akcesoriów, zapewniając ich wysoką jakość.",
                    "en" => "Selecting appropriate materials for hats and accessories production, ensuring their high quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27064,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością wykonanych kapeluszy i akcesoriów, kontrolowanie procesu produkcji.",
                    "en" => "Supervising the quality of finished hats and accessories, controlling the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27065,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji kapeluszy i akcesoriów w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the production processes of hats and accessories to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27066,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn i narzędzi wykorzystywanych w produkcji kapeluszy.",
                    "en" => "Performing maintenance on machines and tools used in hat production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27067,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji kapeluszy i akcesoriów oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the production results of hats and accessories and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $REKAWICZNIK = [
            [
                "id" => 27068,
                "name" => json_encode([
                    "pl" => "Produkcja rękawic, w tym cięcie, szycie i wykończenie materiałów.",
                    "en" => "Production of gloves, including cutting, sewing, and finishing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27069,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów do produkcji rękawic, zapewniając ich odpowiednią jakość.",
                    "en" => "Selecting appropriate materials for glove production, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27070,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością wykonanych rękawic, kontrolowanie procesu szycia.",
                    "en" => "Supervising the quality of finished gloves, controlling the sewing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27071,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji rękawic w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing glove production processes to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27072,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn i narzędzi do produkcji rękawic.",
                    "en" => "Performing maintenance on machines and tools for glove production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27073,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji rękawic oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the production results of gloves and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KRAWCY_KUŚNIERZE_KAPELUSZNICY_I_POKREWNI = [
            [
                "id" => 27074,
                "name" => json_encode([
                    "pl" => "Produkcja odzieży, obuwia i akcesoriów skórzanych, w tym cięcie, szycie i wykończenie materiałów.",
                    "en" => "Production of clothing, footwear, and leather accessories, including cutting, sewing, and finishing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27075,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością wykonanych wyrobów skórzanych, kontrolowanie procesu produkcji.",
                    "en" => "Supervising the quality of finished leather products, controlling the production process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27076,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów do produkcji odzieży, obuwia i akcesoriów skórzanych, zapewniając ich odpowiednią jakość.",
                    "en" => "Selecting appropriate materials for the production of clothing, footwear, and leather accessories, ensuring their proper quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27077,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji odzieży, obuwia i akcesoriów skórzanych w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing production processes of clothing, footwear, and leather accessories to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27078,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do produkcji odzieży, obuwia i akcesoriów skórzanych.",
                    "en" => "Performing maintenance on machines for the production of clothing, footwear, and leather accessories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27079,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji odzieży, obuwia i akcesoriów skórzanych oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the production results of clothing, footwear, and leather accessories and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_WYROBÓW_SKÓRZANYCH = [
            [
                "id" => 27080,
                "name" => json_encode([
                    "pl" => "Opracowywanie technologii produkcji wyrobów skórzanych, takich jak odzież, obuwie, galanteria skórzana.",
                    "en" => "Developing production technologies for leather products, such as clothing, footwear, and leather goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27081,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji wyrobów skórzanych w celu zwiększenia efektywności i jakości.",
                    "en" => "Optimizing production processes of leather products to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27082,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem produkcji wyrobów skórzanych, nadzór nad jakością surowców i produktów.",
                    "en" => "Managing the production process of leather goods, supervising the quality of raw materials and products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27083,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich maszyn i narzędzi do produkcji wyrobów skórzanych.",
                    "en" => "Selecting appropriate machines and tools for the production of leather products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27084,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie procedur technologicznych oraz kontrola jakości produkcji.",
                    "en" => "Developing and implementing technological procedures and quality control of production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27085,
                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji przy wdrażaniu nowych technologii i procesów produkcyjnych.",
                    "en" => "Collaborating with the production department in implementing new technologies and production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONSTRUKTOR_ODZIEŻY = [
            [
                "id" => 27086,
                "name" => json_encode([
                    "pl" => "Tworzenie projektów konstrukcji odzieży, dobór materiałów i technologii produkcji.",
                    "en" => "Creating clothing design patterns, selecting materials and production technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27087,
                "name" => json_encode([
                    "pl" => "Opracowywanie wykrojów i konstrukcji odzieży w zależności od trendów mody i wymagań rynku.",
                    "en" => "Developing patterns and clothing designs based on fashion trends and market requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27088,
                "name" => json_encode([
                    "pl" => "Przygotowywanie specyfikacji odzieżowych, w tym materiałów, wymiarów i instrukcji technologicznych.",
                    "en" => "Preparing clothing specifications, including materials, dimensions, and technological instructions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27089,
                "name" => json_encode([
                    "pl" => "Konsultowanie projektów z zespołem produkcyjnym i działem jakości.",
                    "en" => "Consulting designs with the production team and quality control department."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27090,
                "name" => json_encode([
                    "pl" => "Testowanie prototypów odzieży i wprowadzanie poprawek do projektów konstrukcji.",
                    "en" => "Testing clothing prototypes and making corrections to design patterns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27091,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu produkcji, w celu zapewnienia zgodności z projektami konstrukcyjnymi.",
                    "en" => "Monitoring the production process to ensure compliance with design patterns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KROJCZY = [
            [
                "id" => 27092,
                "name" => json_encode([
                    "pl" => "Cięcie tkanin i materiałów do produkcji odzieży, zgodnie z przygotowanymi wykrojami.",
                    "en" => "Cutting fabrics and materials for clothing production, according to prepared patterns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27093,
                "name" => json_encode([
                    "pl" => "Kontrola jakości ciętych materiałów, zapewniając ich zgodność z wykrojami.",
                    "en" => "Controlling the quality of cut materials, ensuring they match the patterns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27094,
                "name" => json_encode([
                    "pl" => "Zarządzanie maszynami do cięcia materiałów, ustawianie parametrów maszyny.",
                    "en" => "Managing fabric cutting machines, setting machine parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27095,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu cięcia materiałów, aby uzyskać lepszą jakość i wydajność.",
                    "en" => "Optimizing the material cutting process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27096,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do cięcia materiałów.",
                    "en" => "Performing maintenance on fabric cutting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27097,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników cięcia materiałów oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the results of material cutting and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $HAFCIARKA = [
            [
                "id" => 27098,
                "name" => json_encode([
                    "pl" => "Wykonywanie haftów na materiałach, takich jak odzież, tkaniny dekoracyjne.",
                    "en" => "Performing embroidery on materials such as clothing and decorative fabrics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27099,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich nici i materiałów do haftowania.",
                    "en" => "Selecting appropriate threads and materials for embroidery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27100,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością haftów, kontrolowanie procesu haftowania.",
                    "en" => "Supervising the quality of embroidery, controlling the embroidery process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27101,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu haftowania w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the embroidery process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27102,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn hafciarskich.",
                    "en" => "Performing maintenance on embroidery machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27103,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników haftu i raportowanie jakości wyrobów.",
                    "en" => "Documenting the embroidery results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PARASOLNIK = [
            [
                "id" => 27104,
                "name" => json_encode([
                    "pl" => "Produkcja parasoli, w tym dobór materiałów, szycie, montaż i wykończenie.",
                    "en" => "Producing umbrellas, including selecting materials, sewing, assembly, and finishing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27105,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych parasoli, sprawdzanie ich funkcjonalności i estetyki.",
                    "en" => "Controlling the quality of finished umbrellas, checking their functionality and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27106,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem produkcji parasoli, koordynacja działań produkcyjnych.",
                    "en" => "Supervising the umbrella production process, coordinating production activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27107,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji parasoli w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the umbrella production process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27108,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn i narzędzi wykorzystywanych w produkcji parasoli.",
                    "en" => "Performing maintenance on machines and tools used in umbrella production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27109,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji parasoli i raportowanie jakości wyrobów.",
                    "en" => "Documenting the umbrella production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SZWACZKA_RĘCZNA = [
            [
                "id" => 27110,
                "name" => json_encode([
                    "pl" => "Szycie odzieży ręcznego wykonania, w tym łączenie materiałów za pomocą igły i nici.",
                    "en" => "Hand sewing clothing, including joining materials with needle and thread."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27111,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością szycia ręcznego, kontrolowanie precyzyjności i wytrzymałości szwów.",
                    "en" => "Supervising the quality of hand sewing, controlling the precision and durability of seams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27112,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich nici i materiałów do szycia ręcznego.",
                    "en" => "Selecting appropriate threads and materials for hand sewing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27113,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów szycia ręcznego w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the hand sewing process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27114,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi i materiałów wykorzystywanych do szycia ręcznego.",
                    "en" => "Performing maintenance on tools and materials used for hand sewing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27115,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników szycia ręcznego oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the results of hand sewing and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WYTWÓRCA_ABAŻURÓW = [
            [
                "id" => 27116,
                "name" => json_encode([
                    "pl" => "Produkcja abażurów, w tym cięcie, szycie i montowanie materiałów na stelażach.",
                    "en" => "Production of lampshades, including cutting, sewing, and assembling materials onto frames."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27117,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów do produkcji abażurów, zapewniając ich wysoką jakość.",
                    "en" => "Selecting appropriate materials for lampshade production, ensuring their high quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27118,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością wykonanych abażurów, kontrolowanie ich estetyki i funkcjonalności.",
                    "en" => "Supervising the quality of finished lampshades, controlling their aesthetics and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27119,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji abażurów w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing lampshade production processes to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27120,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi i maszyn do produkcji abażurów.",
                    "en" => "Performing maintenance on tools and machines for lampshade production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27121,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji abażurów oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting lampshade production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ŻAGLOWNIK = [
            [
                "id" => 27122,
                "name" => json_encode([
                    "pl" => "Produkcja żagli, w tym cięcie, szycie i montowanie materiałów na konstrukcje żaglowe.",
                    "en" => "Production of sails, including cutting, sewing, and assembling materials onto sail structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27123,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów do produkcji żagli, zapewniając ich trwałość i funkcjonalność.",
                    "en" => "Selecting appropriate materials for sail production, ensuring their durability and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27124,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością wykonanych żagli, kontrolowanie ich precyzji i wytrzymałości.",
                    "en" => "Supervising the quality of finished sails, controlling their precision and durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27125,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji żagli w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing sail production processes to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27126,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi i maszyn wykorzystywanych do produkcji żagli.",
                    "en" => "Performing maintenance on tools and machines used in sail production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27127,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji żagli oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting sail production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_SZWACZKI_HAFCIARKI_I_POKREWNI = [
            [
                "id" => 27128,
                "name" => json_encode([
                    "pl" => "Produkcja odzieży, w tym szycie, haftowanie i wykańczanie materiałów.",
                    "en" => "Production of clothing, including sewing, embroidery, and finishing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27129,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością odzieży, kontrolowanie procesów produkcji.",
                    "en" => "Supervising the quality of clothing, controlling production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27130,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów szycia i haftowania w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing sewing and embroidery processes to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27131,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn wykorzystywanych do szycia i haftowania.",
                    "en" => "Performing maintenance on machines used for sewing and embroidery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27132,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników szycia, haftowania i produkcji odzieży.",
                    "en" => "Documenting the results of sewing, embroidery, and clothing production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27133,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością gotowych wyrobów i kontrolowanie zgodności z projektem.",
                    "en" => "Supervising the quality of finished products and controlling compliance with designs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATORZY_MASZYN_DO_SZYCIA = [
            [
                "id" => 27134,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do szycia odzieży, w tym łączenie materiałów za pomocą nici.",
                    "en" => "Operating sewing machines for clothing, including joining materials with thread."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27135,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych szwów, zapewniając ich odpowiednią trwałość i estetykę.",
                    "en" => "Controlling the quality of seams, ensuring their durability and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27136,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyny do szycia, ustawianie prędkości i rodzaju ściegu.",
                    "en" => "Managing machine parameters, setting speed and stitch type."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27137,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu szycia w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the sewing process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27138,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do szycia.",
                    "en" => "Performing maintenance on sewing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27139,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników szycia oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the results of sewing and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_KLEJENIA_ELEMENTÓW_ODZIEŻY = [
            [
                "id" => 27140,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do klejenia elementów odzieży, takich jak łączenie tkanin za pomocą klejów.",
                    "en" => "Operating machines for bonding clothing elements, such as joining fabrics with adhesives."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27141,
                "name" => json_encode([
                    "pl" => "Kontrola jakości klejenia, zapewniając odpowiednią wytrzymałość połączeń.",
                    "en" => "Controlling the quality of bonding, ensuring the proper strength of connections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27142,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami urządzenia do klejenia, ustawianie temperatury i ciśnienia.",
                    "en" => "Managing machine parameters for bonding, setting temperature and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27143,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu klejenia w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the bonding process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27144,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji urządzeń do klejenia.",
                    "en" => "Performing maintenance on bonding machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27145,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników klejenia oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting bonding results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_WYKRAWIAJĄCYCH_I_NAWARSTWIAJĄCECH = [
            [
                "id" => 27146,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn wykrawających i nawarstwiających materiał, takie jak wykrawanie elementów odzieży.",
                    "en" => "Operating cutting and layering machines, such as cutting clothing parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27147,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykrojów i nawarstwień, zapewniając ich zgodność z projektem.",
                    "en" => "Controlling the quality of cuts and layers, ensuring their compliance with the design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27148,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami urządzenia wykrawającego i nawarstwiającego, ustawianie ciśnienia i prędkości.",
                    "en" => "Managing cutting and layering machine parameters, setting pressure and speed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27149,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów wykrawania i nawarstwiania w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing cutting and layering processes to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27150,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji urządzeń wykrawających i nawarstwiających.",
                    "en" => "Performing maintenance on cutting and layering machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27151,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników wykrawania i nawarstwiania oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting cutting and layering results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_WŁÓKIENNICZYCH_FUTRZARSKICH_I_SKÓRZANYCH = [
            [
                "id" => 27152,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji wyrobów włókienniczych, futrzarskich i skórzanych.",
                    "en" => "Operating machines for the production of textile, fur, and leather goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27153,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produktów wykonanych z materiałów włókienniczych, futrzarskich i skórzanych.",
                    "en" => "Controlling the quality of products made from textile, fur, and leather materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27154,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami produkcji wyrobów włókienniczych, futrzarskich i skórzanych.",
                    "en" => "Managing the production processes of textile, fur, and leather goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27155,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji wyrobów w celu zwiększenia wydajności i jakości.",
                    "en" => "Optimizing production processes to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27156,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn wykorzystywanych w produkcji wyrobów włókienniczych, futrzarskich i skórzanych.",
                    "en" => "Performing maintenance on machines used in the production of textile, fur, and leather goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27157,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji wyrobów oraz raportowanie jakości.",
                    "en" => "Documenting the production results of goods and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LAGOWACZ = [
            [
                "id" => 27158,
                "name" => json_encode([
                    "pl" => "Łączenie materiałów (np. tkanin, skór) z wykorzystaniem maszyn do szycia.",
                    "en" => "Joining materials (e.g., fabrics, leathers) using sewing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27159,
                "name" => json_encode([
                    "pl" => "Kontrola jakości połączeń materiałów, zapewniając ich trwałość i estetykę.",
                    "en" => "Controlling the quality of material joins, ensuring their durability and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27160,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem łączenia materiałów, monitorowanie ustawień maszyn.",
                    "en" => "Managing the material joining process, monitoring machine settings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27161,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu łączenia materiałów w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the material joining process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27162,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do łączenia materiałów.",
                    "en" => "Performing maintenance on machines for material joining."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27163,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników łączenia materiałów oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting the results of material joining and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POMOC_KRAWIECKA = [
            [
                "id" => 27164,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowywaniu materiałów do produkcji odzieży, takie jak cięcie tkanin i materiałów.",
                    "en" => "Assisting in preparing materials for clothing production, such as cutting fabrics and materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27165,
                "name" => json_encode([
                    "pl" => "Przygotowywanie i montowanie elementów odzieży do szycia, obsługa maszyn krawieckich.",
                    "en" => "Preparing and assembling clothing parts for sewing, operating sewing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27166,
                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów i elementów odzieży przed i po szyciu.",
                    "en" => "Controlling the quality of materials and clothing parts before and after sewing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27167,
                "name" => json_encode([
                    "pl" => "Pomoc w organizacji i utrzymaniu porządku na stanowisku pracy krawieckiej.",
                    "en" => "Assisting in organizing and maintaining cleanliness at the sewing workstation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27168,
                "name" => json_encode([
                    "pl" => "Pomoc przy obróbce materiałów, takie jak prasowanie i formowanie elementów odzieży.",
                    "en" => "Assisting with material processing, such as ironing and shaping clothing parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27169,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pracy pomocniczej i raportowanie jakości wyrobów.",
                    "en" => "Documenting the results of auxiliary work and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_PRZEMYSŁU_MODY = [
            [
                "id" => 27170,
                "name" => json_encode([
                    "pl" => "Opracowywanie projektów i technologii produkcji odzieży zgodnie z obowiązującymi trendami mody.",
                    "en" => "Developing designs and production technologies for clothing according to current fashion trends."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27171,
                "name" => json_encode([
                    "pl" => "Koordynowanie produkcji odzieży, nadzór nad procesem od projektu do finalnego produktu.",
                    "en" => "Coordinating clothing production, overseeing the process from design to finished product."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27172,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji odzieży, w tym dobór materiałów i technologii produkcyjnych.",
                    "en" => "Optimizing clothing production processes, including selecting materials and production technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27173,
                "name" => json_encode([
                    "pl" => "Współpraca z projektantami i działami produkcji w celu zapewnienia zgodności projektów z wymaganiami rynkowymi.",
                    "en" => "Collaborating with designers and production departments to ensure design compliance with market requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27174,
                "name" => json_encode([
                    "pl" => "Wykonywanie analiz technologicznych i optymalizacja procesów produkcji odzieży.",
                    "en" => "Conducting technological analyses and optimizing clothing production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27175,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością materiałów, wyrobów i procesów produkcyjnych w przemyśle mody.",
                    "en" => "Supervising the quality of materials, products, and production processes in the fashion industry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $REKODZIELNIK_WYROBÓW_WŁÓKIENNICZYCH = [
            [
                "id" => 27176,
                "name" => json_encode([
                    "pl" => "Produkcja ręcznie robionych wyrobów włókienniczych, takich jak tkaniny, ubrania i akcesoria.",
                    "en" => "Handcrafting textile products such as fabrics, clothing, and accessories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27177,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością wyrobów włókienniczych, kontrolowanie jakości materiałów i wykonania.",
                    "en" => "Supervising the quality of textile products, controlling the quality of materials and craftsmanship."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27178,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów do produkcji rękodzielniczych wyrobów włókienniczych.",
                    "en" => "Selecting appropriate materials for handcrafted textile products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27179,
                "name" => json_encode([
                    "pl" => "Wykonywanie technik rękodzielniczych w produkcji wyrobów, takich jak tkactwo czy haftowanie.",
                    "en" => "Performing handcraft techniques in product creation, such as weaving and embroidery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27180,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów rękodzielniczej produkcji włókienniczej, zapewnienie efektywności i jakości.",
                    "en" => "Optimizing handcrafted textile production processes to ensure efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27181,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji rękodzielniczych wyrobów włókienniczych oraz raportowanie jakości.",
                    "en" => "Documenting the results of handcrafted textile products and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TAPICER = [
            [
                "id" => 27182,
                "name" => json_encode([
                    "pl" => "Wykonywanie tapicerki, w tym obijanie mebli, np. sof, foteli, na materacach.",
                    "en" => "Performing upholstery work, including covering furniture such as sofas and chairs, and working with mattresses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27183,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów do tapicerki, takich jak tkaniny, skóra, gąbki.",
                    "en" => "Selecting appropriate materials for upholstery, such as fabrics, leather, and foam."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27184,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością wykonanej tapicerki, kontrolowanie jej trwałości i estetyki.",
                    "en" => "Supervising the quality of completed upholstery, controlling its durability and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27185,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów tapicerskich, zapewniając wysoką jakość i wydajność.",
                    "en" => "Optimizing upholstery processes to ensure high quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27186,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi i maszyn tapicerskich.",
                    "en" => "Performing maintenance on upholstery tools and machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27187,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników tapicerki i raportowanie jakości wykonania.",
                    "en" => "Documenting upholstery work results and reporting on workmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TAPICER_MEBLOWY = [
            [
                "id" => 27188,
                "name" => json_encode([
                    "pl" => "Tapicerowanie mebli, w tym wymiana tkanin, naprawa uszkodzonych elementów.",
                    "en" => "Upholstering furniture, including replacing fabrics and repairing damaged parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27189,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów tapicerskich i wypełnień do produkcji mebli.",
                    "en" => "Selecting appropriate upholstery materials and fillings for furniture production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27190,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością tapicerki meblowej oraz kontrolowanie wytrzymałości i estetyki.",
                    "en" => "Supervising the quality of furniture upholstery and controlling durability and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27191,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów tapicerowania mebli w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing furniture upholstery processes to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27192,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do tapicerowania mebli.",
                    "en" => "Performing maintenance on furniture upholstery machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27193,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników tapicerowania mebli oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting furniture upholstery results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_TAPICERZY_I_POKREWNI = [
            [
                "id" => 27194,
                "name" => json_encode([
                    "pl" => "Tapicerowanie mebli, w tym prace renowacyjne, dobór materiałów i wzorów.",
                    "en" => "Upholstering furniture, including renovation work, selecting materials and patterns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27195,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesami tapicerowania, monitorowanie jakości i terminowości wykonania.",
                    "en" => "Supervising upholstery processes, monitoring quality and timely completion."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27196,
                "name" => json_encode([
                    "pl" => "Przygotowywanie materiałów do tapicerowania, dobór odpowiednich wypełnień i materiałów tapicerskich.",
                    "en" => "Preparing materials for upholstery, selecting appropriate fillings and upholstery materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27197,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów tapicerowania mebli w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing furniture upholstery processes to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27198,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji narzędzi i maszyn tapicerskich.",
                    "en" => "Performing maintenance on upholstery tools and machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27199,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych prac tapicerskich oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting completed upholstery work and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BIELIŹNIARZ_KOŁDRZARZ = [
            [
                "id" => 27200,
                "name" => json_encode([
                    "pl" => "Produkcja bielizny i kołder, w tym krojenie materiałów, szycie i wykańczanie.",
                    "en" => "Production of lingerie and duvets, including cutting materials, sewing, and finishing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27201,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych bielizny i kołder, zapewniając ich wygodę i trwałość.",
                    "en" => "Controlling the quality of finished lingerie and duvets, ensuring their comfort and durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27202,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów do produkcji bielizny i kołder, zapewniając ich wysoką jakość.",
                    "en" => "Selecting appropriate materials for lingerie and duvet production, ensuring their high quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27203,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji bielizny i kołder w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing lingerie and duvet production processes to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27204,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do produkcji bielizny i kołder.",
                    "en" => "Performing maintenance on machines for lingerie and duvet production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27205,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji bielizny i kołder oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting lingerie and duvet production results and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_TAPICERSKICH = [
            [
                "id" => 27206,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn tapicerskich, takich jak maszyny do szycia i wykrawania materiałów.",
                    "en" => "Operating upholstery machines, such as sewing and cutting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27207,
                "name" => json_encode([
                    "pl" => "Kontrola jakości tapicerki meblowej, zapewniając zgodność z projektem i estetyką.",
                    "en" => "Controlling the quality of upholstered furniture, ensuring compliance with design and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27208,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn tapicerskich, ustawianie prędkości i ciśnienia.",
                    "en" => "Managing machine parameters for upholstery, setting speed and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27209,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów tapicerowania w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing upholstery processes to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27210,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn tapicerskich.",
                    "en" => "Performing maintenance on upholstery machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27211,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników pracy maszyn tapicerskich i raportowanie jakości wyrobów.",
                    "en" => "Documenting the results of upholstery machine work and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GARBARZ_SKÓR_BEZ_WŁOSA = [
            [
                "id" => 27212,
                "name" => json_encode([
                    "pl" => "Wyprawianie skór zwierzęcych bez włosa, w tym czyszczenie, namaczanie i garbowanie.",
                    "en" => "Tanning hairless animal skins, including cleaning, soaking, and tanning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27213,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem wyprawiania skór, kontrolowanie jakości surowca i gotowego materiału.",
                    "en" => "Managing the tanning process, controlling the quality of raw materials and finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27214,
                "name" => json_encode([
                    "pl" => "Nadzór nad doborem odpowiednich substancji chemicznych do wyprawiania skór.",
                    "en" => "Supervising the selection of appropriate chemicals for tanning skins."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27215,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wyprawiania skór w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the leather tanning process to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27216,
                "name" => json_encode([
                    "pl" => "Kontrola jakości gotowych skór, w tym ich elastyczności, twardości i kolorystyki.",
                    "en" => "Controlling the quality of finished skins, including their flexibility, hardness, and color."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27217,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu wyprawiania skór oraz raportowanie jakości gotowych materiałów.",
                    "en" => "Documenting the results of the tanning process and reporting on the quality of finished materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KLASYFIKATOR_SKÓR = [
            [
                "id" => 27218,
                "name" => json_encode([
                    "pl" => "Klasyfikacja skór zwierzęcych według jakości, rodzaju, grubości i stanu technicznego.",
                    "en" => "Classifying animal skins by quality, type, thickness, and technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27219,
                "name" => json_encode([
                    "pl" => "Dokonywanie inspekcji skór, identyfikowanie wad, uszkodzeń oraz jakości.",
                    "en" => "Inspecting skins, identifying defects, damages, and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27220,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji dotyczącej klasyfikacji skór, w tym raportów jakościowych.",
                    "en" => "Preparing documentation for skin classification, including quality reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27221,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem sortowania skór na podstawie norm i specyfikacji.",
                    "en" => "Managing the sorting process of skins based on standards and specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27222,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów klasyfikacji skór, w celu poprawy jakości i efektywności.",
                    "en" => "Optimizing the skin classification processes to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27223,
                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji, aby zapewnić prawidłową klasyfikację i jakość skór.",
                    "en" => "Collaborating with the production department to ensure proper classification and quality of skins."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONSERWATOR_SKÓR_SUROWYCH = [
            [
                "id" => 27224,
                "name" => json_encode([
                    "pl" => "Konserwacja skór surowych, w tym ich czyszczenie, suszenie i przechowywanie.",
                    "en" => "Conserving raw skins, including cleaning, drying, and storing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27225,
                "name" => json_encode([
                    "pl" => "Nadzór nad przechowywaniem skór surowych, zapewniając ich odpowiednie warunki.",
                    "en" => "Supervising the storage of raw skins, ensuring appropriate conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27226,
                "name" => json_encode([
                    "pl" => "Opracowywanie metod konserwacji skór surowych w celu zapewnienia ich długoterminowej trwałości.",
                    "en" => "Developing conservation methods for raw skins to ensure their long-term durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27227,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami konserwacji skór surowych, monitorowanie jakości i stanu technicznego.",
                    "en" => "Managing raw skin conservation processes, monitoring quality and technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27228,
                "name" => json_encode([
                    "pl" => "Kontrola jakości skór surowych, identyfikowanie ewentualnych wad i uszkodzeń.",
                    "en" => "Controlling the quality of raw skins, identifying any defects and damages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27229,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesów konserwacji skór surowych oraz raportowanie jakości wyrobów.",
                    "en" => "Documenting raw skin conservation processes and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WYPRAWIACZ_SKÓR_FUTERKOWYCH = [
            [
                "id" => 27230,
                "name" => json_encode([
                    "pl" => "Wyprawianie skór futerkowych, w tym czyszczenie, garbowanie i przygotowywanie materiału.",
                    "en" => "Tanning fur skins, including cleaning, tanning, and preparing the material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27231,
                "name" => json_encode([
                    "pl" => "Kontrola jakości skór futerkowych, monitorowanie procesu wyprawiania.",
                    "en" => "Controlling the quality of fur skins, monitoring the tanning process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27232,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów wyprawiania skór futerkowych, zapewniając lepszą jakość i wydajność.",
                    "en" => "Optimizing fur skin tanning processes, ensuring better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27233,
                "name" => json_encode([
                    "pl" => "Zarządzanie doborem odpowiednich substancji do wyprawiania skór futerkowych.",
                    "en" => "Managing the selection of appropriate substances for tanning fur skins."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27234,
                "name" => json_encode([
                    "pl" => "Konserwacja skór futerkowych po procesie wyprawiania.",
                    "en" => "Conserving fur skins after the tanning process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27235,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu wyprawiania skór futerkowych oraz raportowanie jakości.",
                    "en" => "Documenting the results of fur skin tanning and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_WYPRAWIACZE_SKÓR_GARBARZE_I_POKREWNI = [
            [
                "id" => 27236,
                "name" => json_encode([
                    "pl" => "Wyprawianie skór, w tym dobór odpowiednich substancji do procesu wyprawiania.",
                    "en" => "Tanning skins, including selecting appropriate substances for the tanning process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27237,
                "name" => json_encode([
                    "pl" => "Kontrola jakości skór w różnych etapach procesu wyprawiania.",
                    "en" => "Controlling the quality of skins at various stages of the tanning process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27238,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji gotowych skór, ocena ich przydatności do produkcji.",
                    "en" => "Performing inspections of finished skins, assessing their suitability for production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27239,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów wyprawiania skór, zapewniając lepszą jakość i efektywność.",
                    "en" => "Optimizing the tanning processes to ensure better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27240,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn i urządzeń wykorzystywanych do wyprawiania skór.",
                    "en" => "Performing maintenance on machines and equipment used for tanning skins."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27241,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników wyprawiania skór oraz raportowanie jakości gotowych wyrobów.",
                    "en" => "Documenting the results of skin tanning and reporting on the quality of finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GARBARZ_SKÓR = [
            [
                "id" => 27242,
                "name" => json_encode([
                    "pl" => "Garbowanie skór zwierzęcych, w tym czyszczenie, przygotowywanie materiału i nadawanie mu trwałości.",
                    "en" => "Tanning animal hides, including cleaning, preparing the material, and making it durable."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27243,
                "name" => json_encode([
                    "pl" => "Nadzór nad całym procesem garbowania skór, kontrolowanie jakości i surowców.",
                    "en" => "Supervising the entire tanning process, controlling quality and raw materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27244,
                "name" => json_encode([
                    "pl" => "Wykonywanie różnych rodzajów garbowania skór, dostosowanych do ich przeznaczenia.",
                    "en" => "Performing different types of tanning, adapted to the intended use of the skins."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27245,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu garbowania skór, zapewniając lepszą jakość i efektywność.",
                    "en" => "Optimizing the tanning process to ensure better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27246,
                "name" => json_encode([
                    "pl" => "Zarządzanie doborem chemikaliów i innych substancji do procesu garbowania.",
                    "en" => "Managing the selection of chemicals and other substances for the tanning process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27247,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników garbowania skór oraz raportowanie jakości gotowych wyrobów.",
                    "en" => "Documenting the results of skin tanning and reporting on the quality of finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KALETNIK = [
            [
                "id" => 27248,
                "name" => json_encode([
                    "pl" => "Produkcja wyrobów skórzanych, takich jak torby, portfele, paski i inne akcesoria skórzane.",
                    "en" => "Production of leather goods, such as bags, wallets, belts, and other leather accessories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27249,
                "name" => json_encode([
                    "pl" => "Naprawa i renowacja wyrobów skórzanych, w tym wymiana uszkodzonych części i wymiana materiałów.",
                    "en" => "Repair and renovation of leather goods, including replacing damaged parts and materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27250,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów do produkcji wyrobów skórzanych, zapewniając ich wysoką jakość.",
                    "en" => "Selecting appropriate materials for the production of leather goods, ensuring their high quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27251,
                "name" => json_encode([
                    "pl" => "Szycie i łączenie materiałów skórzanych za pomocą narzędzi kaletniczych, takich jak igła i nić.",
                    "en" => "Sewing and joining leather materials using leatherworking tools, such as needle and thread."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27252,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów skórzanych, zapewniając odpowiednią trwałość, estetykę i funkcjonalność.",
                    "en" => "Controlling the quality of leather goods, ensuring proper durability, aesthetics, and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27253,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesu produkcji wyrobów skórzanych i raportowanie wyników.",
                    "en" => "Documenting the production process of leather goods and reporting results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RYMARZ = [
            [
                "id" => 27254,
                "name" => json_encode([
                    "pl" => "Produkcja wyrobów skórzanych, takich jak uprzęże, siodła, strzemiona i akcesoria jeździeckie.",
                    "en" => "Production of leather goods, such as harnesses, saddles, stirrups, and equestrian accessories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27255,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja wyrobów skórzanych, takich jak siodła, uprzęże i inne akcesoria jeździeckie.",
                    "en" => "Repair and maintenance of leather goods, such as saddles, harnesses, and other equestrian accessories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27256,
                "name" => json_encode([
                    "pl" => "Szycie, naprawianie i łączenie materiałów skórzanych za pomocą narzędzi rymarskich.",
                    "en" => "Sewing, repairing, and joining leather materials using saddler's tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27257,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów, takich jak skóra, do produkcji akcesoriów jeździeckich.",
                    "en" => "Selecting appropriate materials, such as leather, for the production of equestrian accessories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27258,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów rymarskich, zapewniając ich odpowiednią trwałość i funkcjonalność.",
                    "en" => "Controlling the quality of saddlery products, ensuring their proper durability and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27259,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji rymarskich wyrobów i raportowanie jakości wyrobów.",
                    "en" => "Documenting the production results of saddlery products and reporting on product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_GARBARZ = [
            [
                "id" => 27260,
                "name" => json_encode([
                    "pl" => "Opracowywanie i nadzorowanie procesów garbowania skór, w tym dobór odpowiednich substancji.",
                    "en" => "Developing and supervising leather tanning processes, including selecting appropriate substances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27261,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości skór w procesie garbowania i konserwacji.",
                    "en" => "Monitoring the quality of skins during tanning and conservation processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27262,
                "name" => json_encode([
                    "pl" => "Zarządzanie i nadzorowanie procesów produkcji skór garbowanych, zapewniając ich zgodność z normami jakości.",
                    "en" => "Managing and supervising the production of tanned leather, ensuring compliance with quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27263,
                "name" => json_encode([
                    "pl" => "Zastosowanie nowych technologii w procesie garbowania skór.",
                    "en" => "Applying new technologies in the leather tanning process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27264,
                "name" => json_encode([
                    "pl" => "Zarządzanie wyposażeniem i maszynami do garbowania skór.",
                    "en" => "Managing equipment and machines for leather tanning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27265,
                "name" => json_encode([
                    "pl" => "Kontrola i dokumentowanie wyników garbowania skór oraz raportowanie jakości.",
                    "en" => "Controlling and documenting the results of leather tanning and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RĘKODZIELNIK_WYROBÓW_SKÓRZANYCH = [
            [
                "id" => 27266,
                "name" => json_encode([
                    "pl" => "Produkcja ręcznie robionych wyrobów skórzanych, takich jak torby, paski i portfele.",
                    "en" => "Production of handcrafted leather goods, such as bags, belts, and wallets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27267,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością wykonanych wyrobów skórzanych, kontrolowanie estetyki i funkcjonalności.",
                    "en" => "Supervising the quality of handmade leather goods, controlling aesthetics and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27268,
                "name" => json_encode([
                    "pl" => "Tworzenie projektów wyrobów skórzanych, dostosowanych do indywidualnych potrzeb klientów.",
                    "en" => "Creating designs for leather goods, tailored to customers' individual needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27269,
                "name" => json_encode([
                    "pl" => "Szycie, haftowanie i inne techniki rękodzielnicze w produkcji wyrobów skórzanych.",
                    "en" => "Sewing, embroidery, and other handcrafted techniques in leather goods production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27270,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów rękodzielniczych w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing handcrafting processes to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27271,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników rękodzielniczej produkcji wyrobów skórzanych oraz raportowanie jakości.",
                    "en" => "Documenting the results of handcrafted leather goods production and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KALETNICY_RYMARZE_I_POKREWNI = [
            [
                "id" => 27272,
                "name" => json_encode([
                    "pl" => "Produkcja wyrobów skórzanych, takich jak torby, portfele, paski i inne akcesoria.",
                    "en" => "Production of leather goods, such as bags, wallets, belts, and other accessories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27273,
                "name" => json_encode([
                    "pl" => "Szycie i łączenie materiałów skórzanych w produkcji akcesoriów.",
                    "en" => "Sewing and joining leather materials in accessory production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27274,
                "name" => json_encode([
                    "pl" => "Naprawa i renowacja wyrobów skórzanych, takich jak torby, buty i akcesoria.",
                    "en" => "Repair and renovation of leather goods, such as bags, shoes, and accessories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27275,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych wyrobów skórzanych, zapewniając odpowiednią trwałość i estetykę.",
                    "en" => "Controlling the quality of finished leather goods, ensuring proper durability and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27276,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów i narzędzi do produkcji wyrobów skórzanych.",
                    "en" => "Selecting appropriate materials and tools for the production of leather goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27277,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesu produkcji i naprawy wyrobów skórzanych, raportowanie wyników.",
                    "en" => "Documenting the production and repair processes of leather goods, reporting results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_AGREGATÓW_NATRYSKOWYCH = [
            [
                "id" => 27278,
                "name" => json_encode([
                    "pl" => "Obsługa agregatów natryskowych do aplikacji substancji chemicznych na skóry.",
                    "en" => "Operating spraying units for applying chemicals onto leather."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27279,
                "name" => json_encode([
                    "pl" => "Nadzór nad równomiernym rozprowadzeniem substancji na powierzchni skór.",
                    "en" => "Supervising the even distribution of substances over the leather surface."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27280,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami agregatów natryskowych, takimi jak ciśnienie i natężenie strumienia.",
                    "en" => "Managing parameters of spray units such as pressure and flow rate."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27281,
                "name" => json_encode([
                    "pl" => "Kontrola jakości aplikacji substancji na skóry, zapewniając ich trwałość i równomierność.",
                    "en" => "Controlling the quality of chemical application on leather, ensuring its durability and evenness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27282,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji agregatów natryskowych i narzędzi do aplikacji substancji.",
                    "en" => "Performing maintenance on spray units and equipment for chemical application."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27283,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników natrysku i raportowanie jakości aplikacji.",
                    "en" => "Documenting spray results and reporting on application quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_URZĄDZEŃ_CHEMICZNEJ_OBRÓBKI_SKÓR = [
            [
                "id" => 27284,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń do chemicznej obróbki skór, takich jak maszyny do barwienia, impregnacji czy garbowania.",
                    "en" => "Operating machines and equipment for the chemical treatment of leather, such as machines for dyeing, impregnation, or tanning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27285,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem chemicznej obróbki skór, kontrolowanie parametrów technologicznych.",
                    "en" => "Managing the chemical leather treatment process, controlling technological parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27286,
                "name" => json_encode([
                    "pl" => "Kontrola jakości chemicznej obróbki skór, zapewniając zgodność z wymaganiami jakościowymi.",
                    "en" => "Controlling the quality of chemical leather treatment, ensuring compliance with quality requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27287,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów chemicznej obróbki skór w celu poprawy wydajności i jakości.",
                    "en" => "Optimizing the chemical leather treatment processes to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27288,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn i urządzeń do chemicznej obróbki skór.",
                    "en" => "Performing maintenance on machines and equipment for chemical leather treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27289,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników obróbki chemicznej skór oraz raportowanie jakości procesów.",
                    "en" => "Documenting the results of chemical leather treatment and reporting on process quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_URZĄDZEŃ_MECHANICZNEJ_OBRÓBKI_SKÓR = [
            [
                "id" => 27290,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do mechanicznej obróbki skór, takich jak maszyny do szlifowania, cięcia czy polerowania.",
                    "en" => "Operating machines for the mechanical treatment of leather, such as machines for grinding, cutting, or polishing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27291,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn do mechanicznej obróbki skór, ustawianie prędkości i ciśnienia.",
                    "en" => "Managing machine parameters for mechanical leather treatment, setting speed and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27292,
                "name" => json_encode([
                    "pl" => "Kontrola jakości mechanicznej obróbki skór, zapewniając ich odpowiednią twardość i teksturę.",
                    "en" => "Controlling the quality of mechanical leather treatment, ensuring proper hardness and texture."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27293,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów mechanicznej obróbki skór, poprawa wydajności i jakości.",
                    "en" => "Optimizing mechanical leather treatment processes to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27294,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn i urządzeń do mechanicznej obróbki skór.",
                    "en" => "Performing maintenance on machines and equipment for mechanical leather treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27295,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników obróbki mechanicznej skór oraz raportowanie jakości procesów.",
                    "en" => "Documenting the results of mechanical leather treatment and reporting on process quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_MASZYN_DO_WYPRAWIANIA_FUTER_I_SKÓR = [
            [
                "id" => 27296,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do wyprawiania futer i skór, w tym maszyny do czyszczenia i przygotowywania materiału.",
                    "en" => "Operating machines for tanning furs and leathers, including machines for cleaning and preparing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27297,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn do wyprawiania futer i skór, kontrolowanie temperatury i ciśnienia.",
                    "en" => "Managing machine parameters for tanning furs and leathers, controlling temperature and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27298,
                "name" => json_encode([
                    "pl" => "Kontrola jakości procesu wyprawiania futer i skór, zapewniając odpowiednią miękkość i trwałość.",
                    "en" => "Controlling the quality of fur and leather tanning processes, ensuring proper softness and durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27299,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów wyprawiania futer i skór w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing fur and leather tanning processes to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27300,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do wyprawiania futer i skór.",
                    "en" => "Performing maintenance on machines for tanning furs and leathers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27301,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu wyprawiania futer i skór oraz raportowanie jakości.",
                    "en" => "Documenting the results of the fur and leather tanning process and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_KALETNICZYCH = [
            [
                "id" => 27302,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn kaletniczych do produkcji wyrobów skórzanych, takich jak torby, portfele i paski.",
                    "en" => "Operating leatherworking machines for the production of leather goods, such as bags, wallets, and belts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27303,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wyrobów skórzanych produkowanych na maszynach kaletniczych.",
                    "en" => "Controlling the quality of leather goods produced on leatherworking machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27304,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn kaletniczych, ustawianie prędkości, ciśnienia i innych parametrów.",
                    "en" => "Managing leatherworking machine parameters, setting speed, pressure, and other parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27305,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji wyrobów skórzanych w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the production of leather goods to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27306,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn kaletniczych.",
                    "en" => "Performing maintenance on leatherworking machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27307,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji wyrobów skórzanych i raportowanie jakości.",
                    "en" => "Documenting the results of leather goods production and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $CHOLEWKARZ = [
            [
                "id" => 27308,
                "name" => json_encode([
                    "pl" => "Produkcja cholewek do obuwia, w tym cięcie, szycie i dopasowywanie materiałów skórzanych.",
                    "en" => "Production of shoe uppers, including cutting, sewing, and fitting leather materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27309,
                "name" => json_encode([
                    "pl" => "Szycie i montowanie cholewek do obuwia, zapewniając ich odpowiednią trwałość i estetykę.",
                    "en" => "Sewing and assembling shoe uppers, ensuring their durability and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27310,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów skórzanych do produkcji cholewek, takich jak skóra licowa czy zamsz.",
                    "en" => "Selecting appropriate leather materials for upper production, such as full-grain leather or suede."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27311,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonania cholewek, zapewniając odpowiednią jakość wykonania i pasowanie do konstrukcji obuwia.",
                    "en" => "Controlling the quality of uppers, ensuring proper craftsmanship and fitting to the shoe construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27312,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji cholewek w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the production of uppers to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27313,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesu produkcji cholewek oraz raportowanie jakości wykonania.",
                    "en" => "Documenting the production process of shoe uppers and reporting on craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OBUWNIK_MIAROWY = [
            [
                "id" => 27314,
                "name" => json_encode([
                    "pl" => "Produkcja obuwia na miarę, dopasowanego do indywidualnych potrzeb i wymiarów klienta.",
                    "en" => "Production of custom-made shoes tailored to the individual needs and measurements of the client."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27315,
                "name" => json_encode([
                    "pl" => "Sporządzanie pomiarów stóp klienta, dobór odpowiednich materiałów i fasonu obuwia.",
                    "en" => "Taking foot measurements, selecting appropriate materials and shoe style."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27316,
                "name" => json_encode([
                    "pl" => "Ręczne dopasowywanie obuwia, dostosowywanie go do wymiarów klienta.",
                    "en" => "Handcrafting shoes, adjusting them to fit the client’s measurements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27317,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonania obuwia miarowego, zapewniając jego komfort i trwałość.",
                    "en" => "Controlling the quality of custom-made shoes, ensuring comfort and durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27318,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji obuwia na miarę, zapewniając lepszą jakość i wydajność.",
                    "en" => "Optimizing the custom-made shoe production process, ensuring better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27319,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesu produkcji obuwia miarowego oraz raportowanie jakości wykonania.",
                    "en" => "Documenting the custom-made shoe production process and reporting on craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OBUWNIK_ORTOPEDYCZNY = [
            [
                "id" => 27320,
                "name" => json_encode([
                    "pl" => "Produkcja obuwia ortopedycznego, dostosowanego do indywidualnych potrzeb pacjenta.",
                    "en" => "Production of orthopedic shoes, tailored to the individual needs of the patient."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27321,
                "name" => json_encode([
                    "pl" => "Dostosowywanie obuwia ortopedycznego do stanu zdrowia pacjenta, wybór odpowiednich wkładek i materiałów.",
                    "en" => "Adjusting orthopedic shoes to the patient’s health condition, selecting appropriate insoles and materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27322,
                "name" => json_encode([
                    "pl" => "Konsultacja z lekarzami lub terapeutami w celu określenia specyficznych wymagań dla obuwia ortopedycznego.",
                    "en" => "Consulting with doctors or therapists to determine specific requirements for orthopedic shoes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27323,
                "name" => json_encode([
                    "pl" => "Wykonywanie poprawek w obuwiu ortopedycznym, aby zapewnić maksymalny komfort i funkcjonalność.",
                    "en" => "Making adjustments to orthopedic shoes to ensure maximum comfort and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27324,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji obuwia ortopedycznego, aby zapewnić wysoką jakość i precyzję wykonania.",
                    "en" => "Optimizing the production of orthopedic shoes to ensure high quality and precision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27325,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesu produkcji obuwia ortopedycznego oraz raportowanie wyników.",
                    "en" => "Documenting the production process of orthopedic shoes and reporting results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SZEWC = [
            [
                "id" => 27326,
                "name" => json_encode([
                    "pl" => "Naprawa obuwia, w tym wymiana podeszw, obcasów, naprawa szwów i innych elementów.",
                    "en" => "Repairing shoes, including replacing soles, heels, repairing seams and other components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27327,
                "name" => json_encode([
                    "pl" => "Szycie obuwia, w tym łączenie materiałów i naprawa istniejących elementów obuwia.",
                    "en" => "Sewing shoes, including joining materials and repairing existing parts of footwear."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27328,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja obuwia w celu wydłużenia jego trwałości i poprawy komfortu.",
                    "en" => "Repairing and maintaining shoes to extend their durability and improve comfort."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27329,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów naprawy obuwia w celu poprawy efektywności i jakości usług.",
                    "en" => "Optimizing shoe repair processes to improve service efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27330,
                "name" => json_encode([
                    "pl" => "Przygotowywanie materiałów do naprawy obuwia, takich jak skórzane wkładki, skórzane elementy.",
                    "en" => "Preparing materials for shoe repairs, such as leather insoles and leather components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27331,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesu naprawy obuwia i raportowanie wyników.",
                    "en" => "Documenting the shoe repair process and reporting the results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OBUWNIK = [
            [
                "id" => 27332,
                "name" => json_encode([
                    "pl" => "Produkcja obuwia, w tym cięcie materiałów, szycie, montowanie elementów obuwia.",
                    "en" => "Producing shoes, including cutting materials, sewing, and assembling shoe components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27333,
                "name" => json_encode([
                    "pl" => "Dobór materiałów do produkcji obuwia, takich jak skóra, guma, tkaniny.",
                    "en" => "Selecting materials for shoe production, such as leather, rubber, and textiles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27334,
                "name" => json_encode([
                    "pl" => "Kontrola jakości obuwia, zapewniając zgodność z wymaganiami jakościowymi i funkcjonalnością.",
                    "en" => "Controlling the quality of shoes, ensuring compliance with quality requirements and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27335,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji obuwia w celu uzyskania lepszej jakości i wydajności.",
                    "en" => "Optimizing the shoe production processes to achieve better quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27336,
                "name" => json_encode([
                    "pl" => "Przygotowywanie maszyn do produkcji obuwia, ustawianie parametrów produkcyjnych.",
                    "en" => "Preparing machines for shoe production, setting production parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27337,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesu produkcji obuwia oraz raportowanie jakości.",
                    "en" => "Documenting the shoe production process and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OBUWNICY_I_POKREWNI = [
            [
                "id" => 27338,
                "name" => json_encode([
                    "pl" => "Naprawa obuwia, w tym wymiana podeszw, obcasów i innych części.",
                    "en" => "Repairing shoes, including replacing soles, heels, and other parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27339,
                "name" => json_encode([
                    "pl" => "Wykonywanie obuwia na zamówienie, dostosowanego do indywidualnych potrzeb klienta.",
                    "en" => "Making custom shoes, tailored to the individual needs of the customer."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27340,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem produkcji obuwia, nadzorowanie jakości i etapów produkcji.",
                    "en" => "Managing the shoe production process, supervising quality and production stages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27341,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji obuwia, poprawa wydajności i jakości.",
                    "en" => "Optimizing shoe production processes, improving efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27342,
                "name" => json_encode([
                    "pl" => "Przygotowanie materiałów do produkcji obuwia, takich jak skóra, tkaniny i akcesoria.",
                    "en" => "Preparing materials for shoe production, such as leather, fabrics, and accessories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27343,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji obuwia oraz raportowanie jakości.",
                    "en" => "Documenting the results of shoe production and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_OBUWNIK = [
            [
                "id" => 27344,
                "name" => json_encode([
                    "pl" => "Opracowywanie technologii produkcji obuwia, w tym dobór materiałów i technologii wykonania.",
                    "en" => "Developing shoe production technologies, including selecting materials and manufacturing technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27345,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem produkcji obuwia, w tym nad kontrolą jakości i terminowością produkcji.",
                    "en" => "Supervising the shoe production process, including quality control and production timing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27346,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem technologicznym produkcji obuwia, optymalizacja procesów.",
                    "en" => "Managing the technological process of shoe production, optimizing processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27347,
                "name" => json_encode([
                    "pl" => "Współpraca z projektantami w zakresie opracowywania nowych modeli obuwia.",
                    "en" => "Cooperating with designers in developing new shoe models."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27348,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji obuwia w celu zwiększenia wydajności i jakości.",
                    "en" => "Optimizing the shoe production processes to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27349,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesów produkcji obuwia oraz przygotowywanie raportów jakościowych.",
                    "en" => "Documenting the shoe production processes and preparing quality reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_OBUWNICZYCH_URZĄDZEŃ_SZWALNICZYCH = [
            [
                "id" => 27350,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn szwalniczych do produkcji obuwia, takich jak maszyny do szycia cholewek.",
                    "en" => "Operating sewing machines for shoe production, such as machines for stitching uppers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27351,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonania szwów i łączenia materiałów skórzanych w produkcji obuwia.",
                    "en" => "Controlling the quality of seams and joining leather materials in shoe production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27352,
                "name" => json_encode([
                    "pl" => "Optymalizacja ustawień maszyny szwalniczej, w tym prędkości i napięcia nici.",
                    "en" => "Optimizing machine settings for sewing, including speed and thread tension."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27353,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn szwalniczych do produkcji obuwia.",
                    "en" => "Repairing and maintaining sewing machines for shoe production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27354,
                "name" => json_encode([
                    "pl" => "Monitorowanie i kontrola procesu szycia, zapewniając odpowiednią jakość wyrobów.",
                    "en" => "Monitoring and controlling the sewing process, ensuring proper product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27355,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników szycia oraz raportowanie jakości wykonania.",
                    "en" => "Documenting sewing results and reporting on craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_MONTAŻOWYCH_OBUWIA = [
            [
                "id" => 27356,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn montażowych do łączenia poszczególnych elementów obuwia, takich jak podeszw i cholewek.",
                    "en" => "Operating assembly machines to join various shoe components, such as soles and uppers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27357,
                "name" => json_encode([
                    "pl" => "Kontrola jakości montażu obuwia, zapewniając odpowiednie dopasowanie i stabilność elementów.",
                    "en" => "Controlling the quality of shoe assembly, ensuring proper fitting and stability of components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27358,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn montażowych, ustawianie siły nacisku, temperatury i innych parametrów.",
                    "en" => "Managing assembly machine parameters, setting pressure force, temperature, and other parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27359,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn montażowych w celu zapewnienia ciągłości produkcji.",
                    "en" => "Repairing and maintaining assembly machines to ensure production continuity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27360,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów montażu obuwia w celu zwiększenia efektywności i jakości.",
                    "en" => "Optimizing the shoe assembly processes to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27361,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników montażu obuwia oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting shoe assembly results and reporting quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_WYKRAWIAJĄCECH_ELEMENTY_OBUWIA = [
            [
                "id" => 27362,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn wykrawających do produkcji elementów obuwia, takich jak podeszwy i cholewki.",
                    "en" => "Operating cutting machines for producing shoe components, such as soles and uppers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27363,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn wykrawających, ustawianie ciśnienia i prędkości cięcia.",
                    "en" => "Managing cutting machine parameters, setting pressure and cutting speed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27364,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykrojów, zapewniając ich precyzyjne dopasowanie do projektowanych elementów obuwia.",
                    "en" => "Controlling the quality of cut parts, ensuring precise fitting to designed shoe components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27365,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn wykrawających w celu zapewnienia ich sprawności operacyjnej.",
                    "en" => "Repairing and maintaining cutting machines to ensure their operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27366,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wykrawania elementów obuwia, aby poprawić wydajność i jakość produkcji.",
                    "en" => "Optimizing the cutting process of shoe components to improve production efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27367,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesu wykrawania elementów obuwia oraz raportowanie wyników.",
                    "en" => "Documenting the cutting process of shoe components and reporting results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OBUWNIK_PRZEMYSŁOWY = [
            [
                "id" => 27368,
                "name" => json_encode([
                    "pl" => "Produkcja obuwia na dużą skalę w zakładach przemysłowych, zarządzanie procesami produkcyjnymi.",
                    "en" => "Mass production of shoes in industrial plants, managing production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27369,
                "name" => json_encode([
                    "pl" => "Zarządzanie liniami produkcyjnymi, kontrolowanie jakości obuwia na każdym etapie produkcji.",
                    "en" => "Managing production lines, controlling shoe quality at every stage of production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27370,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji obuwia, w celu zwiększenia wydajności i redukcji kosztów.",
                    "en" => "Optimizing shoe production processes to increase efficiency and reduce costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27371,
                "name" => json_encode([
                    "pl" => "Przygotowywanie maszyn i urządzeń do produkcji obuwia, ustawianie parametrów produkcyjnych.",
                    "en" => "Preparing machines and equipment for shoe production, setting production parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27372,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji obuwia oraz raportowanie jakości.",
                    "en" => "Documenting the results of shoe production and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27373,
                "name" => json_encode([
                    "pl" => "Nadzór nad całym procesem produkcji obuwia w zakładzie przemysłowym.",
                    "en" => "Supervising the entire shoe production process in an industrial plant."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_MASZYN_DO_PRODUKCJI_OBUWIA = [
            [
                "id" => 27374,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji obuwia, w tym maszyny do montażu, wykrawania i szycia.",
                    "en" => "Operating machines for shoe production, including machines for assembly, cutting, and sewing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27375,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkcji obuwia, zapewniając zgodność z wymaganiami jakościowymi.",
                    "en" => "Controlling the quality of shoe production, ensuring compliance with quality requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27376,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji obuwia w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing shoe production processes to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27377,
                "name" => json_encode([
                    "pl" => "Przygotowywanie maszyn i urządzeń do produkcji obuwia, zarządzanie parametrami produkcyjnymi.",
                    "en" => "Preparing machines and equipment for shoe production, managing production parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27378,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do produkcji obuwia.",
                    "en" => "Performing maintenance on machines for shoe production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27379,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji obuwia oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting shoe production results and reporting quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $CIĄGACZ_RUR = [
            [
                "id" => 27380,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do ciągania rur, w tym ustawianie parametrów maszyn i nadzorowanie procesu.",
                    "en" => "Operating machines for pipe drawing, including setting machine parameters and supervising the process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27381,
                "name" => json_encode([
                    "pl" => "Kontrola jakości rur w procesie ciągania, zapewniając ich odpowiednią średnicę, grubość i prostoliniowość.",
                    "en" => "Controlling the quality of pipes during the drawing process, ensuring proper diameter, thickness, and straightness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27382,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn do ciągania rur, kontrolowanie prędkości i ciśnienia.",
                    "en" => "Managing the machine parameters for pipe drawing, controlling speed and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27383,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do ciągania rur, zapewniając ich sprawność operacyjną.",
                    "en" => "Repairing and maintaining pipe drawing machines, ensuring their operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27384,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu ciągania rur, w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the pipe drawing process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27385,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu ciągania rur oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the pipe drawing process results and reporting quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $HARTOWNIK = [
            [
                "id" => 27386,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do hartowania materiałów, takich jak stal czy inne metale, w celu nadania im odpowiednich właściwości.",
                    "en" => "Operating machines for hardening materials, such as steel or other metals, to give them the desired properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27387,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami hartowania, takimi jak temperatura, czas i ciśnienie.",
                    "en" => "Managing hardening parameters, such as temperature, time, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27388,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością hartowania, zapewniając odpowiednie właściwości mechaniczne i chemiczne materiałów.",
                    "en" => "Supervising the quality of hardening, ensuring the proper mechanical and chemical properties of materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27389,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu hartowania w celu poprawy wydajności i jakości.",
                    "en" => "Optimizing the hardening process to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27390,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do hartowania, zapewniając ich długotrwałą sprawność operacyjną.",
                    "en" => "Performing maintenance on hardening machines, ensuring their long-term operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27391,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu hartowania oraz raportowanie jakości wykonania.",
                    "en" => "Documenting the results of the hardening process and reporting on craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_AGREGATÓW_DO_OBRÓBKI_CIEPLNEJ = [
            [
                "id" => 27392,
                "name" => json_encode([
                    "pl" => "Obsługa agregatów do obróbki cieplnej materiałów, takich jak stali, w celu nadania im odpowiednich właściwości.",
                    "en" => "Operating heat treatment units for materials, such as steel, to give them the desired properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27393,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami obróbki cieplnej, kontrolowanie temperatury, czasu i atmosfery.",
                    "en" => "Managing heat treatment parameters, controlling temperature, time, and atmosphere."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27394,
                "name" => json_encode([
                    "pl" => "Kontrola jakości procesu obróbki cieplnej, zapewniając właściwe parametry dla uzyskania pożądanych właściwości materiałów.",
                    "en" => "Controlling the quality of the heat treatment process, ensuring proper parameters to achieve desired material properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27395,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów obróbki cieplnej w celu poprawy wydajności i jakości.",
                    "en" => "Optimizing heat treatment processes to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27396,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji agregatów do obróbki cieplnej, zapewniając ich sprawność operacyjną.",
                    "en" => "Performing maintenance on heat treatment units, ensuring operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27397,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu obróbki cieplnej oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the heat treatment process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_DO_PRODUKCJI_DRUTÓW_I_PRĘTÓW = [
            [
                "id" => 27398,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do produkcji drutów i prętów, w tym dobór parametrów i kontrola jakości.",
                    "en" => "Operating machines for the production of wires and rods, including parameter selection and quality control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27399,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn do produkcji drutów, takich jak prędkość i temperatura.",
                    "en" => "Managing machine parameters for wire production, such as speed and temperature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27400,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produkcji drutów i prętów, zapewniając odpowiednią wytrzymałość i średnicę.",
                    "en" => "Controlling the quality of wire and rod production, ensuring proper strength and diameter."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27401,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji drutów i prętów w celu poprawy wydajności i jakości.",
                    "en" => "Optimizing the production processes for wires and rods to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27402,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji maszyn do produkcji drutów i prętów, zapewniając ich długotrwałą sprawność.",
                    "en" => "Performing maintenance on machines for wire and rod production, ensuring their long-term functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27403,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji drutów i prętów oraz raportowanie jakości.",
                    "en" => "Documenting the production results of wires and rods and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_OBRÓBKI_PLASTYCZNEJ = [
            [
                "id" => 27404,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń do obróbki plastycznej, takich jak prasy, giętarki czy walcarki.",
                    "en" => "Operating machines and equipment for plastic deformation, such as presses, benders, or rollers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27405,
                "name" => json_encode([
                    "pl" => "Kontrola jakości obróbki plastycznej materiałów, takich jak metal, guma, czy tworzywa sztuczne.",
                    "en" => "Controlling the quality of plastic deformation of materials, such as metal, rubber, or plastics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27406,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn do obróbki plastycznej, ustawianie siły nacisku, temperatury i innych parametrów.",
                    "en" => "Managing machine parameters for plastic deformation, setting pressure force, temperature, and other parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27407,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn do obróbki plastycznej, zapewniając ich długotrwałą sprawność.",
                    "en" => "Repairing and maintaining machines for plastic deformation, ensuring their long-term functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27408,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów obróbki plastycznej materiałów w celu zwiększenia wydajności i jakości.",
                    "en" => "Optimizing the processes of plastic deformation to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27409,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników obróbki plastycznej materiałów oraz raportowanie jakości wykonania.",
                    "en" => "Documenting the results of plastic deformation of materials and reporting on craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_URZĄDZEŃ_ODLEWNICZYCH = [
            [
                "id" => 27410,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń odlewniczych, takich jak piece odlewnicze, formy odlewnicze i maszyny do wlewania stopów.",
                    "en" => "Operating foundry machines and equipment, such as furnaces, molds, and machines for pouring alloys."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27411,
                "name" => json_encode([
                    "pl" => "Kontrola jakości odlewów, zapewniając zgodność z wymaganiami jakościowymi i technicznymi.",
                    "en" => "Controlling the quality of castings, ensuring compliance with quality and technical requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27412,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn odlewniczych, takich jak temperatura, ciśnienie i czas odlewania.",
                    "en" => "Managing foundry machine parameters, such as temperature, pressure, and casting time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27413,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn odlewniczych, zapewniając ich sprawność operacyjną.",
                    "en" => "Repairing and maintaining foundry machines, ensuring their operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27414,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów odlewniczych, poprawa jakości i wydajności produkcji odlewów.",
                    "en" => "Optimizing foundry processes to improve quality and casting production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27415,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu odlewniczego oraz raportowanie jakości wykonania.",
                    "en" => "Documenting the foundry process results and reporting on craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYNY_ROZLEWNICZEJ = [
            [
                "id" => 27416,
                "name" => json_encode([
                    "pl" => "Obsługa maszyny rozlewniczej, w tym przygotowanie form i kontrola procesu wlewania materiału.",
                    "en" => "Operating the casting machine, including preparing molds and controlling the pouring process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27417,
                "name" => json_encode([
                    "pl" => "Kontrola jakości odlewów, zapewniając odpowiednią gładkość i wymiary elementów.",
                    "en" => "Controlling the quality of castings, ensuring proper smoothness and dimensions of the components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27418,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyny rozlewniczej, takim jak temperatura i ciśnienie.",
                    "en" => "Managing the casting machine parameters, such as temperature and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27419,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyny rozlewniczej, zapewniając jej niezawodność.",
                    "en" => "Repairing and maintaining the casting machine, ensuring its reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27420,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu odlewania, poprawa wydajności i jakości produkcji.",
                    "en" => "Optimizing the casting process, improving efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27421,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu rozlewania oraz raportowanie jakości odlewów.",
                    "en" => "Documenting the pouring process results and reporting on casting quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_PIECÓW_DO_OBRÓBKI_CIEPLNEJ = [
            [
                "id" => 27422,
                "name" => json_encode([
                    "pl" => "Obsługa pieców do obróbki cieplnej materiałów, takich jak metale, w celu nadania im odpowiednich właściwości.",
                    "en" => "Operating heat treatment furnaces for materials, such as metals, to give them the desired properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27423,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami pieców, takimi jak temperatura, czas obróbki i atmosfery.",
                    "en" => "Managing furnace parameters, such as temperature, treatment time, and atmosphere."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27424,
                "name" => json_encode([
                    "pl" => "Kontrola jakości obróbki cieplnej, zapewniając odpowiednią twardość, elastyczność i wytrzymałość materiałów.",
                    "en" => "Controlling the quality of heat treatment, ensuring proper hardness, flexibility, and strength of materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27425,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja pieców do obróbki cieplnej, zapewniając ich sprawność operacyjną.",
                    "en" => "Repairing and maintaining heat treatment furnaces, ensuring their operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27426,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów obróbki cieplnej, aby zwiększyć wydajność i jakość materiałów.",
                    "en" => "Optimizing heat treatment processes to improve material efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27427,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników obróbki cieplnej oraz raportowanie jakości wykonania.",
                    "en" => "Documenting the results of heat treatment and reporting on craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_CIĄGŁEGO_ODLEWANIA_STALI = [
            [
                "id" => 27428,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do ciągłego odlewania stali, w tym nadzór nad procesem odlewania.",
                    "en" => "Operating continuous casting equipment for steel, including supervising the casting process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27429,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu ciągłego odlewania stali, takimi jak temperatura i przepływ materiału.",
                    "en" => "Managing parameters of the continuous steel casting process, such as temperature and material flow."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27430,
                "name" => json_encode([
                    "pl" => "Kontrola jakości odlewów stali, zapewniając odpowiednią grubość, twardość i gładkość powierzchni.",
                    "en" => "Controlling the quality of steel castings, ensuring proper thickness, hardness, and surface smoothness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27431,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu ciągłego odlewania stali w celu poprawy wydajności i jakości.",
                    "en" => "Optimizing the continuous steel casting process to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27432,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do ciągłego odlewania stali, zapewniając ich długotrwałą sprawność.",
                    "en" => "Repairing and maintaining continuous steel casting equipment, ensuring long-term operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27433,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu ciągłego odlewania stali oraz raportowanie jakości.",
                    "en" => "Documenting the results of the continuous steel casting process and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_ELEKTROLITYCZNEGO_UZYSKIWANIA_METALI = [
            [
                "id" => 27434,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do elektrolitycznego uzyskiwania metali, takich jak miedź, nikiel czy złoto.",
                    "en" => "Operating equipment for electrolytic metal recovery, such as copper, nickel, or gold."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27435,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami elektrolitycznego procesu uzyskiwania metali, takimi jak prąd, napięcie i czas.",
                    "en" => "Managing parameters of the electrolytic metal recovery process, such as current, voltage, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27436,
                "name" => json_encode([
                    "pl" => "Kontrola jakości uzyskiwanych metali, zapewniając ich czystość i zgodność z wymaganiami.",
                    "en" => "Controlling the quality of recovered metals, ensuring their purity and compliance with requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27437,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu elektrolitycznego w celu poprawy wydajności i jakości uzyskiwanych metali.",
                    "en" => "Optimizing the electrolytic process to improve efficiency and quality of recovered metals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27438,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do elektrolitycznego uzyskiwania metali.",
                    "en" => "Repairing and maintaining equipment for electrolytic metal recovery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27439,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu elektrolitycznego uzyskiwania metali oraz raportowanie jakości.",
                    "en" => "Documenting the results of the electrolytic metal recovery process and reporting on quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_PRÓŻNIOWEGO_ODGAZOWANIA_STALI = [
            [
                "id" => 27440,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do próżniowego odgazowania stali w celu usunięcia zanieczyszczeń i poprawy jakości materiału.",
                    "en" => "Operating equipment for vacuum degassing of steel to remove impurities and improve material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27441,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami urządzeń próżniowego odgazowania stali, takim jak ciśnienie i temperatura.",
                    "en" => "Managing parameters of vacuum degassing equipment, such as pressure and temperature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27442,
                "name" => json_encode([
                    "pl" => "Kontrola jakości procesu próżniowego odgazowania, zapewniając poprawę właściwości mechanicznych stali.",
                    "en" => "Controlling the quality of the vacuum degassing process, ensuring improved mechanical properties of the steel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27443,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu próżniowego odgazowania stali w celu zwiększenia wydajności i jakości.",
                    "en" => "Optimizing the vacuum degassing process to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27444,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń próżniowego odgazowania stali.",
                    "en" => "Repairing and maintaining vacuum degassing equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27445,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu próżniowego odgazowania stali oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the vacuum degassing process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_PRZYGOTOWANIA_WSADU = [
            [
                "id" => 27446,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do przygotowania wsadu metalurgicznego, w tym wstępne oczyszczanie i przygotowanie materiałów.",
                    "en" => "Operating equipment for metallurgical charge preparation, including preliminary cleaning and preparation of materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27447,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami urządzeń do przygotowania wsadu, w tym kontrola dozowania surowców.",
                    "en" => "Managing equipment parameters for charge preparation, including controlling raw material dosing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27448,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wsadu, zapewniając odpowiednią czystość i skład materiałów.",
                    "en" => "Controlling the quality of the charge, ensuring proper cleanliness and material composition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27449,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu przygotowania wsadu w celu zwiększenia wydajności i jakości materiałów.",
                    "en" => "Optimizing the charge preparation process to increase efficiency and material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27450,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do przygotowania wsadu.",
                    "en" => "Repairing and maintaining equipment for charge preparation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27451,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników przygotowania wsadu oraz raportowanie jakości materiałów.",
                    "en" => "Documenting charge preparation results and reporting on material quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_WALCOWNI = [
            [
                "id" => 27452,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń walcowni do obróbki metali, takich jak walce, prasy, czy maszyny do ciągnienia.",
                    "en" => "Operating rolling mill equipment for metal processing, such as rollers, presses, or drawing machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27453,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn walcowniczych, ustawianie prędkości i temperatury.",
                    "en" => "Managing the parameters of rolling machines, setting speed and temperature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27454,
                "name" => json_encode([
                    "pl" => "Kontrola jakości walcowania, zapewniając odpowiednią grubość, twardość i wytrzymałość materiałów.",
                    "en" => "Controlling the quality of rolling, ensuring proper thickness, hardness, and durability of materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27455,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu walcowania w celu zwiększenia wydajności i jakości.",
                    "en" => "Optimizing the rolling process to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27456,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn walcowniczych, zapewniając ich sprawność operacyjną.",
                    "en" => "Repairing and maintaining rolling machines, ensuring their operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27457,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu walcowania oraz raportowanie jakości wykonania.",
                    "en" => "Documenting the rolling process results and reporting craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PIECOWY_NAGREWANIA_WSADU_W_WALCOWNI = [
            [
                "id" => 27458,
                "name" => json_encode([
                    "pl" => "Obsługa pieców do nagrzewania wsadu przed procesem walcowania.",
                    "en" => "Operating furnaces for preheating the charge before the rolling process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27459,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami pieca, takim jak temperatura i czas nagrzewania.",
                    "en" => "Managing furnace parameters, such as temperature and heating time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27460,
                "name" => json_encode([
                    "pl" => "Kontrola jakości nagrzewania wsadu, zapewniając odpowiednią temperaturę i jednorodność materiału.",
                    "en" => "Controlling the quality of charge heating, ensuring proper temperature and material uniformity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27461,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu nagrzewania wsadu w celu zwiększenia wydajności i jakości materiału.",
                    "en" => "Optimizing the charge heating process to increase material efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27462,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja pieców do nagrzewania wsadu.",
                    "en" => "Repairing and maintaining charge heating furnaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27463,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu nagrzewania wsadu oraz raportowanie jakości wykonania.",
                    "en" => "Documenting the charge heating process results and reporting quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PIECOWY_PIECA_LUKOWEGO = [
            [
                "id" => 27464,
                "name" => json_encode([
                    "pl" => "Obsługa pieca łukowego do wytopu metali, w tym kontrolowanie parametrów procesu.",
                    "en" => "Operating an electric arc furnace for metal smelting, including controlling process parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27465,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami pieca łukowego, takim jak prąd, napięcie i czas wytopu.",
                    "en" => "Managing electric arc furnace parameters, such as current, voltage, and smelting time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27466,
                "name" => json_encode([
                    "pl" => "Kontrola jakości procesu wytopu metali, zapewniając odpowiednią temperaturę i skład chemiczny stopu.",
                    "en" => "Controlling the quality of the metal smelting process, ensuring proper temperature and alloy composition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27467,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wytopu metali w piecu łukowym, w celu poprawy efektywności i jakości.",
                    "en" => "Optimizing the metal smelting process in the electric arc furnace to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27468,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja pieca łukowego, zapewniając jego sprawność operacyjną.",
                    "en" => "Repairing and maintaining the electric arc furnace, ensuring its operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27469,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu wytopu w piecu łukowym oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the results of the smelting process in the electric arc furnace and reporting quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PULPITOWY_WIELKICH_PIECÓW = [
            [
                "id" => 27470,
                "name" => json_encode([
                    "pl" => "Obsługa pulpitu sterowniczego wielkich pieców do wytopu żelaza, w tym monitorowanie procesów.",
                    "en" => "Operating the control panel of blast furnaces for iron smelting, including monitoring processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27471,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu wytopu, takimi jak temperatura, ciśnienie i czas.",
                    "en" => "Managing the parameters of the smelting process, such as temperature, pressure, and time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27472,
                "name" => json_encode([
                    "pl" => "Kontrola jakości procesu wytopu, zapewniając odpowiedni skład chemiczny stopu.",
                    "en" => "Controlling the quality of the smelting process, ensuring the proper chemical composition of the alloy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27473,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów wytopu w piecu, w celu zwiększenia wydajności i jakości.",
                    "en" => "Optimizing the smelting processes in the furnace to increase efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27474,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja pulpitów sterowniczych pieców wielkich.",
                    "en" => "Repairing and maintaining control panels of blast furnaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27475,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu wytopu w piecu wielkim oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the results of the smelting process in the blast furnace and reporting quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TŁOCZARZ_W_METALU = [
            [
                "id" => 27476,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do tłoczenia metalowych elementów, takich jak blachy i pręty.",
                    "en" => "Operating machines for stamping metal components, such as sheets and rods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27477,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn tłoczących, takim jak siła nacisku i czas tłoczenia.",
                    "en" => "Managing the parameters of stamping machines, such as pressure force and stamping time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27478,
                "name" => json_encode([
                    "pl" => "Kontrola jakości tłoczonych elementów, zapewniając odpowiednią grubość i kształt.",
                    "en" => "Controlling the quality of stamped parts, ensuring proper thickness and shape."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27479,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu tłoczenia w celu zwiększenia wydajności i jakości.",
                    "en" => "Optimizing the stamping process to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27480,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn tłoczących w celu zapewnienia ich niezawodności.",
                    "en" => "Repairing and maintaining stamping machines to ensure their reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27481,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu tłoczenia oraz raportowanie jakości wykonania.",
                    "en" => "Documenting the stamping process results and reporting craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WYTAPIACZ_METALI_NIEŻELAZNYCH = [
            [
                "id" => 27482,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do wytopu metali nieżelaznych, takich jak miedź, nikiel, aluminium.",
                    "en" => "Operating equipment for smelting non-ferrous metals, such as copper, nickel, and aluminum."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27483,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami wytopu, takim jak temperatura i czas wytopu metali nieżelaznych.",
                    "en" => "Managing smelting parameters, such as temperature and smelting time for non-ferrous metals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27484,
                "name" => json_encode([
                    "pl" => "Kontrola jakości stopu metali nieżelaznych, zapewniając ich odpowiednią czystość i skład.",
                    "en" => "Controlling the quality of non-ferrous metal alloys, ensuring proper purity and composition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27485,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wytopu metali nieżelaznych w celu zwiększenia wydajności i jakości.",
                    "en" => "Optimizing the smelting process for non-ferrous metals to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27486,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do wytopu metali nieżelaznych.",
                    "en" => "Repairing and maintaining equipment for smelting non-ferrous metals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27487,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu wytopu metali nieżelaznych oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the results of the non-ferrous metal smelting process and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WYTAPIACZ_STALI_SURÓWKI_I_ŻELAZOSTOPÓW = [
            [
                "id" => 27488,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do wytopu stali, surówki i żelazostopów, w tym kontrolowanie parametrów procesu.",
                    "en" => "Operating equipment for smelting steel, pig iron, and ferroalloys, including controlling process parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27489,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami wytopu, takim jak temperatura, czas i skład chemiczny stopu.",
                    "en" => "Managing smelting parameters, such as temperature, time, and alloy chemical composition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27490,
                "name" => json_encode([
                    "pl" => "Kontrola jakości stopu, zapewniając odpowiednią czystość i zgodność z wymaganiami.",
                    "en" => "Controlling the quality of the alloy, ensuring proper purity and compliance with requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27491,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu wytopu stali i żelazostopów w celu poprawy wydajności i jakości.",
                    "en" => "Optimizing the steel and ferroalloy smelting process to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27492,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do wytopu stali, surówki i żelazostopów.",
                    "en" => "Repairing and maintaining equipment for smelting steel, pig iron, and ferroalloys."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27493,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu wytopu oraz raportowanie jakości wykonania.",
                    "en" => "Documenting the results of the smelting process and reporting on craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_MASZYN_I_URZĄDZEŃ_DO_PRODUKCJI_I_PRZETWÓRSTWA_METALI = [
            [
                "id" => 27494,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń do produkcji i przetwórstwa metali, w tym do cięcia, walcowania i formowania.",
                    "en" => "Operating machines and equipment for metal production and processing, including cutting, rolling, and shaping."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27495,
                "name" => json_encode([
                    "pl" => "Kontrola jakości przetwórstwa metali, zapewniając odpowiednią grubość, twardość i wytrzymałość materiałów.",
                    "en" => "Controlling the quality of metal processing, ensuring proper thickness, hardness, and strength of materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27496,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn do produkcji metali, takim jak prędkość, temperatura i ciśnienie.",
                    "en" => "Managing machine parameters for metal production, such as speed, temperature, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27497,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn i urządzeń do produkcji i przetwórstwa metali.",
                    "en" => "Repairing and maintaining machines and equipment for metal production and processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27498,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji i przetwórstwa metali, w celu zwiększenia efektywności i jakości.",
                    "en" => "Optimizing metal production and processing processes to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27499,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji metali oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the results of metal production and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_URZĄDZEŃ_METALURGICZNYCH = [
            [
                "id" => 27500,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń metalurgicznych, takich jak piece, maszyny walcownicze, czy urządzenia do obróbki plastycznej.",
                    "en" => "Operating metallurgical machines and equipment, such as furnaces, rolling machines, and equipment for plastic deformation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27501,
                "name" => json_encode([
                    "pl" => "Kontrola jakości produktów metalurgicznych, zapewniając odpowiednią twardość, wytrzymałość i strukturę materiałów.",
                    "en" => "Controlling the quality of metallurgical products, ensuring proper hardness, strength, and material structure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27502,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn metalurgicznych, w tym ustawianie temperatury, ciśnienia, i prędkości produkcji.",
                    "en" => "Managing parameters of metallurgical machines, including setting temperature, pressure, and production speed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27503,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów metalurgicznych w celu poprawy jakości i wydajności produkcji.",
                    "en" => "Optimizing metallurgical processes to improve quality and production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27504,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń metalurgicznych, zapewniając ich sprawność operacyjną.",
                    "en" => "Repairing and maintaining metallurgical equipment to ensure operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27505,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu metalurgicznego i raportowanie wyników jakościowych.",
                    "en" => "Documenting metallurgical process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_URZĄDZEŃ_PRZEMYSŁU_METALURGICZNEGO_S = [
            [
                "id" => 27506,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń przemysłu metalurgicznego do produkcji i przetwórstwa metali.",
                    "en" => "Operating machines and equipment in the metallurgical industry for metal production and processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27507,
                "name" => json_encode([
                    "pl" => "Kontrola jakości procesów produkcji metali, takich jak stopniowanie, walcowanie i cięcie.",
                    "en" => "Controlling the quality of metal production processes, such as grading, rolling, and cutting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27508,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji metali w celu poprawy efektywności i jakości.",
                    "en" => "Optimizing metal production processes to improve efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27509,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn, w tym temperaturą, ciśnieniem i czasem obróbki.",
                    "en" => "Managing machine parameters, including temperature, pressure, and processing time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27510,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn i urządzeń przemysłu metalurgicznego.",
                    "en" => "Repairing and maintaining metallurgical industry machines and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27511,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesów przemysłu metalurgicznego i raportowanie wyników jakościowych.",
                    "en" => "Documenting the results of metallurgical industry processes and reporting quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_URZĄDZEŃ_HUTNICZYCH = [
            [
                "id" => 27512,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń hutniczych, takich jak piece, walcownie, czy urządzenia do cięcia i formowania metali.",
                    "en" => "Operating furnaces and equipment in the steel industry, such as furnaces, rolling mills, and cutting and forming devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27513,
                "name" => json_encode([
                    "pl" => "Kontrola jakości procesu hutniczego, zapewniając odpowiednią twardość, grubość i wytrzymałość stali.",
                    "en" => "Controlling the quality of the steelmaking process, ensuring proper hardness, thickness, and strength of steel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27514,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn hutniczych, takim jak temperatura, ciśnienie i prędkość.",
                    "en" => "Managing the parameters of steelmaking machines, such as temperature, pressure, and speed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27515,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń hutniczych, zapewniając ich długotrwałą sprawność operacyjną.",
                    "en" => "Repairing and maintaining steelmaking equipment, ensuring long-term operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27516,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów hutniczych, w celu zwiększenia wydajności i jakości produkcji stali.",
                    "en" => "Optimizing steelmaking processes to increase efficiency and steel production quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27517,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu hutniczego oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the steelmaking process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_ELEKTROFORETYCZNEGO_NAKŁADANIA_POWŁOK = [
            [
                "id" => 27518,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do elektroforetycznego nakładania powłok na metalach i innych materiałach.",
                    "en" => "Operating equipment for electrophoretic coating of metals and other materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27519,
                "name" => json_encode([
                    "pl" => "Kontrola parametrów procesu elektroforetycznego, takich jak napięcie, czas, temperatura.",
                    "en" => "Controlling electrophoretic process parameters, such as voltage, time, and temperature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27520,
                "name" => json_encode([
                    "pl" => "Zarządzanie jakością powłok, zapewniając odpowiednią grubość, trwałość i przyczepność powłoki.",
                    "en" => "Managing the quality of coatings, ensuring proper thickness, durability, and adhesion."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27521,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń elektroforetycznych w celu zapewnienia ich ciągłej sprawności.",
                    "en" => "Repairing and maintaining electrophoretic equipment to ensure continuous efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27522,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu elektroforetycznego nakładania powłok w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing the electrophoretic coating process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27523,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu elektroforetycznego oraz raportowanie jakości wykonania.",
                    "en" => "Documenting the electrophoretic process results and reporting on craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_EMALIOWANIA = [
            [
                "id" => 27524,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do emaliowania, nakładanie powłok emaliowych na metalowe i ceramiczne elementy.",
                    "en" => "Operating equipment for enameling, applying enamel coatings to metal and ceramic components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27525,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu emaliowania, takim jak temperatura, czas i grubość powłoki.",
                    "en" => "Managing enameling process parameters, such as temperature, time, and coating thickness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27526,
                "name" => json_encode([
                    "pl" => "Kontrola jakości powłok emaliowych, zapewniając odpowiednią twardość, trwałość i estetykę.",
                    "en" => "Controlling the quality of enamel coatings, ensuring proper hardness, durability, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27527,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń emaliujących, zapewniając ich sprawność operacyjną.",
                    "en" => "Repairing and maintaining enameling equipment to ensure operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27528,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu emaliowania w celu zwiększenia wydajności i jakości powłok.",
                    "en" => "Optimizing the enameling process to improve coating efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27529,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu emaliowania oraz raportowanie jakości wykonania.",
                    "en" => "Documenting the enameling process results and reporting on craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_NAKŁADANIA_POWŁOK_GALWANICZNYCH = [
            [
                "id" => 27530,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do nakładania powłok galwanicznych na metalowe powierzchnie.",
                    "en" => "Operating equipment for applying galvanic coatings on metal surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27531,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu galwanizacji, takimi jak czas, napięcie i natężenie prądu.",
                    "en" => "Managing parameters of the galvanization process, such as time, voltage, and current intensity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27532,
                "name" => json_encode([
                    "pl" => "Kontrola jakości powłok galwanicznych, zapewniając odpowiednią grubość, jednolitość i trwałość.",
                    "en" => "Controlling the quality of galvanic coatings, ensuring proper thickness, uniformity, and durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27533,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń galwanicznych, zapewniając ich długotrwałą sprawność operacyjną.",
                    "en" => "Repairing and maintaining galvanic equipment to ensure long-term operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27534,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu galwanizacji w celu poprawy wydajności i jakości powłok.",
                    "en" => "Optimizing the galvanization process to improve efficiency and coating quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27535,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu galwanizacji oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the galvanization process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_NATRYSKOWEGO_NAKŁADANIA_POWŁOK = [
            [
                "id" => 27536,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do natryskowego nakładania powłok, takich jak farby, lakiery, czy powłoki ochronne.",
                    "en" => "Operating equipment for spray coating applications, such as paints, varnishes, or protective coatings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27537,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu natryskiwania, takim jak ciśnienie, natężenie i czas aplikacji.",
                    "en" => "Managing parameters of the spraying process, such as pressure, flow rate, and application time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27538,
                "name" => json_encode([
                    "pl" => "Kontrola jakości nakładanych powłok, zapewniając odpowiednią grubość, pokrycie i trwałość.",
                    "en" => "Controlling the quality of applied coatings, ensuring proper thickness, coverage, and durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27539,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do natryskowego nakładania powłok.",
                    "en" => "Repairing and maintaining spray coating equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27540,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu natryskiwania w celu poprawy jakości powłok i zwiększenia wydajności.",
                    "en" => "Optimizing the spraying process to improve coating quality and increase efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27541,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu natryskiwania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the spraying process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PLATEROWANIA = [
            [
                "id" => 27542,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do platerowania, nakładanie cienkich warstw metali na powierzchnię innych materiałów.",
                    "en" => "Operating plating equipment, applying thin metal layers on the surface of other materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27543,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu platerowania, takimi jak prąd, napięcie, czas i temperatura.",
                    "en" => "Managing parameters of the plating process, such as current, voltage, time, and temperature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27544,
                "name" => json_encode([
                    "pl" => "Kontrola jakości platerowania, zapewniając odpowiednią grubość, przyczepność i trwałość powłok.",
                    "en" => "Controlling the quality of plating, ensuring proper thickness, adhesion, and durability of coatings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27545,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do platerowania, zapewniając ich sprawność operacyjną.",
                    "en" => "Repairing and maintaining plating equipment to ensure operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27546,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu platerowania w celu poprawy jakości powłok i wydajności.",
                    "en" => "Optimizing the plating process to improve coating quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27547,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu platerowania oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the plating process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_PRZYGOTOWANIA_POWIERZCHNI_DO_NAKŁADANIA_POWŁOK = [
            [
                "id" => 27548,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do przygotowania powierzchni przed nałożeniem powłok ochronnych lub dekoracyjnych.",
                    "en" => "Operating equipment for surface preparation before applying protective or decorative coatings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27549,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu przygotowania powierzchni, takim jak czyszczenie, szlifowanie, piaskowanie.",
                    "en" => "Managing surface preparation process parameters, such as cleaning, grinding, and sandblasting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27550,
                "name" => json_encode([
                    "pl" => "Kontrola jakości przygotowania powierzchni, zapewniając odpowiednią gładkość i czystość materiałów.",
                    "en" => "Controlling the quality of surface preparation, ensuring proper smoothness and cleanliness of materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27551,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do przygotowania powierzchni.",
                    "en" => "Repairing and maintaining surface preparation equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27552,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu przygotowania powierzchni w celu poprawy jakości i efektywności.",
                    "en" => "Optimizing the surface preparation process to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27553,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu przygotowania powierzchni oraz raportowanie jakości wykonania.",
                    "en" => "Documenting surface preparation process results and reporting on craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_DO_ZANURZENIOWEGO_NAKŁADANIA_POWŁOK = [
            [
                "id" => 27554,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do zanurzeniowego nakładania powłok, takich jak farby, lakiery, czy powłoki ochronne.",
                    "en" => "Operating equipment for immersion coating applications, such as paints, varnishes, or protective coatings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27555,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu zanurzeniowego, takim jak temperatura, czas zanurzenia i grubość powłoki.",
                    "en" => "Managing the immersion process parameters, such as temperature, immersion time, and coating thickness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27556,
                "name" => json_encode([
                    "pl" => "Kontrola jakości nakładanych powłok, zapewniając ich odpowiednią grubość, przyczepność i trwałość.",
                    "en" => "Controlling the quality of applied coatings, ensuring proper thickness, adhesion, and durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27557,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do zanurzeniowego nakładania powłok.",
                    "en" => "Repairing and maintaining immersion coating equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27558,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu zanurzeniowego w celu poprawy jakości powłok i zwiększenia wydajności.",
                    "en" => "Optimizing the immersion process to improve coating quality and increase efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27559,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu zanurzeniowego oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the immersion process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_URZĄDZEŃ_DO_OBRÓBKI_PO_WIERZCHNIOWEJ_METALI_I_NAKŁADANIA_POWŁOK = [
            [
                "id" => 27560,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do obróbki powierzchniowej metali, takich jak polerowanie, szlifowanie i nakładanie powłok ochronnych.",
                    "en" => "Operating equipment for surface treatment of metals, such as polishing, grinding, and applying protective coatings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27561,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn do obróbki powierzchniowej, takim jak prędkość, ciśnienie i czas obróbki.",
                    "en" => "Managing parameters of surface treatment machines, such as speed, pressure, and processing time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27562,
                "name" => json_encode([
                    "pl" => "Kontrola jakości powierzchni metali po obróbce, zapewniając odpowiednią gładkość, wytrzymałość i odporność na korozję.",
                    "en" => "Controlling the quality of metal surfaces after treatment, ensuring proper smoothness, durability, and corrosion resistance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27563,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do obróbki powierzchniowej metali i nakładania powłok.",
                    "en" => "Repairing and maintaining equipment for surface treatment and coating application."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27564,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów obróbki powierzchniowej i nakładania powłok, w celu poprawy jakości i wydajności.",
                    "en" => "Optimizing surface treatment and coating application processes to improve quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27565,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników obróbki powierzchniowej metali oraz raportowanie jakości wykonania.",
                    "en" => "Documenting the results of metal surface treatment and reporting craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BRĄZNIK = [
            [
                "id" => 27566,
                "name" => json_encode([
                    "pl" => "Produkcja i obróbka wyrobów brązowych, takich jak odlewy, elementy ozdobne czy przemysłowe.",
                    "en" => "Production and processing of bronze products, such as castings, decorative or industrial elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27567,
                "name" => json_encode([
                    "pl" => "Klejenie i formowanie brązu w celu uzyskania wyrobów o odpowiedniej twardości i kształcie.",
                    "en" => "Binding and forming bronze to produce items with appropriate hardness and shape."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27568,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem topnienia i odlewania brązu, w celu uzyskania materiałów o wymaganych właściwościach.",
                    "en" => "Supervising the melting and casting process of bronze to obtain materials with the required properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27569,
                "name" => json_encode([
                    "pl" => "Kontrola jakości brązu, zapewniając odpowiednią wytrzymałość, odporność na korozję i estetykę.",
                    "en" => "Controlling the quality of bronze, ensuring proper strength, corrosion resistance, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27570,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja narzędzi i urządzeń do obróbki brązu.",
                    "en" => "Repairing and maintaining tools and equipment for bronze processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27571,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji brązu oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the results of bronze production and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FORMIERZ_ODLEWNIK = [
            [
                "id" => 27572,
                "name" => json_encode([
                    "pl" => "Tworzenie form odlewniczych do produkcji wyrobów metalowych i innych materiałów.",
                    "en" => "Creating molds for casting metal products and other materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27573,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem wytwarzania form odlewniczych, zapewniając ich odpowiednią jakość i precyzję.",
                    "en" => "Supervising the mold manufacturing process, ensuring proper quality and precision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27574,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów do produkcji form, takich jak piasek, glina czy żywice.",
                    "en" => "Selecting appropriate materials for mold production, such as sand, clay, or resins."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27575,
                "name" => json_encode([
                    "pl" => "Kontrola jakości form odlewniczych, zapewniając ich trwałość i dokładność.",
                    "en" => "Controlling the quality of casting molds, ensuring their durability and accuracy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27576,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja form odlewniczych oraz urządzeń do ich produkcji.",
                    "en" => "Repairing and maintaining casting molds and equipment used in their production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27577,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji form i raportowanie jakości wykonania.",
                    "en" => "Documenting the results of mold production and reporting craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LUDWISARZ = [
            [
                "id" => 27578,
                "name" => json_encode([
                    "pl" => "Produkcja dzwonów, w tym przygotowanie form, odlanie i wykończenie dzwonu.",
                    "en" => "Production of bells, including mold preparation, casting, and finishing of the bell."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27579,
                "name" => json_encode([
                    "pl" => "Kontrola jakości dzwonów, zapewniając odpowiednią tonację, wytrzymałość i wygląd.",
                    "en" => "Controlling the quality of bells, ensuring proper tone, durability, and appearance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27580,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem topnienia metalu oraz odlewania dzwonów.",
                    "en" => "Managing the metal melting process and bell casting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27581,
                "name" => json_encode([
                    "pl" => "Formowanie detali dzwonów i ich łączenie w całość.",
                    "en" => "Shaping bell details and assembling them into a whole."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27582,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn i urządzeń używanych do produkcji dzwonów.",
                    "en" => "Repairing and maintaining machines and equipment used in bell production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27583,
                "name" => json_encode([
                    "pl" => "Dokumentowanie procesu produkcji dzwonów oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the bell production process and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MODELARZ_ODLEWNICZY = [
            [
                "id" => 27584,
                "name" => json_encode([
                    "pl" => "Tworzenie modeli odlewniczych do produkcji elementów metalowych, takich jak silniki, części maszyn i inne wyroby.",
                    "en" => "Creating casting models for the production of metal components, such as engines, machine parts, and other products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27585,
                "name" => json_encode([
                    "pl" => "Zarządzanie doborem materiałów modelarskich do produkcji form odlewniczych, takich jak piasek, żywice i glina.",
                    "en" => "Managing the selection of modeling materials for casting molds, such as sand, resins, and clay."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27586,
                "name" => json_encode([
                    "pl" => "Formowanie modeli, w tym przygotowanie wzorców do odlewania precyzyjnych części metalowych.",
                    "en" => "Forming models, including preparing patterns for casting precise metal components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27587,
                "name" => json_encode([
                    "pl" => "Kontrola jakości modeli odlewniczych, zapewniając ich zgodność z wymaganiami i specyfikacjami.",
                    "en" => "Controlling the quality of casting models, ensuring compliance with requirements and specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27588,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja narzędzi modelarskich oraz urządzeń używanych do produkcji form odlewniczych.",
                    "en" => "Repairing and maintaining modeling tools and equipment used in casting mold production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27589,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji modeli oraz raportowanie jakości wykonania.",
                    "en" => "Documenting the model production process and reporting on craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ZALEWACZ_FORM = [
            [
                "id" => 27590,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do zalewania form odlewniczych metalem w celu produkcji odlewów.",
                    "en" => "Operating equipment for pouring metal into casting molds to produce castings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27591,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu zalewania, takim jak temperatura metalu, czas wlewania i szybkość przepływu.",
                    "en" => "Managing pouring process parameters, such as metal temperature, pouring time, and flow rate."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27592,
                "name" => json_encode([
                    "pl" => "Kontrola jakości zalewania, zapewniając odpowiednią temperaturę, brak pęcherzyków powietrza i zgodność z wymaganiami.",
                    "en" => "Controlling the pouring quality, ensuring proper temperature, absence of air bubbles, and compliance with specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27593,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń do zalewania form.",
                    "en" => "Repairing and maintaining equipment for pouring into molds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27594,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu zalewania form, aby zwiększyć jakość odlewów i poprawić wydajność.",
                    "en" => "Optimizing the mold pouring process to improve casting quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27595,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu zalewania oraz raportowanie jakości wykonania.",
                    "en" => "Documenting the pouring process results and reporting on craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_FORMIERZE_ODLEWNICZY_I_POKREWNI = [
            [
                "id" => 27596,
                "name" => json_encode([
                    "pl" => "Formowanie elementów odlewniczych z wykorzystaniem różnych technik i materiałów, takich jak piasek, glina czy żywice.",
                    "en" => "Forming casting components using various techniques and materials such as sand, clay, or resins."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27597,
                "name" => json_encode([
                    "pl" => "Wykonywanie form do odlewania różnych metali, takich jak żelazo, stal czy metale kolorowe.",
                    "en" => "Creating molds for casting various metals, such as iron, steel, or non-ferrous metals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27598,
                "name" => json_encode([
                    "pl" => "Kontrola jakości form odlewniczych, zapewniając ich zgodność z wymaganiami technicznymi i specyfikacjami.",
                    "en" => "Controlling the quality of casting molds, ensuring compliance with technical requirements and specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27599,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja form odlewniczych oraz urządzeń do produkcji form.",
                    "en" => "Repairing and maintaining casting molds and equipment used for mold production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27600,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu formowania w celu poprawy jakości odlewów i zwiększenia wydajności.",
                    "en" => "Optimizing the molding process to improve casting quality and increase efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27601,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu formowania i raportowanie jakości wykonania.",
                    "en" => "Documenting the molding process results and reporting craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ODLEWNIK = [
            [
                "id" => 27602,
                "name" => json_encode([
                    "pl" => "Projektowanie procesów odlewania, dobór odpowiednich materiałów i technologii wytopu.",
                    "en" => "Designing casting processes, selecting appropriate materials and smelting technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27603,
                "name" => json_encode([
                    "pl" => "Nadzór nad produkcją odlewów, kontrola jakości i dopasowanie parametrów procesu.",
                    "en" => "Supervising the casting production, quality control, and adjusting process parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27604,
                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami i urządzeniami odlewniczymi, ich konserwacja oraz naprawa.",
                    "en" => "Managing casting tools and equipment, including maintenance and repair."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27605,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów odlewniczych w celu poprawy jakości i redukcji kosztów.",
                    "en" => "Optimizing casting processes to improve quality and reduce costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27606,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników odlewania i raportowanie wyników jakościowych.",
                    "en" => "Documenting the casting results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27607,
                "name" => json_encode([
                    "pl" => "Szkolenie personelu w zakresie procesów odlewniczych i technologii produkcji odlewów.",
                    "en" => "Training personnel on casting processes and casting production technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KOWAL_WYROBÓW_ZDOBNICZYCH = [
            [
                "id" => 27608,
                "name" => json_encode([
                    "pl" => "Produkcja wyrobów zdobniczych z metalu, takich jak biżuteria, ozdoby, elementy dekoracyjne.",
                    "en" => "Production of decorative metal items, such as jewelry, ornaments, and decorative elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27609,
                "name" => json_encode([
                    "pl" => "Obróbka metali za pomocą kowadła, młota i innych narzędzi kuźniczych w celu uzyskania pożądanych kształtów.",
                    "en" => "Metalworking using a hammer, anvil, and other forge tools to achieve the desired shapes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27610,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych wyrobów, zapewniając odpowiednią precyzję, estetykę i trwałość.",
                    "en" => "Controlling the quality of the finished products, ensuring proper precision, aesthetics, and durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27611,
                "name" => json_encode([
                    "pl" => "Projektowanie i wytwarzanie wyrobów zdobniczych zgodnie z wymaganiami klienta.",
                    "en" => "Designing and manufacturing decorative items according to customer specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27612,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja narzędzi kuźniczych oraz urządzeń do produkcji wyrobów zdobniczych.",
                    "en" => "Repairing and maintaining forge tools and equipment used for producing decorative items."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27613,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników produkcji wyrobów oraz raportowanie jakości wykonania.",
                    "en" => "Documenting the production results of items and reporting on craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_PRAS_KUŹNICZYCH = [
            [
                "id" => 27614,
                "name" => json_encode([
                    "pl" => "Obsługa pras kuźniczych do obróbki metali, takich jak tłoczenie, kucie i formowanie elementów metalowych.",
                    "en" => "Operating forge presses for metalworking, such as stamping, forging, and forming metal components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27615,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami pras kuźniczych, takim jak siła nacisku, prędkość i czas obróbki.",
                    "en" => "Managing parameters of forge presses, such as pressure force, speed, and processing time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27616,
                "name" => json_encode([
                    "pl" => "Kontrola jakości elementów metalowych po obróbce prasą, zapewniając odpowiednią grubość, kształt i wytrzymałość.",
                    "en" => "Controlling the quality of metal components after pressworking, ensuring proper thickness, shape, and strength."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27617,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja pras kuźniczych oraz innych maszyn kuźniczych.",
                    "en" => "Repairing and maintaining forge presses and other forging machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27618,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów kuźniczych w celu zwiększenia wydajności i jakości produkcji.",
                    "en" => "Optimizing forging processes to increase efficiency and product quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27619,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu kuźniczego oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting forging process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KOWALE_I_OPERATORZY_PRAS_KUŹNICZYCH = [
            [
                "id" => 27620,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac kowalskich, takich jak kucie, formowanie i walcowanie elementów metalowych.",
                    "en" => "Performing blacksmithing tasks such as forging, shaping, and rolling metal components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27621,
                "name" => json_encode([
                    "pl" => "Obsługa i nadzór nad prasami kuźniczymi i innymi urządzeniami do obróbki metali.",
                    "en" => "Operating and supervising forge presses and other equipment for metalworking."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27622,
                "name" => json_encode([
                    "pl" => "Kontrola jakości kowalskich elementów, zapewniając odpowiednią twardość, wytrzymałość i kształt.",
                    "en" => "Controlling the quality of blacksmithing components, ensuring proper hardness, durability, and shape."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27623,
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i regulacja maszyn kuźniczych, zapewniając ich długotrwałą sprawność.",
                    "en" => "Repairing, maintaining, and adjusting forging machines to ensure long-term operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27624,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów kuźniczych i produkcji elementów w celu zwiększenia jakości i efektywności.",
                    "en" => "Optimizing blacksmithing processes and production of components to increase quality and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27625,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników prac kowalskich i raportowanie jakości wykonania.",
                    "en" => "Documenting blacksmithing results and reporting on craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GALWANIZER = [
            [
                "id" => 27626,
                "name" => json_encode([
                    "pl" => "Nakładanie powłok galwanicznych na metalowe elementy, takie jak niklowanie, cynkowanie czy chromowanie.",
                    "en" => "Applying galvanic coatings on metal components, such as nickel plating, zinc plating, or chrome plating."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27627,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami procesu galwanizacji, takim jak czas, napięcie i temperatura.",
                    "en" => "Managing parameters of the galvanizing process, such as time, voltage, and temperature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27628,
                "name" => json_encode([
                    "pl" => "Kontrola jakości powłok galwanicznych, zapewniając ich odpowiednią grubość, trwałość i estetykę.",
                    "en" => "Controlling the quality of galvanic coatings, ensuring proper thickness, durability, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27629,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja urządzeń galwanicznych w celu zapewnienia ich sprawności operacyjnej.",
                    "en" => "Repairing and maintaining galvanic equipment to ensure its operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27630,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesu galwanizacji w celu poprawy jakości powłok i zwiększenia wydajności.",
                    "en" => "Optimizing the galvanizing process to improve coating quality and increase efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27631,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu galwanizacji oraz raportowanie wyników jakościowych.",
                    "en" => "Documenting the galvanizing process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $METALOPLASTYK = [
            [
                "id" => 27632,
                "name" => json_encode([
                    "pl" => "Wykonywanie ozdobnych i użytkowych wyrobów z metalu, takich jak rzeźby, balustrady, meble.",
                    "en" => "Making decorative and functional metal items, such as sculptures, railings, and furniture."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27633,
                "name" => json_encode([
                    "pl" => "Obróbka metali za pomocą narzędzi ręcznych i maszynowych w celu uzyskania odpowiednich kształtów.",
                    "en" => "Metalworking using hand tools and machinery to achieve appropriate shapes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27634,
                "name" => json_encode([
                    "pl" => "Rzeźbienie, kucie, gięcie i lutowanie metali w celu stworzenia unikalnych wyrobów.",
                    "en" => "Sculpting, forging, bending, and welding metals to create unique items."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27635,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów metaloplastycznych w celu poprawy jakości i estetyki wyrobów.",
                    "en" => "Optimizing metalworking processes to improve the quality and aesthetics of products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27636,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja narzędzi metaloplastycznych oraz maszyn wykorzystywanych w produkcji.",
                    "en" => "Repairing and maintaining metalworking tools and machinery used in production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27637,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesu metaloplastycznego oraz raportowanie jakości wykonania.",
                    "en" => "Documenting metalworking process results and reporting on craftsmanship quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_PRZEMYSŁU_METALURGICZNEGO = [
            [
                "id" => 27638,
                "name" => json_encode([
                    "pl" => "Projektowanie i nadzorowanie procesów metalurgicznych, takich jak wytop, odlewanie, walcowanie i spawanie.",
                    "en" => "Designing and supervising metallurgical processes such as smelting, casting, rolling, and welding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27639,
                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów metalurgicznych, takich jak stal, żelazo, czy metale nieżelazne.",
                    "en" => "Controlling the quality of metallurgical materials, such as steel, iron, or non-ferrous metals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27640,
                "name" => json_encode([
                    "pl" => "Zarządzanie parametrami maszyn metalurgicznych, takich jak temperatura, ciśnienie i czas procesu.",
                    "en" => "Managing parameters of metallurgical machines, such as temperature, pressure, and process time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27641,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów metalurgicznych w celu poprawy wydajności i jakości produkcji.",
                    "en" => "Optimizing metallurgical processes to improve production efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27642,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja maszyn oraz urządzeń wykorzystywanych w przemyśle metalurgicznym.",
                    "en" => "Repairing and maintaining machines and equipment used in the metallurgical industry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 27643,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników procesów metalurgicznych i raportowanie wyników jakościowych.",
                    "en" => "Documenting metallurgical process results and reporting on quality outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];

        DB::table('detail_projects')->insert(array_merge(
            $OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_TERMOSÓW,
            $OPERATOR_URZĄDZEŃ_PRZEMYSŁU_CERAMICZNEGO,
            $OPERATOR_URZĄDZEŃ_PRZEMYSŁU_SZKLARSKIEGO,
            $PRASOWACZ_CERAMIKI_ELEKTRONICZNEJ_I_ELEKTROTECHNICZNEJ,
            $PRZYGOTOWYWACZ_MAS_CERAMICZNYCH,
            $SUZARNIK_CERAMIKI_I_WYROBÓW_GIPSOWYCH,
            $SZLIFIERZ_CERAMIKI,
            $MASZYNOWY_SZLIFIERZ_POLEROWACZ_SZKŁA,
            $TOPIARZ_FRYTY,
            $TOPIARZ_MAS_MINERALNYCH,
            $TOPIARZ_SZKŁA,
            $WYPALACZ_SUROWCÓW_I_WYROBÓW_OGNIOTRWAŁYCH,
            $WYPALACZ_WYROBÓW_CERAMICZNYCH,
            $POZOSTALI_OPERATORZY_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_SZKLANYCH_I_CERAMICZNYCH,
            $CERAMIK_WYROBÓW_CERAMIKI_BUDOWLANEJ,
            $FORMOWACZ_ŚCIERNIC,
            $FORMOWACZ_WYROBÓW_CERAMICZNYCH,
            $GARNCARZ,
            $MODELARZ_ODLEWNIK_GIPSOWYCH_FORM_ROBOCZYCH,
            $ODLEWNIK_WYROBÓW_CERAMICZNYCH,
            $SORTOWACZ_BRAKARZ_CERAMIKI,
            $SZKLIWIERZ_CERAMIKI,
            $POZOSTALI_CERAMICY_I_POKREWNI,
            $CECHOWACZ_SKAL_I_ZNAKÓW_NA_SZKLE_ORAZ_NA_WYROBACH_Z_METALI,
            $FORMOWACZ_WYROBÓW_SZKLANYCH,
            $HUTNIK_DMUCHACZ_SZKŁA,
            $REĘCZNY_POLEROWACZ_SZKŁA,
            $SORTOWACZ_BRAKARZ_SZKŁA,
            $SZLIFIERZ_POLEROWACZ_SZKŁA_OPTYCZNEGO,
            $SZLIFIERZ_SZKŁA_GOSPODARCZEGO_I_TECHNICZNEGO,
            $SZLIFIERZ_SZKŁA_PŁASKIEGO,
            $POZOSTALI_FORMOWACZE_WYROBÓW_SZKLANYCH_KRAJACZE_I_SZLIFIERZE_SZKŁA,
            $WITRAŻOWNIK,
            $CERAMIK_WYROBÓW_UŻYTKOWYCH_I_OZDOBNYCH,
            $GILOSZER_SZKŁA,
            $GRAWER_SZKŁA,
            $LUSTRZARZ,
            $POZŁOTNIK,
            $RZEŹBIARZ_SZKŁA,
            $SZYLDZIAZR,
            $ZDOBNIK_CERAMIKI,
            $ZDOBNIK_SZKŁA,
            $GRAWER,
            $POZOSTALI_SZYLDZIARZE_GRAWERZY_I_ZDOBNICY_CERAMIKI_SZKŁA_I_POKREWNI,
            $FOTOGRAF_POLIGRAFICZNY,
            $FOTOGRAF_W_DRUKARNI_FILMOWEJ,
            $GILOSZER_POLIGRAFICZNY,
            $GRAWER_POLIGRAFICZNY,
            $KOMPUTEROWY_SKŁADACZ_TEKSTU,
            $MOLETOWNIK,
            $MONTAŻYSTA_REPRODUKCYJNY,
            $OPERATOR_DTP,
            $OPERATOR_FOTOSKŁADU,
            $OPERATOR_SKANERA_POLIGRAFICZNEGO,
            $RYSOWNIK_LITOGRAFICZNY,
            $RYTOWNIK,
            $TRAWIACZ_POLIGRAFICZNY,
            $POZOSTALI_PRACOWNICY_PRZY_PRACACH_PRZYGOTOWAWCZYCH_DO_DRUKU,
            $DRUKARZ_SITODRUKOWY,
            $DRUKARZ_TKANIN,
            $MASZYNISTA_MASZYN_FLEKSOGRAFICZNYCH,
            $MASZYNISTA_MASZYN_OFFSETOWYCH,
            $MASZYNISTA_MASZYN_TYPOGRAFICZNYCH,
            $MASZYNISTA_MASZYN_WKLĘSŁODRUKOWYCH,
            $OPERATOR_KSEROKOPIAREK,
            $POZOSTALI_DRUKARZE,
            $DRUKARZ,
            $DRUKARZ_FLEKSOGRAFICZNY,
            $DRUKARZ_OFFSETOWY,
            $INTROLIGATOR_GALANTERYJNY,
            $INTROLIGATOR_POLIGRAFICZNY,
            $OPERATOR_MASZYN_INTROLIGATORSKICH,
            $INTROLIGATOR,
            $POZOSTALI_INTROLIGATORZY_I_POKREWNI,
            $OPERATOR_PROCESÓW_INTROLIGATORSKICH,
            $TECHNIK_POLIGRAF,
            $TECHNIK_CYFROWYCH_PROCESÓW_GRAFICZNYCH,
            $TECHNIK_PROCESÓW_DRUKOWANIA,
            $TECHNIK_GRAFIKI_I_POLIGRAFII_CYFROWEJ,
            $FAJKARZ,
            $KOSZYKARZ_PLECIONKARZ,
            $LUBIANKARZ,
            $MODELARZ_WYROBÓW_PLECIONKARSKICH,
            $RZEŹBIARZ_W_DREWNIE,
            $SITARZ,
            $SZCZOTKARZ,
            $TRZCINIARZ,
            $POZOSTALI_RĘKODZIELNICY_WYROBÓW_Z_DREWNA,
            $IMPREGNATOR_DREWNA,
            $MANIPULANT_DREWNA_OKRĄGŁEGO,
            $MYGŁOWACZ,
            $PARZELNICZY_DREWNA,
            $SORTOWACZ_MATERIAŁÓW_DRZEWNYCH,
            $SUSZARNIOWY_DREWNA,
            $POZOSTALI_ROBOTNICY_PRZYGOTOWUJĄCY_DREWNO,
            $BEDNARZ,
            $GIECIARZ_DREWNA,
            $KOŁODZIEJ,
            $RENOWATOR_MEBLI_ARTYSTYCZNYCH,
            $STOLARZ,
            $STOLARZ_GALANTERII_DRZEWNEJ,
            $STOLARZ_MEBLI_ARTYSTYCZNYCH_I_WZORCOWYCH,
            $STOLARZ_MEBLOWY,
            $STOLARZ_MODELARZ_INSTRUMENTÓW_MUZYCZNYCH,
            $POZOSTALI_STOLARZE_MEBLOWI,
            $FREZER_DREWNA,
            $OPERATOR_MASZYN_DO_PRODUKCJI_WYROBÓW_DREWNIANYCH,
            $OPERATOR_URZĄDZEŃ_DO_POLEROWANIA_DREWNA,
            $POLEROWACZ_WYROBÓW_Z_DREWNA,
            $STRUGACZ_DREWNA,
            $SZLIFIERZ_MATERIAŁÓW_DRZEWNYCH,
            $TOKARZ_W_DREWNIE,
            $USTAWIACZ_MASZYN_DO_OBRÓBKI_DREWNA,
            $WIERTACZ_W_DREWNIE,
            $POZOSTALI_USTAWIACZE_I_OPERATORZY_MASZYN_DO_OBRÓBKI_DREWNA,
            $OPERATOR_MASZYN_DO_PRODUKCJI_PŁYT_I_SKELEJEK,
            $OPERATOR_PILAREK_DO_POZYSKIWANIA_TARCICY,
            $OPERATOR_PRAS_W_PRODUKCJI_DRZEWNEJ,
            $OPERATOR_SKLEJEKAREK_PŁYT_STOLARSKICH,
            $OPERATOR_SKRAWAREK_DREWNA,
            $OPERATOR_SPAJAREK_OKLEINY_I_ŁUSZCZKI,
            $OPERATOR_STRUGAREK_I_FREZAREK_DO_DREWNA,
            $OPERATOR_URZĄDZEŃ_DO_KOŃCOWEJ_OBRÓBKI_PŁYT,
            $STEROWNICZY_LINII_SZTAPLOWANIA_I_PAKIETOWANIA_TARCICY,
            $PILARZ,
            $TARTACZNIK,
            $POZOSTALI_OPERATORZY_MASZYN_I_URZĄDZEŃ_DO_OBRÓBKI_DREWNA,
            $MECHANIK_OPERATOR_MASZYN_DO_PRODUKCJI_DRZEWNEJ,
            $TECHNIK_TECHNOLOGII_DREWNA,
            $MONTER_WYROBÓW_Z_DREWNA,
            $OPERATOR_MASZYN_I_URZĄDZEŃ_WIKLINIARSKICH,
            $TECHNIK_PRZEMYSŁU_JACHTOWEGO,
            $TECHNIK_PRZEMYSŁU_DRZEWNEGO,
            $BIELIŹNIARZ,
            $GORSECiARKA,
            $KAPELUSZNIK_CZAPNIK,
            $KOŻUSZNIK,
            $KRAWIEC,
            $KUŚNIERZ,
            $MODYSTKA,
            $REKAWICZNIK,
            $POZOSTALI_KRAWCY_KUŚNIERZE_KAPELUSZNICY_I_POKREWNI,
            $TECHNIK_TECHNOLOGII_WYROBÓW_SKÓRZANYCH,
            $KONSTRUKTOR_ODZIEŻY,
            $KROJCZY,
            $HAFCIARKA,
            $PARASOLNIK,
            $SZWACZKA_RĘCZNA,
            $WYTWÓRCA_ABAŻURÓW,
            $ŻAGLOWNIK,
            $POZOSTALI_SZWACZKI_HAFCIARKI_I_POKREWNI,
            $OPERATORZY_MASZYN_DO_SZYCIA,
            $OPERATOR_URZĄDZEŃ_DO_KLEJENIA_ELEMENTÓW_ODZIEŻY,
            $OPERATOR_URZĄDZEŃ_WYKRAWIAJĄCYCH_I_NAWARSTWIAJĄCECH,
            $POZOSTALI_OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_WŁÓKIENNICZYCH_FUTRZARSKICH_I_SKÓRZANYCH,
            $LAGOWACZ,
            $POMOC_KRAWIECKA,
            $TECHNIK_PRZEMYSŁU_MODY,
            $REKODZIELNIK_WYROBÓW_WŁÓKIENNICZYCH,
            $TAPICER,
            $TAPICER_MEBLOWY,
            $POZOSTALI_TAPICERZY_I_POKREWNI,
            $BIELIŹNIARZ_KOŁDRZARZ,
            $OPERATOR_MASZYN_TAPICERSKICH,
            $GARBARZ_SKÓR_BEZ_WŁOSA,
            $KLASYFIKATOR_SKÓR,
            $KONSERWATOR_SKÓR_SUROWYCH,
            $WYPRAWIACZ_SKÓR_FUTERKOWYCH,
            $POZOSTALI_WYPRAWIACZE_SKÓR_GARBARZE_I_POKREWNI,
            $GARBARZ_SKÓR,
            $KALETNIK,
            $RYMARZ,
            $TECHNIK_GARBARZ,
            $RĘKODZIELNIK_WYROBÓW_SKÓRZANYCH,
            $POZOSTALI_KALETNICY_RYMARZE_I_POKREWNI,
            $OPERATOR_AGREGATÓW_NATRYSKOWYCH,
            $OPERATOR_MASZYN_I_URZĄDZEŃ_CHEMICZNEJ_OBRÓBKI_SKÓR,
            $OPERATOR_MASZYN_I_URZĄDZEŃ_MECHANICZNEJ_OBRÓBKI_SKÓR,
            $POZOSTALI_OPERATORZY_MASZYN_DO_WYPRAWIANIA_FUTER_I_SKÓR,
            $OPERATOR_URZĄDZEŃ_KALETNICZYCH,
            $CHOLEWKARZ,
            $OBUWNIK_MIAROWY,
            $OBUWNIK_ORTOPEDYCZNY,
            $SZEWC,
            $OBUWNIK,
            $POZOSTALI_OBUWNICY_I_POKREWNI,
            $TECHNIK_OBUWNIK,
            $OPERATOR_OBUWNICZYCH_URZĄDZEŃ_SZWALNICZYCH,
            $OPERATOR_URZĄDZEŃ_MONTAŻOWYCH_OBUWIA,
            $OPERATOR_URZĄDZEŃ_WYKRAWIAJĄCECH_ELEMENTY_OBUWIA,
            $OBUWNIK_PRZEMYSŁOWY,
            $POZOSTALI_OPERATORZY_MASZYN_DO_PRODUKCJI_OBUWIA,
            $CIĄGACZ_RUR,
            $HARTOWNIK,
            $OPERATOR_AGREGATÓW_DO_OBRÓBKI_CIEPLNEJ,
            $OPERATOR_MASZYN_DO_PRODUKCJI_DRUTÓW_I_PRĘTÓW,
            $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_OBRÓBKI_PLASTYCZNEJ,
            $OPERATOR_MASZYN_I_URZĄDZEŃ_ODLEWNICZYCH,
            $OPERATOR_MASZYNY_ROZLEWNICZEJ,
            $OPERATOR_PIECÓW_DO_OBRÓBKI_CIEPLNEJ,
            $OPERATOR_URZĄDZEŃ_DO_CIĄGŁEGO_ODLEWANIA_STALI,
            $OPERATOR_URZĄDZEŃ_DO_ELEKTROLITYCZNEGO_UZYSKIWANIA_METALI,
            $OPERATOR_URZĄDZEŃ_PRÓŻNIOWEGO_ODGAZOWANIA_STALI,
            $OPERATOR_URZĄDZEŃ_PRZYGOTOWANIA_WSADU,
            $OPERATOR_URZĄDZEŃ_WALCOWNI,
            $PIECOWY_NAGREWANIA_WSADU_W_WALCOWNI,
            $PIECOWY_PIECA_LUKOWEGO,
            $PULPITOWY_WIELKICH_PIECÓW,
            $TŁOCZARZ_W_METALU,
            $WYTAPIACZ_METALI_NIEŻELAZNYCH,
            $WYTAPIACZ_STALI_SURÓWKI_I_ŻELAZOSTOPÓW,
            $POZOSTALI_OPERATORZY_MASZYN_I_URZĄDZEŃ_DO_PRODUKCJI_I_PRZETWÓRSTWA_METALI,
            $OPERATOR_MASZYN_I_URZĄDZEŃ_METALURGICZNYCH,
            $OPERATOR_MASZYN_I_URZĄDZEŃ_PRZEMYSŁU_METALURGICZNEGO_S,
            $OPERATOR_MASZYN_I_URZĄDZEŃ_HUTNICZYCH,
            $OPERATOR_URZĄDZEŃ_DO_ELEKTROFORETYCZNEGO_NAKŁADANIA_POWŁOK,
            $OPERATOR_URZĄDZEŃ_DO_EMALIOWANIA,
            $OPERATOR_URZĄDZEŃ_DO_NAKŁADANIA_POWŁOK_GALWANICZNYCH,
            $OPERATOR_URZĄDZEŃ_DO_NATRYSKOWEGO_NAKŁADANIA_POWŁOK,
            $OPERATOR_URZĄDZEŃ_DO_PLATEROWANIA,
            $OPERATOR_URZĄDZEŃ_DO_PRZYGOTOWANIA_POWIERZCHNI_DO_NAKŁADANIA_POWŁOK,
            $OPERATOR_URZĄDZEŃ_DO_ZANURZENIOWEGO_NAKŁADANIA_POWŁOK,
            $POZOSTALI_OPERATORZY_URZĄDZEŃ_DO_OBRÓBKI_PO_WIERZCHNIOWEJ_METALI_I_NAKŁADANIA_POWŁOK,
            $BRĄZNIK,
            $FORMIERZ_ODLEWNIK,
            $LUDWISARZ,
            $MODELARZ_ODLEWNICZY,
            $ZALEWACZ_FORM,
            $POZOSTALI_FORMIERZE_ODLEWNICZY_I_POKREWNI,
            $TECHNIK_ODLEWNIK,
            $KOWAL_WYROBÓW_ZDOBNICZYCH,
            $OPERATOR_PRAS_KUŹNICZYCH,
            $POZOSTALI_KOWALE_I_OPERATORZY_PRAS_KUŹNICZYCH,
            $GALWANIZER,
            $METALOPLASTYK,
            $TECHNIK_PRZEMYSŁU_METALURGICZNEGO,
        ));

        Category::whereId('2043')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRODUKCJI_TERMOSÓW)->pluck('id')->toArray());
        Category::whereId('2044')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_PRZEMYSŁU_CERAMICZNEGO)->pluck('id')->toArray());
        Category::whereId('2045')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_PRZEMYSŁU_SZKLARSKIEGO)->pluck('id')->toArray());
        Category::whereId('2046')->first()->detailprojects()->attach(collect($PRASOWACZ_CERAMIKI_ELEKTRONICZNEJ_I_ELEKTROTECHNICZNEJ)->pluck('id')->toArray());
        Category::whereId('2047')->first()->detailprojects()->attach(collect($PRZYGOTOWYWACZ_MAS_CERAMICZNYCH)->pluck('id')->toArray());
        Category::whereId('2048')->first()->detailprojects()->attach(collect($SUZARNIK_CERAMIKI_I_WYROBÓW_GIPSOWYCH)->pluck('id')->toArray());
        Category::whereId('2049')->first()->detailprojects()->attach(collect($SZLIFIERZ_CERAMIKI)->pluck('id')->toArray());
        Category::whereId('2050')->first()->detailprojects()->attach(collect($MASZYNOWY_SZLIFIERZ_POLEROWACZ_SZKŁA)->pluck('id')->toArray());
        Category::whereId('2051')->first()->detailprojects()->attach(collect($TOPIARZ_FRYTY)->pluck('id')->toArray());
        Category::whereId('2052')->first()->detailprojects()->attach(collect($TOPIARZ_MAS_MINERALNYCH)->pluck('id')->toArray());
        Category::whereId('2053')->first()->detailprojects()->attach(collect($TOPIARZ_SZKŁA)->pluck('id')->toArray());
        Category::whereId('2054')->first()->detailprojects()->attach(collect($WYPALACZ_SUROWCÓW_I_WYROBÓW_OGNIOTRWAŁYCH)->pluck('id')->toArray());
        Category::whereId('2055')->first()->detailprojects()->attach(collect($WYPALACZ_WYROBÓW_CERAMICZNYCH)->pluck('id')->toArray());
        Category::whereId('2056')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_URZĄDZEŃ_DO_PRODUKCJI_WYROBÓW_SZKLANYCH_I_CERAMICZNYCH)->pluck('id')->toArray());
        Category::whereId('2057')->first()->detailprojects()->attach(collect($CERAMIK_WYROBÓW_CERAMIKI_BUDOWLANEJ)->pluck('id')->toArray());
        Category::whereId('2058')->first()->detailprojects()->attach(collect($FORMOWACZ_ŚCIERNIC)->pluck('id')->toArray());
        Category::whereId('2059')->first()->detailprojects()->attach(collect($FORMOWACZ_WYROBÓW_CERAMICZNYCH)->pluck('id')->toArray());
        Category::whereId('2060')->first()->detailprojects()->attach(collect($GARNCARZ)->pluck('id')->toArray());
        Category::whereId('2061')->first()->detailprojects()->attach(collect($MODELARZ_ODLEWNIK_GIPSOWYCH_FORM_ROBOCZYCH)->pluck('id')->toArray());
        Category::whereId('2062')->first()->detailprojects()->attach(collect($ODLEWNIK_WYROBÓW_CERAMICZNYCH)->pluck('id')->toArray());
        Category::whereId('2063')->first()->detailprojects()->attach(collect($SORTOWACZ_BRAKARZ_CERAMIKI)->pluck('id')->toArray());
        Category::whereId('2064')->first()->detailprojects()->attach(collect($SZKLIWIERZ_CERAMIKI)->pluck('id')->toArray());
        Category::whereId('2065')->first()->detailprojects()->attach(collect($POZOSTALI_CERAMICY_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2066')->first()->detailprojects()->attach(collect($CECHOWACZ_SKAL_I_ZNAKÓW_NA_SZKLE_ORAZ_NA_WYROBACH_Z_METALI)->pluck('id')->toArray());
        Category::whereId('2069')->first()->detailprojects()->attach(collect($FORMOWACZ_WYROBÓW_SZKLANYCH)->pluck('id')->toArray());
        Category::whereId('2070')->first()->detailprojects()->attach(collect($HUTNIK_DMUCHACZ_SZKŁA)->pluck('id')->toArray());
        Category::whereId('2072')->first()->detailprojects()->attach(collect($REĘCZNY_POLEROWACZ_SZKŁA)->pluck('id')->toArray());
        Category::whereId('2073')->first()->detailprojects()->attach(collect($SORTOWACZ_BRAKARZ_SZKŁA)->pluck('id')->toArray());
        Category::whereId('2074')->first()->detailprojects()->attach(collect($SZLIFIERZ_POLEROWACZ_SZKŁA_OPTYCZNEGO)->pluck('id')->toArray());
        Category::whereId('2075')->first()->detailprojects()->attach(collect($SZLIFIERZ_SZKŁA_GOSPODARCZEGO_I_TECHNICZNEGO)->pluck('id')->toArray());
        Category::whereId('2076')->first()->detailprojects()->attach(collect($SZLIFIERZ_SZKŁA_PŁASKIEGO)->pluck('id')->toArray());
        Category::whereId('2077')->first()->detailprojects()->attach(collect($POZOSTALI_FORMOWACZE_WYROBÓW_SZKLANYCH_KRAJACZE_I_SZLIFIERZE_SZKŁA)->pluck('id')->toArray());
        Category::whereId('2078')->first()->detailprojects()->attach(collect($WITRAŻOWNIK)->pluck('id')->toArray());
        Category::whereId('2079')->first()->detailprojects()->attach(collect($CERAMIK_WYROBÓW_UŻYTKOWYCH_I_OZDOBNYCH)->pluck('id')->toArray());
        Category::whereId('2080')->first()->detailprojects()->attach(collect($GILOSZER_SZKŁA)->pluck('id')->toArray());
        Category::whereId('2081')->first()->detailprojects()->attach(collect($GRAWER_SZKŁA)->pluck('id')->toArray());
        Category::whereId('2082')->first()->detailprojects()->attach(collect($LUSTRZARZ)->pluck('id')->toArray());
        Category::whereId('2083')->first()->detailprojects()->attach(collect($POZŁOTNIK)->pluck('id')->toArray());
        Category::whereId('2084')->first()->detailprojects()->attach(collect($RZEŹBIARZ_SZKŁA)->pluck('id')->toArray());
        Category::whereId('2085')->first()->detailprojects()->attach(collect($SZYLDZIAZR)->pluck('id')->toArray());
        Category::whereId('2086')->first()->detailprojects()->attach(collect($ZDOBNIK_CERAMIKI)->pluck('id')->toArray());
        Category::whereId('2087')->first()->detailprojects()->attach(collect($ZDOBNIK_SZKŁA)->pluck('id')->toArray());
        Category::whereId('2088')->first()->detailprojects()->attach(collect($GRAWER)->pluck('id')->toArray());
        Category::whereId('2089')->first()->detailprojects()->attach(collect($POZOSTALI_SZYLDZIARZE_GRAWERZY_I_ZDOBNICY_CERAMIKI_SZKŁA_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2093')->first()->detailprojects()->attach(collect($FOTOGRAF_POLIGRAFICZNY)->pluck('id')->toArray());
        Category::whereId('2094')->first()->detailprojects()->attach(collect($FOTOGRAF_W_DRUKARNI_FILMOWEJ)->pluck('id')->toArray());
        Category::whereId('2095')->first()->detailprojects()->attach(collect($GILOSZER_POLIGRAFICZNY)->pluck('id')->toArray());
        Category::whereId('2096')->first()->detailprojects()->attach(collect($GRAWER_POLIGRAFICZNY)->pluck('id')->toArray());
        Category::whereId('2097')->first()->detailprojects()->attach(collect($KOMPUTEROWY_SKŁADACZ_TEKSTU)->pluck('id')->toArray());
        Category::whereId('2098')->first()->detailprojects()->attach(collect($MOLETOWNIK)->pluck('id')->toArray());
        Category::whereId('2099')->first()->detailprojects()->attach(collect($MONTAŻYSTA_REPRODUKCYJNY)->pluck('id')->toArray());
        Category::whereId('2100')->first()->detailprojects()->attach(collect($OPERATOR_DTP)->pluck('id')->toArray());
        Category::whereId('2101')->first()->detailprojects()->attach(collect($OPERATOR_FOTOSKŁADU)->pluck('id')->toArray());
        Category::whereId('2102')->first()->detailprojects()->attach(collect($OPERATOR_SKANERA_POLIGRAFICZNEGO)->pluck('id')->toArray());
        Category::whereId('2103')->first()->detailprojects()->attach(collect($RYSOWNIK_LITOGRAFICZNY)->pluck('id')->toArray());
        Category::whereId('2104')->first()->detailprojects()->attach(collect($RYTOWNIK)->pluck('id')->toArray());
        Category::whereId('2105')->first()->detailprojects()->attach(collect($TRAWIACZ_POLIGRAFICZNY)->pluck('id')->toArray());
        Category::whereId('2106')->first()->detailprojects()->attach(collect($POZOSTALI_PRACOWNICY_PRZY_PRACACH_PRZYGOTOWAWCZYCH_DO_DRUKU)->pluck('id')->toArray());
        Category::whereId('2108')->first()->detailprojects()->attach(collect($DRUKARZ_SITODRUKOWY)->pluck('id')->toArray());
        Category::whereId('2109')->first()->detailprojects()->attach(collect($DRUKARZ_TKANIN)->pluck('id')->toArray());
        Category::whereId('2110')->first()->detailprojects()->attach(collect($MASZYNISTA_MASZYN_FLEKSOGRAFICZNYCH)->pluck('id')->toArray());
        Category::whereId('2111')->first()->detailprojects()->attach(collect($MASZYNISTA_MASZYN_OFFSETOWYCH)->pluck('id')->toArray());
        Category::whereId('2112')->first()->detailprojects()->attach(collect($MASZYNISTA_MASZYN_TYPOGRAFICZNYCH)->pluck('id')->toArray());
        Category::whereId('2113')->first()->detailprojects()->attach(collect($MASZYNISTA_MASZYN_WKLĘSŁODRUKOWYCH)->pluck('id')->toArray());
        Category::whereId('2114')->first()->detailprojects()->attach(collect($OPERATOR_KSEROKOPIAREK)->pluck('id')->toArray());
        Category::whereId('2115')->first()->detailprojects()->attach(collect($POZOSTALI_DRUKARZE)->pluck('id')->toArray());
        Category::whereId('2116')->first()->detailprojects()->attach(collect($DRUKARZ)->pluck('id')->toArray());
        Category::whereId('2117')->first()->detailprojects()->attach(collect($DRUKARZ_FLEKSOGRAFICZNY)->pluck('id')->toArray());
        Category::whereId('2118')->first()->detailprojects()->attach(collect($DRUKARZ_OFFSETOWY)->pluck('id')->toArray());
        Category::whereId('2120')->first()->detailprojects()->attach(collect($INTROLIGATOR_GALANTERYJNY)->pluck('id')->toArray());
        Category::whereId('2121')->first()->detailprojects()->attach(collect($INTROLIGATOR_POLIGRAFICZNY)->pluck('id')->toArray());
        Category::whereId('2122')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_INTROLIGATORSKICH)->pluck('id')->toArray());
        Category::whereId('2123')->first()->detailprojects()->attach(collect($INTROLIGATOR)->pluck('id')->toArray());
        Category::whereId('2124')->first()->detailprojects()->attach(collect($POZOSTALI_INTROLIGATORZY_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2125')->first()->detailprojects()->attach(collect($OPERATOR_PROCESÓW_INTROLIGATORSKICH)->pluck('id')->toArray());
        Category::whereId('2126')->first()->detailprojects()->attach(collect($TECHNIK_POLIGRAF)->pluck('id')->toArray());
        Category::whereId('2127')->first()->detailprojects()->attach(collect($TECHNIK_CYFROWYCH_PROCESÓW_GRAFICZNYCH)->pluck('id')->toArray());
        Category::whereId('2128')->first()->detailprojects()->attach(collect($TECHNIK_PROCESÓW_DRUKOWANIA)->pluck('id')->toArray());
        Category::whereId('2130')->first()->detailprojects()->attach(collect($TECHNIK_GRAFIKI_I_POLIGRAFII_CYFROWEJ)->pluck('id')->toArray());
        Category::whereId('2133')->first()->detailprojects()->attach(collect($FAJKARZ)->pluck('id')->toArray());
        Category::whereId('2134')->first()->detailprojects()->attach(collect($KOSZYKARZ_PLECIONKARZ)->pluck('id')->toArray());
        Category::whereId('2135')->first()->detailprojects()->attach(collect($LUBIANKARZ)->pluck('id')->toArray());
        Category::whereId('2136')->first()->detailprojects()->attach(collect($MODELARZ_WYROBÓW_PLECIONKARSKICH)->pluck('id')->toArray());
        Category::whereId('2137')->first()->detailprojects()->attach(collect($RZEŹBIARZ_W_DREWNIE)->pluck('id')->toArray());
        Category::whereId('2138')->first()->detailprojects()->attach(collect($SITARZ)->pluck('id')->toArray());
        Category::whereId('2139')->first()->detailprojects()->attach(collect($SZCZOTKARZ)->pluck('id')->toArray());
        Category::whereId('2140')->first()->detailprojects()->attach(collect($TRZCINIARZ)->pluck('id')->toArray());
        Category::whereId('2141')->first()->detailprojects()->attach(collect($POZOSTALI_RĘKODZIELNICY_WYROBÓW_Z_DREWNA)->pluck('id')->toArray());
        Category::whereId('2143')->first()->detailprojects()->attach(collect($IMPREGNATOR_DREWNA)->pluck('id')->toArray());
        Category::whereId('2144')->first()->detailprojects()->attach(collect($MANIPULANT_DREWNA_OKRĄGŁEGO)->pluck('id')->toArray());
        Category::whereId('2145')->first()->detailprojects()->attach(collect($MYGŁOWACZ)->pluck('id')->toArray());
        Category::whereId('2146')->first()->detailprojects()->attach(collect($PARZELNICZY_DREWNA)->pluck('id')->toArray());
        Category::whereId('2147')->first()->detailprojects()->attach(collect($SORTOWACZ_MATERIAŁÓW_DRZEWNYCH)->pluck('id')->toArray());
        Category::whereId('2148')->first()->detailprojects()->attach(collect($SUSZARNIOWY_DREWNA)->pluck('id')->toArray());
        Category::whereId('2149')->first()->detailprojects()->attach(collect($POZOSTALI_ROBOTNICY_PRZYGOTOWUJĄCY_DREWNO)->pluck('id')->toArray());
        Category::whereId('2151')->first()->detailprojects()->attach(collect($BEDNARZ)->pluck('id')->toArray());
        Category::whereId('2152')->first()->detailprojects()->attach(collect($GIECIARZ_DREWNA)->pluck('id')->toArray());
        Category::whereId('2153')->first()->detailprojects()->attach(collect($KOŁODZIEJ)->pluck('id')->toArray());
        Category::whereId('2154')->first()->detailprojects()->attach(collect($RENOWATOR_MEBLI_ARTYSTYCZNYCH)->pluck('id')->toArray());
        Category::whereId('2155')->first()->detailprojects()->attach(collect($STOLARZ)->pluck('id')->toArray());
        Category::whereId('2156')->first()->detailprojects()->attach(collect($STOLARZ_GALANTERII_DRZEWNEJ)->pluck('id')->toArray());
        Category::whereId('2157')->first()->detailprojects()->attach(collect($STOLARZ_MEBLI_ARTYSTYCZNYCH_I_WZORCOWYCH)->pluck('id')->toArray());
        Category::whereId('2158')->first()->detailprojects()->attach(collect($STOLARZ_MEBLOWY)->pluck('id')->toArray());
        Category::whereId('2159')->first()->detailprojects()->attach(collect($STOLARZ_MODELARZ_INSTRUMENTÓW_MUZYCZNYCH)->pluck('id')->toArray());
        Category::whereId('2160')->first()->detailprojects()->attach(collect($POZOSTALI_STOLARZE_MEBLOWI)->pluck('id')->toArray());
        Category::whereId('2162')->first()->detailprojects()->attach(collect($FREZER_DREWNA)->pluck('id')->toArray());
        Category::whereId('2163')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_DO_PRODUKCJI_WYROBÓW_DREWNIANYCH)->pluck('id')->toArray());
        Category::whereId('2164')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_POLEROWANIA_DREWNA)->pluck('id')->toArray());
        Category::whereId('2165')->first()->detailprojects()->attach(collect($POLEROWACZ_WYROBÓW_Z_DREWNA)->pluck('id')->toArray());
        Category::whereId('2166')->first()->detailprojects()->attach(collect($STRUGACZ_DREWNA)->pluck('id')->toArray());
        Category::whereId('2167')->first()->detailprojects()->attach(collect($SZLIFIERZ_MATERIAŁÓW_DRZEWNYCH)->pluck('id')->toArray());
        Category::whereId('2168')->first()->detailprojects()->attach(collect($TOKARZ_W_DREWNIE)->pluck('id')->toArray());
        Category::whereId('2169')->first()->detailprojects()->attach(collect($USTAWIACZ_MASZYN_DO_OBRÓBKI_DREWNA)->pluck('id')->toArray());
        Category::whereId('2170')->first()->detailprojects()->attach(collect($WIERTACZ_W_DREWNIE)->pluck('id')->toArray());
        Category::whereId('2171')->first()->detailprojects()->attach(collect($POZOSTALI_USTAWIACZE_I_OPERATORZY_MASZYN_DO_OBRÓBKI_DREWNA)->pluck('id')->toArray());
        Category::whereId('2173')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_DO_PRODUKCJI_PŁYT_I_SKELEJEK)->pluck('id')->toArray());
        Category::whereId('2174')->first()->detailprojects()->attach(collect($OPERATOR_PILAREK_DO_POZYSKIWANIA_TARCICY)->pluck('id')->toArray());
        Category::whereId('2175')->first()->detailprojects()->attach(collect($OPERATOR_PRAS_W_PRODUKCJI_DRZEWNEJ)->pluck('id')->toArray());
        Category::whereId('2176')->first()->detailprojects()->attach(collect($OPERATOR_SKLEJEKAREK_PŁYT_STOLARSKICH)->pluck('id')->toArray());
        Category::whereId('2177')->first()->detailprojects()->attach(collect($OPERATOR_SKRAWAREK_DREWNA)->pluck('id')->toArray());
        Category::whereId('2178')->first()->detailprojects()->attach(collect($OPERATOR_SPAJAREK_OKLEINY_I_ŁUSZCZKI)->pluck('id')->toArray());
        Category::whereId('2179')->first()->detailprojects()->attach(collect($OPERATOR_STRUGAREK_I_FREZAREK_DO_DREWNA)->pluck('id')->toArray());
        Category::whereId('2180')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_KOŃCOWEJ_OBRÓBKI_PŁYT)->pluck('id')->toArray());
        Category::whereId('2181')->first()->detailprojects()->attach(collect($STEROWNICZY_LINII_SZTAPLOWANIA_I_PAKIETOWANIA_TARCICY)->pluck('id')->toArray());
        Category::whereId('2182')->first()->detailprojects()->attach(collect($PILARZ)->pluck('id')->toArray());
        Category::whereId('2183')->first()->detailprojects()->attach(collect($TARTACZNIK)->pluck('id')->toArray());
        Category::whereId('2184')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_MASZYN_I_URZĄDZEŃ_DO_OBRÓBKI_DREWNA)->pluck('id')->toArray());
        Category::whereId('2185')->first()->detailprojects()->attach(collect($MECHANIK_OPERATOR_MASZYN_DO_PRODUKCJI_DRZEWNEJ)->pluck('id')->toArray());
        Category::whereId('2186')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_DREWNA)->pluck('id')->toArray());
        Category::whereId('2187')->first()->detailprojects()->attach(collect($MONTER_WYROBÓW_Z_DREWNA)->pluck('id')->toArray());
        Category::whereId('2189')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZĄDZEŃ_WIKLINIARSKICH)->pluck('id')->toArray());
        Category::whereId('2192')->first()->detailprojects()->attach(collect($TECHNIK_PRZEMYSŁU_JACHTOWEGO)->pluck('id')->toArray());
        Category::whereId('2193')->first()->detailprojects()->attach(collect($TECHNIK_PRZEMYSŁU_DRZEWNEGO)->pluck('id')->toArray());
        Category::whereId('2197')->first()->detailprojects()->attach(collect($BIELIŹNIARZ)->pluck('id')->toArray());
        Category::whereId('2198')->first()->detailprojects()->attach(collect($GORSECiARKA)->pluck('id')->toArray());
        Category::whereId('2199')->first()->detailprojects()->attach(collect($KAPELUSZNIK_CZAPNIK)->pluck('id')->toArray());
        Category::whereId('2200')->first()->detailprojects()->attach(collect($KOŻUSZNIK)->pluck('id')->toArray());
        Category::whereId('2201')->first()->detailprojects()->attach(collect($KRAWIEC)->pluck('id')->toArray());
        Category::whereId('2202')->first()->detailprojects()->attach(collect($KUŚNIERZ)->pluck('id')->toArray());
        Category::whereId('2203')->first()->detailprojects()->attach(collect($MODYSTKA)->pluck('id')->toArray());
        Category::whereId('2204')->first()->detailprojects()->attach(collect($REKAWICZNIK)->pluck('id')->toArray());
        Category::whereId('2205')->first()->detailprojects()->attach(collect($POZOSTALI_KRAWCY_KUŚNIERZE_KAPELUSZNICY_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2206')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_WYROBÓW_SKÓRZANYCH)->pluck('id')->toArray());
        Category::whereId('2208')->first()->detailprojects()->attach(collect($KONSTRUKTOR_ODZIEŻY)->pluck('id')->toArray());
        Category::whereId('2209')->first()->detailprojects()->attach(collect($KROJCZY)->pluck('id')->toArray());
        Category::whereId('2211')->first()->detailprojects()->attach(collect($HAFCIARKA)->pluck('id')->toArray());
        Category::whereId('2212')->first()->detailprojects()->attach(collect($PARASOLNIK)->pluck('id')->toArray());
        Category::whereId('2213')->first()->detailprojects()->attach(collect($SZWACZKA_RĘCZNA)->pluck('id')->toArray());
        Category::whereId('2214')->first()->detailprojects()->attach(collect($WYTWÓRCA_ABAŻURÓW)->pluck('id')->toArray());
        Category::whereId('2215')->first()->detailprojects()->attach(collect($ŻAGLOWNIK)->pluck('id')->toArray());
        Category::whereId('2216')->first()->detailprojects()->attach(collect($POZOSTALI_SZWACZKI_HAFCIARKI_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2217')->first()->detailprojects()->attach(collect($OPERATORZY_MASZYN_DO_SZYCIA)->pluck('id')->toArray());
        Category::whereId('2218')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_KLEJENIA_ELEMENTÓW_ODZIEŻY)->pluck('id')->toArray());
        Category::whereId('2219')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_WYKRAWIAJĄCYCH_I_NAWARSTWIAJĄCECH)->pluck('id')->toArray());
        Category::whereId('2220')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_MASZYN_DO_PRODUKCJI_WYROBÓW_WŁÓKIENNICZYCH_FUTRZARSKICH_I_SKÓRZANYCH)->pluck('id')->toArray());
        Category::whereId('2221')->first()->detailprojects()->attach(collect($LAGOWACZ)->pluck('id')->toArray());
        Category::whereId('2222')->first()->detailprojects()->attach(collect($POMOC_KRAWIECKA)->pluck('id')->toArray());
        Category::whereId('2223')->first()->detailprojects()->attach(collect($TECHNIK_PRZEMYSŁU_MODY)->pluck('id')->toArray());
        Category::whereId('2224')->first()->detailprojects()->attach(collect($REKODZIELNIK_WYROBÓW_WŁÓKIENNICZYCH)->pluck('id')->toArray());
        Category::whereId('2228')->first()->detailprojects()->attach(collect($TAPICER)->pluck('id')->toArray());
        Category::whereId('2229')->first()->detailprojects()->attach(collect($TAPICER_MEBLOWY)->pluck('id')->toArray());
        Category::whereId('2230')->first()->detailprojects()->attach(collect($POZOSTALI_TAPICERZY_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2231')->first()->detailprojects()->attach(collect($BIELIŹNIARZ_KOŁDRZARZ)->pluck('id')->toArray());
        Category::whereId('2232')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_TAPICERSKICH)->pluck('id')->toArray());
        Category::whereId('2235')->first()->detailprojects()->attach(collect($GARBARZ_SKÓR_BEZ_WŁOSA)->pluck('id')->toArray());
        Category::whereId('2236')->first()->detailprojects()->attach(collect($KLASYFIKATOR_SKÓR)->pluck('id')->toArray());
        Category::whereId('2237')->first()->detailprojects()->attach(collect($KONSERWATOR_SKÓR_SUROWYCH)->pluck('id')->toArray());
        Category::whereId('2238')->first()->detailprojects()->attach(collect($WYPRAWIACZ_SKÓR_FUTERKOWYCH)->pluck('id')->toArray());
        Category::whereId('2239')->first()->detailprojects()->attach(collect($POZOSTALI_WYPRAWIACZE_SKÓR_GARBARZE_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2240')->first()->detailprojects()->attach(collect($GARBARZ_SKÓR)->pluck('id')->toArray());
        Category::whereId('2241')->first()->detailprojects()->attach(collect($KALETNIK)->pluck('id')->toArray());
        Category::whereId('2242')->first()->detailprojects()->attach(collect($RYMARZ)->pluck('id')->toArray());

        Category::whereId('2243')->first()->detailprojects()->attach(collect($TECHNIK_GARBARZ)->pluck('id')->toArray());
        Category::whereId('2244')->first()->detailprojects()->attach(collect($RĘKODZIELNIK_WYROBÓW_SKÓRZANYCH)->pluck('id')->toArray());
        Category::whereId('2245')->first()->detailprojects()->attach(collect($POZOSTALI_KALETNICY_RYMARZE_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2247')->first()->detailprojects()->attach(collect($OPERATOR_AGREGATÓW_NATRYSKOWYCH)->pluck('id')->toArray());
        Category::whereId('2248')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZĄDZEŃ_CHEMICZNEJ_OBRÓBKI_SKÓR)->pluck('id')->toArray());
        Category::whereId('2249')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZĄDZEŃ_MECHANICZNEJ_OBRÓBKI_SKÓR)->pluck('id')->toArray());
        Category::whereId('2250')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_MASZYN_DO_WYPRAWIANIA_FUTER_I_SKÓR)->pluck('id')->toArray());
        Category::whereId('2251')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_KALETNICZYCH)->pluck('id')->toArray());
        Category::whereId('2254')->first()->detailprojects()->attach(collect($CHOLEWKARZ)->pluck('id')->toArray());
        Category::whereId('2255')->first()->detailprojects()->attach(collect($OBUWNIK_MIAROWY)->pluck('id')->toArray());
        Category::whereId('2256')->first()->detailprojects()->attach(collect($OBUWNIK_ORTOPEDYCZNY)->pluck('id')->toArray());
        Category::whereId('2257')->first()->detailprojects()->attach(collect($SZEWC)->pluck('id')->toArray());
        Category::whereId('2258')->first()->detailprojects()->attach(collect($OBUWNIK)->pluck('id')->toArray());
        Category::whereId('2259')->first()->detailprojects()->attach(collect($POZOSTALI_OBUWNICY_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2260')->first()->detailprojects()->attach(collect($TECHNIK_OBUWNIK)->pluck('id')->toArray());
        Category::whereId('2261')->first()->detailprojects()->attach(collect($OPERATOR_OBUWNICZYCH_URZĄDZEŃ_SZWALNICZYCH)->pluck('id')->toArray());
        Category::whereId('2262')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_MONTAŻOWYCH_OBUWIA)->pluck('id')->toArray());
        Category::whereId('2263')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_WYKRAWIAJĄCECH_ELEMENTY_OBUWIA)->pluck('id')->toArray());
        Category::whereId('2264')->first()->detailprojects()->attach(collect($OBUWNIK_PRZEMYSŁOWY)->pluck('id')->toArray());
        Category::whereId('2265')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_MASZYN_DO_PRODUKCJI_OBUWIA)->pluck('id')->toArray());
        Category::whereId('2268')->first()->detailprojects()->attach(collect($CIĄGACZ_RUR)->pluck('id')->toArray());
        Category::whereId('2269')->first()->detailprojects()->attach(collect($HARTOWNIK)->pluck('id')->toArray());
        Category::whereId('2270')->first()->detailprojects()->attach(collect($OPERATOR_AGREGATÓW_DO_OBRÓBKI_CIEPLNEJ)->pluck('id')->toArray());
        Category::whereId('2271')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_DO_PRODUKCJI_DRUTÓW_I_PRĘTÓW)->pluck('id')->toArray());
        Category::whereId('2272')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZĄDZEŃ_DO_OBRÓBKI_PLASTYCZNEJ)->pluck('id')->toArray());
        Category::whereId('2273')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZĄDZEŃ_ODLEWNICZYCH)->pluck('id')->toArray());
        Category::whereId('2274')->first()->detailprojects()->attach(collect($OPERATOR_MASZYNY_ROZLEWNICZEJ)->pluck('id')->toArray());
        Category::whereId('2275')->first()->detailprojects()->attach(collect($OPERATOR_PIECÓW_DO_OBRÓBKI_CIEPLNEJ)->pluck('id')->toArray());
        Category::whereId('2276')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_CIĄGŁEGO_ODLEWANIA_STALI)->pluck('id')->toArray());
        Category::whereId('2277')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_ELEKTROLITYCZNEGO_UZYSKIWANIA_METALI)->pluck('id')->toArray());
        Category::whereId('2278')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_PRÓŻNIOWEGO_ODGAZOWANIA_STALI)->pluck('id')->toArray());
        Category::whereId('2279')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_PRZYGOTOWANIA_WSADU)->pluck('id')->toArray());
        Category::whereId('2280')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_WALCOWNI)->pluck('id')->toArray());
        Category::whereId('2281')->first()->detailprojects()->attach(collect($PIECOWY_NAGREWANIA_WSADU_W_WALCOWNI)->pluck('id')->toArray());
        Category::whereId('2282')->first()->detailprojects()->attach(collect($PIECOWY_PIECA_LUKOWEGO)->pluck('id')->toArray());
        Category::whereId('2283')->first()->detailprojects()->attach(collect($PULPITOWY_WIELKICH_PIECÓW)->pluck('id')->toArray());
        Category::whereId('2284')->first()->detailprojects()->attach(collect($TŁOCZARZ_W_METALU)->pluck('id')->toArray());
        Category::whereId('2285')->first()->detailprojects()->attach(collect($WYTAPIACZ_METALI_NIEŻELAZNYCH)->pluck('id')->toArray());
        Category::whereId('2286')->first()->detailprojects()->attach(collect($WYTAPIACZ_STALI_SURÓWKI_I_ŻELAZOSTOPÓW)->pluck('id')->toArray());
        Category::whereId('2287')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_MASZYN_I_URZĄDZEŃ_DO_PRODUKCJI_I_PRZETWÓRSTWA_METALI)->pluck('id')->toArray());
        Category::whereId('2288')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZĄDZEŃ_METALURGICZNYCH)->pluck('id')->toArray());
        Category::whereId('2289')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZĄDZEŃ_PRZEMYSŁU_METALURGICZNEGO_S)->pluck('id')->toArray());
        Category::whereId('2290')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZĄDZEŃ_HUTNICZYCH)->pluck('id')->toArray());
        Category::whereId('2292')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_ELEKTROFORETYCZNEGO_NAKŁADANIA_POWŁOK)->pluck('id')->toArray());
        Category::whereId('2293')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_EMALIOWANIA)->pluck('id')->toArray());
        Category::whereId('2294')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_NAKŁADANIA_POWŁOK_GALWANICZNYCH)->pluck('id')->toArray());
        Category::whereId('2295')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_NATRYSKOWEGO_NAKŁADANIA_POWŁOK)->pluck('id')->toArray());
        Category::whereId('2296')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PLATEROWANIA)->pluck('id')->toArray());
        Category::whereId('2297')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_PRZYGOTOWANIA_POWIERZCHNI_DO_NAKŁADANIA_POWŁOK)->pluck('id')->toArray());
        Category::whereId('2298')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_DO_ZANURZENIOWEGO_NAKŁADANIA_POWŁOK)->pluck('id')->toArray());
        Category::whereId('2299')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_URZĄDZEŃ_DO_OBRÓBKI_PO_WIERZCHNIOWEJ_METALI_I_NAKŁADANIA_POWŁOK)->pluck('id')->toArray());
        Category::whereId('2301')->first()->detailprojects()->attach(collect($BRĄZNIK)->pluck('id')->toArray());
        Category::whereId('2302')->first()->detailprojects()->attach(collect($FORMIERZ_ODLEWNIK)->pluck('id')->toArray());
        Category::whereId('2303')->first()->detailprojects()->attach(collect($LUDWISARZ)->pluck('id')->toArray());
        Category::whereId('2304')->first()->detailprojects()->attach(collect($MODELARZ_ODLEWNICZY)->pluck('id')->toArray());
        Category::whereId('2305')->first()->detailprojects()->attach(collect($ZALEWACZ_FORM)->pluck('id')->toArray());
        Category::whereId('2306')->first()->detailprojects()->attach(collect($POZOSTALI_FORMIERZE_ODLEWNICZY_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2308')->first()->detailprojects()->attach(collect($TECHNIK_ODLEWNIK)->pluck('id')->toArray());
        Category::whereId('2310')->first()->detailprojects()->attach(collect($KOWAL_WYROBÓW_ZDOBNICZYCH)->pluck('id')->toArray());
        Category::whereId('2311')->first()->detailprojects()->attach(collect($OPERATOR_PRAS_KUŹNICZYCH)->pluck('id')->toArray());
        Category::whereId('2312')->first()->detailprojects()->attach(collect($POZOSTALI_KOWALE_I_OPERATORZY_PRAS_KUŹNICZYCH)->pluck('id')->toArray());
        Category::whereId('2313')->first()->detailprojects()->attach(collect($GALWANIZER)->pluck('id')->toArray());
        Category::whereId('2314')->first()->detailprojects()->attach(collect($METALOPLASTYK)->pluck('id')->toArray());
        Category::whereId('2315')->first()->detailprojects()->attach(collect($TECHNIK_PRZEMYSŁU_METALURGICZNEGO)->pluck('id')->toArray());

    }
}

