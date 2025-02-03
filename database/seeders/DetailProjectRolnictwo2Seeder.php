<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectRolnictwo2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();
        $DORADCA_ROLNICZY = [

            [
                "id" => 30102,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie doboru odpowiednich technologii rolniczych.",
                    "en" => "Consulting on the selection of appropriate agricultural technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30103,
                "name" => json_encode([
                    "pl" => "Pomoc w zakresie optymalizacji procesów produkcji rolniczej.",
                    "en" => "Assistance in optimizing agricultural production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30104,
                "name" => json_encode([
                    "pl" => "Szkolenie rolników w zakresie nowoczesnych metod uprawy roślin.",
                    "en" => "Training farmers in modern plant cultivation methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30105,
                "name" => json_encode([
                    "pl" => "Wspieranie rolników w zakresie efektywnego zarządzania gospodarstwem rolnym.",
                    "en" => "Supporting farmers in effective farm management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30106,
                "name" => json_encode([
                    "pl" => "Przygotowywanie projektów aplikacji o dopłaty unijne dla rolników.",
                    "en" => "Preparing projects for EU subsidy applications for farmers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30107,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków atmosferycznych i doradztwo w zakresie ochrony roślin.",
                    "en" => "Monitoring weather conditions and providing advice on plant protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $gleboznawca = [

            [
                "id" => 30108,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz gleby w celu określenia jej właściwości fizycznych i chemicznych.",
                    "en" => "Conducting soil analyses to determine its physical and chemical properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30109,
                "name" => json_encode([
                    "pl" => "Opracowywanie zaleceń dotyczących nawożenia gleby.",
                    "en" => "Developing recommendations for soil fertilization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30110,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie poprawy jakości gleby w rolnictwie.",
                    "en" => "Consulting on soil quality improvement in agriculture."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $inzynier_lesnictwa = [

            [
                "id" => 30111,
                "name" => json_encode([
                    "pl" => "Planowanie i nadzorowanie działań związanych z hodowlą lasów.",
                    "en" => "Planning and supervising forestry activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30112,
                "name" => json_encode([
                    "pl" => "Analizowanie stanu zdrowotnego lasów i identyfikowanie zagrożeń dla ekosystemu leśnego.",
                    "en" => "Analyzing the health status of forests and identifying threats to the forest ecosystem."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30113,
                "name" => json_encode([
                    "pl" => "Wspieranie rozwoju zrównoważonego leśnictwa.",
                    "en" => "Supporting the development of sustainable forestry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $inzynier_ogrodnictwa = [

            [
                "id" => 30114,
                "name" => json_encode([
                    "pl" => "Projektowanie i nadzorowanie produkcji roślin ozdobnych i użytkowych.",
                    "en" => "Designing and supervising the production of ornamental and utility plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30115,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie upraw warzyw, owoców i kwiatów.",
                    "en" => "Consulting on the cultivation of vegetables, fruits, and flowers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30116,
                "name" => json_encode([
                    "pl" => "Wspomaganie rolników w zakresie ochrony roślin przed chorobami i szkodnikami.",
                    "en" => "Assisting farmers with plant protection against diseases and pests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $inzynier_rolnictwa = [

            [
                "id" => 30117,
                "name" => json_encode([
                    "pl" => "Projektowanie systemów upraw rolnych z uwzględnieniem nowoczesnych technologii.",
                    "en" => "Designing agricultural cultivation systems using modern technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30118,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów produkcji rolnej w celu zwiększenia efektywności.",
                    "en" => "Optimizing agricultural production processes to increase efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30119,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie zrównoważonego rozwoju rolnictwa.",
                    "en" => "Consulting on sustainable agricultural development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $inzynier_rybactwa = [

            [
                "id" => 30120,
                "name" => json_encode([
                    "pl" => "Nadzór nad produkcją rybną oraz prowadzenie hodowli ryb.",
                    "en" => "Supervising fish production and managing fish breeding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30121,
                "name" => json_encode([
                    "pl" => "Zarządzanie zasobami wodnymi w celu poprawy jakości środowiska wodnego.",
                    "en" => "Managing water resources to improve the quality of aquatic environments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30122,
                "name" => json_encode([
                    "pl" => "Opracowywanie technologii zrównoważonego rozwoju w akwakulturze.",
                    "en" => "Developing sustainable development technologies in aquaculture."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $inzynier_zootechniki = [

            [
                "id" => 30123,
                "name" => json_encode([
                    "pl" => "Projektowanie i nadzorowanie hodowli zwierząt gospodarskich.",
                    "en" => "Designing and supervising the breeding of livestock."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30124,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich ras zwierząt do różnych warunków hodowlanych.",
                    "en" => "Selecting suitable animal breeds for different breeding conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30125,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie karmienia i żywienia zwierząt.",
                    "en" => "Consulting on feeding and nutrition of animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $klasyfikator_gruntow = [

            [
                "id" => 30126,
                "name" => json_encode([
                    "pl" => "Klasyfikowanie gruntów według ich przydatności rolniczej.",
                    "en" => "Classifying land according to its agricultural suitability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30127,
                "name" => json_encode([
                    "pl" => "Opracowywanie dokumentacji dotyczącej klasyfikacji gruntów.",
                    "en" => "Developing documentation related to land classification."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30128,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie użytkowania gruntów rolnych i ich ochrony.",
                    "en" => "Consulting on land use and protection of agricultural land."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $rzeczoznawca_rolniczy = [

            [
                "id" => 30129,
                "name" => json_encode([
                    "pl" => "Wycena gruntów rolnych oraz innych nieruchomości związanych z rolnictwem.",
                    "en" => "Valuing agricultural land and other properties related to agriculture."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30130,
                "name" => json_encode([
                    "pl" => "Opracowywanie opinii dotyczących wartości gospodarstw rolnych.",
                    "en" => "Developing opinions on the value of agricultural farms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30131,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie organizacji i zarządzania gospodarstwami rolnymi.",
                    "en" => "Consulting on the organization and management of agricultural farms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pozostali_specjalisci = [

            [
                "id" => 30132,
                "name" => json_encode([
                    "pl" => "Opracowywanie projektów w zakresie zrównoważonego rozwoju rolnictwa i leśnictwa.",
                    "en" => "Developing projects for sustainable agricultural and forestry development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30133,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie ochrony środowiska w rolnictwie i leśnictwie.",
                    "en" => "Consulting on environmental protection in agriculture and forestry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30134,
                "name" => json_encode([
                    "pl" => "Wspieranie rolników i leśników w zakresie wdrażania nowoczesnych technologii.",
                    "en" => "Supporting farmers and foresters in implementing modern technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $laborant_nasiennictwa = [

            [
                "id" => 30135,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz jakości nasion, w tym ich zdrowotności i zdolności kiełkowania.",
                    "en" => "Conducting seed quality analyses, including health and germination tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30136,
                "name" => json_encode([
                    "pl" => "Przygotowywanie próbek nasion do badań laboratoryjnych.",
                    "en" => "Preparing seed samples for laboratory tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30137,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków przechowywania nasion w celu utrzymania ich jakości.",
                    "en" => "Monitoring seed storage conditions to maintain their quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30138,
                "name" => json_encode([
                    "pl" => "Współpraca z rolnikami i firmami nasiennymi w zakresie doboru i kontroli jakości nasion.",
                    "en" => "Collaborating with farmers and seed companies in seed selection and quality control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30139,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z wynikami badań nasion i udzielanie rekomendacji dotyczących ich jakości.",
                    "en" => "Preparing reports with seed test results and providing recommendations on seed quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30140,
                "name" => json_encode([
                    "pl" => "Uczestniczenie w opracowywaniu norm jakościowych i procedur badania nasion.",
                    "en" => "Participating in the development of quality standards and seed testing procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $lekarz_weterynarii_chirurgia = [

            [
                "id" => 30141,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zabiegów chirurgicznych u zwierząt, w tym operacji rutynowych i nagłych.",
                    "en" => "Performing surgical procedures on animals, including routine and emergency operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30142,
                "name" => json_encode([
                    "pl" => "Diagnozowanie chorób wymagających interwencji chirurgicznej.",
                    "en" => "Diagnosing diseases requiring surgical intervention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30143,
                "name" => json_encode([
                    "pl" => "Opieka pooperacyjna i rehabilitacja zwierząt po zabiegach chirurgicznych.",
                    "en" => "Postoperative care and rehabilitation of animals after surgical procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $lekarz_weterynarii_drobiu = [

            [
                "id" => 30144,
                "name" => json_encode([
                    "pl" => "Diagnostyka i leczenie chorób drobiu, w tym chorób zakaźnych i pasożytniczych.",
                    "en" => "Diagnosis and treatment of poultry diseases, including infectious and parasitic diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30145,
                "name" => json_encode([
                    "pl" => "Opracowywanie programów profilaktycznych i szczepień dla drobiu.",
                    "en" => "Developing preventive programs and vaccination schedules for poultry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30146,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie hodowli drobiu i poprawy warunków zdrowotnych zwierząt.",
                    "en" => "Consulting on poultry breeding and improving animal health conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $lekarz_weterynarii_koni = [

            [
                "id" => 30147,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie chorób koni, w tym problemów ortopedycznych i chorób układu pokarmowego.",
                    "en" => "Diagnosing and treating horse diseases, including orthopedic issues and digestive system disorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30148,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie rutynowych badań zdrowia koni, w tym szczepienia i profilaktyka chorób.",
                    "en" => "Conducting routine health check-ups for horses, including vaccinations and disease prevention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30149,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie żywienia, pielęgnacji i zarządzania stajniami.",
                    "en" => "Consulting on nutrition, care, and stable management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $lekarz_weterynarii_owady = [

            [
                "id" => 30150,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie chorób owadów użytkowych, takich jak pszczoły czy jedwabniki.",
                    "en" => "Diagnosing and treating diseases in beneficial insects, such as bees and silkworms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30151,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii zwalczania chorób i pasożytów w hodowlach owadów użytkowych.",
                    "en" => "Developing strategies for combating diseases and pests in beneficial insect farming."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30152,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie poprawy wydajności hodowli owadów użytkowych.",
                    "en" => "Consulting on improving the productivity of beneficial insect farming."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $lekarz_weterynarii_przezu = [

            [
                "id" => 30153,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie chorób przeżuwaczy, w tym bydła, owiec i kóz.",
                    "en" => "Diagnosing and treating diseases in ruminants, including cattle, sheep, and goats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30154,
                "name" => json_encode([
                    "pl" => "Opracowywanie programów żywieniowych i zdrowotnych dla przeżuwaczy.",
                    "en" => "Developing nutrition and health programs for ruminants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30155,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie zarządzania stadami przeżuwaczy i poprawy ich zdrowia.",
                    "en" => "Consulting on herd management and improving the health of ruminants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $lekarz_weterynarii_psy_i_koty = [

            [
                "id" => 30156,
                "name" => json_encode([
                    "pl" => "Diagnostyka i leczenie chorób psów i kotów, w tym chorób wewnętrznych i infekcji.",
                    "en" => "Diagnosis and treatment of diseases in dogs and cats, including internal diseases and infections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30157,
                "name" => json_encode([
                    "pl" => "Opracowywanie programów profilaktycznych, szczepień i leczenia dla psów i kotów.",
                    "en" => "Developing preventive programs, vaccinations, and treatments for dogs and cats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30158,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie żywienia, pielęgnacji i wychowania psów oraz kotów.",
                    "en" => "Consulting on the nutrition, care, and training of dogs and cats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $lekarz_weterynarii_ryby = [

            [
                "id" => 30159,
                "name" => json_encode([
                    "pl" => "Diagnostyka i leczenie chorób ryb, w tym infekcji bakteryjnych i pasożytniczych.",
                    "en" => "Diagnosis and treatment of fish diseases, including bacterial and parasitic infections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30160,
                "name" => json_encode([
                    "pl" => "Opracowywanie programów zapobiegania chorobom i leczenia w hodowlach ryb.",
                    "en" => "Developing disease prevention and treatment programs for fish farms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30161,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie poprawy warunków hodowlanych ryb i jakości wody.",
                    "en" => "Consulting on improving fish farming conditions and water quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $lekarz_weterynarii_trzoda = [

            [
                "id" => 30162,
                "name" => json_encode([
                    "pl" => "Diagnostyka i leczenie chorób trzody chlewnej, w tym chorób zakaźnych i metabolicznych.",
                    "en" => "Diagnosis and treatment of diseases in swine, including infectious and metabolic diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30163,
                "name" => json_encode([
                    "pl" => "Opracowywanie programów szczepień i profilaktyki chorób dla trzody chlewnej.",
                    "en" => "Developing vaccination programs and disease prevention strategies for swine."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30164,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie zarządzania zdrowiem i hodowlą trzody chlewnej.",
                    "en" => "Consulting on health management and breeding of swine."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $lekarz_weterynarii_zwierzeta_futerkowe = [

            [
                "id" => 30165,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie chorób zwierząt futerkowych, takich jak norki, lisy i kuny.",
                    "en" => "Diagnosis and treatment of diseases in fur-bearing animals, such as minks, foxes, and martens."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30166,
                "name" => json_encode([
                    "pl" => "Opracowywanie programów zdrowotnych i profilaktycznych dla zwierząt futerkowych.",
                    "en" => "Developing health and preventive programs for fur-bearing animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30167,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie poprawy warunków hodowlanych zwierząt futerkowych.",
                    "en" => "Consulting on improving the farming conditions of fur-bearing animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $lekarz_weterynarii_zwierzeta_niedomowione = [

            [
                "id" => 30168,
                "name" => json_encode([
                    "pl" => "Diagnostyka i leczenie chorób zwierząt nieudomowionych, w tym dzikich i egzotycznych.",
                    "en" => "Diagnosis and treatment of diseases in undomesticated animals, including wild and exotic species."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30169,
                "name" => json_encode([
                    "pl" => "Opracowywanie programów ochrony zdrowia i rehabilitacji dzikich zwierząt.",
                    "en" => "Developing health protection and rehabilitation programs for wild animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30170,
                "name" => json_encode([
                    "pl" => "Współpraca z ośrodkami rehabilitacji dzikich zwierząt i organizacjami ochrony przyrody.",
                    "en" => "Collaborating with wildlife rehabilitation centers and conservation organizations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $lekarz_weterynarii_epizootiologia = [

            [
                "id" => 30171,
                "name" => json_encode([
                    "pl" => "Zarządzanie monitorowaniem i kontrolowaniem chorób zakaźnych zwierząt.",
                    "en" => "Managing the monitoring and control of animal infectious diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30172,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii prewencji chorób i nadzoru epidemiologicznego.",
                    "en" => "Developing disease prevention strategies and epidemiological surveillance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30173,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie zarządzania administracją weterynaryjną i kontrolą zdrowia zwierząt.",
                    "en" => "Consulting on veterinary administration management and animal health control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $lekarz_weterynarii_higiena_zwierzat = [

            [
                "id" => 30174,
                "name" => json_encode([
                    "pl" => "Monitorowanie i kontrolowanie warunków higieny zwierząt rzeźnych.",
                    "en" => "Monitoring and controlling hygiene conditions for slaughter animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30175,
                "name" => json_encode([
                    "pl" => "Opracowywanie zasad higieny w produkcji żywności pochodzenia zwierzęcego.",
                    "en" => "Developing hygiene standards for the production of animal-based food."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30176,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie poprawy warunków higienicznych w zakładach mięsnych.",
                    "en" => "Consulting on improving hygienic conditions in meat processing plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $lekarz_weterynarii_preventywna_higiena_paszy = [

            [
                "id" => 30177,
                "name" => json_encode([
                    "pl" => "Opracowywanie programów prewencji chorób związanych z higieną pasz.",
                    "en" => "Developing disease prevention programs related to feed hygiene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30178,
                "name" => json_encode([
                    "pl" => "Monitorowanie i kontrolowanie jakości pasz oraz ich wpływu na zdrowie zwierząt.",
                    "en" => "Monitoring and controlling feed quality and its impact on animal health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30179,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie higieny pasz i zarządzania prewencją chorób zwierząt.",
                    "en" => "Consulting on feed hygiene and disease prevention management in animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $lekarz_weterynarii_radiologia = [

            [
                "id" => 30180,
                "name" => json_encode([
                    "pl" => "Wykonywanie i interpretowanie badań radiologicznych u zwierząt.",
                    "en" => "Performing and interpreting radiological examinations on animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30181,
                "name" => json_encode([
                    "pl" => "Diagnostyka chorób układów kostnego i oddechowego przy pomocy radiografii.",
                    "en" => "Diagnosis of diseases of the skeletal and respiratory systems using radiography."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30182,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi specjalistami w zakresie diagnostyki radiologicznej.",
                    "en" => "Collaborating with other specialists in radiological diagnostics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $lekarz_weterynarii_rozrod = [

            [
                "id" => 30183,
                "name" => json_encode([
                    "pl" => "Zarządzanie i kontrolowanie procesów rozrodczych u zwierząt.",
                    "en" => "Managing and controlling reproductive processes in animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30184,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zabiegów sztucznego unasienniania.",
                    "en" => "Performing artificial insemination procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30185,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie poprawy efektywności rozrodu i zarządzania hodowlą.",
                    "en" => "Consulting on improving reproductive efficiency and herd management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $lekarz_weterynarii_lab = [

            [
                "id" => 30186,
                "name" => json_encode([
                    "pl" => "Prowadzenie badań laboratoryjnych w celu diagnostyki chorób zwierząt.",
                    "en" => "Conducting laboratory tests for the diagnosis of animal diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30187,
                "name" => json_encode([
                    "pl" => "Przygotowywanie próbek do badań i analiza wyników laboratoryjnych.",
                    "en" => "Preparing samples for testing and analyzing laboratory results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30188,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi specjalistami w zakresie wyników diagnostycznych.",
                    "en" => "Collaborating with other specialists in diagnostic results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $lekarz_weterynarii_lab_patologia = [

            [
                "id" => 30189,
                "name" => json_encode([
                    "pl" => "Diagnostyka patologii zwierząt laboratoryjnych, w tym chorób zakaźnych.",
                    "en" => "Diagnosis of diseases in laboratory animals, including infectious diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30190,
                "name" => json_encode([
                    "pl" => "Wykonywanie sekcji zwłok zwierząt laboratoryjnych w celach diagnostycznych.",
                    "en" => "Performing necropsies of laboratory animals for diagnostic purposes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30191,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie patologii zwierząt laboratoryjnych oraz ich hodowli.",
                    "en" => "Consulting on laboratory animal pathology and breeding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $lekarz_weterynarii_specjalisci = [

            [
                "id" => 30192,
                "name" => json_encode([
                    "pl" => "Specjalistyczne doradztwo weterynaryjne w zakresie różnych dziedzin medycyny zwierzęcej.",
                    "en" => "Specialized veterinary consulting in various fields of veterinary medicine."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30193,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów leczenia i prewencji chorób zwierząt.",
                    "en" => "Developing treatment and disease prevention plans for animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30194,
                "name" => json_encode([
                    "pl" => "Konsultacje i współpraca z innymi lekarzami weterynarii oraz specjalistami.",
                    "en" => "Consultations and cooperation with other veterinarians and specialists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pozostali_technicy_weterynarii = [

            [
                "id" => 30195,
                "name" => json_encode([
                    "pl" => "Wykonywanie zabiegów weterynaryjnych pod nadzorem lekarza weterynarii.",
                    "en" => "Performing veterinary procedures under the supervision of a veterinarian."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30196,
                "name" => json_encode([
                    "pl" => "Przygotowywanie i utrzymywanie sprzętu weterynaryjnego.",
                    "en" => "Preparing and maintaining veterinary equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30197,
                "name" => json_encode([
                    "pl" => "Asystowanie w diagnostyce i leczeniu zwierząt.",
                    "en" => "Assisting in the diagnosis and treatment of animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $kierownik_gospodarstwa_upraw_polowych = [

            [
                "id" => 30198,
                "name" => json_encode([
                    "pl" => "Zarządzanie działalnością gospodarstwa rolniczego zajmującego się uprawami polowymi.",
                    "en" => "Managing the operations of a farm specializing in field crops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30199,
                "name" => json_encode([
                    "pl" => "Planowanie i organizowanie prac związanych z uprawami rolnymi.",
                    "en" => "Planning and organizing tasks related to crop cultivation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30200,
                "name" => json_encode([
                    "pl" => "Kontrola jakości plonów oraz organizacja zbiorów.",
                    "en" => "Monitoring crop quality and organizing harvests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $rolnik_lakarz = [

            [
                "id" => 30201,
                "name" => json_encode([
                    "pl" => "Uprawa roślin łąkowych i zarządzanie użytkami zielonymi.",
                    "en" => "Cultivating meadow plants and managing grasslands."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30202,
                "name" => json_encode([
                    "pl" => "Dbanie o jakość paszy oraz zarządzanie stadem zwierząt hodowlanych.",
                    "en" => "Ensuring the quality of fodder and managing the livestock."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30203,
                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia technicznego w zakresie upraw łąkowych.",
                    "en" => "Providing technical support in meadow cultivation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $rolnik_producent_nasion = [

            [
                "id" => 30204,
                "name" => json_encode([
                    "pl" => "Produkcja i sprzedaż kwalifikowanych nasion rolniczych.",
                    "en" => "Production and sale of certified agricultural seeds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30205,
                "name" => json_encode([
                    "pl" => "Zarządzanie jakością nasion oraz kontrolowanie ich zdolności kiełkowania.",
                    "en" => "Managing seed quality and controlling germination capacity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30206,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami certyfikującymi w zakresie jakości nasion.",
                    "en" => "Cooperating with certification institutions regarding seed quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $rolnik_upraw_polowych = [

            [
                "id" => 30207,
                "name" => json_encode([
                    "pl" => "Uprawa roślin polowych, takich jak zboża, rośliny strączkowe i kukurydza.",
                    "en" => "Cultivation of field crops such as cereals, legumes, and corn."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30208,
                "name" => json_encode([
                    "pl" => "Optymalizacja technik upraw, w tym stosowanie nawozów i ochrony roślin.",
                    "en" => "Optimizing cultivation techniques, including the use of fertilizers and plant protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30209,
                "name" => json_encode([
                    "pl" => "Zarządzanie plonami i planowanie zbiorów.",
                    "en" => "Managing crops and planning harvests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pozostali_rolnicy_upraw_polowych = [

            [
                "id" => 30210,
                "name" => json_encode([
                    "pl" => "Zarządzanie uprawami rolnymi i ich optymalizacja.",
                    "en" => "Managing and optimizing agricultural crops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30211,
                "name" => json_encode([
                    "pl" => "Zastosowanie nowoczesnych technologii w uprawach polowych.",
                    "en" => "Applying modern technologies in field crop cultivation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30212,
                "name" => json_encode([
                    "pl" => "Zarządzanie ryzykiem i planowanie produkcji rolniczej.",
                    "en" => "Managing risks and planning agricultural production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $kierownik_gospodarstwa_upraw_mieszanych = [

            [
                "id" => 30213,
                "name" => json_encode([
                    "pl" => "Zarządzanie działalnością gospodarstwa zajmującego się uprawami mieszanymi.",
                    "en" => "Managing the operations of a farm engaged in mixed crop cultivation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30214,
                "name" => json_encode([
                    "pl" => "Planowanie i organizowanie upraw różnych gatunków roślin w systemie mieszanym.",
                    "en" => "Planning and organizing the cultivation of different plant species in a mixed system."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30215,
                "name" => json_encode([
                    "pl" => "Zarządzanie rotacją upraw, dbanie o równowagę ekologiczną na gospodarstwie.",
                    "en" => "Managing crop rotation and maintaining ecological balance on the farm."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $producent_zywnosci_ekologicznej = [

            [
                "id" => 30216,
                "name" => json_encode([
                    "pl" => "Produkcja żywności ekologicznej zgodnie z wymaganiami certyfikacji ekologicznej.",
                    "en" => "Producing organic food in compliance with organic certification standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30217,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami upraw, zbiorów i przetwórstwa produktów ekologicznych.",
                    "en" => "Managing the processes of cultivation, harvesting, and processing of organic products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30218,
                "name" => json_encode([
                    "pl" => "Dbałość o zgodność z normami ekologicznymi i prowadzenie dokumentacji.",
                    "en" => "Ensuring compliance with organic standards and maintaining documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $rolnik_upraw_mieszanych = [

            [
                "id" => 30219,
                "name" => json_encode([
                    "pl" => "Uprawa roślin w systemie mieszanym, z zastosowaniem różnych gatunków roślin.",
                    "en" => "Cultivating plants in a mixed system, using various plant species."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30220,
                "name" => json_encode([
                    "pl" => "Optymalizacja warunków uprawy roślin w systemie mieszanym.",
                    "en" => "Optimizing growing conditions for plants in a mixed cultivation system."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30221,
                "name" => json_encode([
                    "pl" => "Zarządzanie nawożeniem i ochroną roślin w systemie mieszanym.",
                    "en" => "Managing fertilization and plant protection in a mixed cultivation system."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pozostali_rolnicy_upraw_mieszanych = [

            [
                "id" => 30222,
                "name" => json_encode([
                    "pl" => "Zarządzanie uprawami mieszanymi z uwzględnieniem zasad zrównoważonego rozwoju.",
                    "en" => "Managing mixed crops with a focus on sustainable development practices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30223,
                "name" => json_encode([
                    "pl" => "Wykorzystanie innowacyjnych technik w uprawach mieszanych, w tym zarządzanie wodą i nawożeniem.",
                    "en" => "Applying innovative techniques in mixed crop cultivation, including water and fertilizer management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30224,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań i monitorowanie efektywności upraw mieszanych.",
                    "en" => "Conducting research and monitoring the effectiveness of mixed crop cultivation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $dojarz = [

            [
                "id" => 30225,
                "name" => json_encode([
                    "pl" => "Dojenie zwierząt gospodarskich, w tym krów i kóz.",
                    "en" => "Milking livestock, including cows and goats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30226,
                "name" => json_encode([
                    "pl" => "Utrzymywanie i dbanie o higienę sprzętu dojenia oraz pomieszczeń.",
                    "en" => "Maintaining and ensuring the hygiene of milking equipment and facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30227,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem dojenia i dbanie o dobrostan zwierząt.",
                    "en" => "Managing the milking process and ensuring animal welfare."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $hodowca_bydla = [

            [
                "id" => 30228,
                "name" => json_encode([
                    "pl" => "Hodowla bydła mięsnego i mlecznego.",
                    "en" => "Breeding beef and dairy cattle."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30229,
                "name" => json_encode([
                    "pl" => "Zarządzanie żywieniem, zdrowiem i reprodukcją bydła.",
                    "en" => "Managing the nutrition, health, and reproduction of cattle."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30230,
                "name" => json_encode([
                    "pl" => "Optymalizacja warunków hodowlanych w celu poprawy wydajności zwierząt.",
                    "en" => "Optimizing breeding conditions to improve animal performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $hodowca_koni = [

            [
                "id" => 30231,
                "name" => json_encode([
                    "pl" => "Hodowla koni użytkowych i sportowych.",
                    "en" => "Breeding working and sport horses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30232,
                "name" => json_encode([
                    "pl" => "Zarządzanie zdrowiem, żywieniem i treningiem koni.",
                    "en" => "Managing the health, nutrition, and training of horses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30233,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ocen genetycznych i selekcji koni hodowlanych.",
                    "en" => "Conducting genetic assessments and selection of breeding horses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $hodowca_owiec = [

            [
                "id" => 30234,
                "name" => json_encode([
                    "pl" => "Hodowla owiec mięsnych i mlecznych.",
                    "en" => "Breeding meat and dairy sheep."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30235,
                "name" => json_encode([
                    "pl" => "Zarządzanie żywieniem, zdrowiem i reprodukcją owiec.",
                    "en" => "Managing the nutrition, health, and reproduction of sheep."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30236,
                "name" => json_encode([
                    "pl" => "Optymalizacja warunków hodowlanych w celu poprawy jakości produktów zwierzęcych.",
                    "en" => "Optimizing breeding conditions to improve the quality of animal products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $hodowca_trzody_chlewnej = [

            [
                "id" => 30237,
                "name" => json_encode([
                    "pl" => "Hodowla trzody chlewnej w celu produkcji mięsa.",
                    "en" => "Breeding pigs for meat production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30238,
                "name" => json_encode([
                    "pl" => "Zarządzanie zdrowiem, żywieniem i reprodukcją trzody chlewnej.",
                    "en" => "Managing the health, nutrition, and reproduction of pigs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30239,
                "name" => json_encode([
                    "pl" => "Optymalizacja hodowli trzody chlewnej w celu uzyskania lepszej jakości mięsa.",
                    "en" => "Optimizing pig breeding to achieve better meat quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $hodowca_zwierzat_domowych = [

            [
                "id" => 30240,
                "name" => json_encode([
                    "pl" => "Hodowla zwierząt domowych, takich jak psy, koty i gryzonie.",
                    "en" => "Breeding domestic animals such as dogs, cats, and rodents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30241,
                "name" => json_encode([
                    "pl" => "Zarządzanie zdrowiem, żywieniem i dobrostanem zwierząt domowych.",
                    "en" => "Managing the health, nutrition, and welfare of domestic animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30242,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ocen genetycznych i selekcji zwierząt hodowlanych.",
                    "en" => "Conducting genetic assessments and selection of breeding animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $hodowca_zwierzat_futerkowych = [

            [
                "id" => 30243,
                "name" => json_encode([
                    "pl" => "Hodowla zwierząt futerkowych, takich jak norki, lisy i kuny.",
                    "en" => "Breeding fur-bearing animals, such as minks, foxes, and martens."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30244,
                "name" => json_encode([
                    "pl" => "Zarządzanie zdrowiem i żywieniem zwierząt futerkowych.",
                    "en" => "Managing the health and nutrition of fur-bearing animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30245,
                "name" => json_encode([
                    "pl" => "Optymalizacja warunków hodowlanych zwierząt futerkowych w celu poprawy jakości skóry.",
                    "en" => "Optimizing breeding conditions of fur-bearing animals to improve the quality of fur."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $juhas = [

            [
                "id" => 30246,
                "name" => json_encode([
                    "pl" => "Prowadzenie wypasu owiec i innych zwierząt na pastwiskach.",
                    "en" => "Leading the grazing of sheep and other livestock on pastures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30247,
                "name" => json_encode([
                    "pl" => "Zarządzanie stadem owiec, w tym ich zdrowiem i rozmnażaniem.",
                    "en" => "Managing the flock of sheep, including their health and reproduction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30248,
                "name" => json_encode([
                    "pl" => "Dbajenie o dobrostan zwierząt i organizowanie ich transportu.",
                    "en" => "Ensuring the welfare of the animals and organizing their transportation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $kierownik_gospodarstwa_produkcji_zwierzecej = [

            [
                "id" => 30249,
                "name" => json_encode([
                    "pl" => "Zarządzanie działalnością gospodarstwa zajmującego się produkcją zwierzęcą.",
                    "en" => "Managing the operations of a farm focused on animal production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30250,
                "name" => json_encode([
                    "pl" => "Organizowanie i nadzorowanie procesów związanych z hodowlą zwierząt.",
                    "en" => "Organizing and supervising animal breeding processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30251,
                "name" => json_encode([
                    "pl" => "Kontrolowanie stanu zdrowia zwierząt i dbanie o ich dobrostan.",
                    "en" => "Monitoring animal health and ensuring their welfare."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $masztalerz = [

            [
                "id" => 30252,
                "name" => json_encode([
                    "pl" => "Zarządzanie stadem koni, w tym ich żywieniem, zdrowiem i treningiem.",
                    "en" => "Managing a herd of horses, including their nutrition, health, and training."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30253,
                "name" => json_encode([
                    "pl" => "Dbajenie o higienę stajni i zapewnienie odpowiednich warunków do życia koni.",
                    "en" => "Maintaining stable hygiene and ensuring proper living conditions for horses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30254,
                "name" => json_encode([
                    "pl" => "Współpraca z lekarzem weterynarii w zakresie profilaktyki i leczenia koni.",
                    "en" => "Collaborating with a veterinarian for the prevention and treatment of horses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $hodowca_inwentarza_mieszanego = [

            [
                "id" => 30255,
                "name" => json_encode([
                    "pl" => "Hodowla różnych gatunków zwierząt gospodarskich, takich jak bydło, owce i trzoda chlewna.",
                    "en" => "Breeding various types of livestock, such as cattle, sheep, and pigs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30256,
                "name" => json_encode([
                    "pl" => "Zarządzanie zdrowiem, żywieniem i reprodukcją zwierząt w hodowli inwentarza mieszanego.",
                    "en" => "Managing the health, nutrition, and reproduction of animals in mixed livestock farming."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30257,
                "name" => json_encode([
                    "pl" => "Optymalizacja warunków hodowlanych dla różnych gatunków zwierząt.",
                    "en" => "Optimizing breeding conditions for different species of animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pozostali_hodowcy_zwierzat_gospodarskich_i_domowych = [

            [
                "id" => 30258,
                "name" => json_encode([
                    "pl" => "Hodowla zwierząt gospodarskich i domowych, takich jak psy, koty, bydło, owce i kury.",
                    "en" => "Breeding livestock and domestic animals such as dogs, cats, cattle, sheep, and chickens."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30259,
                "name" => json_encode([
                    "pl" => "Zarządzanie zdrowiem, żywieniem i dobrostanem zwierząt gospodarskich i domowych.",
                    "en" => "Managing the health, nutrition, and welfare of livestock and domestic animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30260,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie selekcji i hodowli zwierząt w celu poprawy jakości produktów zwierzęcych.",
                    "en" => "Performing selection and breeding of animals to improve the quality of animal products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $hodowca_drobiu = [

            [
                "id" => 30261,
                "name" => json_encode([
                    "pl" => "Hodowla drobiu w celu produkcji jaj, mięsa lub piór.",
                    "en" => "Breeding poultry for egg, meat, or feather production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30262,
                "name" => json_encode([
                    "pl" => "Zarządzanie zdrowiem, żywieniem i dobrostanem drobiu.",
                    "en" => "Managing the health, nutrition, and welfare of poultry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30263,
                "name" => json_encode([
                    "pl" => "Zarządzanie warunkami hodowlanymi i optymalizacja efektywności produkcji.",
                    "en" => "Managing breeding conditions and optimizing production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $kierownik_gospodarstwa_hodowli_drobiu = [

            [
                "id" => 30264,
                "name" => json_encode([
                    "pl" => "Zarządzanie gospodarstwem zajmującym się hodowlą drobiu.",
                    "en" => "Managing a farm specializing in poultry breeding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30265,
                "name" => json_encode([
                    "pl" => "Planowanie, organizowanie i nadzorowanie procesów związanych z hodowlą drobiu.",
                    "en" => "Planning, organizing, and supervising poultry breeding processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30266,
                "name" => json_encode([
                    "pl" => "Zarządzanie zdrowiem drobiu oraz zapewnianie wysokiej jakości jaj i mięsa.",
                    "en" => "Managing poultry health and ensuring high-quality eggs and meat."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pracownik_wylegarni_drobiu = [

            [
                "id" => 30267,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem wylęgu jaj, w tym monitorowanie temperatury i wilgotności.",
                    "en" => "Managing the egg hatching process, including monitoring temperature and humidity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30268,
                "name" => json_encode([
                    "pl" => "Opieka nad wylęgniętymi pisklętami oraz zapewnienie im odpowiednich warunków.",
                    "en" => "Caring for newly hatched chicks and providing them with suitable conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30269,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli jakości jaj wylęgowych i ocena ich wydajności.",
                    "en" => "Conducting quality control of hatching eggs and assessing their performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pozostali_hodowcy_drobiu = [

            [
                "id" => 30270,
                "name" => json_encode([
                    "pl" => "Hodowla drobiu w celu uzyskania jaj i mięsa.",
                    "en" => "Breeding poultry for egg and meat production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30271,
                "name" => json_encode([
                    "pl" => "Zarządzanie warunkami hodowlanymi, w tym przestrzeganie zasad bioasekuracji.",
                    "en" => "Managing breeding conditions, including compliance with biosecurity regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30272,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie selekcji drobiu, dbanie o jakość jaj i mięsa.",
                    "en" => "Conducting poultry selection, ensuring the quality of eggs and meat."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $hodowca_jedwabnikow = [

            [
                "id" => 30273,
                "name" => json_encode([
                    "pl" => "Hodowla jedwabników w celu produkcji jedwabiu.",
                    "en" => "Breeding silkworms for silk production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30274,
                "name" => json_encode([
                    "pl" => "Zarządzanie żywieniem i zdrowiem jedwabników.",
                    "en" => "Managing the nutrition and health of silkworms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30275,
                "name" => json_encode([
                    "pl" => "Optymalizacja warunków hodowlanych w celu uzyskania wysokiej jakości jedwabiu.",
                    "en" => "Optimizing breeding conditions to produce high-quality silk."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pszczelarz = [

            [
                "id" => 30276,
                "name" => json_encode([
                    "pl" => "Prowadzenie pasieki w celu produkcji miodu, wosku i innych produktów pszczelich.",
                    "en" => "Managing a beehive for the production of honey, beeswax, and other bee products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30277,
                "name" => json_encode([
                    "pl" => "Zarządzanie zdrowiem pszczół i ich produktami.",
                    "en" => "Managing bee health and their products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30278,
                "name" => json_encode([
                    "pl" => "Monitorowanie i kontrolowanie wydajności pasieki.",
                    "en" => "Monitoring and controlling hive performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $hodowca_ptakow = [

            [
                "id" => 30279,
                "name" => json_encode([
                    "pl" => "Hodowla ptaków ozdobnych, egzotycznych i użytkowych.",
                    "en" => "Breeding ornamental, exotic, and utility birds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30280,
                "name" => json_encode([
                    "pl" => "Zarządzanie zdrowiem, żywieniem i dobrostanem ptaków.",
                    "en" => "Managing the health, nutrition, and welfare of birds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30281,
                "name" => json_encode([
                    "pl" => "Selekcja i hodowla ptaków w celu uzyskania pożądanych cech.",
                    "en" => "Selecting and breeding birds to obtain desired traits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $hodowca_zwierzat_laboratoryjnych = [

            [
                "id" => 30282,
                "name" => json_encode([
                    "pl" => "Hodowla zwierząt laboratoryjnych w celu badań naukowych.",
                    "en" => "Breeding laboratory animals for scientific research."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30283,
                "name" => json_encode([
                    "pl" => "Zarządzanie zdrowiem, żywieniem i dobrostanem zwierząt laboratoryjnych.",
                    "en" => "Managing the health, nutrition, and welfare of laboratory animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30284,
                "name" => json_encode([
                    "pl" => "Współpraca z naukowcami w zakresie wykorzystania zwierząt laboratoryjnych w badaniach.",
                    "en" => "Collaborating with scientists on the use of laboratory animals in research."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $baca = [

            [
                "id" => 30285,
                "name" => json_encode([
                    "pl" => "Prowadzenie wypasu owiec na halach górskich, zapewnienie ich zdrowia i dobrostanu.",
                    "en" => "Leading the grazing of sheep in mountain pastures, ensuring their health and welfare."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30286,
                "name" => json_encode([
                    "pl" => "Produkcja mleka owczego oraz innych produktów mlecznych.",
                    "en" => "Producing sheep's milk and other dairy products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30287,
                "name" => json_encode([
                    "pl" => "Zarządzanie stadem owiec, w tym selekcja, rozmnażanie i zdrowie zwierząt.",
                    "en" => "Managing the sheep flock, including selection, breeding, and animal health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $kierownik_gospodarstwa_produkcji_roslinnej_i_zwierzecej = [

            [
                "id" => 30288,
                "name" => json_encode([
                    "pl" => "Zarządzanie działalnością gospodarstwa zajmującego się zarówno produkcją roślinną, jak i zwierzęcą.",
                    "en" => "Managing the operations of a farm involved in both crop and livestock production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30289,
                "name" => json_encode([
                    "pl" => "Planowanie i nadzorowanie procesów związanych z uprawami rolnymi oraz hodowlą zwierząt.",
                    "en" => "Planning and overseeing agricultural cultivation processes and animal breeding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30290,
                "name" => json_encode([
                    "pl" => "Zarządzanie zdrowiem zwierząt i uprawami w celu zapewnienia optymalnej produkcji.",
                    "en" => "Managing animal health and crops to ensure optimal production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $rolnik = [

            [
                "id" => 30291,
                "name" => json_encode([
                    "pl" => "Prowadzenie działalności rolniczej związanej z uprawami roślin oraz hodowlą zwierząt.",
                    "en" => "Engaging in agricultural activities related to crop cultivation and animal breeding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30292,
                "name" => json_encode([
                    "pl" => "Zarządzanie uprawami rolnymi, nawożeniem, ochroną roślin oraz produkcją zwierzęcą.",
                    "en" => "Managing agricultural crops, fertilization, plant protection, and animal production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30293,
                "name" => json_encode([
                    "pl" => "Dbałość o dobrostan zwierząt i jakość produktów rolnych.",
                    "en" => "Ensuring the welfare of animals and the quality of agricultural products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pozostali_rolnicy_produkcji_roslinnej_i_zwierzecej = [

            [
                "id" => 30294,
                "name" => json_encode([
                    "pl" => "Zarządzanie uprawami roślin oraz hodowlą zwierząt na małą skalę, obejmującą produkcję żywności.",
                    "en" => "Managing small-scale crop cultivation and animal breeding, including food production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30295,
                "name" => json_encode([
                    "pl" => "Produkcja roślinna i zwierzęca na własne potrzeby lub sprzedaż lokalną.",
                    "en" => "Crop and livestock production for personal needs or local sale."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30296,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi rolnikami oraz organizacjami rolniczymi w celu poprawy wydajności produkcji.",
                    "en" => "Collaborating with other farmers and agricultural organizations to improve production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $rolnicy_produkcji_roslinnej_pracujacy_na_wlasne_potrzeby = [

            [
                "id" => 30297,
                "name" => json_encode([
                    "pl" => "Prowadzenie upraw roślinnych na własne potrzeby, w tym warzyw, owoców, ziół.",
                    "en" => "Cultivating crops for personal use, including vegetables, fruits, and herbs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30298,
                "name" => json_encode([
                    "pl" => "Zarządzanie uprawami rolnymi na własne potrzeby i produkcja żywności.",
                    "en" => "Managing agricultural crops for personal use and food production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30299,
                "name" => json_encode([
                    "pl" => "Przygotowanie i wykorzystanie plonów na potrzeby gospodarstwa domowego.",
                    "en" => "Preparing and utilizing crops for household purposes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $hodowcy_zwierzat_pracujacy_na_wlasne_potrzeby = [

            [
                "id" => 30300,
                "name" => json_encode([
                    "pl" => "Hodowla zwierząt na własne potrzeby, w tym dla konsumpcji lub produkcji.",
                    "en" => "Breeding animals for personal use, including for consumption or production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30301,
                "name" => json_encode([
                    "pl" => "Zarządzanie zdrowiem zwierząt, żywieniem i produkcją na własne potrzeby.",
                    "en" => "Managing animal health, nutrition, and production for personal use."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30302,
                "name" => json_encode([
                    "pl" => "Produkcja mięsa, mleka i innych produktów zwierzęcych na własne potrzeby.",
                    "en" => "Producing meat, milk, and other animal products for personal use."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $rolnicy_produkcji_roslinnej_i_zwierzecej_pracujacy_na_wlasne_potrzeby = [

            [
                "id" => 30303,
                "name" => json_encode([
                    "pl" => "Prowadzenie upraw roślinnych i hodowli zwierząt na własne potrzeby, w tym zarządzanie nawożeniem, ochroną roślin oraz zdrowiem zwierząt.",
                    "en" => "Managing crop cultivation and animal breeding for personal use, including managing fertilization, plant protection, and animal health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30304,
                "name" => json_encode([
                    "pl" => "Zarządzanie produkcją roślin i zwierząt na potrzeby rodziny lub lokalnego rynku.",
                    "en" => "Managing the production of crops and animals for family or local market needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30305,
                "name" => json_encode([
                    "pl" => "Optymalizacja pracy w zakresie upraw roślinnych i hodowli zwierząt w celu uzyskania jak najlepszych wyników.",
                    "en" => "Optimizing work in crop cultivation and animal breeding to achieve the best possible results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $robotnicy_wykonujacy_proste_prace_polowe = [

            [
                "id" => 30306,
                "name" => json_encode([
                    "pl" => "Wykonywanie prostych prac polowych, takich jak sadzenie, podlewanie i zbiór roślin.",
                    "en" => "Performing simple fieldwork tasks such as planting, watering, and harvesting crops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30307,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowywaniu gleby i nasadzeniach roślin.",
                    "en" => "Assisting with soil preparation and plantings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30308,
                "name" => json_encode([
                    "pl" => "Wykonywanie podstawowych prac związanych z pielęgnacją roślin i gleby.",
                    "en" => "Performing basic tasks related to plant and soil care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $robotnicy_wykonujacy_prace_proste_w_hodowli_zwierzat = [

            [
                "id" => 30309,
                "name" => json_encode([
                    "pl" => "Wykonywanie prostych prac w hodowli zwierząt, takich jak karmienie, pojenie i utrzymywanie czystości w pomieszczeniach.",
                    "en" => "Performing simple tasks in animal breeding, such as feeding, watering, and maintaining cleanliness in facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30310,
                "name" => json_encode([
                    "pl" => "Współpraca w zakresie codziennej opieki nad zwierzętami hodowlanymi.",
                    "en" => "Cooperating in the daily care of livestock."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30311,
                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia przy zarządzaniu zdrowiem zwierząt w hodowli.",
                    "en" => "Providing support in managing animal health in breeding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $robotnicy_wykonujacy_prace_przy_uprawie_roslin_i_hodowli_zwierzat = [

            [
                "id" => 30312,
                "name" => json_encode([
                    "pl" => "Wykonywanie prostych prac związanych z uprawą roślin i hodowlą zwierząt, takich jak zbiór plonów i karmienie zwierząt.",
                    "en" => "Performing simple tasks related to crop cultivation and animal breeding, such as harvesting crops and feeding animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30313,
                "name" => json_encode([
                    "pl" => "Pomoc w codziennej opiece nad roślinami i zwierzętami.",
                    "en" => "Assisting in daily care of plants and animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30314,
                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia przy utrzymaniu warunków do hodowli roślin i zwierząt.",
                    "en" => "Providing support in maintaining conditions for plant and animal breeding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $technik_hodowca_koni = [

            [
                "id" => 30315,
                "name" => json_encode([
                    "pl" => "Zarządzanie stadem koni, w tym ich żywieniem, zdrowiem i treningiem.",
                    "en" => "Managing a herd of horses, including their nutrition, health, and training."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30316,
                "name" => json_encode([
                    "pl" => "Zarządzanie programem hodowlanym w celu poprawy cech użytkowych koni.",
                    "en" => "Managing a breeding program to improve the performance traits of horses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30317,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ocen zdrowia i kondycji koni.",
                    "en" => "Conducting health and condition assessments of horses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $technik_hodowca_zwierzat = [

            [
                "id" => 30318,
                "name" => json_encode([
                    "pl" => "Zarządzanie hodowlą zwierząt, w tym żywieniem, zdrowiem i rozmnażaniem.",
                    "en" => "Managing animal breeding, including nutrition, health, and reproduction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30319,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontrolnych badań zdrowotnych zwierząt w hodowli.",
                    "en" => "Conducting health checks for animals in breeding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30320,
                "name" => json_encode([
                    "pl" => "Optymalizacja warunków hodowlanych w celu zwiększenia wydajności produkcji zwierzęcej.",
                    "en" => "Optimizing breeding conditions to improve livestock production efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $technik_rolnik = [

            [
                "id" => 30321,
                "name" => json_encode([
                    "pl" => "Zarządzanie uprawami roślinnymi i hodowlą zwierząt, w tym prowadzenie podstawowych prac rolniczych.",
                    "en" => "Managing crop cultivation and animal breeding, including performing basic agricultural tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30322,
                "name" => json_encode([
                    "pl" => "Współpraca w zakresie zarządzania uprawami roślin i zwierząt na farmie.",
                    "en" => "Cooperating in the management of crop cultivation and animal breeding on the farm."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30323,
                "name" => json_encode([
                    "pl" => "Monitorowanie i ocenianie efektywności upraw oraz zdrowia zwierząt.",
                    "en" => "Monitoring and assessing the effectiveness of crops and animal health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $technik_pszczelarz = [

            [
                "id" => 30324,
                "name" => json_encode([
                    "pl" => "Zarządzanie pasieką, w tym hodowla pszczół, produkcja miodu, wosku i innych produktów pszczelich.",
                    "en" => "Managing a beehive, including bee breeding, honey production, beeswax, and other bee products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30325,
                "name" => json_encode([
                    "pl" => "Zarządzanie zdrowiem pszczół oraz monitorowanie jakości produktów pszczelich.",
                    "en" => "Managing bee health and monitoring the quality of bee products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30326,
                "name" => json_encode([
                    "pl" => "Optymalizacja warunków w pasiece, aby zapewnić wysoką wydajność pszczół.",
                    "en" => "Optimizing beehive conditions to ensure high bee productivity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pozostali_technicy_rolnictwa_i_pokrewni = [

            [
                "id" => 30327,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac technicznych w rolnictwie i branżach pokrewnych, w tym obsługa maszyn rolniczych i doradztwo.",
                    "en" => "Performing technical tasks in agriculture and related fields, including operating agricultural machinery and providing consulting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30328,
                "name" => json_encode([
                    "pl" => "Wsparcie w zakresie upraw roślinnych, hodowli zwierząt i zarządzania gospodarstwem.",
                    "en" => "Providing support in crop cultivation, animal breeding, and farm management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30329,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szkoleń i doradztwa w zakresie nowoczesnych technologii rolniczych.",
                    "en" => "Conducting training and providing consulting on modern agricultural technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $technik_agrobiznesu = [

            [
                "id" => 30330,
                "name" => json_encode([
                    "pl" => "Zarządzanie działalnością agrobiznesową, w tym organizowanie produkcji rolniczej i dystrybucji produktów rolnych.",
                    "en" => "Managing agricultural business activities, including organizing agricultural production and distribution of agricultural products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30331,
                "name" => json_encode([
                    "pl" => "Współpraca w zakresie marketingu, sprzedaży i planowania strategii rozwoju agrobiznesu.",
                    "en" => "Collaborating on marketing, sales, and planning business development strategies in the agribusiness sector."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30332,
                "name" => json_encode([
                    "pl" => "Analiza rynku produktów rolnych i doradztwo w zakresie wyboru odpowiednich technologii.",
                    "en" => "Market analysis of agricultural products and providing consulting on selecting appropriate technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $zbieracz_owocow_ziol_i_innych_roslin = [

            [
                "id" => 30333,
                "name" => json_encode([
                    "pl" => "Zbieranie owoców, ziół i innych roślin w celach handlowych lub konsumpcyjnych.",
                    "en" => "Harvesting fruits, herbs, and other plants for commercial or personal consumption."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30334,
                "name" => json_encode([
                    "pl" => "Sortowanie i przygotowywanie roślin do sprzedaży lub dalszego przetwarzania.",
                    "en" => "Sorting and preparing plants for sale or further processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30335,
                "name" => json_encode([
                    "pl" => "Zarządzanie zbiorami roślin, w tym kontrolowanie jakości i ilości zbiorów.",
                    "en" => "Managing plant harvesting, including controlling the quality and quantity of the harvest."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $podkuwacz_koni = [

            [
                "id" => 30336,
                "name" => json_encode([
                    "pl" => "Podkuwanie koni, w tym przygotowanie i montowanie podków.",
                    "en" => "Horseshoeing, including preparing and fitting horseshoes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30337,
                "name" => json_encode([
                    "pl" => "Ocena stanu kopyt koni i dobór odpowiednich podków w zależności od potrzeb.",
                    "en" => "Assessing the condition of horses' hooves and selecting appropriate horseshoes based on needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30338,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem podkuwania koni oraz utrzymywanie narzędzi w odpowiednich warunkach.",
                    "en" => "Managing the horseshoeing process and maintaining tools in proper condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $kierownik_gospodarstwa_sadowniczego = [

            [
                "id" => 30339,
                "name" => json_encode([
                    "pl" => "Zarządzanie gospodarstwem sadowniczym, w tym planowanie i nadzorowanie upraw drzew owocowych.",
                    "en" => "Managing an orchard farm, including planning and supervising the cultivation of fruit trees."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30340,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów związanych z uprawami owoców, w tym nawożenie, podlewanie i ochrona roślin.",
                    "en" => "Optimizing processes related to fruit cultivation, including fertilization, irrigation, and plant protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30341,
                "name" => json_encode([
                    "pl" => "Zarządzanie zdrowiem drzew owocowych oraz monitorowanie wydajności plonów.",
                    "en" => "Managing the health of fruit trees and monitoring crop yield performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $rolnik_chmielarz = [

            [
                "id" => 30342,
                "name" => json_encode([
                    "pl" => "Uprawa chmielu na potrzeby przemysłu piwowarskiego.",
                    "en" => "Growing hops for the brewing industry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30343,
                "name" => json_encode([
                    "pl" => "Zarządzanie uprawami chmielu, w tym pielęgnacja roślin, nawożenie i ochrona przed szkodnikami.",
                    "en" => "Managing hop cultivation, including plant care, fertilization, and pest control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30344,
                "name" => json_encode([
                    "pl" => "Zbiór chmielu oraz monitorowanie jakości plonów.",
                    "en" => "Harvesting hops and monitoring crop quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $sadownik = [

            [
                "id" => 30345,
                "name" => json_encode([
                    "pl" => "Uprawa drzew owocowych, zarządzanie zdrowiem roślin oraz pielęgnacja sadów.",
                    "en" => "Growing fruit trees, managing plant health, and maintaining orchards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30346,
                "name" => json_encode([
                    "pl" => "Nawożenie i nawadnianie upraw, monitorowanie plonów i ich jakości.",
                    "en" => "Fertilizing and irrigating crops, monitoring crop yields and their quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30347,
                "name" => json_encode([
                    "pl" => "Zarządzanie ochroną roślin, w tym zwalczanie chorób i szkodników.",
                    "en" => "Managing plant protection, including disease and pest control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pozostali_sadownicy = [

            [
                "id" => 30348,
                "name" => json_encode([
                    "pl" => "Uprawa różnych gatunków drzew owocowych w celu produkcji owoców.",
                    "en" => "Cultivating various species of fruit trees for fruit production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30349,
                "name" => json_encode([
                    "pl" => "Zarządzanie plonami owoców oraz optymalizacja procesów zbiorów.",
                    "en" => "Managing fruit crops and optimizing harvesting processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30350,
                "name" => json_encode([
                    "pl" => "Pielęgnacja i ochrona sadów przed chorobami, szkodnikami i niekorzystnymi warunkami atmosferycznymi.",
                    "en" => "Caring for and protecting orchards from diseases, pests, and adverse weather conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $chirurg_pielegniarz_drzew = [

            [
                "id" => 30351,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zabiegów pielęgnacyjnych na drzewach, takich jak cięcie, leczenie ran i chorób.",
                    "en" => "Performing maintenance procedures on trees, such as pruning, treating wounds, and diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30352,
                "name" => json_encode([
                    "pl" => "Wykonywanie zabiegów chirurgicznych na drzewach w celu poprawy ich zdrowia.",
                    "en" => "Performing surgical procedures on trees to improve their health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30353,
                "name" => json_encode([
                    "pl" => "Ocena stanu zdrowia drzew i identyfikacja problemów związanych z chorobami i szkodnikami.",
                    "en" => "Assessing the health of trees and identifying issues related to diseases and pests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $kierownik_gospodarstwa_ogrodniczego = [

            [
                "id" => 30354,
                "name" => json_encode([
                    "pl" => "Zarządzanie gospodarstwem ogrodniczym, w tym planowanie upraw roślinnych i nadzorowanie prac ogrodniczych.",
                    "en" => "Managing a horticultural farm, including planning plant cultivation and overseeing gardening tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30355,
                "name" => json_encode([
                    "pl" => "Koordynowanie produkcji roślin ozdobnych, warzyw i owoców.",
                    "en" => "Coordinating the production of ornamental plants, vegetables, and fruits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30356,
                "name" => json_encode([
                    "pl" => "Zarządzanie personelem oraz organizowanie procesów związanych z uprawami.",
                    "en" => "Managing personnel and organizing processes related to crop cultivation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ogrodnik_producent_nasion = [

            [
                "id" => 30357,
                "name" => json_encode([
                    "pl" => "Produkcja nasion roślin ogrodowych i ozdobnych.",
                    "en" => "Producing seeds of garden and ornamental plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30358,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem produkcji nasion, w tym selekcja najlepszych okazów roślin.",
                    "en" => "Managing the seed production process, including selecting the best plant specimens."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30359,
                "name" => json_encode([
                    "pl" => "Kontrola jakości nasion oraz monitorowanie warunków przechowywania.",
                    "en" => "Quality control of seeds and monitoring storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ogrodnik_szkółkarz = [

            [
                "id" => 30360,
                "name" => json_encode([
                    "pl" => "Uprawa młodych roślin w szkółkach ogrodniczych, w tym przygotowywanie roślin do sprzedaży.",
                    "en" => "Growing young plants in nurseries, including preparing plants for sale."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30361,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem rozmnażania roślin i pielęgnacja młodych okazów.",
                    "en" => "Managing the plant propagation process and caring for young specimens."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30362,
                "name" => json_encode([
                    "pl" => "Kontrola jakości roślin oraz zapewnienie odpowiednich warunków dla ich wzrostu.",
                    "en" => "Controlling plant quality and ensuring proper conditions for their growth."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ogrodnik_terenow_zieleni = [

            [
                "id" => 30363,
                "name" => json_encode([
                    "pl" => "Zarządzanie terenami zieleni miejskiej i wiejskiej, w tym projektowanie i pielęgnacja ogrodów i parków.",
                    "en" => "Managing urban and rural green spaces, including designing and maintaining gardens and parks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30364,
                "name" => json_encode([
                    "pl" => "Zakładanie nowych nasadzeń roślinnych oraz dbałość o ich prawidłowy rozwój.",
                    "en" => "Establishing new plantings and ensuring their proper development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30365,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie prac konserwacyjnych w parkach, ogrodach i terenach zielonych.",
                    "en" => "Performing maintenance work in parks, gardens, and green spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ogrodnik_uprawa_grzybow_jadalnych = [

            [
                "id" => 30366,
                "name" => json_encode([
                    "pl" => "Uprawa grzybów jadalnych, w tym zbieranie, selekcja i pakowanie.",
                    "en" => "Cultivating edible mushrooms, including harvesting, sorting, and packaging."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30367,
                "name" => json_encode([
                    "pl" => "Zarządzanie warunkami wzrostu grzybów, w tym kontrolowanie temperatury i wilgotności.",
                    "en" => "Managing the growth conditions for mushrooms, including controlling temperature and humidity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30368,
                "name" => json_encode([
                    "pl" => "Współpraca w zakresie marketingu, sprzedaży oraz dystrybucji grzybów jadalnych.",
                    "en" => "Collaborating in marketing, sales, and distribution of edible mushrooms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ogrodnik_uprawa_roslin_ozdobnych = [

            [
                "id" => 30369,
                "name" => json_encode([
                    "pl" => "Uprawa roślin ozdobnych, w tym kwiatów, krzewów i drzew.",
                    "en" => "Growing ornamental plants, including flowers, shrubs, and trees."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30370,
                "name" => json_encode([
                    "pl" => "Projektowanie ogrodów i terenów zieleni z roślinami ozdobnymi.",
                    "en" => "Designing gardens and green spaces with ornamental plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30371,
                "name" => json_encode([
                    "pl" => "Pielęgnacja roślin ozdobnych, w tym podlewanie, nawożenie i ochrona przed chorobami.",
                    "en" => "Caring for ornamental plants, including watering, fertilization, and disease control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ogrodnik_uprawa_warzyw_polowych = [

            [
                "id" => 30372,
                "name" => json_encode([
                    "pl" => "Uprawa warzyw polowych, takich jak pomidory, marchew, ziemniaki.",
                    "en" => "Cultivating field vegetables such as tomatoes, carrots, and potatoes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30373,
                "name" => json_encode([
                    "pl" => "Nawożenie, podlewanie oraz ochrona roślin warzywnych przed chorobami i szkodnikami.",
                    "en" => "Fertilizing, watering, and protecting vegetable plants from diseases and pests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30374,
                "name" => json_encode([
                    "pl" => "Zbieranie plonów warzyw i ich przygotowanie do sprzedaży lub przechowywania.",
                    "en" => "Harvesting vegetable crops and preparing them for sale or storage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ogrodnik_uprawy_pod_oslonami = [

            [
                "id" => 30375,
                "name" => json_encode([
                    "pl" => "Uprawa roślin pod osłonami (szklarniami), w tym warzyw, owoców i roślin ozdobnych.",
                    "en" => "Cultivating plants under cover (greenhouses), including vegetables, fruits, and ornamental plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30376,
                "name" => json_encode([
                    "pl" => "Zarządzanie warunkami upraw w szklarni, w tym kontrolowanie temperatury i wilgotności.",
                    "en" => "Managing growing conditions in the greenhouse, including controlling temperature and humidity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30377,
                "name" => json_encode([
                    "pl" => "Zbiór plonów z upraw pod osłonami i przygotowanie do sprzedaży.",
                    "en" => "Harvesting crops from under cover and preparing them for sale."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $producent_i_zbieracz_ziol = [

            [
                "id" => 30378,
                "name" => json_encode([
                    "pl" => "Produkcja i zbiór ziół, takich jak mięta, oregano, bazylia.",
                    "en" => "Producing and harvesting herbs such as mint, oregano, basil."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30379,
                "name" => json_encode([
                    "pl" => "Przygotowywanie ziół do sprzedaży lub dalszego przetwarzania.",
                    "en" => "Preparing herbs for sale or further processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30380,
                "name" => json_encode([
                    "pl" => "Zarządzanie zbiorami ziół i kontrolowanie jakości plonów.",
                    "en" => "Managing herb harvests and controlling crop quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ogrodnik = [

            [
                "id" => 30381,
                "name" => json_encode([
                    "pl" => "Prowadzenie upraw roślinnych, takich jak kwiaty, warzywa, zioła, i rośliny ozdobne.",
                    "en" => "Cultivating plants such as flowers, vegetables, herbs, and ornamental plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30382,
                "name" => json_encode([
                    "pl" => "Zarządzanie pielęgnacją roślin, nawożeniem, podlewaniem i ochroną przed chorobami.",
                    "en" => "Managing plant care, fertilization, watering, and disease protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30383,
                "name" => json_encode([
                    "pl" => "Optymalizacja warunków upraw roślin, monitorowanie jakości plonów.",
                    "en" => "Optimizing plant growing conditions, monitoring crop quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pielenigniarz_trawnikow_murawy_greenkeeper = [

            [
                "id" => 30384,
                "name" => json_encode([
                    "pl" => "Utrzymywanie trawnika i murawy w dobrym stanie, w tym koszenie, nawożenie i nawadnianie.",
                    "en" => "Maintaining lawns and turf in good condition, including mowing, fertilizing, and watering."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30385,
                "name" => json_encode([
                    "pl" => "Ochrona trawnika przed chorobami i szkodnikami.",
                    "en" => "Protecting lawns from diseases and pests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30386,
                "name" => json_encode([
                    "pl" => "Dbanie o estetyczny wygląd trawnika i murawy, w tym kontrolowanie jakości gleby.",
                    "en" => "Caring for the aesthetic appearance of lawns and turf, including monitoring soil quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pozostali_ogrodnicy = [

            [
                "id" => 30387,
                "name" => json_encode([
                    "pl" => "Wykonywanie różnorodnych prac ogrodniczych, takich jak sadzenie, pielęgnacja, zbiór roślin.",
                    "en" => "Performing various gardening tasks such as planting, caring for, and harvesting plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30388,
                "name" => json_encode([
                    "pl" => "Pielęgnacja roślin, dbanie o zdrowie roślin oraz poprawę ich wydajności.",
                    "en" => "Caring for plants, ensuring their health, and improving their productivity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30389,
                "name" => json_encode([
                    "pl" => "Prace w zakresie nawożenia, podlewania i ochrony przed chorobami.",
                    "en" => "Tasks related to fertilizing, watering, and protecting plants from diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pomocniczy_robotnik_konserwacji_terenow_zieleni = [

            [
                "id" => 30390,
                "name" => json_encode([
                    "pl" => "Wykonywanie podstawowych prac związanych z konserwacją terenów zieleni, takich jak koszenie trawy, przycinanie krzewów.",
                    "en" => "Performing basic tasks related to green space maintenance, such as mowing grass, trimming shrubs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30391,
                "name" => json_encode([
                    "pl" => "Pomoc w utrzymaniu czystości w parkach i ogrodach.",
                    "en" => "Assisting in maintaining cleanliness in parks and gardens."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30392,
                "name" => json_encode([
                    "pl" => "Wsparcie przy zakładaniu nowych nasadzeń roślinnych.",
                    "en" => "Assisting with planting new vegetation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pomocniczy_robotnik_szklarniowy = [

            [
                "id" => 30393,
                "name" => json_encode([
                    "pl" => "Pomoc w pracach szklarniowych, takich jak sadzenie roślin, podlewanie i zbiór plonów.",
                    "en" => "Assisting with greenhouse tasks such as planting plants, watering, and harvesting crops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30394,
                "name" => json_encode([
                    "pl" => "Utrzymywanie odpowiednich warunków w szklarni (temperatura, wilgotność).",
                    "en" => "Maintaining appropriate conditions in the greenhouse (temperature, humidity)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30395,
                "name" => json_encode([
                    "pl" => "Pomoc w kontrolowaniu zdrowia roślin w szklarni.",
                    "en" => "Assisting in monitoring plant health in the greenhouse."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pomocniczy_robotnik_w_gospodarstwie_sadowniczym = [

            [
                "id" => 30396,
                "name" => json_encode([
                    "pl" => "Pomoc przy pracach w sadzie, takich jak przycinanie drzew, zbiór owoców.",
                    "en" => "Assisting with tasks in the orchard, such as pruning trees and harvesting fruit."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30397,
                "name" => json_encode([
                    "pl" => "Wsparcie w zarządzaniu zdrowiem drzew owocowych i monitorowaniu plonów.",
                    "en" => "Supporting the management of fruit tree health and monitoring crop yields."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30398,
                "name" => json_encode([
                    "pl" => "Pomoc w utrzymaniu porządku i higieny w sadzie.",
                    "en" => "Assisting with maintaining order and hygiene in the orchard."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pozostali_robotnicy_wykonujacy_prace_proste_w_ogrodnictwie_i_sadownictwie = [

            [
                "id" => 30399,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac porządkowych i pomocniczych w ogrodnictwie i sadownictwie.",
                    "en" => "Performing cleaning and auxiliary tasks in gardening and orchard work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30400,
                "name" => json_encode([
                    "pl" => "Pomoc w podstawowych pracach przy uprawach roślinnych i hodowli zwierząt.",
                    "en" => "Assisting with basic tasks related to plant cultivation and animal breeding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30401,
                "name" => json_encode([
                    "pl" => "Wsparcie przy zbiorach plonów oraz w przygotowywaniu roślin do sprzedaży.",
                    "en" => "Supporting with harvesting crops and preparing plants for sale."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $technik_ogrodnik = [

            [
                "id" => 30402,
                "name" => json_encode([
                    "pl" => "Zarządzanie uprawami roślin ogrodowych, w tym kwiatów, warzyw, ziół i roślin ozdobnych.",
                    "en" => "Managing garden plant cultivation, including flowers, vegetables, herbs, and ornamental plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30403,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac technicznych, takich jak przycinanie roślin, nawadnianie, nawożenie.",
                    "en" => "Performing technical tasks such as pruning plants, irrigation, and fertilization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30404,
                "name" => json_encode([
                    "pl" => "Koordynowanie prac związanych z ochroną roślin przed chorobami i szkodnikami.",
                    "en" => "Coordinating tasks related to plant protection against diseases and pests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pracownik_ochrony_roslin = [

            [
                "id" => 30405,
                "name" => json_encode([
                    "pl" => "Zarządzanie ochroną roślin, w tym stosowanie pestycydów i innych środków ochrony roślin.",
                    "en" => "Managing plant protection, including the application of pesticides and other plant protection products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30406,
                "name" => json_encode([
                    "pl" => "Monitorowanie występowania chorób i szkodników w uprawach roślinnych.",
                    "en" => "Monitoring the occurrence of diseases and pests in plant crops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30407,
                "name" => json_encode([
                    "pl" => "Zastosowanie metod biologicznych i chemicznych w ochronie roślin.",
                    "en" => "Applying biological and chemical methods in plant protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pozostali_robotnicy_zwalczania_szkodnikow_i_chwastow = [

            [
                "id" => 30408,
                "name" => json_encode([
                    "pl" => "Zwalczanie szkodników i chwastów w uprawach rolnych i ogrodowych.",
                    "en" => "Controlling pests and weeds in agricultural and horticultural crops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30409,
                "name" => json_encode([
                    "pl" => "Zastosowanie odpowiednich metod ochrony przed szkodnikami i chwastami, w tym stosowanie herbicydów i insekticydów.",
                    "en" => "Applying appropriate methods of pest and weed control, including the use of herbicides and insecticides."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30410,
                "name" => json_encode([
                    "pl" => "Kontrolowanie skuteczności zabiegów ochrony roślin i zapobieganie ich szkodliwości.",
                    "en" => "Monitoring the effectiveness of plant protection treatments and preventing their harmful effects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pracownik_deratyzacji_dezynfekcji_i_dezynsekcji = [

            [
                "id" => 30411,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie deratyzacji, dezynfekcji i dezynsekcji w obiektach rolniczych, przemysłowych i mieszkalnych.",
                    "en" => "Conducting rodent control, disinfection, and pest control in agricultural, industrial, and residential buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30412,
                "name" => json_encode([
                    "pl" => "Przygotowanie i stosowanie odpowiednich środków chemicznych i biologicznych w celu eliminacji szkodników.",
                    "en" => "Preparing and applying appropriate chemical and biological agents to eliminate pests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30413,
                "name" => json_encode([
                    "pl" => "Monitorowanie i ocena skuteczności działań deratyzacyjnych, dezynfekcyjnych i dezynsekcyjnych.",
                    "en" => "Monitoring and evaluating the effectiveness of rodent control, disinfection, and pest control activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $kombajnista_kierowca_kombajnu = [

            [
                "id" => 30414,
                "name" => json_encode([
                    "pl" => "Obsługa kombajnu rolniczego do zbiorów plonów.",
                    "en" => "Operating a harvest combine to harvest crops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30415,
                "name" => json_encode([
                    "pl" => "Monitorowanie wydajności maszyny i utrzymanie jej w dobrym stanie technicznym.",
                    "en" => "Monitoring the machine’s performance and maintaining it in good technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30416,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji i drobnych napraw maszyny.",
                    "en" => "Performing maintenance and minor repairs on the machine."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $mechanik_operator_pojazdow_i_maszyn_rolniczych = [

            [
                "id" => 30417,
                "name" => json_encode([
                    "pl" => "Obsługa i konserwacja pojazdów oraz maszyn rolniczych, takich jak ciągniki, siewniki, prasy.",
                    "en" => "Operating and maintaining agricultural vehicles and machinery, such as tractors, seeders, and balers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30418,
                "name" => json_encode([
                    "pl" => "Wykonywanie napraw mechanicznych, elektrycznych i hydraulicznych maszyn rolniczych.",
                    "en" => "Performing mechanical, electrical, and hydraulic repairs on agricultural machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30419,
                "name" => json_encode([
                    "pl" => "Wykonywanie diagnostyki technicznej maszyn rolniczych.",
                    "en" => "Performing technical diagnostics of agricultural machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pozostali_operatorzy_wolnobieznych_maszyn_rolniczych_i_lesnych = [

            [
                "id" => 30420,
                "name" => json_encode([
                    "pl" => "Obsługa wolnobieżnych maszyn rolniczych i leśnych, takich jak pługi, brony, piły do drewna.",
                    "en" => "Operating slow-moving agricultural and forestry machines, such as plows, harrows, and wood saws."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30421,
                "name" => json_encode([
                    "pl" => "Zarządzanie efektywnością pracy maszyn oraz dbanie o ich prawidłową obsługę.",
                    "en" => "Managing machine performance and ensuring proper operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30422,
                "name" => json_encode([
                    "pl" => "Konserwacja, drobne naprawy i monitorowanie stanu technicznego maszyn.",
                    "en" => "Maintenance, minor repairs, and monitoring the technical condition of the machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $operator_maszyn_ogrodniczych = [

            [
                "id" => 30423,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn ogrodniczych, takich jak kosiarki, glebogryzarki, kultywatory.",
                    "en" => "Operating horticultural machines, such as mowers, tillers, and cultivators."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30424,
                "name" => json_encode([
                    "pl" => "Wykonywanie konserwacji i drobnych napraw maszyn ogrodniczych.",
                    "en" => "Performing maintenance and minor repairs on horticultural machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30425,
                "name" => json_encode([
                    "pl" => "Monitorowanie pracy maszyn oraz dostosowanie parametrów do wymagań upraw.",
                    "en" => "Monitoring machine operations and adjusting parameters to meet crop requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $drwal_pilarz_drzew = [

            [
                "id" => 30426,
                "name" => json_encode([
                    "pl" => "Ścinanie i wycinanie drzew w lasach i na terenach komercyjnych, zgodnie z normami bezpieczeństwa.",
                    "en" => "Felling and cutting trees in forests and commercial areas, in accordance with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30427,
                "name" => json_encode([
                    "pl" => "Pielęgnacja lasów poprzez przycinanie gałęzi oraz usuwanie uschniętych drzew.",
                    "en" => "Maintaining forests by pruning branches and removing dead trees."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30428,
                "name" => json_encode([
                    "pl" => "Kontrola stanu zdrowia drzew oraz zapobieganie chorobom i szkodnikom.",
                    "en" => "Monitoring tree health and preventing diseases and pests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $robotnik_lesny = [

            [
                "id" => 30429,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac leśnych, takich jak sadzenie drzew, zbieranie drewna, oczyszczanie terenu.",
                    "en" => "Performing forestry tasks such as tree planting, wood collection, and land clearing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30430,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac związanych z przygotowywaniem terenu pod nowe nasadzenia leśne.",
                    "en" => "Carrying out tasks related to preparing land for new forest plantings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30431,
                "name" => json_encode([
                    "pl" => "Wsparcie w procesie zalesiania i konserwacji lasów.",
                    "en" => "Supporting reforestation and forest maintenance processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $wozak_zrywkarz = [

            [
                "id" => 30432,
                "name" => json_encode([
                    "pl" => "Transportowanie drewna i innych surowców leśnych z miejsca pozyskania do punktu odbioru.",
                    "en" => "Transporting wood and other forest products from the harvesting site to the collection point."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30433,
                "name" => json_encode([
                    "pl" => "Zarządzanie transportem drewna, w tym kontrolowanie stanu technicznego wozu i zachowanie norm bezpieczeństwa.",
                    "en" => "Managing wood transport, including checking the technical condition of the wagon and maintaining safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30434,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w lesie oraz zapewnianie odpowiednich warunków do transportu drewna.",
                    "en" => "Maintaining order in the forest and ensuring proper conditions for transporting wood."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pozostali_robotnicy_lesni_i_pokrewni = [

            [
                "id" => 30435,
                "name" => json_encode([
                    "pl" => "Wykonywanie różnorodnych prac leśnych, takich jak czyszczenie terenu, sadzenie drzew i zbiór drewna.",
                    "en" => "Performing various forestry tasks, such as clearing land, planting trees, and wood collection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30436,
                "name" => json_encode([
                    "pl" => "Pomoc w konserwacji lasów, monitorowanie stanu zdrowia drzew i usuwanie chorych roślin.",
                    "en" => "Assisting with forest maintenance, monitoring tree health, and removing diseased plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30437,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie prac związanych z odbudową lasów i ochroną bioróżnorodności.",
                    "en" => "Carrying out tasks related to forest restoration and biodiversity protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $operator_ciagnikow_zrywkowych_do_zrywki_podwieszanej = [

            [
                "id" => 30438,
                "name" => json_encode([
                    "pl" => "Obsługa ciągników zrywkowych do zrywki podwieszanej, w tym załadunek i transport drewna.",
                    "en" => "Operating skidder tractors for suspended skidding, including loading and transporting wood."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30439,
                "name" => json_encode([
                    "pl" => "Zarządzanie efektywnością pracy maszyny i zapewnianie bezpiecznych warunków pracy.",
                    "en" => "Managing machine performance and ensuring safe working conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30440,
                "name" => json_encode([
                    "pl" => "Konserwacja i drobne naprawy ciągników zrywkowych.",
                    "en" => "Maintenance and minor repairs of skidder tractors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $operator_maszyn_lesnych = [

            [
                "id" => 30441,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn leśnych, takich jak piły do drewna, ładowarki, maszyny do wycinki drzew.",
                    "en" => "Operating forestry machines, such as wood saws, loaders, and tree cutting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30442,
                "name" => json_encode([
                    "pl" => "Zarządzanie pracą maszyn leśnych, w tym kontrolowanie ich wydajności i efektywności.",
                    "en" => "Managing forestry machine operations, including controlling their performance and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30443,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji i napraw maszyn leśnych.",
                    "en" => "Performing maintenance and repairs on forestry machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $operator_nasiebiernych_ciagnikow_zrywkowych = [

            [
                "id" => 30444,
                "name" => json_encode([
                    "pl" => "Obsługa nasiębiernych ciągników zrywkowych do transportu drewna w trudnym terenie.",
                    "en" => "Operating crawler-type skidders for wood transport in rough terrain."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30445,
                "name" => json_encode([
                    "pl" => "Zarządzanie wydajnością maszyny i zapewnianie jej prawidłowego funkcjonowania.",
                    "en" => "Managing the machine's performance and ensuring its proper functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30446,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji, czyszczenia i napraw ciągników zrywkowych.",
                    "en" => "Performing maintenance, cleaning, and repairs on skidder tractors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $operator_urzadzen_technicznych_stosowanych_w_lesnictwie = [

            [
                "id" => 30447,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń technicznych stosowanych w leśnictwie, takich jak piły do drewna, maszyny do rębnia i ładowarki.",
                    "en" => "Operating technical equipment used in forestry, such as wood saws, debarkers, and loaders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30448,
                "name" => json_encode([
                    "pl" => "Utrzymywanie urządzeń w dobrym stanie technicznym i wykonywanie napraw w razie potrzeby.",
                    "en" => "Maintaining equipment in good working condition and performing repairs when necessary."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30449,
                "name" => json_encode([
                    "pl" => "Zarządzanie pracą urządzeń, kontrolowanie ich wydajności oraz przestrzeganie zasad bezpieczeństwa.",
                    "en" => "Managing equipment operations, controlling their efficiency, and ensuring safety standards are followed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $operator_wielooperacyjnych_samojezdnych_maszyn_lesnych = [

            [
                "id" => 30450,
                "name" => json_encode([
                    "pl" => "Obsługa wielooperacyjnych samojezdnych maszyn leśnych, takich jak harwestery, forwardery, do wycinki i transportu drewna.",
                    "en" => "Operating multi-functional self-propelled forestry machines, such as harvesters and forwarders, for felling and wood transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30451,
                "name" => json_encode([
                    "pl" => "Zarządzanie pracą maszyn leśnych, kontrolowanie ich efektywności, konserwacja i naprawy.",
                    "en" => "Managing forestry machine operations, controlling their efficiency, maintenance, and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30452,
                "name" => json_encode([
                    "pl" => "Dbanie o wydajność maszyn, przestrzeganie norm ochrony środowiska oraz zasad BHP.",
                    "en" => "Ensuring the performance of machines, adhering to environmental protection standards and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $operator_zrywkowych_kolejek_linowych = [

            [
                "id" => 30453,
                "name" => json_encode([
                    "pl" => "Obsługa zrywkowych kolejek linowych do transportu drewna.",
                    "en" => "Operating cable logging systems for wood transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30454,
                "name" => json_encode([
                    "pl" => "Monitorowanie pracy kolejek linowych, kontrolowanie prędkości i stabilności transportu drewna.",
                    "en" => "Monitoring cable logging system operations, controlling speed and stability of wood transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30455,
                "name" => json_encode([
                    "pl" => "Konserwacja, kontrola stanu technicznego oraz naprawy zrywkowych kolejek linowych.",
                    "en" => "Maintaining, checking technical condition, and repairing cable logging systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pomocniczy_robotnik_lesny = [

            [
                "id" => 30456,
                "name" => json_encode([
                    "pl" => "Pomoc przy pracach leśnych, takich jak sadzenie drzew, zbieranie drewna i oczyszczanie terenu.",
                    "en" => "Assisting with forestry tasks such as planting trees, wood collection, and land clearing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30457,
                "name" => json_encode([
                    "pl" => "Pomoc w utrzymaniu lasów w dobrym stanie, monitorowanie zdrowia roślinności.",
                    "en" => "Assisting in maintaining forests in good condition and monitoring plant health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30458,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie prac konserwacyjnych w lesie, takich jak cięcie drzew, przycinanie gałęzi.",
                    "en" => "Performing maintenance work in the forest, such as tree cutting and pruning branches."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pomocniczy_robotnik_w_lowiectwie = [

            [
                "id" => 30459,
                "name" => json_encode([
                    "pl" => "Pomoc w pracach związanych z łowiectwem, takich jak przygotowywanie pułapek i kontrolowanie populacji zwierząt.",
                    "en" => "Assisting in hunting tasks, such as setting traps and controlling animal populations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30460,
                "name" => json_encode([
                    "pl" => "Wsparcie w zapewnianiu ochrony przed szkodnikami w lasach i na terenach łowieckich.",
                    "en" => "Supporting in protecting against pests in forests and hunting grounds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30461,
                "name" => json_encode([
                    "pl" => "Pomoc w zbiorze dzikiej zwierzyny i dbanie o środowisko naturalne.",
                    "en" => "Assisting in harvesting wild game and caring for the natural environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pozostali_robotnicy_wykonujacy_prace_proste_w_lesnictwie = [

            [
                "id" => 30462,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac pomocniczych w leśnictwie, takich jak sadzenie, zbiór drewna i oczyszczanie terenu.",
                    "en" => "Performing auxiliary forestry tasks, such as planting, wood collection, and land clearing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30463,
                "name" => json_encode([
                    "pl" => "Wsparcie w utrzymaniu zdrowia roślinności w lasach i terenach leśnych.",
                    "en" => "Supporting in maintaining plant health in forests and wooded areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30464,
                "name" => json_encode([
                    "pl" => "Prace związane z rekultywacją terenów leśnych i ochroną bioróżnorodności.",
                    "en" => "Tasks related to land reclamation and biodiversity protection in forests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $technik_rybactwa_srodladowego = [

            [
                "id" => 30465,
                "name" => json_encode([
                    "pl" => "Zarządzanie hodowlą ryb w wodach śródlądowych, w tym kontrolowanie warunków wodnych i jakości wody.",
                    "en" => "Managing inland fish farming, including controlling water conditions and water quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30466,
                "name" => json_encode([
                    "pl" => "Monitorowanie zdrowia ryb oraz ich wzrostu.",
                    "en" => "Monitoring fish health and growth."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30467,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem hodowlanym ryb, w tym zapewnianie odpowiednich warunków do rozrodu.",
                    "en" => "Managing the fish breeding process, including providing suitable breeding conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $technik_rybolowstwa_morskiego = [

            [
                "id" => 30468,
                "name" => json_encode([
                    "pl" => "Zarządzanie rybołówstwem morskim, w tym nadzorowanie połowów i ochrony ryb.",
                    "en" => "Managing marine fisheries, including supervising catches and fish protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30469,
                "name" => json_encode([
                    "pl" => "Zarządzanie flotą rybacką i zapewnianie zgodności z przepisami ochrony środowiska.",
                    "en" => "Managing the fishing fleet and ensuring compliance with environmental protection regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30470,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanów ryb i stref ochronnych w morzach i oceanach.",
                    "en" => "Monitoring fish stocks and protected areas in seas and oceans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $rybak_pracujacy_na_wlasne_potrzeby = [

            [
                "id" => 30471,
                "name" => json_encode([
                    "pl" => "Zarządzanie połowami ryb w celu zapewnienia odpowiednich zapasów na własne potrzeby.",
                    "en" => "Managing fish catches to ensure proper stocks for personal consumption."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30472,
                "name" => json_encode([
                    "pl" => "Zarządzanie zdrowiem ryb i ich środowiskiem wodnym.",
                    "en" => "Managing the health of fish and their aquatic environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30473,
                "name" => json_encode([
                    "pl" => "Organizowanie pracy przy połowach ryb w celu ich przechowywania i przygotowania do spożycia.",
                    "en" => "Organizing fishing activities for the storage and preparation of fish for consumption."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $robotnicy_wykonujacy_prace_proste_w_rybolowstwie_i_zakladach_akwakultury = [

            [
                "id" => 30474,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac pomocniczych przy połowach ryb, przygotowywaniu ryb do sprzedaży lub przetwarzania.",
                    "en" => "Performing auxiliary tasks in fish catching, preparing fish for sale or processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30475,
                "name" => json_encode([
                    "pl" => "Pomoc w utrzymaniu akwarium i innych urządzeń hodowlanych.",
                    "en" => "Assisting with maintaining aquariums and other breeding equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],

            [
                "id" => 30476,
                "name" => json_encode([
                    "pl" => "Wsparcie w hodowli ryb, zarządzanie środowiskiem wodnym oraz kontrolowanie jakości wody.",
                    "en" => "Supporting fish farming, managing the aquatic environment, and monitoring water quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];

        DB::table('detail_projects')->insert(array_merge(
            $DORADCA_ROLNICZY,
            $gleboznawca,
            $inzynier_lesnictwa,
            $inzynier_ogrodnictwa,
            $inzynier_rolnictwa,
            $inzynier_rybactwa,
            $inzynier_zootechniki,
            $klasyfikator_gruntow,
            $rzeczoznawca_rolniczy,
            $pozostali_specjalisci,
            $laborant_nasiennictwa,
            $lekarz_weterynarii_chirurgia,
            $lekarz_weterynarii_drobiu,
            $lekarz_weterynarii_koni,
            $lekarz_weterynarii_owady,
            $lekarz_weterynarii_przezu,
            $lekarz_weterynarii_psy_i_koty,
            $lekarz_weterynarii_ryby,
            $lekarz_weterynarii_trzoda,
            $lekarz_weterynarii_zwierzeta_futerkowe,
            $lekarz_weterynarii_zwierzeta_niedomowione,
            $lekarz_weterynarii_epizootiologia,
            $lekarz_weterynarii_higiena_zwierzat,
            $lekarz_weterynarii_preventywna_higiena_paszy,
            $lekarz_weterynarii_radiologia,
            $lekarz_weterynarii_rozrod,
            $lekarz_weterynarii_lab,
            $lekarz_weterynarii_lab_patologia,
            $lekarz_weterynarii_specjalisci,
            $pozostali_technicy_weterynarii,
            $kierownik_gospodarstwa_upraw_polowych,
            $rolnik_lakarz,
            $rolnik_producent_nasion,
            $rolnik_upraw_polowych,
            $pozostali_rolnicy_upraw_polowych,
            $kierownik_gospodarstwa_upraw_mieszanych,
            $producent_zywnosci_ekologicznej,
            $rolnik_upraw_mieszanych,
            $pozostali_rolnicy_upraw_mieszanych,
            $dojarz,
            $hodowca_bydla,
            $hodowca_koni,
            $hodowca_owiec,
            $hodowca_trzody_chlewnej,
            $hodowca_zwierzat_domowych,
            $hodowca_zwierzat_futerkowych,
            $juhas,
            $kierownik_gospodarstwa_produkcji_zwierzecej,
            $masztalerz,
            $hodowca_inwentarza_mieszanego,
            $pozostali_hodowcy_zwierzat_gospodarskich_i_domowych,
            $hodowca_drobiu,
            $kierownik_gospodarstwa_hodowli_drobiu,
            $pracownik_wylegarni_drobiu,
            $pozostali_hodowcy_drobiu,
            $hodowca_jedwabnikow,
            $pszczelarz,
            $hodowca_ptakow,
            $hodowca_zwierzat_laboratoryjnych,
            $baca,
            $kierownik_gospodarstwa_produkcji_roslinnej_i_zwierzecej,
            $rolnik,
            $pozostali_rolnicy_produkcji_roslinnej_i_zwierzecej,
            $rolnicy_produkcji_roslinnej_pracujacy_na_wlasne_potrzeby,
            $hodowcy_zwierzat_pracujacy_na_wlasne_potrzeby,
            $rolnicy_produkcji_roslinnej_i_zwierzecej_pracujacy_na_wlasne_potrzeby,
            $robotnicy_wykonujacy_proste_prace_polowe,
            $robotnicy_wykonujacy_prace_proste_w_hodowli_zwierzat,
            $robotnicy_wykonujacy_prace_przy_uprawie_roslin_i_hodowli_zwierzat,
            $technik_hodowca_koni,
            $technik_hodowca_zwierzat,
            $technik_rolnik,
            $technik_pszczelarz,
            $pozostali_technicy_rolnictwa_i_pokrewni,
            $technik_agrobiznesu,
            $zbieracz_owocow_ziol_i_innych_roslin,
            $podkuwacz_koni,
            $kierownik_gospodarstwa_sadowniczego,
            $rolnik_chmielarz,
            $sadownik,
            $pozostali_sadownicy,
            $chirurg_pielegniarz_drzew,
            $kierownik_gospodarstwa_ogrodniczego,
            $ogrodnik_producent_nasion,
            $ogrodnik_szkółkarz,
            $ogrodnik_terenow_zieleni,
            $ogrodnik_uprawa_grzybow_jadalnych,
            $ogrodnik_uprawa_roslin_ozdobnych,
            $ogrodnik_uprawa_warzyw_polowych,
            $ogrodnik_uprawy_pod_oslonami,
            $producent_i_zbieracz_ziol,
            $ogrodnik,
            $pielenigniarz_trawnikow_murawy_greenkeeper,
            $pozostali_ogrodnicy,
            $pomocniczy_robotnik_konserwacji_terenow_zieleni,
            $pomocniczy_robotnik_szklarniowy,
            $pomocniczy_robotnik_w_gospodarstwie_sadowniczym,
            $pozostali_robotnicy_wykonujacy_prace_proste_w_ogrodnictwie_i_sadownictwie,
            $technik_ogrodnik,
            $pracownik_ochrony_roslin,
            $pozostali_robotnicy_zwalczania_szkodnikow_i_chwastow,
            $pracownik_deratyzacji_dezynfekcji_i_dezynsekcji,
            $kombajnista_kierowca_kombajnu,
            $mechanik_operator_pojazdow_i_maszyn_rolniczych,
            $pozostali_operatorzy_wolnobieznych_maszyn_rolniczych_i_lesnych,
            $operator_maszyn_ogrodniczych,
            $drwal_pilarz_drzew,
            $robotnik_lesny,
            $wozak_zrywkarz,
            $pozostali_robotnicy_lesni_i_pokrewni,
            $operator_ciagnikow_zrywkowych_do_zrywki_podwieszanej,
            $operator_maszyn_lesnych,
            $operator_nasiebiernych_ciagnikow_zrywkowych,
            $operator_urzadzen_technicznych_stosowanych_w_lesnictwie,
            $operator_wielooperacyjnych_samojezdnych_maszyn_lesnych,
            $operator_zrywkowych_kolejek_linowych,
            $pomocniczy_robotnik_lesny,
            $pomocniczy_robotnik_w_lowiectwie,
            $pozostali_robotnicy_wykonujacy_prace_proste_w_lesnictwie,
            $technik_rybactwa_srodladowego,
            $technik_rybolowstwa_morskiego,
            $rybak_pracujacy_na_wlasne_potrzeby,
            $robotnicy_wykonujacy_prace_proste_w_rybolowstwie_i_zakladach_akwakultury,
        ));

        Category::whereId('2675')->first()->detailprojects()->attach(collect($DORADCA_ROLNICZY)->pluck('id')->toArray());
        Category::whereId('2676')->first()->detailprojects()->attach(collect($gleboznawca)->pluck('id')->toArray());
        Category::whereId('2677')->first()->detailprojects()->attach(collect($inzynier_lesnictwa)->pluck('id')->toArray());
        Category::whereId('2678')->first()->detailprojects()->attach(collect($inzynier_ogrodnictwa)->pluck('id')->toArray());
        Category::whereId('2679')->first()->detailprojects()->attach(collect($inzynier_rolnictwa)->pluck('id')->toArray());
        Category::whereId('2680')->first()->detailprojects()->attach(collect($inzynier_rybactwa)->pluck('id')->toArray());
        Category::whereId('2681')->first()->detailprojects()->attach(collect($inzynier_zootechniki)->pluck('id')->toArray());
        Category::whereId('2682')->first()->detailprojects()->attach(collect($klasyfikator_gruntow)->pluck('id')->toArray());
        Category::whereId('2683')->first()->detailprojects()->attach(collect($rzeczoznawca_rolniczy)->pluck('id')->toArray());
        Category::whereId('2684')->first()->detailprojects()->attach(collect($pozostali_specjalisci)->pluck('id')->toArray());
        Category::whereId('2687')->first()->detailprojects()->attach(collect($laborant_nasiennictwa)->pluck('id')->toArray());
        Category::whereId('2692')->first()->detailprojects()->attach(collect($lekarz_weterynarii_chirurgia)->pluck('id')->toArray());
        Category::whereId('2693')->first()->detailprojects()->attach(collect($lekarz_weterynarii_drobiu)->pluck('id')->toArray());
        Category::whereId('2694')->first()->detailprojects()->attach(collect($lekarz_weterynarii_koni)->pluck('id')->toArray());
        Category::whereId('2695')->first()->detailprojects()->attach(collect($lekarz_weterynarii_owady)->pluck('id')->toArray());
        Category::whereId('2696')->first()->detailprojects()->attach(collect($lekarz_weterynarii_przezu)->pluck('id')->toArray());
        Category::whereId('2697')->first()->detailprojects()->attach(collect($lekarz_weterynarii_psy_i_koty)->pluck('id')->toArray());
        Category::whereId('2698')->first()->detailprojects()->attach(collect($lekarz_weterynarii_ryby)->pluck('id')->toArray());
        Category::whereId('2699')->first()->detailprojects()->attach(collect($lekarz_weterynarii_trzoda)->pluck('id')->toArray());
        Category::whereId('2700')->first()->detailprojects()->attach(collect($lekarz_weterynarii_zwierzeta_futerkowe)->pluck('id')->toArray());
        Category::whereId('2701')->first()->detailprojects()->attach(collect($lekarz_weterynarii_zwierzeta_niedomowione)->pluck('id')->toArray());
        Category::whereId('2702')->first()->detailprojects()->attach(collect($lekarz_weterynarii_epizootiologia)->pluck('id')->toArray());
        Category::whereId('2703')->first()->detailprojects()->attach(collect($lekarz_weterynarii_higiena_zwierzat)->pluck('id')->toArray());
        Category::whereId('2704')->first()->detailprojects()->attach(collect($lekarz_weterynarii_preventywna_higiena_paszy)->pluck('id')->toArray());
        Category::whereId('2705')->first()->detailprojects()->attach(collect($lekarz_weterynarii_radiologia)->pluck('id')->toArray());
        Category::whereId('2706')->first()->detailprojects()->attach(collect($lekarz_weterynarii_rozrod)->pluck('id')->toArray());
        Category::whereId('2708')->first()->detailprojects()->attach(collect($lekarz_weterynarii_lab)->pluck('id')->toArray());
        Category::whereId('2707')->first()->detailprojects()->attach(collect($lekarz_weterynarii_lab_patologia)->pluck('id')->toArray());
        Category::whereId('2709')->first()->detailprojects()->attach(collect($lekarz_weterynarii_specjalisci)->pluck('id')->toArray());
        Category::whereId('2711')->first()->detailprojects()->attach(collect($pozostali_technicy_weterynarii)->pluck('id')->toArray());
        Category::whereId('2714')->first()->detailprojects()->attach(collect($kierownik_gospodarstwa_upraw_polowych)->pluck('id')->toArray());
        Category::whereId('2715')->first()->detailprojects()->attach(collect($rolnik_lakarz)->pluck('id')->toArray());
        Category::whereId('2716')->first()->detailprojects()->attach(collect($rolnik_producent_nasion)->pluck('id')->toArray());
        Category::whereId('2717')->first()->detailprojects()->attach(collect($rolnik_upraw_polowych)->pluck('id')->toArray());
        Category::whereId('2718')->first()->detailprojects()->attach(collect($pozostali_rolnicy_upraw_polowych)->pluck('id')->toArray());
        Category::whereId('2720')->first()->detailprojects()->attach(collect($kierownik_gospodarstwa_upraw_mieszanych)->pluck('id')->toArray());
        Category::whereId('2721')->first()->detailprojects()->attach(collect($producent_zywnosci_ekologicznej)->pluck('id')->toArray());
        Category::whereId('2722')->first()->detailprojects()->attach(collect($rolnik_upraw_mieszanych)->pluck('id')->toArray());
        Category::whereId('2723')->first()->detailprojects()->attach(collect($pozostali_rolnicy_upraw_mieszanych)->pluck('id')->toArray());
        Category::whereId('2725')->first()->detailprojects()->attach(collect($dojarz)->pluck('id')->toArray());
        Category::whereId('2726')->first()->detailprojects()->attach(collect($hodowca_bydla)->pluck('id')->toArray());
        Category::whereId('2727')->first()->detailprojects()->attach(collect($hodowca_koni)->pluck('id')->toArray());
        Category::whereId('2728')->first()->detailprojects()->attach(collect($hodowca_owiec)->pluck('id')->toArray());
        Category::whereId('2729')->first()->detailprojects()->attach(collect($hodowca_trzody_chlewnej)->pluck('id')->toArray());
        Category::whereId('2730')->first()->detailprojects()->attach(collect($hodowca_zwierzat_domowych)->pluck('id')->toArray());
        Category::whereId('2731')->first()->detailprojects()->attach(collect($hodowca_zwierzat_futerkowych)->pluck('id')->toArray());
        Category::whereId('2732')->first()->detailprojects()->attach(collect($juhas)->pluck('id')->toArray());
        Category::whereId('2733')->first()->detailprojects()->attach(collect($kierownik_gospodarstwa_produkcji_zwierzecej)->pluck('id')->toArray());
        Category::whereId('2734')->first()->detailprojects()->attach(collect($masztalerz)->pluck('id')->toArray());
        Category::whereId('2735')->first()->detailprojects()->attach(collect($hodowca_inwentarza_mieszanego)->pluck('id')->toArray());
        Category::whereId('2736')->first()->detailprojects()->attach(collect($pozostali_hodowcy_zwierzat_gospodarskich_i_domowych)->pluck('id')->toArray());
        Category::whereId('2738')->first()->detailprojects()->attach(collect($hodowca_drobiu)->pluck('id')->toArray());
        Category::whereId('2739')->first()->detailprojects()->attach(collect($kierownik_gospodarstwa_hodowli_drobiu)->pluck('id')->toArray());
        Category::whereId('2740')->first()->detailprojects()->attach(collect($pracownik_wylegarni_drobiu)->pluck('id')->toArray());
        Category::whereId('2741')->first()->detailprojects()->attach(collect($pozostali_hodowcy_drobiu)->pluck('id')->toArray());
        Category::whereId('2743')->first()->detailprojects()->attach(collect($hodowca_jedwabnikow)->pluck('id')->toArray());
        Category::whereId('2744')->first()->detailprojects()->attach(collect($pszczelarz)->pluck('id')->toArray());
        Category::whereId('2746')->first()->detailprojects()->attach(collect($hodowca_ptakow)->pluck('id')->toArray());
        Category::whereId('2747')->first()->detailprojects()->attach(collect($hodowca_zwierzat_laboratoryjnych)->pluck('id')->toArray());
        Category::whereId('2750')->first()->detailprojects()->attach(collect($baca)->pluck('id')->toArray());
        Category::whereId('2751')->first()->detailprojects()->attach(collect($kierownik_gospodarstwa_produkcji_roslinnej_i_zwierzecej)->pluck('id')->toArray());
        Category::whereId('2752')->first()->detailprojects()->attach(collect($rolnik)->pluck('id')->toArray());
        Category::whereId('2753')->first()->detailprojects()->attach(collect($pozostali_rolnicy_produkcji_roslinnej_i_zwierzecej)->pluck('id')->toArray());
        Category::whereId('2753')->first()->detailprojects()->attach(collect($rolnicy_produkcji_roslinnej_pracujacy_na_wlasne_potrzeby)->pluck('id')->toArray());
        Category::whereId('2754')->first()->detailprojects()->attach(collect($hodowcy_zwierzat_pracujacy_na_wlasne_potrzeby)->pluck('id')->toArray());
        Category::whereId('2756')->first()->detailprojects()->attach(collect($rolnicy_produkcji_roslinnej_i_zwierzecej_pracujacy_na_wlasne_potrzeby)->pluck('id')->toArray());
        Category::whereId('2757')->first()->detailprojects()->attach(collect($robotnicy_wykonujacy_proste_prace_polowe)->pluck('id')->toArray());
        Category::whereId('2758')->first()->detailprojects()->attach(collect($robotnicy_wykonujacy_prace_proste_w_hodowli_zwierzat)->pluck('id')->toArray());
        Category::whereId('2759')->first()->detailprojects()->attach(collect($robotnicy_wykonujacy_prace_przy_uprawie_roslin_i_hodowli_zwierzat)->pluck('id')->toArray());
        Category::whereId('2760')->first()->detailprojects()->attach(collect($technik_hodowca_koni)->pluck('id')->toArray());
        Category::whereId('2761')->first()->detailprojects()->attach(collect($technik_hodowca_zwierzat)->pluck('id')->toArray());
        Category::whereId('2762')->first()->detailprojects()->attach(collect($technik_rolnik)->pluck('id')->toArray());
        Category::whereId('2763')->first()->detailprojects()->attach(collect($technik_pszczelarz)->pluck('id')->toArray());
        Category::whereId('2764')->first()->detailprojects()->attach(collect($pozostali_technicy_rolnictwa_i_pokrewni)->pluck('id')->toArray());
        Category::whereId('2765')->first()->detailprojects()->attach(collect($technik_agrobiznesu)->pluck('id')->toArray());
        Category::whereId('2766')->first()->detailprojects()->attach(collect($zbieracz_owocow_ziol_i_innych_roslin)->pluck('id')->toArray());
        Category::whereId('2767')->first()->detailprojects()->attach(collect($podkuwacz_koni)->pluck('id')->toArray());
        Category::whereId('2770')->first()->detailprojects()->attach(collect($kierownik_gospodarstwa_sadowniczego)->pluck('id')->toArray());
        Category::whereId('2771')->first()->detailprojects()->attach(collect($rolnik_chmielarz)->pluck('id')->toArray());
        Category::whereId('2772')->first()->detailprojects()->attach(collect($sadownik)->pluck('id')->toArray());
        Category::whereId('2773')->first()->detailprojects()->attach(collect($pozostali_sadownicy)->pluck('id')->toArray());
        Category::whereId('2775')->first()->detailprojects()->attach(collect($chirurg_pielegniarz_drzew)->pluck('id')->toArray());
        Category::whereId('2776')->first()->detailprojects()->attach(collect($kierownik_gospodarstwa_ogrodniczego)->pluck('id')->toArray());
        Category::whereId('2777')->first()->detailprojects()->attach(collect($ogrodnik_producent_nasion)->pluck('id')->toArray());
        Category::whereId('2778')->first()->detailprojects()->attach(collect($ogrodnik_szkółkarz)->pluck('id')->toArray());
        Category::whereId('2779')->first()->detailprojects()->attach(collect($ogrodnik_terenow_zieleni)->pluck('id')->toArray());
        Category::whereId('2780')->first()->detailprojects()->attach(collect($ogrodnik_uprawa_grzybow_jadalnych)->pluck('id')->toArray());
        Category::whereId('2781')->first()->detailprojects()->attach(collect($ogrodnik_uprawa_roslin_ozdobnych)->pluck('id')->toArray());
        Category::whereId('2782')->first()->detailprojects()->attach(collect($ogrodnik_uprawa_warzyw_polowych)->pluck('id')->toArray());
        Category::whereId('2783')->first()->detailprojects()->attach(collect($ogrodnik_uprawy_pod_oslonami)->pluck('id')->toArray());
        Category::whereId('2784')->first()->detailprojects()->attach(collect($producent_i_zbieracz_ziol)->pluck('id')->toArray());
        Category::whereId('2785')->first()->detailprojects()->attach(collect($ogrodnik)->pluck('id')->toArray());
        Category::whereId('2786')->first()->detailprojects()->attach(collect($pielenigniarz_trawnikow_murawy_greenkeeper)->pluck('id')->toArray());
        Category::whereId('2787')->first()->detailprojects()->attach(collect($pozostali_ogrodnicy)->pluck('id')->toArray());
        Category::whereId('2789')->first()->detailprojects()->attach(collect($pomocniczy_robotnik_konserwacji_terenow_zieleni)->pluck('id')->toArray());
        Category::whereId('2790')->first()->detailprojects()->attach(collect($pomocniczy_robotnik_szklarniowy)->pluck('id')->toArray());
        Category::whereId('2791')->first()->detailprojects()->attach(collect($pomocniczy_robotnik_w_gospodarstwie_sadowniczym)->pluck('id')->toArray());
        Category::whereId('2792')->first()->detailprojects()->attach(collect($pozostali_robotnicy_wykonujacy_prace_proste_w_ogrodnictwie_i_sadownictwie)->pluck('id')->toArray());
        Category::whereId('2793')->first()->detailprojects()->attach(collect($technik_ogrodnik)->pluck('id')->toArray());
        Category::whereId('2795')->first()->detailprojects()->attach(collect($pracownik_ochrony_roslin)->pluck('id')->toArray());
        Category::whereId('2796')->first()->detailprojects()->attach(collect($pozostali_robotnicy_zwalczania_szkodnikow_i_chwastow)->pluck('id')->toArray());
        Category::whereId('2797')->first()->detailprojects()->attach(collect($pracownik_deratyzacji_dezynfekcji_i_dezynsekcji)->pluck('id')->toArray());
        Category::whereId('2800')->first()->detailprojects()->attach(collect($kombajnista_kierowca_kombajnu)->pluck('id')->toArray());
        Category::whereId('2801')->first()->detailprojects()->attach(collect($mechanik_operator_pojazdow_i_maszyn_rolniczych)->pluck('id')->toArray());
        Category::whereId('2803')->first()->detailprojects()->attach(collect($pozostali_operatorzy_wolnobieznych_maszyn_rolniczych_i_lesnych)->pluck('id')->toArray());
        Category::whereId('2804')->first()->detailprojects()->attach(collect($operator_maszyn_ogrodniczych)->pluck('id')->toArray());
        Category::whereId('2807')->first()->detailprojects()->attach(collect($drwal_pilarz_drzew)->pluck('id')->toArray());
        Category::whereId('2808')->first()->detailprojects()->attach(collect($robotnik_lesny)->pluck('id')->toArray());
        Category::whereId('2809')->first()->detailprojects()->attach(collect($wozak_zrywkarz)->pluck('id')->toArray());
        Category::whereId('2810')->first()->detailprojects()->attach(collect($pozostali_robotnicy_lesni_i_pokrewni)->pluck('id')->toArray());
        Category::whereId('2811')->first()->detailprojects()->attach(collect($operator_ciagnikow_zrywkowych_do_zrywki_podwieszanej)->pluck('id')->toArray());
        Category::whereId('2812')->first()->detailprojects()->attach(collect($operator_maszyn_lesnych)->pluck('id')->toArray());
        Category::whereId('2813')->first()->detailprojects()->attach(collect($operator_nasiebiernych_ciagnikow_zrywkowych)->pluck('id')->toArray());
        Category::whereId('2814')->first()->detailprojects()->attach(collect($operator_urzadzen_technicznych_stosowanych_w_lesnictwie)->pluck('id')->toArray());
        Category::whereId('2815')->first()->detailprojects()->attach(collect($operator_wielooperacyjnych_samojezdnych_maszyn_lesnych)->pluck('id')->toArray());
        Category::whereId('2816')->first()->detailprojects()->attach(collect($operator_zrywkowych_kolejek_linowych)->pluck('id')->toArray());
        Category::whereId('2818')->first()->detailprojects()->attach(collect($pomocniczy_robotnik_lesny)->pluck('id')->toArray());
        Category::whereId('2819')->first()->detailprojects()->attach(collect($pomocniczy_robotnik_w_lowiectwie)->pluck('id')->toArray());
        Category::whereId('2820')->first()->detailprojects()->attach(collect($pozostali_robotnicy_wykonujacy_prace_proste_w_lesnictwie)->pluck('id')->toArray());
        Category::whereId('2822')->first()->detailprojects()->attach(collect($technik_rybactwa_srodladowego)->pluck('id')->toArray());
        Category::whereId('2823')->first()->detailprojects()->attach(collect($technik_rybolowstwa_morskiego)->pluck('id')->toArray());
        Category::whereId('2827')->first()->detailprojects()->attach(collect($rybak_pracujacy_na_wlasne_potrzeby)->pluck('id')->toArray());
        Category::whereId('2828')->first()->detailprojects()->attach(collect($robotnicy_wykonujacy_prace_proste_w_rybolowstwie_i_zakladach_akwakultury)->pluck('id')->toArray());
    }
}

