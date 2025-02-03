<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectGastro2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();

        $POZOSTALI_SZEFOOWIE_KUCHNI_I_ORGANIZATORZY_USŁUG_GASTRONOMICZNYCH = [
            [    "id" => 29300,

                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem kuchennym, organizowanie pracy w kuchni, nadzorowanie przygotowania posiłków.",
                    "en" => "Managing the kitchen team, organizing kitchen operations, overseeing meal preparation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29301,

                "name" => json_encode([
                    "pl" => "Koordynowanie procesów przygotowywania posiłków, zapewnienie wysokiej jakości usług gastronomicznych.",
                    "en" => "Coordinating meal preparation processes, ensuring high-quality catering services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29302,

                "name" => json_encode([
                    "pl" => "Planowanie menu, dobór odpowiednich składników oraz nadzorowanie przygotowania potraw.",
                    "en" => "Planning the menu, selecting appropriate ingredients, and overseeing meal preparation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29303,

                "name" => json_encode([
                    "pl" => "Optymalizacja procesów gastronomicznych, poprawa efektywności i jakości usług.",
                    "en" => "Optimizing catering processes, improving efficiency and quality of services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29304,

                "name" => json_encode([
                    "pl" => "Zarządzanie zapasami, kontrolowanie stanów magazynowych oraz składników używanych do produkcji potraw.",
                    "en" => "Managing inventory, controlling stock levels and ingredients used in meal preparation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29305,

                "name" => json_encode([
                    "pl" => "Współpraca z działem obsługi klienta w celu zapewnienia pełnej satysfakcji gości.",
                    "en" => "Collaborating with the customer service department to ensure complete guest satisfaction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KUCHARZ = [
            [    "id" => 29306,

                "name" => json_encode([
                    "pl" => "Przygotowywanie potraw zgodnie z menu, zapewnienie odpowiedniej jakości i smaku posiłków.",
                    "en" => "Preparing dishes according to the menu, ensuring the appropriate quality and taste of meals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29307,

                "name" => json_encode([
                    "pl" => "Kontrola jakości składników używanych do gotowania oraz dbałość o świeżość surowców.",
                    "en" => "Controlling the quality of ingredients used for cooking and ensuring the freshness of raw materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29308,

                "name" => json_encode([
                    "pl" => "Zarządzanie przygotowaniem dań, współpraca z zespołem kuchennym w celu zapewnienia sprawnej pracy.",
                    "en" => "Managing meal preparation, collaborating with the kitchen team to ensure smooth operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29309,

                "name" => json_encode([
                    "pl" => "Utrzymywanie czystości w kuchni, przestrzeganie zasad higieny i przepisów BHP.",
                    "en" => "Maintaining cleanliness in the kitchen, adhering to hygiene standards and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29310,

                "name" => json_encode([
                    "pl" => "Optymalizacja procesów gotowania, zwiększenie wydajności pracy oraz jakość potraw.",
                    "en" => "Optimizing cooking processes, increasing work efficiency, and improving meal quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29311,

                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w restauracji w celu zapewnienia płynnej obsługi klientów.",
                    "en" => "Collaborating with other departments in the restaurant to ensure smooth customer service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KUCHARZE = [
            [    "id" => 29312,

                "name" => json_encode([
                    "pl" => "Przygotowywanie różnych rodzajów potraw, dbanie o estetykę i smak posiłków.",
                    "en" => "Preparing different types of dishes, ensuring the aesthetic and taste quality of meals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29313,

                "name" => json_encode([
                    "pl" => "Kontrola jakości i świeżości składników, przestrzeganie receptur i standardów przygotowania potraw.",
                    "en" => "Controlling the quality and freshness of ingredients, following recipes and preparation standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29314,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołem kuchennym przy przygotowywaniu potraw zgodnie z zamówieniami.",
                    "en" => "Collaborating with the kitchen team in meal preparation according to orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29315,

                "name" => json_encode([
                    "pl" => "Optymalizacja procesów gotowania, dbanie o sprawną organizację pracy w kuchni.",
                    "en" => "Optimizing cooking processes, ensuring smooth organization of work in the kitchen."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29316,

                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w kuchni, przestrzeganie zasad BHP i higieny pracy.",
                    "en" => "Maintaining cleanliness in the kitchen, adhering to health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29317,

                "name" => json_encode([
                    "pl" => "Udzielanie pomocy przy rozwoju nowych receptur i menu.",
                    "en" => "Assisting in the development of new recipes and menus."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PIZZER = [
            [    "id" => 29318,

                "name" => json_encode([
                    "pl" => "Przygotowywanie ciasta do pizzy, nakładanie składników oraz pieczenie pizzy.",
                    "en" => "Preparing pizza dough, adding toppings, and baking pizzas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29319,

                "name" => json_encode([
                    "pl" => "Monitorowanie procesu pieczenia pizzy, kontrolowanie temperatury pieca i czasu pieczenia.",
                    "en" => "Monitoring the pizza baking process, controlling oven temperature and baking time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29320,

                "name" => json_encode([
                    "pl" => "Kontrola jakości składników do pizzy oraz gotowych produktów.",
                    "en" => "Controlling the quality of pizza ingredients and finished products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29321,

                "name" => json_encode([
                    "pl" => "Optymalizacja procesu produkcji pizzy, zwiększanie efektywności i jakości.",
                    "en" => "Optimizing the pizza production process, improving efficiency and quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29322,

                "name" => json_encode([
                    "pl" => "Zarządzanie pakowaniem i dostarczaniem pizzy do klientów.",
                    "en" => "Managing pizza packaging and delivery to customers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29323,

                "name" => json_encode([
                    "pl" => "Utrzymywanie czystości w obszarze pracy oraz przestrzeganie zasad BHP.",
                    "en" => "Maintaining cleanliness in the workspace and adhering to health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POMOC_KUCHENNA = [
            [    "id" => 29324,

                "name" => json_encode([
                    "pl" => "Pomoc w przygotowywaniu składników do gotowania, obieranie warzyw, krojenie owoców, przygotowanie surowców.",
                    "en" => "Assisting in preparing ingredients for cooking, peeling vegetables, cutting fruits, preparing raw materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29325,

                "name" => json_encode([
                    "pl" => "Utrzymywanie czystości w kuchni, mycie naczyń, czyszczenie maszyn i urządzeń kuchennych.",
                    "en" => "Maintaining cleanliness in the kitchen, washing dishes, cleaning kitchen machines and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29326,

                "name" => json_encode([
                    "pl" => "Współpraca z zespołem kuchennym przy przygotowywaniu i serwowaniu posiłków.",
                    "en" => "Collaborating with the kitchen team in preparing and serving meals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29327,

                "name" => json_encode([
                    "pl" => "Zarządzanie przechowywaniem surowców w kuchni, przestrzeganie zasad higieny.",
                    "en" => "Managing the storage of raw materials in the kitchen, adhering to hygiene standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29328,

                "name" => json_encode([
                    "pl" => "Pomoc w organizacji pracy w kuchni, zapewnienie sprawnej obsługi.",
                    "en" => "Assisting in organizing kitchen work, ensuring smooth service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ZMYWACZ_NACZYŃ = [
            [    "id" => 29329,

                "name" => json_encode([
                    "pl" => "Mycie naczyń, sztućców i innych akcesoriów kuchennych w sposób zgodny z zasadami higieny.",
                    "en" => "Washing dishes, cutlery, and other kitchen accessories in accordance with hygiene standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29330,

                "name" => json_encode([
                    "pl" => "Sortowanie naczyń i akcesoriów kuchennych przed i po myciu, dbanie o ich odpowiednią organizację.",
                    "en" => "Sorting dishes and kitchen accessories before and after washing, ensuring proper organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29331,

                "name" => json_encode([
                    "pl" => "Utrzymywanie czystości w obszarze roboczym, dbanie o odpowiednią wentylację i organizację pracy.",
                    "en" => "Maintaining cleanliness in the workspace, ensuring proper ventilation and work organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_POMOCNICZY_GASTRONOMII = [
            [    "id" => 29332,

                "name" => json_encode([
                    "pl" => "Pomoc w przygotowywaniu i serwowaniu posiłków, przygotowywanie napojów, dbanie o estetykę serwisu.",
                    "en" => "Assisting in meal preparation and service, preparing drinks, ensuring the aesthetic of the service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29333,

                "name" => json_encode([
                    "pl" => "Utrzymywanie czystości w pomieszczeniach gastronomicznych, w tym stołów, krzeseł, podłóg.",
                    "en" => "Maintaining cleanliness in the dining areas, including tables, chairs, and floors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29334,

                "name" => json_encode([
                    "pl" => "Pomoc w obsłudze klientów, serwowanie potraw, dbanie o porządek w strefie obsługi.",
                    "en" => "Assisting in customer service, serving dishes, maintaining order in the service area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KELNER = [
            [    "id" => 29335,

                "name" => json_encode([
                    "pl" => "Serwowanie potraw i napojów klientom, dbanie o estetykę serwisu.",
                    "en" => "Serving food and drinks to customers, ensuring the aesthetic quality of the service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29336,

                "name" => json_encode([
                    "pl" => "Doradztwo w wyborze potraw i napojów, udzielanie informacji o menu.",
                    "en" => "Advising customers on food and drink choices, providing information about the menu."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29337,

                "name" => json_encode([
                    "pl" => "Zarządzanie stolikami, przyjmowanie zamówień, kontrolowanie stanu zapasów napojów.",
                    "en" => "Managing tables, taking orders, and controlling stock levels of drinks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29338,

                "name" => json_encode([
                    "pl" => "Dbałość o czystość i porządek w strefie dla gości, pomoc przy organizowaniu wydarzeń gastronomicznych.",
                    "en" => "Maintaining cleanliness and order in the guest area, assisting with organizing catering events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_USŁUG_KELNERSKICH = [
            [    "id" => 29339,

                "name" => json_encode([
                    "pl" => "Zarządzanie obsługą kelnerską, planowanie i organizowanie pracy w restauracji.",
                    "en" => "Managing waiter service, planning and organizing work in the restaurant."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29340,

                "name" => json_encode([
                    "pl" => "Optymalizacja procesów obsługi kelnerskiej, szkolenie personelu.",
                    "en" => "Optimizing waiter service processes, training staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29341,

                "name" => json_encode([
                    "pl" => "Kontrola jakości usług kelnerskich, zapewnienie satysfakcji gości.",
                    "en" => "Controlling the quality of waiter services, ensuring guest satisfaction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29342,

                "name" => json_encode([
                    "pl" => "Współpraca z działem gastronomii, organizowanie obsługi przyjęć, bankietów i innych wydarzeń.",
                    "en" => "Collaborating with the catering department, organizing service for receptions, banquets, and other events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_BARMANI = [
            [    "id" => 29343,

                "name" => json_encode([
                    "pl" => "Przygotowywanie i serwowanie napojów alkoholowych i bezalkoholowych zgodnie z zamówieniami gości.",
                    "en" => "Preparing and serving alcoholic and non-alcoholic beverages according to guest orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29344,

                "name" => json_encode([
                    "pl" => "Utrzymywanie czystości na stanowisku pracy, dbanie o zapasy napojów i akcesoriów barowych.",
                    "en" => "Maintaining cleanliness at the workstation, managing the inventory of drinks and bar accessories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29345,

                "name" => json_encode([
                    "pl" => "Monitorowanie preferencji klientów, oferowanie nowych napojów i promocji.",
                    "en" => "Monitoring customer preferences, offering new drinks and promotions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29346,

                "name" => json_encode([
                    "pl" => "Kontrolowanie jakości serwowanych napojów, dbanie o estetykę prezentacji.",
                    "en" => "Controlling the quality of served drinks, ensuring aesthetic presentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KONSULTANCI_I_INNI_PRACOWNICY_BIUR_PODRÓŻY = [
            [    "id" => 29347,

                "name" => json_encode([
                    "pl" => "Doradztwo klientom w zakresie planowania podróży, rezerwacji biletów i zakwaterowania.",
                    "en" => "Advising clients on travel planning, booking tickets and accommodation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29348,

                "name" => json_encode([
                    "pl" => "Przygotowywanie ofert turystycznych, analiza rynku turystycznego, organizowanie wycieczek.",
                    "en" => "Preparing travel offers, analyzing the tourism market, organizing tours."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29349,

                "name" => json_encode([
                    "pl" => "Koordynowanie rezerwacji i organizacja transportu turystycznego.",
                    "en" => "Coordinating bookings and organizing tourist transportation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29350,

                "name" => json_encode([
                    "pl" => "Współpraca z hotelami, przewoźnikami i innymi dostawcami usług turystycznych.",
                    "en" => "Cooperating with hotels, carriers, and other travel service providers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INFORMATOR_RUCHU_PASAŻERSKIEGO = [
            [    "id" => 29351,

                "name" => json_encode([
                    "pl" => "Udostępnianie informacji o rozkładach jazdy, dostępnych połączeniach oraz aktualnym statusie podróży.",
                    "en" => "Providing information on schedules, available connections, and current travel status."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29352,

                "name" => json_encode([
                    "pl" => "Pomoc pasażerom w sprawdzaniu biletów i udzielaniu informacji o usługach transportowych.",
                    "en" => "Assisting passengers with ticket verification and providing information about transport services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29353,

                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów związanych z opóźnieniami i zmianami w kursach transportowych.",
                    "en" => "Resolving issues related to delays and changes in transport schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_INFORMACJI_TURYSTYCZNEJ = [
            [    "id" => 29354,

                "name" => json_encode([
                    "pl" => "Udzielanie informacji turystom na temat atrakcji turystycznych, zabytków i lokalnych usług.",
                    "en" => "Providing tourists with information about tourist attractions, monuments, and local services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29355,

                "name" => json_encode([
                    "pl" => "Pomoc w organizowaniu wycieczek, rezerwacji biletów oraz innych usług turystycznych.",
                    "en" => "Assisting in organizing tours, booking tickets, and other travel services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29356,

                "name" => json_encode([
                    "pl" => "Dostarczanie map, broszur i materiałów informacyjnych turystom.",
                    "en" => "Providing maps, brochures, and informational materials to tourists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_PRACOWNICY_BIUR_INFORMACJI = [
            [    "id" => 29357,

                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentami i rejestrowanie zapytań turystów.",
                    "en" => "Managing documents and recording tourist inquiries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29358,

                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami biura informacji turystycznej, koordynowanie działań związanych z obsługą turystów.",
                    "en" => "Cooperating with other departments of the tourist information office, coordinating activities related to tourist service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29359,

                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów, organizowanie materiałów promujących region i usługi turystyczne.",
                    "en" => "Preparing reports, organizing materials promoting the region and tourist services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PILOT_WYCIECZEK = [
            [    "id" => 29360,

                "name" => json_encode([
                    "pl" => "Organizowanie i prowadzenie wycieczek turystycznych, zapewnianie bezpieczeństwa i komfortu podróżujących.",
                    "en" => "Organizing and leading tourist trips, ensuring safety and comfort for travelers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29361,

                "name" => json_encode([
                    "pl" => "Współpraca z przewoźnikami, hotelami i innymi usługodawcami turystycznymi w celu zapewnienia płynności wycieczek.",
                    "en" => "Coordinating with transport providers, hotels, and other tourist service providers to ensure smooth trips."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29362,

                "name" => json_encode([
                    "pl" => "Udzielanie informacji turystycznych i historycznych uczestnikom wycieczek.",
                    "en" => "Providing tourists with historical and touristic information during trips."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRZEWODNIK_TURYSTYCZNY_GÓRSKI = [
            [    "id" => 29363,

                "name" => json_encode([
                    "pl" => "Prowadzenie grup turystów w górach, dbanie o bezpieczeństwo podczas wędrówek.",
                    "en" => "Leading tourist groups in the mountains, ensuring safety during hikes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29364,

                "name" => json_encode([
                    "pl" => "Udostępnianie wiedzy o geografii, historii i faunie górskich regionów.",
                    "en" => "Sharing knowledge about the geography, history, and wildlife of mountain regions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29365,

                "name" => json_encode([
                    "pl" => "Monitorowanie warunków pogodowych, zapewnianie odpowiednich przygotowań na zmienne warunki.",
                    "en" => "Monitoring weather conditions, ensuring proper preparations for changing conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRZEWODNIK_TURYSTYCZNY_MIEJSKI = [
            [    "id" => 29366,

                "name" => json_encode([
                    "pl" => "Prowadzenie turystów po miastach, zwiedzanie zabytków i udzielanie informacji na temat historii miast.",
                    "en" => "Guiding tourists around cities, visiting landmarks, and providing information about city history."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29367,

                "name" => json_encode([
                    "pl" => "Organizowanie tras turystycznych po mieście, dostosowanych do preferencji turystów.",
                    "en" => "Organizing city tours tailored to tourists' preferences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29368,

                "name" => json_encode([
                    "pl" => "Dostarczanie informacji o kulturze, architekturze i atrakcjach turystycznych miasta.",
                    "en" => "Providing information about the city's culture, architecture, and tourist attractions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRZEWODNIK_TURYSTYCZNY_TERENOWY = [
            [    "id" => 29369,

                "name" => json_encode([
                    "pl" => "Prowadzenie turystów w terenie, zarówno w obszarach naturalnych, jak i historycznych.",
                    "en" => "Leading tourists in the field, both in natural and historical areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29370,

                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa turystów podczas zwiedzania trudnych i odległych miejsc.",
                    "en" => "Ensuring the safety of tourists during visits to challenging and remote locations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29371,

                "name" => json_encode([
                    "pl" => "Dostarczanie informacji o faunie, florze oraz ochronie środowiska w odwiedzanych miejscach.",
                    "en" => "Providing information about the fauna, flora, and environmental protection in the visited locations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_PRZEWODNICY_TURYSTYCZNI_I_PILOCI_WYCIECZEK = [
            [    "id" => 29372,

                "name" => json_encode([
                    "pl" => "Prowadzenie grup turystycznych na wycieczkach, zapewnianie atrakcji turystycznych oraz rozwiązywanie bieżących problemów.",
                    "en" => "Leading tourist groups on trips, providing tourist attractions and solving current problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29373,

                "name" => json_encode([
                    "pl" => "Pomoc w organizowaniu i planowaniu wycieczek, zapewnienie kompleksowej obsługi turystycznej.",
                    "en" => "Assisting in organizing and planning trips, providing comprehensive tourist services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29374,

                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności z przepisami prawa, bezpieczeństwem i regulacjami dotyczącymi turystyki.",
                    "en" => "Ensuring compliance with legal regulations, safety, and tourism rules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TURYSTYKI_NA_OBSZARACH_WIEJSKICH = [
            [    "id" => 29375,

                "name" => json_encode([
                    "pl" => "Organizowanie i prowadzenie wycieczek oraz atrakcji turystycznych na obszarach wiejskich.",
                    "en" => "Organizing and leading tours and tourist attractions in rural areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29376,

                "name" => json_encode([
                    "pl" => "Rozwój lokalnej turystyki wiejskiej, wspieranie lokalnych społeczności i gospodarstw.",
                    "en" => "Developing rural tourism, supporting local communities and farms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [    "id" => 29377,

                "name" => json_encode([
                    "pl" => "Dostarczanie informacji na temat kultury, historii i zwyczajów obszarów wiejskich.",
                    "en" => "Providing information about the culture, history, and customs of rural areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];




        DB::table('detail_projects')->insert(array_merge(
            $POZOSTALI_SZEFOOWIE_KUCHNI_I_ORGANIZATORZY_USŁUG_GASTRONOMICZNYCH,
            $KUCHARZ,
            $POZOSTALI_KUCHARZE,
            $PIZZER,
            $POMOC_KUCHENNA,
            $ZMYWACZ_NACZYŃ,
            $PRACOWNIK_POMOCNICZY_GASTRONOMII,
            $KELNER,
            $TECHNIK_USŁUG_KELNERSKICH,
            $POZOSTALI_BARMANI,
            $POZOSTALI_KONSULTANCI_I_INNI_PRACOWNICY_BIUR_PODRÓŻY,
            $INFORMATOR_RUCHU_PASAŻERSKIEGO,
            $PRACOWNIK_INFORMACJI_TURYSTYCZNEJ,
            $POZOSTALI_PRACOWNICY_BIUR_INFORMACJI,
            $PILOT_WYCIECZEK,
            $PRZEWODNIK_TURYSTYCZNY_GÓRSKI,
            $PRZEWODNIK_TURYSTYCZNY_MIEJSKI,
            $PRZEWODNIK_TURYSTYCZNY_TERENOWY,
            $POZOSTALI_PRZEWODNICY_TURYSTYCZNI_I_PILOCI_WYCIECZEK,
            $TECHNIK_TURYSTYKI_NA_OBSZARACH_WIEJSKICH,
        ));

        Category::whereId('2835')->first()->detailprojects()->attach(collect($POZOSTALI_SZEFOOWIE_KUCHNI_I_ORGANIZATORZY_USŁUG_GASTRONOMICZNYCH)->pluck('id')->toArray());
        Category::whereId('2838')->first()->detailprojects()->attach(collect($KUCHARZ)->pluck('id')->toArray());
        Category::whereId('2839')->first()->detailprojects()->attach(collect($POZOSTALI_KUCHARZE)->pluck('id')->toArray());
        Category::whereId('2840')->first()->detailprojects()->attach(collect($PIZZER)->pluck('id')->toArray());
        Category::whereId('2843')->first()->detailprojects()->attach(collect($POMOC_KUCHENNA)->pluck('id')->toArray());
        Category::whereId('2844')->first()->detailprojects()->attach(collect($ZMYWACZ_NACZYŃ)->pluck('id')->toArray());
        Category::whereId('2845')->first()->detailprojects()->attach(collect($PRACOWNIK_POMOCNICZY_GASTRONOMII)->pluck('id')->toArray());
        Category::whereId('2850')->first()->detailprojects()->attach(collect($KELNER)->pluck('id')->toArray());
        Category::whereId('2851')->first()->detailprojects()->attach(collect($TECHNIK_USŁUG_KELNERSKICH)->pluck('id')->toArray());
        Category::whereId('2856')->first()->detailprojects()->attach(collect($POZOSTALI_BARMANI)->pluck('id')->toArray());
        Category::whereId('2863')->first()->detailprojects()->attach(collect($POZOSTALI_KONSULTANCI_I_INNI_PRACOWNICY_BIUR_PODRÓŻY)->pluck('id')->toArray());
        Category::whereId('2866')->first()->detailprojects()->attach(collect($INFORMATOR_RUCHU_PASAŻERSKIEGO)->pluck('id')->toArray());
        Category::whereId('2867')->first()->detailprojects()->attach(collect($PRACOWNIK_INFORMACJI_TURYSTYCZNEJ)->pluck('id')->toArray());
        Category::whereId('2868')->first()->detailprojects()->attach(collect($POZOSTALI_PRACOWNICY_BIUR_INFORMACJI)->pluck('id')->toArray());
        Category::whereId('2871')->first()->detailprojects()->attach(collect($PILOT_WYCIECZEK)->pluck('id')->toArray());
        Category::whereId('2872')->first()->detailprojects()->attach(collect($PRZEWODNIK_TURYSTYCZNY_GÓRSKI)->pluck('id')->toArray());
        Category::whereId('2873')->first()->detailprojects()->attach(collect($PRZEWODNIK_TURYSTYCZNY_MIEJSKI)->pluck('id')->toArray());
        Category::whereId('2874')->first()->detailprojects()->attach(collect($PRZEWODNIK_TURYSTYCZNY_TERENOWY)->pluck('id')->toArray());
        Category::whereId('2875')->first()->detailprojects()->attach(collect($POZOSTALI_PRZEWODNICY_TURYSTYCZNI_I_PILOCI_WYCIECZEK)->pluck('id')->toArray());
        Category::whereId('2877')->first()->detailprojects()->attach(collect($TECHNIK_TURYSTYKI_NA_OBSZARACH_WIEJSKICH)->pluck('id')->toArray());

    }
}

