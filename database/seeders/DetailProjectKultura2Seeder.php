<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectKultura2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();

        $POZOSTALI_KIEROWNICY_LUB_DYREKTORZY_W_INSTYTUCJACH_OPIEKI_NAD_DZIEĆMI = [

            [
                'id' => 21264,
                "name" => json_encode([
                    "pl" => "Zarządzanie personelem i organizacja pracy w placówkach opieki nad dziećmi.",
                    "en" => "Managing staff and organizing work in childcare facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21265,
                "name" => json_encode([
                    "pl" => "Opracowywanie programów edukacyjnych i opiekuńczych dla dzieci.",
                    "en" => "Developing educational and care programs for children."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21266,
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności działalności z obowiązującymi przepisami.",
                    "en" => "Ensuring compliance of operations with applicable regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21267,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości świadczonych usług opiekuńczych.",
                    "en" => "Monitoring the quality of care services provided."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21268,
                "name" => json_encode([
                    "pl" => "Organizowanie szkoleń dla personelu opiekuńczego.",
                    "en" => "Organizing training for care staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21269,
                "name" => json_encode([
                    "pl" => "Nadzorowanie działań związanych z bezpieczeństwem dzieci.",
                    "en" => "Overseeing activities related to children's safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KIEROWNICY_W_INSTYTUCJACH_OPIEKI_ZDROWOTNEJ = [

            [
                'id' => 21270,
                "name" => json_encode([
                    "pl" => "Koordynowanie pracy personelu medycznego.",
                    "en" => "Coordinating the work of medical staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21271,
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności procedur medycznych z obowiązującymi standardami.",
                    "en" => "Ensuring compliance of medical procedures with applicable standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21272,
                "name" => json_encode([
                    "pl" => "Planowanie i organizacja usług zdrowotnych.",
                    "en" => "Planning and organizing healthcare services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21273,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości świadczonych usług medycznych.",
                    "en" => "Monitoring the quality of medical services provided."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21274,
                "name" => json_encode([
                    "pl" => "Zarządzanie budżetem placówki medycznej.",
                    "en" => "Managing the budget of the healthcare facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21275,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami nadzorującymi opiekę zdrowotną.",
                    "en" => "Collaborating with institutions overseeing healthcare."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_DOMU_SPOKOJNEJ_STAROŚCI = [

            [
                'id' => 21276,
                "name" => json_encode([
                    "pl" => "Zarządzanie działalnością domu spokojnej starości.",
                    "en" => "Managing the operations of a retirement home."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21277,
                "name" => json_encode([
                    "pl" => "Planowanie i organizowanie usług opiekuńczych.",
                    "en" => "Planning and organizing care services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21278,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości świadczonych usług dla seniorów.",
                    "en" => "Monitoring the quality of services provided to seniors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21279,
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności z przepisami prawnymi dotyczącymi opieki nad seniorami.",
                    "en" => "Ensuring compliance with legal regulations concerning elderly care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21280,
                "name" => json_encode([
                    "pl" => "Zarządzanie personelem domu spokojnej starości.",
                    "en" => "Managing the staff of a retirement home."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21281,
                "name" => json_encode([
                    "pl" => "Nadzorowanie działań związanych z rehabilitacją mieszkańców.",
                    "en" => "Overseeing activities related to residents' rehabilitation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KIEROWNICY_W_INSTYTUCJACH_OPIEKI_NAD_OSOBAMI_STARSZYMI = [

            [
                'id' => 21282,
                "name" => json_encode([
                    "pl" => "Planowanie i organizacja usług opiekuńczych dla osób starszych.",
                    "en" => "Planning and organizing care services for the elderly."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21283,
                "name" => json_encode([
                    "pl" => "Zarządzanie personelem świadczącym opiekę nad seniorami.",
                    "en" => "Managing staff providing care for seniors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21284,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości usług świadczonych w placówkach dla seniorów.",
                    "en" => "Monitoring the quality of services provided in facilities for seniors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21285,
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności z przepisami prawnymi dotyczącymi opieki nad osobami starszymi.",
                    "en" => "Ensuring compliance with legal regulations related to elderly care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21286,
                "name" => json_encode([
                    "pl" => "Organizowanie programów rehabilitacyjnych i zdrowotnych dla seniorów.",
                    "en" => "Organizing rehabilitation and health programs for seniors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21287,
                "name" => json_encode([
                    "pl" => "Współpraca z rodzinami podopiecznych oraz instytucjami wspierającymi.",
                    "en" => "Collaborating with families of residents and supporting institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_DOMU_POMOCY_SPOŁECZNEJ = [

            [
                'id' => 21288,
                "name" => json_encode([
                    "pl" => "Zarządzanie działalnością domu pomocy społecznej.",
                    "en" => "Managing the operations of a social welfare home."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21289,
                "name" => json_encode([
                    "pl" => "Planowanie i nadzorowanie działań personelu opiekuńczego.",
                    "en" => "Planning and supervising the activities of care staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21290,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości usług opiekuńczych i rehabilitacyjnych.",
                    "en" => "Monitoring the quality of care and rehabilitation services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21291,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa mieszkańców domu pomocy społecznej.",
                    "en" => "Ensuring the safety of residents in the social welfare home."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21292,
                "name" => json_encode([
                    "pl" => "Organizacja zajęć integracyjnych i kulturalnych dla mieszkańców.",
                    "en" => "Organizing integration and cultural activities for residents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21293,
                "name" => json_encode([
                    "pl" => "Zarządzanie budżetem placówki i współpraca z instytucjami wspierającymi.",
                    "en" => "Managing the facility's budget and cooperating with supporting institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_DZIAŁU_W_INSTYTUCJACH_POMOCY_SPOŁECZNEJ = [

            [
                'id' => 21294,
                "name" => json_encode([
                    "pl" => "Koordynowanie pracy zespołów pomocy społecznej.",
                    "en" => "Coordinating the work of social assistance teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21295,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie programów wspierających potrzebujących.",
                    "en" => "Developing and implementing programs to support those in need."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21296,
                "name" => json_encode([
                    "pl" => "Monitorowanie realizacji projektów pomocy społecznej.",
                    "en" => "Monitoring the implementation of social assistance projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21297,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami lokalnymi i organizacjami społecznymi.",
                    "en" => "Collaborating with local institutions and social organizations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21298,
                "name" => json_encode([
                    "pl" => "Zarządzanie budżetem działu pomocy społecznej.",
                    "en" => "Managing the budget of the social assistance department."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21299,
                "name" => json_encode([
                    "pl" => "Organizowanie szkoleń dla pracowników działu pomocy społecznej.",
                    "en" => "Organizing training sessions for social assistance department staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_OŚRODKA_POMOCY_RODZINIE = [

            [
                'id' => 21300,
                "name" => json_encode([
                    "pl" => "Zarządzanie działalnością ośrodka pomocy rodzinie.",
                    "en" => "Managing the operations of a family assistance center."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21301,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii wspierania rodzin w trudnej sytuacji.",
                    "en" => "Developing strategies to support families in difficult situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21302,
                "name" => json_encode([
                    "pl" => "Monitorowanie realizacji programów wsparcia dla rodzin.",
                    "en" => "Monitoring the implementation of family support programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21303,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań zespołów pomocy rodzinie.",
                    "en" => "Coordinating the activities of family assistance teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21304,
                "name" => json_encode([
                    "pl" => "Współpraca z lokalnymi instytucjami i organizacjami wspierającymi.",
                    "en" => "Collaborating with local institutions and supporting organizations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21305,
                "name" => json_encode([
                    "pl" => "Organizacja zajęć edukacyjnych i terapeutycznych dla rodzin.",
                    "en" => "Organizing educational and therapeutic activities for families."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KIEROWNICY_W_INSTYTUCJACH_POMOCY_SPOŁECZNEJ = [

            [
                'id' => 21306,
                "name" => json_encode([
                    "pl" => "Nadzorowanie realizacji usług pomocy społecznej w instytucji.",
                    "en" => "Overseeing the provision of social assistance services within the institution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21307,
                "name" => json_encode([
                    "pl" => "Planowanie i wdrażanie programów wsparcia społecznego.",
                    "en" => "Planning and implementing social support programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21308,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników opieki społecznej.",
                    "en" => "Managing a team of social care workers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21309,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości i skuteczności świadczonych usług.",
                    "en" => "Monitoring the quality and effectiveness of provided services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21310,
                "name" => json_encode([
                    "pl" => "Koordynowanie współpracy z organizacjami pozarządowymi i instytucjami lokalnymi.",
                    "en" => "Coordinating collaboration with NGOs and local institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21311,
                "name" => json_encode([
                    "pl" => "Organizowanie szkoleń i wsparcia dla personelu.",
                    "en" => "Organizing training and support for staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KIEROWNICY_W_INSTYTUCJACH_EDUKACYJNYCH = [

            [
                'id' => 21312,
                "name" => json_encode([
                    "pl" => "Planowanie i koordynowanie działalności edukacyjnej instytucji.",
                    "en" => "Planning and coordinating the educational activities of the institution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21313,
                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją programów nauczania.",
                    "en" => "Supervising the implementation of teaching programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21314,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pedagogicznym i administracyjnym.",
                    "en" => "Managing the teaching and administrative staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21315,
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności z przepisami prawnymi dotyczącymi edukacji.",
                    "en" => "Ensuring compliance with legal regulations related to education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21316,
                "name" => json_encode([
                    "pl" => "Monitorowanie wyników nauczania i rozwoju uczniów.",
                    "en" => "Monitoring teaching outcomes and student development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21317,
                "name" => json_encode([
                    "pl" => "Współpraca z rodzicami, nauczycielami i instytucjami oświatowymi.",
                    "en" => "Collaborating with parents, teachers, and educational institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ARCHIWISTA = [

            [
                'id' => 21318,
                "name" => json_encode([
                    "pl" => "Gromadzenie, przechowywanie i zabezpieczanie dokumentów historycznych i bieżących.",
                    "en" => "Collecting, storing, and securing historical and current documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21319,
                "name" => json_encode([
                    "pl" => "Opracowywanie zasobów archiwalnych i przygotowywanie inwentarzy.",
                    "en" => "Processing archival resources and preparing inventories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21320,
                "name" => json_encode([
                    "pl" => "Udostępnianie zbiorów archiwalnych użytkownikom.",
                    "en" => "Providing access to archival collections to users."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21321,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji archiwalnej i katalogowanie zbiorów.",
                    "en" => "Maintaining archival documentation and cataloging collections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21322,
                "name" => json_encode([
                    "pl" => "Organizacja wystaw i wydarzeń promujących archiwa.",
                    "en" => "Organizing exhibitions and events promoting archives."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21323,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami naukowymi i kulturalnymi.",
                    "en" => "Collaborating with scientific and cultural institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MUZEALNIK = [

            [
                'id' => 21324,
                "name" => json_encode([
                    "pl" => "Gromadzenie, dokumentowanie i przechowywanie eksponatów muzealnych.",
                    "en" => "Collecting, documenting, and storing museum exhibits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21325,
                "name" => json_encode([
                    "pl" => "Organizacja wystaw stałych i czasowych.",
                    "en" => "Organizing permanent and temporary exhibitions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21326,
                "name" => json_encode([
                    "pl" => "Tworzenie opisów eksponatów i przygotowywanie materiałów edukacyjnych.",
                    "en" => "Creating exhibit descriptions and preparing educational materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21327,
                "name" => json_encode([
                    "pl" => "Prowadzenie działalności popularyzatorskiej i edukacyjnej.",
                    "en" => "Conducting promotional and educational activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21328,
                "name" => json_encode([
                    "pl" => "Opracowywanie eksponatów do digitalizacji i katalogowania.",
                    "en" => "Preparing exhibits for digitization and cataloging."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21329,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi muzeami i instytucjami kulturalnymi.",
                    "en" => "Collaborating with other museums and cultural institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ARCHIWISTA_DOKUMENTÓW_ELEKTRONICZNYCH = [

            [
                'id' => 21330,
                "name" => json_encode([
                    "pl" => "Tworzenie i zarządzanie elektronicznymi archiwami dokumentów.",
                    "en" => "Creating and managing electronic document archives."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21331,
                "name" => json_encode([
                    "pl" => "Digitalizacja dokumentów i ich przechowywanie w systemach elektronicznych.",
                    "en" => "Digitizing documents and storing them in electronic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21332,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa i integralności cyfrowych zbiorów.",
                    "en" => "Ensuring the security and integrity of digital collections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21333,
                "name" => json_encode([
                    "pl" => "Tworzenie metadanych dla dokumentów cyfrowych.",
                    "en" => "Creating metadata for digital documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21334,
                "name" => json_encode([
                    "pl" => "Wdrażanie systemów do zarządzania dokumentacją elektroniczną.",
                    "en" => "Implementing systems for managing electronic documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21335,
                "name" => json_encode([
                    "pl" => "Współpraca z informatykami w celu utrzymania archiwów cyfrowych.",
                    "en" => "Collaborating with IT specialists to maintain digital archives."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ARCHIWISTA_ZAKŁADOWY = [

            [
                'id' => 21336,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją zakładową zgodnie z obowiązującymi przepisami.",
                    "en" => "Managing company documentation in compliance with regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21337,
                "name" => json_encode([
                    "pl" => "Tworzenie harmonogramów przechowywania dokumentów.",
                    "en" => "Creating schedules for document retention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21338,
                "name" => json_encode([
                    "pl" => "Opracowywanie i klasyfikowanie dokumentacji.",
                    "en" => "Processing and classifying documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21339,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentów do przekazania do archiwum państwowego.",
                    "en" => "Preparing documents for transfer to the state archive."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21340,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej archiwum zakładowego.",
                    "en" => "Maintaining records related to the company archive."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21341,
                "name" => json_encode([
                    "pl" => "Współpraca z działami zakładu w zakresie przechowywania dokumentów.",
                    "en" => "Collaborating with company departments regarding document storage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ARCHIWISTA = [

            [
                'id' => 21342,
                "name" => json_encode([
                    "pl" => "Wspieranie procesów archiwizacyjnych w instytucji.",
                    "en" => "Supporting archival processes in the institution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21343,
                "name" => json_encode([
                    "pl" => "Przygotowywanie i porządkowanie dokumentacji do archiwizacji.",
                    "en" => "Preparing and organizing documentation for archiving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21344,
                "name" => json_encode([
                    "pl" => "Tworzenie opisów i inwentarzy zbiorów archiwalnych.",
                    "en" => "Creating descriptions and inventories of archival collections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21345,
                "name" => json_encode([
                    "pl" => "Udostępnianie dokumentów na potrzeby instytucji i użytkowników.",
                    "en" => "Providing documents for institutional and user needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21346,
                "name" => json_encode([
                    "pl" => "Pomoc w digitalizacji zbiorów archiwalnych.",
                    "en" => "Assisting in the digitization of archival collections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21347,
                "name" => json_encode([
                    "pl" => "Współpraca z archiwistami w zakresie zabezpieczania dokumentów.",
                    "en" => "Collaborating with archivists in securing documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_TECHNICY_ARCHIWIŚCI_I_POKREWNI = [

            [
                'id' => 21348,
                "name" => json_encode([
                    "pl" => "Wsparcie administracyjne w prowadzeniu archiwum.",
                    "en" => "Providing administrative support in managing the archive."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21349,
                "name" => json_encode([
                    "pl" => "Obsługa użytkowników korzystających z archiwaliów.",
                    "en" => "Assisting users accessing archival materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21350,
                "name" => json_encode([
                    "pl" => "Organizacja i zabezpieczanie dokumentów w magazynach archiwalnych.",
                    "en" => "Organizing and securing documents in archival storage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21351,
                "name" => json_encode([
                    "pl" => "Tworzenie kopii zapasowych zbiorów archiwalnych.",
                    "en" => "Creating backups of archival collections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21352,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowywaniu wystaw archiwalnych.",
                    "en" => "Assisting in preparing archival exhibitions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21353,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technologii w pracy archiwalnej.",
                    "en" => "Implementing new technologies in archival work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BIBLIOTEKARZ = [

            [
                'id' => 21354,
                "name" => json_encode([
                    "pl" => "Zarządzanie zbiorami bibliotecznymi, w tym katalogowanie i klasyfikacja.",
                    "en" => "Managing library collections, including cataloging and classification."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21355,
                "name" => json_encode([
                    "pl" => "Obsługa użytkowników biblioteki i pomoc w wyszukiwaniu informacji.",
                    "en" => "Assisting library users and helping them find information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21356,
                "name" => json_encode([
                    "pl" => "Organizacja wydarzeń i spotkań promujących czytelnictwo.",
                    "en" => "Organizing events and meetings to promote reading."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21357,
                "name" => json_encode([
                    "pl" => "Digitalizacja zbiorów bibliotecznych i zarządzanie zasobami online.",
                    "en" => "Digitizing library collections and managing online resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21358,
                "name" => json_encode([
                    "pl" => "Prowadzenie inwentaryzacji i kontroli zbiorów bibliotecznych.",
                    "en" => "Conducting inventory and control of library collections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21359,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi bibliotekami oraz instytucjami edukacyjnymi.",
                    "en" => "Collaborating with other libraries and educational institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_GALERII_MUZEUM = [

            [
                'id' => 21360,
                "name" => json_encode([
                    "pl" => "Obsługa zwiedzających i udzielanie informacji o wystawach.",
                    "en" => "Assisting visitors and providing information about exhibitions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21361,
                "name" => json_encode([
                    "pl" => "Zabezpieczanie eksponatów oraz monitorowanie przestrzeni wystawowej.",
                    "en" => "Securing exhibits and monitoring the exhibition area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21362,
                "name" => json_encode([
                    "pl" => "Przygotowywanie materiałów promocyjnych związanych z wystawami.",
                    "en" => "Preparing promotional materials related to exhibitions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21363,
                "name" => json_encode([
                    "pl" => "Prowadzenie warsztatów edukacyjnych dla różnych grup wiekowych.",
                    "en" => "Conducting educational workshops for various age groups."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21364,
                "name" => json_encode([
                    "pl" => "Współpraca z kuratorami wystaw i instytucjami kulturalnymi.",
                    "en" => "Collaborating with exhibition curators and cultural institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21365,
                "name" => json_encode([
                    "pl" => "Dokumentowanie i aktualizacja bazy danych eksponatów.",
                    "en" => "Documenting and updating the exhibit database."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_INFORMACJI_NAUKOWEJ = [

            [
                'id' => 21366,
                "name" => json_encode([
                    "pl" => "Gromadzenie i opracowywanie źródeł informacji naukowej.",
                    "en" => "Collecting and processing sources of scientific information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21367,
                "name" => json_encode([
                    "pl" => "Tworzenie i zarządzanie bazami danych informacji naukowej.",
                    "en" => "Creating and managing scientific information databases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21368,
                "name" => json_encode([
                    "pl" => "Udostępnianie informacji naukowej użytkownikom.",
                    "en" => "Providing scientific information to users."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21369,
                "name" => json_encode([
                    "pl" => "Pomoc w wyszukiwaniu literatury naukowej i danych badawczych.",
                    "en" => "Assisting in finding scientific literature and research data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21370,
                "name" => json_encode([
                    "pl" => "Współpraca z bibliotekami i instytucjami badawczymi.",
                    "en" => "Collaborating with libraries and research institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21371,
                "name" => json_encode([
                    "pl" => "Digitalizacja dokumentów naukowych i ich archiwizacja.",
                    "en" => "Digitizing and archiving scientific documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DORADCA_DO_SPRAW_ZASOBÓW_BIBLIOTECZNYCH = [

            [
                'id' => 21372,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie gromadzenia i selekcji zbiorów bibliotecznych.",
                    "en" => "Advising on the collection and selection of library resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21373,
                "name" => json_encode([
                    "pl" => "Analiza potrzeb użytkowników i dostosowanie zasobów bibliotecznych.",
                    "en" => "Analyzing user needs and adapting library resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21374,
                "name" => json_encode([
                    "pl" => "Wdrażanie strategii zarządzania zasobami bibliotecznymi.",
                    "en" => "Implementing strategies for managing library resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21375,
                "name" => json_encode([
                    "pl" => "Organizowanie szkoleń dla bibliotekarzy dotyczących zasobów.",
                    "en" => "Organizing training sessions for librarians about resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21376,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów i analiz dotyczących efektywności wykorzystania zasobów.",
                    "en" => "Creating reports and analyses on the effectiveness of resource utilization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21377,
                "name" => json_encode([
                    "pl" => "Monitorowanie trendów i nowości w zakresie publikacji i źródeł informacji.",
                    "en" => "Monitoring trends and new developments in publications and information sources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_PRACOWNICY_BIBLIOTEK_GALERII_MUZEÓW_INFORMACJI_NAUKOWEJ_I_POKREWNI = [

            [
                'id' => 21378,
                "name" => json_encode([
                    "pl" => "Wspieranie działań organizacyjnych w bibliotekach, muzeach i galeriach.",
                    "en" => "Supporting organizational activities in libraries, museums, and galleries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21379,
                "name" => json_encode([
                    "pl" => "Przygotowywanie materiałów informacyjnych i promocyjnych.",
                    "en" => "Preparing informational and promotional materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21380,
                "name" => json_encode([
                    "pl" => "Obsługa klientów i odwiedzających placówki kulturalne.",
                    "en" => "Serving customers and visitors in cultural institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21381,
                "name" => json_encode([
                    "pl" => "Współpraca przy organizacji wystaw i wydarzeń kulturalnych.",
                    "en" => "Collaborating on organizing exhibitions and cultural events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21382,
                "name" => json_encode([
                    "pl" => "Pomoc w digitalizacji i archiwizacji materiałów.",
                    "en" => "Assisting in digitizing and archiving materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21383,
                "name" => json_encode([
                    "pl" => "Zabezpieczanie i konserwacja zasobów kulturalnych.",
                    "en" => "Securing and preserving cultural resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POMOCNICY_BIBLIOTECZNI = [

            [
                'id' => 21384,
                "name" => json_encode([
                    "pl" => "Pomoc w rozmieszczaniu książek i innych materiałów na półkach.",
                    "en" => "Assisting in shelving books and other materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21385,
                "name" => json_encode([
                    "pl" => "Wsparcie użytkowników biblioteki w wyszukiwaniu materiałów.",
                    "en" => "Supporting library users in locating materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21386,
                "name" => json_encode([
                    "pl" => "Przygotowywanie książek do wypożyczeń i zwrotów.",
                    "en" => "Preparing books for loans and returns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21387,
                "name" => json_encode([
                    "pl" => "Pomoc w organizacji wydarzeń bibliotecznych i warsztatów.",
                    "en" => "Assisting in organizing library events and workshops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21388,
                "name" => json_encode([
                    "pl" => "Obsługa podstawowych systemów bibliotecznych i komputerów.",
                    "en" => "Operating basic library systems and computers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21389,
                "name" => json_encode([
                    "pl" => "Zapewnienie porządku i organizacji w przestrzeni biblioteki.",
                    "en" => "Maintaining order and organization in the library space."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ANALITYK_INFORMACJI_I_RAPORTÓW_MEDIALNYCH = [

            [
                'id' => 21390,
                "name" => json_encode([
                    "pl" => "Analiza danych medialnych i tworzenie raportów tematycznych.",
                    "en" => "Analyzing media data and creating thematic reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21391,
                "name" => json_encode([
                    "pl" => "Monitorowanie publikacji w mediach tradycyjnych i cyfrowych.",
                    "en" => "Monitoring publications in traditional and digital media."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21392,
                "name" => json_encode([
                    "pl" => "Tworzenie zestawień i analiz trendów medialnych.",
                    "en" => "Creating summaries and analyses of media trends."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21393,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami badawczymi i marketingowymi.",
                    "en" => "Collaborating with research and marketing teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21394,
                "name" => json_encode([
                    "pl" => "Przygotowywanie prognoz na podstawie analiz medialnych.",
                    "en" => "Preparing forecasts based on media analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21395,
                "name" => json_encode([
                    "pl" => "Zarządzanie bazami danych medialnych i informacji.",
                    "en" => "Managing media and information databases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BIBLIOTEKOZNAWCA = [

            [
                'id' => 21396,
                "name" => json_encode([
                    "pl" => "Prowadzenie badań naukowych z zakresu bibliotekoznawstwa.",
                    "en" => "Conducting scientific research in the field of library science."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21397,
                "name" => json_encode([
                    "pl" => "Opracowywanie publikacji dotyczących systemów bibliotecznych.",
                    "en" => "Preparing publications on library systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21398,
                "name" => json_encode([
                    "pl" => "Projektowanie i rozwijanie systemów zarządzania bibliotekami.",
                    "en" => "Designing and developing library management systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21399,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie modernizacji bibliotek i technologii informacyjnych.",
                    "en" => "Advising on library modernization and information technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21400,
                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń dla bibliotekarzy i specjalistów informacji.",
                    "en" => "Conducting training for librarians and information specialists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21401,
                "name" => json_encode([
                    "pl" => "Analiza i ocena efektywności systemów informacyjnych bibliotek.",
                    "en" => "Analyzing and assessing the effectiveness of library information systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BROKER_INFORMACJI_RESEARCHER = [

            [
                'id' => 21402,
                "name" => json_encode([
                    "pl" => "Gromadzenie i analiza danych z różnych źródeł.",
                    "en" => "Collecting and analyzing data from various sources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21403,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów na podstawie zgromadzonych informacji.",
                    "en" => "Creating reports based on gathered information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21404,
                "name" => json_encode([
                    "pl" => "Weryfikacja wiarygodności źródeł i informacji.",
                    "en" => "Verifying the credibility of sources and information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21405,
                "name" => json_encode([
                    "pl" => "Monitorowanie trendów rynkowych i naukowych.",
                    "en" => "Monitoring market and scientific trends."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21406,
                "name" => json_encode([
                    "pl" => "Dostarczanie klientom gotowych analiz i zestawień.",
                    "en" => "Providing clients with ready-made analyses and summaries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21407,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami badawczymi i marketingowymi.",
                    "en" => "Collaborating with research and marketing teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_INFORMACJI_NAUKOWEJ_TECHNICZNEJ_I_EKONOMICZNEJ = [

            [
                'id' => 21408,
                "name" => json_encode([
                    "pl" => "Analiza i interpretacja danych naukowych, technicznych i ekonomicznych.",
                    "en" => "Analyzing and interpreting scientific, technical, and economic data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21409,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów i zestawień na podstawie zgromadzonych danych.",
                    "en" => "Creating reports and summaries based on collected data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21410,
                "name" => json_encode([
                    "pl" => "Zarządzanie bazami danych informacji specjalistycznej.",
                    "en" => "Managing databases of specialized information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21411,
                "name" => json_encode([
                    "pl" => "Współpraca z naukowcami, inżynierami i ekonomistami.",
                    "en" => "Collaborating with scientists, engineers, and economists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21412,
                "name" => json_encode([
                    "pl" => "Tworzenie strategii dostępu do informacji dla organizacji.",
                    "en" => "Creating strategies for organizational information access."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21413,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie wykorzystania informacji specjalistycznej.",
                    "en" => "Advising on the use of specialized information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_ZARZĄDZANIA_INFORMACJĄ = [

            [
                'id' => 21414,
                "name" => json_encode([
                    "pl" => "Projektowanie i wdrażanie systemów zarządzania informacją.",
                    "en" => "Designing and implementing information management systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21415,
                "name" => json_encode([
                    "pl" => "Tworzenie polityk dotyczących przechowywania i udostępniania informacji.",
                    "en" => "Creating policies on information storage and sharing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21416,
                "name" => json_encode([
                    "pl" => "Analiza potrzeb informacyjnych organizacji.",
                    "en" => "Analyzing the information needs of the organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21417,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem przepływu informacji w firmie.",
                    "en" => "Managing the flow of information within the company."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21418,
                "name" => json_encode([
                    "pl" => "Opracowywanie standardów przechowywania dokumentacji.",
                    "en" => "Developing standards for documentation storage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21419,
                "name" => json_encode([
                    "pl" => "Współpraca z działami IT i zarządzania danymi.",
                    "en" => "Collaborating with IT and data management departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_ZARZĄDZANIA_DOKUMENTACJĄ = [

            [
                'id' => 21420,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie systemów zarządzania dokumentacją.",
                    "en" => "Developing and implementing document management systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21421,
                "name" => json_encode([
                    "pl" => "Tworzenie zasad przechowywania i archiwizacji dokumentów.",
                    "en" => "Establishing rules for document storage and archiving."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21422,
                "name" => json_encode([
                    "pl" => "Monitorowanie zgodności z przepisami dotyczącymi zarządzania dokumentacją.",
                    "en" => "Monitoring compliance with regulations related to document management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21423,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników w zakresie zarządzania dokumentacją.",
                    "en" => "Training employees in document management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21424,
                "name" => json_encode([
                    "pl" => "Digitalizacja dokumentacji i zarządzanie cyfrowymi zasobami.",
                    "en" => "Digitizing documentation and managing digital resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21425,
                "name" => json_encode([
                    "pl" => "Tworzenie procedur zabezpieczania dokumentów przed utratą lub zniszczeniem.",
                    "en" => "Developing procedures to protect documents from loss or destruction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_FILozofowie_HISTORYCY_I_POLITOLODZY = [

            [
                'id' => 21426,
                "name" => json_encode([
                    "pl" => "Prowadzenie badań naukowych w dziedzinach filozofii, historii lub politologii.",
                    "en" => "Conducting scientific research in philosophy, history, or political science."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21427,
                "name" => json_encode([
                    "pl" => "Opracowywanie publikacji naukowych i popularnonaukowych.",
                    "en" => "Preparing scientific and popular science publications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21428,
                "name" => json_encode([
                    "pl" => "Analiza i interpretacja źródeł historycznych oraz materiałów filozoficznych.",
                    "en" => "Analyzing and interpreting historical sources and philosophical materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21429,
                "name" => json_encode([
                    "pl" => "Wykładanie na uczelniach wyższych i prowadzenie zajęć edukacyjnych.",
                    "en" => "Lecturing at universities and conducting educational classes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21430,
                "name" => json_encode([
                    "pl" => "Udział w konferencjach naukowych i debatach publicznych.",
                    "en" => "Participating in scientific conferences and public debates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21431,
                "name" => json_encode([
                    "pl" => "Tworzenie programów edukacyjnych i materiałów dydaktycznych.",
                    "en" => "Developing educational programs and teaching materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ARCHEOLODZY_SOCJOLODZY_I_SPECJALIŚCI_DZIEDZIN_POKREWNYCH = [

            [
                'id' => 21432,
                "name" => json_encode([
                    "pl" => "Prowadzenie badań terenowych i opracowywanie raportów archeologicznych lub socjologicznych.",
                    "en" => "Conducting fieldwork and preparing archaeological or sociological reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21433,
                "name" => json_encode([
                    "pl" => "Analiza danych społecznych, kulturowych i historycznych.",
                    "en" => "Analyzing social, cultural, and historical data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21434,
                "name" => json_encode([
                    "pl" => "Współpraca z muzeami, uniwersytetami i instytucjami badawczymi.",
                    "en" => "Collaborating with museums, universities, and research institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21435,
                "name" => json_encode([
                    "pl" => "Przygotowywanie publikacji naukowych i raportów badawczych.",
                    "en" => "Preparing scientific publications and research reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21436,
                "name" => json_encode([
                    "pl" => "Projektowanie i wdrażanie badań terenowych oraz ankiet społecznych.",
                    "en" => "Designing and implementing field studies and social surveys."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21437,
                "name" => json_encode([
                    "pl" => "Organizacja warsztatów i seminariów dotyczących dziedzictwa kulturowego.",
                    "en" => "Organizing workshops and seminars on cultural heritage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DZIENNIKARZ = [

            [
                'id' => 21438,
                "name" => json_encode([
                    "pl" => "Zbieranie informacji i przeprowadzanie wywiadów w celu tworzenia materiałów prasowych.",
                    "en" => "Collecting information and conducting interviews to create press materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21439,
                "name" => json_encode([
                    "pl" => "Tworzenie artykułów, reportaży i felietonów do publikacji w mediach.",
                    "en" => "Writing articles, reports, and columns for publication in media."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21440,
                "name" => json_encode([
                    "pl" => "Redagowanie i sprawdzanie tekstów przed publikacją.",
                    "en" => "Editing and proofreading texts before publication."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21441,
                "name" => json_encode([
                    "pl" => "Monitorowanie aktualnych wydarzeń i trendów społecznych.",
                    "en" => "Monitoring current events and social trends."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21442,
                "name" => json_encode([
                    "pl" => "Współpraca z redakcją i działami produkcji medialnej.",
                    "en" => "Collaborating with the editorial team and media production departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21443,
                "name" => json_encode([
                    "pl" => "Tworzenie materiałów multimedialnych, takich jak podcasty czy wideo.",
                    "en" => "Creating multimedia content such as podcasts and videos."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FOTOEDYTOR = [

            [
                'id' => 21444,
                "name" => json_encode([
                    "pl" => "Selekcja i przygotowywanie zdjęć do publikacji w mediach.",
                    "en" => "Selecting and preparing photographs for media publication."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21445,
                "name" => json_encode([
                    "pl" => "Koordynacja pracy fotografów i zarządzanie harmonogramami sesji zdjęciowych.",
                    "en" => "Coordinating photographers and managing photography schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21446,
                "name" => json_encode([
                    "pl" => "Edycja zdjęć przy użyciu oprogramowania graficznego.",
                    "en" => "Editing photographs using graphic software."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21447,
                "name" => json_encode([
                    "pl" => "Tworzenie kompozycji wizualnych na potrzeby artykułów i reportaży.",
                    "en" => "Creating visual compositions for articles and reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21448,
                "name" => json_encode([
                    "pl" => "Archiwizacja zdjęć i zarządzanie bazą danych fotografii.",
                    "en" => "Archiving photographs and managing a photography database."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21449,
                "name" => json_encode([
                    "pl" => "Współpraca z redaktorami i grafikami przy tworzeniu materiałów wizualnych.",
                    "en" => "Collaborating with editors and graphic designers on visual materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KRYTYK_ARTYSTYCZNY = [

            [
                'id' => 21450,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz i oceny dzieł artystycznych, takich jak filmy, obrazy, czy spektakle teatralne.",
                    "en" => "Conducting analyses and evaluations of artistic works, such as films, paintings, or theater performances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21451,
                "name" => json_encode([
                    "pl" => "Publikowanie recenzji i artykułów w mediach drukowanych oraz online.",
                    "en" => "Publishing reviews and articles in print and online media."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21452,
                "name" => json_encode([
                    "pl" => "Udział w wydarzeniach artystycznych, takich jak wernisaże, premiery i festiwale.",
                    "en" => "Participating in artistic events, such as exhibitions, premieres, and festivals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21453,
                "name" => json_encode([
                    "pl" => "Prowadzenie dyskusji i paneli tematycznych dotyczących sztuki.",
                    "en" => "Leading discussions and thematic panels on art."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21454,
                "name" => json_encode([
                    "pl" => "Tworzenie analiz trendów artystycznych i rekomendacji dla publiczności.",
                    "en" => "Creating analyses of artistic trends and recommendations for the audience."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21455,
                "name" => json_encode([
                    "pl" => "Współpraca z mediami i instytucjami kulturalnymi.",
                    "en" => "Collaborating with media and cultural institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $REDAKTOR_PROGRAMOWY = [

            [
                'id' => 21456,
                "name" => json_encode([
                    "pl" => "Planowanie i koordynacja ramówki programowej stacji telewizyjnej lub radiowej.",
                    "en" => "Planning and coordinating the programming schedule of a TV or radio station."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21457,
                "name" => json_encode([
                    "pl" => "Dobór i akceptacja treści programowych zgodnie z polityką redakcyjną.",
                    "en" => "Selecting and approving program content in line with editorial policy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21458,
                "name" => json_encode([
                    "pl" => "Współpraca z producentami i twórcami programów.",
                    "en" => "Collaborating with producers and program creators."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21459,
                "name" => json_encode([
                    "pl" => "Monitorowanie oglądalności i słuchalności programów.",
                    "en" => "Monitoring the viewership and listenership of programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21460,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów i analiz dotyczących realizacji ramówki.",
                    "en" => "Preparing reports and analyses on schedule implementation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21461,
                "name" => json_encode([
                    "pl" => "Dostosowywanie ramówki do zmian rynkowych i preferencji odbiorców.",
                    "en" => "Adjusting the schedule to market changes and audience preferences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $REPORTER_RADIOWY_TELEWIZYJNY_PRASOWY = [

            [
                'id' => 21462,
                "name" => json_encode([
                    "pl" => "Zbieranie informacji i materiałów do reportaży w terenie.",
                    "en" => "Gathering information and materials for reports in the field."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21463,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie wywiadów z bohaterami i ekspertami.",
                    "en" => "Conducting interviews with subjects and experts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21464,
                "name" => json_encode([
                    "pl" => "Tworzenie reportaży audio, wideo lub tekstowych.",
                    "en" => "Producing audio, video, or text reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21465,
                "name" => json_encode([
                    "pl" => "Relacjonowanie wydarzeń na żywo, takich jak konferencje i protesty.",
                    "en" => "Providing live coverage of events such as conferences and protests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21466,
                "name" => json_encode([
                    "pl" => "Przygotowywanie materiałów multimedialnych na potrzeby redakcji.",
                    "en" => "Preparing multimedia materials for editorial use."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21467,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem technicznym podczas realizacji nagrań.",
                    "en" => "Collaborating with the technical team during recordings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KRYTYK_KULINARNY = [

            [
                'id' => 21468,
                "name" => json_encode([
                    "pl" => "Degustacja potraw i ocena ich smaku, prezentacji oraz jakości składników.",
                    "en" => "Tasting dishes and evaluating their flavor, presentation, and ingredient quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21469,
                "name" => json_encode([
                    "pl" => "Pisanie recenzji restauracji i lokali gastronomicznych.",
                    "en" => "Writing reviews of restaurants and dining establishments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21470,
                "name" => json_encode([
                    "pl" => "Badanie trendów kulinarnych i nowości na rynku gastronomicznym.",
                    "en" => "Researching culinary trends and innovations in the food market."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21471,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie wywiadów z szefami kuchni i właścicielami restauracji.",
                    "en" => "Conducting interviews with chefs and restaurant owners."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21472,
                "name" => json_encode([
                    "pl" => "Publikowanie przewodników kulinarnych i rekomendacji dla czytelników.",
                    "en" => "Publishing culinary guides and recommendations for readers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21473,
                "name" => json_encode([
                    "pl" => "Udział w programach kulinarnych i wydarzeniach branżowych.",
                    "en" => "Participating in culinary programs and industry events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $REDAKTOR_SERWISU_INTERNETOWEGO = [

            [
                'id' => 21474,
                "name" => json_encode([
                    "pl" => "Tworzenie i publikowanie treści na stronach internetowych.",
                    "en" => "Creating and publishing content on websites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21475,
                "name" => json_encode([
                    "pl" => "Redagowanie tekstów pod kątem SEO i zgodności z polityką serwisu.",
                    "en" => "Editing texts for SEO and compliance with website policy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21476,
                "name" => json_encode([
                    "pl" => "Monitorowanie treści użytkowników i moderowanie komentarzy.",
                    "en" => "Monitoring user content and moderating comments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21477,
                "name" => json_encode([
                    "pl" => "Analiza ruchu na stronie i optymalizacja treści.",
                    "en" => "Analyzing website traffic and optimizing content."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21478,
                "name" => json_encode([
                    "pl" => "Współpraca z grafikami i programistami w celu ulepszania serwisu.",
                    "en" => "Collaborating with graphic designers and programmers to improve the site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21479,
                "name" => json_encode([
                    "pl" => "Planowanie kampanii marketingowych i promocyjnych w sieci.",
                    "en" => "Planning online marketing and promotional campaigns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_DZIENNIKARZE = [

            [
                'id' => 21480,
                "name" => json_encode([
                    "pl" => "Tworzenie treści informacyjnych i opiniotwórczych dla różnych mediów.",
                    "en" => "Creating informational and opinion-forming content for various media."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21481,
                "name" => json_encode([
                    "pl" => "Realizacja materiałów dziennikarskich w terenie i redakcji.",
                    "en" => "Producing journalistic materials in the field and editorial office."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21482,
                "name" => json_encode([
                    "pl" => "Monitorowanie bieżących wydarzeń i ich dokumentowanie.",
                    "en" => "Monitoring current events and documenting them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21483,
                "name" => json_encode([
                    "pl" => "Prowadzenie wywiadów z różnorodnymi osobami publicznymi.",
                    "en" => "Conducting interviews with various public figures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21484,
                "name" => json_encode([
                    "pl" => "Pisanie analiz i raportów dotyczących aktualnych tematów społecznych.",
                    "en" => "Writing analyses and reports on current social topics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21485,
                "name" => json_encode([
                    "pl" => "Publikowanie treści w formie tekstowej, audio lub wideo.",
                    "en" => "Publishing content in text, audio, or video format."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $REDAKTOR_NACZELNY = [

            [
                'id' => 21486,
                "name" => json_encode([
                    "pl" => "Nadzorowanie i koordynowanie pracy redakcji.",
                    "en" => "Overseeing and coordinating editorial work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21487,
                "name" => json_encode([
                    "pl" => "Decydowanie o zawartości i kierunku redakcyjnym publikacji.",
                    "en" => "Deciding on the content and editorial direction of publications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21488,
                "name" => json_encode([
                    "pl" => "Reprezentowanie redakcji w kontaktach z mediami i partnerami biznesowymi.",
                    "en" => "Representing the editorial team in media and business partner relations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21489,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii rozwoju publikacji i jej promocji.",
                    "en" => "Developing strategies for publication growth and promotion."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21490,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem redakcyjnym, w tym rekrutacja i szkolenia.",
                    "en" => "Managing the editorial team, including recruitment and training."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21491,
                "name" => json_encode([
                    "pl" => "Monitorowanie wyników publikacji i analizowanie ich odbioru przez czytelników.",
                    "en" => "Monitoring publication performance and analyzing reader feedback."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MENEDŻER_ZAWARTOŚCI_SERWISÓW_INTERNETOWYCH = [

            [
                'id' => 21492,
                "name" => json_encode([
                    "pl" => "Zarządzanie treściami publikowanymi w serwisie internetowym.",
                    "en" => "Managing content published on the website."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21493,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii treści w celu zwiększenia zaangażowania użytkowników.",
                    "en" => "Developing content strategies to increase user engagement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21494,
                "name" => json_encode([
                    "pl" => "Analiza danych dotyczących ruchu na stronie i optymalizacja treści.",
                    "en" => "Analyzing website traffic data and optimizing content."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21495,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem marketingowym i IT w celu wdrażania innowacji.",
                    "en" => "Collaborating with marketing and IT teams to implement innovations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21496,
                "name" => json_encode([
                    "pl" => "Monitorowanie trendów rynkowych i dostosowywanie treści do potrzeb użytkowników.",
                    "en" => "Monitoring market trends and tailoring content to user needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21497,
                "name" => json_encode([
                    "pl" => "Zarządzanie budżetem na produkcję treści i kampanie online.",
                    "en" => "Managing the budget for content production and online campaigns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_PREZENTERZY_RADIOWI_TELEWIZYJNI_I_POKREWNI = [

            [
                'id' => 21498,
                "name" => json_encode([
                    "pl" => "Prowadzenie programów radiowych lub telewizyjnych na żywo i nagranych.",
                    "en" => "Hosting live and recorded radio or television programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21499,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie wywiadów z zaproszonymi gośćmi w studio lub zdalnie.",
                    "en" => "Conducting interviews with invited guests in the studio or remotely."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21500,
                "name" => json_encode([
                    "pl" => "Przygotowywanie skryptów i materiałów do prowadzenia programów.",
                    "en" => "Preparing scripts and materials for program hosting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21501,
                "name" => json_encode([
                    "pl" => "Utrzymywanie kontaktu z publicznością poprzez interakcje na antenie.",
                    "en" => "Engaging with the audience through on-air interactions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21502,
                "name" => json_encode([
                    "pl" => "Współpraca z producentami i zespołem technicznym w trakcie realizacji audycji.",
                    "en" => "Collaborating with producers and technical teams during broadcasts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21503,
                "name" => json_encode([
                    "pl" => "Promowanie programów w mediach społecznościowych i na platformach online.",
                    "en" => "Promoting programs on social media and online platforms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ORGANIZATOR_IMPREZ_ROZRYWKOWYCH = [

            [
                'id' => 21504,
                "name" => json_encode([
                    "pl" => "Planowanie i koordynowanie wszystkich aspektów organizacji wydarzenia.",
                    "en" => "Planning and coordinating all aspects of event organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21505,
                "name" => json_encode([
                    "pl" => "Wybór i rezerwacja odpowiedniego miejsca na wydarzenie.",
                    "en" => "Selecting and booking the appropriate venue for the event."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21506,
                "name" => json_encode([
                    "pl" => "Zarządzanie budżetem i negocjowanie umów z dostawcami.",
                    "en" => "Managing the budget and negotiating contracts with vendors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21507,
                "name" => json_encode([
                    "pl" => "Koordynowanie harmonogramu działań przed, w trakcie i po wydarzeniu.",
                    "en" => "Coordinating the schedule of activities before, during, and after the event."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21508,
                "name" => json_encode([
                    "pl" => "Nadzór nad instalacją techniczną, dekoracjami i usługami gastronomicznymi.",
                    "en" => "Supervising technical setup, decorations, and catering services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21509,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa i zgodności z przepisami podczas wydarzenia.",
                    "en" => "Ensuring safety and compliance with regulations during the event."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21510,
                "name" => json_encode([
                    "pl" => "Komunikacja z klientami, uczestnikami i zespołem wykonawczym.",
                    "en" => "Communicating with clients, attendees, and the executive team."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ORGANIZATOR_IMPREZ_ŚLUBNYCH = [

            [
                'id' => 21511,
                "name" => json_encode([
                    "pl" => "Planowanie ceremonii ślubnej i przyjęcia weselnego zgodnie z oczekiwaniami pary młodej.",
                    "en" => "Planning the wedding ceremony and reception according to the couple's expectations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21512,
                "name" => json_encode([
                    "pl" => "Rezerwacja miejsc, dostawców usług i dekoracji.",
                    "en" => "Booking venues, service providers, and decorations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21513,
                "name" => json_encode([
                    "pl" => "Koordynowanie harmonogramu dnia ślubu i organizacja logistyczna.",
                    "en" => "Coordinating the wedding day's schedule and logistics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21514,
                "name" => json_encode([
                    "pl" => "Zapewnienie usług takich jak fotograf, muzyka i catering.",
                    "en" => "Arranging services such as photography, music, and catering."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21515,
                "name" => json_encode([
                    "pl" => "Pomoc w wyborze motywu przewodniego i stylu ślubu.",
                    "en" => "Assisting in selecting the wedding theme and style."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21516,
                "name" => json_encode([
                    "pl" => "Nadzorowanie realizacji planu ślubnego i reagowanie na nieprzewidziane sytuacje.",
                    "en" => "Overseeing the wedding plan execution and handling unexpected situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ORGANIZATOR_IMPREZ_SPORTOWYCH = [

            [
                'id' => 21517,
                "name" => json_encode([
                    "pl" => "Planowanie i koordynowanie wydarzeń sportowych w różnych dyscyplinach.",
                    "en" => "Planning and coordinating sports events across various disciplines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21518,
                "name" => json_encode([
                    "pl" => "Rekrutacja zawodników, sędziów i obsługi technicznej.",
                    "en" => "Recruiting athletes, referees, and technical staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21519,
                "name" => json_encode([
                    "pl" => "Organizacja infrastruktury i zapewnienie wyposażenia sportowego.",
                    "en" => "Organizing infrastructure and providing sports equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21520,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa uczestników i widzów.",
                    "en" => "Ensuring the safety of participants and spectators."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21521,
                "name" => json_encode([
                    "pl" => "Promowanie wydarzenia i sprzedaż biletów.",
                    "en" => "Promoting the event and managing ticket sales."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21522,
                "name" => json_encode([
                    "pl" => "Monitorowanie przebiegu imprezy i rozwiązywanie problemów w czasie rzeczywistym.",
                    "en" => "Monitoring the event's progress and addressing real-time issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ORGANIZATOR_USŁUG_KONFERENCYJNYCH = [

            [
                'id' => 21523,
                "name" => json_encode([
                    "pl" => "Organizacja konferencji, seminariów i spotkań biznesowych.",
                    "en" => "Organizing conferences, seminars, and business meetings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21524,
                "name" => json_encode([
                    "pl" => "Rezerwacja sal konferencyjnych i zapewnienie odpowiedniego sprzętu.",
                    "en" => "Booking conference rooms and providing appropriate equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21525,
                "name" => json_encode([
                    "pl" => "Koordynacja harmonogramu wystąpień i prezentacji.",
                    "en" => "Coordinating the schedule of speeches and presentations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21526,
                "name" => json_encode([
                    "pl" => "Zapewnienie cateringu i innych usług dodatkowych.",
                    "en" => "Arranging catering and other additional services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21527,
                "name" => json_encode([
                    "pl" => "Promowanie konferencji i obsługa rejestracji uczestników.",
                    "en" => "Promoting the conference and managing participant registration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21528,
                "name" => json_encode([
                    "pl" => "Monitorowanie przebiegu konferencji i wsparcie organizacyjne.",
                    "en" => "Monitoring the conference and providing organizational support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ORGANIZATOR_WIDOWNI = [

            [
                'id' => 21529,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z organizacją widowni na wydarzeniach.",
                    "en" => "Coordinating activities related to audience organization at events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21530,
                "name" => json_encode([
                    "pl" => "Zarządzanie sprzedażą i dystrybucją biletów.",
                    "en" => "Managing ticket sales and distribution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21531,
                "name" => json_encode([
                    "pl" => "Zapewnienie sprawnego wejścia widzów na teren wydarzenia.",
                    "en" => "Ensuring smooth entry of viewers to the event area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21532,
                "name" => json_encode([
                    "pl" => "Nadzór nad rozmieszczeniem widzów w wyznaczonych sektorach.",
                    "en" => "Overseeing audience seating in designated sections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21533,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem stewardów i wolontariuszy obsługujących widownię.",
                    "en" => "Managing a team of stewards and volunteers assisting the audience."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21534,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa i porządku podczas wydarzenia.",
                    "en" => "Ensuring safety and order during the event."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ORGANIZATORZY_KONFERENCJI_I_IMPREZ = [

            [
                'id' => 21535,
                "name" => json_encode([
                    "pl" => "Planowanie i realizacja różnych typów wydarzeń, takich jak targi, festiwale czy gale.",
                    "en" => "Planning and executing various types of events, such as fairs, festivals, and galas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21536,
                "name" => json_encode([
                    "pl" => "Zarządzanie budżetem i rozliczanie kosztów wydarzenia.",
                    "en" => "Managing the budget and accounting for event costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21537,
                "name" => json_encode([
                    "pl" => "Współpraca z partnerami, sponsorami i dostawcami usług.",
                    "en" => "Collaborating with partners, sponsors, and service providers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21538,
                "name" => json_encode([
                    "pl" => "Organizacja działań promocyjnych i medialnych.",
                    "en" => "Organizing promotional and media activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21539,
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności wydarzenia z obowiązującymi przepisami.",
                    "en" => "Ensuring event compliance with applicable regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21540,
                "name" => json_encode([
                    "pl" => "Monitorowanie przebiegu wydarzenia i reagowanie na bieżące potrzeby.",
                    "en" => "Monitoring event progress and addressing ongoing needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INSTRUKTOR_AMATORSKIEGO_RUCHU_ARTYSTYCZNEGO = [

            [
                'id' => 21541,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć artystycznych dla grup amatorskich, takich jak zespoły teatralne, taneczne czy muzyczne.",
                    "en" => "Conducting artistic activities for amateur groups, such as theater, dance, or music ensembles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21542,
                "name" => json_encode([
                    "pl" => "Przygotowywanie i prowadzenie warsztatów oraz zajęć rozwijających umiejętności artystyczne.",
                    "en" => "Organizing and conducting workshops and activities to develop artistic skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21543,
                "name" => json_encode([
                    "pl" => "Organizacja występów, przeglądów i konkursów dla uczestników zajęć.",
                    "en" => "Organizing performances, reviews, and competitions for participants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21544,
                "name" => json_encode([
                    "pl" => "Opracowywanie scenariuszy i choreografii dla grup artystycznych.",
                    "en" => "Creating scripts and choreography for artistic groups."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21545,
                "name" => json_encode([
                    "pl" => "Indywidualna praca z uczestnikami w celu rozwijania ich talentów.",
                    "en" => "Working individually with participants to develop their talents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21546,
                "name" => json_encode([
                    "pl" => "Współpraca z lokalnymi instytucjami kultury i organizacjami społecznymi.",
                    "en" => "Collaborating with local cultural institutions and social organizations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INSTRUKTOR_SPORTU_OSÓB_NIEPEŁNOSPRAWNYCH = [

            [
                'id' => 21547,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć sportowych dostosowanych do potrzeb osób niepełnosprawnych.",
                    "en" => "Conducting sports activities tailored to the needs of people with disabilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21548,
                "name" => json_encode([
                    "pl" => "Opracowywanie indywidualnych planów treningowych dla osób niepełnosprawnych.",
                    "en" => "Developing individual training plans for people with disabilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21549,
                "name" => json_encode([
                    "pl" => "Organizacja zawodów sportowych i wydarzeń integracyjnych.",
                    "en" => "Organizing sports competitions and integrative events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21550,
                "name" => json_encode([
                    "pl" => "Monitorowanie postępów uczestników i dostosowywanie programów treningowych.",
                    "en" => "Monitoring participants' progress and adjusting training programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21551,
                "name" => json_encode([
                    "pl" => "Edukacja w zakresie korzyści zdrowotnych płynących z aktywności fizycznej.",
                    "en" => "Educating about the health benefits of physical activity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21552,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpiecznych warunków do uczestnictwa w zajęciach sportowych.",
                    "en" => "Ensuring safe conditions for participation in sports activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TRENER_SPORTU = [

            [
                'id' => 21553,
                "name" => json_encode([
                    "pl" => "Prowadzenie treningów i przygotowanie zawodników do zawodów sportowych.",
                    "en" => "Conducting training sessions and preparing athletes for sports competitions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21554,
                "name" => json_encode([
                    "pl" => "Opracowywanie programów treningowych w oparciu o analizę potrzeb zawodników.",
                    "en" => "Developing training programs based on athletes' needs analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21555,
                "name" => json_encode([
                    "pl" => "Monitorowanie kondycji fizycznej i postępów sportowców.",
                    "en" => "Monitoring athletes' physical condition and progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21556,
                "name" => json_encode([
                    "pl" => "Motywowanie zawodników i wspieranie ich w osiąganiu celów sportowych.",
                    "en" => "Motivating athletes and supporting them in achieving sports goals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21557,
                "name" => json_encode([
                    "pl" => "Prowadzenie analizy technicznej i taktycznej podczas zawodów.",
                    "en" => "Conducting technical and tactical analysis during competitions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21558,
                "name" => json_encode([
                    "pl" => "Współpraca z lekarzami, fizjoterapeutami i dietetykami w celu optymalizacji wyników sportowych.",
                    "en" => "Collaborating with doctors, physiotherapists, and dietitians to optimize sports performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_TRENERZY_INSTRUKTORZY_I_DZIAŁACZE_SPORTOWI = [

            [
                'id' => 21559,
                "name" => json_encode([
                    "pl" => "Promowanie aktywności fizycznej w społecznościach lokalnych.",
                    "en" => "Promoting physical activity in local communities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21560,
                "name" => json_encode([
                    "pl" => "Organizacja i prowadzenie zajęć rekreacyjnych dla różnych grup wiekowych.",
                    "en" => "Organizing and conducting recreational activities for various age groups."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21561,
                "name" => json_encode([
                    "pl" => "Wsparcie organizacyjne podczas wydarzeń i zawodów sportowych.",
                    "en" => "Providing organizational support during sports events and competitions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21562,
                "name" => json_encode([
                    "pl" => "Prowadzenie działań edukacyjnych w zakresie zdrowego stylu życia.",
                    "en" => "Conducting educational activities on healthy living."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21563,
                "name" => json_encode([
                    "pl" => "Współpraca z klubami sportowymi i organizacjami pozarządowymi.",
                    "en" => "Collaborating with sports clubs and non-governmental organizations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21564,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie organizacji wydarzeń sportowych i rekreacyjnych.",
                    "en" => "Providing advice on organizing sports and recreational events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_INSTRUKTORZY_FITNESS_I_REKREACJI_RUCHOWEJ = [

            [
                'id' => 21565,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć fitness, takich jak aerobik, joga czy pilates, dla różnych grup wiekowych.",
                    "en" => "Conducting fitness classes, such as aerobics, yoga, or pilates, for various age groups."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21566,
                "name" => json_encode([
                    "pl" => "Opracowywanie programów rekreacyjnych dostosowanych do poziomu sprawności uczestników.",
                    "en" => "Developing recreational programs tailored to participants' fitness levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21567,
                "name" => json_encode([
                    "pl" => "Monitorowanie postępów uczestników i dostosowywanie ćwiczeń do ich potrzeb.",
                    "en" => "Monitoring participants' progress and adjusting exercises to their needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21568,
                "name" => json_encode([
                    "pl" => "Organizacja wydarzeń rekreacyjnych, takich jak maratony fitness czy zajęcia plenerowe.",
                    "en" => "Organizing recreational events, such as fitness marathons or outdoor classes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21569,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie zdrowego stylu życia i utrzymania dobrej kondycji.",
                    "en" => "Advising on healthy living and maintaining good physical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21570,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpiecznych warunków podczas zajęć rekreacyjnych i fitness.",
                    "en" => "Ensuring safe conditions during recreational and fitness activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];



        DB::table('detail_projects')->insert(array_merge(
            $POZOSTALI_KIEROWNICY_LUB_DYREKTORZY_W_INSTYTUCJACH_OPIEKI_NAD_DZIEĆMI,
            $POZOSTALI_KIEROWNICY_W_INSTYTUCJACH_OPIEKI_ZDROWOTNEJ,
            $KIEROWNIK_DOMU_SPOKOJNEJ_STAROŚCI,
            $POZOSTALI_KIEROWNICY_W_INSTYTUCJACH_OPIEKI_NAD_OSOBAMI_STARSZYMI,
            $KIEROWNIK_DOMU_POMOCY_SPOŁECZNEJ,
            $KIEROWNIK_DZIAŁU_W_INSTYTUCJACH_POMOCY_SPOŁECZNEJ,
            $KIEROWNIK_OŚRODKA_POMOCY_RODZINIE,
            $POZOSTALI_KIEROWNICY_W_INSTYTUCJACH_POMOCY_SPOŁECZNEJ,
            $POZOSTALI_KIEROWNICY_W_INSTYTUCJACH_EDUKACYJNYCH,
            $ARCHIWISTA,
            $MUZEALNIK,
            $ARCHIWISTA_DOKUMENTÓW_ELEKTRONICZNYCH,
            $ARCHIWISTA_ZAKŁADOWY,
            $TECHNIK_ARCHIWISTA,
            $POZOSTALI_TECHNICY_ARCHIWIŚCI_I_POKREWNI,
            $BIBLIOTEKARZ,
            $PRACOWNIK_GALERII_MUZEUM,
            $TECHNIK_INFORMACJI_NAUKOWEJ,
            $DORADCA_DO_SPRAW_ZASOBÓW_BIBLIOTECZNYCH,
            $POZOSTALI_PRACOWNICY_BIBLIOTEK_GALERII_MUZEÓW_INFORMACJI_NAUKOWEJ_I_POKREWNI,
            $POMOCNICY_BIBLIOTECZNI,
            $ANALITYK_INFORMACJI_I_RAPORTÓW_MEDIALNYCH,
            $BIBLIOTEKOZNAWCA,
            $BROKER_INFORMACJI_RESEARCHER,
            $SPECJALISTA_INFORMACJI_NAUKOWEJ_TECHNICZNEJ_I_EKONOMICZNEJ,
            $SPECJALISTA_ZARZĄDZANIA_INFORMACJĄ,
            $SPECJALISTA_ZARZĄDZANIA_DOKUMENTACJĄ,
            $POZOSTALI_FILozofowie_HISTORYCY_I_POLITOLODZY,
            $POZOSTALI_ARCHEOLODZY_SOCJOLODZY_I_SPECJALIŚCI_DZIEDZIN_POKREWNYCH,
            $DZIENNIKARZ,
            $FOTOEDYTOR,
            $KRYTYK_ARTYSTYCZNY,
            $REDAKTOR_PROGRAMOWY,
            $REPORTER_RADIOWY_TELEWIZYJNY_PRASOWY,
            $KRYTYK_KULINARNY,
            $REDAKTOR_SERWISU_INTERNETOWEGO,
            $POZOSTALI_DZIENNIKARZE,
            $REDAKTOR_NACZELNY,
            $MENEDŻER_ZAWARTOŚCI_SERWISÓW_INTERNETOWYCH,
            $POZOSTALI_PREZENTERZY_RADIOWI_TELEWIZYJNI_I_POKREWNI,
            $ORGANIZATOR_IMPREZ_ROZRYWKOWYCH,
            $ORGANIZATOR_IMPREZ_ŚLUBNYCH,
            $ORGANIZATOR_IMPREZ_SPORTOWYCH,
            $ORGANIZATOR_USŁUG_KONFERENCYJNYCH,
            $ORGANIZATOR_WIDOWNI,
            $POZOSTALI_ORGANIZATORZY_KONFERENCJI_I_IMPREZ,
            $INSTRUKTOR_AMATORSKIEGO_RUCHU_ARTYSTYCZNEGO,
            $INSTRUKTOR_SPORTU_OSÓB_NIEPEŁNOSPRAWNYCH,
            $TRENER_SPORTU,
            $POZOSTALI_TRENERZY_INSTRUKTORZY_I_DZIAŁACZE_SPORTOWI,
            $POZOSTALI_INSTRUKTORZY_FITNESS_I_REKREACJI_RUCHOWEJ
        ));

        Category::whereId('442')->first()->detailprojects()->attach(collect($POZOSTALI_KIEROWNICY_LUB_DYREKTORZY_W_INSTYTUCJACH_OPIEKI_NAD_DZIEĆMI)->pluck('id')->toArray());
        Category::whereId('446')->first()->detailprojects()->attach(collect($POZOSTALI_KIEROWNICY_W_INSTYTUCJACH_OPIEKI_ZDROWOTNEJ)->pluck('id')->toArray());
        Category::whereId('448')->first()->detailprojects()->attach(collect($KIEROWNIK_DOMU_SPOKOJNEJ_STAROŚCI)->pluck('id')->toArray());
        Category::whereId('449')->first()->detailprojects()->attach(collect($POZOSTALI_KIEROWNICY_W_INSTYTUCJACH_OPIEKI_NAD_OSOBAMI_STARSZYMI)->pluck('id')->toArray());
        Category::whereId('451')->first()->detailprojects()->attach(collect($KIEROWNIK_DOMU_POMOCY_SPOŁECZNEJ)->pluck('id')->toArray());
        Category::whereId('452')->first()->detailprojects()->attach(collect($KIEROWNIK_DZIAŁU_W_INSTYTUCJACH_POMOCY_SPOŁECZNEJ)->pluck('id')->toArray());
        Category::whereId('453')->first()->detailprojects()->attach(collect($KIEROWNIK_OŚRODKA_POMOCY_RODZINIE)->pluck('id')->toArray());
        Category::whereId('454')->first()->detailprojects()->attach(collect($POZOSTALI_KIEROWNICY_W_INSTYTUCJACH_POMOCY_SPOŁECZNEJ)->pluck('id')->toArray());
        Category::whereId('457')->first()->detailprojects()->attach(collect($POZOSTALI_KIEROWNICY_W_INSTYTUCJACH_EDUKACYJNYCH)->pluck('id')->toArray());
        Category::whereId('470')->first()->detailprojects()->attach(collect($ARCHIWISTA)->pluck('id')->toArray());
        Category::whereId('471')->first()->detailprojects()->attach(collect($MUZEALNIK)->pluck('id')->toArray());
        Category::whereId('473')->first()->detailprojects()->attach(collect($ARCHIWISTA_DOKUMENTÓW_ELEKTRONICZNYCH)->pluck('id')->toArray());
        Category::whereId('474')->first()->detailprojects()->attach(collect($ARCHIWISTA_ZAKŁADOWY)->pluck('id')->toArray());
        Category::whereId('475')->first()->detailprojects()->attach(collect($TECHNIK_ARCHIWISTA)->pluck('id')->toArray());
        Category::whereId('476')->first()->detailprojects()->attach(collect($POZOSTALI_TECHNICY_ARCHIWIŚCI_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('480')->first()->detailprojects()->attach(collect($BIBLIOTEKARZ)->pluck('id')->toArray());
        Category::whereId('481')->first()->detailprojects()->attach(collect($PRACOWNIK_GALERII_MUZEUM)->pluck('id')->toArray());
        Category::whereId('482')->first()->detailprojects()->attach(collect($TECHNIK_INFORMACJI_NAUKOWEJ)->pluck('id')->toArray());
        Category::whereId('483')->first()->detailprojects()->attach(collect($DORADCA_DO_SPRAW_ZASOBÓW_BIBLIOTECZNYCH)->pluck('id')->toArray());
        Category::whereId('484')->first()->detailprojects()->attach(collect($POZOSTALI_PRACOWNICY_BIBLIOTEK_GALERII_MUZEÓW_INFORMACJI_NAUKOWEJ_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('485')->first()->detailprojects()->attach(collect($POMOCNICY_BIBLIOTECZNI)->pluck('id')->toArray());
        Category::whereId('486')->first()->detailprojects()->attach(collect($ANALITYK_INFORMACJI_I_RAPORTÓW_MEDIALNYCH)->pluck('id')->toArray());
        Category::whereId('487')->first()->detailprojects()->attach(collect($BIBLIOTEKOZNAWCA)->pluck('id')->toArray());
        Category::whereId('488')->first()->detailprojects()->attach(collect($BROKER_INFORMACJI_RESEARCHER)->pluck('id')->toArray());
        Category::whereId('489')->first()->detailprojects()->attach(collect($SPECJALISTA_INFORMACJI_NAUKOWEJ_TECHNICZNEJ_I_EKONOMICZNEJ)->pluck('id')->toArray());
        Category::whereId('490')->first()->detailprojects()->attach(collect($SPECJALISTA_ZARZĄDZANIA_INFORMACJĄ)->pluck('id')->toArray());
        Category::whereId('492')->first()->detailprojects()->attach(collect($SPECJALISTA_ZARZĄDZANIA_DOKUMENTACJĄ)->pluck('id')->toArray());
        Category::whereId('505')->first()->detailprojects()->attach(collect($POZOSTALI_FILozofowie_HISTORYCY_I_POLITOLODZY)->pluck('id')->toArray());
        Category::whereId('512')->first()->detailprojects()->attach(collect($POZOSTALI_ARCHEOLODZY_SOCJOLODZY_I_SPECJALIŚCI_DZIEDZIN_POKREWNYCH)->pluck('id')->toArray());
        Category::whereId('516')->first()->detailprojects()->attach(collect($DZIENNIKARZ)->pluck('id')->toArray());
        Category::whereId('517')->first()->detailprojects()->attach(collect($FOTOEDYTOR)->pluck('id')->toArray());
        Category::whereId('518')->first()->detailprojects()->attach(collect($KRYTYK_ARTYSTYCZNY)->pluck('id')->toArray());
        Category::whereId('519')->first()->detailprojects()->attach(collect($REDAKTOR_PROGRAMOWY)->pluck('id')->toArray());
        Category::whereId('520')->first()->detailprojects()->attach(collect($REPORTER_RADIOWY_TELEWIZYJNY_PRASOWY)->pluck('id')->toArray());
        Category::whereId('521')->first()->detailprojects()->attach(collect($KRYTYK_KULINARNY)->pluck('id')->toArray());
        Category::whereId('522')->first()->detailprojects()->attach(collect($REDAKTOR_SERWISU_INTERNETOWEGO)->pluck('id')->toArray());
        Category::whereId('523')->first()->detailprojects()->attach(collect($POZOSTALI_DZIENNIKARZE)->pluck('id')->toArray());
        Category::whereId('524')->first()->detailprojects()->attach(collect($REDAKTOR_NACZELNY)->pluck('id')->toArray());
        Category::whereId('525')->first()->detailprojects()->attach(collect($MENEDŻER_ZAWARTOŚCI_SERWISÓW_INTERNETOWYCH)->pluck('id')->toArray());
        Category::whereId('526')->first()->detailprojects()->attach(collect($POZOSTALI_PREZENTERZY_RADIOWI_TELEWIZYJNI_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('531')->first()->detailprojects()->attach(collect($ORGANIZATOR_IMPREZ_ROZRYWKOWYCH)->pluck('id')->toArray());
        Category::whereId('532')->first()->detailprojects()->attach(collect($ORGANIZATOR_IMPREZ_ŚLUBNYCH)->pluck('id')->toArray());
        Category::whereId('533')->first()->detailprojects()->attach(collect($ORGANIZATOR_IMPREZ_SPORTOWYCH)->pluck('id')->toArray());
        Category::whereId('534')->first()->detailprojects()->attach(collect($ORGANIZATOR_USŁUG_KONFERENCYJNYCH)->pluck('id')->toArray());
        Category::whereId('535')->first()->detailprojects()->attach(collect($ORGANIZATOR_WIDOWNI)->pluck('id')->toArray());
        Category::whereId('536')->first()->detailprojects()->attach(collect($POZOSTALI_ORGANIZATORZY_KONFERENCJI_I_IMPREZ)->pluck('id')->toArray());
        Category::whereId('542')->first()->detailprojects()->attach(collect($INSTRUKTOR_AMATORSKIEGO_RUCHU_ARTYSTYCZNEGO)->pluck('id')->toArray());
        Category::whereId('545')->first()->detailprojects()->attach(collect($INSTRUKTOR_SPORTU_OSÓB_NIEPEŁNOSPRAWNYCH)->pluck('id')->toArray());
        Category::whereId('546')->first()->detailprojects()->attach(collect($TRENER_SPORTU)->pluck('id')->toArray());
        Category::whereId('547')->first()->detailprojects()->attach(collect($POZOSTALI_TRENERZY_INSTRUKTORZY_I_DZIAŁACZE_SPORTOWI)->pluck('id')->toArray());
        Category::whereId('558')->first()->detailprojects()->attach(collect($POZOSTALI_INSTRUKTORZY_FITNESS_I_REKREACJI_RUCHOWEJ)->pluck('id')->toArray());
    }
}
