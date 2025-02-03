<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectRolnictwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();

        $SPECJALISCI_W_ZAKRESIE_ROLNICTWA_LESNICTWA_I_POKREWNI = [
            [
                "id" => 20021,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie upraw rolnych, leśnictwa i ochrony środowiska.",
                    "en" => "Advising on crop cultivation, forestry, and environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20022,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie programów ochrony i zrównoważonego zarządzania zasobami naturalnymi.",
                    "en" => "Developing and implementing protection and sustainable management programs for natural resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20023,
                "name" => json_encode([
                    "pl" => "Monitorowanie i analiza stanu upraw, lasów oraz środowiska.",
                    "en" => "Monitoring and analyzing the condition of crops, forests, and the environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20024,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów nawożenia, ochrony roślin i gospodarki leśnej.",
                    "en" => "Developing fertilization, plant protection, and forest management plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20025,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami rolniczymi i leśnymi w zakresie badań i projektów.",
                    "en" => "Collaborating with agricultural and forestry institutions on research and projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20026,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szkoleń dla rolników i leśników.",
                    "en" => "Conducting training sessions for farmers and foresters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20027,
                "name" => json_encode([
                    "pl" => "Ocena wpływu działalności rolniczej i leśnej na środowisko.",
                    "en" => "Assessing the environmental impact of agricultural and forestry activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20028,
                "name" => json_encode([
                    "pl" => "Prowadzenie badań nad nowymi metodami upraw i ochrony roślin.",
                    "en" => "Conducting research on new cultivation and plant protection methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20029,
                "name" => json_encode([
                    "pl" => "Współpraca z naukowcami i ekspertami w zakresie rolnictwa i leśnictwa.",
                    "en" => "Collaborating with scientists and experts in agriculture and forestry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LABORANT_W_HODOWLI_ROSLIN = [
            [
                "id" => 20030,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz i testów w laboratoriach hodowli roślin.",
                    "en" => "Conducting analyses and tests in plant breeding laboratories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20031,
                "name" => json_encode([
                    "pl" => "Pobieranie próbek gleby, wody i roślin do badań.",
                    "en" => "Collecting soil, water, and plant samples for research."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20032,
                "name" => json_encode([
                    "pl" => "Przygotowywanie pożywek i innych materiałów potrzebnych do eksperymentów.",
                    "en" => "Preparing media and other materials needed for experiments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20033,
                "name" => json_encode([
                    "pl" => "Monitorowanie wzrostu i rozwoju roślin w warunkach laboratoryjnych.",
                    "en" => "Monitoring the growth and development of plants under laboratory conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20034,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników badań i analiz.",
                    "en" => "Documenting research findings and analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20035,
                "name" => json_encode([
                    "pl" => "Wspieranie hodowców w testowaniu nowych odmian roślin.",
                    "en" => "Assisting breeders in testing new plant varieties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20036,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP i higieny pracy w laboratorium.",
                    "en" => "Adhering to health and safety regulations in the laboratory."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20037,
                "name" => json_encode([
                    "pl" => "Utrzymanie porządku i czystości w laboratorium.",
                    "en" => "Maintaining cleanliness and order in the laboratory."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20038,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem badawczym i naukowcami.",
                    "en" => "Collaborating with the research team and scientists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNICY_LESNICTWA = [
            [
                "id" => 20039,
                "name" => json_encode([
                    "pl" => "Wspieranie leśników w zarządzaniu zasobami leśnymi.",
                    "en" => "Supporting foresters in managing forest resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20040,
                "name" => json_encode([
                    "pl" => "Prowadzenie pomiarów i inwentaryzacji lasów.",
                    "en" => "Conducting measurements and forest inventory."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20041,
                "name" => json_encode([
                    "pl" => "Wdrażanie planów zalesiania, ochrony lasów i wycinki drzew.",
                    "en" => "Implementing afforestation, forest protection, and tree felling plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20042,
                "name" => json_encode([
                    "pl" => "Nadzorowanie prac leśnych, takich jak sadzenie drzew, pielęgnacja i ochrona przed szkodnikami.",
                    "en" => "Overseeing forestry work, such as tree planting, maintenance, and pest protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20043,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej stanu lasów.",
                    "en" => "Maintaining records related to forest conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20044,
                "name" => json_encode([
                    "pl" => "Współpraca z organami ochrony środowiska i lokalnymi społecznościami.",
                    "en" => "Collaborating with environmental protection authorities and local communities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20045,
                "name" => json_encode([
                    "pl" => "Utrzymanie ścieżek leśnych i infrastruktury turystycznej.",
                    "en" => "Maintaining forest trails and tourist infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20046,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szkoleń i edukacja w zakresie ochrony lasów.",
                    "en" => "Conducting training and education on forest protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20047,
                "name" => json_encode([
                    "pl" => "Udział w akcjach związanych z ochroną środowiska leśnego.",
                    "en" => "Participating in activities related to forest environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LABORANT_W_HODOWLI_ZWIERZAT = [
            [
                "id" => 20048,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań i analiz związanych z hodowlą zwierząt.",
                    "en" => "Conducting research and analysis related to animal breeding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20049,
                "name" => json_encode([
                    "pl" => "Pobieranie próbek (np. krwi, mleka) i ich analiza w laboratorium.",
                    "en" => "Collecting samples (e.g., blood, milk) and analyzing them in the laboratory."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20050,
                "name" => json_encode([
                    "pl" => "Monitorowanie zdrowia i stanu odżywienia zwierząt hodowlanych.",
                    "en" => "Monitoring the health and nutritional status of livestock."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20051,
                "name" => json_encode([
                    "pl" => "Opracowywanie raportów z wyników badań i przedstawianie ich hodowcom.",
                    "en" => "Preparing reports of research results and presenting them to breeders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20052,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w laboratorium i dbanie o sprzęt badawczy.",
                    "en" => "Maintaining order in the laboratory and taking care of research equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20053,
                "name" => json_encode([
                    "pl" => "Współpraca z weterynarzami i hodowcami w zakresie zdrowia zwierząt.",
                    "en" => "Collaborating with veterinarians and breeders on animal health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20054,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad higieny i bezpieczeństwa pracy.",
                    "en" => "Adhering to hygiene and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20055,
                "name" => json_encode([
                    "pl" => "Przygotowywanie próbek do dalszych badań.",
                    "en" => "Preparing samples for further research."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20056,
                "name" => json_encode([
                    "pl" => "Wspieranie badań nad optymalizacją żywienia i warunków hodowli.",
                    "en" => "Supporting research on optimizing nutrition and breeding conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZE_WETERYNARII_BEZ_SPECJALIZACJI_LUB_W_TRAKCIE_SPECJALIZACJI = [
            [
                "id" => 20057,
                "name" => json_encode([
                    "pl" => "Diagnozowanie chorób zwierząt i wdrażanie leczenia.",
                    "en" => "Diagnosing animal diseases and implementing treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20058,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zabiegów chirurgicznych oraz szczepień.",
                    "en" => "Performing surgical procedures and vaccinations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20059,
                "name" => json_encode([
                    "pl" => "Udzielanie porad dotyczących pielęgnacji, żywienia i profilaktyki zdrowotnej.",
                    "en" => "Providing advice on animal care, nutrition, and health prevention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20060,
                "name" => json_encode([
                    "pl" => "Współpraca z hodowcami i właścicielami zwierząt w zakresie ochrony zdrowia zwierząt.",
                    "en" => "Collaborating with breeders and animal owners on health protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20061,
                "name" => json_encode([
                    "pl" => "Wykonywanie badań laboratoryjnych i interpretowanie wyników.",
                    "en" => "Conducting laboratory tests and interpreting results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20062,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów dotyczących zdrowia zwierząt i ochrony środowiska.",
                    "en" => "Complying with animal health and environmental protection regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20063,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji medycznej zwierząt.",
                    "en" => "Maintaining medical records of animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20064,
                "name" => json_encode([
                    "pl" => "Monitorowanie zdrowia zwierząt w gospodarstwach rolnych.",
                    "en" => "Monitoring the health of animals on farms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20065,
                "name" => json_encode([
                    "pl" => "Udział w akcjach zapobiegania i zwalczania chorób zakaźnych.",
                    "en" => "Participating in actions to prevent and control infectious diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZE_WETERYNARII_SPECJALIŚCI = [
            [
                "id" => 20066,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie chorób w specjalistycznych dziedzinach weterynarii (np. chirurgia, ortopedia, dermatologia).",
                    "en" => "Diagnosing and treating diseases in specialized fields of veterinary medicine (e.g., surgery, orthopedics, dermatology)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20067,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie skomplikowanych zabiegów i operacji.",
                    "en" => "Performing complex procedures and surgeries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20068,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi specjalistami i laboratoriami weterynaryjnymi.",
                    "en" => "Collaborating with other specialists and veterinary laboratories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20069,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie programów profilaktycznych w hodowlach zwierząt.",
                    "en" => "Developing and implementing preventive programs in animal farms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20070,
                "name" => json_encode([
                    "pl" => "Udzielanie konsultacji i prowadzenie szkoleń dla innych weterynarzy.",
                    "en" => "Providing consultations and conducting training for other veterinarians."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20071,
                "name" => json_encode([
                    "pl" => "Badanie i leczenie zwierząt egzotycznych i rzadkich.",
                    "en" => "Examining and treating exotic and rare animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20072,
                "name" => json_encode([
                    "pl" => "Monitorowanie i wdrażanie nowych metod leczenia oraz terapii.",
                    "en" => "Monitoring and implementing new treatment methods and therapies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20073,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami badawczymi i organizacjami zajmującymi się zdrowiem zwierząt.",
                    "en" => "Collaborating with research institutions and organizations dedicated to animal health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20074,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów zdrowotnych w gospodarstwach rolnych.",
                    "en" => "Conducting health audits on farms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_WETERYNARII = [
            [
                "id" => 20075,
                "name" => json_encode([
                    "pl" => "Wspieranie lekarzy weterynarii w badaniach i zabiegach.",
                    "en" => "Assisting veterinarians in examinations and procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20076,
                "name" => json_encode([
                    "pl" => "Opieka nad zwierzętami przed i po zabiegach medycznych.",
                    "en" => "Caring for animals before and after medical procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20077,
                "name" => json_encode([
                    "pl" => "Pobieranie próbek do badań i ich analiza w laboratorium.",
                    "en" => "Collecting samples for testing and analyzing them in the lab."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20078,
                "name" => json_encode([
                    "pl" => "Podawanie leków i wykonywanie szczepień zgodnie z zaleceniami lekarza.",
                    "en" => "Administering medications and vaccinations as directed by the veterinarian."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20079,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie podstawowych zabiegów pielęgnacyjnych.",
                    "en" => "Performing basic grooming procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20080,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji zdrowotnej zwierząt.",
                    "en" => "Maintaining health records of animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20081,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu zdrowia zwierząt w gospodarstwach hodowlanych.",
                    "en" => "Monitoring the health of animals on farms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20082,
                "name" => json_encode([
                    "pl" => "Obsługa sprzętu weterynaryjnego i dbanie o jego stan.",
                    "en" => "Operating veterinary equipment and maintaining its condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20083,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad higieny i bezpieczeństwa pracy ze zwierzętami.",
                    "en" => "Adhering to hygiene and safety protocols when working with animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ROLNICY_UPRAW_POLOWYCH = [
            [
                "id" => 20084,
                "name" => json_encode([
                    "pl" => "Planowanie i zarządzanie uprawami rolnymi, takimi jak zboża, kukurydza, buraki.",
                    "en" => "Planning and managing crop farming, such as grains, corn, and beets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20085,
                "name" => json_encode([
                    "pl" => "Przygotowywanie gleby pod zasiewy i nawożenie roślin.",
                    "en" => "Preparing soil for planting and fertilizing crops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20086,
                "name" => json_encode([
                    "pl" => "Monitorowanie wzrostu roślin i stosowanie środków ochrony roślin.",
                    "en" => "Monitoring crop growth and applying plant protection measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20087,
                "name" => json_encode([
                    "pl" => "Utrzymanie i naprawa maszyn rolniczych używanych w uprawach.",
                    "en" => "Maintaining and repairing agricultural machinery used in farming."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20088,
                "name" => json_encode([
                    "pl" => "Zbiór plonów i ich odpowiednie magazynowanie.",
                    "en" => "Harvesting crops and properly storing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20089,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad zrównoważonego rolnictwa i ochrony środowiska.",
                    "en" => "Adhering to sustainable farming practices and environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20090,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii i metod upraw.",
                    "en" => "Implementing new technologies and farming methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20091,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z uprawami.",
                    "en" => "Keeping records related to crops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20092,
                "name" => json_encode([
                    "pl" => "Sprzedaż i dystrybucja zebranych plonów.",
                    "en" => "Selling and distributing harvested crops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ROLNICY_UPRAW_MIESZANYCH = [
            [
                "id" => 20093,
                "name" => json_encode([
                    "pl" => "Prowadzenie gospodarstw łączących uprawę roślin i hodowlę zwierząt.",
                    "en" => "Managing farms that combine crop cultivation and livestock breeding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20094,
                "name" => json_encode([
                    "pl" => "Planowanie zasiewów oraz zarządzanie hodowlą zwierząt gospodarskich.",
                    "en" => "Planning sowing schedules and managing livestock farming."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20095,
                "name" => json_encode([
                    "pl" => "Prace polowe, w tym orka, siew, nawożenie i zbiór plonów.",
                    "en" => "Fieldwork, including plowing, sowing, fertilizing, and harvesting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20096,
                "name" => json_encode([
                    "pl" => "Żywienie zwierząt i dbanie o ich zdrowie oraz warunki bytowe.",
                    "en" => "Feeding animals and ensuring their health and living conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20097,
                "name" => json_encode([
                    "pl" => "Utrzymywanie maszyn i sprzętu rolniczego w dobrym stanie.",
                    "en" => "Maintaining agricultural machinery and equipment in good condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20098,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa i higieny pracy.",
                    "en" => "Adhering to safety and hygiene regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20099,
                "name" => json_encode([
                    "pl" => "Współpraca z doradcami rolniczymi i weterynarzami.",
                    "en" => "Collaborating with agricultural advisors and veterinarians."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20100,
                "name" => json_encode([
                    "pl" => "Wdrażanie praktyk ekologicznych i zrównoważonych w gospodarstwie.",
                    "en" => "Implementing eco-friendly and sustainable practices on the farm."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20101,
                "name" => json_encode([
                    "pl" => "Prowadzenie ewidencji gospodarstwa rolnego.",
                    "en" => "Keeping records of farm operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $HODOWCY_ZWIERZAT_GOSPODARSKICH_I_DOMOWYCH = [
            [
                "id" => 20102,
                "name" => json_encode([
                    "pl" => "Opieka nad zwierzętami i zapewnienie im odpowiednich warunków bytowych.",
                    "en" => "Caring for animals and ensuring appropriate living conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20103,
                "name" => json_encode([
                    "pl" => "Planowanie i realizacja programów żywieniowych oraz zdrowotnych.",
                    "en" => "Planning and implementing nutritional and health programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20104,
                "name" => json_encode([
                    "pl" => "Monitorowanie zdrowia i zachowań zwierząt.",
                    "en" => "Monitoring the health and behavior of animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20105,
                "name" => json_encode([
                    "pl" => "Współpraca z weterynarzami w zakresie profilaktyki i leczenia.",
                    "en" => "Collaborating with veterinarians for prevention and treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20106,
                "name" => json_encode([
                    "pl" => "Prowadzenie hodowli zgodnie z zasadami dobrostanu zwierząt.",
                    "en" => "Conducting breeding in accordance with animal welfare principles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20107,
                "name" => json_encode([
                    "pl" => "Rejestrowanie i dokumentowanie hodowli oraz urodzeń młodych.",
                    "en" => "Registering and documenting breeding and births."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20108,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w miejscach hodowli i dbanie o sprzęt.",
                    "en" => "Keeping breeding areas clean and maintaining equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20109,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie selekcji zwierząt pod względem zdrowia i cech użytkowych.",
                    "en" => "Selecting animals based on health and utility traits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20110,
                "name" => json_encode([
                    "pl" => "Sprzedaż zwierząt i współpraca z innymi hodowcami.",
                    "en" => "Selling animals and collaborating with other breeders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PSZCZELARZE_I_HODOWCY_JEDWABNIKOW = [
            [
                "id" => 20111,
                "name" => json_encode([
                    "pl" => "Prowadzenie pasiek i hodowli pszczół w celu produkcji miodu i innych produktów pszczelich.",
                    "en" => "Managing apiaries and bee colonies for the production of honey and other bee products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20112,
                "name" => json_encode([
                    "pl" => "Pielęgnacja uli i monitorowanie zdrowia pszczół.",
                    "en" => "Caring for beehives and monitoring the health of bees."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20113,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie miodobrania i przetwarzanie produktów pszczelich.",
                    "en" => "Harvesting honey and processing bee products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20114,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad ochrony pszczół i środowiska naturalnego.",
                    "en" => "Following bee protection and environmental conservation principles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20115,
                "name" => json_encode([
                    "pl" => "Hodowla jedwabników i zbieranie kokonów do produkcji jedwabiu.",
                    "en" => "Breeding silkworms and collecting cocoons for silk production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20116,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków hodowli i dbanie o odpowiednie żywienie owadów.",
                    "en" => "Monitoring breeding conditions and ensuring proper nutrition for insects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20117,
                "name" => json_encode([
                    "pl" => "Sprzedaż miodu, wosku, propolisu oraz innych produktów.",
                    "en" => "Selling honey, wax, propolis, and other products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20118,
                "name" => json_encode([
                    "pl" => "Wdrażanie metod poprawiających wydajność i jakość hodowli.",
                    "en" => "Implementing methods to improve productivity and quality of breeding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20119,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pszczelarzami i organizacjami pszczelarskimi.",
                    "en" => "Collaborating with other beekeepers and beekeeping organizations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ROLNICY_PRODUKCJI_ROSLINNEJ_I_ZWIERZECEJ = [
            [
                "id" => 20120,
                "name" => json_encode([
                    "pl" => "Prowadzenie gospodarstwa rolnego z produkcją roślinną i zwierzęcą.",
                    "en" => "Managing a farm with both crop production and livestock."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20121,
                "name" => json_encode([
                    "pl" => "Zarządzanie uprawami rolnymi i hodowlą zwierząt w jednym gospodarstwie.",
                    "en" => "Managing crop cultivation and livestock farming within a single farm."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20122,
                "name" => json_encode([
                    "pl" => "Prace polowe, takie jak orka, siew, nawożenie i zbiór plonów.",
                    "en" => "Performing fieldwork such as plowing, sowing, fertilizing, and harvesting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20123,
                "name" => json_encode([
                    "pl" => "Opieka nad zwierzętami i dbanie o ich żywienie i zdrowie.",
                    "en" => "Caring for animals and ensuring their nutrition and health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20124,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad ochrony środowiska i dobrostanu zwierząt.",
                    "en" => "Adhering to environmental protection standards and animal welfare practices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20125,
                "name" => json_encode([
                    "pl" => "Współpraca z weterynarzami i specjalistami ds. rolnictwa.",
                    "en" => "Collaborating with veterinarians and agricultural specialists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20126,
                "name" => json_encode([
                    "pl" => "Sprzedaż i dystrybucja produktów rolnych i zwierzęcych.",
                    "en" => "Selling and distributing agricultural and livestock products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20127,
                "name" => json_encode([
                    "pl" => "Utrzymywanie i konserwacja maszyn rolniczych.",
                    "en" => "Maintaining and servicing agricultural machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20128,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z produkcją rolną i hodowlaną.",
                    "en" => "Keeping records related to crop production and livestock farming."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SADOWNICY = [
            [
                "id" => 20129,
                "name" => json_encode([
                    "pl" => "Uprawa i pielęgnacja drzew owocowych, takich jak jabłonie, grusze, śliwy.",
                    "en" => "Cultivation and care of fruit trees such as apple, pear, and plum trees."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20130,
                "name" => json_encode([
                    "pl" => "Ochrona sadów przed chorobami, szkodnikami i warunkami atmosferycznymi.",
                    "en" => "Protecting orchards from diseases, pests, and weather conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20131,
                "name" => json_encode([
                    "pl" => "Przycinanie drzew, nawożenie i podlewanie upraw.",
                    "en" => "Pruning trees, fertilizing, and watering crops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20132,
                "name" => json_encode([
                    "pl" => "Zbiór owoców i przygotowywanie ich do sprzedaży.",
                    "en" => "Harvesting fruits and preparing them for sale."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20133,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości plonów i przechowywanie owoców w odpowiednich warunkach.",
                    "en" => "Monitoring crop quality and storing fruits in appropriate conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20134,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad ochrony środowiska w sadownictwie.",
                    "en" => "Complying with environmental protection standards in orcharding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20135,
                "name" => json_encode([
                    "pl" => "Współpraca z doradcami rolniczymi i instytucjami rolniczymi.",
                    "en" => "Collaborating with agricultural advisors and institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20136,
                "name" => json_encode([
                    "pl" => "Sprzedaż i promocja produktów sadowniczych.",
                    "en" => "Selling and promoting orchard products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20137,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej upraw sadowniczych.",
                    "en" => "Keeping records related to orchard cultivation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OGRODNICY = [
            [
                "id" => 20138,
                "name" => json_encode([
                    "pl" => "Uprawa roślin ozdobnych, warzyw, kwiatów i drzew w ogrodach lub szkółkach.",
                    "en" => "Cultivation of ornamental plants, vegetables, flowers, and trees in gardens or nurseries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20139,
                "name" => json_encode([
                    "pl" => "Prace pielęgnacyjne, takie jak podlewanie, nawożenie, przycinanie.",
                    "en" => "Maintenance tasks such as watering, fertilizing, and pruning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20140,
                "name" => json_encode([
                    "pl" => "Zwalczanie szkodników i chorób roślin.",
                    "en" => "Controlling pests and plant diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20141,
                "name" => json_encode([
                    "pl" => "Projektowanie i utrzymanie ogrodów oraz terenów zielonych.",
                    "en" => "Designing and maintaining gardens and green spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20142,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad ekologicznej uprawy roślin.",
                    "en" => "Adhering to principles of ecological plant cultivation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20143,
                "name" => json_encode([
                    "pl" => "Przygotowywanie roślin do sprzedaży i prace związane z ich pakowaniem.",
                    "en" => "Preparing plants for sale and performing tasks related to packaging."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20144,
                "name" => json_encode([
                    "pl" => "Współpraca z klientami i doradztwo w zakresie pielęgnacji roślin.",
                    "en" => "Collaborating with clients and advising on plant care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20145,
                "name" => json_encode([
                    "pl" => "Utrzymywanie narzędzi ogrodniczych w dobrym stanie.",
                    "en" => "Maintaining gardening tools in good condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20146,
                "name" => json_encode([
                    "pl" => "Organizacja przestrzeni upraw i dbanie o estetykę ogrodu.",
                    "en" => "Organizing cultivation spaces and maintaining garden aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWCA_CIAGNIKA_ROLNICZEGO = [
            [
                "id" => 20147,
                "name" => json_encode([
                    "pl" => "Obsługa i prowadzenie ciągnika rolniczego podczas prac polowych.",
                    "en" => "Operating and driving a farm tractor during fieldwork."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20148,
                "name" => json_encode([
                    "pl" => "Transportowanie płodów rolnych, nawozów i sprzętu rolniczego.",
                    "en" => "Transporting agricultural produce, fertilizers, and farming equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20149,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami gospodarstwa przy różnych zadaniach.",
                    "en" => "Collaborating with other farm workers on various tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20150,
                "name" => json_encode([
                    "pl" => "Utrzymywanie ciągnika w dobrym stanie technicznym i jego konserwacja.",
                    "en" => "Maintaining the tractor in good technical condition and performing maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20151,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa podczas jazdy i obsługi maszyn.",
                    "en" => "Adhering to safety regulations while driving and operating machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20152,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac, takich jak orka, siew, koszenie i opryski.",
                    "en" => "Performing tasks such as plowing, sowing, mowing, and spraying."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20153,
                "name" => json_encode([
                    "pl" => "Załadunek i rozładunek towarów z pomocą maszyn rolniczych.",
                    "en" => "Loading and unloading goods with the assistance of agricultural machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20154,
                "name" => json_encode([
                    "pl" => "Uczestniczenie w naprawach i przeglądach technicznych sprzętu.",
                    "en" => "Participating in repairs and technical inspections of equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20155,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej pracy ciągnika.",
                    "en" => "Maintaining records related to tractor operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MASZYN_ROLNICZYCH = [

            [
                "id" => 20156,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn rolniczych, takich jak kombajny, sieczkarnie, opryskiwacze.",
                    "en" => "Operating agricultural machinery, such as combine harvesters, choppers, and sprayers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20157,
                "name" => json_encode([
                    "pl" => "Konserwacja i bieżące naprawy sprzętu rolniczego.",
                    "en" => "Performing maintenance and routine repairs on farming equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20158,
                "name" => json_encode([
                    "pl" => "Monitorowanie pracy maszyn i reagowanie na awarie.",
                    "en" => "Monitoring the performance of machines and responding to malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20159,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami przy realizacji zadań polowych.",
                    "en" => "Collaborating with other workers to complete field tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20160,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa i higieny pracy.",
                    "en" => "Adhering to safety and hygiene regulations at work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20161,
                "name" => json_encode([
                    "pl" => "Utrzymywanie maszyn w czystości i porządku.",
                    "en" => "Keeping machines clean and well-organized."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20162,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii w pracy z maszynami rolniczymi.",
                    "en" => "Implementing new technologies in the use of agricultural machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20163,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej eksploatacji sprzętu.",
                    "en" => "Maintaining records related to the use and operation of equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20164,
                "name" => json_encode([
                    "pl" => "Dbanie o efektywność i precyzję pracy maszyn.",
                    "en" => "Ensuring the efficiency and precision of machine operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ROBOTNICY_LESNI_I_POKREWNI = [

            [
                "id" => 20165,
                "name" => json_encode([
                    "pl" => "Wycinka i pielęgnacja drzew w lasach oraz ich transport.",
                    "en" => "Felling and caring for trees in forests and transporting them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20166,
                "name" => json_encode([
                    "pl" => "Sadzenie nowych drzew i pielęgnacja młodych upraw leśnych.",
                    "en" => "Planting new trees and caring for young forest crops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20167,
                "name" => json_encode([
                    "pl" => "Utrzymywanie i konserwacja szlaków leśnych oraz ścieżek turystycznych.",
                    "en" => "Maintaining and preserving forest trails and tourist paths."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20168,
                "name" => json_encode([
                    "pl" => "Zbieranie i usuwanie gałęzi oraz odpadów leśnych.",
                    "en" => "Collecting and removing branches and forest waste."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20169,
                "name" => json_encode([
                    "pl" => "Współpraca z leśniczymi w zakresie zarządzania lasem.",
                    "en" => "Collaborating with foresters in forest management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20170,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa podczas pracy w terenie leśnym.",
                    "en" => "Following safety regulations while working in forest areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20171,
                "name" => json_encode([
                    "pl" => "Dbanie o stan techniczny sprzętu do wycinki i transportu drewna.",
                    "en" => "Maintaining the technical condition of felling and wood transport equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20172,
                "name" => json_encode([
                    "pl" => "Udział w akcjach ochrony lasów przed szkodnikami i pożarami.",
                    "en" => "Participating in forest protection activities against pests and fires."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20173,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu lasu i raportowanie o zagrożeniach.",
                    "en" => "Monitoring forest conditions and reporting threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $HODOWCY_RYB = [

            [
                "id" => 20174,
                "name" => json_encode([
                    "pl" => "Zarządzanie hodowlą ryb w stawach, basenach lub zbiornikach wodnych.",
                    "en" => "Managing fish farming in ponds, pools, or water reservoirs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20175,
                "name" => json_encode([
                    "pl" => "Monitorowanie zdrowia ryb i warunków wodnych, takich jak temperatura i jakość wody.",
                    "en" => "Monitoring fish health and water conditions, such as temperature and water quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20176,
                "name" => json_encode([
                    "pl" => "Karmienie ryb i kontrola ich wzrostu oraz rozwoju.",
                    "en" => "Feeding fish and monitoring their growth and development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20177,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad ekologicznych i norm dotyczących hodowli.",
                    "en" => "Adhering to ecological principles and regulations related to farming."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20178,
                "name" => json_encode([
                    "pl" => "Zabezpieczanie zbiorników przed drapieżnikami i chorobami.",
                    "en" => "Securing reservoirs from predators and diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20179,
                "name" => json_encode([
                    "pl" => "Zbiór ryb i przygotowywanie ich do sprzedaży.",
                    "en" => "Harvesting fish and preparing them for sale."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20180,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z hodowlą ryb.",
                    "en" => "Maintaining records related to fish farming."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20181,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych metod poprawiających wydajność produkcji.",
                    "en" => "Implementing new methods to improve production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20182,
                "name" => json_encode([
                    "pl" => "Współpraca z weterynarzami i specjalistami ds. rybactwa.",
                    "en" => "Collaborating with veterinarians and fishery specialists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RYBACY_SRODLADOWI = [

            [
                "id" => 20183,
                "name" => json_encode([
                    "pl" => "Połowy ryb w jeziorach, rzekach i innych wodach śródlądowych.",
                    "en" => "Fishing in lakes, rivers, and other inland waters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20184,
                "name" => json_encode([
                    "pl" => "Obsługa łodzi rybackich oraz sprzętu do połowu, takiego jak sieci, wędki.",
                    "en" => "Operating fishing boats and fishing gear, such as nets and rods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20185,
                "name" => json_encode([
                    "pl" => "Sortowanie i przetwarzanie złowionych ryb na miejscu.",
                    "en" => "Sorting and processing caught fish on-site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20186,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków wodnych i dbanie o ekosystemy śródlądowe.",
                    "en" => "Monitoring water conditions and caring for inland ecosystems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20187,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów dotyczących ochrony środowiska i połowów.",
                    "en" => "Complying with environmental protection and fishing regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20188,
                "name" => json_encode([
                    "pl" => "Przechowywanie i transport złowionych ryb w odpowiednich warunkach.",
                    "en" => "Storing and transporting caught fish in proper conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20189,
                "name" => json_encode([
                    "pl" => "Współpraca z organizacjami rybackimi i lokalnymi społecznościami.",
                    "en" => "Collaborating with fishing organizations and local communities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20190,
                "name" => json_encode([
                    "pl" => "Utrzymywanie sprzętu rybackiego w dobrym stanie technicznym.",
                    "en" => "Maintaining fishing equipment in good working condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20191,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji połowów.",
                    "en" => "Keeping records of fishing activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RYBACY_MORSCY = [

            [
                "id" => 20192,
                "name" => json_encode([
                    "pl" => "Połowy ryb i owoców morza na wodach morskich.",
                    "en" => "Fishing for fish and seafood in marine waters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20193,
                "name" => json_encode([
                    "pl" => "Obsługa statków rybackich i sprzętu do połowu, w tym sieci, trawlerów, wędek.",
                    "en" => "Operating fishing vessels and fishing equipment, including nets, trawlers, and rods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20194,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa podczas pracy na morzu.",
                    "en" => "Following safety regulations while working at sea."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20195,
                "name" => json_encode([
                    "pl" => "Sortowanie i przetwarzanie złowionych ryb na pokładzie.",
                    "en" => "Sorting and processing caught fish onboard."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20196,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków pogodowych i nawigacja na wodach morskich.",
                    "en" => "Monitoring weather conditions and navigating marine waters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20197,
                "name" => json_encode([
                    "pl" => "Przechowywanie złowionych ryb w odpowiednich warunkach chłodniczych.",
                    "en" => "Storing caught fish in appropriate refrigerated conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20198,
                "name" => json_encode([
                    "pl" => "Współpraca z załogą statku i kapitanem.",
                    "en" => "Collaborating with the ship's crew and captain."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20199,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji połowów i raportowanie wyników.",
                    "en" => "Keeping records of catches and reporting results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 20200,
                "name" => json_encode([
                    "pl" => "Utrzymywanie statku oraz sprzętu rybackiego w dobrym stanie.",
                    "en" => "Maintaining the ship and fishing equipment in good condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];

        DB::table('detail_projects')->insert(array_merge(
            $SPECJALISCI_W_ZAKRESIE_ROLNICTWA_LESNICTWA_I_POKREWNI,
            $LABORANT_W_HODOWLI_ROSLIN,
            $TECHNICY_LESNICTWA,
            $LABORANT_W_HODOWLI_ZWIERZAT,
            $LEKARZE_WETERYNARII_BEZ_SPECJALIZACJI_LUB_W_TRAKCIE_SPECJALIZACJI,
            $LEKARZE_WETERYNARII_SPECJALIŚCI,
            $TECHNIK_WETERYNARII,
            $ROLNICY_UPRAW_POLOWYCH,
            $ROLNICY_UPRAW_MIESZANYCH,
            $HODOWCY_ZWIERZAT_GOSPODARSKICH_I_DOMOWYCH,
            $PSZCZELARZE_I_HODOWCY_JEDWABNIKOW,
            $ROLNICY_PRODUKCJI_ROSLINNEJ_I_ZWIERZECEJ,
            $SADOWNICY,
            $OGRODNICY,
            $KIEROWCA_CIAGNIKA_ROLNICZEGO,
            $OPERATOR_MASZYN_ROLNICZYCH,
            $ROBOTNICY_LESNI_I_POKREWNI,
            $HODOWCY_RYB,
            $RYBACY_SRODLADOWI,
            $RYBACY_MORSCY

        ));

        Category::whereId('2674')->first()->detailprojects()->attach(collect($SPECJALISCI_W_ZAKRESIE_ROLNICTWA_LESNICTWA_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2685')->first()->detailprojects()->attach(collect($LABORANT_W_HODOWLI_ROSLIN)->pluck('id')->toArray());
        Category::whereId('2686')->first()->detailprojects()->attach(collect($TECHNICY_LESNICTWA)->pluck('id')->toArray());
        Category::whereId('2688')->first()->detailprojects()->attach(collect($LABORANT_W_HODOWLI_ZWIERZAT)->pluck('id')->toArray());
        Category::whereId('2690')->first()->detailprojects()->attach(collect($LEKARZE_WETERYNARII_BEZ_SPECJALIZACJI_LUB_W_TRAKCIE_SPECJALIZACJI)->pluck('id')->toArray());
        Category::whereId('2691')->first()->detailprojects()->attach(collect($LEKARZE_WETERYNARII_SPECJALIŚCI)->pluck('id')->toArray());
        Category::whereId('2710')->first()->detailprojects()->attach(collect($TECHNIK_WETERYNARII)->pluck('id')->toArray());
        Category::whereId('2713')->first()->detailprojects()->attach(collect($ROLNICY_UPRAW_POLOWYCH)->pluck('id')->toArray());
        Category::whereId('2719')->first()->detailprojects()->attach(collect($ROLNICY_UPRAW_MIESZANYCH)->pluck('id')->toArray());
        Category::whereId('2724')->first()->detailprojects()->attach(collect($HODOWCY_ZWIERZAT_GOSPODARSKICH_I_DOMOWYCH)->pluck('id')->toArray());
        Category::whereId('2742')->first()->detailprojects()->attach(collect($PSZCZELARZE_I_HODOWCY_JEDWABNIKOW)->pluck('id')->toArray());
        Category::whereId('2749')->first()->detailprojects()->attach(collect($ROLNICY_PRODUKCJI_ROSLINNEJ_I_ZWIERZECEJ)->pluck('id')->toArray());
        Category::whereId('2769')->first()->detailprojects()->attach(collect($SADOWNICY)->pluck('id')->toArray());
        Category::whereId('2774')->first()->detailprojects()->attach(collect($OGRODNICY)->pluck('id')->toArray());
        Category::whereId('2799')->first()->detailprojects()->attach(collect($KIEROWCA_CIAGNIKA_ROLNICZEGO)->pluck('id')->toArray());
        Category::whereId('2802')->first()->detailprojects()->attach(collect($OPERATOR_MASZYN_ROLNICZYCH)->pluck('id')->toArray());
        Category::whereId('2806')->first()->detailprojects()->attach(collect($ROBOTNICY_LESNI_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('2824')->first()->detailprojects()->attach(collect($HODOWCY_RYB)->pluck('id')->toArray());
        Category::whereId('2825')->first()->detailprojects()->attach(collect($RYBACY_SRODLADOWI)->pluck('id')->toArray());
        Category::whereId('2825')->first()->detailprojects()->attach(collect($RYBACY_MORSCY)->pluck('id')->toArray());


    }
}

