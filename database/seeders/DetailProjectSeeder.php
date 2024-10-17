<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('detail_projects')->truncate();

        $KIEROWNIKSALISPRZEDAŻY  = [
            [
                'id' => 1,
                'name' => json_encode([
                    'pl' => 'Organizacja pracy pracowników',
                    'en' => 'Organization of employees\' work'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => json_encode([
                    'pl' => 'Rekrutacja i szkolenie personelu',
                    'en' => 'Recruitment and training of staff'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'name' => json_encode([
                    'pl' => 'Motywowanie zespołu',
                    'en' => 'Motivating the team'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'name' => json_encode([
                    'pl' => 'Ocena pracy pracowników',
                    'en' => 'Employee performance evaluation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'name' => json_encode([
                    'pl' => 'Kontrola przestrzegania standardów dotyczących obsługi klienta i zasad BHP',
                    'en' => 'Control of compliance with customer service standards and health and safety regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'name' => json_encode([
                    'pl' => 'Organizacja i kontrola ekspozycji towarów na półkach, zgodnie z wytycznymi i strategią sprzedażową sklepu',
                    'en' => 'Organization and control of product display on shelves, in line with store\'s guidelines and sales strategy'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'name' => json_encode([
                    'pl' => 'Bieżąca kontrola stanu zatowarowania',
                    'en' => 'Ongoing stock control'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'name' => json_encode([
                    'pl' => 'Dbałość o estetykę i porządek na sali sprzedaży',
                    'en' => 'Ensuring aesthetics and order on the sales floor'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'name' => json_encode([
                    'pl' => 'Oznaczenia cenowe i promocyjne',
                    'en' => 'Price and promotional signage'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wyników sprzedaży, analizowanie danych i podejmowanie działań mających na celu realizację założonych celów',
                    'en' => 'Monitoring sales performance, analyzing data, and taking action to achieve goals'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11,
                'name' => json_encode([
                    'pl' => 'Organizowanie i koordynowanie promocji na sali sprzedaży',
                    'en' => 'Organizing and coordinating promotions on the sales floor'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 12,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem marketingu',
                    'en' => 'Collaboration with the marketing department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 13,
                'name' => json_encode([
                    'pl' => 'Analiza danych sprzedażowych',
                    'en' => 'Sales data analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 14,
                'name' => json_encode([
                    'pl' => 'Zapewnienie wysokiego poziomu obsługi klienta',
                    'en' => 'Ensuring high levels of customer service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 15,
                'name' => json_encode([
                    'pl' => 'Reagowanie na reklamacje i uwagi klientów',
                    'en' => 'Responding to customer complaints and feedback'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 16,
                'name' => json_encode([
                    'pl' => 'Monitorowanie stanów magazynowych',
                    'en' => 'Monitoring stock levels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 17,
                'name' => json_encode([
                    'pl' => 'Składanie zamówień',
                    'en' => 'Placing orders'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 18,
                'name' => json_encode([
                    'pl' => 'Kontrola terminów ważności produktów',
                    'en' => 'Controlling product expiration dates'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 19,
                'name' => json_encode([
                    'pl' => 'Minimalizowanie strat',
                    'en' => 'Minimizing losses'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem logistyki',
                    'en' => 'Cooperation with the logistics department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21,
                'name' => json_encode([
                    'pl' => 'Komunikacja z działem zakupów',
                    'en' => 'Communication with the purchasing department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 22,
                'name' => json_encode([
                    'pl' => 'Kontrola kosztów związanych z funkcjonowaniem sali sprzedaży',
                    'en' => 'Controlling costs associated with the operation of the sales floor'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 23,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem ochrony',
                    'en' => 'Cooperation with the security department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 24,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie regularnych inwentaryzacji',
                    'en' => 'Conducting regular inventories'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 25,
                'name' => json_encode([
                    'pl' => 'Raportowanie wyników sprzedaży',
                    'en' => 'Reporting sales results'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 26,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowych systemów i technologii usprawniających zarządzanie sprzedażą, obsługą klienta oraz magazynowaniem towarów',
                    'en' => 'Implementing new systems and technologies to improve sales management, customer service, and stock management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 27,
                'name' => json_encode([
                    'pl' => 'Reagowanie na sytuacje kryzysowe',
                    'en' => 'Responding to crisis situations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIKSTOISKAWMARKECIE = [
            [
                'id' => 28,
                'name' => json_encode([
                    'pl' => 'Organizowanie pracy podległych pracowników (grafik, podział zadań)',
                    'en' => 'Organizing work of subordinate employees (schedules, task division)'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 29,
                'name' => json_encode([
                    'pl' => 'Nadzór nad realizacją zadań przez zespół',
                    'en' => 'Supervision of task execution by the team'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 30,
                'name' => json_encode([
                    'pl' => 'Motywowanie pracowników oraz rozwiązywanie bieżących problemów personalnych',
                    'en' => 'Motivating employees and solving current personnel issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 31,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie szkoleń dla pracowników, szczególnie nowych członków zespołu',
                    'en' => 'Conducting training for employees, especially new team members'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 32,
                'name' => json_encode([
                    'pl' => 'Ocena wydajności pracy zespołu oraz indywidualnych pracowników',
                    'en' => 'Assessing the performance of the team and individual employees'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 33,
                'name' => json_encode([
                    'pl' => 'Planowanie rozmieszczenia produktów na stoisku (merchandising)',
                    'en' => 'Planning product placement at the stall (merchandising)'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 34,
                'name' => json_encode([
                    'pl' => 'Utrzymanie porządku i czystości na stoisku',
                    'en' => 'Maintaining cleanliness and order at the stall'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 35,
                'name' => json_encode([
                    'pl' => 'Kontrola jakości ekspozycji produktów, aby były estetyczne i atrakcyjne dla klientów',
                    'en' => 'Controlling product display quality to make them aesthetic and attractive to customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 36,
                'name' => json_encode([
                    'pl' => 'Zapewnienie ciągłości zatowarowania, czyli bieżące uzupełnianie braków na półkach',
                    'en' => 'Ensuring product availability by continuously replenishing stock on shelves'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 37,
                'name' => json_encode([
                    'pl' => 'Organizowanie akcji promocyjnych na stoisku',
                    'en' => 'Organizing promotional campaigns at the stall'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 38,
                'name' => json_encode([
                    'pl' => 'Zapewnienie wysokiej jakości obsługi klienta',
                    'en' => 'Ensuring high-quality customer service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 39,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów i skarg klientów',
                    'en' => 'Handling customer problems and complaints'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 40,
                'name' => json_encode([
                    'pl' => 'Dbanie o pozytywny wizerunek stoiska i całego sklepu',
                    'en' => 'Maintaining a positive image of the stall and the entire store'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 41,
                'name' => json_encode([
                    'pl' => 'Odpowiedzialność za zatowarowanie stoiska, w tym składanie zamówień na produkty',
                    'en' => 'Responsible for stall restocking, including placing product orders'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 42,
                'name' => json_encode([
                    'pl' => 'Kontrola stanów magazynowych i dbanie o ich odpowiedni poziom',
                    'en' => 'Inventory control and ensuring appropriate stock levels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 43,
                'name' => json_encode([
                    'pl' => 'Inwentaryzacja i raportowanie braków lub nadwyżek towarowych',
                    'en' => 'Inventorying and reporting stock shortages or surpluses'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 44,
                'name' => json_encode([
                    'pl' => 'Kontrola terminów przydatności do spożycia lub sprzedaży (FIFO)',
                    'en' => 'Monitoring expiration dates or sales deadlines (FIFO)'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 45,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie dostaw, sprawdzanie jakości i zgodności z zamówieniami',
                    'en' => 'Receiving deliveries, checking quality and order compliance'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 46,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów z brakami lub nadwyżkami dostaw',
                    'en' => 'Solving issues with delivery shortages or surpluses'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 47,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem zakupów oraz negocjacje z dostawcami w ramach swojej odpowiedzialności',
                    'en' => 'Cooperation with purchasing department and negotiations with suppliers within own responsibility'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 48,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wyników sprzedażowych stoiska',
                    'en' => 'Monitoring sales performance of the stall'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 49,
                'name' => json_encode([
                    'pl' => 'Optymalizacja sprzedaży poprzez analizę danych (np. raportów sprzedaży, wskaźników KPI)',
                    'en' => 'Optimizing sales through data analysis (e.g. sales reports, KPIs)'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 50,
                'name' => json_encode([
                    'pl' => 'Dbanie o rentowność stoiska, kontrola kosztów i minimalizowanie strat (np. kradzieże, przeterminowane produkty)',
                    'en' => 'Ensuring stall profitability, cost control and minimizing losses (e.g. theft, expired products)'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 51,
                'name' => json_encode([
                    'pl' => 'Wdrażanie działań zwiększających sprzedaż oraz poprawiających efektywność operacyjną',
                    'en' => 'Implementing actions to increase sales and improve operational efficiency'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 52,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie wytycznych i standardów obowiązujących w sieci handlowej, np. polityki cenowej, standardów obsługi klienta',
                    'en' => 'Adhering to guidelines and standards in the retail network, e.g. pricing policy, customer service standards'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 53,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności z przepisami prawa pracy, sanitarno-epidemiologicznymi oraz BHP',
                    'en' => 'Ensuring compliance with labor law, sanitary-epidemiological regulations, and health and safety'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 54,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów sprzedażowych, zamówień oraz inwentaryzacji',
                    'en' => 'Creating sales reports, orders and inventories'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 55,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji zwrotnej do menedżerów wyższego szczebla',
                    'en' => 'Providing feedback to senior management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 56,
                'name' => json_encode([
                    'pl' => 'Udział w spotkaniach z zarządem sklepu oraz prezentowanie wyników stoiska',
                    'en' => 'Participating in store management meetings and presenting stall results'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 57,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowych procedur operacyjnych, marketingowych lub logistycznych',
                    'en' => 'Implementing new operational, marketing, or logistical procedures'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 58,
                'name' => json_encode([
                    'pl' => 'Informowanie zespołu o nowych strategiach, procedurach i wytycznych',
                    'en' => 'Informing the team about new strategies, procedures, and guidelines'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $KIEROWNIKKAS = [
            [
                'id' => 59,
                'name' => json_encode([
                    'pl' => 'Rekrutacja i szkolenie kasjerów',
                    'en' => 'Recruitment and training of cashiers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 60,
                'name' => json_encode([
                    'pl' => 'Tworzenie grafiku pracy kasjerów oraz optymalne rozdzielanie zadań',
                    'en' => 'Creating cashier work schedules and optimal task allocation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 61,
                'name' => json_encode([
                    'pl' => 'Nadzór nad pracą kasjerów',
                    'en' => 'Supervision of cashiers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 62,
                'name' => json_encode([
                    'pl' => 'Motywowanie i wspieranie zespołu',
                    'en' => 'Motivating and supporting the team'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 63,
                'name' => json_encode([
                    'pl' => 'Ocena wydajności kasjerów',
                    'en' => 'Evaluation of cashier performance'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 64,
                'name' => json_encode([
                    'pl' => 'Zapewnienie płynności obsługi klientów przy kasach',
                    'en' => 'Ensuring smooth customer service at the checkout'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 65,
                'name' => json_encode([
                    'pl' => 'Monitorowanie sprawności sprzętu kasowego',
                    'en' => 'Monitoring the functionality of cashier equipment'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 66,
                'name' => json_encode([
                    'pl' => 'Zarządzanie kolejkami',
                    'en' => 'Queue management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 67,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie standardów firmy dotyczących obsługi klienta, polityki zwrotów i reklamacji',
                    'en' => 'Adhering to company standards regarding customer service, return, and complaint policies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 68,
                'name' => json_encode([
                    'pl' => 'Reagowanie na problemy klientów dotyczące błędów kasowych, reklamacji, zwrotów i sytuacji konfliktowych',
                    'en' => 'Responding to customer issues related to cashier errors, complaints, returns, and conflicts'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 69,
                'name' => json_encode([
                    'pl' => 'Dbanie o satysfakcję klienta',
                    'en' => 'Ensuring customer satisfaction'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 70,
                'name' => json_encode([
                    'pl' => 'Kontrola obrotu gotówkowego',
                    'en' => 'Cash flow control'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 71,
                'name' => json_encode([
                    'pl' => 'Koordynacja rozliczeń kasowych',
                    'en' => 'Coordination of cashier settlements'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 72,
                'name' => json_encode([
                    'pl' => 'Przekazywanie utargów do sejfu lub banku',
                    'en' => 'Transferring cash to the safe or bank'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 73,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie i zatwierdzanie różnic kasowych oraz analizowanie ich przyczyn',
                    'en' => 'Checking and approving cashier discrepancies and analyzing their causes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 74,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności z procedurami BHP w strefie kas',
                    'en' => 'Ensuring compliance with health and safety procedures in the cashier area'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 75,
                'name' => json_encode([
                    'pl' => 'Monitorowanie przestrzegania zasad bezpieczeństwa finansowego',
                    'en' => 'Monitoring compliance with financial security rules'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 76,
                'name' => json_encode([
                    'pl' => 'Współpraca z ochroną sklepu w sytuacjach wymagających interwencji',
                    'en' => 'Cooperating with store security in situations requiring intervention'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 77,
                'name' => json_encode([
                    'pl' => 'Analiza wyników sprzedażowych strefy kas',
                    'en' => 'Analyzing sales performance of the cashier area'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 78,
                'name' => json_encode([
                    'pl' => 'Monitorowanie efektywności pracy kasjerów',
                    'en' => 'Monitoring cashier efficiency'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 79,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowych systemów kasowych i narzędzi wspierających obsługę płatności',
                    'en' => 'Implementing new cashier systems and tools supporting payment processing'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 80,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie procedur w zakresie obsługi klientów, rozliczeń oraz zwrotów, zgodnie z nowymi wytycznymi firmy',
                    'en' => 'Updating customer service, settlement, and return procedures in line with new company guidelines'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 81,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie szkoleń z nowych technologii, np. kas samoobsługowych czy terminali płatniczych',
                    'en' => 'Conducting training on new technologies, e.g. self-checkouts or payment terminals'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 82,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem finansowym w celu zapewnienia prawidłowego obiegu dokumentów finansowych oraz rozliczeń kasowych',
                    'en' => 'Cooperating with the finance department to ensure proper flow of financial documents and cashier settlements'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 83,
                'name' => json_encode([
                    'pl' => 'Komunikacja z działem IT w przypadku problemów technicznych związanych z systemami kasowymi',
                    'en' => 'Communicating with the IT department in case of technical issues with cashier systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 84,
                'name' => json_encode([
                    'pl' => 'Współpraca z menedżerami sklepu w zakresie usprawnienia procesów operacyjnych oraz rozwiązywania bieżących problemów',
                    'en' => 'Collaborating with store managers to improve operational processes and solve current issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 85,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów na temat efektywności strefy kasowej',
                    'en' => 'Creating reports on cashier area efficiency'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 86,
                'name' => json_encode([
                    'pl' => 'Analiza wskaźników sprzedażowych i operacyjnych w celu identyfikacji obszarów do poprawy',
                    'en' => 'Analyzing sales and operational KPIs to identify areas for improvement'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 87,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji zwrotnych do kierownictwa wyższego szczebla o bieżącej sytuacji na strefie kas',
                    'en' => 'Providing feedback to senior management on the current situation in the cashier area'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 88,
                'name' => json_encode([
                    'pl' => 'Nadzór nad kasami samoobsługowymi',
                    'en' => 'Supervision of self-checkout systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $POZOSTALIKIEROWNICYSPRZEDAŻYWMARKETACH = [
            [
                'id' => 89,
                'name' => json_encode([
                    'pl' => 'Zarządzanie personelem działu',
                    'en' => 'Managing department personnel'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 90,
                'name' => json_encode([
                    'pl' => 'Kontrola jakości towarów',
                    'en' => 'Quality control of goods'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 91,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie norm sanitarnych',
                    'en' => 'Adhering to sanitary standards'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 92,
                'name' => json_encode([
                    'pl' => 'Zarządzanie zatowarowaniem',
                    'en' => 'Stock management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 93,
                'name' => json_encode([
                    'pl' => 'Obsługa klienta',
                    'en' => 'Customer service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 94,
                'name' => json_encode([
                    'pl' => 'Wdrażanie promocji i ofert specjalnych',
                    'en' => 'Implementing promotions and special offers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 95,
                'name' => json_encode([
                    'pl' => 'Nadzór nad pracą pracowników działu spożywczego, w tym koordynacja pracy na półkach, uzupełnianie braków i reorganizacja asortymentu',
                    'en' => 'Supervising the work of grocery department employees, including shelf work coordination, replenishment, and assortment reorganization'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 96,
                'name' => json_encode([
                    'pl' => 'Kontrola stanów magazynowych',
                    'en' => 'Inventory control'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 97,
                'name' => json_encode([
                    'pl' => 'Monitorowanie rotacji towarów',
                    'en' => 'Monitoring product rotation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 98,
                'name' => json_encode([
                    'pl' => 'Organizowanie ekspozycji promocyjnych',
                    'en' => 'Organizing promotional displays'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 99,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie standardów higieny',
                    'en' => 'Adhering to hygiene standards'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 100,
                'name' => json_encode([
                    'pl' => 'Zapewnienie płynnej obsługi klienta',
                    'en' => 'Ensuring smooth customer service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 101,
                'name' => json_encode([
                    'pl' => 'Współpraca z dostawcami',
                    'en' => 'Cooperation with suppliers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 102,
                'name' => json_encode([
                    'pl' => 'Analiza wyników sprzedaży',
                    'en' => 'Sales analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 103,
                'name' => json_encode([
                    'pl' => 'Organizacja pracy oraz szkolenia z zakresu oferowanego asortymentu',
                    'en' => 'Organizing work and training related to the offered assortment'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 104,
                'name' => json_encode([
                    'pl' => 'Współpraca z markami',
                    'en' => 'Cooperation with brands'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 105,
                'name' => json_encode([
                    'pl' => 'Dbałość o estetyczną prezentację',
                    'en' => 'Ensuring aesthetic presentation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 106,
                'name' => json_encode([
                    'pl' => 'Monitorowanie rotacji towarów',
                    'en' => 'Monitoring product rotation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 107,
                'name' => json_encode([
                    'pl' => 'Zarządzanie personelem zajmującym się działem tekstyliów, w tym organizowanie pracy, szkolenia oraz ocena pracowników',
                    'en' => 'Managing textile department personnel, including organizing work, training, and employee evaluation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 108,
                'name' => json_encode([
                    'pl' => 'Organizacja wyprzedaży i promocji',
                    'en' => 'Organizing sales and promotions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 109,
                'name' => json_encode([
                    'pl' => 'Dbanie o dostępność towarów',
                    'en' => 'Ensuring product availability'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 110,
                'name' => json_encode([
                    'pl' => 'Nadzór nad funkcjonowaniem kas samoobsługowych',
                    'en' => 'Supervising the operation of self-checkout machines'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 111,
                'name' => json_encode([
                    'pl' => 'Wspieranie klientów w korzystaniu z kas samoobsługowych',
                    'en' => 'Assisting customers in using self-checkout machines'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIKDZIALUWHANDLUDETALICZNYM=[
            [
                'id' => 112,
                'name' => json_encode([
                    'pl' => 'Organizacja pracy zespołu',
                    'en' => 'Team work organization'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 113,
                'name' => json_encode([
                    'pl' => 'Szkolenie pracowników',
                    'en' => 'Employee training'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 114,
                'name' => json_encode([
                    'pl' => 'Motywowanie zespołu',
                    'en' => 'Motivating the team'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 115,
                'name' => json_encode([
                    'pl' => 'Kontrola pracy zespołu',
                    'en' => 'Team work supervision'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 116,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w procesie rekrutacyjnym nowych pracowników i ich selekcja',
                    'en' => 'Participation in the recruitment and selection of new employees'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 117,
                'name' => json_encode([
                    'pl' => 'Monitorowanie stanów magazynowych',
                    'en' => 'Monitoring inventory levels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 118,
                'name' => json_encode([
                    'pl' => 'Kontrola rotacji produktów',
                    'en' => 'Monitoring product rotation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 119,
                'name' => json_encode([
                    'pl' => 'Zamawianie towarów',
                    'en' => 'Ordering goods'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 120,
                'name' => json_encode([
                    'pl' => 'Minimalizacja strat',
                    'en' => 'Minimizing losses'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 121,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie dostaw',
                    'en' => 'Receiving deliveries'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 122,
                'name' => json_encode([
                    'pl' => 'Organizowanie i nadzorowanie ekspozycji produktów zgodnie z wytycznymi i strategią sklepu, aby maksymalizować sprzedaż',
                    'en' => 'Organizing and supervising product displays according to store strategy to maximize sales'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 123,
                'name' => json_encode([
                    'pl' => 'Oznaczenia cenowe i promocyjne',
                    'en' => 'Price and promotional labels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 124,
                'name' => json_encode([
                    'pl' => 'Dbanie o estetyczną i przyciągającą uwagę prezentację towarów',
                    'en' => 'Ensuring aesthetic and eye-catching product presentation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 125,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad FIFO',
                    'en' => 'Adhering to FIFO principles'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 126,
                'name' => json_encode([
                    'pl' => 'Realizacja celów sprzedażowych',
                    'en' => 'Achieving sales goals'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 127,
                'name' => json_encode([
                    'pl' => 'Analiza danych sprzedażowych',
                    'en' => 'Sales data analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 128,
                'name' => json_encode([
                    'pl' => 'Optymalizacja procesów sprzedażowych',
                    'en' => 'Optimizing sales processes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 129,
                'name' => json_encode([
                    'pl' => 'Organizowanie i wdrażanie strategii promocyjnych na poziomie działu oraz monitorowanie ich skuteczności',
                    'en' => 'Organizing and implementing promotional strategies at the department level and monitoring their effectiveness'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 130,
                'name' => json_encode([
                    'pl' => 'Zapewnienie wysokiej jakości obsługi klienta',
                    'en' => 'Ensuring high-quality customer service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 131,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów i reklamacji',
                    'en' => 'Resolving issues and handling complaints'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 132,
                'name' => json_encode([
                    'pl' => 'Dbanie o satysfakcję klientów',
                    'en' => 'Ensuring customer satisfaction'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 133,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań z innymi działami',
                    'en' => 'Coordinating activities with other departments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 134,
                'name' => json_encode([
                    'pl' => 'Realizacja polityki firmy',
                    'en' => 'Implementing company policies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 135,
                'name' => json_encode([
                    'pl' => 'Współpraca z dostawcami',
                    'en' => 'Cooperation with suppliers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 136,
                'name' => json_encode([
                    'pl' => 'Kontrola kosztów',
                    'en' => 'Cost control'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 137,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów BHP',
                    'en' => 'Compliance with health and safety regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 138,
                'name' => json_encode([
                    'pl' => 'Zgodność z przepisami sanitarnymi',
                    'en' => 'Compliance with sanitary regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 139,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności z przepisami prawa handlowego',
                    'en' => 'Ensuring compliance with commercial law'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 140,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie inwentaryzacji',
                    'en' => 'Conducting inventory checks'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 141,
                'name' => json_encode([
                    'pl' => 'Kontrola stanów magazynowych',
                    'en' => 'Inventory control'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 142,
                'name' => json_encode([
                    'pl' => 'Raportowanie wyników',
                    'en' => 'Reporting results'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 143,
                'name' => json_encode([
                    'pl' => 'Reagowanie na sytuacje kryzysowe',
                    'en' => 'Responding to crisis situations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 144,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów',
                    'en' => 'Solving problems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 145,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów sprzedażowych',
                    'en' => 'Creating sales reports'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 146,
                'name' => json_encode([
                    'pl' => 'Optymalizacja procesów',
                    'en' => 'Process optimization'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 147,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowoczesnych systemów sprzedażowych, takich jak programy lojalnościowe, kasy samoobsługowe, systemy ERP do zarządzania zapasami',
                    'en' => 'Implementing modern sales systems, such as loyalty programs, self-checkouts, ERP systems for inventory management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIKDZIAŁUWHANDLUHURTOWYM = [
            [
                'id' => 148,
                'name' => json_encode([
                    'pl' => 'Organizacja pracy zespołu',
                    'en' => 'Team work organization'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 149,
                'name' => json_encode([
                    'pl' => 'Szkolenie pracowników',
                    'en' => 'Employee training'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 150,
                'name' => json_encode([
                    'pl' => 'Ocena wydajności pracowników',
                    'en' => 'Employee performance evaluation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 151,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów personalnych',
                    'en' => 'Solving personnel issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 152,
                'name' => json_encode([
                    'pl' => 'Kontrola stanów magazynowych',
                    'en' => 'Inventory control'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 153,
                'name' => json_encode([
                    'pl' => 'Zamawianie towarów',
                    'en' => 'Ordering goods'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 154,
                'name' => json_encode([
                    'pl' => 'Optymalizacja rotacji produktów',
                    'en' => 'Optimization of product rotation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 155,
                'name' => json_encode([
                    'pl' => 'Wdrażanie polityki zakupowej',
                    'en' => 'Implementation of purchasing policy'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 156,
                'name' => json_encode([
                    'pl' => 'Zarządzanie procesem realizacji zamówień',
                    'en' => 'Order fulfillment management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 157,
                'name' => json_encode([
                    'pl' => 'Kontrola jakości zamówień',
                    'en' => 'Order quality control'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 158,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów z zamówieniami',
                    'en' => 'Solving order issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 159,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie relacji z kluczowymi klientami',
                    'en' => 'Maintaining relationships with key clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 160,
                'name' => json_encode([
                    'pl' => 'Monitorowanie kosztów działalności',
                    'en' => 'Monitoring operating costs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 161,
                'name' => json_encode([
                    'pl' => 'Optymalizacja procesów operacyjnych',
                    'en' => 'Operational process optimization'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 162,
                'name' => json_encode([
                    'pl' => 'Zarządzanie budżetem działu',
                    'en' => 'Department budget management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 163,
                'name' => json_encode([
                    'pl' => 'Organizacja pracy magazynu',
                    'en' => 'Warehouse work organization'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 164,
                'name' => json_encode([
                    'pl' => 'Kontrola inwentaryzacji',
                    'en' => 'Inventory control'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 165,
                'name' => json_encode([
                    'pl' => 'Optymalizacja przestrzeni magazynowej',
                    'en' => 'Warehouse space optimization'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 166,
                'name' => json_encode([
                    'pl' => 'Zapewnienie bezpieczeństwa towarów',
                    'en' => 'Ensuring goods safety'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 167,
                'name' => json_encode([
                    'pl' => 'Zarządzanie procesem dystrybucji',
                    'en' => 'Distribution process management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 168,
                'name' => json_encode([
                    'pl' => 'Planowanie transportu',
                    'en' => 'Transport planning'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 169,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wskaźników logistycznych',
                    'en' => 'Monitoring logistics indicators'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 170,
                'name' => json_encode([
                    'pl' => 'Negocjowanie warunków handlowych',
                    'en' => 'Negotiating trade terms'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 171,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie relacji z dostawcami',
                    'en' => 'Maintaining relationships with suppliers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 172,
                'name' => json_encode([
                    'pl' => 'Analiza rynku dostawców',
                    'en' => 'Supplier market analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 173,
                'name' => json_encode([
                    'pl' => 'Monitorowanie jakości dostaw',
                    'en' => 'Monitoring delivery quality'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 174,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów z jakością',
                    'en' => 'Solving quality issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 175,
                'name' => json_encode([
                    'pl' => 'Dbanie o zgodność z normami',
                    'en' => 'Ensuring compliance with standards'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 176,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów operacyjnych',
                    'en' => 'Creating operational reports'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 177,
                'name' => json_encode([
                    'pl' => 'Analiza danych sprzedażowych',
                    'en' => 'Sales data analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 178,
                'name' => json_encode([
                    'pl' => 'Raportowanie efektywności działu',
                    'en' => 'Department efficiency reporting'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 179,
                'name' => json_encode([
                    'pl' => 'Zgodność z przepisami BHP',
                    'en' => 'Compliance with health and safety regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 180,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie norm prawnych',
                    'en' => 'Adherence to legal norms'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 181,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie norm środowiskowych',
                    'en' => 'Compliance with environmental norms'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 182,
                'name' => json_encode([
                    'pl' => 'Identyfikowanie potencjalnych zagrożeń',
                    'en' => 'Identifying potential risks'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 183,
                'name' => json_encode([
                    'pl' => 'Rozwiązanie problemów kryzysowych',
                    'en' => 'Crisis problem solving'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 184,
                'name' => json_encode([
                    'pl' => 'Optymalizacja procesów magazynowych',
                    'en' => 'Warehouse process optimization'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 185,
                'name' => json_encode([
                    'pl' => 'Implementacja systemów ERP do lepszego zarządzania zapasami, zamówieniami i sprzedażą',
                    'en' => 'Implementing ERP systems for better inventory, order, and sales management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $KIEROWNIKHURTOWNI = [
            [
                'id' => 186,
                'name' => json_encode([
                    'pl' => 'Organizacja pracy zespołu',
                    'en' => 'Team work organization'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 187,
                'name' => json_encode([
                    'pl' => 'Rekrutacja i szkolenie pracowników',
                    'en' => 'Recruitment and employee training'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 188,
                'name' => json_encode([
                    'pl' => 'Ocena i motywowanie zespołu',
                    'en' => 'Team evaluation and motivation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 189,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie konfliktów',
                    'en' => 'Conflict resolution'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 190,
                'name' => json_encode([
                    'pl' => 'Monitorowanie stanów magazynowych',
                    'en' => 'Monitoring stock levels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 191,
                'name' => json_encode([
                    'pl' => 'Optymalizacja poziomu zapasów',
                    'en' => 'Optimization of stock levels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 192,
                'name' => json_encode([
                    'pl' => 'Zamawianie towarów',
                    'en' => 'Ordering goods'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 193,
                'name' => json_encode([
                    'pl' => 'Kontrola terminów ważności i rotacji towarów',
                    'en' => 'Controlling expiration dates and product rotation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 194,
                'name' => json_encode([
                    'pl' => 'Zarządzanie procesem wysyłki towarów',
                    'en' => 'Managing the shipping process'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 195,
                'name' => json_encode([
                    'pl' => 'Koordynacja transportu',
                    'en' => 'Transport coordination'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 196,
                'name' => json_encode([
                    'pl' => 'Zapewnienie terminowych dostaw',
                    'en' => 'Ensuring timely deliveries'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 197,
                'name' => json_encode([
                    'pl' => 'Kontrola jakości towarów',
                    'en' => 'Quality control of goods'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 198,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów z jakością',
                    'en' => 'Resolving quality issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 199,
                'name' => json_encode([
                    'pl' => 'Optymalizacja procesów magazynowych',
                    'en' => 'Optimization of warehouse processes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 200,
                'name' => json_encode([
                    'pl' => 'Organizacja pracy magazynu',
                    'en' => 'Warehouse work organization'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 201,
                'name' => json_encode([
                    'pl' => 'Planowanie i przeprowadzanie regularnych inwentaryzacji',
                    'en' => 'Planning and conducting regular inventories'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 202,
                'name' => json_encode([
                    'pl' => 'Kontrola stanów magazynowych',
                    'en' => 'Stock level control'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 203,
                'name' => json_encode([
                    'pl' => 'Budowanie relacji z klientami',
                    'en' => 'Building customer relationships'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 204,
                'name' => json_encode([
                    'pl' => 'Obsługa zamówień',
                    'en' => 'Order handling'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 205,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie reklamacji',
                    'en' => 'Handling complaints'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 206,
                'name' => json_encode([
                    'pl' => 'Kontrola kosztów operacyjnych',
                    'en' => 'Operational cost control'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 207,
                'name' => json_encode([
                    'pl' => 'Zarządzanie budżetem',
                    'en' => 'Budget management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 208,
                'name' => json_encode([
                    'pl' => 'Negocjowanie warunków handlowych z dostawcami',
                    'en' => 'Negotiating commercial terms with suppliers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 209,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów operacyjnych',
                    'en' => 'Creating operational reports'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 210,
                'name' => json_encode([
                    'pl' => 'Analiza danych sprzedażowych',
                    'en' => 'Sales data analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 211,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wskaźników efektywności',
                    'en' => 'Monitoring performance indicators'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 212,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów BHP',
                    'en' => 'Compliance with health and safety regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 213,
                'name' => json_encode([
                    'pl' => 'Zgodność z przepisami prawnymi',
                    'en' => 'Legal compliance'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 214,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności z procedurami wewnętrznymi',
                    'en' => 'Ensuring compliance with internal procedures'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 215,
                'name' => json_encode([
                    'pl' => 'Identyfikacja i zarządzanie ryzykami',
                    'en' => 'Risk identification and management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 216,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie sytuacji kryzysowych',
                    'en' => 'Crisis management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 217,
                'name' => json_encode([
                    'pl' => 'Automatyzacja procesów',
                    'en' => 'Process automation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 218,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowoczesnych rozwiązań technologicznych i narzędzi do monitorowania i optymalizacji logistyki i zarządzania zapasami',
                    'en' => 'Implementing modern technological solutions and tools for monitoring and optimizing logistics and inventory management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $KIEROWNIKSKLEPUSUPERMARKETU = [
            [
                'id' => 219,
                'name' => json_encode([
                    'pl' => 'Organizacja pracy zespołu',
                    'en' => 'Organization of team work'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 220,
                'name' => json_encode([
                    'pl' => 'Rekrutacja i szkolenie pracowników',
                    'en' => 'Recruitment and training of employees'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 221,
                'name' => json_encode([
                    'pl' => 'Motywowanie zespołu',
                    'en' => 'Motivating the team'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 222,
                'name' => json_encode([
                    'pl' => 'Ocena i rozwój pracowników',
                    'en' => 'Employee evaluation and development'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 223,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie konfliktów',
                    'en' => 'Conflict resolution'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 224,
                'name' => json_encode([
                    'pl' => 'Zapewnienie wysokiej jakości obsługi klienta',
                    'en' => 'Ensuring high-quality customer service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 225,
                'name' => json_encode([
                    'pl' => 'Realizacja celów sprzedażowych',
                    'en' => 'Achieving sales targets'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 226,
                'name' => json_encode([
                    'pl' => 'Planowanie i organizowanie kampanii promocyjnych w sklepie',
                    'en' => 'Planning and organizing promotional campaigns in the store'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 227,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów klientów',
                    'en' => 'Solving customer problems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 228,
                'name' => json_encode([
                    'pl' => 'Analiza wyników sprzedażowych',
                    'en' => 'Sales analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 229,
                'name' => json_encode([
                    'pl' => 'Monitorowanie stanów magazynowych',
                    'en' => 'Monitoring inventory levels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 230,
                'name' => json_encode([
                    'pl' => 'Zamawianie towarów',
                    'en' => 'Ordering goods'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 231,
                'name' => json_encode([
                    'pl' => 'Kontrola rotacji towarów',
                    'en' => 'Controlling product rotation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 232,
                'name' => json_encode([
                    'pl' => 'Inwentaryzacja',
                    'en' => 'Inventory'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 233,
                'name' => json_encode([
                    'pl' => 'Organizacja przestrzeni sprzedażowej',
                    'en' => 'Sales space organization'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 234,
                'name' => json_encode([
                    'pl' => 'Dbanie o porządek i bezpieczeństwo',
                    'en' => 'Maintaining cleanliness and safety'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 235,
                'name' => json_encode([
                    'pl' => 'Monitorowanie stanu technicznego sklepu',
                    'en' => 'Monitoring the technical condition of the store'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 236,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad merchandisingu',
                    'en' => 'Compliance with merchandising rules'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 237,
                'name' => json_encode([
                    'pl' => 'Kontrola budżetu operacyjnego',
                    'en' => 'Controlling the operational budget'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 238,
                'name' => json_encode([
                    'pl' => 'Monitorowanie kosztów',
                    'en' => 'Monitoring costs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 239,
                'name' => json_encode([
                    'pl' => 'Raportowanie wyników finansowych',
                    'en' => 'Financial reporting'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 240,
                'name' => json_encode([
                    'pl' => 'Zarządzanie kasą i systemami płatności',
                    'en' => 'Cash management and payment systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 241,
                'name' => json_encode([
                    'pl' => 'Negocjowanie warunków handlowych',
                    'en' => 'Negotiating trade terms'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 242,
                'name' => json_encode([
                    'pl' => 'Zapewnienie terminowych dostaw',
                    'en' => 'Ensuring timely deliveries'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 243,
                'name' => json_encode([
                    'pl' => 'Kontrola jakości dostaw',
                    'en' => 'Controlling the quality of deliveries'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 244,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów BHP',
                    'en' => 'Compliance with health and safety regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 245,
                'name' => json_encode([
                    'pl' => 'Zgodność z przepisami prawa',
                    'en' => 'Compliance with legal regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 246,
                'name' => json_encode([
                    'pl' => 'Zarządzanie ryzykiem',
                    'en' => 'Risk management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 247,
                'name' => json_encode([
                    'pl' => 'Wdrażanie standardów firmy',
                    'en' => 'Implementing company standards'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 248,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowych technologii',
                    'en' => 'Implementing new technologies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 249,
                'name' => json_encode([
                    'pl' => 'Usprawnianie procesów operacyjnych',
                    'en' => 'Improving operational processes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 250,
                'name' => json_encode([
                    'pl' => 'Lokalna promocja sklepu',
                    'en' => 'Local promotion of the store'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 251,
                'name' => json_encode([
                    'pl' => 'Współpraca z centralą firmy',
                    'en' => 'Cooperation with company headquarters'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 252,
                'name' => json_encode([
                    'pl' => 'Zarządzanie materiałami promocyjnymi',
                    'en' => 'Managing promotional materials'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 253,
                'name' => json_encode([
                    'pl' => 'Analiza danych sprzedażowych',
                    'en' => 'Sales data analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 254,
                'name' => json_encode([
                    'pl' => 'Kontrola wskaźników efektywności',
                    'en' => 'Controlling performance indicators'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 255,
                'name' => json_encode([
                    'pl' => 'Zapobieganie kradzieżom',
                    'en' => 'Preventing theft'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 256,
                'name' => json_encode([
                    'pl' => 'Zarządzanie sytuacjami kryzysowymi',
                    'en' => 'Crisis management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $KIEROWNIKAPTEKI = [
            [
                'id' => 257,
                'name' => json_encode([
                    'pl' => 'Nadzór nad zespołem',
                    'en' => 'Team supervision'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 258,
                'name' => json_encode([
                    'pl' => 'Rekrutacja i szkolenie pracowników',
                    'en' => 'Recruitment and training of employees'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 259,
                'name' => json_encode([
                    'pl' => 'Motywowanie zespołu',
                    'en' => 'Motivating the team'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 260,
                'name' => json_encode([
                    'pl' => 'Kontrola nad obrotem leków',
                    'en' => 'Controlling the turnover of medicines'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 261,
                'name' => json_encode([
                    'pl' => 'Realizacja zamówień leków',
                    'en' => 'Fulfilling medicine orders'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 262,
                'name' => json_encode([
                    'pl' => 'Prowadzenie dokumentacji aptecznej',
                    'en' => 'Managing pharmacy documentation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 263,
                'name' => json_encode([
                    'pl' => 'Zarządzanie finansami apteki',
                    'en' => 'Pharmacy financial management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 264,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie prawa farmaceutycznego',
                    'en' => 'Compliance with pharmaceutical law'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 265,
                'name' => json_encode([
                    'pl' => 'Kontrola terminu ważności leków',
                    'en' => 'Monitoring medicine expiration dates'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 266,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności z normami sanitarnymi',
                    'en' => 'Ensuring compliance with sanitary standards'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 267,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad farmakologii i bioetyki',
                    'en' => 'Adherence to pharmacology and bioethics principles'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 268,
                'name' => json_encode([
                    'pl' => 'Doradztwo farmaceutyczne',
                    'en' => 'Pharmaceutical consulting'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 269,
                'name' => json_encode([
                    'pl' => 'Nadzór nad wydawaniem leków na receptę i bez recepty',
                    'en' => 'Supervision of prescription and over-the-counter drug dispensing'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 270,
                'name' => json_encode([
                    'pl' => 'Prowadzenie edukacji zdrowotnej',
                    'en' => 'Conducting health education'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 271,
                'name' => json_encode([
                    'pl' => 'Przygotowanie apteki na kontrole',
                    'en' => 'Preparing the pharmacy for inspections'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 272,
                'name' => json_encode([
                    'pl' => 'Współpraca z inspekcją farmaceutyczną',
                    'en' => 'Collaboration with the pharmaceutical inspection'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 273,
                'name' => json_encode([
                    'pl' => 'Nadzór nad obrotem leków zawierających substancje kontrolowane',
                    'en' => 'Supervision of the trade of controlled substances'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 274,
                'name' => json_encode([
                    'pl' => 'Dbałość o odpowiednie warunki przechowywania leków specjalnych',
                    'en' => 'Ensuring proper storage conditions for special medications'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 275,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowych technologii i rozwiązań',
                    'en' => 'Implementing new technologies and solutions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 276,
                'name' => json_encode([
                    'pl' => 'Optymalizacja pracy apteki',
                    'en' => 'Optimizing pharmacy operations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 277,
                'name' => json_encode([
                    'pl' => 'Budowanie relacji z pacjentami',
                    'en' => 'Building relationships with patients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 278,
                'name' => json_encode([
                    'pl' => 'Promocja apteki',
                    'en' => 'Pharmacy promotion'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 279,
                'name' => json_encode([
                    'pl' => 'Aktualizacja wiedzy',
                    'en' => 'Knowledge updating'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $POZOSTALIKIEROWNICYWHANDLUDETALICZNYMIHURTOWYM = [
            [
                'id' => 280,
                'name' => json_encode([
                    'pl' => 'Zarządzanie procesami logistycznymi',
                    'en' => 'Managing logistics processes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 281,
                'name' => json_encode([
                    'pl' => 'Koordynacja procesów magazynowych',
                    'en' => 'Coordination of warehouse processes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 282,
                'name' => json_encode([
                    'pl' => 'Optymalizacja przestrzeni magazynowej',
                    'en' => 'Optimization of warehouse space'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 283,
                'name' => json_encode([
                    'pl' => 'Zarządzanie flotą pojazdów',
                    'en' => 'Fleet management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 284,
                'name' => json_encode([
                    'pl' => 'Monitorowanie stanów magazynowych',
                    'en' => 'Monitoring inventory levels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 285,
                'name' => json_encode([
                    'pl' => 'Planowanie zakupów towarów',
                    'en' => 'Planning goods purchases'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 286,
                'name' => json_encode([
                    'pl' => 'Negocjowanie warunków z dostawcami',
                    'en' => 'Negotiating terms with suppliers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 287,
                'name' => json_encode([
                    'pl' => 'Monitorowanie jakości dostarczanych produktów',
                    'en' => 'Monitoring the quality of delivered products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 288,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi działami',
                    'en' => 'Cooperation with other departments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 289,
                'name' => json_encode([
                    'pl' => 'Analiza rynku',
                    'en' => 'Market analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 290,
                'name' => json_encode([
                    'pl' => 'Tworzenie i realizacja strategii sprzedaży',
                    'en' => 'Creating and executing sales strategies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 291,
                'name' => json_encode([
                    'pl' => 'Zarządzanie zespołem sprzedażowym',
                    'en' => 'Managing the sales team'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 292,
                'name' => json_encode([
                    'pl' => 'Rozwój relacji z klientami',
                    'en' => 'Developing relationships with clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 293,
                'name' => json_encode([
                    'pl' => 'Analiza wyników sprzedaży',
                    'en' => 'Sales analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 294,
                'name' => json_encode([
                    'pl' => 'Poszukiwanie nowych rynków zbytu',
                    'en' => 'Searching for new markets'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 295,
                'name' => json_encode([
                    'pl' => 'Tworzenie strategii marketingowej',
                    'en' => 'Creating marketing strategies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 296,
                'name' => json_encode([
                    'pl' => 'Zarządzanie kampaniami reklamowymi',
                    'en' => 'Managing advertising campaigns'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 297,
                'name' => json_encode([
                    'pl' => 'Badanie rynku i analiza konkurencji',
                    'en' => 'Market research and competitor analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 298,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem sprzedaży',
                    'en' => 'Cooperation with the sales department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 299,
                'name' => json_encode([
                    'pl' => 'Zarządzanie budżetem marketingowym',
                    'en' => 'Managing the marketing budget'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 300,
                'name' => json_encode([
                    'pl' => 'Nadzór nad działem obsługi klienta',
                    'en' => 'Supervising the customer service department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 301,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów klientów',
                    'en' => 'Solving customer problems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 302,
                'name' => json_encode([
                    'pl' => 'Monitorowanie jakości obsługi',
                    'en' => 'Monitoring service quality'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 303,
                'name' => json_encode([
                    'pl' => 'Edukacja pracowników',
                    'en' => 'Employee education'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 304,
                'name' => json_encode([
                    'pl' => 'Analiza opinii klientów',
                    'en' => 'Customer feedback analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 305,
                'name' => json_encode([
                    'pl' => 'Zarządzanie platformą sprzedażową',
                    'en' => 'Managing the sales platform'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 306,
                'name' => json_encode([
                    'pl' => 'Tworzenie strategii sprzedaży online',
                    'en' => 'Creating online sales strategies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 307,
                'name' => json_encode([
                    'pl' => 'Analiza ruchu i wyników sprzedaży',
                    'en' => 'Traffic and sales analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 308,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem marketingu',
                    'en' => 'Cooperation with the marketing department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 309,
                'name' => json_encode([
                    'pl' => 'Nadzór nad logistyką e-commerce',
                    'en' => 'Supervising e-commerce logistics'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 310,
                'name' => json_encode([
                    'pl' => 'Zarządzanie finansami przedsiębiorstwa',
                    'en' => 'Managing company finances'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 311,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów finansowych',
                    'en' => 'Creating financial reports'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 312,
                'name' => json_encode([
                    'pl' => 'Optymalizacja kosztów',
                    'en' => 'Cost optimization'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 313,
                'name' => json_encode([
                    'pl' => 'Kontrola nad zobowiązaniami i należnościami',
                    'en' => 'Controlling liabilities and receivables'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 314,
                'name' => json_encode([
                    'pl' => 'Współpraca z instytucjami finansowymi',
                    'en' => 'Cooperation with financial institutions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 315,
                'name' => json_encode([
                    'pl' => 'Zarządzanie polityką BHP',
                    'en' => 'Managing health and safety policy'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 316,
                'name' => json_encode([
                    'pl' => 'Szkolenia z zakresu BHP',
                    'en' => 'Health and safety training'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 317,
                'name' => json_encode([
                    'pl' => 'Monitorowanie stanu technicznego infrastruktury',
                    'en' => 'Monitoring the technical condition of infrastructure'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 318,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie audytów BHP',
                    'en' => 'Conducting health and safety audits'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 319,
                'name' => json_encode([
                    'pl' => 'Reagowanie na wypadki przy pracy',
                    'en' => 'Responding to workplace accidents'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $KIEROWNIKSIECISKLEPÓW = [
            [
                'id' => 320,
                'name' => json_encode([
                    'pl' => 'Koordynacja pracy poszczególnych sklepów',
                    'en' => 'Coordination of work in individual stores'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 321,
                'name' => json_encode([
                    'pl' => 'Nadzór nad efektywnością operacyjną',
                    'en' => 'Supervision of operational efficiency'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 322,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zaopatrzenia',
                    'en' => 'Monitoring supply'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 323,
                'name' => json_encode([
                    'pl' => 'Wdrażanie i egzekwowanie polityki firmy',
                    'en' => 'Implementing and enforcing company policies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 324,
                'name' => json_encode([
                    'pl' => 'Rekrutacja i selekcja personelu zarządzającego sklepami',
                    'en' => 'Recruitment and selection of store management staff'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 325,
                'name' => json_encode([
                    'pl' => 'Szkolenie i rozwój pracowników',
                    'en' => 'Training and employee development'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 326,
                'name' => json_encode([
                    'pl' => 'Motywowanie i zarządzanie zespołem',
                    'en' => 'Motivating and managing the team'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 327,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie konfliktów',
                    'en' => 'Conflict resolution'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 328,
                'name' => json_encode([
                    'pl' => 'Tworzenie budżetów i planowanie finansowe',
                    'en' => 'Creating budgets and financial planning'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 329,
                'name' => json_encode([
                    'pl' => 'Kontrola kosztów i rentowności',
                    'en' => 'Cost control and profitability monitoring'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 330,
                'name' => json_encode([
                    'pl' => 'Optymalizacja wydatków',
                    'en' => 'Expenditure optimization'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 331,
                'name' => json_encode([
                    'pl' => 'Monitorowanie przepływów finansowych',
                    'en' => 'Monitoring cash flows'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 332,
                'name' => json_encode([
                    'pl' => 'Analiza wyników sprzedażowych',
                    'en' => 'Sales performance analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 333,
                'name' => json_encode([
                    'pl' => 'Ustalanie celów sprzedażowych',
                    'en' => 'Setting sales targets'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 334,
                'name' => json_encode([
                    'pl' => 'Wdrażanie strategii sprzedażowych',
                    'en' => 'Implementing sales strategies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 335,
                'name' => json_encode([
                    'pl' => 'Monitorowanie działań konkurencji',
                    'en' => 'Monitoring competitors\' activities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 336,
                'name' => json_encode([
                    'pl' => 'Planowanie działań marketingowych',
                    'en' => 'Planning marketing activities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 337,
                'name' => json_encode([
                    'pl' => 'Promocja marki',
                    'en' => 'Brand promotion'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 338,
                'name' => json_encode([
                    'pl' => 'Realizacja kampanii reklamowych',
                    'en' => 'Execution of advertising campaigns'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 339,
                'name' => json_encode([
                    'pl' => 'Analiza efektywności kampanii',
                    'en' => 'Campaign effectiveness analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 340,
                'name' => json_encode([
                    'pl' => 'Standaryzacja obsługi klienta',
                    'en' => 'Customer service standardization'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 341,
                'name' => json_encode([
                    'pl' => 'Rozpatrywanie reklamacji i skarg',
                    'en' => 'Handling complaints and grievances'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 342,
                'name' => json_encode([
                    'pl' => 'Badanie satysfakcji klientów',
                    'en' => 'Customer satisfaction research'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 343,
                'name' => json_encode([
                    'pl' => 'Koordynacja logistyki dostaw',
                    'en' => 'Coordinating delivery logistics'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 344,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zapasów',
                    'en' => 'Monitoring inventory'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 345,
                'name' => json_encode([
                    'pl' => 'Zarządzanie dystrybucją towarów',
                    'en' => 'Managing goods distribution'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 346,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów prawa',
                    'en' => 'Compliance with legal regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 347,
                'name' => json_encode([
                    'pl' => 'Zarządzanie zgodnością z regulacjami sanitarnymi i BHP',
                    'en' => 'Managing compliance with sanitary and health and safety regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 348,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie sieci sklepów do kontroli ze strony organów nadzorczych i wewnętrznych audytów',
                    'en' => 'Preparing the store network for inspections by regulatory authorities and internal audits'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 349,
                'name' => json_encode([
                    'pl' => 'Poszukiwanie możliwości rozwoju',
                    'en' => 'Seeking development opportunities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 350,
                'name' => json_encode([
                    'pl' => 'Rozwój oferty produktowej',
                    'en' => 'Product range development'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 351,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowoczesnych technologii oraz rozwiązań usprawniających działanie sieci',
                    'en' => 'Implementing modern technologies and solutions to improve network operations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 352,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów',
                    'en' => 'Report creation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 353,
                'name' => json_encode([
                    'pl' => 'Udział w strategicznych decyzjach firmy',
                    'en' => 'Participation in strategic company decisions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $REGIONALNYKIEROWNIKSPRZEDAŻY = [
            [
                'id' => 354,
                'name' => json_encode([
                    'pl' => 'Rekrutacja i rozwój pracowników',
                    'en' => 'Recruitment and employee development'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 355,
                'name' => json_encode([
                    'pl' => 'Motywowanie zespołu',
                    'en' => 'Team motivation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 356,
                'name' => json_encode([
                    'pl' => 'Ustalanie zadań i celów dla zespołu',
                    'en' => 'Setting tasks and goals for the team'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 357,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wyników pracowników',
                    'en' => 'Monitoring employee performance'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 358,
                'name' => json_encode([
                    'pl' => 'Wdrażanie strategii sprzedażowych firmy',
                    'en' => 'Implementing company sales strategies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 359,
                'name' => json_encode([
                    'pl' => 'Tworzenie planów sprzedażowych',
                    'en' => 'Creating sales plans'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 360,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie działań do lokalnego rynku',
                    'en' => 'Adapting actions to the local market'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 361,
                'name' => json_encode([
                    'pl' => 'Monitorowanie realizacji celów',
                    'en' => 'Monitoring goal achievement'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 362,
                'name' => json_encode([
                    'pl' => 'Badanie lokalnego rynku',
                    'en' => 'Researching the local market'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 363,
                'name' => json_encode([
                    'pl' => 'Monitorowanie działań konkurencji',
                    'en' => 'Monitoring competitors\' activities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 364,
                'name' => json_encode([
                    'pl' => 'Identyfikacja możliwości rozwoju',
                    'en' => 'Identifying development opportunities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 365,
                'name' => json_encode([
                    'pl' => 'Raportowanie trendów i analiz rynkowych',
                    'en' => 'Reporting market trends and analyses'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 366,
                'name' => json_encode([
                    'pl' => 'Budowanie i utrzymywanie relacji z kluczowymi klientami',
                    'en' => 'Building and maintaining relationships with key clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 367,
                'name' => json_encode([
                    'pl' => 'Współpraca z lokalnymi partnerami handlowymi',
                    'en' => 'Cooperation with local business partners'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 368,
                'name' => json_encode([
                    'pl' => 'Negocjowanie umów',
                    'en' => 'Negotiating contracts'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 369,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów klientów',
                    'en' => 'Resolving customer issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 370,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wyników sprzedażowych',
                    'en' => 'Monitoring sales results'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 371,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie działań korygujących',
                    'en' => 'Implementing corrective actions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 372,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów sprzedażowych',
                    'en' => 'Creating sales reports'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 373,
                'name' => json_encode([
                    'pl' => 'Prognozowanie sprzedaży',
                    'en' => 'Sales forecasting'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 374,
                'name' => json_encode([
                    'pl' => 'Kontrola nad budżetem regionu',
                    'en' => 'Budget control for the region'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 375,
                'name' => json_encode([
                    'pl' => 'Optymalizacja kosztów',
                    'en' => 'Cost optimization'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 376,
                'name' => json_encode([
                    'pl' => 'Monitorowanie rentowności',
                    'en' => 'Monitoring profitability'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 377,
                'name' => json_encode([
                    'pl' => 'Koordynacja z działem marketingu',
                    'en' => 'Coordination with the marketing department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 378,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem logistyki',
                    'en' => 'Cooperation with the logistics department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 379,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem HR',
                    'en' => 'Cooperation with the HR department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 380,
                'name' => json_encode([
                    'pl' => 'Organizowanie szkoleń sprzedażowych',
                    'en' => 'Organizing sales training'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 381,
                'name' => json_encode([
                    'pl' => 'Indywidualny rozwój pracowników',
                    'en' => 'Individual employee development'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 382,
                'name' => json_encode([
                    'pl' => 'Budowanie kultury zespołowej',
                    'en' => 'Building team culture'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 383,
                'name' => json_encode([
                    'pl' => 'Regularne raportowanie wyników',
                    'en' => 'Regular performance reporting'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 384,
                'name' => json_encode([
                    'pl' => 'Prezentowanie strategii i wyników',
                    'en' => 'Presenting strategies and results'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 385,
                'name' => json_encode([
                    'pl' => 'Formułowanie rekomendacji',
                    'en' => 'Formulating recommendations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 386,
                'name' => json_encode([
                    'pl' => 'Identyfikacja potencjalnych zagrożeń',
                    'en' => 'Identifying potential risks'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 387,
                'name' => json_encode([
                    'pl' => 'Zarządzanie kryzysowe',
                    'en' => 'Crisis management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 388,
                'name' => json_encode([
                    'pl' => 'Dostosowanie do zmian na rynku',
                    'en' => 'Adapting to market changes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $KIEROWNIKDOSPRAWSPRZEDAŻY = [
            [
                'id' => 389,
                'name' => json_encode([
                    'pl' => 'Rekrutacja i selekcja pracowników',
                    'en' => 'Recruitment and selection of employees'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 390,
                'name' => json_encode([
                    'pl' => 'Szkolenie i rozwój zespołu',
                    'en' => 'Team training and development'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 391,
                'name' => json_encode([
                    'pl' => 'Motywowanie zespołu',
                    'en' => 'Team motivation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 392,
                'name' => json_encode([
                    'pl' => 'Ustalanie celów sprzedażowych',
                    'en' => 'Setting sales targets'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 393,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wyników pracowników',
                    'en' => 'Monitoring employee performance'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 394,
                'name' => json_encode([
                    'pl' => 'Tworzenie strategii sprzedaży',
                    'en' => 'Creating sales strategies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 395,
                'name' => json_encode([
                    'pl' => 'Wdrażanie strategii',
                    'en' => 'Implementing strategies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 396,
                'name' => json_encode([
                    'pl' => 'Analiza wyników sprzedaży',
                    'en' => 'Sales analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 397,
                'name' => json_encode([
                    'pl' => 'Segmentacja rynku',
                    'en' => 'Market segmentation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 398,
                'name' => json_encode([
                    'pl' => 'Budowanie relacji z kluczowymi klientami',
                    'en' => 'Building relationships with key clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 399,
                'name' => json_encode([
                    'pl' => 'Pozyskiwanie nowych klientów',
                    'en' => 'Acquiring new clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 400,
                'name' => json_encode([
                    'pl' => 'Monitorowanie satysfakcji klientów',
                    'en' => 'Monitoring customer satisfaction'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 401,
                'name' => json_encode([
                    'pl' => 'Rozpatrywanie reklamacji',
                    'en' => 'Handling complaints'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 402,
                'name' => json_encode([
                    'pl' => 'Prowadzenie negocjacji',
                    'en' => 'Conducting negotiations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 403,
                'name' => json_encode([
                    'pl' => 'Ustalanie warunków współpracy',
                    'en' => 'Establishing terms of cooperation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 404,
                'name' => json_encode([
                    'pl' => 'Zawieranie umów',
                    'en' => 'Contract signing'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 405,
                'name' => json_encode([
                    'pl' => 'Analiza trendów rynkowych',
                    'en' => 'Market trend analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 406,
                'name' => json_encode([
                    'pl' => 'Analiza działań konkurencji',
                    'en' => 'Competitor analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 407,
                'name' => json_encode([
                    'pl' => 'Rekomendowanie nowych działań',
                    'en' => 'Recommending new actions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 408,
                'name' => json_encode([
                    'pl' => 'Doskonalenie procesów sprzedaży',
                    'en' => 'Improving sales processes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 409,
                'name' => json_encode([
                    'pl' => 'Zarządzanie systemami CRM',
                    'en' => 'Managing CRM systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 410,
                'name' => json_encode([
                    'pl' => 'Automatyzacja działań sprzedażowych',
                    'en' => 'Sales process automation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 411,
                'name' => json_encode([
                    'pl' => 'Tworzenie budżetu sprzedażowego',
                    'en' => 'Creating the sales budget'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 412,
                'name' => json_encode([
                    'pl' => 'Kontrola kosztów sprzedaży',
                    'en' => 'Sales cost control'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 413,
                'name' => json_encode([
                    'pl' => 'Monitorowanie rentowności',
                    'en' => 'Monitoring profitability'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 414,
                'name' => json_encode([
                    'pl' => 'Koordynacja z działem marketingu',
                    'en' => 'Coordination with the marketing department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 415,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem logistyki',
                    'en' => 'Cooperation with the logistics department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 416,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem finansowym',
                    'en' => 'Cooperation with the finance department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 417,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem HR',
                    'en' => 'Cooperation with the HR department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 418,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów sprzedażowych',
                    'en' => 'Creating sales reports'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 419,
                'name' => json_encode([
                    'pl' => 'Prezentacja wyników',
                    'en' => 'Presenting results'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 420,
                'name' => json_encode([
                    'pl' => 'Prognozowanie sprzedaży',
                    'en' => 'Sales forecasting'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 421,
                'name' => json_encode([
                    'pl' => 'Identyfikacja zagrożeń',
                    'en' => 'Identifying risks'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 422,
                'name' => json_encode([
                    'pl' => 'Zarządzanie kryzysowe',
                    'en' => 'Crisis management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 423,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie aktualnej wiedzy',
                    'en' => 'Keeping knowledge up to date'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 424,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach i konferencjach',
                    'en' => 'Participating in training and conferences'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $KIEROWNIKDOMUAUKCYJNEGO = [
            [
                'id' => 425,
                'name' => json_encode([
                    'pl' => 'Nadzór nad organizacją aukcji',
                    'en' => 'Supervision of auction organization'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 426,
                'name' => json_encode([
                    'pl' => 'Koordynacja z działem logistycznym',
                    'en' => 'Coordination with the logistics department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 427,
                'name' => json_encode([
                    'pl' => 'Zarządzanie finansami domu aukcyjnego',
                    'en' => 'Managing the finances of the auction house'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 428,
                'name' => json_encode([
                    'pl' => 'Dbałość o zgodność z przepisami',
                    'en' => 'Ensuring compliance with regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 429,
                'name' => json_encode([
                    'pl' => 'Zapewnienie ochrony i bezpieczeństwa przedmiotów',
                    'en' => 'Ensuring the security and safety of items'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 430,
                'name' => json_encode([
                    'pl' => 'Rekrutacja i szkolenie personelu',
                    'en' => 'Recruitment and training of staff'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 431,
                'name' => json_encode([
                    'pl' => 'Nadzorowanie pracy zespołu',
                    'en' => 'Supervising team work'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 432,
                'name' => json_encode([
                    'pl' => 'Motywowanie zespołu',
                    'en' => 'Team motivation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 433,
                'name' => json_encode([
                    'pl' => 'Budowanie relacji z kupującymi i sprzedającymi',
                    'en' => 'Building relationships with buyers and sellers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 434,
                'name' => json_encode([
                    'pl' => 'Doradztwo w zakresie wartości przedmiotów, wyceny, historii sztuki i rynku antyków',
                    'en' => 'Consulting on the value of items, valuation, art history, and the antiques market'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 435,
                'name' => json_encode([
                    'pl' => 'Negocjacje umów',
                    'en' => 'Contract negotiations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 436,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie reklamacji i sporów',
                    'en' => 'Resolving complaints and disputes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 437,
                'name' => json_encode([
                    'pl' => 'Tworzenie katalogów aukcyjnych',
                    'en' => 'Creating auction catalogs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 438,
                'name' => json_encode([
                    'pl' => 'Planowanie kampanii promocyjnych',
                    'en' => 'Planning promotional campaigns'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 439,
                'name' => json_encode([
                    'pl' => 'Współpraca z mediami',
                    'en' => 'Cooperation with the media'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 440,
                'name' => json_encode([
                    'pl' => 'Organizacja wystaw przedaukcyjnych',
                    'en' => 'Organizing pre-auction exhibitions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 441,
                'name' => json_encode([
                    'pl' => 'Wycena przedmiotów',
                    'en' => 'Item valuation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 442,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie autentyczności',
                    'en' => 'Authenticity verification'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 443,
                'name' => json_encode([
                    'pl' => 'Ocena stanu przedmiotów',
                    'en' => 'Condition assessment of items'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 444,
                'name' => json_encode([
                    'pl' => 'Współpraca z dostawcami usług',
                    'en' => 'Cooperation with service providers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 445,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań z instytucjami finansowymi',
                    'en' => 'Coordination with financial institutions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 446,
                'name' => json_encode([
                    'pl' => 'Współpraca z muzeami, galeriami i kolekcjonerami',
                    'en' => 'Cooperation with museums, galleries, and collectors'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 447,
                'name' => json_encode([
                    'pl' => 'Śledzenie trendów rynkowych',
                    'en' => 'Tracking market trends'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 448,
                'name' => json_encode([
                    'pl' => 'Analiza działań konkurencji',
                    'en' => 'Competitor analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 449,
                'name' => json_encode([
                    'pl' => 'Zarządzanie ofertą aukcyjną',
                    'en' => 'Managing the auction offer'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 450,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów finansowych',
                    'en' => 'Creating financial reports'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 451,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wyników sprzedaży',
                    'en' => 'Monitoring sales performance'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 452,
                'name' => json_encode([
                    'pl' => 'Raportowanie do zarządu',
                    'en' => 'Reporting to the board'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 453,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów prawa',
                    'en' => 'Compliance with legal regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 454,
                'name' => json_encode([
                    'pl' => 'Zarządzanie ryzykiem finansowym',
                    'en' => 'Managing financial risk'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 455,
                'name' => json_encode([
                    'pl' => 'Zarządzanie ryzykiem reputacyjnym',
                    'en' => 'Managing reputational risk'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 456,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowych technologii',
                    'en' => 'Implementing new technologies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 457,
                'name' => json_encode([
                    'pl' => 'Poszukiwanie nowych możliwości rozwoju',
                    'en' => 'Seeking new development opportunities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 458,
                'name' => json_encode([
                    'pl' => 'Organizowanie aukcji w innych krajach lub pozyskiwanie klientów i partnerów zagranicznych',
                    'en' => 'Organizing auctions in other countries or acquiring foreign clients and partners'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];

        $PRZEDSTAWICIELHANDLOWY = [
            [
                'id' => 459,
                'name' => json_encode([
                    'pl' => 'Aktywne wyszukiwanie potencjalnych klientów',
                    'en' => 'Active search for potential clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 460,
                'name' => json_encode([
                    'pl' => 'Kontaktowanie się z nowymi klientami przez telefon, e-mail, media społecznościowe lub bezpośrednie spotkania',
                    'en' => 'Contacting new clients via phone, email, social media, or direct meetings'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 461,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie prezentacji produktów lub usług',
                    'en' => 'Conducting product or service presentations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 462,
                'name' => json_encode([
                    'pl' => 'Przekonywanie potencjalnych klientów do współpracy i zamykanie transakcji sprzedażowych',
                    'en' => 'Convincing potential clients to collaborate and closing sales deals'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 463,
                'name' => json_encode([
                    'pl' => 'Regularny kontakt z istniejącymi klientami w celu utrzymania dobrych relacji',
                    'en' => 'Maintaining regular contact with existing clients to sustain good relationships'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 464,
                'name' => json_encode([
                    'pl' => 'Udzielanie wsparcia klientom w zakresie obsługi posprzedażowej',
                    'en' => 'Providing post-sales support to clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 465,
                'name' => json_encode([
                    'pl' => 'Analiza potrzeb klientów i proponowanie odpowiednich rozwiązań lub produktów',
                    'en' => 'Analyzing client needs and proposing suitable solutions or products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 466,
                'name' => json_encode([
                    'pl' => 'Monitorowanie satysfakcji klienta i rozwiązywanie ewentualnych problemów',
                    'en' => 'Monitoring customer satisfaction and resolving potential issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 467,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie pokazów, demonstracji produktów lub szkoleń dla klientów',
                    'en' => 'Conducting product demos or trainings for clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 468,
                'name' => json_encode([
                    'pl' => 'Udzielanie klientom informacji na temat oferty, specyfikacji produktów, korzyści i ceny',
                    'en' => 'Providing clients with information on offers, product specifications, benefits, and pricing'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 469,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie i dostarczanie materiałów marketingowych (ulotki, katalogi, prezentacje)',
                    'en' => 'Preparing and delivering marketing materials (brochures, catalogs, presentations)'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 470,
                'name' => json_encode([
                    'pl' => 'Negocjowanie cen, warunków dostawy, płatności oraz innych szczegółów związanych z transakcją',
                    'en' => 'Negotiating prices, delivery terms, payments, and other transaction details'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 471,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie ofert do indywidualnych potrzeb klientów, dbając o rentowność transakcji',
                    'en' => 'Adapting offers to individual client needs while ensuring transaction profitability'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 472,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie umów oraz ofert handlowych',
                    'en' => 'Preparing contracts and business offers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 473,
                'name' => json_encode([
                    'pl' => 'Dążenie do osiągania wyznaczonych celów sprzedażowych',
                    'en' => 'Striving to achieve set sales targets'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 474,
                'name' => json_encode([
                    'pl' => 'Monitorowanie postępów w realizacji planów oraz raportowanie wyników przełożonym',
                    'en' => 'Monitoring progress in plan execution and reporting results to supervisors'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 475,
                'name' => json_encode([
                    'pl' => 'Analiza rynków i konkurencji w celu dostosowywania strategii sprzedaży',
                    'en' => 'Analyzing markets and competitors to adapt sales strategies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 476,
                'name' => json_encode([
                    'pl' => 'Sporządzanie regularnych raportów sprzedażowych, w tym analiz sprzedaży, prognoz oraz trendów rynkowych',
                    'en' => 'Preparing regular sales reports, including sales analysis, forecasts, and market trends'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 477,
                'name' => json_encode([
                    'pl' => 'Monitorowanie działań konkurencji i bieżącej sytuacji na rynku',
                    'en' => 'Monitoring competitors\' actions and current market conditions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 478,
                'name' => json_encode([
                    'pl' => 'Raportowanie wszelkich zmian w preferencjach klientów i ich potrzebach',
                    'en' => 'Reporting any changes in client preferences and needs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 479,
                'name' => json_encode([
                    'pl' => 'Organizowanie i planowanie spotkań oraz wizyt handlowych',
                    'en' => 'Organizing and planning meetings and sales visits'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 480,
                'name' => json_encode([
                    'pl' => 'Zarządzanie swoim czasem w celu maksymalizacji efektywności sprzedaży',
                    'en' => 'Managing time to maximize sales efficiency'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 481,
                'name' => json_encode([
                    'pl' => 'Opracowywanie planów działania, strategii sprzedażowych i priorytetów',
                    'en' => 'Developing action plans, sales strategies, and priorities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 482,
                'name' => json_encode([
                    'pl' => 'Bliska współpraca z działem marketingu',
                    'en' => 'Close cooperation with the marketing department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 483,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań z działem logistyki w celu terminowej realizacji zamówień',
                    'en' => 'Coordinating actions with logistics to ensure timely order fulfillment'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 484,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem finansowym w zakresie płatności i fakturowania',
                    'en' => 'Cooperation with the finance department regarding payments and invoicing'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 485,
                'name' => json_encode([
                    'pl' => 'Uczestniczenie w szkoleniach i kursach mających na celu podnoszenie kwalifikacji',
                    'en' => 'Participating in trainings and courses to enhance qualifications'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 486,
                'name' => json_encode([
                    'pl' => 'Śledzenie trendów rynkowych i nowości produktowych, aby być na bieżąco z ofertą i potrzebami rynku',
                    'en' => 'Following market trends and product innovations to stay updated with market needs and offerings'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 487,
                'name' => json_encode([
                    'pl' => 'Obsługa reklamacji oraz rozwiązywanie problemów zgłaszanych przez klientów',
                    'en' => 'Handling complaints and resolving issues reported by clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 488,
                'name' => json_encode([
                    'pl' => 'Dbanie o to, aby klienci byli zadowoleni po zakupie i chętni do ponownej współpracy',
                    'en' => 'Ensuring clients are satisfied post-purchase and eager for future cooperation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $POZOSTALIPRZEDSTAWICIELEHANDLOWI = [
            [
                'id' => 489,
                'name' => json_encode([
                    'pl' => 'Nawiązywanie relacji z firmami i instytucjami',
                    'en' => 'Establishing relationships with companies and institutions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 490,
                'name' => json_encode([
                    'pl' => 'Sprzedaż produktów lub usług, które są przeznaczone dla innych firm',
                    'en' => 'Selling products or services intended for other businesses'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 491,
                'name' => json_encode([
                    'pl' => 'Organizowanie spotkań z menedżerami zakupów, dyrektorami lub właścicielami firm',
                    'en' => 'Organizing meetings with purchasing managers, directors, or company owners'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 492,
                'name' => json_encode([
                    'pl' => 'Doradzanie firmom w zakresie kompleksowych rozwiązań, które mogą usprawnić ich działalność',
                    'en' => 'Advising companies on comprehensive solutions to improve their operations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 493,
                'name' => json_encode([
                    'pl' => 'Zrozumienie potrzeb klientów biznesowych i dostosowanie oferty do ich strategii operacyjnych',
                    'en' => 'Understanding business clients\' needs and tailoring offers to their operational strategies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 494,
                'name' => json_encode([
                    'pl' => 'Sprzedaż produktów lub usług bezpośrednio do konsumentów końcowych',
                    'en' => 'Selling products or services directly to end consumers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 495,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie prezentacji dla klientów indywidualnych w celu przekonania ich do zakupu',
                    'en' => 'Conducting presentations for individual clients to persuade them to purchase'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 496,
                'name' => json_encode([
                    'pl' => 'Udzielanie szczegółowych informacji o produktach',
                    'en' => 'Providing detailed information about products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 497,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie transakcji w punktach sprzedaży detalicznej lub na specjalistycznych stoiskach',
                    'en' => 'Carrying out transactions at retail points or specialist stalls'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 498,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie stałego kontaktu z klientami indywidualnymi i obsługa posprzedażowa',
                    'en' => 'Maintaining constant contact with individual clients and providing post-sales support'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 499,
                'name' => json_encode([
                    'pl' => 'Sprzedaż specjalistycznych produktów technicznych, takich jak maszyny, narzędzia przemysłowe, technologie IT czy sprzęt inżynieryjny',
                    'en' => 'Selling specialist technical products such as machines, industrial tools, IT technologies, or engineering equipment'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 500,
                'name' => json_encode([
                    'pl' => 'Doradzanie klientom w zakresie technologicznych rozwiązań, które usprawnią ich procesy produkcyjne lub operacyjne',
                    'en' => 'Advising clients on technological solutions to improve their production or operational processes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 501,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie kompleksowych ofert dostosowanych do specyfikacji technicznych produktów',
                    'en' => 'Preparing comprehensive offers tailored to product technical specifications'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 502,
                'name' => json_encode([
                    'pl' => 'Udział w targach i konferencjach branżowych, gdzie prezentowane są najnowsze rozwiązania technologiczne',
                    'en' => 'Participating in industry fairs and conferences where the latest technological solutions are presented'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 503,
                'name' => json_encode([
                    'pl' => 'Oferowanie wsparcia posprzedażowego, w tym serwisowania sprzętu lub udzielania szkoleń technicznych',
                    'en' => 'Providing post-sales support, including equipment servicing or providing technical training'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 504,
                'name' => json_encode([
                    'pl' => 'Zajmowanie się sprzedażą produktów lub usług na rynkach zagranicznych',
                    'en' => 'Handling the sale of products or services in foreign markets'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 505,
                'name' => json_encode([
                    'pl' => 'Nawiązywanie relacji z partnerami biznesowymi oraz dystrybutorami w różnych krajach',
                    'en' => 'Building relationships with business partners and distributors in various countries'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 506,
                'name' => json_encode([
                    'pl' => 'Koordynowanie procesu eksportu, w tym organizacja logistyki, dokumentacji i formalności celnych',
                    'en' => 'Coordinating the export process, including logistics, documentation, and customs formalities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 507,
                'name' => json_encode([
                    'pl' => 'Znajomość przepisów prawnych, regulacji dotyczących eksportu oraz standardów branżowych w poszczególnych krajach',
                    'en' => 'Knowledge of legal regulations, export laws, and industry standards in different countries'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 508,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie strategii sprzedażowej do specyfiki kulturowej i prawnej rynków zagranicznych',
                    'en' => 'Adapting sales strategies to the cultural and legal specifics of foreign markets'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 509,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w międzynarodowych targach i wystawach handlowych',
                    'en' => 'Participating in international trade fairs and exhibitions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 510,
                'name' => json_encode([
                    'pl' => 'Zarządzanie kluczowymi klientami firmy',
                    'en' => 'Managing key clients of the company'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 511,
                'name' => json_encode([
                    'pl' => 'Budowanie długoterminowych relacji z wybranymi klientami',
                    'en' => 'Building long-term relationships with selected clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 512,
                'name' => json_encode([
                    'pl' => 'Zrozumienie specyficznych potrzeb i oczekiwań klientów oraz dostosowywanie ofert do ich wymagań',
                    'en' => 'Understanding clients\' specific needs and expectations, and adjusting offers accordingly'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 513,
                'name' => json_encode([
                    'pl' => 'Koordynacja współpracy z innymi działami wewnątrz firmy',
                    'en' => 'Coordinating cooperation with other departments within the company'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 514,
                'name' => json_encode([
                    'pl' => 'Negocjowanie długoterminowych umów handlowych i kontraktów',
                    'en' => 'Negotiating long-term commercial agreements and contracts'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 515,
                'name' => json_encode([
                    'pl' => 'Analizowanie i przewidywanie potrzeb klientów w długoterminowej perspektywie',
                    'en' => 'Analyzing and forecasting clients\' long-term needs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 516,
                'name' => json_encode([
                    'pl' => 'Regularne odwiedzanie klientów w terenie',
                    'en' => 'Regularly visiting clients in the field'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 517,
                'name' => json_encode([
                    'pl' => 'Bezpośredni kontakt z klientami w ich miejscach działalności',
                    'en' => 'Direct contact with clients at their business locations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 518,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie prezentacji produktów na miejscu oraz doradztwo',
                    'en' => 'Conducting on-site product presentations and consulting'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 519,
                'name' => json_encode([
                    'pl' => 'Monitorowanie lokalnych rynków i śledzenie działań konkurencji',
                    'en' => 'Monitoring local markets and tracking competitor activities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 520,
                'name' => json_encode([
                    'pl' => 'Samodzielne planowanie trasy i harmonogramu pracy',
                    'en' => 'Independently planning routes and work schedules'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 521,
                'name' => json_encode([
                    'pl' => 'Prowadzenie sprzedaży za pomocą rozmów telefonicznych',
                    'en' => 'Conducting sales via telephone calls'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 522,
                'name' => json_encode([
                    'pl' => 'Prezentowanie oferty, przekonywanie do zakupu, zbieranie zamówień oraz obsługa klientów przez telefon',
                    'en' => 'Presenting offers, persuading clients to purchase, taking orders, and handling customer inquiries via phone'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 523,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów klientów i odpowiadanie na ich pytania dotyczące produktów lub usług',
                    'en' => 'Resolving client issues and answering their questions regarding products or services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 524,
                'name' => json_encode([
                    'pl' => 'Dbanie o satysfakcję klienta po zakupie, obsługa reklamacji',
                    'en' => 'Ensuring customer satisfaction post-purchase, handling complaints'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 525,
                'name' => json_encode([
                    'pl' => 'Sprzedaż produktów w dużych ilościach, najczęściej do hurtowni, sklepów detalicznych lub innych pośredników',
                    'en' => 'Selling products in large quantities, usually to wholesalers, retail stores, or other intermediaries'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 526,
                'name' => json_encode([
                    'pl' => 'Negocjowanie umów dotyczących większych partii towaru',
                    'en' => 'Negotiating contracts for larger quantities of goods'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 527,
                'name' => json_encode([
                    'pl' => 'Zarządzanie zamówieniami i dostawami na większą skalę',
                    'en' => 'Managing orders and deliveries on a larger scale'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 528,
                'name' => json_encode([
                    'pl' => 'Dbanie o to, aby produkty były odpowiednio eksponowane w sieciach handlowych oraz sklepach',
                    'en' => 'Ensuring that products are properly displayed in retail networks and stores'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 529,
                'name' => json_encode([
                    'pl' => 'Sprzedaż usług',
                    'en' => 'Selling services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 530,
                'name' => json_encode([
                    'pl' => 'Udzielanie klientom doradztwa w zakresie korzyści wynikających z oferowanych usług',
                    'en' => 'Advising clients on the benefits of offered services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 531,
                'name' => json_encode([
                    'pl' => 'Budowanie długoterminowych relacji oparte na zaufaniu i jakości obsługi',
                    'en' => 'Building long-term relationships based on trust and quality service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 532,
                'name' => json_encode([
                    'pl' => 'Monitorowanie satysfakcji klienta oraz dopasowywanie oferty usług do jego bieżących potrzeb',
                    'en' => 'Monitoring customer satisfaction and adjusting service offers to their current needs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $POŚREDNIKUSŁUGMEDYCZNYCH = [
            [
                'id' => 533,
                'name' => json_encode([
                    'pl' => 'Analiza potrzeb pacjenta',
                    'en' => 'Patient needs analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 534,
                'name' => json_encode([
                    'pl' => 'Rekomendacja placówek medycznych',
                    'en' => 'Recommending medical facilities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 535,
                'name' => json_encode([
                    'pl' => 'Informowanie o możliwościach leczenia',
                    'en' => 'Informing about treatment options'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 536,
                'name' => json_encode([
                    'pl' => 'Umawianie wizyt',
                    'en' => 'Scheduling appointments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 537,
                'name' => json_encode([
                    'pl' => 'Rezerwacja zabiegów i badań',
                    'en' => 'Booking treatments and tests'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 538,
                'name' => json_encode([
                    'pl' => 'Koordynacja harmonogramu',
                    'en' => 'Schedule coordination'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 539,
                'name' => json_encode([
                    'pl' => 'Wsparcie w zbieraniu i przekazywaniu dokumentacji medycznej',
                    'en' => 'Assisting with collecting and transferring medical documentation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 540,
                'name' => json_encode([
                    'pl' => 'Pomoc w wypełnianiu formularzy',
                    'en' => 'Helping with filling out forms'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 541,
                'name' => json_encode([
                    'pl' => 'Tłumaczenie dokumentów medycznych',
                    'en' => 'Translating medical documents'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 542,
                'name' => json_encode([
                    'pl' => 'Nawiązywanie kontaktów z placówkami',
                    'en' => 'Establishing contact with medical facilities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 543,
                'name' => json_encode([
                    'pl' => 'Negocjowanie warunków współpracy',
                    'en' => 'Negotiating cooperation terms'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 544,
                'name' => json_encode([
                    'pl' => 'Monitorowanie jakości usług świadczonych przez współpracujące placówki medyczne',
                    'en' => 'Monitoring the quality of services provided by collaborating medical facilities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 545,
                'name' => json_encode([
                    'pl' => 'Doradzanie pacjentom w zakresie dostępnych ubezpieczeń zdrowotnych',
                    'en' => 'Advising patients on available health insurance options'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 546,
                'name' => json_encode([
                    'pl' => 'Pomoc w uzyskaniu odszkodowań',
                    'en' => 'Assisting in obtaining compensation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 547,
                'name' => json_encode([
                    'pl' => 'Organizowanie i koordynacja płatności za usługi medyczne',
                    'en' => 'Organizing and coordinating payments for medical services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 548,
                'name' => json_encode([
                    'pl' => 'Organizacja wyjazdów medycznych',
                    'en' => 'Organizing medical trips'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 549,
                'name' => json_encode([
                    'pl' => 'Pomoc w wyborze zagranicznych ośrodków',
                    'en' => 'Assisting in selecting foreign medical centers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 550,
                'name' => json_encode([
                    'pl' => 'Zajmowanie się wszystkimi formalnościami związanymi z leczeniem zagranicznym',
                    'en' => 'Handling all formalities related to foreign treatment'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 551,
                'name' => json_encode([
                    'pl' => 'Pomoc w organizacji rehabilitacji',
                    'en' => 'Assisting in organizing rehabilitation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 552,
                'name' => json_encode([
                    'pl' => 'Monitorowanie stanu zdrowia po zabiegu',
                    'en' => 'Monitoring health condition after surgery'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 553,
                'name' => json_encode([
                    'pl' => 'Organizacja opieki domowej',
                    'en' => 'Organizing home care'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 554,
                'name' => json_encode([
                    'pl' => 'Informowanie o dostępnych opcjach leczenia',
                    'en' => 'Informing about available treatment options'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 555,
                'name' => json_encode([
                    'pl' => 'Organizowanie spotkań, webinarów lub konsultacji dla pacjentów na temat profilaktyki zdrowotnej',
                    'en' => 'Organizing meetings, webinars, or consultations for patients on health prevention'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 556,
                'name' => json_encode([
                    'pl' => 'Pomoc w interpretacji wyników',
                    'en' => 'Assisting in interpreting test results'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 557,
                'name' => json_encode([
                    'pl' => 'Pomoc w zarządzaniu stresem',
                    'en' => 'Assisting in stress management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 558,
                'name' => json_encode([
                    'pl' => 'Organizowanie wsparcia psychologicznego',
                    'en' => 'Organizing psychological support'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 559,
                'name' => json_encode([
                    'pl' => 'Znajomość regulacji prawnych',
                    'en' => 'Knowledge of legal regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 560,
                'name' => json_encode([
                    'pl' => 'Zarządzanie zgodnością z przepisami dotyczącymi ochrony danych osobowych (RODO)',
                    'en' => 'Managing compliance with personal data protection regulations (GDPR)'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $AKWIZYTOR = [
            [
                'id' => 561,
                'name' => json_encode([
                    'pl' => 'Aktywne poszukiwanie klientów',
                    'en' => 'Active customer search'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 562,
                'name' => json_encode([
                    'pl' => 'Prezentowanie oferty',
                    'en' => 'Presenting the offer'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 563,
                'name' => json_encode([
                    'pl' => 'Poszukiwanie nowych rynków',
                    'en' => 'Seeking new markets'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 564,
                'name' => json_encode([
                    'pl' => 'Prezentacja produktów',
                    'en' => 'Product presentation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 565,
                'name' => json_encode([
                    'pl' => 'Zamknięcie sprzedaży',
                    'en' => 'Closing sales'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 566,
                'name' => json_encode([
                    'pl' => 'Prowadzenie sprzedaży bezpośredniej',
                    'en' => 'Conducting direct sales'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 567,
                'name' => json_encode([
                    'pl' => 'Negocjowanie warunków sprzedaży',
                    'en' => 'Negotiating sales terms'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 568,
                'name' => json_encode([
                    'pl' => 'Doradztwo produktowe',
                    'en' => 'Product consulting'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 569,
                'name' => json_encode([
                    'pl' => 'Budowanie długotrwałych relacji',
                    'en' => 'Building long-term relationships'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 570,
                'name' => json_encode([
                    'pl' => 'Rozwijanie sieci klientów',
                    'en' => 'Expanding customer network'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 571,
                'name' => json_encode([
                    'pl' => 'Wsparcie po sprzedaży',
                    'en' => 'Post-sales support'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 572,
                'name' => json_encode([
                    'pl' => 'Zarządzanie reklamacjami',
                    'en' => 'Handling complaints'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 573,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów sprzedażowych',
                    'en' => 'Preparing sales reports'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 574,
                'name' => json_encode([
                    'pl' => 'Analiza danych sprzedażowych',
                    'en' => 'Sales data analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 575,
                'name' => json_encode([
                    'pl' => 'Osiąganie celów sprzedażowych',
                    'en' => 'Achieving sales targets'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 576,
                'name' => json_encode([
                    'pl' => 'Monitorowanie postępów',
                    'en' => 'Monitoring progress'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 577,
                'name' => json_encode([
                    'pl' => 'Tworzenie indywidualnych ofert',
                    'en' => 'Creating individual offers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 578,
                'name' => json_encode([
                    'pl' => 'Przedstawianie warunków umów',
                    'en' => 'Presenting contract terms'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 579,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w szkoleniach',
                    'en' => 'Attending trainings'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 580,
                'name' => json_encode([
                    'pl' => 'Śledzenie trendów rynkowych',
                    'en' => 'Following market trends'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 581,
                'name' => json_encode([
                    'pl' => 'Ochrona danych klientów',
                    'en' => 'Customer data protection'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 582,
                'name' => json_encode([
                    'pl' => 'Planowanie wizyt',
                    'en' => 'Planning visits'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 583,
                'name' => json_encode([
                    'pl' => 'Dostarczanie zamówionych produktów',
                    'en' => 'Delivering ordered products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 584,
                'name' => json_encode([
                    'pl' => 'Obsługa narzędzi sprzedażowych jak bazy danych klientów, systemy CRM',
                    'en' => 'Using sales tools like customer databases, CRM systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 585,
                'name' => json_encode([
                    'pl' => 'Promocja w mediach społecznościowych',
                    'en' => 'Social media promotion'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $KONSULTANTAGENTSPRZEDAŻYBEZPOŚREDNIEJ = [
            [
                'id' => 586,
                'name' => json_encode([
                    'pl' => 'Identyfikacja potencjalnych klientów',
                    'en' => 'Identifying potential clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 587,
                'name' => json_encode([
                    'pl' => 'Nawiązywanie kontaktów',
                    'en' => 'Establishing contacts'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 588,
                'name' => json_encode([
                    'pl' => 'Tworzenie sieci kontaktów',
                    'en' => 'Building a contact network'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 589,
                'name' => json_encode([
                    'pl' => 'Przygotowanie prezentacji ofertowych',
                    'en' => 'Preparing offer presentations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 590,
                'name' => json_encode([
                    'pl' => 'Demonstracje produktów',
                    'en' => 'Product demonstrations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 591,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie oferty do potrzeb i oczekiwań konkretnego klienta',
                    'en' => 'Adapting offers to the needs and expectations of specific clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 592,
                'name' => json_encode([
                    'pl' => 'Sprzedaż produktów i usług',
                    'en' => 'Selling products and services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 593,
                'name' => json_encode([
                    'pl' => 'Negocjowanie warunków umowy do możliwości i potrzeb klienta',
                    'en' => 'Negotiating contract terms to suit the client\'s needs and capabilities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 594,
                'name' => json_encode([
                    'pl' => 'Doprowadzanie do finalizacji transakcji',
                    'en' => 'Closing sales deals'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 595,
                'name' => json_encode([
                    'pl' => 'Budowanie długotrwałych relacji z klientami',
                    'en' => 'Building long-term relationships with clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 596,
                'name' => json_encode([
                    'pl' => 'Regularny kontakt z klientami',
                    'en' => 'Maintaining regular contact with clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 597,
                'name' => json_encode([
                    'pl' => 'Zarządzanie portfelem klientów',
                    'en' => 'Managing a client portfolio'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 598,
                'name' => json_encode([
                    'pl' => 'Doradztwo w zakresie wyboru produktów',
                    'en' => 'Product selection advisory'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 599,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na pytania klientów',
                    'en' => 'Answering client questions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 600,
                'name' => json_encode([
                    'pl' => 'Wsparcie techniczne i merytoryczne',
                    'en' => 'Providing technical and substantive support'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 601,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom po dokonaniu zakupu',
                    'en' => 'Helping clients after purchase'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 602,
                'name' => json_encode([
                    'pl' => 'Rozpatrywanie reklamacji',
                    'en' => 'Handling complaints'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 603,
                'name' => json_encode([
                    'pl' => 'Oferowanie dodatkowych produktów i usług',
                    'en' => 'Offering additional products and services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 604,
                'name' => json_encode([
                    'pl' => 'Realizowanie planów sprzedażowych określonych przez firmę',
                    'en' => 'Achieving sales targets set by the company'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 605,
                'name' => json_encode([
                    'pl' => 'Monitorowanie postępów',
                    'en' => 'Monitoring progress'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 606,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów',
                    'en' => 'Creating reports'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 607,
                'name' => json_encode([
                    'pl' => 'Analiza wyników sprzedaży',
                    'en' => 'Sales results analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 608,
                'name' => json_encode([
                    'pl' => 'Planowanie działań sprzedażowych',
                    'en' => 'Planning sales activities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 609,
                'name' => json_encode([
                    'pl' => 'Efektywne zarządzanie własnym czasem',
                    'en' => 'Effective time management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 610,
                'name' => json_encode([
                    'pl' => 'Ustalanie priorytetów',
                    'en' => 'Setting priorities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 611,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach',
                    'en' => 'Participating in trainings'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 612,
                'name' => json_encode([
                    'pl' => 'Doskonalenie technik sprzedażowych',
                    'en' => 'Improving sales techniques'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 613,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie firmy',
                    'en' => 'Representing the company'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 614,
                'name' => json_encode([
                    'pl' => 'Udział w wydarzeniach marketingowych',
                    'en' => 'Participating in marketing events'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 615,
                'name' => json_encode([
                    'pl' => 'Zarządzanie bazą danych klientów',
                    'en' => 'Managing the client database'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 616,
                'name' => json_encode([
                    'pl' => 'Używanie technologii wspierających sprzedaż',
                    'en' => 'Using sales-supporting technology'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $POZOSTALIAGENCISPRZEDAŻYBEZPOŚREDNIEJ = [
            [
                'id' => 617,
                'name' => json_encode([
                    'pl' => 'Nawiązywanie kontaktów z potencjalnymi klientami',
                    'en' => 'Establishing contact with potential clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 618,
                'name' => json_encode([
                    'pl' => 'Zidentyfikowanie potrzeb klienta',
                    'en' => 'Identifying client needs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 619,
                'name' => json_encode([
                    'pl' => 'Przygotowanie indywidualnych ofert polis ubezpieczeniowych',
                    'en' => 'Preparing individual insurance policy offers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 620,
                'name' => json_encode([
                    'pl' => 'Przygotowanie i obsługa dokumentów ubezpieczeniowych',
                    'en' => 'Preparing and handling insurance documents'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 621,
                'name' => json_encode([
                    'pl' => 'Monitorowanie i aktualizacja polis',
                    'en' => 'Monitoring and updating policies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 622,
                'name' => json_encode([
                    'pl' => 'Obsługa roszczeń',
                    'en' => 'Handling claims'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 623,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie relacji z klientami',
                    'en' => 'Maintaining client relationships'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 624,
                'name' => json_encode([
                    'pl' => 'Demonstracja produktów kosmetycznych',
                    'en' => 'Cosmetic product demonstration'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 625,
                'name' => json_encode([
                    'pl' => 'Organizacja spotkań i prezentacji',
                    'en' => 'Organizing meetings and presentations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 626,
                'name' => json_encode([
                    'pl' => 'Doradztwo kosmetyczne',
                    'en' => 'Cosmetic consulting'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 627,
                'name' => json_encode([
                    'pl' => 'Pozyskiwanie klientów',
                    'en' => 'Acquiring clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 628,
                'name' => json_encode([
                    'pl' => 'Sprzedaż bezpośrednia',
                    'en' => 'Direct sales'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 629,
                'name' => json_encode([
                    'pl' => 'Obsługa posprzedażowa',
                    'en' => 'Post-sales service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 630,
                'name' => json_encode([
                    'pl' => 'Zarządzanie zamówieniami',
                    'en' => 'Order management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 631,
                'name' => json_encode([
                    'pl' => 'Sprzedaż produktów finansowych',
                    'en' => 'Sales of financial products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 632,
                'name' => json_encode([
                    'pl' => 'Analiza sytuacji finansowej klienta',
                    'en' => 'Client financial situation analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 633,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie ofert',
                    'en' => 'Preparing offers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 634,
                'name' => json_encode([
                    'pl' => 'Negocjowanie z klientem warunków umowy',
                    'en' => 'Negotiating contract terms with the client'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 635,
                'name' => json_encode([
                    'pl' => 'Śledzenie zmian na rynku finansowym',
                    'en' => 'Tracking changes in the financial market'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 636,
                'name' => json_encode([
                    'pl' => 'Obsługa klienta',
                    'en' => 'Customer service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 637,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie regulacji',
                    'en' => 'Compliance with regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 638,
                'name' => json_encode([
                    'pl' => 'Promowanie zdrowego stylu życia',
                    'en' => 'Promoting a healthy lifestyle'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 639,
                'name' => json_encode([
                    'pl' => 'Demonstracja produktów zdrowotnych',
                    'en' => 'Health product demonstration'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 640,
                'name' => json_encode([
                    'pl' => 'Doradztwo zdrowotne',
                    'en' => 'Health consulting'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 641,
                'name' => json_encode([
                    'pl' => 'Prowadzenie warsztatów lub szkoleń',
                    'en' => 'Conducting workshops or trainings'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 642,
                'name' => json_encode([
                    'pl' => 'Prezentowanie klientom sprzętu gospodarstwa domowego',
                    'en' => 'Presenting household appliances to clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 643,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie prezentacji w domach klientów',
                    'en' => 'Conducting in-home presentations for clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 644,
                'name' => json_encode([
                    'pl' => 'Koordynacja dostaw i montażu',
                    'en' => 'Coordinating deliveries and installations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 645,
                'name' => json_encode([
                    'pl' => 'Budowanie relacji z klientami VIP',
                    'en' => 'Building relationships with VIP clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 646,
                'name' => json_encode([
                    'pl' => 'Prezentacja produktów luksusowych',
                    'en' => 'Luxury product presentation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 647,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom w wyborze produktów luksusowych',
                    'en' => 'Assisting clients in selecting luxury products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 648,
                'name' => json_encode([
                    'pl' => 'Organizacja prywatnych pokazów',
                    'en' => 'Organizing private shows'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 649,
                'name' => json_encode([
                    'pl' => 'Obsługa klienta na najwyższym poziomie',
                    'en' => 'Providing top-tier customer service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $PRZEDSTAWICIELMEDYCZNY = [
            [
                'id' => 650,
                'name' => json_encode([
                    'pl' => 'Prezentacja oferty produktowej',
                    'en' => 'Product offer presentation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 651,
                'name' => json_encode([
                    'pl' => 'Spotkania z personelem medycznym',
                    'en' => 'Meetings with medical staff'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 652,
                'name' => json_encode([
                    'pl' => 'Edukacja lekarzy i farmaceutów',
                    'en' => 'Education of doctors and pharmacists'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 653,
                'name' => json_encode([
                    'pl' => 'Organizowanie prezentacji, warsztatów, sympozjów lub konferencji dla lekarzy i farmaceutów',
                    'en' => 'Organizing presentations, workshops, symposia, or conferences for doctors and pharmacists'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 654,
                'name' => json_encode([
                    'pl' => 'Nawiązywanie kontaktów',
                    'en' => 'Establishing contacts'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 655,
                'name' => json_encode([
                    'pl' => 'Regularne wizyty w placówkach medycznych i aptekach, utrzymywanie kontaktu telefonicznego oraz e-mailowego',
                    'en' => 'Regular visits to medical facilities and pharmacies, maintaining phone and email contact'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 656,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie relacji posprzedażowych',
                    'en' => 'Maintaining post-sales relationships'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 657,
                'name' => json_encode([
                    'pl' => 'Promowanie produktów do odpowiednich grup docelowych',
                    'en' => 'Promoting products to appropriate target groups'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 658,
                'name' => json_encode([
                    'pl' => 'Negocjowanie warunków sprzedaży',
                    'en' => 'Negotiating sales terms'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 659,
                'name' => json_encode([
                    'pl' => 'Współpraca z aptekami',
                    'en' => 'Collaboration with pharmacies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 660,
                'name' => json_encode([
                    'pl' => 'Realizacja zamówień na produkty farmaceutyczne i medyczne',
                    'en' => 'Processing orders for pharmaceutical and medical products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 661,
                'name' => json_encode([
                    'pl' => 'Samodzielne zarządzanie harmonogramem wizyt w placówkach medycznych i aptekach na wyznaczonym terytorium',
                    'en' => 'Independently managing the visit schedule for medical facilities and pharmacies in the assigned territory'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 662,
                'name' => json_encode([
                    'pl' => 'Regularne analizowanie wyników sprzedaży na wyznaczonym terytorium',
                    'en' => 'Regular analysis of sales results in the assigned territory'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 663,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie działań promocyjnych do specyfiki rynku lokalnego',
                    'en' => 'Adapting promotional activities to the specifics of the local market'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 664,
                'name' => json_encode([
                    'pl' => 'Śledzenie działań konkurencji, ich produktów, strategii marketingowych',
                    'en' => 'Monitoring competitor actions, their products, and marketing strategies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 665,
                'name' => json_encode([
                    'pl' => 'Monitorowanie trendów medycznych',
                    'en' => 'Monitoring medical trends'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 666,
                'name' => json_encode([
                    'pl' => 'Badanie potrzeb rynku',
                    'en' => 'Studying market needs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 667,
                'name' => json_encode([
                    'pl' => 'Ciągłe szkolenie w zakresie produktów',
                    'en' => 'Continuous training on products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 668,
                'name' => json_encode([
                    'pl' => 'Pozyskiwanie wiedzy o konkurencyjnych produktach',
                    'en' => 'Acquiring knowledge about competing products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 669,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów',
                    'en' => 'Creating reports'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 670,
                'name' => json_encode([
                    'pl' => 'Analiza efektywności działań',
                    'en' => 'Analysis of action effectiveness'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 671,
                'name' => json_encode([
                    'pl' => 'Raportowanie do przełożonych',
                    'en' => 'Reporting to superiors'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 672,
                'name' => json_encode([
                    'pl' => 'Udzielanie wsparcia technicznego',
                    'en' => 'Providing technical support'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 673,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów',
                    'en' => 'Problem solving'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 674,
                'name' => json_encode([
                    'pl' => 'Organizowanie sympozjów i konferencji',
                    'en' => 'Organizing symposia and conferences'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 675,
                'name' => json_encode([
                    'pl' => 'Wsparcie w promocji na targach',
                    'en' => 'Supporting promotion at trade fairs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 676,
                'name' => json_encode([
                    'pl' => 'Współpraca przy kampaniach marketingowych',
                    'en' => 'Collaboration on marketing campaigns'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 677,
                'name' => json_encode([
                    'pl' => 'Wspieranie badań klinicznych',
                    'en' => 'Supporting clinical trials'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];


        $AttachKIEROWNIKSALISPRZEDAŻY = collect($KIEROWNIKSALISPRZEDAŻY)->pluck('id')->toArray();
        $AttachKIEROWNIKSTOISKAWMARKECIE = collect($KIEROWNIKSTOISKAWMARKECIE)->pluck('id')->toArray();
        $AttachKIEROWNIKKAS = collect($KIEROWNIKKAS)->pluck('id')->toArray();
        $AttachPOZOSTALIKIEROWNICYSPRZEDAŻYWMARKETACH = collect($POZOSTALIKIEROWNICYSPRZEDAŻYWMARKETACH)->pluck('id')->toArray();
        $AttachKIEROWNIKDZIALUWHANDLUDETALICZNYM = collect($KIEROWNIKDZIALUWHANDLUDETALICZNYM)->pluck('id')->toArray();
        $AttachKIEROWNIKDZIAŁUWHANDLUHURTOWYM = collect($KIEROWNIKDZIAŁUWHANDLUHURTOWYM)->pluck('id')->toArray();
        $AttachKIEROWNIKHURTOWNI = collect($KIEROWNIKHURTOWNI)->pluck('id')->toArray();
        $AttachKIEROWNIKSKLEPUSUPERMARKETU = collect($KIEROWNIKSKLEPUSUPERMARKETU)->pluck('id')->toArray();
        $AttachKIEROWNIKAPTEKI = collect($KIEROWNIKAPTEKI)->pluck('id')->toArray();
        $AttachPOZOSTALIKIEROWNICYWHANDLUDETALICZNYMIHURTOWYM = collect($POZOSTALIKIEROWNICYWHANDLUDETALICZNYMIHURTOWYM)->pluck('id')->toArray();
        $AttachKIEROWNIKSIECISKLEPÓW = collect($KIEROWNIKSIECISKLEPÓW)->pluck('id')->toArray();
        $AttachREGIONALNYKIEROWNIKSPRZEDAŻY = collect($REGIONALNYKIEROWNIKSPRZEDAŻY)->pluck('id')->toArray();
        $AttachKIEROWNIKDOSPRAWSPRZEDAŻY = collect($KIEROWNIKDOSPRAWSPRZEDAŻY)->pluck('id')->toArray();
        $AttachKIEROWNIKDOMUAUKCYJNEGO = collect($KIEROWNIKDOMUAUKCYJNEGO)->pluck('id')->toArray();
        $AttachPRZEDSTAWICIELHANDLOWY = collect($PRZEDSTAWICIELHANDLOWY)->pluck('id')->toArray();
        $AttachPOZOSTALIPRZEDSTAWICIELEHANDLOWI = collect($POZOSTALIPRZEDSTAWICIELEHANDLOWI)->pluck('id')->toArray();
        $AttachPOŚREDNIKUSŁUGMEDYCZNYCH = collect($POŚREDNIKUSŁUGMEDYCZNYCH)->pluck('id')->toArray();
        $AttachAKWIZYTOR = collect($AKWIZYTOR)->pluck('id')->toArray();
        $AttachKONSULTANTAGENTSPRZEDAŻYBEZPOŚREDNIEJ = collect($KONSULTANTAGENTSPRZEDAŻYBEZPOŚREDNIEJ)->pluck('id')->toArray();
        $AttachPOZOSTALIAGENCISPRZEDAŻYBEZPOŚREDNIEJ = collect($POZOSTALIAGENCISPRZEDAŻYBEZPOŚREDNIEJ)->pluck('id')->toArray();
        $AttachPRZEDSTAWICIELMEDYCZNY = collect($PRZEDSTAWICIELMEDYCZNY)->pluck('id')->toArray();

        DB::table('detail_projects')->insert(array_merge(
            $KIEROWNIKSALISPRZEDAŻY,
            $KIEROWNIKSTOISKAWMARKECIE,
            $KIEROWNIKKAS,
            $POZOSTALIKIEROWNICYSPRZEDAŻYWMARKETACH,
            $KIEROWNIKDZIALUWHANDLUDETALICZNYM,
            $KIEROWNIKDZIAŁUWHANDLUHURTOWYM,
            $KIEROWNIKHURTOWNI,
            $KIEROWNIKSKLEPUSUPERMARKETU,
            $KIEROWNIKAPTEKI,
            $POZOSTALIKIEROWNICYWHANDLUDETALICZNYMIHURTOWYM,
            $KIEROWNIKSIECISKLEPÓW,
            $REGIONALNYKIEROWNIKSPRZEDAŻY,
            $KIEROWNIKDOSPRAWSPRZEDAŻY,
            $KIEROWNIKDOMUAUKCYJNEGO,
            $PRZEDSTAWICIELHANDLOWY,
            $POZOSTALIPRZEDSTAWICIELEHANDLOWI,
            $POŚREDNIKUSŁUGMEDYCZNYCH,
            $AKWIZYTOR,
            $KONSULTANTAGENTSPRZEDAŻYBEZPOŚREDNIEJ,
            $POZOSTALIAGENCISPRZEDAŻYBEZPOŚREDNIEJ,
            $PRZEDSTAWICIELMEDYCZNY

        ));

        Category::whereId('4')->first()->detailprojects()->attach($AttachKIEROWNIKSALISPRZEDAŻY);
        Category::whereId('5')->first()->detailprojects()->attach($AttachKIEROWNIKSTOISKAWMARKECIE);
        Category::whereId('6')->first()->detailprojects()->attach($AttachKIEROWNIKKAS);
        Category::whereId('7')->first()->detailprojects()->attach($AttachPOZOSTALIKIEROWNICYSPRZEDAŻYWMARKETACH);
        Category::whereId('9')->first()->detailprojects()->attach($AttachKIEROWNIKDZIALUWHANDLUDETALICZNYM);
        Category::whereId('10')->first()->detailprojects()->attach($AttachKIEROWNIKDZIAŁUWHANDLUHURTOWYM);
        Category::whereId('11')->first()->detailprojects()->attach($AttachKIEROWNIKHURTOWNI);
        Category::whereId('12')->first()->detailprojects()->attach($AttachKIEROWNIKSKLEPUSUPERMARKETU);
        Category::whereId('13')->first()->detailprojects()->attach($AttachKIEROWNIKAPTEKI);
        Category::whereId('14')->first()->detailprojects()->attach($AttachPOZOSTALIKIEROWNICYWHANDLUDETALICZNYMIHURTOWYM);
        Category::whereId('15')->first()->detailprojects()->attach($AttachKIEROWNIKSIECISKLEPÓW);
        Category::whereId('16')->first()->detailprojects()->attach($AttachREGIONALNYKIEROWNIKSPRZEDAŻY);
        Category::whereId('17')->first()->detailprojects()->attach($AttachKIEROWNIKDOSPRAWSPRZEDAŻY);
        Category::whereId('18')->first()->detailprojects()->attach($AttachKIEROWNIKDOMUAUKCYJNEGO);
        Category::whereId('20')->first()->detailprojects()->attach($AttachPRZEDSTAWICIELHANDLOWY);
        Category::whereId('21')->first()->detailprojects()->attach($AttachPOZOSTALIPRZEDSTAWICIELEHANDLOWI);
        Category::whereId('22')->first()->detailprojects()->attach($AttachPOŚREDNIKUSŁUGMEDYCZNYCH);
        Category::whereId('24')->first()->detailprojects()->attach($AttachAKWIZYTOR);
        Category::whereId('25')->first()->detailprojects()->attach($AttachKONSULTANTAGENTSPRZEDAŻYBEZPOŚREDNIEJ);
        Category::whereId('26')->first()->detailprojects()->attach($AttachPOZOSTALIAGENCISPRZEDAŻYBEZPOŚREDNIEJ);
        Category::whereId('27')->first()->detailprojects()->attach($AttachPRZEDSTAWICIELMEDYCZNY);
    }
}
