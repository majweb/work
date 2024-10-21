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

        $KIEROWNIKSALISPRZEDAŻY = [
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
        $KIEROWNIKDZIALUWHANDLUDETALICZNYM = [
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

        $EKSPEDYTORSPRZEDAŻYWYSYŁKOWEJINTERNETOWEJ = [
            [
                'id' => 678,
                'name' => json_encode([
                    'pl' => 'Odbieranie zamówień od klientów składanych w formie online',
                    'en' => 'Receiving orders placed by customers online'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 679,
                'name' => json_encode([
                    'pl' => 'Weryfikacja poprawności danych zamówienia',
                    'en' => 'Verifying the accuracy of order details'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 680,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie dostępności towaru w magazynie',
                    'en' => 'Checking product availability in the warehouse'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 681,
                'name' => json_encode([
                    'pl' => 'Zbieranie i kompletowanie produktów z magazynu zgodnie z zamówieniem klienta',
                    'en' => 'Picking and packing products from the warehouse according to the customer\'s order'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 682,
                'name' => json_encode([
                    'pl' => 'Dokładne sprawdzanie zgodności zamówienia z produktami',
                    'en' => 'Accurately checking the compliance of the order with products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 683,
                'name' => json_encode([
                    'pl' => 'Oznaczanie zamówień, tak aby każde zlecenie było odpowiednio opisane i gotowe do pakowania i wysyłki',
                    'en' => 'Labeling orders to ensure each is properly described and ready for packing and shipping'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 684,
                'name' => json_encode([
                    'pl' => 'Pakowanie zamówionych produktów w odpowiednie opakowania',
                    'en' => 'Packing ordered products into appropriate packaging'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 685,
                'name' => json_encode([
                    'pl' => 'Dbanie o estetykę pakowania',
                    'en' => 'Ensuring the aesthetics of packaging'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 686,
                'name' => json_encode([
                    'pl' => 'Etykietowanie paczek',
                    'en' => 'Labeling packages'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 687,
                'name' => json_encode([
                    'pl' => 'Wybór odpowiedniej formy wysyłki zgodnie z preferencjami klienta',
                    'en' => 'Selecting the appropriate shipping method based on customer preferences'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 688,
                'name' => json_encode([
                    'pl' => 'Generowanie etykiet wysyłkowych i przekazywanie paczek firmie kurierskiej lub pocztowej',
                    'en' => 'Generating shipping labels and handing over packages to courier or postal services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 689,
                'name' => json_encode([
                    'pl' => 'Śledzenie przesyłek',
                    'en' => 'Tracking shipments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 690,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentów sprzedażowych',
                    'en' => 'Preparing sales documents'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 691,
                'name' => json_encode([
                    'pl' => 'Załączanie dokumentów do paczek, w tym potwierdzeń zakupu oraz informacji o zwrotach lub gwarancjach',
                    'en' => 'Attaching documents to packages, including purchase confirmations and information about returns or warranties'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 692,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji wysyłanych zamówień w systemach informatycznych',
                    'en' => 'Maintaining records of shipped orders in IT systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 693,
                'name' => json_encode([
                    'pl' => 'Obsługa reklamacji',
                    'en' => 'Handling complaints'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 694,
                'name' => json_encode([
                    'pl' => 'Komunikacja z działem obsługi klienta w celu rozwiązania problemów klientów',
                    'en' => 'Communicating with customer service to resolve customer issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 695,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o stanie zamówień lub przesyłek na życzenie działu obsługi klienta',
                    'en' => 'Providing information about the status of orders or shipments upon request from customer service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 696,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów z zamówieniami',
                    'en' => 'Solving order-related issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 697,
                'name' => json_encode([
                    'pl' => 'Monitorowanie stanów magazynowych',
                    'en' => 'Monitoring stock levels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 698,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem magazynowym',
                    'en' => 'Cooperating with the warehouse department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 699,
                'name' => json_encode([
                    'pl' => 'Informowanie działu zakupów o konieczności zamówienia towarów, które są na wyczerpaniu lub zostały wyprzedane',
                    'en' => 'Informing the purchasing department about the need to order goods that are low or sold out'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 700,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie wewnętrznych procedur firmy dotyczących realizacji zamówień, pakowania i wysyłki towarów',
                    'en' => 'Adhering to internal company procedures regarding order fulfillment, packing, and shipping'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 701,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności z przepisami prawnymi dotyczącymi sprzedaży internetowej',
                    'en' => 'Ensuring compliance with legal regulations for online sales'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 702,
                'name' => json_encode([
                    'pl' => 'Dbanie o zgodność z przepisami ochrony danych osobowych (RODO)',
                    'en' => 'Ensuring compliance with data protection regulations (GDPR)'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 703,
                'name' => json_encode([
                    'pl' => 'Korzystanie z systemów ERP / innych systemów zarządzania sprzedażą i magazynem',
                    'en' => 'Using ERP systems / other sales and warehouse management systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 704,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie statusu zamówień w systemach sprzedażowych',
                    'en' => 'Updating order statuses in sales systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 705,
                'name' => json_encode([
                    'pl' => 'Obsługa platform sprzedażowych',
                    'en' => 'Operating sales platforms'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 706,
                'name' => json_encode([
                    'pl' => 'Dbanie o porządek na stanowisku pracy',
                    'en' => 'Maintaining order at the workplace'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 707,
                'name' => json_encode([
                    'pl' => 'Organizacja przestrzeni magazynowej',
                    'en' => 'Organizing warehouse space'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 708,
                'name' => json_encode([
                    'pl' => 'Planowanie harmonogramu pracy',
                    'en' => 'Planning work schedules'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 709,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie priorytetów do terminów wysyłek',
                    'en' => 'Adjusting priorities according to shipment deadlines'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 710,
                'name' => json_encode([
                    'pl' => 'Optymalizowanie procesów pakowania i wysyłki',
                    'en' => 'Optimizing packing and shipping processes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 711,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów związanych z uszkodzeniami w transporcie',
                    'en' => 'Resolving issues related to damages during transport'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

        ];
        $ORGANIZATOROBSŁUGISPRZEDAŻYINTERNETOWEJ = [
            [
                'id' => 712,
                'name' => json_encode([
                    'pl' => 'Planowanie i organizacja działań operacyjnych związanych z funkcjonowaniem sklepu internetowego',
                    'en' => 'Planning and organizing operational activities related to the functioning of the online store'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 713,
                'name' => json_encode([
                    'pl' => 'Tworzenie i aktualizowanie ofert produktowych',
                    'en' => 'Creating and updating product offers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 714,
                'name' => json_encode([
                    'pl' => 'Dbanie o atrakcyjność i przejrzystość strony internetowej',
                    'en' => 'Ensuring the attractiveness and clarity of the website'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 715,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wydajności strony internetowej',
                    'en' => 'Monitoring website performance'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 716,
                'name' => json_encode([
                    'pl' => 'Monitorowanie realizacji zamówień',
                    'en' => 'Monitoring order fulfillment'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 717,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem magazynowym i logistycznym',
                    'en' => 'Collaborating with the warehouse and logistics departments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 718,
                'name' => json_encode([
                    'pl' => 'Zarządzanie zwrotami i reklamacjami',
                    'en' => 'Managing returns and complaints'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 719,
                'name' => json_encode([
                    'pl' => 'Optymalizacja procesów sprzedażowych',
                    'en' => 'Optimizing sales processes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 720,
                'name' => json_encode([
                    'pl' => 'Zapewnienie wysokiej jakości obsługi klienta',
                    'en' => 'Ensuring high-quality customer service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 721,
                'name' => json_encode([
                    'pl' => 'Tworzenie i doskonalenie standardów obsługi klienta w sprzedaży internetowej',
                    'en' => 'Creating and improving customer service standards in online sales'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 722,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zadowolenia klientów poprzez zbieranie opinii oraz analiza wskaźników satysfakcji klienta',
                    'en' => 'Monitoring customer satisfaction by collecting feedback and analyzing satisfaction metrics'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 723,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem obsługi klienta w rozwiązywaniu problemów',
                    'en' => 'Collaborating with customer service to solve issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 724,
                'name' => json_encode([
                    'pl' => 'Monitorowanie stanów magazynowych',
                    'en' => 'Monitoring inventory levels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 725,
                'name' => json_encode([
                    'pl' => 'Współpraca z dostawcami w celu zapewnienia regularnych dostaw i uzupełniania zapasów',
                    'en' => 'Collaborating with suppliers to ensure regular deliveries and restocking'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 726,
                'name' => json_encode([
                    'pl' => 'Analiza sprzedaży poszczególnych produktów',
                    'en' => 'Analyzing sales of individual products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 727,
                'name' => json_encode([
                    'pl' => 'Zarządzanie cyklem życia produktów',
                    'en' => 'Managing product life cycles'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 728,
                'name' => json_encode([
                    'pl' => 'Tworzenie strategii promocji i sprzedaży',
                    'en' => 'Creating promotion and sales strategies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 729,
                'name' => json_encode([
                    'pl' => 'Monitorowanie efektywności kampanii marketingowych',
                    'en' => 'Monitoring the effectiveness of marketing campaigns'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 730,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem marketingu w zakresie planowania działań promocyjnych oraz kampanii reklamowych',
                    'en' => 'Collaborating with the marketing department in planning promotional activities and advertising campaigns'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 731,
                'name' => json_encode([
                    'pl' => 'Zarządzanie treściami marketingowymi',
                    'en' => 'Managing marketing content'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 732,
                'name' => json_encode([
                    'pl' => 'Optymalizacja procesów wysyłki i dostawy',
                    'en' => 'Optimizing shipping and delivery processes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 733,
                'name' => json_encode([
                    'pl' => 'Wybór odpowiednich firm kurierskich i przewoźników, negocjowanie warunków współpracy oraz monitorowanie jakości ich usług',
                    'en' => 'Choosing appropriate courier and transportation companies, negotiating terms of cooperation, and monitoring service quality'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 734,
                'name' => json_encode([
                    'pl' => 'Monitorowanie realizacji dostaw',
                    'en' => 'Monitoring delivery performance'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 735,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów sprzedażowych',
                    'en' => 'Preparing sales reports'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 736,
                'name' => json_encode([
                    'pl' => 'Śledzenie trendów rynkowych i analiza konkurencji',
                    'en' => 'Tracking market trends and analyzing competition'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 737,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie strategii optymalizacji konwersji',
                    'en' => 'Implementing conversion optimization strategies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 738,
                'name' => json_encode([
                    'pl' => 'Szkolenie pracowników z zakresu obsługi systemów sprzedażowych, standardów obsługi klienta oraz procedur wewnętrznych',
                    'en' => 'Training employees on sales systems, customer service standards, and internal procedures'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 739,
                'name' => json_encode([
                    'pl' => 'Motywowanie zespołu i dbanie o efektywność pracy',
                    'en' => 'Motivating the team and ensuring work efficiency'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 740,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności sprzedaży internetowej z przepisami prawa dotyczącymi ochrony konsumentów, ochrony danych osobowych (RODO), polityki zwrotów i reklamacji',
                    'en' => 'Ensuring compliance of online sales with consumer protection laws, GDPR, return, and complaint policies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 741,
                'name' => json_encode([
                    'pl' => 'Dbanie o przejrzystość regulaminów, polityk prywatności i polityk zwrotów, aby były zgodne z obowiązującymi przepisami i jasne dla klientów',
                    'en' => 'Ensuring the clarity of terms, privacy policies, and return policies to be compliant with regulations and clear to customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 742,
                'name' => json_encode([
                    'pl' => 'Nadzorowanie procesów płatności',
                    'en' => 'Overseeing payment processes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 743,
                'name' => json_encode([
                    'pl' => 'Opracowanie długoterminowej strategii e-commerce',
                    'en' => 'Developing a long-term e-commerce strategy'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 744,
                'name' => json_encode([
                    'pl' => 'Rozwijanie nowych kanałów sprzedaży',
                    'en' => 'Developing new sales channels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];

        $SPRZEDAWCA = [
            [
                'id' => 745,
                'name' => json_encode([
                    'pl' => 'Bezpośredni kontakt z klientami',
                    'en' => 'Direct contact with customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 746,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie zamówień, zarówno osobiście, jak i telefonicznie lub online',
                    'en' => 'Accepting orders in person, over the phone, or online'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 747,
                'name' => json_encode([
                    'pl' => 'Pomoc w wyborze produktów i udzielanie informacji na ich temat',
                    'en' => 'Assisting in product selection and providing information about them'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 748,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów klientów, obsługa reklamacji',
                    'en' => 'Resolving customer issues and handling complaints'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 749,
                'name' => json_encode([
                    'pl' => 'Zapewnienie wysokiej jakości obsługi i budowanie pozytywnych relacji z klientami',
                    'en' => 'Ensuring high-quality service and building positive customer relationships'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 750,
                'name' => json_encode([
                    'pl' => 'Obsługa kasy fiskalnej i terminala płatniczego',
                    'en' => 'Operating a cash register and payment terminal'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 751,
                'name' => json_encode([
                    'pl' => 'Wystawianie paragonów, faktur oraz innych dokumentów sprzedażowych',
                    'en' => 'Issuing receipts, invoices, and other sales documents'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 752,
                'name' => json_encode([
                    'pl' => 'Dbanie o prawidłowe rozliczenie transakcji',
                    'en' => 'Ensuring correct transaction settlements'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 753,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie zwrotów i wymian towarów',
                    'en' => 'Accepting returns and exchanges of goods'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 754,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie dostaw towarów i kontrolowanie ich zgodności z zamówieniami',
                    'en' => 'Receiving goods deliveries and checking their compliance with orders'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 755,
                'name' => json_encode([
                    'pl' => 'Rozpakowywanie, segregowanie oraz metkowanie towarów',
                    'en' => 'Unpacking, sorting, and labeling products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 756,
                'name' => json_encode([
                    'pl' => 'Uzupełnianie braków na półkach i dbanie o odpowiednią ekspozycję produktów',
                    'en' => 'Restocking shelves and ensuring proper product display'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 757,
                'name' => json_encode([
                    'pl' => 'Regularne inwentaryzacje i kontrola stanów magazynowych',
                    'en' => 'Conducting regular inventory and checking stock levels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 758,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie zapotrzebowania na uzupełnienie brakujących produktów',
                    'en' => 'Reporting the need to restock missing products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 759,
                'name' => json_encode([
                    'pl' => 'Dbałość o porządek i czystość w miejscu pracy, w tym na półkach i w magazynie',
                    'en' => 'Maintaining cleanliness and order in the workplace, including shelves and warehouse'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 760,
                'name' => json_encode([
                    'pl' => 'Estetyczne układanie towaru, zmienianie wystaw sklepowych',
                    'en' => 'Arranging products aesthetically and changing store displays'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 761,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad merchandisingu',
                    'en' => 'Adhering to merchandising principles'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 762,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o promocjach, rabatach i ofertach specjalnych',
                    'en' => 'Informing customers about promotions, discounts, and special offers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 763,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie cen towarów zgodnie z obowiązującymi promocjami',
                    'en' => 'Updating product prices according to ongoing promotions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 764,
                'name' => json_encode([
                    'pl' => 'Pomoc w organizacji i realizacji działań marketingowych na terenie sklepu',
                    'en' => 'Assisting in organizing and executing marketing activities in the store'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 765,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w szkoleniach produktowych oraz z zakresu obsługi klienta',
                    'en' => 'Participating in product and customer service training'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 766,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat oferowanych produktów i nowości rynkowych',
                    'en' => 'Keeping up-to-date with offered products and market novelties'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 767,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad BHP oraz przepisów przeciwpożarowych',
                    'en' => 'Adhering to health and safety and fire regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 768,
                'name' => json_encode([
                    'pl' => 'Obsługa sprzętu zgodnie z instrukcją oraz dbanie o jego stan techniczny',
                    'en' => 'Operating equipment according to instructions and maintaining its technical condition'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 769,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie firmy zgodnie z jej standardami i wartościami',
                    'en' => 'Representing the company according to its standards and values'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 770,
                'name' => json_encode([
                    'pl' => 'Dbanie o pozytywną atmosferę w sklepie i kreowanie przyjaznego wizerunku firmy',
                    'en' => 'Maintaining a positive atmosphere in the store and creating a friendly image of the company'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 771,
                'name' => json_encode([
                    'pl' => 'Współpraca z zespołem, kierownictwem oraz innymi działami',
                    'en' => 'Cooperating with the team, management, and other departments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 772,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji o ewentualnych problemach związanych z asortymentem, klientami czy działaniem sklepu',
                    'en' => 'Reporting any issues related to inventory, customers, or store operations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 773,
                'name' => json_encode([
                    'pl' => 'Prowadzenie dokumentacji związanej ze sprzedażą, reklamacjami czy zwrotami',
                    'en' => 'Maintaining documentation related to sales, complaints, and returns'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 774,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów z dziennej lub miesięcznej sprzedaży',
                    'en' => 'Preparing daily or monthly sales reports'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 775,
                'name' => json_encode([
                    'pl' => 'Archiwizacja dokumentów sprzedażowych',
                    'en' => 'Archiving sales documents'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

        ];
        $SPRZEDAWCAWBRANŻYMIĘSNEJ = [
            [
                'id' => 776,
                'name' => json_encode([
                    'pl' => 'Doradztwo w zakresie wyboru odpowiednich rodzajów mięsa i wędlin',
                    'en' => 'Advising on the selection of appropriate types of meat and cold cuts'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 777,
                'name' => json_encode([
                    'pl' => 'Przedstawianie klientom informacji o pochodzeniu i świeżości mięsa',
                    'en' => 'Providing customers with information about the origin and freshness of meat'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 778,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie i realizacja zamówień, zarówno indywidualnych, jak i hurtowych',
                    'en' => 'Accepting and fulfilling orders, both individual and wholesale'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 779,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o dostępnych promocjach, świeżych dostawach, gatunkach mięsa i ich zastosowaniach kulinarnych',
                    'en' => 'Informing customers about available promotions, fresh deliveries, types of meat, and their culinary uses'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 780,
                'name' => json_encode([
                    'pl' => 'Obsługa reklamacji dotyczących jakości mięsa i przetworów mięsnych',
                    'en' => 'Handling complaints related to the quality of meat and meat products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 781,
                'name' => json_encode([
                    'pl' => 'Krojenie, porcjowanie i ważenie mięsa oraz wędlin na życzenie klienta',
                    'en' => 'Cutting, portioning, and weighing meat and cold cuts upon customer request'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 782,
                'name' => json_encode([
                    'pl' => 'Używanie specjalistycznych narzędzi, takich jak noże, maszynki do mięsa, krajalnice',
                    'en' => 'Using specialized tools such as knives, meat grinders, and slicers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 783,
                'name' => json_encode([
                    'pl' => 'Pakowanie mięsa w odpowiednie opakowania oraz jego etykietowanie zgodnie z przepisami',
                    'en' => 'Packaging meat in appropriate containers and labeling it according to regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 784,
                'name' => json_encode([
                    'pl' => 'Dbanie o odpowiednią ekspozycję mięsa w ladach chłodniczych',
                    'en' => 'Ensuring the proper display of meat in refrigerated counters'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 785,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie dostaw mięsa i przetworów mięsnych, kontrola jakości oraz zgodności towaru z zamówieniami',
                    'en' => 'Receiving deliveries of meat and meat products, checking quality and compliance with orders'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 786,
                'name' => json_encode([
                    'pl' => 'Przechowywanie mięsa zgodnie z wymogami sanitarnymi i temperaturami przechowywania',
                    'en' => 'Storing meat according to sanitary requirements and temperature guidelines'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 787,
                'name' => json_encode([
                    'pl' => 'Uzupełnianie braków na półkach i w ladach chłodniczych',
                    'en' => 'Restocking shelves and refrigerated counters'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 788,
                'name' => json_encode([
                    'pl' => 'Monitorowanie terminów ważności produktów oraz ich prawidłowe przechowywanie w lodówkach i chłodniach',
                    'en' => 'Monitoring product expiration dates and proper storage in fridges and freezers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 789,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie rygorystycznych zasad higieny',
                    'en' => 'Adhering to strict hygiene standards'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 790,
                'name' => json_encode([
                    'pl' => 'Stosowanie odzieży ochronnej',
                    'en' => 'Using protective clothing'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 791,
                'name' => json_encode([
                    'pl' => 'Regularne czyszczenie i dezynfekcja powierzchni roboczych, lad chłodniczych oraz narzędzi do obróbki mięsa',
                    'en' => 'Regular cleaning and disinfection of work surfaces, refrigerated counters, and meat processing tools'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 792,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów dotyczących przechowywania i obróbki mięsa HACCP',
                    'en' => 'Adhering to HACCP regulations for meat storage and processing'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 793,
                'name' => json_encode([
                    'pl' => 'Zabezpieczanie miejsca pracy przed zanieczyszczeniami oraz dbanie o odpowiednią wentylację i temperaturę w pomieszczeniach, gdzie znajduje się mięso',
                    'en' => 'Securing the workplace from contamination and ensuring proper ventilation and temperature in meat storage areas'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 794,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie świeżości mięsa, wędlin i wyrobów mięsnych',
                    'en' => 'Checking the freshness of meat, cold cuts, and meat products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 795,
                'name' => json_encode([
                    'pl' => 'Usuwanie produktów, które straciły swoją świeżość lub nie spełniają wymogów jakościowych',
                    'en' => 'Removing products that have lost freshness or do not meet quality standards'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 796,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie dat przydatności do spożycia',
                    'en' => 'Adhering to expiration dates'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 797,
                'name' => json_encode([
                    'pl' => 'Regularne monitorowanie temperatur w ladach chłodniczych i magazynach',
                    'en' => 'Regularly monitoring temperatures in refrigerated counters and storage rooms'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 798,
                'name' => json_encode([
                    'pl' => 'Aktualna wiedza na temat różnych gatunków mięsa, jego pochodzenia i sposobów przyrządzania',
                    'en' => 'Up-to-date knowledge of different types of meat, its origin, and preparation methods'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 799,
                'name' => json_encode([
                    'pl' => 'Znajomość sezonowych produktów i nowości na rynku',
                    'en' => 'Knowledge of seasonal products and market novelties'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 800,
                'name' => json_encode([
                    'pl' => 'Świadomość przepisów sanitarnych, weterynaryjnych oraz przepisów związanych z etykietowaniem produktów mięsnych',
                    'en' => 'Awareness of sanitary, veterinary, and labeling regulations for meat products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 801,
                'name' => json_encode([
                    'pl' => 'Obsługa kasy fiskalnej oraz terminala płatniczego',
                    'en' => 'Operating a cash register and payment terminal'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 802,
                'name' => json_encode([
                    'pl' => 'Prawidłowe rozliczanie transakcji, w tym wystawianie paragonów i faktur',
                    'en' => 'Proper transaction processing, including issuing receipts and invoices'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 803,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie zwrotów oraz reklamacji produktów mięsnych',
                    'en' => 'Accepting returns and complaints for meat products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 804,
                'name' => json_encode([
                    'pl' => 'Utrzymanie czystości i estetyki miejsca pracy',
                    'en' => 'Maintaining cleanliness and aesthetics in the workplace'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 805,
                'name' => json_encode([
                    'pl' => 'Uprzejma i profesjonalna obsługa klienta, zgodna z wysokimi standardami sklepu mięsnego',
                    'en' => 'Polite and professional customer service according to high standards of the meat store'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 806,
                'name' => json_encode([
                    'pl' => 'Budowanie pozytywnych relacji z klientami i zdobywanie ich zaufania poprzez oferowanie produktów najwyższej jakości',
                    'en' => 'Building positive relationships with customers and gaining their trust by offering high-quality products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 807,
                'name' => json_encode([
                    'pl' => 'Prowadzenie dokumentacji dotyczącej dostaw, sprzedaży oraz inwentaryzacji',
                    'en' => 'Maintaining documentation on deliveries, sales, and inventory'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 808,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów dziennych i miesięcznych dotyczących sprzedaży mięsa i wędlin',
                    'en' => 'Preparing daily and monthly reports on meat and cold cut sales'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 809,
                'name' => json_encode([
                    'pl' => 'Współpraca z dostawcami mięsa i przetworów mięsnych oraz zamawianie towarów w zależności od zapotrzebowania',
                    'en' => 'Cooperating with meat and meat product suppliers and ordering goods based on demand'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 810,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w szkoleniach z zakresu jakości mięsa, nowych produktów, przepisów sanitarnych oraz technik sprzedaży',
                    'en' => 'Participating in training on meat quality, new products, sanitary regulations, and sales techniques'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 811,
                'name' => json_encode([
                    'pl' => 'Ciągłe poszerzanie wiedzy na temat branży mięsnej, w tym technik kulinarnych związanych z mięsem',
                    'en' => 'Continuously expanding knowledge about the meat industry, including culinary techniques related to meat'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 812,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o aktualnych promocjach i wyprzedażach produktów mięsnych',
                    'en' => 'Informing customers about current promotions and sales of meat products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 813,
                'name' => json_encode([
                    'pl' => 'Aktualizacja cen produktów mięsnych w systemie zgodnie z obowiązującymi promocjami',
                    'en' => 'Updating meat product prices in the system according to ongoing promotions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

        ];
        $SPRZEDAWCAWBRANŻYPRZEMYSŁOWEJ = [
            [
                'id' => 814,
                'name' => json_encode([
                    'pl' => 'Doradztwo techniczne dotyczące oferowanych produktów przemysłowych',
                    'en' => 'Technical advice on offered industrial products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 815,
                'name' => json_encode([
                    'pl' => 'Udzielanie szczegółowych informacji technicznych, takich jak specyfikacje produktów, normy, zasady użytkowania i konserwacji',
                    'en' => 'Providing detailed technical information, such as product specifications, standards, usage, and maintenance guidelines'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 816,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na zapytania klientów biznesowych i indywidualnych',
                    'en' => 'Responding to inquiries from business and individual customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 817,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie i realizacja zamówień zarówno bezpośrednio w sklepie, jak i drogą elektroniczną',
                    'en' => 'Accepting and fulfilling orders both directly in-store and electronically'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 818,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów związanych z jakością produktów, błędami w zamówieniach, reklamacjami',
                    'en' => 'Resolving issues related to product quality, order errors, and complaints'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 819,
                'name' => json_encode([
                    'pl' => 'Kontrola stanów magazynowych i uzupełnianie towaru',
                    'en' => 'Controlling stock levels and replenishing inventory'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 820,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie dostaw produktów, w tym kontrola zgodności dostawy z zamówieniem',
                    'en' => 'Receiving product deliveries, including checking the conformity of delivery with the order'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 821,
                'name' => json_encode([
                    'pl' => 'Dbanie o prawidłową ekspozycję towarów na półkach oraz w magazynach',
                    'en' => 'Ensuring proper product display on shelves and in warehouses'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 822,
                'name' => json_encode([
                    'pl' => 'Organizowanie produktów według kategorii, zastosowań lub popularności',
                    'en' => 'Organizing products by category, application, or popularity'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 823,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie norm dotyczących przechowywania specjalistycznych towarów',
                    'en' => 'Adhering to standards for storing specialized goods'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 824,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie szerokiej wiedzy na temat asortymentu, w tym nowych technologii, produktów i innowacji na rynku przemysłowym',
                    'en' => 'Maintaining broad knowledge of the assortment, including new technologies, products, and innovations in the industrial market'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 825,
                'name' => json_encode([
                    'pl' => 'Znajomość specyfikacji technicznych, zasad działania, parametrów i sposobów instalacji oferowanych produktów',
                    'en' => 'Knowledge of technical specifications, operating principles, parameters, and installation methods of offered products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 826,
                'name' => json_encode([
                    'pl' => 'Bieżące śledzenie nowości rynkowych oraz wymogów branżowych, takich jak normy jakości, bezpieczeństwa czy ekologii',
                    'en' => 'Tracking market innovations and industry requirements, such as quality, safety, and environmental standards'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 827,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach produktowych oraz technicznych',
                    'en' => 'Participating in product and technical training'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 828,
                'name' => json_encode([
                    'pl' => 'Obsługa kasy fiskalnej, terminala płatniczego oraz systemów rozliczeniowych dla klientów biznesowych',
                    'en' => 'Operating a cash register, payment terminal, and billing systems for business customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 829,
                'name' => json_encode([
                    'pl' => 'Wystawianie faktur VAT, paragonów oraz innych dokumentów sprzedażowych',
                    'en' => 'Issuing VAT invoices, receipts, and other sales documents'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 830,
                'name' => json_encode([
                    'pl' => 'Prowadzenie transakcji zarówno gotówkowych, jak i bezgotówkowych oraz obsługa płatności odroczonych lub na podstawie umów z klientami',
                    'en' => 'Processing cash and cashless transactions, and handling deferred or contract-based payments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 831,
                'name' => json_encode([
                    'pl' => 'Kompletowanie zamówień, często wieloelementowych, zgodnie z wymaganiami klientów',
                    'en' => 'Assembling orders, often multi-item, according to customer requirements'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 832,
                'name' => json_encode([
                    'pl' => 'Koordynacja wysyłki zamówień, organizacja transportu dla dużych dostaw',
                    'en' => 'Coordinating order shipping and organizing transportation for large deliveries'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 833,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie poprawności i zgodności zamówień z dokumentacją techniczną oraz specyfikacją klienta',
                    'en' => 'Verifying the accuracy and conformity of orders with technical documentation and customer specifications'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 834,
                'name' => json_encode([
                    'pl' => 'Prowadzenie i archiwizacja dokumentacji technicznej produktów oraz dostarczanie ich klientom na życzenie',
                    'en' => 'Maintaining and archiving product technical documentation, and providing it to customers upon request'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 835,
                'name' => json_encode([
                    'pl' => 'Wypełnianie dokumentów związanych z zamówieniami, fakturowaniem oraz specyfikacją techniczną produktów',
                    'en' => 'Filling out documents related to orders, invoicing, and product technical specifications'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 836,
                'name' => json_encode([
                    'pl' => 'Budowanie długoterminowych relacji z klientami biznesowymi oraz indywidualnymi',
                    'en' => 'Building long-term relationships with business and individual customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 837,
                'name' => json_encode([
                    'pl' => 'Regularne kontakty z firmami w celu ustalania warunków handlowych, ofert specjalnych, rabatów oraz terminów dostaw',
                    'en' => 'Regular contacts with companies to establish trade terms, special offers, discounts, and delivery schedules'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 838,
                'name' => json_encode([
                    'pl' => 'Proaktywne informowanie klientów o nowych produktach, promocjach oraz dostosowywanie oferty do ich potrzeb',
                    'en' => 'Proactively informing customers about new products, promotions, and tailoring offers to their needs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 839,
                'name' => json_encode([
                    'pl' => 'Zapewnienie wysokiej jakości obsługi klienta na każdym etapie współpracy',
                    'en' => 'Ensuring high-quality customer service at every stage of cooperation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 840,
                'name' => json_encode([
                    'pl' => 'Monitorowanie i analizowanie opinii klientów, reagowanie na sugestie i poprawa jakości świadczonych usług',
                    'en' => 'Monitoring and analyzing customer feedback, responding to suggestions, and improving service quality'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 841,
                'name' => json_encode([
                    'pl' => 'Obsługa reklamacji, zwrotów i rozwiązywanie problemów związanych z użytkowaniem produktów przemysłowych',
                    'en' => 'Handling complaints, returns, and solving issues related to the use of industrial products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 842,
                'name' => json_encode([
                    'pl' => 'Znajomość i stosowanie przepisów dotyczących bezpieczeństwa oraz norm związanych z dystrybucją produktów przemysłowych, np. BHP, ISO, CE',
                    'en' => 'Knowledge and application of safety regulations and standards related to the distribution of industrial products, e.g., OSHA, ISO, CE'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 843,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie wymogów prawnych dotyczących przechowywania i sprzedaży materiałów niebezpiecznych, chemikaliów, materiałów budowlanych itp.',
                    'en' => 'Complying with legal requirements for storing and selling hazardous materials, chemicals, construction materials, etc.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 844,
                'name' => json_encode([
                    'pl' => 'Zapewnienie bezpiecznego składowania i transportu produktów',
                    'en' => 'Ensuring safe storage and transportation of products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 845,
                'name' => json_encode([
                    'pl' => 'Utrzymanie porządku w magazynach, halach sprzedaży oraz stanowiskach obsługi klienta',
                    'en' => 'Maintaining order in warehouses, sales halls, and customer service areas'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 846,
                'name' => json_encode([
                    'pl' => 'Zabezpieczenie materiałów i narzędzi przed uszkodzeniem, kradzieżą lub zanieczyszczeniem',
                    'en' => 'Securing materials and tools against damage, theft, or contamination'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 847,
                'name' => json_encode([
                    'pl' => 'Regularna kontrola i konserwacja sprzętu używanego w sprzedaży i magazynowaniu',
                    'en' => 'Regular inspection and maintenance of equipment used in sales and warehousing'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 848,
                'name' => json_encode([
                    'pl' => 'Kontakt z dostawcami i producentami w celu zamawiania towarów, negocjowania cen oraz ustalania warunków dostaw',
                    'en' => 'Contacting suppliers and manufacturers to order goods, negotiate prices, and establish delivery terms'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 849,
                'name' => json_encode([
                    'pl' => 'Monitorowanie dostępności produktów oraz planowanie dostaw zgodnie z potrzebami klientów',
                    'en' => 'Monitoring product availability and planning deliveries according to customer needs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 850,
                'name' => json_encode([
                    'pl' => 'Analiza ofert dostawców oraz wybór najkorzystniejszych rozwiązań dla firmy i klientów',
                    'en' => 'Analyzing supplier offers and selecting the best solutions for the company and customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 851,
                'name' => json_encode([
                    'pl' => 'Planowanie i wdrażanie działań promocyjnych, takich jak obniżki cen, rabaty czy wyprzedaże na wybrane produkty przemysłowe',
                    'en' => 'Planning and implementing promotional activities such as price reductions, discounts, or sales on selected industrial products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 852,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wyników sprzedaży i analiza efektywności działań promocyjnych',
                    'en' => 'Monitoring sales results and analyzing the effectiveness of promotional activities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 853,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie oferty do sezonowych trendów oraz wymagań rynku',
                    'en' => 'Adjusting the offer according to seasonal trends and market demands'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 854,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w szkoleniach z zakresu obsługi nowych technologii, produktów, systemów sprzedaży',
                    'en' => 'Participating in training on handling new technologies, products, and sales systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 855,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy o najnowszych rozwiązaniach technologicznych oraz trendach w branży przemysłowej',
                    'en' => 'Updating knowledge about the latest technological solutions and trends in the industrial sector'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 856,
                'name' => json_encode([
                    'pl' => 'Prowadzenie inwentaryzacji magazynu i kontrola stanów magazynowych',
                    'en' => 'Conducting warehouse inventory and monitoring stock levels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 857,
                'name' => json_encode([
                    'pl' => 'Organizacja przestrzeni magazynowej, optymalizacja procesów logistycznych i zarządzanie przepływem towarów',
                    'en' => 'Organizing warehouse space, optimizing logistics processes, and managing the flow of goods'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 858,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem logistyki i magazynierami w celu zapewnienia płynności dostaw i wysyłek',
                    'en' => 'Collaborating with the logistics department and warehouse staff to ensure smooth deliveries and shipments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 859,
                'name' => json_encode([
                    'pl' => 'Profesjonalne reprezentowanie firmy przed klientami oraz dbanie o budowanie pozytywnego wizerunku na rynku przemysłowym',
                    'en' => 'Professionally representing the company before clients and maintaining a positive image in the industrial market'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 860,
                'name' => json_encode([
                    'pl' => 'Prezentowanie produktów na targach branżowych, konferencjach oraz innych wydarzeniach związanych z przemysłem',
                    'en' => 'Presenting products at trade fairs, conferences, and other industry-related events'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

        ];
        $SPRZEDAWCAWBRANŻYSPOŻYWCZEJ = [
            [
                'id' => 861,
                'name' => json_encode([
                    'pl' => 'Bezpośrednia obsługa klientów, w tym udzielanie informacji o produktach spożywczych',
                    'en' => 'Direct customer service, including providing information about food products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 862,
                'name' => json_encode([
                    'pl' => 'Doradzanie klientom w zakresie wyboru produktów, w tym promocji i nowości',
                    'en' => 'Advising customers on product selection, including promotions and new arrivals'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 863,
                'name' => json_encode([
                    'pl' => 'Obsługa reklamacji, zwrotów oraz rozwiązywanie problemów związanych z zakupionymi produktami',
                    'en' => 'Handling complaints, returns, and solving issues related to purchased products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 864,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie i realizacja zamówień składanych przez klientów indywidualnych oraz firmy',
                    'en' => 'Accepting and fulfilling orders placed by individual customers and companies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 865,
                'name' => json_encode([
                    'pl' => 'Sprawne obsługiwanie kasy fiskalnej i terminali płatniczych',
                    'en' => 'Efficient operation of cash registers and payment terminals'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 866,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie płatności gotówkowych, bezgotówkowych oraz obsługa bonów i kuponów',
                    'en' => 'Handling cash, cashless payments, and processing vouchers and coupons'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 867,
                'name' => json_encode([
                    'pl' => 'Wystawianie paragonów, faktur oraz prawidłowe rozliczanie transakcji',
                    'en' => 'Issuing receipts, invoices, and correctly processing transactions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 868,
                'name' => json_encode([
                    'pl' => 'Dbanie o prawidłowe działanie urządzeń kasowych i zgłaszanie ewentualnych awarii',
                    'en' => 'Ensuring proper functioning of cash registers and reporting any malfunctions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 869,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie dostaw towarów spożywczych, kontrola zgodności dostawy z zamówieniem',
                    'en' => 'Receiving deliveries of food products and verifying their compliance with orders'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 870,
                'name' => json_encode([
                    'pl' => 'Uzupełnianie brakujących produktów na półkach oraz w lodówkach i chłodniach',
                    'en' => 'Restocking missing products on shelves and in fridges and freezers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 871,
                'name' => json_encode([
                    'pl' => 'Odpowiednia ekspozycja produktów zgodnie z zasadami merchandisingu, w tym układanie produktów zgodnie z datą przydatności',
                    'en' => 'Proper product display following merchandising principles, including arranging products by expiration date'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 872,
                'name' => json_encode([
                    'pl' => 'Segregowanie i metkowanie produktów spożywczych',
                    'en' => 'Sorting and labeling food products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 873,
                'name' => json_encode([
                    'pl' => 'Monitorowanie stanów magazynowych i zgłaszanie zapotrzebowania na uzupełnienie zapasów',
                    'en' => 'Monitoring stock levels and reporting the need for replenishment'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 874,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad higieny osobistej i ogólnych standardów sanitarnych',
                    'en' => 'Adhering to personal hygiene standards and general sanitary regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 875,
                'name' => json_encode([
                    'pl' => 'Regularne czyszczenie i dezynfekcja stanowiska pracy, urządzeń chłodniczych, półek oraz sprzętu do krojenia i pakowania żywności',
                    'en' => 'Regular cleaning and disinfection of the workplace, refrigeration equipment, shelves, and food slicing and packaging tools'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 876,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów dotyczących przechowywania żywności',
                    'en' => 'Complying with food storage regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 877,
                'name' => json_encode([
                    'pl' => 'Używanie odzieży ochronnej',
                    'en' => 'Using protective clothing'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 878,
                'name' => json_encode([
                    'pl' => 'Zapewnienie przestrzegania przepisów BHP w miejscu pracy',
                    'en' => 'Ensuring compliance with health and safety regulations in the workplace'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 879,
                'name' => json_encode([
                    'pl' => 'Monitorowanie terminów przydatności produktów spożywczych i usuwanie z półek produktów przeterminowanych lub niewłaściwej jakości',
                    'en' => 'Monitoring food product expiration dates and removing expired or substandard products from shelves'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 880,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie świeżości produktów',
                    'en' => 'Checking product freshness'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 881,
                'name' => json_encode([
                    'pl' => 'Dbanie o odpowiednie warunki przechowywania produktów spożywczych',
                    'en' => 'Ensuring proper storage conditions for food products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 882,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o aktualnych promocjach i ofertach specjalnych',
                    'en' => 'Informing customers about current promotions and special offers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 883,
                'name' => json_encode([
                    'pl' => 'Odpowiednia ekspozycja produktów objętych promocją oraz zmiana cen zgodnie z aktualnymi ofertami',
                    'en' => 'Proper display of promotional products and price adjustments according to current offers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 884,
                'name' => json_encode([
                    'pl' => 'Przygotowanie materiałów reklamowych oraz ich prawidłowe umieszczenie w sklepie',
                    'en' => 'Preparing promotional materials and placing them correctly in the store'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 885,
                'name' => json_encode([
                    'pl' => 'Regularne prowadzenie inwentaryzacji w celu kontroli stanów magazynowych',
                    'en' => 'Conducting regular inventories to control stock levels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 886,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie ewentualnych różnic w stanach magazynowych oraz współpraca z kierownictwem w celu ich rozwiązania',
                    'en' => 'Reporting any discrepancies in stock levels and cooperating with management to resolve them'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 887,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie porządku w magazynie oraz dbanie o właściwe przechowywanie produktów spożywczych',
                    'en' => 'Maintaining order in the warehouse and ensuring proper storage of food products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 888,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów związanych z obrotem żywnością, takich jak normy sanitarne, przepisy dotyczące znakowania produktów, przechowywania i sprzedaży',
                    'en' => 'Complying with food handling regulations, such as sanitary standards, product labeling, storage, and sales rules'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 889,
                'name' => json_encode([
                    'pl' => 'Świadomość i stosowanie przepisów dotyczących bezpieczeństwa żywności, w tym przepisów HACCP',
                    'en' => 'Awareness and application of food safety regulations, including HACCP guidelines'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 890,
                'name' => json_encode([
                    'pl' => 'Znajomość zasad dotyczących alergenów oraz umiejętność udzielania klientom informacji na temat składników i potencjalnych alergenów w produktach',
                    'en' => 'Knowledge of allergen regulations and the ability to inform customers about ingredients and potential allergens in products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 891,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach z zakresu obsługi klienta, sprzedaży produktów spożywczych oraz przepisów dotyczących higieny i bezpieczeństwa',
                    'en' => 'Participating in customer service, food product sales, and hygiene and safety regulation training'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 892,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat produktów spożywczych, w tym nowości, sezonowych trendów oraz zasad zdrowego żywienia',
                    'en' => 'Updating knowledge on food products, including new arrivals, seasonal trends, and healthy eating principles'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 893,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie porządku i estetyki w sklepie, w tym na półkach, lodówkach, ladach sprzedażowych oraz przy kasie',
                    'en' => 'Maintaining order and aesthetics in the store, including shelves, refrigerators, sales counters, and checkout areas'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 894,
                'name' => json_encode([
                    'pl' => 'Dbałość o czystość strefy sprzedaży, w tym usuwanie śmieci, zbieranie opakowań oraz regularne mycie powierzchni',
                    'en' => 'Ensuring cleanliness in the sales area, including removing trash, collecting packaging, and regularly cleaning surfaces'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 895,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie sklepu w sposób profesjonalny, poprzez uprzejmość i pomocność wobec klientów',
                    'en' => 'Representing the store professionally through politeness and helpfulness towards customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 896,
                'name' => json_encode([
                    'pl' => 'Współpraca z kierownictwem oraz zespołem w celu sprawnej realizacji zadań oraz utrzymania wysokiej jakości obsługi',
                    'en' => 'Collaborating with management and team to efficiently complete tasks and maintain high-quality service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 897,
                'name' => json_encode([
                    'pl' => 'Informowanie o ewentualnych brakach towarowych, problemach technicznych lub jakościowych',
                    'en' => 'Reporting any stock shortages, technical issues, or quality problems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 898,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji o wynikach sprzedaży, opiniach klientów oraz bieżących potrzebach sklepu',
                    'en' => 'Providing information on sales results, customer feedback, and current store needs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 899,
                'name' => json_encode([
                    'pl' => 'Krojenie i pakowanie wędlin oraz serów',
                    'en' => 'Slicing and packaging cold cuts and cheeses'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 900,
                'name' => json_encode([
                    'pl' => 'Obsługa krajalnic, wag oraz pakowarek',
                    'en' => 'Operating slicers, scales, and packing machines'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 901,
                'name' => json_encode([
                    'pl' => 'Prowadzenie stoiska mięsnego, w tym porcjowanie i krojenie mięsa, przygotowywanie do sprzedaży',
                    'en' => 'Managing the meat counter, including portioning and slicing meat, and preparing it for sale'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 902,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie, kompletowanie i pakowanie zamówień składanych przez klientów przez internet',
                    'en' => 'Receiving, assembling, and packaging orders placed by customers online'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 903,
                'name' => json_encode([
                    'pl' => 'Organizowanie dostawy lub wydawanie zamówień klientom',
                    'en' => 'Organizing delivery or handing over orders to customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

        ];
        $TECHNIKHANDLOWIEC = [
            [
                'id' => 904,
                'name' => json_encode([
                    'pl' => 'Aktywne poszukiwanie nowych klientów na rynku (B2B, B2C)',
                    'en' => 'Actively searching for new clients in the market (B2B, B2C)'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 905,
                'name' => json_encode([
                    'pl' => 'Budowanie bazy kontaktów, rozwijanie sieci sprzedaży',
                    'en' => 'Building a contact base, expanding the sales network'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 906,
                'name' => json_encode([
                    'pl' => 'Tworzenie ofert handlowych dopasowanych do potrzeb klientów',
                    'en' => 'Creating sales offers tailored to customer needs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 907,
                'name' => json_encode([
                    'pl' => 'Prowadzenie prezentacji produktów lub usług w celu zainteresowania potencjalnych klientów',
                    'en' => 'Conducting product or service presentations to engage potential clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 908,
                'name' => json_encode([
                    'pl' => 'Udzielanie profesjonalnych porad technicznych klientom dotyczących sprzedawanych produktów lub usług',
                    'en' => 'Providing professional technical advice to customers about sold products or services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 909,
                'name' => json_encode([
                    'pl' => 'Pomoc w doborze odpowiednich produktów lub rozwiązań technicznych dostosowanych do specyficznych potrzeb klienta',
                    'en' => 'Assisting in selecting appropriate products or technical solutions tailored to the client\'s specific needs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 910,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rozmów handlowych, negocjowanie warunków współpracy, cen, terminów dostaw oraz warunków gwarancji',
                    'en' => 'Conducting business negotiations, negotiating cooperation terms, prices, delivery schedules, and warranty conditions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 911,
                'name' => json_encode([
                    'pl' => 'Świadczenie wsparcia posprzedażowego, pomaganie klientom w rozwiązywaniu problemów technicznych',
                    'en' => 'Providing after-sales support, assisting clients with technical issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 912,
                'name' => json_encode([
                    'pl' => 'Identyfikowanie nowych potrzeb klientów oraz oferowanie produktów lub usług w odpowiedzi na te potrzeby',
                    'en' => 'Identifying new customer needs and offering products or services in response'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 913,
                'name' => json_encode([
                    'pl' => 'Monitorowanie trendów na rynku oraz zmian w potrzebach klientów',
                    'en' => 'Monitoring market trends and changes in customer needs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 914,
                'name' => json_encode([
                    'pl' => 'Analizowanie działań konkurencji, identyfikowanie przewag konkurencyjnych',
                    'en' => 'Analyzing competitor actions, identifying competitive advantages'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 915,
                'name' => json_encode([
                    'pl' => 'Ocenianie potencjalnych nowych rynków lub segmentów klientów',
                    'en' => 'Assessing potential new markets or customer segments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 916,
                'name' => json_encode([
                    'pl' => 'Wyszukiwanie nowych możliwości sprzedaży produktów lub usług w odpowiedzi na zmiany rynkowe',
                    'en' => 'Identifying new sales opportunities for products or services in response to market changes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 917,
                'name' => json_encode([
                    'pl' => 'Udział w działaniach promocyjnych, takich jak targi, konferencje branżowe, spotkania z klientami',
                    'en' => 'Participating in promotional activities such as trade fairs, industry conferences, and client meetings'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 918,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie materiałów reklamowych i informacyjnych, takich jak broszury, katalogi czy prezentacje',
                    'en' => 'Preparing promotional and informational materials such as brochures, catalogs, and presentations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 919,
                'name' => json_encode([
                    'pl' => 'Promowanie firmy oraz jej oferty na różnych platformach, w tym online i offline',
                    'en' => 'Promoting the company and its offerings across various platforms, both online and offline'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 920,
                'name' => json_encode([
                    'pl' => 'Organizowanie i prowadzenie prezentacji produktów i szkoleń dla klientów',
                    'en' => 'Organizing and conducting product presentations and training for customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 921,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie zamówień od klientów i wprowadzanie ich do systemu sprzedażowego',
                    'en' => 'Receiving customer orders and entering them into the sales system'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 922,
                'name' => json_encode([
                    'pl' => 'Sporządzanie dokumentów handlowych, takich jak faktury, oferty, zamówienia, umowy sprzedaży',
                    'en' => 'Preparing business documents such as invoices, offers, orders, and sales contracts'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 923,
                'name' => json_encode([
                    'pl' => 'Monitorowanie realizacji zamówień, w tym terminowości dostaw i zgodności z ustaleniami',
                    'en' => 'Monitoring order fulfillment, including delivery timeliness and compliance with agreements'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 924,
                'name' => json_encode([
                    'pl' => 'Ścisła współpraca z działem logistycznym i magazynem w celu zapewnienia terminowych dostaw',
                    'en' => 'Close cooperation with the logistics and warehouse departments to ensure timely deliveries'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 925,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w szkoleniach branżowych oraz produktowych, aby stale aktualizować swoją wiedzę na temat produktów, technologii oraz technik sprzedaży',
                    'en' => 'Participating in industry and product training to continually update knowledge about products, technology, and sales techniques'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 926,
                'name' => json_encode([
                    'pl' => 'Doskonalenie umiejętności sprzedażowych i negocjacyjnych',
                    'en' => 'Improving sales and negotiation skills'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 927,
                'name' => json_encode([
                    'pl' => 'Śledzenie nowości w branży oraz wdrażanie innowacyjnych metod sprzedaży',
                    'en' => 'Keeping up with industry trends and implementing innovative sales methods'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 928,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie i obsługa reklamacji klientów dotyczących produktów lub usług',
                    'en' => 'Receiving and handling customer complaints about products or services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 929,
                'name' => json_encode([
                    'pl' => 'Analiza problemów technicznych zgłaszanych przez klientów i współpraca z odpowiednimi działami w celu ich rozwiązania',
                    'en' => 'Analyzing technical issues reported by customers and collaborating with relevant departments to resolve them'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 930,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zadowolenia klientów po rozwiązaniu reklamacji i podejmowanie działań mających na celu poprawę jakości obsługi',
                    'en' => 'Monitoring customer satisfaction after complaint resolution and taking actions to improve service quality'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 931,
                'name' => json_encode([
                    'pl' => 'Planowanie działań sprzedażowych i osiąganie założonych celów sprzedażowych',
                    'en' => 'Planning sales activities and achieving set sales targets'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 932,
                'name' => json_encode([
                    'pl' => 'Analiza wyników sprzedaży i raportowanie ich do przełożonych',
                    'en' => 'Analyzing sales results and reporting them to superiors'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 933,
                'name' => json_encode([
                    'pl' => 'Proaktywne podejmowanie działań mających na celu poprawę wyników sprzedaży',
                    'en' => 'Proactively taking actions to improve sales performance'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 934,
                'name' => json_encode([
                    'pl' => 'Opracowywanie strategii sprzedażowych, które pozwolą zwiększyć wolumen sprzedaży',
                    'en' => 'Developing sales strategies to increase sales volume'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 935,
                'name' => json_encode([
                    'pl' => 'Ścisła współpraca z działem produkcji, logistyki, marketingu oraz finansów w celu zapewnienia sprawnego przepływu informacji oraz realizacji zamówień',
                    'en' => 'Close collaboration with the production, logistics, marketing, and finance departments to ensure smooth information flow and order fulfillment'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 936,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie firmy w kontaktach z klientami i partnerami biznesowymi w sposób profesjonalny i zgodny z polityką firmy',
                    'en' => 'Representing the company in contacts with clients and business partners in a professional manner, in line with company policy'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 937,
                'name' => json_encode([
                    'pl' => 'Analiza efektywności działań handlowych i wdrażanie zmian mających na celu ich optymalizację',
                    'en' => 'Analyzing the effectiveness of sales activities and implementing changes to optimize them'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

        ];
        $TECHNIKKSIĘGARSTWA = [
            [
                'id' => 938,
                'name' => json_encode([
                    'pl' => 'Bezpośrednia obsługa klientów w księgarni',
                    'en' => 'Direct customer service in the bookstore'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 939,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji na temat nowości, bestsellerów, zapowiedzi wydawniczych oraz aktualnych promocji',
                    'en' => 'Providing information on new releases, bestsellers, publishing announcements, and current promotions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 940,
                'name' => json_encode([
                    'pl' => 'Realizacja zamówień klientów, w tym składanych telefonicznie, online lub osobiście w księgarni',
                    'en' => 'Fulfilling customer orders, including those placed by phone, online, or in person at the bookstore'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 941,
                'name' => json_encode([
                    'pl' => 'Obsługa reklamacji oraz rozwiązywanie problemów związanych z zakupionymi produktami',
                    'en' => 'Handling complaints and resolving issues related to purchased products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 942,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie dostaw',
                    'en' => 'Receiving deliveries'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 943,
                'name' => json_encode([
                    'pl' => 'Zarządzanie stanem magazynowym, uzupełnianie braków towarowych, monitorowanie rotacji produktów',
                    'en' => 'Managing inventory, replenishing stock shortages, and monitoring product turnover'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 944,
                'name' => json_encode([
                    'pl' => 'Ekspozycja produktów w sposób atrakcyjny dla klientów (merchandising), dbanie o porządek na półkach i w magazynie',
                    'en' => 'Displaying products attractively for customers (merchandising) and maintaining order on shelves and in the warehouse'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 945,
                'name' => json_encode([
                    'pl' => 'Sporządzanie i aktualizowanie oferty handlowej, dostosowanie asortymentu do potrzeb klientów i trendów rynkowych',
                    'en' => 'Preparing and updating the sales offer, adjusting the assortment to customer needs and market trends'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 946,
                'name' => json_encode([
                    'pl' => 'Organizacja i koordynacja spotkań autorskich, wieczorów literackich, warsztatów oraz innych wydarzeń promujących czytelnictwo',
                    'en' => 'Organizing and coordinating author meetings, literary evenings, workshops, and other events promoting reading'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 947,
                'name' => json_encode([
                    'pl' => 'Współpraca z lokalnymi instytucjami kulturalnymi, szkołami i organizacjami społecznymi w celu popularyzacji literatury i księgarni',
                    'en' => 'Collaborating with local cultural institutions, schools, and social organizations to promote literature and the bookstore'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 948,
                'name' => json_encode([
                    'pl' => 'Prowadzenie działań marketingowych promujących księgarnię i jej ofertę',
                    'en' => 'Conducting marketing activities promoting the bookstore and its offer'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 949,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji książek i produktów w systemie księgowo-sprzedażowym',
                    'en' => 'Maintaining records of books and products in the accounting-sales system'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 950,
                'name' => json_encode([
                    'pl' => 'Kontakt z wydawcami i dystrybutorami w celu zamawiania książek, negocjacji cen, warunków dostaw oraz rozliczeń',
                    'en' => 'Contacting publishers and distributors to order books, negotiate prices, delivery terms, and settlements'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 951,
                'name' => json_encode([
                    'pl' => 'Prowadzenie sprzedaży online, obsługa zamówień internetowych, w tym przygotowywanie książek do wysyłki',
                    'en' => 'Managing online sales, handling online orders, including preparing books for shipment'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 952,
                'name' => json_encode([
                    'pl' => 'Zarządzanie sklepem internetowym, w tym monitorowanie stanów magazynowych, procesów zakupowych oraz obsługi klienta online',
                    'en' => 'Managing the online store, including monitoring stock levels, purchasing processes, and online customer service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 953,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie jakości książek oraz innych produktów przed ich wprowadzeniem do sprzedaży',
                    'en' => 'Checking the quality of books and other products before introducing them for sale'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 954,
                'name' => json_encode([
                    'pl' => 'Monitorowanie dostępności książek i eliminowanie produktów uszkodzonych lub nieaktualnych',
                    'en' => 'Monitoring the availability of books and removing damaged or outdated products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 955,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie księgarni w kontaktach z klientami, instytucjami kulturalnymi i branżowymi',
                    'en' => 'Representing the bookstore in contacts with customers, cultural institutions, and industry organizations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALISPRZEDAWCYSKLEPOWIEKSPEDIENCI = [
            [
                'id' => 956,
                'name' => json_encode([
                    'pl' => 'Doradzanie klientom w zakresie wyboru odpowiednich produktów',
                    'en' => 'Advising customers on choosing the right products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 957,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów i reagowanie na potrzeby klientów w sposób profesjonalny i uprzejmy',
                    'en' => 'Resolving issues and responding to customer needs in a professional and polite manner'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 958,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie i obsługa reklamacji oraz zwrotów towarów zgodnie z polityką sklepu',
                    'en' => 'Receiving and handling complaints and product returns according to store policy'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 959,
                'name' => json_encode([
                    'pl' => 'Finalizowanie transakcji sprzedażowych, w tym obsługa kasy fiskalnej oraz terminali płatniczych (gotówkowych i bezgotówkowych)',
                    'en' => 'Finalizing sales transactions, including operating the cash register and payment terminals (cash and card)'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 960,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie dostaw towarów, sprawdzanie ich ilości i jakości, porównywanie z dokumentacją dostawy',
                    'en' => 'Receiving deliveries, checking quantity and quality, and comparing with delivery documentation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 961,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie porządku na półkach sklepowych oraz w magazynie',
                    'en' => 'Maintaining order on store shelves and in the warehouse'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 962,
                'name' => json_encode([
                    'pl' => 'Rotacja towarów zgodnie z zasadą FIFO',
                    'en' => 'Rotating products according to the FIFO principle'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 963,
                'name' => json_encode([
                    'pl' => 'Informowanie kierownictwa o brakach w asortymencie, zgłaszanie potrzeby zamówienia nowych dostaw',
                    'en' => 'Informing management about stock shortages and requesting new supplies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 964,
                'name' => json_encode([
                    'pl' => 'Dbanie o odpowiednie oznakowanie produktów, w tym metkowanie oraz ustawianie znaków informujących o zniżkach',
                    'en' => 'Ensuring proper product labeling, including tagging and placing discount signs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 965,
                'name' => json_encode([
                    'pl' => 'Wspieranie działań marketingowych poprzez informowanie klientów o nowych produktach i ofertach specjalnych',
                    'en' => 'Supporting marketing activities by informing customers about new products and special offers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 966,
                'name' => json_encode([
                    'pl' => 'Dbanie o atrakcyjny wygląd wystaw sklepowych i wewnętrznych stoisk promocyjnych',
                    'en' => 'Ensuring an attractive appearance of store displays and internal promotional stands'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 967,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie i kompletowanie zamówień złożonych przez klientów przez sklep internetowy',
                    'en' => 'Receiving and assembling orders placed by customers through the online store'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 968,
                'name' => json_encode([
                    'pl' => 'Pakowanie produktów i przygotowywanie ich do wysyłki lub odbioru w sklepie',
                    'en' => 'Packing products and preparing them for shipment or in-store pickup'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 969,
                'name' => json_encode([
                    'pl' => 'Obsługa procedur zwrotów i wymiany towarów zgodnie z obowiązującymi przepisami i polityką sklepu',
                    'en' => 'Handling return and exchange procedures according to regulations and store policy'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 970,
                'name' => json_encode([
                    'pl' => 'Usuwanie z półek produktów przeterminowanych, uszkodzonych lub niezgodnych z wymaganiami jakościowymi',
                    'en' => 'Removing expired, damaged, or non-compliant products from shelves'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 971,
                'name' => json_encode([
                    'pl' => 'Prowadzenie dokumentacji związanej z zamówieniami, dostawami oraz sprzedażą, w tym faktur, zamówień wewnętrznych, raportów sprzedaży',
                    'en' => 'Maintaining documentation related to orders, deliveries, and sales, including invoices, internal orders, and sales reports'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 972,
                'name' => json_encode([
                    'pl' => 'Sporządzanie dziennych raportów kasowych i przekazywanie ich kierownictwu',
                    'en' => 'Preparing daily cash reports and submitting them to management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 973,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowych pracowników w systemy sprzedażowe i procedury obowiązujące w sklepie',
                    'en' => 'Training new employees in sales systems and store procedures'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 974,
                'name' => json_encode([
                    'pl' => 'Realizacja wyznaczonych przez kierownictwo celów sprzedażowych',
                    'en' => 'Achieving sales targets set by management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $SPRZEDAWCYWSTACJIPALIW = [
            [
                'id' => 975,
                'name' => json_encode([
                    'pl' => 'Sprzedaż paliw, produktów dostępnych w sklepie przy stacji oraz usług dodatkowych',
                    'en' => 'Selling fuel, products available in the station store, and additional services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 976,
                'name' => json_encode([
                    'pl' => 'Doradzanie klientom w zakresie oferowanych produktów, w tym napojów, przekąsek, artykułów motoryzacyjnych',
                    'en' => 'Advising customers on available products, including beverages, snacks, and automotive items'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 977,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o aktualnych promocjach, rabatach i usługach dostępnych na stacji',
                    'en' => 'Providing information on current promotions, discounts, and services available at the station'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 978,
                'name' => json_encode([
                    'pl' => 'Finalizowanie transakcji sprzedażowych, wystawianie paragonów oraz faktur VAT',
                    'en' => 'Finalizing sales transactions, issuing receipts and VAT invoices'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 979,
                'name' => json_encode([
                    'pl' => 'Monitorowanie stanów magazynowych i uzupełnianie półek z towarami w sklepie',
                    'en' => 'Monitoring stock levels and restocking shelves in the store'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 980,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie dostaw towarów, kontrolowanie zgodności dostaw z zamówieniami oraz sprawdzanie jakości produktów',
                    'en' => 'Receiving deliveries, checking compliance with orders, and inspecting product quality'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 981,
                'name' => json_encode([
                    'pl' => 'Monitorowanie terminów przydatności produktów spożywczych i usuwanie przeterminowanych towarów',
                    'en' => 'Monitoring expiration dates of food products and removing expired items'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 982,
                'name' => json_encode([
                    'pl' => 'Dbanie o czystość w sklepie, w tym sprzątanie podłóg, regałów, powierzchni kasowej oraz strefy dla klientów',
                    'en' => 'Maintaining cleanliness in the store, including cleaning floors, shelves, checkout areas, and the customer zone'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 983,
                'name' => json_encode([
                    'pl' => 'Regularne sprzątanie terenu stacji paliw, w tym strefy dystrybutorów, myjni samochodowej oraz parkingu',
                    'en' => 'Regular cleaning of the gas station area, including the pump zone, car wash, and parking lot'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 984,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie czystości w toaletach dostępnych dla klientów oraz ich regularna kontrola',
                    'en' => 'Maintaining cleanliness in customer restrooms and conducting regular checks'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 985,
                'name' => json_encode([
                    'pl' => 'Monitorowanie stanu paliwa w zbiornikach stacji oraz zgłaszanie konieczności zamówienia nowej dostawy',
                    'en' => 'Monitoring fuel levels in station tanks and reporting the need for new deliveries'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 986,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie poprawności działania dystrybutorów paliw oraz zgłaszanie usterek technicznych',
                    'en' => 'Checking the proper operation of fuel dispensers and reporting technical issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 987,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom w tankowaniu',
                    'en' => 'Assisting customers with refueling'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 988,
                'name' => json_encode([
                    'pl' => 'Obsługa systemów monitoringu oraz reagowanie na wszelkie podejrzane sytuacje lub zachowania na terenie stacji',
                    'en' => 'Operating monitoring systems and responding to any suspicious situations or behaviors on the station premises'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 989,
                'name' => json_encode([
                    'pl' => 'Regularne sprawdzanie stanu paliw w zbiornikach pod kątem jakości i czystości',
                    'en' => 'Regularly checking the fuel quality and cleanliness in storage tanks'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 990,
                'name' => json_encode([
                    'pl' => 'Sprzedaż usług myjni samochodowej, informowanie klientów o dostępnych opcjach mycia',
                    'en' => 'Selling car wash services and informing customers about available washing options'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 991,
                'name' => json_encode([
                    'pl' => 'Monitorowanie pracy urządzeń myjących i zgłaszanie usterek technicznych',
                    'en' => 'Monitoring the operation of washing equipment and reporting technical faults'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 992,
                'name' => json_encode([
                    'pl' => 'Zachęcanie klientów do korzystania z programów lojalnościowych, które oferuje stacja',
                    'en' => 'Encouraging customers to participate in loyalty programs offered by the station'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 993,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów kasowych na koniec zmiany i przekazywanie ich do kierownictwa',
                    'en' => 'Preparing cash reports at the end of the shift and submitting them to management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 994,
                'name' => json_encode([
                    'pl' => 'Sporządzanie dokumentacji związanej z zamówieniami, sprzedażą i dostawami',
                    'en' => 'Preparing documentation related to orders, sales, and deliveries'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 995,
                'name' => json_encode([
                    'pl' => 'Uzupełnianie dokumentacji BHP, listy obecności, raportów dziennych',
                    'en' => 'Updating health and safety documentation, attendance lists, and daily reports'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $KASJERBANKOWY = [
            [
                'id' => 996,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o oferowanych produktach i usługach bankowych',
                    'en' => 'Providing information on offered banking products and services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 997,
                'name' => json_encode([
                    'pl' => 'Doradzanie klientom w zakresie wyboru odpowiednich produktów finansowych, które spełniają ich potrzeby',
                    'en' => 'Advising customers on selecting the right financial products that meet their needs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 998,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów klientów oraz udzielanie wsparcia w zakresie operacji bankowych',
                    'en' => 'Resolving customer issues and providing support for banking operations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 999,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie wpłat gotówkowych na konta klientów, zarówno indywidualnych, jak i firmowych',
                    'en' => 'Accepting cash deposits into customer accounts, both individual and corporate'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1000,
                'name' => json_encode([
                    'pl' => 'Wypłacanie gotówki z kont klientów na ich żądanie',
                    'en' => 'Withdrawing cash from customer accounts upon their request'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1001,
                'name' => json_encode([
                    'pl' => 'Obsługa czeków, realizacja wpłat i wypłat czekowych',
                    'en' => 'Handling checks, including processing deposits and withdrawals'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1002,
                'name' => json_encode([
                    'pl' => 'Wykonywanie przelewów bankowych',
                    'en' => 'Processing bank transfers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1003,
                'name' => json_encode([
                    'pl' => 'Realizacja operacji związanych z przewalutowaniem',
                    'en' => 'Executing currency exchange operations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1004,
                'name' => json_encode([
                    'pl' => 'Obsługa korespondencji dotyczącej operacji bankowych, np. wniosków, zleceń, reklamacji',
                    'en' => 'Handling correspondence related to banking operations, such as applications, orders, and complaints'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1005,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie danych klientów i operacji do systemów komputerowych banku',
                    'en' => 'Entering customer and transaction data into the bank\'s computer systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1006,
                'name' => json_encode([
                    'pl' => 'Stosowanie się do procedur związanych z ochroną danych osobowych (RODO) i przestrzeganie tajemnicy bankowej',
                    'en' => 'Adhering to procedures related to data protection (GDPR) and maintaining banking confidentiality'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1007,
                'name' => json_encode([
                    'pl' => 'Kontrola dokumentów w celu zapobiegania oszustwom finansowym i wyłudzeniom',
                    'en' => 'Document verification to prevent financial fraud and scams'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1008,
                'name' => json_encode([
                    'pl' => 'Wydawanie kart płatniczych klientom, w tym debetowych i kredytowych',
                    'en' => 'Issuing payment cards to customers, including debit and credit cards'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1009,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom w aktywacji kart płatniczych oraz w rozwiązywaniu problemów z ich użytkowaniem',
                    'en' => 'Assisting customers with card activation and resolving usage issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1010,
                'name' => json_encode([
                    'pl' => 'Obsługa blokad i odblokowań kart oraz zarządzanie limitami transakcyjnymi na kontach klientów',
                    'en' => 'Handling card blocks and unblocks, as well as managing transaction limits on customer accounts'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1011,
                'name' => json_encode([
                    'pl' => 'Realizacja operacji związanych z wydawaniem duplikatów kart',
                    'en' => 'Processing operations related to issuing duplicate cards'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1012,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie i przetwarzanie wniosków o produkty kredytowe oraz konta bankowe',
                    'en' => 'Accepting and processing applications for credit products and bank accounts'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1013,
                'name' => json_encode([
                    'pl' => 'Przekazywanie gotówki do skarbca banku oraz odpowiednie zabezpieczenie dokumentacji i innych wartości',
                    'en' => 'Transferring cash to the bank vault and securing documentation and other valuables'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1014,
                'name' => json_encode([
                    'pl' => 'Sporządzanie dziennych raportów finansowych i przekazywanie ich do kierownictwa lub działu księgowego',
                    'en' => 'Preparing daily financial reports and submitting them to management or the accounting department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1015,
                'name' => json_encode([
                    'pl' => 'Przekazywanie wniosków i zapytań klientów do odpowiednich działów w celu zapewnienia kompleksowej obsługi',
                    'en' => 'Forwarding customer applications and inquiries to the appropriate departments to ensure comprehensive service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $KASJERWALUTOWY = [
            [
                'id' => 1016,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie od klientów zleceń wymiany walut',
                    'en' => 'Accepting currency exchange orders from customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1017,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o aktualnych kursach walut',
                    'en' => 'Informing customers about current exchange rates'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1018,
                'name' => json_encode([
                    'pl' => 'Przeliczanie walut przy użyciu aktualnych kursów obowiązujących w banku lub kantorze',
                    'en' => 'Converting currencies using the current rates applicable in the bank or exchange office'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1019,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie i wypłacanie gotówki w różnych walutach, w tym walutach egzotycznych',
                    'en' => 'Receiving and disbursing cash in various currencies, including exotic currencies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1020,
                'name' => json_encode([
                    'pl' => 'Weryfikacja autentyczności banknotów walut obcych przy użyciu odpowiednich narzędzi',
                    'en' => 'Verifying the authenticity of foreign currency notes using appropriate tools'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1021,
                'name' => json_encode([
                    'pl' => 'Rozpoznawanie i odrzucanie fałszywych banknotów oraz podejmowanie odpowiednich kroków zgodnie z przepisami bankowymi',
                    'en' => 'Identifying and rejecting counterfeit notes and taking appropriate actions according to banking regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1022,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zmian kursów walut w systemach bankowych oraz aktualizacja kursów dla klientów',
                    'en' => 'Monitoring currency rate changes in banking systems and updating rates for customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1023,
                'name' => json_encode([
                    'pl' => 'Utrzymanie rezerw walutowych na poziomie umożliwiającym płynną obsługę transakcji',
                    'en' => 'Maintaining currency reserves at a level that ensures smooth transaction processing'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1024,
                'name' => json_encode([
                    'pl' => 'Tworzenie dziennych, tygodniowych oraz miesięcznych raportów z przeprowadzonych operacji walutowych',
                    'en' => 'Preparing daily, weekly, and monthly reports on conducted currency operations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1025,
                'name' => json_encode([
                    'pl' => 'Stosowanie obowiązujących przepisów prawa dotyczących wymiany walut, w tym przepisów prawa dewizowego i przepisów o przeciwdziałaniu praniu pieniędzy (AML)',
                    'en' => 'Applying relevant currency exchange regulations, including foreign exchange laws and anti-money laundering (AML) policies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1026,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie procedur dotyczących identyfikacji klientów w operacjach walutowych',
                    'en' => 'Following procedures for customer identification in currency transactions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1027,
                'name' => json_encode([
                    'pl' => 'Monitorowanie transakcji walutowych pod kątem podejrzanych operacji finansowych',
                    'en' => 'Monitoring currency transactions for suspicious financial activities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1028,
                'name' => json_encode([
                    'pl' => 'Dbałość o odpowiednie przechowywanie walut obcych, zabezpieczanie ich w kasach lub sejfach',
                    'en' => 'Ensuring proper storage of foreign currencies and securing them in cash drawers or safes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1029,
                'name' => json_encode([
                    'pl' => 'Realizacja i obsługa czeków walutowych, w tym ich weryfikacja oraz wypłaty w walutach obcych',
                    'en' => 'Handling currency checks, including verification and disbursements in foreign currencies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1030,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem księgowości, działem walutowym oraz innymi działami odpowiedzialnymi za operacje finansowe',
                    'en' => 'Collaborating with the accounting department, currency department, and other departments responsible for financial operations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1031,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji o dużych transakcjach walutowych lub potrzebie wymiany dużych sum walut do odpowiednich działów',
                    'en' => 'Communicating large currency transactions or the need for significant currency exchanges to appropriate departments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1032,
                'name' => json_encode([
                    'pl' => 'Koordynacja operacji walutowych w kontekście sprzedaży produktów finansowych banku lub kantoru',
                    'en' => 'Coordinating currency operations in the context of selling financial products offered by the bank or exchange office'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $KASJERBILETOWY = [
            [
                'id' => 1033,
                'name' => json_encode([
                    'pl' => 'Obsługa klientów przy zakupie biletów na wydarzenia, seanse filmowe, spektakle, podróże itp.',
                    'en' => 'Assisting customers with purchasing tickets for events, movie screenings, shows, travel, etc.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1034,
                'name' => json_encode([
                    'pl' => 'Korzystanie z komputerowych systemów do sprzedaży biletów, rezerwacji miejsc oraz ich anulowania',
                    'en' => 'Using computerized systems for ticket sales, seat reservations, and cancellations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1035,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie stanów wolnych miejsc',
                    'en' => 'Updating the status of available seats'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1036,
                'name' => json_encode([
                    'pl' => 'Udzielanie szczegółowych informacji o wydarzeniach, seansach, repertuarze, rozkładach jazdy, dostępnych usługach',
                    'en' => 'Providing detailed information about events, screenings, schedules, timetables, and available services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1037,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na pytania dotyczące czasu trwania wydarzeń, godzin otwarcia oraz zamknięcia obiektu',
                    'en' => 'Answering questions about event duration, opening and closing hours of the venue'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1038,
                'name' => json_encode([
                    'pl' => 'Informowanie o zmianach',
                    'en' => 'Informing about changes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1039,
                'name' => json_encode([
                    'pl' => 'Rozliczanie z kasy na koniec zmiany, prowadzenie dokumentacji finansowej',
                    'en' => 'Cash reconciliation at the end of the shift and maintaining financial records'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1040,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie biletów przy wejściu na wydarzenie, seans, podróż',
                    'en' => 'Checking tickets at the entrance to events, screenings, or travels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1041,
                'name' => json_encode([
                    'pl' => 'Weryfikacja autentyczności biletów oraz prawa do korzystania z ulg',
                    'en' => 'Verifying ticket authenticity and eligibility for discounts'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1042,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie reklamacji oraz kierowanie trudniejszych spraw do odpowiednich działów',
                    'en' => 'Handling complaints and directing more complex cases to the appropriate departments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1043,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie stanowiska kasowego w czystości i porządku',
                    'en' => 'Maintaining cleanliness and order at the cash desk'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $KASJERHANDLOWY = [
            [
                'id' => 1044,
                'name' => json_encode([
                    'pl' => 'Obsługiwanie kasy fiskalnej, skanowanie towarów i naliczanie odpowiednich cen',
                    'en' => 'Operating the cash register, scanning products, and applying correct prices'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1045,
                'name' => json_encode([
                    'pl' => 'Księgowanie sprzedaży zgodnie z przepisami podatkowymi',
                    'en' => 'Recording sales according to tax regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1046,
                'name' => json_encode([
                    'pl' => 'Obsługa płatności gotówkowych, bezgotówkowych oraz bonów towarowych',
                    'en' => 'Handling cash, card payments, and gift vouchers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1047,
                'name' => json_encode([
                    'pl' => 'Codzienne rozliczanie utargu, raportowanie sprzedaży i zysku do kierownictwa',
                    'en' => 'Daily cash reconciliation, sales reporting, and profit reporting to management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1048,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie reklamacji i zwrotów towarów zgodnie z regulaminem sklepu',
                    'en' => 'Handling complaints and product returns according to store policy'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1049,
                'name' => json_encode([
                    'pl' => 'Stosowanie się do wewnętrznych zasad sklepu dotyczących obsługi klienta, kas fiskalnych, przepisów podatkowych oraz polityki firmy',
                    'en' => 'Adhering to store policies regarding customer service, cash registers, tax regulations, and company policy'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1050,
                'name' => json_encode([
                    'pl' => 'Informowanie o brakach w towarze, szczególnie w rejonie strefy kasowej',
                    'en' => 'Reporting product shortages, especially in the checkout area'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1051,
                'name' => json_encode([
                    'pl' => 'Upewnianie się, że ceny towarów są prawidłowo wprowadzone do systemu kasowego',
                    'en' => 'Ensuring that product prices are correctly entered into the cash register system'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1052,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o bieżących promocjach oraz udzielanie rabatów zgodnie z polityką sklepu',
                    'en' => 'Informing customers about current promotions and applying discounts according to store policy'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1053,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie, czy produkty przy kasie są odpowiednio oznaczone',
                    'en' => 'Checking if products at the checkout are properly labeled'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1054,
                'name' => json_encode([
                    'pl' => 'Obsługa oprogramowania sklepowego, w tym systemów kasowych oraz baz danych towarów',
                    'en' => 'Operating store software, including cash register systems and product databases'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1055,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie nieprawidłowości lub podejrzeń o kradzież odpowiednim osobom (ochrona, kierownik sklepu)',
                    'en' => 'Reporting irregularities or suspected theft to the appropriate personnel (security, store manager)'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $KASJERWZAKŁADZIEPRACY = [
            [
                'id' => 1056,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie wpłat gotówkowych oraz realizowanie wypłat zgodnie z obowiązującymi przepisami i wewnętrznymi procedurami firmy',
                    'en' => 'Accepting cash deposits and processing withdrawals in accordance with applicable regulations and internal company procedures'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1057,
                'name' => json_encode([
                    'pl' => 'Wydawanie zaliczek pracownikom',
                    'en' => 'Issuing advances to employees'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1058,
                'name' => json_encode([
                    'pl' => 'Prowadzenie operacji kasowych w walutach obcych',
                    'en' => 'Conducting cash operations in foreign currencies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1059,
                'name' => json_encode([
                    'pl' => 'Codzienne rozliczanie kasy',
                    'en' => 'Daily cash reconciliation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1060,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów kasowych',
                    'en' => 'Preparing cash reports'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1061,
                'name' => json_encode([
                    'pl' => 'Prowadzenie dokumentacji kasowej',
                    'en' => 'Maintaining cash documentation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1062,
                'name' => json_encode([
                    'pl' => 'Zarządzanie tzw. kasą podręczną na bieżące wydatki firmowe',
                    'en' => 'Managing petty cash for daily company expenses'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1063,
                'name' => json_encode([
                    'pl' => 'Regularne liczenie środków pieniężnych w kasie oraz zapewnienie zgodności fizycznego stanu kasy z dokumentacją',
                    'en' => 'Regularly counting cash in the register and ensuring its physical state matches the documentation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1064,
                'name' => json_encode([
                    'pl' => 'Wpłacanie gotówki na konto bankowe firmy oraz realizacja wypłat z konta zgodnie z instrukcjami przełożonych',
                    'en' => 'Depositing cash into the company\'s bank account and processing withdrawals according to supervisors\' instructions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1065,
                'name' => json_encode([
                    'pl' => 'Obsługa transakcji bankowych',
                    'en' => 'Handling banking transactions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1066,
                'name' => json_encode([
                    'pl' => 'Udział w inwentaryzacjach kasy',
                    'en' => 'Participating in cash inventory checks'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1067,
                'name' => json_encode([
                    'pl' => 'Udział w przygotowywaniu dokumentacji potrzebnej do rozliczeń podatkowych związanych z operacjami kasowymi',
                    'en' => 'Assisting in the preparation of documentation needed for tax settlements related to cash operations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1068,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem księgowości',
                    'en' => 'Collaborating with the accounting department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1069,
                'name' => json_encode([
                    'pl' => 'Znajomość i stosowanie wewnętrznych polityk firmy dotyczących obiegu dokumentów finansowych, rozliczeń oraz bezpieczeństwa operacji kasowych',
                    'en' => 'Knowledge and application of internal company policies regarding financial document flow, settlements, and the security of cash operations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1070,
                'name' => json_encode([
                    'pl' => 'Stosowanie się do obowiązujących regulaminów i przepisów dotyczących kasjerów, w tym przestrzeganie regulacji prawa pracy i przepisów fiskalnych',
                    'en' => 'Complying with current cashier regulations, including labor laws and fiscal rules'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1071,
                'name' => json_encode([
                    'pl' => 'Przygotowanie dokumentacji kasowej na potrzeby audytów wewnętrznych lub zewnętrznych',
                    'en' => 'Preparing cash documentation for internal or external audits'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1072,
                'name' => json_encode([
                    'pl' => 'Współpraca z audytorami i kontrolerami finansowymi w celu weryfikacji poprawności operacji kasowych i zgodności z obowiązującymi przepisami',
                    'en' => 'Collaborating with auditors and financial controllers to verify the accuracy of cash operations and compliance with regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALIKASJERZYISPRZEDAWCYBILETÓW = [
            [
                'id' => 1073,
                'name' => json_encode([
                    'pl' => 'Sprzedaż i wydawanie biletów parkingowych',
                    'en' => 'Selling and issuing parking tickets'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1074,
                'name' => json_encode([
                    'pl' => 'Kontrola opłat parkingowych',
                    'en' => 'Monitoring parking payments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1075,
                'name' => json_encode([
                    'pl' => 'Obsługa kasy i płatności',
                    'en' => 'Handling cash register and payments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1076,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie porządku w miejscu pracy',
                    'en' => 'Maintaining order in the workplace'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1077,
                'name' => json_encode([
                    'pl' => 'Pomoc techniczna klientom',
                    'en' => 'Providing technical support to customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1078,
                'name' => json_encode([
                    'pl' => 'Sprzedaż biletów w punktach stacjonarnych lub mobilnych',
                    'en' => 'Selling tickets at stationary or mobile points'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1079,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie opłat za bilety',
                    'en' => 'Accepting payments for tickets'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1080,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie autentyczności biletów',
                    'en' => 'Checking ticket authenticity'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1081,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów związanych z biletami',
                    'en' => 'Resolving ticket-related issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1082,
                'name' => json_encode([
                    'pl' => 'Sprzedaż biletów na wydarzenia sportowe',
                    'en' => 'Selling tickets for sports events'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1083,
                'name' => json_encode([
                    'pl' => 'Obsługa płatności za bilety, karnety czy inne usługi',
                    'en' => 'Processing payments for tickets, passes, or other services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1084,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o zasadach wstępu na wydarzenia, dostępnych miejscach i usługach dodatkowych',
                    'en' => 'Informing customers about entry rules, available seats, and additional services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1085,
                'name' => json_encode([
                    'pl' => 'Zarządzanie rezerwacjami biletów oraz obsługa klientów w przypadku zmian w harmonogramie wydarzeń',
                    'en' => 'Managing ticket reservations and assisting customers in case of schedule changes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1086,
                'name' => json_encode([
                    'pl' => 'Kontrola biletów przy wejściach do obiektu sportowego, weryfikacja autentyczności',
                    'en' => 'Checking tickets at sports venue entrances and verifying authenticity'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1087,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów z biletami oraz obsługa reklamacji i zwrotów',
                    'en' => 'Resolving ticket issues and handling complaints and returns'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1088,
                'name' => json_encode([
                    'pl' => 'Sprzedaż biletów wstępu na wystawy, ekspozycje, pokazy lub do obiektów kulturalnych',
                    'en' => 'Selling admission tickets for exhibitions, displays, shows, or cultural venues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1089,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie płatności za bilety wstępu oraz usługi dodatkowe',
                    'en' => 'Accepting payments for admission tickets and additional services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1090,
                'name' => json_encode([
                    'pl' => 'Informowanie odwiedzających o aktualnych wystawach i wydarzeniach',
                    'en' => 'Informing visitors about current exhibitions and events'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1091,
                'name' => json_encode([
                    'pl' => 'Zarządzanie rezerwacjami grupowymi oraz obsługa klientów indywidualnych',
                    'en' => 'Managing group reservations and assisting individual customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1092,
                'name' => json_encode([
                    'pl' => 'Kontrola biletów wstępu przy wejściu na wystawy lub inne wydarzenia',
                    'en' => 'Checking admission tickets at the entrance to exhibitions or other events'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1093,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie reklamacji związanych z biletami oraz błędnie dokonanymi zakupami',
                    'en' => 'Handling ticket-related complaints and incorrectly processed purchases'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1094,
                'name' => json_encode([
                    'pl' => 'Sprzedaż biletów wstępu do strefy basenowej, saun czy stref relaksacyjnych',
                    'en' => 'Selling admission tickets to the pool area, saunas, or relaxation zones'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1095,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o dostępnych usługach',
                    'en' => 'Informing customers about available services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1096,
                'name' => json_encode([
                    'pl' => 'Obsługa płatności za bilety wstępu, karnety miesięczne, lekcje indywidualne',
                    'en' => 'Handling payments for admission tickets, monthly passes, and individual lessons'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1097,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie opłat za wynajem sprzętu',
                    'en' => 'Accepting payments for equipment rental'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1098,
                'name' => json_encode([
                    'pl' => 'Kontrola biletów przy wejściu oraz sprawdzanie zgodności z regulaminem korzystania z obiektu',
                    'en' => 'Checking tickets at the entrance and verifying compliance with facility regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1099,
                'name' => json_encode([
                    'pl' => 'Rozliczanie i prowadzenie raportów kasowych na koniec zmiany',
                    'en' => 'Reconciling and preparing cash reports at the end of the shift'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1100,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie opłat urzędowych',
                    'en' => 'Accepting official payments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1101,
                'name' => json_encode([
                    'pl' => 'Wystawianie pokwitowań i dowodów wpłaty oraz ich archiwizacja',
                    'en' => 'Issuing receipts and proof of payment and archiving them'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1102,
                'name' => json_encode([
                    'pl' => 'Weryfikacja zgodności dokumentów finansowych z procedurami urzędu',
                    'en' => 'Verifying financial documents compliance with office procedures'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1103,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o wysokości opłat i procedurach dotyczących płatności',
                    'en' => 'Providing information about fees and payment procedures'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1104,
                'name' => json_encode([
                    'pl' => 'Sprzedaż biletów wstępu na atrakcje i do strefy rekreacyjnej',
                    'en' => 'Selling tickets for attractions and access to recreational areas'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1105,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o dostępnych atrakcjach oraz godzinach otwarcia obiektu',
                    'en' => 'Informing customers about available attractions and opening hours'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1106,
                'name' => json_encode([
                    'pl' => 'Obsługa kasy fiskalnej oraz systemów płatności elektronicznej',
                    'en' => 'Operating the cash register and electronic payment systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1107,
                'name' => json_encode([
                    'pl' => 'Kontrola biletów przy wejściu oraz weryfikacja uprawnień do korzystania z poszczególnych atrakcji',
                    'en' => 'Checking tickets at the entrance and verifying eligibility for attractions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1108,
                'name' => json_encode([
                    'pl' => 'Sprzedaż biletów na wycieczki, rejsy czy inne atrakcje turystyczne',
                    'en' => 'Selling tickets for tours, cruises, and other tourist attractions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1109,
                'name' => json_encode([
                    'pl' => 'Obsługa rezerwacji grupowych i indywidualnych w systemach turystycznych',
                    'en' => 'Managing group and individual reservations in tourism systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1110,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie płatności za bilety, usługi przewodnickie i inne atrakcje turystyczne',
                    'en' => 'Accepting payments for tickets, guide services, and other tourist attractions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1111,
                'name' => json_encode([
                    'pl' => 'Informowanie turystów o trasach, atrakcjach i regulaminach korzystania z usług',
                    'en' => 'Informing tourists about routes, attractions, and service regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1112,
                'name' => json_encode([
                    'pl' => 'Wydawanie broszur, mapek i materiałów promocyjnych związanych z atrakcją turystyczną',
                    'en' => 'Distributing brochures, maps, and promotional materials related to the tourist attraction'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1113,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie depozytów pieniężnych od klientów i realizacja wypłat',
                    'en' => 'Accepting cash deposits from clients and processing withdrawals'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1114,
                'name' => json_encode([
                    'pl' => 'Wymiana żetonów i pieniędzy na potrzeby gier hazardowych',
                    'en' => 'Exchanging tokens and money for gambling purposes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1115,
                'name' => json_encode([
                    'pl' => 'Rozliczanie transakcji kasowych związanych z grą',
                    'en' => 'Handling cash transactions related to gaming'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1116,
                'name' => json_encode([
                    'pl' => 'Weryfikacja tożsamości klientów oraz sprawdzanie, czy spełniają oni warunki do gry',
                    'en' => 'Verifying customer identity and checking if they meet the conditions for gaming'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $INKASENT = [
            [
                'id' => 1117,
                'name' => json_encode([
                    'pl' => 'Pobieranie opłat za zużycie mediów od klientów indywidualnych i firm',
                    'en' => 'Collecting payments for utility usage from individual and corporate clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1118,
                'name' => json_encode([
                    'pl' => 'Zbieranie należności za inne usługi',
                    'en' => 'Collecting payments for other services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1119,
                'name' => json_encode([
                    'pl' => 'Wystawianie pokwitowań lub dowodów wpłaty',
                    'en' => 'Issuing receipts or proof of payment'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1120,
                'name' => json_encode([
                    'pl' => 'Dokonywanie odczytów zużycia mediów na podstawie stanu liczników',
                    'en' => 'Reading utility consumption based on meter readings'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1121,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie ewentualnych nieprawidłowości w działaniu liczników',
                    'en' => 'Reporting any irregularities in meter operation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1122,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o zaległościach w opłatach oraz wysyłanie wezwań do zapłaty',
                    'en' => 'Informing clients about overdue payments and sending reminders for payment'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1123,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie usterek urządzeń pomiarowych',
                    'en' => 'Reporting malfunctions of measuring devices'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1124,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów finansowych z pobranych należności, w tym bilansu dnia, tygodnia, miesiąca',
                    'en' => 'Creating financial reports of collected payments, including daily, weekly, and monthly balances'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1125,
                'name' => json_encode([
                    'pl' => 'Inicjowanie działań windykacyjnych wobec osób, które nie uregulowały zaległych należności, zgodnie z procedurami firmy',
                    'en' => 'Initiating debt collection actions for clients who have not settled overdue payments, according to company procedures'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1126,
                'name' => json_encode([
                    'pl' => 'Weryfikacja zgodności stanu liczników z poprzednimi odczytami oraz analiza różnic w zużyciu',
                    'en' => 'Verifying meter readings with previous records and analyzing differences in consumption'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1127,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie nietypowych odczytów',
                    'en' => 'Reporting unusual readings'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1128,
                'name' => json_encode([
                    'pl' => 'Dbanie o konserwację i sprawność narzędzi niezbędnych do pracy w terenie',
                    'en' => 'Maintaining and ensuring the proper functioning of tools needed for fieldwork'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $DORADCAKLIENTA = [
            [
                'id' => 1129,
                'name' => json_encode([
                    'pl' => 'Bezpośrednia obsługa klientów',
                    'en' => 'Direct customer service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1130,
                'name' => json_encode([
                    'pl' => 'Budowanie relacji oraz dbanie o satysfakcję klienta',
                    'en' => 'Building relationships and ensuring customer satisfaction'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1131,
                'name' => json_encode([
                    'pl' => 'Prezentowanie i rekomendowanie produktów lub usług zgodnych z potrzebami klienta',
                    'en' => 'Presenting and recommending products or services that match customer needs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1132,
                'name' => json_encode([
                    'pl' => 'Udzielanie szczegółowych informacji na temat cech, zalet oraz sposobu użycia oferowanych produktów lub usług',
                    'en' => 'Providing detailed information about the features, benefits, and usage of offered products or services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1133,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie ofert do indywidualnych potrzeb klientów, pomaganie w wyborze najbardziej odpowiednich rozwiązań',
                    'en' => 'Customizing offers to meet individual customer needs and assisting in choosing the most suitable solutions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1134,
                'name' => json_encode([
                    'pl' => 'Sprzedaż produktów lub usług',
                    'en' => 'Selling products or services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1135,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie reklamacji i zwrotów produktów oraz rozwiązywanie problemów związanych z niezadowoleniem klientów',
                    'en' => 'Handling product returns and complaints and resolving customer dissatisfaction issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1136,
                'name' => json_encode([
                    'pl' => 'Informowanie o nowych produktach, usługach, promocjach i ofertach specjalnych, które mogą zainteresować klientów',
                    'en' => 'Informing customers about new products, services, promotions, and special offers that may interest them'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1137,
                'name' => json_encode([
                    'pl' => 'Monitorowanie poziomu zadowolenia klientów i wdrażanie działań naprawczych w przypadku zgłoszenia problemów',
                    'en' => 'Monitoring customer satisfaction and implementing corrective actions when issues are reported'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1138,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o dostępnych programach lojalnościowych i ich korzyściach',
                    'en' => 'Informing customers about available loyalty programs and their benefits'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1139,
                'name' => json_encode([
                    'pl' => 'Zbieranie i analizowanie informacji na temat potrzeb klientów, preferencji i oczekiwań',
                    'en' => 'Collecting and analyzing information about customer needs, preferences, and expectations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1140,
                'name' => json_encode([
                    'pl' => 'Realizowanie planów sprzedażowych ustalonych przez firmę',
                    'en' => 'Executing sales plans established by the company'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1141,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wyników sprzedaży oraz raportowanie ich do przełożonych',
                    'en' => 'Monitoring sales performance and reporting results to supervisors'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1142,
                'name' => json_encode([
                    'pl' => 'Aktywne działanie na rzecz zwiększenia sprzedaży, w tym poprzez upselling i cross-selling',
                    'en' => 'Actively working to increase sales, including upselling and cross-selling'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1143,
                'name' => json_encode([
                    'pl' => 'Obsługa systemów CRM',
                    'en' => 'Managing CRM systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1144,
                'name' => json_encode([
                    'pl' => 'Ścisła współpraca z działem sprzedaży, marketingu, logistyki i księgowości',
                    'en' => 'Collaborating closely with sales, marketing, logistics, and accounting departments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1145,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów sprzedażowych i przekazywanie ich do przełożonych',
                    'en' => 'Preparing sales reports and submitting them to supervisors'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1146,
                'name' => json_encode([
                    'pl' => 'Poszukiwanie nowych możliwości sprzedażowych i budowanie bazy nowych klientów',
                    'en' => 'Seeking new sales opportunities and building a base of new clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];

        $EKSPEDIENTWPUNKCIEUSŁUGOWYM = [
            [
                'id' => 1147,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie zleceń na usługi oferowane przez punkt',
                    'en' => 'Accepting orders for services offered by the service point'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1148,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o dostępnych usługach, ich kosztach, czasie realizacji oraz wszelkich dodatkowych opcjach',
                    'en' => 'Informing customers about available services, their costs, processing time, and additional options'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1149,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie zamówień',
                    'en' => 'Registering orders'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1150,
                'name' => json_encode([
                    'pl' => 'Monitorowanie postępu realizacji usług oraz informowanie klientów o ewentualnych opóźnieniach',
                    'en' => 'Monitoring the progress of services and informing customers about any delays'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1151,
                'name' => json_encode([
                    'pl' => 'Koordynowanie zleceń wewnątrz punktu usługowego',
                    'en' => 'Coordinating orders within the service point'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1152,
                'name' => json_encode([
                    'pl' => 'Wydawanie gotowych zamówień klientom oraz sprawdzanie zgodności z zamówieniem',
                    'en' => 'Issuing completed orders to customers and checking for order accuracy'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1153,
                'name' => json_encode([
                    'pl' => 'Obsługa kasy fiskalnej',
                    'en' => 'Operating the cash register'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1154,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie reklamacji od klientów w przypadku niewłaściwie wykonanej usługi',
                    'en' => 'Accepting customer complaints in case of improperly executed services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1155,
                'name' => json_encode([
                    'pl' => 'Udzielanie porad i rekomendacji dotyczących oferowanych usług, materiałów, technologii lub technik',
                    'en' => 'Providing advice and recommendations regarding offered services, materials, technologies, or techniques'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1156,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zapasów materiałów i produktów potrzebnych do świadczenia usług',
                    'en' => 'Monitoring stock levels of materials and products needed for service provision'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1157,
                'name' => json_encode([
                    'pl' => 'Zarządzanie priorytetami zleceń, szczególnie w przypadku pilnych zamówień',
                    'en' => 'Managing order priorities, especially for urgent requests'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1158,
                'name' => json_encode([
                    'pl' => 'Udzielanie odpowiedzi na zapytania klientów w punkcie, przez telefon lub online (e-mail, media społecznościowe)',
                    'en' => 'Responding to customer inquiries in person, over the phone, or online (email, social media)'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1159,
                'name' => json_encode([
                    'pl' => 'Informowanie przełożonych o ewentualnych problemach związanych z realizacją usług lub obsługą klienta',
                    'en' => 'Reporting any issues related to service execution or customer service to supervisors'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1160,
                'name' => json_encode([
                    'pl' => 'Obsługa urządzeń używanych w punkcie usługowym',
                    'en' => 'Operating equipment used at the service point'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1161,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie usterek technicznych i dbanie o prawidłowe działanie narzędzi oraz sprzętu',
                    'en' => 'Reporting technical faults and ensuring proper functioning of tools and equipment'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1162,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach produktowych i usługowych organizowanych przez firmę',
                    'en' => 'Participating in product and service training organized by the company'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1163,
                'name' => json_encode([
                    'pl' => 'Budowanie długotrwałych relacji z klientami, dbanie o lojalność i pozytywne doświadczenia',
                    'en' => 'Building long-term relationships with customers, ensuring loyalty and positive experiences'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $HOSTESSA = [
            [
                'id' => 1164,
                'name' => json_encode([
                    'pl' => 'Prezentowanie i promowanie marki na różnego rodzaju wydarzeniach',
                    'en' => 'Presenting and promoting the brand at various events'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1165,
                'name' => json_encode([
                    'pl' => 'Występowanie jako twarz lub ambasador marki',
                    'en' => 'Acting as the face or ambassador of the brand'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1166,
                'name' => json_encode([
                    'pl' => 'Budowanie pozytywnego wizerunku firmy',
                    'en' => 'Building a positive image of the company'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1167,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o wydarzeniu, programie oraz kierowanie gości do odpowiednich stref lub osób',
                    'en' => 'Providing information about the event, program, and directing guests to the appropriate areas or people'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1168,
                'name' => json_encode([
                    'pl' => 'Przedstawianie i promowanie produktów lub usług firmy w trakcie eventów, prezentacji czy akcji promocyjnych',
                    'en' => 'Presenting and promoting company products or services during events, presentations, or promotional activities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1169,
                'name' => json_encode([
                    'pl' => 'Zachęcanie klientów do skorzystania z oferty poprzez rozdawanie próbek, ulotek, materiałów reklamowych',
                    'en' => 'Encouraging customers to take advantage of the offer by distributing samples, flyers, and promotional materials'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1170,
                'name' => json_encode([
                    'pl' => 'Demonstracja działania produktów',
                    'en' => 'Demonstrating product functionality'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1171,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie działania produktów oraz korzyści związanych z ich użytkowaniem',
                    'en' => 'Explaining product functionality and the benefits of their use'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1172,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji o promocjach, zniżkach lub ofertach specjalnych, jeśli są dostępne w trakcie wydarzenia',
                    'en' => 'Providing information about promotions, discounts, or special offers available during the event'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1173,
                'name' => json_encode([
                    'pl' => 'Współpraca z organizatorami wydarzeń oraz innymi pracownikami',
                    'en' => 'Cooperating with event organizers and other employees'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1174,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie porządku i estetyki na stoisku promocyjnym, dbałość o czystość i schludność miejsca pracy',
                    'en' => 'Maintaining order and aesthetics at the promotional booth, ensuring cleanliness and tidiness of the workspace'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1175,
                'name' => json_encode([
                    'pl' => 'Rozdawanie ulotek, broszur, katalogów, próbek produktów oraz innych materiałów marketingowych związanych z firmą lub produktem',
                    'en' => 'Distributing leaflets, brochures, catalogs, product samples, and other marketing materials related to the company or product'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1176,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach produktowych organizowanych przez firmę w celu uzyskania dogłębnej wiedzy na temat promowanych produktów lub usług',
                    'en' => 'Participating in product training sessions organized by the company to gain in-depth knowledge of promoted products or services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1177,
                'name' => json_encode([
                    'pl' => 'Podsumowanie wyników eventu i dostarczanie sugestii dotyczących ulepszeń przyszłych akcji promocyjnych',
                    'en' => 'Summarizing event results and providing suggestions for improvements in future promotional activities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $POZOSTALIKASJERZYBANKOWIIPOKREWNI = [
            [
                'id' => 1178,
                'name' => json_encode([
                    'pl' => 'Pobieranie opłat skarbowych od obywateli i przedsiębiorstw',
                    'en' => 'Collecting tax payments from citizens and businesses'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1179,
                'name' => json_encode([
                    'pl' => 'Rozliczanie wpływów z opłat i podatków zgodnie z obowiązującymi przepisami prawnymi',
                    'en' => 'Reconciling tax and fee revenues according to applicable legal regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1180,
                'name' => json_encode([
                    'pl' => 'Wydawanie pokwitowań i dokumentów płatniczych za dokonane opłaty',
                    'en' => 'Issuing receipts and payment documents for completed transactions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1181,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów finansowych dla urzędów skarbowych, gmin lub innych instytucji publicznych',
                    'en' => 'Preparing financial reports for tax offices, municipalities, or other public institutions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1182,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie składek ubezpieczeniowych od klientów indywidualnych oraz firm',
                    'en' => 'Accepting insurance premiums from individual and corporate clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1183,
                'name' => json_encode([
                    'pl' => 'Rozliczanie wpłat za polisy',
                    'en' => 'Reconciling payments for insurance policies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1184,
                'name' => json_encode([
                    'pl' => 'Wydawanie dokumentów potwierdzających ubezpieczenie',
                    'en' => 'Issuing insurance confirmation documents'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1185,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o warunkach ubezpieczenia oraz procedurach płatności',
                    'en' => 'Providing information on insurance terms and payment procedures'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1186,
                'name' => json_encode([
                    'pl' => 'Obsługa klientów w zakresie przyjmowania wpłat oszczędnościowych i spłat pożyczek',
                    'en' => 'Assisting customers with savings deposits and loan repayments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1187,
                'name' => json_encode([
                    'pl' => 'Zakładanie lokat i rachunków oszczędnościowych dla członków SKOK',
                    'en' => 'Opening savings accounts and deposits for credit union members'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1188,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o produktach finansowych',
                    'en' => 'Providing information about financial products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1189,
                'name' => json_encode([
                    'pl' => 'Kupno i sprzedaż walut po aktualnych kursach, zgodnie z obowiązującymi przepisami',
                    'en' => 'Buying and selling currencies at current rates in accordance with regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1190,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie i wydawanie środków pieniężnych w różnych walutach',
                    'en' => 'Receiving and dispensing cash in various currencies'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1191,
                'name' => json_encode([
                    'pl' => 'Weryfikacja autentyczności banknotów oraz zapobieganie przyjmowaniu fałszywych pieniędzy',
                    'en' => 'Verifying the authenticity of banknotes and preventing the acceptance of counterfeit money'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1192,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o kursach walut oraz przewidywanych zmianach',
                    'en' => 'Informing customers about exchange rates and expected changes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1193,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji operacji wymiany walut oraz przygotowywanie dziennych raportów z transakcji',
                    'en' => 'Recording currency exchange operations and preparing daily transaction reports'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1194,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów dotyczących przeciwdziałania praniu pieniędzy',
                    'en' => 'Complying with anti-money laundering regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1195,
                'name' => json_encode([
                    'pl' => 'Sprzedaż losów loteryjnych',
                    'en' => 'Selling lottery tickets'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1196,
                'name' => json_encode([
                    'pl' => 'Wydawanie biletów na gry losowe oraz kontrola zgodności transakcji z regulaminem loterii',
                    'en' => 'Issuing tickets for games of chance and ensuring transaction compliance with lottery regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1197,
                'name' => json_encode([
                    'pl' => 'Wypłacanie nagród gotówkowych lub voucherów, zgodnie z zasadami loterii',
                    'en' => 'Disbursing cash prizes or vouchers according to lottery rules'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1198,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów sprzedażowych i przekazywanie ich organizatorom loterii',
                    'en' => 'Preparing sales reports and submitting them to lottery organizers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1199,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów dotyczących organizacji gier losowych i regulacji podatkowych związanych z wypłatą wygranych',
                    'en' => 'Complying with regulations for organizing games of chance and tax rules related to prize payouts'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1200,
                'name' => json_encode([
                    'pl' => 'Obsługa wpłat związanych z umowami leasingowymi, takich jak raty leasingowe i opłaty dodatkowe',
                    'en' => 'Handling payments related to leasing agreements, including lease installments and additional fees'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1201,
                'name' => json_encode([
                    'pl' => 'Rozliczanie płatności klientów i przekazywanie informacji do działu księgowości',
                    'en' => 'Reconciling customer payments and forwarding information to the accounting department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1202,
                'name' => json_encode([
                    'pl' => 'Weryfikacja zgodności umów leasingowych z dokonanymi płatnościami',
                    'en' => 'Verifying the compliance of lease agreements with completed payments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1203,
                'name' => json_encode([
                    'pl' => 'Kontrolowanie terminowości spłat i przypominanie klientom o zaległych należnościach',
                    'en' => 'Monitoring payment deadlines and reminding customers of overdue payments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1204,
                'name' => json_encode([
                    'pl' => 'Wymiana gotówki na żetony oraz odwrotnie dla graczy w kasynach',
                    'en' => 'Exchanging cash for tokens and vice versa for casino players'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1205,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji transakcji związanych z grami hazardowymi',
                    'en' => 'Recording transactions related to gambling activities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1206,
                'name' => json_encode([
                    'pl' => 'Rozliczanie wygranych i przekazywanie środków graczom zgodnie z zasadami kasyna',
                    'en' => 'Reconciliating winnings and distributing funds to players according to casino rules'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1207,
                'name' => json_encode([
                    'pl' => 'Weryfikacja tożsamości klientów',
                    'en' => 'Verifying customer identity'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1208,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie opłat za usługi pocztowe, takie jak wysyłka paczek, listów, przesyłek kurierskich',
                    'en' => 'Accepting payments for postal services, such as parcel, letter, and courier deliveries'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1209,
                'name' => json_encode([
                    'pl' => 'Sprzedaż usług finansowych',
                    'en' => 'Selling financial services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1210,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie opłat sądowych za różne usługi, takie jak wnoszenie pozwów, zażaleń czy skarg',
                    'en' => 'Accepting court fees for various services, such as filing complaints, appeals, or grievances'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1211,
                'name' => json_encode([
                    'pl' => 'Sprzedaż biletów na przewozy autokarowe, lotnicze, kolejowe lub inne',
                    'en' => 'Selling tickets for bus, airline, train, or other transport services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1212,
                'name' => json_encode([
                    'pl' => 'Obsługa systemów rezerwacyjnych i zarządzanie sprzedażą miejsc w środkach transportu',
                    'en' => 'Handling reservation systems and managing seat sales in transportation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1213,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o dostępnych połączeniach, taryfach i promocjach oraz rozwiązywanie problemów związanych z biletami',
                    'en' => 'Providing information about available routes, fares, and promotions, and resolving ticket-related issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1214,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów sprzedaży i przesyłanie ich do działu finansowego firmy transportowej',
                    'en' => 'Preparing sales reports and sending them to the finance department of the transport company'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1215,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie opłat za usługi telekomunikacyjne, takie jak abonamenty, doładowania kart pre-paid, zakup sprzętu',
                    'en' => 'Accepting payments for telecommunications services, such as subscriptions, prepaid card top-ups, and equipment purchases'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1216,
                'name' => json_encode([
                    'pl' => 'Sprzedaż usług dodatkowych, takich jak ubezpieczenia sprzętu, pakiety telewizji kablowej, internetowej itp.',
                    'en' => 'Selling additional services, such as equipment insurance, cable TV packages, internet services, etc.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1217,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie płatności za wycieczki, bilety lotnicze, hotele oraz inne usługi turystyczne',
                    'en' => 'Accepting payments for tours, flight tickets, hotels, and other tourist services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1218,
                'name' => json_encode([
                    'pl' => 'Wydawanie faktur, potwierdzeń rezerwacji i biletów',
                    'en' => 'Issuing invoices, reservation confirmations, and tickets'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1219,
                'name' => json_encode([
                    'pl' => 'Rozliczanie opłat związanych z usługami turystycznymi, w tym zaliczek i pełnych płatności',
                    'en' => 'Reconciliating payments related to tourist services, including deposits and full payments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1220,
                'name' => json_encode([
                    'pl' => 'Weryfikacja rezerwacji i zarządzanie transakcjami w systemach sprzedaży usług turystycznych',
                    'en' => 'Verifying reservations and managing transactions in tourist service sales systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1221,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji sprzedaży oraz przygotowywanie raportów finansowych dla biura podróży',
                    'en' => 'Recording sales and preparing financial reports for the travel agency'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIKINSTYTUCJIPOŻYCZKOWEJ = [
            [
                'id' => 1222,
                'name' => json_encode([
                    'pl' => 'Bezpośrednia obsługa klientów w placówkach stacjonarnych lub online, w tym przyjmowanie wniosków o pożyczkę',
                    'en' => 'Direct customer service at physical branches or online, including loan application acceptance'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1223,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o dostępnych produktach finansowych',
                    'en' => 'Providing information about available financial products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1224,
                'name' => json_encode([
                    'pl' => 'Pomoc w wypełnianiu wniosków o pożyczkę oraz wyjaśnianie warunków umowy pożyczkowej',
                    'en' => 'Assisting with loan applications and explaining loan agreement terms'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1225,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na pytania klientów dotyczące statusu pożyczek, spłat i innych związanych zagadnień',
                    'en' => 'Responding to customer inquiries about loan status, repayments, and related issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1226,
                'name' => json_encode([
                    'pl' => 'Weryfikacja zdolności kredytowej klientów',
                    'en' => 'Verifying customer creditworthiness'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1227,
                'name' => json_encode([
                    'pl' => 'Ocena ryzyka kredytowego klienta',
                    'en' => 'Assessing customer credit risk'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1228,
                'name' => json_encode([
                    'pl' => 'Obliczanie wskaźników zdolności kredytowej i ocena ryzyka niewypłacalności',
                    'en' => 'Calculating creditworthiness indicators and assessing insolvency risk'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1229,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie rekomendacji dla działu decyzyjnego',
                    'en' => 'Preparing recommendations for the decision-making department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1230,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie wniosków pożyczkowych i wprowadzanie danych do systemów informatycznych instytucji',
                    'en' => 'Receiving loan applications and entering data into the institution\'s information systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1231,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie poprawności i kompletności dokumentów, takich jak zaświadczenia o dochodach, dokumenty tożsamości, umowy o pracę',
                    'en' => 'Checking the accuracy and completeness of documents, such as income certificates, identity documents, and employment contracts'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1232,
                'name' => json_encode([
                    'pl' => 'Przekazywanie wniosków do działu weryfikacji lub działu kredytowego, jeśli jest wymagana dalsza analiza',
                    'en' => 'Forwarding applications to the verification or credit department if further analysis is required'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1233,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie umów pożyczkowych zgodnie z polityką firmy i obowiązującymi przepisami',
                    'en' => 'Preparing loan agreements according to company policy and regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1234,
                'name' => json_encode([
                    'pl' => 'Zawieranie umów z klientami, w tym podpisywanie umów pożyczkowych zarówno w formie papierowej, jak i elektronicznej',
                    'en' => 'Concluding contracts with clients, including signing loan agreements both in paper and electronic forms'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1235,
                'name' => json_encode([
                    'pl' => 'Zarządzanie procesem przekazywania środków zgodnie z wewnętrznymi procedurami instytucji',
                    'en' => 'Managing the fund disbursement process according to the institution\'s internal procedures'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1236,
                'name' => json_encode([
                    'pl' => 'Monitorowanie kont pożyczkowych i informowanie klientów o saldach, odsetkach, dodatkowych opłatach itp.',
                    'en' => 'Monitoring loan accounts and informing clients about balances, interest, additional fees, etc.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1237,
                'name' => json_encode([
                    'pl' => 'Podejmowanie działań prewencyjnych, takich jak przypomnienia o terminach płatności, wezwania do zapłaty oraz negocjacje w sprawie spłat',
                    'en' => 'Taking preventive actions, such as payment reminders, payment requests, and repayment negotiations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1238,
                'name' => json_encode([
                    'pl' => 'Zarządzanie procedurami windykacyjnymi, w tym współpraca z firmami windykacyjnymi w przypadku dłuższych opóźnień',
                    'en' => 'Managing collection procedures, including collaborating with debt collection agencies in case of extended delays'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1239,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentów do postępowania sądowego w przypadku konieczności dochodzenia należności na drodze prawnej',
                    'en' => 'Preparing legal documents for court proceedings when pursuing claims through legal means is necessary'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1240,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie obowiązujących przepisów prawnych związanych z udzielaniem pożyczek, w tym ustawy o kredycie konsumenckim oraz regulacji dotyczących ochrony danych osobowych (RODO)',
                    'en' => 'Complying with current legal regulations related to lending, including the Consumer Credit Act and GDPR'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1241,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem księgowości',
                    'en' => 'Collaborating with the accounting department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1242,
                'name' => json_encode([
                    'pl' => 'Koordynacja z działem prawnym',
                    'en' => 'Coordinating with the legal department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1243,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem IT',
                    'en' => 'Collaborating with the IT department'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIKLOMBARDU=[
            [
                'id' => 1244,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie przedmiotów pod zastaw',
                    'en' => 'Accepting items for pawn'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1245,
                'name' => json_encode([
                    'pl' => 'Dokładna ocena wartości przedmiotu zastawu',
                    'en' => 'Accurate assessment of the pawned item\'s value'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1246,
                'name' => json_encode([
                    'pl' => 'Określanie warunków pożyczki, w tym kwoty pożyczki, okresu spłaty oraz oprocentowania',
                    'en' => 'Setting loan terms, including loan amount, repayment period, and interest rate'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1247,
                'name' => json_encode([
                    'pl' => 'Przygotowanie umowy pożyczkowej, wyjaśnianie klientom warunków umowy i zasad spłaty pożyczki',
                    'en' => 'Preparing the loan agreement and explaining the terms and repayment conditions to clients'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1248,
                'name' => json_encode([
                    'pl' => 'Wypłacanie środków finansowych klientom na podstawie podpisanej umowy pod zastaw',
                    'en' => 'Disbursing funds to clients based on the signed pawn agreement'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1249,
                'name' => json_encode([
                    'pl' => 'Dokładna wycena przedmiotów przynoszonych do lombardu',
                    'en' => 'Accurate appraisal of items brought to the pawn shop'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1250,
                'name' => json_encode([
                    'pl' => 'Identyfikacja autentyczności i jakości przedmiotów',
                    'en' => 'Identifying the authenticity and quality of items'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1251,
                'name' => json_encode([
                    'pl' => 'Korzystanie z narzędzi i urządzeń do testowania wartości przedmiotów',
                    'en' => 'Using tools and devices to test the value of items'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1252,
                'name' => json_encode([
                    'pl' => 'Śledzenie aktualnych cen rynkowych',
                    'en' => 'Monitoring current market prices'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1253,
                'name' => json_encode([
                    'pl' => 'Bezpośredni kontakt z klientami, przyjmowanie zastawów i udzielanie szczegółowych informacji o zasadach pożyczek pod zastaw',
                    'en' => 'Direct customer interaction, accepting pawns, and providing detailed information about pawn loan terms'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1254,
                'name' => json_encode([
                    'pl' => 'Pomoc w negocjacjach, jeśli klient chce ustalić inną wartość pożyczki lub przedłużyć termin spłaty',
                    'en' => 'Assisting in negotiations if the client wishes to set a different loan value or extend the repayment term'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1255,
                'name' => json_encode([
                    'pl' => 'Zabezpieczanie przedmiotów zastawionych w odpowiednich warunkach',
                    'en' => 'Securing pawned items in appropriate conditions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1256,
                'name' => json_encode([
                    'pl' => 'Śledzenie terminów spłat pożyczek i przypominanie klientom o nadchodzących terminach',
                    'en' => 'Tracking loan repayment deadlines and reminding clients of upcoming dates'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1257,
                'name' => json_encode([
                    'pl' => 'Obsługa wykupów przedmiotów zastawionych, w tym rozliczanie pożyczek i przekazywanie przedmiotów klientom po spłacie',
                    'en' => 'Handling the redemption of pawned items, including loan settlement and returning items to clients upon repayment'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1258,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie przedmiotów zastawionych do sprzedaży, jeśli klient nie spłacił pożyczki w określonym terminie',
                    'en' => 'Preparing pawned items for sale if the client fails to repay the loan within the specified time'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1259,
                'name' => json_encode([
                    'pl' => 'Wystawianie zastawionych przedmiotów na sprzedaż w lombardzie lub online',
                    'en' => 'Listing pawned items for sale in the pawn shop or online'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1260,
                'name' => json_encode([
                    'pl' => 'Sprzedaż przedmiotów i rozliczanie transakcji, w tym obsługa płatności gotówkowych i bezgotówkowych',
                    'en' => 'Selling items and reconciling transactions, including handling cash and non-cash payments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1261,
                'name' => json_encode([
                    'pl' => 'Weryfikacja tożsamości klientów w celu zapobiegania oszustwom i kradzieżom',
                    'en' => 'Verifying customer identity to prevent fraud and theft'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1262,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności działań lombardu z przepisami dotyczącymi przeciwdziałania praniu pieniędzy i raportowanie podejrzanych transakcji',
                    'en' => 'Ensuring compliance with anti-money laundering regulations and reporting suspicious transactions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1263,
                'name' => json_encode([
                    'pl' => 'Ostateczne rozwiązania w przypadku dłużników, w tym egzekucja zabezpieczonych przedmiotów i ich sprzedaż',
                    'en' => 'Finalizing solutions for debtors, including seizing and selling secured items'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1264,
                'name' => json_encode([
                    'pl' => 'Sporządzanie codziennych raportów finansowych dotyczących udzielonych pożyczek, spłat oraz sprzedaży przedmiotów',
                    'en' => 'Preparing daily financial reports on loans granted, repayments, and item sales'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1265,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rejestrów przedmiotów zastawionych, w tym daty przyjęcia, terminu spłaty oraz statusu przedmiotu',
                    'en' => 'Maintaining records of pawned items, including the date of acceptance, repayment deadline, and item status'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1266,
                'name' => json_encode([
                    'pl' => 'Promowanie usług lombardu poprzez działania marketingowe, reklamy, akcje promocyjne',
                    'en' => 'Promoting pawn shop services through marketing activities, advertisements, and promotional campaigns'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1267,
                'name' => json_encode([
                    'pl' => 'Zarządzanie wizerunkiem lombardu, dbanie o to, by klienci postrzegali instytucję jako bezpieczną i godną zaufania',
                    'en' => 'Managing the pawn shop\'s image, ensuring clients perceive the institution as safe and trustworthy'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1268,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach branżowych, dotyczących nowych technik wyceny, zarządzania pożyczkami pod zastaw oraz przestrzegania przepisów prawa',
                    'en' => 'Participating in industry training on new appraisal techniques, pawn loan management, and legal compliance'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $SPRZEDAWCANATARGOWISKUBAZARZE=[
            [
                'id' => 1269,
                'name' => json_encode([
                    'pl' => 'Organizacja i rozstawienie stoiska, w tym rozłożenie towarów w sposób atrakcyjny dla klientów',
                    'en' => 'Organizing and setting up the stall, including arranging goods attractively for customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1270,
                'name' => json_encode([
                    'pl' => 'Etykietowanie produktów',
                    'en' => 'Labeling products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1271,
                'name' => json_encode([
                    'pl' => 'Dbanie o porządek i estetykę stoiska',
                    'en' => 'Maintaining cleanliness and aesthetics of the stall'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1272,
                'name' => json_encode([
                    'pl' => 'Bezpośrednia obsługa klientów',
                    'en' => 'Direct customer service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1273,
                'name' => json_encode([
                    'pl' => 'Negocjowanie cen',
                    'en' => 'Negotiating prices'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1274,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o produktach',
                    'en' => 'Providing information about products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1275,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na pytania klientów i rozwiązywanie ewentualnych problemów',
                    'en' => 'Answering customer questions and resolving potential issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1276,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie odpowiedniej ilości towaru na stoisku',
                    'en' => 'Maintaining an adequate amount of stock at the stall'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1277,
                'name' => json_encode([
                    'pl' => 'Kontrola jakości produktów',
                    'en' => 'Quality control of products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1278,
                'name' => json_encode([
                    'pl' => 'Przechowywanie towaru w odpowiednich warunkach',
                    'en' => 'Storing goods under appropriate conditions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1279,
                'name' => json_encode([
                    'pl' => 'Inwentaryzacja towaru po zakończeniu dnia pracy',
                    'en' => 'Inventory count of goods after the end of the workday'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1280,
                'name' => json_encode([
                    'pl' => 'Obsługa kasy fiskalnej',
                    'en' => 'Operating the cash register'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1281,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów sanitarnych',
                    'en' => 'Adhering to sanitary regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1282,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie lokalnych przepisów handlowych',
                    'en' => 'Complying with local trade regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1283,
                'name' => json_encode([
                    'pl' => 'Segregacja odpadów oraz dbanie o odpowiednie ich usuwanie zgodnie z lokalnymi przepisami dotyczącymi ochrony środowiska',
                    'en' => 'Waste segregation and ensuring proper disposal according to local environmental protection regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1284,
                'name' => json_encode([
                    'pl' => 'Organizacja dostaw towaru',
                    'en' => 'Organizing goods deliveries'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1285,
                'name' => json_encode([
                    'pl' => 'Dokonywanie opłat targowych',
                    'en' => 'Paying market fees'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1286,
                'name' => json_encode([
                    'pl' => 'Dostosowanie czasu pracy do sezonowości lub okoliczności',
                    'en' => 'Adjusting work hours based on seasonality or circumstances'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $SPRZEDAWCAOBWOŹNYZSAMOCHODUVANSELLER = [
            [
                'id' => 1287,
                'name' => json_encode([
                    'pl' => 'Załadunek towaru do samochodu w odpowiednich warunkach',
                    'en' => 'Loading goods into the vehicle under appropriate conditions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1288,
                'name' => json_encode([
                    'pl' => 'Sprawdzenie ilości i jakości towarów przed wyruszeniem w trasę',
                    'en' => 'Checking the quantity and quality of goods before setting out on the route'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1289,
                'name' => json_encode([
                    'pl' => 'Etykietowanie towarów',
                    'en' => 'Labeling goods'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1290,
                'name' => json_encode([
                    'pl' => 'Planowanie trasy sprzedaży',
                    'en' => 'Planning the sales route'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1291,
                'name' => json_encode([
                    'pl' => 'Dostosowanie godzin pracy i tras do potrzeb klientów oraz lokalnych regulacji dotyczących handlu obwoźnego',
                    'en' => 'Adjusting work hours and routes according to customer needs and local regulations for mobile trading'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1292,
                'name' => json_encode([
                    'pl' => 'Bezpośrednia obsługa klientów – prezentowanie towarów, informowanie o cenach i cechach produktów',
                    'en' => 'Direct customer service – presenting goods, providing information on prices and product features'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1293,
                'name' => json_encode([
                    'pl' => 'Negocjowanie cen z klientami, szczególnie w przypadku większych zakupów',
                    'en' => 'Negotiating prices with customers, especially for larger purchases'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1294,
                'name' => json_encode([
                    'pl' => 'Rozstawienie mobilnego stoiska przy samochodzie',
                    'en' => 'Setting up a mobile stall by the vehicle'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1295,
                'name' => json_encode([
                    'pl' => 'Dbanie o estetykę i porządek w miejscu sprzedaży',
                    'en' => 'Maintaining aesthetics and order at the sales location'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1296,
                'name' => json_encode([
                    'pl' => 'Obsługa kasy fiskalnej',
                    'en' => 'Operating the cash register'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1297,
                'name' => json_encode([
                    'pl' => 'Kontrola jakości towaru podczas sprzedaży, w tym usuwanie produktów niespełniających norm jakościowych',
                    'en' => 'Quality control of goods during sales, including removing products that do not meet quality standards'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1298,
                'name' => json_encode([
                    'pl' => 'Uzupełnianie towaru w miarę jego sprzedaży',
                    'en' => 'Replenishing stock as items are sold'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1299,
                'name' => json_encode([
                    'pl' => 'Regularna konserwacja i przeglądy techniczne samochodu',
                    'en' => 'Regular maintenance and technical inspections of the vehicle'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1300,
                'name' => json_encode([
                    'pl' => 'Segregacja odpadów i dbanie o porządek wokół stoiska, zarówno podczas handlu, jak i po zakończeniu dnia pracy',
                    'en' => 'Waste segregation and maintaining order around the stall, both during sales and after work hours'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $ULICZNISPRZEDAWCYŻYWNOŚCI=[
            [
                'id' => 1301,
                'name' => json_encode([
                    'pl' => 'Rozstawienie stoiska lub wózka gastronomicznego',
                    'en' => 'Setting up a food stall or cart'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1302,
                'name' => json_encode([
                    'pl' => 'Rozmieszczenie produktów i materiałów potrzebnych do przygotowania dań, dbając o higienę i estetykę stoiska',
                    'en' => 'Arranging products and materials needed for meal preparation, ensuring hygiene and stall aesthetics'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1303,
                'name' => json_encode([
                    'pl' => 'Dbanie o świeżość składników i przygotowywanie posiłków w sposób bezpieczny dla zdrowia',
                    'en' => 'Ensuring ingredient freshness and preparing meals in a health-safe manner'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1304,
                'name' => json_encode([
                    'pl' => 'Odpowiednie przechowywanie żywności, szczególnie produktów łatwo psujących',
                    'en' => 'Proper storage of food, especially perishable items'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1305,
                'name' => json_encode([
                    'pl' => 'Dostosowanie się do preferencji klienta',
                    'en' => 'Adapting to customer preferences'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1306,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na pytania klientów dotyczące menu, np. składników, kaloryczności lub pochodzenia produktów',
                    'en' => 'Answering customer questions about the menu, e.g., ingredients, calories, or product origins'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1307,
                'name' => json_encode([
                    'pl' => 'Odpowiednia segregacja odpadów i utrzymanie czystości wokół stoiska',
                    'en' => 'Proper waste segregation and maintaining cleanliness around the stall'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1308,
                'name' => json_encode([
                    'pl' => 'Monitorowanie poziomu zapasów żywności i materiałów eksploatacyjnych, takich jak jednorazowe opakowania, sztućce, serwetki',
                    'en' => 'Monitoring food inventory and consumables, such as disposable containers, cutlery, and napkins'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1309,
                'name' => json_encode([
                    'pl' => 'Zarządzanie dostawami towaru, współpraca z dostawcami żywności i produktów potrzebnych do codziennej pracy',
                    'en' => 'Managing supplies and collaborating with food and product suppliers for daily operations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1310,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie zamówień na produkty spożywcze',
                    'en' => 'Preparing orders for food products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1311,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie menu do gustów i preferencji klientów w danej lokalizacji',
                    'en' => 'Adapting the menu to the tastes and preferences of customers in a given location'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1312,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie sezonowych zmian w menu',
                    'en' => 'Introducing seasonal changes to the menu'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1313,
                'name' => json_encode([
                    'pl' => 'Śledzenie popularności poszczególnych potraw, aby lepiej dostosować ofertę do preferencji klientów',
                    'en' => 'Tracking the popularity of individual dishes to better tailor the offer to customer preferences'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1314,
                'name' => json_encode([
                    'pl' => 'Elastyczność w pracy, uwzględniając zmieniające się potrzeby rynku i klientów',
                    'en' => 'Flexibility in work, considering changing market and customer needs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $ANTYKWARIUSZ=[
            [
                'id' => 1315,
                'name' => json_encode([
                    'pl' => 'Nabywanie antyków, dzieł sztuki i wartościowych przedmiotów od klientów, kolekcjonerów, innych handlarzy lub na aukcjach',
                    'en' => 'Acquiring antiques, artworks, and valuable items from clients, collectors, other traders, or auctions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1316,
                'name' => json_encode([
                    'pl' => 'Sprzedaż przedmiotów antycznych w sklepie stacjonarnym, przez internet lub na specjalistycznych targach antyków',
                    'en' => 'Selling antiques in a physical store, online, or at specialized antique fairs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1317,
                'name' => json_encode([
                    'pl' => 'Negocjowanie cen podczas transakcji kupna i sprzedaży antyków',
                    'en' => 'Negotiating prices during the purchase and sale of antiques'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1318,
                'name' => json_encode([
                    'pl' => 'Prezentowanie przedmiotów w sposób atrakcyjny dla potencjalnych kupujących',
                    'en' => 'Presenting items in an appealing manner for potential buyers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1319,
                'name' => json_encode([
                    'pl' => 'Ocena wartości antyków',
                    'en' => 'Assessing the value of antiques'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1320,
                'name' => json_encode([
                    'pl' => 'Analizowanie rynku',
                    'en' => 'Market analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1321,
                'name' => json_encode([
                    'pl' => 'Weryfikacja autentyczności przedmiotów, przy użyciu specjalistycznych narzędzi i wiedzy',
                    'en' => 'Verifying the authenticity of items using specialized tools and expertise'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1322,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów wyceny',
                    'en' => 'Preparing appraisal reports'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1323,
                'name' => json_encode([
                    'pl' => 'Badanie historii i pochodzenia przedmiotów',
                    'en' => 'Researching the history and provenance of items'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1324,
                'name' => json_encode([
                    'pl' => 'Analizowanie stylów artystycznych, technik produkcji oraz materiałów użytych do stworzenia antyków',
                    'en' => 'Analyzing artistic styles, production techniques, and materials used in creating antiques'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1325,
                'name' => json_encode([
                    'pl' => 'Katalogowanie przedmiotów',
                    'en' => 'Cataloging items'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1326,
                'name' => json_encode([
                    'pl' => 'Dbanie o stan techniczny antyków, w tym nadzorowanie procesów konserwacji i restauracji',
                    'en' => 'Maintaining the technical condition of antiques, including overseeing conservation and restoration processes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1327,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie drobnych napraw i renowacji',
                    'en' => 'Carrying out minor repairs and restorations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1328,
                'name' => json_encode([
                    'pl' => 'Zabezpieczanie antyków przed uszkodzeniami, działaniem czynników zewnętrznych, takich jak wilgoć, światło słoneczne, temperatura czy szkodniki',
                    'en' => 'Protecting antiques from damage and external factors, such as moisture, sunlight, temperature, or pests'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1329,
                'name' => json_encode([
                    'pl' => 'Magazynowanie antyków w odpowiednich warunkach',
                    'en' => 'Storing antiques under appropriate conditions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1330,
                'name' => json_encode([
                    'pl' => 'Doradzanie klientom w zakresie zakupu antyków',
                    'en' => 'Advising clients on antique purchases'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1331,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji na temat wartości historycznej i artystycznej przedmiotów',
                    'en' => 'Providing information about the historical and artistic value of items'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1332,
                'name' => json_encode([
                    'pl' => 'Ocenianie wartości kolekcji antyków w celach ubezpieczeniowych, sprzedażowych lub darowizn',
                    'en' => 'Appraising antique collections for insurance, sales, or donation purposes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1333,
                'name' => json_encode([
                    'pl' => 'Pomoc w negocjacjach handlowych między klientami i kolekcjonerami',
                    'en' => 'Assisting in trade negotiations between clients and collectors'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1334,
                'name' => json_encode([
                    'pl' => 'Organizowanie ekspozycji antyków',
                    'en' => 'Organizing antique exhibitions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1335,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji towarów, w tym księgowanie przychodów i wydatków związanych z działalnością handlową',
                    'en' => 'Maintaining inventory records, including logging income and expenses related to trade activities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1336,
                'name' => json_encode([
                    'pl' => 'Promocja sklepu antykwarycznego w sieci i na targach',
                    'en' => 'Promoting the antique shop online and at fairs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1337,
                'name' => json_encode([
                    'pl' => 'Współpraca z muzeami, galeriami sztuki i instytucjami kultury',
                    'en' => 'Collaborating with museums, art galleries, and cultural institutions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1338,
                'name' => json_encode([
                    'pl' => 'Uczestniczenie w wydarzeniach branżowych',
                    'en' => 'Participating in industry events'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1339,
                'name' => json_encode([
                    'pl' => 'Konsultowanie się z ekspertami zewnętrznymi',
                    'en' => 'Consulting with external experts'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1340,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie materiałów na wystawy, w tym opisów historycznych, metryk i katalogów',
                    'en' => 'Preparing exhibition materials, including historical descriptions, metrics, and catalogs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1341,
                'name' => json_encode([
                    'pl' => 'Udział w aukcjach antyków',
                    'en' => 'Participating in antique auctions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1342,
                'name' => json_encode([
                    'pl' => 'Śledzenie aukcji międzynarodowych i krajowych',
                    'en' => 'Monitoring international and domestic auctions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1343,
                'name' => json_encode([
                    'pl' => 'Negocjowanie prowizji i warunków sprzedaży z domami aukcyjnymi',
                    'en' => 'Negotiating commissions and sales terms with auction houses'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1344,
                'name' => json_encode([
                    'pl' => 'Prowadzenie dokumentacji zakupów i sprzedaży antyków',
                    'en' => 'Maintaining records of antique purchases and sales'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1345,
                'name' => json_encode([
                    'pl' => 'Zarządzanie bazą danych klientów, kolekcjonerów oraz sprzedawców, aby móc skutecznie prowadzić działania handlowe i marketingowe',
                    'en' => 'Managing a database of clients, collectors, and sellers to effectively conduct trade and marketing activities'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1346,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach i seminariach z zakresu sztuki, antyków, konserwacji i rynku aukcyjnego',
                    'en' => 'Attending training and seminars on art, antiques, conservation, and the auction market'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1347,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów prawa dotyczących obrotu zabytkami, w tym konieczności rejestracji niektórych przedmiotów w odpowiednich instytucjach',
                    'en' => 'Complying with laws concerning the trade of historical artifacts, including registering certain items with the relevant institutions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1348,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad dotyczących przeciwdziałania praniu pieniędzy w obrocie antykami i dziełami sztuki',
                    'en' => 'Adhering to anti-money laundering regulations in the trade of antiques and artworks'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $KIOSKARZ=[
            [
                'id' => 1349,
                'name' => json_encode([
                    'pl' => 'Bezpośrednia obsługa klientów',
                    'en' => 'Direct customer service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1350,
                'name' => json_encode([
                    'pl' => 'Sprzedaż różnorodnych produktów',
                    'en' => 'Selling a variety of products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1351,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o dostępnych produktach, ich cenach, promocjach oraz ewentualnych nowościach w ofercie',
                    'en' => 'Providing information about available products, their prices, promotions, and any new offerings'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1352,
                'name' => json_encode([
                    'pl' => 'Obsługa kasy fiskalnej',
                    'en' => 'Operating the cash register'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1353,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji sprzedaży zgodnie z przepisami fiskalnymi oraz przekazywanie raportów finansowych na koniec dnia pracy',
                    'en' => 'Maintaining sales records according to fiscal regulations and submitting financial reports at the end of the workday'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1354,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie odpowiedniego poziomu zapasów',
                    'en' => 'Maintaining appropriate stock levels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1355,
                'name' => json_encode([
                    'pl' => 'Odbieranie dostaw towaru od hurtowni, dostawców prasowych lub innych dostawców produktów, sprawdzanie zgodności dostarczonych towarów z zamówieniem',
                    'en' => 'Receiving deliveries from wholesalers, press suppliers, or other product providers and verifying the delivered goods against the order'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1356,
                'name' => json_encode([
                    'pl' => 'Eksponowanie towarów w atrakcyjny sposób w witrynie kiosku',
                    'en' => 'Displaying goods attractively in the kiosk window'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1357,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie czystości na stanowisku pracy oraz w kiosku',
                    'en' => 'Maintaining cleanliness at the work station and in the kiosk'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1358,
                'name' => json_encode([
                    'pl' => 'Sprzedaż biletów komunikacji miejskiej, doładowań telefonicznych oraz kart prepaid',
                    'en' => 'Selling public transport tickets, phone top-ups, and prepaid cards'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1359,
                'name' => json_encode([
                    'pl' => 'Obsługa punktu odbioru paczek',
                    'en' => 'Handling the parcel pick-up point'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1360,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie zamówień na prenumeraty czasopism i gazet',
                    'en' => 'Taking orders for magazine and newspaper subscriptions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1361,
                'name' => json_encode([
                    'pl' => 'Zachowanie zgodności z przepisami dotyczącymi ochrony danych osobowych',
                    'en' => 'Ensuring compliance with data protection regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1362,
                'name' => json_encode([
                    'pl' => 'Regularna kontrola dat ważności produktów',
                    'en' => 'Regularly checking product expiration dates'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1363,
                'name' => json_encode([
                    'pl' => 'Zabezpieczenie kiosku po zakończeniu dnia pracy, zamykanie i zabezpieczanie przed włamaniami',
                    'en' => 'Securing the kiosk after the workday, locking and protecting it from break-ins'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $EKSPEDIENTWSTACJIOBSŁUGIPOJAZDÓW = [
            [
                'id' => 1364,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie klientów w stacji obsługi pojazdów',
                    'en' => 'Welcoming clients at the vehicle service station'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1365,
                'name' => json_encode([
                    'pl' => 'Rozpoznawanie potrzeb klientów dotyczących serwisu pojazdu',
                    'en' => 'Identifying customer needs regarding vehicle service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1366,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie zgłoszeń serwisowych',
                    'en' => 'Registering service requests'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1367,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o kosztach usług, przewidywanym czasie realizacji naprawy oraz dostępnych częściach zamiennych',
                    'en' => 'Providing information about service costs, estimated repair time, and available spare parts'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1368,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o stanie prac nad ich pojazdami',
                    'en' => 'Informing clients about the status of work on their vehicles'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1369,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie pojazdów do serwisu, w tym tworzenie zleceń serwisowych i przekazywanie ich do mechaników',
                    'en' => 'Receiving vehicles for service, including creating service orders and forwarding them to mechanics'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1370,
                'name' => json_encode([
                    'pl' => 'Planowanie harmonogramu napraw i serwisów',
                    'en' => 'Planning the repair and service schedule'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1371,
                'name' => json_encode([
                    'pl' => 'Kontrola nad realizacją napraw',
                    'en' => 'Overseeing the execution of repairs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1372,
                'name' => json_encode([
                    'pl' => 'Odbieranie pojazdów po zakończonej naprawie',
                    'en' => 'Receiving vehicles after repair completion'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1373,
                'name' => json_encode([
                    'pl' => 'Doradzanie klientom w zakresie zakupu części zamiennych i akcesoriów samochodowych',
                    'en' => 'Advising clients on purchasing spare parts and car accessories'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1374,
                'name' => json_encode([
                    'pl' => 'Sprzedaż części i akcesoriów, w tym informowanie o ich dostępności, cenach oraz przewidywanym czasie dostawy, jeśli dany towar wymaga zamówienia',
                    'en' => 'Selling parts and accessories, including information on availability, prices, and estimated delivery times if an item needs to be ordered'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1375,
                'name' => json_encode([
                    'pl' => 'Zarządzanie stanem magazynowym części zamiennych, monitorowanie zapasów i zamawianie towarów od dostawców, aby zapewnić ciągłość pracy stacji',
                    'en' => 'Managing the inventory of spare parts, monitoring stock levels, and ordering goods from suppliers to ensure the station\'s continuity'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1376,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji sprzedawanych części i akcesoriów oraz aktualizowanie stanów magazynowych',
                    'en' => 'Maintaining records of sold parts and accessories and updating inventory levels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1377,
                'name' => json_encode([
                    'pl' => 'Wystawianie faktur i rachunków za wykonane usługi oraz zakupione części zamienne',
                    'en' => 'Issuing invoices and receipts for services performed and spare parts purchased'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1378,
                'name' => json_encode([
                    'pl' => 'Zachowanie zgodności z przepisami BHP oraz ochrony środowiska',
                    'en' => 'Ensuring compliance with health and safety (BHP) and environmental regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1379,
                'name' => json_encode([
                    'pl' => 'Dbanie o zgodność z regulacjami dotyczącymi ochrony danych osobowych',
                    'en' => 'Ensuring compliance with data protection regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1380,
                'name' => json_encode([
                    'pl' => 'Organizacja harmonogramu pracy stacji',
                    'en' => 'Organizing the work schedule of the station'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1381,
                'name' => json_encode([
                    'pl' => 'Współpraca z mechanikami i innymi pracownikami stacji w celu zapewnienia efektywności pracy oraz sprawnej obsługi klientów',
                    'en' => 'Cooperating with mechanics and other station staff to ensure work efficiency and smooth customer service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1382,
                'name' => json_encode([
                    'pl' => 'Archiwizowanie dokumentacji serwisowej',
                    'en' => 'Archiving service documentation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1383,
                'name' => json_encode([
                    'pl' => 'Koordynowanie procesu reklamacyjnego, w tym organizowanie napraw gwarancyjnych lub wymiany wadliwych części',
                    'en' => 'Coordinating the complaint process, including arranging warranty repairs or replacement of faulty parts'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1384,
                'name' => json_encode([
                    'pl' => 'Współpraca z dostawcami w zakresie zwrotów lub reklamacji dotyczących zakupionych części i akcesoriów',
                    'en' => 'Collaborating with suppliers regarding returns or complaints about purchased parts and accessories'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1385,
                'name' => json_encode([
                    'pl' => 'Dbanie o czystość i porządek w obszarze obsługi klientów oraz w magazynach części zamiennych',
                    'en' => 'Maintaining cleanliness and order in the customer service area and spare parts warehouses'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1386,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach technicznych i handlowych',
                    'en' => 'Participating in technical and commercial training sessions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1387,
                'name' => json_encode([
                    'pl' => 'Poszerzanie wiedzy o najnowszych produktach i usługach związanych z serwisem samochodowym',
                    'en' => 'Expanding knowledge about the latest products and services related to automotive service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1388,
                'name' => json_encode([
                    'pl' => 'Śledzenie zmian w przepisach dotyczących usług serwisowych, części zamiennych oraz prawa motoryzacyjnego',
                    'en' => 'Monitoring changes in regulations regarding service operations, spare parts, and automotive law'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $LICZARZ=[
            [
                'id' => 1389,
                'name' => json_encode([
                    'pl' => 'Liczenie gotówki',
                    'en' => 'Counting cash'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1390,
                'name' => json_encode([
                    'pl' => 'Dokładna segregacja banknotów i monet według nominałów',
                    'en' => 'Careful sorting of banknotes and coins by denomination'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1391,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie autentyczności pieniędzy, w tym używanie maszyn do wykrywania fałszywych banknotów lub ręczne sprawdzanie cech zabezpieczających',
                    'en' => 'Verifying the authenticity of money, including using machines to detect counterfeit banknotes or manually checking security features'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1392,
                'name' => json_encode([
                    'pl' => 'Wydawanie bilonu i banknotów w odpowiednich ilościach',
                    'en' => 'Disbursing coins and banknotes in the correct amounts'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1393,
                'name' => json_encode([
                    'pl' => 'Liczenie dokumentów, faktur, rachunków, biletów czy kuponów',
                    'en' => 'Counting documents, invoices, receipts, tickets, or coupons'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1394,
                'name' => json_encode([
                    'pl' => 'Sortowanie dokumentów według określonych kryteriów',
                    'en' => 'Sorting documents according to specified criteria'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1395,
                'name' => json_encode([
                    'pl' => 'Weryfikacja kompletności zestawów dokumentów',
                    'en' => 'Verifying the completeness of document sets'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1396,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji liczenia, zapisywanie wyników w specjalnych formularzach, arkuszach kalkulacyjnych lub systemach informatycznych',
                    'en' => 'Keeping a record of counts, logging results in special forms, spreadsheets, or information systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1397,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji o nieprawidłowościach w liczeniu, takich jak niedobory lub nadwyżki, do odpowiednich działów w firmie',
                    'en' => 'Reporting discrepancies in counting, such as shortages or surpluses, to relevant departments within the company'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1398,
                'name' => json_encode([
                    'pl' => 'Liczenie i sortowanie towarów',
                    'en' => 'Counting and sorting goods'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1399,
                'name' => json_encode([
                    'pl' => 'Oznaczanie towarów i kontrola ich jakości',
                    'en' => 'Labeling goods and inspecting their quality'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1400,
                'name' => json_encode([
                    'pl' => 'Obsługa automatycznych liczarek',
                    'en' => 'Operating automatic counters'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1401,
                'name' => json_encode([
                    'pl' => 'Kalibracja i konserwacja maszyn liczących',
                    'en' => 'Calibration and maintenance of counting machines'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1402,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów technicznych związanych z maszynami liczącymi',
                    'en' => 'Troubleshooting technical issues related to counting machines'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1403,
                'name' => json_encode([
                    'pl' => 'Ochrona prywatności i poufności danych finansowych lub dokumentów, zwłaszcza przy pracy z poufnymi informacjami',
                    'en' => 'Protecting the privacy and confidentiality of financial data or documents, especially when handling sensitive information'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1404,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie wewnętrznych procedur i regulaminów związanych z liczeniem pieniędzy, dokumentów czy towarów',
                    'en' => 'Adhering to internal procedures and regulations related to counting money, documents, or goods'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1405,
                'name' => json_encode([
                    'pl' => 'Zachowanie zgodności z przepisami prawa, dotyczącymi przeciwdziałania praniu pieniędzy',
                    'en' => 'Ensuring compliance with laws related to anti-money laundering'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1406,
                'name' => json_encode([
                    'pl' => 'Udział w inwentaryzacjach',
                    'en' => 'Participating in inventories'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1407,
                'name' => json_encode([
                    'pl' => 'Pomoc w przygotowywaniu bilansu magazynowego lub finansowego na podstawie wyników liczenia',
                    'en' => 'Assisting in preparing the inventory or financial balance based on counting results'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1408,
                'name' => json_encode([
                    'pl' => 'Zgłaszanie prób oszustwa lub fałszerstw w przypadku wykrycia fałszywych pieniędzy, dokumentów lub innych przedmiotów',
                    'en' => 'Reporting attempts of fraud or forgery upon detecting counterfeit money, documents, or other items'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1409,
                'name' => json_encode([
                    'pl' => 'Współpraca z działami księgowości, finansów, magazynu czy administracji w celu prawidłowego rozliczenia liczonych zasobów',
                    'en' => 'Collaborating with accounting, finance, inventory, or administration departments for proper settlement of counted resources'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1410,
                'name' => json_encode([
                    'pl' => 'Pomoc w audytach wewnętrznych i zewnętrznych, w tym udostępnianie danych dotyczących liczonych środków lub towarów',
                    'en' => 'Assisting in internal and external audits, including providing data regarding counted funds or goods'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $ULICZNISPRZEDAWCYPRODUKTÓW = [
            [
                'id' => 1411,
                'name' => json_encode([
                    'pl' => 'Rozstawienie stoiska lub wózka',
                    'en' => 'Setting up a stall or cart'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1412,
                'name' => json_encode([
                    'pl' => 'Estetyczne rozmieszczenie towarów w sposób przyciągający uwagę klientów',
                    'en' => 'Aesthetic arrangement of goods in a way that attracts customers\' attention'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1413,
                'name' => json_encode([
                    'pl' => 'Oznaczanie cen produktów w sposób widoczny i czytelny dla klientów',
                    'en' => 'Labeling product prices in a visible and legible manner for customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1414,
                'name' => json_encode([
                    'pl' => 'Dbanie o czystość i porządek na stanowisku sprzedaży oraz w jego otoczeniu',
                    'en' => 'Maintaining cleanliness and order at the sales station and in its surroundings'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1415,
                'name' => json_encode([
                    'pl' => 'Bezpośrednia obsługa klientów',
                    'en' => 'Direct customer service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1416,
                'name' => json_encode([
                    'pl' => 'Negocjowanie cen z klientami',
                    'en' => 'Negotiating prices with customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1417,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie zamówień na produkty',
                    'en' => 'Taking orders for products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1418,
                'name' => json_encode([
                    'pl' => 'Regularne uzupełnianie towaru',
                    'en' => 'Regularly replenishing stock'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1419,
                'name' => json_encode([
                    'pl' => 'Budowanie relacji z klientami',
                    'en' => 'Building relationships with customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1420,
                'name' => json_encode([
                    'pl' => 'Obsługa reklamacji i zwrotów',
                    'en' => 'Handling complaints and returns'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1421,
                'name' => json_encode([
                    'pl' => 'Dostosowanie się do sezonowych zmian',
                    'en' => 'Adapting to seasonal changes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1422,
                'name' => json_encode([
                    'pl' => 'Organizacja trasy i lokalizacji sprzedaży',
                    'en' => 'Organizing the sales route and location'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1423,
                'name' => json_encode([
                    'pl' => 'Przechowywanie towaru w odpowiednich warunkach',
                    'en' => 'Storing goods under appropriate conditions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1424,
                'name' => json_encode([
                    'pl' => 'Organizacja sprzedaży na festynach, targach, jarmarkach oraz innych wydarzeniach',
                    'en' => 'Organizing sales at festivals, fairs, markets, and other events'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1425,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie oferty do specyfiki wydarzeń',
                    'en' => 'Adapting the offer to the specifics of events'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1426,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie sporów i wyjaśnianie sytuacji problematycznych',
                    'en' => 'Resolving disputes and clarifying problematic situations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1427,
                'name' => json_encode([
                    'pl' => 'Minimalizowanie ilości odpadów',
                    'en' => 'Minimizing waste'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1428,
                'name' => json_encode([
                    'pl' => 'Zarządzanie odpadami',
                    'en' => 'Managing waste'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIKCENTRUMELEKTRONICZNEJOBSŁUGIKLIENTA=[
            [
                'id' => 1429,
                'name' => json_encode([
                    'pl' => 'Obsługa zapytań klientów przesyłanych drogą elektroniczną',
                    'en' => 'Handling customer inquiries sent electronically'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1430,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji na temat statusu zamówienia, dostępności produktów oraz przewidywanego czasu realizacji',
                    'en' => 'Providing information about order status, product availability, and estimated delivery time'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1431,
                'name' => json_encode([
                    'pl' => 'Pomoc w rozwiązywaniu problemów związanych z produktami lub usługami',
                    'en' => 'Assisting in resolving issues related to products or services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1432,
                'name' => json_encode([
                    'pl' => 'Przekierowywanie zgłoszeń do odpowiednich działów, gdy wymagane są specjalistyczne kompetencje',
                    'en' => 'Redirecting inquiries to appropriate departments when specialized skills are required'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1433,
                'name' => json_encode([
                    'pl' => 'Obsługa zamówień klientów składanych za pośrednictwem kanałów elektronicznych',
                    'en' => 'Handling customer orders placed through electronic channels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1434,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie danych zamówienia do systemu oraz aktualizowanie informacji na temat realizacji zamówienia',
                    'en' => 'Entering order data into the system and updating information regarding order fulfillment'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1435,
                'name' => json_encode([
                    'pl' => 'Przesyłanie informacji o nowościach, promocjach i ofertach specjalnych za pośrednictwem mailingu lub innych kanałów komunikacji',
                    'en' => 'Sending information about new products, promotions, and special offers via mailing or other communication channels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1436,
                'name' => json_encode([
                    'pl' => 'Dbanie o poprawność i aktualność informacji',
                    'en' => 'Ensuring the accuracy and up-to-dateness of information'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1437,
                'name' => json_encode([
                    'pl' => 'Gromadzenie i raportowanie informacji o najczęstszych problemach zgłaszanych przez klientów',
                    'en' => 'Gathering and reporting information on the most common issues reported by customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1438,
                'name' => json_encode([
                    'pl' => 'Przekazywanie feedbacku od klientów do zespołów produktowych, marketingowych i operacyjnych w celu poprawy jakości produktów lub usług',
                    'en' => 'Passing customer feedback to product, marketing, and operational teams to improve product or service quality'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1439,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów dotyczących ochrony danych osobowych (np. RODO) i poufności informacji',
                    'en' => 'Complying with data protection regulations (e.g., GDPR) and confidentiality of information'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1440,
                'name' => json_encode([
                    'pl' => 'Monitorowanie i ocenianie poziomu satysfakcji klientów po zakończonej interakcji za pomocą ankiet',
                    'en' => 'Monitoring and evaluating customer satisfaction after the interaction using surveys'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1441,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów dotyczących liczby obsłużonych zgłoszeń, czasu ich realizacji oraz poziomu zadowolenia klientów',
                    'en' => 'Preparing reports on the number of handled inquiries, their resolution time, and customer satisfaction levels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1442,
                'name' => json_encode([
                    'pl' => 'Monitorowanie i odpowiadanie na zapytania oraz komentarze klientów w mediach społecznościowych',
                    'en' => 'Monitoring and responding to inquiries and comments from customers on social media'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1443,
                'name' => json_encode([
                    'pl' => 'Ścisła współpraca z działami technicznymi, logistycznymi, sprzedaży, marketingu oraz finansowym w celu kompleksowej obsługi klientów',
                    'en' => 'Close cooperation with technical, logistics, sales, marketing, and finance departments to ensure comprehensive customer service'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1444,
                'name' => json_encode([
                    'pl' => 'Obsługa systemów CRM, platform e-commerce, narzędzi do komunikacji elektronicznej',
                    'en' => 'Operating CRM systems, e-commerce platforms, and electronic communication tools'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $PRACOWNICYCALLCENTER=[
            [
                'id' => 1445,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na pytania klientów dotyczące produktów, usług, zamówień czy reklamacji',
                    'en' => 'Answering customer inquiries regarding products, services, orders, or complaints'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1446,
                'name' => json_encode([
                    'pl' => 'Pomoc w rozwiązywaniu problemów technicznych, zamówieniowych lub związanych z użytkowaniem produktu',
                    'en' => 'Assisting in resolving technical, ordering, or product usage issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1447,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o statusie zamówień, płatnościach, fakturach i procedurach firmy',
                    'en' => 'Informing customers about order status, payments, invoices, and company procedures'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1448,
                'name' => json_encode([
                    'pl' => 'Kontaktowanie się z klientami w celu przedstawienia oferty produktów lub usług',
                    'en' => 'Contacting customers to present product or service offerings'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1449,
                'name' => json_encode([
                    'pl' => 'Prowadzenie kampanii telemarketingowych, promocyjnych lub sprzedażowych',
                    'en' => 'Conducting telemarketing, promotional, or sales campaigns'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1450,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie badań satysfakcji klientów, ankiet lub zbieranie opinii na temat produktów i usług',
                    'en' => 'Conducting customer satisfaction surveys or gathering feedback on products and services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1451,
                'name' => json_encode([
                    'pl' => 'Przypominanie o płatnościach, promocjach, nowych produktach lub usługach',
                    'en' => 'Reminding customers about payments, promotions, new products, or services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1452,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie reklamacji i wniosków o zwrot towaru przez telefon',
                    'en' => 'Accepting complaints and return requests over the phone'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1453,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów związanych z ochroną danych osobowych (np. RODO)',
                    'en' => 'Complying with data protection regulations (e.g., GDPR)'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1454,
                'name' => json_encode([
                    'pl' => 'Stosowanie się do polityk dotyczących poufności informacji i zachowania prywatności klientów',
                    'en' => 'Adhering to policies regarding confidentiality and customer privacy'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1455,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie, aktualizowanie i utrzymywanie bazy danych klientów w systemach CRM',
                    'en' => 'Entering, updating, and maintaining customer databases in CRM systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1456,
                'name' => json_encode([
                    'pl' => 'Dbanie o poprawność danych oraz ich aktualność',
                    'en' => 'Ensuring data accuracy and currency'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1457,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów dotyczących liczby wykonanych połączeń, zakończonych rozmów, uzyskanych wyników sprzedażowych lub poziomu satysfakcji klientów',
                    'en' => 'Creating reports on the number of calls made, completed conversations, sales results, or customer satisfaction levels'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1458,
                'name' => json_encode([
                    'pl' => 'Wykazywanie cierpliwości, empatii i umiejętności rozwiązywania konfliktów w rozmowach z trudnymi klientami',
                    'en' => 'Exhibiting patience, empathy, and conflict resolution skills in conversations with difficult customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1459,
                'name' => json_encode([
                    'pl' => 'Korzystanie z oprogramowania do obsługi połączeń telefonicznych (systemy call center, IVR)',
                    'en' => 'Using software for handling phone calls (call center systems, IVR)'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $ANKIETER=[
            [
                'id' => 1460,
                'name' => json_encode([
                    'pl' => 'Realizacja wywiadów bezpośrednich z respondentami w terenie',
                    'en' => 'Conducting face-to-face interviews with respondents in the field'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1461,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ankiet telefonicznych w oparciu o określone skrypty lub kwestionariusze',
                    'en' => 'Conducting telephone surveys based on specific scripts or questionnaires'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1462,
                'name' => json_encode([
                    'pl' => 'Realizowanie badań ankietowych w formie online lub przez aplikacje mobilne',
                    'en' => 'Conducting survey research online or via mobile applications'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1463,
                'name' => json_encode([
                    'pl' => 'Zadawanie pytań zgodnie z przygotowanym scenariuszem lub kwestionariuszem',
                    'en' => 'Asking questions according to the prepared script or questionnaire'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1464,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie odpowiedzi respondentów w dokładny sposób, bez zniekształcania informacji',
                    'en' => 'Recording respondents\' answers accurately, without distorting information'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1465,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie zebranych danych do systemu komputerowego lub formularza papierowego',
                    'en' => 'Entering collected data into a computer system or paper form'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1466,
                'name' => json_encode([
                    'pl' => 'Znajdowanie odpowiednich respondentów, spełniających kryteria badania',
                    'en' => 'Finding appropriate respondents who meet the study criteria'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1467,
                'name' => json_encode([
                    'pl' => 'Zachęcanie osób do wzięcia udziału w badaniu, przedstawianie celu ankiety oraz jej istotności',
                    'en' => 'Encouraging individuals to participate in the survey, presenting the survey\'s purpose and importance'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1468,
                'name' => json_encode([
                    'pl' => 'Ochrona danych osobowych respondentów i przestrzeganie przepisów o ochronie prywatności (np. RODO)',
                    'en' => 'Protecting respondents\' personal data and complying with privacy protection regulations (e.g., GDPR)'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1469,
                'name' => json_encode([
                    'pl' => 'Regularne przekazywanie informacji o liczbie przeprowadzonych ankiet oraz ich wynikach do koordynatora projektu',
                    'en' => 'Regularly providing information on the number of surveys conducted and their results to the project coordinator'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1470,
                'name' => json_encode([
                    'pl' => 'Umiejętne reagowanie na trudne sytuacje, takie jak brak zrozumienia pytań lub zbyt mała ilość czasu respondentów',
                    'en' => 'Skillfully responding to difficult situations, such as lack of understanding of questions or respondents\' time constraints'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1471,
                'name' => json_encode([
                    'pl' => 'Korzystanie z narzędzi elektronicznych do zbierania i wprowadzania danych (np. tablety, smartfony, aplikacje ankietowe)',
                    'en' => 'Using electronic tools for collecting and entering data (e.g., tablets, smartphones, survey apps)'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1472,
                'name' => json_encode([
                    'pl' => 'Umiejętność korzystania z tradycyjnych formularzy papierowych, jeśli badanie nie jest realizowane w formie elektronicznej',
                    'en' => 'Ability to use traditional paper forms if the survey is not conducted electronically'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1473,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie poprawności i spójności odpowiedzi udzielanych przez respondentów',
                    'en' => 'Checking the accuracy and consistency of responses provided by respondents'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $TELEANKIETER=[
            [
                'id' => 1474,
                'name' => json_encode([
                    'pl' => 'Realizacja ankiet poprzez kontakt telefoniczny z respondentami',
                    'en' => 'Conducting surveys through telephone contact with respondents'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1475,
                'name' => json_encode([
                    'pl' => 'Zadawanie pytań zgodnie z ustalonym skryptem lub kwestionariuszem ankiety',
                    'en' => 'Asking questions according to the established script or survey questionnaire'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1476,
                'name' => json_encode([
                    'pl' => 'Udzielanie respondentom informacji na temat celu badania i wyjaśnianie pytań, jeśli są niejasne',
                    'en' => 'Providing respondents with information about the purpose of the study and clarifying questions if they are unclear'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1477,
                'name' => json_encode([
                    'pl' => 'Dzwonienie do wyselekcjonowanej bazy osób w celu zaproszenia do udziału w badaniu',
                    'en' => 'Calling a selected database of individuals to invite them to participate in the study'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1478,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie odpowiedzi w systemie komputerowym, zgodnie z wytycznymi projektu',
                    'en' => 'Recording responses in the computer system according to project guidelines'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1479,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie danych bez zniekształceń, dokładnie tak, jak zostały przekazane przez respondenta',
                    'en' => 'Entering data without distortion, exactly as it was provided by the respondent'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1480,
                'name' => json_encode([
                    'pl' => 'Pomoc w zrozumieniu treści pytań, przy jednoczesnym zachowaniu bezstronności',
                    'en' => 'Assisting in understanding the content of questions while maintaining neutrality'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1481,
                'name' => json_encode([
                    'pl' => 'Informowanie respondentów o ewentualnych kwestiach formalnych, takich jak ochrona danych osobowych czy anonimowość ankiety',
                    'en' => 'Informing respondents about any formal issues, such as data protection or the anonymity of the survey'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1482,
                'name' => json_encode([
                    'pl' => 'Korzystanie z oprogramowania do wprowadzania danych ankietowych (systemów CATI – Computer-Assisted Telephone Interviewing)',
                    'en' => 'Using software for entering survey data (CATI – Computer-Assisted Telephone Interviewing systems)'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1483,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie czasu przewidzianego na rozmowy z respondentami oraz optymalizacja czasu pracy',
                    'en' => 'Adhering to the allotted time for conversations with respondents and optimizing work time'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1484,
                'name' => json_encode([
                    'pl' => 'Przekazywanie szczegółowych raportów na temat realizacji założeń projektu badawczego',
                    'en' => 'Providing detailed reports on the implementation of the research project objectives'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1485,
                'name' => json_encode([
                    'pl' => 'Realizacja wyznaczonych celów liczbowych i jakościowych, takich jak liczba przeprowadzonych rozmów, czas rozmowy czy skuteczność w zdobywaniu odpowiedzi',
                    'en' => 'Achieving set quantitative and qualitative goals, such as the number of calls made, call duration, or effectiveness in obtaining responses'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $POZOSTALIANKIETERZY=[
            [
                'id' => 1486,
                'name' => json_encode([
                    'pl' => 'Zbieranie danych w terenie',
                    'en' => 'Collecting data in the field'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1487,
                'name' => json_encode([
                    'pl' => 'Pozyskiwanie',
                    'en' => 'Acquisition'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1488,
                'name' => json_encode([
                    'pl' => 'Ustalanie dogodnych terminów spotkań',
                    'en' => 'Scheduling convenient meeting times'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1489,
                'name' => json_encode([
                    'pl' => 'Zbieranie informacji na miejscu',
                    'en' => 'Gathering information on-site'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1490,
                'name' => json_encode([
                    'pl' => 'Planowanie trasy i logistyki pracy terenowej',
                    'en' => 'Planning the route and logistics for fieldwork'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1491,
                'name' => json_encode([
                    'pl' => 'Raportowanie wyników',
                    'en' => 'Reporting results'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1492,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie i wysyłanie ankiet internetowych',
                    'en' => 'Preparing and sending online surveys'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1493,
                'name' => json_encode([
                    'pl' => 'Monitorowanie odpowiedzi',
                    'en' => 'Monitoring responses'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1494,
                'name' => json_encode([
                    'pl' => 'Wsparcie techniczne',
                    'en' => 'Technical support'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1495,
                'name' => json_encode([
                    'pl' => 'Zarządzanie danymi',
                    'en' => 'Data management'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1496,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie procedur ochrony danych',
                    'en' => 'Adhering to data protection procedures'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1497,
                'name' => json_encode([
                    'pl' => 'Realizacja wywiadów w domach respondentów',
                    'en' => 'Conducting interviews in respondents\' homes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1498,
                'name' => json_encode([
                    'pl' => 'Przygotowanie respondentów',
                    'en' => 'Preparing respondents'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1499,
                'name' => json_encode([
                    'pl' => 'Dostosowanie się do indywidualnych potrzeb',
                    'en' => 'Adapting to individual needs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1500,
                'name' => json_encode([
                    'pl' => 'Zbieranie szczegółowych informacji',
                    'en' => 'Collecting detailed information'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1501,
                'name' => json_encode([
                    'pl' => 'Dokładne zapisywanie wyników',
                    'en' => 'Accurately recording results'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1502,
                'name' => json_encode([
                    'pl' => 'Pozyskiwanie uczestników badania',
                    'en' => 'Recruiting study participants'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1503,
                'name' => json_encode([
                    'pl' => 'Prowadzenie wywiadów na miejscu',
                    'en' => 'Conducting interviews on-site'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1504,
                'name' => json_encode([
                    'pl' => 'Zapewnienie odpowiedniego wizerunku',
                    'en' => 'Ensuring an appropriate image'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1505,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie danych na miejscu',
                    'en' => 'Entering data on-site'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1506,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie porządku i organizacji w miejscu pracy',
                    'en' => 'Maintaining order and organization in the workplace'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1507,
                'name' => json_encode([
                    'pl' => 'Prowadzenie grup fokusowych',
                    'en' => 'Conducting focus groups'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1508,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie opinii',
                    'en' => 'Recording opinions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1509,
                'name' => json_encode([
                    'pl' => 'Zachowanie neutralności',
                    'en' => 'Maintaining neutrality'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1510,
                'name' => json_encode([
                    'pl' => 'Zarządzanie dynamiką grupy',
                    'en' => 'Managing group dynamics'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1511,
                'name' => json_encode([
                    'pl' => 'Raportowanie',
                    'en' => 'Reporting'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1512,
                'name' => json_encode([
                    'pl' => 'Prowadzenie wywiadów z konsumentami',
                    'en' => 'Conducting interviews with consumers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1513,
                'name' => json_encode([
                    'pl' => 'Zapewnienie respondentów o anonimowości',
                    'en' => 'Assuring respondents of anonymity'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1514,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie opinii o produktach',
                    'en' => 'Recording opinions about products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1515,
                'name' => json_encode([
                    'pl' => 'Raportowanie wyników badań',
                    'en' => 'Reporting research results'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1516,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie ankiet z interesantami',
                    'en' => 'Conducting surveys with stakeholders'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1517,
                'name' => json_encode([
                    'pl' => 'Zapewnienie anonimowości badanych',
                    'en' => 'Ensuring the anonymity of respondents'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1518,
                'name' => json_encode([
                    'pl' => 'Zbieranie informacji o jakości usług',
                    'en' => 'Gathering information on service quality'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1519,
                'name' => json_encode([
                    'pl' => 'Przekazywanie wniosków',
                    'en' => 'Providing insights'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1520,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie ankiet na urządzeniach mobilnych',
                    'en' => 'Conducting surveys on mobile devices'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1521,
                'name' => json_encode([
                    'pl' => 'Szybka analiza danych',
                    'en' => 'Quick data analysis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1522,
                'name' => json_encode([
                    'pl' => 'Wykorzystywanie aplikacji ankietowych',
                    'en' => 'Utilizing survey applications'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1523,
                'name' => json_encode([
                    'pl' => 'Elastyczność działania',
                    'en' => 'Operational flexibility'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];

        $SPRZEDAWCANATELEFON=[
            [
                'id' => 1524,
                'name' => json_encode([
                    'pl' => 'Dzwonienie do potencjalnych klientów',
                    'en' => 'Calling potential customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1525,
                'name' => json_encode([
                    'pl' => 'Prezentacja oferty sprzedażowej',
                    'en' => 'Presenting the sales offer'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1526,
                'name' => json_encode([
                    'pl' => 'Identyfikowanie potrzeb klientów',
                    'en' => 'Identifying customer needs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1527,
                'name' => json_encode([
                    'pl' => 'Doradzanie w wyborze odpowiedniego produktu',
                    'en' => 'Advising on the selection of the appropriate product'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1528,
                'name' => json_encode([
                    'pl' => 'Przedłużanie umów i oferowanie nowych produktów',
                    'en' => 'Renewing contracts and offering new products'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1529,
                'name' => json_encode([
                    'pl' => 'Przypominanie o promocjach i rabatach',
                    'en' => 'Reminding about promotions and discounts'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1530,
                'name' => json_encode([
                    'pl' => 'Obsługa pytań i zgłoszeń klientów',
                    'en' => 'Handling customer inquiries and complaints'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1531,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie kontaktu z klientami',
                    'en' => 'Maintaining contact with customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1532,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rozmów zgodnie z przygotowanymi scenariuszami, które pomagają w prezentacji oferty i zamykaniu sprzedaży',
                    'en' => 'Conducting conversations according to prepared scripts that assist in presenting the offer and closing sales'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1533,
                'name' => json_encode([
                    'pl' => 'Realizowanie wyznaczonych celów liczbowych, takich jak liczba zamkniętych transakcji, ilość sprzedaży lub wartość koszyka zakupowego',
                    'en' => 'Achieving designated quantitative goals, such as the number of closed transactions, sales volume, or shopping cart value'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1534,
                'name' => json_encode([
                    'pl' => 'Raportowanie wyników sprzedaży',
                    'en' => 'Reporting sales results'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1535,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie danych do systemu CRM',
                    'en' => 'Entering data into the CRM system'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1536,
                'name' => json_encode([
                    'pl' => 'Ustalanie harmonogramów działań',
                    'en' => 'Establishing action schedules'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1537,
                'name' => json_encode([
                    'pl' => 'Obsługa reklamacji',
                    'en' => 'Handling complaints'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1538,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów klientów',
                    'en' => 'Resolving customer issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];
        $TELEMARKETER=[
            [
                'id' => 1539,
                'name' => json_encode([
                    'pl' => 'Kontaktowanie się z potencjalnymi klientami w celu przedstawienia oferty lub sprzedaży produktów/usług',
                    'en' => 'Contacting potential customers to present offers or sell products/services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1540,
                'name' => json_encode([
                    'pl' => 'Odbieranie połączeń przychodzących',
                    'en' => 'Receiving incoming calls'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1541,
                'name' => json_encode([
                    'pl' => 'Używanie automatycznego systemu wybierania numerów (dialer)',
                    'en' => 'Using an automatic dialing system (dialer)'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1542,
                'name' => json_encode([
                    'pl' => 'Wyjaśnienie klientom korzyści płynących z zakupu produktów/usług, ich funkcji oraz zastosowania',
                    'en' => 'Explaining the benefits of purchasing products/services to customers, their functions, and applications'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1543,
                'name' => json_encode([
                    'pl' => 'Dostosowanie oferty do potrzeb klienta',
                    'en' => 'Tailoring the offer to meet the customer\'s needs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1544,
                'name' => json_encode([
                    'pl' => 'Oferowanie klientom dodatkowych produktów lub usług (cross-selling) lub bardziej zaawansowanych (upselling)',
                    'en' => 'Offering customers additional products or services (cross-selling) or more advanced options (upselling)'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1545,
                'name' => json_encode([
                    'pl' => 'Kontaktowanie się z klientami w celu przedłużenia umowy na dotychczasowych warunkach lub przedstawienie nowych, bardziej korzystnych propozycji',
                    'en' => 'Contacting customers to renew contracts on existing terms or present new, more favorable proposals'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1546,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rozmów ankietowych w celu zebrania opinii klientów na temat produktów, usług, jakości obsługi itp.',
                    'en' => 'Conducting survey calls to gather customer opinions about products, services, service quality, etc.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1547,
                'name' => json_encode([
                    'pl' => 'Realizacja rozmów zgodnie z przygotowanym skryptem',
                    'en' => 'Conducting conversations according to the prepared script'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1548,
                'name' => json_encode([
                    'pl' => 'Modyfikowanie skryptu na potrzeby klienta',
                    'en' => 'Modifying the script to meet customer needs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1549,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie reklamacji',
                    'en' => 'Accepting complaints'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1550,
                'name' => json_encode([
                    'pl' => 'Przekazywanie zgłoszeń do odpowiednich działów',
                    'en' => 'Forwarding requests to the appropriate departments'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1551,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów z wyników sprzedażowych',
                    'en' => 'Preparing reports on sales results'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1552,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad etyki sprzedaży oraz przepisów o ochronie danych osobowych',
                    'en' => 'Adhering to sales ethics and data protection regulations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];

        $TAJEMNICZYKLIENT = [
            [
                'id' => 1553,
                'name' => json_encode([
                    'pl' => 'Dokładne zapoznanie się z instrukcjami dotyczącymi wizyty',
                    'en' => 'Thoroughly familiarizing oneself with visit instructions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1554,
                'name' => json_encode([
                    'pl' => 'Zrozumienie celów badania',
                    'en' => 'Understanding the objectives of the study'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1555,
                'name' => json_encode([
                    'pl' => 'Udzielanie standardowych odpowiedzi',
                    'en' => 'Providing standard responses'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1556,
                'name' => json_encode([
                    'pl' => 'Ocena zachowania pracowników',
                    'en' => 'Assessing employee behavior'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1557,
                'name' => json_encode([
                    'pl' => 'Ocena szybkości obsługi',
                    'en' => 'Assessing service speed'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1558,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie zgodności z procedurami',
                    'en' => 'Checking compliance with procedures'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1559,
                'name' => json_encode([
                    'pl' => 'Badanie wiedzy pracowników',
                    'en' => 'Examining employee knowledge'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1560,
                'name' => json_encode([
                    'pl' => 'Ocena czystości i porządku',
                    'en' => 'Assessing cleanliness and order'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1561,
                'name' => json_encode([
                    'pl' => 'Ocena atmosfery',
                    'en' => 'Assessing the atmosphere'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1562,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie dostępności produktów',
                    'en' => 'Checking product availability'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1563,
                'name' => json_encode([
                    'pl' => 'Dokonanie zakupu',
                    'en' => 'Making a purchase'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1564,
                'name' => json_encode([
                    'pl' => 'Zachowanie dowodów zakupu',
                    'en' => 'Keeping proof of purchase'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1565,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie programów lojalnościowych',
                    'en' => 'Checking loyalty programs'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1566,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie zgodności z promocjami',
                    'en' => 'Checking compliance with promotions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1567,
                'name' => json_encode([
                    'pl' => 'Obserwacja interakcji z innymi klientami',
                    'en' => 'Observing interactions with other customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1568,
                'name' => json_encode([
                    'pl' => 'Obserwacja reakcji pracowników na trudne sytuacje',
                    'en' => 'Observing employee responses to difficult situations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1569,
                'name' => json_encode([
                    'pl' => 'Sporządzanie szczegółowego raportu',
                    'en' => 'Preparing a detailed report'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1570,
                'name' => json_encode([
                    'pl' => 'Ocenianie według ustalonych kryteriów',
                    'en' => 'Evaluating according to established criteria'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];

        $OPERATORCENTRALITELEFONICZNEJ=[
            [
                'id' => 1571,
                'name' => json_encode([
                    'pl' => 'Odbieranie połączeń telefonicznych od klientów, pracowników lub partnerów biznesowych',
                    'en' => 'Receiving phone calls from customers, employees, or business partners'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1572,
                'name' => json_encode([
                    'pl' => 'Przekierowywanie połączeń do odpowiednich działów lub osób',
                    'en' => 'Redirecting calls to the appropriate departments or individuals'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1573,
                'name' => json_encode([
                    'pl' => 'Inicjowanie połączeń wychodzących zgodnie z wytycznymi firmy',
                    'en' => 'Initiating outgoing calls according to company guidelines'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1574,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji klientom na temat produktów, usług lub procedur firmy',
                    'en' => 'Providing customers with information about products, services, or company procedures'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1575,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów lub skierowanie klientów do odpowiednich specjalistów',
                    'en' => 'Resolving issues or directing customers to the appropriate specialists'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1576,
                'name' => json_encode([
                    'pl' => 'Obsługa systemów telekomunikacyjnych i oprogramowania centrali telefonicznej',
                    'en' => 'Operating telecommunication systems and telephone switchboard software'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1577,
                'name' => json_encode([
                    'pl' => 'Monitorowanie jakości połączeń oraz dbanie o poprawne działanie systemów telekomunikacyjnych',
                    'en' => 'Monitoring call quality and ensuring proper functioning of telecommunication systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1578,
                'name' => json_encode([
                    'pl' => 'Umawianie i potwierdzanie spotkań telefonicznych lub wideokonferencji',
                    'en' => 'Scheduling and confirming phone or video conference meetings'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1579,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów dotyczących liczby połączeń, czasów ich trwania oraz jakości obsługi klienta',
                    'en' => 'Preparing reports on the number of calls, their durations, and customer service quality'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1580,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie zgłoszeń klientów oraz wprowadzanie ich do systemu CRM lub innych narzędzi do zarządzania relacjami z klientami',
                    'en' => 'Documenting customer inquiries and entering them into the CRM system or other customer relationship management tools'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1581,
                'name' => json_encode([
                    'pl' => 'Dbanie o sprawny przepływ informacji oraz pomaganie innym działom w realizacji ich zadań związanych z obsługą klienta',
                    'en' => 'Ensuring smooth information flow and assisting other departments in fulfilling their customer service tasks'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];

        $POZOSTALIKONSULTANCI=[
            [
                'id' => 1582,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rozmów sprzedażowych telefonicznie lub za pomocą czatów internetowych',
                    'en' => 'Conducting sales conversations via phone or online chats'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1583,
                'name' => json_encode([
                    'pl' => 'Proponowanie i promowanie produktów oraz usług zgodnie z ustalonymi celami sprzedażowymi firmy',
                    'en' => 'Proposing and promoting products and services in line with the company\'s established sales objectives'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1584,
                'name' => json_encode([
                    'pl' => 'Osiąganie celów sprzedażowych ustalonych przez firmę',
                    'en' => 'Achieving sales targets set by the company'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1585,
                'name' => json_encode([
                    'pl' => 'Monitorowanie i raportowanie wyników sprzedażowych, aby identyfikować obszary do poprawy',
                    'en' => 'Monitoring and reporting sales results to identify areas for improvement'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1586,
                'name' => json_encode([
                    'pl' => 'Odbieranie zapytań telefonicznych lub internetowych od klientów i udzielanie im pomocy',
                    'en' => 'Receiving phone or online inquiries from customers and providing assistance'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1587,
                'name' => json_encode([
                    'pl' => 'Prowadzenie bazy klientów oraz aktualizacja informacji kontaktowych i zakupowych',
                    'en' => 'Maintaining a customer database and updating contact and purchase information'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1588,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie danych o nowych klientach do systemu CRM oraz dokumentowanie historii kontaktów',
                    'en' => 'Entering new customer data into the CRM system and documenting contact history'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1589,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie ankiet telefonicznych lub internetowych mających na celu zbadanie satysfakcji klienta po dokonanej transakcji',
                    'en' => 'Conducting phone or online surveys to assess customer satisfaction after a transaction'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1590,
                'name' => json_encode([
                    'pl' => 'Sporządzanie codziennych, tygodniowych lub miesięcznych raportów z wyników sprzedażowych i efektywności pracy',
                    'en' => 'Preparing daily, weekly, or monthly reports on sales results and work efficiency'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1591,
                'name' => json_encode([
                    'pl' => 'Analiza wyników w celu zidentyfikowania mocnych i słabych stron procesu sprzedaży oraz sugerowanie możliwych usprawnień',
                    'en' => 'Analyzing results to identify strengths and weaknesses in the sales process and suggesting possible improvements'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1592,
                'name' => json_encode([
                    'pl' => 'Monitorowanie osiąganych wyników względem założonych',
                    'en' => 'Monitoring achieved results against set targets'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];

        $ASYSTENTUSŁUGTELEKOMUNIKACYJNYCH=[
            [
                'id' => 1593,
                'name' => json_encode([
                    'pl' => 'Odbieranie zgłoszeń telefonicznych, e-mailowych lub przez czat dotyczących problemów lub pytań związanych z usługami telekomunikacyjnymi',
                    'en' => 'Receiving inquiries via phone, email, or chat regarding issues or questions related to telecommunications services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1594,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji na temat dostępnych pakietów, usług oraz promocji',
                    'en' => 'Providing information about available packages, services, and promotions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1595,
                'name' => json_encode([
                    'pl' => 'Rozwiązywanie problemów technicznych klientów w zakresie podstawowej diagnostyki oraz udzielanie wskazówek w celu rozwiązania zgłoszonych problemów',
                    'en' => 'Resolving customer technical issues through basic diagnostics and providing guidance to solve reported problems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1596,
                'name' => json_encode([
                    'pl' => 'Diagnozowanie podstawowych problemów technicznych związanych z usługami telekomunikacyjnymi, takimi jak Internet, telefonia czy telewizja',
                    'en' => 'Diagnosing basic technical issues related to telecommunications services, such as Internet, telephony, or television'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1597,
                'name' => json_encode([
                    'pl' => 'Monitorowanie statusu zgłoszeń technicznych i informowanie klientów o postępach w ich rozwiązywaniu',
                    'en' => 'Monitoring the status of technical requests and informing customers about progress in resolving them'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1598,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie zgłoszeń klientów w systemach CRM oraz uzupełnianie niezbędnych informacji dotyczących problemu, klienta oraz podjętych działań',
                    'en' => 'Recording customer inquiries in CRM systems and updating necessary information regarding the issue, customer, and actions taken'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1599,
                'name' => json_encode([
                    'pl' => 'Dbanie o aktualizację danych klienta w systemach informatycznych firmy',
                    'en' => 'Ensuring the update of customer data in the company\'s IT systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1600,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom przy aktywacji nowych usług, w tym konfiguracja urządzeń takich jak routery, dekodery czy telefony',
                    'en' => 'Assisting customers in activating new services, including configuring devices such as routers, decoders, or phones'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1601,
                'name' => json_encode([
                    'pl' => 'Wsparcie sprzedażowe w zakresie doradztwa i przedstawiania korzyści związanych z nowymi usługami',
                    'en' => 'Sales support in advising and presenting benefits related to new services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1602,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie ankiet telefonicznych lub online w celu zbadania satysfakcji klientów po zakończeniu obsługi zgłoszeń',
                    'en' => 'Conducting phone or online surveys to assess customer satisfaction after resolving inquiries'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];

        $DYSPOZYTORRADIOTAXI=[
            [
                'id' => 1603,
                'name' => json_encode([
                    'pl' => 'Odbieranie połączeń telefonicznych lub zgłoszeń przez aplikacje mobilne od klientów zamawiających taksówkę',
                    'en' => 'Receiving phone calls or mobile app requests from customers ordering a taxi'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1604,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie danych klienta oraz szczegółów zamówienia',
                    'en' => 'Recording customer data and order details'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1605,
                'name' => json_encode([
                    'pl' => 'Potwierdzanie przyjęcia zamówienia oraz informowanie klienta o szacowanym czasie przyjazdu taksówki',
                    'en' => 'Confirming order acceptance and informing the customer of the estimated taxi arrival time'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1606,
                'name' => json_encode([
                    'pl' => 'Przekazywanie zleceń kierowcom poprzez system radiowy, aplikację mobilną lub system komputerowy',
                    'en' => 'Forwarding orders to drivers via radio system, mobile app, or computer system'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1607,
                'name' => json_encode([
                    'pl' => 'Monitorowanie pozycji pojazdów na mapie i przydzielanie zleceń najbliższym dostępnym taksówkom',
                    'en' => 'Monitoring vehicle positions on the map and assigning orders to the nearest available taxis'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1608,
                'name' => json_encode([
                    'pl' => 'Zarządzanie ruchem i logistyką floty w taki sposób, aby optymalizować czas przyjazdu i zwiększać efektywność pracy kierowców',
                    'en' => 'Managing fleet traffic and logistics to optimize arrival times and increase driver efficiency'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1609,
                'name' => json_encode([
                    'pl' => 'Śledzenie pozycji taksówek w czasie rzeczywistym za pomocą systemów GPS',
                    'en' => 'Tracking taxi positions in real-time using GPS systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1610,
                'name' => json_encode([
                    'pl' => 'Zarządzanie dyspozycyjnością floty, aby zapewnić, że dostępnych jest wystarczająco dużo pojazdów w różnych rejonach miasta',
                    'en' => 'Managing fleet availability to ensure sufficient vehicles are available in various city areas'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1611,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie kontaktu z kierowcami i monitorowanie ich statusu',
                    'en' => 'Maintaining contact with drivers and monitoring their status'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1612,
                'name' => json_encode([
                    'pl' => 'Szybkie reagowanie na zgłoszenia o problemach technicznych z pojazdami lub trudności z dojazdem do klientów',
                    'en' => 'Quickly responding to reports of technical issues with vehicles or difficulties in reaching customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1613,
                'name' => json_encode([
                    'pl' => 'Zarządzanie sytuacjami kryzysowymi',
                    'en' => 'Managing crisis situations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1614,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o zmianach w statusie zamówienia',
                    'en' => 'Informing customers about changes in order status'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1615,
                'name' => json_encode([
                    'pl' => 'Obsługa zgłoszeń dotyczących skarg lub reklamacji oraz rozwiązywanie problemów zgłaszanych przez klientów',
                    'en' => 'Handling complaints or claims inquiries and resolving issues reported by customers'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1616,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów dotyczących efektywności pracy floty, zgłoszeń klientów oraz jakości obsługi',
                    'en' => 'Creating reports on fleet performance, customer inquiries, and service quality'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1617,
                'name' => json_encode([
                    'pl' => 'Analizowanie natężenia ruchu i przewidywanie godzin szczytu, aby odpowiednio planować dyspozycyjność kierowców',
                    'en' => 'Analyzing traffic density and predicting peak hours to appropriately plan driver availability'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1618,
                'name' => json_encode([
                    'pl' => 'Koordynacja z zespołem technicznym w przypadku awarii systemów komunikacyjnych lub GPS',
                    'en' => 'Coordinating with the technical team in case of failures in communication or GPS systems'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1619,
                'name' => json_encode([
                    'pl' => 'Organizowanie zastępstw lub zmian w grafiku w przypadku nieobecności lub awarii pojazdów',
                    'en' => 'Arranging substitutes or schedule changes in case of absences or vehicle failures'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1620,
                'name' => json_encode([
                    'pl' => 'Obsługa oprogramowania dyspozytorskiego, w tym systemów zarządzania zleceniami, GPS i komunikacji radiowej',
                    'en' => 'Operating dispatch software, including order management systems, GPS, and radio communication'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1621,
                'name' => json_encode([
                    'pl' => 'Monitorowanie stanu technicznego systemów i informowanie odpowiednich działów w przypadku awarii lub problemów technicznych',
                    'en' => 'Monitoring the technical condition of systems and notifying the appropriate departments in case of failures or technical issues'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1622,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie systemu oraz bazy danych w celu zachowania płynności operacji i dokładności danych',
                    'en' => 'Updating the system and database to maintain operational fluidity and data accuracy'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

        ];

        $OPERATORNUMERÓWALARMOWYCH=[
            [
                'id' => 1623,
                'name' => json_encode([
                    'pl' => 'Odbieranie połączeń alarmowych od osób zgłaszających nagłe wypadki, zagrożenia zdrowia, życia lub mienia',
                    'en' => 'Receiving emergency calls from individuals reporting sudden accidents, health, life, or property threats'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1624,
                'name' => json_encode([
                    'pl' => 'Zadawanie pytań zgłaszającemu w celu uzyskania szczegółowych informacji o sytuacji',
                    'en' => 'Asking the caller questions to gather detailed information about the situation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1625,
                'name' => json_encode([
                    'pl' => 'Priorytetyzowanie zgłoszeń w zależności od stopnia zagrożenia oraz charakteru sytuacji',
                    'en' => 'Prioritizing calls based on the level of danger and the nature of the situation'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1626,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji o zdarzeniu odpowiednim służbom ratunkowym',
                    'en' => 'Forwarding information about the event to the appropriate emergency services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1627,
                'name' => json_encode([
                    'pl' => 'Koordynowanie działań różnych służb w przypadku skomplikowanych sytuacji wymagających współpracy wielu jednostek ratowniczych',
                    'en' => 'Coordinating the actions of various services in complicated situations requiring cooperation of multiple rescue units'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1628,
                'name' => json_encode([
                    'pl' => 'Monitorowanie postępów działań służb ratunkowych i aktualizowanie informacji w systemie',
                    'en' => 'Monitoring the progress of emergency services and updating information in the system'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1629,
                'name' => json_encode([
                    'pl' => 'Udzielanie telefonicznych wskazówek dotyczących udzielania pierwszej pomocy w nagłych przypadkach, takich jak resuscytacja krążeniowo-oddechowa lub postępowanie w przypadku zadławienia',
                    'en' => 'Providing phone instructions on first aid in emergencies, such as CPR or choking procedures'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1630,
                'name' => json_encode([
                    'pl' => 'Pomoc zgłaszającemu w stabilizacji stanu poszkodowanego do czasu przybycia ratowników',
                    'en' => 'Assisting the caller in stabilizing the condition of the injured until rescuers arrive'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1631,
                'name' => json_encode([
                    'pl' => 'Informowanie zgłaszającego o bezpiecznym postępowaniu w przypadku sytuacji zagrażających jego życiu lub zdrowiu',
                    'en' => 'Informing the caller about safe procedures in situations threatening their life or health'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1632,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie zgłoszeń alarmowych w systemie informatycznym, w tym szczegółów dotyczących lokalizacji, rodzaju zdarzenia oraz osób poszkodowanych',
                    'en' => 'Recording emergency calls in the information system, including details about location, type of event, and injured individuals'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1633,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie statusu zgłoszenia oraz monitorowanie przebiegu interwencji służb ratunkowych',
                    'en' => 'Updating the status of inquiries and monitoring the progress of emergency service interventions'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1634,
                'name' => json_encode([
                    'pl' => 'Analiza danych z systemu w celu utrzymania dokładności i spójności informacji dotyczących bieżących zgłoszeń',
                    'en' => 'Analyzing data from the system to maintain accuracy and consistency of information regarding current reports'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1635,
                'name' => json_encode([
                    'pl' => 'Szybkie reagowanie na każde zgłoszenie i podejmowanie odpowiednich działań, aby minimalizować czas odpowiedzi na sytuację kryzysową',
                    'en' => 'Quickly responding to each report and taking appropriate actions to minimize response time to emergency situations'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1636,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie standardów i procedur operacyjnych mających na celu zapewnienie szybkości i efektywności reakcji',
                    'en' => 'Adhering to operational standards and procedures to ensure speed and efficiency of response'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1637,
                'name' => json_encode([
                    'pl' => 'Komunikowanie się z jednostkami terenowymi w celu dostarczania im aktualnych informacji oraz udzielania wsparcia logistycznego',
                    'en' => 'Communicating with field units to provide them with current information and logistical support'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1638,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji do innych jednostek, takich jak centra kryzysowe, organy administracyjne lub służby specjalistyczne',
                    'en' => 'Transmitting information to other units, such as crisis centers, administrative authorities, or specialized services'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1639,
                'name' => json_encode([
                    'pl' => 'Koordynowanie działań służb w przypadku sytuacji awaryjnych na dużą skalę, takich jak katastrofy naturalne, wypadki masowe lub pożary',
                    'en' => 'Coordinating actions of services in large-scale emergencies such as natural disasters, mass accidents, or fires'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 1640,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów po zakończeniu interwencji, zawierających szczegóły zdarzenia, działania podjęte przez służby ratunkowe oraz ich wyniki',
                    'en' => 'Preparing reports after intervention, detailing the event, actions taken by emergency services, and their outcomes'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]

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
        $AttachEKSPEDYTORSPRZEDAŻYWYSYŁKOWEJINTERNETOWEJ = collect($EKSPEDYTORSPRZEDAŻYWYSYŁKOWEJINTERNETOWEJ)->pluck('id')->toArray();
        $AttachORGANIZATOROBSŁUGISPRZEDAŻYINTERNETOWEJ = collect($ORGANIZATOROBSŁUGISPRZEDAŻYINTERNETOWEJ)->pluck('id')->toArray();
        $AttachSPRZEDAWCA = collect($SPRZEDAWCA)->pluck('id')->toArray();
        $AttachSPRZEDAWCAWBRANŻYMIĘSNEJ = collect($SPRZEDAWCAWBRANŻYMIĘSNEJ)->pluck('id')->toArray();
        $AttachSPRZEDAWCAWBRANŻYPRZEMYSŁOWEJ = collect($SPRZEDAWCAWBRANŻYPRZEMYSŁOWEJ)->pluck('id')->toArray();
        $AttachSPRZEDAWCAWBRANŻYSPOŻYWCZEJ = collect($SPRZEDAWCAWBRANŻYSPOŻYWCZEJ)->pluck('id')->toArray();
        $AttachTECHNIKHANDLOWIEC = collect($TECHNIKHANDLOWIEC)->pluck('id')->toArray();
        $AttachTECHNIKKSIĘGARSTWA = collect($TECHNIKKSIĘGARSTWA)->pluck('id')->toArray();
        $AttachPOZOSTALISPRZEDAWCYSKLEPOWIEKSPEDIENCI = collect($POZOSTALISPRZEDAWCYSKLEPOWIEKSPEDIENCI)->pluck('id')->toArray();
        $AttachSPRZEDAWCYWSTACJIPALIW = collect($SPRZEDAWCYWSTACJIPALIW)->pluck('id')->toArray();
        $AttachKASJERBANKOWY = collect($KASJERBANKOWY)->pluck('id')->toArray();
        $AttachKASJERWALUTOWY = collect($KASJERWALUTOWY)->pluck('id')->toArray();
        $AttachKASJERBILETOWY = collect($KASJERBILETOWY)->pluck('id')->toArray();
        $AttachKASJERHANDLOWY = collect($KASJERHANDLOWY)->pluck('id')->toArray();
        $AttachKASJERWZAKŁADZIEPRACY = collect($KASJERWZAKŁADZIEPRACY)->pluck('id')->toArray();
        $AttachPOZOSTALIKASJERZYISPRZEDAWCYBILETÓW = collect($POZOSTALIKASJERZYISPRZEDAWCYBILETÓW)->pluck('id')->toArray();
        $AttachINKASENT = collect($INKASENT)->pluck('id')->toArray();
        $AttachDORADCAKLIENTA = collect($DORADCAKLIENTA)->pluck('id')->toArray();
        $AttachEKSPEDIENTWPUNKCIEUSŁUGOWYM = collect($EKSPEDIENTWPUNKCIEUSŁUGOWYM)->pluck('id')->toArray();
        $AttachHOSTESSA = collect($HOSTESSA)->pluck('id')->toArray();
        $AttachPOZOSTALIKASJERZYBANKOWIIPOKREWNI = collect($POZOSTALIKASJERZYBANKOWIIPOKREWNI)->pluck('id')->toArray();
        $AttachPRACOWNIKINSTYTUCJIPOŻYCZKOWEJ = collect($PRACOWNIKINSTYTUCJIPOŻYCZKOWEJ)->pluck('id')->toArray();
        $AttachPRACOWNIKLOMBARDU = collect($PRACOWNIKLOMBARDU)->pluck('id')->toArray();
        $AttachSPRZEDAWCANATARGOWISKUBAZARZE = collect($SPRZEDAWCANATARGOWISKUBAZARZE)->pluck('id')->toArray();
        $AttachSPRZEDAWCAOBWOŹNYZSAMOCHODUVANSELLER = collect($SPRZEDAWCAOBWOŹNYZSAMOCHODUVANSELLER)->pluck('id')->toArray();
        $AttachULICZNISPRZEDAWCYŻYWNOŚCI = collect($ULICZNISPRZEDAWCYŻYWNOŚCI)->pluck('id')->toArray();
        $AttachANTYKWARIUSZ = collect($ANTYKWARIUSZ)->pluck('id')->toArray();
        $AttachKIOSKARZ = collect($KIOSKARZ)->pluck('id')->toArray();
        $AttachEKSPEDIENTWSTACJIOBSŁUGIPOJAZDÓW = collect($EKSPEDIENTWSTACJIOBSŁUGIPOJAZDÓW)->pluck('id')->toArray();
        $AttachLICZARZ = collect($LICZARZ)->pluck('id')->toArray();
        $AttachULICZNISPRZEDAWCYPRODUKTÓW = collect($ULICZNISPRZEDAWCYPRODUKTÓW)->pluck('id')->toArray();
        $AttachPRACOWNIKCENTRUMELEKTRONICZNEJOBSŁUGIKLIENTA = collect($PRACOWNIKCENTRUMELEKTRONICZNEJOBSŁUGIKLIENTA)->pluck('id')->toArray();
        $AttachPRACOWNICYCALLCENTER = collect($PRACOWNICYCALLCENTER)->pluck('id')->toArray();
        $AttachANKIETER = collect($ANKIETER)->pluck('id')->toArray();
        $AttachTELEANKIETER = collect($TELEANKIETER)->pluck('id')->toArray();
        $AttachPOZOSTALIANKIETERZY = collect($POZOSTALIANKIETERZY)->pluck('id')->toArray();
        $AttachSPRZEDAWCANATELEFON = collect($SPRZEDAWCANATELEFON)->pluck('id')->toArray();
        $AttachTELEMARKETER = collect($TELEMARKETER)->pluck('id')->toArray();
        $AttachTAJEMNICZYKLIENT = collect($TAJEMNICZYKLIENT)->pluck('id')->toArray();
        $AttachOPERATORCENTRALITELEFONICZNEJ = collect($OPERATORCENTRALITELEFONICZNEJ)->pluck('id')->toArray();
        $AttachPOZOSTALIKONSULTANCI = collect($POZOSTALIKONSULTANCI)->pluck('id')->toArray();
        $AttachASYSTENTUSŁUGTELEKOMUNIKACYJNYCH = collect($ASYSTENTUSŁUGTELEKOMUNIKACYJNYCH)->pluck('id')->toArray();
        $AttachDYSPOZYTORRADIOTAXI = collect($DYSPOZYTORRADIOTAXI)->pluck('id')->toArray();
        $AttachOPERATORNUMERÓWALARMOWYCH = collect($OPERATORNUMERÓWALARMOWYCH)->pluck('id')->toArray();

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
            $PRZEDSTAWICIELMEDYCZNY,
            $EKSPEDYTORSPRZEDAŻYWYSYŁKOWEJINTERNETOWEJ,
            $ORGANIZATOROBSŁUGISPRZEDAŻYINTERNETOWEJ,
            $SPRZEDAWCA,
            $SPRZEDAWCAWBRANŻYMIĘSNEJ,
            $SPRZEDAWCAWBRANŻYPRZEMYSŁOWEJ,
            $SPRZEDAWCAWBRANŻYSPOŻYWCZEJ,
            $TECHNIKHANDLOWIEC,
            $TECHNIKKSIĘGARSTWA,
            $POZOSTALISPRZEDAWCYSKLEPOWIEKSPEDIENCI,
            $SPRZEDAWCYWSTACJIPALIW,
            $KASJERBANKOWY,
            $KASJERWALUTOWY,
            $KASJERBILETOWY,
            $KASJERHANDLOWY,
            $KASJERWZAKŁADZIEPRACY,
            $POZOSTALIKASJERZYISPRZEDAWCYBILETÓW,
            $INKASENT,
            $DORADCAKLIENTA,
            $EKSPEDIENTWPUNKCIEUSŁUGOWYM,
            $HOSTESSA,
            $POZOSTALIKASJERZYBANKOWIIPOKREWNI,
            $PRACOWNIKINSTYTUCJIPOŻYCZKOWEJ,
            $PRACOWNIKLOMBARDU,
            $SPRZEDAWCANATARGOWISKUBAZARZE,
            $SPRZEDAWCAOBWOŹNYZSAMOCHODUVANSELLER,
            $ULICZNISPRZEDAWCYŻYWNOŚCI,
            $ANTYKWARIUSZ,
            $KIOSKARZ,
            $EKSPEDIENTWSTACJIOBSŁUGIPOJAZDÓW,
            $LICZARZ,
            $ULICZNISPRZEDAWCYPRODUKTÓW,
            $PRACOWNIKCENTRUMELEKTRONICZNEJOBSŁUGIKLIENTA,
            $PRACOWNICYCALLCENTER,
            $ANKIETER,
            $TELEANKIETER,
            $POZOSTALIANKIETERZY,
            $SPRZEDAWCANATELEFON,
            $TELEMARKETER,
            $TAJEMNICZYKLIENT,
            $OPERATORCENTRALITELEFONICZNEJ,
            $POZOSTALIKONSULTANCI,
            $ASYSTENTUSŁUGTELEKOMUNIKACYJNYCH,
            $DYSPOZYTORRADIOTAXI,
            $OPERATORNUMERÓWALARMOWYCH,

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
        Category::whereId('63')->first()->detailprojects()->attach($AttachEKSPEDYTORSPRZEDAŻYWYSYŁKOWEJINTERNETOWEJ);
        Category::whereId('64')->first()->detailprojects()->attach($AttachORGANIZATOROBSŁUGISPRZEDAŻYINTERNETOWEJ);
        Category::whereId('30')->first()->detailprojects()->attach($AttachSPRZEDAWCA);
        Category::whereId('31')->first()->detailprojects()->attach($AttachSPRZEDAWCAWBRANŻYMIĘSNEJ);
        Category::whereId('32')->first()->detailprojects()->attach($AttachSPRZEDAWCAWBRANŻYPRZEMYSŁOWEJ);
        Category::whereId('33')->first()->detailprojects()->attach($AttachSPRZEDAWCAWBRANŻYSPOŻYWCZEJ);
        Category::whereId('34')->first()->detailprojects()->attach($AttachTECHNIKHANDLOWIEC);
        Category::whereId('35')->first()->detailprojects()->attach($AttachTECHNIKKSIĘGARSTWA);
        Category::whereId('36')->first()->detailprojects()->attach($AttachPOZOSTALISPRZEDAWCYSKLEPOWIEKSPEDIENCI);
        Category::whereId('37')->first()->detailprojects()->attach($AttachSPRZEDAWCYWSTACJIPALIW);
        Category::whereId('38')->first()->detailprojects()->attach($AttachKASJERBANKOWY);
        Category::whereId('39')->first()->detailprojects()->attach($AttachKASJERWALUTOWY);
        Category::whereId('41')->first()->detailprojects()->attach($AttachKASJERBILETOWY);
        Category::whereId('42')->first()->detailprojects()->attach($AttachKASJERHANDLOWY);
        Category::whereId('43')->first()->detailprojects()->attach($AttachKASJERWZAKŁADZIEPRACY);
        Category::whereId('44')->first()->detailprojects()->attach($AttachPOZOSTALIKASJERZYISPRZEDAWCYBILETÓW);
        Category::whereId('45')->first()->detailprojects()->attach($AttachINKASENT);
        Category::whereId('46')->first()->detailprojects()->attach($AttachDORADCAKLIENTA);
        Category::whereId('47')->first()->detailprojects()->attach($AttachEKSPEDIENTWPUNKCIEUSŁUGOWYM);
        Category::whereId('48')->first()->detailprojects()->attach($AttachHOSTESSA);
        Category::whereId('49')->first()->detailprojects()->attach($AttachPOZOSTALIKASJERZYBANKOWIIPOKREWNI);
        Category::whereId('51')->first()->detailprojects()->attach($AttachPRACOWNIKINSTYTUCJIPOŻYCZKOWEJ);
        Category::whereId('52')->first()->detailprojects()->attach($AttachPRACOWNIKLOMBARDU);
        Category::whereId('54')->first()->detailprojects()->attach($AttachSPRZEDAWCANATARGOWISKUBAZARZE);
        Category::whereId('55')->first()->detailprojects()->attach($AttachSPRZEDAWCAOBWOŹNYZSAMOCHODUVANSELLER);
        Category::whereId('56')->first()->detailprojects()->attach($AttachULICZNISPRZEDAWCYŻYWNOŚCI);
        Category::whereId('57')->first()->detailprojects()->attach($AttachANTYKWARIUSZ);
        Category::whereId('58')->first()->detailprojects()->attach($AttachKIOSKARZ);
        Category::whereId('59')->first()->detailprojects()->attach($AttachEKSPEDIENTWSTACJIOBSŁUGIPOJAZDÓW);
        Category::whereId('60')->first()->detailprojects()->attach($AttachLICZARZ);
        Category::whereId('61')->first()->detailprojects()->attach($AttachULICZNISPRZEDAWCYPRODUKTÓW);
        Category::whereId('66')->first()->detailprojects()->attach($AttachPRACOWNIKCENTRUMELEKTRONICZNEJOBSŁUGIKLIENTA);
        Category::whereId('67')->first()->detailprojects()->attach($AttachPRACOWNICYCALLCENTER);
        Category::whereId('69')->first()->detailprojects()->attach($AttachANKIETER);
        Category::whereId('70')->first()->detailprojects()->attach($AttachTELEANKIETER);
        Category::whereId('71')->first()->detailprojects()->attach($AttachPOZOSTALIANKIETERZY);
        Category::whereId('72')->first()->detailprojects()->attach($AttachSPRZEDAWCANATELEFON);
        Category::whereId('73')->first()->detailprojects()->attach($AttachTELEMARKETER);
        Category::whereId('74')->first()->detailprojects()->attach($AttachTAJEMNICZYKLIENT);
        Category::whereId('75')->first()->detailprojects()->attach($AttachOPERATORCENTRALITELEFONICZNEJ);
        Category::whereId('76')->first()->detailprojects()->attach($AttachPOZOSTALIKONSULTANCI);
        Category::whereId('77')->first()->detailprojects()->attach($AttachASYSTENTUSŁUGTELEKOMUNIKACYJNYCH);
        Category::whereId('78')->first()->detailprojects()->attach($AttachDYSPOZYTORRADIOTAXI);
        Category::whereId('79')->first()->detailprojects()->attach($AttachOPERATORNUMERÓWALARMOWYCH);
    }
}
