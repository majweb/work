<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectOchronaiBezpieczenstwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $KIEROWNIK_REWIRU_POSTERUNKU_POLICJI = [
            [
                'id' => 10862,
                'name' => json_encode([
                    'pl' => 'Organizacja i koordynowanie pracy podległych funkcjonariuszy.',
                    'en' => 'Organizing and coordinating the work of subordinate officers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10863,
                'name' => json_encode([
                    'pl' => 'Przydzielanie zadań zgodnie z priorytetami operacyjnymi oraz zapewnianie odpowiedniego rozłożenia sił na terenie działania.',
                    'en' => 'Assigning tasks according to operational priorities and ensuring proper deployment of forces in the area of operation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10864,
                'name' => json_encode([
                    'pl' => 'Monitorowanie bieżących działań policyjnych, takich jak patrole, interwencje oraz działania prewencyjne.',
                    'en' => 'Monitoring ongoing police activities, such as patrols, interventions, and preventive measures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10865,
                'name' => json_encode([
                    'pl' => 'Udzielanie wsparcia funkcjonariuszom w sytuacjach wymagających natychmiastowego podejmowania decyzji.',
                    'en' => 'Providing support to officers in situations requiring immediate decision-making.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10866,
                'name' => json_encode([
                    'pl' => 'Opracowywanie planów działań mających na celu zapobieganie przestępstwom i zapewnienie bezpieczeństwa publicznego.',
                    'en' => 'Developing action plans aimed at preventing crimes and ensuring public safety.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10867,
                'name' => json_encode([
                    'pl' => 'Organizowanie kampanii informacyjnych i współpraca z lokalną społecznością w celu zwiększenia świadomości w zakresie bezpieczeństwa.',
                    'en' => 'Organizing information campaigns and cooperating with the local community to raise awareness of safety issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10868,
                'name' => json_encode([
                    'pl' => 'Regularna analiza danych dotyczących przestępczości i identyfikowanie obszarów o podwyższonym ryzyku.',
                    'en' => 'Regularly analyzing crime data and identifying areas of heightened risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10869,
                'name' => json_encode([
                    'pl' => 'Podejmowanie działań mających na celu eliminację problemów kryminalnych w rejonie.',
                    'en' => 'Taking actions to eliminate criminal problems in the area.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10870,
                'name' => json_encode([
                    'pl' => 'Koordynowanie działań z innymi służbami, takimi jak straż pożarna, służby medyczne i administracja lokalna.',
                    'en' => 'Coordinating actions with other services, such as fire services, medical services, and local administration.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10871,
                'name' => json_encode([
                    'pl' => 'Udział w spotkaniach z przedstawicielami władz lokalnych i społeczności w celu omawiania spraw bezpieczeństwa.',
                    'en' => 'Participating in meetings with local authorities and communities to discuss safety issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10872,
                'name' => json_encode([
                    'pl' => 'Nadzorowanie przestrzegania przez funkcjonariuszy zasad etyki oraz przepisów i procedur policyjnych.',
                    'en' => 'Supervising compliance by officers with ethical standards, regulations, and police procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10873,
                'name' => json_encode([
                    'pl' => 'Prowadzenie kontroli wewnętrznych mających na celu poprawę jakości pracy i przestrzeganie standardów zawodowych.',
                    'en' => 'Conducting internal audits aimed at improving work quality and adhering to professional standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10874,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów z działań rewiru lub posterunku, w tym raportów dotyczących przestępczości, interwencji oraz wyników operacyjnych.',
                    'en' => 'Preparing reports on the activities of the precinct or police station, including crime reports, interventions, and operational results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10875,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji i dbałość o właściwe dokumentowanie czynności służbowych.',
                    'en' => 'Maintaining records and ensuring proper documentation of official actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10876,
                'name' => json_encode([
                    'pl' => 'Organizowanie i koordynowanie szkoleń oraz programów doskonalących dla podległych funkcjonariuszy.',
                    'en' => 'Organizing and coordinating training and development programs for subordinate officers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10877,
                'name' => json_encode([
                    'pl' => 'Wspieranie ich rozwoju zawodowego i dbanie o to, by posiadali aktualną wiedzę w zakresie procedur i przepisów.',
                    'en' => 'Supporting their professional development and ensuring they have up-to-date knowledge of procedures and regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10878,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że sprzęt i pojazdy są w dobrym stanie technicznym i gotowe do użytku.',
                    'en' => 'Ensuring that equipment and vehicles are in good working condition and ready for use.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10879,
                'name' => json_encode([
                    'pl' => 'Odpowiedzialność za zamówienia i dystrybucję materiałów i sprzętu na potrzeby rewiru lub posterunku.',
                    'en' => 'Responsible for ordering and distributing materials and equipment for the precinct or police station.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10880,
                'name' => json_encode([
                    'pl' => 'Podejmowanie decyzji w sytuacjach kryzysowych i koordynowanie działań policyjnych podczas incydentów, takich jak pożary, wypadki czy zamieszki.',
                    'en' => 'Making decisions in crisis situations and coordinating police actions during incidents such as fires, accidents, or riots.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10881,
                'name' => json_encode([
                    'pl' => 'Nadzór nad ewakuacjami, zabezpieczeniem miejsca zdarzenia oraz koordynacja z innymi służbami.',
                    'en' => 'Supervising evacuations, securing the scene, and coordinating with other services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10882,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie stałego kontaktu z mieszkańcami, organizowanie spotkań oraz angażowanie społeczności w działania prewencyjne.',
                    'en' => 'Maintaining constant contact with residents, organizing meetings, and engaging the community in preventive actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10883,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na pytania i skargi obywateli oraz dbanie o dobre relacje z lokalnymi mieszkańcami.',
                    'en' => 'Responding to questions and complaints from citizens and maintaining good relations with local residents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10884,
                'name' => json_encode([
                    'pl' => 'Wdrażanie i egzekwowanie przestrzegania zasad etyki zawodowej przez wszystkich funkcjonariuszy.',
                    'en' => 'Implementing and enforcing compliance with ethical standards by all officers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10885,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszyscy funkcjonariusze działają z poszanowaniem prawa oraz standardów moralnych.',
                    'en' => 'Ensuring that all officers act in accordance with the law and moral standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10886,
                'name' => json_encode([
                    'pl' => 'Przekazywanie raportów oraz informacji dotyczących działań, wyników i potrzeb rewiru lub posterunku do przełożonych.',
                    'en' => 'Submitting reports and information regarding the activities, results, and needs of the precinct or police station to superiors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10887,
                'name' => json_encode([
                    'pl' => 'Informowanie o ważnych wydarzeniach oraz problemach występujących na podległym terenie.',
                    'en' => 'Informing about important events and issues occurring in the jurisdiction.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $KOMENDANT_POLICJI_POWIATOWY_MIEJSKI_REJONOWY_KOMISARIATU = [
            [
                'id' => 10888,
                'name' => json_encode([
                    'pl' => 'Nadzór nad codziennym funkcjonowaniem jednostki policyjnej, zarówno w zakresie operacyjnym, jak i administracyjnym.',
                    'en' => 'Supervision of the daily functioning of the police unit, both operationally and administratively.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10889,
                'name' => json_encode([
                    'pl' => 'Zapewnienie skutecznej realizacji zadań i misji jednostki.',
                    'en' => 'Ensuring the effective implementation of the unit’s tasks and missions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10890,
                'name' => json_encode([
                    'pl' => 'Tworzenie planów strategicznych dotyczących zapewnienia bezpieczeństwa publicznego na podległym terenie.',
                    'en' => 'Developing strategic plans to ensure public safety in the jurisdiction.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10891,
                'name' => json_encode([
                    'pl' => 'Wyznaczanie priorytetów działania oraz wdrażanie programów prewencyjnych i operacyjnych.',
                    'en' => 'Setting action priorities and implementing preventive and operational programs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10892,
                'name' => json_encode([
                    'pl' => 'Nadzór nad działaniami operacyjnymi podejmowanymi przez funkcjonariuszy, w tym akcjami specjalnymi i interwencjami.',
                    'en' => 'Supervising operational actions undertaken by officers, including special operations and interventions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10893,
                'name' => json_encode([
                    'pl' => 'Wspieranie dowódców operacyjnych w sytuacjach kryzysowych oraz podejmowanie kluczowych decyzji.',
                    'en' => 'Supporting operational commanders in crisis situations and making key decisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10894,
                'name' => json_encode([
                    'pl' => 'Kontrola, czy wszystkie działania funkcjonariuszy są zgodne z przepisami prawa, standardami etyki zawodowej oraz procedurami policyjnymi.',
                    'en' => 'Controlling that all actions of officers comply with the law, professional ethical standards, and police procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10895,
                'name' => json_encode([
                    'pl' => 'Wdrażanie środków dyscyplinarnych w przypadku naruszenia zasad.',
                    'en' => 'Implementing disciplinary measures in case of rule violations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10896,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie jednostki policji w kontaktach z władzami lokalnymi, mediami, organizacjami społecznymi oraz obywatelami.',
                    'en' => 'Representing the police unit in dealings with local authorities, the media, social organizations, and citizens.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10897,
                'name' => json_encode([
                    'pl' => 'Udział w spotkaniach, konferencjach i wydarzeniach publicznych w celu budowania zaufania i współpracy z lokalną społecznością.',
                    'en' => 'Participating in meetings, conferences, and public events to build trust and cooperation with the local community.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10898,
                'name' => json_encode([
                    'pl' => 'Koordynowanie działań z innymi służbami, takimi jak straż pożarna, pogotowie ratunkowe, służby bezpieczeństwa oraz administracja publiczna.',
                    'en' => 'Coordinating actions with other services, such as the fire department, emergency medical services, security services, and public administration.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10899,
                'name' => json_encode([
                    'pl' => 'Nawiązywanie współpracy z instytucjami krajowymi i międzynarodowymi w celu realizacji wspólnych inicjatyw i operacji.',
                    'en' => 'Establishing cooperation with national and international institutions to implement joint initiatives and operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10900,
                'name' => json_encode([
                    'pl' => 'Zarządzanie środkami finansowymi jednostki oraz kontrola nad realizacją budżetu.',
                    'en' => 'Managing the unit’s financial resources and overseeing the budget implementation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10901,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie wniosków budżetowych oraz monitorowanie wydatków i optymalizacja kosztów.',
                    'en' => 'Preparing budget requests and monitoring expenditures and optimizing costs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10902,
                'name' => json_encode([
                    'pl' => 'Rekrutacja, szkolenie i rozwój funkcjonariuszy oraz pracowników cywilnych.',
                    'en' => 'Recruiting, training, and developing officers and civilian staff.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10903,
                'name' => json_encode([
                    'pl' => 'Nadzór nad dyscypliną, morale i wydajnością podległego personelu oraz egzekwowanie standardów etycznych.',
                    'en' => 'Supervising the discipline, morale, and performance of subordinate staff and enforcing ethical standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10904,
                'name' => json_encode([
                    'pl' => 'Organizowanie szkoleń i programów doskonalących dla funkcjonariuszy.',
                    'en' => 'Organizing training and development programs for officers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10905,
                'name' => json_encode([
                    'pl' => 'Zachęcanie do rozwoju zawodowego oraz śledzenie nowych trendów i technologii w zakresie bezpieczeństwa.',
                    'en' => 'Encouraging professional development and tracking new trends and technologies in the field of security.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10906,
                'name' => json_encode([
                    'pl' => 'Analiza danych dotyczących przestępczości i ocena poziomu zagrożeń na terenie jednostki.',
                    'en' => 'Analyzing crime data and assessing the threat levels in the unit’s jurisdiction.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10907,
                'name' => json_encode([
                    'pl' => 'Identyfikowanie obszarów o podwyższonym ryzyku oraz podejmowanie działań prewencyjnych.',
                    'en' => 'Identifying areas of increased risk and taking preventive actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10908,
                'name' => json_encode([
                    'pl' => 'Regularne audyty działań i procesów w jednostce w celu zapewnienia ich skuteczności i zgodności z procedurami.',
                    'en' => 'Conducting regular audits of actions and processes within the unit to ensure their effectiveness and compliance with procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10909,
                'name' => json_encode([
                    'pl' => 'Ocenianie wydajności pracy jednostki oraz podejmowanie działań korygujących w razie potrzeby.',
                    'en' => 'Evaluating the unit’s performance and taking corrective actions if necessary.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10910,
                'name' => json_encode([
                    'pl' => 'Opracowywanie raportów dla przełożonych dotyczących efektywności działań jednostki, poziomu bezpieczeństwa oraz sytuacji operacyjnej.',
                    'en' => 'Preparing reports for superiors regarding the effectiveness of the unit’s actions, security levels, and operational situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10911,
                'name' => json_encode([
                    'pl' => 'Analiza wyników pracy jednostki oraz identyfikacja obszarów wymagających poprawy.',
                    'en' => 'Analyzing the unit’s performance results and identifying areas for improvement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10912,
                'name' => json_encode([
                    'pl' => 'Podejmowanie decyzji i koordynacja działań w sytuacjach kryzysowych, takich jak zamieszki, klęski żywiołowe, akcje ratunkowe czy operacje antyterrorystyczne.',
                    'en' => 'Making decisions and coordinating actions in crisis situations such as riots, natural disasters, rescue operations, or counter-terrorism operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10913,
                'name' => json_encode([
                    'pl' => 'Odpowiedzialność za ewakuacje, zabezpieczenie miejsca zdarzenia i koordynację działań ratunkowych.',
                    'en' => 'Responsibility for evacuations, securing the scene, and coordinating rescue operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10914,
                'name' => json_encode([
                    'pl' => 'Inicjowanie programów współpracy z lokalną społecznością, mających na celu poprawę bezpieczeństwa i zaufania do policji.',
                    'en' => 'Initiating programs for cooperation with the local community to improve safety and trust in the police.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10915,
                'name' => json_encode([
                    'pl' => 'Organizowanie spotkań i konsultacji z mieszkańcami w celu lepszego zrozumienia ich potrzeb i problemów.',
                    'en' => 'Organizing meetings and consultations with residents to better understand their needs and issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10916,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że cała jednostka działa zgodnie z zasadami etyki zawodowej.',
                    'en' => 'Ensuring that the entire unit operates in accordance with professional ethics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10917,
                'name' => json_encode([
                    'pl' => 'Przeciwdziałanie korupcji oraz promowanie uczciwości i odpowiedzialności wśród funkcjonariuszy.',
                    'en' => 'Counteracting corruption and promoting honesty and accountability among officers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10918,
                'name' => json_encode([
                    'pl' => 'Kreowanie i dbanie o pozytywny wizerunek jednostki policji w społeczności lokalnej.',
                    'en' => 'Creating and maintaining a positive image of the police unit in the local community.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10919,
                'name' => json_encode([
                    'pl' => 'Współpraca z mediami w celu zapewnienia transparentności i budowania zaufania publicznego.',
                    'en' => 'Cooperating with the media to ensure transparency and build public trust.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $KOMENDANT_STRAŻY_GMINNEJ_MIEJSKIEJ = [
            [
                'id' => 10920,
                'name' => json_encode([
                    'pl' => 'Nadzór nad codziennym funkcjonowaniem straży miejskiej, zarówno w zakresie operacyjnym, jak i administracyjnym.',
                    'en' => 'Supervision of the daily functioning of the municipal guard, both operationally and administratively.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10921,
                'name' => json_encode([
                    'pl' => 'Organizacja pracy i koordynowanie działań podległych strażników.',
                    'en' => 'Organizing work and coordinating actions of subordinate guards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10922,
                'name' => json_encode([
                    'pl' => 'Opracowywanie strategii działania i planów operacyjnych na rzecz zapewnienia bezpieczeństwa publicznego.',
                    'en' => 'Developing action strategies and operational plans to ensure public safety.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10923,
                'name' => json_encode([
                    'pl' => 'Tworzenie planów prewencyjnych mających na celu przeciwdziałanie przestępczości, aktom wandalizmu, oraz innym zagrożeniom.',
                    'en' => 'Creating preventive plans aimed at counteracting crime, vandalism, and other threats.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10924,
                'name' => json_encode([
                    'pl' => 'Nadzorowanie działań patroli i interwencji podejmowanych przez strażników miejskich.',
                    'en' => 'Supervising the actions of patrols and interventions undertaken by municipal guards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10925,
                'name' => json_encode([
                    'pl' => 'Wspieranie zespołów interwencyjnych w sytuacjach kryzysowych, jak zakłócenia porządku publicznego, ewakuacje, czy akcje ratunkowe.',
                    'en' => 'Supporting intervention teams in crisis situations such as public order disturbances, evacuations, or rescue operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10926,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszystkie działania strażników są zgodne z przepisami prawa, regulaminami oraz procedurami.',
                    'en' => 'Ensuring that all actions of guards comply with the law, regulations, and procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10927,
                'name' => json_encode([
                    'pl' => 'Wdrażanie zasad etyki zawodowej oraz reagowanie na ewentualne uchybienia i naruszenia.',
                    'en' => 'Implementing professional ethics standards and responding to any lapses and violations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10928,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie straży miejskiej w kontaktach z władzami miasta lub gminy, mediami, mieszkańcami i innymi instytucjami.',
                    'en' => 'Representing the municipal guard in dealings with city or municipal authorities, the media, residents, and other institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10929,
                'name' => json_encode([
                    'pl' => 'Udział w spotkaniach, naradach i konferencjach związanych z bezpieczeństwem publicznym.',
                    'en' => 'Participating in meetings, councils, and conferences related to public safety.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10930,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań z innymi służbami porządkowymi, takimi jak policja, straż pożarna, pogotowie ratunkowe oraz administracja publiczna.',
                    'en' => 'Coordinating actions with other law enforcement services, such as police, fire department, emergency medical services, and public administration.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10931,
                'name' => json_encode([
                    'pl' => 'Współpraca z organizacjami lokalnymi i urzędami w zakresie wspólnych działań prewencyjnych.',
                    'en' => 'Cooperating with local organizations and offices on joint preventive actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10932,
                'name' => json_encode([
                    'pl' => 'Planowanie i kontrolowanie budżetu jednostki oraz odpowiedzialność za racjonalne gospodarowanie środkami finansowymi.',
                    'en' => 'Planning and controlling the unit’s budget and being responsible for rational management of financial resources.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10933,
                'name' => json_encode([
                    'pl' => 'Opracowywanie wniosków budżetowych oraz monitorowanie wydatków i realizacji budżetu.',
                    'en' => 'Preparing budget requests and monitoring expenditures and budget implementation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10934,
                'name' => json_encode([
                    'pl' => 'Rekrutacja, szkolenie i rozwój zawodowy podległych strażników oraz pracowników cywilnych.',
                    'en' => 'Recruiting, training, and developing subordinate guards and civilian staff.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10935,
                'name' => json_encode([
                    'pl' => 'Dbanie o dyscyplinę, morale i motywację w zespole.',
                    'en' => 'Maintaining discipline, morale, and motivation in the team.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10936,
                'name' => json_encode([
                    'pl' => 'Organizowanie szkoleń i programów doskonalących dla strażników miejskich, szczególnie w zakresie bezpieczeństwa i pierwszej pomocy.',
                    'en' => 'Organizing training and improvement programs for municipal guards, especially in safety and first aid.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10937,
                'name' => json_encode([
                    'pl' => 'Monitorowanie postępów w rozwoju zawodowym pracowników oraz śledzenie zmian w przepisach i procedurach.',
                    'en' => 'Monitoring the professional development progress of employees and tracking changes in regulations and procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10938,
                'name' => json_encode([
                    'pl' => 'Analiza danych dotyczących przestępczości, aktów wandalizmu, wypadków oraz innych incydentów na terenie miasta lub gminy.',
                    'en' => 'Analyzing data on crime, vandalism, accidents, and other incidents in the city or municipality.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10939,
                'name' => json_encode([
                    'pl' => 'Ocena poziomu zagrożeń oraz podejmowanie działań mających na celu zapobieganie i eliminację problemów.',
                    'en' => 'Assessing the level of threats and taking action to prevent and eliminate problems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10940,
                'name' => json_encode([
                    'pl' => 'Regularne audyty pracy straży miejskiej oraz wprowadzanie działań korygujących, gdy jest to potrzebne.',
                    'en' => 'Conducting regular audits of the municipal guard’s work and implementing corrective actions when needed.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10941,
                'name' => json_encode([
                    'pl' => 'Ocenianie wyników pracy jednostki oraz wprowadzanie optymalizacji w działaniach.',
                    'en' => 'Evaluating the unit’s performance results and implementing optimizations in actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10942,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów na temat wyników działań straży miejskiej, poziomu bezpieczeństwa oraz efektywności działań prewencyjnych.',
                    'en' => 'Preparing reports on the results of municipal guard actions, security levels, and effectiveness of preventive actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10943,
                'name' => json_encode([
                    'pl' => 'Informowanie władz o potrzebach jednostki, osiągnięciach oraz wyzwaniach związanych z działalnością straży miejskiej.',
                    'en' => 'Informing authorities about the needs of the unit, achievements, and challenges related to the municipal guard’s activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10944,
                'name' => json_encode([
                    'pl' => 'Podejmowanie decyzji w sytuacjach kryzysowych oraz koordynacja działań straży miejskiej podczas nagłych zdarzeń, takich jak awarie, katastrofy, czy klęski żywiołowe.',
                    'en' => 'Making decisions in crisis situations and coordinating the actions of the municipal guard during emergencies such as failures, disasters, or natural catastrophes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10945,
                'name' => json_encode([
                    'pl' => 'Zapewnienie wsparcia innym służbom oraz organizacja działań ratunkowych.',
                    'en' => 'Providing support to other services and organizing rescue operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10946,
                'name' => json_encode([
                    'pl' => 'Organizowanie spotkań, konsultacji oraz działań edukacyjnych dla mieszkańców w celu zwiększenia świadomości i zaufania do straży miejskiej.',
                    'en' => 'Organizing meetings, consultations, and educational activities for residents to increase awareness and trust in the municipal guard.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10947,
                'name' => json_encode([
                    'pl' => 'Wspieranie działań na rzecz integracji straży miejskiej ze społecznością lokalną oraz odpowiedzi na pytania i potrzeby mieszkańców.',
                    'en' => 'Supporting efforts to integrate the municipal guard with the local community and addressing residents’ questions and needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10948,
                'name' => json_encode([
                    'pl' => 'Kreowanie pozytywnego wizerunku jednostki poprzez transparentność działań i komunikację z mieszkańcami.',
                    'en' => 'Creating a positive image of the unit through transparency of actions and communication with residents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10949,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na pytania mediów oraz udzielanie informacji dotyczących działań straży miejskiej.',
                    'en' => 'Answering media inquiries and providing information regarding the actions of the municipal guard.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10950,
                'name' => json_encode([
                    'pl' => 'Nadzór nad utrzymaniem sprzętu i wyposażenia straży miejskiej w odpowiednim stanie technicznym.',
                    'en' => 'Supervising the maintenance of the equipment and supplies of the municipal guard in proper technical condition.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10951,
                'name' => json_encode([
                    'pl' => 'Dbanie o to, aby strażnicy byli wyposażeni w niezbędne narzędzia, pojazdy i środki komunikacji.',
                    'en' => 'Ensuring that guards are equipped with necessary tools, vehicles, and means of communication.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $KOMENDANT_POWIATOWY_MIEJSKI_PAŃSTWOWEJ_STRAŻY_POŻARNEJ = [
            [
                'id' => 10952,
                'name' => json_encode([
                    'pl' => 'Nadzór nad codziennym funkcjonowaniem jednostki, w tym koordynacja działań operacyjnych i administracyjnych.',
                    'en' => 'Supervision of the daily functioning of the unit, including coordination of operational and administrative activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10953,
                'name' => json_encode([
                    'pl' => 'Organizowanie pracy i przydzielanie zadań podległym strażakom i personelowi.',
                    'en' => 'Organizing work and assigning tasks to subordinate firefighters and personnel.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10954,
                'name' => json_encode([
                    'pl' => 'Opracowywanie planów działania na wypadek zagrożeń pożarowych, katastrof, wypadków drogowych i innych sytuacji kryzysowych.',
                    'en' => 'Developing action plans for fire hazards, disasters, road accidents, and other crisis situations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10955,
                'name' => json_encode([
                    'pl' => 'Planowanie ćwiczeń i symulacji, które mają na celu przygotowanie strażaków do skutecznego działania w sytuacjach awaryjnych.',
                    'en' => 'Planning drills and simulations aimed at preparing firefighters for effective action in emergencies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10956,
                'name' => json_encode([
                    'pl' => 'Nadzorowanie i koordynacja działań ratowniczych podczas akcji gaśniczych, akcji ratunkowych oraz ewakuacji.',
                    'en' => 'Supervising and coordinating rescue operations during firefighting actions, rescue operations, and evacuations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10957,
                'name' => json_encode([
                    'pl' => 'Udzielanie wsparcia operacyjnego i podejmowanie decyzji w sytuacjach kryzysowych.',
                    'en' => 'Providing operational support and making decisions in crisis situations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10958,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszystkie działania jednostki są zgodne z obowiązującymi przepisami prawa oraz standardami operacyjnymi PSP.',
                    'en' => 'Ensuring that all actions of the unit comply with applicable laws and PSP operational standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10959,
                'name' => json_encode([
                    'pl' => 'Wdrażanie środków dyscyplinarnych w przypadku naruszenia przepisów lub zasad etyki zawodowej.',
                    'en' => 'Implementing disciplinary measures in case of violations of regulations or professional ethics standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10960,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie jednostki w kontaktach z władzami lokalnymi, mediami, organizacjami społecznymi oraz mieszkańcami.',
                    'en' => 'Representing the unit in contacts with local authorities, the media, social organizations, and residents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10961,
                'name' => json_encode([
                    'pl' => 'Udział w spotkaniach, konferencjach oraz wydarzeniach związanych z bezpieczeństwem publicznym.',
                    'en' => 'Participating in meetings, conferences, and events related to public safety.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10962,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań z innymi służbami ratowniczymi, takimi jak policja, pogotowie ratunkowe, straż miejska oraz lokalna administracja.',
                    'en' => 'Coordinating actions with other rescue services, such as police, emergency medical services, municipal guard, and local administration.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10963,
                'name' => json_encode([
                    'pl' => 'Nawiązywanie współpracy z organizacjami pozarządowymi oraz jednostkami OSP (Ochotnicza Straż Pożarna).',
                    'en' => 'Establishing cooperation with non-governmental organizations and Volunteer Fire Departments (OSP).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10964,
                'name' => json_encode([
                    'pl' => 'Odpowiedzialność za budżet jednostki, planowanie wydatków oraz kontrola nad realizacją budżetu.',
                    'en' => 'Responsibility for the unit’s budget, planning expenditures, and monitoring budget implementation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10965,
                'name' => json_encode([
                    'pl' => 'Opracowywanie planów zakupów sprzętu ratowniczego, pojazdów oraz środków ochrony osobistej dla strażaków.',
                    'en' => 'Developing purchase plans for rescue equipment, vehicles, and personal protective equipment for firefighters.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10966,
                'name' => json_encode([
                    'pl' => 'Rekrutacja, szkolenie i rozwój zawodowy podległych strażaków oraz personelu cywilnego.',
                    'en' => 'Recruitment, training, and professional development of subordinate firefighters and civilian staff.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10967,
                'name' => json_encode([
                    'pl' => 'Motywowanie, ocena pracy i dbanie o morale zespołu.',
                    'en' => 'Motivating, evaluating work, and maintaining team morale.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10968,
                'name' => json_encode([
                    'pl' => 'Organizowanie programów szkoleniowych i doskonalących dla strażaków, szczególnie w zakresie nowych technik ratowniczo-gaśniczych i sprzętu.',
                    'en' => 'Organizing training and improvement programs for firefighters, especially regarding new rescue and firefighting techniques and equipment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10969,
                'name' => json_encode([
                    'pl' => 'Śledzenie zmian w przepisach i wprowadzanie odpowiednich zmian do programów szkoleniowych.',
                    'en' => 'Monitoring changes in regulations and implementing appropriate changes to training programs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10970,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analiz ryzyka pożarowego i innych zagrożeń na terenie objętym jurysdykcją jednostki.',
                    'en' => 'Conducting fire risk assessments and other hazards in the area under the unit’s jurisdiction.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10971,
                'name' => json_encode([
                    'pl' => 'Identyfikowanie miejsc szczególnie narażonych na zagrożenia i podejmowanie działań prewencyjnych.',
                    'en' => 'Identifying locations particularly exposed to hazards and taking preventive actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10972,
                'name' => json_encode([
                    'pl' => 'Regularne audyty działań jednostki, ocena wydajności oraz skuteczności podejmowanych interwencji.',
                    'en' => 'Conducting regular audits of the unit’s actions, evaluating performance, and the effectiveness of interventions taken.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10973,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie działań korygujących i optymalizacyjnych w celu poprawy jakości pracy jednostki.',
                    'en' => 'Implementing corrective and optimization actions to improve the quality of the unit’s work.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10974,
                'name' => json_encode([
                    'pl' => 'Opracowywanie raportów dla wyższych przełożonych dotyczących działań jednostki, poziomu bezpieczeństwa oraz statystyk pożarowych.',
                    'en' => 'Preparing reports for higher superiors regarding the actions of the unit, security levels, and fire statistics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10975,
                'name' => json_encode([
                    'pl' => 'Analiza wyników pracy jednostki i przedstawianie wniosków oraz rekomendacji dotyczących działań prewencyjnych.',
                    'en' => 'Analyzing the unit’s performance results and presenting conclusions and recommendations regarding preventive actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10976,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań ratowniczych w przypadku wystąpienia dużych zagrożeń, takich jak pożary przemysłowe, klęski żywiołowe, katastrofy budowlane czy chemiczne.',
                    'en' => 'Coordinating rescue operations in case of major hazards such as industrial fires, natural disasters, building collapses, or chemical incidents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10977,
                'name' => json_encode([
                    'pl' => 'Udział w zarządzaniu sytuacją kryzysową oraz podejmowanie decyzji o mobilizacji dodatkowych zasobów.',
                    'en' => 'Participating in crisis management and making decisions on mobilizing additional resources.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10978,
                'name' => json_encode([
                    'pl' => 'Organizowanie kampanii edukacyjnych i informacyjnych na temat bezpieczeństwa pożarowego, udzielania pierwszej pomocy oraz zasad zachowania się w sytuacjach zagrożenia.',
                    'en' => 'Organizing educational and informational campaigns on fire safety, first aid, and conduct in emergency situations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10979,
                'name' => json_encode([
                    'pl' => 'Prowadzenie spotkań z mieszkańcami oraz współpraca z lokalnymi organizacjami społecznymi.',
                    'en' => 'Conducting meetings with residents and collaborating with local social organizations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10980,
                'name' => json_encode([
                    'pl' => 'Kreowanie pozytywnego wizerunku jednostki poprzez transparentne działania i odpowiedzialną komunikację z mieszkańcami.',
                    'en' => 'Creating a positive image of the unit through transparent actions and responsible communication with residents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10981,
                'name' => json_encode([
                    'pl' => 'Udzielanie wywiadów oraz publikowanie informacji o działaniach PSP i zaleceniach bezpieczeństwa.',
                    'en' => 'Giving interviews and publishing information about PSP activities and safety recommendations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10982,
                'name' => json_encode([
                    'pl' => 'Nadzór nad utrzymaniem sprzętu i pojazdów ratowniczo-gaśniczych w dobrym stanie technicznym.',
                    'en' => 'Supervising the maintenance of rescue and firefighting equipment and vehicles in good technical condition.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10983,
                'name' => json_encode([
                    'pl' => 'Organizacja przeglądów, napraw i modernizacji sprzętu oraz zapewnienie strażakom odpowiedniego wyposażenia.',
                    'en' => 'Organizing inspections, repairs, and modernization of equipment, ensuring that firefighters have the appropriate gear.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10984,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszyscy strażacy działają zgodnie z zasadami etyki zawodowej, regulaminami i kodeksem pracy strażaka.',
                    'en' => 'Ensuring that all firefighters act in accordance with professional ethics, regulations, and the firefighter code of conduct.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10985,
                'name' => json_encode([
                    'pl' => 'Przeciwdziałanie wszelkim formom nieetycznych zachowań oraz dbałość o poszanowanie wartości zawodowych.',
                    'en' => 'Preventing all forms of unethical behavior and ensuring respect for professional values.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $WYCHOWAWCA_W_JEDNOSTKACH_PENITENCJARNYCH = [
            [
                'id' => 10986,
                'name' => json_encode([
                    'pl' => 'Prowadzenie indywidualnych rozmów z osadzonymi w celu zrozumienia ich problemów i potrzeb.',
                    'en' => 'Conducting individual conversations with inmates to understand their problems and needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10987,
                'name' => json_encode([
                    'pl' => 'Opracowywanie indywidualnych planów resocjalizacji, dostosowanych do charakteru przestępstwa i osobowości osadzonego.',
                    'en' => 'Developing individual rehabilitation plans tailored to the nature of the crime and the personality of the inmate.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10988,
                'name' => json_encode([
                    'pl' => 'Opracowywanie programów resocjalizacyjnych, które pomagają osadzonym w nabyciu nowych umiejętności społecznych i zawodowych.',
                    'en' => 'Developing rehabilitation programs that help inmates acquire new social and vocational skills.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10989,
                'name' => json_encode([
                    'pl' => 'Monitorowanie postępów osadzonych w ramach tych programów i dostosowywanie planów w miarę potrzeby.',
                    'en' => 'Monitoring the progress of inmates within these programs and adjusting plans as needed.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10990,
                'name' => json_encode([
                    'pl' => 'Organizowanie zajęć edukacyjnych, terapeutycznych i kulturalnych mających na celu wspieranie rozwoju osobistego osadzonych.',
                    'en' => 'Organizing educational, therapeutic, and cultural activities aimed at supporting the personal development of inmates.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10991,
                'name' => json_encode([
                    'pl' => 'Udzielanie wsparcia w nauce i organizowanie kursów zawodowych oraz szkoleń.',
                    'en' => 'Providing learning support and organizing vocational courses and training.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10992,
                'name' => json_encode([
                    'pl' => 'Obserwacja zachowań osadzonych i ocena ich postępów w procesie resocjalizacji.',
                    'en' => 'Observing inmates’ behavior and assessing their progress in the rehabilitation process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10993,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów dotyczących zachowania, zmian postaw i motywacji osadzonych.',
                    'en' => 'Creating reports regarding behavior, changes in attitudes, and motivation of inmates.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10994,
                'name' => json_encode([
                    'pl' => 'Udzielanie wsparcia emocjonalnego, w szczególności w przypadku problemów osobistych, kryzysów i sytuacji konfliktowych.',
                    'en' => 'Providing emotional support, particularly in cases of personal problems, crises, and conflicts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10995,
                'name' => json_encode([
                    'pl' => 'Współpraca z psychologami i terapeutami w celu zapewnienia wsparcia osadzonym.',
                    'en' => 'Collaborating with psychologists and therapists to provide support for inmates.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10996,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie kontaktu z rodzinami osadzonych i informowanie ich o postępach w procesie resocjalizacji.',
                    'en' => 'Maintaining contact with inmates’ families and informing them about progress in the rehabilitation process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10997,
                'name' => json_encode([
                    'pl' => 'Organizowanie wizyt rodzinnych oraz wspieranie utrzymywania więzi rodzinnych.',
                    'en' => 'Organizing family visits and supporting the maintenance of family bonds.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10998,
                'name' => json_encode([
                    'pl' => 'Pomoc osadzonym w przygotowaniu się do opuszczenia zakładu karnego, w tym doradztwo w zakresie zatrudnienia, mieszkalnictwa oraz kontaktów społecznych.',
                    'en' => 'Assisting inmates in preparing for release from prison, including advising on employment, housing, and social contacts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10999,
                'name' => json_encode([
                    'pl' => 'Organizowanie programów przygotowujących do powrotu do społeczeństwa, w tym zajęć z zakresu samodzielnego radzenia sobie i zarządzania czasem.',
                    'en' => 'Organizing programs preparing for reintegration into society, including life skills and time management sessions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11000,
                'name' => json_encode([
                    'pl' => 'Regularne aktualizowanie dokumentacji wychowawczej dotyczącej postępów i zachowania osadzonych.',
                    'en' => 'Regularly updating educational documentation regarding the progress and behavior of inmates.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11001,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów i ocen wychowawczych dla celów administracyjnych oraz do analizy przez inne instytucje.',
                    'en' => 'Preparing reports and educational assessments for administrative purposes and analysis by other institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11002,
                'name' => json_encode([
                    'pl' => 'Organizacja zajęć grupowych, warsztatów i spotkań, które promują współpracę i integrację wśród osadzonych.',
                    'en' => 'Organizing group activities, workshops, and meetings that promote cooperation and integration among inmates.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11003,
                'name' => json_encode([
                    'pl' => 'Prowadzenie zajęć grupowych dotyczących edukacji prawnej, zdrowia, zarządzania emocjami i innych tematów resocjalizacyjnych.',
                    'en' => 'Conducting group sessions on legal education, health, emotional management, and other rehabilitation topics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11004,
                'name' => json_encode([
                    'pl' => 'Kontrola zachowania osadzonych pod kątem przestrzegania zasad i regulaminów obowiązujących w jednostce penitencjarnej.',
                    'en' => 'Monitoring inmate behavior to ensure compliance with the rules and regulations in the penitentiary unit.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11005,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji na temat obowiązków i zasad panujących w jednostce oraz konsekwencji ich naruszenia.',
                    'en' => 'Providing information about the obligations and rules in the unit, as well as the consequences of violating them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11006,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi członkami personelu, takimi jak strażnicy, psycholodzy, terapeuci, pracownicy socjalni, lekarze i inni specjaliści.',
                    'en' => 'Cooperating with other staff members, such as guards, psychologists, therapists, social workers, doctors, and other specialists.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11007,
                'name' => json_encode([
                    'pl' => 'Udział w zebraniach dotyczących osadzonych, wymiana informacji i ustalanie wspólnych działań resocjalizacyjnych.',
                    'en' => 'Participating in meetings concerning inmates, exchanging information, and determining joint rehabilitation actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11008,
                'name' => json_encode([
                    'pl' => 'Analizowanie ryzyka powrotu do przestępstwa, ocena czynników ryzyka oraz podejmowanie działań mających na celu ich minimalizację.',
                    'en' => 'Analyzing the risk of reoffending, assessing risk factors, and taking actions to minimize them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11009,
                'name' => json_encode([
                    'pl' => 'Współpraca z zespołem w celu identyfikacji potencjalnych zagrożeń, które mogą wpływać na resocjalizację.',
                    'en' => 'Collaborating with the team to identify potential threats that may affect rehabilitation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11010,
                'name' => json_encode([
                    'pl' => 'Interwencja w sytuacjach konfliktowych pomiędzy osadzonymi lub między osadzonymi a personelem.',
                    'en' => 'Intervening in conflict situations between inmates or between inmates and staff.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11011,
                'name' => json_encode([
                    'pl' => 'Mediacja w sporach oraz pomoc w rozwiązywaniu konfliktów w sposób konstruktywny.',
                    'en' => 'Mediating disputes and helping to resolve conflicts in a constructive manner.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11012,
                'name' => json_encode([
                    'pl' => 'Planowanie i organizowanie zajęć rekreacyjnych, sportowych i kulturalnych dla osadzonych.',
                    'en' => 'Planning and organizing recreational, sports, and cultural activities for inmates.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11013,
                'name' => json_encode([
                    'pl' => 'Udział w inicjatywach kulturalnych i sportowych, które sprzyjają rozwojowi umiejętności społecznych osadzonych.',
                    'en' => 'Participating in cultural and sports initiatives that promote social skills development among inmates.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11014,
                'name' => json_encode([
                    'pl' => 'Informowanie osadzonych o ich prawach i obowiązkach w jednostce penitencjarnej.',
                    'en' => 'Informing inmates about their rights and obligations in the penitentiary unit.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11015,
                'name' => json_encode([
                    'pl' => 'Organizowanie zajęć z edukacji prawnej, aby pomóc osadzonym w zrozumieniu przepisów oraz procedur, które ich dotyczą.',
                    'en' => 'Organizing legal education sessions to help inmates understand the regulations and procedures that apply to them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11016,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad etyki zawodowej i tajemnicy zawodowej.',
                    'en' => 'Adhering to professional ethics and confidentiality.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11017,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszystkie działania są prowadzone z szacunkiem dla godności i praw osadzonych oraz w zgodzie z przepisami prawa.',
                    'en' => 'Ensuring that all actions are conducted with respect for the dignity and rights of inmates and in accordance with the law.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $TECHNIK_POŻARNICTWA=[
            [
                'id' => 11018,
                'name' => json_encode([
                    'pl' => 'Pomoc w koordynacji działań ratowniczych i gaśniczych pod nadzorem dowódcy akcji.',
                    'en' => 'Assisting in coordinating rescue and firefighting operations under the command of the incident commander.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11019,
                'name' => json_encode([
                    'pl' => 'Obsługa sprzętu ratowniczo-gaśniczego oraz wsparcie w ewakuacji poszkodowanych.',
                    'en' => 'Operating rescue and firefighting equipment and assisting in the evacuation of victims.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11020,
                'name' => json_encode([
                    'pl' => 'Kontrola obiektów pod kątem bezpieczeństwa pożarowego, ocena zagrożeń oraz identyfikacja potencjalnych niebezpieczeństw.',
                    'en' => 'Inspecting premises for fire safety, assessing hazards, and identifying potential dangers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11021,
                'name' => json_encode([
                    'pl' => 'Doradzanie w zakresie zabezpieczeń przeciwpożarowych i przestrzegania przepisów pożarowych.',
                    'en' => 'Advising on fire safety measures and compliance with fire regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11022,
                'name' => json_encode([
                    'pl' => 'Regularne wizytacje budynków w celu sprawdzenia ich zabezpieczeń przeciwpożarowych oraz zgodności z przepisami.',
                    'en' => 'Regularly visiting buildings to check their fire safety measures and compliance with regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11023,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie dostępności sprzętu przeciwpożarowego, takich jak gaśnice, systemy alarmowe i wyjścia ewakuacyjne.',
                    'en' => 'Checking the availability of fire-fighting equipment, such as extinguishers, alarm systems, and emergency exits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11024,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie szkoleń z zakresu ochrony przeciwpożarowej dla pracowników firm, instytucji i organizacji.',
                    'en' => 'Conducting fire protection training for employees of companies, institutions, and organizations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11025,
                'name' => json_encode([
                    'pl' => 'Uczenie podstawowych zasad gaszenia pożarów, postępowania w sytuacjach awaryjnych oraz udzielania pierwszej pomocy.',
                    'en' => 'Teaching basic principles of fire extinguishing, emergency procedures, and first aid.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11026,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów z inspekcji przeciwpożarowych oraz analiz ryzyka.',
                    'en' => 'Preparing reports from fire inspections and risk assessments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11027,
                'name' => json_encode([
                    'pl' => 'Prowadzenie dokumentacji związanej z bezpieczeństwem pożarowym obiektów, w tym planów ewakuacyjnych.',
                    'en' => 'Maintaining documentation related to fire safety of facilities, including evacuation plans.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11028,
                'name' => json_encode([
                    'pl' => 'Opracowywanie i aktualizacja planów ewakuacyjnych dla budynków oraz instrukcji postępowania w sytuacjach zagrożenia.',
                    'en' => 'Developing and updating evacuation plans for buildings and instructions for action in emergency situations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11029,
                'name' => json_encode([
                    'pl' => 'Projektowanie systemów alarmowych i rozmieszczania środków gaśniczych.',
                    'en' => 'Designing alarm systems and positioning fire-fighting equipment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11030,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie przeglądów i konserwacji sprzętu gaśniczego, wozów strażackich oraz innego sprzętu ratowniczego.',
                    'en' => 'Conducting inspections and maintenance of firefighting equipment, fire trucks, and other rescue gear.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11031,
                'name' => json_encode([
                    'pl' => 'Upewnienie się, że sprzęt jest w pełni sprawny i gotowy do użycia w każdej chwili.',
                    'en' => 'Ensuring that equipment is fully operational and ready for use at any time.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11032,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analiz zagrożeń pożarowych w budynkach, zakładach pracy oraz miejscach publicznych.',
                    'en' => 'Conducting fire hazard analyses in buildings, workplaces, and public places.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11033,
                'name' => json_encode([
                    'pl' => 'Identyfikacja potencjalnych źródeł zagrożenia i opracowywanie metod ich minimalizacji.',
                    'en' => 'Identifying potential sources of danger and developing methods to minimize them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11034,
                'name' => json_encode([
                    'pl' => 'Współdziałanie z innymi służbami, takimi jak policja, pogotowie ratunkowe i administracja publiczna w sytuacjach kryzysowych.',
                    'en' => 'Collaborating with other services, such as the police, emergency medical services, and public administration in crisis situations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11035,
                'name' => json_encode([
                    'pl' => 'Udział w ćwiczeniach zintegrowanych, mających na celu doskonalenie współpracy między służbami.',
                    'en' => 'Participating in integrated drills aimed at improving cooperation between services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11036,
                'name' => json_encode([
                    'pl' => 'Wspieranie instytucji w opracowywaniu przepisów i norm dotyczących ochrony przeciwpożarowej.',
                    'en' => 'Supporting institutions in developing regulations and standards related to fire protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11037,
                'name' => json_encode([
                    'pl' => 'Doradzanie w zakresie wdrażania standardów bezpieczeństwa pożarowego.',
                    'en' => 'Advising on the implementation of fire safety standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11038,
                'name' => json_encode([
                    'pl' => 'Organizowanie akcji informacyjnych na temat zapobiegania pożarom i zasad bezpiecznego postępowania.',
                    'en' => 'Organizing information campaigns on fire prevention and safe conduct.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11039,
                'name' => json_encode([
                    'pl' => 'Edukowanie społeczeństwa na temat podstawowych zasad ochrony przeciwpożarowej, np. w szkołach i instytucjach publicznych.',
                    'en' => 'Educating the public on basic fire protection principles, such as in schools and public institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11040,
                'name' => json_encode([
                    'pl' => 'Egzekwowanie przepisów przeciwpożarowych, nakładanie zaleceń naprawczych oraz monitorowanie ich realizacji.',
                    'en' => 'Enforcing fire regulations, issuing remedial recommendations, and monitoring their implementation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11041,
                'name' => json_encode([
                    'pl' => 'Współpraca z odpowiednimi organami w zakresie przeprowadzania kontroli i audytów bezpieczeństwa.',
                    'en' => 'Collaborating with relevant authorities in conducting safety inspections and audits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11042,
                'name' => json_encode([
                    'pl' => 'Analiza przyczyn i przebiegu pożarów oraz innych incydentów kryzysowych.',
                    'en' => 'Analyzing the causes and circumstances of fires and other crisis incidents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11043,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów i wniosków dotyczących przebiegu akcji ratowniczych oraz rekomendacji poprawiających działania w przyszłości.',
                    'en' => 'Preparing reports and recommendations regarding the course of rescue operations and suggestions for improving future actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11044,
                'name' => json_encode([
                    'pl' => 'Śledzenie zmian w przepisach prawa dotyczących ochrony przeciwpożarowej.',
                    'en' => 'Monitoring changes in legislation concerning fire protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11045,
                'name' => json_encode([
                    'pl' => 'Uaktualnianie wiedzy o nowoczesnych technologiach, sprzęcie i metodach gaszenia pożarów.',
                    'en' => 'Updating knowledge about modern technologies, equipment, and fire extinguishing methods.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11046,
                'name' => json_encode([
                    'pl' => 'Doradztwo podczas projektowania nowych budynków, aby zapewnić zgodność z przepisami przeciwpożarowymi.',
                    'en' => 'Advising during the design of new buildings to ensure compliance with fire regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11047,
                'name' => json_encode([
                    'pl' => 'Konsultacje w sprawie planów konstrukcyjnych i ewakuacyjnych oraz systemów przeciwpożarowych w budynkach.',
                    'en' => 'Consulting on construction and evacuation plans and fire protection systems in buildings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11048,
                'name' => json_encode([
                    'pl' => 'Ocenianie ryzyka w szczególnie niebezpiecznych miejscach, takich jak zakłady przemysłowe czy magazyny chemiczne.',
                    'en' => 'Assessing risks in particularly hazardous places, such as industrial plants or chemical warehouses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11049,
                'name' => json_encode([
                    'pl' => 'Wspieranie działań prewencyjnych oraz monitorowanie wdrażania zabezpieczeń w takich miejscach.',
                    'en' => 'Supporting preventive actions and monitoring the implementation of safety measures in such places.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11050,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad etyki zawodowej, standardów bezpieczeństwa oraz przepisów ochrony przeciwpożarowej.',
                    'en' => 'Adhering to professional ethics, safety standards, and fire protection regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11051,
                'name' => json_encode([
                    'pl' => 'Dbanie o rzetelność w wykonywaniu obowiązków oraz odpowiedzialność w podejmowaniu decyzji.',
                    'en' => 'Ensuring diligence in the performance of duties and responsibility in decision-making.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $FUNKCJONARIUSZE_CELNI_I_OCHRONY_GRANIC=[
            [
                'id' => 11052,
                'name' => json_encode([
                    'pl' => 'Weryfikacja tożsamości osób przekraczających granice oraz sprawdzanie ich dokumentów podróży.',
                    'en' => 'Verifying the identity of individuals crossing the borders and checking their travel documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11053,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie wywiadów oraz kontrola wizowa i paszportowa w celu zapobiegania nielegalnemu wjazdowi i wyjazdowi.',
                    'en' => 'Conducting interviews and visa and passport checks to prevent illegal entry and exit.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11054,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie zgodności przewożonych towarów z dokumentami oraz przepisami celnymi.',
                    'en' => 'Checking the compliance of transported goods with documents and customs regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11055,
                'name' => json_encode([
                    'pl' => 'Wykrywanie towarów zakazanych, takich jak narkotyki, broń, produkty podrobione i inne nielegalne materiały.',
                    'en' => 'Detecting prohibited goods, such as drugs, weapons, counterfeit products, and other illegal materials.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11056,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie kontroli celnych mających na celu wykrycie prób przemytu towarów i osób.',
                    'en' => 'Conducting customs inspections aimed at detecting attempts to smuggle goods and individuals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11057,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi służbami w działaniach operacyjnych, które mają na celu zwalczanie zorganizowanych grup przemytniczych.',
                    'en' => 'Cooperating with other services in operational actions aimed at combating organized smuggling groups.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11058,
                'name' => json_encode([
                    'pl' => 'Monitorowanie i zabezpieczanie obszarów przygranicznych, w tym patrolowanie granic morskich, lądowych i powietrznych.',
                    'en' => 'Monitoring and securing border areas, including patrolling maritime, land, and air borders.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11059,
                'name' => json_encode([
                    'pl' => 'Udział w działaniach mających na celu zatrzymanie osób próbujących nielegalnie przekroczyć granicę.',
                    'en' => 'Participating in operations aimed at detaining individuals attempting to illegally cross the border.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11060,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie inspekcji pojazdów, kontenerów, statków i samolotów w celu zapobiegania przemytowi oraz zapewnienia bezpieczeństwa.',
                    'en' => 'Conducting inspections of vehicles, containers, ships, and planes to prevent smuggling and ensure safety.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11061,
                'name' => json_encode([
                    'pl' => 'Używanie specjalistycznego sprzętu do skanowania i przeszukiwania pojazdów i ładunków.',
                    'en' => 'Using specialized equipment to scan and search vehicles and cargo.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11062,
                'name' => json_encode([
                    'pl' => 'Wykrywanie i zwalczanie przestępstw związanych z nielegalnym handlem, handlem ludźmi oraz przemytem.',
                    'en' => 'Detecting and combating crimes related to illegal trade, human trafficking, and smuggling.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11063,
                'name' => json_encode([
                    'pl' => 'Udział w operacjach wymierzonych przeciwko zorganizowanej przestępczości.',
                    'en' => 'Participating in operations aimed at organized crime.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11064,
                'name' => json_encode([
                    'pl' => 'Kontrola, czy towary i osoby przekraczające granice spełniają przepisy celne, graniczne, sanitarne i inne regulacje.',
                    'en' => 'Checking whether goods and individuals crossing the borders comply with customs, border, sanitary, and other regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11065,
                'name' => json_encode([
                    'pl' => 'Nakładanie mandatów, konfiskowanie towarów oraz podejmowanie działań administracyjnych wobec naruszeń przepisów.',
                    'en' => 'Imposing fines, confiscating goods, and taking administrative actions against violations of regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11066,
                'name' => json_encode([
                    'pl' => 'Prowadzenie dokumentacji dotyczącej przeprowadzonych kontroli i zatrzymań oraz zabezpieczanie dowodów rzeczowych.',
                    'en' => 'Maintaining documentation regarding conducted inspections and detentions and securing physical evidence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11067,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów z działań operacyjnych oraz dokumentowanie wyników kontroli.',
                    'en' => 'Preparing reports on operational actions and documenting inspection results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11068,
                'name' => json_encode([
                    'pl' => 'Używanie sprzętu rentgenowskiego, wykrywaczy metali, skanerów oraz psów służbowych w celu kontroli osób i towarów.',
                    'en' => 'Using X-ray machines, metal detectors, scanners, and service dogs for checking individuals and goods.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11069,
                'name' => json_encode([
                    'pl' => 'Prowadzenie regularnej konserwacji i sprawdzanie stanu technicznego używanego wyposażenia.',
                    'en' => 'Conducting regular maintenance and checking the technical condition of the equipment used.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11070,
                'name' => json_encode([
                    'pl' => 'Pełnienie służby patrolowej w strefie przygranicznej, w tym monitorowanie granic za pomocą systemów obserwacji i kamer.',
                    'en' => 'Performing patrol duties in border areas, including monitoring borders using observation systems and cameras.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11071,
                'name' => json_encode([
                    'pl' => 'Obserwacja obszarów przygranicznych, lotnisk, portów i innych punktów kontrolnych.',
                    'en' => 'Observing border areas, airports, ports, and other checkpoints.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11072,
                'name' => json_encode([
                    'pl' => 'Współdziałanie z innymi służbami celnymi, policją, strażą graniczną, służbami bezpieczeństwa oraz organizacjami międzynarodowymi.',
                    'en' => 'Cooperating with other customs services, police, border guards, security services, and international organizations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11073,
                'name' => json_encode([
                    'pl' => 'Udział w operacjach międzynarodowych oraz wymiana informacji wywiadowczych w celu zwalczania przestępczości transgranicznej.',
                    'en' => 'Participating in international operations and exchanging intelligence information to combat cross-border crime.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11074,
                'name' => json_encode([
                    'pl' => 'Informowanie podróżnych o przepisach celnych, zasadach przekraczania granic i wymogach dotyczących przewozu towarów.',
                    'en' => 'Informing travelers about customs regulations, border crossing rules, and requirements for transporting goods.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11075,
                'name' => json_encode([
                    'pl' => 'Udział w kampaniach edukacyjnych i prewencyjnych dotyczących bezpieczeństwa granicznego.',
                    'en' => 'Participating in educational and preventive campaigns related to border security.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11076,
                'name' => json_encode([
                    'pl' => 'Udzielanie wsparcia w sytuacjach nadzwyczajnych, takich jak zagrożenia terrorystyczne, klęski żywiołowe, sytuacje kryzysowe przy granicy.',
                    'en' => 'Providing support in emergencies such as terrorist threats, natural disasters, and border crises.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11077,
                'name' => json_encode([
                    'pl' => 'Udział w akcjach ratunkowych i działaniach pomocowych, zwłaszcza w przypadkach katastrof naturalnych lub wypadków.',
                    'en' => 'Participating in rescue operations and relief efforts, especially in cases of natural disasters or accidents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11078,
                'name' => json_encode([
                    'pl' => 'Kontrola towarów pod kątem przestrzegania przepisów sanitarnych, zwłaszcza przy przewozie produktów spożywczych, zwierząt i roślin.',
                    'en' => 'Controlling goods for compliance with sanitary regulations, especially when transporting food products, animals, and plants.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11079,
                'name' => json_encode([
                    'pl' => 'Podejmowanie działań mających na celu zapobieganie rozprzestrzenianiu się chorób zakaźnych przez osoby przekraczające granice.',
                    'en' => 'Taking actions to prevent the spread of infectious diseases by individuals crossing the borders.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11080,
                'name' => json_encode([
                    'pl' => 'Wykrywanie i identyfikacja podrobionych dokumentów, wiz, paszportów i innych dokumentów niezbędnych do przekroczenia granicy.',
                    'en' => 'Detecting and identifying counterfeit documents, visas, passports, and other documents necessary for crossing the border.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11081,
                'name' => json_encode([
                    'pl' => 'Prowadzenie działań dochodzeniowych w przypadku ujawnienia fałszywych dokumentów.',
                    'en' => 'Conducting investigations in cases of revealed false documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11082,
                'name' => json_encode([
                    'pl' => 'Zapewnienie bezpieczeństwa i porządku na przejściach granicznych oraz punktach kontroli celnej.',
                    'en' => 'Ensuring safety and order at border crossings and customs checkpoints.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11083,
                'name' => json_encode([
                    'pl' => 'Interweniowanie w przypadkach zakłóceń porządku i podejmowanie działań prewencyjnych.',
                    'en' => 'Intervening in cases of disturbances of order and taking preventive actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11084,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów oraz zasad etyki zawodowej, zapewniając bezstronność i odpowiedzialność w wykonywaniu swoich obowiązków.',
                    'en' => 'Adhering to regulations and professional ethics, ensuring impartiality and responsibility in the performance of duties.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11085,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszystkie działania są prowadzone zgodnie z prawem oraz z poszanowaniem godności i praw osób kontrolowanych.',
                    'en' => 'Ensuring that all actions are conducted in accordance with the law and with respect for the dignity and rights of controlled individuals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11086,
                'name' => json_encode([
                    'pl' => 'Przekazywanie raportów i wyników kontroli przełożonym oraz prowadzenie dokumentacji operacyjnej.',
                    'en' => 'Reporting and submitting inspection results to superiors and maintaining operational documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11087,
                'name' => json_encode([
                    'pl' => 'Analiza danych dotyczących przemytu, naruszeń przepisów oraz poziomu zagrożeń transgranicznych.',
                    'en' => 'Analyzing data on smuggling, violations of regulations, and levels of cross-border threats.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11088,
                'name' => json_encode([
                    'pl' => 'Regularne podnoszenie kwalifikacji poprzez szkolenia z zakresu technik kontroli, przepisów prawnych, ochrony granic oraz bezpieczeństwa celnego.',
                    'en' => 'Regularly upgrading skills through training in control techniques, legal regulations, border protection, and customs security.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11089,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych metod przemytu i zmian w przepisach prawa.',
                    'en' => 'Updating knowledge about new smuggling methods and changes in legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11090,
                'name' => json_encode([
                    'pl' => 'Zwracanie uwagi na potencjalne zagrożenia terrorystyczne i współpraca z odpowiednimi służbami w zakresie ich zapobiegania.',
                    'en' => 'Paying attention to potential terrorist threats and cooperating with relevant services to prevent them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11091,
                'name' => json_encode([
                    'pl' => 'Kontrola bagaży, pojazdów oraz osób pod kątem materiałów i substancji mogących stanowić zagrożenie terrorystyczne.',
                    'en' => 'Inspecting luggage, vehicles, and individuals for materials and substances that may pose a terrorist threat.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $NEGOCJATOR_POLICYJNY = [
            [
                'id' => 11092,
                'name' => json_encode([
                    'pl' => 'Podejmowanie dialogu z osobami zaangażowanymi w sytuację kryzysową, takimi jak przestępcy, porywacze, osoby zabarykadowane, czy osoby chcące popełnić samobójstwo.',
                    'en' => 'Engaging in dialogue with individuals involved in a crisis situation, such as criminals, kidnappers, barricaded individuals, or those wanting to commit suicide.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11093,
                'name' => json_encode([
                    'pl' => 'Budowanie relacji i zaufania w celu osiągnięcia pokojowego rozwiązania sytuacji.',
                    'en' => 'Building rapport and trust to achieve a peaceful resolution to the situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11094,
                'name' => json_encode([
                    'pl' => 'Szybka ocena sytuacji kryzysowej, w tym identyfikacja rodzaju zagrożenia, motywacji osób biorących udział w zdarzeniu i poziomu ryzyka.',
                    'en' => 'Quick assessment of the crisis situation, including identifying the type of threat, motivations of the individuals involved, and the level of risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11095,
                'name' => json_encode([
                    'pl' => 'Analiza psychologicznych i emocjonalnych aspektów sytuacji w celu dostosowania strategii negocjacyjnych.',
                    'en' => 'Analyzing the psychological and emotional aspects of the situation to tailor negotiation strategies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11096,
                'name' => json_encode([
                    'pl' => 'Opracowywanie strategii i podejścia do negocjacji w zależności od charakteru sytuacji i motywacji osób zaangażowanych.',
                    'en' => 'Developing strategies and approaches to negotiation based on the nature of the situation and the motivations of the individuals involved.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11097,
                'name' => json_encode([
                    'pl' => 'Wybór taktyk negocjacyjnych, takich jak techniki perswazji, deeskalacja napięcia, zapewnienie poczucia bezpieczeństwa oraz techniki psychologiczne.',
                    'en' => 'Selecting negotiation tactics such as persuasion techniques, de-escalation of tension, ensuring a sense of safety, and psychological techniques.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11098,
                'name' => json_encode([
                    'pl' => 'Ścisła współpraca z dowódcami, zespołami taktycznymi, psychologami i innymi specjalistami podczas trwania sytuacji kryzysowej.',
                    'en' => 'Close cooperation with commanders, tactical teams, psychologists, and other specialists during the crisis situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11099,
                'name' => json_encode([
                    'pl' => 'Informowanie zespołu o przebiegu negocjacji i przekazywanie kluczowych informacji pomocnych dla operacji.',
                    'en' => 'Informing the team about the progress of negotiations and conveying key information helpful for the operation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11100,
                'name' => json_encode([
                    'pl' => 'Używanie empatii, aktywnego słuchania i zrozumienia emocji, aby zdobyć zaufanie osoby w sytuacji kryzysowej.',
                    'en' => 'Using empathy, active listening, and understanding emotions to gain the trust of the individual in the crisis situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11101,
                'name' => json_encode([
                    'pl' => 'Dbanie o to, aby osoba w kryzysie czuła się wysłuchana i zrozumiana, co może pomóc w rozwiązaniu sytuacji bez użycia siły.',
                    'en' => 'Ensuring that the individual in crisis feels heard and understood, which can help resolve the situation without the use of force.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11102,
                'name' => json_encode([
                    'pl' => 'Dążenie do jak najszybszego i najbezpieczniejszego uwolnienia zakładników oraz zapewnienia bezpieczeństwa osób postronnych.',
                    'en' => 'Striving for the quickest and safest release of hostages and ensuring the safety of bystanders.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11103,
                'name' => json_encode([
                    'pl' => 'Minimalizacja ryzyka obrażeń i utraty życia wśród uczestników sytuacji kryzysowej.',
                    'en' => 'Minimizing the risk of injury and loss of life among participants in the crisis situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11104,
                'name' => json_encode([
                    'pl' => 'Odbieranie i analizowanie żądań osób zaangażowanych w sytuację kryzysową.',
                    'en' => 'Receiving and analyzing the demands of individuals involved in the crisis situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11105,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji dotyczących żądań do zespołu dowodzenia i ustalanie możliwych odpowiedzi i ustępstw.',
                    'en' => 'Conveying information regarding demands to the command team and determining possible responses and concessions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11106,
                'name' => json_encode([
                    'pl' => 'Wykorzystywanie technik komunikacyjnych i psychologicznych w celu zmniejszenia napięcia emocjonalnego i agresji.',
                    'en' => 'Utilizing communication and psychological techniques to reduce emotional tension and aggression.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11107,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie elementów, które mogą uspokoić sytuację, np. zapewnienie podstawowych potrzeb, takich jak woda, jedzenie, czy komfort psychiczny.',
                    'en' => 'Introducing elements that can calm the situation, such as providing basic needs like water, food, or psychological comfort.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11108,
                'name' => json_encode([
                    'pl' => 'Wsparcie osób w sytuacji kryzysowej poprzez spokojną komunikację i pomoc w odzyskaniu kontroli nad emocjami.',
                    'en' => 'Supporting individuals in crisis through calm communication and assistance in regaining control over their emotions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11109,
                'name' => json_encode([
                    'pl' => 'Współpraca z psychologami, aby lepiej rozumieć reakcje emocjonalne i skuteczniej reagować na zmieniający się stan psychiczny osób.',
                    'en' => 'Collaborating with psychologists to better understand emotional reactions and respond more effectively to changing psychological states.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11110,
                'name' => json_encode([
                    'pl' => 'Regularne informowanie zespołu taktycznego o sytuacji oraz o wszelkich ustaleniach, które mogą mieć wpływ na działania operacyjne.',
                    'en' => 'Regularly updating the tactical team about the situation and any agreements that may affect operational actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11111,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań i podejmowanie decyzji w zależności od przebiegu negocjacji.',
                    'en' => 'Coordinating actions and making decisions based on the progress of negotiations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11112,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie przebiegu negocjacji oraz dokumentowanie kluczowych informacji, które mogą być wykorzystane w analizie sytuacji.',
                    'en' => 'Recording the course of negotiations and documenting key information that can be used in situation analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11113,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów po zakończeniu negocjacji, które mogą pomóc w doskonaleniu przyszłych procedur i strategii.',
                    'en' => 'Preparing reports after negotiations conclude that can help improve future procedures and strategies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11114,
                'name' => json_encode([
                    'pl' => 'Po zakończeniu sytuacji kryzysowej, analiza podejścia do negocjacji oraz wyników w celu wprowadzenia ewentualnych usprawnień.',
                    'en' => 'After the crisis situation ends, analyzing the negotiation approach and outcomes to implement potential improvements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11115,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analizy działań, które mogą pomóc w doskonaleniu procedur i wypracowywaniu lepszych metod radzenia sobie z sytuacjami kryzysowymi.',
                    'en' => 'Conducting an analysis of actions that can help improve procedures and develop better methods for dealing with crisis situations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11116,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach, kursach i symulacjach sytuacji kryzysowych w celu doskonalenia umiejętności negocjacyjnych i taktycznych.',
                    'en' => 'Participating in training, courses, and simulations of crisis situations to improve negotiation and tactical skills.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11117,
                'name' => json_encode([
                    'pl' => 'Śledzenie nowych trendów, technik i metod negocjacji stosowanych na arenie międzynarodowej.',
                    'en' => 'Tracking new trends, techniques, and methods of negotiation used internationally.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11118,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad etyki zawodowej, zapewniając, że wszystkie działania są zgodne z przepisami i szanują godność osób zaangażowanych w kryzys.',
                    'en' => 'Adhering to professional ethics, ensuring that all actions comply with regulations and respect the dignity of individuals involved in the crisis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11119,
                'name' => json_encode([
                    'pl' => 'Zachowanie obiektywności i spokoju nawet w stresujących sytuacjach, aby podejmować racjonalne i przemyślane decyzje.',
                    'en' => 'Maintaining objectivity and calm even in stressful situations to make rational and thoughtful decisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11120,
                'name' => json_encode([
                    'pl' => 'Udział w debriefingu po zakończonej sytuacji kryzysowej w celu omówienia przebiegu zdarzenia i wyciągnięcia wniosków.',
                    'en' => 'Participating in debriefing after the crisis situation ends to discuss the course of the event and draw conclusions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11121,
                'name' => json_encode([
                    'pl' => 'Zapewnienie wsparcia psychologicznego członkom zespołu, którzy byli zaangażowani w trudne emocjonalnie negocjacje.',
                    'en' => 'Providing psychological support to team members involved in emotionally challenging negotiations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $POLICJANT_SŁUŻBY_KRYMINALNEJ = [
            [
                "id" => 11122,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie postępowań wyjaśniających w sprawach przestępstw, w tym gromadzenie dowodów, przesłuchiwanie świadków oraz poszukiwanie sprawców.",
                    "en" => "Conducting investigations into crimes, including gathering evidence, interviewing witnesses, and seeking suspects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11123,
                "name" => json_encode([
                    "pl" => "Sporządzanie protokołów i dokumentacji związanej z dochodzeniem.",
                    "en" => "Preparing reports and documentation related to the investigation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11124,
                "name" => json_encode([
                    "pl" => "Zbieranie materiałów dowodowych, takich jak odciski palców, ślady biologiczne, nagrania, przedmioty pochodzące z przestępstwa.",
                    "en" => "Collecting evidence materials such as fingerprints, biological traces, recordings, and items related to the crime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11125,
                "name" => json_encode([
                    "pl" => "Zapewnienie prawidłowego zabezpieczenia dowodów, aby mogły być użyte w sądzie.",
                    "en" => "Ensuring proper preservation of evidence so that it can be used in court."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11126,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie rozmów i przesłuchań w celu uzyskania informacji i wyjaśnień dotyczących przestępstwa.",
                    "en" => "Conducting interviews and interrogations to obtain information and explanations regarding the crime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11127,
                "name" => json_encode([
                    "pl" => "Sporządzanie protokołów z przesłuchań, które będą miały wartość dowodową.",
                    "en" => "Preparing records of interrogations that will have evidential value."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11128,
                "name" => json_encode([
                    "pl" => "Analizowanie zebranych informacji w celu ustalenia sposobu działania sprawców oraz ich motywacji.",
                    "en" => "Analyzing gathered information to determine the perpetrators' methods and motivations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11129,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie technik analizy kryminalnej do identyfikacji związków pomiędzy różnymi przestępstwami.",
                    "en" => "Using criminal analysis techniques to identify links between various crimes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11130,
                "name" => json_encode([
                    "pl" => "Prowadzenie obserwacji miejsc, osób i obiektów, które mogą być związane z przestępstwami.",
                    "en" => "Conducting surveillance of locations, individuals, and objects that may be related to crimes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11131,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie technik operacyjnych, takich jak śledzenie podejrzanych, monitoring miejsc publicznych, podsłuchy i inne techniki operacyjne.",
                    "en" => "Utilizing operational techniques such as tracking suspects, monitoring public places, wiretapping, and other operational methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11132,
                "name" => json_encode([
                    "pl" => "Współdziałanie z innymi jednostkami policji, prokuraturą, strażą graniczną, służbami specjalnymi i innymi organami ścigania.",
                    "en" => "Cooperating with other police units, prosecutors, border guards, special services, and other law enforcement agencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11133,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami międzynarodowymi w sprawach dotyczących przestępczości o charakterze transgranicznym.",
                    "en" => "Collaborating with international institutions in matters related to cross-border crime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11134,
                "name" => json_encode([
                    "pl" => "Przygotowywanie wniosków o wszczęcie postępowania, areszty, przeszukania oraz inne czynności procesowe.",
                    "en" => "Preparing applications for initiating proceedings, arrests, searches, and other procedural actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11135,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeszukań i zabezpieczanie mienia, które mogło zostać zdobyte w wyniku przestępstwa.",
                    "en" => "Conducting searches and securing property that may have been acquired as a result of a crime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11136,
                "name" => json_encode([
                    "pl" => "Tworzenie dokumentów związanych z prowadzonymi dochodzeniami, takich jak protokoły z przesłuchań, raporty z obserwacji, raporty operacyjne.",
                    "en" => "Creating documents related to ongoing investigations, such as interrogation records, observation reports, and operational reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11137,
                "name" => json_encode([
                    "pl" => "Sporządzanie akt sprawy, które będą wykorzystane przez prokuraturę i sąd.",
                    "en" => "Preparing case files that will be used by the prosecutor's office and the court."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11138,
                "name" => json_encode([
                    "pl" => "Prowadzenie działań mających na celu rozbicie grup przestępczych, identyfikacja ich członków i struktury.",
                    "en" => "Conducting operations to dismantle criminal organizations, identifying their members and structure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11139,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie metod operacyjnych i współpraca z innymi służbami w celu likwidacji organizacji przestępczych.",
                    "en" => "Utilizing operational methods and cooperating with other agencies to eliminate criminal organizations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11140,
                "name" => json_encode([
                    "pl" => "Podejmowanie działań mających na celu ochronę osób i mienia przed działalnością przestępczą.",
                    "en" => "Taking actions to protect individuals and property from criminal activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11141,
                "name" => json_encode([
                    "pl" => "Udział w działaniach zapobiegających przestępstwom oraz szybkie reagowanie na zgłoszenia o przestępstwach.",
                    "en" => "Participating in crime prevention efforts and responding quickly to reports of crimes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11142,
                "name" => json_encode([
                    "pl" => "Analiza danych dotyczących przestępczości, w tym identyfikacja obszarów o podwyższonym ryzyku oraz przestępców powracających do działalności przestępczej.",
                    "en" => "Analyzing crime data, including identifying high-risk areas and recidivist offenders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11143,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii zapobiegania przestępczości na podstawie analizy trendów i zachowań przestępczych.",
                    "en" => "Developing crime prevention strategies based on analysis of crime trends and behaviors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11144,
                "name" => json_encode([
                    "pl" => "Zajmowanie się sprawami morderstw, napaści, porwań oraz innymi poważnymi przestępstwami.",
                    "en" => "Handling cases of murder, assault, kidnapping, and other serious crimes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11145,
                "name" => json_encode([
                    "pl" => "Podejmowanie czynności mających na celu zatrzymanie niebezpiecznych sprawców i zebranie dowodów potrzebnych do ich skazania.",
                    "en" => "Taking actions to apprehend dangerous offenders and collect evidence needed for their conviction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11146,
                "name" => json_encode([
                    "pl" => "Prowadzenie czynności obserwacyjnych wobec osób podejrzanych o działalność przestępczą.",
                    "en" => "Conducting surveillance of individuals suspected of criminal activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11147,
                "name" => json_encode([
                    "pl" => "Monitorowanie miejsc szczególnie narażonych na przestępstwa, takich jak centra handlowe, osiedla, bary, czy miejsca spotkań przestępców.",
                    "en" => "Monitoring locations particularly vulnerable to crime, such as shopping centers, neighborhoods, bars, or meeting places for criminals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11148,
                "name" => json_encode([
                    "pl" => "Sporządzanie akt spraw, które będą podstawą dla prokuratury do wniesienia oskarżenia oraz dla sądu do rozpatrzenia sprawy.",
                    "en" => "Preparing case files that will serve as the basis for the prosecution to file charges and for the court to consider the case."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11149,
                "name" => json_encode([
                    "pl" => "Współpraca z prokuraturą w celu zapewnienia kompletności i rzetelności materiału dowodowego.",
                    "en" => "Cooperating with the prosecution to ensure the completeness and reliability of evidence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11150,
                "name" => json_encode([
                    "pl" => "Reprezentowanie służby kryminalnej w sądzie, w tym przedstawianie zebranych dowodów i składanie zeznań.",
                    "en" => "Representing the criminal service in court, including presenting collected evidence and providing testimony."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11151,
                "name" => json_encode([
                    "pl" => "Współpraca z prokuratorami w trakcie rozpraw w celu przedstawienia dowodów oraz przebiegu dochodzenia.",
                    "en" => "Collaborating with prosecutors during hearings to present evidence and the course of the investigation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11152,
                "name" => json_encode([
                    "pl" => "Podejmowanie działań mających na celu zapobieganie powrotowi sprawców do działalności przestępczej.",
                    "en" => "Taking actions to prevent offenders from returning to criminal activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11153,
                "name" => json_encode([
                    "pl" => "Monitorowanie osób wcześniej skazanych i zwolnionych z więzienia, szczególnie tych, którzy wykazują skłonność do ponownego popełnienia przestępstwa.",
                    "en" => "Monitoring individuals previously convicted and released from prison, particularly those showing tendencies to reoffend."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11154,
                "name" => json_encode([
                    "pl" => "Zabezpieczanie śladów kryminalistycznych, analiza dowodów kryminalistycznych oraz współpraca z technikami kryminalistyki.",
                    "en" => "Securing criminal evidence, analyzing forensic evidence, and collaborating with forensic technicians."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11155,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie wiedzy z zakresu balistyki, daktyloskopii, analizy DNA i innych dziedzin kryminalistyki.",
                    "en" => "Applying knowledge from the fields of ballistics, fingerprinting, DNA analysis, and other forensic disciplines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11156,
                "name" => json_encode([
                    "pl" => "Działanie zgodnie z zasadami etyki zawodowej i kodeksem postępowania, zachowując bezstronność i profesjonalizm.",
                    "en" => "Acting in accordance with professional ethics and the code of conduct, maintaining impartiality and professionalism."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11157,
                "name" => json_encode([
                    "pl" => "Dbałość o poufność i ochrona informacji zebranych podczas dochodzenia.",
                    "en" => "Ensuring confidentiality and protecting information gathered during the investigation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11158,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach, kursach oraz doskonaleniu zawodowym w celu podnoszenia kompetencji i umiejętności.",
                    "en" => "Participating in training, courses, and professional development to enhance competencies and skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11159,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy o nowych technikach dochodzeniowych, przepisach prawa oraz sposobach zwalczania przestępczości.",
                    "en" => "Updating knowledge on new investigative techniques, laws, and methods of combating crime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_KRYMINALISTYKI = [
            [
                "id" => 11160,
                "name" => json_encode([
                    "pl" => "Ogradzanie i zabezpieczanie miejsca przestępstwa, aby zapobiec zanieczyszczeniu dowodów.",
                    "en" => "Securing and cordoning off the crime scene to prevent contamination of evidence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11161,
                "name" => json_encode([
                    "pl" => "Oznaczanie i dokumentowanie kluczowych miejsc na miejscu zdarzenia.",
                    "en" => "Marking and documenting key locations at the scene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11162,
                "name" => json_encode([
                    "pl" => "Zbieranie i zabezpieczanie dowodów, takich jak odciski palców, ślady biologiczne (np. krew, włosy), odciski butów, ślady opon oraz inne przedmioty mogące mieć związek z przestępstwem.",
                    "en" => "Collecting and securing evidence such as fingerprints, biological traces (e.g., blood, hair), shoe prints, tire marks, and other items that may relate to the crime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11163,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szczegółowych pomiarów oraz oznaczanie dowodów, aby mogły być dokładnie analizowane później w laboratorium.",
                    "en" => "Conducting detailed measurements and marking evidence for accurate analysis later in the laboratory."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11164,
                "name" => json_encode([
                    "pl" => "Wykonywanie fotografii miejsca zdarzenia z różnych perspektyw i w różnych skalach, aby dokładnie udokumentować układ dowodów i miejsce przestępstwa.",
                    "en" => "Taking photographs of the scene from different angles and scales to thoroughly document the arrangement of evidence and the crime scene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11165,
                "name" => json_encode([
                    "pl" => "Tworzenie szkiców, rysunków i diagramów przedstawiających rozmieszczenie dowodów i kluczowych obiektów na miejscu zdarzenia.",
                    "en" => "Creating sketches, drawings, and diagrams depicting the layout of evidence and key objects at the scene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11166,
                "name" => json_encode([
                    "pl" => "Stosowanie odpowiednich technik do pobierania odcisków palców z różnych powierzchni, np. za pomocą proszku daktyloskopijnego.",
                    "en" => "Using appropriate techniques to collect fingerprints from various surfaces, such as fingerprint powder."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11167,
                "name" => json_encode([
                    "pl" => "Zabezpieczanie odcisków i ich dokumentowanie do późniejszej analizy porównawczej.",
                    "en" => "Securing fingerprints and documenting them for later comparative analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11168,
                "name" => json_encode([
                    "pl" => "Zbieranie i zabezpieczanie śladów biologicznych, takich jak krew, ślina, włosy, nasienie, oraz przekazywanie ich do analizy DNA.",
                    "en" => "Collecting and securing biological traces, such as blood, saliva, hair, semen, and forwarding them for DNA analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11169,
                "name" => json_encode([
                    "pl" => "Stosowanie specjalistycznych narzędzi i środków do pobierania i przechowywania materiałów biologicznych, aby uniknąć ich degradacji.",
                    "en" => "Using specialized tools and materials for collecting and storing biological samples to prevent degradation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11170,
                "name" => json_encode([
                    "pl" => "Zabezpieczanie śladów substancji chemicznych, materiałów wybuchowych, narkotyków oraz innych substancji mogących mieć znaczenie dowodowe.",
                    "en" => "Securing traces of chemical substances, explosives, drugs, and other items that may have evidential significance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11171,
                "name" => json_encode([
                    "pl" => "Przekazywanie zabezpieczonych próbek do analizy laboratoryjnej.",
                    "en" => "Forwarding secured samples for laboratory analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11172,
                "name" => json_encode([
                    "pl" => "Pobieranie odlewów śladów opon, butów, narzędzi lub innych przedmiotów mogących pozostawić ślady na miejscu zdarzenia.",
                    "en" => "Taking casts of tire, shoe, tool, or other marks that may have been left at the crime scene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11173,
                "name" => json_encode([
                    "pl" => "Analiza i dokumentowanie śladów użytych narzędzi (np. śladów łomu, noża), które mogły zostać użyte do dokonania przestępstwa.",
                    "en" => "Analyzing and documenting tool marks (e.g., crowbar, knife marks) that may have been used to commit the crime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11174,
                "name" => json_encode([
                    "pl" => "Obsługa specjalistycznych urządzeń do analizy dowodów, takich jak mikroskopy, spektrometry, kamery UV i IR, urządzenia do pobierania odcisków oraz skanery 3D.",
                    "en" => "Using specialized devices for analyzing evidence, such as microscopes, spectrometers, UV and IR cameras, fingerprinting devices, and 3D scanners."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11175,
                "name" => json_encode([
                    "pl" => "Kalibracja i konserwacja sprzętu kryminalistycznego, aby zapewnić dokładność analiz.",
                    "en" => "Calibrating and maintaining forensic equipment to ensure accuracy of analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11176,
                "name" => json_encode([
                    "pl" => "Zbieranie śladów związanych z bronią palną, takich jak łuski, pociski oraz zabezpieczanie samej broni, jeśli została odnaleziona na miejscu zdarzenia.",
                    "en" => "Collecting evidence related to firearms, such as casings, bullets, and securing the weapon itself if found at the scene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11177,
                "name" => json_encode([
                    "pl" => "Pomiar i dokumentowanie trajektorii pocisków oraz analiza miejsca strzałów.",
                    "en" => "Measuring and documenting bullet trajectories and analyzing the shooting scene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11178,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi technikami, policjantami, patologami, specjalistami balistyki, chemii oraz biologii w celu kompleksowej analizy miejsca zdarzenia.",
                    "en" => "Collaborating with other technicians, police officers, pathologists, ballistics specialists, chemists, and biologists for comprehensive scene analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11179,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z innymi zespołami śledczymi i ekspertami, aby uzyskać jak najwięcej informacji o przebiegu przestępstwa.",
                    "en" => "Coordinating efforts with other investigative teams and experts to gather as much information as possible about the crime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11180,
                "name" => json_encode([
                    "pl" => "Przechowywanie dowodów w odpowiednich pojemnikach, zapewniających ich integralność podczas transportu.",
                    "en" => "Storing evidence in appropriate containers to ensure its integrity during transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11181,
                "name" => json_encode([
                    "pl" => "Przekazywanie dowodów do laboratorium kryminalistycznego oraz monitorowanie ich drogi, aby uniknąć zagubienia lub uszkodzenia.",
                    "en" => "Transferring evidence to the forensic laboratory and tracking its path to avoid loss or damage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11182,
                "name" => json_encode([
                    "pl" => "Prowadzenie analiz i testów laboratoryjnych, jeśli technik kryminalistyki pracuje bezpośrednio w laboratorium.",
                    "en" => "Conducting analyses and laboratory tests if the forensic technician works directly in the laboratory."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11183,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie technik chemicznych, biologicznych i fizycznych do analizy dowodów i wyciągania wniosków dotyczących sprawy.",
                    "en" => "Utilizing chemical, biological, and physical techniques to analyze evidence and draw conclusions about the case."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11184,
                "name" => json_encode([
                    "pl" => "Sporządzanie szczegółowych raportów i dokumentacji z przeprowadzonych badań i analiz.",
                    "en" => "Preparing detailed reports and documentation of the conducted examinations and analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11185,
                "name" => json_encode([
                    "pl" => "Przekazywanie raportów do policji oraz prokuratury, aby mogły być one wykorzystane w postępowaniu sądowym.",
                    "en" => "Forwarding reports to the police and the prosecutor's office for use in judicial proceedings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11186,
                "name" => json_encode([
                    "pl" => "Dbanie o prawidłowe przechowywanie, oznaczenie i dokumentowanie dowodów w taki sposób, aby mogły zostać przedstawione w sądzie bez wątpliwości co do ich autentyczności.",
                    "en" => "Ensuring proper storage, labeling, and documentation of evidence so that it can be presented in court without doubts about its authenticity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11187,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur łańcucha dowodowego, aby dowody nie zostały zanieczyszczone lub usunięte.",
                    "en" => "Adhering to chain of custody procedures to ensure evidence is not contaminated or removed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11188,
                "name" => json_encode([
                    "pl" => "Organizowanie i dokumentowanie dowodów, które mają być porównane z próbkami pobranymi od podejrzanych, aby ustalić ich związki z miejscem zdarzenia.",
                    "en" => "Organizing and documenting evidence to be compared with samples taken from suspects to establish their connection to the crime scene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11189,
                "name" => json_encode([
                    "pl" => "Przekazywanie materiałów do specjalistów zajmujących się analizą porównawczą, np. daktyloskopii lub analizy DNA.",
                    "en" => "Forwarding materials to specialists in comparative analysis, such as fingerprint analysis or DNA analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11190,
                "name" => json_encode([
                    "pl" => "Składanie zeznań jako biegły świadek i przedstawianie wyników badań oraz analiz przeprowadzonych na miejscu zdarzenia.",
                    "en" => "Testifying as an expert witness and presenting findings from examinations and analyses conducted at the crime scene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11191,
                "name" => json_encode([
                    "pl" => "Objaśnianie metod i technik użytych podczas zabezpieczania dowodów, aby były one zrozumiałe dla sądu i stron postępowania.",
                    "en" => "Explaining the methods and techniques used during evidence collection so they are understandable for the court and parties involved."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11192,
                "name" => json_encode([
                    "pl" => "Uczestniczenie w kursach, szkoleniach i konferencjach dotyczących nowoczesnych technik kryminalistycznych i procedur.",
                    "en" => "Participating in courses, training, and conferences on modern forensic techniques and procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11193,
                "name" => json_encode([
                    "pl" => "Śledzenie najnowszych osiągnięć w dziedzinie kryminalistyki i wdrażanie nowych technologii do pracy.",
                    "en" => "Keeping up with the latest advances in forensic science and implementing new technologies in work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11194,
                "name" => json_encode([
                    "pl" => "Działanie zgodnie z zasadami etyki zawodowej, zapewniając obiektywność, rzetelność oraz bezstronność w przeprowadzanych analizach.",
                    "en" => "Acting in accordance with professional ethics, ensuring objectivity, reliability, and impartiality in conducted analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11195,
                "name" => json_encode([
                    "pl" => "Dbałość o poufność i ochronę informacji związanych z prowadzonymi sprawami kryminalnymi.",
                    "en" => "Ensuring confidentiality and protection of information related to ongoing criminal cases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $policjant_sluzby_preventyjne = [
            [
                "id" => 11196,
                "name" => json_encode([
                    "pl" => "Regularne patrolowanie wyznaczonych terenów w celu zapewnienia porządku i przeciwdziałania przestępstwom oraz wykroczeniom.",
                    "en" => "Regularly patrolling designated areas to maintain order and prevent crimes and offenses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11197,
                "name" => json_encode([
                    "pl" => "Reagowanie na podejrzane zachowania i zdarzenia oraz podejmowanie działań prewencyjnych.",
                    "en" => "Responding to suspicious behavior and events and taking preventive actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11198,
                "name" => json_encode([
                    "pl" => "Odpowiadanie na zgłoszenia obywateli dotyczące zagrożeń, konfliktów i przestępstw.",
                    "en" => "Responding to citizens' reports of threats, conflicts, and crimes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11199,
                "name" => json_encode([
                    "pl" => "Prowadzenie interwencji w przypadkach zakłócenia porządku publicznego, przemocy domowej, awantur czy aktów wandalizmu.",
                    "en" => "Conducting interventions in cases of public disorder, domestic violence, brawls, or acts of vandalism."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11200,
                "name" => json_encode([
                    "pl" => "Utrzymanie bezpieczeństwa podczas demonstracji, imprez masowych, wydarzeń sportowych i kulturalnych.",
                    "en" => "Maintaining safety during demonstrations, mass events, sports, and cultural activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11201,
                "name" => json_encode([
                    "pl" => "Monitorowanie sytuacji, zapobieganie eskalacji konfliktów i zapewnienie bezpieczeństwa uczestnikom.",
                    "en" => "Monitoring situations, preventing conflict escalation, and ensuring participant safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11202,
                "name" => json_encode([
                    "pl" => "Prowadzenie działań profilaktycznych mających na celu zniechęcanie do popełniania przestępstw i wykroczeń.",
                    "en" => "Conducting preventive actions aimed at discouraging crime and offenses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11203,
                "name" => json_encode([
                    "pl" => "Kontrola miejsc szczególnie zagrożonych przestępczością, takich jak okolice szkół, osiedla mieszkalne, dworce i parki.",
                    "en" => "Monitoring areas particularly at risk of crime, such as school surroundings, residential neighborhoods, train stations, and parks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11204,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli tożsamości w przypadku podejrzenia o popełnienie przestępstwa lub wykroczenia.",
                    "en" => "Conducting identity checks if suspicion arises about the commission of a crime or offense."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11205,
                "name" => json_encode([
                    "pl" => "Sprawdzanie dokumentów oraz ustalanie tożsamości osób, które mogą być poszukiwane przez organy ścigania.",
                    "en" => "Checking documents and establishing the identity of individuals who may be wanted by law enforcement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11206,
                "name" => json_encode([
                    "pl" => "Prowadzenie działań prewencyjnych i kontroli na drogach, w tym kontrolowanie trzeźwości kierowców, stanu technicznego pojazdów oraz dokumentów.",
                    "en" => "Conducting preventive actions and controls on the roads, including checking drivers' sobriety, vehicle technical condition, and documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11207,
                "name" => json_encode([
                    "pl" => "Udział w akcjach prewencyjnych, takich jak „Trzeźwy poranek” czy „Bezpieczna droga”.",
                    "en" => "Participating in preventive actions, such as 'Sober Morning' or 'Safe Road'."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11208,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje, w których osoby nietrzeźwe zakłócają porządek publiczny lub stwarzają zagrożenie dla siebie i innych.",
                    "en" => "Responding to situations where intoxicated individuals disturb public order or pose a danger to themselves and others."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11209,
                "name" => json_encode([
                    "pl" => "Przewożenie osób nietrzeźwych do izby wytrzeźwień lub przekazywanie ich opiekunom.",
                    "en" => "Transporting intoxicated individuals to sobering-up centers or handing them over to their guardians."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11210,
                "name" => json_encode([
                    "pl" => "Podejmowanie interwencji w przypadku zgłoszeń przemocy domowej, w tym ochrona ofiar i izolacja sprawcy.",
                    "en" => "Intervening in cases of domestic violence reports, including protecting victims and isolating the perpetrator."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11211,
                "name" => json_encode([
                    "pl" => "Informowanie ofiar o dostępnych formach pomocy i procedurach prawnych oraz podejmowanie działań mających na celu zapobieganie recydywie.",
                    "en" => "Informing victims about available forms of assistance and legal procedures and taking actions to prevent recidivism."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11212,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań z młodzieżą, rodzicami i nauczycielami na temat bezpieczeństwa, przeciwdziałania przemocy, narkomanii i cyberprzemocy.",
                    "en" => "Organizing meetings with youth, parents, and teachers about safety, preventing violence, drug abuse, and cyberbullying."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11213,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami edukacyjnymi i organizacjami społecznymi w ramach profilaktyki przestępczości i promowania postaw obywatelskich.",
                    "en" => "Cooperating with educational institutions and social organizations in crime prevention and promoting civic attitudes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11214,
                "name" => json_encode([
                    "pl" => "Prowadzenie działań informacyjnych dla społeczeństwa, promowanie bezpiecznych zachowań i udzielanie informacji o zagrożeniach.",
                    "en" => "Conducting informational activities for the public, promoting safe behaviors, and providing information about threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11215,
                "name" => json_encode([
                    "pl" => "Udział w kampaniach społecznych oraz działaniach edukacyjnych mających na celu poprawę bezpieczeństwa.",
                    "en" => "Participating in social campaigns and educational activities aimed at improving safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11216,
                "name" => json_encode([
                    "pl" => "Współdziałanie z innymi służbami, takimi jak straż miejska, straż pożarna, służby medyczne, ochrona oraz straż graniczna.",
                    "en" => "Cooperating with other services, such as municipal police, fire brigade, medical services, security, and border guards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11217,
                "name" => json_encode([
                    "pl" => "Koordynacja działań w sytuacjach kryzysowych, takich jak wypadki drogowe, pożary, klęski żywiołowe.",
                    "en" => "Coordinating actions in emergency situations, such as road accidents, fires, natural disasters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11218,
                "name" => json_encode([
                    "pl" => "Monitorowanie bezpieczeństwa na przystankach, w pojazdach komunikacji miejskiej oraz w miejscach o dużym natężeniu ruchu.",
                    "en" => "Monitoring safety at bus stops, in public transport vehicles, and in high-traffic areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11219,
                "name" => json_encode([
                    "pl" => "Interwencje w przypadku zakłócenia porządku lub przestępstw w transporcie publicznym.",
                    "en" => "Intervening in cases of disorder or crimes in public transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11220,
                "name" => json_encode([
                    "pl" => "Odbieranie zgłoszeń i informacji o przestępstwach i wykroczeniach oraz podejmowanie odpowiednich działań.",
                    "en" => "Receiving reports and information about crimes and offenses and taking appropriate actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11221,
                "name" => json_encode([
                    "pl" => "Udzielanie porad dotyczących postępowania w przypadku bycia świadkiem lub ofiarą przestępstwa.",
                    "en" => "Providing advice on what to do if one is a witness or victim of a crime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11222,
                "name" => json_encode([
                    "pl" => "Podejmowanie natychmiastowych działań w celu zatrzymania sprawców przestępstw w trakcie ich popełniania.",
                    "en" => "Taking immediate actions to apprehend offenders during the commission of a crime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11223,
                "name" => json_encode([
                    "pl" => "Przekazywanie sprawców do dalszych czynności procesowych, takich jak przesłuchania i przygotowanie dokumentacji.",
                    "en" => "Handing over offenders for further procedural actions, such as questioning and preparing documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11224,
                "name" => json_encode([
                    "pl" => "Prowadzenie czynności wyjaśniających i dokumentacyjnych w przypadkach wykroczeń, np. sporządzanie mandatów karnych, dokumentowanie czynności służbowych.",
                    "en" => "Conducting clarification and documentation actions in cases of offenses, e.g., issuing fines, documenting official actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11225,
                "name" => json_encode([
                    "pl" => "Prowadzenie czynności sprawdzających i przygotowanie spraw do dalszego postępowania.",
                    "en" => "Conducting verification actions and preparing cases for further proceedings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11226,
                "name" => json_encode([
                    "pl" => "Upewnienie się, że wszyscy uczestnicy zgromadzeń publicznych, protestów, imprez masowych przestrzegają przepisów prawa.",
                    "en" => "Ensuring that all participants in public gatherings, protests, and mass events comply with the law."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11227,
                "name" => json_encode([
                    "pl" => "Przypominanie i egzekwowanie przepisów w celu zapewnienia bezpieczeństwa wszystkim uczestnikom.",
                    "en" => "Reminding and enforcing regulations to ensure safety for all participants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11228,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów z podjętych interwencji i działań prewencyjnych.",
                    "en" => "Preparing reports on interventions taken and preventive actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11229,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji związanej z interwencjami, zatrzymaniami, kontrolami oraz innymi czynnościami służbowymi.",
                    "en" => "Maintaining documentation related to interventions, arrests, inspections, and other official actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11230,
                "name" => json_encode([
                    "pl" => "Monitorowanie i kontrola obiektów i miejsc narażonych na działalność przestępczą, np. okolice szkół, placówki handlowe, miejsca rekreacyjne.",
                    "en" => "Monitoring and controlling facilities and places exposed to criminal activity, e.g., school surroundings, commercial establishments, recreational areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11231,
                "name" => json_encode([
                    "pl" => "Zapewnienie prewencyjnej obecności służb porządkowych w miejscach o podwyższonym ryzyku.",
                    "en" => "Ensuring the preventive presence of law enforcement in high-risk areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11232,
                "name" => json_encode([
                    "pl" => "Udział w działaniach edukacyjnych oraz kampaniach mających na celu przeciwdziałanie cyberprzemocy oraz bezpieczne korzystanie z Internetu.",
                    "en" => "Participating in educational activities and campaigns aimed at preventing cyberbullying and safe internet use."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11233,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi służbami w zakresie przeciwdziałania cyberprzestępczości.",
                    "en" => "Cooperating with other services in combating cybercrime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11234,
                "name" => json_encode([
                    "pl" => "Udzielanie pierwszej pomocy ofiarom przestępstw, wypadków drogowych i osób w stanie zagrożenia zdrowia lub życia.",
                    "en" => "Providing first aid to victims of crimes, road accidents, and individuals in health or life-threatening situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11235,
                "name" => json_encode([
                    "pl" => "Zapewnienie wsparcia emocjonalnego oraz informacyjnego osobom poszkodowanym.",
                    "en" => "Providing emotional and informational support to victims."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11236,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach i kursach doskonalących, aby aktualizować wiedzę z zakresu prawa, technik prewencyjnych, pierwszej pomocy i umiejętności interpersonalnych.",
                    "en" => "Participating in training and advanced courses to update knowledge of law, preventive techniques, first aid, and interpersonal skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11237,
                "name" => json_encode([
                    "pl" => "Doskonalenie umiejętności fizycznych i taktycznych potrzebnych do skutecznego działania w służbie prewencyjnej.",
                    "en" => "Improving physical and tactical skills necessary for effective performance in preventive service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11238,
                "name" => json_encode([
                    "pl" => "Działanie zgodnie z zasadami etyki zawodowej oraz regulaminem policyjnym.",
                    "en" => "Acting in accordance with professional ethics and police regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11239,
                "name" => json_encode([
                    "pl" => "Wykonywanie obowiązków służbowych w sposób uczciwy, bezstronny i profesjonalny.",
                    "en" => "Performing duties in an honest, impartial, and professional manner."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
        ];
        $policjant_sluzby_wspomagajacej = [
            [
                "id" => 11240,
                "name" => json_encode([
                    "pl" => "Zarządzanie dostawami materiałów, sprzętu i zaopatrzenia potrzebnego do codziennego funkcjonowania jednostki.",
                    "en" => "Managing the supply of materials, equipment, and supplies needed for the daily operation of the unit."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11241,
                "name" => json_encode([
                    "pl" => "Organizowanie zaopatrzenia w materiały biurowe, mundury, paliwo oraz inne niezbędne zasoby.",
                    "en" => "Organizing the supply of office materials, uniforms, fuel, and other necessary resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11242,
                "name" => json_encode([
                    "pl" => "Kontrola stanu technicznego sprzętu używanego przez funkcjonariuszy, w tym broni, środków ochrony osobistej, pojazdów i innego wyposażenia.",
                    "en" => "Monitoring the technical condition of equipment used by officers, including firearms, personal protective equipment, vehicles, and other gear."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11243,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji i drobnych napraw sprzętu oraz organizowanie serwisów i przeglądów technicznych.",
                    "en" => "Performing maintenance and minor repairs on equipment and organizing servicing and technical inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11244,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji i rejestrów związanych z działalnością jednostki, np. dokumentacja kadrowa, raporty, ewidencje, sprawozdania.",
                    "en" => "Maintaining documentation and records related to the unit's operations, e.g., personnel documentation, reports, registers, and statements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11245,
                "name" => json_encode([
                    "pl" => "Wsparcie w przygotowywaniu pism, raportów, zamówień oraz innych dokumentów administracyjnych.",
                    "en" => "Assisting in preparing letters, reports, orders, and other administrative documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11246,
                "name" => json_encode([
                    "pl" => "Wprowadzanie danych do systemów informatycznych i policyjnych baz danych, takich jak Krajowy System Informacyjny Policji.",
                    "en" => "Entering data into IT systems and police databases, such as the National Police Information System."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11247,
                "name" => json_encode([
                    "pl" => "Zapewnienie wsparcia technicznego w zakresie systemów IT, diagnozowanie problemów oraz zgłaszanie usterek i potrzebnych napraw.",
                    "en" => "Providing technical support for IT systems, diagnosing issues, and reporting faults and needed repairs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11248,
                "name" => json_encode([
                    "pl" => "Nadzorowanie stanu technicznego pojazdów policyjnych, organizowanie przeglądów technicznych oraz prowadzenie rejestrów użytkowania pojazdów.",
                    "en" => "Supervising the technical condition of police vehicles, organizing technical inspections, and maintaining vehicle usage records."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11249,
                "name" => json_encode([
                    "pl" => "Planowanie i koordynowanie napraw oraz konserwacji floty policyjnej.",
                    "en" => "Planning and coordinating repairs and maintenance of the police fleet."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11250,
                "name" => json_encode([
                    "pl" => "Zapewnienie funkcjonariuszom odpowiednich środków ochrony osobistej, takich jak kamizelki kuloodporne, rękawice ochronne, maski przeciwgazowe.",
                    "en" => "Providing officers with appropriate personal protective equipment, such as bulletproof vests, protective gloves, and gas masks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11251,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu wyposażenia ochronnego i organizowanie jego uzupełniania.",
                    "en" => "Monitoring the status of protective equipment and organizing its replenishment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11252,
                "name" => json_encode([
                    "pl" => "Kontrola wydawania, zwrotu i stanu technicznego broni i amunicji przechowywanych w jednostce.",
                    "en" => "Controlling the issuance, return, and technical condition of firearms and ammunition stored in the unit."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11253,
                "name" => json_encode([
                    "pl" => "Prowadzenie rejestrów dotyczących broni oraz zapewnienie, że przechowywana broń jest odpowiednio zabezpieczona.",
                    "en" => "Keeping records related to firearms and ensuring that stored firearms are adequately secured."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11254,
                "name" => json_encode([
                    "pl" => "Organizowanie dostaw sprzętu, żywności, paliwa i innych zasobów niezbędnych podczas operacji specjalnych i długotrwałych akcji.",
                    "en" => "Organizing the supply of equipment, food, fuel, and other resources necessary during special operations and prolonged actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11255,
                "name" => json_encode([
                    "pl" => "Zapewnienie transportu i odpowiednich zasobów podczas zabezpieczania dużych wydarzeń, takich jak imprezy masowe czy zgromadzenia publiczne.",
                    "en" => "Providing transportation and appropriate resources during the security of large events, such as mass gatherings or public assemblies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11256,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań logistycznych z innymi służbami, takimi jak straż pożarna, pogotowie ratunkowe oraz jednostki samorządowe.",
                    "en" => "Coordinating logistical actions with other services, such as the fire brigade, emergency medical services, and local government units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11257,
                "name" => json_encode([
                    "pl" => "Współpraca z zewnętrznymi dostawcami i firmami serwisowymi w zakresie zaopatrzenia, serwisów oraz konserwacji sprzętu.",
                    "en" => "Collaborating with external suppliers and service companies regarding supplies, servicing, and equipment maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11258,
                "name" => json_encode([
                    "pl" => "Nadzór nad systemami bezpieczeństwa w budynku, takimi jak monitoring, systemy alarmowe i zabezpieczenia dostępu.",
                    "en" => "Supervising security systems in the building, such as surveillance, alarm systems, and access control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11259,
                "name" => json_encode([
                    "pl" => "Organizacja konserwacji i napraw infrastruktury oraz nadzór nad bezpieczeństwem instalacji technicznych.",
                    "en" => "Organizing the maintenance and repair of infrastructure and supervising the safety of technical installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11260,
                "name" => json_encode([
                    "pl" => "Organizowanie szkoleń i ćwiczeń z zakresu zarządzania logistycznego, obsługi sprzętu oraz korzystania ze środków ochrony osobistej.",
                    "en" => "Organizing training and exercises in logistical management, equipment handling, and the use of personal protective equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11261,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że funkcjonariusze posiadają odpowiednie przeszkolenie z obsługi technicznej sprzętu policyjnego.",
                    "en" => "Ensuring that officers have appropriate training in the technical handling of police equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11262,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów i analiz dotyczących zużycia materiałów, stanu sprzętu, wydatków oraz zapotrzebowania jednostki.",
                    "en" => "Preparing reports and analyses regarding material consumption, equipment status, expenditures, and the unit's needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11263,
                "name" => json_encode([
                    "pl" => "Przedstawianie wniosków dotyczących usprawnienia procesów logistycznych oraz optymalizacji zasobów.",
                    "en" => "Presenting proposals for improving logistical processes and optimizing resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11264,
                "name" => json_encode([
                    "pl" => "Utrzymywanie odpowiednich zasobów medycznych, takich jak apteczki pierwszej pomocy, środki opatrunkowe, defibrylatory.",
                    "en" => "Maintaining appropriate medical supplies, such as first aid kits, dressings, and defibrillators."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11265,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu zaopatrzenia w środki medyczne oraz ich terminowej wymiany i uzupełniania.",
                    "en" => "Monitoring the supply of medical supplies and ensuring their timely replacement and replenishment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11266,
                "name" => json_encode([
                    "pl" => "Zapewnienie odpowiednich materiałów i sprzętu niezbędnego do przeprowadzania ćwiczeń taktycznych i szkoleń funkcjonariuszy.",
                    "en" => "Providing the necessary materials and equipment for conducting tactical exercises and training for officers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11267,
                "name" => json_encode([
                    "pl" => "Przygotowanie symulacyjnych scenariuszy oraz współpraca z instruktorami i szkoleniowcami.",
                    "en" => "Preparing simulated scenarios and collaborating with instructors and trainers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11268,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o wydatkach, zamówieniach oraz potrzebach finansowych jednostki.",
                    "en" => "Providing information on expenses, orders, and the financial needs of the unit."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11269,
                "name" => json_encode([
                    "pl" => "Koordynacja zakupów oraz prowadzenie ewidencji kosztów związanych z utrzymaniem jednostki.",
                    "en" => "Coordinating purchases and maintaining records of costs related to the maintenance of the unit."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11270,
                "name" => json_encode([
                    "pl" => "Planowanie i organizacja transportu oraz zakwaterowania podczas operacji wyjazdowych lub misji specjalnych.",
                    "en" => "Planning and organizing transportation and accommodation during field operations or special missions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11271,
                "name" => json_encode([
                    "pl" => "Zapewnienie odpowiedniego wyposażenia logistycznego w sytuacjach, gdy funkcjonariusze muszą działać poza siedzibą jednostki.",
                    "en" => "Providing appropriate logistical equipment in situations where officers must operate outside the unit's headquarters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11272,
                "name" => json_encode([
                    "pl" => "Prowadzenie rejestrów i ewidencji mienia policyjnego, w tym sprzętu, pojazdów i wyposażenia.",
                    "en" => "Keeping records and inventories of police property, including equipment, vehicles, and gear."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11273,
                "name" => json_encode([
                    "pl" => "Zarządzanie gospodarką magazynową oraz kontrola nad wydawaniem i odbieraniem mienia.",
                    "en" => "Managing inventory and controlling the issuance and receipt of property."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11274,
                "name" => json_encode([
                    "pl" => "Zapewnienie sprawności systemów łączności radiowej oraz innego sprzętu komunikacyjnego używanego przez funkcjonariuszy.",
                    "en" => "Ensuring the operability of radio communication systems and other communication equipment used by officers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11275,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów sprzętu łączności oraz monitorowanie jego użycia podczas działań operacyjnych.",
                    "en" => "Conducting tests on communication equipment and monitoring its use during operational activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11276,
                "name" => json_encode([
                    "pl" => "Wdrażanie procedur związanych z bezpieczeństwem informacji oraz zabezpieczeniem dokumentacji i systemów komputerowych.",
                    "en" => "Implementing procedures related to information security and securing documentation and computer systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11277,
                "name" => json_encode([
                    "pl" => "Monitorowanie zgodności z procedurami ochrony danych osobowych oraz bezpieczeństwa systemów informatycznych.",
                    "en" => "Monitoring compliance with personal data protection procedures and the security of information systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11278,
                "name" => json_encode([
                    "pl" => "Udział w działaniach związanych z zarządzaniem kryzysowym, np. podczas katastrof naturalnych, dużych wypadków czy sytuacji nadzwyczajnych.",
                    "en" => "Participating in activities related to crisis management, e.g., during natural disasters, major accidents, or emergencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11279,
                "name" => json_encode([
                    "pl" => "Szybkie reagowanie na nagłe potrzeby logistyczne i techniczne, dostarczanie zasobów w sytuacjach awaryjnych.",
                    "en" => "Rapidly responding to urgent logistical and technical needs, providing resources in emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11280,
                "name" => json_encode([
                    "pl" => "Wykonywanie obowiązków zgodnie z zasadami etyki, przepisami oraz standardami obowiązującymi w policji.",
                    "en" => "Performing duties in accordance with the principles of ethics, regulations, and standards applicable in the police."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11281,
                "name" => json_encode([
                    "pl" => "Dbanie o rzetelność, dokładność oraz profesjonalizm w realizacji zadań wspomagających.",
                    "en" => "Ensuring reliability, accuracy, and professionalism in the execution of supporting tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11282,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach podnoszących kompetencje logistyczne, techniczne oraz administracyjne.",
                    "en" => "Participating in training that enhances logistical, technical, and administrative competencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11283,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy i umiejętności w zakresie zarządzania zasobami i logistyki policyjnej.",
                    "en" => "Updating knowledge and skills in the area of resource management and police logistics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
        ];
        $policjant_sluzby_kontrterrorystycznej = [
            [
                "id" => 11284,
                "name" => json_encode([
                    "pl" => "Planowanie i uczestnictwo w akcjach skierowanych przeciwko grupom i osobom podejrzanym o działalność terrorystyczną.",
                    "en" => "Planning and participating in actions directed against groups and individuals suspected of terrorist activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11285,
                "name" => json_encode([
                    "pl" => "Udział w działaniach mających na celu zatrzymanie podejrzanych, zabezpieczenie miejsc ataków i neutralizację zagrożeń terrorystycznych.",
                    "en" => "Participating in actions aimed at detaining suspects, securing attack sites, and neutralizing terrorist threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11286,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie operacji szturmowych, w tym wejście do obiektów opanowanych przez terrorystów lub przestępców z użyciem specjalistycznych technik i sprzętu.",
                    "en" => "Conducting assault operations, including entering premises occupied by terrorists or criminals using specialized techniques and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11287,
                "name" => json_encode([
                    "pl" => "Zabezpieczanie miejsc, w których występuje wysokie zagrożenie, takich jak lotniska, budynki rządowe, miejsca publiczne o dużym natężeniu ruchu.",
                    "en" => "Securing locations with high threats, such as airports, government buildings, and public places with high traffic."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11288,
                "name" => json_encode([
                    "pl" => "Współpraca z negocjatorami w sytuacjach zakładniczych w celu osiągnięcia pokojowego rozwiązania i uwolnienia zakładników.",
                    "en" => "Collaborating with negotiators in hostage situations to achieve a peaceful resolution and free hostages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11289,
                "name" => json_encode([
                    "pl" => "Udział w opracowywaniu strategii negocjacyjnej oraz podejmowanie decyzji taktycznych w zależności od przebiegu sytuacji.",
                    "en" => "Participating in developing negotiation strategies and making tactical decisions based on the situation's progress."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11290,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie rozpoznania i neutralizacji urządzeń wybuchowych we współpracy z zespołami pirotechników.",
                    "en" => "Conducting reconnaissance and neutralizing explosive devices in collaboration with bomb disposal teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11291,
                "name" => json_encode([
                    "pl" => "Używanie specjalistycznego sprzętu do wykrywania, dezaktywacji i bezpiecznego usuwania ładunków wybuchowych.",
                    "en" => "Using specialized equipment to detect, deactivate, and safely dispose of explosives."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11292,
                "name" => json_encode([
                    "pl" => "Ochrona osób narażonych na ataki terrorystyczne, w tym VIP-ów, polityków, dyplomatów, świadków oraz innych osób objętych szczególną ochroną.",
                    "en" => "Protecting individuals at risk of terrorist attacks, including VIPs, politicians, diplomats, witnesses, and other persons under special protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11293,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów ochrony osobistej i koordynacja zespołów odpowiedzialnych za bezpieczeństwo.",
                    "en" => "Developing personal protection plans and coordinating teams responsible for security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11294,
                "name" => json_encode([
                    "pl" => "Patrolowanie i monitorowanie miejsc takich jak ambasady, obiekty rządowe, miejsca kultu religijnego oraz inne lokalizacje o wysokim ryzyku.",
                    "en" => "Patrolling and monitoring locations such as embassies, government facilities, places of worship, and other high-risk locations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11295,
                "name" => json_encode([
                    "pl" => "Współpraca z ochroną obiektów strategicznych oraz lokalnymi jednostkami w celu zapobiegania atakom.",
                    "en" => "Collaborating with the security of strategic facilities and local units to prevent attacks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11296,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w regularnych szkoleniach i ćwiczeniach taktycznych, w tym treningach strzeleckich, szturmowych i fizycznych.",
                    "en" => "Participating in regular training and tactical exercises, including shooting, assault, and physical training."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11297,
                "name" => json_encode([
                    "pl" => "Symulowanie sytuacji kryzysowych w celu doskonalenia technik interwencji, koordynacji zespołów oraz komunikacji podczas akcji.",
                    "en" => "Simulating crisis situations to improve intervention techniques, team coordination, and communication during operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11298,
                "name" => json_encode([
                    "pl" => "Obsługa specjalistycznego sprzętu, takiego jak broń długolufowa, kamizelki kuloodporne, hełmy, tarcze, noktowizory, drony oraz sprzęt do komunikacji.",
                    "en" => "Operating specialized equipment, such as long firearms, bulletproof vests, helmets, shields, night vision devices, drones, and communication equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11299,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie konserwacji i regularnych przeglądów technicznych wyposażenia, aby utrzymać sprzęt w pełnej sprawności.",
                    "en" => "Conducting maintenance and regular technical inspections of equipment to keep it in full working order."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11300,
                "name" => json_encode([
                    "pl" => "Współpraca z wywiadem i innymi służbami w celu pozyskiwania informacji o grupach i osobach mogących stanowić zagrożenie terrorystyczne.",
                    "en" => "Cooperating with intelligence and other services to gather information about groups and individuals that may pose a terrorist threat."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11301,
                "name" => json_encode([
                    "pl" => "Analiza danych wywiadowczych oraz monitorowanie aktywności, które mogą wskazywać na planowanie ataków.",
                    "en" => "Analyzing intelligence data and monitoring activities that may indicate planning for attacks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11302,
                "name" => json_encode([
                    "pl" => "Wymiana informacji i współpraca z międzynarodowymi jednostkami antyterrorystycznymi, Interpolem oraz innymi organizacjami zajmującymi się zwalczaniem terroryzmu.",
                    "en" => "Exchanging information and cooperating with international anti-terrorism units, Interpol, and other organizations involved in counter-terrorism."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11303,
                "name" => json_encode([
                    "pl" => "Udział w międzynarodowych operacjach oraz szkoleniach mających na celu wymianę doświadczeń i doskonalenie technik antyterrorystycznych.",
                    "en" => "Participating in international operations and training aimed at exchanging experiences and improving counter-terrorism techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11304,
                "name" => json_encode([
                    "pl" => "Zabezpieczanie imprez masowych, takich jak koncerty, mecze, uroczystości narodowe i inne zgromadzenia publiczne o podwyższonym ryzyku.",
                    "en" => "Securing mass events such as concerts, matches, national ceremonies, and other public gatherings with heightened risk."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11305,
                "name" => json_encode([
                    "pl" => "Identyfikacja potencjalnych zagrożeń i wdrażanie działań prewencyjnych, takich jak kontrola dostępu, monitoring tłumów i zabezpieczanie perymetrów.",
                    "en" => "Identifying potential threats and implementing preventive measures such as access control, crowd monitoring, and perimeter security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11306,
                "name" => json_encode([
                    "pl" => "Organizowanie akcji prewencyjnych, mających na celu podnoszenie świadomości obywateli na temat zagrożeń terrorystycznych i zasad postępowania w sytuacjach kryzysowych.",
                    "en" => "Organizing preventive actions aimed at raising public awareness of terrorist threats and guidelines for dealing with crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11307,
                "name" => json_encode([
                    "pl" => "Edukowanie społeczeństwa w zakresie wykrywania podejrzanych zachowań oraz bezpieczeństwa publicznego.",
                    "en" => "Educating the public about detecting suspicious behaviors and public safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11308,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami zajmującymi się cyberbezpieczeństwem w celu przeciwdziałania cyberatakom i atakom na infrastrukturę krytyczną.",
                    "en" => "Cooperating with teams focused on cybersecurity to counter cyberattacks and threats to critical infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11309,
                "name" => json_encode([
                    "pl" => "Monitorowanie i analiza aktywności w sieci, która może stanowić zagrożenie dla bezpieczeństwa narodowego.",
                    "en" => "Monitoring and analyzing online activity that may pose a threat to national security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11310,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przebiegu operacji antyterrorystycznych, raportowanie wyników i analiza działań w celu usprawnienia procedur.",
                    "en" => "Documenting the course of anti-terrorism operations, reporting results, and analyzing actions to improve procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11311,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów po zakończonych akcjach oraz przeprowadzanie analizy wniosków dotyczących ewentualnych usprawnień.",
                    "en" => "Preparing reports after completed actions and conducting analyses of conclusions regarding potential improvements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11312,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z innymi służbami, takimi jak policja, straż graniczna, straż pożarna oraz jednostki wojskowe.",
                    "en" => "Coordinating actions with other services, such as police, border guard, fire brigade, and military units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11313,
                "name" => json_encode([
                    "pl" => "Udział w spotkaniach i ćwiczeniach z innymi jednostkami w celu doskonalenia współpracy w sytuacjach kryzysowych.",
                    "en" => "Participating in meetings and exercises with other units to improve cooperation in crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11314,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie materiałów wybuchowych, chemicznych, biologicznych i radioaktywnych, które mogą stanowić zagrożenie w sytuacjach kryzysowych.",
                    "en" => "Recognizing explosive, chemical, biological, and radioactive materials that may pose a threat in crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11315,
                "name" => json_encode([
                    "pl" => "Zabezpieczanie materiałów niebezpiecznych oraz współpraca z jednostkami specjalistycznymi w zakresie ich neutralizacji.",
                    "en" => "Securing hazardous materials and cooperating with specialized units for their neutralization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11316,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ewakuacji osób przebywających w miejscach narażonych na atak terrorystyczny lub inne zagrożenie.",
                    "en" => "Conducting evacuations of individuals in places at risk of a terrorist attack or other threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11317,
                "name" => json_encode([
                    "pl" => "Koordynowanie działań ratunkowych i dbanie o bezpieczeństwo ewakuowanych oraz służb biorących udział w akcji.",
                    "en" => "Coordinating rescue operations and ensuring the safety of evacuees and services involved in the action."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11318,
                "name" => json_encode([
                    "pl" => "Przygotowywanie i ocena planów taktycznych przed rozpoczęciem operacji oraz zbieranie informacji o miejscu zdarzenia.",
                    "en" => "Preparing and assessing tactical plans before commencing operations and gathering information about the incident location."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11319,
                "name" => json_encode([
                    "pl" => "Tworzenie planów awaryjnych oraz przeprowadzanie rozpoznania terenu i potencjalnych zagrożeń.",
                    "en" => "Creating contingency plans and conducting reconnaissance of the terrain and potential hazards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11320,
                "name" => json_encode([
                    "pl" => "Działanie zgodnie z zasadami etyki zawodowej oraz przepisami prawa, dbając o ochronę życia i zdrowia zarówno zakładników, jak i podejrzanych.",
                    "en" => "Acting in accordance with professional ethics and legal regulations, ensuring the protection of the life and health of both hostages and suspects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11321,
                "name" => json_encode([
                    "pl" => "Przestrzeganie wysokich standardów moralnych oraz wykonywanie obowiązków w sposób profesjonalny i zgodny z przepisami.",
                    "en" => "Adhering to high moral standards and performing duties professionally and in accordance with regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11322,
                "name" => json_encode([
                    "pl" => "Udział w specjalistycznych kursach i szkoleniach z zakresu taktyki, technik antyterrorystycznych, negocjacji oraz zarządzania kryzysowego.",
                    "en" => "Participating in specialized courses and training in tactics, anti-terrorist techniques, negotiations, and crisis management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11323,
                "name" => json_encode([
                    "pl" => "Doskonalenie umiejętności fizycznych, strzeleckich i psychologicznych niezbędnych do skutecznego działania w sytuacjach wysokiego ryzyka.",
                    "en" => "Improving physical, shooting, and psychological skills necessary for effective action in high-risk situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
        ];
        $policjant_sluzby_spraw_wewnetrznych = [
            [
                "id" => 11324,
                "name" => json_encode([
                    "pl" => "Badanie przypadków naruszenia prawa, nadużyć, korupcji oraz nieetycznego postępowania wśród funkcjonariuszy policji i pracowników służb.",
                    "en" => "Investigating cases of law violations, abuses, corruption, and unethical behavior among police officers and service employees."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11325,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szczegółowych dochodzeń mających na celu ustalenie okoliczności i sprawców nieprawidłowości.",
                    "en" => "Conducting detailed investigations to determine the circumstances and perpetrators of irregularities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11326,
                "name" => json_encode([
                    "pl" => "Kontrola zachowań funkcjonariuszy w celu zapewnienia zgodności z zasadami etyki zawodowej, kodeksem postępowania oraz przepisami obowiązującymi w policji.",
                    "en" => "Monitoring the behavior of officers to ensure compliance with ethical standards, the code of conduct, and regulations governing the police."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11327,
                "name" => json_encode([
                    "pl" => "Uświadamianie funkcjonariuszy o standardach etycznych i oczekiwaniach służby.",
                    "en" => "Raising awareness among officers about ethical standards and service expectations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11328,
                "name" => json_encode([
                    "pl" => "Zbieranie i analiza informacji dotyczących możliwych przypadków korupcji oraz wszelkich działań niezgodnych z przepisami.",
                    "en" => "Collecting and analyzing information regarding possible cases of corruption and any actions inconsistent with regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11329,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi służbami w celu identyfikacji, monitorowania i zwalczania korupcji w szeregach policji.",
                    "en" => "Cooperating with other services to identify, monitor, and combat corruption within the police ranks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11330,
                "name" => json_encode([
                    "pl" => "Wykonywanie działań operacyjnych mających na celu sprawdzenie zgodności działań funkcjonariuszy z przepisami prawa.",
                    "en" => "Conducting operational activities to verify compliance of officers' actions with the law."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11331,
                "name" => json_encode([
                    "pl" => "Stosowanie technik operacyjnych, takich jak podsłuchy, obserwacja oraz śledzenie podejrzanych funkcjonariuszy.",
                    "en" => "Utilizing operational techniques such as wiretapping, surveillance, and tracking suspected officers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11332,
                "name" => json_encode([
                    "pl" => "Przesłuchiwanie funkcjonariuszy oraz świadków w celu zebrania informacji dotyczących podejrzeń o nieprawidłowe działania.",
                    "en" => "Interrogating officers and witnesses to gather information regarding suspicions of wrongdoing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11333,
                "name" => json_encode([
                    "pl" => "Sporządzanie protokołów z przesłuchań, które mogą stanowić podstawę dowodową w postępowaniach wewnętrznych.",
                    "en" => "Creating protocols from interrogations that may serve as evidence in internal proceedings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11334,
                "name" => json_encode([
                    "pl" => "Gromadzenie materiałów dowodowych, takich jak dokumenty, nagrania, zdjęcia, które mogą być użyte w śledztwie przeciwko funkcjonariuszom podejrzanym o nieprawidłowości.",
                    "en" => "Collecting evidence materials such as documents, recordings, and photos that may be used in investigations against officers suspected of irregularities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11335,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz zebranych dowodów oraz ich interpretacja w kontekście sprawy.",
                    "en" => "Conducting analyses of collected evidence and interpreting it in the context of the case."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11336,
                "name" => json_encode([
                    "pl" => "Współpraca z organami wymiaru sprawiedliwości w sprawach dotyczących przestępstw popełnionych przez funkcjonariuszy.",
                    "en" => "Cooperating with judicial authorities regarding crimes committed by officers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11337,
                "name" => json_encode([
                    "pl" => "Przekazywanie zebranych dowodów i materiałów dowodowych do prokuratury oraz współpraca w toku postępowania sądowego.",
                    "en" => "Transferring collected evidence and materials to the prosecutor's office and cooperating during court proceedings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11338,
                "name" => json_encode([
                    "pl" => "Przyjmowanie i analizowanie skarg i zgłoszeń od obywateli dotyczących nieprawidłowego zachowania policjantów.",
                    "en" => "Receiving and analyzing complaints and reports from citizens regarding improper behavior by police officers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11339,
                "name" => json_encode([
                    "pl" => "Prowadzenie postępowań wyjaśniających na podstawie zgłoszeń i podejrzeń o nadużycia w służbie.",
                    "en" => "Conducting clarification proceedings based on reports and suspicions of abuse in service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11340,
                "name" => json_encode([
                    "pl" => "Sprawdzanie, czy działania funkcjonariuszy i pracowników są zgodne z obowiązującymi przepisami i procedurami policyjnymi.",
                    "en" => "Checking whether the actions of officers and employees comply with applicable laws and police procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11341,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów i analiz działań pod kątem przestrzegania procedur operacyjnych i administracyjnych.",
                    "en" => "Conducting audits and analyses of actions regarding compliance with operational and administrative procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11342,
                "name" => json_encode([
                    "pl" => "Zbieranie informacji na temat potencjalnych przestępstw popełnianych przez funkcjonariuszy, takich jak przekroczenie uprawnień, nadużycie siły, przemoc, czy handel nielegalnymi substancjami.",
                    "en" => "Collecting information on potential crimes committed by officers, such as abuse of power, use of force, violence, or trafficking illegal substances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11343,
                "name" => json_encode([
                    "pl" => "Prowadzenie działań mających na celu wykrycie i zapobieganie przestępstwom popełnianym przez policjantów.",
                    "en" => "Conducting activities aimed at detecting and preventing crimes committed by police officers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11344,
                "name" => json_encode([
                    "pl" => "Organizowanie szkoleń i spotkań informacyjnych mających na celu zapobieganie przypadkom korupcji i łamaniu prawa przez funkcjonariuszy.",
                    "en" => "Organizing training and informational meetings aimed at preventing cases of corruption and violations of the law by officers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11345,
                "name" => json_encode([
                    "pl" => "Promowanie postaw etycznych i uczciwości zawodowej wśród funkcjonariuszy.",
                    "en" => "Promoting ethical attitudes and professional integrity among officers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11346,
                "name" => json_encode([
                    "pl" => "Stosowanie ankiet i testów psychologicznych w celu wykrycia potencjalnych zagrożeń wśród funkcjonariuszy, np. skłonności do zachowań agresywnych czy korupcji.",
                    "en" => "Using surveys and psychological tests to detect potential threats among officers, such as tendencies towards aggressive behavior or corruption."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11347,
                "name" => json_encode([
                    "pl" => "Współpraca z psychologami w zakresie oceny stanu psychicznego funkcjonariuszy, zwłaszcza tych, którzy zostali zgłoszeni z powodu podejrzanych zachowań.",
                    "en" => "Cooperating with psychologists to assess the mental state of officers, especially those reported for suspicious behavior."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11348,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów dotyczących wyników dochodzeń wewnętrznych, analizy dowodów oraz przebiegu postępowań dyscyplinarnych.",
                    "en" => "Preparing reports on the results of internal investigations, evidence analysis, and the course of disciplinary proceedings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11349,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wyników śledztw oraz przedstawianie rekomendacji dla wyższych przełożonych.",
                    "en" => "Documenting the results of investigations and presenting recommendations to higher authorities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11350,
                "name" => json_encode([
                    "pl" => "Przygotowywanie materiałów do postępowań dyscyplinarnych i udział w posiedzeniach komisji dyscyplinarnych.",
                    "en" => "Preparing materials for disciplinary proceedings and participating in disciplinary committee meetings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11351,
                "name" => json_encode([
                    "pl" => "Przedstawianie wyników dochodzeń wewnętrznych oraz rekomendacji dotyczących ewentualnych sankcji.",
                    "en" => "Presenting the results of internal investigations and recommendations regarding possible sanctions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11352,
                "name" => json_encode([
                    "pl" => "Obserwacja sytuacji wewnętrznej w jednostkach policji, identyfikacja potencjalnych problemów związanych z relacjami między funkcjonariuszami.",
                    "en" => "Monitoring the internal situation within police units, identifying potential problems related to relationships among officers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11353,
                "name" => json_encode([
                    "pl" => "Wykrywanie przypadków mobbingu, dyskryminacji oraz innych nieprawidłowości w środowisku pracy.",
                    "en" => "Detecting cases of bullying, discrimination, and other irregularities in the workplace."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11354,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z komórkami zajmującymi się analizą ryzyka oraz zapobieganie wewnętrznym zagrożeniom.",
                    "en" => "Coordinating actions with units focused on risk analysis and preventing internal threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11355,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o ryzyku wystąpienia nieprawidłowości oraz wspólne wdrażanie środków zaradczych.",
                    "en" => "Providing information about the risk of irregularities and jointly implementing corrective measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11356,
                "name" => json_encode([
                    "pl" => "Prowadzenie działań operacyjnych w sposób dyskretny i tajny, aby nie ujawniać funkcjonariuszom objętych dochodzeniami wewnętrznymi.",
                    "en" => "Conducting operational activities discreetly and secretly to avoid disclosing investigations to implicated officers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11357,
                "name" => json_encode([
                    "pl" => "Utrzymanie poufności w działaniach operacyjnych i dochodzeniowych.",
                    "en" => "Maintaining confidentiality in operational and investigative actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11358,
                "name" => json_encode([
                    "pl" => "Analiza trendów i zjawisk korupcyjnych oraz innych nieprawidłowości w policji, identyfikacja obszarów o podwyższonym ryzyku.",
                    "en" => "Analyzing trends and phenomena of corruption and other irregularities in the police, identifying areas at higher risk."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11359,
                "name" => json_encode([
                    "pl" => "Stosowanie narzędzi analitycznych i wywiadowczych w celu identyfikacji zagrożeń.",
                    "en" => "Using analytical and intelligence tools to identify threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11360,
                "name" => json_encode([
                    "pl" => "Regularne podnoszenie kwalifikacji poprzez szkolenia z zakresu prowadzenia dochodzeń wewnętrznych, technik operacyjnych, etyki oraz przeciwdziałania korupcji.",
                    "en" => "Regularly enhancing qualifications through training on conducting internal investigations, operational techniques, ethics, and combating corruption."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11361,
                "name" => json_encode([
                    "pl" => "Śledzenie zmian w przepisach prawnych oraz standardach prowadzenia dochodzeń wewnętrznych.",
                    "en" => "Monitoring changes in laws and standards for conducting internal investigations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11362,
                "name" => json_encode([
                    "pl" => "Wykonywanie obowiązków zgodnie z zasadami etyki zawodowej i poufności, dbając o uczciwość i rzetelność w dochodzeniach.",
                    "en" => "Performing duties according to professional ethics and confidentiality principles, ensuring honesty and reliability in investigations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11363,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezstronności i obiektywizmu w dochodzeniach, unikając jakichkolwiek konfliktów interesów.",
                    "en" => "Adhering to the principles of impartiality and objectivity in investigations, avoiding any conflicts of interest."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11364,
                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia psychologicznego funkcjonariuszom, którzy zostali objęci dochodzeniem, aby zapewnić im pomoc w trudnym okresie.",
                    "en" => "Providing psychological support to officers involved in an investigation to assist them during a difficult time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11365,
                "name" => json_encode([
                    "pl" => "Kierowanie funkcjonariuszy do specjalistycznych ośrodków wsparcia, jeśli zachodzi taka potrzeba.",
                    "en" => "Referring officers to specialized support centers if needed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
        ];
        $policjant_sluzby_sledczej = [
            [
                "id" => 11366,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie czynności śledczych, takich jak zbieranie dowodów, przesłuchiwanie świadków oraz ustalanie okoliczności przestępstwa.",
                    "en" => "Conducting investigative activities such as collecting evidence, interviewing witnesses, and determining the circumstances of a crime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11367,
                "name" => json_encode([
                    "pl" => "Sporządzanie dokumentacji związanej z dochodzeniem, w tym protokołów z przesłuchań i raportów.",
                    "en" => "Preparing documentation related to the investigation, including interrogation protocols and reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11368,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie oględzin miejsca przestępstwa, zbieranie śladów, zabezpieczanie dowodów rzeczowych i śladów kryminalistycznych.",
                    "en" => "Conducting examinations of the crime scene, collecting traces, securing material evidence and criminalistic traces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11369,
                "name" => json_encode([
                    "pl" => "Dokumentowanie miejsca zdarzenia poprzez fotografie, szkice oraz opis sytuacji.",
                    "en" => "Documenting the scene of the incident through photographs, sketches, and descriptions of the situation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11370,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przesłuchań w sposób profesjonalny, z uwzględnieniem zasad prawa oraz etyki zawodowej.",
                    "en" => "Conducting interviews in a professional manner, taking into account legal principles and professional ethics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11371,
                "name" => json_encode([
                    "pl" => "Sporządzanie szczegółowych protokołów z przesłuchań, które będą stanowiły materiał dowodowy w sprawie.",
                    "en" => "Preparing detailed records of the interviews, which will serve as evidence in the case."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11372,
                "name" => json_encode([
                    "pl" => "Współdziałanie z prokuratorami w celu ustalenia planu działania w sprawach karnych oraz przygotowania dowodów.",
                    "en" => "Cooperating with prosecutors to establish a course of action in criminal cases and prepare evidence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11373,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji i dowodów prokuratorowi oraz uczestniczenie w konsultacjach dotyczących kierunku śledztwa.",
                    "en" => "Passing information and evidence to the prosecutor and participating in consultations regarding the direction of the investigation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11374,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie działań wywiadowczych mających na celu zdobycie dodatkowych informacji o sprawcy, ofierze i okolicznościach przestępstwa.",
                    "en" => "Conducting intelligence activities to obtain additional information about the perpetrator, victim, and circumstances of the crime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11375,
                "name" => json_encode([
                    "pl" => "Korzystanie z bazy danych policyjnych i innych źródeł informacji w celu ustalenia tożsamości i powiązań podejrzanych.",
                    "en" => "Utilizing police databases and other sources of information to establish the identity and connections of suspects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11376,
                "name" => json_encode([
                    "pl" => "Analizowanie zebranego materiału dowodowego i danych wywiadowczych w celu ustalenia związku pomiędzy dowodami a sprawcą.",
                    "en" => "Analyzing collected evidence and intelligence data to establish the connection between the evidence and the perpetrator."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11377,
                "name" => json_encode([
                    "pl" => "Tworzenie analiz kryminalnych i raportów, które wspierają dalsze działania śledcze.",
                    "en" => "Creating criminal analyses and reports that support further investigative actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11378,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie obserwacji, śledzenia i monitorowania osób podejrzanych, miejsc lub obiektów.",
                    "en" => "Conducting observations, tracking, and monitoring of suspected individuals, places, or objects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11379,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie metod operacyjnych, takich jak inwigilacja, podsłuchy oraz monitorowanie komunikacji podejrzanych.",
                    "en" => "Using operational methods such as surveillance, wiretapping, and monitoring the communications of suspects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11380,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w zatrzymaniu podejrzanych w sposób zgodny z przepisami prawa, przy zachowaniu bezpieczeństwa swojego i osób trzecich.",
                    "en" => "Participating in the apprehension of suspects in accordance with the law while ensuring the safety of oneself and others."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11381,
                "name" => json_encode([
                    "pl" => "Sporządzanie dokumentacji związanej z zatrzymaniem i przeprowadzenie czynności wyjaśniających po zatrzymaniu.",
                    "en" => "Preparing documentation related to the arrest and conducting clarifying actions after the apprehension."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11382,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z innymi jednostkami policji, takimi jak służby kryminalne, prewencja czy służby specjalne, w zależności od specyfiki sprawy.",
                    "en" => "Coordinating actions with other police units, such as criminal services, prevention units, or special services, depending on the specifics of the case."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11383,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi służbami, np. strażą graniczną, służbami celnymi, w sytuacjach, gdy sprawa ma charakter międzynarodowy lub wymaga współpracy interdyscyplinarnej.",
                    "en" => "Cooperating with other services, such as border guards and customs services, in situations where the case has an international character or requires interdisciplinary cooperation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11384,
                "name" => json_encode([
                    "pl" => "Przygotowywanie wniosków o wszczęcie postępowań, przeszukania, aresztowania oraz inne czynności procesowe.",
                    "en" => "Preparing motions for initiating proceedings, searches, arrests, and other procedural actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11385,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie przeszukań mieszkań, pojazdów lub innych miejsc związanych z prowadzonym śledztwem.",
                    "en" => "Conducting searches of residences, vehicles, or other locations related to the ongoing investigation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11386,
                "name" => json_encode([
                    "pl" => "Analiza wyników badań kryminalistycznych, takich jak analiza DNA, balistyka, ślady biologiczne, daktyloskopia.",
                    "en" => "Analyzing the results of forensic examinations, such as DNA analysis, ballistics, biological traces, and fingerprinting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11387,
                "name" => json_encode([
                    "pl" => "Konsultowanie wyników z biegłymi i specjalistami w celu lepszego zrozumienia dowodów i ustalenia ich wartości dla sprawy.",
                    "en" => "Consulting the results with experts and specialists to better understand the evidence and determine its value for the case."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11388,
                "name" => json_encode([
                    "pl" => "Sporządzanie akt sprawy zawierających całość materiału dowodowego, raportów i dokumentacji procesowej.",
                    "en" => "Preparing case files containing all evidence, reports, and procedural documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11389,
                "name" => json_encode([
                    "pl" => "Współpraca z prokuraturą w zakresie przygotowania sprawy do przedstawienia przed sądem.",
                    "en" => "Cooperating with the prosecutor's office to prepare the case for presentation in court."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11390,
                "name" => json_encode([
                    "pl" => "Składanie zeznań w sądzie na temat przebiegu dochodzenia, metod zbierania dowodów oraz ustaleń wynikających ze śledztwa.",
                    "en" => "Testifying in court about the course of the investigation, methods of collecting evidence, and findings resulting from the investigation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11391,
                "name" => json_encode([
                    "pl" => "Współpraca z prokuratorami podczas rozprawy w celu objaśnienia zebranych dowodów i przebiegu działań śledczych.",
                    "en" => "Cooperating with prosecutors during the trial to explain the gathered evidence and the course of investigative actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11392,
                "name" => json_encode([
                    "pl" => "Korzystanie z technologii, takich jak analizy cyfrowe, systemy monitoringu, programy do analiz kryminalnych i baz danych policyjnych.",
                    "en" => "Utilizing technologies such as digital analysis, monitoring systems, criminal analysis software, and police databases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11393,
                "name" => json_encode([
                    "pl" => "Wykorzystanie nowoczesnych narzędzi do zbierania i analizy danych cyfrowych, takich jak przeszukania w komputerach, telefonach i urządzeniach elektronicznych podejrzanych.",
                    "en" => "Using modern tools for collecting and analyzing digital data, such as searches on computers, phones, and electronic devices of suspects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11394,
                "name" => json_encode([
                    "pl" => "Pobieranie i zabezpieczanie dowodów cyfrowych, takich jak dane z komputerów, telefonów, kamer monitoringu oraz nośników danych.",
                    "en" => "Collecting and securing digital evidence, such as data from computers, phones, surveillance cameras, and data storage devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11395,
                "name" => json_encode([
                    "pl" => "Współpraca z ekspertami z zakresu informatyki śledczej w celu odzyskiwania i analizy danych cyfrowych.",
                    "en" => "Collaborating with forensic IT experts to recover and analyze digital data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11396,
                "name" => json_encode([
                    "pl" => "Opracowywanie profili sprawców na podstawie analizy modus operandi (sposobu działania) i motywów.",
                    "en" => "Developing profiles of perpetrators based on analysis of their modus operandi and motives."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11397,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie profili psychologicznych do identyfikacji potencjalnych podejrzanych i przewidywania ich zachowań.",
                    "en" => "Utilizing psychological profiles to identify potential suspects and predict their behavior."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11398,
                "name" => json_encode([
                    "pl" => "Monitorowanie osób skazanych, które wróciły na wolność, szczególnie tych, które mogą ponownie popełnić przestępstwo.",
                    "en" => "Monitoring released convicts, especially those who may re-offend."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11399,
                "name" => json_encode([
                    "pl" => "Prowadzenie działań prewencyjnych mających na celu zapobieganie powrotowi do przestępczości wśród osób wcześniej skazanych.",
                    "en" => "Conducting preventive actions to prevent recidivism among previously convicted individuals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11400,
                "name" => json_encode([
                    "pl" => "Analiza spraw pod kątem możliwych powiązań między przestępstwami i sprawcami, np. w przypadku przestępczości zorganizowanej.",
                    "en" => "Analyzing cases for possible connections between crimes and perpetrators, for instance in cases of organized crime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11401,
                "name" => json_encode([
                    "pl" => "Wykorzystanie analiz kryminalnych w celu identyfikacji grup przestępczych i ich członków.",
                    "en" => "Utilizing criminal analyses to identify criminal groups and their members."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11402,
                "name" => json_encode([
                    "pl" => "Współpraca z technikami kryminalistycznymi w zakresie zbierania i analizy dowodów, w tym śladów biologicznych, chemicznych i fizycznych.",
                    "en" => "Cooperating with criminalistics technicians in collecting and analyzing evidence, including biological, chemical, and physical traces."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11403,
                "name" => json_encode([
                    "pl" => "Wykorzystanie wyników badań techników kryminalistycznych do ustalenia przebiegu zdarzeń i identyfikacji sprawców.",
                    "en" => "Using the results of forensic technicians' examinations to establish the sequence of events and identify perpetrators."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11404,
                "name" => json_encode([
                    "pl" => "Wykonywanie obowiązków w sposób uczciwy, bezstronny i zgodny z prawem oraz zasadami etyki zawodowej.",
                    "en" => "Performing duties in an honest, impartial, and lawful manner, adhering to professional ethics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11405,
                "name" => json_encode([
                    "pl" => "Dbałość o poufność zebranych danych oraz rzetelność w prowadzeniu dochodzeń i śledztw.",
                    "en" => "Ensuring confidentiality of collected data and reliability in conducting investigations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11406,
                "name" => json_encode([
                    "pl" => "Regularne podnoszenie kwalifikacji poprzez szkolenia z zakresu technik śledczych, kryminalistyki, prawa oraz nowoczesnych technologii.",
                    "en" => "Regularly improving qualifications through training in investigative techniques, forensics, law, and modern technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11407,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy o nowych metodach przestępczości oraz sposobach ich wykrywania.",
                    "en" => "Updating knowledge of new crime methods and ways to detect them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
        ];
        $funkcjonariusze_sluzby_wieziennej = [
            [
                "id" => 11408,
                "name" => json_encode([
                    "pl" => "Monitorowanie zachowania osadzonych i dbanie o przestrzeganie regulaminu zakładu karnego.",
                    "en" => "Monitoring the behavior of inmates and ensuring compliance with the regulations of the penitentiary facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11409,
                "name" => json_encode([
                    "pl" => "Regularne sprawdzanie obecności osadzonych i kontrolowanie ich przebywania w wyznaczonych miejscach.",
                    "en" => "Regularly checking the presence of inmates and controlling their whereabouts in designated areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11410,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa w zakładzie karnym poprzez nadzór nad osadzonymi i zapobieganie potencjalnym zagrożeniom.",
                    "en" => "Ensuring safety in the correctional facility by supervising inmates and preventing potential threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11411,
                "name" => json_encode([
                    "pl" => "Szybka reakcja na sytuacje konfliktowe, próby ucieczki oraz przypadki naruszenia porządku.",
                    "en" => "Quick response to conflict situations, escape attempts, and instances of disorder."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11412,
                "name" => json_encode([
                    "pl" => "Wykonywanie kontroli osobistych osadzonych, szczególnie przed i po wizytach, spacerach, czy innych aktywnościach poza celą.",
                    "en" => "Conducting personal searches of inmates, especially before and after visits, walks, or other activities outside the cell."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11413,
                "name" => json_encode([
                    "pl" => "Zapobieganie przemytowi niedozwolonych przedmiotów, takich jak broń, narkotyki, czy środki komunikacji.",
                    "en" => "Preventing the smuggling of prohibited items, such as weapons, drugs, or means of communication."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11414,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie regularnych kontroli cel i innych pomieszczeń w celu wykrycia zakazanych przedmiotów i zapewnienia porządku.",
                    "en" => "Conducting regular searches of cells and other premises to detect prohibited items and ensure order."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11415,
                "name" => json_encode([
                    "pl" => "Sprawdzanie stanu technicznego zabezpieczeń oraz kontrola systemów bezpieczeństwa, takich jak kamery monitoringu i systemy alarmowe.",
                    "en" => "Checking the technical condition of security measures and monitoring security systems, such as surveillance cameras and alarm systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11416,
                "name" => json_encode([
                    "pl" => "Pomoc w organizowaniu zajęć resocjalizacyjnych, edukacyjnych i terapeutycznych dla osadzonych.",
                    "en" => "Assisting in organizing rehabilitation, educational, and therapeutic activities for inmates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11417,
                "name" => json_encode([
                    "pl" => "Motywowanie osadzonych do udziału w programach resocjalizacyjnych i edukacyjnych oraz wspieranie ich w procesie readaptacji.",
                    "en" => "Encouraging inmates to participate in rehabilitation and educational programs and supporting them in the reintegration process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11418,
                "name" => json_encode([
                    "pl" => "Nadzorowanie codziennych aktywności osadzonych zgodnie z ustalonym harmonogramem, w tym posiłków, spacerów, pracy, zajęć oraz czasu w celi.",
                    "en" => "Supervising the daily activities of inmates according to the established schedule, including meals, walks, work, activities, and time in the cell."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11419,
                "name" => json_encode([
                    "pl" => "Monitorowanie przestrzegania wyznaczonych godzin ciszy nocnej oraz organizowanie czasu wolnego osadzonych.",
                    "en" => "Monitoring compliance with designated quiet hours and organizing inmates' free time."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11420,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie procedur przyjęcia nowo osadzonych do zakładu karnego, w tym sprawdzanie tożsamości, rejestracja i przypisywanie do odpowiednich cel.",
                    "en" => "Conducting the intake procedures for newly admitted inmates, including identity verification, registration, and assigning to appropriate cells."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11421,
                "name" => json_encode([
                    "pl" => "Informowanie osadzonych o ich prawach i obowiązkach oraz zapoznanie ich z regulaminem zakładu karnego.",
                    "en" => "Informing inmates about their rights and duties and familiarizing them with the regulations of the correctional facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11422,
                "name" => json_encode([
                    "pl" => "Eskortowanie osadzonych na zewnątrz zakładu karnego, np. do sądów, szpitali, na przesłuchania lub inne wyznaczone miejsca.",
                    "en" => "Escorting inmates outside the correctional facility, e.g., to courts, hospitals, interrogations, or other designated locations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11423,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa osadzonym oraz zabezpieczenie ich przed próbami ucieczki podczas transportu.",
                    "en" => "Ensuring the safety of inmates and securing them against escape attempts during transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11424,
                "name" => json_encode([
                    "pl" => "Wspieranie personelu medycznego w organizowaniu wizyt lekarskich oraz zapewnianie opieki zdrowotnej dla osadzonych.",
                    "en" => "Supporting medical staff in organizing medical visits and ensuring healthcare for inmates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11425,
                "name" => json_encode([
                    "pl" => "Współpraca przy dostarczaniu leków oraz asystowanie przy udzielaniu pierwszej pomocy w sytuacjach nagłych.",
                    "en" => "Collaborating in delivering medications and assisting in providing first aid in emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11426,
                "name" => json_encode([
                    "pl" => "Wspieranie pracy wychowawców, psychologów i terapeutów w procesie resocjalizacji osadzonych.",
                    "en" => "Supporting the work of educators, psychologists, and therapists in the rehabilitation process of inmates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11427,
                "name" => json_encode([
                    "pl" => "Udział w spotkaniach zespołu wychowawczego oraz przekazywanie informacji o zachowaniu i postępach osadzonych.",
                    "en" => "Participating in the educational team meetings and providing information about the behavior and progress of inmates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11428,
                "name" => json_encode([
                    "pl" => "Szybka interwencja w sytuacjach kryzysowych, takich jak zamieszki, akty agresji, próby samobójcze czy inne zagrożenia.",
                    "en" => "Quick intervention in crisis situations, such as riots, acts of aggression, suicide attempts, or other threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11429,
                "name" => json_encode([
                    "pl" => "Podejmowanie działań zgodnych z procedurami bezpieczeństwa w celu zapewnienia porządku i ochrony życia osadzonych i personelu.",
                    "en" => "Taking actions in accordance with safety procedures to maintain order and protect the lives of inmates and staff."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11430,
                "name" => json_encode([
                    "pl" => "Dbanie o przestrzeganie przepisów i procedur obowiązujących w zakładzie karnym.",
                    "en" => "Ensuring compliance with the regulations and procedures in force in the correctional facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11431,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach dotyczących zmian w przepisach i procedurach oraz stosowanie się do wytycznych przełożonych.",
                    "en" => "Participating in training regarding changes in regulations and procedures and adhering to the guidelines of superiors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11432,
                "name" => json_encode([
                    "pl" => "Kontrola korespondencji i rozmów telefonicznych osadzonych, zgodnie z obowiązującymi przepisami, w celu zapobiegania próbom przestępczej działalności.",
                    "en" => "Monitoring the correspondence and phone conversations of inmates, in accordance with applicable regulations, to prevent attempts at criminal activity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11433,
                "name" => json_encode([
                    "pl" => "Zabezpieczanie informacji o wszelkich nielegalnych próbach komunikacji, np. dotyczących przemytu lub ucieczki.",
                    "en" => "Securing information about any illegal communication attempts, such as those related to smuggling or escape."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11434,
                "name" => json_encode([
                    "pl" => "Organizacja wizyt osadzonych z rodziną i bliskimi, zapewnienie bezpieczeństwa podczas odwiedzin.",
                    "en" => "Organizing inmate visits with family and loved ones, ensuring safety during visits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11435,
                "name" => json_encode([
                    "pl" => "Informowanie odwiedzających o zasadach odwiedzin i przestrzeganie zasad dotyczących przynoszenia przedmiotów.",
                    "en" => "Informing visitors about visiting rules and adhering to regulations regarding the items brought."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11436,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej codziennych czynności służbowych, takich jak rejestry obecności, raporty z kontroli i incydentów.",
                    "en" => "Maintaining documentation related to daily duties, such as attendance logs, inspection reports, and incident reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11437,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów dotyczących zachowania osadzonych, podejmowanych interwencji oraz szczególnych wydarzeń.",
                    "en" => "Preparing reports on inmates' behavior, interventions taken, and special events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11438,
                "name" => json_encode([
                    "pl" => "Motywowanie osadzonych do podejmowania działań mających na celu ich readaptację społeczną, np. udział w kursach zawodowych, nauce czy terapii.",
                    "en" => "Motivating inmates to engage in activities aimed at their social reintegration, such as participating in vocational courses, education, or therapy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11439,
                "name" => json_encode([
                    "pl" => "Informowanie osadzonych o możliwościach pomocy po wyjściu na wolność i wsparcie w organizacji ich powrotu do społeczeństwa.",
                    "en" => "Informing inmates about assistance options upon release and supporting their reintegration into society."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11440,
                "name" => json_encode([
                    "pl" => "Nadzorowanie utrzymania czystości w celach i pomieszczeniach zakładu karnego.",
                    "en" => "Supervising the maintenance of cleanliness in cells and areas of the correctional facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11441,
                "name" => json_encode([
                    "pl" => "Wdrażanie procedur sanitarnych i dbanie o przestrzeganie zasad higieny przez osadzonych.",
                    "en" => "Implementing sanitation procedures and ensuring inmates adhere to hygiene standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11442,
                "name" => json_encode([
                    "pl" => "Obserwacja zachowań osadzonych pod kątem agresji i zapobieganie aktom przemocy między osadzonymi.",
                    "en" => "Observing inmate behavior for signs of aggression and preventing acts of violence between inmates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11443,
                "name" => json_encode([
                    "pl" => "Interweniowanie w sytuacjach konfliktowych i podejmowanie działań mających na celu deeskalację napięcia.",
                    "en" => "Intervening in conflict situations and taking actions aimed at de-escalating tension."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11444,
                "name" => json_encode([
                    "pl" => "Wymiana informacji z policją, prokuraturą i sądami dotyczących osadzonych i spraw związanych z ich pobytem w zakładzie karnym.",
                    "en" => "Exchanging information with police, prosecutors, and courts regarding inmates and issues related to their incarceration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11445,
                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia w dochodzeniach prowadzonych na terenie zakładu karnego, np. przy sprawach dotyczących przemytu czy przestępstw wewnętrznych.",
                    "en" => "Providing support in investigations conducted within the correctional facility, such as cases of smuggling or internal crimes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11446,
                "name" => json_encode([
                    "pl" => "Działanie zgodnie z zasadami etyki zawodowej, dbając o szacunek i godność osób przebywających w zakładzie karnym.",
                    "en" => "Acting in accordance with professional ethics, ensuring respect and dignity for individuals in the correctional facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11447,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad humanitarnego traktowania osadzonych, przy jednoczesnym zachowaniu rygoru i dyscypliny.",
                    "en" => "Adhering to principles of humane treatment of inmates while maintaining discipline and order."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11448,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach i kursach doskonalących z zakresu bezpieczeństwa, resocjalizacji, pierwszej pomocy oraz technik interwencji.",
                    "en" => "Participating in training and courses aimed at improving skills in security, rehabilitation, first aid, and intervention techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11449,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy i umiejętności potrzebnych do pełnienia służby w zakładach karnych.",
                    "en" => "Updating knowledge and skills required for service in correctional facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
        ];
        $funkcjonariusze_sluzby_specjalnej = [
            [
                "id" => 11450,
                "name" => json_encode([
                    "pl" => "Pozyskiwanie informacji o potencjalnych zagrożeniach dla bezpieczeństwa państwa, w tym działalności wywiadowczej obcych służb, terroryzmie, przestępczości zorganizowanej.",
                    "en" => "Gathering information about potential threats to national security, including foreign intelligence activities, terrorism, and organized crime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11451,
                "name" => json_encode([
                    "pl" => "Analiza zebranych danych w celu oceny ryzyka i planowania odpowiednich działań.",
                    "en" => "Analyzing collected data to assess risk and plan appropriate actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11452,
                "name" => json_encode([
                    "pl" => "Wykrywanie i neutralizowanie działalności obcych wywiadów na terenie kraju.",
                    "en" => "Detecting and neutralizing foreign intelligence activities within the country."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11453,
                "name" => json_encode([
                    "pl" => "Prowadzenie operacji mających na celu identyfikację i przeciwdziałanie szpiegostwu.",
                    "en" => "Conducting operations aimed at identifying and countering espionage."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11454,
                "name" => json_encode([
                    "pl" => "Identyfikowanie i monitorowanie osób oraz organizacji związanych z działalnością terrorystyczną.",
                    "en" => "Identifying and monitoring individuals and organizations related to terrorist activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11455,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi służbami krajowymi i międzynarodowymi w celu zwalczania terroryzmu i zapobiegania atakom.",
                    "en" => "Cooperating with other national and international agencies to combat terrorism and prevent attacks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11456,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie operacji mających na celu rozbijanie grup przestępczych i przeciwdziałanie korupcji w instytucjach państwowych.",
                    "en" => "Conducting operations aimed at dismantling criminal groups and counteracting corruption in state institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11457,
                "name" => json_encode([
                    "pl" => "Gromadzenie dowodów, identyfikowanie osób zaangażowanych w przestępczość i współpraca z organami ścigania.",
                    "en" => "Collecting evidence, identifying individuals involved in criminal activities, and collaborating with law enforcement agencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11458,
                "name" => json_encode([
                    "pl" => "Zbieranie informacji o zagrożeniach dla interesów państwa poza granicami kraju.",
                    "en" => "Gathering information on threats to state interests outside the country's borders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11459,
                "name" => json_encode([
                    "pl" => "Współpraca z sojusznikami oraz podejmowanie działań wywiadowczych w krajach, gdzie działają grupy przestępcze lub organizacje terrorystyczne zagrażające państwu.",
                    "en" => "Cooperating with allies and conducting intelligence operations in countries where criminal groups or terrorist organizations pose a threat."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11460,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że kluczowe informacje dotyczące bezpieczeństwa narodowego są odpowiednio chronione i zabezpieczone przed wyciekiem.",
                    "en" => "Ensuring that key information related to national security is properly protected and secured against leaks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11461,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów bezpieczeństwa oraz wdrażanie procedur ochrony danych w instytucjach państwowych.",
                    "en" => "Conducting security audits and implementing data protection procedures in state institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11462,
                "name" => json_encode([
                    "pl" => "Przeciwdziałanie atakom cybernetycznym na instytucje państwowe, infrastrukturę krytyczną oraz firmy strategiczne dla państwa.",
                    "en" => "Countering cyberattacks on state institutions, critical infrastructure, and companies vital to the state."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11463,
                "name" => json_encode([
                    "pl" => "Identyfikowanie źródeł cyberzagrożeń, zabezpieczanie sieci i systemów oraz współpraca z zespołami ds. cyberbezpieczeństwa.",
                    "en" => "Identifying sources of cyber threats, securing networks and systems, and collaborating with cybersecurity teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11464,
                "name" => json_encode([
                    "pl" => "Wprowadzanie funkcjonariuszy do środowisk przestępczych w celu zebrania informacji o ich działalności.",
                    "en" => "Infiltrating criminal environments to gather information about their activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11465,
                "name" => json_encode([
                    "pl" => "Utrzymywanie kontaktów operacyjnych oraz gromadzenie dowodów do rozbicia grup przestępczych.",
                    "en" => "Maintaining operational contacts and gathering evidence to dismantle criminal groups."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11466,
                "name" => json_encode([
                    "pl" => "Planowanie i realizacja tajnych operacji mających na celu eliminację zagrożeń dla bezpieczeństwa narodowego.",
                    "en" => "Planning and executing covert operations aimed at eliminating threats to national security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11467,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie technik operacyjnych, takich jak śledzenie, podsłuchy, monitoring oraz prowadzenie akcji bezpośrednich.",
                    "en" => "Utilizing operational techniques such as surveillance, wiretapping, monitoring, and executing direct actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11468,
                "name" => json_encode([
                    "pl" => "Stosowanie legalnych technik inwigilacyjnych, takich jak podsłuchy, monitoring komunikacji elektronicznej oraz nadzór wizyjny.",
                    "en" => "Employing legal surveillance techniques such as wiretapping, monitoring electronic communications, and visual surveillance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11469,
                "name" => json_encode([
                    "pl" => "Dokumentowanie i analiza uzyskanych danych do dalszego śledztwa i działań operacyjnych.",
                    "en" => "Documenting and analyzing obtained data for further investigation and operational actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11470,
                "name" => json_encode([
                    "pl" => "Ochrona wysokich rangą urzędników państwowych, dyplomatów oraz świadków w sytuacjach zagrożenia.",
                    "en" => "Protecting high-ranking state officials, diplomats, and witnesses in threatening situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11471,
                "name" => json_encode([
                    "pl" => "Wdrażanie działań zabezpieczających w sytuacjach podwyższonego ryzyka, np. podczas wizyt dyplomatycznych lub wydarzeń międzynarodowych.",
                    "en" => "Implementing protective measures in high-risk situations, such as diplomatic visits or international events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11472,
                "name" => json_encode([
                    "pl" => "Identyfikacja i monitorowanie zagrożeń wobec strategicznych obiektów państwowych, takich jak elektrownie, wodociągi, systemy transportowe.",
                    "en" => "Identifying and monitoring threats to strategic state facilities, such as power plants, waterworks, and transportation systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11473,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli bezpieczeństwa w obiektach kluczowych dla bezpieczeństwa państwa.",
                    "en" => "Conducting security checks at facilities critical to national security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11474,
                "name" => json_encode([
                    "pl" => "Przesłuchiwanie podejrzanych, świadków oraz osób mogących posiadać istotne informacje dotyczące zagrożeń dla państwa.",
                    "en" => "Interrogating suspects, witnesses, and individuals who may possess crucial information regarding threats to the state."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11475,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie technik operacyjnych podczas wywiadów, aby uzyskać kluczowe informacje.",
                    "en" => "Utilizing operational techniques during interviews to obtain critical information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11476,
                "name" => json_encode([
                    "pl" => "Współpraca z sojusznikami oraz organizacjami międzynarodowymi, np. Interpolem, Europolem, NATO, w zwalczaniu zagrożeń globalnych.",
                    "en" => "Collaborating with allies and international organizations, such as Interpol, Europol, and NATO, in combating global threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11477,
                "name" => json_encode([
                    "pl" => "Udział w międzynarodowych operacjach oraz wymiana informacji wywiadowczych z sojusznikami.",
                    "en" => "Participating in international operations and exchanging intelligence information with allies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11478,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów i prognoz dotyczących zagrożeń dla bezpieczeństwa państwa oraz ocena ryzyka.",
                    "en" => "Creating reports and forecasts regarding threats to national security and assessing risk."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11479,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji analitycznych władzom i instytucjom państwowym, aby umożliwić podejmowanie decyzji strategicznych.",
                    "en" => "Providing analytical information to authorities and state institutions to enable strategic decision-making."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11480,
                "name" => json_encode([
                    "pl" => "Monitorowanie i przeciwdziałanie nielegalnemu obrotowi bronią masowego rażenia, jej komponentami i technologią.",
                    "en" => "Monitoring and countering illegal trafficking of weapons of mass destruction, their components, and technology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11481,
                "name" => json_encode([
                    "pl" => "Współpraca z międzynarodowymi organizacjami w zakresie zapobiegania rozprzestrzenianiu broni nuklearnej, biologicznej i chemicznej.",
                    "en" => "Collaborating with international organizations to prevent the proliferation of nuclear, biological, and chemical weapons."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11482,
                "name" => json_encode([
                    "pl" => "Podejmowanie działań zapobiegających zagrożeniom, np. poprzez monitorowanie ekstremistycznych grup i osób zagrażających państwu.",
                    "en" => "Taking preventive actions against threats, such as monitoring extremist groups and individuals posing risks to the state."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11483,
                "name" => json_encode([
                    "pl" => "Organizowanie szkoleń i kampanii edukacyjnych, które zwiększają świadomość społeczeństwa w zakresie bezpieczeństwa narodowego.",
                    "en" => "Organizing training sessions and educational campaigns that raise public awareness regarding national security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11484,
                "name" => json_encode([
                    "pl" => "Monitorowanie i zapobieganie przemytowi oraz działalności przestępczej na granicach.",
                    "en" => "Monitoring and preventing smuggling and criminal activities at borders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11485,
                "name" => json_encode([
                    "pl" => "Współpraca ze strażą graniczną i służbami celnymi w celu identyfikacji zagrożeń i przemytników.",
                    "en" => "Cooperating with border guards and customs services to identify threats and smugglers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11486,
                "name" => json_encode([
                    "pl" => "Praca w pełnej dyskrecji i poufności, aby nie ujawniać działań operacyjnych oraz chronić źródła informacji.",
                    "en" => "Working with full discretion and confidentiality to avoid revealing operational activities and protecting sources of information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11487,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad etyki zawodowej i działanie w sposób odpowiedzialny i zgodny z prawem.",
                    "en" => "Adhering to professional ethics and acting responsibly and in accordance with the law."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11488,
                "name" => json_encode([
                    "pl" => "Regularne podnoszenie kwalifikacji poprzez udział w specjalistycznych szkoleniach i kursach z zakresu wywiadu, kontrwywiadu, technologii oraz analizy wywiadowczej.",
                    "en" => "Regularly enhancing qualifications by participating in specialized training and courses in intelligence, counterintelligence, technology, and intelligence analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11489,
                "name" => json_encode([
                    "pl" => "Utrzymywanie wysokiej sprawności fizycznej oraz umiejętności taktycznych niezbędnych do pracy w sytuacjach kryzysowych.",
                    "en" => "Maintaining high physical fitness and tactical skills necessary for working in crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11490,
                "name" => json_encode([
                    "pl" => "Przygotowanie planów działania na wypadek sytuacji kryzysowych, takich jak zamachy terrorystyczne, katastrofy naturalne czy cyberataki.",
                    "en" => "Preparing action plans for potential crisis situations such as terrorist attacks, natural disasters, or cyberattacks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11491,
                "name" => json_encode([
                    "pl" => "Koordynacja działań kryzysowych we współpracy z innymi służbami i instytucjami.",
                    "en" => "Coordinating crisis actions in cooperation with other services and institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $strazacy = [
            [
                "id" => 11500,
                "name" => json_encode([
                    "pl" => "Udział w akcjach gaśniczych, mających na celu ugaszenie pożarów budynków, pojazdów, lasów i innych obiektów.",
                    "en" => "Participating in firefighting operations aimed at extinguishing fires in buildings, vehicles, forests, and other objects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11501,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie sprzętu gaśniczego, takiego jak węże, pompy wodne, gaśnice i inne urządzenia do efektywnego gaszenia ognia.",
                    "en" => "Utilizing firefighting equipment such as hoses, water pumps, fire extinguishers, and other devices for effective fire suppression."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11502,
                "name" => json_encode([
                    "pl" => "Udzielanie pierwszej pomocy medycznej ofiarom pożarów, wypadków drogowych oraz innych zdarzeń.",
                    "en" => "Providing first aid to victims of fires, traffic accidents, and other incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11503,
                "name" => json_encode([
                    "pl" => "Ewakuacja osób z zagrożonych budynków i miejsc, w tym ratowanie osób uwięzionych w trudnodostępnych obszarach lub sytuacjach.",
                    "en" => "Evacuating people from endangered buildings and locations, including rescuing those trapped in hard-to-reach areas or situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11504,
                "name" => json_encode([
                    "pl" => "Udział w akcjach ratunkowych, takich jak wyciąganie osób z pojazdów po wypadkach, ratowanie tonących czy reagowanie na sytuacje zagrożenia życia.",
                    "en" => "Participating in rescue operations, such as extracting people from vehicles after accidents, rescuing drowning individuals, or responding to life-threatening situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11505,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie specjalistycznego sprzętu ratunkowego, takiego jak nożyce hydrauliczne, liny, drabiny i kamizelki ratunkowe.",
                    "en" => "Using specialized rescue equipment such as hydraulic cutters, ropes, ladders, and life vests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11506,
                "name" => json_encode([
                    "pl" => "Ogradzanie i zabezpieczanie miejsc wypadków i pożarów, aby zapobiec dalszemu zagrożeniu dla osób postronnych.",
                    "en" => "Securing and cordoning off accident and fire scenes to prevent further danger to bystanders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11507,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli miejsca po zakończeniu akcji, aby upewnić się, że nie ma dalszych zagrożeń.",
                    "en" => "Conducting site inspections after an operation to ensure there are no further hazards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11508,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie działań ratowniczych w przypadku katastrof budowlanych, awarii technicznych, wycieków chemicznych i innych zagrożeń technicznych.",
                    "en" => "Conducting rescue operations in cases of building collapses, technical failures, chemical spills, and other technical hazards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11509,
                "name" => json_encode([
                    "pl" => "Używanie specjalistycznego sprzętu do cięcia, podnoszenia oraz stabilizacji konstrukcji i pojazdów.",
                    "en" => "Using specialized equipment for cutting, lifting, and stabilizing structures and vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11510,
                "name" => json_encode([
                    "pl" => "Udział w akcjach ratunkowych na wodach i akwenach, w tym ratowanie tonących oraz wyciąganie osób z wody.",
                    "en" => "Participating in rescue operations on water bodies, including rescuing drowning individuals and retrieving people from water."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11511,
                "name" => json_encode([
                    "pl" => "Prowadzenie działań ratowniczych na wysokościach, takich jak ratowanie osób z wieżowców, mostów, klifów lub budynków przemysłowych.",
                    "en" => "Conducting rescue operations at heights, such as rescuing individuals from skyscrapers, bridges, cliffs, or industrial buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11512,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje związane z wyciekami substancji niebezpiecznych, takich jak chemikalia, paliwa czy gazy toksyczne.",
                    "en" => "Responding to situations involving hazardous substance spills, such as chemicals, fuels, or toxic gases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11513,
                "name" => json_encode([
                    "pl" => "Zapobieganie dalszemu rozprzestrzenianiu się substancji i neutralizowanie zagrożeń chemicznych dla zdrowia i środowiska.",
                    "en" => "Preventing further spread of substances and neutralizing chemical hazards to health and the environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11514,
                "name" => json_encode([
                    "pl" => "Udzielanie pomocy przedmedycznej, w tym opatrywanie ran, udzielanie resuscytacji krążeniowo-oddechowej oraz stabilizacja stanu poszkodowanych.",
                    "en" => "Providing first aid, including wound dressing, performing CPR, and stabilizing the condition of victims."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11515,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami ratownictwa medycznego w celu zapewnienia profesjonalnej opieki medycznej na miejscu zdarzenia.",
                    "en" => "Cooperating with medical rescue teams to provide professional medical care at the scene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11516,
                "name" => json_encode([
                    "pl" => "Regularne sprawdzanie, konserwacja i przygotowanie sprzętu gaśniczego, ratunkowego i medycznego do użycia.",
                    "en" => "Regularly checking, maintaining, and preparing firefighting, rescue, and medical equipment for use."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11517,
                "name" => json_encode([
                    "pl" => "Kontrola pojazdów strażackich, w tym uzupełnianie paliwa, sprawdzanie stanu technicznego oraz wyposażenia.",
                    "en" => "Inspecting fire vehicles, including refueling, checking technical condition, and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11518,
                "name" => json_encode([
                    "pl" => "Udział w regularnych szkoleniach i ćwiczeniach mających na celu doskonalenie umiejętności gaśniczych, ratowniczych i medycznych.",
                    "en" => "Participating in regular training and exercises aimed at improving firefighting, rescue, and medical skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11519,
                "name" => json_encode([
                    "pl" => "Utrzymywanie sprawności fizycznej oraz uczestniczenie w treningach związanych z nowymi technologiami i procedurami.",
                    "en" => "Maintaining physical fitness and participating in training related to new technologies and procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11520,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli bezpieczeństwa pożarowego w budynkach publicznych, firmach i instytucjach w celu zapobiegania pożarom.",
                    "en" => "Conducting fire safety inspections in public buildings, businesses, and institutions to prevent fires."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11521,
                "name" => json_encode([
                    "pl" => "Informowanie o zagrożeniach pożarowych i udzielanie wskazówek dotyczących zabezpieczeń przeciwpożarowych oraz procedur ewakuacyjnych.",
                    "en" => "Informing about fire hazards and providing guidance on fire safety measures and evacuation procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11522,
                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń i kampanii edukacyjnych dla społeczeństwa na temat prewencji przeciwpożarowej i zasad bezpieczeństwa.",
                    "en" => "Conducting training and educational campaigns for the public on fire prevention and safety principles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11523,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań w szkołach, zakładach pracy i instytucjach w celu zwiększenia świadomości o zagrożeniach i metodach radzenia sobie z nimi.",
                    "en" => "Organizing meetings in schools, workplaces, and institutions to raise awareness of hazards and coping methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11524,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów działania na wypadek różnych scenariuszy zdarzeń, takich jak pożary, powodzie, katastrofy budowlane.",
                    "en" => "Developing action plans for various event scenarios, such as fires, floods, and building collapses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11525,
                "name" => json_encode([
                    "pl" => "Koordynacja działań ratowniczych z innymi służbami, takimi jak policja, pogotowie ratunkowe, straż miejska czy wojsko.",
                    "en" => "Coordinating rescue operations with other services such as police, emergency medical services, municipal guards, or military."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11526,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów po zakończeniu każdej akcji, w tym dokumentowanie przebiegu zdarzenia, działań podjętych oraz wyników akcji.",
                    "en" => "Preparing reports after each operation, documenting the course of events, actions taken, and results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11527,
                "name" => json_encode([
                    "pl" => "Analiza przeprowadzonych akcji w celu identyfikacji obszarów wymagających poprawy i usprawnienia procedur.",
                    "en" => "Analyzing conducted operations to identify areas requiring improvement and streamlining procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11528,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w planowaniu zabezpieczeń przeciwpożarowych i ratowniczych podczas dużych imprez masowych, takich jak koncerty, festiwale, wydarzenia sportowe.",
                    "en" => "Participating in planning fire and rescue security during large mass events such as concerts, festivals, and sports events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11529,
                "name" => json_encode([
                    "pl" => "Obecność na miejscu i gotowość do interwencji w razie sytuacji kryzysowej.",
                    "en" => "Being present on-site and ready to intervene in case of a crisis situation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11530,
                "name" => json_encode([
                    "pl" => "Udział w działaniach ratowniczych podczas katastrof naturalnych, takich jak powodzie, trzęsienia ziemi, pożary lasów, huragany.",
                    "en" => "Participating in rescue operations during natural disasters such as floods, earthquakes, forest fires, and hurricanes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11531,
                "name" => json_encode([
                    "pl" => "Organizowanie ewakuacji i wsparcia dla ludności w sytuacjach kryzysowych.",
                    "en" => "Organizing evacuations and support for the population in crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11532,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z policją, pogotowiem ratunkowym, strażą miejską, służbami ochrony środowiska oraz innymi jednostkami w sytuacjach kryzysowych.",
                    "en" => "Coordinating actions with the police, emergency medical services, municipal guards, environmental protection services, and other units in crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11533,
                "name" => json_encode([
                    "pl" => "Wspólne planowanie, ćwiczenia i wdrażanie procedur w celu skutecznej współpracy w akcjach ratowniczych.",
                    "en" => "Jointly planning, exercising, and implementing procedures for effective collaboration in rescue operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11534,
                "name" => json_encode([
                    "pl" => "Pomoc w ewakuacji osób i zwierząt z miejsc zagrożonych, takich jak obszary pożarowe, miejsca skażenia chemicznego, budynki po zawaleniu.",
                    "en" => "Assisting in the evacuation of people and animals from threatened areas, such as fire zones, chemical contamination sites, and collapsed buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11535,
                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia logistycznego oraz zabezpieczanie miejsc, z których przeprowadzana jest ewakuacja.",
                    "en" => "Providing logistical support and securing areas from which evacuations are conducted."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11536,
                "name" => json_encode([
                    "pl" => "Udział w akcjach ratowniczych na drogach, pomoc w usuwaniu skutków wypadków drogowych oraz wyciąganie osób uwięzionych w pojazdach.",
                    "en" => "Participating in road rescue operations, helping to clear the aftermath of traffic accidents and extracting people trapped in vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11537,
                "name" => json_encode([
                    "pl" => "Zabezpieczanie miejsca wypadku i organizacja ruchu, aby umożliwić bezpieczną pracę służb ratunkowych.",
                    "en" => "Securing the accident scene and organizing traffic to allow for the safe operation of emergency services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11538,
                "name" => json_encode([
                    "pl" => "Doskonalenie umiejętności korzystania z nowoczesnych technologii, takich jak drony, kamery termowizyjne, systemy lokalizacji.",
                    "en" => "Improving skills in using modern technologies such as drones, thermal cameras, and location systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11539,
                "name" => json_encode([
                    "pl" => "Aktualizacja wiedzy na temat nowych narzędzi ratowniczych i gaśniczych oraz ich zastosowania w sytuacjach kryzysowych.",
                    "en" => "Updating knowledge about new rescue and firefighting tools and their application in crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11540,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad BHP i stosowanie środków ochrony osobistej, takich jak hełmy, kombinezony ognioodporne, maski ochronne.",
                    "en" => "Adhering to health and safety regulations and using personal protective equipment such as helmets, fire-resistant suits, and protective masks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11541,
                "name" => json_encode([
                    "pl" => "Dbanie o bezpieczeństwo członków zespołu i wspieranie ich podczas akcji ratowniczych i gaśniczych.",
                    "en" => "Ensuring the safety of team members and supporting them during rescue and firefighting operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11542,
                "name" => json_encode([
                    "pl" => "Działania związane z minimalizacją szkód środowiskowych wynikających z pożarów i awarii, w tym ochrona wód, gleby i powietrza.",
                    "en" => "Actions aimed at minimizing environmental damage caused by fires and emergencies, including protecting water, soil, and air."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11543,
                "name" => json_encode([
                    "pl" => "Udział w akcjach usuwania zanieczyszczeń powstałych w wyniku wycieków chemikaliów, substancji ropopochodnych lub innych niebezpiecznych materiałów.",
                    "en" => "Participating in actions to remove contaminants resulting from chemical spills, petroleum products, or other hazardous materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11544,
                "name" => json_encode([
                    "pl" => "Działanie zgodnie z zasadami etyki strażaka, dbanie o uczciwość, szacunek i profesjonalizm w wykonywaniu obowiązków.",
                    "en" => "Acting according to firefighter ethics, maintaining honesty, respect, and professionalism in carrying out duties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11545,
                "name" => json_encode([
                    "pl" => "Wykazywanie odpowiedzialności i empatii w stosunku do osób poszkodowanych oraz kolegów z zespołu.",
                    "en" => "Demonstrating responsibility and empathy towards victims and team members."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $straznicy_w_zakladach_dla_nieletnich = [
            [
                "id" => 11546,
                "name" => json_encode([
                    "pl" => "Monitorowanie zachowania nieletnich, dbanie o przestrzeganie regulaminu zakładu oraz reagowanie na niewłaściwe zachowania.",
                    "en" => "Monitoring the behavior of minors, ensuring compliance with the facility's regulations, and responding to inappropriate behavior."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11547,
                "name" => json_encode([
                    "pl" => "Codzienne sprawdzanie obecności wychowanków w wyznaczonych miejscach oraz kontrola ich przemieszczania się w obrębie placówki.",
                    "en" => "Daily checking the presence of minors in designated areas and monitoring their movements within the facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11548,
                "name" => json_encode([
                    "pl" => "Ochrona wychowanków oraz personelu przed zagrożeniami wewnętrznymi i zewnętrznymi.",
                    "en" => "Protecting minors and staff from internal and external threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11549,
                "name" => json_encode([
                    "pl" => "Zapobieganie konfliktom, aktom przemocy, próbom ucieczki oraz innym sytuacjom kryzysowym.",
                    "en" => "Preventing conflicts, acts of violence, escape attempts, and other crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11550,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli osobistych wychowanków w celu zapobiegania przemytowi niedozwolonych przedmiotów, takich jak broń, narkotyki czy urządzenia komunikacyjne.",
                    "en" => "Conducting personal searches of minors to prevent smuggling of prohibited items such as weapons, drugs, or communication devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11551,
                "name" => json_encode([
                    "pl" => "Regularne przeszukiwanie pokoi, wspólnych pomieszczeń i szafek w celu zapewnienia bezpieczeństwa i porządku.",
                    "en" => "Regularly searching rooms, common areas, and lockers to ensure safety and order."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11552,
                "name" => json_encode([
                    "pl" => "Nadzorowanie codziennych aktywności wychowanków zgodnie z ustalonym harmonogramem, w tym posiłków, zajęć edukacyjnych, czasu wolnego i godzin ciszy nocnej.",
                    "en" => "Supervising the daily activities of minors according to the established schedule, including meals, educational activities, free time, and quiet hours."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11553,
                "name" => json_encode([
                    "pl" => "Organizacja czasu wolnego oraz zachęcanie wychowanków do udziału w aktywnościach sportowych, edukacyjnych i resocjalizacyjnych.",
                    "en" => "Organizing leisure time and encouraging minors to participate in sports, educational, and rehabilitation activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11554,
                "name" => json_encode([
                    "pl" => "Motywowanie wychowanków do uczestnictwa w zajęciach resocjalizacyjnych, terapeutycznych i edukacyjnych organizowanych przez zakład.",
                    "en" => "Motivating minors to participate in rehabilitation, therapeutic, and educational activities organized by the facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11555,
                "name" => json_encode([
                    "pl" => "Współpraca z wychowawcami, pedagogami i psychologami w zakresie wdrażania programów resocjalizacyjnych.",
                    "en" => "Cooperating with educators, pedagogues, and psychologists to implement rehabilitation programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11556,
                "name" => json_encode([
                    "pl" => "Budowanie zaufania i autorytetu w relacjach z nieletnimi, co pomaga w tworzeniu atmosfery opartej na szacunku i wsparciu.",
                    "en" => "Building trust and authority in relationships with minors, which helps create an atmosphere of respect and support."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11557,
                "name" => json_encode([
                    "pl" => "Wykazywanie empatii i zrozumienia, co sprzyja pozytywnym zmianom w zachowaniu wychowanków.",
                    "en" => "Demonstrating empathy and understanding, which fosters positive changes in the behavior of minors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11558,
                "name" => json_encode([
                    "pl" => "Rozmowy wychowawcze z młodzieżą na temat zasad etycznych, norm społecznych i odpowiedzialności za własne czyny.",
                    "en" => "Conducting educational discussions with youth about ethical principles, social norms, and accountability for their actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11559,
                "name" => json_encode([
                    "pl" => "Zachęcanie do przyjęcia postaw opartych na poszanowaniu innych osób, rozwiązywania konfliktów oraz przestrzegania zasad.",
                    "en" => "Encouraging the adoption of attitudes based on respect for others, conflict resolution, and adherence to rules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11560,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów dotyczących codziennych zdarzeń, zachowania wychowanków, interwencji oraz incydentów.",
                    "en" => "Preparing reports on daily events, minors' behavior, interventions, and incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11561,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przebiegu dyżuru oraz sporządzanie notatek dotyczących istotnych informacji na temat poszczególnych wychowanków.",
                    "en" => "Documenting the course of duty and preparing notes on significant information about individual minors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11562,
                "name" => json_encode([
                    "pl" => "Podejmowanie szybkich działań w sytuacjach kryzysowych, takich jak bójki, akty agresji, próby samookaleczenia lub ucieczki.",
                    "en" => "Taking prompt action in crisis situations, such as fights, acts of aggression, self-harm attempts, or escape attempts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11563,
                "name" => json_encode([
                    "pl" => "Współpraca z personelem zakładu oraz wezwanie odpowiednich służb, jeśli jest to konieczne.",
                    "en" => "Cooperating with the facility staff and calling in appropriate services if necessary."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11564,
                "name" => json_encode([
                    "pl" => "Udzielanie pierwszej pomocy w nagłych przypadkach zdrowotnych lub w razie obrażeń powstałych w wyniku konfliktów między wychowankami.",
                    "en" => "Providing first aid in health emergencies or in case of injuries resulting from conflicts between minors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11565,
                "name" => json_encode([
                    "pl" => "Współpraca z personelem medycznym zakładu i zewnętrznymi służbami ratunkowymi w sytuacjach wymagających interwencji medycznej.",
                    "en" => "Cooperating with the medical staff of the facility and external emergency services in situations requiring medical intervention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11566,
                "name" => json_encode([
                    "pl" => "Organizowanie i nadzorowanie spotkań wychowanków z rodziną, bliskimi i osobami upoważnionymi do odwiedzin.",
                    "en" => "Organizing and supervising visits of minors with family, relatives, and authorized visitors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11567,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad dotyczących odwiedzin, kontrolowanie przedmiotów wnoszonych przez gości oraz zapewnienie bezpieczeństwa podczas spotkań.",
                    "en" => "Adhering to visiting rules, checking items brought by guests, and ensuring safety during visits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11568,
                "name" => json_encode([
                    "pl" => "Przeglądanie korespondencji, w tym listów i paczek, zgodnie z obowiązującymi przepisami, w celu zapobiegania próbom przemytu niedozwolonych przedmiotów.",
                    "en" => "Reviewing correspondence, including letters and packages, according to applicable regulations to prevent smuggling of prohibited items."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11569,
                "name" => json_encode([
                    "pl" => "Monitorowanie rozmów telefonicznych wychowanków, jeśli jest to wymagane przepisami.",
                    "en" => "Monitoring the phone calls of minors if required by regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11570,
                "name" => json_encode([
                    "pl" => "Nadzorowanie porządkowania pomieszczeń, wykonywania codziennych obowiązków oraz dbania o higienę przez wychowanków.",
                    "en" => "Supervising the tidying up of rooms, performing daily duties, and ensuring hygiene among minors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11571,
                "name" => json_encode([
                    "pl" => "Wdrażanie zasad samodzielności oraz odpowiedzialności za swoje otoczenie i osobiste obowiązki.",
                    "en" => "Implementing principles of independence and responsibility for one's environment and personal duties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11572,
                "name" => json_encode([
                    "pl" => "Współpraca z wychowawcami, psychologami, pedagogami i terapeutami w celu wspólnego wypracowywania metod resocjalizacji oraz wsparcia wychowanków.",
                    "en" => "Cooperating with educators, psychologists, pedagogues, and therapists to collaboratively develop methods of rehabilitation and support for minors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11573,
                "name" => json_encode([
                    "pl" => "Udział w spotkaniach zespołu wychowawczego oraz przekazywanie informacji dotyczących obserwacji zachowań nieletnich.",
                    "en" => "Participating in team meetings and providing information regarding the observation of minor behaviors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11574,
                "name" => json_encode([
                    "pl" => "Egzekwowanie zasad i przepisów obowiązujących w zakładzie oraz reagowanie na naruszenia regulaminu przez wychowanków.",
                    "en" => "Enforcing the rules and regulations in the facility and responding to violations of the regulations by minors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11575,
                "name" => json_encode([
                    "pl" => "Stosowanie środków dyscyplinarnych zgodnie z wytycznymi i zasadami etyki zawodowej.",
                    "en" => "Applying disciplinary measures in accordance with guidelines and professional ethics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11576,
                "name" => json_encode([
                    "pl" => "Dbanie o odpowiednie warunki sanitarne w placówce oraz pilnowanie, aby wychowankowie przestrzegali zasad higieny.",
                    "en" => "Ensuring appropriate sanitary conditions in the facility and monitoring that minors adhere to hygiene rules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11577,
                "name" => json_encode([
                    "pl" => "Monitorowanie warunków higienicznych w pomieszczeniach wspólnych oraz wprowadzenie procedur sanitarnych w sytuacjach zagrożenia zdrowia.",
                    "en" => "Monitoring hygienic conditions in common areas and implementing sanitary procedures in health-threatening situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11578,
                "name" => json_encode([
                    "pl" => "Pomoc w organizacji zajęć edukacyjnych, rekreacyjnych, sportowych i kulturalnych mających na celu rozwój osobisty wychowanków.",
                    "en" => "Assisting in the organization of educational, recreational, sports, and cultural activities aimed at the personal development of minors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11579,
                "name" => json_encode([
                    "pl" => "Zachęcanie młodzieży do uczestnictwa w różnorodnych formach aktywności i wspieranie ich talentów i zainteresowań.",
                    "en" => "Encouraging youth to participate in various forms of activities and supporting their talents and interests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11580,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie napięć i konfliktów między wychowankami, podejmowanie działań zapobiegawczych oraz interweniowanie w sytuacjach wymagających reakcji.",
                    "en" => "Recognizing tensions and conflicts among minors, taking preventive actions, and intervening in situations requiring a response."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11581,
                "name" => json_encode([
                    "pl" => "Praca nad budowaniem pozytywnych relacji między wychowankami oraz promowanie postaw opartych na szacunku i współpracy.",
                    "en" => "Working on building positive relationships among minors and promoting attitudes based on respect and cooperation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11582,
                "name" => json_encode([
                    "pl" => "Motywowanie młodzieży do nauki i zdobywania umiejętności potrzebnych w dorosłym życiu.",
                    "en" => "Motivating youth to learn and acquire skills necessary for adult life."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11583,
                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia w zakresie zdobywania umiejętności społecznych, podejmowania odpowiedzialnych decyzji i radzenia sobie z trudnościami.",
                    "en" => "Providing support in acquiring social skills, making responsible decisions, and coping with difficulties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11584,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach i kursach podnoszących kwalifikacje w zakresie pracy z nieletnimi, resocjalizacji, bezpieczeństwa oraz pierwszej pomocy.",
                    "en" => "Participating in training and courses to enhance qualifications in working with minors, rehabilitation, safety, and first aid."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11585,
                "name" => json_encode([
                    "pl" => "Aktualizacja wiedzy na temat metod resocjalizacji oraz technik interwencyjnych w pracy z młodzieżą.",
                    "en" => "Updating knowledge about rehabilitation methods and intervention techniques in working with youth."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11586,
                "name" => json_encode([
                    "pl" => "Działanie zgodnie z zasadami etyki zawodowej oraz poszanowanie godności i praw wychowanków.",
                    "en" => "Acting in accordance with professional ethics and respecting the dignity and rights of minors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11587,
                "name" => json_encode([
                    "pl" => "Zachowanie poufności informacji dotyczących wychowanków i spraw zakładu.",
                    "en" => "Maintaining confidentiality of information regarding minors and matters of the facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $funkcjonariusz_sluzby_ochrony_panstwa = [
            [
                "id" => 11588,
                "name" => json_encode([
                    "pl" => "Zapewnienie ochrony Prezydenta, Premiera, ministrów oraz innych osób objętych ochroną SOP.",
                    "en" => "Providing protection for the President, Prime Minister, ministers, and other individuals under the protection of the State Protection Service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11589,
                "name" => json_encode([
                    "pl" => "Bezpośrednia ochrona VIP-ów podczas oficjalnych wystąpień, wizyt, podróży oraz innych publicznych wystąpień.",
                    "en" => "Direct protection of VIPs during official appearances, visits, travels, and other public events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11590,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie rozpoznania i zabezpieczenia tras przejazdu oraz miejsc pobytu osób ochranianych.",
                    "en" => "Conducting reconnaissance and securing routes of travel and locations of protected individuals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11591,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa w hotelach, miejscach spotkań oraz innych lokalizacjach odwiedzanych przez osoby ochraniane.",
                    "en" => "Ensuring security in hotels, meeting places, and other locations visited by protected individuals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11592,
                "name" => json_encode([
                    "pl" => "Tworzenie planów ochronnych, w tym analizowanie zagrożeń i planowanie działań prewencyjnych.",
                    "en" => "Creating protection plans, including analyzing threats and planning preventive actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11593,
                "name" => json_encode([
                    "pl" => "Koordynacja działań ochronnych z innymi służbami, takimi jak policja, straż pożarna oraz jednostki ratownicze.",
                    "en" => "Coordinating protective actions with other services, such as police, fire brigade, and rescue units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11594,
                "name" => json_encode([
                    "pl" => "Szybka interwencja w przypadku zagrożenia życia lub zdrowia osób ochranianych, np. ataków, zamachów czy prób porwań.",
                    "en" => "Rapid intervention in case of threats to the life or health of protected individuals, e.g. attacks, assassination attempts, or kidnapping attempts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11595,
                "name" => json_encode([
                    "pl" => "Ochrona VIP-ów w sytuacjach kryzysowych oraz wdrażanie procedur awaryjnych, takich jak ewakuacja.",
                    "en" => "Protecting VIPs in crisis situations and implementing emergency procedures, such as evacuation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11596,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa budynków rządowych, takich jak Kancelaria Prezydenta, Kancelaria Premiera, Sejm, Senat oraz innych obiektów administracji państwowej.",
                    "en" => "Ensuring the security of government buildings such as the Office of the President, the Office of the Prime Minister, the Sejm, the Senate, and other public administration facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11597,
                "name" => json_encode([
                    "pl" => "Monitorowanie obiektów i reagowanie na wszelkie zagrożenia, które mogą pojawić się na terenie chronionych budynków.",
                    "en" => "Monitoring facilities and responding to any threats that may arise on the premises of protected buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11598,
                "name" => json_encode([
                    "pl" => "Kontrola osób wchodzących i wychodzących z obiektów państwowych, sprawdzanie tożsamości oraz uprawnień do przebywania w danym miejscu.",
                    "en" => "Controlling individuals entering and exiting state facilities, checking identities and permissions to be in that location."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11599,
                "name" => json_encode([
                    "pl" => "Zabezpieczanie dostępu do stref chronionych poprzez systemy kontroli dostępu i nadzór nad monitoringiem.",
                    "en" => "Securing access to protected zones through access control systems and monitoring oversight."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11600,
                "name" => json_encode([
                    "pl" => "Obsługa systemów monitoringu wizyjnego, alarmów oraz innych systemów zabezpieczeń technicznych w obiektach państwowych.",
                    "en" => "Operating video monitoring systems, alarms, and other technical security systems in state facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11601,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie regularnych patroli i sprawdzanie stanu zabezpieczeń w obiektach chronionych.",
                    "en" => "Conducting regular patrols and checking the security status of protected facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11602,
                "name" => json_encode([
                    "pl" => "Ochrona imprez i wydarzeń o charakterze państwowym, takich jak obchody rocznic, spotkania dyplomatyczne, wizyty zagraniczne.",
                    "en" => "Protecting state events and occasions, such as anniversary celebrations, diplomatic meetings, and foreign visits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11603,
                "name" => json_encode([
                    "pl" => "Koordynacja działań ochronnych z innymi jednostkami i zapewnienie bezpieczeństwa uczestnikom oraz osobom publicznym.",
                    "en" => "Coordinating protective actions with other units and ensuring the safety of participants and public figures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11604,
                "name" => json_encode([
                    "pl" => "Wykrywanie potencjalnych zagrożeń terrorystycznych i podejmowanie działań zapobiegawczych.",
                    "en" => "Detecting potential terrorist threats and taking preventive actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11605,
                "name" => json_encode([
                    "pl" => "Współpraca z wywiadem, kontrwywiadem oraz innymi służbami w celu przeciwdziałania atakom terrorystycznym.",
                    "en" => "Cooperating with intelligence, counterintelligence, and other services to counteract terrorist attacks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11606,
                "name" => json_encode([
                    "pl" => "Gromadzenie i analiza informacji dotyczących potencjalnych zagrożeń, w tym monitorowanie grup ekstremistycznych i osób mogących stanowić zagrożenie.",
                    "en" => "Gathering and analyzing information about potential threats, including monitoring extremist groups and individuals who may pose a threat."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11607,
                "name" => json_encode([
                    "pl" => "Ocena ryzyka i tworzenie analiz, które wspierają działania ochronne i prewencyjne.",
                    "en" => "Risk assessment and creating analyses that support protective and preventive actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11608,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z odpowiednikami SOP w innych krajach podczas wizyt zagranicznych VIP-ów.",
                    "en" => "Coordinating actions with counterparts from the State Protection Service in other countries during foreign visits of VIPs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11609,
                "name" => json_encode([
                    "pl" => "Wymiana informacji i najlepszych praktyk z międzynarodowymi służbami ochrony.",
                    "en" => "Exchanging information and best practices with international protection services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11610,
                "name" => json_encode([
                    "pl" => "Planowanie tras przejazdu i zabezpieczanie pojazdów transportujących VIP-ów.",
                    "en" => "Planning routes and securing vehicles transporting VIPs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11611,
                "name" => json_encode([
                    "pl" => "Utrzymywanie bezpieczeństwa podczas transportu drogowego, lotniczego i morskiego, w tym obsługa pojazdów specjalnych.",
                    "en" => "Ensuring safety during road, air, and maritime transport, including operating special vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11612,
                "name" => json_encode([
                    "pl" => "Regularne podnoszenie kwalifikacji poprzez szkolenia z zakresu taktyki ochrony, pierwszej pomocy, ewakuacji, technik strzeleckich i fizycznych.",
                    "en" => "Regularly improving qualifications through training in protective tactics, first aid, evacuation, shooting techniques, and physical fitness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11613,
                "name" => json_encode([
                    "pl" => "Udział w ćwiczeniach symulujących sytuacje zagrożenia, w celu doskonalenia umiejętności reagowania i pracy zespołowej.",
                    "en" => "Participating in exercises simulating threat situations to improve response skills and teamwork."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11614,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur dotyczących bezpieczeństwa informacji, w tym ochrona informacji poufnych związanych z osobami chronionymi oraz planami ochrony.",
                    "en" => "Adhering to information security procedures, including protecting confidential information related to protected individuals and security plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11615,
                "name" => json_encode([
                    "pl" => "Udział w zabezpieczaniu komunikacji i dokumentów, aby uniemożliwić ich dostęp osobom nieuprawnionym.",
                    "en" => "Participating in securing communication and documents to prevent unauthorized access."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11616,
                "name" => json_encode([
                    "pl" => "Obsługa i konserwacja zaawansowanego sprzętu ochronnego, np. systemów monitoringu, skanerów, urządzeń detekcji materiałów niebezpiecznych.",
                    "en" => "Operating and maintaining advanced protective equipment, such as monitoring systems, scanners, and hazardous materials detection devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11617,
                "name" => json_encode([
                    "pl" => "Monitorowanie najnowszych technologii w zakresie bezpieczeństwa i wdrażanie ich w działaniach SOP.",
                    "en" => "Monitoring the latest technologies in security and implementing them in the actions of the State Protection Service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11618,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami ds. cyberbezpieczeństwa w celu ochrony przed cyberatakami, które mogą zagrozić osobom lub obiektom objętym ochroną.",
                    "en" => "Collaborating with cybersecurity teams to protect against cyberattacks that may threaten protected individuals or facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11619,
                "name" => json_encode([
                    "pl" => "Przeciwdziałanie atakom hakerskim oraz ochrona danych cyfrowych VIP-ów i ich komunikacji.",
                    "en" => "Countering hacking attacks and protecting the digital data of VIPs and their communications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11620,
                "name" => json_encode([
                    "pl" => "Zapewnienie ochrony świadkom w procesach sądowych lub osobom, które mogłyby być narażone na niebezpieczeństwo w związku z posiadaną wiedzą.",
                    "en" => "Providing protection for witnesses in court proceedings or individuals who may be at risk due to their knowledge."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11621,
                "name" => json_encode([
                    "pl" => "Planowanie i przeprowadzanie działań ochronnych dla osób zagrożonych represjami lub atakami.",
                    "en" => "Planning and conducting protective actions for individuals threatened by repression or attacks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11622,
                "name" => json_encode([
                    "pl" => "Zachowanie dyskrecji w pracy z VIP-ami oraz poufność informacji związanych z planami ochrony i działaniami SOP.",
                    "en" => "Maintaining discretion while working with VIPs and confidentiality of information related to protection plans and SOP actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11623,
                "name" => json_encode([
                    "pl" => "Przestrzeganie najwyższych standardów etycznych i zawodowych, dbanie o profesjonalizm w kontaktach z osobami chronionymi.",
                    "en" => "Adhering to the highest ethical and professional standards, ensuring professionalism in contacts with protected individuals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11624,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów po zakończonych operacjach ochronnych i analizowanie działań pod kątem ich skuteczności.",
                    "en" => "Preparing reports after protective operations and analyzing actions for their effectiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11625,
                "name" => json_encode([
                    "pl" => "Identyfikowanie obszarów wymagających poprawy i wdrażanie usprawnień w działaniach SOP.",
                    "en" => "Identifying areas for improvement and implementing enhancements in the actions of the SOP."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11626,
                "name" => json_encode([
                    "pl" => "Udział w działaniach związanych z zapobieganiem sytuacjom, które mogą zagrażać bezpieczeństwu państwa.",
                    "en" => "Participating in activities aimed at preventing situations that may threaten national security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11627,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi służbami i organami bezpieczeństwa w sytuacjach kryzysowych o znaczeniu państwowym.",
                    "en" => "Cooperating with other services and security agencies in state-significant crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11628,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa zasobom strategicznym, takim jak dokumentacja rządowa, archiwa państwowe i inne zasoby kluczowe dla funkcjonowania państwa.",
                    "en" => "Ensuring the security of strategic resources, such as government documentation, state archives, and other resources vital for the functioning of the state."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11629,
                "name" => json_encode([
                    "pl" => "Przeciwdziałanie próbom dostępu osób nieuprawnionych do zasobów strategicznych.",
                    "en" => "Counteracting attempts by unauthorized individuals to access strategic resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11630,
                "name" => json_encode([
                    "pl" => "Planowanie i realizacja działań ewakuacyjnych dla VIP-ów i kluczowych obiektów w przypadku zagrożenia, np. ataków terrorystycznych, zamachów.",
                    "en" => "Planning and implementing evacuation actions for VIPs and key facilities in case of threat, e.g. terrorist attacks, assassination attempts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11631,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpiecznej ewakuacji oraz wdrażanie procedur minimalizujących ryzyko dla życia osób chronionych.",
                    "en" => "Ensuring safe evacuation and implementing procedures to minimize risks to the lives of protected individuals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11632,
                "name" => json_encode([
                    "pl" => "Regularny trening fizyczny i psychologiczny, aby utrzymać kondycję i gotowość do szybkiego reagowania.",
                    "en" => "Regular physical and psychological training to maintain fitness and readiness for rapid response."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11633,
                "name" => json_encode([
                    "pl" => "Dbanie o odporność na stres oraz umiejętność działania w sytuacjach kryzysowych.",
                    "en" => "Caring for stress resilience and the ability to act in crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $straznik_gminny_miejski = [
            [
                "id" => 11634,
                "name" => json_encode([
                    "pl" => "Monitorowanie i egzekwowanie przestrzegania przepisów prawa miejscowego, w tym uchwał rady miasta dotyczących porządku publicznego.",
                    "en" => "Monitoring and enforcing compliance with local laws, including city council resolutions regarding public order."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11635,
                "name" => json_encode([
                    "pl" => "Reagowanie na przypadki łamania przepisów dotyczących estetyki miasta, ochrony środowiska, zakazu spożywania alkoholu w miejscach publicznych oraz innych lokalnych regulacji.",
                    "en" => "Responding to cases of violations of regulations concerning the aesthetics of the city, environmental protection, prohibition of alcohol consumption in public places, and other local regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11636,
                "name" => json_encode([
                    "pl" => "Patrolowanie ulic, parków, placów i innych przestrzeni miejskich w celu zapewnienia porządku publicznego i bezpieczeństwa.",
                    "en" => "Patrolling streets, parks, squares, and other urban spaces to ensure public order and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11637,
                "name" => json_encode([
                    "pl" => "Interwencja w sytuacjach zakłócania porządku, takich jak bójki, awantury, akty wandalizmu i zakłócenie ciszy nocnej.",
                    "en" => "Intervening in situations disturbing the peace, such as fights, quarrels, acts of vandalism, and violations of nighttime quiet."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11638,
                "name" => json_encode([
                    "pl" => "Współpraca z policją, strażą pożarną, służbami ratunkowymi oraz innymi służbami w sytuacjach wymagających zintegrowanego działania.",
                    "en" => "Cooperating with the police, fire brigade, emergency services, and other agencies in situations requiring integrated action."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11639,
                "name" => json_encode([
                    "pl" => "Wymiana informacji dotyczących zagrożeń i przestępstw oraz pomoc w działaniach operacyjnych.",
                    "en" => "Exchanging information on threats and crimes and assisting in operational activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11640,
                "name" => json_encode([
                    "pl" => "Kontrola parkowania i ruchu drogowego, szczególnie w miejscach objętych zakazem parkowania oraz strefach ograniczonego ruchu.",
                    "en" => "Controlling parking and traffic flow, especially in no-parking zones and restricted access areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11641,
                "name" => json_encode([
                    "pl" => "Nakładanie mandatów za nieprawidłowe parkowanie, w tym parkowanie na chodnikach, drogach rowerowych i miejscach dla osób niepełnosprawnych.",
                    "en" => "Issuing fines for improper parking, including parking on sidewalks, bike paths, and designated spaces for people with disabilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11642,
                "name" => json_encode([
                    "pl" => "Monitorowanie miejsc publicznych w celu zapobiegania aktom wandalizmu, takim jak niszczenie ławek, przystanków autobusowych, murali oraz innych elementów infrastruktury miejskiej.",
                    "en" => "Monitoring public places to prevent acts of vandalism, such as damaging benches, bus stops, murals, and other elements of urban infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11643,
                "name" => json_encode([
                    "pl" => "Interwencja oraz zgłaszanie przypadków niszczenia mienia miejskiego do odpowiednich służb.",
                    "en" => "Intervening and reporting cases of destruction of municipal property to the appropriate authorities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11644,
                "name" => json_encode([
                    "pl" => "Dbanie o czystość i estetykę miasta, w tym reagowanie na nielegalne wysypywanie śmieci, graffiti, nieporządek wokół pojemników na odpady.",
                    "en" => "Caring for the cleanliness and aesthetics of the city, including responding to illegal dumping, graffiti, and disorder around waste containers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11645,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli dotyczących segregacji odpadów oraz przestrzegania przepisów sanitarnych.",
                    "en" => "Conducting inspections regarding waste segregation and compliance with sanitary regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11646,
                "name" => json_encode([
                    "pl" => "Prowadzenie działań edukacyjnych w szkołach i społecznościach lokalnych na temat przepisów miejskich, ochrony środowiska oraz zasad porządku publicznego.",
                    "en" => "Conducting educational activities in schools and local communities on municipal regulations, environmental protection, and public order principles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11647,
                "name" => json_encode([
                    "pl" => "Organizowanie kampanii informacyjnych dotyczących bezpieczeństwa, np. zasad segregacji odpadów, bezpieczeństwa na drogach i ochrony przyrody.",
                    "en" => "Organizing informational campaigns regarding safety, such as waste segregation rules, road safety, and environmental protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11648,
                "name" => json_encode([
                    "pl" => "Przyjmowanie zgłoszeń od mieszkańców dotyczących naruszeń porządku publicznego, zagrożeń, nieprawidłowości oraz łamania przepisów.",
                    "en" => "Receiving reports from residents regarding public order violations, threats, irregularities, and law violations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11649,
                "name" => json_encode([
                    "pl" => "Podejmowanie interwencji na podstawie zgłoszeń i informowanie zgłaszających o podjętych działaniach.",
                    "en" => "Taking action based on reports and informing reporters about the actions taken."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11650,
                "name" => json_encode([
                    "pl" => "Zapobieganie niszczeniu terenów zielonych, w tym parków, skwerów, drzew oraz innych elementów zieleni miejskiej.",
                    "en" => "Preventing the destruction of green areas, including parks, squares, trees, and other urban greenery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11651,
                "name" => json_encode([
                    "pl" => "Kontrola przestrzegania zakazów wjazdu pojazdów na tereny zielone oraz reagowanie na przypadki nielegalnego wycinania drzew.",
                    "en" => "Monitoring compliance with vehicle entry bans in green areas and responding to cases of illegal tree cutting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11652,
                "name" => json_encode([
                    "pl" => "Wspieranie organizacji i zabezpieczenie imprez masowych, takich jak koncerty, festiwale, wydarzenia sportowe.",
                    "en" => "Supporting organizations and securing mass events, such as concerts, festivals, and sporting events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11653,
                "name" => json_encode([
                    "pl" => "Zapewnienie porządku, kontrola ruchu i interwencje w razie zakłóceń podczas dużych zgromadzeń.",
                    "en" => "Ensuring order, controlling traffic, and intervening in case of disturbances during large gatherings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11654,
                "name" => json_encode([
                    "pl" => "Pomoc w sytuacjach związanych z bezdomnymi lub agresywnymi zwierzętami, np. psami błąkającymi się po ulicach.",
                    "en" => "Assisting in situations involving homeless or aggressive animals, e.g., stray dogs on the streets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11655,
                "name" => json_encode([
                    "pl" => "Współpraca z odpowiednimi organizacjami, schroniskami oraz służbami weterynaryjnymi w celu zapewnienia bezpieczeństwa zwierzętom i mieszkańcom.",
                    "en" => "Cooperating with relevant organizations, shelters, and veterinary services to ensure the safety of animals and residents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11656,
                "name" => json_encode([
                    "pl" => "Kontrola przestrzegania przepisów dotyczących handlu w miejscach publicznych, np. nielegalnego handlu ulicznego i handlu poza wyznaczonymi miejscami.",
                    "en" => "Monitoring compliance with regulations regarding trade in public places, e.g., illegal street trading and trading outside designated areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11657,
                "name" => json_encode([
                    "pl" => "Sprawdzanie uprawnień do handlu w miejscach publicznych oraz interwencje w przypadku naruszeń.",
                    "en" => "Checking permits for trading in public places and intervening in case of violations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11658,
                "name" => json_encode([
                    "pl" => "Zabezpieczanie miejsc wypadków, awarii technicznych oraz innych zdarzeń zagrażających bezpieczeństwu publicznemu do czasu przybycia odpowiednich służb.",
                    "en" => "Securing accident scenes, technical failures, and other events threatening public safety until the appropriate services arrive."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11659,
                "name" => json_encode([
                    "pl" => "Ostrzeganie mieszkańców oraz pomoc w kierowaniu ruchem w sytuacjach awaryjnych.",
                    "en" => "Warning residents and assisting in directing traffic in emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11660,
                "name" => json_encode([
                    "pl" => "Nakładanie mandatów za drobne wykroczenia, takie jak śmiecenie, spożywanie alkoholu w miejscach publicznych, niszczenie mienia oraz inne naruszenia przepisów.",
                    "en" => "Issuing fines for minor offenses, such as littering, consuming alcohol in public places, vandalism, and other violations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11661,
                "name" => json_encode([
                    "pl" => "Dokumentowanie i raportowanie wykroczeń oraz prowadzenie ewidencji wystawionych mandatów.",
                    "en" => "Documenting and reporting offenses and maintaining records of issued fines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11662,
                "name" => json_encode([
                    "pl" => "Kontrola placów zabaw, przystanków autobusowych, obiektów rekreacyjnych oraz innych miejsc użyteczności publicznej pod kątem ich bezpieczeństwa.",
                    "en" => "Inspecting playgrounds, bus stops, recreational facilities, and other public places for safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11663,
                "name" => json_encode([
                    "pl" => "Informowanie odpowiednich służb i instytucji o stwierdzonych nieprawidłowościach oraz podejmowanie działań w celu zapewnienia bezpieczeństwa.",
                    "en" => "Informing relevant services and institutions about identified irregularities and taking action to ensure safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11664,
                "name" => json_encode([
                    "pl" => "Udzielanie pomocy mieszkańcom w sytuacjach nagłych, takich jak udzielanie pierwszej pomocy przedmedycznej w nagłych przypadkach.",
                    "en" => "Assisting residents in emergencies, such as providing first aid in urgent situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11665,
                "name" => json_encode([
                    "pl" => "Informowanie służb ratunkowych o konieczności interwencji oraz współpraca podczas udzielania pomocy poszkodowanym.",
                    "en" => "Notifying emergency services of the need for intervention and cooperating during assistance to victims."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11666,
                "name" => json_encode([
                    "pl" => "Dbanie o bezpieczeństwo dzieci i młodzieży w okolicach szkół oraz placówek oświatowych, w tym kontrola przejść dla pieszych oraz zapobieganie aktom przemocy.",
                    "en" => "Ensuring the safety of children and youth in the vicinity of schools and educational institutions, including monitoring pedestrian crossings and preventing acts of violence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11667,
                "name" => json_encode([
                    "pl" => "Edukacja uczniów w zakresie bezpiecznego zachowania w przestrzeni publicznej i dbania o porządek.",
                    "en" => "Educating students on safe behavior in public spaces and maintaining order."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11668,
                "name" => json_encode([
                    "pl" => "Ochrona ważnych obiektów miejskich, takich jak ratusze, centra kultury, obiekty sportowe oraz inne budynki administracyjne.",
                    "en" => "Protecting important municipal facilities, such as town halls, cultural centers, sports facilities, and other administrative buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11669,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie patroli wokół obiektów miejskich oraz reagowanie na sytuacje zagrażające ich bezpieczeństwu.",
                    "en" => "Conducting patrols around municipal facilities and responding to situations threatening their safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11670,
                "name" => json_encode([
                    "pl" => "Organizowanie i udział w akcjach prewencyjnych, takich jak kampanie bezpieczeństwa ruchu drogowego, akcje antyalkoholowe, dni bez przemocy.",
                    "en" => "Organizing and participating in preventive actions, such as road safety campaigns, anti-alcohol initiatives, and days without violence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11671,
                "name" => json_encode([
                    "pl" => "Działania profilaktyczne mające na celu zapobieganie przestępczości i edukowanie mieszkańców o odpowiedzialnym zachowaniu w przestrzeni miejskiej.",
                    "en" => "Preventive actions aimed at preventing crime and educating residents about responsible behavior in urban space."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11672,
                "name" => json_encode([
                    "pl" => "Nadzór nad zbiórkami publicznymi, zgromadzeniami oraz akcjami charytatywnymi, aby zapewnić ich legalność i bezpieczeństwo.",
                    "en" => "Supervising public collections, gatherings, and charity events to ensure their legality and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11673,
                "name" => json_encode([
                    "pl" => "Kontrola legalności prowadzenia zbiórek oraz zapewnienie porządku w miejscach zbiórek publicznych.",
                    "en" => "Monitoring the legality of collections and ensuring order at public collection sites."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11674,
                "name" => json_encode([
                    "pl" => "Wykonywanie obowiązków w sposób uczciwy, bezstronny i zgodny z zasadami etyki zawodowej.",
                    "en" => "Performing duties in a fair, impartial manner and in accordance with professional ethics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11675,
                "name" => json_encode([
                    "pl" => "Zachowanie profesjonalizmu w kontaktach z mieszkańcami, dbanie o dobrą opinię o służbach miejskich i szanowanie godności każdego obywatela.",
                    "en" => "Maintaining professionalism in contacts with residents, ensuring a good reputation for municipal services, and respecting the dignity of every citizen."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11676,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach i kursach podnoszących wiedzę i umiejętności z zakresu porządku publicznego, pierwszej pomocy, ochrony środowiska oraz prawa lokalnego.",
                    "en" => "Participating in training and courses to enhance knowledge and skills in public order, first aid, environmental protection, and local law."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11677,
                "name" => json_encode([
                    "pl" => "Doskonalenie umiejętności interpersonalnych oraz zdolności reagowania w sytuacjach kryzysowych.",
                    "en" => "Improving interpersonal skills and the ability to respond in crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
        ];
        $straznik_strazy_marszalkowskiej = [
            [
                "id" => 11678,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa kompleksu budynków parlamentu, w tym głównych budynków Sejmu, Senatu oraz pomieszczeń przyległych.",
                    "en" => "Ensuring the safety of the parliamentary complex, including the main buildings of the Sejm, Senate, and adjacent rooms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11679,
                "name" => json_encode([
                    "pl" => "Monitorowanie dostępu do budynków, zabezpieczanie pomieszczeń oraz zapobieganie sytuacjom zagrażającym bezpieczeństwu.",
                    "en" => "Monitoring access to buildings, securing rooms, and preventing situations that threaten safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11680,
                "name" => json_encode([
                    "pl" => "Weryfikacja tożsamości osób wchodzących na teren parlamentu oraz sprawdzanie ich uprawnień do przebywania w danym miejscu.",
                    "en" => "Verifying the identity of individuals entering the parliament grounds and checking their authorization to be in the area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11681,
                "name" => json_encode([
                    "pl" => "Obsługa systemów kontroli dostępu, takich jak bramki elektroniczne, identyfikatory oraz karty dostępu.",
                    "en" => "Operating access control systems, such as electronic gates, badges, and access cards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11682,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa posłom, senatorom, członkom rządu oraz innym osobom przebywającym w budynkach parlamentarnych.",
                    "en" => "Ensuring the safety of deputies, senators, government members, and others present in the parliamentary buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11683,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje mogące zagrażać zdrowiu lub życiu osób przebywających w Sejmie i Senacie.",
                    "en" => "Responding to situations that may threaten the health or life of individuals in the Sejm and Senate."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11684,
                "name" => json_encode([
                    "pl" => "Utrzymanie porządku podczas posiedzeń Sejmu i Senatu oraz innych wydarzeń parlamentarnych, takich jak komisje, spotkania czy uroczystości.",
                    "en" => "Maintaining order during sessions of the Sejm and Senate, as well as other parliamentary events, such as committees, meetings, and ceremonies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11685,
                "name" => json_encode([
                    "pl" => "Szybka interwencja w przypadku zakłócenia porządku podczas obrad, np. przez osoby protestujące lub zachowujące się agresywnie.",
                    "en" => "Quick intervention in the event of disturbances during sessions, such as by protesting or aggressive individuals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11686,
                "name" => json_encode([
                    "pl" => "Natychmiastowa interwencja w sytuacjach kryzysowych, takich jak alarm bombowy, zagrożenie terrorystyczne czy akty przemocy.",
                    "en" => "Immediate intervention in crisis situations, such as bomb threats, terrorist threats, or acts of violence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11687,
                "name" => json_encode([
                    "pl" => "Ewakuacja osób z terenu parlamentu w sytuacjach zagrożenia oraz wdrażanie procedur awaryjnych.",
                    "en" => "Evacuating individuals from the parliamentary area in emergency situations and implementing emergency procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11688,
                "name" => json_encode([
                    "pl" => "Monitorowanie systemów bezpieczeństwa, w tym systemów monitoringu wizyjnego, alarmów oraz detektorów zagrożeń.",
                    "en" => "Monitoring security systems, including video surveillance, alarms, and threat detectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11689,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie regularnych kontroli systemów zabezpieczeń oraz natychmiastowe reagowanie na wszelkie sygnały alarmowe.",
                    "en" => "Conducting regular checks of security systems and responding immediately to any alarm signals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11690,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli osobistej oraz kontrola bagażu i przedmiotów wnoszonych na teren parlamentu.",
                    "en" => "Conducting personal searches and checking bags and items brought into the parliamentary grounds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11691,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie sprzętu detekcyjnego, takiego jak bramki magnetyczne, skanery rentgenowskie i detektory metalu w celu zapobiegania przemytowi niebezpiecznych przedmiotów.",
                    "en" => "Using detection equipment, such as magnetic gates, X-ray scanners, and metal detectors to prevent smuggling of dangerous items."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11692,
                "name" => json_encode([
                    "pl" => "Regularne patrolowanie korytarzy, sal oraz innych przestrzeni Sejmu i Senatu w celu zapewnienia porządku i bezpieczeństwa.",
                    "en" => "Regularly patrolling hallways, rooms, and other areas of the Sejm and Senate to ensure order and safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11693,
                "name" => json_encode([
                    "pl" => "Utrzymywanie stałej obecności w kluczowych punktach budynków oraz reagowanie na wszelkie nietypowe sytuacje.",
                    "en" => "Maintaining a constant presence in key points of the buildings and responding to any unusual situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11694,
                "name" => json_encode([
                    "pl" => "Współdziałanie z policją, służbami ratunkowymi, ochroną cywilną oraz innymi służbami w sytuacjach wymagających skoordynowanych działań.",
                    "en" => "Cooperating with police, emergency services, civil protection, and other services in situations requiring coordinated actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11695,
                "name" => json_encode([
                    "pl" => "Udział w spotkaniach i ćwiczeniach wspólnie z innymi jednostkami ochrony w celu doskonalenia procedur bezpieczeństwa.",
                    "en" => "Participating in meetings and exercises with other security units to improve safety procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11696,
                "name" => json_encode([
                    "pl" => "Ochrona wydarzeń specjalnych organizowanych na terenie parlamentu, takich jak wizyty zagranicznych delegacji, uroczystości państwowe oraz spotkania dyplomatyczne.",
                    "en" => "Protecting special events held at the parliament, such as visits from foreign delegations, state ceremonies, and diplomatic meetings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11697,
                "name" => json_encode([
                    "pl" => "Planowanie działań ochronnych i zabezpieczenie miejsc, gdzie odbywają się oficjalne wydarzenia.",
                    "en" => "Planning protective actions and securing locations where official events take place."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11698,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje zakłócające porządek publiczny, np. głośne zachowania, awantury czy nielegalne zgromadzenia.",
                    "en" => "Responding to situations that disrupt public order, such as loud behavior, fights, or illegal gatherings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11699,
                "name" => json_encode([
                    "pl" => "Dbanie o przestrzeganie regulaminu przez wszystkich przebywających w budynkach parlamentu, w tym pracowników, gości oraz parlamentarzystów.",
                    "en" => "Ensuring compliance with regulations by all individuals present in the parliamentary buildings, including staff, guests, and parliamentarians."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11700,
                "name" => json_encode([
                    "pl" => "Analiza zgłoszeń o potencjalnych zagrożeniach, takich jak podejrzane przedmioty, nietypowe zachowania osób przebywających na terenie parlamentu.",
                    "en" => "Analyzing reports of potential threats, such as suspicious items or unusual behavior of individuals present on the parliamentary grounds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11701,
                "name" => json_encode([
                    "pl" => "Sprawdzanie zgłoszeń oraz podejmowanie działań prewencyjnych mających na celu neutralizację zagrożeń.",
                    "en" => "Checking reports and taking preventive actions aimed at neutralizing threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11702,
                "name" => json_encode([
                    "pl" => "Regularny udział w szkoleniach z zakresu ochrony, procedur bezpieczeństwa, pierwszej pomocy, obsługi sprzętu oraz technik interwencyjnych.",
                    "en" => "Regularly participating in training on security, safety procedures, first aid, equipment operation, and intervention techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11703,
                "name" => json_encode([
                    "pl" => "Utrzymywanie wysokiej sprawności fizycznej oraz doskonalenie umiejętności niezbędnych do skutecznej ochrony osób i budynków parlamentarnych.",
                    "en" => "Maintaining high physical fitness and improving skills necessary for effective protection of individuals and parliamentary buildings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11704,
                "name" => json_encode([
                    "pl" => "Udzielanie pomocy przedmedycznej osobom potrzebującym na terenie parlamentu w sytuacjach nagłych.",
                    "en" => "Providing first aid to individuals in need on the parliamentary grounds in emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11705,
                "name" => json_encode([
                    "pl" => "Współpraca z personelem medycznym w przypadku poważniejszych sytuacji zdrowotnych wymagających interwencji.",
                    "en" => "Cooperating with medical staff in the case of more serious health situations requiring intervention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11706,
                "name" => json_encode([
                    "pl" => "Zapobieganie i przeciwdziałanie sytuacjom o charakterze terrorystycznym, w tym monitorowanie zachowań osób mogących stanowić zagrożenie.",
                    "en" => "Preventing and countering terrorist situations, including monitoring the behavior of individuals who may pose a threat."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11707,
                "name" => json_encode([
                    "pl" => "Współpraca z jednostkami antyterrorystycznymi w sytuacjach wymagających podjęcia specjalistycznych działań.",
                    "en" => "Cooperating with anti-terrorist units in situations requiring specialized actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11708,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa informacji oraz dokumentów niejawnych, które mogą znajdować się na terenie Sejmu i Senatu.",
                    "en" => "Ensuring the security of information and classified documents that may be located in the Sejm and Senate."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11709,
                "name" => json_encode([
                    "pl" => "Dbanie o ochronę pomieszczeń, w których przechowywane są poufne dokumenty, oraz kontrola dostępu do nich.",
                    "en" => "Ensuring the protection of rooms where confidential documents are stored and controlling access to them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11710,
                "name" => json_encode([
                    "pl" => "Bycie w stałej gotowości do działania w sytuacjach nadzwyczajnych, takich jak alarm bombowy, pożar czy zagrożenie zdrowia.",
                    "en" => "Being on standby to act in emergency situations, such as bomb threats, fires, or health hazards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11711,
                "name" => json_encode([
                    "pl" => "Realizowanie procedur ewakuacyjnych oraz zabezpieczenie miejsc, które mogą stanowić ryzyko dla osób przebywających na terenie parlamentu.",
                    "en" => "Implementing evacuation procedures and securing areas that may pose a risk to individuals present on the parliamentary grounds."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11712,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów po zakończeniu służby lub po zakończonych interwencjach dotyczących bezpieczeństwa i incydentów.",
                    "en" => "Preparing reports after the end of service or after completed security interventions and incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11713,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wszelkich sytuacji związanych z naruszeniem bezpieczeństwa, zakłóceniem porządku czy podejmowaniem działań ochronnych.",
                    "en" => "Documenting any situations related to security breaches, disturbances of order, or the implementation of protective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11714,
                "name" => json_encode([
                    "pl" => "Wykonywanie obowiązków zgodnie z zasadami etyki zawodowej oraz zachowanie poufności dotyczącej procedur bezpieczeństwa.",
                    "en" => "Performing duties in accordance with professional ethics and maintaining confidentiality regarding security procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11715,
                "name" => json_encode([
                    "pl" => "Dbanie o profesjonalizm w kontaktach z parlamentarzystami, pracownikami oraz gośćmi, przy jednoczesnym zachowaniu stanowczości i dyscypliny.",
                    "en" => "Ensuring professionalism in interactions with parliamentarians, staff, and guests, while maintaining firmness and discipline."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11716,
                "name" => json_encode([
                    "pl" => "Regularny udział w ćwiczeniach symulacyjnych dotyczących sytuacji kryzysowych, takich jak ewakuacja, alarm bombowy, atak terrorystyczny.",
                    "en" => "Regularly participating in simulation exercises regarding crisis situations, such as evacuations, bomb threats, and terrorist attacks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11717,
                "name" => json_encode([
                    "pl" => "Doskonalenie procedur reagowania w sytuacjach zagrożenia oraz rozwijanie umiejętności pracy zespołowej.",
                    "en" => "Improving response procedures in emergency situations and developing teamwork skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
        ];
        $funkcjonariusz_strazy_ochrony_kolei = [
            [
                "id" => 11718,
                "name" => json_encode([
                    "pl" => "Patrolowanie stacji, peronów, torowisk, budynków kolejowych, magazynów oraz innych obiektów związanych z infrastrukturą kolejową.",
                    "en" => "Patrolling stations, platforms, rail tracks, railway buildings, warehouses, and other facilities related to railway infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11719,
                "name" => json_encode([
                    "pl" => "Zapobieganie kradzieżom, aktom wandalizmu i innym działaniom przestępczym, które mogą zagrażać infrastrukturze kolejowej.",
                    "en" => "Preventing theft, vandalism, and other criminal activities that may threaten railway infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11720,
                "name" => json_encode([
                    "pl" => "Ochrona podróżnych i personelu kolejowego przed agresją, kradzieżami, napaściami oraz innymi zagrożeniami.",
                    "en" => "Protecting passengers and railway staff from aggression, theft, assaults, and other threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11721,
                "name" => json_encode([
                    "pl" => "Interwencje w przypadkach zakłócania porządku przez pasażerów, np. bójek, awantur czy zachowań agresywnych.",
                    "en" => "Intervening in cases of disorder caused by passengers, such as fights, disturbances, or aggressive behavior."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11722,
                "name" => json_encode([
                    "pl" => "Regularne patrolowanie obszarów kolejowych, w tym stacji, pociągów, przejazdów kolejowych oraz terenów wokół torów.",
                    "en" => "Regularly patrolling railway areas, including stations, trains, railway crossings, and surrounding areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11723,
                "name" => json_encode([
                    "pl" => "Monitorowanie sytuacji na terenie kolejowym i reagowanie na wszelkie nietypowe zdarzenia.",
                    "en" => "Monitoring the railway area and responding to any unusual incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11724,
                "name" => json_encode([
                    "pl" => "Pomoc w przeprowadzaniu kontroli biletowej w pociągach oraz egzekwowanie przestrzegania regulaminu przewozowego.",
                    "en" => "Assisting in conducting ticket checks on trains and enforcing compliance with transport regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11725,
                "name" => json_encode([
                    "pl" => "Współpraca z kontrolerami biletów i podejmowanie działań wobec osób bez biletu, które zakłócają porządek.",
                    "en" => "Cooperating with ticket inspectors and taking action against individuals without tickets who disrupt order."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11726,
                "name" => json_encode([
                    "pl" => "Zapobieganie nielegalnemu wejściu na teren kolejowy przez osoby postronne, w tym na torowiska oraz miejsca o ograniczonym dostępie.",
                    "en" => "Preventing unauthorized entry onto railway property by unauthorized persons, including tracks and restricted areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11727,
                "name" => json_encode([
                    "pl" => "Reagowanie na przypadki dewastacji infrastruktury kolejowej, takie jak malowanie graffiti, niszczenie tablic informacyjnych czy ław.",
                    "en" => "Responding to cases of vandalism of railway infrastructure, such as graffiti, destroying information boards, or benches."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11728,
                "name" => json_encode([
                    "pl" => "Zabezpieczanie transportów kolejowych przewożących materiały niebezpieczne, takie jak substancje chemiczne, paliwa, materiały wybuchowe.",
                    "en" => "Securing railway transports carrying hazardous materials, such as chemicals, fuels, and explosives."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11729,
                "name" => json_encode([
                    "pl" => "Zapewnienie dodatkowej ochrony pociągom przewożącym ładunki o szczególnym znaczeniu, np. transporty wojskowe.",
                    "en" => "Providing additional protection for trains carrying cargo of special significance, such as military transports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11730,
                "name" => json_encode([
                    "pl" => "Patrolowanie i nadzorowanie przejazdów kolejowych, szczególnie na obszarach o dużym ryzyku wystąpienia wypadków.",
                    "en" => "Patrolling and supervising railway crossings, especially in areas with a high risk of accidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11731,
                "name" => json_encode([
                    "pl" => "Egzekwowanie przepisów na przejazdach, zwłaszcza w przypadkach łamania zasad bezpieczeństwa przez kierowców.",
                    "en" => "Enforcing regulations at crossings, especially in cases of drivers violating safety rules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11732,
                "name" => json_encode([
                    "pl" => "Szybka interwencja w sytuacjach kryzysowych, takich jak wypadki kolejowe, wykolejenia, pożary, akty sabotażu oraz inne incydenty zagrażające bezpieczeństwu.",
                    "en" => "Quick intervention in crisis situations, such as train accidents, derailments, fires, sabotage acts, and other incidents threatening safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11733,
                "name" => json_encode([
                    "pl" => "Ewakuacja pasażerów z zagrożonych obszarów oraz współpraca z innymi służbami ratunkowymi w sytuacjach awaryjnych.",
                    "en" => "Evacuating passengers from threatened areas and cooperating with other emergency services in emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11734,
                "name" => json_encode([
                    "pl" => "Reagowanie na przypadki kradzieży bagażu, mienia podróżnych oraz przewożonego ładunku.",
                    "en" => "Responding to cases of luggage theft, passenger property, and transported cargo."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11735,
                "name" => json_encode([
                    "pl" => "Eliminowanie przypadków nielegalnego handlu na stacjach i peronach oraz współpraca z odpowiednimi organami ścigania.",
                    "en" => "Eliminating illegal trade on stations and platforms and cooperating with appropriate law enforcement agencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11736,
                "name" => json_encode([
                    "pl" => "Współdziałanie z policją, strażą pożarną, pogotowiem ratunkowym oraz innymi służbami w sytuacjach wymagających skoordynowanych działań.",
                    "en" => "Cooperating with police, fire brigade, emergency medical services, and other services in situations requiring coordinated actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11737,
                "name" => json_encode([
                    "pl" => "Wymiana informacji dotyczących przestępstw, zagrożeń i incydentów, które mogą wpływać na bezpieczeństwo na kolei.",
                    "en" => "Exchanging information about crimes, threats, and incidents that may affect safety on the railway."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11738,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli osobistych oraz kontroli bagażu, jeśli istnieje podejrzenie zagrożenia dla bezpieczeństwa.",
                    "en" => "Conducting personal checks and baggage checks if there is a suspicion of a security threat."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11739,
                "name" => json_encode([
                    "pl" => "Używanie specjalistycznego sprzętu do wykrywania materiałów niebezpiecznych i podejrzanych przedmiotów w przypadku sytuacji nadzwyczajnych.",
                    "en" => "Using specialized equipment to detect hazardous materials and suspicious items in emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11740,
                "name" => json_encode([
                    "pl" => "Monitorowanie systemów wizyjnych i alarmowych zainstalowanych na stacjach i innych obiektach kolejowych.",
                    "en" => "Monitoring the video surveillance and alarm systems installed at stations and other railway facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11741,
                "name" => json_encode([
                    "pl" => "Analiza zapisów z monitoringu w celu identyfikacji osób odpowiedzialnych za incydenty i zapobieganie przyszłym zagrożeniom.",
                    "en" => "Analyzing surveillance footage to identify individuals responsible for incidents and prevent future threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11742,
                "name" => json_encode([
                    "pl" => "Prowadzenie działań prewencyjnych i informacyjnych dla podróżnych dotyczących zasad bezpieczeństwa na kolei.",
                    "en" => "Conducting preventive and informational activities for travelers regarding railway safety rules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11743,
                "name" => json_encode([
                    "pl" => "Informowanie pasażerów o przepisach i zasadach obowiązujących na terenie kolejowym, takich jak bezpieczeństwo na peronach i przejazdach kolejowych.",
                    "en" => "Informing passengers about the regulations and rules in force in the railway area, such as safety on platforms and railway crossings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11744,
                "name" => json_encode([
                    "pl" => "Zapewnienie ochrony pasażerom przed przemocą, kradzieżami oraz innymi zagrożeniami ze strony osób trzecich.",
                    "en" => "Ensuring protection for passengers against violence, theft, and other threats from third parties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11745,
                "name" => json_encode([
                    "pl" => "Reagowanie na przypadki agresji, bójek i awantur na terenie stacji oraz w pociągach.",
                    "en" => "Responding to cases of aggression, fights, and disturbances at stations and on trains."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11746,
                "name" => json_encode([
                    "pl" => "Egzekwowanie przestrzegania zasad porządkowych, takich jak zakaz palenia, spożywania alkoholu oraz niszczenia mienia na terenie kolejowym.",
                    "en" => "Enforcing compliance with order rules, such as prohibiting smoking, consuming alcohol, and vandalizing property in the railway area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11747,
                "name" => json_encode([
                    "pl" => "Nakładanie mandatów i kar za łamanie regulaminu oraz dbanie o utrzymanie porządku na terenie stacji i dworców.",
                    "en" => "Issuing fines and penalties for violations of regulations and maintaining order in stations and depots."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11748,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji dotyczącej interwencji, przestępstw, wypadków oraz innych incydentów na terenie kolejowym.",
                    "en" => "Keeping documentation of interventions, crimes, accidents, and other incidents in the railway area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11749,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów z patroli i podejmowanych działań oraz przekazywanie informacji do odpowiednich jednostek zarządzających.",
                    "en" => "Preparing reports from patrols and actions taken and providing information to the relevant management units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11750,
                "name" => json_encode([
                    "pl" => "Sprawdzanie stanu technicznego ogrodzeń, bram, systemów alarmowych i innych zabezpieczeń na terenach kolejowych.",
                    "en" => "Checking the technical condition of fences, gates, alarm systems, and other security measures on railway properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11751,
                "name" => json_encode([
                    "pl" => "Informowanie odpowiednich służb technicznych o potrzebie napraw lub wzmocnienia zabezpieczeń.",
                    "en" => "Informing the appropriate technical services about the need for repairs or reinforcement of security measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11752,
                "name" => json_encode([
                    "pl" => "Zabezpieczanie imprez i wydarzeń specjalnych odbywających się na terenie dworców kolejowych oraz innych obiektów kolejowych.",
                    "en" => "Securing events and special occasions held at railway stations and other railway facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11753,
                "name" => json_encode([
                    "pl" => "Współpraca z organizatorami oraz koordynacja działań ochronnych i porządkowych w czasie wydarzeń.",
                    "en" => "Cooperating with organizers and coordinating protective and order activities during events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11754,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie szkoleń i spotkań informacyjnych z pracownikami kolei na temat procedur bezpieczeństwa i reagowania w sytuacjach kryzysowych.",
                    "en" => "Conducting training and informational meetings with railway employees regarding safety procedures and responding to emergencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11755,
                "name" => json_encode([
                    "pl" => "Wspieranie pracowników kolei w identyfikacji zagrożeń oraz w edukowaniu ich o sposobach radzenia sobie z nietypowymi sytuacjami.",
                    "en" => "Supporting railway employees in identifying threats and educating them on how to deal with unusual situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11756,
                "name" => json_encode([
                    "pl" => "Utrzymywanie odpowiedniej kondycji fizycznej i psychicznej, aby skutecznie reagować w sytuacjach wymagających szybkiego działania i interwencji.",
                    "en" => "Maintaining adequate physical and mental condition to effectively respond in situations requiring quick action and intervention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11757,
                "name" => json_encode([
                    "pl" => "Regularny udział w szkoleniach z zakresu technik samoobrony, interwencji oraz udzielania pierwszej pomocy.",
                    "en" => "Regular participation in training on self-defense techniques, intervention, and first aid."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11758,
                "name" => json_encode([
                    "pl" => "Reagowanie na przypadki zanieczyszczeń, wycieków substancji niebezpiecznych oraz innych sytuacji mogących stanowić zagrożenie środowiskowe.",
                    "en" => "Responding to cases of contamination, hazardous substance leaks, and other situations that may pose environmental threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11759,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie działań zabezpieczających i informowanie odpowiednich służb o konieczności likwidacji zagrożeń środowiskowych.",
                    "en" => "Conducting security actions and informing the relevant services about the need to eliminate environmental threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11760,
                "name" => json_encode([
                    "pl" => "Wykrywanie i przeciwdziałanie działaniom o charakterze sabotażowym oraz terrorystycznym na terenach kolejowych.",
                    "en" => "Detecting and countering sabotage and terrorist activities on railway properties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11761,
                "name" => json_encode([
                    "pl" => "Współpraca z jednostkami antyterrorystycznymi i wywiadowczymi w sytuacjach zagrożenia.",
                    "en" => "Cooperating with counter-terrorism and intelligence units in situations of threat."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
        ];
        $szeregowi_zawodowi_sil_zbrojnych = [
            [
                "id" => 11762,
                "name" => json_encode([
                    "pl" => "Realizacja zadań zgodnie z wytycznymi dowódców, przestrzeganie procedur wojskowych oraz reagowanie na wydawane rozkazy.",
                    "en" => "Execution of tasks according to commanders' directives, adhering to military procedures, and responding to orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11763,
                "name" => json_encode([
                    "pl" => "Dbanie o dyscyplinę i dokładne wykonanie powierzonych obowiązków.",
                    "en" => "Maintaining discipline and accurately performing assigned duties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11764,
                "name" => json_encode([
                    "pl" => "Przygotowanie do natychmiastowego przystąpienia do działań bojowych, reagowania na sytuacje kryzysowe i udziału w operacjach wojskowych.",
                    "en" => "Preparation for immediate combat actions, responding to crisis situations, and participating in military operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11765,
                "name" => json_encode([
                    "pl" => "Utrzymywanie stanu gotowości do działania w sytuacjach alarmowych.",
                    "en" => "Maintaining readiness to act in emergency situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11766,
                "name" => json_encode([
                    "pl" => "Regularne podnoszenie kwalifikacji poprzez udział w ćwiczeniach poligonowych, treningach taktycznych i zajęciach strzeleckich.",
                    "en" => "Regularly improving qualifications by participating in field exercises, tactical training, and shooting drills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11767,
                "name" => json_encode([
                    "pl" => "Udział w ćwiczeniach związanych z obsługą sprzętu bojowego oraz doskonalenie umiejętności bojowych.",
                    "en" => "Participating in exercises related to operating combat equipment and improving combat skills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11768,
                "name" => json_encode([
                    "pl" => "Dbanie o powierzone uzbrojenie i wyposażenie, jego czyszczenie, konserwacja oraz zgłaszanie wszelkich usterek.",
                    "en" => "Taking care of assigned weapons and equipment, cleaning, maintaining them, and reporting any defects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11769,
                "name" => json_encode([
                    "pl" => "Nabywanie umiejętności obsługi różnych typów broni i sprzętu bojowego stosowanego w jednostce.",
                    "en" => "Acquiring skills to operate various types of weapons and combat equipment used in the unit."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11770,
                "name" => json_encode([
                    "pl" => "Przestrzeganie regulaminu wojskowego, dbanie o porządek w miejscu służby, kwaterach oraz na terenie jednostki.",
                    "en" => "Adhering to military regulations, maintaining order in the place of service, quarters, and on the unit's premises."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11771,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi żołnierzami w zakresie utrzymania dyscypliny i porządku na terenie koszar.",
                    "en" => "Cooperating with other soldiers to maintain discipline and order in the barracks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11772,
                "name" => json_encode([
                    "pl" => "Realizacja zadań związanych z ochroną obiektów wojskowych, np. pełnienie służby wartowniczej, patrolowanie terenów jednostki lub obozu.",
                    "en" => "Executing tasks related to the protection of military facilities, such as serving as a guard, patrolling unit or camp areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11773,
                "name" => json_encode([
                    "pl" => "Ochrona mienia wojskowego oraz zabezpieczanie obiektów wojskowych przed zagrożeniami.",
                    "en" => "Protecting military property and securing military facilities against threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11774,
                "name" => json_encode([
                    "pl" => "Przygotowanie do udziału w misjach pokojowych, stabilizacyjnych oraz innych operacjach międzynarodowych, zgodnie z rozkazem.",
                    "en" => "Preparing to participate in peacekeeping, stabilization, and other international operations, according to orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11775,
                "name" => json_encode([
                    "pl" => "Adaptacja do pracy w różnych warunkach klimatycznych i kulturowych oraz współpraca z żołnierzami z innych krajów.",
                    "en" => "Adapting to work in different climatic and cultural conditions and cooperating with soldiers from other countries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11776,
                "name" => json_encode([
                    "pl" => "Wsparcie cywilów w sytuacjach kryzysowych, np. w czasie klęsk żywiołowych, katastrof i innych sytuacjach wymagających działań ratunkowych.",
                    "en" => "Supporting civilians in crisis situations, such as natural disasters, catastrophes, and other situations requiring rescue operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11777,
                "name" => json_encode([
                    "pl" => "Udzielanie pomocy podczas ewakuacji, zabezpieczania miejsc zagrożonych i wspierania służb ratowniczych.",
                    "en" => "Providing assistance during evacuations, securing endangered areas, and supporting rescue services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11778,
                "name" => json_encode([
                    "pl" => "Obserwacja i monitorowanie terenu w celu identyfikacji potencjalnych zagrożeń oraz raportowanie zauważonych nieprawidłowości.",
                    "en" => "Observing and monitoring the area to identify potential threats and reporting any irregularities observed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11779,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w rozpoznaniu przeciwnika oraz zbieranie informacji o sytuacji na polu walki.",
                    "en" => "Participating in enemy reconnaissance and gathering information about the situation on the battlefield."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11780,
                "name" => json_encode([
                    "pl" => "Stosowanie się do zasad BHP w trakcie służby, ćwiczeń oraz pracy z uzbrojeniem i sprzętem wojskowym.",
                    "en" => "Adhering to health and safety rules during service, exercises, and working with weapons and military equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11781,
                "name" => json_encode([
                    "pl" => "Dbanie o swoje bezpieczeństwo i bezpieczeństwo innych żołnierzy podczas wykonywania zadań.",
                    "en" => "Taking care of your safety and the safety of other soldiers while performing tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11782,
                "name" => json_encode([
                    "pl" => "Regularny trening fizyczny, aby spełniać wymagania kondycyjne i być gotowym do pełnienia obowiązków bojowych.",
                    "en" => "Regular physical training to meet conditioning requirements and be ready to fulfill combat duties."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11783,
                "name" => json_encode([
                    "pl" => "Udział w zajęciach fizycznych organizowanych przez jednostkę, takich jak biegi, ćwiczenia sprawnościowe, marsze.",
                    "en" => "Participating in physical activities organized by the unit, such as runs, fitness exercises, and marches."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11784,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad higieny osobistej, dbanie o zdrowie, aby utrzymać pełną gotowość do służby.",
                    "en" => "Adhering to personal hygiene rules, taking care of health to maintain full readiness for service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11785,
                "name" => json_encode([
                    "pl" => "Regularne badania lekarskie i przestrzeganie zasad sanitarno-higienicznych, zwłaszcza podczas misji lub działań polowych.",
                    "en" => "Regular medical examinations and adherence to sanitary and hygienic rules, especially during missions or field activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11786,
                "name" => json_encode([
                    "pl" => "Wznoszenie umocnień polowych, okopów, zabezpieczeń oraz przygotowywanie pozycji obronnych.",
                    "en" => "Building field fortifications, trenches, and securing positions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11787,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w budowie i utrzymaniu infrastruktury obozowej, takich jak obozowiska, linie zaopatrzenia i inne instalacje.",
                    "en" => "Participating in the construction and maintenance of camp infrastructure, such as campsites, supply lines, and other facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11788,
                "name" => json_encode([
                    "pl" => "Informowanie przełożonych o wszelkich zauważonych problemach, zagrożeniach oraz nieprawidłowościach w działaniu sprzętu lub sytuacjach.",
                    "en" => "Informing superiors about any observed problems, threats, and irregularities in equipment operation or situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11789,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad meldunkowych i terminowe raportowanie informacji o sytuacji operacyjnej.",
                    "en" => "Adhering to reporting rules and timely reporting of information about the operational situation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11790,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach zawodowych, które umożliwiają zdobycie specjalistycznych umiejętności, np. z zakresu łączności, medycyny pola walki, obsługi sprzętu.",
                    "en" => "Participating in professional training that enables acquiring specialized skills, such as in communications, battlefield medicine, and equipment operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11791,
                "name" => json_encode([
                    "pl" => "Rozwój kompetencji zawodowych i zdobywanie wiedzy na temat nowych technologii i procedur wojskowych.",
                    "en" => "Developing professional competencies and acquiring knowledge about new military technologies and procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11792,
                "name" => json_encode([
                    "pl" => "Posiadanie umiejętności udzielania pierwszej pomocy oraz stosowanie podstawowych procedur ratowniczych w razie wypadków.",
                    "en" => "Having first aid skills and applying basic rescue procedures in case of accidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11793,
                "name" => json_encode([
                    "pl" => "Wsparcie medyków wojskowych podczas działań operacyjnych oraz pomoc w ewakuacji poszkodowanych.",
                    "en" => "Supporting military medics during operations and assisting in the evacuation of the injured."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11794,
                "name" => json_encode([
                    "pl" => "Pomoc w organizacji zaopatrzenia, transportu i logistyki na potrzeby działań bojowych i ćwiczeń.",
                    "en" => "Assisting in organizing supply, transport, and logistics for combat operations and exercises."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11795,
                "name" => json_encode([
                    "pl" => "Przenoszenie i transport sprzętu, żywności oraz materiałów potrzebnych do realizacji zadań w terenie.",
                    "en" => "Moving and transporting equipment, food, and materials needed to carry out tasks in the field."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11796,
                "name" => json_encode([
                    "pl" => "Utrzymywanie komunikacji radiowej i obsługa urządzeń łączności w celu sprawnego przekazywania rozkazów i meldunków.",
                    "en" => "Maintaining radio communication and operating communication devices to efficiently relay orders and reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11797,
                "name" => json_encode([
                    "pl" => "Dbaniem o sprzęt łącznościowy oraz zgłaszanie ewentualnych usterek.",
                    "en" => "Taking care of communication equipment and reporting any defects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11798,
                "name" => json_encode([
                    "pl" => "Zdobywanie i doskonalenie umiejętności taktycznych, takich jak przemieszczanie się w terenie, działania defensywne, ofensywne oraz zasady walki.",
                    "en" => "Acquiring and improving tactical skills, such as moving in terrain, defensive and offensive actions, and combat principles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11799,
                "name" => json_encode([
                    "pl" => "Szkolenie w zakresie zachowania na polu walki, maskowania, przemieszczania się w formacji oraz technik obronnych.",
                    "en" => "Training in battlefield behavior, camouflage, moving in formation, and defensive techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11800,
                "name" => json_encode([
                    "pl" => "Dbanie o honor i reputację jednostki oraz Sił Zbrojnych, zachowanie dyscypliny i lojalności wobec przełożonych i współpracowników.",
                    "en" => "Caring for the honor and reputation of the unit and the Armed Forces, maintaining discipline and loyalty to superiors and colleagues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11801,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad moralnych, etycznych oraz obowiązujących regulaminów wojskowych.",
                    "en" => "Adhering to moral, ethical standards and the applicable military regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11802,
                "name" => json_encode([
                    "pl" => "Gotowość do działania w różnych środowiskach i klimatach, takich jak pustynia, góry, lasy, obszary miejskie.",
                    "en" => "Readiness to operate in various environments and climates, such as deserts, mountains, forests, urban areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11803,
                "name" => json_encode([
                    "pl" => "Przystosowanie do pracy w trudnych warunkach, w tym ekstremalnych temperaturach, wilgotności oraz niebezpiecznym terenie.",
                    "en" => "Adaptability to work in challenging conditions, including extreme temperatures, humidity, and hazardous terrain."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11804,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad ochrony tajemnic wojskowych i bezpieczeństwa informacji.",
                    "en" => "Adhering to rules for the protection of military secrets and information security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11805,
                "name" => json_encode([
                    "pl" => "Dbanie o poufność danych operacyjnych i unikanie ujawniania informacji, które mogłyby zaszkodzić bezpieczeństwu jednostki.",
                    "en" => "Ensuring the confidentiality of operational data and avoiding disclosing information that could compromise the security of the unit."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $straznik_lesny = [
            [
                "id" => 11806,
                "name" => json_encode([
                    "pl" => "Patrolowanie terenów leśnych w celu zapobiegania kradzieżom drewna, nielegalnym wyrębom drzew oraz innym działaniom szkodzącym lasom.",
                    "en" => "Patrolling forest areas to prevent timber theft, illegal logging, and other actions harmful to forests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11807,
                "name" => json_encode([
                    "pl" => "Interwencje w przypadkach nielegalnej działalności, w tym wycinania drzew bez zezwolenia i zbierania roślin chronionych.",
                    "en" => "Intervening in cases of illegal activities, including cutting down trees without permission and collecting protected plants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11808,
                "name" => json_encode([
                    "pl" => "Monitorowanie lasów w celu zwalczania kłusownictwa i zapobieganie polowaniom bez zezwolenia.",
                    "en" => "Monitoring forests to combat poaching and prevent hunting without a permit."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11809,
                "name" => json_encode([
                    "pl" => "Kontrola pułapek, sideł oraz innych urządzeń kłusowniczych, usuwanie ich oraz zgłaszanie przypadków kłusownictwa odpowiednim służbom.",
                    "en" => "Inspecting traps, snares, and other poaching devices, removing them, and reporting poaching cases to the relevant authorities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11810,
                "name" => json_encode([
                    "pl" => "Zapewnienie przestrzegania przepisów prawa dotyczących ochrony przyrody, w tym przepisów o ochronie gatunków i siedlisk.",
                    "en" => "Ensuring compliance with laws regarding nature conservation, including species and habitat protection regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11811,
                "name" => json_encode([
                    "pl" => "Egzekwowanie zakazów dotyczących niszczenia roślinności, biotopów oraz zabijania chronionych zwierząt.",
                    "en" => "Enforcing bans on the destruction of vegetation, biotopes, and killing protected animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11812,
                "name" => json_encode([
                    "pl" => "Monitorowanie lasów pod kątem zagrożeń pożarowych oraz podejmowanie działań mających na celu zapobieganie pożarom.",
                    "en" => "Monitoring forests for fire hazards and taking actions to prevent fires."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11813,
                "name" => json_encode([
                    "pl" => "Informowanie o zagrożeniach pożarowych oraz przeprowadzanie prewencyjnych patroli przeciwpożarowych, zwłaszcza w okresach wysokiej suszy.",
                    "en" => "Informing about fire hazards and conducting preventive fire patrols, especially during high drought periods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11814,
                "name" => json_encode([
                    "pl" => "Udział w gaszeniu pożarów lasów oraz wspieranie służb ratunkowych w akcjach gaśniczych.",
                    "en" => "Participating in forest fire extinguishing and supporting emergency services in firefighting operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11815,
                "name" => json_encode([
                    "pl" => "Organizacja i koordynacja działań zabezpieczających przed rozprzestrzenieniem się ognia oraz ewakuacja osób i zwierząt z terenów zagrożonych.",
                    "en" => "Organizing and coordinating actions to prevent the spread of fire and evacuating people and animals from endangered areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11816,
                "name" => json_encode([
                    "pl" => "Regularne patrolowanie lasów, szlaków turystycznych i obszarów chronionych w celu monitorowania ich stanu oraz zapobiegania zagrożeniom.",
                    "en" => "Regularly patrolling forests, hiking trails, and protected areas to monitor their condition and prevent threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11817,
                "name" => json_encode([
                    "pl" => "Sprawdzanie szlaków i dróg leśnych pod kątem bezpieczeństwa, czystości oraz dostępności.",
                    "en" => "Checking forest paths and roads for safety, cleanliness, and accessibility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11818,
                "name" => json_encode([
                    "pl" => "Dbanie o porządek na terenach leśnych, usuwanie śmieci oraz zapobieganie ich zaśmiecaniu przez turystów.",
                    "en" => "Maintaining order in forest areas, removing trash, and preventing littering by tourists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11819,
                "name" => json_encode([
                    "pl" => "Organizowanie akcji sprzątania lasów oraz zachęcanie społeczeństwa do dbania o czystość przyrody.",
                    "en" => "Organizing forest cleaning campaigns and encouraging the public to care for nature's cleanliness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11820,
                "name" => json_encode([
                    "pl" => "Kontrolowanie wjazdów do lasu oraz egzekwowanie zakazu poruszania się pojazdami mechanicznymi po terenach leśnych bez odpowiednich zezwoleń.",
                    "en" => "Controlling forest entries and enforcing the ban on motor vehicle movement in forest areas without proper permits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11821,
                "name" => json_encode([
                    "pl" => "Nakładanie mandatów za nielegalny wjazd i użytkowanie pojazdów w miejscach, gdzie jest to zabronione.",
                    "en" => "Issuing fines for illegal entry and use of vehicles in prohibited areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11822,
                "name" => json_encode([
                    "pl" => "Prowadzenie działań edukacyjnych mających na celu zwiększenie świadomości ekologicznej wśród turystów, mieszkańców i dzieci.",
                    "en" => "Conducting educational activities aimed at raising environmental awareness among tourists, residents, and children."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11823,
                "name" => json_encode([
                    "pl" => "Informowanie o zasadach korzystania z lasu, ochrony przyrody oraz bezpiecznego zachowania na terenach leśnych.",
                    "en" => "Informing about the rules for using the forest, nature conservation, and safe behavior in forest areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11824,
                "name" => json_encode([
                    "pl" => "Usuwanie przeszkód z dróg i szlaków, takich jak powalone drzewa, gałęzie, które mogą zagrażać bezpieczeństwu użytkowników.",
                    "en" => "Removing obstacles from roads and trails, such as fallen trees and branches that may pose a risk to users' safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11825,
                "name" => json_encode([
                    "pl" => "Sprawdzanie stanu oznakowania szlaków turystycznych oraz ułatwień, takich jak tablice informacyjne i kierunkowe.",
                    "en" => "Checking the condition of trail markers and facilities, such as informational and directional boards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11826,
                "name" => json_encode([
                    "pl" => "Dbanie o bezpieczeństwo rezerwatów przyrody, parków narodowych oraz innych obszarów chronionych przed nielegalną działalnością i zniszczeniami.",
                    "en" => "Ensuring the safety of nature reserves, national parks, and other protected areas from illegal activities and destruction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11827,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu chronionych gatunków i siedlisk oraz zgłaszanie zmian, które mogą zagrażać bioróżnorodności.",
                    "en" => "Monitoring the status of protected species and habitats and reporting changes that may threaten biodiversity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11828,
                "name" => json_encode([
                    "pl" => "Kontrola legalności i zgodności z planem prac leśnych, takich jak wycinki, zalesienia, pielęgnacja drzewostanu i ochrona przed szkodnikami.",
                    "en" => "Checking the legality and compliance of forest work plans, such as logging, afforestation, forest maintenance, and pest control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11829,
                "name" => json_encode([
                    "pl" => "Sprawdzanie, czy prace leśne są prowadzone zgodnie z przepisami ochrony środowiska i czy nie zagrażają ekosystemowi.",
                    "en" => "Checking if forestry works are conducted in accordance with environmental protection regulations and whether they threaten the ecosystem."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11830,
                "name" => json_encode([
                    "pl" => "Monitorowanie terenów leśnych pod kątem zanieczyszczeń, nielegalnych wysypisk śmieci oraz działań mogących wpłynąć na zanieczyszczenie wód, gleby lub powietrza.",
                    "en" => "Monitoring forest areas for pollution, illegal dumps, and activities that may affect the contamination of water, soil, or air."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11831,
                "name" => json_encode([
                    "pl" => "Zgłaszanie przypadków zanieczyszczeń i organizowanie działań mających na celu ich usunięcie.",
                    "en" => "Reporting cases of pollution and organizing actions to remove them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11832,
                "name" => json_encode([
                    "pl" => "Udzielanie pierwszej pomocy w nagłych wypadkach turystom i osobom przebywającym w lesie, np. w razie urazów czy zagubienia się.",
                    "en" => "Providing first aid in emergencies to tourists and individuals in the forest, e.g., in case of injuries or getting lost."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11833,
                "name" => json_encode([
                    "pl" => "Pomoc w ewakuacji osób z terenów trudno dostępnych oraz współpraca ze służbami ratunkowymi.",
                    "en" => "Assisting in the evacuation of individuals from hard-to-reach areas and cooperating with rescue services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11834,
                "name" => json_encode([
                    "pl" => "Podejmowanie interwencji w przypadkach łamania przepisów prawa na terenie lasów, takich jak nielegalne polowania, śmiecenie, niszczenie mienia.",
                    "en" => "Taking action in cases of violations of the law in forests, such as illegal hunting, littering, and property destruction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11835,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów i dokumentacja interwencji oraz współpraca z policją i innymi służbami w sprawach związanych z wykroczeniami.",
                    "en" => "Preparing reports and documenting interventions and cooperating with the police and other authorities on offenses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11836,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z innymi służbami ochrony środowiska, strażą pożarną, policją oraz organizacjami ekologicznymi.",
                    "en" => "Coordinating actions with other environmental protection services, fire brigades, police, and ecological organizations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11837,
                "name" => json_encode([
                    "pl" => "Udział w akcjach i programach ochrony środowiska na terenie lasów i obszarów przyrodniczo cennych.",
                    "en" => "Participating in environmental protection actions and programs in forests and areas of natural value."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11838,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów z przeprowadzonych patroli, interwencji, działań ochronnych i monitorujących na terenach leśnych.",
                    "en" => "Preparing reports on conducted patrols, interventions, protective, and monitoring actions in forest areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11839,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wszelkich nieprawidłowości, zagrożeń oraz wydarzeń, które mogą mieć wpływ na stan środowiska leśnego.",
                    "en" => "Documenting any irregularities, threats, and events that may impact the state of the forest environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11840,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu zdrowia drzewostanu, identyfikowanie przypadków chorób i szkodników.",
                    "en" => "Monitoring the health status of the forest, identifying cases of diseases and pests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11841,
                "name" => json_encode([
                    "pl" => "Współpraca z leśnikami w zakresie podejmowania działań ochronnych, takich jak opryski i wycinanie zarażonych drzew.",
                    "en" => "Cooperating with foresters to take protective actions, such as spraying and cutting infected trees."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11842,
                "name" => json_encode([
                    "pl" => "Ochrona rzek, jezior, źródeł i innych zasobów wodnych w lasach przed zanieczyszczeniami i nielegalnymi działaniami.",
                    "en" => "Protecting rivers, lakes, springs, and other water resources in forests from pollution and illegal activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11843,
                "name" => json_encode([
                    "pl" => "Kontrola przestrzegania przepisów dotyczących połowów, turystyki wodnej oraz korzystania z zasobów wodnych w lasach.",
                    "en" => "Monitoring compliance with regulations regarding fishing, water tourism, and the use of water resources in forests."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11844,
                "name" => json_encode([
                    "pl" => "Przygotowanie do działania w sytuacjach kryzysowych, takich jak pożary, powodzie, skażenia chemiczne.",
                    "en" => "Preparing to act in emergencies, such as fires, floods, or chemical contaminations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11845,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi służbami i jednostkami w razie konieczności przeprowadzenia akcji ratowniczej lub ochronnej.",
                    "en" => "Cooperating with other services and units when conducting rescue or protective actions is necessary."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11846,
                "name" => json_encode([
                    "pl" => "Dbanie o wizerunek służb leśnych i profesjonalne podejście do obowiązków, dbanie o relacje z lokalną społecznością i turystami.",
                    "en" => "Maintaining the image of forest services and a professional approach to duties, caring for relationships with the local community and tourists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11847,
                "name" => json_encode([
                    "pl" => "Zachowanie odpowiedzialności, uczciwości oraz poszanowania dla przyrody i zasobów leśnych.",
                    "en" => "Demonstrating responsibility, honesty, and respect for nature and forest resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
        ];
        $straznik_lowiecki = [
            [
                "id" => 11848,
                "name" => json_encode([
                    "pl" => "Zapewnienie ochrony gatunków łownych przed nielegalnym pozyskiwaniem, kłusownictwem i innymi zagrożeniami.",
                    "en" => "Ensuring the protection of game species from illegal harvesting, poaching, and other threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11849,
                "name" => json_encode([
                    "pl" => "Monitorowanie stanu populacji zwierząt łownych i informowanie odpowiednich służb o wszelkich zauważonych zagrożeniach dla zwierzyny.",
                    "en" => "Monitoring the population status of game animals and informing the relevant authorities of any observed threats to the game."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11850,
                "name" => json_encode([
                    "pl" => "Patrolowanie terenów łowieckich w celu wykrycia i zapobiegania przypadkom kłusownictwa.",
                    "en" => "Patrolling hunting areas to detect and prevent cases of poaching."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11851,
                "name" => json_encode([
                    "pl" => "Usuwanie nielegalnych urządzeń kłusowniczych, takich jak sidła, wnyki i pułapki, oraz zgłaszanie przypadków kłusownictwa do odpowiednich organów.",
                    "en" => "Removing illegal poaching devices, such as snares, traps, and nets, and reporting poaching cases to the appropriate authorities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11852,
                "name" => json_encode([
                    "pl" => "Egzekwowanie przepisów ustawy o ochronie zwierząt łownych, przepisów regulujących polowania i ochronę przyrody.",
                    "en" => "Enforcing the law on the protection of game animals and regulations governing hunting and nature conservation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11853,
                "name" => json_encode([
                    "pl" => "Nakładanie mandatów i stosowanie innych środków dyscyplinarnych wobec osób łamiących prawo łowieckie.",
                    "en" => "Issuing fines and applying other disciplinary measures against individuals violating hunting laws."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11854,
                "name" => json_encode([
                    "pl" => "Kontrola legalności polowań, w tym sprawdzanie zezwoleń i dokumentacji myśliwych oraz zgodności działań z przepisami prawa.",
                    "en" => "Monitoring the legality of hunts, including checking permits and hunters' documentation and ensuring compliance with legal regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11855,
                "name" => json_encode([
                    "pl" => "Obserwowanie przebiegu polowań, aby zapewnić, że są one prowadzone zgodnie z zasadami etyki łowieckiej i bez szkody dla środowiska.",
                    "en" => "Observing the course of hunts to ensure they are conducted according to hunting ethics and do not harm the environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11856,
                "name" => json_encode([
                    "pl" => "Reagowanie na wszelkie akty wandalizmu, niszczenie infrastruktury łowieckiej oraz nielegalną działalność na terenie obwodów łowieckich.",
                    "en" => "Responding to any acts of vandalism, destruction of hunting infrastructure, and illegal activities in hunting districts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11857,
                "name" => json_encode([
                    "pl" => "Dbanie o porządek na terenach łowieckich i zapobieganie nielegalnym działaniom.",
                    "en" => "Maintaining order in hunting areas and preventing illegal activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11858,
                "name" => json_encode([
                    "pl" => "Organizowanie działań edukacyjnych dla myśliwych i lokalnych społeczności na temat ochrony środowiska, etyki łowieckiej oraz ochrony przyrody.",
                    "en" => "Organizing educational activities for hunters and local communities on environmental protection, hunting ethics, and nature conservation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11859,
                "name" => json_encode([
                    "pl" => "Informowanie społeczeństwa o zasadach łowiectwa oraz odpowiedzialnym korzystaniu z zasobów przyrodniczych.",
                    "en" => "Informing the public about hunting regulations and responsible use of natural resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11860,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów z patroli i interwencji, prowadzenie ewidencji działań na terenie obwodu łowieckiego.",
                    "en" => "Preparing reports from patrols and interventions, maintaining records of activities in the hunting district."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11861,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przypadków kłusownictwa, przestępstw i wykroczeń oraz przygotowywanie raportów dla organów nadzoru.",
                    "en" => "Documenting cases of poaching, crimes, and offenses, and preparing reports for oversight authorities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11862,
                "name" => json_encode([
                    "pl" => "Ochrona ambon, paśników, lizaw, karmników oraz innych obiektów wykorzystywanych do dokarmiania i monitorowania zwierzyny.",
                    "en" => "Protecting lookout points, feeding spots, salt licks, and other facilities used for feeding and monitoring game."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11863,
                "name" => json_encode([
                    "pl" => "Usuwanie ewentualnych uszkodzeń infrastruktury oraz zgłaszanie poważniejszych zniszczeń do odpowiednich służb.",
                    "en" => "Removing any infrastructure damage and reporting serious destruction to the relevant authorities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11864,
                "name" => json_encode([
                    "pl" => "Nadzorowanie organizacji i przebiegu polowań zbiorowych, w tym zapewnienie przestrzegania zasad bezpieczeństwa przez uczestników.",
                    "en" => "Overseeing the organization and course of collective hunts, ensuring that safety rules are followed by participants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11865,
                "name" => json_encode([
                    "pl" => "Kontrola terenu i sprzętu używanego podczas polowań zbiorowych oraz reagowanie na wszelkie przypadki nieodpowiedzialnego zachowania.",
                    "en" => "Monitoring the terrain and equipment used during collective hunts and responding to any cases of irresponsible behavior."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11866,
                "name" => json_encode([
                    "pl" => "Monitorowanie populacji gatunków łownych w celu wsparcia gospodarki łowieckiej, dostarczanie danych do planów łowieckich.",
                    "en" => "Monitoring the populations of game species to support hunting management and providing data for hunting plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11867,
                "name" => json_encode([
                    "pl" => "Zbieranie informacji o stanie zwierzyny oraz ocena potrzeb związanych z zarządzaniem populacjami zwierząt.",
                    "en" => "Collecting information about the state of the game and assessing the needs related to animal population management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11868,
                "name" => json_encode([
                    "pl" => "Współpraca z leśnikami i zarządcami terenów łowieckich w zakresie planowania działań mających na celu ochronę zasobów łowieckich.",
                    "en" => "Cooperating with foresters and managers of hunting grounds in planning actions to protect hunting resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11869,
                "name" => json_encode([
                    "pl" => "Realizacja zadań związanych z kontrolą populacji zwierząt, takich jak odstrzał selekcyjny i dokarmianie w okresach trudnych warunków pogodowych.",
                    "en" => "Carrying out tasks related to population control of animals, such as selective culling and feeding during difficult weather conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11870,
                "name" => json_encode([
                    "pl" => "Organizowanie akcji dokarmiania zwierzyny podczas zimy, szczególnie w czasie ciężkich warunków pogodowych.",
                    "en" => "Organizing feeding actions for game during winter, especially during severe weather conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11871,
                "name" => json_encode([
                    "pl" => "Kontrola jakości i bezpieczeństwa paszy przeznaczonej dla zwierząt oraz regularne uzupełnianie karmników i lizaw.",
                    "en" => "Monitoring the quality and safety of feed intended for animals and regularly replenishing feeders and salt licks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11872,
                "name" => json_encode([
                    "pl" => "Egzekwowanie zakazu wstępu na tereny łowieckie przez osoby nieuprawnione, szczególnie podczas sezonu polowań i w obszarach chronionych.",
                    "en" => "Enforcing the prohibition of entry to hunting grounds by unauthorized persons, especially during the hunting season and in protected areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11873,
                "name" => json_encode([
                    "pl" => "Patrolowanie granic obwodów łowieckich i informowanie o przepisach dotyczących wstępu do lasu i obszarów łowieckich.",
                    "en" => "Patrolling the boundaries of hunting grounds and informing about regulations regarding entry to the forest and hunting areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11874,
                "name" => json_encode([
                    "pl" => "Obserwacja zdrowia zwierząt łownych i zgłaszanie przypadków chorób, takich jak wścieklizna, ASF (afrykański pomór świń) czy ptasia grypa.",
                    "en" => "Observing the health of game animals and reporting cases of diseases such as rabies, ASF (African swine fever), or bird flu."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11875,
                "name" => json_encode([
                    "pl" => "Współpraca z lekarzami weterynarii i służbami sanitarnymi w przypadku wystąpienia epidemii lub innych zagrożeń zdrowotnych dla zwierząt.",
                    "en" => "Cooperating with veterinarians and sanitary services in the event of an epidemic or other health threats to animals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11876,
                "name" => json_encode([
                    "pl" => "Działania mające na celu minimalizację szkód wyrządzanych przez zwierzynę łowną w uprawach rolnych i sadach.",
                    "en" => "Actions aimed at minimizing damage caused by game to agricultural crops and orchards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11877,
                "name" => json_encode([
                    "pl" => "Współpraca z rolnikami w zakresie stosowania środków ochronnych oraz wsparcie w procedurach odszkodowawczych.",
                    "en" => "Cooperating with farmers regarding protective measures and assisting with compensation procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11878,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z policją, strażą leśną, inspektoratem weterynarii oraz innymi instytucjami w zakresie ochrony zwierzyny i przestrzegania prawa łowieckiego.",
                    "en" => "Coordinating actions with the police, forest guards, veterinary inspectors, and other institutions regarding the protection of game and compliance with hunting laws."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11879,
                "name" => json_encode([
                    "pl" => "Wymiana informacji o zagrożeniach i wykroczeniach mających wpływ na stan zasobów łowieckich i przyrodniczych.",
                    "en" => "Exchanging information about threats and violations affecting the state of hunting and natural resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11880,
                "name" => json_encode([
                    "pl" => "Sprawdzanie zezwoleń i dokumentów myśliwych przebywających na terenie łowieckim, w tym kontrola broni i amunicji.",
                    "en" => "Checking permits and documents of hunters present in the hunting area, including inspecting firearms and ammunition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11881,
                "name" => json_encode([
                    "pl" => "Egzekwowanie przepisów dotyczących posiadania aktualnych licencji, uprawnień i dokumentacji wymaganej do prowadzenia polowań.",
                    "en" => "Enforcing regulations regarding holding current licenses, authorizations, and documentation required for hunting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11882,
                "name" => json_encode([
                    "pl" => "Monitorowanie obszarów łowieckich pod kątem zagrożeń środowiskowych, takich jak nielegalne wysypiska śmieci, zanieczyszczenia wód i gleby.",
                    "en" => "Monitoring hunting areas for environmental threats, such as illegal dumps, water and soil pollution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11883,
                "name" => json_encode([
                    "pl" => "Zgłaszanie przypadków zanieczyszczeń i organizowanie działań mających na celu ich usunięcie.",
                    "en" => "Reporting cases of pollution and organizing actions to remove them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11884,
                "name" => json_encode([
                    "pl" => "Udzielanie pierwszej pomocy myśliwym, turystom oraz osobom przebywającym na terenie łowieckim w sytuacjach nagłych.",
                    "en" => "Providing first aid to hunters, tourists, and individuals in the hunting area in emergencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11885,
                "name" => json_encode([
                    "pl" => "Współpraca ze służbami ratunkowymi w razie potrzeby ewakuacji lub działań ratunkowych w terenie.",
                    "en" => "Cooperating with rescue services in case of need for evacuation or rescue operations in the field."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11886,
                "name" => json_encode([
                    "pl" => "Promowanie etycznego podejścia do łowiectwa, ochrona przyrody i zachowanie odpowiednich standardów podczas kontaktu z lokalną społecznością i myśliwymi.",
                    "en" => "Promoting an ethical approach to hunting, protecting nature, and maintaining appropriate standards when interacting with the local community and hunters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11887,
                "name" => json_encode([
                    "pl" => "Reprezentowanie pozytywnego wizerunku służb łowieckich i działania na rzecz edukacji ekologicznej.",
                    "en" => "Representing a positive image of hunting services and advocating for ecological education."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11888,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w szkoleniach i kursach podnoszących wiedzę i umiejętności z zakresu ochrony przyrody, gospodarki łowieckiej, przepisów prawnych oraz technik samoobrony.",
                    "en" => "Participating in training and courses to enhance knowledge and skills in nature protection, hunting management, legal regulations, and self-defense techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11889,
                "name" => json_encode([
                    "pl" => "Zdobywanie nowych kompetencji, aby skuteczniej realizować zadania związane z ochroną zasobów łowieckich.",
                    "en" => "Gaining new competencies to effectively carry out tasks related to the protection of hunting resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
        ];
        $strażnik_rybacki = [
            [
                "id" => 11890,
                "name" => json_encode([
                    "pl" => "Monitorowanie populacji ryb i zapobieganie nielegalnemu połowowi ryb oraz działaniom zagrażającym ekosystemowi wodnemu.",
                    "en" => "Monitoring fish populations and preventing illegal fishing and activities threatening the aquatic ecosystem."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11891,
                "name" => json_encode([
                    "pl" => "Informowanie odpowiednich służb o zagrożeniach dla zasobów rybnych, takich jak zanieczyszczenia, nadmierna eksploatacja lub choroby ryb.",
                    "en" => "Informing relevant authorities about threats to fish stocks, such as pollution, overexploitation, or fish diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11892,
                "name" => json_encode([
                    "pl" => "Patrolowanie rzek, jezior, stawów i innych akwenów w celu wykrywania i przeciwdziałania kłusownictwu.",
                    "en" => "Patrolling rivers, lakes, ponds, and other bodies of water to detect and counteract poaching."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11893,
                "name" => json_encode([
                    "pl" => "Usuwanie nielegalnych urządzeń połowowych, takich jak sieci, pułapki i żaki, oraz zgłaszanie przypadków kłusownictwa odpowiednim organom.",
                    "en" => "Removing illegal fishing devices such as nets, traps, and fish pots, and reporting poaching cases to the appropriate authorities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11894,
                "name" => json_encode([
                    "pl" => "Egzekwowanie przepisów dotyczących połowu ryb, ochrony środowiska wodnego i przepisów regulujących rybołówstwo i wędkarstwo.",
                    "en" => "Enforcing regulations related to fish catch, aquatic environmental protection, and laws governing fishing and angling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11895,
                "name" => json_encode([
                    "pl" => "Nakładanie mandatów i stosowanie innych środków dyscyplinarnych wobec osób naruszających prawo rybackie.",
                    "en" => "Issuing fines and applying other disciplinary measures against individuals violating fishing laws."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11896,
                "name" => json_encode([
                    "pl" => "Sprawdzanie, czy osoby łowiące posiadają wymagane pozwolenia i licencje, zarówno dla rybaków zawodowych, jak i wędkarzy rekreacyjnych.",
                    "en" => "Checking whether individuals fishing have the required permits and licenses, both for commercial fishermen and recreational anglers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11897,
                "name" => json_encode([
                    "pl" => "Egzekwowanie przepisów dotyczących limitów połowowych oraz dozwolonych okresów i metod połowu.",
                    "en" => "Enforcing regulations regarding catch limits, allowed periods, and methods of fishing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11898,
                "name" => json_encode([
                    "pl" => "Kontrola zgodności działań wędkarzy z przepisami, takimi jak stosowanie odpowiednich metod połowowych, przynęt i sprzętu.",
                    "en" => "Monitoring anglers' compliance with regulations, such as using appropriate fishing methods, bait, and equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11899,
                "name" => json_encode([
                    "pl" => "Egzekwowanie zasad dotyczących minimalnych wymiarów ochronnych ryb i limitów dziennego połowu.",
                    "en" => "Enforcing rules regarding minimum protective sizes for fish and daily catch limits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11900,
                "name" => json_encode([
                    "pl" => "Monitorowanie akwenów pod kątem zagrożeń dla jakości wód i ekosystemu, takich jak zanieczyszczenia, nielegalne spuszczanie ścieków, wycieki substancji chemicznych.",
                    "en" => "Monitoring water bodies for threats to water quality and the ecosystem, such as pollution, illegal sewage discharge, chemical spills."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11901,
                "name" => json_encode([
                    "pl" => "Informowanie odpowiednich służb o wszelkich przypadkach zanieczyszczeń i działań mogących zaszkodzić środowisku wodnemu.",
                    "en" => "Informing relevant authorities of any cases of pollution and actions that may harm the aquatic environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11902,
                "name" => json_encode([
                    "pl" => "Organizowanie działań edukacyjnych i kampanii informacyjnych dotyczących ochrony przyrody, zasad wędkarstwa oraz zrównoważonego korzystania z zasobów wodnych.",
                    "en" => "Organizing educational activities and information campaigns about nature conservation, fishing rules, and sustainable use of water resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11903,
                "name" => json_encode([
                    "pl" => "Informowanie wędkarzy i rybaków o obowiązujących przepisach, regulaminach oraz odpowiedzialnym zachowaniu w środowisku wodnym.",
                    "en" => "Informing anglers and fishermen about applicable regulations, rules, and responsible behavior in the aquatic environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11904,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów z patroli, interwencji oraz innych działań podejmowanych na terenie wodnym.",
                    "en" => "Preparing reports from patrols, interventions, and other actions taken in the water area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11905,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przypadków kłusownictwa, naruszeń przepisów oraz działań związanych z ochroną środowiska wodnego.",
                    "en" => "Documenting cases of poaching, regulatory violations, and actions related to the protection of the aquatic environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11906,
                "name" => json_encode([
                    "pl" => "Regularne patrolowanie obszarów wodnych, takich jak rzeki, jeziora, stawy i inne zbiorniki wodne, w celu monitorowania ich stanu i zapobiegania zagrożeniom.",
                    "en" => "Regularly patrolling water areas such as rivers, lakes, ponds, and other water bodies to monitor their condition and prevent threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11907,
                "name" => json_encode([
                    "pl" => "Obserwowanie zachowań osób przebywających nad wodą oraz reagowanie na wszelkie podejrzane działania.",
                    "en" => "Observing the behavior of individuals around water and responding to any suspicious activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11908,
                "name" => json_encode([
                    "pl" => "Kontrola legalności stosowania sprzętu połowowego, w tym sieci, wędek, pułapek i innych narzędzi połowowych.",
                    "en" => "Monitoring the legality of fishing gear usage, including nets, rods, traps, and other fishing tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11909,
                "name" => json_encode([
                    "pl" => "Egzekwowanie zakazu używania niedozwolonego sprzętu, takiego jak prądownice, materiały wybuchowe oraz inne niebezpieczne metody połowu.",
                    "en" => "Enforcing the ban on the use of prohibited equipment, such as electrical fishing devices, explosives, and other dangerous fishing methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11910,
                "name" => json_encode([
                    "pl" => "Monitorowanie populacji zwierząt wodnych, które mogą wyrządzać szkody, takich jak bobry czy wydry, oraz podejmowanie działań zapobiegawczych.",
                    "en" => "Monitoring populations of aquatic animals that may cause damage, such as beavers or otters, and taking preventive measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11911,
                "name" => json_encode([
                    "pl" => "Informowanie służb ochrony przyrody o konieczności regulacji populacji zwierząt zagrażających infrastrukturze wodnej.",
                    "en" => "Informing wildlife protection services about the need to regulate populations of animals threatening water infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11912,
                "name" => json_encode([
                    "pl" => "Monitorowanie terenów wodnych pod kątem zanieczyszczeń, takich jak ścieki, odpady chemiczne oraz inne substancje szkodliwe.",
                    "en" => "Monitoring water areas for pollution, such as sewage, chemical waste, and other harmful substances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11913,
                "name" => json_encode([
                    "pl" => "Współpraca z odpowiednimi służbami w zakresie usuwania źródeł zanieczyszczeń oraz zapobiegania ich ponownemu występowaniu.",
                    "en" => "Cooperating with relevant authorities to remove sources of pollution and prevent their recurrence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11914,
                "name" => json_encode([
                    "pl" => "Udzielanie pierwszej pomocy wędkarzom, turystom oraz innym osobom przebywającym na terenie wodnym w sytuacjach nagłych.",
                    "en" => "Providing first aid to anglers, tourists, and others in the water area in emergencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11915,
                "name" => json_encode([
                    "pl" => "Współpraca ze służbami ratunkowymi w sytuacjach wymagających ewakuacji lub działań ratunkowych.",
                    "en" => "Cooperating with rescue services in situations requiring evacuation or rescue operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11916,
                "name" => json_encode([
                    "pl" => "Ochrona obszarów wodnych objętych szczególną ochroną, takich jak rezerwaty przyrody i obszary Natura 2000.",
                    "en" => "Protecting water areas under special protection, such as nature reserves and Natura 2000 areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11917,
                "name" => json_encode([
                    "pl" => "Zapobieganie nielegalnym połowom, zanieczyszczeniom i innym działaniom zagrażającym chronionym ekosystemom wodnym.",
                    "en" => "Preventing illegal fishing, pollution, and other activities threatening protected aquatic ecosystems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11918,
                "name" => json_encode([
                    "pl" => "Ochrona infrastruktury hydrotechnicznej, takiej jak tamy, jazy, śluzy, mosty oraz inne obiekty wodne.",
                    "en" => "Protecting hydraulic infrastructure, such as dams, weirs, locks, bridges, and other water facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11919,
                "name" => json_encode([
                    "pl" => "Zgłaszanie uszkodzeń i zagrożeń dla infrastruktury oraz współpraca z odpowiednimi jednostkami w celu ich zabezpieczenia.",
                    "en" => "Reporting damages and threats to infrastructure and cooperating with relevant units to secure them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11920,
                "name" => json_encode([
                    "pl" => "Obserwacja zdrowia ryb oraz zgłaszanie przypadków chorób, które mogą wpływać na populację ryb, np. zakaźne choroby ryb.",
                    "en" => "Monitoring fish health and reporting cases of diseases that may affect fish populations, such as infectious fish diseases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11921,
                "name" => json_encode([
                    "pl" => "Współpraca z jednostkami weterynarii w celu przeciwdziałania epidemiom wśród ryb oraz podejmowanie działań zapobiegawczych.",
                    "en" => "Cooperating with veterinary units to counteract epidemics among fish and taking preventive measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11922,
                "name" => json_encode([
                    "pl" => "Egzekwowanie zakazów wstępu na obszary wodne objęte ochroną, w tym okresowe ograniczenia dostępu do terenów w czasie tarła lub ochrony gatunkowej.",
                    "en" => "Enforcing access bans to protected water areas, including temporary restrictions on access during spawning or species protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11923,
                "name" => json_encode([
                    "pl" => "Informowanie osób postronnych o zasadach i przepisach dotyczących dostępu do akwenów oraz egzekwowanie zakazów.",
                    "en" => "Informing bystanders about the rules and regulations regarding access to water bodies and enforcing bans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11924,
                "name" => json_encode([
                    "pl" => "Zabezpieczenie przed nielegalnym zbieraniem małży, raków i innych organizmów wodnych, które mogą być chronione lub zagrożone wyginięciem.",
                    "en" => "Preventing illegal harvesting of mollusks, crayfish, and other aquatic organisms that may be protected or endangered."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11925,
                "name" => json_encode([
                    "pl" => "Monitorowanie sytuacji na terenie wodnym i reagowanie na przypadki pozyskiwania zasobów wodnych bez zezwolenia.",
                    "en" => "Monitoring the situation in the water area and responding to cases of resource harvesting without authorization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11926,
                "name" => json_encode([
                    "pl" => "Współdziałanie z policją, strażą leśną, inspektoratem ochrony środowiska oraz innymi służbami w sprawach związanych z ochroną wód i zasobów rybnych.",
                    "en" => "Cooperating with the police, forest guard, environmental protection inspectorate, and other authorities regarding water and fish resource protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11927,
                "name" => json_encode([
                    "pl" => "Wymiana informacji o zagrożeniach, zanieczyszczeniach i działaniach przestępczych mających wpływ na środowisko wodne.",
                    "en" => "Exchanging information on threats, pollution, and criminal activities affecting the aquatic environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11928,
                "name" => json_encode([
                    "pl" => "Reprezentowanie pozytywnego wizerunku służb ochrony rybackiej, działanie zgodnie z zasadami ochrony przyrody oraz przestrzeganie etyki zawodowej.",
                    "en" => "Representing a positive image of fishery protection services, acting according to nature conservation principles and adhering to professional ethics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11929,
                "name" => json_encode([
                    "pl" => "Promowanie odpowiedzialnego i zrównoważonego podejścia do korzystania z zasobów wodnych w kontaktach z wędkarzami i społecznością lokalną.",
                    "en" => "Promoting responsible and sustainable approaches to utilizing water resources in interactions with anglers and the local community."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11930,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach i kursach dotyczących przepisów prawa wodnego, ochrony środowiska, metod przeciwdziałania kłusownictwu oraz technik samoobrony.",
                    "en" => "Participating in training and courses regarding water law regulations, environmental protection, anti-poaching methods, and self-defense techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11931,
                "name" => json_encode([
                    "pl" => "Zdobywanie nowych umiejętności, aby skuteczniej realizować zadania związane z ochroną zasobów wodnych.",
                    "en" => "Acquiring new skills to more effectively carry out tasks related to the protection of water resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
        ];
        $analityk_kryminalny = [
            [
                "id" => 11932,
                "name" => json_encode([
                    "pl" => "Przetwarzanie i interpretacja danych zebranych podczas śledztw, takich jak raporty policyjne, zapisy przesłuchań oraz informacje zebrane na miejscu przestępstwa.",
                    "en" => "Processing and interpreting data collected during investigations, such as police reports, interview records, and information gathered at the crime scene."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11933,
                "name" => json_encode([
                    "pl" => "Tworzenie analiz i raportów dotyczących przestępczości oraz identyfikacja powtarzających się wzorców.",
                    "en" => "Creating analyses and reports on crime and identifying recurring patterns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11934,
                "name" => json_encode([
                    "pl" => "Analiza cech i zachowań sprawców na podstawie zebranych dowodów i danych z wcześniejszych przestępstw.",
                    "en" => "Analyzing characteristics and behaviors of offenders based on collected evidence and data from previous crimes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11935,
                "name" => json_encode([
                    "pl" => "Tworzenie profili kryminalnych, które pomagają organom ścigania w identyfikacji potencjalnych podejrzanych.",
                    "en" => "Creating criminal profiles that assist law enforcement in identifying potential suspects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11936,
                "name" => json_encode([
                    "pl" => "Korzystanie ze specjalistycznego oprogramowania analitycznego, takiego jak systemy GIS (Geographic Information Systems) oraz narzędzia do analizy big data.",
                    "en" => "Using specialized analytical software, such as Geographic Information Systems (GIS) and big data analysis tools."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11937,
                "name" => json_encode([
                    "pl" => "Stosowanie metod wizualizacji danych, np. map przestępczości, diagramów przepływu oraz analiz sieciowych.",
                    "en" => "Applying data visualization methods, such as crime maps, flow diagrams, and network analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11938,
                "name" => json_encode([
                    "pl" => "Identyfikacja wzorców czasowych, miejscowych i demograficznych dotyczących przestępstw, aby przewidzieć i zapobiegać przyszłym zdarzeniom.",
                    "en" => "Identifying temporal, spatial, and demographic patterns of crime to predict and prevent future incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11939,
                "name" => json_encode([
                    "pl" => "Monitorowanie trendów przestępczości w danym obszarze i tworzenie raportów na temat wzrastających lub zmniejszających się zagrożeń.",
                    "en" => "Monitoring crime trends in a given area and creating reports on increasing or decreasing threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11940,
                "name" => json_encode([
                    "pl" => "Dostarczanie śledczym i operacyjnym danych i informacji pomocnych w prowadzeniu dochodzeń, takich jak identyfikacja połączeń między sprawcami a ofiarami.",
                    "en" => "Providing investigators and operational units with data and information useful for conducting investigations, such as identifying connections between offenders and victims."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11941,
                "name" => json_encode([
                    "pl" => "Opracowywanie zestawień, tabel i analiz wspierających działania operacyjne jednostek policyjnych i innych służb ścigania.",
                    "en" => "Developing summaries, tables, and analyses that support the operational activities of police units and other law enforcement agencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11942,
                "name" => json_encode([
                    "pl" => "Wykrywanie i dokumentowanie związków między różnymi przestępstwami, sprawcami i grupami przestępczymi.",
                    "en" => "Detecting and documenting connections between various crimes, offenders, and criminal groups."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11943,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz sieci kryminalnych, aby określić struktury przestępczości zorganizowanej i wzorce współpracy między sprawcami.",
                    "en" => "Conducting analyses of criminal networks to determine structures of organized crime and patterns of collaboration among offenders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11944,
                "name" => json_encode([
                    "pl" => "Wykonywanie analiz finansowych, aby wykryć pranie pieniędzy, oszustwa finansowe i inne przestępstwa gospodarcze.",
                    "en" => "Conducting financial analyses to detect money laundering, financial fraud, and other economic crimes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11945,
                "name" => json_encode([
                    "pl" => "Śledzenie przepływów pieniężnych i identyfikacja podejrzanych transakcji oraz powiązań finansowych między sprawcami.",
                    "en" => "Tracking cash flows and identifying suspicious transactions and financial connections among offenders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11946,
                "name" => json_encode([
                    "pl" => "Opracowywanie szczegółowych raportów z analiz kryminalnych, zawierających wnioski i rekomendacje dla śledczych.",
                    "en" => "Developing detailed reports from criminal analyses, containing conclusions and recommendations for investigators."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11947,
                "name" => json_encode([
                    "pl" => "Prezentowanie wyników analiz w sposób jasny i przystępny, aby ułatwić zrozumienie wyników przez inne służby.",
                    "en" => "Presenting analysis results clearly and accessibly to facilitate understanding of results by other services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11948,
                "name" => json_encode([
                    "pl" => "Wymiana informacji i współpraca z innymi jednostkami policyjnymi, służbami wywiadowczymi oraz agencjami zajmującymi się przeciwdziałaniem przestępczości.",
                    "en" => "Exchanging information and cooperating with other police units, intelligence services, and agencies involved in crime prevention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11949,
                "name" => json_encode([
                    "pl" => "Udział w spotkaniach i naradach, aby koordynować działania operacyjne i analityczne z innymi jednostkami.",
                    "en" => "Participating in meetings and conferences to coordinate operational and analytical activities with other units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11950,
                "name" => json_encode([
                    "pl" => "Analiza bilingów telefonicznych, wiadomości oraz innych danych komunikacyjnych w celu identyfikacji kontaktów i sieci powiązań między sprawcami.",
                    "en" => "Analyzing telephone bills, messages, and other communication data to identify contacts and networks of connections between offenders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11951,
                "name" => json_encode([
                    "pl" => "Tworzenie wykresów i zestawień dotyczących komunikacji, które pomagają w śledztwach związanych z przestępczością zorganizowaną.",
                    "en" => "Creating charts and summaries related to communications that aid in investigations involving organized crime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11952,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz geograficznych, w tym tworzenie map zagrożeń przestępczością na danym obszarze.",
                    "en" => "Conducting geographical analyses, including creating crime threat maps for a given area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11953,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie GIS do identyfikacji miejsc o wysokim ryzyku przestępstw i rekomendowanie działań prewencyjnych.",
                    "en" => "Using GIS to identify high-risk crime locations and recommend preventive actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11954,
                "name" => json_encode([
                    "pl" => "Śledzenie aktywności przestępczej w internecie, w tym w dark web oraz mediach społecznościowych, w celu wykrycia potencjalnych zagrożeń.",
                    "en" => "Tracking criminal activity online, including in the dark web and social media, to detect potential threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11955,
                "name" => json_encode([
                    "pl" => "Analiza informacji uzyskanych z otwartych źródeł (OSINT) w celu wsparcia śledztw.",
                    "en" => "Analyzing information obtained from open sources (OSINT) to support investigations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11956,
                "name" => json_encode([
                    "pl" => "Analiza danych z miejsca zdarzenia oraz innych dowodów w celu weryfikacji alibi i rekonstrukcji przebiegu przestępstwa.",
                    "en" => "Analyzing data from the crime scene and other evidence to verify alibis and reconstruct the course of the crime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11957,
                "name" => json_encode([
                    "pl" => "Wykorzystanie analiz czasowych i przestrzennych do odtworzenia ruchów podejrzanych i określenia potencjalnych scenariuszy.",
                    "en" => "Using temporal and spatial analyses to reconstruct the movements of suspects and determine potential scenarios."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11958,
                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń dla policjantów i śledczych na temat analizy kryminalnej oraz efektywnego wykorzystywania danych w śledztwach.",
                    "en" => "Conducting training for police officers and investigators on criminal analysis and effective use of data in investigations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11959,
                "name" => json_encode([
                    "pl" => "Udzielanie wsparcia doradczego, aby pomóc funkcjonariuszom w lepszym zrozumieniu wyników analiz.",
                    "en" => "Providing advisory support to help officers better understand the results of analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11960,
                "name" => json_encode([
                    "pl" => "Identyfikacja nowych wzorców przestępczości, takich jak metody działania oszustów, zmieniające się techniki przestępcze oraz innowacyjne metody przestępczości cyfrowej.",
                    "en" => "Identifying new crime patterns, such as fraudsters' methods, evolving criminal techniques, and innovative methods of cybercrime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11961,
                "name" => json_encode([
                    "pl" => "Współpraca z jednostkami zajmującymi się przestępczością cyfrową i wywiadem gospodarczym.",
                    "en" => "Cooperating with units dealing with cybercrime and economic intelligence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11962,
                "name" => json_encode([
                    "pl" => "Analiza danych uzyskanych z telefonów, komputerów oraz innych urządzeń elektronicznych w celu identyfikacji związków z innymi dowodami.",
                    "en" => "Analyzing data obtained from phones, computers, and other electronic devices to identify links to other evidence."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11963,
                "name" => json_encode([
                    "pl" => "Współpraca z ekspertami kryminalistyki cyfrowej w celu zabezpieczenia i analizy danych cyfrowych.",
                    "en" => "Cooperating with digital forensics experts to secure and analyze digital data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11964,
                "name" => json_encode([
                    "pl" => "Przetwarzanie dużych zbiorów danych, np. z baz danych przestępczości, w celu wykrycia trendów i wzorców.",
                    "en" => "Processing large datasets, e.g., from crime databases, to detect trends and patterns."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11965,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie zaawansowanych technik analitycznych i algorytmów do identyfikacji wzorców w dużych ilościach danych.",
                    "en" => "Using advanced analytical techniques and algorithms to identify patterns in large volumes of data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11966,
                "name" => json_encode([
                    "pl" => "Stosowanie metod predykcyjnych do przewidywania przyszłych zdarzeń przestępczych, identyfikowania ryzyka oraz przewidywania miejsc i czasu wystąpienia przestępstw.",
                    "en" => "Applying predictive methods to forecast future criminal events, identify risks, and predict when and where crimes will occur."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11967,
                "name" => json_encode([
                    "pl" => "Tworzenie modeli analitycznych, które wspierają prewencję i optymalizację zasobów policyjnych.",
                    "en" => "Creating analytical models that support prevention and optimization of police resources."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11968,
                "name" => json_encode([
                    "pl" => "Analiza wpływu czynników takich jak bezrobocie, bieda, demografia na poziom przestępczości w danym regionie.",
                    "en" => "Analyzing the impact of factors such as unemployment, poverty, and demographics on crime levels in a given region."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11969,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów na temat korelacji między przestępczością a zmiennymi społecznymi i ekonomicznymi.",
                    "en" => "Creating reports on correlations between crime and social and economic variables."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11970,
                "name" => json_encode([
                    "pl" => "Współpraca z jednostkami prewencyjnymi w zakresie tworzenia strategii przeciwdziałania przestępczości na podstawie analiz.",
                    "en" => "Cooperating with preventive units to develop strategies to counter crime based on analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11971,
                "name" => json_encode([
                    "pl" => "Przedstawianie rekomendacji, które mogą wpłynąć na zmniejszenie przestępczości w danym regionie.",
                    "en" => "Presenting recommendations that may influence the reduction of crime in a given area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11972,
                "name" => json_encode([
                    "pl" => "Dbanie o poufność analizowanych danych i przestrzeganie przepisów dotyczących ochrony danych osobowych.",
                    "en" => "Ensuring the confidentiality of analyzed data and compliance with data protection regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11973,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad etyki zawodowej oraz dbałość o legalność prowadzonych analiz.",
                    "en" => "Adhering to professional ethics and ensuring the legality of conducted analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11974,
                "name" => json_encode([
                    "pl" => "Śledzenie nowych trendów przestępczych, technologii kryminalistycznych oraz metod przestępczości cyfrowej.",
                    "en" => "Tracking new criminal trends, forensic technologies, and methods of cybercrime."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11975,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach i konferencjach z zakresu analizy kryminalnej i śledczej, aby być na bieżąco z nowymi narzędziami i technikami analitycznymi.",
                    "en" => "Participating in training sessions and conferences on criminal and investigative analysis to stay updated with new tools and analytical techniques."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $inspektor_inspekcji_transportu_drogowego = [
            [
                "id" => 11976,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli drogowych pojazdów ciężarowych, autobusów oraz innych pojazdów wykonujących transport drogowy.",
                    "en" => "Conducting road inspections of heavy goods vehicles, buses, and other vehicles involved in road transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11977,
                "name" => json_encode([
                    "pl" => "Sprawdzanie, czy kierowcy i przedsiębiorcy transportowi przestrzegają przepisów dotyczących czasu pracy, prędkości, ładowności oraz dokumentacji przewozowej.",
                    "en" => "Checking whether drivers and transport entrepreneurs comply with regulations regarding working hours, speed, loading capacity, and transport documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11978,
                "name" => json_encode([
                    "pl" => "Weryfikacja stanu technicznego pojazdów, w tym sprawność hamulców, oświetlenia, ogumienia oraz układów bezpieczeństwa.",
                    "en" => "Verification of the technical condition of vehicles, including brake efficiency, lighting, tires, and safety systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11979,
                "name" => json_encode([
                    "pl" => "Wykorzystywanie mobilnych jednostek diagnostycznych do badania stanu technicznego pojazdów na miejscu kontroli.",
                    "en" => "Using mobile diagnostic units to assess the technical condition of vehicles on-site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11980,
                "name" => json_encode([
                    "pl" => "Kontrola ważności dokumentów pojazdu, takich jak dowód rejestracyjny, przeglądy techniczne, licencje i zezwolenia.",
                    "en" => "Checking the validity of vehicle documents, such as registration certificates, technical inspections, licenses, and permits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11981,
                "name" => json_encode([
                    "pl" => "Weryfikacja uprawnień kierowcy, np. prawa jazdy odpowiedniej kategorii, karty kierowcy oraz świadectwa kwalifikacji zawodowej.",
                    "en" => "Verifying driver qualifications, e.g., the appropriate category of driving license, driver card, and professional qualification certificate."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11982,
                "name" => json_encode([
                    "pl" => "Sprawdzanie zapisów z tachografów cyfrowych i analogowych, aby upewnić się, że kierowcy przestrzegają przepisów dotyczących czasu pracy, przerw i odpoczynków.",
                    "en" => "Checking records from digital and analog tachographs to ensure that drivers comply with regulations regarding working hours, breaks, and rest periods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11983,
                "name" => json_encode([
                    "pl" => "Wykrywanie naruszeń, takich jak przekroczenia dozwolonego czasu jazdy lub brak wymaganych przerw.",
                    "en" => "Detecting violations, such as exceeding permitted driving times or failing to take required breaks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11984,
                "name" => json_encode([
                    "pl" => "Ważenie pojazdów przy pomocy przenośnych wag, aby sprawdzić, czy nie przekraczają dopuszczalnych norm masy całkowitej i osiowej.",
                    "en" => "Weighing vehicles using portable scales to check for compliance with allowable total and axle weight limits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11985,
                "name" => json_encode([
                    "pl" => "Sprawdzanie, czy ładunki są odpowiednio zabezpieczone oraz czy ich rozmieszczenie nie zagraża bezpieczeństwu w ruchu drogowym.",
                    "en" => "Checking whether loads are properly secured and whether their distribution poses a risk to road safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11986,
                "name" => json_encode([
                    "pl" => "Kontrola dokumentacji, oznakowania pojazdów oraz środków zabezpieczających przewożone materiały niebezpieczne.",
                    "en" => "Checking documentation, vehicle markings, and securing means for transporting hazardous materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11987,
                "name" => json_encode([
                    "pl" => "Weryfikacja, czy przewóz materiałów niebezpiecznych jest zgodny z przepisami ADR i czy nie stwarza zagrożenia dla zdrowia, życia oraz środowiska.",
                    "en" => "Verifying whether the transport of hazardous materials complies with ADR regulations and does not pose a threat to health, life, or the environment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11988,
                "name" => json_encode([
                    "pl" => "Identyfikowanie przypadków nielegalnego przewozu osób i towarów, np. brak licencji przewozowej lub przewozy na „dzikich” liniach.",
                    "en" => "Identifying cases of illegal transport of people and goods, e.g., lack of transport licenses or transport on 'wild' lines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11989,
                "name" => json_encode([
                    "pl" => "Współpraca z policją i innymi służbami w celu eliminacji działalności nielegalnych przewoźników.",
                    "en" => "Cooperating with the police and other services to eliminate the activities of illegal carriers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11990,
                "name" => json_encode([
                    "pl" => "Monitorowanie przestrzegania przepisów przez kierowców zawodowych, aby zwiększyć bezpieczeństwo ruchu drogowego.",
                    "en" => "Monitoring compliance with regulations by professional drivers to enhance road safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11991,
                "name" => json_encode([
                    "pl" => "Reagowanie na sytuacje zagrażające bezpieczeństwu na drogach oraz usuwanie pojazdów, które mogą stanowić zagrożenie dla innych uczestników ruchu.",
                    "en" => "Responding to situations threatening road safety and removing vehicles that may pose a risk to other road users."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11992,
                "name" => json_encode([
                    "pl" => "Kontrola pojazdów ciężarowych oraz autobusów na przejściach granicznych w celu sprawdzenia ich zgodności z przepisami międzynarodowymi.",
                    "en" => "Inspecting heavy goods vehicles and buses at border crossings to check compliance with international regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11993,
                "name" => json_encode([
                    "pl" => "Weryfikacja dokumentacji przewozowej, masy, wymiarów oraz przestrzegania przepisów dotyczących przewozów międzynarodowych.",
                    "en" => "Verifying transport documentation, weight, dimensions, and compliance with international transport regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11994,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie postępowań w sprawach naruszeń przepisów transportowych i bezpieczeństwa ruchu drogowego.",
                    "en" => "Conducting proceedings regarding violations of transport regulations and road safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11995,
                "name" => json_encode([
                    "pl" => "Nakładanie mandatów i grzywien za wykryte naruszenia oraz sporządzanie protokołów z kontroli.",
                    "en" => "Issuing fines and penalties for detected violations and preparing inspection reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11996,
                "name" => json_encode([
                    "pl" => "Identyfikacja prób manipulacji tachografami, np. poprzez stosowanie magnesów lub innych urządzeń fałszujących dane.",
                    "en" => "Identifying attempts to manipulate tachographs, e.g., by using magnets or other devices to falsify data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11997,
                "name" => json_encode([
                    "pl" => "Weryfikacja autentyczności zapisów z tachografów oraz działania urządzeń, aby zapobiec fałszowaniu czasu pracy.",
                    "en" => "Verifying the authenticity of tachograph records and the operation of devices to prevent falsification of working hours."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11998,
                "name" => json_encode([
                    "pl" => "Sprawdzanie, czy pojazdy spełniają normy emisji spalin oraz czy ich układy wydechowe i filtry są sprawne.",
                    "en" => "Checking whether vehicles meet exhaust emission standards and whether their exhaust systems and filters are functioning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 11999,
                "name" => json_encode([
                    "pl" => "Egzekwowanie przepisów dotyczących ochrony środowiska oraz reagowanie na przypadki zanieczyszczeń powodowanych przez pojazdy.",
                    "en" => "Enforcing environmental protection regulations and responding to cases of pollution caused by vehicles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12000,
                "name" => json_encode([
                    "pl" => "Weryfikacja legalności wykonywania przewozów osób i towarów, zgodności z posiadanymi licencjami oraz przestrzegania regulaminów.",
                    "en" => "Verifying the legality of passenger and freight transport, compliance with licenses held, and adherence to regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12001,
                "name" => json_encode([
                    "pl" => "Współpraca z inspekcjami i organami nadzorującymi branżę transportową w celu eliminacji nieuczciwej konkurencji.",
                    "en" => "Cooperating with inspection authorities and regulatory bodies in the transport sector to eliminate unfair competition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12002,
                "name" => json_encode([
                    "pl" => "Sprawdzanie stanu technicznego infrastruktury używanej podczas kontroli drogowych, takich jak punkty kontrolne, wagi, urządzenia pomiarowe.",
                    "en" => "Checking the technical condition of the infrastructure used during road inspections, such as checkpoints, scales, and measuring devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12003,
                "name" => json_encode([
                    "pl" => "Informowanie odpowiednich instytucji o usterkach i potrzebie modernizacji infrastruktury używanej do kontroli drogowej.",
                    "en" => "Informing relevant institutions about faults and the need for modernization of infrastructure used for road inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12004,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z policją, strażą graniczną, urzędami celnymi oraz służbami ratunkowymi w celu realizacji zadań kontrolnych.",
                    "en" => "Coordinating actions with the police, border guard, customs offices, and emergency services to carry out inspection tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12005,
                "name" => json_encode([
                    "pl" => "Wymiana informacji o przypadkach naruszeń oraz wspólne przeprowadzanie akcji kontrolnych i operacyjnych.",
                    "en" => "Exchanging information about violations and jointly conducting inspection and operational actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12006,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w działaniach informacyjnych i edukacyjnych, mających na celu zwiększenie świadomości kierowców i przewoźników na temat przepisów.",
                    "en" => "Participating in informational and educational activities aimed at raising awareness among drivers and carriers about regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12007,
                "name" => json_encode([
                    "pl" => "Szkolenie przedsiębiorców transportowych i kierowców w zakresie obowiązujących przepisów, norm bezpieczeństwa oraz ekologii.",
                    "en" => "Training transport entrepreneurs and drivers on applicable regulations, safety standards, and ecology."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12008,
                "name" => json_encode([
                    "pl" => "Współpraca z inspekcjami transportu drogowego z innych krajów, np. podczas kontroli przewozów międzynarodowych.",
                    "en" => "Cooperating with road transport inspections from other countries, e.g., during inspections of international transport."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12009,
                "name" => json_encode([
                    "pl" => "Udział w międzynarodowych operacjach, mających na celu poprawę bezpieczeństwa transportu drogowego na poziomie międzynarodowym.",
                    "en" => "Participating in international operations aimed at improving road transport safety at the international level."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12010,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów i zestawień statystycznych dotyczących wyników kontroli, liczby naruszeń i wniosków pokontrolnych.",
                    "en" => "Preparing reports and statistical summaries regarding inspection results, the number of violations, and post-inspection conclusions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12011,
                "name" => json_encode([
                    "pl" => "Przekazywanie danych o stanie bezpieczeństwa i naruszeniach przepisów do organów centralnych oraz innych jednostek nadzoru.",
                    "en" => "Providing data on safety status and violations of regulations to central authorities and other supervisory units."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12012,
                "name" => json_encode([
                    "pl" => "Utrzymywanie w dobrym stanie technicznym przenośnych urządzeń diagnostycznych, wag i innych narzędzi wykorzystywanych do kontroli drogowej.",
                    "en" => "Maintaining portable diagnostic devices, scales, and other tools used for road inspections in good technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12013,
                "name" => json_encode([
                    "pl" => "Regularna konserwacja i kalibracja sprzętu w celu zapewnienia dokładności pomiarów i skuteczności przeprowadzanych kontroli.",
                    "en" => "Regular maintenance and calibration of equipment to ensure measurement accuracy and effectiveness of inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12014,
                "name" => json_encode([
                    "pl" => "Wszczynanie i prowadzenie postępowań administracyjnych w sprawach związanych z naruszeniami przepisów transportowych.",
                    "en" => "Initiating and conducting administrative proceedings related to violations of transport regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12015,
                "name" => json_encode([
                    "pl" => "Wydawanie decyzji administracyjnych, w tym czasowe wstrzymanie działalności przewoźnika w przypadku poważnych naruszeń.",
                    "en" => "Issuing administrative decisions, including temporary suspension of carrier operations in the case of serious violations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12016,
                "name" => json_encode([
                    "pl" => "Działanie zgodnie z przepisami i etyką zawodową, zapewniając obiektywność, rzetelność i poufność informacji uzyskanych podczas kontroli.",
                    "en" => "Acting in accordance with regulations and professional ethics, ensuring objectivity, reliability, and confidentiality of information obtained during inspections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12017,
                "name" => json_encode([
                    "pl" => "Unikanie konfliktu interesów oraz dbanie o profesjonalizm i neutralność w kontaktach z kierowcami i przewoźnikami.",
                    "en" => "Avoiding conflicts of interest and ensuring professionalism and neutrality in interactions with drivers and carriers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12018,
                "name" => json_encode([
                    "pl" => "Pomoc przy zabezpieczeniu miejsc wypadków drogowych z udziałem pojazdów ciężarowych lub przewozów materiałów niebezpiecznych.",
                    "en" => "Assisting in securing accident sites involving heavy vehicles or transport of hazardous materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12019,
                "name" => json_encode([
                    "pl" => "Współpraca ze służbami ratunkowymi podczas akcji ratunkowych i ewakuacyjnych w przypadku awarii, wypadków lub wycieków.",
                    "en" => "Cooperating with emergency services during rescue and evacuation operations in case of failures, accidents, or leaks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
        ];
        $technik_systemow_zabezpieczen = [
            [
                "id" => 12020,
                "name" => json_encode([
                    "pl" => "Tworzenie koncepcji i projektów instalacji systemów zabezpieczeń, takich jak alarmy, monitoring wizyjny, systemy kontroli dostępu oraz systemy przeciwpożarowe.",
                    "en" => "Creating concepts and designs for security system installations, such as alarms, video monitoring, access control systems, and fire protection systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12021,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich urządzeń i technologii zabezpieczających zgodnie z wymaganiami klienta i normami bezpieczeństwa.",
                    "en" => "Selecting appropriate security devices and technologies according to client requirements and safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12022,
                "name" => json_encode([
                    "pl" => "Montaż i konfiguracja systemów alarmowych, które wykrywają włamania, pożary oraz inne zagrożenia.",
                    "en" => "Installing and configuring alarm systems that detect break-ins, fires, and other threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12023,
                "name" => json_encode([
                    "pl" => "Instalacja czujników ruchu, detektorów dymu, czujników stłuczenia szkła i innych elementów zabezpieczających.",
                    "en" => "Installing motion sensors, smoke detectors, glass break sensors, and other security elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12024,
                "name" => json_encode([
                    "pl" => "Montaż kamer monitoringu wizyjnego, ustawienie kątów widzenia i ich integracja z systemami rejestracji obrazu.",
                    "en" => "Installing video surveillance cameras, adjusting viewing angles, and integrating them with recording systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12025,
                "name" => json_encode([
                    "pl" => "Konfiguracja urządzeń do zdalnego monitorowania oraz zapewnienie jakości i stabilności obrazu.",
                    "en" => "Configuring remote monitoring devices and ensuring image quality and stability."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12026,
                "name" => json_encode([
                    "pl" => "Instalacja systemów kontroli dostępu, takich jak karty magnetyczne, zamki elektroniczne, czytniki biometryczne i inne rozwiązania.",
                    "en" => "Installing access control systems such as magnetic cards, electronic locks, biometric readers, and other solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12027,
                "name" => json_encode([
                    "pl" => "Konfiguracja oprogramowania do zarządzania dostępem, w tym nadawanie uprawnień i kontrolowanie dostępu do pomieszczeń.",
                    "en" => "Configuring access management software, including granting permissions and controlling room access."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12028,
                "name" => json_encode([
                    "pl" => "Instalacja i konfiguracja systemów wykrywania pożaru, takich jak detektory dymu, czujniki temperatury i centrale przeciwpożarowe.",
                    "en" => "Installing and configuring fire detection systems, such as smoke detectors, temperature sensors, and fire control panels."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12029,
                "name" => json_encode([
                    "pl" => "Integracja systemów przeciwpożarowych z innymi systemami zabezpieczeń i zapewnienie ich zgodności z przepisami przeciwpożarowymi.",
                    "en" => "Integrating fire protection systems with other security systems and ensuring compliance with fire safety regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12030,
                "name" => json_encode([
                    "pl" => "Programowanie central alarmowych, rejestratorów wizyjnych oraz innych urządzeń zabezpieczających zgodnie z wymaganiami klienta.",
                    "en" => "Programming alarm control panels, video recorders, and other security devices according to client requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12031,
                "name" => json_encode([
                    "pl" => "Konfiguracja urządzeń w celu zapewnienia ich pełnej funkcjonalności oraz łatwości obsługi.",
                    "en" => "Configuring devices to ensure full functionality and ease of use."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12032,
                "name" => json_encode([
                    "pl" => "Testowanie działania systemów zabezpieczeń po ich instalacji, aby upewnić się, że działają poprawnie i spełniają oczekiwania.",
                    "en" => "Testing security systems after installation to ensure they work correctly and meet expectations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12033,
                "name" => json_encode([
                    "pl" => "Kalibracja i regulacja czujników oraz innych urządzeń w celu zwiększenia skuteczności systemu.",
                    "en" => "Calibrating and adjusting sensors and other devices to enhance system effectiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12034,
                "name" => json_encode([
                    "pl" => "Identyfikacja usterek i problemów technicznych w działających systemach zabezpieczeń oraz naprawa uszkodzonych urządzeń.",
                    "en" => "Identifying faults and technical issues in operational security systems and repairing damaged devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12035,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie działań serwisowych, takich jak wymiana części i modernizacja systemów, aby zapewnić ich długotrwałe działanie.",
                    "en" => "Performing maintenance activities, such as part replacement and system upgrades, to ensure long-term functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12036,
                "name" => json_encode([
                    "pl" => "Regularne przeglądy i konserwacja systemów, aby zapewnić ich sprawne funkcjonowanie i minimalizować ryzyko awarii.",
                    "en" => "Conducting regular inspections and maintenance of systems to ensure optimal operation and minimize failure risk."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12037,
                "name" => json_encode([
                    "pl" => "Wymiana baterii, czyszczenie urządzeń oraz testowanie ich sprawności w ramach planowej konserwacji.",
                    "en" => "Replacing batteries, cleaning devices, and testing functionality as part of scheduled maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12038,
                "name" => json_encode([
                    "pl" => "Aktualizacja oprogramowania systemów zabezpieczeń, aby zapewnić ochronę przed nowymi zagrożeniami oraz usunięcie błędów.",
                    "en" => "Updating security system software to protect against new threats and fix issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12039,
                "name" => json_encode([
                    "pl" => "Instalacja łat bezpieczeństwa oraz aktualizacja ustawień zgodnie z najnowszymi standardami i technologiami.",
                    "en" => "Installing security patches and updating settings according to the latest standards and technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12040,
                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń dla klientów i użytkowników końcowych, wyjaśnianie funkcji systemów oraz instrukcje dotyczące obsługi.",
                    "en" => "Conducting training sessions for clients and end-users, explaining system functions and providing usage instructions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12041,
                "name" => json_encode([
                    "pl" => "Informowanie o podstawowych procedurach bezpieczeństwa oraz sposobach reagowania na alarmy.",
                    "en" => "Providing information on basic security procedures and how to respond to alarms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12042,
                "name" => json_encode([
                    "pl" => "Sporządzanie dokumentacji technicznej instalowanych systemów, w tym schematów, instrukcji oraz specyfikacji technicznych.",
                    "en" => "Preparing technical documentation for installed systems, including schematics, instructions, and technical specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12043,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów z przeglądów, konserwacji i testów systemów zabezpieczeń.",
                    "en" => "Preparing reports on inspections, maintenance, and testing of security systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12044,
                "name" => json_encode([
                    "pl" => "Kontakt z klientami w celu ustalania wymagań oraz doradztwo przy wyborze odpowiednich rozwiązań zabezpieczających.",
                    "en" => "Communicating with clients to determine requirements and advising on suitable security solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12045,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie wizji lokalnych oraz ocena ryzyka, aby dostosować systemy zabezpieczeń do potrzeb klienta.",
                    "en" => "Conducting site visits and risk assessments to tailor security systems to client needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12046,
                "name" => json_encode([
                    "pl" => "Analiza zagrożeń i potencjalnych ryzyk dla osób i mienia w celu zaproponowania odpowiednich systemów zabezpieczeń.",
                    "en" => "Analyzing threats and potential risks to persons and property to recommend appropriate security systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12047,
                "name" => json_encode([
                    "pl" => "Tworzenie planów zabezpieczeń dostosowanych do specyfiki danego obiektu lub obszaru.",
                    "en" => "Creating security plans tailored to the specifics of a given facility or area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12048,
                "name" => json_encode([
                    "pl" => "Kontakt z producentami sprzętu zabezpieczającego w celu uzyskania informacji technicznych, wsparcia oraz części zamiennych.",
                    "en" => "Contacting security equipment manufacturers for technical information, support, and spare parts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12049,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach produktowych organizowanych przez dostawców oraz pozyskiwanie najnowszych informacji na temat technologii zabezpieczeń.",
                    "en" => "Participating in product training by suppliers and acquiring the latest information on security technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12050,
                "name" => json_encode([
                    "pl" => "Upewnienie się, że instalowane systemy spełniają lokalne przepisy, normy bezpieczeństwa oraz wytyczne dotyczące ochrony osób i mienia.",
                    "en" => "Ensuring that installed systems meet local regulations, safety standards, and guidelines for protecting persons and property."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12051,
                "name" => json_encode([
                    "pl" => "Przestrzeganie norm związanych z ochroną przeciwpożarową, ochroną mienia oraz innych regulacji dotyczących systemów zabezpieczeń.",
                    "en" => "Complying with fire protection, asset protection, and other security system regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12052,
                "name" => json_encode([
                    "pl" => "Współpraca przy przeprowadzaniu audytów bezpieczeństwa oraz dostarczanie informacji dotyczących stanu technicznego systemów zabezpieczeń.",
                    "en" => "Collaborating on security audits and providing information on the technical condition of security systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12053,
                "name" => json_encode([
                    "pl" => "Udział w kontrolach jakości, inspekcjach i audytach wewnętrznych dotyczących instalacji zabezpieczeń.",
                    "en" => "Participating in quality controls, inspections, and internal audits of security installations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12054,
                "name" => json_encode([
                    "pl" => "Śledzenie nowych technologii i rozwiązań w branży zabezpieczeń oraz dostosowywanie oferty do zmieniających się potrzeb rynku.",
                    "en" => "Keeping up with new technologies and solutions in the security industry and adapting offerings to changing market needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12055,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy na temat nowych metod włamań, zagrożeń oraz skutecznych środków ich zapobiegania.",
                    "en" => "Updating knowledge on new break-in methods, threats, and effective preventive measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12056,
                "name" => json_encode([
                    "pl" => "Działanie zgodnie z zasadami etyki zawodowej, zapewniając poufność danych oraz ochronę informacji o systemach zabezpieczeń.",
                    "en" => "Acting in accordance with professional ethics, ensuring data confidentiality and security information protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12057,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że instalacje zabezpieczeń nie są dostępne dla osób nieuprawnionych i przestrzeganie zasad ochrony prywatności klientów.",
                    "en" => "Ensuring that security installations are not accessible to unauthorized persons and observing client privacy protection principles."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12058,
                "name" => json_encode([
                    "pl" => "Stosowanie się do zasad bezpieczeństwa i higieny pracy, szczególnie podczas pracy z urządzeniami elektrycznymi i na wysokościach.",
                    "en" => "Adhering to safety and hygiene rules, especially when working with electrical devices and at heights."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12059,
                "name" => json_encode([
                    "pl" => "Korzystanie ze środków ochrony osobistej i sprzętu zabezpieczającego podczas montażu i konserwacji systemów.",
                    "en" => "Using personal protective equipment and safety gear during system installation and maintenance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12060,
                "name" => json_encode([
                    "pl" => "Regularne uczestnictwo w szkoleniach i kursach związanych z technologiami zabezpieczeń oraz systemami alarmowymi, monitoringu i kontroli dostępu.",
                    "en" => "Participating in regular training and courses on security technologies and alarm, monitoring, and access control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12061,
                "name" => json_encode([
                    "pl" => "Podnoszenie kwalifikacji w zakresie nowych systemów, przepisów oraz metod pracy.",
                    "en" => "Enhancing qualifications in new systems, regulations, and work methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12062,
                "name" => json_encode([
                    "pl" => "Zdalne wsparcie techniczne dla klientów, pomoc w diagnostyce usterek oraz zdalne konfiguracje systemów.",
                    "en" => "Providing remote technical support to clients, helping with troubleshooting, and performing remote system configurations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12063,
                "name" => json_encode([
                    "pl" => "Pomoc klientom w rozwiązywaniu problemów z systemami zabezpieczeń przez telefon, e-mail lub poprzez zdalne połączenia.",
                    "en" => "Assisting clients with security system issues via phone, email, or remote connections."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pracownik_ochrony_fizycznej = [
            [
                "id" => 12064,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa ludzi i mienia w miejscach publicznych, obiektach prywatnych, zakładach pracy, centrach handlowych i innych obiektach.",
                    "en" => "Ensuring the safety of people and property in public places, private buildings, workplaces, shopping centers, and other facilities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12065,
                "name" => json_encode([
                    "pl" => "Zapobieganie kradzieżom, aktom wandalizmu, wtargnięciom i innym zagrożeniom.",
                    "en" => "Preventing theft, vandalism, intrusions, and other threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12066,
                "name" => json_encode([
                    "pl" => "Regularne patrolowanie terenu chronionego, w tym sprawdzanie wszystkich kluczowych punktów i miejsc potencjalnych zagrożeń.",
                    "en" => "Regularly patrolling protected areas, including checking all key points and potential threat locations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12067,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie inspekcji wejść, wyjść, drzwi, okien oraz obszarów o podwyższonym ryzyku.",
                    "en" => "Inspecting entrances, exits, doors, windows, and high-risk areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12068,
                "name" => json_encode([
                    "pl" => "Obsługa i nadzorowanie systemów monitoringu wizyjnego (CCTV), alarmów, systemów kontroli dostępu oraz innych urządzeń zabezpieczających.",
                    "en" => "Operating and supervising CCTV, alarms, access control systems, and other security devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12069,
                "name" => json_encode([
                    "pl" => "Reagowanie na sygnały alarmowe i nieprawidłowości wykrywane przez systemy zabezpieczeń.",
                    "en" => "Responding to alarms and irregularities detected by security systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12070,
                "name" => json_encode([
                    "pl" => "Sprawdzanie tożsamości osób wchodzących na teren obiektu, egzekwowanie zasad dostępu oraz wydawanie przepustek.",
                    "en" => "Checking the identity of people entering the facility, enforcing access rules, and issuing passes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12071,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że na teren obiektu nie wchodzą osoby nieuprawnione oraz nadzór nad listami osób upoważnionych do wstępu.",
                    "en" => "Ensuring that unauthorized persons do not enter the facility and overseeing lists of authorized individuals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12072,
                "name" => json_encode([
                    "pl" => "Dbanie o zachowanie porządku na terenie chronionym, reagowanie na zakłócenia, awantury i inne nieodpowiednie zachowania.",
                    "en" => "Maintaining order on protected premises, responding to disturbances, altercations, and other inappropriate behavior."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12073,
                "name" => json_encode([
                    "pl" => "Przeciwdziałanie działaniom mogącym powodować zagrożenie dla bezpieczeństwa lub komfortu innych osób.",
                    "en" => "Preventing actions that may pose a threat to the safety or comfort of others."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12074,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli osobistej oraz sprawdzanie bagażu, aby zapobiegać wnoszeniu niebezpiecznych przedmiotów lub substancji na teren obiektu.",
                    "en" => "Conducting personal checks and baggage inspections to prevent dangerous items or substances from being brought onto the premises."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12075,
                "name" => json_encode([
                    "pl" => "Używanie detektorów metalu i innych narzędzi do wykrywania przedmiotów zabronionych.",
                    "en" => "Using metal detectors and other tools to detect prohibited items."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12076,
                "name" => json_encode([
                    "pl" => "Natychmiastowe podejmowanie działań w sytuacjach awaryjnych, takich jak pożar, wypadki, ewakuacje, zamachy.",
                    "en" => "Taking immediate action in emergencies such as fires, accidents, evacuations, and attacks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12077,
                "name" => json_encode([
                    "pl" => "Wdrażanie procedur awaryjnych, informowanie służb ratunkowych oraz udzielanie pierwszej pomocy przedmedycznej, jeśli to konieczne.",
                    "en" => "Implementing emergency procedures, notifying emergency services, and providing first aid if necessary."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12078,
                "name" => json_encode([
                    "pl" => "Pomoc w organizacji ewakuacji i kierowaniu ruchem ludzi w sytuacjach kryzysowych lub w przypadku zagrożenia.",
                    "en" => "Assisting in organizing evacuations and directing people during crisis situations or threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12079,
                "name" => json_encode([
                    "pl" => "Zarządzanie tłumem w miejscach publicznych oraz podczas imprez masowych, aby zapewnić bezpieczeństwo wszystkim uczestnikom.",
                    "en" => "Managing crowds in public places and at mass events to ensure the safety of all participants."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12080,
                "name" => json_encode([
                    "pl" => "Przestrzeganie wewnętrznych regulaminów obiektu, zasad BHP oraz wytycznych bezpieczeństwa.",
                    "en" => "Following the facility's internal regulations, occupational health and safety guidelines, and security protocols."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12081,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że pracownicy, klienci oraz osoby przebywające na terenie obiektu stosują się do obowiązujących zasad.",
                    "en" => "Ensuring that employees, clients, and individuals on the premises comply with the applicable rules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12082,
                "name" => json_encode([
                    "pl" => "Identyfikacja potencjalnych zagrożeń związanych z przestępczością oraz zapobieganie działaniom o charakterze terrorystycznym.",
                    "en" => "Identifying potential crime-related threats and preventing actions of a terrorist nature."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12083,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi służbami w zakresie zapobiegania i reagowania na akty terroryzmu i inne poważne zagrożenia.",
                    "en" => "Collaborating with other services to prevent and respond to terrorism and other serious threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12084,
                "name" => json_encode([
                    "pl" => "Monitorowanie zachowań osób przebywających na terenie obiektu oraz identyfikowanie działań mogących stanowić zagrożenie.",
                    "en" => "Monitoring the behavior of individuals on the premises and identifying actions that may pose a threat."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12085,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów z incydentów oraz informowanie przełożonych o wszelkich podejrzanych sytuacjach.",
                    "en" => "Preparing incident reports and informing supervisors of any suspicious situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12086,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów z patroli, interwencji oraz innych zdarzeń mających miejsce podczas służby.",
                    "en" => "Preparing reports on patrols, interventions, and other incidents during duty."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12087,
                "name" => json_encode([
                    "pl" => "Dokumentowanie zauważonych naruszeń i incydentów oraz dostarczanie przełożonym informacji na temat sytuacji bezpieczeństwa.",
                    "en" => "Documenting observed violations and incidents and providing supervisors with information on the security situation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12088,
                "name" => json_encode([
                    "pl" => "Współdziałanie z policją, strażą pożarną, służbami medycznymi i innymi służbami ratunkowymi w sytuacjach awaryjnych.",
                    "en" => "Cooperating with police, fire departments, medical services, and other emergency services in crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12089,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji, wsparcie przy działaniach interwencyjnych oraz ułatwianie działań ratunkowych.",
                    "en" => "Providing information, support for intervention activities, and facilitating rescue operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12090,
                "name" => json_encode([
                    "pl" => "Dbanie o stan techniczny sprzętu ochronnego, w tym systemów monitoringu, detektorów metalu, radiotelefonów i innego wyposażenia.",
                    "en" => "Maintaining the technical condition of protective equipment, including monitoring systems, metal detectors, radios, and other equipment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12091,
                "name" => json_encode([
                    "pl" => "Informowanie o usterkach sprzętu oraz zapewnienie, że wszystkie urządzenia są sprawne i gotowe do użycia.",
                    "en" => "Reporting equipment faults and ensuring all devices are functional and ready for use."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12092,
                "name" => json_encode([
                    "pl" => "Pomoc osobom przebywającym na terenie obiektu, np. udzielanie informacji o lokalizacji pomieszczeń czy zasadach obowiązujących na obiekcie.",
                    "en" => "Assisting people on the premises, e.g., providing information on room locations or site rules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12093,
                "name" => json_encode([
                    "pl" => "Kierowanie ruchem pieszym i samochodowym na terenie obiektu, w tym organizacja parkingu i pomoc w znalezieniu drogi.",
                    "en" => "Directing pedestrian and vehicle traffic on site, including organizing parking and helping people find their way."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12094,
                "name" => json_encode([
                    "pl" => "Reagowanie na sygnały z systemów alarmowych oraz sprawdzanie zgłoszonych incydentów, np. w przypadku alarmu pożarowego lub intruza.",
                    "en" => "Responding to alarms and checking reported incidents, such as fire alarms or intruder alerts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12095,
                "name" => json_encode([
                    "pl" => "Wyjaśnianie przyczyn alarmu i podejmowanie odpowiednich działań w zależności od sytuacji.",
                    "en" => "Explaining the causes of alarms and taking appropriate action based on the situation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12096,
                "name" => json_encode([
                    "pl" => "Regularne sprawdzanie pomieszczeń, zabezpieczeń i środków ochronnych na terenie obiektu.",
                    "en" => "Regularly checking rooms, security measures, and protective equipment on site."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12097,
                "name" => json_encode([
                    "pl" => "Kontrola dróg ewakuacyjnych, gaśnic, systemów przeciwpożarowych i innych elementów istotnych dla bezpieczeństwa.",
                    "en" => "Inspecting evacuation routes, fire extinguishers, fire protection systems, and other safety-critical elements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12098,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy i wskazówek dotyczących zasad bezpieczeństwa oraz procedur postępowania w sytuacjach kryzysowych.",
                    "en" => "Providing knowledge and guidance on safety rules and crisis procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12099,
                "name" => json_encode([
                    "pl" => "Udzielanie wskazówek dotyczących postępowania w przypadku alarmu, ewakuacji oraz innych sytuacji wymagających interwencji.",
                    "en" => "Giving instructions on how to proceed in cases of alarms, evacuations, and other situations requiring intervention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12100,
                "name" => json_encode([
                    "pl" => "Nadzorowanie tłumu, dbanie o bezpieczeństwo podczas koncertów, festiwali, spotkań sportowych i innych dużych zgromadzeń.",
                    "en" => "Supervising crowds, ensuring safety during concerts, festivals, sports events, and other large gatherings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12101,
                "name" => json_encode([
                    "pl" => "Sprawdzanie biletów, kontrolowanie wejść oraz reagowanie na potencjalne zagrożenia podczas imprez masowych.",
                    "en" => "Checking tickets, controlling entrances, and responding to potential threats at mass events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12102,
                "name" => json_encode([
                    "pl" => "Dbanie o ochronę informacji, które mogą być ujawnione podczas pracy na chronionych obiektach, np. w firmach, instytucjach.",
                    "en" => "Protecting information that may be disclosed during work on protected sites, such as companies and institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12103,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad poufności danych oraz zapobieganie ich ujawnieniu osobom nieuprawnionym.",
                    "en" => "Observing data confidentiality rules and preventing unauthorized disclosure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12104,
                "name" => json_encode([
                    "pl" => "Zachowanie profesjonalizmu, neutralności i uprzejmości w kontaktach z osobami przebywającymi na terenie obiektu.",
                    "en" => "Maintaining professionalism, neutrality, and courtesy in interactions with individuals on the premises."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12105,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad etyki zawodowej, w tym szacunku dla wszystkich osób, niezależnie od sytuacji.",
                    "en" => "Following professional ethics, respecting all individuals regardless of the situation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12106,
                "name" => json_encode([
                    "pl" => "Regularne dbanie o kondycję fizyczną, aby móc skutecznie reagować w sytuacjach wymagających wysiłku fizycznego, takich jak interwencje czy pościgi.",
                    "en" => "Maintaining physical fitness to effectively respond in physically demanding situations, such as interventions or pursuits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12107,
                "name" => json_encode([
                    "pl" => "Utrzymywanie sprawności umożliwiającej szybkie reagowanie na zagrożenia.",
                    "en" => "Maintaining agility for quick threat responses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12108,
                "name" => json_encode([
                    "pl" => "Stosowanie się do przepisów BHP, dbanie o bezpieczeństwo swoje i innych oraz przestrzeganie zasad postępowania z urządzeniami ochrony osobistej.",
                    "en" => "Adhering to health and safety regulations, ensuring one's own and others' safety, and following personal protective equipment handling guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12109,
                "name" => json_encode([
                    "pl" => "Korzystanie z odpowiednich środków ochrony osobistej, takich jak kamizelki ochronne, rękawice, radiotelefony.",
                    "en" => "Using appropriate personal protective equipment, such as protective vests, gloves, radios."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12110,
                "name" => json_encode([
                    "pl" => "Regularne uczestnictwo w szkoleniach i kursach, które umożliwiają rozwój umiejętności oraz poszerzenie wiedzy z zakresu bezpieczeństwa.",
                    "en" => "Regularly attending training and courses to develop skills and expand knowledge in the field of security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12111,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy na temat nowych technologii i procedur ochrony osób i mienia.",
                    "en" => "Updating knowledge on new technologies and procedures for protecting people and property."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $technik_ochrony_fizycznej = [
            [
                "id" => 12112,
                "name" => json_encode([
                    "pl" => "Tworzenie i opracowywanie planów zabezpieczeń dla obiektów i terenów na podstawie analizy ryzyka.",
                    "en" => "Creating and developing security plans for facilities and areas based on risk analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12113,
                "name" => json_encode([
                    "pl" => "Dobór odpowiednich technologii i rozwiązań, takich jak systemy alarmowe, monitoring oraz systemy kontroli dostępu.",
                    "en" => "Selecting appropriate technologies and solutions, such as alarm systems, monitoring, and access control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12114,
                "name" => json_encode([
                    "pl" => "Montaż i konfiguracja systemów alarmowych, monitoringu wizyjnego (CCTV), systemów kontroli dostępu oraz systemów przeciwpożarowych.",
                    "en" => "Installing and configuring alarm systems, CCTV, access control, and fire protection systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12115,
                "name" => json_encode([
                    "pl" => "Zapewnienie prawidłowego działania czujników, kamer oraz innych urządzeń monitorujących zgodnie z wytycznymi bezpieczeństwa.",
                    "en" => "Ensuring proper operation of sensors, cameras, and other monitoring devices according to safety guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12116,
                "name" => json_encode([
                    "pl" => "Regularne przeglądy i konserwacja zamontowanych systemów, aby zapewnić ich niezawodność i długotrwałe działanie.",
                    "en" => "Performing regular inspections and maintenance of installed systems to ensure reliability and longevity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12117,
                "name" => json_encode([
                    "pl" => "Wymiana uszkodzonych komponentów, takich jak baterie, przewody, czujniki, oraz rozwiązywanie problemów technicznych.",
                    "en" => "Replacing damaged components, such as batteries, cables, sensors, and troubleshooting technical issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12118,
                "name" => json_encode([
                    "pl" => "Stała kontrola działania urządzeń zabezpieczających i systemów ochrony oraz monitorowanie ich stanu technicznego.",
                    "en" => "Continuous monitoring of security devices and protection systems, ensuring their technical condition."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12119,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów systemów i wykrywanie wszelkich nieprawidłowości lub usterek wymagających naprawy.",
                    "en" => "Conducting system tests and detecting any irregularities or malfunctions requiring repair."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12120,
                "name" => json_encode([
                    "pl" => "Szkolenie pracowników ochrony fizycznej w zakresie obsługi systemów zabezpieczeń oraz interpretacji sygnałów alarmowych.",
                    "en" => "Training security personnel in operating security systems and interpreting alarm signals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12121,
                "name" => json_encode([
                    "pl" => "Zapewnienie wsparcia technicznego w przypadku awarii sprzętu oraz pomoc w obsłudze systemów w sytuacjach awaryjnych.",
                    "en" => "Providing technical support in case of equipment failure and assisting in system operation during emergencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12122,
                "name" => json_encode([
                    "pl" => "Programowanie central alarmowych, rejestratorów obrazu, czytników kart dostępu oraz innych urządzeń zabezpieczających.",
                    "en" => "Programming alarm panels, image recorders, access card readers, and other security devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12123,
                "name" => json_encode([
                    "pl" => "Konfiguracja ustawień w zależności od potrzeb klienta oraz specyfiki obiektu, w celu zapewnienia optymalnego poziomu bezpieczeństwa.",
                    "en" => "Configuring settings according to client needs and facility specifics to ensure optimal security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12124,
                "name" => json_encode([
                    "pl" => "Regularne testowanie systemów alarmowych, przeciwpożarowych i monitoringu wizyjnego, aby upewnić się, że działają poprawnie.",
                    "en" => "Regularly testing alarm, fire protection, and CCTV systems to ensure proper functionality."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12125,
                "name" => json_encode([
                    "pl" => "Kalibracja urządzeń w celu zapewnienia dokładności i skuteczności systemów w wykrywaniu zagrożeń.",
                    "en" => "Calibrating devices to ensure accuracy and effectiveness in threat detection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12126,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz bezpieczeństwa i identyfikacja potencjalnych zagrożeń w celu dostosowania systemów ochrony.",
                    "en" => "Conducting security analyses and identifying potential threats to tailor protection systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12127,
                "name" => json_encode([
                    "pl" => "Opracowywanie rozwiązań zabezpieczających zgodnych z wynikami analizy ryzyka.",
                    "en" => "Developing security solutions in line with risk analysis results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12128,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur ochrony danych osobowych i poufnych, które mogą być przetwarzane w systemach monitoringu i kontroli dostępu.",
                    "en" => "Following procedures for protecting personal and confidential data processed in monitoring and access control systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12129,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że dane z systemów zabezpieczeń są dostępne tylko dla osób upoważnionych.",
                    "en" => "Ensuring security system data is accessible only to authorized personnel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12130,
                "name" => json_encode([
                    "pl" => "Ustalanie z klientami wymagań dotyczących zabezpieczeń i dostosowywanie systemów do ich specyficznych potrzeb.",
                    "en" => "Determining security requirements with clients and customizing systems to their specific needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12131,
                "name" => json_encode([
                    "pl" => "Konsultacje w zakresie wyboru rozwiązań ochrony oraz przekazywanie informacji o najlepszych praktykach bezpieczeństwa.",
                    "en" => "Consulting on protection solution choices and providing information on best security practices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12132,
                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji technicznej instalowanych systemów, w tym schematów, instrukcji obsługi i specyfikacji.",
                    "en" => "Creating technical documentation for installed systems, including diagrams, manuals, and specifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12133,
                "name" => json_encode([
                    "pl" => "Opracowywanie protokołów z testów, przeglądów i napraw oraz archiwizacja dokumentacji dotyczącej systemów ochrony.",
                    "en" => "Developing protocols for tests, inspections, and repairs, and archiving documentation related to protection systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12134,
                "name" => json_encode([
                    "pl" => "Szkolenie użytkowników, takich jak pracownicy ochrony i właściciele obiektów, w zakresie prawidłowej obsługi systemów.",
                    "en" => "Training users, such as security personnel and facility owners, in proper system operation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12135,
                "name" => json_encode([
                    "pl" => "Informowanie o sposobach reagowania na alarmy oraz podstawowych procedurach bezpieczeństwa.",
                    "en" => "Informing on how to respond to alarms and basic safety procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12136,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie audytów i przeglądów systemów ochrony w celu oceny ich skuteczności oraz zgodności z aktualnymi przepisami.",
                    "en" => "Conducting audits and reviews of protection systems to assess effectiveness and compliance with current regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12137,
                "name" => json_encode([
                    "pl" => "Identyfikowanie słabych punktów systemu ochrony i proponowanie działań naprawczych lub ulepszeń.",
                    "en" => "Identifying weak points in the protection system and proposing corrective or improvement actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12138,
                "name" => json_encode([
                    "pl" => "Regularna aktualizacja oprogramowania systemów zabezpieczeń w celu poprawy ich skuteczności oraz zapewnienia zgodności z najnowszymi standardami bezpieczeństwa.",
                    "en" => "Regularly updating security system software to enhance effectiveness and ensure compliance with the latest safety standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12139,
                "name" => json_encode([
                    "pl" => "Instalacja nowych wersji oprogramowania i wprowadzanie poprawek zgodnie z zaleceniami producentów.",
                    "en" => "Installing new software versions and applying patches as recommended by manufacturers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12140,
                "name" => json_encode([
                    "pl" => "Weryfikacja i analiza sygnałów alarmowych oraz podejmowanie działań w przypadku wykrycia zagrożeń.",
                    "en" => "Verifying and analyzing alarm signals and taking action in case of detected threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12141,
                "name" => json_encode([
                    "pl" => "Koordynacja działań w przypadku sytuacji alarmowej, takich jak pożar, włamanie lub awaria systemu.",
                    "en" => "Coordinating actions in emergency situations such as fire, burglary, or system failure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12142,
                "name" => json_encode([
                    "pl" => "Stosowanie się do zasad bezpieczeństwa i higieny pracy podczas instalacji i serwisu systemów zabezpieczeń.",
                    "en" => "Following health and safety regulations during the installation and servicing of security systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12143,
                "name" => json_encode([
                    "pl" => "Wykorzystanie odpowiednich narzędzi ochrony osobistej i procedur bezpiecznego montażu urządzeń elektrycznych.",
                    "en" => "Using appropriate personal protective equipment and safe mounting procedures for electrical devices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12144,
                "name" => json_encode([
                    "pl" => "Przestrzeganie krajowych i międzynarodowych norm bezpieczeństwa oraz przepisów prawnych dotyczących ochrony osób i mienia.",
                    "en" => "Complying with national and international safety standards and legal regulations concerning people and property protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12145,
                "name" => json_encode([
                    "pl" => "Dostosowywanie systemów do wymagań lokalnych regulacji i zapewnienie ich zgodności z aktualnymi standardami.",
                    "en" => "Adapting systems to local regulations and ensuring compliance with current standards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12146,
                "name" => json_encode([
                    "pl" => "Śledzenie najnowszych trendów i technologii w dziedzinie systemów ochrony, takich jak inteligentne kamery, systemy analizy obrazu oraz technologie biometryczne.",
                    "en" => "Keeping up with the latest trends and technologies in security systems, such as smart cameras, image analysis systems, and biometric technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12147,
                "name" => json_encode([
                    "pl" => "Wdrażanie innowacyjnych rozwiązań, które mogą poprawić skuteczność systemów ochrony osób i mienia.",
                    "en" => "Implementing innovative solutions that can enhance the effectiveness of people and property protection systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12148,
                "name" => json_encode([
                    "pl" => "Regularne sprawdzanie stanu technicznego i funkcjonalności systemów zabezpieczeń oraz dokumentowanie wyników przeglądów.",
                    "en" => "Regularly checking the technical condition and functionality of security systems and documenting inspection results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12149,
                "name" => json_encode([
                    "pl" => "Identyfikacja i usuwanie usterek, które mogą wpływać na skuteczność ochrony.",
                    "en" => "Identifying and fixing malfunctions that may affect the effectiveness of protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12150,
                "name" => json_encode([
                    "pl" => "Współpraca z inżynierami bezpieczeństwa, pracownikami ochrony oraz specjalistami IT w celu zapewnienia kompleksowej ochrony.",
                    "en" => "Collaborating with security engineers, security personnel, and IT specialists to ensure comprehensive protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12151,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z innymi jednostkami ochrony, aby skutecznie zintegrować systemy zabezpieczeń z innymi środkami ochrony.",
                    "en" => "Coordinating activities with other protection units to effectively integrate security systems with other protection measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12152,
                "name" => json_encode([
                    "pl" => "Identyfikowanie zagrożeń oraz wdrażanie środków zapobiegawczych, aby minimalizować ryzyko włamań, kradzieży lub innych incydentów.",
                    "en" => "Identifying threats and implementing preventive measures to minimize the risk of burglaries, theft, or other incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12153,
                "name" => json_encode([
                    "pl" => "Ustalanie protokołów prewencyjnych w zakresie ochrony, takich jak regularne testy alarmowe czy symulacje sytuacji awaryjnych.",
                    "en" => "Establishing preventive protocols in protection, such as regular alarm tests or emergency situation simulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12154,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach i kursach dotyczących najnowszych systemów zabezpieczeń oraz technologii ochrony fizycznej.",
                    "en" => "Participating in training and courses on the latest security systems and physical protection technologies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12155,
                "name" => json_encode([
                    "pl" => "Stałe doskonalenie umiejętności w zakresie instalacji, konserwacji i obsługi zaawansowanych systemów ochrony.",
                    "en" => "Constantly improving skills in installation, maintenance, and operation of advanced protection systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12156,
                "name" => json_encode([
                    "pl" => "Działanie zgodnie z zasadami etyki zawodowej i zapewnienie poufności danych klientów oraz informacji o systemach zabezpieczeń.",
                    "en" => "Acting in accordance with professional ethics and ensuring the confidentiality of client data and security system information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12157,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad ochrony prywatności w związku z dostępem do materiałów wideo, danych o kontrolach dostępu i innych danych zabezpieczających.",
                    "en" => "Adhering to privacy principles related to access to video materials, access control data, and other security data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $operator_kontroli_bezpieczenstwa = [
            [
                "id" => 12158,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli osób oraz ich bagażu przy użyciu urządzeń skanujących, takich jak bramki bezpieczeństwa, skanery rentgenowskie i detektory metalu.",
                    "en" => "Conducting security checks of individuals and their luggage using scanning devices such as security gates, X-ray scanners, and metal detectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12159,
                "name" => json_encode([
                    "pl" => "Upewnianie się, że nie są wnoszone żadne przedmioty zabronione, takie jak broń, materiały wybuchowe, substancje niebezpieczne lub inne zakazane przedmioty.",
                    "en" => "Ensuring that no prohibited items, such as weapons, explosives, hazardous substances, or other forbidden items, are brought in."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12160,
                "name" => json_encode([
                    "pl" => "Obsługa i monitorowanie urządzeń do prześwietlania bagażu, wykrywaczy metalu oraz skanerów ciała.",
                    "en" => "Operating and monitoring baggage scanners, metal detectors, and body scanners."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12161,
                "name" => json_encode([
                    "pl" => "Kalibracja oraz podstawowa konserwacja sprzętu kontrolnego, aby zapewnić jego niezawodność i skuteczność.",
                    "en" => "Calibrating and performing basic maintenance on control equipment to ensure reliability and effectiveness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12162,
                "name" => json_encode([
                    "pl" => "Identyfikacja i rozpoznawanie potencjalnie niebezpiecznych przedmiotów oraz podejrzanych materiałów w bagażu lub na osobach.",
                    "en" => "Identifying and recognizing potentially dangerous items and suspicious materials in baggage or on persons."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12163,
                "name" => json_encode([
                    "pl" => "Reagowanie na alarmy wskazujące na obecność przedmiotów zakazanych lub groźnych substancji.",
                    "en" => "Responding to alarms indicating the presence of prohibited items or dangerous substances."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12164,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie ręcznej kontroli bagażu i rzeczy osobistych, gdy zachodzi taka potrzeba, np. w przypadku niemożności identyfikacji przedmiotu przez skaner.",
                    "en" => "Conducting manual checks of baggage and personal items when necessary, such as when an item cannot be identified by a scanner."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12165,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli manualnej pasażerów, jeśli istnieje podejrzenie obecności zabronionych przedmiotów.",
                    "en" => "Manually screening passengers if there is suspicion of prohibited items."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12166,
                "name" => json_encode([
                    "pl" => "Stosowanie się do wewnętrznych procedur i przepisów bezpieczeństwa, w tym międzynarodowych wytycznych dotyczących ochrony lotnictwa, budynków i obiektów.",
                    "en" => "Adhering to internal procedures and security regulations, including international aviation, building, and facility protection guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12167,
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności działań z przepisami dotyczącymi bezpieczeństwa i ochrony osób, mienia oraz infrastruktury.",
                    "en" => "Ensuring actions comply with regulations on safety and protection of people, property, and infrastructure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12168,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie kontroli na bramkach wejściowych, w strefach kontrolnych, terminalach lotniskowych oraz innych miejscach, gdzie istnieje zwiększone ryzyko zagrożenia.",
                    "en" => "Conducting checks at entry gates, control areas, airport terminals, and other high-risk areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12169,
                "name" => json_encode([
                    "pl" => "Monitorowanie wejść i wyjść oraz kontrola uprawnień osób wchodzących do stref chronionych.",
                    "en" => "Monitoring entrances and exits and checking authorization of people entering protected zones."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12170,
                "name" => json_encode([
                    "pl" => "Sprawdzanie tożsamości osób korzystających z kontrolowanych obszarów i porównywanie ich danych z odpowiednimi dokumentami, np. dowodami tożsamości, paszportami, przepustkami.",
                    "en" => "Verifying identities of individuals accessing controlled areas and matching their data with relevant documents, such as IDs, passports, and passes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12171,
                "name" => json_encode([
                    "pl" => "Kontrola dokumentów podróży w strefach ochrony lotniczej, aby zapewnić bezpieczeństwo pasażerów.",
                    "en" => "Checking travel documents in aviation security areas to ensure passenger safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12172,
                "name" => json_encode([
                    "pl" => "Monitorowanie i kontrolowanie dostępu do obszarów zastrzeżonych, np. poprzez sprawdzanie przepustek, identyfikatorów i zezwoleń.",
                    "en" => "Monitoring and controlling access to restricted areas, for example by checking passes, IDs, and permits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12173,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że na teren obiektu nie dostają się osoby nieuprawnione, które mogłyby stanowić zagrożenie.",
                    "en" => "Ensuring that unauthorized individuals who may pose a threat do not enter the premises."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12174,
                "name" => json_encode([
                    "pl" => "Natychmiastowe reagowanie na alarmy generowane przez systemy bezpieczeństwa, takie jak detektory metalu, alarmy pożarowe i inne systemy ostrzegawcze.",
                    "en" => "Immediately responding to alarms triggered by security systems such as metal detectors, fire alarms, and other warning systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12175,
                "name" => json_encode([
                    "pl" => "Podejmowanie działań zabezpieczających i informowanie odpowiednich służb o sytuacjach wymagających interwencji.",
                    "en" => "Taking security measures and notifying relevant services of situations requiring intervention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12176,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów z codziennej kontroli, incydentów, wykrytych przedmiotów zabronionych oraz podejmowanych interwencji.",
                    "en" => "Preparing reports on daily checks, incidents, detected prohibited items, and interventions taken."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12177,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wszelkich nieprawidłowości oraz zdarzeń związanych z kontrolą bezpieczeństwa, aby umożliwić analizę i usprawnienie procedur.",
                    "en" => "Documenting any irregularities and events related to security control to enable analysis and improvement of procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12178,
                "name" => json_encode([
                    "pl" => "Współpraca z policją, strażą graniczną, ochroną lotniskową oraz innymi służbami bezpieczeństwa w zakresie zapewnienia ochrony.",
                    "en" => "Collaborating with police, border guards, airport security, and other security services to ensure protection."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12179,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o podejrzanych osobach lub działaniach oraz współdziałanie podczas interwencji.",
                    "en" => "Reporting suspicious individuals or activities and cooperating during interventions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12180,
                "name" => json_encode([
                    "pl" => "Monitorowanie systemów CCTV w celu identyfikacji podejrzanych zachowań i zagrożeń oraz rejestrowanie zdarzeń mogących mieć wpływ na bezpieczeństwo.",
                    "en" => "Monitoring CCTV systems to identify suspicious behavior and threats and recording events that may impact security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12181,
                "name" => json_encode([
                    "pl" => "Zgłaszanie podejrzanych sytuacji zauważonych podczas obserwacji monitoringu oraz prowadzenie dokumentacji z monitoringu.",
                    "en" => "Reporting suspicious situations noticed during CCTV monitoring and maintaining monitoring documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12182,
                "name" => json_encode([
                    "pl" => "Prześwietlanie ładunków, przesyłek i innych towarów wchodzących na teren chroniony, aby upewnić się, że nie zawierają niebezpiecznych przedmiotów.",
                    "en" => "Scanning cargo, shipments, and other goods entering the protected area to ensure they do not contain dangerous items."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12183,
                "name" => json_encode([
                    "pl" => "Weryfikacja dokumentacji przewozowej oraz zgodności zawartości przesyłek z deklarowanymi danymi.",
                    "en" => "Verifying transport documentation and ensuring shipment contents match declared data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12184,
                "name" => json_encode([
                    "pl" => "Rozpoznawanie ryzyk oraz podejrzanych sytuacji, które mogą stanowić zagrożenie dla bezpieczeństwa obiektu lub pasażerów.",
                    "en" => "Recognizing risks and suspicious situations that may pose a threat to facility or passenger security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12185,
                "name" => json_encode([
                    "pl" => "Przekazywanie spostrzeżeń na temat możliwych zagrożeń przełożonym i wdrażanie działań prewencyjnych.",
                    "en" => "Reporting observations on possible threats to supervisors and implementing preventive actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12186,
                "name" => json_encode([
                    "pl" => "Ochrona informacji poufnych i danych osobowych uzyskanych podczas kontroli.",
                    "en" => "Protecting confidential information and personal data obtained during control."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12187,
                "name" => json_encode([
                    "pl" => "Zapewnienie poufności danych osobowych pasażerów oraz przestrzeganie przepisów RODO i innych przepisów ochrony danych.",
                    "en" => "Ensuring passenger personal data confidentiality and complying with GDPR and other data protection regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12188,
                "name" => json_encode([
                    "pl" => "Zachowanie profesjonalizmu, neutralności i uprzejmości podczas kontaktu z osobami poddawanymi kontroli.",
                    "en" => "Maintaining professionalism, neutrality, and courtesy when dealing with people undergoing screening."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12189,
                "name" => json_encode([
                    "pl" => "Szacunek wobec wszystkich osób bez względu na ich narodowość, religię, płeć czy inne cechy.",
                    "en" => "Respecting all individuals regardless of nationality, religion, gender, or other characteristics."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12190,
                "name" => json_encode([
                    "pl" => "Pomoc podróżnym w zakresie przepisów bezpieczeństwa oraz udzielanie informacji o procedurach kontrolnych.",
                    "en" => "Assisting travelers with security regulations and providing information on screening procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12191,
                "name" => json_encode([
                    "pl" => "Wskazywanie, jak prawidłowo przygotować się do kontroli, aby przebiegała sprawnie i bez komplikacji.",
                    "en" => "Advising on how to properly prepare for screening to ensure a smooth and uncomplicated process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12192,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w szkoleniach z zakresu wykrywania zagrożeń, obsługi sprzętu oraz aktualizacji przepisów dotyczących bezpieczeństwa.",
                    "en" => "Participating in training on threat detection, equipment operation, and updates to security regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12193,
                "name" => json_encode([
                    "pl" => "Stałe podnoszenie kwalifikacji, aby być na bieżąco z nowymi technikami i metodami przeciwdziałania zagrożeniom.",
                    "en" => "Continuously improving skills to stay updated with new techniques and methods of threat prevention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12194,
                "name" => json_encode([
                    "pl" => "Dbanie o kondycję fizyczną i zdolność do reagowania w sytuacjach stresowych lub wymagających szybkiej interwencji.",
                    "en" => "Maintaining physical fitness and readiness to respond in stressful or high-intervention situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12195,
                "name" => json_encode([
                    "pl" => "Praca nad odpornością na stres oraz rozwijanie umiejętności działania pod presją.",
                    "en" => "Developing stress resilience and the ability to act under pressure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12196,
                "name" => json_encode([
                    "pl" => "Zachowanie opanowania i profesjonalizmu podczas sytuacji kryzysowych, takich jak zagrożenie bombowe, alarm pożarowy czy inne incydenty.",
                    "en" => "Maintaining composure and professionalism during crisis situations such as bomb threats, fire alarms, and other incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12197,
                "name" => json_encode([
                    "pl" => "Wdrożenie procedur bezpieczeństwa oraz współpraca z odpowiednimi służbami w celu minimalizacji zagrożeń.",
                    "en" => "Implementing safety procedures and working with relevant services to minimize risks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12198,
                "name" => json_encode([
                    "pl" => "Identyfikacja potencjalnych zagrożeń oraz wdrażanie działań prewencyjnych, takich jak dodatkowe kontrole czy wzmożona obserwacja.",
                    "en" => "Identifying potential threats and implementing preventive measures, such as additional checks or heightened observation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12199,
                "name" => json_encode([
                    "pl" => "Rekomendowanie rozwiązań zwiększających bezpieczeństwo oraz aktualizacja procedur w odpowiedzi na nowe zagrożenia.",
                    "en" => "Recommending solutions to enhance security and updating procedures in response to new threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $pracownik_obslugi_monitoringu = [
            [
                "id" => 12200,
                "name" => json_encode([
                    "pl" => "Stała obserwacja obrazów z kamer monitoringu, aby identyfikować podejrzane sytuacje, zdarzenia oraz potencjalne zagrożenia.",
                    "en" => "Constantly observing images from surveillance cameras to identify suspicious situations, events, and potential threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12201,
                "name" => json_encode([
                    "pl" => "Utrzymywanie czujności przez cały czas pracy, by szybko reagować na nietypowe zdarzenia.",
                    "en" => "Maintaining vigilance throughout working hours to quickly respond to unusual events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12202,
                "name" => json_encode([
                    "pl" => "Wykrywanie i dokumentowanie zachowań osób, które mogą stanowić zagrożenie dla bezpieczeństwa, takich jak wtargnięcie na teren obiektu, wandalizm, kradzież.",
                    "en" => "Detecting and documenting behaviors that may pose a security threat, such as trespassing, vandalism, or theft."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12203,
                "name" => json_encode([
                    "pl" => "Monitorowanie sytuacji i przekazywanie informacji o wykrytych zagrożeniach służbom ochrony lub odpowiednim osobom.",
                    "en" => "Monitoring situations and passing information about detected threats to security or relevant personnel."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12204,
                "name" => json_encode([
                    "pl" => "Szybka reakcja na alarmy generowane przez systemy bezpieczeństwa, np. alarmy antywłamaniowe, pożarowe, alarmy ruchu.",
                    "en" => "Quickly responding to alarms triggered by security systems, such as burglary, fire, and motion alarms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12205,
                "name" => json_encode([
                    "pl" => "Informowanie odpowiednich służb, np. ochrony, straży pożarnej, policji, w przypadku sytuacji kryzysowych.",
                    "en" => "Informing relevant services, such as security, fire department, or police, in case of crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12206,
                "name" => json_encode([
                    "pl" => "Regularna obsługa sprzętu monitoringu, w tym kamer, rejestratorów obrazu, ekranów kontrolnych.",
                    "en" => "Regularly operating monitoring equipment, including cameras, image recorders, and control screens."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12207,
                "name" => json_encode([
                    "pl" => "Utrzymywanie sprzętu w dobrym stanie technicznym i zgłaszanie wszelkich usterek lub problemów technicznych.",
                    "en" => "Keeping equipment in good technical condition and reporting any malfunctions or technical issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12208,
                "name" => json_encode([
                    "pl" => "Archiwizacja nagrań zgodnie z procedurami, aby zapewnić możliwość ich późniejszego wykorzystania.",
                    "en" => "Archiving recordings according to procedures to ensure they can be used later if needed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12209,
                "name" => json_encode([
                    "pl" => "Zapewnienie bezpieczeństwa danych oraz dostępności nagrań tylko dla osób uprawnionych, zgodnie z przepisami o ochronie danych osobowych.",
                    "en" => "Ensuring data security and making recordings available only to authorized individuals, in compliance with data protection regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12210,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów i dokumentacji dotyczących incydentów zarejestrowanych na monitoringu.",
                    "en" => "Preparing reports and documentation on incidents recorded on surveillance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12211,
                "name" => json_encode([
                    "pl" => "Dokumentowanie wszelkich zdarzeń, podejrzanych zachowań oraz interwencji w celu zachowania szczegółowej ewidencji.",
                    "en" => "Documenting all events, suspicious behaviors, and interventions to maintain detailed records."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12212,
                "name" => json_encode([
                    "pl" => "Monitorowanie wejść i wyjść w celu zapobiegania nieautoryzowanemu dostępowi do obszarów chronionych.",
                    "en" => "Monitoring entries and exits to prevent unauthorized access to protected areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12213,
                "name" => json_encode([
                    "pl" => "Weryfikacja uprawnień osób próbujących wejść na teren obiektu lub stref zastrzeżonych.",
                    "en" => "Verifying credentials of individuals attempting to enter the facility or restricted areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12214,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad poufności oraz ochrony danych osobowych uzyskanych podczas monitorowania.",
                    "en" => "Following confidentiality and personal data protection guidelines for information obtained during surveillance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12215,
                "name" => json_encode([
                    "pl" => "Dbanie o to, aby informacje uzyskane z monitoringu nie były wykorzystywane niezgodnie z przeznaczeniem lub udostępniane osobom nieuprawnionym.",
                    "en" => "Ensuring that surveillance information is not misused or shared with unauthorized persons."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12216,
                "name" => json_encode([
                    "pl" => "Utrzymywanie bieżącej komunikacji z zespołami ochrony, policją, strażą pożarną i innymi służbami w przypadku incydentów.",
                    "en" => "Maintaining ongoing communication with security teams, police, fire departments, and other services during incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12217,
                "name" => json_encode([
                    "pl" => "Przekazywanie zgromadzonych dowodów lub raportów służbom odpowiedzialnym za interwencję lub dochodzenie.",
                    "en" => "Providing gathered evidence or reports to services responsible for intervention or investigation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12218,
                "name" => json_encode([
                    "pl" => "Monitorowanie i obsługa systemów alarmowych zintegrowanych z systemem monitoringu.",
                    "en" => "Monitoring and operating alarm systems integrated with the surveillance system."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12219,
                "name" => json_encode([
                    "pl" => "Podejmowanie natychmiastowych działań, gdy system alarmowy wykryje zagrożenie, np. próba włamania, pożar.",
                    "en" => "Taking immediate action when the alarm system detects a threat, such as a break-in or fire."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12220,
                "name" => json_encode([
                    "pl" => "Współpraca z przełożonymi w celu optymalizacji ustawień kamer, ich pozycji oraz zakresu widoczności.",
                    "en" => "Working with supervisors to optimize camera settings, positions, and visibility range."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12221,
                "name" => json_encode([
                    "pl" => "Rekomendowanie dodatkowych środków monitorujących w miejscach o zwiększonym ryzyku.",
                    "en" => "Recommending additional monitoring measures in high-risk areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12222,
                "name" => json_encode([
                    "pl" => "Regularne sprawdzanie działania kamer i systemów monitoringu, aby upewnić się, że funkcjonują bez zakłóceń.",
                    "en" => "Regularly checking camera and monitoring system functionality to ensure they operate without disruption."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12223,
                "name" => json_encode([
                    "pl" => "Zgłaszanie problemów technicznych zespołom wsparcia technicznego i monitorowanie procesu ich naprawy.",
                    "en" => "Reporting technical issues to support teams and monitoring the repair process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12224,
                "name" => json_encode([
                    "pl" => "Przegląd materiałów wideo w przypadku incydentów, takich jak kradzież, napaść lub inne zdarzenia wymagające wyjaśnienia.",
                    "en" => "Reviewing video footage in case of incidents, such as theft, assault, or other events requiring clarification."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12225,
                "name" => json_encode([
                    "pl" => "Wyszukiwanie i dostarczanie odpowiednich nagrań zespołom dochodzeniowym lub odpowiednim służbom.",
                    "en" => "Searching and providing relevant recordings to investigative teams or appropriate services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12226,
                "name" => json_encode([
                    "pl" => "Dbanie o bezpieczeństwo własne i innych w miejscu pracy, stosowanie się do procedur BHP i zasad ochrony mienia.",
                    "en" => "Ensuring personal and colleague safety at the workplace by adhering to OHS procedures and property protection rules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12227,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach z zakresu zasad bezpieczeństwa pracy.",
                    "en" => "Participating in safety training sessions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12228,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych pracowników w procedury monitoringu i zapewnianie wsparcia w pierwszych dniach pracy.",
                    "en" => "Onboarding new employees in monitoring procedures and providing support in the first days of work."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12229,
                "name" => json_encode([
                    "pl" => "Przekazywanie wiedzy na temat obsługi urządzeń monitorujących, interpretacji zdarzeń oraz sporządzania raportów.",
                    "en" => "Sharing knowledge about monitoring equipment operation, event interpretation, and report writing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12230,
                "name" => json_encode([
                    "pl" => "Regularne uczestnictwo w szkoleniach z zakresu bezpieczeństwa, obsługi systemów monitoringu oraz aktualizacji przepisów.",
                    "en" => "Regularly attending training sessions on safety, monitoring system operation, and regulatory updates."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12231,
                "name" => json_encode([
                    "pl" => "Dbanie o aktualność wiedzy na temat nowych technologii i systemów wykorzystywanych w monitoringu.",
                    "en" => "Keeping knowledge updated on new technologies and systems used in monitoring."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12232,
                "name" => json_encode([
                    "pl" => "Monitorowanie, czy obecny system monitoringu jest skuteczny i czy pokrywa wszystkie kluczowe obszary obiektu.",
                    "en" => "Monitoring whether the current surveillance system is effective and covers all critical areas of the facility."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12233,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami technicznymi i ochrony w celu optymalizacji zakresu monitoringu.",
                    "en" => "Collaborating with technical and security teams to optimize the scope of surveillance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12234,
                "name" => json_encode([
                    "pl" => "Dbanie o to, aby nagrania z monitoringu były nienaruszone i mogły być wykorzystywane jako dowód w przypadku dochodzeń.",
                    "en" => "Ensuring surveillance recordings are intact and can be used as evidence in investigations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12235,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że nagrania są archiwizowane w sposób zgodny z przepisami i dostępne na potrzeby analiz.",
                    "en" => "Ensuring recordings are archived in compliance with regulations and available for analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12236,
                "name" => json_encode([
                    "pl" => "Zachowanie opanowania i profesjonalnego podejścia do pracy, zwłaszcza w sytuacjach kryzysowych, np. alarmach, zagrożeniach.",
                    "en" => "Maintaining composure and a professional approach, especially in crisis situations such as alarms or threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12237,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami odpowiedzialnymi za interwencje oraz postępowanie zgodnie z procedurami awaryjnymi.",
                    "en" => "Collaborating with intervention teams and following emergency procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12238,
                "name" => json_encode([
                    "pl" => "Identyfikacja i dokumentowanie alarmów fałszywych oraz weryfikacja, czy alarm jest uzasadniony.",
                    "en" => "Identifying and documenting false alarms and verifying the validity of alarms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12239,
                "name" => json_encode([
                    "pl" => "Sprawdzenie i wyjaśnienie przyczyn alarmów, aby minimalizować ich występowanie w przyszłości.",
                    "en" => "Investigating and explaining the causes of alarms to minimize their occurrence in the future."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12240,
                "name" => json_encode([
                    "pl" => "Sporządzanie regularnych raportów dotyczących działań monitoringu, incydentów i obserwowanych zagrożeń.",
                    "en" => "Preparing regular reports on surveillance activities, incidents, and observed threats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12241,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji i analiz na temat bezpieczeństwa obiektu oraz rekomendowanie działań naprawczych.",
                    "en" => "Providing information and analyses on facility security and recommending corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12242,
                "name" => json_encode([
                    "pl" => "Współpraca z kierownictwem w celu aktualizacji procedur i wytycznych, aby dostosować je do zmieniających się wymogów bezpieczeństwa.",
                    "en" => "Working with management to update procedures and guidelines to adapt to changing security requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12243,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych procedur, które mogą poprawić efektywność monitoringu oraz zabezpieczenia obiektu.",
                    "en" => "Implementing new procedures that can enhance the effectiveness of surveillance and facility security."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ratownik_wodny = [
            [
                "id" => 12244,
                "name" => json_encode([
                    "pl" => "Stałe obserwowanie kąpiących się oraz osób przebywających w wodzie, aby szybko reagować na wszelkie sytuacje zagrożenia.",
                    "en" => "Constantly observing swimmers and individuals in the water to quickly respond to any hazardous situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12245,
                "name" => json_encode([
                    "pl" => "Patrolowanie przydzielonego obszaru, zarówno z brzegu, jak i na wodzie, aby zapobiegać niebezpiecznym sytuacjom.",
                    "en" => "Patrolling the assigned area, both from the shore and on the water, to prevent dangerous situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12246,
                "name" => json_encode([
                    "pl" => "Wskazywanie zagrożeń użytkownikom kąpieliska i informowanie ich o zasadach bezpiecznego zachowania.",
                    "en" => "Alerting beachgoers to hazards and informing them about safe behavior guidelines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12247,
                "name" => json_encode([
                    "pl" => "Kontrolowanie, aby nie wnoszono do wody sprzętu i przedmiotów zagrażających bezpieczeństwu innych osób oraz egzekwowanie zakazu skakania do wody w miejscach niedozwolonych.",
                    "en" => "Ensuring that no dangerous equipment or items are brought into the water and enforcing rules against jumping into the water in unauthorized areas."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12248,
                "name" => json_encode([
                    "pl" => "Szybka interwencja w przypadku zauważenia osoby w trudnej sytuacji, np. tonącej, i podjęcie działań ratunkowych.",
                    "en" => "Quickly intervening if someone is in distress, such as drowning, and initiating rescue actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12249,
                "name" => json_encode([
                    "pl" => "Wykonywanie resuscytacji krążeniowo-oddechowej (RKO) oraz stosowanie innych technik pierwszej pomocy przedmedycznej w razie potrzeby.",
                    "en" => "Performing CPR and using other first aid techniques as needed."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12250,
                "name" => json_encode([
                    "pl" => "Regularne sprawdzanie stanu kąpieliska, w tym czystości wody, obecności przeszkód pod wodą, takich jak kamienie lub gałęzie, oraz sprawności sprzętu ratunkowego.",
                    "en" => "Regularly checking the condition of the swimming area, including water cleanliness, underwater obstacles, and rescue equipment readiness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12251,
                "name" => json_encode([
                    "pl" => "Informowanie przełożonych lub odpowiednich służb o wszelkich nieprawidłowościach lub zagrożeniach wymagających interwencji.",
                    "en" => "Reporting any irregularities or hazards requiring intervention to supervisors or relevant services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12252,
                "name" => json_encode([
                    "pl" => "Regularne sprawdzanie i konserwacja sprzętu ratunkowego, takiego jak koła ratunkowe, boje, liny ratunkowe, wiosła, łodzie i deski ratunkowe.",
                    "en" => "Regularly inspecting and maintaining rescue equipment, such as life rings, buoys, rescue ropes, oars, boats, and rescue boards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12253,
                "name" => json_encode([
                    "pl" => "Dbanie o sprawność sprzętu medycznego, np. apteczki, zestawów do resuscytacji, i wymiana zużytych materiałów.",
                    "en" => "Ensuring the functionality of medical equipment, such as first aid kits and resuscitation sets, and replacing used materials."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12254,
                "name" => json_encode([
                    "pl" => "Obserwacja zmian pogody oraz stanu wody (np. prądów wodnych, fal), aby zapobiegać ryzykownym sytuacjom.",
                    "en" => "Monitoring weather changes and water conditions (e.g., currents, waves) to prevent risky situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12255,
                "name" => json_encode([
                    "pl" => "Oznaczanie kąpieliska w zależności od warunków pogodowych i w razie potrzeby wywieszanie flagi informującej o zakazie kąpieli.",
                    "en" => "Marking the swimming area based on weather conditions and, if necessary, raising a flag indicating a swimming ban."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12256,
                "name" => json_encode([
                    "pl" => "Wyznaczanie stref bezpiecznego pływania oraz odpowiednie oznaczenie ich, np. bojami lub flagami.",
                    "en" => "Designating safe swimming zones and marking them appropriately, e.g., with buoys or flags."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12257,
                "name" => json_encode([
                    "pl" => "Zapewnienie, że osoby korzystające z kąpieliska pozostają w obszarze bezpiecznym i nie przekraczają strefy kąpieliskowej.",
                    "en" => "Ensuring that beachgoers remain within the safe area and do not go beyond the designated swimming zone."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12258,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad dotyczących maksymalnej liczby osób na kąpielisku lub basenie, aby uniknąć przeciążenia oraz zapewnić efektywną obserwację.",
                    "en" => "Adhering to the rules on maximum capacity at the beach or pool to avoid overcrowding and ensure effective observation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12259,
                "name" => json_encode([
                    "pl" => "Informowanie użytkowników o konieczności ograniczenia liczby osób, gdy obiekt osiągnie swoje maksymalne obciążenie.",
                    "en" => "Informing users about the need to limit the number of people when the facility reaches its maximum capacity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12260,
                "name" => json_encode([
                    "pl" => "Koordynacja działań z policją wodną, strażą pożarną, służbą medyczną i innymi jednostkami w przypadku poważnych incydentów.",
                    "en" => "Coordinating actions with water police, fire department, medical services, and other units in the event of major incidents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12261,
                "name" => json_encode([
                    "pl" => "Informowanie służb o potrzebie interwencji i udzielanie wsparcia w działaniach ratunkowych.",
                    "en" => "Informing services about the need for intervention and providing support in rescue operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12262,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji na temat zasad bezpieczeństwa i etykiety na kąpieliskach, w tym nauczanie dzieci i dorosłych o podstawowych zasadach zachowania w wodzie.",
                    "en" => "Providing information on safety rules and beach etiquette, including educating children and adults on basic water safety."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12263,
                "name" => json_encode([
                    "pl" => "Organizowanie pokazów pierwszej pomocy oraz edukacja w zakresie reagowania w sytuacjach zagrożenia.",
                    "en" => "Organizing first aid demonstrations and educating on emergency response."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12264,
                "name" => json_encode([
                    "pl" => "Regularne ćwiczenia doskonalące umiejętności ratownicze, takie jak techniki ratowania tonących, holowanie oraz działania na łodzi lub desce ratunkowej.",
                    "en" => "Regularly practicing rescue skills, such as drowning rescue techniques, towing, and using rescue boats or boards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12265,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie symulacji sytuacji awaryjnych w celu utrzymania wysokiej gotowości do działania.",
                    "en" => "Conducting emergency simulations to maintain high readiness for action."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12266,
                "name" => json_encode([
                    "pl" => "Codzienna ocena stanu kąpieliska, aby zidentyfikować potencjalne zagrożenia, np. nagromadzenie ostrych przedmiotów, niski poziom wody czy prądy wodne.",
                    "en" => "Daily assessing the swimming area to identify potential hazards, such as sharp objects, low water levels, or currents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12267,
                "name" => json_encode([
                    "pl" => "Wprowadzanie działań prewencyjnych, które zapobiegają wypadkom, oraz informowanie użytkowników o wszelkich zagrożeniach.",
                    "en" => "Implementing preventive measures to prevent accidents and informing users of any hazards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12268,
                "name" => json_encode([
                    "pl" => "Dbanie o czystość i porządek na terenie kąpieliska oraz zapobieganie zaśmiecaniu wody i brzegu.",
                    "en" => "Maintaining cleanliness and order at the swimming area and preventing littering of water and the shore."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12269,
                "name" => json_encode([
                    "pl" => "Edukowanie użytkowników na temat konieczności dbania o środowisko naturalne i informowanie o zakazie niszczenia roślinności wodnej oraz siedlisk zwierząt.",
                    "en" => "Educating users on the importance of protecting the natural environment and informing about the prohibition of damaging aquatic vegetation and animal habitats."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12270,
                "name" => json_encode([
                    "pl" => "Używanie sprzętu łączności, aby pozostawać w kontakcie z innymi ratownikami oraz służbami bezpieczeństwa.",
                    "en" => "Using communication equipment to stay in contact with other lifeguards and security services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12271,
                "name" => json_encode([
                    "pl" => "Komunikowanie się na bieżąco w sprawie zagrożeń, potrzebnej pomocy oraz koordynacji działań ratowniczych.",
                    "en" => "Maintaining ongoing communication regarding hazards, assistance needs, and coordinating rescue efforts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12272,
                "name" => json_encode([
                    "pl" => "Egzekwowanie regulaminu kąpieliska oraz zasad bezpieczeństwa, w tym ograniczeń wiekowych i innych zasad dotyczących korzystania z obiektu.",
                    "en" => "Enforcing beach rules and safety guidelines, including age restrictions and other usage regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12273,
                "name" => json_encode([
                    "pl" => "Informowanie użytkowników o konieczności stosowania się do zasad i podejmowanie działań dyscyplinujących w razie potrzeby.",
                    "en" => "Informing users about the need to follow rules and taking disciplinary actions if necessary."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12274,
                "name" => json_encode([
                    "pl" => "Sporządzanie raportów z interwencji oraz wszelkich incydentów na kąpielisku, takich jak wypadki, urazy, zdarzenia ratunkowe.",
                    "en" => "Preparing reports on interventions and any incidents at the beach, such as accidents, injuries, and rescue events."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12275,
                "name" => json_encode([
                    "pl" => "Dokumentowanie użycia sprzętu ratunkowego, zdarzeń wymagających interwencji oraz działań prewencyjnych.",
                    "en" => "Documenting the use of rescue equipment, incidents requiring intervention, and preventive actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12276,
                "name" => json_encode([
                    "pl" => "Regularne uczestnictwo w kursach doskonalących, szkoleniach z zakresu pierwszej pomocy oraz technik ratowniczych.",
                    "en" => "Regularly participating in improvement courses, first aid training, and rescue technique workshops."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12277,
                "name" => json_encode([
                    "pl" => "Aktualizacja wiedzy i umiejętności w zakresie najnowszych technik ratunkowych oraz przepisów dotyczących ratownictwa wodnego.",
                    "en" => "Updating knowledge and skills in the latest rescue techniques and water rescue regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12278,
                "name" => json_encode([
                    "pl" => "Utrzymywanie wysokiego poziomu sprawności fizycznej, aby móc skutecznie podejmować akcje ratunkowe w wodzie.",
                    "en" => "Maintaining a high level of physical fitness to effectively carry out rescue operations in the water."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12279,
                "name" => json_encode([
                    "pl" => "Regularne treningi pływackie oraz ćwiczenia wzmacniające kondycję i siłę, aby być w pełnej gotowości do działań ratunkowych.",
                    "en" => "Regular swimming training and conditioning exercises to remain fully prepared for rescue operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12280,
                "name" => json_encode([
                    "pl" => "Praca pod presją, zachowanie opanowania oraz odpowiedzialność za swoje działania podczas incydentów wymagających natychmiastowej interwencji.",
                    "en" => "Working under pressure, staying calm, and being responsible for actions during incidents requiring immediate intervention."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12281,
                "name" => json_encode([
                    "pl" => "Szybkie podejmowanie decyzji oraz odpowiednie działania, które przyczyniają się do skutecznego zarządzania kryzysowymi sytuacjami.",
                    "en" => "Making quick decisions and taking appropriate actions to effectively manage crisis situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12282,
                "name" => json_encode([
                    "pl" => "Stosowanie się do zasad bezpieczeństwa i higieny pracy, aby chronić siebie i innych ratowników podczas działań na kąpielisku.",
                    "en" => "Following safety and hygiene rules to protect oneself and other lifeguards during beach operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12283,
                "name" => json_encode([
                    "pl" => "Korzystanie z odpowiednich środków ochrony indywidualnej, np. rękawic, kamizelek asekuracyjnych, zwłaszcza w trudnych warunkach pogodowych lub wodnych.",
                    "en" => "Using appropriate personal protective equipment, such as gloves and life vests, especially in difficult weather or water conditions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12284,
                "name" => json_encode([
                    "pl" => "Dbanie o komfort użytkowników kąpieliska, np. pomaganie osobom starszym i dzieciom w korzystaniu z kąpieliska.",
                    "en" => "Ensuring the comfort of beachgoers, such as assisting the elderly and children in using the swimming area."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 12285,
                "name" => json_encode([
                    "pl" => "Odpowiadanie na pytania i udzielanie pomocy osobom potrzebującym wsparcia w wodzie lub na brzegu.",
                    "en" => "Responding to questions and providing assistance to individuals needing support in the water or onshore."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];


        DB::table('detail_projects')->insert(array_merge(
            $KIEROWNIK_REWIRU_POSTERUNKU_POLICJI,
            $KOMENDANT_POLICJI_POWIATOWY_MIEJSKI_REJONOWY_KOMISARIATU,
            $KOMENDANT_STRAŻY_GMINNEJ_MIEJSKIEJ,
            $KOMENDANT_POWIATOWY_MIEJSKI_PAŃSTWOWEJ_STRAŻY_POŻARNEJ,
            $WYCHOWAWCA_W_JEDNOSTKACH_PENITENCJARNYCH,
            $TECHNIK_POŻARNICTWA,
            $FUNKCJONARIUSZE_CELNI_I_OCHRONY_GRANIC,
            $NEGOCJATOR_POLICYJNY,
            $POLICJANT_SŁUŻBY_KRYMINALNEJ,
            $TECHNIK_KRYMINALISTYKI,
            $policjant_sluzby_preventyjne,
            $policjant_sluzby_wspomagajacej,
            $policjant_sluzby_kontrterrorystycznej,
            $policjant_sluzby_spraw_wewnetrznych,
            $policjant_sluzby_sledczej,
            $funkcjonariusze_sluzby_wieziennej,
            $funkcjonariusze_sluzby_specjalnej,
            $strazacy,
            $straznicy_w_zakladach_dla_nieletnich,
            $funkcjonariusz_sluzby_ochrony_panstwa,
            $straznik_gminny_miejski,
            $straznik_strazy_marszalkowskiej,
            $funkcjonariusz_strazy_ochrony_kolei,
            $szeregowi_zawodowi_sil_zbrojnych,
            $straznik_lesny,
            $straznik_lowiecki,
            $strażnik_rybacki,
            $analityk_kryminalny,
            $inspektor_inspekcji_transportu_drogowego,
            $technik_systemow_zabezpieczen,
            $pracownik_ochrony_fizycznej,
            $technik_ochrony_fizycznej,
            $operator_kontroli_bezpieczenstwa,
            $pracownik_obslugi_monitoringu,
            $ratownik_wodny
            ));

        Category::whereId('387')->first()->detailprojects()->attach(collect($KIEROWNIK_REWIRU_POSTERUNKU_POLICJI)->pluck('id')->toArray());
        Category::whereId('388')->first()->detailprojects()->attach(collect($KOMENDANT_POLICJI_POWIATOWY_MIEJSKI_REJONOWY_KOMISARIATU)->pluck('id')->toArray());
        Category::whereId('389')->first()->detailprojects()->attach(collect($KOMENDANT_STRAŻY_GMINNEJ_MIEJSKIEJ)->pluck('id')->toArray());
        Category::whereId('390')->first()->detailprojects()->attach(collect($KOMENDANT_POWIATOWY_MIEJSKI_PAŃSTWOWEJ_STRAŻY_POŻARNEJ)->pluck('id')->toArray());
        Category::whereId('391')->first()->detailprojects()->attach(collect($WYCHOWAWCA_W_JEDNOSTKACH_PENITENCJARNYCH)->pluck('id')->toArray());
        Category::whereId('392')->first()->detailprojects()->attach(collect($TECHNIK_POŻARNICTWA)->pluck('id')->toArray());
        Category::whereId('393')->first()->detailprojects()->attach(collect($FUNKCJONARIUSZE_CELNI_I_OCHRONY_GRANIC)->pluck('id')->toArray());
        Category::whereId('400')->first()->detailprojects()->attach(collect($NEGOCJATOR_POLICYJNY)->pluck('id')->toArray());
        Category::whereId('401')->first()->detailprojects()->attach(collect($POLICJANT_SŁUŻBY_KRYMINALNEJ)->pluck('id')->toArray());
        Category::whereId('402')->first()->detailprojects()->attach(collect($TECHNIK_KRYMINALISTYKI)->pluck('id')->toArray());
        Category::whereId('403')->first()->detailprojects()->attach(collect($policjant_sluzby_preventyjne)->pluck('id')->toArray());
        Category::whereId('404')->first()->detailprojects()->attach(collect($policjant_sluzby_wspomagajacej)->pluck('id')->toArray());
        Category::whereId('406')->first()->detailprojects()->attach(collect($policjant_sluzby_kontrterrorystycznej)->pluck('id')->toArray());
        Category::whereId('407')->first()->detailprojects()->attach(collect($policjant_sluzby_spraw_wewnetrznych)->pluck('id')->toArray());
        Category::whereId('408')->first()->detailprojects()->attach(collect($policjant_sluzby_sledczej)->pluck('id')->toArray());
        Category::whereId('413')->first()->detailprojects()->attach(collect($funkcjonariusze_sluzby_wieziennej)->pluck('id')->toArray());
        Category::whereId('414')->first()->detailprojects()->attach(collect($strazacy)->pluck('id')->toArray());
        Category::whereId('415')->first()->detailprojects()->attach(collect($straznicy_w_zakladach_dla_nieletnich)->pluck('id')->toArray());
        Category::whereId('416')->first()->detailprojects()->attach(collect($funkcjonariusz_sluzby_ochrony_panstwa)->pluck('id')->toArray());
        Category::whereId('417')->first()->detailprojects()->attach(collect($straznik_gminny_miejski)->pluck('id')->toArray());
        Category::whereId('418')->first()->detailprojects()->attach(collect($straznik_strazy_marszalkowskiej)->pluck('id')->toArray());
        Category::whereId('419')->first()->detailprojects()->attach(collect($funkcjonariusz_strazy_ochrony_kolei)->pluck('id')->toArray());
        Category::whereId('420')->first()->detailprojects()->attach(collect($szeregowi_zawodowi_sil_zbrojnych)->pluck('id')->toArray());
        Category::whereId('421')->first()->detailprojects()->attach(collect($straznik_lesny)->pluck('id')->toArray());
        Category::whereId('422')->first()->detailprojects()->attach(collect($straznik_lowiecki)->pluck('id')->toArray());
        Category::whereId('423')->first()->detailprojects()->attach(collect($strażnik_rybacki)->pluck('id')->toArray());
        Category::whereId('424')->first()->detailprojects()->attach(collect($analityk_kryminalny)->pluck('id')->toArray());
        Category::whereId('425')->first()->detailprojects()->attach(collect($inspektor_inspekcji_transportu_drogowego)->pluck('id')->toArray());
        Category::whereId('427')->first()->detailprojects()->attach(collect($technik_systemow_zabezpieczen)->pluck('id')->toArray());
        Category::whereId('428')->first()->detailprojects()->attach(collect($pracownik_ochrony_fizycznej)->pluck('id')->toArray());
        Category::whereId('429')->first()->detailprojects()->attach(collect($technik_ochrony_fizycznej)->pluck('id')->toArray());
        Category::whereId('430')->first()->detailprojects()->attach(collect($operator_kontroli_bezpieczenstwa)->pluck('id')->toArray());
        Category::whereId('431')->first()->detailprojects()->attach(collect($pracownik_obslugi_monitoringu)->pluck('id')->toArray());
        Category::whereId('433')->first()->detailprojects()->attach(collect($ratownik_wodny)->pluck('id')->toArray());
    }
}
