<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectTSL2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();

        $POZOSTALI_KIEROWNICY_DO_SPRAW_LOGISTYKI_I_DZIEDZIN_POKREWNYCH = [

            [
                "id" => 24175,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami logistycznymi w firmie, w tym nadzorowanie dostaw, magazynowania, dystrybucji i transportu.",
                    "en" => "Managing logistics processes within the company, including overseeing supply, storage, distribution, and transportation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24176,
                "name" => json_encode([
                    "pl" => "Optymalizacja łańcucha dostaw i procesów logistycznych, w tym analiza i wdrażanie efektywnych strategii transportu i magazynowania.",
                    "en" => "Optimizing supply chain and logistics processes, including analyzing and implementing efficient transportation and storage strategies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24177,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników odpowiedzialnych za realizację strategii logistycznych, zapewniając ich efektywność.",
                    "en" => "Managing a team of employees responsible for implementing logistics strategies, ensuring their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24178,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesami transportowymi, w tym planowanie tras, organizacja transportu towarów i monitorowanie wydajności.",
                    "en" => "Supervising transportation processes, including route planning, organizing cargo transport, and monitoring performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24179,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami firmy w celu zapewnienia płynności i optymalizacji procesów logistycznych.",
                    "en" => "Collaborating with other departments within the company to ensure smooth and optimized logistics processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24180,
                "name" => json_encode([
                    "pl" => "Przygotowanie i wdrożenie polityki logistycznej firmy, monitorowanie kosztów i analiza wskaźników efektywności.",
                    "en" => "Preparing and implementing the company's logistics policy, monitoring costs, and analyzing performance indicators."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_DO_SPRAW_HANDLU_ZAGRANICZNEGO = [

            [
                "id" => 24181,
                "name" => json_encode([
                    "pl" => "Zarządzanie działem handlu zagranicznego, w tym nadzorowanie eksportu i importu towarów oraz rozwój rynków międzynarodowych.",
                    "en" => "Managing the foreign trade department, overseeing the export and import of goods, and developing international markets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24182,
                "name" => json_encode([
                    "pl" => "Negocjowanie warunków handlowych z zagranicznymi partnerami, rozwój strategii sprzedaży międzynarodowej.",
                    "en" => "Negotiating trade terms with foreign partners, developing international sales strategies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24183,
                "name" => json_encode([
                    "pl" => "Koordynowanie transportu i logistyki międzynarodowej, w tym wybór dostawców i organizacja procesów celnych.",
                    "en" => "Coordinating international transportation and logistics, including selecting suppliers and organizing customs processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24184,
                "name" => json_encode([
                    "pl" => "Zarządzanie relacjami z międzynarodowymi klientami, identyfikowanie nowych rynków i możliwości eksportowych.",
                    "en" => "Managing relationships with international clients, identifying new markets and export opportunities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24185,
                "name" => json_encode([
                    "pl" => "Monitorowanie i analiza trendów rynków zagranicznych oraz rekomendowanie strategii rozwoju.",
                    "en" => "Monitoring and analyzing foreign market trends and recommending development strategies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24186,
                "name" => json_encode([
                    "pl" => "Opracowanie i nadzór nad realizacją planów sprzedaży międzynarodowej oraz raportowanie wyników.",
                    "en" => "Developing and overseeing the implementation of international sales plans and reporting results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_DO_SPRAW_OPTYMALIZACJI_ZASOBÓW = [

            [
                "id" => 24187,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami optymalizacji zasobów w firmie, w tym planowanie i kontrolowanie efektywnego wykorzystania zasobów ludzkich, materiałowych i finansowych.",
                    "en" => "Managing resource optimization processes within the company, including planning and controlling the efficient use of human, material, and financial resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24188,
                "name" => json_encode([
                    "pl" => "Analiza zasobów firmy i identyfikowanie obszarów wymagających optymalizacji w celu zwiększenia efektywności i redukcji kosztów.",
                    "en" => "Analyzing company resources and identifying areas requiring optimization to increase efficiency and reduce costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24189,
                "name" => json_encode([
                    "pl" => "Implementacja strategii optymalizacji zasobów, nadzorowanie procesów i monitorowanie postępów.",
                    "en" => "Implementing resource optimization strategies, overseeing processes, and monitoring progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24190,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami alokacji zasobów w różnych działach firmy w celu zapewnienia ich efektywnego wykorzystania.",
                    "en" => "Managing resource allocation processes across different departments within the company to ensure efficient use."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24191,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz i przygotowywanie raportów dotyczących wykorzystania zasobów w firmie.",
                    "en" => "Conducting analyses and preparing reports on resource utilization within the company."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24192,
                "name" => json_encode([
                    "pl" => "Szkolenie zespołu w zakresie efektywnego zarządzania zasobami oraz optymalizacji procesów.",
                    "en" => "Training the team in effective resource management and process optimization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_DO_SPRAW_TRANSPORTU_RUROCIĄGOWEGO = [

            [
                "id" => 24193,
                "name" => json_encode([
                    "pl" => "Zarządzanie operacjami transportu rurociągowego, w tym nadzorowanie transportu gazów, cieczy i innych substancji rurociągami.",
                    "en" => "Managing pipeline transportation operations, including overseeing the transportation of gases, liquids, and other substances through pipelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24194,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów transportu rurociągowego, planowanie tras, wybór materiałów i urządzeń do transportu.",
                    "en" => "Optimizing pipeline transportation processes, planning routes, and selecting materials and equipment for transportation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24195,
                "name" => json_encode([
                    "pl" => "Nadzorowanie instalacji nowych systemów transportu rurociągowego i modernizacji istniejących systemów.",
                    "en" => "Supervising the installation of new pipeline transportation systems and modernization of existing systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24196,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników odpowiedzialnych za operacje transportu rurociągowego, zapewnienie bezpieczeństwa i wydajności.",
                    "en" => "Managing a team of employees responsible for pipeline transportation operations, ensuring safety and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24197,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań transportu rurociągowego z innymi działami w firmie, takimi jak logistyka, produkcja i magazynowanie.",
                    "en" => "Coordinating pipeline transportation activities with other departments within the company, such as logistics, production, and warehousing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24198,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów operacji transportu rurociągowego, zapewnienie zgodności z normami i przepisami branżowymi.",
                    "en" => "Conducting audits of pipeline transportation operations, ensuring compliance with industry standards and regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_DO_SPRAW_ZARZĄDZANIA_FLOTĄ_SAMOCHODOWĄ = [

            [
                "id" => 24199,
                "name" => json_encode([
                    "pl" => "Zarządzanie flotą samochodową firmy, w tym nadzorowanie eksploatacji pojazdów, konserwacji oraz napraw.",
                    "en" => "Managing the company's vehicle fleet, including overseeing vehicle operation, maintenance, and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24200,
                "name" => json_encode([
                    "pl" => "Optymalizacja kosztów związanych z eksploatacją floty, w tym zarządzanie paliwem, ubezpieczeniami i serwisem.",
                    "en" => "Optimizing fleet operating costs, including managing fuel, insurance, and servicing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24201,
                "name" => json_encode([
                    "pl" => "Planowanie i organizowanie harmonogramów użytkowania pojazdów, zapewniając optymalną dystrybucję floty.",
                    "en" => "Planning and organizing vehicle usage schedules, ensuring optimal fleet distribution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24202,
                "name" => json_encode([
                    "pl" => "Monitorowanie i raportowanie stanu floty samochodowej, w tym przeglądów technicznych i napraw.",
                    "en" => "Monitoring and reporting the condition of the vehicle fleet, including technical inspections and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24203,
                "name" => json_encode([
                    "pl" => "Współpraca z działem HR w zakresie zarządzania pracownikami korzystającymi z floty samochodowej, w tym organizacja szkoleń.",
                    "en" => "Collaborating with the HR department in managing employees using the vehicle fleet, including organizing training."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24204,
                "name" => json_encode([
                    "pl" => "Wdrażanie polityki ekologicznej w zarządzaniu flotą, promowanie użycia pojazdów energooszczędnych.",
                    "en" => "Implementing an environmental policy in fleet management, promoting the use of energy-efficient vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $AGENT_CELNY = [

            [
                "id" => 24205,
                "name" => json_encode([
                    "pl" => "Reprezentowanie klientów przed organami celnymi, przygotowywanie dokumentacji celnej i zapewnianie zgodności z przepisami prawa.",
                    "en" => "Representing clients before customs authorities, preparing customs documentation, and ensuring compliance with legal regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24206,
                "name" => json_encode([
                    "pl" => "Koordynowanie procesów odpraw celnych, w tym klasyfikacja towarów, obliczanie należności celnych i podatkowych.",
                    "en" => "Coordinating customs clearance processes, including goods classification, calculating customs duties and taxes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24207,
                "name" => json_encode([
                    "pl" => "Współpraca z firmami transportowymi i magazynami w celu zapewnienia terminowej odprawy celnej.",
                    "en" => "Cooperating with transport companies and warehouses to ensure timely customs clearance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24208,
                "name" => json_encode([
                    "pl" => "Monitorowanie zmian w przepisach celnych, doradztwo dla klientów w zakresie procedur celnych.",
                    "en" => "Monitoring changes in customs regulations, advising clients on customs procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24209,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów celnych, zgłoszeń importowych i eksportowych.",
                    "en" => "Preparing customs reports, import and export declarations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24210,
                "name" => json_encode([
                    "pl" => "Ścisła współpraca z urzędami celnymi oraz instytucjami kontrolnymi, zapewnianie zgodności z przepisami prawa.",
                    "en" => "Close cooperation with customs offices and controlling institutions, ensuring compliance with the law."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $AGENT_KLARUJĄCY = [

            [
                "id" => 24211,
                "name" => json_encode([
                    "pl" => "Organizowanie procesu klarowania towarów, w tym negocjowanie warunków dostawy oraz kontrolowanie dokumentacji transportowej.",
                    "en" => "Organizing the clearing process for goods, including negotiating delivery terms and controlling transportation documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24212,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesu odpraw celnych, klasyfikowanie towarów oraz zapewnianie zgodności z przepisami prawa transportowego.",
                    "en" => "Supervising the customs clearance process, classifying goods, and ensuring compliance with transportation regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24213,
                "name" => json_encode([
                    "pl" => "Koordynowanie komunikacji między klientem, transportem, a organami celnymi w celu sprawnej realizacji procedur.",
                    "en" => "Coordinating communication between the client, transport, and customs authorities for smooth procedure execution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24214,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowywaniu niezbędnych dokumentów do odprawy celnej i transportowej.",
                    "en" => "Assisting in preparing necessary documents for customs and transportation clearance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24215,
                "name" => json_encode([
                    "pl" => "Koordynacja procesów transportowych, zapewnianie, że towary są dostarczane na czas i zgodnie z umową.",
                    "en" => "Coordinating transportation processes, ensuring that goods are delivered on time and according to the contract."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24216,
                "name" => json_encode([
                    "pl" => "Zarządzanie relacjami z klientami, zapewnianie wysokiej jakości obsługi i rozwiązywanie problemów związanych z transportem.",
                    "en" => "Managing client relationships, ensuring high-quality service, and resolving transportation-related issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $EKSPLOATATOR_PORTU = [

            [
                "id" => 24217,
                "name" => json_encode([
                    "pl" => "Zarządzanie operacjami w porcie, w tym nadzorowanie załadunku, rozładunku oraz transportu towarów.",
                    "en" => "Managing operations in the port, including overseeing loading, unloading, and transportation of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24218,
                "name" => json_encode([
                    "pl" => "Koordynowanie działalności magazynów portowych, zapewnienie efektywnego wykorzystania przestrzeni magazynowej.",
                    "en" => "Coordinating port warehouse operations, ensuring efficient use of storage space."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24219,
                "name" => json_encode([
                    "pl" => "Organizacja procesów logistycznych związanych z transportem morskim i dokami, nadzorowanie przepływu towarów.",
                    "en" => "Organizing logistics processes related to maritime transport and docks, overseeing the flow of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24220,
                "name" => json_encode([
                    "pl" => "Współpraca z agencjami celnymi, przewoźnikami i innymi podmiotami w celu zapewnienia sprawnej operacji portowej.",
                    "en" => "Cooperating with customs agencies, carriers, and other entities to ensure smooth port operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24221,
                "name" => json_encode([
                    "pl" => "Zarządzanie personelem portowym, w tym nadzorowanie załadunku, rozładunku, oraz kontrola przestrzegania procedur bezpieczeństwa.",
                    "en" => "Managing port staff, including overseeing loading, unloading, and ensuring compliance with safety procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24222,
                "name" => json_encode([
                    "pl" => "Monitorowanie i raportowanie efektywności operacji portowych, wdrażanie działań optymalizujących.",
                    "en" => "Monitoring and reporting on the efficiency of port operations, implementing optimization measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_DZIAŁU_LOGISTYKI = [

            [
                "id" => 24223,
                "name" => json_encode([
                    "pl" => "Koordynowanie procesów logistycznych, w tym zarządzanie transportem, magazynowaniem i dystrybucją towarów.",
                    "en" => "Coordinating logistics processes, including managing transportation, warehousing, and distribution of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24224,
                "name" => json_encode([
                    "pl" => "Organizacja załadunku i rozładunku towarów, monitorowanie terminowości dostaw i odbiorów.",
                    "en" => "Organizing loading and unloading of goods, monitoring the timeliness of deliveries and pickups."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24225,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją logistyczną, w tym fakturami, listami przewozowymi i innymi dokumentami transportowymi.",
                    "en" => "Managing logistics documentation, including invoices, shipping documents, and other transport-related paperwork."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24226,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanów magazynowych i zamówień, organizowanie dostaw surowców i towarów.",
                    "en" => "Monitoring inventory levels and orders, organizing deliveries of raw materials and goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24227,
                "name" => json_encode([
                    "pl" => "Koordynowanie współpracy z dostawcami, przewoźnikami i innymi podmiotami zewnętrznymi.",
                    "en" => "Coordinating cooperation with suppliers, carriers, and other external entities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24228,
                "name" => json_encode([
                    "pl" => "Analiza efektywności procesów logistycznych, rekomendowanie działań usprawniających.",
                    "en" => "Analyzing the efficiency of logistics processes, recommending improvement actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPEDYTOR = [

            [
                "id" => 24229,
                "name" => json_encode([
                    "pl" => "Koordynowanie i nadzorowanie transportu towarów, w tym organizowanie przewozów krajowych i międzynarodowych.",
                    "en" => "Coordinating and supervising the transport of goods, including organizing domestic and international shipments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24230,
                "name" => json_encode([
                    "pl" => "Negocjowanie warunków transportu z przewoźnikami, kontrolowanie dokumentacji transportowej i celnej.",
                    "en" => "Negotiating transport terms with carriers, controlling transportation and customs documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24231,
                "name" => json_encode([
                    "pl" => "Zarządzanie terminowością dostaw, kontrolowanie procesów transportowych i rozwiązywanie problemów logistycznych.",
                    "en" => "Managing delivery timeliness, controlling transportation processes, and solving logistics problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24232,
                "name" => json_encode([
                    "pl" => "Planowanie tras transportowych, organizowanie transportu międzynarodowego i krajowego.",
                    "en" => "Planning transport routes, organizing international and domestic shipments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24233,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu przesyłek, współpraca z klientami i przewoźnikami, zapewniając pełną obsługę transportu.",
                    "en" => "Monitoring shipment status, cooperating with clients and carriers, ensuring complete transportation services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24234,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii optymalizacji transportu, redukcji kosztów i zwiększenia efektywności procesów logistycznych.",
                    "en" => "Developing transportation optimization strategies, reducing costs, and increasing the efficiency of logistics processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_EKSPLOATACJI_PORTÓW_I_TERMINALI = [

            [
                "id" => 24235,
                "name" => json_encode([
                    "pl" => "Zarządzanie operacjami portowymi i terminalowymi, nadzorowanie załadunku, rozładunku, składowania oraz transportu towarów.",
                    "en" => "Managing port and terminal operations, overseeing loading, unloading, storage, and transportation of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24236,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z bezpieczeństwem w portach i terminalach, w tym monitorowanie procedur bezpieczeństwa.",
                    "en" => "Coordinating security activities in ports and terminals, including monitoring safety procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24237,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem pracowników terminalu portowego, kontrolowanie procesu załadunku i rozładunku towarów.",
                    "en" => "Managing a team of port terminal workers, overseeing the loading and unloading process of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24238,
                "name" => json_encode([
                    "pl" => "Planowanie harmonogramów transportu towarów w portach, nadzorowanie zgodności z normami prawnymi.",
                    "en" => "Planning schedules for the transportation of goods in ports, overseeing compliance with legal standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24239,
                "name" => json_encode([
                    "pl" => "Optymalizacja operacji portowych, identyfikowanie obszarów do poprawy i implementacja rozwiązań usprawniających.",
                    "en" => "Optimizing port operations, identifying areas for improvement, and implementing solutions for efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24240,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w firmie oraz z zewnętrznymi firmami transportowymi i agencjami celnymi.",
                    "en" => "Collaborating with other departments in the company and external transport companies and customs agencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_LOGISTYK = [

            [
                "id" => 24241,
                "name" => json_encode([
                    "pl" => "Planowanie i organizowanie procesów logistycznych, w tym transportu, magazynowania i dystrybucji towarów.",
                    "en" => "Planning and organizing logistics processes, including transportation, storage, and distribution of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24242,
                "name" => json_encode([
                    "pl" => "Koordynowanie i kontrolowanie realizacji zamówień, monitorowanie stanu zapasów i organizowanie dostaw.",
                    "en" => "Coordinating and controlling order fulfillment, monitoring inventory levels, and organizing deliveries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24243,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją logistyczną, w tym fakturami, listami przewozowymi i innymi dokumentami związanymi z transportem.",
                    "en" => "Managing logistics documentation, including invoices, shipping documents, and other transport-related paperwork."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24244,
                "name" => json_encode([
                    "pl" => "Analiza procesów logistycznych, identyfikowanie problemów i opracowywanie rozwiązań poprawiających efektywność.",
                    "en" => "Analyzing logistics processes, identifying issues, and developing solutions to improve efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24245,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami firmy, takimi jak magazynowanie, transport i sprzedaż, w celu zapewnienia efektywności procesów.",
                    "en" => "Collaborating with other departments in the company, such as warehousing, transport, and sales, to ensure the efficiency of processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24246,
                "name" => json_encode([
                    "pl" => "Koordynowanie procesów transportowych oraz negocjowanie warunków z przewoźnikami, zapewniając terminowość dostaw.",
                    "en" => "Coordinating transportation processes and negotiating terms with carriers, ensuring timely deliveries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_SPEDYTOR = [

            [
                "id" => 24247,
                "name" => json_encode([
                    "pl" => "Organizowanie procesów transportowych, w tym planowanie tras i nadzorowanie załadunku i rozładunku towarów.",
                    "en" => "Organizing transportation processes, including planning routes and overseeing loading and unloading of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24248,
                "name" => json_encode([
                    "pl" => "Współpraca z przewoźnikami, agencjami celnymi i innymi podmiotami w celu zapewnienia sprawnej organizacji transportu.",
                    "en" => "Cooperating with carriers, customs agencies, and other entities to ensure smooth transportation organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24249,
                "name" => json_encode([
                    "pl" => "Negocjowanie warunków transportu z przewoźnikami, kontrolowanie terminowości dostaw i jakości usług.",
                    "en" => "Negotiating transport terms with carriers, controlling the timeliness of deliveries, and ensuring service quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24250,
                "name" => json_encode([
                    "pl" => "Monitorowanie statusu przesyłek, zapewnianie zgodności z przepisami celnymi oraz optymalizacja kosztów transportu.",
                    "en" => "Monitoring shipment status, ensuring compliance with customs regulations, and optimizing transportation costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24251,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentów transportowych, takich jak listy przewozowe, faktury i inne dokumenty związane z transportem.",
                    "en" => "Preparing transportation documents such as waybills, invoices, and other transport-related paperwork."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24252,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem sprzedaży w zakresie koordynacji zamówień i transportu towarów.",
                    "en" => "Cooperating with the sales team in coordinating orders and goods transportation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DORADCA_DO_SPRAW_BEZPIECZEŃSTWA_PRZEWOZU_KOLEJĄ_TOWARÓW_NIEBEZPIECZNYCH = [

            [
                "id" => 24253,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie przepisów i procedur bezpieczeństwa przy przewozie towarów niebezpiecznych koleją.",
                    "en" => "Advising on regulations and safety procedures for transporting dangerous goods by rail."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24254,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wdrażanie procedur bezpieczeństwa w transporcie towarów niebezpiecznych, zgodnie z normami RID.",
                    "en" => "Developing and implementing safety procedures for transporting dangerous goods in accordance with RID standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24255,
                "name" => json_encode([
                    "pl" => "Nadzór nad przestrzeganiem przepisów RID przez firmy transportowe i zapewnienie bezpieczeństwa transportu.",
                    "en" => "Supervising compliance with RID regulations by transport companies and ensuring transport safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24256,
                "name" => json_encode([
                    "pl" => "Szkolenie personelu w zakresie przepisów RID, instrukcji transportowych oraz zasad bezpieczeństwa.",
                    "en" => "Training personnel on RID regulations, transport instructions, and safety protocols."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24257,
                "name" => json_encode([
                    "pl" => "Opracowywanie raportów dotyczących przestrzegania przepisów RID i bezpieczeństwa transportu towarów niebezpiecznych.",
                    "en" => "Preparing reports on compliance with RID regulations and the safety of dangerous goods transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24258,
                "name" => json_encode([
                    "pl" => "Monitorowanie zmian w przepisach RID i dostosowywanie procedur bezpieczeństwa do nowych wymagań.",
                    "en" => "Monitoring changes in RID regulations and adjusting safety procedures to meet new requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_SPEDYTORZY_I_POKREWNI = [

            [
                "id" => 24259,
                "name" => json_encode([
                    "pl" => "Koordynowanie transportu i logistyki dla towarów krajowych i międzynarodowych.",
                    "en" => "Coordinating transportation and logistics for domestic and international goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24260,
                "name" => json_encode([
                    "pl" => "Negocjowanie warunków transportowych, nadzorowanie procesu transportu i zapewnienie terminowości dostaw.",
                    "en" => "Negotiating transport terms, overseeing the transportation process, and ensuring timely deliveries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24261,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją transportową, w tym listami przewozowymi, fakturami i dokumentami celnymi.",
                    "en" => "Managing transportation documentation, including waybills, invoices, and customs documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24262,
                "name" => json_encode([
                    "pl" => "Współpraca z przewoźnikami, dostawcami i innymi firmami logistycznymi, w celu optymalizacji procesów transportowych.",
                    "en" => "Cooperating with carriers, suppliers, and other logistics companies to optimize transportation processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24263,
                "name" => json_encode([
                    "pl" => "Optymalizacja kosztów transportu, monitorowanie wydajności oraz szukanie nowych rozwiązań logistycznych.",
                    "en" => "Optimizing transportation costs, monitoring performance, and exploring new logistical solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24264,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanów magazynowych i organizowanie transportu towarów, zapewniając ich dostępność.",
                    "en" => "Monitoring inventory levels and organizing the transportation of goods, ensuring their availability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_TRANSPORTU_DROGOWEGO = [

            [
                "id" => 24265,
                "name" => json_encode([
                    "pl" => "Projektowanie, planowanie i optymalizacja infrastruktury transportu drogowego, w tym dróg, mostów, wiaduktów.",
                    "en" => "Designing, planning, and optimizing road transportation infrastructure, including roads, bridges, and overpasses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24266,
                "name" => json_encode([
                    "pl" => "Analiza ruchu drogowego, prognozowanie potrzeb transportowych i opracowywanie raportów na temat poprawy efektywności.",
                    "en" => "Analyzing road traffic, forecasting transportation needs, and preparing reports on improving efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24267,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi inżynierami i specjalistami w celu poprawy infrastruktury drogowej i zapewnienia jej bezpieczeństwa.",
                    "en" => "Collaborating with other engineers and specialists to improve road infrastructure and ensure its safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24268,
                "name" => json_encode([
                    "pl" => "Koordynowanie budowy nowych dróg, modernizacji istniejących i zarządzanie projektami związanymi z transportem drogowym.",
                    "en" => "Coordinating the construction of new roads, modernizing existing ones, and managing projects related to road transportation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24269,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu infrastruktury drogowej, przeprowadzanie inspekcji oraz wdrażanie działań naprawczych.",
                    "en" => "Monitoring the condition of road infrastructure, conducting inspections, and implementing corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24270,
                "name" => json_encode([
                    "pl" => "Zarządzanie projektami infrastruktury drogowej, przygotowanie dokumentacji projektowej oraz uzyskiwanie niezbędnych zezwoleń.",
                    "en" => "Managing road infrastructure projects, preparing design documentation, and obtaining necessary permits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DYSPONENT_TRANSPORTU_SAMOCHODOWEGO = [

            [
                "id" => 24271,
                "name" => json_encode([
                    "pl" => "Koordynowanie i nadzorowanie operacji transportu drogowego, planowanie tras i harmonogramów przewozów.",
                    "en" => "Coordinating and supervising road transport operations, planning routes and schedules for shipments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24272,
                "name" => json_encode([
                    "pl" => "Zarządzanie zespołem kierowców, kontrolowanie wydajności transportu i zapewnienie terminowości dostaw.",
                    "en" => "Managing a team of drivers, controlling transport efficiency, and ensuring timely deliveries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24273,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu pojazdów, zarządzanie procesami konserwacji i napraw, dbanie o przestrzeganie przepisów drogowych.",
                    "en" => "Monitoring vehicle conditions, managing maintenance and repair processes, ensuring compliance with road regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24274,
                "name" => json_encode([
                    "pl" => "Optymalizacja tras transportowych i analizowanie efektywności transportu, identyfikowanie możliwości redukcji kosztów.",
                    "en" => "Optimizing transport routes and analyzing transport efficiency, identifying opportunities for cost reduction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24275,
                "name" => json_encode([
                    "pl" => "Koordynowanie dokumentacji transportowej, w tym przygotowanie list przewozowych, faktur i innych dokumentów związanych z transportem.",
                    "en" => "Coordinating transportation documentation, including preparing waybills, invoices, and other transport-related documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24276,
                "name" => json_encode([
                    "pl" => "Współpraca z klientami oraz innymi działami firmy w celu zapewnienia skutecznego i bezpiecznego transportu towarów.",
                    "en" => "Collaborating with clients and other company departments to ensure effective and safe transportation of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $EKSPEDYTOR = [

            [
                "id" => 24277,
                "name" => json_encode([
                    "pl" => "Koordynowanie procesów ekspedycji, w tym przygotowanie i organizacja wysyłki towarów do klientów.",
                    "en" => "Coordinating expedition processes, including preparing and organizing the shipment of goods to customers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24278,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji transportowej, takich jak faktury, listy przewozowe, umowy z przewoźnikami.",
                    "en" => "Preparing transportation documentation such as invoices, waybills, contracts with carriers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24279,
                "name" => json_encode([
                    "pl" => "Zarządzanie harmonogramem wysyłki towarów, współpraca z transportem, magazynami i innymi działami.",
                    "en" => "Managing the shipment schedule, collaborating with transport, warehouses, and other departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24280,
                "name" => json_encode([
                    "pl" => "Koordynowanie dostaw, monitorowanie terminowości, rozwiązywanie problemów związanych z transportem.",
                    "en" => "Coordinating deliveries, monitoring timeliness, solving transportation-related issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24281,
                "name" => json_encode([
                    "pl" => "Współpraca z przewoźnikami, kontrolowanie kosztów transportu, optymalizacja wydajności transportowej.",
                    "en" => "Collaborating with carriers, controlling transport costs, optimizing transportation efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24282,
                "name" => json_encode([
                    "pl" => "Opracowywanie raportów dotyczących statusu wysyłki i monitorowanie stanu zapasów towarów.",
                    "en" => "Preparing reports on shipment status and monitoring inventory levels of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INŻYNIER_TRANSPORTU_KOLEJOWEGO = [

            [
                "id" => 24283,
                "name" => json_encode([
                    "pl" => "Projektowanie i optymalizacja systemów transportu kolejowego, w tym tras kolejowych, stacji i urządzeń infrastrukturalnych.",
                    "en" => "Designing and optimizing railway transport systems, including railway routes, stations, and infrastructure facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24284,
                "name" => json_encode([
                    "pl" => "Analiza i ocena efektywności transportu kolejowego, opracowywanie strategii usprawniających transport towarów i pasażerów.",
                    "en" => "Analyzing and evaluating the efficiency of railway transport, developing strategies to improve the transportation of goods and passengers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24285,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi inżynierami w celu zapewnienia efektywności operacji kolejowych oraz bezpieczeństwa systemu.",
                    "en" => "Collaborating with other engineers to ensure the efficiency of railway operations and system safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24286,
                "name" => json_encode([
                    "pl" => "Planowanie i nadzorowanie budowy oraz modernizacji infrastruktury kolejowej, w tym torów, mostów, wiaduktów.",
                    "en" => "Planning and supervising the construction and modernization of railway infrastructure, including tracks, bridges, and viaducts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24287,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z utrzymaniem infrastruktury kolejowej, przeprowadzanie inspekcji i wdrażanie działań naprawczych.",
                    "en" => "Coordinating activities related to railway infrastructure maintenance, conducting inspections, and implementing corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24288,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji projektowej i technicznej dla projektów transportu kolejowego, uzyskiwanie niezbędnych zezwoleń.",
                    "en" => "Preparing project and technical documentation for railway transport projects, obtaining necessary permits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_URBANISTY_I_INŻYNIEROWIE_RUCHU_DROGOWEGO = [

            [
                "id" => 24289,
                "name" => json_encode([
                    "pl" => "Projektowanie, planowanie i optymalizacja infrastruktury drogowej oraz systemów zarządzania ruchem drogowym.",
                    "en" => "Designing, planning, and optimizing road infrastructure and traffic management systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24290,
                "name" => json_encode([
                    "pl" => "Analiza i prognozowanie ruchu drogowego, identyfikowanie potrzeb w zakresie rozwoju infrastruktury i wprowadzanie usprawnień.",
                    "en" => "Analyzing and forecasting road traffic, identifying infrastructure development needs, and implementing improvements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24291,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z modernizacją i budową nowych dróg, mostów oraz innych elementów infrastruktury drogowej.",
                    "en" => "Coordinating activities related to the modernization and construction of new roads, bridges, and other elements of road infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24292,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi specjalistami w zakresie transportu drogowego, zarządzania ruchem oraz bezpieczeństwa.",
                    "en" => "Collaborating with other professionals in road transport, traffic management, and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24293,
                "name" => json_encode([
                    "pl" => "Zarządzanie analizami ruchu drogowego, przygotowanie raportów dotyczących wydajności systemów transportowych.",
                    "en" => "Managing road traffic analyses, preparing reports on the performance of transportation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24294,
                "name" => json_encode([
                    "pl" => "Monitorowanie i ocena wpływu zmian w ruchu drogowym, w tym ocena ich wpływu na bezpieczeństwo i płynność ruchu.",
                    "en" => "Monitoring and evaluating the impact of changes in road traffic, including assessing their effect on safety and traffic flow."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ORGANIZATOR_TRANSPORTU_DROGOWEGO = [

            [
                "id" => 24295,
                "name" => json_encode([
                    "pl" => "Planowanie, organizowanie i koordynowanie transportu drogowego, w tym organizacja transportu towarów i osób.",
                    "en" => "Planning, organizing, and coordinating road transportation, including organizing the transportation of goods and people."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24296,
                "name" => json_encode([
                    "pl" => "Zarządzanie harmonogramem transportu, kontrolowanie wydajności operacji transportowych oraz optymalizacja kosztów.",
                    "en" => "Managing the transport schedule, controlling the efficiency of transportation operations, and optimizing costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24297,
                "name" => json_encode([
                    "pl" => "Koordynowanie transportu między różnymi podmiotami, w tym z przewoźnikami, magazynami i klientami.",
                    "en" => "Coordinating transport between various entities, including carriers, warehouses, and clients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24298,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją transportową, kontrolowanie sprawozdań, faktur, list przewozowych.",
                    "en" => "Managing transportation documentation, controlling reports, invoices, and waybills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24299,
                "name" => json_encode([
                    "pl" => "Analiza efektywności transportu drogowego, identyfikowanie problemów i wprowadzanie rozwiązań optymalizujących.",
                    "en" => "Analyzing the efficiency of road transport, identifying problems, and implementing optimization solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24300,
                "name" => json_encode([
                    "pl" => "Współpraca z działami firmy i zewnętrznymi kontrahentami w zakresie organizacji transportu.",
                    "en" => "Cooperating with company departments and external contractors regarding transport organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TRANSPORTU_DROGOWEGO = [

            [
                "id" => 24301,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów transportowych, w tym organizowanie tras, harmonogramów i obsługi pojazdów transportowych.",
                    "en" => "Supervising transportation processes, including organizing routes, schedules, and vehicle servicing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24302,
                "name" => json_encode([
                    "pl" => "Optymalizacja wykorzystania zasobów transportowych, w tym floty pojazdów i infrastruktury drogowej.",
                    "en" => "Optimizing the use of transportation resources, including vehicle fleets and road infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24303,
                "name" => json_encode([
                    "pl" => "Współpraca z kierowcami i innymi pracownikami transportu w celu zapewnienia bezpieczeństwa i terminowości transportu.",
                    "en" => "Collaborating with drivers and other transport personnel to ensure safety and timeliness of transportation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24304,
                "name" => json_encode([
                    "pl" => "Monitorowanie przebiegu tras transportowych i zapewnienie zgodności z normami bezpieczeństwa.",
                    "en" => "Monitoring transportation routes and ensuring compliance with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24305,
                "name" => json_encode([
                    "pl" => "Przygotowanie raportów dotyczących transportu drogowego, w tym stanu technicznego pojazdów, paliwa i wydajności operacji.",
                    "en" => "Preparing reports on road transportation, including vehicle condition, fuel consumption, and operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24306,
                "name" => json_encode([
                    "pl" => "Koordynowanie i monitorowanie procesów transportowych, zapewniając skuteczne zarządzanie pojazdami i personelem.",
                    "en" => "Coordinating and monitoring transportation processes, ensuring effective management of vehicles and personnel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MAKLER_MORSKI = [

            [
                "id" => 24307,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami przewozu towarów morskim transportem, w tym negocjowanie warunków transportu oraz ustalanie tras morskich.",
                    "en" => "Managing the processes of shipping goods by sea, including negotiating transport terms and determining maritime routes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24308,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z organizowaniem transportu morskiego, zarządzanie dokumentacją ładunkową i spedycyjną.",
                    "en" => "Coordinating activities related to organizing sea transport, managing cargo and shipping documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24309,
                "name" => json_encode([
                    "pl" => "Organizowanie negocjacji z przewoźnikami i armatorami, nadzorowanie transportu towarów przez morze.",
                    "en" => "Organizing negotiations with carriers and shipowners, overseeing the shipping of goods by sea."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24310,
                "name" => json_encode([
                    "pl" => "Zarządzanie relacjami z klientami, doradztwo w zakresie transportu morskiego i organizacji ładunków.",
                    "en" => "Managing customer relationships, providing advice on sea transport and cargo organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24311,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań spedycyjnych w zakresie transportu morskiego, współpraca z portami i przewoźnikami.",
                    "en" => "Coordinating shipping activities in maritime transport, cooperating with ports and carriers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24312,
                "name" => json_encode([
                    "pl" => "Monitorowanie i analiza rynku transportu morskiego, identyfikowanie potencjalnych przewoźników i rozwiązań logistycznych.",
                    "en" => "Monitoring and analyzing the maritime transport market, identifying potential carriers and logistics solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_PRACOWNICY_DO_SPRAW_TRANSPORTU = [

            [
                "id" => 24313,
                "name" => json_encode([
                    "pl" => "Zarządzanie i koordynowanie różnymi procesami transportowymi w firmie, w tym transportem krajowym i międzynarodowym.",
                    "en" => "Managing and coordinating various transportation processes within the company, including domestic and international transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24314,
                "name" => json_encode([
                    "pl" => "Koordynowanie logistyki transportowej, nadzorowanie przewozów towarów oraz monitorowanie statusu przesyłek.",
                    "en" => "Coordinating transport logistics, overseeing goods shipments, and monitoring shipment status."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24315,
                "name" => json_encode([
                    "pl" => "Monitorowanie wydajności transportu, identyfikowanie problemów i wdrażanie rozwiązań logistycznych.",
                    "en" => "Monitoring transport performance, identifying issues, and implementing logistical solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24316,
                "name" => json_encode([
                    "pl" => "Współpraca z firmami przewozowymi oraz innymi działami firmy w celu zapewnienia efektywności transportu.",
                    "en" => "Collaborating with transport companies and other company departments to ensure transport efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24317,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją transportową, kontrolowanie faktur, list przewozowych i innych dokumentów.",
                    "en" => "Managing transportation documentation, controlling invoices, waybills, and other documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24318,
                "name" => json_encode([
                    "pl" => "Optymalizacja kosztów transportu, kontrolowanie procesów transportowych i wspieranie działań rozwoju firmy.",
                    "en" => "Optimizing transportation costs, controlling transport processes, and supporting company development activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_PRZEWOZÓW_INTERMODALNYCH = [

            [
                "id" => 24319,
                "name" => json_encode([
                    "pl" => "Zarządzanie i optymalizacja transportu intermodalnego, w tym integracja różnych rodzajów transportu, takich jak kolej, transport drogowy i morski.",
                    "en" => "Managing and optimizing intermodal transport, including the integration of various transport modes such as rail, road, and sea."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24320,
                "name" => json_encode([
                    "pl" => "Koordynowanie operacji transportowych w systemie intermodalnym, organizowanie i planowanie tras transportowych.",
                    "en" => "Coordinating transportation operations in the intermodal system, organizing and planning transport routes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24321,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją transportową w transporcie intermodalnym, w tym dokumenty przewozowe, umowy i inne wymagane dokumenty.",
                    "en" => "Managing transportation documentation in intermodal transport, including shipping documents, contracts, and other required paperwork."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24322,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów transportowych, poszukiwanie rozwiązań pozwalających na zwiększenie efektywności i redukcję kosztów.",
                    "en" => "Optimizing transport processes, finding solutions that increase efficiency and reduce costs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24323,
                "name" => json_encode([
                    "pl" => "Współpraca z przewoźnikami, operatorami terminali i innymi uczestnikami transportu intermodalnego.",
                    "en" => "Collaborating with carriers, terminal operators, and other participants in intermodal transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24324,
                "name" => json_encode([
                    "pl" => "Monitorowanie statusu transportów intermodalnych, kontrolowanie wydajności i zapewnienie zgodności z przepisami.",
                    "en" => "Monitoring the status of intermodal shipments, controlling performance, and ensuring compliance with regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $AGENT_DO_SPRAW_ZAKUPÓW = [

            [
                "id" => 24325,
                "name" => json_encode([
                    "pl" => "Negocjowanie warunków zakupu towarów, usług i materiałów, w tym kontrolowanie jakości i cen.",
                    "en" => "Negotiating purchasing conditions for goods, services, and materials, including controlling quality and prices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24326,
                "name" => json_encode([
                    "pl" => "Poszukiwanie dostawców i producentów, analiza ofert i wybór najbardziej korzystnych warunków zakupu.",
                    "en" => "Sourcing suppliers and manufacturers, analyzing offers, and selecting the most advantageous purchasing terms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24327,
                "name" => json_encode([
                    "pl" => "Przygotowywanie zamówień zakupowych, koordynowanie dostaw towarów i zapewnienie terminowości realizacji zamówienia.",
                    "en" => "Preparing purchase orders, coordinating deliveries, and ensuring timely order fulfillment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24328,
                "name" => json_encode([
                    "pl" => "Analiza zapasów magazynowych, optymalizacja zakupów i monitorowanie poziomów zapasów.",
                    "en" => "Analyzing inventory levels, optimizing purchases, and monitoring stock levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24329,
                "name" => json_encode([
                    "pl" => "Współpraca z działem finansowym w zakresie kontrolowania budżetu zakupowego oraz płatności za zamówienia.",
                    "en" => "Cooperating with the finance department in controlling the purchasing budget and making payments for orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24330,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją zakupową, w tym fakturami, umowami i innymi dokumentami związanymi z zakupami.",
                    "en" => "Managing purchase documentation, including invoices, contracts, and other purchasing-related documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ZAOPATRZENIOWIEC = [

            [
                "id" => 24331,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem zaopatrzenia, w tym zamawianie materiałów i towarów, kontrolowanie stanów magazynowych.",
                    "en" => "Managing the procurement process, including ordering materials and goods, and controlling inventory levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24332,
                "name" => json_encode([
                    "pl" => "Negocjowanie warunków dostaw z dostawcami, zapewnienie terminowości i jakości towarów.",
                    "en" => "Negotiating delivery terms with suppliers, ensuring the timeliness and quality of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24333,
                "name" => json_encode([
                    "pl" => "Monitorowanie rynku dostawców i poszukiwanie najlepszych ofert zakupowych.",
                    "en" => "Monitoring the supplier market and seeking the best purchasing offers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24334,
                "name" => json_encode([
                    "pl" => "Zarządzanie budżetem na zaopatrzenie, kontrolowanie wydatków na materiały i towary.",
                    "en" => "Managing the procurement budget, controlling expenses on materials and goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24335,
                "name" => json_encode([
                    "pl" => "Koordynowanie dostaw i organizowanie transportu towarów do firmy.",
                    "en" => "Coordinating deliveries and organizing the transportation of goods to the company."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24336,
                "name" => json_encode([
                    "pl" => "Współpraca z działem magazynowym w zakresie odbioru towarów, sprawdzanie stanów magazynowych.",
                    "en" => "Cooperating with the warehouse department for the receipt of goods and checking inventory levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ZAOPATRZENIOWCE = [

            [
                "id" => 24337,
                "name" => json_encode([
                    "pl" => "Koordynowanie zamówień, monitorowanie zapasów, kontrolowanie dokumentacji zakupowej.",
                    "en" => "Coordinating orders, monitoring inventory, controlling procurement documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24338,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie negocjacji z dostawcami, zapewnianie optymalizacji kosztów zaopatrzenia.",
                    "en" => "Conducting negotiations with suppliers, ensuring cost optimization in procurement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24339,
                "name" => json_encode([
                    "pl" => "Zarządzanie zapasami magazynowymi, kontrolowanie dostępności materiałów i terminów dostaw.",
                    "en" => "Managing warehouse inventory, controlling material availability and delivery deadlines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24340,
                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji w celu zapewnienia dostępności materiałów do produkcji.",
                    "en" => "Collaborating with the production department to ensure material availability for production."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24341,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów zaopatrzenia, monitorowanie rynku dostawców, poszukiwanie najlepszych ofert.",
                    "en" => "Optimizing procurement processes, monitoring the supplier market, and seeking the best offers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24342,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją zakupową, przygotowywanie zamówień, faktur, listów przewozowych.",
                    "en" => "Managing procurement documentation, preparing orders, invoices, and shipping documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KURIER_MOTOCYKLOWY = [

            [
                "id" => 24343,
                "name" => json_encode([
                    "pl" => "Dostarczanie przesyłek motocyklowych na wyznaczoną trasę, zapewnienie terminowości dostaw.",
                    "en" => "Delivering motorcycle shipments to designated routes, ensuring timely deliveries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24344,
                "name" => json_encode([
                    "pl" => "Współpraca z działem logistyki w celu koordynowania tras i harmonogramu dostaw.",
                    "en" => "Cooperating with the logistics department to coordinate routes and delivery schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24345,
                "name" => json_encode([
                    "pl" => "Bezpieczne i szybkie dostarczanie paczek i przesyłek motocyklowych, przestrzeganie przepisów drogowych.",
                    "en" => "Delivering packages and motorcycle shipments safely and quickly, adhering to traffic regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24346,
                "name" => json_encode([
                    "pl" => "Kontrolowanie stanu technicznego pojazdu, dbanie o jego sprawność i bezpieczeństwo.",
                    "en" => "Checking the technical condition of the vehicle, ensuring its functionality and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24347,
                "name" => json_encode([
                    "pl" => "Przyjmowanie i przekazywanie przesyłek, zarządzanie dokumentacją dostaw.",
                    "en" => "Receiving and delivering shipments, managing delivery documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24348,
                "name" => json_encode([
                    "pl" => "Współpraca z klientami w zakresie dostaw oraz zgłaszanie problemów związanych z przesyłkami.",
                    "en" => "Collaborating with customers regarding deliveries and reporting issues related to shipments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KIEROWCY_MOTOCYKLI = [

            [
                "id" => 24349,
                "name" => json_encode([
                    "pl" => "Dostarczanie towarów, paczek i dokumentów na wskazany adres zgodnie z wyznaczoną trasą.",
                    "en" => "Delivering goods, packages, and documents to specified addresses according to the designated route."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24350,
                "name" => json_encode([
                    "pl" => "Kontrolowanie terminów dostaw oraz zarządzanie dokumentami transportowymi.",
                    "en" => "Controlling delivery deadlines and managing transportation documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24351,
                "name" => json_encode([
                    "pl" => "Współpraca z działem logistyki w zakresie planowania tras oraz monitorowania przebiegu dostaw.",
                    "en" => "Collaborating with the logistics department to plan routes and monitor delivery progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24352,
                "name" => json_encode([
                    "pl" => "Utrzymanie pojazdu w dobrym stanie technicznym, regularne sprawdzanie i konserwacja motocykla.",
                    "en" => "Maintaining the vehicle in good technical condition, performing regular checks and maintenance of the motorcycle."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24353,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów drogowych i zapewnianie bezpiecznego transportu towarów.",
                    "en" => "Adhering to traffic regulations and ensuring safe transportation of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24354,
                "name" => json_encode([
                    "pl" => "Dostarczanie przesyłek na czas, komunikowanie się z klientami w celu potwierdzenia odbioru.",
                    "en" => "Delivering shipments on time, communicating with customers to confirm receipt."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $EKSPEDIENT_WYPOŻYCZALNI = [

            [
                "id" => 24355,
                "name" => json_encode([
                    "pl" => "Obsługa klientów wypożyczalni, doradztwo w zakresie dostępnych produktów i warunków wynajmu.",
                    "en" => "Customer service in the rental shop, advising on available products and rental terms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24356,
                "name" => json_encode([
                    "pl" => "Sprawdzanie stanu technicznego wypożyczanych przedmiotów, przyjmowanie zwrotów i kontrolowanie terminów zwrotu.",
                    "en" => "Checking the technical condition of rented items, accepting returns, and monitoring return deadlines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24357,
                "name" => json_encode([
                    "pl" => "Przygotowanie przedmiotów do wypożyczenia, w tym czyszczenie i konserwacja.",
                    "en" => "Preparing items for rental, including cleaning and maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24358,
                "name" => json_encode([
                    "pl" => "Wystawianie faktur, rozliczanie transakcji wypożyczeń i płatności.",
                    "en" => "Issuing invoices, processing rental transactions and payments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24359,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją wypożyczanych przedmiotów, monitorowanie dostępności i stanu zapasów.",
                    "en" => "Managing documentation for rented items, monitoring availability and inventory condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24360,
                "name" => json_encode([
                    "pl" => "Obsługa systemu rezerwacji, przyjmowanie zamówień na wypożyczenie i organizowanie dostaw.",
                    "en" => "Handling the reservation system, accepting rental orders, and organizing deliveries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MAGAZYNIER = [

            [
                "id" => 24361,
                "name" => json_encode([
                    "pl" => "Przyjmowanie, przechowywanie i wydawanie towarów, kontrolowanie stanów magazynowych.",
                    "en" => "Receiving, storing, and issuing goods, controlling inventory levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24362,
                "name" => json_encode([
                    "pl" => "Zarządzanie przepływem towarów w magazynie, w tym przyjmowanie dostaw i przygotowywanie towarów do wysyłki.",
                    "en" => "Managing the flow of goods in the warehouse, including receiving deliveries and preparing goods for shipping."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24363,
                "name" => json_encode([
                    "pl" => "Przygotowywanie zamówień do wysyłki, kontrolowanie jakości i ilości towarów.",
                    "en" => "Preparing orders for shipment, checking the quality and quantity of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24364,
                "name" => json_encode([
                    "pl" => "Współpraca z działem sprzedaży i logistycznym, organizowanie transportu towarów do klientów.",
                    "en" => "Collaborating with the sales and logistics departments, organizing the transport of goods to customers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24365,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanów magazynowych, realizacja zamówień oraz sporządzanie raportów magazynowych.",
                    "en" => "Monitoring inventory levels, fulfilling orders, and preparing warehouse reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24366,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w magazynie, organizowanie przestrzeni składowej towarów.",
                    "en" => "Maintaining order in the warehouse, organizing storage space for goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_PUNKTU_SKUPU = [

            [
                "id" => 24367,
                "name" => json_encode([
                    "pl" => "Przyjmowanie i weryfikowanie towarów do skupu, ocena ich jakości i wartości rynkowej.",
                    "en" => "Receiving and verifying goods for purchase, assessing their quality and market value."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24368,
                "name" => json_encode([
                    "pl" => "Negocjowanie warunków zakupu z dostawcami i klientami, podpisywanie umów sprzedaży.",
                    "en" => "Negotiating purchase conditions with suppliers and customers, signing sales agreements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24369,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją skupu, w tym fakturami, umowami i innymi dokumentami sprzedaży.",
                    "en" => "Managing purchase documentation, including invoices, contracts, and other sales documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24370,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli jakości i stanu technicznego towarów przed zakupem, zapewnienie zgodności z wymaganiami.",
                    "en" => "Conducting quality and condition checks on goods before purchase, ensuring compliance with requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24371,
                "name" => json_encode([
                    "pl" => "Koordynowanie transportu towarów do punktu skupu i zarządzanie magazynem.",
                    "en" => "Coordinating transportation of goods to the purchasing point and managing the warehouse."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24372,
                "name" => json_encode([
                    "pl" => "Analizowanie rynku towarów w skupie, poszukiwanie najlepszych ofert zakupu.",
                    "en" => "Analyzing the market for purchased goods, seeking the best purchase offers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_SORTOWANIA_PRZESYŁEK_I_TOWARÓW = [

            [
                "id" => 24373,
                "name" => json_encode([
                    "pl" => "Sortowanie i organizowanie przesyłek i towarów według odpowiednich kategorii i kierunków dostawy.",
                    "en" => "Sorting and organizing shipments and goods by appropriate categories and delivery destinations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24374,
                "name" => json_encode([
                    "pl" => "Kontrolowanie zgodności towarów z zamówieniami, przygotowywanie do dalszego transportu.",
                    "en" => "Checking the compliance of goods with orders, preparing them for further transportation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24375,
                "name" => json_encode([
                    "pl" => "Sprawdzanie i dokumentowanie stanu przesyłek, zapewnianie zgodności z procedurami magazynowymi.",
                    "en" => "Checking and documenting the condition of shipments, ensuring compliance with warehouse procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24376,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w miejscu pracy, dbałość o odpowiednie składowanie i etykietowanie towarów.",
                    "en" => "Maintaining order in the workplace, ensuring proper storage and labeling of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24377,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów dotyczących sortowanych przesyłek oraz przekazywanie ich do dalszego transportu.",
                    "en" => "Preparing reports on sorted shipments and forwarding them for further transportation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24378,
                "name" => json_encode([
                    "pl" => "Współpraca z działem transportu i magazynem w zakresie terminowości dostaw.",
                    "en" => "Cooperating with the transport and warehouse departments regarding timely deliveries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_MAGAZYNIERZY_I_POKREWNI = [

            [
                "id" => 24379,
                "name" => json_encode([
                    "pl" => "Przyjmowanie towarów do magazynu, kontrolowanie jakości i ilości dostaw.",
                    "en" => "Receiving goods into the warehouse, checking the quality and quantity of deliveries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24380,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w magazynie, zarządzanie zapasami i kontrolowanie stanów magazynowych.",
                    "en" => "Maintaining order in the warehouse, managing stocks, and controlling inventory levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24381,
                "name" => json_encode([
                    "pl" => "Przygotowywanie towarów do wysyłki, realizowanie zamówień klientów.",
                    "en" => "Preparing goods for shipment, fulfilling customer orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24382,
                "name" => json_encode([
                    "pl" => "Koordynowanie procesów magazynowych, współpraca z działem logistycznym.",
                    "en" => "Coordinating warehouse processes, cooperating with the logistics department."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24383,
                "name" => json_encode([
                    "pl" => "Współpraca z działem sprzedaży w celu realizacji zamówień i organizowania transportu towarów.",
                    "en" => "Collaborating with the sales department to fulfill orders and organize the transportation of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24384,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów magazynowych i kontrolowanie zgodności zapasów.",
                    "en" => "Preparing warehouse reports and controlling stock compliance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MAGAZYNIER_LOGISTYK = [

            [
                "id" => 24385,
                "name" => json_encode([
                    "pl" => "Zarządzanie zapasami, kontrolowanie procesów zaopatrzeniowych i dystrybucyjnych w magazynie.",
                    "en" => "Managing inventory, controlling supply and distribution processes in the warehouse."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24386,
                "name" => json_encode([
                    "pl" => "Optymalizacja procesów magazynowych, w tym organizowanie transportu wewnętrznego i zewnętrznego.",
                    "en" => "Optimizing warehouse processes, including organizing internal and external transportation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24387,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją magazynową, w tym przygotowywanie raportów, faktur, i innych dokumentów związanych z magazynowaniem.",
                    "en" => "Managing warehouse documentation, including preparing reports, invoices, and other warehouse-related documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24388,
                "name" => json_encode([
                    "pl" => "Monitorowanie poziomów zapasów, organizowanie zaopatrzenia w materiały i towarów.",
                    "en" => "Monitoring stock levels, organizing procurement of materials and goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24389,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami firmy w celu zapewnienia ciągłości dostaw i optymalizacji procesów logistycznych.",
                    "en" => "Cooperating with other company departments to ensure continuity of deliveries and optimize logistical processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24390,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz logistycznych, identyfikowanie obszarów do poprawy i wdrażanie działań usprawniających.",
                    "en" => "Conducting logistics analyses, identifying areas for improvement, and implementing improvement actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWCY_OPERATORZY_WÓZKÓW_JEZDNIOWYCH = [

            [
                "id" => 24391,
                "name" => json_encode([
                    "pl" => "Obsługa wózków jezdniowych, transportowanie towarów w magazynach, halach produkcyjnych oraz obiektach logistycznych.",
                    "en" => "Operating forklifts, transporting goods in warehouses, production halls, and logistics facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24392,
                "name" => json_encode([
                    "pl" => "Załadunek i rozładunek towarów, w tym umieszczanie towarów na regałach i paletach.",
                    "en" => "Loading and unloading goods, including placing goods on shelves and pallets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24393,
                "name" => json_encode([
                    "pl" => "Kontrola stanu technicznego wózków jezdniowych, wykonywanie drobnych napraw i konserwacji.",
                    "en" => "Checking the technical condition of forklifts, performing minor repairs and maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24394,
                "name" => json_encode([
                    "pl" => "Zarządzanie przestrzenią magazynową, optymalizacja układu regałów i towarów.",
                    "en" => "Managing warehouse space, optimizing shelf and goods layout."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24395,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami magazynowymi i logistycznymi, w celu sprawnego zarządzania transportem towarów.",
                    "en" => "Cooperating with other warehouse and logistics personnel to manage goods transportation efficiently."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24396,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w miejscu pracy, przestrzeganie zasad bezpieczeństwa przy obsłudze wózków jezdniowych.",
                    "en" => "Maintaining order in the workplace, adhering to safety rules when operating forklifts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_LISTONOSZE_I_POKREWNI = [

            [
                "id" => 24397,
                "name" => json_encode([
                    "pl" => "Dostarczanie listów, paczek i przesyłek do odbiorców w wyznaczonych rejonach.",
                    "en" => "Delivering letters, parcels, and shipments to recipients in designated areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24398,
                "name" => json_encode([
                    "pl" => "Przyjmowanie i nadawanie przesyłek pocztowych, rejestrowanie i archiwizowanie dokumentów.",
                    "en" => "Receiving and dispatching mail, registering and archiving documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24399,
                "name" => json_encode([
                    "pl" => "Koordynowanie transportu przesyłek pocztowych między placówkami pocztowymi.",
                    "en" => "Coordinating the transport of postal items between post offices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24400,
                "name" => json_encode([
                    "pl" => "Współpraca z działem magazynowym i logistycznym w zakresie przygotowywania przesyłek do transportu.",
                    "en" => "Collaborating with the warehouse and logistics department to prepare items for transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24401,
                "name" => json_encode([
                    "pl" => "Dbałość o odpowiednią dokumentację przesyłek, w tym kontrolowanie stanów magazynowych paczek i listów.",
                    "en" => "Ensuring proper documentation for shipments, including monitoring inventory levels of packages and letters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24402,
                "name" => json_encode([
                    "pl" => "Utrzymywanie kontaktu z odbiorcami przesyłek, przekazywanie informacji o stanie doręczenia.",
                    "en" => "Maintaining contact with recipients, providing information about delivery status."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ASYSTENT_USŁUG_POCZTOWYCH = [

            [
                "id" => 24403,
                "name" => json_encode([
                    "pl" => "Pomoc w przyjmowaniu i nadawaniu przesyłek pocztowych, sortowanie i przygotowywanie paczek do wysyłki.",
                    "en" => "Assisting in receiving and dispatching postal items, sorting and preparing packages for shipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24404,
                "name" => json_encode([
                    "pl" => "Wydawanie przesyłek odbiorcom, kontrolowanie dokumentacji związanej z doręczeniem paczek.",
                    "en" => "Delivering items to recipients, controlling documentation related to package delivery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24405,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami poczty w zakresie organizowania transportu przesyłek.",
                    "en" => "Collaborating with other postal employees to organize the transport of shipments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24406,
                "name" => json_encode([
                    "pl" => "Kontrolowanie stanów magazynowych przesyłek pocztowych, przygotowywanie raportów o stanie zapasów.",
                    "en" => "Monitoring postal item stock levels, preparing reports on inventory status."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24407,
                "name" => json_encode([
                    "pl" => "Obsługa systemu informacyjnego poczty, pomoc w rejestracji i śledzeniu przesyłek.",
                    "en" => "Handling the postal information system, assisting in registration and tracking of shipments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24408,
                "name" => json_encode([
                    "pl" => "Pomoc w organizowaniu specjalnych usług pocztowych, takich jak przesyłki ekspresowe czy ubezpieczenia.",
                    "en" => "Assisting in organizing special postal services such as express shipments or insurance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_USŁUG_POCZTOWYCH_I_FINANSOWYCH = [

            [
                "id" => 24409,
                "name" => json_encode([
                    "pl" => "Zarządzanie przesyłkami pocztowymi, w tym ich przyjmowanie, sortowanie i dostarczanie do odbiorców.",
                    "en" => "Managing postal shipments, including receiving, sorting, and delivering them to recipients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24410,
                "name" => json_encode([
                    "pl" => "Koordynowanie operacji związanych z usługami finansowymi, w tym przelewami, wypłatami i obsługą kont.",
                    "en" => "Coordinating operations related to financial services, including transfers, withdrawals, and account management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24411,
                "name" => json_encode([
                    "pl" => "Zarządzanie usługami pocztowymi, doradztwo klientom w zakresie usług pocztowych i finansowych.",
                    "en" => "Managing postal services, advising customers on postal and financial services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24412,
                "name" => json_encode([
                    "pl" => "Obsługa dokumentów pocztowych, w tym faktur, umów i innych dokumentów związanych z usługami finansowymi.",
                    "en" => "Handling postal documents, including invoices, contracts, and other documents related to financial services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24413,
                "name" => json_encode([
                    "pl" => "Kontrolowanie procesów przekazów pieniężnych, udzielanie informacji na temat transakcji finansowych.",
                    "en" => "Controlling money transfer processes, providing information about financial transactions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24414,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją finansową, kontrolowanie płatności, nadzorowanie transakcji bankowych.",
                    "en" => "Managing financial documentation, controlling payments, overseeing banking transactions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWCA_CIĄGNIKA_SIODŁOWEGO = [

            [
                "id" => 24415,
                "name" => json_encode([
                    "pl" => "Transport towarów z wykorzystaniem ciągnika siodłowego, dbałość o bezpieczeństwo przewożonych ładunków.",
                    "en" => "Transporting goods using a semi-trailer truck, ensuring the safety of transported goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24416,
                "name" => json_encode([
                    "pl" => "Zarządzanie pojazdem, dbałość o stan techniczny ciągnika oraz naczepy, regularne przeglądy techniczne.",
                    "en" => "Managing the vehicle, ensuring the technical condition of the tractor and trailer, conducting regular technical inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24417,
                "name" => json_encode([
                    "pl" => "Transport towarów na długich trasach, kontrolowanie warunków jazdy, przestrzeganie przepisów drogowych.",
                    "en" => "Transporting goods on long routes, monitoring driving conditions, and adhering to road regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24418,
                "name" => json_encode([
                    "pl" => "Załadunek i rozładunek towarów, kontrolowanie jakości i ilości ładunków.",
                    "en" => "Loading and unloading goods, controlling the quality and quantity of loads."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24419,
                "name" => json_encode([
                    "pl" => "Dokumentowanie transportu, kontrolowanie wymaganych dokumentów takich jak listy przewozowe, faktury.",
                    "en" => "Documenting the transport, controlling required documents such as waybills and invoices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24420,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami firmy w zakresie organizowania transportu i dostawy towarów.",
                    "en" => "Collaborating with other company departments in organizing transport and goods delivery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWCA_SAMOCHODU_CIĘŻAROWEGO = [

            [
                "id" => 24421,
                "name" => json_encode([
                    "pl" => "Transport towarów samochodami ciężarowymi, załadunek i rozładunek towarów w odpowiednich miejscach.",
                    "en" => "Transporting goods using heavy-duty trucks, loading and unloading goods at the designated locations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24422,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją transportową, kontrolowanie list przewozowych i faktur.",
                    "en" => "Managing transportation documentation, controlling waybills and invoices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24423,
                "name" => json_encode([
                    "pl" => "Nadzór nad stanem technicznym pojazdu, dbanie o jego sprawność oraz realizowanie drobnych napraw.",
                    "en" => "Supervising the technical condition of the vehicle, ensuring its functionality, and performing minor repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24424,
                "name" => json_encode([
                    "pl" => "Transport towarów w sposób bezpieczny i zgodny z przepisami drogowymi.",
                    "en" => "Transporting goods in a safe manner and in compliance with road regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24425,
                "name" => json_encode([
                    "pl" => "Zarządzanie czasem dostaw, kontrolowanie terminowości transportu.",
                    "en" => "Managing delivery times, monitoring the timeliness of transportation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24426,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami firmy i klientami w celu zapewnienia sprawnego transportu.",
                    "en" => "Cooperating with other company departments and clients to ensure efficient transportation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KIEROWCY_SAMOCHODÓW_CIĘŻAROWYCH = [

            [
                "id" => 24427,
                "name" => json_encode([
                    "pl" => "Transport towarów różnymi typami samochodów ciężarowych, dbanie o bezpieczeństwo przewożonych ładunków.",
                    "en" => "Transporting goods using various types of heavy-duty trucks, ensuring the safety of the transported goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24428,
                "name" => json_encode([
                    "pl" => "Załadunek, transport i rozładunek towarów w wyznaczone miejsca.",
                    "en" => "Loading, transporting, and unloading goods at designated locations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24429,
                "name" => json_encode([
                    "pl" => "Kontrola stanu technicznego pojazdu, przeprowadzanie przeglądów i drobnych napraw.",
                    "en" => "Inspecting the technical condition of the vehicle, performing inspections and minor repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24430,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentami transportowymi, w tym kontrola terminów dostaw i zgodności z zamówieniami.",
                    "en" => "Managing transportation documents, including controlling delivery deadlines and order compliance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24431,
                "name" => json_encode([
                    "pl" => "Współpraca z działem logistyki w zakresie organizacji tras transportowych i realizacji zamówień.",
                    "en" => "Cooperating with the logistics department to organize transport routes and fulfill orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24432,
                "name" => json_encode([
                    "pl" => "Optymalizacja tras transportowych, zapewnienie terminowej dostawy towarów.",
                    "en" => "Optimizing transport routes, ensuring the timely delivery of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MASZYNISTA_DOKU = [

            [
                "id" => 24433,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń na doku, zapewnienie bezpiecznego załadunku i rozładunku towarów.",
                    "en" => "Operating machines and equipment on the dock, ensuring safe loading and unloading of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24434,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu technicznego urządzeń doku, wykonywanie drobnych napraw oraz konserwacji.",
                    "en" => "Monitoring the technical condition of dock equipment, performing minor repairs and maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24435,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań załadunku i rozładunku towarów w celu zapewnienia efektywności pracy.",
                    "en" => "Coordinating loading and unloading activities to ensure operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24436,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją związana z pracą doku, w tym raportowanie stanu towarów i procesów logistycznych.",
                    "en" => "Managing documentation related to dock operations, including reporting on goods status and logistics processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24437,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku na doku, przestrzeganie norm bezpieczeństwa pracy.",
                    "en" => "Maintaining order on the dock, adhering to workplace safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24438,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem pracowników doku oraz innymi działami w celu realizacji załadunku i rozładunku.",
                    "en" => "Collaborating with the dock team and other departments to facilitate loading and unloading."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MASZYNISTA_GÓRNICZYCH_MASZYN_WYCIĄGOWYCH = [

            [
                "id" => 24439,
                "name" => json_encode([
                    "pl" => "Obsługa górniczych maszyn wyciągowych, w tym transport materiałów w kopalni.",
                    "en" => "Operating mining hoisting machines, including transporting materials in the mine."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24440,
                "name" => json_encode([
                    "pl" => "Zarządzanie transportem w kopalniach, obsługa systemów wyciągowych do transportu urobku.",
                    "en" => "Managing transportation in mines, operating hoisting systems for hauling mined material."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24441,
                "name" => json_encode([
                    "pl" => "Nadzór nad prawidłowym działaniem maszyn, kontrolowanie parametrów pracy i bezpieczeństwa.",
                    "en" => "Supervising the proper functioning of machines, monitoring work and safety parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24442,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli i konserwacji maszyn wyciągowych w celu zapewnienia ich sprawności.",
                    "en" => "Performing inspections and maintenance of hoisting machines to ensure their functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24443,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją eksploatacyjną maszyn, rejestrowanie awarii i napraw.",
                    "en" => "Managing operational documentation for machines, registering breakdowns and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24444,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań transportowych, współpraca z innymi maszynistami i pracownikami kopalni.",
                    "en" => "Coordinating transportation activities, collaborating with other machine operators and mine workers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MASZYNISTA_KOLEI_LINOWYCH_WYCIĄGÓW_NARCIARSKICH_I_ZJEŻDŻALNI_GRAWITACYJNYCH = [

            [
                "id" => 24445,
                "name" => json_encode([
                    "pl" => "Obsługa kolei linowych, wyciągów narciarskich i zjeżdżalni grawitacyjnych, kontrolowanie bezpieczeństwa pasażerów.",
                    "en" => "Operating cable cars, ski lifts, and gravity slides, ensuring passenger safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24446,
                "name" => json_encode([
                    "pl" => "Monitorowanie ruchu pasażerów, kontrolowanie działania urządzeń i systemów bezpieczeństwa.",
                    "en" => "Monitoring passenger flow, controlling the operation of devices and safety systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24447,
                "name" => json_encode([
                    "pl" => "Zarządzanie kolejką linową lub wyciągiem, przeprowadzanie konserwacji urządzeń mechanicznych.",
                    "en" => "Managing the cable car or lift, performing maintenance on mechanical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24448,
                "name" => json_encode([
                    "pl" => "Wykonywanie przeglądów i konserwacji technicznych wyciągów, dbanie o zgodność z normami bezpieczeństwa.",
                    "en" => "Performing inspections and technical maintenance of lifts, ensuring compliance with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24449,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją techniczną urządzeń wyciągów oraz nadzór nad ich stanem.",
                    "en" => "Managing the technical documentation for lift equipment and overseeing its condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24450,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami w zakresie zapewnienia sprawności wyciągów oraz płynności operacji.",
                    "en" => "Cooperating with other staff to ensure the smooth operation of lifts and other activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MASZYNISTA_OBSLUGUJĄCY_URZĄDZENIA_DO_NAPEŁNIANIA_I_OPRÓŻNIANIA_ZBIORNIKÓW = [

            [
                "id" => 24451,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń do napełniania i opróżniania zbiorników, kontrolowanie procesu napełniania.",
                    "en" => "Operating equipment for filling and emptying tanks, controlling the filling process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24452,
                "name" => json_encode([
                    "pl" => "Monitorowanie poziomu materiału w zbiornikach, zapewnienie zgodności z procedurami bezpieczeństwa.",
                    "en" => "Monitoring material levels in tanks, ensuring compliance with safety procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24453,
                "name" => json_encode([
                    "pl" => "Zarządzanie napełnianiem i opróżnianiem zbiorników zgodnie z wymaganiami technicznymi.",
                    "en" => "Managing the filling and emptying of tanks according to technical specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24454,
                "name" => json_encode([
                    "pl" => "Kontrolowanie parametrów pracy urządzeń, monitorowanie temperatury i ciśnienia w zbiornikach.",
                    "en" => "Controlling the operational parameters of equipment, monitoring temperature and pressure in tanks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24455,
                "name" => json_encode([
                    "pl" => "Utrzymywanie urządzeń do napełniania i opróżniania zbiorników w dobrym stanie technicznym.",
                    "en" => "Maintaining filling and emptying equipment in good technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24456,
                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji w zakresie efektywności i bezpieczeństwa procesów napełniania.",
                    "en" => "Collaborating with the production department to ensure the efficiency and safety of the filling processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MASZYNISTA_SPECJALISTYCZNYCH_DŹWIGNIC_KOLEJOWYCH = [

            [
                "id" => 24457,
                "name" => json_encode([
                    "pl" => "Obsługa specjalistycznych dźwignic kolejowych, transport materiałów na torach kolejowych.",
                    "en" => "Operating specialized railway cranes, transporting materials on railway tracks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24458,
                "name" => json_encode([
                    "pl" => "Nadzór nad pracą dźwignic kolejowych, kontrolowanie bezpieczeństwa transportu materiałów.",
                    "en" => "Supervising the operation of railway cranes, controlling the safety of material transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24459,
                "name" => json_encode([
                    "pl" => "Regularne przeglądy i konserwacja dźwignic kolejowych, naprawa usterek technicznych.",
                    "en" => "Regular inspections and maintenance of railway cranes, repairing technical faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24460,
                "name" => json_encode([
                    "pl" => "Dokumentowanie operacji dźwignicowych, kontrolowanie wymagań dotyczących bezpieczeństwa.",
                    "en" => "Documenting crane operations, ensuring safety requirements are met."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24461,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z transportem materiałów na torach kolejowych.",
                    "en" => "Coordinating activities related to the transport of materials on railway tracks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24462,
                "name" => json_encode([
                    "pl" => "Zarządzanie sprzętem i dokumentacją operacyjną dźwignic kolejowych.",
                    "en" => "Managing crane equipment and operational documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_DŹWIGNIC_LINOTOROWYCH = [

            [
                "id" => 24463,
                "name" => json_encode([
                    "pl" => "Obsługa dźwignic linotorowych, transport towarów na torach przy użyciu lin i urządzeń mechanicznych.",
                    "en" => "Operating winches, transporting goods on tracks using ropes and mechanical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24464,
                "name" => json_encode([
                    "pl" => "Kontrola pracy dźwignic linotorowych, zapewnienie bezpieczeństwa ładunków i pasażerów.",
                    "en" => "Monitoring the operation of winches, ensuring the safety of cargo and passengers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24465,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji, napraw i inspekcji technicznych dźwignic linotorowych.",
                    "en" => "Performing maintenance, repairs, and technical inspections of winches."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24466,
                "name" => json_encode([
                    "pl" => "Zarządzanie transportem towarów, monitorowanie załadunku i rozładunku materiałów.",
                    "en" => "Managing the transportation of goods, monitoring the loading and unloading of materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24467,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa pracy przy obsłudze dźwignic linotorowych.",
                    "en" => "Adhering to safety protocols when operating winches."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24468,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi zespołami w celu optymalizacji procesów transportu materiałów.",
                    "en" => "Collaborating with other teams to optimize material transport processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MECHANIK_WYCIĄGARKI_SZYBOWCOWEJ = [

            [
                "id" => 24469,
                "name" => json_encode([
                    "pl" => "Obsługa wyciągarki szybowcowej, zapewnienie prawidłowego wciągania i opuszczania szybowców.",
                    "en" => "Operating the glider winch, ensuring correct hoisting and lowering of gliders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24470,
                "name" => json_encode([
                    "pl" => "Zarządzanie pracą wyciągarki, kontrolowanie parametrów operacyjnych i bezpieczeństwa.",
                    "en" => "Managing the winch operation, controlling operational parameters and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24471,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji i napraw wyciągarki szybowcowej oraz związanych z nią systemów.",
                    "en" => "Performing maintenance and repairs on the glider winch and related systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24472,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem operacyjnym w zakresie optymalizacji procesu wyciągania szybowców.",
                    "en" => "Collaborating with the operational team to optimize the glider towing process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24473,
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności z procedurami bezpieczeństwa przy obsłudze wyciągarki.",
                    "en" => "Ensuring compliance with safety procedures when operating the winch."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24474,
                "name" => json_encode([
                    "pl" => "Kontrolowanie stanu technicznego wyciągarki, przeprowadzanie codziennych inspekcji.",
                    "en" => "Checking the technical condition of the winch, performing daily inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_MOSTU_ZWODZONEGO = [

            [
                "id" => 24475,
                "name" => json_encode([
                    "pl" => "Obsługa mostu zwodzonego, otwieranie i zamykanie mostu w odpowiedzi na potrzeby transportu wodnego.",
                    "en" => "Operating the drawbridge, opening and closing the bridge in response to waterway transport needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24476,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu technicznego mostu, przeprowadzanie bieżących kontroli i konserwacji.",
                    "en" => "Monitoring the technical condition of the bridge, performing ongoing inspections and maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24477,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją operacyjną mostu, kontrolowanie zgodności z normami bezpieczeństwa.",
                    "en" => "Managing operational documentation for the bridge, ensuring compliance with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24478,
                "name" => json_encode([
                    "pl" => "Koordynowanie pracy mostu z działem transportu wodnego oraz służbami ratunkowymi w razie potrzeby.",
                    "en" => "Coordinating bridge operations with the water transport department and emergency services when needed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24479,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem inżynierskim w zakresie napraw i modernizacji mostu.",
                    "en" => "Collaborating with the engineering team for repairs and upgrades of the bridge."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24480,
                "name" => json_encode([
                    "pl" => "Zarządzanie procedurami bezpieczeństwa przy obsłudze mostu zwodzonego, w tym kontrolowanie prędkości przepływu ruchu.",
                    "en" => "Managing safety procedures for the operation of the drawbridge, including controlling traffic flow speed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_PRZENOSNIKÓW = [

            [
                "id" => 24481,
                "name" => json_encode([
                    "pl" => "Obsługa przenośników w celu transportu materiałów w magazynach i zakładach produkcyjnych.",
                    "en" => "Operating conveyors to transport materials in warehouses and manufacturing facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24482,
                "name" => json_encode([
                    "pl" => "Monitorowanie działania przenośników, kontrolowanie parametrów transportu towarów.",
                    "en" => "Monitoring the operation of conveyors, controlling material transport parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24483,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli jakości transportowanych materiałów, zapobieganie uszkodzeniom towarów.",
                    "en" => "Conducting quality checks of transported materials, preventing damage to goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24484,
                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji i magazynowania, organizowanie przepływu materiałów.",
                    "en" => "Collaborating with the production and storage department, organizing material flow."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24485,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji i napraw przenośników, dbanie o ich sprawność techniczną.",
                    "en" => "Performing maintenance and repairs on conveyors, ensuring their technical efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24486,
                "name" => json_encode([
                    "pl" => "Dokumentowanie pracy przenośników, rejestrowanie awarii i problemów technicznych.",
                    "en" => "Documenting conveyor operations, recording failures and technical issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_PRZENOSNIKÓW_TAŚMOWYCH = [

            [
                "id" => 24487,
                "name" => json_encode([
                    "pl" => "Obsługa taśmowych przenośników transportowych, transportowanie materiałów w zakładzie produkcyjnym.",
                    "en" => "Operating belt conveyors for transporting materials in a production facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24488,
                "name" => json_encode([
                    "pl" => "Kontrolowanie płynności transportu materiałów, dostosowywanie prędkości taśmociągów do zapotrzebowania.",
                    "en" => "Controlling the flow of material transport, adjusting conveyor belt speeds to meet demand."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24489,
                "name" => json_encode([
                    "pl" => "Współpraca z działem produkcji i magazynowania, organizowanie przepływu materiałów.",
                    "en" => "Collaborating with the production and storage departments, organizing material flow."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24490,
                "name" => json_encode([
                    "pl" => "Wykonywanie codziennych kontroli technicznych taśmociągów, zgłaszanie awarii i usterek.",
                    "en" => "Performing daily technical checks on conveyor belts, reporting faults and breakdowns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24491,
                "name" => json_encode([
                    "pl" => "Dbałość o prawidłową konserwację taśmociągów, usuwanie zatorów i problemów technicznych.",
                    "en" => "Ensuring proper maintenance of conveyors, removing blockages and technical issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24492,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem transportu materiałów, kontrolowanie zgodności z normami bezpieczeństwa.",
                    "en" => "Managing the material transport process, ensuring compliance with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_SUWNIC = [

            [
                "id" => 24493,
                "name" => json_encode([
                    "pl" => "Obsługa suwnic, transportowanie ładunków za pomocą dźwigów suwnicowych w magazynach i zakładach produkcyjnych.",
                    "en" => "Operating cranes, transporting loads using overhead cranes in warehouses and production facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24494,
                "name" => json_encode([
                    "pl" => "Monitorowanie i kontrolowanie pracy suwnicy, zapewnienie bezpiecznego transportu towarów.",
                    "en" => "Monitoring and controlling crane operations, ensuring the safe transport of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24495,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji suwnic, kontrolowanie ich stanu technicznego.",
                    "en" => "Performing crane maintenance, checking their technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24496,
                "name" => json_encode([
                    "pl" => "Dokumentowanie działań związanych z obsługą suwnicy, rejestrowanie awarii i usterk.",
                    "en" => "Documenting crane operations, registering failures and faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24497,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w celu zapewnienia sprawnego transportu towarów.",
                    "en" => "Collaborating with other departments to ensure smooth transportation of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24498,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa przy obsłudze suwnic, dbałość o warunki pracy.",
                    "en" => "Adhering to safety procedures when operating cranes, ensuring proper working conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_ŚLUZY_JAZU_ZAPORY_I_POMPOWNI = [

            [
                "id" => 24499,
                "name" => json_encode([
                    "pl" => "Obsługa śluz, jazów, zapór i pompowni, zapewnienie sprawności urządzeń do kontrolowania poziomu wody.",
                    "en" => "Operating locks, weirs, dams, and pumping stations, ensuring the proper functioning of devices controlling water levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24500,
                "name" => json_encode([
                    "pl" => "Kontrolowanie parametrów pracy urządzeń, w tym poziomu wody i ciśnienia w systemach.",
                    "en" => "Monitoring operational parameters of equipment, including water level and pressure in systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24501,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji i napraw urządzeń śluz, zapór i pompowni.",
                    "en" => "Performing maintenance and repairs of locks, weirs, and pumping station equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24502,
                "name" => json_encode([
                    "pl" => "Dokumentowanie operacji związanych z kontrolowaniem przepływu wody.",
                    "en" => "Documenting operations related to water flow control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24503,
                "name" => json_encode([
                    "pl" => "Zarządzanie bezpieczeństwem pracy przy obsłudze urządzeń hydraulicznych i pompowych.",
                    "en" => "Managing safety procedures when operating hydraulic and pumping devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24504,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań z innymi działami w zakresie zarządzania poziomami wody.",
                    "en" => "Coordinating activities with other departments for managing water levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_URZĄDZEŃ_ŁADUNKOWYCH_SILOSU = [

            [
                "id" => 24505,
                "name" => json_encode([
                    "pl" => "Obsługa urządzeń ładunkowych silosu, w tym załadunek, rozładunek i transport materiałów sypkich.",
                    "en" => "Operating silo loading equipment, including loading, unloading, and transporting bulk materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24506,
                "name" => json_encode([
                    "pl" => "Kontrolowanie jakości i ilości materiałów sypkich podczas załadunku i rozładunku.",
                    "en" => "Monitoring the quality and quantity of bulk materials during loading and unloading."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24507,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji technicznych urządzeń silosowych, zapewnienie ich sprawności.",
                    "en" => "Conducting technical inspections of silo equipment, ensuring its functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24508,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w zakresie organizacji transportu i magazynowania materiałów.",
                    "en" => "Coordinating with other departments in organizing the transportation and storage of materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24509,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w miejscu pracy, dbanie o czystość urządzeń ładunkowych i silosów.",
                    "en" => "Maintaining order in the workplace, ensuring the cleanliness of loading equipment and silos."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24510,
                "name" => json_encode([
                    "pl" => "Dokumentowanie operacji związanych z załadunkiem i rozładunkiem materiałów.",
                    "en" => "Documenting operations related to the loading and unloading of materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_WIEŻOWY_PRZENOŚNIKA_TAŚMOWEGO = [

            [
                "id" => 24511,
                "name" => json_encode([
                    "pl" => "Obsługa wieżowego przenośnika taśmowego, transport materiałów w zakładach przemysłowych.",
                    "en" => "Operating the tower belt conveyor, transporting materials in industrial facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24512,
                "name" => json_encode([
                    "pl" => "Kontrolowanie parametrów pracy przenośnika, zapewnienie płynności transportu materiałów.",
                    "en" => "Monitoring the operational parameters of the conveyor, ensuring smooth material transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24513,
                "name" => json_encode([
                    "pl" => "Wykonywanie drobnych napraw przenośników taśmowych, dbanie o ich sprawność.",
                    "en" => "Performing minor repairs on belt conveyors, ensuring their functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24514,
                "name" => json_encode([
                    "pl" => "Dokumentowanie pracy przenośnika, zgłaszanie usterek i awarii do działu konserwacji.",
                    "en" => "Documenting conveyor operations, reporting malfunctions and breakdowns to the maintenance department."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24515,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w celu optymalizacji procesów transportu materiałów.",
                    "en" => "Cooperating with other departments to optimize material transport processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24516,
                "name" => json_encode([
                    "pl" => "Kontrola zgodności z normami bezpieczeństwa pracy przy obsłudze przenośników taśmowych.",
                    "en" => "Ensuring compliance with safety standards during the operation of belt conveyors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_WYWROTNIC_WAGONOWYCH = [

            [
                "id" => 24517,
                "name" => json_encode([
                    "pl" => "Obsługa wywrotnic wagonowych, w tym przechylanie wagonów w celu rozładunku materiałów.",
                    "en" => "Operating wagon tipplers, including tilting wagons for unloading materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24518,
                "name" => json_encode([
                    "pl" => "Kontrolowanie działania wywrotnicy, zapewnienie sprawności technicznej urządzenia.",
                    "en" => "Controlling the operation of the tippler, ensuring the technical condition of the equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24519,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem wyładunku materiałów z wagonów, przestrzeganie norm bezpieczeństwa.",
                    "en" => "Managing the unloading process of materials from wagons, ensuring safety standards are followed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24520,
                "name" => json_encode([
                    "pl" => "Wykonywanie przeglądów i konserwacji wywrotnic wagonowych, dbanie o ich sprawność.",
                    "en" => "Performing inspections and maintenance of wagon tipplers, ensuring their functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24521,
                "name" => json_encode([
                    "pl" => "Dokumentowanie operacji wyładunku, kontrolowanie dokumentów przewozowych.",
                    "en" => "Documenting unloading operations, controlling transport documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24522,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w zakresie optymalizacji procesów załadunku i rozładunku.",
                    "en" => "Cooperating with other departments to optimize loading and unloading processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_ŻURAWIA_JEZDNIOWEGO = [

            [
                "id" => 24523,
                "name" => json_encode([
                    "pl" => "Obsługa żurawia jezdniowego, transport materiałów w obrębie zakładu lub terenu budowy.",
                    "en" => "Operating a mobile crane, transporting materials within a facility or construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24524,
                "name" => json_encode([
                    "pl" => "Kontrolowanie i nadzorowanie pracy żurawia, zapewnienie bezpieczeństwa transportowanych ładunków.",
                    "en" => "Monitoring and supervising crane operations, ensuring the safety of transported loads."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24525,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów technicznych żurawia, dbałość o jego sprawność.",
                    "en" => "Performing technical inspections of the crane, ensuring its functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24526,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem transportu towarów, organizowanie i koordynowanie działań związanych z załadunkiem.",
                    "en" => "Managing the material transport process, organizing and coordinating loading activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24527,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa przy obsłudze żurawi, szkolenie nowych operatorów.",
                    "en" => "Adhering to safety procedures when operating cranes, training new operators."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24528,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi zespołami w celu zapewnienia efektywnego transportu i rozładunku materiałów.",
                    "en" => "Cooperating with other teams to ensure efficient material transport and unloading."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_ŻURAWIA_WIEŻOWEGO = [

            [
                "id" => 24529,
                "name" => json_encode([
                    "pl" => "Obsługa żurawia wieżowego, podnoszenie i transportowanie materiałów na wysokościach na budowie.",
                    "en" => "Operating a tower crane, lifting and transporting materials at height on construction sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24530,
                "name" => json_encode([
                    "pl" => "Monitorowanie pracy żurawia, zapewnienie prawidłowego podnoszenia i opuszczania ładunków.",
                    "en" => "Monitoring crane operations, ensuring proper lifting and lowering of loads."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24531,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów technicznych, kontrolowanie stanu technicznego żurawia.",
                    "en" => "Performing technical inspections, checking the crane's technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24532,
                "name" => json_encode([
                    "pl" => "Zarządzanie pracą żurawia, kontrolowanie załadunku i rozładunku materiałów na placu budowy.",
                    "en" => "Managing crane operations, controlling the loading and unloading of materials on the construction site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24533,
                "name" => json_encode([
                    "pl" => "Utrzymywanie dokumentacji technicznej żurawia, zapisywanie awarii i konserwacji.",
                    "en" => "Maintaining crane technical documentation, recording breakdowns and maintenance activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24534,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem podnoszenia i transportu ładunków, monitorowanie wymagań bezpieczeństwa.",
                    "en" => "Managing the lifting and transport process, monitoring safety requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_MASZYNIŚCI_I_OPERATORZY_MASZYN_I_URZĄDZEŃ_DŹWIGOWO_TRANSPORTOWYCH_I_POKREWNI = [

            [
                "id" => 24535,
                "name" => json_encode([
                    "pl" => "Obsługa maszyn i urządzeń dźwigowo-transportowych, takich jak suwnice, wyciągarki i przenośniki.",
                    "en" => "Operating hoisting and transport machines and equipment, such as cranes, winches, and conveyors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24536,
                "name" => json_encode([
                    "pl" => "Koordynowanie transportu towarów przy użyciu dźwigów, wyciągarek i innych urządzeń transportowych.",
                    "en" => "Coordinating the transport of goods using cranes, winches, and other transport equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24537,
                "name" => json_encode([
                    "pl" => "Nadzór nad działaniem urządzeń transportowych, kontrolowanie jakości transportu.",
                    "en" => "Supervising the operation of transport equipment, monitoring the quality of transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24538,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów, konserwacji oraz drobnych napraw maszyn transportowych.",
                    "en" => "Performing inspections, maintenance, and minor repairs on transport machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24539,
                "name" => json_encode([
                    "pl" => "Dokumentowanie operacji dźwigowych, kontrolowanie poprawności i bezpieczeństwa procesów transportowych.",
                    "en" => "Documenting hoisting operations, controlling the correctness and safety of transport processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24540,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami firmy w zakresie efektywnego transportu materiałów i załadunku.",
                    "en" => "Collaborating with other company departments for the efficient transportation of materials and loading."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIK_POCIĄGU = [

            [
                "id" => 24541,
                "name" => json_encode([
                    "pl" => "Zarządzanie i nadzorowanie pracy pociągu, koordynowanie pracy maszynisty i innych członków załogi.",
                    "en" => "Managing and supervising train operations, coordinating the work of the locomotive engineer and other crew members."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24542,
                "name" => json_encode([
                    "pl" => "Kontrolowanie i zapewnienie bezpieczeństwa pasażerów, przestrzeganie zasad BHP podczas podróży.",
                    "en" => "Ensuring passenger safety, adhering to health and safety regulations during the journey."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24543,
                "name" => json_encode([
                    "pl" => "Monitorowanie harmonogramu podróży, zapewnienie terminowości odjazdów i przyjazdów pociągu.",
                    "en" => "Monitoring the travel schedule, ensuring punctual departures and arrivals of the train."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24544,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów i sytuacji awaryjnych podczas podróży, współpraca z innymi służbami.",
                    "en" => "Solving problems and handling emergencies during the journey, cooperating with other services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24545,
                "name" => json_encode([
                    "pl" => "Koordynowanie obsługi pasażerów, udzielanie informacji o trasie, godzinach odjazdów i innych kwestiach.",
                    "en" => "Coordinating passenger services, providing information on the route, departure times, and other matters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24546,
                "name" => json_encode([
                    "pl" => "Nadzór nad dokumentacją pociągu, raportowanie incydentów i sytuacji awaryjnych do odpowiednich służb.",
                    "en" => "Supervising train documentation, reporting incidents and emergencies to the relevant services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONDUKTOR = [

            [
                "id" => 24547,
                "name" => json_encode([
                    "pl" => "Kontrolowanie biletów pasażerów, zapewnianie prawidłowego i terminowego sprawdzania dokumentów.",
                    "en" => "Checking passengers' tickets, ensuring proper and timely verification of documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24548,
                "name" => json_encode([
                    "pl" => "Informowanie pasażerów o warunkach podróży, trasie oraz godzinach przyjazdu.",
                    "en" => "Informing passengers about travel conditions, the route, and arrival times."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24549,
                "name" => json_encode([
                    "pl" => "Pomoc pasażerom w trakcie wsiadania i wysiadania z pociągu, zapewnienie sprawnej obsługi.",
                    "en" => "Assisting passengers during boarding and alighting, ensuring smooth service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24550,
                "name" => json_encode([
                    "pl" => "Zarządzanie porządkiem w pociągu, kontrolowanie przestrzegania regulaminu przez pasażerów.",
                    "en" => "Managing order on the train, ensuring compliance with the rules by passengers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24551,
                "name" => json_encode([
                    "pl" => "Współpraca z kierownikiem pociągu w kwestiach związanych z bezpieczeństwem i organizacją podróży.",
                    "en" => "Collaborating with the train manager on safety and travel organization matters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24552,
                "name" => json_encode([
                    "pl" => "Dokumentowanie sytuacji awaryjnych i raportowanie do odpowiednich służb.",
                    "en" => "Documenting emergency situations and reporting them to the relevant services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONDUKTOR_KOLEI_LINOWEJ = [

            [
                "id" => 24553,
                "name" => json_encode([
                    "pl" => "Nadzór nad pasażerami korzystającymi z kolei linowej, pomoc przy wsiadaniu i wysiadaniu.",
                    "en" => "Supervising passengers using the cable car, assisting with boarding and alighting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24554,
                "name" => json_encode([
                    "pl" => "Zarządzanie bezpieczeństwem pasażerów podczas korzystania z kolei linowej, kontrolowanie przestrzegania zasad bezpieczeństwa.",
                    "en" => "Managing passenger safety while using the cable car, ensuring compliance with safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24555,
                "name" => json_encode([
                    "pl" => "Informowanie pasażerów o czasie przejazdu, przesiadkach i warunkach podróży.",
                    "en" => "Informing passengers about travel time, transfers, and travel conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24556,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli biletów, obsługa pasażerów w kabinach kolei linowej.",
                    "en" => "Checking tickets, assisting passengers in cable car cabins."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24557,
                "name" => json_encode([
                    "pl" => "Zapewnienie płynności ruchu pasażerów, organizowanie kolejności wsiadania i wysiadania.",
                    "en" => "Ensuring smooth passenger flow, organizing the order of boarding and alighting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24558,
                "name" => json_encode([
                    "pl" => "Współpraca z operatorami kolei linowej w celu zapewnienia bezpiecznej i efektywnej obsługi pasażerów.",
                    "en" => "Collaborating with cable car operators to ensure safe and efficient passenger service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLER_BILETÓW = [

            [
                "id" => 24559,
                "name" => json_encode([
                    "pl" => "Kontrolowanie biletów pasażerów, sprawdzanie dokumentów podróży i zapewnienie zgodności z przepisami.",
                    "en" => "Checking passengers' tickets, verifying travel documents, and ensuring compliance with regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24560,
                "name" => json_encode([
                    "pl" => "Informowanie pasażerów o zasadach podróży, trasach, godzinach odjazdów i przyjazdów.",
                    "en" => "Informing passengers about travel rules, routes, departure and arrival times."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24561,
                "name" => json_encode([
                    "pl" => "Udzielanie pomocy pasażerom w przypadku problemów z biletami lub innymi pytaniami.",
                    "en" => "Assisting passengers with issues related to tickets or other inquiries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24562,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pracownikami transportu w celu zapewnienia płynności ruchu pasażerów.",
                    "en" => "Collaborating with other transport staff to ensure smooth passenger flow."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24563,
                "name" => json_encode([
                    "pl" => "Dokumentowanie i raportowanie incydentów związanych z podróżami pasażerów, w tym nieprawidłowości biletowych.",
                    "en" => "Documenting and reporting incidents related to passenger travel, including ticket irregularities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24564,
                "name" => json_encode([
                    "pl" => "Kontrola przestrzegania regulaminów podróży i zapewnienie bezpieczeństwa pasażerów.",
                    "en" => "Enforcing travel regulations and ensuring passenger safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONWOJENT_KONDUKTOR_WAGONÓW_SPECJALNYCH = [

            [
                "id" => 24565,
                "name" => json_encode([
                    "pl" => "Nadzór nad wagonami specjalnymi, kontrolowanie stanu technicznego i zabezpieczenie ładunków.",
                    "en" => "Supervising special wagons, checking the technical condition, and securing loads."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24566,
                "name" => json_encode([
                    "pl" => "Współpraca z kierownikiem pociągu i innymi służbami w zakresie organizacji transportu materiałów specjalnych.",
                    "en" => "Collaborating with the train manager and other services to organize the transport of special materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24567,
                "name" => json_encode([
                    "pl" => "Kontrolowanie zgodności z przepisami i normami dotyczącymi transportu towarów niebezpiecznych i specjalnych.",
                    "en" => "Monitoring compliance with regulations and standards for the transport of hazardous and special goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24568,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przebiegu transportu wagonów specjalnych, raportowanie nieprawidłowości.",
                    "en" => "Documenting the transport of special wagons, reporting irregularities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24569,
                "name" => json_encode([
                    "pl" => "Zarządzanie bezpieczeństwem ładunków, zabezpieczanie i kontrolowanie właściwego załadunku i rozładunku.",
                    "en" => "Managing the safety of cargo, ensuring proper loading and unloading of goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24570,
                "name" => json_encode([
                    "pl" => "Współpraca z odpowiednimi służbami ratunkowymi w przypadku wystąpienia incydentów związanych z transportem.",
                    "en" => "Collaborating with emergency services in case of incidents related to transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $REWIZOR_POCIĄGÓW = [

            [
                "id" => 24571,
                "name" => json_encode([
                    "pl" => "Kontrolowanie stanu technicznego pociągów przed i w trakcie podróży, zapewnienie bezpieczeństwa pasażerów.",
                    "en" => "Inspecting the technical condition of trains before and during travel, ensuring passenger safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24572,
                "name" => json_encode([
                    "pl" => "Sprawdzanie biletów pasażerów, kontrolowanie zgodności z przepisami i regulacjami transportowymi.",
                    "en" => "Checking passengers' tickets, ensuring compliance with transportation regulations and rules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24573,
                "name" => json_encode([
                    "pl" => "Monitorowanie przestrzegania zasad bezpieczeństwa przez pasażerów i personel pociągu.",
                    "en" => "Monitoring the compliance with safety rules by passengers and train staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24574,
                "name" => json_encode([
                    "pl" => "Dokumentowanie incydentów i nieprawidłowości, raportowanie do odpowiednich służb.",
                    "en" => "Documenting incidents and irregularities, reporting to relevant authorities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24575,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z usuwaniem awarii i problemów technicznych pociągów.",
                    "en" => "Coordinating actions related to fixing malfunctions and technical problems with trains."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24576,
                "name" => json_encode([
                    "pl" => "Współpraca z maszynistą oraz innymi członkami załogi pociągu w celu zapewnienia płynności operacji.",
                    "en" => "Cooperating with the locomotive engineer and other crew members to ensure smooth operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KONDUKTORZY_I_POKREWNI = [

            [
                "id" => 24577,
                "name" => json_encode([
                    "pl" => "Nadzór nad pasażerami, kontrolowanie przestrzegania zasad podróży oraz zapewnienie ich bezpieczeństwa.",
                    "en" => "Supervising passengers, ensuring compliance with travel rules and ensuring their safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24578,
                "name" => json_encode([
                    "pl" => "Sprawdzanie biletów pasażerów, udzielanie informacji o godzinach przyjazdów, trasach i warunkach podróży.",
                    "en" => "Checking passengers' tickets, providing information on arrival times, routes, and travel conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24579,
                "name" => json_encode([
                    "pl" => "Pomoc pasażerom w trakcie wsiadania i wysiadania z pociągu, zapewnianie porządku w wagonach.",
                    "en" => "Assisting passengers during boarding and alighting from the train, maintaining order in the carriages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24580,
                "name" => json_encode([
                    "pl" => "Zarządzanie sytuacjami awaryjnymi, współpraca z personelem ratunkowym w razie potrzeby.",
                    "en" => "Managing emergency situations, cooperating with emergency personnel if needed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24581,
                "name" => json_encode([
                    "pl" => "Kontrolowanie przestrzegania przepisów podróży, zapewnienie komfortu pasażerów.",
                    "en" => "Monitoring the compliance with travel regulations, ensuring passenger comfort."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24582,
                "name" => json_encode([
                    "pl" => "Współpraca z kierownikiem pociągu i innymi członkami załogi w zakresie organizacji transportu pasażerów.",
                    "en" => "Collaborating with the train manager and other crew members to organize passenger transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TOROMISTRZ = [

            [
                "id" => 24583,
                "name" => json_encode([
                    "pl" => "Nadzór nad stanem technicznym torów kolejowych, zapewnianie ich sprawności i bezpieczeństwa.",
                    "en" => "Supervising the technical condition of railway tracks, ensuring their functionality and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24584,
                "name" => json_encode([
                    "pl" => "Kontrolowanie stanu torów i infrastruktury kolejowej, raportowanie usterek i potrzeb konserwacyjnych.",
                    "en" => "Checking the condition of tracks and railway infrastructure, reporting faults and maintenance needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24585,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami konserwacyjnymi w celu przeprowadzania napraw torów i urządzeń kolejowych.",
                    "en" => "Collaborating with maintenance teams to carry out repairs on tracks and railway equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24586,
                "name" => json_encode([
                    "pl" => "Zarządzanie planowaniem i realizowaniem działań związanych z utrzymaniem infrastruktury torowej.",
                    "en" => "Managing the planning and execution of actions related to maintaining track infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24587,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją techniczną torów kolejowych, kontrolowanie zgodności z normami.",
                    "en" => "Managing the technical documentation for railway tracks, ensuring compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24588,
                "name" => json_encode([
                    "pl" => "Nadzór nad pracą personelu utrzymującego tory, koordynowanie działań związanych z remontami torów.",
                    "en" => "Supervising the work of track maintenance personnel, coordinating track repair activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DRÓŻNIK_PRZEJAZDOWY = [

            [
                "id" => 24589,
                "name" => json_encode([
                    "pl" => "Nadzór nad przejazdami kolejowymi, kontrolowanie sygnalizacji świetlnej oraz zabezpieczeń na przejazdach.",
                    "en" => "Supervising railway crossings, controlling traffic lights and safety devices at crossings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24590,
                "name" => json_encode([
                    "pl" => "Kontrolowanie ruchu pojazdów na przejazdach, zarządzanie bezpieczeństwem kierowców i pieszych.",
                    "en" => "Managing vehicle traffic at crossings, ensuring the safety of drivers and pedestrians."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24591,
                "name" => json_encode([
                    "pl" => "Reagowanie na sygnały alarmowe, podejmowanie działań w przypadku awarii sygnalizacji na przejazdach.",
                    "en" => "Responding to alarm signals, taking action in case of signaling malfunctions at crossings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24592,
                "name" => json_encode([
                    "pl" => "Zarządzanie bezpieczeństwem przejazdów kolejowych, w tym kontrolowanie działania rogatk i innych urządzeń ochrony.",
                    "en" => "Managing the safety of railway crossings, including controlling the operation of gates and other protective devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24593,
                "name" => json_encode([
                    "pl" => "Współpraca z dyspozytorami ruchu oraz służbami ratunkowymi w sytuacjach awaryjnych.",
                    "en" => "Cooperating with traffic dispatchers and emergency services in emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24594,
                "name" => json_encode([
                    "pl" => "Dokumentowanie zdarzeń na przejazdach, sporządzanie raportów o awariach i incydentach.",
                    "en" => "Documenting events at crossings, preparing reports on breakdowns and incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DYSPONSTER_RUCHU_METRA = [

            [
                "id" => 24595,
                "name" => json_encode([
                    "pl" => "Zarządzanie ruchem metra, koordynowanie odjazdów i przyjazdów pociągów w obrębie systemu metra.",
                    "en" => "Managing metro traffic, coordinating train departures and arrivals within the metro system."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24596,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu technicznego pociągów metra, reagowanie na incydenty związane z bezpieczeństwem.",
                    "en" => "Monitoring the technical condition of metro trains, responding to safety-related incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24597,
                "name" => json_encode([
                    "pl" => "Zarządzanie i koordynowanie komunikacją z maszynistami oraz innymi członkami załogi metra.",
                    "en" => "Managing and coordinating communication with train drivers and other metro crew members."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24598,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań w przypadku awarii, ewakuacji pasażerów i zapewnianie bezpieczeństwa w tunelach.",
                    "en" => "Coordinating actions in case of breakdowns, evacuations of passengers, and ensuring safety in tunnels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24599,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz ruchu, przygotowywanie raportów o stanie systemu transportowego.",
                    "en" => "Conducting traffic analyses, preparing reports on the state of the transport system."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24600,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją i procedurami operacyjnymi związanymi z ruchem metra.",
                    "en" => "Managing documentation and operational procedures related to metro traffic."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DYŻURNY_RUCHU_I_STACJI_METRA = [

            [
                "id" => 24601,
                "name" => json_encode([
                    "pl" => "Nadzór nad ruchem pociągów metra i organizowaniem pracy na stacji.",
                    "en" => "Supervising metro train traffic and organizing work at the station."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24602,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z ruchem pasażerów oraz udzielanie informacji o odjazdach.",
                    "en" => "Coordinating passenger flow and providing information about departures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24603,
                "name" => json_encode([
                    "pl" => "Kontrolowanie stanu technicznego urządzeń na stacji, nadzorowanie działu utrzymania.",
                    "en" => "Monitoring the technical condition of station equipment, overseeing the maintenance department."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24604,
                "name" => json_encode([
                    "pl" => "Reagowanie na awarie, koordynowanie działań związanych z bezpieczeństwem pasażerów.",
                    "en" => "Responding to breakdowns, coordinating safety actions for passengers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24605,
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności z procedurami bezpieczeństwa i zarządzanie dokumentacją operacyjną.",
                    "en" => "Ensuring compliance with safety procedures and managing operational documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24606,
                "name" => json_encode([
                    "pl" => "Koordynowanie pracy zespołów stacyjnych w celu zapewnienia sprawnego funkcjonowania stacji.",
                    "en" => "Coordinating the work of station teams to ensure smooth station operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DYŻURNY_RUCHU = [

            [
                "id" => 24607,
                "name" => json_encode([
                    "pl" => "Zarządzanie ruchem pociągów i organizowanie pracy na stacji lub w rejonie transportu kolejowego.",
                    "en" => "Managing train traffic and organizing work at the station or within the railway transport area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24608,
                "name" => json_encode([
                    "pl" => "Kontrolowanie zgodności z rozkładami jazdy, monitorowanie przestrzegania norm bezpieczeństwa.",
                    "en" => "Monitoring compliance with schedules, ensuring adherence to safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24609,
                "name" => json_encode([
                    "pl" => "Koordynowanie pracy personelu, nadzorowanie procedur związanych z obsługą pasażerów i towarów.",
                    "en" => "Coordinating staff work, overseeing procedures related to passenger and freight handling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24610,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz sytuacji na torach, zarządzanie nieprzewidzianymi zdarzeniami i problemami.",
                    "en" => "Conducting analyses of track situations, managing unforeseen incidents and issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24611,
                "name" => json_encode([
                    "pl" => "Nadzór nad pracami konserwacyjnymi torów, urządzeń i infrastruktury kolejowej.",
                    "en" => "Supervising maintenance work on tracks, equipment, and railway infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24612,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań w przypadku awarii, wypadków i sytuacji awaryjnych.",
                    "en" => "Coordinating actions in case of malfunctions, accidents, and emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MANEWROWY = [

            [
                "id" => 24613,
                "name" => json_encode([
                    "pl" => "Obsługa manewrów kolejowych, zmiana torów i organizowanie ruchu pojazdów na stacji.",
                    "en" => "Performing railway shunting operations, switching tracks, and organizing vehicle movements at the station."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24614,
                "name" => json_encode([
                    "pl" => "Współpraca z dyżurnym ruchu w zakresie organizowania transportu towarów i pasażerów.",
                    "en" => "Cooperating with the duty officer to organize the transport of goods and passengers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24615,
                "name" => json_encode([
                    "pl" => "Nadzór nad stanem technicznym torów, sprawdzanie sprzętu wykorzystywanego w manewrach.",
                    "en" => "Supervising the condition of tracks, inspecting equipment used for shunting operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24616,
                "name" => json_encode([
                    "pl" => "Wykonywanie czynności związanych z przełączaniem torów, organizowanie transportu na terenie stacji.",
                    "en" => "Performing tasks related to track switching, organizing transport within the station area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24617,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa przy wykonywaniu manewrów kolejowych, przestrzeganie zasad BHP.",
                    "en" => "Ensuring safety during shunting operations, adhering to health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24618,
                "name" => json_encode([
                    "pl" => "Dokumentowanie i raportowanie wykonanych manewrów, monitorowanie terminów i operacji.",
                    "en" => "Documenting and reporting performed shunting operations, monitoring timelines and operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MANEWROWY_METRA = [

            [
                "id" => 24619,
                "name" => json_encode([
                    "pl" => "Obsługa manewrów metra, organizowanie transportu materiałów i pasażerów w systemie metra.",
                    "en" => "Performing metro shunting operations, organizing the transport of materials and passengers within the metro system."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24620,
                "name" => json_encode([
                    "pl" => "Kontrolowanie ruchu pojazdów na torach metra, koordynowanie pracy z maszynistami.",
                    "en" => "Controlling the movement of vehicles on metro tracks, coordinating work with train operators."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24621,
                "name" => json_encode([
                    "pl" => "Nadzór nad stanem technicznym torów metra, zapewnienie prawidłowego działania systemu transportu.",
                    "en" => "Supervising the technical condition of metro tracks, ensuring the proper functioning of the transport system."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24622,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami operacyjnymi metra w celu optymalizacji transportu materiałów i pasażerów.",
                    "en" => "Cooperating with metro operational teams to optimize the transportation of materials and passengers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24623,
                "name" => json_encode([
                    "pl" => "Wykonywanie czynności związanych z przełączaniem torów, organizowanie transportu na terenie stacji metra.",
                    "en" => "Performing track switching tasks, organizing transport within the metro station."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24624,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa przy przeprowadzaniu manewrów w systemie metra, przestrzeganie norm BHP.",
                    "en" => "Ensuring safety during shunting operations in the metro system, adhering to health and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $NASTAWNICZY = [

            [
                "id" => 24625,
                "name" => json_encode([
                    "pl" => "Obsługa nastawni kolejowej, zarządzanie ruchem pociągów, ustawianie semaforów i zwrotnic.",
                    "en" => "Operating the railway signal box, managing train traffic, setting signals and switches."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24626,
                "name" => json_encode([
                    "pl" => "Monitorowanie ruchu pociągów, kontrolowanie sygnalizacji i zapewnienie płynności ruchu na torach.",
                    "en" => "Monitoring train traffic, controlling signals, and ensuring the smooth flow of traffic on tracks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24627,
                "name" => json_encode([
                    "pl" => "Reagowanie na awarie sygnalizacji, szybkie podejmowanie działań w przypadku sytuacji awaryjnych.",
                    "en" => "Responding to signal malfunctions, taking quick actions in emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24628,
                "name" => json_encode([
                    "pl" => "Dokumentowanie operacji nastawczych, kontrolowanie zgodności z normami i przepisami kolejowymi.",
                    "en" => "Documenting signaling operations, ensuring compliance with railway norms and regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24629,
                "name" => json_encode([
                    "pl" => "Współpraca z dyspozytorami ruchu i innymi służbami w celu zapewnienia bezpieczeństwa na torach.",
                    "en" => "Cooperating with traffic dispatchers and other services to ensure safety on the tracks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24630,
                "name" => json_encode([
                    "pl" => "Kontrola stanu technicznego urządzeń nastawczych i sygnalizacyjnych, raportowanie awarii.",
                    "en" => "Inspecting the technical condition of signaling and switching devices, reporting malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_POCIĄGOWY = [

            [
                "id" => 24631,
                "name" => json_encode([
                    "pl" => "Obsługa pociągów towarowych i pasażerskich, wykonywanie manewrów na stacjach.",
                    "en" => "Operating freight and passenger trains, performing shunting operations at stations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24632,
                "name" => json_encode([
                    "pl" => "Kontrolowanie prędkości pociągu, przestrzeganie rozkładów jazdy i sygnalizacji.",
                    "en" => "Controlling train speed, adhering to schedules and signals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24633,
                "name" => json_encode([
                    "pl" => "Nadzór nad bezpieczeństwem pasażerów i ładunków podczas podróży.",
                    "en" => "Supervising the safety of passengers and cargo during the journey."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24634,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje awaryjne i incydenty na torach, informowanie dyspozytora.",
                    "en" => "Responding to emergency situations and incidents on the tracks, informing the dispatcher."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24635,
                "name" => json_encode([
                    "pl" => "Koordynowanie pracy maszynisty, współpraca z personelem obsługi pociągu.",
                    "en" => "Coordinating the locomotive engineer's work, collaborating with the train service staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24636,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej ruchu pociągów, raportowanie o sytuacjach kryzysowych.",
                    "en" => "Maintaining documentation related to train operations, reporting critical situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $REWIDENT_TABORU = [

            [
                "id" => 24637,
                "name" => json_encode([
                    "pl" => "Kontrolowanie stanu technicznego taboru kolejowego, nadzorowanie konserwacji i napraw.",
                    "en" => "Inspecting the technical condition of railway rolling stock, overseeing maintenance and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24638,
                "name" => json_encode([
                    "pl" => "Sprawdzanie dokumentacji technicznej taboru, zapewnienie zgodności z normami bezpieczeństwa.",
                    "en" => "Checking the technical documentation of rolling stock, ensuring compliance with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24639,
                "name" => json_encode([
                    "pl" => "Wykonywanie inspekcji taboru, testowanie urządzeń technicznych w pociągach.",
                    "en" => "Performing rolling stock inspections, testing technical devices in trains."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24640,
                "name" => json_encode([
                    "pl" => "Monitorowanie cyklu eksploatacji taboru, zapewnienie odpowiednich warunków przechowywania.",
                    "en" => "Monitoring the service life of rolling stock, ensuring proper storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24641,
                "name" => json_encode([
                    "pl" => "Raportowanie o stanie technicznym taboru, współpraca z działem konserwacji.",
                    "en" => "Reporting the technical condition of rolling stock, collaborating with the maintenance department."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24642,
                "name" => json_encode([
                    "pl" => "Zarządzanie wymianą komponentów taboru, planowanie prac konserwacyjnych.",
                    "en" => "Managing the replacement of rolling stock components, planning maintenance work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $USTAWIACZ = [

            [
                "id" => 24643,
                "name" => json_encode([
                    "pl" => "Ustawianie torów i urządzeń kolejowych w celu umożliwienia przejazdu pociągów.",
                    "en" => "Setting tracks and railway devices to allow trains to pass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24644,
                "name" => json_encode([
                    "pl" => "Koordynowanie pracy związanej z ustawianiem torów, kontrolowanie bezpieczeństwa operacji.",
                    "en" => "Coordinating work related to track setting, ensuring the safety of operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24645,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem konserwacyjnym w zakresie napraw i wymiany torów.",
                    "en" => "Collaborating with the maintenance team for track repairs and replacement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24646,
                "name" => json_encode([
                    "pl" => "Sprawdzanie stanu technicznego urządzeń ustawiających, zgłaszanie usterek do naprawy.",
                    "en" => "Inspecting the condition of setting devices, reporting faults for repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24647,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów i inspekcji torów, zapewnienie ich zgodności z normami technicznymi.",
                    "en" => "Conducting tests and inspections of tracks, ensuring compliance with technical standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24648,
                "name" => json_encode([
                    "pl" => "Zarządzanie harmonogramem ustawiania torów, współpraca z innymi służbami transportu.",
                    "en" => "Managing the track setting schedule, collaborating with other transport services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ZWROTNICZY = [

            [
                "id" => 24649,
                "name" => json_encode([
                    "pl" => "Obsługa zwrotnic kolejowych, ustawianie torów w celu umożliwienia przejazdu pociągów.",
                    "en" => "Operating railway switches, setting tracks to allow trains to pass."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24650,
                "name" => json_encode([
                    "pl" => "Kontrolowanie stanu technicznego zwrotnic, monitorowanie ich działania i sprawności.",
                    "en" => "Monitoring the technical condition of switches, ensuring their proper operation and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24651,
                "name" => json_encode([
                    "pl" => "Współpraca z dyżurnym ruchu w zakresie zapewnienia bezpiecznego przejazdu pociągów.",
                    "en" => "Cooperating with the traffic dispatcher to ensure safe train operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24652,
                "name" => json_encode([
                    "pl" => "Wykonywanie czynności związanych z kontrolowaniem poprawności ustawienia torów.",
                    "en" => "Performing tasks related to checking the correct positioning of tracks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24653,
                "name" => json_encode([
                    "pl" => "Dokumentowanie ustawień torów, zgłaszanie nieprawidłowości do działu konserwacji.",
                    "en" => "Documenting track settings, reporting irregularities to the maintenance department."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24654,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi członkami zespołu w celu zapewnienia ciągłości ruchu na torach.",
                    "en" => "Collaborating with other team members to ensure the continuity of train movements on tracks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DYSPONENT_RUCHU_KOLEJOWEGO = [

            [
                "id" => 24655,
                "name" => json_encode([
                    "pl" => "Zarządzanie i nadzorowanie ruchu kolejowego, planowanie tras i godzin odjazdów pociągów.",
                    "en" => "Managing and supervising railway traffic, planning routes and train departure times."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24656,
                "name" => json_encode([
                    "pl" => "Koordynowanie pracy maszynistów oraz obsługi pociągów, zapewnienie bezpieczeństwa ruchu.",
                    "en" => "Coordinating the work of locomotive engineers and train service staff, ensuring traffic safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24657,
                "name" => json_encode([
                    "pl" => "Monitorowanie sygnalizacji kolejowej, kontrolowanie parametrów ruchu pociągów.",
                    "en" => "Monitoring railway signaling, controlling train movement parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24658,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz operacyjnych w celu optymalizacji ruchu pociągów.",
                    "en" => "Conducting operational analyses to optimize train movements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24659,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi służbami transportu kolejowego w celu utrzymania płynności ruchu.",
                    "en" => "Cooperating with other railway services to maintain the smooth flow of traffic."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24660,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją operacyjną, raportowanie o sytuacjach awaryjnych i opóźnieniach.",
                    "en" => "Managing operational documentation, reporting emergency situations and delays."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_DYŻURNI_RUCHU_MANEWROWI_I_POKREWNI = [

            [
                "id" => 24661,
                "name" => json_encode([
                    "pl" => "Koordynowanie ruchu pociągów w obrębie stacji lub w rejonie manewrów kolejowych.",
                    "en" => "Coordinating train traffic within the station or in the shunting area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24662,
                "name" => json_encode([
                    "pl" => "Kontrolowanie przejazdu pociągów, zarządzanie zwrotnicami i sygnalizacją.",
                    "en" => "Controlling train passage, managing switches and signals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24663,
                "name" => json_encode([
                    "pl" => "Wykonywanie manewrów na torach, zmiana torów i ustawienie semaforów w zależności od sytuacji.",
                    "en" => "Performing shunting operations, switching tracks, and setting signals based on the situation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24664,
                "name" => json_encode([
                    "pl" => "Nadzór nad bezpieczeństwem pociągów i pracowników, przestrzeganie norm bezpieczeństwa.",
                    "en" => "Supervising train and staff safety, adhering to safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24665,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi członkami personelu, reagowanie na awarie oraz sytuacje kryzysowe.",
                    "en" => "Cooperating with other staff members, responding to malfunctions and emergencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24666,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją operacyjną, raportowanie sytuacji awaryjnych i działań naprawczych.",
                    "en" => "Managing operational documentation, reporting emergency situations and corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_AUTOMATYK_STEROWANIA_RUCHEM_KOLEJOWYM = [

            [
                "id" => 24667,
                "name" => json_encode([
                    "pl" => "Projektowanie, montowanie i konserwacja systemów automatyki sterowania ruchem kolejowym.",
                    "en" => "Designing, installing, and maintaining railway traffic control automation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24668,
                "name" => json_encode([
                    "pl" => "Nadzór nad prawidłowym funkcjonowaniem systemów sterowania ruchem, przeprowadzanie testów.",
                    "en" => "Supervising the proper functioning of traffic control systems, conducting tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24669,
                "name" => json_encode([
                    "pl" => "Analiza i diagnozowanie usterek w systemach sterowania, usuwanie awarii.",
                    "en" => "Analyzing and diagnosing faults in control systems, troubleshooting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24670,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem inżynierów w zakresie optymalizacji systemów sterowania ruchem kolejowym.",
                    "en" => "Collaborating with engineering teams to optimize railway traffic control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24671,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szkoleń dla personelu odpowiedzialnego za obsługę systemów sterowania ruchem.",
                    "en" => "Conducting training for staff responsible for operating traffic control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24672,
                "name" => json_encode([
                    "pl" => "Utrzymywanie dokumentacji technicznej systemów sterowania ruchem kolejowym, raportowanie awarii.",
                    "en" => "Maintaining technical documentation of railway traffic control systems, reporting faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DIAGNOSTA_KOLEJOWY = [

            [
                "id" => 24673,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie diagnostyki taboru kolejowego, kontrolowanie stanu technicznego pociągów.",
                    "en" => "Performing diagnostics on railway rolling stock, inspecting the technical condition of trains."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24674,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu technicznego infrastruktury kolejowej, reagowanie na problemy związane z awariami.",
                    "en" => "Monitoring the technical condition of railway infrastructure, responding to issues related to malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24675,
                "name" => json_encode([
                    "pl" => "Wykonywanie przeglądów technicznych pociągów, dokumentowanie wykrytych usterek.",
                    "en" => "Performing technical inspections of trains, documenting detected faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24676,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem technicznym w celu przeprowadzania napraw i konserwacji pociągów.",
                    "en" => "Cooperating with the technical team to carry out repairs and maintenance of trains."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24677,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z naprawami i konserwacją urządzeń oraz pociągów.",
                    "en" => "Coordinating actions related to repairs and maintenance of equipment and trains."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24678,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów technicznych po naprawach, sprawdzanie poprawności działania systemów pociągu.",
                    "en" => "Conducting technical tests after repairs, verifying the correct operation of train systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_TRANSPORTU_KOLEJOWEGO = [

            [
                "id" => 24679,
                "name" => json_encode([
                    "pl" => "Nadzór nad procesem transportu kolejowego, zapewnienie bezpieczeństwa i zgodności z rozkładami jazdy.",
                    "en" => "Supervising the railway transport process, ensuring safety and compliance with timetables."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24680,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z przygotowaniem taboru kolejowego do eksploatacji.",
                    "en" => "Coordinating activities related to preparing rolling stock for operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24681,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją dotyczącą transportu, monitorowanie ruchu pociągów na torach.",
                    "en" => "Managing documentation related to transport, monitoring train movements on tracks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24682,
                "name" => json_encode([
                    "pl" => "Współpraca z dyspozytorami w zakresie koordynowania ruchu pociągów i utrzymania infrastruktury.",
                    "en" => "Collaborating with dispatchers to coordinate train traffic and maintain infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24683,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji technicznych torów, urządzeń i infrastruktury kolejowej.",
                    "en" => "Performing technical inspections of tracks, equipment, and railway infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24684,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem technicznym w celu diagnozowania problemów związanych z transportem kolejowym.",
                    "en" => "Collaborating with the technical team to diagnose issues related to railway transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ODPRAWIACZ_POCIĄGÓW = [

            [
                "id" => 24685,
                "name" => json_encode([
                    "pl" => "Sprawdzanie dokumentów podróży, odprawianie pociągów przed wyjazdem z dworca.",
                    "en" => "Checking travel documents, dispatching trains before departure from the station."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24686,
                "name" => json_encode([
                    "pl" => "Koordynowanie odjazdów pociągów, współpraca z innymi służbami transportowymi.",
                    "en" => "Coordinating train departures, collaborating with other transport services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24687,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu technicznego pociągów przed odprawą, sprawdzanie stanu dokumentów.",
                    "en" => "Monitoring the technical condition of trains before dispatch, checking the status of documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24688,
                "name" => json_encode([
                    "pl" => "Zarządzanie ruchem pociągów na stacji, kontrolowanie przydzielania torów dla pociągów.",
                    "en" => "Managing train movements at the station, controlling track assignments for trains."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24689,
                "name" => json_encode([
                    "pl" => "Kontrolowanie przestrzegania norm bezpieczeństwa przez załogę pociągu i personel stacji.",
                    "en" => "Ensuring compliance with safety standards by the train crew and station personnel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24690,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie odprawy pociągów w sytuacjach kryzysowych, zarządzanie procedurami awaryjnymi.",
                    "en" => "Conducting train dispatches in emergency situations, managing emergency procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONSTRUKTOR_ROZKŁADÓW_JAZDY = [

            [
                "id" => 24691,
                "name" => json_encode([
                    "pl" => "Tworzenie, opracowywanie i aktualizacja rozkładów jazdy pociągów.",
                    "en" => "Creating, developing, and updating train timetables."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24692,
                "name" => json_encode([
                    "pl" => "Analiza przepustowości torów oraz zapotrzebowania na transport kolejowy w celu optymalizacji rozkładu.",
                    "en" => "Analyzing track capacity and railway transport demand to optimize the timetable."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24693,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w celu dopasowania rozkładu jazdy do potrzeb pasażerów i towarów.",
                    "en" => "Collaborating with other departments to align the timetable with passenger and freight needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24694,
                "name" => json_encode([
                    "pl" => "Ustalanie priorytetów dla pociągów, uwzględniając awarie i sytuacje nadzwyczajne.",
                    "en" => "Setting priorities for trains, considering breakdowns and extraordinary situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24695,
                "name" => json_encode([
                    "pl" => "Monitorowanie przestrzegania rozkładu jazdy oraz wprowadzanie korekt w przypadku opóźnień.",
                    "en" => "Monitoring adherence to the timetable and making adjustments in case of delays."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24696,
                "name" => json_encode([
                    "pl" => "Zarządzanie danymi operacyjnymi w systemach komputerowych w celu opracowania skutecznych rozkładów jazdy.",
                    "en" => "Managing operational data in computer systems to develop effective timetables."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DRÓŻNIK_OBCHODOWY = [

            [
                "id" => 24697,
                "name" => json_encode([
                    "pl" => "Obchodzenie torów i urządzeń kolejowych, monitorowanie stanu technicznego infrastruktury.",
                    "en" => "Patrolling tracks and railway equipment, monitoring the technical condition of infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24698,
                "name" => json_encode([
                    "pl" => "Wykonywanie kontroli bezpieczeństwa torów, sygnalizacji i urządzeń zabezpieczających.",
                    "en" => "Performing safety checks on tracks, signaling, and safety devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24699,
                "name" => json_encode([
                    "pl" => "Dokumentowanie usterek i nieprawidłowości, zgłaszanie ich do odpowiednich służb konserwacyjnych.",
                    "en" => "Documenting faults and irregularities, reporting them to the relevant maintenance services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24700,
                "name" => json_encode([
                    "pl" => "Kontrolowanie stanu technicznego urządzeń zabezpieczających, monitorowanie ich pracy.",
                    "en" => "Checking the technical condition of safety devices, monitoring their operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24701,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje awaryjne, natychmiastowe podejmowanie działań w przypadku zagrożenia.",
                    "en" => "Responding to emergency situations, taking immediate action in case of threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24702,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku na torach, zapewnienie przestrzegania zasad BHP przez personel.",
                    "en" => "Maintaining order on tracks, ensuring health and safety rules are followed by staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $AUTOMATYK_STEROWANIA_RUCHEM_KOLEJOWYM = [

            [
                "id" => 24703,
                "name" => json_encode([
                    "pl" => "Projektowanie, instalacja i konserwacja systemów automatyki sterowania ruchem kolejowym.",
                    "en" => "Designing, installing, and maintaining railway traffic control automation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24704,
                "name" => json_encode([
                    "pl" => "Monitorowanie i kontrolowanie działania systemów sterowania ruchem pociągów.",
                    "en" => "Monitoring and controlling the operation of train traffic control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24705,
                "name" => json_encode([
                    "pl" => "Diagnostyka awarii systemów sterowania, analiza danych i identyfikowanie przyczyn usterek.",
                    "en" => "Diagnosing system failures, analyzing data, and identifying the root causes of malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24706,
                "name" => json_encode([
                    "pl" => "Testowanie nowych technologii automatyki sterowania, wdrażanie usprawnień w systemach.",
                    "en" => "Testing new automation technologies, implementing improvements in control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24707,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań z innymi służbami technicznymi w celu utrzymania i naprawy systemów.",
                    "en" => "Coordinating activities with other technical services to maintain and repair systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24708,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją techniczną systemów sterowania ruchem oraz aktualizowanie procedur.",
                    "en" => "Managing technical documentation of control systems and updating procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POMOCNICZY_ROBOTNIK_TOROWY = [

            [
                "id" => 24709,
                "name" => json_encode([
                    "pl" => "Pomoc w pracach związanych z budową i konserwacją torów kolejowych.",
                    "en" => "Assisting with the construction and maintenance of railway tracks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24710,
                "name" => json_encode([
                    "pl" => "Przygotowanie i transportowanie materiałów potrzebnych do naprawy i budowy torów.",
                    "en" => "Preparing and transporting materials needed for track repairs and construction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24711,
                "name" => json_encode([
                    "pl" => "Pomoc w demontażu i montażu torów oraz innych elementów infrastruktury kolejowej.",
                    "en" => "Assisting in the dismantling and assembling of tracks and other railway infrastructure elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24712,
                "name" => json_encode([
                    "pl" => "Pomoc w inspekcji stanu technicznego torów, urządzeń i infrastruktury kolejowej.",
                    "en" => "Assisting in inspecting the technical condition of tracks, devices, and railway infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24713,
                "name" => json_encode([
                    "pl" => "Pomoc w naprawach i konserwacji torów, usuwanie zniszczeń i awarii.",
                    "en" => "Assisting in repairs and maintenance of tracks, removing damage and malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24714,
                "name" => json_encode([
                    "pl" => "Wykonywanie prostych prac związanych z utrzymaniem porządku na torach i wokół nich.",
                    "en" => "Performing simple tasks related to maintaining cleanliness on and around the tracks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWCA_DREZYNY_I_WÓZKA_MOTOROWEGO = [

            [
                "id" => 24715,
                "name" => json_encode([
                    "pl" => "Prowadzenie drezyny lub wózka motorowego w celu wykonywania prac torowych, konserwacyjnych oraz transportu na torach.",
                    "en" => "Operating the railcar or motorized trolley for track maintenance work, repairs, and transportation on tracks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24716,
                "name" => json_encode([
                    "pl" => "Wykonywanie manewrów drezyną lub wózkiem motorowym, w tym zmiana torów i przeprowadzanie testów.",
                    "en" => "Performing shunting operations with the railcar or motorized trolley, including track switching and tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24717,
                "name" => json_encode([
                    "pl" => "Kontrolowanie stanu technicznego pojazdu, wykonywanie prostych napraw i konserwacji.",
                    "en" => "Monitoring the technical condition of the vehicle, performing basic repairs and maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24718,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przejazdów, w tym raportowanie o przebiegu pracy drezyny oraz wszelkich nieprawidłowościach.",
                    "en" => "Documenting trips, including reporting on railcar operations and any irregularities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24719,
                "name" => json_encode([
                    "pl" => "Koordynowanie pracy z zespołem konserwacyjnym i innymi służbami w zakresie transportu materiałów i narzędzi.",
                    "en" => "Coordinating work with the maintenance team and other services for transporting materials and tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24720,
                "name" => json_encode([
                    "pl" => "Zarządzanie bezpieczeństwem i zgodnością z przepisami podczas operacji związanych z drezyną i wózkiem motorowym.",
                    "en" => "Managing safety and compliance with regulations during operations involving the railcar and motorized trolley."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWCA_LOKOMOTYWY_SPALINOWEJ = [

            [
                "id" => 24721,
                "name" => json_encode([
                    "pl" => "Prowadzenie lokomotywy spalinowej, kontrolowanie jej parametrów technicznych oraz zapewnienie bezpieczeństwa przewozu.",
                    "en" => "Operating the diesel locomotive, controlling its technical parameters, and ensuring the safety of transportation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24722,
                "name" => json_encode([
                    "pl" => "Przestrzeganie rozkładów jazdy, koordynowanie tras pociągów i reagowanie na sytuacje awaryjne.",
                    "en" => "Adhering to schedules, coordinating train routes, and responding to emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24723,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu technicznego lokomotywy spalinowej, w tym poziomu paliwa, ciśnienia oraz temperatury.",
                    "en" => "Monitoring the technical condition of the diesel locomotive, including fuel levels, pressure, and temperature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24724,
                "name" => json_encode([
                    "pl" => "Współpraca z dyspozytorami i innymi członkami załogi w celu płynnego i bezpiecznego prowadzenia pociągu.",
                    "en" => "Collaborating with dispatchers and other crew members for smooth and safe train operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24725,
                "name" => json_encode([
                    "pl" => "Reagowanie na sygnały awaryjne i sytuacje kryzysowe, zapewnianie bezpieczeństwa pasażerów i ładunków.",
                    "en" => "Responding to emergency signals and crisis situations, ensuring the safety of passengers and cargo."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24726,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją operacyjną pociągów, raportowanie problemów technicznych i sytuacji nadzwyczajnych.",
                    "en" => "Managing operational documentation for trains, reporting technical problems and extraordinary situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MASZYNISTA_POCIĄGU_METRA = [

            [
                "id" => 24727,
                "name" => json_encode([
                    "pl" => "Prowadzenie pociągów metra, zapewnienie bezpiecznego i punktualnego transportu pasażerów.",
                    "en" => "Operating metro trains, ensuring safe and punctual transportation of passengers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24728,
                "name" => json_encode([
                    "pl" => "Kontrolowanie parametrów technicznych pociągu metra, monitorowanie poziomu energii, prędkości i hamulców.",
                    "en" => "Monitoring the technical parameters of the metro train, controlling power levels, speed, and brakes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24729,
                "name" => json_encode([
                    "pl" => "Przestrzeganie rozkładu jazdy, zarządzanie ruchem w tunelach i na stacjach metra.",
                    "en" => "Adhering to the timetable, managing train movements in tunnels and at metro stations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24730,
                "name" => json_encode([
                    "pl" => "Reagowanie na sygnały alarmowe, sytuacje awaryjne i podejmowanie działań w przypadku nieprawidłowości.",
                    "en" => "Responding to alarm signals, emergency situations, and taking actions in case of irregularities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24731,
                "name" => json_encode([
                    "pl" => "Koordynowanie pracy z innymi członkami załogi w celu zapewnienia bezpieczeństwa i komfortu pasażerów.",
                    "en" => "Coordinating work with other crew members to ensure passenger safety and comfort."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24732,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją operacyjną pociągów metra, raportowanie awarii i opóźnień.",
                    "en" => "Managing operational documentation for metro trains, reporting malfunctions and delays."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MASZYNISTA = [

            [
                "id" => 24733,
                "name" => json_encode([
                    "pl" => "Prowadzenie pociągu pasażerskiego lub towarowego, kontrolowanie stanu technicznego pojazdu.",
                    "en" => "Operating passenger or freight trains, monitoring the technical condition of the vehicle."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24734,
                "name" => json_encode([
                    "pl" => "Zarządzanie prędkością pociągu, kontrolowanie sygnalizacji i przestrzeganie zasad bezpieczeństwa.",
                    "en" => "Managing train speed, controlling signaling, and adhering to safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24735,
                "name" => json_encode([
                    "pl" => "Reagowanie na nieprzewidziane sytuacje na torach, natychmiastowe podejmowanie działań w przypadku awarii.",
                    "en" => "Responding to unforeseen situations on the tracks, taking immediate action in case of a breakdown."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24736,
                "name" => json_encode([
                    "pl" => "Współpraca z dyspozytorami i członkami załogi w celu zapewnienia bezpiecznego ruchu pociągu.",
                    "en" => "Cooperating with dispatchers and crew members to ensure safe train operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24737,
                "name" => json_encode([
                    "pl" => "Kontrolowanie przebiegu podróży, utrzymywanie zgodności z rozkładem jazdy.",
                    "en" => "Monitoring the journey progress, ensuring compliance with the timetable."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24738,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją operacyjną pociągu, raportowanie wszelkich nieprawidłowości i opóźnień.",
                    "en" => "Managing train operational documentation, reporting any irregularities and delays."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MASZYNISTA_POMOCNICZYCH_POJAZDÓW_KOLEJOWYCH_METRA = [

            [
                "id" => 24739,
                "name" => json_encode([
                    "pl" => "Prowadzenie pomocniczych pojazdów kolejowych metra, monitorowanie ich stanu technicznego i bezpieczeństwa.",
                    "en" => "Operating auxiliary metro railway vehicles, monitoring their technical condition and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24740,
                "name" => json_encode([
                    "pl" => "Koordynowanie manewrów pomocniczymi pojazdami w obrębie stacji metra i torów pomocniczych.",
                    "en" => "Coordinating shunting operations of auxiliary vehicles within metro stations and auxiliary tracks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24741,
                "name" => json_encode([
                    "pl" => "Wykonywanie inspekcji technicznych pomocniczych pojazdów, zapewnienie ich gotowości do pracy.",
                    "en" => "Performing technical inspections of auxiliary vehicles, ensuring their readiness for operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24742,
                "name" => json_encode([
                    "pl" => "Reagowanie na wszelkie awarie pomocniczych pojazdów metra, zgłaszanie problemów do odpowiednich służb.",
                    "en" => "Responding to any breakdowns of auxiliary metro vehicles, reporting issues to relevant services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24743,
                "name" => json_encode([
                    "pl" => "Współpraca z dyspozytorami i innymi członkami załogi w zakresie koordynowania transportu materiałów i narzędzi.",
                    "en" => "Collaborating with dispatchers and other crew members to coordinate the transport of materials and tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24744,
                "name" => json_encode([
                    "pl" => "Dokumentowanie działań związanych z użyciem pojazdów pomocniczych, raportowanie o awariach i incydentach.",
                    "en" => "Documenting actions related to the use of auxiliary vehicles, reporting breakdowns and incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROWADZĄCY_MASZYNY_DO_KOLEJOWYCH_ROBOT_BUDOWLANYCH = [

            [
                "id" => 24745,
                "name" => json_encode([
                    "pl" => "Prowadzenie maszyn wykorzystywanych w pracach budowlanych na torach, takich jak koparki, spycharki i wózki robocze.",
                    "en" => "Operating machines used in track construction work, such as excavators, bulldozers, and work trolleys."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24746,
                "name" => json_encode([
                    "pl" => "Zarządzanie pracami maszyn budowlanych, nadzorowanie przygotowania terenu i wykopów na torach.",
                    "en" => "Managing construction machinery operations, overseeing site preparation and excavation for tracks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24747,
                "name" => json_encode([
                    "pl" => "Koordynowanie prac związanych z wymianą nawierzchni torów, naprawą i modernizacją infrastruktury kolejowej.",
                    "en" => "Coordinating work related to track replacement, repair, and modernization of railway infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24748,
                "name" => json_encode([
                    "pl" => "Nadzór nad prawidłowym działaniem maszyn budowlanych, monitorowanie ich stanu technicznego.",
                    "en" => "Supervising the proper operation of construction machinery, monitoring its technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24749,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem robót budowlanych w zakresie planowania i koordynowania działań na torach.",
                    "en" => "Cooperating with the construction team in planning and coordinating actions on the tracks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24750,
                "name" => json_encode([
                    "pl" => "Dokumentowanie pracy maszyn budowlanych, raportowanie awarii i wszelkich incydentów.",
                    "en" => "Documenting construction machinery work, reporting breakdowns and any incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_MASZYNIŚCI_KOLEJOWI_I_METRA = [

            [
                "id" => 24751,
                "name" => json_encode([
                    "pl" => "Prowadzenie pociągów pasażerskich, towarowych oraz innych maszyn kolejowych na terenie stacji.",
                    "en" => "Operating passenger, freight, and other railway machines within the station area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24752,
                "name" => json_encode([
                    "pl" => "Koordynowanie pracy z maszynistami i innymi pracownikami załogi w celu zapewnienia płynności ruchu.",
                    "en" => "Coordinating work with train operators and other crew members to ensure smooth traffic flow."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24753,
                "name" => json_encode([
                    "pl" => "Kontrolowanie parametrów technicznych maszyn, takich jak poziom paliwa, prędkość i ciśnienie.",
                    "en" => "Monitoring the technical parameters of machines, such as fuel levels, speed, and pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24754,
                "name" => json_encode([
                    "pl" => "Reagowanie na wszelkie awarie i sytuacje kryzysowe związane z maszynami kolejowymi.",
                    "en" => "Responding to any malfunctions and crisis situations related to railway machines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24755,
                "name" => json_encode([
                    "pl" => "Dokumentowanie pracy maszyn kolejowych, raportowanie wszelkich usterek i incydentów na trasie.",
                    "en" => "Documenting the operation of railway machines, reporting any faults and incidents on the route."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24756,
                "name" => json_encode([
                    "pl" => "Zarządzanie i koordynowanie pracą zespołu operacyjnego maszyn kolejowych, kontrolowanie postępu pracy.",
                    "en" => "Managing and coordinating the work of the railway machinery operation team, controlling work progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MECHANIK_STATKOWY_ZEGLUGI_SRODLADOWEJ = [

            [
                "id" => 24757,
                "name" => json_encode([
                    "pl" => "Prowadzenie konserwacji i naprawy maszyn oraz urządzeń na statkach żeglugi śródlądowej.",
                    "en" => "Conducting maintenance and repairs of machines and equipment on inland waterway vessels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24758,
                "name" => json_encode([
                    "pl" => "Nadzór nad pracą silników oraz innych urządzeń mechanicznych statków, zapewnienie ich sprawności.",
                    "en" => "Supervising the operation of engines and other mechanical equipment on vessels, ensuring their functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24759,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji technicznych maszyn i urządzeń mechanicznych statków.",
                    "en" => "Performing technical inspections of machinery and mechanical equipment on vessels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24760,
                "name" => json_encode([
                    "pl" => "Reagowanie na awarie silników i innych urządzeń mechanicznych, dokonywanie napraw na pokładzie.",
                    "en" => "Responding to engine and equipment malfunctions, carrying out repairs on board."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24761,
                "name" => json_encode([
                    "pl" => "Współpraca z kapitanem i załogą statku w celu zapewnienia bezpieczeństwa i sprawności operacyjnej.",
                    "en" => "Cooperating with the captain and crew to ensure operational safety and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24762,
                "name" => json_encode([
                    "pl" => "Utrzymywanie dokumentacji technicznej urządzeń mechanicznych statku, raportowanie awarii i napraw.",
                    "en" => "Maintaining technical documentation of the vessel's mechanical equipment, reporting faults and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OFICER_AUTOMATYK_OKRETOWY = [

            [
                "id" => 24763,
                "name" => json_encode([
                    "pl" => "Nadzór i konserwacja systemów automatyki na okręcie, zapewnienie sprawności urządzeń sterujących.",
                    "en" => "Supervising and maintaining automation systems on the vessel, ensuring the proper operation of control devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24764,
                "name" => json_encode([
                    "pl" => "Zarządzanie systemami sterowania i monitorowania pracy okrętu, reagowanie na awarie i nieprawidłowości.",
                    "en" => "Managing the control and monitoring systems of the vessel, responding to malfunctions and irregularities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24765,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów i inspekcji systemów automatyki, zarządzanie ich konserwacją.",
                    "en" => "Performing tests and inspections of automation systems, managing their maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24766,
                "name" => json_encode([
                    "pl" => "Koordynowanie pracy zespołu w zakresie monitorowania działania systemów automatyki okrętowej.",
                    "en" => "Coordinating the team's work in monitoring the operation of ship automation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24767,
                "name" => json_encode([
                    "pl" => "Utrzymywanie dokumentacji technicznej systemów automatyki okrętowej, raportowanie awarii.",
                    "en" => "Maintaining technical documentation of ship automation systems, reporting malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24768,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami na okręcie w zakresie optymalizacji i rozwoju systemów automatyki.",
                    "en" => "Collaborating with other departments on the vessel to optimize and develop automation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OFICER_MECHANIK = [

            [
                "id" => 24769,
                "name" => json_encode([
                    "pl" => "Zarządzanie pracą mechaników na okręcie, nadzór nad systemami napędowymi i maszynami okrętowymi.",
                    "en" => "Managing the work of mechanics on the ship, supervising propulsion systems and ship machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24770,
                "name" => json_encode([
                    "pl" => "Koordynowanie konserwacji, naprawy i modernizacji maszyn okrętowych, dbanie o ich sprawność.",
                    "en" => "Coordinating maintenance, repairs, and modernization of ship machinery, ensuring its functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24771,
                "name" => json_encode([
                    "pl" => "Wykonywanie inspekcji technicznych silników okrętowych oraz urządzeń pomocniczych.",
                    "en" => "Performing technical inspections of ship engines and auxiliary equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24772,
                "name" => json_encode([
                    "pl" => "Reagowanie na awarie silników i urządzeń mechanicznych, zarządzanie naprawami w czasie rzeczywistym.",
                    "en" => "Responding to engine malfunctions and mechanical equipment failures, managing repairs in real-time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24773,
                "name" => json_encode([
                    "pl" => "Zarządzanie załogą mechaników okrętowych, nadzór nad procesami naprawczymi i konserwacyjnymi.",
                    "en" => "Managing the crew of ship mechanics, overseeing repair and maintenance processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24774,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań w zakresie diagnostyki awarii, nadzorowanie procesów naprawczych.",
                    "en" => "Coordinating fault diagnosis activities, overseeing repair processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $STERMOTORZYSTA_ZEGLUGI_SRODLADOWEJ = [

            [
                "id" => 24775,
                "name" => json_encode([
                    "pl" => "Prowadzenie i kontrolowanie pracy silników w jednostkach pływających po wodach śródlądowych.",
                    "en" => "Operating and controlling the engines of vessels on inland waters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24776,
                "name" => json_encode([
                    "pl" => "Koordynowanie pracy maszyn okrętowych w zależności od potrzeb i warunków eksploatacyjnych.",
                    "en" => "Coordinating the operation of ship machinery according to operational needs and conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24777,
                "name" => json_encode([
                    "pl" => "Nadzór nad wydajnością silników, monitoring ich stanu technicznego i optymalizacja pracy.",
                    "en" => "Supervising engine performance, monitoring their technical condition, and optimizing their operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24778,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi członkami załogi w zakresie zapewnienia bezpieczeństwa na pokładzie.",
                    "en" => "Collaborating with other crew members to ensure safety aboard the vessel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24779,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje awaryjne związane z działaniem silników, zapewnienie bezpieczeństwa operacji.",
                    "en" => "Responding to emergency situations related to engine operation, ensuring the safety of the operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24780,
                "name" => json_encode([
                    "pl" => "Dokumentowanie pracy silników, raportowanie o awariach i koniecznych naprawach.",
                    "en" => "Documenting engine operations, reporting faults and necessary repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_MECHANIK_OKRETOWY = [

            [
                "id" => 24781,
                "name" => json_encode([
                    "pl" => "Nadzór i konserwacja maszyn okrętowych, w tym silników i urządzeń pomocniczych.",
                    "en" => "Supervision and maintenance of ship machinery, including engines and auxiliary equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24782,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie regularnych inspekcji technicznych maszyn, monitorowanie ich wydajności.",
                    "en" => "Conducting regular technical inspections of machinery, monitoring their performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24783,
                "name" => json_encode([
                    "pl" => "Zarządzanie naprawami i konserwacją systemów napędowych oraz innych urządzeń na okręcie.",
                    "en" => "Managing repairs and maintenance of propulsion systems and other equipment on the ship."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24784,
                "name" => json_encode([
                    "pl" => "Diagnostyka awarii, analiza przyczyn problemów mechanicznych na pokładzie.",
                    "en" => "Diagnosing malfunctions, analyzing the causes of mechanical issues on board."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24785,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań konserwacyjnych w celu zapewnienia nieprzerwanej pracy maszyn okrętowych.",
                    "en" => "Coordinating maintenance activities to ensure continuous operation of ship machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24786,
                "name" => json_encode([
                    "pl" => "Utrzymywanie dokumentacji technicznej maszyn okrętowych, raportowanie o wykonanych pracach.",
                    "en" => "Maintaining technical documentation of ship machinery, reporting on completed work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_PRACOWNICY_SŁUŻB_TECHNICZNYCH_ŻEGLUGI = [

            [
                "id" => 24787,
                "name" => json_encode([
                    "pl" => "Wspieranie działań związanych z konserwacją i naprawą statków, maszyn oraz urządzeń na jednostkach pływających.",
                    "en" => "Supporting activities related to the maintenance and repair of ships, machinery, and equipment on vessels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24788,
                "name" => json_encode([
                    "pl" => "Pomoc w inspekcjach technicznych statków oraz urządzeń, monitorowanie ich stanu i sprawności.",
                    "en" => "Assisting in technical inspections of ships and equipment, monitoring their condition and efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24789,
                "name" => json_encode([
                    "pl" => "Reagowanie na awarie i usterki maszyn lub urządzeń pokładowych, pomoc w ich usuwaniu.",
                    "en" => "Responding to malfunctions and faults in onboard machines or equipment, assisting in repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24790,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem konserwacyjnym i innymi służbami technicznymi w celu zapewnienia sprawności operacyjnej statku.",
                    "en" => "Collaborating with the maintenance team and other technical services to ensure operational efficiency of the vessel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24791,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w strefie technicznej statku, dbanie o sprzęt i narzędzia robocze.",
                    "en" => "Maintaining order in the vessel's technical areas, ensuring the proper condition of tools and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24792,
                "name" => json_encode([
                    "pl" => "Pomoc w zarządzaniu dokumentacją techniczną, monitorowanie i raportowanie o stanie urządzeń i maszyn.",
                    "en" => "Assisting in managing technical documentation, monitoring and reporting on the condition of equipment and machinery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FLISAK_RETMAN = [

            [
                "id" => 24793,
                "name" => json_encode([
                    "pl" => "Sterowanie tratwami lub innymi jednostkami pływającymi, manewrowanie nimi w wodach śródlądowych.",
                    "en" => "Steering rafts or other floating units, maneuvering them in inland waters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24794,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac związanych z załadunkiem i rozładunkiem towarów na tratwach i innych jednostkach pływających.",
                    "en" => "Performing tasks related to loading and unloading goods on rafts and other floating units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24795,
                "name" => json_encode([
                    "pl" => "Nadzorowanie transportu towarów na rzekach, dbanie o bezpieczeństwo transportu.",
                    "en" => "Supervising the transportation of goods on rivers, ensuring the safety of transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24796,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku na tratwie i sprawności urządzeń pomocniczych.",
                    "en" => "Maintaining order on the raft and the operational efficiency of auxiliary equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24797,
                "name" => json_encode([
                    "pl" => "Reagowanie na awarie i usuwanie ewentualnych przeszkód podczas transportu towarów.",
                    "en" => "Responding to malfunctions and removing potential obstacles during goods transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24798,
                "name" => json_encode([
                    "pl" => "Koordynowanie pracy z innymi członkami załogi w celu zapewnienia sprawności operacyjnej.",
                    "en" => "Coordinating work with other crew members to ensure operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LATARNIK = [

            [
                "id" => 24799,
                "name" => json_encode([
                    "pl" => "Nadzorowanie i konserwacja latarni morskich, dbanie o ich prawidłowe działanie i widoczność.",
                    "en" => "Supervising and maintaining lighthouses, ensuring their proper operation and visibility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24800,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków pogodowych i informowanie żeglarzy o możliwych zagrożeniach na wodach.",
                    "en" => "Monitoring weather conditions and informing sailors about potential hazards on the waters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24801,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie regularnych inspekcji latarni, naprawianie usterek technicznych.",
                    "en" => "Performing regular lighthouse inspections, repairing technical faults."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24802,
                "name" => json_encode([
                    "pl" => "Utrzymywanie zapasów paliwa i innych materiałów eksploatacyjnych do latarni.",
                    "en" => "Maintaining fuel supplies and other consumables for the lighthouse."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24803,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje awaryjne związane z uszkodzeniami latarni, organizowanie napraw.",
                    "en" => "Responding to emergency situations related to lighthouse malfunctions, organizing repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24804,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją konserwacyjną latarni, raportowanie o stanie technicznym urządzeń.",
                    "en" => "Managing maintenance documentation for the lighthouse, reporting on the technical condition of devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MARYNARZ_STATKU_MORSKIEGO = [

            [
                "id" => 24805,
                "name" => json_encode([
                    "pl" => "Obsługa statków morskich, dbanie o bezpieczeństwo pasażerów i ładunków.",
                    "en" => "Operating marine vessels, ensuring passenger and cargo safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24806,
                "name" => json_encode([
                    "pl" => "Wykonywanie manewrów na pokładzie statku, kontrolowanie urządzeń nawigacyjnych i technicznych.",
                    "en" => "Performing maneuvers on the vessel, controlling navigation and technical equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24807,
                "name" => json_encode([
                    "pl" => "Pomoc w załadunku i rozładunku towarów, kontrolowanie stanu ładunków.",
                    "en" => "Assisting in loading and unloading cargo, monitoring the condition of the goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24808,
                "name" => json_encode([
                    "pl" => "Wykonywanie prac konserwacyjnych i naprawczych na pokładzie statku.",
                    "en" => "Performing maintenance and repair work on board the vessel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24809,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku na pokładzie, kontrolowanie sprzętu ratunkowego i nawigacyjnego.",
                    "en" => "Maintaining order on deck, monitoring safety and navigation equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24810,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje kryzysowe, zapewnienie bezpieczeństwa w razie wypadków morskich.",
                    "en" => "Responding to emergency situations, ensuring safety in case of maritime accidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MARYNARZ_ZEGLUGI_SRODLADOWEJ = [

            [
                "id" => 24811,
                "name" => json_encode([
                    "pl" => "Obsługa jednostek pływających na wodach śródlądowych, zapewnienie bezpieczeństwa transportu.",
                    "en" => "Operating vessels on inland waters, ensuring the safety of transportation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24812,
                "name" => json_encode([
                    "pl" => "Pomoc w załadunku i rozładunku towarów, kontrolowanie stanu ładunków na statkach śródlądowych.",
                    "en" => "Assisting in loading and unloading goods, monitoring the condition of cargo on inland vessels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24813,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku na pokładzie, konserwacja urządzeń i sprzętu na statkach.",
                    "en" => "Maintaining order on deck, performing maintenance of equipment and machinery on vessels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24814,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji technicznych na jednostkach pływających, reagowanie na wszelkie awarie.",
                    "en" => "Performing technical inspections on vessels, responding to any malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24815,
                "name" => json_encode([
                    "pl" => "Współpraca z kapitanem w zakresie zapewnienia bezpieczeństwa transportu na wodach śródlądowych.",
                    "en" => "Collaborating with the captain to ensure the safety of transport on inland waters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24816,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje awaryjne związane z jednostkami pływającymi, organizowanie akcji ratunkowych.",
                    "en" => "Responding to emergency situations related to vessels, organizing rescue operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $STERNIK_ZEGLUGI_SRODLADOWEJ = [

            [
                "id" => 24817,
                "name" => json_encode([
                    "pl" => "Prowadzenie jednostek pływających na wodach śródlądowych, kontrolowanie kursu statku.",
                    "en" => "Steering vessels on inland waters, controlling the course of the ship."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24818,
                "name" => json_encode([
                    "pl" => "Manewrowanie statkiem w portach, na przejściach wodnych oraz w obszarach o dużym natężeniu ruchu.",
                    "en" => "Maneuvering the ship in ports, at water passages, and in areas with high traffic."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24819,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków pogodowych oraz stanu technicznego jednostki pływającej w trakcie rejsu.",
                    "en" => "Monitoring weather conditions and the technical condition of the vessel during the voyage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24820,
                "name" => json_encode([
                    "pl" => "Zarządzanie załogą i komunikacja z innymi jednostkami pływającymi w celu zapewnienia bezpieczeństwa na wodach.",
                    "en" => "Managing the crew and communicating with other vessels to ensure safety on the waters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24821,
                "name" => json_encode([
                    "pl" => "Reagowanie na nieprzewidziane sytuacje, takie jak zmiana pogody, awarie statku czy zagrożenia na wodzie.",
                    "en" => "Responding to unforeseen situations, such as changing weather, ship malfunctions, or water hazards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24822,
                "name" => json_encode([
                    "pl" => "Dbanie o dokumentację rejsu i utrzymywanie zgodności z przepisami żeglugi śródlądowej.",
                    "en" => "Maintaining voyage documentation and ensuring compliance with inland navigation regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $BOSMAN_ZEGLUGI_SRODLADOWEJ = [

            [
                "id" => 24823,
                "name" => json_encode([
                    "pl" => "Nadzór nad załogą statku, zarządzanie pracami na pokładzie, koordynowanie działań związanych z manewrami.",
                    "en" => "Supervising the crew, managing on-deck work, coordinating activities related to maneuvers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24824,
                "name" => json_encode([
                    "pl" => "Kontrolowanie stanu technicznego statku, w tym sprzętu nawigacyjnego i urządzeń pokładowych.",
                    "en" => "Controlling the technical condition of the vessel, including navigation equipment and onboard devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24825,
                "name" => json_encode([
                    "pl" => "Współpraca z kapitanem i załogą w zakresie realizacji planów rejsów oraz zarządzania bezpieczeństwem.",
                    "en" => "Cooperating with the captain and crew in implementing voyage plans and managing safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24826,
                "name" => json_encode([
                    "pl" => "Wykonywanie kontroli technicznych statku, nadzorowanie konserwacji maszyn i urządzeń na pokładzie.",
                    "en" => "Performing technical checks of the vessel, supervising the maintenance of machinery and equipment on board."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24827,
                "name" => json_encode([
                    "pl" => "Nadzór nad załadunkiem i rozładunkiem towarów, koordynowanie działań w porcie.",
                    "en" => "Supervising cargo loading and unloading, coordinating activities in the port."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24828,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją statku, zapewnienie przestrzegania procedur operacyjnych i bezpieczeństwa.",
                    "en" => "Managing the vessel's documentation, ensuring compliance with operational procedures and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRZEWOŹNIK_ZEGLUGI_SRODLADOWEJ = [

            [
                "id" => 24829,
                "name" => json_encode([
                    "pl" => "Zarządzanie transportem towarów na rzekach i innych wodach śródlądowych, organizowanie rejsów.",
                    "en" => "Managing cargo transport on rivers and other inland waters, organizing voyages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24830,
                "name" => json_encode([
                    "pl" => "Koordynowanie załadunków i rozładunków towarów, zapewnienie przestrzegania norm bezpieczeństwa.",
                    "en" => "Coordinating cargo loading and unloading, ensuring compliance with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24831,
                "name" => json_encode([
                    "pl" => "Zarządzanie flotą jednostek pływających, planowanie tras i harmonogramów rejsów.",
                    "en" => "Managing a fleet of vessels, planning routes and schedules for voyages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24832,
                "name" => json_encode([
                    "pl" => "Współpraca z kapitanami, sternikami i bosmanami w celu zapewnienia bezpieczeństwa transportu.",
                    "en" => "Cooperating with captains, helmsmen, and bosuns to ensure the safety of transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24833,
                "name" => json_encode([
                    "pl" => "Kontrolowanie stanu technicznego jednostek pływających, nadzorowanie serwisów i napraw.",
                    "en" => "Monitoring the technical condition of vessels, supervising services and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24834,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją transportu towarów, zapewnienie zgodności z przepisami żeglugi śródlądowej.",
                    "en" => "Managing cargo transport documentation, ensuring compliance with inland navigation regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_MARYNARZE_I_POKREWNI = [

            [
                "id" => 24835,
                "name" => json_encode([
                    "pl" => "Wykonywanie różnorodnych prac na statkach, w tym nawigacji, konserwacji, czyszczenia i organizowania przestrzeni na pokładzie.",
                    "en" => "Performing various tasks on ships, including navigation, maintenance, cleaning, and organizing deck spaces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24836,
                "name" => json_encode([
                    "pl" => "Kontrolowanie stanu technicznego urządzeń na pokładzie, dbanie o sprawność operacyjną statku.",
                    "en" => "Monitoring the technical condition of devices on board, ensuring operational efficiency of the vessel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24837,
                "name" => json_encode([
                    "pl" => "Pomoc przy załadunku, rozładunku, i organizowaniu przestrzeni transportowej na statkach.",
                    "en" => "Assisting with loading, unloading, and organizing cargo space on ships."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24838,
                "name" => json_encode([
                    "pl" => "Wykonywanie napraw na pokładzie, dbanie o bezpieczeństwo ładunku i pasażerów.",
                    "en" => "Carrying out repairs on board, ensuring the safety of cargo and passengers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24839,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje awaryjne na statku, w tym pomoc przy ewakuacji pasażerów.",
                    "en" => "Responding to emergencies on board, including assisting in passenger evacuation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24840,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku na statku, współpraca z załogą i kapitanem w zakresie organizacji pracy.",
                    "en" => "Maintaining order on the ship, cooperating with the crew and captain in organizing work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INSPEKTOR_BEZPIECZEŃSTWA_ŻEGLUGI = [

            [
                "id" => 24841,
                "name" => json_encode([
                    "pl" => "Nadzór nad przestrzeganiem przepisów bezpieczeństwa żeglugi, kontrolowanie działań załóg statków.",
                    "en" => "Supervising compliance with maritime safety regulations, overseeing the actions of ship crews."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24842,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji statków, weryfikowanie stanu technicznego urządzeń bezpieczeństwa na pokładzie.",
                    "en" => "Conducting ship inspections, verifying the technical condition of safety equipment on board."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24843,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań w zakresie zapobiegania wypadkom i awariom na morzu.",
                    "en" => "Coordinating efforts to prevent accidents and malfunctions at sea."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24844,
                "name" => json_encode([
                    "pl" => "Szkolenie załóg w zakresie bezpieczeństwa żeglugi, przeprowadzanie ćwiczeń awaryjnych.",
                    "en" => "Training crews in maritime safety, conducting emergency drills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24845,
                "name" => json_encode([
                    "pl" => "Reagowanie na wypadki i awarie na morzu, koordynowanie akcji ratunkowych.",
                    "en" => "Responding to accidents and malfunctions at sea, coordinating rescue operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24846,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją dotyczącą bezpieczeństwa żeglugi, raportowanie o stanie środków bezpieczeństwa.",
                    "en" => "Managing maritime safety documentation, reporting on the status of safety measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KAPITAN_STATKU_MORSKIEGO = [

            [
                "id" => 24847,
                "name" => json_encode([
                    "pl" => "Nadzór nad wszystkimi operacjami na statku, odpowiedzialność za bezpieczeństwo załogi i pasażerów.",
                    "en" => "Supervising all operations on the ship, responsible for the safety of the crew and passengers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24848,
                "name" => json_encode([
                    "pl" => "Prowadzenie statku na morzu, podejmowanie decyzji dotyczących kursu i prędkości.",
                    "en" => "Steering the ship at sea, making decisions regarding course and speed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24849,
                "name" => json_encode([
                    "pl" => "Zarządzanie załogą, organizowanie pracy na pokładzie oraz delegowanie zadań.",
                    "en" => "Managing the crew, organizing work on board, and delegating tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24850,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje kryzysowe, podejmowanie działań w razie wypadków na morzu.",
                    "en" => "Responding to crisis situations, taking actions in case of accidents at sea."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24851,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją statku, w tym raportowanie o stanie statku i załogi.",
                    "en" => "Managing the ship's documentation, including reporting on the vessel and crew's status."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24852,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań w zakresie załadunku, rozładunku i transportu towarów.",
                    "en" => "Coordinating activities related to loading, unloading, and transporting goods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KAPITAN_ZEGLUGI_SRODLADOWEJ = [

            [
                "id" => 24853,
                "name" => json_encode([
                    "pl" => "Prowadzenie jednostek pływających na wodach śródlądowych, zarządzanie załogą i wykonywanie manewrów.",
                    "en" => "Steering vessels on inland waters, managing the crew and performing maneuvers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24854,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem transportu towarów i pasażerów na wodach śródlądowych, nadzorowanie działalności portów.",
                    "en" => "Managing the process of transporting goods and passengers on inland waters, overseeing port operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24855,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje kryzysowe, kontrolowanie załogi w sytuacjach awaryjnych.",
                    "en" => "Responding to crisis situations, controlling the crew in emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24856,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków pogodowych i hydrologicznych oraz ich wpływu na żeglugę.",
                    "en" => "Monitoring weather and hydrological conditions and their impact on navigation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24857,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją jednostki pływającej, raportowanie o stanie technicznym statku.",
                    "en" => "Managing the vessel's documentation, reporting on the ship's technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24858,
                "name" => json_encode([
                    "pl" => "Koordynowanie transportu towarów i pasażerów, nadzorowanie załadunku i rozładunku w porcie.",
                    "en" => "Coordinating the transport of goods and passengers, overseeing loading and unloading at the port."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KAPITAN_ZEGLUGI_PRZYBRZEŻNEJ = [

            [
                "id" => 24859,
                "name" => json_encode([
                    "pl" => "Prowadzenie jednostek pływających na wodach przybrzeżnych, monitorowanie warunków nawigacyjnych.",
                    "en" => "Steering vessels on coastal waters, monitoring navigational conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24860,
                "name" => json_encode([
                    "pl" => "Nadzór nad bezpieczeństwem pasażerów i załogi, przestrzeganie zasad bezpieczeństwa żeglugi przybrzeżnej.",
                    "en" => "Supervising the safety of passengers and crew, adhering to coastal navigation safety rules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24861,
                "name" => json_encode([
                    "pl" => "Wykonywanie manewrów w obszarach o dużym natężeniu ruchu przybrzeżnego.",
                    "en" => "Performing maneuvers in areas with heavy coastal traffic."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24862,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesami transportu, załadunku i rozładunku towarów w portach przybrzeżnych.",
                    "en" => "Managing transport processes, loading, and unloading goods at coastal ports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24863,
                "name" => json_encode([
                    "pl" => "Koordynowanie prac załogi w zakresie zabezpieczenia statku i ładunków.",
                    "en" => "Coordinating crew activities to secure the vessel and cargo."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24864,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje kryzysowe, zapewnienie bezpieczeństwa w razie awarii.",
                    "en" => "Responding to emergency situations, ensuring safety in case of malfunction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OFICER_POKŁADOWY = [

            [
                "id" => 24865,
                "name" => json_encode([
                    "pl" => "Nadzór nad wszystkimi operacjami na pokładzie statku, zapewnienie przestrzegania procedur bezpieczeństwa.",
                    "en" => "Supervising all operations on board the vessel, ensuring compliance with safety procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24866,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań załogi, w tym prac związanych z nawigacją, konserwacją i bezpieczeństwem.",
                    "en" => "Coordinating crew activities, including navigation, maintenance, and safety tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24867,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji statku, nadzorowanie stanu technicznego urządzeń na pokładzie.",
                    "en" => "Conducting ship inspections, overseeing the technical condition of onboard equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24868,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje awaryjne, zarządzanie ewakuacją załogi i pasażerów w razie potrzeby.",
                    "en" => "Responding to emergencies, managing the evacuation of crew and passengers when necessary."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24869,
                "name" => json_encode([
                    "pl" => "Współpraca z kapitanem i innymi oficerami w zakresie realizacji planu rejsu.",
                    "en" => "Collaborating with the captain and other officers to execute the voyage plan."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24870,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją operacyjną statku, w tym raportowanie o stanie technicznym statku i załogi.",
                    "en" => "Managing operational documentation of the vessel, including reporting on the technical condition of the ship and crew."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OFICER_PORTU = [

            [
                "id" => 24871,
                "name" => json_encode([
                    "pl" => "Nadzór nad operacjami w porcie, zarządzanie ruchem statków i organizowanie załadunku i rozładunku.",
                    "en" => "Supervising port operations, managing ship traffic, and organizing loading and unloading activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24872,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań załóg portowych, zapewnienie sprawnej obsługi i bezpieczeństwa statków.",
                    "en" => "Coordinating the activities of port crews, ensuring efficient service and safety of vessels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24873,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków portowych, dbanie o bezpieczeństwo statków i ładunków w porcie.",
                    "en" => "Monitoring port conditions, ensuring the safety of ships and cargo in the port."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24874,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje kryzysowe w porcie, organizowanie akcji ratunkowych w razie awarii.",
                    "en" => "Responding to emergency situations in the port, organizing rescue operations in case of malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24875,
                "name" => json_encode([
                    "pl" => "Zarządzanie i kontrolowanie urządzeń portowych, zapewnienie ich sprawności operacyjnej.",
                    "en" => "Managing and controlling port equipment, ensuring its operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24876,
                "name" => json_encode([
                    "pl" => "Utrzymywanie dokumentacji portowej, raportowanie o stanie technicznym statków i urządzeń portowych.",
                    "en" => "Maintaining port documentation, reporting on the technical condition of ships and port equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OBSERWATOR_RADAROWY_ZEGLUGI_SRODLADOWEJ = [

            [
                "id" => 24877,
                "name" => json_encode([
                    "pl" => "Monitorowanie ruchu na wodach śródlądowych za pomocą radarów, identyfikowanie jednostek pływających i przeszkód.",
                    "en" => "Monitoring inland waterway traffic using radar systems, identifying vessels and obstacles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24878,
                "name" => json_encode([
                    "pl" => "Interpretowanie obrazów radarowych w celu zapewnienia bezpiecznego manewrowania jednostkami pływającymi.",
                    "en" => "Interpreting radar images to ensure safe maneuvering of vessels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24879,
                "name" => json_encode([
                    "pl" => "Zgłaszanie informacji o zagrożeniach na wodach, informowanie kapitana o potencjalnych kolizjach.",
                    "en" => "Reporting hazards on the waters, informing the captain of potential collisions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24880,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań z kapitanem i załogą w zakresie reagowania na sytuacje kryzysowe i zagrożenia.",
                    "en" => "Coordinating actions with the captain and crew in responding to emergency situations and hazards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24881,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją radarową, raportowanie o wykrytych jednostkach pływających i wydarzeniach na wodzie.",
                    "en" => "Managing radar documentation, reporting detected vessels and events on the water."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24882,
                "name" => json_encode([
                    "pl" => "Utrzymywanie sprawności urządzeń radarowych, przeprowadzanie testów i kalibracji sprzętu.",
                    "en" => "Maintaining the functionality of radar equipment, performing tests and calibrating the devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PILOT_ZEGLUGI_SRODLADOWEJ = [

            [
                "id" => 24883,
                "name" => json_encode([
                    "pl" => "Nadzór nad manewrowaniem statkiem na wodach śródlądowych, zapewnienie bezpieczeństwa nawigacji.",
                    "en" => "Supervising vessel maneuvering on inland waters, ensuring navigation safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24884,
                "name" => json_encode([
                    "pl" => "Reagowanie na zmiany warunków pogodowych i wodnych, dostosowanie kursu statku do sytuacji nawigacyjnej.",
                    "en" => "Responding to changing weather and water conditions, adjusting the ship's course to the navigational situation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24885,
                "name" => json_encode([
                    "pl" => "Nawigowanie w trudnych warunkach, takich jak wąskie rzeki, porty, mosty czy inne przeszkody nawigacyjne.",
                    "en" => "Navigating in difficult conditions such as narrow rivers, ports, bridges, or other navigational obstacles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24886,
                "name" => json_encode([
                    "pl" => "Koordynowanie manewrów z kapitanem, załogą i innymi jednostkami pływającymi w porcie lub na wodach śródlądowych.",
                    "en" => "Coordinating maneuvers with the captain, crew, and other vessels in port or inland waters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24887,
                "name" => json_encode([
                    "pl" => "Współpraca z załogą w zakresie utrzymywania bezpieczeństwa na pokładzie oraz podczas manewrów.",
                    "en" => "Collaborating with the crew to maintain safety on board and during maneuvers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24888,
                "name" => json_encode([
                    "pl" => "Nadzór nad sprzętem nawigacyjnym, monitorowanie warunków nawigacyjnych oraz zgłaszanie potencjalnych zagrożeń.",
                    "en" => "Supervising navigational equipment, monitoring navigational conditions, and reporting potential hazards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_NAWIGATOR_MORSKI = [

            [
                "id" => 24889,
                "name" => json_encode([
                    "pl" => "Używanie urządzeń nawigacyjnych, takich jak radar, GPS, kompas do prowadzenia jednostek pływających.",
                    "en" => "Using navigation equipment such as radar, GPS, and compass to operate vessels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24890,
                "name" => json_encode([
                    "pl" => "Analizowanie map morskich oraz obliczanie kursów i odległości do celu.",
                    "en" => "Analyzing nautical charts and calculating courses and distances to the destination."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24891,
                "name" => json_encode([
                    "pl" => "Wykonywanie obliczeń nawigacyjnych i pomoc w ustalaniu kursu statku.",
                    "en" => "Performing navigational calculations and assisting in determining the ship's course."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24892,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji sprzętu nawigacyjnego i jego konserwacja.",
                    "en" => "Conducting inspections of navigational equipment and maintaining it."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24893,
                "name" => json_encode([
                    "pl" => "Pomoc w prowadzeniu logów nawigacyjnych i monitorowanie warunków atmosferycznych.",
                    "en" => "Assisting in maintaining navigational logs and monitoring weather conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24894,
                "name" => json_encode([
                    "pl" => "Współpraca z kapitanem i oficerami w zakresie planowania tras i monitorowania przebiegu rejsu.",
                    "en" => "Collaborating with the captain and officers in planning routes and monitoring the course of the voyage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ZEGLUGI_SRODLADOWEJ = [

            [
                "id" => 24895,
                "name" => json_encode([
                    "pl" => "Wykonywanie operacji na jednostkach pływających na wodach śródlądowych, nadzorowanie pracy maszyn i urządzeń.",
                    "en" => "Performing operations on inland waterway vessels, supervising the operation of machinery and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24896,
                "name" => json_encode([
                    "pl" => "Kontrolowanie stanu technicznego jednostek pływających, reagowanie na awarie.",
                    "en" => "Monitoring the technical condition of inland vessels, responding to malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24897,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań związanych z nawigacją, monitorowanie warunków śródlądowych.",
                    "en" => "Coordinating navigation activities, monitoring inland water conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24898,
                "name" => json_encode([
                    "pl" => "Wykonywanie obliczeń nawigacyjnych, określanie kursów i odległości na wodach śródlądowych.",
                    "en" => "Performing navigational calculations, determining courses and distances on inland waters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24899,
                "name" => json_encode([
                    "pl" => "Współpraca z kapitanem i załogą przy realizacji planu rejsu na wodach śródlądowych.",
                    "en" => "Collaborating with the captain and crew to implement the voyage plan on inland waters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24900,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją jednostki pływającej, przygotowywanie raportów na temat rejsu i stanu statku.",
                    "en" => "Managing the vessel's documentation, preparing reports on the voyage and the ship's condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SZYPER = [

            [
                "id" => 24901,
                "name" => json_encode([
                    "pl" => "Zarządzanie jednostkami pływającymi, wykonywanie manewrów w porcie i na wodach śródlądowych.",
                    "en" => "Managing vessels, performing maneuvers in port and inland waters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24902,
                "name" => json_encode([
                    "pl" => "Nadzór nad załogą statku, przydzielanie zadań związanych z manewrami i bezpieczeństwem.",
                    "en" => "Supervising the crew, assigning tasks related to maneuvers and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24903,
                "name" => json_encode([
                    "pl" => "Współpraca z kapitanem w zakresie planowania rejsów i dokonywania manewrów.",
                    "en" => "Collaborating with the captain in planning voyages and executing maneuvers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24904,
                "name" => json_encode([
                    "pl" => "Kontrolowanie stanu technicznego statku, w tym sprzętu nawigacyjnego i urządzeń pomocniczych.",
                    "en" => "Monitoring the ship's technical condition, including navigational equipment and auxiliary devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24905,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje kryzysowe, przeprowadzanie ewakuacji w razie awarii.",
                    "en" => "Responding to emergency situations, conducting evacuations in case of malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24906,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją operacyjną statku i raportowanie o stanie załogi oraz sprzętu.",
                    "en" => "Managing the ship's operational documentation and reporting on the crew and equipment status."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_OFICEROWIE_POKŁADOWI_PILOCI_ZEGLUGI_I_POKREWNI = [

            [
                "id" => 24907,
                "name" => json_encode([
                    "pl" => "Nadzór nad operacjami na pokładzie statku, koordynowanie manewrów oraz utrzymywanie bezpieczeństwa.",
                    "en" => "Supervising operations on the vessel, coordinating maneuvers, and maintaining safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24908,
                "name" => json_encode([
                    "pl" => "Współpraca z kapitanem w zakresie nawigacji, operacji portowych oraz manewrów na wodach śródlądowych.",
                    "en" => "Collaborating with the captain in navigation, port operations, and maneuvers in inland waters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24909,
                "name" => json_encode([
                    "pl" => "Kontrolowanie stanu technicznego urządzeń nawigacyjnych, zarządzanie ich konserwacją.",
                    "en" => "Monitoring the technical condition of navigation equipment, managing its maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24910,
                "name" => json_encode([
                    "pl" => "Zarządzanie ruchem statków i bezpieczeństwem załogi, w tym reagowanie na sytuacje kryzysowe.",
                    "en" => "Managing vessel traffic and crew safety, including responding to emergencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24911,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją operacyjną oraz raportowanie o przebiegu rejsu.",
                    "en" => "Managing operational documentation and reporting on the course of the voyage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MARYNARZ_MOTORZYSTA_ZEGLUGI_SRODLADOWEJ = [

            [
                "id" => 24912,
                "name" => json_encode([
                    "pl" => "Obsługa i prowadzenie jednostek pływających z napędem mechanicznym na wodach śródlądowych.",
                    "en" => "Operating and steering mechanically powered vessels on inland waters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24913,
                "name" => json_encode([
                    "pl" => "Nadzorowanie pracy silników i urządzeń napędowych jednostek pływających.",
                    "en" => "Supervising the operation of engines and propulsion systems on the vessels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24914,
                "name" => json_encode([
                    "pl" => "Wykonywanie manewrów na statku, w tym w portach i w obszarach o dużym natężeniu ruchu.",
                    "en" => "Performing maneuvers on the vessel, including in ports and busy traffic areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24915,
                "name" => json_encode([
                    "pl" => "Kontrolowanie stanu technicznego jednostki pływającej, reagowanie na wszelkie usterki.",
                    "en" => "Monitoring the technical condition of the vessel, responding to any malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24916,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku na statku, dbanie o bezpieczeństwo pasażerów i ładunku.",
                    "en" => "Maintaining order on the vessel, ensuring the safety of passengers and cargo."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24917,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi członkami załogi w zakresie zapewnienia bezpieczeństwa i sprawności jednostki.",
                    "en" => "Cooperating with other crew members to ensure the safety and efficiency of the vessel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DYSPONENT_LOTNICZY = [

            [
                "id" => 24918,
                "name" => json_encode([
                    "pl" => "Zarządzanie harmonogramami lotów, kontrolowanie tras i czasów przelotu.",
                    "en" => "Managing flight schedules, controlling routes and flight times."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24919,
                "name" => json_encode([
                    "pl" => "Koordynowanie lotów pomiędzy różnymi lotniskami i liniami lotniczymi.",
                    "en" => "Coordinating flights between different airports and airlines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24920,
                "name" => json_encode([
                    "pl" => "Reagowanie na zmiany w rozkładach lotów, informowanie pasażerów o opóźnieniach.",
                    "en" => "Responding to changes in flight schedules, informing passengers about delays."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24921,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją lotniczą, raportowanie o przebiegu lotów.",
                    "en" => "Managing aviation documentation, reporting on flight progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24922,
                "name" => json_encode([
                    "pl" => "Nadzorowanie działań związanych z bezpieczeństwem lotów, dbanie o przestrzeganie procedur.",
                    "en" => "Overseeing flight safety operations, ensuring compliance with procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24923,
                "name" => json_encode([
                    "pl" => "Współpraca z kontrolą ruchu lotniczego w celu zapewnienia bezpiecznego lotu.",
                    "en" => "Cooperating with air traffic control to ensure safe flights."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INFORMATOR_SLUZBY_INFORMACJI_POWIETRZNEJ = [

            [
                "id" => 24924,
                "name" => json_encode([
                    "pl" => "Dostarczanie informacji na temat warunków pogodowych, stanu lotnisk i tras lotniczych.",
                    "en" => "Providing information on weather conditions, airport status, and flight routes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24925,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o zagrożeniach i opóźnieniach lotów, koordynowanie komunikacji z załogami.",
                    "en" => "Providing information about hazards and flight delays, coordinating communication with crews."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24926,
                "name" => json_encode([
                    "pl" => "Utrzymywanie baz danych o warunkach pogodowych, śledzenie prognoz i raportowanie o zmianach.",
                    "en" => "Maintaining databases on weather conditions, tracking forecasts, and reporting changes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24927,
                "name" => json_encode([
                    "pl" => "Komunikowanie się z kontrolą ruchu lotniczego oraz innymi służbami lotniczymi w celu wymiany informacji.",
                    "en" => "Communicating with air traffic control and other aviation services to exchange information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24928,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją dotyczącą warunków pogodowych, przekazywanie raportów o stanie atmosferycznym.",
                    "en" => "Managing documentation related to weather conditions, providing reports on atmospheric conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24929,
                "name" => json_encode([
                    "pl" => "Pomoc w zarządzaniu sytuacjami awaryjnymi, udzielanie niezbędnych informacji w przypadku kryzysów.",
                    "en" => "Assisting in managing emergency situations, providing necessary information in crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLER_RUCHU_LOTNICZEGO = [

            [
                "id" => 24930,
                "name" => json_encode([
                    "pl" => "Kontrolowanie ruchu lotniczego, zapewnianie bezpiecznej i sprawnej obsługi samolotów.",
                    "en" => "Controlling air traffic, ensuring safe and efficient handling of aircraft."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24931,
                "name" => json_encode([
                    "pl" => "Koordynowanie startów, lądowań oraz manewrów samolotów na lotniskach.",
                    "en" => "Coordinating takeoffs, landings, and maneuvers of aircraft at airports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24932,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi kontrolerami i służbami lotniczymi w celu zarządzania ruchem powietrznym.",
                    "en" => "Collaborating with other controllers and aviation services to manage air traffic."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24933,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje kryzysowe, takie jak zmiany warunków pogodowych lub awarie techniczne.",
                    "en" => "Responding to emergency situations, such as changes in weather conditions or technical failures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24934,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją dotyczącą ruchu lotniczego, rejestrowanie i raportowanie wszystkich operacji.",
                    "en" => "Managing air traffic documentation, recording and reporting all operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24935,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań z kapitanami samolotów i innymi służbami lotniczymi w zakresie bezpieczeństwa.",
                    "en" => "Coordinating actions with aircraft captains and other aviation services regarding safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INFORMATOR_LOTNISKOWEJ_SLUZBY_INFORMACJI_POWIETRZNEJ = [

            [
                "id" => 24936,
                "name" => json_encode([
                    "pl" => "Dostarczanie informacji na temat warunków pogodowych, tras lotniczych oraz sytuacji w powietrzu i na lotniskach.",
                    "en" => "Providing information on weather conditions, flight routes, and the air and airport situation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24937,
                "name" => json_encode([
                    "pl" => "Współpraca z kontrolerami ruchu lotniczego oraz innymi służbami lotniskowymi w celu wymiany informacji.",
                    "en" => "Cooperating with air traffic controllers and other airport services to exchange information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24938,
                "name" => json_encode([
                    "pl" => "Zarządzanie bazą danych dotyczącą lotów, monitorowanie zmian w planach lotów oraz informowanie pasażerów o opóźnieniach.",
                    "en" => "Managing a flight database, monitoring changes in flight plans, and informing passengers about delays."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24939,
                "name" => json_encode([
                    "pl" => "Pomoc w zarządzaniu sytuacjami awaryjnymi, udzielanie informacji w przypadku nieoczekiwanych sytuacji.",
                    "en" => "Assisting in managing emergency situations, providing information in unexpected circumstances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24940,
                "name" => json_encode([
                    "pl" => "Kontrolowanie i monitorowanie systemów informacyjnych lotniska, zapewniając ich zgodność z normami.",
                    "en" => "Controlling and monitoring the airport's information systems, ensuring compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24941,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz i raportowanie o stanie lotów oraz zagrożeniach w ruchu lotniczym.",
                    "en" => "Conducting analyses and reporting on the status of flights and hazards in air traffic."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_LOTNISKOWYCH_SLUZB_OPERACYJNYCH = [

            [
                "id" => 24942,
                "name" => json_encode([
                    "pl" => "Zarządzanie urządzeniami służb operacyjnych lotniska, w tym systemami nawigacyjnymi, monitoringu i komunikacji.",
                    "en" => "Managing operational airport equipment, including navigation systems, surveillance, and communication."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24943,
                "name" => json_encode([
                    "pl" => "Utrzymywanie sprawności technicznej urządzeń lotniskowych, przeprowadzanie przeglądów i konserwacji sprzętu.",
                    "en" => "Maintaining the operational efficiency of airport equipment, performing inspections and maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24944,
                "name" => json_encode([
                    "pl" => "Nadzór nad systemami bezpieczeństwa lotniska, zapewnienie ich sprawności w sytuacjach kryzysowych.",
                    "en" => "Supervising the airport's security systems, ensuring their functionality in emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24945,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań technicznych na lotnisku, zapewnienie wsparcia dla innych służb operacyjnych.",
                    "en" => "Coordinating technical activities at the airport, providing support to other operational services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24946,
                "name" => json_encode([
                    "pl" => "Reagowanie na awarie i usuwanie usterkek w systemach i urządzeniach lotniskowych.",
                    "en" => "Responding to malfunctions and repairing faults in airport systems and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24947,
                "name" => json_encode([
                    "pl" => "Szkolenie personelu w zakresie obsługi urządzeń operacyjnych oraz procedur awaryjnych.",
                    "en" => "Training staff in the operation of operational equipment and emergency procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_KONTROLERZY_RUCHU_LOTNICZEGO_I_PERSONEL_POKREWNY = [

            [
                "id" => 24948,
                "name" => json_encode([
                    "pl" => "Zarządzanie ruchem samolotów w powietrzu i na ziemi, zapewnienie bezpiecznego lądowania i startu.",
                    "en" => "Managing the movement of aircraft in the air and on the ground, ensuring safe landings and take-offs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24949,
                "name" => json_encode([
                    "pl" => "Kontrolowanie procedur startu i lądowania samolotów, zarządzanie sytuacjami awaryjnymi.",
                    "en" => "Controlling takeoff and landing procedures for aircraft, managing emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24950,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi służbami lotniczymi i kontrolą ruchu lotniczego, zapewnienie zgodności z procedurami.",
                    "en" => "Collaborating with other aviation services and air traffic control, ensuring compliance with procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24951,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli technicznych urządzeń nawigacyjnych, radarów, systemów radarowych.",
                    "en" => "Performing technical checks of navigational devices, radars, and radar systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24952,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją lotniczą, raportowanie o stanie ruchu lotniczego, komunikacja z załogami.",
                    "en" => "Managing aviation documentation, reporting on air traffic status, communicating with crews."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24953,
                "name" => json_encode([
                    "pl" => "Nadzór nad sytuacjami kryzysowymi i reakcja na zmiany w warunkach ruchu lotniczego.",
                    "en" => "Supervising emergency situations and responding to changes in air traffic conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNICY_URZADZEN_RUCHU_LOTNICZEGO = [

            [
                "id" => 24954,
                "name" => json_encode([
                    "pl" => "Instalowanie, konserwacja i naprawa urządzeń służących do zarządzania ruchem lotniczym.",
                    "en" => "Installing, maintaining, and repairing devices used to manage air traffic."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24955,
                "name" => json_encode([
                    "pl" => "Monitorowanie sprawności urządzeń, takich jak radary, systemy komunikacyjne i nawigacyjne.",
                    "en" => "Monitoring the functionality of devices such as radars, communication, and navigation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24956,
                "name" => json_encode([
                    "pl" => "Nadzór nad kalibracją urządzeń i ich synchronizowaniem z systemami zarządzania ruchem lotniczym.",
                    "en" => "Supervising calibration of devices and synchronizing them with air traffic management systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24957,
                "name" => json_encode([
                    "pl" => "Współpraca z kontrolerami ruchu lotniczego w zakresie diagnozowania problemów sprzętowych.",
                    "en" => "Collaborating with air traffic controllers to diagnose equipment issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24958,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów urządzeń nawigacyjnych i zapewnianie ich sprawności operacyjnej.",
                    "en" => "Conducting tests of navigational equipment and ensuring their operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24959,
                "name" => json_encode([
                    "pl" => "Reagowanie na awarie urządzeń, naprawianie usterek oraz wymiana komponentów w razie potrzeby.",
                    "en" => "Responding to device malfunctions, repairing faults, and replacing components as needed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MECHANIK_SILNIKÓW_LOTNICZYCH = [

            [
                "id" => 24960,
                "name" => json_encode([
                    "pl" => "Naprawa, konserwacja i diagnostyka silników lotniczych, zapewnianie ich sprawności operacyjnej.",
                    "en" => "Repair, maintenance, and diagnostics of aircraft engines, ensuring their operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24961,
                "name" => json_encode([
                    "pl" => "Wykonywanie przeglądów silników lotniczych zgodnie z procedurami i standardami bezpieczeństwa.",
                    "en" => "Performing engine overhauls according to procedures and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24962,
                "name" => json_encode([
                    "pl" => "Diagnozowanie usterek w silnikach lotniczych, wymiana uszkodzonych części oraz naprawa.",
                    "en" => "Diagnosing faults in aircraft engines, replacing damaged parts, and carrying out repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24963,
                "name" => json_encode([
                    "pl" => "Koordynowanie procesów montażu i demontażu silników lotniczych, zapewnienie zgodności z normami.",
                    "en" => "Coordinating the assembly and disassembly of aircraft engines, ensuring compliance with standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24964,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją serwisową silników, prowadzenie szczegółowych zapisów napraw i przeglądów.",
                    "en" => "Managing engine service documentation, maintaining detailed records of repairs and inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24965,
                "name" => json_encode([
                    "pl" => "Udział w testach sprawnościowych silników przed ich ponownym uruchomieniem i certyfikacją.",
                    "en" => "Participating in performance tests of engines before they are re-started and certified."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MECHANIK_WYPOSAŻENIA_LOTNICZEGO_STATKÓW_POWIETRZNYCH = [

            [
                "id" => 24966,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja wyposażenia lotniczego, w tym systemów hydraulicznych, elektrycznych i pneumatycznych.",
                    "en" => "Repair and maintenance of aircraft equipment, including hydraulic, electrical, and pneumatic systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24967,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i naprawa usterek w systemach pokładowych statków powietrznych.",
                    "en" => "Diagnosing and repairing faults in aircraft onboard systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24968,
                "name" => json_encode([
                    "pl" => "Zarządzanie instalacjami pokładowymi, kontrolowanie i monitorowanie ich wydajności.",
                    "en" => "Managing onboard installations, controlling and monitoring their performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24969,
                "name" => json_encode([
                    "pl" => "Sprawdzanie i wymiana komponentów wyposażenia lotniczego, w tym systemów awaryjnych i nawigacyjnych.",
                    "en" => "Inspecting and replacing components of aircraft equipment, including emergency and navigation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24970,
                "name" => json_encode([
                    "pl" => "Utrzymywanie zgodności z normami technicznymi i bezpieczeństwa podczas naprawy i konserwacji sprzętu lotniczego.",
                    "en" => "Maintaining compliance with technical and safety standards during repair and maintenance of aviation equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24971,
                "name" => json_encode([
                    "pl" => "Dokonywanie oceny stanu technicznego urządzeń pokładowych, przeprowadzanie ich testów i inspekcji.",
                    "en" => "Evaluating the technical condition of onboard devices, performing their tests and inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_MECHANICY_STATKÓW_POWIETRZNYCH_I_POKREWNI = [

            [
                "id" => 24972,
                "name" => json_encode([
                    "pl" => "Naprawa i konserwacja wszystkich systemów technicznych statków powietrznych, takich jak hydraulika, pneumatyka i elektronika.",
                    "en" => "Repair and maintenance of all technical systems of aircraft, such as hydraulics, pneumatics, and electronics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24973,
                "name" => json_encode([
                    "pl" => "Prowadzenie przeglądów technicznych statków powietrznych oraz systemów awaryjnych.",
                    "en" => "Conducting technical inspections of aircraft and emergency systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24974,
                "name" => json_encode([
                    "pl" => "Wymiana uszkodzonych lub zużytych części statków powietrznych, w tym silników, systemów awaryjnych i nawigacyjnych.",
                    "en" => "Replacing damaged or worn-out parts of aircraft, including engines, emergency systems, and navigation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24975,
                "name" => json_encode([
                    "pl" => "Kontrolowanie sprawności urządzeń pokładowych, monitorowanie ich pracy i wykrywanie awarii.",
                    "en" => "Monitoring the functionality of onboard equipment, overseeing their operation, and detecting malfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24976,
                "name" => json_encode([
                    "pl" => "Szkolenie personelu technicznego w zakresie obsługi statków powietrznych oraz nowych technologii.",
                    "en" => "Training technical staff on aircraft operations and new technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24977,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w zakresie utrzymania technicznego statków powietrznych.",
                    "en" => "Collaborating with other departments in the maintenance of aircraft."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MECHANIK_POKŁADOWY = [

            [
                "id" => 24978,
                "name" => json_encode([
                    "pl" => "Nadzór nad systemami pokładowymi statków, zarządzanie konserwacją i naprawami.",
                    "en" => "Supervising the onboard systems of vessels, managing maintenance and repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24979,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji urządzeń pokładowych i nadzorowanie ich sprawności.",
                    "en" => "Conducting inspections of onboard devices and overseeing their functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24980,
                "name" => json_encode([
                    "pl" => "Wykonywanie drobnych napraw urządzeń na pokładzie statku oraz ich konserwację.",
                    "en" => "Performing minor repairs of onboard equipment and maintaining them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24981,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi członkami załogi w zakresie zapewnienia bezpieczeństwa i sprawności urządzeń na pokładzie.",
                    "en" => "Collaborating with other crew members to ensure safety and the functionality of onboard devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24982,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją serwisową urządzeń pokładowych, raportowanie o wykonanych naprawach.",
                    "en" => "Managing service documentation of onboard devices, reporting on repairs performed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24983,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku i organizacji w warsztacie na pokładzie statku.",
                    "en" => "Maintaining order and organization in the workshop onboard the vessel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATOR_TANKOWANIA_STATKÓW_POWIETRZNYCH = [

            [
                "id" => 24984,
                "name" => json_encode([
                    "pl" => "Zarządzanie procesem tankowania statków powietrznych, zapewnianie zgodności z normami bezpieczeństwa.",
                    "en" => "Managing the refueling process of aircraft, ensuring compliance with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24985,
                "name" => json_encode([
                    "pl" => "Kontrolowanie jakości paliwa oraz monitorowanie parametrów technicznych podczas tankowania.",
                    "en" => "Controlling fuel quality and monitoring technical parameters during refueling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24986,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem załogi lotniczej w zakresie przygotowania statku do lotu.",
                    "en" => "Collaborating with the flight crew in preparing the aircraft for takeoff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24987,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje awaryjne związane z tankowaniem paliwa, zapobieganie zagrożeniom.",
                    "en" => "Responding to emergency situations related to refueling, preventing hazards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24988,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją tankowania, raportowanie o przeprowadzonych operacjach.",
                    "en" => "Managing refueling documentation, reporting on conducted operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24989,
                "name" => json_encode([
                    "pl" => "Kontrolowanie sprawności urządzeń do tankowania, zapewnienie ich działania w pełnej gotowości.",
                    "en" => "Monitoring the functionality of refueling equipment, ensuring their operation is in full readiness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PILOT_SAMOLOTOWY_ZAWODOWY_LINIOWY = [

            [
                "id" => 24990,
                "name" => json_encode([
                    "pl" => "Nawigowanie samolotem, kontrolowanie kursu, wysokości i prędkości zgodnie z planem lotu.",
                    "en" => "Navigating the aircraft, controlling course, altitude, and speed according to the flight plan."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24991,
                "name" => json_encode([
                    "pl" => "Wykonywanie operacji startu i lądowania, monitorowanie sytuacji na pokładzie samolotu.",
                    "en" => "Performing takeoff and landing operations, monitoring the situation onboard the aircraft."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24992,
                "name" => json_encode([
                    "pl" => "Reagowanie na zmiany warunków pogodowych, dostosowywanie parametrów lotu do bieżącej sytuacji.",
                    "en" => "Responding to changes in weather conditions, adjusting flight parameters to current conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24993,
                "name" => json_encode([
                    "pl" => "Koordynowanie pracy z załogą pokładową w zakresie obsługi pasażerów i bezpieczeństwa.",
                    "en" => "Coordinating with the cabin crew on passenger service and safety matters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24994,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów technicznych samolotu przed startem oraz monitorowanie stanu technicznego urządzeń podczas lotu.",
                    "en" => "Conducting pre-flight aircraft inspections and monitoring the technical condition of equipment during flight."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24995,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją lotniczą, raportowanie o stanie samolotu i przebiegu lotu.",
                    "en" => "Managing aviation documentation, reporting on the aircraft's condition and flight progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PILOT_STEROWCOWY_ZAWODOWY = [

            [
                "id" => 24996,
                "name" => json_encode([
                    "pl" => "Kontrolowanie kursu sterowca, wysokości lotu oraz prędkości, zapewnianie bezpieczeństwa na pokładzie.",
                    "en" => "Controlling the course of the airship, altitude, and speed, ensuring safety onboard."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24997,
                "name" => json_encode([
                    "pl" => "Wykonywanie manewrów z użyciem sterowca, w tym startów, lądowań oraz lotów w trudnych warunkach atmosferycznych.",
                    "en" => "Performing maneuvers with the airship, including takeoffs, landings, and flights in difficult weather conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24998,
                "name" => json_encode([
                    "pl" => "Współpraca z załogą w zakresie przeprowadzania operacji specjalnych, takich jak transport czy obserwacja.",
                    "en" => "Collaborating with the crew in performing special operations such as transport or surveillance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 24999,
                "name" => json_encode([
                    "pl" => "Nadzór nad technologią napędu sterowca i jego systemami technicznymi, zapewnienie ich sprawności operacyjnej.",
                    "en" => "Supervising the airship's propulsion technology and its technical systems, ensuring operational efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25000,
                "name" => json_encode([
                    "pl" => "Reagowanie na zmieniające się warunki atmosferyczne oraz kontrolowanie urządzeń pokładowych w trakcie lotu.",
                    "en" => "Responding to changing weather conditions and controlling onboard devices during the flight."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25001,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją lotów, raportowanie o stanie technicznym sterowca oraz przebiegu operacji.",
                    "en" => "Managing flight documentation, reporting on the airship's technical condition and operational progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PILOT_SZYBOWCOWY = [

            [
                "id" => 25002,
                "name" => json_encode([
                    "pl" => "Nawigowanie szybowcem, kontrolowanie lotu na podstawie warunków atmosferycznych i sił aerodynamicznych.",
                    "en" => "Navigating the glider, controlling flight based on weather conditions and aerodynamic forces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25003,
                "name" => json_encode([
                    "pl" => "Wykonywanie manewrów szybowcem, w tym startów, lądowań i lotów na różnych wysokościach.",
                    "en" => "Performing maneuvers with the glider, including takeoffs, landings, and flights at different altitudes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25004,
                "name" => json_encode([
                    "pl" => "Reagowanie na zmieniające się warunki atmosferyczne, dostosowywanie technik lotu do warunków.",
                    "en" => "Responding to changing weather conditions, adjusting flying techniques accordingly."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25005,
                "name" => json_encode([
                    "pl" => "Monitorowanie sprawności technicznej szybowca, przeprowadzanie inspekcji przed lotem.",
                    "en" => "Monitoring the technical condition of the glider, conducting pre-flight inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25006,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją lotniczą, raportowanie o przebiegu lotu i stanie technicznym szybowca.",
                    "en" => "Managing aviation documentation, reporting on flight progress and the glider's technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25007,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pilotażami w zakresie bezpieczeństwa, procedur startu i lądowania.",
                    "en" => "Collaborating with other pilots regarding safety, takeoff, and landing procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PILOT_SMIGLOWCOWY_ZAWODOWY_LINIOWY = [

            [
                "id" => 25008,
                "name" => json_encode([
                    "pl" => "Nawigowanie śmigłowcem, kontrolowanie kursu, wysokości i prędkości, zapewnianie bezpieczeństwa na pokładzie.",
                    "en" => "Navigating the helicopter, controlling course, altitude, and speed, ensuring onboard safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25009,
                "name" => json_encode([
                    "pl" => "Wykonywanie operacji startu i lądowania, w tym lądowanie na trudnych nawierzchniach oraz w warunkach ograniczonej widoczności.",
                    "en" => "Performing takeoff and landing operations, including landing on difficult surfaces and in limited visibility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25010,
                "name" => json_encode([
                    "pl" => "Koordynowanie pracy z załogą w zakresie obsługi pasażerów oraz zarządzanie sytuacjami awaryjnymi.",
                    "en" => "Coordinating with the crew on passenger service and managing emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25011,
                "name" => json_encode([
                    "pl" => "Reagowanie na zmiany warunków pogodowych, dostosowywanie parametrów lotu w zależności od sytuacji.",
                    "en" => "Responding to changing weather conditions, adjusting flight parameters depending on the situation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25012,
                "name" => json_encode([
                    "pl" => "Utrzymywanie dokumentacji operacyjnej, raportowanie o stanie technicznym śmigłowca oraz przebiegu misji.",
                    "en" => "Maintaining operational documentation, reporting on the helicopter's technical condition and mission progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25013,
                "name" => json_encode([
                    "pl" => "Współpraca z kontrolą ruchu lotniczego i innymi służbami lotniczymi w zakresie planowania lotów.",
                    "en" => "Collaborating with air traffic control and other aviation services in flight planning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PILOT_WIATRAKOWCOWY_ZAWODOWY = [

            [
                "id" => 25014,
                "name" => json_encode([
                    "pl" => "Nawigowanie wiatrakowcem, kontrolowanie kursu, wysokości i prędkości w różnych warunkach atmosferycznych.",
                    "en" => "Navigating the autogyro, controlling course, altitude, and speed in various weather conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25015,
                "name" => json_encode([
                    "pl" => "Wykonywanie startów, lądowań oraz manewrów w trudnych warunkach pogodowych.",
                    "en" => "Performing takeoffs, landings, and maneuvers in challenging weather conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25016,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków atmosferycznych, dostosowanie parametrów lotu do zmieniającej się pogody.",
                    "en" => "Monitoring weather conditions, adjusting flight parameters to changing weather."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25017,
                "name" => json_encode([
                    "pl" => "Koordynowanie pracy z zespołem pokładowym i zapewnienie bezpieczeństwa na pokładzie wiatrakowca.",
                    "en" => "Coordinating work with the crew and ensuring safety on board the autogyro."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25018,
                "name" => json_encode([
                    "pl" => "Reagowanie na zmieniające się warunki nawigacyjne, dostosowywanie technik pilotażu do nowych warunków.",
                    "en" => "Responding to changing navigational conditions, adjusting piloting techniques to new conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25019,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją operacyjną, raportowanie o stanie technicznym wiatrakowca oraz przebiegu misji.",
                    "en" => "Managing operational documentation, reporting on the technical condition of the autogyro and mission progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SKOCZEK_SPADOCHRONOWY = [

            [
                "id" => 25020,
                "name" => json_encode([
                    "pl" => "Przygotowanie do skoku spadochronowego, ocena warunków pogodowych i zaplanowanie skoku.",
                    "en" => "Preparing for the parachute jump, assessing weather conditions, and planning the jump."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25021,
                "name" => json_encode([
                    "pl" => "Wykonywanie skoków spadochronowych z różnych wysokości, kontrolowanie techniki lądowania.",
                    "en" => "Performing parachute jumps from various altitudes, controlling landing techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25022,
                "name" => json_encode([
                    "pl" => "Reagowanie na zmienne warunki atmosferyczne podczas skoku, dostosowanie skoku do sytuacji.",
                    "en" => "Responding to changing weather conditions during the jump, adjusting the jump to the situation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25023,
                "name" => json_encode([
                    "pl" => "Zarządzanie sprzętem spadochronowym, kontrolowanie jego sprawności przed i po skoku.",
                    "en" => "Managing parachute equipment, monitoring its functionality before and after the jump."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25024,
                "name" => json_encode([
                    "pl" => "Wykonywanie skoków w ramach szkolenia innych skoczków spadochronowych i wspieranie w procesie nauki.",
                    "en" => "Performing jumps as part of training for other parachutists and assisting in the learning process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25025,
                "name" => json_encode([
                    "pl" => "Utrzymywanie dokumentacji skoków, prowadzenie zapisów dotyczących wyników i procedur.",
                    "en" => "Maintaining jump documentation, keeping records of results and procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MECHANIK_LOTNICZY_OBSLUGI_TECHNICZNEJ = [

            [
                "id" => 25026,
                "name" => json_encode([
                    "pl" => "Konserwacja, naprawa i diagnostyka urządzeń technicznych statków powietrznych, w tym silników i systemów awaryjnych.",
                    "en" => "Maintenance, repair, and diagnostics of aircraft technical devices, including engines and emergency systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25027,
                "name" => json_encode([
                    "pl" => "Koordynowanie prac związanych z przygotowaniem samolotu do lotu, zapewnienie sprawności technicznej.",
                    "en" => "Coordinating tasks related to preparing the aircraft for flight, ensuring technical functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25028,
                "name" => json_encode([
                    "pl" => "Wykonywanie przeglądów technicznych statków powietrznych, usuwanie usterek oraz wymiana części.",
                    "en" => "Conducting technical inspections of aircraft, troubleshooting, and replacing parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25029,
                "name" => json_encode([
                    "pl" => "Szkolenie personelu technicznego z zakresu obsługi technicznej samolotów.",
                    "en" => "Training technical staff in aircraft maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25030,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje awaryjne w trakcie lotu, monitorowanie sprzętu pokładowego.",
                    "en" => "Responding to emergency situations during flight, monitoring onboard equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25031,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji serwisowej, raportowanie wykonanych napraw i przeprowadzonych przeglądów.",
                    "en" => "Maintaining service documentation, reporting repairs performed and inspections conducted."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PILOT_PIONOWZLOTU = [

            [
                "id" => 25032,
                "name" => json_encode([
                    "pl" => "Prowadzenie lotów pionowzlotem, kontrolowanie wysokości, prędkości i kursu w trakcie operacji lotniczych.",
                    "en" => "Flying the tiltrotor, controlling altitude, speed, and course during aerial operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25033,
                "name" => json_encode([
                    "pl" => "Wykonywanie manewrów startu i lądowania pionowzlotu w trudnych warunkach terenowych.",
                    "en" => "Performing takeoff and landing maneuvers for the tiltrotor in difficult terrain conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25034,
                "name" => json_encode([
                    "pl" => "Zarządzanie systemami napędu pionowzlotu oraz kontrolowanie jego sprawności w trakcie lotu.",
                    "en" => "Managing the tiltrotor's propulsion systems and monitoring its functionality during flight."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25035,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi służbami lotniczymi w zakresie operacji na terenie oraz monitorowania sytuacji w powietrzu.",
                    "en" => "Cooperating with other aviation services in ground operations and monitoring the aerial situation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25036,
                "name" => json_encode([
                    "pl" => "Dokonywanie oceny warunków lotu, dostosowywanie technik lotu do aktualnych warunków pogodowych.",
                    "en" => "Evaluating flight conditions, adjusting flight techniques to current weather conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25037,
                "name" => json_encode([
                    "pl" => "Zarządzanie dokumentacją lotów, raportowanie o stanie technicznym pionowzlotu oraz przebiegu misji.",
                    "en" => "Managing flight documentation, reporting on the tiltrotor's technical condition and mission progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_PILOCI_STATKÓW_POWIETRZNYCH_I_PERSONEL_POKREWNY = [

            [
                "id" => 25038,
                "name" => json_encode([
                    "pl" => "Zarządzanie lotem samolotów, śmigłowców, wiatrakowców oraz innych statków powietrznych w trudnych warunkach.",
                    "en" => "Managing flights of airplanes, helicopters, autogyros, and other aircraft in challenging conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25039,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem pokładowym w zakresie bezpieczeństwa, zarządzanie dokumentacją operacyjną.",
                    "en" => "Cooperating with the onboard team regarding safety, managing operational documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25040,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów technicznych statków powietrznych, monitorowanie ich stanu technicznego.",
                    "en" => "Conducting technical inspections of aircraft, monitoring their technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25041,
                "name" => json_encode([
                    "pl" => "Koordynowanie startów, lądowań oraz innych operacji lotniczych, zapewnianie zgodności z normami bezpieczeństwa.",
                    "en" => "Coordinating takeoffs, landings, and other aerial operations, ensuring compliance with safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25042,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje awaryjne i podejmowanie odpowiednich działań w trakcie lotu.",
                    "en" => "Responding to emergency situations and taking appropriate actions during the flight."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 25043,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków atmosferycznych i dostosowywanie lotu w zależności od aktualnych informacji.",
                    "en" => "Monitoring weather conditions and adjusting the flight according to current information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];

        DB::table('detail_projects')->insert(array_merge(
            $POZOSTALI_KIEROWNICY_DO_SPRAW_LOGISTYKI_I_DZIEDZIN_POKREWNYCH,
            $KIEROWNIK_DO_SPRAW_HANDLU_ZAGRANICZNEGO,
            $KIEROWNIK_DO_SPRAW_OPTYMALIZACJI_ZASOBÓW,
            $KIEROWNIK_DO_SPRAW_TRANSPORTU_RUROCIĄGOWEGO,
            $KIEROWNIK_DO_SPRAW_ZARZĄDZANIA_FLOTĄ_SAMOCHODOWĄ,
            $AGENT_CELNY,
            $AGENT_KLARUJĄCY,
            $EKSPLOATATOR_PORTU,
            $PRACOWNIK_DZIAŁU_LOGISTYKI,
            $SPEDYTOR,
            $TECHNIK_EKSPLOATACJI_PORTÓW_I_TERMINALI,
            $TECHNIK_LOGISTYK,
            $TECHNIK_SPEDYTOR,
            $DORADCA_DO_SPRAW_BEZPIECZEŃSTWA_PRZEWOZU_KOLEJĄ_TOWARÓW_NIEBEZPIECZNYCH,
            $POZOSTALI_SPEDYTORZY_I_POKREWNI,
            $INŻYNIER_TRANSPORTU_DROGOWEGO,
            $DYSPONENT_TRANSPORTU_SAMOCHODOWEGO,
            $EKSPEDYTOR,
            $INŻYNIER_TRANSPORTU_KOLEJOWEGO,
            $POZOSTALI_URBANISTY_I_INŻYNIEROWIE_RUCHU_DROGOWEGO,
            $ORGANIZATOR_TRANSPORTU_DROGOWEGO,
            $TECHNIK_TRANSPORTU_DROGOWEGO,
            $MAKLER_MORSKI,
            $POZOSTALI_PRACOWNICY_DO_SPRAW_TRANSPORTU,
            $SPECJALISTA_DO_SPRAW_PRZEWOZÓW_INTERMODALNYCH,
            $AGENT_DO_SPRAW_ZAKUPÓW,
            $ZAOPATRZENIOWIEC,
            $POZOSTALI_ZAOPATRZENIOWCE,
            $KURIER_MOTOCYKLOWY,
            $POZOSTALI_KIEROWCY_MOTOCYKLI,
            $EKSPEDIENT_WYPOŻYCZALNI,
            $MAGAZYNIER,
            $PRACOWNIK_PUNKTU_SKUPU,
            $PRACOWNIK_SORTOWANIA_PRZESYŁEK_I_TOWARÓW,
            $POZOSTALI_MAGAZYNIERZY_I_POKREWNI,
            $MAGAZYNIER_LOGISTYK,
            $KIEROWCY_OPERATORZY_WÓZKÓW_JEZDNIOWYCH,
            $POZOSTALI_LISTONOSZE_I_POKREWNI,
            $ASYSTENT_USŁUG_POCZTOWYCH,
            $TECHNIK_USŁUG_POCZTOWYCH_I_FINANSOWYCH,
            $KIEROWCA_CIĄGNIKA_SIODŁOWEGO,
            $KIEROWCA_SAMOCHODU_CIĘŻAROWEGO,
            $POZOSTALI_KIEROWCY_SAMOCHODÓW_CIĘŻAROWYCH,
            $MASZYNISTA_DOKU,
            $MASZYNISTA_GÓRNICZYCH_MASZYN_WYCIĄGOWYCH,
            $MASZYNISTA_KOLEI_LINOWYCH_WYCIĄGÓW_NARCIARSKICH_I_ZJEŻDŻALNI_GRAWITACYJNYCH,
            $MASZYNISTA_OBSLUGUJĄCY_URZĄDZENIA_DO_NAPEŁNIANIA_I_OPRÓŻNIANIA_ZBIORNIKÓW,
            $MASZYNISTA_SPECJALISTYCZNYCH_DŹWIGNIC_KOLEJOWYCH,
            $OPERATOR_DŹWIGNIC_LINOTOROWYCH,
            $OPERATOR_MECHANIK_WYCIĄGARKI_SZYBOWCOWEJ,
            $OPERATOR_MOSTU_ZWODZONEGO,
            $OPERATOR_PRZENOSNIKÓW,
            $OPERATOR_PRZENOSNIKÓW_TAŚMOWYCH,
            $OPERATOR_SUWNIC,
            $OPERATOR_ŚLUZY_JAZU_ZAPORY_I_POMPOWNI,
            $OPERATOR_URZĄDZEŃ_ŁADUNKOWYCH_SILOSU,
            $OPERATOR_WIEŻOWY_PRZENOŚNIKA_TAŚMOWEGO,
            $OPERATOR_WYWROTNIC_WAGONOWYCH,
            $OPERATOR_ŻURAWIA_JEZDNIOWEGO,
            $OPERATOR_ŻURAWIA_WIEŻOWEGO,
            $POZOSTALI_MASZYNIŚCI_I_OPERATORZY_MASZYN_I_URZĄDZEŃ_DŹWIGOWO_TRANSPORTOWYCH_I_POKREWNI,
            $KIEROWNIK_POCIĄGU,
            $KONDUKTOR,
            $KONDUKTOR_KOLEI_LINOWEJ,
            $KONTROLER_BILETÓW,
            $KONWOJENT_KONDUKTOR_WAGONÓW_SPECJALNYCH,
            $REWIZOR_POCIĄGÓW,
            $POZOSTALI_KONDUKTORZY_I_POKREWNI,
            $TOROMISTRZ,
            $DRÓŻNIK_PRZEJAZDOWY,
            $DYSPONSTER_RUCHU_METRA,
            $DYŻURNY_RUCHU_I_STACJI_METRA,
            $DYŻURNY_RUCHU,
            $MANEWROWY,
            $MANEWROWY_METRA,
            $NASTAWNICZY,
            $OPERATOR_POCIĄGOWY,
            $REWIDENT_TABORU,
            $USTAWIACZ,
            $ZWROTNICZY,
            $DYSPONENT_RUCHU_KOLEJOWEGO,
            $POZOSTALI_DYŻURNI_RUCHU_MANEWROWI_I_POKREWNI,
            $TECHNIK_AUTOMATYK_STEROWANIA_RUCHEM_KOLEJOWYM,
            $DIAGNOSTA_KOLEJOWY,
            $TECHNIK_TRANSPORTU_KOLEJOWEGO,
            $ODPRAWIACZ_POCIĄGÓW,
            $KONSTRUKTOR_ROZKŁADÓW_JAZDY,
            $DRÓŻNIK_OBCHODOWY,
            $AUTOMATYK_STEROWANIA_RUCHEM_KOLEJOWYM,
            $POMOCNICZY_ROBOTNIK_TOROWY,
            $KIEROWCA_DREZYNY_I_WÓZKA_MOTOROWEGO,
            $KIEROWCA_LOKOMOTYWY_SPALINOWEJ,
            $MASZYNISTA_POCIĄGU_METRA,
            $MASZYNISTA,
            $MASZYNISTA_POMOCNICZYCH_POJAZDÓW_KOLEJOWYCH_METRA,
            $PROWADZĄCY_MASZYNY_DO_KOLEJOWYCH_ROBOT_BUDOWLANYCH,
            $POZOSTALI_MASZYNIŚCI_KOLEJOWI_I_METRA,
            $MECHANIK_STATKOWY_ZEGLUGI_SRODLADOWEJ,
            $OFICER_AUTOMATYK_OKRETOWY,
            $OFICER_MECHANIK,
            $STERMOTORZYSTA_ZEGLUGI_SRODLADOWEJ,
            $TECHNIK_MECHANIK_OKRETOWY,
            $POZOSTALI_PRACOWNICY_SŁUŻB_TECHNICZNYCH_ŻEGLUGI,
            $FLISAK_RETMAN,
            $LATARNIK,
            $MARYNARZ_STATKU_MORSKIEGO,
            $MARYNARZ_ZEGLUGI_SRODLADOWEJ,
            $STERNIK_ZEGLUGI_SRODLADOWEJ,
            $BOSMAN_ZEGLUGI_SRODLADOWEJ,
            $PRZEWOŹNIK_ZEGLUGI_SRODLADOWEJ,
            $POZOSTALI_MARYNARZE_I_POKREWNI,
            $INSPEKTOR_BEZPIECZEŃSTWA_ŻEGLUGI,
            $KAPITAN_STATKU_MORSKIEGO,
            $KAPITAN_ZEGLUGI_SRODLADOWEJ,
            $KAPITAN_ZEGLUGI_PRZYBRZEŻNEJ,
            $OFICER_POKŁADOWY,
            $OFICER_PORTU,
            $OBSERWATOR_RADAROWY_ZEGLUGI_SRODLADOWEJ,
            $PILOT_ZEGLUGI_SRODLADOWEJ,
            $TECHNIK_NAWIGATOR_MORSKI,
            $TECHNIK_ZEGLUGI_SRODLADOWEJ,
            $SZYPER,
            $POZOSTALI_OFICEROWIE_POKŁADOWI_PILOCI_ZEGLUGI_I_POKREWNI,
            $MARYNARZ_MOTORZYSTA_ZEGLUGI_SRODLADOWEJ,
            $DYSPONENT_LOTNICZY,
            $INFORMATOR_SLUZBY_INFORMACJI_POWIETRZNEJ,
            $KONTROLER_RUCHU_LOTNICZEGO,
            $INFORMATOR_LOTNISKOWEJ_SLUZBY_INFORMACJI_POWIETRZNEJ,
            $TECHNIK_LOTNISKOWYCH_SLUZB_OPERACYJNYCH,
            $POZOSTALI_KONTROLERZY_RUCHU_LOTNICZEGO_I_PERSONEL_POKREWNY,
            $TECHNICY_URZADZEN_RUCHU_LOTNICZEGO,
            $MECHANIK_SILNIKÓW_LOTNICZYCH,
            $MECHANIK_WYPOSAŻENIA_LOTNICZEGO_STATKÓW_POWIETRZNYCH,
            $POZOSTALI_MECHANICY_STATKÓW_POWIETRZNYCH_I_POKREWNI,
            $MECHANIK_POKŁADOWY,
            $OPERATOR_TANKOWANIA_STATKÓW_POWIETRZNYCH,
            $PILOT_SAMOLOTOWY_ZAWODOWY_LINIOWY,
            $PILOT_STEROWCOWY_ZAWODOWY,
            $PILOT_SZYBOWCOWY,
            $PILOT_SMIGLOWCOWY_ZAWODOWY_LINIOWY,
            $PILOT_WIATRAKOWCOWY_ZAWODOWY,
            $SKOCZEK_SPADOCHRONOWY,
            $MECHANIK_LOTNICZY_OBSLUGI_TECHNICZNEJ,
            $PILOT_PIONOWZLOTU,
            $POZOSTALI_PILOCI_STATKÓW_POWIETRZNYCH_I_PERSONEL_POKREWNY,


        ));

        Category::whereId('1594')->first()->detailprojects()->attach(collect($POZOSTALI_KIEROWNICY_DO_SPRAW_LOGISTYKI_I_DZIEDZIN_POKREWNYCH)->pluck('id')->toArray());
        Category::whereId('1595')->first()->detailprojects()->attach(collect($KIEROWNIK_DO_SPRAW_HANDLU_ZAGRANICZNEGO)->pluck('id')->toArray());
        Category::whereId('1596')->first()->detailprojects()->attach(collect($KIEROWNIK_DO_SPRAW_OPTYMALIZACJI_ZASOBÓW)->pluck('id')->toArray());
        Category::whereId('1597')->first()->detailprojects()->attach(collect($KIEROWNIK_DO_SPRAW_TRANSPORTU_RUROCIĄGOWEGO)->pluck('id')->toArray());
        Category::whereId('1598')->first()->detailprojects()->attach(collect($KIEROWNIK_DO_SPRAW_ZARZĄDZANIA_FLOTĄ_SAMOCHODOWĄ)->pluck('id')->toArray());
        Category::whereId('1602')->first()->detailprojects()->attach(collect($AGENT_CELNY)->pluck('id')->toArray());
        Category::whereId('1603')->first()->detailprojects()->attach(collect($AGENT_KLARUJĄCY)->pluck('id')->toArray());
        Category::whereId('1604')->first()->detailprojects()->attach(collect($EKSPLOATATOR_PORTU)->pluck('id')->toArray());
        Category::whereId('1605')->first()->detailprojects()->attach(collect($PRACOWNIK_DZIAŁU_LOGISTYKI)->pluck('id')->toArray());
        Category::whereId('1606')->first()->detailprojects()->attach(collect($SPEDYTOR)->pluck('id')->toArray());
        Category::whereId('1607')->first()->detailprojects()->attach(collect($TECHNIK_EKSPLOATACJI_PORTÓW_I_TERMINALI)->pluck('id')->toArray());
        Category::whereId('1608')->first()->detailprojects()->attach(collect($TECHNIK_LOGISTYK)->pluck('id')->toArray());
        Category::whereId('1609')->first()->detailprojects()->attach(collect($TECHNIK_SPEDYTOR)->pluck('id')->toArray());
        Category::whereId('1610')->first()->detailprojects()->attach(collect($DORADCA_DO_SPRAW_BEZPIECZEŃSTWA_PRZEWOZU_KOLEJĄ_TOWARÓW_NIEBEZPIECZNYCH)->pluck('id')->toArray());
        Category::whereId('1611')->first()->detailprojects()->attach(collect($POZOSTALI_SPEDYTORZY_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1612')->first()->detailprojects()->attach(collect($INŻYNIER_TRANSPORTU_DROGOWEGO)->pluck('id')->toArray());
        Category::whereId('1615')->first()->detailprojects()->attach(collect($DYSPONENT_TRANSPORTU_SAMOCHODOWEGO)->pluck('id')->toArray());
        Category::whereId('1616')->first()->detailprojects()->attach(collect($EKSPEDYTOR)->pluck('id')->toArray());
        Category::whereId('1617')->first()->detailprojects()->attach(collect($INŻYNIER_TRANSPORTU_KOLEJOWEGO)->pluck('id')->toArray());
        Category::whereId('1620')->first()->detailprojects()->attach(collect($POZOSTALI_URBANISTY_I_INŻYNIEROWIE_RUCHU_DROGOWEGO)->pluck('id')->toArray());
        Category::whereId('1621')->first()->detailprojects()->attach(collect($ORGANIZATOR_TRANSPORTU_DROGOWEGO)->pluck('id')->toArray());
        Category::whereId('1623')->first()->detailprojects()->attach(collect($TECHNIK_TRANSPORTU_DROGOWEGO)->pluck('id')->toArray());
        Category::whereId('1624')->first()->detailprojects()->attach(collect($MAKLER_MORSKI)->pluck('id')->toArray());
        Category::whereId('1625')->first()->detailprojects()->attach(collect($POZOSTALI_PRACOWNICY_DO_SPRAW_TRANSPORTU)->pluck('id')->toArray());
        Category::whereId('1626')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_PRZEWOZÓW_INTERMODALNYCH)->pluck('id')->toArray());
        Category::whereId('1629')->first()->detailprojects()->attach(collect($AGENT_DO_SPRAW_ZAKUPÓW)->pluck('id')->toArray());
        Category::whereId('1630')->first()->detailprojects()->attach(collect($ZAOPATRZENIOWIEC)->pluck('id')->toArray());
        Category::whereId('1631')->first()->detailprojects()->attach(collect($POZOSTALI_ZAOPATRZENIOWCE)->pluck('id')->toArray());
        Category::whereId('1633')->first()->detailprojects()->attach(collect($KURIER_MOTOCYKLOWY)->pluck('id')->toArray());
        Category::whereId('1634')->first()->detailprojects()->attach(collect($POZOSTALI_KIEROWCY_MOTOCYKLI)->pluck('id')->toArray());
        Category::whereId('1640')->first()->detailprojects()->attach(collect($EKSPEDIENT_WYPOŻYCZALNI)->pluck('id')->toArray());
        Category::whereId('1642')->first()->detailprojects()->attach(collect($MAGAZYNIER)->pluck('id')->toArray());
        Category::whereId('1643')->first()->detailprojects()->attach(collect($PRACOWNIK_PUNKTU_SKUPU)->pluck('id')->toArray());
        Category::whereId('1644')->first()->detailprojects()->attach(collect($PRACOWNIK_SORTOWANIA_PRZESYŁEK_I_TOWARÓW)->pluck('id')->toArray());
        Category::whereId('1645')->first()->detailprojects()->attach(collect($POZOSTALI_MAGAZYNIERZY_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1646')->first()->detailprojects()->attach(collect($MAGAZYNIER_LOGISTYK)->pluck('id')->toArray());
        Category::whereId('1648')->first()->detailprojects()->attach(collect($KIEROWCY_OPERATORZY_WÓZKÓW_JEZDNIOWYCH)->pluck('id')->toArray());
        Category::whereId('1653')->first()->detailprojects()->attach(collect($POZOSTALI_LISTONOSZE_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1655')->first()->detailprojects()->attach(collect($ASYSTENT_USŁUG_POCZTOWYCH)->pluck('id')->toArray());
        Category::whereId('1656')->first()->detailprojects()->attach(collect($TECHNIK_USŁUG_POCZTOWYCH_I_FINANSOWYCH)->pluck('id')->toArray());
        Category::whereId('1665')->first()->detailprojects()->attach(collect($KIEROWCA_CIĄGNIKA_SIODŁOWEGO)->pluck('id')->toArray());
        Category::whereId('1666')->first()->detailprojects()->attach(collect($KIEROWCA_SAMOCHODU_CIĘŻAROWEGO)->pluck('id')->toArray());
        Category::whereId('1667')->first()->detailprojects()->attach(collect($POZOSTALI_KIEROWCY_SAMOCHODÓW_CIĘŻAROWYCH)->pluck('id')->toArray());
        Category::whereId('1676')->first()->detailprojects()->attach(collect($MASZYNISTA_DOKU)->pluck('id')->toArray());
        Category::whereId('1677')->first()->detailprojects()->attach(collect($MASZYNISTA_GÓRNICZYCH_MASZYN_WYCIĄGOWYCH)->pluck('id')->toArray());
        Category::whereId('1678')->first()->detailprojects()->attach(collect($MASZYNISTA_KOLEI_LINOWYCH_WYCIĄGÓW_NARCIARSKICH_I_ZJEŻDŻALNI_GRAWITACYJNYCH)->pluck('id')->toArray());
        Category::whereId('1679')->first()->detailprojects()->attach(collect($MASZYNISTA_OBSLUGUJĄCY_URZĄDZENIA_DO_NAPEŁNIANIA_I_OPRÓŻNIANIA_ZBIORNIKÓW)->pluck('id')->toArray());
        Category::whereId('1680')->first()->detailprojects()->attach(collect($MASZYNISTA_SPECJALISTYCZNYCH_DŹWIGNIC_KOLEJOWYCH)->pluck('id')->toArray());
        Category::whereId('1681')->first()->detailprojects()->attach(collect($OPERATOR_DŹWIGNIC_LINOTOROWYCH)->pluck('id')->toArray());
        Category::whereId('1682')->first()->detailprojects()->attach(collect($OPERATOR_MECHANIK_WYCIĄGARKI_SZYBOWCOWEJ)->pluck('id')->toArray());
        Category::whereId('1683')->first()->detailprojects()->attach(collect($OPERATOR_MOSTU_ZWODZONEGO)->pluck('id')->toArray());
        Category::whereId('1684')->first()->detailprojects()->attach(collect($OPERATOR_PRZENOSNIKÓW)->pluck('id')->toArray());
        Category::whereId('1685')->first()->detailprojects()->attach(collect($OPERATOR_PRZENOSNIKÓW_TAŚMOWYCH)->pluck('id')->toArray());
        Category::whereId('1686')->first()->detailprojects()->attach(collect($OPERATOR_SUWNIC)->pluck('id')->toArray());
        Category::whereId('1687')->first()->detailprojects()->attach(collect($OPERATOR_ŚLUZY_JAZU_ZAPORY_I_POMPOWNI)->pluck('id')->toArray());
        Category::whereId('1688')->first()->detailprojects()->attach(collect($OPERATOR_URZĄDZEŃ_ŁADUNKOWYCH_SILOSU)->pluck('id')->toArray());
        Category::whereId('1689')->first()->detailprojects()->attach(collect($OPERATOR_WIEŻOWY_PRZENOŚNIKA_TAŚMOWEGO)->pluck('id')->toArray());
        Category::whereId('1690')->first()->detailprojects()->attach(collect($OPERATOR_WYWROTNIC_WAGONOWYCH)->pluck('id')->toArray());
        Category::whereId('1691')->first()->detailprojects()->attach(collect($OPERATOR_ŻURAWIA_JEZDNIOWEGO)->pluck('id')->toArray());
        Category::whereId('1692')->first()->detailprojects()->attach(collect($OPERATOR_ŻURAWIA_WIEŻOWEGO)->pluck('id')->toArray());
        Category::whereId('1693')->first()->detailprojects()->attach(collect($POZOSTALI_MASZYNIŚCI_I_OPERATORZY_MASZYN_I_URZĄDZEŃ_DŹWIGOWO_TRANSPORTOWYCH_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1696')->first()->detailprojects()->attach(collect($KIEROWNIK_POCIĄGU)->pluck('id')->toArray());
        Category::whereId('1697')->first()->detailprojects()->attach(collect($KONDUKTOR)->pluck('id')->toArray());
        Category::whereId('1699')->first()->detailprojects()->attach(collect($KONTROLER_BILETÓW)->pluck('id')->toArray());
        Category::whereId('1700')->first()->detailprojects()->attach(collect($KONWOJENT_KONDUKTOR_WAGONÓW_SPECJALNYCH)->pluck('id')->toArray());
        Category::whereId('1701')->first()->detailprojects()->attach(collect($REWIZOR_POCIĄGÓW)->pluck('id')->toArray());
        Category::whereId('1702')->first()->detailprojects()->attach(collect($POZOSTALI_KONDUKTORZY_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1703')->first()->detailprojects()->attach(collect($TOROMISTRZ)->pluck('id')->toArray());
        Category::whereId('1705')->first()->detailprojects()->attach(collect($DRÓŻNIK_PRZEJAZDOWY)->pluck('id')->toArray());
        Category::whereId('1706')->first()->detailprojects()->attach(collect($DYSPONSTER_RUCHU_METRA)->pluck('id')->toArray());
        Category::whereId('1707')->first()->detailprojects()->attach(collect($DYŻURNY_RUCHU_I_STACJI_METRA)->pluck('id')->toArray());
        Category::whereId('1708')->first()->detailprojects()->attach(collect($DYŻURNY_RUCHU)->pluck('id')->toArray());
        Category::whereId('1709')->first()->detailprojects()->attach(collect($MANEWROWY)->pluck('id')->toArray());
        Category::whereId('1710')->first()->detailprojects()->attach(collect($MANEWROWY_METRA)->pluck('id')->toArray());
        Category::whereId('1711')->first()->detailprojects()->attach(collect($NASTAWNICZY)->pluck('id')->toArray());
        Category::whereId('1712')->first()->detailprojects()->attach(collect($OPERATOR_POCIĄGOWY)->pluck('id')->toArray());
        Category::whereId('1713')->first()->detailprojects()->attach(collect($REWIDENT_TABORU)->pluck('id')->toArray());
        Category::whereId('1714')->first()->detailprojects()->attach(collect($USTAWIACZ)->pluck('id')->toArray());
        Category::whereId('1715')->first()->detailprojects()->attach(collect($ZWROTNICZY)->pluck('id')->toArray());
        Category::whereId('1716')->first()->detailprojects()->attach(collect($DYSPONENT_RUCHU_KOLEJOWEGO)->pluck('id')->toArray());
        Category::whereId('1717')->first()->detailprojects()->attach(collect($POZOSTALI_DYŻURNI_RUCHU_MANEWROWI_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1718')->first()->detailprojects()->attach(collect($TECHNIK_AUTOMATYK_STEROWANIA_RUCHEM_KOLEJOWYM)->pluck('id')->toArray());
        Category::whereId('1721')->first()->detailprojects()->attach(collect($DIAGNOSTA_KOLEJOWY)->pluck('id')->toArray());
        Category::whereId('1722')->first()->detailprojects()->attach(collect($TECHNIK_TRANSPORTU_KOLEJOWEGO)->pluck('id')->toArray());
        Category::whereId('1723')->first()->detailprojects()->attach(collect($ODPRAWIACZ_POCIĄGÓW)->pluck('id')->toArray());
        Category::whereId('1724')->first()->detailprojects()->attach(collect($KONSTRUKTOR_ROZKŁADÓW_JAZDY)->pluck('id')->toArray());
        Category::whereId('1725')->first()->detailprojects()->attach(collect($DRÓŻNIK_OBCHODOWY)->pluck('id')->toArray());
        Category::whereId('1727')->first()->detailprojects()->attach(collect($AUTOMATYK_STEROWANIA_RUCHEM_KOLEJOWYM)->pluck('id')->toArray());
        Category::whereId('1728')->first()->detailprojects()->attach(collect($POMOCNICZY_ROBOTNIK_TOROWY)->pluck('id')->toArray());
        Category::whereId('1731')->first()->detailprojects()->attach(collect($KIEROWCA_DREZYNY_I_WÓZKA_MOTOROWEGO)->pluck('id')->toArray());
        Category::whereId('1732')->first()->detailprojects()->attach(collect($KIEROWCA_LOKOMOTYWY_SPALINOWEJ)->pluck('id')->toArray());
        Category::whereId('1733')->first()->detailprojects()->attach(collect($MASZYNISTA_POCIĄGU_METRA)->pluck('id')->toArray());
        Category::whereId('1734')->first()->detailprojects()->attach(collect($MASZYNISTA)->pluck('id')->toArray());
        Category::whereId('1735')->first()->detailprojects()->attach(collect($MASZYNISTA_POMOCNICZYCH_POJAZDÓW_KOLEJOWYCH_METRA)->pluck('id')->toArray());
        Category::whereId('1736')->first()->detailprojects()->attach(collect($PROWADZĄCY_MASZYNY_DO_KOLEJOWYCH_ROBOT_BUDOWLANYCH)->pluck('id')->toArray());
        Category::whereId('1741')->first()->detailprojects()->attach(collect($MECHANIK_STATKOWY_ZEGLUGI_SRODLADOWEJ)->pluck('id')->toArray());
        Category::whereId('1742')->first()->detailprojects()->attach(collect($OFICER_AUTOMATYK_OKRETOWY)->pluck('id')->toArray());
        Category::whereId('1743')->first()->detailprojects()->attach(collect($OFICER_MECHANIK)->pluck('id')->toArray());
        Category::whereId('1744')->first()->detailprojects()->attach(collect($STERMOTORZYSTA_ZEGLUGI_SRODLADOWEJ)->pluck('id')->toArray());
        Category::whereId('1745')->first()->detailprojects()->attach(collect($TECHNIK_MECHANIK_OKRETOWY)->pluck('id')->toArray());
        Category::whereId('1746')->first()->detailprojects()->attach(collect($POZOSTALI_PRACOWNICY_SŁUŻB_TECHNICZNYCH_ŻEGLUGI)->pluck('id')->toArray());
        Category::whereId('1748')->first()->detailprojects()->attach(collect($FLISAK_RETMAN)->pluck('id')->toArray());
        Category::whereId('1749')->first()->detailprojects()->attach(collect($LATARNIK)->pluck('id')->toArray());
        Category::whereId('1750')->first()->detailprojects()->attach(collect($MARYNARZ_STATKU_MORSKIEGO)->pluck('id')->toArray());
        Category::whereId('1751')->first()->detailprojects()->attach(collect($MARYNARZ_ZEGLUGI_SRODLADOWEJ)->pluck('id')->toArray());
        Category::whereId('1752')->first()->detailprojects()->attach(collect($STERNIK_ZEGLUGI_SRODLADOWEJ)->pluck('id')->toArray());
        Category::whereId('1753')->first()->detailprojects()->attach(collect($BOSMAN_ZEGLUGI_SRODLADOWEJ)->pluck('id')->toArray());
        Category::whereId('1754')->first()->detailprojects()->attach(collect($PRZEWOŹNIK_ZEGLUGI_SRODLADOWEJ)->pluck('id')->toArray());
        Category::whereId('1755')->first()->detailprojects()->attach(collect($POZOSTALI_MARYNARZE_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1758')->first()->detailprojects()->attach(collect($INSPEKTOR_BEZPIECZEŃSTWA_ŻEGLUGI)->pluck('id')->toArray());
        Category::whereId('1760')->first()->detailprojects()->attach(collect($KAPITAN_STATKU_MORSKIEGO)->pluck('id')->toArray());
        Category::whereId('1761')->first()->detailprojects()->attach(collect($KAPITAN_ZEGLUGI_SRODLADOWEJ)->pluck('id')->toArray());
        Category::whereId('1762')->first()->detailprojects()->attach(collect($KAPITAN_ZEGLUGI_PRZYBRZEŻNEJ)->pluck('id')->toArray());
        Category::whereId('1763')->first()->detailprojects()->attach(collect($OFICER_POKŁADOWY)->pluck('id')->toArray());
        Category::whereId('1764')->first()->detailprojects()->attach(collect($OFICER_PORTU)->pluck('id')->toArray());
        Category::whereId('1765')->first()->detailprojects()->attach(collect($OBSERWATOR_RADAROWY_ZEGLUGI_SRODLADOWEJ)->pluck('id')->toArray());
        Category::whereId('1767')->first()->detailprojects()->attach(collect($PILOT_ZEGLUGI_SRODLADOWEJ)->pluck('id')->toArray());
        Category::whereId('1768')->first()->detailprojects()->attach(collect($TECHNIK_NAWIGATOR_MORSKI)->pluck('id')->toArray());
        Category::whereId('1769')->first()->detailprojects()->attach(collect($TECHNIK_ZEGLUGI_SRODLADOWEJ)->pluck('id')->toArray());
        Category::whereId('1770')->first()->detailprojects()->attach(collect($SZYPER)->pluck('id')->toArray());
        Category::whereId('1771')->first()->detailprojects()->attach(collect($POZOSTALI_OFICEROWIE_POKŁADOWI_PILOCI_ZEGLUGI_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1774')->first()->detailprojects()->attach(collect($MARYNARZ_MOTORZYSTA_ZEGLUGI_SRODLADOWEJ)->pluck('id')->toArray());
        Category::whereId('1777')->first()->detailprojects()->attach(collect($DYSPONENT_LOTNICZY)->pluck('id')->toArray());
        Category::whereId('1778')->first()->detailprojects()->attach(collect($INFORMATOR_SLUZBY_INFORMACJI_POWIETRZNEJ)->pluck('id')->toArray());
        Category::whereId('1779')->first()->detailprojects()->attach(collect($KONTROLER_RUCHU_LOTNICZEGO)->pluck('id')->toArray());
        Category::whereId('1780')->first()->detailprojects()->attach(collect($INFORMATOR_LOTNISKOWEJ_SLUZBY_INFORMACJI_POWIETRZNEJ)->pluck('id')->toArray());
        Category::whereId('1781')->first()->detailprojects()->attach(collect($TECHNIK_LOTNISKOWYCH_SLUZB_OPERACYJNYCH)->pluck('id')->toArray());
        Category::whereId('1782')->first()->detailprojects()->attach(collect($POZOSTALI_KONTROLERZY_RUCHU_LOTNICZEGO_I_PERSONEL_POKREWNY)->pluck('id')->toArray());
        Category::whereId('1783')->first()->detailprojects()->attach(collect($TECHNICY_URZADZEN_RUCHU_LOTNICZEGO)->pluck('id')->toArray());
        Category::whereId('1785')->first()->detailprojects()->attach(collect($MECHANIK_SILNIKÓW_LOTNICZYCH)->pluck('id')->toArray());
        Category::whereId('1786')->first()->detailprojects()->attach(collect($MECHANIK_WYPOSAŻENIA_LOTNICZEGO_STATKÓW_POWIETRZNYCH)->pluck('id')->toArray());
        Category::whereId('1787')->first()->detailprojects()->attach(collect($POZOSTALI_MECHANICY_STATKÓW_POWIETRZNYCH_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('1788')->first()->detailprojects()->attach(collect($MECHANIK_POKŁADOWY)->pluck('id')->toArray());
        Category::whereId('1790')->first()->detailprojects()->attach(collect($OPERATOR_TANKOWANIA_STATKÓW_POWIETRZNYCH)->pluck('id')->toArray());
        Category::whereId('1792')->first()->detailprojects()->attach(collect($PILOT_SAMOLOTOWY_ZAWODOWY_LINIOWY)->pluck('id')->toArray());
        Category::whereId('1793')->first()->detailprojects()->attach(collect($PILOT_STEROWCOWY_ZAWODOWY)->pluck('id')->toArray());
        Category::whereId('1794')->first()->detailprojects()->attach(collect($PILOT_SZYBOWCOWY)->pluck('id')->toArray());
        Category::whereId('1795')->first()->detailprojects()->attach(collect($PILOT_SMIGLOWCOWY_ZAWODOWY_LINIOWY)->pluck('id')->toArray());
        Category::whereId('1796')->first()->detailprojects()->attach(collect($PILOT_WIATRAKOWCOWY_ZAWODOWY)->pluck('id')->toArray());
        Category::whereId('1797')->first()->detailprojects()->attach(collect($SKOCZEK_SPADOCHRONOWY)->pluck('id')->toArray());
        Category::whereId('1798')->first()->detailprojects()->attach(collect($MECHANIK_LOTNICZY_OBSLUGI_TECHNICZNEJ)->pluck('id')->toArray());
        Category::whereId('1799')->first()->detailprojects()->attach(collect($PILOT_PIONOWZLOTU)->pluck('id')->toArray());
        Category::whereId('1800')->first()->detailprojects()->attach(collect($POZOSTALI_PILOCI_STATKÓW_POWIETRZNYCH_I_PERSONEL_POKREWNY)->pluck('id')->toArray());
    }
}

