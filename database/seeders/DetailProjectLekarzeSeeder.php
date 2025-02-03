<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectLekarzeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $LEKARZE_BEZ_SPECJALIZACJI = [

            [
                "id" => 16055,
                "name" => json_encode([
                    "pl" => "Zbieranie szczegółowego wywiadu medycznego, uwzględniając historię chorób pacjenta, objawy, przyjmowane leki oraz styl życia.",
                    "en" => "Zbieranie szczegółowego wywiadu medycznego, uwzględniając historię chorób pacjenta, objawy, przyjmowane leki oraz styl życia."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16056,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie podstawowego badania fizykalnego, obejmującego pomiar ciśnienia krwi, temperatury, badanie układów ciała (np. oddechowego, pokarmowego).",
                    "en" => "Przeprowadzanie podstawowego badania fizykalnego, obejmującego pomiar ciśnienia krwi, temperatury, badanie układów ciała (np. oddechowego, pokarmowego)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16057,
                "name" => json_encode([
                    "pl" => "Ocena wyników badań i objawów oraz podejmowanie decyzji o dalszych krokach diagnostycznych lub terapeutycznych.",
                    "en" => "Ocena wyników badań i objawów oraz podejmowanie decyzji o dalszych krokach diagnostycznych lub terapeutycznych."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16058,
                "name" => json_encode([
                    "pl" => "Przepisywanie leków oraz monitorowanie reakcji pacjenta na leczenie.",
                    "en" => "Przepisywanie leków oraz monitorowanie reakcji pacjenta na leczenie."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16059,
                "name" => json_encode([
                    "pl" => "Zlecanie i interpretacja podstawowych badań laboratoryjnych (np. morfologia krwi, poziom glukozy) oraz badań obrazowych (RTG, USG).",
                    "en" => "Zlecanie i interpretacja podstawowych badań laboratoryjnych (np. morfologia krwi, poziom glukozy) oraz badań obrazowych (RTG, USG)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16060,
                "name" => json_encode([
                    "pl" => "Skierowanie pacjenta na konsultacje specjalistyczne, gdy wymaga tego stan zdrowia lub wymaga dodatkowej, specjalistycznej oceny.",
                    "en" => "Skierowanie pacjenta na konsultacje specjalistyczne, gdy wymaga tego stan zdrowia lub wymaga dodatkowej, specjalistycznej oceny."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16061,
                "name" => json_encode([
                    "pl" => "Rzetelne prowadzenie dokumentacji medycznej pacjentów, zapisując wyniki badań, diagnozy, zalecenia terapeutyczne i przebieg leczenia.",
                    "en" => "Rzetelne prowadzenie dokumentacji medycznej pacjentów, zapisując wyniki badań, diagnozy, zalecenia terapeutyczne i przebieg leczenia."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16062,
                "name" => json_encode([
                    "pl" => "Dbanie o zgodność dokumentacji z wymogami prawnymi i standardami zawodowymi.",
                    "en" => "Dbanie o zgodność dokumentacji z wymogami prawnymi i standardami zawodowymi."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16063,
                "name" => json_encode([
                    "pl" => "Podejmowanie natychmiastowych działań w stanach nagłych, takich jak zatrzymanie akcji serca, reakcje anafilaktyczne, urazy, krwotoki.",
                    "en" => "Podejmowanie natychmiastowych działań w stanach nagłych, takich jak zatrzymanie akcji serca, reakcje anafilaktyczne, urazy, krwotoki."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16064,
                "name" => json_encode([
                    "pl" => "Stabilizowanie stanu pacjenta oraz organizacja jego transportu do placówki medycznej specjalistycznej, gdy wymaga tego sytuacja.",
                    "en" => "Stabilizowanie stanu pacjenta oraz organizacja jego transportu do placówki medycznej specjalistycznej, gdy wymaga tego sytuacja."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16065,
                "name" => json_encode([
                    "pl" => "Przekazywanie pacjentom informacji na temat profilaktyki zdrowotnej, zdrowego trybu życia, znaczenia szczepień i regularnych badań kontrolnych.",
                    "en" => "Przekazywanie pacjentom informacji na temat profilaktyki zdrowotnej, zdrowego trybu życia, znaczenia szczepień i regularnych badań kontrolnych."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16066,
                "name" => json_encode([
                    "pl" => "Edukacja pacjentów o istotnych aspektach ich chorób oraz sposobach zapobiegania ich zaostrzeniom.",
                    "en" => "Edukacja pacjentów o istotnych aspektach ich chorób oraz sposobach zapobiegania ich zaostrzeniom."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16067,
                "name" => json_encode([
                    "pl" => "Współpraca z pielęgniarkami, technikami, fizjoterapeutami i innymi lekarzami w celu zapewnienia kompleksowej opieki nad pacjentem.",
                    "en" => "Współpraca z pielęgniarkami, technikami, fizjoterapeutami i innymi lekarzami w celu zapewnienia kompleksowej opieki nad pacjentem."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16068,
                "name" => json_encode([
                    "pl" => "Konsultacje z lekarzami specjalistami w przypadkach, które wymagają bardziej zaawansowanej diagnostyki lub leczenia.",
                    "en" => "Konsultacje z lekarzami specjalistami w przypadkach, które wymagają bardziej zaawansowanej diagnostyki lub leczenia."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16069,
                "name" => json_encode([
                    "pl" => "Współpraca z lekarzami specjalistami w przypadku skomplikowanych przypadków, które wymagają interdyscyplinarnego podejścia.",
                    "en" => "Współpraca z lekarzami specjalistami w przypadku skomplikowanych przypadków, które wymagają interdyscyplinarnego podejścia."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16070,
                "name" => json_encode([
                    "pl" => "Przekazywanie pacjentów do innych specjalistów, gdy wymaga tego ich stan zdrowia.",
                    "en" => "Przekazywanie pacjentów do innych specjalistów, gdy wymaga tego ich stan zdrowia."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16071,
                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów bezpieczeństwa i higieny pracy, szczególnie w odniesieniu do infekcji, procedur inwazyjnych oraz stosowania sprzętu medycznego.",
                    "en" => "Przestrzeganie standardów bezpieczeństwa i higieny pracy, szczególnie w odniesieniu do infekcji, procedur inwazyjnych oraz stosowania sprzętu medycznego."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16072,
                "name" => json_encode([
                    "pl" => "Dbając o właściwe stosowanie leków oraz informowanie pacjentów o możliwych skutkach ubocznych i działaniach niepożądanych.",
                    "en" => "Dbając o właściwe stosowanie leków oraz informowanie pacjentów o możliwych skutkach ubocznych i działaniach niepożądanych."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16073,
                "name" => json_encode([
                    "pl" => "Leczenie powszechnych dolegliwości, takich jak infekcje wirusowe i bakteryjne, choroby przewlekłe, np. nadciśnienie, cukrzyca.",
                    "en" => "Leczenie powszechnych dolegliwości, takich jak infekcje wirusowe i bakteryjne, choroby przewlekłe, np. nadciśnienie, cukrzyca."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16074,
                "name" => json_encode([
                    "pl" => "Przepisywanie podstawowych leków, takich jak antybiotyki, leki przeciwgorączkowe, przeciwbólowe i przeciwzapalne.",
                    "en" => "Przepisywanie podstawowych leków, takich jak antybiotyki, leki przeciwgorączkowe, przeciwbólowe i przeciwzapalne."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16075,
                "name" => json_encode([
                    "pl" => "Opieka nad pacjentami w różnym wieku i na różnych etapach życia, prowadzenie długoterminowej opieki nad rodzinami.",
                    "en" => "Opieka nad pacjentami w różnym wieku i na różnych etapach życia, prowadzenie długoterminowej opieki nad rodzinami."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16076,
                "name" => json_encode([
                    "pl" => "Prowadzenie opieki profilaktycznej, w tym szczepień, badań przesiewowych oraz doradztwa zdrowotnego.",
                    "en" => "Prowadzenie opieki profilaktycznej, w tym szczepień, badań przesiewowych oraz doradztwa zdrowotnego."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16077,
                "name" => json_encode([
                    "pl" => "Kierowanie pacjentów do lekarzy specjalistów, gdy wymagane są zaawansowane badania diagnostyczne lub leczenie.",
                    "en" => "Kierowanie pacjentów do lekarzy specjalistów, gdy wymagane są zaawansowane badania diagnostyczne lub leczenie."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16078,
                "name" => json_encode([
                    "pl" => "Podejmowanie decyzji o dalszym leczeniu, gdy wymaga tego sytuacja kliniczna pacjenta.",
                    "en" => "Podejmowanie decyzji o dalszym leczeniu, gdy wymaga tego sytuacja kliniczna pacjenta."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16079,
                "name" => json_encode([
                    "pl" => "Udzielanie informacji pacjentom o planowanych zabiegach i procedurach oraz wyjaśnianie, jak się do nich przygotować.",
                    "en" => "Udzielanie informacji pacjentom o planowanych zabiegach i procedurach oraz wyjaśnianie, jak się do nich przygotować."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16080,
                "name" => json_encode([
                    "pl" => "Informowanie o możliwych komplikacjach i ryzykach związanych z procedurami diagnostycznymi.",
                    "en" => "Informowanie o możliwych komplikacjach i ryzykach związanych z procedurami diagnostycznymi."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16081,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w szkoleniach, kursach i zajęciach praktycznych przewidzianych w programie specjalizacji.",
                    "en" => "Uczestnictwo w szkoleniach, kursach i zajęciach praktycznych przewidzianych w programie specjalizacji."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16082,
                "name" => json_encode([
                    "pl" => "Doskonalenie umiejętności praktycznych pod nadzorem lekarzy specjalistów i starszych stażem kolegów.",
                    "en" => "Doskonalenie umiejętności praktycznych pod nadzorem lekarzy specjalistów i starszych stażem kolegów."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16083,
                "name" => json_encode([
                    "pl" => "Praca na oddziałach szpitalnych zgodnie z wybraną specjalizacją, np. chirurgii, pediatrii, internie.",
                    "en" => "Praca na oddziałach szpitalnych zgodnie z wybraną specjalizacją, np. chirurgii, pediatrii, internie."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16084,
                "name" => json_encode([
                    "pl" => "Prowadzenie pacjentów zgodnie z programem specjalizacyjnym i pod okiem specjalisty.",
                    "en" => "Prowadzenie pacjentów zgodnie z programem specjalizacyjnym i pod okiem specjalisty."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16085,
                "name" => json_encode([
                    "pl" => "Praktyczne wykonywanie procedur medycznych, takich jak pobieranie krwi, zakładanie wenflonów, cewnikowanie, drobne zabiegi chirurgiczne.",
                    "en" => "Praktyczne wykonywanie procedur medycznych, takich jak pobieranie krwi, zakładanie wenflonów, cewnikowanie, drobne zabiegi chirurgiczne."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16086,
                "name" => json_encode([
                    "pl" => "Wdrażanie nabytych umiejętności praktycznych oraz nauka odpowiedniego reagowania na sytuacje awaryjne.",
                    "en" => "Wdrażanie nabytych umiejętności praktycznych oraz nauka odpowiedniego reagowania na sytuacje awaryjne."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16087,
                "name" => json_encode([
                    "pl" => "Obserwowanie pacjentów na oddziale i raportowanie o ich stanie lekarzom specjalistom.",
                    "en" => "Obserwowanie pacjentów na oddziale i raportowanie o ich stanie lekarzom specjalistom."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16088,
                "name" => json_encode([
                    "pl" => "Zbieranie informacji o przebiegu leczenia pacjentów i podejmowanie działań w razie zaostrzenia objawów.",
                    "en" => "Zbieranie informacji o przebiegu leczenia pacjentów i podejmowanie działań w razie zaostrzenia objawów."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16089,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w konferencjach naukowych, szkoleniach i warsztatach, które są częścią procesu specjalizacji.",
                    "en" => "Uczestnictwo w konferencjach naukowych, szkoleniach i warsztatach, które są częścią procesu specjalizacji."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16090,
                "name" => json_encode([
                    "pl" => "Aktualizacja wiedzy medycznej w zgodzie z najnowszymi osiągnięciami i standardami w danej specjalizacji.",
                    "en" => "Aktualizacja wiedzy medycznej w zgodzie z najnowszymi osiągnięciami i standardami w danej specjalizacji."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16091,
                "name" => json_encode([
                    "pl" => "Współpraca z lekarzami prowadzącymi i konsultacje w przypadkach, które wymagają bardziej złożonej diagnostyki.",
                    "en" => "Współpraca z lekarzami prowadzącymi i konsultacje w przypadkach, które wymagają bardziej złożonej diagnostyki."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16092,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie wiedzy od specjalistów do poszerzania swojej wiedzy i doskonalenia umiejętności.",
                    "en" => "Wykorzystywanie wiedzy od specjalistów do poszerzania swojej wiedzy i doskonalenia umiejętności."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16093,
                "name" => json_encode([
                    "pl" => "Prowadzenie diagnostyki, leczenia oraz profilaktyki chorób zgodnie z ukończoną specjalizacją (np. specjalista chorób wewnętrznych I stopnia).",
                    "en" => "Prowadzenie diagnostyki, leczenia oraz profilaktyki chorób zgodnie z ukończoną specjalizacją (np. specjalista chorób wewnętrznych I stopnia)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16094,
                "name" => json_encode([
                    "pl" => "Realizacja opieki nad pacjentami w przychodniach, oddziałach szpitalnych lub poradniach specjalistycznych.",
                    "en" => "Realizacja opieki nad pacjentami w przychodniach, oddziałach szpitalnych lub poradniach specjalistycznych."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16095,
                "name" => json_encode([
                    "pl" => "Wykonywanie procedur diagnostycznych i leczniczych adekwatnych do danej specjalizacji, takich jak nakłucia, punkcje, biopsje, interpretacja zaawansowanych badań.",
                    "en" => "Wykonywanie procedur diagnostycznych i leczniczych adekwatnych do danej specjalizacji, takich jak nakłucia, punkcje, biopsje, interpretacja zaawansowanych badań."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16096,
                "name" => json_encode([
                    "pl" => "Samodzielne podejmowanie decyzji o metodach leczenia oraz interwencjach medycznych.",
                    "en" => "Samodzielne podejmowanie decyzji o metodach leczenia oraz interwencjach medycznych."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16097,
                "name" => json_encode([
                    "pl" => "Konsultowanie i współpraca z lekarzami specjalistami II stopnia w przypadku bardziej złożonych przypadków medycznych.",
                    "en" => "Konsultowanie i współpraca z lekarzami specjalistami II stopnia w przypadku bardziej złożonych przypadków medycznych."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16098,
                "name" => json_encode([
                    "pl" => "Koordynowanie planu leczenia pacjenta, szczególnie w przypadkach, które wymagają współpracy między różnymi specjalistami.",
                    "en" => "Koordynowanie planu leczenia pacjenta, szczególnie w przypadkach, które wymagają współpracy między różnymi specjalistami."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16099,
                "name" => json_encode([
                    "pl" => "Pełnienie roli mentora dla młodszych lekarzy oraz lekarzy w trakcie specjalizacji.",
                    "en" => "Pełnienie roli mentora dla młodszych lekarzy oraz lekarzy w trakcie specjalizacji."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16100,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy i doświadczenia oraz pomoc w rozwoju zawodowym młodszych kolegów.",
                    "en" => "Przekazywanie wiedzy i doświadczenia oraz pomoc w rozwoju zawodowym młodszych kolegów."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16101,
                "name" => json_encode([
                    "pl" => "Udział w kursach, konferencjach i szkoleniach, aby poszerzać swoją wiedzę i rozwijać umiejętności zgodnie z wymaganiami medycyny.",
                    "en" => "Udział w kursach, konferencjach i szkoleniach, aby poszerzać swoją wiedzę i rozwijać umiejętności zgodnie z wymaganiami medycyny."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16102,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy zgodnie z najnowszymi standardami i badaniami, co zapewnia najlepszą opiekę nad pacjentem.",
                    "en" => "Aktualizowanie wiedzy zgodnie z najnowszymi standardami i badaniami, co zapewnia najlepszą opiekę nad pacjentem."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $LEKARZ_SPECJALISTA_ALERGOLOGII = [

            [
                "id" => 16103,
                "name" => json_encode([
                    "pl" => "Szczegółowe pytania dotyczące objawów, historii medycznej oraz czynników wyzwalających alergie.",
                    "en" => "Szczegółowe pytania dotyczące objawów, historii medycznej oraz czynników wyzwalających alergie."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16104,
                "name" => json_encode([
                    "pl" => "Analiza stylu życia pacjenta i jego środowiska, aby zidentyfikować możliwe źródła alergenów.",
                    "en" => "Analiza stylu życia pacjenta i jego środowiska, aby zidentyfikować możliwe źródła alergenów."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16105,
                "name" => json_encode([
                    "pl" => "Zlecanie testów skórnych (punktowych, płatkowych), aby określić alergeny wywołujące reakcje.",
                    "en" => "Zlecanie testów skórnych (punktowych, płatkowych), aby określić alergeny wywołujące reakcje."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16106,
                "name" => json_encode([
                    "pl" => "Wykonywanie i interpretacja testów krwi, takich jak oznaczanie stężenia IgE swoistych dla alergenu.",
                    "en" => "Wykonywanie i interpretacja testów krwi, takich jak oznaczanie stężenia IgE swoistych dla alergenu."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16107,
                "name" => json_encode([
                    "pl" => "Ocena, czy pacjent kwalifikuje się do immunoterapii, oraz dobór odpowiedniego planu leczenia odczulającego.",
                    "en" => "Ocena, czy pacjent kwalifikuje się do immunoterapii, oraz dobór odpowiedniego planu leczenia odczulającego."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16108,
                "name" => json_encode([
                    "pl" => "Monitorowanie efektów terapii oraz modyfikowanie jej parametrów w zależności od reakcji pacjenta.",
                    "en" => "Monitorowanie efektów terapii oraz modyfikowanie jej parametrów w zależności od reakcji pacjenta."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16109,
                "name" => json_encode([
                    "pl" => "Wykrywanie alergii na pokarmy poprzez testy alergiczne i próby eliminacyjne.",
                    "en" => "Wykrywanie alergii na pokarmy poprzez testy alergiczne i próby eliminacyjne."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16110,
                "name" => json_encode([
                    "pl" => "Opracowywanie diety eliminacyjnej oraz edukacja pacjenta w zakresie unikania alergenów pokarmowych.",
                    "en" => "Opracowywanie diety eliminacyjnej oraz edukacja pacjenta w zakresie unikania alergenów pokarmowych."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16111,
                "name" => json_encode([
                    "pl" => "Diagnoza i wdrożenie odpowiedniej terapii dla pacjentów cierpiących na alergie wziewne (np. na pyłki, roztocza, sierść zwierząt).",
                    "en" => "Diagnoza i wdrożenie odpowiedniej terapii dla pacjentów cierpiących na alergie wziewne (np. na pyłki, roztocza, sierść zwierząt)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16112,
                "name" => json_encode([
                    "pl" => "Przepisanie leków przeciwhistaminowych, sterydów lub innych leków wziewnych, które łagodzą objawy.",
                    "en" => "Przepisanie leków przeciwhistaminowych, sterydów lub innych leków wziewnych, które łagodzą objawy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16113,
                "name" => json_encode([
                    "pl" => "Diagnozowanie astmy oskrzelowej, szczególnie w przypadkach, gdy astma jest wywołana czynnikami alergicznymi.",
                    "en" => "Diagnozowanie astmy oskrzelowej, szczególnie w przypadkach, gdy astma jest wywołana czynnikami alergicznymi."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16114,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu zdrowia pacjenta, dostosowywanie leków i wprowadzenie planów kontrolnych, takich jak mierzenie szczytowego przepływu wydechowego.",
                    "en" => "Monitorowanie stanu zdrowia pacjenta, dostosowywanie leków i wprowadzenie planów kontrolnych, takich jak mierzenie szczytowego przepływu wydechowego."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16115,
                "name" => json_encode([
                    "pl" => "Identyfikacja przyczyn pokrzywki i obrzęku naczynioruchowego, takich jak alergeny pokarmowe, leki lub alergeny środowiskowe.",
                    "en" => "Identyfikacja przyczyn pokrzywki i obrzęku naczynioruchowego, takich jak alergeny pokarmowe, leki lub alergeny środowiskowe."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16116,
                "name" => json_encode([
                    "pl" => "Przepisanie odpowiednich leków przeciwhistaminowych lub sterydów oraz zaplanowanie terapii profilaktycznej.",
                    "en" => "Przepisanie odpowiednich leków przeciwhistaminowych lub sterydów oraz zaplanowanie terapii profilaktycznej."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16117,
                "name" => json_encode([
                    "pl" => "Zapisywanie wyników badań, diagnoz, historii choroby oraz przebiegu leczenia.",
                    "en" => "Zapisywanie wyników badań, diagnoz, historii choroby oraz przebiegu leczenia."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16118,
                "name" => json_encode([
                    "pl" => "Dokumentowanie reakcji pacjentów na leczenie oraz prowadzenie notatek na temat modyfikacji terapii.",
                    "en" => "Dokumentowanie reakcji pacjentów na leczenie oraz prowadzenie notatek na temat modyfikacji terapii."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16119,
                "name" => json_encode([
                    "pl" => "Przekazywanie pacjentom informacji o sposobach unikania alergenów w codziennym życiu, takich jak higiena domu, unikanie dymu tytoniowego, dieta eliminacyjna.",
                    "en" => "Przekazywanie pacjentom informacji o sposobach unikania alergenów w codziennym życiu, takich jak higiena domu, unikanie dymu tytoniowego, dieta eliminacyjna."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16120,
                "name" => json_encode([
                    "pl" => "Udostępnianie materiałów edukacyjnych oraz wskazówek dotyczących zmniejszenia ekspozycji na alergeny.",
                    "en" => "Udostępnianie materiałów edukacyjnych oraz wskazówek dotyczących zmniejszenia ekspozycji na alergeny."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16121,
                "name" => json_encode([
                    "pl" => "Analiza wyników testów skórnych, oznaczeń immunoglobulin IgE oraz innych badań laboratoryjnych, aby dokładnie zdiagnozować przyczynę alergii.",
                    "en" => "Analiza wyników testów skórnych, oznaczeń immunoglobulin IgE oraz innych badań laboratoryjnych, aby dokładnie zdiagnozować przyczynę alergii."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16122,
                "name" => json_encode([
                    "pl" => "Wyciąganie wniosków z wyników badań i dostosowywanie terapii w zależności od potrzeb pacjenta.",
                    "en" => "Wyciąganie wniosków z wyników badań i dostosowywanie terapii w zależności od potrzeb pacjenta."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16123,
                "name" => json_encode([
                    "pl" => "Diagnoza i leczenie atopowego zapalenia skóry oraz doradzanie pacjentom w zakresie stosowania odpowiednich kosmetyków i unikania drażniących substancji.",
                    "en" => "Diagnoza i leczenie atopowego zapalenia skóry oraz doradzanie pacjentom w zakresie stosowania odpowiednich kosmetyków i unikania drażniących substancji."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16124,
                "name" => json_encode([
                    "pl" => "Przepisywanie leków, takich jak maści sterydowe i emolienty, oraz monitorowanie odpowiedzi na leczenie.",
                    "en" => "Przepisywanie leków, takich jak maści sterydowe i emolienty, oraz monitorowanie odpowiedzi na leczenie."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16125,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i identyfikacja alergii na leki oraz informowanie pacjentów o możliwości unikania potencjalnie niebezpiecznych substancji.",
                    "en" => "Diagnozowanie i identyfikacja alergii na leki oraz informowanie pacjentów o możliwości unikania potencjalnie niebezpiecznych substancji."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16126,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie prób alergicznych na leki, aby potwierdzić lub wykluczyć reakcję alergiczną.",
                    "en" => "Przeprowadzanie prób alergicznych na leki, aby potwierdzić lub wykluczyć reakcję alergiczną."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16127,
                "name" => json_encode([
                    "pl" => "Wykonywanie testów prowokacyjnych, takich jak podawanie małych dawek alergenów pod nadzorem, aby potwierdzić diagnozę alergii.",
                    "en" => "Wykonywanie testów prowokacyjnych, takich jak podawanie małych dawek alergenów pod nadzorem, aby potwierdzić diagnozę alergii."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16128,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa pacjentów podczas testów oraz monitorowanie ewentualnych reakcji.",
                    "en" => "Zapewnienie bezpieczeństwa pacjentów podczas testów oraz monitorowanie ewentualnych reakcji."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16129,
                "name" => json_encode([
                    "pl" => "Diagnozowanie pyłkowicy oraz planowanie leczenia sezonowego, które łagodzi objawy w okresach nasilenia pylenia roślin.",
                    "en" => "Diagnozowanie pyłkowicy oraz planowanie leczenia sezonowego, które łagodzi objawy w okresach nasilenia pylenia roślin."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16130,
                "name" => json_encode([
                    "pl" => "Przepisywanie leków przeciwhistaminowych, kropli do oczu, sprayów do nosa oraz doradzanie pacjentom, jak przygotować się do sezonu pylenia.",
                    "en" => "Przepisywanie leków przeciwhistaminowych, kropli do oczu, sprayów do nosa oraz doradzanie pacjentom, jak przygotować się do sezonu pylenia."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16131,
                "name" => json_encode([
                    "pl" => "Diagnozowanie alergii krzyżowych, takich jak reakcje na owoce u pacjentów uczulonych na pyłki.",
                    "en" => "Diagnozowanie alergii krzyżowych, takich jak reakcje na owoce u pacjentów uczulonych na pyłki."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16132,
                "name" => json_encode([
                    "pl" => "Udzielanie wskazówek dietetycznych oraz edukacja pacjentów na temat unikania potencjalnych reakcji krzyżowych.",
                    "en" => "Udzielanie wskazówek dietetycznych oraz edukacja pacjentów na temat unikania potencjalnych reakcji krzyżowych."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16133,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie i leczenie objawów anafilaksji oraz przepisanie adrenaliny w ampułkostrzykawce dla pacjentów z ryzykiem wstrząsu anafilaktycznego.",
                    "en" => "Rozpoznawanie i leczenie objawów anafilaksji oraz przepisanie adrenaliny w ampułkostrzykawce dla pacjentów z ryzykiem wstrząsu anafilaktycznego."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16134,
                "name" => json_encode([
                    "pl" => "Edukowanie pacjentów i ich bliskich, jak postępować w przypadku anafilaksji, oraz nauka używania adrenaliny.",
                    "en" => "Edukowanie pacjentów i ich bliskich, jak postępować w przypadku anafilaksji, oraz nauka używania adrenaliny."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16135,
                "name" => json_encode([
                    "pl" => "Informowanie rodziców o sposobach zmniejszenia ryzyka rozwoju alergii u dzieci, takich jak unikanie niepotrzebnej ekspozycji na alergeny.",
                    "en" => "Informowanie rodziców o sposobach zmniejszenia ryzyka rozwoju alergii u dzieci, takich jak unikanie niepotrzebnej ekspozycji na alergeny."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16136,
                "name" => json_encode([
                    "pl" => "Współpraca z pediatrami w diagnostyce i leczeniu alergii u dzieci, w tym ustalanie strategii leczenia.",
                    "en" => "Współpraca z pediatrami w diagnostyce i leczeniu alergii u dzieci, w tym ustalanie strategii leczenia."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16137,
                "name" => json_encode([
                    "pl" => "Tworzenie spersonalizowanych planów leczenia, które uwzględniają specyficzne potrzeby, alergeny i styl życia pacjenta.",
                    "en" => "Tworzenie spersonalizowanych planów leczenia, które uwzględniają specyficzne potrzeby, alergeny i styl życia pacjenta."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16138,
                "name" => json_encode([
                    "pl" => "Monitorowanie reakcji pacjenta na leczenie i wprowadzanie korekt w zależności od jego odpowiedzi na terapię.",
                    "en" => "Monitorowanie reakcji pacjenta na leczenie i wprowadzanie korekt w zależności od jego odpowiedzi na terapię."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16139,
                "name" => json_encode([
                    "pl" => "Współpraca z dermatologami, pulmonologami, gastroenterologami i innymi specjalistami w przypadku pacjentów z wieloma schorzeniami.",
                    "en" => "Współpraca z dermatologami, pulmonologami, gastroenterologami i innymi specjalistami w przypadku pacjentów z wieloma schorzeniami."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16140,
                "name" => json_encode([
                    "pl" => "Konsultowanie przypadków wymagających kompleksowej opieki oraz wspólne ustalanie strategii leczenia.",
                    "en" => "Konsultowanie przypadków wymagających kompleksowej opieki oraz wspólne ustalanie strategii leczenia."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16141,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie alergicznego zapalenia spojówek oraz przepisywanie odpowiednich leków, takich jak krople przeciwhistaminowe.",
                    "en" => "Diagnozowanie i leczenie alergicznego zapalenia spojówek oraz przepisywanie odpowiednich leków, takich jak krople przeciwhistaminowe."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16142,
                "name" => json_encode([
                    "pl" => "Udzielanie zaleceń dotyczących unikania czynników wywołujących oraz zasad higieny oczu.",
                    "en" => "Udzielanie zaleceń dotyczących unikania czynników wywołujących oraz zasad higieny oczu."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16143,
                "name" => json_encode([
                    "pl" => "Organizowanie warsztatów i spotkań edukacyjnych, aby zwiększać świadomość na temat profilaktyki i leczenia alergii.",
                    "en" => "Organizowanie warsztatów i spotkań edukacyjnych, aby zwiększać świadomość na temat profilaktyki i leczenia alergii."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16144,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów o najnowszych metodach leczenia i postępowania w alergii.",
                    "en" => "Informowanie pacjentów o najnowszych metodach leczenia i postępowania w alergii."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16145,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań przesiewowych u pacjentów z grup ryzyka.",
                    "en" => "Przeprowadzanie badań przesiewowych u pacjentów z grup ryzyka."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $LEKARZ_SPECJALISTA_ANESTEZJOLOGII_INTENSYWNEJ_TERAPII = [

            [
                "id" => 16146,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie wywiadu medycznego oraz ocena ryzyka związanego ze znieczuleniem w oparciu o stan zdrowia pacjenta, historię chorób i wyniki badań.",
                    "en" => "Przeprowadzanie wywiadu medycznego oraz ocena ryzyka związanego ze znieczuleniem w oparciu o stan zdrowia pacjenta, historię chorób i wyniki badań."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16147,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badania przedoperacyjnego oraz współpraca z chirurgami i innymi specjalistami w celu przygotowania pacjenta do zabiegu.",
                    "en" => "Przeprowadzanie badania przedoperacyjnego oraz współpraca z chirurgami i innymi specjalistami w celu przygotowania pacjenta do zabiegu."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16148,
                "name" => json_encode([
                    "pl" => "Wybór rodzaju znieczulenia, który będzie najbardziej odpowiedni dla pacjenta i rodzaju operacji (np. znieczulenie ogólne, regionalne, miejscowe).",
                    "en" => "Wybór rodzaju znieczulenia, który będzie najbardziej odpowiedni dla pacjenta i rodzaju operacji (np. znieczulenie ogólne, regionalne, miejscowe)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16149,
                "name" => json_encode([
                    "pl" => "Omawianie opcji znieczulenia z pacjentem oraz wyjaśnianie ryzyka i procedur związanych z wybranym znieczuleniem.",
                    "en" => "Omawianie opcji znieczulenia z pacjentem oraz wyjaśnianie ryzyka i procedur związanych z wybranym znieczuleniem."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16150,
                "name" => json_encode([
                    "pl" => "Podawanie leków znieczulających przed i w trakcie operacji oraz odpowiednie monitorowanie ich dawki i działania.",
                    "en" => "Podawanie leków znieczulających przed i w trakcie operacji oraz odpowiednie monitorowanie ich dawki i działania."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16151,
                "name" => json_encode([
                    "pl" => "Utrzymywanie pacjenta w stanie znieczulenia przez cały czas trwania operacji, dostosowywanie parametrów znieczulenia do potrzeb zabiegu.",
                    "en" => "Utrzymywanie pacjenta w stanie znieczulenia przez cały czas trwania operacji, dostosowywanie parametrów znieczulenia do potrzeb zabiegu."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16152,
                "name" => json_encode([
                    "pl" => "Stała obserwacja i kontrola parametrów życiowych pacjenta (np. tętno, ciśnienie krwi, saturacja, poziom dwutlenku węgla), aby upewnić się, że pozostają stabilne.",
                    "en" => "Stała obserwacja i kontrola parametrów życiowych pacjenta (np. tętno, ciśnienie krwi, saturacja, poziom dwutlenku węgla), aby upewnić się, że pozostają stabilne."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16153,
                "name" => json_encode([
                    "pl" => "Wprowadzanie natychmiastowych interwencji, gdy wartości funkcji życiowych odbiegają od normy, aby zapewnić bezpieczeństwo pacjenta.",
                    "en" => "Wprowadzanie natychmiastowych interwencji, gdy wartości funkcji życiowych odbiegają od normy, aby zapewnić bezpieczeństwo pacjenta."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16154,
                "name" => json_encode([
                    "pl" => "Wspomaganie oddychania u pacjentów za pomocą respiratora w trakcie operacji i w przypadku pacjentów na oddziale intensywnej terapii.",
                    "en" => "Wspomaganie oddychania u pacjentów za pomocą respiratora w trakcie operacji i w przypadku pacjentów na oddziale intensywnej terapii."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16155,
                "name" => json_encode([
                    "pl" => "Dostosowywanie parametrów respiratora do indywidualnych potrzeb pacjenta oraz monitorowanie poziomów gazów we krwi.",
                    "en" => "Dostosowywanie parametrów respiratora do indywidualnych potrzeb pacjenta oraz monitorowanie poziomów gazów we krwi."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16156,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie blokad nerwowych i znieczuleń regionalnych (np. znieczulenie podpajęczynówkowe, znieczulenie zewnątrzoponowe) w celu znieczulenia określonych części ciała.",
                    "en" => "Przeprowadzanie blokad nerwowych i znieczuleń regionalnych (np. znieczulenie podpajęczynówkowe, znieczulenie zewnątrzoponowe) w celu znieczulenia określonych części ciała."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16157,
                "name" => json_encode([
                    "pl" => "Monitorowanie działania znieczulenia regionalnego i podejmowanie działań w razie wystąpienia ewentualnych komplikacji.",
                    "en" => "Monitorowanie działania znieczulenia regionalnego i podejmowanie działań w razie wystąpienia ewentualnych komplikacji."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16158,
                "name" => json_encode([
                    "pl" => "Prowadzenie zaawansowanej resuscytacji krążeniowo-oddechowej (CPR) w nagłych przypadkach oraz natychmiastowa reakcja na zatrzymanie krążenia.",
                    "en" => "Prowadzenie zaawansowanej resuscytacji krążeniowo-oddechowej (CPR) w nagłych przypadkach oraz natychmiastowa reakcja na zatrzymanie krążenia."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16159,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem medycznym w działaniach ratunkowych, takich jak defibrylacja, podawanie leków i przywracanie funkcji życiowych.",
                    "en" => "Współpraca z zespołem medycznym w działaniach ratunkowych, takich jak defibrylacja, podawanie leków i przywracanie funkcji życiowych."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16160,
                "name" => json_encode([
                    "pl" => "Monitorowanie i leczenie pacjentów w stanie krytycznym, którzy wymagają intensywnej opieki i stałego nadzoru nad funkcjami życiowymi.",
                    "en" => "Monitorowanie i leczenie pacjentów w stanie krytycznym, którzy wymagają intensywnej opieki i stałego nadzoru nad funkcjami życiowymi."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16161,
                "name" => json_encode([
                    "pl" => "Wspieranie funkcji życiowych pacjentów za pomocą specjalistycznych metod, takich jak wentylacja mechaniczna, leki wspomagające krążenie.",
                    "en" => "Wspieranie funkcji życiowych pacjentów za pomocą specjalistycznych metod, takich jak wentylacja mechaniczna, leki wspomagające krążenie."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16162,
                "name" => json_encode([
                    "pl" => "Przepisywanie i monitorowanie leków przeciwbólowych dla pacjentów po operacji w celu zapewnienia im komfortu i przyspieszenia procesu rekonwalescencji.",
                    "en" => "Przepisywanie i monitorowanie leków przeciwbólowych dla pacjentów po operacji w celu zapewnienia im komfortu i przyspieszenia procesu rekonwalescencji."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16163,
                "name" => json_encode([
                    "pl" => "Stosowanie technik analgezji regionalnej i blokad nerwowych w celu długotrwałego łagodzenia bólu pooperacyjnego.",
                    "en" => "Stosowanie technik analgezji regionalnej i blokad nerwowych w celu długotrwałego łagodzenia bólu pooperacyjnego."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16164,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie pacjentów cierpiących na przewlekły ból poprzez różne techniki leczenia bólu (np. blokady nerwowe, leki przeciwbólowe, metody fizjoterapeutyczne).",
                    "en" => "Diagnozowanie i leczenie pacjentów cierpiących na przewlekły ból poprzez różne techniki leczenia bólu (np. blokady nerwowe, leki przeciwbólowe, metody fizjoterapeutyczne)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16165,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi specjalistami w celu wdrożenia kompleksowego leczenia bólu przewlekłego.",
                    "en" => "Współpraca z innymi specjalistami w celu wdrożenia kompleksowego leczenia bólu przewlekłego."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16166,
                "name" => json_encode([
                    "pl" => "Zapewnienie anestezjologicznej opieki w nagłych przypadkach wymagających interwencji chirurgicznej, np. w przypadku urazów lub nagłych schorzeń.",
                    "en" => "Zapewnienie anestezjologicznej opieki w nagłych przypadkach wymagających interwencji chirurgicznej, np. w przypadku urazów lub nagłych schorzeń."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16167,
                "name" => json_encode([
                    "pl" => "Błyskawiczne przygotowanie pacjenta do operacji i dostosowanie procedur anestezjologicznych do sytuacji krytycznej.",
                    "en" => "Błyskawiczne przygotowanie pacjenta do operacji i dostosowanie procedur anestezjologicznych do sytuacji krytycznej."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16168,
                "name" => json_encode([
                    "pl" => "Przekazywanie rodzinom pacjentów informacji o stanie zdrowia i procedurach stosowanych na oddziale intensywnej terapii.",
                    "en" => "Przekazywanie rodzinom pacjentów informacji o stanie zdrowia i procedurach stosowanych na oddziale intensywnej terapii."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16169,
                "name" => json_encode([
                    "pl" => "Edukowanie pacjentów po operacjach na temat opieki pooperacyjnej, leków przeciwbólowych i możliwości łagodzenia bólu.",
                    "en" => "Edukowanie pacjentów po operacjach na temat opieki pooperacyjnej, leków przeciwbólowych i możliwości łagodzenia bólu."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16170,
                "name" => json_encode([
                    "pl" => "Analizowanie wyników badań laboratoryjnych, takich jak gazometria krwi, morfologia, elektrolity, oraz badania obrazowe, aby dostosować leczenie do aktualnych potrzeb pacjenta.",
                    "en" => "Analizowanie wyników badań laboratoryjnych, takich jak gazometria krwi, morfologia, elektrolity, oraz badania obrazowe, aby dostosować leczenie do aktualnych potrzeb pacjenta."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16171,
                "name" => json_encode([
                    "pl" => "Przekazywanie wyników badań lekarzom innych specjalizacji i omawianie dalszych kroków leczenia.",
                    "en" => "Przekazywanie wyników badań lekarzom innych specjalizacji i omawianie dalszych kroków leczenia."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16172,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i korygowanie zaburzeń kwasowo-zasadowych oraz elektrolitowych u pacjentów w stanie krytycznym.",
                    "en" => "Diagnozowanie i korygowanie zaburzeń kwasowo-zasadowych oraz elektrolitowych u pacjentów w stanie krytycznym."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16173,
                "name" => json_encode([
                    "pl" => "Dostosowywanie leczenia w celu przywrócenia równowagi metabolicznej i poprawy funkcji narządów.",
                    "en" => "Dostosowywanie leczenia w celu przywrócenia równowagi metabolicznej i poprawy funkcji narządów."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16174,
                "name" => json_encode([
                    "pl" => "Współpraca z chirurgami, internistami, kardiologami oraz pielęgniarkami w celu zapewnienia pacjentom kompleksowej opieki na sali operacyjnej i na oddziale intensywnej terapii.",
                    "en" => "Współpraca z chirurgami, internistami, kardiologami oraz pielęgniarkami w celu zapewnienia pacjentom kompleksowej opieki na sali operacyjnej i na oddziale intensywnej terapii."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16175,
                "name" => json_encode([
                    "pl" => "Udział w codziennych odprawach i omawianiu przypadków pacjentów w celu koordynacji leczenia.",
                    "en" => "Udział w codziennych odprawach i omawianiu przypadków pacjentów w celu koordynacji leczenia."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16176,
                "name" => json_encode([
                    "pl" => "Udzielanie pacjentom i ich rodzinom informacji o przebiegu operacji, znieczulenia, możliwych ryzykach i komplikacjach.",
                    "en" => "Udzielanie pacjentom i ich rodzinom informacji o przebiegu operacji, znieczulenia, możliwych ryzykach i komplikacjach."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16177,
                "name" => json_encode([
                    "pl" => "Monitorowanie i zapewnienie komfortu pacjentów podczas wybudzania po operacji oraz w okresie pooperacyjnym.",
                    "en" => "Monitorowanie i zapewnienie komfortu pacjentów podczas wybudzania po operacji oraz w okresie pooperacyjnym."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16178,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przebiegu znieczulenia, monitorowanie parametrów życiowych, podawanie leków i notowanie wszelkich interwencji w dokumentacji medycznej pacjenta.",
                    "en" => "Dokumentowanie przebiegu znieczulenia, monitorowanie parametrów życiowych, podawanie leków i notowanie wszelkich interwencji w dokumentacji medycznej pacjenta."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16179,
                "name" => json_encode([
                    "pl" => "Rzetelne prowadzenie dokumentacji z pobytu pacjenta na oddziale intensywnej terapii oraz raportowanie zmian w stanie pacjenta.",
                    "en" => "Rzetelne prowadzenie dokumentacji z pobytu pacjenta na oddziale intensywnej terapii oraz raportowanie zmian w stanie pacjenta."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16180,
                "name" => json_encode([
                    "pl" => "Leczenie pacjentów z niewydolnością wielu narządów, monitorowanie i wspieranie funkcji serca, nerek, wątroby oraz układu oddechowego.",
                    "en" => "Leczenie pacjentów z niewydolnością wielu narządów, monitorowanie i wspieranie funkcji serca, nerek, wątroby oraz układu oddechowego."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16181,
                "name" => json_encode([
                    "pl" => "Dostosowywanie leczenia do zmian w stanie zdrowia pacjenta oraz współpraca z zespołem specjalistów w opiece nad pacjentem z ciężkimi schorzeniami.",
                    "en" => "Dostosowywanie leczenia do zmian w stanie zdrowia pacjenta oraz współpraca z zespołem specjalistów w opiece nad pacjentem z ciężkimi schorzeniami."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16182,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie oceny ryzyka przedoperacyjnego w oparciu o wyniki badań i wywiad, co pozwala na ocenę ewentualnych zagrożeń związanych z operacją.",
                    "en" => "Przeprowadzanie oceny ryzyka przedoperacyjnego w oparciu o wyniki badań i wywiad, co pozwala na ocenę ewentualnych zagrożeń związanych z operacją."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16183,
                "name" => json_encode([
                    "pl" => "Przygotowanie planu anestezjologicznego z uwzględnieniem stanu pacjenta, typu operacji i potencjalnych komplikacji.",
                    "en" => "Przygotowanie planu anestezjologicznego z uwzględnieniem stanu pacjenta, typu operacji i potencjalnych komplikacji."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16184,
                "name" => json_encode([
                    "pl" => "Szkolenie lekarzy młodszych stażem, rezydentów oraz innych członków zespołu medycznego w zakresie procedur anestezjologicznych i opieki nad pacjentami na OIT.",
                    "en" => "Szkolenie lekarzy młodszych stażem, rezydentów oraz innych członków zespołu medycznego w zakresie procedur anestezjologicznych i opieki nad pacjentami na OIT."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16185,
                "name" => json_encode([
                    "pl" => "Udział w konferencjach i kursach, aby pozostać na bieżąco z nowymi metodami leczenia, lekami oraz technologiami.",
                    "en" => "Udział w konferencjach i kursach, aby pozostać na bieżąco z nowymi metodami leczenia, lekami oraz technologiami."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16186,
                "name" => json_encode([
                    "pl" => "Monitorowanie i kontrolowanie skutków ubocznych znieczulenia, takich jak nudności, wymioty, bóle głowy, oraz wdrażanie odpowiednich interwencji.",
                    "en" => "Monitorowanie i kontrolowanie skutków ubocznych znieczulenia, takich jak nudności, wymioty, bóle głowy, oraz wdrażanie odpowiednich interwencji."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16187,
                "name" => json_encode([
                    "pl" => "Edukacja pacjentów o możliwych skutkach ubocznych oraz postępowanie w celu minimalizacji ich występowania.",
                    "en" => "Edukacja pacjentów o możliwych skutkach ubocznych oraz postępowanie w celu minimalizacji ich występowania."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16188,
                "name" => json_encode([
                    "pl" => "Stosowanie standardów bezpieczeństwa podczas znieczulenia oraz w trakcie opieki na oddziale intensywnej terapii, takich jak higiena, aseptyka i zarządzanie ryzykiem.",
                    "en" => "Stosowanie standardów bezpieczeństwa podczas znieczulenia oraz w trakcie opieki na oddziale intensywnej terapii, takich jak higiena, aseptyka i zarządzanie ryzykiem."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16189,
                "name" => json_encode([
                    "pl" => "Dbałość o jakość sprzętu medycznego, regularne sprawdzanie i konserwacja urządzeń anestezjologicznych i respiratorów.",
                    "en" => "Dbałość o jakość sprzętu medycznego, regularne sprawdzanie i konserwacja urządzeń anestezjologicznych i respiratorów."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16190,
                "name" => json_encode([
                    "pl" => "Przekazywanie rodzinom informacji o stanie zdrowia pacjentów na oddziale intensywnej terapii, wspieranie emocjonalne i odpowiedzi na pytania dotyczące przebiegu leczenia.",
                    "en" => "Przekazywanie rodzinom informacji o stanie zdrowia pacjentów na oddziale intensywnej terapii, wspieranie emocjonalne i odpowiedzi na pytania dotyczące przebiegu leczenia."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16191,
                "name" => json_encode([
                    "pl" => "Wyjaśnianie procesów terapeutycznych i procedur oraz informowanie o możliwych rokowaniach.",
                    "en" => "Wyjaśnianie procesów terapeutycznych i procedur oraz informowanie o możliwych rokowaniach."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16192,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w szkoleniach, warsztatach i konferencjach, aby poszerzać wiedzę i umiejętności w zakresie anestezjologii i intensywnej terapii.",
                    "en" => "Uczestnictwo w szkoleniach, warsztatach i konferencjach, aby poszerzać wiedzę i umiejętności w zakresie anestezjologii i intensywnej terapii."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
            ,

            [
                "id" => 16193,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy w zakresie najnowszych technologii, metod znieczulenia oraz standardów opieki nad pacjentem w stanie krytycznym.",
                    "en" => "Aktualizowanie wiedzy w zakresie najnowszych technologii, metod znieczulenia oraz standardów opieki nad pacjentem w stanie krytycznym."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]

        ];
        $LEKARZ_SPECJALISTA_ANGIOLOGII = [
            [
                "id" => 16194,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie wywiadu medycznego oraz ocena historii chorób pacjenta, w tym czynników ryzyka chorób naczyniowych, takich jak nadciśnienie, cukrzyca, palenie tytoniu.",
                    "en" => "Conducting medical interviews and assessing the patient's medical history, including risk factors for vascular diseases such as hypertension, diabetes, and smoking."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16195,
                "name" => json_encode([
                    "pl" => "Wykonywanie szczegółowego badania fizykalnego, obejmującego ocenę tętna, obrzęków, kolor skóry i innych objawów wskazujących na problemy z naczyniami.",
                    "en" => "Performing a detailed physical examination, including pulse assessment, swelling, skin color, and other signs indicating vascular problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16196,
                "name" => json_encode([
                    "pl" => "Wykonywanie USG Doppler, które umożliwia ocenę przepływu krwi w tętnicach i żyłach oraz wykrywanie zmian miażdżycowych, zakrzepów i zatorów.",
                    "en" => "Performing Doppler ultrasound to evaluate blood flow in arteries and veins and detect atherosclerotic changes, clots, and embolisms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16197,
                "name" => json_encode([
                    "pl" => "Interpretowanie wyników badań Dopplerowskich i innych badań obrazowych, takich jak angiografia, aby dokładnie zdiagnozować stan naczyń.",
                    "en" => "Interpreting Doppler test results and other imaging studies, such as angiography, to accurately diagnose vascular conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16198,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i monitorowanie miażdżycy tętnic kończyn dolnych oraz innych naczyń obwodowych.",
                    "en" => "Diagnosing and monitoring atherosclerosis of the lower extremity arteries and other peripheral vessels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16199,
                "name" => json_encode([
                    "pl" => "Przepisywanie leków obniżających poziom cholesterolu, antyagregacyjnych i kontrolujących nadciśnienie, które spowalniają postęp miażdżycy.",
                    "en" => "Prescribing cholesterol-lowering, antiplatelet, and antihypertensive medications to slow the progression of atherosclerosis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16200,
                "name" => json_encode([
                    "pl" => "Diagnoza i leczenie przewlekłej niewydolności żylnej, przepisywanie leków oraz rekomendowanie terapii uciskowej (np. pończochy uciskowe).",
                    "en" => "Diagnosis and treatment of chronic venous insufficiency, prescribing medications, and recommending compression therapy (e.g., compression stockings)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16201,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie procedur skleroterapii w leczeniu żylaków oraz rekomendowanie zabiegów chirurgicznych, gdy jest to konieczne.",
                    "en" => "Performing sclerotherapy procedures for varicose veins and recommending surgical interventions when necessary."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16202,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie zakrzepicy żył głębokich (DVT) oraz zakrzepicy tętniczej, stosowanie leków przeciwzakrzepowych i monitorowanie ich skuteczności.",
                    "en" => "Diagnosing and treating deep vein thrombosis (DVT) and arterial thrombosis, using anticoagulants and monitoring their effectiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16203,
                "name" => json_encode([
                    "pl" => "Edukacja pacjentów w zakresie zapobiegania zakrzepicy, takich jak ruch, unikanie długotrwałego siedzenia, stosowanie pończoch uciskowych.",
                    "en" => "Educating patients on thrombosis prevention, including movement, avoiding prolonged sitting, and using compression stockings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16204,
                "name" => json_encode([
                    "pl" => "Wykrywanie zmian miażdżycowych i zwężeń tętnic szyjnych przy pomocy badań obrazowych, takich jak USG Doppler, tomografia komputerowa lub rezonans magnetyczny.",
                    "en" => "Detecting atherosclerotic changes and carotid artery stenosis using imaging studies such as Doppler ultrasound, CT, or MRI."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16205,
                "name" => json_encode([
                    "pl" => "Kierowanie pacjentów na zabiegi operacyjne lub angioplastykę tętnic szyjnych, jeśli istnieje ryzyko udaru mózgu.",
                    "en" => "Referring patients for surgical procedures or carotid artery angioplasty if there is a risk of stroke."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16206,
                "name" => json_encode([
                    "pl" => "Opieka nad pacjentami z cukrzycą, którzy są narażeni na zaburzenia naczyniowe kończyn dolnych, ocenianie przepływu krwi oraz kondycji tkanek.",
                    "en" => "Caring for diabetic patients at risk of lower limb vascular disorders, assessing blood flow and tissue condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16207,
                "name" => json_encode([
                    "pl" => "Wdrażanie odpowiednich metod leczenia, które pomagają w zapobieganiu owrzodzeniom i martwicy oraz współpraca z diabetologami i chirurgami.",
                    "en" => "Implementing appropriate treatments to prevent ulcers and necrosis and collaborating with diabetologists and surgeons."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16208,
                "name" => json_encode([
                    "pl" => "Diagnoza obrzęków limfatycznych wynikających z niewydolności układu limfatycznego oraz przepisywanie terapii uciskowej i zabiegów drenażu limfatycznego.",
                    "en" => "Diagnosing lymphedema resulting from lymphatic system insufficiency and prescribing compression therapy and lymphatic drainage procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16209,
                "name" => json_encode([
                    "pl" => "Edukacja pacjentów w zakresie unikania infekcji oraz pielęgnacji skóry w celu zapobiegania powikłaniom limfatycznym.",
                    "en" => "Educating patients on avoiding infections and skin care to prevent lymphatic complications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16210,
                "name" => json_encode([
                    "pl" => "Zlecanie bardziej zaawansowanych badań obrazowych, takich jak angiografia kontrastowa, w przypadkach wymagających szczegółowej oceny naczyń krwionośnych.",
                    "en" => "Ordering more advanced imaging studies, such as contrast angiography, in cases requiring detailed vascular assessment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16211,
                "name" => json_encode([
                    "pl" => "Interpretowanie wyników badań i podejmowanie decyzji o dalszym leczeniu na podstawie wyników obrazowania.",
                    "en" => "Interpreting test results and making treatment decisions based on imaging findings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16212,
                "name" => json_encode([
                    "pl" => "Przepisywanie i monitorowanie leków obniżających ciśnienie tętnicze oraz poziom lipidów we krwi u pacjentów z chorobami naczyniowymi.",
                    "en" => "Prescribing and monitoring blood pressure-lowering and lipid-lowering medications for patients with vascular diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16213,
                "name" => json_encode([
                    "pl" => "Regularne kontrolowanie stanu zdrowia pacjentów oraz dostosowywanie leczenia farmakologicznego w celu minimalizacji ryzyka chorób naczyniowych.",
                    "en" => "Regularly monitoring patients' health and adjusting pharmacological treatment to minimize the risk of vascular diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16214,
                "name" => json_encode([
                    "pl" => "Diagnoza i leczenie zespołu Raynauda, który wpływa na krążenie w kończynach (dłonie i stopy), poprzez stosowanie leków rozszerzających naczynia krwionośne.",
                    "en" => "Diagnosing and treating Raynaud's syndrome affecting circulation in the extremities (hands and feet) by using vasodilators."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16215,
                "name" => json_encode([
                    "pl" => "Edukacja pacjentów o sposobach unikania czynników wyzwalających objawy, takich jak zimno i stres.",
                    "en" => "Educating patients on avoiding triggers such as cold and stress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16216,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie i leczenie różnych postaci zapaleń naczyń (np. ziarniniakowatości z zapaleniem naczyń, choroby Takayasu) w oparciu o objawy i wyniki badań.",
                    "en" => "Diagnosing and treating various forms of vasculitis (e.g., granulomatosis with vasculitis, Takayasu's disease) based on symptoms and test results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16217,
                "name" => json_encode([
                    "pl" => "Współpraca z reumatologami i immunologami w celu zapewnienia kompleksowej opieki nad pacjentami z chorobami autoimmunologicznymi naczyń.",
                    "en" => "Collaborating with rheumatologists and immunologists to provide comprehensive care for patients with autoimmune vascular diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16218,
                "name" => json_encode([
                    "pl" => "Edukacja pacjentów na temat wpływu diety, aktywności fizycznej, unikania palenia tytoniu na zdrowie naczyń krwionośnych.",
                    "en" => "Educating patients about the impact of diet, physical activity, and smoking cessation on vascular health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16219,
                "name" => json_encode([
                    "pl" => "Wspieranie pacjentów w utrzymaniu zdrowego trybu życia oraz motywowanie do zmiany szkodliwych nawyków.",
                    "en" => "Supporting patients in maintaining a healthy lifestyle and motivating them to change harmful habits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16220,
                "name" => json_encode([
                    "pl" => "Przepisywanie leków przeciwzakrzepowych, antyagregacyjnych, obniżających ciśnienie i cholesterol oraz monitorowanie ich działania.",
                    "en" => "Prescribing anticoagulants, antiplatelets, antihypertensives, and cholesterol-lowering drugs and monitoring their effects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16221,
                "name" => json_encode([
                    "pl" => "Dostosowywanie dawkowania i monitorowanie skuteczności leczenia farmakologicznego u pacjentów z chorobami naczyniowymi.",
                    "en" => "Adjusting dosages and monitoring the effectiveness of pharmacological treatment in patients with vascular diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16222,
                "name" => json_encode([
                    "pl" => "Prowadzenie badań profilaktycznych u pacjentów z grup ryzyka (np. palacze, osoby z cukrzycą, osoby starsze) w celu wykrywania chorób naczyniowych na wczesnym etapie.",
                    "en" => "Conducting preventive screenings for at-risk patients (e.g., smokers, diabetics, elderly) to detect vascular diseases at an early stage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16223,
                "name" => json_encode([
                    "pl" => "Organizowanie programów profilaktycznych w placówkach medycznych lub w społeczności, aby zwiększać świadomość zdrowia naczyń.",
                    "en" => "Organizing preventive programs in medical facilities or communities to raise awareness about vascular health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16224,
                "name" => json_encode([
                    "pl" => "Ocena stanu naczyń krwionośnych pacjenta i kierowanie na zabiegi, takie jak angioplastyka, stentowanie lub operacje naczyniowe, w przypadku zwężeń lub niedrożności.",
                    "en" => "Assessing the condition of patients' blood vessels and referring for procedures such as angioplasty, stenting, or vascular surgeries in cases of narrowing or obstruction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16225,
                "name" => json_encode([
                    "pl" => "Ścisła współpraca z chirurgami naczyniowymi oraz radiologami interwencyjnymi, aby zapewnić pacjentom odpowiednią opiekę.",
                    "en" => "Collaborating closely with vascular surgeons and interventional radiologists to ensure proper patient care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16226,
                "name" => json_encode([
                    "pl" => "Rzetelne prowadzenie dokumentacji pacjenta, w tym zapisów wyników badań, przebiegu leczenia oraz reakcji pacjenta na terapię.",
                    "en" => "Maintaining accurate patient records, including test results, treatment progress, and patient responses to therapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16227,
                "name" => json_encode([
                    "pl" => "Monitorowanie postępów leczenia i dostosowywanie planu terapeutycznego na podstawie wyników kontroli.",
                    "en" => "Monitoring treatment progress and adjusting the therapeutic plan based on control results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16228,
                "name" => json_encode([
                    "pl" => "Monitorowanie pacjentów po zabiegach interwencyjnych, takich jak angioplastyka, oraz ocena procesu gojenia i zapobieganie powikłaniom.",
                    "en" => "Monitoring patients after interventional procedures such as angioplasty and assessing the healing process and preventing complications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16229,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie wizyt kontrolnych, aby monitorować stan zdrowia naczyń i wprowadzać zalecenia dotyczące rekonwalescencji.",
                    "en" => "Conducting follow-up visits to monitor vascular health and provide recovery recommendations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16230,
                "name" => json_encode([
                    "pl" => "Współpraca z chirurgami naczyniowymi, kardiologami, diabetologami, reumatologami oraz innymi specjalistami, aby zapewnić kompleksową opiekę nad pacjentem z chorobami naczyniowymi.",
                    "en" => "Collaborating with vascular surgeons, cardiologists, diabetologists, rheumatologists, and other specialists to ensure comprehensive care for patients with vascular diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16231,
                "name" => json_encode([
                    "pl" => "Koordynowanie opieki nad pacjentem w zależności od jego potrzeb i dostosowywanie planu leczenia z uwzględnieniem konsultacji specjalistycznych.",
                    "en" => "Coordinating patient care based on their needs and adjusting the treatment plan, considering specialist consultations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16232,
                "name" => json_encode([
                    "pl" => "Wykrywanie tętniaków przy użyciu USG Doppler, tomografii komputerowej i innych badań obrazowych oraz monitorowanie ich postępu.",
                    "en" => "Detecting aneurysms using Doppler ultrasound, CT, and other imaging studies and monitoring their progression."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16233,
                "name" => json_encode([
                    "pl" => "Kierowanie pacjentów na operacje naprawcze, gdy ryzyko pęknięcia tętniaka jest wysokie.",
                    "en" => "Referring patients for corrective surgery when the risk of aneurysm rupture is high."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16234,
                "name" => json_encode([
                    "pl" => "Kierowanie pacjentów na programy rehabilitacyjne, które pomagają poprawić krążenie oraz zmniejszyć ryzyko powikłań naczyniowych.",
                    "en" => "Referring patients to rehabilitation programs that help improve circulation and reduce the risk of vascular complications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16235,
                "name" => json_encode([
                    "pl" => "Edukowanie pacjentów na temat ćwiczeń fizycznych i rehabilitacji, które wspierają zdrowie naczyń.",
                    "en" => "Educating patients on physical exercises and rehabilitation to support vascular health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16236,
                "name" => json_encode([
                    "pl" => "Analiza wyników badań laboratoryjnych, takich jak profil lipidowy, poziom cukru, markerów zapalnych, oraz wyników badań obrazowych, takich jak MRI czy CT.",
                    "en" => "Analyzing laboratory test results, such as lipid profiles, sugar levels, inflammatory markers, and imaging studies like MRI or CT."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16237,
                "name" => json_encode([
                    "pl" => "Podejmowanie decyzji terapeutycznych na podstawie wyników badań diagnostycznych.",
                    "en" => "Making therapeutic decisions based on diagnostic test results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16238,
                "name" => json_encode([
                    "pl" => "Przekazywanie pacjentom informacji o profilaktyce chorób naczyniowych, w tym znaczenia diety, ruchu oraz kontrolowania czynników ryzyka.",
                    "en" => "Providing patients with information on vascular disease prevention, including the importance of diet, exercise, and managing risk factors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16239,
                "name" => json_encode([
                    "pl" => "Udzielanie informacji o objawach, które mogą wskazywać na powikłania naczyniowe, oraz edukacja na temat znaczenia regularnych kontroli zdrowotnych.",
                    "en" => "Providing information on symptoms that may indicate vascular complications and educating on the importance of regular health check-ups."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16240,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w szkoleniach, konferencjach i kursach, aby pozostać na bieżąco z nowymi metodami leczenia i badaniami dotyczącymi chorób naczyń.",
                    "en" => "Participating in trainings, conferences, and courses to stay updated on new treatment methods and research on vascular diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16241,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy w zakresie nowoczesnych technik diagnostycznych i terapii, aby zapewniać pacjentom opiekę opartą na najnowszych standardach medycznych.",
                    "en" => "Updating knowledge on modern diagnostic techniques and therapies to provide patients with care based on the latest medical standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_AUDIOLOGII_I_FONIATRII = [
            [
                "id" => 16242,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szczegółowego wywiadu z pacjentem lub rodzicami dziecka dotyczącego objawów, historii chorób oraz ewentualnych czynników ryzyka.",
                    "en" => "Conducting a detailed interview with the patient or the child's parents about symptoms, medical history, and potential risk factors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16243,
                "name" => json_encode([
                    "pl" => "Wykonywanie badań słuchu, takich jak audiometria tonalna, audiometria słowna, tympanometria, otoemisje akustyczne oraz badanie słuchowych potencjałów wywołanych.",
                    "en" => "Performing hearing tests such as tonal audiometry, speech audiometry, tympanometry, otoacoustic emissions, and auditory evoked potentials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16244,
                "name" => json_encode([
                    "pl" => "Diagnoza problemów z głosem, takich jak chrypka, zmiany barwy głosu, zmniejszona siła głosu, oraz zaburzenia mowy, takie jak jąkanie, dykcja, afazja.",
                    "en" => "Diagnosing voice problems such as hoarseness, changes in voice tone, reduced voice strength, and speech disorders such as stuttering, diction issues, and aphasia."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16245,
                "name" => json_encode([
                    "pl" => "Wdrażanie leczenia farmakologicznego lub rehabilitacyjnego, dostosowanego do rodzaju zaburzeń i potrzeb pacjenta.",
                    "en" => "Implementing pharmacological or rehabilitative treatment tailored to the type of disorder and the patient's needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16246,
                "name" => json_encode([
                    "pl" => "Wykonywanie testów oceniających funkcje przedsionka (np. próba kaloryczna, videonystagmografia) u pacjentów z zawrotami głowy lub problemami z równowagą.",
                    "en" => "Conducting vestibular function tests (e.g., caloric test, videonystagmography) for patients with dizziness or balance problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16247,
                "name" => json_encode([
                    "pl" => "Diagnozowanie przyczyn zaburzeń równowagi oraz współpraca z neurologami i laryngologami w celu dalszej oceny i leczenia.",
                    "en" => "Diagnosing the causes of balance disorders and collaborating with neurologists and ENT specialists for further evaluation and treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16248,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szczegółowej oceny szumów usznych, ocena ich nasilenia i wpływu na codzienne życie pacjenta.",
                    "en" => "Conducting a detailed assessment of tinnitus, evaluating its severity and impact on the patient's daily life."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16249,
                "name" => json_encode([
                    "pl" => "Dostosowanie terapii, w tym zaleceń farmakologicznych, metod habituacyjnych oraz terapii dźwiękiem, aby zmniejszyć intensywność i wpływ szumów usznych na życie pacjenta.",
                    "en" => "Adjusting therapy, including pharmacological recommendations, habituation methods, and sound therapy, to reduce the intensity and impact of tinnitus on the patient's life."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16250,
                "name" => json_encode([
                    "pl" => "Diagnoza niedosłuchu przewodzeniowego i odbiorczego oraz doradzanie pacjentom w zakresie dostępnych opcji terapeutycznych, takich jak aparaty słuchowe lub implanty ślimakowe.",
                    "en" => "Diagnosing conductive and sensorineural hearing loss and advising patients on available therapeutic options, such as hearing aids or cochlear implants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16251,
                "name" => json_encode([
                    "pl" => "Monitorowanie postępów pacjentów po założeniu aparatu słuchowego oraz dostosowanie terapii w zależności od potrzeb pacjenta.",
                    "en" => "Monitoring patient progress after fitting hearing aids and adjusting therapy according to patient needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16252,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań i kwalifikowanie pacjentów z głębokim niedosłuchem do implantów ślimakowych, a także ocena możliwości i potencjalnych korzyści.",
                    "en" => "Conducting examinations and qualifying patients with profound hearing loss for cochlear implants, as well as assessing possibilities and potential benefits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16253,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem implantacyjnym oraz monitorowanie pacjenta po operacji i dostosowywanie parametrów urządzenia.",
                    "en" => "Collaborating with the implant team and monitoring the patient post-surgery, as well as adjusting device parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16254,
                "name" => json_encode([
                    "pl" => "Diagnoza i leczenie zaburzeń głosu u osób, które wykorzystują głos zawodowo (np. nauczyciele, aktorzy, śpiewacy).",
                    "en" => "Diagnosing and treating voice disorders in professionals who use their voice (e.g., teachers, actors, singers)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16255,
                "name" => json_encode([
                    "pl" => "Przepisywanie terapii, takich jak techniki emisji głosu, ćwiczenia oddechowe oraz zalecenia dotyczące higieny głosu, aby zmniejszyć ryzyko przeciążeń i uszkodzeń strun głosowych.",
                    "en" => "Prescribing therapies such as voice emission techniques, breathing exercises, and voice hygiene recommendations to reduce the risk of strain and vocal cord damage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16256,
                "name" => json_encode([
                    "pl" => "Współpraca z logopedami i psychologami w przypadku pacjentów wymagających rehabilitacji mowy, głosu lub terapii psychologicznej, np. po urazach.",
                    "en" => "Collaborating with speech therapists and psychologists for patients requiring speech, voice rehabilitation, or psychological therapy, e.g., after injuries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16257,
                "name" => json_encode([
                    "pl" => "Koordynowanie interdyscyplinarnego planu leczenia pacjentów z różnorodnymi zaburzeniami mowy, głosu i słuchu.",
                    "en" => "Coordinating an interdisciplinary treatment plan for patients with various speech, voice, and hearing disorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16258,
                "name" => json_encode([
                    "pl" => "Edukacja pacjentów na temat profilaktyki zaburzeń słuchu i głosu, szczególnie w grupach ryzyka, takich jak osoby pracujące w hałaśliwym środowisku lub używające głosu zawodowo.",
                    "en" => "Educating patients on the prevention of hearing and voice disorders, especially in high-risk groups like those working in noisy environments or using their voice professionally."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16259,
                "name" => json_encode([
                    "pl" => "Organizowanie programów profilaktycznych, takich jak kampanie na temat ochrony słuchu oraz higieny głosu.",
                    "en" => "Organizing preventive programs such as campaigns on hearing protection and voice hygiene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16260,
                "name" => json_encode([
                    "pl" => "Diagnoza przyczyn afonii i dysfonii oraz opracowanie indywidualnego planu leczenia, który może obejmować terapię farmakologiczną, ćwiczenia głosowe i rehabilitację fonacyjną.",
                    "en" => "Diagnosing causes of aphonia and dysphonia and developing an individual treatment plan, which may include pharmacological therapy, voice exercises, and phonation rehabilitation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16261,
                "name" => json_encode([
                    "pl" => "Monitorowanie efektów terapii oraz dostosowywanie ćwiczeń głosowych, aby poprawić jakość i siłę głosu pacjenta.",
                    "en" => "Monitoring therapy effects and adjusting voice exercises to improve the quality and strength of the patient's voice."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16262,
                "name" => json_encode([
                    "pl" => "Wykrywanie zaburzeń przetwarzania słuchowego, które mogą wpływać na rozumienie mowy, szczególnie w hałasie lub w warunkach trudnych akustycznie.",
                    "en" => "Detecting auditory processing disorders that may affect speech understanding, especially in noise or challenging acoustic conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16263,
                "name" => json_encode([
                    "pl" => "Współpraca z psychologami i logopedami w celu opracowania planu terapeutycznego, który wspomaga przetwarzanie słuchowe pacjenta.",
                    "en" => "Collaborating with psychologists and speech therapists to develop a therapeutic plan that supports the patient's auditory processing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16264,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników badań, diagnoz, przebiegu leczenia i reakcji pacjenta na terapię.",
                    "en" => "Documenting test results, diagnoses, treatment progress, and patient reactions to therapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16265,
                "name" => json_encode([
                    "pl" => "Rzetelne prowadzenie dokumentacji medycznej zgodnie z wymaganiami prawnymi oraz standardami zawodowymi.",
                    "en" => "Maintaining accurate medical records in compliance with legal requirements and professional standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16266,
                "name" => json_encode([
                    "pl" => "Diagnoza zaburzeń słuchu i mowy u pacjentów po urazach głowy oraz opracowanie planu rehabilitacji słuchowej i fonacyjnej.",
                    "en" => "Diagnosing hearing and speech disorders in patients after head injuries and developing a plan for auditory and phonation rehabilitation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16267,
                "name" => json_encode([
                    "pl" => "Monitorowanie postępów pacjentów oraz dostosowywanie terapii w zależności od stanu zdrowia i potrzeb pacjenta.",
                    "en" => "Monitoring patient progress and adjusting therapy according to the patient's health and needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16268,
                "name" => json_encode([
                    "pl" => "Wykonywanie badań przesiewowych oraz szczegółowych testów słuchu u noworodków, niemowląt i dzieci w celu wczesnego wykrywania niedosłuchu.",
                    "en" => "Conducting hearing screenings and detailed tests for newborns, infants, and children to detect hearing loss early."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16269,
                "name" => json_encode([
                    "pl" => "Ocena rozwoju słuchowego dzieci i dostosowywanie terapii oraz urządzeń wspomagających, jeśli są konieczne.",
                    "en" => "Assessing auditory development in children and adjusting therapy and assistive devices if necessary."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16270,
                "name" => json_encode([
                    "pl" => "Współpraca z laryngologami, szczególnie w przypadku pacjentów wymagających zabiegów chirurgicznych, np. usunięcia guzków strun głosowych.",
                    "en" => "Collaborating with ENT specialists, especially for patients requiring surgical procedures such as vocal cord nodule removal."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16271,
                "name" => json_encode([
                    "pl" => "Skierowanie pacjentów na dalsze badania lub leczenie, gdy występują schorzenia wymagające interwencji laryngologicznej.",
                    "en" => "Referring patients for further tests or treatment when conditions requiring ENT intervention are identified."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16272,
                "name" => json_encode([
                    "pl" => "Wspieranie nauczycieli i terapeutów pracujących z dziećmi z niedosłuchem lub zaburzeniami mowy, aby dostosować metody nauczania i komunikacji.",
                    "en" => "Supporting teachers and therapists working with children with hearing loss or speech disorders to adapt teaching and communication methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16273,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji i wskazówek, jak wspierać rozwój słuchu i mowy dzieci w środowisku szkolnym.",
                    "en" => "Providing information and guidance on how to support the development of hearing and speech in children in the school environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16274,
                "name" => json_encode([
                    "pl" => "Prowadzenie terapii dla pacjentów cierpiących na tinnitus, w tym stosowanie technik habituacyjnych oraz dostosowanie terapii dźwiękiem.",
                    "en" => "Conducting therapy for patients suffering from tinnitus, including habituation techniques and sound therapy adjustments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16275,
                "name" => json_encode([
                    "pl" => "Monitorowanie efektów leczenia oraz dostosowywanie metod terapii dźwiękowej w celu zmniejszenia dyskomfortu pacjenta.",
                    "en" => "Monitoring treatment effects and adjusting sound therapy methods to reduce patient discomfort."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16276,
                "name" => json_encode([
                    "pl" => "Edukacja pacjentów na temat zasad higieny głosu, takich jak odpowiednie nawadnianie, unikanie nadmiernego obciążania głosu i odpowiednie techniki oddychania.",
                    "en" => "Educating patients on voice hygiene principles, such as proper hydration, avoiding excessive vocal strain, and correct breathing techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16277,
                "name" => json_encode([
                    "pl" => "Przekazywanie zaleceń dotyczących ochrony słuchu, szczególnie dla osób narażonych na hałas w pracy lub korzystających z urządzeń audio.",
                    "en" => "Providing recommendations on hearing protection, especially for individuals exposed to noise at work or using audio devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16278,
                "name" => json_encode([
                    "pl" => "Diagnoza problemów z mutacją głosu u młodzieży oraz doradztwo w zakresie technik mówienia i ćwiczeń głosowych.",
                    "en" => "Diagnosing voice mutation problems in adolescents and advising on speech techniques and voice exercises."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16279,
                "name" => json_encode([
                    "pl" => "Praca z pacjentami w okresie mutacji głosu, aby ułatwić adaptację do zmian w głosie oraz zapobiegać przeciążeniom strun głosowych.",
                    "en" => "Working with patients during voice mutation to facilitate adaptation to voice changes and prevent vocal cord strain."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16280,
                "name" => json_encode([
                    "pl" => "Kwalifikacja pacjentów do aparatów słuchowych lub implantów oraz dostosowywanie ustawień w celu poprawy słyszenia.",
                    "en" => "Qualifying patients for hearing aids or implants and adjusting settings to improve hearing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16281,
                "name" => json_encode([
                    "pl" => "Monitorowanie efektów protez słuchowych i współpraca z protetykami słuchu w zakresie serwisowania i regulacji aparatów.",
                    "en" => "Monitoring the effects of hearing prosthetics and collaborating with hearing aid technicians for servicing and adjustments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16282,
                "name" => json_encode([
                    "pl" => "Organizowanie badań przesiewowych słuchu i mowy, szczególnie w szkołach i ośrodkach edukacyjnych, w celu wczesnego wykrywania problemów.",
                    "en" => "Organizing hearing and speech screenings, especially in schools and educational centers, to detect problems early."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16283,
                "name" => json_encode([
                    "pl" => "Opracowanie programów profilaktycznych w celu zwiększania świadomości o zaburzeniach słuchu i mowy.",
                    "en" => "Developing preventive programs to raise awareness about hearing and speech disorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16284,
                "name" => json_encode([
                    "pl" => "Rehabilitacja pacjentów po operacjach w obrębie ucha, nosa i gardła, np. operacjach strun głosowych lub usuwaniu guzków.",
                    "en" => "Rehabilitating patients after surgeries of the ear, nose, and throat, such as vocal cord operations or nodule removal."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16285,
                "name" => json_encode([
                    "pl" => "Wspieranie pacjentów w procesie rekonwalescencji, aby przywrócić sprawność głosu i słuchu.",
                    "en" => "Supporting patients during recovery to restore voice and hearing functions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16286,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w kursach, szkoleniach i konferencjach, aby być na bieżąco z najnowszymi osiągnięciami w audiologii i foniatrii.",
                    "en" => "Participating in courses, training, and conferences to stay up-to-date with the latest achievements in audiology and phoniatrics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16287,
                "name" => json_encode([
                    "pl" => "Poszerzanie wiedzy i stosowanie nowych metod diagnostyki i leczenia zaburzeń słuchu, głosu i równowagi.",
                    "en" => "Expanding knowledge and applying new methods for diagnosing and treating hearing, voice, and balance disorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16288,
                "name" => json_encode([
                    "pl" => "Wyjaśnianie pacjentom i ich rodzinom procedur diagnostycznych i zabiegów oraz informowanie o możliwych skutkach ubocznych.",
                    "en" => "Explaining diagnostic procedures and treatments to patients and their families and informing them about potential side effects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16289,
                "name" => json_encode([
                    "pl" => "Przekazywanie pacjentom zaleceń przed i po procedurach, aby zapewnić optymalne wyniki badań lub terapii.",
                    "en" => "Providing patients with pre- and post-procedure recommendations to ensure optimal diagnostic or therapeutic outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_BALNEOLOGII_I_MEDYCYNY_FIZYKALNEJ = [
            [
                "id" => 16290,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szczegółowego wywiadu medycznego z pacjentem, obejmującego historię chorób, objawy oraz styl życia.",
                    "en" => "Conducting a detailed medical interview with the patient, including medical history, symptoms, and lifestyle."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16291,
                "name" => json_encode([
                    "pl" => "Ocena wyników badań pacjenta i diagnoza schorzeń, które mogą być leczone lub wspomagane terapiami uzdrowiskowymi i fizykoterapeutycznymi.",
                    "en" => "Assessing patient test results and diagnosing conditions that can be treated or supported by spa and physiotherapy treatments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16292,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich metod terapeutycznych, takich jak kąpiele mineralne, borowinowe, inhalacje, masaże lecznicze, w zależności od potrzeb zdrowotnych pacjenta.",
                    "en" => "Selecting appropriate therapeutic methods such as mineral baths, mud therapy, inhalations, and therapeutic massages based on the patient's health needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16293,
                "name" => json_encode([
                    "pl" => "Tworzenie spersonalizowanych programów leczenia, które uwzględniają schorzenia pacjenta oraz jego ogólny stan zdrowia.",
                    "en" => "Creating personalized treatment programs that consider the patient's conditions and overall health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16294,
                "name" => json_encode([
                    "pl" => "Monitorowanie przebiegu terapii uzdrowiskowej, dostosowywanie intensywności zabiegów i ich częstotliwości w zależności od postępów pacjenta.",
                    "en" => "Monitoring the progress of spa therapy, adjusting the intensity and frequency of treatments based on patient progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16295,
                "name" => json_encode([
                    "pl" => "Ocena efektów leczenia i podejmowanie decyzji o kontynuacji, zmianie lub zakończeniu terapii.",
                    "en" => "Evaluating treatment outcomes and deciding on continuation, modification, or termination of therapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16296,
                "name" => json_encode([
                    "pl" => "Wykonywanie lub nadzorowanie kąpieli leczniczych, np. solankowych, siarczkowych, borowinowych, gazowych, które mają działanie terapeutyczne.",
                    "en" => "Performing or supervising therapeutic baths such as saline, sulfur, mud, and gas baths with therapeutic effects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16297,
                "name" => json_encode([
                    "pl" => "Kontrolowanie parametrów takich jak temperatura, czas trwania zabiegu i skład chemiczny wody, aby zapewnić bezpieczeństwo pacjentów.",
                    "en" => "Controlling parameters such as temperature, duration, and chemical composition of the water to ensure patient safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16298,
                "name" => json_encode([
                    "pl" => "Wykorzystanie terapii fizykalnych, takich jak elektroterapia, magnetoterapia, laseroterapia, krioterapia, ultradźwięki, do łagodzenia bólu, poprawy krążenia i wspierania procesów regeneracyjnych.",
                    "en" => "Using physical therapies such as electrotherapy, magnetotherapy, laser therapy, cryotherapy, and ultrasound to alleviate pain, improve circulation, and support regeneration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16299,
                "name" => json_encode([
                    "pl" => "Monitorowanie odpowiedzi pacjenta na terapię i dostosowywanie parametrów zabiegów w zależności od reakcji organizmu.",
                    "en" => "Monitoring the patient's response to therapy and adjusting treatment parameters based on the body's reaction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16300,
                "name" => json_encode([
                    "pl" => "Planowanie i nadzorowanie rehabilitacji pacjentów z chorobami i urazami narządu ruchu, takimi jak choroba zwyrodnieniowa stawów, reumatoidalne zapalenie stawów, dyskopatie.",
                    "en" => "Planning and supervising rehabilitation for patients with musculoskeletal diseases and injuries, such as osteoarthritis, rheumatoid arthritis, and discopathies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16301,
                "name" => json_encode([
                    "pl" => "Wdrażanie ćwiczeń ruchowych, które poprawiają funkcjonowanie stawów, mięśni i kręgosłupa.",
                    "en" => "Implementing exercises to improve joint, muscle, and spine function."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16302,
                "name" => json_encode([
                    "pl" => "Leczenie pacjentów z przewlekłymi schorzeniami, takimi jak astma oskrzelowa, przewlekła obturacyjna choroba płuc (POChP), choroby skóry (np. łuszczyca), z użyciem naturalnych zasobów leczniczych.",
                    "en" => "Treating patients with chronic conditions, such as bronchial asthma, chronic obstructive pulmonary disease (COPD), and skin diseases (e.g., psoriasis), using natural therapeutic resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16303,
                "name" => json_encode([
                    "pl" => "Monitorowanie efektów terapii i dostosowywanie programów leczenia do potrzeb pacjentów.",
                    "en" => "Monitoring therapy effects and adjusting treatment programs to patients' needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16304,
                "name" => json_encode([
                    "pl" => "Stosowanie inhalacji solankowych, siarkowych lub jodowych w leczeniu chorób układu oddechowego, takich jak astma, zapalenie zatok, przewlekłe zapalenie oskrzeli.",
                    "en" => "Using saline, sulfur, or iodine inhalations to treat respiratory diseases such as asthma, sinusitis, and chronic bronchitis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16305,
                "name" => json_encode([
                    "pl" => "Edukacja pacjentów w zakresie odpowiedniego korzystania z inhalacji oraz monitorowanie ich skuteczności.",
                    "en" => "Educating patients on proper inhalation use and monitoring their effectiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16306,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie terapii wodnych, takich jak masaże wodne, kąpiele wirowe, do poprawy krążenia, łagodzenia napięcia mięśniowego i poprawy kondycji stawów.",
                    "en" => "Using hydrotherapy treatments, such as water massages and whirlpool baths, to improve circulation, relieve muscle tension, and enhance joint condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16307,
                "name" => json_encode([
                    "pl" => "Dostosowywanie parametrów zabiegów hydroterapeutycznych do potrzeb i tolerancji pacjenta.",
                    "en" => "Adjusting hydrotherapy treatment parameters to the patient's needs and tolerance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16308,
                "name" => json_encode([
                    "pl" => "Planowanie rehabilitacji i terapii fizykalnych dla pacjentów po operacjach ortopedycznych, takich jak endoprotezy stawów, rekonstrukcje więzadeł, operacje kręgosłupa.",
                    "en" => "Planning rehabilitation and physical therapy for patients after orthopedic surgeries, such as joint replacements, ligament reconstructions, and spine surgeries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16309,
                "name" => json_encode([
                    "pl" => "Przygotowywanie pacjentów do zabiegów i wspieranie ich w procesie rekonwalescencji, aby przywrócić sprawność ruchową.",
                    "en" => "Preparing patients for procedures and supporting them during recovery to restore mobility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16310,
                "name" => json_encode([
                    "pl" => "Opieka nad pacjentami z chorobami zawodowymi, takimi jak schorzenia kręgosłupa, choroby układu oddechowego czy problemy ze stawami, wynikające z obciążeń zawodowych.",
                    "en" => "Caring for patients with occupational diseases, such as spine disorders, respiratory diseases, or joint problems caused by work-related strain."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16311,
                "name" => json_encode([
                    "pl" => "Opracowanie programów profilaktycznych i rehabilitacyjnych, które pomagają zapobiegać dalszym uszkodzeniom zdrowia.",
                    "en" => "Developing preventive and rehabilitation programs to help prevent further health damage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16312,
                "name" => json_encode([
                    "pl" => "Stosowanie metod fizykalnych w rehabilitacji pacjentów po udarach mózgu, urazach rdzenia kręgowego oraz w chorobach neurologicznych, takich jak stwardnienie rozsiane.",
                    "en" => "Using physical methods in the rehabilitation of patients after strokes, spinal cord injuries, and neurological diseases such as multiple sclerosis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16313,
                "name" => json_encode([
                    "pl" => "Wdrażanie ćwiczeń poprawiających koordynację, równowagę i siłę mięśniową.",
                    "en" => "Implementing exercises to improve coordination, balance, and muscle strength."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16314,
                "name" => json_encode([
                    "pl" => "Przekazywanie pacjentom informacji na temat zdrowego trybu życia, odpowiedniego odżywiania oraz aktywności fizycznej w celu utrzymania zdrowia i zapobiegania nawrotom chorób.",
                    "en" => "Providing patients with information on a healthy lifestyle, proper nutrition, and physical activity to maintain health and prevent disease recurrence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16315,
                "name" => json_encode([
                    "pl" => "Edukowanie pacjentów na temat korzyści zdrowotnych wynikających z terapii balneologicznych i fizykoterapeutycznych.",
                    "en" => "Educating patients about the health benefits of balneological and physiotherapeutic treatments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16316,
                "name" => json_encode([
                    "pl" => "Konsultowanie przypadków z lekarzami innych specjalizacji, takimi jak ortopedzi, reumatolodzy, neurolodzy, aby zapewnić kompleksową opiekę nad pacjentem.",
                    "en" => "Consulting cases with specialists such as orthopedists, rheumatologists, and neurologists to ensure comprehensive patient care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16317,
                "name" => json_encode([
                    "pl" => "Współpraca z fizjoterapeutami, dietetykami i psychologami, aby stworzyć wielodyscyplinarny plan leczenia.",
                    "en" => "Collaborating with physiotherapists, dietitians, and psychologists to create a multidisciplinary treatment plan."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16318,
                "name" => json_encode([
                    "pl" => "Rzetelne prowadzenie dokumentacji medycznej, zapisując wyniki badań, diagnozy, zalecenia terapeutyczne i przebieg leczenia.",
                    "en" => "Maintaining accurate medical records, documenting test results, diagnoses, therapeutic recommendations, and treatment progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16319,
                "name" => json_encode([
                    "pl" => "Monitorowanie postępów pacjenta oraz dostosowywanie planu leczenia na podstawie wyników terapii.",
                    "en" => "Monitoring patient progress and adjusting the treatment plan based on therapy outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16320,
                "name" => json_encode([
                    "pl" => "Leczenie i profilaktyka schorzeń metabolicznych, takich jak dna moczanowa, oraz chorób reumatycznych, poprzez odpowiednio dobrane terapie uzdrowiskowe.",
                    "en" => "Treating and preventing metabolic disorders such as gout and rheumatic diseases through tailored spa therapies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16321,
                "name" => json_encode([
                    "pl" => "Współpraca z reumatologami i dietetykami, aby stworzyć zintegrowany plan leczenia.",
                    "en" => "Collaborating with rheumatologists and dietitians to create an integrated treatment plan."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16322,
                "name" => json_encode([
                    "pl" => "Stosowanie krioterapii miejscowej lub ogólnej oraz terapii cieplnych w celu łagodzenia bólu, zmniejszenia stanów zapalnych i przyspieszenia regeneracji tkanek.",
                    "en" => "Applying local or general cryotherapy and heat therapy to alleviate pain, reduce inflammation, and accelerate tissue regeneration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16323,
                "name" => json_encode([
                    "pl" => "Dostosowywanie parametrów zabiegów do indywidualnych potrzeb pacjentów oraz monitorowanie efektów terapii.",
                    "en" => "Adjusting treatment parameters to individual patient needs and monitoring therapy outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16324,
                "name" => json_encode([
                    "pl" => "Wykorzystanie terapii laserowej i magnetoterapii w leczeniu bólu, stanów zapalnych oraz w poprawie gojenia się ran.",
                    "en" => "Using laser therapy and magnetotherapy to treat pain, inflammation, and improve wound healing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16325,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zabiegów oraz edukowanie pacjentów na temat korzyści i efektów terapii laserowej i magnetycznej.",
                    "en" => "Performing treatments and educating patients about the benefits and effects of laser and magnetic therapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16326,
                "name" => json_encode([
                    "pl" => "Wykonywanie zabiegów elektroterapii, takich jak TENS (przezskórna elektrostymulacja nerwów), jonoforeza, galwanizacja, do łagodzenia bólu i wspomagania gojenia tkanek.",
                    "en" => "Performing electrotherapy treatments such as TENS (transcutaneous electrical nerve stimulation), iontophoresis, and galvanization to alleviate pain and support tissue healing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16327,
                "name" => json_encode([
                    "pl" => "Monitorowanie reakcji pacjenta na zabieg i dostosowywanie parametrów elektroterapii.",
                    "en" => "Monitoring the patient's reaction to treatment and adjusting electrotherapy parameters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16328,
                "name" => json_encode([
                    "pl" => "Wdrażanie programów rehabilitacyjnych dla pacjentów po zawale serca, zabiegach kardiologicznych oraz z chorobą wieńcową.",
                    "en" => "Implementing rehabilitation programs for patients after heart attacks, cardiac procedures, and coronary artery disease."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16329,
                "name" => json_encode([
                    "pl" => "Współpraca z kardiologami oraz fizjoterapeutami kardiologicznymi w celu poprawy wydolności fizycznej i stanu zdrowia pacjentów.",
                    "en" => "Collaborating with cardiologists and cardiac physiotherapists to improve patients' physical fitness and health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16330,
                "name" => json_encode([
                    "pl" => "Leczenie i profilaktyka osteoporozy poprzez fizykoterapię, odpowiednie ćwiczenia oraz zalecenia dietetyczne.",
                    "en" => "Treating and preventing osteoporosis through physiotherapy, appropriate exercises, and dietary recommendations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16331,
                "name" => json_encode([
                    "pl" => "Edukacja pacjentów na temat zapobiegania złamaniom i dbania o kondycję układu kostnego.",
                    "en" => "Educating patients on preventing fractures and maintaining bone health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16332,
                "name" => json_encode([
                    "pl" => "Ocena skuteczności leczenia fizykalnego i balneologicznego oraz podejmowanie decyzji o skierowaniu pacjentów na zabiegi operacyjne lub konsultacje specjalistyczne.",
                    "en" => "Evaluating the effectiveness of physical and balneological therapy and deciding on referring patients for surgical procedures or specialist consultations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_CHIRURGII_DZIECIĘCEJ = [
            [
                "id" => 16333,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szczegółowego wywiadu medycznego oraz badania fizykalnego w celu zidentyfikowania schorzeń, które mogą wymagać leczenia operacyjnego.",
                    "en" => "Conducting a detailed medical interview and physical examination to identify conditions that may require surgical treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16334,
                "name" => json_encode([
                    "pl" => "Interpretacja wyników badań obrazowych (np. USG, RTG, tomografii komputerowej) oraz laboratoryjnych, aby dokładnie określić diagnozę.",
                    "en" => "Interpreting imaging (e.g., ultrasound, X-ray, CT scans) and laboratory results to determine an accurate diagnosis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16335,
                "name" => json_encode([
                    "pl" => "Opracowanie planu operacyjnego, uwzględniającego stan zdrowia dziecka, rodzaj schorzenia oraz najlepszą metodę chirurgiczną.",
                    "en" => "Developing a surgical plan that considers the child's health status, the condition, and the best surgical method."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16336,
                "name" => json_encode([
                    "pl" => "Wykonywanie zabiegów chirurgicznych, takich jak operacje jamy brzusznej, zabiegi naprawcze wad wrodzonych, zabiegi urologiczne, onkologiczne oraz rekonstrukcyjne.",
                    "en" => "Performing surgical procedures such as abdominal surgeries, corrective procedures for congenital defects, urological, oncological, and reconstructive surgeries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16337,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konsultacji przedoperacyjnych z rodzicami i dzieckiem (jeśli to możliwe) oraz omawianie procedury, ryzyka i korzyści z zabiegu.",
                    "en" => "Conducting preoperative consultations with parents and the child (if possible) and discussing the procedure, risks, and benefits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16338,
                "name" => json_encode([
                    "pl" => "Zlecanie niezbędnych badań przedoperacyjnych i konsultacji specjalistycznych, aby przygotować pacjenta do zabiegu i zminimalizować ryzyko powikłań.",
                    "en" => "Ordering necessary preoperative tests and specialist consultations to prepare the patient for surgery and minimize risks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16339,
                "name" => json_encode([
                    "pl" => "Współpraca z anestezjologiem dziecięcym w zakresie wyboru odpowiedniego znieczulenia oraz opracowanie planu anestezji, uwzględniając specyfikę zabiegu i stan zdrowia dziecka.",
                    "en" => "Collaborating with a pediatric anesthesiologist to select appropriate anesthesia and develop an anesthetic plan tailored to the procedure and the child's health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16340,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów życiowych dziecka we współpracy z anestezjologiem podczas trwania operacji.",
                    "en" => "Monitoring the child's vital signs in collaboration with the anesthesiologist during surgery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16341,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu zdrowia pacjenta po zabiegu, kontrolowanie parametrów życiowych i natychmiastowa reakcja na ewentualne komplikacje.",
                    "en" => "Monitoring the patient's health status after surgery, checking vital signs, and responding promptly to complications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16342,
                "name" => json_encode([
                    "pl" => "Zapewnienie odpowiedniej opieki pooperacyjnej, w tym monitorowanie gojenia się ran, zarządzanie bólem oraz kontrolowanie reakcji na leki.",
                    "en" => "Providing appropriate postoperative care, including wound healing monitoring, pain management, and monitoring medication reactions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16343,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i planowanie leczenia chirurgicznego dzieci z wrodzonymi wadami, takimi jak przepuklina pępkowa, przepuklina pachwinowa, rozszczep wargi i podniebienia, wady serca, atrezje przewodu pokarmowego.",
                    "en" => "Diagnosing and planning surgical treatment for children with congenital defects such as umbilical hernia, inguinal hernia, cleft lip and palate, heart defects, and gastrointestinal atresia."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16344,
                "name" => json_encode([
                    "pl" => "Wykonywanie operacji korekcyjnych oraz monitorowanie wyników leczenia, aby zapewnić prawidłowy rozwój dziecka.",
                    "en" => "Performing corrective surgeries and monitoring treatment outcomes to ensure proper child development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16345,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie urazów, takich jak złamania, uszkodzenia tkanek miękkich, urazy narządów wewnętrznych, które wymagają interwencji chirurgicznej.",
                    "en" => "Diagnosing and treating injuries such as fractures, soft tissue damage, and internal organ injuries that require surgical intervention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16346,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie operacji naprawczych oraz planowanie rehabilitacji po urazach w celu przywrócenia sprawności.",
                    "en" => "Performing reparative surgeries and planning rehabilitation after injuries to restore functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16347,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i usuwanie guzów oraz nowotworów, takich jak guzy wątroby, guzy nerki (np. guz Wilmsa), nowotwory tkanek miękkich.",
                    "en" => "Diagnosing and removing tumors and cancers such as liver tumors, kidney tumors (e.g., Wilms' tumor), and soft tissue cancers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16348,
                "name" => json_encode([
                    "pl" => "Współpraca z onkologami dziecięcymi w planowaniu leczenia i monitorowaniu pacjentów po zabiegach onkologicznych.",
                    "en" => "Collaborating with pediatric oncologists in planning treatment and monitoring patients after oncological surgeries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16349,
                "name" => json_encode([
                    "pl" => "Współpraca z pediatrami, onkologami, urologami, psychologami, dietetykami oraz innymi specjalistami w celu zapewnienia kompleksowej opieki nad dzieckiem.",
                    "en" => "Collaborating with pediatricians, oncologists, urologists, psychologists, dietitians, and other specialists to ensure comprehensive care for the child."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16350,
                "name" => json_encode([
                    "pl" => "Regularne konsultacje z zespołem medycznym i omawianie przypadków pacjentów wymagających złożonego leczenia chirurgicznego.",
                    "en" => "Regular consultations with the medical team and discussing cases of patients requiring complex surgical treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16351,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie ostrych schorzeń jamy brzusznej, takich jak zapalenie wyrostka robaczkowego, niedrożność jelit, wgłobienie jelita, skręt jelita.",
                    "en" => "Diagnosing and treating acute abdominal conditions such as appendicitis, intestinal obstruction, intussusception, and volvulus."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16352,
                "name" => json_encode([
                    "pl" => "Szybkie podejmowanie decyzji o operacji w nagłych przypadkach oraz monitorowanie stanu pacjenta po zabiegu.",
                    "en" => "Making prompt decisions about surgery in emergency cases and monitoring the patient's condition after the procedure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16353,
                "name" => json_encode([
                    "pl" => "Opieka nad noworodkami i wcześniakami, które wymagają operacji, np. z powodu wad wrodzonych lub schorzeń zagrażających życiu.",
                    "en" => "Caring for newborns and preterm infants requiring surgery, such as for congenital defects or life-threatening conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16354,
                "name" => json_encode([
                    "pl" => "Monitorowanie przebiegu leczenia i współpraca z neonatologami w celu zapewnienia wsparcia dla najmłodszych pacjentów.",
                    "en" => "Monitoring treatment progress and collaborating with neonatologists to support the youngest patients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16355,
                "name" => json_encode([
                    "pl" => "Planowanie rehabilitacji pooperacyjnej, mającej na celu przywrócenie funkcji ruchowych, oddechowych lub innych funkcji zaburzonych przez chorobę lub zabieg.",
                    "en" => "Planning postoperative rehabilitation aimed at restoring motor, respiratory, or other functions affected by disease or surgery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16356,
                "name" => json_encode([
                    "pl" => "Współpraca z fizjoterapeutami i innymi specjalistami w rehabilitacji dzieci po zabiegach chirurgicznych.",
                    "en" => "Collaborating with physiotherapists and other specialists in the rehabilitation of children after surgeries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16357,
                "name" => json_encode([
                    "pl" => "Zapewnienie wsparcia emocjonalnego dziecku i jego rodzinie przed, w trakcie i po zabiegu chirurgicznym, informowanie o przebiegu leczenia.",
                    "en" => "Providing emotional support to the child and their family before, during, and after surgery, and informing them about the treatment process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16358,
                "name" => json_encode([
                    "pl" => "Udzielanie odpowiedzi na pytania rodziców oraz tłumaczenie procedur i rokowań w przystępny sposób, aby zmniejszyć stres związany z operacją.",
                    "en" => "Answering parents' questions and explaining procedures and prognosis in an understandable way to reduce surgery-related stress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16359,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie chirurgiczne schorzeń urologicznych, takich jak wnętrostwo, stulejka, wodonercze, spodziectwo.",
                    "en" => "Diagnosing and surgically treating urological conditions such as cryptorchidism, phimosis, hydronephrosis, and hypospadias."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16360,
                "name" => json_encode([
                    "pl" => "Wykonywanie zabiegów operacyjnych w zakresie układu moczowo-płciowego oraz monitorowanie efektów leczenia.",
                    "en" => "Performing surgeries on the genitourinary system and monitoring treatment outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16361,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie ropni, przetok, torbieli oraz innych infekcji skórnych i podskórnych wymagających interwencji chirurgicznej.",
                    "en" => "Diagnosing and treating abscesses, fistulas, cysts, and other skin and subcutaneous infections requiring surgical intervention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16362,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zabiegów drenażu oraz usuwania zmian skórnych u dzieci.",
                    "en" => "Performing drainage procedures and removing skin lesions in children."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16363,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu pacjenta w celu wczesnego wykrycia i zapobiegania powikłaniom pooperacyjnym, takim jak zakażenia, krwawienia, zrosty.",
                    "en" => "Monitoring the patient's condition to detect and prevent postoperative complications such as infections, bleeding, and adhesions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16364,
                "name" => json_encode([
                    "pl" => "Szybka reakcja na wystąpienie powikłań oraz wdrażanie odpowiednich środków zaradczych.",
                    "en" => "Quickly responding to complications and implementing appropriate corrective measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16365,
                "name" => json_encode([
                    "pl" => "Wskazanie dalszych konsultacji lub badań w przypadkach wymagających bardziej zaawansowanego leczenia lub opinii innych specjalistów.",
                    "en" => "Referring for further consultations or tests in cases requiring more advanced treatment or opinions from other specialists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16366,
                "name" => json_encode([
                    "pl" => "Organizacja ciągłości opieki dla pacjentów wymagających opieki pooperacyjnej w różnych specjalizacjach.",
                    "en" => "Organizing continuity of care for patients requiring postoperative care across various specialties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16367,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji na temat postępowania pooperacyjnego, pielęgnacji ran, ograniczeń w aktywności fizycznej i diety.",
                    "en" => "Providing information on postoperative care, wound management, physical activity restrictions, and diet."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16368,
                "name" => json_encode([
                    "pl" => "Edukacja rodziców o objawach, które mogą wskazywać na komplikacje, oraz udzielanie instrukcji dotyczących dalszej opieki nad dzieckiem.",
                    "en" => "Educating parents about symptoms that may indicate complications and providing instructions on further child care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16369,
                "name" => json_encode([
                    "pl" => "Rzetelne prowadzenie dokumentacji medycznej pacjenta, zapisując diagnozy, procedury operacyjne, wyniki badań oraz przebieg leczenia.",
                    "en" => "Accurately maintaining patient medical records, documenting diagnoses, surgical procedures, test results, and treatment progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16370,
                "name" => json_encode([
                    "pl" => "Śledzenie wyników leczenia i udokumentowanie postępów oraz reakcji pacjenta na leczenie chirurgiczne.",
                    "en" => "Tracking treatment outcomes and documenting the progress and patient responses to surgical treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16371,
                "name" => json_encode([
                    "pl" => "Udział w badaniach naukowych, których celem jest poszerzenie wiedzy o metodach operacyjnych, nowych technologiach i innowacyjnych metodach leczenia chirurgicznego dzieci.",
                    "en" => "Participating in scientific research to expand knowledge of surgical methods, new technologies, and innovative methods of pediatric surgical treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16372,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych technik i standardów leczenia opartych na dowodach naukowych.",
                    "en" => "Implementing new techniques and treatment standards based on scientific evidence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16373,
                "name" => json_encode([
                    "pl" => "Szkolenie młodszych lekarzy, rezydentów i pielęgniarek w zakresie technik chirurgicznych oraz opieki nad pacjentem pediatrycznym.",
                    "en" => "Training junior doctors, residents, and nurses in surgical techniques and pediatric patient care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16374,
                "name" => json_encode([
                    "pl" => "Organizowanie szkoleń i warsztatów dla personelu medycznego, aby zwiększyć jakość opieki nad dziećmi w placówce.",
                    "en" => "Organizing training sessions and workshops for medical staff to enhance the quality of child care in the facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16375,
                "name" => json_encode([
                    "pl" => "Konsultowanie przypadków wymagających złożonych interwencji chirurgicznych, aby wybrać najlepsze podejście terapeutyczne.",
                    "en" => "Consulting cases requiring complex surgical interventions to choose the best therapeutic approach."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16376,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi specjalistami chirurgii dziecięcej, szczególnie w trudnych lub rzadkich przypadkach.",
                    "en" => "Collaborating with other pediatric surgery specialists, particularly in challenging or rare cases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16377,
                "name" => json_encode([
                    "pl" => "Udział w działaniach edukacyjnych i profilaktycznych dotyczących zdrowia dzieci, np. edukacja na temat unikania urazów, programy badań przesiewowych.",
                    "en" => "Participating in educational and preventive activities related to children's health, such as injury prevention education and screening programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16378,
                "name" => json_encode([
                    "pl" => "Promowanie zdrowego stylu życia i profilaktyki schorzeń, które mogą wymagać interwencji chirurgicznej w przyszłości.",
                    "en" => "Promoting a healthy lifestyle and the prevention of conditions that may require surgical intervention in the future."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16379,
                "name" => json_encode([
                    "pl" => "Udział w konferencjach, szkoleniach i warsztatach, aby poszerzać wiedzę i umiejętności w zakresie nowoczesnych technik chirurgii dziecięcej.",
                    "en" => "Participating in conferences, training sessions, and workshops to expand knowledge and skills in modern pediatric surgery techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16380,
                "name" => json_encode([
                    "pl" => "Śledzenie nowych wytycznych, standardów i technologii w chirurgii dziecięcej, aby zapewniać pacjentom opiekę zgodną z najnowszymi osiągnięciami medycyny.",
                    "en" => "Keeping up with new guidelines, standards, and technologies in pediatric surgery to provide care aligned with the latest medical advancements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_CHIRURGII_KLATKI_PIERSIOWEJ = [
            [
                "id" => 16381,
                "name" => json_encode([
                    "pl" => "Diagnozowanie schorzeń, takich jak nowotwory płuc, odma opłucnowa, ropniaki, choroby śródpiersia.",
                    "en" => "Diagnosing conditions such as lung cancer, pneumothorax, empyema, and mediastinal diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16382,
                "name" => json_encode([
                    "pl" => "Wykonywanie zabiegów w obrębie płuc, przepony, ściany klatki piersiowej, przełyku.",
                    "en" => "Performing procedures on the lungs, diaphragm, chest wall, and esophagus."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16383,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zabiegów, takich jak lobektomia, pneumonektomia, segmentektomia.",
                    "en" => "Conducting procedures such as lobectomy, pneumonectomy, and segmentectomy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16384,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zabiegów za pomocą technik małoinwazyjnych i tradycyjnych.",
                    "en" => "Performing procedures using minimally invasive and traditional techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16385,
                "name" => json_encode([
                    "pl" => "Leczenie urazów, np. złamań żeber, urazów dróg oddechowych, wycieku powietrza.",
                    "en" => "Treating injuries such as rib fractures, airway injuries, and air leaks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16386,
                "name" => json_encode([
                    "pl" => "Opieka przed- i pooperacyjna.",
                    "en" => "Preoperative and postoperative care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16387,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu zdrowia pacjenta oraz zarządzanie bólem i wsparcie w rehabilitacji.",
                    "en" => "Monitoring the patient's health status, managing pain, and providing rehabilitation support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16388,
                "name" => json_encode([
                    "pl" => "Współpraca z onkologami, pulmonologami, radiologami.",
                    "en" => "Collaborating with oncologists, pulmonologists, and radiologists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_CHIRURGII_NACZYNIOWEJ = [
            [
                "id" => 16389,
                "name" => json_encode([
                    "pl" => "Diagnozowanie chorób tętnic i żył, np. miażdżycy, tętniaków, żylaków, niedokrwienia kończyn.",
                    "en" => "Diagnosing arterial and venous diseases, such as atherosclerosis, aneurysms, varicose veins, and limb ischemia."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16390,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zabiegów naprawczych, takich jak bypassy, angioplastyka, stentowanie.",
                    "en" => "Performing reparative procedures, such as bypass surgeries, angioplasty, and stenting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16391,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie operacji na tętniakach, szczególnie w obrębie aorty.",
                    "en" => "Performing aneurysm surgeries, particularly in the aorta."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16392,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zabiegów skleroterapii, laseroterapii i tradycyjnych operacji usuwania żylaków.",
                    "en" => "Conducting sclerotherapy, laser therapy, and traditional varicose vein removal surgeries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16393,
                "name" => json_encode([
                    "pl" => "Leczenie ostrych przypadków zakrzepicy i zatorów w naczyniach.",
                    "en" => "Treating acute cases of thrombosis and vascular embolism."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16394,
                "name" => json_encode([
                    "pl" => "Wykonywanie zabiegów małoinwazyjnych, takich jak angioplastyka i endoprotezowanie naczyń.",
                    "en" => "Performing minimally invasive procedures, such as angioplasty and vascular endoprosthesis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16395,
                "name" => json_encode([
                    "pl" => "Współpraca z fizjoterapeutami w zakresie rehabilitacji pacjentów po zabiegach naczyniowych.",
                    "en" => "Collaborating with physiotherapists in the rehabilitation of patients after vascular procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_CHIRURGII_OGOLNEJ = [
            [
                "id" => 16396,
                "name" => json_encode([
                    "pl" => "Diagnozowanie chorób układu pokarmowego, przepuklin, chorób tarczycy, wyrostka robaczkowego.",
                    "en" => "Diagnosing diseases of the digestive system, hernias, thyroid diseases, and appendicitis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16397,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie operacji takich jak cholecystektomia, appendektomia, resekcje jelit, operacje przepuklin.",
                    "en" => "Performing surgeries such as cholecystectomy, appendectomy, bowel resections, and hernia repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16398,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zabiegów na narządach, takich jak wątroba, śledziona, trzustka.",
                    "en" => "Performing procedures on organs such as the liver, spleen, and pancreas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16399,
                "name" => json_encode([
                    "pl" => "Monitorowanie pacjenta po zabiegu, kontrola bólu, kontrolowanie gojenia ran.",
                    "en" => "Monitoring the patient after surgery, managing pain, and overseeing wound healing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16400,
                "name" => json_encode([
                    "pl" => "Wykonywanie operacji laparoskopowych, szczególnie w przypadku operacji pęcherzyka żółciowego, jelit.",
                    "en" => "Performing laparoscopic surgeries, especially for gallbladder and bowel procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16401,
                "name" => json_encode([
                    "pl" => "Szybka interwencja w przypadkach nagłych, np. krwawienia, perforacje jelit.",
                    "en" => "Rapid intervention in emergency cases such as bleeding and intestinal perforations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16402,
                "name" => json_encode([
                    "pl" => "Współpraca z anestezjologami, gastroenterologami, radiologami, onkologami.",
                    "en" => "Collaborating with anesthesiologists, gastroenterologists, radiologists, and oncologists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_CHIRURGII_ONKOLOGICZNEJ = [
            [
                "id" => 16403,
                "name" => json_encode([
                    "pl" => "Diagnozowanie nowotworów, w tym analiza wyników biopsji, badań obrazowych.",
                    "en" => "Diagnosing cancers, including the analysis of biopsy results and imaging studies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16404,
                "name" => json_encode([
                    "pl" => "Operacje usunięcia guzów, resekcje narządów objętych nowotworem (np. piersi, jelita, płuca).",
                    "en" => "Performing tumor removal surgeries and resections of cancer-affected organs (e.g., breast, intestines, lungs)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16405,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zabiegów rekonstrukcyjnych, np. rekonstrukcja piersi po mastektomii.",
                    "en" => "Performing reconstructive procedures, such as breast reconstruction after mastectomy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16406,
                "name" => json_encode([
                    "pl" => "Przygotowanie pacjenta do operacji oraz monitorowanie gojenia i zapobieganie powikłaniom.",
                    "en" => "Preparing the patient for surgery, monitoring healing, and preventing complications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16407,
                "name" => json_encode([
                    "pl" => "Tworzenie planów leczenia obejmujących chemioterapię, radioterapię, chirurgię.",
                    "en" => "Developing treatment plans that include chemotherapy, radiotherapy, and surgery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16408,
                "name" => json_encode([
                    "pl" => "Leczenie pacjentów z powikłaniami nowotworowymi, np. niedrożnością jelit, przerzutami.",
                    "en" => "Treating patients with cancer-related complications, such as intestinal obstruction or metastases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16409,
                "name" => json_encode([
                    "pl" => "Współpraca w ramach badań klinicznych nad nowymi metodami leczenia.",
                    "en" => "Collaborating in clinical trials on new treatment methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
        ];
        $LEKARZ_SPECJALISTA_CHIRURGII_PLASTYCZNEJ = [
            [
                "id" => 16410,
                "name" => json_encode([
                    "pl" => "Wykonywanie zabiegów rekonstrukcyjnych i estetycznych, np. rekonstrukcja po amputacjach, plastyka brzucha, liposukcja, lifting twarzy.",
                    "en" => "Performing reconstructive and aesthetic procedures, such as reconstruction after amputations, abdominoplasty, liposuction, and facelifts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16411,
                "name" => json_encode([
                    "pl" => "Operacje rekonstrukcyjne twarzy po urazach lub wrodzonych deformacjach (np. rozszczep wargi, podniebienia).",
                    "en" => "Reconstructive facial surgeries for trauma or congenital deformities (e.g., cleft lip, palate)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16412,
                "name" => json_encode([
                    "pl" => "Operacje rekonstrukcyjne i naprawcze dłoni, leczenie schorzeń takich jak zespół cieśni nadgarstka.",
                    "en" => "Reconstructive and reparative hand surgeries, including treatment of conditions such as carpal tunnel syndrome."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16413,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie skomplikowanych zabiegów rekonstrukcyjnych z wykorzystaniem technik mikrochirurgicznych.",
                    "en" => "Performing complex reconstructive surgeries using microsurgical techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16414,
                "name" => json_encode([
                    "pl" => "Wykonywanie przeszczepów skóry i tkanek, szczególnie w przypadku pacjentów po oparzeniach lub urazach.",
                    "en" => "Performing skin and tissue grafts, especially for patients with burns or injuries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16415,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów o możliwościach i ryzyku związanym z zabiegami estetycznymi.",
                    "en" => "Informing patients about the possibilities and risks associated with aesthetic procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_CHIRURGII_SZCZEKOWO_TWARZOWEJ = [
            [
                "id" => 16416,
                "name" => json_encode([
                    "pl" => "Leczenie urazów twarzoczaszki, złamań żuchwy, złamań kości jarzmowej, złamań szczęki.",
                    "en" => "Treating craniofacial injuries, jaw fractures, zygomatic bone fractures, and maxillary fractures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16417,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zabiegów rekonstrukcyjnych po urazach oraz operacje związane z wadami wrodzonymi.",
                    "en" => "Performing reconstructive procedures after injuries and surgeries related to congenital defects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16418,
                "name" => json_encode([
                    "pl" => "Korekcja wad zgryzu i deformacji szczęk, np. za pomocą osteotomii.",
                    "en" => "Correcting malocclusions and jaw deformities, e.g., through osteotomy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16419,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i usuwanie guzów oraz nowotworów w obrębie jamy ustnej, szczęk i twarzy.",
                    "en" => "Diagnosing and removing tumors and cancers in the oral cavity, jaws, and face."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16420,
                "name" => json_encode([
                    "pl" => "Leczenie chorób i nowotworów gruczołów ślinowych, np. ślinianki przyusznej.",
                    "en" => "Treating diseases and cancers of the salivary glands, e.g., the parotid gland."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16421,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zabiegów przygotowujących do wszczepienia implantów zębowych, np. augmentacja kości.",
                    "en" => "Performing procedures to prepare for dental implants, e.g., bone augmentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16422,
                "name" => json_encode([
                    "pl" => "Leczenie bólu twarzy, SSŻ oraz związanych z nimi dysfunkcji.",
                    "en" => "Treating facial pain, TMJ disorders, and related dysfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_CHOROB_PLUC = [
            [
                "id" => 16423,
                "name" => json_encode([
                    "pl" => "Wykonywanie i interpretacja badań obrazowych, takich jak RTG klatki piersiowej, tomografia komputerowa (CT) oraz rezonans magnetyczny (MRI), w celu oceny stanu płuc.",
                    "en" => "Performing and interpreting imaging studies, such as chest X-rays, computed tomography (CT), and magnetic resonance imaging (MRI), to assess lung condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16424,
                "name" => json_encode([
                    "pl" => "Wykonywanie badań spirometrycznych.",
                    "en" => "Conducting spirometry tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16425,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów gazometrycznych.",
                    "en" => "Performing blood gas tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16426,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie przewlekłej obturacyjnej choroby płuc (POChP), astmy oskrzelowej, włóknienia płuc oraz innych przewlekłych chorób płuc.",
                    "en" => "Diagnosing and treating chronic obstructive pulmonary disease (COPD), bronchial asthma, pulmonary fibrosis, and other chronic lung diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16427,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu zdrowia pacjentów z przewlekłymi schorzeniami oraz dostosowywanie terapii w zależności od ich postępów lub zaostrzeń.",
                    "en" => "Monitoring the health of patients with chronic conditions and adjusting therapies based on their progress or exacerbations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16428,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie infekcji dróg oddechowych, takich jak zapalenie płuc, gruźlica, zapalenie oskrzeli oraz grzybicze infekcje płuc.",
                    "en" => "Diagnosing and treating respiratory infections, such as pneumonia, tuberculosis, bronchitis, and fungal lung infections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16429,
                "name" => json_encode([
                    "pl" => "Wdrażanie odpowiedniej terapii antybiotykowej, przeciwwirusowej lub przeciwgrzybiczej w zależności od rodzaju zakażenia.",
                    "en" => "Implementing appropriate antibiotic, antiviral, or antifungal therapy depending on the type of infection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16430,
                "name" => json_encode([
                    "pl" => "Wykonywanie bronchoskopii w celu diagnostyki chorób płuc, pobierania próbek tkanek (biopsji) oraz usuwania ciał obcych lub zatorów w drogach oddechowych.",
                    "en" => "Performing bronchoscopy for lung disease diagnosis, tissue sampling (biopsy), and removing foreign bodies or obstructions in the airways."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16431,
                "name" => json_encode([
                    "pl" => "Interpretowanie wyników badań endoskopowych i podejmowanie decyzji dotyczących dalszego leczenia na podstawie uzyskanych wyników.",
                    "en" => "Interpreting endoscopic findings and making treatment decisions based on the results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16432,
                "name" => json_encode([
                    "pl" => "Współpraca z lekarzami innych specjalności, takimi jak kardiolodzy, onkolodzy, interniści, w celu zapewnienia kompleksowej opieki nad pacjentem.",
                    "en" => "Collaborating with other specialists, such as cardiologists, oncologists, and internists, to provide comprehensive patient care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16433,
                "name" => json_encode([
                    "pl" => "Udzielanie porad dotyczących leczenia i diagnostyki chorób płuc w przypadku pacjentów hospitalizowanych z innymi schorzeniami.",
                    "en" => "Providing consultations on the treatment and diagnosis of lung diseases in hospitalized patients with other conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16434,
                "name" => json_encode([
                    "pl" => "Zlecanie oraz monitorowanie terapii tlenowej u pacjentów z przewlekłymi problemami oddechowymi, którzy wymagają długotrwałego leczenia tlenem.",
                    "en" => "Prescribing and monitoring oxygen therapy for patients with chronic respiratory problems requiring long-term oxygen treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16435,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie oceny skuteczności terapii tlenowej i dostosowywanie jej parametrów do potrzeb pacjenta.",
                    "en" => "Evaluating the effectiveness of oxygen therapy and adjusting its parameters to meet the patient's needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16436,
                "name" => json_encode([
                    "pl" => "Wykrywanie i diagnostyka raka płuc oraz współpraca z onkologami w planowaniu i realizacji leczenia, w tym chemioterapii i radioterapii.",
                    "en" => "Detecting and diagnosing lung cancer and collaborating with oncologists in planning and implementing treatment, including chemotherapy and radiotherapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16437,
                "name" => json_encode([
                    "pl" => "Monitorowanie pacjentów z nowotworami płuc oraz podejmowanie decyzji o dalszym leczeniu w zależności od postępów choroby.",
                    "en" => "Monitoring patients with lung cancer and deciding on further treatment based on disease progression."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16438,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie chorób zawodowych, takich jak pylica płuc, azbestoza i inne choroby wynikające z ekspozycji na szkodliwe substancje.",
                    "en" => "Diagnosing and treating occupational diseases, such as pneumoconiosis, asbestosis, and other diseases caused by exposure to harmful substances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16439,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie pacjentów z ostrą oraz przewlekłą niewydolnością oddechową, stosowanie odpowiednich metod wspomagania oddychania.",
                    "en" => "Diagnosing and treating patients with acute and chronic respiratory failure, using appropriate respiratory support methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16440,
                "name" => json_encode([
                    "pl" => "Wdrażanie wentylacji mechanicznej lub terapii respiratorowej u pacjentów z ciężką niewydolnością oddechową.",
                    "en" => "Implementing mechanical ventilation or respirator therapy for patients with severe respiratory failure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16441,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie zaburzeń oddychania podczas snu, takich jak bezdech senny, oraz zalecanie terapii, w tym stosowania aparatów CPAP.",
                    "en" => "Diagnosing and treating sleep-related breathing disorders, such as sleep apnea, and recommending therapies, including CPAP devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16442,
                "name" => json_encode([
                    "pl" => "Monitorowanie pacjentów z bezdechem sennym i dostosowywanie leczenia, aby poprawić jakość snu i zmniejszyć ryzyko powikłań.",
                    "en" => "Monitoring patients with sleep apnea and adjusting treatment to improve sleep quality and reduce the risk of complications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16443,
                "name" => json_encode([
                    "pl" => "Diagnozowanie alergii wziewnych, takich jak alergiczny nieżyt nosa, oraz ich wpływu na stan zdrowia układu oddechowego.",
                    "en" => "Diagnosing inhalant allergies, such as allergic rhinitis, and their impact on respiratory health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16444,
                "name" => json_encode([
                    "pl" => "Monitorowanie pacjentów po zabiegach chirurgicznych związanych z płucami, takich jak resekcja płuca czy zabiegi torakoskopowe.",
                    "en" => "Monitoring patients after lung-related surgeries, such as lung resection or thoracoscopic procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16445,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie rehabilitacji oddechowej i dostosowywanie terapii, aby przywrócić sprawność oddechową pacjenta.",
                    "en" => "Conducting respiratory rehabilitation and adjusting therapy to restore the patient's respiratory function."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_CHOROB_WEWNETRZNYCH = [
            [
                "id" => 16446,
                "name" => json_encode([
                    "pl" => "Diagnoza i leczenie szerokiego zakresu schorzeń, m.in. chorób serca, układu oddechowego, układu pokarmowego, moczowego i nerwowego.",
                    "en" => "Diagnosis and treatment of a wide range of conditions, including heart diseases, respiratory, digestive, urinary, and nervous system disorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16447,
                "name" => json_encode([
                    "pl" => "Zarządzanie długoterminową opieką nad pacjentami z przewlekłymi chorobami, takimi jak nadciśnienie, cukrzyca, astma, przewlekła obturacyjna choroba płuc (POChP).",
                    "en" => "Managing long-term care for patients with chronic conditions such as hypertension, diabetes, asthma, and chronic obstructive pulmonary disease (COPD)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16448,
                "name" => json_encode([
                    "pl" => "Regularne kontrole i oceny stanu zdrowia pacjentów, dostosowywanie leczenia w zależności od wyników badań i przebiegu choroby.",
                    "en" => "Conducting regular check-ups and assessments of patients' health, adjusting treatment based on test results and disease progression."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16449,
                "name" => json_encode([
                    "pl" => "Promowanie zdrowego stylu życia, edukacja pacjentów na temat diety, aktywności fizycznej i nałogów.",
                    "en" => "Promoting a healthy lifestyle and educating patients about diet, physical activity, and habits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16450,
                "name" => json_encode([
                    "pl" => "Konsultowanie przypadków z lekarzami innych specjalności oraz koordynacja opieki nad pacjentami wymagającymi złożonego leczenia.",
                    "en" => "Consulting cases with doctors from other specialties and coordinating care for patients requiring complex treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_CHOROB_ZAKAZNYCH = [
            [
                "id" => 16451,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie i leczenie infekcji wirusowych, bakteryjnych, grzybiczych i pasożytniczych, takich jak COVID-19, gruźlica, wirusowe zapalenie wątroby, malaria.",
                    "en" => "Diagnosing and treating viral, bacterial, fungal, and parasitic infections, such as COVID-19, tuberculosis, viral hepatitis, and malaria."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16452,
                "name" => json_encode([
                    "pl" => "Stosowanie środków izolacji pacjentów oraz wdrażanie procedur zapobiegawczych w placówkach medycznych.",
                    "en" => "Implementing patient isolation measures and preventive procedures in medical facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16453,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów o sposobach zapobiegania infekcjom, np. poprzez szczepienia, higienę, profilaktykę.",
                    "en" => "Educating patients on infection prevention methods, such as vaccination, hygiene, and prophylaxis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16454,
                "name" => json_encode([
                    "pl" => "Monitorowanie przypadków chorób zakaźnych, zgłaszanie ognisk epidemicznych oraz współpraca przy śledzeniu kontaktów.",
                    "en" => "Monitoring infectious disease cases, reporting outbreaks, and collaborating on contact tracing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16455,
                "name" => json_encode([
                    "pl" => "Leczenie i monitorowanie pacjentów z przewlekłymi infekcjami, takimi jak HIV/AIDS, przewlekłe wirusowe zapalenie wątroby.",
                    "en" => "Treating and monitoring patients with chronic infections, such as HIV/AIDS and chronic viral hepatitis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_DERMATOLOGII_I_WENEROLOGII = [
            [
                "id" => 16456,
                "name" => json_encode([
                    "pl" => "Leczenie chorób dermatologicznych, takich jak trądzik, łuszczyca, egzema, atopowe zapalenie skóry.",
                    "en" => "Treating dermatological conditions such as acne, psoriasis, eczema, and atopic dermatitis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16457,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie i leczenie chorób przenoszonych drogą płciową, takich jak kiła, rzeżączka, chlamydioza.",
                    "en" => "Diagnosing and treating sexually transmitted diseases such as syphilis, gonorrhea, and chlamydia."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16458,
                "name" => json_encode([
                    "pl" => "Ocena zmian skórnych, pieprzyków i znamion w celu wczesnego wykrywania nowotworów skóry.",
                    "en" => "Assessing skin lesions, moles, and birthmarks for early detection of skin cancers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16459,
                "name" => json_encode([
                    "pl" => "Doradzanie pacjentom w zakresie pielęgnacji skóry, leczenia przebarwień, blizn, zabiegów przeciwstarzeniowych.",
                    "en" => "Advising patients on skin care, treating discoloration and scars, and performing anti-aging procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16460,
                "name" => json_encode([
                    "pl" => "Edukowanie pacjentów na temat ochrony przed słońcem, regularnej kontroli znamion i unikania czynników ryzyka.",
                    "en" => "Educating patients on sun protection, regular mole checks, and avoiding risk factors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_DIABETOLOGII = [
            [
                "id" => 16461,
                "name" => json_encode([
                    "pl" => "Diagnozowanie cukrzycy typu 1, typu 2, cukrzycy ciążowej oraz innych zaburzeń metabolicznych związanych z gospodarką węglowodanową.",
                    "en" => "Diagnosing type 1 diabetes, type 2 diabetes, gestational diabetes, and other metabolic disorders related to carbohydrate metabolism."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16462,
                "name" => json_encode([
                    "pl" => "Przepisywanie i monitorowanie leczenia insuliną lub doustnymi lekami przeciwcukrzycowymi.",
                    "en" => "Prescribing and monitoring treatment with insulin or oral antidiabetic medications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16463,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów o sposobach monitorowania glikemii, stosowaniu odpowiedniej diety, aktywności fizycznej oraz profilaktyki powikłań cukrzycowych.",
                    "en" => "Educating patients on blood glucose monitoring, appropriate diet, physical activity, and prevention of diabetic complications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16464,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie powikłań cukrzycowych, takich jak nefropatia, retinopatia, neuropatia cukrzycowa, zespół stopy cukrzycowej.",
                    "en" => "Diagnosing and treating diabetic complications, such as nephropathy, retinopathy, diabetic neuropathy, and diabetic foot syndrome."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16465,
                "name" => json_encode([
                    "pl" => "Konsultacje z kardiologami, nefrologami, neurologami, aby zapewnić kompleksową opiekę nad pacjentami z cukrzycą i jej powikłaniami.",
                    "en" => "Consulting with cardiologists, nephrologists, and neurologists to provide comprehensive care for patients with diabetes and its complications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_DIAGNOSTYKI_LABORATORYJNEJ = [
            [
                "id" => 16466,
                "name" => json_encode([
                    "pl" => "Ocena wyników badań, takich jak morfologia krwi, biochemia, serologia, badania genetyczne.",
                    "en" => "Assessing test results such as blood morphology, biochemistry, serology, and genetic tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16467,
                "name" => json_encode([
                    "pl" => "Pomoc w interpretacji wyników badań oraz doradztwo w zakresie diagnostyki laboratoryjnej.",
                    "en" => "Providing assistance in interpreting test results and advising on laboratory diagnostics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16468,
                "name" => json_encode([
                    "pl" => "Dbałość o jakość badań, weryfikowanie procedur i przestrzeganie standardów laboratoryjnych.",
                    "en" => "Ensuring the quality of tests, verifying procedures, and adhering to laboratory standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16469,
                "name" => json_encode([
                    "pl" => "Wykonywanie badań z zakresu immunologii, mikrobiologii, biochemii, toksykologii oraz prowadzenie badań genetycznych.",
                    "en" => "Conducting tests in immunology, microbiology, biochemistry, toxicology, and genetic research."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16470,
                "name" => json_encode([
                    "pl" => "Wprowadzanie innowacyjnych metod diagnostycznych oraz technologii laboratoryjnych.",
                    "en" => "Implementing innovative diagnostic methods and laboratory technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_ENDOKRYNOLOGII = [
            [
                "id" => 16471,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie zaburzeń hormonalnych, takich jak niedoczynność i nadczynność tarczycy, choroba Cushinga, akromegalia, zaburzenia funkcji nadnerczy.",
                    "en" => "Diagnosing and treating hormonal disorders, such as hypothyroidism, hyperthyroidism, Cushing's disease, acromegaly, and adrenal dysfunction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16472,
                "name" => json_encode([
                    "pl" => "Leczenie pacjentów z osteoporozą, hiperkalcemią, zaburzeniami metabolicznymi.",
                    "en" => "Treating patients with osteoporosis, hypercalcemia, and metabolic disorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16473,
                "name" => json_encode([
                    "pl" => "Edukacja pacjentów na temat schorzeń hormonalnych, stosowania leków, zasad odpowiedniej diety i stylu życia.",
                    "en" => "Educating patients about hormonal disorders, medication use, appropriate diet, and lifestyle guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16474,
                "name" => json_encode([
                    "pl" => "Konsultacje z ginekologami, internistami, onkologami w celu zapewnienia kompleksowej opieki nad pacjentem z chorobami hormonalnymi.",
                    "en" => "Consulting with gynecologists, internists, and oncologists to provide comprehensive care for patients with hormonal disorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16475,
                "name" => json_encode([
                    "pl" => "Regularne kontrole poziomu hormonów, monitorowanie terapii zastępczej oraz dostosowywanie dawek leków hormonalnych.",
                    "en" => "Conducting regular hormone level checks, monitoring replacement therapy, and adjusting doses of hormonal medications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_EPIDEMIOLOGII = [
            [
                "id" => 16476,
                "name" => json_encode([
                    "pl" => "Analiza danych dotyczących rozprzestrzeniania się chorób, monitorowanie trendów zdrowotnych w społeczeństwie.",
                    "en" => "Analyzing data on disease spread and monitoring health trends in society."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16477,
                "name" => json_encode([
                    "pl" => "Identyfikacja czynników ryzyka występowania chorób oraz opracowywanie strategii profilaktyki.",
                    "en" => "Identifying risk factors for diseases and developing prevention strategies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16478,
                "name" => json_encode([
                    "pl" => "Współpraca z szpitalami, przychodniami oraz jednostkami rządowymi w celu monitorowania i kontroli ognisk chorób.",
                    "en" => "Collaborating with hospitals, clinics, and government units to monitor and control disease outbreaks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16479,
                "name" => json_encode([
                    "pl" => "Tworzenie programów zdrowotnych, np. dotyczących szczepień, profilaktyki chorób zakaźnych, chorób cywilizacyjnych.",
                    "en" => "Creating health programs, e.g., on vaccinations, prevention of infectious diseases, and lifestyle diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16480,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o zagrożeniach zdrowotnych, profilaktyce, oraz działaniach zapobiegających rozprzestrzenianiu się chorób.",
                    "en" => "Providing information on health threats, prevention, and measures to prevent disease spread."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_FARMAKOLOGII_KLINICZNEJ = [
            [
                "id" => 16481,
                "name" => json_encode([
                    "pl" => "Monitorowanie efektów terapii farmakologicznej oraz analiza skutków ubocznych leków.",
                    "en" => "Monitoring the effects of pharmacological therapy and analyzing side effects of medications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16482,
                "name" => json_encode([
                    "pl" => "Konsultacje dotyczące wyboru najskuteczniejszych i najbezpieczniejszych leków w leczeniu różnych chorób.",
                    "en" => "Providing consultations on selecting the most effective and safest medications for treating various diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16483,
                "name" => json_encode([
                    "pl" => "Udział w badaniach klinicznych mających na celu ocenę skuteczności i bezpieczeństwa nowych terapii.",
                    "en" => "Participating in clinical trials to evaluate the efficacy and safety of new therapies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16484,
                "name" => json_encode([
                    "pl" => "Analiza możliwych interakcji między lekami oraz doradztwo w zakresie optymalizacji terapii farmakologicznej.",
                    "en" => "Analyzing potential drug interactions and providing advice on optimizing pharmacological therapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16485,
                "name" => json_encode([
                    "pl" => "Szkolenie i doradztwo w zakresie farmakologii, w tym zasad stosowania leków i zapobiegania skutkom ubocznym.",
                    "en" => "Training and advising on pharmacology, including drug usage principles and side effect prevention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_GASTROENTEROLOGII = [
            [
                "id" => 16486,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie i leczenie chorób żołądka, jelit, wątroby, trzustki i dróg żółciowych, takich jak choroba wrzodowa, zapalenie wątroby, choroba Crohna, zespół jelita drażliwego.",
                    "en" => "Diagnosing and treating diseases of the stomach, intestines, liver, pancreas, and bile ducts, such as peptic ulcer disease, hepatitis, Crohn's disease, and irritable bowel syndrome."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16487,
                "name" => json_encode([
                    "pl" => "Wykonywanie gastroskopii, kolonoskopii, endoskopowej cholangiopankreatografii (ERCP) oraz biopsji.",
                    "en" => "Performing gastroscopy, colonoscopy, endoscopic retrograde cholangiopancreatography (ERCP), and biopsies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16488,
                "name" => json_encode([
                    "pl" => "Leczenie przewlekłych chorób wątroby, takich jak wirusowe zapalenie wątroby typu B i C, marskość wątroby, stłuszczenie wątroby.",
                    "en" => "Treating chronic liver diseases, such as hepatitis B and C, liver cirrhosis, and fatty liver disease."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16489,
                "name" => json_encode([
                    "pl" => "Doradzanie pacjentom z chorobami przewodu pokarmowego w zakresie odpowiedniej diety.",
                    "en" => "Advising patients with gastrointestinal diseases on appropriate diets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16490,
                "name" => json_encode([
                    "pl" => "Promowanie zdrowych nawyków żywieniowych oraz edukowanie pacjentów w zakresie profilaktyki chorób przewodu pokarmowego.",
                    "en" => "Promoting healthy eating habits and educating patients on the prevention of gastrointestinal diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_GENETYKI_KLINICZNEJ = [
            [
                "id" => 16491,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie i leczenie chorób o podłożu genetycznym, takich jak mukowiscydoza, zespół Downa, choroby metaboliczne.",
                    "en" => "Diagnosing and treating genetic disorders such as cystic fibrosis, Down syndrome, and metabolic diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16492,
                "name" => json_encode([
                    "pl" => "Konsultowanie rodzin i pacjentów na temat ryzyka dziedziczenia chorób oraz możliwości prewencji.",
                    "en" => "Consulting families and patients on the risk of inheriting diseases and preventive options."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16493,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów genetycznych, takich jak kariotyp, sekwencjonowanie DNA, analiza mutacji genetycznych.",
                    "en" => "Performing genetic tests such as karyotyping, DNA sequencing, and analysis of genetic mutations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16494,
                "name" => json_encode([
                    "pl" => "Wdrażanie leczenia i terapii odpowiednich dla pacjentów z chorobami genetycznymi.",
                    "en" => "Implementing treatment and therapies suitable for patients with genetic disorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16495,
                "name" => json_encode([
                    "pl" => "Współpraca z pediatrami, onkologami, kardiologami, neurologami w przypadku pacjentów z genetycznym ryzykiem wystąpienia chorób.",
                    "en" => "Collaborating with pediatricians, oncologists, cardiologists, and neurologists for patients with a genetic risk of developing diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_GERIATRII = [
            [
                "id" => 16496,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie schorzeń charakterystycznych dla osób starszych, takich jak choroba Alzheimera, choroba Parkinsona, osteoporoza, nadciśnienie.",
                    "en" => "Diagnosing and treating conditions characteristic of older adults, such as Alzheimer's disease, Parkinson's disease, osteoporosis, and hypertension."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16497,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szczegółowej oceny zdrowia fizycznego, psychicznego, funkcjonalnego oraz socjalnego seniorów.",
                    "en" => "Conducting comprehensive assessments of physical, mental, functional, and social health in seniors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16498,
                "name" => json_encode([
                    "pl" => "Zapobieganie i leczenie upadków, zespołów otępiennych, niedożywienia, zaburzeń snu, polifarmacji.",
                    "en" => "Preventing and treating falls, dementia syndromes, malnutrition, sleep disorders, and polypharmacy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16499,
                "name" => json_encode([
                    "pl" => "Organizowanie planów opieki, w tym rehabilitacji i wsparcia społecznego.",
                    "en" => "Organizing care plans, including rehabilitation and social support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16500,
                "name" => json_encode([
                    "pl" => "Wsparcie rodzin i edukacja w zakresie opieki nad osobami starszymi, zasad bezpieczeństwa oraz zdrowego stylu życia.",
                    "en" => "Supporting families and educating them on elderly care, safety guidelines, and healthy lifestyles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_GINEKOLOGII_ONKOLOGICZNEJ = [
            [
                "id" => 16501,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie nowotworów jajników, szyjki macicy, trzonu macicy, sromu i pochwy.",
                    "en" => "Diagnosing cancers of the ovaries, cervix, endometrium, vulva, and vagina."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16502,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie operacji usunięcia guzów, a także stosowanie chemioterapii i radioterapii we współpracy z onkologami.",
                    "en" => "Performing tumor removal surgeries and coordinating chemotherapy and radiotherapy treatments in collaboration with oncologists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16503,
                "name" => json_encode([
                    "pl" => "Organizowanie badań przesiewowych, takich jak cytologia, USG, testy HPV w celu wczesnego wykrywania zmian nowotworowych.",
                    "en" => "Organizing screening tests such as cytology, ultrasound, and HPV tests for early detection of cancerous changes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16504,
                "name" => json_encode([
                    "pl" => "Edukacja pacjentek na temat profilaktyki nowotworów narządu rodnego, szczepień przeciwko HPV, regularnych badań.",
                    "en" => "Educating patients about gynecological cancer prevention, HPV vaccination, and the importance of regular check-ups."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16505,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu zdrowia pacjentek po leczeniu nowotworowym, rehabilitacja i kontrolowanie nawrotów.",
                    "en" => "Monitoring the health of patients post-cancer treatment, providing rehabilitation, and checking for recurrences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_HEMATOLOGII = [
            [
                "id" => 16506,
                "name" => json_encode([
                    "pl" => "Leczenie anemii, białaczek, chłoniaków, szpiczaka mnogiego, zaburzeń krzepnięcia krwi (np. hemofilia).",
                    "en" => "Treating anemia, leukemias, lymphomas, multiple myeloma, and blood clotting disorders (e.g., hemophilia)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16507,
                "name" => json_encode([
                    "pl" => "Analiza wyników badań krwi, takich jak morfologia, koagulogram, rozmaz krwi, badania szpiku kostnego.",
                    "en" => "Analyzing blood test results, such as blood count, coagulation profile, blood smear, and bone marrow tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16508,
                "name" => json_encode([
                    "pl" => "Wdrażanie terapii przeciwnowotworowych oraz monitorowanie skuteczności leczenia u pacjentów z chorobami hematologicznymi.",
                    "en" => "Implementing cancer therapies and monitoring treatment effectiveness in patients with hematologic diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16509,
                "name" => json_encode([
                    "pl" => "Organizacja i nadzór nad transfuzjami krwi oraz przygotowanie pacjentów do przeszczepów szpiku kostnego.",
                    "en" => "Organizing and overseeing blood transfusions and preparing patients for bone marrow transplants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16510,
                "name" => json_encode([
                    "pl" => "Przekazywanie pacjentom informacji na temat ich chorób oraz profilaktyki związanej z ryzykiem powikłań hematologicznych.",
                    "en" => "Providing patients with information about their diseases and preventive measures related to hematological complication risks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_HIPERTENSJOLOGII = [
            [
                "id" => 16511,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie i leczenie nadciśnienia pierwotnego oraz wtórnego, a także monitorowanie efektów terapii.",
                    "en" => "Diagnosing and treating primary and secondary hypertension and monitoring therapy outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16512,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów o sposobach kontroli ciśnienia tętniczego, zmianach stylu życia oraz znaczeniu regularnej aktywności fizycznej.",
                    "en" => "Educating patients on blood pressure management, lifestyle changes, and the importance of regular physical activity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16513,
                "name" => json_encode([
                    "pl" => "Zarządzanie powikłaniami związanymi z nadciśnieniem, takimi jak choroba wieńcowa, niewydolność serca, udar mózgu.",
                    "en" => "Managing complications related to hypertension, such as coronary artery disease, heart failure, and stroke."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16514,
                "name" => json_encode([
                    "pl" => "Zlecanie i interpretacja badań takich jak EKG, USG serca, badania laboratoryjne.",
                    "en" => "Ordering and interpreting tests such as ECG, heart ultrasound, and laboratory studies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16515,
                "name" => json_encode([
                    "pl" => "Współpraca z kardiologami, nefrologami, diabetologami w celu kompleksowej opieki nad pacjentami z nadciśnieniem.",
                    "en" => "Collaborating with cardiologists, nephrologists, and diabetologists to provide comprehensive care for patients with hypertension."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_IMMUNOLOGII_KLINICZNEJ = [
            [
                "id" => 16516,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie i leczenie chorób, takich jak toczeń, reumatoidalne zapalenie stawów, stwardnienie rozsiane, zespół Sjögrena.",
                    "en" => "Diagnosing and treating diseases such as lupus, rheumatoid arthritis, multiple sclerosis, and Sjögren's syndrome."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16517,
                "name" => json_encode([
                    "pl" => "Wdrażanie terapii wspierających układ odpornościowy oraz monitorowanie stanu pacjentów z niedoborami odporności.",
                    "en" => "Implementing therapies that support the immune system and monitoring the condition of patients with immune deficiencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16518,
                "name" => json_encode([
                    "pl" => "Stosowanie terapii immunosupresyjnych i biologicznych oraz monitorowanie ich skuteczności.",
                    "en" => "Administering immunosuppressive and biological therapies and monitoring their effectiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16519,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów o sposobach ochrony przed infekcjami, odpowiednich szczepieniach i zdrowym stylu życia.",
                    "en" => "Educating patients on infection prevention, appropriate vaccinations, and maintaining a healthy lifestyle."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16520,
                "name" => json_encode([
                    "pl" => "Konsultacje z dermatologami, reumatologami, hematologami w celu kompleksowej opieki nad pacjentami z zaburzeniami układu odpornościowego.",
                    "en" => "Consulting with dermatologists, rheumatologists, and hematologists to provide comprehensive care for patients with immune system disorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_KARDIOCHIRURGII = [
            [
                "id" => 16521,
                "name" => json_encode([
                    "pl" => "Leczenie chorób serca i naczyń krwionośnych, takich jak choroba wieńcowa, wady zastawkowe, tętniaki aorty.",
                    "en" => "Treating heart and blood vessel diseases such as coronary artery disease, valvular defects, and aortic aneurysms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16522,
                "name" => json_encode([
                    "pl" => "Wykonywanie operacji pomostowania aortalno-wieńcowego (bypass), operacji na zastawkach, operacji wad wrodzonych serca.",
                    "en" => "Performing coronary artery bypass grafting (CABG), valve surgeries, and congenital heart defect operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16523,
                "name" => json_encode([
                    "pl" => "Zabiegi rekonstrukcji aorty, naczyń wieńcowych oraz endoprotezowanie aorty.",
                    "en" => "Conducting aortic reconstruction procedures, coronary vessel surgeries, and aortic endoprosthesis placement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16524,
                "name" => json_encode([
                    "pl" => "Przygotowanie pacjenta do operacji, monitorowanie stanu zdrowia w okresie pooperacyjnym, rehabilitacja kardiologiczna.",
                    "en" => "Preparing patients for surgery, monitoring their health in the postoperative period, and providing cardiac rehabilitation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16525,
                "name" => json_encode([
                    "pl" => "Współpraca z kardiologami, anestezjologami, pielęgniarkami kardiochirurgicznymi w zakresie opieki nad pacjentem przed i po operacji.",
                    "en" => "Collaborating with cardiologists, anesthesiologists, and cardiac surgical nurses in the care of patients before and after surgery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_KARDIOLOGII = [
            [
                "id" => 16526,
                "name" => json_encode([
                    "pl" => "Leczenie nadciśnienia, choroby wieńcowej, niewydolności serca, zaburzeń rytmu serca, zapalenia mięśnia sercowego.",
                    "en" => "Treating hypertension, coronary artery disease, heart failure, arrhythmias, and myocarditis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16527,
                "name" => json_encode([
                    "pl" => "Wykonywanie EKG, echokardiografii, prób wysiłkowych, monitoringu Holtera.",
                    "en" => "Performing ECG, echocardiography, stress tests, and Holter monitoring."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16528,
                "name" => json_encode([
                    "pl" => "Regularne kontrole, dostosowywanie leczenia oraz monitorowanie skuteczności terapii.",
                    "en" => "Conducting regular check-ups, adjusting treatments, and monitoring therapy effectiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16529,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji na temat profilaktyki chorób sercowo-naczyniowych, diety, aktywności fizycznej i zdrowego stylu życia.",
                    "en" => "Educating patients on cardiovascular disease prevention, diet, physical activity, and healthy lifestyle choices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16530,
                "name" => json_encode([
                    "pl" => "Koordynowanie opieki nad pacjentami wymagającymi interwencji kardiochirurgicznych lub specjalistycznych zabiegów.",
                    "en" => "Coordinating care for patients requiring cardiac surgery or specialized procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_KARDIOLOGII_DZIECIĘCEJ = [
            [
                "id" => 16531,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie wad wrodzonych, takich jak ubytki w przegrodach serca, tetralogia Fallota, oraz nabytych chorób serca u dzieci.",
                    "en" => "Diagnosing congenital defects such as septal defects, Tetralogy of Fallot, and acquired heart diseases in children."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16532,
                "name" => json_encode([
                    "pl" => "Regularne kontrole dzieci z wrodzonymi i nabytymi wadami serca oraz dostosowywanie planów leczenia.",
                    "en" => "Conducting regular check-ups for children with congenital and acquired heart defects and adjusting treatment plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16533,
                "name" => json_encode([
                    "pl" => "Echokardiografia, EKG, testy wysiłkowe, badania Holtera u dzieci.",
                    "en" => "Performing echocardiography, ECG, stress tests, and Holter monitoring in children."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16534,
                "name" => json_encode([
                    "pl" => "Przygotowanie dzieci do zabiegów kardiochirurgicznych oraz monitorowanie po operacji.",
                    "en" => "Preparing children for cardiac surgeries and monitoring them post-operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16535,
                "name" => json_encode([
                    "pl" => "Przekazywanie rodzinom informacji na temat wad serca, profilaktyki oraz sposobów radzenia sobie z chorobą dziecka.",
                    "en" => "Providing families with information on heart defects, prevention, and coping strategies for their child's condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_MEDYCYNY_NUKLEARNEJ = [
            [
                "id" => 16536,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań, takich jak scyntygrafia, SPECT, PET, które pozwalają ocenić funkcję narządów, np. serca, tarczycy, nerek.",
                    "en" => "Conducting studies such as scintigraphy, SPECT, and PET to assess organ function, e.g., heart, thyroid, and kidneys."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16537,
                "name" => json_encode([
                    "pl" => "Stosowanie radioizotopów w terapii niektórych nowotworów, np. leczenie przerzutów do kości, nadczynności tarczycy.",
                    "en" => "Using radioisotopes in the treatment of certain cancers, e.g., treating bone metastases and hyperthyroidism."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16538,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów o przygotowaniach do badań radioizotopowych, wyjaśnianie procedury oraz ewentualnych skutków ubocznych.",
                    "en" => "Informing patients about preparations for radioisotope studies, explaining the procedure, and discussing potential side effects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16539,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że dawki promieniowania są bezpieczne dla pacjenta i personelu oraz przestrzeganie norm bezpieczeństwa radiologicznego.",
                    "en" => "Ensuring radiation doses are safe for patients and staff and adhering to radiological safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16540,
                "name" => json_encode([
                    "pl" => "Konsultacje z onkologami, kardiologami, endokrynologami, w celu ustalenia potrzeby badań izotopowych lub terapii izotopowej.",
                    "en" => "Consulting with oncologists, cardiologists, and endocrinologists to determine the need for isotope studies or therapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_MEDYCYNY_PALIATYWNEJ = [
            [
                "id" => 16541,
                "name" => json_encode([
                    "pl" => "Leczenie pacjentów w zaawansowanym stadium chorób, takich jak nowotwory, przewlekła niewydolność serca, niewydolność nerek, choroby neurologiczne.",
                    "en" => "Treating patients in advanced stages of diseases such as cancer, chronic heart failure, kidney failure, and neurological disorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16542,
                "name" => json_encode([
                    "pl" => "Przepisywanie leków przeciwbólowych, przeciwwymiotnych, uspokajających i innych, które pomagają kontrolować objawy i poprawić jakość życia pacjentów.",
                    "en" => "Prescribing pain relief, anti-nausea, sedative, and other medications to control symptoms and improve patients' quality of life."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16543,
                "name" => json_encode([
                    "pl" => "Zapewnienie pacjentom i ich rodzinom wsparcia emocjonalnego, prowadzenie rozmów o chorobie i fazie terminalnej.",
                    "en" => "Providing emotional support to patients and their families, discussing illness and the terminal phase."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16544,
                "name" => json_encode([
                    "pl" => "Informowanie rodziny o sposobach opieki nad pacjentem, zarządzaniu lekami oraz postępowaniu w sytuacjach kryzysowych.",
                    "en" => "Educating families on patient care, medication management, and handling crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16545,
                "name" => json_encode([
                    "pl" => "Praca z pielęgniarkami, psychologami, fizjoterapeutami, duchownymi, aby zapewnić pacjentom kompleksową opiekę.",
                    "en" => "Collaborating with nurses, psychologists, physiotherapists, and chaplains to provide comprehensive care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_MEDYCYNY_PRACY = [
            [
                "id" => 16546,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań wstępnych, okresowych i kontrolnych, które określają zdolność pacjenta do wykonywania określonej pracy.",
                    "en" => "Conducting initial, periodic, and control examinations to determine a patient's ability to perform specific work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16547,
                "name" => json_encode([
                    "pl" => "Identyfikowanie i leczenie chorób związanych z wykonywanym zawodem, takich jak choroby układu oddechowego, zmiany skórne, zespół cieśni nadgarstka.",
                    "en" => "Identifying and treating work-related illnesses such as respiratory diseases, skin conditions, and carpal tunnel syndrome."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16548,
                "name" => json_encode([
                    "pl" => "Promowanie zdrowia w miejscu pracy, doradzanie w sprawach ergonomii, higieny pracy, profilaktyki stresu zawodowego.",
                    "en" => "Promoting workplace health, advising on ergonomics, occupational hygiene, and stress prevention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16549,
                "name" => json_encode([
                    "pl" => "Analizowanie zagrożeń zdrowotnych związanych z miejscem pracy i wdrażanie odpowiednich środków profilaktycznych.",
                    "en" => "Analyzing workplace health hazards and implementing appropriate preventive measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16550,
                "name" => json_encode([
                    "pl" => "Informowanie pracowników i pracodawców o zasadach bezpieczeństwa, higieny pracy oraz profilaktyki chorób zawodowych.",
                    "en" => "Informing employees and employers about safety, workplace hygiene, and occupational disease prevention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_MEDYCYNY_RATUNKOWEJ = [
            [
                "id" => 16551,
                "name" => json_encode([
                    "pl" => "Leczenie pacjentów w stanach zagrożenia życia, takich jak zawały serca, urazy, udary, zatrucia, urazy wielonarządowe.",
                    "en" => "Treating patients in life-threatening conditions such as heart attacks, injuries, strokes, poisonings, and polytrauma."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16552,
                "name" => json_encode([
                    "pl" => "Stosowanie zaawansowanych technik resuscytacji krążeniowo-oddechowej, defibrylacji, intubacji oraz podawanie leków ratujących życie.",
                    "en" => "Using advanced cardiopulmonary resuscitation techniques, defibrillation, intubation, and administering life-saving medications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16553,
                "name" => json_encode([
                    "pl" => "Zapewnienie stabilności pacjenta przed transportem do szpitala lub oddziału intensywnej terapii.",
                    "en" => "Ensuring patient stability before transport to a hospital or intensive care unit."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16554,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołem medycznym, w tym ratownikami medycznymi, pielęgniarkami, anestezjologami w przypadku masowych wypadków i katastrof.",
                    "en" => "Collaborating with medical teams, including paramedics, nurses, and anesthesiologists, in cases of mass accidents and disasters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16555,
                "name" => json_encode([
                    "pl" => "Szkolenie i edukacja w zakresie udzielania pierwszej pomocy, resuscytacji, postępowania w sytuacjach nagłych.",
                    "en" => "Training and educating in first aid, resuscitation, and emergency response procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_MEDYCYNY_RODZINNEJ = [
            [
                "id" => 16556,
                "name" => json_encode([
                    "pl" => "Leczenie pacjentów w różnym wieku i na różnych etapach życia, zapewniając opiekę zdrowotną całej rodzinie.",
                    "en" => "Treating patients of all ages and at various life stages, providing healthcare for the entire family."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16557,
                "name" => json_encode([
                    "pl" => "Organizowanie szczepień, badań przesiewowych, promowanie zdrowego stylu życia, diet, aktywności fizycznej.",
                    "en" => "Organizing vaccinations, screening tests, and promoting a healthy lifestyle, diets, and physical activity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16558,
                "name" => json_encode([
                    "pl" => "Leczenie nadciśnienia, cukrzycy, astmy, chorób sercowo-naczyniowych, przewlekłej obturacyjnej choroby płuc (POChP).",
                    "en" => "Treating hypertension, diabetes, asthma, cardiovascular diseases, and chronic obstructive pulmonary disease (COPD)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16559,
                "name" => json_encode([
                    "pl" => "Skierowania na specjalistyczne badania lub konsultacje, gdy wymagane są bardziej zaawansowane procedury.",
                    "en" => "Providing referrals for specialized tests or consultations when more advanced procedures are required."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16560,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji na temat profilaktyki, leczenia oraz zarządzania chorobami przewlekłymi.",
                    "en" => "Educating patients about prevention, treatment, and management of chronic diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_MEDYCYNY_SADOWEJ = [
            [
                "id" => 16561,
                "name" => json_encode([
                    "pl" => "Wykonywanie autopsji w celu określenia przyczyny śmierci oraz identyfikacji obrażeń, które mogą wskazywać na przestępstwo.",
                    "en" => "Performing autopsies to determine the cause of death and identify injuries that may indicate a crime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16562,
                "name" => json_encode([
                    "pl" => "Sporządzanie opinii dla sądów i prokuratury w sprawach związanych z przyczyną zgonu, obrażeniami, stanem zdrowia.",
                    "en" => "Providing expert opinions for courts and prosecutors on causes of death, injuries, and health conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16563,
                "name" => json_encode([
                    "pl" => "Dokumentowanie obrażeń, diagnoza stanu zdrowia ofiar przemocy, ocena mechanizmu powstania obrażeń.",
                    "en" => "Documenting injuries, diagnosing the health of victims of violence, and assessing the mechanism of injury occurrence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16564,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań toksykologicznych w celu wykrycia obecności substancji psychoaktywnych, leków, trucizn.",
                    "en" => "Conducting toxicological tests to detect the presence of psychoactive substances, medications, and poisons."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16565,
                "name" => json_encode([
                    "pl" => "Współpraca z policją, prokuraturą, sądami oraz innymi organami ścigania w dochodzeniach kryminalnych.",
                    "en" => "Collaborating with police, prosecutors, courts, and other law enforcement agencies in criminal investigations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_MEDYCYNY_SPORTOWEJ = [
            [
                "id" => 16566,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań wstępnych i okresowych, które określają zdolność pacjenta do uprawiania sportu i wykonywania wysiłku fizycznego.",
                    "en" => "Conducting initial and periodic examinations to determine a patient's ability to engage in sports and physical activity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16567,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie urazów typowych dla sportowców, takich jak skręcenia, złamania, naderwania mięśni, uszkodzenia więzadeł.",
                    "en" => "Diagnosing and treating common sports injuries such as sprains, fractures, muscle tears, and ligament injuries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16568,
                "name" => json_encode([
                    "pl" => "Wdrażanie zasad profilaktyki w celu zapobiegania kontuzjom, promowanie technik rozgrzewki, treningów wzmacniających.",
                    "en" => "Implementing preventive measures to avoid injuries, promoting warm-up techniques, and strengthening training."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16569,
                "name" => json_encode([
                    "pl" => "Zapewnienie opieki medycznej podczas zawodów sportowych, udzielanie pomocy w nagłych przypadkach.",
                    "en" => "Providing medical care during sports competitions and offering assistance in emergencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16570,
                "name" => json_encode([
                    "pl" => "Konsultacje na temat właściwego odżywiania, suplementacji, nawodnienia, które wspierają wydolność fizyczną sportowca.",
                    "en" => "Providing consultations on proper nutrition, supplementation, and hydration to support athletes' physical performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_MEDYCYNY_TRANSPORTU = [
            [
                "id" => 16571,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań lekarskich dla kierowców oraz innych osób pracujących w transporcie, które potwierdzają zdolność do bezpiecznego prowadzenia pojazdów.",
                    "en" => "Conducting medical examinations for drivers and other transport workers to confirm their ability to safely operate vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16572,
                "name" => json_encode([
                    "pl" => "Wykonywanie badań oceniających sprawność psychofizyczną, takich jak koordynacja ruchowa, refleks, ocena wzroku i słuchu.",
                    "en" => "Performing assessments of psychophysical fitness, including motor coordination, reflexes, vision, and hearing evaluation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16573,
                "name" => json_encode([
                    "pl" => "Informowanie o zagrożeniach zdrowotnych związanych z transportem, takich jak zmęczenie, stres, przeciążenia.",
                    "en" => "Educating about health risks related to transport, such as fatigue, stress, and overexertion."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16574,
                "name" => json_encode([
                    "pl" => "Ocena wpływu przewlekłych chorób, takich jak cukrzyca, nadciśnienie, zaburzenia neurologiczne, na zdolność prowadzenia pojazdów.",
                    "en" => "Evaluating the impact of chronic conditions, such as diabetes, hypertension, and neurological disorders, on driving ability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16575,
                "name" => json_encode([
                    "pl" => "Wydawanie orzeczeń o zdolności do wykonywania pracy w transporcie oraz udzielanie zaleceń dotyczących warunków pracy.",
                    "en" => "Issuing fitness certificates for work in transport and providing recommendations on working conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_MIKROBIOLOGII_LEKARSKIEJ = [
            [
                "id" => 16576,
                "name" => json_encode([
                    "pl" => "Diagnoza infekcji mikrobiologicznych: Analiza i interpretacja wyników badań mikrobiologicznych, takich jak posiewy, PCR, testy serologiczne, w celu identyfikacji patogenów.",
                    "en" => "Diagnosis of microbiological infections: Analysis and interpretation of microbiological test results, such as cultures, PCR, and serological tests, to identify pathogens."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16577,
                "name" => json_encode([
                    "pl" => "Wykonywanie badań mikrobiologicznych: Przeprowadzanie badań wykrywających bakterie, wirusy, grzyby i pasożyty w próbkach pacjentów.",
                    "en" => "Performing microbiological tests: Conducting tests to detect bacteria, viruses, fungi, and parasites in patient samples."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16578,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie leczenia antybiotykowego: Rekomendowanie odpowiednich antybiotyków lub leków przeciwgrzybiczych, przeciwwirusowych w oparciu o wyniki badań i wrażliwość drobnoustrojów.",
                    "en" => "Advising on antibiotic treatment: Recommending appropriate antibiotics or antifungal, antiviral medications based on test results and microorganism susceptibility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16579,
                "name" => json_encode([
                    "pl" => "Monitorowanie oporności na antybiotyki: Śledzenie wzorców oporności bakterii na antybiotyki i dostarczanie informacji do zastosowania w profilaktyce.",
                    "en" => "Monitoring antibiotic resistance: Tracking bacterial resistance patterns to antibiotics and providing information for preventive measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16580,
                "name" => json_encode([
                    "pl" => "Edukacja personelu medycznego: Szkolenie lekarzy i pielęgniarek w zakresie diagnostyki mikrobiologicznej, profilaktyki infekcji szpitalnych i zasad antybiotykoterapii.",
                    "en" => "Educating medical staff: Training doctors and nurses in microbiological diagnostics, hospital infection prevention, and principles of antibiotic therapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_NEFROLOGII = [
            [
                "id" => 16581,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie chorób nerek, takich jak przewlekła choroba nerek, zapalenie kłębuszków nerkowych, kamica nerkowa, niewydolność nerek.",
                    "en" => "Diagnosing and treating kidney diseases such as chronic kidney disease, glomerulonephritis, kidney stones, and kidney failure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16582,
                "name" => json_encode([
                    "pl" => "Organizacja i monitorowanie leczenia dializami oraz przygotowanie pacjentów do przeszczepienia nerki.",
                    "en" => "Organizing and monitoring dialysis treatment and preparing patients for kidney transplantation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16583,
                "name" => json_encode([
                    "pl" => "Regularne kontrole stanu zdrowia pacjentów, monitorowanie ewentualnych objawów odrzutu przeszczepu i dostosowywanie terapii immunosupresyjnej.",
                    "en" => "Conducting regular health check-ups for patients, monitoring potential transplant rejection symptoms, and adjusting immunosuppressive therapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16584,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów o znaczeniu diety, stylu życia oraz sposobach profilaktyki w chorobach nerek.",
                    "en" => "Educating patients about the importance of diet, lifestyle, and preventive measures in kidney diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16585,
                "name" => json_encode([
                    "pl" => "Konsultacje z kardiologami, endokrynologami, diabetologami, w celu zapewnienia kompleksowej opieki nad pacjentami z przewlekłymi chorobami nerek.",
                    "en" => "Consulting with cardiologists, endocrinologists, and diabetologists to provide comprehensive care for patients with chronic kidney diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_NEONATOLOGII = [
            [
                "id" => 16586,
                "name" => json_encode([
                    "pl" => "Diagnostyka i leczenie noworodków, szczególnie wcześniaków i dzieci urodzonych z niską masą urodzeniową.",
                    "en" => "Diagnosing and treating newborns, especially premature babies and those born with low birth weight."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16587,
                "name" => json_encode([
                    "pl" => "Monitorowanie parametrów życiowych noworodków w ciężkim stanie oraz podejmowanie działań stabilizujących.",
                    "en" => "Monitoring vital signs of critically ill newborns and implementing stabilizing measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16588,
                "name" => json_encode([
                    "pl" => "Leczenie noworodków z wadami serca, problemami oddechowymi, infekcjami, niedotlenieniem.",
                    "en" => "Treating newborns with heart defects, respiratory issues, infections, and hypoxia."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16589,
                "name" => json_encode([
                    "pl" => "Monitorowanie i organizacja karmienia wcześniaków oraz dzieci wymagających specjalnych procedur żywieniowych.",
                    "en" => "Monitoring and organizing feeding for premature babies and children requiring special nutritional procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16590,
                "name" => json_encode([
                    "pl" => "Informowanie rodziców o stanie zdrowia noworodka oraz instruowanie, jak dbać o zdrowie dziecka po wypisaniu ze szpitala.",
                    "en" => "Informing parents about the health condition of their newborn and providing instructions on post-discharge care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_NEUROCHIRURGII = [
            [
                "id" => 16591,
                "name" => json_encode([
                    "pl" => "Leczenie urazów czaszki, mózgu, rdzenia kręgowego, guzów mózgu, tętniaków, malformacji naczyniowych.",
                    "en" => "Treating injuries of the skull, brain, spinal cord, brain tumors, aneurysms, and vascular malformations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16592,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie skomplikowanych operacji, takich jak kraniotomie, operacje guzów mózgu, operacje przepuklin kręgosłupa.",
                    "en" => "Performing complex surgeries, including craniotomies, brain tumor surgeries, and spinal hernia operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16593,
                "name" => json_encode([
                    "pl" => "Opieka nad pacjentem w okresie pooperacyjnym, monitorowanie gojenia się ran oraz wykrywanie ewentualnych powikłań.",
                    "en" => "Providing postoperative care, monitoring wound healing, and detecting potential complications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16594,
                "name" => json_encode([
                    "pl" => "Koordynacja opieki nad pacjentami, którzy wymagają złożonego leczenia neurologicznego lub onkologicznego.",
                    "en" => "Coordinating care for patients requiring complex neurological or oncological treatments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16595,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów i ich rodzin o przebiegu leczenia, rehabilitacji oraz profilaktyce schorzeń neurologicznych.",
                    "en" => "Educating patients and their families about the treatment process, rehabilitation, and prevention of neurological disorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_NEUROLOGII = [
            [
                "id" => 16596,
                "name" => json_encode([
                    "pl" => "Leczenie schorzeń neurologicznych, takich jak padaczka, choroba Parkinsona, stwardnienie rozsiane, migrena, udar mózgu.",
                    "en" => "Treating neurological disorders such as epilepsy, Parkinson's disease, multiple sclerosis, migraines, and strokes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16597,
                "name" => json_encode([
                    "pl" => "Analiza wyników EEG, EMG, rezonansu magnetycznego (MRI), tomografii komputerowej (CT) i innych badań diagnostycznych.",
                    "en" => "Analyzing results from EEG, EMG, magnetic resonance imaging (MRI), computed tomography (CT), and other diagnostic tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16598,
                "name" => json_encode([
                    "pl" => "Monitorowanie pacjentów z chorobami przewlekłymi, dostosowywanie leczenia oraz profilaktyka powikłań.",
                    "en" => "Monitoring patients with chronic conditions, adjusting treatments, and preventing complications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16599,
                "name" => json_encode([
                    "pl" => "Zapewnienie kompleksowej opieki pacjentom wymagającym zabiegów chirurgicznych lub rehabilitacji.",
                    "en" => "Providing comprehensive care to patients requiring surgery or rehabilitation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16600,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o chorobie, leczeniu oraz strategiach radzenia sobie z objawami neurologicznymi.",
                    "en" => "Educating patients about their condition, treatment, and strategies for managing neurological symptoms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_NEUROLOGII_DZIECIĘCEJ = [
            [
                "id" => 16601,
                "name" => json_encode([
                    "pl" => "Leczenie padaczki dziecięcej, porażenia mózgowego, autyzmu, zaburzeń ruchowych, chorób genetycznych wpływających na układ nerwowy.",
                    "en" => "Treating pediatric epilepsy, cerebral palsy, autism, movement disorders, and genetic diseases affecting the nervous system."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16602,
                "name" => json_encode([
                    "pl" => "Ocena opóźnień rozwoju, wczesne wykrywanie zaburzeń neurologicznych i opracowywanie planów terapeutycznych.",
                    "en" => "Assessing developmental delays, early detection of neurological disorders, and developing therapeutic plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16603,
                "name" => json_encode([
                    "pl" => "Koordynacja leczenia i rehabilitacji w celu wsparcia rozwoju dziecka.",
                    "en" => "Coordinating treatment and rehabilitation to support child development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16604,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie pielęgnacji, rehabilitacji oraz profilaktyki chorób neurologicznych u dzieci.",
                    "en" => "Advising on care, rehabilitation, and prevention of neurological diseases in children."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16605,
                "name" => json_encode([
                    "pl" => "Pomoc w radzeniu sobie z trudnościami związanymi z chorobą dziecka oraz zapewnienie dostępu do wsparcia społecznego i terapeutycznego.",
                    "en" => "Helping families manage challenges related to the child's illness and ensuring access to social and therapeutic support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_NEUROPATOLOGII = [
            [
                "id" => 16606,
                "name" => json_encode([
                    "pl" => "Analiza próbek tkanek pochodzących z mózgu, rdzenia kręgowego i innych struktur układu nerwowego.",
                    "en" => "Analyzing tissue samples from the brain, spinal cord, and other nervous system structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16607,
                "name" => json_encode([
                    "pl" => "Ocena próbek pod kątem obecności nowotworów, procesów zapalnych, zmian degeneracyjnych.",
                    "en" => "Evaluating samples for the presence of tumors, inflammatory processes, and degenerative changes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16608,
                "name" => json_encode([
                    "pl" => "Współpraca z neurochirurgami i onkologami w celu postawienia diagnozy i planowania leczenia na podstawie wyników biopsji.",
                    "en" => "Collaborating with neurosurgeons and oncologists to establish diagnoses and plan treatments based on biopsy results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16609,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań pośmiertnych układu nerwowego w celu ustalenia przyczyny śmierci lub diagnozy chorób neurodegeneracyjnych.",
                    "en" => "Conducting postmortem examinations of the nervous system to determine the cause of death or diagnose neurodegenerative diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16610,
                "name" => json_encode([
                    "pl" => "Konsultacje z neurologami, neurochirurgami i onkologami w celu kompleksowej opieki nad pacjentem.",
                    "en" => "Consulting with neurologists, neurosurgeons, and oncologists to provide comprehensive patient care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_OKULISTYKI = [
            [
                "id" => 16611,
                "name" => json_encode([
                    "pl" => "Leczenie schorzeń oczu, takich jak zaćma, jaskra, zwyrodnienie plamki żółtej, zapalenie spojówek, odwarstwienie siatkówki.",
                    "en" => "Treating eye conditions such as cataracts, glaucoma, macular degeneration, conjunctivitis, and retinal detachment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16612,
                "name" => json_encode([
                    "pl" => "Badanie ostrości wzroku, ciśnienia wewnątrzgałkowego, refrakcji, badanie dna oka.",
                    "en" => "Conducting eye exams, including visual acuity testing, intraocular pressure measurement, refraction, and fundus examination."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16613,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie operacji, takich jak usunięcie zaćmy, operacje na siatkówce, przeszczep rogówki, korekcje zeza.",
                    "en" => "Performing surgeries such as cataract removal, retinal surgery, corneal transplants, and strabismus correction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16614,
                "name" => json_encode([
                    "pl" => "Konsultacje w zakresie korekcji wad wzroku oraz dobór odpowiednich szkieł lub soczewek.",
                    "en" => "Providing consultations on vision correction and selecting appropriate glasses or contact lenses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16615,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów o zasadach higieny oczu, profilaktyce i ochronie przed urazami.",
                    "en" => "Educating patients on eye hygiene, preventive care, and protection against injuries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_ONKOLOGII_I_HEMATOLOGII_DZIECIECEJ = [
            [
                "id" => 16616,
                "name" => json_encode([
                    "pl" => "Leczenie białaczek, chłoniaków, guzów mózgu, guzów litych oraz innych nowotworów i zaburzeń hematologicznych u dzieci.",
                    "en" => "Treating leukemia, lymphoma, brain tumors, solid tumors, and other cancers and hematological disorders in children."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16617,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie chemioterapii, radioterapii oraz monitorowanie efektów leczenia u dzieci.",
                    "en" => "Administering chemotherapy, radiotherapy, and monitoring treatment effects in children."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16618,
                "name" => json_encode([
                    "pl" => "Pomoc psychologiczna dla dzieci oraz edukacja rodziny na temat leczenia i postępowania.",
                    "en" => "Providing psychological support for children and educating families about treatment and care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16619,
                "name" => json_encode([
                    "pl" => "Koordynacja opieki z pediatrami, chirurgami, psychologami, dietetykami.",
                    "en" => "Coordinating care with pediatricians, surgeons, psychologists, and dietitians."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16620,
                "name" => json_encode([
                    "pl" => "Regularne kontrole dzieci po zakończonej terapii w celu wykrycia ewentualnych nawrotów choroby.",
                    "en" => "Conducting regular check-ups for children after treatment to detect potential disease recurrence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_ONKOLOGII_KLINICZNEJ = [
            [
                "id" => 16621,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie i leczenie nowotworów złośliwych, takich jak raki piersi, płuc, jelita grubego, czerniak, chłoniaki.",
                    "en" => "Diagnosing and treating malignant cancers such as breast cancer, lung cancer, colorectal cancer, melanoma, and lymphomas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16622,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie chemioterapii, immunoterapii, hormonoterapii i radioterapii.",
                    "en" => "Administering chemotherapy, immunotherapy, hormone therapy, and radiotherapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16623,
                "name" => json_encode([
                    "pl" => "Monitorowanie reakcji na terapię, zarządzanie skutkami ubocznymi oraz profilaktyka powikłań.",
                    "en" => "Monitoring treatment response, managing side effects, and preventing complications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16624,
                "name" => json_encode([
                    "pl" => "Informowanie o sposobach radzenia sobie z chorobą, metodach leczenia, stylu życia.",
                    "en" => "Providing information on coping with the disease, treatment methods, and lifestyle adjustments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16625,
                "name" => json_encode([
                    "pl" => "Konsultacje z chirurgami onkologicznymi, radiologami, hematologami, psychologami, dietetykami.",
                    "en" => "Consulting with oncological surgeons, radiologists, hematologists, psychologists, and dietitians."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_ORTOPEDII_I_TRAUMATOLOGII_NARZADU_RUCHU = [
            [
                "id" => 16626,
                "name" => json_encode([
                    "pl" => "Diagnostyka i leczenie urazów, złamań kości, zwichnięć, uszkodzeń stawów, więzadeł.",
                    "en" => "Diagnosing and treating injuries, bone fractures, dislocations, and joint and ligament damage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16627,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zabiegów naprawczych i rekonstrukcyjnych, takich jak artroskopia, endoprotezoplastyka, rekonstrukcja więzadeł.",
                    "en" => "Performing repair and reconstructive procedures such as arthroscopy, endoprosthetics, and ligament reconstruction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16628,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu pacjenta, planowanie rehabilitacji i kontrolowanie gojenia ran.",
                    "en" => "Monitoring patient condition, planning rehabilitation, and overseeing wound healing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16629,
                "name" => json_encode([
                    "pl" => "Leczenie choroby zwyrodnieniowej stawów, osteoporozy, deformacji kręgosłupa.",
                    "en" => "Treating osteoarthritis, osteoporosis, and spinal deformities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16630,
                "name" => json_encode([
                    "pl" => "Współpraca z fizjoterapeutami w celu poprawy sprawności pacjenta.",
                    "en" => "Collaborating with physiotherapists to improve patient mobility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_OTORYNOLARYNGOLOGII = [
            [
                "id" => 16631,
                "name" => json_encode([
                    "pl" => "Leczenie stanów zapalnych, przerostu migdałków, nowotworów w obrębie głowy i szyi.",
                    "en" => "Treating inflammatory conditions, tonsil hypertrophy, and head and neck tumors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16632,
                "name" => json_encode([
                    "pl" => "Usuwanie migdałków, operacje przegrody nosowej, operacje zatok.",
                    "en" => "Performing tonsillectomies, nasal septum surgeries, and sinus surgeries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16633,
                "name" => json_encode([
                    "pl" => "Diagnostyka zaburzeń słuchu, równowagi, np. za pomocą audiometrii.",
                    "en" => "Diagnosing hearing and balance disorders, e.g., using audiometry."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16634,
                "name" => json_encode([
                    "pl" => "Terapia pacjentów z przewlekłym zapaleniem zatok, uszu.",
                    "en" => "Treating patients with chronic sinusitis and ear infections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16635,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji na temat profilaktyki i higieny narządów otorynolaryngologicznych.",
                    "en" => "Providing information on the prevention and hygiene of otolaryngological organs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_PATOMORFOLOGII = [
            [
                "id" => 16636,
                "name" => json_encode([
                    "pl" => "Badanie próbek tkanek pochodzących z biopsji, operacji oraz analizy cytologiczne.",
                    "en" => "Examining tissue samples from biopsies, surgeries, and conducting cytological analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16637,
                "name" => json_encode([
                    "pl" => "Opracowywanie wyników badań histopatologicznych w celu potwierdzenia lub wykluczenia nowotworów.",
                    "en" => "Preparing histopathological reports to confirm or exclude cancers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16638,
                "name" => json_encode([
                    "pl" => "Informowanie innych specjalistów o wynikach badań, co umożliwia zaplanowanie leczenia.",
                    "en" => "Providing other specialists with test results to aid in treatment planning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16639,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie sekcji zwłok w celu ustalenia przyczyny zgonu.",
                    "en" => "Conducting autopsies to determine the cause of death."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16640,
                "name" => json_encode([
                    "pl" => "Ocena próbek pobranych w trakcie leczenia, np. po chemioterapii.",
                    "en" => "Evaluating samples collected during treatment, e.g., after chemotherapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_PEDIATRII = [
            [
                "id" => 16641,
                "name" => json_encode([
                    "pl" => "Leczenie chorób infekcyjnych, alergicznych, przewlekłych i innych schorzeń typowych dla dzieci.",
                    "en" => "Treating infectious, allergic, chronic, and other conditions typical in children."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16642,
                "name" => json_encode([
                    "pl" => "Regularne badania rozwoju dzieci, ocena wzrostu, wagi, rozwoju umysłowego i emocjonalnego.",
                    "en" => "Conducting regular developmental assessments in children, including growth, weight, and mental and emotional development evaluations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16643,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szczepień zgodnie z kalendarzem szczepień oraz profilaktyka chorób dziecięcych.",
                    "en" => "Administering vaccinations according to the immunization schedule and preventing childhood diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16644,
                "name" => json_encode([
                    "pl" => "Informowanie o zdrowym stylu życia, odpowiedniej diecie, rozwoju psychicznym i fizycznym dziecka oraz zasadach pierwszej pomocy.",
                    "en" => "Educating about a healthy lifestyle, proper diet, mental and physical development of children, and first aid principles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16645,
                "name" => json_encode([
                    "pl" => "Konsultacje z neurologami dziecięcymi, kardiologami, psychologami i innymi specjalistami w przypadku złożonych problemów zdrowotnych.",
                    "en" => "Consulting with pediatric neurologists, cardiologists, psychologists, and other specialists for complex health issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_POLOZNICTWA_I_GINEKOLOGII = [
            [
                "id" => 16646,
                "name" => json_encode([
                    "pl" => "Monitorowanie ciąży, przeprowadzanie badań prenatalnych, ocena zdrowia matki i płodu, przygotowanie do porodu.",
                    "en" => "Monitoring pregnancy, conducting prenatal tests, assessing the health of the mother and fetus, and preparing for childbirth."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16647,
                "name" => json_encode([
                    "pl" => "Asystowanie przy porodzie naturalnym, wykonywanie cięć cesarskich w razie potrzeby oraz zapewnianie opieki po porodzie.",
                    "en" => "Assisting with natural deliveries, performing cesarean sections when necessary, and providing postpartum care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16648,
                "name" => json_encode([
                    "pl" => "Leczenie schorzeń, takich jak endometrioza, mięśniaki, zapalenia narządów płciowych, niepłodność.",
                    "en" => "Treating conditions such as endometriosis, fibroids, genital infections, and infertility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16649,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań profilaktycznych, takich jak cytologia, USG, badania piersi oraz edukacja pacjentek w zakresie profilaktyki nowotworów.",
                    "en" => "Conducting preventive exams such as cytology, ultrasounds, and breast examinations, and educating patients on cancer prevention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16650,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie planowania rodziny, stosowania metod antykoncepcji oraz przygotowanie do ciąży.",
                    "en" => "Providing advice on family planning, contraception, and preparing for pregnancy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_PSYCHIATRII = [
            [
                "id" => 16651,
                "name" => json_encode([
                    "pl" => "Leczenie pacjentów z depresją, zaburzeniami lękowymi, schizofrenią, chorobą afektywną dwubiegunową, uzależnieniami.",
                    "en" => "Treating patients with depression, anxiety disorders, schizophrenia, bipolar disorder, and addictions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16652,
                "name" => json_encode([
                    "pl" => "Dobór leków i stosowanie psychoterapii odpowiednich dla różnych zaburzeń psychicznych.",
                    "en" => "Selecting medications and providing psychotherapy appropriate for various mental disorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16653,
                "name" => json_encode([
                    "pl" => "Informowanie o chorobie psychicznej, sposobach leczenia i profilaktyce nawrotów.",
                    "en" => "Educating about mental illness, treatment methods, and relapse prevention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16654,
                "name" => json_encode([
                    "pl" => "Współpraca z psychologami, neurologami, terapeutami zajęciowymi, dietetykami w celu kompleksowego leczenia.",
                    "en" => "Collaborating with psychologists, neurologists, occupational therapists, and dietitians for comprehensive treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16655,
                "name" => json_encode([
                    "pl" => "Interwencje kryzysowe, np. w przypadku prób samobójczych, psychoz oraz dostosowywanie terapii do potrzeb pacjenta.",
                    "en" => "Crisis interventions, e.g., in cases of suicide attempts, psychosis, and adjusting therapy to patient needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_PSYCHIATRII_DZIECI_I_MLODZIEZY = [
            [
                "id" => 16656,
                "name" => json_encode([
                    "pl" => "Leczenie zaburzeń emocjonalnych, ADHD, autyzmu, depresji, lęków, zaburzeń odżywiania.",
                    "en" => "Treating emotional disorders, ADHD, autism, depression, anxiety, and eating disorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16657,
                "name" => json_encode([
                    "pl" => "Współpraca z rodziną i placówkami edukacyjnymi w zakresie leczenia oraz pomocy psychologicznej dla dzieci.",
                    "en" => "Collaborating with families and educational institutions on treatment and psychological support for children."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16658,
                "name" => json_encode([
                    "pl" => "Stosowanie psychoterapii dostosowanej do wieku dziecka, w tym terapii behawioralno-poznawczej i terapii rodzinnej.",
                    "en" => "Applying age-appropriate psychotherapy, including cognitive-behavioral therapy and family therapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16659,
                "name" => json_encode([
                    "pl" => "Doradztwo dla rodziców na temat radzenia sobie z zaburzeniami u dzieci i ich leczenia oraz profilaktyki.",
                    "en" => "Advising parents on managing and treating disorders in children as well as prevention strategies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16660,
                "name" => json_encode([
                    "pl" => "Interwencje w przypadkach kryzysowych, takich jak próby samookaleczenia, napady agresji, zaburzenia zachowania.",
                    "en" => "Intervening in crisis situations such as self-harm attempts, aggressive outbursts, and behavioral disorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_RADIOLOGII_I_DIAGNOSTYKI_OBRAZOWEJ = [
            [
                "id" => 16661,
                "name" => json_encode([
                    "pl" => "Wykonywanie badań diagnostycznych, takich jak tomografia komputerowa (CT), rezonans magnetyczny (MRI), ultrasonografia (USG), mammografia, RTG.",
                    "en" => "Performing diagnostic tests such as computed tomography (CT), magnetic resonance imaging (MRI), ultrasonography (USG), mammography, and X-rays."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16662,
                "name" => json_encode([
                    "pl" => "Interpretacja wyników badań obrazowych oraz opracowywanie raportów dla innych specjalistów.",
                    "en" => "Interpreting imaging test results and preparing reports for other specialists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16663,
                "name" => json_encode([
                    "pl" => "Konsultowanie wyników z lekarzami innych specjalności, np. onkologami, chirurgami, ortopedami.",
                    "en" => "Consulting results with specialists such as oncologists, surgeons, and orthopedists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16664,
                "name" => json_encode([
                    "pl" => "Proponowanie dalszych badań diagnostycznych, gdy zachodzi taka potrzeba, oraz monitorowanie stanu pacjenta.",
                    "en" => "Recommending further diagnostic tests when needed and monitoring patient condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16665,
                "name" => json_encode([
                    "pl" => "Kontrola dawek promieniowania, informowanie o zasadach przygotowania do badania oraz możliwych skutkach ubocznych.",
                    "en" => "Controlling radiation doses, informing patients about preparation procedures, and discussing potential side effects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_RADIOTERAPII_ONKOLOGICZNEJ = [
            [
                "id" => 16666,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów leczenia dla pacjentów onkologicznych, określanie dawki promieniowania, lokalizacji i liczby sesji.",
                    "en" => "Developing treatment plans for oncology patients, determining radiation dose, location, and the number of sessions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16667,
                "name" => json_encode([
                    "pl" => "Obserwacja efektów terapii oraz zarządzanie skutkami ubocznymi, takimi jak zmęczenie, poparzenia skóry, reakcje żołądkowo-jelitowe.",
                    "en" => "Monitoring therapy effects and managing side effects such as fatigue, skin burns, and gastrointestinal reactions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16668,
                "name" => json_encode([
                    "pl" => "Konsultacje z onkologami, chirurgami, hematologami w celu kompleksowej opieki nad pacjentem.",
                    "en" => "Consulting with oncologists, surgeons, and hematologists to provide comprehensive patient care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16669,
                "name" => json_encode([
                    "pl" => "Informowanie o przebiegu radioterapii, zasadach postępowania przed i po zabiegach oraz wsparcie emocjonalne.",
                    "en" => "Informing patients about the radiotherapy process, pre- and post-treatment care, and providing emotional support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16670,
                "name" => json_encode([
                    "pl" => "Kontrole pacjentów po zakończeniu radioterapii w celu wczesnego wykrywania nawrotów oraz późnych skutków ubocznych.",
                    "en" => "Conducting follow-ups after radiotherapy to detect recurrences early and monitor late side effects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_REHABILITACJI_MEDYCZNEJ = [
            [
                "id" => 16671,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie diagnostyki funkcjonalnej i opracowywanie indywidualnych planów rehabilitacji dla pacjentów z urazami, chorobami neurologicznymi, przewlekłymi schorzeniami.",
                    "en" => "Conducting functional diagnostics and developing individualized rehabilitation plans for patients with injuries, neurological diseases, and chronic conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16672,
                "name" => json_encode([
                    "pl" => "Koordynowanie pracy z fizjoterapeutami, terapeutami zajęciowymi, logopedami, psychologami.",
                    "en" => "Coordinating work with physiotherapists, occupational therapists, speech therapists, and psychologists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16673,
                "name" => json_encode([
                    "pl" => "Ocena postępów terapii, dostosowywanie ćwiczeń oraz dalsze wskazówki dla pacjentów.",
                    "en" => "Assessing therapy progress, adjusting exercises, and providing further guidance for patients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16674,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy na temat sposobów samodzielnej rehabilitacji oraz zapobiegania powikłaniom.",
                    "en" => "Educating patients on self-rehabilitation methods and preventing complications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16675,
                "name" => json_encode([
                    "pl" => "Pomoc w radzeniu sobie z problemami emocjonalnymi wynikającymi z chorób przewlekłych lub urazów.",
                    "en" => "Assisting patients in coping with emotional challenges resulting from chronic illnesses or injuries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_REUMATOLOGII = [
            [
                "id" => 16676,
                "name" => json_encode([
                    "pl" => "Leczenie chorób, takich jak reumatoidalne zapalenie stawów, toczeń rumieniowaty układowy, zesztywniające zapalenie stawów kręgosłupa, dna moczanowa.",
                    "en" => "Treating diseases such as rheumatoid arthritis, systemic lupus erythematosus, ankylosing spondylitis, and gout."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16677,
                "name" => json_encode([
                    "pl" => "Regularna kontrola pacjentów w celu oceny postępu choroby, efektywności leczenia oraz występowania powikłań.",
                    "en" => "Regularly monitoring patients to assess disease progression, treatment effectiveness, and potential complications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16678,
                "name" => json_encode([
                    "pl" => "Przepisywanie i monitorowanie leków, takich jak leki immunosupresyjne, przeciwbólowe, przeciwzapalne.",
                    "en" => "Prescribing and monitoring medications such as immunosuppressants, pain relievers, and anti-inflammatory drugs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16679,
                "name" => json_encode([
                    "pl" => "Współpraca z ortopedami, rehabilitantami, dermatologami i nefrologami w celu całościowej opieki nad pacjentami z chorobami autoimmunologicznymi.",
                    "en" => "Collaborating with orthopedists, rehabilitation specialists, dermatologists, and nephrologists to provide comprehensive care for patients with autoimmune diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16680,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów o chorobach reumatycznych, stosowaniu diety, ćwiczeniach oraz metodach zapobiegania zaostrzeniom choroby.",
                    "en" => "Educating patients about rheumatic diseases, diet, exercises, and methods to prevent disease flare-ups."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_SEKSUOLOGII = [
            [
                "id" => 16681,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie zaburzeń takich jak zaburzenia erekcji, przedwczesny wytrysk, brak satysfakcji seksualnej, niskie libido.",
                    "en" => "Diagnosing and treating disorders such as erectile dysfunction, premature ejaculation, lack of sexual satisfaction, and low libido."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16682,
                "name" => json_encode([
                    "pl" => "Wspieranie pacjentów w procesie akceptacji i przeżywania swojej tożsamości płciowej oraz orientacji seksualnej.",
                    "en" => "Supporting patients in accepting and experiencing their gender identity and sexual orientation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16683,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów o zdrowym życiu seksualnym, profilaktyce chorób przenoszonych drogą płciową, wpływie zdrowego stylu życia na satysfakcję seksualną.",
                    "en" => "Educating patients on healthy sexual life, prevention of sexually transmitted diseases, and the impact of a healthy lifestyle on sexual satisfaction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16684,
                "name" => json_encode([
                    "pl" => "Praca z zespołem interdyscyplinarnym, np. w przypadku pacjentów wymagających terapii psychologicznej w zakresie problemów seksualnych.",
                    "en" => "Collaborating with an interdisciplinary team, e.g., for patients requiring psychological therapy for sexual issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16685,
                "name" => json_encode([
                    "pl" => "Konsultacje i terapie dla par w zakresie problemów intymnych, konfliktów i problemów związanych z relacjami.",
                    "en" => "Providing consultations and therapy for couples regarding intimacy issues, conflicts, and relationship-related problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_TOKSYKOLOGII_KLINICZNEJ = [
            [
                "id" => 16686,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie i leczenie ostrych i przewlekłych zatruć, np. lekami, substancjami chemicznymi, alkoholem, narkotykami.",
                    "en" => "Diagnosing and treating acute and chronic poisonings, e.g., by drugs, chemicals, alcohol, or narcotics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16687,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie procedur detoksykacyjnych, takich jak płukanie żołądka, podawanie antidotum, hemodializa.",
                    "en" => "Performing detoxification procedures such as gastric lavage, antidote administration, and hemodialysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16688,
                "name" => json_encode([
                    "pl" => "Obserwacja pacjentów po zatruciu oraz kontrola ewentualnych powikłań, takich jak uszkodzenie nerek, wątroby, układu nerwowego.",
                    "en" => "Monitoring patients after poisoning and managing complications such as kidney, liver, or nervous system damage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16689,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów i społeczeństwa o zagrożeniach związanych z substancjami toksycznymi, lekami i narkotykami.",
                    "en" => "Educating patients and the public about the risks associated with toxic substances, medications, and narcotics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16690,
                "name" => json_encode([
                    "pl" => "Przekazywanie próbek do analizy w celu wykrycia toksyn oraz ustalenie poziomu zatrucia.",
                    "en" => "Submitting samples for analysis to detect toxins and determine poisoning levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_TRANSFUZJOLOGII_KLINICZNEJ = [
            [
                "id" => 16691,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesów związanych z pobieraniem, przechowywaniem i przetaczaniem krwi i jej składników.",
                    "en" => "Supervising processes related to the collection, storage, and transfusion of blood and its components."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16692,
                "name" => json_encode([
                    "pl" => "Ocena zapotrzebowania na transfuzję oraz bezpieczne przetaczanie krwi i jej preparatów pacjentom, szczególnie w sytuacjach nagłych.",
                    "en" => "Assessing the need for transfusion and safely administering blood and its products to patients, especially in emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16693,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań na zgodność grup krwi oraz przeciwdziałanie powikłaniom immunologicznym po transfuzji.",
                    "en" => "Conducting blood group compatibility tests and preventing immunological complications after transfusion."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16694,
                "name" => json_encode([
                    "pl" => "Konsultowanie się z zespołami medycznymi, szczególnie w przypadkach wymagających dużej ilości krwi, np. operacje, chemioterapia.",
                    "en" => "Consulting with medical teams, particularly in cases requiring large quantities of blood, such as surgeries or chemotherapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16695,
                "name" => json_encode([
                    "pl" => "Informowanie o zasadach bezpieczeństwa i profilaktyki zakażeń związanych z transfuzją krwi.",
                    "en" => "Providing information on safety principles and infection prevention related to blood transfusion."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_TRANSPLANTOLOGII_KLINICZNEJ = [
            [
                "id" => 16696,
                "name" => json_encode([
                    "pl" => "Ocena stanu zdrowia pacjenta i kwalifikacja do przeszczepienia narządu, np. nerek, wątroby, serca, płuc.",
                    "en" => "Assessing the patient's health and qualifying them for organ transplantation, such as kidneys, liver, heart, or lungs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16697,
                "name" => json_encode([
                    "pl" => "Regularne kontrole pacjentów po przeszczepach w celu wykrycia objawów odrzutu oraz dostosowanie leczenia immunosupresyjnego.",
                    "en" => "Conducting regular follow-ups with transplant patients to detect rejection symptoms and adjust immunosuppressive treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16698,
                "name" => json_encode([
                    "pl" => "Koordynacja pracy chirurgów, anestezjologów, pielęgniarek oraz innych specjalistów zaangażowanych w transplantacje.",
                    "en" => "Coordinating the work of surgeons, anesthesiologists, nurses, and other specialists involved in transplantation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16699,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów o sposobach dbania o zdrowie po przeszczepie, profilaktyce infekcji oraz przestrzeganiu zaleceń medycznych.",
                    "en" => "Educating patients on maintaining health post-transplant, infection prevention, and adhering to medical recommendations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16700,
                "name" => json_encode([
                    "pl" => "Utrzymywanie kontaktu z bankami organów i monitorowanie procesu kwalifikacji i pozyskiwania narządów do przeszczepów.",
                    "en" => "Maintaining contact with organ banks and monitoring the process of organ qualification and procurement for transplants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_UROLOGII = [
            [
                "id" => 16701,
                "name" => json_encode([
                    "pl" => "Leczenie chorób, takich jak kamica nerkowa, zapalenie pęcherza, przerost prostaty, nowotwory pęcherza, nerek.",
                    "en" => "Treating conditions such as kidney stones, cystitis, prostate enlargement, bladder, and kidney cancers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16702,
                "name" => json_encode([
                    "pl" => "Wykonywanie zabiegów, takich jak usuwanie kamieni nerkowych, cystoskopia, operacje prostaty, biopsje.",
                    "en" => "Performing procedures such as kidney stone removal, cystoscopy, prostate surgeries, and biopsies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16703,
                "name" => json_encode([
                    "pl" => "Diagnoza i leczenie problemów seksualnych związanych z układem moczowo-płciowym, takich jak zaburzenia erekcji.",
                    "en" => "Diagnosing and treating sexual problems related to the genitourinary system, such as erectile dysfunction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16704,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów o profilaktyce nowotworów prostaty i pęcherza, zasadach higieny intymnej, zdrowym stylu życia.",
                    "en" => "Educating patients on prostate and bladder cancer prevention, intimate hygiene, and a healthy lifestyle."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16705,
                "name" => json_encode([
                    "pl" => "Konsultacje z innymi specjalistami, szczególnie w przypadkach złożonych schorzeń lub nowotworów.",
                    "en" => "Consulting with other specialists, particularly in cases of complex conditions or cancers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_UROLOGII_DZIECIECEJ = [
            [
                "id" => 16706,
                "name" => json_encode([
                    "pl" => "Leczenie wad wrodzonych, infekcji dróg moczowych, nietrzymania moczu, wnętrostwa.",
                    "en" => "Treating congenital anomalies, urinary tract infections, incontinence, and undescended testicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16707,
                "name" => json_encode([
                    "pl" => "Wykonywanie zabiegów rekonstrukcyjnych i naprawczych, np. operacje spodziectwa, zabiegi naprawcze układu moczowego.",
                    "en" => "Performing reconstructive and corrective surgeries, such as hypospadias repair and urinary system reconstruction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16708,
                "name" => json_encode([
                    "pl" => "Kontrola dzieci z wrodzonymi wadami układu moczowego oraz zapobieganie ewentualnym powikłaniom.",
                    "en" => "Monitoring children with congenital urinary tract anomalies and preventing potential complications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16709,
                "name" => json_encode([
                    "pl" => "Doradztwo na temat dbania o higienę układu moczowego dziecka oraz profilaktyki infekcji i wad.",
                    "en" => "Advising on urinary system hygiene for children and the prevention of infections and anomalies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16710,
                "name" => json_encode([
                    "pl" => "Koordynowanie opieki nad dzieckiem z zespołem lekarzy i specjalistów w zakresie leczenia wad i chorób urologicznych.",
                    "en" => "Coordinating care for the child with a team of doctors and specialists in treating urological anomalies and diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_ZDROWIA_PUBLICZNEGO = [
            [
                "id" => 16711,
                "name" => json_encode([
                    "pl" => "Analizowanie danych dotyczących zdrowia publicznego, np. chorób zakaźnych, wskaźników zachorowalności, śmiertelności.",
                    "en" => "Analyzing public health data, such as infectious diseases, morbidity rates, and mortality statistics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16712,
                "name" => json_encode([
                    "pl" => "Tworzenie programów zdrowotnych, np. szczepień, edukacji zdrowotnej, profilaktyki chorób przewlekłych.",
                    "en" => "Developing health programs, such as vaccination campaigns, health education, and chronic disease prevention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16713,
                "name" => json_encode([
                    "pl" => "Współpraca z władzami i instytucjami w celu wdrażania programów zdrowotnych i legislacji zdrowotnej.",
                    "en" => "Collaborating with authorities and institutions to implement health programs and health legislation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16714,
                "name" => json_encode([
                    "pl" => "Organizowanie kampanii informacyjnych i edukacyjnych dotyczących zdrowia, profilaktyki, higieny.",
                    "en" => "Organizing informational and educational campaigns about health, prevention, and hygiene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16715,
                "name" => json_encode([
                    "pl" => "Organizowanie programów zapobiegawczych, kontrola ognisk epidemii, prowadzenie działań profilaktycznych.",
                    "en" => "Organizing preventive programs, controlling epidemic outbreaks, and conducting preventive actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_CHOROB_PLUC_DZIECI = [
            [
                "id" => 16716,
                "name" => json_encode([
                    "pl" => "Leczenie astmy, przewlekłego zapalenia oskrzeli, mukowiscydozy, infekcji układu oddechowego, alergii.",
                    "en" => "Treating asthma, chronic bronchitis, cystic fibrosis, respiratory infections, and allergies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16717,
                "name" => json_encode([
                    "pl" => "Regularne kontrole stanu zdrowia dzieci z przewlekłymi chorobami płuc, dostosowywanie leczenia, zapobieganie zaostrzeniom.",
                    "en" => "Regularly monitoring the health of children with chronic lung diseases, adjusting treatment, and preventing exacerbations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16718,
                "name" => json_encode([
                    "pl" => "Wykonywanie badań takich jak spirometria, RTG klatki piersiowej, testy alergiczne.",
                    "en" => "Conducting tests such as spirometry, chest X-rays, and allergy tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16719,
                "name" => json_encode([
                    "pl" => "Doradztwo na temat radzenia sobie z chorobami płuc u dzieci, profilaktyki, technik oddychania oraz eliminacji alergenów.",
                    "en" => "Providing advice on managing lung diseases in children, prevention, breathing techniques, and allergen elimination."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16720,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi pediatrami, alergologami, immunologami i rehabilitantami oddechowymi w zakresie leczenia dzieci z problemami pulmonologicznymi.",
                    "en" => "Collaborating with other pediatricians, allergists, immunologists, and respiratory therapists in treating children with pulmonary issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_ENDOKRYNOLOGII_GINEKOLOGICZNEJ_I_ROZRODCZOSCI = [
            [
                "id" => 16721,
                "name" => json_encode([
                    "pl" => "Leczenie schorzeń takich jak zespół policystycznych jajników (PCOS), hiperprolaktynemia, zaburzenia cyklu miesiączkowego, menopauza.",
                    "en" => "Treating conditions such as polycystic ovary syndrome (PCOS), hyperprolactinemia, menstrual cycle disorders, and menopause."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16722,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie zaburzeń hormonalnych prowadzących do niepłodności oraz współpraca z ośrodkami leczenia niepłodności.",
                    "en" => "Diagnosing and treating hormonal disorders leading to infertility and collaborating with infertility treatment centers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16723,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie terapii hormonalnych wspomagających płodność, np. stymulacja owulacji, wspomaganie dojrzewania pęcherzyków.",
                    "en" => "Conducting hormonal therapies to support fertility, such as ovulation stimulation and follicle maturation support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16724,
                "name" => json_encode([
                    "pl" => "Doradzanie w zakresie stosowania antykoncepcji hormonalnej, jej wpływu na zdrowie oraz dostosowywanie jej do potrzeb pacjentki.",
                    "en" => "Advising on the use of hormonal contraception, its impact on health, and tailoring it to the patient's needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16725,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentek o zdrowiu reprodukcyjnym, profilaktyce oraz wpływie zaburzeń hormonalnych na zdrowie.",
                    "en" => "Educating patients on reproductive health, prevention, and the impact of hormonal disorders on health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_ENDOKRYNOLOGII_I_DIABETOLOGII_DZIECIECEJ = [
            [
                "id" => 16726,
                "name" => json_encode([
                    "pl" => "Leczenie zaburzeń wzrostu, chorób tarczycy, przysadki, nadnerczy oraz innych zaburzeń endokrynologicznych.",
                    "en" => "Treating growth disorders, thyroid diseases, pituitary disorders, adrenal gland disorders, and other endocrine abnormalities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16727,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie terapii insulinowej, monitorowanie glikemii, edukacja rodziny w zakresie leczenia cukrzycy.",
                    "en" => "Administering insulin therapy, monitoring blood glucose levels, and educating families on managing diabetes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16728,
                "name" => json_encode([
                    "pl" => "Regularne kontrole wzrostu i dojrzewania, ocena przyrostu masy ciała oraz wsparcie rozwoju psychofizycznego.",
                    "en" => "Conducting regular growth and maturation assessments, evaluating weight gain, and supporting psychophysical development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16729,
                "name" => json_encode([
                    "pl" => "Konsultacje z dietetykami w zakresie ustalania diety odpowiedniej dla dzieci z cukrzycą lub zaburzeniami hormonalnymi.",
                    "en" => "Consulting with dietitians to determine appropriate diets for children with diabetes or hormonal disorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16730,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o sposobach radzenia sobie z chorobami endokrynologicznymi, profilaktyka powikłań oraz terapia w domu.",
                    "en" => "Providing information on managing endocrine diseases, preventing complications, and home therapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_GASTROENTEROLOGII_DZIECIECEJ = [
            [
                "id" => 16731,
                "name" => json_encode([
                    "pl" => "Leczenie zapaleń żołądka, jelit, choroby trzewnej (celiakii), refluksu żołądkowo-przełykowego, zespołu jelita drażliwego.",
                    "en" => "Treating gastritis, enteritis, celiac disease, gastroesophageal reflux disease, and irritable bowel syndrome."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16732,
                "name" => json_encode([
                    "pl" => "Wykonywanie gastroskopii i kolonoskopii, biopsji jelit i żołądka oraz analiza wyników badań obrazowych.",
                    "en" => "Performing gastroscopy and colonoscopy, intestinal and stomach biopsies, and analyzing imaging study results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16733,
                "name" => json_encode([
                    "pl" => "Leczenie zapalenia wątroby, kamicy żółciowej, ostrego i przewlekłego zapalenia trzustki.",
                    "en" => "Treating hepatitis, gallstones, acute and chronic pancreatitis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16734,
                "name" => json_encode([
                    "pl" => "Doradztwo na temat diety, nawyków żywieniowych, radzenia sobie z chorobami przewodu pokarmowego i profilaktyki u dzieci.",
                    "en" => "Advising on diet, eating habits, managing gastrointestinal diseases, and prevention in children."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16735,
                "name" => json_encode([
                    "pl" => "Koordynowanie leczenia z pediatrami, dietetykami oraz specjalistami endoskopii.",
                    "en" => "Coordinating treatment with pediatricians, dietitians, and endoscopy specialists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_INTENSYWNEJ_TERAPII = [
            [
                "id" => 16736,
                "name" => json_encode([
                    "pl" => "Monitorowanie i stabilizacja funkcji życiowych pacjentów z ostrymi niewydolnościami narządów, np. serca, płuc, nerek.",
                    "en" => "Monitoring and stabilizing vital functions of patients with acute organ failures, such as heart, lung, or kidney failure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16737,
                "name" => json_encode([
                    "pl" => "Intubacja, wentylacja mechaniczna, hemodializa, podawanie leków ratujących życie.",
                    "en" => "Performing intubation, mechanical ventilation, hemodialysis, and administering life-saving drugs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16738,
                "name" => json_encode([
                    "pl" => "Stałe monitorowanie ciśnienia krwi, tętna, saturacji, temperatury oraz innych parametrów, które umożliwiają ocenę stanu pacjenta.",
                    "en" => "Continuously monitoring blood pressure, heart rate, oxygen saturation, temperature, and other parameters to assess the patient's condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16739,
                "name" => json_encode([
                    "pl" => "Koordynacja pracy lekarzy, pielęgniarek, anestezjologów, fizjoterapeutów w celu kompleksowej opieki nad pacjentem.",
                    "en" => "Coordinating the work of doctors, nurses, anesthesiologists, and physiotherapists to provide comprehensive patient care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16740,
                "name" => json_encode([
                    "pl" => "Informowanie rodziny o stanie zdrowia pacjenta, wyjaśnianie procedur i rokowań oraz wsparcie psychologiczne.",
                    "en" => "Informing the family about the patient's condition, explaining procedures and prognosis, and providing psychological support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_MEDYCYNY_LOTNICZEJ = [
            [
                "id" => 16741,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań kwalifikacyjnych, kontrolnych oraz badań po wypadkach dla pilotów, personelu pokładowego i obsługi naziemnej.",
                    "en" => "Conducting qualification, follow-up, and post-accident examinations for pilots, cabin crew, and ground staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16742,
                "name" => json_encode([
                    "pl" => "Identyfikacja i zapobieganie chorobom związanym z pracą na wysokości, w warunkach zmiennego ciśnienia i niedotlenienia.",
                    "en" => "Identifying and preventing diseases associated with working at altitude, under variable pressure, and in hypoxic conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16743,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji na temat zdrowia, zapobieganie powikłaniom zdrowotnym związanym z lotnictwem.",
                    "en" => "Providing health information and preventing aviation-related health complications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16744,
                "name" => json_encode([
                    "pl" => "Ocena fizycznej i psychicznej kondycji personelu lotniczego, szczególnie w sytuacjach kryzysowych i po incydentach.",
                    "en" => "Assessing the physical and mental condition of aviation personnel, especially in crisis situations and post-incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16745,
                "name" => json_encode([
                    "pl" => "Konsultacje z jednostkami odpowiedzialnymi za lotnictwo cywilne i wojskowe w sprawach medycznych.",
                    "en" => "Consulting with units responsible for civil and military aviation on medical matters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_MEDYCYNY_MORSKIEJ_I_TROPIKALNEJ = [
            [
                "id" => 16746,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań zdrowotnych marynarzy, rybaków, pracowników platform wiertniczych, ocena ryzyka związanego z długotrwałym przebywaniem na morzu.",
                    "en" => "Conducting health examinations for sailors, fishermen, offshore platform workers, and assessing risks associated with prolonged stays at sea."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16747,
                "name" => json_encode([
                    "pl" => "Leczenie chorób związanych z klimatem tropikalnym, takich jak malaria, denga, żółta gorączka oraz chorób przenoszonych przez owady.",
                    "en" => "Treating diseases related to tropical climates, such as malaria, dengue fever, yellow fever, and insect-borne illnesses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16748,
                "name" => json_encode([
                    "pl" => "Doradztwo przed wyjazdem w regiony tropikalne oraz zalecanie szczepień ochronnych i profilaktyki chorób.",
                    "en" => "Providing advice before traveling to tropical regions, recommending vaccinations, and disease prevention strategies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16749,
                "name" => json_encode([
                    "pl" => "Edukacja marynarzy w zakresie zdrowia, pierwszej pomocy, zapobiegania chorobom zawodowym i tropikalnym.",
                    "en" => "Educating sailors about health, first aid, and prevention of occupational and tropical diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16750,
                "name" => json_encode([
                    "pl" => "Udzielanie konsultacji na odległość dla marynarzy przebywających na morzu, współpraca z jednostkami ratowniczymi.",
                    "en" => "Providing remote consultations for sailors at sea and collaborating with rescue units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_NEFROLOGII_DZIECIECEJ = [
            [
                "id" => 16751,
                "name" => json_encode([
                    "pl" => "Leczenie schorzeń, takich jak zespół nerczycowy, zapalenie kłębuszków nerkowych, przewlekła niewydolność nerek.",
                    "en" => "Treating conditions such as nephrotic syndrome, glomerulonephritis, and chronic kidney failure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16752,
                "name" => json_encode([
                    "pl" => "Organizacja dializ otrzewnowych i hemodializ u dzieci oraz przygotowanie do przeszczepu nerek.",
                    "en" => "Organizing peritoneal dialysis and hemodialysis for children and preparing for kidney transplantation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16753,
                "name" => json_encode([
                    "pl" => "Regularne kontrole, monitorowanie ewentualnych objawów odrzutu przeszczepu i dostosowywanie leczenia.",
                    "en" => "Conducting regular check-ups, monitoring for transplant rejection symptoms, and adjusting treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16754,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie diety, higieny oraz profilaktyki chorób nerek u dzieci.",
                    "en" => "Providing advice on diet, hygiene, and kidney disease prevention in children."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16755,
                "name" => json_encode([
                    "pl" => "Zapewnienie kompleksowej opieki nad dziećmi z przewlekłymi chorobami nerek.",
                    "en" => "Providing comprehensive care for children with chronic kidney diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_PEDIATRII_METABOLICZNEJ = [
            [
                "id" => 16756,
                "name" => json_encode([
                    "pl" => "Leczenie wrodzonych błędów metabolicznych, takich jak fenyloketonuria, mukopolisacharydoza, glikogenozy, choroby mitochondrialne.",
                    "en" => "Treating inborn errors of metabolism, such as phenylketonuria, mucopolysaccharidosis, glycogen storage diseases, and mitochondrial disorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16757,
                "name" => json_encode([
                    "pl" => "Ustalanie specjalistycznych diet oraz monitorowanie skuteczności leczenia u dzieci z chorobami metabolicznymi.",
                    "en" => "Establishing specialized diets and monitoring the effectiveness of treatment in children with metabolic diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16758,
                "name" => json_encode([
                    "pl" => "Informowanie o znaczeniu diety, profilaktyki powikłań, stosowania odpowiednich preparatów odżywczych.",
                    "en" => "Providing information on the importance of diet, complication prevention, and the use of appropriate nutritional supplements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16759,
                "name" => json_encode([
                    "pl" => "Organizacja badań przesiewowych w kierunku chorób metabolicznych, które mogą wymagać szybkiego wdrożenia leczenia.",
                    "en" => "Organizing screening tests for metabolic diseases that may require immediate treatment implementation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16760,
                "name" => json_encode([
                    "pl" => "Koordynacja opieki z dietetykami, neurologami, genetykami oraz specjalistami rehabilitacji.",
                    "en" => "Coordinating care with dietitians, neurologists, geneticists, and rehabilitation specialists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_SPECJALISTA_PERINATOLOGII = [
            [
                "id" => 16761,
                "name" => json_encode([
                    "pl" => "Monitorowanie ciąż zagrożonych komplikacjami, np. cukrzycą ciążową, nadciśnieniem, stanem przedrzucawkowym, konfliktami serologicznymi.",
                    "en" => "Monitoring high-risk pregnancies with complications such as gestational diabetes, hypertension, preeclampsia, and Rh incompatibility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16762,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań ultrasonograficznych, amniopunkcji oraz innych badań w celu oceny zdrowia płodu.",
                    "en" => "Performing ultrasound examinations, amniocentesis, and other tests to assess fetal health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16763,
                "name" => json_encode([
                    "pl" => "Planowanie opieki nad dzieckiem po porodzie, w przypadkach przewidywanych komplikacji lub wad wrodzonych.",
                    "en" => "Planning postnatal care for the child in cases of anticipated complications or congenital abnormalities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16764,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o możliwych komplikacjach, sposobach radzenia sobie z nimi oraz dostępnych terapiach prenatalnych.",
                    "en" => "Providing information about potential complications, coping strategies, and available prenatal therapies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16765,
                "name" => json_encode([
                    "pl" => "Wykonywanie procedur mających na celu poprawę zdrowia płodu przed porodem, takich jak transfuzje wewnątrzmaciczne.",
                    "en" => "Performing procedures to improve fetal health before delivery, such as intrauterine transfusions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_ORDYNATOR_ODDZIALU = [
            [
                "id" => 16766,
                "name" => json_encode([
                    "pl" => "Organizacja pracy lekarzy, pielęgniarek i innych pracowników oddziału, ustalanie grafików, delegowanie zadań.",
                    "en" => "Organizing the work of doctors, nurses, and other staff, setting schedules, and delegating tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16767,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że pacjenci mają całodobową opiekę, koordynowanie pracy zespołów dyżurowych.",
                    "en" => "Ensuring patients receive 24-hour care and coordinating the work of on-call teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16768,
                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów jakości i bezpieczeństwa pracy na oddziale, wdrażanie wytycznych, kontrolowanie procedur medycznych.",
                    "en" => "Ensuring compliance with quality and safety standards in the ward, implementing guidelines, and monitoring medical procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16769,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z innymi oddziałami i jednostkami w szpitalu, zwłaszcza w przypadkach wymagających współpracy międzyoddziałowej.",
                    "en" => "Coordinating activities with other hospital wards and units, especially in cases requiring interdepartmental collaboration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16770,
                "name" => json_encode([
                    "pl" => "Dbałość o to, aby oddział był odpowiednio wyposażony, nadzór nad dostępnością leków, materiałów i aparatury medycznej.",
                    "en" => "Ensuring the ward is well-equipped and overseeing the availability of medications, supplies, and medical equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16771,
                "name" => json_encode([
                    "pl" => "Bezpośrednia opieka nad pacjentami, szczególnie w trudnych przypadkach, konsultacje i ustalanie planów leczenia.",
                    "en" => "Providing direct patient care, especially in complex cases, consulting, and establishing treatment plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16772,
                "name" => json_encode([
                    "pl" => "Kontrola prawidłowego wykonywania badań diagnostycznych, ustalanie strategii leczenia oraz monitorowanie postępów terapii.",
                    "en" => "Monitoring the proper execution of diagnostic tests, determining treatment strategies, and assessing therapy progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16773,
                "name" => json_encode([
                    "pl" => "Udzielanie zgody na istotne procedury medyczne, operacje i zabiegi, a także podejmowanie decyzji w nagłych sytuacjach.",
                    "en" => "Granting consent for major medical procedures, surgeries, and interventions, and making decisions in emergencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16774,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie codziennych obchodów lekarskich, omawianie przypadków z zespołem oraz koordynowanie procesu leczenia z innymi specjalistami.",
                    "en" => "Conducting daily medical rounds, discussing cases with the team, and coordinating treatment with other specialists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16775,
                "name" => json_encode([
                    "pl" => "Nadzorowanie przestrzegania zasad higieny, aseptyki i zarządzania ryzykiem na oddziale.",
                    "en" => "Supervising adherence to hygiene, aseptic principles, and risk management within the ward."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16776,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szkoleń dla lekarzy, nadzorowanie stażystów i rezydentów, przekazywanie wiedzy i umiejętności.",
                    "en" => "Conducting training for doctors, supervising interns and residents, and sharing knowledge and skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16777,
                "name" => json_encode([
                    "pl" => "Organizacja zebrań lekarskich, seminariów oraz spotkań naukowych w celu omówienia przypadków i nowości medycznych.",
                    "en" => "Organizing medical meetings, seminars, and scientific gatherings to discuss cases and medical advancements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16778,
                "name" => json_encode([
                    "pl" => "Edukowanie personelu na temat nowych metod leczenia, procedur oraz obsługi nowoczesnego sprzętu medycznego.",
                    "en" => "Educating staff on new treatment methods, procedures, and the use of modern medical equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16779,
                "name" => json_encode([
                    "pl" => "Dokonywanie okresowych ocen kompetencji personelu medycznego, identyfikowanie potrzeb szkoleniowych i rozwoju zawodowego.",
                    "en" => "Conducting periodic evaluations of medical staff competencies and identifying training and development needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16780,
                "name" => json_encode([
                    "pl" => "Kontrola rzetelności i poprawności dokumentacji medycznej pacjentów, zgodności z przepisami i standardami.",
                    "en" => "Ensuring the accuracy and correctness of patient medical documentation in compliance with regulations and standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16781,
                "name" => json_encode([
                    "pl" => "Dbałość o przestrzeganie zasad RODO i zachowanie poufności dokumentacji medycznej.",
                    "en" => "Ensuring adherence to GDPR regulations and maintaining the confidentiality of medical records."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16782,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów na potrzeby szpitala, analizowanie danych dotyczących liczby pacjentów, diagnoz, wyników leczenia.",
                    "en" => "Preparing reports for the hospital and analyzing data on patient numbers, diagnoses, and treatment outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16783,
                "name" => json_encode([
                    "pl" => "Zapewnienie kompletności dokumentacji medycznej, która jest potrzebna do rozliczeń świadczeń zdrowotnych z Narodowym Funduszem Zdrowia.",
                    "en" => "Ensuring the completeness of medical documentation required for health service settlements with the National Health Fund."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16784,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów, kontroli wewnętrznych, sprawdzanie zgodności z procedurami szpitalnymi i normami jakości.",
                    "en" => "Conducting audits, internal controls, and checking compliance with hospital procedures and quality standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16785,
                "name" => json_encode([
                    "pl" => "Identyfikacja i analiza zdarzeń niepożądanych, wdrażanie procedur zmniejszających ryzyko błędów medycznych.",
                    "en" => "Identifying and analyzing adverse events and implementing procedures to reduce medical errors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16786,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych procedur, standardów leczenia oraz działań profilaktycznych mających na celu poprawę jakości i bezpieczeństwa opieki.",
                    "en" => "Implementing new procedures, treatment standards, and preventive measures to improve care quality and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16787,
                "name" => json_encode([
                    "pl" => "Tworzenie i aktualizacja wytycznych medycznych oraz procedur obowiązujących na oddziale.",
                    "en" => "Creating and updating medical guidelines and procedures applicable to the ward."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16788,
                "name" => json_encode([
                    "pl" => "Motywowanie, wspieranie rozwoju zawodowego oraz dbanie o dobrą atmosferę pracy w zespole.",
                    "en" => "Motivating and supporting professional development while maintaining a positive work environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16789,
                "name" => json_encode([
                    "pl" => "Interweniowanie w przypadku konfliktów w zespole, znajdowanie rozwiązań oraz budowanie dobrych relacji.",
                    "en" => "Intervening in team conflicts, finding solutions, and fostering good relationships."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16790,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi oddziałami, laboratoriami, apteką szpitalną oraz administracją szpitala.",
                    "en" => "Collaborating with other wards, laboratories, the hospital pharmacy, and hospital administration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16791,
                "name" => json_encode([
                    "pl" => "Podejmowanie decyzji o przyjęciach i zwolnieniach personelu, ocena efektywności pracy członków zespołu.",
                    "en" => "Making decisions on staff hiring and dismissals, and evaluating team members' performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16792,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów i ich rodzin o przebiegu leczenia, rokowaniach, możliwych komplikacjach i dalszych planach terapeutycznych.",
                    "en" => "Informing patients and their families about treatment progress, prognosis, potential complications, and future therapeutic plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16793,
                "name" => json_encode([
                    "pl" => "Zapewnienie wsparcia emocjonalnego oraz odpowiadanie na pytania i wątpliwości pacjentów i ich bliskich.",
                    "en" => "Providing emotional support and addressing questions and concerns of patients and their families."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16794,
                "name" => json_encode([
                    "pl" => "Reagowanie na skargi i sugestie pacjentów lub ich rodzin dotyczące opieki na oddziale.",
                    "en" => "Responding to complaints and suggestions from patients or their families regarding ward care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16795,
                "name" => json_encode([
                    "pl" => "Kontrola wydatków, monitorowanie kosztów związanych z leczeniem oraz zapewnienie efektywnego wykorzystania zasobów.",
                    "en" => "Controlling expenditures, monitoring treatment-related costs, and ensuring efficient resource utilization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16796,
                "name" => json_encode([
                    "pl" => "Analizowanie kosztów leczenia, poszukiwanie sposobów na efektywne zarządzanie środkami i zmniejszenie niepotrzebnych wydatków.",
                    "en" => "Analyzing treatment costs, seeking ways to manage resources effectively, and reducing unnecessary expenses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16797,
                "name" => json_encode([
                    "pl" => "Ustalanie potrzeb oddziału w zakresie leków, sprzętu medycznego i materiałów oraz składanie zamówień.",
                    "en" => "Determining the ward's needs for medications, medical equipment, and supplies, and placing orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16798,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesu rozliczeń świadczeń zdrowotnych z Narodowym Funduszem Zdrowia oraz kontrolowanie poprawności dokumentacji finansowej.",
                    "en" => "Supervising the process of settling health services with the National Health Fund and ensuring the accuracy of financial documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PIELEGNIARKA_ODDZIALOWA = [
            [
                "id" => 16799,
                "name" => json_encode([
                    "pl" => "Ustalanie grafików, przydzielanie zadań, zarządzanie dyżurami, dbanie o odpowiednią obsadę kadrową.",
                    "en" => "Setting schedules, assigning tasks, managing shifts, and ensuring adequate staffing levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16800,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań, aby pacjenci mieli zapewnioną nieprzerwaną opiekę, szczególnie podczas zmian personelu.",
                    "en" => "Coordinating activities to ensure uninterrupted care for patients, especially during staff changes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16801,
                "name" => json_encode([
                    "pl" => "Nadzór nad wykonywaniem procedur medycznych oraz dbanie o to, aby wszystkie działania były zgodne z zasadami higieny i aseptyki.",
                    "en" => "Supervising medical procedures to ensure all actions comply with hygiene and asepsis standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16802,
                "name" => json_encode([
                    "pl" => "Zarządzanie zasobami oddziału, zapewnienie dostępności sprzętu, materiałów opatrunkowych i leków.",
                    "en" => "Managing ward resources, ensuring the availability of equipment, dressings, and medications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16803,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań z innymi działami, laboratoriami, apteką oraz administracją szpitala.",
                    "en" => "Coordinating activities with other departments, laboratories, the pharmacy, and hospital administration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16804,
                "name" => json_encode([
                    "pl" => "Dbanie o to, aby każdy pacjent otrzymywał opiekę zgodną z najlepszymi standardami.",
                    "en" => "Ensuring that every patient receives care aligned with the highest standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16805,
                "name" => json_encode([
                    "pl" => "Regularna kontrola stanu zdrowia pacjentów, zwracanie uwagi na zmiany w ich kondycji i szybkie reagowanie na problemy.",
                    "en" => "Regularly checking patients' health, noting changes in their condition, and responding promptly to issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16806,
                "name" => json_encode([
                    "pl" => "Systematyczne sprawdzanie jakości opieki pielęgniarskiej, udzielanie informacji zwrotnej, wspieranie i motywowanie zespołu.",
                    "en" => "Systematically checking the quality of nursing care, providing feedback, and supporting and motivating the team."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16807,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o zmianach w procedurach i wytycznych, organizacja szkoleń i spotkań.",
                    "en" => "Communicating updates on procedures and guidelines and organizing training sessions and meetings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16808,
                "name" => json_encode([
                    "pl" => "Organizacja procesu adaptacji nowych pielęgniarek i pielęgniarzy, zapoznawanie ich z obowiązującymi procedurami.",
                    "en" => "Organizing the onboarding process for new nurses and introducing them to established procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16809,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szkoleń z zakresu opieki nad pacjentem, zasad aseptyki, obsługi sprzętu medycznego i reagowania w sytuacjach kryzysowych.",
                    "en" => "Conducting training on patient care, asepsis principles, medical equipment operation, and crisis response."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16810,
                "name" => json_encode([
                    "pl" => "Zachęcanie do podnoszenia kwalifikacji, udziału w kursach, szkoleniach oraz wspieranie zdobywania dodatkowych uprawnień.",
                    "en" => "Encouraging skill development, participation in courses, training, and supporting the acquisition of additional certifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16811,
                "name" => json_encode([
                    "pl" => "Regularna ocena kompetencji, zaangażowania i efektywności pracy członków zespołu pielęgniarskiego.",
                    "en" => "Regularly evaluating the competencies, engagement, and work efficiency of nursing team members."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16812,
                "name" => json_encode([
                    "pl" => "Wyjaśnianie pacjentom zasad opieki pielęgniarskiej, procedur oraz roli personelu pielęgniarskiego na oddziale.",
                    "en" => "Explaining nursing care principles, procedures, and the role of nursing staff on the ward to patients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16813,
                "name" => json_encode([
                    "pl" => "Pomoc pacjentom i ich rodzinom, udzielanie wsparcia emocjonalnego, szczególnie w sytuacjach trudnych lub kryzysowych.",
                    "en" => "Providing support to patients and their families, offering emotional assistance, particularly in difficult or crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16814,
                "name" => json_encode([
                    "pl" => "Reagowanie na skargi pacjentów i ich rodzin, zgłaszanie uwag do przełożonych oraz podejmowanie działań naprawczych.",
                    "en" => "Responding to patient and family complaints, reporting concerns to superiors, and taking corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16815,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji na temat pielęgnacji, profilaktyki zdrowotnej, rehabilitacji oraz zasad postępowania po wypisie ze szpitala.",
                    "en" => "Providing information on care, health prevention, rehabilitation, and post-discharge procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16816,
                "name" => json_encode([
                    "pl" => "Nadzór nad rzetelnym prowadzeniem dokumentacji pacjentów, w tym kart opieki, procedur i zaleceń lekarskich.",
                    "en" => "Supervising the accurate maintenance of patient records, including care plans, procedures, and medical recommendations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16817,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że dokumentacja jest zgodna z przepisami o ochronie danych osobowych (RODO).",
                    "en" => "Ensuring documentation complies with personal data protection regulations (GDPR)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16818,
                "name" => json_encode([
                    "pl" => "Opracowywanie raportów o stanie oddziału, liczbie pacjentów, realizacji planów opieki pielęgniarskiej oraz jakości pracy zespołu.",
                    "en" => "Preparing reports on ward status, patient numbers, nursing care plans implementation, and team performance quality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16819,
                "name" => json_encode([
                    "pl" => "Dbanie o to, by dokumentacja była kompletna i prawidłowa, umożliwiająca rozliczenie świadczeń zdrowotnych z Narodowym Funduszem Zdrowia.",
                    "en" => "Ensuring documentation is complete and accurate to enable health service settlements with the National Health Fund."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16820,
                "name" => json_encode([
                    "pl" => "Pomoc lekarzom w realizacji zadań związanych z opieką nad pacjentami, asystowanie przy zabiegach oraz realizacja zleceń lekarskich.",
                    "en" => "Assisting doctors in patient care tasks, assisting during procedures, and carrying out medical orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16821,
                "name" => json_encode([
                    "pl" => "Udzielanie informacji lekarzom na temat stanu pacjentów, proponowanie rozwiązań dotyczących opieki.",
                    "en" => "Providing information to doctors about patient conditions and suggesting care solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16822,
                "name" => json_encode([
                    "pl" => "Regularne uczestnictwo w obchody, omawianie stanu zdrowia pacjentów oraz przekazywanie informacji dotyczących potrzeb i postępów pacjentów.",
                    "en" => "Regularly participating in rounds, discussing patient health status, and conveying information on patient needs and progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16823,
                "name" => json_encode([
                    "pl" => "Zapewnienie odpowiednich ilości materiałów opatrunkowych, leków, sprzętu medycznego oraz kontrola ich zużycia.",
                    "en" => "Ensuring the availability of dressings, medications, and medical equipment, and monitoring their usage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16824,
                "name" => json_encode([
                    "pl" => "Monitorowanie wydatków oddziału, analiza kosztów i podejmowanie działań mających na celu efektywne wykorzystanie zasobów.",
                    "en" => "Monitoring ward expenditures, analyzing costs, and taking measures to ensure resource efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16825,
                "name" => json_encode([
                    "pl" => "Zgłaszanie zapotrzebowania na sprzęt medyczny, materiały i leki, współpraca z działem zaopatrzenia szpitala.",
                    "en" => "Submitting requisitions for medical equipment, materials, and medications, and collaborating with the hospital supply department."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16826,
                "name" => json_encode([
                    "pl" => "Dbanie o higienę pracy na oddziale, wdrażanie zasad aseptyki, zapewnienie przestrzegania zasad bezpieczeństwa i higieny pracy.",
                    "en" => "Maintaining hygiene standards on the ward, implementing asepsis principles, and ensuring compliance with safety and hygiene regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16827,
                "name" => json_encode([
                    "pl" => "Identyfikacja potencjalnych zagrożeń zdrowotnych, wdrażanie środków zapobiegawczych, monitorowanie i kontrolowanie zakażeń wewnątrzszpitalnych.",
                    "en" => "Identifying potential health hazards, implementing preventive measures, and monitoring and controlling hospital-acquired infections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16828,
                "name" => json_encode([
                    "pl" => "Szkolenie personelu w zakresie postępowania w sytuacjach nagłych, prowadzenie próbnych ćwiczeń i symulacji.",
                    "en" => "Training staff in emergency procedures, conducting drills, and simulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16829,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o najnowszych wytycznych i standardach opieki, zapewnienie ich stosowania przez cały personel.",
                    "en" => "Communicating the latest care guidelines and standards and ensuring adherence by all staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16830,
                "name" => json_encode([
                    "pl" => "Regularna analiza wyników pracy oddziału, w tym opinii pacjentów, i wprowadzanie działań korygujących.",
                    "en" => "Regularly analyzing ward performance, including patient feedback, and implementing corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16831,
                "name" => json_encode([
                    "pl" => "Dbanie o komfort pacjentów, w tym dostęp do informacji, wsparcia emocjonalnego oraz zapewnienie przyjaznego środowiska opieki.",
                    "en" => "Ensuring patient comfort, providing access to information and emotional support, and maintaining a friendly care environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POLOZNA_ODDZIALOWA = [
            [
                "id" => 16832,
                "name" => json_encode([
                    "pl" => "Tworzenie harmonogramów, przydzielanie zadań, zarządzanie dyżurami, zapewnienie, aby oddział był zawsze odpowiednio obsadzony.",
                    "en" => "Creating schedules, assigning tasks, managing shifts, ensuring the ward is adequately staffed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16833,
                "name" => json_encode([
                    "pl" => "Dbanie o to, aby opieka była płynna i ciągła, szczególnie podczas zmian personelu.",
                    "en" => "Ensuring care is seamless and continuous, especially during staff changes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16834,
                "name" => json_encode([
                    "pl" => "Kontrola prawidłowego wykonywania wszystkich procedur medycznych, zapewnienie przestrzegania zasad higieny.",
                    "en" => "Monitoring the correct implementation of all medical procedures, ensuring adherence to hygiene standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16835,
                "name" => json_encode([
                    "pl" => "Nadzór nad sprzętem medycznym, lekami i materiałami jednorazowego użytku, zapewnienie ich dostępności oraz dbałość o właściwe użytkowanie.",
                    "en" => "Supervising medical equipment, medications, and disposable materials, ensuring availability and proper use."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16836,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań z laboratoriami, działem diagnostycznym, apteką, administracją szpitala oraz zespołem lekarskim.",
                    "en" => "Coordinating activities with laboratories, diagnostics department, pharmacy, hospital administration, and medical team."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16837,
                "name" => json_encode([
                    "pl" => "Dbanie o to, aby wszystkie pacjentki i noworodki otrzymywali opiekę zgodną z najlepszymi standardami medycznymi.",
                    "en" => "Ensuring that all patients and newborns receive care aligned with the best medical standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16838,
                "name" => json_encode([
                    "pl" => "Regularna kontrola stanu zdrowia pacjentek i noworodków, szybka reakcja na zmiany w ich stanie zdrowia.",
                    "en" => "Regular health monitoring of patients and newborns, promptly responding to changes in their health status."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16839,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ocen jakości pracy, udzielanie informacji zwrotnej i podejmowanie działań w celu podniesienia jakości opieki.",
                    "en" => "Conducting quality assessments, providing feedback, and taking steps to improve the quality of care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16840,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że zespół jest na bieżąco z nowymi wytycznymi i standardami opieki położniczej i ginekologicznej.",
                    "en" => "Ensuring the team is up-to-date with new obstetric and gynecological care guidelines and standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16841,
                "name" => json_encode([
                    "pl" => "Wprowadzenie nowych położnych i pielęgniarek na oddział, zapoznanie ich z obowiązującymi procedurami oraz standardami pracy.",
                    "en" => "Introducing new midwives and nurses to the ward, familiarizing them with existing procedures and work standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16842,
                "name" => json_encode([
                    "pl" => "Organizowanie i prowadzenie szkoleń z zakresu opieki nad pacjentkami i noworodkami, zasad aseptyki, obsługi sprzętu oraz reagowania w sytuacjach kryzysowych.",
                    "en" => "Organizing and conducting training on patient and newborn care, aseptic techniques, equipment handling, and crisis response."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16843,
                "name" => json_encode([
                    "pl" => "Zachęcanie do podnoszenia kwalifikacji, uczestnictwa w kursach i szkoleniach zewnętrznych oraz zdobywania dodatkowych uprawnień.",
                    "en" => "Encouraging qualification improvements, participation in external courses and training, and obtaining additional certifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16844,
                "name" => json_encode([
                    "pl" => "Regularna ocena umiejętności i kompetencji położnych i pielęgniarek oraz identyfikowanie potrzeb szkoleniowych.",
                    "en" => "Regularly assessing the skills and competencies of midwives and nurses and identifying training needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16845,
                "name" => json_encode([
                    "pl" => "Wyjaśnianie zasad opieki położniczej, procedur oraz roli personelu medycznego na oddziale.",
                    "en" => "Explaining obstetric care principles, procedures, and the role of medical staff in the ward."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16846,
                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia emocjonalnego pacjentkom i ich rodzinom, zwłaszcza w sytuacjach trudnych.",
                    "en" => "Providing emotional support to patients and their families, especially in difficult situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16847,
                "name" => json_encode([
                    "pl" => "Rozpatrywanie skarg pacjentek lub ich bliskich dotyczących opieki oraz podejmowanie działań naprawczych.",
                    "en" => "Addressing complaints from patients or their families regarding care and taking corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16848,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji na temat pielęgnacji noworodków, zasad opieki poporodowej, profilaktyki zdrowotnej i higieny.",
                    "en" => "Providing information on newborn care, postpartum care principles, health prevention, and hygiene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16849,
                "name" => json_encode([
                    "pl" => "Kontrola rzetelnego prowadzenia dokumentacji pacjentek, noworodków oraz przebiegu opieki zgodnie z przepisami i wytycznymi.",
                    "en" => "Ensuring proper documentation of patients, newborns, and care processes according to regulations and guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16850,
                "name" => json_encode([
                    "pl" => "Dbanie o poufność i bezpieczeństwo danych pacjentek i noworodków zgodnie z zasadami RODO.",
                    "en" => "Maintaining confidentiality and security of patient and newborn data in compliance with GDPR."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16851,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów dotyczących stanu oddziału, liczby pacjentek i noworodków, jakości opieki oraz efektów działań pielęgnacyjnych.",
                    "en" => "Preparing reports on the ward's status, number of patients and newborns, care quality, and nursing outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16852,
                "name" => json_encode([
                    "pl" => "Dbanie o kompletność i poprawność dokumentacji medycznej potrzebnej do rozliczeń świadczeń zdrowotnych z Narodowym Funduszem Zdrowia.",
                    "en" => "Ensuring completeness and accuracy of medical documentation required for health service settlements with the National Health Fund."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16853,
                "name" => json_encode([
                    "pl" => "Pomoc lekarzom podczas zabiegów, badań i procedur, a także realizacja zleceń lekarskich dotyczących opieki nad pacjentkami.",
                    "en" => "Assisting doctors during procedures, examinations, and executing medical orders related to patient care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16854,
                "name" => json_encode([
                    "pl" => "Przekazywanie lekarzom informacji o stanie pacjentek i noworodków, omawianie przypadków wymagających szczególnej opieki.",
                    "en" => "Providing doctors with updates on patients and newborns' conditions and discussing cases requiring special care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16855,
                "name" => json_encode([
                    "pl" => "Regularne uczestnictwo w obchodach lekarskich, omawianie stanu zdrowia pacjentek i noworodków, wspólne planowanie dalszej opieki.",
                    "en" => "Participating regularly in medical rounds, discussing the health status of patients and newborns, and jointly planning further care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16856,
                "name" => json_encode([
                    "pl" => "Nadzór nad zaopatrzeniem w materiały opatrunkowe, leki, sprzęt medyczny oraz ich odpowiednie użytkowanie.",
                    "en" => "Supervising the supply of dressings, medications, medical equipment, and ensuring proper use."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16857,
                "name" => json_encode([
                    "pl" => "Analiza wydatków oddziału, nadzór nad kosztami związanymi z opieką nad pacjentkami i noworodkami.",
                    "en" => "Analyzing ward expenses and supervising costs related to patient and newborn care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16858,
                "name" => json_encode([
                    "pl" => "Współpraca z działem zaopatrzenia szpitala w celu zapewnienia niezbędnych środków i sprzętu.",
                    "en" => "Collaborating with the hospital's supply department to ensure necessary resources and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16859,
                "name" => json_encode([
                    "pl" => "Dbanie o higieniczne warunki pracy na oddziale, kontrolowanie stosowania zasad aseptyki przez cały personel.",
                    "en" => "Maintaining hygienic working conditions on the ward, ensuring all staff adhere to aseptic principles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16860,
                "name" => json_encode([
                    "pl" => "Dbałość o profilaktykę zakażeń wewnątrzszpitalnych, wdrażanie środków zapobiegających zakażeniom oraz kontrola ryzyka na oddziale.",
                    "en" => "Ensuring prevention of nosocomial infections, implementing preventive measures, and monitoring risks on the ward."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16861,
                "name" => json_encode([
                    "pl" => "Organizacja szkoleń i próbnych ćwiczeń w zakresie postępowania w nagłych sytuacjach, takich jak poród powikłany, zakażenia noworodków, krwotoki.",
                    "en" => "Organizing training and drills on handling emergencies, such as complicated births, newborn infections, and hemorrhages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16862,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że zespół stosuje najnowsze wytyczne i standardy dotyczące opieki położniczej i ginekologicznej.",
                    "en" => "Ensuring the team adheres to the latest guidelines and standards for obstetric and gynecological care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16863,
                "name" => json_encode([
                    "pl" => "Regularna analiza wyników pracy oddziału oraz opinii pacjentek w celu ciągłego doskonalenia jakości opieki.",
                    "en" => "Regularly analyzing ward performance and patient feedback to continuously improve the quality of care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16864,
                "name" => json_encode([
                    "pl" => "Dbałość o wygodę pacjentek, dostęp do informacji, wsparcia emocjonalnego oraz przyjazne środowisko opieki.",
                    "en" => "Ensuring patient comfort, access to information, emotional support, and a welcoming care environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PIELĘGNIARKI_BEZ_SPECJALIZACJI_LUB_W_TRAKCIE_SPECJALIZACJI = [
            [
                "id" => 16865,
                "name" => json_encode([
                    "pl" => "Tworzenie planu opieki dostosowanego do indywidualnych potrzeb pacjenta na podstawie dokładnej analizy stanu zdrowia.",
                    "en" => "Creating a care plan tailored to the individual needs of the patient based on a detailed analysis of their health condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16866,
                "name" => json_encode([
                    "pl" => "Obserwacja i ocena parametrów takich jak ciśnienie, puls, temperatura, saturacja, poziom bólu oraz monitorowanie zaawansowanych wskaźników klinicznych.",
                    "en" => "Observation and assessment of parameters such as blood pressure, pulse, temperature, saturation, pain level, and monitoring of advanced clinical indicators."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16867,
                "name" => json_encode([
                    "pl" => "Pielęgnacja pacjentów w stanie krytycznym, po operacjach, z przewlekłymi chorobami lub skomplikowanymi potrzebami zdrowotnymi.",
                    "en" => "Care for critically ill patients, post-operative patients, and those with chronic diseases or complex health needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16868,
                "name" => json_encode([
                    "pl" => "Wykonywanie specjalistycznych zabiegów, takich jak założenie sondy dożołądkowej, cewnikowanie, zakładanie wkłuć dożylnych, obsługa respiratorów, podawanie leków drogą dożylną.",
                    "en" => "Performing specialized procedures such as inserting nasogastric tubes, catheterization, intravenous line insertion, ventilator management, and intravenous drug administration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16869,
                "name" => json_encode([
                    "pl" => "Pobieranie materiałów do badań (krwi, moczu, płynów ustrojowych), interpretacja wyników podstawowych badań diagnostycznych, ocena stanu klinicznego pacjenta.",
                    "en" => "Collecting samples for tests (blood, urine, bodily fluids), interpreting basic diagnostic test results, and assessing the patient's clinical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16870,
                "name" => json_encode([
                    "pl" => "Wsparcie lekarzy przy zabiegach chirurgicznych, endoskopowych i innych wymagających zaawansowanych umiejętności.",
                    "en" => "Supporting physicians during surgical, endoscopic, and other advanced procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16871,
                "name" => json_encode([
                    "pl" => "Obserwacja reakcji pacjentów na specjalistyczne leczenie i zabiegi, ocena efektów terapii, informowanie lekarzy o zauważonych zmianach.",
                    "en" => "Observing patients' reactions to specialized treatments and procedures, evaluating therapy outcomes, and notifying doctors of observed changes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16872,
                "name" => json_encode([
                    "pl" => "Umiejętność przeprowadzania zaawansowanych procedur resuscytacyjnych (ALS), reagowanie na sytuacje nagłe i kryzysowe.",
                    "en" => "Ability to perform advanced life support (ALS) procedures and respond to emergencies and crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16873,
                "name" => json_encode([
                    "pl" => "Rejestrowanie szczegółowych informacji o stanie zdrowia pacjenta, wykonywanych procedurach, podawanych lekach, wynikach badań i reakcjach na leczenie.",
                    "en" => "Recording detailed information about the patient's health, procedures performed, medications administered, test results, and reactions to treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16874,
                "name" => json_encode([
                    "pl" => "Raportowanie stanu zdrowia pacjentów dla lekarzy i personelu dyżurnego, zwłaszcza w przypadku pacjentów w stanie krytycznym.",
                    "en" => "Reporting patients' health status to doctors and duty staff, especially for critically ill patients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16875,
                "name" => json_encode([
                    "pl" => "Dbanie o poufność i bezpieczeństwo dokumentacji medycznej zgodnie z zasadami RODO.",
                    "en" => "Ensuring the confidentiality and security of medical documentation in compliance with GDPR."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16876,
                "name" => json_encode([
                    "pl" => "Wyjaśnianie pacjentom przebiegu leczenia, efektów stosowanych metod oraz postępowania terapeutycznego.",
                    "en" => "Explaining the course of treatment, the effects of applied methods, and therapeutic procedures to patients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16877,
                "name" => json_encode([
                    "pl" => "Doradztwo na temat pielęgnacji ran, profilaktyki odleżyn, zasad higieny, samodzielnego stosowania leków oraz postępowania po wypisie.",
                    "en" => "Advising on wound care, pressure sore prevention, hygiene principles, self-administration of medications, and post-discharge procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16878,
                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia psychologicznego, szczególnie w przypadkach przewlekłych chorób lub w sytuacjach terminalnych, pomoc rodzinom w zrozumieniu procesu opieki.",
                    "en" => "Providing psychological support, especially in cases of chronic illnesses or terminal situations, and assisting families in understanding the care process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16879,
                "name" => json_encode([
                    "pl" => "Ścisła współpraca z lekarzami, rehabilitantami, dietetykami oraz innymi specjalistami w celu zapewnienia kompleksowej opieki.",
                    "en" => "Close collaboration with doctors, physiotherapists, dietitians, and other specialists to provide comprehensive care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16880,
                "name" => json_encode([
                    "pl" => "Informowanie lekarzy o zaobserwowanych zmianach w stanie zdrowia pacjentów, proponowanie rozwiązań w opiece specjalistycznej.",
                    "en" => "Informing doctors about observed changes in patients' health and proposing solutions in specialized care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16881,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w odprawach i obchody, omawianie przypadków klinicznych, planowanie dalszego leczenia.",
                    "en" => "Participating in briefings and rounds, discussing clinical cases, and planning further treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16882,
                "name" => json_encode([
                    "pl" => "Organizowanie szkoleń i warsztatów wewnętrznych z zakresu zaawansowanej opieki i procedur, edukacja personelu w zakresie nowoczesnych technologii medycznych.",
                    "en" => "Organizing internal training sessions and workshops on advanced care and procedures, and educating staff about modern medical technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16883,
                "name" => json_encode([
                    "pl" => "Pomoc młodszym pielęgniarkom w realizacji zadań, przekazywanie wiedzy praktycznej i teoretycznej.",
                    "en" => "Assisting junior nurses with task execution, and sharing practical and theoretical knowledge."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16884,
                "name" => json_encode([
                    "pl" => "Nadzorowanie wykonywania zabiegów, kontrola zgodności działań z procedurami oraz zapewnienie wysokiej jakości opieki.",
                    "en" => "Supervising the performance of procedures, ensuring compliance with protocols, and maintaining high-quality care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16885,
                "name" => json_encode([
                    "pl" => "Wdrażanie i nadzorowanie procedur antyseptycznych, dbanie o sterylność sprzętu, stosowanie środków ochrony osobistej.",
                    "en" => "Implementing and supervising antiseptic procedures, maintaining equipment sterility, and using personal protective measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16886,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że wszystkie procedury medyczne są realizowane zgodnie z zasadami bezpieczeństwa, minimalizowanie ryzyka powikłań i błędów.",
                    "en" => "Ensuring all medical procedures are performed safely, minimizing risks of complications and errors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16887,
                "name" => json_encode([
                    "pl" => "Dbanie o higieniczne i przyjazne środowisko dla pacjentów, monitorowanie stanu sprzętu medycznego oraz dbanie o jego sprawność.",
                    "en" => "Maintaining a hygienic and patient-friendly environment, monitoring medical equipment status, and ensuring its functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16888,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w kursach specjalistycznych, szkoleniach i konferencjach, zdobywanie nowych umiejętności praktycznych i teoretycznych.",
                    "en" => "Attending specialist courses, training sessions, and conferences to acquire new practical and theoretical skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16889,
                "name" => json_encode([
                    "pl" => "Wprowadzanie nowych technik i narzędzi w zakresie opieki nad pacjentami oraz monitorowanie ich efektywności.",
                    "en" => "Introducing new techniques and tools in patient care and monitoring their effectiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16890,
                "name" => json_encode([
                    "pl" => "Angażowanie się w projekty badawcze dotyczące pielęgniarstwa specjalistycznego, wdrażanie wyników badań do praktyki klinicznej.",
                    "en" => "Engaging in research projects related to specialized nursing and implementing research findings in clinical practice."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16891,
                "name" => json_encode([
                    "pl" => "Pomoc w tworzeniu i aktualizowaniu procedur medycznych, w tym zasad aseptyki, monitorowania pacjentów i standardów opieki.",
                    "en" => "Assisting in the creation and updating of medical protocols, including aseptic principles, patient monitoring, and care standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16892,
                "name" => json_encode([
                    "pl" => "Upewnienie się, że opieka nad pacjentami jest zgodna z najnowszymi standardami oraz wytycznymi ministerialnymi i szpitalnymi.",
                    "en" => "Ensuring patient care complies with the latest standards and ministerial and hospital guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16893,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że wszelkie działania są zgodne z przepisami prawa i zasadami etyki zawodowej.",
                    "en" => "Ensuring all actions comply with legal regulations and professional ethics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16894,
                "name" => json_encode([
                    "pl" => "Udzielanie pomocy emocjonalnej pacjentom z przewlekłymi chorobami, w stanie terminalnym lub w trudnych sytuacjach zdrowotnych.",
                    "en" => "Providing emotional support to patients with chronic illnesses, in terminal states, or in challenging health situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16895,
                "name" => json_encode([
                    "pl" => "Utrzymywanie empatycznej komunikacji, dostosowanie się do potrzeb pacjenta, uważne słuchanie i odpowiadanie na pytania.",
                    "en" => "Maintaining empathetic communication, addressing patient needs, listening attentively, and answering questions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16896,
                "name" => json_encode([
                    "pl" => "Wspieranie pacjentów i ich rodzin w rozwiązywaniu problemów, wyjaśnianie wątpliwości oraz udzielanie wyczerpujących informacji.",
                    "en" => "Supporting patients and their families in problem-solving, clarifying doubts, and providing comprehensive information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PIELEGNIARKI_Z_TYTULEM_SPECJALISTY = [

            [
                "id" => 16897,
                "name" => json_encode([
                    "pl" => "Tworzenie planu opieki dostosowanego do indywidualnych potrzeb pacjenta na podstawie dokładnej analizy stanu zdrowia.",
                    "en" => "Creating a care plan tailored to the individual needs of the patient based on a thorough analysis of their health status."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16898,
                "name" => json_encode([
                    "pl" => "Obserwacja i ocena parametrów takich jak ciśnienie, puls, temperatura, saturacja, poziom bólu oraz monitorowanie zaawansowanych wskaźników klinicznych.",
                    "en" => "Observation and assessment of parameters such as blood pressure, pulse, temperature, saturation, pain levels, and monitoring advanced clinical indicators."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16899,
                "name" => json_encode([
                    "pl" => "Pielęgnacja pacjentów w stanie krytycznym, po operacjach, z przewlekłymi chorobami lub skomplikowanymi potrzebami zdrowotnymi.",
                    "en" => "Caring for patients in critical condition, post-surgery, with chronic illnesses, or complex health needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16900,
                "name" => json_encode([
                    "pl" => "Wykonywanie specjalistycznych zabiegów, takich jak założenie sondy dożołądkowej, cewnikowanie, zakładanie wkłuć dożylnych, obsługa respiratorów, podawanie leków drogą dożylną.",
                    "en" => "Performing specialized procedures such as inserting a gastric tube, catheterization, setting up intravenous lines, operating ventilators, and administering intravenous drugs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16901,
                "name" => json_encode([
                    "pl" => "Pobieranie materiałów do badań (krwi, moczu, płynów ustrojowych), interpretacja wyników podstawowych badań diagnostycznych, ocena stanu klinicznego pacjenta.",
                    "en" => "Collecting materials for testing (blood, urine, body fluids), interpreting basic diagnostic test results, and assessing the patient's clinical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16902,
                "name" => json_encode([
                    "pl" => "Wsparcie lekarzy przy zabiegach chirurgicznych, endoskopowych i innych wymagających zaawansowanych umiejętności.",
                    "en" => "Supporting doctors during surgical, endoscopic, and other advanced procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16903,
                "name" => json_encode([
                    "pl" => "Obserwacja reakcji pacjentów na specjalistyczne leczenie i zabiegi, ocena efektów terapii, informowanie lekarzy o zauważonych zmianach.",
                    "en" => "Observing patients' reactions to specialized treatment and procedures, evaluating therapy outcomes, and informing doctors of observed changes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16904,
                "name" => json_encode([
                    "pl" => "Umiejętność przeprowadzania zaawansowanych procedur resuscytacyjnych (ALS), reagowanie na sytuacje nagłe i kryzysowe.",
                    "en" => "Ability to perform advanced life support (ALS) procedures and respond to emergencies and crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16905,
                "name" => json_encode([
                    "pl" => "Rejestrowanie szczegółowych informacji o stanie zdrowia pacjenta, wykonywanych procedurach, podawanych lekach, wynikach badań i reakcjach na leczenie.",
                    "en" => "Recording detailed information about the patient's health status, performed procedures, administered medications, test results, and responses to treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16906,
                "name" => json_encode([
                    "pl" => "Raportowanie stanu zdrowia pacjentów dla lekarzy i personelu dyżurnego, zwłaszcza w przypadku pacjentów w stanie krytycznym.",
                    "en" => "Reporting patients' health status to doctors and duty staff, especially in critical condition cases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16907,
                "name" => json_encode([
                    "pl" => "Dbanie o poufność i bezpieczeństwo dokumentacji medycznej zgodnie z zasadami RODO.",
                    "en" => "Ensuring confidentiality and security of medical documentation in accordance with GDPR principles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16908,
                "name" => json_encode([
                    "pl" => "Wyjaśnianie pacjentom przebiegu leczenia, efektów stosowanych metod oraz postępowania terapeutycznego.",
                    "en" => "Explaining treatment processes, effects of applied methods, and therapeutic procedures to patients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16909,
                "name" => json_encode([
                    "pl" => "Doradztwo na temat pielęgnacji ran, profilaktyki odleżyn, zasad higieny, samodzielnego stosowania leków oraz postępowania po wypisie.",
                    "en" => "Advising on wound care, pressure sore prevention, hygiene rules, self-administration of medication, and post-discharge care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16910,
                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia psychologicznego, szczególnie w przypadkach przewlekłych chorób lub w sytuacjach terminalnych, pomoc rodzinom w zrozumieniu procesu opieki.",
                    "en" => "Providing psychological support, especially in cases of chronic illnesses or terminal situations, and assisting families in understanding the care process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16911,
                "name" => json_encode([
                    "pl" => "Ścisła współpraca z lekarzami, rehabilitantami, dietetykami oraz innymi specjalistami w celu zapewnienia kompleksowej opieki.",
                    "en" => "Close collaboration with doctors, physiotherapists, dieticians, and other specialists to ensure comprehensive care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16912,
                "name" => json_encode([
                    "pl" => "Informowanie lekarzy o zaobserwowanych zmianach w stanie zdrowia pacjentów, proponowanie rozwiązań w opiece specjalistycznej.",
                    "en" => "Informing doctors about observed changes in patients' health status and suggesting solutions in specialized care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16913,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w odprawach i obchody, omawianie przypadków klinicznych, planowanie dalszego leczenia.",
                    "en" => "Participating in rounds and briefings, discussing clinical cases, and planning further treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16914,
                "name" => json_encode([
                    "pl" => "Organizowanie szkoleń i warsztatów wewnętrznych z zakresu zaawansowanej opieki i procedur, edukacja personelu w zakresie nowoczesnych technologii medycznych.",
                    "en" => "Organizing internal training and workshops on advanced care and procedures, educating staff on modern medical technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16915,
                "name" => json_encode([
                    "pl" => "Pomoc młodszym pielęgniarkom w realizacji zadań, przekazywanie wiedzy praktycznej i teoretycznej.",
                    "en" => "Assisting junior nurses with task execution and sharing practical and theoretical knowledge."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16916,
                "name" => json_encode([
                    "pl" => "Nadzorowanie wykonywania zabiegów, kontrola zgodności działań z procedurami oraz zapewnienie wysokiej jakości opieki.",
                    "en" => "Supervising procedures, ensuring compliance with protocols, and maintaining high-quality care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16917,
                "name" => json_encode([
                    "pl" => "Wdrażanie i nadzorowanie procedur antyseptycznych, dbanie o sterylność sprzętu, stosowanie środków ochrony osobistej.",
                    "en" => "Implementing and supervising antiseptic procedures, maintaining equipment sterility, and using personal protective measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16918,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że wszystkie procedury medyczne są realizowane zgodnie z zasadami bezpieczeństwa, minimalizowanie ryzyka powikłań i błędów.",
                    "en" => "Ensuring all medical procedures comply with safety standards and minimizing risks of complications and errors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16919,
                "name" => json_encode([
                    "pl" => "Dbanie o higieniczne i przyjazne środowisko dla pacjentów, monitorowanie stanu sprzętu medycznego oraz dbanie o jego sprawność.",
                    "en" => "Maintaining a hygienic and friendly environment for patients, monitoring medical equipment status, and ensuring its functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16920,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w kursach specjalistycznych, szkoleniach i konferencjach, zdobywanie nowych umiejętności praktycznych i teoretycznych.",
                    "en" => "Participating in specialized courses, training, and conferences, and acquiring new practical and theoretical skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16921,
                "name" => json_encode([
                    "pl" => "Wprowadzanie nowych technik i narzędzi w zakresie opieki nad pacjentami oraz monitorowanie ich efektywności.",
                    "en" => "Introducing new techniques and tools in patient care and monitoring their effectiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16922,
                "name" => json_encode([
                    "pl" => "Angażowanie się w projekty badawcze dotyczące pielęgniarstwa specjalistycznego, wdrażanie wyników badań do praktyki klinicznej.",
                    "en" => "Engaging in research projects on specialized nursing and implementing research findings into clinical practice."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16923,
                "name" => json_encode([
                    "pl" => "Pomoc w tworzeniu i aktualizowaniu procedur medycznych, w tym zasad aseptyki, monitorowania pacjentów i standardów opieki.",
                    "en" => "Assisting in creating and updating medical procedures, including asepsis principles, patient monitoring, and care standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16924,
                "name" => json_encode([
                    "pl" => "Upewnienie się, że opieka nad pacjentami jest zgodna z najnowszymi standardami oraz wytycznymi ministerialnymi i szpitalnymi.",
                    "en" => "Ensuring patient care aligns with the latest standards and ministerial and hospital guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16925,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że wszelkie działania są zgodne z przepisami prawa i zasadami etyki zawodowej.",
                    "en" => "Ensuring that all actions comply with legal regulations and professional ethics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16926,
                "name" => json_encode([
                    "pl" => "Udzielanie pomocy emocjonalnej pacjentom z przewlekłymi chorobami, w stanie terminalnym lub w trudnych sytuacjach zdrowotnych.",
                    "en" => "Providing emotional support to patients with chronic illnesses, in terminal states, or facing difficult health situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16927,
                "name" => json_encode([
                    "pl" => "Utrzymywanie empatycznej komunikacji, dostosowanie się do potrzeb pacjenta, uważne słuchanie i odpowiadanie na pytania.",
                    "en" => "Maintaining empathetic communication, adapting to patient needs, listening attentively, and answering questions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16928,
                "name" => json_encode([
                    "pl" => "Wspieranie pacjentów i ich rodzin w rozwiązywaniu problemów, wyjaśnianie wątpliwości oraz udzielanie wyczerpujących informacji.",
                    "en" => "Supporting patients and their families in solving problems, clarifying doubts, and providing comprehensive information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POLOZNE_BEZ_SPECJALIZACJI_LUB_W_TRAKCIE_SPECJALIZACJI = [

            [
                "id" => 16929,
                "name" => json_encode([
                    "pl" => "Regularna obserwacja i ocena parametrów życiowych pacjentek, takich jak ciśnienie krwi, puls, temperatura oraz monitorowanie stanu płodu.",
                    "en" => "Regular observation and assessment of patients' vital parameters such as blood pressure, pulse, temperature, and monitoring of the fetus' condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16930,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań, takich jak pomiar wysokości dna macicy, osłuchiwanie tętna płodu oraz monitorowanie ruchów dziecka.",
                    "en" => "Conducting examinations such as measuring the fundal height, listening to the fetal heartbeat, and monitoring baby movements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16931,
                "name" => json_encode([
                    "pl" => "Asystowanie lekarzom oraz aktywne wspieranie pacjentki podczas porodu naturalnego, monitorowanie akcji porodowej, zachęcanie do przyjmowania korzystnych pozycji porodowych.",
                    "en" => "Assisting doctors and actively supporting the patient during natural childbirth, monitoring labor progress, and encouraging beneficial birthing positions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16932,
                "name" => json_encode([
                    "pl" => "Przygotowanie pacjentki do porodu, wykonanie lewatywy, golenie okolic intymnych, zakładanie wkłuć dożylnych i inne przygotowania.",
                    "en" => "Preparing the patient for childbirth, including enemas, shaving intimate areas, setting up intravenous lines, and other preparations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16933,
                "name" => json_encode([
                    "pl" => "Wsparcie emocjonalne, pomoc w zmianie pozycji, dbanie o higienę oraz komfort pacjentki w trakcie porodu.",
                    "en" => "Providing emotional support, helping with position changes, and ensuring hygiene and comfort during childbirth."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16934,
                "name" => json_encode([
                    "pl" => "Ocena parametrów życiowych pacjentek po porodzie, kontrola krwawienia, ocena gojenia się ran po nacięciu lub cesarskim cięciu.",
                    "en" => "Assessing patients' vital signs postpartum, monitoring bleeding, and evaluating the healing of episiotomy or cesarean section wounds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16935,
                "name" => json_encode([
                    "pl" => "Wsparcie pacjentek w procesie karmienia piersią, pomoc w przyjmowaniu odpowiedniej pozycji oraz nauka technik karmienia.",
                    "en" => "Supporting patients in breastfeeding, helping with proper positioning, and teaching feeding techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16936,
                "name" => json_encode([
                    "pl" => "Informowanie o higienie osobistej, profilaktyce zapalenia piersi, dbaniu o miejsca nacięcia lub szwów oraz przygotowanie do samodzielnej opieki po powrocie do domu.",
                    "en" => "Providing guidance on personal hygiene, mastitis prevention, care of incision or suture sites, and preparing for independent care at home."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16937,
                "name" => json_encode([
                    "pl" => "Pomoc pacjentkom w radzeniu sobie z trudnościami emocjonalnymi po porodzie, szczególnie przy pierwszych dzieciach lub po trudnych porodach.",
                    "en" => "Helping patients cope with emotional difficulties after childbirth, especially with their first child or following challenging deliveries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16938,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań i pomiarów, takich jak kontrola masy ciała, temperatury, odruchów, obserwacja oddechu, koloru skóry.",
                    "en" => "Performing examinations and measurements such as checking weight, temperature, reflexes, and observing breathing and skin color."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16939,
                "name" => json_encode([
                    "pl" => "Wykonywanie czynności pielęgnacyjnych, takich jak kąpanie, pieluszkowanie, dbanie o pępek, zapewnienie odpowiedniej higieny.",
                    "en" => "Performing care activities such as bathing, diapering, caring for the umbilical stump, and ensuring proper hygiene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16940,
                "name" => json_encode([
                    "pl" => "Obserwacja noworodków pod kątem żółtaczki, trudności z oddychaniem, odruchów patologicznych oraz innych niepokojących objawów.",
                    "en" => "Monitoring newborns for jaundice, breathing difficulties, pathological reflexes, and other concerning symptoms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16941,
                "name" => json_encode([
                    "pl" => "Nauka pacjentek prawidłowego przystawiania dziecka do piersi oraz pomoc w przyjęciu odpowiedniej pozycji do karmienia.",
                    "en" => "Teaching patients how to properly latch their baby to the breast and assisting with adopting the correct feeding position."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16942,
                "name" => json_encode([
                    "pl" => "Prowadzenie karty noworodka, odnotowanie wyników badań, podanych leków oraz obserwacji stanu dziecka.",
                    "en" => "Maintaining the newborn's chart, documenting test results, administered medications, and observations of the baby's condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16943,
                "name" => json_encode([
                    "pl" => "Realizacja zleceń lekarskich, takich jak podawanie leków, zakładanie cewnika, wykonywanie zastrzyków i wlewów dożylnych.",
                    "en" => "Carrying out medical orders such as administering medications, catheter placement, injections, and intravenous infusions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16944,
                "name" => json_encode([
                    "pl" => "Pobieranie materiału do badań (np. krwi, moczu), wykonywanie testów na obecność białka w moczu oraz pomiar ciśnienia tętniczego i poziomu glukozy.",
                    "en" => "Collecting samples for testing (e.g., blood, urine), conducting proteinuria tests, and measuring blood pressure and glucose levels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16945,
                "name" => json_encode([
                    "pl" => "Przygotowanie kobiet do badań ginekologicznych, diagnostycznych oraz operacji zgodnie z zaleceniami lekarza.",
                    "en" => "Preparing women for gynecological, diagnostic, and surgical procedures as instructed by the doctor."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16946,
                "name" => json_encode([
                    "pl" => "Informowanie lekarzy o zaobserwowanych zmianach w stanie pacjentki lub noworodka oraz proponowanie dalszych działań opiekuńczych.",
                    "en" => "Informing doctors about observed changes in the condition of the patient or newborn and suggesting further care measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16947,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji na temat diety, aktywności fizycznej i profilaktyki zdrowotnej w okresie ciąży i po porodzie.",
                    "en" => "Providing information about diet, physical activity, and health prevention during pregnancy and postpartum."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16948,
                "name" => json_encode([
                    "pl" => "Instruktaż dotyczący higieny dziecka, pielęgnacji pępka, zasad kąpieli, przewijania oraz sposobów na uspokajanie i karmienie noworodka.",
                    "en" => "Instructing on baby hygiene, umbilical care, bathing, diapering, and techniques for soothing and feeding the newborn."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16949,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentek o metodach antykoncepcji, profilaktyce nowotworów, higienie intymnej i planowaniu rodziny.",
                    "en" => "Educating patients about contraception, cancer prevention, intimate hygiene, and family planning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16950,
                "name" => json_encode([
                    "pl" => "Pomoc pacjentkom i ich rodzinom w trudnych sytuacjach, takich jak ciąża ryzyka, problemy emocjonalne po porodzie lub choroby noworodka.",
                    "en" => "Assisting patients and their families in difficult situations such as high-risk pregnancies, emotional challenges after childbirth, or newborn illnesses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16951,
                "name" => json_encode([
                    "pl" => "Ścisła współpraca z lekarzami położnikami, neonatologami oraz innymi specjalistami w celu zapewnienia kompleksowej opieki.",
                    "en" => "Collaborating closely with obstetricians, neonatologists, and other specialists to ensure comprehensive care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16952,
                "name" => json_encode([
                    "pl" => "Informowanie lekarzy o stanie pacjentki lub noworodka, zgłaszanie niepokojących objawów oraz raportowanie efektów zastosowanej opieki.",
                    "en" => "Informing doctors about the condition of the patient or newborn, reporting alarming symptoms, and providing updates on care outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16953,
                "name" => json_encode([
                    "pl" => "Wymiana informacji na temat stanu zdrowia pacjentek i noworodków oraz współpraca przy podejmowaniu decyzji terapeutycznych.",
                    "en" => "Exchanging information about the health status of patients and newborns and collaborating on therapeutic decisions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16954,
                "name" => json_encode([
                    "pl" => "Szczegółowe zapisy dotyczące stanu zdrowia pacjentek i noworodków, przebiegu porodu, podanych leków i zrealizowanych procedur.",
                    "en" => "Detailed records of the health status of patients and newborns, labor progress, administered medications, and completed procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16955,
                "name" => json_encode([
                    "pl" => "Dbanie o poufność i bezpieczeństwo dokumentacji zgodnie z przepisami o ochronie danych osobowych (RODO).",
                    "en" => "Ensuring the confidentiality and security of documentation in compliance with data protection regulations (GDPR)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16956,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o stanie zdrowia pacjentek i noworodków podczas zmian dyżurów, aby zapewnić ciągłość opieki.",
                    "en" => "Communicating information about the health status of patients and newborns during shift changes to ensure continuity of care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16957,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad aseptyki i antyseptyki, stosowanie rękawiczek i środków dezynfekcyjnych, aby minimalizować ryzyko infekcji.",
                    "en" => "Adhering to aseptic and antiseptic practices, using gloves and disinfectants to minimize infection risks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16958,
                "name" => json_encode([
                    "pl" => "Regularna zmiana pościeli, dbanie o higienę osobistą pacjentek oraz noworodków, przygotowywanie pokoju do przyjęcia pacjentki.",
                    "en" => "Regularly changing bed linens, ensuring the personal hygiene of patients and newborns, and preparing rooms for patient admissions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16959,
                "name" => json_encode([
                    "pl" => "Ścisłe przestrzeganie zasad podawania leków, stosowanie sprzętu medycznego zgodnie z procedurami oraz dbałość o prawidłowe użytkowanie sprzętu.",
                    "en" => "Strictly following medication administration protocols, using medical equipment as per procedures, and ensuring its proper usage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16960,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w kursach i szkoleniach z zakresu opieki położniczej, ginekologicznej i neonatologicznej.",
                    "en" => "Participating in courses and training in obstetric, gynecological, and neonatal care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16961,
                "name" => json_encode([
                    "pl" => "Uczenie się specjalistycznych procedur, takich jak opieka nad wcześniakami, opieka poporodowa po cesarskim cięciu.",
                    "en" => "Learning specialized procedures such as care for premature babies and postpartum care after cesarean delivery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16962,
                "name" => json_encode([
                    "pl" => "Stosowanie w praktyce nowych wytycznych i procedur zgodnie z najnowszymi standardami pielęgniarskimi i położniczymi.",
                    "en" => "Applying new guidelines and procedures in practice in accordance with the latest nursing and obstetric standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POLOZNE_Z_TYTULEM_SPECJALISTY = [

            [
                "id" => 16963,
                "name" => json_encode([
                    "pl" => "Zaawansowana ocena parametrów zdrowotnych ciężarnych, diagnozowanie zagrożeń, takich jak stan przedrzucawkowy, cukrzyca ciążowa, infekcje.",
                    "en" => "Advanced assessment of health parameters in pregnant women, diagnosing risks such as preeclampsia, gestational diabetes, and infections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16964,
                "name" => json_encode([
                    "pl" => "Obsługa specjalistycznych sprzętów, np. KTG, wykonywanie badań oceniających stan płodu i monitorowanie jego rozwoju.",
                    "en" => "Operating specialized equipment, e.g., CTG, performing tests to assess fetal condition and monitoring development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16965,
                "name" => json_encode([
                    "pl" => "Samodzielne prowadzenie porodu przy współpracy z lekarzami w przypadku sytuacji wymagających zaawansowanej wiedzy i umiejętności.",
                    "en" => "Independently managing childbirth in collaboration with doctors in cases requiring advanced knowledge and skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16966,
                "name" => json_encode([
                    "pl" => "Samodzielne wykonywanie procedur, takich jak założenie wkłuć dożylnych, cewnikowanie, monitorowanie tętna płodu w sytuacjach ryzykownych.",
                    "en" => "Independently performing procedures such as inserting IV lines, catheterization, and monitoring fetal heartbeat in risky situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16967,
                "name" => json_encode([
                    "pl" => "Stosowanie specjalistycznych technik redukcji bólu, wspieranie pacjentki w przyjmowaniu pozycji korzystnych dla porodu oraz instruktaż w zakresie oddychania i relaksacji.",
                    "en" => "Using specialized pain reduction techniques, supporting patients in adopting beneficial birthing positions, and providing breathing and relaxation guidance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16968,
                "name" => json_encode([
                    "pl" => "Ocena stanu zdrowia kobiet po cięciach cesarskich, porodach powikłanych, opieka nad pacjentkami z dużą utratą krwi lub innymi komplikacjami.",
                    "en" => "Assessing the health of women after cesarean sections, complicated births, and caring for patients with significant blood loss or other complications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16969,
                "name" => json_encode([
                    "pl" => "Dbanie o proces gojenia się rany, monitorowanie parametrów życiowych, zapobieganie powikłaniom pooperacyjnym.",
                    "en" => "Ensuring wound healing, monitoring vital parameters, and preventing postoperative complications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16970,
                "name" => json_encode([
                    "pl" => "Pomoc w problematycznych przypadkach laktacji, doradztwo laktacyjne, rozwiązywanie problemów z przystawianiem dziecka do piersi.",
                    "en" => "Assisting in problematic lactation cases, providing lactation advice, and resolving issues with latching the baby to the breast."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16971,
                "name" => json_encode([
                    "pl" => "Przekazywanie specjalistycznej wiedzy na temat opieki poporodowej, regeneracji organizmu, profilaktyki zakrzepicy, dbania o ranę poporodową.",
                    "en" => "Providing specialized knowledge about postpartum care, body recovery, thrombosis prevention, and caring for postpartum wounds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16972,
                "name" => json_encode([
                    "pl" => "Pomoc pacjentkom w radzeniu sobie z emocjonalnymi skutkami porodu, rozpoznawanie objawów depresji poporodowej i kierowanie do odpowiednich specjalistów.",
                    "en" => "Helping patients cope with the emotional effects of childbirth, recognizing postpartum depression symptoms, and referring them to appropriate specialists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16973,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu zdrowia wcześniaków, dzieci z niską masą urodzeniową, dzieci z żółtaczką noworodkową lub innymi problemami zdrowotnymi.",
                    "en" => "Monitoring the health of premature infants, low-birthweight babies, and newborns with jaundice or other health issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16974,
                "name" => json_encode([
                    "pl" => "Karmienie wcześniaków, wykonywanie inhalacji, prowadzenie fototerapii przy żółtaczce noworodkowej.",
                    "en" => "Feeding premature infants, performing inhalations, and conducting phototherapy for newborn jaundice."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16975,
                "name" => json_encode([
                    "pl" => "Dbanie o dzieci z problemami neurologicznymi, zaburzeniami oddechowymi, skomplikowanymi wadami wrodzonymi.",
                    "en" => "Caring for children with neurological problems, respiratory disorders, and complex congenital anomalies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16976,
                "name" => json_encode([
                    "pl" => "Szkolenie rodziców w zakresie pielęgnacji noworodków z problemami zdrowotnymi, dbania o przewód pępowinowy, radzenia sobie z żółtaczką oraz korygowania wagi.",
                    "en" => "Training parents in caring for newborns with health issues, umbilical cord care, managing jaundice, and correcting weight."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16977,
                "name" => json_encode([
                    "pl" => "Edukowanie rodziców na temat karmienia wcześniaków i dzieci wymagających specjalistycznej opieki laktacyjnej.",
                    "en" => "Educating parents about feeding premature infants and children requiring specialized lactation care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16978,
                "name" => json_encode([
                    "pl" => "Prowadzenie zabiegów, takich jak cewnikowanie, założenie sondy, zakładanie wkłuć dożylnych, monitorowanie tętna płodu i noworodka.",
                    "en" => "Performing procedures such as catheterization, inserting a feeding tube, setting up intravenous lines, and monitoring fetal and newborn heart rates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16979,
                "name" => json_encode([
                    "pl" => "Stosowanie zaawansowanych procedur resuscytacyjnych u noworodków oraz pacjentek w stanie zagrożenia życia.",
                    "en" => "Applying advanced resuscitation procedures for newborns and patients in life-threatening conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16980,
                "name" => json_encode([
                    "pl" => "Obserwacja reakcji pacjentek i noworodków na zabiegi, zgłaszanie lekarzom wszelkich niepokojących objawów, które mogą świadczyć o powikłaniach.",
                    "en" => "Observing patient and newborn reactions to procedures, reporting any concerning symptoms to doctors that may indicate complications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16981,
                "name" => json_encode([
                    "pl" => "Pomoc lekarzom przy bardziej skomplikowanych zabiegach i operacjach, takich jak cesarskie cięcie, zabiegi łyżeczkowania, zakładanie szwów.",
                    "en" => "Assisting doctors in more complex procedures and surgeries such as cesarean sections, curettage, and suturing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16982,
                "name" => json_encode([
                    "pl" => "Zapisy dotyczące specjalistycznych procedur, zabiegów, wyników monitorowania, podanych leków i ogólnego przebiegu opieki.",
                    "en" => "Recording details of specialized procedures, monitoring results, administered medications, and overall care progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16983,
                "name" => json_encode([
                    "pl" => "Przekazywanie kluczowych informacji o stanie pacjentek i noworodków, zapewniając ciągłość i spójność opieki.",
                    "en" => "Communicating key information about patient and newborn conditions, ensuring continuity and consistency of care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16984,
                "name" => json_encode([
                    "pl" => "Dbanie o poufność danych medycznych pacjentek i noworodków zgodnie z obowiązującymi przepisami prawnymi.",
                    "en" => "Ensuring the confidentiality of patient and newborn medical data in compliance with applicable legal regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16985,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentek o metodach pielęgnacji po cięciu cesarskim, profilaktyce zakrzepicy, higienie połogowej.",
                    "en" => "Educating patients about post-cesarean care, thrombosis prevention, and postpartum hygiene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16986,
                "name" => json_encode([
                    "pl" => "Przekazywanie specjalistycznych instrukcji dotyczących pielęgnacji dzieci urodzonych przedwcześnie lub wymagających intensywnego wsparcia.",
                    "en" => "Providing specialized instructions on caring for premature babies or those requiring intensive support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16987,
                "name" => json_encode([
                    "pl" => "Doradztwo laktacyjne w przypadkach skomplikowanych, pomoc pacjentkom z problemami laktacyjnymi i przygotowanie do karmienia wcześniaków.",
                    "en" => "Offering lactation advice in complex cases, assisting patients with lactation issues, and preparing for feeding premature babies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16988,
                "name" => json_encode([
                    "pl" => "Pomoc pacjentkom i ich bliskim w radzeniu sobie z emocjonalnymi wyzwaniami związanymi z ciążą, porodem, opieką nad noworodkiem oraz przewlekłą opieką nad dziećmi chorymi.",
                    "en" => "Helping patients and their families cope with emotional challenges related to pregnancy, childbirth, newborn care, and long-term care for sick children."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16989,
                "name" => json_encode([
                    "pl" => "Współpraca z położnikami, ginekologami, neonatologami oraz innymi specjalistami w przypadku pacjentek i noworodków wymagających szczególnej opieki.",
                    "en" => "Collaborating with obstetricians, gynecologists, neonatologists, and other specialists for patients and newborns requiring special care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16990,
                "name" => json_encode([
                    "pl" => "Pomoc mniej doświadczonym położnym, przekazywanie wiedzy i udzielanie wskazówek dotyczących zaawansowanych procedur.",
                    "en" => "Assisting less experienced midwives by sharing knowledge and providing guidance on advanced procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16991,
                "name" => json_encode([
                    "pl" => "Aktywne omawianie przypadków, przedstawianie wyników monitorowania pacjentek i noworodków oraz współpraca w planowaniu opieki.",
                    "en" => "Actively discussing cases, presenting monitoring results of patients and newborns, and collaborating on care planning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16992,
                "name" => json_encode([
                    "pl" => "Ścisłe przestrzeganie zasad antyseptyki, dezynfekcji sprzętu, stosowanie środków ochrony osobistej.",
                    "en" => "Strictly adhering to aseptic principles, equipment disinfection, and using personal protective equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16993,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że procedury są wykonywane zgodnie z przepisami bezpieczeństwa, minimalizowanie ryzyka infekcji i innych komplikacji.",
                    "en" => "Ensuring procedures are performed safely, minimizing infection risks and other complications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16994,
                "name" => json_encode([
                    "pl" => "Dbanie o higieniczne warunki na oddziale, przygotowywanie sali porodowej, troska o odpowiednią temperaturę i wilgotność powietrza dla noworodków.",
                    "en" => "Maintaining hygienic conditions on the ward, preparing delivery rooms, and ensuring appropriate temperature and humidity for newborns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16995,
                "name" => json_encode([
                    "pl" => "Udział w kursach, szkoleniach i konferencjach z zakresu położnictwa, neonatologii i ginekologii.",
                    "en" => "Participating in courses, training, and conferences on obstetrics, neonatology, and gynecology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16996,
                "name" => json_encode([
                    "pl" => "Stosowanie nowoczesnych technik wspierających opiekę nad pacjentkami i noworodkami, monitorowanie efektów i wdrażanie nowych wytycznych.",
                    "en" => "Utilizing modern techniques to support care for patients and newborns, monitoring outcomes, and implementing new guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16997,
                "name" => json_encode([
                    "pl" => "Zaangażowanie w projekty badawcze dotyczące opieki nad pacjentkami i noworodkami oraz wprowadzanie wyników badań do praktyki klinicznej.",
                    "en" => "Engaging in research projects on patient and newborn care and integrating research findings into clinical practice."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $HIGIENISTKA_SZKOLNA = [

            [
                "id" => 16998,
                "name" => json_encode([
                    "pl" => "Udzielanie pierwszej pomocy uczniom w sytuacjach nagłych, takich jak urazy, omdlenia, krwotoki, reakcje alergiczne.",
                    "en" => "Providing first aid to students in emergencies such as injuries, fainting, bleeding, and allergic reactions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 16999,
                "name" => json_encode([
                    "pl" => "Ocena stanu zdrowia uczniów zgłaszających złe samopoczucie, izolowanie uczniów z objawami choroby zakaźnej, kontakt z rodzicami w razie potrzeby.",
                    "en" => "Assessing the health of students reporting discomfort, isolating those with symptoms of infectious diseases, and contacting parents when necessary."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17000,
                "name" => json_encode([
                    "pl" => "Tworzenie i aktualizacja kart zdrowia uczniów, dokumentowanie historii medycznej oraz przeprowadzonych zabiegów i interwencji.",
                    "en" => "Creating and updating students' health records, documenting medical history, and performed treatments and interventions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17001,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu zdrowia uczniów z chorobami przewlekłymi (np. astma, cukrzyca) oraz udzielanie wsparcia w przypadku nagłych dolegliwości.",
                    "en" => "Monitoring the health of students with chronic conditions (e.g., asthma, diabetes) and providing support in case of acute issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17002,
                "name" => json_encode([
                    "pl" => "Wdrażanie programów profilaktycznych, np. dotyczących zapobiegania otyłości, przeciwdziałania uzależnieniom, higieny jamy ustnej, profilaktyki wad postawy.",
                    "en" => "Implementing prevention programs such as obesity prevention, addiction prevention, oral hygiene, and posture correction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17003,
                "name" => json_encode([
                    "pl" => "Informowanie rodziców o obowiązkowych i zalecanych szczepieniach oraz współpraca z lokalnymi ośrodkami zdrowia przy organizacji szczepień.",
                    "en" => "Informing parents about mandatory and recommended vaccinations and collaborating with local health centers for vaccination programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17004,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli czystości, przestrzegania zasad higieny osobistej, profilaktyka wszawicy i chorób skóry.",
                    "en" => "Conducting cleanliness checks, ensuring personal hygiene standards, and preventing head lice and skin diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17005,
                "name" => json_encode([
                    "pl" => "Edukacja w zakresie higieny jamy ustnej, organizowanie przeglądów stomatologicznych i instruktaż czyszczenia zębów.",
                    "en" => "Providing oral hygiene education, organizing dental check-ups, and instructing on proper tooth brushing techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17006,
                "name" => json_encode([
                    "pl" => "Regularne mierzenie wzrostu, masy ciała uczniów oraz dokumentowanie wyników w kartach zdrowia.",
                    "en" => "Regularly measuring students' height and weight and documenting the results in health records."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17007,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań przesiewowych w zakresie wzroku i słuchu, identyfikacja ewentualnych problemów i informowanie rodziców o konieczności dalszej diagnozy.",
                    "en" => "Conducting vision and hearing screenings, identifying potential issues, and informing parents about the need for further diagnosis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17008,
                "name" => json_encode([
                    "pl" => "Wykrywanie wad postawy i skrzywień kręgosłupa, edukowanie o prawidłowej postawie, informowanie rodziców o konieczności dalszej diagnostyki.",
                    "en" => "Detecting posture defects and spinal curvatures, educating on proper posture, and informing parents about the need for further diagnostics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17009,
                "name" => json_encode([
                    "pl" => "Monitorowanie ciśnienia krwi u uczniów, zwłaszcza u tych z grup ryzyka (np. otyłość, cukrzyca), i prowadzenie profilaktyki zdrowotnej.",
                    "en" => "Monitoring blood pressure in students, especially those at risk (e.g., obesity, diabetes), and implementing health prevention measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17010,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć na temat zdrowego stylu życia, zasad zdrowego odżywiania, higieny osobistej, zapobiegania chorobom i promowania aktywności fizycznej.",
                    "en" => "Organizing classes on healthy lifestyles, principles of healthy eating, personal hygiene, disease prevention, and promoting physical activity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17011,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy o ryzykach związanych z nałogami, zdrowiem psychicznym, chorobami zakaźnymi oraz o zasadach higieny osobistej.",
                    "en" => "Educating about the risks of addictions, mental health issues, infectious diseases, and personal hygiene principles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17012,
                "name" => json_encode([
                    "pl" => "Prowadzenie spotkań informacyjnych dla rodziców, przekazywanie wskazówek dotyczących zdrowia dzieci, zasad odżywiania, higieny oraz profilaktyki chorób.",
                    "en" => "Conducting informational meetings for parents, providing advice on children's health, nutrition, hygiene, and disease prevention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17013,
                "name" => json_encode([
                    "pl" => "Edukacja na temat radzenia sobie ze stresem, zapobiegania depresji, asertywności, a także pomoc w rozwiązywaniu problemów związanych z presją rówieśniczą.",
                    "en" => "Educating on stress management, depression prevention, assertiveness, and helping address peer pressure-related problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17014,
                "name" => json_encode([
                    "pl" => "Informowanie o stanie zdrowia uczniów, konsultacje dotyczące indywidualnych potrzeb zdrowotnych uczniów, współpraca przy realizacji programów zdrowotnych.",
                    "en" => "Informing about students' health status, consulting on individual health needs, and collaborating on health programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17015,
                "name" => json_encode([
                    "pl" => "Dbanie o apteczki pierwszej pomocy, nadzór nad zdrowiem uczestników wycieczek oraz wsparcie w nagłych sytuacjach.",
                    "en" => "Maintaining first aid kits, overseeing the health of trip participants, and providing support in emergencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17016,
                "name" => json_encode([
                    "pl" => "Informowanie rodziców o problemach zdrowotnych ich dzieci, współpraca przy organizacji dalszej diagnostyki i leczenia.",
                    "en" => "Informing parents about their children's health issues and collaborating on further diagnosis and treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17017,
                "name" => json_encode([
                    "pl" => "Kontakt z placówkami medycznymi w zakresie profilaktyki, szczepień, badań przesiewowych i specjalistycznej opieki dla uczniów.",
                    "en" => "Coordinating with medical facilities regarding prevention, vaccinations, screenings, and specialized care for students."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17018,
                "name" => json_encode([
                    "pl" => "Współpraca z dyrekcją w zakresie zapewnienia odpowiednich warunków higienicznych w szkole (czystość, warunki sanitarne, dostępność środków higieny).",
                    "en" => "Collaborating with the school administration to ensure proper hygiene standards (cleanliness, sanitary conditions, availability of hygiene supplies)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17019,
                "name" => json_encode([
                    "pl" => "Regularne uzupełnianie zawartości apteczek pierwszej pomocy, sprawdzanie ich stanu i umiejscowienia w szkole.",
                    "en" => "Regularly restocking first aid kits, checking their condition and placement within the school."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17020,
                "name" => json_encode([
                    "pl" => "Dbanie o izolowanie uczniów z objawami infekcji, informowanie rodziców i personelu o zasadach profilaktyki oraz o sytuacjach epidemicznych.",
                    "en" => "Ensuring isolation of students with infection symptoms, informing parents and staff about prevention measures and epidemic situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17021,
                "name" => json_encode([
                    "pl" => "Stosowanie procedur w przypadku incydentów zdrowotnych, nagłych wypadków, chorób zakaźnych, współpraca z dyrekcją w sytuacjach kryzysowych.",
                    "en" => "Following procedures in health incidents, emergencies, and infectious diseases, and collaborating with the administration in crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17022,
                "name" => json_encode([
                    "pl" => "Rejestrowanie informacji o zdrowiu uczniów, przebytych chorobach, szczepieniach, udzielonej pomocy i wynikach badań przesiewowych.",
                    "en" => "Recording information about students' health, past illnesses, vaccinations, provided assistance, and screening results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17023,
                "name" => json_encode([
                    "pl" => "Sporządzanie okresowych raportów dotyczących zdrowia uczniów, w tym wyników badań przesiewowych, częstości urazów, incydentów zdrowotnych.",
                    "en" => "Preparing periodic reports on students' health, including screening results, injury frequency, and health incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17024,
                "name" => json_encode([
                    "pl" => "Zapewnienie poufności dokumentacji medycznej uczniów, przechowywanie danych zgodnie z zasadami RODO.",
                    "en" => "Ensuring confidentiality of students' medical records and storing data in compliance with GDPR."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17025,
                "name" => json_encode([
                    "pl" => "Udostępnianie informacji zdrowotnych rodzicom, szczególnie w przypadkach wymagających interwencji lub konsultacji medycznych.",
                    "en" => "Providing health information to parents, especially in cases requiring medical intervention or consultation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17026,
                "name" => json_encode([
                    "pl" => "Udział w kursach i warsztatach z zakresu opieki zdrowotnej nad dziećmi i młodzieżą, pierwszej pomocy, profilaktyki zdrowotnej.",
                    "en" => "Participating in courses and workshops on healthcare for children and adolescents, first aid, and health prevention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17027,
                "name" => json_encode([
                    "pl" => "Stosowanie innowacyjnych metod i wytycznych w zakresie opieki nad dziećmi, korzystanie z najnowszych programów profilaktycznych.",
                    "en" => "Applying innovative methods and guidelines in child care and utilizing the latest prevention programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17028,
                "name" => json_encode([
                    "pl" => "Rozwój umiejętności komunikacyjnych, empatii oraz umiejętności udzielania wsparcia psychologicznego uczniom.",
                    "en" => "Developing communication skills, empathy, and the ability to provide psychological support to students."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZE_DENTYSCI_BEZ_SPECJALIZACJI_LUB_W_TRAKCIE_SPECJALIZACJI = [

            [
                "id" => 17029,
                "name" => json_encode([
                    "pl" => "Zbieranie informacji o ogólnym stanie zdrowia pacjenta, objawach oraz historii leczenia stomatologicznego.",
                    "en" => "Gathering information about the patient's general health, symptoms, and dental treatment history."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17030,
                "name" => json_encode([
                    "pl" => "Ocena stanu uzębienia, dziąseł, błon śluzowych i tkanek przyzębia w celu wykrycia chorób zębów i przyzębia, np. próchnicy, zapalenia dziąseł.",
                    "en" => "Assessing the condition of teeth, gums, oral mucosa, and periodontal tissues to detect dental and periodontal diseases such as cavities and gingivitis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17031,
                "name" => json_encode([
                    "pl" => "Wykonywanie zdjęć RTG (np. pantomograficznych, zębowych) w celu dokładnego rozpoznania zmian chorobowych, takich jak próchnica głęboka, torbiele, zmiany okołowierzchołkowe.",
                    "en" => "Performing X-rays (e.g., panoramic, dental) to accurately diagnose conditions such as deep cavities, cysts, and periapical changes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17032,
                "name" => json_encode([
                    "pl" => "Ocena wyników badań, diagnozowanie problemów stomatologicznych i ustalanie odpowiedniego planu leczenia z pacjentem.",
                    "en" => "Evaluating test results, diagnosing dental problems, and determining an appropriate treatment plan with the patient."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17033,
                "name" => json_encode([
                    "pl" => "Opracowanie ubytku próchnicowego, usunięcie zainfekowanych tkanek i założenie wypełnień kompozytowych lub amalgamatowych.",
                    "en" => "Treating dental cavities, removing infected tissue, and placing composite or amalgam fillings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17034,
                "name" => json_encode([
                    "pl" => "Leczenie zębów z chorobami miazgi poprzez oczyszczanie, opracowywanie i wypełnianie kanałów korzeniowych.",
                    "en" => "Treating teeth with pulp diseases through cleaning, shaping, and filling root canals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17035,
                "name" => json_encode([
                    "pl" => "Stosowanie preparatów zmniejszających nadwrażliwość zębów lub zabezpieczanie miejsc odsłoniętych szyjek zębowych.",
                    "en" => "Applying desensitizing agents or protecting exposed tooth necks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17036,
                "name" => json_encode([
                    "pl" => "Leczenie zapaleń i martwicy miazgi, zakładanie opatrunków leczniczych, obserwacja stanu zęba po leczeniu.",
                    "en" => "Treating pulp inflammation and necrosis, applying medicinal dressings, and monitoring the tooth's condition after treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17037,
                "name" => json_encode([
                    "pl" => "Usuwanie kamienia nazębnego, przeprowadzanie skalingu i polerowania zębów w celu eliminacji osadu i bakterii.",
                    "en" => "Removing dental tartar, performing scaling, and polishing teeth to eliminate plaque and bacteria."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17038,
                "name" => json_encode([
                    "pl" => "Usuwanie kamienia poddziąsłowego, oczyszczanie kieszonek przyzębnych oraz zmniejszenie stanu zapalnego dziąseł.",
                    "en" => "Removing subgingival tartar, cleaning periodontal pockets, and reducing gum inflammation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17039,
                "name" => json_encode([
                    "pl" => "Edukacja pacjentów w zakresie prawidłowego mycia zębów, stosowania nici dentystycznych, płukanek antybakteryjnych oraz zaleceń dotyczących profilaktyki chorób przyzębia.",
                    "en" => "Educating patients on proper tooth brushing, using dental floss, antibacterial rinses, and periodontal disease prevention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17040,
                "name" => json_encode([
                    "pl" => "Zakładanie estetycznych wypełnień oraz wkładów koronowo-korzeniowych w celu odbudowy struktury zęba.",
                    "en" => "Placing aesthetic fillings and post-and-core buildups to restore tooth structure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17041,
                "name" => json_encode([
                    "pl" => "Opracowanie zębów, pobranie wycisków oraz wykonanie protez częściowych, pełnych lub koron protetycznych.",
                    "en" => "Preparing teeth, taking impressions, and fabricating partial, full dentures, or prosthetic crowns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17042,
                "name" => json_encode([
                    "pl" => "Współpraca z technikami dentystycznymi w zakresie projektowania i tworzenia protez, koron, mostów i innych uzupełnień protetycznych.",
                    "en" => "Collaborating with dental technicians in designing and creating dentures, crowns, bridges, and other prosthetic restorations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17043,
                "name" => json_encode([
                    "pl" => "Usuwanie zębów mlecznych i stałych, w tym również trudnych ekstrakcji zębów zatrzymanych lub zniszczonych przez próchnicę.",
                    "en" => "Extracting primary and permanent teeth, including difficult extractions of impacted or decayed teeth."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17044,
                "name" => json_encode([
                    "pl" => "Leczenie ropni i stanów zapalnych poprzez nacięcie oraz usuwanie treści ropnej.",
                    "en" => "Treating abscesses and inflammations through incision and drainage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17045,
                "name" => json_encode([
                    "pl" => "Ocena stanu zdrowia pacjenta przed zabiegiem, znieczulenie miejscowe oraz stosowanie środków przeciwbólowych.",
                    "en" => "Assessing the patient's health before procedures, providing local anesthesia, and administering pain relief."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17046,
                "name" => json_encode([
                    "pl" => "Leczenie stanów zapalnych, krwawienia, obrzęków oraz monitorowanie procesu gojenia po ekstrakcji zębów.",
                    "en" => "Treating inflammations, bleeding, swelling, and monitoring the healing process after tooth extractions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17047,
                "name" => json_encode([
                    "pl" => "Stosowanie preparatów z fluorem w celu wzmocnienia szkliwa zębów i ochrony przed próchnicą.",
                    "en" => "Applying fluoride treatments to strengthen tooth enamel and prevent cavities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17048,
                "name" => json_encode([
                    "pl" => "Zabezpieczanie powierzchni żujących zębów trzonowych i przedtrzonowych przed próchnicą poprzez nałożenie specjalnych laków.",
                    "en" => "Sealing the chewing surfaces of molars and premolars to protect against cavities using dental sealants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17049,
                "name" => json_encode([
                    "pl" => "Organizowanie wizyt kontrolnych i ocena stanu zdrowia jamy ustnej, identyfikacja problemów zdrowotnych w początkowym stadium.",
                    "en" => "Scheduling check-ups and evaluating oral health, identifying early-stage health issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17050,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji na temat prawidłowej higieny jamy ustnej, diety zapobiegającej próchnicy oraz stylu życia korzystnego dla zdrowia zębów.",
                    "en" => "Providing information on proper oral hygiene, cavity-preventing diets, and a lifestyle beneficial for dental health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17051,
                "name" => json_encode([
                    "pl" => "Nauczanie pacjentów technik szczotkowania, używania nici dentystycznych, płukanek oraz higieny języka.",
                    "en" => "Teaching patients brushing techniques, flossing, using mouth rinses, and tongue hygiene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17052,
                "name" => json_encode([
                    "pl" => "Przekazywanie pacjentom wiedzy o wpływie diety na zdrowie zębów i dziąseł, doradzanie w zakresie ograniczania spożycia cukrów.",
                    "en" => "Educating patients about the impact of diet on dental and gum health and advising on reducing sugar intake."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17053,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów o czynnikach ryzyka i objawach chorób przyzębia, a także o metodach ich zapobiegania.",
                    "en" => "Informing patients about risk factors and symptoms of periodontal diseases, as well as prevention methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17054,
                "name" => json_encode([
                    "pl" => "Konsultacje z pacjentami na temat możliwości poprawy estetyki zębów, wybielania, nakładek prostujących oraz dostępnych metod korekcji estetycznej.",
                    "en" => "Consulting with patients on improving dental aesthetics, whitening, aligners, and other available cosmetic corrections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17055,
                "name" => json_encode([
                    "pl" => "Współpraca z periodontologami, chirurgami szczękowo-twarzowymi, ortodontami, protetykami oraz lekarzami ogólnymi w przypadkach wymagających interdyscyplinarnej opieki.",
                    "en" => "Collaborating with periodontists, oral surgeons, orthodontists, prosthodontists, and general practitioners for interdisciplinary care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17056,
                "name" => json_encode([
                    "pl" => "W przypadku złożonych problemów zdrowotnych, takich jak wady zgryzu, nowotwory jamy ustnej lub skomplikowane choroby przyzębia, kierowanie pacjentów do odpowiednich specjalistów.",
                    "en" => "Referring patients to appropriate specialists for complex health issues such as malocclusion, oral cancers, or advanced periodontal diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17057,
                "name" => json_encode([
                    "pl" => "Planowanie leczenia i omawianie przypadków z innymi członkami zespołu, aby zapewnić kompleksową i zintegrowaną opiekę stomatologiczną.",
                    "en" => "Treatment planning and case discussions with team members to provide comprehensive and integrated dental care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17058,
                "name" => json_encode([
                    "pl" => "Dezynfekcja i sterylizacja narzędzi stomatologicznych, zapewnienie higieny w gabinecie, stosowanie środków ochrony osobistej.",
                    "en" => "Disinfecting and sterilizing dental tools, maintaining hygiene in the clinic, and using personal protective equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17059,
                "name" => json_encode([
                    "pl" => "Przygotowanie pacjenta do znieczulenia, stosowanie odpowiednich technik podawania znieczulenia oraz monitorowanie reakcji pacjenta.",
                    "en" => "Preparing the patient for anesthesia, using appropriate administration techniques, and monitoring the patient's response."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17060,
                "name" => json_encode([
                    "pl" => "Utrzymywanie przyjaznego środowiska, odpowiednie przygotowanie pacjenta do zabiegu, dbanie o komfort i minimalizowanie stresu.",
                    "en" => "Maintaining a friendly environment, properly preparing patients for procedures, ensuring comfort, and minimizing stress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17061,
                "name" => json_encode([
                    "pl" => "Umiejętność udzielania pierwszej pomocy w nagłych sytuacjach, takich jak reakcje alergiczne, omdlenia lub ataki paniki.",
                    "en" => "Ability to provide first aid in emergencies such as allergic reactions, fainting, or panic attacks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17062,
                "name" => json_encode([
                    "pl" => "Dokumentowanie informacji o stanie zdrowia, wynikach badań, procedurach przeprowadzonych u pacjenta oraz zaleceniach.",
                    "en" => "Documenting information on health status, test results, procedures performed, and recommendations for patients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17063,
                "name" => json_encode([
                    "pl" => "Sporządzanie planów leczenia, zapisów przebiegu leczenia, wyników badań radiologicznych oraz zaleceń dotyczących dalszej opieki.",
                    "en" => "Preparing treatment plans, recording treatment progress, radiological results, and further care recommendations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17064,
                "name" => json_encode([
                    "pl" => "Zapewnienie poufności dokumentacji medycznej pacjentów, zgodność z zasadami ochrony danych osobowych.",
                    "en" => "Ensuring the confidentiality of patient medical records in compliance with data protection regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17065,
                "name" => json_encode([
                    "pl" => "Prowadzenie zapisów dotyczących efektów leczenia, monitorowanie wyników, archiwizacja wyników badań.",
                    "en" => "Maintaining records of treatment outcomes, monitoring results, and archiving test results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_DENTYSTA_SPECJALISTA_CHIRURGII_STOMATOLOGICZNEJ = [

            [
                "id" => 17066,
                "name" => json_encode([
                    "pl" => "Usuwanie zębów zatrzymanych, zębów mądrości, zębów z dużymi zmianami okołowierzchołkowymi.",
                    "en" => "Removing impacted teeth, wisdom teeth, and teeth with significant periapical changes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17067,
                "name" => json_encode([
                    "pl" => "Nacinanie ropni, usuwanie torbieli, resekcja wierzchołków korzeni.",
                    "en" => "Incising abscesses, removing cysts, and performing root apex resections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17068,
                "name" => json_encode([
                    "pl" => "Przygotowanie kości do zabiegów implantologicznych oraz odbudowy zębów.",
                    "en" => "Preparing bone for implant procedures and tooth reconstruction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17069,
                "name" => json_encode([
                    "pl" => "Usuwanie zmian chorobowych, biopsje tkanek miękkich jamy ustnej.",
                    "en" => "Removing pathological lesions and performing biopsies of soft tissues in the oral cavity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17070,
                "name" => json_encode([
                    "pl" => "Planowanie zabiegów i ocena stanu kości oraz przygotowanie pacjentów do procedur implantacyjnych.",
                    "en" => "Planning procedures, assessing bone condition, and preparing patients for implant procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_DENTYSTA_SPECJALISTA_CHIRURGII_SZCZEKOWO_TWARZOWEJ = [

            [
                "id" => 17071,
                "name" => json_encode([
                    "pl" => "Leczenie złamań szczęki, żuchwy, złożonych urazów twarzoczaszki, stabilizacja kości.",
                    "en" => "Treatment of jaw fractures, mandibular fractures, complex craniofacial injuries, and bone stabilization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17072,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie biopsji, usuwanie guzów, leczenie stanów przedrakowych, rekonstrukcja po leczeniu onkologicznym.",
                    "en" => "Performing biopsies, tumor removal, treatment of precancerous conditions, and reconstruction after oncological treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17073,
                "name" => json_encode([
                    "pl" => "Leczenie pacjentów z rozszczepem wargi i podniebienia, deformacji kostnych, wad zgryzu oraz zespołów genetycznych.",
                    "en" => "Treating patients with cleft lip and palate, bone deformities, malocclusion, and genetic syndromes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17074,
                "name" => json_encode([
                    "pl" => "Korekcja deformacji szczęk i poprawa estetyki oraz funkcji zgryzu poprzez zmiany strukturalne kości szczęki i żuchwy.",
                    "en" => "Correcting jaw deformities and improving aesthetics and bite function through structural changes to the jaw and mandible."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17075,
                "name" => json_encode([
                    "pl" => "Współpraca z ortodontami, onkologami, neurologami i innymi specjalistami przy leczeniu kompleksowych problemów szczękowo-twarzowych.",
                    "en" => "Collaborating with orthodontists, oncologists, neurologists, and other specialists in treating complex craniofacial problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_DENTYSTA_SPECJALISTA_EPIDEMIOLOGII = [

            [
                "id" => 17076,
                "name" => json_encode([
                    "pl" => "Analiza danych dotyczących występowania próchnicy, chorób przyzębia, nowotworów jamy ustnej.",
                    "en" => "Analyzing data on the prevalence of caries, periodontal diseases, and oral cancers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17077,
                "name" => json_encode([
                    "pl" => "Tworzenie i wdrażanie programów zdrowia jamy ustnej na poziomie społecznym, np. programy fluoryzacji.",
                    "en" => "Developing and implementing oral health programs at the community level, such as fluoridation programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17078,
                "name" => json_encode([
                    "pl" => "Prowadzenie badań nad stanem zdrowia jamy ustnej różnych grup społecznych, ocena ryzyka i czynników determinujących występowanie chorób.",
                    "en" => "Conducting research on the oral health of various social groups, assessing risks and determinants of disease occurrence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17079,
                "name" => json_encode([
                    "pl" => "Praca z instytucjami rządowymi i pozarządowymi, wdrażanie kampanii edukacyjnych i profilaktycznych.",
                    "en" => "Working with governmental and non-governmental organizations to implement educational and preventive campaigns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17080,
                "name" => json_encode([
                    "pl" => "Konsultowanie wytycznych i polityki zdrowotnej w zakresie zdrowia jamy ustnej, współpraca z placówkami opieki zdrowotnej.",
                    "en" => "Consulting on guidelines and health policies related to oral health and collaborating with healthcare facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_DENTYSTA_SPECJALISTA_ORTODONCJI = [

            [
                "id" => 17081,
                "name" => json_encode([
                    "pl" => "Ocena kształtu i układu zębów, planowanie leczenia wad zgryzu, np. przodozgryzu, tyłozgryzu, zgryzu krzyżowego.",
                    "en" => "Assessing the shape and alignment of teeth, planning treatment for malocclusions such as overbite, underbite, and crossbite."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17082,
                "name" => json_encode([
                    "pl" => "Wykonywanie wycisków, dostosowanie aparatów stałych i ruchomych, monitorowanie efektów leczenia.",
                    "en" => "Taking impressions, adjusting fixed and removable braces, and monitoring treatment outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17083,
                "name" => json_encode([
                    "pl" => "Prowadzenie terapii ortodontycznej u pacjentów w różnym wieku, kontrola postępów.",
                    "en" => "Providing orthodontic treatment for patients of all ages and monitoring progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17084,
                "name" => json_encode([
                    "pl" => "Korekta ustawienia zębów przed zabiegami protetycznymi lub chirurgicznymi, współpraca z protetykami i chirurgami szczękowymi.",
                    "en" => "Correcting tooth alignment before prosthetic or surgical procedures and collaborating with prosthodontists and maxillofacial surgeons."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17085,
                "name" => json_encode([
                    "pl" => "Instruktaż dotyczący higieny zębów przy noszeniu aparatów, kontrola stanu dziąseł i przyzębia.",
                    "en" => "Providing guidance on oral hygiene with braces and monitoring the condition of gums and periodontium."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_DENTYSTA_SPECJALISTA_PERIODONTOLOGII = [

            [
                "id" => 17086,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i leczenie zapalenia dziąseł, chorób przyzębia, prowadzenie zabiegów kiretażu, skalingu i root planingu.",
                    "en" => "Diagnosing and treating gingivitis and periodontal diseases, performing curettage, scaling, and root planing procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17087,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie zabiegów na dziąsłach i tkankach podtrzymujących zęby, np. przeszczepy dziąsła, resekcje kieszonek przyzębia.",
                    "en" => "Performing procedures on gums and supporting tissues, such as gum grafts and pocket resections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17088,
                "name" => json_encode([
                    "pl" => "Edukowanie pacjentów o higienie przyzębia, zasadach profilaktyki zapalenia dziąseł, zapobiegania recesji dziąseł.",
                    "en" => "Educating patients on periodontal hygiene, prevention of gingivitis, and gum recession."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17089,
                "name" => json_encode([
                    "pl" => "Odbudowa tkanek przyzębia w przypadkach zaawansowanej choroby, przeszczepy dziąseł i innych tkanek miękkich.",
                    "en" => "Reconstructing periodontal tissues in advanced disease cases, including gum grafts and other soft tissue transplants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17090,
                "name" => json_encode([
                    "pl" => "Konsultacje z protetykami i implantologami w przypadku leczenia pacjentów wymagających odbudowy kości lub wszczepienia implantów.",
                    "en" => "Consulting with prosthodontists and implantologists for treating patients requiring bone reconstruction or implant placement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_DENTYSTA_SPECJALISTA_PROTETYKI_STOMATOLOGICZNEJ = [

            [
                "id" => 17091,
                "name" => json_encode([
                    "pl" => "Wykonywanie protez częściowych, pełnych, koron, mostów i implantów w celu przywrócenia funkcji i estetyki uzębienia.",
                    "en" => "Creating partial and full dentures, crowns, bridges, and implants to restore dental function and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17092,
                "name" => json_encode([
                    "pl" => "Ocena stanu uzębienia, ustalanie odpowiednich metod protetycznych, wykonywanie wycisków.",
                    "en" => "Assessing dental condition, determining appropriate prosthetic methods, and taking impressions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17093,
                "name" => json_encode([
                    "pl" => "Konsultacje z technikami dentystycznymi w zakresie projektowania i wykonania protez, koron i mostów.",
                    "en" => "Consulting with dental technicians on designing and fabricating dentures, crowns, and bridges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17094,
                "name" => json_encode([
                    "pl" => "Przywracanie funkcji zgryzu poprzez dostosowanie i naprawę protez oraz innych uzupełnień.",
                    "en" => "Restoring bite function by adjusting and repairing dentures and other prosthetic appliances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17095,
                "name" => json_encode([
                    "pl" => "Instrukcje dotyczące higieny protez, zasady przechowywania oraz pielęgnacji.",
                    "en" => "Providing instructions on denture hygiene, storage, and care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_DENTYSTA_SPECJALISTA_STOMATOLOGII_DZIECIECEJ = [

            [
                "id" => 17096,
                "name" => json_encode([
                    "pl" => "Leczenie próchnicy, chorób przyzębia, infekcji oraz urazów zębów mlecznych i stałych.",
                    "en" => "Treating caries, periodontal diseases, infections, and injuries to primary and permanent teeth."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17097,
                "name" => json_encode([
                    "pl" => "Dostosowanie opieki dentystycznej do dzieci z przewlekłymi chorobami oraz specyficznymi potrzebami.",
                    "en" => "Adapting dental care for children with chronic illnesses and specific needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17098,
                "name" => json_encode([
                    "pl" => "Lakowanie zębów, fluoryzacja, nauka higieny jamy ustnej, doradztwo dietetyczne w zakresie zdrowia jamy ustnej.",
                    "en" => "Applying sealants, fluoride treatments, teaching oral hygiene, and providing dietary advice for oral health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17099,
                "name" => json_encode([
                    "pl" => "Wykrywanie wad zgryzu u dzieci i podejmowanie odpowiednich działań profilaktycznych lub wstępnego leczenia.",
                    "en" => "Identifying malocclusions in children and initiating preventive or preliminary treatments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17100,
                "name" => json_encode([
                    "pl" => "Nauka zasad higieny, kontrola stanu jamy ustnej, prowadzenie działań edukacyjnych na temat profilaktyki próchnicy.",
                    "en" => "Teaching hygiene principles, monitoring oral health, and conducting educational activities on caries prevention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_DENTYSTA_SPECJALISTA_STOMATOLOGII_ZACHOWAWCZEJ_Z_ENDODONCJA = [

            [
                "id" => 17101,
                "name" => json_encode([
                    "pl" => "Opracowywanie i wypełnianie ubytków, zabezpieczanie pęknięć i złamań szkliwa.",
                    "en" => "Preparing and filling cavities, and securing cracks and enamel fractures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17102,
                "name" => json_encode([
                    "pl" => "Leczenie stanów zapalnych miazgi, opracowywanie kanałów korzeniowych i ich wypełnianie.",
                    "en" => "Treating pulp inflammation, preparing root canals, and filling them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17103,
                "name" => json_encode([
                    "pl" => "Wykonywanie badań diagnostycznych, ocena stanu miazgi i tkanek przyzębia.",
                    "en" => "Performing diagnostic tests and assessing the condition of the pulp and periodontal tissues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17104,
                "name" => json_encode([
                    "pl" => "Odbudowa zębów po leczeniu kanałowym, stosowanie wkładów koronowo-korzeniowych i odbudów kompozytowych.",
                    "en" => "Reconstructing teeth after root canal treatment using post-and-core and composite restorations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17105,
                "name" => json_encode([
                    "pl" => "Edukacja pacjentów na temat higieny jamy ustnej, regularnych wizyt kontrolnych oraz profilaktyki próchnicy.",
                    "en" => "Educating patients about oral hygiene, regular check-ups, and caries prevention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $LEKARZ_DENTYSTA_SPECJALISTA_ZDROWIA_PUBLICZNEGO = [

            [
                "id" => 17106,
                "name" => json_encode([
                    "pl" => "Organizowanie i wdrażanie kampanii zdrowotnych, edukowanie społeczeństwa w zakresie profilaktyki.",
                    "en" => "Organizing and implementing health campaigns and educating the public on preventive measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17107,
                "name" => json_encode([
                    "pl" => "Realizacja programów, takich jak fluoryzacja w szkołach, profilaktyka wad zgryzu, przeciwdziałanie próchnicy.",
                    "en" => "Implementing programs such as school fluoridation, malocclusion prevention, and caries prevention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17108,
                "name" => json_encode([
                    "pl" => "Badanie rozpowszechnienia chorób jamy ustnej, ocena stanu zdrowia różnych grup społecznych.",
                    "en" => "Studying the prevalence of oral diseases and assessing the health of various social groups."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17109,
                "name" => json_encode([
                    "pl" => "Konsultacje z organizacjami zdrowotnymi, doradztwo w zakresie zdrowia jamy ustnej i wprowadzenie polityki profilaktycznej.",
                    "en" => "Consulting with health organizations, advising on oral health, and implementing preventive policies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17110,
                "name" => json_encode([
                    "pl" => "Tworzenie standardów i wytycznych związanych z opieką stomatologiczną na poziomie krajowym lub regionalnym.",
                    "en" => "Developing standards and guidelines for dental care at the national or regional level."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_DENTYSTYCZNY = [

            [
                "id" => 17111,
                "name" => json_encode([
                    "pl" => "Tworzenie protez częściowych i pełnych, które pozwalają na odbudowę uzębienia pacjenta.",
                    "en" => "Creating partial and full dentures to restore the patient's dentition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17112,
                "name" => json_encode([
                    "pl" => "Wykonywanie modeli na podstawie wycisków pobranych przez lekarza, które posłużą do stworzenia dopasowanych uzupełnień.",
                    "en" => "Creating models based on impressions taken by the dentist to fabricate well-fitted restorations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17113,
                "name" => json_encode([
                    "pl" => "Projektowanie protez zgodnie z wymiarami anatomicznymi i estetycznymi oczekiwaniami pacjenta, aby były wygodne i funkcjonalne.",
                    "en" => "Designing dentures to match anatomical dimensions and aesthetic expectations, ensuring comfort and functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17114,
                "name" => json_encode([
                    "pl" => "Wprowadzanie poprawek w protezach, dostosowywanie ich do zmieniających się potrzeb pacjenta oraz naprawa uszkodzonych uzupełnień.",
                    "en" => "Adjusting dentures to meet changing patient needs and repairing damaged restorations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17115,
                "name" => json_encode([
                    "pl" => "Tworzenie koron oraz mostów, które będą funkcjonalne i estetyczne, zgodnie z oczekiwaniami lekarza i pacjenta.",
                    "en" => "Fabricating crowns and bridges that are functional and aesthetic, meeting both dentist and patient expectations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17116,
                "name" => json_encode([
                    "pl" => "Współpraca z lekarzami przy tworzeniu uzupełnień protetycznych na implantach, takich jak korony, mosty czy protezy na implantach.",
                    "en" => "Collaborating with dentists to create prosthetic restorations on implants, such as crowns, bridges, or implant-supported dentures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17117,
                "name" => json_encode([
                    "pl" => "Dbałość o to, aby wykonane korony i mosty były dokładnie dopasowane do naturalnych zębów oraz struktury szczęki pacjenta.",
                    "en" => "Ensuring crowns and bridges are precisely fitted to the patient's natural teeth and jaw structure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17118,
                "name" => json_encode([
                    "pl" => "Wykonywanie aparatów ruchomych na podstawie wycisków oraz zaleceń ortodonty, projektowanie aparatu w sposób, który umożliwi korektę wad zgryzu.",
                    "en" => "Fabricating removable appliances based on impressions and orthodontist recommendations to correct malocclusions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17119,
                "name" => json_encode([
                    "pl" => "Przygotowywanie retainerów, które utrzymują pozycję zębów po leczeniu ortodontycznym, oraz szyn na zęby służących do ochrony przed zgrzytaniem.",
                    "en" => "Creating retainers to maintain tooth alignment after orthodontic treatment and bite guards to prevent teeth grinding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17120,
                "name" => json_encode([
                    "pl" => "Dokonywanie niezbędnych napraw lub korekt w aparatach ortodontycznych, dostosowywanie ich do zmieniających się potrzeb pacjenta.",
                    "en" => "Performing necessary repairs or adjustments to orthodontic appliances to meet changing patient needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17121,
                "name" => json_encode([
                    "pl" => "Przygotowywanie indywidualnie dopasowanych nakładek wybielających, które są wykorzystywane przez pacjentów w zabiegach wybielania zębów.",
                    "en" => "Creating custom-fitted whitening trays for patients undergoing teeth whitening treatments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17122,
                "name" => json_encode([
                    "pl" => "Produkcja szyn dla pacjentów z bruksizmem (zgrzytaniem zębów), które pomagają chronić zęby przed ścieraniem.",
                    "en" => "Producing bite splints for patients with bruxism to protect teeth from wear."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17123,
                "name" => json_encode([
                    "pl" => "Wykonywanie osłon na zęby dla sportowców, które chronią zęby podczas aktywności fizycznej.",
                    "en" => "Fabricating mouthguards for athletes to protect teeth during physical activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17124,
                "name" => json_encode([
                    "pl" => "Praca z różnymi materiałami, takimi jak metal, porcelana, akryl, żywica, w celu wykonania konstrukcji protetycznych.",
                    "en" => "Working with various materials, including metal, porcelain, acrylic, and resin, to create prosthetic structures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17125,
                "name" => json_encode([
                    "pl" => "Praca z oprogramowaniem CAD/CAM do projektowania i wytwarzania protez, koron oraz aparatów ortodontycznych.",
                    "en" => "Using CAD/CAM software to design and produce dentures, crowns, and orthodontic appliances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17126,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie drukarek 3D do tworzenia precyzyjnych modeli oraz uzupełnień protetycznych, które są bardziej dopasowane do indywidualnych potrzeb pacjentów.",
                    "en" => "Utilizing 3D printers to create precise models and prosthetic restorations tailored to individual patient needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17127,
                "name" => json_encode([
                    "pl" => "Noszenie masek, rękawiczek, okularów ochronnych oraz stosowanie wentylacji przy pracy z materiałami chemicznymi i pyłami.",
                    "en" => "Wearing masks, gloves, protective glasses, and ensuring ventilation while working with chemicals and dust."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17128,
                "name" => json_encode([
                    "pl" => "Obsługa frezarek i narzędzi szlifierskich do dokładnego wykańczania protez i innych elementów protetycznych.",
                    "en" => "Operating milling machines and grinding tools for precise finishing of dentures and other prosthetic elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17129,
                "name" => json_encode([
                    "pl" => "Dopasowanie koloru i kształtu koron, protez i mostów, aby były estetycznie zgodne z naturalnymi zębami pacjenta.",
                    "en" => "Matching the color and shape of crowns, dentures, and bridges to align aesthetically with the patient's natural teeth."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17130,
                "name" => json_encode([
                    "pl" => "Finalne wykończenie uzupełnień, polerowanie powierzchni, aby zapewnić komfort użytkowania oraz estetyczny wygląd.",
                    "en" => "Finalizing restorations by polishing surfaces to ensure comfort and an aesthetically pleasing appearance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17131,
                "name" => json_encode([
                    "pl" => "Dokładne sprawdzanie każdego uzupełnienia przed przekazaniem go lekarzowi, aby mieć pewność, że spełnia wszystkie wymagania.",
                    "en" => "Thoroughly checking each restoration before delivering it to the dentist to ensure it meets all requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17132,
                "name" => json_encode([
                    "pl" => "Ścisła współpraca z dentystami w celu omówienia potrzeb pacjenta, korekt i możliwych rozwiązań dla każdego przypadku.",
                    "en" => "Collaborating closely with dentists to discuss patient needs, adjustments, and potential solutions for each case."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17133,
                "name" => json_encode([
                    "pl" => "Omawianie z lekarzami detali dotyczących protez, koron, mostów oraz innych uzupełnień, aby były zgodne z oczekiwaniami pacjenta.",
                    "en" => "Discussing details of dentures, crowns, bridges, and other restorations with dentists to meet patient expectations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17134,
                "name" => json_encode([
                    "pl" => "Wykonywanie tymczasowych uzupełnień lub prototypów, które mogą być przymierzone przez pacjenta przed finalnym montażem.",
                    "en" => "Creating temporary restorations or prototypes for patient trials before final placement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17135,
                "name" => json_encode([
                    "pl" => "Sporządzanie szczegółowych zapisów dotyczących każdego uzupełnienia, materiałów oraz wytycznych lekarza.",
                    "en" => "Maintaining detailed records of each restoration, materials used, and dentist instructions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17136,
                "name" => json_encode([
                    "pl" => "Dokumentowanie historii napraw, korekt oraz przymiarek uzupełnień dla poszczególnych pacjentów.",
                    "en" => "Documenting the history of repairs, adjustments, and trials of restorations for individual patients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17137,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie sterylizacji narzędzi, takich jak frezy, noże, polerki, aby zapewnić higienę pracy.",
                    "en" => "Sterilizing tools such as burs, knives, and polishers to ensure hygienic working conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17138,
                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów higieny, dbanie o porządek w laboratorium, regularne czyszczenie sprzętu i stanowisk pracy.",
                    "en" => "Adhering to hygiene standards, maintaining order in the lab, and regularly cleaning equipment and workstations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ASYSTENCI_DENTYSTYCZNI = [

            [
                "id" => 17139,
                "name" => json_encode([
                    "pl" => "Przygotowywanie gabinetu do zabiegu, podawanie narzędzi i materiałów podczas procedur, dbanie o komfort pacjenta.",
                    "en" => "Preparing the dental office for procedures, handing instruments and materials during procedures, and ensuring patient comfort."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17140,
                "name" => json_encode([
                    "pl" => "Regularne czyszczenie i sterylizacja narzędzi dentystycznych oraz sprzętu wykorzystywanego w gabinecie.",
                    "en" => "Regularly cleaning and sterilizing dental instruments and equipment used in the office."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17141,
                "name" => json_encode([
                    "pl" => "Wywiad wstępny, informowanie o procedurach, zakładanie fartuchów ochronnych.",
                    "en" => "Conducting initial interviews, informing patients about procedures, and providing protective gowns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17142,
                "name" => json_encode([
                    "pl" => "Prowadzenie kart pacjentów, zapisywanie przebiegu wizyt, sporządzanie raportów.",
                    "en" => "Maintaining patient records, documenting the course of visits, and preparing reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17143,
                "name" => json_encode([
                    "pl" => "Monitorowanie zapasów materiałów dentystycznych, zamawianie leków i materiałów jednorazowego użytku.",
                    "en" => "Monitoring dental material stocks, ordering medications and disposable materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17144,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów o zasadach higieny jamy ustnej, instruktaż dotyczący opieki pozabiegowej.",
                    "en" => "Informing patients about oral hygiene practices and providing post-procedure care instructions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POMOC_DENTYSTYCZNA = [

            [
                "id" => 17145,
                "name" => json_encode([
                    "pl" => "Pomoc lekarzowi i asystentowi w przygotowaniu stanowiska pracy, organizowanie narzędzi i materiałów.",
                    "en" => "Assisting the dentist and assistant in preparing the workspace, organizing instruments and materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17146,
                "name" => json_encode([
                    "pl" => "Utrzymanie porządku w gabinecie, regularna dezynfekcja powierzchni i stanowisk po każdej wizycie pacjenta.",
                    "en" => "Maintaining cleanliness in the office, regularly disinfecting surfaces and workstations after each patient visit."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17147,
                "name" => json_encode([
                    "pl" => "Pomoc w sterylizacji narzędzi i dbanie o ich odpowiednie przechowywanie.",
                    "en" => "Assisting in sterilizing instruments and ensuring their proper storage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17148,
                "name" => json_encode([
                    "pl" => "Mieszanie materiałów do wypełnień, przygotowanie środków do znieczulenia oraz innych niezbędnych substancji.",
                    "en" => "Mixing filling materials, preparing anesthetics, and other necessary substances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17149,
                "name" => json_encode([
                    "pl" => "Pomoc pacjentom przed i po zabiegach, wyjaśnienie zaleceń i przekazanie instrukcji opieki po zabiegowej.",
                    "en" => "Assisting patients before and after procedures, explaining recommendations, and providing post-procedure care instructions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17150,
                "name" => json_encode([
                    "pl" => "Monitorowanie zużycia materiałów, informowanie asystenta o brakach i potrzebach w zakresie wyposażenia gabinetu.",
                    "en" => "Monitoring material usage and informing the assistant about shortages and needs for office supplies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_TECHNIKI_DENTYSTYCZNEJ = [

            [
                "id" => 17151,
                "name" => json_encode([
                    "pl" => "Śledzenie nowoczesnych technologii i narzędzi w dziedzinie techniki dentystycznej, wdrażanie innowacyjnych rozwiązań.",
                    "en" => "Tracking modern technologies and tools in dental technology and implementing innovative solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17152,
                "name" => json_encode([
                    "pl" => "Współpraca z technikami dentystycznymi i kontrolowanie jakości wykonanych uzupełnień protetycznych.",
                    "en" => "Collaborating with dental technicians and ensuring the quality of prosthetic restorations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17153,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o nowych materiałach i technikach dentystycznych, pomoc w wyborze odpowiednich narzędzi i technologii.",
                    "en" => "Sharing information about new dental materials and techniques, assisting in selecting appropriate tools and technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17154,
                "name" => json_encode([
                    "pl" => "Przygotowywanie szkoleń z zakresu techniki dentystycznej dla techników i dentystów, aktualizacja wiedzy zespołu medycznego.",
                    "en" => "Organizing training sessions on dental technology for technicians and dentists, and updating the medical team's knowledge."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17155,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wykonanych protez, koron i mostów, monitorowanie efektów stosowanych technologii i technik.",
                    "en" => "Quality control of completed dentures, crowns, and bridges, monitoring the effects of applied technologies and techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17156,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów z materiałami, maszynami i urządzeniami w laboratorium dentystycznym.",
                    "en" => "Troubleshooting issues with materials, machines, and equipment in the dental laboratory."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FARMACEUCI_BEZ_SPECJALIZACJI_LUB_W_TRAKCIE_SPECJALIZACJI = [

            [
                "id" => 17157,
                "name" => json_encode([
                    "pl" => "Sprzedaż leków na receptę i bez recepty, doradzanie pacjentom w zakresie dawkowania i stosowania.",
                    "en" => "Dispensing prescription and over-the-counter medications, advising patients on dosage and usage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17158,
                "name" => json_encode([
                    "pl" => "Weryfikacja recept pod kątem poprawności, sprawdzanie dawkowania oraz wydawanie odpowiednich leków zgodnie z przepisami.",
                    "en" => "Verifying prescriptions for accuracy, checking dosages, and dispensing appropriate medications in compliance with regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17159,
                "name" => json_encode([
                    "pl" => "Wytwarzanie leków na specjalne zamówienie pacjenta, przygotowywanie maści, syropów oraz innych preparatów zgodnie z recepturą.",
                    "en" => "Compounding medications per patient requests, preparing ointments, syrups, and other formulations according to recipes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17160,
                "name" => json_encode([
                    "pl" => "Informowanie o działaniach niepożądanych leków, interakcjach oraz zasadach prawidłowego stosowania leków.",
                    "en" => "Providing information about medication side effects, interactions, and guidelines for proper use."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17161,
                "name" => json_encode([
                    "pl" => "Kontrola dat ważności leków, zamawianie produktów farmaceutycznych i suplementów diety.",
                    "en" => "Checking medication expiration dates and ordering pharmaceutical products and dietary supplements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17162,
                "name" => json_encode([
                    "pl" => "Udzielanie informacji pacjentom na temat profilaktyki zdrowotnej, higieny, zdrowego stylu życia i stosowania suplementów diety.",
                    "en" => "Providing patients with information on health prevention, hygiene, healthy lifestyle choices, and dietary supplements usage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNICY_FARMACEUTYCZNI = [

            [
                "id" => 17163,
                "name" => json_encode([
                    "pl" => "Pomoc w realizacji recept, wydawanie leków, przygotowywanie stanowiska pracy oraz obsługa pacjentów.",
                    "en" => "Assisting in prescription processing, dispensing medications, preparing the workspace, and attending to patients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17164,
                "name" => json_encode([
                    "pl" => "Sporządzanie leków według receptur, przygotowywanie maści, roztworów i innych leków recepturowych pod nadzorem farmaceuty.",
                    "en" => "Compounding medications according to recipes, preparing ointments, solutions, and other prescription drugs under pharmacist supervision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17165,
                "name" => json_encode([
                    "pl" => "Wydawanie leków bez recepty, doradzanie w zakresie stosowania suplementów diety i podstawowych produktów leczniczych.",
                    "en" => "Dispensing over-the-counter medications and advising on the use of dietary supplements and basic medicinal products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17166,
                "name" => json_encode([
                    "pl" => "Sprawdzanie stanów magazynowych, przyjmowanie dostaw, kontrola terminów przydatności oraz rozmieszczenie produktów na półkach.",
                    "en" => "Checking inventory levels, receiving deliveries, monitoring expiration dates, and organizing products on shelves."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17167,
                "name" => json_encode([
                    "pl" => "Sprzątanie i dezynfekcja stanowiska pracy, zapewnienie estetyki i czystości w aptece.",
                    "en" => "Cleaning and disinfecting the workspace, ensuring tidiness and cleanliness in the pharmacy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17168,
                "name" => json_encode([
                    "pl" => "Wsparcie w prowadzeniu dokumentacji aptecznej, rejestrowanie przyjętych dostaw oraz wydanych leków.",
                    "en" => "Assisting in maintaining pharmacy records, logging received supplies, and documenting dispensed medications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FARMACEUCI_SPECJALISCI = [

            [
                "id" => 17169,
                "name" => json_encode([
                    "pl" => "Kompleksowa opieka nad pacjentami, analiza recept, doradztwo w zakresie dawkowania, interakcji lekowych, indywidualizacja terapii.",
                    "en" => "Providing comprehensive patient care, analyzing prescriptions, advising on dosages, drug interactions, and personalizing therapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17170,
                "name" => json_encode([
                    "pl" => "Samodzielne przygotowywanie skomplikowanych leków recepturowych i monitorowanie jakości leków przygotowywanych przez techników.",
                    "en" => "Independently preparing complex prescription medications and monitoring the quality of drugs prepared by technicians."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17171,
                "name" => json_encode([
                    "pl" => "Szczegółowe informowanie pacjentów o zasadach stosowania leków w kontekście ich chorób i ogólnego stanu zdrowia.",
                    "en" => "Providing detailed patient guidance on medication use in the context of their illnesses and overall health."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17172,
                "name" => json_encode([
                    "pl" => "Monitorowanie jakości wydawanych leków, współpraca z producentami, kontrola dat ważności i przechowywania leków.",
                    "en" => "Monitoring the quality of dispensed medications, collaborating with manufacturers, and checking expiration dates and storage conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17173,
                "name" => json_encode([
                    "pl" => "Ocena stosowanych przez pacjentów leków, identyfikacja problemów lekowych oraz wspieranie lekarzy w modyfikacji terapii.",
                    "en" => "Assessing patients' medication regimens, identifying drug-related problems, and supporting doctors in therapy modifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17174,
                "name" => json_encode([
                    "pl" => "Organizowanie szkoleń dla techników farmaceutycznych i farmaceutów, dzielenie się wiedzą o nowych lekach, preparatach i wytycznych terapeutycznych.",
                    "en" => "Organizing training sessions for pharmacy technicians and pharmacists, sharing knowledge about new drugs, formulations, and therapeutic guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPERATORZY_APARATURY_MEDYCZNEJ = [

            [
                "id" => 17175,
                "name" => json_encode([
                    "pl" => "Włączanie, konfigurowanie oraz monitorowanie urządzeń takich jak aparaty rentgenowskie, tomografy komputerowe, rezonanse magnetyczne, ultrasonografy.",
                    "en" => "Activating, configuring, and monitoring devices such as X-ray machines, CT scanners, MRI machines, and ultrasound devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17176,
                "name" => json_encode([
                    "pl" => "Pomoc w przeprowadzaniu badań diagnostycznych, zapewnienie odpowiedniej jakości obrazów i danych.",
                    "en" => "Assisting in performing diagnostic tests and ensuring the quality of images and data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17177,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów o przebiegu badania, przygotowanie ich do badania, udzielanie instrukcji dotyczących zachowania się podczas procedury.",
                    "en" => "Informing patients about the procedure, preparing them for the examination, and providing instructions on how to behave during the procedure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17178,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie rutynowych kontroli aparatury, zgłaszanie awarii i współpraca z działem technicznym w zakresie napraw.",
                    "en" => "Performing routine equipment checks, reporting malfunctions, and collaborating with the technical department for repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17179,
                "name" => json_encode([
                    "pl" => "Zapewnienie ochrony pacjentów i personelu przed promieniowaniem i innymi czynnikami szkodliwymi, stosowanie środków ochrony osobistej.",
                    "en" => "Ensuring the protection of patients and staff from radiation and other harmful factors by using personal protective equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17180,
                "name" => json_encode([
                    "pl" => "Rejestrowanie przeprowadzonych badań, zapis wyników oraz wprowadzanie danych do systemu.",
                    "en" => "Recording conducted tests, documenting results, and entering data into the system."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ZABIEGOWY_BALNEOLOGICZNY = [

            [
                "id" => 17181,
                "name" => json_encode([
                    "pl" => "Wykonywanie zabiegów z wykorzystaniem naturalnych zasobów, takich jak wody lecznicze, błoto, para wodna w ośrodkach balneologicznych i sanatoriach.",
                    "en" => "Performing treatments using natural resources such as medicinal waters, mud, and steam in balneological centers and sanatoriums."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17182,
                "name" => json_encode([
                    "pl" => "Obserwowanie reakcji pacjentów na zabiegi, reagowanie na objawy niepożądane i dostosowywanie zabiegów do indywidualnych potrzeb.",
                    "en" => "Monitoring patient responses to treatments, addressing adverse reactions, and adjusting treatments to individual needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17183,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów o przebiegu zabiegów, pomoc w przygotowaniu się do procedur.",
                    "en" => "Informing patients about treatment procedures and assisting them in preparation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17184,
                "name" => json_encode([
                    "pl" => "Regularne czyszczenie i dezynfekcja sprzętu oraz stanowisk zabiegowych, dbanie o higieniczne warunki pracy.",
                    "en" => "Regularly cleaning and disinfecting equipment and treatment stations, ensuring hygienic working conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17185,
                "name" => json_encode([
                    "pl" => "Konsultacje z lekarzami balneologami, fizjoterapeutami i rehabilitantami w zakresie odpowiednich metod i technik leczenia.",
                    "en" => "Consulting with balneologists, physiotherapists, and rehabilitation specialists on appropriate methods and treatment techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17186,
                "name" => json_encode([
                    "pl" => "Rejestrowanie przeprowadzonych zabiegów, prowadzenie kart pacjentów i raportowanie efektów leczenia.",
                    "en" => "Documenting treatments performed, maintaining patient records, and reporting treatment outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ELEKTRONIKI_MEDYCZNEJ = [

            [
                "id" => 17187,
                "name" => json_encode([
                    "pl" => "Montaż urządzeń diagnostycznych i terapeutycznych, ich konfiguracja zgodnie z wytycznymi producenta i specyfikacjami medycznymi.",
                    "en" => "Installing diagnostic and therapeutic devices and configuring them according to manufacturer guidelines and medical specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17188,
                "name" => json_encode([
                    "pl" => "Regularne testowanie i kalibracja urządzeń w celu zapewnienia ich poprawnego działania i bezpieczeństwa pacjentów.",
                    "en" => "Regularly testing and calibrating devices to ensure proper operation and patient safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17189,
                "name" => json_encode([
                    "pl" => "Diagnozowanie i naprawa usterek technicznych, wymiana uszkodzonych części, rozwiązywanie problemów technicznych.",
                    "en" => "Diagnosing and repairing technical faults, replacing damaged parts, and resolving technical issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17190,
                "name" => json_encode([
                    "pl" => "Zapewnienie wsparcia technicznego personelowi medycznemu, doradztwo w zakresie obsługi aparatury.",
                    "en" => "Providing technical support to medical staff and advising on equipment operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17191,
                "name" => json_encode([
                    "pl" => "Prowadzenie szczegółowej dokumentacji napraw, serwisowania i konserwacji sprzętu.",
                    "en" => "Maintaining detailed records of repairs, servicing, and equipment maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17192,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szkoleń dla personelu medycznego z obsługi nowego sprzętu, zasad bezpieczeństwa oraz użytkowania urządzeń.",
                    "en" => "Conducting training sessions for medical staff on operating new equipment, safety principles, and device usage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SERWISANT_URZADZEN_MEDYCZNYCH = [

            [
                "id" => 17193,
                "name" => json_encode([
                    "pl" => "Wykrywanie usterek, rozwiązywanie problemów technicznych, naprawa urządzeń takich jak monitory pacjenta, respiratory, pompy infuzyjne.",
                    "en" => "Identifying faults, resolving technical issues, and repairing devices such as patient monitors, ventilators, and infusion pumps."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17194,
                "name" => json_encode([
                    "pl" => "Regularna konserwacja i serwisowanie sprzętu medycznego, kontrola sprawności technicznej, kalibracja.",
                    "en" => "Regular maintenance and servicing of medical equipment, checking technical functionality, and performing calibration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17195,
                "name" => json_encode([
                    "pl" => "Zamawianie i wymiana części zamiennych, dbałość o magazyn części, zapewnienie ciągłości działania urządzeń.",
                    "en" => "Ordering and replacing spare parts, managing the parts inventory, and ensuring uninterrupted equipment operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17196,
                "name" => json_encode([
                    "pl" => "Prowadzenie zapisów dotyczących przeglądów, napraw, wymiany części oraz przeprowadzonych prac konserwacyjnych.",
                    "en" => "Maintaining records of inspections, repairs, part replacements, and maintenance work performed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17197,
                "name" => json_encode([
                    "pl" => "Utrzymywanie kontaktu z producentami sprzętu, aktualizacja wiedzy technicznej, konsultacje w przypadku trudnych napraw.",
                    "en" => "Maintaining contact with equipment manufacturers, updating technical knowledge, and consulting on complex repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17198,
                "name" => json_encode([
                    "pl" => "Wsparcie personelu w zakresie użytkowania i obsługi technicznej urządzeń, doradztwo w zakresie poprawnego użytkowania.",
                    "en" => "Providing support to staff in the use and technical operation of devices, advising on proper usage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_RADIOFARMACJI = [

            [
                "id" => 17199,
                "name" => json_encode([
                    "pl" => "Produkcja i mieszanie substancji radioaktywnych wykorzystywanych w diagnostyce i terapii, takich jak izotopy stosowane w medycynie nuklearnej.",
                    "en" => "Producing and mixing radioactive substances used in diagnostics and therapy, such as isotopes for nuclear medicine."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17200,
                "name" => json_encode([
                    "pl" => "Kontrola jakości wytworzonych radiofarmaceutyków, ocena ich czystości i skuteczności przed podaniem pacjentom.",
                    "en" => "Quality control of produced radiopharmaceuticals, assessing their purity and efficacy before administering to patients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17201,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur bezpieczeństwa związanych z pracą z materiałami radioaktywnymi, stosowanie środków ochrony osobistej.",
                    "en" => "Adhering to safety procedures for handling radioactive materials and using personal protective equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17202,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpiecznego przechowywania i transportu substancji radioaktywnych zgodnie z regulacjami.",
                    "en" => "Ensuring safe storage and transportation of radioactive substances in compliance with regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17203,
                "name" => json_encode([
                    "pl" => "Rejestrowanie produkcji, dystrybucji oraz zużycia radiofarmaceutyków, zgodność z normami i regulacjami.",
                    "en" => "Recording the production, distribution, and usage of radiopharmaceuticals, ensuring compliance with standards and regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17204,
                "name" => json_encode([
                    "pl" => "Ścisła współpraca z lekarzami medycyny nuklearnej oraz technikami obrazowania przy stosowaniu radiofarmaceutyków.",
                    "en" => "Collaborating closely with nuclear medicine physicians and imaging technicians in the use of radiopharmaceuticals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_INZYNIERII_MEDYCZNEJ = [

            [
                "id" => 17205,
                "name" => json_encode([
                    "pl" => "Praca nad projektami urządzeń medycznych, tworzenie prototypów, wprowadzanie innowacyjnych rozwiązań technologicznych.",
                    "en" => "Working on medical device projects, creating prototypes, and introducing innovative technological solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17206,
                "name" => json_encode([
                    "pl" => "Testowanie nowego sprzętu, ocena jego bezpieczeństwa i funkcjonalności, współpraca z zespołami badawczymi.",
                    "en" => "Testing new equipment, evaluating its safety and functionality, and collaborating with research teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17207,
                "name" => json_encode([
                    "pl" => "Udoskonalanie i adaptacja urządzeń oraz procesów technologicznych w celu poprawy efektywności pracy placówek medycznych.",
                    "en" => "Improving and adapting devices and technological processes to enhance the efficiency of medical facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17208,
                "name" => json_encode([
                    "pl" => "Praca z firmami produkującymi sprzęt medyczny, nadzór nad certyfikacją i wdrażaniem nowych urządzeń.",
                    "en" => "Collaborating with medical equipment manufacturers, overseeing certification, and implementing new devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17209,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów technicznych, nadzór nad pracami serwisowymi i kontrola jakości sprzętu.",
                    "en" => "Conducting technical inspections, supervising maintenance work, and ensuring the quality of equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17210,
                "name" => json_encode([
                    "pl" => "Konsultacje i doradztwo dotyczące obsługi, użytkowania i właściwej konserwacji urządzeń.",
                    "en" => "Providing consultations and advice on the operation, use, and proper maintenance of devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ELEKTRORADIOLOG = [

            [
                "id" => 17211,
                "name" => json_encode([
                    "pl" => "Wykonywanie badań takich jak RTG, tomografia komputerowa, rezonans magnetyczny, współpraca z lekarzami w zakresie diagnostyki obrazowej.",
                    "en" => "Performing examinations such as X-rays, CT scans, and MRIs, and collaborating with doctors in imaging diagnostics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17212,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów o przebiegu badania, zakładanie środków ochrony, przygotowanie stanowiska do badania.",
                    "en" => "Informing patients about the procedure, applying protective measures, and preparing the workstation for the examination."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17213,
                "name" => json_encode([
                    "pl" => "Kalibracja i konfiguracja urządzeń obrazowych, zapewnienie jakości obrazów diagnostycznych.",
                    "en" => "Calibrating and configuring imaging devices, ensuring the quality of diagnostic images."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17214,
                "name" => json_encode([
                    "pl" => "Ochrona pacjentów i personelu przed promieniowaniem, stosowanie środków ochrony indywidualnej i ograniczanie ekspozycji.",
                    "en" => "Protecting patients and staff from radiation exposure by using personal protective equipment and minimizing exposure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17215,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników badań, wprowadzanie danych do systemów komputerowych, archiwizacja obrazów.",
                    "en" => "Documenting examination results, entering data into computer systems, and archiving images."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17216,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o procedurach, wpływie promieniowania oraz zasadach bezpieczeństwa podczas badań.",
                    "en" => "Providing information about procedures, the effects of radiation, and safety rules during examinations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MONTER_URZADZEN_MEDYCZNYCH = [

            [
                "id" => 17217,
                "name" => json_encode([
                    "pl" => "Składanie i instalowanie urządzeń takich jak monitory pacjenta, łóżka szpitalne, sprzęt diagnostyczny i terapeutyczny.",
                    "en" => "Assembling and installing devices such as patient monitors, hospital beds, diagnostic, and therapeutic equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17218,
                "name" => json_encode([
                    "pl" => "Ustawianie parametrów sprzętu medycznego zgodnie z instrukcjami producenta, wykonywanie testów jakości.",
                    "en" => "Setting up medical equipment parameters according to manufacturer instructions and conducting quality tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17219,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie drobnych napraw, konserwacja sprzętu medycznego, dbałość o jego bezawaryjność.",
                    "en" => "Performing minor repairs, maintaining medical equipment, and ensuring its reliability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17220,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej montażu, napraw oraz przeprowadzonych konserwacji.",
                    "en" => "Maintaining documentation on assembly, repairs, and performed maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17221,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpiecznej instalacji urządzeń, przestrzeganie zasad ochrony osobistej oraz przepisów BHP.",
                    "en" => "Ensuring the safe installation of devices, adhering to personal protection and occupational health and safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17222,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji zwrotnych o wadach, konsultowanie problemów technicznych oraz uczestniczenie w szkoleniach dotyczących obsługi nowych urządzeń.",
                    "en" => "Providing feedback on defects, consulting on technical issues, and participating in training on new equipment operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RATOWNICY_MEDYCZNI = [

            [
                "id" => 17223,
                "name" => json_encode([
                    "pl" => "Ocena stanu pacjenta, prowadzenie resuscytacji krążeniowo-oddechowej, tamowanie krwotoków, stabilizacja złamań.",
                    "en" => "Assessing patient condition, performing cardiopulmonary resuscitation, controlling bleeding, and stabilizing fractures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17224,
                "name" => json_encode([
                    "pl" => "Bezpieczne przewożenie pacjentów karetką, stabilizacja pacjenta podczas transportu, monitorowanie funkcji życiowych.",
                    "en" => "Safely transporting patients by ambulance, stabilizing them during transport, and monitoring vital signs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17225,
                "name" => json_encode([
                    "pl" => "Udzielanie pomocy w sytuacjach kryzysowych, takich jak wypadki, zatrzymanie krążenia, udary, zawały serca.",
                    "en" => "Providing assistance in emergency situations such as accidents, cardiac arrest, strokes, and heart attacks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17226,
                "name" => json_encode([
                    "pl" => "Używanie defibrylatora, respiratora, EKG oraz innych urządzeń niezbędnych do ratowania życia.",
                    "en" => "Using defibrillators, ventilators, ECG, and other devices essential for saving lives."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17227,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o stanie pacjenta lekarzom, koordynacja działań z innymi ratownikami, pielęgniarkami i lekarzami.",
                    "en" => "Communicating patient condition to doctors, coordinating actions with other paramedics, nurses, and doctors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17228,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów i dokumentacji z interwencji, dokumentowanie zastosowanych procedur.",
                    "en" => "Preparing reports and documentation of interventions, recording applied procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SANITARIUSZ_SZPITALNY = [

            [
                "id" => 17229,
                "name" => json_encode([
                    "pl" => "Przemieszczanie pacjentów między oddziałami, transport na badania i zabiegi.",
                    "en" => "Transferring patients between departments and transporting them for tests and procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17230,
                "name" => json_encode([
                    "pl" => "Asysta personelowi medycznemu przy prostych czynnościach, takich jak przekładanie pacjentów, przygotowanie do badania.",
                    "en" => "Assisting medical staff with basic tasks such as repositioning patients and preparing them for examinations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17231,
                "name" => json_encode([
                    "pl" => "Czyszczenie i dezynfekcja powierzchni, sprzętu oraz łóżek pacjentów.",
                    "en" => "Cleaning and disinfecting surfaces, equipment, and patient beds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17232,
                "name" => json_encode([
                    "pl" => "Asystowanie pacjentom w codziennych czynnościach, takich jak przemieszczanie, higiena osobista, karmienie.",
                    "en" => "Assisting patients with daily activities such as moving, personal hygiene, and feeding."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17233,
                "name" => json_encode([
                    "pl" => "Dostarczanie i uzupełnianie materiałów medycznych i środków higienicznych na oddziale.",
                    "en" => "Delivering and replenishing medical supplies and hygiene products in the ward."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17234,
                "name" => json_encode([
                    "pl" => "Dokumentowanie transportu pacjentów oraz użytych środków dezynfekcyjnych i medycznych.",
                    "en" => "Documenting patient transport and recording used disinfectants and medical supplies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISCI_DO_SPRAW_RATOWNICTWA_MEDYCZNEGO = [

            [
                "id" => 17235,
                "name" => json_encode([
                    "pl" => "Nadzór nad pracą zespołów ratowniczych, planowanie działań w sytuacjach kryzysowych.",
                    "en" => "Supervising the work of rescue teams and planning actions in crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17236,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że wszystkie procedury ratunkowe są zgodne z wytycznymi i protokołami.",
                    "en" => "Ensuring that all emergency procedures comply with guidelines and protocols."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17237,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz po interwencjach, ocena skuteczności podejmowanych działań, raportowanie wyników.",
                    "en" => "Conducting post-intervention analyses, evaluating the effectiveness of actions taken, and reporting results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17238,
                "name" => json_encode([
                    "pl" => "Organizacja i prowadzenie szkoleń dla ratowników medycznych z zakresu udzielania pierwszej pomocy i postępowania w nagłych wypadkach.",
                    "en" => "Organizing and conducting training for paramedics on first aid and emergency response."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17239,
                "name" => json_encode([
                    "pl" => "Organizowanie akcji edukacyjnych, szkoleń z pierwszej pomocy dla społeczności, kampanii promujących bezpieczeństwo.",
                    "en" => "Organizing educational campaigns, first aid training for the community, and safety promotion campaigns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17240,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów dotyczących interwencji, monitorowanie wyposażenia i stanu technicznego sprzętu ratowniczego.",
                    "en" => "Preparing reports on interventions, monitoring equipment, and the technical condition of rescue gear."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FIZJOTERAPEUCI = [

            [
                "id" => 17241,
                "name" => json_encode([
                    "pl" => "Ocena zakresu ruchu, siły mięśniowej, stanu funkcjonalnego oraz poziomu bólu pacjenta.",
                    "en" => "Assessing the range of motion, muscle strength, functional status, and pain level of the patient."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17242,
                "name" => json_encode([
                    "pl" => "Opracowanie indywidualnych programów terapii dla pacjentów z różnymi schorzeniami, takimi jak urazy, choroby neurologiczne, choroby ortopedyczne.",
                    "en" => "Developing individualized therapy programs for patients with various conditions, such as injuries, neurological disorders, and orthopedic diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17243,
                "name" => json_encode([
                    "pl" => "Wykonywanie ćwiczeń rehabilitacyjnych, terapia manualna, mobilizacja stawów, stretching.",
                    "en" => "Performing rehabilitation exercises, manual therapy, joint mobilization, and stretching."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17244,
                "name" => json_encode([
                    "pl" => "Stosowanie metod fizykoterapii, takich jak ultradźwięki, elektroterapia, krioterapia i terapia laserowa.",
                    "en" => "Applying physiotherapy methods such as ultrasound, electrotherapy, cryotherapy, and laser therapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17245,
                "name" => json_encode([
                    "pl" => "Systematyczna ocena efektów terapii, dostosowanie planu rehabilitacji do postępów pacjenta.",
                    "en" => "Systematically evaluating therapy outcomes and adjusting the rehabilitation plan to the patient's progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17246,
                "name" => json_encode([
                    "pl" => "Nauka technik zapobiegania urazom, zasad ergonomii, ćwiczeń do wykonywania w domu, instruktaż samodzielnej rehabilitacji.",
                    "en" => "Teaching injury prevention techniques, ergonomics, home exercises, and self-rehabilitation instructions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_FIZJOTERAPII = [

            [
                "id" => 17247,
                "name" => json_encode([
                    "pl" => "Pomoc fizjoterapeucie w przeprowadzaniu ćwiczeń rehabilitacyjnych, przygotowanie pacjenta do zabiegu.",
                    "en" => "Assisting the physiotherapist in performing rehabilitation exercises and preparing the patient for treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17248,
                "name" => json_encode([
                    "pl" => "Wykonywanie zabiegów z zakresu elektroterapii, ultradźwięków, magnetoterapii, laseroterapii.",
                    "en" => "Performing treatments in the fields of electrotherapy, ultrasound, magnetotherapy, and laser therapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17249,
                "name" => json_encode([
                    "pl" => "Obserwacja pacjenta podczas zabiegów, zgłaszanie fizjoterapeucie wszelkich zmian w stanie zdrowia pacjenta.",
                    "en" => "Observing the patient during treatments and reporting any changes in the patient's health to the physiotherapist."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17250,
                "name" => json_encode([
                    "pl" => "Rejestrowanie wykonanych zabiegów, raportowanie postępów i zmian w stanie zdrowia pacjenta.",
                    "en" => "Recording performed treatments and reporting progress and changes in the patient's health condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17251,
                "name" => json_encode([
                    "pl" => "Przygotowanie, czyszczenie i konserwacja sprzętu do zabiegów fizjoterapeutycznych.",
                    "en" => "Preparing, cleaning, and maintaining equipment used for physiotherapy treatments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17252,
                "name" => json_encode([
                    "pl" => "Udzielanie pacjentowi informacji o zasadach wykonywania ćwiczeń oraz higienie związanej z zabiegami.",
                    "en" => "Providing patients with information on exercise techniques and hygiene related to treatments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_MASAZYSTA = [

            [
                "id" => 17253,
                "name" => json_encode([
                    "pl" => "Wykonywanie masaży klasycznych, relaksacyjnych, sportowych, drenażu limfatycznego na zlecenie fizjoterapeuty lub lekarza.",
                    "en" => "Performing classical, relaxation, sports massages, and lymphatic drainage as instructed by a physiotherapist or doctor."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17254,
                "name" => json_encode([
                    "pl" => "Zbieranie wywiadu z pacjentem, dostosowanie techniki masażu do jego potrzeb i stanu zdrowia.",
                    "en" => "Collecting patient history and adapting massage techniques to their needs and health condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17255,
                "name" => json_encode([
                    "pl" => "Obserwowanie pacjenta podczas zabiegu, dostosowywanie siły masażu, reagowanie na ewentualne problemy zdrowotne.",
                    "en" => "Observing the patient during the procedure, adjusting massage pressure, and responding to any health issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17256,
                "name" => json_encode([
                    "pl" => "Dbanie o higienę miejsca pracy, dezynfekcja sprzętu i akcesoriów do masażu.",
                    "en" => "Maintaining workplace hygiene, disinfecting massage equipment and accessories."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17257,
                "name" => json_encode([
                    "pl" => "Konsultacje z fizjoterapeutą lub lekarzem w celu dostosowania zabiegu do zaleceń terapeutycznych.",
                    "en" => "Consulting with a physiotherapist or doctor to tailor the procedure to therapeutic recommendations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17258,
                "name" => json_encode([
                    "pl" => "Rejestrowanie przeprowadzonych masaży, zapisanie uwag dotyczących stanu pacjenta i jego reakcji na zabieg.",
                    "en" => "Recording performed massages and noting observations about the patient's condition and response to the treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PSYCHOTERAPEUTA = [

            [
                "id" => 17259,
                "name" => json_encode([
                    "pl" => "Prowadzenie sesji terapeutycznych, opracowanie strategii terapeutycznych dostosowanych do indywidualnych potrzeb pacjenta.",
                    "en" => "Conducting therapy sessions and developing therapeutic strategies tailored to the individual needs of the patient."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17260,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie wywiadów, testów diagnostycznych, formułowanie diagnozy psychologicznej.",
                    "en" => "Conducting interviews, diagnostic tests, and formulating psychological diagnoses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17261,
                "name" => json_encode([
                    "pl" => "Pomoc pacjentom w trudnych sytuacjach życiowych, wsparcie w nagłych kryzysach emocjonalnych.",
                    "en" => "Helping patients in difficult life situations and providing support during emotional crises."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17262,
                "name" => json_encode([
                    "pl" => "Opracowanie planów terapeutycznych w oparciu o potrzeby i cele pacjenta, monitorowanie postępów.",
                    "en" => "Developing therapeutic plans based on the patient's needs and goals, and monitoring progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17263,
                "name" => json_encode([
                    "pl" => "Konsultacje z lekarzami psychiatrami, psychologami, terapeutami zajęciowymi i innymi specjalistami w procesie leczenia pacjenta.",
                    "en" => "Consulting with psychiatrists, psychologists, occupational therapists, and other specialists during the treatment process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17264,
                "name" => json_encode([
                    "pl" => "Notowanie postępów terapii, dokumentacja spotkań terapeutycznych, przygotowywanie raportów dotyczących terapii.",
                    "en" => "Recording therapy progress, documenting therapy sessions, and preparing therapy-related reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PSYCHOLOG = [

            [
                "id" => 17265,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie wywiadów, testów psychologicznych, analiza wyników w celu diagnozy problemów psychicznych.",
                    "en" => "Conducting interviews, psychological tests, and analyzing results to diagnose mental health issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17266,
                "name" => json_encode([
                    "pl" => "Udzielanie porad dotyczących radzenia sobie ze stresem, problemami emocjonalnymi, trudnościami interpersonalnymi.",
                    "en" => "Providing advice on coping with stress, emotional problems, and interpersonal difficulties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17267,
                "name" => json_encode([
                    "pl" => "Pomoc pacjentom w rozwijaniu umiejętności radzenia sobie z emocjami, budowania relacji, rozwoju kompetencji osobistych.",
                    "en" => "Helping patients develop skills to manage emotions, build relationships, and enhance personal competencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17268,
                "name" => json_encode([
                    "pl" => "Pomoc pacjentom w sytuacjach kryzysowych, takich jak nagłe wydarzenia traumatyczne, straty, kryzysy rodzinne.",
                    "en" => "Assisting patients in crisis situations such as traumatic events, losses, and family crises."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17269,
                "name" => json_encode([
                    "pl" => "Diagnoza trudności w nauce, rozwoju emocjonalnym, zachowaniu, współpraca z rodzicami i nauczycielami.",
                    "en" => "Diagnosing learning difficulties, emotional development issues, and behavioral problems, and collaborating with parents and teachers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17270,
                "name" => json_encode([
                    "pl" => "Notowanie obserwacji i wyników testów, dokumentowanie przebiegu konsultacji, przygotowywanie raportów.",
                    "en" => "Recording observations and test results, documenting consultations, and preparing reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_PSYCHOTERAPII_UZALEZNIEN = [

            [
                "id" => 17271,
                "name" => json_encode([
                    "pl" => "Terapia osób z uzależnieniami, wspieranie ich w zrozumieniu mechanizmów uzależnienia, tworzenie planu wyjścia z nałogu.",
                    "en" => "Providing therapy for individuals with addictions, helping them understand addiction mechanisms, and creating a recovery plan."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17272,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie wywiadów, analiza historii uzależnień, rozpoznanie przyczyn i skutków uzależnienia.",
                    "en" => "Conducting interviews, analyzing addiction history, and identifying the causes and consequences of addiction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17273,
                "name" => json_encode([
                    "pl" => "Dostosowanie metod terapeutycznych do potrzeb pacjenta, opracowanie indywidualnych programów wychodzenia z uzależnienia.",
                    "en" => "Adapting therapeutic methods to the patient's needs and developing individualized addiction recovery programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17274,
                "name" => json_encode([
                    "pl" => "Pomoc rodzinom osób uzależnionych w radzeniu sobie z problemem, edukacja w zakresie współuzależnienia.",
                    "en" => "Helping families of addicted individuals cope with the problem and providing education on co-dependency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17275,
                "name" => json_encode([
                    "pl" => "W przypadku potrzeby współpracy z innymi specjalistami (lekarze, psycholodzy, terapeuci), skierowanie pacjenta do odpowiednich jednostek.",
                    "en" => "Referring patients to appropriate units when cooperation with other specialists (doctors, psychologists, therapists) is needed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17276,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przebiegu terapii, notowanie postępów, raportowanie w przypadku terapii realizowanych w ośrodkach zdrowia.",
                    "en" => "Documenting therapy progress, recording achievements, and reporting for therapies conducted in health centers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_TERAPII_UZALEZNIEN = [

            [
                "id" => 17277,
                "name" => json_encode([
                    "pl" => "Praca z pacjentami uzależnionymi od alkoholu, narkotyków, hazardu, internetu i innych form uzależnień.",
                    "en" => "Working with patients addicted to alcohol, drugs, gambling, internet, and other forms of addiction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17278,
                "name" => json_encode([
                    "pl" => "Prowadzenie wywiadów, analiza zachowań pacjenta w celu rozpoznania rodzaju i stopnia uzależnienia.",
                    "en" => "Conducting interviews and analyzing patient behavior to identify the type and severity of addiction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17279,
                "name" => json_encode([
                    "pl" => "Organizowanie i prowadzenie terapii grupowych, wsparcie pacjentów w wyrażaniu emocji i wymianie doświadczeń.",
                    "en" => "Organizing and conducting group therapy sessions, supporting patients in expressing emotions and sharing experiences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17280,
                "name" => json_encode([
                    "pl" => "Uczenie pacjentów strategii radzenia sobie z sytuacjami wysokiego ryzyka, profilaktyka nawrotów uzależnienia.",
                    "en" => "Teaching patients strategies for coping with high-risk situations and preventing addiction relapses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17281,
                "name" => json_encode([
                    "pl" => "Doradzanie pacjentom w zakresie budowania pozytywnych nawyków, prowadzenia zdrowego stylu życia bez uzależnień.",
                    "en" => "Advising patients on building positive habits and leading a healthy, addiction-free lifestyle."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17282,
                "name" => json_encode([
                    "pl" => "Edukowanie rodziny pacjenta w zakresie uzależnienia, pomoc w zrozumieniu choroby oraz radzeniu sobie z sytuacją.",
                    "en" => "Educating the patient's family about addiction, helping them understand the condition, and cope with the situation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PSYCHOONKOLOG = [

            [
                "id" => 17283,
                "name" => json_encode([
                    "pl" => "Praca z osobami chorymi na nowotwory, pomoc w radzeniu sobie z diagnozą, lękiem i emocjami związanymi z chorobą.",
                    "en" => "Working with cancer patients, helping them cope with the diagnosis, anxiety, and emotions related to the illness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17284,
                "name" => json_encode([
                    "pl" => "Wsparcie bliskich osób chorych, pomoc w adaptacji do nowej sytuacji oraz radzeniu sobie z emocjami.",
                    "en" => "Supporting relatives of patients, helping them adapt to the new situation and cope with emotions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17285,
                "name" => json_encode([
                    "pl" => "Pomoc pacjentom w akceptacji diagnozy, wsparcie w procesie przechodzenia przez kolejne etapy leczenia.",
                    "en" => "Helping patients accept their diagnosis and supporting them through various stages of treatment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17286,
                "name" => json_encode([
                    "pl" => "Praca z pacjentami w terminalnym stadium choroby, pomoc w radzeniu sobie z lękiem przed śmiercią i cierpieniem.",
                    "en" => "Working with terminally ill patients, helping them cope with the fear of death and suffering."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17287,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o wpływie choroby na zdrowie psychiczne i emocjonalne, edukacja pacjentów i ich rodzin w zakresie wspierania się nawzajem.",
                    "en" => "Providing information on how the illness affects mental and emotional health, and educating patients and their families on mutual support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17288,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z lekarzami, pielęgniarkami i innymi specjalistami, aby zapewnić pacjentowi całościową opiekę.",
                    "en" => "Coordinating efforts with doctors, nurses, and other specialists to provide comprehensive care for the patient."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PSYCHOTRAUMATOLOG = [

            [
                "id" => 17289,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie objawów stresu pourazowego, diagnoza i planowanie terapii dla osób, które doświadczyły traumy.",
                    "en" => "Identifying symptoms of post-traumatic stress, diagnosing, and planning therapy for individuals who have experienced trauma."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17290,
                "name" => json_encode([
                    "pl" => "Praca z pacjentami doświadczającymi PTSD, pomoc w przetwarzaniu trudnych przeżyć i radzeniu sobie z ich skutkami.",
                    "en" => "Working with patients experiencing PTSD, helping them process difficult experiences and cope with their effects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17291,
                "name" => json_encode([
                    "pl" => "Organizowanie grup wsparcia dla osób, które przeżyły wspólne traumy (np. wypadki, katastrofy, przemoc).",
                    "en" => "Organizing support groups for individuals who have experienced shared traumas (e.g., accidents, disasters, violence)."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17292,
                "name" => json_encode([
                    "pl" => "Pomoc pacjentom w nagłych przypadkach, np. po tragediach, wspieranie ich w radzeniu sobie z emocjami.",
                    "en" => "Providing assistance to patients in emergencies, such as after tragedies, and supporting them in managing their emotions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17293,
                "name" => json_encode([
                    "pl" => "Stosowanie terapii skoncentrowanych na redukcji objawów traumy, takich jak EMDR, terapia poznawczo-behawioralna.",
                    "en" => "Applying trauma-focused therapies, such as EMDR and cognitive-behavioral therapy, to reduce trauma symptoms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17294,
                "name" => json_encode([
                    "pl" => "Informowanie pacjentów o mechanizmach traumy i sposobach radzenia sobie z jej skutkami.",
                    "en" => "Educating patients about trauma mechanisms and ways to cope with its effects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MEDIATOR = [

            [
                "id" => 17295,
                "name" => json_encode([
                    "pl" => "Wsparcie stron konfliktu w komunikacji, prowadzenie procesu mediacyjnego w celu osiągnięcia porozumienia.",
                    "en" => "Supporting parties in conflict with communication and conducting the mediation process to reach an agreement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17296,
                "name" => json_encode([
                    "pl" => "Pomoc w nawiązaniu konstruktywnej komunikacji między stronami, zapewnienie spokojnej i bezstronnej atmosfery.",
                    "en" => "Facilitating constructive communication between parties and ensuring a calm and impartial atmosphere."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17297,
                "name" => json_encode([
                    "pl" => "Sporządzanie dokumentów ustaleń, zawarcie porozumienia i uzgodnień dotyczących konfliktu.",
                    "en" => "Drafting settlement documents, formalizing agreements, and resolving conflict-related arrangements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17298,
                "name" => json_encode([
                    "pl" => "Mediacje w sprawach osobistych, rodzinnych, zawodowych, rozwodowych.",
                    "en" => "Conducting mediations in personal, family, workplace, and divorce cases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17299,
                "name" => json_encode([
                    "pl" => "Informowanie stron o procesie mediacji, korzyściach oraz technikach konstruktywnego rozwiązywania konfliktów.",
                    "en" => "Informing parties about the mediation process, its benefits, and techniques for constructive conflict resolution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17300,
                "name" => json_encode([
                    "pl" => "Rejestrowanie ustaleń, dokumentowanie przebiegu spotkań mediacyjnych.",
                    "en" => "Recording agreements and documenting the course of mediation meetings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MEDIATOR_SADOWY = [

            [
                "id" => 17301,
                "name" => json_encode([
                    "pl" => "Prowadzenie mediacji w sprawach skierowanych przez sąd, zgodnie z przepisami prawa.",
                    "en" => "Conducting mediations in cases referred by the court, in accordance with legal regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17302,
                "name" => json_encode([
                    "pl" => "Zachowanie obiektywizmu i bezstronności w kontaktach ze stronami, umożliwienie sprawiedliwego przebiegu mediacji.",
                    "en" => "Maintaining objectivity and impartiality in interactions with parties, ensuring a fair mediation process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17303,
                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji z przebiegu mediacji, przekazywanie sądowi sprawozdań z zawartych porozumień.",
                    "en" => "Preparing documentation of mediation proceedings and submitting reports on agreements to the court."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17304,
                "name" => json_encode([
                    "pl" => "Pomoc stronom w wypracowaniu kompromisu i porozumienia bez potrzeby angażowania postępowania sądowego.",
                    "en" => "Assisting parties in reaching a compromise and agreement without the need for judicial proceedings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17305,
                "name" => json_encode([
                    "pl" => "Zapewnienie poufności w trakcie mediacji, przestrzeganie zasad ochrony informacji dotyczących stron konfliktu.",
                    "en" => "Ensuring confidentiality during mediation and adhering to principles of information protection concerning the parties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17306,
                "name" => json_encode([
                    "pl" => "Informowanie stron o możliwych rozwiązaniach prawnych i ich konsekwencjach.",
                    "en" => "Informing parties about possible legal solutions and their consequences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_KOMUNIKACJI_SPOLECZNEJ = [

            [
                "id" => 17307,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii komunikacyjnych dla instytucji, organizacji lub firm, mających na celu poprawę relacji ze społeczeństwem.",
                    "en" => "Developing communication strategies for institutions, organizations, or companies to improve relations with the public."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17308,
                "name" => json_encode([
                    "pl" => "Dbanie o pozytywny wizerunek instytucji, zarządzanie relacjami z mediami i odbiorcami.",
                    "en" => "Maintaining a positive image of the institution and managing relationships with media and audiences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17309,
                "name" => json_encode([
                    "pl" => "Monitorowanie opinii publicznej, prowadzenie badań i analiz na temat postrzegania marki lub organizacji.",
                    "en" => "Monitoring public opinion, conducting research and analyses on the perception of the brand or organization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17310,
                "name" => json_encode([
                    "pl" => "Pisanie komunikatów prasowych, publikacji, treści na media społecznościowe oraz materiałów promocyjnych.",
                    "en" => "Writing press releases, publications, social media content, and promotional materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17311,
                "name" => json_encode([
                    "pl" => "Utrzymywanie kontaktów z dziennikarzami, organizowanie konferencji prasowych, udzielanie wywiadów i zapewnianie spójności przekazu.",
                    "en" => "Maintaining contacts with journalists, organizing press conferences, giving interviews, and ensuring message consistency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17312,
                "name" => json_encode([
                    "pl" => "Organizowanie kampanii skierowanych do społeczności, edukacja publiczna na temat działań i misji organizacji.",
                    "en" => "Organizing community-targeted campaigns and educating the public about the organization's activities and mission."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TERAPEUTA_ZAJECIOWY = [

            [
                "id" => 17313,
                "name" => json_encode([
                    "pl" => "Dostosowanie ćwiczeń i zajęć do potrzeb pacjentów z różnymi zaburzeniami fizycznymi, psychicznymi lub rozwojowymi.",
                    "en" => "Adapting exercises and activities to the needs of patients with various physical, mental, or developmental disorders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17314,
                "name" => json_encode([
                    "pl" => "Zajęcia, które pomagają pacjentom w codziennym funkcjonowaniu, takie jak ćwiczenia manualne, prace artystyczne, zabawy terapeutyczne.",
                    "en" => "Conducting activities that help patients in daily functioning, such as manual exercises, artistic projects, and therapeutic games."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17315,
                "name" => json_encode([
                    "pl" => "Wspieranie pacjentów w nauce podstawowych czynności, takich jak ubieranie, przygotowanie posiłków, codzienna higiena.",
                    "en" => "Supporting patients in learning basic tasks such as dressing, meal preparation, and daily hygiene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17316,
                "name" => json_encode([
                    "pl" => "Zachęcanie pacjentów do aktywności, pomoc w radzeniu sobie z trudnościami emocjonalnymi wynikającymi z ograniczeń.",
                    "en" => "Encouraging patients to engage in activities and helping them cope with emotional difficulties caused by limitations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17317,
                "name" => json_encode([
                    "pl" => "Ocena efektów terapii zajęciowej, dokumentowanie postępów i wprowadzanie zmian w programie.",
                    "en" => "Evaluating the outcomes of occupational therapy, documenting progress, and making adjustments to the program."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17318,
                "name" => json_encode([
                    "pl" => "Konsultacje z lekarzami, fizjoterapeutami i psychologami w celu dostosowania terapii do kompleksowej opieki.",
                    "en" => "Consulting with doctors, physiotherapists, and psychologists to tailor therapy for comprehensive care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ARTETERAPEUTA = [

            [
                "id" => 17319,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć terapeutycznych z wykorzystaniem sztuki, takich jak malowanie, rzeźba, teatr, taniec, muzyka.",
                    "en" => "Organizing therapeutic sessions using art forms such as painting, sculpture, theater, dance, and music."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17320,
                "name" => json_encode([
                    "pl" => "Pomoc pacjentom w wyrażaniu uczuć i radzeniu sobie z trudnymi emocjami poprzez twórczość artystyczną.",
                    "en" => "Helping patients express feelings and cope with difficult emotions through artistic creativity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17321,
                "name" => json_encode([
                    "pl" => "Dostosowanie metod arteterapii do indywidualnych potrzeb i możliwości pacjentów.",
                    "en" => "Adapting art therapy methods to the individual needs and abilities of patients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17322,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć grupowych, gdzie pacjenci mogą dzielić się twórczością, wspierać się nawzajem i rozwijać.",
                    "en" => "Conducting group sessions where patients can share their creativity, support each other, and grow."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17323,
                "name" => json_encode([
                    "pl" => "Stymulowanie rozwoju kreatywności, samoświadomości oraz pozytywnego postrzegania siebie u pacjentów.",
                    "en" => "Stimulating creativity, self-awareness, and positive self-perception in patients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17324,
                "name" => json_encode([
                    "pl" => "Notowanie przebiegu i efektów sesji arteterapii, monitorowanie postępów pacjentów.",
                    "en" => "Recording the course and outcomes of art therapy sessions, and monitoring patients' progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $NAUCZYCIEL_PSYCHOLOG = [

            [
                "id" => 17325,
                "name" => json_encode([
                    "pl" => "Prowadzenie obserwacji, wywiadów oraz testów psychologicznych, diagnozowanie problemów emocjonalnych, behawioralnych i edukacyjnych.",
                    "en" => "Conducting observations, interviews, and psychological tests to diagnose emotional, behavioral, and educational problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17326,
                "name" => json_encode([
                    "pl" => "Udzielanie pomocy uczniom w radzeniu sobie ze stresem, lękiem, trudnościami interpersonalnymi i emocjonalnymi.",
                    "en" => "Providing support to students in coping with stress, anxiety, interpersonal difficulties, and emotional challenges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17327,
                "name" => json_encode([
                    "pl" => "Współpraca z rodzicami i nauczycielami w zakresie wspierania uczniów, omawianie wyników diagnoz i sposobów pomocy.",
                    "en" => "Collaborating with parents and teachers to support students, discussing diagnosis results, and strategies for assistance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17328,
                "name" => json_encode([
                    "pl" => "Opracowywanie indywidualnych planów wsparcia i terapii dla uczniów z trudnościami.",
                    "en" => "Developing individualized support and therapy plans for students facing difficulties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17329,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć dotyczących radzenia sobie ze stresem, budowania relacji, rozwoju osobistego i umiejętności społecznych.",
                    "en" => "Organizing sessions on stress management, building relationships, personal development, and social skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17330,
                "name" => json_encode([
                    "pl" => "Dokumentowanie diagnoz, postępów i działań wspierających uczniów.",
                    "en" => "Documenting diagnoses, progress, and actions supporting students."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INSTRUKTOR_HIPOTERAPII = [

            [
                "id" => 17331,
                "name" => json_encode([
                    "pl" => "Praca z pacjentami wykorzystująca kontakt z końmi w celach terapeutycznych, dostosowanie zajęć do indywidualnych potrzeb pacjentów.",
                    "en" => "Working with patients using contact with horses for therapeutic purposes, tailoring sessions to individual patient needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17332,
                "name" => json_encode([
                    "pl" => "Ocena stanu zdrowia i możliwości pacjenta, dostosowanie programów terapeutycznych z uwzględnieniem potrzeb fizycznych i psychicznych.",
                    "en" => "Assessing the health and abilities of the patient, and adapting therapeutic programs to their physical and psychological needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17333,
                "name" => json_encode([
                    "pl" => "Dbanie o bezpieczeństwo pacjenta i zwierzęcia, nadzorowanie przebiegu terapii, instruowanie pacjentów w zakresie zachowania przy koniu.",
                    "en" => "Ensuring the safety of the patient and the animal, supervising therapy sessions, and instructing patients on behavior around horses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17334,
                "name" => json_encode([
                    "pl" => "Praca z dziećmi i dorosłymi z różnymi dysfunkcjami fizycznymi i neurologicznymi, wspieranie ich w poprawie równowagi, koordynacji i relacji emocjonalnych.",
                    "en" => "Working with children and adults with various physical and neurological dysfunctions, supporting them in improving balance, coordination, and emotional relationships."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17335,
                "name" => json_encode([
                    "pl" => "Rejestrowanie przebiegu i efektów terapii, monitorowanie postępów pacjenta.",
                    "en" => "Recording the course and outcomes of therapy and monitoring patient progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17336,
                "name" => json_encode([
                    "pl" => "Konsultacje z lekarzami, fizjoterapeutami i psychologami w celu dostosowania terapii.",
                    "en" => "Consulting with doctors, physiotherapists, and psychologists to adapt therapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KYNOTERAPEUTA_DOGOTERAPEUTA = [

            [
                "id" => 17337,
                "name" => json_encode([
                    "pl" => "Praca z pacjentami z wykorzystaniem psa terapeutycznego, dostosowanie zajęć do potrzeb pacjentów.",
                    "en" => "Working with patients using a therapy dog, tailoring sessions to the needs of the patients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17338,
                "name" => json_encode([
                    "pl" => "Diagnoza potrzeb pacjenta oraz przygotowanie programu terapeutycznego, który wspiera rozwój emocjonalny, fizyczny i poznawczy.",
                    "en" => "Diagnosing the patient's needs and preparing a therapeutic program that supports emotional, physical, and cognitive development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17339,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa pacjentów i psa podczas sesji terapeutycznych, dbanie o właściwe zachowanie zwierzęcia.",
                    "en" => "Ensuring the safety of patients and the dog during therapy sessions and maintaining the animal's proper behavior."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17340,
                "name" => json_encode([
                    "pl" => "Wspieranie rozwoju dzieci i osób z niepełnosprawnościami poprzez kontakt ze zwierzęciem, pomoc w budowaniu relacji społecznych i wzmacnianiu pewności siebie.",
                    "en" => "Supporting the development of children and individuals with disabilities through interaction with the animal, helping build social relationships and strengthen self-confidence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17341,
                "name" => json_encode([
                    "pl" => "Zapisywanie postępów pacjenta, monitorowanie efektów terapii i dostosowywanie programu terapeutycznego.",
                    "en" => "Recording patient progress, monitoring therapy outcomes, and adapting the therapeutic program."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17342,
                "name" => json_encode([
                    "pl" => "Konsultacje z psychologami, pedagogami i lekarzami, aby terapia była spójna i dostosowana do kompleksowego leczenia pacjenta.",
                    "en" => "Consulting with psychologists, educators, and doctors to ensure the therapy is consistent and aligned with comprehensive patient care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $NAUCZYCIEL_LOGOPEDA = [

            [
                "id" => 17343,
                "name" => json_encode([
                    "pl" => "Ocena zaburzeń mowy, takich jak seplenienie, jąkanie, korekta wad artykulacyjnych i rozwijanie zdolności językowych.",
                    "en" => "Assessing speech disorders such as lisping, stuttering, correcting articulation issues, and developing language skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17344,
                "name" => json_encode([
                    "pl" => "Tworzenie i realizacja planów terapeutycznych dla uczniów z problemami mowy i komunikacji.",
                    "en" => "Developing and implementing therapeutic plans for students with speech and communication problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17345,
                "name" => json_encode([
                    "pl" => "Praca z dziećmi z zaburzeniami mowy oraz zaburzeniami językowymi, poprawa ich zdolności komunikacyjnych.",
                    "en" => "Working with children with speech and language disorders to improve their communication abilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17346,
                "name" => json_encode([
                    "pl" => "Współpraca z rodzicami, nauczycielami i specjalistami w celu wspierania rozwoju mowy u dzieci.",
                    "en" => "Collaborating with parents, teachers, and specialists to support children's speech development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17347,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć logopedycznych, zarówno indywidualnych, jak i grupowych, dla uczniów wymagających wsparcia w zakresie mowy.",
                    "en" => "Organizing speech therapy sessions, both individual and group, for students requiring support with speech."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17348,
                "name" => json_encode([
                    "pl" => "Dokumentowanie diagnoz, planów terapii i postępów uczniów.",
                    "en" => "Documenting diagnoses, therapy plans, and students' progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $AUDIOFONOLODZY_I_LOGOPEDZI = [

            [
                "id" => 17349,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań słuchu, ocena zaburzeń mowy oraz diagnoza problemów komunikacyjnych.",
                    "en" => "Conducting hearing tests, assessing speech disorders, and diagnosing communication problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17350,
                "name" => json_encode([
                    "pl" => "Opracowywanie indywidualnych programów terapii słuchu i mowy dla pacjentów z różnymi dysfunkcjami.",
                    "en" => "Developing individualized hearing and speech therapy programs for patients with various dysfunctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17351,
                "name" => json_encode([
                    "pl" => "Terapia osób w różnym wieku, pomoc w rozwijaniu zdolności językowych, słuchowych i artykulacyjnych.",
                    "en" => "Providing therapy for individuals of all ages, assisting in developing language, auditory, and articulation skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17352,
                "name" => json_encode([
                    "pl" => "Edukowanie rodziny pacjenta, wspieranie ich w pracy nad rozwojem komunikacji, porady dotyczące wspierania terapii.",
                    "en" => "Educating the patient's family, supporting them in fostering communication development, and providing therapy-related advice."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17353,
                "name" => json_encode([
                    "pl" => "Rejestrowanie wyników diagnoz, postępów terapii i sporządzanie raportów dla lekarzy prowadzących.",
                    "en" => "Recording diagnostic results, therapy progress, and preparing reports for attending physicians."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17354,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z protetykami słuchu, psychologami, lekarzami oraz terapeutami zajęciowymi.",
                    "en" => "Coordinating efforts with hearing aid specialists, psychologists, doctors, and occupational therapists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DIAGNOSCI_LABORATORYJNI_SPECJALISCI = [

            [
                "id" => 17355,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie specjalistycznych badań, takich jak biochemiczne, mikrobiologiczne, hematologiczne, immunologiczne.",
                    "en" => "Conducting specialized tests such as biochemical, microbiological, hematological, and immunological analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17356,
                "name" => json_encode([
                    "pl" => "Analiza wyników laboratoryjnych oraz udzielanie informacji lekarzom prowadzącym na temat wyników badań.",
                    "en" => "Analyzing laboratory results and providing information to attending physicians about the test outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17357,
                "name" => json_encode([
                    "pl" => "Utrzymanie standardów jakości, kalibracja sprzętu, kontrola poprawności procedur.",
                    "en" => "Maintaining quality standards, calibrating equipment, and ensuring the accuracy of procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17358,
                "name" => json_encode([
                    "pl" => "Opracowywanie nowych metod badań, testowanie i wdrażanie innowacyjnych technik laboratoryjnych.",
                    "en" => "Developing new testing methods, testing, and implementing innovative laboratory techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17359,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szkoleń dla młodszych diagnostów i techników laboratoryjnych, instruktaż w zakresie nowych technik.",
                    "en" => "Conducting training for junior diagnosticians and laboratory technicians, and providing instruction on new techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17360,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów i dokumentacji z przeprowadzonych badań oraz zgodność z normami i procedurami.",
                    "en" => "Preparing reports and documentation of conducted tests, ensuring compliance with standards and procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DIAGNOSCI_LABORATORYJNI_BEZ_SPECJALIZACJI_LUB_W_TRAKCIE_SPECJALIZACJI = [

            [
                "id" => 17361,
                "name" => json_encode([
                    "pl" => "Wykonywanie badań diagnostycznych na podstawie próbek biologicznych, takich jak krew, mocz, płyny ustrojowe.",
                    "en" => "Performing diagnostic tests based on biological samples such as blood, urine, and body fluids."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17362,
                "name" => json_encode([
                    "pl" => "Przygotowanie i przechowywanie próbek zgodnie z procedurami, zapewnienie ich jakości do analizy.",
                    "en" => "Preparing and storing samples according to procedures, ensuring their quality for analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17363,
                "name" => json_encode([
                    "pl" => "Kalibracja i konserwacja sprzętu laboratoryjnego, dbanie o poprawność wyników badań.",
                    "en" => "Calibrating and maintaining laboratory equipment, ensuring the accuracy of test results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17364,
                "name" => json_encode([
                    "pl" => "Analiza wyników badań, zgłaszanie wyników nieprawidłowych lekarzowi prowadzącemu.",
                    "en" => "Analyzing test results and reporting abnormal findings to the attending physician."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17365,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur BHP, stosowanie środków ochrony osobistej.",
                    "en" => "Adhering to safety protocols and using personal protective equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17366,
                "name" => json_encode([
                    "pl" => "Rejestrowanie wyników badań, wypełnianie formularzy i prowadzenie kartotek pacjentów.",
                    "en" => "Recording test results, completing forms, and maintaining patient records."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNICY_ANALITYKI_MEDYCZNEJ = [

            [
                "id" => 17367,
                "name" => json_encode([
                    "pl" => "Analiza próbek krwi, moczu, tkanek, przygotowanie wyników do dalszej interpretacji.",
                    "en" => "Analyzing blood, urine, and tissue samples, and preparing results for further interpretation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17368,
                "name" => json_encode([
                    "pl" => "Pobieranie, znakowanie i przygotowanie próbek do analizy, zapewnienie ich właściwego przechowywania.",
                    "en" => "Collecting, labeling, and preparing samples for analysis, ensuring proper storage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17369,
                "name" => json_encode([
                    "pl" => "Używanie urządzeń diagnostycznych, takich jak mikroskopy, analizatory biochemiczne, pipety automatyczne.",
                    "en" => "Operating diagnostic equipment such as microscopes, biochemical analyzers, and automatic pipettes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17370,
                "name" => json_encode([
                    "pl" => "Rejestrowanie wyników badań, prowadzenie kartotek pacjentów oraz przygotowywanie raportów.",
                    "en" => "Recording test results, maintaining patient records, and preparing reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17371,
                "name" => json_encode([
                    "pl" => "Przestrzeganie standardów sanitarnych i zasad BHP, dezynfekcja powierzchni i narzędzi.",
                    "en" => "Adhering to sanitary standards and safety regulations, disinfecting surfaces and tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17372,
                "name" => json_encode([
                    "pl" => "Przekazywanie wyników i współpraca w zakresie przygotowywania analiz.",
                    "en" => "Sharing results and collaborating on preparing analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPTOMETRYSCI = [

            [
                "id" => 17373,
                "name" => json_encode([
                    "pl" => "Ocena ostrości wzroku, sprawdzanie wad refrakcji, takich jak krótkowzroczność, dalekowzroczność, astygmatyzm.",
                    "en" => "Assessing visual acuity, checking refractive errors such as myopia, hyperopia, and astigmatism."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17374,
                "name" => json_encode([
                    "pl" => "Pomiary ciśnienia wewnątrzgałkowego, ocena stanu zdrowia oka, badanie pola widzenia.",
                    "en" => "Measuring intraocular pressure, evaluating eye health, and conducting visual field tests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17375,
                "name" => json_encode([
                    "pl" => "Pomoc pacjentom w doborze korekcji wzroku, dostosowanie soczewek do indywidualnych potrzeb.",
                    "en" => "Helping patients select vision correction and adjusting lenses to their individual needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17376,
                "name" => json_encode([
                    "pl" => "Przekazywanie zaleceń dotyczących higieny wzroku, doradzanie w zakresie korekcji optycznej i ochrony oczu.",
                    "en" => "Providing recommendations on eye hygiene, advising on optical correction, and eye protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17377,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników badań, przepisywanie recept na okulary lub soczewki, przygotowanie raportów.",
                    "en" => "Documenting test results, prescribing glasses or contact lenses, and preparing reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17378,
                "name" => json_encode([
                    "pl" => "W przypadkach wymagających interwencji chirurgicznej lub specjalistycznego leczenia, przekazywanie pacjenta do okulisty.",
                    "en" => "Referring patients to an ophthalmologist for surgical or specialized treatment when necessary."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROTETYK_SLUCHU = [

            [
                "id" => 17379,
                "name" => json_encode([
                    "pl" => "Testowanie słuchu pacjentów za pomocą audiometrów, określanie rodzaju i stopnia ubytku słuchu.",
                    "en" => "Testing patients' hearing using audiometers, determining the type and degree of hearing loss."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17380,
                "name" => json_encode([
                    "pl" => "Wybór odpowiednich aparatów słuchowych, indywidualne dopasowanie urządzenia do potrzeb pacjenta.",
                    "en" => "Selecting suitable hearing aids and customizing devices to meet patients' needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17381,
                "name" => json_encode([
                    "pl" => "Instruktaż dotyczący obsługi, konserwacji i pielęgnacji aparatów słuchowych.",
                    "en" => "Providing guidance on the use, maintenance, and care of hearing aids."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17382,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeglądów, regulacja i naprawa aparatów słuchowych.",
                    "en" => "Conducting inspections, adjustments, and repairs of hearing aids."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17383,
                "name" => json_encode([
                    "pl" => "Notowanie wyników badań słuchu, zapisy dotyczące rodzaju aparatu i postępu pacjenta.",
                    "en" => "Recording hearing test results, documenting the type of hearing aid, and tracking patient progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17384,
                "name" => json_encode([
                    "pl" => "Konsultowanie przypadków wymagających leczenia medycznego, kierowanie pacjentów do specjalistów.",
                    "en" => "Consulting cases requiring medical treatment and referring patients to specialists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_ORTOPEDA = [

            [
                "id" => 17385,
                "name" => json_encode([
                    "pl" => "Przygotowanie protez, ortez, stabilizatorów oraz wkładek ortopedycznych dostosowanych do potrzeb pacjenta.",
                    "en" => "Preparing prostheses, orthoses, braces, and orthopedic insoles tailored to the patient's needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17386,
                "name" => json_encode([
                    "pl" => "Pobieranie miar, dopasowanie urządzeń do indywidualnych potrzeb pacjenta.",
                    "en" => "Taking measurements and fitting devices to the individual needs of the patient."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17387,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie napraw, regulacja i przegląd urządzeń.",
                    "en" => "Performing repairs, adjustments, and maintenance of devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17388,
                "name" => json_encode([
                    "pl" => "Instrukcje dotyczące obsługi, noszenia i pielęgnacji sprzętu ortopedycznego.",
                    "en" => "Providing instructions on the use, wearing, and care of orthopedic equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17389,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wykonanych urządzeń, prowadzenie kartotek oraz raportowanie wyników terapii.",
                    "en" => "Documenting manufactured devices, maintaining records, and reporting therapy outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17390,
                "name" => json_encode([
                    "pl" => "Konsultacje z lekarzami, fizjoterapeutami i rehabilitantami w celu zapewnienia spójności leczenia pacjenta.",
                    "en" => "Consulting with doctors, physiotherapists, and rehabilitation specialists to ensure consistent patient care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPTYCY_OKULAROWI = [

            [
                "id" => 17391,
                "name" => json_encode([
                    "pl" => "Pomoc pacjentom w wyborze oprawek oraz soczewek okularowych dostosowanych do ich potrzeb, stylu życia i estetyki.",
                    "en" => "Assisting patients in selecting frames and lenses tailored to their needs, lifestyle, and aesthetics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17392,
                "name" => json_encode([
                    "pl" => "Szlifowanie, montaż soczewek w oprawkach zgodnie z receptą okulistyczną oraz preferencjami klienta.",
                    "en" => "Grinding and fitting lenses into frames according to the ophthalmologist's prescription and the client's preferences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17393,
                "name" => json_encode([
                    "pl" => "Dopasowywanie oprawek do twarzy klienta, przeprowadzanie napraw drobnych uszkodzeń, takich jak wymiana śrubek czy nosków.",
                    "en" => "Adjusting frames to fit the client's face and performing minor repairs, such as replacing screws or nose pads."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17394,
                "name" => json_encode([
                    "pl" => "Rejestrowanie informacji o klientach, przechowywanie dokumentacji dotyczącej recept i wybranych produktów.",
                    "en" => "Recording client information and maintaining documentation related to prescriptions and selected products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17395,
                "name" => json_encode([
                    "pl" => "Informowanie klientów o zasadach użytkowania i pielęgnacji okularów oraz dbanie o ich trwałość.",
                    "en" => "Informing clients about the use and care of glasses and ensuring their durability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17396,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanów magazynowych oprawek i soczewek, zamawianie towarów od dostawców.",
                    "en" => "Monitoring inventory levels of frames and lenses and ordering supplies from vendors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ORTOPTYSTKA = [

            [
                "id" => 17397,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie badań oczu w celu wykrycia wad takich jak zez, niedowidzenie, problemy z koordynacją obuoczną.",
                    "en" => "Conducting eye examinations to detect defects such as strabismus, amblyopia, and binocular coordination issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17398,
                "name" => json_encode([
                    "pl" => "Realizacja ćwiczeń wzrokowych mających na celu poprawę widzenia obuocznego, rozwijanie umiejętności oczu pacjentów.",
                    "en" => "Performing vision exercises aimed at improving binocular vision and developing patients' eye skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17399,
                "name" => json_encode([
                    "pl" => "Terapia dla dzieci z problemami wzrokowymi oraz dorosłych po urazach lub zabiegach operacyjnych.",
                    "en" => "Providing therapy for children with visual problems and adults after injuries or surgeries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17400,
                "name" => json_encode([
                    "pl" => "Konsultacje z lekarzami okulistami w celu dostosowania terapii do diagnozy i potrzeb pacjenta.",
                    "en" => "Consulting ophthalmologists to adapt therapy to the diagnosis and needs of the patient."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17401,
                "name" => json_encode([
                    "pl" => "Informowanie o zasadach wykonywania ćwiczeń w domu, wspieranie rodzin w codziennej pracy nad poprawą wzroku.",
                    "en" => "Educating on the principles of home exercises and supporting families in daily efforts to improve vision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17402,
                "name" => json_encode([
                    "pl" => "Rejestrowanie wyników badań, dokumentowanie postępów i efektów terapii.",
                    "en" => "Recording examination results, documenting progress, and evaluating therapy outcomes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ORTOPEDA_MECHANIK = [

            [
                "id" => 17403,
                "name" => json_encode([
                    "pl" => "Wytwarzanie protez, ortez, wkładek ortopedycznych oraz innych pomocy dostosowanych do potrzeb pacjentów.",
                    "en" => "Manufacturing prostheses, orthoses, orthopedic insoles, and other aids tailored to patients' needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17404,
                "name" => json_encode([
                    "pl" => "Dostosowywanie sprzętu ortopedycznego do specyficznych wymiarów i potrzeb pacjentów.",
                    "en" => "Adjusting orthopedic equipment to the specific dimensions and needs of patients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17405,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie bieżących napraw, regulacja oraz konserwacja sprzętu ortopedycznego.",
                    "en" => "Performing routine repairs, adjustments, and maintenance of orthopedic equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17406,
                "name" => json_encode([
                    "pl" => "Konsultowanie planów ortopedycznych z lekarzami w celu dostosowania protez i ortez do indywidualnych wymagań pacjenta.",
                    "en" => "Consulting orthopedic plans with doctors to customize prostheses and orthoses to the patient's individual requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17407,
                "name" => json_encode([
                    "pl" => "Instruowanie pacjentów i ich rodzin, jak prawidłowo korzystać z protez, ortez i innych urządzeń.",
                    "en" => "Instructing patients and their families on the proper use of prostheses, orthoses, and other devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17408,
                "name" => json_encode([
                    "pl" => "Zapisywanie parametrów, zamówień i wyników dopasowania sprzętu.",
                    "en" => "Recording parameters, orders, and outcomes of equipment fittings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INZYNIER_OPTYK = [

            [
                "id" => 17409,
                "name" => json_encode([
                    "pl" => "Tworzenie i optymalizacja urządzeń optycznych, takich jak soczewki, mikroskopy, teleskopy, systemy obrazowania.",
                    "en" => "Designing and optimizing optical devices such as lenses, microscopes, telescopes, and imaging systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17410,
                "name" => json_encode([
                    "pl" => "Projektowanie rozwiązań optycznych dla sprzętu medycznego oraz urządzeń diagnostycznych.",
                    "en" => "Designing optical solutions for medical equipment and diagnostic devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17411,
                "name" => json_encode([
                    "pl" => "Testowanie i kalibracja systemów optycznych, analiza jakości i funkcjonalności projektowanych rozwiązań.",
                    "en" => "Testing and calibrating optical systems, analyzing the quality and functionality of designed solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17412,
                "name" => json_encode([
                    "pl" => "Koordynacja prac z zespołami inżynierów oraz techników podczas tworzenia i wdrażania nowych rozwiązań optycznych.",
                    "en" => "Coordinating work with teams of engineers and technicians during the creation and implementation of new optical solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17413,
                "name" => json_encode([
                    "pl" => "Identyfikacja i rozwiązywanie problemów związanych z wydajnością i funkcjonowaniem systemów optycznych.",
                    "en" => "Identifying and resolving issues related to the performance and functionality of optical systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17414,
                "name" => json_encode([
                    "pl" => "Sporządzanie dokumentacji projektowej, wyników testów oraz specyfikacji technicznych urządzeń optycznych.",
                    "en" => "Preparing project documentation, test results, and technical specifications for optical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_SOCJALNY = [

            [
                "id" => 17415,
                "name" => json_encode([
                    "pl" => "Ocena potrzeb osób i rodzin znajdujących się w trudnych sytuacjach życiowych, ustalanie form wsparcia.",
                    "en" => "Assessing the needs of individuals and families in difficult life situations, determining forms of support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17416,
                "name" => json_encode([
                    "pl" => "Pomoc w radzeniu sobie z problemami społecznymi i emocjonalnymi, wspieranie osób w kryzysie.",
                    "en" => "Assisting in coping with social and emotional problems, supporting individuals in crisis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17417,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie dostępnych form wsparcia, takich jak zasiłki, zapomogi, pomoc materialna.",
                    "en" => "Providing advice on available forms of support, such as benefits, allowances, and material assistance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17418,
                "name" => json_encode([
                    "pl" => "Podejmowanie działań na rzecz osób zagrożonych wykluczeniem społecznym, przemocy domowej, bezdomności.",
                    "en" => "Taking action for individuals at risk of social exclusion, domestic violence, or homelessness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17419,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z ośrodkami pomocy społecznej, szpitalami, organizacjami pozarządowymi.",
                    "en" => "Coordinating activities with social welfare centers, hospitals, and non-governmental organizations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17420,
                "name" => json_encode([
                    "pl" => "Dokumentowanie działań na rzecz klientów, przygotowywanie raportów oraz monitorowanie postępów i efektów wsparcia.",
                    "en" => "Documenting actions for clients, preparing reports, and monitoring progress and outcomes of support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_PRACY_SOCJALNEJ = [

            [
                "id" => 17421,
                "name" => json_encode([
                    "pl" => "Tworzenie i wdrażanie programów wsparcia dla osób zagrożonych wykluczeniem społecznym.",
                    "en" => "Developing and implementing support programs for individuals at risk of social exclusion."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17422,
                "name" => json_encode([
                    "pl" => "Współpraca z ośrodkami pomocy społecznej, organizacjami pozarządowymi, instytucjami zdrowotnymi.",
                    "en" => "Collaborating with social welfare centers, non-governmental organizations, and health institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17423,
                "name" => json_encode([
                    "pl" => "Analiza sytuacji socjalno-ekonomicznej klientów, ocena potrzeb i zasobów.",
                    "en" => "Analyzing clients' socio-economic situations, assessing needs and resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17424,
                "name" => json_encode([
                    "pl" => "Udzielanie porad osobom i rodzinom w trudnej sytuacji, wsparcie w radzeniu sobie z problemami życiowymi.",
                    "en" => "Providing advice to individuals and families in difficult situations, supporting them in coping with life challenges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17425,
                "name" => json_encode([
                    "pl" => "Organizowanie szkoleń i kampanii informacyjnych na temat zapobiegania wykluczeniu społecznemu, bezdomności, przemocy.",
                    "en" => "Organizing training sessions and informational campaigns on preventing social exclusion, homelessness, and violence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17426,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów i dokumentacji z działań na rzecz społeczności i poszczególnych klientów.",
                    "en" => "Preparing reports and documentation of activities supporting the community and individual clients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_RESOCJALIZACJI = [

            [
                "id" => 17427,
                "name" => json_encode([
                    "pl" => "Organizowanie zajęć mających na celu reintegrację społeczną osób skazanych i zagrożonych wykluczeniem.",
                    "en" => "Organizing activities aimed at social reintegration of convicted individuals and those at risk of exclusion."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17428,
                "name" => json_encode([
                    "pl" => "Wspieranie osób opuszczających zakłady karne w procesie powrotu do życia w społeczeństwie.",
                    "en" => "Supporting individuals leaving correctional facilities in their reintegration into society."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17429,
                "name" => json_encode([
                    "pl" => "Dostosowanie programów resocjalizacji do potrzeb, możliwości i historii osoby.",
                    "en" => "Adapting rehabilitation programs to the needs, abilities, and history of the individual."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17430,
                "name" => json_encode([
                    "pl" => "Wsparcie w zakresie zatrudnienia, edukacji, rozwoju umiejętności zawodowych.",
                    "en" => "Providing support in employment, education, and development of professional skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17431,
                "name" => json_encode([
                    "pl" => "Praca nad rozwijaniem umiejętności społecznych, wzmacnianiem pozytywnych wzorców zachowań.",
                    "en" => "Working on developing social skills and reinforcing positive behavior patterns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17432,
                "name" => json_encode([
                    "pl" => "Dokumentowanie postępów w resocjalizacji, przygotowywanie raportów dla sądów i instytucji pomocowych.",
                    "en" => "Documenting progress in rehabilitation and preparing reports for courts and support institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KURATOR_SADOWY = [

            [
                "id" => 17433,
                "name" => json_encode([
                    "pl" => "Monitorowanie postępów osób z wyrokami sądowymi, dbanie o realizację warunków probacji.",
                    "en" => "Monitoring the progress of individuals with court sentences, ensuring compliance with probation conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17434,
                "name" => json_encode([
                    "pl" => "Sprawdzanie sytuacji rodzinnej, społecznej i zawodowej osób podlegających kurateli.",
                    "en" => "Assessing the family, social, and professional situations of individuals under supervision."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17435,
                "name" => json_encode([
                    "pl" => "Pomoc osobom dorosłym i nieletnim w reintegracji społecznej, edukacji, poszukiwaniu pracy.",
                    "en" => "Assisting adults and minors in social reintegration, education, and job seeking."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17436,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów na temat postępów podopiecznych, informowanie sądu o naruszeniach warunków probacji.",
                    "en" => "Preparing reports on the progress of supervisees and informing the court of any probation violations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17437,
                "name" => json_encode([
                    "pl" => "Ułatwianie rozwiązywania konfliktów rodzinnych i sąsiedzkich, prowadzenie rozmów motywacyjnych.",
                    "en" => "Facilitating the resolution of family and neighbor conflicts and conducting motivational conversations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17438,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z ośrodkami pomocy, szkołami, zakładami pracy i innymi jednostkami wspierającymi podopiecznych.",
                    "en" => "Coordinating actions with social welfare centers, schools, workplaces, and other entities supporting supervisees."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_PORADNICTWA_PSYCHOSPOLECZNEGO_I_RODZINNEGO = [

            [
                "id" => 17439,
                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia psychologicznego osobom w kryzysie, rodzinom z problemami wychowawczymi.",
                    "en" => "Providing psychological support to individuals in crisis and families with parenting issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17440,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii pomocy dostosowanej do potrzeb rodziny lub osoby indywidualnej.",
                    "en" => "Developing assistance strategies tailored to the needs of the family or individual."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17441,
                "name" => json_encode([
                    "pl" => "Wsparcie psychiczne, pomoc w znalezieniu bezpiecznego miejsca, doradztwo w zakresie ochrony prawnej.",
                    "en" => "Providing emotional support, helping to find a safe place, and offering advice on legal protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17442,
                "name" => json_encode([
                    "pl" => "Prowadzenie warsztatów dotyczących skutecznych metod wychowawczych, rozwoju dzieci.",
                    "en" => "Conducting workshops on effective parenting methods and child development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17443,
                "name" => json_encode([
                    "pl" => "Organizowanie i prowadzenie grup dla osób zmagających się z podobnymi problemami, np. uzależnienia, trudności rodzinne.",
                    "en" => "Organizing and leading groups for people facing similar issues, such as addictions or family difficulties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17444,
                "name" => json_encode([
                    "pl" => "Sporządzanie dokumentacji z sesji konsultacyjnych, przygotowanie raportów dla odpowiednich instytucji.",
                    "en" => "Preparing documentation from counseling sessions and reports for relevant institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $KOORDYNATOR_RODZINNEJ_PIECZY_ZASTEPCZEJ = [

            [
                "id" => 17445,
                "name" => json_encode([
                    "pl" => "Pomoc rodzinom zastępczym w rozwiązywaniu problemów związanych z wychowaniem dzieci.",
                    "en" => "Assisting foster families in resolving issues related to child upbringing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17446,
                "name" => json_encode([
                    "pl" => "Organizowanie szkoleń w zakresie opieki nad dziećmi, procedur prawnych, psychologii dziecka.",
                    "en" => "Organizing training on child care, legal procedures, and child psychology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17447,
                "name" => json_encode([
                    "pl" => "Regularne wizyty w domach rodzin zastępczych, ocena warunków i relacji rodzinnych.",
                    "en" => "Conducting regular visits to foster homes to assess living conditions and family relationships."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17448,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przebiegu pobytu dziecka, jego rozwoju i potrzeb.",
                    "en" => "Documenting the child's stay, development, and needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17449,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z ośrodkami pomocy społecznej, sądami, szkołami i innymi placówkami.",
                    "en" => "Coordinating activities with social welfare centers, courts, schools, and other institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17450,
                "name" => json_encode([
                    "pl" => "W razie potrzeby kierowanie dzieci i rodziny na konsultacje psychologiczne, prawne lub medyczne.",
                    "en" => "Referring children and families for psychological, legal, or medical consultations when necessary."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_ADOPCJI = [

            [
                "id" => 17451,
                "name" => json_encode([
                    "pl" => "Ocena kandydatów pod kątem ich gotowości do adopcji, przeprowadzanie wywiadów i badań.",
                    "en" => "Assessing candidates for their readiness for adoption, conducting interviews and evaluations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17452,
                "name" => json_encode([
                    "pl" => "Organizowanie warsztatów przygotowujących do adopcji, rozwiewanie wątpliwości, omawianie potencjalnych trudności.",
                    "en" => "Organizing workshops to prepare for adoption, addressing concerns, and discussing potential challenges."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17453,
                "name" => json_encode([
                    "pl" => "Pomoc rodzinom adopcyjnym w adaptacji, rozwiązywanie problemów wychowawczych, wsparcie emocjonalne.",
                    "en" => "Assisting adoptive families in adapting, resolving parenting issues, and providing emotional support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17454,
                "name" => json_encode([
                    "pl" => "Uzupełnianie dokumentacji adopcyjnej, współpraca z sądami i instytucjami w zakresie formalności.",
                    "en" => "Completing adoption documentation, collaborating with courts and institutions on formalities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17455,
                "name" => json_encode([
                    "pl" => "Współpraca z rodziną po adopcji, obserwowanie postępów i rozwoju dziecka.",
                    "en" => "Collaborating with families post-adoption, observing the child's progress and development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17456,
                "name" => json_encode([
                    "pl" => "Archiwizacja dokumentów adopcyjnych, przygotowywanie raportów dla instytucji i sądów.",
                    "en" => "Archiving adoption documents and preparing reports for institutions and courts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SRODOWISKOWI_PRACOWNICY_OCHRONY_ZDROWIA = [

            [
                "id" => 17457,
                "name" => json_encode([
                    "pl" => "Edukacja w zakresie profilaktyki chorób, zdrowego stylu życia i dostępnych świadczeń zdrowotnych.",
                    "en" => "Providing education on disease prevention, healthy lifestyles, and available health services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17458,
                "name" => json_encode([
                    "pl" => "Pomoc w dostępie do świadczeń zdrowotnych, organizacja wizyt domowych.",
                    "en" => "Assisting in accessing health services and organizing home visits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17459,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z ośrodkami zdrowia, placówkami rehabilitacyjnymi i opiekuńczymi.",
                    "en" => "Coordinating activities with health centers, rehabilitation facilities, and care institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17460,
                "name" => json_encode([
                    "pl" => "Ocena potrzeb zdrowotnych w społecznościach lokalnych, doradztwo w zakresie dostępu do opieki medycznej.",
                    "en" => "Assessing health needs in local communities and advising on access to medical care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17461,
                "name" => json_encode([
                    "pl" => "Obserwowanie stanu zdrowia pacjentów, informowanie o zagrożeniach i potrzebach.",
                    "en" => "Monitoring patients' health status and informing about risks and needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17462,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów z przeprowadzonych działań, dokumentacja sytuacji zdrowotnej i socjalnej pacjentów.",
                    "en" => "Preparing reports on conducted activities and documenting the health and social situations of patients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $INSTRUKTOR_TERAPII_UZALEZNIEN = [

            [
                "id" => 17463,
                "name" => json_encode([
                    "pl" => "Wsparcie osób zmagających się z różnymi formami uzależnień, takimi jak alkoholizm, narkomania, hazard.",
                    "en" => "Supporting individuals struggling with various forms of addiction, such as alcoholism, drug addiction, and gambling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17464,
                "name" => json_encode([
                    "pl" => "Dostosowanie programu leczenia do indywidualnych potrzeb pacjenta, opracowywanie strategii wyjścia z uzależnienia.",
                    "en" => "Tailoring treatment programs to the individual needs of the patient and developing strategies for overcoming addiction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17465,
                "name" => json_encode([
                    "pl" => "Przekazywanie pacjentom informacji o wpływie uzależnień na zdrowie fizyczne, psychiczne i życie społeczne.",
                    "en" => "Providing patients with information about the impact of addictions on physical health, mental health, and social life."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17466,
                "name" => json_encode([
                    "pl" => "Nauka technik radzenia sobie ze stresem, wyznaczanie celów i zachęcanie do zdrowego stylu życia.",
                    "en" => "Teaching stress management techniques, goal setting, and encouraging a healthy lifestyle."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17467,
                "name" => json_encode([
                    "pl" => "Obserwacja zmian w zachowaniu pacjenta, prowadzenie dokumentacji i raportowanie postępów.",
                    "en" => "Monitoring changes in patient behavior, maintaining documentation, and reporting progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17468,
                "name" => json_encode([
                    "pl" => "Konsultacje z psychologami, psychiatrą, pracownikami socjalnymi i innymi terapeutami w celu zapewnienia kompleksowej opieki.",
                    "en" => "Consulting with psychologists, psychiatrists, social workers, and other therapists to ensure comprehensive care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ASYSTENT_RODZINY = [

            [
                "id" => 17469,
                "name" => json_encode([
                    "pl" => "Pomoc w organizacji życia codziennego, doradztwo w kwestiach wychowawczych, zarządzanie budżetem domowym.",
                    "en" => "Assisting in organizing daily life, providing advice on parenting, and managing the household budget."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17470,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy rodzicom na temat opieki nad dziećmi, dbania o ich zdrowie, rozwój emocjonalny i społeczny.",
                    "en" => "Educating parents about child care, ensuring their health, emotional development, and social growth."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17471,
                "name" => json_encode([
                    "pl" => "Organizowanie warsztatów i zajęć mających na celu rozwój kompetencji rodzicielskich.",
                    "en" => "Organizing workshops and activities aimed at developing parenting skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17472,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z ośrodkami pomocy społecznej, szkołami, przedszkolami, placówkami opiekuńczymi.",
                    "en" => "Coordinating actions with social welfare centers, schools, kindergartens, and care facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17473,
                "name" => json_encode([
                    "pl" => "Ocena sytuacji rodziny, diagnoza problemów i potrzeb, monitorowanie sytuacji domowej.",
                    "en" => "Assessing the family situation, diagnosing problems and needs, and monitoring the home environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17474,
                "name" => json_encode([
                    "pl" => "Rejestrowanie postępów w pracy z rodziną, sporządzanie raportów dla instytucji pomocowych.",
                    "en" => "Recording progress in working with the family and preparing reports for support institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_OCHRONY_PRAW_DZIECKA_I_RODZINY = [

            [
                "id" => 17475,
                "name" => json_encode([
                    "pl" => "Monitorowanie sytuacji dzieci w rodzinach, zgłaszanie przypadków naruszeń ich praw, interwencje w sytuacjach kryzysowych.",
                    "en" => "Monitoring the situation of children in families, reporting violations of their rights, and intervening in crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17476,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji na temat praw dziecka, pomoc w rozwiązywaniu problemów wychowawczych.",
                    "en" => "Providing information about children's rights and assisting in resolving parenting problems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17477,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów dla sądów, współpraca z ośrodkami pomocy społecznej, szkołami.",
                    "en" => "Preparing reports for courts and cooperating with social welfare centers and schools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17478,
                "name" => json_encode([
                    "pl" => "Organizacja programów mających na celu poprawę sytuacji rodzinnej, profilaktykę przemocy domowej.",
                    "en" => "Organizing programs aimed at improving family situations and preventing domestic violence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17479,
                "name" => json_encode([
                    "pl" => "Pomoc rodzinom w rozwiązywaniu konfliktów, wsparcie w procesie mediacji między rodzicami a dziećmi.",
                    "en" => "Assisting families in resolving conflicts and supporting mediation between parents and children."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17480,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przypadków, przygotowywanie raportów i sprawozdań dla odpowiednich instytucji.",
                    "en" => "Documenting cases, preparing reports, and submitting findings to relevant institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ASYSTENT_OSOBY_NIEPELNOSPRAWNEJ = [

            [
                "id" => 17481,
                "name" => json_encode([
                    "pl" => "Pomoc w wykonywaniu codziennych zadań, takich jak mycie, ubieranie się, przygotowanie posiłków.",
                    "en" => "Assisting with daily tasks such as washing, dressing, and preparing meals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17482,
                "name" => json_encode([
                    "pl" => "Wsparcie w kontaktach z instytucjami, organizacja wizyt lekarskich, pomoc w realizacji spraw administracyjnych.",
                    "en" => "Supporting interactions with institutions, organizing medical appointments, and assisting with administrative tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17483,
                "name" => json_encode([
                    "pl" => "Ułatwianie aktywności społecznych, sportowych i rekreacyjnych, motywowanie do uczestnictwa w zajęciach terapeutycznych.",
                    "en" => "Facilitating social, sports, and recreational activities, and motivating participation in therapeutic sessions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17484,
                "name" => json_encode([
                    "pl" => "Zapewnienie wsparcia emocjonalnego, budowanie poczucia własnej wartości, wsparcie w radzeniu sobie z trudnościami.",
                    "en" => "Providing emotional support, building self-esteem, and helping to cope with difficulties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17485,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z lekarzami, terapeutami i rodziną, aby zapewnić kompleksową opiekę.",
                    "en" => "Coordinating actions with doctors, therapists, and family to ensure comprehensive care."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17486,
                "name" => json_encode([
                    "pl" => "Rejestrowanie postępów, sporządzanie notatek na temat stanu zdrowia i samopoczucia osoby niepełnosprawnej.",
                    "en" => "Recording progress and documenting the health and well-being of the individual with disabilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPIEKUN_OSOBY_STARSZEJ = [

            [
                "id" => 17487,
                "name" => json_encode([
                    "pl" => "Wsparcie w jedzeniu, myciu, ubieraniu, zmianie pozycji, przemieszczaniu się.",
                    "en" => "Assistance with eating, bathing, dressing, repositioning, and mobility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17488,
                "name" => json_encode([
                    "pl" => "Regularna kontrola stanu zdrowia, obserwacja samopoczucia, przypominanie o przyjmowaniu leków.",
                    "en" => "Regular health monitoring, observing well-being, and reminding about taking medications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17489,
                "name" => json_encode([
                    "pl" => "Rozmowa, spędzanie czasu, organizacja aktywności, która poprawia samopoczucie podopiecznego.",
                    "en" => "Conversation, spending time, and organizing activities to enhance the well-being of the individual."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17490,
                "name" => json_encode([
                    "pl" => "Sprzątanie, zakupy, gotowanie, pranie oraz inne obowiązki domowe.",
                    "en" => "Housekeeping, shopping, cooking, laundry, and other household duties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17491,
                "name" => json_encode([
                    "pl" => "Planowanie spacerów, zajęć, aktywizacja seniora poprzez angażowanie go w czynności zgodne z jego zainteresowaniami.",
                    "en" => "Planning walks, activities, and engaging the senior in tasks aligned with their interests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17492,
                "name" => json_encode([
                    "pl" => "Rejestrowanie informacji na temat stanu zdrowia, zachowania oraz potrzeb podopiecznego.",
                    "en" => "Recording information about the health, behavior, and needs of the individual."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPIEKUN_W_DOMU_POMOCY_SPOLECZNEJ = [

            [
                "id" => 17493,
                "name" => json_encode([
                    "pl" => "Wspieranie w higienie osobistej, ubieraniu, przyjmowaniu posiłków, przemieszczaniu się.",
                    "en" => "Assisting with personal hygiene, dressing, eating, and mobility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17494,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć mających na celu aktywizację ruchową, umysłową oraz poprawę samopoczucia.",
                    "en" => "Conducting activities aimed at physical, mental stimulation, and improving well-being."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17495,
                "name" => json_encode([
                    "pl" => "Obserwacja stanu zdrowia, współpraca z personelem medycznym, informowanie o wszelkich zmianach.",
                    "en" => "Monitoring health status, collaborating with medical staff, and reporting any changes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17496,
                "name" => json_encode([
                    "pl" => "Spędzanie czasu z podopiecznymi, dbanie o ich komfort psychiczny, pomoc w adaptacji do życia w ośrodku.",
                    "en" => "Spending time with residents, ensuring their psychological comfort, and helping them adapt to life in the facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17497,
                "name" => json_encode([
                    "pl" => "Wsparcie w podawaniu posiłków, sprzątanie pokoju mieszkańca, dbanie o higienę przestrzeni.",
                    "en" => "Supporting meal service, cleaning the resident's room, and maintaining a hygienic environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17498,
                "name" => json_encode([
                    "pl" => "Sporządzanie zapisów dotyczących opieki nad mieszkańcami, raportowanie do przełożonych i lekarzy.",
                    "en" => "Maintaining records of resident care and reporting to supervisors and doctors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPIEKUNKA_SRODOWISKOWA = [

            [
                "id" => 17499,
                "name" => json_encode([
                    "pl" => "Pomoc w sprzątaniu, gotowaniu, robieniu zakupów, organizowaniu życia domowego.",
                    "en" => "Assisting with cleaning, cooking, shopping, and organizing domestic life."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17500,
                "name" => json_encode([
                    "pl" => "Pomoc podopiecznym w higienie osobistej, zmianie pościeli, ubieraniu, kąpielach.",
                    "en" => "Assisting individuals with personal hygiene, changing bedding, dressing, and bathing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17501,
                "name" => json_encode([
                    "pl" => "Pomoc w realizacji spraw administracyjnych, organizacja wizyt lekarskich.",
                    "en" => "Assisting with administrative tasks and organizing medical appointments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17502,
                "name" => json_encode([
                    "pl" => "Zachęcanie podopiecznych do uczestniczenia w zajęciach społecznych, spacerach, innych aktywnościach.",
                    "en" => "Encouraging individuals to participate in social activities, walks, and other engagements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17503,
                "name" => json_encode([
                    "pl" => "Zapewnienie towarzystwa, rozmawianie o problemach, dbanie o dobre samopoczucie podopiecznego.",
                    "en" => "Providing companionship, discussing issues, and ensuring the well-being of the individual."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17504,
                "name" => json_encode([
                    "pl" => "Zapisywanie informacji o stanie zdrowia, zachowaniu oraz potrzebach podopiecznego.",
                    "en" => "Recording information about the individual's health, behavior, and needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNICY_DOMOWEJ_OPIEKI_OSOBISTEJ = [

            [
                "id" => 17505,
                "name" => json_encode([
                    "pl" => "Asystowanie w kąpielach, ubieraniu, utrzymaniu higieny osobistej.",
                    "en" => "Assisting with bathing, dressing, and maintaining personal hygiene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17506,
                "name" => json_encode([
                    "pl" => "Pomoc w sprzątaniu, przygotowywaniu posiłków, praniu, zakupach.",
                    "en" => "Helping with cleaning, meal preparation, laundry, and shopping."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17507,
                "name" => json_encode([
                    "pl" => "Pomoc w przyjmowaniu leków zgodnie z zaleceniami lekarza.",
                    "en" => "Assisting with taking medications as prescribed by a doctor."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17508,
                "name" => json_encode([
                    "pl" => "Rozmowa, spędzanie czasu z podopiecznym, wspieranie w trudnych chwilach.",
                    "en" => "Engaging in conversation, spending time with the individual, and providing support during difficult times."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17509,
                "name" => json_encode([
                    "pl" => "Planowanie spacerów, zajęć rekreacyjnych i innych aktywności dla podopiecznego.",
                    "en" => "Planning walks, recreational activities, and other engagements for the individual."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17510,
                "name" => json_encode([
                    "pl" => "Rejestrowanie informacji dotyczących stanu zdrowia i potrzeb podopiecznego.",
                    "en" => "Recording information regarding the individual's health and needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POMOCNICZY_PERSONEL_MEDYCZNY = [

            [
                "id" => 17511,
                "name" => json_encode([
                    "pl" => "Pomoc pielęgniarkom i lekarzom w codziennych zadaniach, przygotowanie sprzętu medycznego.",
                    "en" => "Assisting nurses and doctors with daily tasks and preparing medical equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17512,
                "name" => json_encode([
                    "pl" => "Asystowanie przy kąpieli, ubieraniu, karmieniu, przenoszeniu pacjentów.",
                    "en" => "Assisting with bathing, dressing, feeding, and transferring patients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17513,
                "name" => json_encode([
                    "pl" => "Dezynfekcja i sprzątanie stanowisk pracy, dbanie o higienę otoczenia pacjentów.",
                    "en" => "Disinfecting and cleaning workstations, maintaining the hygiene of the patient environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17514,
                "name" => json_encode([
                    "pl" => "Pomoc w transporcie pacjentów na badania diagnostyczne i zabiegi medyczne.",
                    "en" => "Assisting in transporting patients to diagnostic tests and medical procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17515,
                "name" => json_encode([
                    "pl" => "Wspieranie w prostych zadaniach, takich jak podawanie jedzenia, zmiana bielizny pościelowej.",
                    "en" => "Supporting simple tasks such as serving meals and changing bed linen."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17516,
                "name" => json_encode([
                    "pl" => "Rejestrowanie czynności związanych z opieką nad pacjentem, raportowanie do przełożonych.",
                    "en" => "Recording care-related activities and reporting to supervisors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OSOBY_DO_TOWARZYSTWA = [

            [
                "id" => 17517,
                "name" => json_encode([
                    "pl" => "Spędzanie czasu z podopiecznym, rozmowa, wspólne wykonywanie aktywności.",
                    "en" => "Spending time with the individual, engaging in conversation, and participating in shared activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17518,
                "name" => json_encode([
                    "pl" => "Planowanie spacerów, wizyt w miejscach publicznych, wspólnych zajęć zgodnych z zainteresowaniami podopiecznego.",
                    "en" => "Planning walks, visits to public places, and activities aligned with the individual's interests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17519,
                "name" => json_encode([
                    "pl" => "Rozmowa, pomoc w radzeniu sobie z problemami, troska o samopoczucie.",
                    "en" => "Engaging in conversation, helping with problem-solving, and ensuring emotional well-being."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17520,
                "name" => json_encode([
                    "pl" => "Pomoc w organizacji codziennych obowiązków, takich jak zakupy, przygotowanie prostych posiłków.",
                    "en" => "Assisting with daily tasks such as shopping and preparing simple meals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17521,
                "name" => json_encode([
                    "pl" => "Towarzyszenie podopiecznym w wizytach u lekarza, spotkaniach towarzyskich.",
                    "en" => "Accompanying individuals to medical appointments and social gatherings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17522,
                "name" => json_encode([
                    "pl" => "Rejestrowanie informacji dotyczących stanu zdrowia, zachowania i potrzeb podopiecznego.",
                    "en" => "Recording information about the individual's health, behavior, and needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $OPIEKUNKA_DZIECIECA = [
            [
                "id" => 17523,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa, dbanie o higienę, zdrowie i komfort dzieci.",
                    "en" => "Ensuring safety, hygiene, health, and comfort of children."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17524,
                "name" => json_encode([
                    "pl" => "Prowadzenie zajęć stymulujących rozwój intelektualny, fizyczny i emocjonalny dzieci.",
                    "en" => "Conducting activities that stimulate children's intellectual, physical, and emotional development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17525,
                "name" => json_encode([
                    "pl" => "Pomoc w nauce, rozwijanie umiejętności poznawczych, motorycznych, społecznych.",
                    "en" => "Assisting with learning and developing cognitive, motor, and social skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17526,
                "name" => json_encode([
                    "pl" => "Przygotowywanie zdrowych posiłków, uwzględnianie zaleceń dietetycznych.",
                    "en" => "Preparing healthy meals, considering dietary recommendations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17527,
                "name" => json_encode([
                    "pl" => "Sporządzanie notatek o postępach, zachowaniu i rozwoju dziecka.",
                    "en" => "Keeping notes on the child's progress, behavior, and development."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 17528,
                "name" => json_encode([
                    "pl" => "Regularna komunikacja z rodzicami w celu dostosowania opieki do potrzeb i oczekiwań dotyczących dziecka.",
                    "en" => "Maintaining regular communication with parents to tailor care to the child's needs and expectations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];



        DB::table('detail_projects')->insert(array_merge(
            $LEKARZE_BEZ_SPECJALIZACJI,
            $LEKARZ_SPECJALISTA_ALERGOLOGII,
            $LEKARZ_SPECJALISTA_ANESTEZJOLOGII_INTENSYWNEJ_TERAPII,
            $LEKARZ_SPECJALISTA_ANGIOLOGII,
            $LEKARZ_SPECJALISTA_AUDIOLOGII_I_FONIATRII,
            $LEKARZ_SPECJALISTA_BALNEOLOGII_I_MEDYCYNY_FIZYKALNEJ,
            $LEKARZ_SPECJALISTA_CHIRURGII_DZIECIĘCEJ,
            $LEKARZ_SPECJALISTA_CHIRURGII_KLATKI_PIERSIOWEJ,
            $LEKARZ_SPECJALISTA_CHIRURGII_NACZYNIOWEJ,
            $LEKARZ_SPECJALISTA_CHIRURGII_OGOLNEJ,
            $LEKARZ_SPECJALISTA_CHIRURGII_ONKOLOGICZNEJ,
            $LEKARZ_SPECJALISTA_CHIRURGII_PLASTYCZNEJ,
            $LEKARZ_SPECJALISTA_CHIRURGII_SZCZEKOWO_TWARZOWEJ,
            $LEKARZ_SPECJALISTA_CHOROB_PLUC,
            $LEKARZ_SPECJALISTA_CHOROB_WEWNETRZNYCH,
            $LEKARZ_SPECJALISTA_CHOROB_ZAKAZNYCH,
            $LEKARZ_SPECJALISTA_DERMATOLOGII_I_WENEROLOGII,
            $LEKARZ_SPECJALISTA_DIABETOLOGII,
            $LEKARZ_SPECJALISTA_DIAGNOSTYKI_LABORATORYJNEJ,
            $LEKARZ_SPECJALISTA_ENDOKRYNOLOGII,
            $LEKARZ_SPECJALISTA_EPIDEMIOLOGII,
            $LEKARZ_SPECJALISTA_FARMAKOLOGII_KLINICZNEJ,
            $LEKARZ_SPECJALISTA_GASTROENTEROLOGII,
            $LEKARZ_SPECJALISTA_GENETYKI_KLINICZNEJ,
            $LEKARZ_SPECJALISTA_GERIATRII,
            $LEKARZ_SPECJALISTA_GINEKOLOGII_ONKOLOGICZNEJ,
            $LEKARZ_SPECJALISTA_HEMATOLOGII,
            $LEKARZ_SPECJALISTA_HIPERTENSJOLOGII,
            $LEKARZ_SPECJALISTA_IMMUNOLOGII_KLINICZNEJ,
            $LEKARZ_SPECJALISTA_KARDIOCHIRURGII,
            $LEKARZ_SPECJALISTA_KARDIOLOGII,
            $LEKARZ_SPECJALISTA_KARDIOLOGII_DZIECIĘCEJ,
            $LEKARZ_SPECJALISTA_MEDYCYNY_NUKLEARNEJ,
            $LEKARZ_SPECJALISTA_MEDYCYNY_PALIATYWNEJ,
            $LEKARZ_SPECJALISTA_MEDYCYNY_PRACY,
            $LEKARZ_SPECJALISTA_MEDYCYNY_RATUNKOWEJ,
            $LEKARZ_SPECJALISTA_MEDYCYNY_RODZINNEJ,
            $LEKARZ_SPECJALISTA_MEDYCYNY_SADOWEJ,
            $LEKARZ_SPECJALISTA_MEDYCYNY_SPORTOWEJ,
            $LEKARZ_SPECJALISTA_MEDYCYNY_TRANSPORTU,
            $LEKARZ_SPECJALISTA_MIKROBIOLOGII_LEKARSKIEJ,
            $LEKARZ_SPECJALISTA_NEFROLOGII,
            $LEKARZ_SPECJALISTA_NEONATOLOGII,
            $LEKARZ_SPECJALISTA_NEUROCHIRURGII,
            $LEKARZ_SPECJALISTA_NEUROLOGII,
            $LEKARZ_SPECJALISTA_NEUROLOGII_DZIECIĘCEJ,
            $LEKARZ_SPECJALISTA_NEUROPATOLOGII,
            $LEKARZ_SPECJALISTA_OKULISTYKI,
            $LEKARZ_SPECJALISTA_ONKOLOGII_I_HEMATOLOGII_DZIECIECEJ,
            $LEKARZ_SPECJALISTA_ONKOLOGII_KLINICZNEJ,
            $LEKARZ_SPECJALISTA_ORTOPEDII_I_TRAUMATOLOGII_NARZADU_RUCHU,
            $LEKARZ_SPECJALISTA_OTORYNOLARYNGOLOGII,
            $LEKARZ_SPECJALISTA_PATOMORFOLOGII,
            $LEKARZ_SPECJALISTA_PEDIATRII,
            $LEKARZ_SPECJALISTA_POLOZNICTWA_I_GINEKOLOGII,
            $LEKARZ_SPECJALISTA_PSYCHIATRII,
            $LEKARZ_SPECJALISTA_PSYCHIATRII_DZIECI_I_MLODZIEZY,
            $LEKARZ_SPECJALISTA_RADIOLOGII_I_DIAGNOSTYKI_OBRAZOWEJ,
            $LEKARZ_SPECJALISTA_RADIOTERAPII_ONKOLOGICZNEJ,
            $LEKARZ_SPECJALISTA_REHABILITACJI_MEDYCZNEJ,
            $LEKARZ_SPECJALISTA_REUMATOLOGII,
            $LEKARZ_SPECJALISTA_SEKSUOLOGII,
            $LEKARZ_SPECJALISTA_TOKSYKOLOGII_KLINICZNEJ,
            $LEKARZ_SPECJALISTA_TRANSFUZJOLOGII_KLINICZNEJ,
            $LEKARZ_SPECJALISTA_TRANSPLANTOLOGII_KLINICZNEJ,
            $LEKARZ_SPECJALISTA_UROLOGII,
            $LEKARZ_SPECJALISTA_UROLOGII_DZIECIECEJ,
            $LEKARZ_SPECJALISTA_ZDROWIA_PUBLICZNEGO,
            $LEKARZ_SPECJALISTA_CHOROB_PLUC_DZIECI,
            $LEKARZ_SPECJALISTA_ENDOKRYNOLOGII_GINEKOLOGICZNEJ_I_ROZRODCZOSCI,
            $LEKARZ_SPECJALISTA_ENDOKRYNOLOGII_I_DIABETOLOGII_DZIECIECEJ,
            $LEKARZ_SPECJALISTA_GASTROENTEROLOGII_DZIECIECEJ,
            $LEKARZ_SPECJALISTA_INTENSYWNEJ_TERAPII,
            $LEKARZ_SPECJALISTA_MEDYCYNY_LOTNICZEJ,
            $LEKARZ_SPECJALISTA_MEDYCYNY_MORSKIEJ_I_TROPIKALNEJ,
            $LEKARZ_SPECJALISTA_NEFROLOGII_DZIECIECEJ,
            $LEKARZ_SPECJALISTA_PEDIATRII_METABOLICZNEJ,
            $LEKARZ_SPECJALISTA_PERINATOLOGII,
            $LEKARZ_ORDYNATOR_ODDZIALU,
            $PIELEGNIARKA_ODDZIALOWA,
            $POLOZNA_ODDZIALOWA,
            $PIELĘGNIARKI_BEZ_SPECJALIZACJI_LUB_W_TRAKCIE_SPECJALIZACJI,
            $PIELEGNIARKI_Z_TYTULEM_SPECJALISTY,
            $POLOZNE_BEZ_SPECJALIZACJI_LUB_W_TRAKCIE_SPECJALIZACJI,
            $POLOZNE_Z_TYTULEM_SPECJALISTY,
            $HIGIENISTKA_SZKOLNA,
            $LEKARZE_DENTYSCI_BEZ_SPECJALIZACJI_LUB_W_TRAKCIE_SPECJALIZACJI,
            $LEKARZ_DENTYSTA_SPECJALISTA_CHIRURGII_STOMATOLOGICZNEJ,
            $LEKARZ_DENTYSTA_SPECJALISTA_CHIRURGII_SZCZEKOWO_TWARZOWEJ,
            $LEKARZ_DENTYSTA_SPECJALISTA_EPIDEMIOLOGII,
            $LEKARZ_DENTYSTA_SPECJALISTA_ORTODONCJI,
            $LEKARZ_DENTYSTA_SPECJALISTA_PERIODONTOLOGII,
            $LEKARZ_DENTYSTA_SPECJALISTA_PROTETYKI_STOMATOLOGICZNEJ,
            $LEKARZ_DENTYSTA_SPECJALISTA_STOMATOLOGII_DZIECIECEJ,
            $LEKARZ_DENTYSTA_SPECJALISTA_STOMATOLOGII_ZACHOWAWCZEJ_Z_ENDODONCJA,
            $LEKARZ_DENTYSTA_SPECJALISTA_ZDROWIA_PUBLICZNEGO,
            $TECHNIK_DENTYSTYCZNY,
            $ASYSTENCI_DENTYSTYCZNI,
            $POMOC_DENTYSTYCZNA,
            $SPECJALISTA_DO_SPRAW_TECHNIKI_DENTYSTYCZNEJ,
            $FARMACEUCI_BEZ_SPECJALIZACJI_LUB_W_TRAKCIE_SPECJALIZACJI,
            $TECHNICY_FARMACEUTYCZNI,
            $FARMACEUCI_SPECJALISCI,
            $OPERATORZY_APARATURY_MEDYCZNEJ,
            $ZABIEGOWY_BALNEOLOGICZNY,
            $TECHNIK_ELEKTRONIKI_MEDYCZNEJ,
            $SERWISANT_URZADZEN_MEDYCZNYCH,
            $SPECJALISTA_RADIOFARMACJI,
            $SPECJALISTA_INZYNIERII_MEDYCZNEJ,
            $ELEKTRORADIOLOG,
            $MONTER_URZADZEN_MEDYCZNYCH,
            $RATOWNICY_MEDYCZNI,
            $SANITARIUSZ_SZPITALNY,
            $SPECJALISCI_DO_SPRAW_RATOWNICTWA_MEDYCZNEGO,
            $FIZJOTERAPEUCI,
            $TECHNIK_FIZJOTERAPII,
            $TECHNIK_MASAZYSTA,
            $PSYCHOTERAPEUTA,
            $PSYCHOLOG,
            $SPECJALISTA_PSYCHOTERAPII_UZALEZNIEN,
            $SPECJALISTA_TERAPII_UZALEZNIEN,
            $PSYCHOONKOLOG,
            $PSYCHOTRAUMATOLOG,
            $MEDIATOR,
            $MEDIATOR_SADOWY,
            $SPECJALISTA_KOMUNIKACJI_SPOLECZNEJ,
            $TERAPEUTA_ZAJECIOWY,
            $ARTETERAPEUTA,
            $NAUCZYCIEL_PSYCHOLOG,
            $INSTRUKTOR_HIPOTERAPII,
            $KYNOTERAPEUTA_DOGOTERAPEUTA,
            $NAUCZYCIEL_LOGOPEDA,
            $AUDIOFONOLODZY_I_LOGOPEDZI,
            $DIAGNOSCI_LABORATORYJNI_SPECJALISCI,
            $DIAGNOSCI_LABORATORYJNI_BEZ_SPECJALIZACJI_LUB_W_TRAKCIE_SPECJALIZACJI,
            $TECHNICY_ANALITYKI_MEDYCZNEJ,
            $OPTOMETRYSCI,
            $PROTETYK_SLUCHU,
            $TECHNIK_ORTOPEDA,
            $OPTYCY_OKULAROWI,
            $ORTOPTYSTKA,
            $ORTOPEDA_MECHANIK,
            $INZYNIER_OPTYK,
            $PRACOWNIK_SOCJALNY,
            $SPECJALISTA_PRACY_SOCJALNEJ,
            $SPECJALISTA_RESOCJALIZACJI,
            $KURATOR_SADOWY,
            $SPECJALISTA_PORADNICTWA_PSYCHOSPOLECZNEGO_I_RODZINNEGO,
            $KOORDYNATOR_RODZINNEJ_PIECZY_ZASTEPCZEJ,
            $SPECJALISTA_DO_SPRAW_ADOPCJI,
            $SRODOWISKOWI_PRACOWNICY_OCHRONY_ZDROWIA,
            $INSTRUKTOR_TERAPII_UZALEZNIEN,
            $ASYSTENT_RODZINY,
            $SPECJALISTA_DO_SPRAW_OCHRONY_PRAW_DZIECKA_I_RODZINY,
            $ASYSTENT_OSOBY_NIEPELNOSPRAWNEJ,
            $OPIEKUN_OSOBY_STARSZEJ,
            $OPIEKUN_W_DOMU_POMOCY_SPOLECZNEJ,
            $OPIEKUNKA_SRODOWISKOWA,
            $PRACOWNICY_DOMOWEJ_OPIEKI_OSOBISTEJ,
            $POMOCNICZY_PERSONEL_MEDYCZNY,
            $OSOBY_DO_TOWARZYSTWA,
            $OPIEKUNKA_DZIECIECA
        ));

        Category::whereId('628')->first()->detailprojects()->attach(collect($LEKARZE_BEZ_SPECJALIZACJI)->pluck('id')->toArray());
        Category::whereId('632')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_ALERGOLOGII)->pluck('id')->toArray());
        Category::whereId('633')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_ANESTEZJOLOGII_INTENSYWNEJ_TERAPII)->pluck('id')->toArray());
        Category::whereId('634')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_ANGIOLOGII)->pluck('id')->toArray());
        Category::whereId('635')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_AUDIOLOGII_I_FONIATRII)->pluck('id')->toArray());
        Category::whereId('636')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_BALNEOLOGII_I_MEDYCYNY_FIZYKALNEJ)->pluck('id')->toArray());
        Category::whereId('637')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_CHIRURGII_DZIECIĘCEJ)->pluck('id')->toArray());
        Category::whereId('638')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_CHIRURGII_KLATKI_PIERSIOWEJ)->pluck('id')->toArray());
        Category::whereId('639')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_CHIRURGII_NACZYNIOWEJ)->pluck('id')->toArray());
        Category::whereId('640')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_CHIRURGII_OGOLNEJ)->pluck('id')->toArray());
        Category::whereId('641')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_CHIRURGII_ONKOLOGICZNEJ)->pluck('id')->toArray());
        Category::whereId('642')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_CHIRURGII_PLASTYCZNEJ)->pluck('id')->toArray());
        Category::whereId('643')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_CHIRURGII_SZCZEKOWO_TWARZOWEJ)->pluck('id')->toArray());
        Category::whereId('644')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_CHOROB_PLUC)->pluck('id')->toArray());
        Category::whereId('645')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_CHOROB_WEWNETRZNYCH)->pluck('id')->toArray());
        Category::whereId('646')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_CHOROB_ZAKAZNYCH)->pluck('id')->toArray());
        Category::whereId('647')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_DERMATOLOGII_I_WENEROLOGII)->pluck('id')->toArray());
        Category::whereId('648')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_DIABETOLOGII)->pluck('id')->toArray());
        Category::whereId('649')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_DIAGNOSTYKI_LABORATORYJNEJ)->pluck('id')->toArray());
        Category::whereId('650')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_ENDOKRYNOLOGII)->pluck('id')->toArray());
        Category::whereId('651')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_EPIDEMIOLOGII)->pluck('id')->toArray());
        Category::whereId('652')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_EPIDEMIOLOGII)->pluck('id')->toArray());
        Category::whereId('652')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_FARMAKOLOGII_KLINICZNEJ)->pluck('id')->toArray());
        Category::whereId('653')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_GASTROENTEROLOGII)->pluck('id')->toArray());
        Category::whereId('654')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_GENETYKI_KLINICZNEJ)->pluck('id')->toArray());
        Category::whereId('655')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_GERIATRII)->pluck('id')->toArray());
        Category::whereId('656')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_GINEKOLOGII_ONKOLOGICZNEJ)->pluck('id')->toArray());
        Category::whereId('657')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_HEMATOLOGII)->pluck('id')->toArray());
        Category::whereId('658')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_HIPERTENSJOLOGII)->pluck('id')->toArray());
        Category::whereId('659')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_IMMUNOLOGII_KLINICZNEJ)->pluck('id')->toArray());
        Category::whereId('660')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_KARDIOCHIRURGII)->pluck('id')->toArray());
        Category::whereId('661')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_KARDIOLOGII)->pluck('id')->toArray());
        Category::whereId('662')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_KARDIOLOGII_DZIECIĘCEJ)->pluck('id')->toArray());
        Category::whereId('663')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_MEDYCYNY_NUKLEARNEJ)->pluck('id')->toArray());
        Category::whereId('664')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_MEDYCYNY_PALIATYWNEJ)->pluck('id')->toArray());
        Category::whereId('665')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_MEDYCYNY_PRACY)->pluck('id')->toArray());
        Category::whereId('666')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_MEDYCYNY_RATUNKOWEJ)->pluck('id')->toArray());
        Category::whereId('667')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_MEDYCYNY_RODZINNEJ)->pluck('id')->toArray());
        Category::whereId('668')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_MEDYCYNY_SADOWEJ)->pluck('id')->toArray());
        Category::whereId('669')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_MEDYCYNY_SPORTOWEJ)->pluck('id')->toArray());
        Category::whereId('670')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_MEDYCYNY_TRANSPORTU)->pluck('id')->toArray());
        Category::whereId('671')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_MIKROBIOLOGII_LEKARSKIEJ)->pluck('id')->toArray());
        Category::whereId('672')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_NEFROLOGII)->pluck('id')->toArray());
        Category::whereId('673')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_NEONATOLOGII)->pluck('id')->toArray());
        Category::whereId('674')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_NEUROCHIRURGII)->pluck('id')->toArray());
        Category::whereId('675')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_NEUROLOGII)->pluck('id')->toArray());
        Category::whereId('676')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_NEUROLOGII_DZIECIĘCEJ)->pluck('id')->toArray());
        Category::whereId('677')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_NEUROPATOLOGII)->pluck('id')->toArray());
        Category::whereId('678')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_OKULISTYKI)->pluck('id')->toArray());
        Category::whereId('679')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_ONKOLOGII_I_HEMATOLOGII_DZIECIECEJ)->pluck('id')->toArray());
        Category::whereId('680')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_ONKOLOGII_KLINICZNEJ)->pluck('id')->toArray());
        Category::whereId('681')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_ORTOPEDII_I_TRAUMATOLOGII_NARZADU_RUCHU)->pluck('id')->toArray());
        Category::whereId('682')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_OTORYNOLARYNGOLOGII)->pluck('id')->toArray());
        Category::whereId('684')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_PATOMORFOLOGII)->pluck('id')->toArray());
        Category::whereId('685')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_PEDIATRII)->pluck('id')->toArray());
        Category::whereId('686')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_POLOZNICTWA_I_GINEKOLOGII)->pluck('id')->toArray());
        Category::whereId('687')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_PSYCHIATRII)->pluck('id')->toArray());
        Category::whereId('688')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_PSYCHIATRII_DZIECI_I_MLODZIEZY)->pluck('id')->toArray());
        Category::whereId('689')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_RADIOLOGII_I_DIAGNOSTYKI_OBRAZOWEJ)->pluck('id')->toArray());
        Category::whereId('690')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_RADIOTERAPII_ONKOLOGICZNEJ)->pluck('id')->toArray());
        Category::whereId('691')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_REHABILITACJI_MEDYCZNEJ)->pluck('id')->toArray());
        Category::whereId('692')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_REUMATOLOGII)->pluck('id')->toArray());
        Category::whereId('693')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_SEKSUOLOGII)->pluck('id')->toArray());
        Category::whereId('694')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_TOKSYKOLOGII_KLINICZNEJ)->pluck('id')->toArray());
        Category::whereId('695')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_TRANSFUZJOLOGII_KLINICZNEJ)->pluck('id')->toArray());
        Category::whereId('696')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_TRANSPLANTOLOGII_KLINICZNEJ)->pluck('id')->toArray());
        Category::whereId('697')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_UROLOGII)->pluck('id')->toArray());
        Category::whereId('698')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_UROLOGII_DZIECIECEJ)->pluck('id')->toArray());
        Category::whereId('699')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_ZDROWIA_PUBLICZNEGO)->pluck('id')->toArray());
        Category::whereId('700')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_CHOROB_PLUC_DZIECI)->pluck('id')->toArray());
        Category::whereId('701')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_ENDOKRYNOLOGII_GINEKOLOGICZNEJ_I_ROZRODCZOSCI)->pluck('id')->toArray());
        Category::whereId('702')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_ENDOKRYNOLOGII_I_DIABETOLOGII_DZIECIECEJ)->pluck('id')->toArray());
        Category::whereId('703')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_GASTROENTEROLOGII_DZIECIECEJ)->pluck('id')->toArray());
        Category::whereId('704')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_INTENSYWNEJ_TERAPII)->pluck('id')->toArray());
        Category::whereId('705')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_MEDYCYNY_LOTNICZEJ)->pluck('id')->toArray());
        Category::whereId('706')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_MEDYCYNY_MORSKIEJ_I_TROPIKALNEJ)->pluck('id')->toArray());
        Category::whereId('707')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_NEFROLOGII_DZIECIECEJ)->pluck('id')->toArray());
        Category::whereId('708')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_PEDIATRII_METABOLICZNEJ)->pluck('id')->toArray());
        Category::whereId('709')->first()->detailprojects()->attach(collect($LEKARZ_SPECJALISTA_PERINATOLOGII)->pluck('id')->toArray());
        Category::whereId('711')->first()->detailprojects()->attach(collect($LEKARZ_ORDYNATOR_ODDZIALU)->pluck('id')->toArray());
        Category::whereId('713')->first()->detailprojects()->attach(collect($PIELEGNIARKA_ODDZIALOWA)->pluck('id')->toArray());
        Category::whereId('714')->first()->detailprojects()->attach(collect($POLOZNA_ODDZIALOWA)->pluck('id')->toArray());
        Category::whereId('715')->first()->detailprojects()->attach(collect($PIELĘGNIARKI_BEZ_SPECJALIZACJI_LUB_W_TRAKCIE_SPECJALIZACJI)->pluck('id')->toArray());
        Category::whereId('716')->first()->detailprojects()->attach(collect($PIELEGNIARKI_Z_TYTULEM_SPECJALISTY)->pluck('id')->toArray());
        Category::whereId('740')->first()->detailprojects()->attach(collect($POLOZNE_BEZ_SPECJALIZACJI_LUB_W_TRAKCIE_SPECJALIZACJI)->pluck('id')->toArray());
        Category::whereId('741')->first()->detailprojects()->attach(collect($POLOZNE_Z_TYTULEM_SPECJALISTY)->pluck('id')->toArray());
        Category::whereId('751')->first()->detailprojects()->attach(collect($HIGIENISTKA_SZKOLNA)->pluck('id')->toArray());
        Category::whereId('753')->first()->detailprojects()->attach(collect($LEKARZE_DENTYSCI_BEZ_SPECJALIZACJI_LUB_W_TRAKCIE_SPECJALIZACJI)->pluck('id')->toArray());
        Category::whereId('756')->first()->detailprojects()->attach(collect($LEKARZ_DENTYSTA_SPECJALISTA_CHIRURGII_STOMATOLOGICZNEJ)->pluck('id')->toArray());
        Category::whereId('758')->first()->detailprojects()->attach(collect($LEKARZ_DENTYSTA_SPECJALISTA_CHIRURGII_SZCZEKOWO_TWARZOWEJ)->pluck('id')->toArray());
        Category::whereId('759')->first()->detailprojects()->attach(collect($LEKARZ_DENTYSTA_SPECJALISTA_EPIDEMIOLOGII)->pluck('id')->toArray());
        Category::whereId('760')->first()->detailprojects()->attach(collect($LEKARZ_DENTYSTA_SPECJALISTA_ORTODONCJI)->pluck('id')->toArray());
        Category::whereId('761')->first()->detailprojects()->attach(collect($LEKARZ_DENTYSTA_SPECJALISTA_PERIODONTOLOGII)->pluck('id')->toArray());
        Category::whereId('762')->first()->detailprojects()->attach(collect($LEKARZ_DENTYSTA_SPECJALISTA_PROTETYKI_STOMATOLOGICZNEJ)->pluck('id')->toArray());
        Category::whereId('763')->first()->detailprojects()->attach(collect($LEKARZ_DENTYSTA_SPECJALISTA_STOMATOLOGII_DZIECIECEJ)->pluck('id')->toArray());
        Category::whereId('764')->first()->detailprojects()->attach(collect($LEKARZ_DENTYSTA_SPECJALISTA_STOMATOLOGII_ZACHOWAWCZEJ_Z_ENDODONCJA)->pluck('id')->toArray());
        Category::whereId('765')->first()->detailprojects()->attach(collect($LEKARZ_DENTYSTA_SPECJALISTA_ZDROWIA_PUBLICZNEGO)->pluck('id')->toArray());
        Category::whereId('768')->first()->detailprojects()->attach(collect($TECHNIK_DENTYSTYCZNY)->pluck('id')->toArray());
        Category::whereId('769')->first()->detailprojects()->attach(collect($ASYSTENCI_DENTYSTYCZNI)->pluck('id')->toArray());
        Category::whereId('773')->first()->detailprojects()->attach(collect($POMOC_DENTYSTYCZNA)->pluck('id')->toArray());
        Category::whereId('774')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_TECHNIKI_DENTYSTYCZNEJ)->pluck('id')->toArray());
        Category::whereId('776')->first()->detailprojects()->attach(collect($FARMACEUCI_BEZ_SPECJALIZACJI_LUB_W_TRAKCIE_SPECJALIZACJI)->pluck('id')->toArray());
        Category::whereId('777')->first()->detailprojects()->attach(collect($TECHNICY_FARMACEUTYCZNI)->pluck('id')->toArray());
        Category::whereId('778')->first()->detailprojects()->attach(collect($FARMACEUCI_SPECJALISCI)->pluck('id')->toArray());
        Category::whereId('794')->first()->detailprojects()->attach(collect($OPERATORZY_APARATURY_MEDYCZNEJ)->pluck('id')->toArray());
        Category::whereId('800')->first()->detailprojects()->attach(collect($ZABIEGOWY_BALNEOLOGICZNY)->pluck('id')->toArray());
        Category::whereId('801')->first()->detailprojects()->attach(collect($TECHNIK_ELEKTRONIKI_MEDYCZNEJ)->pluck('id')->toArray());
        Category::whereId('802')->first()->detailprojects()->attach(collect($SERWISANT_URZADZEN_MEDYCZNYCH)->pluck('id')->toArray());
        Category::whereId('803')->first()->detailprojects()->attach(collect($SPECJALISTA_RADIOFARMACJI)->pluck('id')->toArray());
        Category::whereId('804')->first()->detailprojects()->attach(collect($SPECJALISTA_INZYNIERII_MEDYCZNEJ)->pluck('id')->toArray());
        Category::whereId('805')->first()->detailprojects()->attach(collect($ELEKTRORADIOLOG)->pluck('id')->toArray());
        Category::whereId('806')->first()->detailprojects()->attach(collect($MONTER_URZADZEN_MEDYCZNYCH)->pluck('id')->toArray());
        Category::whereId('808')->first()->detailprojects()->attach(collect($RATOWNICY_MEDYCZNI)->pluck('id')->toArray());
        Category::whereId('809')->first()->detailprojects()->attach(collect($SANITARIUSZ_SZPITALNY)->pluck('id')->toArray());
        Category::whereId('810')->first()->detailprojects()->attach(collect($SPECJALISCI_DO_SPRAW_RATOWNICTWA_MEDYCZNEGO)->pluck('id')->toArray());
        Category::whereId('812')->first()->detailprojects()->attach(collect($FIZJOTERAPEUCI)->pluck('id')->toArray());
        Category::whereId('816')->first()->detailprojects()->attach(collect($TECHNIK_FIZJOTERAPII )->pluck('id')->toArray());
        Category::whereId('817')->first()->detailprojects()->attach(collect($TECHNIK_MASAZYSTA  )->pluck('id')->toArray());
        Category::whereId('819')->first()->detailprojects()->attach(collect($PSYCHOTERAPEUTA)->pluck('id')->toArray());
        Category::whereId('821')->first()->detailprojects()->attach(collect($PSYCHOLOG)->pluck('id')->toArray());
        Category::whereId('831')->first()->detailprojects()->attach(collect($SPECJALISTA_PSYCHOTERAPII_UZALEZNIEN)->pluck('id')->toArray());
        Category::whereId('832')->first()->detailprojects()->attach(collect($SPECJALISTA_TERAPII_UZALEZNIEN)->pluck('id')->toArray());
        Category::whereId('833')->first()->detailprojects()->attach(collect($PSYCHOONKOLOG)->pluck('id')->toArray());
        Category::whereId('834')->first()->detailprojects()->attach(collect($PSYCHOTRAUMATOLOG)->pluck('id')->toArray());
        Category::whereId('835')->first()->detailprojects()->attach(collect($MEDIATOR)->pluck('id')->toArray());
        Category::whereId('836')->first()->detailprojects()->attach(collect($MEDIATOR_SADOWY)->pluck('id')->toArray());
        Category::whereId('837')->first()->detailprojects()->attach(collect($SPECJALISTA_KOMUNIKACJI_SPOLECZNEJ)->pluck('id')->toArray());
        Category::whereId('838')->first()->detailprojects()->attach(collect($TERAPEUTA_ZAJECIOWY)->pluck('id')->toArray());
        Category::whereId('839')->first()->detailprojects()->attach(collect($ARTETERAPEUTA)->pluck('id')->toArray());
        Category::whereId('840')->first()->detailprojects()->attach(collect($NAUCZYCIEL_PSYCHOLOG)->pluck('id')->toArray());
        Category::whereId('841')->first()->detailprojects()->attach(collect($INSTRUKTOR_HIPOTERAPII)->pluck('id')->toArray());
        Category::whereId('842')->first()->detailprojects()->attach(collect($KYNOTERAPEUTA_DOGOTERAPEUTA)->pluck('id')->toArray());
        Category::whereId('844')->first()->detailprojects()->attach(collect($NAUCZYCIEL_LOGOPEDA)->pluck('id')->toArray());
        Category::whereId('845')->first()->detailprojects()->attach(collect($AUDIOFONOLODZY_I_LOGOPEDZI)->pluck('id')->toArray());
        Category::whereId('852')->first()->detailprojects()->attach(collect($DIAGNOSCI_LABORATORYJNI_SPECJALISCI )->pluck('id')->toArray());
        Category::whereId('868')->first()->detailprojects()->attach(collect($DIAGNOSCI_LABORATORYJNI_BEZ_SPECJALIZACJI_LUB_W_TRAKCIE_SPECJALIZACJI )->pluck('id')->toArray());
        Category::whereId('869')->first()->detailprojects()->attach(collect($TECHNICY_ANALITYKI_MEDYCZNEJ )->pluck('id')->toArray());
        Category::whereId('871')->first()->detailprojects()->attach(collect($OPTOMETRYSCI )->pluck('id')->toArray());
        Category::whereId('872')->first()->detailprojects()->attach(collect($PROTETYK_SLUCHU )->pluck('id')->toArray());
        Category::whereId('873')->first()->detailprojects()->attach(collect($TECHNIK_ORTOPEDA )->pluck('id')->toArray());
        Category::whereId('874')->first()->detailprojects()->attach(collect($OPTYCY_OKULAROWI )->pluck('id')->toArray());
        Category::whereId('878')->first()->detailprojects()->attach(collect($ORTOPTYSTKA )->pluck('id')->toArray());
        Category::whereId('879')->first()->detailprojects()->attach(collect($ORTOPEDA_MECHANIK )->pluck('id')->toArray());
        Category::whereId('880')->first()->detailprojects()->attach(collect($INZYNIER_OPTYK )->pluck('id')->toArray());
        Category::whereId('882')->first()->detailprojects()->attach(collect($PRACOWNIK_SOCJALNY)->pluck('id')->toArray());
        Category::whereId('883')->first()->detailprojects()->attach(collect($SPECJALISTA_PRACY_SOCJALNEJ)->pluck('id')->toArray());
        Category::whereId('884')->first()->detailprojects()->attach(collect($SPECJALISTA_RESOCJALIZACJI)->pluck('id')->toArray());
        Category::whereId('887')->first()->detailprojects()->attach(collect($KURATOR_SADOWY )->pluck('id')->toArray());
        Category::whereId('888')->first()->detailprojects()->attach(collect($SPECJALISTA_PORADNICTWA_PSYCHOSPOLECZNEGO_I_RODZINNEGO )->pluck('id')->toArray());
        Category::whereId('889')->first()->detailprojects()->attach(collect($KOORDYNATOR_RODZINNEJ_PIECZY_ZASTEPCZEJ )->pluck('id')->toArray());
        Category::whereId('890')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_ADOPCJI )->pluck('id')->toArray());
        Category::whereId('891')->first()->detailprojects()->attach(collect($SRODOWISKOWI_PRACOWNICY_OCHRONY_ZDROWIA  )->pluck('id')->toArray());
        Category::whereId('894')->first()->detailprojects()->attach(collect($INSTRUKTOR_TERAPII_UZALEZNIEN  )->pluck('id')->toArray());
        Category::whereId('895')->first()->detailprojects()->attach(collect($ASYSTENT_RODZINY  )->pluck('id')->toArray());
        Category::whereId('896')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_OCHRONY_PRAW_DZIECKA_I_RODZINY  )->pluck('id')->toArray());
        Category::whereId('898')->first()->detailprojects()->attach(collect($ASYSTENT_OSOBY_NIEPELNOSPRAWNEJ)->pluck('id')->toArray());
        Category::whereId('899')->first()->detailprojects()->attach(collect($OPIEKUN_OSOBY_STARSZEJ)->pluck('id')->toArray());
        Category::whereId('900')->first()->detailprojects()->attach(collect($OPIEKUN_W_DOMU_POMOCY_SPOLECZNEJ)->pluck('id')->toArray());
        Category::whereId('901')->first()->detailprojects()->attach(collect($OPIEKUNKA_SRODOWISKOWA)->pluck('id')->toArray());
        Category::whereId('902')->first()->detailprojects()->attach(collect($PRACOWNICY_DOMOWEJ_OPIEKI_OSOBISTEJ)->pluck('id')->toArray());
        Category::whereId('906')->first()->detailprojects()->attach(collect($POMOCNICZY_PERSONEL_MEDYCZNY)->pluck('id')->toArray());
        Category::whereId('909')->first()->detailprojects()->attach(collect($OSOBY_DO_TOWARZYSTWA)->pluck('id')->toArray());
        Category::whereId('911')->first()->detailprojects()->attach(collect($OPIEKUNKA_DZIECIECA)->pluck('id')->toArray());
    }
}

