<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectbudowlanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $ARCHITEKT = [

            [
                "id" => 17745,
                "name" => json_encode([
                    "pl" => "Projektowanie budynków oraz przestrzeni publicznych.",
                    "en" => "Designing buildings and public spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17746,
                "name" => json_encode([
                    "pl" => "Tworzenie planów architektonicznych oraz dokumentacji technicznej.",
                    "en" => "Creating architectural plans and technical documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17747,
                "name" => json_encode([
                    "pl" => "Współpraca z klientami w celu określenia potrzeb i wymagań projektowych.",
                    "en" => "Collaborating with clients to define project needs and requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17748,
                "name" => json_encode([
                    "pl" => "Dobór materiałów budowlanych oraz nadzór nad ich jakością.",
                    "en" => "Selecting building materials and supervising their quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17749,
                "name" => json_encode([
                    "pl" => "Koordynacja prac budowlanych z innymi specjalistami (inżynierami, urbanistami).",
                    "en" => "Coordinating construction work with other specialists (engineers, urban planners)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17750,
                "name" => json_encode([
                    "pl" => "Nadzór nad zgodnością realizacji projektu z przepisami prawa budowlanego.",
                    "en" => "Ensuring project compliance with building regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17751,
                "name" => json_encode([
                    "pl" => "Tworzenie wizualizacji projektów.",
                    "en" => "Creating project visualizations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17752,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w procesach uzyskiwania pozwoleń budowlanych.",
                    "en" => "Participating in building permit acquisition processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17753,
                "name" => json_encode([
                    "pl" => "Optymalizacja projektów pod kątem funkcjonalności i estetyki.",
                    "en" => "Optimizing designs for functionality and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17754,
                "name" => json_encode([
                    "pl" => "Dbanie o zrównoważony rozwój oraz stosowanie zasad ekologii w projektach.",
                    "en" => "Ensuring sustainable development and incorporating ecological principles in designs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $URBANISTA = [

            [
                "id" => 17755,
                "name" => json_encode([
                    "pl" => "Planowanie przestrzenne miast i obszarów wiejskich.",
                    "en" => "Urban and rural spatial planning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17756,
                "name" => json_encode([
                    "pl" => "Opracowywanie miejscowych planów zagospodarowania przestrzennego.",
                    "en" => "Developing local land use plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17757,
                "name" => json_encode([
                    "pl" => "Analiza istniejących struktur miejskich oraz terenów do zagospodarowania.",
                    "en" => "Analyzing existing urban structures and areas for development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17758,
                "name" => json_encode([
                    "pl" => "Konsultacje społeczne związane z planowaniem przestrzennym.",
                    "en" => "Conducting public consultations related to spatial planning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17759,
                "name" => json_encode([
                    "pl" => "Współpraca z władzami samorządowymi i deweloperami.",
                    "en" => "Collaborating with local governments and developers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17760,
                "name" => json_encode([
                    "pl" => "Ocena wpływu planowanych inwestycji na środowisko.",
                    "en" => "Assessing the environmental impact of planned investments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17761,
                "name" => json_encode([
                    "pl" => "Proponowanie rozwiązań poprawiających infrastrukturę miejską.",
                    "en" => "Proposing solutions to improve urban infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17762,
                "name" => json_encode([
                    "pl" => "Dbanie o estetykę i funkcjonalność przestrzeni publicznej.",
                    "en" => "Ensuring the aesthetics and functionality of public spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17763,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów i analiz dotyczących rozwoju miast.",
                    "en" => "Creating reports and analyses on urban development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17764,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w procesach decyzyjnych dotyczących rozwoju infrastruktury.",
                    "en" => "Participating in decision-making processes regarding infrastructure development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INZYNIER_GOSPODARKI_PRZESTRZENNEJ = [

            [
                "id" => 17765,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii zagospodarowania przestrzennego.",
                    "en" => "Developing spatial management strategies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17766,
                "name" => json_encode([
                    "pl" => "Analiza i ocena możliwości wykorzystania terenów.",
                    "en" => "Analyzing and assessing land use potential."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17767,
                "name" => json_encode([
                    "pl" => "Prowadzenie badań dotyczących struktury urbanistycznej.",
                    "en" => "Conducting research on urban structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17768,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji związanej z planowaniem przestrzennym.",
                    "en" => "Preparing documentation related to spatial planning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17769,
                "name" => json_encode([
                    "pl" => "Koordynacja projektów rozwoju terenów.",
                    "en" => "Coordinating land development projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17770,
                "name" => json_encode([
                    "pl" => "Ocena efektywności i zgodności projektów z politykami rozwoju przestrzennego.",
                    "en" => "Evaluating project efficiency and compliance with spatial development policies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17771,
                "name" => json_encode([
                    "pl" => "Współpraca z architektami, urbanistami i władzami lokalnymi.",
                    "en" => "Collaborating with architects, urban planners, and local authorities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17772,
                "name" => json_encode([
                    "pl" => "Monitorowanie realizacji planów zagospodarowania przestrzennego.",
                    "en" => "Monitoring the implementation of spatial development plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17773,
                "name" => json_encode([
                    "pl" => "Analiza demograficzna oraz społeczna regionów.",
                    "en" => "Conducting demographic and social analyses of regions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17774,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów związanych z zarządzaniem terenami.",
                    "en" => "Resolving land management issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INZYNIER_AKUSTYK = [

            [
                "id" => 17775,
                "name" => json_encode([
                    "pl" => "Projektowanie rozwiązań akustycznych dla budynków i przestrzeni publicznych.",
                    "en" => "Designing acoustic solutions for buildings and public spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17776,
                "name" => json_encode([
                    "pl" => "Pomiary poziomu hałasu i jego źródeł.",
                    "en" => "Measuring noise levels and their sources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17777,
                "name" => json_encode([
                    "pl" => "Analiza wyników badań akustycznych.",
                    "en" => "Analyzing acoustic research results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17778,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie redukcji hałasu.",
                    "en" => "Providing advice on noise reduction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17779,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów ochrony akustycznej.",
                    "en" => "Developing acoustic protection plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17780,
                "name" => json_encode([
                    "pl" => "Testowanie materiałów dźwiękochłonnych i izolacyjnych.",
                    "en" => "Testing sound-absorbing and insulating materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17781,
                "name" => json_encode([
                    "pl" => "Projektowanie systemów nagłośnieniowych i audiowizualnych.",
                    "en" => "Designing sound and audiovisual systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17782,
                "name" => json_encode([
                    "pl" => "Kontrola zgodności projektów z normami akustycznymi.",
                    "en" => "Ensuring compliance of projects with acoustic standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17783,
                "name" => json_encode([
                    "pl" => "Konsultacje dotyczące rozwiązań akustycznych w projektach architektonicznych.",
                    "en" => "Providing consultations on acoustic solutions in architectural projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17784,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów akustycznych w istniejących budynkach.",
                    "en" => "Conducting acoustic audits in existing buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ARCHITEKCI_KRAJOBRAZU = [

            [
                "id" => 17785,
                "name" => json_encode([
                    "pl" => "Projektowanie ogrodów, parków oraz terenów zielonych.",
                    "en" => "Designing gardens, parks, and green spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17786,
                "name" => json_encode([
                    "pl" => "Tworzenie planów zagospodarowania przestrzeni zielonej.",
                    "en" => "Creating plans for green space development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17787,
                "name" => json_encode([
                    "pl" => "Dobór roślin oraz elementów małej architektury.",
                    "en" => "Selecting plants and small architectural elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17788,
                "name" => json_encode([
                    "pl" => "Współpraca z klientami w celu określenia ich oczekiwań dotyczących przestrzeni zielonej.",
                    "en" => "Collaborating with clients to determine their expectations for green spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17789,
                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją projektów zieleni.",
                    "en" => "Overseeing the implementation of green space projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17790,
                "name" => json_encode([
                    "pl" => "Ochrona środowiska naturalnego oraz dbanie o zrównoważony rozwój.",
                    "en" => "Protecting the natural environment and promoting sustainable development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17791,
                "name" => json_encode([
                    "pl" => "Tworzenie projektów rekultywacji terenów zdegradowanych.",
                    "en" => "Developing projects for the reclamation of degraded areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17792,
                "name" => json_encode([
                    "pl" => "Konsultacje w zakresie aranżacji terenów zielonych w miastach.",
                    "en" => "Providing consultations on green space arrangement in urban areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17793,
                "name" => json_encode([
                    "pl" => "Tworzenie projektów zagospodarowania terenów rekreacyjnych.",
                    "en" => "Designing recreational area development projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17794,
                "name" => json_encode([
                    "pl" => "Udział w procesach uzyskiwania zezwoleń na zagospodarowanie terenów zielonych.",
                    "en" => "Participating in obtaining permits for green space development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PLASTYK = [

            [
                "id" => 17795,
                "name" => json_encode([
                    "pl" => "Tworzenie dzieł sztuki, w tym malarstwa, rzeźby, grafiki.",
                    "en" => "Creating works of art, including painting, sculpture, and graphic design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17796,
                "name" => json_encode([
                    "pl" => "Opracowywanie projektów artystycznych na potrzeby różnych instytucji.",
                    "en" => "Developing artistic projects for various institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17797,
                "name" => json_encode([
                    "pl" => "Projektowanie plakatów, ilustracji, materiałów reklamowych.",
                    "en" => "Designing posters, illustrations, and advertising materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17798,
                "name" => json_encode([
                    "pl" => "Udział w wystawach artystycznych oraz konkursach.",
                    "en" => "Participating in art exhibitions and competitions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17799,
                "name" => json_encode([
                    "pl" => "Przygotowywanie scenografii oraz dekoracji dla teatrów i wydarzeń.",
                    "en" => "Preparing scenography and decorations for theaters and events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17800,
                "name" => json_encode([
                    "pl" => "Prowadzenie warsztatów artystycznych i edukacyjnych.",
                    "en" => "Conducting artistic and educational workshops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17801,
                "name" => json_encode([
                    "pl" => "Tworzenie grafik komputerowych oraz ilustracji cyfrowych.",
                    "en" => "Creating computer graphics and digital illustrations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17802,
                "name" => json_encode([
                    "pl" => "Przygotowywanie projektów na potrzeby wydawnictw oraz mediów.",
                    "en" => "Designing projects for publishing houses and media."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17803,
                "name" => json_encode([
                    "pl" => "Restauracja i konserwacja dzieł sztuki.",
                    "en" => "Restoration and conservation of artworks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17804,
                "name" => json_encode([
                    "pl" => "Konsultacje artystyczne przy aranżacji przestrzeni.",
                    "en" => "Providing artistic consultations for space arrangement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ARCHITEKT_WNETRZ = [

            [
                "id" => 17805,
                "name" => json_encode([
                    "pl" => "Projektowanie wnętrz budynków mieszkalnych i komercyjnych.",
                    "en" => "Designing interiors for residential and commercial buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17806,
                "name" => json_encode([
                    "pl" => "Tworzenie koncepcji aranżacji przestrzeni wewnętrznej.",
                    "en" => "Creating concepts for interior space arrangement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17807,
                "name" => json_encode([
                    "pl" => "Dobór materiałów wykończeniowych, mebli oraz oświetlenia.",
                    "en" => "Selecting finishing materials, furniture, and lighting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17808,
                "name" => json_encode([
                    "pl" => "Tworzenie wizualizacji projektów wnętrz.",
                    "en" => "Creating visualizations of interior designs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17809,
                "name" => json_encode([
                    "pl" => "Współpraca z klientami w celu zrozumienia ich potrzeb i oczekiwań.",
                    "en" => "Collaborating with clients to understand their needs and expectations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17810,
                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją projektów wnętrz.",
                    "en" => "Supervising the implementation of interior design projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17811,
                "name" => json_encode([
                    "pl" => "Konsultacje z wykonawcami oraz dostawcami materiałów.",
                    "en" => "Consulting with contractors and material suppliers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17812,
                "name" => json_encode([
                    "pl" => "Dbanie o ergonomię oraz funkcjonalność zaprojektowanej przestrzeni.",
                    "en" => "Ensuring ergonomics and functionality of the designed space."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17813,
                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej wnętrz.",
                    "en" => "Preparing technical documentation for interiors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17814,
                "name" => json_encode([
                    "pl" => "Dobór dekoracji oraz dodatków do wnętrz.",
                    "en" => "Selecting decorations and accessories for interiors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DEKORATOR_WNETRZ = [

            [
                "id" => 17815,
                "name" => json_encode([
                    "pl" => "Aranżacja wnętrz przy użyciu mebli, tkanin oraz dekoracji.",
                    "en" => "Interior arrangement using furniture, fabrics, and decorations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17816,
                "name" => json_encode([
                    "pl" => "Dobór kolorów, tkanin oraz elementów dekoracyjnych.",
                    "en" => "Selection of colors, fabrics, and decorative elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17817,
                "name" => json_encode([
                    "pl" => "Konsultacje z klientami w celu określenia preferencji estetycznych.",
                    "en" => "Consulting with clients to determine aesthetic preferences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17818,
                "name" => json_encode([
                    "pl" => "Tworzenie harmonijnych kompozycji dekoracyjnych.",
                    "en" => "Creating harmonious decorative compositions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17819,
                "name" => json_encode([
                    "pl" => "Stylizacja wnętrz na potrzeby sesji zdjęciowych, filmów oraz reklam.",
                    "en" => "Interior styling for photo shoots, films, and advertisements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17820,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie zmian aranżacyjnych istniejących przestrzeni.",
                    "en" => "Advising on arrangement changes for existing spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17821,
                "name" => json_encode([
                    "pl" => "Tworzenie projektów dekoracyjnych w oparciu o budżet klienta.",
                    "en" => "Creating decorative designs based on the client's budget."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17822,
                "name" => json_encode([
                    "pl" => "Dbanie o estetykę i spójność stylu w aranżowanej przestrzeni.",
                    "en" => "Ensuring aesthetics and style consistency in the arranged space."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17823,
                "name" => json_encode([
                    "pl" => "Dobór akcesoriów i ozdób do wnętrz.",
                    "en" => "Selecting accessories and ornaments for interiors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17824,
                "name" => json_encode([
                    "pl" => "Organizowanie przestrzeni w sposób praktyczny i atrakcyjny wizualnie.",
                    "en" => "Organizing space in a practical and visually appealing way."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ILUSTRATOR = [

            [
                "id" => 17825,
                "name" => json_encode([
                    "pl" => "Tworzenie ilustracji na potrzeby książek, czasopism oraz mediów.",
                    "en" => "Creating illustrations for books, magazines, and media."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17826,
                "name" => json_encode([
                    "pl" => "Projektowanie ilustracji cyfrowych oraz tradycyjnych.",
                    "en" => "Designing digital and traditional illustrations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17827,
                "name" => json_encode([
                    "pl" => "Tworzenie koncepcji artystycznych zgodnie z wytycznymi klienta.",
                    "en" => "Developing artistic concepts in line with client guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17828,
                "name" => json_encode([
                    "pl" => "Opracowywanie grafik do materiałów reklamowych i promocyjnych.",
                    "en" => "Creating graphics for advertising and promotional materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17829,
                "name" => json_encode([
                    "pl" => "Współpraca z autorami oraz redaktorami przy projektach książkowych.",
                    "en" => "Collaborating with authors and editors on book projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17830,
                "name" => json_encode([
                    "pl" => "Przygotowywanie storyboardów do filmów animowanych oraz gier.",
                    "en" => "Preparing storyboards for animated films and games."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17831,
                "name" => json_encode([
                    "pl" => "Praca z oprogramowaniem graficznym do tworzenia ilustracji cyfrowych.",
                    "en" => "Using graphic software to create digital illustrations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17832,
                "name" => json_encode([
                    "pl" => "Tworzenie grafik i ilustracji na potrzeby gier komputerowych.",
                    "en" => "Creating graphics and illustrations for video games."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17833,
                "name" => json_encode([
                    "pl" => "Przygotowywanie ilustracji koncepcyjnych na potrzeby projektów.",
                    "en" => "Creating concept illustrations for projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17834,
                "name" => json_encode([
                    "pl" => "Udział w wystawach i targach ilustratorskich.",
                    "en" => "Participating in illustration exhibitions and fairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONSERWATOR_DZIEŁ_SZTUKI = [

            [
                "id" => 17835,
                "name" => json_encode([
                    "pl" => "Restauracja i konserwacja zabytków oraz dzieł sztuki.",
                    "en" => "Restoration and conservation of monuments and works of art."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17836,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów renowacji uszkodzonych obiektów artystycznych.",
                    "en" => "Developing renovation plans for damaged artistic objects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17837,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań materiałowych i chemicznych dotyczących dzieł sztuki.",
                    "en" => "Conducting material and chemical analyses of works of art."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17838,
                "name" => json_encode([
                    "pl" => "Dobór technik oraz materiałów do renowacji.",
                    "en" => "Selecting techniques and materials for renovation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17839,
                "name" => json_encode([
                    "pl" => "Dokumentacja stanu zachowania dzieł przed i po konserwacji.",
                    "en" => "Documenting the condition of works before and after conservation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17840,
                "name" => json_encode([
                    "pl" => "Współpraca z muzeami, galeriami oraz właścicielami dzieł sztuki.",
                    "en" => "Collaborating with museums, galleries, and art owners."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17841,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z prowadzonych prac konserwatorskich.",
                    "en" => "Preparing reports on conservation work conducted."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17842,
                "name" => json_encode([
                    "pl" => "Prowadzenie prac zabezpieczających zabytek przed dalszym uszkodzeniem.",
                    "en" => "Carrying out protective work to prevent further damage to monuments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17843,
                "name" => json_encode([
                    "pl" => "Ochrona dziedzictwa kulturowego oraz dbanie o zachowanie oryginalności dzieł.",
                    "en" => "Protecting cultural heritage and ensuring the preservation of authenticity in artworks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17844,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w pracach badawczych dotyczących technik i materiałów stosowanych w sztuce.",
                    "en" => "Participating in research on techniques and materials used in art."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONSERWATOR_ZABYTKÓW_ARCHITEKTURY = [

            [
                "id" => 17845,
                "name" => json_encode([
                    "pl" => "Ochrona, renowacja i konserwacja zabytkowych budynków oraz obiektów architektonicznych.",
                    "en" => "Protection, renovation, and conservation of historic buildings and architectural objects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17846,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz historycznych i architektonicznych budowli.",
                    "en" => "Conducting historical and architectural analyses of buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17847,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów konserwatorskich i projektów renowacyjnych.",
                    "en" => "Developing conservation plans and renovation projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17848,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji stanu zabytku przed i po renowacji.",
                    "en" => "Documenting the condition of historic buildings before and after renovation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17849,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich technik oraz materiałów do prac konserwatorskich.",
                    "en" => "Selecting appropriate techniques and materials for conservation work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17850,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu technicznego zabytków i zapobieganie ich degradacji.",
                    "en" => "Monitoring the technical condition of historic sites and preventing their degradation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17851,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami ochrony dziedzictwa kulturowego.",
                    "en" => "Collaborating with cultural heritage protection institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17852,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie ochrony i zachowania autentyczności zabytków.",
                    "en" => "Advising on the protection and preservation of the authenticity of monuments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17853,
                "name" => json_encode([
                    "pl" => "Koordynacja prac konserwatorskich z innymi specjalistami (architektami, historykami).",
                    "en" => "Coordinating conservation work with other specialists (architects, historians)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17854,
                "name" => json_encode([
                    "pl" => "Organizacja prac zabezpieczających obiekty przed działaniem czynników atmosferycznych.",
                    "en" => "Organizing protective works to safeguard objects from atmospheric factors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DEKORATOR_SKLEPÓW = [

            [
                "id" => 17855,
                "name" => json_encode([
                    "pl" => "Projektowanie i aranżacja witryn sklepowych oraz wnętrz sklepów.",
                    "en" => "Designing and arranging shop windows and store interiors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17856,
                "name" => json_encode([
                    "pl" => "Dobór kolorystyki, oświetlenia oraz dekoracji pod kątem promocji produktów.",
                    "en" => "Selecting color schemes, lighting, and decorations to promote products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17857,
                "name" => json_encode([
                    "pl" => "Tworzenie atrakcyjnych ekspozycji towarów, mających na celu przyciągnięcie klientów.",
                    "en" => "Creating attractive product displays to attract customers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17858,
                "name" => json_encode([
                    "pl" => "Stylizacja wnętrza sklepu zgodnie z aktualnymi trendami oraz marką.",
                    "en" => "Styling store interiors in line with current trends and branding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17859,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dekoracji sezonowych oraz na specjalne okazje (np. święta, wyprzedaże).",
                    "en" => "Preparing seasonal and special occasion decorations (e.g., holidays, sales)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17860,
                "name" => json_encode([
                    "pl" => "Współpraca z właścicielami sklepów w celu zrozumienia potrzeb i celów marketingowych.",
                    "en" => "Collaborating with store owners to understand their needs and marketing goals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17861,
                "name" => json_encode([
                    "pl" => "Organizowanie przestrzeni handlowej w sposób ergonomiczny i estetyczny.",
                    "en" => "Organizing retail space in an ergonomic and aesthetic manner."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17862,
                "name" => json_encode([
                    "pl" => "Monitorowanie i aktualizacja dekoracji zgodnie z potrzebami rynku.",
                    "en" => "Monitoring and updating decorations according to market needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17863,
                "name" => json_encode([
                    "pl" => "Tworzenie wizualnych konceptów dla nowych sklepów.",
                    "en" => "Creating visual concepts for new stores."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17864,
                "name" => json_encode([
                    "pl" => "Analiza wpływu aranżacji sklepu na zachowania klientów.",
                    "en" => "Analyzing the impact of store arrangements on customer behavior."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_SZTUKATORSTWA_I_KAMIENIARSTWA_ARTYSTYCZNEGO = [

            [
                "id" => 17865,
                "name" => json_encode([
                    "pl" => "Wykonywanie dekoracyjnych elementów sztukatorskich i kamieniarskich.",
                    "en" => "Creating decorative stucco and stone elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17866,
                "name" => json_encode([
                    "pl" => "Renowacja i konserwacja elementów sztukatorskich w budynkach zabytkowych.",
                    "en" => "Restoration and conservation of stucco elements in historic buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17867,
                "name" => json_encode([
                    "pl" => "Tworzenie rzeźb, reliefów oraz ornamentów z gipsu, kamienia i innych materiałów.",
                    "en" => "Creating sculptures, reliefs, and ornaments from plaster, stone, and other materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17868,
                "name" => json_encode([
                    "pl" => "Opracowywanie projektów artystycznych zgodnie z wytycznymi klienta lub konserwatora zabytków.",
                    "en" => "Developing artistic projects based on guidelines from clients or conservationists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17869,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów i technik do wykonania elementów dekoracyjnych.",
                    "en" => "Selecting appropriate materials and techniques for creating decorative elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17870,
                "name" => json_encode([
                    "pl" => "Współpraca z architektami i konserwatorami zabytków przy realizacji projektów.",
                    "en" => "Collaborating with architects and conservationists on project execution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17871,
                "name" => json_encode([
                    "pl" => "Prowadzenie prac restauracyjnych z zachowaniem oryginalnych technik i stylów.",
                    "en" => "Conducting restoration work while preserving original techniques and styles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17872,
                "name" => json_encode([
                    "pl" => "Kontrola jakości i dokładności wykonywanych elementów dekoracyjnych.",
                    "en" => "Quality control and precision in crafting decorative elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17873,
                "name" => json_encode([
                    "pl" => "Tworzenie odlewów i form do produkcji elementów sztukatorskich.",
                    "en" => "Creating molds and casts for stucco element production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17874,
                "name" => json_encode([
                    "pl" => "Prace przy wykańczaniu wnętrz z użyciem sztukaterii i kamienia.",
                    "en" => "Finishing interior spaces with stucco and stone."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $INŻYNIEROWIE_BUDOWNICTWA = [

            [
                "id" => 17875,
                "name" => json_encode([
                    "pl" => "Projektowanie konstrukcji budowlanych oraz infrastruktury.",
                    "en" => "Designing building structures and infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17876,
                "name" => json_encode([
                    "pl" => "Opracowywanie dokumentacji technicznej i planów budowlanych.",
                    "en" => "Developing technical documentation and construction plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17877,
                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją projektów budowlanych.",
                    "en" => "Supervising the implementation of construction projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17878,
                "name" => json_encode([
                    "pl" => "Dobór materiałów budowlanych oraz ocena ich jakości.",
                    "en" => "Selecting construction materials and assessing their quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17879,
                "name" => json_encode([
                    "pl" => "Współpraca z architektami, inwestorami oraz wykonawcami.",
                    "en" => "Collaborating with architects, investors, and contractors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17880,
                "name" => json_encode([
                    "pl" => "Analiza i ocena warunków technicznych terenów pod budowę.",
                    "en" => "Analyzing and assessing technical conditions of construction sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17881,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie obliczeń konstrukcyjnych i wytrzymałościowych.",
                    "en" => "Performing structural and strength calculations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17882,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w odbiorach technicznych oraz inspekcjach budowlanych.",
                    "en" => "Participating in technical approvals and construction inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17883,
                "name" => json_encode([
                    "pl" => "Dbanie o zgodność projektów z normami i przepisami budowlanymi.",
                    "en" => "Ensuring project compliance with construction standards and regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17884,
                "name" => json_encode([
                    "pl" => "Tworzenie harmonogramów i budżetów projektów budowlanych.",
                    "en" => "Developing schedules and budgets for construction projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $INŻYNIER_TECHNOLOGII_BETONÓW = [

            [
                "id" => 17885,
                "name" => json_encode([
                    "pl" => "Projektowanie składu mieszanek betonowych oraz badanie ich właściwości.",
                    "en" => "Designing concrete mix compositions and studying their properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17886,
                "name" => json_encode([
                    "pl" => "Opracowywanie technologii produkcji i przetwarzania betonu.",
                    "en" => "Developing production and processing technologies for concrete."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17887,
                "name" => json_encode([
                    "pl" => "Kontrola jakości surowców używanych do produkcji betonu.",
                    "en" => "Quality control of raw materials used for concrete production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17888,
                "name" => json_encode([
                    "pl" => "Prowadzenie badań laboratoryjnych dotyczących wytrzymałości i trwałości betonu.",
                    "en" => "Conducting laboratory tests on the strength and durability of concrete."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17889,
                "name" => json_encode([
                    "pl" => "Doradztwo techniczne w zakresie stosowania betonu w budownictwie.",
                    "en" => "Providing technical advice on the use of concrete in construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17890,
                "name" => json_encode([
                    "pl" => "Monitorowanie i optymalizacja procesów produkcji betonu.",
                    "en" => "Monitoring and optimizing concrete production processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17891,
                "name" => json_encode([
                    "pl" => "Testowanie nowych technologii i dodatków do betonu.",
                    "en" => "Testing new technologies and additives for concrete."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17892,
                "name" => json_encode([
                    "pl" => "Współpraca z firmami budowlanymi w zakresie doboru i stosowania betonu.",
                    "en" => "Collaborating with construction companies on concrete selection and application."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17893,
                "name" => json_encode([
                    "pl" => "Udział w odbiorach technicznych związanych z jakością betonu.",
                    "en" => "Participating in technical inspections related to concrete quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17894,
                "name" => json_encode([
                    "pl" => "Kontrola zgodności materiałów betonowych z normami budowlanymi.",
                    "en" => "Ensuring compliance of concrete materials with building standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $KIEROWNIK_BUDOWY = [

            [
                "id" => 17895,
                "name" => json_encode([
                    "pl" => "Zarządzanie pracami budowlanymi na placu budowy.",
                    "en" => "Managing construction works at the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17896,
                "name" => json_encode([
                    "pl" => "Koordynacja zespołów roboczych oraz nadzorowanie podwykonawców.",
                    "en" => "Coordinating work teams and supervising subcontractors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17897,
                "name" => json_encode([
                    "pl" => "Tworzenie harmonogramów budowy oraz monitorowanie ich realizacji.",
                    "en" => "Creating construction schedules and monitoring their implementation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17898,
                "name" => json_encode([
                    "pl" => "Kontrola jakości prac budowlanych oraz używanych materiałów.",
                    "en" => "Controlling the quality of construction works and materials used."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17899,
                "name" => json_encode([
                    "pl" => "Nadzór nad przestrzeganiem przepisów BHP na budowie.",
                    "en" => "Supervising compliance with health and safety regulations on the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17900,
                "name" => json_encode([
                    "pl" => "Współpraca z inwestorami, projektantami oraz inspektorami nadzoru.",
                    "en" => "Collaborating with investors, designers, and supervisory inspectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17901,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów technicznych pojawiających się podczas budowy.",
                    "en" => "Resolving technical issues arising during construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17902,
                "name" => json_encode([
                    "pl" => "Organizacja zaopatrzenia w materiały budowlane.",
                    "en" => "Organizing the supply of construction materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17903,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji powykonawczej.",
                    "en" => "Preparing as-built documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17904,
                "name" => json_encode([
                    "pl" => "Udział w odbiorach technicznych oraz końcowym przekazaniu budynku inwestorowi.",
                    "en" => "Participating in technical inspections and the final handover of the building to the investor."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $INSPEKTOR_NADZORU_BUDOWLANEGO = [

            [
                "id" => 17905,
                "name" => json_encode([
                    "pl" => "Kontrola zgodności prac budowlanych z projektami i przepisami.",
                    "en" => "Monitoring compliance of construction works with projects and regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17906,
                "name" => json_encode([
                    "pl" => "Nadzór nad jakością wykonania robót budowlanych.",
                    "en" => "Supervising the quality of construction works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17907,
                "name" => json_encode([
                    "pl" => "Prowadzenie inspekcji technicznych na placu budowy.",
                    "en" => "Conducting technical inspections on construction sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17908,
                "name" => json_encode([
                    "pl" => "Zatwierdzanie etapów budowy oraz uczestnictwo w odbiorach technicznych.",
                    "en" => "Approving construction phases and participating in technical inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17909,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów i protokołów z inspekcji budowlanych.",
                    "en" => "Preparing reports and protocols from construction inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17910,
                "name" => json_encode([
                    "pl" => "Monitorowanie przestrzegania przepisów BHP na budowie.",
                    "en" => "Monitoring compliance with health and safety regulations on construction sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17911,
                "name" => json_encode([
                    "pl" => "Weryfikacja używanych materiałów budowlanych pod kątem zgodności z normami.",
                    "en" => "Verifying construction materials for compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17912,
                "name" => json_encode([
                    "pl" => "Współpraca z kierownikiem budowy oraz inwestorem.",
                    "en" => "Collaborating with the construction manager and investor."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17913,
                "name" => json_encode([
                    "pl" => "Zgłaszanie uwag oraz rekomendacji dotyczących poprawek i zmian w projekcie.",
                    "en" => "Submitting comments and recommendations regarding corrections and changes in the project."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17914,
                "name" => json_encode([
                    "pl" => "Dbanie o zgodność realizacji inwestycji z harmonogramem i budżetem.",
                    "en" => "Ensuring the investment aligns with the schedule and budget."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $INSPEKTOR_BUDOWLANY = [

            [
                "id" => 17915,
                "name" => json_encode([
                    "pl" => "Prowadzenie kontroli stanu technicznego budynków.",
                    "en" => "Conducting inspections of the technical condition of buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17916,
                "name" => json_encode([
                    "pl" => "Ocena zgodności realizacji projektów budowlanych z przepisami prawa budowlanego.",
                    "en" => "Evaluating the compliance of construction projects with building regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17917,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji budów oraz raportowanie nieprawidłowości.",
                    "en" => "Conducting construction site inspections and reporting irregularities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17918,
                "name" => json_encode([
                    "pl" => "Sporządzanie dokumentacji technicznej związanej z kontrolami.",
                    "en" => "Preparing technical documentation related to inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17919,
                "name" => json_encode([
                    "pl" => "Wydawanie decyzji administracyjnych dotyczących budowy i użytkowania obiektów.",
                    "en" => "Issuing administrative decisions related to construction and building use."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17920,
                "name" => json_encode([
                    "pl" => "Sprawdzanie jakości używanych materiałów budowlanych.",
                    "en" => "Checking the quality of construction materials used."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17921,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu technicznego budynków już istniejących.",
                    "en" => "Monitoring the technical condition of existing buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17922,
                "name" => json_encode([
                    "pl" => "Weryfikacja zgodności dokumentacji projektowej z wykonanymi pracami.",
                    "en" => "Verifying the compliance of project documentation with completed works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17923,
                "name" => json_encode([
                    "pl" => "Udział w postępowaniach dotyczących naruszeń przepisów budowlanych.",
                    "en" => "Participating in proceedings related to violations of building regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17924,
                "name" => json_encode([
                    "pl" => "Ścisła współpraca z innymi organami administracyjnymi.",
                    "en" => "Close cooperation with other administrative bodies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $INSPEKTOR_BUDOWY_DRÓG = [

            [
                "id" => 17925,
                "name" => json_encode([
                    "pl" => "Kontrola jakości prac związanych z budową i remontem dróg.",
                    "en" => "Quality control of works related to road construction and renovation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17926,
                "name" => json_encode([
                    "pl" => "Weryfikacja zgodności realizacji prac drogowych z projektami.",
                    "en" => "Verification of the compliance of road works with designs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17927,
                "name" => json_encode([
                    "pl" => "Nadzór nad przestrzeganiem przepisów BHP na placach budów drogowych.",
                    "en" => "Supervision of compliance with health and safety regulations at road construction sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17928,
                "name" => json_encode([
                    "pl" => "Ocena jakości używanych materiałów drogowych.",
                    "en" => "Assessment of the quality of road materials used."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17929,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji technicznej i raportów z inspekcji drogowych.",
                    "en" => "Maintaining technical documentation and reports from road inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17930,
                "name" => json_encode([
                    "pl" => "Koordynacja prac związanych z budową infrastruktury drogowej.",
                    "en" => "Coordination of works related to road infrastructure construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17931,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w odbiorach technicznych odcinków drogowych.",
                    "en" => "Participation in technical acceptances of road sections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17932,
                "name" => json_encode([
                    "pl" => "Weryfikacja zgodności inwestycji drogowych z normami i przepisami.",
                    "en" => "Verification of the compliance of road investments with standards and regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17933,
                "name" => json_encode([
                    "pl" => "Sprawdzanie, czy realizacja robót drogowych jest zgodna z harmonogramem.",
                    "en" => "Checking whether road works are carried out according to schedule."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17934,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli technicznych nawierzchni drogowych.",
                    "en" => "Conducting technical inspections of road surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $INSPEKTOR_BUDOWY_MOSTÓW = [

            [
                "id" => 17935,
                "name" => json_encode([
                    "pl" => "Nadzór nad pracami związanymi z budową i remontem mostów.",
                    "en" => "Supervision of works related to the construction and renovation of bridges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17936,
                "name" => json_encode([
                    "pl" => "Weryfikacja projektów mostowych pod kątem zgodności z przepisami i normami.",
                    "en" => "Verification of bridge designs for compliance with regulations and standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17937,
                "name" => json_encode([
                    "pl" => "Kontrola jakości materiałów stosowanych przy budowie mostów.",
                    "en" => "Quality control of materials used in bridge construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17938,
                "name" => json_encode([
                    "pl" => "Prowadzenie inspekcji technicznych konstrukcji mostowych.",
                    "en" => "Conducting technical inspections of bridge structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17939,
                "name" => json_encode([
                    "pl" => "Udział w odbiorach technicznych oraz kontrolach etapowych prac.",
                    "en" => "Participation in technical acceptances and stage inspections of works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17940,
                "name" => json_encode([
                    "pl" => "Monitorowanie przestrzegania zasad bezpieczeństwa na placach budowy mostów.",
                    "en" => "Monitoring compliance with safety rules on bridge construction sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17941,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów z inspekcji oraz ocena stanu technicznego mostów.",
                    "en" => "Preparing inspection reports and assessing the technical condition of bridges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17942,
                "name" => json_encode([
                    "pl" => "Weryfikacja zgodności realizacji inwestycji mostowych z harmonogramami.",
                    "en" => "Verification of the compliance of bridge investments with schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17943,
                "name" => json_encode([
                    "pl" => "Konsultacje z inżynierami budowlanymi i kierownikami budowy.",
                    "en" => "Consultations with civil engineers and construction managers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17944,
                "name" => json_encode([
                    "pl" => "Sprawdzanie, czy konstrukcja mostów spełnia normy bezpieczeństwa oraz wytrzymałości.",
                    "en" => "Checking whether bridge structures meet safety and durability standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $INZYNIEROWIE_INZYNIERII_SRODOWISKA = [

            [
                "id" => 17945,
                "name" => json_encode([
                    "pl" => "Projektowanie i nadzór nad systemami ochrony środowiska (oczyszczalnie ścieków, systemy kanalizacyjne).",
                    "en" => "Designing and supervising environmental protection systems (wastewater treatment plants, sewer systems)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17946,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ocen oddziaływania inwestycji na środowisko.",
                    "en" => "Conducting environmental impact assessments of investments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17947,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów gospodarki wodnej i zarządzania zasobami wodnymi.",
                    "en" => "Developing water management and resource management plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17948,
                "name" => json_encode([
                    "pl" => "Monitorowanie i kontrola jakości wody, powietrza oraz gleby.",
                    "en" => "Monitoring and controlling the quality of water, air, and soil."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17949,
                "name" => json_encode([
                    "pl" => "Projektowanie systemów odnawialnych źródeł energii (wiatr, energia słoneczna).",
                    "en" => "Designing renewable energy systems (wind, solar energy)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17950,
                "name" => json_encode([
                    "pl" => "Konsultacje środowiskowe w projektach budowlanych i przemysłowych.",
                    "en" => "Environmental consultations in construction and industrial projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17951,
                "name" => json_encode([
                    "pl" => "Tworzenie strategii ochrony przyrody oraz zarządzania odpadami.",
                    "en" => "Developing nature protection and waste management strategies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17952,
                "name" => json_encode([
                    "pl" => "Współpraca z władzami samorządowymi oraz instytucjami ochrony środowiska.",
                    "en" => "Collaborating with local governments and environmental protection institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17953,
                "name" => json_encode([
                    "pl" => "Nadzór nad realizacją projektów środowiskowych i zgodnością z przepisami.",
                    "en" => "Supervising environmental projects and ensuring compliance with regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17954,
                "name" => json_encode([
                    "pl" => "Prowadzenie badań terenowych i analiz środowiskowych.",
                    "en" => "Conducting field research and environmental analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $OPERATORZY_SPRZETU_DO_ROBOT_ZIEMNYCH_I_URZADZEN_POKREWNYCH = [

            [
                "id" => 17955,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn budowlanych, takich jak koparki, spycharki, walce.",
                    "en" => "Operating construction machinery, such as excavators, bulldozers, rollers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17956,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac ziemnych, takich jak wykopy, niwelacje terenu, zasypywanie.",
                    "en" => "Performing earthworks, such as excavation, leveling, backfilling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17957,
                "name" => json_encode([
                    "pl" => "Utrzymanie i konserwacja sprzętu budowlanego.",
                    "en" => "Maintaining and servicing construction equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17958,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP podczas obsługi ciężkiego sprzętu.",
                    "en" => "Adhering to safety regulations while operating heavy machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17959,
                "name" => json_encode([
                    "pl" => "Kontrola i diagnozowanie stanu technicznego maszyn.",
                    "en" => "Inspecting and diagnosing the technical condition of machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17960,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie drobnych napraw i serwisowania urządzeń.",
                    "en" => "Performing minor repairs and servicing equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17961,
                "name" => json_encode([
                    "pl" => "Realizacja prac zgodnie z planem budowlanym oraz wytycznymi kierownika budowy.",
                    "en" => "Executing tasks according to the construction plan and instructions from the site manager."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17962,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami budowy.",
                    "en" => "Cooperating with other construction workers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17963,
                "name" => json_encode([
                    "pl" => "Przygotowywanie terenu do realizacji inwestycji.",
                    "en" => "Preparing the site for construction projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17964,
                "name" => json_encode([
                    "pl" => "Dbanie o prawidłowe użytkowanie sprzętu i unikanie jego nadmiernego zużycia.",
                    "en" => "Ensuring proper use of equipment and avoiding excessive wear."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $ROBOTNICY_OBROBKI_KAMIENIA = [

            [
                "id" => 17965,
                "name" => json_encode([
                    "pl" => "Ręczna lub mechaniczna obróbka kamienia naturalnego.",
                    "en" => "Manual or mechanical processing of natural stone."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17966,
                "name" => json_encode([
                    "pl" => "Przygotowywanie kamienia do celów budowlanych lub dekoracyjnych.",
                    "en" => "Preparing stone for construction or decorative purposes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17967,
                "name" => json_encode([
                    "pl" => "Cięcie, formowanie oraz wygładzanie bloków i płyt kamiennych.",
                    "en" => "Cutting, shaping, and polishing stone blocks and slabs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17968,
                "name" => json_encode([
                    "pl" => "Prace związane z montażem elementów kamiennych w budynkach.",
                    "en" => "Installing stone elements in buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17969,
                "name" => json_encode([
                    "pl" => "Konserwacja i renowacja elementów kamiennych w budynkach zabytkowych.",
                    "en" => "Maintenance and restoration of stone elements in historic buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17970,
                "name" => json_encode([
                    "pl" => "Wykonywanie ornamentów, rzeźb oraz innych elementów dekoracyjnych z kamienia.",
                    "en" => "Creating ornaments, sculptures, and other decorative elements from stone."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17971,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich narzędzi i technik do obróbki kamienia.",
                    "en" => "Selecting appropriate tools and techniques for stone processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17972,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm jakościowych i wymogów projektowych.",
                    "en" => "Adhering to quality standards and project requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17973,
                "name" => json_encode([
                    "pl" => "Praca z różnymi rodzajami kamienia, takimi jak granit, marmur, piaskowiec.",
                    "en" => "Working with various types of stone, such as granite, marble, sandstone."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17974,
                "name" => json_encode([
                    "pl" => "Utrzymanie miejsca pracy w czystości i porządku.",
                    "en" => "Maintaining cleanliness and order at the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $PILARZ_KAMIENIA = [

            [
                "id" => 17975,
                "name" => json_encode([
                    "pl" => "Cięcie kamienia na płyty, bloki oraz inne elementy budowlane.",
                    "en" => "Cutting stone into slabs, blocks, and other construction elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17976,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn do cięcia kamienia, takich jak piły taśmowe i tarczowe.",
                    "en" => "Operating stone cutting machines, such as band saws and circular saws."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17977,
                "name" => json_encode([
                    "pl" => "Przygotowywanie materiałów do dalszej obróbki.",
                    "en" => "Preparing materials for further processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17978,
                "name" => json_encode([
                    "pl" => "Praca zgodnie z wytycznymi dotyczącymi wymiarów i specyfikacji projektowych.",
                    "en" => "Working according to dimensions and project specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17979,
                "name" => json_encode([
                    "pl" => "Konserwacja i regulacja maszyn do cięcia kamienia.",
                    "en" => "Maintenance and adjustment of stone cutting machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17980,
                "name" => json_encode([
                    "pl" => "Dbane o dokładność i jakość ciętych elementów.",
                    "en" => "Ensuring the precision and quality of cut elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17981,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm bezpieczeństwa podczas pracy z ciężkim sprzętem.",
                    "en" => "Following safety standards when working with heavy equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17982,
                "name" => json_encode([
                    "pl" => "Usuwanie odpadów oraz fragmentów kamienia z miejsca pracy.",
                    "en" => "Removing debris and stone fragments from the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17983,
                "name" => json_encode([
                    "pl" => "Kontrola jakości ciętych elementów pod kątem pęknięć i wad.",
                    "en" => "Inspecting the quality of cut elements for cracks and defects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17984,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych prac i zużycia materiałów.",
                    "en" => "Documenting completed work and material usage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $SZLIFIERZ_KAMIENIA = [

            [
                "id" => 17985,
                "name" => json_encode([
                    "pl" => "Szlifowanie i polerowanie powierzchni kamiennych, takich jak blaty, posadzki, schody.",
                    "en" => "Grinding and polishing stone surfaces such as countertops, floors, and stairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17986,
                "name" => json_encode([
                    "pl" => "Używanie specjalistycznych narzędzi do wygładzania i polerowania kamienia.",
                    "en" => "Using specialized tools for smoothing and polishing stone."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17987,
                "name" => json_encode([
                    "pl" => "Przygotowywanie powierzchni kamienia do montażu lub wykończenia.",
                    "en" => "Preparing stone surfaces for installation or finishing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17988,
                "name" => json_encode([
                    "pl" => "Kontrola jakości szlifowanych powierzchni i usuwanie ewentualnych wad.",
                    "en" => "Inspecting polished surfaces for quality and removing any defects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17989,
                "name" => json_encode([
                    "pl" => "Dbanie o odpowiednią gradację szlifowania i polerowania w zależności od rodzaju kamienia.",
                    "en" => "Ensuring appropriate polishing and grinding gradation depending on the stone type."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17990,
                "name" => json_encode([
                    "pl" => "Konserwacja i regulacja sprzętu do szlifowania.",
                    "en" => "Maintaining and adjusting grinding equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17991,
                "name" => json_encode([
                    "pl" => "Utrzymanie czystości na stanowisku pracy i usuwanie pyłu kamiennego.",
                    "en" => "Keeping the workspace clean and removing stone dust."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17992,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów BHP podczas pracy z materiałami kamiennymi.",
                    "en" => "Adhering to safety regulations when working with stone materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17993,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich środków chemicznych do polerowania kamienia.",
                    "en" => "Selecting appropriate chemicals for stone polishing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17994,
                "name" => json_encode([
                    "pl" => "Praca z różnymi rodzajami kamienia, uwzględniając ich specyfikę i wymagania.",
                    "en" => "Working with various types of stone, considering their specifics and requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $BETONIARZE_ZBROJARZE = [

            [
                "id" => 17995,
                "name" => json_encode([
                    "pl" => "Przygotowywanie i układanie mieszanek betonowych na placu budowy.",
                    "en" => "Preparing and laying concrete mixes on construction sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17996,
                "name" => json_encode([
                    "pl" => "Montaż zbrojenia (prętów stalowych) w szalunkach betonowych.",
                    "en" => "Installing reinforcement (steel bars) in concrete forms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17997,
                "name" => json_encode([
                    "pl" => "Wykonywanie wylewek betonowych i elementów konstrukcyjnych.",
                    "en" => "Creating concrete pours and structural elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17998,
                "name" => json_encode([
                    "pl" => "Zabezpieczanie i konserwacja betonu po wylaniu.",
                    "en" => "Protecting and curing concrete after pouring."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17999,
                "name" => json_encode([
                    "pl" => "Kontrola jakości mieszanki betonowej oraz jej właściwego ułożenia.",
                    "en" => "Inspecting the quality of the concrete mix and its proper placement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18000,
                "name" => json_encode([
                    "pl" => "Montaż prefabrykowanych elementów betonowych na budowie.",
                    "en" => "Installing prefabricated concrete elements on construction sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18001,
                "name" => json_encode([
                    "pl" => "Utrzymanie sprzętu do mieszania i transportu betonu w dobrym stanie technicznym.",
                    "en" => "Maintaining concrete mixing and transportation equipment in good working order."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18002,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm i wytycznych dotyczących mieszania i wylewania betonu.",
                    "en" => "Adhering to standards and guidelines for mixing and pouring concrete."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18003,
                "name" => json_encode([
                    "pl" => "Tworzenie form (szalunków) do elementów betonowych.",
                    "en" => "Creating forms (shuttering) for concrete elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18004,
                "name" => json_encode([
                    "pl" => "Kontrola i naprawa istniejących elementów betonowych.",
                    "en" => "Inspecting and repairing existing concrete elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $CIESLA = [

            [
                "id" => 18005,
                "name" => json_encode([
                    "pl" => "Wykonywanie konstrukcji drewnianych, takich jak więźby dachowe, schody, belki.",
                    "en" => "Constructing wooden structures such as roof trusses, stairs, and beams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18006,
                "name" => json_encode([
                    "pl" => "Tworzenie szalunków do betonowania fundamentów i innych elementów konstrukcyjnych.",
                    "en" => "Creating formwork for concrete foundations and other structural elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18007,
                "name" => json_encode([
                    "pl" => "Przygotowywanie drewna do obróbki oraz dobór odpowiednich materiałów.",
                    "en" => "Preparing wood for processing and selecting appropriate materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18008,
                "name" => json_encode([
                    "pl" => "Montaż elementów drewnianych zgodnie z projektem.",
                    "en" => "Assembling wooden elements according to the design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18009,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi do obróbki drewna (piły, wiertarki, heblarki).",
                    "en" => "Operating woodworking tools such as saws, drills, and planers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18010,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja istniejących konstrukcji drewnianych.",
                    "en" => "Repairing and maintaining existing wooden structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18011,
                "name" => json_encode([
                    "pl" => "Wykonywanie elementów wykończeniowych z drewna (listwy, obramowania).",
                    "en" => "Creating wooden finishing elements such as moldings and frames."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18012,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm budowlanych oraz wytycznych dotyczących drewna konstrukcyjnego.",
                    "en" => "Complying with building standards and guidelines for structural wood."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18013,
                "name" => json_encode([
                    "pl" => "Utrzymanie porządku na stanowisku pracy i dbałość o bezpieczeństwo.",
                    "en" => "Maintaining cleanliness at the workplace and ensuring safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18014,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi fachowcami na budowie.",
                    "en" => "Collaborating with other professionals on the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $CIESLA_SZALUNKOWY = [

            [
                "id" => 18015,
                "name" => json_encode([
                    "pl" => "Wykonywanie szalunków (form) do wylewania betonu.",
                    "en" => "Constructing formwork for pouring concrete."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18016,
                "name" => json_encode([
                    "pl" => "Montaż i demontaż systemów szalunkowych.",
                    "en" => "Assembling and dismantling formwork systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18017,
                "name" => json_encode([
                    "pl" => "Dostosowywanie form szalunkowych do wymagań projektowych.",
                    "en" => "Adjusting formwork to meet project specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18018,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych szalunków oraz ich stabilności.",
                    "en" => "Inspecting the quality and stability of formwork."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18019,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi do cięcia i montażu drewna oraz metalowych elementów szalunkowych.",
                    "en" => "Using tools for cutting and assembling wood and metal formwork components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18020,
                "name" => json_encode([
                    "pl" => "Dbanie o bezpieczeństwo na placu budowy przy montażu szalunków.",
                    "en" => "Ensuring safety on the construction site during formwork assembly."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18021,
                "name" => json_encode([
                    "pl" => "Utrzymanie sprzętu i narzędzi w dobrym stanie technicznym.",
                    "en" => "Maintaining tools and equipment in good working condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18022,
                "name" => json_encode([
                    "pl" => "Przestrzeganie harmonogramu prac związanych z montażem i demontażem szalunków.",
                    "en" => "Adhering to schedules for assembling and dismantling formwork."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18023,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że szalunki są odpowiednio przygotowane do wylewania betonu.",
                    "en" => "Ensuring formwork is properly prepared for concrete pouring."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18024,
                "name" => json_encode([
                    "pl" => "Usuwanie resztek betonu i innych zanieczyszczeń po demontażu szalunków.",
                    "en" => "Cleaning concrete residues and other debris after dismantling formwork."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $STOLARZ_BUDOWLANY = [

            [
                "id" => 18025,
                "name" => json_encode([
                    "pl" => "Wykonywanie elementów drewnianych na potrzeby budownictwa (okna, drzwi, podłogi).",
                    "en" => "Creating wooden components for construction purposes (windows, doors, floors)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18026,
                "name" => json_encode([
                    "pl" => "Montaż konstrukcji drewnianych oraz wykończeń wnętrz z drewna.",
                    "en" => "Installing wooden structures and interior finishes made of wood."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18027,
                "name" => json_encode([
                    "pl" => "Obróbka i przygotowanie drewna do montażu.",
                    "en" => "Processing and preparing wood for installation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18028,
                "name" => json_encode([
                    "pl" => "Renowacja i naprawa istniejących elementów drewnianych w budynkach.",
                    "en" => "Renovating and repairing existing wooden elements in buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18029,
                "name" => json_encode([
                    "pl" => "Praca z narzędziami stolarskimi (piły, dłuta, frezarki).",
                    "en" => "Using carpentry tools (saws, chisels, routers)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18030,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich gatunków drewna do specyfikacji projektu.",
                    "en" => "Selecting suitable types of wood according to project specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18031,
                "name" => json_encode([
                    "pl" => "Montaż boazerii, schodów, sufitów drewnianych.",
                    "en" => "Installing paneling, stairs, and wooden ceilings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18032,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm budowlanych i jakościowych dotyczących drewna.",
                    "en" => "Adhering to building and quality standards for wood."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18033,
                "name" => json_encode([
                    "pl" => "Tworzenie szablonów i modeli przed montażem elementów.",
                    "en" => "Creating templates and models before assembling components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18034,
                "name" => json_encode([
                    "pl" => "Dbanie o bezpieczeństwo na stanowisku pracy.",
                    "en" => "Ensuring safety at the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MONTERZY_KONSTRUKCJI_BUDOWLANYCH_I_KONSERWATORZY_BUDYNKÓW = [

            [
                "id" => 18035,
                "name" => json_encode([
                    "pl" => "Montaż i demontaż konstrukcji budowlanych, takich jak stalowe ramy, elementy prefabrykowane.",
                    "en" => "Assembly and disassembly of building structures such as steel frames and prefabricated elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18036,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac remontowych oraz modernizacyjnych w budynkach.",
                    "en" => "Carrying out renovation and modernization works in buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18037,
                "name" => json_encode([
                    "pl" => "Kontrola stanu technicznego konstrukcji budowlanych.",
                    "en" => "Inspecting the technical condition of building structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18038,
                "name" => json_encode([
                    "pl" => "Prace związane z konserwacją elewacji, dachów, ścian.",
                    "en" => "Maintenance work on facades, roofs, and walls."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18039,
                "name" => json_encode([
                    "pl" => "Naprawa i wymiana uszkodzonych elementów konstrukcyjnych.",
                    "en" => "Repairing and replacing damaged structural elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18040,
                "name" => json_encode([
                    "pl" => "Montaż rusztowań i innych tymczasowych konstrukcji pomocniczych.",
                    "en" => "Erecting scaffolding and other temporary support structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18041,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm bezpieczeństwa oraz przepisów budowlanych.",
                    "en" => "Adhering to safety standards and building regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18042,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi specjalistami przy modernizacjach i remontach.",
                    "en" => "Collaborating with other specialists on modernizations and renovations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18043,
                "name" => json_encode([
                    "pl" => "Dbanie o porządek na placu budowy i bezpieczne przechowywanie materiałów.",
                    "en" => "Maintaining cleanliness on construction sites and safely storing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18044,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów z przeprowadzonych inspekcji i prac konserwacyjnych.",
                    "en" => "Preparing reports on conducted inspections and maintenance work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MONTER_REKLAM = [

            [
                "id" => 18045,
                "name" => json_encode([
                    "pl" => "Montaż różnorodnych form reklamowych, takich jak banery, billboardy, szyldy, reklamy świetlne.",
                    "en" => "Installation of various advertising forms, such as banners, billboards, signs, and illuminated advertisements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18046,
                "name" => json_encode([
                    "pl" => "Instalacja reklam na różnych powierzchniach, w tym ścianach budynków, dachach, witrynach.",
                    "en" => "Installing advertisements on various surfaces, including building walls, rooftops, and shop windows."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18047,
                "name" => json_encode([
                    "pl" => "Obsługa sprzętu i narzędzi niezbędnych do montażu reklam (wiertarki, podnośniki, drabiny).",
                    "en" => "Operating equipment and tools necessary for advertisement installation (drills, lifts, ladders)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18048,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP podczas pracy na wysokości.",
                    "en" => "Adhering to safety regulations while working at heights."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18049,
                "name" => json_encode([
                    "pl" => "Konserwacja i naprawa uszkodzonych reklam.",
                    "en" => "Maintaining and repairing damaged advertisements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18050,
                "name" => json_encode([
                    "pl" => "Współpraca z projektantami reklam w celu zapewnienia prawidłowej instalacji.",
                    "en" => "Collaborating with advertisement designers to ensure proper installation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18051,
                "name" => json_encode([
                    "pl" => "Zapewnienie estetyki i precyzji montażu.",
                    "en" => "Ensuring aesthetic appeal and precision in installation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18052,
                "name" => json_encode([
                    "pl" => "Przygotowanie powierzchni do montażu reklam, w tym czyszczenie i zabezpieczanie.",
                    "en" => "Preparing surfaces for advertisement installation, including cleaning and securing them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18053,
                "name" => json_encode([
                    "pl" => "Demontaż starych lub nieaktualnych reklam.",
                    "en" => "Dismantling old or outdated advertisements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18054,
                "name" => json_encode([
                    "pl" => "Dbanie o zgodność z przepisami dotyczącymi reklamy w przestrzeni publicznej.",
                    "en" => "Ensuring compliance with regulations regarding advertisements in public spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MONTER_RUSZTOWAN = [

            [
                "id" => 18055,
                "name" => json_encode([
                    "pl" => "Montaż i demontaż rusztowań budowlanych.",
                    "en" => "Assembly and disassembly of construction scaffolding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18056,
                "name" => json_encode([
                    "pl" => "Wybór i przygotowanie odpowiedniego miejsca do instalacji rusztowania.",
                    "en" => "Selection and preparation of a suitable location for scaffolding installation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18057,
                "name" => json_encode([
                    "pl" => "Kontrola stabilności i bezpieczeństwa rusztowań.",
                    "en" => "Checking the stability and safety of scaffolding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18058,
                "name" => json_encode([
                    "pl" => "Obsługa sprzętu do podnoszenia elementów rusztowań.",
                    "en" => "Operating equipment for lifting scaffolding components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18059,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP, szczególnie w kontekście pracy na wysokościach.",
                    "en" => "Adhering to safety regulations, especially when working at heights."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18060,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami na placu budowy.",
                    "en" => "Collaborating with other workers on the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18061,
                "name" => json_encode([
                    "pl" => "Konserwacja i naprawa elementów rusztowań.",
                    "en" => "Maintaining and repairing scaffolding components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18062,
                "name" => json_encode([
                    "pl" => "Dokumentowanie montażu rusztowań oraz raportowanie ewentualnych problemów technicznych.",
                    "en" => "Documenting scaffolding assembly and reporting any technical issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18063,
                "name" => json_encode([
                    "pl" => "Upewnienie się, że rusztowania spełniają wymogi techniczne i normy bezpieczeństwa.",
                    "en" => "Ensuring scaffolding meets technical requirements and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18064,
                "name" => json_encode([
                    "pl" => "Demontaż rusztowań po zakończeniu prac budowlanych.",
                    "en" => "Dismantling scaffolding after construction work is completed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $ROBOTNIK_ROZBIORKI_BUDOWLI = [

            [
                "id" => 18065,
                "name" => json_encode([
                    "pl" => "Prace związane z rozbiórką budynków i konstrukcji.",
                    "en" => "Performing tasks related to the demolition of buildings and structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18066,
                "name" => json_encode([
                    "pl" => "Obsługa sprzętu do rozbiórki, takiego jak młoty pneumatyczne, dźwigi, koparki.",
                    "en" => "Operating demolition equipment, such as pneumatic hammers, cranes, and excavators."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18067,
                "name" => json_encode([
                    "pl" => "Demontaż elementów budowlanych, w tym ścian, dachów, okien, drzwi.",
                    "en" => "Dismantling construction elements, including walls, roofs, windows, and doors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18068,
                "name" => json_encode([
                    "pl" => "Segregacja i utylizacja materiałów pochodzących z rozbiórki.",
                    "en" => "Sorting and disposing of materials resulting from the demolition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18069,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm BHP, szczególnie dotyczących pracy w niebezpiecznych warunkach.",
                    "en" => "Adhering to safety regulations, especially when working in hazardous conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18070,
                "name" => json_encode([
                    "pl" => "Przygotowanie terenu do rozbiórki, w tym zabezpieczenie obszaru.",
                    "en" => "Preparing the site for demolition, including securing the area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18071,
                "name" => json_encode([
                    "pl" => "Współpraca z kierownikiem budowy w celu planowania i koordynacji prac rozbiórkowych.",
                    "en" => "Collaborating with the construction manager to plan and coordinate demolition tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18072,
                "name" => json_encode([
                    "pl" => "Usuwanie gruzu i czyszczenie terenu po rozbiórce.",
                    "en" => "Removing debris and cleaning the site after demolition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18073,
                "name" => json_encode([
                    "pl" => "Praca z materiałami niebezpiecznymi, takimi jak azbest, zgodnie z przepisami.",
                    "en" => "Handling hazardous materials, such as asbestos, in compliance with regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18074,
                "name" => json_encode([
                    "pl" => "Raportowanie postępu prac oraz ewentualnych problemów technicznych.",
                    "en" => "Reporting progress and any technical issues encountered."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MONTER_OGRODZEN = [

            [
                "id" => 18075,
                "name" => json_encode([
                    "pl" => "Montaż różnego rodzaju ogrodzeń, takich jak drewniane, metalowe, plastikowe, betonowe.",
                    "en" => "Installation of various types of fences, such as wooden, metal, plastic, and concrete."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18076,
                "name" => json_encode([
                    "pl" => "Przygotowanie terenu pod montaż ogrodzeń (niwelacja terenu, wykopy).",
                    "en" => "Preparing the site for fence installation (leveling the ground, digging)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18077,
                "name" => json_encode([
                    "pl" => "Instalacja słupków, paneli oraz elementów bramowych.",
                    "en" => "Installing posts, panels, and gate components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18078,
                "name" => json_encode([
                    "pl" => "Konserwacja i naprawa istniejących ogrodzeń.",
                    "en" => "Maintaining and repairing existing fences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18079,
                "name" => json_encode([
                    "pl" => "Wybór odpowiednich materiałów i narzędzi do montażu ogrodzeń.",
                    "en" => "Selecting appropriate materials and tools for fence installation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18080,
                "name" => json_encode([
                    "pl" => "Przestrzeganie wytycznych dotyczących linii granicznych działek i planu montażu.",
                    "en" => "Adhering to guidelines regarding property boundaries and installation plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18081,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP podczas pracy.",
                    "en" => "Following health and safety regulations during work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18082,
                "name" => json_encode([
                    "pl" => "Montaż akcesoriów do ogrodzeń, takich jak zamki, siatki, dodatkowe elementy dekoracyjne.",
                    "en" => "Installing fence accessories such as locks, nets, and decorative elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18083,
                "name" => json_encode([
                    "pl" => "Praca w różnych warunkach terenowych, w tym na nierównych powierzchniach.",
                    "en" => "Working in various terrain conditions, including uneven surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18084,
                "name" => json_encode([
                    "pl" => "Dbanie o estetykę oraz precyzję montażu.",
                    "en" => "Ensuring aesthetic quality and precision during installation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MONTERZY_BUDOWNICTWA_WODNEGO = [

            [
                "id" => 18085,
                "name" => json_encode([
                    "pl" => "Montaż i instalacja konstrukcji hydrotechnicznych, takich jak mosty, tamy, wały przeciwpowodziowe, śluzy.",
                    "en" => "Assembly and installation of hydraulic engineering structures such as bridges, dams, flood embankments, and locks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18086,
                "name" => json_encode([
                    "pl" => "Prace związane z budową systemów odprowadzania wody (kanalizacja, rurociągi).",
                    "en" => "Work related to the construction of water drainage systems (sewerage, pipelines)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18087,
                "name" => json_encode([
                    "pl" => "Obsługa sprzętu do robót wodnych, w tym koparek pływających, dźwigów i pontonów.",
                    "en" => "Operating waterworks equipment, including floating excavators, cranes, and pontoons."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18088,
                "name" => json_encode([
                    "pl" => "Monitorowanie stabilności i bezpieczeństwa konstrukcji wodnych.",
                    "en" => "Monitoring the stability and safety of water structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18089,
                "name" => json_encode([
                    "pl" => "Konserwacja i naprawa istniejących obiektów hydrotechnicznych.",
                    "en" => "Maintenance and repair of existing hydrotechnical facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18090,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad ochrony środowiska przy realizacji projektów wodnych.",
                    "en" => "Adhering to environmental protection principles during water-related projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18091,
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami i projektantami budownictwa wodnego.",
                    "en" => "Collaboration with engineers and designers of water construction projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18092,
                "name" => json_encode([
                    "pl" => "Przygotowanie terenu do budowy wodnej, w tym prace ziemne i wykopy.",
                    "en" => "Preparing the site for water construction, including earthworks and excavations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18093,
                "name" => json_encode([
                    "pl" => "Dokumentowanie prac montażowych oraz sporządzanie raportów technicznych.",
                    "en" => "Documenting assembly works and preparing technical reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18094,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm BHP, zwłaszcza podczas prac na wodzie.",
                    "en" => "Following health and safety regulations, especially during work on water."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $ALPINISTA_PRZEMYSŁOWY = [

            [
                "id" => 18095,
                "name" => json_encode([
                    "pl" => "Prace wysokościowe z wykorzystaniem technik linowych, takie jak malowanie elewacji, czyszczenie, naprawy.",
                    "en" => "High-altitude work using rope techniques, such as facade painting, cleaning, and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18096,
                "name" => json_encode([
                    "pl" => "Montaż i demontaż konstrukcji na wysokościach.",
                    "en" => "Assembly and disassembly of structures at heights."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18097,
                "name" => json_encode([
                    "pl" => "Inspekcje oraz konserwacje konstrukcji budowlanych (mosty, wieże, kominy).",
                    "en" => "Inspection and maintenance of building structures (bridges, towers, chimneys)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18098,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów BHP, zwłaszcza w zakresie pracy na wysokościach.",
                    "en" => "Adherence to health and safety regulations, especially in high-altitude work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18099,
                "name" => json_encode([
                    "pl" => "Obsługa sprzętu do prac wysokościowych, takiego jak liny, karabinki, uprzęże.",
                    "en" => "Operation of high-altitude work equipment, such as ropes, carabiners, and harnesses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18100,
                "name" => json_encode([
                    "pl" => "Dokumentowanie stanu technicznego konstrukcji oraz raportowanie ewentualnych zagrożeń.",
                    "en" => "Documenting the technical condition of structures and reporting potential hazards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18101,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem w celu koordynacji prac na wysokości.",
                    "en" => "Team collaboration to coordinate high-altitude work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18102,
                "name" => json_encode([
                    "pl" => "Montaż systemów zabezpieczeń antyupadkowych.",
                    "en" => "Installation of fall protection systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18103,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji technicznych trudno dostępnych miejsc.",
                    "en" => "Conducting technical inspections of hard-to-reach areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18104,
                "name" => json_encode([
                    "pl" => "Praca w różnych warunkach atmosferycznych.",
                    "en" => "Working in various weather conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $CZYŚCICIEL_ELEWACJI_BUDOWLANYCH = [

            [
                "id" => 18105,
                "name" => json_encode([
                    "pl" => "Mycie i czyszczenie elewacji budynków z zabrudzeń, graffiti, zanieczyszczeń atmosferycznych.",
                    "en" => "Washing and cleaning building facades from dirt, graffiti, and atmospheric pollution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18106,
                "name" => json_encode([
                    "pl" => "Obsługa sprzętu do czyszczenia, takiego jak myjki ciśnieniowe, szczotki, podnośniki.",
                    "en" => "Operating cleaning equipment such as pressure washers, brushes, and lifts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18107,
                "name" => json_encode([
                    "pl" => "Stosowanie odpowiednich środków chemicznych do usuwania zabrudzeń.",
                    "en" => "Using appropriate chemical agents to remove stains."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18108,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP, szczególnie podczas pracy na wysokościach.",
                    "en" => "Adhering to health and safety regulations, especially when working at heights."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18109,
                "name" => json_encode([
                    "pl" => "Przygotowanie i zabezpieczanie terenu pracy przed rozpoczęciem czyszczenia.",
                    "en" => "Preparing and securing the work area before starting cleaning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18110,
                "name" => json_encode([
                    "pl" => "Ocena stanu technicznego elewacji przed rozpoczęciem prac.",
                    "en" => "Assessing the technical condition of the facade before starting work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18111,
                "name" => json_encode([
                    "pl" => "Czyszczenie trudnodostępnych miejsc z wykorzystaniem technik alpinistycznych.",
                    "en" => "Cleaning hard-to-reach areas using alpinist techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18112,
                "name" => json_encode([
                    "pl" => "Usuwanie graffiti i innych trudnych zabrudzeń z elewacji.",
                    "en" => "Removing graffiti and other difficult stains from facades."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18113,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych prac oraz ocena efektów czyszczenia.",
                    "en" => "Documenting completed work and evaluating cleaning results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18114,
                "name" => json_encode([
                    "pl" => "Współpraca z właścicielami budynków i administratorami w zakresie planowania czyszczenia.",
                    "en" => "Cooperating with building owners and administrators in cleaning planning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $KOMINIARZ = [

            [
                "id" => 18115,
                "name" => json_encode([
                    "pl" => "Czyszczenie kominów, przewodów wentylacyjnych oraz systemów spalinowych.",
                    "en" => "Cleaning chimneys, ventilation ducts, and exhaust systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18116,
                "name" => json_encode([
                    "pl" => "Kontrola stanu technicznego kominów i przewodów dymowych.",
                    "en" => "Inspecting the technical condition of chimneys and smoke ducts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18117,
                "name" => json_encode([
                    "pl" => "Instalacja i naprawa elementów systemów wentylacyjnych i kominowych.",
                    "en" => "Installing and repairing elements of ventilation and chimney systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18118,
                "name" => json_encode([
                    "pl" => "Usuwanie sadzy i zanieczyszczeń z kominów.",
                    "en" => "Removing soot and debris from chimneys."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18119,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie pomiarów szczelności i wydajności przewodów kominowych.",
                    "en" => "Performing measurements of chimney duct tightness and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18120,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm BHP oraz przepisów dotyczących bezpieczeństwa pożarowego.",
                    "en" => "Adhering to occupational health and safety standards and fire safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18121,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów z kontroli technicznych.",
                    "en" => "Preparing reports from technical inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18122,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie poprawy bezpieczeństwa i efektywności systemów kominowych.",
                    "en" => "Advising on improving the safety and efficiency of chimney systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18123,
                "name" => json_encode([
                    "pl" => "Montaż i konserwacja urządzeń zabezpieczających przed zapłonem sadzy.",
                    "en" => "Installing and maintaining devices to prevent soot ignition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18124,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji technicznych przed rozpoczęciem sezonu grzewczego.",
                    "en" => "Conducting technical inspections before the heating season."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TYNKARZE_I_POKREWNI = [

            [
                "id" => 18125,
                "name" => json_encode([
                    "pl" => "Nakładanie tynków na ściany wewnętrzne i zewnętrzne budynków.",
                    "en" => "Applying plasters to interior and exterior building walls."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18126,
                "name" => json_encode([
                    "pl" => "Przygotowanie powierzchni do tynkowania (gruntowanie, oczyszczanie).",
                    "en" => "Preparing surfaces for plastering (priming, cleaning)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18127,
                "name" => json_encode([
                    "pl" => "Wykonywanie tynków gipsowych, cementowo-wapiennych oraz dekoracyjnych.",
                    "en" => "Creating gypsum, cement-lime, and decorative plasters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18128,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi do nakładania tynków, takich jak kielnie, pędzle, agregaty tynkarskie.",
                    "en" => "Operating tools for plaster application, such as trowels, brushes, and plaster machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18129,
                "name" => json_encode([
                    "pl" => "Konserwacja i naprawa uszkodzonych tynków.",
                    "en" => "Maintaining and repairing damaged plasters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18130,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad technologicznych i norm jakościowych przy wykonywaniu tynków.",
                    "en" => "Adhering to technological principles and quality standards in plaster work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18131,
                "name" => json_encode([
                    "pl" => "Dbałość o estetykę i równomierność nałożonych warstw.",
                    "en" => "Ensuring the aesthetics and uniformity of applied layers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18132,
                "name" => json_encode([
                    "pl" => "Montaż ozdobnych elementów tynkarskich (listwy, profile).",
                    "en" => "Installing decorative plaster elements (moldings, profiles)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18133,
                "name" => json_encode([
                    "pl" => "Utrzymanie czystości miejsca pracy oraz narzędzi.",
                    "en" => "Maintaining cleanliness of the workspace and tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18134,
                "name" => json_encode([
                    "pl" => "Sporządzanie wycen i planowanie ilości materiałów potrzebnych do realizacji zadań.",
                    "en" => "Preparing cost estimates and planning material quantities needed for tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MONTER_KAMIENNYCH_ELEMENTÓW_BUDOWLANYCH = [

            [
                "id" => 18135,
                "name" => json_encode([
                    "pl" => "Montaż elementów kamiennych, takich jak schody, parapety, blaty, fasady.",
                    "en" => "Installation of stone elements, such as stairs, windowsills, countertops, and facades."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18136,
                "name" => json_encode([
                    "pl" => "Przygotowanie powierzchni do montażu kamienia.",
                    "en" => "Preparing surfaces for stone installation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18137,
                "name" => json_encode([
                    "pl" => "Cięcie, polerowanie i obróbka kamienia naturalnego oraz sztucznego.",
                    "en" => "Cutting, polishing, and processing natural and artificial stone."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18138,
                "name" => json_encode([
                    "pl" => "Wykorzystanie specjalistycznych narzędzi do montażu elementów kamiennych.",
                    "en" => "Using specialized tools for installing stone elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18139,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm jakościowych oraz zasad BHP.",
                    "en" => "Adhering to quality standards and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18140,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja elementów kamiennych.",
                    "en" => "Repairing and maintaining stone elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18141,
                "name" => json_encode([
                    "pl" => "Montaż kamiennych elementów ozdobnych, takich jak rzeźby, kolumny.",
                    "en" => "Installing decorative stone elements, such as sculptures and columns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18142,
                "name" => json_encode([
                    "pl" => "Współpraca z projektantami wnętrz i architektami przy realizacji projektów.",
                    "en" => "Collaborating with interior designers and architects on projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18143,
                "name" => json_encode([
                    "pl" => "Przygotowywanie zapraw klejących oraz ich aplikacja.",
                    "en" => "Preparing adhesive mortars and applying them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18144,
                "name" => json_encode([
                    "pl" => "Dokumentowanie prac montażowych oraz raportowanie postępów.",
                    "en" => "Documenting installation work and reporting progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MURARZ = [

            [
                "id" => 18145,
                "name" => json_encode([
                    "pl" => "Budowa ścian, fundamentów oraz innych elementów konstrukcyjnych z cegieł, bloczków, pustaków.",
                    "en" => "Construction of walls, foundations, and other structural elements using bricks, blocks, and hollow bricks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18146,
                "name" => json_encode([
                    "pl" => "Przygotowanie zaprawy murarskiej oraz mieszanie betonu.",
                    "en" => "Preparation of mortar and concrete mixing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18147,
                "name" => json_encode([
                    "pl" => "Montaż nadproży, stropów i innych elementów konstrukcyjnych.",
                    "en" => "Installation of lintels, ceilings, and other structural components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18148,
                "name" => json_encode([
                    "pl" => "Wykonywanie izolacji przeciwwilgociowych oraz termicznych.",
                    "en" => "Implementation of waterproofing and thermal insulation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18149,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm budowlanych oraz technologii wykonania.",
                    "en" => "Adherence to construction standards and execution technology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18150,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi murarskich, takich jak kielnie, młotki murarskie, poziomice.",
                    "en" => "Handling masonry tools such as trowels, brick hammers, and spirit levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18151,
                "name" => json_encode([
                    "pl" => "Kontrola poziomów, pionów oraz prawidłowości wymiarów.",
                    "en" => "Checking levels, vertical alignment, and dimensional accuracy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18152,
                "name" => json_encode([
                    "pl" => "Naprawa uszkodzonych elementów murarskich.",
                    "en" => "Repair of damaged masonry elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18153,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami budowlanymi na placu budowy.",
                    "en" => "Collaboration with other construction workers on-site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18154,
                "name" => json_encode([
                    "pl" => "Utrzymanie porządku na stanowisku pracy.",
                    "en" => "Maintaining cleanliness at the worksite."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $ZDUN = [

            [
                "id" => 18155,
                "name" => json_encode([
                    "pl" => "Budowa oraz naprawa pieców kaflowych, kominków, kuchni węglowych.",
                    "en" => "Construction and repair of tiled stoves, fireplaces, and coal-fired stoves."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18156,
                "name" => json_encode([
                    "pl" => "Montaż i konserwacja przewodów dymowych i spalinowych.",
                    "en" => "Installation and maintenance of smoke and flue pipes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18157,
                "name" => json_encode([
                    "pl" => "Układanie kafli ceramicznych oraz wykonywanie zdobień pieców.",
                    "en" => "Laying ceramic tiles and creating decorative designs on stoves."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18158,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad technologicznych i norm jakościowych.",
                    "en" => "Adherence to technological guidelines and quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18159,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie wyboru odpowiednich materiałów i technologii grzewczych.",
                    "en" => "Advising on the selection of appropriate materials and heating technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18160,
                "name" => json_encode([
                    "pl" => "Czyszczenie i konserwacja pieców oraz kominków.",
                    "en" => "Cleaning and maintenance of stoves and fireplaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18161,
                "name" => json_encode([
                    "pl" => "Praca z materiałami ogniotrwałymi, takimi jak glina, cegły szamotowe.",
                    "en" => "Working with fire-resistant materials, such as clay and fire bricks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18162,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP podczas pracy z ogniem i wysokimi temperaturami.",
                    "en" => "Following safety regulations when working with fire and high temperatures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18163,
                "name" => json_encode([
                    "pl" => "Naprawa uszkodzonych elementów pieców oraz kominków.",
                    "en" => "Repairing damaged components of stoves and fireplaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18164,
                "name" => json_encode([
                    "pl" => "Współpraca z klientami w celu dostosowania projektu do ich potrzeb.",
                    "en" => "Collaborating with clients to tailor designs to their needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MURARZ_TYNKARZ = [

            [
                "id" => 18165,
                "name" => json_encode([
                    "pl" => "Budowa ścian oraz innych elementów konstrukcyjnych z cegieł i bloczków.",
                    "en" => "Construction of walls and other structural elements using bricks and blocks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18166,
                "name" => json_encode([
                    "pl" => "Nakładanie tynków na powierzchnie budowlane wewnętrzne i zewnętrzne.",
                    "en" => "Application of plaster to interior and exterior building surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18167,
                "name" => json_encode([
                    "pl" => "Przygotowanie powierzchni do tynkowania i murowania.",
                    "en" => "Preparing surfaces for plastering and masonry work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18168,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi murarskich oraz tynkarskich.",
                    "en" => "Operating masonry and plastering tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18169,
                "name" => json_encode([
                    "pl" => "Mieszanie zapraw murarskich oraz tynkarskich.",
                    "en" => "Mixing masonry and plastering mortars."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18170,
                "name" => json_encode([
                    "pl" => "Montaż nadproży, parapetów, listw dekoracyjnych.",
                    "en" => "Installing lintels, window sills, and decorative moldings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18171,
                "name" => json_encode([
                    "pl" => "Konserwacja i naprawa ścian oraz tynków.",
                    "en" => "Maintenance and repair of walls and plasters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18172,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm technologicznych i przepisów budowlanych.",
                    "en" => "Adhering to technological standards and building regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18173,
                "name" => json_encode([
                    "pl" => "Dbałość o estetykę wykończenia powierzchni.",
                    "en" => "Ensuring the aesthetic finish of surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18174,
                "name" => json_encode([
                    "pl" => "Utrzymanie porządku w miejscu pracy oraz dbanie o narzędzia i materiały.",
                    "en" => "Maintaining cleanliness at the workplace and taking care of tools and materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MONTERZY_IZOLACJI = [

            [
                "id" => 18175,
                "name" => json_encode([
                    "pl" => "Instalacja materiałów izolacyjnych w budynkach (izolacje termiczne, akustyczne, przeciwpożarowe).",
                    "en" => "Installation of insulation materials in buildings (thermal, acoustic, fireproof insulation)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18176,
                "name" => json_encode([
                    "pl" => "Wybór odpowiednich materiałów izolacyjnych zgodnie z wymaganiami projektu.",
                    "en" => "Selecting appropriate insulation materials according to project requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18177,
                "name" => json_encode([
                    "pl" => "Przygotowanie powierzchni do montażu izolacji (czyszczenie, gruntowanie).",
                    "en" => "Preparing surfaces for insulation installation (cleaning, priming)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18178,
                "name" => json_encode([
                    "pl" => "Montaż płyt izolacyjnych, mat, pianek, wełny mineralnej i innych materiałów izolacyjnych.",
                    "en" => "Installing insulation boards, mats, foams, mineral wool, and other insulation materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18179,
                "name" => json_encode([
                    "pl" => "Uszczelnianie połączeń oraz montaż taśm izolacyjnych.",
                    "en" => "Sealing joints and installing insulation tapes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18180,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm i przepisów dotyczących efektywności energetycznej.",
                    "en" => "Adhering to standards and regulations regarding energy efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18181,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja istniejących izolacji.",
                    "en" => "Repairing and maintaining existing insulation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18182,
                "name" => json_encode([
                    "pl" => "Wykonywanie testów szczelności i efektywności izolacji.",
                    "en" => "Conducting tests for insulation tightness and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18183,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi do cięcia i montażu izolacji.",
                    "en" => "Operating tools for cutting and installing insulation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18184,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP, zwłaszcza podczas pracy z materiałami niebezpiecznymi (np. wełną mineralną).",
                    "en" => "Following health and safety regulations, especially when working with hazardous materials (e.g., mineral wool)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $BRUKARZ = [

            [
                "id" => 18185,
                "name" => json_encode([
                    "pl" => "Układanie kostki brukowej, płytek chodnikowych, płyt betonowych i kamienia.",
                    "en" => "Laying paving stones, sidewalk tiles, concrete slabs, and stones."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18186,
                "name" => json_encode([
                    "pl" => "Przygotowanie terenu pod nawierzchnię brukową (niwelacja, wyrównanie, zagęszczenie podłoża).",
                    "en" => "Preparing the ground for paving surfaces (leveling, smoothing, compacting the base)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18187,
                "name" => json_encode([
                    "pl" => "Przygotowanie mieszanki piasku, cementu i innych materiałów do podbudowy.",
                    "en" => "Preparing a mixture of sand, cement, and other materials for the base."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18188,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi brukarskich, takich jak wibratory płytowe, zagęszczarki.",
                    "en" => "Operating paving tools such as plate vibrators and compactors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18189,
                "name" => json_encode([
                    "pl" => "Ustalanie linii i poziomów nawierzchni.",
                    "en" => "Setting lines and levels for the surface."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18190,
                "name" => json_encode([
                    "pl" => "Montaż krawężników, obrzeży oraz innych elementów wykończeniowych.",
                    "en" => "Installing curbs, edges, and other finishing elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18191,
                "name" => json_encode([
                    "pl" => "Przestrzeganie wytycznych projektowych i technicznych.",
                    "en" => "Adhering to project and technical guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18192,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja istniejących nawierzchni brukowych.",
                    "en" => "Repairing and maintaining existing paved surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18193,
                "name" => json_encode([
                    "pl" => "Czyszczenie i usuwanie zanieczyszczeń po zakończeniu pracy.",
                    "en" => "Cleaning and removing debris after work completion."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18194,
                "name" => json_encode([
                    "pl" => "Dbanie o estetykę i jakość wykonania nawierzchni.",
                    "en" => "Ensuring the aesthetics and quality of the finished surface."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $DEKARZE = [

            [
                "id" => 18195,
                "name" => json_encode([
                    "pl" => "Montaż i naprawa pokryć dachowych (dachówki, blachy, gonty, papa, membrany dachowe).",
                    "en" => "Installation and repair of roof coverings (tiles, metal sheets, shingles, tar paper, roofing membranes)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18196,
                "name" => json_encode([
                    "pl" => "Przygotowanie konstrukcji dachu do montażu pokrycia.",
                    "en" => "Preparing roof structures for covering installation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18197,
                "name" => json_encode([
                    "pl" => "Montaż systemów odprowadzania wody deszczowej (rynny, rury spustowe).",
                    "en" => "Installing rainwater drainage systems (gutters, downpipes)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18198,
                "name" => json_encode([
                    "pl" => "Wykonywanie izolacji przeciwwilgociowych oraz ocieplenia dachu.",
                    "en" => "Applying waterproofing and roof insulation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18199,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi dekarskich, takich jak młotki dekarskie, nożyce do blachy.",
                    "en" => "Using roofing tools such as roofing hammers, tin snips."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18200,
                "name" => json_encode([
                    "pl" => "Wymiana uszkodzonych elementów dachowych oraz konserwacja istniejących pokryć.",
                    "en" => "Replacing damaged roofing elements and maintaining existing coverings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18201,
                "name" => json_encode([
                    "pl" => "Instalacja okien dachowych, świetlików, kominów.",
                    "en" => "Installing roof windows, skylights, chimneys."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18202,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm BHP, zwłaszcza podczas pracy na wysokości.",
                    "en" => "Following safety regulations, especially when working at heights."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18203,
                "name" => json_encode([
                    "pl" => "Sprawdzanie szczelności pokryć dachowych i wykonywanie napraw.",
                    "en" => "Inspecting the tightness of roof coverings and performing repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18204,
                "name" => json_encode([
                    "pl" => "Dokumentowanie postępu prac oraz prowadzenie ewidencji materiałów.",
                    "en" => "Documenting work progress and keeping records of materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $BLACHARZ = [

            [
                "id" => 18205,
                "name" => json_encode([
                    "pl" => "Montaż i naprawa elementów blaszanych w budownictwie (obróbki blacharskie, parapety, rynny).",
                    "en" => "Installation and repair of sheet metal elements in construction (flashing, window sills, gutters)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18206,
                "name" => json_encode([
                    "pl" => "Przygotowanie oraz obróbka blachy (cięcie, gięcie, lutowanie).",
                    "en" => "Preparation and processing of sheet metal (cutting, bending, soldering)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18207,
                "name" => json_encode([
                    "pl" => "Montaż blaszanych pokryć dachowych oraz fasad.",
                    "en" => "Installation of metal roof coverings and facades."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18208,
                "name" => json_encode([
                    "pl" => "Wykonywanie detali i elementów wykończeniowych z blachy.",
                    "en" => "Fabricating details and finishing elements from sheet metal."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18209,
                "name" => json_encode([
                    "pl" => "Uszczelnianie i zabezpieczanie połączeń elementów blaszanych.",
                    "en" => "Sealing and securing connections of sheet metal elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18210,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja elementów blaszanych.",
                    "en" => "Repair and maintenance of sheet metal elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18211,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm technicznych i zasad bezpieczeństwa przy pracy z blachą.",
                    "en" => "Compliance with technical standards and safety rules when working with sheet metal."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18212,
                "name" => json_encode([
                    "pl" => "Obsługa specjalistycznych narzędzi do obróbki blachy (giętarki, nożyce, zaginarki).",
                    "en" => "Operation of specialized tools for sheet metal processing (benders, shears, folding machines)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18213,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi specjalistami w zakresie montażu i napraw elementów blaszanych.",
                    "en" => "Collaboration with other specialists in the installation and repair of sheet metal elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18214,
                "name" => json_encode([
                    "pl" => "Dbanie o estetykę oraz precyzję wykonania.",
                    "en" => "Ensuring aesthetics and precision in execution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MONTER_SKLADACZ_OKIEN = [

            [
                "id" => 18215,
                "name" => json_encode([
                    "pl" => "Montaż okien z różnych materiałów (PCV, drewno, aluminium).",
                    "en" => "Installation of windows made of various materials (PVC, wood, aluminum)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18216,
                "name" => json_encode([
                    "pl" => "Przygotowanie otworów okiennych oraz instalacja parapetów wewnętrznych i zewnętrznych.",
                    "en" => "Preparation of window openings and installation of internal and external sills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18217,
                "name" => json_encode([
                    "pl" => "Montaż i uszczelnianie okien przy użyciu pianek i taśm izolacyjnych.",
                    "en" => "Installation and sealing of windows using foams and insulation tapes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18218,
                "name" => json_encode([
                    "pl" => "Regulacja okien oraz kontrola szczelności.",
                    "en" => "Adjustment of windows and inspection of their tightness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18219,
                "name" => json_encode([
                    "pl" => "Demontaż starych okien oraz przygotowanie ich do utylizacji.",
                    "en" => "Removal of old windows and preparation for disposal."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18220,
                "name" => json_encode([
                    "pl" => "Naprawa uszkodzonych okien i konserwacja elementów okiennych.",
                    "en" => "Repair of damaged windows and maintenance of window components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18221,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi montażowych, takich jak wkrętarki, poziomice, pianki montażowe.",
                    "en" => "Operation of assembly tools such as screwdrivers, levels, mounting foams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18222,
                "name" => json_encode([
                    "pl" => "Współpraca z klientami w zakresie doboru odpowiednich okien i akcesoriów.",
                    "en" => "Collaboration with clients in selecting appropriate windows and accessories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18223,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm jakościowych i technologicznych montażu okien.",
                    "en" => "Adherence to quality and technological standards of window installation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18224,
                "name" => json_encode([
                    "pl" => "Dbanie o estetykę montażu i czystość miejsca pracy.",
                    "en" => "Ensuring the aesthetic quality of installation and cleanliness of the workspace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $SZKLARZ = [

            [
                "id" => 18225,
                "name" => json_encode([
                    "pl" => "Cięcie, montaż oraz naprawa szyb i elementów szklanych.",
                    "en" => "Cutting, installing, and repairing glass panes and glass elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18226,
                "name" => json_encode([
                    "pl" => "Instalacja szklanych ścianek, drzwi, balustrad oraz kabin prysznicowych.",
                    "en" => "Installation of glass walls, doors, railings, and shower cabins."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18227,
                "name" => json_encode([
                    "pl" => "Przygotowanie szkła do montażu (cięcie, szlifowanie, wiercenie otworów).",
                    "en" => "Preparing glass for installation (cutting, grinding, drilling holes)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18228,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi do obróbki szkła, takich jak noże szklarskie, szlifierki.",
                    "en" => "Operating glass processing tools, such as glass cutters and grinders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18229,
                "name" => json_encode([
                    "pl" => "Montaż szyb w ramach okiennych oraz witrynach sklepowych.",
                    "en" => "Installing glass panes in window frames and shop displays."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18230,
                "name" => json_encode([
                    "pl" => "Uszczelnianie i zabezpieczanie elementów szklanych.",
                    "en" => "Sealing and securing glass elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18231,
                "name" => json_encode([
                    "pl" => "Demontaż starych szyb oraz przygotowanie ich do recyklingu.",
                    "en" => "Removing old glass panes and preparing them for recycling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18232,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi specjalistami przy realizacji projektów szklanych.",
                    "en" => "Collaborating with other specialists in glass project implementation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18233,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP podczas pracy ze szkłem.",
                    "en" => "Adhering to occupational health and safety rules when working with glass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18234,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie doboru odpowiednich rodzajów szkła i materiałów uszczelniających.",
                    "en" => "Advising on the selection of appropriate types of glass and sealing materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MONTER_ZALUZJI = [

            [
                "id" => 18235,
                "name" => json_encode([
                    "pl" => "Montaż żaluzji, rolet oraz innych osłon okiennych.",
                    "en" => "Installation of blinds, roller shutters, and other window coverings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18236,
                "name" => json_encode([
                    "pl" => "Przygotowanie okien do instalacji osłon (pomiar, oznaczenie punktów montażowych).",
                    "en" => "Preparing windows for installation of coverings (measuring, marking mounting points)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18237,
                "name" => json_encode([
                    "pl" => "Montaż karniszy, prowadnic oraz mechanizmów do sterowania żaluzjami.",
                    "en" => "Installing curtain rods, guides, and mechanisms for operating blinds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18238,
                "name" => json_encode([
                    "pl" => "Regulacja i naprawa istniejących systemów żaluzji i rolet.",
                    "en" => "Adjusting and repairing existing blind and roller shutter systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18239,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie doboru odpowiednich materiałów i systemów osłonowych.",
                    "en" => "Advising on the selection of appropriate materials and covering systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18240,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi do montażu, takich jak wkrętarki, poziomice.",
                    "en" => "Using installation tools such as screwdrivers and levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18241,
                "name" => json_encode([
                    "pl" => "Współpraca z klientami przy projektowaniu oraz doborze osłon.",
                    "en" => "Collaborating with clients in designing and selecting coverings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18242,
                "name" => json_encode([
                    "pl" => "Przestrzeganie wytycznych dotyczących instalacji oraz bezpieczeństwa.",
                    "en" => "Adhering to installation and safety guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18243,
                "name" => json_encode([
                    "pl" => "Konserwacja i czyszczenie zamontowanych żaluzji i rolet.",
                    "en" => "Maintaining and cleaning installed blinds and roller shutters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18244,
                "name" => json_encode([
                    "pl" => "Dbanie o estetykę oraz precyzję montażu.",
                    "en" => "Ensuring the aesthetic and precise installation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TECHNIK_ROBOT_WYKONCZENIOWYCH_W_BUDOWNICTWIE = [

            [
                "id" => 18245,
                "name" => json_encode([
                    "pl" => "Prace wykończeniowe wewnątrz budynków, takie jak malowanie, tapetowanie, montaż sufitów podwieszanych.",
                    "en" => "Interior finishing work, such as painting, wallpapering, and installing suspended ceilings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18246,
                "name" => json_encode([
                    "pl" => "Układanie płytek, paneli podłogowych oraz montaż listew przypodłogowych.",
                    "en" => "Laying tiles, flooring panels, and installing skirting boards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18247,
                "name" => json_encode([
                    "pl" => "Montaż stolarki drzwiowej i okiennej.",
                    "en" => "Installation of door and window joinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18248,
                "name" => json_encode([
                    "pl" => "Przygotowanie ścian i podłóg do wykończenia (szpachlowanie, gruntowanie).",
                    "en" => "Preparing walls and floors for finishing (plastering, priming)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18249,
                "name" => json_encode([
                    "pl" => "Montaż sufitów podwieszanych oraz elementów dekoracyjnych.",
                    "en" => "Installing suspended ceilings and decorative elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18250,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi wykończeniowych, takich jak wiertarki, młotki, szpachelki.",
                    "en" => "Operating finishing tools such as drills, hammers, and spatulas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18251,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm jakościowych oraz wytycznych projektowych.",
                    "en" => "Adhering to quality standards and project guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18252,
                "name" => json_encode([
                    "pl" => "Dbanie o czystość i porządek na miejscu pracy.",
                    "en" => "Maintaining cleanliness and order at the work site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18253,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi specjalistami wykończeniowymi.",
                    "en" => "Collaborating with other finishing specialists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18254,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych prac oraz raportowanie postępów.",
                    "en" => "Documenting completed work and reporting progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $POSADZKARZE_PARKIECIARZE_GLAZURNICY = [

            [
                "id" => 18255,
                "name" => json_encode([
                    "pl" => "Układanie podłóg drewnianych, paneli, płytek ceramicznych, parkietów.",
                    "en" => "Laying wooden floors, panels, ceramic tiles, and parquet."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18256,
                "name" => json_encode([
                    "pl" => "Przygotowanie podłoża pod montaż posadzek (wyrównanie, szlifowanie).",
                    "en" => "Preparing the substrate for floor installation (leveling, grinding)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18257,
                "name" => json_encode([
                    "pl" => "Przygotowanie mieszanki klejowej oraz montaż elementów wykończeniowych.",
                    "en" => "Preparing adhesive mixtures and installing finishing elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18258,
                "name" => json_encode([
                    "pl" => "Montaż listew przypodłogowych oraz progów.",
                    "en" => "Installing skirting boards and thresholds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18259,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi do układania posadzek, takich jak piły, szlifierki, poziomice.",
                    "en" => "Operating tools for floor installation, such as saws, grinders, and levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18260,
                "name" => json_encode([
                    "pl" => "Konserwacja oraz naprawa istniejących podłóg i posadzek.",
                    "en" => "Maintaining and repairing existing floors and pavements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18261,
                "name" => json_encode([
                    "pl" => "Przestrzeganie wytycznych technologicznych oraz norm jakościowych.",
                    "en" => "Adhering to technological guidelines and quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18262,
                "name" => json_encode([
                    "pl" => "Współpraca z projektantami wnętrz oraz klientami w zakresie doboru materiałów.",
                    "en" => "Collaborating with interior designers and clients to select materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18263,
                "name" => json_encode([
                    "pl" => "Dbanie o estetykę oraz precyzję wykończenia powierzchni.",
                    "en" => "Ensuring the aesthetics and precision of surface finishing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18264,
                "name" => json_encode([
                    "pl" => "Czyszczenie i impregnacja podłóg po zakończeniu montażu.",
                    "en" => "Cleaning and impregnating floors after installation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MALARZ_TAPECIARZ = [

            [
                "id" => 18265,
                "name" => json_encode([
                    "pl" => "Malowanie ścian, sufitów oraz innych powierzchni wewnętrznych i zewnętrznych.",
                    "en" => "Painting walls, ceilings, and other interior and exterior surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18266,
                "name" => json_encode([
                    "pl" => "Nakładanie tapet oraz materiałów dekoracyjnych na ściany.",
                    "en" => "Applying wallpapers and decorative materials to walls."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18267,
                "name" => json_encode([
                    "pl" => "Przygotowanie powierzchni do malowania i tapetowania (gruntowanie, szlifowanie, usuwanie starych powłok).",
                    "en" => "Preparing surfaces for painting and wallpapering (priming, sanding, removing old coatings)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18268,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich farb, lakierów oraz narzędzi malarskich.",
                    "en" => "Selecting appropriate paints, varnishes, and painting tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18269,
                "name" => json_encode([
                    "pl" => "Wykonywanie efektów dekoracyjnych, takich jak przecierki, szablony.",
                    "en" => "Creating decorative effects such as faux finishes and stenciling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18270,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi malarskich, takich jak pędzle, wałki, pistolety natryskowe.",
                    "en" => "Operating painting tools, including brushes, rollers, and spray guns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18271,
                "name" => json_encode([
                    "pl" => "Przestrzeganie wytycznych projektowych oraz technologicznych.",
                    "en" => "Adhering to design guidelines and technological standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18272,
                "name" => json_encode([
                    "pl" => "Konserwacja i naprawa malowanych oraz tapetowanych powierzchni.",
                    "en" => "Maintaining and repairing painted and wallpapered surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18273,
                "name" => json_encode([
                    "pl" => "Czyszczenie narzędzi oraz porządkowanie miejsca pracy.",
                    "en" => "Cleaning tools and tidying up the workspace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18274,
                "name" => json_encode([
                    "pl" => "Dbanie o estetykę i jakość wykończenia.",
                    "en" => "Ensuring aesthetics and quality of finishing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MALARZ_BUDOWLANY = [

            [
                "id" => 18275,
                "name" => json_encode([
                    "pl" => "Malowanie elewacji oraz wnętrz budynków.",
                    "en" => "Painting building exteriors and interiors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18276,
                "name" => json_encode([
                    "pl" => "Przygotowanie powierzchni do malowania (szpachlowanie, gruntowanie, oczyszczanie).",
                    "en" => "Preparing surfaces for painting (filling, priming, cleaning)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18277,
                "name" => json_encode([
                    "pl" => "Nakładanie farb, lakierów oraz bejc na różne powierzchnie.",
                    "en" => "Applying paints, varnishes, and stains on various surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18278,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi malarskich, takich jak wałki, pędzle, agregaty malarskie.",
                    "en" => "Using painting tools like rollers, brushes, and spray guns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18279,
                "name" => json_encode([
                    "pl" => "Malowanie detali architektonicznych oraz elementów dekoracyjnych.",
                    "en" => "Painting architectural details and decorative elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18280,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm jakościowych oraz wytycznych projektowych.",
                    "en" => "Adhering to quality standards and project guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18281,
                "name" => json_encode([
                    "pl" => "Ochrona i zabezpieczanie elementów, które nie są malowane.",
                    "en" => "Protecting and covering elements that are not to be painted."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18282,
                "name" => json_encode([
                    "pl" => "Konserwacja i odnawianie starych powłok malarskich.",
                    "en" => "Maintaining and restoring old paint coatings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18283,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi specjalistami budowlanymi.",
                    "en" => "Collaborating with other construction professionals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18284,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych prac oraz raportowanie postępów.",
                    "en" => "Documenting completed work and reporting progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $SZPACHLARZ = [

            [
                "id" => 18285,
                "name" => json_encode([
                    "pl" => "Wyrównywanie ścian i sufitów za pomocą szpachli oraz mas gipsowych.",
                    "en" => "Leveling walls and ceilings using filler and gypsum compounds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18286,
                "name" => json_encode([
                    "pl" => "Przygotowanie powierzchni do malowania oraz innych prac wykończeniowych.",
                    "en" => "Preparing surfaces for painting and other finishing works."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18287,
                "name" => json_encode([
                    "pl" => "Naprawa uszkodzeń, pęknięć i nierówności na ścianach i sufitach.",
                    "en" => "Repairing damages, cracks, and irregularities on walls and ceilings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18288,
                "name" => json_encode([
                    "pl" => "Nakładanie mas szpachlowych za pomocą narzędzi takich jak szpachelki, paca, wałki.",
                    "en" => "Applying filler compounds using tools like spatulas, trowels, and rollers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18289,
                "name" => json_encode([
                    "pl" => "Szlifowanie powierzchni do uzyskania gładkości.",
                    "en" => "Sanding surfaces to achieve smoothness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18290,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm technologicznych oraz zaleceń producentów materiałów.",
                    "en" => "Following technological standards and material manufacturer recommendations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18291,
                "name" => json_encode([
                    "pl" => "Przygotowanie mieszanki szpachlowej oraz dobór odpowiednich materiałów.",
                    "en" => "Preparing filler mixtures and selecting appropriate materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18292,
                "name" => json_encode([
                    "pl" => "Prace wykończeniowe w trudno dostępnych miejscach.",
                    "en" => "Performing finishing works in hard-to-reach areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18293,
                "name" => json_encode([
                    "pl" => "Dbanie o czystość oraz porządek na miejscu pracy.",
                    "en" => "Maintaining cleanliness and order at the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18294,
                "name" => json_encode([
                    "pl" => "Współpraca z malarzami oraz innymi specjalistami wykończeniowymi.",
                    "en" => "Collaborating with painters and other finishing specialists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TAPECIARZ = [

            [
                "id" => 18295,
                "name" => json_encode([
                    "pl" => "Przygotowanie powierzchni do nakładania tapet (gruntowanie, wygładzanie, oczyszczanie).",
                    "en" => "Preparing surfaces for wallpaper application (priming, smoothing, cleaning)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18296,
                "name" => json_encode([
                    "pl" => "Nakładanie tapet na ściany oraz inne powierzchnie wewnętrzne.",
                    "en" => "Applying wallpaper to walls and other interior surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18297,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów tapetowych oraz klejów.",
                    "en" => "Selecting appropriate wallpaper materials and adhesives."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18298,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi tapetarskich, takich jak wałki, noże do tapet, szczotki do wygładzania.",
                    "en" => "Using wallpapering tools such as rollers, wallpaper knives, smoothing brushes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18299,
                "name" => json_encode([
                    "pl" => "Usuwanie starych tapet oraz przygotowanie ścian do nowych pokryć.",
                    "en" => "Removing old wallpaper and preparing walls for new coverings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18300,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm jakościowych oraz wytycznych projektowych.",
                    "en" => "Adhering to quality standards and project guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18301,
                "name" => json_encode([
                    "pl" => "Montaż tapet z wzorami oraz dbałość o precyzyjne łączenia.",
                    "en" => "Installing patterned wallpaper with attention to precise alignment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18302,
                "name" => json_encode([
                    "pl" => "Dbanie o estetykę wykończenia oraz czystość powierzchni.",
                    "en" => "Ensuring aesthetic finishes and cleanliness of surfaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18303,
                "name" => json_encode([
                    "pl" => "Naprawa uszkodzonych tapet oraz konserwacja istniejących pokryć.",
                    "en" => "Repairing damaged wallpaper and maintaining existing coverings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18304,
                "name" => json_encode([
                    "pl" => "Współpraca z klientami oraz innymi specjalistami wykończeniowymi.",
                    "en" => "Collaborating with clients and other finishing specialists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $HYDRAULICY_I_MONTERZY_RUROCIAGOW = [

            [
                "id" => 18305,
                "name" => json_encode([
                    "pl" => "Instalacja, naprawa i konserwacja systemów wodno-kanalizacyjnych, grzewczych oraz gazowych.",
                    "en" => "Installation, repair, and maintenance of plumbing, heating, and gas systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18306,
                "name" => json_encode([
                    "pl" => "Montaż i podłączanie rur, kształtek, zaworów oraz urządzeń sanitarnych.",
                    "en" => "Assembly and connection of pipes, fittings, valves, and sanitary appliances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18307,
                "name" => json_encode([
                    "pl" => "Wykonywanie pomiarów oraz przygotowanie rurociągów do montażu.",
                    "en" => "Performing measurements and preparing pipelines for installation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18308,
                "name" => json_encode([
                    "pl" => "Uszczelnianie połączeń rur przy użyciu taśm, uszczelek oraz środków chemicznych.",
                    "en" => "Sealing pipe connections using tapes, gaskets, and chemical agents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18309,
                "name" => json_encode([
                    "pl" => "Wykrywanie i naprawa przecieków oraz awarii instalacji hydraulicznych.",
                    "en" => "Detecting and repairing leaks and failures in plumbing systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18310,
                "name" => json_encode([
                    "pl" => "Przeglądy techniczne systemów wodnych i grzewczych oraz ocena ich stanu technicznego.",
                    "en" => "Conducting technical inspections of water and heating systems and assessing their condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18311,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm bezpieczeństwa, w tym pracy z gazem oraz wysokimi ciśnieniami.",
                    "en" => "Adhering to safety standards, including working with gas and high-pressure systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18312,
                "name" => json_encode([
                    "pl" => "Ustalanie trasy prowadzenia rur oraz dobór odpowiednich materiałów.",
                    "en" => "Determining the routing of pipes and selecting appropriate materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18313,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi specjalistami na budowie w celu koordynacji prac instalacyjnych.",
                    "en" => "Collaborating with other specialists on-site to coordinate installation work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18314,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przeprowadzonych napraw oraz montażu instalacji.",
                    "en" => "Documenting repairs and installation of systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $MONTERZY_I_KONSERWATORZY_INSTALACJI_KLIMATYZACYJNYCH_I_CHŁODNICZYCH = [

            [
                "id" => 18315,
                "name" => json_encode([
                    "pl" => "Montaż, uruchamianie oraz konserwacja systemów klimatyzacyjnych i chłodniczych.",
                    "en" => "Installation, commissioning, and maintenance of air conditioning and refrigeration systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18316,
                "name" => json_encode([
                    "pl" => "Wykonywanie przeglądów technicznych oraz konserwacji urządzeń klimatyzacyjnych.",
                    "en" => "Conducting technical inspections and maintenance of air conditioning devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18317,
                "name" => json_encode([
                    "pl" => "Wykrywanie i naprawa usterek w instalacjach klimatyzacyjnych i chłodniczych.",
                    "en" => "Detecting and repairing faults in air conditioning and refrigeration installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18318,
                "name" => json_encode([
                    "pl" => "Instalacja przewodów wentylacyjnych, kanałów powietrznych oraz urządzeń wentylacyjnych.",
                    "en" => "Installing ventilation ducts, air channels, and ventilation devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18319,
                "name" => json_encode([
                    "pl" => "Montaż jednostek klimatyzacyjnych oraz agregatów chłodniczych.",
                    "en" => "Installing air conditioning units and refrigeration aggregates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18320,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów szczelności oraz napełnianie instalacji czynnikiem chłodniczym.",
                    "en" => "Conducting leak tests and filling installations with refrigerant."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18321,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm dotyczących pracy z substancjami chłodniczymi (np. freony).",
                    "en" => "Adhering to standards related to working with refrigerants (e.g., freons)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18322,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie doboru odpowiednich systemów klimatyzacyjnych i chłodniczych.",
                    "en" => "Advising on the selection of appropriate air conditioning and refrigeration systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18323,
                "name" => json_encode([
                    "pl" => "Obsługa specjalistycznych narzędzi, takich jak pompy próżniowe, detektory wycieków.",
                    "en" => "Operating specialized tools, such as vacuum pumps and leak detectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18324,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przeprowadzonych napraw i konserwacji.",
                    "en" => "Documenting repairs and maintenance performed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $ROBOTNICY_PRZYGOTOWUJĄCY_I_WZNOSZĄCY_KONSTRUKCJE_METALOWE = [

            [
                "id" => 18325,
                "name" => json_encode([
                    "pl" => "Montaż konstrukcji stalowych, aluminiowych oraz innych elementów metalowych.",
                    "en" => "Assembly of steel, aluminum, and other metal structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18326,
                "name" => json_encode([
                    "pl" => "Przygotowanie i dopasowanie elementów konstrukcyjnych (cięcie, wiercenie, spawanie).",
                    "en" => "Preparation and fitting of structural components (cutting, drilling, welding)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18327,
                "name" => json_encode([
                    "pl" => "Składanie konstrukcji metalowych na placu budowy lub w warsztacie.",
                    "en" => "Assembling metal structures on-site or in the workshop."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18328,
                "name" => json_encode([
                    "pl" => "Obsługa narzędzi montażowych, takich jak wiertarki, szlifierki, spawarki.",
                    "en" => "Operating assembly tools such as drills, grinders, and welders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18329,
                "name" => json_encode([
                    "pl" => "Praca na wysokościach przy montażu konstrukcji nośnych, mostów, hal przemysłowych.",
                    "en" => "Working at heights to install load-bearing structures, bridges, and industrial halls."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18330,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm i wytycznych dotyczących wytrzymałości i bezpieczeństwa konstrukcji.",
                    "en" => "Adhering to standards and guidelines for structural strength and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18331,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych konstrukcji oraz eliminowanie ewentualnych wad.",
                    "en" => "Quality control of completed structures and correction of any defects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18332,
                "name" => json_encode([
                    "pl" => "Prace demontażowe i naprawcze istniejących konstrukcji metalowych.",
                    "en" => "Dismantling and repairing existing metal structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18333,
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami oraz innymi specjalistami podczas realizacji projektów.",
                    "en" => "Collaborating with engineers and other specialists during project implementation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18334,
                "name" => json_encode([
                    "pl" => "Dokumentowanie postępów prac oraz zużycia materiałów.",
                    "en" => "Documenting work progress and material usage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TAKIELARZE_I_MONTERZY_KONSTRUKCJI_LINOWYCH = [

            [
                "id" => 18335,
                "name" => json_encode([
                    "pl" => "Montaż i demontaż konstrukcji linowych, takich jak mosty wiszące, siatki zabezpieczające, masztowe konstrukcje nośne.",
                    "en" => "Assembly and disassembly of cable structures, such as suspension bridges, safety nets, and mast-bearing constructions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18336,
                "name" => json_encode([
                    "pl" => "Instalacja systemów linowych w budownictwie, przemyśle, na statkach i platformach wiertniczych.",
                    "en" => "Installation of cable systems in construction, industry, ships, and drilling platforms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18337,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich materiałów linowych i osprzętu w zależności od wymagań technicznych.",
                    "en" => "Selection of appropriate cable materials and equipment based on technical requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18338,
                "name" => json_encode([
                    "pl" => "Wykonywanie testów wytrzymałościowych oraz kontrola jakości lin.",
                    "en" => "Conducting strength tests and quality control of cables."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18339,
                "name" => json_encode([
                    "pl" => "Obsługa sprzętu do montażu i napinania lin, takiego jak wciągarki, napinacze, haki.",
                    "en" => "Operating equipment for assembling and tensioning cables, such as winches, tensioners, and hooks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18340,
                "name" => json_encode([
                    "pl" => "Konserwacja i naprawa konstrukcji linowych oraz wymiana uszkodzonych elementów.",
                    "en" => "Maintenance and repair of cable structures and replacement of damaged components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18341,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm BHP, w tym pracy na wysokości oraz przy dużych obciążeniach.",
                    "en" => "Adhering to safety standards, including working at heights and with heavy loads."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18342,
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami w zakresie projektowania i instalacji konstrukcji linowych.",
                    "en" => "Collaborating with engineers in the design and installation of cable structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18343,
                "name" => json_encode([
                    "pl" => "Dbanie o bezpieczeństwo oraz stabilność montowanych konstrukcji.",
                    "en" => "Ensuring the safety and stability of assembled structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18344,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych prac oraz przeglądów technicznych.",
                    "en" => "Documenting completed works and technical inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $TECHNIK_BUDOWNICTWA_OKRĘTOWEGO = [

            [
                "id" => 18345,
                "name" => json_encode([
                    "pl" => "Wykonywanie projektów oraz rysunków technicznych konstrukcji okrętowych.",
                    "en" => "Creating designs and technical drawings for ship structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18346,
                "name" => json_encode([
                    "pl" => "Montaż i naprawa elementów kadłuba, pokładów, konstrukcji wewnętrznych jednostek pływających.",
                    "en" => "Assembly and repair of hulls, decks, and internal structures of vessels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18347,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonania konstrukcji oraz ich zgodności z projektem.",
                    "en" => "Quality control of structures and ensuring compliance with the design."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18348,
                "name" => json_encode([
                    "pl" => "Spawanie, nitowanie oraz montaż stalowych oraz aluminiowych elementów statków.",
                    "en" => "Welding, riveting, and assembling steel and aluminum components of ships."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18349,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów szczelności oraz badania wytrzymałości konstrukcji okrętowych.",
                    "en" => "Conducting leak tests and strength analyses of ship structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18350,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm technicznych oraz przepisów morskich.",
                    "en" => "Adhering to technical standards and maritime regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18351,
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami okrętowymi oraz specjalistami od systemów napędowych i hydraulicznych.",
                    "en" => "Collaborating with marine engineers and specialists in propulsion and hydraulic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18352,
                "name" => json_encode([
                    "pl" => "Naprawa uszkodzeń oraz konserwacja jednostek pływających.",
                    "en" => "Repairing damages and maintaining vessels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18353,
                "name" => json_encode([
                    "pl" => "Organizacja i koordynacja prac remontowych oraz modernizacyjnych na statkach.",
                    "en" => "Organizing and coordinating repair and modernization works on ships."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18354,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przeprowadzonych prac oraz przygotowanie raportów technicznych.",
                    "en" => "Documenting performed works and preparing technical reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $BLACHARZ_LOTNICZY = [

            [
                "id" => 18355,
                "name" => json_encode([
                    "pl" => "Produkcja, montaż oraz naprawa elementów blaszanych w lotnictwie (kadłuby, skrzydła, elementy sterowania).",
                    "en" => "Production, assembly, and repair of sheet metal components in aviation (fuselages, wings, control surfaces)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18356,
                "name" => json_encode([
                    "pl" => "Przygotowanie blachy lotniczej do montażu (cięcie, gięcie, wiercenie).",
                    "en" => "Preparing aviation sheet metal for assembly (cutting, bending, drilling)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18357,
                "name" => json_encode([
                    "pl" => "Spawanie oraz nitowanie elementów konstrukcji lotniczych.",
                    "en" => "Welding and riveting aircraft structural components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18358,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm lotniczych oraz przepisów bezpieczeństwa.",
                    "en" => "Adhering to aviation standards and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18359,
                "name" => json_encode([
                    "pl" => "Wykonywanie kontroli jakości oraz testów wytrzymałościowych elementów blaszanych.",
                    "en" => "Conducting quality checks and strength tests of sheet metal components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18360,
                "name" => json_encode([
                    "pl" => "Konserwacja oraz naprawa uszkodzonych elementów blaszanych samolotów.",
                    "en" => "Maintenance and repair of damaged sheet metal aircraft parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18361,
                "name" => json_encode([
                    "pl" => "Montaż i demontaż paneli blaszanych oraz osłon.",
                    "en" => "Installing and removing sheet metal panels and covers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18362,
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami lotniczymi w zakresie projektowania i montażu elementów blaszanych.",
                    "en" => "Collaborating with aerospace engineers in the design and assembly of sheet metal components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18363,
                "name" => json_encode([
                    "pl" => "Używanie specjalistycznych narzędzi do obróbki blachy, takich jak nitownice, zaginarki, szlifierki.",
                    "en" => "Using specialized tools for sheet metal processing, such as riveters, benders, grinders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18364,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych napraw oraz modyfikacji.",
                    "en" => "Documenting completed repairs and modifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $BLACHARZ_OKRĘTOWY = [

            [
                "id" => 18365,
                "name" => json_encode([
                    "pl" => "Montaż i naprawa elementów blaszanych na statkach, takich jak kadłuby, nadbudówki, pokłady.",
                    "en" => "Assembly and repair of sheet metal components on ships, such as hulls, superstructures, decks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18366,
                "name" => json_encode([
                    "pl" => "Cięcie, gięcie oraz obróbka blachy morskiej według specyfikacji projektowej.",
                    "en" => "Cutting, bending, and processing marine-grade sheet metal according to project specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18367,
                "name" => json_encode([
                    "pl" => "Spawanie oraz nitowanie elementów konstrukcji okrętowych.",
                    "en" => "Welding and riveting ship structural components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18368,
                "name" => json_encode([
                    "pl" => "Instalacja systemów wentylacyjnych, rurociągów i innych elementów z blachy.",
                    "en" => "Installation of ventilation systems, pipelines, and other sheet metal components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18369,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów szczelności oraz kontrola jakości konstrukcji blaszanych.",
                    "en" => "Conducting leak tests and quality control of sheet metal structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18370,
                "name" => json_encode([
                    "pl" => "Konserwacja elementów blaszanych narażonych na działanie wody morskiej (korozja).",
                    "en" => "Maintaining sheet metal components exposed to seawater (corrosion)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18371,
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami budownictwa okrętowego w zakresie montażu i napraw elementów blaszanych.",
                    "en" => "Collaborating with naval engineers in the assembly and repair of sheet metal components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18372,
                "name" => json_encode([
                    "pl" => "Obsługa specjalistycznych narzędzi do obróbki blachy, takich jak giętarki, szlifierki, przecinarki plazmowe.",
                    "en" => "Operating specialized tools for sheet metal processing, such as benders, grinders, plasma cutters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18373,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm technicznych oraz przepisów bezpieczeństwa w budownictwie okrętowym.",
                    "en" => "Adhering to technical standards and safety regulations in shipbuilding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 18374,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przeprowadzonych prac oraz kontrola zużycia materiałów.",
                    "en" => "Documenting completed work and monitoring material usage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];


        DB::table('detail_projects')->insert(array_merge(
            $ARCHITEKT,
            $URBANISTA,
            $INZYNIER_GOSPODARKI_PRZESTRZENNEJ,
            $INZYNIER_AKUSTYK,
            $ARCHITEKCI_KRAJOBRAZU,
            $PLASTYK,
            $ARCHITEKT_WNETRZ,
            $DEKORATOR_WNETRZ,
            $ILUSTRATOR,
            $KONSERWATOR_DZIEŁ_SZTUKI,
            $KONSERWATOR_ZABYTKÓW_ARCHITEKTURY,
            $DEKORATOR_SKLEPÓW,
            $TECHNIK_SZTUKATORSTWA_I_KAMIENIARSTWA_ARTYSTYCZNEGO,
            $INŻYNIEROWIE_BUDOWNICTWA,
            $INŻYNIER_TECHNOLOGII_BETONÓW,
            $KIEROWNIK_BUDOWY,
            $INSPEKTOR_NADZORU_BUDOWLANEGO,
            $INSPEKTOR_BUDOWLANY,
            $INSPEKTOR_BUDOWY_DRÓG,
            $INSPEKTOR_BUDOWY_MOSTÓW,
            $INZYNIEROWIE_INZYNIERII_SRODOWISKA,
            $OPERATORZY_SPRZETU_DO_ROBOT_ZIEMNYCH_I_URZADZEN_POKREWNYCH,
            $ROBOTNICY_OBROBKI_KAMIENIA,
            $PILARZ_KAMIENIA,
            $SZLIFIERZ_KAMIENIA,
            $BETONIARZE_ZBROJARZE,
            $CIESLA,
            $CIESLA_SZALUNKOWY,
            $STOLARZ_BUDOWLANY,
            $MONTERZY_KONSTRUKCJI_BUDOWLANYCH_I_KONSERWATORZY_BUDYNKÓW,
            $MONTER_REKLAM,
            $MONTER_RUSZTOWAN,
            $ROBOTNIK_ROZBIORKI_BUDOWLI,
            $MONTER_OGRODZEN,
            $MONTERZY_BUDOWNICTWA_WODNEGO,
            $ALPINISTA_PRZEMYSŁOWY,
            $CZYŚCICIEL_ELEWACJI_BUDOWLANYCH,
            $KOMINIARZ,
            $TYNKARZE_I_POKREWNI,
            $MONTER_KAMIENNYCH_ELEMENTÓW_BUDOWLANYCH,
            $MURARZ,
            $ZDUN,
            $MURARZ_TYNKARZ,
            $MONTERZY_IZOLACJI,
            $BRUKARZ,
            $DEKARZE,
            $BLACHARZ,
            $MONTER_SKLADACZ_OKIEN,
            $SZKLARZ,
            $MONTER_ZALUZJI,
            $TECHNIK_ROBOT_WYKONCZENIOWYCH_W_BUDOWNICTWIE,
            $POSADZKARZE_PARKIECIARZE_GLAZURNICY,
            $MALARZ_TAPECIARZ,
            $MALARZ_BUDOWLANY,
            $SZPACHLARZ,
            $TAPECIARZ,
            $HYDRAULICY_I_MONTERZY_RUROCIAGOW,
            $MONTERZY_I_KONSERWATORZY_INSTALACJI_KLIMATYZACYJNYCH_I_CHŁODNICZYCH,
            $ROBOTNICY_PRZYGOTOWUJĄCY_I_WZNOSZĄCY_KONSTRUKCJE_METALOWE,
            $TAKIELARZE_I_MONTERZY_KONSTRUKCJI_LINOWYCH,
            $TECHNIK_BUDOWNICTWA_OKRĘTOWEGO,
            $BLACHARZ_LOTNICZY,
            $BLACHARZ_OKRĘTOWY
        ));
        Category::whereId('999')->first()->detailprojects()->attach(collect($ARCHITEKT)->pluck('id')->toArray());
        Category::whereId('1000')->first()->detailprojects()->attach(collect($URBANISTA)->pluck('id')->toArray());
        Category::whereId('1001')->first()->detailprojects()->attach(collect($INZYNIER_GOSPODARKI_PRZESTRZENNEJ)->pluck('id')->toArray());
        Category::whereId('1002')->first()->detailprojects()->attach(collect($INZYNIER_AKUSTYK)->pluck('id')->toArray());
        Category::whereId('1005')->first()->detailprojects()->attach(collect($ARCHITEKCI_KRAJOBRAZU)->pluck('id')->toArray());
        Category::whereId('1011')->first()->detailprojects()->attach(collect($PLASTYK)->pluck('id')->toArray());
        Category::whereId('1012')->first()->detailprojects()->attach(collect($ARCHITEKT_WNETRZ)->pluck('id')->toArray());
        Category::whereId('1013')->first()->detailprojects()->attach(collect($DEKORATOR_WNETRZ)->pluck('id')->toArray());
        Category::whereId('1014')->first()->detailprojects()->attach(collect($ILUSTRATOR)->pluck('id')->toArray());
        Category::whereId('1015')->first()->detailprojects()->attach(collect($KONSERWATOR_DZIEŁ_SZTUKI)->pluck('id')->toArray());
        Category::whereId('1016')->first()->detailprojects()->attach(collect($KONSERWATOR_ZABYTKÓW_ARCHITEKTURY)->pluck('id')->toArray());
        Category::whereId('1017')->first()->detailprojects()->attach(collect($DEKORATOR_SKLEPÓW)->pluck('id')->toArray());
        Category::whereId('1018')->first()->detailprojects()->attach(collect($TECHNIK_SZTUKATORSTWA_I_KAMIENIARSTWA_ARTYSTYCZNEGO)->pluck('id')->toArray());
        Category::whereId('1022')->first()->detailprojects()->attach(collect($INŻYNIEROWIE_BUDOWNICTWA)->pluck('id')->toArray());
        Category::whereId('1034')->first()->detailprojects()->attach(collect($INŻYNIER_TECHNOLOGII_BETONÓW)->pluck('id')->toArray());
        Category::whereId('1036')->first()->detailprojects()->attach(collect($KIEROWNIK_BUDOWY)->pluck('id')->toArray());
        Category::whereId('1038')->first()->detailprojects()->attach(collect($INSPEKTOR_NADZORU_BUDOWLANEGO)->pluck('id')->toArray());
        Category::whereId('1039')->first()->detailprojects()->attach(collect($INSPEKTOR_BUDOWLANY)->pluck('id')->toArray());
        Category::whereId('1040')->first()->detailprojects()->attach(collect($INSPEKTOR_BUDOWY_DRÓG)->pluck('id')->toArray());
        Category::whereId('1041')->first()->detailprojects()->attach(collect($INSPEKTOR_BUDOWY_MOSTÓW)->pluck('id')->toArray());
        Category::whereId('1043')->first()->detailprojects()->attach(collect($INZYNIEROWIE_INZYNIERII_SRODOWISKA)->pluck('id')->toArray());
        Category::whereId('1075')->first()->detailprojects()->attach(collect($OPERATORZY_SPRZETU_DO_ROBOT_ZIEMNYCH_I_URZADZEN_POKREWNYCH)->pluck('id')->toArray());
        Category::whereId('1102')->first()->detailprojects()->attach(collect($ROBOTNICY_OBROBKI_KAMIENIA)->pluck('id')->toArray());
        Category::whereId('1105')->first()->detailprojects()->attach(collect($PILARZ_KAMIENIA)->pluck('id')->toArray());
        Category::whereId('1106')->first()->detailprojects()->attach(collect($SZLIFIERZ_KAMIENIA)->pluck('id')->toArray());
        Category::whereId('1108')->first()->detailprojects()->attach(collect($BETONIARZE_ZBROJARZE)->pluck('id')->toArray());
        Category::whereId('1115')->first()->detailprojects()->attach(collect($CIESLA)->pluck('id')->toArray());
        Category::whereId('1116')->first()->detailprojects()->attach(collect($CIESLA_SZALUNKOWY)->pluck('id')->toArray());
        Category::whereId('1117')->first()->detailprojects()->attach(collect($STOLARZ_BUDOWLANY)->pluck('id')->toArray());
        Category::whereId('1120')->first()->detailprojects()->attach(collect($MONTERZY_KONSTRUKCJI_BUDOWLANYCH_I_KONSERWATORZY_BUDYNKÓW)->pluck('id')->toArray());
        Category::whereId('1128')->first()->detailprojects()->attach(collect($MONTER_REKLAM)->pluck('id')->toArray());
        Category::whereId('1129')->first()->detailprojects()->attach(collect($MONTER_RUSZTOWAN)->pluck('id')->toArray());
        Category::whereId('1130')->first()->detailprojects()->attach(collect($ROBOTNIK_ROZBIORKI_BUDOWLI)->pluck('id')->toArray());
        Category::whereId('1132')->first()->detailprojects()->attach(collect($MONTER_OGRODZEN)->pluck('id')->toArray());
        Category::whereId('1134')->first()->detailprojects()->attach(collect($MONTERZY_BUDOWNICTWA_WODNEGO)->pluck('id')->toArray());
        Category::whereId('1136')->first()->detailprojects()->attach(collect($ALPINISTA_PRZEMYSŁOWY)->pluck('id')->toArray());
        Category::whereId('1137')->first()->detailprojects()->attach(collect($CZYŚCICIEL_ELEWACJI_BUDOWLANYCH)->pluck('id')->toArray());
        Category::whereId('1138')->first()->detailprojects()->attach(collect($KOMINIARZ)->pluck('id')->toArray());
        Category::whereId('1142')->first()->detailprojects()->attach(collect($TYNKARZE_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1148')->first()->detailprojects()->attach(collect($MONTER_KAMIENNYCH_ELEMENTÓW_BUDOWLANYCH)->pluck('id')->toArray());
        Category::whereId('1149')->first()->detailprojects()->attach(collect($MURARZ)->pluck('id')->toArray());
        Category::whereId('1150')->first()->detailprojects()->attach(collect($ZDUN)->pluck('id')->toArray());
        Category::whereId('1151')->first()->detailprojects()->attach(collect($MURARZ_TYNKARZ)->pluck('id')->toArray());
        Category::whereId('1153')->first()->detailprojects()->attach(collect($MONTERZY_IZOLACJI)->pluck('id')->toArray());
        Category::whereId('1160')->first()->detailprojects()->attach(collect($BRUKARZ)->pluck('id')->toArray());
        Category::whereId('1162')->first()->detailprojects()->attach(collect($DEKARZE)->pluck('id')->toArray());
        Category::whereId('1163')->first()->detailprojects()->attach(collect($BLACHARZ)->pluck('id')->toArray());
        Category::whereId('1168')->first()->detailprojects()->attach(collect($MONTER_SKLADACZ_OKIEN)->pluck('id')->toArray());
        Category::whereId('1169')->first()->detailprojects()->attach(collect($SZKLARZ)->pluck('id')->toArray());
        Category::whereId('1174')->first()->detailprojects()->attach(collect($MONTER_ZALUZJI)->pluck('id')->toArray());
        Category::whereId('1183')->first()->detailprojects()->attach(collect($TECHNIK_ROBOT_WYKONCZENIOWYCH_W_BUDOWNICTWIE)->pluck('id')->toArray());
        Category::whereId('1184')->first()->detailprojects()->attach(collect($POSADZKARZE_PARKIECIARZE_GLAZURNICY)->pluck('id')->toArray());
        Category::whereId('1191')->first()->detailprojects()->attach(collect($MALARZ_TAPECIARZ)->pluck('id')->toArray());
        Category::whereId('1192')->first()->detailprojects()->attach(collect($MALARZ_BUDOWLANY)->pluck('id')->toArray());
        Category::whereId('1193')->first()->detailprojects()->attach(collect($SZPACHLARZ)->pluck('id')->toArray());
        Category::whereId('1194')->first()->detailprojects()->attach(collect($TAPECIARZ)->pluck('id')->toArray());
        Category::whereId('1197')->first()->detailprojects()->attach(collect($HYDRAULICY_I_MONTERZY_RUROCIAGOW )->pluck('id')->toArray());
        Category::whereId('1215')->first()->detailprojects()->attach(collect($MONTERZY_I_KONSERWATORZY_INSTALACJI_KLIMATYZACYJNYCH_I_CHŁODNICZYCH)->pluck('id')->toArray());
        Category::whereId('1221')->first()->detailprojects()->attach(collect($ROBOTNICY_PRZYGOTOWUJĄCY_I_WZNOSZĄCY_KONSTRUKCJE_METALOWE)->pluck('id')->toArray());
        Category::whereId('1229')->first()->detailprojects()->attach(collect($TAKIELARZE_I_MONTERZY_KONSTRUKCJI_LINOWYCH)->pluck('id')->toArray());
        Category::whereId('1235')->first()->detailprojects()->attach(collect($TECHNIK_BUDOWNICTWA_OKRĘTOWEGO)->pluck('id')->toArray());
        Category::whereId('1236')->first()->detailprojects()->attach(collect($BLACHARZ_LOTNICZY)->pluck('id')->toArray());
        Category::whereId('1237')->first()->detailprojects()->attach(collect($BLACHARZ_OKRĘTOWY)->pluck('id')->toArray());
    }
}

