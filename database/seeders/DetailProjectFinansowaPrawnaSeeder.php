<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectFinansowaPrawnaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $ANALITYCY_FINANSOWI = [
            [
                'id' => 9366,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analizy danych finansowych przedsiębiorstwa w celu zrozumienia aktualnej kondycji finansowej.',
                    'en' => 'Conducting financial data analysis of the company to understand its current financial condition.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9367,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów finansowych, takich jak bilanse, rachunki wyników i sprawozdania z przepływów pieniężnych.',
                    'en' => 'Preparing financial reports such as balance sheets, income statements, and cash flow statements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9368,
                'name' => json_encode([
                    'pl' => 'Analiza wskaźników finansowych, takich jak rentowność, płynność czy zadłużenie.',
                    'en' => 'Analyzing financial ratios such as profitability, liquidity, or debt.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9369,
                'name' => json_encode([
                    'pl' => 'Tworzenie prognoz przychodów, kosztów i innych kluczowych wskaźników finansowych.',
                    'en' => 'Creating forecasts for revenues, costs, and other key financial metrics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9370,
                'name' => json_encode([
                    'pl' => 'Modelowanie scenariuszy przyszłego rozwoju sytuacji finansowej przedsiębiorstwa.',
                    'en' => 'Modeling scenarios for the future development of the company’s financial situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9371,
                'name' => json_encode([
                    'pl' => 'Szacowanie potencjalnych ryzyk i możliwości finansowych na podstawie dostępnych danych oraz trendów rynkowych.',
                    'en' => 'Estimating potential risks and financial opportunities based on available data and market trends.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9372,
                'name' => json_encode([
                    'pl' => 'Opracowywanie budżetów rocznych, kwartalnych oraz miesięcznych.',
                    'en' => 'Developing annual, quarterly, and monthly budgets.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9373,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wykonania budżetu i analiza odchyleń od planowanych wartości.',
                    'en' => 'Monitoring budget execution and analyzing deviations from planned values.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9374,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi działami w celu optymalizacji kosztów oraz usprawnienia procesów budżetowania.',
                    'en' => 'Collaborating with other departments to optimize costs and improve budgeting processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9375,
                'name' => json_encode([
                    'pl' => 'Ocenianie opłacalności projektów inwestycyjnych i działalności operacyjnej.',
                    'en' => 'Evaluating the profitability of investment projects and operational activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9376,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analiz ROI (Return on Investment), NPV (Net Present Value) oraz IRR (Internal Rate of Return).',
                    'en' => 'Conducting ROI (Return on Investment), NPV (Net Present Value), and IRR (Internal Rate of Return) analyses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9377,
                'name' => json_encode([
                    'pl' => 'Rekomendowanie działań na podstawie analiz opłacalności, które mogą zwiększyć efektywność firmy.',
                    'en' => 'Recommending actions based on profitability analyses that can enhance the company’s efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9378,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie badań dotyczących sytuacji rynkowej, konkurentów oraz trendów branżowych.',
                    'en' => 'Conducting research on market conditions, competitors, and industry trends.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9379,
                'name' => json_encode([
                    'pl' => 'Monitorowanie działań konkurencji, analizowanie ich wyników finansowych i ocena wpływu na przedsiębiorstwo.',
                    'en' => 'Monitoring competitor activities, analyzing their financial results, and assessing the impact on the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9380,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów z analiz rynkowych i rekomendowanie strategii rynkowych na ich podstawie.',
                    'en' => 'Preparing reports from market analyses and recommending market strategies based on them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9381,
                'name' => json_encode([
                    'pl' => 'Tworzenie analiz i rekomendacji finansowych dla zarządu i innych kluczowych decydentów.',
                    'en' => 'Creating financial analyses and recommendations for the board and other key decision-makers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9382,
                'name' => json_encode([
                    'pl' => 'Prezentowanie wyników analiz oraz doradztwo w zakresie decyzji finansowych i strategicznych.',
                    'en' => 'Presenting analysis results and providing advice on financial and strategic decisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9383,
                'name' => json_encode([
                    'pl' => 'Dostarczanie informacji wspierających decyzje dotyczące inwestycji, akwizycji lub reorganizacji przedsiębiorstwa.',
                    'en' => 'Providing information to support decisions related to investments, acquisitions, or reorganization of the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9384,
                'name' => json_encode([
                    'pl' => 'Identyfikacja i ocena ryzyka finansowego związanego z projektami, inwestycjami i działalnością operacyjną.',
                    'en' => 'Identifying and assessing financial risks associated with projects, investments, and operational activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9385,
                'name' => json_encode([
                    'pl' => 'Opracowywanie strategii zarządzania ryzykiem, w tym metod jego minimalizacji.',
                    'en' => 'Developing risk management strategies, including methods for minimizing it.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9386,
                'name' => json_encode([
                    'pl' => 'Monitorowanie czynników zewnętrznych, takich jak zmiany stóp procentowych, inflacji czy kursów walutowych, które mogą wpływać na sytuację finansową przedsiębiorstwa.',
                    'en' => 'Monitoring external factors such as changes in interest rates, inflation, or currency exchange rates that may affect the company\'s financial situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9387,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie regularnych raportów finansowych i operacyjnych dla różnych interesariuszy.',
                    'en' => 'Preparing regular financial and operational reports for various stakeholders.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9388,
                'name' => json_encode([
                    'pl' => 'Tworzenie i aktualizacja modeli finansowych, które wspierają analizę i raportowanie.',
                    'en' => 'Creating and updating financial models that support analysis and reporting.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9389,
                'name' => json_encode([
                    'pl' => 'Utrzymanie dokładnych i kompletnych rejestrów danych finansowych oraz stosowanie standardów rachunkowości i raportowania.',
                    'en' => 'Maintaining accurate and complete records of financial data and applying accounting and reporting standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9390,
                'name' => json_encode([
                    'pl' => 'Optymalizacja procesów finansowych poprzez wdrażanie narzędzi analitycznych oraz automatyzację.',
                    'en' => 'Optimizing financial processes through the implementation of analytical tools and automation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9391,
                'name' => json_encode([
                    'pl' => 'Współpraca z działami IT i programistami w celu rozwijania narzędzi do przetwarzania i analizy danych.',
                    'en' => 'Collaborating with IT departments and programmers to develop tools for processing and analyzing data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9392,
                'name' => json_encode([
                    'pl' => 'Zwiększanie efektywności analizy finansowej i raportowania przy użyciu nowych technologii i oprogramowania.',
                    'en' => 'Increasing the efficiency of financial analysis and reporting using new technologies and software.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9393,
                'name' => json_encode([
                    'pl' => 'Pomoc w szkoleniu młodszych analityków oraz pracowników innych działów w zakresie analizy finansowej.',
                    'en' => 'Assisting in training junior analysts and staff from other departments in financial analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9394,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na pytania związane z analizą finansową i udzielanie wsparcia przy interpretacji danych.',
                    'en' => 'Answering questions related to financial analysis and providing support in data interpretation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9395,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie standardów pracy zespołu analitycznego oraz promowanie najlepszych praktyk analitycznych.',
                    'en' => 'Maintaining the work standards of the analytical team and promoting best analytical practices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $DORADCY_FINANSOWI_I_INWESTYCYJNI = [
            [
                'id' => 9396,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie dogłębnej analizy sytuacji finansowej klienta, w tym dochodów, wydatków, aktywów, zobowiązań oraz celów finansowych.',
                    'en' => 'Conducting an in-depth analysis of the client\'s financial situation, including income, expenses, assets, liabilities, and financial goals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9397,
                'name' => json_encode([
                    'pl' => 'Zbieranie informacji na temat preferencji klienta dotyczących ryzyka i horyzontu czasowego inwestycji.',
                    'en' => 'Collecting information on the client\'s risk preferences and investment time horizon.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9398,
                'name' => json_encode([
                    'pl' => 'Tworzenie pełnego profilu finansowego klienta, który stanowi podstawę dalszego doradztwa.',
                    'en' => 'Creating a complete financial profile for the client, which serves as the basis for further advice.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9399,
                'name' => json_encode([
                    'pl' => 'Opracowywanie indywidualnych planów finansowych, dostosowanych do potrzeb i celów klienta.',
                    'en' => 'Developing individual financial plans tailored to the client\'s needs and goals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9400,
                'name' => json_encode([
                    'pl' => 'Uwzględnianie w planach oszczędności, inwestycji, planowania emerytalnego oraz ochrony majątku.',
                    'en' => 'Incorporating savings, investments, retirement planning, and asset protection into the plans.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9401,
                'name' => json_encode([
                    'pl' => 'Regularne aktualizowanie planów finansowych w zależności od zmieniających się okoliczności życiowych lub rynkowych.',
                    'en' => 'Regularly updating financial plans according to changing life or market circumstances.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9402,
                'name' => json_encode([
                    'pl' => 'Przedstawianie klientom opcji inwestycyjnych dostosowanych do ich celów i akceptowanego poziomu ryzyka.',
                    'en' => 'Presenting clients with investment options tailored to their goals and acceptable risk levels.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9403,
                'name' => json_encode([
                    'pl' => 'Rekomendowanie odpowiednich produktów inwestycyjnych, takich jak akcje, obligacje, fundusze inwestycyjne, produkty strukturyzowane czy nieruchomości.',
                    'en' => 'Recommending appropriate investment products such as stocks, bonds, mutual funds, structured products, or real estate.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9404,
                'name' => json_encode([
                    'pl' => 'Śledzenie wyników inwestycji i dostosowywanie portfela w odpowiedzi na zmieniające się warunki rynkowe.',
                    'en' => 'Tracking investment performance and adjusting the portfolio in response to changing market conditions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9405,
                'name' => json_encode([
                    'pl' => 'Monitorowanie i zarządzanie portfelem inwestycyjnym klienta, zgodnie z ustalonymi strategiami i celami.',
                    'en' => 'Monitoring and managing the client\'s investment portfolio according to established strategies and goals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9406,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie regularnych przeglądów i raportowanie wyników inwestycyjnych klientowi.',
                    'en' => 'Conducting regular reviews and reporting investment results to the client.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9407,
                'name' => json_encode([
                    'pl' => 'Proaktywne dostosowywanie portfela, aby minimalizować ryzyko i maksymalizować zysk w ramach zdefiniowanych celów klienta.',
                    'en' => 'Proactively adjusting the portfolio to minimize risk and maximize profit within the defined goals of the client.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9408,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom w minimalizacji obciążeń podatkowych poprzez odpowiednie strategie inwestycyjne.',
                    'en' => 'Helping clients minimize tax burdens through appropriate investment strategies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9409,
                'name' => json_encode([
                    'pl' => 'Doradztwo w zakresie korzyści podatkowych związanych z określonymi inwestycjami (np. konta emerytalne, fundusze inwestycyjne).',
                    'en' => 'Advising on tax benefits related to specific investments (e.g. retirement accounts, mutual funds).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9410,
                'name' => json_encode([
                    'pl' => 'Śledzenie zmian w przepisach podatkowych i dostosowanie strategii klienta, aby wykorzystać dostępne ulgi i korzyści.',
                    'en' => 'Tracking changes in tax regulations and adjusting the client\'s strategy to take advantage of available deductions and benefits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9411,
                'name' => json_encode([
                    'pl' => 'Doradztwo w zakresie planowania emerytalnego, uwzględniające oczekiwane potrzeby finansowe i styl życia klienta.',
                    'en' => 'Advising on retirement planning, considering expected financial needs and lifestyle of the client.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9412,
                'name' => json_encode([
                    'pl' => 'Pomoc w wyborze najlepszych programów emerytalnych oraz monitorowanie ich wyników.',
                    'en' => 'Assisting in selecting the best retirement programs and monitoring their performance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9413,
                'name' => json_encode([
                    'pl' => 'Opracowanie strategii oszczędnościowych i inwestycyjnych, które zapewnią odpowiednie fundusze na emeryturę.',
                    'en' => 'Developing saving and investment strategies that ensure sufficient funds for retirement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9414,
                'name' => json_encode([
                    'pl' => 'Pomoc w wyborze produktów ochronnych, takich jak ubezpieczenia na życie, zdrowotne, majątkowe czy ubezpieczenia od utraty dochodów.',
                    'en' => 'Assisting in selecting protective products, such as life insurance, health insurance, property insurance, or income protection insurance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9415,
                'name' => json_encode([
                    'pl' => 'Analiza ryzyka finansowego i rekomendowanie działań, które zminimalizują potencjalne straty klienta.',
                    'en' => 'Analyzing financial risks and recommending actions that minimize the client\'s potential losses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9416,
                'name' => json_encode([
                    'pl' => 'Wdrażanie strategii zabezpieczających majątek klienta przed nieprzewidzianymi wydarzeniami.',
                    'en' => 'Implementing strategies to protect the client\'s assets against unforeseen events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9417,
                'name' => json_encode([
                    'pl' => 'Przekazywanie klientom wiedzy na temat zasad rynków finansowych, produktów inwestycyjnych oraz ogólnych strategii finansowych.',
                    'en' => 'Providing clients with knowledge about the principles of financial markets, investment products, and general financial strategies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9418,
                'name' => json_encode([
                    'pl' => 'Organizowanie sesji edukacyjnych lub warsztatów, które pomagają klientom lepiej zrozumieć swoje finanse.',
                    'en' => 'Organizing educational sessions or workshops that help clients better understand their finances.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9419,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na pytania klientów i rozwiewanie ich wątpliwości dotyczących strategii inwestycyjnych i finansowych.',
                    'en' => 'Answering client questions and dispelling their doubts regarding investment and financial strategies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9420,
                'name' => json_encode([
                    'pl' => 'Regularne spotkania z klientami w celu omawiania wyników finansowych, zmian w ich życiu oraz dostosowywania strategii finansowych.',
                    'en' => 'Regular meetings with clients to discuss financial results, changes in their lives, and adjusting financial strategies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9421,
                'name' => json_encode([
                    'pl' => 'Budowanie zaufania i zapewnianie klientom wsparcia w każdej sytuacji finansowej.',
                    'en' => 'Building trust and providing clients with support in every financial situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9422,
                'name' => json_encode([
                    'pl' => 'Personalizowanie podejścia i dostosowywanie usług do indywidualnych potrzeb i preferencji klienta.',
                    'en' => 'Personalizing the approach and tailoring services to the individual needs and preferences of the client.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9423,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie obowiązujących przepisów prawnych oraz standardów etycznych i regulacyjnych.',
                    'en' => 'Complying with applicable legal regulations as well as ethical and regulatory standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9424,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie licencji zawodowych i uczestnictwo w szkoleniach oraz kursach z zakresu przepisów i etyki.',
                    'en' => 'Maintaining professional licenses and participating in training and courses on regulations and ethics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9425,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o wszystkich opłatach, ryzykach i warunkach związanych z proponowanymi inwestycjami.',
                    'en' => 'Informing clients about all fees, risks, and conditions associated with proposed investments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9426,
                'name' => json_encode([
                    'pl' => 'Tworzenie i aktualizowanie dokumentacji dotyczącej rekomendacji finansowych oraz działań inwestycyjnych.',
                    'en' => 'Creating and updating documentation regarding financial recommendations and investment activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9427,
                'name' => json_encode([
                    'pl' => 'Opracowywanie raportów z wynikami portfela, zawierających kluczowe wskaźniki oraz postępy w realizacji celów klienta.',
                    'en' => 'Developing reports on portfolio performance, including key metrics and progress toward client goals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9428,
                'name' => json_encode([
                    'pl' => 'Archiwizacja dokumentów związanych z obsługą klienta, zgodnie z wymogami prawnymi i wewnętrznymi regulacjami.',
                    'en' => 'Archiving documents related to client service in accordance with legal requirements and internal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9429,
                'name' => json_encode([
                    'pl' => 'Śledzenie bieżących wydarzeń gospodarczych, politycznych i rynkowych, które mogą wpłynąć na inwestycje klientów.',
                    'en' => 'Keeping track of current economic, political, and market events that may affect clients\' investments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9430,
                'name' => json_encode([
                    'pl' => 'Analizowanie trendów branżowych i przewidywanie ich wpływu na różne sektory inwestycyjne.',
                    'en' => 'Analyzing industry trends and forecasting their impact on various investment sectors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9431,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie wiedzy na temat nowoczesnych narzędzi finansowych, produktów inwestycyjnych i technologii wspierających doradztwo.',
                    'en' => 'Keeping up-to-date with modern financial tools, investment products, and technologies supporting advisory services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $DEALERZY_I_MAKLERZY_AKTYWÓW_FINANSOWYCH = [
            [
                'id' => 9432,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie transakcji kupna i sprzedaży aktywów finansowych, takich jak akcje, obligacje, waluty, instrumenty pochodne czy towary.',
                    'en' => 'Conducting transactions for buying and selling financial assets such as stocks, bonds, currencies, derivatives, and commodities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9433,
                'name' => json_encode([
                    'pl' => 'Egzekucja zleceń klientów zgodnie z ich preferencjami co do ceny, ilości i innych warunków transakcji.',
                    'en' => 'Executing client orders according to their preferences regarding price, quantity, and other transaction conditions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9434,
                'name' => json_encode([
                    'pl' => 'Dbanie o płynność rynku poprzez wystawianie ofert kupna i sprzedaży (zwłaszcza w przypadku dealerów).',
                    'en' => 'Ensuring market liquidity by providing buy and sell offers (especially in the case of dealers).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9435,
                'name' => json_encode([
                    'pl' => 'Oferowanie rekomendacji inwestycyjnych dla klientów na podstawie analiz rynkowych i indywidualnych strategii inwestycyjnych.',
                    'en' => 'Providing investment recommendations for clients based on market analysis and individual investment strategies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9436,
                'name' => json_encode([
                    'pl' => 'Edukowanie klientów na temat ryzyka związanego z inwestycjami i sugerowanie opcji, które są zgodne z ich profilem ryzyka.',
                    'en' => 'Educating clients about the risks associated with investments and suggesting options that align with their risk profile.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9437,
                'name' => json_encode([
                    'pl' => 'Współpraca z klientami w zakresie ustalania strategii zarządzania portfelem oraz jego dostosowywania do zmieniających się warunków rynkowych.',
                    'en' => 'Collaborating with clients to establish portfolio management strategies and adjusting them to changing market conditions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9438,
                'name' => json_encode([
                    'pl' => 'Śledzenie bieżących trendów na rynkach finansowych, takich jak zmiany kursów, stopy procentowe, ceny surowców czy polityki banków centralnych.',
                    'en' => 'Tracking current trends in financial markets, such as price changes, interest rates, commodity prices, and central bank policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9439,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analiz technicznych i fundamentalnych, aby przewidywać przyszłe ruchy cenowe aktywów.',
                    'en' => 'Conducting technical and fundamental analyses to predict future price movements of assets.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9440,
                'name' => json_encode([
                    'pl' => 'Reagowanie na istotne wiadomości ekonomiczne oraz wydarzenia polityczne, które mogą wpłynąć na wartość aktywów.',
                    'en' => 'Responding to significant economic news and political events that may affect asset values.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9441,
                'name' => json_encode([
                    'pl' => 'Tworzenie rynku poprzez wystawianie ofert kupna i sprzedaży dla określonych aktywów finansowych, co ułatwia zawieranie transakcji innym uczestnikom rynku.',
                    'en' => 'Creating a market by providing buy and sell offers for specific financial assets, facilitating transactions for other market participants.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9442,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie wystarczającej ilości aktywów, aby być w stanie zaspokoić zapotrzebowanie klientów na zakup lub sprzedaż.',
                    'en' => 'Maintaining sufficient assets to meet client demand for buying or selling.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9443,
                'name' => json_encode([
                    'pl' => 'Działanie jako pośrednik między kupującymi a sprzedającymi, minimalizując spread między cenami kupna a sprzedaży.',
                    'en' => 'Acting as an intermediary between buyers and sellers, minimizing the spread between buying and selling prices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9444,
                'name' => json_encode([
                    'pl' => 'Monitorowanie ryzyka związanego z transakcjami, w tym ryzyka rynkowego, kredytowego oraz ryzyka płynności.',
                    'en' => 'Monitoring transaction-related risks, including market risk, credit risk, and liquidity risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9445,
                'name' => json_encode([
                    'pl' => 'Stosowanie strategii zabezpieczających, takich jak hedging, w celu minimalizacji ryzyka utraty wartości aktywów.',
                    'en' => 'Implementing hedging strategies to minimize the risk of asset depreciation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9446,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie pozycji rynkowych zgodnie z aktualnymi warunkami, aby utrzymać odpowiedni poziom ekspozycji na ryzyko.',
                    'en' => 'Adjusting market positions based on current conditions to maintain the appropriate level of risk exposure.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9447,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom w tworzeniu i zarządzaniu portfelami inwestycyjnymi, dostosowanymi do ich celów finansowych i poziomu ryzyka.',
                    'en' => 'Assisting clients in creating and managing investment portfolios tailored to their financial goals and risk levels.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9448,
                'name' => json_encode([
                    'pl' => 'Regularna ocena wyników portfela oraz rekomendowanie ewentualnych zmian w strukturze inwestycji.',
                    'en' => 'Regularly evaluating portfolio performance and recommending any necessary changes to the investment structure.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9449,
                'name' => json_encode([
                    'pl' => 'Tworzenie strategii dywersyfikacji aktywów w celu minimalizacji ryzyka portfela klienta.',
                    'en' => 'Creating asset diversification strategies to minimize the client\'s portfolio risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9450,
                'name' => json_encode([
                    'pl' => 'Obsługa platform handlowych oraz narzędzi analitycznych służących do analizy i realizacji transakcji.',
                    'en' => 'Operating trading platforms and analytical tools used for analyzing and executing transactions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9451,
                'name' => json_encode([
                    'pl' => 'Korzystanie z zaawansowanych narzędzi do monitorowania rynku w czasie rzeczywistym i natychmiastowego reagowania na zmiany.',
                    'en' => 'Using advanced tools for real-time market monitoring and immediate response to changes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9452,
                'name' => json_encode([
                    'pl' => 'Używanie narzędzi do modelowania ryzyka, które pomagają w podejmowaniu decyzji inwestycyjnych oraz zarządzaniu ryzykiem.',
                    'en' => 'Using risk modeling tools to assist in making investment decisions and managing risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9453,
                'name' => json_encode([
                    'pl' => 'Opracowywanie raportów na temat wyników inwestycyjnych dla klientów oraz instytucji, dla której pracują.',
                    'en' => 'Developing reports on investment performance for clients and the institution for which they work.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9454,
                'name' => json_encode([
                    'pl' => 'Tworzenie szczegółowych raportów z wyników transakcji, zawierających analizę zysków, strat i odchyleń od założonych celów.',
                    'en' => 'Creating detailed reports on transaction results, including analysis of profits, losses, and deviations from set goals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9455,
                'name' => json_encode([
                    'pl' => 'Regularne raportowanie o wynikach portfela oraz rekomendowanie działań korygujących na podstawie wyników analizy.',
                    'en' => 'Regularly reporting on portfolio performance and recommending corrective actions based on analysis results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9456,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów i regulacji obowiązujących na rynku finansowym, takich jak przepisy dotyczące przeciwdziałania praniu pieniędzy i nadużyciom finansowym.',
                    'en' => 'Complying with regulations and rules in the financial market, such as anti-money laundering and financial abuse regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9457,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie licencji zawodowych oraz uczestnictwo w szkoleniach i kursach związanych z przepisami rynku kapitałowego.',
                    'en' => 'Maintaining professional licenses and participating in training and courses related to capital market regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9458,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności działań handlowych z polityką i procedurami instytucji finansowej.',
                    'en' => 'Ensuring compliance of trading activities with the policies and procedures of the financial institution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9459,
                'name' => json_encode([
                    'pl' => 'Współpraca z działami ryzyka, analitycznymi, compliance oraz IT w celu wspólnego realizowania celów instytucji.',
                    'en' => 'Collaborating with risk, analytical, compliance, and IT departments to jointly achieve the institution\'s goals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9460,
                'name' => json_encode([
                    'pl' => 'Informowanie zarządu oraz działu finansowego o potencjalnych zagrożeniach i szansach rynkowych.',
                    'en' => 'Informing management and the finance department about potential market threats and opportunities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9461,
                'name' => json_encode([
                    'pl' => 'Współdziałanie z analitykami finansowymi i ekonomistami w celu uzyskania informacji potrzebnych do podejmowania trafnych decyzji inwestycyjnych.',
                    'en' => 'Collaborating with financial analysts and economists to obtain information necessary for making informed investment decisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9462,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie regularnego kontaktu z klientami i informowanie ich o wynikach oraz o sytuacji na rynku.',
                    'en' => 'Maintaining regular contact with clients and informing them about results and market conditions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9463,
                'name' => json_encode([
                    'pl' => 'Budowanie długoterminowych relacji z klientami, zapewniając im profesjonalne wsparcie i doradztwo.',
                    'en' => 'Building long-term relationships with clients by providing them with professional support and advice.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9464,
                'name' => json_encode([
                    'pl' => 'Udzielanie szybkich odpowiedzi na zapytania klientów oraz rozwiązywanie ich problemów związanych z inwestycjami.',
                    'en' => 'Providing quick responses to client inquiries and resolving their investment-related issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9465,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach, seminariach i kursach, aby pozostać na bieżąco z nowymi trendami, technologiami i przepisami.',
                    'en' => 'Regularly participating in training, seminars, and courses to stay updated on new trends, technologies, and regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9466,
                'name' => json_encode([
                    'pl' => 'Rozwijanie umiejętności analitycznych oraz doskonalenie znajomości rynku, aby zwiększyć efektywność działań handlowych.',
                    'en' => 'Developing analytical skills and improving market knowledge to enhance the effectiveness of trading activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9467,
                'name' => json_encode([
                    'pl' => 'Śledzenie nowości technologicznych i adaptowanie ich do pracy, by usprawnić procesy inwestycyjne i transakcyjne.',
                    'en' => 'Keeping up with technological advancements and adapting them to work to streamline investment and transactional processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9468,
                'name' => json_encode([
                    'pl' => 'Regularna analiza wyników i efektywności przeprowadzanych transakcji oraz identyfikowanie obszarów do poprawy.',
                    'en' => 'Regularly analyzing the results and effectiveness of transactions conducted and identifying areas for improvement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9469,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie strategii handlowych, aby osiągać lepsze wyniki finansowe dla klientów lub instytucji.',
                    'en' => 'Adjusting trading strategies to achieve better financial results for clients or institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9470,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analizy ryzyka i zyskowności oraz ocenianie efektywności portfela lub instrumentów inwestycyjnych.',
                    'en' => 'Conducting risk and profitability analysis and evaluating the effectiveness of the portfolio or investment instruments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNICY_DO_SPRAW_KREDYTÓW_POŻYCZEK_I_POKREWNI = [
            [
                'id' => 9471,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie szczegółowej analizy zdolności kredytowej klienta, oceniając jego historię finansową, dochody, zobowiązania i inne czynniki.',
                    'en' => 'Conducting a detailed analysis of the client\'s creditworthiness, assessing their financial history, income, liabilities, and other factors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9472,
                'name' => json_encode([
                    'pl' => 'Wykorzystywanie różnych narzędzi i wskaźników do oceny ryzyka kredytowego oraz przygotowywanie raportów.',
                    'en' => 'Utilizing various tools and indicators to assess credit risk and preparing reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9473,
                'name' => json_encode([
                    'pl' => 'Określanie maksymalnej kwoty kredytu lub pożyczki, na którą klient może sobie pozwolić.',
                    'en' => 'Determining the maximum loan or credit amount that the client can afford.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9474,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie wniosków kredytowych i pożyczkowych od klientów, w tym zbieranie dokumentacji wymaganej przez instytucję.',
                    'en' => 'Receiving loan and credit applications from clients, including collecting documentation required by the institution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9475,
                'name' => json_encode([
                    'pl' => 'Weryfikacja kompletności oraz prawidłowości wniosków i załączonych dokumentów, takich jak zaświadczenia o zarobkach czy raporty kredytowe.',
                    'en' => 'Verifying the completeness and accuracy of applications and attached documents, such as income certificates or credit reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9476,
                'name' => json_encode([
                    'pl' => 'Ocena autentyczności i rzetelności danych dostarczonych przez klienta.',
                    'en' => 'Assessing the authenticity and reliability of the data provided by the client.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9477,
                'name' => json_encode([
                    'pl' => 'Analiza ryzyka związanego z udzieleniem kredytu, biorąc pod uwagę historię kredytową, rating kredytowy oraz inne wskaźniki ryzyka.',
                    'en' => 'Analyzing the risk associated with granting a loan, considering credit history, credit rating, and other risk indicators.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9478,
                'name' => json_encode([
                    'pl' => 'Korzystanie z modeli ryzyka oraz systemów scoringowych do obiektywnej oceny wniosków kredytowych.',
                    'en' => 'Using risk models and scoring systems for an objective assessment of credit applications.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9479,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analiz sytuacji finansowej klienta w kontekście jego stabilności finansowej oraz potencjalnych zagrożeń.',
                    'en' => 'Conducting analyses of the client\'s financial situation in the context of their financial stability and potential risks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9480,
                'name' => json_encode([
                    'pl' => 'Udzielanie klientom informacji na temat różnych produktów kredytowych i pożyczkowych, takich jak kredyty hipoteczne, gotówkowe, konsumpcyjne czy inwestycyjne.',
                    'en' => 'Providing clients with information about various credit and loan products, such as mortgages, personal loans, consumer loans, or investment loans.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9481,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom w wyborze odpowiedniego produktu kredytowego dopasowanego do ich potrzeb i sytuacji finansowej.',
                    'en' => 'Assisting clients in choosing the right credit product tailored to their needs and financial situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9482,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie szczegółów umowy kredytowej, w tym oprocentowania, kosztów i warunków spłaty, aby klienci mogli podjąć świadomą decyzję.',
                    'en' => 'Explaining the details of the loan agreement, including interest rates, costs, and repayment terms, so clients can make an informed decision.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9483,
                'name' => json_encode([
                    'pl' => 'Sporządzanie dokumentacji kredytowej, takiej jak umowy, aneksy, harmonogramy spłat oraz oświadczenia o zgodzie na warunki kredytu.',
                    'en' => 'Preparing loan documentation such as contracts, annexes, repayment schedules, and statements of consent to loan terms.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9484,
                'name' => json_encode([
                    'pl' => 'Dopilnowanie, aby umowy kredytowe były zgodne z regulacjami prawnymi i wewnętrznymi standardami instytucji.',
                    'en' => 'Ensuring that loan agreements comply with legal regulations and the institution\'s internal standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9485,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie klientom warunków umowy i odbieranie ich podpisów oraz zgód wymaganych prawnie.',
                    'en' => 'Explaining the terms of the agreement to clients and obtaining their signatures and legally required consents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9486,
                'name' => json_encode([
                    'pl' => 'Śledzenie terminowości spłat klientów oraz identyfikowanie ewentualnych opóźnień.',
                    'en' => 'Monitoring clients\' repayment timeliness and identifying any delays.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9487,
                'name' => json_encode([
                    'pl' => 'Kontakt z klientami w celu przypomnienia o terminach spłat lub ustalania nowych warunków spłaty w przypadku problemów finansowych.',
                    'en' => 'Contacting clients to remind them of repayment deadlines or to establish new repayment terms in case of financial difficulties.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9488,
                'name' => json_encode([
                    'pl' => 'Informowanie działu windykacji o konieczności interwencji w przypadku dłuższych opóźnień w spłacie.',
                    'en' => 'Informing the collection department of the need for intervention in case of prolonged repayment delays.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9489,
                'name' => json_encode([
                    'pl' => 'Analiza i monitorowanie ryzyka związanego z portfelem kredytowym, aby zapobiec nadmiernemu ryzyku w portfelu instytucji.',
                    'en' => 'Analyzing and monitoring the risk associated with the credit portfolio to prevent excessive risk in the institution\'s portfolio.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9490,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie procedur mających na celu minimalizację ryzyka kredytowego, takich jak wymagania dotyczące zabezpieczeń lub dodatkowych poręczycieli.',
                    'en' => 'Implementing procedures to minimize credit risk, such as requirements for collateral or additional guarantors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9491,
                'name' => json_encode([
                    'pl' => 'Identyfikowanie i monitorowanie klientów wysokiego ryzyka oraz rekomendowanie działań naprawczych.',
                    'en' => 'Identifying and monitoring high-risk clients and recommending corrective actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9492,
                'name' => json_encode([
                    'pl' => 'Archiwizacja wszystkich dokumentów kredytowych zgodnie z wymogami prawnymi i wewnętrznymi regulacjami.',
                    'en' => 'Archiving all credit documents in accordance with legal requirements and internal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9493,
                'name' => json_encode([
                    'pl' => 'Upewnienie się, że wszystkie dokumenty są kompletne i prawidłowo zarejestrowane w systemach finansowych.',
                    'en' => 'Ensuring that all documents are complete and correctly registered in financial systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9494,
                'name' => json_encode([
                    'pl' => 'Przechowywanie dokumentacji w sposób bezpieczny, zgodny z zasadami ochrony danych osobowych i polityką prywatności.',
                    'en' => 'Storing documentation securely, in accordance with personal data protection principles and privacy policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9495,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów prawa, w tym Ustawy o kredycie konsumenckim, ustawy AML (przeciwdziałanie praniu pieniędzy) i zasad ochrony danych osobowych.',
                    'en' => 'Complying with legal regulations, including the Consumer Credit Act, AML (anti-money laundering) regulations, and personal data protection principles.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9496,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zgodności procesów kredytowych z wewnętrznymi politykami i procedurami instytucji.',
                    'en' => 'Monitoring compliance of credit processes with the institution\'s internal policies and procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9497,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad etyki zawodowej, aby zapewnić przejrzystość i uczciwość w relacjach z klientami.',
                    'en' => 'Adhering to professional ethics to ensure transparency and fairness in relationships with clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9498,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o odpowiedzialnym zarządzaniu zobowiązaniami finansowymi i zasadach korzystania z kredytów.',
                    'en' => 'Informing clients about responsible management of financial obligations and the principles of using loans.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9499,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji na temat konsekwencji opóźnień w spłacie kredytu i wysokiego zadłużenia.',
                    'en' => 'Providing information about the consequences of late loan repayments and high debt levels.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9500,
                'name' => json_encode([
                    'pl' => 'Edukowanie klientów o możliwościach refinansowania lub konsolidacji zadłużenia.',
                    'en' => 'Educating clients about options for refinancing or consolidating debt.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9501,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie wiedzy o nowych produktach kredytowych oraz zmianach w warunkach kredytowych oferowanych przez instytucję.',
                    'en' => 'Maintaining knowledge of new credit products and changes in the lending conditions offered by the institution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9502,
                'name' => json_encode([
                    'pl' => 'Regularna aktualizacja wiedzy na temat stóp procentowych, nowych zasad regulacyjnych i trendów na rynku kredytowym.',
                    'en' => 'Regularly updating knowledge about interest rates, new regulatory rules, and trends in the credit market.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9503,
                'name' => json_encode([
                    'pl' => 'Przekazywanie klientom informacji o możliwościach refinansowania lub korzystnych zmianach w ofercie.',
                    'en' => 'Providing clients with information about refinancing options or favorable changes in the offer.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9504,
                'name' => json_encode([
                    'pl' => 'Tworzenie i utrzymywanie długoterminowych relacji z klientami, aby budować zaufanie i lojalność.',
                    'en' => 'Creating and maintaining long-term relationships with clients to build trust and loyalty.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9505,
                'name' => json_encode([
                    'pl' => 'Regularny kontakt z klientami w celu monitorowania ich sytuacji finansowej oraz oferowania nowych rozwiązań kredytowych.',
                    'en' => 'Regular contact with clients to monitor their financial situation and offer new credit solutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9506,
                'name' => json_encode([
                    'pl' => 'Rozwijanie sieci kontaktów poprzez budowanie pozytywnego wizerunku instytucji.',
                    'en' => 'Developing a network of contacts by building a positive image of the institution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9507,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem windykacji w celu skutecznego zarządzania niespłaconymi zobowiązaniami kredytowymi.',
                    'en' => 'Cooperating with the collection department to effectively manage unpaid credit obligations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9508,
                'name' => json_encode([
                    'pl' => 'Koordynacja z działem prawnym w zakresie interpretacji umów oraz przepisów prawa.',
                    'en' => 'Coordinating with the legal department regarding the interpretation of contracts and legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9509,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem marketingu przy tworzeniu i promocji nowych ofert kredytowych.',
                    'en' => 'Cooperating with the marketing department in creating and promoting new loan offers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9510,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach i kursach z zakresu kredytów, analizy ryzyka i przepisów prawa finansowego.',
                    'en' => 'Regularly participating in training and courses on credit, risk analysis, and financial law regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9511,
                'name' => json_encode([
                    'pl' => 'Śledzenie zmian w przepisach, które mogą wpłynąć na warunki kredytowe lub procedury związane z udzielaniem kredytów.',
                    'en' => 'Tracking changes in regulations that may affect credit conditions or procedures related to granting loans.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9512,
                'name' => json_encode([
                    'pl' => 'Rozwijanie umiejętności interpersonalnych, aby lepiej komunikować się z klientami i budować pozytywne relacje.',
                    'en' => 'Developing interpersonal skills to better communicate with clients and build positive relationships.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $biegly_rewident = [
            [
                'id' => 9513,
                'name' => json_encode([
                    'pl' => 'Dokonywanie niezależnej oceny sprawozdań finansowych firm i instytucji, takich jak bilanse, rachunki wyników i przepływy pieniężne.',
                    'en' => 'Conducting independent assessments of financial statements of companies and institutions, such as balance sheets, income statements, and cash flows.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9514,
                'name' => json_encode([
                    'pl' => 'Weryfikacja rzetelności i zgodności sprawozdań finansowych z obowiązującymi standardami rachunkowości (np. Międzynarodowe Standardy Sprawozdawczości Finansowej, Krajowe Standardy Rachunkowości).',
                    'en' => 'Verifying the reliability and compliance of financial statements with applicable accounting standards (e.g. International Financial Reporting Standards, National Accounting Standards).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9515,
                'name' => json_encode([
                    'pl' => 'Identyfikacja i analiza potencjalnych nieprawidłowości lub błędów w raportach finansowych.',
                    'en' => 'Identifying and analyzing potential irregularities or errors in financial reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9516,
                'name' => json_encode([
                    'pl' => 'Badanie wewnętrznych procesów i systemów kontroli firmy, aby ocenić ich skuteczność i zgodność z przepisami.',
                    'en' => 'Examining internal processes and control systems of the company to assess their effectiveness and compliance with regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9517,
                'name' => json_encode([
                    'pl' => 'Ocena ryzyka związanego z procesami finansowymi, w tym ryzyka oszustw i błędów.',
                    'en' => 'Assessing the risks associated with financial processes, including fraud and error risks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9518,
                'name' => json_encode([
                    'pl' => 'Wydawanie zaleceń dotyczących poprawy kontroli wewnętrznej i minimalizacji ryzyka finansowego.',
                    'en' => 'Issuing recommendations for improving internal control and minimizing financial risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9519,
                'name' => json_encode([
                    'pl' => 'Sporządzanie szczegółowych raportów audytowych, zawierających wyniki audytu oraz opinie dotyczące sytuacji finansowej przedsiębiorstwa.',
                    'en' => 'Preparing detailed audit reports containing audit results and opinions on the financial situation of the enterprise.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9520,
                'name' => json_encode([
                    'pl' => 'Wskazywanie obszarów wymagających poprawy oraz zaleceń w celu zwiększenia dokładności i przejrzystości finansowej.',
                    'en' => 'Identifying areas for improvement and recommendations to enhance accuracy and transparency in financial reporting.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9521,
                'name' => json_encode([
                    'pl' => 'Przedstawianie opinii biegłego rewidenta, która może mieć postać opinii bez zastrzeżeń, z zastrzeżeniami, negatywnej lub odmowy wydania opinii.',
                    'en' => 'Presenting the auditor\'s opinion, which may take the form of an unqualified opinion, qualified opinion, adverse opinion, or disclaimer of opinion.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9522,
                'name' => json_encode([
                    'pl' => 'Weryfikacja zgodności działań i procedur księgowych firmy z obowiązującymi przepisami prawnymi oraz standardami rachunkowości.',
                    'en' => 'Verifying the compliance of the company\'s accounting actions and procedures with applicable legal regulations and accounting standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9523,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów dotyczących sprawozdawczości finansowej, przepisów podatkowych oraz regulacji dotyczących audytów.',
                    'en' => 'Complying with regulations regarding financial reporting, tax regulations, and audit regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9524,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zmian w przepisach prawa finansowego i dostosowywanie praktyk audytowych do aktualnych regulacji.',
                    'en' => 'Monitoring changes in financial law and adjusting audit practices to current regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9525,
                'name' => json_encode([
                    'pl' => 'Analiza ryzyka związanego z działalnością finansową firmy, w tym ryzyka kredytowego, rynkowego i operacyjnego.',
                    'en' => 'Analyzing risks associated with the company\'s financial activities, including credit risk, market risk, and operational risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9526,
                'name' => json_encode([
                    'pl' => 'Ocenianie ryzyka związanego z oszustwami finansowymi oraz podejmowanie działań w celu ich minimalizacji.',
                    'en' => 'Assessing risks related to financial fraud and taking action to minimize them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9527,
                'name' => json_encode([
                    'pl' => 'Opracowywanie strategii audytowych dostosowanych do specyfiki działalności przedsiębiorstwa, aby dokładnie oszacować poziom ryzyka.',
                    'en' => 'Developing audit strategies tailored to the specifics of the enterprise\'s operations to accurately assess risk levels.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9528,
                'name' => json_encode([
                    'pl' => 'Udzielanie rekomendacji dotyczących poprawy procesów księgowych i finansowych, zgodnie z najlepszymi praktykami rynkowymi.',
                    'en' => 'Providing recommendations for improving accounting and financial processes in accordance with market best practices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9529,
                'name' => json_encode([
                    'pl' => 'Wsparcie przy interpretacji skomplikowanych przepisów rachunkowych i podatkowych.',
                    'en' => 'Supporting the interpretation of complex accounting and tax regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9530,
                'name' => json_encode([
                    'pl' => 'Doradztwo w zakresie poprawy wydajności finansowej i operacyjnej oraz pomocy w osiąganiu lepszej kontroli finansowej.',
                    'en' => 'Advising on improving financial and operational efficiency and assisting in achieving better financial control.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9531,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie zgodności danych finansowych z rzeczywistością, co obejmuje weryfikację dokumentów źródłowych i zapisów księgowych.',
                    'en' => 'Verifying the compliance of financial data with reality, including verifying source documents and accounting records.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9532,
                'name' => json_encode([
                    'pl' => 'Testowanie dokładności transakcji finansowych i ich zgodności z przyjętymi standardami rachunkowości.',
                    'en' => 'Testing the accuracy of financial transactions and their compliance with accepted accounting standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9533,
                'name' => json_encode([
                    'pl' => 'Ocena wiarygodności raportów finansowych, aby zapewnić, że inwestorzy i interesariusze mają pełny obraz sytuacji finansowej firmy.',
                    'en' => 'Evaluating the credibility of financial reports to ensure that investors and stakeholders have a complete picture of the company\'s financial situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9534,
                'name' => json_encode([
                    'pl' => 'Kontrola dokumentacji księgowej firmy, w tym faktur, wyciągów bankowych, dokumentów kosztowych i innych.',
                    'en' => 'Controlling the company\'s accounting documentation, including invoices, bank statements, cost documents, and others.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9535,
                'name' => json_encode([
                    'pl' => 'Weryfikacja poprawności deklaracji podatkowych i zgodności z obowiązującymi przepisami podatkowymi.',
                    'en' => 'Verifying the accuracy of tax declarations and compliance with applicable tax regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9536,
                'name' => json_encode([
                    'pl' => 'Upewnienie się, że wszystkie transakcje są odpowiednio udokumentowane i zaksięgowane w sposób przejrzysty.',
                    'en' => 'Ensuring that all transactions are properly documented and recorded in a transparent manner.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9537,
                'name' => json_encode([
                    'pl' => 'Regularna komunikacja z zarządem firmy oraz działem finansowym, w celu uzyskania niezbędnych informacji do przeprowadzenia audytu.',
                    'en' => 'Regular communication with the company\'s management and finance department to obtain the necessary information for conducting the audit.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9538,
                'name' => json_encode([
                    'pl' => 'Omawianie wyników audytu oraz sugerowanie usprawnień w procesach finansowych.',
                    'en' => 'Discussing audit results and suggesting improvements in financial processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9539,
                'name' => json_encode([
                    'pl' => 'Doradzanie zarządowi w sprawach dotyczących zgodności finansowej oraz sposobów na minimalizację ryzyka.',
                    'en' => 'Advising management on compliance-related financial matters and ways to minimize risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9540,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie rozmów z kluczowymi pracownikami działu księgowego, finansowego i innych działów, aby zdobyć informacje o procedurach i procesach wewnętrznych.',
                    'en' => 'Conducting interviews with key employees of the accounting, finance, and other departments to gather information about internal procedures and processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9541,
                'name' => json_encode([
                    'pl' => 'Pozyskiwanie informacji o procesach operacyjnych i ryzykach bezpośrednio od pracowników.',
                    'en' => 'Gathering information about operational processes and risks directly from employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9542,
                'name' => json_encode([
                    'pl' => 'Analiza zgodności działania poszczególnych pracowników z przyjętymi standardami i politykami firmy.',
                    'en' => 'Analyzing the compliance of individual employees\' actions with the accepted standards and policies of the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9543,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie wysokich standardów etycznych, w tym zachowanie poufności informacji uzyskanych podczas audytu.',
                    'en' => 'Adhering to high ethical standards, including maintaining confidentiality of information obtained during the audit.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9544,
                'name' => json_encode([
                    'pl' => 'Dbanie o bezstronność i obiektywizm w pracy audytowej, aby wydane opinie były wiarygodne i niezależne.',
                    'en' => 'Ensuring impartiality and objectivity in the audit work so that issued opinions are credible and independent.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9545,
                'name' => json_encode([
                    'pl' => 'Unikanie konfliktów interesów oraz przyjmowania działań, które mogłyby wpłynąć na wyniki audytu.',
                    'en' => 'Avoiding conflicts of interest and accepting actions that could affect the results of the audit.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9546,
                'name' => json_encode([
                    'pl' => 'Weryfikacja zgodności wartości majątku wykazywanego w księgach rachunkowych z rzeczywistym stanem.',
                    'en' => 'Verifying the compliance of the value of assets recorded in the accounting books with the actual state.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9547,
                'name' => json_encode([
                    'pl' => 'Kontrola aktywów trwałych, zapasów, środków pieniężnych oraz innych składników majątkowych.',
                    'en' => 'Controlling fixed assets, inventories, cash resources, and other asset components.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9548,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie zasadności i prawidłowości wyceny aktywów oraz ujawniania ich w sprawozdaniach finansowych.',
                    'en' => 'Checking the justification and accuracy of asset valuation and their disclosure in financial statements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9549,
                'name' => json_encode([
                    'pl' => 'Weryfikacja i analiza kosztów ponoszonych przez przedsiębiorstwo, w tym ich zasadności i zgodności z budżetem.',
                    'en' => 'Verifying and analyzing costs incurred by the enterprise, including their justification and compliance with the budget.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9550,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie, czy koszty są prawidłowo przypisywane do odpowiednich centrów kosztowych i odpowiednio klasyfikowane.',
                    'en' => 'Checking if costs are correctly assigned to the appropriate cost centers and properly classified.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9551,
                'name' => json_encode([
                    'pl' => 'Identyfikacja możliwości optymalizacji kosztów i wydatków w celu zwiększenia efektywności operacyjnej.',
                    'en' => 'Identifying opportunities for cost and expenditure optimization to increase operational efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9552,
                'name' => json_encode([
                    'pl' => 'Śledzenie zmian w przepisach prawnych oraz standardach rachunkowości (np. MSR, MSSF, KSR) oraz ich wpływu na audytowane podmioty.',
                    'en' => 'Tracking changes in legal regulations and accounting standards (e.g. IFRS, IAS, KSR) and their impact on the audited entities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9553,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowych procedur audytowych i dostosowywanie praktyk audytowych do obowiązujących regulacji.',
                    'en' => 'Implementing new audit procedures and adjusting audit practices to applicable regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9554,
                'name' => json_encode([
                    'pl' => 'Edukacja klientów na temat zmian w przepisach i ich wpływu na raportowanie finansowe.',
                    'en' => 'Educating clients about changes in regulations and their impact on financial reporting.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9555,
                'name' => json_encode([
                    'pl' => 'Regularne uczestnictwo w szkoleniach, kursach oraz programach podnoszących kwalifikacje w zakresie audytu i przepisów rachunkowych.',
                    'en' => 'Regular participation in training sessions, courses, and qualification enhancement programs in auditing and accounting regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9556,
                'name' => json_encode([
                    'pl' => 'Utrzymanie i aktualizacja licencji zawodowych oraz certyfikatów wymaganych do wykonywania zawodu biegłego rewidenta.',
                    'en' => 'Maintaining and updating professional licenses and certificates required to practice as a certified auditor.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9557,
                'name' => json_encode([
                    'pl' => 'Podnoszenie wiedzy z zakresu technologii stosowanych w audycie, takich jak systemy ERP, narzędzia analityczne i programy do zarządzania danymi finansowymi.',
                    'en' => 'Enhancing knowledge in technologies used in auditing, such as ERP systems, analytical tools, and financial data management programs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9558,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie audytów due diligence, aby ocenić sytuację finansową przedsiębiorstwa przejmowanego.',
                    'en' => 'Conducting due diligence audits to assess the financial situation of the acquired enterprise.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9559,
                'name' => json_encode([
                    'pl' => 'Analiza kondycji finansowej, zobowiązań oraz ryzyk związanych z planowaną transakcją fuzji lub przejęcia.',
                    'en' => 'Analyzing the financial condition, liabilities, and risks associated with the planned merger or acquisition transaction.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9560,
                'name' => json_encode([
                    'pl' => 'Wydawanie opinii oraz raportów, które wspierają proces decyzyjny przy fuzjach, przejęciach lub restrukturyzacjach.',
                    'en' => 'Issuing opinions and reports that support the decision-making process in mergers, acquisitions, or restructurings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $SPECJALISTA_DO_SPRAW_CONTROLLINGU = [
            [
                'id' => 9561,
                'name' => json_encode([
                    'pl' => 'Opracowywanie rocznych, kwartalnych i miesięcznych budżetów oraz prognoz finansowych, uwzględniając cele biznesowe firmy.',
                    'en' => 'Preparing annual, quarterly, and monthly budgets and financial forecasts, taking into account the company\'s business objectives.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9562,
                'name' => json_encode([
                    'pl' => 'Koordynowanie procesu budżetowego z innymi działami, aby zapewnić zgodność z długoterminową strategią firmy.',
                    'en' => 'Coordinating the budgeting process with other departments to ensure alignment with the company\'s long-term strategy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9563,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wykonania budżetu i identyfikacja odchyleń od planowanych wartości.',
                    'en' => 'Monitoring budget execution and identifying deviations from planned values.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9564,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie szczegółowych analiz finansowych, takich jak analiza rentowności, płynności finansowej, kosztów i efektywności operacyjnej.',
                    'en' => 'Conducting detailed financial analyses, such as profitability, liquidity, cost, and operational efficiency analyses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9565,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie regularnych raportów finansowych, zawierających wskaźniki kluczowe (KPI) i analizy wyników.',
                    'en' => 'Preparing regular financial reports, including key performance indicators (KPIs) and performance analyses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9566,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów na potrzeby zarządu, przedstawiających obecną kondycję finansową i efektywność poszczególnych działów.',
                    'en' => 'Creating reports for management that present the current financial condition and effectiveness of individual departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9567,
                'name' => json_encode([
                    'pl' => 'Monitorowanie i analiza struktury kosztów przedsiębiorstwa w celu identyfikacji obszarów wymagających optymalizacji.',
                    'en' => 'Monitoring and analyzing the cost structure of the company to identify areas requiring optimization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9568,
                'name' => json_encode([
                    'pl' => 'Proponowanie działań mających na celu redukcję kosztów i poprawę efektywności operacyjnej.',
                    'en' => 'Proposing actions aimed at reducing costs and improving operational efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9569,
                'name' => json_encode([
                    'pl' => 'Ustalanie i śledzenie limitów kosztowych oraz zapewnianie, że wydatki są zgodne z założonym budżetem.',
                    'en' => 'Setting and monitoring cost limits and ensuring that expenditures are in line with the established budget.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9570,
                'name' => json_encode([
                    'pl' => 'Ocenianie rentowności produktów, projektów lub linii biznesowych poprzez analizę marż, kosztów i przychodów.',
                    'en' => 'Evaluating the profitability of products, projects, or business lines by analyzing margins, costs, and revenues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9571,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analiz ROI (Return on Investment), NPV (Net Present Value) oraz IRR (Internal Rate of Return) dla projektów inwestycyjnych.',
                    'en' => 'Conducting ROI (Return on Investment), NPV (Net Present Value), and IRR (Internal Rate of Return) analyses for investment projects.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9572,
                'name' => json_encode([
                    'pl' => 'Wskazywanie obszarów poprawy i dostosowywanie strategii w celu zwiększenia efektywności działalności.',
                    'en' => 'Identifying areas for improvement and adjusting strategies to increase operational efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9573,
                'name' => json_encode([
                    'pl' => 'Analizowanie odchyleń między rzeczywistymi wynikami finansowymi a założeniami budżetowymi.',
                    'en' => 'Analyzing deviations between actual financial results and budget assumptions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9574,
                'name' => json_encode([
                    'pl' => 'Określanie przyczyn odchyleń oraz sugerowanie działań korygujących dla działów, które nie realizują planu.',
                    'en' => 'Identifying the causes of deviations and suggesting corrective actions for departments that are not meeting their plans.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9575,
                'name' => json_encode([
                    'pl' => 'Raportowanie odchyleń do zarządu i sugerowanie działań mających na celu ich minimalizację.',
                    'en' => 'Reporting deviations to management and suggesting actions to minimize them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9576,
                'name' => json_encode([
                    'pl' => 'Tworzenie prognoz finansowych na podstawie dostępnych danych, trendów i oczekiwań rynkowych.',
                    'en' => 'Creating financial forecasts based on available data, trends, and market expectations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9577,
                'name' => json_encode([
                    'pl' => 'Modelowanie różnych scenariuszy (scenariusz pesymistyczny, optymistyczny, realistyczny) w celu oceny możliwych wyników finansowych.',
                    'en' => 'Modeling different scenarios (pessimistic, optimistic, realistic) to assess possible financial outcomes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9578,
                'name' => json_encode([
                    'pl' => 'Opracowywanie długoterminowych planów strategicznych, które pomogą osiągnąć cele finansowe organizacji.',
                    'en' => 'Developing long-term strategic plans that will help achieve the organization\'s financial goals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9579,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem sprzedaży, produkcji, marketingu i innymi działami w celu synchronizacji procesów planowania i budżetowania.',
                    'en' => 'Cooperating with sales, production, marketing, and other departments to synchronize planning and budgeting processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9580,
                'name' => json_encode([
                    'pl' => 'Analiza potrzeb finansowych innych działów i wspieranie ich w osiąganiu wyznaczonych KPI.',
                    'en' => 'Analyzing the financial needs of other departments and supporting them in achieving set KPIs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9581,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji i raportów, które pomagają innym działom zrozumieć wpływ ich działań na wyniki finansowe firmy.',
                    'en' => 'Providing information and reports that help other departments understand the impact of their actions on the company\'s financial results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9582,
                'name' => json_encode([
                    'pl' => 'Rozwijanie i wdrażanie narzędzi oraz systemów wspierających zbieranie i analizę danych finansowych (np. raporty, dashboardy, narzędzia BI).',
                    'en' => 'Developing and implementing tools and systems supporting the collection and analysis of financial data (e.g., reports, dashboards, BI tools).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9583,
                'name' => json_encode([
                    'pl' => 'Projektowanie modeli i raportów, które umożliwiają szybką analizę wyników i pomagają w podejmowaniu decyzji.',
                    'en' => 'Designing models and reports that enable quick results analysis and help in decision-making.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9584,
                'name' => json_encode([
                    'pl' => 'Ulepszanie procesów raportowania, aby zwiększyć efektywność i dokładność analizy danych.',
                    'en' => 'Improving reporting processes to increase efficiency and accuracy of data analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9585,
                'name' => json_encode([
                    'pl' => 'Monitorowanie i prognozowanie przepływów pieniężnych w celu utrzymania odpowiedniego poziomu płynności.',
                    'en' => 'Monitoring and forecasting cash flows to maintain an appropriate level of liquidity.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9586,
                'name' => json_encode([
                    'pl' => 'Optymalizacja poziomu kapitału obrotowego oraz analiza należności i zobowiązań.',
                    'en' => 'Optimizing working capital levels and analyzing receivables and payables.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9587,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem finansowym w zakresie optymalizacji płynności, finansowania i zarządzania zasobami gotówkowymi.',
                    'en' => 'Collaborating with the finance department to optimize liquidity, financing, and cash resource management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9588,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie rekomendacji finansowych dla zarządu, uwzględniających wyniki analiz i prognoz.',
                    'en' => 'Preparing financial recommendations for management, taking into account the results of analyses and forecasts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9589,
                'name' => json_encode([
                    'pl' => 'Wspieranie zarządu w podejmowaniu decyzji dotyczących inwestycji, kosztów operacyjnych oraz strategii rozwoju firmy.',
                    'en' => 'Supporting management in making decisions regarding investments, operating costs, and company development strategies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9590,
                'name' => json_encode([
                    'pl' => 'Informowanie zarządu o ryzykach i możliwościach związanych z aktualną sytuacją finansową.',
                    'en' => 'Informing management about risks and opportunities associated with the current financial situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9591,
                'name' => json_encode([
                    'pl' => 'Identyfikowanie potencjalnych zagrożeń finansowych i opracowywanie strategii zarządzania ryzykiem.',
                    'en' => 'Identifying potential financial threats and developing risk management strategies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9592,
                'name' => json_encode([
                    'pl' => 'Analizowanie wpływu czynników zewnętrznych, takich jak zmiany w kursach walutowych, stopy procentowe czy inflacja.',
                    'en' => 'Analyzing the impact of external factors such as changes in exchange rates, interest rates, or inflation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9593,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi działami w celu minimalizacji ryzyka operacyjnego i finansowego.',
                    'en' => 'Collaborating with other departments to minimize operational and financial risks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9594,
                'name' => json_encode([
                    'pl' => 'Identyfikacja obszarów w procesach finansowych, które można zoptymalizować lub zautomatyzować.',
                    'en' => 'Identifying areas in financial processes that can be optimized or automated.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9595,
                'name' => json_encode([
                    'pl' => 'Wdrażanie rozwiązań automatyzujących procesy kontrolingu, aby zwiększyć efektywność i skrócić czas realizacji raportów.',
                    'en' => 'Implementing solutions that automate controlling processes to increase efficiency and reduce report preparation time.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9596,
                'name' => json_encode([
                    'pl' => 'Usprawnianie procesów raportowania i monitorowania wyników, aby skrócić czas potrzebny na uzyskanie danych.',
                    'en' => 'Streamlining reporting and performance monitoring processes to shorten the time required to obtain data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9597,
                'name' => json_encode([
                    'pl' => 'Szkolenie pracowników działu controllingu i innych działów w zakresie analizy finansowej i zarządzania kosztami.',
                    'en' => 'Training employees in the controlling department and other departments in financial analysis and cost management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9598,
                'name' => json_encode([
                    'pl' => 'Wspieranie rozwoju wiedzy z zakresu controllingu, finansów i nowych narzędzi analitycznych.',
                    'en' => 'Supporting the development of knowledge in controlling, finance, and new analytical tools.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9599,
                'name' => json_encode([
                    'pl' => 'Organizowanie warsztatów i sesji szkoleniowych w celu przekazania najlepszych praktyk i narzędzi analitycznych.',
                    'en' => 'Organizing workshops and training sessions to share best practices and analytical tools.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9600,
                'name' => json_encode([
                    'pl' => 'Administrowanie systemami ERP, oprogramowaniem do raportowania i narzędziami analitycznymi używanymi w procesach controllingu.',
                    'en' => 'Administering ERP systems, reporting software, and analytical tools used in controlling processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9601,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowych narzędzi do analizy danych, które wspomagają kontrolę finansową i planowanie.',
                    'en' => 'Implementing new tools for data analysis that support financial control and planning.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9602,
                'name' => json_encode([
                    'pl' => 'Dbanie o zgodność systemów informatycznych z potrzebami raportowania i monitorowania wyników.',
                    'en' => 'Ensuring that IT systems are aligned with reporting and performance monitoring needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9603,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że procesy i działania finansowe są zgodne z obowiązującymi przepisami prawnymi oraz polityką wewnętrzną.',
                    'en' => 'Ensuring that financial processes and actions comply with applicable laws and internal policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9604,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie wytycznych korporacyjnych w zakresie raportowania finansowego i budżetowania.',
                    'en' => 'Adhering to corporate guidelines regarding financial reporting and budgeting.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9605,
                'name' => json_encode([
                    'pl' => 'Współpraca z audytorami wewnętrznymi i zewnętrznymi podczas przeglądów zgodności oraz audytów finansowych.',
                    'en' => 'Collaborating with internal and external auditors during compliance reviews and financial audits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9606,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie krótkoterminowych prognoz finansowych i operacyjnych, aby dostarczyć zarządowi aktualnych danych.',
                    'en' => 'Preparing short-term financial and operational forecasts to provide management with up-to-date data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9607,
                'name' => json_encode([
                    'pl' => 'Tworzenie długoterminowych scenariuszy finansowych na potrzeby strategicznego planowania i analizy przyszłych wyników.',
                    'en' => 'Creating long-term financial scenarios for strategic planning and analyzing future performance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9608,
                'name' => json_encode([
                    'pl' => 'Analiza trendów rynkowych i danych makroekonomicznych, aby przewidzieć ich wpływ na finanse firmy.',
                    'en' => 'Analyzing market trends and macroeconomic data to predict their impact on the company\'s finances.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9609,
                'name' => json_encode([
                    'pl' => 'Systematyczna analiza odchyleń rzeczywistych wyników od prognoz i budżetów.',
                    'en' => 'Systematic analysis of actual results deviations from forecasts and budgets.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9610,
                'name' => json_encode([
                    'pl' => 'Śledzenie efektywności działań podejmowanych w ramach zarządzania kosztami i kontrolingu.',
                    'en' => 'Tracking the effectiveness of actions taken in cost management and controlling.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9611,
                'name' => json_encode([
                    'pl' => 'Przekazywanie rekomendacji mających na celu poprawę efektywności finansowej na podstawie analiz.',
                    'en' => 'Providing recommendations aimed at improving financial efficiency based on analyses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_RACHUNKOWOŚCI = [
            [
                'id' => 9612,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie transakcji finansowych zgodnie z zasadami rachunkowości i wewnętrznymi procedurami firmy.',
                    'en' => 'Recording financial transactions in accordance with accounting principles and the company\'s internal procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9613,
                'name' => json_encode([
                    'pl' => 'Księgowanie dokumentów kosztowych, przychodowych, należności i zobowiązań w odpowiednich księgach rachunkowych.',
                    'en' => 'Posting cost, revenue, receivables, and payables documents in the appropriate accounting ledgers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9614,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszystkie transakcje są prawidłowo udokumentowane i zaksięgowane w systemie księgowym.',
                    'en' => 'Ensuring that all transactions are properly documented and recorded in the accounting system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9615,
                'name' => json_encode([
                    'pl' => 'Sporządzanie miesięcznych, kwartalnych i rocznych sprawozdań finansowych, takich jak bilans, rachunek zysków i strat oraz rachunek przepływów pieniężnych.',
                    'en' => 'Preparing monthly, quarterly, and annual financial statements such as balance sheets, income statements, and cash flow statements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9616,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że sprawozdania finansowe są zgodne z obowiązującymi standardami rachunkowości (np. Międzynarodowe Standardy Sprawozdawczości Finansowej - MSSF lub Krajowe Standardy Rachunkowości).',
                    'en' => 'Ensuring that financial statements comply with applicable accounting standards (e.g., International Financial Reporting Standards - IFRS or National Accounting Standards).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9617,
                'name' => json_encode([
                    'pl' => 'Przedstawianie raportów finansowych zarządowi, dostarczając informacji o stanie finansowym firmy.',
                    'en' => 'Presenting financial reports to management, providing information about the company\'s financial position.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9618,
                'name' => json_encode([
                    'pl' => 'Weryfikacja dokumentów finansowych, takich jak faktury, paragony, raporty bankowe, pod kątem ich zgodności i poprawności.',
                    'en' => 'Verifying financial documents such as invoices, receipts, and bank statements for accuracy and compliance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9619,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie, czy dokumenty są kompletne i spełniają wymagania formalno-prawne.',
                    'en' => 'Checking if documents are complete and meet formal and legal requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9620,
                'name' => json_encode([
                    'pl' => 'Identyfikowanie i korygowanie błędów w dokumentach księgowych, aby zapewnić dokładność ewidencji finansowej.',
                    'en' => 'Identifying and correcting errors in accounting documents to ensure the accuracy of financial records.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9621,
                'name' => json_encode([
                    'pl' => 'Obliczanie, deklarowanie i rozliczanie podatków, takich jak VAT, CIT, PIT oraz innych obowiązujących podatków.',
                    'en' => 'Calculating, declaring, and settling taxes such as VAT, CIT, PIT, and other applicable taxes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9622,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie deklaracji podatkowych i ich terminowe składanie do odpowiednich urzędów.',
                    'en' => 'Preparing tax returns and submitting them to the relevant authorities on time.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9623,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zmian w przepisach podatkowych i stosowanie ich w praktyce księgowej.',
                    'en' => 'Monitoring changes in tax regulations and applying them in accounting practice.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9624,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów finansowych na potrzeby wewnętrzne oraz dla celów sprawozdawczości zewnętrznej.',
                    'en' => 'Creating financial reports for internal purposes and for external reporting.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9625,
                'name' => json_encode([
                    'pl' => 'Analiza wyników finansowych i przedstawianie ich w formie raportów dla menedżerów oraz zarządu.',
                    'en' => 'Analyzing financial results and presenting them in reports for managers and the board.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9626,
                'name' => json_encode([
                    'pl' => 'Opracowywanie raportów specjalistycznych, takich jak analiza rentowności, raporty kosztowe lub przepływy pieniężne.',
                    'en' => 'Developing specialized reports such as profitability analysis, cost reports, or cash flow statements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9627,
                'name' => json_encode([
                    'pl' => 'Monitorowanie terminowości spłat należności od klientów oraz zarządzanie windykacją należności.',
                    'en' => 'Monitoring the timeliness of customer receivable payments and managing debt collection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9628,
                'name' => json_encode([
                    'pl' => 'Analiza zobowiązań i kontrolowanie terminowości ich spłat, aby zapewnić płynność finansową firmy.',
                    'en' => 'Analyzing liabilities and controlling the timeliness of their payments to ensure the company\'s financial liquidity.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9629,
                'name' => json_encode([
                    'pl' => 'Współpraca z kontrahentami oraz działem finansowym w celu rozwiązywania problemów związanych z rozliczeniami.',
                    'en' => 'Collaborating with contractors and the finance department to resolve issues related to settlements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9630,
                'name' => json_encode([
                    'pl' => 'Współpraca przy opracowywaniu rocznych, kwartalnych i miesięcznych budżetów firmy.',
                    'en' => 'Collaborating on the preparation of the company\'s annual, quarterly, and monthly budgets.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9631,
                'name' => json_encode([
                    'pl' => 'Monitorowanie realizacji budżetu i analizowanie odchyleń od założeń finansowych.',
                    'en' => 'Monitoring budget implementation and analyzing deviations from financial assumptions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9632,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie prognoz finansowych i dostosowywanie budżetu na podstawie bieżącej sytuacji finansowej firmy.',
                    'en' => 'Preparing financial forecasts and adjusting the budget based on the company\'s current financial situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9633,
                'name' => json_encode([
                    'pl' => 'Monitorowanie przepływów pieniężnych, aby zapewnić, że firma posiada wystarczające środki na pokrycie bieżących zobowiązań.',
                    'en' => 'Monitoring cash flows to ensure the company has sufficient funds to cover current liabilities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9634,
                'name' => json_encode([
                    'pl' => 'Analiza i prognozowanie zapotrzebowania na kapitał obrotowy oraz planowanie operacji finansowych.',
                    'en' => 'Analyzing and forecasting working capital requirements and planning financial operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9635,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem finansowym w zakresie zarządzania płynnością oraz zabezpieczeniem środków finansowych.',
                    'en' => 'Collaborating with the finance department on liquidity management and securing financial resources.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9636,
                'name' => json_encode([
                    'pl' => 'Analiza kosztów operacyjnych i identyfikowanie obszarów, w których można zaoszczędzić lub zoptymalizować wydatki.',
                    'en' => 'Analyzing operating costs and identifying areas where savings can be made or expenses optimized.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9637,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów kosztowych dla poszczególnych działów oraz projektów.',
                    'en' => 'Preparing cost reports for individual departments and projects.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9638,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi działami w celu monitorowania kosztów i opracowywania strategii optymalizacji wydatków.',
                    'en' => 'Collaborating with other departments to monitor costs and develop expenditure optimization strategies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9639,
                'name' => json_encode([
                    'pl' => 'Przygotowanie dokumentacji oraz dostarczanie niezbędnych informacji podczas audytów finansowych.',
                    'en' => 'Preparing documentation and providing necessary information during financial audits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9640,
                'name' => json_encode([
                    'pl' => 'Współpraca z audytorami w celu zapewnienia przejrzystości finansowej i zgodności z przepisami.',
                    'en' => 'Collaborating with auditors to ensure financial transparency and compliance with regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9641,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie zaleceń audytowych mających na celu poprawę procesów księgowych i zgodności finansowej.',
                    'en' => 'Implementing audit recommendations to improve accounting processes and financial compliance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9642,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie aktualnej wiedzy na temat obowiązujących przepisów prawa finansowego i podatkowego.',
                    'en' => 'Keeping up to date with applicable financial and tax law regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9643,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności procesów księgowych z przepisami prawnymi oraz standardami rachunkowości.',
                    'en' => 'Ensuring that accounting processes comply with legal regulations and accounting standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9644,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie praktyk księgowych do zmian w przepisach oraz wprowadzanie nowych procedur.',
                    'en' => 'Adapting accounting practices to changes in regulations and implementing new procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9645,
                'name' => json_encode([
                    'pl' => 'Opracowywanie i aktualizowanie polityk oraz procedur księgowych, zgodnie z wymogami prawnymi i wewnętrznymi standardami.',
                    'en' => 'Developing and updating accounting policies and procedures in line with legal requirements and internal standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9646,
                'name' => json_encode([
                    'pl' => 'Przekazywanie instrukcji i wytycznych dotyczących procedur księgowych dla innych działów i pracowników.',
                    'en' => 'Providing instructions and guidelines regarding accounting procedures to other departments and employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9647,
                'name' => json_encode([
                    'pl' => 'Zapewnienie spójności i zgodności z wewnętrznymi zasadami rachunkowości.',
                    'en' => 'Ensuring consistency and compliance with internal accounting principles.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9648,
                'name' => json_encode([
                    'pl' => 'Wdrażanie narzędzi do automatyzacji procesów księgowych, takich jak systemy ERP (Enterprise Resource Planning) lub narzędzia do przetwarzania faktur.',
                    'en' => 'Implementing tools for automating accounting processes, such as ERP (Enterprise Resource Planning) systems or invoice processing tools.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9649,
                'name' => json_encode([
                    'pl' => 'Analiza i optymalizacja istniejących procesów księgowych, aby zwiększyć ich efektywność.',
                    'en' => 'Analyzing and optimizing existing accounting processes to increase their efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9650,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem IT i specjalistami ds. oprogramowania w celu wprowadzania innowacyjnych rozwiązań.',
                    'en' => 'Collaborating with the IT department and software specialists to implement innovative solutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9651,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji i wsparcia finansowego innym działom w zakresie procedur księgowych.',
                    'en' => 'Providing information and financial support to other departments regarding accounting procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9652,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie zasad księgowych i pomaganie pracownikom w rozwiązywaniu problemów związanych z rozliczeniami.',
                    'en' => 'Explaining accounting principles and helping employees solve issues related to settlements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9653,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności rozliczeń i ewidencji finansowej w różnych działach firmy.',
                    'en' => 'Ensuring the compliance of settlements and financial records in different departments of the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9654,
                'name' => json_encode([
                    'pl' => 'Regularne przeglądy kont księgowych, aby zapewnić ich dokładność i spójność z dokumentami źródłowymi.',
                    'en' => 'Regularly reviewing accounting accounts to ensure their accuracy and consistency with source documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9655,
                'name' => json_encode([
                    'pl' => 'Analiza sald i transakcji na kontach oraz identyfikowanie ewentualnych nieprawidłowości.',
                    'en' => 'Analyzing balances and transactions in accounts and identifying any irregularities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9656,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie korekt i uzgadnianie sald w księgach rachunkowych.',
                    'en' => 'Making adjustments and reconciling balances in accounting books.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9657,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach i kursach doskonalących z zakresu rachunkowości, podatków i nowych przepisów.',
                    'en' => 'Participating in training and courses to improve knowledge in accounting, taxes, and new regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9658,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy w zakresie nowych standardów rachunkowości, technologii finansowych oraz przepisów prawa.',
                    'en' => 'Updating knowledge on new accounting standards, financial technologies, and legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9659,
                'name' => json_encode([
                    'pl' => 'Przekazywanie wiedzy i doświadczenia młodszym pracownikom działu księgowego oraz organizowanie wewnętrznych sesji szkoleniowych.',
                    'en' => 'Sharing knowledge and experience with junior accounting staff and organizing internal training sessions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9660,
                'name' => json_encode([
                    'pl' => 'Tworzenie prognoz finansowych na potrzeby zarządu, uwzględniając dane historyczne i trendy rynkowe.',
                    'en' => 'Creating financial forecasts for management purposes, considering historical data and market trends.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9661,
                'name' => json_encode([
                    'pl' => 'Analiza wyników i trendów finansowych w celu przewidywania przyszłych wyników finansowych.',
                    'en' => 'Analyzing financial results and trends to predict future financial performance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9662,
                'name' => json_encode([
                    'pl' => 'Wspieranie strategicznego planowania finansowego poprzez dostarczanie precyzyjnych prognoz finansowych.',
                    'en' => 'Supporting strategic financial planning by providing accurate financial forecasts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $KONTROLER_FINANSOWY = [
            [
                'id' => 9663,
                'name' => json_encode([
                    'pl' => 'Opracowywanie rocznych, kwartalnych i miesięcznych budżetów dla organizacji i poszczególnych działów.',
                    'en' => 'Developing annual, quarterly, and monthly budgets for the organization and individual departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9664,
                'name' => json_encode([
                    'pl' => 'Monitorowanie realizacji budżetu, identyfikowanie odchyleń oraz proponowanie działań korygujących.',
                    'en' => 'Monitoring budget implementation, identifying deviations, and proposing corrective actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9665,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi działami w celu stworzenia i utrzymania zgodności budżetowej z długoterminową strategią firmy.',
                    'en' => 'Collaborating with other departments to create and maintain budget compliance with the company\'s long-term strategy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9666,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analizy kosztów operacyjnych i kapitałowych w celu identyfikacji obszarów do optymalizacji.',
                    'en' => 'Conducting analyses of operating and capital costs to identify areas for optimization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9667,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów dotyczących struktury kosztów, rozliczeń międzydziałowych oraz efektywności wydatków.',
                    'en' => 'Preparing reports on cost structure, interdepartmental settlements, and expenditure efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9668,
                'name' => json_encode([
                    'pl' => 'Tworzenie planów redukcji kosztów i wdrażanie inicjatyw mających na celu optymalizację kosztową.',
                    'en' => 'Creating cost reduction plans and implementing initiatives aimed at cost optimization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9669,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie i prezentowanie raportów finansowych dla zarządu, uwzględniających kluczowe wskaźniki wydajności (KPI), wyniki finansowe i odchylenia od budżetu.',
                    'en' => 'Preparing and presenting financial reports for management, including key performance indicators (KPI), financial results, and budget deviations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9670,
                'name' => json_encode([
                    'pl' => 'Tworzenie sprawozdań finansowych, takich jak bilans, rachunek wyników oraz rachunek przepływów pieniężnych.',
                    'en' => 'Creating financial statements such as balance sheets, income statements, and cash flow statements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9671,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że raporty finansowe są zgodne z wewnętrznymi standardami i przepisami rachunkowości.',
                    'en' => 'Ensuring that financial reports comply with internal standards and accounting regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9672,
                'name' => json_encode([
                    'pl' => 'Tworzenie prognoz finansowych na podstawie historycznych danych, bieżących trendów i strategii rynkowych.',
                    'en' => 'Creating financial forecasts based on historical data, current trends, and market strategies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9673,
                'name' => json_encode([
                    'pl' => 'Modelowanie różnych scenariuszy finansowych, takich jak scenariusz pesymistyczny, optymistyczny i realistyczny.',
                    'en' => 'Modeling different financial scenarios, such as pessimistic, optimistic, and realistic scenarios.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9674,
                'name' => json_encode([
                    'pl' => 'Opracowywanie strategii dostosowujących finanse do zmieniających się warunków rynkowych.',
                    'en' => 'Developing strategies to adjust finances to changing market conditions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9675,
                'name' => json_encode([
                    'pl' => 'Ocenianie rentowności produktów, projektów, klientów i linii biznesowych.',
                    'en' => 'Evaluating the profitability of products, projects, clients, and business lines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9676,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analiz ROI (Return on Investment), NPV (Net Present Value) oraz IRR (Internal Rate of Return) dla inwestycji i projektów.',
                    'en' => 'Conducting ROI (Return on Investment), NPV (Net Present Value), and IRR (Internal Rate of Return) analyses for investments and projects.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9677,
                'name' => json_encode([
                    'pl' => 'Wskazywanie obszarów do poprawy w celu zwiększenia rentowności i wydajności finansowej organizacji.',
                    'en' => 'Identifying areas for improvement to increase profitability and financial efficiency of the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9678,
                'name' => json_encode([
                    'pl' => 'Monitorowanie i prognozowanie przepływów pieniężnych, aby zapewnić płynność finansową organizacji.',
                    'en' => 'Monitoring and forecasting cash flows to ensure the organization\'s financial liquidity.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9679,
                'name' => json_encode([
                    'pl' => 'Zarządzanie poziomem kapitału obrotowego, kontrolowanie należności i zobowiązań.',
                    'en' => 'Managing working capital levels, controlling receivables and payables.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9680,
                'name' => json_encode([
                    'pl' => 'Optymalizacja polityki płatności, aby poprawić płynność i efektywność operacyjną.',
                    'en' => 'Optimizing the payment policy to improve liquidity and operational efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9681,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszystkie działania finansowe są zgodne z przepisami prawnymi oraz wewnętrznymi procedurami organizacji.',
                    'en' => 'Ensuring that all financial activities comply with legal regulations and the organization\'s internal procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9682,
                'name' => json_encode([
                    'pl' => 'Wdrażanie i nadzorowanie mechanizmów kontroli wewnętrznej, aby zminimalizować ryzyko finansowe.',
                    'en' => 'Implementing and supervising internal control mechanisms to minimize financial risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9683,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie regularnych audytów wewnętrznych w celu oceny zgodności finansowej.',
                    'en' => 'Conducting regular internal audits to assess financial compliance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9684,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentacji i dostarczanie informacji dla audytorów w czasie audytów finansowych.',
                    'en' => 'Preparing documentation and providing information for auditors during financial audits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9685,
                'name' => json_encode([
                    'pl' => 'Współpraca z audytorami zewnętrznymi oraz wdrażanie rekomendacji wynikających z audytu.',
                    'en' => 'Cooperating with external auditors and implementing recommendations resulting from audits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9686,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie zgodności z wytycznymi audytowymi i poprawa procesów księgowych.',
                    'en' => 'Maintaining compliance with audit guidelines and improving accounting processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9687,
                'name' => json_encode([
                    'pl' => 'Opracowywanie polityk rachunkowych i finansowych zgodnych z przepisami oraz standardami rachunkowości.',
                    'en' => 'Developing accounting and financial policies in accordance with regulations and accounting standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9688,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji o polityce finansowej innym działom oraz ich szkolenie w zakresie procedur finansowych.',
                    'en' => 'Communicating financial policy information to other departments and training them in financial procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9689,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie standardów oraz procedur księgowych i finansowych, aby ujednolicić działania w organizacji.',
                    'en' => 'Implementing accounting and financial standards and procedures to standardize actions within the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9690,
                'name' => json_encode([
                    'pl' => 'Systematyczna analiza odchyleń wyników finansowych od założeń budżetowych.',
                    'en' => 'Systematic analysis of deviations of financial results from budget assumptions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9691,
                'name' => json_encode([
                    'pl' => 'Identyfikowanie przyczyn odchyleń i przedstawianie rekomendacji zarządowi.',
                    'en' => 'Identifying the causes of deviations and presenting recommendations to management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9692,
                'name' => json_encode([
                    'pl' => 'Regularne raportowanie o wynikach finansowych oraz podejmowanie działań naprawczych w razie potrzeby.',
                    'en' => 'Regularly reporting financial results and taking corrective actions when necessary.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9693,
                'name' => json_encode([
                    'pl' => 'Identyfikacja i ocena ryzyk finansowych związanych z działalnością firmy, w tym ryzyka kredytowego, rynkowego i operacyjnego.',
                    'en' => 'Identifying and assessing financial risks related to the company\'s operations, including credit, market, and operational risks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9694,
                'name' => json_encode([
                    'pl' => 'Tworzenie strategii minimalizacji ryzyka, takich jak dywersyfikacja portfela, polityki zabezpieczające.',
                    'en' => 'Creating risk minimization strategies, such as portfolio diversification and hedging policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9695,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analiz ryzyka i regularne monitorowanie jego poziomu w organizacji.',
                    'en' => 'Conducting risk analyses and regularly monitoring its level within the organization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9696,
                'name' => json_encode([
                    'pl' => 'Ścisła współpraca z innymi działami, takimi jak sprzedaż, produkcja, logistyka, aby dostosować budżet i strategię finansową do ich potrzeb.',
                    'en' => 'Close collaboration with other departments, such as sales, production, and logistics, to adjust the budget and financial strategy to their needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9697,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji finansowych, które wspierają podejmowanie decyzji przez inne działy.',
                    'en' => 'Providing financial information that supports decision-making by other departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9698,
                'name' => json_encode([
                    'pl' => 'Organizowanie spotkań i sesji roboczych, które wspierają harmonijną współpracę między działami.',
                    'en' => 'Organizing meetings and workshops that support harmonious cooperation between departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9699,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowoczesnych systemów i narzędzi finansowych, takich jak ERP, które automatyzują procesy finansowe.',
                    'en' => 'Implementing modern financial systems and tools, such as ERP, that automate financial processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9700,
                'name' => json_encode([
                    'pl' => 'Usprawnienie procesów raportowania, aby zwiększyć efektywność pracy kontrolingu.',
                    'en' => 'Streamlining reporting processes to increase the efficiency of the controlling department.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9701,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem IT oraz specjalistami ds. technologii finansowych w celu wdrożenia narzędzi analitycznych.',
                    'en' => 'Cooperating with the IT department and financial technology specialists to implement analytical tools.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9702,
                'name' => json_encode([
                    'pl' => 'Szkolenie członków zespołu finansowego oraz kontrolerów młodszych stopni w zakresie procedur i standardów finansowych.',
                    'en' => 'Training financial team members and junior controllers in financial procedures and standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9703,
                'name' => json_encode([
                    'pl' => 'Organizowanie warsztatów z zakresu rachunkowości, finansów i analizy danych dla zespołu.',
                    'en' => 'Organizing workshops on accounting, finance, and data analysis for the team.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9704,
                'name' => json_encode([
                    'pl' => 'Wspieranie rozwoju zawodowego członków zespołu poprzez regularne szkolenia i aktualizowanie wiedzy.',
                    'en' => 'Supporting the professional development of team members through regular training and knowledge updates.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9705,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie szczegółowych analiz finansowych wspierających zarząd przy podejmowaniu decyzji strategicznych.',
                    'en' => 'Conducting detailed financial analyses supporting management in making strategic decisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9706,
                'name' => json_encode([
                    'pl' => 'Przygotowanie prognoz oraz scenariuszy finansowych na potrzeby nowych inwestycji, fuzji i przejęć.',
                    'en' => 'Preparing forecasts and financial scenarios for new investments, mergers, and acquisitions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9707,
                'name' => json_encode([
                    'pl' => 'Wsparcie zarządu przy podejmowaniu kluczowych decyzji finansowych poprzez dostarczenie dokładnych danych i analiz.',
                    'en' => 'Supporting management in making key financial decisions by providing accurate data and analyses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9708,
                'name' => json_encode([
                    'pl' => 'Analiza opłacalności projektów inwestycyjnych oraz ocena ich potencjalnego wpływu na finanse firmy.',
                    'en' => 'Analyzing the profitability of investment projects and assessing their potential impact on the company\'s finances.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9709,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie kalkulacji wskaźników, takich jak ROI (zwrot z inwestycji), IRR (wewnętrzna stopa zwrotu) i NPV (wartość bieżąca netto).',
                    'en' => 'Calculating indicators such as ROI (return on investment), IRR (internal rate of return), and NPV (net present value).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9710,
                'name' => json_encode([
                    'pl' => 'Rekomendowanie inwestycji, które przyczynią się do rozwoju i wzrostu wartości firmy.',
                    'en' => 'Recommending investments that contribute to the development and growth of the company\'s value.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9711,
                'name' => json_encode([
                    'pl' => 'Tworzenie i monitorowanie budżetów dla poszczególnych projektów oraz ocena ich efektywności.',
                    'en' => 'Creating and monitoring budgets for individual projects and assessing their effectiveness.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9712,
                'name' => json_encode([
                    'pl' => 'Ścisła kontrola wydatków projektowych i analiza ich zgodności z założonym budżetem.',
                    'en' => 'Tight control of project expenditures and analysis of their compliance with the established budget.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9713,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów dotyczących realizacji budżetów projektowych i rekomendowanie działań naprawczych.',
                    'en' => 'Preparing reports on the implementation of project budgets and recommending corrective actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $NEGOCJATOR_BIZNESOWY = [
            [
                'id' => 9714,
                'name' => json_encode([
                    'pl' => 'Analiza sytuacji biznesowej oraz określenie celów negocjacyjnych zgodnych ze strategią firmy.',
                    'en' => 'Analyzing the business situation and defining negotiation goals aligned with the company\'s strategy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9715,
                'name' => json_encode([
                    'pl' => 'Gromadzenie i analiza informacji o drugiej stronie, takich jak potrzeby, priorytety oraz potencjalne słabe i mocne strony.',
                    'en' => 'Gathering and analyzing information about the other party, such as needs, priorities, and potential strengths and weaknesses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9716,
                'name' => json_encode([
                    'pl' => 'Przygotowanie argumentów, materiałów oraz alternatywnych scenariuszy, które mogą zostać przedstawione podczas negocjacji.',
                    'en' => 'Preparing arguments, materials, and alternative scenarios that can be presented during negotiations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9717,
                'name' => json_encode([
                    'pl' => 'Tworzenie strategii negocjacyjnej uwzględniającej cele firmy, możliwe kompromisy oraz punkty, na których firma nie może ustąpić.',
                    'en' => 'Creating a negotiation strategy that takes into account the company\'s goals, possible compromises, and points where the company cannot concede.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9718,
                'name' => json_encode([
                    'pl' => 'Określanie najlepszej alternatywy dla negocjowanego porozumienia (BATNA), aby mieć gotowy plan awaryjny.',
                    'en' => 'Determining the best alternative to a negotiated agreement (BATNA) to have a backup plan ready.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9719,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie strategii do oczekiwań drugiej strony oraz przygotowywanie różnych opcji, które mogą prowadzić do wypracowania korzystnego kompromisu.',
                    'en' => 'Adjusting the strategy to the expectations of the other party and preparing various options that can lead to a favorable compromise.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9720,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie rozmów z drugą stroną, mających na celu przedstawienie stanowiska firmy i dążenie do osiągnięcia porozumienia.',
                    'en' => 'Conducting discussions with the other party aimed at presenting the company\'s position and striving to reach an agreement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9721,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie profesjonalnej atmosfery, budowanie zaufania i unikanie napięć podczas rozmów.',
                    'en' => 'Maintaining a professional atmosphere, building trust, and avoiding tensions during discussions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9722,
                'name' => json_encode([
                    'pl' => 'Zastosowanie technik negocjacyjnych, takich jak zadawanie pytań otwartych, aktywne słuchanie oraz stosowanie taktyk wpływu i perswazji.',
                    'en' => 'Using negotiation techniques such as asking open-ended questions, active listening, and employing influence and persuasion tactics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9723,
                'name' => json_encode([
                    'pl' => 'Budowanie i utrzymywanie długoterminowych relacji z kontrahentami, klientami i dostawcami.',
                    'en' => 'Building and maintaining long-term relationships with contractors, clients, and suppliers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9724,
                'name' => json_encode([
                    'pl' => 'Okazywanie szacunku i zrozumienia dla drugiej strony w celu budowania wzajemnego zaufania.',
                    'en' => 'Showing respect and understanding for the other party to build mutual trust.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9725,
                'name' => json_encode([
                    'pl' => 'Rozwijanie relacji, które mogą przyczynić się do przyszłej współpracy oraz zwiększenia lojalności partnerów.',
                    'en' => 'Developing relationships that may contribute to future cooperation and increasing partner loyalty.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9726,
                'name' => json_encode([
                    'pl' => 'Radzenie sobie z sytuacjami konfliktowymi, które mogą wystąpić w trakcie negocjacji lub podczas realizacji umowy.',
                    'en' => 'Dealing with conflict situations that may arise during negotiations or the execution of the agreement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9727,
                'name' => json_encode([
                    'pl' => 'Znajdowanie rozwiązań akceptowalnych dla obu stron i łagodzenie napięć w sposób dyplomatyczny.',
                    'en' => 'Finding acceptable solutions for both parties and diplomatically easing tensions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9728,
                'name' => json_encode([
                    'pl' => 'Ustalanie zasad komunikacji i rozwiązywania sporów, które mogą pomóc w uniknięciu problemów w przyszłości.',
                    'en' => 'Establishing communication and dispute resolution rules that may help avoid issues in the future.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9729,
                'name' => json_encode([
                    'pl' => 'Dokładna analiza ofert i warunków przedstawionych przez drugą stronę pod kątem ich zgodności z interesami firmy.',
                    'en' => 'Thoroughly analyzing the offers and terms presented by the other party for their compliance with the company\'s interests.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9730,
                'name' => json_encode([
                    'pl' => 'Identyfikowanie potencjalnych ryzyk i zagrożeń związanych z ofertą oraz przygotowywanie sugestii modyfikacji.',
                    'en' => 'Identifying potential risks and threats associated with the offer and preparing suggestions for modifications.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9731,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie kontraktów i dokumentów prawnych, które odzwierciedlają uzgodnione warunki współpracy.',
                    'en' => 'Preparing contracts and legal documents that reflect the agreed terms of cooperation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9732,
                'name' => json_encode([
                    'pl' => 'Szukanie rozwiązań, które będą satysfakcjonujące dla obu stron, a jednocześnie korzystne dla firmy.',
                    'en' => 'Looking for solutions that will be satisfactory for both parties while being beneficial for the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9733,
                'name' => json_encode([
                    'pl' => 'Tworzenie alternatywnych propozycji, które mogą pomóc w przezwyciężeniu impasu negocjacyjnego.',
                    'en' => 'Creating alternative proposals that can help overcome negotiation deadlock.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9734,
                'name' => json_encode([
                    'pl' => 'Elastyczność w podejściu do negocjacji i gotowość do dostosowywania warunków w celu osiągnięcia porozumienia.',
                    'en' => 'Flexibility in the negotiation approach and willingness to adjust terms to reach an agreement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9735,
                'name' => json_encode([
                    'pl' => 'Śledzenie, czy ustalenia zawarte w umowie są realizowane zgodnie z planem.',
                    'en' => 'Monitoring whether the agreements made in the contract are being fulfilled as planned.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9736,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie kontaktu z partnerem biznesowym w celu monitorowania realizacji porozumienia oraz rozwiązywania bieżących problemów.',
                    'en' => 'Maintaining contact with the business partner to monitor the implementation of the agreement and resolve ongoing issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9737,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie ewentualnych zmian w umowie lub uzgodnieniach, jeśli zajdzie taka potrzeba.',
                    'en' => 'Making any necessary changes to the contract or agreements if needed.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9738,
                'name' => json_encode([
                    'pl' => 'Sporządzanie oraz prowadzenie dokumentacji z przebiegu negocjacji, w tym protokołów ze spotkań i ustaleń.',
                    'en' => 'Preparing and maintaining documentation of the negotiation process, including meeting minutes and agreements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9739,
                'name' => json_encode([
                    'pl' => 'Tworzenie formalnych porozumień, umów, listów intencyjnych i innych dokumentów związanych z negocjacjami.',
                    'en' => 'Creating formal agreements, contracts, letters of intent, and other documents related to negotiations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9740,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności dokumentów z przepisami prawa oraz polityką firmy.',
                    'en' => 'Ensuring that documents comply with legal regulations and company policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9741,
                'name' => json_encode([
                    'pl' => 'Identyfikowanie ryzyk związanych z potencjalnym porozumieniem oraz minimalizowanie ich wpływu na firmę.',
                    'en' => 'Identifying risks associated with the potential agreement and minimizing their impact on the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9742,
                'name' => json_encode([
                    'pl' => 'Uwzględnianie możliwych scenariuszy awaryjnych, takich jak zerwanie negocjacji lub niepowodzenie transakcji.',
                    'en' => 'Considering possible contingency scenarios, such as the breakdown of negotiations or the failure of a transaction.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9743,
                'name' => json_encode([
                    'pl' => 'Stosowanie taktyk, które chronią firmę przed niekorzystnymi warunkami umowy.',
                    'en' => 'Employing tactics that protect the company from unfavorable contract conditions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9744,
                'name' => json_encode([
                    'pl' => 'Przekazywanie zespołowi zarządzającemu informacji i rekomendacji dotyczących strategii negocjacyjnej i możliwych wyników.',
                    'en' => 'Providing the management team with information and recommendations regarding negotiation strategies and potential outcomes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9745,
                'name' => json_encode([
                    'pl' => 'Doradzanie w zakresie potencjalnych zagrożeń, szans i długoterminowych korzyści z wypracowanego porozumienia.',
                    'en' => 'Advising on potential threats, opportunities, and long-term benefits of the negotiated agreement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9746,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów i analiz, które wspierają zarząd w podejmowaniu decyzji dotyczących negocjacji.',
                    'en' => 'Preparing reports and analyses that support management in making decisions regarding negotiations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9747,
                'name' => json_encode([
                    'pl' => 'Regularne doskonalenie umiejętności negocjacyjnych, takich jak komunikacja, perswazja, rozwiązywanie konfliktów.',
                    'en' => 'Regularly improving negotiation skills such as communication, persuasion, and conflict resolution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9748,
                'name' => json_encode([
                    'pl' => 'Śledzenie nowych trendów, technik i strategii negocjacyjnych, które mogą przyczynić się do osiągania lepszych wyników.',
                    'en' => 'Keeping up with new trends, techniques, and negotiation strategies that can contribute to better results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9749,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w szkoleniach i kursach, które pozwalają na rozwój wiedzy z zakresu negocjacji i komunikacji.',
                    'en' => 'Participating in training and courses that allow for the development of knowledge in negotiation and communication.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9750,
                'name' => json_encode([
                    'pl' => 'Dokonywanie analizy zakończonych negocjacji pod kątem osiągnięcia zamierzonych celów i oczekiwanych rezultatów.',
                    'en' => 'Analyzing completed negotiations for the achievement of intended goals and expected results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9751,
                'name' => json_encode([
                    'pl' => 'Ocena, jakie techniki i strategie okazały się najskuteczniejsze, oraz identyfikowanie obszarów do poprawy.',
                    'en' => 'Evaluating which techniques and strategies were most effective and identifying areas for improvement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9752,
                'name' => json_encode([
                    'pl' => 'Raportowanie wyników negocjacji zarządowi oraz proponowanie zmian w strategii negocjacyjnej na przyszłość.',
                    'en' => 'Reporting the results of negotiations to management and suggesting changes to the negotiation strategy for the future.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9753,
                'name' => json_encode([
                    'pl' => 'Planowanie i organizowanie czasu negocjacji, aby efektywnie przeprowadzać spotkania i osiągać postawione cele.',
                    'en' => 'Planning and organizing negotiation time to effectively conduct meetings and achieve set goals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9754,
                'name' => json_encode([
                    'pl' => 'Ustalanie priorytetów i harmonogramów negocjacyjnych, które pozwalają na płynne realizowanie etapów rozmów.',
                    'en' => 'Setting priorities and negotiation schedules that allow for smooth execution of the stages of discussions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9755,
                'name' => json_encode([
                    'pl' => 'Unikanie przeciągania negocjacji poprzez efektywne zarządzanie czasem i ustalanie realistycznych terminów.',
                    'en' => 'Avoiding prolonging negotiations by effectively managing time and setting realistic deadlines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9756,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie jasnej i skutecznej komunikacji z drugą stroną, unikając nieporozumień i błędnych interpretacji.',
                    'en' => 'Maintaining clear and effective communication with the other party, avoiding misunderstandings and misinterpretations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9757,
                'name' => json_encode([
                    'pl' => 'Wyrażanie stanowiska firmy w sposób zrozumiały i precyzyjny, aby uniknąć dwuznaczności.',
                    'en' => 'Expressing the company\'s position in a clear and precise manner to avoid ambiguity.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9758,
                'name' => json_encode([
                    'pl' => 'Stosowanie technik aktywnego słuchania i parafrazowania, aby upewnić się, że obie strony rozumieją swoje oczekiwania.',
                    'en' => 'Using active listening and paraphrasing techniques to ensure both parties understand their expectations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $ANALITYK_BIZNESOWY = [
            [
                'id' => 9759,
                'name' => json_encode([
                    'pl' => 'Zbieranie i dokumentowanie wymagań biznesowych od interesariuszy, takich jak zarząd, menedżerowie oraz użytkownicy końcowi.',
                    'en' => 'Gathering and documenting business requirements from stakeholders such as management, managers, and end-users.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9760,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie wywiadów, warsztatów i ankiet w celu zrozumienia potrzeb i oczekiwań związanych z projektem lub procesem.',
                    'en' => 'Conducting interviews, workshops, and surveys to understand the needs and expectations related to the project or process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9761,
                'name' => json_encode([
                    'pl' => 'Ustalanie priorytetów wymagań i ich hierarchizacja w celu skoncentrowania się na najważniejszych celach biznesowych.',
                    'en' => 'Prioritizing requirements and establishing their hierarchy to focus on the most important business goals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9762,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentacji zawierającej szczegółowe opisy wymagań funkcjonalnych i niefunkcjonalnych.',
                    'en' => 'Preparing documentation that contains detailed descriptions of functional and non-functional requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9763,
                'name' => json_encode([
                    'pl' => 'Tworzenie specyfikacji procesów, diagramów przepływu pracy oraz modeli biznesowych.',
                    'en' => 'Creating process specifications, workflow diagrams, and business models.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9764,
                'name' => json_encode([
                    'pl' => 'Upewnianie się, że dokumentacja jest jasna, precyzyjna i zrozumiała dla wszystkich interesariuszy oraz zespołów technicznych.',
                    'en' => 'Ensuring that the documentation is clear, precise, and understandable for all stakeholders and technical teams.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9765,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analizy istniejących procesów biznesowych w celu identyfikacji ich słabych punktów i możliwości optymalizacji.',
                    'en' => 'Analyzing existing business processes to identify weaknesses and opportunities for optimization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9766,
                'name' => json_encode([
                    'pl' => 'Tworzenie map procesów (as-is), które odzwierciedlają aktualny stan operacji.',
                    'en' => 'Creating process maps (as-is) that reflect the current state of operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9767,
                'name' => json_encode([
                    'pl' => 'Proponowanie usprawnień i modelowanie procesów docelowych (to-be), które mogą zwiększyć efektywność operacyjną.',
                    'en' => 'Proposing improvements and modeling target processes (to-be) that can increase operational efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9768,
                'name' => json_encode([
                    'pl' => 'Projektowanie nowych procesów lub modyfikowanie istniejących w celu usprawnienia działania firmy.',
                    'en' => "Designing new processes or modifying existing ones to improve the company's operations."
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9769,
        'name' => json_encode([
            'pl' => 'Współpraca z zespołami operacyjnymi, aby wdrożyć zmiany procesowe i monitorować ich efekty.',
            'en' => 'Collaborating with operational teams to implement process changes and monitor their effects.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9770,
        'name' => json_encode([
            'pl' => 'Stosowanie narzędzi do modelowania procesów, takich jak BPMN (Business Process Model and Notation), aby zilustrować proponowane rozwiązania.',
            'en' => 'Using process modeling tools such as BPMN (Business Process Model and Notation) to illustrate proposed solutions.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9771,
        'name' => json_encode([
            'pl' => 'Przeprowadzanie analiz danych, które pomagają w identyfikacji trendów, wzorców i obszarów do poprawy.',
            'en' => 'Conducting data analyses that help identify trends, patterns, and areas for improvement.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9772,
        'name' => json_encode([
            'pl' => 'Tworzenie raportów i dashboardów, które dostarczają kluczowych wskaźników (KPI) i danych na potrzeby zarządzania.',
            'en' => 'Creating reports and dashboards that provide key performance indicators (KPI) and data for management.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9773,
        'name' => json_encode([
            'pl' => 'Dostarczanie informacji, które wspierają decyzje strategiczne i operacyjne.',
            'en' => 'Providing information that supports strategic and operational decisions.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9774,
        'name' => json_encode([
            'pl' => 'Przekazywanie zespołowi IT wymagań biznesowych i wspieranie ich w tworzeniu systemów odpowiadających na potrzeby użytkowników.',
            'en' => 'Conveying business requirements to the IT team and supporting them in creating systems that meet user needs.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9775,
        'name' => json_encode([
            'pl' => 'Testowanie nowych funkcji i systemów, aby upewnić się, że spełniają wymagania biznesowe.',
            'en' => 'Testing new features and systems to ensure they meet business requirements.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9776,
        'name' => json_encode([
            'pl' => 'Pomoc w przeprowadzaniu testów akceptacyjnych (UAT) oraz zapewnianie, że użytkownicy końcowi są gotowi do pracy z nowym systemem.',
            'en' => 'Assisting in conducting user acceptance tests (UAT) and ensuring end-users are ready to work with the new system.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9777,
        'name' => json_encode([
            'pl' => 'Utrzymywanie regularnej komunikacji z interesariuszami w celu informowania ich o postępach projektu, statusie i ewentualnych problemach.',
            'en' => 'Maintaining regular communication with stakeholders to inform them about project progress, status, and potential issues.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9778,
        'name' => json_encode([
            'pl' => 'Organizowanie spotkań i prezentacji, które pomagają wyjaśnić złożone zagadnienia techniczne i biznesowe.',
            'en' => 'Organizing meetings and presentations that help clarify complex technical and business issues.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9779,
        'name' => json_encode([
            'pl' => 'Pełnienie roli pośrednika między działami biznesowymi a technicznymi, aby zapewnić spójność i zrozumienie wymagań.',
            'en' => 'Acting as an intermediary between business and technical departments to ensure consistency and understanding of requirements.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9780,
        'name' => json_encode([
            'pl' => 'Identyfikowanie ryzyk związanych z wdrażaniem nowych rozwiązań lub zmian procesowych.',
            'en' => 'Identifying risks associated with implementing new solutions or process changes.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9781,
        'name' => json_encode([
            'pl' => 'Opracowywanie planów minimalizacji ryzyka i strategii reagowania na potencjalne zagrożenia.',
            'en' => 'Developing risk mitigation plans and response strategies for potential threats.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9782,
        'name' => json_encode([
            'pl' => 'Monitorowanie ryzyk na różnych etapach projektu oraz podejmowanie działań naprawczych, jeśli jest to konieczne.',
            'en' => 'Monitoring risks at various stages of the project and taking corrective actions as necessary.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9783,
        'name' => json_encode([
            'pl' => 'Dostarczanie analiz i rekomendacji wspierających zarząd w podejmowaniu decyzji biznesowych.',
            'en' => 'Providing analyses and recommendations that support management in making business decisions.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9784,
        'name' => json_encode([
            'pl' => 'Opracowywanie scenariuszy oraz analizowanie ich potencjalnych skutków dla organizacji.',
            'en' => 'Developing scenarios and analyzing their potential impacts on the organization.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9785,
        'name' => json_encode([
            'pl' => 'Udział w tworzeniu planów strategicznych i operacyjnych, które przyczyniają się do osiągnięcia długoterminowych celów firmy.',
            'en' => 'Participating in the development of strategic and operational plans that contribute to achieving the company\'s long-term goals.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9786,
        'name' => json_encode([
            'pl' => 'Udział w testach akceptacyjnych oraz sprawdzanie, czy wdrożone rozwiązania spełniają zdefiniowane wymagania.',
            'en' => 'Participating in acceptance testing and checking whether the implemented solutions meet defined requirements.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9787,
        'name' => json_encode([
            'pl' => 'Tworzenie przypadków testowych, scenariuszy i procedur walidacyjnych, aby upewnić się, że systemy działają zgodnie z oczekiwaniami.',
            'en' => 'Creating test cases, scenarios, and validation procedures to ensure that systems function as expected.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9788,
        'name' => json_encode([
            'pl' => 'Przekazywanie informacji zwrotnej zespołom technicznym i uczestniczenie w procesie rozwiązywania problemów.',
            'en' => 'Providing feedback to technical teams and participating in the problem-solving process.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9789,
        'name' => json_encode([
            'pl' => 'Opracowywanie i aktualizowanie dokumentacji projektowej, procesowej i systemowej.',
            'en' => 'Developing and updating project, process, and system documentation.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9790,
        'name' => json_encode([
            'pl' => 'Tworzenie instrukcji dla użytkowników końcowych oraz innych materiałów szkoleniowych.',
            'en' => 'Creating user manuals and other training materials.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9791,
        'name' => json_encode([
            'pl' => 'Zapewnienie, że dokumentacja jest zawsze aktualna i dostępna dla zespołów, które jej potrzebują.',
            'en' => 'Ensuring that documentation is always up-to-date and accessible to teams that need it.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9792,
        'name' => json_encode([
            'pl' => 'Organizowanie szkoleń i warsztatów dla użytkowników końcowych, aby pomóc im w adaptacji do nowych procesów lub systemów.',
            'en' => 'Organizing training and workshops for end-users to help them adapt to new processes or systems.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9793,
        'name' => json_encode([
            'pl' => 'Przekazywanie wiedzy i najlepszych praktyk dotyczących korzystania z nowych rozwiązań.',
            'en' => 'Sharing knowledge and best practices regarding the use of new solutions.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9794,
        'name' => json_encode([
            'pl' => 'Zapewnienie wsparcia użytkownikom w okresie przejściowym, aby ułatwić wdrożenie zmian.',
            'en' => 'Providing support to users during the transition period to facilitate the implementation of changes.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9795,
        'name' => json_encode([
            'pl' => 'Wspieranie procesu zarządzania zmianą poprzez informowanie i angażowanie pracowników na różnych poziomach organizacji.',
            'en' => 'Supporting the change management process by informing and engaging employees at various levels of the organization.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9796,
        'name' => json_encode([
            'pl' => 'Przygotowywanie strategii wdrażania zmian, które minimalizują opór oraz przyspieszają adaptację do nowych procesów.',
            'en' => 'Preparing change implementation strategies that minimize resistance and accelerate adaptation to new processes.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9797,
        'name' => json_encode([
            'pl' => 'Śledzenie postępów wdrożenia i reagowanie na feedback, aby zoptymalizować proces adaptacji.',
            'en' => 'Monitoring the implementation progress and responding to feedback to optimize the adaptation process.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9798,
        'name' => json_encode([
            'pl' => 'Analiza i ocena skuteczności wdrożonych procesów, systemów lub innych zmian.',
            'en' => 'Analyzing and assessing the effectiveness of implemented processes, systems, or other changes.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9799,
        'name' => json_encode([
            'pl' => 'Tworzenie raportów po wdrożeniu, które pokazują wpływ zmian na wskaźniki efektywności.',
            'en' => 'Creating post-implementation reports that show the impact of changes on performance indicators.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9800,
        'name' => json_encode([
            'pl' => 'Przedstawianie rekomendacji dotyczących dalszych działań i optymalizacji na podstawie wyników monitoringu.',
            'en' => 'Providing recommendations for further actions and optimizations based on monitoring results.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9801,
        'name' => json_encode([
            'pl' => 'Przeprowadzanie analizy rynku oraz benchmarking konkurencji, aby zidentyfikować najlepsze praktyki.',
            'en' => 'Conducting market analysis and benchmarking competitors to identify best practices.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9802,
        'name' => json_encode([
            'pl' => 'Ocena, jak nowe technologie i rozwiązania stosowane na rynku mogą wpłynąć na rozwój firmy.',
            'en' => 'Assessing how new technologies and solutions used in the market may affect the company\'s development.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9803,
        'name' => json_encode([
            'pl' => 'Rekomendowanie działań, które pozwolą firmie osiągnąć konkurencyjność i przewagę rynkową.',
            'en' => 'Recommending actions that will enable the company to achieve competitiveness and market advantage.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9804,
        'name' => json_encode([
            'pl' => 'Identyfikowanie obszarów, w których automatyzacja może zwiększyć efektywność i zmniejszyć koszty.',
            'en' => 'Identifying areas where automation can increase efficiency and reduce costs.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9805,
        'name' => json_encode([
            'pl' => 'Wdrażanie narzędzi i systemów wspierających automatyzację, takich jak RPA (Robotic Process Automation).',
            'en' => 'Implementing tools and systems supporting automation, such as RPA (Robotic Process Automation).'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9806,
        'name' => json_encode([
            'pl' => 'Współpraca z działem IT w celu zapewnienia, że automatyzacja jest zgodna z wymaganiami i spełnia potrzeby biznesowe.',
            'en' => 'Collaborating with the IT department to ensure that automation aligns with requirements and meets business needs.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9807,
        'name' => json_encode([
            'pl' => 'Wspieranie kultury ciągłego doskonalenia poprzez identyfikację obszarów wymagających poprawy.',
            'en' => 'Supporting a culture of continuous improvement by identifying areas for enhancement.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9808,
        'name' => json_encode([
            'pl' => 'Przeprowadzanie regularnych analiz wydajności procesów oraz sugerowanie nowych rozwiązań.',
            'en' => 'Conducting regular performance analyses of processes and suggesting new solutions.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9809,
        'name' => json_encode([
            'pl' => 'Monitorowanie zmian w otoczeniu biznesowym i adaptacja procesów do nowych wyzwań.',
            'en' => 'Monitoring changes in the business environment and adapting processes to new challenges.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9810,
        'name' => json_encode([
            'pl' => 'Współpraca z zarządem i działem IT w zakresie planowania strategii cyfrowej.',
            'en' => 'Collaborating with management and the IT department to plan digital strategy.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9811,
        'name' => json_encode([
            'pl' => 'Analiza trendów technologicznych i ich potencjalnego wpływu na rozwój organizacji.',
            'en' => 'Analyzing technological trends and their potential impact on the organization\'s development.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 9812,
        'name' => json_encode([
            'pl' => 'Opracowywanie rekomendacji dotyczących nowych technologii, które mogą wspierać cele strategiczne firmy.',
            'en' => 'Developing recommendations for new technologies that can support the company\'s strategic objectives.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ]
];
        $SPECJALISTA_DO_SPRAW_ZARZĄDZANIA_RYZYKIEM = [
            [
                'id' => 9813,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analiz w celu identyfikacji potencjalnych ryzyk, które mogą wpłynąć na działalność organizacji.',
                    'en' => 'Conducting analyses to identify potential risks that may impact the organization\'s operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9814,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi działami, aby zrozumieć procesy operacyjne i zidentyfikować obszary narażone na ryzyko.',
                    'en' => 'Collaborating with other departments to understand operational processes and identify areas exposed to risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9815,
                'name' => json_encode([
                    'pl' => 'Stosowanie narzędzi do identyfikacji ryzyk, takich jak analizy SWOT, wywiady z pracownikami oraz przegląd dokumentacji.',
                    'en' => 'Using tools to identify risks, such as SWOT analyses, employee interviews, and document reviews.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9816,
                'name' => json_encode([
                    'pl' => 'Dokładna ocena zidentyfikowanych ryzyk, w tym ich wpływu na organizację i prawdopodobieństwa ich wystąpienia.',
                    'en' => 'Thoroughly assessing identified risks, including their impact on the organization and the likelihood of their occurrence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9817,
                'name' => json_encode([
                    'pl' => 'Kategoryzacja ryzyk na podstawie ich wpływu i pilności, aby priorytetyzować działania zaradcze.',
                    'en' => 'Categorizing risks based on their impact and urgency to prioritize corrective actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9818,
                'name' => json_encode([
                    'pl' => 'Stosowanie metod analizy ryzyka, takich jak analiza scenariuszy, analiza wpływu oraz ocena wartości oczekiwanej.',
                    'en' => 'Applying risk analysis methods such as scenario analysis, impact analysis, and expected value assessment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9819,
                'name' => json_encode([
                    'pl' => 'Tworzenie strategii zarządzania ryzykiem, które odpowiadają na potrzeby organizacji i minimalizują jej narażenie na ryzyko.',
                    'en' => 'Developing risk management strategies that address the organization\'s needs and minimize its exposure to risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9820,
                'name' => json_encode([
                    'pl' => 'Opracowywanie procedur i polityk zarządzania ryzykiem dostosowanych do specyfiki działalności firmy.',
                    'en' => 'Developing risk management procedures and policies tailored to the company\'s specific operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9821,
                'name' => json_encode([
                    'pl' => 'Przedstawianie rekomendacji zarządczych dotyczących minimalizacji ryzyk oraz planów awaryjnych.',
                    'en' => 'Providing management recommendations for risk minimization and contingency plans.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9822,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie szczegółowych planów reagowania na ryzyko, które obejmują działania prewencyjne i naprawcze.',
                    'en' => 'Preparing detailed risk response plans that include preventive and corrective actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9823,
                'name' => json_encode([
                    'pl' => 'Wdrażanie procedur zarządzania ryzykiem, takich jak kontrola operacyjna, procedury zabezpieczeń oraz plany reakcji na kryzysy.',
                    'en' => 'Implementing risk management procedures, such as operational controls, security procedures, and crisis response plans.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9824,
                'name' => json_encode([
                    'pl' => 'Ustalanie środków zaradczych, takich jak ubezpieczenia, zabezpieczenia finansowe czy wdrażanie technologii ochronnych.',
                    'en' => 'Establishing remedial measures such as insurance, financial safeguards, or implementing protective technologies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9825,
                'name' => json_encode([
                    'pl' => 'Regularne śledzenie poziomu ryzyka w organizacji oraz sprawdzanie skuteczności wdrożonych strategii zarządzania ryzykiem.',
                    'en' => 'Regularly monitoring the level of risk in the organization and assessing the effectiveness of implemented risk management strategies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9826,
                'name' => json_encode([
                    'pl' => 'Prowadzenie systematycznych przeglądów ryzyka, aby dostosować strategie do zmieniających się warunków rynkowych lub operacyjnych.',
                    'en' => 'Conducting systematic risk reviews to adapt strategies to changing market or operational conditions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9827,
                'name' => json_encode([
                    'pl' => 'Raportowanie o zmianach poziomu ryzyka zarządowi oraz odpowiednim interesariuszom.',
                    'en' => 'Reporting changes in risk levels to management and relevant stakeholders.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9828,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analiz skuteczności wdrożonych mechanizmów kontrolnych oraz identyfikowanie obszarów wymagających poprawy.',
                    'en' => 'Conducting analyses of the effectiveness of implemented control mechanisms and identifying areas for improvement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9829,
                'name' => json_encode([
                    'pl' => 'Ocena, czy obecne procedury zarządzania ryzykiem są wystarczające, aby zapobiegać i minimalizować ryzyka.',
                    'en' => 'Evaluating whether current risk management procedures are sufficient to prevent and minimize risks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9830,
                'name' => json_encode([
                    'pl' => 'Proponowanie usprawnień i aktualizacji w mechanizmach kontroli ryzyka, aby były bardziej efektywne.',
                    'en' => 'Suggesting improvements and updates to risk control mechanisms to enhance their effectiveness.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9831,
                'name' => json_encode([
                    'pl' => 'Identyfikowanie i analiza ryzyk finansowych, takich jak ryzyko kredytowe, walutowe, stopy procentowej czy płynności.',
                    'en' => 'Identifying and analyzing financial risks such as credit risk, currency risk, interest rate risk, or liquidity risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9832,
                'name' => json_encode([
                    'pl' => 'Opracowywanie strategii finansowych, które zabezpieczają organizację przed wahaniami rynkowymi lub stratami finansowymi.',
                    'en' => 'Developing financial strategies that protect the organization from market fluctuations or financial losses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9833,
                'name' => json_encode([
                    'pl' => 'Stosowanie narzędzi do zabezpieczeń finansowych, takich jak hedging, dywersyfikacja inwestycji oraz monitorowanie zadłużenia.',
                    'en' => 'Utilizing financial risk management tools such as hedging, investment diversification, and debt monitoring.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9834,
                'name' => json_encode([
                    'pl' => 'Analiza ryzyk operacyjnych, takich jak ryzyko awarii technologicznych, błędy ludzkie, problemy logistyczne i inne zagrożenia dla działalności.',
                    'en' => 'Analyzing operational risks such as technological failures, human errors, logistical issues, and other threats to operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9835,
                'name' => json_encode([
                    'pl' => 'Tworzenie planów zarządzania ryzykiem operacyjnym, aby zabezpieczyć kluczowe procesy biznesowe.',
                    'en' => 'Creating operational risk management plans to safeguard key business processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9836,
                'name' => json_encode([
                    'pl' => 'Współpraca z działami operacyjnymi w celu wdrażania procedur i systemów, które minimalizują ryzyko operacyjne.',
                    'en' => 'Collaborating with operational departments to implement procedures and systems that minimize operational risks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9837,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie planów działania na wypadek wystąpienia kryzysu, takich jak awarie, katastrofy naturalne czy cyberataki.',
                    'en' => 'Preparing action plans for crises such as failures, natural disasters, or cyberattacks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9838,
                'name' => json_encode([
                    'pl' => 'Organizowanie ćwiczeń symulacyjnych oraz scenariuszy, które przygotowują zespół do radzenia sobie w sytuacjach kryzysowych.',
                    'en' => 'Organizing simulation exercises and scenarios that prepare the team for crisis situations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9839,
                'name' => json_encode([
                    'pl' => 'Wdrażanie procedur szybkiego reagowania, które minimalizują skutki kryzysu oraz umożliwiają szybkie przywrócenie działalności.',
                    'en' => 'Implementing rapid response procedures that minimize the impact of a crisis and enable quick business recovery.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9840,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analizy kosztów związanych z ryzykiem oraz ocenianie, czy koszty zarządzania ryzykiem są opłacalne.',
                    'en' => 'Conducting cost analyses related to risk and evaluating whether risk management costs are cost-effective.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9841,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analizy koszt-korzyść (Cost-Benefit Analysis) w celu oceny opłacalności strategii minimalizujących ryzyko.',
                    'en' => 'Conducting cost-benefit analysis to assess the cost-effectiveness of risk-minimizing strategies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9842,
                'name' => json_encode([
                    'pl' => 'Wdrażanie rozwiązań, które oferują największą korzyść finansową przy minimalnym koszcie wdrożenia.',
                    'en' => 'Implementing solutions that provide the greatest financial benefit at minimal implementation cost.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9843,
                'name' => json_encode([
                    'pl' => 'Organizowanie szkoleń z zakresu zarządzania ryzykiem dla pracowników, aby podnieść świadomość zagrożeń.',
                    'en' => 'Organizing risk management training for employees to raise awareness of threats.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9844,
                'name' => json_encode([
                    'pl' => 'Przekazywanie wiedzy na temat polityki zarządzania ryzykiem, procedur oraz zasad bezpieczeństwa.',
                    'en' => 'Providing knowledge about risk management policy, procedures, and safety principles.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9845,
                'name' => json_encode([
                    'pl' => 'Budowanie kultury zarządzania ryzykiem w organizacji, która promuje proaktywne podejście do zagrożeń.',
                    'en' => 'Building a risk management culture in the organization that promotes a proactive approach to threats.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9846,
                'name' => json_encode([
                    'pl' => 'Identyfikacja zagrożeń cyberbezpieczeństwa, takich jak ataki hakerskie, wycieki danych oraz zagrożenia wewnętrzne.',
                    'en' => 'Identifying cybersecurity threats such as hacking, data leaks, and internal threats.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9847,
                'name' => json_encode([
                    'pl' => 'Wdrażanie polityk i procedur bezpieczeństwa informacji, aby chronić dane firmowe i zasoby informatyczne.',
                    'en' => 'Implementing information security policies and procedures to protect company data and IT resources.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9848,
                'name' => json_encode([
                    'pl' => 'Współpraca z zespołem IT w celu wdrażania zabezpieczeń technologicznych, takich jak firewalle, systemy antywirusowe i szyfrowanie danych.',
                    'en' => 'Collaborating with the IT team to implement technological safeguards such as firewalls, antivirus systems, and data encryption.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9849,
                'name' => json_encode([
                    'pl' => 'Monitorowanie, czy organizacja przestrzega obowiązujących przepisów prawnych, regulacji branżowych i standardów bezpieczeństwa.',
                    'en' => 'Monitoring whether the organization complies with applicable laws, industry regulations, and security standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9850,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie zgodności z regulacjami w zakresie ochrony danych osobowych, zasad AML (przeciwdziałanie praniu pieniędzy) oraz standardów ISO.',
                    'en' => 'Maintaining compliance with regulations regarding personal data protection, AML standards, and ISO standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9851,
                'name' => json_encode([
                    'pl' => 'Wdrażanie polityk zgodności, aby zapewnić, że organizacja spełnia wszystkie wymogi prawne i regulacyjne.',
                    'en' => 'Implementing compliance policies to ensure that the organization meets all legal and regulatory requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9852,
                'name' => json_encode([
                    'pl' => 'Tworzenie regularnych raportów dotyczących ryzyk dla zarządu oraz innych interesariuszy.',
                    'en' => 'Creating regular risk reports for management and other stakeholders.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9853,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie wszystkich zidentyfikowanych ryzyk, strategii zarządzania oraz działań zapobiegawczych.',
                    'en' => 'Documenting all identified risks, management strategies, and preventive actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9854,
                'name' => json_encode([
                    'pl' => 'Aktualizacja dokumentacji ryzykowej, aby odzwierciedlała bieżący poziom ryzyka oraz wprowadzone zmiany.',
                    'en' => 'Updating risk documentation to reflect the current risk level and changes made.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9855,
                'name' => json_encode([
                    'pl' => 'Analiza i ocena procesów zarządzania ryzykiem w celu identyfikacji obszarów wymagających poprawy.',
                    'en' => 'Analyzing and assessing risk management processes to identify areas for improvement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9856,
                'name' => json_encode([
                    'pl' => 'Proponowanie i wdrażanie nowych procedur, które mogą zwiększyć efektywność zarządzania ryzykiem.',
                    'en' => 'Suggesting and implementing new procedures that may enhance risk management effectiveness.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9857,
                'name' => json_encode([
                    'pl' => 'Współpraca z działami operacyjnymi w celu optymalizacji procesów i procedur, które zmniejszają narażenie na ryzyko.',
                    'en' => 'Collaborating with operational departments to optimize processes and procedures that reduce exposure to risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9858,
                'name' => json_encode([
                    'pl' => 'Współpraca z zewnętrznymi specjalistami ds. ryzyka, takimi jak audytorzy, doradcy finansowi i specjaliści ds. bezpieczeństwa.',
                    'en' => 'Collaborating with external risk specialists such as auditors, financial advisors, and security experts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9859,
                'name' => json_encode([
                    'pl' => 'Uczestniczenie w audytach zewnętrznych oraz wdrażanie zaleceń wynikających z ich raportów.',
                    'en' => 'Participating in external audits and implementing recommendations from their reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9860,
                'name' => json_encode([
                    'pl' => 'Wykorzystanie ekspertyzy zewnętrznych doradców w celu dostosowania strategii zarządzania ryzykiem do najlepszych praktyk rynkowych.',
                    'en' => 'Leveraging the expertise of external advisors to align risk management strategies with industry best practices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9861,
                'name' => json_encode([
                    'pl' => 'Analizowanie, jak zidentyfikowane ryzyka mogą wpłynąć na realizację celów strategicznych firmy.',
                    'en' => 'Analyzing how identified risks may impact the achievement of the company\'s strategic objectives.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9862,
                'name' => json_encode([
                    'pl' => 'Opracowywanie rekomendacji dla zarządu w zakresie dostosowania strategii do potencjalnych ryzyk.',
                    'en' => 'Developing recommendations for management on how to adjust strategies to potential risks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9863,
                'name' => json_encode([
                    'pl' => 'Wspieranie procesu podejmowania decyzji strategicznych poprzez dostarczanie analiz i prognoz dotyczących ryzyk.',
                    'en' => 'Supporting the strategic decision-making process by providing analyses and forecasts related to risks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9864,
                'name' => json_encode([
                    'pl' => 'Wdrażanie oprogramowania i narzędzi wspierających zarządzanie ryzykiem, takich jak systemy ERM (Enterprise Risk Management).',
                    'en' => 'Implementing software and tools to support risk management, such as ERM (Enterprise Risk Management) systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9865,
                'name' => json_encode([
                    'pl' => 'Monitorowanie efektywności narzędzi zarządzania ryzykiem oraz ich regularna aktualizacja.',
                    'en' => 'Monitoring the effectiveness of risk management tools and updating them regularly.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9866,
                'name' => json_encode([
                    'pl' => 'Wykorzystanie zaawansowanych metod analitycznych, aby lepiej zrozumieć profil ryzyka organizacji.',
                    'en' => 'Utilizing advanced analytical methods to better understand the organization\'s risk profile.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $PRACOWNICY_DO_SPRAW_RACHUNKOWOŚCI_I_KSIĘGOWOŚCI = [
            [
                'id' => 9867,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie wszystkich transakcji finansowych zgodnie z zasadami rachunkowości i polityką firmy.',
                    'en' => 'Recording all financial transactions according to accounting principles and company policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9868,
                'name' => json_encode([
                    'pl' => 'Księgowanie dokumentów kosztowych, przychodowych, należności, zobowiązań oraz operacji finansowych w księgach rachunkowych.',
                    'en' => 'Posting cost, revenue, receivable, payable documents, and financial operations in accounting books.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9869,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszystkie zapisy są dokładnie i terminowo wprowadzone do systemu księgowego.',
                    'en' => 'Ensuring all records are accurately and timely entered into the accounting system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9870,
                'name' => json_encode([
                    'pl' => 'Weryfikacja faktur, wyciągów bankowych, dowodów kasowych oraz innych dokumentów księgowych pod kątem ich kompletności i zgodności.',
                    'en' => 'Verifying invoices, bank statements, cash receipts, and other accounting documents for completeness and compliance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9871,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie poprawności formalnej i rachunkowej dokumentów przed ich zaksięgowaniem.',
                    'en' => 'Checking the formal and accounting correctness of documents before posting them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9872,
                'name' => json_encode([
                    'pl' => 'Archiwizacja dokumentacji księgowej zgodnie z wymogami prawnymi i polityką wewnętrzną firmy.',
                    'en' => 'Archiving accounting documentation in accordance with legal requirements and company internal policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9873,
                'name' => json_encode([
                    'pl' => 'Tworzenie miesięcznych, kwartalnych i rocznych sprawozdań finansowych, takich jak bilans, rachunek zysków i strat oraz rachunek przepływów pieniężnych.',
                    'en' => 'Preparing monthly, quarterly, and annual financial statements, such as balance sheets, income statements, and cash flow statements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9874,
                'name' => json_encode([
                    'pl' => 'Przekazywanie raportów finansowych zarządowi i innym działom na potrzeby monitorowania kondycji finansowej firmy.',
                    'en' => 'Delivering financial reports to management and other departments for monitoring the company\'s financial condition.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9875,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności sprawozdań z obowiązującymi przepisami rachunkowości (np. Międzynarodowe Standardy Sprawozdawczości Finansowej - MSSF, Krajowe Standardy Rachunkowości).',
                    'en' => 'Ensuring that reports comply with applicable accounting regulations (e.g., International Financial Reporting Standards - IFRS, National Accounting Standards).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9876,
                'name' => json_encode([
                    'pl' => 'Obliczanie podatków, takich jak VAT, CIT, PIT oraz przygotowywanie deklaracji podatkowych.',
                    'en' => 'Calculating taxes such as VAT, CIT, PIT and preparing tax declarations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9877,
                'name' => json_encode([
                    'pl' => 'Składanie deklaracji podatkowych do odpowiednich urzędów w terminie.',
                    'en' => 'Submitting tax declarations to the appropriate authorities on time.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9878,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zmian w przepisach podatkowych i dostosowywanie praktyk księgowych do bieżących regulacji.',
                    'en' => 'Monitoring changes in tax regulations and adjusting accounting practices to current regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9879,
                'name' => json_encode([
                    'pl' => 'Monitorowanie terminowości spłat należności od klientów i zobowiązań wobec dostawców.',
                    'en' => 'Monitoring the timeliness of receivable payments from clients and payables to suppliers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9880,
                'name' => json_encode([
                    'pl' => 'Przypominanie o terminach płatności oraz prowadzenie windykacji należności w przypadku opóźnień.',
                    'en' => 'Reminding about payment deadlines and managing collections of receivables in case of delays.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9881,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie analiz i raportów dotyczących struktury należności i zobowiązań.',
                    'en' => 'Preparing analyses and reports regarding the structure of receivables and payables.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9882,
                'name' => json_encode([
                    'pl' => 'Monitorowanie i analiza kosztów operacyjnych, aby identyfikować obszary do optymalizacji.',
                    'en' => 'Monitoring and analyzing operating costs to identify areas for optimization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9883,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów kosztowych oraz analizowanie odchyleń od planowanych budżetów.',
                    'en' => 'Preparing cost reports and analyzing deviations from planned budgets.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9884,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi działami w celu monitorowania kosztów i kontrolowania zgodności z budżetem.',
                    'en' => 'Collaborating with other departments to monitor costs and control compliance with the budget.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9885,
                'name' => json_encode([
                    'pl' => 'Wspieranie procesu tworzenia budżetów rocznych, kwartalnych i miesięcznych w oparciu o dane finansowe.',
                    'en' => 'Supporting the annual, quarterly, and monthly budgeting process based on financial data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9886,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wykonania budżetu i zgłaszanie ewentualnych odchyleń od zaplanowanych wartości.',
                    'en' => 'Monitoring budget execution and reporting any deviations from planned values.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9887,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie prognoz finansowych i dostosowywanie budżetu na podstawie bieżącej sytuacji finansowej.',
                    'en' => 'Preparing financial forecasts and adjusting the budget based on the current financial situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9888,
                'name' => json_encode([
                    'pl' => 'Monitorowanie przepływów pieniężnych w celu zapewnienia płynności finansowej firmy.',
                    'en' => 'Monitoring cash flows to ensure the financial liquidity of the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9889,
                'name' => json_encode([
                    'pl' => 'Prognozowanie wpływów i wydatków, aby zminimalizować ryzyko braku środków na pokrycie bieżących zobowiązań.',
                    'en' => 'Forecasting revenues and expenses to minimize the risk of insufficient funds to cover current liabilities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9890,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem finansowym w celu planowania przepływów gotówkowych i optymalizacji zasobów finansowych.',
                    'en' => 'Collaborating with the finance department to plan cash flows and optimize financial resources.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9891,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie zgodności działań księgowych z obowiązującymi przepisami prawa, w tym przepisami podatkowymi i rachunkowości.',
                    'en' => 'Maintaining compliance of accounting activities with applicable laws, including tax regulations and accounting.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9892,
                'name' => json_encode([
                    'pl' => 'Zapewnienie przestrzegania zasad ochrony danych osobowych oraz innych regulacji dotyczących dokumentacji finansowej.',
                    'en' => 'Ensuring compliance with personal data protection regulations and other regulations regarding financial documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9893,
                'name' => json_encode([
                    'pl' => 'Śledzenie zmian w przepisach prawnych i dostosowywanie procedur księgowych do aktualnych wymogów.',
                    'en' => 'Tracking changes in legal regulations and adjusting accounting procedures to current requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9894,
                'name' => json_encode([
                    'pl' => 'Opracowywanie i wdrażanie polityk oraz procedur rachunkowych zgodnych z przepisami oraz wewnętrznymi standardami.',
                    'en' => 'Developing and implementing accounting policies and procedures in accordance with regulations and internal standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9895,
                'name' => json_encode([
                    'pl' => 'Zapewnienie spójności i zgodności operacji księgowych z przyjętymi zasadami rachunkowości.',
                    'en' => 'Ensuring consistency and compliance of accounting operations with established accounting principles.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9896,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowych procedur i aktualizowanie istniejących w celu optymalizacji procesów księgowych.',
                    'en' => 'Implementing new procedures and updating existing ones to optimize accounting processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9897,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentacji na potrzeby audytów wewnętrznych i zewnętrznych.',
                    'en' => 'Preparing documentation for internal and external audits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9898,
                'name' => json_encode([
                    'pl' => 'Współpraca z audytorami w celu zapewnienia zgodności i przejrzystości dokumentacji księgowej.',
                    'en' => 'Collaborating with auditors to ensure compliance and transparency of accounting documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9899,
                'name' => json_encode([
                    'pl' => 'Wdrażanie zaleceń wynikających z audytów, które przyczyniają się do poprawy procesów księgowych i zgodności finansowej.',
                    'en' => 'Implementing recommendations from audits that contribute to improving accounting processes and financial compliance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9900,
                'name' => json_encode([
                    'pl' => 'Wdrażanie narzędzi do automatyzacji procesów księgowych, takich jak systemy ERP czy systemy do obsługi faktur.',
                    'en' => 'Implementing tools for automating accounting processes, such as ERP systems or invoicing software.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9901,
                'name' => json_encode([
                    'pl' => 'Analiza istniejących procesów księgowych w celu identyfikacji możliwości ich optymalizacji.',
                    'en' => 'Analyzing existing accounting processes to identify opportunities for optimization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9902,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem IT w zakresie wdrażania rozwiązań technologicznych wspierających księgowość.',
                    'en' => 'Collaborating with the IT department to implement technological solutions supporting accounting.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9903,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów na potrzeby zarządu, w tym zestawień przychodów, kosztów, zysków i przepływów pieniężnych.',
                    'en' => 'Preparing reports for management, including summaries of revenues, costs, profits, and cash flows.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9904,
                'name' => json_encode([
                    'pl' => 'Dostarczanie analiz i prognoz finansowych, które wspierają proces podejmowania decyzji strategicznych.',
                    'en' => 'Providing financial analyses and forecasts that support the strategic decision-making process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9905,
                'name' => json_encode([
                    'pl' => 'Opracowywanie dodatkowych analiz na potrzeby monitorowania efektywności operacyjnej firmy.',
                    'en' => 'Developing additional analyses for monitoring the operational efficiency of the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9906,
                'name' => json_encode([
                    'pl' => 'Regularne przeglądanie i uzgadnianie sald kont księgowych, w celu zapewnienia dokładności i spójności ksiąg rachunkowych.',
                    'en' => 'Regularly reviewing and reconciling the balances of accounting accounts to ensure accuracy and consistency of accounting books.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9907,
                'name' => json_encode([
                    'pl' => 'Identyfikowanie i korygowanie błędów w zapisach księgowych.',
                    'en' => 'Identifying and correcting errors in accounting entries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9908,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analiz bilansowych i uzgodnień międzyokresowych.',
                    'en' => 'Conducting balance analyses and inter-period reconciliations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9909,
                'name' => json_encode([
                    'pl' => 'Zarządzanie rozliczeniami międzyokresowymi, w tym obliczanie i księgowanie przychodów i kosztów przypadających na różne okresy.',
                    'en' => 'Managing inter-period settlements, including calculating and posting revenues and expenses allocated to various periods.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9910,
                'name' => json_encode([
                    'pl' => 'Zapewnienie prawidłowego rozliczenia kosztów, takich jak odpisy amortyzacyjne, rezerwy czy aktywa i zobowiązania międzyokresowe.',
                    'en' => 'Ensuring proper accounting of costs, such as depreciation, provisions, and inter-period assets and liabilities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9911,
                'name' => json_encode([
                    'pl' => 'Monitorowanie realizacji rozliczeń międzyokresowych i dostosowywanie zapisów w miarę potrzeb.',
                    'en' => 'Monitoring the implementation of inter-period settlements and adjusting entries as needed.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9912,
                'name' => json_encode([
                    'pl' => 'Wspieranie innych działów w zakresie procedur księgowych i finansowych.',
                    'en' => 'Supporting other departments in accounting and financial procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9913,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie zasad księgowych, pomaganie w interpretacji danych finansowych i rozliczeń.',
                    'en' => 'Explaining accounting principles, assisting in interpreting financial data and settlements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9914,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji na temat budżetów, kosztów i przepływów pieniężnych.',
                    'en' => 'Providing information about budgets, costs, and cash flows.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9915,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w szkoleniach i kursach z zakresu rachunkowości, podatków i przepisów prawnych.',
                    'en' => 'Participating in training and courses on accounting, taxes, and legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9916,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy w zakresie nowych standardów rachunkowości i regulacji finansowych.',
                    'en' => 'Updating knowledge of new accounting standards and financial regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9917,
                'name' => json_encode([
                    'pl' => 'Dzielenie się wiedzą z młodszymi pracownikami oraz organizowanie szkoleń z zakresu księgowości i rachunkowości.',
                    'en' => 'Sharing knowledge with junior staff and organizing training on accounting and bookkeeping.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9918,
                'name' => json_encode([
                    'pl' => 'Systematyczna kontrola kosztów ponoszonych przez firmę w odniesieniu do założonych budżetów.',
                    'en' => 'Systematic control of costs incurred by the company in relation to the set budgets.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9919,
                'name' => json_encode([
                    'pl' => 'Analiza odchyleń oraz identyfikowanie przyczyn przekroczeń lub oszczędności w stosunku do planu finansowego.',
                    'en' => 'Analyzing deviations and identifying the reasons for overages or savings relative to the financial plan.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9920,
                'name' => json_encode([
                    'pl' => 'Rekomendowanie działań, które mogą pomóc w lepszym kontrolowaniu wydatków.',
                    'en' => 'Recommending actions that may help in better controlling expenditures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $PRACOWNICY_OBSLUGI_PLACOWEJ = [
            [
                'id' => 9921,
                'name' => json_encode([
                    'pl' => 'Obliczanie miesięcznych wynagrodzeń pracowników, uwzględniając ich podstawę płacową, nadgodziny, premie oraz dodatki.',
                    'en' => 'Calculating monthly employee salaries, taking into account their base salary, overtime, bonuses, and allowances.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9922,
                'name' => json_encode([
                    'pl' => 'Uwzględnianie potrąceń, takich jak składki ubezpieczeniowe, zaliczki na podatek dochodowy, zasiłki oraz inne obowiązkowe opłaty.',
                    'en' => 'Accounting for deductions such as insurance contributions, income tax advances, benefits, and other mandatory payments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9923,
                'name' => json_encode([
                    'pl' => 'Stosowanie stawek podatkowych oraz składek zgodnie z przepisami prawa.',
                    'en' => 'Applying tax rates and contributions in accordance with legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9924,
                'name' => json_encode([
                    'pl' => 'Tworzenie listy płac na podstawie wprowadzonych danych dotyczących wynagrodzeń i potrąceń.',
                    'en' => 'Creating the payroll based on entered data regarding salaries and deductions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9925,
                'name' => json_encode([
                    'pl' => 'Ustalanie i weryfikacja wszystkich składników płacowych dla poszczególnych pracowników.',
                    'en' => 'Determining and verifying all payroll components for individual employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9926,
                'name' => json_encode([
                    'pl' => 'Przekazywanie listy płac do zatwierdzenia oraz dostarczanie dokumentacji związanej z wynagrodzeniami do działu finansowego.',
                    'en' => 'Submitting the payroll for approval and providing wage-related documentation to the finance department.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9927,
                'name' => json_encode([
                    'pl' => 'Naliczanie składek na ubezpieczenia społeczne (ZUS) oraz składek zdrowotnych zgodnie z przepisami prawa.',
                    'en' => 'Calculating social insurance contributions (ZUS) and health insurance contributions according to legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9928,
                'name' => json_encode([
                    'pl' => 'Obliczanie podatku dochodowego od wynagrodzeń oraz przekazywanie zaliczek do urzędów skarbowych.',
                    'en' => 'Calculating income tax on salaries and transferring advances to tax offices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9929,
                'name' => json_encode([
                    'pl' => 'Sporządzanie i składanie deklaracji podatkowych oraz dokumentów rozliczeniowych do odpowiednich instytucji.',
                    'en' => 'Preparing and submitting tax declarations and settlement documents to the appropriate institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9930,
                'name' => json_encode([
                    'pl' => 'Naliczanie świadczeń takich jak premie, nagrody, dodatki urlopowe, trzynaste pensje oraz świadczenia socjalne.',
                    'en' => 'Calculating benefits such as bonuses, awards, holiday allowances, thirteenth salaries, and social benefits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9931,
                'name' => json_encode([
                    'pl' => 'Weryfikacja uprawnień pracowników do otrzymania poszczególnych świadczeń.',
                    'en' => 'Verifying employees’ entitlements to receive specific benefits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9932,
                'name' => json_encode([
                    'pl' => 'Zarządzanie wypłatami z funduszu socjalnego oraz innych świadczeń pozapłacowych, zgodnie z regulaminem wewnętrznym.',
                    'en' => 'Managing payouts from the social fund and other non-wage benefits according to internal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9933,
                'name' => json_encode([
                    'pl' => 'Przechowywanie i aktualizacja dokumentacji płacowej pracowników, w tym kartotek płacowych, umów, list obecności i urlopów.',
                    'en' => 'Storing and updating payroll documentation for employees, including payroll records, contracts, attendance lists, and leaves.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9934,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności dokumentacji z wymogami prawnymi oraz polityką prywatności.',
                    'en' => 'Ensuring compliance of documentation with legal requirements and privacy policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9935,
                'name' => json_encode([
                    'pl' => 'Archiwizacja dokumentów związanych z wynagrodzeniami, zgodnie z wymogami prawnymi dotyczącymi przechowywania danych.',
                    'en' => 'Archiving documents related to wages in accordance with legal requirements for data storage.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9936,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie zaświadczeń o zarobkach oraz innych dokumentów wymaganych przez pracowników (np. do celów kredytowych lub zasiłkowych).',
                    'en' => 'Preparing certificates of earnings and other documents required by employees (e.g., for loan or benefit purposes).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9937,
                'name' => json_encode([
                    'pl' => 'Wydawanie zaświadczeń potwierdzających wysokość dochodu, składek oraz podatków odprowadzonych przez pracodawcę.',
                    'en' => 'Issuing certificates confirming income, contributions, and taxes paid by the employer.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9938,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że dokumenty są zgodne z danymi zawartymi w systemie płacowym.',
                    'en' => 'Ensuring that documents are consistent with the data contained in the payroll system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9939,
                'name' => json_encode([
                    'pl' => 'Obliczanie wynagrodzeń za czas urlopu oraz zasiłków chorobowych, macierzyńskich i innych zgodnie z przepisami.',
                    'en' => 'Calculating salaries for vacation time and sick leave, maternity benefits, and others in accordance with regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9940,
                'name' => json_encode([
                    'pl' => 'Weryfikacja wymiaru urlopu, jego wykorzystania i naliczanie ekwiwalentu za niewykorzystany urlop.',
                    'en' => 'Verifying vacation entitlement, its utilization, and calculating compensation for unused leave.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9941,
                'name' => json_encode([
                    'pl' => 'Obsługa dokumentacji związanej z urlopami i zwolnieniami lekarskimi pracowników.',
                    'en' => 'Handling documentation related to employee leaves and medical absences.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9942,
                'name' => json_encode([
                    'pl' => 'Sporządzanie deklaracji i raportów wymaganych przez ZUS, Urząd Skarbowy oraz GUS.',
                    'en' => 'Preparing declarations and reports required by ZUS, the Tax Office, and GUS.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9943,
                'name' => json_encode([
                    'pl' => 'Wypełnianie dokumentów, takich jak deklaracje PIT-11, PIT-4R, PIT-8AR oraz roczne informacje o składkach do ZUS.',
                    'en' => 'Filling out documents such as PIT-11, PIT-4R, PIT-8AR declarations and annual ZUS contribution information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9944,
                'name' => json_encode([
                    'pl' => 'Terminowe przekazywanie dokumentów do instytucji zewnętrznych, aby zapewnić zgodność z przepisami.',
                    'en' => 'Timely submission of documents to external institutions to ensure compliance with regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9945,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na pytania pracowników dotyczące wynagrodzeń, składników płacowych, urlopów oraz innych świadczeń.',
                    'en' => 'Answering employee questions regarding salaries, payroll components, vacations, and other benefits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9946,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie zasad obliczania wynagrodzeń, potrąceń oraz świadczeń dodatkowych.',
                    'en' => 'Explaining the rules for calculating salaries, deductions, and additional benefits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9947,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że pracownicy są informowani o zmianach w przepisach, które mogą wpływać na ich wynagrodzenia.',
                    'en' => 'Ensuring that employees are informed about changes in regulations that may affect their salaries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9948,
                'name' => json_encode([
                    'pl' => 'Śledzenie zmian w przepisach prawa pracy, podatkowego i ubezpieczeń społecznych, które mogą wpływać na naliczanie płac.',
                    'en' => 'Tracking changes in labor, tax, and social insurance laws that may affect payroll calculations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9949,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie procedur płacowych do obowiązujących regulacji oraz wewnętrznych standardów firmy.',
                    'en' => 'Adjusting payroll procedures to applicable regulations and the company’s internal standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9950,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem prawnym w celu weryfikacji zgodności dokumentów i polityk płacowych.',
                    'en' => 'Collaborating with the legal department to verify compliance of documents and payroll policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9951,
                'name' => json_encode([
                    'pl' => 'Naliczanie wynagrodzeń dla nowych pracowników zgodnie z warunkami określonymi w umowach o pracę.',
                    'en' => 'Calculating salaries for new employees according to the conditions specified in employment contracts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9952,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie nowych pracowników do systemu płacowego oraz przypisywanie im odpowiednich składników płacowych.',
                    'en' => 'Entering new employees into the payroll system and assigning them appropriate payroll components.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9953,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wynagrodzenia są zgodne z polityką wynagrodzeń firmy i przepisami prawa.',
                    'en' => 'Ensuring that salaries comply with the company’s pay policy and legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9954,
                'name' => json_encode([
                    'pl' => 'Obliczanie wynagrodzenia za nadgodziny, prace w weekendy, święta oraz inne formy dodatkowego wynagrodzenia.',
                    'en' => 'Calculating salaries for overtime, weekend work, holidays, and other forms of additional compensation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9955,
                'name' => json_encode([
                    'pl' => 'Naliczanie premii uznaniowych i regulaminowych, zgodnie z polityką wynagrodzeń i regulaminem wewnętrznym.',
                    'en' => 'Calculating discretionary and regulatory bonuses in accordance with the compensation policy and internal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9956,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zapisów dotyczących czasu pracy, aby zapewnić dokładne naliczanie nadgodzin.',
                    'en' => 'Monitoring work time records to ensure accurate calculation of overtime.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9957,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wynagrodzenia są wypłacane pracownikom zgodnie z harmonogramem.',
                    'en' => 'Ensuring that salaries are paid to employees on schedule.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9958,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem finansowym w celu terminowego przetwarzania przelewów wynagrodzeń.',
                    'en' => 'Cooperating with the finance department for timely processing of salary transfers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9959,
                'name' => json_encode([
                    'pl' => 'Monitorowanie procesów płacowych, aby uniknąć opóźnień i problemów związanych z wypłatami.',
                    'en' => 'Monitoring payroll processes to avoid delays and problems related to payments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9960,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentacji płacowej na potrzeby audytów wewnętrznych i zewnętrznych.',
                    'en' => 'Preparing payroll documentation for internal and external audits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9961,
                'name' => json_encode([
                    'pl' => 'Współpraca z audytorami w celu zapewnienia zgodności procesów płacowych z przepisami i politykami wewnętrznymi.',
                    'en' => 'Collaborating with auditors to ensure compliance of payroll processes with regulations and internal policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9962,
                'name' => json_encode([
                    'pl' => 'Wdrażanie zaleceń audytowych w celu poprawy procedur i zgodności procesów płacowych.',
                    'en' => 'Implementing audit recommendations to improve payroll procedures and compliance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9963,
                'name' => json_encode([
                    'pl' => 'Analiza istniejących procesów płacowych w celu identyfikacji możliwości ich usprawnienia i automatyzacji.',
                    'en' => 'Analyzing existing payroll processes to identify opportunities for improvement and automation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9964,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowych narzędzi i systemów, które mogą zwiększyć efektywność i dokładność naliczania wynagrodzeń.',
                    'en' => 'Implementing new tools and systems that can enhance the efficiency and accuracy of salary calculations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9965,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem IT i innymi zespołami, aby usprawnić procesy płacowe i minimalizować błędy.',
                    'en' => 'Collaborating with the IT department and other teams to streamline payroll processes and minimize errors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9966,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wynagrodzenia są zgodne z wewnętrzną polityką wynagrodzeń firmy.',
                    'en' => 'Ensuring that salaries comply with the company’s internal pay policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9967,
                'name' => json_encode([
                    'pl' => 'Weryfikacja, czy wszystkie premie, dodatki i inne świadczenia są naliczane zgodnie z obowiązującymi zasadami.',
                    'en' => 'Verifying that all bonuses, allowances, and other benefits are calculated in accordance with applicable rules.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9968,
                'name' => json_encode([
                    'pl' => 'Doradzanie menedżerom i działowi HR w kwestiach związanych z wynagrodzeniami, aby przestrzegać polityki firmy.',
                    'en' => 'Advising managers and the HR department on salary-related matters to comply with company policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9969,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów dotyczących kosztów wynagrodzeń, wskaźników rotacji oraz struktury płac.',
                    'en' => 'Preparing reports on payroll costs, turnover rates, and salary structure.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9970,
                'name' => json_encode([
                    'pl' => 'Tworzenie analiz, które mogą pomóc zarządowi i działowi HR w podejmowaniu decyzji dotyczących polityki płacowej.',
                    'en' => 'Creating analyses that can assist management and the HR department in making decisions regarding payroll policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9971,
                'name' => json_encode([
                    'pl' => 'Dostarczanie raportów na temat wynagrodzeń do zarządu i innych działów na potrzeby analiz finansowych.',
                    'en' => 'Providing salary reports to management and other departments for financial analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $KONTROLER_ROZLICZEŃ_PIENIĘŻNYCH = [
            [
                'id' => 9972,
                'name' => json_encode([
                    'pl' => 'Codzienne monitorowanie wpływów i wydatków firmy, aby zapewnić odpowiedni poziom płynności finansowej.',
                    'en' => 'Daily monitoring of the company’s inflows and outflows to ensure an adequate level of financial liquidity.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9973,
                'name' => json_encode([
                    'pl' => 'Przegląd kont bankowych i potwierdzanie zgodności wpływów i wydatków z rejestrami księgowymi.',
                    'en' => 'Reviewing bank accounts and confirming the consistency of inflows and outflows with accounting records.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9974,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów dotyczących stanu przepływów pieniężnych na potrzeby zarządu.',
                    'en' => 'Preparing reports on cash flow status for management purposes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9975,
                'name' => json_encode([
                    'pl' => 'Regularne uzgadnianie sald na kontach bankowych z zapisami księgowymi.',
                    'en' => 'Regularly reconciling bank account balances with accounting records.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9976,
                'name' => json_encode([
                    'pl' => 'Identyfikacja i wyjaśnianie rozbieżności między kontami bankowymi a zapisami w księgach rachunkowych.',
                    'en' => 'Identifying and explaining discrepancies between bank accounts and records in the accounting books.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9977,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów dotyczących stanu kont bankowych oraz przedstawianie ich w dziale finansowym.',
                    'en' => 'Preparing reports on the status of bank accounts and presenting them in the finance department.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9978,
                'name' => json_encode([
                    'pl' => 'Weryfikacja i zatwierdzanie transakcji płatniczych zgodnie z wewnętrznymi procedurami i polityką firmy.',
                    'en' => 'Verifying and approving payment transactions in accordance with internal procedures and company policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9979,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie, czy płatności są zgodne z zatwierdzonymi dokumentami i spełniają kryteria finansowe.',
                    'en' => 'Checking whether payments are consistent with approved documents and meet financial criteria.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9980,
                'name' => json_encode([
                    'pl' => 'Monitorowanie terminowości płatności do kontrahentów, dostawców i instytucji zewnętrznych.',
                    'en' => 'Monitoring the timeliness of payments to contractors, suppliers, and external institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9981,
                'name' => json_encode([
                    'pl' => 'Przewidywanie przyszłych wpływów i wydatków, aby zapewnić odpowiednią płynność finansową firmy.',
                    'en' => 'Forecasting future inflows and outflows to ensure the company has adequate financial liquidity.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9982,
                'name' => json_encode([
                    'pl' => 'Tworzenie prognoz przepływów pieniężnych na podstawie historycznych danych finansowych i bieżących zobowiązań.',
                    'en' => 'Creating cash flow forecasts based on historical financial data and current liabilities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9983,
                'name' => json_encode([
                    'pl' => 'Proponowanie działań mających na celu optymalizację płynności i minimalizację ryzyka braku środków.',
                    'en' => 'Proposing actions to optimize liquidity and minimize the risk of a lack of funds.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9984,
                'name' => json_encode([
                    'pl' => 'Ustalanie terminów i warunków rozliczeń z klientami oraz dostawcami, aby zapewnić sprawną obsługę płatności.',
                    'en' => 'Setting deadlines and conditions for settlements with customers and suppliers to ensure efficient payment processing.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9985,
                'name' => json_encode([
                    'pl' => 'Monitorowanie terminowości spłat ze strony klientów oraz kontakt z klientami w przypadku opóźnień.',
                    'en' => 'Monitoring the timeliness of payments from customers and contacting them in case of delays.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9986,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem windykacji w zakresie odzyskiwania zaległych należności.',
                    'en' => 'Cooperating with the collection department to recover overdue debts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9987,
                'name' => json_encode([
                    'pl' => 'Tworzenie regularnych raportów dotyczących przepływów pieniężnych, stanu należności i zobowiązań.',
                    'en' => 'Creating regular reports on cash flows, accounts receivable, and liabilities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9988,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie analiz dotyczących płynności finansowej, rotacji należności oraz struktury kosztów.',
                    'en' => 'Preparing analyses regarding financial liquidity, accounts receivable turnover, and cost structure.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9989,
                'name' => json_encode([
                    'pl' => 'Prezentowanie raportów zarządowi oraz innym działom w celu wsparcia podejmowania decyzji finansowych.',
                    'en' => 'Presenting reports to management and other departments to support financial decision-making.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9990,
                'name' => json_encode([
                    'pl' => 'Monitorowanie stanu zobowiązań i należności oraz analiza ich wpływu na płynność firmy.',
                    'en' => 'Monitoring the status of liabilities and receivables and analyzing their impact on the company’s liquidity.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9991,
                'name' => json_encode([
                    'pl' => 'Ustalanie priorytetów płatności i negocjowanie warunków płatności z dostawcami.',
                    'en' => 'Setting payment priorities and negotiating payment terms with suppliers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9992,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że terminy płatności są przestrzegane, a przepływy pieniężne zarządzane efektywnie.',
                    'en' => 'Ensuring that payment deadlines are met and cash flows are managed effectively.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9993,
                'name' => json_encode([
                    'pl' => 'Nadzorowanie i realizacja transakcji finansowych, takich jak przelewy krajowe i zagraniczne.',
                    'en' => 'Overseeing and executing financial transactions such as domestic and international transfers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9994,
                'name' => json_encode([
                    'pl' => 'Obsługa narzędzi bankowości elektronicznej oraz systemów ERP używanych do zarządzania przepływami pieniężnymi.',
                    'en' => 'Using electronic banking tools and ERP systems for managing cash flows.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9995,
                'name' => json_encode([
                    'pl' => 'Uzgadnianie z bankami szczegółów dotyczących przelewów i transakcji walutowych.',
                    'en' => 'Reconciling details of transfers and foreign currency transactions with banks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9996,
                'name' => json_encode([
                    'pl' => 'Opracowywanie prognoz przepływów pieniężnych na potrzeby budżetowania i planowania finansowego.',
                    'en' => 'Developing cash flow forecasts for budgeting and financial planning purposes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9997,
                'name' => json_encode([
                    'pl' => 'Analiza czynników wpływających na przyszłe przepływy pieniężne, takich jak sezonowe wahania sprzedaży czy zmiany w kosztach.',
                    'en' => 'Analyzing factors affecting future cash flows, such as seasonal sales fluctuations or changes in costs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9998,
                'name' => json_encode([
                    'pl' => 'Dostarczanie prognoz finansowych zarządowi oraz działowi finansowemu w celu wspierania decyzji biznesowych.',
                    'en' => 'Providing financial forecasts to management and the finance department to support business decisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9999,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że procesy rozliczeń pieniężnych są zgodne z wewnętrznymi politykami i przepisami.',
                    'en' => 'Ensuring that cash settlement processes comply with internal policies and regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10000,
                'name' => json_encode([
                    'pl' => 'Stosowanie wewnętrznych kontroli finansowych i procedur audytowych w procesie rozliczeń.',
                    'en' => 'Applying internal financial controls and auditing procedures in the settlement process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10001,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad zgodności i podejmowanie działań naprawczych w przypadku wykrycia nieprawidłowości.',
                    'en' => 'Adhering to compliance principles and taking corrective actions in case of detected irregularities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10002,
                'name' => json_encode([
                    'pl' => 'Identyfikowanie i analiza ryzyk związanych z rozliczeniami pieniężnymi, takich jak ryzyko płynności, ryzyko kredytowe.',
                    'en' => 'Identifying and analyzing risks related to monetary settlements, such as liquidity risk and credit risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10003,
                'name' => json_encode([
                    'pl' => 'Stosowanie metod zabezpieczających, takich jak polityka kredytowa lub procedury oceny ryzyka dla klientów.',
                    'en' => 'Applying safeguarding methods, such as credit policies or customer risk assessment procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10004,
                'name' => json_encode([
                    'pl' => 'Opracowywanie planów zarządzania ryzykiem finansowym oraz wdrażanie działań zapobiegających nieprzewidzianym problemom.',
                    'en' => 'Developing financial risk management plans and implementing preventive measures against unforeseen problems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10005,
                'name' => json_encode([
                    'pl' => 'Regularna współpraca z działem księgowości w celu uzgadniania sald i księgowania transakcji finansowych.',
                    'en' => 'Regular collaboration with the accounting department to reconcile balances and record financial transactions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10006,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszelkie operacje płatnicze są zgodnie z zasadami księgowania i systemem rachunkowym.',
                    'en' => 'Ensuring that all payment operations comply with accounting rules and the accounting system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10007,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji o transakcjach i rozliczeniach działowi finansowemu oraz pomoc w przygotowywaniu sprawozdań finansowych.',
                    'en' => 'Providing information about transactions and settlements to the finance department and assisting in the preparation of financial reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10008,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentacji i raportów wymaganych podczas audytów finansowych.',
                    'en' => 'Preparing documentation and reports required during financial audits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10009,
                'name' => json_encode([
                    'pl' => 'Współpraca z audytorami w celu zapewnienia zgodności dokumentacji rozliczeniowej z obowiązującymi przepisami.',
                    'en' => 'Collaborating with auditors to ensure compliance of settlement documentation with applicable regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10010,
                'name' => json_encode([
                    'pl' => 'Wdrażanie zaleceń pokontrolnych, które poprawiają procedury zarządzania rozliczeniami pieniężnymi.',
                    'en' => 'Implementing audit recommendations that improve procedures for managing monetary settlements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10011,
                'name' => json_encode([
                    'pl' => 'Analiza procesów rozliczeniowych w celu identyfikacji obszarów wymagających usprawnienia.',
                    'en' => 'Analyzing settlement processes to identify areas that need improvement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10012,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowych narzędzi i technologii, które zwiększają efektywność procesów rozliczeniowych, takich jak systemy ERP.',
                    'en' => 'Implementing new tools and technologies that increase the efficiency of settlement processes, such as ERP systems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10013,
                'name' => json_encode([
                    'pl' => 'Automatyzacja procesów rozliczeniowych, aby zminimalizować błędy i zwiększyć dokładność operacji finansowych.',
                    'en' => 'Automating settlement processes to minimize errors and increase the accuracy of financial operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10014,
                'name' => json_encode([
                    'pl' => 'Opracowywanie harmonogramów płatności i ustalanie priorytetów rozliczeń.',
                    'en' => 'Developing payment schedules and setting settlement priorities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10015,
                'name' => json_encode([
                    'pl' => 'Kontrolowanie, czy płatności są realizowane zgodnie z ustalonym harmonogramem.',
                    'en' => 'Controlling whether payments are made according to the established schedule.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10016,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że firma ma wystarczającą ilość środków do realizacji bieżących zobowiązań.',
                    'en' => 'Ensuring that the company has sufficient funds to meet current obligations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10017,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analiz finansowych i ocena wyników pod kątem zachowania płynności finansowej.',
                    'en' => 'Conducting financial analyses and assessing results in terms of maintaining financial liquidity.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10018,
                'name' => json_encode([
                    'pl' => 'Analiza trendów i identyfikacja wzorców, które mogą mieć wpływ na przepływy pieniężne.',
                    'en' => 'Analyzing trends and identifying patterns that may impact cash flows.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10019,
                'name' => json_encode([
                    'pl' => 'Przedstawianie rekomendacji dotyczących poprawy płynności i stabilności finansowej firmy.',
                    'en' => 'Providing recommendations for improving the liquidity and financial stability of the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10020,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów na temat stanu przepływów pieniężnych, zaległości oraz zobowiązań.',
                    'en' => 'Preparing reports on the state of cash flows, arrears, and liabilities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10021,
                'name' => json_encode([
                    'pl' => 'Przedstawianie analiz i wniosków zarządowi oraz rekomendowanie działań poprawiających zarządzanie płynnością.',
                    'en' => 'Presenting analyses and conclusions to management and recommending actions to improve liquidity management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10022,
                'name' => json_encode([
                    'pl' => 'Tworzenie prezentacji i raportów finansowych na potrzeby spotkań zarządu i innych interesariuszy.',
                    'en' => 'Creating presentations and financial reports for management meetings and other stakeholders.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $SKARBNIK_BANKOWY=[
            [
                'id' => 10023,
                'name' => json_encode([
                    'pl' => 'Monitorowanie bieżących przepływów pieniężnych banku oraz zapewnianie, że bank posiada wystarczające środki do realizacji zobowiązań.',
                    'en' => 'Monitoring the bank’s current cash flows and ensuring that it has sufficient funds to meet obligations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10024,
                'name' => json_encode([
                    'pl' => 'Opracowywanie strategii zarządzania płynnością, aby zminimalizować ryzyko braku środków.',
                    'en' => 'Developing liquidity management strategies to minimize the risk of shortfalls.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10025,
                'name' => json_encode([
                    'pl' => 'Przewidywanie zapotrzebowania na środki oraz planowanie operacji finansowych, takich jak pozyskiwanie funduszy lub inwestowanie nadwyżek.',
                    'en' => 'Forecasting funding needs and planning financial operations such as raising funds or investing surpluses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10026,
                'name' => json_encode([
                    'pl' => 'Inwestowanie nadwyżek finansowych banku w instrumenty rynku pieniężnego, obligacje, akcje lub inne instrumenty finansowe.',
                    'en' => 'Investing the bank’s excess funds in money market instruments, bonds, stocks, or other financial instruments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10027,
                'name' => json_encode([
                    'pl' => 'Opracowywanie strategii inwestycyjnych w celu optymalizacji zysków z posiadanych aktywów oraz minimalizacji ryzyka inwestycyjnego.',
                    'en' => 'Developing investment strategies to optimize returns on held assets while minimizing investment risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10028,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wyników portfela inwestycyjnego oraz dostosowywanie strategii inwestycyjnych do zmieniających się warunków rynkowych.',
                    'en' => 'Monitoring the investment portfolio’s performance and adjusting investment strategies to changing market conditions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10029,
                'name' => json_encode([
                    'pl' => 'Identyfikowanie i analiza ryzyka finansowego, takiego jak ryzyko kredytowe, walutowe, stopy procentowej i płynności.',
                    'en' => 'Identifying and analyzing financial risks such as credit, currency, interest rate, and liquidity risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10030,
                'name' => json_encode([
                    'pl' => 'Stosowanie strategii zabezpieczających (hedging) oraz instrumentów pochodnych, aby minimalizować wpływ ryzyka na sytuację finansową banku.',
                    'en' => 'Applying hedging strategies and derivatives to minimize the impact of risks on the bank’s financial situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10031,
                'name' => json_encode([
                    'pl' => 'Regularne monitorowanie wskaźników ryzyka oraz dostosowywanie polityki zarządzania ryzykiem do zmieniających się warunków rynkowych.',
                    'en' => 'Regularly monitoring risk indicators and adjusting risk management policies to changing market conditions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10032,
                'name' => json_encode([
                    'pl' => 'Planowanie i realizacja operacji związanych z pozyskiwaniem kapitału na rynku finansowym.',
                    'en' => 'Planning and executing operations related to raising capital in the financial market.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10033,
                'name' => json_encode([
                    'pl' => 'Wybór odpowiednich instrumentów finansowych, takich jak emisje obligacji lub kredyty międzybankowe, w celu finansowania działalności banku.',
                    'en' => 'Choosing appropriate financial instruments, such as bond issuances or interbank loans, to finance the bank’s operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10034,
                'name' => json_encode([
                    'pl' => 'Negocjowanie warunków z kredytodawcami i inwestorami oraz monitorowanie harmonogramu spłat zobowiązań.',
                    'en' => 'Negotiating terms with lenders and investors and monitoring the repayment schedule of obligations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10035,
                'name' => json_encode([
                    'pl' => 'Śledzenie wskaźników kapitałowych, takich jak wskaźnik wypłacalności, wskaźnik płynności oraz inne kluczowe wskaźniki finansowe.',
                    'en' => 'Tracking capital ratios such as solvency ratios, liquidity ratios, and other key financial indicators.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10036,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności wskaźników finansowych z wymogami regulatorów oraz wewnętrznymi politykami banku.',
                    'en' => 'Ensuring that financial indicators comply with regulatory requirements and the bank’s internal policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10037,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów finansowych na potrzeby zarządu oraz organów nadzorczych.',
                    'en' => 'Preparing financial reports for management and supervisory bodies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10038,
                'name' => json_encode([
                    'pl' => 'Tworzenie prognoz przepływów pieniężnych na podstawie bieżących i przyszłych zobowiązań oraz wpływów.',
                    'en' => 'Creating cash flow forecasts based on current and future obligations and inflows.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10039,
                'name' => json_encode([
                    'pl' => 'Analiza trendów wpływających na przepływy pieniężne oraz optymalizacja zasobów finansowych.',
                    'en' => 'Analyzing trends affecting cash flows and optimizing financial resources.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10040,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że prognozy płynności umożliwiają bankowi realizację krótkoterminowych i długoterminowych zobowiązań.',
                    'en' => 'Ensuring that liquidity forecasts enable the bank to meet short-term and long-term obligations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10041,
                'name' => json_encode([
                    'pl' => 'Realizacja transakcji na rynku międzybankowym, takich jak depozyty międzybankowe, repozytoria i inne operacje finansowe.',
                    'en' => 'Executing transactions in the interbank market, such as interbank deposits, repos, and other financial operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10042,
                'name' => json_encode([
                    'pl' => 'Ustalanie stawek procentowych dla transakcji z innymi bankami oraz negocjowanie warunków umów międzybankowych.',
                    'en' => 'Setting interest rates for transactions with other banks and negotiating terms for interbank agreements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10043,
                'name' => json_encode([
                    'pl' => 'Monitorowanie płynności rynku oraz dostosowywanie transakcji międzybankowych do sytuacji na rynku finansowym.',
                    'en' => 'Monitoring market liquidity and adjusting interbank transactions to the financial market situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10044,
                'name' => json_encode([
                    'pl' => 'Opracowywanie i dostosowywanie polityki stóp procentowych, aby zapewnić konkurencyjność oferty banku.',
                    'en' => 'Developing and adjusting interest rate policies to ensure the competitiveness of the bank’s offerings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10045,
                'name' => json_encode([
                    'pl' => 'Monitorowanie rynkowych stóp procentowych i analizowanie ich wpływu na zyski banku.',
                    'en' => 'Monitoring market interest rates and analyzing their impact on the bank’s profits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10046,
                'name' => json_encode([
                    'pl' => 'Doradzanie zarządowi w zakresie ustalania stawek depozytów i kredytów, uwzględniając bieżącą sytuację na rynku.',
                    'en' => 'Advising management on setting deposit and loan rates, considering current market conditions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10047,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że bank przestrzega wszystkich regulacji finansowych, w tym wymogów płynnościowych i kapitałowych.',
                    'en' => 'Ensuring that the bank complies with all financial regulations, including liquidity and capital requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10048,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów zgodności oraz składanie ich do instytucji nadzorczych, takich jak Komisja Nadzoru Finansowego (KNF).',
                    'en' => 'Preparing compliance reports and submitting them to supervisory bodies such as the Financial Supervision Authority (KNF).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10049,
                'name' => json_encode([
                    'pl' => 'Śledzenie zmian w regulacjach finansowych i dostosowywanie polityki banku do nowych wymogów prawnych.',
                    'en' => 'Tracking changes in financial regulations and adjusting the bank’s policy to new legal requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10050,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów finansowych, które przedstawiają sytuację płynnościową i finansową banku.',
                    'en' => 'Preparing financial reports that present the bank’s liquidity and financial situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10051,
                'name' => json_encode([
                    'pl' => 'Tworzenie analiz ryzyka, które umożliwiają zarządowi podejmowanie decyzji w zakresie zarządzania aktywami i pasywami.',
                    'en' => 'Creating risk analyses that enable management to make decisions regarding asset and liability management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10052,
                'name' => json_encode([
                    'pl' => 'Raportowanie wskaźników finansowych, takich jak wskaźnik dźwigni finansowej, wskaźnik płynności oraz inne kluczowe wskaźniki dla zarządu.',
                    'en' => 'Reporting financial ratios, such as the leverage ratio, liquidity ratio, and other key indicators for management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10053,
                'name' => json_encode([
                    'pl' => 'Analizowanie bieżących trendów na rynku finansowym, w tym kursów walut, stóp procentowych oraz sytuacji makroekonomicznej.',
                    'en' => 'Analyzing current trends in the financial market, including currency rates, interest rates, and macroeconomic conditions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10054,
                'name' => json_encode([
                    'pl' => 'Śledzenie polityki monetarnej banku centralnego oraz jej wpływu na sytuację finansową banku.',
                    'en' => 'Monitoring the central bank’s monetary policy and its impact on the bank’s financial situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10055,
                'name' => json_encode([
                    'pl' => 'Opracowywanie rekomendacji i strategii finansowych na podstawie zmian w sytuacji makroekonomicznej.',
                    'en' => 'Developing recommendations and financial strategies based on changes in the macroeconomic situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10056,
                'name' => json_encode([
                    'pl' => 'Analiza i optymalizacja struktury aktywów i pasywów banku w celu poprawy rentowności i zarządzania ryzykiem.',
                    'en' => 'Analyzing and optimizing the structure of the bank’s assets and liabilities to improve profitability and manage risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10057,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie portfela aktywów do zmieniających się warunków rynkowych, aby zwiększyć efektywność zarządzania kapitałem.',
                    'en' => 'Adjusting the asset portfolio to changing market conditions to enhance capital management efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10058,
                'name' => json_encode([
                    'pl' => 'Kontrola relacji między aktywami o stałym i zmiennym oprocentowaniu, aby minimalizować ryzyko stopy procentowej.',
                    'en' => 'Controlling the relationship between fixed and variable rate assets to minimize interest rate risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10059,
                'name' => json_encode([
                    'pl' => 'Nawiązywanie i utrzymywanie relacji z bankami, instytucjami finansowymi oraz inwestorami.',
                    'en' => 'Establishing and maintaining relationships with banks, financial institutions, and investors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10060,
                'name' => json_encode([
                    'pl' => 'Negocjowanie warunków finansowych z kredytodawcami oraz pozyskiwanie funduszy na potrzeby banku.',
                    'en' => 'Negotiating financial terms with lenders and raising funds for the bank’s needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10061,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie banku na spotkaniach branżowych oraz budowanie relacji z partnerami finansowymi.',
                    'en' => 'Representing the bank at industry meetings and building relationships with financial partners.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10062,
                'name' => json_encode([
                    'pl' => 'Wdrażanie systemów i narzędzi analitycznych do zarządzania ryzykiem finansowym i płynnościowym.',
                    'en' => 'Implementing systems and analytical tools for managing financial and liquidity risk.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10063,
                'name' => json_encode([
                    'pl' => 'Regularna kontrola efektywności systemów monitorujących ryzyko oraz dostosowywanie ich do bieżących potrzeb.',
                    'en' => 'Regularly assessing the effectiveness of risk monitoring systems and adjusting them to current needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10064,
                'name' => json_encode([
                    'pl' => 'Wykorzystanie narzędzi technologicznych, które wspierają prognozowanie ryzyka i monitorowanie sytuacji finansowej banku.',
                    'en' => 'Utilizing technological tools that support risk forecasting and monitoring the bank’s financial situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10065,
                'name' => json_encode([
                    'pl' => 'Opracowywanie polityki zarządzania kapitałem zgodnie z wymaganiami prawnymi oraz strategią banku.',
                    'en' => 'Developing capital management policies in accordance with legal requirements and the bank’s strategy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10066,
                'name' => json_encode([
                    'pl' => 'Ustalanie procedur monitorowania kapitału i płynności, aby zapewnić zgodność z regulacjami.',
                    'en' => 'Establishing capital and liquidity monitoring procedures to ensure compliance with regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10067,
                'name' => json_encode([
                    'pl' => 'Wdrażanie wewnętrznych standardów zarządzania kapitałem, które wspierają rozwój stabilnej sytuacji finansowej banku.',
                    'en' => 'Implementing internal capital management standards that support the development of the bank’s stable financial situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10068,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analiz rentowności oraz ocena efektywności działań banku w zakresie zarządzania płynnością i ryzykiem.',
                    'en' => 'Conducting profitability analyses and assessing the effectiveness of the bank’s liquidity and risk management activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10069,
                'name' => json_encode([
                    'pl' => 'Ocena wyników finansowych oraz analiza trendów, które mogą wpływać na sytuację banku.',
                    'en' => 'Evaluating financial results and analyzing trends that may affect the bank’s situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10070,
                'name' => json_encode([
                    'pl' => 'Prezentowanie analiz zarządowi oraz proponowanie strategii finansowych, które przyczyniają się do wzrostu efektywności banku.',
                    'en' => 'Presenting analyses to management and proposing financial strategies that contribute to the bank’s efficiency growth.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10071,
                'name' => json_encode([
                    'pl' => 'Zarządzanie zespołem odpowiedzialnym za realizację operacji finansowych, inwestycji oraz rozliczeń.',
                    'en' => 'Managing the team responsible for financial operations, investments, and settlements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10072,
                'name' => json_encode([
                    'pl' => 'Udzielanie wsparcia i doradztwa członkom zespołu oraz dbanie o rozwój ich kompetencji zawodowych.',
                    'en' => 'Providing support and guidance to team members and fostering their professional development.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10073,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że zespół przestrzega polityk i procedur oraz dba o zgodność działań z regulacjami.',
                    'en' => 'Ensuring that the team adheres to policies and procedures and maintains compliance with regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10074,
                'name' => json_encode([
                    'pl' => 'Tworzenie długoterminowych strategii finansowych, które odpowiadają celom strategicznym banku.',
                    'en' => 'Creating long-term financial strategies that align with the bank’s strategic objectives.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10075,
                'name' => json_encode([
                    'pl' => 'Opracowywanie strategii optymalizacji struktury kapitału i zasobów finansowych.',
                    'en' => 'Developing strategies to optimize capital structure and financial resources.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10076,
                'name' => json_encode([
                    'pl' => 'Dostarczanie rekomendacji i analiz, które wspierają zarząd w podejmowaniu kluczowych decyzji finansowych.',
                    'en' => 'Providing recommendations and analyses that support management in making key financial decisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

        ];
        $KSIĘGOWI = [
            [
                'id' => 10077,
                'name' => json_encode([
                    'pl' => 'Księgowanie dokumentów przychodowych, kosztowych, należności i zobowiązań zgodnie z zasadami rachunkowości.',
                    'en' => 'Recording revenue, expense, receivable, and payable documents in accordance with accounting principles.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10078,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie bieżącej i dokładnej ewidencji transakcji finansowych firmy w księgach rachunkowych.',
                    'en' => 'Maintaining current and accurate records of the company\'s financial transactions in the accounting books.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10079,
                'name' => json_encode([
                    'pl' => 'Zapis transakcji zgodnie z polityką firmy i obowiązującymi przepisami rachunkowymi.',
                    'en' => 'Recording transactions according to the company policy and applicable accounting regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10080,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie faktur, wyciągów bankowych, dokumentów kosztowych pod kątem ich kompletności i poprawności.',
                    'en' => 'Verifying invoices, bank statements, and expense documents for completeness and accuracy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10081,
                'name' => json_encode([
                    'pl' => 'Weryfikacja dokumentacji, aby upewnić się, że wszystkie operacje są prawidłowo zaksięgowane.',
                    'en' => 'Verifying documentation to ensure all operations are correctly recorded.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10082,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszystkie transakcje są zgodne z przepisami podatkowymi i rachunkowymi.',
                    'en' => 'Ensuring that all transactions comply with tax and accounting regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10083,
                'name' => json_encode([
                    'pl' => 'Tworzenie miesięcznych, kwartalnych i rocznych sprawozdań finansowych, takich jak bilans, rachunek zysków i strat oraz rachunek przepływów pieniężnych.',
                    'en' => 'Preparing monthly, quarterly, and annual financial statements such as balance sheets, income statements, and cash flow statements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10084,
                'name' => json_encode([
                    'pl' => 'Przedstawianie sprawozdań zarządowi oraz organom zewnętrznym, zapewniając ich zgodność z przepisami i standardami rachunkowości.',
                    'en' => 'Presenting reports to management and external authorities, ensuring compliance with regulations and accounting standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10085,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji finansowych, które wspierają zarządzanie firmą.',
                    'en' => 'Providing financial information that supports the management of the company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10086,
                'name' => json_encode([
                    'pl' => 'Obliczanie i przygotowywanie deklaracji podatkowych, takich jak VAT, CIT, PIT oraz składanie ich w odpowiednich urzędach.',
                    'en' => 'Calculating and preparing tax returns, such as VAT, CIT, PIT, and submitting them to the appropriate offices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10087,
                'name' => json_encode([
                    'pl' => 'Monitorowanie i zapewnienie zgodności z przepisami podatkowymi, aby unikać kar i sankcji.',
                    'en' => 'Monitoring and ensuring compliance with tax regulations to avoid penalties and sanctions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10088,
                'name' => json_encode([
                    'pl' => 'Śledzenie zmian w przepisach podatkowych i dostosowywanie procedur księgowych do bieżących wymogów prawnych.',
                    'en' => 'Tracking changes in tax regulations and adjusting accounting procedures to current legal requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10089,
                'name' => json_encode([
                    'pl' => 'Monitorowanie stanu należności od klientów oraz terminowości spłat zobowiązań wobec dostawców.',
                    'en' => 'Monitoring the status of receivables from customers and the timeliness of payments to suppliers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10090,
                'name' => json_encode([
                    'pl' => 'Rozliczanie należności i zobowiązań oraz przygotowywanie raportów dotyczących ich stanu.',
                    'en' => 'Settling receivables and payables and preparing reports regarding their status.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10091,
                'name' => json_encode([
                    'pl' => 'Kontakt z klientami i dostawcami w celu wyjaśnienia ewentualnych niezgodności w rozliczeniach.',
                    'en' => 'Contacting customers and suppliers to clarify any discrepancies in settlements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10092,
                'name' => json_encode([
                    'pl' => 'Udział w procesie budżetowania oraz przygotowywanie prognoz finansowych na podstawie analiz historycznych danych finansowych.',
                    'en' => 'Participating in the budgeting process and preparing financial forecasts based on historical financial data analyses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10093,
                'name' => json_encode([
                    'pl' => 'Weryfikacja realizacji budżetu i analiza odchyleń od założonych celów finansowych.',
                    'en' => 'Verifying budget execution and analyzing deviations from established financial goals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10094,
                'name' => json_encode([
                    'pl' => 'Przedstawianie raportów i analiz budżetowych, które wspierają zarządzanie finansami firmy.',
                    'en' => 'Presenting reports and budget analyses that support the company’s financial management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10095,
                'name' => json_encode([
                    'pl' => 'Monitorowanie kosztów operacyjnych i identyfikacja obszarów do optymalizacji.',
                    'en' => 'Monitoring operational costs and identifying areas for optimization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10096,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów kosztowych, analizowanie odchyleń od planów i sugerowanie działań oszczędnościowych.',
                    'en' => 'Preparing cost reports, analyzing deviations from plans, and suggesting cost-saving actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10097,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi działami w celu kontroli kosztów i zapewnienia zgodności z budżetem.',
                    'en' => 'Collaborating with other departments to control costs and ensure compliance with the budget.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10098,
                'name' => json_encode([
                    'pl' => 'Przechowywanie i archiwizacja dokumentów księgowych zgodnie z przepisami o rachunkowości.',
                    'en' => 'Storing and archiving accounting documents in accordance with accounting regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10099,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności dokumentacji z wewnętrznymi regulacjami i polityką prywatności firmy.',
                    'en' => 'Ensuring documentation compliance with internal regulations and the company\'s privacy policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10100,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie pełnej i uporządkowanej dokumentacji na potrzeby kontroli i audytów.',
                    'en' => 'Maintaining complete and organized documentation for control and audits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10101,
                'name' => json_encode([
                    'pl' => 'Używanie oprogramowania księgowego (np. ERP) do ewidencjonowania transakcji finansowych i sporządzania raportów.',
                    'en' => 'Using accounting software (e.g., ERP) to record financial transactions and prepare reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10102,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie systemów i narzędzi księgowych w aktualnym stanie oraz optymalizacja ich wykorzystania.',
                    'en' => 'Keeping accounting systems and tools up to date and optimizing their use.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10103,
                'name' => json_encode([
                    'pl' => 'Śledzenie innowacji technologicznych i wdrażanie nowych narzędzi, które usprawniają procesy księgowe.',
                    'en' => 'Tracking technological innovations and implementing new tools that streamline accounting processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10104,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów dla instytucji państwowych, takich jak Urząd Skarbowy, ZUS, GUS, zgodnie z obowiązującymi przepisami.',
                    'en' => 'Preparing reports for state institutions such as the Tax Office, ZUS, GUS, in accordance with applicable regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10105,
                'name' => json_encode([
                    'pl' => 'Tworzenie deklaracji podatkowych, raportów finansowych i innych dokumentów wymaganych przez instytucje kontrolne.',
                    'en' => 'Creating tax declarations, financial reports, and other documents required by controlling institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10106,
                'name' => json_encode([
                    'pl' => 'Składanie raportów w odpowiednich terminach, aby zapewnić zgodność z przepisami.',
                    'en' => 'Submitting reports in a timely manner to ensure compliance with regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10107,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentacji na potrzeby audytów oraz współpraca z audytorami wewnętrznymi i zewnętrznymi.',
                    'en' => 'Preparing documentation for audits and collaborating with internal and external auditors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10108,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie kwestii finansowych i przedstawianie dokumentacji potwierdzającej zgodność działań z przepisami.',
                    'en' => 'Clarifying financial matters and presenting documentation confirming compliance with regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10109,
                'name' => json_encode([
                    'pl' => 'Wdrażanie zaleceń wynikających z audytów, które poprawiają procesy księgowe i zarządzanie ryzykiem finansowym.',
                    'en' => 'Implementing recommendations from audits that improve accounting processes and financial risk management.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10110,
                'name' => json_encode([
                    'pl' => 'Regularne przeglądy kont księgowych i ich uzgadnianie w celu zapewnienia zgodności z dokumentacją finansową.',
                    'en' => 'Regularly reviewing accounting accounts and reconciling them to ensure compliance with financial documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10111,
                'name' => json_encode([
                    'pl' => 'Weryfikacja zgodności sald kont oraz identyfikacja i korygowanie nieprawidłowości.',
                    'en' => 'Verifying the compliance of account balances and identifying and correcting discrepancies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10112,
                'name' => json_encode([
                    'pl' => 'Ustalanie przyczyn różnic i wprowadzanie korekt w księgach rachunkowych.',
                    'en' => 'Establishing the causes of discrepancies and making adjustments in the accounting records.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10113,
                'name' => json_encode([
                    'pl' => 'Sporządzanie analiz finansowych, które wspierają zarząd w podejmowaniu decyzji dotyczących kosztów, rentowności oraz przyszłych inwestycji.',
                    'en' => 'Preparing financial analyses that support management in decision-making regarding costs, profitability, and future investments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10114,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów i analiz dotyczących wyników finansowych, struktury kosztów oraz efektywności operacyjnej.',
                    'en' => 'Creating reports and analyses related to financial results, cost structure, and operational efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10115,
                'name' => json_encode([
                    'pl' => 'Opracowywanie dodatkowych zestawień finansowych na potrzeby zarządu i innych działów.',
                    'en' => 'Preparing additional financial statements for the management and other departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10116,
                'name' => json_encode([
                    'pl' => 'Zarządzanie rozliczeniami międzyokresowymi, w tym obliczanie kosztów i przychodów przypadających na poszczególne okresy.',
                    'en' => 'Managing accruals, including calculating costs and revenues attributable to specific periods.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10117,
                'name' => json_encode([
                    'pl' => 'Księgowanie i rozliczanie amortyzacji środków trwałych oraz wartości niematerialnych i prawnych.',
                    'en' => 'Recording and settling depreciation of fixed assets and intangible assets.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10118,
                'name' => json_encode([
                    'pl' => 'Aktualizacja harmonogramów amortyzacji oraz prowadzenie ewidencji aktywów trwałych.',
                    'en' => 'Updating depreciation schedules and maintaining fixed asset records.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10119,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji i wsparcia pracownikom innych działów w zakresie procedur księgowych.',
                    'en' => 'Providing information and support to employees from other departments regarding accounting procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10120,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie zasad księgowych oraz pomaganie w rozwiązywaniu problemów związanych z finansami.',
                    'en' => 'Explaining accounting principles and assisting in resolving financial issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10121,
                'name' => json_encode([
                    'pl' => 'Organizowanie wewnętrznych szkoleń i warsztatów z zakresu podstaw rachunkowości dla pracowników.',
                    'en' => 'Organizing internal training and workshops on basic accounting principles for employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10122,
                'name' => json_encode([
                    'pl' => 'Monitorowanie przepływów pieniężnych firmy oraz zapewnienie, że firma posiada wystarczające środki do realizacji zobowiązań.',
                    'en' => 'Monitoring the company\'s cash flows and ensuring that the company has sufficient funds to meet its obligations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10123,
                'name' => json_encode([
                    'pl' => 'Sporządzanie prognoz przepływów pieniężnych oraz analizowanie ich wpływu na płynność finansową firmy.',
                    'en' => 'Preparing cash flow forecasts and analyzing their impact on the company\'s financial liquidity.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10124,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie strategii przepływów pieniężnych do potrzeb operacyjnych i inwestycyjnych.',
                    'en' => 'Adjusting cash flow strategies to operational and investment needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10125,
                'name' => json_encode([
                    'pl' => 'Śledzenie zmian w przepisach prawa dotyczących rachunkowości, podatków oraz finansów.',
                    'en' => 'Tracking changes in laws related to accounting, taxes, and finance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10126,
                'name' => json_encode([
                    'pl' => 'Aktualizacja procedur księgowych i ewidencyjnych, aby zapewnić zgodność z obowiązującymi regulacjami.',
                    'en' => 'Updating accounting and recording procedures to ensure compliance with applicable regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10127,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad rachunkowości i polityki firmy, aby uniknąć ryzyka naruszeń przepisów.',
                    'en' => 'Adhering to accounting principles and company policies to avoid the risk of violations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10128,
                'name' => json_encode([
                    'pl' => 'Analiza i usprawnianie istniejących procesów księgowych w celu zwiększenia efektywności pracy.',
                    'en' => 'Analyzing and improving existing accounting processes to increase work efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10129,
                'name' => json_encode([
                    'pl' => 'Wdrażanie rozwiązań automatyzujących oraz narzędzi cyfrowych, które poprawiają wydajność procesów księgowych.',
                    'en' => 'Implementing automation solutions and digital tools that enhance the efficiency of accounting processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10130,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem IT w zakresie wdrażania innowacji technologicznych wspierających księgowość.',
                    'en' => 'Cooperating with the IT department to implement technological innovations supporting accounting.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $AGENCI_UBEZPIECZENIOWI = [
            [
                'id' => 10131,
                'name' => json_encode([
                    'pl' => 'Aktywne poszukiwanie potencjalnych klientów poprzez działania marketingowe, networking, kampanie telefoniczne i spotkania osobiste.',
                    'en' => 'Actively seeking potential clients through marketing activities, networking, phone campaigns, and personal meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10132,
                'name' => json_encode([
                    'pl' => 'Rozwijanie bazy klientów oraz budowanie długoterminowych relacji w celu zwiększenia sprzedaży polis.',
                    'en' => 'Developing a client base and building long-term relationships to increase policy sales.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10133,
                'name' => json_encode([
                    'pl' => 'Prezentowanie oferty ubezpieczeniowej w sposób atrakcyjny i dostosowany do potrzeb różnych grup klientów.',
                    'en' => 'Presenting insurance offers in an attractive way tailored to the needs of different customer groups.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10134,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie wywiadów z klientami w celu zrozumienia ich indywidualnych potrzeb i sytuacji finansowej.',
                    'en' => 'Conducting interviews with clients to understand their individual needs and financial situations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10135,
                'name' => json_encode([
                    'pl' => 'Doradzanie klientom w wyborze najlepszych produktów ubezpieczeniowych, które spełniają ich wymagania i oczekiwania.',
                    'en' => 'Advising clients on choosing the best insurance products that meet their requirements and expectations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10136,
                'name' => json_encode([
                    'pl' => 'Ocenianie ryzyka ubezpieczeniowego oraz dostosowywanie oferty do profilu klienta.',
                    'en' => 'Assessing insurance risk and adjusting the offer to the client\'s profile.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10137,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie ofert ubezpieczeniowych oraz wyjaśnianie warunków poszczególnych polis.',
                    'en' => 'Preparing insurance offers and explaining the terms of individual policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10138,
                'name' => json_encode([
                    'pl' => 'Przedstawianie klientom szczegółów dotyczących zakresu ochrony, kosztów oraz warunków ubezpieczenia.',
                    'en' => 'Providing clients with details regarding the scope of coverage, costs, and insurance conditions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10139,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie różnic między produktami ubezpieczeniowymi i pomaganie klientom w świadomym wyborze polisy.',
                    'en' => 'Explaining the differences between insurance products and assisting clients in making informed policy choices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10140,
                'name' => json_encode([
                    'pl' => 'Sporządzanie i podpisywanie umów ubezpieczeniowych z klientami na podstawie wybranych przez nich produktów.',
                    'en' => 'Drafting and signing insurance contracts with clients based on their selected products.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10141,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentacji ubezpieczeniowej, takiej jak polisy, formularze wniosku i inne wymagane dokumenty.',
                    'en' => 'Preparing insurance documentation, such as policies, application forms, and other required documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10142,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszystkie dane klienta są prawidłowo wprowadzone do systemu ubezpieczeniowego.',
                    'en' => 'Ensuring that all client data is correctly entered into the insurance system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10143,
                'name' => json_encode([
                    'pl' => 'Regularny kontakt z klientami w celu utrzymania pozytywnych relacji i budowania lojalności.',
                    'en' => 'Regular contact with clients to maintain positive relationships and build loyalty.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10144,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o nowych produktach, promocjach i zmianach w warunkach ubezpieczeniowych.',
                    'en' => 'Informing clients about new products, promotions, and changes in insurance terms.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10145,
                'name' => json_encode([
                    'pl' => 'Wspieranie klientów w każdej fazie cyklu ubezpieczeniowego, aby czuli się bezpiecznie i świadomi swoich decyzji.',
                    'en' => 'Supporting clients at every stage of the insurance cycle to ensure they feel secure and informed about their decisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10146,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom w bieżących kwestiach związanych z polisą, takich jak zmiany w umowie, aktualizacja danych czy pytania o zakres ochrony.',
                    'en' => 'Assisting clients with ongoing issues related to the policy, such as changes to the contract, updating information, or inquiries about the scope of coverage.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10147,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o procedurach składania roszczeń oraz wspieranie klientów w procesie zgłaszania szkód.',
                    'en' => 'Providing information about claims submission procedures and assisting clients in the claims reporting process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10148,
                'name' => json_encode([
                    'pl' => 'Monitorowanie polis klientów i doradzanie im w zakresie ewentualnych zmian lub aktualizacji polis.',
                    'en' => 'Monitoring client policies and advising them on potential changes or updates to their policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10149,
                'name' => json_encode([
                    'pl' => 'Osiąganie określonych przez firmę celów sprzedażowych, takich jak liczba zawartych umów lub wartość składek.',
                    'en' => 'Achieving sales goals set by the company, such as the number of contracts concluded or the value of premiums.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10150,
                'name' => json_encode([
                    'pl' => 'Monitorowanie własnych wyników sprzedażowych i dostosowywanie strategii sprzedaży w celu realizacji wyznaczonych celów.',
                    'en' => 'Monitoring personal sales results and adjusting sales strategies to achieve set goals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10151,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach i spotkaniach motywacyjnych, które wspierają osiąganie celów sprzedażowych.',
                    'en' => 'Participating in training and motivational meetings that support the achievement of sales goals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10152,
                'name' => json_encode([
                    'pl' => 'Przechowywanie i zarządzanie dokumentacją klientów, taką jak umowy, formularze i dane kontaktowe, zgodnie z polityką prywatności.',
                    'en' => 'Storing and managing client documentation, such as contracts, forms, and contact details, in accordance with privacy policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10153,
                'name' => json_encode([
                    'pl' => 'Upewnianie się, że dokumentacja ubezpieczeniowa jest kompletna, dokładna i zgodna z przepisami prawa.',
                    'en' => 'Ensuring that insurance documentation is complete, accurate, and compliant with legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10154,
                'name' => json_encode([
                    'pl' => 'Archiwizacja dokumentów zgodnie z wewnętrznymi standardami i wymogami prawnymi.',
                    'en' => 'Archiving documents in accordance with internal standards and legal requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10155,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów prawa oraz regulacji dotyczących działalności ubezpieczeniowej i ochrony danych osobowych.',
                    'en' => 'Complying with laws and regulations related to insurance activities and data protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10156,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności działań sprzedażowych z wewnętrznymi procedurami i kodeksem etycznym.',
                    'en' => 'Ensuring that sales activities comply with internal procedures and the code of ethics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10157,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zmian w przepisach dotyczących ubezpieczeń oraz dostosowywanie się do wymogów prawnych.',
                    'en' => 'Monitoring changes in insurance regulations and adapting to legal requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10158,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach produktowych, sprzedażowych i szkoleniach dotyczących technik komunikacyjnych.',
                    'en' => 'Participating in product training, sales training, and communication techniques training.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10159,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat produktów ubezpieczeniowych, procedur oraz regulacji prawnych.',
                    'en' => 'Updating knowledge about insurance products, procedures, and legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10160,
                'name' => json_encode([
                    'pl' => 'Zdobywanie certyfikatów zawodowych, które podnoszą kwalifikacje i kompetencje agenta ubezpieczeniowego.',
                    'en' => 'Obtaining professional certifications that enhance the qualifications and competencies of insurance agents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10161,
                'name' => json_encode([
                    'pl' => 'Śledzenie ofert konkurencyjnych firm ubezpieczeniowych oraz identyfikowanie mocnych i słabych stron swojej oferty.',
                    'en' => 'Tracking competitive offers from insurance companies and identifying strengths and weaknesses in one\'s own offering.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10162,
                'name' => json_encode([
                    'pl' => 'Analiza trendów rynkowych i zmieniających się potrzeb klientów w zakresie ochrony ubezpieczeniowej.',
                    'en' => 'Analyzing market trends and changing customer needs in terms of insurance coverage.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10163,
                'name' => json_encode([
                    'pl' => 'Dopasowywanie strategii sprzedaży do sytuacji rynkowej oraz reagowanie na zmiany w konkurencji.',
                    'en' => 'Adjusting sales strategies to the market situation and responding to changes in competition.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10164,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów dotyczących liczby zawartych umów, wysokości składek oraz wyników sprzedaży.',
                    'en' => 'Preparing reports on the number of contracts concluded, premium amounts, and sales results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10165,
                'name' => json_encode([
                    'pl' => 'Przekazywanie raportów do przełożonych oraz przedstawianie osiągniętych wyników na spotkaniach zespołowych.',
                    'en' => 'Submitting reports to supervisors and presenting achieved results at team meetings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10166,
                'name' => json_encode([
                    'pl' => 'Monitorowanie własnej efektywności i identyfikowanie obszarów do poprawy w wynikach sprzedażowych.',
                    'en' => 'Monitoring one\'s own effectiveness and identifying areas for improvement in sales results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10167,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom w zgłaszaniu szkód oraz wyjaśnianie procedur likwidacji szkód.',
                    'en' => 'Assisting clients in filing claims and explaining the claims settlement procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10168,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem likwidacji szkód w celu przyspieszenia procesu wypłaty odszkodowań.',
                    'en' => 'Cooperating with the claims settlement department to expedite the compensation payout process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10169,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o postępach w procesie likwidacji szkody i wspieranie ich na każdym etapie.',
                    'en' => 'Informing clients about the progress of the claims settlement process and supporting them at every stage.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10170,
                'name' => json_encode([
                    'pl' => 'Organizowanie kampanii marketingowych oraz prezentacji produktów ubezpieczeniowych.',
                    'en' => 'Organizing marketing campaigns and presentations of insurance products.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10171,
                'name' => json_encode([
                    'pl' => 'Udział w targach, wydarzeniach branżowych oraz spotkaniach z klientami w celu promocji oferty firmy.',
                    'en' => 'Participating in fairs, industry events, and client meetings to promote the company\'s offerings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10172,
                'name' => json_encode([
                    'pl' => 'Budowanie wizerunku firmy ubezpieczeniowej oraz pozytywnej opinii wśród potencjalnych klientów.',
                    'en' => 'Building the image of the insurance company and a positive reputation among potential clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10173,
                'name' => json_encode([
                    'pl' => 'Personalizowanie ofert ubezpieczeniowych, tak aby odpowiadały specyficznym wymaganiom i oczekiwaniom klientów.',
                    'en' => 'Personalizing insurance offers to meet specific requirements and expectations of clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10174,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analizy ryzyka i dostosowywanie oferty do indywidualnych sytuacji klientów.',
                    'en' => 'Conducting risk analysis and adjusting the offer to individual client situations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10175,
                'name' => json_encode([
                    'pl' => 'Proponowanie rozwiązań, które zapewniają optymalną ochronę przy korzystnych warunkach cenowych.',
                    'en' => 'Proposing solutions that provide optimal protection at favorable pricing terms.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10176,
                'name' => json_encode([
                    'pl' => 'Edukowanie klientów na temat korzyści i zasad działania różnych produktów ubezpieczeniowych.',
                    'en' => 'Educating clients about the benefits and principles of operation of various insurance products.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10177,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie konsekwencji braku odpowiedniego ubezpieczenia oraz korzyści wynikających z zabezpieczenia siebie i majątku.',
                    'en' => 'Explaining the consequences of lacking adequate insurance and the benefits of securing oneself and assets.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10178,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji o dostępnych opcjach i pomoc w świadomym wyborze polisy.',
                    'en' => 'Providing information about available options and assisting in making informed policy choices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10179,
                'name' => json_encode([
                    'pl' => 'Śledzenie terminów wygasania polis oraz informowanie klientów o konieczności przedłużenia ubezpieczenia.',
                    'en' => 'Tracking policy expiration dates and informing clients about the need to renew their insurance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10180,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie propozycji wznowienia polis oraz doradzanie w zakresie ewentualnych zmian w zakresie ochrony.',
                    'en' => 'Preparing renewal proposals for policies and advising on potential changes to coverage.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10181,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie długoterminowych relacji z klientami przez monitorowanie ich aktualnych potrzeb ubezpieczeniowych.',
                    'en' => 'Maintaining long-term relationships with clients by monitoring their current insurance needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10182,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie i obsługa reklamacji klientów związanych z polisami lub procesem ubezpieczeniowym.',
                    'en' => 'Receiving and handling client complaints related to policies or the insurance process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10183,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi działami w celu szybkiego rozwiązywania problemów i zapewnienia zadowolenia klienta.',
                    'en' => 'Cooperating with other departments to quickly resolve issues and ensure customer satisfaction.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10184,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie klientom kwestii związanych z rozbieżnościami i wspieranie ich w uzyskiwaniu satysfakcjonujących rozwiązań.',
                    'en' => 'Explaining discrepancies to clients and supporting them in achieving satisfactory resolutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $PRACOWNIK_DO_SPRAW_UBEZPIECZEŃ = [
            [
                'id' => 10185,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie wywiadów z klientami w celu zrozumienia ich sytuacji życiowej i finansowej oraz indywidualnych potrzeb.',
                    'en' => 'Conducting interviews with clients to understand their life and financial situation and individual needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10186,
                'name' => json_encode([
                    'pl' => 'Ocena ryzyka i dostosowywanie oferty ubezpieczeniowej do specyfiki i oczekiwań klienta.',
                    'en' => 'Assessing risk and adjusting the insurance offer to the specifics and expectations of the client.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10187,
                'name' => json_encode([
                    'pl' => 'Pomoc w doborze odpowiednich produktów ubezpieczeniowych, które najlepiej zabezpieczą klienta i jego majątek.',
                    'en' => 'Assisting in selecting appropriate insurance products that best secure the client and their assets.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10188,
                'name' => json_encode([
                    'pl' => 'Tworzenie ofert ubezpieczeniowych dostosowanych do potrzeb i możliwości finansowych klientów.',
                    'en' => 'Creating insurance offers tailored to the needs and financial capabilities of clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10189,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie szczegółowych informacji na temat zakresu ochrony, składek i dodatkowych korzyści ubezpieczenia.',
                    'en' => 'Preparing detailed information about the scope of coverage, premiums, and additional benefits of insurance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10190,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie klientom różnic między poszczególnymi produktami i pomaganie im w wyborze najlepszego rozwiązania.',
                    'en' => 'Explaining to clients the differences between individual products and assisting them in choosing the best solution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10191,
                'name' => json_encode([
                    'pl' => 'Sporządzanie i podpisywanie umów ubezpieczeniowych zgodnie z wybranym przez klienta produktem.',
                    'en' => 'Drafting and signing insurance contracts according to the product chosen by the client.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10192,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie i nadzorowanie dokumentacji niezbędnej do zawarcia umowy, w tym wniosków, formularzy i polis.',
                    'en' => 'Preparing and overseeing the documentation necessary for entering into a contract, including applications, forms, and policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10193,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszystkie formalności są wypełnione zgodnie z wymogami prawnymi i wewnętrznymi procedurami firmy.',
                    'en' => 'Ensuring that all formalities are completed in accordance with legal requirements and the company\'s internal procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10194,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom w rozwiązywaniu bieżących spraw związanych z polisą, takich jak zmiany warunków umowy, aktualizacja danych czy składki.',
                    'en' => 'Assisting clients in resolving current issues related to the policy, such as changes to the terms of the contract, updating data, or premiums.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10195,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji dotyczących procedur składania roszczeń oraz wsparcie w przypadku zgłoszeń szkód.',
                    'en' => 'Providing information regarding claims submission procedures and support in case of claims reporting.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10196,
                'name' => json_encode([
                    'pl' => 'Kontaktowanie się z klientami przed wygaśnięciem polisy w celu zaproponowania przedłużenia lub aktualizacji ochrony.',
                    'en' => 'Contacting clients before the policy expires to offer renewal or updates to coverage.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10197,
                'name' => json_encode([
                    'pl' => 'Śledzenie terminów wygasania polis i przypominanie klientom o konieczności ich wznowienia.',
                    'en' => 'Tracking policy expiration dates and reminding clients of the need for renewal.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10198,
                'name' => json_encode([
                    'pl' => 'Proponowanie klientom odnowienia polis lub zmiany zakresu ochrony w zależności od ich aktualnych potrzeb.',
                    'en' => 'Offering clients policy renewals or changes in coverage based on their current needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10199,
                'name' => json_encode([
                    'pl' => 'Monitorowanie, aby polisy były w pełni aktualne i dostosowane do bieżącej sytuacji życiowej klientów.',
                    'en' => 'Monitoring to ensure that policies are fully up to date and tailored to clients\' current life situations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10200,
                'name' => json_encode([
                    'pl' => 'Regularne kontakty z klientami, aby budować pozytywne relacje i zwiększać ich lojalność.',
                    'en' => 'Regular contacts with clients to build positive relationships and increase their loyalty.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10201,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o nowych produktach, promocjach i zmianach w ofercie ubezpieczeniowej.',
                    'en' => 'Informing clients about new products, promotions, and changes in the insurance offering.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10202,
                'name' => json_encode([
                    'pl' => 'Organizowanie spotkań i rozmów telefonicznych w celu bieżącego wsparcia klientów i ich edukowania w zakresie ubezpieczeń.',
                    'en' => 'Organizing meetings and phone calls to provide ongoing support to clients and educate them about insurance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10203,
                'name' => json_encode([
                    'pl' => 'Doradzanie klientom w zakresie dostępnych opcji ubezpieczeniowych, takich jak ubezpieczenia na życie, zdrowotne, komunikacyjne, majątkowe i inne.',
                    'en' => 'Advising clients on available insurance options, such as life, health, auto, property, and others.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10204,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie zalet i ograniczeń poszczególnych produktów oraz odpowiadanie na pytania klientów.',
                    'en' => 'Explaining the advantages and limitations of individual products and answering clients\' questions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10205,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom w podejmowaniu świadomych decyzji dotyczących wyboru ochrony ubezpieczeniowej.',
                    'en' => 'Assisting clients in making informed decisions regarding insurance coverage selection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10206,
                'name' => json_encode([
                    'pl' => 'Osiąganie określonych przez firmę celów sprzedażowych dotyczących liczby zawartych umów i wartości składek.',
                    'en' => 'Achieving company-specific sales goals related to the number of contracts signed and premium values.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10207,
                'name' => json_encode([
                    'pl' => 'Monitorowanie swoich wyników sprzedażowych oraz dostosowywanie działań, aby skutecznie realizować cele.',
                    'en' => 'Monitoring sales performance and adjusting actions to effectively achieve goals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10208,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach i spotkaniach, które wspierają osiąganie wyników i rozwój zawodowy.',
                    'en' => 'Participating in training and meetings that support achieving results and professional development.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10209,
                'name' => json_encode([
                    'pl' => 'Naliczanie składek ubezpieczeniowych i zapewnienie, że są one wpłacane terminowo przez klientów.',
                    'en' => 'Calculating insurance premiums and ensuring that they are paid on time by clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10210,
                'name' => json_encode([
                    'pl' => 'Przypominanie klientom o nadchodzących płatnościach oraz monitorowanie terminowości wpłat.',
                    'en' => 'Reminding clients of upcoming payments and monitoring payment timeliness.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10211,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem finansowym w zakresie ewidencji i rozliczeń składek ubezpieczeniowych.',
                    'en' => 'Cooperating with the finance department on the recording and settlement of insurance premiums.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10212,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszystkie działania związane z zawieraniem i obsługą umów ubezpieczeniowych są zgodne z przepisami prawnymi.',
                    'en' => 'Ensuring that all actions related to entering into and servicing insurance contracts comply with legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10213,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad dotyczących ochrony danych osobowych i polityki prywatności klientów.',
                    'en' => 'Complying with personal data protection principles and clients\' privacy policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10214,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zmian w regulacjach ubezpieczeniowych oraz dostosowywanie działań do aktualnych wymogów prawnych.',
                    'en' => 'Monitoring changes in insurance regulations and adjusting actions to current legal requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10215,
                'name' => json_encode([
                    'pl' => 'Prowadzenie dokumentacji klientów, w tym przechowywanie umów, wniosków i formularzy zgodnie z wymogami.',
                    'en' => 'Maintaining client documentation, including storing contracts, applications, and forms according to requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10216,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że dokumenty są dokładne, kompletne i zgodne z wewnętrznymi procedurami firmy.',
                    'en' => 'Ensuring that documents are accurate, complete, and compliant with the company\'s internal procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10217,
                'name' => json_encode([
                    'pl' => 'Archiwizacja dokumentów i utrzymanie porządku w dokumentacji ubezpieczeniowej.',
                    'en' => 'Archiving documents and maintaining order in insurance documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10218,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów dotyczących liczby zawartych umów, wartości składek oraz wyników sprzedaży.',
                    'en' => 'Preparing reports on the number of contracts signed, premium values, and sales results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10219,
                'name' => json_encode([
                    'pl' => 'Analiza danych dotyczących efektywności działań sprzedażowych i przedstawianie ich przełożonym.',
                    'en' => 'Analyzing data regarding the effectiveness of sales activities and presenting it to superiors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10220,
                'name' => json_encode([
                    'pl' => 'Monitorowanie swojej efektywności i identyfikowanie obszarów wymagających poprawy.',
                    'en' => 'Monitoring personal effectiveness and identifying areas needing improvement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10221,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom w procesie zgłaszania szkód oraz wyjaśnianie procedur likwidacji.',
                    'en' => 'Assisting clients in the claims reporting process and explaining settlement procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10222,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem likwidacji szkód w celu przyspieszenia procesu wypłaty odszkodowania.',
                    'en' => 'Collaborating with the claims settlement department to expedite the compensation payout process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10223,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o postępach w procesie likwidacji szkody i wsparcie na każdym etapie.',
                    'en' => 'Informing clients about the progress in the claims settlement process and providing support at every stage.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10224,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w szkoleniach produktowych, sprzedażowych oraz z zakresu obsługi klienta.',
                    'en' => 'Participating in product, sales, and customer service training.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10225,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy o produktach ubezpieczeniowych, procedurach i przepisach prawnych.',
                    'en' => 'Updating knowledge about insurance products, procedures, and legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10226,
                'name' => json_encode([
                    'pl' => 'Rozwijanie umiejętności interpersonalnych i negocjacyjnych, aby lepiej odpowiadać na potrzeby klientów.',
                    'en' => 'Developing interpersonal and negotiation skills to better meet clients\' needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10227,
                'name' => json_encode([
                    'pl' => 'Śledzenie aktualnych trendów w branży ubezpieczeniowej i dostosowywanie swojej oferty do oczekiwań rynku.',
                    'en' => 'Keeping up with current trends in the insurance industry and adjusting offerings to meet market expectations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10228,
                'name' => json_encode([
                    'pl' => 'Monitorowanie konkurencji i ocena mocnych oraz słabych stron oferty na tle innych firm.',
                    'en' => 'Monitoring competitors and evaluating the strengths and weaknesses of the offering compared to other firms.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10229,
                'name' => json_encode([
                    'pl' => 'Analizowanie potrzeb klientów i dostosowywanie strategii sprzedaży do zmieniających się warunków rynkowych.',
                    'en' => 'Analyzing client needs and adjusting sales strategies to changing market conditions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10230,
                'name' => json_encode([
                    'pl' => 'Organizowanie kampanii promujących produkty ubezpieczeniowe oraz udział w wydarzeniach branżowych.',
                    'en' => 'Organizing campaigns to promote insurance products and participating in industry events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10231,
                'name' => json_encode([
                    'pl' => 'Budowanie pozytywnego wizerunku firmy oraz prezentowanie oferty ubezpieczeniowej w sposób profesjonalny.',
                    'en' => 'Building a positive image of the company and presenting the insurance offering professionally.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10232,
                'name' => json_encode([
                    'pl' => 'Angażowanie się w działania marketingowe, takie jak spotkania informacyjne, targi i eventy.',
                    'en' => 'Engaging in marketing activities such as informational meetings, fairs, and events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10233,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie reklamacji klientów dotyczących polis lub procedur ubezpieczeniowych.',
                    'en' => 'Receiving client complaints regarding policies or insurance procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10234,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie klientom kwestii związanych z polisami i pomaganie w rozwiązywaniu problemów.',
                    'en' => 'Explaining to clients issues related to policies and assisting in problem resolution.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10235,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi działami w celu szybkiego rozwiązywania reklamacji i zapewnienia zadowolenia klientów.',
                    'en' => 'Collaborating with other departments to quickly resolve complaints and ensure customer satisfaction.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10236,
                'name' => json_encode([
                    'pl' => 'Analiza wyników finansowych z zawartych umów i ocena efektywności działań ubezpieczeniowych.',
                    'en' => 'Analyzing financial results from contracts and assessing the effectiveness of insurance activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10237,
                'name' => json_encode([
                    'pl' => 'Sporządzanie analiz dotyczących sprzedaży oraz identyfikowanie obszarów, które wymagają poprawy.',
                    'en' => 'Preparing sales analyses and identifying areas that require improvement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10238,
                'name' => json_encode([
                    'pl' => 'Przedstawianie wyników i rekomendacji zarządowi w celu optymalizacji strategii sprzedaży.',
                    'en' => 'Presenting results and recommendations to management to optimize sales strategies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $LIKWIDATOR_SZKOÓD = [
            [
                'id' => 10239,
                'name' => json_encode([
                    'pl' => 'Rejestrowanie zgłoszeń szkód od klientów oraz wprowadzanie danych do systemu.',
                    'en' => 'Registering claims from clients and entering data into the system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10240,
                'name' => json_encode([
                    'pl' => 'Weryfikacja kompletności dokumentacji zgłoszeniowej oraz potwierdzanie przyjęcia zgłoszenia szkody.',
                    'en' => 'Verifying the completeness of the claim documentation and confirming the receipt of the claim.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10241,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji klientom na temat dalszych kroków i procedury likwidacyjnej.',
                    'en' => 'Providing clients with information about the next steps and claims settlement procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10242,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie kompletności i poprawności dokumentów dostarczonych przez klienta, takich jak zdjęcia, oświadczenia, raporty policyjne.',
                    'en' => 'Checking the completeness and correctness of documents provided by the client, such as photos, statements, police reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10243,
                'name' => json_encode([
                    'pl' => 'Analiza zgłoszeń pod kątem zgodności z warunkami ubezpieczenia i wytycznymi firmy.',
                    'en' => 'Analyzing claims for compliance with insurance conditions and company guidelines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10244,
                'name' => json_encode([
                    'pl' => 'Kontaktowanie się z klientami w celu uzupełnienia brakujących dokumentów lub informacji.',
                    'en' => 'Contacting clients to complete missing documents or information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10245,
                'name' => json_encode([
                    'pl' => 'Dokonywanie szczegółowej analizy zgłoszonej szkody oraz ocena jej przyczyn i zakresu.',
                    'en' => 'Conducting a detailed analysis of the reported claim and assessing its causes and scope.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10246,
                'name' => json_encode([
                    'pl' => 'Weryfikacja, czy zgłoszona szkoda jest objęta ochroną ubezpieczeniową i spełnia warunki wypłaty odszkodowania.',
                    'en' => 'Verifying whether the reported claim is covered by insurance and meets the conditions for compensation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10247,
                'name' => json_encode([
                    'pl' => 'Analiza wysokości roszczenia i weryfikacja, czy jest ono zgodne z wartością przedmiotu szkody oraz zasadami ubezpieczenia.',
                    'en' => 'Analyzing the amount of the claim and verifying whether it is consistent with the value of the damaged item and insurance principles.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10248,
                'name' => json_encode([
                    'pl' => 'Organizowanie wizyt w miejscu zdarzenia lub zlecanie oględzin terenowych w celu dokładnej oceny szkody.',
                    'en' => 'Organizing site visits or commissioning field inspections for accurate damage assessment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10249,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie stanu uszkodzeń poprzez robienie zdjęć, sporządzanie notatek i tworzenie raportów z oględzin.',
                    'en' => 'Documenting the state of damage by taking photos, making notes, and creating inspection reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10250,
                'name' => json_encode([
                    'pl' => 'Konsultacja z ekspertami, rzeczoznawcami lub technikami, jeśli wymagana jest specjalistyczna ocena szkody.',
                    'en' => 'Consulting with experts, appraisers, or technicians if specialized damage assessment is required.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10251,
                'name' => json_encode([
                    'pl' => 'Zlecanie ekspertyz rzeczoznawcom lub specjalistom w celu uzyskania opinii technicznej lub wyceny szkody.',
                    'en' => 'Commissioning appraisals to experts or specialists to obtain a technical opinion or damage valuation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10252,
                'name' => json_encode([
                    'pl' => 'Koordynacja pracy rzeczoznawców i zapewnienie, że raporty są dostarczane terminowo.',
                    'en' => 'Coordinating the work of appraisers and ensuring that reports are delivered on time.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10253,
                'name' => json_encode([
                    'pl' => 'Analiza ekspertyz oraz uwzględnianie ich wyników przy podejmowaniu decyzji o wysokości odszkodowania.',
                    'en' => 'Analyzing appraisals and considering their results when making decisions about the amount of compensation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10254,
                'name' => json_encode([
                    'pl' => 'Obliczanie wysokości odszkodowania zgodnie z polisą ubezpieczeniową i obowiązującymi przepisami.',
                    'en' => 'Calculating the amount of compensation in accordance with the insurance policy and applicable regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10255,
                'name' => json_encode([
                    'pl' => 'Uwzględnianie amortyzacji, franszyzy, limitów oraz udziału własnego klienta w kosztach likwidacji szkody.',
                    'en' => 'Considering depreciation, deductibles, limits, and the client\'s share in the costs of settling the claim.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10256,
                'name' => json_encode([
                    'pl' => 'Weryfikacja kalkulacji, aby zapewnić zgodność z przepisami i polityką firmy.',
                    'en' => 'Verifying calculations to ensure compliance with regulations and company policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10257,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie i przekazywanie decyzji klientom w sprawie wypłaty lub odmowy odszkodowania.',
                    'en' => 'Preparing and communicating decisions to clients regarding compensation payout or denial.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10258,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie klientom powodów ewentualnej odmowy wypłaty odszkodowania oraz udzielanie informacji o przysługujących im prawach.',
                    'en' => 'Explaining to clients the reasons for any denial of compensation and providing information about their rights.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10259,
                'name' => json_encode([
                    'pl' => 'Udzielanie odpowiedzi na odwołania i wnioski o ponowne rozpatrzenie sprawy.',
                    'en' => 'Responding to appeals and requests for reconsideration of the case.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10260,
                'name' => json_encode([
                    'pl' => 'Uzgadnianie z działem finansowym terminu i sposobu wypłaty odszkodowania.',
                    'en' => 'Coordinating with the finance department the timing and method of compensation payment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10261,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że środki są wypłacane zgodnie z ustalonymi procedurami oraz we właściwym czasie.',
                    'en' => 'Ensuring that funds are disbursed according to established procedures and in a timely manner.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10262,
                'name' => json_encode([
                    'pl' => 'Informowanie klienta o zakończeniu procesu i przekazaniu środków.',
                    'en' => 'Informing the client about the completion of the process and the transfer of funds.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10263,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie wewnętrznych procedur i regulacji dotyczących likwidacji szkód.',
                    'en' => 'Adhering to internal procedures and regulations regarding claims settlement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10264,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że proces likwidacji szkody jest zgodny z przepisami prawnymi oraz standardami branżowymi.',
                    'en' => 'Ensuring that the claims settlement process complies with legal regulations and industry standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10265,
                'name' => json_encode([
                    'pl' => 'Śledzenie zmian w przepisach dotyczących ubezpieczeń i dostosowywanie praktyk do obowiązujących regulacji.',
                    'en' => 'Tracking changes in insurance regulations and adapting practices to current regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10266,
                'name' => json_encode([
                    'pl' => 'Prowadzenie pełnej dokumentacji każdej sprawy szkodowej, w tym zapisywania kontaktów z klientem i uzyskanych dokumentów.',
                    'en' => 'Maintaining complete documentation for each claim case, including records of contacts with the client and obtained documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10267,
                'name' => json_encode([
                    'pl' => 'Archiwizacja raportów, decyzji oraz korespondencji z klientami zgodnie z przepisami o ochronie danych osobowych.',
                    'en' => 'Archiving reports, decisions, and correspondence with clients in accordance with data protection regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10268,
                'name' => json_encode([
                    'pl' => 'Przechowywanie dokumentów na potrzeby ewentualnych audytów lub kontroli.',
                    'en' => 'Storing documents for potential audits or inspections.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10269,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie i rozpatrywanie reklamacji związanych z procesem likwidacji szkody.',
                    'en' => 'Receiving and handling complaints related to the claims settlement process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10270,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rozmów mediacyjnych i szukanie rozwiązań, które zadowolą obie strony.',
                    'en' => 'Conducting mediation discussions and seeking solutions that satisfy both parties.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10271,
                'name' => json_encode([
                    'pl' => 'Przekazywanie trudniejszych spraw do działu prawnego w przypadku braku możliwości polubownego rozwiązania.',
                    'en' => 'Escalating more difficult cases to the legal department if amicable resolution is not possible.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10272,
                'name' => json_encode([
                    'pl' => 'Udzielanie klientom informacji na temat procedury likwidacyjnej oraz wymaganych dokumentów.',
                    'en' => 'Providing clients with information about the claims process and required documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10273,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie klientom kwestii związanych z polisą, warunkami ubezpieczenia oraz zakresu ochrony.',
                    'en' => 'Explaining to clients issues related to the policy, insurance terms, and scope of coverage.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10274,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o przewidywanym czasie zakończenia procesu likwidacji.',
                    'en' => 'Informing clients about the expected time for the completion of the claims process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10275,
                'name' => json_encode([
                    'pl' => 'Tworzenie raportów na temat likwidacji szkód oraz przekazywanie ich kierownictwu i innym działom.',
                    'en' => 'Creating reports on claims settlements and forwarding them to management and other departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10276,
                'name' => json_encode([
                    'pl' => 'Analiza częstości występowania szkód i ich przyczyn w celu identyfikacji ryzyk ubezpieczeniowych.',
                    'en' => 'Analyzing the frequency of claims and their causes to identify insurance risks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10277,
                'name' => json_encode([
                    'pl' => 'Sporządzanie analiz, które pomagają w usprawnieniu procesu likwidacji szkód i zwiększeniu efektywności działania.',
                    'en' => 'Preparing analyses that help improve the claims settlement process and increase operational efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10278,
                'name' => json_encode([
                    'pl' => 'Ścisła współpraca z działami takimi jak dział sprzedaży, dział obsługi klienta, dział prawny oraz dział finansowy.',
                    'en' => 'Close collaboration with departments such as sales, customer service, legal, and finance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10279,
                'name' => json_encode([
                    'pl' => 'Wymiana informacji z innymi działami w celu optymalizacji procesu obsługi klienta.',
                    'en' => 'Exchanging information with other departments to optimize the customer service process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10280,
                'name' => json_encode([
                    'pl' => 'Koordynacja działań w sytuacjach skomplikowanych szkód lub gdy wymagane jest wsparcie z innych działów.',
                    'en' => 'Coordinating actions in complex claims situations or when support from other departments is required.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10281,
                'name' => json_encode([
                    'pl' => 'Udział w audytach wewnętrznych i zewnętrznych związanych z procesem likwidacji szkód.',
                    'en' => 'Participating in internal and external audits related to the claims settlement process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10282,
                'name' => json_encode([
                    'pl' => 'Przedstawianie dokumentacji oraz odpowiadanie na pytania audytorów.',
                    'en' => 'Presenting documentation and answering auditors\' questions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10283,
                'name' => json_encode([
                    'pl' => 'Wdrażanie zaleceń wynikających z audytów mających na celu poprawę procesów likwidacyjnych.',
                    'en' => 'Implementing recommendations resulting from audits aimed at improving claims processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10284,
                'name' => json_encode([
                    'pl' => 'Identyfikowanie obszarów, które wymagają usprawnień w procesie likwidacji szkód.',
                    'en' => 'Identifying areas that require improvements in the claims settlement process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10285,
                'name' => json_encode([
                    'pl' => 'Proponowanie zmian w procedurach i narzędziach wykorzystywanych do obsługi szkód.',
                    'en' => 'Proposing changes to the procedures and tools used for claims handling.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10286,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowych rozwiązań technologicznych, które mogą usprawnić procesy likwidacyjne.',
                    'en' => 'Implementing new technological solutions that can streamline claims processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10287,
                'name' => json_encode([
                    'pl' => 'Udział w szkoleniach z zakresu likwidacji szkód, przepisów prawa ubezpieczeniowego oraz obsługi klienta.',
                    'en' => 'Participating in training on claims settlement, insurance law, and customer service.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10288,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy na temat nowych metod oceny szkód i narzędzi wykorzystywanych w likwidacji szkód.',
                    'en' => 'Updating knowledge about new methods for assessing damages and tools used in claims settlement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10289,
                'name' => json_encode([
                    'pl' => 'Rozwijanie kompetencji interpersonalnych i negocjacyjnych, aby skuteczniej komunikować się z klientami i współpracownikami.',
                    'en' => 'Developing interpersonal and negotiation skills to communicate more effectively with clients and colleagues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10290,
                'name' => json_encode([
                    'pl' => 'Analiza przyczyn i charakteru szkód w celu identyfikacji ryzyk związanych z produktami ubezpieczeniowymi.',
                    'en' => 'Analyzing the causes and nature of claims to identify risks associated with insurance products.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10291,
                'name' => json_encode([
                    'pl' => 'Przekazywanie rekomendacji do działu ubezpieczeń w celu dostosowania oferty lub warunków polis do często występujących szkód.',
                    'en' => 'Providing recommendations to the insurance department to adjust the offer or policy terms to frequently occurring claims.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10292,
                'name' => json_encode([
                    'pl' => 'Opracowywanie raportów, które pomagają w minimalizowaniu ryzyk i poprawie jakości usług.',
                    'en' => 'Developing reports that help minimize risks and improve service quality.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_DO_SPRAW_UBEZPIECZEŃ_MEDYCZNYCH = [
            [
                'id' => 10293,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji na temat dostępnych ubezpieczeń medycznych oraz wyjaśnianie warunków poszczególnych polis.',
                    'en' => 'Providing information about available medical insurance and explaining the conditions of individual policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10294,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom w wyborze najlepszego ubezpieczenia medycznego dopasowanego do ich potrzeb i sytuacji zdrowotnej.',
                    'en' => 'Assisting clients in choosing the best medical insurance tailored to their needs and health situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10295,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie zakresu ochrony, limitów i wyłączeń oraz odpowiadanie na pytania klientów dotyczące polis.',
                    'en' => 'Explaining the coverage, limits, and exclusions and answering clients’ questions regarding policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10296,
                'name' => json_encode([
                    'pl' => 'Tworzenie i przedstawianie ofert ubezpieczeń zdrowotnych dopasowanych do indywidualnych potrzeb klientów.',
                    'en' => 'Creating and presenting health insurance offers tailored to individual client needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10297,
                'name' => json_encode([
                    'pl' => 'Obliczanie składek oraz szczegółowe informowanie o korzyściach i warunkach polis.',
                    'en' => 'Calculating premiums and providing detailed information about the benefits and terms of the policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10298,
                'name' => json_encode([
                    'pl' => 'Przedstawianie różnic między produktami ubezpieczeniowymi i pomaganie klientom w świadomym wyborze.',
                    'en' => 'Presenting the differences between insurance products and helping clients make informed choices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10299,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie i podpisywanie umów ubezpieczeń medycznych zgodnie z wybranymi przez klientów produktami.',
                    'en' => 'Preparing and signing medical insurance contracts according to the products chosen by clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10300,
                'name' => json_encode([
                    'pl' => 'Weryfikacja kompletności dokumentacji ubezpieczeniowej, w tym formularzy, wniosków i podpisów.',
                    'en' => 'Verifying the completeness of insurance documentation, including forms, applications, and signatures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10301,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie danych klientów do systemu ubezpieczeniowego i dbanie o ich poprawność.',
                    'en' => 'Entering client data into the insurance system and ensuring its accuracy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10302,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie wywiadów z klientami w celu zrozumienia ich sytuacji zdrowotnej i potrzeb w zakresie ubezpieczeń medycznych.',
                    'en' => 'Conducting interviews with clients to understand their health situation and needs regarding medical insurance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10303,
                'name' => json_encode([
                    'pl' => 'Ocenianie ryzyka oraz dostosowywanie ofert ubezpieczeniowych do specyfiki klienta.',
                    'en' => 'Assessing risks and tailoring insurance offers to the client’s specifics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10304,
                'name' => json_encode([
                    'pl' => 'Doradzanie klientom w zakresie dodatkowych opcji, takich jak ubezpieczenie stomatologiczne, rehabilitacyjne czy specjalistyczne.',
                    'en' => 'Advising clients on additional options such as dental, rehabilitation, or specialist insurance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10305,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom w zarządzaniu polisą, w tym w zmianach danych, zakresie ochrony i składkach.',
                    'en' => 'Assisting clients in managing their policies, including changes to data, coverage, and premiums.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10306,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie klientów procedur związanych z uzyskaniem świadczeń medycznych oraz składaniem roszczeń.',
                    'en' => 'Explaining to clients the procedures related to obtaining medical benefits and filing claims.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10307,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o możliwościach przedłużenia ubezpieczenia lub rozszerzenia zakresu ochrony.',
                    'en' => 'Informing clients about the options for renewing insurance or extending the scope of coverage.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10308,
                'name' => json_encode([
                    'pl' => 'Przekazywanie klientom informacji o procesie zgłaszania roszczeń oraz dokumentach niezbędnych do wypłaty świadczeń.',
                    'en' => 'Providing clients with information about the claims process and the documents needed for benefit payout.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10309,
                'name' => json_encode([
                    'pl' => 'Pomoc w kompletowaniu dokumentacji medycznej i wspieranie klientów w kontakcie z placówkami medycznymi.',
                    'en' => 'Assisting in gathering medical documentation and supporting clients in contacting medical facilities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10310,
                'name' => json_encode([
                    'pl' => 'Monitorowanie stanu zgłoszeń i informowanie klientów o przebiegu procesu likwidacji roszczenia.',
                    'en' => 'Monitoring the status of claims and informing clients about the progress of the claims settlement process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10311,
                'name' => json_encode([
                    'pl' => 'Organizowanie i koordynowanie wizyt lekarskich oraz procedur medycznych w ramach ubezpieczenia.',
                    'en' => 'Organizing and coordinating medical appointments and procedures within the insurance framework.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10312,
                'name' => json_encode([
                    'pl' => 'Współpraca z siecią placówek medycznych, aby zapewnić klientom łatwy dostęp do usług.',
                    'en' => 'Cooperating with a network of medical facilities to ensure clients easy access to services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10313,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o możliwościach uzyskania świadczeń, takich jak badania diagnostyczne, zabiegi czy hospitalizacja.',
                    'en' => 'Informing clients about the possibilities of obtaining benefits, such as diagnostic tests, treatments, or hospitalization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10314,
                'name' => json_encode([
                    'pl' => 'Analiza danych dotyczących kosztów świadczeń medycznych, wysokości składek i wypłat roszczeń.',
                    'en' => 'Analyzing data on the costs of medical benefits, premium amounts, and claims payouts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10315,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów dotyczących rentowności produktów ubezpieczeniowych.',
                    'en' => 'Preparing reports on the profitability of insurance products.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10316,
                'name' => json_encode([
                    'pl' => 'Proponowanie zmian w zakresie produktów lub składek, aby poprawić rentowność polis medycznych.',
                    'en' => 'Proposing changes to products or premiums to improve the profitability of medical policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10317,
                'name' => json_encode([
                    'pl' => 'Nawiązywanie i utrzymywanie relacji z klinikami, szpitalami i przychodniami w celu zapewnienia klientom dostępu do wysokiej jakości opieki medycznej.',
                    'en' => 'Establishing and maintaining relationships with clinics, hospitals, and outpatient facilities to ensure clients have access to high-quality medical care.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10318,
                'name' => json_encode([
                    'pl' => 'Negocjowanie warunków współpracy z placówkami medycznymi, takich jak stawki i zakres świadczonych usług.',
                    'en' => 'Negotiating collaboration terms with medical facilities, such as rates and the range of services provided.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10319,
                'name' => json_encode([
                    'pl' => 'Regularna aktualizacja listy placówek medycznych współpracujących z firmą ubezpieczeniową.',
                    'en' => 'Regularly updating the list of medical facilities cooperating with the insurance company.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10320,
                'name' => json_encode([
                    'pl' => 'Edukowanie klientów na temat korzyści z ubezpieczeń medycznych i dostępnych świadczeń zdrowotnych.',
                    'en' => 'Educating clients about the benefits of medical insurance and the available health services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10321,
                'name' => json_encode([
                    'pl' => 'Przekazywanie informacji o zdrowym trybie życia, profilaktyce oraz dostępnych programach zdrowotnych.',
                    'en' => 'Providing information about healthy lifestyles, prevention, and available health programs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10322,
                'name' => json_encode([
                    'pl' => 'Organizowanie spotkań informacyjnych oraz przygotowywanie materiałów edukacyjnych dla klientów.',
                    'en' => 'Organizing informational meetings and preparing educational materials for clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10323,
                'name' => json_encode([
                    'pl' => 'Osiąganie ustalonych przez firmę celów sprzedażowych dotyczących liczby zawartych umów i wartości składek.',
                    'en' => 'Achieving the sales goals set by the company regarding the number of contracts and the value of premiums.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10324,
                'name' => json_encode([
                    'pl' => 'Monitorowanie wyników sprzedaży i dostosowywanie strategii sprzedażowej do potrzeb klientów.',
                    'en' => 'Monitoring sales results and adjusting the sales strategy to client needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10325,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w szkoleniach i spotkaniach wspierających osiąganie celów sprzedażowych.',
                    'en' => 'Participating in training and meetings that support achieving sales goals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10326,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów dotyczących zawartych polis, wysokości składek i liczby klientów.',
                    'en' => 'Preparing reports on signed policies, premium amounts, and the number of clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10327,
                'name' => json_encode([
                    'pl' => 'Analiza wyników sprzedażowych oraz identyfikowanie obszarów do poprawy w procesie sprzedaży.',
                    'en' => 'Analyzing sales results and identifying areas for improvement in the sales process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10328,
                'name' => json_encode([
                    'pl' => 'Przedstawianie wyników i planów na spotkaniach zespołowych lub raportowanie ich przełożonym.',
                    'en' => 'Presenting results and plans at team meetings or reporting them to supervisors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10329,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w szkoleniach dotyczących produktów ubezpieczeniowych i nowych regulacji prawnych.',
                    'en' => 'Participating in training on insurance products and new legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10330,
                'name' => json_encode([
                    'pl' => 'Aktualizowanie wiedzy z zakresu opieki medycznej, trendów w ubezpieczeniach zdrowotnych oraz nowych technologii.',
                    'en' => 'Updating knowledge on medical care, trends in health insurance, and new technologies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10331,
                'name' => json_encode([
                    'pl' => 'Rozwijanie kompetencji interpersonalnych, negocjacyjnych i organizacyjnych, aby lepiej odpowiadać na potrzeby klientów.',
                    'en' => 'Developing interpersonal, negotiation, and organizational skills to better meet client needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10332,
                'name' => json_encode([
                    'pl' => 'Analiza aktualnych trendów w ubezpieczeniach zdrowotnych oraz zmieniających się potrzeb klientów.',
                    'en' => 'Analyzing current trends in health insurance and changing client needs.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10333,
                'name' => json_encode([
                    'pl' => 'Śledzenie konkurencji i dostosowywanie oferty do oczekiwań rynkowych.',
                    'en' => 'Monitoring competition and adjusting the offering to market expectations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10334,
                'name' => json_encode([
                    'pl' => 'Wdrażanie nowych rozwiązań i rekomendowanie zmian w zakresie produktów ubezpieczeniowych.',
                    'en' => 'Implementing new solutions and recommending changes to insurance products.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10335,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie przepisów prawa dotyczących ubezpieczeń zdrowotnych i ochrony danych osobowych.',
                    'en' => 'Complying with legal regulations regarding health insurance and data protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10336,
                'name' => json_encode([
                    'pl' => 'Monitorowanie zmian w regulacjach oraz dostosowywanie procedur do wymogów prawnych.',
                    'en' => 'Monitoring changes in regulations and adjusting procedures to legal requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10337,
                'name' => json_encode([
                    'pl' => 'Upewnianie się, że wszystkie działania i dokumenty są zgodne z przepisami i wewnętrznymi regulacjami firmy.',
                    'en' => 'Ensuring that all activities and documents comply with regulations and the company’s internal policies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10338,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie reklamacji i wyjaśnianie klientów w kwestiach związanych z polisami i wypłatami świadczeń.',
                    'en' => 'Handling complaints and clarifying issues with clients regarding policies and benefit payouts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10339,
                'name' => json_encode([
                    'pl' => 'Szukanie rozwiązań satysfakcjonujących obie strony oraz w razie potrzeby współpraca z działem prawnym.',
                    'en' => 'Seeking mutually satisfactory solutions and collaborating with the legal department when necessary.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10340,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie reklamacji oraz podejmowanie działań zapobiegawczych, aby zminimalizować podobne sytuacje w przyszłości.',
                    'en' => 'Documenting complaints and taking preventive actions to minimize similar situations in the future.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10341,
                'name' => json_encode([
                    'pl' => 'Organizowanie i udział w kampaniach promujących ubezpieczenia medyczne, takich jak spotkania, targi i eventy.',
                    'en' => 'Organizing and participating in campaigns promoting medical insurance, such as meetings, fairs, and events.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10342,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie materiałów promocyjnych, broszur oraz prezentacji dla potencjalnych klientów.',
                    'en' => 'Preparing promotional materials, brochures, and presentations for potential clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10343,
                'name' => json_encode([
                    'pl' => 'Budowanie pozytywnego wizerunku firmy poprzez profesjonalną obsługę i edukację klientów.',
                    'en' => 'Building a positive image of the company through professional service and client education.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10344,
                'name' => json_encode([
                    'pl' => 'Kontrola kosztów związanych ze świadczeniami medycznymi oraz weryfikacja zgodności z umową ubezpieczeniową.',
                    'en' => 'Controlling costs related to medical services and verifying compliance with the insurance agreement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10345,
                'name' => json_encode([
                    'pl' => 'Analiza kosztów leczenia i kontrola faktur wystawianych przez placówki medyczne.',
                    'en' => 'Analyzing treatment costs and controlling invoices issued by medical facilities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10346,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem finansowym przy rozliczaniu świadczeń medycznych oraz przygotowywaniu zestawień kosztów.',
                    'en' => 'Collaborating with the finance department in settling medical benefits and preparing cost summaries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $DORADCA_DO_SPRAW_ODSZKODOWAŃ = [
            [
                'id' => 10383,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie szczegółowej analizy sprawy klienta, w tym dokumentacji szkody oraz umowy ubezpieczeniowej.',
                    'en' => 'Conducting a detailed analysis of the client\'s case, including the damage documentation and insurance contract.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10384,
                'name' => json_encode([
                    'pl' => 'Ocenianie, czy zgłoszona szkoda kwalifikuje się do odszkodowania zgodnie z warunkami polisy.',
                    'en' => 'Assessing whether the reported damage qualifies for compensation under the terms of the policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10385,
                'name' => json_encode([
                    'pl' => 'Określenie, jakie działania są konieczne, aby uzyskać jak najwyższe odszkodowanie.',
                    'en' => 'Determining the necessary actions to obtain the highest possible compensation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10386,
                'name' => json_encode([
                    'pl' => 'Udzielanie klientom informacji o przebiegu procesu likwidacji szkody oraz niezbędnych dokumentach.',
                    'en' => 'Providing clients with information about the progress of the claims process and the necessary documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10387,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie procedur i warunków umowy ubezpieczeniowej oraz zasad wyceny szkód.',
                    'en' => 'Explaining the procedures and terms of the insurance contract and the principles of damage assessment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10388,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom w zrozumieniu ich praw i obowiązków związanych z likwidacją szkody.',
                    'en' => 'Assisting clients in understanding their rights and obligations related to the claims process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10389,
                'name' => json_encode([
                    'pl' => 'Pomoc klientom w zgromadzeniu niezbędnych dokumentów do zgłoszenia szkody, takich jak raporty, zdjęcia, faktury itp.',
                    'en' => 'Assisting clients in gathering the necessary documents for the claim, such as reports, photos, invoices, etc.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10390,
                'name' => json_encode([
                    'pl' => 'Sporządzanie wniosków o odszkodowanie oraz kontrola ich kompletności i zgodności z wymaganiami.',
                    'en' => 'Preparing claims for compensation and ensuring their completeness and compliance with requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10391,
                'name' => json_encode([
                    'pl' => 'Przekazywanie dokumentacji do ubezpieczyciela oraz monitorowanie jej statusu.',
                    'en' => 'Submitting documentation to the insurer and monitoring its status.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10392,
                'name' => json_encode([
                    'pl' => 'Kontaktowanie się z ubezpieczycielem w imieniu klienta w celu przyspieszenia procesu likwidacji szkody.',
                    'en' => 'Contacting the insurer on behalf of the client to expedite the claims process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10393,
                'name' => json_encode([
                    'pl' => 'Negocjowanie wysokości odszkodowania oraz przedstawianie argumentów wspierających roszczenie klienta.',
                    'en' => 'Negotiating the amount of compensation and presenting arguments supporting the client\'s claim.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10394,
                'name' => json_encode([
                    'pl' => 'Śledzenie postępów sprawy i informowanie klienta o aktualnym statusie.',
                    'en' => 'Tracking the case progress and informing the client about the current status.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10395,
                'name' => json_encode([
                    'pl' => 'Organizowanie oględzin miejsca zdarzenia lub uczestnictwo w oględzinach przeprowadzanych przez rzeczoznawców.',
                    'en' => 'Organizing inspections of the incident site or participating in inspections conducted by experts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10396,
                'name' => json_encode([
                    'pl' => 'Dokumentowanie uszkodzeń oraz opracowywanie raportów z oględzin na potrzeby likwidacji szkody.',
                    'en' => 'Documenting damages and preparing inspection reports for the claims process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10397,
                'name' => json_encode([
                    'pl' => 'Współpraca z ekspertami i rzeczoznawcami, aby uzyskać dokładną wycenę szkody.',
                    'en' => 'Cooperating with experts and appraisers to obtain an accurate damage assessment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10398,
                'name' => json_encode([
                    'pl' => 'Analiza wycen od ubezpieczyciela oraz weryfikacja, czy kwota jest adekwatna do poniesionych strat.',
                    'en' => 'Analyzing the insurer\'s assessments and verifying whether the amount is adequate to the incurred losses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10399,
                'name' => json_encode([
                    'pl' => 'Porównywanie propozycji ubezpieczyciela z kosztorysami i dowodami przedstawionymi przez klienta.',
                    'en' => 'Comparing the insurer\'s proposals with estimates and evidence provided by the client.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10400,
                'name' => json_encode([
                    'pl' => 'W razie potrzeby sporządzanie odwołań i przedstawianie dodatkowych argumentów.',
                    'en' => 'If necessary, preparing appeals and presenting additional arguments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10401,
                'name' => json_encode([
                    'pl' => 'Prowadzenie negocjacji z ubezpieczycielem w celu uzyskania korzystniejszych warunków wypłaty odszkodowania.',
                    'en' => 'Conducting negotiations with the insurer to obtain more favorable compensation payout terms.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10402,
                'name' => json_encode([
                    'pl' => 'Wspieranie klientów w rozmowach z ubezpieczycielem, aby uzyskać jak najwyższą rekompensatę.',
                    'en' => 'Supporting clients in discussions with the insurer to achieve the highest possible compensation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10403,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie i przedstawianie alternatywnych propozycji rozliczenia, jeśli jest to konieczne.',
                    'en' => 'Preparing and presenting alternative settlement proposals if necessary.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10404,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie i składanie odwołań od decyzji ubezpieczyciela, jeśli wysokość odszkodowania jest nieadekwatna.',
                    'en' => 'Preparing and submitting appeals against the insurer\'s decisions if the compensation amount is inadequate.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10405,
                'name' => json_encode([
                    'pl' => 'Zbieranie dodatkowych dokumentów oraz dowodów, aby wspierać roszczenie klienta.',
                    'en' => 'Gathering additional documents and evidence to support the client\'s claim.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10406,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie interesów klienta w procesie odwoławczym oraz monitorowanie statusu sprawy.',
                    'en' => 'Representing the client\'s interests in the appeals process and monitoring the case status.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10407,
                'name' => json_encode([
                    'pl' => 'Kontrola, czy ubezpieczyciel wypłaca odszkodowanie w ustalonym terminie.',
                    'en' => 'Checking whether the insurer pays compensation within the agreed timeframe.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10408,
                'name' => json_encode([
                    'pl' => 'Kontaktowanie się z ubezpieczycielem w celu przyspieszenia wypłaty środków, jeśli występują opóźnienia.',
                    'en' => 'Contacting the insurer to expedite the payment of funds if there are delays.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10409,
                'name' => json_encode([
                    'pl' => 'Informowanie klienta o terminie otrzymania odszkodowania oraz udzielanie wsparcia w razie problemów.',
                    'en' => 'Informing the client about the expected date of compensation receipt and providing support in case of problems.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10410,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie regularnego kontaktu z klientami w celu udzielania informacji i wsparcia podczas procesu likwidacji szkody.',
                    'en' => 'Maintaining regular contact with clients to provide information and support during the claims process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10411,
                'name' => json_encode([
                    'pl' => 'Budowanie zaufania poprzez rzetelne doradztwo i transparentność działań.',
                    'en' => 'Building trust through reliable advice and transparency in actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10412,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie długoterminowych relacji z klientami, aby zapewnić im wsparcie w przypadku przyszłych roszczeń.',
                    'en' => 'Maintaining long-term relationships with clients to provide support in case of future claims.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10413,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów na temat zakończonych spraw oraz analiza przyczyn i wysokości szkód.',
                    'en' => 'Preparing reports on completed cases and analyzing the causes and amounts of damages.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10414,
                'name' => json_encode([
                    'pl' => 'Przedstawianie wyników zarządowi lub klientom oraz identyfikowanie potencjalnych obszarów do poprawy.',
                    'en' => 'Presenting results to management or clients and identifying potential areas for improvement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10415,
                'name' => json_encode([
                    'pl' => 'Analiza trendów i częstości szkód, które mogą wpływać na dalsze działania związane z polityką odszkodowań.',
                    'en' => 'Analyzing trends and frequency of damages that may influence further actions related to compensation policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10416,
                'name' => json_encode([
                    'pl' => 'Aktualizacja wiedzy z zakresu prawa ubezpieczeniowego oraz zmian w przepisach, które mogą wpływać na odszkodowania.',
                    'en' => 'Updating knowledge of insurance law and changes in regulations that may affect compensation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10417,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie działań i procedur do obowiązujących przepisów prawnych.',
                    'en' => 'Adjusting actions and procedures to comply with applicable laws.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10418,
                'name' => json_encode([
                    'pl' => 'Udzielanie klientom informacji o ich prawach oraz procedurach związanych z odszkodowaniami.',
                    'en' => 'Providing clients with information about their rights and the procedures related to compensation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10419,
                'name' => json_encode([
                    'pl' => 'Konsultacja z prawnikami w sprawach skomplikowanych roszczeń oraz w przypadku sporów z ubezpieczycielem.',
                    'en' => 'Consulting with lawyers on complicated claims and in case of disputes with the insurer.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10420,
                'name' => json_encode([
                    'pl' => 'Przekazywanie spraw, które mogą wymagać interwencji prawnej lub wystąpienia na drogę sądową.',
                    'en' => 'Referring cases that may require legal intervention or court proceedings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10421,
                'name' => json_encode([
                    'pl' => 'Współpraca z działem prawnym, aby zapewnić klientowi najlepszą możliwą reprezentację.',
                    'en' => 'Cooperating with the legal department to ensure the best possible representation for the client.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10422,
                'name' => json_encode([
                    'pl' => 'Udział w mediacjach między klientem a ubezpieczycielem w celu polubownego rozwiązania sporu.',
                    'en' => 'Participating in mediations between the client and the insurer to amicably resolve disputes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10423,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie interesów klienta podczas mediacji oraz negocjowanie warunków odszkodowania.',
                    'en' => 'Representing the client\'s interests during mediation and negotiating compensation terms.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10424,
                'name' => json_encode([
                    'pl' => 'Dążenie do osiągnięcia porozumienia, które satysfakcjonuje obie strony i pozwala uniknąć postępowania sądowego.',
                    'en' => 'Striving to reach an agreement that satisfies both parties and avoids court proceedings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10425,
                'name' => json_encode([
                    'pl' => 'Tworzenie broszur, przewodników i materiałów informacyjnych, które pomagają klientom zrozumieć proces likwidacji szkody.',
                    'en' => 'Creating brochures, guides, and informational materials that help clients understand the claims process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10426,
                'name' => json_encode([
                    'pl' => 'Organizowanie szkoleń lub warsztatów informacyjnych dla klientów, aby wyjaśnić zasady uzyskiwania odszkodowań.',
                    'en' => 'Organizing training or informational workshops for clients to explain the principles of obtaining compensation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10427,
                'name' => json_encode([
                    'pl' => 'Udzielanie klientom informacji na temat ich praw oraz procedur w razie wystąpienia szkody.',
                    'en' => 'Providing clients with information about their rights and procedures in the event of a claim.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10428,
                'name' => json_encode([
                    'pl' => 'Wsparcie klientów podczas stresującego procesu likwidacji szkód, szczególnie w przypadkach poważnych strat.',
                    'en' => 'Supporting clients during the stressful claims process, especially in cases of significant losses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10429,
                'name' => json_encode([
                    'pl' => 'Wyjaśnianie zawiłości procedur odszkodowawczych oraz wspieranie klientów w podejmowaniu decyzji.',
                    'en' => 'Explaining the complexities of claims procedures and supporting clients in making decisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10430,
                'name' => json_encode([
                    'pl' => 'Dbanie o komfort i zadowolenie klienta poprzez indywidualne podejście i pełne wsparcie emocjonalne.',
                    'en' => 'Ensuring the comfort and satisfaction of the client through a personalized approach and full emotional support.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10431,
                'name' => json_encode([
                    'pl' => 'Na podstawie analizy roszczeń i doświadczeń klientów doradzanie w zakresie wyboru odpowiednich polis ubezpieczeniowych.',
                    'en' => 'Advising on the selection of appropriate insurance policies based on claims analysis and client experiences.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10432,
                'name' => json_encode([
                    'pl' => 'Wskazywanie na potencjalne ryzyka oraz wyjaśnianie, jakie warunki ochrony są najkorzystniejsze dla klienta.',
                    'en' => 'Pointing out potential risks and explaining which coverage terms are most beneficial for the client.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10433,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie rekomendacji w oparciu o potrzeby klientów oraz ich wcześniejsze doświadczenia z ubezpieczeniami.',
                    'en' => 'Tailoring recommendations based on clients\' needs and their previous experiences with insurance.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10434,
                'name' => json_encode([
                    'pl' => 'W przypadku braku możliwości polubownego rozwiązania sporu, reprezentowanie klienta przed sądem lub wsparcie w przygotowaniach do sprawy.',
                    'en' => 'If an amicable resolution is not possible, representing the client in court or assisting in preparations for the case.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10435,
                'name' => json_encode([
                    'pl' => 'Konsultowanie się z prawnikami, opracowywanie strategii obrony oraz dostarczanie niezbędnych dokumentów do postępowania sądowego.',
                    'en' => 'Consulting with lawyers, developing defense strategies, and providing necessary documents for court proceedings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10436,
                'name' => json_encode([
                    'pl' => 'Dążenie do uzyskania sprawiedliwego odszkodowania oraz pomoc klientowi w egzekucji jego praw.',
                    'en' => 'Striving to obtain fair compensation and assisting the client in enforcing their rights.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $SAMODZIELNY_KSIĘGOWY = [
            [
                'id' => 10437,
                'name' => json_encode([
                    'pl' => 'Księgowanie wszystkich operacji finansowych, takich jak przychody, koszty, zobowiązania i należności.',
                    'en' => 'Booking all financial transactions such as revenues, costs, liabilities, and receivables.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10438,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że transakcje są wprowadzane zgodnie z zasadami rachunkowości i przepisami prawa.',
                    'en' => 'Ensuring that transactions are entered in accordance with accounting principles and legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10439,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ksiąg rachunkowych zgodnie z ustawą o rachunkowości.',
                    'en' => 'Maintaining accounting books in accordance with the Accounting Act.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10440,
                'name' => json_encode([
                    'pl' => 'Tworzenie miesięcznych, kwartalnych i rocznych sprawozdań finansowych, takich jak bilans, rachunek zysków i strat oraz rachunek przepływów pieniężnych.',
                    'en' => 'Preparing monthly, quarterly, and annual financial statements such as the balance sheet, income statement, and cash flow statement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10441,
                'name' => json_encode([
                    'pl' => 'Przedstawianie sprawozdań zarządowi i przygotowywanie ich do audytów wewnętrznych i zewnętrznych.',
                    'en' => 'Presenting reports to management and preparing them for internal and external audits.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10442,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności sprawozdań z przepisami rachunkowości i regulacjami finansowymi.',
                    'en' => 'Ensuring compliance of reports with accounting regulations and financial regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10443,
                'name' => json_encode([
                    'pl' => 'Obliczanie podatków, takich jak VAT, CIT i PIT, oraz przygotowywanie odpowiednich deklaracji podatkowych.',
                    'en' => 'Calculating taxes such as VAT, CIT, and PIT, and preparing the appropriate tax declarations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10444,
                'name' => json_encode([
                    'pl' => 'Składanie deklaracji do urzędów skarbowych w terminie oraz rozliczanie zaliczek podatkowych.',
                    'en' => 'Filing declarations with tax offices on time and settling tax advances.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10445,
                'name' => json_encode([
                    'pl' => 'Śledzenie zmian w przepisach podatkowych i dostosowywanie procedur księgowych do aktualnych wymogów prawnych.',
                    'en' => 'Monitoring changes in tax regulations and adapting accounting procedures to current legal requirements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10446,
                'name' => json_encode([
                    'pl' => 'Gromadzenie, weryfikacja i archiwizacja dokumentów księgowych, takich jak faktury, paragony, wyciągi bankowe i dowody księgowe.',
                    'en' => 'Collecting, verifying, and archiving accounting documents such as invoices, receipts, bank statements, and accounting evidence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10447,
                'name' => json_encode([
                    'pl' => 'Kontrola poprawności formalnej i rachunkowej dokumentów przed ich zaksięgowaniem.',
                    'en' => 'Checking the formal and accounting correctness of documents before they are recorded.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10448,
                'name' => json_encode([
                    'pl' => 'Przechowywanie dokumentacji zgodnie z obowiązującymi przepisami o archiwizacji.',
                    'en' => 'Storing documentation in accordance with applicable archiving regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10449,
                'name' => json_encode([
                    'pl' => 'Regularne przeglądanie i uzgadnianie sald kont księgowych z danymi zawartymi w dokumentacji finansowej.',
                    'en' => 'Regularly reviewing and reconciling the balances of accounting accounts with the data contained in financial documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10450,
                'name' => json_encode([
                    'pl' => 'Identyfikacja i korygowanie ewentualnych błędów lub niezgodności w zapisach księgowych.',
                    'en' => 'Identifying and correcting any errors or discrepancies in accounting entries.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10451,
                'name' => json_encode([
                    'pl' => 'Dokonywanie uzgodnień międzyokresowych oraz uzgadnianie rozrachunków.',
                    'en' => 'Conducting period adjustments and reconciling settlements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10452,
                'name' => json_encode([
                    'pl' => 'Udział w procesie budżetowania oraz przygotowywanie prognoz finansowych na podstawie historycznych danych.',
                    'en' => 'Participating in the budgeting process and preparing financial forecasts based on historical data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10453,
                'name' => json_encode([
                    'pl' => 'Monitorowanie realizacji budżetu i analiza odchyleń od założeń finansowych.',
                    'en' => 'Monitoring budget implementation and analyzing deviations from financial assumptions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10454,
                'name' => json_encode([
                    'pl' => 'Przedstawianie analiz budżetowych oraz dostosowywanie prognoz do aktualnych wyników finansowych.',
                    'en' => 'Presenting budget analyses and adjusting forecasts to current financial results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10455,
                'name' => json_encode([
                    'pl' => 'Monitorowanie kosztów operacyjnych oraz identyfikacja obszarów do optymalizacji.',
                    'en' => 'Monitoring operating costs and identifying areas for optimization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10456,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów kosztowych, analiza odchyleń oraz proponowanie działań oszczędnościowych.',
                    'en' => 'Preparing cost reports, analyzing deviations, and proposing cost-saving measures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10457,
                'name' => json_encode([
                    'pl' => 'Współpraca z działami operacyjnymi w celu kontrolowania kosztów i zgodności z budżetem.',
                    'en' => 'Cooperating with operational departments to control costs and compliance with the budget.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10458,
                'name' => json_encode([
                    'pl' => 'Monitorowanie terminów spłat należności i zobowiązań oraz podejmowanie działań windykacyjnych w przypadku opóźnień.',
                    'en' => 'Monitoring the payment deadlines of receivables and liabilities and taking collection actions in case of delays.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10459,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów dotyczących struktury należności i zobowiązań oraz ocena ich wpływu na płynność firmy.',
                    'en' => 'Preparing reports on the structure of receivables and liabilities and assessing their impact on the company\'s liquidity.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10460,
                'name' => json_encode([
                    'pl' => 'Zarządzanie płynnością finansową poprzez kontrolę przepływów gotówkowych.',
                    'en' => 'Managing financial liquidity by controlling cash flows.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10461,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji środków trwałych oraz wartości niematerialnych i prawnych.',
                    'en' => 'Keeping records of fixed assets and intangible assets.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10462,
                'name' => json_encode([
                    'pl' => 'Naliczanie amortyzacji zgodnie z przepisami i polityką rachunkowości firmy.',
                    'en' => 'Calculating depreciation according to regulations and the company\'s accounting policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10463,
                'name' => json_encode([
                    'pl' => 'Regularna aktualizacja stanu majątku i przeprowadzanie inwentaryzacji środków trwałych.',
                    'en' => 'Regularly updating the status of assets and conducting inventory of fixed assets.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10464,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów dotyczących wyników finansowych, struktury kosztów, rentowności oraz przepływów pieniężnych.',
                    'en' => 'Preparing reports on financial results, cost structure, profitability, and cash flows.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10465,
                'name' => json_encode([
                    'pl' => 'Przekazywanie analiz finansowych zarządowi, wspierających podejmowanie decyzji strategicznych.',
                    'en' => 'Providing financial analyses to management, supporting strategic decision-making.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10466,
                'name' => json_encode([
                    'pl' => 'Tworzenie dodatkowych raportów na żądanie zarządu lub działów operacyjnych.',
                    'en' => 'Creating additional reports at the request of management or operational departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10467,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentacji finansowej oraz dostarczanie niezbędnych informacji audytorom.',
                    'en' => 'Preparing financial documentation and providing necessary information to auditors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10468,
                'name' => json_encode([
                    'pl' => 'Udzielanie odpowiedzi na pytania audytorów oraz wyjaśnianie niejasności w zakresie księgowości.',
                    'en' => 'Responding to auditors\' questions and clarifying ambiguities in accounting.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10469,
                'name' => json_encode([
                    'pl' => 'Wdrażanie zaleceń audytorów oraz optymalizowanie procesów księgowych na podstawie wyników audytów.',
                    'en' => 'Implementing auditor recommendations and optimizing accounting processes based on audit results.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10470,
                'name' => json_encode([
                    'pl' => 'Regularne monitorowanie przepisów prawa rachunkowego i podatkowego, aby zapewnić zgodność z obowiązującymi regulacjami.',
                    'en' => 'Regularly monitoring accounting and tax laws to ensure compliance with applicable regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10471,
                'name' => json_encode([
                    'pl' => 'Dostosowywanie procedur i polityk księgowych firmy do zmian w przepisach.',
                    'en' => 'Adjusting the company\'s accounting procedures and policies to changes in regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10472,
                'name' => json_encode([
                    'pl' => 'Informowanie zarządu o ważnych zmianach legislacyjnych, które mogą wpłynąć na sytuację finansową firmy.',
                    'en' => 'Informing management about important legislative changes that may affect the company\'s financial situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10473,
                'name' => json_encode([
                    'pl' => 'Opracowywanie i aktualizacja polityki rachunkowości firmy zgodnie z obowiązującymi przepisami.',
                    'en' => 'Developing and updating the company\'s accounting policy in accordance with applicable regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10474,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że polityka rachunkowości jest przestrzegana we wszystkich operacjach finansowych.',
                    'en' => 'Ensuring that the accounting policy is followed in all financial operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10475,
                'name' => json_encode([
                    'pl' => 'Regularne przeglądanie i optymalizacja procesów księgowych, aby zwiększyć ich efektywność.',
                    'en' => 'Regularly reviewing and optimizing accounting processes to increase their efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10476,
                'name' => json_encode([
                    'pl' => 'Naliczanie kosztów i przychodów międzyokresowych oraz tworzenie rezerw finansowych na przyszłe zobowiązania.',
                    'en' => 'Calculating accrued costs and revenues and creating financial reserves for future obligations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10477,
                'name' => json_encode([
                    'pl' => 'Tworzenie i aktualizacja rezerw na zobowiązania, zgodnie z polityką rachunkowości firmy.',
                    'en' => 'Creating and updating provisions for liabilities in accordance with the company\'s accounting policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10478,
                'name' => json_encode([
                    'pl' => 'Księgowanie rozliczeń międzyokresowych, aby zapewnić dokładne odzwierciedlenie sytuacji finansowej.',
                    'en' => 'Recording accruals to ensure an accurate reflection of the financial situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10479,
                'name' => json_encode([
                    'pl' => 'Naliczanie wynagrodzeń, premii, dodatków oraz składek ZUS i zaliczek na podatek dochodowy od pracowników.',
                    'en' => 'Calculating salaries, bonuses, allowances, and ZUS contributions and advance income taxes from employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10480,
                'name' => json_encode([
                    'pl' => 'Sporządzanie listy płac oraz dokumentacji podatkowej i ubezpieczeniowej dla pracowników.',
                    'en' => 'Preparing payroll and tax and insurance documentation for employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10481,
                'name' => json_encode([
                    'pl' => 'Przekazywanie rozliczeń do ZUS i urzędów skarbowych oraz archiwizacja dokumentów płacowych.',
                    'en' => 'Transmitting settlements to ZUS and tax offices and archiving payroll documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10482,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analiz finansowych i ocena wyników pod kątem rentowności, płynności i efektywności finansowej.',
                    'en' => 'Conducting financial analyses and evaluating results in terms of profitability, liquidity, and financial efficiency.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10483,
                'name' => json_encode([
                    'pl' => 'Identyfikacja trendów i wzorców, które mogą wpływać na sytuację finansową firmy.',
                    'en' => 'Identifying trends and patterns that may affect the company\'s financial situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10484,
                'name' => json_encode([
                    'pl' => 'Przedstawianie rekomendacji zarządowi na podstawie analiz wyników finansowych.',
                    'en' => 'Presenting recommendations to management based on financial performance analyses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10485,
                'name' => json_encode([
                    'pl' => 'Współpraca z zarządem w zakresie planowania finansowego i tworzenia budżetów.',
                    'en' => 'Collaborating with management on financial planning and budget creation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10486,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie prognoz finansowych na potrzeby planowania strategicznego firmy.',
                    'en' => 'Preparing financial forecasts for the company\'s strategic planning.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10487,
                'name' => json_encode([
                    'pl' => 'Analiza ryzyk finansowych oraz dostosowywanie budżetów do zmieniających się warunków rynkowych.',
                    'en' => 'Analyzing financial risks and adjusting budgets to changing market conditions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10488,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie wewnętrznych procedur firmy oraz polityki rachunkowości i zgodności z przepisami.',
                    'en' => 'Adhering to the company\'s internal procedures and accounting policies and compliance with regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10489,
                'name' => json_encode([
                    'pl' => 'Stosowanie zasad ochrony danych finansowych i zabezpieczanie informacji księgowych.',
                    'en' => 'Applying principles of financial data protection and securing accounting information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10490,
                'name' => json_encode([
                    'pl' => 'Zapewnienie zgodności procesów księgowych z przepisami o rachunkowości i regulacjami branżowymi.',
                    'en' => 'Ensuring compliance of accounting processes with accounting regulations and industry regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10491,
                'name' => json_encode([
                    'pl' => 'Wspieranie działów operacyjnych w zakresie informacji finansowych, analizy kosztów i budżetowania.',
                    'en' => 'Supporting operational departments in terms of financial information, cost analysis, and budgeting.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10492,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji dotyczących zasad księgowych, interpretacji raportów finansowych i wsparcie w decyzjach finansowych.',
                    'en' => 'Providing information on accounting principles, interpreting financial reports, and supporting financial decisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10493,
                'name' => json_encode([
                    'pl' => 'Organizowanie spotkań i warsztatów mających na celu poprawę współpracy między działami.',
                    'en' => 'Organizing meetings and workshops aimed at improving cooperation between departments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10494,
                'name' => json_encode([
                    'pl' => 'Analiza i usprawnianie procesów księgowych w celu zwiększenia efektywności i minimalizacji błędów.',
                    'en' => 'Analyzing and improving accounting processes to increase efficiency and minimize errors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10495,
                'name' => json_encode([
                    'pl' => 'Wdrażanie systemów informatycznych i narzędzi finansowych, takich jak ERP, wspomagających procesy księgowe.',
                    'en' => 'Implementing information systems and financial tools, such as ERP, supporting accounting processes.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10496,
                'name' => json_encode([
                    'pl' => 'Proponowanie zmian w procedurach księgowych, które mogą poprawić dokładność i przejrzystość raportowania finansowego.',
                    'en' => 'Proposing changes to accounting procedures that can improve the accuracy and transparency of financial reporting.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $EKONOMIŚCI = [
            [
                'id' => 10497,
                'name' => json_encode([
                    'pl' => 'Zbieranie i interpretacja danych makroekonomicznych i mikroekonomicznych.',
                    'en' => 'Collecting and interpreting macroeconomic and microeconomic data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10498,
                'name' => json_encode([
                    'pl' => 'Analizowanie trendów i wzorców w danych statystycznych.',
                    'en' => 'Analyzing trends and patterns in statistical data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10499,
                'name' => json_encode([
                    'pl' => 'Opracowywanie szczegółowych raportów dotyczących sytuacji gospodarczej, sektorów rynkowych lub konkretnych przedsiębiorstw.',
                    'en' => 'Developing detailed reports on the economic situation, market sectors, or specific enterprises.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10500,
                'name' => json_encode([
                    'pl' => 'Prezentowanie wyników analiz w formie pisemnej i ustnej.',
                    'en' => 'Presenting analysis results in both written and oral forms.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10501,
                'name' => json_encode([
                    'pl' => 'Tworzenie i stosowanie modeli ekonomicznych do przewidywania wyników i zachowań gospodarczych.',
                    'en' => 'Creating and using economic models to forecast outcomes and economic behaviors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10502,
                'name' => json_encode([
                    'pl' => 'Testowanie hipotez i scenariuszy gospodarczych.',
                    'en' => 'Testing hypotheses and economic scenarios.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10503,
                'name' => json_encode([
                    'pl' => 'Udzielanie porad przedsiębiorstwom, instytucjom publicznym i organizacjom non-profit w zakresie polityki ekonomicznej.',
                    'en' => 'Advising businesses, public institutions, and non-profit organizations on economic policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10504,
                'name' => json_encode([
                    'pl' => 'Pomoc w opracowywaniu strategii biznesowych opartych na analizie ekonomicznej.',
                    'en' => 'Assisting in developing business strategies based on economic analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10505,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie badań dotyczących popytu i podaży na rynku.',
                    'en' => 'Conducting research on demand and supply in the market.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10506,
                'name' => json_encode([
                    'pl' => 'Analiza konkurencji i warunków rynkowych.',
                    'en' => 'Analyzing competition and market conditions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10507,
                'name' => json_encode([
                    'pl' => 'Praca z bankami, funduszami inwestycyjnymi i innymi instytucjami finansowymi w celu analizy ryzyka i oceny inwestycji.',
                    'en' => 'Working with banks, investment funds, and other financial institutions to analyze risks and evaluate investments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10508,
                'name' => json_encode([
                    'pl' => 'Analizowanie wpływu polityki rządowej na gospodarkę i rynki.',
                    'en' => 'Analyzing the impact of government policy on the economy and markets.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10509,
                'name' => json_encode([
                    'pl' => 'Śledzenie zmian w regulacjach i ich skutków dla przedsiębiorstw i sektora publicznego.',
                    'en' => 'Tracking changes in regulations and their effects on businesses and the public sector.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10510,
                'name' => json_encode([
                    'pl' => 'Publikowanie artykułów naukowych lub raportów w prasie ekonomicznej.',
                    'en' => 'Publishing scientific articles or reports in the economic press.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10511,
                'name' => json_encode([
                    'pl' => 'Udział w konferencjach i seminariach, dzielenie się wiedzą i doświadczeniem.',
                    'en' => 'Participating in conferences and seminars, sharing knowledge and experience.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10512,
                'name' => json_encode([
                    'pl' => 'Opracowywanie rekomendacji dotyczących polityki gospodarczej, fiskalnej i monetarnej.',
                    'en' => 'Developing recommendations on economic, fiscal, and monetary policy.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10513,
                'name' => json_encode([
                    'pl' => 'Współpraca z rządem i organizacjami międzynarodowymi w zakresie reform gospodarczych.',
                    'en' => 'Collaborating with the government and international organizations on economic reforms.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10514,
                'name' => json_encode([
                    'pl' => 'Ocena projektów inwestycyjnych pod kątem ich opłacalności.',
                    'en' => 'Evaluating investment projects for their profitability.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10515,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analiz porównawczych różnych opcji gospodarczych.',
                    'en' => 'Conducting comparative analyses of various economic options.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $TECHNIK_EKONOMISTA = [
            [
                'id' => 10516,
                'name' => json_encode([
                    'pl' => 'Gromadzenie informacji z różnych źródeł, takich jak raporty, ankiety i bazy danych.',
                    'en' => 'Collecting information from various sources, such as reports, surveys, and databases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10517,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie badań rynku i analizowanie danych statystycznych.',
                    'en' => 'Conducting market research and analyzing statistical data.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10518,
                'name' => json_encode([
                    'pl' => 'Opracowywanie analiz dotyczących trendów ekonomicznych i wyników działalności przedsiębiorstwa.',
                    'en' => 'Developing analyses regarding economic trends and the performance results of the enterprise.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10519,
                'name' => json_encode([
                    'pl' => 'Udział w tworzeniu raportów ekonomicznych i finansowych.',
                    'en' => 'Participating in the creation of economic and financial reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10520,
                'name' => json_encode([
                    'pl' => 'Asystowanie w budowie i testowaniu modeli ekonomicznych.',
                    'en' => 'Assisting in the construction and testing of economic models.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10521,
                'name' => json_encode([
                    'pl' => 'Wykonywanie obliczeń i analiz wspierających proces modelowania.',
                    'en' => 'Performing calculations and analyses supporting the modeling process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10522,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie i organizowanie dokumentacji związanej z projektami ekonomicznymi.',
                    'en' => 'Preparing and organizing documentation related to economic projects.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10523,
                'name' => json_encode([
                    'pl' => 'Archiwizacja i aktualizacja danych oraz raportów.',
                    'en' => 'Archiving and updating data and reports.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10524,
                'name' => json_encode([
                    'pl' => 'Udział w opracowywaniu budżetów jednostek organizacyjnych lub projektów.',
                    'en' => 'Participating in the development of budgets for organizational units or projects.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10525,
                'name' => json_encode([
                    'pl' => 'Monitorowanie realizacji budżetów oraz przygotowywanie raportów dotyczących wydatków.',
                    'en' => 'Monitoring budget implementation and preparing reports on expenditures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10526,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie analiz kosztów związanych z działalnością przedsiębiorstwa.',
                    'en' => 'Conducting cost analyses related to the enterprise’s operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10527,
                'name' => json_encode([
                    'pl' => 'Udział w ocenie rentowności różnych projektów i inwestycji.',
                    'en' => 'Participating in the assessment of the profitability of various projects and investments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10528,
                'name' => json_encode([
                    'pl' => 'Dostarczanie danych i analiz potrzebnych do podejmowania decyzji zarządczych.',
                    'en' => 'Providing data and analyses needed for managerial decision-making.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10529,
                'name' => json_encode([
                    'pl' => 'Wspieranie zespołów projektowych w analizach finansowych.',
                    'en' => 'Supporting project teams in financial analyses.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10530,
                'name' => json_encode([
                    'pl' => 'Koordynowanie działań z innymi działami, takimi jak księgowość, marketing czy sprzedaż.',
                    'en' => 'Coordinating activities with other departments, such as accounting, marketing, or sales.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10531,
                'name' => json_encode([
                    'pl' => 'Udział w spotkaniach zespołowych w celu wymiany informacji i spostrzeżeń.',
                    'en' => 'Participating in team meetings to exchange information and insights.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10532,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie zestawień finansowych i analizujących działalność firmy.',
                    'en' => 'Preparing financial summaries and analyses of the company’s operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10533,
                'name' => json_encode([
                    'pl' => 'Udział w tworzeniu prezentacji dla kierownictwa lub inwestorów.',
                    'en' => 'Participating in creating presentations for management or investors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10534,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w szkoleniach i kursach w celu doskonalenia umiejętności ekonomicznych.',
                    'en' => 'Participating in training and courses to improve economic skills.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10535,
                'name' => json_encode([
                    'pl' => 'Śledzenie zmian w przepisach i normach dotyczących finansów i ekonomii.',
                    'en' => 'Monitoring changes in regulations and standards related to finance and economics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10536,
                'name' => json_encode([
                    'pl' => 'Wykorzystywanie narzędzi do analizy danych, takich jak arkusze kalkulacyjne i specjalistyczne oprogramowanie ekonomiczne.',
                    'en' => 'Using data analysis tools such as spreadsheets and specialized economic software.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10537,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie i aktualizacja baz danych.',
                    'en' => 'Maintaining and updating databases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $ADWOKAT = [
            [
                'id' => 10600,
                'name' => json_encode([
                    'pl' => 'Konsultowanie się z klientami w celu zrozumienia ich sytuacji prawnej.',
                    'en' => 'Consulting with clients to understand their legal situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10601,
                'name' => json_encode([
                    'pl' => 'Oferowanie wskazówek i strategii dotyczących możliwych działań prawnych.',
                    'en' => 'Offering advice and strategies regarding possible legal actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10602,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie klientów przed sądami, organami administracyjnymi oraz innymi instytucjami.',
                    'en' => 'Representing clients before courts, administrative bodies, and other institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10603,
                'name' => json_encode([
                    'pl' => 'Występowanie w sprawach cywilnych, karnych, administracyjnych, rodzinnych i gospodarczych.',
                    'en' => 'Appearing in civil, criminal, administrative, family, and economic cases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10604,
                'name' => json_encode([
                    'pl' => 'Sporządzanie pism procesowych, umów, opinii prawnych i innych dokumentów prawnych.',
                    'en' => 'Drafting pleadings, contracts, legal opinions, and other legal documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10605,
                'name' => json_encode([
                    'pl' => 'Opracowywanie skarg, wniosków i apelacji.',
                    'en' => 'Preparing complaints, motions, and appeals.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10606,
                'name' => json_encode([
                    'pl' => 'Analizowanie faktów i dowodów w sprawach klientów.',
                    'en' => 'Analyzing facts and evidence in clients’ cases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10607,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie badań prawnych oraz gromadzenie dowodów i dokumentacji.',
                    'en' => 'Conducting legal research and gathering evidence and documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10608,
                'name' => json_encode([
                    'pl' => 'Prowadzenie negocjacji w imieniu klientów w sprawach dotyczących ugód, umów oraz innych spraw prawnych.',
                    'en' => 'Conducting negotiations on behalf of clients in matters concerning settlements, contracts, and other legal issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10609,
                'name' => json_encode([
                    'pl' => 'Poszukiwanie rozwiązań, które będą korzystne dla klientów.',
                    'en' => 'Seeking solutions that will be beneficial for clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10610,
                'name' => json_encode([
                    'pl' => 'Uczestniczenie w mediacjach jako przedstawiciel klienta.',
                    'en' => 'Participating in mediations as a client representative.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10611,
                'name' => json_encode([
                    'pl' => 'Pomoc w osiągnięciu ugody między stronami.',
                    'en' => 'Assisting in reaching an agreement between parties.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10612,
                'name' => json_encode([
                    'pl' => 'Opracowywanie szczegółowych analiz prawnych dotyczących konkretnych zagadnień.',
                    'en' => 'Developing detailed legal analyses concerning specific issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10613,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o konsekwencjach prawnych ich decyzji.',
                    'en' => 'Informing clients about the legal consequences of their decisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10614,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o ich prawach i obowiązkach.',
                    'en' => 'Informing clients about their rights and obligations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10615,
                'name' => json_encode([
                    'pl' => 'Udzielanie porad dotyczących przepisów prawnych oraz procedur sądowych.',
                    'en' => 'Providing advice on legal regulations and court procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10616,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi prawnikami, ekspertami oraz specjalistami w danej dziedzinie.',
                    'en' => 'Collaborating with other lawyers, experts, and specialists in the field.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10617,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w konferencjach, szkoleniach oraz seminariach prawniczych.',
                    'en' => 'Participating in legal conferences, training, and seminars.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10618,
                'name' => json_encode([
                    'pl' => 'Organizowanie pracy nad sprawami klientów i monitorowanie postępów.',
                    'en' => 'Organizing work on client cases and monitoring progress.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10619,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie bieżącej komunikacji z klientami i informowanie ich o stanie sprawy.',
                    'en' => 'Maintaining ongoing communication with clients and informing them about the status of their case.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10620,
                'name' => json_encode([
                    'pl' => 'Działanie zgodnie z kodeksem etyki adwokackiej oraz przepisami prawa.',
                    'en' => 'Acting in accordance with the attorney’s code of ethics and legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10621,
                'name' => json_encode([
                    'pl' => 'Zachowanie poufności informacji dotyczących klientów.',
                    'en' => 'Maintaining confidentiality of client information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10622,
                'name' => json_encode([
                    'pl' => 'Udzielanie pomocy prawnej osobom potrzebującym, które nie mogą sobie pozwolić na płatne usługi prawne.',
                    'en' => 'Providing legal assistance to those in need who cannot afford paid legal services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $PROKURATOR = [
            [
                'id' => 10623,
                'name' => json_encode([
                    'pl' => 'Inicjowanie i nadzorowanie śledztw w sprawach karnych.',
                    'en' => 'Initiating and supervising investigations in criminal cases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10624,
                'name' => json_encode([
                    'pl' => 'Współpraca z policją i innymi organami ścigania w celu zbierania dowodów.',
                    'en' => 'Cooperating with the police and other law enforcement agencies to gather evidence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10625,
                'name' => json_encode([
                    'pl' => 'Wytyczanie kierunków działań policji w trakcie prowadzenia śledztwa.',
                    'en' => 'Guiding police actions during the investigation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10626,
                'name' => json_encode([
                    'pl' => 'Monitorowanie postępów w śledztwie i ocena zgromadzonych dowodów.',
                    'en' => 'Monitoring progress in the investigation and assessing collected evidence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10627,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie i składanie aktów oskarżenia do sądów.',
                    'en' => 'Preparing and submitting indictments to the courts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10628,
                'name' => json_encode([
                    'pl' => 'Formułowanie zarzutów oraz przedstawianie podstaw prawnych.',
                    'en' => 'Formulating charges and presenting legal grounds.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10629,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie prokuratury przed sądem podczas rozpraw.',
                    'en' => 'Representing the prosecution in court during hearings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10630,
                'name' => json_encode([
                    'pl' => 'Prezentowanie dowodów oraz argumentów w sprawach karnych.',
                    'en' => 'Presenting evidence and arguments in criminal cases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10631,
                'name' => json_encode([
                    'pl' => 'Składanie wniosków o zabezpieczenie dowodów oraz o areszt tymczasowy.',
                    'en' => 'Submitting motions for securing evidence and for temporary arrest.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10632,
                'name' => json_encode([
                    'pl' => 'Udział w postępowaniach o umorzenie lub umorzenie postępowania.',
                    'en' => 'Participating in proceedings for dismissal or termination of proceedings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10633,
                'name' => json_encode([
                    'pl' => 'Przeglądanie i ocena dowodów zgromadzonych w sprawie.',
                    'en' => 'Reviewing and assessing the evidence collected in the case.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10634,
                'name' => json_encode([
                    'pl' => 'Dokonywanie ocen prawnych i faktograficznych dotyczących sprawy.',
                    'en' => 'Making legal and factual assessments regarding the case.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10635,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w postępowaniach cywilnych, w których państwo ma interes prawny.',
                    'en' => 'Participating in civil proceedings in which the state has a legal interest.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10636,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie prokuratury w sprawach dotyczących ochrony prawnej.',
                    'en' => 'Representing the prosecution in cases concerning legal protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10637,
                'name' => json_encode([
                    'pl' => 'Współpraca z instytucjami i organizacjami zajmującymi się ochroną praw człowieka.',
                    'en' => 'Cooperating with institutions and organizations dealing with human rights protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10638,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w działaniach mających na celu zwalczanie przestępczości zorganizowanej i korupcji.',
                    'en' => 'Participating in activities aimed at combating organized crime and corruption.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10639,
                'name' => json_encode([
                    'pl' => 'Opracowywanie analiz i opinii prawnych w zakresie obowiązujących przepisów.',
                    'en' => 'Developing analyses and legal opinions regarding applicable regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10640,
                'name' => json_encode([
                    'pl' => 'Konsultowanie się z innymi prokuratorami oraz ekspertami w danej dziedzinie.',
                    'en' => 'Consulting with other prosecutors and experts in the field.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10641,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o działalności prokuratury i postępowaniach karnych.',
                    'en' => 'Providing information about the activities of the prosecution and criminal proceedings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10642,
                'name' => json_encode([
                    'pl' => 'Prowadzenie działań edukacyjnych dotyczących prawa i procedur sądowych.',
                    'en' => 'Conducting educational activities related to law and court procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10643,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie prokuratury w sprawach dotyczących nieletnich sprawców przestępstw.',
                    'en' => 'Representing the prosecution in cases concerning juvenile offenders.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10644,
                'name' => json_encode([
                    'pl' => 'Współpraca z sądami rodzinnymi i instytucjami opiekuńczymi.',
                    'en' => 'Cooperating with family courts and welfare institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10645,
                'name' => json_encode([
                    'pl' => 'Działania mające na celu ochronę interesów społecznych i zapewnienie bezpieczeństwa publicznego.',
                    'en' => 'Actions aimed at protecting public interests and ensuring public safety.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10646,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w sprawach dotyczących ochrony zdrowia, środowiska i praw konsumentów.',
                    'en' => 'Participating in matters concerning health protection, environmental issues, and consumer rights.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $RADCA_PRAWNY = [
            [
                'id' => 10647,
                'name' => json_encode([
                    'pl' => 'Konsultowanie z klientami w celu zrozumienia ich sytuacji prawnej.',
                    'en' => 'Consulting with clients to understand their legal situation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10648,
                'name' => json_encode([
                    'pl' => 'Oferowanie wskazówek dotyczących możliwych działań prawnych oraz ryzyk.',
                    'en' => 'Providing advice on possible legal actions and risks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10649,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie klientów przed sądami, organami administracyjnymi oraz innymi instytucjami.',
                    'en' => 'Representing clients before courts, administrative bodies, and other institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10650,
                'name' => json_encode([
                    'pl' => 'Występowanie w sprawach cywilnych, gospodarczych, administracyjnych oraz rodzinnych.',
                    'en' => 'Appearing in civil, commercial, administrative, and family matters.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10651,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie pism procesowych, umów, regulaminów oraz innych dokumentów prawnych.',
                    'en' => 'Preparing pleadings, contracts, regulations, and other legal documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10652,
                'name' => json_encode([
                    'pl' => 'Opracowywanie skarg, wniosków, apelacji i innych pism procesowych.',
                    'en' => 'Drafting complaints, motions, appeals, and other procedural documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10653,
                'name' => json_encode([
                    'pl' => 'Analizowanie faktów i dowodów w sprawach klientów.',
                    'en' => 'Analyzing facts and evidence in clients\' cases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10654,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie badań prawnych oraz gromadzenie dokumentacji.',
                    'en' => 'Conducting legal research and gathering documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10655,
                'name' => json_encode([
                    'pl' => 'Prowadzenie negocjacji w imieniu klientów w sprawach dotyczących umów, ugód oraz innych zobowiązań prawnych.',
                    'en' => 'Conducting negotiations on behalf of clients regarding contracts, settlements, and other legal obligations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10656,
                'name' => json_encode([
                    'pl' => 'Poszukiwanie rozwiązań korzystnych dla klientów.',
                    'en' => 'Seeking beneficial solutions for clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10657,
                'name' => json_encode([
                    'pl' => 'Opracowywanie szczegółowych analiz prawnych dotyczących konkretnych zagadnień.',
                    'en' => 'Developing detailed legal analyses regarding specific issues.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10658,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o konsekwencjach prawnych ich decyzji.',
                    'en' => 'Informing clients about the legal consequences of their decisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10659,
                'name' => json_encode([
                    'pl' => 'Udzielanie porad dotyczących zgodności działań klientów z obowiązującymi przepisami prawa.',
                    'en' => 'Advising on clients\' compliance with applicable laws and regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10660,
                'name' => json_encode([
                    'pl' => 'Pomoc w opracowywaniu procedur zgodnych z regulacjami prawnymi.',
                    'en' => 'Assisting in developing procedures compliant with legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10661,
                'name' => json_encode([
                    'pl' => 'Świadczenie usług prawnych dla firm, w tym pomoc w zakładaniu działalności gospodarczej, opracowywanie umów oraz reprezentowanie w sprawach pracowniczych.',
                    'en' => 'Providing legal services for businesses, including assistance in setting up businesses, drafting contracts, and representing in employment matters.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10662,
                'name' => json_encode([
                    'pl' => 'Udzielanie porad dotyczących prawa pracy i ochrony danych osobowych.',
                    'en' => 'Advising on labor law and data protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10663,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie się do rozpraw, w tym gromadzenie dowodów oraz argumentów.',
                    'en' => 'Preparing for hearings, including gathering evidence and arguments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10664,
                'name' => json_encode([
                    'pl' => 'Prezentowanie sprawy przed sądem.',
                    'en' => 'Presenting the case before the court.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10665,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi prawnikami, ekspertami oraz specjalistami w danej dziedzinie.',
                    'en' => 'Cooperating with other lawyers, experts, and specialists in the field.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10666,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w konferencjach i szkoleniach w celu podnoszenia kwalifikacji.',
                    'en' => 'Participating in conferences and training to improve qualifications.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10667,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o ich prawach i obowiązkach.',
                    'en' => 'Informing clients about their rights and obligations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10668,
                'name' => json_encode([
                    'pl' => 'Udzielanie porad dotyczących przepisów prawnych oraz procedur sądowych.',
                    'en' => 'Providing advice on legal regulations and court procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10669,
                'name' => json_encode([
                    'pl' => 'Działanie zgodnie z kodeksem etyki radców prawnych oraz przepisami prawa.',
                    'en' => 'Acting in accordance with the code of ethics for legal advisors and legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10670,
                'name' => json_encode([
                    'pl' => 'Zachowanie poufności informacji dotyczących klientów.',
                    'en' => 'Maintaining confidentiality of client information.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $SEDZIOWIE = [
            [
                'id' => 10671,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rozpraw sądowych w sprawach cywilnych, karnych, administracyjnych oraz rodzinnych.',
                    'en' => 'Conducting court hearings in civil, criminal, administrative, and family matters.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10672,
                'name' => json_encode([
                    'pl' => 'Słuchanie stron, świadków i ekspertów w trakcie postępowania.',
                    'en' => 'Listening to parties, witnesses, and experts during proceedings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10673,
                'name' => json_encode([
                    'pl' => 'Orzekanie w sprawach i wydawanie decyzji sądowych.',
                    'en' => 'Adjudicating cases and issuing court decisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10674,
                'name' => json_encode([
                    'pl' => 'Sporządzanie pisemnych uzasadnień wyroków i postanowień.',
                    'en' => 'Drafting written justifications for judgments and rulings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10675,
                'name' => json_encode([
                    'pl' => 'Nadzorowanie przebiegu rozpraw i postępowań, w tym zapewnienie przestrzegania procedur sądowych.',
                    'en' => 'Supervising the course of hearings and proceedings, ensuring adherence to court procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10676,
                'name' => json_encode([
                    'pl' => 'Podejmowanie decyzji dotyczących procedur i dowodów.',
                    'en' => 'Making decisions regarding procedures and evidence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10677,
                'name' => json_encode([
                    'pl' => 'Dokonywanie oceny zgromadzonych dowodów i ich wartości dowodowej.',
                    'en' => 'Assessing the gathered evidence and its evidentiary value.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10678,
                'name' => json_encode([
                    'pl' => 'Uwzględnianie przepisów prawnych oraz wcześniejszych orzeczeń w podejmowanych decyzjach.',
                    'en' => 'Considering legal provisions and previous rulings in decision-making.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10679,
                'name' => json_encode([
                    'pl' => 'W niektórych przypadkach pełnienie roli mediatora, aby pomóc stronom osiągnąć ugodę.',
                    'en' => 'In some cases, acting as a mediator to help parties reach a settlement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10680,
                'name' => json_encode([
                    'pl' => 'Prowadzenie postępowań arbitrażowych, jeśli jest to właściwe.',
                    'en' => 'Conducting arbitration proceedings when appropriate.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10681,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w kursach, konferencjach oraz innych formach szkoleń w celu aktualizacji wiedzy prawniczej.',
                    'en' => 'Participating in courses, conferences, and other training forms to update legal knowledge.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10682,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi sędziami i specjalistami w zakresie wymiaru sprawiedliwości.',
                    'en' => 'Cooperating with other judges and specialists in the justice system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10683,
                'name' => json_encode([
                    'pl' => 'Zachowanie niezawisłości sędziowskiej i obiektywności w podejmowaniu decyzji.',
                    'en' => 'Maintaining judicial independence and objectivity in decision-making.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10684,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad etyki zawodowej oraz kodeksu postępowania sędziów.',
                    'en' => 'Adhering to professional ethics and the code of conduct for judges.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10685,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że wszyscy uczestnicy postępowania mają prawo do obrony i sprawiedliwego procesu.',
                    'en' => 'Ensuring that all participants in the proceedings have the right to defense and a fair trial.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10686,
                'name' => json_encode([
                    'pl' => 'Umożliwienie stronom prezentacji swoich argumentów i dowodów.',
                    'en' => 'Allowing parties to present their arguments and evidence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10687,
                'name' => json_encode([
                    'pl' => 'Pisanie i redagowanie orzeczeń, które muszą być jasne, zrozumiałe i zgodne z prawem.',
                    'en' => 'Writing and editing judgments that must be clear, understandable, and legally compliant.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10688,
                'name' => json_encode([
                    'pl' => 'Ustalanie uzasadnienia prawnego dla podjętych decyzji.',
                    'en' => 'Establishing the legal justification for the decisions made.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10689,
                'name' => json_encode([
                    'pl' => 'Nadzorowanie postępowań związanych z egzekucją orzeczeń sądowych.',
                    'en' => 'Supervising proceedings related to the enforcement of court rulings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10690,
                'name' => json_encode([
                    'pl' => 'Wydawanie decyzji w sprawach dotyczących wykonania wyroków.',
                    'en' => 'Issuing decisions on the enforcement of judgments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10691,
                'name' => json_encode([
                    'pl' => 'Udział w działaniach edukacyjnych mających na celu informowanie społeczeństwa o systemie prawnym i jego funkcjonowaniu.',
                    'en' => 'Participating in educational activities aimed at informing the public about the legal system and its functioning.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10692,
                'name' => json_encode([
                    'pl' => 'Współpraca z instytucjami oraz organizacjami promującymi dostęp do sprawiedliwości.',
                    'en' => 'Collaborating with institutions and organizations promoting access to justice.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10693,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi instytucjami wymiaru sprawiedliwości, takimi jak prokuratura, policja czy inne sądy.',
                    'en' => 'Cooperating with other justice institutions, such as the prosecutor’s office, police, or other courts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10694,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w posiedzeniach i konferencjach dotyczących wymiaru sprawiedliwości.',
                    'en' => 'Participating in meetings and conferences related to the justice system.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $RZECZNIK_PATENTOWY = [
            [
                'id' => 10695,
                'name' => json_encode([
                    'pl' => 'Udzielanie porad klientom dotyczących strategii ochrony wynalazków, wzorów użytkowych i znaków towarowych.',
                    'en' => 'Advising clients on strategies for protecting inventions, utility models, and trademarks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10696,
                'name' => json_encode([
                    'pl' => 'Analiza możliwości uzyskania ochrony patentowej dla innowacji.',
                    'en' => 'Analyzing the possibility of obtaining patent protection for innovations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10697,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentacji niezbędnej do złożenia zgłoszeń patentowych, wzorów użytkowych i znaków towarowych.',
                    'en' => 'Preparing documentation necessary for filing patent applications, utility models, and trademarks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10698,
                'name' => json_encode([
                    'pl' => 'Sporządzanie opisów wynalazków, rysunków i innych wymaganych załączników.',
                    'en' => 'Drafting descriptions of inventions, drawings, and other required attachments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10699,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie klientów przed urzędami patentowymi i sądami w sprawach dotyczących ochrony własności przemysłowej.',
                    'en' => 'Representing clients before patent offices and courts in matters related to industrial property protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10700,
                'name' => json_encode([
                    'pl' => 'Uczestniczenie w postępowaniach związanych z przyznawaniem patentów.',
                    'en' => 'Participating in proceedings related to the granting of patents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10701,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie wyszukiwań i analiz dotyczących stanu techniki w celu oceny nowości i wynalazczości zgłoszeń.',
                    'en' => 'Conducting searches and analyses regarding the state of the art to assess the novelty and inventiveness of applications.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10702,
                'name' => json_encode([
                    'pl' => 'Opracowywanie raportów dotyczących możliwości uzyskania patentów.',
                    'en' => 'Preparing reports on the possibilities of obtaining patents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10703,
                'name' => json_encode([
                    'pl' => 'Analiza potencjalnych naruszeń praw własności przemysłowej i udzielanie porad dotyczących strategii ich unikania.',
                    'en' => 'Analyzing potential infringements of industrial property rights and providing advice on strategies to avoid them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10704,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie ocen prawnych dotyczących ryzyka związane z korzystaniem z technologii.',
                    'en' => 'Preparing legal opinions regarding risks associated with the use of technology.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10705,
                'name' => json_encode([
                    'pl' => 'Pomoc w egzekwowaniu praw wynikających z przyznanych patentów i znaków towarowych.',
                    'en' => 'Assisting in enforcing rights arising from granted patents and trademarks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10706,
                'name' => json_encode([
                    'pl' => 'Udzielanie porad w zakresie postępowania w przypadku naruszeń praw własności przemysłowej.',
                    'en' => 'Providing advice on actions to take in the event of infringements of industrial property rights.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10707,
                'name' => json_encode([
                    'pl' => 'Uczestniczenie w negocjacjach dotyczących umów licencyjnych, cesji praw patentowych i innych umów związanych z własnością przemysłową.',
                    'en' => 'Participating in negotiations regarding licensing agreements, assignment of patent rights, and other agreements related to industrial property.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10708,
                'name' => json_encode([
                    'pl' => 'Sporządzanie projektów umów oraz zapewnianie zgodności z obowiązującymi przepisami prawa.',
                    'en' => 'Drafting contract templates and ensuring compliance with applicable laws.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10709,
                'name' => json_encode([
                    'pl' => 'Prowadzenie szkoleń oraz seminariów dla klientów i pracowników dotyczących ochrony własności przemysłowej.',
                    'en' => 'Conducting training and seminars for clients and employees on industrial property protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10710,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o zmianach w przepisach dotyczących ochrony patentowej.',
                    'en' => 'Informing clients about changes in regulations concerning patent protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10711,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi prawnikami, naukowcami, inżynierami i ekspertami w dziedzinie technologii.',
                    'en' => 'Collaborating with other lawyers, scientists, engineers, and technology experts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10712,
                'name' => json_encode([
                    'pl' => 'Udział w projektach badawczo-rozwojowych związanych z innowacjami.',
                    'en' => 'Participating in research and development projects related to innovations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10713,
                'name' => json_encode([
                    'pl' => 'Prowadzenie i archiwizacja dokumentacji związanej z zgłoszeniami patentowymi i znakami towarowymi.',
                    'en' => 'Maintaining and archiving documentation related to patent applications and trademarks.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10714,
                'name' => json_encode([
                    'pl' => 'Monitorowanie terminów związanych z utrzymywaniem ochrony patentowej.',
                    'en' => 'Monitoring deadlines related to maintaining patent protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10715,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów dotyczących stanu prawnego zgłoszeń oraz statusu ochrony własności przemysłowej.',
                    'en' => 'Preparing reports on the legal status of applications and the status of industrial property protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10716,
                'name' => json_encode([
                    'pl' => 'Ocena efektywności strategii ochrony własności przemysłowej klientów.',
                    'en' => 'Assessing the effectiveness of clients\' industrial property protection strategies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10717,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie klientów w sprawach dotyczących sporów patentowych przed sądami.',
                    'en' => 'Representing clients in patent disputes before courts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10718,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie materiałów dowodowych i argumentacji w postępowaniach sądowych.',
                    'en' => 'Preparing evidence materials and arguments in court proceedings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        $ASYSTENT_PRAWNY = [
            [
                'id' => 10719,
                'name' => json_encode([
                    'pl' => 'Pomoc w sporządzaniu pism procesowych, umów, regulaminów oraz innych dokumentów prawnych.',
                    'en' => 'Assisting in drafting legal documents such as pleadings, contracts, regulations, and other legal paperwork.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10720,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie projektów dokumentów na podstawie wytycznych prawników.',
                    'en' => 'Preparing drafts of documents based on lawyers\' instructions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10721,
                'name' => json_encode([
                    'pl' => 'Organizacja, archiwizacja i utrzymywanie porządku w dokumentacji kancelarii.',
                    'en' => 'Organizing, archiving, and maintaining order in the law firm’s documentation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10722,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie danych do systemów komputerowych i zarządzanie bazami danych.',
                    'en' => 'Entering data into computer systems and managing databases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10723,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie badań prawnych oraz gromadzenie informacji dotyczących przepisów, orzecznictwa i praktyki sądowej.',
                    'en' => 'Conducting legal research and gathering information on statutes, case law, and court practices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10724,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie materiałów informacyjnych dla prawników.',
                    'en' => 'Preparing informational materials for lawyers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10725,
                'name' => json_encode([
                    'pl' => 'Udzielanie podstawowych informacji klientom oraz umawianie spotkań.',
                    'en' => 'Providing basic information to clients and scheduling appointments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10726,
                'name' => json_encode([
                    'pl' => 'Przyjmowanie i kierowanie połączeń telefonicznych oraz korespondencji.',
                    'en' => 'Receiving and directing phone calls and correspondence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10727,
                'name' => json_encode([
                    'pl' => 'Pomoc w przygotowywaniu spraw do rozpraw sądowych, w tym gromadzenie dowodów i przygotowywanie teczek spraw.',
                    'en' => 'Assisting in preparing cases for court hearings, including gathering evidence and preparing case files.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10728,
                'name' => json_encode([
                    'pl' => 'Udział w rozprawach sądowych jako wsparcie dla prawników.',
                    'en' => 'Attending court hearings as support for lawyers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10729,
                'name' => json_encode([
                    'pl' => 'Prowadzenie kalendarza spotkań i terminów sądowych dla prawników.',
                    'en' => 'Maintaining a calendar of meetings and court dates for lawyers.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10730,
                'name' => json_encode([
                    'pl' => 'Przypominanie o ważnych datach i obowiązkach.',
                    'en' => 'Reminding of important dates and obligations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10731,
                'name' => json_encode([
                    'pl' => 'Wsparcie w negocjacjach z klientami lub stronami trzecimi.',
                    'en' => 'Assisting in negotiations with clients or third parties.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10732,
                'name' => json_encode([
                    'pl' => 'Udział w mediacjach, jeśli jest to wymagane.',
                    'en' => 'Participating in mediations if required.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10733,
                'name' => json_encode([
                    'pl' => 'Koordynowanie działań z innymi działami w kancelarii (np. działem finansowym, administracyjnym).',
                    'en' => 'Coordinating activities with other departments in the office (e.g., finance, administration).'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10734,
                'name' => json_encode([
                    'pl' => 'Udział w projektach zespołowych.',
                    'en' => 'Participating in team projects.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10735,
                'name' => json_encode([
                    'pl' => 'Uczestniczenie w szkoleniach oraz kursach w celu podnoszenia kwalifikacji prawniczych i administracyjnych.',
                    'en' => 'Participating in training and courses to enhance legal and administrative qualifications.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10736,
                'name' => json_encode([
                    'pl' => 'Śledzenie zmian w przepisach prawa oraz praktykach prawnych.',
                    'en' => 'Monitoring changes in legal regulations and practices.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10737,
                'name' => json_encode([
                    'pl' => 'Sporządzanie raportów dotyczących stanu spraw oraz działań kancelarii.',
                    'en' => 'Preparing reports on the status of cases and office activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10738,
                'name' => json_encode([
                    'pl' => 'Analiza wyników pracy oraz efektywności działań.',
                    'en' => 'Analyzing work results and the effectiveness of activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10739,
                'name' => json_encode([
                    'pl' => 'Zachowanie poufności informacji dotyczących klientów oraz spraw.',
                    'en' => 'Maintaining confidentiality of information regarding clients and cases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10740,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad etyki zawodowej i standardów kancelarii.',
                    'en' => 'Adhering to professional ethics and office standards.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10741,
                'name' => json_encode([
                    'pl' => 'Wykonywanie zadań administracyjnych, takich jak fakturowanie, rozliczanie kosztów oraz zamawianie materiałów biurowych.',
                    'en' => 'Performing administrative tasks such as invoicing, expense reporting, and ordering office supplies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10742,
                'name' => json_encode([
                    'pl' => 'Organizowanie wydarzeń, szkoleń oraz spotkań dla zespołu.',
                    'en' => 'Organizing events, training sessions, and meetings for the team.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $KOMORNIK_SĄDOWY = [
            [
                'id' => 10743,
                'name' => json_encode([
                    'pl' => 'Egzekwowanie należności pieniężnych wynikających z wyroków sądowych.',
                    'en' => 'Enforcing monetary claims arising from court judgments.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10744,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie w życie orzeczeń sądowych dotyczących różnych spraw cywilnych i gospodarczych.',
                    'en' => 'Implementing court decisions in various civil and commercial cases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10745,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie wywiadów mających na celu ustalenie majątku dłużników.',
                    'en' => 'Conducting interviews to establish the assets of debtors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10746,
                'name' => json_encode([
                    'pl' => 'Wykorzystywanie dostępnych baz danych do identyfikacji majątku.',
                    'en' => 'Utilizing available databases to identify assets.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10747,
                'name' => json_encode([
                    'pl' => 'Zajmowanie nieruchomości, ruchomości oraz innych aktywów dłużników w celu zaspokojenia wierzycieli.',
                    'en' => 'Seizing real estate, movable property, and other assets of debtors to satisfy creditors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10748,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie dokumentacji związanej z zajęciem mienia.',
                    'en' => 'Preparing documentation related to the seizure of property.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10749,
                'name' => json_encode([
                    'pl' => 'Organizowanie i przeprowadzanie licytacji zajętego mienia, zarówno ruchomości, jak i nieruchomości.',
                    'en' => 'Organizing and conducting auctions of seized property, both movable and immovable.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10750,
                'name' => json_encode([
                    'pl' => 'Sporządzanie protokołów z licytacji i przekazywanie środków finansowych wierzycielom.',
                    'en' => 'Preparing minutes of the auction and transferring funds to creditors.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10751,
                'name' => json_encode([
                    'pl' => 'Sporządzanie wniosków, pism procesowych i innych dokumentów niezbędnych do przeprowadzenia egzekucji.',
                    'en' => 'Drafting applications, pleadings, and other documents necessary for enforcement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10752,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie pełnej dokumentacji postępowań egzekucyjnych.',
                    'en' => 'Maintaining complete documentation of enforcement proceedings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10753,
                'name' => json_encode([
                    'pl' => 'Współpraca z sądami, policją, administracją publiczną oraz innymi organami w zakresie realizacji egzekucji.',
                    'en' => 'Cooperating with courts, police, public administration, and other authorities in the execution of enforcement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10754,
                'name' => json_encode([
                    'pl' => 'Udział w działaniach mających na celu zapewnienie efektywności postępowań egzekucyjnych.',
                    'en' => 'Participating in actions to ensure the effectiveness of enforcement proceedings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10755,
                'name' => json_encode([
                    'pl' => 'Informowanie wierzycieli i dłużników o przebiegu postępowania egzekucyjnego.',
                    'en' => 'Informing creditors and debtors about the course of enforcement proceedings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10756,
                'name' => json_encode([
                    'pl' => 'Odpowiadanie na pytania stron dotyczące przepisów prawa oraz procedur egzekucyjnych.',
                    'en' => 'Answering parties\' questions regarding legal regulations and enforcement procedures.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10757,
                'name' => json_encode([
                    'pl' => 'Uczestniczenie w mediacjach między wierzycielami a dłużnikami w celu osiągnięcia ugody.',
                    'en' => 'Participating in mediations between creditors and debtors to reach a settlement.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10758,
                'name' => json_encode([
                    'pl' => 'Pomoc w negocjacjach dotyczących spłaty zadłużenia.',
                    'en' => 'Assisting in negotiations regarding debt repayment.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10759,
                'name' => json_encode([
                    'pl' => 'Monitorowanie skuteczności prowadzonych postępowań egzekucyjnych.',
                    'en' => 'Monitoring the effectiveness of ongoing enforcement proceedings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10760,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie raportów dotyczących wyników pracy oraz efektywności działań.',
                    'en' => 'Preparing reports on work results and effectiveness of actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10761,
                'name' => json_encode([
                    'pl' => 'Uczestnictwo w szkoleniach oraz kursach w celu podnoszenia kwalifikacji i aktualizacji wiedzy z zakresu prawa.',
                    'en' => 'Participating in training and courses to enhance qualifications and update legal knowledge.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10762,
                'name' => json_encode([
                    'pl' => 'Śledzenie zmian w przepisach prawa dotyczących egzekucji i postępowania cywilnego.',
                    'en' => 'Monitoring changes in laws regarding enforcement and civil proceedings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10763,
                'name' => json_encode([
                    'pl' => 'Organizacja i zarządzanie własnym biurem komorniczym, w tym przydzielanie zadań pracownikom.',
                    'en' => 'Organizing and managing one\'s own bailiff office, including assigning tasks to employees.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10764,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie porządku w dokumentacji oraz przestrzeganie terminów.',
                    'en' => 'Maintaining order in documentation and adhering to deadlines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10765,
                'name' => json_encode([
                    'pl' => 'Działanie zgodnie z przepisami prawa oraz przestrzeganie zasad etyki zawodowej.',
                    'en' => 'Acting in accordance with the law and adhering to professional ethics.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10766,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że działania egzekucyjne są prowadzone w sposób fair i zgodny z prawem.',
                    'en' => 'Ensuring that enforcement actions are conducted fairly and in accordance with the law.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $NOTARIUSZ = [
            [
                'id' => 10767,
                'name' => json_encode([
                    'pl' => 'Tworzenie i poświadczanie dokumentów, takich jak umowy sprzedaży, darowizny, testamenty, umowy o dzieło i inne.',
                    'en' => 'Creating and certifying documents such as sales agreements, donations, wills, contracts for work, and others.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10768,
                'name' => json_encode([
                    'pl' => 'Zapewnienie, że akty notarialne są zgodne z obowiązującym prawem.',
                    'en' => 'Ensuring that notarial acts comply with applicable law.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10769,
                'name' => json_encode([
                    'pl' => 'Potwierdzanie autentyczności podpisów na dokumentach oraz poświadczenie ich treści.',
                    'en' => 'Certifying the authenticity of signatures on documents and certifying their content.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10770,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o skutkach prawnych poświadczenia.',
                    'en' => 'Providing information on the legal effects of certification.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10771,
                'name' => json_encode([
                    'pl' => 'Archiwizowanie akt notarialnych oraz przechowywanie dokumentów w bezpieczny sposób.',
                    'en' => 'Archiving notarial acts and securely storing documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10772,
                'name' => json_encode([
                    'pl' => 'Zapewnienie dostępu do dokumentów w przypadku ich potrzeb.',
                    'en' => 'Ensuring access to documents when needed.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10773,
                'name' => json_encode([
                    'pl' => 'Doradztwo w zakresie prawa cywilnego, spadkowego, handlowego i innych dziedzin prawa.',
                    'en' => 'Advising on civil, inheritance, commercial, and other areas of law.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10774,
                'name' => json_encode([
                    'pl' => 'Informowanie klientów o konsekwencjach prawnych podejmowanych decyzji.',
                    'en' => 'Informing clients about the legal consequences of their decisions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10775,
                'name' => json_encode([
                    'pl' => 'Opracowywanie protokołów z zebrań, posiedzeń oraz innych wydarzeń wymagających notarialnego poświadczenia.',
                    'en' => 'Preparing minutes from meetings, sessions, and other events requiring notarization.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10776,
                'name' => json_encode([
                    'pl' => 'Prowadzenie rejestru sporządzonych aktów notarialnych.',
                    'en' => 'Maintaining a register of notarized acts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10777,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie stron w postępowaniach dotyczących czynności notarialnych.',
                    'en' => 'Representing parties in proceedings concerning notarial acts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10778,
                'name' => json_encode([
                    'pl' => 'Udział w mediacjach oraz negocjacjach związanych z umowami.',
                    'en' => 'Participating in mediations and negotiations related to agreements.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10779,
                'name' => json_encode([
                    'pl' => 'Sprawdzanie tożsamości osób przystępujących do czynności notarialnych.',
                    'en' => 'Verifying the identity of individuals participating in notarial acts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10780,
                'name' => json_encode([
                    'pl' => 'Upewnienie się, że osoby działają dobrowolnie i są świadome skutków prawnych swoich działań.',
                    'en' => 'Ensuring that individuals act voluntarily and are aware of the legal consequences of their actions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10781,
                'name' => json_encode([
                    'pl' => 'Sporządzanie testamentów oraz udzielanie porad dotyczących planowania spadkowego.',
                    'en' => 'Drafting wills and providing advice on estate planning.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10782,
                'name' => json_encode([
                    'pl' => 'Przechowywanie testamentów oraz informowanie spadkobierców o ich istnieniu.',
                    'en' => 'Storing wills and informing heirs of their existence.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10783,
                'name' => json_encode([
                    'pl' => 'Współpraca z sądami, urzędami stanu cywilnego, bankami i innymi instytucjami w zakresie realizacji czynności notarialnych.',
                    'en' => 'Cooperating with courts, civil registry offices, banks, and other institutions in the execution of notarial acts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10784,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o obowiązkach związanych z czynnościami notarialnymi.',
                    'en' => 'Providing information on obligations related to notarial acts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10785,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o funkcji notariusza i dostępnych usługach.',
                    'en' => 'Providing information about the notary\'s function and available services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10786,
                'name' => json_encode([
                    'pl' => 'Organizowanie szkoleń i seminariów dla klientów oraz instytucji.',
                    'en' => 'Organizing training and seminars for clients and institutions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10787,
                'name' => json_encode([
                    'pl' => 'Przestrzeganie zasad etyki notarialnej i kodeksu postępowania.',
                    'en' => 'Adhering to the principles of notarial ethics and code of conduct.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10788,
                'name' => json_encode([
                    'pl' => 'Działanie w interesie klientów oraz zapewnienie uczciwości w wykonywaniu obowiązków.',
                    'en' => 'Acting in the interest of clients and ensuring integrity in the performance of duties.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10789,
                'name' => json_encode([
                    'pl' => 'Zarządzanie biurem notarialnym, w tym organizowanie pracy, planowanie spotkań oraz kontakt z klientami.',
                    'en' => 'Managing the notary office, including organizing work, scheduling meetings, and communicating with clients.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10790,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie dokumentacji dotyczącej działalności notarialnej.',
                    'en' => 'Maintaining documentation related to notarial activities.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $LEGISLATOR = [
            [
                'id' => 10791,
                'name' => json_encode([
                    'pl' => 'Opracowywanie projektów nowych ustaw oraz zmian w istniejących przepisach prawnych.',
                    'en' => 'Developing drafts of new laws and amendments to existing legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10792,
                'name' => json_encode([
                    'pl' => 'Konsultowanie projektów z ekspertami oraz interesariuszami.',
                    'en' => 'Consulting drafts with experts and stakeholders.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10793,
                'name' => json_encode([
                    'pl' => 'Dokonywanie analizy obowiązujących przepisów w celu identyfikacji potrzeb zmian lub nowelizacji.',
                    'en' => 'Analyzing current regulations to identify needs for amendments or updates.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10794,
                'name' => json_encode([
                    'pl' => 'Ocena skutków społecznych, ekonomicznych i prawnych proponowanych regulacji.',
                    'en' => 'Evaluating the social, economic, and legal impacts of proposed regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10795,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie badań dotyczących istniejących przepisów oraz ich zastosowania w praktyce.',
                    'en' => 'Conducting research on existing regulations and their practical application.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10796,
                'name' => json_encode([
                    'pl' => 'Analiza regulacji prawnych w innych krajach oraz ich wpływu na krajowe przepisy.',
                    'en' => 'Analyzing legal regulations in other countries and their impact on national legislation.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10797,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie kontaktów z organami administracji publicznej, sądami, uczelniami oraz organizacjami pozarządowymi.',
                    'en' => 'Maintaining contacts with public administration bodies, courts, universities, and non-governmental organizations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10798,
                'name' => json_encode([
                    'pl' => 'Koordynowanie działań z innymi legislatorami oraz grupami roboczymi.',
                    'en' => 'Coordinating actions with other legislators and working groups.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10799,
                'name' => json_encode([
                    'pl' => 'Udział w posiedzeniach komisji zajmujących się rozpatrywaniem projektów ustaw.',
                    'en' => 'Participating in committee meetings regarding the consideration of draft laws.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10800,
                'name' => json_encode([
                    'pl' => 'Przedstawianie analiz oraz rekomendacji dotyczących projektów prawnych.',
                    'en' => 'Presenting analyses and recommendations regarding legal drafts.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10801,
                'name' => json_encode([
                    'pl' => 'Opracowywanie uzasadnień dla projektów ustaw oraz przygotowywanie ekspertyz prawnych.',
                    'en' => 'Preparing justifications for draft laws and providing legal opinions.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10802,
                'name' => json_encode([
                    'pl' => 'Tworzenie dokumentacji wspierającej proces legislacyjny.',
                    'en' => 'Creating documentation to support the legislative process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10803,
                'name' => json_encode([
                    'pl' => 'Organizowanie konsultacji z obywatelami, organizacjami i innymi interesariuszami w celu zbierania opinii na temat projektów ustaw.',
                    'en' => 'Organizing consultations with citizens, organizations, and other stakeholders to gather opinions on draft laws.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10804,
                'name' => json_encode([
                    'pl' => 'Analizowanie uwag i rekomendacji zgłaszanych przez uczestników konsultacji.',
                    'en' => 'Analyzing comments and recommendations submitted by consultation participants.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10805,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji na temat nowych regulacji prawnych oraz ich zastosowania.',
                    'en' => 'Providing information about new legal regulations and their application.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10806,
                'name' => json_encode([
                    'pl' => 'Organizowanie seminariów, szkoleń oraz prezentacji dotyczących zmian w prawie.',
                    'en' => 'Organizing seminars, training, and presentations on changes in the law.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10807,
                'name' => json_encode([
                    'pl' => 'Śledzenie efektów wprowadzenia nowych regulacji oraz ich wpływu na społeczeństwo.',
                    'en' => 'Monitoring the effects of new regulations and their impact on society.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10808,
                'name' => json_encode([
                    'pl' => 'Udział w ocenie skuteczności przepisów prawnych.',
                    'en' => 'Participating in the assessment of the effectiveness of legal regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10809,
                'name' => json_encode([
                    'pl' => 'Reprezentowanie różnych grup interesów w procesie legislacyjnym.',
                    'en' => 'Representing different interest groups in the legislative process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10810,
                'name' => json_encode([
                    'pl' => 'Analiza i uwzględnianie różnych perspektyw w procesie tworzenia prawa.',
                    'en' => 'Analyzing and incorporating various perspectives in the law-making process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10811,
                'name' => json_encode([
                    'pl' => 'Planowanie i organizowanie prac nad projektami ustaw, w tym ustalanie harmonogramów.',
                    'en' => 'Planning and organizing work on draft laws, including setting schedules.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10812,
                'name' => json_encode([
                    'pl' => 'Koordynowanie działań zespołu pracującego nad projektami legislacyjnymi.',
                    'en' => 'Coordinating the activities of the team working on legislative projects.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10813,
                'name' => json_encode([
                    'pl' => 'Wprowadzanie poprawek do projektów ustaw w odpowiedzi na uwagi zgłaszane w trakcie procesu legislacyjnego.',
                    'en' => 'Introducing amendments to draft laws in response to comments made during the legislative process.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10814,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie ostatecznych wersji projektów ustaw przed ich głosowaniem.',
                    'en' => 'Preparing final versions of draft laws before voting.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];
        $REFERENDARZ_SĄDOWY = [
            [
                'id' => 10815,
                'name' => json_encode([
                    'pl' => 'Sporządzanie projektów wyroków, postanowień i zarządzeń na podstawie materiałów zgromadzonych w sprawie.',
                    'en' => 'Drafting judgments, rulings, and orders based on the materials collected in the case.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10816,
                'name' => json_encode([
                    'pl' => 'Weryfikacja treści projektów pod kątem zgodności z prawem i przepisami.',
                    'en' => 'Verifying the content of drafts for compliance with law and regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10817,
                'name' => json_encode([
                    'pl' => 'Dokonywanie analizy akt sprawy, w tym przeglądanie dokumentów, dowodów i pism procesowych.',
                    'en' => 'Analyzing case files, including reviewing documents, evidence, and pleadings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10818,
                'name' => json_encode([
                    'pl' => 'Ocenianie wartości dowodowej zgromadzonych materiałów.',
                    'en' => 'Evaluating the evidentiary value of the materials collected.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10819,
                'name' => json_encode([
                    'pl' => 'Opracowywanie opinii prawnych w sprawach wymagających szczegółowej analizy prawnej.',
                    'en' => 'Preparing legal opinions in cases requiring detailed legal analysis.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10820,
                'name' => json_encode([
                    'pl' => 'Konsultowanie się z sędziami w celu uzyskania dodatkowych informacji lub wytycznych.',
                    'en' => 'Consulting with judges to obtain additional information or guidelines.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10821,
                'name' => json_encode([
                    'pl' => 'Uczestniczenie w rozprawach sądowych jako pomoc dla sędziów, w tym protokołowanie przebiegu rozprawy.',
                    'en' => 'Participating in court hearings as support for judges, including recording the course of the hearing.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10822,
                'name' => json_encode([
                    'pl' => 'Zbieranie informacji na temat przebiegu postępowania.',
                    'en' => 'Collecting information about the course of proceedings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10823,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie porządku w dokumentacji sądowej oraz archiwizacja akt spraw.',
                    'en' => 'Maintaining order in court documentation and archiving case files.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10824,
                'name' => json_encode([
                    'pl' => 'Prowadzenie ewidencji spraw i dokumentów sądowych.',
                    'en' => 'Keeping records of court cases and documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10825,
                'name' => json_encode([
                    'pl' => 'Wykonywanie czynności administracyjnych związanych z prowadzeniem spraw sądowych.',
                    'en' => 'Performing administrative tasks related to managing court cases.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10826,
                'name' => json_encode([
                    'pl' => 'Przygotowywanie pism i wezwań dla stron postępowania.',
                    'en' => 'Preparing documents and summons for parties in the proceedings.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10827,
                'name' => json_encode([
                    'pl' => 'Współpraca z innymi instytucjami, takimi jak prokuratura, policja czy inne sądy.',
                    'en' => "Cooperating with other institutions, such as the prosecutor's office, police, or other courts."
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 10828,
        'name' => json_encode([
            'pl' => 'Udzielanie informacji na temat sprawy w celu zapewnienia efektywności postępowania.',
            'en' => 'Providing information about the case to ensure the efficiency of the proceedings.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 10829,
        'name' => json_encode([
            'pl' => 'Informowanie stron postępowania o stanie sprawy oraz przysługujących im prawach i obowiązkach.',
            'en' => 'Informing the parties about the status of the case and their rights and obligations.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 10830,
        'name' => json_encode([
            'pl' => 'Odpowiadanie na pytania dotyczące procedur sądowych.',
            'en' => 'Answering questions regarding court procedures.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 10831,
        'name' => json_encode([
            'pl' => 'Nadzorowanie terminów procesowych i pilnowanie, aby były one dotrzymywane.',
            'en' => 'Monitoring procedural deadlines and ensuring they are met.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 10832,
        'name' => json_encode([
            'pl' => 'Przypominanie sędziom o nadchodzących terminach i obowiązkach.',
            'en' => 'Reminding judges of upcoming deadlines and obligations.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 10833,
        'name' => json_encode([
            'pl' => 'Uczestniczenie w szkoleniach i kursach w celu podnoszenia kwalifikacji zawodowych.',
            'en' => 'Participating in training and courses to improve professional qualifications.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 10834,
        'name' => json_encode([
            'pl' => 'Śledzenie zmian w przepisach prawnych oraz praktyce sądowej.',
            'en' => 'Monitoring changes in legal regulations and court practices.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 10835,
        'name' => json_encode([
            'pl' => 'W niektórych przypadkach samodzielne prowadzenie postępowań uproszczonych, takich jak postępowania w sprawach o drobne roszczenia.',
            'en' => 'In some cases, independently conducting simplified proceedings, such as small claims cases.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 10836,
        'name' => json_encode([
            'pl' => 'Udział w przygotowywaniu spraw do rozpraw, w tym selekcjonowanie dokumentów i dowodów.',
            'en' => 'Participating in preparing cases for hearings, including selecting documents and evidence.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
    [
        'id' => 10837,
        'name' => json_encode([
            'pl' => 'Wspieranie sędziów w podejmowaniu decyzji na podstawie przygotowanych analiz.',
            'en' => 'Supporting judges in making decisions based on prepared analyses.'
        ]),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],
];
        $SPECJALISTA_DO_SPRAW_OCHRONY_WŁASNOŚCI_INTELEKTUALNEJ = [
            [
                'id' => 10838,
                'name' => json_encode([
                    'pl' => 'Udzielanie porad klientom w zakresie strategii ochrony własności intelektualnej.',
                    'en' => 'Providing clients with advice on intellectual property protection strategies.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10839,
                'name' => json_encode([
                    'pl' => 'Pomoc w identyfikacji przedmiotów, które mogą być chronione.',
                    'en' => 'Assisting in identifying items that may be protected.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10840,
                'name' => json_encode([
                    'pl' => 'Sporządzanie i składanie zgłoszeń patentowych, znaków towarowych, wzorów przemysłowych oraz praw autorskich.',
                    'en' => 'Preparing and filing patent applications, trademarks, industrial designs, and copyright registrations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10841,
                'name' => json_encode([
                    'pl' => 'Opracowywanie dokumentacji niezbędnej do uzyskania ochrony.',
                    'en' => 'Preparing documentation necessary for obtaining protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10842,
                'name' => json_encode([
                    'pl' => 'Przeprowadzanie wyszukiwań dotyczących stanu techniki i istniejących praw własności intelektualnej.',
                    'en' => 'Conducting searches related to the state of the art and existing intellectual property rights.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10843,
                'name' => json_encode([
                    'pl' => 'Analiza ryzyka naruszenia praw własności intelektualnej przez osoby trzecie.',
                    'en' => 'Analyzing the risk of intellectual property rights infringement by third parties.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10844,
                'name' => json_encode([
                    'pl' => 'Śledzenie naruszeń praw własności intelektualnej i podejmowanie działań w celu ich egzekwowania.',
                    'en' => 'Monitoring infringements of intellectual property rights and taking action to enforce them.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10845,
                'name' => json_encode([
                    'pl' => 'Udzielanie wsparcia w sprawach dotyczących naruszeń, w tym przygotowywanie odpowiednich dokumentów prawnych.',
                    'en' => 'Providing support in infringement cases, including preparing relevant legal documents.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10846,
                'name' => json_encode([
                    'pl' => 'Udział w negocjacjach dotyczących umów licencyjnych, cesji praw i innych umów związanych z własnością intelektualną.',
                    'en' => 'Participating in negotiations regarding licensing agreements, assignments of rights, and other agreements related to intellectual property.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10847,
                'name' => json_encode([
                    'pl' => 'Sporządzanie projektów umów oraz analizowanie warunków współpracy.',
                    'en' => 'Drafting contract proposals and analyzing cooperation terms.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10848,
                'name' => json_encode([
                    'pl' => 'Organizowanie szkoleń dla pracowników i klientów w zakresie ochrony własności intelektualnej.',
                    'en' => 'Organizing training for employees and clients on intellectual property protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10849,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji na temat obowiązujących przepisów i praktyk dotyczących ochrony IP.',
                    'en' => 'Providing information on applicable regulations and practices regarding IP protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10850,
                'name' => json_encode([
                    'pl' => 'Utrzymywanie i aktualizacja bazy danych dotyczącej posiadanych praw własności intelektualnej.',
                    'en' => 'Maintaining and updating the database of owned intellectual property rights.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10851,
                'name' => json_encode([
                    'pl' => 'Monitorowanie terminów związanych z odnawianiem ochrony prawnej.',
                    'en' => 'Monitoring deadlines related to the renewal of legal protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10852,
                'name' => json_encode([
                    'pl' => 'Współpraca z działami prawnymi, marketingowymi i rozwoju produktu w celu zapewnienia skutecznej ochrony IP.',
                    'en' => 'Cooperating with legal, marketing, and product development departments to ensure effective IP protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10853,
                'name' => json_encode([
                    'pl' => 'Udział w projektach dotyczących innowacji i wprowadzenia nowych produktów na rynek.',
                    'en' => 'Participating in projects related to innovation and the introduction of new products to the market.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10854,
                'name' => json_encode([
                    'pl' => 'Udział w postępowaniach sądowych i administracyjnych dotyczących własności intelektualnej.',
                    'en' => 'Participating in court and administrative proceedings regarding intellectual property.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10855,
                'name' => json_encode([
                    'pl' => 'Współpraca z prawnikami w zakresie przygotowywania strategii obrony praw.',
                    'en' => 'Cooperating with lawyers in developing defense strategies for rights.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10856,
                'name' => json_encode([
                    'pl' => 'Śledzenie zmian w przepisach dotyczących ochrony własności intelektualnej.',
                    'en' => 'Monitoring changes in regulations regarding intellectual property protection.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10857,
                'name' => json_encode([
                    'pl' => 'Opracowywanie raportów dotyczących wpływu zmian w przepisach na działalność organizacji.',
                    'en' => 'Preparing reports on the impact of regulatory changes on the organization\'s operations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10858,
                'name' => json_encode([
                    'pl' => 'Doradztwo w zakresie ochrony danych osobowych w kontekście praw własności intelektualnej.',
                    'en' => 'Advising on data protection in the context of intellectual property rights.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10859,
                'name' => json_encode([
                    'pl' => 'Udzielanie informacji o zgodności działań z przepisami o ochronie danych.',
                    'en' => 'Providing information on compliance of actions with data protection regulations.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10860,
                'name' => json_encode([
                    'pl' => 'Udzielanie pomocy prawnej osobom i organizacjom, które nie mają możliwości finansowych na skorzystanie z usług prawnych.',
                    'en' => 'Providing legal assistance to individuals and organizations that cannot afford legal services.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10861,
                'name' => json_encode([
                    'pl' => 'Promowanie świadomości na temat znaczenia ochrony własności intelektualnej w społeczeństwie.',
                    'en' => 'Promoting awareness of the importance of intellectual property protection in society.'
                ]),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ];

        //        8
        DB::table('detail_projects')->insert(array_merge(
            $ANALITYCY_FINANSOWI,
            $DORADCY_FINANSOWI_I_INWESTYCYJNI,
            $DEALERZY_I_MAKLERZY_AKTYWÓW_FINANSOWYCH,
            $PRACOWNICY_DO_SPRAW_KREDYTÓW_POŻYCZEK_I_POKREWNI,
            $biegly_rewident,
            $SPECJALISTA_DO_SPRAW_CONTROLLINGU,
            $SPECJALISTA_DO_SPRAW_RACHUNKOWOŚCI,
            $KONTROLER_FINANSOWY,
            $NEGOCJATOR_BIZNESOWY,
            $ANALITYK_BIZNESOWY,
            $SPECJALISTA_DO_SPRAW_ZARZĄDZANIA_RYZYKIEM,
            $PRACOWNICY_DO_SPRAW_RACHUNKOWOŚCI_I_KSIĘGOWOŚCI,
            $PRACOWNICY_OBSLUGI_PLACOWEJ,
            $KONTROLER_ROZLICZEŃ_PIENIĘŻNYCH,
            $SKARBNIK_BANKOWY,
            $KSIĘGOWI,
            $AGENCI_UBEZPIECZENIOWI,
            $PRACOWNIK_DO_SPRAW_UBEZPIECZEŃ,
            $LIKWIDATOR_SZKOÓD,
            $PRACOWNIK_DO_SPRAW_UBEZPIECZEŃ_MEDYCZNYCH,
            $DORADCA_DO_SPRAW_ODSZKODOWAŃ,
            $SAMODZIELNY_KSIĘGOWY,
            $EKONOMIŚCI,
            $TECHNIK_EKONOMISTA,
            $ADWOKAT,
            $PROKURATOR,
            $RADCA_PRAWNY,
            $SEDZIOWIE,
            $RZECZNIK_PATENTOWY,
            $ASYSTENT_PRAWNY,
            $KOMORNIK_SĄDOWY,
            $NOTARIUSZ,
            $LEGISLATOR,
            $REFERENDARZ_SĄDOWY,
            $SPECJALISTA_DO_SPRAW_OCHRONY_WŁASNOŚCI_INTELEKTUALNEJ
            ));

        Category::whereId('288')->first()->detailprojects()->attach(collect($ANALITYCY_FINANSOWI)->pluck('id')->toArray());
        Category::whereId('301')->first()->detailprojects()->attach(collect($DORADCY_FINANSOWI_I_INWESTYCYJNI)->pluck('id')->toArray());
        Category::whereId('309')->first()->detailprojects()->attach(collect($DEALERZY_I_MAKLERZY_AKTYWÓW_FINANSOWYCH)->pluck('id')->toArray());
        Category::whereId('316')->first()->detailprojects()->attach(collect($PRACOWNICY_DO_SPRAW_KREDYTÓW_POŻYCZEK_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('321')->first()->detailprojects()->attach(collect($biegly_rewident)->pluck('id')->toArray());
        Category::whereId('322')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_CONTROLLINGU)->pluck('id')->toArray());
        Category::whereId('323')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_RACHUNKOWOŚCI)->pluck('id')->toArray());
        Category::whereId('324')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_RACHUNKOWOŚCI)->pluck('id')->toArray());
        Category::whereId('325')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_RACHUNKOWOŚCI)->pluck('id')->toArray());
        Category::whereId('326')->first()->detailprojects()->attach(collect($KONTROLER_FINANSOWY)->pluck('id')->toArray());
        Category::whereId('328')->first()->detailprojects()->attach(collect($NEGOCJATOR_BIZNESOWY)->pluck('id')->toArray());
        Category::whereId('329')->first()->detailprojects()->attach(collect($ANALITYK_BIZNESOWY)->pluck('id')->toArray());
        Category::whereId('333')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_ZARZĄDZANIA_RYZYKIEM)->pluck('id')->toArray());
        Category::whereId('335')->first()->detailprojects()->attach(collect($PRACOWNICY_DO_SPRAW_RACHUNKOWOŚCI_I_KSIĘGOWOŚCI)->pluck('id')->toArray());
        Category::whereId('340')->first()->detailprojects()->attach(collect($PRACOWNICY_OBSLUGI_PLACOWEJ)->pluck('id')->toArray());
        Category::whereId('341')->first()->detailprojects()->attach(collect($KONTROLER_ROZLICZEŃ_PIENIĘŻNYCH)->pluck('id')->toArray());
        Category::whereId('342')->first()->detailprojects()->attach(collect($SKARBNIK_BANKOWY)->pluck('id')->toArray());
        Category::whereId('343')->first()->detailprojects()->attach(collect($KSIĘGOWI)->pluck('id')->toArray());
        Category::whereId('345')->first()->detailprojects()->attach(collect($AGENCI_UBEZPIECZENIOWI)->pluck('id')->toArray());
        Category::whereId('350')->first()->detailprojects()->attach(collect($PRACOWNIK_DO_SPRAW_UBEZPIECZEŃ)->pluck('id')->toArray());
        Category::whereId('351')->first()->detailprojects()->attach(collect($LIKWIDATOR_SZKOÓD)->pluck('id')->toArray());
        Category::whereId('352')->first()->detailprojects()->attach(collect($PRACOWNIK_DO_SPRAW_UBEZPIECZEŃ_MEDYCZNYCH)->pluck('id')->toArray());
        Category::whereId('353')->first()->detailprojects()->attach(collect($DORADCA_DO_SPRAW_ODSZKODOWAŃ)->pluck('id')->toArray());
        Category::whereId('355')->first()->detailprojects()->attach(collect($SAMODZIELNY_KSIĘGOWY)->pluck('id')->toArray());
        Category::whereId('356')->first()->detailprojects()->attach(collect($SAMODZIELNY_KSIĘGOWY)->pluck('id')->toArray());
        Category::whereId('357')->first()->detailprojects()->attach(collect($SAMODZIELNY_KSIĘGOWY)->pluck('id')->toArray());
        Category::whereId('358')->first()->detailprojects()->attach(collect($SAMODZIELNY_KSIĘGOWY)->pluck('id')->toArray());
        Category::whereId('360')->first()->detailprojects()->attach(collect($EKONOMIŚCI)->pluck('id')->toArray());
        Category::whereId('364')->first()->detailprojects()->attach(collect($TECHNIK_EKONOMISTA)->pluck('id')->toArray());
        Category::whereId('370')->first()->detailprojects()->attach(collect($ADWOKAT)->pluck('id')->toArray());
        Category::whereId('371')->first()->detailprojects()->attach(collect($PROKURATOR)->pluck('id')->toArray());
        Category::whereId('372')->first()->detailprojects()->attach(collect($RADCA_PRAWNY)->pluck('id')->toArray());
        Category::whereId('373')->first()->detailprojects()->attach(collect($SEDZIOWIE)->pluck('id')->toArray());
        Category::whereId('374')->first()->detailprojects()->attach(collect($RZECZNIK_PATENTOWY)->pluck('id')->toArray());
        Category::whereId('375')->first()->detailprojects()->attach(collect($ASYSTENT_PRAWNY)->pluck('id')->toArray());
        Category::whereId('378')->first()->detailprojects()->attach(collect($KOMORNIK_SĄDOWY)->pluck('id')->toArray());
        Category::whereId('379')->first()->detailprojects()->attach(collect($NOTARIUSZ)->pluck('id')->toArray());
        Category::whereId('380')->first()->detailprojects()->attach(collect($LEGISLATOR)->pluck('id')->toArray());
        Category::whereId('382')->first()->detailprojects()->attach(collect($REFERENDARZ_SĄDOWY)->pluck('id')->toArray());
        Category::whereId('383')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_OCHRONY_WŁASNOŚCI_INTELEKTUALNEJ)->pluck('id')->toArray());

    }
}
