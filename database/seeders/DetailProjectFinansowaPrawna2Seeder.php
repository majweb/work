<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DetailProjectFinansowaPrawna2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        $ANALITYK_GIEŁDOWY = [
            [
                'id' => 20785,
                "name" => json_encode([
                    "pl" => "Analiza danych finansowych i rynkowych w celu identyfikacji trendów.",
                    "en" => "Analyzing financial and market data to identify trends."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20786,
                "name" => json_encode([
                    "pl" => "Śledzenie zmian na giełdach papierów wartościowych i analizowanie ich wpływu na inwestycje.",
                    "en" => "Tracking stock exchange changes and analyzing their impact on investments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20787,
                "name" => json_encode([
                    "pl" => "Przygotowywanie prognoz rynkowych i rekomendacji inwestycyjnych.",
                    "en" => "Preparing market forecasts and investment recommendations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20788,
                "name" => json_encode([
                    "pl" => "Współpraca z maklerami i doradcami inwestycyjnymi.",
                    "en" => "Collaborating with brokers and investment advisors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20789,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów i analiz dla klientów oraz zarządów firm.",
                    "en" => "Creating reports and analyses for clients and company boards."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20790,
                "name" => json_encode([
                    "pl" => "Monitorowanie sytuacji gospodarczej i politycznej oraz jej wpływu na rynek.",
                    "en" => "Monitoring economic and political situations and their impact on the market."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20791,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii inwestycyjnych i ocena ryzyka.",
                    "en" => "Developing investment strategies and assessing risk."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20792,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz technicznych i fundamentalnych spółek giełdowych.",
                    "en" => "Conducting technical and fundamental analyses of listed companies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20793,
                "name" => json_encode([
                    "pl" => "Udział w konferencjach i spotkaniach dotyczących rynku kapitałowego.",
                    "en" => "Participating in conferences and meetings on the capital market."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ANALITYK_KREDYTOWY = [
            [
                'id' => 20794,
                "name" => json_encode([
                    "pl" => "Ocena zdolności kredytowej klientów indywidualnych i przedsiębiorstw.",
                    "en" => "Assessing the creditworthiness of individuals and businesses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20795,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analizy finansowej wniosków kredytowych.",
                    "en" => "Conducting financial analysis of credit applications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20796,
                "name" => json_encode([
                    "pl" => "Opracowywanie rekomendacji dotyczących przyznawania kredytów.",
                    "en" => "Preparing recommendations for granting loans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20797,
                "name" => json_encode([
                    "pl" => "Monitorowanie i kontrola spłat kredytów oraz identyfikacja ryzyka niewypłacalności.",
                    "en" => "Monitoring and controlling loan repayments and identifying insolvency risks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20798,
                "name" => json_encode([
                    "pl" => "Współpraca z działami sprzedaży i doradcami finansowymi.",
                    "en" => "Collaborating with sales departments and financial advisors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20799,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów dotyczących ryzyka kredytowego.",
                    "en" => "Preparing reports on credit risk."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20800,
                "name" => json_encode([
                    "pl" => "Analiza dokumentacji finansowej, np. bilansów, sprawozdań finansowych.",
                    "en" => "Analyzing financial documents such as balance sheets and financial statements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20801,
                "name" => json_encode([
                    "pl" => "Przestrzeganie regulacji bankowych i wewnętrznych procedur.",
                    "en" => "Adhering to banking regulations and internal procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20802,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach z zakresu analizy ryzyka kredytowego.",
                    "en" => "Participating in training on credit risk analysis."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PROJEKTANT_PAKIETÓW_USŁUG_FINANSOWYCH = [
            [
                'id' => 20803,
                "name" => json_encode([
                    "pl" => "Tworzenie i wdrażanie nowych produktów oraz pakietów usług finansowych.",
                    "en" => "Designing and implementing new financial products and service packages."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20804,
                "name" => json_encode([
                    "pl" => "Analiza potrzeb klientów i rynku w celu opracowania atrakcyjnych ofert.",
                    "en" => "Analyzing customer and market needs to develop attractive offers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20805,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami sprzedaży, marketingu i analityki.",
                    "en" => "Collaborating with sales, marketing, and analytics teams."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20806,
                "name" => json_encode([
                    "pl" => "Monitorowanie efektywności oferowanych produktów i wprowadzanie ulepszeń.",
                    "en" => "Monitoring product performance and implementing improvements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20807,
                "name" => json_encode([
                    "pl" => "Przygotowywanie strategii cenowej oraz polityki promocyjnej.",
                    "en" => "Developing pricing strategies and promotional policies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20808,
                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji dotyczącej nowych produktów finansowych.",
                    "en" => "Creating documentation for new financial products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20809,
                "name" => json_encode([
                    "pl" => "Współpraca z działem IT w celu implementacji nowych rozwiązań.",
                    "en" => "Collaborating with the IT department to implement new solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20810,
                "name" => json_encode([
                    "pl" => "Ocena konkurencyjności oferowanych usług finansowych.",
                    "en" => "Assessing the competitiveness of financial services offered."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20811,
                "name" => json_encode([
                    "pl" => "Organizowanie kampanii marketingowych i promujących nowe produkty.",
                    "en" => "Organizing marketing campaigns to promote new products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_BANKOWOŚCI = [
            [
                'id' => 20812,
                "name" => json_encode([
                    "pl" => "Doradzanie klientom w zakresie usług bankowych i produktów finansowych.",
                    "en" => "Advising clients on banking services and financial products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20813,
                "name" => json_encode([
                    "pl" => "Analiza sytuacji finansowej klientów i oferowanie im najlepszych rozwiązań.",
                    "en" => "Analyzing clients' financial situations and offering optimal solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20814,
                "name" => json_encode([
                    "pl" => "Zarządzanie portfelem klientów i budowanie długoterminowych relacji.",
                    "en" => "Managing client portfolios and building long-term relationships."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20815,
                "name" => json_encode([
                    "pl" => "Współpraca z działami sprzedaży i obsługi klienta.",
                    "en" => "Collaborating with sales and customer service departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20816,
                "name" => json_encode([
                    "pl" => "Monitorowanie rynku bankowego i identyfikowanie nowych możliwości.",
                    "en" => "Monitoring the banking market and identifying new opportunities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20817,
                "name" => json_encode([
                    "pl" => "Przestrzeganie regulacji i procedur obowiązujących w sektorze bankowym.",
                    "en" => "Adhering to regulations and procedures in the banking sector."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20818,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów dotyczących wyników sprzedaży produktów bankowych.",
                    "en" => "Preparing reports on the sales performance of banking products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20819,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów klientów i reagowanie na ich potrzeby.",
                    "en" => "Resolving customer issues and addressing their needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20820,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach dotyczących nowych produktów i usług bankowych.",
                    "en" => "Participating in training on new banking products and services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_FACTORINGU = [
            [
                'id' => 20821,
                "name" => json_encode([
                    "pl" => "Oferowanie klientom usług finansowych z zakresu faktoringu.",
                    "en" => "Offering financial services in factoring to clients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20822,
                "name" => json_encode([
                    "pl" => "Analiza dokumentów finansowych i ocena ryzyka transakcji faktoringowych.",
                    "en" => "Analyzing financial documents and assessing risks in factoring transactions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20823,
                "name" => json_encode([
                    "pl" => "Nawiązywanie i utrzymywanie relacji z klientami biznesowymi.",
                    "en" => "Establishing and maintaining relationships with business clients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20824,
                "name" => json_encode([
                    "pl" => "Przygotowywanie umów faktoringowych i monitorowanie ich realizacji.",
                    "en" => "Preparing factoring agreements and monitoring their execution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20825,
                "name" => json_encode([
                    "pl" => "Współpraca z działami sprzedaży i windykacji.",
                    "en" => "Collaborating with sales and debt collection departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20826,
                "name" => json_encode([
                    "pl" => "Monitorowanie rynku i identyfikowanie nowych możliwości biznesowych.",
                    "en" => "Monitoring the market and identifying new business opportunities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20827,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów i analiz dotyczących transakcji faktoringowych.",
                    "en" => "Preparing reports and analyses on factoring transactions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20828,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie optymalizacji finansowania dla klientów.",
                    "en" => "Providing advice on financing optimization for clients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20829,
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności operacji faktoringowych z przepisami prawa.",
                    "en" => "Ensuring compliance of factoring operations with legal regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ANALITYK_FINANSOWY = [
            [
                'id' => 20830,
                "name" => json_encode([
                    "pl" => "Analiza danych finansowych i opracowywanie raportów dla zarządu.",
                    "en" => "Analyzing financial data and preparing reports for management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20831,
                "name" => json_encode([
                    "pl" => "Monitorowanie i ocena wyników finansowych przedsiębiorstwa.",
                    "en" => "Monitoring and evaluating the company's financial performance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20832,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz rentowności, kosztów i przepływów pieniężnych.",
                    "en" => "Conducting profitability, cost, and cash flow analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20833,
                "name" => json_encode([
                    "pl" => "Przygotowywanie prognoz finansowych i planów budżetowych.",
                    "en" => "Preparing financial forecasts and budget plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20834,
                "name" => json_encode([
                    "pl" => "Współpraca z działami operacyjnymi w celu optymalizacji procesów finansowych.",
                    "en" => "Collaborating with operational departments to optimize financial processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20835,
                "name" => json_encode([
                    "pl" => "Identyfikowanie obszarów ryzyka finansowego i proponowanie działań zaradczych.",
                    "en" => "Identifying financial risk areas and proposing corrective actions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20836,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w opracowywaniu strategii finansowej firmy.",
                    "en" => "Participating in developing the company's financial strategy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20837,
                "name" => json_encode([
                    "pl" => "Tworzenie modeli finansowych i scenariuszy na potrzeby zarządu.",
                    "en" => "Creating financial models and scenarios for management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20838,
                "name" => json_encode([
                    "pl" => "Monitorowanie zmian rynkowych i ich wpływu na działalność firmy.",
                    "en" => "Monitoring market changes and their impact on the company's operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_UBEZPIECZEŃ_MAJĄTKOWYCH_I_OSOBOWYCH = [
            [
                'id' => 20839,
                "name" => json_encode([
                    "pl" => "Oferowanie klientom ubezpieczeń majątkowych i osobowych.",
                    "en" => "Providing clients with property and personal insurance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20840,
                "name" => json_encode([
                    "pl" => "Analiza potrzeb ubezpieczeniowych klientów i dobór odpowiednich polis.",
                    "en" => "Analyzing clients' insurance needs and selecting appropriate policies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20841,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie symulacji kosztów i korzyści ubezpieczenia.",
                    "en" => "Conducting simulations of insurance costs and benefits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20842,
                "name" => json_encode([
                    "pl" => "Przygotowywanie umów ubezpieczeniowych i nadzór nad ich realizacją.",
                    "en" => "Preparing insurance contracts and overseeing their execution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20843,
                "name" => json_encode([
                    "pl" => "Współpraca z firmami ubezpieczeniowymi i dostawcami usług.",
                    "en" => "Collaborating with insurance companies and service providers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20844,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów klientów związanych z ubezpieczeniami.",
                    "en" => "Resolving clients' issues related to insurance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20845,
                "name" => json_encode([
                    "pl" => "Prowadzenie negocjacji z klientami w sprawie warunków ubezpieczenia.",
                    "en" => "Negotiating insurance terms with clients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20846,
                "name" => json_encode([
                    "pl" => "Monitorowanie rynku ubezpieczeń i identyfikowanie nowych trendów.",
                    "en" => "Monitoring the insurance market and identifying new trends."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20847,
                "name" => json_encode([
                    "pl" => "Organizowanie kampanii promujących ubezpieczenia.",
                    "en" => "Organizing campaigns promoting insurance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_UBEZPIECZEŃ_SPOŁECZNYCH = [
            [
                'id' => 20848,
                "name" => json_encode([
                    "pl" => "Doradzanie klientom w zakresie ubezpieczeń społecznych, np. emerytalnych, zdrowotnych.",
                    "en" => "Advising clients on social insurance, e.g., retirement, health insurance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20849,
                "name" => json_encode([
                    "pl" => "Obliczanie i kontrolowanie składek na ubezpieczenia społeczne.",
                    "en" => "Calculating and monitoring social insurance contributions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20850,
                "name" => json_encode([
                    "pl" => "Monitorowanie zmian w przepisach dotyczących ubezpieczeń społecznych.",
                    "en" => "Monitoring changes in regulations concerning social insurance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20851,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji związanej z ubezpieczeniami społecznymi.",
                    "en" => "Preparing documentation related to social insurance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20852,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami państwowymi, np. ZUS.",
                    "en" => "Collaborating with government institutions, e.g., ZUS."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20853,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów klientów dotyczących ich ubezpieczeń społecznych.",
                    "en" => "Resolving clients' issues related to social insurance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20854,
                "name" => json_encode([
                    "pl" => "Organizowanie szkoleń na temat systemu ubezpieczeń społecznych.",
                    "en" => "Organizing training on the social insurance system."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20855,
                "name" => json_encode([
                    "pl" => "Weryfikacja prawidłowości danych dotyczących ubezpieczonych.",
                    "en" => "Verifying the accuracy of data related to insured individuals."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20856,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz związanych z systemem zabezpieczeń społecznych.",
                    "en" => "Conducting analyses related to the social security system."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_UBEZPIECZEŃ_ZDROWOTNYCH = [
            [
                'id' => 20857,
                "name" => json_encode([
                    "pl" => "Oferowanie i doradzanie w zakresie ubezpieczeń zdrowotnych.",
                    "en" => "Providing and advising on health insurance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20858,
                "name" => json_encode([
                    "pl" => "Analiza potrzeb klientów i przygotowywanie ofert ubezpieczeń zdrowotnych.",
                    "en" => "Analyzing clients' needs and preparing health insurance offers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20859,
                "name" => json_encode([
                    "pl" => "Monitorowanie rynku i proponowanie nowych rozwiązań ubezpieczeniowych.",
                    "en" => "Monitoring the market and proposing new insurance solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20860,
                "name" => json_encode([
                    "pl" => "Współpraca z placówkami medycznymi i firmami ubezpieczeniowymi.",
                    "en" => "Collaborating with medical facilities and insurance companies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20861,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji i obsługa procesów ubezpieczeniowych.",
                    "en" => "Preparing documentation and managing insurance processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20862,
                "name" => json_encode([
                    "pl" => "Organizowanie kampanii promocyjnych dotyczących ubezpieczeń zdrowotnych.",
                    "en" => "Organizing promotional campaigns for health insurance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20863,
                "name" => json_encode([
                    "pl" => "Pomoc klientom w zgłaszaniu roszczeń i rozwiązywanie ich problemów.",
                    "en" => "Assisting clients with claims and resolving their issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20864,
                "name" => json_encode([
                    "pl" => "Weryfikacja warunków umów i ich zgodności z obowiązującymi przepisami.",
                    "en" => "Verifying contract terms and their compliance with regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20865,
                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń i edukacja klientów w zakresie ubezpieczeń zdrowotnych.",
                    "en" => "Conducting training and educating clients on health insurance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_ANALIZY_RYZYKA_UBEZPIECZENIOWEGO = [
            [
                'id' => 20866,
                "name" => json_encode([
                    "pl" => "Ocena ryzyka związanego z zawieraniem umów ubezpieczeniowych.",
                    "en" => "Assessing risk associated with insurance contracts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20867,
                "name" => json_encode([
                    "pl" => "Analiza dokumentacji i historii klienta przed przyznaniem polisy.",
                    "en" => "Analyzing documentation and client history before issuing a policy."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20868,
                "name" => json_encode([
                    "pl" => "Opracowywanie warunków ubezpieczeń i ustalanie składek.",
                    "en" => "Developing insurance terms and determining premiums."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20869,
                "name" => json_encode([
                    "pl" => "Monitorowanie zmian w przepisach i trendów rynkowych wpływających na ryzyko.",
                    "en" => "Monitoring regulatory changes and market trends affecting risk."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20870,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów i analiz na potrzeby zarządu firmy ubezpieczeniowej.",
                    "en" => "Preparing reports and analyses for the insurance company's management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20871,
                "name" => json_encode([
                    "pl" => "Współpraca z agentami i brokerami ubezpieczeniowymi.",
                    "en" => "Collaborating with insurance agents and brokers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20872,
                "name" => json_encode([
                    "pl" => "Aktualizacja zasad i polityki oceny ryzyka w firmie.",
                    "en" => "Updating risk assessment policies and principles within the company."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20873,
                "name" => json_encode([
                    "pl" => "Udział w negocjacjach z klientami dotyczących warunków ubezpieczenia.",
                    "en" => "Participating in negotiations with clients about insurance terms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20874,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów związanych z niejasnościami w umowach.",
                    "en" => "Resolving issues related to ambiguities in contracts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ANALITYK_INWESTYCYJNY = [
            [
                'id' => 20875,
                "name" => json_encode([
                    "pl" => "Opracowywanie analiz inwestycyjnych i przygotowywanie rekomendacji.",
                    "en" => "Developing investment analyses and preparing recommendations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20876,
                "name" => json_encode([
                    "pl" => "Monitorowanie rynku kapitałowego i identyfikowanie okazji inwestycyjnych.",
                    "en" => "Monitoring the capital market and identifying investment opportunities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20877,
                "name" => json_encode([
                    "pl" => "Tworzenie modeli finansowych i prognoz dotyczących inwestycji.",
                    "en" => "Creating financial models and forecasts for investments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20878,
                "name" => json_encode([
                    "pl" => "Analiza ryzyka inwestycyjnego i proponowanie strategii jego minimalizacji.",
                    "en" => "Analyzing investment risk and proposing strategies to minimize it."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20879,
                "name" => json_encode([
                    "pl" => "Współpraca z menedżerami funduszy i innymi specjalistami finansowymi.",
                    "en" => "Collaborating with fund managers and other financial specialists."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20880,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów dla klientów oraz prezentowanie wyników analiz.",
                    "en" => "Preparing reports for clients and presenting analysis results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20881,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie due diligence dla projektów inwestycyjnych.",
                    "en" => "Conducting due diligence for investment projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20882,
                "name" => json_encode([
                    "pl" => "Udział w spotkaniach z inwestorami i prezentacja strategii inwestycyjnych.",
                    "en" => "Attending investor meetings and presenting investment strategies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20883,
                "name" => json_encode([
                    "pl" => "Śledzenie globalnych trendów gospodarczych i ich wpływu na inwestycje.",
                    "en" => "Tracking global economic trends and their impact on investments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_ANALITYCY_FINANSOWI = [
            [
                'id' => 20884,
                "name" => json_encode([
                    "pl" => "Analiza danych finansowych i wsparcie w podejmowaniu decyzji biznesowych.",
                    "en" => "Analyzing financial data and supporting business decision-making."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20885,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów i analiz na potrzeby różnych działów firmy.",
                    "en" => "Creating reports and analyses for various company departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20886,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz kosztów, rentowności i efektywności projektów.",
                    "en" => "Conducting cost, profitability, and project efficiency analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20887,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami zarządzającymi w celu optymalizacji procesów finansowych.",
                    "en" => "Collaborating with management teams to optimize financial processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20888,
                "name" => json_encode([
                    "pl" => "Identyfikowanie obszarów ryzyka i przygotowywanie planów zarządzania.",
                    "en" => "Identifying risk areas and preparing management plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20889,
                "name" => json_encode([
                    "pl" => "Monitorowanie rynku finansowego i dostosowywanie strategii firmy.",
                    "en" => "Monitoring the financial market and adjusting company strategies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20890,
                "name" => json_encode([
                    "pl" => "Wdrażanie narzędzi analitycznych i systemów raportowania.",
                    "en" => "Implementing analytical tools and reporting systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20891,
                "name" => json_encode([
                    "pl" => "Prowadzenie analiz porównawczych i benchmarkingowych.",
                    "en" => "Conducting comparative and benchmarking analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20892,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie planowania i prognozowania finansowego.",
                    "en" => "Providing advice on financial planning and forecasting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DORADCA_EMERYTALNY = [
            [
                'id' => 20893,
                "name" => json_encode([
                    "pl" => "Doradzanie klientom w zakresie planowania emerytalnego.",
                    "en" => "Advising clients on retirement planning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20894,
                "name" => json_encode([
                    "pl" => "Opracowywanie indywidualnych planów oszczędzania na emeryturę.",
                    "en" => "Developing individual retirement savings plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20895,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz finansowych w celu oceny potrzeb klientów.",
                    "en" => "Conducting financial analyses to assess clients' needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20896,
                "name" => json_encode([
                    "pl" => "Informowanie klientów o możliwościach inwestycyjnych i produktach emerytalnych.",
                    "en" => "Informing clients about investment opportunities and retirement products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20897,
                "name" => json_encode([
                    "pl" => "Monitorowanie zmian w przepisach dotyczących systemu emerytalnego.",
                    "en" => "Monitoring changes in regulations regarding the retirement system."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20898,
                "name" => json_encode([
                    "pl" => "Organizowanie szkoleń i seminariów na temat planowania emerytalnego.",
                    "en" => "Organizing training sessions and seminars on retirement planning."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20899,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami finansowymi i ubezpieczeniowymi.",
                    "en" => "Collaborating with financial and insurance institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20900,
                "name" => json_encode([
                    "pl" => "Pomoc w wyborze odpowiednich programów emerytalnych.",
                    "en" => "Assisting in choosing appropriate retirement programs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20901,
                "name" => json_encode([
                    "pl" => "Prowadzenie dokumentacji i archiwizacja danych klientów.",
                    "en" => "Maintaining documentation and archiving client data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DORADCA_FINANSOWY = [
            [
                'id' => 20902,
                "name" => json_encode([
                    "pl" => "Doradzanie klientom w zakresie zarządzania finansami osobistymi i inwestycjami.",
                    "en" => "Advising clients on personal finance management and investments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20903,
                "name" => json_encode([
                    "pl" => "Opracowywanie planów finansowych dostosowanych do potrzeb klientów.",
                    "en" => "Developing financial plans tailored to clients' needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20904,
                "name" => json_encode([
                    "pl" => "Analiza sytuacji finansowej klientów i rekomendowanie najlepszych rozwiązań.",
                    "en" => "Analyzing clients' financial situations and recommending optimal solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20905,
                "name" => json_encode([
                    "pl" => "Współpraca z bankami, funduszami inwestycyjnymi i firmami ubezpieczeniowymi.",
                    "en" => "Collaborating with banks, investment funds, and insurance companies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20906,
                "name" => json_encode([
                    "pl" => "Monitorowanie rynku finansowego i informowanie klientów o zmianach.",
                    "en" => "Monitoring the financial market and informing clients about changes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20907,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie symulacji inwestycyjnych i ocena ryzyka.",
                    "en" => "Conducting investment simulations and risk assessments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20908,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań z klientami i przedstawianie ofert finansowych.",
                    "en" => "Organizing client meetings and presenting financial offers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20909,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów i dokumentacji związanej z doradztwem finansowym.",
                    "en" => "Creating reports and documentation related to financial consulting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20910,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach i podnoszenie kwalifikacji zawodowych.",
                    "en" => "Participating in training and enhancing professional qualifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DORADCA_INWESTYCYJNY = [
            [
                'id' => 20911,
                "name" => json_encode([
                    "pl" => "Doradzanie klientom w zakresie inwestycji na rynku kapitałowym.",
                    "en" => "Advising clients on capital market investments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20912,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii inwestycyjnych i rekomendowanie produktów finansowych.",
                    "en" => "Developing investment strategies and recommending financial products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20913,
                "name" => json_encode([
                    "pl" => "Monitorowanie portfela inwestycyjnego klientów i wprowadzanie zmian.",
                    "en" => "Monitoring clients' investment portfolios and making adjustments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20914,
                "name" => json_encode([
                    "pl" => "Analiza rynku finansowego i identyfikowanie okazji inwestycyjnych.",
                    "en" => "Analyzing the financial market and identifying investment opportunities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20915,
                "name" => json_encode([
                    "pl" => "Współpraca z analitykami giełdowymi i zarządzającymi funduszami.",
                    "en" => "Collaborating with stock analysts and fund managers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20916,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań z klientami i omawianie wyników inwestycji.",
                    "en" => "Organizing client meetings and discussing investment results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20917,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz ryzyka i proponowanie działań zabezpieczających.",
                    "en" => "Conducting risk analyses and proposing protective measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20918,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji inwestycyjnej i umów.",
                    "en" => "Preparing investment documentation and agreements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20919,
                "name" => json_encode([
                    "pl" => "Udział w konferencjach i szkoleniach branżowych.",
                    "en" => "Participating in industry conferences and training."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DORADCA_PODATKOWY = [
            [
                'id' => 20920,
                "name" => json_encode([
                    "pl" => "Udzielanie porad dotyczących przepisów podatkowych i optymalizacji podatkowej.",
                    "en" => "Providing advice on tax regulations and tax optimization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20921,
                "name" => json_encode([
                    "pl" => "Przygotowywanie deklaracji podatkowych dla klientów indywidualnych i firm.",
                    "en" => "Preparing tax returns for individuals and companies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20922,
                "name" => json_encode([
                    "pl" => "Analiza sytuacji podatkowej klientów i opracowywanie strategii.",
                    "en" => "Analyzing clients' tax situations and developing strategies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20923,
                "name" => json_encode([
                    "pl" => "Reprezentowanie klientów przed urzędami skarbowymi i organami podatkowymi.",
                    "en" => "Representing clients before tax offices and authorities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20924,
                "name" => json_encode([
                    "pl" => "Monitorowanie zmian w przepisach podatkowych i informowanie klientów.",
                    "en" => "Monitoring tax law changes and informing clients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20925,
                "name" => json_encode([
                    "pl" => "Współpraca z księgowymi i prawnikami w sprawach podatkowych.",
                    "en" => "Collaborating with accountants and lawyers on tax matters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20926,
                "name" => json_encode([
                    "pl" => "Organizowanie szkoleń na temat prawa podatkowego.",
                    "en" => "Organizing training on tax law."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20927,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji podatkowej i archiwizacja danych.",
                    "en" => "Preparing tax documentation and archiving data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20928,
                "name" => json_encode([
                    "pl" => "Udział w konferencjach dotyczących prawa podatkowego.",
                    "en" => "Participating in tax law conferences."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DORADCA_DO_SPRAW_LEASINGU = [
            [
                'id' => 20929,
                "name" => json_encode([
                    "pl" => "Doradzanie klientom w zakresie finansowania poprzez leasing.",
                    "en" => "Advising clients on financing through leasing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20930,
                "name" => json_encode([
                    "pl" => "Analiza potrzeb klientów i dobór odpowiednich ofert leasingowych.",
                    "en" => "Analyzing client needs and selecting appropriate leasing offers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20931,
                "name" => json_encode([
                    "pl" => "Negocjowanie warunków umów leasingowych z klientami.",
                    "en" => "Negotiating leasing terms with clients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20932,
                "name" => json_encode([
                    "pl" => "Współpraca z firmami leasingowymi i bankami.",
                    "en" => "Collaborating with leasing companies and banks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20933,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji i wniosków leasingowych.",
                    "en" => "Preparing leasing documentation and applications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20934,
                "name" => json_encode([
                    "pl" => "Monitorowanie rynku i identyfikowanie nowych możliwości finansowania.",
                    "en" => "Monitoring the market and identifying new financing opportunities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20935,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie symulacji kosztów leasingu dla klientów.",
                    "en" => "Conducting leasing cost simulations for clients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20936,
                "name" => json_encode([
                    "pl" => "Utrzymywanie relacji z klientami i oferowanie im nowych rozwiązań.",
                    "en" => "Maintaining client relationships and offering new solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20937,
                "name" => json_encode([
                    "pl" => "Prowadzenie szkoleń i edukacja klientów na temat leasingu.",
                    "en" => "Conducting training and educating clients on leasing."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_TWORZENIA_BIZNESPLANÓW = [
            [
                'id' => 20938,
                "name" => json_encode([
                    "pl" => "Opracowywanie szczegółowych biznesplanów dla przedsiębiorstw i startupów.",
                    "en" => "Developing detailed business plans for enterprises and startups."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20939,
                "name" => json_encode([
                    "pl" => "Analiza rynku, konkurencji i możliwości finansowania projektów.",
                    "en" => "Analyzing the market, competition, and financing opportunities for projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20940,
                "name" => json_encode([
                    "pl" => "Tworzenie prognoz finansowych i planów strategicznych.",
                    "en" => "Creating financial forecasts and strategic plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20941,
                "name" => json_encode([
                    "pl" => "Współpraca z działami marketingu, sprzedaży i operacyjnymi.",
                    "en" => "Collaborating with marketing, sales, and operations departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20942,
                "name" => json_encode([
                    "pl" => "Prezentowanie biznesplanów przed inwestorami i instytucjami finansowymi.",
                    "en" => "Presenting business plans to investors and financial institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20943,
                "name" => json_encode([
                    "pl" => "Monitorowanie realizacji planów i wprowadzanie korekt.",
                    "en" => "Monitoring plan implementation and making adjustments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20944,
                "name" => json_encode([
                    "pl" => "Konsultacje z klientami w zakresie optymalizacji planów biznesowych.",
                    "en" => "Consulting with clients on optimizing business plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20945,
                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji i raportów związanych z projektami.",
                    "en" => "Creating documentation and reports related to projects."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20946,
                "name" => json_encode([
                    "pl" => "Udział w spotkaniach z potencjalnymi partnerami i inwestorami.",
                    "en" => "Participating in meetings with potential partners and investors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_DORADCY_FINANSOWI_I_INWESTYCYJNI = [
            [
                'id' => 20947,
                "name" => json_encode([
                    "pl" => "Doradzanie klientom w zakresie zarządzania finansami i inwestycjami.",
                    "en" => "Advising clients on financial management and investments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20948,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii finansowych i planów oszczędnościowych.",
                    "en" => "Developing financial strategies and savings plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20949,
                "name" => json_encode([
                    "pl" => "Analiza rynków finansowych i identyfikowanie najlepszych rozwiązań inwestycyjnych.",
                    "en" => "Analyzing financial markets and identifying the best investment solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20950,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami finansowymi i zarządzającymi aktywami.",
                    "en" => "Collaborating with financial institutions and asset managers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20951,
                "name" => json_encode([
                    "pl" => "Monitorowanie portfeli klientów i proponowanie zmian w strategiach.",
                    "en" => "Monitoring client portfolios and proposing strategy adjustments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20952,
                "name" => json_encode([
                    "pl" => "Organizowanie seminariów i szkoleń dotyczących inwestycji.",
                    "en" => "Organizing seminars and training on investments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20953,
                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji i raportów finansowych dla klientów.",
                    "en" => "Creating financial documentation and reports for clients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20954,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w spotkaniach branżowych i podnoszenie kwalifikacji zawodowych.",
                    "en" => "Attending industry meetings and enhancing professional qualifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20955,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów finansowych klientów.",
                    "en" => "Solving clients' financial issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $DEALER_AKTYWÓW_FINANSOWYCH = [
            [
                'id' => 20956,
                "name" => json_encode([
                    "pl" => "Zawieranie transakcji na rynku finansowym w imieniu klientów lub instytucji.",
                    "en" => "Conducting financial market transactions on behalf of clients or institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20957,
                "name" => json_encode([
                    "pl" => "Monitorowanie rynków finansowych i podejmowanie decyzji o zakupie lub sprzedaży aktywów.",
                    "en" => "Monitoring financial markets and making buy or sell decisions for assets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20958,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz technicznych i fundamentalnych.",
                    "en" => "Conducting technical and fundamental analyses."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20959,
                "name" => json_encode([
                    "pl" => "Współpraca z analitykami i doradcami inwestycyjnymi.",
                    "en" => "Collaborating with analysts and investment advisors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20960,
                "name" => json_encode([
                    "pl" => "Zarządzanie ryzykiem i opracowywanie strategii zabezpieczających.",
                    "en" => "Managing risk and developing hedging strategies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20961,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów z wyników transakcji i analiza ich efektywności.",
                    "en" => "Creating transaction result reports and analyzing their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20962,
                "name" => json_encode([
                    "pl" => "Utrzymywanie kontaktów z klientami i dostarczanie im informacji o rynku.",
                    "en" => "Maintaining client contacts and providing them with market information."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20963,
                "name" => json_encode([
                    "pl" => "Udział w spotkaniach i negocjacjach dotyczących transakcji finansowych.",
                    "en" => "Participating in meetings and negotiations related to financial transactions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20964,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy na temat regulacji i przepisów dotyczących rynku finansowego.",
                    "en" => "Updating knowledge of regulations and laws concerning the financial market."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $MAKLER_PAPIERÓW_WARTOŚCIOWYCH = [
            [
                'id' => 20965,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie transakcji kupna i sprzedaży papierów wartościowych na giełdzie.",
                    "en" => "Executing buy and sell transactions of securities on the stock exchange."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20966,
                "name" => json_encode([
                    "pl" => "Analiza rynków finansowych i doradzanie klientom w zakresie inwestycji.",
                    "en" => "Analyzing financial markets and advising clients on investments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20967,
                "name" => json_encode([
                    "pl" => "Współpraca z inwestorami indywidualnymi i instytucjonalnymi.",
                    "en" => "Collaborating with individual and institutional investors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20968,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów i rekomendacji inwestycyjnych.",
                    "en" => "Preparing reports and investment recommendations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20969,
                "name" => json_encode([
                    "pl" => "Monitorowanie sytuacji gospodarczej i jej wpływu na rynek papierów wartościowych.",
                    "en" => "Monitoring economic conditions and their impact on the securities market."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20970,
                "name" => json_encode([
                    "pl" => "Tworzenie strategii inwestycyjnych i ocena ryzyka.",
                    "en" => "Developing investment strategies and assessing risk."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20971,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów giełdowych i regulacji rynkowych.",
                    "en" => "Adhering to stock exchange regulations and market rules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20972,
                "name" => json_encode([
                    "pl" => "Uczestnictwo w szkoleniach i podnoszenie kwalifikacji zawodowych.",
                    "en" => "Participating in training and enhancing professional qualifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20973,
                "name" => json_encode([
                    "pl" => "Utrzymywanie relacji z klientami i budowanie bazy inwestorów.",
                    "en" => "Maintaining relationships with clients and building an investor base."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POŚREDNIK_FINANSOWY = [
            [
                'id' => 20974,
                "name" => json_encode([
                    "pl" => "Pomoc klientom w wyborze produktów finansowych, takich jak kredyty, pożyczki, ubezpieczenia.",
                    "en" => "Assisting clients in selecting financial products such as loans, credits, and insurance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20975,
                "name" => json_encode([
                    "pl" => "Analiza sytuacji finansowej klientów i proponowanie najlepszych rozwiązań.",
                    "en" => "Analyzing clients' financial situations and proposing the best solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20976,
                "name" => json_encode([
                    "pl" => "Negocjowanie warunków umów z instytucjami finansowymi.",
                    "en" => "Negotiating agreement terms with financial institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20977,
                "name" => json_encode([
                    "pl" => "Współpraca z bankami, firmami ubezpieczeniowymi i innymi instytucjami.",
                    "en" => "Collaborating with banks, insurance companies, and other institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20978,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji i wniosków kredytowych.",
                    "en" => "Preparing credit documentation and applications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20979,
                "name" => json_encode([
                    "pl" => "Monitorowanie rynku finansowego i aktualizowanie ofert dla klientów.",
                    "en" => "Monitoring the financial market and updating offers for clients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20980,
                "name" => json_encode([
                    "pl" => "Organizowanie spotkań z klientami i prezentowanie ofert.",
                    "en" => "Organizing client meetings and presenting offers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20981,
                "name" => json_encode([
                    "pl" => "Utrzymywanie relacji z klientami i obsługa posprzedażowa.",
                    "en" => "Maintaining client relationships and providing after-sales service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20982,
                "name" => json_encode([
                    "pl" => "Prowadzenie ewidencji i dokumentacji związanej z transakcjami.",
                    "en" => "Maintaining records and documentation related to transactions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_DO_SPRAW_PRODUKTÓW_FINANSOWYCH = [
            [
                'id' => 20983,
                "name" => json_encode([
                    "pl" => "Opracowywanie i zarządzanie ofertą produktów finansowych w instytucji.",
                    "en" => "Developing and managing the portfolio of financial products in the institution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20984,
                "name" => json_encode([
                    "pl" => "Współpraca z działami sprzedaży i marketingu w celu promocji produktów.",
                    "en" => "Collaborating with sales and marketing departments to promote products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20985,
                "name" => json_encode([
                    "pl" => "Monitorowanie rynku i identyfikowanie potrzeb klientów.",
                    "en" => "Monitoring the market and identifying customer needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20986,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji i materiałów informacyjnych o produktach.",
                    "en" => "Preparing documentation and informational materials about products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20987,
                "name" => json_encode([
                    "pl" => "Analiza konkurencji i wprowadzanie nowych rozwiązań produktowych.",
                    "en" => "Analyzing competitors and introducing new product solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20988,
                "name" => json_encode([
                    "pl" => "Udział w projektach związanych z rozwojem nowych usług finansowych.",
                    "en" => "Participating in projects related to developing new financial services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20989,
                "name" => json_encode([
                    "pl" => "Wsparcie zespołów sprzedaży w zakresie wiedzy o produktach.",
                    "en" => "Supporting sales teams with product knowledge."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20990,
                "name" => json_encode([
                    "pl" => "Tworzenie strategii cenowej i polityki promocyjnej.",
                    "en" => "Creating pricing strategies and promotional policies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20991,
                "name" => json_encode([
                    "pl" => "Kontrola zgodności produktów z regulacjami prawnymi.",
                    "en" => "Ensuring product compliance with legal regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_SCENTRALIZOWANYCH_SYSTEMÓW_ROZLICZENIOWYCH = [
            [
                'id' => 20992,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie operacji rozliczeniowych w scentralizowanych systemach finansowych.",
                    "en" => "Performing settlement operations in centralized financial systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20993,
                "name" => json_encode([
                    "pl" => "Monitorowanie i analiza przepływów finansowych w systemach.",
                    "en" => "Monitoring and analyzing financial flows in systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20994,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami finansowymi i dostawcami usług płatniczych.",
                    "en" => "Collaborating with financial institutions and payment service providers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20995,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów i dokumentacji dotyczącej rozliczeń.",
                    "en" => "Creating reports and documentation related to settlements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20996,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów technicznych i operacyjnych w systemach rozliczeniowych.",
                    "en" => "Resolving technical and operational issues in settlement systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20997,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa i polityki prywatności danych.",
                    "en" => "Adhering to security policies and data privacy regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20998,
                "name" => json_encode([
                    "pl" => "Wdrażanie usprawnień i nowych funkcjonalności w systemach.",
                    "en" => "Implementing improvements and new functionalities in systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 20999,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie testów systemów rozliczeniowych i raportowanie wyników.",
                    "en" => "Conducting settlement system tests and reporting results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21000,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami IT i finansowymi w celu optymalizacji procesów.",
                    "en" => "Collaborating with IT and finance teams to optimize processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_DEALERZY_I_MAKLERZY_AKTYWÓW_FINANSOWYCH = [
            [
                'id' => 21001,
                "name" => json_encode([
                    "pl" => "Zawieranie transakcji na różnych rynkach finansowych.",
                    "en" => "Conducting transactions on various financial markets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21002,
                "name" => json_encode([
                    "pl" => "Monitorowanie rynków i podejmowanie decyzji inwestycyjnych.",
                    "en" => "Monitoring markets and making investment decisions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21003,
                "name" => json_encode([
                    "pl" => "Analiza sytuacji gospodarczej i jej wpływu na transakcje finansowe.",
                    "en" => "Analyzing economic conditions and their impact on financial transactions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21004,
                "name" => json_encode([
                    "pl" => "Współpraca z klientami i doradzanie im w zakresie inwestycji.",
                    "en" => "Collaborating with clients and advising them on investments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21005,
                "name" => json_encode([
                    "pl" => "Zarządzanie ryzykiem finansowym i opracowywanie strategii zabezpieczających.",
                    "en" => "Managing financial risk and developing hedging strategies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21006,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów z wyników transakcji i analiza ich efektywności.",
                    "en" => "Creating transaction result reports and analyzing their efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21007,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów i regulacji dotyczących obrotu aktywami finansowymi.",
                    "en" => "Adhering to laws and regulations concerning financial asset trading."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21008,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy o produktach finansowych i rynkach.",
                    "en" => "Updating knowledge about financial products and markets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21009,
                "name" => json_encode([
                    "pl" => "Udział w negocjacjach i prezentacjach dotyczących ofert finansowych.",
                    "en" => "Participating in negotiations and presentations related to financial offers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_DO_SPRAW_KREDYTÓW = [
            [
                'id' => 21010,
                "name" => json_encode([
                    "pl" => "Obsługa klientów w zakresie udzielania kredytów.",
                    "en" => "Handling clients in the credit granting process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21011,
                "name" => json_encode([
                    "pl" => "Analiza zdolności kredytowej i ocena ryzyka kredytowego.",
                    "en" => "Analyzing creditworthiness and assessing credit risk."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21012,
                "name" => json_encode([
                    "pl" => "Przygotowywanie wniosków kredytowych i dokumentacji.",
                    "en" => "Preparing credit applications and documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21013,
                "name" => json_encode([
                    "pl" => "Współpraca z działami analizy ryzyka i windykacji.",
                    "en" => "Collaborating with risk analysis and debt collection departments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21014,
                "name" => json_encode([
                    "pl" => "Monitorowanie spłat kredytów i kontakt z klientami w przypadku opóźnień.",
                    "en" => "Monitoring credit repayments and contacting clients in case of delays."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21015,
                "name" => json_encode([
                    "pl" => "Informowanie klientów o warunkach kredytowych i doradzanie w wyborze produktów.",
                    "en" => "Informing clients about credit terms and advising them on product choices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21016,
                "name" => json_encode([
                    "pl" => "Przestrzeganie procedur i regulacji dotyczących udzielania kredytów.",
                    "en" => "Adhering to procedures and regulations concerning credit granting."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21017,
                "name" => json_encode([
                    "pl" => "Aktualizowanie ofert kredytowych i wprowadzanie nowych rozwiązań.",
                    "en" => "Updating credit offers and introducing new solutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21018,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów dotyczących portfela kredytowego.",
                    "en" => "Creating reports on the credit portfolio."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_DO_SPRAW_POŻYCZEK = [
            [
                'id' => 21019,
                "name" => json_encode([
                    "pl" => "Przyjmowanie wniosków o pożyczki i analiza zdolności kredytowej klientów.",
                    "en" => "Accepting loan applications and analyzing clients' creditworthiness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21020,
                "name" => json_encode([
                    "pl" => "Opracowywanie ofert pożyczkowych i informowanie klientów o warunkach.",
                    "en" => "Developing loan offers and informing clients about terms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21021,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie symulacji kosztów pożyczek i ocena ryzyka.",
                    "en" => "Conducting loan cost simulations and assessing risk."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21022,
                "name" => json_encode([
                    "pl" => "Monitorowanie spłat pożyczek i podejmowanie działań windykacyjnych w przypadku opóźnień.",
                    "en" => "Monitoring loan repayments and initiating debt collection actions in case of delays."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21023,
                "name" => json_encode([
                    "pl" => "Współpraca z działem prawnym i windykacji w celu odzyskania należności.",
                    "en" => "Collaborating with legal and debt collection departments to recover debts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21024,
                "name" => json_encode([
                    "pl" => "Utrzymywanie relacji z klientami i pomoc w rozwiązywaniu ich problemów.",
                    "en" => "Maintaining client relationships and assisting with their issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21025,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów dotyczących udzielania pożyczek.",
                    "en" => "Adhering to regulations concerning loan issuance."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21026,
                "name" => json_encode([
                    "pl" => "Aktualizowanie wiedzy o produktach pożyczkowych i rynku.",
                    "en" => "Updating knowledge about loan products and the market."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21027,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów dotyczących działalności pożyczkowej.",
                    "en" => "Creating reports on loan activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $PRACOWNIK_OBSŁUGI_KLIENTA_INSTYTUCJI_FINANSOWEJ = [
            [
                'id' => 21028,
                "name" => json_encode([
                    "pl" => "Udzielanie informacji klientom na temat produktów i usług finansowych.",
                    "en" => "Providing clients with information about financial products and services."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21029,
                "name" => json_encode([
                    "pl" => "Pomoc w wypełnianiu wniosków kredytowych, pożyczkowych i ubezpieczeniowych.",
                    "en" => "Assisting with completing credit, loan, and insurance applications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21030,
                "name" => json_encode([
                    "pl" => "Rozwiązywanie problemów klientów i obsługa reklamacji.",
                    "en" => "Resolving client issues and handling complaints."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21031,
                "name" => json_encode([
                    "pl" => "Obsługa transakcji finansowych, np. wpłat, wypłat, przelewów.",
                    "en" => "Handling financial transactions, e.g., deposits, withdrawals, transfers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21032,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi działami w celu zapewnienia kompleksowej obsługi klienta.",
                    "en" => "Collaborating with other departments to ensure comprehensive client service."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21033,
                "name" => json_encode([
                    "pl" => "Aktualizowanie danych klientów w systemach informatycznych.",
                    "en" => "Updating client data in IT systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21034,
                "name" => json_encode([
                    "pl" => "Przestrzeganie zasad bezpieczeństwa i ochrony danych osobowych.",
                    "en" => "Adhering to data security and privacy regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21035,
                "name" => json_encode([
                    "pl" => "Udział w szkoleniach dotyczących nowych produktów finansowych.",
                    "en" => "Participating in training on new financial products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21036,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów z obsługi klienta i analiza satysfakcji klientów.",
                    "en" => "Creating client service reports and analyzing client satisfaction."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_PRACOWNICY_DO_SPRAW_KREDYTÓW_POŻYCZEK_I_POKREWNI = [
            [
                'id' => 21037,
                "name" => json_encode([
                    "pl" => "Obsługa klientów w zakresie udzielania kredytów i pożyczek.",
                    "en" => "Handling clients in the granting of loans and credits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21038,
                "name" => json_encode([
                    "pl" => "Weryfikacja dokumentacji i ocena zdolności kredytowej.",
                    "en" => "Verifying documentation and assessing creditworthiness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21039,
                "name" => json_encode([
                    "pl" => "Informowanie klientów o warunkach umów i procedurach.",
                    "en" => "Informing clients about terms and procedures of agreements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21040,
                "name" => json_encode([
                    "pl" => "Monitorowanie spłat i podejmowanie działań w przypadku opóźnień.",
                    "en" => "Monitoring repayments and taking actions in case of delays."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21041,
                "name" => json_encode([
                    "pl" => "Współpraca z działem windykacji i prawnym w sprawach spornych.",
                    "en" => "Collaborating with debt collection and legal departments in dispute cases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21042,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów i dokumentacji związanej z działalnością kredytową.",
                    "en" => "Creating reports and documentation related to credit activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21043,
                "name" => json_encode([
                    "pl" => "Przestrzeganie przepisów i regulacji dotyczących produktów kredytowych.",
                    "en" => "Adhering to regulations concerning credit products."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21044,
                "name" => json_encode([
                    "pl" => "Udział w projektach mających na celu usprawnienie procesów obsługi kredytów.",
                    "en" => "Participating in projects aimed at improving credit handling processes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                'id' => 21045,
                "name" => json_encode([
                    "pl" => "Prowadzenie ewidencji klientów i transakcji.",
                    "en" => "Maintaining client and transaction records."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $WINDYKATOR = [
            [
                "id" => 21046,
                "name" => json_encode([
                    "pl" => "Nawiązywanie kontaktu z dłużnikami (telefonicznie, listownie, e-mailowo) w celu przypomnienia o zaległych płatnościach.",
                    "en" => "Contacting debtors (via phone, mail, email) to remind them of overdue payments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21047,
                "name" => json_encode([
                    "pl" => "Prowadzenie rozmów z dłużnikami w sposób profesjonalny i zgodny z przepisami, aby wypracować porozumienie i skłonić ich do spłaty zobowiązań.",
                    "en" => "Conducting professional and compliant conversations with debtors to reach an agreement and encourage debt repayment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21048,
                "name" => json_encode([
                    "pl" => "Wyjaśnianie przyczyn powstania zadłużenia oraz udzielanie informacji o możliwych konsekwencjach braku spłaty.",
                    "en" => "Explaining the reasons for debt accumulation and providing information about possible consequences of non-repayment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21049,
                "name" => json_encode([
                    "pl" => "Wypracowanie z dłużnikiem harmonogramu spłat, jeśli nie jest on w stanie uregulować pełnej kwoty zadłużenia jednorazowo.",
                    "en" => "Developing a repayment schedule with the debtor if they cannot pay the full amount at once."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21050,
                "name" => json_encode([
                    "pl" => "Opracowanie umów i planów ratalnych oraz monitorowanie ich realizacji.",
                    "en" => "Drafting installment agreements and plans and monitoring their implementation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21051,
                "name" => json_encode([
                    "pl" => "Negocjowanie ugód i częściowych spłat, jeśli jest to korzystne dla obu stron, aby zwiększyć szansę na odzyskanie przynajmniej części zadłużenia.",
                    "en" => "Negotiating settlements and partial payments to increase the chances of recovering at least part of the debt."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21052,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analizy sytuacji finansowej dłużnika, aby ocenić jego zdolność do spłaty zadłużenia.",
                    "en" => "Analyzing the debtor's financial situation to assess their repayment capacity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21053,
                "name" => json_encode([
                    "pl" => "Sprawdzanie historii kredytowej oraz monitorowanie zdolności płatniczej dłużników.",
                    "en" => "Checking credit history and monitoring debtors' payment capacity."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21054,
                "name" => json_encode([
                    "pl" => "Korzystanie z baz danych i raportów finansowych, aby uzyskać pełen obraz sytuacji majątkowej i zadłużeniowej dłużnika.",
                    "en" => "Using databases and financial reports to gain a full picture of the debtor's financial and asset situation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21055,
                "name" => json_encode([
                    "pl" => "Tworzenie i archiwizacja dokumentacji dotyczącej procesu windykacyjnego, w tym pism, wezwań do zapłaty, harmonogramów spłat, notatek z rozmów z dłużnikami.",
                    "en" => "Creating and archiving documentation related to the debt collection process, including letters, payment reminders, repayment schedules, and conversation notes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21056,
                "name" => json_encode([
                    "pl" => "Dokumentowanie przebiegu windykacji zgodnie z obowiązującymi standardami i przepisami prawnymi.",
                    "en" => "Documenting the debt collection process in accordance with current standards and legal regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21057,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentów potrzebnych do ewentualnego skierowania sprawy na drogę sądową.",
                    "en" => "Preparing documents needed for possible legal proceedings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21058,
                "name" => json_encode([
                    "pl" => "Ścisłe monitorowanie harmonogramów spłat, aby upewnić się, że dłużnicy przestrzegają ustalonych terminów.",
                    "en" => "Closely monitoring repayment schedules to ensure debtors meet the agreed deadlines."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21059,
                "name" => json_encode([
                    "pl" => "Przypominanie dłużnikom o nadchodzących terminach płatności oraz reagowanie na opóźnienia w spłatach.",
                    "en" => "Reminding debtors of upcoming payment deadlines and addressing delays."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21060,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie dodatkowych kontaktów z dłużnikami, jeśli następują opóźnienia lub brak płatności zgodnie z ustalonym harmonogramem.",
                    "en" => "Making additional contacts with debtors in case of delays or non-payment according to the agreed schedule."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21061,
                "name" => json_encode([
                    "pl" => "Współpraca z działem prawnym lub kancelariami prawnymi w przypadku braku możliwości odzyskania należności na etapie polubownym.",
                    "en" => "Collaborating with legal departments or law firms when debts cannot be recovered amicably."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21062,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji dla celów postępowania sądowego i egzekucyjnego.",
                    "en" => "Preparing documentation for court and enforcement proceedings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21063,
                "name" => json_encode([
                    "pl" => "Udzielanie informacji o procedurach prawnych i możliwych konsekwencjach dalszego zadłużania się dłużnikowi.",
                    "en" => "Providing debtors with information about legal procedures and possible consequences of further indebtedness."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21064,
                "name" => json_encode([
                    "pl" => "Składanie pozwów i uczestnictwo w postępowaniu sądowym, aby uzyskać wyrok lub nakaz zapłaty.",
                    "en" => "Filing lawsuits and participating in court proceedings to obtain judgments or payment orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21065,
                "name" => json_encode([
                    "pl" => "Współpraca z komornikami przy procesie egzekucji komorniczej, mającej na celu odzyskanie długu poprzez zajęcie majątku lub wynagrodzenia dłużnika.",
                    "en" => "Collaborating with bailiffs in the enforcement process to recover debts through asset or wage seizure."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21066,
                "name" => json_encode([
                    "pl" => "Nadzorowanie procesu egzekucji komorniczej oraz monitorowanie postępów w odzyskiwaniu należności.",
                    "en" => "Supervising the bailiff enforcement process and monitoring progress in recovering debts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21067,
                "name" => json_encode([
                    "pl" => "Regularne sporządzanie raportów dotyczących przebiegu i skuteczności działań windykacyjnych.",
                    "en" => "Regularly preparing reports on the progress and effectiveness of debt collection activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21068,
                "name" => json_encode([
                    "pl" => "Przekazywanie informacji o odzyskanych środkach oraz o dłużnikach, z którymi nie udało się zawrzeć ugody.",
                    "en" => "Providing information on recovered funds and debtors with whom settlements could not be reached."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21069,
                "name" => json_encode([
                    "pl" => "Raportowanie wskaźników efektywności, takich jak liczba odzyskanych należności, czas trwania procesu windykacyjnego czy wskaźnik skuteczności.",
                    "en" => "Reporting performance indicators, such as the number of recovered debts, the duration of the debt collection process, or the success rate."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21070,
                "name" => json_encode([
                    "pl" => "W przypadku trudności w nawiązaniu kontaktu z dłużnikiem, podejmowanie działań w celu jego zlokalizowania.",
                    "en" => "Taking actions to locate debtors in case of difficulties in establishing contact."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21071,
                "name" => json_encode([
                    "pl" => "Ustalanie aktualnych danych kontaktowych dłużnika oraz jego miejsca zamieszkania lub zatrudnienia.",
                    "en" => "Determining the debtor's current contact details and place of residence or employment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21072,
                "name" => json_encode([
                    "pl" => "Utrzymywanie profesjonalnych relacji z dłużnikami, zachowując etyczne i zgodne z prawem podejście w celu skłonienia ich do spłaty długu.",
                    "en" => "Maintaining professional relationships with debtors, adhering to ethical and legal standards to encourage debt repayment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21073,
                "name" => json_encode([
                    "pl" => "Wspieranie dłużników w podejmowaniu decyzji o spłacie poprzez wyjaśnianie możliwości rozłożenia płatności.",
                    "en" => "Supporting debtors in making repayment decisions by explaining payment installment options."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21074,
                "name" => json_encode([
                    "pl" => "Budowanie zaufania i stwarzanie warunków sprzyjających polubownemu rozwiązywaniu kwestii zadłużenia.",
                    "en" => "Building trust and creating conditions conducive to amicable debt resolution."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21075,
                "name" => json_encode([
                    "pl" => "Współpraca z działami finansowymi, księgowości i prawnymi w celu uzyskania wszelkich potrzebnych informacji na temat dłużnika.",
                    "en" => "Collaborating with finance, accounting, and legal departments to obtain all necessary information about the debtor."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21076,
                "name" => json_encode([
                    "pl" => "Udzielanie informacji innym działom firmy dotyczących historii płatności klientów oraz stanu ich zadłużenia.",
                    "en" => "Providing other departments with information about clients' payment history and debt status."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21077,
                "name" => json_encode([
                    "pl" => "Przekazywanie istotnych informacji i zaleceń dotyczących polityki kredytowej firmy w oparciu o doświadczenia z procesów windykacyjnych.",
                    "en" => "Sharing key insights and recommendations on the company's credit policy based on debt collection experience."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21078,
                "name" => json_encode([
                    "pl" => "Działanie zgodnie z obowiązującym prawem, w tym przepisami dotyczącymi ochrony danych osobowych oraz ustawą o ochronie konsumentów.",
                    "en" => "Operating in compliance with applicable laws, including data protection regulations and consumer protection laws."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21079,
                "name" => json_encode([
                    "pl" => "Przestrzeganie etyki zawodowej w kontaktach z dłużnikami, unikanie nacisków lub zastraszania.",
                    "en" => "Adhering to professional ethics in dealings with debtors, avoiding pressure or intimidation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21080,
                "name" => json_encode([
                    "pl" => "Regularne szkolenie z zakresu prawa windykacyjnego, ochrony danych osobowych i procedur postępowania z dłużnikami.",
                    "en" => "Regular training on debt collection law, data protection, and debtor handling procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21081,
                "name" => json_encode([
                    "pl" => "Analiza dotychczasowych działań windykacyjnych w celu identyfikacji obszarów wymagających poprawy.",
                    "en" => "Analyzing past debt collection activities to identify areas for improvement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21082,
                "name" => json_encode([
                    "pl" => "Wdrażanie nowych narzędzi, metod oraz procedur, które pozwolą na skuteczniejsze i szybsze odzyskiwanie należności.",
                    "en" => "Implementing new tools, methods, and procedures to improve the efficiency and speed of debt recovery."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21083,
                "name" => json_encode([
                    "pl" => "Przeciwdziałanie powstawaniu zaległości płatniczych, poprzez rekomendowanie usprawnień w procedurach zarządzania należnościami.",
                    "en" => "Preventing payment delays by recommending improvements in receivables management procedures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_WINDYKATORZY_I_POKREWNI = [
            [
                "id" => 21084,
                "name" => json_encode([
                    "pl" => "Odwiedzanie dłużników bezpośrednio w ich miejscach zamieszkania lub pracy w celu omówienia warunków spłaty zadłużenia.",
                    "en" => "Visiting debtors directly at their residence or workplace to discuss repayment terms."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21085,
                "name" => json_encode([
                    "pl" => "Ocena sytuacji majątkowej.",
                    "en" => "Assessing financial situations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21086,
                "name" => json_encode([
                    "pl" => "Przekonywanie dłużników do dobrowolnej spłaty zaległości i rozłożenia zobowiązań na raty.",
                    "en" => "Persuading debtors to voluntarily repay debts and agree on installment plans."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21087,
                "name" => json_encode([
                    "pl" => "Raportowanie działań terenowych.",
                    "en" => "Reporting on field activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21088,
                "name" => json_encode([
                    "pl" => "Prowadzenie rozmów telefonicznych z dłużnikami.",
                    "en" => "Conducting phone conversations with debtors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21089,
                "name" => json_encode([
                    "pl" => "Zapisywanie przebiegu rozmów i ustaleń z dłużnikiem, co umożliwia dalsze monitorowanie jego zobowiązań.",
                    "en" => "Recording conversations and agreements with debtors to enable further monitoring of their obligations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21090,
                "name" => json_encode([
                    "pl" => "Negocjowanie harmonogramów spłat.",
                    "en" => "Negotiating repayment schedules."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21091,
                "name" => json_encode([
                    "pl" => "Regularne przypominanie dłużnikom o terminach płatności, szczególnie w przypadku opóźnień.",
                    "en" => "Regularly reminding debtors of payment deadlines, especially in case of delays."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21092,
                "name" => json_encode([
                    "pl" => "Projektowanie indywidualnych strategii windykacji, które maksymalizują szansę na dobrowolne uregulowanie zobowiązań.",
                    "en" => "Designing individual debt recovery strategies to maximize the likelihood of voluntary debt settlement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21093,
                "name" => json_encode([
                    "pl" => "Śledzenie skuteczności działań windykacyjnych i ocena, które metody przynoszą najlepsze rezultaty.",
                    "en" => "Tracking the effectiveness of debt collection actions and assessing which methods yield the best results."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21094,
                "name" => json_encode([
                    "pl" => "Przekazywanie spraw do działu prawnego w przypadku braku możliwości rozwiązania ich w sposób polubowny.",
                    "en" => "Referring cases to the legal department when amicable solutions are not possible."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21095,
                "name" => json_encode([
                    "pl" => "Utrzymywanie profesjonalnych, ale życzliwych relacji, aby zmotywować dłużników do dobrowolnej spłaty.",
                    "en" => "Maintaining professional yet cordial relationships to motivate debtors to repay voluntarily."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21096,
                "name" => json_encode([
                    "pl" => "Sporządzanie i kompletowanie dokumentacji koniecznej do rozpoczęcia egzekucji komorniczej.",
                    "en" => "Preparing and completing documentation required to initiate enforcement proceedings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21097,
                "name" => json_encode([
                    "pl" => "Współpraca z komornikami w zakresie monitorowania postępów i udzielania dodatkowych informacji niezbędnych do skutecznej egzekucji.",
                    "en" => "Collaborating with bailiffs to monitor progress and provide additional information necessary for effective enforcement."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21098,
                "name" => json_encode([
                    "pl" => "Sprawdzanie, na jakim etapie znajduje się proces egzekucyjny i raportowanie jego statusu.",
                    "en" => "Checking the stage of the enforcement process and reporting its status."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21099,
                "name" => json_encode([
                    "pl" => "Monitorowanie procesu licytacyjnego w sytuacjach, gdy zajęto majątek dłużnika, i kontrola nad przekazywaniem uzyskanych środków na pokrycie zadłużenia.",
                    "en" => "Monitoring the auction process when debtor's assets are seized and ensuring the funds are allocated to cover the debt."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21100,
                "name" => json_encode([
                    "pl" => "Analiza zdolności kredytowej potencjalnych klientów, aby określić poziom ryzyka i zapobiec przyszłym problemom windykacyjnym.",
                    "en" => "Analyzing the creditworthiness of potential clients to assess risk and prevent future debt collection issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21101,
                "name" => json_encode([
                    "pl" => "Regularna analiza należności, aby identyfikować klientów o podwyższonym ryzyku opóźnień w spłacie.",
                    "en" => "Regularly analyzing receivables to identify clients with increased risk of payment delays."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21102,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów o zagrożeniach dla działu windykacji oraz rekomendowanie działań prewencyjnych.",
                    "en" => "Creating risk reports for the debt collection department and recommending preventive measures."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21103,
                "name" => json_encode([
                    "pl" => "Wskazywanie obszarów, które można usprawnić w procesie windykacji na podstawie danych analitycznych.",
                    "en" => "Identifying areas for improvement in the debt collection process based on analytical data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21104,
                "name" => json_encode([
                    "pl" => "Kontaktowanie się z dłużnikami za granicą w celu odzyskania należności.",
                    "en" => "Contacting debtors abroad to recover outstanding debts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21105,
                "name" => json_encode([
                    "pl" => "Współpraca z międzynarodowymi kancelariami prawnymi i agencjami windykacyjnymi.",
                    "en" => "Collaborating with international law firms and debt collection agencies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21106,
                "name" => json_encode([
                    "pl" => "Dostosowywanie działań windykacyjnych do specyfiki prawnej i kulturowej kraju, w którym przebywa dłużnik.",
                    "en" => "Adapting debt collection activities to the legal and cultural specifics of the debtor's country."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21107,
                "name" => json_encode([
                    "pl" => "Opracowanie niezbędnej dokumentacji, uwzględniając wymogi prawa międzynarodowego i krajowego.",
                    "en" => "Preparing necessary documentation in compliance with international and local laws."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21108,
                "name" => json_encode([
                    "pl" => "Praca z klientami korporacyjnymi w celu odzyskania zaległości od firm i instytucji.",
                    "en" => "Working with corporate clients to recover outstanding debts from companies and institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21109,
                "name" => json_encode([
                    "pl" => "Ustalanie harmonogramów spłat i negocjowanie warunków dostosowanych do możliwości finansowych dłużnika korporacyjnego.",
                    "en" => "Setting repayment schedules and negotiating terms tailored to the financial capabilities of corporate debtors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21110,
                "name" => json_encode([
                    "pl" => "Tworzenie ugód i kontraktów dostosowanych do specyfiki i potrzeb podmiotów biznesowych.",
                    "en" => "Drafting settlements and contracts customized to the specifics and needs of business entities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21111,
                "name" => json_encode([
                    "pl" => "Regularna analiza kondycji finansowej firm-klientów, aby szybko reagować na potencjalne problemy z wypłacalnością.",
                    "en" => "Regularly analyzing the financial condition of client companies to respond quickly to potential solvency issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21112,
                "name" => json_encode([
                    "pl" => "Określanie strategii zabezpieczeń, takich jak hipoteki, zastawy czy poręczenia, aby ograniczyć ryzyko strat.",
                    "en" => "Defining security strategies such as mortgages, pledges, or guarantees to mitigate risk."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21113,
                "name" => json_encode([
                    "pl" => "Śledzenie wartości zabezpieczeń, aby były one aktualne i pokrywały wartość zadłużenia.",
                    "en" => "Monitoring the value of securities to ensure they are up-to-date and cover the debt."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21114,
                "name" => json_encode([
                    "pl" => "Współpraca z klientami w celu negocjowania warunków, na których ustanawiane są zabezpieczenia wierzytelności.",
                    "en" => "Collaborating with clients to negotiate terms for establishing debt securities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21115,
                "name" => json_encode([
                    "pl" => "W sytuacjach niespłaconych zobowiązań inicjowanie procesu przejęcia zabezpieczeń, np. sprzedaży zajętych nieruchomości lub mienia ruchomego.",
                    "en" => "Initiating the process of seizing securities, such as selling foreclosed real estate or movable property, in cases of unpaid debts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21116,
                "name" => json_encode([
                    "pl" => "Zarządzanie pracą zespołów windykacyjnych, monitorowanie postępów i rozwiązywanie problemów.",
                    "en" => "Managing the work of debt collection teams, monitoring progress, and resolving issues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21117,
                "name" => json_encode([
                    "pl" => "Tworzenie długoterminowych strategii odzyskiwania należności oraz ustalanie KPI i celów dla zespołu.",
                    "en" => "Developing long-term debt recovery strategies and setting KPIs and goals for the team."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21118,
                "name" => json_encode([
                    "pl" => "Kontrola kosztów działań windykacyjnych i alokacja zasobów finansowych na poszczególne działania.",
                    "en" => "Controlling debt collection costs and allocating financial resources to specific activities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21119,
                "name" => json_encode([
                    "pl" => "Regularne przeglądy skuteczności procesów windykacyjnych i wdrażanie ulepszeń.",
                    "en" => "Regularly reviewing the effectiveness of debt collection processes and implementing improvements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21120,
                "name" => json_encode([
                    "pl" => "Przegląd terminów płatności faktur i innych należności w celu wczesnego wykrywania opóźnień.",
                    "en" => "Reviewing invoice payment deadlines and other receivables to detect delays early."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21121,
                "name" => json_encode([
                    "pl" => "Informowanie klientów o nadchodzących terminach płatności i monitorowanie ich realizacji.",
                    "en" => "Informing clients of upcoming payment deadlines and monitoring their fulfillment."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21122,
                "name" => json_encode([
                    "pl" => "Podejmowanie działań windykacyjnych w przypadku pierwszych oznak opóźnień, aby zapobiec dalszym zaległościom.",
                    "en" => "Taking collection actions at the first signs of delay to prevent further arrears."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21123,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów na temat terminowości spłat i stanu portfela należności dla działu finansowego i zarządu.",
                    "en" => "Creating reports on payment timeliness and the receivables portfolio status for the finance department and management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];

        $ASYSTENTKA_DO_SPRAW_KSIĘGOWOŚCI = [
            [
            "id" => 21124,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowywaniu dokumentów finansowych i raportów księgowych.",
                    "en" => "Assisting in the preparation of financial documents and accounting reports."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21125,
                "name" => json_encode([
                    "pl" => "Wprowadzanie danych do systemów księgowych.",
                    "en" => "Entering data into accounting systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21126,
                "name" => json_encode([
                    "pl" => "Monitorowanie płatności i rozliczeń.",
                    "en" => "Monitoring payments and settlements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21127,
                "name" => json_encode([
                    "pl" => "Wspieranie procesu tworzenia budżetu i analiz finansowych.",
                    "en" => "Supporting the budgeting and financial analysis process."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21128,
                "name" => json_encode([
                    "pl" => "Utrzymywanie porządku w dokumentacji finansowej i księgowej.",
                    "en" => "Maintaining order in financial and accounting documentation."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21129,
                "name" => json_encode([
                    "pl" => "Wsparcie w kontaktach z klientami i dostawcami w sprawach finansowych.",
                    "en" => "Supporting communication with clients and suppliers on financial matters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21130,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentów do audytów wewnętrznych i zewnętrznych.",
                    "en" => "Preparing documents for internal and external audits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21131,
                "name" => json_encode([
                    "pl" => "Wspieranie zespołu księgowego w bieżących zadaniach administracyjnych.",
                    "en" => "Supporting the accounting team in daily administrative tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $FAKTURZYSTKA = [
            [
            "id" => 21132,
                "name" => json_encode([
                    "pl" => "Wystawianie faktur sprzedażowych i korygujących.",
                    "en" => "Issuing sales and correction invoices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21133,
                "name" => json_encode([
                    "pl" => "Sprawdzanie poprawności danych na fakturach.",
                    "en" => "Checking the accuracy of invoice data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21134,
                "name" => json_encode([
                    "pl" => "Monitorowanie terminowości płatności od klientów.",
                    "en" => "Monitoring the timeliness of customer payments."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21135,
                "name" => json_encode([
                    "pl" => "Komunikacja z klientami w celu wyjaśnienia nieścisłości na fakturach.",
                    "en" => "Communicating with clients to clarify discrepancies on invoices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21136,
                "name" => json_encode([
                    "pl" => "Prowadzenie ewidencji faktur w systemie księgowym.",
                    "en" => "Maintaining invoice records in the accounting system."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21137,
                "name" => json_encode([
                    "pl" => "Współpraca z działem księgowości w zakresie obiegu dokumentów.",
                    "en" => "Collaborating with the accounting department regarding document flow."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21138,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów dotyczących wystawionych faktur.",
                    "en" => "Preparing reports on issued invoices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21139,
                "name" => json_encode([
                    "pl" => "Obsługa systemów fakturowania i baz danych klientów.",
                    "en" => "Managing invoicing systems and customer databases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $TECHNIK_RACHUNKOWOŚCI = [
            [
            "id" => 21140,
                "name" => json_encode([
                    "pl" => "Prowadzenie ksiąg rachunkowych zgodnie z obowiązującymi przepisami.",
                    "en" => "Maintaining accounting books in accordance with applicable regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21141,
                "name" => json_encode([
                    "pl" => "Przygotowywanie deklaracji podatkowych i innych dokumentów wymaganych przez prawo.",
                    "en" => "Preparing tax declarations and other legally required documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21142,
                "name" => json_encode([
                    "pl" => "Analiza i interpretacja danych finansowych na potrzeby zarządzania.",
                    "en" => "Analyzing and interpreting financial data for management purposes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21143,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów finansowych dla kierownictwa firmy.",
                    "en" => "Preparing financial reports for company management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21144,
                "name" => json_encode([
                    "pl" => "Kontrola poprawności i kompletności dokumentów księgowych.",
                    "en" => "Controlling the accuracy and completeness of accounting documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21145,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami finansowymi i urzędami skarbowymi.",
                    "en" => "Collaborating with financial institutions and tax offices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21146,
                "name" => json_encode([
                    "pl" => "Wsparcie w sporządzaniu sprawozdań finansowych.",
                    "en" => "Supporting the preparation of financial statements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21147,
                "name" => json_encode([
                    "pl" => "Monitorowanie zmian w przepisach podatkowych i rachunkowych.",
                    "en" => "Monitoring changes in tax and accounting regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_PRACOWNICY_DO_SPRAW_RACHUNKOWOŚCI_I_KSIĘGOWOŚCI = [
            [
            "id" => 21148,
                "name" => json_encode([
                    "pl" => "Wspieranie działań księgowych i rachunkowych poprzez przygotowywanie dokumentów finansowych.",
                    "en" => "Supporting accounting and bookkeeping activities by preparing financial documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21149,
                "name" => json_encode([
                    "pl" => "Weryfikacja i archiwizacja dokumentów finansowych oraz księgowych.",
                    "en" => "Verification and archiving of financial and accounting documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21150,
                "name" => json_encode([
                    "pl" => "Wprowadzanie danych do systemów finansowo-księgowych.",
                    "en" => "Entering data into financial and accounting systems."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21151,
                "name" => json_encode([
                    "pl" => "Wsparcie przy rozliczaniu kosztów i przychodów firmy.",
                    "en" => "Assisting in the settlement of company costs and revenues."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21152,
                "name" => json_encode([
                    "pl" => "Kontrola poprawności dokumentów pod kątem zgodności z przepisami.",
                    "en" => "Checking documents for compliance with regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21153,
                "name" => json_encode([
                    "pl" => "Współpraca z działem księgowości i innymi działami w zakresie obiegu dokumentów.",
                    "en" => "Collaborating with the accounting department and other departments regarding document flow."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21154,
                "name" => json_encode([
                    "pl" => "Przygotowywanie prostych raportów finansowych i zestawień.",
                    "en" => "Preparing basic financial reports and summaries."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21155,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowywaniu dokumentacji do audytów finansowych.",
                    "en" => "Assisting in the preparation of documentation for financial audits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISCI_WOLNEGO_KSIEGOWEGO_SPOZA_KZIS = [
            [
            "id" => 21156,
                "name" => json_encode([
                    "pl" => "Samodzielne prowadzenie pełnej księgowości dla klientów indywidualnych i firm.",
                    "en" => "Independently managing full accounting for individual and corporate clients."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21157,
                "name" => json_encode([
                    "pl" => "Sporządzanie deklaracji podatkowych i raportów finansowych zgodnie z przepisami prawa.",
                    "en" => "Preparing tax declarations and financial reports in accordance with legal regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21158,
                "name" => json_encode([
                    "pl" => "Konsultacje i doradztwo w zakresie rachunkowości oraz optymalizacji podatkowej.",
                    "en" => "Providing consultations and advice on accounting and tax optimization."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21159,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz finansowych na potrzeby klientów.",
                    "en" => "Conducting financial analyses for clients' needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21160,
                "name" => json_encode([
                    "pl" => "Zapewnienie zgodności dokumentacji księgowej z obowiązującymi przepisami.",
                    "en" => "Ensuring that accounting documentation complies with current regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21161,
                "name" => json_encode([
                    "pl" => "Reprezentowanie klientów przed organami podatkowymi i urzędami skarbowymi.",
                    "en" => "Representing clients before tax authorities and revenue offices."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21162,
                "name" => json_encode([
                    "pl" => "Tworzenie sprawozdań finansowych i ich prezentacja na potrzeby zarządzania.",
                    "en" => "Creating financial statements and presenting them for management purposes."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21163,
                "name" => json_encode([
                    "pl" => "Śledzenie zmian w przepisach księgowych i podatkowych oraz dostosowywanie działań do nowych wymogów.",
                    "en" => "Tracking changes in accounting and tax regulations and adapting activities to new requirements."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $SPECJALISTA_DO_SPRAW_RACHUNKOWOŚCI = [
            [
            "id" => 21164,
                "name" => json_encode([
                    "pl" => "Prowadzenie ksiąg rachunkowych zgodnie z obowiązującymi przepisami.",
                    "en" => "Maintaining accounting books in accordance with applicable regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21165,
                "name" => json_encode([
                    "pl" => "Przygotowywanie raportów finansowych i sprawozdań dla kierownictwa firmy.",
                    "en" => "Preparing financial reports and statements for company management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21166,
                "name" => json_encode([
                    "pl" => "Weryfikacja i analiza dokumentów finansowych pod kątem zgodności z przepisami.",
                    "en" => "Verifying and analyzing financial documents for compliance with regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21167,
                "name" => json_encode([
                    "pl" => "Rozliczanie podatków i przygotowywanie deklaracji podatkowych.",
                    "en" => "Calculating taxes and preparing tax declarations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21168,
                "name" => json_encode([
                    "pl" => "Monitorowanie zmian w przepisach księgowych i podatkowych.",
                    "en" => "Monitoring changes in accounting and tax regulations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21169,
                "name" => json_encode([
                    "pl" => "Kontrola kosztów i analiza efektywności finansowej firmy.",
                    "en" => "Cost control and analysis of the company's financial efficiency."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21170,
                "name" => json_encode([
                    "pl" => "Przygotowywanie dokumentacji na potrzeby audytów wewnętrznych i zewnętrznych.",
                    "en" => "Preparing documentation for internal and external audits."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21171,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie optymalizacji kosztów i zarządzania finansami.",
                    "en" => "Providing advice on cost optimization and financial management."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $EKONOMETRYK = [
            [
            "id" => 21172,
                "name" => json_encode([
                    "pl" => "Analizowanie danych ekonomicznych przy użyciu metod ekonometrycznych.",
                    "en" => "Analyzing economic data using econometric methods."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21173,
                "name" => json_encode([
                    "pl" => "Budowanie modeli ekonometrycznych w celu prognozowania trendów gospodarczych.",
                    "en" => "Building econometric models to forecast economic trends."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21174,
                "name" => json_encode([
                    "pl" => "Przeprowadzanie analiz statystycznych i obliczeń na potrzeby badań rynkowych.",
                    "en" => "Conducting statistical analyses and calculations for market research."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21175,
                "name" => json_encode([
                    "pl" => "Opracowywanie i testowanie hipotez ekonomicznych na podstawie danych.",
                    "en" => "Developing and testing economic hypotheses based on data."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21176,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów i wizualizacji danych dla wsparcia decyzji biznesowych.",
                    "en" => "Creating reports and data visualizations to support business decisions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21177,
                "name" => json_encode([
                    "pl" => "Interpretacja wyników analiz ekonometrycznych i przedstawianie rekomendacji.",
                    "en" => "Interpreting econometric analysis results and presenting recommendations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21178,
                "name" => json_encode([
                    "pl" => "Monitorowanie zmian w gospodarce i dostosowywanie modeli prognostycznych.",
                    "en" => "Monitoring changes in the economy and adjusting forecasting models."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21179,
                "name" => json_encode([
                    "pl" => "Współpraca z zespołami analitycznymi i zarządzającymi w celu wspierania strategii biznesowych.",
                    "en" => "Collaborating with analytical and management teams to support business strategies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_EKONOMIŚCI = [
            [
            "id" => 21180,
                "name" => json_encode([
                    "pl" => "Analiza danych ekonomicznych w celu identyfikacji trendów gospodarczych.",
                    "en" => "Analyzing economic data to identify economic trends."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21181,
                "name" => json_encode([
                    "pl" => "Opracowywanie prognoz makroekonomicznych i mikroekonomicznych.",
                    "en" => "Developing macroeconomic and microeconomic forecasts."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21182,
                "name" => json_encode([
                    "pl" => "Badanie wpływu polityk gospodarczych na różne sektory rynku.",
                    "en" => "Studying the impact of economic policies on various market sectors."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21183,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów i analiz na potrzeby przedsiębiorstw lub instytucji publicznych.",
                    "en" => "Creating reports and analyses for businesses or public institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21184,
                "name" => json_encode([
                    "pl" => "Monitorowanie wskaźników gospodarczych i ich wpływu na rynki finansowe.",
                    "en" => "Monitoring economic indicators and their impact on financial markets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21185,
                "name" => json_encode([
                    "pl" => "Doradztwo w zakresie strategii ekonomicznych i finansowych.",
                    "en" => "Providing advice on economic and financial strategies."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21186,
                "name" => json_encode([
                    "pl" => "Udział w projektach badawczych związanych z gospodarką i rynkami.",
                    "en" => "Participating in research projects related to the economy and markets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21187,
                "name" => json_encode([
                    "pl" => "Współpraca z instytucjami finansowymi i naukowymi w celu wymiany wiedzy.",
                    "en" => "Collaborating with financial and academic institutions to exchange knowledge."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ASYSTENT_PROKURATORA = [
            [
            "id" => 21188,
                "name" => json_encode([
                    "pl" => "Przygotowywanie projektów pism procesowych i decyzji na potrzeby prokuratora.",
                    "en" => "Preparing drafts of procedural documents and decisions for the prosecutor."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21189,
                "name" => json_encode([
                    "pl" => "Analiza akt sprawy i sporządzanie opinii prawnych.",
                    "en" => "Analyzing case files and preparing legal opinions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21190,
                "name" => json_encode([
                    "pl" => "Wsparcie w przygotowywaniu materiałów dowodowych do postępowania.",
                    "en" => "Supporting the preparation of evidence materials for proceedings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21191,
                "name" => json_encode([
                    "pl" => "Zbieranie i porządkowanie informacji niezbędnych do prowadzenia spraw.",
                    "en" => "Collecting and organizing information necessary for case handling."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21192,
                "name" => json_encode([
                    "pl" => "Przygotowywanie projektów odpowiedzi na pisma procesowe.",
                    "en" => "Drafting responses to procedural documents."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21193,
                "name" => json_encode([
                    "pl" => "Współpraca z funkcjonariuszami organów ścigania i innymi instytucjami.",
                    "en" => "Collaborating with law enforcement officers and other institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21194,
                "name" => json_encode([
                    "pl" => "Organizowanie i prowadzenie dokumentacji związanej z prowadzonymi postępowaniami.",
                    "en" => "Organizing and managing documentation related to ongoing proceedings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21195,
                "name" => json_encode([
                    "pl" => "Pomoc w przygotowywaniu wystąpień prokuratora w postępowaniach sądowych.",
                    "en" => "Assisting in the preparation of the prosecutor's appearances in court proceedings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $ASYSTENT_SĘDZIEGO = [
            [
            "id" => 21196,
                "name" => json_encode([
                    "pl" => "Przygotowywanie projektów orzeczeń sądowych i uzasadnień.",
                    "en" => "Preparing drafts of court rulings and their justifications."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21197,
                "name" => json_encode([
                    "pl" => "Analiza akt sprawy i sporządzanie notatek na ich podstawie.",
                    "en" => "Analyzing case files and preparing notes based on them."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21198,
                "name" => json_encode([
                    "pl" => "Wsparcie sędziego w przygotowywaniu postanowień i zarządzeń.",
                    "en" => "Supporting the judge in preparing decisions and orders."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21199,
                "name" => json_encode([
                    "pl" => "Gromadzenie i analiza przepisów prawnych związanych z prowadzonymi sprawami.",
                    "en" => "Collecting and analyzing legal provisions related to ongoing cases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21200,
                "name" => json_encode([
                    "pl" => "Przygotowywanie zestawień i raportów na potrzeby sędziego.",
                    "en" => "Preparing summaries and reports for the judge."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21201,
                "name" => json_encode([
                    "pl" => "Organizowanie dokumentacji i akt spraw dla zapewnienia sprawnego prowadzenia postępowań.",
                    "en" => "Organizing documentation and case files to ensure smooth proceedings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21202,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi jednostkami sądu oraz urzędnikami sądowymi.",
                    "en" => "Collaborating with other court units and judicial officers."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21203,
                "name" => json_encode([
                    "pl" => "Pomoc w obsłudze postępowań administracyjnych i sądowych.",
                    "en" => "Assisting in handling administrative and judicial proceedings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $RADCA_PROKURATORII_GENERALNEJ_RP = [
            [
            "id" => 21204,
                "name" => json_encode([
                    "pl" => "Reprezentowanie Skarbu Państwa w postępowaniach sądowych i administracyjnych.",
                    "en" => "Representing the State Treasury in court and administrative proceedings."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21205,
                "name" => json_encode([
                    "pl" => "Przygotowywanie opinii prawnych i analiz dla organów państwowych.",
                    "en" => "Preparing legal opinions and analyses for state authorities."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21206,
                "name" => json_encode([
                    "pl" => "Prowadzenie negocjacji prawnych w imieniu państwowych instytucji.",
                    "en" => "Conducting legal negotiations on behalf of state institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21207,
                "name" => json_encode([
                    "pl" => "Analiza zgodności działań państwowych organów z obowiązującym prawem.",
                    "en" => "Analyzing compliance of state authorities' actions with applicable law."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21208,
                "name" => json_encode([
                    "pl" => "Przygotowywanie projektów aktów prawnych i wniosków sądowych.",
                    "en" => "Preparing drafts of legal acts and court motions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21209,
                "name" => json_encode([
                    "pl" => "Wspieranie organów państwowych w realizacji zadań prawnych i administracyjnych.",
                    "en" => "Supporting state authorities in performing legal and administrative tasks."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21210,
                "name" => json_encode([
                    "pl" => "Tworzenie raportów i rekomendacji w sprawach prawnych i administracyjnych.",
                    "en" => "Creating reports and recommendations on legal and administrative matters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21211,
                "name" => json_encode([
                    "pl" => "Zarządzanie sprawami prawnymi dotyczącymi majątku Skarbu Państwa.",
                    "en" => "Managing legal matters concerning State Treasury assets."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];
        $POZOSTALI_SPECJALIŚCI_Z_DZIEDZINY_PRAWA_GDZIE_INDZIEJ_NIESKLASYFIKOWANI = [
            [
            "id" => 21212,
                "name" => json_encode([
                    "pl" => "Przygotowywanie ekspertyz prawnych i analiz dla klientów indywidualnych i instytucji.",
                    "en" => "Preparing legal expertise and analyses for individual clients and institutions."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21213,
                "name" => json_encode([
                    "pl" => "Udzielanie porad prawnych i konsultacji w nietypowych sprawach prawnych.",
                    "en" => "Providing legal advice and consultations on unusual legal matters."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21214,
                "name" => json_encode([
                    "pl" => "Tworzenie dokumentacji prawnej dostosowanej do potrzeb klienta.",
                    "en" => "Creating legal documentation tailored to the client's needs."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21215,
                "name" => json_encode([
                    "pl" => "Reprezentowanie klientów w postępowaniach sądowych i mediacjach.",
                    "en" => "Representing clients in court proceedings and mediations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21216,
                "name" => json_encode([
                    "pl" => "Monitorowanie zmian w prawie i ich wpływu na działalność klientów.",
                    "en" => "Monitoring legal changes and their impact on clients' operations."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21217,
                "name" => json_encode([
                    "pl" => "Współpraca z innymi specjalistami z dziedziny prawa i administracji.",
                    "en" => "Collaborating with other specialists in law and administration."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21218,
                "name" => json_encode([
                    "pl" => "Przygotowywanie analiz i raportów dotyczących nietypowych przypadków prawnych.",
                    "en" => "Preparing analyses and reports on unusual legal cases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ],
            [
                "id" => 21219,
                "name" => json_encode([
                    "pl" => "Opracowywanie strategii prawnych w złożonych i nietypowych sprawach.",
                    "en" => "Developing legal strategies in complex and unusual cases."
                ]),
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]
        ];




        DB::table('detail_projects')->insert(array_merge(
            $ANALITYK_GIEŁDOWY,
            $ANALITYK_KREDYTOWY,
            $PROJEKTANT_PAKIETÓW_USŁUG_FINANSOWYCH,
            $SPECJALISTA_BANKOWOŚCI,
            $SPECJALISTA_DO_SPRAW_FACTORINGU,
            $ANALITYK_FINANSOWY,
            $SPECJALISTA_DO_SPRAW_UBEZPIECZEŃ_MAJĄTKOWYCH_I_OSOBOWYCH,
            $SPECJALISTA_DO_SPRAW_UBEZPIECZEŃ_SPOŁECZNYCH,
            $SPECJALISTA_DO_SPRAW_UBEZPIECZEŃ_ZDROWOTNYCH,
            $SPECJALISTA_DO_SPRAW_ANALIZY_RYZYKA_UBEZPIECZENIOWEGO,
            $ANALITYK_INWESTYCYJNY,
            $POZOSTALI_ANALITYCY_FINANSOWI,
            $DORADCA_EMERYTALNY,
            $DORADCA_FINANSOWY,
            $DORADCA_INWESTYCYJNY,
            $DORADCA_PODATKOWY,
            $DORADCA_DO_SPRAW_LEASINGU,
            $SPECJALISTA_DO_SPRAW_TWORZENIA_BIZNESPLANÓW,
            $POZOSTALI_DORADCY_FINANSOWI_I_INWESTYCYJNI,
            $DEALER_AKTYWÓW_FINANSOWYCH,
            $MAKLER_PAPIERÓW_WARTOŚCIOWYCH,
            $POŚREDNIK_FINANSOWY,
            $PRACOWNIK_DO_SPRAW_PRODUKTÓW_FINANSOWYCH,
            $PRACOWNIK_SCENTRALIZOWANYCH_SYSTEMÓW_ROZLICZENIOWYCH,
            $POZOSTALI_DEALERZY_I_MAKLERZY_AKTYWÓW_FINANSOWYCH,
            $PRACOWNIK_DO_SPRAW_KREDYTÓW,
            $PRACOWNIK_DO_SPRAW_POŻYCZEK,
            $PRACOWNIK_OBSŁUGI_KLIENTA_INSTYTUCJI_FINANSOWEJ,
            $POZOSTALI_PRACOWNICY_DO_SPRAW_KREDYTÓW_POŻYCZEK_I_POKREWNI,
            $WINDYKATOR,
            $POZOSTALI_WINDYKATORZY_I_POKREWNI,
            $ASYSTENTKA_DO_SPRAW_KSIĘGOWOŚCI,
            $FAKTURZYSTKA,
            $TECHNIK_RACHUNKOWOŚCI,
            $POZOSTALI_PRACOWNICY_DO_SPRAW_RACHUNKOWOŚCI_I_KSIĘGOWOŚCI,
            $SPECJALISCI_WOLNEGO_KSIEGOWEGO_SPOZA_KZIS,
            $SPECJALISTA_DO_SPRAW_RACHUNKOWOŚCI,
            $EKONOMETRYK,
            $POZOSTALI_EKONOMIŚCI,
            $ASYSTENT_PROKURATORA,
            $ASYSTENT_SĘDZIEGO,
            $RADCA_PROKURATORII_GENERALNEJ_RP,
            $POZOSTALI_SPECJALIŚCI_Z_DZIEDZINY_PRAWA_GDZIE_INDZIEJ_NIESKLASYFIKOWANI
            ));

        Category::whereId('289')->first()->detailprojects()->attach(collect($ANALITYK_GIEŁDOWY)->pluck('id')->toArray());
        Category::whereId('290')->first()->detailprojects()->attach(collect($ANALITYK_KREDYTOWY)->pluck('id')->toArray());
        Category::whereId('291')->first()->detailprojects()->attach(collect($PROJEKTANT_PAKIETÓW_USŁUG_FINANSOWYCH)->pluck('id')->toArray());
        Category::whereId('292')->first()->detailprojects()->attach(collect($SPECJALISTA_BANKOWOŚCI)->pluck('id')->toArray());
        Category::whereId('293')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_FACTORINGU)->pluck('id')->toArray());
        Category::whereId('294')->first()->detailprojects()->attach(collect($ANALITYK_FINANSOWY)->pluck('id')->toArray());
        Category::whereId('295')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_UBEZPIECZEŃ_MAJĄTKOWYCH_I_OSOBOWYCH)->pluck('id')->toArray());
        Category::whereId('296')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_UBEZPIECZEŃ_SPOŁECZNYCH)->pluck('id')->toArray());
        Category::whereId('297')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_UBEZPIECZEŃ_ZDROWOTNYCH)->pluck('id')->toArray());
        Category::whereId('298')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_ANALIZY_RYZYKA_UBEZPIECZENIOWEGO)->pluck('id')->toArray());
        Category::whereId('299')->first()->detailprojects()->attach(collect($ANALITYK_INWESTYCYJNY)->pluck('id')->toArray());
        Category::whereId('302')->first()->detailprojects()->attach(collect($DORADCA_EMERYTALNY)->pluck('id')->toArray());
        Category::whereId('303')->first()->detailprojects()->attach(collect($DORADCA_FINANSOWY)->pluck('id')->toArray());
        Category::whereId('304')->first()->detailprojects()->attach(collect($DORADCA_INWESTYCYJNY)->pluck('id')->toArray());
        Category::whereId('305')->first()->detailprojects()->attach(collect($DORADCA_PODATKOWY)->pluck('id')->toArray());
        Category::whereId('306')->first()->detailprojects()->attach(collect($DORADCA_DO_SPRAW_LEASINGU)->pluck('id')->toArray());
        Category::whereId('307')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_TWORZENIA_BIZNESPLANÓW)->pluck('id')->toArray());
        Category::whereId('308')->first()->detailprojects()->attach(collect($POZOSTALI_DORADCY_FINANSOWI_I_INWESTYCYJNI)->pluck('id')->toArray());
        Category::whereId('310')->first()->detailprojects()->attach(collect($DEALER_AKTYWÓW_FINANSOWYCH)->pluck('id')->toArray());
        Category::whereId('311')->first()->detailprojects()->attach(collect($MAKLER_PAPIERÓW_WARTOŚCIOWYCH)->pluck('id')->toArray());
        Category::whereId('312')->first()->detailprojects()->attach(collect($POŚREDNIK_FINANSOWY)->pluck('id')->toArray());
        Category::whereId('313')->first()->detailprojects()->attach(collect($PRACOWNIK_DO_SPRAW_PRODUKTÓW_FINANSOWYCH)->pluck('id')->toArray());
        Category::whereId('314')->first()->detailprojects()->attach(collect($PRACOWNIK_SCENTRALIZOWANYCH_SYSTEMÓW_ROZLICZENIOWYCH)->pluck('id')->toArray());
        Category::whereId('315')->first()->detailprojects()->attach(collect($POZOSTALI_DEALERZY_I_MAKLERZY_AKTYWÓW_FINANSOWYCH)->pluck('id')->toArray());
        Category::whereId('317')->first()->detailprojects()->attach(collect($PRACOWNIK_DO_SPRAW_KREDYTÓW)->pluck('id')->toArray());
        Category::whereId('318')->first()->detailprojects()->attach(collect($PRACOWNIK_DO_SPRAW_POŻYCZEK)->pluck('id')->toArray());
        Category::whereId('319')->first()->detailprojects()->attach(collect($PRACOWNIK_OBSŁUGI_KLIENTA_INSTYTUCJI_FINANSOWEJ)->pluck('id')->toArray());
        Category::whereId('320')->first()->detailprojects()->attach(collect($POZOSTALI_PRACOWNICY_DO_SPRAW_KREDYTÓW_POŻYCZEK_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('366')->first()->detailprojects()->attach(collect($WINDYKATOR)->pluck('id')->toArray());
        Category::whereId('367')->first()->detailprojects()->attach(collect($POZOSTALI_WINDYKATORZY_I_POKREWNI)->pluck('id')->toArray());
        Category::whereId('336')->first()->detailprojects()->attach(collect($ASYSTENTKA_DO_SPRAW_KSIĘGOWOŚCI)->pluck('id')->toArray());
        Category::whereId('337')->first()->detailprojects()->attach(collect($FAKTURZYSTKA)->pluck('id')->toArray());
        Category::whereId('338')->first()->detailprojects()->attach(collect($TECHNIK_RACHUNKOWOŚCI)->pluck('id')->toArray());
        Category::whereId('339')->first()->detailprojects()->attach(collect($POZOSTALI_PRACOWNICY_DO_SPRAW_RACHUNKOWOŚCI_I_KSIĘGOWOŚCI)->pluck('id')->toArray());
        Category::whereId('356')->first()->detailprojects()->attach(collect($SPECJALISCI_WOLNEGO_KSIEGOWEGO_SPOZA_KZIS)->pluck('id')->toArray());
        Category::whereId('357')->first()->detailprojects()->attach(collect($SPECJALISTA_DO_SPRAW_RACHUNKOWOŚCI)->pluck('id')->toArray());
        Category::whereId('361')->first()->detailprojects()->attach(collect($EKONOMETRYK)->pluck('id')->toArray());
        Category::whereId('363')->first()->detailprojects()->attach(collect($POZOSTALI_EKONOMIŚCI)->pluck('id')->toArray());
        Category::whereId('376')->first()->detailprojects()->attach(collect($ASYSTENT_PROKURATORA)->pluck('id')->toArray());
        Category::whereId('377')->first()->detailprojects()->attach(collect($ASYSTENT_SĘDZIEGO)->pluck('id')->toArray());
        Category::whereId('381')->first()->detailprojects()->attach(collect($RADCA_PROKURATORII_GENERALNEJ_RP)->pluck('id')->toArray());
        Category::whereId('384')->first()->detailprojects()->attach(collect($POZOSTALI_SPECJALIŚCI_Z_DZIEDZINY_PRAWA_GDZIE_INDZIEJ_NIESKLASYFIKOWANI)->pluck('id')->toArray());

    }
}
