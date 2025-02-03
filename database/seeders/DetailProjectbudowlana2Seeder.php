<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectbudowlana2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $ARCHITEKT_KRAJOBRAZU = [


            [
            "id" => 21889,
                "name" => json_encode([
                    "pl" => "Projektowanie terenów zieleni, parków, ogrodów i innych przestrzeni publicznych.",
                    "en" => "Designing green areas, parks, gardens, and other public spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21890,

                "name" => json_encode([
                    "pl" => "Opracowywanie planów zagospodarowania przestrzennego w kontekście krajobrazu.",
                    "en" => "Preparing spatial development plans in the context of landscape."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21891,

                "name" => json_encode([
                    "pl" => "Dobór roślin i materiałów odpowiednich do lokalnych warunków klimatycznych i środowiskowych.",
                    "en" => "Selecting plants and materials suitable for local climate and environmental conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21892,

                "name" => json_encode([
                    "pl" => "Projektowanie systemów nawadniania i oświetlenia w przestrzeniach zielonych.",
                    "en" => "Designing irrigation and lighting systems in green spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21893,

                "name" => json_encode([
                    "pl" => "Nadzorowanie realizacji projektów architektury krajobrazu.",
                    "en" => "Supervising the implementation of landscape architecture projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21894,

                "name" => json_encode([
                    "pl" => "Współpraca z urbanistami, architektami i inżynierami w zakresie planowania przestrzennego.",
                    "en" => "Collaborating with urban planners, architects, and engineers in spatial planning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ARCHITEKT_ZIELENI_WEWNĄTRZ_BUDYNKÓW = [


            [
            "id" => 21895,
                "name" => json_encode([
                    "pl" => "Projektowanie zieleni wewnętrznej, w tym ogrodów wertykalnych i systemów roślinnych.",
                    "en" => "Designing indoor greenery, including vertical gardens and plant systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21896,

                "name" => json_encode([
                    "pl" => "Dobór roślin odpowiednich do warunków wewnętrznych, takich jak oświetlenie i wilgotność.",
                    "en" => "Selecting plants suitable for indoor conditions, such as lighting and humidity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21897,

                "name" => json_encode([
                    "pl" => "Projektowanie systemów nawadniania i pielęgnacji zieleni wewnętrznej.",
                    "en" => "Designing irrigation and maintenance systems for indoor greenery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21898,

                "name" => json_encode([
                    "pl" => "Współpraca z projektantami wnętrz w celu harmonijnego wkomponowania zieleni w przestrzeń.",
                    "en" => "Collaborating with interior designers to harmoniously integrate greenery into the space."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21899,

                "name" => json_encode([
                    "pl" => "Tworzenie koncepcji estetycznych i funkcjonalnych zieleni w przestrzeniach komercyjnych i mieszkalnych.",
                    "en" => "Creating aesthetic and functional greenery concepts in commercial and residential spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21900,

                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją projektów zieleni wewnętrznej.",
                    "en" => "Supervising the implementation of indoor greenery projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ARCHITEKCI_KRAJOBRAZU = [


            [
            "id" => 21901,
                "name" => json_encode([
                    "pl" => "Tworzenie koncepcji zagospodarowania nietypowych przestrzeni publicznych i prywatnych.",
                    "en" => "Creating concepts for the development of unconventional public and private spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21902,

                "name" => json_encode([
                    "pl" => "Projektowanie elementów małej architektury w przestrzeni krajobrazowej.",
                    "en" => "Designing small architectural elements in landscape spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21903,

                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów i technologii w projektach krajobrazowych.",
                    "en" => "Selecting appropriate materials and technologies for landscape projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21904,

                "name" => json_encode([
                    "pl" => "Edukacja klientów w zakresie pielęgnacji zieleni i utrzymania projektów krajobrazowych.",
                    "en" => "Educating clients on greenery maintenance and landscape project upkeep."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21905,

                "name" => json_encode([
                    "pl" => "Monitorowanie najnowszych trendów w architekturze krajobrazu i wdrażanie ich w projektach.",
                    "en" => "Monitoring the latest trends in landscape architecture and implementing them in projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21906,

                "name" => json_encode([
                    "pl" => "Współpraca z innymi specjalistami w zakresie realizacji projektów krajobrazowych.",
                    "en" => "Collaborating with other specialists on landscape project implementation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ARCHITEKTURY_KRAJOBRAZU = [


            [
            "id" => 21907,
                "name" => json_encode([
                    "pl" => "Wykonywanie pomiarów terenowych na potrzeby projektów krajobrazowych.",
                    "en" => "Conducting field measurements for landscape projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21908,

                "name" => json_encode([
                    "pl" => "Współpraca z architektami krajobrazu przy tworzeniu planów zagospodarowania przestrzennego.",
                    "en" => "Collaborating with landscape architects on spatial development plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21909,

                "name" => json_encode([
                    "pl" => "Dobór i przygotowanie materiałów roślinnych do realizacji projektów.",
                    "en" => "Selecting and preparing plant materials for project implementation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21910,

                "name" => json_encode([
                    "pl" => "Nadzorowanie prac pielęgnacyjnych i porządkowych w przestrzeniach zielonych.",
                    "en" => "Supervising maintenance and cleaning work in green spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21911,

                "name" => json_encode([
                    "pl" => "Obsługa specjalistycznego sprzętu i narzędzi wykorzystywanych w architekturze krajobrazu.",
                    "en" => "Operating specialized equipment and tools used in landscape architecture."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21912,

                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej i raportów z realizacji projektów.",
                    "en" => "Preparing technical documentation and project implementation reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_PLASTYCY_DEKORATORZY_WNĘTRZ_I_POKREWNI = [


            [
            "id" => 21913,
                "name" => json_encode([
                    "pl" => "Tworzenie koncepcji i projektów dekoracji wnętrz mieszkalnych, komercyjnych i publicznych.",
                    "en" => "Creating concepts and designs for decorating residential, commercial, and public interiors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21914,

                "name" => json_encode([
                    "pl" => "Dobór kolorystyki, materiałów i elementów dekoracyjnych zgodnie z preferencjami klienta.",
                    "en" => "Selecting colors, materials, and decorative elements according to client preferences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21915,

                "name" => json_encode([
                    "pl" => "Tworzenie wizualizacji projektów wnętrz za pomocą programów graficznych.",
                    "en" => "Creating interior design visualizations using graphic software."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21916,

                "name" => json_encode([
                    "pl" => "Współpraca z architektami, projektantami mebli i wykonawcami przy realizacji projektów.",
                    "en" => "Collaborating with architects, furniture designers, and contractors on project implementation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21917,

                "name" => json_encode([
                    "pl" => "Projektowanie unikalnych elementów dekoracyjnych, takich jak obrazy, rzeźby czy instalacje artystyczne.",
                    "en" => "Designing unique decorative elements such as paintings, sculptures, or art installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21918,

                "name" => json_encode([
                    "pl" => "Monitorowanie realizacji projektów dekoratorskich i dbanie o ich zgodność z założeniami.",
                    "en" => "Monitoring the execution of decorating projects to ensure compliance with design assumptions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ARANŻACJI_WNĘTRZ = [


            [
            "id" => 21919,
                "name" => json_encode([
                    "pl" => "Wykonywanie rysunków technicznych i projektów aranżacji wnętrz.",
                    "en" => "Preparing technical drawings and interior design projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21920,

                "name" => json_encode([
                    "pl" => "Dobór mebli, materiałów wykończeniowych oraz akcesoriów dekoracyjnych.",
                    "en" => "Selecting furniture, finishing materials, and decorative accessories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21921,

                "name" => json_encode([
                    "pl" => "Tworzenie wizualizacji 3D projektów wnętrz za pomocą specjalistycznego oprogramowania.",
                    "en" => "Creating 3D visualizations of interior designs using specialized software."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21922,

                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją projektów aranżacyjnych oraz współpraca z wykonawcami.",
                    "en" => "Supervising the execution of interior design projects and collaborating with contractors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21923,

                "name" => json_encode([
                    "pl" => "Doradztwo klientom w zakresie wyboru stylu, kolorystyki i elementów wyposażenia wnętrz.",
                    "en" => "Advising clients on choosing styles, colors, and interior furnishings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21924,

                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej i kosztorysów związanych z aranżacją wnętrz.",
                    "en" => "Preparing technical documentation and cost estimates related to interior design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_BUDOWNICTWA_BUDOWLE_I_DROGI_WODNE = [


            [
            "id" => 21925,
                "name" => json_encode([
                    "pl" => "Projektowanie budowli hydrotechnicznych, takich jak zapory, śluzy i kanały wodne.",
                    "en" => "Designing hydrotechnical structures such as dams, locks, and water channels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21926,

                "name" => json_encode([
                    "pl" => "Opracowywanie planów dróg wodnych i infrastruktury transportu wodnego.",
                    "en" => "Preparing plans for waterways and water transport infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21927,

                "name" => json_encode([
                    "pl" => "Monitorowanie wpływu budowli wodnych na środowisko naturalne.",
                    "en" => "Monitoring the environmental impact of water structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21928,

                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją projektów budowli wodnych i ich zgodnością z normami technicznymi.",
                    "en" => "Supervising the implementation of water structures and ensuring compliance with technical standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21929,

                "name" => json_encode([
                    "pl" => "Współpraca z hydrologami i specjalistami ochrony środowiska w projektowaniu budowli wodnych.",
                    "en" => "Collaborating with hydrologists and environmental specialists in designing water structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21930,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz ryzyka i oceny trwałości budowli hydrotechnicznych.",
                    "en" => "Conducting risk analyses and durability assessments of hydrotechnical structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_BUDOWNICTWA_BUDOWNICTWO_OGÓLNE = [


            [
            "id" => 21931,
                "name" => json_encode([
                    "pl" => "Projektowanie budynków mieszkalnych, biurowych i użyteczności publicznej.",
                    "en" => "Designing residential, office, and public utility buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21932,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie obliczeń konstrukcyjnych i dobór materiałów budowlanych.",
                    "en" => "Performing structural calculations and selecting construction materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21933,

                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją projektów budowlanych zgodnie z harmonogramem i budżetem.",
                    "en" => "Supervising construction projects according to the schedule and budget."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21934,

                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej oraz specyfikacji projektowych.",
                    "en" => "Preparing technical documentation and project specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21935,

                "name" => json_encode([
                    "pl" => "Współpraca z architektami, instalatorami i wykonawcami w realizacji projektów.",
                    "en" => "Collaborating with architects, installers, and contractors on project implementation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21936,

                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności projektów z przepisami budowlanymi i normami technicznymi.",
                    "en" => "Ensuring project compliance with building regulations and technical standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_BUDOWNICTWA_BUDOWNICTWO_PRZEMYSŁOWE = [


            [
            "id" => 21937,
                "name" => json_encode([
                    "pl" => "Projektowanie budynków przemysłowych, takich jak hale produkcyjne i magazynowe.",
                    "en" => "Designing industrial buildings, such as production halls and warehouses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21938,

                "name" => json_encode([
                    "pl" => "Dobór technologii i materiałów odpowiednich dla specyficznych wymagań przemysłowych.",
                    "en" => "Selecting technologies and materials suitable for specific industrial requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21939,

                "name" => json_encode([
                    "pl" => "Wykonywanie analiz obciążeń i stabilności konstrukcji przemysłowych.",
                    "en" => "Performing load analyses and stability assessments of industrial structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21940,

                "name" => json_encode([
                    "pl" => "Opracowywanie dokumentacji technicznej dla projektów budowlanych w przemyśle.",
                    "en" => "Preparing technical documentation for industrial construction projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21941,

                "name" => json_encode([
                    "pl" => "Nadzorowanie prac budowlanych w obiektach przemysłowych.",
                    "en" => "Supervising construction works in industrial facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21942,

                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności projektów z przepisami dotyczącymi bezpieczeństwa i higieny pracy.",
                    "en" => "Ensuring project compliance with occupational health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_BUDOWNICTWA_LINIE_WĘZŁY_I_STACJE_KOLEJOWE = [


            [
            "id" => 21943,
                "name" => json_encode([
                    "pl" => "Projektowanie infrastruktury kolejowej, w tym linii, węzłów i stacji.",
                    "en" => "Designing railway infrastructure, including lines, junctions, and stations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21944,

                "name" => json_encode([
                    "pl" => "Opracowywanie harmonogramów budowy i modernizacji infrastruktury kolejowej.",
                    "en" => "Preparing schedules for the construction and modernization of railway infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21945,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie obliczeń inżynierskich dla konstrukcji kolejowych.",
                    "en" => "Performing engineering calculations for railway structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21946,

                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją projektów kolejowych zgodnie z normami technicznymi i budżetem.",
                    "en" => "Supervising railway projects according to technical standards and budget."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21947,

                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami transportowymi i wykonawcami w realizacji projektów kolejowych.",
                    "en" => "Collaborating with transportation institutions and contractors on railway projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21948,

                "name" => json_encode([
                    "pl" => "Opracowywanie dokumentacji technicznej i specyfikacji projektowych dla kolei.",
                    "en" => "Preparing technical documentation and project specifications for railways."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_BUDOWNICTWA_URZĄDZENIA_INSTALACJE_I_SIECI_ENERGETYCZNE = [


            [
            "id" => 21949,
                "name" => json_encode([
                    "pl" => "Projektowanie sieci energetycznych, w tym linii wysokiego napięcia i podstacji.",
                    "en" => "Designing energy networks, including high-voltage lines and substations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21950,

                "name" => json_encode([
                    "pl" => "Opracowywanie planów instalacji elektrycznych w budynkach i zakładach przemysłowych.",
                    "en" => "Preparing plans for electrical installations in buildings and industrial facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21951,

                "name" => json_encode([
                    "pl" => "Nadzór nad budową i modernizacją urządzeń energetycznych.",
                    "en" => "Supervising the construction and modernization of energy devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21952,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów energetycznych i analiza efektywności energetycznej projektów.",
                    "en" => "Conducting energy audits and analyzing energy efficiency in projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21953,

                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności projektów z przepisami i normami technicznymi w zakresie energetyki.",
                    "en" => "Ensuring project compliance with regulations and technical standards in energy systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21954,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołami projektowymi oraz instytucjami w zakresie infrastruktury energetycznej.",
                    "en" => "Collaborating with project teams and institutions on energy infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_BUDOWNICTWA_WYBURZANIE_OBIEKTÓW = [


            [
            "id" => 21955,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów wyburzania budynków i innych obiektów budowlanych.",
                    "en" => "Preparing demolition plans for buildings and other structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21956,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz technicznych i oceny ryzyka wyburzania.",
                    "en" => "Conducting technical analyses and risk assessments for demolition projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21957,

                "name" => json_encode([
                    "pl" => "Dobór technologii i metod wyburzeniowych odpowiednich do rodzaju obiektu.",
                    "en" => "Selecting demolition technologies and methods suitable for the type of structure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21958,

                "name" => json_encode([
                    "pl" => "Nadzorowanie realizacji projektów wyburzeniowych zgodnie z przepisami i normami bezpieczeństwa.",
                    "en" => "Supervising demolition projects to ensure compliance with safety regulations and standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21959,

                "name" => json_encode([
                    "pl" => "Koordynowanie prac związanych z recyklingiem i utylizacją materiałów z wyburzeń.",
                    "en" => "Coordinating recycling and disposal of materials from demolished structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21960,

                "name" => json_encode([
                    "pl" => "Współpraca z klientami, urzędami i wykonawcami w procesie wyburzania obiektów.",
                    "en" => "Collaborating with clients, authorities, and contractors in the demolition process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_BUDOWY_DRÓG = [


            [
            "id" => 21961,
                "name" => json_encode([
                    "pl" => "Projektowanie dróg i autostrad zgodnie z obowiązującymi przepisami i normami technicznymi.",
                    "en" => "Designing roads and highways in compliance with current regulations and technical standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21962,

                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją prac budowlanych w projektach drogowych.",
                    "en" => "Supervising construction works in road-building projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21963,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań gruntowych i ocena ich przydatności do budowy dróg.",
                    "en" => "Conducting soil tests and assessing their suitability for road construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21964,

                "name" => json_encode([
                    "pl" => "Koordynacja prac związanych z budową i utrzymaniem infrastruktury drogowej.",
                    "en" => "Coordinating works related to the construction and maintenance of road infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21965,

                "name" => json_encode([
                    "pl" => "Opracowywanie dokumentacji projektowej i kosztorysów dla inwestycji drogowych.",
                    "en" => "Preparing project documentation and cost estimates for road investments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21966,

                "name" => json_encode([
                    "pl" => "Współpraca z organami administracyjnymi w zakresie planowania i realizacji inwestycji drogowych.",
                    "en" => "Collaborating with administrative bodies on planning and executing road investments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_GEOTECHNIK = [


            [
            "id" => 21967,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań gruntowych i ocena ich właściwości geotechnicznych.",
                    "en" => "Conducting soil tests and assessing their geotechnical properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21968,

                "name" => json_encode([
                    "pl" => "Projektowanie fundamentów, palowania i innych konstrukcji podziemnych.",
                    "en" => "Designing foundations, piling, and other underground structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21969,

                "name" => json_encode([
                    "pl" => "Ocena ryzyka osunięć ziemi i innych zagrożeń geotechnicznych.",
                    "en" => "Assessing the risk of landslides and other geotechnical hazards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21970,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołami inżynierskimi w zakresie stabilizacji gruntów i projektów geotechnicznych.",
                    "en" => "Collaborating with engineering teams on soil stabilization and geotechnical projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21971,

                "name" => json_encode([
                    "pl" => "Tworzenie raportów i dokumentacji technicznej dla projektów geotechnicznych.",
                    "en" => "Preparing reports and technical documentation for geotechnical projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21972,

                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją robót ziemnych i kontrola ich zgodności z projektem.",
                    "en" => "Supervising earthworks and ensuring compliance with project plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RZECZOZNAWCA_BUDOWLANY = [


            [
            "id" => 21973,
                "name" => json_encode([
                    "pl" => "Dokonywanie oceny stanu technicznego budynków i innych obiektów budowlanych.",
                    "en" => "Assessing the technical condition of buildings and other structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21974,

                "name" => json_encode([
                    "pl" => "Wydawanie ekspertyz budowlanych na potrzeby inwestorów, sądów i instytucji publicznych.",
                    "en" => "Issuing construction expert opinions for investors, courts, and public institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21975,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie analizy uszkodzeń budynków i proponowanie działań naprawczych.",
                    "en" => "Analyzing building damages and proposing remedial actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21976,

                "name" => json_encode([
                    "pl" => "Opracowywanie dokumentacji technicznej związanej z przeglądami budowlanymi.",
                    "en" => "Preparing technical documentation related to building inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21977,

                "name" => json_encode([
                    "pl" => "Udzielanie konsultacji i doradztwa w zakresie projektowania i realizacji inwestycji budowlanych.",
                    "en" => "Providing consultations and advice on the design and implementation of construction projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21978,

                "name" => json_encode([
                    "pl" => "Przygotowywanie wycen nieruchomości i kosztorysów związanych z pracami budowlanymi.",
                    "en" => "Preparing property valuations and cost estimates related to construction works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_INŻYNIEROWIE_BUDOWNICTWA = [


            [
            "id" => 21979,
                "name" => json_encode([
                    "pl" => "Projektowanie specjalistycznych konstrukcji, takich jak wieże telekomunikacyjne i kominy przemysłowe.",
                    "en" => "Designing specialized structures, such as telecommunication towers and industrial chimneys."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21980,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie analizy ryzyka i oceny wytrzymałości konstrukcji budowlanych.",
                    "en" => "Conducting risk analysis and assessing the durability of building structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21981,

                "name" => json_encode([
                    "pl" => "Opracowywanie projektów budynków o specjalnym przeznaczeniu, takich jak szpitale czy laboratoria.",
                    "en" => "Developing designs for buildings with special purposes, such as hospitals or laboratories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21982,

                "name" => json_encode([
                    "pl" => "Współpraca z architektami, inżynierami instalacji i konstruktorami w realizacji projektów budowlanych.",
                    "en" => "Collaborating with architects, installation engineers, and constructors on construction projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21983,

                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją prac budowlanych związanych z nietypowymi konstrukcjami.",
                    "en" => "Supervising construction works related to unusual structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21984,

                "name" => json_encode([
                    "pl" => "Edukacja i szkolenie pracowników w zakresie innowacyjnych technologii budowlanych.",
                    "en" => "Educating and training employees in innovative construction technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_INŻYNIERII_ŚRODOWISKA_GAZOWE_URZĄDZENIA_INSTALACJE_I_SIECI_ENERGETYCZNE = [


            [
            "id" => 21985,
                "name" => json_encode([
                    "pl" => "Projektowanie instalacji gazowych oraz sieci energetycznych w obiektach budowlanych i przestrzeni publicznej.",
                    "en" => "Designing gas installations and energy networks in buildings and public spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21986,

                "name" => json_encode([
                    "pl" => "Nadzór nad budową, modernizacją i konserwacją sieci gazowych i energetycznych.",
                    "en" => "Supervising the construction, modernization, and maintenance of gas and energy networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21987,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz ryzyka i ocena bezpieczeństwa w projektach sieci gazowych.",
                    "en" => "Conducting risk analyses and assessing safety in gas network projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21988,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołami projektowymi i wykonawczymi w zakresie infrastruktury gazowej.",
                    "en" => "Collaborating with design and construction teams on gas infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21989,

                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej i raportów związanych z infrastrukturą gazową.",
                    "en" => "Preparing technical documentation and reports related to gas infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21990,

                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności projektów z normami technicznymi i przepisami dotyczącymi instalacji gazowych.",
                    "en" => "Ensuring project compliance with technical standards and regulations on gas installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_INŻYNIERII_ŚRODOWISKA_GOSPODARKA_WODNA_I_HYDROLOGIA = [


            [
            "id" => 21991,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów zarządzania zasobami wodnymi w regionach miejskich i wiejskich.",
                    "en" => "Developing plans for water resource management in urban and rural areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21992,

                "name" => json_encode([
                    "pl" => "Projektowanie systemów retencji wody i infrastruktury hydrologicznej.",
                    "en" => "Designing water retention systems and hydrological infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21993,

                "name" => json_encode([
                    "pl" => "Monitorowanie jakości wody oraz przepływów wód powierzchniowych i podziemnych.",
                    "en" => "Monitoring water quality and the flow of surface and groundwater."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21994,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz ryzyka powodziowego i opracowywanie planów przeciwdziałania.",
                    "en" => "Conducting flood risk analyses and preparing countermeasure plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21995,

                "name" => json_encode([
                    "pl" => "Współpraca z hydrologami, ekologami i innymi specjalistami w zakresie ochrony zasobów wodnych.",
                    "en" => "Collaborating with hydrologists, ecologists, and other specialists on water resource protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21996,

                "name" => json_encode([
                    "pl" => "Tworzenie raportów i dokumentacji technicznej dla projektów hydrologicznych.",
                    "en" => "Preparing reports and technical documentation for hydrological projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_INŻYNIERII_ŚRODOWISKA_INSTALACJE_SANITARNE = [


            [
            "id" => 21997,
                "name" => json_encode([
                    "pl" => "Projektowanie instalacji sanitarnych, takich jak wodociągi, kanalizacje i systemy wentylacji.",
                    "en" => "Designing sanitary installations, such as water supply, sewage, and ventilation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21998,

                "name" => json_encode([
                    "pl" => "Nadzór nad montażem i modernizacją instalacji sanitarnych w budynkach.",
                    "en" => "Supervising the installation and modernization of sanitary systems in buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21999,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji technicznych i ocena sprawności systemów sanitarnych.",
                    "en" => "Conducting technical inspections and assessing the efficiency of sanitary systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22000,

                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej i specyfikacji projektowych dla instalacji sanitarnych.",
                    "en" => "Preparing technical documentation and project specifications for sanitary installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22001,

                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności projektów z przepisami i normami technicznymi w zakresie instalacji sanitarnych.",
                    "en" => "Ensuring project compliance with regulations and technical standards for sanitary systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22002,

                "name" => json_encode([
                    "pl" => "Współpraca z architektami i innymi specjalistami w realizacji projektów budowlanych.",
                    "en" => "Collaborating with architects and other specialists on construction projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_INŻYNIERII_ŚRODOWISKA_MELIORACJE = [


            [
            "id" => 22003,
                "name" => json_encode([
                    "pl" => "Projektowanie systemów melioracyjnych dla obszarów rolnych i przemysłowych.",
                    "en" => "Designing drainage systems for agricultural and industrial areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22004,

                "name" => json_encode([
                    "pl" => "Opracowywanie planów nawadniania i odwodnienia terenów rolnych.",
                    "en" => "Preparing irrigation and drainage plans for agricultural land."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22005,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań hydrologicznych i analiz glebowych w celu opracowania projektów melioracyjnych.",
                    "en" => "Conducting hydrological and soil analyses to develop drainage projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22006,

                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją robót melioracyjnych i ich zgodnością z projektami.",
                    "en" => "Supervising the execution of drainage works and ensuring compliance with designs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22007,

                "name" => json_encode([
                    "pl" => "Współpraca z rolnikami i lokalnymi władzami w zakresie zarządzania zasobami wodnymi.",
                    "en" => "Collaborating with farmers and local authorities on water resource management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22008,

                "name" => json_encode([
                    "pl" => "Tworzenie raportów i dokumentacji technicznej dotyczącej melioracji.",
                    "en" => "Preparing reports and technical documentation on drainage systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_INŻYNIERII_ŚRODOWISKA_OCZYSZCZANIE_MIAST_I_GOSPODARKA_ODPADAMI = [


            [
            "id" => 22009,
                "name" => json_encode([
                    "pl" => "Projektowanie systemów zarządzania odpadami komunalnymi i przemysłowymi.",
                    "en" => "Designing waste management systems for municipal and industrial waste."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22010,

                "name" => json_encode([
                    "pl" => "Opracowywanie planów oczyszczania miast i efektywnej gospodarki odpadami.",
                    "en" => "Developing city cleaning plans and effective waste management strategies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22011,

                "name" => json_encode([
                    "pl" => "Monitorowanie procesów recyklingu i segregacji odpadów.",
                    "en" => "Monitoring recycling and waste segregation processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22012,

                "name" => json_encode([
                    "pl" => "Tworzenie systemów zbierania, transportu i utylizacji odpadów.",
                    "en" => "Creating systems for waste collection, transport, and disposal."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22013,

                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją inwestycji związanych z oczyszczaniem miast i gospodarką odpadami.",
                    "en" => "Supervising investments related to city cleaning and waste management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22014,

                "name" => json_encode([
                    "pl" => "Edukacja społeczności w zakresie ochrony środowiska i zarządzania odpadami.",
                    "en" => "Educating communities on environmental protection and waste management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_INŻYNIERII_ŚRODOWISKA_SYSTEMY_WODOCIĄGOWE_I_KANALIZACYJNE = [


            [
            "id" => 22015,
                "name" => json_encode([
                    "pl" => "Projektowanie systemów wodociągowych i kanalizacyjnych w miastach i terenach wiejskich.",
                    "en" => "Designing water supply and sewage systems for urban and rural areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22016,

                "name" => json_encode([
                    "pl" => "Opracowywanie rozwiązań mających na celu poprawę jakości wody i efektywności systemów.",
                    "en" => "Developing solutions to improve water quality and system efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22017,

                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją inwestycji związanych z budową i modernizacją sieci wodociągowo-kanalizacyjnych.",
                    "en" => "Supervising investments in the construction and modernization of water and sewage networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22018,

                "name" => json_encode([
                    "pl" => "Monitorowanie pracy systemów wodociągowo-kanalizacyjnych oraz diagnozowanie usterek.",
                    "en" => "Monitoring water and sewage systems and diagnosing malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22019,

                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej oraz specyfikacji projektowych.",
                    "en" => "Preparing technical documentation and project specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22020,

                "name" => json_encode([
                    "pl" => "Współpraca z władzami lokalnymi i instytucjami odpowiedzialnymi za infrastrukturę wodociągową.",
                    "en" => "Collaborating with local authorities and institutions responsible for water infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_SYSTEMÓW_BEZPIECZEŃSTWA_JĄDROWEGO_I_OCHRONY_RADIOLOGICZNEJ = [


            [
            "id" => 22021,
                "name" => json_encode([
                    "pl" => "Projektowanie systemów bezpieczeństwa jądrowego i ochrony radiologicznej.",
                    "en" => "Designing nuclear safety and radiological protection systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22022,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji bezpieczeństwa w obiektach wykorzystujących energię jądrową.",
                    "en" => "Conducting safety inspections in facilities utilizing nuclear energy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22023,

                "name" => json_encode([
                    "pl" => "Monitorowanie poziomu promieniowania w zakładach i na obszarach potencjalnego zagrożenia.",
                    "en" => "Monitoring radiation levels in facilities and areas of potential risk."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22024,

                "name" => json_encode([
                    "pl" => "Tworzenie planów awaryjnych i strategii reagowania na wypadki jądrowe.",
                    "en" => "Developing emergency plans and response strategies for nuclear incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22025,

                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności procedur i działań z międzynarodowymi normami bezpieczeństwa jądrowego.",
                    "en" => "Ensuring compliance of procedures and activities with international nuclear safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22026,

                "name" => json_encode([
                    "pl" => "Edukacja i szkolenia personelu w zakresie bezpieczeństwa jądrowego i ochrony radiologicznej.",
                    "en" => "Educating and training personnel in nuclear safety and radiological protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_INŻYNIEROWIE_INŻYNIERII_ŚRODOWISKA = [


            [
            "id" => 22027,
                "name" => json_encode([
                    "pl" => "Projektowanie i wdrażanie rozwiązań środowiskowych w różnych sektorach gospodarki.",
                    "en" => "Designing and implementing environmental solutions in various economic sectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22028,

                "name" => json_encode([
                    "pl" => "Tworzenie planów ochrony środowiska i ograniczania negatywnego wpływu działalności człowieka.",
                    "en" => "Developing environmental protection plans to reduce the negative impact of human activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22029,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów środowiskowych i ocena zgodności z przepisami.",
                    "en" => "Conducting environmental audits and assessing compliance with regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22030,

                "name" => json_encode([
                    "pl" => "Wdrażanie technologii ekologicznych w procesach produkcyjnych i usługowych.",
                    "en" => "Implementing ecological technologies in production and service processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22031,

                "name" => json_encode([
                    "pl" => "Monitorowanie i raportowanie stanu środowiska w obszarach działalności firmy lub instytucji.",
                    "en" => "Monitoring and reporting on environmental conditions in the areas of a company's or institution's operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22032,

                "name" => json_encode([
                    "pl" => "Edukacja społeczeństwa i firm w zakresie ochrony środowiska i zrównoważonego rozwoju.",
                    "en" => "Educating the public and businesses on environmental protection and sustainable development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LABORANT_BUDOWLANY = [


            [
            "id" => 22033,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań właściwości materiałów budowlanych, takich jak beton, asfalt czy stal.",
                    "en" => "Conducting tests on building materials, such as concrete, asphalt, and steel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22034,

                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów budowlanych zgodnie z normami technicznymi.",
                    "en" => "Ensuring the quality of construction materials according to technical standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22035,

                "name" => json_encode([
                    "pl" => "Pobieranie próbek materiałów budowlanych na placach budowy.",
                    "en" => "Collecting samples of construction materials from building sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22036,

                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z badań laboratoryjnych dla inwestorów i wykonawców.",
                    "en" => "Preparing laboratory test reports for investors and contractors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22037,

                "name" => json_encode([
                    "pl" => "Obsługa i konserwacja urządzeń laboratoryjnych do badania materiałów budowlanych.",
                    "en" => "Operating and maintaining laboratory equipment for testing construction materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22038,

                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami budowlanymi w analizie wyników badań materiałowych.",
                    "en" => "Collaborating with civil engineers in analyzing material test results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ARCHITEKT = [


            [
            "id" => 22039,
                "name" => json_encode([
                    "pl" => "Przygotowywanie projektów architektonicznych budynków mieszkalnych i użytkowych.",
                    "en" => "Preparing architectural designs for residential and utility buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22040,

                "name" => json_encode([
                    "pl" => "Tworzenie rysunków technicznych i wizualizacji projektów w programach komputerowych.",
                    "en" => "Creating technical drawings and project visualizations using software tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22041,

                "name" => json_encode([
                    "pl" => "Dobór materiałów budowlanych i elementów wykończeniowych w projektach architektonicznych.",
                    "en" => "Selecting construction materials and finishing elements for architectural projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22042,

                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami budowlanymi i instalatorami w realizacji projektów.",
                    "en" => "Collaborating with civil engineers and installers in project implementation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22043,

                "name" => json_encode([
                    "pl" => "Nadzorowanie realizacji projektów architektonicznych na placach budowy.",
                    "en" => "Supervising the execution of architectural projects on construction sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22044,

                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności projektów z przepisami budowlanymi i normami technicznymi.",
                    "en" => "Ensuring project compliance with building regulations and technical standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_BUDOWNICTWA = [


            [
            "id" => 22045,
                "name" => json_encode([
                    "pl" => "Wykonywanie rysunków technicznych i dokumentacji projektowej budynków.",
                    "en" => "Creating technical drawings and project documentation for buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22046,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie obliczeń konstrukcyjnych i szacowanie kosztów budowy.",
                    "en" => "Performing structural calculations and estimating construction costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22047,

                "name" => json_encode([
                    "pl" => "Nadzór nad pracami budowlanymi i kontrola ich zgodności z projektem.",
                    "en" => "Supervising construction works and ensuring their compliance with the design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22048,

                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów budowlanych i wykonywanych prac.",
                    "en" => "Quality control of construction materials and performed works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22049,

                "name" => json_encode([
                    "pl" => "Tworzenie harmonogramów budowy i organizacja pracy na placu budowy.",
                    "en" => "Creating construction schedules and organizing work on the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22050,

                "name" => json_encode([
                    "pl" => "Współpraca z projektantami, inwestorami i wykonawcami w procesie budowy.",
                    "en" => "Collaborating with designers, investors, and contractors in the construction process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_BUDOWNICTWA_WODNEGO = [


            [
            "id" => 22051,
                "name" => json_encode([
                    "pl" => "Projektowanie konstrukcji hydrotechnicznych, takich jak wały przeciwpowodziowe i kanały wodne.",
                    "en" => "Designing hydrotechnical structures, such as flood embankments and water channels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22052,

                "name" => json_encode([
                    "pl" => "Nadzorowanie budowy i utrzymania obiektów wodnych.",
                    "en" => "Supervising the construction and maintenance of water structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22053,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie pomiarów i analiz hydrologicznych na potrzeby projektów wodnych.",
                    "en" => "Conducting hydrological measurements and analyses for water projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22054,

                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji technicznej i specyfikacji projektowych.",
                    "en" => "Preparing technical documentation and project specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22055,

                "name" => json_encode([
                    "pl" => "Monitorowanie wpływu budowli wodnych na środowisko naturalne.",
                    "en" => "Monitoring the environmental impact of water structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22056,

                "name" => json_encode([
                    "pl" => "Współpraca z hydrologami i inżynierami środowiska w realizacji projektów wodnych.",
                    "en" => "Collaborating with hydrologists and environmental engineers on water projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_INŻYNIERII_ŚRODOWISKA_I_MELIORACJI = [


            [
            "id" => 22057,
                "name" => json_encode([
                    "pl" => "Projektowanie systemów melioracyjnych i infrastruktury hydrotechnicznej.",
                    "en" => "Designing drainage systems and hydrotechnical infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22058,

                "name" => json_encode([
                    "pl" => "Monitorowanie pracy systemów melioracyjnych oraz ich konserwacja.",
                    "en" => "Monitoring the operation of drainage systems and maintaining them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22059,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań hydrologicznych i glebowych na potrzeby projektów melioracyjnych.",
                    "en" => "Conducting hydrological and soil tests for drainage projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22060,

                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej i raportów związanych z systemami melioracyjnymi.",
                    "en" => "Preparing technical documentation and reports on drainage systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22061,

                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją prac związanych z melioracją terenów rolnych i leśnych.",
                    "en" => "Supervising drainage works for agricultural and forest lands."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22062,

                "name" => json_encode([
                    "pl" => "Współpraca z rolnikami, leśnikami i władzami lokalnymi w zakresie gospodarki wodnej.",
                    "en" => "Collaborating with farmers, foresters, and local authorities on water management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_URZĄDZEŃ_SANITARNYCH = [


            [
            "id" => 22063,
                "name" => json_encode([
                    "pl" => "Projektowanie instalacji sanitarnych, takich jak wodociągi, kanalizacje, czy systemy grzewcze.",
                    "en" => "Designing sanitary installations, such as water supply, sewage, and heating systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22064,

                "name" => json_encode([
                    "pl" => "Montaż i konserwacja urządzeń sanitarnych w budynkach mieszkalnych i przemysłowych.",
                    "en" => "Installing and maintaining sanitary devices in residential and industrial buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22065,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji i diagnozowanie usterek w instalacjach sanitarnych.",
                    "en" => "Conducting inspections and diagnosing malfunctions in sanitary installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22066,

                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej i kosztorysów związanych z instalacjami sanitarnymi.",
                    "en" => "Preparing technical documentation and cost estimates related to sanitary installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22067,

                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności instalacji z przepisami budowlanymi i normami technicznymi.",
                    "en" => "Ensuring installation compliance with building regulations and technical standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22068,

                "name" => json_encode([
                    "pl" => "Współpraca z projektantami i wykonawcami w realizacji instalacji sanitarnych.",
                    "en" => "Collaborating with designers and contractors on sanitary installation projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_TECHNICY_BUDOWNICTWA = [


            [
            "id" => 22069,
                "name" => json_encode([
                    "pl" => "Projektowanie nietypowych konstrukcji budowlanych i infrastruktury specjalnego przeznaczenia.",
                    "en" => "Designing unique building structures and infrastructure for special purposes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22070,

                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją projektów budowlanych zgodnie z założeniami technicznymi.",
                    "en" => "Supervising construction projects according to technical specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22071,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji jakości materiałów i prac budowlanych.",
                    "en" => "Conducting inspections of material quality and construction work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22072,

                "name" => json_encode([
                    "pl" => "Tworzenie harmonogramów i budżetów dla projektów budowlanych.",
                    "en" => "Preparing schedules and budgets for construction projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22073,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołami projektowymi, wykonawcami i inwestorami.",
                    "en" => "Collaborating with design teams, contractors, and investors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22074,

                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów i dokumentacji technicznej dotyczącej budownictwa.",
                    "en" => "Preparing reports and technical documentation related to construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KOSZTORYSANT_BUDOWLANY = [


            [
            "id" => 22075,
                "name" => json_encode([
                    "pl" => "Przygotowywanie szczegółowych kosztorysów inwestycji budowlanych.",
                    "en" => "Preparing detailed cost estimates for construction projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22076,

                "name" => json_encode([
                    "pl" => "Analiza dokumentacji projektowej i obliczanie kosztów materiałów i robocizny.",
                    "en" => "Analyzing project documentation and calculating material and labor costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22077,

                "name" => json_encode([
                    "pl" => "Tworzenie budżetów i harmonogramów dla projektów budowlanych.",
                    "en" => "Creating budgets and schedules for construction projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22078,

                "name" => json_encode([
                    "pl" => "Współpraca z inwestorami i wykonawcami w celu optymalizacji kosztów projektów.",
                    "en" => "Collaborating with investors and contractors to optimize project costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22079,

                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności kosztorysów z obowiązującymi normami i przepisami.",
                    "en" => "Ensuring cost estimates comply with applicable standards and regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22080,

                "name" => json_encode([
                    "pl" => "Analiza zmian w projekcie i aktualizacja kosztorysów w trakcie realizacji inwestycji.",
                    "en" => "Analyzing project changes and updating cost estimates during project implementation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_RENOWACJI_ELEMENTÓW_ARCHITEKTURY = [


            [
            "id" => 22081,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów renowacji zabytkowych budynków i elementów architektonicznych.",
                    "en" => "Preparing renovation plans for historic buildings and architectural elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22082,

                "name" => json_encode([
                    "pl" => "Wykonywanie prac konserwacyjnych i naprawczych na elementach architektury.",
                    "en" => "Performing conservation and repair work on architectural elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22083,

                "name" => json_encode([
                    "pl" => "Analiza materiałów i technik użytych w historycznych konstrukcjach.",
                    "en" => "Analyzing materials and techniques used in historical constructions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22084,

                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej dotyczącej przeprowadzonych renowacji.",
                    "en" => "Preparing technical documentation for completed renovations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22085,

                "name" => json_encode([
                    "pl" => "Współpraca z konserwatorami zabytków w celu zachowania autentyczności obiektów.",
                    "en" => "Collaborating with monument conservators to preserve the authenticity of structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22086,

                "name" => json_encode([
                    "pl" => "Dobór materiałów i technologii zgodnych z historycznym charakterem budynków.",
                    "en" => "Selecting materials and technologies compatible with the historical character of buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_GAZOWNICTWA = [


            [
            "id" => 22087,
                "name" => json_encode([
                    "pl" => "Projektowanie i montaż instalacji gazowych w budynkach mieszkalnych i przemysłowych.",
                    "en" => "Designing and installing gas systems in residential and industrial buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22088,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji instalacji gazowych i diagnozowanie usterek.",
                    "en" => "Inspecting gas installations and diagnosing faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22089,

                "name" => json_encode([
                    "pl" => "Konserwacja i modernizacja urządzeń gazowych.",
                    "en" => "Maintaining and upgrading gas devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22090,

                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji technicznej dla projektów gazowych.",
                    "en" => "Preparing technical documentation for gas projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22091,

                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności instalacji gazowych z przepisami bezpieczeństwa i normami technicznymi.",
                    "en" => "Ensuring gas installations comply with safety regulations and technical standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22092,

                "name" => json_encode([
                    "pl" => "Edukacja użytkowników w zakresie bezpiecznego korzystania z instalacji gazowych.",
                    "en" => "Educating users on the safe use of gas installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TECHNOLOGII_MATERIAŁÓW_BUDOWLANYCH = [


            [
            "id" => 22093,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań właściwości materiałów budowlanych, takich jak beton, cegła czy ceramika.",
                    "en" => "Conducting tests on construction materials, such as concrete, bricks, and ceramics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22094,

                "name" => json_encode([
                    "pl" => "Opracowywanie receptur i technologii produkcji materiałów budowlanych.",
                    "en" => "Developing formulas and production technologies for construction materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22095,

                "name" => json_encode([
                    "pl" => "Nadzór nad procesem produkcji materiałów budowlanych w zakładach przemysłowych.",
                    "en" => "Supervising the production process of construction materials in industrial plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22096,

                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów budowlanych przed ich zastosowaniem na budowie.",
                    "en" => "Ensuring the quality of construction materials before their use on site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22097,

                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej i raportów dotyczących badań materiałowych.",
                    "en" => "Preparing technical documentation and reports on material tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22098,

                "name" => json_encode([
                    "pl" => "Współpraca z laboratoriami i instytutami badawczymi w zakresie nowych technologii.",
                    "en" => "Collaborating with laboratories and research institutes on new technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_URZĄDZEŃ_I_SYSTEMÓW_ENERGETYKI_ODNAWIALNEJ = [


            [
            "id" => 22099,
                "name" => json_encode([
                    "pl" => "Projektowanie i montaż instalacji odnawialnych źródeł energii, takich jak panele fotowoltaiczne czy turbiny wiatrowe.",
                    "en" => "Designing and installing renewable energy systems, such as photovoltaic panels and wind turbines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22100,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów technicznych urządzeń energii odnawialnej.",
                    "en" => "Conducting technical inspections of renewable energy equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22101,

                "name" => json_encode([
                    "pl" => "Wykonywanie analiz wydajności systemów energetyki odnawialnej.",
                    "en" => "Performing performance analyses of renewable energy systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22102,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej i raportów związanych z instalacjami OZE.",
                    "en" => "Maintaining technical documentation and reports related to renewable energy installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22103,

                "name" => json_encode([
                    "pl" => "Współpraca z projektantami i inwestorami w zakresie wdrażania systemów energii odnawialnej.",
                    "en" => "Collaborating with designers and investors on implementing renewable energy systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22104,

                "name" => json_encode([
                    "pl" => "Edukacja użytkowników w zakresie korzystania i konserwacji urządzeń OZE.",
                    "en" => "Educating users on the operation and maintenance of renewable energy equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MISTRZ_PRODUKCJI_W_BUDOWNICTWIE_OGÓLNYM = [


            [
            "id" => 22105,
                "name" => json_encode([
                    "pl" => "Zarządzanie pracą zespołów budowlanych na placu budowy.",
                    "en" => "Managing the work of construction teams on the building site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22106,

                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją prac budowlanych zgodnie z harmonogramem.",
                    "en" => "Supervising the execution of construction works according to the schedule."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22107,

                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów i zgodności z projektami budowlanymi.",
                    "en" => "Quality control of materials and compliance with construction plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22108,

                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów technicznych i organizacyjnych podczas budowy.",
                    "en" => "Solving technical and organizational issues during construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22109,

                "name" => json_encode([
                    "pl" => "Tworzenie raportów dotyczących postępu prac i zużycia materiałów.",
                    "en" => "Preparing reports on work progress and material usage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22110,

                "name" => json_encode([
                    "pl" => "Współpraca z kierownikiem budowy, projektantami i inwestorami.",
                    "en" => "Collaborating with the construction manager, designers, and investors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MISTRZ_PRODUKCJI_W_BUDOWNICTWIE_PRZEMYSŁOWYM = [


            [
            "id" => 22111,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołami wykonującymi prace budowlane w obiektach przemysłowych.",
                    "en" => "Managing teams performing construction work in industrial facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22112,

                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją projektów budowlanych zgodnie z wymaganiami technicznymi.",
                    "en" => "Supervising construction projects according to technical requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22113,

                "name" => json_encode([
                    "pl" => "Koordynacja dostaw materiałów i sprzętu budowlanego.",
                    "en" => "Coordinating the delivery of construction materials and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22114,

                "name" => json_encode([
                    "pl" => "Kontrola przestrzegania zasad bezpieczeństwa na budowie.",
                    "en" => "Monitoring compliance with safety regulations on the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22115,

                "name" => json_encode([
                    "pl" => "Tworzenie raportów z postępu prac i wydajności zespołów budowlanych.",
                    "en" => "Preparing progress reports and evaluating the performance of construction teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22116,

                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów związanych z organizacją pracy i technologią budowy.",
                    "en" => "Solving issues related to work organization and construction technology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MISTRZ_PRODUKCJI_W_BUDOWNICTWIE_WODNYM = [


            [
            "id" => 22117,
                "name" => json_encode([
                    "pl" => "Zarządzanie budową i modernizacją obiektów hydrotechnicznych, takich jak śluzy i tamy.",
                    "en" => "Managing the construction and modernization of hydrotechnical structures, such as locks and dams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22118,

                "name" => json_encode([
                    "pl" => "Koordynacja prac zespołów budowlanych na projektach wodnych.",
                    "en" => "Coordinating the work of construction teams on water-related projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22119,

                "name" => json_encode([
                    "pl" => "Kontrola jakości i zgodności realizacji z projektami budowlanymi.",
                    "en" => "Controlling the quality and compliance of works with construction plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22120,

                "name" => json_encode([
                    "pl" => "Tworzenie harmonogramów i raportowanie postępów prac budowlanych.",
                    "en" => "Creating schedules and reporting on the progress of construction works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22121,

                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania zasad bezpieczeństwa i ochrony środowiska na budowie.",
                    "en" => "Ensuring compliance with safety and environmental protection regulations on the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22122,

                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów technicznych i organizacyjnych podczas realizacji inwestycji wodnych.",
                    "en" => "Resolving technical and organizational issues during the implementation of water-related projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_MISTRZOWIE_PRODUKCJI_W_BUDOWNICTWIE = [


            [
            "id" => 22123,
                "name" => json_encode([
                    "pl" => "Koordynacja prac budowlanych w projektach nietypowych lub specjalistycznych.",
                    "en" => "Coordinating construction works in atypical or specialized projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22124,

                "name" => json_encode([
                    "pl" => "Nadzór nad przestrzeganiem harmonogramów i budżetów na budowie.",
                    "en" => "Supervising adherence to schedules and budgets on construction sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22125,

                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów technicznych i organizacyjnych podczas realizacji budowy.",
                    "en" => "Resolving technical and organizational issues during construction execution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22126,

                "name" => json_encode([
                    "pl" => "Monitorowanie jakości wykonywanych prac i przestrzegania norm technicznych.",
                    "en" => "Monitoring the quality of performed works and compliance with technical standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22127,

                "name" => json_encode([
                    "pl" => "Raportowanie postępów prac i przygotowywanie sprawozdań dla kierownictwa budowy.",
                    "en" => "Reporting work progress and preparing reports for construction management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22128,

                "name" => json_encode([
                    "pl" => "Współpraca z inwestorami, wykonawcami i zespołami technicznymi na budowie.",
                    "en" => "Collaborating with investors, contractors, and technical teams on the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_INŻYNIERII_SANITARNEJ = [


            [
            "id" => 22129,
                "name" => json_encode([
                    "pl" => "Projektowanie instalacji sanitarnych, takich jak wodociągi, kanalizacje i systemy grzewcze.",
                    "en" => "Designing sanitary installations, such as water supply, sewage systems, and heating systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22130,

                "name" => json_encode([
                    "pl" => "Montaż i konserwacja instalacji sanitarnych w budynkach mieszkalnych i przemysłowych.",
                    "en" => "Installing and maintaining sanitary systems in residential and industrial buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22131,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów technicznych instalacji sanitarnych i usuwanie usterek.",
                    "en" => "Conducting technical inspections of sanitary systems and fixing malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22132,

                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji technicznej i kosztorysów związanych z instalacjami sanitarnymi.",
                    "en" => "Preparing technical documentation and cost estimates for sanitary installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22133,

                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności projektów sanitarnych z przepisami i normami technicznymi.",
                    "en" => "Ensuring sanitary projects comply with regulations and technical standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22134,

                "name" => json_encode([
                    "pl" => "Współpraca z projektantami, inżynierami i wykonawcami w realizacji projektów sanitarnych.",
                    "en" => "Collaborating with designers, engineers, and contractors on sanitary projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_CHŁODNICTWA_I_KLIMATYZACJI = [


            [
            "id" => 22135,
                "name" => json_encode([
                    "pl" => "Projektowanie i montaż systemów chłodniczych oraz klimatyzacyjnych.",
                    "en" => "Designing and installing refrigeration and air conditioning systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22136,

                "name" => json_encode([
                    "pl" => "Konserwacja i serwisowanie urządzeń chłodniczych i klimatyzacyjnych.",
                    "en" => "Maintaining and servicing refrigeration and air conditioning equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22137,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie diagnostyki i napraw usterek w systemach chłodniczych i klimatyzacyjnych.",
                    "en" => "Diagnosing and repairing faults in refrigeration and air conditioning systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22138,

                "name" => json_encode([
                    "pl" => "Wykonywanie pomiarów i regulacji parametrów pracy urządzeń.",
                    "en" => "Measuring and adjusting the operating parameters of equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22139,

                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej i raportów z wykonywanych prac.",
                    "en" => "Preparing technical documentation and reports on performed tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22140,

                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności urządzeń z przepisami bezpieczeństwa i ochrony środowiska.",
                    "en" => "Ensuring equipment complies with safety and environmental protection regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_MONTAŻU_I_AUTOMATYKI_STOLARKI_BUDOWLANEJ = [


            [
            "id" => 22141,
                "name" => json_encode([
                    "pl" => "Montaż okien, drzwi i innych elementów stolarki budowlanej.",
                    "en" => "Installing windows, doors, and other building joinery elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22142,

                "name" => json_encode([
                    "pl" => "Instalacja i konfiguracja systemów automatyki w stolarki budowlanej, takich jak rolety czy bramy automatyczne.",
                    "en" => "Installing and configuring automation systems in building joinery, such as blinds or automatic gates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22143,

                "name" => json_encode([
                    "pl" => "Diagnostyka i naprawa usterek w systemach stolarki budowlanej.",
                    "en" => "Diagnosing and repairing faults in joinery systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22144,

                "name" => json_encode([
                    "pl" => "Konserwacja i przeglądy techniczne systemów automatyki stolarki budowlanej.",
                    "en" => "Maintaining and inspecting automation systems in building joinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22145,

                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji technicznej i raportów związanych z instalacją i serwisem.",
                    "en" => "Preparing technical documentation and reports related to installation and service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22146,

                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności montażu i automatyki z obowiązującymi normami technicznymi.",
                    "en" => "Ensuring installation and automation comply with current technical standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_OBSŁUGI_PRZEMYSŁU_TARGOWO_WYSTAWIENNICZEGO = [


            [
            "id" => 22147,
                "name" => json_encode([
                    "pl" => "Projektowanie i przygotowanie stoisk targowych i wystawienniczych.",
                    "en" => "Designing and preparing exhibition and trade fair booths."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22148,

                "name" => json_encode([
                    "pl" => "Koordynacja montażu i demontażu stoisk wystawienniczych.",
                    "en" => "Coordinating the assembly and disassembly of exhibition booths."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22149,

                "name" => json_encode([
                    "pl" => "Nadzór nad technicznymi aspektami funkcjonowania stoisk podczas targów.",
                    "en" => "Supervising the technical aspects of booth operations during trade fairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22150,

                "name" => json_encode([
                    "pl" => "Obsługa urządzeń multimedialnych i systemów oświetleniowych na wystawach.",
                    "en" => "Operating multimedia devices and lighting systems at exhibitions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22151,

                "name" => json_encode([
                    "pl" => "Współpraca z klientami i projektantami w tworzeniu atrakcyjnych stoisk.",
                    "en" => "Collaborating with clients and designers to create attractive booths."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22152,

                "name" => json_encode([
                    "pl" => "Zarządzanie materiałami i wyposażeniem niezbędnym do obsługi targów i wystaw.",
                    "en" => "Managing materials and equipment necessary for trade fairs and exhibitions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_IZOLACJI_PRZEMYSŁOWYCH = [


            [
            "id" => 22153,
                "name" => json_encode([
                    "pl" => "Wykonywanie izolacji termicznych, akustycznych i przeciwpożarowych w obiektach przemysłowych.",
                    "en" => "Installing thermal, acoustic, and fireproof insulation in industrial facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22154,

                "name" => json_encode([
                    "pl" => "Dobór materiałów izolacyjnych odpowiednich do specyficznych warunków pracy.",
                    "en" => "Selecting insulation materials suitable for specific working conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22155,

                "name" => json_encode([
                    "pl" => "Przygotowywanie powierzchni do montażu izolacji przemysłowych.",
                    "en" => "Preparing surfaces for industrial insulation installation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22156,

                "name" => json_encode([
                    "pl" => "Kontrola jakości i szczelności wykonanych izolacji.",
                    "en" => "Inspecting the quality and tightness of installed insulation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22157,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej związanej z wykonanymi pracami izolacyjnymi.",
                    "en" => "Maintaining technical documentation related to completed insulation works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22158,

                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami i wykonawcami w zakresie wdrażania projektów izolacyjnych.",
                    "en" => "Collaborating with engineers and contractors on implementing insulation projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MECHANIK_MASZYN_I_URZĄDZEŃ_DROGOWYCH = [


            [
            "id" => 22159,
                "name" => json_encode([
                    "pl" => "Diagnostyka i naprawa maszyn oraz urządzeń drogowych, takich jak walce czy frezarki asfaltowe.",
                    "en" => "Diagnosing and repairing road machinery and equipment, such as rollers and asphalt milling machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22160,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie regularnych przeglądów technicznych maszyn drogowych.",
                    "en" => "Conducting regular technical inspections of road machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22161,

                "name" => json_encode([
                    "pl" => "Montaż i demontaż podzespołów maszyn drogowych.",
                    "en" => "Assembling and disassembling components of road machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22162,

                "name" => json_encode([
                    "pl" => "Ustawianie i kalibracja maszyn do pracy w różnych warunkach terenowych.",
                    "en" => "Adjusting and calibrating machines for operation in various terrain conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22163,

                "name" => json_encode([
                    "pl" => "Zapewnienie sprawności hydrauliki i układów elektrycznych w maszynach drogowych.",
                    "en" => "Ensuring the functionality of hydraulic and electrical systems in road machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22164,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej maszyn i urządzeń drogowych.",
                    "en" => "Maintaining service documentation for road machinery and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_DROGOWYCH = [


            [
            "id" => 22165,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn drogowych, takich jak koparki, spycharki czy walce asfaltowe.",
                    "en" => "Operating road machinery, such as excavators, bulldozers, and asphalt rollers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22166,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie podstawowych przeglądów i konserwacji maszyn drogowych.",
                    "en" => "Performing basic inspections and maintenance of road machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22167,

                "name" => json_encode([
                    "pl" => "Dostosowywanie maszyn do specyficznych warunków pracy na placach budowy.",
                    "en" => "Adapting machines to specific working conditions on construction sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22168,

                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa podczas pracy z maszynami na terenie budowy.",
                    "en" => "Ensuring safety during machine operations on construction sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22169,

                "name" => json_encode([
                    "pl" => "Raportowanie usterek i współpraca z mechanikami w zakresie napraw maszyn.",
                    "en" => "Reporting malfunctions and collaborating with mechanics on machine repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22170,

                "name" => json_encode([
                    "pl" => "Obsługa systemów sterowania i monitoringu w nowoczesnych maszynach drogowych.",
                    "en" => "Operating control and monitoring systems in modern road machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_SPRZĘTU_TOROWEGO = [


            [
            "id" => 22171,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn torowych, takich jak podbijarki, profilarki czy dźwigi torowe.",
                    "en" => "Operating track machines, such as tamping machines, profiling machines, and track cranes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22172,

                "name" => json_encode([
                    "pl" => "Konserwacja i przeglądy techniczne maszyn torowych.",
                    "en" => "Performing maintenance and technical inspections of track machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22173,

                "name" => json_encode([
                    "pl" => "Zapewnienie bezpiecznej pracy maszyn torowych na terenie budowy i modernizacji torowisk.",
                    "en" => "Ensuring the safe operation of track machines during construction and modernization of tracks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22174,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołami technicznymi i inżynierami w realizacji projektów torowych.",
                    "en" => "Collaborating with technical teams and engineers on track projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22175,

                "name" => json_encode([
                    "pl" => "Dostosowywanie maszyn torowych do specyficznych warunków pracy.",
                    "en" => "Adapting track machines to specific working conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22176,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z użytkowaniem maszyn torowych.",
                    "en" => "Maintaining documentation related to the operation of track machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_SPRZĘTU_CIĘŻKIEGO = [


            [
            "id" => 22177,
                "name" => json_encode([
                    "pl" => "Obsługa ciężkiego sprzętu budowlanego, takiego jak spycharki, walce czy dźwigi.",
                    "en" => "Operating heavy construction equipment, such as bulldozers, rollers, and cranes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22178,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie regularnych przeglądów i konserwacji sprzętu ciężkiego.",
                    "en" => "Conducting regular inspections and maintenance of heavy equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22179,

                "name" => json_encode([
                    "pl" => "Dostosowywanie parametrów pracy sprzętu do specyficznych warunków terenowych.",
                    "en" => "Adjusting equipment settings to specific terrain conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22180,

                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania zasad bezpieczeństwa podczas pracy na budowie.",
                    "en" => "Ensuring compliance with safety regulations on construction sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22181,

                "name" => json_encode([
                    "pl" => "Raportowanie usterek i współpraca z mechanikami w zakresie napraw.",
                    "en" => "Reporting malfunctions and collaborating with mechanics for repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22182,

                "name" => json_encode([
                    "pl" => "Obsługa nowoczesnych systemów monitoringu i sterowania w sprzęcie ciężkim.",
                    "en" => "Operating modern monitoring and control systems in heavy equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_KOPARKI = [


            [
            "id" => 22183,
                "name" => json_encode([
                    "pl" => "Obsługa koparki w celu wykonywania prac ziemnych, takich jak wykopy i równanie terenu.",
                    "en" => "Operating an excavator to perform earthworks, such as digging and leveling terrain."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22184,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie podstawowych przeglądów technicznych i konserwacji koparki.",
                    "en" => "Conducting basic technical inspections and maintenance of the excavator."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22185,

                "name" => json_encode([
                    "pl" => "Dostosowywanie koparki do warunków terenowych i specyfikacji zadania.",
                    "en" => "Adapting the excavator to terrain conditions and task specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22186,

                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania zasad bezpieczeństwa podczas obsługi koparki.",
                    "en" => "Ensuring compliance with safety regulations during excavator operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22187,

                "name" => json_encode([
                    "pl" => "Raportowanie uszkodzeń i współpraca z zespołem technicznym w zakresie napraw.",
                    "en" => "Reporting damages and collaborating with the technical team for repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22188,

                "name" => json_encode([
                    "pl" => "Obsługa zaawansowanych systemów sterowania koparki w nowoczesnych projektach budowlanych.",
                    "en" => "Operating advanced excavator control systems in modern construction projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_KOPARKO_ŁADOWARKI = [


            [
            "id" => 22189,
                "name" => json_encode([
                    "pl" => "Obsługa koparko-ładowarki w celu wykonywania prac ziemnych i transportowych.",
                    "en" => "Operating a backhoe loader to perform earthworks and transport tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22190,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów technicznych i konserwacji koparko-ładowarki.",
                    "en" => "Performing technical inspections and maintenance of the backhoe loader."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22191,

                "name" => json_encode([
                    "pl" => "Przystosowywanie sprzętu do różnych rodzajów prac i warunków terenowych.",
                    "en" => "Adapting the equipment for different tasks and terrain conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22192,

                "name" => json_encode([
                    "pl" => "Obsługa osprzętu dodatkowego, takiego jak widły do palet czy młoty hydrauliczne.",
                    "en" => "Operating additional equipment, such as pallet forks or hydraulic hammers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22193,

                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności prac z normami bezpieczeństwa i przepisami budowlanymi.",
                    "en" => "Ensuring compliance with safety standards and construction regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22194,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji pracy koparko-ładowarki i raportowanie postępów zadań.",
                    "en" => "Maintaining documentation of backhoe loader operations and reporting task progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_ŁADOWARKI = [


            [
            "id" => 22195,
                "name" => json_encode([
                    "pl" => "Obsługa ładowarki w celu przemieszczania i załadunku materiałów sypkich, takich jak piasek czy żwir.",
                    "en" => "Operating a loader to transport and load loose materials, such as sand or gravel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22196,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie codziennych przeglądów i konserwacji ładowarki.",
                    "en" => "Performing daily inspections and maintenance of the loader."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22197,

                "name" => json_encode([
                    "pl" => "Dostosowanie pracy ładowarki do specyficznych warunków terenowych i rodzaju materiału.",
                    "en" => "Adapting loader operations to specific terrain conditions and material types."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22198,

                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa na placu budowy podczas pracy ładowarki.",
                    "en" => "Ensuring safety on the construction site during loader operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22199,

                "name" => json_encode([
                    "pl" => "Raportowanie usterek i współpraca z mechanikami w zakresie napraw.",
                    "en" => "Reporting malfunctions and collaborating with mechanics for repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22200,

                "name" => json_encode([
                    "pl" => "Obsługa dodatkowego osprzętu ładowarki, takiego jak łyżki czy chwytaki.",
                    "en" => "Operating additional loader equipment, such as buckets or grapples."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_SPYCHARKI = [


            [
            "id" => 22201,
                "name" => json_encode([
                    "pl" => "Obsługa spycharki w celu wykonywania prac ziemnych, takich jak równanie terenu czy przemieszczanie ziemi.",
                    "en" => "Operating a bulldozer to perform earthworks, such as leveling terrain or moving soil."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22202,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów technicznych i bieżącej konserwacji spycharki.",
                    "en" => "Conducting technical inspections and routine maintenance of the bulldozer."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22203,

                "name" => json_encode([
                    "pl" => "Dostosowanie pracy spycharki do specyficznych warunków terenowych.",
                    "en" => "Adapting bulldozer operations to specific terrain conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22204,

                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania zasad bezpieczeństwa podczas pracy na spycharce.",
                    "en" => "Ensuring compliance with safety regulations during bulldozer operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22205,

                "name" => json_encode([
                    "pl" => "Raportowanie usterek i współpraca z zespołem technicznym w zakresie napraw.",
                    "en" => "Reporting faults and collaborating with the technical team for repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22206,

                "name" => json_encode([
                    "pl" => "Obsługa nowoczesnych systemów sterowania spycharki w projektach budowlanych.",
                    "en" => "Operating advanced bulldozer control systems in construction projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OPERATORZY_SPRZĘTU_DO_ROBÓT_ZIEMNYCH_I_URZĄDZEŃ_POKREWNYCH = [


            [
            "id" => 22207,
                "name" => json_encode([
                    "pl" => "Obsługa specjalistycznych maszyn ziemnych, takich jak zagęszczarki czy wiertnice.",
                    "en" => "Operating specialized earth-moving machines, such as compactors or drilling rigs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22208,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów technicznych i konserwacji obsługiwanego sprzętu.",
                    "en" => "Performing technical inspections and maintenance of operated equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22209,

                "name" => json_encode([
                    "pl" => "Dostosowanie parametrów pracy sprzętu do specyficznych zadań i warunków terenowych.",
                    "en" => "Adjusting equipment parameters to specific tasks and terrain conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22210,

                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa podczas pracy z maszynami ziemnymi na budowie.",
                    "en" => "Ensuring safety during earth-moving machinery operations on site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22211,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołem budowlanym i inżynierami w realizacji projektów ziemnych.",
                    "en" => "Collaborating with the construction team and engineers on earth-moving projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22212,

                "name" => json_encode([
                    "pl" => "Raportowanie usterek i prowadzenie dokumentacji pracy maszyn.",
                    "en" => "Reporting faults and maintaining documentation of machine operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_ROBÓT_ZIEMNYCH_I_DROGOWYCH = [


            [
            "id" => 22213,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń przeznaczonych do robót ziemnych i drogowych, takich jak równiarki czy walce.",
                    "en" => "Operating machines and equipment for earthworks and roadworks, such as graders and rollers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22214,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów technicznych oraz konserwacji maszyn drogowych.",
                    "en" => "Performing technical inspections and maintenance of road machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22215,

                "name" => json_encode([
                    "pl" => "Dostosowywanie sprzętu do specyfiki wykonywanych prac drogowych.",
                    "en" => "Adapting equipment to the specifics of road construction works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22216,

                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów pracy maszyn za pomocą zaawansowanych systemów sterowania.",
                    "en" => "Monitoring equipment performance using advanced control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22217,

                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności wykonywanych prac z normami bezpieczeństwa i przepisami.",
                    "en" => "Ensuring compliance with safety standards and regulations during operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22218,

                "name" => json_encode([
                    "pl" => "Raportowanie wyników pracy i uzupełnianie dokumentacji eksploatacyjnej sprzętu.",
                    "en" => "Reporting work results and maintaining operational documentation of equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_DROGOWNICTWA = [


            [
            "id" => 22219,
                "name" => json_encode([
                    "pl" => "Projektowanie i modernizacja dróg, ulic oraz obiektów inżynierskich.",
                    "en" => "Designing and modernizing roads, streets, and engineering structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22220,

                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją robót drogowych i kontrola ich zgodności z projektem.",
                    "en" => "Supervising road construction works and ensuring compliance with the project."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22221,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie pomiarów geodezyjnych i kontroli jakości nawierzchni drogowych.",
                    "en" => "Performing geodetic measurements and quality control of road surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22222,

                "name" => json_encode([
                    "pl" => "Tworzenie harmonogramów prac i kosztorysów budowy dróg.",
                    "en" => "Preparing work schedules and cost estimates for road construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22223,

                "name" => json_encode([
                    "pl" => "Współpraca z projektantami, wykonawcami oraz inwestorami w realizacji inwestycji drogowych.",
                    "en" => "Collaborating with designers, contractors, and investors on road construction projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22224,

                "name" => json_encode([
                    "pl" => "Sporządzanie dokumentacji technicznej i raportów dotyczących robót drogowych.",
                    "en" => "Preparing technical documentation and reports on road construction works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_NAWIERZCHNI_KOLEJOWEJ = [


            [
            "id" => 22225,
                "name" => json_encode([
                    "pl" => "Montaż i demontaż torów kolejowych oraz elementów infrastruktury torowej.",
                    "en" => "Installing and dismantling railway tracks and track infrastructure components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22226,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja nawierzchni kolejowych.",
                    "en" => "Repairing and maintaining railway surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22227,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie pomiarów geodezyjnych torowisk i ich regulacja.",
                    "en" => "Performing geodetic measurements of tracks and adjusting them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22228,

                "name" => json_encode([
                    "pl" => "Współpraca z operatorami maszyn torowych podczas prac montażowych.",
                    "en" => "Collaborating with track machine operators during assembly works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22229,

                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności wykonywanych prac z normami technicznymi i bezpieczeństwa.",
                    "en" => "Ensuring that work complies with technical and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22230,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej dotyczącej prac torowych.",
                    "en" => "Maintaining technical documentation on track work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $UKŁADACZ_NAWIERZCHNI_DROGOWYCH = [


            [
            "id" => 22231,
                "name" => json_encode([
                    "pl" => "Układanie asfaltu, betonu oraz innych materiałów nawierzchniowych na drogach i chodnikach.",
                    "en" => "Laying asphalt, concrete, and other surface materials on roads and sidewalks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22232,

                "name" => json_encode([
                    "pl" => "Obsługa sprzętu do układania nawierzchni, takiego jak rozściełacze asfaltu.",
                    "en" => "Operating surface-laying equipment, such as asphalt pavers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22233,

                "name" => json_encode([
                    "pl" => "Przygotowywanie podłoża pod nawierzchnie drogowe.",
                    "en" => "Preparing the subgrade for road surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22234,

                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanej nawierzchni oraz jej grubości i gładkości.",
                    "en" => "Controlling the quality of the laid surface, including its thickness and smoothness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22235,

                "name" => json_encode([
                    "pl" => "Usuwanie uszkodzeń nawierzchni drogowych i ich naprawa.",
                    "en" => "Removing road surface damage and performing repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22236,

                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności wykonywanych prac z projektami i przepisami budowlanymi.",
                    "en" => "Ensuring that works comply with plans and construction regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_DRÓG_I_MOSTÓW_KOLEJOWYCH = [


            [
            "id" => 22237,
                "name" => json_encode([
                    "pl" => "Projektowanie i modernizacja dróg kolejowych oraz mostów.",
                    "en" => "Designing and modernizing railway roads and bridges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22238,

                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją robót związanych z budową infrastruktury kolejowej.",
                    "en" => "Supervising works related to railway infrastructure construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22239,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie pomiarów geodezyjnych dla torowisk i mostów kolejowych.",
                    "en" => "Performing geodetic measurements for railway tracks and bridges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22240,

                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów i zgodności prac z projektem technicznym.",
                    "en" => "Ensuring material quality and work compliance with technical designs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22241,

                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej i raportów związanych z robotami kolejowymi.",
                    "en" => "Preparing technical documentation and reports on railway works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22242,

                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami i wykonawcami w realizacji inwestycji kolejowych.",
                    "en" => "Collaborating with engineers and contractors on railway investment projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MOSTOWNICZY = [


            [
            "id" => 22243,
                "name" => json_encode([
                    "pl" => "Montaż elementów konstrukcji mostów stalowych i betonowych.",
                    "en" => "Assembling components of steel and concrete bridge structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22244,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja mostów oraz wiaduktów.",
                    "en" => "Repairing and maintaining bridges and viaducts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22245,

                "name" => json_encode([
                    "pl" => "Kontrola jakości prac mostowniczych oraz zgodności z projektami.",
                    "en" => "Controlling the quality of bridgeworks and compliance with plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22246,

                "name" => json_encode([
                    "pl" => "Obsługa sprzętu specjalistycznego używanego do budowy mostów.",
                    "en" => "Operating specialized equipment used in bridge construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22247,

                "name" => json_encode([
                    "pl" => "Przygotowywanie powierzchni i fundamentów pod konstrukcje mostowe.",
                    "en" => "Preparing surfaces and foundations for bridge structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22248,

                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa podczas realizacji prac mostowniczych.",
                    "en" => "Adhering to safety regulations during bridgeworks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MISTRZ_PRODUKCJI_W_BUDOWNICTWIE_DROGOWYM = [


            [
            "id" => 22249,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołami robotników i operatorów sprzętu podczas budowy dróg.",
                    "en" => "Managing teams of workers and equipment operators during road construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22250,

                "name" => json_encode([
                    "pl" => "Nadzór nad jakością nawierzchni drogowych i zgodnością prac z projektem.",
                    "en" => "Supervising the quality of road surfaces and ensuring compliance with the project."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22251,

                "name" => json_encode([
                    "pl" => "Tworzenie harmonogramów prac i koordynacja dostaw materiałów budowlanych.",
                    "en" => "Creating work schedules and coordinating the delivery of construction materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22252,

                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów technicznych podczas realizacji inwestycji drogowych.",
                    "en" => "Resolving technical issues during road construction projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22253,

                "name" => json_encode([
                    "pl" => "Kontrola przestrzegania zasad bezpieczeństwa na placu budowy.",
                    "en" => "Monitoring compliance with safety regulations on the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22254,

                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z postępu prac i zużycia materiałów.",
                    "en" => "Preparing reports on work progress and material usage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MISTRZ_PRODUKCJI_W_BUDOWNICTWIE_KOLEJOWYM = [


            [
            "id" => 22255,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołami odpowiedzialnymi za budowę i modernizację torowisk kolejowych.",
                    "en" => "Managing teams responsible for the construction and modernization of railway tracks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22256,

                "name" => json_encode([
                    "pl" => "Nadzór nad montażem torów i urządzeń infrastruktury kolejowej.",
                    "en" => "Supervising the installation of tracks and railway infrastructure devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22257,

                "name" => json_encode([
                    "pl" => "Koordynacja dostaw materiałów i sprzętu niezbędnego do budowy torów.",
                    "en" => "Coordinating the delivery of materials and equipment required for track construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22258,

                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności prac z projektem oraz obowiązującymi normami technicznymi.",
                    "en" => "Ensuring compliance with the project and applicable technical standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22259,

                "name" => json_encode([
                    "pl" => "Kontrola bezpieczeństwa i jakości prac na budowie infrastruktury kolejowej.",
                    "en" => "Controlling safety and work quality on railway infrastructure construction sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22260,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji i raportów związanych z postępem robót.",
                    "en" => "Maintaining documentation and reports related to work progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MISTRZ_PRODUKCJI_W_BUDOWNICTWIE_MOSTOWYM = [


            [
            "id" => 22261,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołami odpowiedzialnymi za budowę i modernizację mostów.",
                    "en" => "Managing teams responsible for the construction and modernization of bridges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22262,

                "name" => json_encode([
                    "pl" => "Nadzór nad montażem konstrukcji mostowych oraz elementów infrastruktury.",
                    "en" => "Supervising the assembly of bridge structures and infrastructure components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22263,

                "name" => json_encode([
                    "pl" => "Koordynacja dostaw materiałów budowlanych i sprzętu specjalistycznego.",
                    "en" => "Coordinating the delivery of construction materials and specialized equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22264,

                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania harmonogramu i budżetu inwestycji mostowych.",
                    "en" => "Ensuring adherence to schedules and budgets for bridge projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22265,

                "name" => json_encode([
                    "pl" => "Kontrola bezpieczeństwa i jakości prac przy realizacji mostów.",
                    "en" => "Controlling safety and work quality during bridge construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22266,

                "name" => json_encode([
                    "pl" => "Sporządzanie raportów i dokumentacji dotyczącej postępów robót mostowych.",
                    "en" => "Preparing reports and documentation on the progress of bridge construction works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ROBOTNICY_BUDOWY_DRÓG = [


            [
            "id" => 22267,
                "name" => json_encode([
                    "pl" => "Przygotowywanie podłoża pod budowę dróg i chodników.",
                    "en" => "Preparing the subgrade for road and sidewalk construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22268,

                "name" => json_encode([
                    "pl" => "Układanie krawężników i elementów nawierzchni drogowych.",
                    "en" => "Laying curbs and road surface elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22269,

                "name" => json_encode([
                    "pl" => "Pomoc w obsłudze sprzętu do robót ziemnych, takiego jak zagęszczarki.",
                    "en" => "Assisting in the operation of earth-moving equipment, such as compactors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22270,

                "name" => json_encode([
                    "pl" => "Usuwanie uszkodzeń nawierzchni drogowych i wykonywanie drobnych napraw.",
                    "en" => "Removing road surface damage and performing minor repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22271,

                "name" => json_encode([
                    "pl" => "Przygotowywanie i transport materiałów budowlanych na placu budowy.",
                    "en" => "Preparing and transporting construction materials on the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22272,

                "name" => json_encode([
                    "pl" => "Sprzątanie terenu budowy po zakończeniu prac drogowych.",
                    "en" => "Cleaning the construction site after roadworks are completed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POMOCNICZY_ROBOTNIK_DROGOWY = [


            [
            "id" => 22273,
                "name" => json_encode([
                    "pl" => "Wykonywanie prostych prac pomocniczych na placu budowy dróg.",
                    "en" => "Performing simple auxiliary tasks on the road construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22274,

                "name" => json_encode([
                    "pl" => "Przygotowywanie i dostarczanie narzędzi oraz materiałów budowlanych.",
                    "en" => "Preparing and delivering tools and construction materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22275,

                "name" => json_encode([
                    "pl" => "Usuwanie gruzu i odpadów budowlanych z terenu budowy.",
                    "en" => "Removing debris and construction waste from the site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22276,

                "name" => json_encode([
                    "pl" => "Pomoc w prostych naprawach nawierzchni i elementów dróg.",
                    "en" => "Assisting in simple repairs of road surfaces and elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22277,

                "name" => json_encode([
                    "pl" => "Rozkładanie materiałów budowlanych, takich jak piasek czy asfalt.",
                    "en" => "Spreading construction materials, such as sand or asphalt."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22278,

                "name" => json_encode([
                    "pl" => "Pomoc przy obsłudze ręcznych narzędzi budowlanych, takich jak łopaty czy młoty pneumatyczne.",
                    "en" => "Assisting with the operation of handheld construction tools, such as shovels or pneumatic hammers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POMOCNICZY_ROBOTNIK_MOSTOWY = [


            [
            "id" => 22279,
                "name" => json_encode([
                    "pl" => "Wykonywanie prostych prac pomocniczych przy budowie mostów.",
                    "en" => "Performing basic auxiliary tasks during bridge construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22280,

                "name" => json_encode([
                    "pl" => "Przygotowywanie narzędzi i materiałów budowlanych dla zespołu roboczego.",
                    "en" => "Preparing tools and construction materials for the work team."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22281,

                "name" => json_encode([
                    "pl" => "Pomoc przy montażu elementów konstrukcji mostowej.",
                    "en" => "Assisting in assembling components of bridge structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22282,

                "name" => json_encode([
                    "pl" => "Usuwanie gruzu i odpadów z miejsca budowy mostu.",
                    "en" => "Removing debris and waste from the bridge construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22283,

                "name" => json_encode([
                    "pl" => "Pomoc przy naprawach i konserwacji istniejących mostów.",
                    "en" => "Assisting in repairs and maintenance of existing bridges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22284,

                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania zasad bezpieczeństwa na placu budowy.",
                    "en" => "Ensuring compliance with safety regulations on the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_BUDOWY_DRÓG = [


            [
            "id" => 22285,
                "name" => json_encode([
                    "pl" => "Projektowanie i planowanie budowy dróg oraz chodników.",
                    "en" => "Designing and planning the construction of roads and sidewalks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22286,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie pomiarów geodezyjnych oraz tworzenie map terenu.",
                    "en" => "Conducting geodetic measurements and creating site maps."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22287,

                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją robót ziemnych oraz układaniem nawierzchni drogowych.",
                    "en" => "Supervising earthworks and the laying of road surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22288,

                "name" => json_encode([
                    "pl" => "Kontrola jakości używanych materiałów i wykonywanych prac.",
                    "en" => "Ensuring the quality of materials used and the work performed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22289,

                "name" => json_encode([
                    "pl" => "Tworzenie kosztorysów i harmonogramów robót drogowych.",
                    "en" => "Preparing cost estimates and schedules for roadworks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22290,

                "name" => json_encode([
                    "pl" => "Współpraca z projektantami, wykonawcami i inwestorami w realizacji projektów drogowych.",
                    "en" => "Collaborating with designers, contractors, and investors on road construction projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_DRÓG_KOLEJOWYCH_I_OBIEKTÓW_INŻYNIERYJNYCH = [


            [
            "id" => 22291,
                "name" => json_encode([
                    "pl" => "Projektowanie oraz modernizacja torowisk i obiektów inżynieryjnych związanych z koleją.",
                    "en" => "Designing and modernizing railway tracks and engineering structures related to railways."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22292,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie pomiarów geodezyjnych dla infrastruktury kolejowej.",
                    "en" => "Conducting geodetic measurements for railway infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22293,

                "name" => json_encode([
                    "pl" => "Nadzór nad pracami remontowymi i modernizacyjnymi na torowiskach.",
                    "en" => "Supervising renovation and modernization works on railway tracks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22294,

                "name" => json_encode([
                    "pl" => "Tworzenie kosztorysów i harmonogramów robót kolejowych.",
                    "en" => "Preparing cost estimates and schedules for railway works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22295,

                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonywanych prac oraz używanych materiałów.",
                    "en" => "Ensuring the quality of work performed and materials used."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22296,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej dotyczącej realizowanych inwestycji kolejowych.",
                    "en" => "Maintaining technical documentation related to railway investment projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_BUDOWNICTWA_KOLEJOWEGO = [


            [
            "id" => 22297,
                "name" => json_encode([
                    "pl" => "Projektowanie i planowanie budowy infrastruktury kolejowej, w tym torowisk i mostów.",
                    "en" => "Designing and planning the construction of railway infrastructure, including tracks and bridges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22298,

                "name" => json_encode([
                    "pl" => "Tworzenie kosztorysów i harmonogramów dla inwestycji kolejowych.",
                    "en" => "Preparing cost estimates and schedules for railway investments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22299,

                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją prac budowlanych związanych z infrastrukturą kolejową.",
                    "en" => "Supervising construction works related to railway infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22300,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie pomiarów geodezyjnych i analiz technicznych torowisk.",
                    "en" => "Conducting geodetic measurements and technical analyses of railway tracks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22301,

                "name" => json_encode([
                    "pl" => "Kontrola jakości używanych materiałów oraz zgodności prac z projektem technicznym.",
                    "en" => "Ensuring the quality of materials used and compliance with the technical project."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22302,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej oraz raportowanie postępu prac.",
                    "en" => "Maintaining technical documentation and reporting on work progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KAMIENIARZ = [


            [
            "id" => 22303,
                "name" => json_encode([
                    "pl" => "Wykonywanie elementów z kamienia naturalnego, takich jak parapety, blaty, schody czy nagrobki.",
                    "en" => "Creating elements from natural stone, such as windowsills, countertops, stairs, and tombstones."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22304,

                "name" => json_encode([
                    "pl" => "Cięcie, szlifowanie i polerowanie kamienia przy użyciu specjalistycznych narzędzi.",
                    "en" => "Cutting, grinding, and polishing stone using specialized tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22305,

                "name" => json_encode([
                    "pl" => "Montaż wykonanych elementów kamiennych w budynkach i przestrzeniach zewnętrznych.",
                    "en" => "Installing manufactured stone elements in buildings and outdoor spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22306,

                "name" => json_encode([
                    "pl" => "Naprawa i renowacja elementów z kamienia naturalnego, takich jak elewacje czy posadzki.",
                    "en" => "Repairing and restoring natural stone elements, such as facades and floors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22307,

                "name" => json_encode([
                    "pl" => "Dobór odpowiedniego kamienia do danego projektu w zależności od jego właściwości i wyglądu.",
                    "en" => "Selecting appropriate stone for a project based on its properties and appearance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22308,

                "name" => json_encode([
                    "pl" => "Wykonywanie zdobień i grawerów na elementach kamiennych.",
                    "en" => "Creating decorations and engravings on stone elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ROBOTNICY_OBRÓBKI_KAMIENIA = [


            [
            "id" => 22309,
                "name" => json_encode([
                    "pl" => "Przygotowywanie bloków kamiennych do dalszej obróbki mechanicznej.",
                    "en" => "Preparing stone blocks for further mechanical processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22310,

                "name" => json_encode([
                    "pl" => "Obsługa maszyn do cięcia i kształtowania kamienia.",
                    "en" => "Operating machines for cutting and shaping stone."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22311,

                "name" => json_encode([
                    "pl" => "Szlifowanie i polerowanie powierzchni kamiennych w celu uzyskania odpowiedniej gładkości.",
                    "en" => "Grinding and polishing stone surfaces to achieve the desired smoothness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22312,

                "name" => json_encode([
                    "pl" => "Pakowanie i transportowanie gotowych produktów z kamienia.",
                    "en" => "Packing and transporting finished stone products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22313,

                "name" => json_encode([
                    "pl" => "Pomoc w montażu elementów z kamienia na budowach lub w zakładach produkcyjnych.",
                    "en" => "Assisting in the installation of stone elements on construction sites or in production facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22314,

                "name" => json_encode([
                    "pl" => "Kontrola jakości gotowych elementów kamiennych przed ich wysyłką do klienta.",
                    "en" => "Quality control of finished stone elements before shipping to the client."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BETONIARZ = [


            [
            "id" => 22315,
                "name" => json_encode([
                    "pl" => "Przygotowywanie mieszanki betonowej według określonych proporcji.",
                    "en" => "Preparing concrete mix according to specified proportions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22316,

                "name" => json_encode([
                    "pl" => "Wylewanie betonu do szalunków i form konstrukcyjnych.",
                    "en" => "Pouring concrete into molds and structural forms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22317,

                "name" => json_encode([
                    "pl" => "Zagęszczanie mieszanki betonowej za pomocą wibracji lub innych metod.",
                    "en" => "Compacting concrete mix using vibration or other methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22318,

                "name" => json_encode([
                    "pl" => "Pielęgnacja świeżo wylanego betonu, aby zapewnić jego odpowiednią wytrzymałość.",
                    "en" => "Curing freshly poured concrete to ensure proper strength."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22319,

                "name" => json_encode([
                    "pl" => "Naprawa uszkodzeń i ubytków w konstrukcjach betonowych.",
                    "en" => "Repairing damages and deficiencies in concrete structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22320,

                "name" => json_encode([
                    "pl" => "Kontrola jakości betonu i zgodności z dokumentacją techniczną.",
                    "en" => "Ensuring the quality of concrete and compliance with technical documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BETONIARZ_ZBROJARZ = [


            [
            "id" => 22321,
                "name" => json_encode([
                    "pl" => "Przygotowywanie mieszanki betonowej oraz zbrojenia konstrukcji.",
                    "en" => "Preparing concrete mix and reinforcing structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22322,

                "name" => json_encode([
                    "pl" => "Montaż zbrojenia według projektu technicznego.",
                    "en" => "Installing reinforcement according to the technical project."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22323,

                "name" => json_encode([
                    "pl" => "Wylewanie betonu na przygotowane zbrojenie.",
                    "en" => "Pouring concrete over prepared reinforcement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22324,

                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych prac betoniarskich i zbrojeniowych.",
                    "en" => "Inspecting the quality of concrete and reinforcement works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22325,

                "name" => json_encode([
                    "pl" => "Naprawa uszkodzeń w konstrukcjach żelbetowych.",
                    "en" => "Repairing damages in reinforced concrete structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22326,

                "name" => json_encode([
                    "pl" => "Zabezpieczenie konstrukcji przed wpływem warunków atmosferycznych.",
                    "en" => "Protecting structures from weather conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PALOWNICZY = [


            [
            "id" => 22327,
                "name" => json_encode([
                    "pl" => "Przygotowywanie i montaż pali fundamentowych.",
                    "en" => "Preparing and installing foundation piles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22328,

                "name" => json_encode([
                    "pl" => "Obsługa specjalistycznych maszyn do wbijania pali.",
                    "en" => "Operating specialized machines for pile driving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22329,

                "name" => json_encode([
                    "pl" => "Kontrola pionowości i głębokości wbijanych pali.",
                    "en" => "Checking the verticality and depth of driven piles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22330,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja sprzętu palowniczego.",
                    "en" => "Repairing and maintaining pile-driving equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22331,

                "name" => json_encode([
                    "pl" => "Zabezpieczenie obszaru pracy przed zagrożeniami.",
                    "en" => "Securing the work area against hazards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22332,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej dotyczącej wbijania pali.",
                    "en" => "Maintaining technical documentation related to pile driving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ZBROJARZ = [


            [
            "id" => 22333,
                "name" => json_encode([
                    "pl" => "Przygotowywanie i gięcie prętów zbrojeniowych według projektu.",
                    "en" => "Preparing and bending reinforcement bars according to the design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22334,

                "name" => json_encode([
                    "pl" => "Montaż zbrojenia w konstrukcjach betonowych.",
                    "en" => "Installing reinforcement in concrete structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22335,

                "name" => json_encode([
                    "pl" => "Łączenie prętów zbrojeniowych za pomocą drutu wiązałkowego.",
                    "en" => "Joining reinforcement bars using tying wire."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22336,

                "name" => json_encode([
                    "pl" => "Kontrola zgodności wykonanego zbrojenia z projektem technicznym.",
                    "en" => "Ensuring the installed reinforcement complies with the technical design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22337,

                "name" => json_encode([
                    "pl" => "Przygotowanie zbrojenia do zalania betonem.",
                    "en" => "Preparing reinforcement for concrete pouring."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22338,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej dotyczącej zbrojenia.",
                    "en" => "Maintaining technical documentation related to reinforcement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_BETONIARZE_BETONIARZE_ZBROJARZE_I_POKREWNI = [


            [
            "id" => 22339,
                "name" => json_encode([
                    "pl" => "Obsługa specjalistycznego sprzętu do wylewania i zagęszczania betonu.",
                    "en" => "Operating specialized equipment for pouring and compacting concrete."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22340,

                "name" => json_encode([
                    "pl" => "Prace montażowe związane z konstrukcjami żelbetowymi.",
                    "en" => "Performing assembly works related to reinforced concrete structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22341,

                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych elementów betonowych i żelbetowych.",
                    "en" => "Inspecting the quality of completed concrete and reinforced concrete elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22342,

                "name" => json_encode([
                    "pl" => "Przygotowanie form i szalunków do zalania betonem.",
                    "en" => "Preparing molds and formwork for concrete pouring."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22343,

                "name" => json_encode([
                    "pl" => "Pielęgnacja betonu po zalaniu w celu uzyskania wymaganej wytrzymałości.",
                    "en" => "Curing concrete after pouring to achieve required strength."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22344,

                "name" => json_encode([
                    "pl" => "Naprawa uszkodzeń konstrukcji betonowych i żelbetowych.",
                    "en" => "Repairing damages in concrete and reinforced concrete structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_CIEŚLE_I_STOLARZE_BUDOWLANI = [


            [
            "id" => 22345,
                "name" => json_encode([
                    "pl" => "Budowa i montaż elementów konstrukcyjnych z drewna, takich jak więźby dachowe, schody czy okna.",
                    "en" => "Building and assembling structural wooden elements, such as roof trusses, stairs, and windows."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22346,

                "name" => json_encode([
                    "pl" => "Renowacja i konserwacja drewnianych elementów konstrukcyjnych budynków.",
                    "en" => "Renovating and maintaining wooden structural elements of buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22347,

                "name" => json_encode([
                    "pl" => "Obsługa narzędzi stolarskich i ciesielskich, takich jak piły, młoty czy strugi.",
                    "en" => "Operating carpentry and joinery tools, such as saws, hammers, and planes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22348,

                "name" => json_encode([
                    "pl" => "Wykonywanie szalunków i innych tymczasowych konstrukcji drewnianych.",
                    "en" => "Creating formwork and other temporary wooden structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22349,

                "name" => json_encode([
                    "pl" => "Instalacja i montaż drewnianych wykończeń wewnętrznych i zewnętrznych budynków.",
                    "en" => "Installing and assembling wooden interior and exterior finishes for buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22350,

                "name" => json_encode([
                    "pl" => "Przygotowywanie i zabezpieczanie drewna do użytku budowlanego.",
                    "en" => "Preparing and protecting wood for construction purposes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONSERWATOR_BUDYNKÓW_I_STANU_TECHNICZNEGO_POMIESZCZEŃ = [


            [
            "id" => 22351,
                "name" => json_encode([
                    "pl" => "Wykonywanie drobnych napraw i konserwacji w budynkach, takich jak naprawa ścian, drzwi czy instalacji.",
                    "en" => "Performing minor repairs and maintenance in buildings, such as fixing walls, doors, or installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22352,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie regularnych przeglądów stanu technicznego budynków i pomieszczeń.",
                    "en" => "Conducting regular inspections of the technical condition of buildings and rooms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22353,

                "name" => json_encode([
                    "pl" => "Usuwanie usterek w instalacjach elektrycznych, wodno-kanalizacyjnych i grzewczych.",
                    "en" => "Fixing faults in electrical, plumbing, and heating systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22354,

                "name" => json_encode([
                    "pl" => "Malowanie i odnawianie ścian oraz innych elementów wykończenia wnętrz.",
                    "en" => "Painting and refreshing walls and other interior finishings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22355,

                "name" => json_encode([
                    "pl" => "Zarządzanie narzędziami i materiałami potrzebnymi do konserwacji.",
                    "en" => "Managing tools and materials needed for maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22356,

                "name" => json_encode([
                    "pl" => "Współpraca z ekipami remontowymi i technicznymi podczas większych prac budowlanych.",
                    "en" => "Collaborating with renovation and technical teams during major construction works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_KONSTRUKCJI_BUDOWLANYCH = [


            [
            "id" => 22357,
                "name" => json_encode([
                    "pl" => "Montaż stalowych i żelbetowych konstrukcji budowlanych, takich jak hale czy mosty.",
                    "en" => "Assembling steel and reinforced concrete building structures, such as halls and bridges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22358,

                "name" => json_encode([
                    "pl" => "Praca z dźwigami i podnośnikami przy montażu elementów konstrukcyjnych.",
                    "en" => "Working with cranes and lifts to assemble structural elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22359,

                "name" => json_encode([
                    "pl" => "Łączenie i mocowanie elementów konstrukcji za pomocą śrub, spawania lub innych metod.",
                    "en" => "Connecting and securing structural components using bolts, welding, or other methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22360,

                "name" => json_encode([
                    "pl" => "Kontrola zgodności montażu z dokumentacją techniczną i projektową.",
                    "en" => "Ensuring compliance of the assembly with technical and design documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22361,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja istniejących konstrukcji budowlanych.",
                    "en" => "Repairing and maintaining existing building structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22362,

                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa podczas pracy na wysokości.",
                    "en" => "Adhering to safety regulations when working at heights."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RENOWATOR_ZABYTKÓW_ARCHITEKTURY = [


            [
            "id" => 22363,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie prac konserwatorskich na zabytkowych budynkach i konstrukcjach.",
                    "en" => "Performing conservation works on historic buildings and structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22364,

                "name" => json_encode([
                    "pl" => "Odtwarzanie brakujących elementów architektonicznych zgodnie z dokumentacją historyczną.",
                    "en" => "Recreating missing architectural elements based on historical documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22365,

                "name" => json_encode([
                    "pl" => "Naprawa i wzmacnianie oryginalnych struktur budynku.",
                    "en" => "Repairing and reinforcing the original structures of a building."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22366,

                "name" => json_encode([
                    "pl" => "Przygotowywanie powierzchni i nakładanie specjalistycznych powłok ochronnych.",
                    "en" => "Preparing surfaces and applying specialized protective coatings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22367,

                "name" => json_encode([
                    "pl" => "Dokumentowanie postępu prac i sporządzanie raportów konserwatorskich.",
                    "en" => "Documenting progress and preparing conservation reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22368,

                "name" => json_encode([
                    "pl" => "Współpraca z archeologami, historykami sztuki i projektantami przy renowacji zabytków.",
                    "en" => "Collaborating with archaeologists, art historians, and designers in monument renovation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_MONTERZY_KONSTRUKCJI_BUDOWLANYCH_I_KONSERWATORZY_BUDYNKÓW = [


            [
            "id" => 22369,
                "name" => json_encode([
                    "pl" => "Montaż i demontaż elementów konstrukcyjnych budynków, takich jak ściany, dachy czy okna.",
                    "en" => "Installing and dismantling structural elements of buildings, such as walls, roofs, and windows."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22370,

                "name" => json_encode([
                    "pl" => "Renowacja i konserwacja elementów budowlanych, w tym tynków, okien i drzwi.",
                    "en" => "Renovating and conserving building elements, including plaster, windows, and doors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22371,

                "name" => json_encode([
                    "pl" => "Wykonywanie prac konserwatorskich w budynkach zabytkowych i historycznych.",
                    "en" => "Carrying out conservation works on historic and heritage buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22372,

                "name" => json_encode([
                    "pl" => "Instalacja i montaż systemów ochrony budynków, takich jak instalacje przeciwpożarowe.",
                    "en" => "Installing and assembling building protection systems, such as fire safety installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22373,

                "name" => json_encode([
                    "pl" => "Nadzór nad pracami budowlanymi w zakresie montażu i konserwacji budynków.",
                    "en" => "Supervising construction works related to the assembly and maintenance of buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22374,

                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych robót budowlanych oraz zgodności z projektem.",
                    "en" => "Ensuring the quality of completed construction works and compliance with the design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ROBOTNIK_BUDOWLANY = [


            [
            "id" => 22375,
                "name" => json_encode([
                    "pl" => "Prace ziemne, wykopy, niwelacje i zagęszczanie podłoża budowlanego.",
                    "en" => "Earthworks, excavations, leveling, and compaction of the construction ground."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22376,

                "name" => json_encode([
                    "pl" => "Pomoc przy murowaniu ścian, stawianiu fundamentów i konstrukcji budowlanych.",
                    "en" => "Assisting in bricklaying walls, building foundations, and construction structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22377,

                "name" => json_encode([
                    "pl" => "Zabezpieczanie terenu budowy przed zagrożeniami i usuwanie odpadów budowlanych.",
                    "en" => "Securing the construction site from hazards and removing construction waste."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22378,

                "name" => json_encode([
                    "pl" => "Transport materiałów budowlanych w obrębie placu budowy.",
                    "en" => "Transporting construction materials within the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22379,

                "name" => json_encode([
                    "pl" => "Montaż elementów konstrukcyjnych, takich jak płyty betonowe, cegły czy stalowe belki.",
                    "en" => "Assembling structural components, such as concrete slabs, bricks, or steel beams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22380,

                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku na terenie budowy.",
                    "en" => "Maintaining cleanliness on the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTAŻYSTA_DEKORACJI = [


            [
            "id" => 22381,
                "name" => json_encode([
                    "pl" => "Montaż dekoracji na eventach, wystawach oraz w przestrzeniach komercyjnych.",
                    "en" => "Assembling decorations at events, exhibitions, and commercial spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22382,

                "name" => json_encode([
                    "pl" => "Wykonywanie dekoracji wewnętrznych i zewnętrznych zgodnie z projektem.",
                    "en" => "Creating interior and exterior decorations according to the design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22383,

                "name" => json_encode([
                    "pl" => "Współpraca z projektantami przy tworzeniu koncepcji dekoracji.",
                    "en" => "Collaborating with designers to create decoration concepts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22384,

                "name" => json_encode([
                    "pl" => "Transportowanie dekoracji i materiałów dekoracyjnych na miejsce wydarzeń.",
                    "en" => "Transporting decorations and decorative materials to event locations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22385,

                "name" => json_encode([
                    "pl" => "Pomoc w demontażu dekoracji po zakończeniu wydarzenia.",
                    "en" => "Assisting in dismantling decorations after the event is over."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22386,

                "name" => json_encode([
                    "pl" => "Utrzymywanie wysokiego standardu estetycznego dekoracji.",
                    "en" => "Maintaining high aesthetic standards of decorations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ROBOTNICY_BUDOWLANI_ROBÓT_STANU_SUROWEGO_I_POKREWNI = [


            [
            "id" => 22387,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac związanych z fundamentowaniem budynków, w tym wykopy i wylewanie fundamentów.",
                    "en" => "Performing works related to building foundations, including excavation and pouring foundations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22388,

                "name" => json_encode([
                    "pl" => "Wznoszenie konstrukcji budowlanych z materiałów takich jak beton, cegły, drewno.",
                    "en" => "Raising building structures from materials such as concrete, bricks, and wood."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22389,

                "name" => json_encode([
                    "pl" => "Pomoc przy wykonywaniu robót ziemnych, takich jak niwelacje i zagęszczanie terenu.",
                    "en" => "Assisting in earthworks, such as leveling and soil compaction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22390,

                "name" => json_encode([
                    "pl" => "Przygotowywanie narzędzi i materiałów budowlanych do użycia na placu budowy.",
                    "en" => "Preparing tools and building materials for use on the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22391,

                "name" => json_encode([
                    "pl" => "Usuwanie gruzu i odpadów budowlanych oraz utrzymywanie porządku na budowie.",
                    "en" => "Removing rubble and construction waste and maintaining cleanliness on the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22392,

                "name" => json_encode([
                    "pl" => "Asystowanie przy pracach związanych z wznoszeniem konstrukcji budowlanych.",
                    "en" => "Assisting with works related to building construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ROBOTNICY_WYKONUJĄCY_PRACE_PROSTE_W_BUDOWNICTWIE_OGÓLNYM = [


            [
            "id" => 22393,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowywaniu materiałów budowlanych i transportowaniu ich na plac budowy.",
                    "en" => "Assisting in preparing and transporting construction materials to the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22394,

                "name" => json_encode([
                    "pl" => "Prace pomocnicze związane z czyszczeniem terenu budowy.",
                    "en" => "Auxiliary tasks related to cleaning the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22395,

                "name" => json_encode([
                    "pl" => "Przygotowywanie i ustawianie sprzętu oraz narzędzi budowlanych.",
                    "en" => "Preparing and setting up construction equipment and tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22396,

                "name" => json_encode([
                    "pl" => "Wykonywanie prostych prac ziemnych, takich jak wykopy pod fundamenty.",
                    "en" => "Performing simple earthworks, such as excavations for foundations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22397,

                "name" => json_encode([
                    "pl" => "Pomoc przy układaniu materiałów budowlanych, takich jak cegły, pustaki, płyty.",
                    "en" => "Assisting in laying construction materials, such as bricks, blocks, and slabs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22398,

                "name" => json_encode([
                    "pl" => "Usuwanie odpadów budowlanych z placu budowy.",
                    "en" => "Removing construction waste from the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ROBOTNICY_CZYSZCZĄCY_KONSTRUKCJE_BUDOWLANE_I_POKREWNI = [


            [
            "id" => 22399,
                "name" => json_encode([
                    "pl" => "Czyszczenie konstrukcji budowlanych z brudu, kurzu i resztek materiałów budowlanych.",
                    "en" => "Cleaning building structures from dirt, dust, and construction debris."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22400,

                "name" => json_encode([
                    "pl" => "Mycie okien, fasad budynków i innych elementów konstrukcyjnych.",
                    "en" => "Washing windows, building facades, and other structural elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22401,

                "name" => json_encode([
                    "pl" => "Usuwanie odpadów, takich jak papier, drewno, metal, z budowy i terenów wokół.",
                    "en" => "Removing waste, such as paper, wood, and metal, from the construction site and surrounding areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22402,

                "name" => json_encode([
                    "pl" => "Przygotowywanie powierzchni do malowania lub innych prac wykończeniowych.",
                    "en" => "Preparing surfaces for painting or other finishing work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22403,

                "name" => json_encode([
                    "pl" => "Oczyszczanie wykopów budowlanych i innych obszarów budowy.",
                    "en" => "Cleaning construction excavations and other areas of the site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22404,

                "name" => json_encode([
                    "pl" => "Czyszczenie narzędzi budowlanych po zakończeniu pracy.",
                    "en" => "Cleaning construction tools after work is completed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ROBOTNIK_OSUSZANIA_I_ODGRZYBIANIA_BUDOWLI = [


            [
            "id" => 22405,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac związanych z osuszaniem budynków, takich jak usuwanie wilgoci z murów.",
                    "en" => "Performing tasks related to drying buildings, such as removing moisture from walls."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22406,

                "name" => json_encode([
                    "pl" => "Wykonywanie prac związanych z odgrzybianiem pomieszczeń budowlanych.",
                    "en" => "Performing tasks related to mold remediation in building rooms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22407,

                "name" => json_encode([
                    "pl" => "Instalowanie urządzeń osuszających w budynkach.",
                    "en" => "Installing drying equipment in buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22408,

                "name" => json_encode([
                    "pl" => "Usuwanie pleśni i grzybów z powierzchni budowlanych.",
                    "en" => "Removing mold and fungi from construction surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22409,

                "name" => json_encode([
                    "pl" => "Oczyszczanie i odkażanie przestrzeni budowlanych z pleśni.",
                    "en" => "Cleaning and disinfecting building spaces from mold."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22410,

                "name" => json_encode([
                    "pl" => "Kontrola i monitorowanie poziomu wilgotności w budynkach.",
                    "en" => "Controlling and monitoring humidity levels in buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ROBOTNICY_CZYSZCZĄCY_KONSTRUKCJE_BUDOWLANE_I_POKREWNI = [


            [
            "id" => 22411,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie czyszczenia zewnętrznych i wewnętrznych powierzchni budynków, w tym mycie dachów i elewacji.",
                    "en" => "Cleaning external and internal surfaces of buildings, including washing roofs and facades."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22412,

                "name" => json_encode([
                    "pl" => "Usuwanie odpadów budowlanych i resztek materiałów z powierzchni konstrukcyjnych.",
                    "en" => "Removing construction debris and leftover materials from structural surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22413,

                "name" => json_encode([
                    "pl" => "Utrzymywanie czystości na terenie budowy, w tym zamiatanie i mycie podłóg w budynkach.",
                    "en" => "Maintaining cleanliness on the construction site, including sweeping and washing floors in buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22414,

                "name" => json_encode([
                    "pl" => "Przygotowywanie powierzchni do dalszych prac wykończeniowych.",
                    "en" => "Preparing surfaces for further finishing work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22415,

                "name" => json_encode([
                    "pl" => "Zabezpieczanie powierzchni przed zabrudzeniem podczas dalszych prac budowlanych.",
                    "en" => "Protecting surfaces from dirt during further construction works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22416,

                "name" => json_encode([
                    "pl" => "Wykonywanie drobnych napraw i czyszczenie elementów konstrukcji budowlanych.",
                    "en" => "Performing minor repairs and cleaning building structure elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_OCIEPLEŃ_BUDYNKÓW = [


            [
            "id" => 22417,
                "name" => json_encode([
                    "pl" => "Montaż systemów ociepleń budynków, w tym aplikacja styropianu, wełny mineralnej lub innych materiałów ociepleniowych.",
                    "en" => "Installing insulation systems for buildings, including applying styrofoam, mineral wool, or other insulating materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22418,

                "name" => json_encode([
                    "pl" => "Przygotowywanie powierzchni budynków do montażu materiałów ociepleniowych.",
                    "en" => "Preparing building surfaces for the installation of insulating materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22419,

                "name" => json_encode([
                    "pl" => "Montaż siatek zbrojeniowych i elementów ochronnych w systemach ociepleń.",
                    "en" => "Installing reinforcing mesh and protective elements in insulation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22420,

                "name" => json_encode([
                    "pl" => "Wykonywanie prac wykończeniowych na ocieplonych powierzchniach, w tym tynkowanie i malowanie.",
                    "en" => "Performing finishing works on insulated surfaces, including plastering and painting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22421,

                "name" => json_encode([
                    "pl" => "Sprawdzanie jakości wykonanych prac ociepleniowych i zapewnienie ich zgodności z normami.",
                    "en" => "Checking the quality of insulation works and ensuring compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22422,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej postępu prac ociepleniowych.",
                    "en" => "Maintaining documentation regarding the progress of insulation work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TYNKARZ = [


            [
            "id" => 22423,
                "name" => json_encode([
                    "pl" => "Nakładanie tynków wewnętrznych i zewnętrznych na powierzchnie budowlane.",
                    "en" => "Applying internal and external plaster to building surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22424,

                "name" => json_encode([
                    "pl" => "Przygotowywanie powierzchni do nałożenia tynku, w tym czyszczenie i wygładzanie ścian.",
                    "en" => "Preparing surfaces for plaster application, including cleaning and smoothing walls."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22425,

                "name" => json_encode([
                    "pl" => "Nakładanie tynków specjalistycznych, takich jak tynki dekoracyjne czy akustyczne.",
                    "en" => "Applying specialist plasters, such as decorative or acoustic plasters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22426,

                "name" => json_encode([
                    "pl" => "Wykonywanie poprawek i napraw tynków na powierzchniach budowlanych.",
                    "en" => "Making corrections and repairs to plastered surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22427,

                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych tynków i ich zgodności z projektem.",
                    "en" => "Controlling the quality of plasterwork and ensuring compliance with the design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22428,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z pracami tynkarskimi.",
                    "en" => "Maintaining documentation related to plastering works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_FASAD = [


            [
            "id" => 22429,
                "name" => json_encode([
                    "pl" => "Montaż elewacji budynków, w tym systemów ociepleń i okładzin zewnętrznych.",
                    "en" => "Installing building facades, including insulation systems and exterior cladding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22430,

                "name" => json_encode([
                    "pl" => "Przygotowywanie powierzchni budynku do montażu fasady, w tym oczyszczanie i szlifowanie.",
                    "en" => "Preparing the building surface for facade installation, including cleaning and grinding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22431,

                "name" => json_encode([
                    "pl" => "Montaż okien, drzwi i innych elementów w ramach systemu fasady.",
                    "en" => "Installing windows, doors, and other elements as part of the facade system."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22432,

                "name" => json_encode([
                    "pl" => "Wykonywanie tynków elewacyjnych i malowanie fasad.",
                    "en" => "Performing exterior plastering and painting of facades."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22433,

                "name" => json_encode([
                    "pl" => "Inspekcja i naprawa zniszczeń w elewacjach budynków.",
                    "en" => "Inspecting and repairing damages to building facades."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22434,

                "name" => json_encode([
                    "pl" => "Zabezpieczanie elewacji budynków przed warunkami atmosferycznymi.",
                    "en" => "Protecting building facades from weather conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_TYNKARZE_I_POKREWNI = [


            [
            "id" => 22435,
                "name" => json_encode([
                    "pl" => "Nakładanie tynków cementowo-wapiennych, gipsowych i innych specjalistycznych tynków.",
                    "en" => "Applying cement-lime, gypsum, and other specialized plasters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22436,

                "name" => json_encode([
                    "pl" => "Wykonywanie dekoracyjnych tynków, w tym strukturalnych i artystycznych.",
                    "en" => "Applying decorative plasters, including structural and artistic plasters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22437,

                "name" => json_encode([
                    "pl" => "Wykonywanie tynków w pomieszczeniach o specjalnych wymaganiach, takich jak sale operacyjne czy magazyny.",
                    "en" => "Applying plaster in rooms with special requirements, such as operating rooms or warehouses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22438,

                "name" => json_encode([
                    "pl" => "Naprawa i uzupełnianie tynków zniszczonych w wyniku uszkodzeń lub starzenia się materiałów.",
                    "en" => "Repairing and restoring plasters damaged by wear or physical harm."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22439,

                "name" => json_encode([
                    "pl" => "Utrzymywanie czystości na stanowisku pracy i odpowiednie zabezpieczenie elementów budowlanych przed zabrudzeniem.",
                    "en" => "Maintaining cleanliness at the worksite and properly protecting building elements from contamination."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22440,

                "name" => json_encode([
                    "pl" => "Kontrola jakości nałożonych tynków oraz zapewnienie ich zgodności z wymaganiami technicznymi.",
                    "en" => "Checking the quality of applied plasters and ensuring compliance with technical requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SZTUKATOR = [


            [
            "id" => 22441,
                "name" => json_encode([
                    "pl" => "Wykonywanie dekoracyjnych elementów sztukatorskich, takich jak gzymsy, listwy i ornamenty.",
                    "en" => "Creating decorative stucco elements such as cornices, moldings, and ornaments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22442,

                "name" => json_encode([
                    "pl" => "Renowacja i odtworzenie zabytkowych elementów sztukatorskich w budynkach.",
                    "en" => "Renovating and restoring historic stucco elements in buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22443,

                "name" => json_encode([
                    "pl" => "Tworzenie odlewów gipsowych i innych materiałów sztukatorskich.",
                    "en" => "Creating gypsum casts and other stucco materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22444,

                "name" => json_encode([
                    "pl" => "Montaż elementów sztukatorskich na budowie, takich jak dekoracyjne listwy sufitowe.",
                    "en" => "Installing stucco elements on-site, such as decorative ceiling moldings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22445,

                "name" => json_encode([
                    "pl" => "Malowanie i wykańczanie elementów sztukatorskich, aby uzyskać pożądany wygląd.",
                    "en" => "Painting and finishing stucco elements to achieve the desired appearance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22446,

                "name" => json_encode([
                    "pl" => "Dostosowanie sztukatorskich detali do architektonicznych wymagań budynku.",
                    "en" => "Adapting stucco details to the architectural requirements of the building."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_MURARZE_I_POKREWNI = [


            [
            "id" => 22447,
                "name" => json_encode([
                    "pl" => "Wykonywanie fundamentów, ścian, słupów i innych elementów konstrukcji murowanych.",
                    "en" => "Building foundations, walls, columns, and other masonry construction elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22448,

                "name" => json_encode([
                    "pl" => "Układanie cegieł, bloków, kamieni i innych materiałów budowlanych zgodnie z projektem.",
                    "en" => "Laying bricks, blocks, stones, and other construction materials according to the project."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22449,

                "name" => json_encode([
                    "pl" => "Wykonywanie tynków i zapraw do wypełniania szczelin w konstrukcjach murowych.",
                    "en" => "Applying plasters and mortars to fill gaps in masonry structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22450,

                "name" => json_encode([
                    "pl" => "Wykonywanie prac renowacyjnych i naprawczych w istniejących konstrukcjach murowanych.",
                    "en" => "Performing renovation and repair work on existing masonry structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22451,

                "name" => json_encode([
                    "pl" => "Przygotowywanie zapraw murarskich i innych materiałów budowlanych do użytku.",
                    "en" => "Preparing mortar and other construction materials for use."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22452,

                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych robót murowych oraz ich zgodności z projektem.",
                    "en" => "Checking the quality of masonry works and their compliance with the design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_ISOLACJI_BUDOWLANYCH = [


            [
            "id" => 22453,
                "name" => json_encode([
                    "pl" => "Montaż systemów izolacyjnych budynków, w tym ociepleń, hydroizolacji i akustycznych.",
                    "en" => "Installing building insulation systems, including thermal insulation, waterproofing, and acoustic insulation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22454,

                "name" => json_encode([
                    "pl" => "Przygotowywanie powierzchni budowlanych przed nałożeniem materiałów izolacyjnych.",
                    "en" => "Preparing construction surfaces before applying insulating materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22455,

                "name" => json_encode([
                    "pl" => "Aplikacja materiałów izolacyjnych, takich jak styropian, wełna mineralna czy folie paroizolacyjne.",
                    "en" => "Applying insulation materials such as styrofoam, mineral wool, or vapor barriers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22456,

                "name" => json_encode([
                    "pl" => "Wykonywanie spoin, uszczelnień i montażu elementów wykończeniowych systemów izolacyjnych.",
                    "en" => "Performing joints, seals, and installing finishing elements of insulation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22457,

                "name" => json_encode([
                    "pl" => "Inspekcja jakości wykonanego montażu izolacji budowlanych.",
                    "en" => "Inspecting the quality of installed building insulation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22458,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji z przeprowadzonych prac montażowych.",
                    "en" => "Maintaining documentation for completed installation works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_ISOLACJI_CHEMOODPORNYCH_I_ANTYKOROZYJNYCH = [


            [
            "id" => 22459,
                "name" => json_encode([
                    "pl" => "Montaż materiałów izolacyjnych odpornych na działanie chemikaliów i korozji.",
                    "en" => "Installing insulation materials resistant to chemicals and corrosion."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22460,

                "name" => json_encode([
                    "pl" => "Montaż izolacji na rurociągach, zbiornikach i innych elementach przemysłowych.",
                    "en" => "Installing insulation on pipelines, tanks, and other industrial elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22461,

                "name" => json_encode([
                    "pl" => "Zabezpieczanie powierzchni przed działaniem wysokich temperatur i substancji chemicznych.",
                    "en" => "Protecting surfaces from the effects of high temperatures and chemicals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22462,

                "name" => json_encode([
                    "pl" => "Dokonywanie inspekcji i napraw izolacji chemoodpornych w trudnych warunkach przemysłowych.",
                    "en" => "Inspecting and repairing chemical-resistant insulation under challenging industrial conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22463,

                "name" => json_encode([
                    "pl" => "Wykonywanie spoin i zabezpieczeń w materiałach izolacyjnych odpornych na korozję.",
                    "en" => "Performing joints and seals in corrosion-resistant insulating materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22464,

                "name" => json_encode([
                    "pl" => "Prowadzenie kontroli jakości i zgodności wykonanych prac izolacyjnych z wymaganiami technicznymi.",
                    "en" => "Performing quality control and ensuring compliance with technical requirements for insulation works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_ISOLACJI_PRZEMYSŁOWYCH = [


            [
            "id" => 22465,
                "name" => json_encode([
                    "pl" => "Montaż izolacji przemysłowych na elementach maszyn, instalacji oraz budynkach przemysłowych.",
                    "en" => "Installing industrial insulation on machine parts, installations, and industrial buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22466,

                "name" => json_encode([
                    "pl" => "Zabezpieczanie powierzchni przemysłowych przed utratą ciepła i kondensacją.",
                    "en" => "Protecting industrial surfaces against heat loss and condensation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22467,

                "name" => json_encode([
                    "pl" => "Montaż termoizolacji, akustycznej i ognioodpornej na instalacjach przemysłowych.",
                    "en" => "Installing thermal, acoustic, and fire-resistant insulation on industrial installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22468,

                "name" => json_encode([
                    "pl" => "Sprawdzanie zgodności materiałów izolacyjnych z wymaganiami technicznymi i bezpieczeństwa.",
                    "en" => "Verifying the compliance of insulation materials with technical and safety requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22469,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja istniejących systemów izolacyjnych w przemyśle.",
                    "en" => "Repairing and maintaining existing insulation systems in industry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22470,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji montażu i inspekcji wykonanych prac izolacyjnych.",
                    "en" => "Maintaining documentation of the installation and inspection of completed insulation works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TERMOIZOLER = [


            [
            "id" => 22471,
                "name" => json_encode([
                    "pl" => "Montaż i aplikacja termoizolacyjnych materiałów w budynkach przemysłowych i mieszkalnych.",
                    "en" => "Installing and applying thermal insulation materials in industrial and residential buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22472,

                "name" => json_encode([
                    "pl" => "Zabezpieczanie budynków przed utratą ciepła i energii poprzez odpowiednią izolację.",
                    "en" => "Protecting buildings from heat loss and energy waste through proper insulation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22473,

                "name" => json_encode([
                    "pl" => "Sprawdzanie jakości materiałów termoizolacyjnych oraz ich zgodności z projektem.",
                    "en" => "Verifying the quality of thermal insulation materials and their compliance with the design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22474,

                "name" => json_encode([
                    "pl" => "Instalacja termoizolacji w systemach wentylacyjnych, grzewczych i klimatyzacyjnych.",
                    "en" => "Installing thermal insulation in ventilation, heating, and air conditioning systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22475,

                "name" => json_encode([
                    "pl" => "Wykonywanie spoin i montażu elementów wykończeniowych w termoizolacji.",
                    "en" => "Performing joints and assembling finishing elements in thermal insulation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22476,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji z przeprowadzonych prac termoizolacyjnych.",
                    "en" => "Maintaining documentation for completed thermal insulation works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_MONTERZY_ISOLACJI = [


            [
            "id" => 22477,
                "name" => json_encode([
                    "pl" => "Montaż systemów izolacyjnych w budynkach, takich jak termoizolacje, akustyczne czy hydroizolacje.",
                    "en" => "Installing insulation systems in buildings, including thermal, acoustic, and waterproofing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22478,

                "name" => json_encode([
                    "pl" => "Montaż materiałów izolacyjnych na elementach budowlanych takich jak ściany, dachy, rury.",
                    "en" => "Installing insulating materials on construction elements such as walls, roofs, and pipes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22479,

                "name" => json_encode([
                    "pl" => "Zabezpieczanie budynków przed szkodliwym wpływem warunków atmosferycznych dzięki zastosowaniu odpowiednich materiałów izolacyjnych.",
                    "en" => "Protecting buildings from harmful weather conditions by applying appropriate insulating materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22480,

                "name" => json_encode([
                    "pl" => "Sprawdzanie jakości i zgodności wykonanych prac montażowych z projektem.",
                    "en" => "Verifying the quality and compliance of completed installation works with the design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22481,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja istniejących systemów izolacyjnych w budynkach.",
                    "en" => "Repairing and maintaining existing insulation systems in buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22482,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej związanej z montażem materiałów izolacyjnych.",
                    "en" => "Maintaining technical documentation related to the installation of insulating materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BLACHARZ_BUDOWLANY = [


            [
            "id" => 22483,
                "name" => json_encode([
                    "pl" => "Montaż elementów blacharskich, takich jak dachy, rynny, obróbki blacharskie.",
                    "en" => "Installing sheet metal elements such as roofs, gutters, and metal flashings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22484,

                "name" => json_encode([
                    "pl" => "Przygotowywanie i cięcie blachy do montażu, zgodnie z wymaganiami technicznymi.",
                    "en" => "Preparing and cutting sheet metal for installation according to technical specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22485,

                "name" => json_encode([
                    "pl" => "Montaż blachy na konstrukcjach dachowych i elewacyjnych, z zachowaniem odpowiednich norm jakościowych.",
                    "en" => "Installing sheet metal on roof and facade structures, following the required quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22486,

                "name" => json_encode([
                    "pl" => "Wykonywanie obróbek blacharskich, takich jak zakładki, rynny, wentylacje.",
                    "en" => "Performing metalwork such as overlaps, gutters, and ventilation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22487,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja blacharskich elementów budowlanych, takich jak dachy, rynny, systemy odwadniające.",
                    "en" => "Repairing and maintaining sheet metal elements such as roofs, gutters, and drainage systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22488,

                "name" => json_encode([
                    "pl" => "Sprawdzanie jakości wykonanych prac blacharskich i ich zgodności z projektem.",
                    "en" => "Inspecting the quality of completed metalwork and ensuring compliance with the design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BLACHARZ_ISOLACJI_PRZEMYSŁOWYCH = [


            [
            "id" => 22489,
                "name" => json_encode([
                    "pl" => "Montaż blachy i materiałów izolacyjnych na rurociągach, zbiornikach i innych instalacjach przemysłowych.",
                    "en" => "Installing sheet metal and insulation materials on pipes, tanks, and other industrial installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22490,

                "name" => json_encode([
                    "pl" => "Zakładanie powłok ochronnych na elementach przemysłowych w celu zapewnienia ich odporności na korozję i inne czynniki zewnętrzne.",
                    "en" => "Applying protective coatings on industrial elements to ensure their resistance to corrosion and other external factors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22491,

                "name" => json_encode([
                    "pl" => "Sprawdzanie jakości materiałów izolacyjnych i blacharskich używanych w przemyśle.",
                    "en" => "Inspecting the quality of insulation and sheet metal materials used in industry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22492,

                "name" => json_encode([
                    "pl" => "Montaż i konserwacja instalacji blacharskich i izolacyjnych w warunkach przemysłowych.",
                    "en" => "Installing and maintaining metal and insulation installations in industrial conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22493,

                "name" => json_encode([
                    "pl" => "Wykonywanie obróbek blacharskich i zabezpieczeń przed wysokimi temperaturami, chemikaliami i korozją.",
                    "en" => "Performing metalwork and protections against high temperatures, chemicals, and corrosion."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22494,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z montażem i konserwacją systemów izolacyjnych i blacharskich w przemyśle.",
                    "en" => "Maintaining documentation related to the installation and maintenance of insulation and metalwork systems in industry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_DEKARSTWA = [


            [
            "id" => 22495,
                "name" => json_encode([
                    "pl" => "Montaż dachów, w tym pokrycie dachów dachówką, blachą, papą oraz innymi materiałami dekarskimi.",
                    "en" => "Installing roofs, including covering with tiles, metal, roofing felt, and other roofing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22496,

                "name" => json_encode([
                    "pl" => "Wykonywanie prac związanych z wymianą, naprawą i konserwacją pokryć dachowych.",
                    "en" => "Performing works related to replacing, repairing, and maintaining roof coverings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22497,

                "name" => json_encode([
                    "pl" => "Inspekcja stanu technicznego dachów i ich elementów konstrukcyjnych.",
                    "en" => "Inspecting the technical condition of roofs and their structural components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22498,

                "name" => json_encode([
                    "pl" => "Montaż okien dachowych, rynien i systemów odprowadzania wody.",
                    "en" => "Installing skylights, gutters, and water drainage systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22499,

                "name" => json_encode([
                    "pl" => "Wykonywanie prac zabezpieczających dach przed warunkami atmosferycznymi, w tym przed wilgocią i śniegiem.",
                    "en" => "Performing works to protect the roof from weather conditions, including moisture and snow."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22500,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z montażem, naprawą i konserwacją dachów.",
                    "en" => "Maintaining documentation related to roof installation, repair, and maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SZKLARZ_BUDOWLANY = [


            [
            "id" => 22501,
                "name" => json_encode([
                    "pl" => "Montaż i wymiana szyb okiennych, drzwiowych oraz innych elementów szklanych w budynkach.",
                    "en" => "Installing and replacing window, door, and other glass elements in buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22502,

                "name" => json_encode([
                    "pl" => "Cięcie i dopasowanie szkła do wymaganych wymiarów przed montażem.",
                    "en" => "Cutting and adjusting glass to required dimensions before installation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22503,

                "name" => json_encode([
                    "pl" => "Wykonywanie prac montażowych związanych z szybami hartowanymi i bezpiecznymi.",
                    "en" => "Performing installation work related to tempered and safety glass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22504,

                "name" => json_encode([
                    "pl" => "Montaż elementów szklanych w ramach fasad budowlanych i ścian szklanych.",
                    "en" => "Installing glass elements as part of building facades and glass walls."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22505,

                "name" => json_encode([
                    "pl" => "Zabezpieczanie i montaż szyb w oknach, drzwiach i innych ramach szklanych.",
                    "en" => "Securing and installing glass in windows, doors, and other glass frames."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22506,

                "name" => json_encode([
                    "pl" => "Przygotowywanie powierzchni pod montaż szkła, w tym usuwanie starych szyb i czyszczenie powierzchni.",
                    "en" => "Preparing surfaces for glass installation, including removing old panes and cleaning surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SZKLARZ_POJAZDÓW = [


            [
            "id" => 22507,
                "name" => json_encode([
                    "pl" => "Wymiana szyb w pojazdach, takich jak samochody osobowe, ciężarowe, autobusy i inne.",
                    "en" => "Replacing glass in vehicles, such as cars, trucks, buses, and others."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22508,

                "name" => json_encode([
                    "pl" => "Montaż i naprawa szyb czołowych, bocznych, tylnych oraz lusterek w pojazdach.",
                    "en" => "Installing and repairing windshields, side, rear windows, and mirrors in vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22509,

                "name" => json_encode([
                    "pl" => "Usuwanie i wymiana szyb samochodowych, stosowanie odpowiednich uszczelek i materiałów zabezpieczających.",
                    "en" => "Removing and replacing car windows, using appropriate seals and protective materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22510,

                "name" => json_encode([
                    "pl" => "Naprawa uszkodzeń szyb w pojazdach za pomocą odpowiednich narzędzi i technologii.",
                    "en" => "Repairing glass damage in vehicles using appropriate tools and technology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22511,

                "name" => json_encode([
                    "pl" => "Przygotowanie szyb do montażu w pojazdach, w tym cięcie i formowanie szyb zgodnie z wymaganiami.",
                    "en" => "Preparing glass for installation in vehicles, including cutting and shaping glass according to requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22512,

                "name" => json_encode([
                    "pl" => "Wykonywanie naprawy szyb w pojazdach za pomocą specjalistycznych środków do naprawy pęknięć.",
                    "en" => "Repairing vehicle glass using specialized crack repair agents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_SZKŁA_BUDOWLANEGO = [


            [
            "id" => 22513,
                "name" => json_encode([
                    "pl" => "Montaż szkła budowlanego w ramach konstrukcji budowlanych, takich jak okna, drzwi, ściany szklane.",
                    "en" => "Installing construction glass as part of building structures such as windows, doors, and glass walls."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22514,

                "name" => json_encode([
                    "pl" => "Cięcie, dopasowanie i montaż szkła budowlanego zgodnie z wymaganiami projektowymi.",
                    "en" => "Cutting, adjusting, and installing construction glass according to design requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22515,

                "name" => json_encode([
                    "pl" => "Montaż szkła hartowanego, laminowanego, refleksyjnego i innych specjalistycznych materiałów szklanych.",
                    "en" => "Installing tempered, laminated, reflective glass, and other specialized glass materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22516,

                "name" => json_encode([
                    "pl" => "Montaż elementów szklanych w fasadach budowlanych i konstrukcjach szklanych.",
                    "en" => "Installing glass elements in building facades and glass structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22517,

                "name" => json_encode([
                    "pl" => "Przygotowanie szkła do montażu, w tym cięcie, szlifowanie i odpowiednie dopasowanie do instalacji.",
                    "en" => "Preparing glass for installation, including cutting, grinding, and proper fitting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22518,

                "name" => json_encode([
                    "pl" => "Sprawdzanie jakości szkła i zgodności z wymaganiami projektowymi.",
                    "en" => "Checking the quality of glass and ensuring compliance with design requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_SZKLARZE = [


            [
            "id" => 22519,
                "name" => json_encode([
                    "pl" => "Montaż i naprawa różnych rodzajów szkła, w tym szkła float, szkła dekoracyjnego i szklanych paneli.",
                    "en" => "Installing and repairing various types of glass, including float glass, decorative glass, and glass panels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22520,

                "name" => json_encode([
                    "pl" => "Cięcie i formowanie szkła na zamówienie oraz przygotowanie do transportu.",
                    "en" => "Cutting and shaping glass to order and preparing it for transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22521,

                "name" => json_encode([
                    "pl" => "Aplikacja specjalistycznych powłok ochronnych na powierzchnie szklane, takich jak folie ochronne.",
                    "en" => "Applying protective coatings to glass surfaces, such as protective films."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22522,

                "name" => json_encode([
                    "pl" => "Utrzymywanie czystości na stanowisku pracy i odpowiednie zabezpieczenie szkła przed uszkodzeniem.",
                    "en" => "Maintaining cleanliness at the worksite and properly protecting glass from damage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22523,

                "name" => json_encode([
                    "pl" => "Sprawdzanie stanu technicznego instalacji szklanych, naprawa uszkodzeń i wymiana starych elementów.",
                    "en" => "Inspecting the technical condition of glass installations, repairing damages, and replacing old elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22524,

                "name" => json_encode([
                    "pl" => "Prace wykończeniowe i montaż dekoracji szklanych w przestrzeniach komercyjnych i mieszkaniowych.",
                    "en" => "Finishing work and installing decorative glass in commercial and residential spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_PŁYT_KARTONOWO_GIPSOWYCH = [


            [
            "id" => 22525,
                "name" => json_encode([
                    "pl" => "Montaż płyt kartonowo-gipsowych na ścianach, sufitach i innych powierzchniach budowlanych.",
                    "en" => "Installing plasterboard on walls, ceilings, and other construction surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22526,

                "name" => json_encode([
                    "pl" => "Przygotowywanie powierzchni do montażu płyt, w tym cięcie i dopasowanie płyt do wymiarów.",
                    "en" => "Preparing surfaces for panel installation, including cutting and adjusting panels to dimensions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22527,

                "name" => json_encode([
                    "pl" => "Wykonywanie spoin i wygładzanie łączeń między płytami kartonowo-gipsowymi.",
                    "en" => "Performing joints and smoothing connections between plasterboards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22528,

                "name" => json_encode([
                    "pl" => "Instalacja płyt kartonowo-gipsowych w systemach sufitów podwieszanych oraz ścianek działowych.",
                    "en" => "Installing plasterboard in suspended ceiling systems and partition walls."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22529,

                "name" => json_encode([
                    "pl" => "Wykonywanie prac związanych z montażem izolacji akustycznych lub termicznych w systemach kartonowo-gipsowych.",
                    "en" => "Performing work related to installing acoustic or thermal insulation in plasterboard systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22530,

                "name" => json_encode([
                    "pl" => "Sprawdzanie jakości montażu oraz zgodności wykonanych prac z projektem budowlanym.",
                    "en" => "Inspecting the quality of installation and ensuring compliance with the construction design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_SYSTEMÓW_SUCHEJ_ZABUDOWY = [


            [
            "id" => 22531,
                "name" => json_encode([
                    "pl" => "Montaż systemów suchej zabudowy, takich jak ścianki działowe, sufity podwieszane oraz zabudowy z płyt kartonowo-gipsowych.",
                    "en" => "Installing drywall systems such as partition walls, suspended ceilings, and drywall constructions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22532,

                "name" => json_encode([
                    "pl" => "Przygotowanie i cięcie płyt kartonowo-gipsowych do montażu w systemach suchej zabudowy.",
                    "en" => "Preparing and cutting plasterboard for installation in drywall systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22533,

                "name" => json_encode([
                    "pl" => "Montaż stelaży metalowych do zabudowy ścianek działowych i sufitów podwieszanych.",
                    "en" => "Installing metal frameworks for partition walls and suspended ceilings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22534,

                "name" => json_encode([
                    "pl" => "Wykonywanie izolacji akustycznych, cieplnych i ogniowych w systemach suchej zabudowy.",
                    "en" => "Installing acoustic, thermal, and fire insulation in drywall systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22535,

                "name" => json_encode([
                    "pl" => "Montaż drzwi i okien w systemach suchej zabudowy.",
                    "en" => "Installing doors and windows in drywall systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22536,

                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych prac oraz sprawdzanie ich zgodności z projektem.",
                    "en" => "Checking the quality of completed work and verifying its compliance with the design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNOLOG_ROBÓT_WYKOŃCZENIOWYCH_W_BUDOWNICTWIE = [


            [
            "id" => 22537,
                "name" => json_encode([
                    "pl" => "Opracowywanie technologii wykonania robót wykończeniowych w budownictwie, w tym dobór materiałów i metod pracy.",
                    "en" => "Developing technology for performing finishing works in construction, including selecting materials and methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22538,

                "name" => json_encode([
                    "pl" => "Koordynowanie procesów robót wykończeniowych na budowie, nadzór nad jakością wykonywanych prac.",
                    "en" => "Coordinating finishing work processes on construction sites, supervising the quality of work performed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22539,

                "name" => json_encode([
                    "pl" => "Opracowywanie harmonogramów robót wykończeniowych oraz monitorowanie postępu prac.",
                    "en" => "Developing schedules for finishing works and monitoring work progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22540,

                "name" => json_encode([
                    "pl" => "Wdrażanie technologii oszczędzających czas i koszty w robót wykończeniowych.",
                    "en" => "Implementing time- and cost-saving technologies in finishing works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22541,

                "name" => json_encode([
                    "pl" => "Przygotowanie dokumentacji technicznej dotyczącej robót wykończeniowych.",
                    "en" => "Preparing technical documentation related to finishing works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22542,

                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami budowlanymi w celu zapewnienia sprawnej realizacji robót wykończeniowych.",
                    "en" => "Cooperating with other construction departments to ensure smooth execution of finishing works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_ZABUDOWY_I_ROBÓT_WYKOŃCZENIOWYCH_W_BUDOWNICTWIE = [


            [
            "id" => 22543,
                "name" => json_encode([
                    "pl" => "Montaż ścianek działowych, sufitów podwieszanych, instalacji elektrycznych i innych elementów wykończeniowych.",
                    "en" => "Installing partition walls, suspended ceilings, electrical installations, and other finishing elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22544,

                "name" => json_encode([
                    "pl" => "Instalowanie okien, drzwi, wykładzin i innych materiałów wykończeniowych.",
                    "en" => "Installing windows, doors, flooring, and other finishing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22545,

                "name" => json_encode([
                    "pl" => "Wykonywanie prac wykończeniowych w zakresie tynkowania, malowania, tapetowania.",
                    "en" => "Performing finishing work in plastering, painting, and wallpapering."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22546,

                "name" => json_encode([
                    "pl" => "Przygotowywanie powierzchni pod montaż materiałów wykończeniowych, w tym czyszczenie i przygotowanie ścian, podłóg.",
                    "en" => "Preparing surfaces for the installation of finishing materials, including cleaning and preparing walls, floors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22547,

                "name" => json_encode([
                    "pl" => "Instalacja systemów ogrzewania podłogowego, klimatyzacji i wentylacji.",
                    "en" => "Installing underfloor heating, air conditioning, and ventilation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22548,

                "name" => json_encode([
                    "pl" => "Koordynowanie i nadzorowanie robót wykończeniowych oraz zapewnienie jakości wykonanych prac.",
                    "en" => "Coordinating and supervising finishing works and ensuring the quality of completed tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_STOLARKI_BUDOWLANEJ = [


            [
            "id" => 22549,
                "name" => json_encode([
                    "pl" => "Montaż drzwi, okien, ram i innych elementów stolarki budowlanej.",
                    "en" => "Installing doors, windows, frames, and other building carpentry elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22550,

                "name" => json_encode([
                    "pl" => "Przygotowywanie otworów w ścianach do montażu stolarki okiennej i drzwiowej.",
                    "en" => "Preparing wall openings for the installation of windows and door carpentry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22551,

                "name" => json_encode([
                    "pl" => "Montaż parapetów, ościeżnic, klamki, zamki oraz innych elementów wykończeniowych stolarki.",
                    "en" => "Installing window sills, door frames, handles, locks, and other finishing carpentry elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22552,

                "name" => json_encode([
                    "pl" => "Dopasowywanie i montowanie elementów stolarki budowlanej do określonych wymiarów.",
                    "en" => "Fitting and installing carpentry elements to specific dimensions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22553,

                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych prac oraz sprawdzanie ich zgodności z projektem budowlanym.",
                    "en" => "Inspecting the quality of completed work and ensuring its compliance with the construction design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22554,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja istniejącej stolarki budowlanej.",
                    "en" => "Repairing and maintaining existing building carpentry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ROBOTNICY_BUDOWLANI_ROBÓT_WYKOŃCZENIOWYCH_I_POKREWNI = [


            [
            "id" => 22555,
                "name" => json_encode([
                    "pl" => "Prace pomocnicze związane z montażem elementów wykończeniowych, takich jak okna, drzwi czy panele.",
                    "en" => "Auxiliary work related to the installation of finishing elements such as windows, doors, and panels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22556,

                "name" => json_encode([
                    "pl" => "Wykonywanie prostych prac wykończeniowych, takich jak malowanie, tynkowanie, układanie wykładzin.",
                    "en" => "Performing simple finishing work, such as painting, plastering, and laying flooring."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22557,

                "name" => json_encode([
                    "pl" => "Montaż podłóg, wykładzin, tapetowanie oraz inne prace dekoracyjne.",
                    "en" => "Installing floors, floor coverings, wallpapering, and other decorative tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22558,

                "name" => json_encode([
                    "pl" => "Pomoc w przeprowadzaniu prac związanych z ocieplaniem budynków, w tym montaż izolacji.",
                    "en" => "Assisting in works related to building insulation, including installing insulation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22559,

                "name" => json_encode([
                    "pl" => "Pomoc przy montażu systemów wentylacyjnych, klimatyzacyjnych i innych instalacji wykończeniowych.",
                    "en" => "Assisting with the installation of ventilation, air conditioning, and other finishing systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22560,

                "name" => json_encode([
                    "pl" => "Usuwanie odpadów budowlanych i utrzymywanie porządku na stanowisku pracy.",
                    "en" => "Removing construction debris and maintaining cleanliness at the work site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $CYKLINIARZ = [


            [
            "id" => 22561,
                "name" => json_encode([
                    "pl" => "Cyklinowanie podłóg drewnianych, parkietów i innych powierzchni drewnianych.",
                    "en" => "Sanding wooden floors, parquet, and other wooden surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22562,

                "name" => json_encode([
                    "pl" => "Usuwanie zarysowań, plam i innych uszkodzeń powierzchni drewnianych.",
                    "en" => "Removing scratches, stains, and other damage from wooden surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22563,

                "name" => json_encode([
                    "pl" => "Nakładanie powłok ochronnych na podłogi drewniane, w tym wosków, olejów, lakierów.",
                    "en" => "Applying protective coatings to wooden floors, including waxes, oils, and varnishes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22564,

                "name" => json_encode([
                    "pl" => "Cyklinowanie powierzchni betonowych lub kamiennych w zależności od potrzeb.",
                    "en" => "Sanding concrete or stone surfaces as needed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22565,

                "name" => json_encode([
                    "pl" => "Wykonywanie naprawy i renowacji starych parkietów oraz powierzchni drewnianych.",
                    "en" => "Repairing and renovating old parquet floors and wooden surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22566,

                "name" => json_encode([
                    "pl" => "Przygotowywanie narzędzi i sprzętu do cyklinowania podłóg.",
                    "en" => "Preparing tools and equipment for floor sanding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $GLAZURNIK = [


            [
            "id" => 22567,
                "name" => json_encode([
                    "pl" => "Montaż płytek ceramicznych, kamienia, gresu, mozaiki i innych materiałów okładzinowych.",
                    "en" => "Installing ceramic tiles, stone, gres, mosaic, and other cladding materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22568,

                "name" => json_encode([
                    "pl" => "Przygotowywanie podłoża pod montaż płytek, w tym czyszczenie, szlifowanie i wyrównywanie powierzchni.",
                    "en" => "Preparing the substrate for tile installation, including cleaning, grinding, and leveling the surface."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22569,

                "name" => json_encode([
                    "pl" => "Układanie płytek na powierzchniach ścian i podłóg, z zachowaniem odpowiednich wzorów i kąta.",
                    "en" => "Laying tiles on walls and floors, ensuring proper patterns and angles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22570,

                "name" => json_encode([
                    "pl" => "Cięcie i dopasowywanie płytek do wymiarów powierzchni.",
                    "en" => "Cutting and adjusting tiles to the required dimensions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22571,

                "name" => json_encode([
                    "pl" => "Spoinowanie płytek i zapewnienie trwałości powierzchni.",
                    "en" => "Grouting tiles and ensuring surface durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22572,

                "name" => json_encode([
                    "pl" => "Prace renowacyjne związane z wymianą lub naprawą uszkodzonych płytek.",
                    "en" => "Renovation work related to the replacement or repair of damaged tiles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PARKIECIARZ = [


            [
            "id" => 22573,
                "name" => json_encode([
                    "pl" => "Układanie parkietów, paneli podłogowych i innych materiałów drewnianych na podłogach.",
                    "en" => "Installing parquet, floor panels, and other wooden materials on floors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22574,

                "name" => json_encode([
                    "pl" => "Szlifowanie, lakierowanie i polerowanie podłóg drewnianych w celu uzyskania gładkiej powierzchni.",
                    "en" => "Sanding, varnishing, and polishing wooden floors to achieve a smooth surface."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22575,

                "name" => json_encode([
                    "pl" => "Naprawa uszkodzeń parkietów, w tym wymiana uszkodzonych elementów i ich ponowne szlifowanie.",
                    "en" => "Repairing parquet damages, including replacing damaged elements and re-sanding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22576,

                "name" => json_encode([
                    "pl" => "Przygotowanie podłoża pod montaż parkietu, w tym wyrównywanie i czyszczenie powierzchni.",
                    "en" => "Preparing the substrate for parquet installation, including leveling and cleaning the surface."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22577,

                "name" => json_encode([
                    "pl" => "Montaż podłóg z drewna litego i innego materiału drewnopodobnego.",
                    "en" => "Installing solid wood floors and other wood-like materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22578,

                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanej podłogi oraz jej konserwacja i impregnacja.",
                    "en" => "Inspecting the quality of completed floors and their maintenance and impregnation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POSADZKARZ = [


            [
            "id" => 22579,
                "name" => json_encode([
                    "pl" => "Układanie posadzek z różnych materiałów, takich jak płytki, terakota, kamień czy beton.",
                    "en" => "Laying floors made of various materials such as tiles, terracotta, stone, or concrete."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22580,

                "name" => json_encode([
                    "pl" => "Cięcie i dopasowywanie płytek oraz innych materiałów do wymiarów powierzchni.",
                    "en" => "Cutting and fitting tiles and other materials to the dimensions of the surface."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22581,

                "name" => json_encode([
                    "pl" => "Przygotowywanie powierzchni pod układanie posadzek, w tym wyrównywanie i czyszczenie podłoża.",
                    "en" => "Preparing surfaces for flooring, including leveling and cleaning the substrate."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22582,

                "name" => json_encode([
                    "pl" => "Montaż podłóg z wykładzin PCV, linoleum, wykładzin dywanowych i innych materiałów.",
                    "en" => "Installing floors made of PVC, linoleum, carpet tiles, and other materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22583,

                "name" => json_encode([
                    "pl" => "Naprawa uszkodzeń posadzek i wymiana zniszczonych elementów.",
                    "en" => "Repairing floor damage and replacing damaged elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22584,

                "name" => json_encode([
                    "pl" => "Sprawdzanie jakości wykonanych prac oraz zgodności z projektem.",
                    "en" => "Inspecting the quality of completed work and ensuring compliance with the design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_POSADZKARZE_PARKIECIARZE_I_GLAZURNICY = [


            [
            "id" => 22585,
                "name" => json_encode([
                    "pl" => "Wykonywanie różnorodnych prac wykończeniowych, w tym montaż podłóg, układanie płytek oraz parkietów.",
                    "en" => "Performing various finishing works, including installing floors, laying tiles, and parquet."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22586,

                "name" => json_encode([
                    "pl" => "Montaż i montowanie płytek, paneli, posadzek oraz innych materiałów wykończeniowych.",
                    "en" => "Installing and assembling tiles, panels, floors, and other finishing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22587,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja powierzchni wykończeniowych.",
                    "en" => "Repairing and maintaining finishing surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22588,

                "name" => json_encode([
                    "pl" => "Montaż wykładzin dywanowych, tapetowanie i wykonywanie innych prac dekoracyjnych.",
                    "en" => "Installing carpet tiles, wallpapering, and performing other decorative tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22589,

                "name" => json_encode([
                    "pl" => "Utrzymywanie czystości na stanowisku pracy oraz dbanie o porządek na budowie.",
                    "en" => "Maintaining cleanliness at the worksite and ensuring order on the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22590,

                "name" => json_encode([
                    "pl" => "Przygotowanie i obróbka materiałów wykończeniowych.",
                    "en" => "Preparing and processing finishing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_MALARZE_I_POKREWNI = [


            [
            "id" => 22591,
                "name" => json_encode([
                    "pl" => "Malowanie powierzchni ścian, sufitów, elewacji budynków oraz innych elementów.",
                    "en" => "Painting surfaces of walls, ceilings, building facades, and other elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22592,

                "name" => json_encode([
                    "pl" => "Przygotowywanie powierzchni do malowania, w tym czyszczenie, szlifowanie, gruntowanie.",
                    "en" => "Preparing surfaces for painting, including cleaning, sanding, and priming."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22593,

                "name" => json_encode([
                    "pl" => "Mieszanie farb, lakierów i innych materiałów malarskich zgodnie z wymaganiami.",
                    "en" => "Mixing paints, varnishes, and other painting materials according to requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22594,

                "name" => json_encode([
                    "pl" => "Prace dekoracyjne, w tym malowanie wzorów, tapetowanie i malowanie detali.",
                    "en" => "Decorative work, including painting patterns, wallpapering, and painting details."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22595,

                "name" => json_encode([
                    "pl" => "Naprawa malowanych powierzchni, w tym dotykowe malowanie, naprawy uszkodzonych ścian.",
                    "en" => "Repairing painted surfaces, including touch-up painting and repairing damaged walls."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22596,

                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych prac malarskich i zgodności z wymaganiami klienta.",
                    "en" => "Inspecting the quality of painting work and ensuring compliance with client requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $HYDRAULIK = [


            [
            "id" => 22597,
                "name" => json_encode([
                    "pl" => "Montaż i naprawa instalacji wodno-kanalizacyjnych, grzewczych oraz gazowych.",
                    "en" => "Installation and repair of water, sewage, heating, and gas systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22598,

                "name" => json_encode([
                    "pl" => "Instalacja rur, armatury i urządzeń w systemach wodociągowych i kanalizacyjnych.",
                    "en" => "Installing pipes, fittings, and equipment in water and sewage systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22599,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja systemów hydraulicznych, w tym wymiana uszkodzonych rur i urządzeń.",
                    "en" => "Repair and maintenance of hydraulic systems, including replacing damaged pipes and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22600,

                "name" => json_encode([
                    "pl" => "Sprawdzanie szczelności instalacji hydraulicznych i zapewnienie ich prawidłowego działania.",
                    "en" => "Checking the tightness of hydraulic systems and ensuring their proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22601,

                "name" => json_encode([
                    "pl" => "Wykonywanie prac związanych z instalacją ogrzewania podłogowego, grzejników oraz systemów klimatyzacyjnych.",
                    "en" => "Installing underfloor heating, radiators, and air conditioning systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22602,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji z przeprowadzonych prac hydraulicznych.",
                    "en" => "Maintaining documentation for completed plumbing work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_INSTALACJI_GAZOWYCH = [


            [
            "id" => 22603,
                "name" => json_encode([
                    "pl" => "Montaż instalacji gazowych w budynkach mieszkalnych i przemysłowych, w tym rur gazowych i armatury.",
                    "en" => "Installing gas systems in residential and industrial buildings, including gas pipes and fittings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22604,

                "name" => json_encode([
                    "pl" => "Wykonywanie prób szczelności instalacji gazowych.",
                    "en" => "Performing leak tests on gas installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22605,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja instalacji gazowych, w tym usuwanie awarii i wymiana uszkodzonych elementów.",
                    "en" => "Repairing and maintaining gas installations, including fixing failures and replacing damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22606,

                "name" => json_encode([
                    "pl" => "Instalowanie urządzeń gazowych, takich jak kociołki, piecyki i inne urządzenia gazowe.",
                    "en" => "Installing gas appliances, such as boilers, heaters, and other gas-powered devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22607,

                "name" => json_encode([
                    "pl" => "Wykonywanie prac związanych z montażem i regulacją systemów wentylacji w instalacjach gazowych.",
                    "en" => "Performing works related to the installation and adjustment of ventilation systems in gas installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22608,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej instalacji gazowych i wykonanych prac.",
                    "en" => "Maintaining documentation related to gas installations and performed work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_INSTALACJI_I_URZĄDZEŃ_SANITARNYCH = [


            [
            "id" => 22609,
                "name" => json_encode([
                    "pl" => "Montaż instalacji wodno-kanalizacyjnych oraz urządzeń sanitarnych, takich jak umywalki, WC, prysznice.",
                    "en" => "Installing water-sewage systems and sanitary appliances such as sinks, toilets, and showers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22610,

                "name" => json_encode([
                    "pl" => "Instalowanie armatury łazienkowej, w tym baterii, pryszniców, umywalek.",
                    "en" => "Installing bathroom fixtures, including faucets, showers, and sinks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22611,

                "name" => json_encode([
                    "pl" => "Wykonywanie prac związanych z instalacją urządzeń grzewczych, takich jak grzejniki, piecyki.",
                    "en" => "Performing works related to the installation of heating appliances, such as radiators and heaters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22612,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja instalacji wodno-kanalizacyjnych i urządzeń sanitarnych.",
                    "en" => "Repair and maintenance of water-sewage systems and sanitary appliances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22613,

                "name" => json_encode([
                    "pl" => "Wykonywanie instalacji odprowadzania ścieków oraz podłączeń do sieci wodociągowych.",
                    "en" => "Installing wastewater drainage and connections to water supply systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22614,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji instalacji sanitarnych i wykonanych prac.",
                    "en" => "Maintaining documentation of sanitary installations and completed works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_RUROCIĄGÓW_GÓRNICZYCH = [


            [
            "id" => 22615,
                "name" => json_encode([
                    "pl" => "Montaż i naprawa rurociągów w kopalniach, w tym instalacji wodociągowych i odwadniających.",
                    "en" => "Installation and repair of pipelines in mines, including water and drainage systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22616,

                "name" => json_encode([
                    "pl" => "Instalowanie rur i urządzeń w systemach rurociągowych w kopalniach, takich jak odpompowywanie wody.",
                    "en" => "Installing pipes and equipment in pipeline systems in mines, such as water pumping systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22617,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja rurociągów w kopalniach, w tym wymiana uszkodzonych rur i armatury.",
                    "en" => "Repair and maintenance of pipelines in mines, including replacing damaged pipes and fittings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22618,

                "name" => json_encode([
                    "pl" => "Kontrola stanu technicznego rurociągów i ich szczelności w warunkach górniczych.",
                    "en" => "Inspecting the technical condition of pipelines and their tightness in mining conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22619,

                "name" => json_encode([
                    "pl" => "Wykonywanie prób szczelności i testów ciśnieniowych w systemach rurociągowych.",
                    "en" => "Performing leak tests and pressure tests in pipeline systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22620,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej rurociągów górniczych.",
                    "en" => "Maintaining documentation related to mining pipelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_RUROCIĄGÓW_OKRĘTOWYCH = [


            [
            "id" => 22621,
                "name" => json_encode([
                    "pl" => "Montaż i naprawa rurociągów na statkach, w tym systemów wodociągowych, kanalizacyjnych i paliwowych.",
                    "en" => "Installation and repair of pipelines on ships, including water, sewage, and fuel systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22622,

                "name" => json_encode([
                    "pl" => "Instalowanie rur i armatury w systemach okrętowych, w tym podłączenia do sieci zasilających.",
                    "en" => "Installing pipes and fittings in ship systems, including connections to power supply networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22623,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja rurociągów okrętowych, w tym wymiana uszkodzonych elementów i części.",
                    "en" => "Repair and maintenance of ship pipelines, including replacing damaged elements and parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22624,

                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych instalacji rurociągowych na statkach oraz ich zgodności z normami.",
                    "en" => "Checking the quality of completed pipeline installations on ships and their compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22625,

                "name" => json_encode([
                    "pl" => "Wykonywanie prób ciśnieniowych i testów szczelności w rurociągach okrętowych.",
                    "en" => "Performing pressure tests and leak tests in ship pipelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22626,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej instalacji rurociągowych okrętowych.",
                    "en" => "Maintaining documentation related to ship pipeline installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_RUROCIĄGÓW_PRZEMYSŁOWYCH = [


            [
            "id" => 22627,
                "name" => json_encode([
                    "pl" => "Montaż rurociągów przemysłowych, w tym instalacji wodociągowych, gazowych i technologicznych.",
                    "en" => "Installing industrial pipelines, including water, gas, and technological installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22628,

                "name" => json_encode([
                    "pl" => "Cięcie, spawanie i montaż rur przemysłowych w systemach przesyłowych.",
                    "en" => "Cutting, welding, and installing industrial pipes in transmission systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22629,

                "name" => json_encode([
                    "pl" => "Inspekcja i naprawa rurociągów przemysłowych, w tym kontrola jakości instalacji.",
                    "en" => "Inspecting and repairing industrial pipelines, including quality control of installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22630,

                "name" => json_encode([
                    "pl" => "Testowanie szczelności instalacji rurociągowych i ich przyłączy.",
                    "en" => "Testing the tightness of pipeline installations and their connections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22631,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z instalacjami rurociągowymi w przemyśle.",
                    "en" => "Maintaining documentation related to pipeline installations in industry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22632,

                "name" => json_encode([
                    "pl" => "Wykonywanie montażu elementów zabezpieczających i kontrolujących w systemach rurociągowych.",
                    "en" => "Installing protective and control elements in pipeline systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_SIECI_CIEPLNYCH = [


            [
            "id" => 22633,
                "name" => json_encode([
                    "pl" => "Montaż i instalacja sieci cieplnych w budynkach mieszkalnych, przemysłowych i komercyjnych.",
                    "en" => "Installing and setting up heating networks in residential, industrial, and commercial buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22634,

                "name" => json_encode([
                    "pl" => "Instalowanie rur, zaworów i innych elementów sieci cieplnych.",
                    "en" => "Installing pipes, valves, and other elements of heating networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22635,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów ciśnieniowych i kontrola szczelności instalacji cieplnych.",
                    "en" => "Performing pressure tests and checking the tightness of heating installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22636,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja instalacji cieplnych, w tym wymiana uszkodzonych elementów.",
                    "en" => "Repairing and maintaining heating installations, including replacing damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22637,

                "name" => json_encode([
                    "pl" => "Montaż systemów ogrzewania podłogowego oraz grzejników w budynkach.",
                    "en" => "Installing underfloor heating systems and radiators in buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22638,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji instalacyjnej sieci cieplnych.",
                    "en" => "Maintaining installation documentation for heating networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_SIECI_DESZCZOWNIANYCH = [


            [
            "id" => 22639,
                "name" => json_encode([
                    "pl" => "Montaż sieci deszczowych, w tym instalacja rur, studzienek i innych elementów odprowadzania wód opadowych.",
                    "en" => "Installing stormwater networks, including pipes, manholes, and other rainwater drainage components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22640,

                "name" => json_encode([
                    "pl" => "Wykonywanie montażu systemów odwodnienia i drenażu na terenach budowlanych i miejskich.",
                    "en" => "Installing drainage and dewatering systems in construction sites and urban areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22641,

                "name" => json_encode([
                    "pl" => "Instalowanie systemów rynnowych i odpływów deszczowych w budynkach oraz na zewnątrz.",
                    "en" => "Installing gutter systems and rainwater drains in buildings and outdoors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22642,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja istniejących instalacji deszczowych.",
                    "en" => "Repairing and maintaining existing stormwater installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22643,

                "name" => json_encode([
                    "pl" => "Sprawdzanie jakości wykonanych instalacji i ich zgodności z projektem budowlanym.",
                    "en" => "Checking the quality of completed installations and ensuring compliance with the construction design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22644,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z instalacjami deszczownymi.",
                    "en" => "Maintaining documentation related to stormwater installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_SIECI_GAZOWYCH = [


            [
            "id" => 22645,
                "name" => json_encode([
                    "pl" => "Montaż sieci gazowych, w tym instalacja rur gazowych, zaworów i urządzeń gazowych.",
                    "en" => "Installing gas networks, including gas pipes, valves, and gas appliances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22646,

                "name" => json_encode([
                    "pl" => "Instalowanie przyłączy gazowych do budynków oraz urządzeń gazowych.",
                    "en" => "Installing gas connections to buildings and gas appliances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22647,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja instalacji gazowych, w tym usuwanie awarii i wymiana uszkodzonych elementów.",
                    "en" => "Repair and maintenance of gas installations, including fixing failures and replacing damaged elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22648,

                "name" => json_encode([
                    "pl" => "Wykonywanie testów szczelności i ciśnieniowych instalacji gazowych.",
                    "en" => "Performing leak tests and pressure tests on gas installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22649,

                "name" => json_encode([
                    "pl" => "Sprawdzanie jakości i zgodności wykonanych instalacji gazowych z wymaganiami technicznymi.",
                    "en" => "Checking the quality and compliance of completed gas installations with technical requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22650,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji instalacji gazowych i wykonanych prac.",
                    "en" => "Maintaining documentation for gas installations and completed work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_SIECI_WODNYCH_I_KANALIZACYJNYCH = [


            [
            "id" => 22651,
                "name" => json_encode([
                    "pl" => "Montaż sieci wodociągowych i kanalizacyjnych w budynkach oraz na terenach zewnętrznych.",
                    "en" => "Installing water supply and sewage systems in buildings and outdoor areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22652,

                "name" => json_encode([
                    "pl" => "Instalacja rur, zaworów, studzienek, przepompowni oraz innych elementów w sieci wodociągowej i kanalizacyjnej.",
                    "en" => "Installing pipes, valves, manholes, pumping stations, and other components in water supply and sewage networks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22653,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów ciśnieniowych i sprawdzanie szczelności instalacji wodociągowych i kanalizacyjnych.",
                    "en" => "Performing pressure tests and checking the tightness of water supply and sewage installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22654,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja instalacji wodociągowych i kanalizacyjnych, w tym usuwanie awarii i wymiana uszkodzonych elementów.",
                    "en" => "Repair and maintenance of water supply and sewage installations, including fixing failures and replacing damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22655,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z instalacjami wodociągowymi i kanalizacyjnymi.",
                    "en" => "Maintaining documentation related to water supply and sewage installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22656,

                "name" => json_encode([
                    "pl" => "Kontrola jakości i zgodności wykonanych prac z projektem oraz wymaganiami technicznymi.",
                    "en" => "Checking the quality and compliance of completed work with the design and technical requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_SYSTEMÓW_RUROCIĄGOWYCH_S = [


            [
            "id" => 22657,
                "name" => json_encode([
                    "pl" => "Montaż i instalacja systemów rurociągowych w różnych sektorach przemysłu, takich jak chemiczny, naftowy, gazowy.",
                    "en" => "Installation and assembly of pipeline systems in various industrial sectors, such as chemical, oil, and gas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22658,

                "name" => json_encode([
                    "pl" => "Spawanie, cięcie i montaż rur w ramach systemów przesyłowych, zgodnie z wymaganiami projektu.",
                    "en" => "Welding, cutting, and assembling pipes for transmission systems according to project specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22659,

                "name" => json_encode([
                    "pl" => "Testowanie rurociągów pod kątem szczelności, przeprowadzanie prób ciśnieniowych.",
                    "en" => "Testing pipelines for tightness, performing pressure tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22660,

                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i modernizacja rurociągów przemysłowych.",
                    "en" => "Repair, maintenance, and modernization of industrial pipelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22661,

                "name" => json_encode([
                    "pl" => "Instalowanie elementów systemów rurociągowych, takich jak zawory, pompy, przepustnice.",
                    "en" => "Installing elements of pipeline systems, such as valves, pumps, and regulators."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22662,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji wykonanych prac montażowych i serwisowych.",
                    "en" => "Maintaining documentation for completed installation and service work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_URZĄDZEŃ_ENERGETYKI_ODNAWIALNEJ = [


            [
            "id" => 22663,
                "name" => json_encode([
                    "pl" => "Montaż instalacji systemów energetyki odnawialnej, w tym paneli fotowoltaicznych, turbin wiatrowych, pomp ciepła.",
                    "en" => "Installing renewable energy systems, including photovoltaic panels, wind turbines, heat pumps."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22664,

                "name" => json_encode([
                    "pl" => "Instalowanie urządzeń i elementów systemów energetyki odnawialnej, takich jak inwertery, regulatory ładowania.",
                    "en" => "Installing devices and components of renewable energy systems, such as inverters, charge controllers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22665,

                "name" => json_encode([
                    "pl" => "Testowanie i uruchamianie systemów energetyki odnawialnej, przeprowadzanie prób i testów.",
                    "en" => "Testing and commissioning renewable energy systems, performing trials and tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22666,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja instalacji systemów energetyki odnawialnej.",
                    "en" => "Repair and maintenance of renewable energy system installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22667,

                "name" => json_encode([
                    "pl" => "Sprawdzanie jakości wykonanych instalacji oraz zgodności z wymaganiami projektowymi.",
                    "en" => "Checking the quality of completed installations and compliance with project requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22668,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z montażem i konserwacją urządzeń energetyki odnawialnej.",
                    "en" => "Maintaining documentation related to the installation and maintenance of renewable energy devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $STUDNIARZ = [


            [
            "id" => 22669,
                "name" => json_encode([
                    "pl" => "Wykonywanie studni głębinowych, w tym wiercenie otworów, instalacja rur i pomp.",
                    "en" => "Drilling deep wells, including borehole drilling, installing pipes, and pumps."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22670,

                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów i inspekcji wody w studniach.",
                    "en" => "Conducting tests and inspections of water in wells."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22671,

                "name" => json_encode([
                    "pl" => "Instalacja systemów pomp w studniach, w tym dobór odpowiednich urządzeń.",
                    "en" => "Installing pump systems in wells, including selecting appropriate devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22672,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja studni, w tym wymiana uszkodzonych rur i urządzeń.",
                    "en" => "Repairing and maintaining wells, including replacing damaged pipes and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22673,

                "name" => json_encode([
                    "pl" => "Przygotowywanie i obróbka materiałów do wykonania studni.",
                    "en" => "Preparing and processing materials for well construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22674,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji wykonanych prac związanych ze studniami.",
                    "en" => "Maintaining documentation for completed well construction work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_SIECI_INSTALACJI_I_URZĄDZEŃ_SANITARNYCH = [


            [
            "id" => 22675,
                "name" => json_encode([
                    "pl" => "Montaż instalacji wodociągowych, kanalizacyjnych oraz urządzeń sanitarnych w budynkach.",
                    "en" => "Installing water supply, sewage systems, and sanitary appliances in buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22676,

                "name" => json_encode([
                    "pl" => "Instalowanie rur, armatury, zaworów, pomp oraz innych urządzeń sanitarnych.",
                    "en" => "Installing pipes, fittings, valves, pumps, and other sanitary devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22677,

                "name" => json_encode([
                    "pl" => "Testowanie ciśnieniowe instalacji wodociągowych i kanalizacyjnych.",
                    "en" => "Performing pressure tests for water supply and sewage installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22678,

                "name" => json_encode([
                    "pl" => "Instalacja systemów grzewczych, takich jak grzejniki, kotły, instalacje ogrzewania podłogowego.",
                    "en" => "Installing heating systems such as radiators, boilers, and underfloor heating installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22679,

                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja instalacji sanitarnych, w tym wymiana uszkodzonych elementów.",
                    "en" => "Repair and maintenance of sanitary installations, including replacing damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 22680,

                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji instalacyjnej i serwisowej dla systemów sanitarnych.",
                    "en" => "Maintaining installation and service documentation for sanitary systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];


        DB::table('detail_projects')->insert(array_merge(
            $ARCHITEKT_KRAJOBRAZU,
            $ARCHITEKT_ZIELENI_WEWNĄTRZ_BUDYNKÓW,
            $POZOSTALI_ARCHITEKCI_KRAJOBRAZU,
            $TECHNIK_ARCHITEKTURY_KRAJOBRAZU,
            $POZOSTALI_PLASTYCY_DEKORATORZY_WNĘTRZ_I_POKREWNI,
            $TECHNIK_ARANŻACJI_WNĘTRZ,
            $INŻYNIER_BUDOWNICTWA_BUDOWLE_I_DROGI_WODNE,
            $INŻYNIER_BUDOWNICTWA_BUDOWNICTWO_OGÓLNE,
            $INŻYNIER_BUDOWNICTWA_BUDOWNICTWO_PRZEMYSŁOWE,
            $INŻYNIER_BUDOWNICTWA_LINIE_WĘZŁY_I_STACJE_KOLEJOWE,
            $INŻYNIER_BUDOWNICTWA_URZĄDZENIA_INSTALACJE_I_SIECI_ENERGETYCZNE,
            $INŻYNIER_BUDOWNICTWA_WYBURZANIE_OBIEKTÓW,
            $INŻYNIER_BUDOWY_DRÓG,
            $INŻYNIER_GEOTECHNIK,
            $RZECZOZNAWCA_BUDOWLANY,
            $POZOSTALI_INŻYNIEROWIE_BUDOWNICTWA,
            $INŻYNIER_INŻYNIERII_ŚRODOWISKA_GAZOWE_URZĄDZENIA_INSTALACJE_I_SIECI_ENERGETYCZNE,
            $INŻYNIER_INŻYNIERII_ŚRODOWISKA_GOSPODARKA_WODNA_I_HYDROLOGIA,
            $INŻYNIER_INŻYNIERII_ŚRODOWISKA_INSTALACJE_SANITARNE,
            $INŻYNIER_INŻYNIERII_ŚRODOWISKA_MELIORACJE,
            $INŻYNIER_INŻYNIERII_ŚRODOWISKA_OCZYSZCZANIE_MIAST_I_GOSPODARKA_ODPADAMI,
            $INŻYNIER_INŻYNIERII_ŚRODOWISKA_SYSTEMY_WODOCIĄGOWE_I_KANALIZACYJNE,
            $INŻYNIER_SYSTEMÓW_BEZPIECZEŃSTWA_JĄDROWEGO_I_OCHRONY_RADIOLOGICZNEJ,
            $POZOSTALI_INŻYNIEROWIE_INŻYNIERII_ŚRODOWISKA,
            $LABORANT_BUDOWLANY,
            $TECHNIK_ARCHITEKT,
            $TECHNIK_BUDOWNICTWA,
            $TECHNIK_BUDOWNICTWA_WODNEGO,
            $TECHNIK_INŻYNIERII_ŚRODOWISKA_I_MELIORACJI,
            $TECHNIK_URZĄDZEŃ_SANITARNYCH,
            $POZOSTALI_TECHNICY_BUDOWNICTWA,
            $KOSZTORYSANT_BUDOWLANY,
            $TECHNIK_RENOWACJI_ELEMENTÓW_ARCHITEKTURY,
            $TECHNIK_GAZOWNICTWA,
            $TECHNIK_TECHNOLOGII_MATERIAŁÓW_BUDOWLANYCH,
            $TECHNIK_URZĄDZEŃ_I_SYSTEMÓW_ENERGETYKI_ODNAWIALNEJ,
            $MISTRZ_PRODUKCJI_W_BUDOWNICTWIE_OGÓLNYM,
            $MISTRZ_PRODUKCJI_W_BUDOWNICTWIE_PRZEMYSŁOWYM,
            $MISTRZ_PRODUKCJI_W_BUDOWNICTWIE_WODNYM,
            $POZOSTALI_MISTRZOWIE_PRODUKCJI_W_BUDOWNICTWIE,
            $TECHNIK_INŻYNIERII_SANITARNEJ,
            $TECHNIK_CHŁODNICTWA_I_KLIMATYZACJI,
            $TECHNIK_MONTAŻU_I_AUTOMATYKI_STOLARKI_BUDOWLANEJ,
            $TECHNIK_OBSŁUGI_PRZEMYSŁU_TARGOWO_WYSTAWIENNICZEGO,
            $TECHNIK_IZOLACJI_PRZEMYSŁOWYCH,
            $MECHANIK_MASZYN_I_URZĄDZEŃ_DROGOWYCH,
            $OPERATOR_MASZYN_DROGOWYCH,
            $OPERATOR_MASZYN_I_SPRZĘTU_TOROWEGO,
            $OPERATOR_SPRZĘTU_CIĘŻKIEGO,
            $OPERATOR_KOPARKI,
            $OPERATOR_KOPARKO_ŁADOWARKI,
            $OPERATOR_ŁADOWARKI,
            $OPERATOR_SPYCHARKI,
            $POZOSTALI_OPERATORZY_SPRZĘTU_DO_ROBÓT_ZIEMNYCH_I_URZĄDZEŃ_POKREWNYCH,
            $OPERATOR_MASZYN_I_URZĄDZEŃ_DO_ROBÓT_ZIEMNYCH_I_DROGOWYCH,
            $TECHNIK_DROGOWNICTWA,
            $MONTER_NAWIERZCHNI_KOLEJOWEJ,
            $UKŁADACZ_NAWIERZCHNI_DROGOWYCH,
            $TECHNIK_DRÓG_I_MOSTÓW_KOLEJOWYCH,
            $MOSTOWNICZY,
            $MISTRZ_PRODUKCJI_W_BUDOWNICTWIE_DROGOWYM,
            $MISTRZ_PRODUKCJI_W_BUDOWNICTWIE_KOLEJOWYM,
            $MISTRZ_PRODUKCJI_W_BUDOWNICTWIE_MOSTOWYM,
            $POZOSTALI_ROBOTNICY_BUDOWY_DRÓG,
            $POMOCNICZY_ROBOTNIK_DROGOWY,
            $POMOCNICZY_ROBOTNIK_MOSTOWY,
            $TECHNIK_BUDOWY_DRÓG,
            $TECHNIK_DRÓG_KOLEJOWYCH_I_OBIEKTÓW_INŻYNIERYJNYCH,
            $TECHNIK_BUDOWNICTWA_KOLEJOWEGO,
            $KAMIENIARZ,
            $POZOSTALI_ROBOTNICY_OBRÓBKI_KAMIENIA,
            $BETONIARZ,
            $BETONIARZ_ZBROJARZ,
            $PALOWNICZY,
            $ZBROJARZ,
            $POZOSTALI_BETONIARZE_BETONIARZE_ZBROJARZE_I_POKREWNI,
            $POZOSTALI_CIEŚLE_I_STOLARZE_BUDOWLANI,
            $KONSERWATOR_BUDYNKÓW_I_STANU_TECHNICZNEGO_POMIESZCZEŃ,
            $MONTER_KONSTRUKCJI_BUDOWLANYCH,
            $RENOWATOR_ZABYTKÓW_ARCHITEKTURY,
            $POZOSTALI_MONTERZY_KONSTRUKCJI_BUDOWLANYCH_I_KONSERWATORZY_BUDYNKÓW,
            $ROBOTNIK_BUDOWLANY,
            $MONTAŻYSTA_DEKORACJI,
            $POZOSTALI_ROBOTNICY_BUDOWLANI_ROBÓT_STANU_SUROWEGO_I_POKREWNI,
            $ROBOTNICY_WYKONUJĄCY_PRACE_PROSTE_W_BUDOWNICTWIE_OGÓLNYM,
            $ROBOTNICY_CZYSZCZĄCY_KONSTRUKCJE_BUDOWLANE_I_POKREWNI,
            $ROBOTNIK_OSUSZANIA_I_ODGRZYBIANIA_BUDOWLI,
            $POZOSTALI_ROBOTNICY_CZYSZCZĄCY_KONSTRUKCJE_BUDOWLANE_I_POKREWNI,
            $MONTER_OCIEPLEŃ_BUDYNKÓW,
            $TYNKARZ,
            $MONTER_FASAD,
            $POZOSTALI_TYNKARZE_I_POKREWNI,
            $SZTUKATOR,
            $POZOSTALI_MURARZE_I_POKREWNI,
            $MONTER_ISOLACJI_BUDOWLANYCH,
            $MONTER_ISOLACJI_CHEMOODPORNYCH_I_ANTYKOROZYJNYCH,
            $MONTER_ISOLACJI_PRZEMYSŁOWYCH,
            $TERMOIZOLER,
            $POZOSTALI_MONTERZY_ISOLACJI,
            $BLACHARZ_BUDOWLANY,
            $BLACHARZ_ISOLACJI_PRZEMYSŁOWYCH,
            $TECHNIK_DEKARSTWA,
            $SZKLARZ_BUDOWLANY,
            $SZKLARZ_POJAZDÓW,
            $MONTER_SZKŁA_BUDOWLANEGO,
            $POZOSTALI_SZKLARZE,
            $MONTER_PŁYT_KARTONOWO_GIPSOWYCH,
            $MONTER_SYSTEMÓW_SUCHEJ_ZABUDOWY,
            $TECHNOLOG_ROBÓT_WYKOŃCZENIOWYCH_W_BUDOWNICTWIE,
            $MONTER_ZABUDOWY_I_ROBÓT_WYKOŃCZENIOWYCH_W_BUDOWNICTWIE,
            $MONTER_STOLARKI_BUDOWLANEJ,
            $POZOSTALI_ROBOTNICY_BUDOWLANI_ROBÓT_WYKOŃCZENIOWYCH_I_POKREWNI,
            $CYKLINIARZ,
            $GLAZURNIK,
            $PARKIECIARZ,
            $POSADZKARZ,
            $POZOSTALI_POSADZKARZE_PARKIECIARZE_I_GLAZURNICY,
            $POZOSTALI_MALARZE_I_POKREWNI,
            $HYDRAULIK,
            $MONTER_INSTALACJI_GAZOWYCH,
            $MONTER_INSTALACJI_I_URZĄDZEŃ_SANITARNYCH,
            $MONTER_RUROCIĄGÓW_GÓRNICZYCH,
            $MONTER_RUROCIĄGÓW_OKRĘTOWYCH,
            $MONTER_RUROCIĄGÓW_PRZEMYSŁOWYCH,
            $MONTER_SIECI_CIEPLNYCH,
            $MONTER_SIECI_DESZCZOWNIANYCH,
            $MONTER_SIECI_GAZOWYCH,
            $MONTER_SIECI_WODNYCH_I_KANALIZACYJNYCH,
            $MONTER_SYSTEMÓW_RUROCIĄGOWYCH_S,
            $MONTER_URZĄDZEŃ_ENERGETYKI_ODNAWIALNEJ,
            $STUDNIARZ,
            $MONTER_SIECI_INSTALACJI_I_URZĄDZEŃ_SANITARNYCH,

        ));
        Category::whereId('1006')->first()->detailprojects()->attach(collect($ARCHITEKT_KRAJOBRAZU)->pluck('id')->toArray());
        Category::whereId('1007')->first()->detailprojects()->attach(collect($ARCHITEKT_ZIELENI_WEWNĄTRZ_BUDYNKÓW)->pluck('id')->toArray());
        Category::whereId('1008')->first()->detailprojects()->attach(collect($POZOSTALI_ARCHITEKCI_KRAJOBRAZU)->pluck('id')->toArray());
        Category::whereId('1009')->first()->detailprojects()->attach(collect($TECHNIK_ARCHITEKTURY_KRAJOBRAZU)->pluck('id')->toArray());
        Category::whereId('1019')->first()->detailprojects()->attach(collect($POZOSTALI_PLASTYCY_DEKORATORZY_WNĘTRZ_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1020')->first()->detailprojects()->attach(collect($TECHNIK_ARANŻACJI_WNĘTRZ)->pluck('id')->toArray());
        Category::whereId('1023')->first()->detailprojects()->attach(collect($INŻYNIER_BUDOWNICTWA_BUDOWLE_I_DROGI_WODNE)->pluck('id')->toArray());
        Category::whereId('1024')->first()->detailprojects()->attach(collect($INŻYNIER_BUDOWNICTWA_BUDOWNICTWO_OGÓLNE)->pluck('id')->toArray());
        Category::whereId('1025')->first()->detailprojects()->attach(collect($INŻYNIER_BUDOWNICTWA_BUDOWNICTWO_PRZEMYSŁOWE)->pluck('id')->toArray());
        Category::whereId('1026')->first()->detailprojects()->attach(collect($INŻYNIER_BUDOWNICTWA_LINIE_WĘZŁY_I_STACJE_KOLEJOWE)->pluck('id')->toArray());
        Category::whereId('1027')->first()->detailprojects()->attach(collect($INŻYNIER_BUDOWNICTWA_URZĄDZENIA_INSTALACJE_I_SIECI_ENERGETYCZNE)->pluck('id')->toArray());
        Category::whereId('1028')->first()->detailprojects()->attach(collect($INŻYNIER_BUDOWNICTWA_WYBURZANIE_OBIEKTÓW)->pluck('id')->toArray());
        Category::whereId('1029')->first()->detailprojects()->attach(collect($INŻYNIER_BUDOWY_DRÓG)->pluck('id')->toArray());
        Category::whereId('1031')->first()->detailprojects()->attach(collect($INŻYNIER_GEOTECHNIK)->pluck('id')->toArray());
        Category::whereId('1032')->first()->detailprojects()->attach(collect($RZECZOZNAWCA_BUDOWLANY)->pluck('id')->toArray());
        Category::whereId('1033')->first()->detailprojects()->attach(collect($POZOSTALI_INŻYNIEROWIE_BUDOWNICTWA)->pluck('id')->toArray());
        Category::whereId('1044')->first()->detailprojects()->attach(collect($INŻYNIER_INŻYNIERII_ŚRODOWISKA_GAZOWE_URZĄDZENIA_INSTALACJE_I_SIECI_ENERGETYCZNE)->pluck('id')->toArray());
        Category::whereId('1045')->first()->detailprojects()->attach(collect($INŻYNIER_INŻYNIERII_ŚRODOWISKA_GOSPODARKA_WODNA_I_HYDROLOGIA)->pluck('id')->toArray());
        Category::whereId('1046')->first()->detailprojects()->attach(collect($INŻYNIER_INŻYNIERII_ŚRODOWISKA_INSTALACJE_SANITARNE)->pluck('id')->toArray());
        Category::whereId('1047')->first()->detailprojects()->attach(collect($INŻYNIER_INŻYNIERII_ŚRODOWISKA_MELIORACJE)->pluck('id')->toArray());
        Category::whereId('1048')->first()->detailprojects()->attach(collect($INŻYNIER_INŻYNIERII_ŚRODOWISKA_OCZYSZCZANIE_MIAST_I_GOSPODARKA_ODPADAMI)->pluck('id')->toArray());
        Category::whereId('1049')->first()->detailprojects()->attach(collect($INŻYNIER_INŻYNIERII_ŚRODOWISKA_SYSTEMY_WODOCIĄGOWE_I_KANALIZACYJNE)->pluck('id')->toArray());
        Category::whereId('1050')->first()->detailprojects()->attach(collect($INŻYNIER_SYSTEMÓW_BEZPIECZEŃSTWA_JĄDROWEGO_I_OCHRONY_RADIOLOGICZNEJ)->pluck('id')->toArray());
        Category::whereId('1051')->first()->detailprojects()->attach(collect($POZOSTALI_INŻYNIEROWIE_INŻYNIERII_ŚRODOWISKA)->pluck('id')->toArray());
        Category::whereId('1053')->first()->detailprojects()->attach(collect($LABORANT_BUDOWLANY)->pluck('id')->toArray());
        Category::whereId('1054')->first()->detailprojects()->attach(collect($TECHNIK_ARCHITEKT)->pluck('id')->toArray());
        Category::whereId('1055')->first()->detailprojects()->attach(collect($TECHNIK_BUDOWNICTWA)->pluck('id')->toArray());
        Category::whereId('1056')->first()->detailprojects()->attach(collect($TECHNIK_BUDOWNICTWA_WODNEGO)->pluck('id')->toArray());
        Category::whereId('1057')->first()->detailprojects()->attach(collect($TECHNIK_INŻYNIERII_ŚRODOWISKA_I_MELIORACJI)->pluck('id')->toArray());
        Category::whereId('1058')->first()->detailprojects()->attach(collect($TECHNIK_URZĄDZEŃ_SANITARNYCH)->pluck('id')->toArray());
        Category::whereId('1059')->first()->detailprojects()->attach(collect($POZOSTALI_TECHNICY_BUDOWNICTWA)->pluck('id')->toArray());
        Category::whereId('1060')->first()->detailprojects()->attach(collect($KOSZTORYSANT_BUDOWLANY)->pluck('id')->toArray());
        Category::whereId('1061')->first()->detailprojects()->attach(collect($TECHNIK_RENOWACJI_ELEMENTÓW_ARCHITEKTURY)->pluck('id')->toArray());
        Category::whereId('1062')->first()->detailprojects()->attach(collect($TECHNIK_GAZOWNICTWA)->pluck('id')->toArray());
        Category::whereId('1063')->first()->detailprojects()->attach(collect($TECHNIK_TECHNOLOGII_MATERIAŁÓW_BUDOWLANYCH)->pluck('id')->toArray());
        Category::whereId('1064')->first()->detailprojects()->attach(collect($TECHNIK_URZĄDZEŃ_I_SYSTEMÓW_ENERGETYKI_ODNAWIALNEJ)->pluck('id')->toArray());
        Category::whereId('1065')->first()->detailprojects()->attach(collect($MISTRZ_PRODUKCJI_W_BUDOWNICTWIE_OGÓLNYM)->pluck('id')->toArray());
        Category::whereId('1066')->first()->detailprojects()->attach(collect($MISTRZ_PRODUKCJI_W_BUDOWNICTWIE_PRZEMYSŁOWYM)->pluck('id')->toArray());
        Category::whereId('1067')->first()->detailprojects()->attach(collect($MISTRZ_PRODUKCJI_W_BUDOWNICTWIE_WODNYM)->pluck('id')->toArray());
        Category::whereId('1068')->first()->detailprojects()->attach(collect($POZOSTALI_MISTRZOWIE_PRODUKCJI_W_BUDOWNICTWIE)->pluck('id')->toArray());
        Category::whereId('1069')->first()->detailprojects()->attach(collect($TECHNIK_INŻYNIERII_SANITARNEJ)->pluck('id')->toArray());
        Category::whereId('1070')->first()->detailprojects()->attach(collect($TECHNIK_CHŁODNICTWA_I_KLIMATYZACJI)->pluck('id')->toArray());
        Category::whereId('1071')->first()->detailprojects()->attach(collect($TECHNIK_MONTAŻU_I_AUTOMATYKI_STOLARKI_BUDOWLANEJ)->pluck('id')->toArray());
        Category::whereId('1072')->first()->detailprojects()->attach(collect($TECHNIK_OBSŁUGI_PRZEMYSŁU_TARGOWO_WYSTAWIENNICZEGO)->pluck('id')->toArray());
        Category::whereId('1073')->first()->detailprojects()->attach(collect($TECHNIK_IZOLACJI_PRZEMYSŁOWYCH)->pluck('id')->toArray());
        Category::whereId('1076')->first()->detailprojects()->attach(collect($MECHANIK_MASZYN_I_URZĄDZEŃ_DROGOWYCH)->pluck('id')->toArray());
        Category::whereId('1077')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_DROGOWYCH)->pluck('id')->toArray());
        Category::whereId('1078')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_SPRZĘTU_TOROWEGO)->pluck('id')->toArray());
        Category::whereId('1079')->first()->detailprojects()->attach(collect($OPERATOR_SPRZĘTU_CIĘŻKIEGO)->pluck('id')->toArray());
        Category::whereId('1080')->first()->detailprojects()->attach(collect($OPERATOR_KOPARKI)->pluck('id')->toArray());
        Category::whereId('1081')->first()->detailprojects()->attach(collect($OPERATOR_KOPARKO_ŁADOWARKI)->pluck('id')->toArray());
        Category::whereId('1082')->first()->detailprojects()->attach(collect($OPERATOR_ŁADOWARKI)->pluck('id')->toArray());
        Category::whereId('1083')->first()->detailprojects()->attach(collect($OPERATOR_SPYCHARKI)->pluck('id')->toArray());
        Category::whereId('1084')->first()->detailprojects()->attach(collect($POZOSTALI_OPERATORZY_SPRZĘTU_DO_ROBÓT_ZIEMNYCH_I_URZĄDZEŃ_POKREWNYCH)->pluck('id')->toArray());
        Category::whereId('1085')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_I_URZĄDZEŃ_DO_ROBÓT_ZIEMNYCH_I_DROGOWYCH)->pluck('id')->toArray());
        Category::whereId('1087')->first()->detailprojects()->attach(collect($TECHNIK_DROGOWNICTWA)->pluck('id')->toArray());
        Category::whereId('1088')->first()->detailprojects()->attach(collect($MONTER_NAWIERZCHNI_KOLEJOWEJ)->pluck('id')->toArray());
        Category::whereId('1089')->first()->detailprojects()->attach(collect($UKŁADACZ_NAWIERZCHNI_DROGOWYCH)->pluck('id')->toArray());
        Category::whereId('1090')->first()->detailprojects()->attach(collect($TECHNIK_DRÓG_I_MOSTÓW_KOLEJOWYCH)->pluck('id')->toArray());
        Category::whereId('1091')->first()->detailprojects()->attach(collect($MOSTOWNICZY)->pluck('id')->toArray());
        Category::whereId('1092')->first()->detailprojects()->attach(collect($MISTRZ_PRODUKCJI_W_BUDOWNICTWIE_DROGOWYM)->pluck('id')->toArray());
        Category::whereId('1093')->first()->detailprojects()->attach(collect($MISTRZ_PRODUKCJI_W_BUDOWNICTWIE_KOLEJOWYM)->pluck('id')->toArray());
        Category::whereId('1094')->first()->detailprojects()->attach(collect($MISTRZ_PRODUKCJI_W_BUDOWNICTWIE_MOSTOWYM)->pluck('id')->toArray());
        Category::whereId('1095')->first()->detailprojects()->attach(collect($POZOSTALI_ROBOTNICY_BUDOWY_DRÓG)->pluck('id')->toArray());
        Category::whereId('1096')->first()->detailprojects()->attach(collect($POMOCNICZY_ROBOTNIK_DROGOWY)->pluck('id')->toArray());
        Category::whereId('1097')->first()->detailprojects()->attach(collect($POMOCNICZY_ROBOTNIK_MOSTOWY)->pluck('id')->toArray());
        Category::whereId('1098')->first()->detailprojects()->attach(collect($TECHNIK_BUDOWY_DRÓG)->pluck('id')->toArray());
        Category::whereId('1099')->first()->detailprojects()->attach(collect($TECHNIK_DRÓG_KOLEJOWYCH_I_OBIEKTÓW_INŻYNIERYJNYCH)->pluck('id')->toArray());
        Category::whereId('1100')->first()->detailprojects()->attach(collect($TECHNIK_BUDOWNICTWA_KOLEJOWEGO)->pluck('id')->toArray());
        Category::whereId('1103')->first()->detailprojects()->attach(collect($KAMIENIARZ)->pluck('id')->toArray());
        Category::whereId('1104')->first()->detailprojects()->attach(collect($POZOSTALI_ROBOTNICY_OBRÓBKI_KAMIENIA)->pluck('id')->toArray());
        Category::whereId('1109')->first()->detailprojects()->attach(collect($BETONIARZ)->pluck('id')->toArray());
        Category::whereId('1110')->first()->detailprojects()->attach(collect($BETONIARZ_ZBROJARZ)->pluck('id')->toArray());
        Category::whereId('1111')->first()->detailprojects()->attach(collect($PALOWNICZY)->pluck('id')->toArray());
        Category::whereId('1112')->first()->detailprojects()->attach(collect($ZBROJARZ)->pluck('id')->toArray());
        Category::whereId('1113')->first()->detailprojects()->attach(collect($POZOSTALI_BETONIARZE_BETONIARZE_ZBROJARZE_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1118')->first()->detailprojects()->attach(collect($POZOSTALI_CIEŚLE_I_STOLARZE_BUDOWLANI)->pluck('id')->toArray());
        Category::whereId('1121')->first()->detailprojects()->attach(collect($KONSERWATOR_BUDYNKÓW_I_STANU_TECHNICZNEGO_POMIESZCZEŃ)->pluck('id')->toArray());
        Category::whereId('1122')->first()->detailprojects()->attach(collect($MONTER_KONSTRUKCJI_BUDOWLANYCH)->pluck('id')->toArray());
        Category::whereId('1123')->first()->detailprojects()->attach(collect($RENOWATOR_ZABYTKÓW_ARCHITEKTURY)->pluck('id')->toArray());
        Category::whereId('1124')->first()->detailprojects()->attach(collect($POZOSTALI_MONTERZY_KONSTRUKCJI_BUDOWLANYCH_I_KONSERWATORZY_BUDYNKÓW)->pluck('id')->toArray());
        Category::whereId('1125')->first()->detailprojects()->attach(collect($ROBOTNIK_BUDOWLANY)->pluck('id')->toArray());
        Category::whereId('1127')->first()->detailprojects()->attach(collect($MONTAŻYSTA_DEKORACJI)->pluck('id')->toArray());
        Category::whereId('1131')->first()->detailprojects()->attach(collect($POZOSTALI_ROBOTNICY_BUDOWLANI_ROBÓT_STANU_SUROWEGO_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1133')->first()->detailprojects()->attach(collect($ROBOTNICY_WYKONUJĄCY_PRACE_PROSTE_W_BUDOWNICTWIE_OGÓLNYM)->pluck('id')->toArray());
        Category::whereId('1135')->first()->detailprojects()->attach(collect($ROBOTNICY_CZYSZCZĄCY_KONSTRUKCJE_BUDOWLANE_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1139')->first()->detailprojects()->attach(collect($ROBOTNIK_OSUSZANIA_I_ODGRZYBIANIA_BUDOWLI)->pluck('id')->toArray());
        Category::whereId('1140')->first()->detailprojects()->attach(collect($POZOSTALI_ROBOTNICY_CZYSZCZĄCY_KONSTRUKCJE_BUDOWLANE_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1143')->first()->detailprojects()->attach(collect($MONTER_OCIEPLEŃ_BUDYNKÓW)->pluck('id')->toArray());
        Category::whereId('1144')->first()->detailprojects()->attach(collect($TYNKARZ)->pluck('id')->toArray());
        Category::whereId('1145')->first()->detailprojects()->attach(collect($MONTER_FASAD)->pluck('id')->toArray());
        Category::whereId('1146')->first()->detailprojects()->attach(collect($POZOSTALI_TYNKARZE_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1147')->first()->detailprojects()->attach(collect($SZTUKATOR)->pluck('id')->toArray());
        Category::whereId('1152')->first()->detailprojects()->attach(collect($POZOSTALI_MURARZE_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1154')->first()->detailprojects()->attach(collect($MONTER_ISOLACJI_BUDOWLANYCH)->pluck('id')->toArray());
        Category::whereId('1155')->first()->detailprojects()->attach(collect($MONTER_ISOLACJI_CHEMOODPORNYCH_I_ANTYKOROZYJNYCH)->pluck('id')->toArray());
        Category::whereId('1156')->first()->detailprojects()->attach(collect($MONTER_ISOLACJI_PRZEMYSŁOWYCH)->pluck('id')->toArray());
        Category::whereId('1157')->first()->detailprojects()->attach(collect($TERMOIZOLER)->pluck('id')->toArray());
        Category::whereId('1158')->first()->detailprojects()->attach(collect($POZOSTALI_MONTERZY_ISOLACJI)->pluck('id')->toArray());
        Category::whereId('1164')->first()->detailprojects()->attach(collect($BLACHARZ_BUDOWLANY)->pluck('id')->toArray());
        Category::whereId('1165')->first()->detailprojects()->attach(collect($BLACHARZ_ISOLACJI_PRZEMYSŁOWYCH)->pluck('id')->toArray());
        Category::whereId('1165')->first()->detailprojects()->attach(collect($TECHNIK_DEKARSTWA)->pluck('id')->toArray());
        Category::whereId('1170')->first()->detailprojects()->attach(collect($SZKLARZ_BUDOWLANY)->pluck('id')->toArray());
        Category::whereId('1171')->first()->detailprojects()->attach(collect($SZKLARZ_POJAZDÓW)->pluck('id')->toArray());
        Category::whereId('1172')->first()->detailprojects()->attach(collect($MONTER_SZKŁA_BUDOWLANEGO)->pluck('id')->toArray());
        Category::whereId('1173')->first()->detailprojects()->attach(collect($POZOSTALI_SZKLARZE)->pluck('id')->toArray());
        Category::whereId('1177')->first()->detailprojects()->attach(collect($MONTER_PŁYT_KARTONOWO_GIPSOWYCH)->pluck('id')->toArray());
        Category::whereId('1178')->first()->detailprojects()->attach(collect($MONTER_SYSTEMÓW_SUCHEJ_ZABUDOWY)->pluck('id')->toArray());
        Category::whereId('1179')->first()->detailprojects()->attach(collect($TECHNOLOG_ROBÓT_WYKOŃCZENIOWYCH_W_BUDOWNICTWIE)->pluck('id')->toArray());
        Category::whereId('1180')->first()->detailprojects()->attach(collect($MONTER_ZABUDOWY_I_ROBÓT_WYKOŃCZENIOWYCH_W_BUDOWNICTWIE)->pluck('id')->toArray());
        Category::whereId('1181')->first()->detailprojects()->attach(collect($MONTER_STOLARKI_BUDOWLANEJ)->pluck('id')->toArray());
        Category::whereId('1182')->first()->detailprojects()->attach(collect($POZOSTALI_ROBOTNICY_BUDOWLANI_ROBÓT_WYKOŃCZENIOWYCH_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1185')->first()->detailprojects()->attach(collect($CYKLINIARZ)->pluck('id')->toArray());
        Category::whereId('1186')->first()->detailprojects()->attach(collect($GLAZURNIK)->pluck('id')->toArray());
        Category::whereId('1187')->first()->detailprojects()->attach(collect($PARKIECIARZ)->pluck('id')->toArray());
        Category::whereId('1188')->first()->detailprojects()->attach(collect($POSADZKARZ)->pluck('id')->toArray());
        Category::whereId('1189')->first()->detailprojects()->attach(collect($POZOSTALI_POSADZKARZE_PARKIECIARZE_I_GLAZURNICY)->pluck('id')->toArray());
        Category::whereId('1195')->first()->detailprojects()->attach(collect($POZOSTALI_MALARZE_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1198')->first()->detailprojects()->attach(collect($HYDRAULIK)->pluck('id')->toArray());
        Category::whereId('1199')->first()->detailprojects()->attach(collect($MONTER_INSTALACJI_GAZOWYCH)->pluck('id')->toArray());
        Category::whereId('1200')->first()->detailprojects()->attach(collect($MONTER_INSTALACJI_I_URZĄDZEŃ_SANITARNYCH)->pluck('id')->toArray());
        Category::whereId('1201')->first()->detailprojects()->attach(collect($MONTER_RUROCIĄGÓW_GÓRNICZYCH)->pluck('id')->toArray());
        Category::whereId('1202')->first()->detailprojects()->attach(collect($MONTER_RUROCIĄGÓW_OKRĘTOWYCH)->pluck('id')->toArray());
        Category::whereId('1203')->first()->detailprojects()->attach(collect($MONTER_RUROCIĄGÓW_PRZEMYSŁOWYCH)->pluck('id')->toArray());
        Category::whereId('1204')->first()->detailprojects()->attach(collect($MONTER_SIECI_CIEPLNYCH)->pluck('id')->toArray());
        Category::whereId('1205')->first()->detailprojects()->attach(collect($MONTER_SIECI_DESZCZOWNIANYCH)->pluck('id')->toArray());
        Category::whereId('1206')->first()->detailprojects()->attach(collect($MONTER_SIECI_GAZOWYCH)->pluck('id')->toArray());
        Category::whereId('1207')->first()->detailprojects()->attach(collect($MONTER_SIECI_WODNYCH_I_KANALIZACYJNYCH)->pluck('id')->toArray());
        Category::whereId('1208')->first()->detailprojects()->attach(collect($MONTER_SYSTEMÓW_RUROCIĄGOWYCH_S)->pluck('id')->toArray());
        Category::whereId('1209')->first()->detailprojects()->attach(collect($MONTER_URZĄDZEŃ_ENERGETYKI_ODNAWIALNEJ)->pluck('id')->toArray());
        Category::whereId('1210')->first()->detailprojects()->attach(collect($STUDNIARZ)->pluck('id')->toArray());
        Category::whereId('1211')->first()->detailprojects()->attach(collect($MONTER_SIECI_INSTALACJI_I_URZĄDZEŃ_SANITARNYCH)->pluck('id')->toArray());

    }
}

